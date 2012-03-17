<?php

/* CoreSphereConsoleBundle:Console:layout.html.twig */
class __TwigTemplate_47283ec2e2e1d690f5ac2693733c7b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
\t<script>window.jQuery || document.write('<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.6.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
