<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 21:09
 */

namespace Filip\Blog\Controller\Blog;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;

class View extends Action
{

    protected $_resultPageFactory;


    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }


    public function execute()
    {
      $resultPage = $this->_resultPageFactory->create();
      return $resultPage;
    }
}