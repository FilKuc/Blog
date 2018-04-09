<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 09.04.18.
 * Time: 14:01
 */

namespace Filip\PrviModul;

//use Magento\Cms\Model\Page;

class ChangeTitle
{

public function beforeGetMetaTitle(\Magento\Cms\Model\Page $subject){
    return ('MojSite');
}

}