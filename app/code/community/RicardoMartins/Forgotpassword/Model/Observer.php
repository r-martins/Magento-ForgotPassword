<?php

class RicardoMartins_Forgotpassword_Model_Observer
{

    public function beforeForgotpasswordPostAction($observer)
    {
        if (!Mage::getStoreConfigFlag('customer/password/show_no_exist_notice')) {
            return;
        }

        $email = (string) $observer->getRequest()->getPost('email');
        $customer = Mage::getModel('customer/customer')
                ->setWebsiteId(Mage::app()->getStore()->getWebsiteId())
                ->loadByEmail($email);

        if (is_null($customer->getId())) {
            Mage::getSingleton('customer/session')->addError(Mage::helper('forgotpassword')->__("There's no customer registered under %s.", $email));
            Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getUrl('customer/account/forgotpassword/'));
            Mage::app()->getResponse()->sendResponse();
            exit;
        }
    }

    public function hookToControllerActionPreDispatch($observer)
    {
        if ($observer->getEvent()->getControllerAction()->getFullActionName() == 'customer_account_forgotpasswordpost') {
            Mage::dispatchEvent("customer_action_forgotpassword_before", array('request' => $observer->getControllerAction()->getRequest()));
        }
    }

}