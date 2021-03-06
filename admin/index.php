<?php
/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
// should apply for all loaded views
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
	
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    
    //if a GET variable for "view" has been set, begin routing
    if(isset($_GET['view'])) {
       $url = $_GET['view']; 
        //switch determines what page user is on, if variable is invalid default is home
        switch($url) {
			case 'messages':
                include("views/messages.php");
                break;
            case 'manage_hardware':
                include("views/hardware/manage_hardware.php");
                break;
			case 'add':
				include("views/hardware/add.php");
				break;
			case 'edit':
				include("views/hardware/edit.php");
				break;
			case 'delete':
				include("views/hardware/delete.php");
				break;
			case 'checkout':
                include("views/checkout.php");
                break;
            case 'return':
                include("views/return.php");
                break;
			case 'manage_accounts':
				include("views/account/manage_accounts.php");
				break;
			case 'create_account':
				require_once('classes/Registration.php');
				$registration = new Registration();
				include("views/account/create_account.php");
				break;
			case 'edit_account':
				include("views/account/edit_account.php");
				break;
			case 'delete_account':
				include("views/account/delete_account.php");
				break;
            default:
                include("views/home.php");
        }
    //if there is no variable set, redirect to home
    } else {
        include("views/home.php");
    }
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/login.php");
}
?>