<?php
/*
Der "getPageIdFromUrl"-Hook wird beim Auswerten der URL-Fragmente ausgeführt.
Er übergibt das Fragment-Array als Argument und erwartet ein Datenarray als Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class GetPageIdFromUrl extends \Widget
{
    public function getPageIdFromUrl($arrFragments)
    {
        return array_unique($arrFragments);
    }
}
