<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 17:50
 */

namespace Filip\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion() && version_compare($context->getVersion(), '1.1.0') < 0){

            $tableName = $setup->getTable('Blog');

            $data = [

                ['Naslov' => 'Prvi Blog Tekst', 'Sadrzaj' => 'Ovo je moj prva objava. Objavljivat cu narednih dana.
                                                              Nikad prije nisam pisao blogove.',
                'Autor' => 'Filip']

                    ];

            $setup->getConnection()->insertMultiple($tableName, $data);

        }

        $setup->endSetup();

    }


}