<?php
register_uninstall_hook(__FILE__, array('Main', 'searchtap_uninstall'));

class Main {

    function __construct() {
        add_action('admin_menu', array($this, 'tab_menu'));
        add_action('admin_post_export_data', array($this, 'form_submit_export'));

        // SETTING ADMIN NOTICE FOR SETTINGS UPDATE
        if (isset($_GET['option'])) {
            add_action('admin_notices', array($this, 'searchtap_custom_admin_notice'));
        }
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

    public function form_submit_export() {
        $options = $_POST;
        unset($options['action']);
        $this->AddOptions($options);
        $url = $_SERVER['HTTP_REFERER'];
        wp_safe_redirect($url . '&option=update');
        exit;
    }

    public function tab_menu() {
        add_menu_page('Tabs', 'SearchTap', 'manage_options', 'searchtap.php', array($this, 'tab_html'), plugin_dir_url(__FILE__) . "logo/logo.png");
    }

    public function tab_html() {
        include_once ("templates/tab_template.php"); // template file
        if (class_exists('tab_template')) {
            $main_file = new tab_template();
        }
    }

    public function AddOptions($template_data) {
        foreach ($template_data as $key => $data) {
            delete_option($key);
            add_option($key, $data, "", "yes");
        }
    }

    public function searchtap_custom_admin_notice() {
        ?>
        <div class="notice notice-success is-dismissible"> 
            <p><strong>Settings saved.</strong></p>
        </div>

        <?php
    }

}
