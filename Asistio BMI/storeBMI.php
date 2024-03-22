
<style>

    .bmi{
background-color:aquamarine;
width:380px;
height:280px;
text-align:center;
margin-left:300px;
float:left;
border-style:solid;
border-radius:5%;
padding: 50px 20px 0px 10px;  
    
    }
    .imperial
    {
background-color:aquamarine;
width:380px;
height:280px;
text-align:center;
margin-right:300px;
float:right;
border-style:solid;
border-radius:5%;
padding: 50px 20px 0px 10px;     
    }

    </style>

<button onclick="goToPage()">Go to Another Page</button>

<script>
function goToPage() {
    window.location.href = 'phpBMI#1.php'; // Change 'page2.html' to the URL of the page you want to navigate to
}
</script>

<div class="bmi">
  <h1>Metric BMI</h1>
<form method="post">
    Weight (kg): <input type="text" name="weight"><br><br>
    Height (m): <input type="text" name="height"><br><br>
    <input type="submit" name="submit" value="Calculate BMI">
</form>



<?php
if(isset($_POST['submit'])){
    // Retrieve form data
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Calculate BMI
    $bmi = calculateBMI($weight, $height);

    // Display result
    echo "<h3>Your BMI is: " . round($bmi, 2) . "</h3>";
    echo "<p>Interpretation: " . interpretBMI($bmi) . "</p>";
}

function calculateBMI($weight, $height) {
    // BMI formula: weight (kg) / (height (m) * height (m))
    return $weight / ($height * $height);
}

function interpretBMI($bmi) {
    if ($bmi < 18.5) {
        return "Underweight";
    } elseif ($bmi < 24.9) {
        return "Normal weight";
    } elseif ($bmi < 29.9) {
        return "Overweight";
    } else {
        return "Obese";
    }
}
?>


</div>




<div class="imperial">

<form method="post" action="storeBMI.php">
<h1>Imperial BMI</h1>
    Weight (lbs): <input type="text" name="weight"><br><br>
    Height (in): <input type="text" name="height"><br><br>
    <input type="submit" name="submit" value="Calculate BMI">
</form>


<?php
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Get weight and height values from the form
    $weight1 = $_POST['weight'];
    $height1 = $_POST['height'];

    // Convert units to metric
    $weight_kg = $weight1 * 0.453592; // 1 pound = 0.453592 kilograms
    $height_m = $height1 * 0.0254; // 1 inch = 0.0254 meters

    // Calculate BMI
    $bmi = $weight_kg / ($height_m * $height_m);

    // Display the result
    echo "<h3>Your BMI is: " . round($bmi, 2) . "</h3>";

    // Interpret BMI
    if ($bmi < 18.5) {
        echo "<p>You are underweight.</p>";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        echo "<p>Your weight is normal.</p>";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        echo "<p>You are overweight.</p>";
    } else {
        echo "<p>You are obese.</p>";
    }
}
?>
</div>
 