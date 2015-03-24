<div class="panel-2col-stacked clear-block panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="center-wrapper">
    <div class="panel-col-top panel-panel">
        <div class="panel-col-top panel-panel">
        <?php if ($content['header']): ?>
          <div class="inside"><?php print $content['header']; ?></div>
        <?php endif; ?>
        <?php if ($content['header_menu']): ?>
          <div class="inside"><?php print $content['header_menu']; ?></div>
        <?php endif; ?>
        <?php if ($content['breadcrumbs']): ?>
          <div class="inside"><?php print $content['breadcrumbs']; ?></div>
        <?php endif; ?>
        </div>
    </div>

    <div class="panel-col-last panel-panel">
        <div class="panel-col-top panel-panel">
        <?php if ($content['content']): ?>
        <div class="inside"><?php print $content['content']; ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="panel-col-top panel-panel">
    <?php if ($content['footer_links']): ?>
      <div class="inside"><?php print $content['footer_links']; ?></div>
    <?php endif; ?>
    </div>
		<div class="panel-col-last-end"></div>
  </div>
</div>