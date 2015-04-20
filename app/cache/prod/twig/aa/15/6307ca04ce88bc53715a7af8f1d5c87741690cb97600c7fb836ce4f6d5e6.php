<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_aa156307ca04ce88bc53715a7af8f1d5c87741690cb97600c7fb836ce4f6d5e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 21
        $context["acl"] = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig");
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
    }

    // line 24
    public function block_form_acl_roles($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : null), (isset($context["permissions"]) ? $context["permissions"] : null), "td_role", (isset($context["admin"]) ? $context["admin"] : null), (isset($context["admin_pool"]) ? $context["admin_pool"] : null), (isset($context["object"]) ? $context["object"] : null));
        echo "
    ";
    }

    // line 27
    public function block_form_acl_users($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : null), (isset($context["permissions"]) ? $context["permissions"] : null), "td_username", (isset($context["admin"]) ? $context["admin"] : null), (isset($context["admin_pool"]) ? $context["admin_pool"] : null), (isset($context["object"]) ? $context["object"] : null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  76 => 27,  69 => 25,  66 => 24,  61 => 27,  58 => 24,  55 => 23,  49 => 18,  45 => 17,  41 => 16,  36 => 15,  33 => 14,  29 => 12,  27 => 21,  21 => 12,);
    }
}
