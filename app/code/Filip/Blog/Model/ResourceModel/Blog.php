<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 18:07
 */

namespace Filip\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{


    protected function _construct()
    {
        $this->_init('Blog','blog_id');
    }


}