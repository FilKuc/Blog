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
use \Magento\Framework\Registry;

class View extends Action
{

    const REGISTRY_KEY_BLOG_ID = 'filip_blog_id';

    /**
     * Core registry
     * @var Registry
     */
    protected $_coreRegistry;

    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     */

    public function __construct(Context $context, Registry $coreRegistry, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * @return Page
     * @throws LocalizedException
     */

    public function execute()
    {
      $this->_coreRegistry->register(self::REGISTRY_KEY_BLOG_ID, (int) $this->_request->getParam('id'));
      $resultPage = $this->_resultPageFactory->create();
      return $resultPage;
    }
}