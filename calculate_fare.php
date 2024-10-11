<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = (float) $_POST['distance'];
    $passenger_type = $_POST['passenger_type'];

    
    $base_fare = 13.00; // fare for the first 5km
    $additional_fare_per_km = 1.75; // fare for each km after the first 5km
    $base_distance = 5; // distance in km for the base fare
    $discount = 0.20; // 20% discount for students/elderly

   
    if ($distance <= $base_distance) {
        $total_fare = $base_fare;
    } else {
        $extra_distance = $distance - $base_distance;
        $total_fare = $base_fare + ($extra_distance * $additional_fare_per_km);
    }

    if ($passenger_type == "student_elderly") {
        $total_fare -= $total_fare * $discount;
    }

    echo "<h1>Fare Calculation Result</h1>";
    echo "Distance: " . $distance . " km<br>";
    echo "Passenger type: " . ($passenger_type == "student_elderly" ? "Student/Elderly" : "Regular") . "<br>";
    echo "Total fare: Php " . number_format($total_fare, 2);
} else {
    echo "Invalid request.";
}
?>
