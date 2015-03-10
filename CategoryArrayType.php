<?php

namespace EbayWsdl;

class CategoryArrayType
{

    /**
     * @var CategoryType[] $Category
     */
    protected $Category = null;

    /**
     * @param CategoryType[] $Category
     */
    public function __construct(array $Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return CategoryType[]
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CategoryType[] $Category
     * @return \EbayWsdl\CategoryArrayType
     */
    public function setCategory(array $Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
