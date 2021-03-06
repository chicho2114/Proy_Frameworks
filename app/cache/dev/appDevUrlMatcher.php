<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

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

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/admin/admin')) {
                    if (0 === strpos($pathinfo, '/admin/admin/admin/paciente')) {
                        // admin_admin_admin_paciente_list
                        if ($pathinfo === '/admin/admin/admin/paciente/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_list',  '_route' => 'admin_admin_admin_paciente_list',);
                        }

                        // admin_admin_admin_paciente_create
                        if ($pathinfo === '/admin/admin/admin/paciente/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_create',  '_route' => 'admin_admin_admin_paciente_create',);
                        }

                        // admin_admin_admin_paciente_batch
                        if ($pathinfo === '/admin/admin/admin/paciente/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_batch',  '_route' => 'admin_admin_admin_paciente_batch',);
                        }

                        // admin_admin_admin_paciente_edit
                        if (preg_match('#^/admin/admin/admin/paciente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_paciente_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_edit',));
                        }

                        // admin_admin_admin_paciente_delete
                        if (preg_match('#^/admin/admin/admin/paciente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_paciente_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_delete',));
                        }

                        // admin_admin_admin_paciente_show
                        if (preg_match('#^/admin/admin/admin/paciente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_paciente_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_show',));
                        }

                        // admin_admin_admin_paciente_export
                        if ($pathinfo === '/admin/admin/admin/paciente/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\PacienteAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.paciente',  '_sonata_name' => 'admin_admin_admin_paciente_export',  '_route' => 'admin_admin_admin_paciente_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/telefono')) {
                        // admin_admin_admin_telefono_list
                        if ($pathinfo === '/admin/admin/admin/telefono/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_list',  '_route' => 'admin_admin_admin_telefono_list',);
                        }

                        // admin_admin_admin_telefono_create
                        if ($pathinfo === '/admin/admin/admin/telefono/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_create',  '_route' => 'admin_admin_admin_telefono_create',);
                        }

                        // admin_admin_admin_telefono_batch
                        if ($pathinfo === '/admin/admin/admin/telefono/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_batch',  '_route' => 'admin_admin_admin_telefono_batch',);
                        }

                        // admin_admin_admin_telefono_edit
                        if (preg_match('#^/admin/admin/admin/telefono/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_telefono_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_edit',));
                        }

                        // admin_admin_admin_telefono_delete
                        if (preg_match('#^/admin/admin/admin/telefono/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_telefono_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_delete',));
                        }

                        // admin_admin_admin_telefono_show
                        if (preg_match('#^/admin/admin/admin/telefono/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_telefono_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_show',));
                        }

                        // admin_admin_admin_telefono_export
                        if ($pathinfo === '/admin/admin/admin/telefono/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TelefonoAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.telefono',  '_sonata_name' => 'admin_admin_admin_telefono_export',  '_route' => 'admin_admin_admin_telefono_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/c')) {
                        if (0 === strpos($pathinfo, '/admin/admin/admin/contemergencia')) {
                            // admin_admin_admin_contemergencia_list
                            if ($pathinfo === '/admin/admin/admin/contemergencia/list') {
                                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_list',  '_route' => 'admin_admin_admin_contemergencia_list',);
                            }

                            // admin_admin_admin_contemergencia_create
                            if ($pathinfo === '/admin/admin/admin/contemergencia/create') {
                                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_create',  '_route' => 'admin_admin_admin_contemergencia_create',);
                            }

                            // admin_admin_admin_contemergencia_batch
                            if ($pathinfo === '/admin/admin/admin/contemergencia/batch') {
                                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_batch',  '_route' => 'admin_admin_admin_contemergencia_batch',);
                            }

                            // admin_admin_admin_contemergencia_edit
                            if (preg_match('#^/admin/admin/admin/contemergencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_contemergencia_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_edit',));
                            }

                            // admin_admin_admin_contemergencia_delete
                            if (preg_match('#^/admin/admin/admin/contemergencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_contemergencia_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_delete',));
                            }

                            // admin_admin_admin_contemergencia_show
                            if (preg_match('#^/admin/admin/admin/contemergencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_contemergencia_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_show',));
                            }

                            // admin_admin_admin_contemergencia_export
                            if ($pathinfo === '/admin/admin/admin/contemergencia/export') {
                                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ContEmergenciaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.cont_emergencia',  '_sonata_name' => 'admin_admin_admin_contemergencia_export',  '_route' => 'admin_admin_admin_contemergencia_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/admin/admin/cita')) {
                            // admin_admin_admin_cita_list
                            if ($pathinfo === '/admin/admin/admin/cita/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_list',  '_route' => 'admin_admin_admin_cita_list',);
                            }

                            // admin_admin_admin_cita_create
                            if ($pathinfo === '/admin/admin/admin/cita/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_create',  '_route' => 'admin_admin_admin_cita_create',);
                            }

                            // admin_admin_admin_cita_batch
                            if ($pathinfo === '/admin/admin/admin/cita/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_batch',  '_route' => 'admin_admin_admin_cita_batch',);
                            }

                            // admin_admin_admin_cita_edit
                            if (preg_match('#^/admin/admin/admin/cita/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_cita_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_edit',));
                            }

                            // admin_admin_admin_cita_delete
                            if (preg_match('#^/admin/admin/admin/cita/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_cita_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_delete',));
                            }

                            // admin_admin_admin_cita_show
                            if (preg_match('#^/admin/admin/admin/cita/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_cita_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_show',));
                            }

                            // admin_admin_admin_cita_export
                            if ($pathinfo === '/admin/admin/admin/cita/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin_admin.admin.cita',  '_sonata_name' => 'admin_admin_admin_cita_export',  '_route' => 'admin_admin_admin_cita_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/historia')) {
                        // admin_admin_admin_historia_list
                        if ($pathinfo === '/admin/admin/admin/historia/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_list',  '_route' => 'admin_admin_admin_historia_list',);
                        }

                        // admin_admin_admin_historia_create
                        if ($pathinfo === '/admin/admin/admin/historia/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_create',  '_route' => 'admin_admin_admin_historia_create',);
                        }

                        // admin_admin_admin_historia_batch
                        if ($pathinfo === '/admin/admin/admin/historia/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_batch',  '_route' => 'admin_admin_admin_historia_batch',);
                        }

                        // admin_admin_admin_historia_edit
                        if (preg_match('#^/admin/admin/admin/historia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_historia_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_edit',));
                        }

                        // admin_admin_admin_historia_delete
                        if (preg_match('#^/admin/admin/admin/historia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_historia_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_delete',));
                        }

                        // admin_admin_admin_historia_show
                        if (preg_match('#^/admin/admin/admin/historia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_historia_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_show',));
                        }

                        // admin_admin_admin_historia_export
                        if ($pathinfo === '/admin/admin/admin/historia/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\HistoriaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.historia',  '_sonata_name' => 'admin_admin_admin_historia_export',  '_route' => 'admin_admin_admin_historia_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/alergia')) {
                        // admin_admin_admin_alergia_list
                        if ($pathinfo === '/admin/admin/admin/alergia/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_list',  '_route' => 'admin_admin_admin_alergia_list',);
                        }

                        // admin_admin_admin_alergia_create
                        if ($pathinfo === '/admin/admin/admin/alergia/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_create',  '_route' => 'admin_admin_admin_alergia_create',);
                        }

                        // admin_admin_admin_alergia_batch
                        if ($pathinfo === '/admin/admin/admin/alergia/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_batch',  '_route' => 'admin_admin_admin_alergia_batch',);
                        }

                        // admin_admin_admin_alergia_edit
                        if (preg_match('#^/admin/admin/admin/alergia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_alergia_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_edit',));
                        }

                        // admin_admin_admin_alergia_delete
                        if (preg_match('#^/admin/admin/admin/alergia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_alergia_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_delete',));
                        }

                        // admin_admin_admin_alergia_show
                        if (preg_match('#^/admin/admin/admin/alergia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_alergia_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_show',));
                        }

                        // admin_admin_admin_alergia_export
                        if ($pathinfo === '/admin/admin/admin/alergia/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AlergiaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.alergia',  '_sonata_name' => 'admin_admin_admin_alergia_export',  '_route' => 'admin_admin_admin_alergia_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/medicamento')) {
                        // admin_admin_admin_medicamento_list
                        if ($pathinfo === '/admin/admin/admin/medicamento/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_list',  '_route' => 'admin_admin_admin_medicamento_list',);
                        }

                        // admin_admin_admin_medicamento_create
                        if ($pathinfo === '/admin/admin/admin/medicamento/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_create',  '_route' => 'admin_admin_admin_medicamento_create',);
                        }

                        // admin_admin_admin_medicamento_batch
                        if ($pathinfo === '/admin/admin/admin/medicamento/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_batch',  '_route' => 'admin_admin_admin_medicamento_batch',);
                        }

                        // admin_admin_admin_medicamento_edit
                        if (preg_match('#^/admin/admin/admin/medicamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_medicamento_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_edit',));
                        }

                        // admin_admin_admin_medicamento_delete
                        if (preg_match('#^/admin/admin/admin/medicamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_medicamento_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_delete',));
                        }

                        // admin_admin_admin_medicamento_show
                        if (preg_match('#^/admin/admin/admin/medicamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_medicamento_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_show',));
                        }

                        // admin_admin_admin_medicamento_export
                        if ($pathinfo === '/admin/admin/admin/medicamento/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\MedicamentoAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.medicamento',  '_sonata_name' => 'admin_admin_admin_medicamento_export',  '_route' => 'admin_admin_admin_medicamento_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/notacita')) {
                        // admin_admin_admin_notacita_list
                        if ($pathinfo === '/admin/admin/admin/notacita/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_list',  '_route' => 'admin_admin_admin_notacita_list',);
                        }

                        // admin_admin_admin_notacita_create
                        if ($pathinfo === '/admin/admin/admin/notacita/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_create',  '_route' => 'admin_admin_admin_notacita_create',);
                        }

                        // admin_admin_admin_notacita_batch
                        if ($pathinfo === '/admin/admin/admin/notacita/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_batch',  '_route' => 'admin_admin_admin_notacita_batch',);
                        }

                        // admin_admin_admin_notacita_edit
                        if (preg_match('#^/admin/admin/admin/notacita/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_notacita_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_edit',));
                        }

                        // admin_admin_admin_notacita_delete
                        if (preg_match('#^/admin/admin/admin/notacita/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_notacita_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_delete',));
                        }

                        // admin_admin_admin_notacita_show
                        if (preg_match('#^/admin/admin/admin/notacita/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_notacita_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_show',));
                        }

                        // admin_admin_admin_notacita_export
                        if ($pathinfo === '/admin/admin/admin/notacita/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\NotaCitaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.nota_cita',  '_sonata_name' => 'admin_admin_admin_notacita_export',  '_route' => 'admin_admin_admin_notacita_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/visita')) {
                        // admin_admin_admin_visita_list
                        if ($pathinfo === '/admin/admin/admin/visita/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_list',  '_route' => 'admin_admin_admin_visita_list',);
                        }

                        // admin_admin_admin_visita_create
                        if ($pathinfo === '/admin/admin/admin/visita/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_create',  '_route' => 'admin_admin_admin_visita_create',);
                        }

                        // admin_admin_admin_visita_batch
                        if ($pathinfo === '/admin/admin/admin/visita/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_batch',  '_route' => 'admin_admin_admin_visita_batch',);
                        }

                        // admin_admin_admin_visita_edit
                        if (preg_match('#^/admin/admin/admin/visita/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_visita_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_edit',));
                        }

                        // admin_admin_admin_visita_delete
                        if (preg_match('#^/admin/admin/admin/visita/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_visita_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_delete',));
                        }

                        // admin_admin_admin_visita_show
                        if (preg_match('#^/admin/admin/admin/visita/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_visita_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_show',));
                        }

                        // admin_admin_admin_visita_export
                        if ($pathinfo === '/admin/admin/admin/visita/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VisitaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.visita',  '_sonata_name' => 'admin_admin_admin_visita_export',  '_route' => 'admin_admin_admin_visita_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/receta')) {
                        // admin_admin_admin_receta_list
                        if ($pathinfo === '/admin/admin/admin/receta/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_list',  '_route' => 'admin_admin_admin_receta_list',);
                        }

                        // admin_admin_admin_receta_create
                        if ($pathinfo === '/admin/admin/admin/receta/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_create',  '_route' => 'admin_admin_admin_receta_create',);
                        }

                        // admin_admin_admin_receta_batch
                        if ($pathinfo === '/admin/admin/admin/receta/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_batch',  '_route' => 'admin_admin_admin_receta_batch',);
                        }

                        // admin_admin_admin_receta_edit
                        if (preg_match('#^/admin/admin/admin/receta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_receta_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_edit',));
                        }

                        // admin_admin_admin_receta_delete
                        if (preg_match('#^/admin/admin/admin/receta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_receta_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_delete',));
                        }

                        // admin_admin_admin_receta_show
                        if (preg_match('#^/admin/admin/admin/receta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_receta_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_show',));
                        }

                        // admin_admin_admin_receta_export
                        if ($pathinfo === '/admin/admin/admin/receta/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RecetaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.receta',  '_sonata_name' => 'admin_admin_admin_receta_export',  '_route' => 'admin_admin_admin_receta_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/diagnostico')) {
                        // admin_admin_admin_diagnostico_list
                        if ($pathinfo === '/admin/admin/admin/diagnostico/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_list',  '_route' => 'admin_admin_admin_diagnostico_list',);
                        }

                        // admin_admin_admin_diagnostico_create
                        if ($pathinfo === '/admin/admin/admin/diagnostico/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_create',  '_route' => 'admin_admin_admin_diagnostico_create',);
                        }

                        // admin_admin_admin_diagnostico_batch
                        if ($pathinfo === '/admin/admin/admin/diagnostico/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_batch',  '_route' => 'admin_admin_admin_diagnostico_batch',);
                        }

                        // admin_admin_admin_diagnostico_edit
                        if (preg_match('#^/admin/admin/admin/diagnostico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_diagnostico_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_edit',));
                        }

                        // admin_admin_admin_diagnostico_delete
                        if (preg_match('#^/admin/admin/admin/diagnostico/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_diagnostico_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_delete',));
                        }

                        // admin_admin_admin_diagnostico_show
                        if (preg_match('#^/admin/admin/admin/diagnostico/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_diagnostico_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_show',));
                        }

                        // admin_admin_admin_diagnostico_export
                        if ($pathinfo === '/admin/admin/admin/diagnostico/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DiagnosticoAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.diagnostico',  '_sonata_name' => 'admin_admin_admin_diagnostico_export',  '_route' => 'admin_admin_admin_diagnostico_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/admin/referencia')) {
                        // admin_admin_admin_referencia_list
                        if ($pathinfo === '/admin/admin/admin/referencia/list') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::listAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_list',  '_route' => 'admin_admin_admin_referencia_list',);
                        }

                        // admin_admin_admin_referencia_create
                        if ($pathinfo === '/admin/admin/admin/referencia/create') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::createAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_create',  '_route' => 'admin_admin_admin_referencia_create',);
                        }

                        // admin_admin_admin_referencia_batch
                        if ($pathinfo === '/admin/admin/admin/referencia/batch') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::batchAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_batch',  '_route' => 'admin_admin_admin_referencia_batch',);
                        }

                        // admin_admin_admin_referencia_edit
                        if (preg_match('#^/admin/admin/admin/referencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_referencia_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::editAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_edit',));
                        }

                        // admin_admin_admin_referencia_delete
                        if (preg_match('#^/admin/admin/admin/referencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_referencia_delete')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::deleteAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_delete',));
                        }

                        // admin_admin_admin_referencia_show
                        if (preg_match('#^/admin/admin/admin/referencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_referencia_show')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::showAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_show',));
                        }

                        // admin_admin_admin_referencia_export
                        if ($pathinfo === '/admin/admin/admin/referencia/export') {
                            return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ReferenciaAdminController::exportAction',  '_sonata_admin' => 'admin_admin.admin.referencia',  '_sonata_name' => 'admin_admin_admin_referencia_export',  '_route' => 'admin_admin_admin_referencia_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

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

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
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
