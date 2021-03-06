<?php

namespace EbayWsdl\Classes;

class ItemTransactionIDArrayType
{

    /**
     * @var ItemTransactionIDType[] $ItemTransactionID
     */
    protected $ItemTransactionID = null;

    /**
     * @param ItemTransactionIDType[] $ItemTransactionID
     */
    public function __construct(array $ItemTransactionID = null)
    {
      $this->ItemTransactionID = $ItemTransactionID;
    }

    /**
     * @return ItemTransactionIDType[]
     */
    public function getItemTransactionID()
    {
      return $this->ItemTransactionID;
    }

    /**
     * @param ItemTransactionIDType[] $ItemTransactionID
     * @return \EbayWsdl\Classes\ItemTransactionIDArrayType
     */
    public function setItemTransactionID(array $ItemTransactionID)
    {
      $this->ItemTransactionID = $ItemTransactionID;
      return $this;
    }

}
