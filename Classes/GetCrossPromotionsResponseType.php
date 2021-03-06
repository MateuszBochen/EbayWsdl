<?php

namespace EbayWsdl\Classes;

class GetCrossPromotionsResponseType extends AbstractResponseType
{

    /**
     * @var CrossPromotionsType $CrossPromotion
     */
    protected $CrossPromotion = null;

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
     * @param CrossPromotionsType $CrossPromotion
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CrossPromotion = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CrossPromotion = $CrossPromotion;
    }

    /**
     * @return CrossPromotionsType
     */
    public function getCrossPromotion()
    {
      return $this->CrossPromotion;
    }

    /**
     * @param CrossPromotionsType $CrossPromotion
     * @return \EbayWsdl\Classes\GetCrossPromotionsResponseType
     */
    public function setCrossPromotion($CrossPromotion)
    {
      $this->CrossPromotion = $CrossPromotion;
      return $this;
    }

}
