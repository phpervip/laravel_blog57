<?php

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{
    public function toHTML($text)
    {
        $text = $this->preTransfromText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }


    protected function preTransfromText($text)
    {
        return $text;
    }

    protected function postTransformText($text)
    {
        return $text;
    }

}
