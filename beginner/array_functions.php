<?php
$output = null;

$ids = [10, 22, 15, 45, 67];
$users = ['user1', 'user2', 'user3', 'user4'];

// Count
$output = count($ids);

// sort arrays
sort($ids);
sort($users);

// reverse sort
rsort($users);
rsort($ids);

// Add values to the end of the array - array_push
array_push($ids, 100);
array_push($users, 'user5');

// Pop is to remove element off the end of the array - array_pop
array_pop($ids);
array_pop($users);

// array_shift remove from the beginning of the array
array_shift($users);
array_shift($ids);

// to beginning of an array array_unshift
array_unshift($users, 'user8');
array_unshift($ids, 21);

// array_slice - taks in the array and gets part of the array from your choosing. Creating a different array

$ids2 = array_slice($ids, 2, 3);
var_dump($ids2);

// array_splice - replace value in an index
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

// array_sum
// $output = 'Sum of IDs: ' . array_sum($ids);

// search index
// $output = 'User 2 is at index: ' . array_search('user2', $users);

// in_array  - check to see if value is in the array. will show 1 if true
$output = 'User 3 Exists: ' . in_array('user3', $users);

// explode - turns a string into an array
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);
var_dump($tagsArray);

// implode turns an array into a string
$output = implode(' ', $users);
