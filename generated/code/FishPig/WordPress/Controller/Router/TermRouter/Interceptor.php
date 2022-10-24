<?php
namespace FishPig\WordPress\Controller\Router\TermRouter;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router\TermRouter
 */
class Interceptor extends \FishPig\WordPress\Controller\Router\TermRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\Controller\Router\RequestDispatcher $requestDispatcher, \FishPig\WordPress\Controller\Router\UrlHelper $routerUrlHelper, \FishPig\WordPress\Model\TaxonomyRepository $taxonomyRepository, \FishPig\WordPress\App\Url $url)
    {
        $this->___init();
        parent::__construct($requestDispatcher, $routerUrlHelper, $taxonomyRepository, $url);
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
