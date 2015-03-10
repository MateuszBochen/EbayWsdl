<?php

namespace EbayWsdl;

class GetAttributesCSRequestType extends AbstractRequestType
{

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

    /**
     * @var int[] $AttributeSetID
     */
    protected $AttributeSetID = null;

    /**
     * @var boolean $IncludeCategoryMappingDetails
     */
    protected $IncludeCategoryMappingDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param string $AttributeSystemVersion
     * @param int[] $AttributeSetID
     * @param boolean $IncludeCategoryMappingDetails
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AttributeSystemVersion = null, array $AttributeSetID = null, $IncludeCategoryMappingDetails = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      $this->AttributeSetID = $AttributeSetID;
      $this->IncludeCategoryMappingDetails = $IncludeCategoryMappingDetails;
    }

    /**
     * @return string
     */
    public function getAttributeSystemVersion()
    {
      return $this->AttributeSystemVersion;
    }

    /**
     * @param string $AttributeSystemVersion
     * @return \EbayWsdl\GetAttributesCSRequestType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAttributeSetID()
    {
      return $this->AttributeSetID;
    }

    /**
     * @param int[] $AttributeSetID
     * @return \EbayWsdl\GetAttributesCSRequestType
     */
    public function setAttributeSetID(array $AttributeSetID)
    {
      $this->AttributeSetID = $AttributeSetID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCategoryMappingDetails()
    {
      return $this->IncludeCategoryMappingDetails;
    }

    /**
     * @param boolean $IncludeCategoryMappingDetails
     * @return \EbayWsdl\GetAttributesCSRequestType
     */
    public function setIncludeCategoryMappingDetails($IncludeCategoryMappingDetails)
    {
      $this->IncludeCategoryMappingDetails = $IncludeCategoryMappingDetails;
      return $this;
    }

}
