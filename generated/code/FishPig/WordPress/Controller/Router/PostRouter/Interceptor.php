<?php
namespace FishPig\WordPress\Controller\Router\PostRouter;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router\PostRouter
 */
class Interceptor extends \FishPig\WordPress\Controller\Router\PostRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\Controller\Router\RequestDispatcher $requestDispatcher, \FishPig\WordPress\Controller\Router\UrlHelper $routerUrlHelper, \FishPig\WordPress\Model\ResourceModel\Post\Permalink $permalinkResource, \FishPig\WordPress\Helper\FrontPage $frontPage)
    {
        $this->___init();
        parent::__construct($requestDispatcher, $routerUrlHelper, $permalinkResource, $frontPage);
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
