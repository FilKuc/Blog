<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 20:28
 */

namespace Filip\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Filip\Blog\Model\ResourceModel\Blog\Collection as BlogCollection;
use \Filip\Blog\Model\ResourceModel\Blog\CollectionFactory as BlogCollectionFactory;
use \Filip\Blog\Model\Blog;


class Blogovi extends Template
{

    protected $_blogCollectionFactory = null;

    public function __construct(Context $context, BlogCollectionFactory $blogCollectionFactory, array $data = [])
    {
        $this->_blogCollectionFactory = $blogCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Blog[]
     */

    public function getBlogs()
    {
        $blogCollection = $this->_blogCollectionFactory->create();
        $blogCollection->addFieldToSelect('*')->load();
        return $blogCollection->getItems();
    }

    /**
     * @param Blog $blog
     * @return string
     */

    public function getBlogUrl(Blog $blog)
    {
     return '/blog/view/id' . $blog->getId();
    }



}