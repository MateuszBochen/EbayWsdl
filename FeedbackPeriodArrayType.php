<?php

namespace EbayWsdl;

class FeedbackPeriodArrayType
{

    /**
     * @var FeedbackPeriodType[] $FeedbackPeriod
     */
    protected $FeedbackPeriod = null;

    /**
     * @param FeedbackPeriodType[] $FeedbackPeriod
     */
    public function __construct(array $FeedbackPeriod = null)
    {
      $this->FeedbackPeriod = $FeedbackPeriod;
    }

    /**
     * @return FeedbackPeriodType[]
     */
    public function getFeedbackPeriod()
    {
      return $this->FeedbackPeriod;
    }

    /**
     * @param FeedbackPeriodType[] $FeedbackPeriod
     * @return \EbayWsdl\FeedbackPeriodArrayType
     */
    public function setFeedbackPeriod(array $FeedbackPeriod)
    {
      $this->FeedbackPeriod = $FeedbackPeriod;
      return $this;
    }

}
