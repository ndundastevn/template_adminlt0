<?php
/*
    Run This File To Generate helper, modal and view files 
    Make sure the application has write permissions 
*/

echo "Welcome to Devlan LiteFramework Starter\n";

$asset_name = readline("Enter file name: ");

/* Sleep */
sleep(2);

/* Helper Files */
$helpers = fopen("helpers/$asset_name.php", "w") or die("Unable to open file!");
echo "Crafted $asset_name.php Helper ✅ \n";

/* Custom License Headers On Helpers Only */
include('config/license_handler.php');

/* Sleep */
sleep(2);

/* Modals File */
$modals = fopen("modals/$asset_name.php", "w") or die("Unable to open file!");
echo "Crafted $asset_name.php Modal ✅ \n";

/* Sleep */
sleep(2);
/* Views File */
$views = fopen("views/$asset_name.php", "w") or die("Unable to open file!");
echo "Crafted $asset_name.php View ✅ \n";

/* Sleep */
sleep(2);
echo "All your files have been crafted, Happy coding 😉!";
