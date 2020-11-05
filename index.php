<?php
require('controller/controller.php');
require('common/navbar.php');
    
if (isset($_GET['action'])) {

    if ($_GET['action'] == 'products') {
        products();
    }
    
}
else {
    home();
}