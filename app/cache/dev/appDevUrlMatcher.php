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

        // alex_pizza_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'alex_pizza_homepage');
            }

            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::indexAction',  '_route' => 'alex_pizza_homepage',);
        }

        // alex_pizza_shop
        if ($pathinfo === '/shop') {
            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::shopAction',  '_route' => 'alex_pizza_shop',);
        }

        // alex_pizza_map
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::mapAction',  '_route' => 'alex_pizza_map',);
        }

        if (0 === strpos($pathinfo, '/extras')) {
            // extras
            if (rtrim($pathinfo, '/') === '/extras') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extras');
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::indexAction',  '_route' => 'extras',);
            }

            // extras_show
            if (preg_match('#^/extras/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::showAction',));
            }

            // extras_new
            if ($pathinfo === '/extras/new') {
                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::newAction',  '_route' => 'extras_new',);
            }

            // extras_create
            if ($pathinfo === '/extras/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_extras_create;
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::createAction',  '_route' => 'extras_create',);
            }
            not_extras_create:

            // extras_edit
            if (preg_match('#^/extras/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::editAction',));
            }

            // extras_update
            if (preg_match('#^/extras/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_extras_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::updateAction',));
            }
            not_extras_update:

            // extras_delete
            if (preg_match('#^/extras/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_extras_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasController::deleteAction',));
            }
            not_extras_delete:

        }

        if (0 === strpos($pathinfo, '/kosten')) {
            // kosten
            if (rtrim($pathinfo, '/') === '/kosten') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'kosten');
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::indexAction',  '_route' => 'kosten',);
            }

            // kosten_show
            if (preg_match('#^/kosten/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kosten_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::showAction',));
            }

            // kosten_new
            if ($pathinfo === '/kosten/new') {
                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::newAction',  '_route' => 'kosten_new',);
            }

            // kosten_create
            if ($pathinfo === '/kosten/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_kosten_create;
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::createAction',  '_route' => 'kosten_create',);
            }
            not_kosten_create:

            // kosten_edit
            if (preg_match('#^/kosten/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kosten_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::editAction',));
            }

            // kosten_update
            if (preg_match('#^/kosten/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_kosten_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kosten_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::updateAction',));
            }
            not_kosten_update:

            // kosten_delete
            if (preg_match('#^/kosten/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_kosten_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kosten_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenController::deleteAction',));
            }
            not_kosten_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pizza')) {
                // pizza
                if (rtrim($pathinfo, '/') === '/pizza') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pizza');
                    }

                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::indexAction',  '_route' => 'pizza',);
                }

                // pizza_show
                if (preg_match('#^/pizza/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::showAction',));
                }

                // pizza_new
                if ($pathinfo === '/pizza/new') {
                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::newAction',  '_route' => 'pizza_new',);
                }

                // pizza_create
                if ($pathinfo === '/pizza/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pizza_create;
                    }

                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::createAction',  '_route' => 'pizza_create',);
                }
                not_pizza_create:

                // pizza_edit
                if (preg_match('#^/pizza/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::editAction',));
                }

                // pizza_update
                if (preg_match('#^/pizza/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pizza_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::updateAction',));
                }
                not_pizza_update:

                // pizza_delete
                if (preg_match('#^/pizza/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pizza_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaController::deleteAction',));
                }
                not_pizza_delete:

            }

            if (0 === strpos($pathinfo, '/postnr')) {
                // postnr
                if (rtrim($pathinfo, '/') === '/postnr') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'postnr');
                    }

                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::indexAction',  '_route' => 'postnr',);
                }

                // postnr_show
                if (preg_match('#^/postnr/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postnr_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::showAction',));
                }

                // postnr_new
                if ($pathinfo === '/postnr/new') {
                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::newAction',  '_route' => 'postnr_new',);
                }

                // postnr_create
                if ($pathinfo === '/postnr/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_postnr_create;
                    }

                    return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::createAction',  '_route' => 'postnr_create',);
                }
                not_postnr_create:

                // postnr_edit
                if (preg_match('#^/postnr/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postnr_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::editAction',));
                }

                // postnr_update
                if (preg_match('#^/postnr/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_postnr_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postnr_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::updateAction',));
                }
                not_postnr_update:

                // postnr_delete
                if (preg_match('#^/postnr/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_postnr_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postnr_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrController::deleteAction',));
                }
                not_postnr_delete:

            }

        }

        if (0 === strpos($pathinfo, '/size')) {
            // size
            if (rtrim($pathinfo, '/') === '/size') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'size');
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::indexAction',  '_route' => 'size',);
            }

            // size_show
            if (preg_match('#^/size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::showAction',));
            }

            // size_new
            if ($pathinfo === '/size/new') {
                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::newAction',  '_route' => 'size_new',);
            }

            // size_create
            if ($pathinfo === '/size/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_size_create;
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::createAction',  '_route' => 'size_create',);
            }
            not_size_create:

            // size_edit
            if (preg_match('#^/size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::editAction',));
            }

            // size_update
            if (preg_match('#^/size/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_size_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::updateAction',));
            }
            not_size_update:

            // size_delete
            if (preg_match('#^/size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_size_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeController::deleteAction',));
            }
            not_size_delete:

        }

        if (0 === strpos($pathinfo, '/type')) {
            // type
            if (rtrim($pathinfo, '/') === '/type') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'type');
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::indexAction',  '_route' => 'type',);
            }

            // type_show
            if (preg_match('#^/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::showAction',));
            }

            // type_new
            if ($pathinfo === '/type/new') {
                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::newAction',  '_route' => 'type_new',);
            }

            // type_create
            if ($pathinfo === '/type/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_type_create;
                }

                return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::createAction',  '_route' => 'type_create',);
            }
            not_type_create:

            // type_edit
            if (preg_match('#^/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::editAction',));
            }

            // type_update
            if (preg_match('#^/type/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_type_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_update')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::updateAction',));
            }
            not_type_update:

            // type_delete
            if (preg_match('#^/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_type_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeController::deleteAction',));
            }
            not_type_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/alex/pizza')) {
                if (0 === strpos($pathinfo, '/admin/alex/pizza/extras')) {
                    // admin_alex_pizza_extras_list
                    if ($pathinfo === '/admin/alex/pizza/extras/list') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_list',  '_route' => 'admin_alex_pizza_extras_list',);
                    }

                    // admin_alex_pizza_extras_create
                    if ($pathinfo === '/admin/alex/pizza/extras/create') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_create',  '_route' => 'admin_alex_pizza_extras_create',);
                    }

                    // admin_alex_pizza_extras_batch
                    if ($pathinfo === '/admin/alex/pizza/extras/batch') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_batch',  '_route' => 'admin_alex_pizza_extras_batch',);
                    }

                    // admin_alex_pizza_extras_edit
                    if (preg_match('#^/admin/alex/pizza/extras/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_extras_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_edit',));
                    }

                    // admin_alex_pizza_extras_delete
                    if (preg_match('#^/admin/alex/pizza/extras/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_extras_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_delete',));
                    }

                    // admin_alex_pizza_extras_show
                    if (preg_match('#^/admin/alex/pizza/extras/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_extras_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_show',));
                    }

                    // admin_alex_pizza_extras_export
                    if ($pathinfo === '/admin/alex/pizza/extras/export') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\ExtrasAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.extras',  '_sonata_name' => 'admin_alex_pizza_extras_export',  '_route' => 'admin_alex_pizza_extras_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/pizza/kosten')) {
                    // admin_alex_pizza_kosten_list
                    if ($pathinfo === '/admin/alex/pizza/kosten/list') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_list',  '_route' => 'admin_alex_pizza_kosten_list',);
                    }

                    // admin_alex_pizza_kosten_create
                    if ($pathinfo === '/admin/alex/pizza/kosten/create') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_create',  '_route' => 'admin_alex_pizza_kosten_create',);
                    }

                    // admin_alex_pizza_kosten_batch
                    if ($pathinfo === '/admin/alex/pizza/kosten/batch') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_batch',  '_route' => 'admin_alex_pizza_kosten_batch',);
                    }

                    // admin_alex_pizza_kosten_edit
                    if (preg_match('#^/admin/alex/pizza/kosten/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_kosten_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_edit',));
                    }

                    // admin_alex_pizza_kosten_delete
                    if (preg_match('#^/admin/alex/pizza/kosten/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_kosten_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_delete',));
                    }

                    // admin_alex_pizza_kosten_show
                    if (preg_match('#^/admin/alex/pizza/kosten/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_kosten_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_show',));
                    }

                    // admin_alex_pizza_kosten_export
                    if ($pathinfo === '/admin/alex/pizza/kosten/export') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\KostenAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.kosten',  '_sonata_name' => 'admin_alex_pizza_kosten_export',  '_route' => 'admin_alex_pizza_kosten_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/pizza/p')) {
                    if (0 === strpos($pathinfo, '/admin/alex/pizza/pizza')) {
                        // admin_alex_pizza_pizza_list
                        if ($pathinfo === '/admin/alex/pizza/pizza/list') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_list',  '_route' => 'admin_alex_pizza_pizza_list',);
                        }

                        // admin_alex_pizza_pizza_create
                        if ($pathinfo === '/admin/alex/pizza/pizza/create') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_create',  '_route' => 'admin_alex_pizza_pizza_create',);
                        }

                        // admin_alex_pizza_pizza_batch
                        if ($pathinfo === '/admin/alex/pizza/pizza/batch') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_batch',  '_route' => 'admin_alex_pizza_pizza_batch',);
                        }

                        // admin_alex_pizza_pizza_edit
                        if (preg_match('#^/admin/alex/pizza/pizza/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_pizza_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_edit',));
                        }

                        // admin_alex_pizza_pizza_delete
                        if (preg_match('#^/admin/alex/pizza/pizza/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_pizza_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_delete',));
                        }

                        // admin_alex_pizza_pizza_show
                        if (preg_match('#^/admin/alex/pizza/pizza/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_pizza_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_show',));
                        }

                        // admin_alex_pizza_pizza_export
                        if ($pathinfo === '/admin/alex/pizza/pizza/export') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PizzaAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.pizza',  '_sonata_name' => 'admin_alex_pizza_pizza_export',  '_route' => 'admin_alex_pizza_pizza_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/alex/pizza/postnr')) {
                        // admin_alex_pizza_postnr_list
                        if ($pathinfo === '/admin/alex/pizza/postnr/list') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_list',  '_route' => 'admin_alex_pizza_postnr_list',);
                        }

                        // admin_alex_pizza_postnr_create
                        if ($pathinfo === '/admin/alex/pizza/postnr/create') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_create',  '_route' => 'admin_alex_pizza_postnr_create',);
                        }

                        // admin_alex_pizza_postnr_batch
                        if ($pathinfo === '/admin/alex/pizza/postnr/batch') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_batch',  '_route' => 'admin_alex_pizza_postnr_batch',);
                        }

                        // admin_alex_pizza_postnr_edit
                        if (preg_match('#^/admin/alex/pizza/postnr/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_postnr_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_edit',));
                        }

                        // admin_alex_pizza_postnr_delete
                        if (preg_match('#^/admin/alex/pizza/postnr/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_postnr_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_delete',));
                        }

                        // admin_alex_pizza_postnr_show
                        if (preg_match('#^/admin/alex/pizza/postnr/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_postnr_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_show',));
                        }

                        // admin_alex_pizza_postnr_export
                        if ($pathinfo === '/admin/alex/pizza/postnr/export') {
                            return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\PostnrAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.postnr',  '_sonata_name' => 'admin_alex_pizza_postnr_export',  '_route' => 'admin_alex_pizza_postnr_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/pizza/size')) {
                    // admin_alex_pizza_size_list
                    if ($pathinfo === '/admin/alex/pizza/size/list') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_list',  '_route' => 'admin_alex_pizza_size_list',);
                    }

                    // admin_alex_pizza_size_create
                    if ($pathinfo === '/admin/alex/pizza/size/create') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_create',  '_route' => 'admin_alex_pizza_size_create',);
                    }

                    // admin_alex_pizza_size_batch
                    if ($pathinfo === '/admin/alex/pizza/size/batch') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_batch',  '_route' => 'admin_alex_pizza_size_batch',);
                    }

                    // admin_alex_pizza_size_edit
                    if (preg_match('#^/admin/alex/pizza/size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_size_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_edit',));
                    }

                    // admin_alex_pizza_size_delete
                    if (preg_match('#^/admin/alex/pizza/size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_size_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_delete',));
                    }

                    // admin_alex_pizza_size_show
                    if (preg_match('#^/admin/alex/pizza/size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_size_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_show',));
                    }

                    // admin_alex_pizza_size_export
                    if ($pathinfo === '/admin/alex/pizza/size/export') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\SizeAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.size',  '_sonata_name' => 'admin_alex_pizza_size_export',  '_route' => 'admin_alex_pizza_size_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/pizza/type')) {
                    // admin_alex_pizza_type_list
                    if ($pathinfo === '/admin/alex/pizza/type/list') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_list',  '_route' => 'admin_alex_pizza_type_list',);
                    }

                    // admin_alex_pizza_type_create
                    if ($pathinfo === '/admin/alex/pizza/type/create') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_create',  '_route' => 'admin_alex_pizza_type_create',);
                    }

                    // admin_alex_pizza_type_batch
                    if ($pathinfo === '/admin/alex/pizza/type/batch') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_batch',  '_route' => 'admin_alex_pizza_type_batch',);
                    }

                    // admin_alex_pizza_type_edit
                    if (preg_match('#^/admin/alex/pizza/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_type_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_edit',));
                    }

                    // admin_alex_pizza_type_delete
                    if (preg_match('#^/admin/alex/pizza/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_type_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_delete',));
                    }

                    // admin_alex_pizza_type_show
                    if (preg_match('#^/admin/alex/pizza/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_type_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_show',));
                    }

                    // admin_alex_pizza_type_export
                    if ($pathinfo === '/admin/alex/pizza/type/export') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\TypeAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.type',  '_sonata_name' => 'admin_alex_pizza_type_export',  '_route' => 'admin_alex_pizza_type_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/pizza/user')) {
                    // admin_alex_pizza_user_list
                    if ($pathinfo === '/admin/alex/pizza/user/list') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_list',  '_route' => 'admin_alex_pizza_user_list',);
                    }

                    // admin_alex_pizza_user_create
                    if ($pathinfo === '/admin/alex/pizza/user/create') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_create',  '_route' => 'admin_alex_pizza_user_create',);
                    }

                    // admin_alex_pizza_user_batch
                    if ($pathinfo === '/admin/alex/pizza/user/batch') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_batch',  '_route' => 'admin_alex_pizza_user_batch',);
                    }

                    // admin_alex_pizza_user_edit
                    if (preg_match('#^/admin/alex/pizza/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_user_edit')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_edit',));
                    }

                    // admin_alex_pizza_user_delete
                    if (preg_match('#^/admin/alex/pizza/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_user_delete')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_delete',));
                    }

                    // admin_alex_pizza_user_show
                    if (preg_match('#^/admin/alex/pizza/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_pizza_user_show')), array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_show',));
                    }

                    // admin_alex_pizza_user_export
                    if ($pathinfo === '/admin/alex/pizza/user/export') {
                        return array (  '_controller' => 'Alex\\PizzaBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'alex.pizza.admin.user',  '_sonata_name' => 'admin_alex_pizza_user_export',  '_route' => 'admin_alex_pizza_user_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
