<?php
/*
Der "parseBackendTemplate"-Hook wird bei der Aufbereitung eines Backend-Templates ausgeführt.
Er übergibt Inhalt und Name des Templates als Argument und erwartet den geänderten Template-Inhalt
als Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class ParseBackendTemplate extends \Widget
{
    public function parseBackendTemplate($strContent, $strTemplate)
    {
        if ($strTemplate == 'be_main')
        {
            // Ausgabe modifizieren
        }

        return $strContent;
    }
}
