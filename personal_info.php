<?php
//Solution for (Task 1 : Personal Information Page)
    $myName = "Asad Hossain Sirazi";
    $age = 28;
    $country = "Bangladesh";
    $brifeIntroduction = "Hello, I'm $myName, I'm from $country, and I'm currently $age years old. I'm passionate about programming, and I love to learn new skills. My current focus is on PHP and Laravel, and I'm excited to share that I've recently been admitted to the Ostad platform to further enhance my knowledge and expertise in these technologies. I believe that continuous learning is the key to success in the ever-evolving world of programming, and I'm eager to embark on this journey of growth and exploration.";
/*
    echo "My name : $myName. \n";
    echo "My age : $age. \n";
    echo "My Country : $country. \n";
    echo "My brief introduction : $brifeIntroduction \n";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>My Personal Information</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>My Name:</strong> <?php echo "{$myName}"; ?> </li>
                            <li class="list-group-item"><strong>My Age:</strong> <?php echo "{$age}";?></li>
                            <li class="list-group-item"><strong>My Country:</strong> <?php echo "{$country}";?></li>
                            <li class="list-group-item text-justify"><strong>My Brief Introduction:</strong> <?php echo "<br/>{$brifeIntroduction}";?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



    

    