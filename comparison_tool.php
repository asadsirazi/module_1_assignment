<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin-top: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Comparison Tool</h1>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">First number:</label>
                                <input type="number" class="form-control border-primary" id="num1" name="num1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num2">Second number:</label>
                                <input type="number" class="form-control border-primary" id="num2" name="num2">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="compare">Compare</button>
                </form>
            </div>
            <?php
            if (isset($_POST['compare'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $largerNumber = ($num1 > $num2) ? $num1 : $num2;
                echo " <div style='font-size: 28px; font-weight: bold;' class='bg-dark fs-2 text-white card-footer p-2'><p class='fw-bolder  m-0 fs-2 text-center'>The larger number is: $largerNumber</p></div>";
            }
            ?>

        </div>
    </div>
</body>

</html>