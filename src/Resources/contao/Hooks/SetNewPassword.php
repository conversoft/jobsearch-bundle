<?php
/*
Der "setNewPassword"-Hook wird nach dem Abspeichern eines neuen Passworts ausgeführt.
Er übergibt das Benutzerobjekt und das verschlüsselte Passwort als Argument und erwartet keinen Rückgabewert.
*/
namespace Dma\Jobsearch\Hooks;

class SetNewPassword extends \Widget
{
    public function setNewPassword($objUser, $strPassword)
    {
    }
}
