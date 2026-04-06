<?php
class Position
{
    public $x;
    public $y;

    public function __construct($y, $x)
    {
        $this->y = $y;
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}

class Size
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}

class ProgramWindow
{
    public $size;
    public $height;
    public $width;
    public $position;
    public $x;
    public $y;

    public function __construct()
    {
        $this->size = new Size(600, 800);
        $this->height = $this->size->getHeight();
        $this->width = $this->size->getWidth();
        $this->position = new Position(0, 0);
        $this->x = $this->position->getX();
        $this->y = $this->position->getY();
    }

    public function move($newposition)
    {
        $this->position = $newposition;
        $this->x = $newposition->getX();
        $this->y = $newposition->getY();
    }

    public function resize($newsize)
    {
        $this->size = $newsize;
        $this->height = $this->size->getHeight();
        $this->width = $this->size->getWidth();
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}
