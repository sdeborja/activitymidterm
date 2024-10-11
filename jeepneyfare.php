<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Computation</title>
</head>
<body>
<h1>Jeepney Fare Calculator</h1>
    <form action="calculate_fare.php" method="post">
        <label for="distance">Enter distance in kilometers:</label>
        <input type="number" id="distance" name="distance" step="0.1" required><br><br>

        <label for="passenger_type">Select passenger type:</label>
        <select id="passenger_type" name="passenger_type">
            <option value="regular">Regular</option>
            <option value="student_elderly">Student/Elderly</option>
        </select><br><br>

        <input type="submit" value="Calculate Fare">
    </form>
</body>
</html>