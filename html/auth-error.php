<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cloud Interface</title>
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="/style.css" rel="stylesheet" type="text/css" >
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
  <body>
    <div class="container">
      <h1 class="text-center page-title">Cloud</h1>
      <div class="hero-unit" style="margin-top: 96px;">
        <h1>Sorry! :(</h1>
        <p>We couldn't get your Federal ID to identify you</p>
      </div>
      <div>
        <h2>What now?</h2>
        <ul>
          <?php $useragent = strtolower($_SERVER['HTTP_USER_AGENT']); ?>

          <?php if (strpos($useragent, 'opera') !== False) { ?>
          <li>Last time we checked, Opera didn't support kerberos authentication, but you could give <a href="http://www.opera.com/developer/next">Opera Next</a> a try.</li>
          <?php } ?>

          <?php if (strpos($useragent, 'linux') !== False) { ?>
          <li>You seem to be using Linux, make sure you have performed a <code>kinit</code> and have a valid kerberos token.</li>
          <?php } ?>

          <?php if (strpos($useragent, 'osx') !== False) { ?>
          <li>You seem to be using OSX, make sure you have performed a <code>kinit</code> and have a valid kerberos token.</li>
          <?php } ?>

          <?php if (strpos($useragent, 'firefox') !== False) { ?>
          <li>You're using Firefox! Type <code>about:config</code> into the address bar, search for <code>network.negotiate-auth.trusted-uris</code> and make sure it contains <code>example.com</code>.</li>
          <?php } ?>

          <?php if (strpos($useragent, 'chrome') !== False) { ?>
          <li>Relaunch Chrome/Chromium with an extra command-line argument <code>--auth-server-whitelist=*.example.com</code>.</li>
          <?php } ?>
          <li>If all else fails, email us at <code>cloud-support@example.com</code></li>
        </ul>
      </div>
    </div>
  </body>
</html>
