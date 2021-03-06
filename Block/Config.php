<?php
/**
 * Copyright © 2018 Cointopay. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace CointopayCC\PaymentGateway\Block;

use Magento\Framework\Phrase;
use Magento\Payment\Block\ConfigurableInfo;
use CointopayCC\PaymentGateway\Gateway\Response\FraudHandler;

class Config extends ConfigurableInfo
{
    /**
     * Returns label
     *
     * @param string $field
     * @return Phrase
     */
    protected function getLabel($field)
    {
        return __($field);
    }

    /**
     * Returns value view
     *
     * @return string | URL
     */
    public function getAjaxUrl()
    {
        return $this->getUrl("cointopaycccoins");
    }

    /**
     * Returns value view
     *
     * @return string | URL
     */
    public function getCoinsPaymentUrl()
    {
        return $this->getUrl("paymentcointopaycc");
    }

    /**
     * Returns value view
     *
     * @return string | Status
     */
    public function cointopayccReference ($status) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        if (isset($customerSession) && isset($status)) {
            return json_encode('cointopaycc_ref');
        }
        return false;
    }
}
