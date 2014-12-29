<?php


namespace Excel\Entity\Style;


class Alignment implements StyleInterface
{
    /**
     * @var string
     */
    public $vertical;

    /**
     * @var string
     */
    public $horizontal;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf Alignment) {
            return false;
        }

        if ($this->vertical !== $target->vertical || $this->horizontal !== $target->horizontal) {
            return false;
        }

        return true;
    }
}
