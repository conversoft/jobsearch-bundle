<?php
namespace Dma\Jobsearch\ContaoManager;
/**
 * Created By Conversoft Generator
 * https://conversoft.rocks
 * https://github.com/conversoft
 * @author Thomas Lonnemann <thomas@conversoft.rocks>
 **/
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Dma\Jobsearch\ContaoDmaJobsearchBundle;
use Contao\CoreBundle\ContaoCoreBundle;

use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [BundleConfig::create(ContaoDmaJobsearchBundle::class)
            ->setLoadAfter([ContaoCoreBundle::class])];
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        if (file_exists(__DIR__ . '/../Resources/config/routing.yml')) {
            return $resolver
                ->resolve(__DIR__ . '/../Resources/config/routing.yml')
                ->load(__DIR__ . '/../Resources/config/routing.yml');
        }
    }
}