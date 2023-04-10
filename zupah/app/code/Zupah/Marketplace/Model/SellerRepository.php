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
namespace Zupah\Marketplace\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Zupah\Marketplace\Api\Data\SellerSearchResultsInterfaceFactory;
use Zupah\Marketplace\Model\ResourceModel\Seller\CollectionFactory;

class SellerRepository implements \Zupah\Marketplace\Api\SellerRepositoryInterface
{
    /**
     * @var \Zupah\Marketplace\Model\SellerFactory
     */
    protected $modelFactory = null;

    /**
     * @var \Zupah\Marketplace\Model\ResourceModel\Seller\CollectionFactory
     */
    protected $collectionFactory = null;
    /**
     * @var \Zupah\Marketplace\Api\Data\SellerSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory = null;

    /**
     * @var \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    protected $collectionProcessor = null;    

    /**
     * SellerFactory constructor.
     * @param \Zupah\Marketplace\Model\SellerFactory $modelFactory
     * @param \Zupah\Marketplace\Model\ResourceModel\Seller\CollectionFactory collectionFactory
     * @param SellerSearchResultsInterfaceFactory $searchResultFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        SellerFactory $modelFactory,
        CollectionFactory $collectionFactory,
        SellerSearchResultsInterfaceFactory $searchResultFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->searchResultsFactory = $searchResultFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * Retrieve customers which match a specified criteria.
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Magento\Framework\Api\SearchResults
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria){
        /** @var \Zupah\Marketplace\Model\ResourceModel\Seller\CollectionFactory $searchResult */
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var \Zupah\Marketplace\Api\Data\SellerSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

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
    public function save(\Zupah\Marketplace\Api\Data\SellerInterface $customer, $passwordHash = null){

    }

    /**
     * Retrieve Seller.
     *
     * @api
     * @param string $email
     * @param int|null $websiteId
     * @return \Zupah\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\NoSuchEnatityException
     * If customer with the specified email does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($email, $websiteId = null){

    }

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
    public function getById($customerId){
        $model = $this->modelFactory->create()->load($customerId);
        if (!$model->getId()) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(
                __('The seller with the "%1" ID doesn\'t exist.', $customerId)
            );
        }

        #return ['result' => ($model->getData())];

        #_debug($model->getData(), true);

        return $model;
    }

    /**
     * Delete Seller.
     *
     * @api
     * @param \Zupah\Marketplace\Api\Data\SellerInterface $customer
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Zupah\Marketplace\Api\Data\SellerInterface $customer){

    }

    /**
     * Delete Seller by ID.
     *
     * @api
     * @param int $customerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($customerId){

    }

}

?>