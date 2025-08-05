<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @vani/template-parts/header.html.twig */
class __TwigTemplate_35a71d754918a4e0fe38e28281badb65 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->loadTemplate("@vani/template-parts/header-top-blocks.html.twig", "@vani/template-parts/header.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<header class=\"header\">
  <div class=\"header-cicle header-cicle1\"></div>
  <div class=\"header-cicle header-cicle3\"></div>
  <div class=\"header-cicle header-cicle4\"></div>
  <div class=\"header-cicle header-cicle6\"></div>
  <div class=\"header-cicle header-cicle7\"></div>
  <div class=\"header-cicle header-cicle8\"></div>
  <div class=\"header-cicle header-cicle10\"></div>
  ";
        // line 10
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 11
            yield "  <div class=\"header-cicle header-cicle2\"></div>
  <div class=\"header-cicle header-cicle5\"></div>
  <div class=\"header-cicle header-cicle9\"></div>
  ";
        }
        // line 15
        yield "  <div class=\"container\">
  <div class=\"header-main\">
    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 17)) {
            // line 18
            yield "      <div class=\"site-brand\">
        ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 19), "html", null, true);
            yield "
      </div> <!--/.site-branding -->
    ";
        }
        // line 22
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 22))) {
            // line 23
            yield "      <div class=\"header-main-right\">
        ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24)) {
                // line 25
                yield "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 26
                yield "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 29), "html", null, true);
                yield "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 33
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 33)) {
                // line 34
                yield "          ";
                yield from $this->loadTemplate("@vani/template-parts/search.html.twig", "@vani/template-parts/header.html.twig", 34)->unwrap()->yield($context);
                // line 35
                yield "        ";
            }
            // line 36
            yield "      </div> <!-- /.header-right -->
    ";
        }
        // line 38
        yield "  </div><!-- /header-main -->
  </div><!-- /container -->
  ";
        // line 40
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 41
            yield "    ";
            yield from $this->loadTemplate("@vani/template-parts/slider.html.twig", "@vani/template-parts/header.html.twig", 41)->unwrap()->yield($context);
            // line 42
            yield "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 43
            yield "    ";
            yield from $this->loadTemplate("@vani/template-parts/page_header.html.twig", "@vani/template-parts/header.html.twig", 43)->unwrap()->yield($context);
            // line 44
            yield "  ";
        }
        // line 45
        yield "</header>
";
        // line 46
        yield from $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "@vani/template-parts/header.html.twig", 46)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_front", "slider_show", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@vani/template-parts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  118 => 40,  114 => 38,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  94 => 29,  89 => 26,  87 => 25,  85 => 24,  82 => 23,  79 => 22,  73 => 19,  70 => 18,  68 => 17,  64 => 15,  58 => 11,  56 => 10,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@vani/template-parts/header.html.twig", "/home/david/Documents/mybookstore/web/themes/contrib/vani/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 10];
        static $filters = ["escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
