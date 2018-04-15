<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 15.04.18.
 * Time: 19:01
 */

namespace Filip\PrviModul\Controller;

use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\App\Action\Context;

class FrontTest extends \Magento\Framework\App\Action\Action

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