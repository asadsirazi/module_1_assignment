<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa;">

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border border-primary">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Temperature Converter</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="mb-3">
                            <label for="temperature" class="form-label">Enter Temperature:</label>
                            <input type="number" id="temperature" name="temperature" class="form-control border border-primary" required>
                        </div>
                        <div class="mb-3">
                            <label for="conversion" class="form-label">Select Conversion:</label>
                            <select id="conversion" name="conversion" class="form-select border border-primary">
                                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto d-block">Convert</button>
                    </form>
                </div>
                <?php
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $temperature = $_POST["temperature"];
                    $conversion = $_POST["conversion"];

                    
                    $result = "";
                    if ($conversion === "celsius_to_fahrenheit") {
                        $result = ($temperature * 9/5) + 32;
                    } elseif ($conversion === "fahrenheit_to_celsius") {
                        $result = ($temperature - 32) * 5/9;
                    }

                    echo '<div class="card-footer bg-primary text-white text-center fw-bold">';
                    echo "Result : $temperature degrees " . ($conversion === "celsius_to_fahrenheit" ? "Celsius" : "Fahrenheit") . " is equal to " . number_format($result, 2) . " degrees " . ($conversion === "celsius_to_fahrenheit" ? "Fahrenheit" : "Celsius");
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
