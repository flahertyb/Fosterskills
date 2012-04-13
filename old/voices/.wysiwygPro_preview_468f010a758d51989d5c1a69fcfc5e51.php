<?php
if ($_GET['randomId'] != "qMkkw1xDE03PvAIQZDSxm0P5OWnIaYaX4PP5nGUVGPdGe4KwgTmLU2PgozaPZKdG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
