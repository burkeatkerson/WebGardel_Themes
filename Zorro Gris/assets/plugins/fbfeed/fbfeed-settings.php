<?php

//------------------------------------------------------------------//
//************ Custom Facebook Feed Standalone Settings ************//
//------------------------------------------------------------------//


// Include the file which generates the feed
if (isset($fbfeed_path)) include $fbfeed_path . '/core/custom-facebook-feed.php';

// Don't display error messages. To debug comment out the line below.
error_reporting(0);

// Uncommment the line below to show your system info settings
// cff_system_info();

?>