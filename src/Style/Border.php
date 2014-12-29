<?php


namespace Excel\Entity\Style;


class Border implements StyleInterface
{
    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $color;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf Border) {
            return false;
        }

        if ($this->style !== $target->style || $this->color !== $target->color) {
            return false;
        }

        return true;
    }
}
