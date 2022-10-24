<?php
namespace FishPig\WordPress\Controller\Router;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router
 */
class Interceptor extends \FishPig\WordPress\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\App\Integration\Tests $integrationTests, \FishPig\WordPress\Controller\Router\UrlHelper $routerUrlHelper, array $routerPool = [])
    {
        $this->___init();
        parent::__construct($integrationTests, $routerUrlHelper, $routerPool);
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
