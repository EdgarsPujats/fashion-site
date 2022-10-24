<?php
namespace FishPig\WordPress\Controller\Router\SimpleRouter;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router\SimpleRouter
 */
class Interceptor extends \FishPig\WordPress\Controller\Router\SimpleRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\Controller\Router\RequestDispatcher $requestDispatcher, \FishPig\WordPress\Controller\Router\UrlHelper $routerUrlHelper)
    {
        $this->___init();
        parent::__construct($requestDispatcher, $routerUrlHelper);
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
