<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/administration')) {
            // hopital_administration_homepage
            if ($pathinfo === '/administration/accueil') {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hopital_administration_homepage',);
            }

            // hopital_administration_viewPatient
            if ($pathinfo === '/administration/patient') {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::patientAction',  '_route' => 'hopital_administration_viewPatient',);
            }

            // hopital_administration_modifPatient
            if ($pathinfo === '/administration/modifPatient') {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifPatientAction',  '_route' => 'hopital_administration_modifPatient',);
            }

            // hopital_administration_sejour
            if ($pathinfo === '/administration/sejour') {
                return array (  '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::sejourAction',  '_route' => 'hopital_administration_sejour',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
