<?php
/*
// TODO DESC
 */
namespace Dma\Jobsearch\Hooks;




class CsModifyTemplate
{

    
    public function csModifyTemplate ($objTemplate, $data)
    {
        $objTemplate->body = "HIER STEHT DER TEXT";
        return $objTemplate;
    }
}
