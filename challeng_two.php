<?php
$output = null;
// challenge - 
# Create an array of numbers
$numbers = [11, 23, 8, 55, 23];

// sume the array of numbers and put them in a variable;
$sum_numbers = array_sum($numbers);

// get the amount of numbers in the array
$count_numbers = count($numbers);

// print out: "The amount of the $count_numbers numbers is: $sum_numbers"
$num_print = "The amount of the $count_numbers numbers is: $sum_numbers";

echo "<h3> Sum of an array </h3>";
echo "<h3> $num_print </h3>";

$colors = ['yellow', 'green', 'blue', 'red'];

$colors = array_reverse($colors);


$colors[] = 'purple';
$colors[] = 'orange';
// array_push('orange') can also add colors
// $colors[] = array_merge('purple','orange'); another way to add multiple colors
array_splice($colors, 1, 1, 'pink');

array_pop($colors);
print_r(array_reverse($colors));

$jobs = [
  ["id" => "1", "job_title" => "data analyst", "company" => "kubota", "email" => "kakashi@kubota.com", "phone" => "1112223333", "skills" => ["PHP", "MySQL", "HTML", "CSS"]],
  ["id" => "2", "job_title" => "data engineer", "company" => "google", "email" => "traniel@gmail.com", "phone" => "2221114444", "skills" => ["Python", "MongoDB", "GCP", "HTMX"]],
  ["id" => "3", "job_title" => "data scientist", "company" => "amazon", "email" => "traniel@amazon.com", "phone" => "4442221111", "skills" => ["Javascript", "Postgres", "aws", "Nodejs"]],
];

array_push($jobs, ["id" => "4", "job_title" => "software engineer", "company" => "microsoft", "email" => "traniel@outlook.com", "phone" => "2323232323", "skills" => ["Javascript", "Postgres", "aws", "Nodejs", 'C#', 'ASP.NET']]);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
      <p>
      <pre>
            <?php print_r($jobs) ?>
          </pre>
      </p>
      </p>
    </div>
  </div>
</body>

</html>