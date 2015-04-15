<form id="stat-filters">
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Statistic </h5>
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
        <div class="row">
          <div class="col-sm-5 m-b-xs">
            <div data-toggle="buttons" class="btn-group select-filter-type">
              <label class="btn btn-sm btn-white active">
                <input type="radio" id="option1" name="type" value="date" <?php print isset($_GET['type']) && $_GET['type'] == 'date' ? 'checked="checked"' : '';?>> Date </label>
              <label class="btn btn-sm btn-white ">
                <input type="radio" id="option2" name="type" value="country" <?php print isset($_GET['type']) && $_GET['type'] == 'country' ? 'checked="checked"' : '';?>> Country
              </label>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-sm-5 m-b-xs">
            <label class="font-noraml">Country</label>
            <select name="country" class="input-sm form-control input-s-sm inline">
              <?php $country = country_get_list(); ?>

              <option value="all">All countires</option>
              <?php foreach($country as $k => $v) : ?>
                <option value="<?php print $k; ?>" <?php print isset($_GET['country']) && $_GET['country'] == $k ? 'selected="selected"' : '';?>><?php print $v; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 m-b-xs">
            <div class="form-group" id="data_5">
              <label class="font-noraml">Range select</label>
              <div class="col-sm-12 input-daterange input-group" id="datepicker">
                <input type="text" class="input-sm form-control" name="start" value="<?php print isset($_GET['start']) ? $_GET['start'] : date('Y-m-d', strtotime("-1 week +1 day")); ?>">
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="end" value="<?php print isset($_GET['end']) ? $_GET['end'] : date('Y-m-d', REQUEST_TIME); ?>">
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-sm-2">
            <div class="form-group">
              <label class="font-noraml"> </label>
            <button type="submit" class="btn btn-outline btn-warning btn-block">Filter</button>
              </div>
          </div>
        </div>
        <?php $from = isset($_GET['start']) ? $_GET['start'] : NULL; $to = isset($_GET['end']) ? $_GET['end'] : NULL; ?>
        <div class="hr-line-dashed"></div>
        <div class="table-responsive">
          <table class="table table-striped">
            <?php if (isset($_GET['type']) && $_GET['type'] == 'country') : ?>
              <thead>
              <tr>
                <th>Country </th>
                <th>Clicks </th>
                <th>Impressions</th>
                <th>Click Ratio</th>
                <th>eCPM</th>
                <th>Earnings</th>
              </tr>
              </thead>
              <tbody>
              <?php $data = adsw_dash_get_by_countries($from, $to); ?>
              <?php $country = country_get_list(); ?>
              <?php foreach($data as $val) : ?>
                <tr>
                  <td><?php print $val->country; ?></td>
                  <td><?php print $val->click; ?></td>
                  <td><?php print $val->impress; ?></td>
                  <td><?php print number_format($val->ctr, 2, '.', ''); ?>%</td>
                  <td>$<?php print number_format($val->cpm, 3, '.', ''); ?></td>
                  <td>$<?php print number_format($val->earning, 2, '.', ''); ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            <?php else : ?>
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
              <?php $data = adsw_dash_get_by_days($from, $to); ?>
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
            <?php endif; ?>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>
  </form>
