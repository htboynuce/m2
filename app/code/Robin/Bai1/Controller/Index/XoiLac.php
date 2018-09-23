<?php
namespace Robin\Bai1\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class XoiLac extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        return $this->pageFactory->create();
        // TODO: Implement execute() method.
    }
}