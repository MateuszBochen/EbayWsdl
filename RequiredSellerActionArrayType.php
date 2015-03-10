<?php

namespace EbayWsdl;

class RequiredSellerActionArrayType
{

    /**
     * @var RequiredSellerActionCodeType[] $RequiredSellerAction
     */
    protected $RequiredSellerAction = null;

    /**
     * @param RequiredSellerActionCodeType[] $RequiredSellerAction
     */
    public function __construct(array $RequiredSellerAction = null)
    {
      $this->RequiredSellerAction = $RequiredSellerAction;
    }

    /**
     * @return RequiredSellerActionCodeType[]
     */
    public function getRequiredSellerAction()
    {
      return $this->RequiredSellerAction;
    }

    /**
     * @param RequiredSellerActionCodeType[] $RequiredSellerAction
     * @return \EbayWsdl\RequiredSellerActionArrayType
     */
    public function setRequiredSellerAction(array $RequiredSellerAction)
    {
      $this->RequiredSellerAction = $RequiredSellerAction;
      return $this;
    }

}
