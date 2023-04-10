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
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    public const ENTITY_ID    = 'entity_id';
    /**#@-*/

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
}
