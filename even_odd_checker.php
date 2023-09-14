<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
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
                <h1>Even or Odd Checker</h1>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="number" class="form-label fw-bold">Enter a Number :</label>
                        <input type="number" id="number" name="number" placeholder="Enter a Number what you want to check" class="form-control border-dark fw-bold" required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block mx-auto d-block">Check</button>
                </form>
            </div>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number = $_POST["number"];

                $message = ($number == 0) ? "It's Zero." : (($number % 2 == 0) ? "$number is even." : "$number is odd.");

                echo '<div class="card-footer bg-primary m-0 text-white text-center">';
                echo '<p class="m-0 fs-2 fw-bold"> ' . $message . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>