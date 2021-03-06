<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.5                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2014                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 * $Id$
 *
 */

/**
 * This class gets the name of the file to upload
 * TODO: CRM-11254 - There's still a lot of duplicate code in the 5 child classes that should be moved here
 */
abstract class CRM_Import_Form_MapField extends CRM_Core_Form {

  /**
   * Cache of preview data values
   *
   * @var array
   * @access protected
   */
  protected $_dataValues;

  /**
   * Mapper fields
   *
   * @var array
   * @access protected
   */
  protected $_mapperFields;

  /**
   * Loaded mapping ID
   *
   * @var int
   * @access protected
   */
  protected $_loadedMappingId;

  /**
   * Number of columns in import file
   *
   * @var int
   * @access protected
   */
  protected $_columnCount;

  /**
   * Column headers, if we have them
   *
   * @var array
   * @access protected
   */
  protected $_columnHeaders;

  /**
   * An array of booleans to keep track of whether a field has been used in
   * form building already.
   *
   * @var array
   * @access protected
   */
  protected $_fieldUsed;

  /**
   * Return a descriptive name for the page, used in wizard header
   *
   * @return string
   * @access public
   */
  public function getTitle() {
    return ts('Match Fields');
  }

  /**
   * Attempt to match header labels with our mapper fields
   *
   * @param header
   * @param mapperFields
   *
   * @return string
   * @access public
   */
  public function defaultFromHeader($header, &$patterns) {
    foreach ($patterns as $key => $re) {
      // Skip empty key/patterns
      if (!$key || !$re || strlen("$re") < 5) {
        continue;
      }

      // Scan through the headerPatterns defined in the schema for a match
      if (preg_match($re, $header)) {
        $this->_fieldUsed[$key] = TRUE;
        return $key;
      }
    }
    return '';
  }

  /**
   * Guess at the field names given the data and patterns from the schema
   *
   * @param patterns
   * @param index
   *
   * @return string
   * @access public
   */
  public function defaultFromData(&$patterns, $index) {
    $best     = '';
    $bestHits = 0;
    $n        = count($this->_dataValues);

    foreach ($patterns as $key => $re) {
      // Skip empty key/patterns
      if (!$key || !$re || strlen("$re") < 5) {
        continue;
      }

      /* Take a vote over the preview data set */
      $hits = 0;
      for ($i = 0; $i < $n; $i++) {
        if (isset($this->_dataValues[$i][$index])) {
          if (preg_match($re, $this->_dataValues[$i][$index])) {
            $hits++;
          }
        }
      }
      if ($hits > $bestHits) {
        $bestHits = $hits;
        $best = $key;
      }
    }

    if ($best != '') {
      $this->_fieldUsed[$best] = TRUE;
    }
    return $best;
  }

}
