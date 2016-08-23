<?php
    session_start();

    if(isSet($_GET['loc'])) {  // If set in URL
        $GLOBALS['loc'] = $_GET['loc'];
        $_SESSION['loc'] = $loc;
        setcookie('loc', $GLOBALS['loc'], time() + (3600 * 24 * 30));
    }
    else if(isSet($_SESSION['loc'])) {
        $GLOBALS['loc'] = $_SESSION['loc'];  // If stored in a session
    } else if(isSet($_COOKIE['loc'])) {
        $GLOBALS['loc'] = $_COOKIE['loc'];   // If stored in a cookie
    } else {
        // Automatically detect IP
            function getUserIP() {
                $client  = @$_SERVER['HTTP_CLIENT_IP'];
                $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
                $remote  = $_SERVER['REMOTE_ADDR'];

                if(filter_var($client, FILTER_VALIDATE_IP))
                {
                    $ip = $client;
                }
                elseif(filter_var($forward, FILTER_VALIDATE_IP))
                {
                    $ip = $forward;
                }
                else
                {
                    $ip = $remote;
                }

                return $ip;
            }
            $user_ip = getUserIP();

            //  Initiate curl
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,'ipinfo.io/'.$user_ip);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);

            $user = json_decode($result, true);
            $GLOBALS['loc'] = strtolower($user['country']);
    }

    //If not in available countries
    $countries = array('nz', 'gb');

    if (!in_array($GLOBALS['loc'], $countries)) {
        $GLOBALS['loc'] = 'global';
    }  
?>
<!doctype html>
<html lang="">

  <head>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="740301802687856" />
    <title><?php wp_title( '', true, 'right' ); ?></title>
    <!-- Minimized css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/h5bp.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src='https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.css' rel='stylesheet' />
    <!--[if lt IE 10]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/iefixes.css" />
    <![endif]-->
    <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon32x32.ico"><![endif]-->

    <?php wp_head(); ?>
  </head>