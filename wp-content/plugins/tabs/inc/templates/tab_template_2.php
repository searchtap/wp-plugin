<?php
if (!defined('ABSPATH')) {

    exit; // Exit if accessed directly
}

ob_start();
?>
<h1>Site Settings</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <form action="" method="post" enctype="multipart/form-data" id="form-tamplate_2" class="form-horizontal">
        <div class="form-group">
            <label for="TitleSelector">Title Selector</label>
            <input type="text" name="template_two_title_selector" value="<?php echo get_option('template_two_title_selector'); ?>" class="form-control" id="TitleSelector" placeholder="Title Selector">
        </div>
        <div class="form-group">
            <label for="H1Selector">H1 Selector</label>
            <input type="text" name="template_two_h1_selector" value="<?php echo get_option('template_two_h1_selector'); ?>" class="form-control" id="H1Selector" placeholder="H1 Selector">
        </div>
        <div class="form-group">
            <label for="H2Selector">H2 Selector</label>
            <input type="text" name="template_two_h2_selector" value="<?php echo get_option('template_two_h2_selector'); ?>" class="form-control" id="H2Selector" placeholder="H2 Selector">
        </div>
        <div class="form-group">
            <label for="BodySelector">Body Selector</label>
            <input type="text" name="template_two_body_selector" value="<?php echo get_option('template_two_body_selector'); ?>" class="form-control" id="BodySelector" placeholder="Body Selector">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">Data Ignore Selector</label>
            <input type="text" name="template_two_data_ignore_selector" value="<?php echo get_option('template_two_data_ignore_selector'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Data Ignore Selector">
        </div>
        <hr>
        <strong><h2>Weightage</h2></strong>
        <div class="form-group">
            <label for="DataIgnoreSelector">Title</label>
            <input type="text" name="template_two_title" value="<?php echo get_option('template_two_title'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H1</label>
            <input type="text" name="template_two_h1" value="<?php echo get_option('template_two_h1'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H1">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H2</label>
            <input type="text" name="template_two_h2" value="<?php echo get_option('template_two_h2'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H2">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H3</label>
            <input type="text" name="template_two_h3" value="<?php echo get_option('template_two_h3'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H3">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H4</label>
            <input type="text" name="template_two_h4" value="<?php echo get_option('template_two_h4'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H4">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H5</label>
            <input type="text" name="template_two_h5" value="<?php echo get_option('template_two_h5'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H5">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">H6</label>
            <input type="text" name="template_two_h6" value="<?php echo get_option('template_two_h6'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H6">
        </div>
        <div class="form-group">
            <label for="DataIgnoreSelector">Body</label>
            <input type="text" name="template_two_body" value="<?php echo get_option('template_two_body'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Body">
        </div>
        <button type="submit" class="btn btn-primary vert-offset-bottom-5">Save Settings</button>
    </form>







