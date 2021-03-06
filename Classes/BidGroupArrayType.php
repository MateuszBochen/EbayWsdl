<?php

namespace EbayWsdl\Classes;

class BidGroupArrayType
{

    /**
     * @var BidGroupType[] $BidGroup
     */
    protected $BidGroup = null;

    /**
     * @param BidGroupType[] $BidGroup
     */
    public function __construct(array $BidGroup = null)
    {
      $this->BidGroup = $BidGroup;
    }

    /**
     * @return BidGroupType[]
     */
    public function getBidGroup()
    {
      return $this->BidGroup;
    }

    /**
     * @param BidGroupType[] $BidGroup
     * @return \EbayWsdl\Classes\BidGroupArrayType
     */
    public function setBidGroup(array $BidGroup)
    {
      $this->BidGroup = $BidGroup;
      return $this;
    }

}
