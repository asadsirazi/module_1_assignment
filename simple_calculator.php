<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div
        style="width: 50%;padding: 10px;text-align: center;background: #e3e3e3;box-shadow: 0px 0px 16px 5px rgb(45,45,45);margin: 0 auto;margin-top: 20px;font-family: sutonnyOMJ;">
        <h1 style="padding: 4px;font-family: sutonnyOMJ;text-align: center;font-size: 45.6px;">সিম্পল-ক্যালকুলেটর</h1>
        <div>
            <form method="POST" action="">
                <input class="form-control" name="num1" placeholder="cÖ_g msL¨vwU GLv‡b UvBc Ki|" type="number"
                    style="font-family: sutonnyMJ;font-weight: bold;font-size: 20px;">
                <input class="form-control" name="num2" placeholder="wØZxq msL¨vwU GLv‡b UvBc Ki|" type="number"
                    style="font-family: sutonnyMJ;font-size: 20px;font-weight: bold;">
                <select class="form-select" name="operation" style="margin-bottom: 10px;">

                    <option value="add">অপারেশন সিলেক্ট করুন</option>
                    <option value="add">যোগ</option>
                    <option value="subtract">বিয়োগ</option>
                    <option value="multiply">গুণ</option>
                    <option value="divide">ভাগ</option>
                    <option value="binary">বাইনারি</option>
                    <option value="octal">অকটাল</option>
                    <option value="hexadecimal">হেক্সাডেসিমেল</option>

                </select>
                <button class="btn btn-primary" type="submit"
                    style="text-align: center;margin-right: 5px;font-weight: bold;font-size: 18px;">হিসেব
                    কর<br></button>
                <input class="btn btn-primary" type="reset" style="margin-left: 5px;font-weight: bold;font-size: 18px;"
                    value="রিসেট কর">
            </form>
        </div>
        <div style="text-align: center;margin-top: 20px;padding: 10px;background: #d2f7e7;border-radius: 10px;">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . $result . "</h1>";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . $result . "</h1>";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . $result . "</h1>";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;

                            echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . $result . "</h1>";
                        } else {

                            echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> GB †h, k~Y¨ w`‡q KvD‡K fvM Kiv hvqbv! </h1>";
                        }
                        break;
                    case "binary":

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . decbin($num1) . "</h1>";
                        break;
                    case "octal":

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : " . decoct($num1) . "</h1>";
                        break;
                    case "hexadecimal":

                        echo "<h1 style='text-align: center; font-family: sutonnyMJ; font-weight: bold; font-size: 40px;'> djvdj : <span style='font-family: arial;'> " . dechex($num1) . "</span></h1>";
                        break;
                }
            }
            ?>


        </div>
    </div>
</body>

</html>