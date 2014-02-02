Inovarti_FixAddToCartMage18
===========================

The module was created because it is the new "form_key" parameter added to POST requests in Magento 1.8 to Prevent XSS attacks. It causes troubles with Varnish because the product page is cached with the first session of the form_key visiting the website, and the others visitors can not csrf check because it does not match with Their form_key session. 

For "add to cart" event, I've added to the fixcart where I form_key replace the parameter with the session form_key to pass the csrf check and let customers add products to cart. 
It disables the csrf protection for the "add to cart" action but it's just like Magento < 1.8
