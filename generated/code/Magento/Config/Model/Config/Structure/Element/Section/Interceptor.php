<?php
namespace Magento\Config\Model\Config\Structure\Element\Section;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure\Element\Section
 */
class Interceptor extends \Magento\Config\Model\Config\Structure\Element\Section implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Config\Model\Config\Structure\Element\Iterator $childrenIterator, \Magento\Framework\AuthorizationInterface $authorization)
    {
        $this->___init();
        parent::__construct($storeManager, $moduleManager, $childrenIterator, $authorization);
    }

    /**
     * {@inheritdoc}
     */
    public function setData(array $data, $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($data, $scope);
    }
}
