<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 19:11
 */

namespace Filip\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\Registry;


class Index extends Action
{
    const REGISTRY_KEY_BLOG_ID = 'filip_blog_id';

    protected $resultPageFactory;
    protected $_registry;


    public function __construct(Context $context, PageFactory $resultPageFactory, Registry $registry)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_registry = $registry;
    }

    /**
     * @return Page
     * @throws LocalizedException
     */

    public function execute()
    {
        $this->_registry->register(self::REGISTRY_KEY_BLOG_ID, (int) $this->_request->getParam('id'));
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }


}