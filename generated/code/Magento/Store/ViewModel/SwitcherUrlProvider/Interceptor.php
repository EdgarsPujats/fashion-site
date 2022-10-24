<?php
namespace Magento\Store\ViewModel\SwitcherUrlProvider;

/**
 * Interceptor class for @see \Magento\Store\ViewModel\SwitcherUrlProvider
 */
class Interceptor extends \Magento\Store\ViewModel\SwitcherUrlProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Url\EncoderInterface $encoder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($encoder, $storeManager, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetStoreRedirectUrl(\Magento\Store\Model\Store $store) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTargetStoreRedirectUrl');
        return $pluginInfo ? $this->___callPlugins('getTargetStoreRedirectUrl', func_get_args(), $pluginInfo) : parent::getTargetStoreRedirectUrl($store);
    }
}
