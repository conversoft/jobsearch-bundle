<?php
/**
 * Created By Conversoft Generator
 * https://conversoft.rocks
 * https://github.com/conversoft
 * @author Thomas Lonnemann <thomas@conversoft.rocks>
**/

array_insert($GLOBALS['BE_MOD'], 1, [
    'Dma' => [
        'Jobsearch' => [
            'tables' => ['tl_dmajobsearch'],
            'icon' => 'system/themes/default/images/form.gif'
        ]
    ]
]);

array_insert($GLOBALS['FE_MOD'], 2, [
    'Dma' => [
        'Jobsearch' => 'Dma\\Jobsearch\\Modules\\ModuleDmaJobsearch'
    ]
]);

/**
 * HOOKS
 */
// $GLOBALS['TL_HOOKS']['activateAccount'][] = array('Dma\Jobsearch\Hooks\\ActivateAccount', 'activateAccount');
// $GLOBALS['TL_HOOKS']['activateRecipient'][] = array('Dma\Jobsearch\Hooks\\ActivateRecipient', 'activateRecipient');
// $GLOBALS['TL_HOOKS']['addComment'][] = array('Dma\Jobsearch\Hooks\\AddComment', 'addComment');
// $GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('Dma\Jobsearch\Hooks\\AddCustomRegexp', 'addCustomRegexp');
// $GLOBALS['TL_HOOKS']['addLogEntry'][] = array('Dma\Jobsearch\Hooks\\AddLogEntry', 'addLogEntry');
// $GLOBALS['TL_HOOKS']['checkCredentials'][] = array('Dma\\Jobsearch\\Hooks\\CheckCredentials', 'checkCredentials');
// $GLOBALS['TL_HOOKS']['closeAccount'][] = array('Dma\\Jobsearch\\Hooks\\CloseAccount', 'closeAccount');
// $GLOBALS['TL_HOOKS']['colorizeLogEntries'][] = array('Dma\\Jobsearch\\Hooks\\ColorizeLogEntries', 'colorizeLogEntries');
// $GLOBALS['TL_HOOKS']['compileDefinition'][] = array('Dma\\Jobsearch\\Hooks\\CompileDefinition', 'compileDefinition');
// $GLOBALS['TL_HOOKS']['compileFormFields'][] = array('Dma\\Jobsearch\\Hooks\\CompileFormFields', 'compileFormFields');
// $GLOBALS['TL_HOOKS']['createDefinition'][] = array('Dma\\Jobsearch\\Hooks\\CreateDefinition', 'createDefinition');
// $GLOBALS['TL_HOOKS']['createNewUser'][] = array('Dma\\Jobsearch\\Hooks\\CreateNewUser', 'createNewUser');
// $GLOBALS['TL_HOOKS']['executePreActions'][] = array('Dma\\Jobsearch\\Hooks\\ExecutePreActions', 'executePreActions');
// $GLOBALS['TL_HOOKS']['executePostActions'][] = array('Dma\\Jobsearch\\Hooks\\ExecutePostActions', 'executePostActions');
// $GLOBALS['TL_HOOKS']['formValidate'][] = array('Dma\\Jobsearch\\Hooks\\FormValidate', 'formValidate');
// $GLOBALS['TL_HOOKS']['generateFrontendUrl'][] = array('Dma\\Jobsearch\\Hooks\\GenerateFrontendUrl', 'generateFrontendUrl');
// $GLOBALS['TL_HOOKS']['generatePage'][] = array('Dma\\Jobsearch\\Hooks\\GeneratePage', 'generatePage');
// $GLOBALS['TL_HOOKS']['getAllEvents'][] = array('Dma\\Jobsearch\\Hooks\\GetAllEvents', 'getAllEvents');
// $GLOBALS['TL_HOOKS']['getAttributesFromDca'][] = array('Dma\\Jobsearch\\Hooks\\GetAttributesFromDca', 'getAttributesFromDca');
// $GLOBALS['TL_HOOKS']['getContentElement'][] = array('Dma\\Jobsearch\\Hooks\\GetContentElement', 'getContentElement');
// $GLOBALS['TL_HOOKS']['getImage'][] = array('Dma\\Jobsearch\\Hooks\\GetImage', 'getImage');
// $GLOBALS['TL_HOOKS']['getPageIdFromUrl'][] = array('Dma\\Jobsearch\\Hooks\\GetPageIdFromUrl', 'getPageIdFromUrl');
// $GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Dma\\Jobsearch\\Hooks\\GetPageLayout', 'getPageLayout');
// $GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Dma\\Jobsearch\\Hooks\\GetSearchablePages', 'getSearchablePages');
// $GLOBALS['TL_HOOKS']['importUser'][] = array('Dma\\Jobsearch\\Hooks\\ImportUser', 'importUser');
// $GLOBALS['TL_HOOKS']['initializeSystem'][] = array('Dma\\Jobsearch\\Hooks\\InitializeSystem', 'initializeSystem');
// $GLOBALS['TL_HOOKS']['isVisibleElement'][] = array('Dma\\Jobsearch\\Hooks\\IsVisibleElement', 'isVisibleElement');
// $GLOBALS['TL_HOOKS']['listComments'][] = array('Dma\\Jobsearch\\Hooks\\ListComments', 'listComments');
// $GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Dma\\Jobsearch\\Hooks\\LoadDataContainer', 'loadDataContainer');
// $GLOBALS['TL_HOOKS']['loadFormField'][] = array('Dma\\Jobsearch\\Hooks\\LoadFormField', 'loadFormField');
// $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('Dma\\Jobsearch\\Hooks\\LoadLanguageFile', 'loadLanguageFile');
// $GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('Dma\\Jobsearch\\Hooks\\OutputBackendTemplate', 'outputBackendTemplate');
// $GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Dma\\Jobsearch\\Hooks\\OutputFrontendTemplate', 'outputFrontendTemplate');
// $GLOBALS['TL_HOOKS']['parseBackendTemplate'][] = array('Dma\\Jobsearch\\Hooks\\ParseBackendTemplate', 'parseBackendTemplate');
// $GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('Dma\\Jobsearch\\Hooks\\ParseFrontendTemplate', 'parseFrontendTemplate');
// $GLOBALS['TL_HOOKS']['parseTemplate'][] = array('Dma\\Jobsearch\\Hooks\\ParseTemplate', 'parseTemplate');
// $GLOBALS['TL_HOOKS']['parseWidget'][] = array('Dma\\Jobsearch\\Hooks\\ParseWidget', 'parseWidget');
// $GLOBALS['TL_HOOKS']['postDownload'][] = array('Dma\\Jobsearch\\Hooks\\PostDownload', 'postDownload');
// $GLOBALS['TL_HOOKS']['postLogin'][] = array('Dma\\Jobsearch\\Hooks\\PostLogin', 'postLogin');
// $GLOBALS['TL_HOOKS']['postLogout'][] = array('Dma\\Jobsearch\\Hooks\\PostLogout', 'postLogout');
// $GLOBALS['TL_HOOKS']['postUpload'][] = array('Dma\\Jobsearch\\Hooks\\PostUpload', 'postUpload');
// $GLOBALS['TL_HOOKS']['prepareFormData'][] = array('Dma\\Jobsearch\\Hooks\\PrepareFormData', 'prepareFormData');
// $GLOBALS['TL_HOOKS']['printArticleAsPdf'][] = array('Dma\\Jobsearch\\Hooks\\PrintArticleAsPdf', 'printArticleAsPdf');
// $GLOBALS['TL_HOOKS']['processFormData'][] = array('Dma\\Jobsearch\\Hooks\\ProcessFormData', 'processFormData');
// $GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Dma\\Jobsearch\\Hooks\\RemoveOldFeeds', 'removeOldFeeds');
// $GLOBALS['TL_HOOKS']['removeRecipient'][] = array('Dma\\Jobsearch\\Hooks\\RemoveRecipient', 'removeRecipient');
// $GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Dma\\Jobsearch\\Hooks\\ReplaceInsertTags', 'replaceInsertTags');
// $GLOBALS['TL_HOOKS']['reviseTable'][] = array('Dma\\Jobsearch\\Hooks\\ReviseTable', 'reviseTable');
// $GLOBALS['TL_HOOKS']['setNewPassword'][] = array('Dma\\Jobsearch\\Hooks\\SetNewPassword', 'setNewPassword');
// $GLOBALS['TL_HOOKS']['storeFormData'][] = array('Dma\\Jobsearch\\Hooks\\StoreFormData', 'storeFormData');
// $GLOBALS['TL_HOOKS']['validateFormField'][] = array('Dma\\Jobsearch\\Hooks\\ValidateFormField', 'validateFormField');

//$GLOBALS['TL_HOOKS']['csModifyTemplate'][] = array('Dma\\Jobsearch\\\Hooks\\CsModifyTemplate', 'csModifyTemplate');