<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
    <title>Attention Required! | Cloudflare</title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <link rel="stylesheet" id="cf_styles-css" href="style-firewall.css" type="text/css" media="screen,projection" />
    <!--[if lt IE 9]><link rel="stylesheet" id='cf_styles-ie-css' href="/cdn-cgi/styles/cf.errors.ie.css" type="text/css" media="screen,projection" /><![endif]-->
    <style type="text/css">
        body {
            margin: 0;
            padding: 0
        }
    </style>

</head>

<body>
    <div id="cf-wrapper">
        <div class="cf-alert cf-alert-error cf-cookie-error" id="cookie-alert" data-translate="enable_cookies">Please enable cookies.</div>
        <div id="cf-error-details" class="cf-error-details-wrapper">
            <div class="cf-wrapper cf-header cf-error-overview">
                <h1 data-translate="block_headline">Sorry, you have been blocked</h1>
                <h2 class="cf-subheadline"><span data-translate="unable_to_access">You are unable to access</span> viamedo.fr</h2>
            </div><!-- /.header -->

            <div class="cf-section cf-highlight">
                <div class="cf-wrapper">
                    <div class="cf-screenshot-container cf-screenshot-full">

                        <span class="cf-no-screenshot error"></span>

                    </div>
                </div>
            </div><!-- /.captcha-container -->

            <div class="cf-section cf-wrapper">
                <div class="cf-columns two">
                    <div class="cf-column">
                        <h2 data-translate="blocked_why_headline">Why have I been blocked? / Pourquoi ai-je été bloqué ?</h2>

                        <p data-translate="blocked_why_detail">This website is using a security service to protect itself from online attacks. The action you just performed triggered the security solution. There are several actions that could trigger this block including submitting a certain word or phrase, a SQL command or malformed data.</p>
                        <p data-translate="blocked_why_detail">
                            Pourquoi ai-je été bloqué ?

                            Ce site Web utilise un service de sécurité pour se protéger des attaques en ligne. L'action que vous venez d'effectuer a déclenché la solution de sécurité. Plusieurs actions peuvent déclencher ce blocage, notamment la soumission d'un certain mot ou d'une certaine phrase, une commande SQL ou des données malformées.
                        </p>

                    </div>

                    <div class="cf-column">
                        <h2 data-translate="blocked_resolve_headline">What can I do to resolve this? / Comment puis-je faire pour résoudre le problème ?</h2>

                        <p data-translate="blocked_resolve_detail">You can email the site owner to let them know you were blocked. Please include what you were doing when this page came up and the Cloudflare Ray ID found at the bottom of this page.</p>
                    </div>
                </div>
            </div><!-- /.section -->

            <div class="cf-error-footer cf-wrapper">
                <p>
                    <span class="cf-footer-separator">&bull;</span>
                    <span class="cf-footer-item"><span data-translate="your_ip">Your IP</span>: 90.8.88.68</span>
                    <span class="cf-footer-separator">&bull;</span>
                    <span class="cf-footer-item"><span data-translate="performance_security_by">Performance &amp; security by</span> <a data-orig-proto="https" data-orig-ref="www.cloudflare.com/5xx-error-landing?utm_source=error_footer" id="brand_link" target="_blank">Cloudflare</a></span>

                    <span class="cf-footer-separator">&bull;</span>
                    <span class="cf-footer-item">
                        <?php
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $_SESSION['ip'] = $ip;
                        $date =  Date("d-m-Y H:i:s", time());
                        $_SESSION['date'] = $date;
                        $agent = $_SERVER['HTTP_USER_AGENT'];
                        $_SESSION['agent'] = $agent;
                        $message =  $ip . " " . $date . " " . $agent;
                        if (isset($_SESSION['tentative']) && $_SESSION['tentative'] !== 3) {
                            $_SESSION['tentative']++;
                            mail("webmaster@viamedo.fr", "tentative de piratage", "Utilisateur : " . $message . "\n Tentative : " . $_SESSION['tentative']);
                        } else {
                            $_SESSION['tentative'] = 0;
                            echo "Le webmaster a été averti de votre tentative de piratage avec toutes vos coordonnées. La police d'internet sera contactée le cas échéant et une enquête sera menée.";
                        }

                        ?>
                    </span>

                </p>
            </div><!-- /.error-footer -->


        </div><!-- /#cf-error-details -->
    </div><!-- /#cf-wrapper -->


</body>

</html>