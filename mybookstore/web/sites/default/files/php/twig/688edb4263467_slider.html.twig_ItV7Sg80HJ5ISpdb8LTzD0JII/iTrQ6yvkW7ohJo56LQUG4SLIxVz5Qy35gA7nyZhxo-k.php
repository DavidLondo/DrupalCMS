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

/* @vani/template-parts/slider.html.twig */
class __TwigTemplate_81e6fed8a435b998429827465cbb8ca4 extends Template
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
        yield "<section class=\"slider\">
  <div class=\"container slider-container\">
    <div class=\"slider-text\">
      <ul class=\"js-rotating\">
        ";
        // line 5
        if ((($context["slider_code"] ?? null) != "")) {
            // line 6
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags(($context["slider_code"] ?? null), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            yield "
        ";
        } else {
            // line 8
            yield "        <li>
  \t\t\t\t<h1>Vani is <em>Multipurpose</em> Drupal theme</h1>
  \t\t\t\t<p>Vani Theme is packed full of all the amazing features and options for you to create</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Welcome To <em>Drupar</em> Design Studio</h1>
  \t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>We Create <em>Awesome</em> Drupal Themes!</h1>
  \t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
        ";
        }
        // line 24
        yield "      </ul> <!--/.home-slider -->
    </div><!-- /slider-text -->
    <div class=\"slider-image\">
      ";
        // line 27
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 28
            yield "        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slider_image_path"] ?? null), "html", null, true);
            yield "\" alt=\"slider image\" />
      ";
        } else {
            // line 30
            yield "        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/images/slider.svg\" alt=\"slider image\" />
      ";
        }
        // line 32
        yield "    </div><!-- /slider-image -->
  </div> <!--/.container -->
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slider_code", "slider_image_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@vani/template-parts/slider.html.twig";
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
        return array (  95 => 32,  89 => 30,  83 => 28,  81 => 27,  76 => 24,  58 => 8,  52 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@vani/template-parts/slider.html.twig", "/home/david/Documents/mybookstore/web/themes/contrib/vani/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 5];
        static $filters = ["raw" => 6, "striptags" => 6, "escape" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags', 'escape'],
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
