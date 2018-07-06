<?php
namespace Dma\Jobsearch\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Contao\CoreBundle\Framework\FrameworkAwareTrait;
use Contao\CoreBundle\Command\AbstractLockedCommand;
use Conversoft\Productsimport\Models\Conversoftproductsimport;

use Psr\Log\LogLevel;
use Contao\CoreBundle\Monolog\ContaoContext;

class DmaJobsearchBundleCommand extends AbstractLockedCommand
{
    use FrameworkAwareTrait;

    protected $output;
    protected $strFolder;
    protected $arrFiles = [];
    protected $arrCheckedTarifs = [];

    public function __construct()
    {
        putenv('TMPDIR=' . getcwd() . '/system/tmp/');
        parent::__construct();
    }

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('dma:importproducts')
            // the short description shown while running "php bin/console list"
            ->setDescription('Imports new products')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command sets up the import routines for conversoft.');
    }

    protected function executeLocked(InputInterface $input, OutputInterface $output)
    {
        // Get Contao
        $this->framework = $this->getContainer()->get('contao.framework');
        $this->framework->initialize();

        include_once(__DIR__ . '/../Resources/contao/languages/de/default.php');

        // set output to have error and success and input
        $this->output = new SymfonyStyle($input, $output);

    }




    // protected function getFiles($strFolder)
    // {
        // $arrValidExtensions = [];
        // if (\Conversoft::config('csproductsimportfileextensions')) {
        //     $arrValidExtensions = \StringUtil::deserialize(\Conversoft::config('csproductsimportfileextensions'));
        // }

        // foreach ($arrValidExtensions as $extension) {
        //     $arrFiles = glob($strFolder . '/*.' . $extension);
        //     /**
        //      * Filter temp Files
        //      */
        //     foreach ($arrFiles as $file) {
        //         if (!((strpos($file, '$')) or (strpos($file, '~')))) {
        //             $this->arrFiles[] = $file;
        //         }
        //     }
        // }

        // sort($this->arrFiles);

        // $return = count($this->arrFiles);

        // if (!($return)) {
        //     $this->exit(sprintf(
        //         $GLOBALS['TL_LANG']['tl_conversoftconfig']['csproductsimporternofiles'][0],
        //         str_replace(TL_ROOT . '/', '', $strFolder)
        //     ));
        // }
        // return count($this->arrFiles);
//     }

    // protected function importLists()
    // {
    //     foreach ($this->arrFiles as $file) {
    //         $this->readExcelFile($file);
    //     }
    // }

    // protected function readExcelFile($file)
    // {
    //     $objStart = new \DateTime('now');

    //     $this->output->writeln([

    //         '============',
    //         sprintf(
    //             $GLOBALS['TL_LANG']['tl_conversoftconfig']['csproductsimporterloading'][0],
    //             str_replace(TL_ROOT . '/', '', $file)
    //         ),
    //         '============',
    //         '',
    //     ]);
    //     $objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);

        /**
         * GET first _ section to define mode
         * Selector to not delete all
         */

//         $strMode = \Conversoft::config('csproductsimportmode');

//         $strSelector = \Conversoft::config('csproductsimportfiltersingletruncate');

//         $arrUpdateMatchFields = [];

//         if (\Conversoft::config('csproductsimportfilterforupdate')) {
//             $arrUpdateMatchFields = \StringUtil::deserialize(\Conversoft::config('csproductsimportfilterforupdate'));
//         }
//         if (\Conversoft::config('csproductsimportfiltersingletruncate')) {
//         }

//         $this->output->writeln([
//             '============',
//             sprintf(
//                 $GLOBALS['TL_LANG']['tl_conversoftconfig']['csproductsimporterloadedimportfile'][0],
//                 str_replace(TL_ROOT . '/', '', $file)
//             ),
//             '============',
//             '',
//         ]);

//         // loop through worksheets
//         foreach ($objPHPExcel->getWorksheetIterator() as $key => $worksheet) {

//             // first sheet must contain the product
//             if ($key == 0) {
//                 $this->output->writeln([
//                     '============',
//                     sprintf(
//                         $GLOBALS['TL_LANG']['tl_conversoftconfig']['csproductsimporterstartingimportsheet'][0],
//                         $worksheet->getTitle()
//                     ),
//                     '============',
//                     '',
//                 ]);
//                 $this->installproduct($file, $worksheet, $strMode, $strSelector, $arrUpdateMatchFields);
//             }
//         }

//         $objEnd = new \DateTime('now');
//         $objDiff = $objStart->diff($objEnd);


//         // Move the file to the imported folder
//         if (rename($file, str_replace($this->importFoldername, 'imported', $file))) {
//             $this->output->success([
//                 '============',
//                 sprintf(
//                     $GLOBALS['TL_LANG']['tl_conversoftconfig']['csproductsimporterimportedfile'][0],
//                     str_replace(TL_ROOT . '/', '', $file)
//                 ),
//                 $GLOBALS['TL_LANG']['tl_conversoftconfig']['importin'][0] . ' ' . ($objDiff->i ?
//                     $objDiff->i . ' ' . $GLOBALS['TL_LANG']['tl_conversoftconfig']['importminutes'][0] . ' ' .
//                     $GLOBALS['TL_LANG']['tl_conversoftconfig']['importand'][0] . ' ' : '') .
//                     $objDiff->s . ' ' . $GLOBALS['TL_LANG']['tl_conversoftconfig']['importseconds'][0] . '.',
//                 '============',
//                 '',
//             ]);

//         }
//         // Sync Dbafs to make sure the moved file is corretly listed
// //        \Dbafs::syncFiles();

//     }

//     protected function installproduct($strFilename, $worksheet, $type, $selector, $arrUpdateMatchFields)
//     {
//         $objModel = new Conversoftproductsimport([], \Conversoft::config('csproductdatatable'));

//         if ($type == 'truncate') {
//             $objModel->truncate();
//         }

//         $blnListContainsHeadline = \Conversoft::config('csproductsimportfilescontainheadlines') ?? true;

//         $intSkipRows = 2;
//         $addedFirst = false;
//         $arrFieldsinDB = (\Conversoft::config('csproductdatatable') ? \Database::getInstance()->getFieldNames(\Conversoft::config('csproductdatatable')) : []);

//         $data = [];
//         $objRows = $worksheet->getRowIterator();

//         foreach ($objRows as $key => $row) {
//             $cellIterator = $row->getCellIterator();
//             if ($key == 1 and $blnListContainsHeadline) {
//                 $arrHeadlines = $this->loadHeadlines($cellIterator);
//                 continue;
//             }
//             if ($key > $intSkipRows) {
//                 $objModel = new Conversoftproductsimport([], \Conversoft::config('csproductdatatable'));
//                 // TODO CSV
//                 foreach ($cellIterator as $index => $cell) {
//                     $value = $cell->getCalculatedValue();
//                     // TODO Mutators? // SETTER
//                     // Specialcases handling
//                     if (strpos($arrHeadlines[$index], '_plz') !== false) {
//                         if (strlen($value) < 5) {
//                             $value = (string)('0' . $value);
//                         }
//                     }
//                     // TODO Mutators? // SETTER
//                     $strParameter = $arrHeadlines[$index];

//                     if ($strParameter and (in_array($strParameter, $arrFieldsinDB))) {
//                         $objModel->$strParameter = trim($value);
//                     }
//                 }

//                 if (\Conversoft::config('csuseproductcare')) {
//                     if (\Conversoft::config('csuseproductcare')) {
//                         if (($strvaluecheck = \Conversoft::config('csproductsimportfiltersingletruncate')) == 'tarifname') {
//                             if (($objModel->$strvaluecheck) && (!(in_array($objModel->$strvaluecheck, $this->arrCheckedTarifs)))) {
//                                 $strkeycheck = 'title';
//                                 if (!($objCheck = \Conversoft\Productcare\Models\Conversoftproductcare::where($strkeycheck, trim($objModel->$strvaluecheck))->first())) {
//                                     $objDatetime = new \DateTime('now');
//                                     if (rename($strFilename, str_replace($this->importFoldername . '/', 'failedimports/' . $objDatetime->format('Ymd') . '_failed_by_' . $strkeycheck . '_', $strFilename))) {
//                                         $this->exit('There is no product with ' . $strkeycheck . ' = ' . $objModel->$strvaluecheck, 'fatal');
//                                     }
//                                 } else {
//                                     $this->arrCheckedTarifs[] = $objModel->$strvaluecheck;
//                                 }
//                             }
//                         }
//                     }
//                 }

//                 if (!($objModel->gemeinde_name)) {
//                     $this->output->success(['============', ($key - 1 - $intSkipRows), ' Rows imported.', '============']);
//                     continue;
//                 }
//                 if ($addedFirst == false and $type == 'singletruncate' and $selector and $objModel->$selector) {
//                     $objModelTruncate = new Conversoftproductsimport([], \Conversoft::config('csproductdatatable'));
//                     $objModelTruncate->where($selector, $objModel->$selector)->delete();
//                     $addedFirst = true;
//                 }
//                 if ($type == 'update' and $arrUpdateMatchFields) {
//                     $objModelTmp = $objModel;

//                     foreach ($arrUpdateMatchFields as $matchfield) {
//                         $matchfield = trim($matchfield);
//                         $objModelTmp = $objModelTmp->where($matchfield, $objModel->$matchfield);
//                     }

//                     if ($objOriginalModel = $objModelTmp->first()) {

//                         foreach ($objModel->toArray() as $attr => $attvalue) {
//                             $objOriginalModel->$attr = $attvalue;
//                         }

//                         $objOriginalModel->setTable(\Conversoft::config('csproductdatatable'));
//                         $objModel = $objOriginalModel;
//                         $objModel->update();
//                         continue;
//                     }
//                 }

//                 $objModel->save();
//             }
//         }
//     }

//     protected function loadHeadlines($cellIterator)
//     {
//         $data = [];

//         foreach ($cellIterator as $index => $cell) {
//             $value = $cell->getCalculatedValue();
//             $value = str_replace(
//                 [' ', 'Ä', 'ä', 'Ö', 'ö', 'Ü', 'ü', 'ß', '-'],
//                 ['_', 'ae', 'ae', 'oe', 'oe', 'ue', 'ue', 'ss', '_'],
//                 $value
//             );
//             $data[$index] = strtolower($value);
//         }
//         // TODO CSV + XML

//         return $data;
//     }
//     protected function exit($message, $type = 'info')
//     {
//         $this->output->error([
//             '============',
//             $message,
//             '============'
//         ]);
//         if ($type == 'fatal') {
//             // TODO NOTIFY ADMIN

//             \System::getContainer()
//                 ->get('monolog.logger.contao')
//                 ->log(LogLevel::INFO, $message, [
//                     'contao' => new ContaoContext(__class__ . '::' . __FUNCTION__, TL_GENERAL)
//                 ]);
//         }
//         exit();
//     }
}