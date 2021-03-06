<?php
/* header */

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/framework7@5.7.10/css/framework7.bundle.min.css" integrity="sha256-LxDhBxOEISMpiyBOP5xwV89oIg7GqNcfF2QofLlS5IA=" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>

    <title><?php echo $page_title; ?></title>
  </head>
  <body class="theme-dark">

    <div id="app">

      <div class="panel panel-left panel-cover panel-resizable panel-init">
        <div class="page">
        <div class="page-content">
          <div class="block-title">bc.game Verification tools</div>
          <div class="list components-list">
          <ul>
            <li>
              <a class="panel-close external item-content item-link" href="crash.php">
                <div class="item-media"><i class="material-icons">exit_to_app</i></div>
                <div class="item-inner"><div class="item-title">Crash Verification tool</div></div>
              </a>
            </li>
            <li>
              <a class="panel-close external item-content item-link" href="sword.php">
                <div class="item-media"><i class="material-icons">exit_to_app</i></div>
                <div class="item-inner"><div class="item-title">Savior Sword Verification tool</div></div>
              </a>
            </li>
            <li>
              <a class="panel-close external item-content item-link" href="beauties.php">
                <div class="item-media"><i class="material-icons">exit_to_app</i></div>
                <div class="item-inner"><div class="item-title">Oriental Beauties Verification tool</div></div>
              </a>
            </li>
              <li>
                <a class="panel-close external item-content item-link" href="keno.php">
                  <div class="item-media"><i class="material-icons">exit_to_app</i></div>
                  <div class="item-inner"><div class="item-title">Keno Verification tool</div></div>
                </a>
              </li>
          </ul>
          <div class="block-title">Bet tools</div>
          <ul>
            <li>
              <a class="panel-close external item-content item-link" href="bet.php">
                <div class="item-media"><i class="material-icons">exit_to_app</i></div>
                <div class="item-inner"><div class="item-title">Bet calculator</div></div>
              </a>
            </li>
          </ul>
          </div>

        </div>
        </div>
        <div class="panel-resize-handler"></div>
      </div>

      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">

        <div class="page public" data-name="crash">

          <!-- Top Navbar -->
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="left sliding">
                <a href="#" class="link icon-only panel-open" data-panel="left" data-panel=".panel-left"><i class="icon material-icons md-only">menu</i></a>
              </div>
              <div class="title sliding"><?php echo $page_title; ?></div>
              <div class="right">

              </div>
            </div>
          </div>

          <!-- Bottom Toolbar -->
          <!-- <div class="toolbar toolbar-bottom">
            <div class="toolbar-inner">
              <a href="#" class="link external"><i class="material-icons">exit_to_app</i> <span class="text">Home</span></a>
              <a href="#" class="link external"><i class="material-icons">exit_to_app</i> <span class="text">Explore</span></a>
              <a href="#" class="link external"><i class="material-icons">exit_to_app</i> <span class="text">News</span></a>
              <a href="#" class="link external"><i class="material-icons">exit_to_app</i> <span class="text">Events</span></a>
            </div>
          </div> -->
