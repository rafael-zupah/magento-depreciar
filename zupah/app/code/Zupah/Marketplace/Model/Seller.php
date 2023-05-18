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
     /**
     * Get
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return parent::getData(SellerInterface::CONTACT_NUMBER);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setContactnumber($value)
    {
        return $this->setData(SellerInterface::CONTACT_NUMBER, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getCompanyLocality()
    {
        return parent::getData(SellerInterface::COMPANY_LOCALITY);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setCompanyLocality($value)
    {
        return $this->setData(SellerInterface::COMPANY_LOCALITY, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getCompanyDescription()
    {
        return parent::getData(SellerInterface::COMPANY_DESCRIPTION);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setCompanyDescription($value)
    {
        return $this->setData(SellerInterface::COMPANY_DESCRIPTION, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getPrivacyPolicy()
    {
        return parent::getData(SellerInterface::PRIVACY_POLICY);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setPrivacyPolicy($value)
    {
        return $this->setData(SellerInterface::PRIVACY_POLICY, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getReturnPolicy()
    {
        return parent::getData(SellerInterface::RETURN_POLICY);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setReturnPolicy($value)
    {
        return $this->setData(SellerInterface::RETURN_POLICY, $value);
    }
    
    /**
     * Get
     *
     * @return string|null
     */
    public function getShippingPolicy()
    {
        return parent::getData(SellerInterface::SHIPPING_POLICY);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setShippingPolicy($value)
    {
        return $this->setData(SellerInterface::SHIPPING_POLICY, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getIsSeller()
    {
        return parent::getData(SellerInterface::IS_SELLER);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setIsSeller($value)
    {
        return $this->setData(SellerInterface::IS_SELLER, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getOthersInfo()
    {
        return parent::getData(SellerInterface::OTHERS_INFO);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setOthersInfo($value)
    {
        return $this->setData(SellerInterface::OTHERS_INFO, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getBannerPic()
    {
        return parent::getData(SellerInterface::BANNER_PIC);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setBannerPic($value)
    {
        return $this->setData(SellerInterface::BANNER_PIC, $value);
    }

    /**
     * Get
     *
     * @return string|null
     */
    public function getLogoPic()
    {
        return parent::getData(SellerInterface::LOGO_PIC);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setLogoPic($value)
    {
        return $this->setData(SellerInterface::LOGO_PIC, $value);
    }

     /**
     * Get
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return parent::getData(SellerInterface::CNPJ);
    }

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setCnpj($value)
    {
        return $this->setData(SellerInterface::CNPJ, $value);
    }

}