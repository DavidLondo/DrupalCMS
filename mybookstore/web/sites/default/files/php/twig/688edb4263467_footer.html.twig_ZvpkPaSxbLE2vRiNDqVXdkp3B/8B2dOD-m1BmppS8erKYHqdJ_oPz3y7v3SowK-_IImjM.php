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

/* @vani/template-parts/footer.html.twig */
class __TwigTemplate_8f184c7c9dc7756a318b45e4369c8815 extends Template
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
        yield "<!-- Start: Footer -->
";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            yield "  <section id=\"footer-top\">
    <div class=\"footer-top footer-block-region container\">
      ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), "html", null, true);
            yield "
    </div>
  </section>
";
        }
        // line 8
        yield "<!-- /footer-top -->
<footer class=\"footer\">
  ";
        // line 10
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 10) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 10))) {
            // line 11
            yield "    <section id=\"footer-blocks\">
      <div class=\"container footer-container\">
        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 14)) {
                // line 15
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), "html", null, true);
                yield "
          ";
            }
            // line 17
            yield "        </div> <!--/footer-first -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20)) {
                // line 21
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 21), "html", null, true);
                yield "
          ";
            }
            // line 23
            yield "        </div> <!--/footer-second -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 26)) {
                // line 27
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), "html", null, true);
                yield "
          ";
            }
            // line 29
            yield "        </div> <!--/footer-three -->

        <div class=\"footer-block footer-block-region block-section\">
          ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 32)) {
                // line 33
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 33), "html", null, true);
                yield "
          ";
            }
            // line 35
            yield "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 38
        yield " ";
        // line 39
        yield "
  ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40)) {
            // line 41
            yield "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container block-section\">
        ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 43), "html", null, true);
            yield "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 46
        yield "<!-- /footer-bottom -->

 ";
        // line 48
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 49
            yield "  <section id=\"footer-bottom-last\">
    <div class=\"container\">
    <div class=\"footer-bottom-last\">
      ";
            // line 52
            if (($context["copyright_text"] ?? null)) {
                // line 53
                yield "          <div class=\"copyright\">
            &copy; ";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield ", All rights reserved.
          </div>
      ";
            }
            // line 57
            yield "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 58
                yield "        <div class=\"footer-social-icons\">
          ";
                // line 59
                yield from $this->loadTemplate("@vani/template-parts/social-icons.html.twig", "@vani/template-parts/footer.html.twig", 59)->unwrap()->yield($context);
                // line 60
                yield "        </div>
      ";
            }
            // line 62
            yield "      </div> <!--/.social icons -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 66
        yield " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 68
        if (($context["scrolltotop_on"] ?? null)) {
            // line 69
            yield "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 71
        yield "<!-- End: Footer -->
";
        // line 72
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/fontawesome"), "html", null, true);
            yield "
";
        }
        // line 75
        if (($context["font_icon_material"] ?? null)) {
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/material"), "html", null, true);
            yield "
";
        }
        // line 78
        if (($context["bootstrapicons"] ?? null)) {
            // line 79
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "site_name", "scrolltotop_on", "font_icon_fontawesome", "font_icon_material", "bootstrapicons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@vani/template-parts/footer.html.twig";
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
        return array (  214 => 79,  212 => 78,  207 => 76,  205 => 75,  200 => 73,  198 => 72,  195 => 71,  191 => 69,  189 => 68,  185 => 66,  178 => 62,  174 => 60,  172 => 59,  169 => 58,  166 => 57,  158 => 54,  155 => 53,  153 => 52,  148 => 49,  146 => 48,  142 => 46,  135 => 43,  131 => 41,  129 => 40,  126 => 39,  124 => 38,  118 => 35,  112 => 33,  110 => 32,  105 => 29,  99 => 27,  97 => 26,  92 => 23,  86 => 21,  84 => 20,  79 => 17,  73 => 15,  71 => 14,  66 => 11,  64 => 10,  60 => 8,  53 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@vani/template-parts/footer.html.twig", "/home/david/Documents/mybookstore/web/themes/contrib/vani/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 59];
        static $filters = ["escape" => 5, "date" => 54];
        static $functions = ["attach_library" => 73];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
