<?php
if (!defined('ABSPATH')) {

    exit; // Exit if accessed directly
}
global $wpdb;

ob_start();
?>
<h1>Create an account</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<!--<button type="button" class="btn btn-primary">Sign Up</button>-->
 <input type="button" class="button button-primary " value="Sign Up">
<h1>Already have an account ?</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<form class="form"  action="admin-post.php" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="action" value="export_data">
    <div class="form-group">
        <label for="siteurl">Site Url</label>
        <input type="text" name="template_one_site_url" value="<?php echo get_option('template_one_site_url'); ?>" class="form-control" id="siteurl" placeholder="www.example.com">
    </div>
    <div class="form-group">
        <label for="AdminKey">Admin Key</label>
        <input type="text" name="template_one_admin_key" value="<?php echo get_option('template_one_admin_key'); ?>" class="form-control" id="AdminKey" placeholder="*********">
    </div>
    <div class="form-group">
        <label for="SearchKey">Search Key</label>
        <input type="text" name="template_one_search_key" value="<?php echo get_option('template_one_search_key'); ?>" class="form-control" id="SearchKey" placeholder="*********">
    </div>
   <input type="submit"  class="button button-primary" value="Submit">
</form>



