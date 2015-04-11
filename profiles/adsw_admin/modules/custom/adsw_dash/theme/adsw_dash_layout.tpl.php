

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
            <a data-toggle="dropdown" class="dropdown-toggle" href="<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/INSPINIAFlotCharts.html'; ?>">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                  <?php print !empty($user->field_first_name['und'][0]['value']) ? $user->field_first_name['und'][0]['value'] : ''; ?>
                                  <?php print !empty($user->field_last_name['und'][0]['value']) ? $user->field_last_name['und'][0]['value'] : ''; ?></strong>
                             </span> <span class="text-muted text-xs block"><?php print !empty($user->name) ? $user->name : ''; ?></span> </span> </a>

          </div>
          <div class="logo-element">
            IN+
          </div>
        </li>
        <li class="<?php print is_null(arg(1)) ? 'active' : ''; ?>">
          <a href="<?php print url('dashboard') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>

        </li>
        <li class="<?php print !is_null(arg(1)) && arg(1) == 'statistics' ? 'active' : ''; ?>">
          <a href="<?php print url('dashboard/statistics') ?>"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span></a>
        </li>
<!--        <li >-->
<!--          <a href="--><?php //print url('dashboard/rates') ?><!--"><i class="fa fa-desktop"></i> <span class="nav-label">Rates</span><span class="fa arrow"></span></a>-->
<!---->
<!--        </li>-->


      </ul>

    </div>
  </nav>

  <div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
      <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">

        <ul class="nav navbar-top-links navbar-right">
          <li>
            <a href="<?php print url('user/logout') ?>">
              <i class="fa fa-sign-out"></i> Log out
            </a>
          </li>
        </ul>

      </nav>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
      <?php if (!is_null(arg(1)) && arg(1) == 'statistics') : ?>
        <?php print theme('adsw_dash_page_stat'); ?>
      <?php else : ?>
        <?php print theme('adsw_dash_page_content'); ?>
      <?php endif; ?>

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
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery-2.1.1.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/bootstrap.min.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/bootstrap-datepicker.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.metisMenu.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.flot.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.flot.tooltip.min.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.flot.resize.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.flot.pie.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/jquery.flot.time.js"></script>

<!-- Custom and plugin javascript -->
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/inspinia.js"></script>
<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/pace.min.js"></script>


<script src="/<?php print drupal_get_path('theme', 'adsw_admin'); ?>/dash/chosen.jquery.js"></script>
<script src="/<?php print drupal_get_path('module', 'adsw_dash'); ?>/js/filters.js"></script>

