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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/carousselimage')) {
                // carousselimage
                if (rtrim($pathinfo, '/') === '/admin/carousselimage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'carousselimage');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::indexAction',  '_route' => 'carousselimage',);
                }

                // carousselimage_show
                if (preg_match('#^/admin/carousselimage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousselimage_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::showAction',));
                }

                // carousselimage_new
                if ($pathinfo === '/admin/carousselimage/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::newAction',  '_route' => 'carousselimage_new',);
                }

                // carousselimage_create
                if ($pathinfo === '/admin/carousselimage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_carousselimage_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::createAction',  '_route' => 'carousselimage_create',);
                }
                not_carousselimage_create:

                // carousselimage_edit
                if (preg_match('#^/admin/carousselimage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousselimage_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::editAction',));
                }

                // carousselimage_update
                if (preg_match('#^/admin/carousselimage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_carousselimage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousselimage_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::updateAction',));
                }
                not_carousselimage_update:

                // carousselimage_delete
                if (preg_match('#^/admin/carousselimage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_carousselimage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousselimage_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CarousselImageController::deleteAction',));
                }
                not_carousselimage_delete:

            }

            if (0 === strpos($pathinfo, '/admin/reclamation')) {
                // reclamation
                if (rtrim($pathinfo, '/') === '/admin/reclamation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reclamation');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation',);
                }

                // reclamation_show
                if (preg_match('#^/admin/reclamation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::showAction',));
                }

                // reclamation_new
                if ($pathinfo === '/admin/reclamation/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::newAction',  '_route' => 'reclamation_new',);
                }

                // reclamation_create
                if ($pathinfo === '/admin/reclamation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reclamation_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::createAction',  '_route' => 'reclamation_create',);
                }
                not_reclamation_create:

                // reclamation_edit
                if (preg_match('#^/admin/reclamation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::editAction',));
                }

                // reclamation_update
                if (preg_match('#^/admin/reclamation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_reclamation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::updateAction',));
                }
                not_reclamation_update:

                // reclamation_delete
                if (preg_match('#^/admin/reclamation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_reclamation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ReclamationController::deleteAction',));
                }
                not_reclamation_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tag')) {
                // tag
                if (rtrim($pathinfo, '/') === '/admin/tag') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tag');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
                }

                // tag_show
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::showAction',));
                }

                // tag_new
                if ($pathinfo === '/admin/tag/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
                }

                // tag_create
                if ($pathinfo === '/admin/tag/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tag_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::createAction',  '_route' => 'tag_create',);
                }
                not_tag_create:

                // tag_edit
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::editAction',));
                }

                // tag_update
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tag_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::updateAction',));
                }
                not_tag_update:

                // tag_delete
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tag_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\TagController::deleteAction',));
                }
                not_tag_delete:

            }

            if (0 === strpos($pathinfo, '/admin/subcategory')) {
                // subcategory
                if (rtrim($pathinfo, '/') === '/admin/subcategory') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subcategory');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::indexAction',  '_route' => 'subcategory',);
                }

                // subcategory_show
                if (preg_match('#^/admin/subcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::showAction',));
                }

                // subcategory_new
                if ($pathinfo === '/admin/subcategory/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::newAction',  '_route' => 'subcategory_new',);
                }

                // subcategory_create
                if ($pathinfo === '/admin/subcategory/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_subcategory_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::createAction',  '_route' => 'subcategory_create',);
                }
                not_subcategory_create:

                // subcategory_edit
                if (preg_match('#^/admin/subcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::editAction',));
                }

                // subcategory_update
                if (preg_match('#^/admin/subcategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_subcategory_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::updateAction',));
                }
                not_subcategory_update:

                // subcategory_delete
                if (preg_match('#^/admin/subcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_subcategory_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\SubCategoryController::deleteAction',));
                }
                not_subcategory_delete:

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // product
                if (rtrim($pathinfo, '/') === '/admin/product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'product');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
                }

                // product_show
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::showAction',));
                }

                // product_new
                if ($pathinfo === '/admin/product/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
                }

                // product_create
                if ($pathinfo === '/admin/product/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_product_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
                }
                not_product_create:

                // product_edit
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::editAction',));
                }

                // product_update
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::updateAction',));
                }
                not_product_update:

                // product_delete
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\ProductController::deleteAction',));
                }
                not_product_delete:

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                // category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::showAction',));
                }

                // category_new
                if ($pathinfo === '/admin/category/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }

                // category_create
                if ($pathinfo === '/admin/category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_category_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                }
                not_category_create:

                // category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::editAction',));
                }

                // category_update
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::updateAction',));
                }
                not_category_update:

                // category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/admin/marque')) {
                // marque
                if (rtrim($pathinfo, '/') === '/admin/marque') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'marque');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::indexAction',  '_route' => 'marque',);
                }

                // marque_show
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::showAction',));
                }

                // marque_new
                if ($pathinfo === '/admin/marque/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::newAction',  '_route' => 'marque_new',);
                }

                // marque_create
                if ($pathinfo === '/admin/marque/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_marque_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::createAction',  '_route' => 'marque_create',);
                }
                not_marque_create:

                // marque_edit
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::editAction',));
                }

                // marque_update
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_marque_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::updateAction',));
                }
                not_marque_update:

                // marque_delete
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_marque_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\MarqueController::deleteAction',));
                }
                not_marque_delete:

            }

            if (0 === strpos($pathinfo, '/admin/offer')) {
                // offer
                if (rtrim($pathinfo, '/') === '/admin/offer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'offer');
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::indexAction',  '_route' => 'offer',);
                }

                // offer_show
                if (preg_match('#^/admin/offer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_show')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::showAction',));
                }

                // offer_new
                if ($pathinfo === '/admin/offer/new') {
                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::newAction',  '_route' => 'offer_new',);
                }

                // offer_create
                if ($pathinfo === '/admin/offer/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_offer_create;
                    }

                    return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::createAction',  '_route' => 'offer_create',);
                }
                not_offer_create:

                // offer_edit
                if (preg_match('#^/admin/offer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_edit')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::editAction',));
                }

                // offer_update
                if (preg_match('#^/admin/offer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_offer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_update')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::updateAction',));
                }
                not_offer_update:

                // offer_delete
                if (preg_match('#^/admin/offer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_offer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_delete')), array (  '_controller' => 'Eva\\AdminBundle\\Controller\\OfferController::deleteAction',));
                }
                not_offer_delete:

            }

            // eva_admin_homepage
            if ($pathinfo === '/admin/admin') {
                return array (  '_controller' => 'Eva\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eva_admin_homepage',);
            }

        }

        // eva_client_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eva_client_homepage')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\HomeController::homePageAction',  '_route' => 'homepage',);
        }

        // verify_email_exists
        if (0 === strpos($pathinfo, '/register/email') && preg_match('#^/register/email/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'verify_email_exists')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\UserController::emailExistAction',));
        }

        // add_cart
        if (0 === strpos($pathinfo, '/addcart') && preg_match('#^/addcart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_cart')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\CartController::addAction',));
        }

        // show_cart
        if ($pathinfo === '/showcart') {
            return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\CartController::showAction',  '_route' => 'show_cart',);
        }

        // show_detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_detail')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\ProductController::showDetailAction',));
        }

        // show_wishlist
        if ($pathinfo === '/wishlist') {
            return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\WishListController::showAction',  '_route' => 'show_wishlist',);
        }

        // add_wishlist
        if (0 === strpos($pathinfo, '/addwishlist') && preg_match('#^/addwishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_wishlist')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\WishListController::addAction',));
        }

        // remove_wishlist
        if (0 === strpos($pathinfo, '/removewishlist') && preg_match('#^/removewishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_wishlist')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\WishListController::removeAction',));
        }

        // wishlist_to_cart
        if (0 === strpos($pathinfo, '/wishlistToCart') && preg_match('#^/wishlistToCart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wishlist_to_cart')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\WishListController::moveToCartAction',));
        }

        // remove_cart
        if (0 === strpos($pathinfo, '/removecart') && preg_match('#^/removecart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_cart')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\CartController::removeAction',));
        }

        // update_cart
        if (0 === strpos($pathinfo, '/updateQty') && preg_match('#^/updateQty/(?P<id>[^/]++)/(?P<qte>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_cart')), array (  '_controller' => 'Eva\\ClientBundle\\Controller\\CartController::updateQtyAction',));
        }

        // signIn
        if ($pathinfo === '/signin') {
            return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\UserController::signInAction',  '_route' => 'signIn',);
        }

        // command
        if ($pathinfo === '/command') {
            return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\CommandController::addCommandAction',  '_route' => 'command',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

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

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/regist')) {
            // fos_user_registration_register
            if ($pathinfo === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/registration/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/registration/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/registration/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/registration/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/registration/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Eva\\ClientBundle\\Controller\\UserController::signInAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

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

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
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
