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
namespace Zupah\Marketplace\Api;

/**
 * Seller CRUD interface.
 */
interface SellerRepositoryInterface
{
    /**
     * Create Seller.
     *
     * @api
     * @param \Zupah\Marketplace\Api\Data\SellerInterface $customer
     * @param string $passwordHash
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\InputException If bad input is provided
     * @throws \Magento\Framework\Exception\State\InputMismatchException
     * If the provided email is already used
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Zupah\Marketplace\Api\Data\SellerInterface $customer, $passwordHash = null);

    /**
     * Retrieve Seller.
     *
     * @api
     * @param string $email
     * @param int|null $websiteId
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * If customer with the specified email does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($email, $websiteId = null);

    /**
     * Retrieve Seller.
     *
     * @api
     * @param int $customerId
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($customerId);

    /**
     * Retrieve customers which match a specified criteria.
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Customer\Api\Data\CustomerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete Seller.
     *
     * @api
     * @param \Zupah\Marketplace\Api\Data\SellerInterface $customer
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Zupah\Marketplace\Api\Data\SellerInterface $customer);

    /**
     * Delete Seller by ID.
     *
     * @api
     * @param int $customerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($customerId);
}
