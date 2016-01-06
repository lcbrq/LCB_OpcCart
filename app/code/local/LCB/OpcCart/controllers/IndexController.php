<?php

require_once 'Mage/Checkout/controllers/CartController.php';

class LCB_OpcCart_IndexController extends Mage_Checkout_CartController {

    public function updateAction() {

        $qty = $this->getRequest()->getParam('qty');
        $id = $this->getRequest()->getParam('id');
        
        $cartData = array($id => array('qty' => $qty));
        $this->getRequest()->setParam('cart', $cartData);
        $this->_updateShoppingCart();
        $this->_redirect('onepage');
        
    }

}
