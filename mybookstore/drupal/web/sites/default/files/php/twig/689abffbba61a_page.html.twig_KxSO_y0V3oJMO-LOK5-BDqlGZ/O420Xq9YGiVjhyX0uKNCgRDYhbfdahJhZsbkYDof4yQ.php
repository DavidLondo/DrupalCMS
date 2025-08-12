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

/* themes/custom/bookstore_bootstrap_child/templates/page.html.twig */
class __TwigTemplate_e84ec4a07b857e4068ddae61adbf5610 extends Template
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
        yield "<header>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield "</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\" aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      
      <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
        ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10), "html", null, true);
        yield "
        <ul class=\"navbar-nav ms-auto\">
          ";
        // line 12
        if (($context["logged_in"] ?? null)) {
            // line 13
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.logout"));
            yield "\">Cerrar sesión</a>
            </li>
          ";
        } else {
            // line 17
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.login"));
            yield "\">Iniciar sesión</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.register"));
            yield "\">Registrarse</a>
            </li>
          ";
        }
        // line 24
        yield "        </ul>
      </div>
    </div>
  </nav>
</header>

<main class=\"container mt-4\">
  ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), "html", null, true);
        yield "
</main>

<footer class=\"mt-5 bg-dark text-white py-3\">
  <div class=\"container text-center\">
    <p>&copy; ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Bookstore. Todos los derechos reservados.</p>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "page", "logged_in"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/bookstore_bootstrap_child/templates/page.html.twig";
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
        return array (  108 => 36,  100 => 31,  91 => 24,  85 => 21,  79 => 18,  76 => 17,  70 => 14,  67 => 13,  65 => 12,  60 => 10,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/bookstore_bootstrap_child/templates/page.html.twig", "/var/www/drupal/web/themes/custom/bookstore_bootstrap_child/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12];
        static $filters = ["escape" => 4, "date" => 36];
        static $functions = ["path" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                ['path'],
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
