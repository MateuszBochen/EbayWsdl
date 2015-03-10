<?php

namespace EbayWsdl;

class MemberMessageExchangeArrayType
{

    /**
     * @var MemberMessageExchangeType[] $MemberMessageExchange
     */
    protected $MemberMessageExchange = null;

    /**
     * @param MemberMessageExchangeType[] $MemberMessageExchange
     */
    public function __construct(array $MemberMessageExchange = null)
    {
      $this->MemberMessageExchange = $MemberMessageExchange;
    }

    /**
     * @return MemberMessageExchangeType[]
     */
    public function getMemberMessageExchange()
    {
      return $this->MemberMessageExchange;
    }

    /**
     * @param MemberMessageExchangeType[] $MemberMessageExchange
     * @return \EbayWsdl\MemberMessageExchangeArrayType
     */
    public function setMemberMessageExchange(array $MemberMessageExchange)
    {
      $this->MemberMessageExchange = $MemberMessageExchange;
      return $this;
    }

}
