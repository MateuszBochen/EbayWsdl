<?php

namespace EbayWsdl;

class ItemRatingDetailArrayType
{

    /**
     * @var ItemRatingDetailsType[] $ItemRatingDetails
     */
    protected $ItemRatingDetails = null;

    /**
     * @param ItemRatingDetailsType[] $ItemRatingDetails
     */
    public function __construct(array $ItemRatingDetails = null)
    {
      $this->ItemRatingDetails = $ItemRatingDetails;
    }

    /**
     * @return ItemRatingDetailsType[]
     */
    public function getItemRatingDetails()
    {
      return $this->ItemRatingDetails;
    }

    /**
     * @param ItemRatingDetailsType[] $ItemRatingDetails
     * @return \EbayWsdl\ItemRatingDetailArrayType
     */
    public function setItemRatingDetails(array $ItemRatingDetails)
    {
      $this->ItemRatingDetails = $ItemRatingDetails;
      return $this;
    }

}
