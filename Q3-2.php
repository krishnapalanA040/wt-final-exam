<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate the total number of days left for Christmas 2022</title>
</head>
<body>
<?php
    date_default_timezone_set("Asia/Kolkata");
    $h = date('G');

    if ($h >=5 && $h <= 11) {
        echo "Good Morning";
    }
    else if ($h >= 12 && $h <= 15) {
        echo "Good Afternoon";
    }
    else {
        echo "Good Evening";
    }
?>
</body>
</html>