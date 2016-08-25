<?php
session_start();

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
        <div id="container" >
            <h1 id="taps_title">
                SearchTap
            </h1>
            <form name="tabTest" method="post" action="admin-post.php">  
                <input type="hidden" name="action" value="export_data">

                <div id="tabs">
                    <ul>
                        <?php
                        foreach ($this->tab_name as $key => $template_name) {
                            ?>
                            <li><a  class="nav-tab" href="#tabs-<?php echo $key; ?>"><?php echo $template_name; ?></a></li>
                        <?php } ?>  
                    </ul>
                    <?php foreach ($this->tab_name as $key => $template_name) { ?>
                        <div id="tabs-<?php echo $key; ?>">
                            <?php include_once ('tab_template_' . $key . '.php'); ?>
                        </div>
                    <?php } ?>   
                </div>
            </form>
        </div>
        <?php
        echo ob_get_clean();
    }

    public function RegisterScripts() {
        wp_register_script('jquery-1.12.4.js', "https://code.jquery.com/jquery-1.12.4.js");
        wp_register_script('jquery-ui.js', "https://code.jquery.com/ui/1.12.0/jquery-ui.js");
        wp_register_script('bootstrap.min.js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
        wp_register_script('custom.js', plugin_dir_url(__FILE__) . "js/custom.js");
        wp_register_style('tab.css', plugin_dir_url(__FILE__) . "css/tab.css");
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

