<div class="section-title reg-header animated fadeInDown">
  <h3>Get your Account Here </h3>

</div>
<div class="clearfix">
  <div class="col-sm-6 registration-left-section animated fadeInUp">
    <div class="reg-content">
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
          <?php print drupal_render($form['account']['name']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
          <?php print drupal_render($form['account']['pass']['pass1']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
          <?php print drupal_render($form['account']['pass']['pass2']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
          <?php print drupal_render($form['account']['mail']); ?>
        </div>
      </div>

    </div>
  </div>
  <div class="col-sm-6 registration-right-section  animated fadeInUp">
    <div class="reg-content">
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
          <?php print drupal_render($form['field_first_name']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
          <?php print drupal_render($form['field_last_name']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-briefcase icon-color"></i></span>
          <?php print drupal_render($form['field_company_name']); ?>
        </div>
      </div>
      <div class="textbox-wrap">
        <div class="input-group">
          <span class="input-group-addon "><i class="icon-skype icon-color"></i></span>
          <?php print drupal_render($form['field_skype']); ?>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="registration-form-action clearfix animated fadeInUp">

  <div class="textbox-wrap">
    <div class="input-group">
      <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
      <?php print drupal_render($form['field_account_type']); ?>
    </div>
  </div>

</div>
<div class="registration-form-action last clearfix animated fadeInUp">
  <a href="<?php print url('user'); ?>" class="btn btn-success pull-left blue-btn ">
    <i class="icon-chevron-left"></i>&nbsp; &nbsp;Back To Login
  </a>
  <button type="submit" class="btn btn-success pull-right green-btn ">Register Now &nbsp; <i class="icon-chevron-right"></i></button>

</div>
<div class="element-hidden"><?php print drupal_render_children($form); ?></div>
