<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 50%;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h1>Weather Report</h1>
            </div>
            <div class="card-body">
            <div class="bg-primary mt-0 w-80 mx-auto h-auto border-warning text-center text-white fw-bold rounded">
                    <p class="py-2">Rule: It's freezing! >32 | It's cool! >=32 - < 60 | It's warm! >=60</p>
                </div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="temperature" class="form-label fw-bold">Enter the temperature :</label>
                        <input type="number" id="temperature" name="temperature" placeholder="Enter the temperature" class="form-control border-dark fw-bold" required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block mx-auto d-block">Check Weather</button>
                </form>
            </div>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $temperature = $_POST["temperature"];

                $result = "";
                if ($temperature < 32) {
                    $result = "It's freezing!";
                } elseif ($temperature >= 32 && $temperature < 60) {
                    $result = "It's cool!";
                } else {
                    $result = "It's warm!";
                }


                echo '<div class="card-footer bg-primary m-0 text-white text-center">';
                echo '<p class="m-0 fs-2 fw-bold"> ' . $result . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>