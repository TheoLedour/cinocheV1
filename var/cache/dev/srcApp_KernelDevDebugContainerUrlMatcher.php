<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'app_article_homepage', '_controller' => 'App\\Controller\\ArticleController::homepage'], null, null, null, false, false, null]],
            '/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/news/([^/]++)(*:21)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            21 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['slug'], null, null, false, true, null]],
        ];
    }
}
