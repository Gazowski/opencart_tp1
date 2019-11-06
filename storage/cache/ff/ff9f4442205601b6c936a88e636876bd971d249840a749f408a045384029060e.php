<?php

/* default/template/information/nouvelles.twig */
class __TwigTemplate_4043cb49e5bd8782336c77c806dd06ccbd89e8aa8ee3e19b750e4c428db09e7b extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"information-information\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">
  ";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
        ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nouvelles"]) ? $context["nouvelles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nouvelle"]) {
            // line 20
            echo "            <div class=\"carte\">
                <div class=\"carte-top\">
                    ";
            // line 22
            echo $this->getAttribute($context["nouvelle"], "title", array());
            echo "
                </div>
                <div class=\"carte-corps\">
                    <p class=\"carte-texte\">";
            // line 25
            echo $this->getAttribute($context["nouvelle"], "text", array());
            echo "</p>
                    <a href=\"";
            // line 26
            echo $this->getAttribute($context["nouvelle"], "view", array());
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["text_click"]) ? $context["text_click"] : null);
            echo "</a>
                </div>
            </div>
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nouvelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
      ";
        // line 33
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  ";
        // line 35
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
</div>
";
        // line 38
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/information/nouvelles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  117 => 35,  112 => 33,  109 => 32,  95 => 26,  91 => 25,  85 => 22,  81 => 20,  77 => 19,  73 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-information" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*   {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*         {{ content_top }}*/
/*             {% for nouvelle in nouvelles %}*/
/*             <div class="carte">*/
/*                 <div class="carte-top">*/
/*                     {{ nouvelle.title }}*/
/*                 </div>*/
/*                 <div class="carte-corps">*/
/*                     <p class="carte-texte">{{ nouvelle.text }}</p>*/
/*                     <a href="{{ nouvelle.view }}" class="btn btn-primary">{{ text_click }}</a>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             */
/*         {% endfor %}*/
/* */
/*       {{ content_bottom }}*/
/*     </div>*/
/*   {{ column_right }}*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
