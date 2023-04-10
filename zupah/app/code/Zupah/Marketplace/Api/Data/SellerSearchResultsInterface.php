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

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for cms block search results.
 * @api
 * @since 100.0.2
 */
interface SellerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get blocks list.
     *
     * @return \Zupah\Marketplace\Api\Data\SellerInterface[]
     */
    public function getItems();

    /**
     * Set blocks list.
     *
     * @param \Zupah\Marketplace\Api\Data\SellerInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}