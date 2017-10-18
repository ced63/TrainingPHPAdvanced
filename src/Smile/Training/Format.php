<?php

namespace Smile\Training;


class Format
{
    use HtmlFormatter, JSonFormatter {
        JSonFormatter::format insteadof HtmlFormatter;
        HtmlFormatter::format as myHtmlFormatter;
    }

    public function test()
    {
        $this->format('bla bla 1');
        $this->myHtmlFormatter('zehdfz edytzfe ytfzedb 2');

    }

}