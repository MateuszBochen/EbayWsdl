<?php

namespace EbayWsdl;

class ProductRecommendationsType
{

    /**
     * @var ProductInfoType[] $Product
     */
    protected $Product = null;

    /**
     * @param ProductInfoType[] $Product
     */
    public function __construct(array $Product = null)
    {
      $this->Product = $Product;
    }

    /**
     * @return ProductInfoType[]
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param ProductInfoType[] $Product
     * @return \EbayWsdl\ProductRecommendationsType
     */
    public function setProduct(array $Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
