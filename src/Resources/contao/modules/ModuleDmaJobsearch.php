<?php
namespace Dma\Jobsearch\Modules;
/**
 * Created By Conversoft Generator
 * https://conversoft.rocks
 * https://github.com/conversoft
 * @author Thomas Lonnemann <thomas@conversoft.rocks>
**/
class ModuleDmaJobsearch extends \Module
{
    protected $strTemplate = 'mod_dmajobsearch';
    
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### Module - DmaJobsearch ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
            return $objTemplate->parse();
        }

        $this->Template = new \FrontendTemplate($this->strTemplate);

        return parent::generate(); 
    }

    public function compile()
    {
        
    }
}

