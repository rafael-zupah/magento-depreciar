<?php
/**
 * Zupah Tech.
 *
 * @category  Zupah
 * @package   Zupah_Marketplace
 * @author    Zupah
 * @copyright Copyright (c) Zupah (https://zupah.com.br)
 * @license   https://zupah.com.br/license.html
 */
declare(strict_types=1);

namespace Zupah\Marketplace\Model;

use Zupah\Marketplace\Api\Data\SellerSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with Product search results.
 */
class SellerSearchResults extends SearchResults implements SellerSearchResultsInterface
{
}