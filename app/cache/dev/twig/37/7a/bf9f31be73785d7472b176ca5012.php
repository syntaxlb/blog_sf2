<?php

/* SyntaxBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_377abf9f31be73785d7472b176ca5012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'blog_body' => array($this, 'block_blog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyntaxBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_blog_body($context, array $blocks = array())
    {
        // line 10
        echo "
\t<h2>Modifier un article</h2>

\t";
        // line 13
        $this->env->loadTemplate("SyntaxBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 14
        echo "
\t<p>
\t\tVous éditez un article déjà existant,
\t\tne le changez pas trop pour éviter
\t\taux membres de ne pas comprendre
\t\tce qu'il se passe.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>

";
    }

    public function getTemplateName()
    {
        return "SyntaxBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
