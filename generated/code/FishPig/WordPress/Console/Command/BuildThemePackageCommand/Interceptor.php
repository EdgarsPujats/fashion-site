<?php
namespace FishPig\WordPress\Console\Command\BuildThemePackageCommand;

/**
 * Interceptor class for @see \FishPig\WordPress\Console\Command\BuildThemePackageCommand
 */
class Interceptor extends \FishPig\WordPress\Console\Command\BuildThemePackageCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\App\Theme\PackageBuilder $packageBuilder, \FishPig\WordPress\App\Theme\PackageDeployer $packageDeployer, \Magento\Framework\Filesystem\Driver\File $fileDriver, ?string $name = null)
    {
        $this->___init();
        parent::__construct($packageBuilder, $packageDeployer, $fileDriver, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
