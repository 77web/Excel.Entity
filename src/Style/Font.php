<?php


namespace Excel\Entity\Style;


class Font implements StyleInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $size;

    /**
     * @var integer
     */
    public $color;

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $family;

    /**
     * @var string
     */
    public $scheme;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf Font) {
            return false;
        }

        if ($this->size !== $target->size || $this->color !== $target->color || $this->name !== $target->name || $this->family !== $target->family || $this->scheme !== $target->scheme) {
            return false;
        }

        return true;
    }
}
