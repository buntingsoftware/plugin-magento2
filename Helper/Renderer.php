<?php

namespace Bunting\Personalisation\Helper;

class Renderer extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @param $capabilities
     * @return bool
     */
    public function isFunctional($capabilities)
    {
        return !$capabilities || (isset($capabilities['personalisation']) && $capabilities['personalisation'] === true);
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return 'You have the Bunting Personalisation module installed but personalisation is not enabled within your account, please click <a target="_blank" href="#">here</a> and click the "on" button';
    }
}