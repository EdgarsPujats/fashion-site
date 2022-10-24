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
    public function getHeaderCss()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaderCss');
        return $pluginInfo ? $this->___callPlugins('getHeaderCss', func_get_args(), $pluginInfo) : parent::getHeaderCss();
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function isVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisible');
        return $pluginInfo ? $this->___callPlugins('isVisible', func_get_args(), $pluginInfo) : parent::isVisible();
    }

    /**
     * {@inheritdoc}
     */
    public function setData(array $data, $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($data, $scope);
    }

    /**
     * {@inheritdoc}
     */
    public function hasChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasChildren');
        return $pluginInfo ? $this->___callPlugins('hasChildren', func_get_args(), $pluginInfo) : parent::hasChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabel');
        return $pluginInfo ? $this->___callPlugins('getLabel', func_get_args(), $pluginInfo) : parent::getLabel();
    }

    /**
     * {@inheritdoc}
     */
    public function getComment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComment');
        return $pluginInfo ? $this->___callPlugins('getComment', func_get_args(), $pluginInfo) : parent::getComment();
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendModel');
        return $pluginInfo ? $this->___callPlugins('getFrontendModel', func_get_args(), $pluginInfo) : parent::getFrontendModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getClass');
        return $pluginInfo ? $this->___callPlugins('getClass', func_get_args(), $pluginInfo) : parent::getClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getPath($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        return $pluginInfo ? $this->___callPlugins('getPath', func_get_args(), $pluginInfo) : parent::getPath($fieldPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementVisibility');
        return $pluginInfo ? $this->___callPlugins('getElementVisibility', func_get_args(), $pluginInfo) : parent::getElementVisibility();
    }
}
