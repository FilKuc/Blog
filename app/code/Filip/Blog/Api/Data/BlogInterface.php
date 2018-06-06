<?php

namespace Filip\Blog\Api\Data;

interface BlogInterface {

const BLOG_ID  = 'blog_id';
const NASLOV   = 'Naslov';
const SADRZAJ  = 'Sadrzaj';
const DATUM    = 'Datum';
const AUTOR    = 'Autor';


    /**
     * @return int|null
     */

public function getId();

    /**
     * @param int $id
     * @return $this
     */
public function setId($id);

    /**
     * @return string|null
     */

public function getNaslov();

    /**
     * @param string $naslov
     * @return $this
     */

public function setNaslov($naslov);

    /**
     * @return string|null
     */

public function getSadrzaj();

    /**
     * @param string $sadrzaj
     * @return $this
     */

public function setSadrzaj($sadrzaj);

    /**
     * @return string|null
     */

public function getDatum();

    /**
     * @param int $datum
     * @return $this
     */

public function setDatum($datum);

    /**
     * @return string|null
     */

public function getAutor();

    /**
     * @param string $autor
     * @return $this
     */

public function setAutor($autor);



}