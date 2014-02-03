<?php
/**
 * Inovarti FixAddToCartMage18 Module
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * deivison.arthur@gmail.com so we can send you a copy immediately.
 *
 */
class Inovarti_FixAddToCartMage18_Model_Checkout_Cart extends Mage_Checkout_Model_Cart
{
    /**
     * Create checkout_cart_product_add_before event observer
     *
     * @param   int|Mage_Catalog_Model_Product $productInfo
     * @param   mixed $requestInfo
     * @return  Mage_Checkout_Model_Cart
     */
    public function addProduct($productInfo, $requestInfo=null)
    {
        $product = $this->_getProduct($productInfo);
        Mage::dispatchEvent('checkout_cart_product_add_before', array('product' => $product));

        return parent::addProduct($productInfo, $requestInfo=null);
    }
}