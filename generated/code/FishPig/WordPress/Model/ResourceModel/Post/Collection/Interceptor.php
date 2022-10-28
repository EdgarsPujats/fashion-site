<?php
namespace FishPig\WordPress\Model\ResourceModel\Post\Collection;

/**
 * Interceptor class for @see \FishPig\WordPress\Model\ResourceModel\Post\Collection
 */
class Interceptor extends \FishPig\WordPress\Model\ResourceModel\Post\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \FishPig\WordPress\Model\PostTypeRepository $postTypeRepository, \FishPig\WordPress\Model\ResourceModel\Post\Permalink $permalinkResource, \FishPig\WordPress\Model\OptionRepository $optionRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Serialize\SerializerInterface $serializer, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?string $modelName = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $postTypeRepository, $permalinkResource, $optionRepository, $customerSession, $serializer, $connection, $resource, $modelName);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
