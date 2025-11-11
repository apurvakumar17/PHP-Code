<?php
// Simulated project data (in real apps, this comes from a database)
$projects = [
  "P101" => ["name" => "Library Management System", "duration" => "6 months", "status" => "Completed"],
  "P102" => ["name" => "Online Food Delivery App", "duration" => "4 months", "status" => "In Progress"],
  "P103" => ["name" => "Student Attendance Tracker", "duration" => "5 months", "status" => "Pending Approval"]
];

if (isset($_POST['id'])) {
    $id = strtoupper(trim($_POST['id']));

    if (isset($projects[$id])) {
        $p = $projects[$id];
        echo "<b>Project ID:</b> $id<br>
              <b>Name:</b> {$p['name']}<br>
              <b>Duration:</b> {$p['duration']}<br>
              <b>Status:</b> {$p['status']}";
    } else {
        echo "❌ No project found for ID <b>$id</b>.";
    }
} else {
    echo "No Project ID provided.";
}

echo "<br><br><small>Apurva Kumar, 04814902024</small>";
?>