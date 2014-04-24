<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/2f2299d')) {
            // _assetic_2f2299d
            if ($pathinfo === '/css/2f2299d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2f2299d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2f2299d',);
            }

            if (0 === strpos($pathinfo, '/css/2f2299d_')) {
                // _assetic_2f2299d_0
                if ($pathinfo === '/css/2f2299d_normalize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f2299d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2f2299d_0',);
                }

                // _assetic_2f2299d_1
                if ($pathinfo === '/css/2f2299d_demo_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f2299d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2f2299d_1',);
                }

                // _assetic_2f2299d_2
                if ($pathinfo === '/css/2f2299d_component_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f2299d',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2f2299d_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/264d38f')) {
                // _assetic_264d38f
                if ($pathinfo === '/js/264d38f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '264d38f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_264d38f',);
                }

                if (0 === strpos($pathinfo, '/js/264d38f_')) {
                    // _assetic_264d38f_0
                    if ($pathinfo === '/js/264d38f_modernizr.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '264d38f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_264d38f_0',);
                    }

                    // _assetic_264d38f_1
                    if ($pathinfo === '/js/264d38f_classie_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '264d38f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_264d38f_1',);
                    }

                    // _assetic_264d38f_2
                    if ($pathinfo === '/js/264d38f_photostack_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '264d38f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_264d38f_2',);
                    }

                    // _assetic_264d38f_3
                    if ($pathinfo === '/js/264d38f_maps_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '264d38f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_264d38f_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/47493b0')) {
                // _assetic_47493b0
                if ($pathinfo === '/js/47493b0.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '47493b0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_47493b0',);
                }

                if (0 === strpos($pathinfo, '/js/47493b0_')) {
                    // _assetic_47493b0_0
                    if ($pathinfo === '/js/47493b0_main_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '47493b0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_47493b0_0',);
                    }

                    // _assetic_47493b0_1
                    if ($pathinfo === '/js/47493b0_bootstrap_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '47493b0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_47493b0_1',);
                    }

                    // _assetic_47493b0_2
                    if ($pathinfo === '/js/47493b0_script_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '47493b0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_47493b0_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/ed2d014')) {
            // _assetic_ed2d014
            if ($pathinfo === '/css/ed2d014.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed2d014',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ed2d014',);
            }

            // _assetic_ed2d014_0
            if ($pathinfo === '/css/ed2d014_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed2d014',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ed2d014_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // home_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_page');
            }

            return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_page',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
            }
            not_event:

            // event_create
            if ($pathinfo === '/event/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_create;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
            }
            not_event_create:

            // event_new
            if ($pathinfo === '/event/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_new;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
            }
            not_event_new:

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::showAction',));
            }
            not_event_show:

            // event_refresh
            if (preg_match('#^/event/(?P<id>[^/]++)/refresh$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_refresh;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_refresh')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::refreshAction',));
            }
            not_event_refresh:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::editAction',));
            }
            not_event_edit:

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_event_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::updateAction',));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\EventController::deleteAction',));
            }
            not_event_delete:

        }

        if (0 === strpos($pathinfo, '/pic')) {
            // pic
            if (rtrim($pathinfo, '/') === '/pic') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pic;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pic');
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::indexAction',  '_route' => 'pic',);
            }
            not_pic:

            // pic_create
            if ($pathinfo === '/pic/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pic_create;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::createAction',  '_route' => 'pic_create',);
            }
            not_pic_create:

            // pic_new
            if ($pathinfo === '/pic/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pic_new;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::newAction',  '_route' => 'pic_new',);
            }
            not_pic_new:

            // pic_show
            if (preg_match('#^/pic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pic_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pic_show')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::showAction',));
            }
            not_pic_show:

            // pic_instagram_update
            if (preg_match('#^/pic/(?P<id>[^/]++)/instagram\\-update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pic_instagram_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pic_instagram_update')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::instagramUpdateAction',));
            }
            not_pic_instagram_update:

            // pic_edit
            if (preg_match('#^/pic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pic_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pic_edit')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::editAction',));
            }
            not_pic_edit:

            // pic_update
            if (preg_match('#^/pic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_pic_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pic_update')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::updateAction',));
            }
            not_pic_update:

            // pic_delete
            if (preg_match('#^/pic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pic_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pic_delete')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\PicController::deleteAction',));
            }
            not_pic_delete:

        }

        if (0 === strpos($pathinfo, '/queue')) {
            // queue
            if (rtrim($pathinfo, '/') === '/queue') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_queue;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'queue');
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::indexAction',  '_route' => 'queue',);
            }
            not_queue:

            // queue_create
            if ($pathinfo === '/queue/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_queue_create;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::createAction',  '_route' => 'queue_create',);
            }
            not_queue_create:

            // queue_new
            if ($pathinfo === '/queue/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_queue_new;
                }

                return array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::newAction',  '_route' => 'queue_new',);
            }
            not_queue_new:

            // queue_show
            if (preg_match('#^/queue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_queue_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'queue_show')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::showAction',));
            }
            not_queue_show:

            // queue_edit
            if (preg_match('#^/queue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_queue_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'queue_edit')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::editAction',));
            }
            not_queue_edit:

            // queue_update
            if (preg_match('#^/queue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_queue_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'queue_update')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::updateAction',));
            }
            not_queue_update:

            // queue_delete
            if (preg_match('#^/queue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_queue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'queue_delete')), array (  '_controller' => 'DC3\\InstawallBundle\\Controller\\QueueController::deleteAction',));
            }
            not_queue_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
