<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 09.04.18.
 * Time: 14:01
 */

namespace Filip\PrviModul\Plugin;

use Magento\Cms\Model\Page;

class ChangeTitle
{

public function afterGetMetaTitle(Page $page,$result){
    $result = '[' . $page->getTitle() . ']' . ' - Moj Site';

    return $result;
}

}