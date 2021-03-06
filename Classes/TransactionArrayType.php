<?php

namespace EbayWsdl\Classes;

class TransactionArrayType
{

    /**
     * @var TransactionType[] $Transaction
     */
    protected $Transaction = null;

    /**
     * @param TransactionType[] $Transaction
     */
    public function __construct(array $Transaction = null)
    {
      $this->Transaction = $Transaction;
    }

    /**
     * @return TransactionType[]
     */
    public function getTransaction()
    {
      return $this->Transaction;
    }

    /**
     * @param TransactionType[] $Transaction
     * @return \EbayWsdl\Classes\TransactionArrayType
     */
    public function setTransaction(array $Transaction)
    {
      $this->Transaction = $Transaction;
      return $this;
    }

}
