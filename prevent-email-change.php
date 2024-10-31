<?php
/*
Plugin Name: Prevent Email Change
Plugin URI: http://happyplugins.com/prevent-email-change
Description: redirect the user profile to a specific url
Author: HappyPlugins
Version: 1.0.0
Author URI: http://happyplugins.com
Text Domain: prevent-email-change
*/

class preventEmailChange
{


    function __construct()
    {


        add_action('admin_footer', array($this, 'disable_userprofile_fields'));


    }


    function disable_userprofile_fields()
    {

        global $pagenow;

        if ($pagenow == 'profile.php') {

            ?>
            <script>
                jQuery(document).ready(function ($) {
                    if ($('input[name=email]').length) {
                        $('input[name=email]').attr("disabled", "disabled");
                    }

                });
            </script>
        <?php
        }
    }

} // End Class

$preventEmailChange = new preventEmailChange();
