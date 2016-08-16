<?php

register_uninstall_hook(__FILE__, array('Main', 'searchtap_uninstall'));

class Main {

    function __construct() {

        add_action('admin_menu', array($this, 'tab_menu'));
        add_action('wp_ajax_my_action_template_one', array($this, 'TemplateData'));
        add_action('wp_ajax_my_action_template_two', array($this, 'TemplateData'));
    }

    public function searchtap_uninstall() {
        if (!current_user_can('activate_plugins'))
            return;
        check_admin_referer('bulk-plugins');

        // Important: Check if the file is the one
        // that was registered during the uninstall hook.
        if (__FILE__ != WP_UNINSTALL_PLUGIN)
            return;

        # Uncomment the following line to see the function in action
        # exit( var_dump( $_GET ) );
    }

    public function tab_menu() {

        add_menu_page('Tabs', 'SearchTap', 'manage_options', 'tabs.php', array($this, 'tab_html'));
    }

    public function tab_html() {
        include_once ("templates/tab_template.php"); // template file
        if (class_exists('tab_template')) {
            $main_file = new tab_template();
        }
    }

    public function TemplateData() {
        global $wpdb;
        $action = $_POST['action'];
        switch ($action) {
            case "my_action_template_one":
                $template_1_data = array();
                parse_str($_POST['template_1'], $template_1_data);
                $this->AddOptions($template_1_data);
                echo "Successfully added";
                break;
            case "my_action_template_two":
                $template_2_data = array();
                parse_str($_POST['template_2'], $template_2_data);
                $this->AddOptions($template_2_data);
                echo "Successfully added";
                break;
            default:
                echo "Error";
                break;
        }

        wp_die();
    }

    public function AddOptions($template_data) {
        foreach ($template_data as $key => $data) {
            delete_option($key);
            add_option($key, $data, "", "yes");
        }
    }

}
