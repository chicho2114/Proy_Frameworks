<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Default controller.
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('sonata_user_admin_security_login'));
        //return $this->render('AdminAdminBundle:Comment:form.html.twig');
    }

    public function redirectAction()
    {
        $url = $this->container->get('router')->generate('sonata_user_admin_security_login');
        //return $this->redirect($this->generateUrl('sonata_user_admin_security_login'));
        //return $this->render('SonataUserBundle:AdminSecurity:login');
        return new RedirectResponse($url);
    }

}