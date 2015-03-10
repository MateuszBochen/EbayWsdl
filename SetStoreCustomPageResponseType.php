<?php

namespace EbayWsdl;

class SetStoreCustomPageResponseType extends AbstractResponseType
{

    /**
     * @var StoreCustomPageType $CustomPage
     */
    protected $CustomPage = null;

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
     * @param StoreCustomPageType $CustomPage
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CustomPage = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CustomPage = $CustomPage;
    }

    /**
     * @return StoreCustomPageType
     */
    public function getCustomPage()
    {
      return $this->CustomPage;
    }

    /**
     * @param StoreCustomPageType $CustomPage
     * @return \EbayWsdl\SetStoreCustomPageResponseType
     */
    public function setCustomPage($CustomPage)
    {
      $this->CustomPage = $CustomPage;
      return $this;
    }

}
