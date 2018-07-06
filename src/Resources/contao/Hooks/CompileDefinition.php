<?php
/*
Der "compileDefinition"-Hook wird bei der Erstellung einer Formatdefinition in
einem Stylesheet ausgeführt. Er übergibt das Konfigurationsarray als Argument
und erwartet einen String als Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class CompileDefinition extends \Widget
{
    public function compileDefinition($arrRow)
    {
        if (isset($arrRow['border-radius']))
        {
            return "\nborder-radius:" . $arrRow['border-radius'] . ";";
        }

        return '';
    }
}
