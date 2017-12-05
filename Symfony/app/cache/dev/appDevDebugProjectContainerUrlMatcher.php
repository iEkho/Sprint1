<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/administration')) {
            // hopital_administration_homepage
            if ('/administration/accueil' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hopital_administration_homepage',);
            }

            // hopital_administration_viewPatient
            if ('/administration/patient' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::patientAction',  '_route' => 'hopital_administration_viewPatient',);
            }

            // hopital_administration_newpatient
            if ('/administration/newpatient' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newpatientAction',  '_route' => 'hopital_administration_newpatient',);
            }

            // hopital_administration_modifPatient
            if ('/administration/modifPatient' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifPatientAction',  '_route' => 'hopital_administration_modifPatient',);
            }

            // hopital_administration_newsejour
            if ('/administration/newsejour' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newsejourAction',  '_route' => 'hopital_administration_newsejour',);
            }

            // hopital_administration_viewsejour
            if ('/administration/viewsejour' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::viewsejourAction',  '_route' => 'hopital_administration_viewsejour',);
            }

            // hopital_administration_modifSejour
            if ('/administration/modifSejour' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifSejourAction',  '_route' => 'hopital_administration_modifSejour',);
            }

            if (0 === strpos($pathinfo, '/administration/s')) {
                if (0 === strpos($pathinfo, '/administration/supp')) {
                    // hopital_administration_suppPatient
                    if ('/administration/suppPatient' === $pathinfo) {
                        return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppPatientAction',  '_route' => 'hopital_administration_suppPatient',);
                    }

                    // hopital_administration_suppSejour
                    if ('/administration/suppSejour' === $pathinfo) {
                        return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppSejourAction',  '_route' => 'hopital_administration_suppSejour',);
                    }

                }

                // hopital_administration_viewService
                if ('/administration/service' === $pathinfo) {
                    return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::serviceAction',  '_route' => 'hopital_administration_viewService',);
                }

            }

            // hopital_administration_modifService
            if ('/administration/modifService' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifServiceAction',  '_route' => 'hopital_administration_modifService',);
            }

            // hopital_administration_suppService
            if ('/administration/suppService' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppServiceAction',  '_route' => 'hopital_administration_suppService',);
            }

            if (0 === strpos($pathinfo, '/administration/new')) {
                // hopital_administration_newservice
                if ('/administration/newservice' === $pathinfo) {
                    return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newserviceAction',  '_route' => 'hopital_administration_newservice',);
                }

                // hopital_administration_newChambre
                if ('/administration/newChambre' === $pathinfo) {
                    return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newChambreAction',  '_route' => 'hopital_administration_newChambre',);
                }

            }

            // hopital_administration_viewChambre
            if ('/administration/viewChambre' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::ChambreAction',  '_route' => 'hopital_administration_viewChambre',);
            }

            // hopital_administration_modifChambre
            if ('/administration/modifChambre' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifChambreAction',  '_route' => 'hopital_administration_modifChambre',);
            }

            // hopital_administration_suppChambre
            if ('/administration/suppChambre' === $pathinfo) {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppChambreAction',  '_route' => 'hopital_administration_suppChambre',);
            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
