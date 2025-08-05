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

/* @vani/template-parts/header-top-blocks.html.twig */
class __TwigTemplate_c1dc28ad91f52e7c11d29fd639733d40 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 1) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 1))) {
            // line 2
            yield "<div class=\"header-top-blocks\">
  <div class=\"container\">
    <div class=\"header-block-container\">
      ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 5)) {
                // line 6
                yield "        <div class=\"header-block header-block-left\">
          ";
                // line 7
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 7), "html", null, true);
                yield "
        </div> <!--/.Header Left -->
      ";
            }
            // line 10
            yield "
      ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 11)) {
                // line 12
                yield "        <div class=\"header-block header-block-right\">
          ";
                // line 13
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 13), "html", null, true);
                yield "
        </div> <!--/.Header right -->
      ";
            }
            // line 16
            yield "    </div><!--/.header-block-container -->
  </div><!--/.container -->
</div><!--/.header-top-blocks -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@vani/template-parts/header-top-blocks.html.twig";
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
        return array (  76 => 16,  70 => 13,  67 => 12,  65 => 11,  62 => 10,  56 => 7,  53 => 6,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@vani/template-parts/header-top-blocks.html.twig", "/home/david/Documents/mybookstore/web/themes/contrib/vani/templates/template-parts/header-top-blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
