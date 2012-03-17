<?php

/* SyntaxBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_4366810728fad7763d7434dff650d160 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h3>Formulaire d'article</h3>

<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">

";
        // line 8
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

<div>
    ";
        // line 12
        echo "    ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "titre"), "Titre de l'article");
        echo "

    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "titre"));
        echo "

    ";
        // line 18
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "titre"));
        echo "
</div>

";
        // line 22
        echo "<div>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "contenu"), "Contenu de l'article");
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "contenu"));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "contenu"));
        echo "
</div>

<!-- Génération des champs pas encore écrits.
     Dans cet exemple, ça serait « date », « auteur » et « tags »,
     mais aussi le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). -->
";
        // line 32
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "



<!-- Ajout d'un lien pour ajouter un champ tag supplémentaire. -->
<a href=\"#\" id=\"add_tag\">Ajouter un tag</a>

<!-- On charge la librairie jQuery. Ici, je la prends depuis le site jquery.com, mais si vous l'avez en local, changez simplement l'adresse. -->
<script src=\"http://code.jquery.com/jquery-1.6.2.min.js\"></script>

<script type=\"text/javascript\">
\$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('#syntax_blogbundle_articletype_tags');
\t
    // On définit une fonction qui va ajouter un champ.
    function add_tag() {
        // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés).
        index = \$container.children().length;

        // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »,
        // après avoir remplacé la variable \$\$name\$\$ qu'il contient par le numéro du champ.
        \$container.append(
            \$(\$container.attr('data-prototype').replace(/\\\$\\\$name\\\$\\\$/g, index))
        );
    }
\t
    // On ajoute un premier champ directement s'il n'en existe pas déjà un.
    if(\$container.children().length == 0) {
        add_tag();
    }
\t
    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_tag').click(function() {
        add_tag();
        return false;
    });
});
</script>
<br/>
<input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "SyntaxBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
