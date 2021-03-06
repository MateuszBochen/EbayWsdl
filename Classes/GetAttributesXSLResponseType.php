<?php

namespace EbayWsdl\Classes;

class GetAttributesXSLResponseType extends AbstractResponseType
{

    /**
     * @var XSLFileType[] $XSLFile
     */
    protected $XSLFile = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param XSLFileType[] $XSLFile
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $XSLFile = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->XSLFile = $XSLFile;
    }

    /**
     * @return XSLFileType[]
     */
    public function getXSLFile()
    {
      return $this->XSLFile;
    }

    /**
     * @param XSLFileType[] $XSLFile
     * @return \EbayWsdl\Classes\GetAttributesXSLResponseType
     */
    public function setXSLFile(array $XSLFile)
    {
      $this->XSLFile = $XSLFile;
      return $this;
    }

}
