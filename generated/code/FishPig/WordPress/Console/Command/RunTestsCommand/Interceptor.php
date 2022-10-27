<?php
namespace FishPig\WordPress\Console\Command\RunTestsCommand;

/**
 * Interceptor class for @see \FishPig\WordPress\Console\Command\RunTestsCommand
 */
class Interceptor extends \FishPig\WordPress\Console\Command\RunTestsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \FishPig\WordPress\App\Debug\TestPoolFactory $testPoolFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Model\App\Emulation $emulation, ?string $name = null)
    {
        $this->___init();
        parent::__construct($state, $testPoolFactory, $storeManager, $emulation, $name);
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
