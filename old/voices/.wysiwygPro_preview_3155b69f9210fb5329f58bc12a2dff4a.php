<?php
if ($_GET['randomId'] != "XF_INoLoP4ah8Ob6yM_cwoLYrT6CsD7f3Yh9DhDnJKvuZuxk0DhfZd2LhwDSusku") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
