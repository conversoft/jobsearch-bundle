<?php
namespace Dma\Jobsearch\Controller;
/**
 * Created By Conversoft Generator
 * https://conversoft.rocks
 * https://github.com/conversoft
 * @author Thomas Lonnemann <thomas@conversoft.rocks>
**/
// Model REQUIRES ELOQUENT
// use Dma\Jobsearch\Models\Dmajobsearch;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/*
*
* @Route("jobsearch")
*/

class ContaoDmaJobsearchController extends Controller
{
    /**
     * @Route("/jobsearch")
     */
    public function indexAction($id)
    {
        $this->container->get('contao.framework')->initialize();
        $data = [];
        // REQUIRES ELOQUENT
        //$dmajobsearch = Dmajobsearch::where('title', $id)->first();

        if ($dmajobsearch) {
            $return = [];
        }  
        if (!count($data)) {
                $data = ['error' => 'noResults'];
        }

        $response = new JsonResponse();
        $response->setData(array(
            'data' => $data
        ));
        return $response;

    }
}
