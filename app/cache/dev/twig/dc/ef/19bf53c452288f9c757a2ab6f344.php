<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_dcef19bf53c452288f9c757a2ab6f344 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "{
    \"command\" : ";
        // line 3
        echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getContext($context, "input")));
        echo ",
    \"output\" : ";
        // line 4
        echo twig_jsonencode_filter($this->getContext($context, "output"));
        echo ",
    \"environment\": ";
        // line 5
        echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getContext($context, "environment")));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
