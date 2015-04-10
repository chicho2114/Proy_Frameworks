<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a574708935a584a524652a6a09e0461dd63d825c3d8327a92926a94bb0a54fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
