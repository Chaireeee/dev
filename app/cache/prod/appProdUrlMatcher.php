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

        // generateur_add_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/new/page$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::addnewPageAction',));
        }

        // generateur_add_slide1_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide1/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide1_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype1Controller::addnewslideAction',));
        }

        // generateur_edit_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\SlideController::editslideAction',));
        }

        // generateur_edit1_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide1/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit1_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype1Controller::editslideAction',));
        }

        // generateur_edit2_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide2/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit2_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype2Controller::editslideAction',));
        }

        // generateur_edit3_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide3/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit3_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype3Controller::editslideAction',));
        }

        // generateur_add_slide3_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide3/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide3_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype3Controller::addnewslideAction',));
        }

        // generateur_edit4_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide4/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit4_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype4Controller::editslideAction',));
        }

        // generateur_add_slide4_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide4/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide4_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype4Controller::addnewslideAction',));
        }

        // generateur_edit5_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide5/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit5_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype5Controller::editslideAction',));
        }

        // generateur_add_slide5_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide5/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide5_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype5Controller::addnewslideAction',));
        }

        // generateur_edit6_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide6/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit6_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype6Controller::editslideAction',));
        }

        // generateur_add_slide6_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide6/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide6_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype6Controller::addnewslideAction',));
        }

        // generateur_edit7_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide7/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit7_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype7Controller::editslideAction',));
        }

        // generateur_add_slide7_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide7/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide7_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype7Controller::addnewslideAction',));
        }

        // generateur_edit8_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/slide8/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit8_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype8Controller::editslideAction',));
        }

        // generateur_add_slide8_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide8/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide8_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype8Controller::addnewslideAction',));
        }

        // generateur_edit_photo
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/photo/(?P<idpicture>[^/]++)/(?P<idpage>[^/]++)/(?P<idslide>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit_photo')), array (  '_controller' => 'GenerateurBundle\\Controller\\SlideController::editphotoAction',));
        }

        // generateur_add_slide2_to_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/slide2/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_slide2_to_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype2Controller::addnewslideAction',));
        }

        // generateur_view_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/view/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_view_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::viewPageAction',));
        }

        // generateur_view_slide_test
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/view/slide/test$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_view_slide_test')), array (  '_controller' => 'GenerateurBundle\\Controller\\Stype1Controller::viewslideAction',));
        }

        // generateur_edit_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/edit/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_edit_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::editPageAction',));
        }

        // generateur_choose_slide
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/chooseslide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_choose_slide')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::chooseslideAction',));
        }

        // generateur_delete_slide_from_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/delete/slide/(?P<id>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_delete_slide_from_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\SlideController::deleteslideAction',));
        }

        // generateur_monter_slide_from_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/monter/slide/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_monter_slide_from_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::monterslideAction',));
        }

        // generateur_descendre_slide_from_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/descendre/slide/(?P<idslide>[^/]++)/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_descendre_slide_from_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::baisserslideAction',));
        }

        // generateur_add_page_from_event
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/new/pagefromevent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_page_from_event')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::addnewPagefromeventAction',));
        }

        // generateur_add_page_from_accompagnement
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/add/new/pagefromaccompagnement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_add_page_from_accompagnement')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::addnewPagefromaccompagnementAction',));
        }

        // generateur_modify_info_page
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/modify/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateur_modify_info_page')), array (  '_controller' => 'GenerateurBundle\\Controller\\PageController::modifyPageinfoAction',));
        }

        // chaire_team_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/team$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_team_homepage')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\DefaultController::indexAction',));
        }

        // chaire_team_view
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/team/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_team_view')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\DefaultController::viewAction',));
        }

        // socialnetwork
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_socialnetwork;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'socialnetwork');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::indexAction',));
        }
        not_socialnetwork:

        // socialnetwork_create
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_socialnetwork_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_create')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::createAction',));
        }
        not_socialnetwork_create:

        // socialnetwork_new
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_socialnetwork_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_new')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::newAction',));
        }
        not_socialnetwork_new:

        // socialnetwork_show
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_socialnetwork_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_show')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::showAction',));
        }
        not_socialnetwork_show:

        // socialnetwork_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_socialnetwork_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_edit')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::editAction',));
        }
        not_socialnetwork_edit:

        // socialnetwork_update
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_socialnetwork_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_update')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::updateAction',));
        }
        not_socialnetwork_update:

        // socialnetwork_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/socialnetwork/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_socialnetwork_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialnetwork_delete')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\SocialNetworkController::deleteAction',));
        }
        not_socialnetwork_delete:

        // highlight
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_highlight;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'highlight');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::indexAction',));
        }
        not_highlight:

        // highlight_create
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_highlight_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_create')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::createAction',));
        }
        not_highlight_create:

        // highlight_new
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_highlight_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_new')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::newAction',));
        }
        not_highlight_new:

        // highlight_show
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_highlight_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_show')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::showAction',));
        }
        not_highlight_show:

        // highlight_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_highlight_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_edit')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::editAction',));
        }
        not_highlight_edit:

        // highlight_update
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_highlight_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_update')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::updateAction',));
        }
        not_highlight_update:

        // highlight_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/highlight/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_highlight_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'highlight_delete')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\HighlightController::deleteAction',));
        }
        not_highlight_delete:

        // accompagnement_create
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_accompagnement_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_create')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::createAction',));
        }
        not_accompagnement_create:

        // accompagnement_new
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_accompagnement_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_new')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::newAction',));
        }
        not_accompagnement_new:

        // accompagnement_show
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_accompagnement_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_show')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::showAction',));
        }
        not_accompagnement_show:

        // accompagnement_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_accompagnement_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_edit')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::editAction',));
        }
        not_accompagnement_edit:

        // accompagnement_update
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_accompagnement_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_update')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::updateAction',));
        }
        not_accompagnement_update:

        // accompagnement_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/accompagnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_accompagnement_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement_delete')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\AccompagnementController::deleteAction',));
        }
        not_accompagnement_delete:

        // team
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_team;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'team');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::indexAction',));
        }
        not_team:

        // team_create
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_team_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_create')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::createAction',));
        }
        not_team_create:

        // team_new
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_team_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_new')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::newAction',));
        }
        not_team_new:

        // team_show
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_team_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_show')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::showAction',));
        }
        not_team_show:

        // team_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_team_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_edit')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::editAction',));
        }
        not_team_edit:

        // team_update
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_team_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_update')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::updateAction',));
        }
        not_team_update:

        // team_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/team/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_team_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_delete')), array (  '_controller' => 'Chaire\\TeamBundle\\Controller\\TeamController::deleteAction',));
        }
        not_team_delete:

        // chaire_formation_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/formation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_formation_homepage')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::indexAction',));
        }

        // chaire_formation_id
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/viewformation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_formation_id')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::viewformationAction',));
        }

        // chaire_addphoto
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/addphoto$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_addphoto')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::addphotoAction',));
        }

        // chaire_modify_photo
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/modifyphoto/(?P<id>[^/]++)/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_modify_photo')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::modifyphotoAction',));
        }

        // chaire_modify_photo_event
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/modifyphotofromevent/(?P<id>[^/]++)/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_modify_photo_event')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::modifyphotoeventAction',));
        }

        // chaire_modify_photo_accompagnement
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/modifyphotofromaccompagnement/(?P<id>[^/]++)/(?P<idaccompagnement>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_modify_photo_accompagnement')), array (  '_controller' => 'Chaire\\FormationBundle\\Controller\\DefaultController::modifyphotoaccompagnementAction',));
        }

        // chaire_admin_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chaire_admin_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_homepage')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        // chaire_admin_addEvent
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/addEvent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_addEvent')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::addEventAction',));
        }

        // chaire_admin_viewEvent
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/viewEvent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_viewEvent')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::viewEventAction',));
        }

        // chaire_admin_indexEvent
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/indexEvent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_indexEvent')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::eventIndexAction',));
        }

        // chaire_admin_modifyEvent
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/modifyEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_modifyEvent')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::modifyEventAction',));
        }

        // chaire_admin_deleteEvent
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/deleteEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_deleteEvent')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::deleteEventAction',));
        }

        // chaire_admin_addFrise
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/addFrise$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_addFrise')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\EventController::addFriseAction',));
        }

        // chaire_admin_deleteFormation
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/deleteFormation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_deleteFormation')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\FormationController::deleteFormationAction',));
        }

        // chaire_admin_addFormation
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/addFormation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_addFormation')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\FormationController::addFormationAction',));
        }

        // chaire_admin_viewFormation
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/viewFormation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_viewFormation')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\FormationController::viewFormationAction',));
        }

        // chaire_admin_indexFormation
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/admin/indexFormation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_admin_indexFormation')), array (  '_controller' => 'Chaire\\AdminBundle\\Controller\\FormationController::eventFormationAction',));
        }

        // chaire_event_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/evenement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_event_homepage')), array (  '_controller' => 'Chaire\\EventBundle\\Controller\\DefaultController::evenementAction',));
        }

        // chaire_accueil_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chaire_accueil_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_accueil_homepage')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\DefaultController::accueilAction',));
        }

        // chaire_newsletter
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/newsletter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chaire_newsletter')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\NewsletterController::accueilAction',));
        }

        // add_to_mailjet
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/addtomailjet$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_to_mailjet')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\NewsletterController::addtomailjetAction',));
        }

        // set_langage_en
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/changetoenglish/(?P<path>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_langage_en')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\DefaultController::setlangageenAction',));
        }

        // set_langage_native
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/changetonative/(?P<path>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_langage_native')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\DefaultController::setlangagenativeAction',));
        }

        // accompagnement
        if (preg_match('#^/(?P<_locale>[^/]++)/paris/accompagnement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accompagnement')), array (  '_controller' => 'Chaire\\AccueilBundle\\Controller\\DefaultController::accompagnementAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
