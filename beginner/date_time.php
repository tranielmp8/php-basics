<?php
/*
- `y` - The year (short ex 25)
- `Y` - The year (long ex 2025)
- `m` - The month
- `d` - The day
- `D` - The day of the week short name
- `l` - The full day of the week name
- `h` - The hour
- `i` - The minute
- `s` - The second
- `a` - AM/PM
*/

# Date or Time
$output = null;

// $output = date('Y')

// TIMESTAMP: 936345600
$output = date('Y', 936345600);

// get timestamp from the strttotime
$output = date('Y', strtotime('1999-09-01'));

// get month
$output = date('m');

// get full day
$output = date('D'); // day of week
$output = date('d');

// get month day and year
$output = date('Y-m-d'); // yyyy-mm-dd
$output = date('m-d-y'); // mm-dd-yy

// Time
// get Hour
$output = date('h');

// get minute
$output = date('i');

// get second
$output = date('s');

// get am/pm
$output = date('a');

// all together now
$output = date('Y-m-d h:i:s a');
