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
<!--        <div class="ibox-tools">-->
<!--          <a class="collapse-link">-->
<!--            <i class="fa fa-chevron-up"></i>-->
<!--          </a>-->
<!--          <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--            <i class="fa fa-wrench"></i>-->
<!--          </a>-->
<!--          <ul class="dropdown-menu dropdown-user">-->
<!--            <li><a href="#">Config option 1</a>-->
<!--            </li>-->
<!--            <li><a href="#">Config option 2</a>-->
<!--            </li>-->
<!--          </ul>-->
<!--          <a class="close-link">-->
<!--            <i class="fa fa-times"></i>-->
<!--          </a>-->
<!--        </div>-->
      </div>
      <div class="ibox-content">
<!--        <div class="row">-->
<!--          <div class="col-sm-5 m-b-xs"><select class="input-sm form-control input-s-sm inline">-->
<!--              <option value="0">Option 1</option>-->
<!--              <option value="1">Option 2</option>-->
<!--              <option value="2">Option 3</option>-->
<!--              <option value="3">Option 4</option>-->
<!--            </select>-->
<!--          </div>-->
<!--          <div class="col-sm-4 m-b-xs">-->
<!--            <div data-toggle="buttons" class="btn-group">-->
<!--              <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>-->
<!--              <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>-->
<!--              <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="col-sm-3">-->
<!--            <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">-->
<!--                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>-->
<!--          </div>-->
<!--        </div>-->
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
                <td><?php print number_format($val->cpm, 3, '.', ''); ?>€</td>
                <td><?php print number_format($val->earning, 2, '.', ''); ?>€</td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>
