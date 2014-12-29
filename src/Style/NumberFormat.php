<?php


namespace Excel\Entity\Style;


class NumberFormat implements StyleInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf NumberFormat) {
            return false;
        }

        if ($target->code !== $this->code) {
            return false;
        }

        return true;
    }
}
