<?php /*
<div class="row">
  <h4 class="text-center">You have no statistics yet.</h4>
</div>
 */
?>

<div class="row">

  <div class="col-lg-4">
    <div class="widget style1 navy-bg">
      <div class="row">
        <div class="col-xs-4">
          <i class="fa fa-tachometer fa-5x"></i>
        </div>
        <div class="col-xs-8 text-right">
          <span> Impressions </span>
          <h2 class="font-bold"><?php print adsw_dash_get_month_impress(); ?></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="widget style1 lazur-bg">
      <div class="row">
        <div class="col-xs-4">
          <i class="fa fa-tasks fa-5x"></i>
        </div>
        <div class="col-xs-8 text-right">
          <span> Clicks </span>
          <h2 class="font-bold"><?php print adsw_dash_get_month_clicks(); ?></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="widget style1 yellow-bg">
      <div class="row">
        <div class="col-xs-4">
          <i class="fa fa-usd fa-5x"></i>
        </div>
        <div class="col-xs-8 text-right">
          <span> Revenue </span>
          <h2 class="font-bold"><?php print number_format(adsw_dash_get_month_revenue(), 2, '.', ''); ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Statistics</h5>
      </div>
      <div class="ibox-content">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Date </th>
              <th>Clicks </th>
              <th>Impressions</th>
              <th>Click Ratio</th>
              <th>eCPM</th>
              <th>Earnings</th>
            </tr>
            </thead>
            <tbody>
            <?php $data = adsw_dash_get_by_days(); ?>
            <?php foreach($data as $val) : ?>
              <tr>
                <td><?php print $val->date; ?></td>
                <td><?php print $val->click; ?></td>
                <td><?php print $val->impress; ?></td>
                <td><?php print number_format($val->ctr, 2, '.', ''); ?>%</td>
                <td>$<?php print number_format($val->cpm, 3, '.', ''); ?></td>
                <td>$<?php print number_format($val->earning, 2, '.', ''); ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>
