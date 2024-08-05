<?php
    /**
     * mini cart template
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 7.9.0
     * 
     */

    defined('ABSPATH') || exit;

    do_action( 'woocommerce_before_mini_cart' );

    if(!WC()->cart->is_empty()):
?>
<div class="mini-cart__block-content flex flex-col p-rel">

</div>
<?php else :?>
    <div class="main-header h1">
        <h1>Twój koszyk jest pusty</h1>
    </div>
<?php endif;?>