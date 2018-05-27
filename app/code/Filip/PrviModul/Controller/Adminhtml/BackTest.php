<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 15.04.18.
 * Time: 19:13
 */

namespace Filip\PrviModul\Controller\Adminhtml;

use Magento\Framework\Controller\Result\Raw;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory as PageFac;

class BackTest extends \Magento\Backend\App\Action

{

    protected $pageFactory;

    public function __construct(Context $context, Raw $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->pageFactory->create();
        $result->setContents('Hello World');
        return $result;
    }

}