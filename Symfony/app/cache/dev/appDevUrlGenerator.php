<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_viewPatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::patientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/patient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_newpatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/newpatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_modifPatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifPatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/modifPatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_newsejour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newsejourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/newsejour',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_viewsejour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::viewsejourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/viewsejour',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_modifSejour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifSejourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/modifSejour',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_suppPatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppPatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/suppPatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_suppSejour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppSejourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/suppSejour',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_viewService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::serviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_modifService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/modifService',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_suppService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/suppService',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_newservice' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newserviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/newservice',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_newChambre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::newChambreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/newChambre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_viewChambre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::ChambreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/viewChambre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_modifChambre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::modifChambreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/modifChambre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hopital_administration_suppChambre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hopital\\AdministrationBundle\\Controller\\DefaultController::suppChambreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/suppChambre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
