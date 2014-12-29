<?php


namespace Excel\Entity\Style;

class StyleSet implements StyleInterface
{
    /**
     * @var NumberFormat
     */
    public $numberFormat;

    /**
     * @var Font
     */
    public $font;

    /**
     * @var Fill
     */
    public $fill;

    /**
     * @var BorderSet
     */
    public $border;

    /**
     * @var Alignment
     */
    public $alignment;

    public function equals(StyleInterface $target)
    {
        if (!$target instanceOf StyleSet) {
            return false;
        }

        if (!$this->numberFormat->equals($target->numberFormat) || !$this->font->equals($target->font) || !$this->fill->equals($target->fill) || !$this->border->equals($target->border) || !$this->alignment->equals($target->alignment)) {
            return false;
        }

        return true;
    }
}
