<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            max-width: 80%;
        }
    </style>
</head>

<body>

    <div class="container w-80 mt-3">
        <div class="card shadow col-12">
            <div class="card-header bg-warning text-dark">
                <h1 class="text-center">Grade Calculator</h1>
            </div>
            <div class="card-body">
                <div class="bg-primary mt-0 w-50 mx-auto h-auto border-warning text-center text-white fw-bold rounded">
                    <p class="py-2">Rule: A >=80 | B >=65 | C >=50 | D >=33 | F >33</p>
                </div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="score1" class="form-label fw-bold">Arabic:</label>
                                <input type="number" id="score1" name="score1" class="form-control border-warning" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="score2" class="form-label fw-bold">English:</label>
                                <input type="number" id="score2" name="score2" class="form-control border-warning" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="score3" class="form-label fw-bold">Bangla:</label>
                                <input type="number" id="score3" name="score3" class="form-control border-warning" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-block mx-auto d-block">Calculate</button>
                </form>
            </div>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $score1 = $_POST["score1"];
                $score2 = $_POST["score2"];
                $score3 = $_POST["score3"];


                $average = ($score1 + $score2 + $score3) / 3;


                $letter_grade = "";

                if ($average >= 80) {
                    $letter_grade = "A";
                } elseif ($average >= 65) {
                    $letter_grade = "B";
                } elseif ($average >= 50) {
                    $letter_grade = "C";
                } elseif ($average >= 33) {
                    $letter_grade = "D";
                } else {
                    $letter_grade = "F";
                }


                echo '<div class="card-footer bg-success text-white m-0 fs-2 p-3 text-center row">';
                echo '<div class="col-md-6"><p class="m-0">Average: <span class="bg-warning rounded p-2 px-4 m-0 fw-bold text-black">' . $average . ' </span></p></div>';
                echo '<div class="col-md-6"><p class="m-0">Letter Grade: <span class="bg-warning rounded p-2 px-4 m-0 fw-bold text-black"> ' . $letter_grade . '</span></p></div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

</body>

</html>