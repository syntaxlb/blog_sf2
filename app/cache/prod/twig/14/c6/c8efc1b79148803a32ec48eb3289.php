<?php

/* ::layout.html.twig */
class __TwigTemplate_14c6c8efc1b79148803a32ec48eb3289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
                                ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                                    Connecté en tant que ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
                                ";
        } else {
            // line 21
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a> - 
                                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\">S'enregistrer</a>
                                ";
        }
        // line 24
        echo "\t\t\t\t<h1>Mon Projet Symfony2</h1>
\t\t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
\t\t\t\t\tLire le tutoriel &raquo;
\t\t\t\t</a></p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_accueil"), "html", null, true);
        echo "\">Accueil du blog</a></li>
                                                ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 37
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_ajouter"), "html", null, true);
            echo "\">Ajouter un articlce</a></li>
                                                ";
        }
        // line 39
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
\t\t\t\t<p>The footer.</p>
\t\t\t</div>
\t\t</div>
\t</body>

\t";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Syntax";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "\t\t\t\t\t";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "\t\t";
        // line 57
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
