<?php
$age = 30;

# If statement
if ($age >= 21) {
  echo "You are old enough to drink in the US <br />";
}

# if-else
if ($age >= 21) {
  echo "You are old enough to drink in the US <br />";
} else {

  echo "You are not old enough to drink in the US <br />";
}
# nested if

if ($age >= 21) {
  echo "You are old enough to drink in the US <br />";
} else {
  if ($age <= 18) {
    echo "You are not old enough to drink in the US <br />";
  } else {
    echo "You are not old enough to vote in the US <br />";
  }
}

# if else if

if ($age >= 21) {
  echo "You are old enough to drink in the US <br />";
} else if ($age >= 18) {

  echo "You are not old enough to drink in the US <br />";
}
