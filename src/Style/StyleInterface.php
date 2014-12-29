<?php


namespace Excel\Entity\Style;


interface StyleInterface
{
    /**
     * @param StyleInterface $target
     * @return bool
     */
    public function equals(StyleInterface $target);
}
