<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
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
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Core/CustomField.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * CustomField
 *
 * @CiviAPI\Entity("CustomField")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_custom_field", uniqueConstraints={@ORM\UniqueConstraint(name="UI_label_custom_group_id", columns={"label","custom_group_id"}),@ORM\UniqueConstraint(name="UI_name_custom_group_id", columns={"name","custom_group_id"})}, indexes={@ORM\Index(name="FK_civicrm_custom_field_custom_group_id", columns={"custom_group_id"})})
 * @ORM\Entity
 * @Hateoas\Relation("self",
 *   href = @Hateoas\Route(
 *    "CustomField_get",
 *    parameters = { "id" = "expr(object.getId())" },
 *    absolute = true,
 *    generator = "civi"
 *  )
 * )
 *
 */
class CustomField extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true} )
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var \Civi\Core\CustomGroup
   *
   * @ORM\ManyToOne(targetEntity="Civi\Core\CustomGroup")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="custom_group_id", referencedColumnName="id", onDelete="CASCADE")})
   */
  private $customGroup;
  
  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=64, nullable=true)
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @ORM\Column(name="label", type="string", length=255, nullable=true)
   * 
   */
  private $label;
  
  /**
   * @var string
   *
   * @ORM\Column(name="data_type", type="string", length=16, nullable=true)
   * 
   */
  private $dataType;
  
  /**
   * @var string
   *
   * @ORM\Column(name="html_type", type="string", length=32, nullable=true)
   * 
   */
  private $htmlType;
  
  /**
   * @var string
   *
   * @ORM\Column(name="default_value", type="string", length=255, nullable=true)
   * 
   */
  private $defaultValue;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_required", type="boolean", nullable=true)
   * 
   */
  private $isRequired;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_searchable", type="boolean", nullable=true)
   * 
   */
  private $isSearchable;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_search_range", type="boolean", nullable=false)
   * 
   */
  private $isSearchRange = '0';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="weight", type="integer", nullable=false, options={"unsigned":true})
   * 
   */
  private $weight = '1';
  
  /**
   * @var text
   *
   * @ORM\Column(name="help_pre", type="text", nullable=true)
   * 
   */
  private $helpPre;
  
  /**
   * @var text
   *
   * @ORM\Column(name="help_post", type="text", nullable=true)
   * 
   */
  private $helpPost;
  
  /**
   * @var string
   *
   * @ORM\Column(name="mask", type="string", length=64, nullable=true)
   * 
   */
  private $mask;
  
  /**
   * @var string
   *
   * @ORM\Column(name="attributes", type="string", length=255, nullable=true)
   * 
   */
  private $attributes;
  
  /**
   * @var string
   *
   * @ORM\Column(name="javascript", type="string", length=255, nullable=true)
   * 
   */
  private $javascript;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_active", type="boolean", nullable=true)
   * 
   */
  private $isActive;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_view", type="boolean", nullable=true)
   * 
   */
  private $isView;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="options_per_line", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $optionsPerLine;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="text_length", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $textLength;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="start_date_years", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $startDateYears;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="end_date_years", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $endDateYears;
  
  /**
   * @var string
   *
   * @ORM\Column(name="date_format", type="string", length=64, nullable=true)
   * 
   */
  private $dateFormat;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="time_format", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $timeFormat;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="note_columns", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $noteColumns;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="note_rows", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $noteRows;
  
  /**
   * @var string
   *
   * @ORM\Column(name="column_name", type="string", length=255, nullable=true)
   * 
   */
  private $columnName;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="option_group_id", type="integer", nullable=true, options={"unsigned":true})
   * 
   */
  private $optionGroupId;
  
  /**
   * @var string
   *
   * @ORM\Column(name="filter", type="string", length=255, nullable=true)
   * 
   */
  private $filter;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="in_selector", type="boolean", nullable=false)
   * 
   */
  private $inSelector = '0';

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set customGroup
   *
   * @param \Civi\Core\CustomGroup $customGroup
   * @return CustomField
   */
  public function setCustomGroup(\Civi\Core\CustomGroup $customGroup = null) {
    $this->customGroup = $customGroup;
    return $this;
  }

  /**
   * Get customGroup
   *
   * @return \Civi\Core\CustomGroup
   */
  public function getCustomGroup() {
    return $this->customGroup;
  }
  
  /**
   * Set name
   *
   * @param string $name
   * @return CustomField
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set label
   *
   * @param string $label
   * @return CustomField
   */
  public function setLabel($label) {
    $this->label = $label;
    return $this;
  }

  /**
   * Get label
   *
   * @return string
   */
  public function getLabel() {
    return $this->label;
  }
  
  /**
   * Set dataType
   *
   * @param string $dataType
   * @return CustomField
   */
  public function setDataType($dataType) {
    $this->dataType = $dataType;
    return $this;
  }

  /**
   * Get dataType
   *
   * @return string
   */
  public function getDataType() {
    return $this->dataType;
  }
  
  /**
   * Set htmlType
   *
   * @param string $htmlType
   * @return CustomField
   */
  public function setHtmlType($htmlType) {
    $this->htmlType = $htmlType;
    return $this;
  }

  /**
   * Get htmlType
   *
   * @return string
   */
  public function getHtmlType() {
    return $this->htmlType;
  }
  
  /**
   * Set defaultValue
   *
   * @param string $defaultValue
   * @return CustomField
   */
  public function setDefaultValue($defaultValue) {
    $this->defaultValue = $defaultValue;
    return $this;
  }

  /**
   * Get defaultValue
   *
   * @return string
   */
  public function getDefaultValue() {
    return $this->defaultValue;
  }
  
  /**
   * Set isRequired
   *
   * @param boolean $isRequired
   * @return CustomField
   */
  public function setIsRequired($isRequired) {
    $this->isRequired = $isRequired;
    return $this;
  }

  /**
   * Get isRequired
   *
   * @return boolean
   */
  public function getIsRequired() {
    return $this->isRequired;
  }
  
  /**
   * Set isSearchable
   *
   * @param boolean $isSearchable
   * @return CustomField
   */
  public function setIsSearchable($isSearchable) {
    $this->isSearchable = $isSearchable;
    return $this;
  }

  /**
   * Get isSearchable
   *
   * @return boolean
   */
  public function getIsSearchable() {
    return $this->isSearchable;
  }
  
  /**
   * Set isSearchRange
   *
   * @param boolean $isSearchRange
   * @return CustomField
   */
  public function setIsSearchRange($isSearchRange) {
    $this->isSearchRange = $isSearchRange;
    return $this;
  }

  /**
   * Get isSearchRange
   *
   * @return boolean
   */
  public function getIsSearchRange() {
    return $this->isSearchRange;
  }
  
  /**
   * Set weight
   *
   * @param integer $weight
   * @return CustomField
   */
  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

  /**
   * Get weight
   *
   * @return integer
   */
  public function getWeight() {
    return $this->weight;
  }
  
  /**
   * Set helpPre
   *
   * @param text $helpPre
   * @return CustomField
   */
  public function setHelpPre($helpPre) {
    $this->helpPre = $helpPre;
    return $this;
  }

  /**
   * Get helpPre
   *
   * @return text
   */
  public function getHelpPre() {
    return $this->helpPre;
  }
  
  /**
   * Set helpPost
   *
   * @param text $helpPost
   * @return CustomField
   */
  public function setHelpPost($helpPost) {
    $this->helpPost = $helpPost;
    return $this;
  }

  /**
   * Get helpPost
   *
   * @return text
   */
  public function getHelpPost() {
    return $this->helpPost;
  }
  
  /**
   * Set mask
   *
   * @param string $mask
   * @return CustomField
   */
  public function setMask($mask) {
    $this->mask = $mask;
    return $this;
  }

  /**
   * Get mask
   *
   * @return string
   */
  public function getMask() {
    return $this->mask;
  }
  
  /**
   * Set attributes
   *
   * @param string $attributes
   * @return CustomField
   */
  public function setAttributes($attributes) {
    $this->attributes = $attributes;
    return $this;
  }

  /**
   * Get attributes
   *
   * @return string
   */
  public function getAttributes() {
    return $this->attributes;
  }
  
  /**
   * Set javascript
   *
   * @param string $javascript
   * @return CustomField
   */
  public function setJavascript($javascript) {
    $this->javascript = $javascript;
    return $this;
  }

  /**
   * Get javascript
   *
   * @return string
   */
  public function getJavascript() {
    return $this->javascript;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return CustomField
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set isView
   *
   * @param boolean $isView
   * @return CustomField
   */
  public function setIsView($isView) {
    $this->isView = $isView;
    return $this;
  }

  /**
   * Get isView
   *
   * @return boolean
   */
  public function getIsView() {
    return $this->isView;
  }
  
  /**
   * Set optionsPerLine
   *
   * @param integer $optionsPerLine
   * @return CustomField
   */
  public function setOptionsPerLine($optionsPerLine) {
    $this->optionsPerLine = $optionsPerLine;
    return $this;
  }

  /**
   * Get optionsPerLine
   *
   * @return integer
   */
  public function getOptionsPerLine() {
    return $this->optionsPerLine;
  }
  
  /**
   * Set textLength
   *
   * @param integer $textLength
   * @return CustomField
   */
  public function setTextLength($textLength) {
    $this->textLength = $textLength;
    return $this;
  }

  /**
   * Get textLength
   *
   * @return integer
   */
  public function getTextLength() {
    return $this->textLength;
  }
  
  /**
   * Set startDateYears
   *
   * @param integer $startDateYears
   * @return CustomField
   */
  public function setStartDateYears($startDateYears) {
    $this->startDateYears = $startDateYears;
    return $this;
  }

  /**
   * Get startDateYears
   *
   * @return integer
   */
  public function getStartDateYears() {
    return $this->startDateYears;
  }
  
  /**
   * Set endDateYears
   *
   * @param integer $endDateYears
   * @return CustomField
   */
  public function setEndDateYears($endDateYears) {
    $this->endDateYears = $endDateYears;
    return $this;
  }

  /**
   * Get endDateYears
   *
   * @return integer
   */
  public function getEndDateYears() {
    return $this->endDateYears;
  }
  
  /**
   * Set dateFormat
   *
   * @param string $dateFormat
   * @return CustomField
   */
  public function setDateFormat($dateFormat) {
    $this->dateFormat = $dateFormat;
    return $this;
  }

  /**
   * Get dateFormat
   *
   * @return string
   */
  public function getDateFormat() {
    return $this->dateFormat;
  }
  
  /**
   * Set timeFormat
   *
   * @param integer $timeFormat
   * @return CustomField
   */
  public function setTimeFormat($timeFormat) {
    $this->timeFormat = $timeFormat;
    return $this;
  }

  /**
   * Get timeFormat
   *
   * @return integer
   */
  public function getTimeFormat() {
    return $this->timeFormat;
  }
  
  /**
   * Set noteColumns
   *
   * @param integer $noteColumns
   * @return CustomField
   */
  public function setNoteColumns($noteColumns) {
    $this->noteColumns = $noteColumns;
    return $this;
  }

  /**
   * Get noteColumns
   *
   * @return integer
   */
  public function getNoteColumns() {
    return $this->noteColumns;
  }
  
  /**
   * Set noteRows
   *
   * @param integer $noteRows
   * @return CustomField
   */
  public function setNoteRows($noteRows) {
    $this->noteRows = $noteRows;
    return $this;
  }

  /**
   * Get noteRows
   *
   * @return integer
   */
  public function getNoteRows() {
    return $this->noteRows;
  }
  
  /**
   * Set columnName
   *
   * @param string $columnName
   * @return CustomField
   */
  public function setColumnName($columnName) {
    $this->columnName = $columnName;
    return $this;
  }

  /**
   * Get columnName
   *
   * @return string
   */
  public function getColumnName() {
    return $this->columnName;
  }
  
  /**
   * Set optionGroupId
   *
   * @param integer $optionGroupId
   * @return CustomField
   */
  public function setOptionGroupId($optionGroupId) {
    $this->optionGroupId = $optionGroupId;
    return $this;
  }

  /**
   * Get optionGroupId
   *
   * @return integer
   */
  public function getOptionGroupId() {
    return $this->optionGroupId;
  }
  
  /**
   * Set filter
   *
   * @param string $filter
   * @return CustomField
   */
  public function setFilter($filter) {
    $this->filter = $filter;
    return $this;
  }

  /**
   * Get filter
   *
   * @return string
   */
  public function getFilter() {
    return $this->filter;
  }
  
  /**
   * Set inSelector
   *
   * @param boolean $inSelector
   * @return CustomField
   */
  public function setInSelector($inSelector) {
    $this->inSelector = $inSelector;
    return $this;
  }

  /**
   * Get inSelector
   *
   * @return boolean
   */
  public function getInSelector() {
    return $this->inSelector;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'custom_group_id' => array(
      
        'name' => 'custom_group_id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                'FKClassName' => 'CRM_Core_CustomGroup',
                                     'pseudoconstant' => array(
                                'table' => 'civicrm_custom_group',
                      'keyColumn' => 'id',
                      'labelColumn' => 'title',
                    )
                 ),
      
              'name' => array(
      
        'name' => 'name',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Name'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'label' => array(
      
        'name' => 'label',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Label'),
                        'required' => true,
                         'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'data_type' => array(
      
        'name' => 'data_type',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Data Type'),
                        'required' => true,
                         'maxlength' => 16,
                         'size' => CRM_Utils_Type::TWELVE,
                           
                                    
                                     'pseudoconstant' => array(
                                '0' => 'not in database',
                    )
                 ),
      
              'html_type' => array(
      
        'name' => 'html_type',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Html Type'),
                        'required' => true,
                         'maxlength' => 32,
                         'size' => CRM_Utils_Type::MEDIUM,
                           
                                    
                                     'pseudoconstant' => array(
                                '0' => 'not in database',
                    )
                 ),
      
              'default_value' => array(
      
        'name' => 'default_value',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Default Value'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'is_required' => array(
      
        'name' => 'is_required',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_searchable' => array(
      
        'name' => 'is_searchable',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_search_range' => array(
      
        'name' => 'is_search_range',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'weight' => array(
      
        'name' => 'weight',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Weight'),
                        'required' => true,
                                             
                                           'default' => '1',
         
                          ),
      
              'help_pre' => array(
      
        'name' => 'help_pre',
        'type' => CRM_Utils_Type::T_TEXT,
                'title' => ts('Help Pre'),
                                                     
                                    
                          ),
      
              'help_post' => array(
      
        'name' => 'help_post',
        'type' => CRM_Utils_Type::T_TEXT,
                'title' => ts('Help Post'),
                                                     
                                    
                          ),
      
              'mask' => array(
      
        'name' => 'mask',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Mask'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'attributes' => array(
      
        'name' => 'attributes',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Attributes'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'javascript' => array(
      
        'name' => 'javascript',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Javascript'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_view' => array(
      
        'name' => 'is_view',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'options_per_line' => array(
      
        'name' => 'options_per_line',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Options Per Line'),
                                                     
                                    
                          ),
      
              'text_length' => array(
      
        'name' => 'text_length',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Text Length'),
                                                     
                                    
                          ),
      
              'start_date_years' => array(
      
        'name' => 'start_date_years',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Start Date Years'),
                                                     
                                    
                          ),
      
              'end_date_years' => array(
      
        'name' => 'end_date_years',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('End Date Years'),
                                                     
                                    
                          ),
      
              'date_format' => array(
      
        'name' => 'date_format',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Date Format'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'time_format' => array(
      
        'name' => 'time_format',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Time Format'),
                                                     
                                    
                          ),
      
              'note_columns' => array(
      
        'name' => 'note_columns',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Note Columns'),
                                                     
                                    
                          ),
      
              'note_rows' => array(
      
        'name' => 'note_rows',
        'type' => CRM_Utils_Type::T_INT,
                'title' => ts('Note Rows'),
                                                     
                                    
                          ),
      
              'column_name' => array(
      
        'name' => 'column_name',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Column Name'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'option_group_id' => array(
      
        'name' => 'option_group_id',
        'type' => CRM_Utils_Type::T_INT,
                                                     
                                    
                          ),
      
              'filter' => array(
      
        'name' => 'filter',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Filter'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'in_selector' => array(
      
        'name' => 'in_selector',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                'title' => ts('In Selector'),
                                                     
                                    
                          ),
             );
    }
    return self::$_fields;
  }

}
