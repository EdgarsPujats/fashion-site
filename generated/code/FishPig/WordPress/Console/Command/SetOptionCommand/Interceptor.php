<?php
namespace FishPig\WordPress\Console\Command\SetOptionCommand;

/**
 * Interceptor class for @see \FishPig\WordPress\Console\Command\SetOptionCommand
 */
class Interceptor extends \FishPig\WordPress\Console\Command\SetOptionCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\Model\OptionRepository $optionRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Model\App\Emulation $storeEmulation, ?string $name = null)
    {
        $this->___init();
        parent::__construct($optionRepository, $storeManager, $storeEmulation, $name);
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
