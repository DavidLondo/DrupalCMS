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

/* themes/contrib/vani/templates/layout/page--front.html.twig */
class __TwigTemplate_d714338f001a9542503f9c91e43c33a5 extends Template
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
        // line 11
        yield from $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 13
        yield from $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "  <div class=\"container\">
    ";
        // line 15
        if (($context["front_sidebar"] ?? null)) {
            // line 16
            yield "      <div class=\"main-container\">
    ";
        }
        // line 18
        yield "    <main id=\"main\" class=\"page-content home-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 20
        yield "      ";
        yield from $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), "html", null, true);
        yield "
      ";
        // line 22
        yield from $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "    </main>
    ";
        // line 24
        if (($context["front_sidebar"] ?? null)) {
            // line 25
            yield "      ";
            yield from $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 25)->unwrap()->yield($context);
            // line 26
            yield "      ";
            yield from $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 26)->unwrap()->yield($context);
            // line 27
            yield "      </div> ";
            // line 28
            yield "    ";
        }
        // line 29
        yield "  </div> ";
        // line 30
        yield "</div>";
        // line 31
        yield from $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/contrib/vani/templates/layout/page--front.html.twig", 31)->unwrap()->yield($context);
        // line 32
        if (($context["slider_show"] ?? null)) {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["front_sidebar", "page", "slider_show"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/vani/templates/layout/page--front.html.twig";
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
        return array (  97 => 33,  95 => 32,  93 => 31,  91 => 30,  89 => 29,  86 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  73 => 23,  71 => 22,  66 => 21,  63 => 20,  60 => 18,  56 => 16,  54 => 15,  51 => 14,  49 => 13,  46 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/vani/templates/layout/page--front.html.twig", "/home/david/Documents/mybookstore/web/themes/contrib/vani/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 11, "if" => 15];
        static $filters = ["escape" => 21];
        static $functions = ["attach_library" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library'],
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
