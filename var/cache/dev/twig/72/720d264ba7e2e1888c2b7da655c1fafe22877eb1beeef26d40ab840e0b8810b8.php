<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_4ec7fd6bfc9665839e3f0f160b996b42fdf3f9eb17cab3cdf3e1b9023d8d6306 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base_security.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"hero is-warning is-fullheight\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <div class=\"columns is-centered\">
        <div class=\"column is-5\">
          <form class=\"box\" id=\"form-login\" method=\"post\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
            ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "              <div class=\"help is-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "              <div class=\"mb-3\">
                  Vous êtes connecté en tant que ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo ", <a class=\"has-text-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
              </div>
            ";
        }
        // line 21
        echo "            <div class=\"field\">
            <p class=\"control\">
                <label for=\"\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" class=\"label\">E-mail</label>
                <input class=\"input\" type=\"email\" id=\"inputEmail\" placeholder=\"E-mail\" name=\"email\">
            </p>
            </div>
            <div class=\"field\">
            <p class=\"control\">
                <label for=\"\" class=\"label\">Mot de passe</label>
                <input id=\"inputPassword\" class=\"input\" type=\"password\" placeholder=\"Mot de passe\" name=\"password\">
            </p>
            </div>

            <div class=\"field\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </div>

            <div class=\"field\">
                <div>
                  <label for=\"remember_me\" class=\"form-label\">Se souvenir de moi</label>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                </div>

                ";
        // line 48
        echo "            </div>
            <div class=\"field\" align=\"center\">
              <p class=\"control\">
                <button class=\"button is-success\">Connexion</button>
              </p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  141 => 35,  126 => 23,  122 => 21,  114 => 18,  111 => 17,  108 => 16,  102 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_security.html.twig' %}

{% block title %}Connexion!{% endblock %}

{% block body %}

<section class=\"hero is-warning is-fullheight\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <div class=\"columns is-centered\">
        <div class=\"column is-5\">
          <form class=\"box\" id=\"form-login\" method=\"post\" action=\"{{ path('app_login') }}\">
            {% if error %}
              <div class=\"help is-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            {% if app.user %}
              <div class=\"mb-3\">
                  Vous êtes connecté en tant que {{ app.user.username }}, <a class=\"has-text-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
              </div>
            {% endif %}
            <div class=\"field\">
            <p class=\"control\">
                <label for=\"\" value=\"{{ last_username }}\" class=\"label\">E-mail</label>
                <input class=\"input\" type=\"email\" id=\"inputEmail\" placeholder=\"E-mail\" name=\"email\">
            </p>
            </div>
            <div class=\"field\">
            <p class=\"control\">
                <label for=\"\" class=\"label\">Mot de passe</label>
                <input id=\"inputPassword\" class=\"input\" type=\"password\" placeholder=\"Mot de passe\" name=\"password\">
            </p>
            </div>

            <div class=\"field\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            </div>

            <div class=\"field\">
                <div>
                  <label for=\"remember_me\" class=\"form-label\">Se souvenir de moi</label>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                </div>

                {# <div>
                  <label for=\"forgot_password\" class=\"form-label\">  mot de passe oublié</label>
                  <a href='' id=\"forgot_password\" name=\"forgot_password\"/>
                </div> #}
            </div>
            <div class=\"field\" align=\"center\">
              <p class=\"control\">
                <button class=\"button is-success\">Connexion</button>
              </p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

{% endblock %}", "security/login.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/tripeDream.github.io/templates/security/login.html.twig");
    }
}
