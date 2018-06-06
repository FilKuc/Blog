<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 06.06.18.
 * Time: 17:22
 */

namespace Filip\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Filip\Blog\Api\Data\BlogInterface;

class Blog extends AbstractModel implements BlogInterface, IdentityInterface
{

const CACHE_TAG = 'Blog';

    /**
     * @return void
     */

protected function _construct()
{
    $this->_init('Filip\Blog\Model\ResourceModel\Blog');
}

    /**
     * @return int|null
     */

    public function getId()
    {
        return $this->getData(self::BLOG_ID);

    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::BLOG_ID, $id);
    }

    /**
     * @return string|null
     */

    public function getNaslov()
    {
        return $this->getData(self::NASLOV);
    }

    /**
     * @param string $naslov
     * @return $this
     */

    public function setNaslov($naslov)
    {
        return $this->setData(self::NASLOV, $naslov);
    }

    /**
     * @return string|null
     */

    public function getSadrzaj()
    {
        return $this->getData(self::SADRZAJ);
    }

    /**
     * @param string $sadrzaj
     * @return $this
     */

    public function setSadrzaj($sadrzaj)
    {
        return $this->setData(self::SADRZAJ, $sadrzaj);
    }

    /**
     * @return string|null
     */

    public function getDatum()
    {
        return $this->getData(self::DATUM);

    }

    /**
     * @param int $datum
     * @return $this
     */

    public function setDatum($datum)
    {
        return $this->setData(self::DATUM, $datum);
    }

    /**
     * @return string|null
     */

    public function getAutor()
    {
        return $this->getData(self::AUTOR);
    }

    /**
     * @param string $autor
     * @return $this
     */

    public function setAutor($autor)
    {
        return $this->setData(self::AUTOR, $autor);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }



}