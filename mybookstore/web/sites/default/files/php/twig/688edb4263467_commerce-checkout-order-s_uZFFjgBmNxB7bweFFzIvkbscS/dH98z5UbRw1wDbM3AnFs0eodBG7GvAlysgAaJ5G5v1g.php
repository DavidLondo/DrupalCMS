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

/* modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig */
class __TwigTemplate_02733c326e06bf99fde3a57207b79db2 extends Template
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
            'order_items' => [$this, 'block_order_items'],
            'totals' => [$this, 'block_totals'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["checkout-order-summary"], "method", false, false, true, 23), "html", null, true);
        yield ">
  ";
        // line 24
        yield from $this->unwrap()->yieldBlock('order_items', $context, $blocks);
        // line 41
        yield "  ";
        yield from $this->unwrap()->yieldBlock('totals', $context, $blocks);
        // line 44
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "order_entity", "rendered_totals"]);        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_order_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    <table>
      <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order_entity"] ?? null), "getItems", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 28
            yield "        <tr>
          <td>";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getQuantity", [], "any", false, false, true, 29)), "html", null, true);
            yield "&nbsp;x</td>
          ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "hasPurchasedEntity", [], "any", false, false, true, 30)) {
                // line 31
                yield "            <td>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce\TwigExtension\CommerceTwigExtension']->renderEntity(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getPurchasedEntity", [], "any", false, false, true, 31), "summary"), "html", null, true);
                yield "</td>
          ";
            } else {
                // line 33
                yield "            <td>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "label", [], "any", false, false, true, 33), "html", null, true);
                yield "</td>
          ";
            }
            // line 35
            yield "          <td>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getTotalPrice", [], "any", false, false, true, 35)), "html", null, true);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "      </tbody>
    </table>
  ";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_totals(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rendered_totals"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig";
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
        return array (  122 => 42,  115 => 41,  108 => 38,  98 => 35,  92 => 33,  86 => 31,  84 => 30,  80 => 29,  77 => 28,  73 => 27,  69 => 25,  62 => 24,  56 => 44,  53 => 41,  51 => 24,  46 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig", "/home/david/Documents/mybookstore/web/modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 24, "for" => 27, "if" => 30];
        static $filters = ["escape" => 23, "number_format" => 29, "commerce_entity_render" => 31, "commerce_price_format" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if'],
                ['escape', 'number_format', 'commerce_entity_render', 'commerce_price_format'],
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
