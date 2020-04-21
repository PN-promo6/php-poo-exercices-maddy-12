<?php

namespace exo;

class AdvancedString
{
    private $internalString;

    public function __construct($internalString)
    {
        $this->internalString = $internalString;
    }

    //methodes
    public function bold()
    {
        return "<b>" . $this->internalString . "</b>" . "</br>";
    }
    public function italic()
    {
        return "<i>" . $this->internalString . "</i>" . "</br>";
    }
    public function underline()
    {
        return "<u>" . $this->internalString . "</u>" . "</br>";
    }
    public function upperCase()
    {
        return "<span style='text-transform:uppercase'>" . $this->internalString . "</span>" . "</br>";
    }
}
