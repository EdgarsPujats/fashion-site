<?php
namespace FishPig\WordPress\Controller\Router\PostWithCategoryFallbackRouter;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Router\PostWithCategoryFallbackRouter
 */
class Interceptor extends \FishPig\WordPress\Controller\Router\PostWithCategoryFallbackRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\FishPig\WordPress\Controller\Router\RequestDispatcher $requestDispatcher, \FishPig\WordPress\Controller\Router\UrlHelper $routerUrlHelper, \FishPig\WordPress\Model\PostRepository $postRepository, \FishPig\WordPress\Model\PostTypeRepository $postTypeRepository, \FishPig\WordPress\Model\TaxonomyRepository $taxonomyRepository)
    {
        $this->___init();
        parent::__construct($requestDispatcher, $routerUrlHelper, $postRepository, $postTypeRepository, $taxonomyRepository);
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
