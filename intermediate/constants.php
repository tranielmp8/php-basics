
<?php
# You cannot redefine or reassign constants
// CREATE CONSTANTS
define("MY_APP", 'super app');
define("NUMBER_CONSTANT", 10);

echo MY_APP;
echo NUMBER_CONSTANT;

echo '<br/>';

// ANOTHER WAY TO CREATE CONSTANTS
const DB_NAME = "mydb";
const DB_HOST = "localhost";
echo DB_HOST . ' ' . DB_NAME;

function run()
{
  echo '<br />';
  # GLOBAL CONSTANTS DO NOT NEED TO BE DEFINED IN FUNCTIONS
  echo MY_APP;
  echo '<br />';
  echo DB_NAME;
}

run();

?>