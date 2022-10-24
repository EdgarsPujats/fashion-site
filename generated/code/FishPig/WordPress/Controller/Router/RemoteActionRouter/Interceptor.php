<?php
namespace FishPig\WordPress\Controller\Router\RemoteActionRouter;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router\RemoteActionRouter
 */
class Interceptor extends \FishPig\WordPress\Controller\Router\RemoteActionRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\App\RemoteActions $remoteActions)
    {
        $this->___init();
        parent::__construct($remoteActions);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
