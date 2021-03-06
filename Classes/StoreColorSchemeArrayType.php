<?php

namespace EbayWsdl\Classes;

class StoreColorSchemeArrayType
{

    /**
     * @var StoreColorSchemeType[] $ColorScheme
     */
    protected $ColorScheme = null;

    /**
     * @param StoreColorSchemeType[] $ColorScheme
     */
    public function __construct(array $ColorScheme = null)
    {
      $this->ColorScheme = $ColorScheme;
    }

    /**
     * @return StoreColorSchemeType[]
     */
    public function getColorScheme()
    {
      return $this->ColorScheme;
    }

    /**
     * @param StoreColorSchemeType[] $ColorScheme
     * @return \EbayWsdl\Classes\StoreColorSchemeArrayType
     */
    public function setColorScheme(array $ColorScheme)
    {
      $this->ColorScheme = $ColorScheme;
      return $this;
    }

}
