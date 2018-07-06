<?php
/*
Der "generateFrontendUrl"-Hook wird bei der Erstellung einer Frontend-URL ausgeführt.
Er übergibt die originale URL als Argument und erwartet eine Zeichenkette als Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class GenerateFrontendUrl extends \Widget
{
    public function generateFrontendUrl($arrRow, $strParams, $strUrl)
    {
        return str_replace('.html', '.xml', $strUrl);
    }
}
