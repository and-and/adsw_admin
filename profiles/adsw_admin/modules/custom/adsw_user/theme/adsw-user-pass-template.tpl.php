
                    <div class="section-title">
                        <h3>LogIn to your Account</h3>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group">
                            <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                            <?php print drupal_render($form['name']); ?>
                        </div>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group">
                            <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                            <?php print drupal_render($form['pass']); ?>
                        </div>
                    </div>
                    <div class="login-form-action clearfix">
                        <div class="checkbox pull-left">
<!--                            <div class="custom-checkbox">-->
<!--                                <input type="checkbox" checked name="iCheck">-->
<!--                            </div>-->
<!--                            <span class="checkbox-text pull-left">&nbsp;Remember Me</span>-->
                        </div>
<!--                        <button type="submit" class="btn btn-success pull-right green-btn">LogIn &nbsp; <i class="icon-chevron-right"></i></button>-->
                      <?php print drupal_render($form['actions']['submit']);
                            unset($form['actions']); ?>
                    </div>
<?php print drupal_render_children($form); ?>
