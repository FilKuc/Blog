<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 18:11
 */

namespace Filip\Blog\Model\ResourceModel\Blog;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Filip\Blog\Model\Blog','Filip\Blog\Model\ResourceModel\Blog');
    }


}