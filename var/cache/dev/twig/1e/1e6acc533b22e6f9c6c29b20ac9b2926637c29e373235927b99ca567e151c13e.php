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

/* page/htaccess.txt */
class __TwigTemplate_a48e2bf10a4b518b01e0a87cd3db85af6b9d55e4be033f44355219aa2c272115 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/htaccess.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/htaccess.txt"));

        // line 1
        echo "
# BEGIN WPSuperCache
# The directives (lines) between \"BEGIN WPSuperCache\" and \"END WPSuperCache\" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
#If you serve pages from behind a proxy you may want to change 'RewriteCond %{HTTPS} on' to something more sensible
AddDefaultCharset UTF-8
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Accept-Encoding} gzip
RewriteCond %{HTTPS} on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html.gz -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html.gz\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Accept-Encoding} gzip
RewriteCond %{HTTPS} !on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html.gz -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html.gz\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTPS} on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTPS} !on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html\" [L]
</IfModule>
# END WPSuperCache

# BEGIN rlrssslReallySimpleSSL rsssl_version[4.0.15]
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^(.*)\$ https://%{HTTP_HOST}/\$1 [R=301,L]
</IfModule>
# END rlrssslReallySimpleSSL
# BEGIN WordPress
# Les directives (lignes) entre « BEGIN WordPress » et « END WordPress » sont générées
# dynamiquement, et doivent être modifiées uniquement via les filtres WordPress.
# Toute modification des directives situées entre ces marqueurs sera surchargée.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\\.php\$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# Really Simple SSL
Header always set Strict-Transport-Security: \"max-age=31536000\" env=HTTPS 
# End Really Simple SSL
# END WordPress
# Really Simple SSL
Header always set Content-Security-Policy \"upgrade-insecure-requests\"
# End Really Simple SSL
# Really Simple SSL
Header always set X-Content-Type-Options \"nosniff\"
# End Really Simple SSL
# Really Simple SSL
Header always set X-XSS-Protection \"1; mode=block\"
# End Really Simple SSL
# Really Simple SSL
Header always set Expect-CT \"max-age=7776000, enforce\"
# End Really Simple SSL
# Really Simple SSL
Header always set Referrer-Policy: \"no-referrer-when-downgrade\"
# End Really Simple SSL";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "page/htaccess.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
# BEGIN WPSuperCache
# The directives (lines) between \"BEGIN WPSuperCache\" and \"END WPSuperCache\" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
#If you serve pages from behind a proxy you may want to change 'RewriteCond %{HTTPS} on' to something more sensible
AddDefaultCharset UTF-8
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Accept-Encoding} gzip
RewriteCond %{HTTPS} on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html.gz -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html.gz\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Accept-Encoding} gzip
RewriteCond %{HTTPS} !on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html.gz -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html.gz\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTPS} on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index-https.html\" [L]
RewriteCond %{REQUEST_URI} !^.*[^/]\$
RewriteCond %{REQUEST_URI} !^.*//.*\$
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{QUERY_STRING} ^\$
RewriteCond %{HTTP:Cookie} !^.*(comment_author_|wordpress_logged_in|wp-postpass_).*\$
RewriteCond %{HTTP:X-Wap-Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTP:Profile} !^[a-z0-9\\\"]+ [NC]
RewriteCond %{HTTPS} !on
RewriteCond %{DOCUMENT_ROOT}/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html -f
RewriteRule ^(.*) \"/wp-content/cache/supercache/%{SERVER_NAME}/\$1/index.html\" [L]
</IfModule>
# END WPSuperCache

# BEGIN rlrssslReallySimpleSSL rsssl_version[4.0.15]
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^(.*)\$ https://%{HTTP_HOST}/\$1 [R=301,L]
</IfModule>
# END rlrssslReallySimpleSSL
# BEGIN WordPress
# Les directives (lignes) entre « BEGIN WordPress » et « END WordPress » sont générées
# dynamiquement, et doivent être modifiées uniquement via les filtres WordPress.
# Toute modification des directives situées entre ces marqueurs sera surchargée.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\\.php\$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# Really Simple SSL
Header always set Strict-Transport-Security: \"max-age=31536000\" env=HTTPS 
# End Really Simple SSL
# END WordPress
# Really Simple SSL
Header always set Content-Security-Policy \"upgrade-insecure-requests\"
# End Really Simple SSL
# Really Simple SSL
Header always set X-Content-Type-Options \"nosniff\"
# End Really Simple SSL
# Really Simple SSL
Header always set X-XSS-Protection \"1; mode=block\"
# End Really Simple SSL
# Really Simple SSL
Header always set Expect-CT \"max-age=7776000, enforce\"
# End Really Simple SSL
# Really Simple SSL
Header always set Referrer-Policy: \"no-referrer-when-downgrade\"
# End Really Simple SSL", "page/htaccess.txt", "/Applications/XAMPP/apps/ViaMedo Symfony/VMS/VMS/vms-backup/templates/page/htaccess.txt");
    }
}
