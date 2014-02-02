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
class Inovarti_FixAddToCartMage18_Model_Checkout_Observer
{

    function disableCsrf($observer)
    {
        $key = Mage::getSingleton('core/session')->getFormKey();
        $observer->getEvent()->getRequest()->setParam('form_key', $key);

        $request = $observer->getEvent()->getRequest()->getParams();
        Mage::log("Produto ".$request['product']." add form_key before add to cart", "fixmage18.log");

    }

}