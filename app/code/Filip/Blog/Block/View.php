<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 21:17
 */

namespace Filip\Blog\Block;

use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;
use \Filip\Blog\Model\Blog;
use \Filip\Blog\Model\BlogFactory;
use \Filip\Blog\Controller\Blog\View as ViewAction;

class View extends Template
{

    protected $_coreRegistry;

    protected $_blog = null;

    protected $_blogFactory = null;

    public function __construct(Context $context, Registry $coreRegistry, BlogFactory $blogFactory ,array $data = [])
    {
        $this->_blogFactory = $blogFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * @return Blog
     * @throws LocalizedException
     */

    public function getBlog()
    {
        if($this->_blog === null) {
            $blog = $this->_blogFactory->create();
            $blog->load($this->getBlogId());

        if (!$blog->getId()) {
            throw new LocalizedException(_('Blog nije pronađen'));
        }

        $this->_blog = $blog;

        }

        return $this->_blog;
    }

    protected function _getBlogId()
    {
        return (int) $this->_coreRegistry->registry(
            ViewAction::REGISTRY_KEY_BLOG_ID
        );
    }

}