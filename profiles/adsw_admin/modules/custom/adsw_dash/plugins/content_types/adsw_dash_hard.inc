<?php

$plugin = array(
  'category' => t('AdSwallow'),
  'title' => t('ADSW hardcode dash'),
  'description' => t('adsw_hardcoded_dash'),
  'render callback' => 'adsw_hardcoded_dash_render',
);


/**
 * Outputs request promotion
 */
function adsw_hardcoded_dash_render($subtype, $conf, $panel_args, $context) {
  global $user;
    $user = user_load($user->uid);

//    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/login/css/font-awesome.min.css');
    drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', 'external');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/bootstrap.min.css');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/animate.css');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/style.css');


$block = new stdClass();
  $block->content = '

<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="' . drupal_get_path('theme', 'adsw_admin'). '/dash/INSPINIAFlotCharts.html">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'. $user->field_first_name['und'][0]['value'] . ' ' .$user->field_last_name['und'][0]['value'] . '</strong>
                             </span> <span class="text-muted text-xs block">'.$user->name.'</span> </span> </a>

                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="'. url('dashboard') .'"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>

                </li>
                <li>
                    <a href="'. url('dashboard/statistics') .'"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span></a>
                </li>
                <li >
                    <a href="'. url('dashboard/rates') .'"><i class="fa fa-desktop"></i> <span class="nav-label">Rates</span><span class="fa arrow"></span></a>

                </li>


            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">

            <ul class="nav navbar-top-links navbar-right">




                <li>
                    <a href="' . url('user/logout') . '">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
<h4 class="text-center">You have not statistics yet.</h4>
            </div>

        </div>
        <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>Copyright</strong> AdSwallow © 2015
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery-2.1.1.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/bootstrap.min.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.metisMenu.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.flot.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.flot.tooltip.min.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.flot.resize.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.flot.pie.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/inspinia.js"></script>
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/pace.min.js"></script>

    <!-- Flot demo data -->
    <script src="' . drupal_get_path('theme', 'adsw_admin'). '/dash/flot-demo.js"></script>




<div id="flotTip" style="display: none; position: absolute; z-index: 100; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; left: 783px; top: 315px; background: rgb(255, 255, 255);"></div>

';
  return $block;
}
