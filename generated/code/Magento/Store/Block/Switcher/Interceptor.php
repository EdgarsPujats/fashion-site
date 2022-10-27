<?php
namespace Magento\Store\Block\Switcher;

/**
 * Interceptor class for @see \Magento\Store\Block\Switcher
 */
class Interceptor extends \Magento\Store\Block\Switcher implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, array $data = [], ?\Magento\Framework\Url\Helper\Data $urlHelper = null)
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $data, $urlHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetStorePostData(\Magento\Store\Model\Store $store, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTargetStorePostData');
        return $pluginInfo ? $this->___callPlugins('getTargetStorePostData', func_get_args(), $pluginInfo) : parent::getTargetStorePostData($store, $data);
    }
}
