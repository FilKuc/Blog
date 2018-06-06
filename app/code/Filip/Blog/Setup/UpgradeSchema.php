<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 16:41
 */

namespace Filip\Blog\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\DB\Ddl\Table;


class UpgradeSchema implements UpgradeSchemaInterface
{

    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {

        $setup->startSetup();

        if(version_compare($context->getVersion(), '1.1.0', '<')) {
            if (!$setup->tableExists('Blog')) {

                $table = $setup->getConnection()->newTable(
                    $setup->getTable('Blog')
                )->addColumn(
                    'blog_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Post ID'

                )->addColumn(

                    'Naslov',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Naslov bloga'

                )->addColumn(
                    'Sadrzaj',
                    Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Sadrzaj bloga'

                )->addColumn(
                    'Datum',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Datum objave bloga'

                )->addColumn(
                    'Autor',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Autor bloga'
                );

                $setup->getConnection()->createTable($table);

                $setup->endSetup();

            }



        }


    }



}