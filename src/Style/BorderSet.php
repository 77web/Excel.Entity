<?php


namespace Excel\Entity\Style;


class BorderSet implements StyleInterface
{
    /**
     * @var Border
     */
    public $left;

    /**
     * @var Border
     */
    public $right;

    /**
     * @var Border
     */
    public $top;

    /**
     * @var Border
     */
    public $bottom;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf BorderSet) {
            return false;
        }

        if (!$this->left->equals($target->left) || !$this->right->equals($target->right) || !$this->top->equals($target->top) || !$this->bottom->equals($target->bottom)) {
            return false;
        }

        return true;
    }
}
