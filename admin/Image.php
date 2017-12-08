<?php

namespace app;


class Image
{
    private $id;
    private $src;
    private $alt;

    public function __construct($id, $src, $alt)
    {
        $this->id = $id;
        $this->src = $src;
        $this->alt = $alt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function setSrc($src)
    {
        $this->src = $src;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    public function setAlt($alt)
    {
        $this->alt = $alt;
    }
}