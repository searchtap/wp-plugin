<?php
if (!defined('ABSPATH')) {

    exit; // Exit if accessed directly
}

ob_start();
?>
<div class="template">
    <div class="site_setting_section">
        <h3>Site Settings</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


        <form class="form" action="admin-post.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="export_data">
            <table class="form-table">
                <tbody>   
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="TitleSelector">Title Selector</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_title_selector" value="<?php echo get_option('template_two_title_selector'); ?>" class="form-control" id="TitleSelector" placeholder="Title Selector">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="H1Selector">H1 Selector</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h1_selector" value="<?php echo get_option('template_two_h1_selector'); ?>" class="form-control" id="H1Selector" placeholder="H1 Selector">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="H2Selector">H2 Selector</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h2_selector" value="<?php echo get_option('template_two_h2_selector'); ?>" class="form-control" id="H2Selector" placeholder="H2 Selector">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="BodySelector">Body Selector</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_body_selector" value="<?php echo get_option('template_two_body_selector'); ?>" class="form-control" id="BodySelector" placeholder="Body Selector">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">Data Ignore Selector</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_data_ignore_selector" value="<?php echo get_option('template_two_data_ignore_selector'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Data Ignore Selector">
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h3>Weightage</h3>
            <table class="form-table">
                <tbody>      
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">Title</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_title" value="<?php echo get_option('template_two_title'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Title">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H1</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h1" value="<?php echo get_option('template_two_h1'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H1">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H2</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h2" value="<?php echo get_option('template_two_h2'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H2">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H3</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h3" value="<?php echo get_option('template_two_h3'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H3">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H4</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h4" value="<?php echo get_option('template_two_h4'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H4">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H5</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h5" value="<?php echo get_option('template_two_h5'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H5">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">H6</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_h6" value="<?php echo get_option('template_two_h6'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="H6">
                        </td>
                    </tr>
                    <tr valign ="top">
                        <th scope="row" class="titledesc">
                            <label for="DataIgnoreSelector">Body</label>
                        </th>
                        <td>
                            <input type="text" name="template_two_body" value="<?php echo get_option('template_two_body'); ?>" class="form-control" id="DataIgnoreSelector" placeholder="Body">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" name="save_menu" id="save_menu_header" class="button button-primary menu-save" value="Save Settings">
            </p>
        </form>
    </div>
</div>





