<?php

/* CoreSphereConsoleBundle:Console:command_list.json.twig */
class __TwigTemplate_862e342c140e46f5f003a0e3e2b7c881 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_jsonencode_filter(twig_get_array_keys_filter($this->getContext($context, "commands")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:command_list.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
