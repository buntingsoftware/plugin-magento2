<?php

namespace Bunting\Personalisation\Observer;
use Magento\Framework\Event\ObserverInterface;
use Bunting\Core\Helper\Submodules;
use Bunting\Personalisation\Helper\Renderer;

class Init implements ObserverInterface
{
    /** @var \Bunting\Personalisation\Helper\Renderer  */
    private $renderer;

    /** @var \Bunting\Core\Helper\Submodules */
    private $submodules;

    /**
     * @param  \Bunting\Personalisation\Helper\Renderer $renderer
     */
    public function __construct(Renderer $renderer, Submodules $submodules)
    {
        $this->renderer = $renderer;
        $this->submodules = $submodules;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->submodules->addSubmodule('personalisation', $this->renderer);
    }
}