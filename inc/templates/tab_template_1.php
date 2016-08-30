<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $wpdb;
ob_start();
?>
<div class="template">

    <div class="create_account_section">    
        <h3>Create an account</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <!--<button type="button" class="btn btn-primary">Sign Up</button>-->
        <p class="submit">
            <input type="button" class="button button-primary " value="Sign Up">
        </p>
    </div>

    <br>
    <div class="log_in_section">
        <h3>Already have an account ?</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <form class="form"  action="admin-post.php" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="action" value="export_data">
            <table class="form-table">
                <tbody>   
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="siteurl">Site Url</label>
                        </th>
                        <td>
                            <input type="text" name="template_one_site_url" value="<?php echo get_option('template_one_site_url'); ?>" class="form-control" id="siteurl" placeholder="www.example.com">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="AdminKey">Admin Key</label>
                        </th>
                        <td>
                            <input type="text" name="template_one_admin_key" value="<?php echo get_option('template_one_admin_key'); ?>" class="form-control" id="AdminKey" placeholder="*********">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="SearchKey">Search Key</label>
                        </th>
                        <td>
                            <input type="text" name="template_one_search_key" value="<?php echo get_option('template_one_search_key'); ?>" class="form-control" id="SearchKey" placeholder="*********">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit"  class="button button-primary" value="Submit">
            </p>
        </form>
    </div>
</div>


