<?php


namespace Excel\Entity\Style;


class Fill implements StyleInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $foreGroundColor;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf Fill) {
            return false;
        }

        if ($this->pattern !== $target->pattern || $this->backgroundColor !== $target->backgroundColor || $this->foreGroundColor !== $target->foreGroundColor) {
            return false;
        }

        return true;
    }
}
