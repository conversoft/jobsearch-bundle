<?php
/*
Der "addComment"-Hook wird beim Hinzufügen eines Kommentars ausgeführt.
Er übergibt die ID des Datensatzes und das Datenarray als Argument und
erwartet keinen Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class AddComment extends \Widget
{
    public function addComment($intId, $arrSet)
    {
    }
}
