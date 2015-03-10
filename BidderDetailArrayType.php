<?php

namespace EbayWsdl;

class BidderDetailArrayType
{

    /**
     * @var BidderDetailType[] $BidderDetail
     */
    protected $BidderDetail = null;

    /**
     * @param BidderDetailType[] $BidderDetail
     */
    public function __construct(array $BidderDetail = null)
    {
      $this->BidderDetail = $BidderDetail;
    }

    /**
     * @return BidderDetailType[]
     */
    public function getBidderDetail()
    {
      return $this->BidderDetail;
    }

    /**
     * @param BidderDetailType[] $BidderDetail
     * @return \EbayWsdl\BidderDetailArrayType
     */
    public function setBidderDetail(array $BidderDetail)
    {
      $this->BidderDetail = $BidderDetail;
      return $this;
    }

}
