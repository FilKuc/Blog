<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 23.05.18.
 * Time: 09:05
 */

namespace Filip\Blog\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {

        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('Blog')
        )->addColumn(

            'Naslov',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Naslov bloga'

        )->addColumn(
            'Sadrzaj',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            [],
            'Sadrzaj bloga'

        )->addColumn(
            'Datum',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Datum objave bloga'

        )->addColumn(
            'Autor',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Autor bloga'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();





    }

}