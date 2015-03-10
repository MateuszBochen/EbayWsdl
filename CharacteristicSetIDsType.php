<?php

namespace EbayWsdl;

class CharacteristicSetIDsType
{

    /**
     * @var string[] $ID
     */
    protected $ID = null;

    /**
     * @param string[] $ID
     */
    public function __construct(array $ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return string[]
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string[] $ID
     * @return \EbayWsdl\CharacteristicSetIDsType
     */
    public function setID(array $ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
