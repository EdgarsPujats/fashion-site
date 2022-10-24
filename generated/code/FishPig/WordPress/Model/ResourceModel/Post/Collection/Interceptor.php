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
    public function _construct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_construct');
        return $pluginInfo ? $this->___callPlugins('_construct', func_get_args(), $pluginInfo) : parent::_construct();
    }

    /**
     * {@inheritdoc}
     */
    public function addUserIdFilter(int $userId) : \FishPig\WordPress\Model\ResourceModel\Post\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUserIdFilter');
        return $pluginInfo ? $this->___callPlugins('addUserIdFilter', func_get_args(), $pluginInfo) : parent::addUserIdFilter($userId);
    }

    /**
     * {@inheritdoc}
     */
    public function addArchiveDateFilter($archiveDate, $isDaily = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addArchiveDateFilter');
        return $pluginInfo ? $this->___callPlugins('addArchiveDateFilter', func_get_args(), $pluginInfo) : parent::addArchiveDateFilter($archiveDate, $isDaily);
    }

    /**
     * {@inheritdoc}
     */
    public function addStickyPostsToCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStickyPostsToCollection');
        return $pluginInfo ? $this->___callPlugins('addStickyPostsToCollection', func_get_args(), $pluginInfo) : parent::addStickyPostsToCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function addIsStickyPostFilter($flag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIsStickyPostFilter');
        return $pluginInfo ? $this->___callPlugins('addIsStickyPostFilter', func_get_args(), $pluginInfo) : parent::addIsStickyPostFilter($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function addPostTypeFilter($postTypes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPostTypeFilter');
        return $pluginInfo ? $this->___callPlugins('addPostTypeFilter', func_get_args(), $pluginInfo) : parent::addPostTypeFilter($postTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function hasPostTypeFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasPostTypeFilter');
        return $pluginInfo ? $this->___callPlugins('hasPostTypeFilter', func_get_args(), $pluginInfo) : parent::hasPostTypeFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addIsPublishedFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIsPublishedFilter');
        return $pluginInfo ? $this->___callPlugins('addIsPublishedFilter', func_get_args(), $pluginInfo) : parent::addIsPublishedFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addIsViewableFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIsViewableFilter');
        return $pluginInfo ? $this->___callPlugins('addIsViewableFilter', func_get_args(), $pluginInfo) : parent::addIsViewableFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addStatusFilter($status)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStatusFilter');
        return $pluginInfo ? $this->___callPlugins('addStatusFilter', func_get_args(), $pluginInfo) : parent::addStatusFilter($status);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderByPostDate($dir = 'desc')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderByPostDate');
        return $pluginInfo ? $this->___callPlugins('setOrderByPostDate', func_get_args(), $pluginInfo) : parent::setOrderByPostDate($dir);
    }

    /**
     * {@inheritdoc}
     */
    public function addPostDateFilter($dateStr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPostDateFilter');
        return $pluginInfo ? $this->___callPlugins('addPostDateFilter', func_get_args(), $pluginInfo) : parent::addPostDateFilter($dateStr);
    }

    /**
     * {@inheritdoc}
     */
    public function removePermalinkFromSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removePermalinkFromSelect');
        return $pluginInfo ? $this->___callPlugins('removePermalinkFromSelect', func_get_args(), $pluginInfo) : parent::removePermalinkFromSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function addSearchStringFilter(array $words, array $fields)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addSearchStringFilter');
        return $pluginInfo ? $this->___callPlugins('addSearchStringFilter', func_get_args(), $pluginInfo) : parent::addSearchStringFilter($words, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function addTermIdFilter($termId, $type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTermIdFilter');
        return $pluginInfo ? $this->___callPlugins('addTermIdFilter', func_get_args(), $pluginInfo) : parent::addTermIdFilter($termId, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function addTermFilter($term, $type, $field = 'slug')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTermFilter');
        return $pluginInfo ? $this->___callPlugins('addTermFilter', func_get_args(), $pluginInfo) : parent::addTermFilter($term, $type, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function joinTermTables($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinTermTables');
        return $pluginInfo ? $this->___callPlugins('joinTermTables', func_get_args(), $pluginInfo) : parent::joinTermTables($type);
    }

    /**
     * {@inheritdoc}
     */
    public function addPostParentIdFilter($postParentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPostParentIdFilter');
        return $pluginInfo ? $this->___callPlugins('addPostParentIdFilter', func_get_args(), $pluginInfo) : parent::addPostParentIdFilter($postParentId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSize');
        return $pluginInfo ? $this->___callPlugins('getSize', func_get_args(), $pluginInfo) : parent::getSize();
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderByMenuOrder($dir = 'asc')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderByMenuOrder');
        return $pluginInfo ? $this->___callPlugins('setOrderByMenuOrder', func_get_args(), $pluginInfo) : parent::setOrderByMenuOrder($dir);
    }

    /**
     * {@inheritdoc}
     */
    public function addCategoryIdFilter($categoryId) : \FishPig\WordPress\Model\ResourceModel\Post\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCategoryIdFilter');
        return $pluginInfo ? $this->___callPlugins('addCategoryIdFilter', func_get_args(), $pluginInfo) : parent::addCategoryIdFilter($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function addTagIdFilter($tagId) : \FishPig\WordPress\Model\ResourceModel\Post\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTagIdFilter');
        return $pluginInfo ? $this->___callPlugins('addTagIdFilter', func_get_args(), $pluginInfo) : parent::addTagIdFilter($tagId);
    }

    /**
     * {@inheritdoc}
     */
    public function setMainTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMainTable');
        return $pluginInfo ? $this->___callPlugins('setMainTable', func_get_args(), $pluginInfo) : parent::setMainTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        return $pluginInfo ? $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo) : parent::getMainTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelect');
        return $pluginInfo ? $this->___callPlugins('getSelect', func_get_args(), $pluginInfo) : parent::getSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToSelect($field, $alias = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToSelect');
        return $pluginInfo ? $this->___callPlugins('addFieldToSelect', func_get_args(), $pluginInfo) : parent::addFieldToSelect($field, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addExpressionFieldToSelect($alias, $expression, $fields)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addExpressionFieldToSelect');
        return $pluginInfo ? $this->___callPlugins('addExpressionFieldToSelect', func_get_args(), $pluginInfo) : parent::addExpressionFieldToSelect($alias, $expression, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function removeFieldFromSelect($field, $isAlias = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeFieldFromSelect');
        return $pluginInfo ? $this->___callPlugins('removeFieldFromSelect', func_get_args(), $pluginInfo) : parent::removeFieldFromSelect($field, $isAlias);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllFieldsFromSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllFieldsFromSelect');
        return $pluginInfo ? $this->___callPlugins('removeAllFieldsFromSelect', func_get_args(), $pluginInfo) : parent::removeAllFieldsFromSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function setModel($model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setModel');
        return $pluginInfo ? $this->___callPlugins('setModel', func_get_args(), $pluginInfo) : parent::setModel($model);
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModelName');
        return $pluginInfo ? $this->___callPlugins('getModelName', func_get_args(), $pluginInfo) : parent::getModelName();
    }

    /**
     * {@inheritdoc}
     */
    public function setResourceModel($model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setResourceModel');
        return $pluginInfo ? $this->___callPlugins('setResourceModel', func_get_args(), $pluginInfo) : parent::setResourceModel($model);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceModelName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceModelName');
        return $pluginInfo ? $this->___callPlugins('getResourceModelName', func_get_args(), $pluginInfo) : parent::getResourceModelName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        return $pluginInfo ? $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo) : parent::getAllIds();
    }

    /**
     * {@inheritdoc}
     */
    public function join($table, $cond, $cols = '*')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'join');
        return $pluginInfo ? $this->___callPlugins('join', func_get_args(), $pluginInfo) : parent::join($table, $cond, $cols);
    }

    /**
     * {@inheritdoc}
     */
    public function setResetItemsDataChanged($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setResetItemsDataChanged');
        return $pluginInfo ? $this->___callPlugins('setResetItemsDataChanged', func_get_args(), $pluginInfo) : parent::setResetItemsDataChanged($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function resetItemsDataChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetItemsDataChanged');
        return $pluginInfo ? $this->___callPlugins('resetItemsDataChanged', func_get_args(), $pluginInfo) : parent::resetItemsDataChanged();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function addBindParam($name, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBindParam');
        return $pluginInfo ? $this->___callPlugins('addBindParam', func_get_args(), $pluginInfo) : parent::addBindParam($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection(\Magento\Framework\DB\Adapter\AdapterInterface $conn)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnection');
        return $pluginInfo ? $this->___callPlugins('setConnection', func_get_args(), $pluginInfo) : parent::setConnection($conn);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        return $pluginInfo ? $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo) : parent::getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectSql($stringMode = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectSql');
        return $pluginInfo ? $this->___callPlugins('getSelectSql', func_get_args(), $pluginInfo) : parent::getSelectSql($stringMode);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        return $pluginInfo ? $this->___callPlugins('addOrder', func_get_args(), $pluginInfo) : parent::addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function unshiftOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unshiftOrder');
        return $pluginInfo ? $this->___callPlugins('unshiftOrder', func_get_args(), $pluginInfo) : parent::unshiftOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($field, $condition);
    }

    /**
     * {@inheritdoc}
     */
    public function distinct($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'distinct');
        return $pluginInfo ? $this->___callPlugins('distinct', func_get_args(), $pluginInfo) : parent::distinct($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchItem');
        return $pluginInfo ? $this->___callPlugins('fetchItem', func_get_args(), $pluginInfo) : parent::fetchItem();
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
    public function resetData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetData');
        return $pluginInfo ? $this->___callPlugins('resetData', func_get_args(), $pluginInfo) : parent::resetData();
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadData');
        return $pluginInfo ? $this->___callPlugins('loadData', func_get_args(), $pluginInfo) : parent::loadData($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function printLogQuery($printQuery = false, $logQuery = false, $sql = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'printLogQuery');
        return $pluginInfo ? $this->___callPlugins('printLogQuery', func_get_args(), $pluginInfo) : parent::printLogQuery($printQuery, $logQuery, $sql);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterToMap($filter, $alias, $group = 'fields')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilterToMap');
        return $pluginInfo ? $this->___callPlugins('addFilterToMap', func_get_args(), $pluginInfo) : parent::addFilterToMap($filter, $alias, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function joinExtensionAttribute(\Magento\Framework\Api\ExtensionAttribute\JoinDataInterface $join, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinExtensionAttribute');
        return $pluginInfo ? $this->___callPlugins('joinExtensionAttribute', func_get_args(), $pluginInfo) : parent::joinExtensionAttribute($join, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemObjectClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemObjectClass');
        return $pluginInfo ? $this->___callPlugins('getItemObjectClass', func_get_args(), $pluginInfo) : parent::getItemObjectClass();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter($field, $value, $type = 'and')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        return $pluginInfo ? $this->___callPlugins('addFilter', func_get_args(), $pluginInfo) : parent::addFilter($field, $value, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilter');
        return $pluginInfo ? $this->___callPlugins('getFilter', func_get_args(), $pluginInfo) : parent::getFilter($field);
    }

    /**
     * {@inheritdoc}
     */
    public function isLoaded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoaded');
        return $pluginInfo ? $this->___callPlugins('isLoaded', func_get_args(), $pluginInfo) : parent::isLoaded();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageNumber');
        return $pluginInfo ? $this->___callPlugins('getLastPageNumber', func_get_args(), $pluginInfo) : parent::getLastPageNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageSize');
        return $pluginInfo ? $this->___callPlugins('getPageSize', func_get_args(), $pluginInfo) : parent::getPageSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstItem');
        return $pluginInfo ? $this->___callPlugins('getFirstItem', func_get_args(), $pluginInfo) : parent::getFirstItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastItem');
        return $pluginInfo ? $this->___callPlugins('getLastItem', func_get_args(), $pluginInfo) : parent::getLastItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        return $pluginInfo ? $this->___callPlugins('getItems', func_get_args(), $pluginInfo) : parent::getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnValues($colName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnValues');
        return $pluginInfo ? $this->___callPlugins('getColumnValues', func_get_args(), $pluginInfo) : parent::getColumnValues($colName);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemsByColumnValue', func_get_args(), $pluginInfo) : parent::getItemsByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemByColumnValue', func_get_args(), $pluginInfo) : parent::getItemByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        return $pluginInfo ? $this->___callPlugins('addItem', func_get_args(), $pluginInfo) : parent::addItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItemByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItemByKey');
        return $pluginInfo ? $this->___callPlugins('removeItemByKey', func_get_args(), $pluginInfo) : parent::removeItemByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllItems');
        return $pluginInfo ? $this->___callPlugins('removeAllItems', func_get_args(), $pluginInfo) : parent::removeAllItems();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        return $pluginInfo ? $this->___callPlugins('clear', func_get_args(), $pluginInfo) : parent::clear();
    }

    /**
     * {@inheritdoc}
     */
    public function walk($callback, array $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walk');
        return $pluginInfo ? $this->___callPlugins('walk', func_get_args(), $pluginInfo) : parent::walk($callback, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function each($objMethod, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'each');
        return $pluginInfo ? $this->___callPlugins('each', func_get_args(), $pluginInfo) : parent::each($objMethod, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataToAll($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataToAll');
        return $pluginInfo ? $this->___callPlugins('setDataToAll', func_get_args(), $pluginInfo) : parent::setDataToAll($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCurPage($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurPage');
        return $pluginInfo ? $this->___callPlugins('setCurPage', func_get_args(), $pluginInfo) : parent::setCurPage($page);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageSize($size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageSize');
        return $pluginInfo ? $this->___callPlugins('setPageSize', func_get_args(), $pluginInfo) : parent::setPageSize($size);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemObjectClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemObjectClass');
        return $pluginInfo ? $this->___callPlugins('setItemObjectClass', func_get_args(), $pluginInfo) : parent::setItemObjectClass($className);
    }

    /**
     * {@inheritdoc}
     */
    public function getNewEmptyItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewEmptyItem');
        return $pluginInfo ? $this->___callPlugins('getNewEmptyItem', func_get_args(), $pluginInfo) : parent::getNewEmptyItem();
    }

    /**
     * {@inheritdoc}
     */
    public function toXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($arrRequiredFields = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($arrRequiredFields);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionHash');
        return $pluginInfo ? $this->___callPlugins('toOptionHash', func_get_args(), $pluginInfo) : parent::toOptionHash();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($idValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        return $pluginInfo ? $this->___callPlugins('getItemById', func_get_args(), $pluginInfo) : parent::getItemById($idValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIterator');
        return $pluginInfo ? $this->___callPlugins('getIterator', func_get_args(), $pluginInfo) : parent::getIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        return $pluginInfo ? $this->___callPlugins('count', func_get_args(), $pluginInfo) : parent::count();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlag');
        return $pluginInfo ? $this->___callPlugins('getFlag', func_get_args(), $pluginInfo) : parent::getFlag($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($flag, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFlag');
        return $pluginInfo ? $this->___callPlugins('setFlag', func_get_args(), $pluginInfo) : parent::setFlag($flag, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasFlag');
        return $pluginInfo ? $this->___callPlugins('hasFlag', func_get_args(), $pluginInfo) : parent::hasFlag($flag);
    }
}
