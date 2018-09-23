<?php
namespace Demo\Block\Block;

use Magento\Framework\View\Element\Template;

class XoiLac extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function showHello(){
        return __("Hello world");
    }
}