<?php

/* profiles/social/themes/socialbase/templates/system/links.html.twig */
class __TwigTemplate_b49843f13ea9046420177d1c86d91a6e521ef4870b7d26feb58a431f298c4380 extends Twig_Template
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
        $tags = array("if" => 35, "for" => 56);
        $filters = array("clean_class" => 57);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 35
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 36
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 37
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array())) {
                    // line 38
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 40
                    echo "<h2";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 43
            if ($this->getAttribute((isset($context["links"]) ? $context["links"] : null), "edit", array())) {
                // line 44
                echo "<div class=\"btn-group pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\">
        <svg class=\"btn-icon icon-gray\">
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                echo ">";
            } elseif ($this->getAttribute(            // line 51
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "inline"), "method")) {
                // line 52
                echo "<ul";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "list-inline"), "method"), "html", null, true));
                echo ">";
            } else {
                // line 54
                echo "<ul";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                echo ">";
            }
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 57
                echo "<li";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => \Drupal\Component\Utility\Html::getClass($context["key"])), "method"), "html", null, true));
                echo ">";
                // line 58
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 59
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                } elseif ($this->getAttribute(                // line 60
$context["item"], "text_attributes", array())) {
                    // line 61
                    echo "<span";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</span>";
                } else {
                    // line 63
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                }
                // line 65
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>";
            // line 68
            if ($this->getAttribute((isset($context["links"]) ? $context["links"] : null), "edit", array())) {
                // line 69
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/system/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 69,  124 => 68,  122 => 67,  116 => 65,  113 => 63,  106 => 61,  104 => 60,  102 => 59,  100 => 58,  96 => 57,  92 => 56,  87 => 54,  82 => 52,  80 => 51,  77 => 50,  69 => 44,  67 => 43,  59 => 40,  49 => 38,  47 => 37,  45 => 36,  43 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a set of links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for the UL containing the list of links.*/
/*  * - links: Links to be output.*/
/*  *   Each link will have the following elements:*/
/*  *   - title: The link text.*/
/*  *   - href: The link URL. If omitted, the 'title' is shown as a plain text*/
/*  *     item in the links list. If 'href' is supplied, the entire link is passed*/
/*  *     to l() as its $options parameter.*/
/*  *   - attributes: (optional) HTML attributes for the anchor, or for the <span>*/
/*  *     tag if no 'href' is supplied.*/
/*  *   - link_key: The link CSS class.*/
/*  * - heading: (optional) A heading to precede the links.*/
/*  *   - text: The heading text.*/
/*  *   - level: The heading level (e.g. 'h2', 'h3').*/
/*  *   - attributes: (optional) A keyed list of attributes for the heading.*/
/*  *   If the heading is a string, it will be used as the text of the heading and*/
/*  *   the level will default to 'h2'.*/
/*  **/
/*  *   Headings should be used on navigation menus and any list of links that*/
/*  *   consistently appears on multiple pages. To make the heading invisible use*/
/*  *   the 'visually-hidden' CSS class. Do not use 'display:none', which*/
/*  *   removes it from screen readers and assistive technology. Headings allow*/
/*  *   screen reader and keyboard only users to navigate to or skip the links.*/
/*  *   See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @see template_preprocess_links()*/
/*  *//* */
/* #}*/
/* {%- if links -%}*/
/*   {%- if heading -%}*/
/*     {%- if heading.level -%}*/
/*       <{{ heading.level }}{{ heading.attributes }}>{{ heading.text }}</{{ heading.level }}>*/
/*     {%- else -%}*/
/*       <h2{{ heading.attributes }}>{{ heading.text }}</h2>*/
/*     {%- endif -%}*/
/*   {%- endif -%}*/
/*   {%- if links.edit -%}*/
/*     <div class="btn-group pull-right">*/
/*       <button type="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="btn btn-icon-toggle dropdown-toggle">*/
/*         <svg class="btn-icon icon-gray">*/
/*           <use xlink:href="#icon-expand_more"></use>*/
/*         </svg>*/
/*       </button>*/
/*       <ul{{ attributes.addClass('dropdown-menu') }}>*/
/*       {%- elseif attributes.hasClass('inline') -%}*/
/*       <ul{{ attributes.addClass('list-inline') }}>*/
/*       {%- else -%}*/
/*       <ul{{ attributes }}>*/
/*     {%- endif -%}*/
/*         {%- for key, item in links -%}*/
/*           <li{{ item.attributes.addClass(key|clean_class) }}>*/
/*             {%- if item.link -%}*/
/*               {{ item.link }}*/
/*             {%- elseif item.text_attributes -%}*/
/*               <span{{ item.text_attributes }}>{{ item.text }}</span>*/
/*             {%- else -%}*/
/*               {{ item.text }}*/
/*             {%- endif -%}*/
/*           </li>*/
/*         {%- endfor -%}*/
/*       </ul>*/
/*   {%- if links.edit -%}*/
/*     </div>*/
/*   {%- endif %}*/
/* {%- endif %}*/
/* */
