<?php
/**
 * Zupah Tech
 *
 * @category Zupah
 * @package Zupah_Marketplace
 * @author Zupah
 * @copyright Copyright (c) Zupah (https://zupah.com.br)
 * @license https://zupah.com.br/license.html
 */
namespace Zupah\Marketplace\Api\Data;

/**
 * Marketplace Seller interface.
 * @api
 */
interface SellerInterface
{
    public const SHOP_URL = 'shop_url';
    public const CREATED_AT = 'created_at';
    public const PRIVACY_POLICY = 'privacy_policy';
    public const CONTACT_NUMBER = 'contact_number';
    public const SHOP_TITLE = 'shop_title';
    public const COMPANY_LOCALITY = 'company_locality';
    public const COMPANY_DESCRIPTION = 'company_description';
    public const RETURN_POLICY = 'return_policy';
    public const SHIPPING_POLICY = 'shipping_policy';
    
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setId($id);

    /**
     * Get ID
     *
     * @return string|null
     */
    public function getShopUrl();

    /**
     * Set ID
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setShopUrl($value);

    /**
     * Get
     *
     * @return string|null
     */
    public function getShopTitle();

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setShopTitle($value);

    /**
     * Get
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set
     *
     * @param string $value
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     */
    public function setCreatedAt($value);
}
