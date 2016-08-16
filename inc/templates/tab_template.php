<?php

class tab_template {

    function __construct() {
        $this->TabsScripts();
        $this->tabs_html();
    }

    private $tab_name = array(
        1 => "Access Managment",
        2 => "Site Settings",
        3 => "Integration Settings",
        4 => "FAQ",
        5 => "Payment Settings"
    );

    // Tab HTML
    public function tabs_html() {
        ob_start();
        ?>
        <div id="tabs">
            <ul>
                <?php foreach ($this->tab_name as $key => $template_name) { ?>
                    <li><a href="#tabs-<?php echo $key; ?>"><?php echo $template_name; ?></a></li>
                <?php } ?>  
            </ul>
            <?php foreach ($this->tab_name as $key => $template_name) { ?>
                <div id="tabs-<?php echo $key; ?>">
                    <?php include_once ('tab_template_' . $key . '.php'); ?>
                </div>
            <?php } ?>   
        </div>

        <?php
        echo ob_get_clean();
    }

    public function RegisterScripts() {
        wp_register_script('jquery-1.12.4.js', "https://code.jquery.com/jquery-1.12.4.js");
        wp_register_script('jquery-ui.js', "https://code.jquery.com/ui/1.12.0/jquery-ui.js");
        wp_register_script('bootstrap.min.js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
        wp_register_script('custom.js', plugins_url() . "/tabs/inc/templates/js/custom.js");
        wp_register_style('tab.css', plugins_url() . "/tabs/inc/templates/css/tab.css");
        wp_register_style('bootstrap.min.css', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    }

    public function TabsScripts() {
        $this->RegisterScripts();
// Include css
        wp_enqueue_script('jquery-1.12.4.js');
        wp_enqueue_script('jquery-ui.js');
        wp_enqueue_script('bootstrap.min.js');
        wp_enqueue_script('custom.js');
// include css
        wp_enqueue_style('tab.css');
        wp_enqueue_style('bootstrap.min.css');
    }

}
?>

