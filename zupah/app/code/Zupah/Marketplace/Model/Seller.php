<?php
namespace Zupah\Marketplace\Model;

use \Zupah\Marketplace\Api\Data\SellerInterface;

class Seller extends \Webkul\Marketplace\Model\Seller implements SellerInterface
{

    /**
     * Get Shop URL
     * 
     * @return string
     */
    public function getShopUrl()
    {
        return parent::getData(SellerInterface::SHOP_URL);
    }

    /**
     * Set ShopURL
     *
     * @param string $value
     *
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setShopUrl($value)
    {
        return $this->setData(SellerInterface::SHOP_URL, $value);
    }

    /**
     * Get Shop URL
     * 
     * @return string
     */
    public function getShopTitle()
    {
        return parent::getData(SellerInterface::SHOP_TITLE);
    }
    
    /**
     * Set ShopURL
     *
     * @param string $value
     *
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setShopTitle($value)
    {
        return $this->setData(SellerInterface::SHOP_TITLE, $value);
    }

    /**
     * Get Shop URL
     * 
     * @return string
     */
    public function getCreatedAt()
    {
        return parent::getData(SellerInterface::CREATED_AT);
    }
    
    /**
     * Set ShopURL
     *
     * @param string $value
     *
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setCreatedAt($value)
    {
        return $this->setData(SellerInterface::CREATED_AT, $value);
    }

}