<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "php function-3"; ?></title>
</head>
<body>
    <?php
        function MyName(){
            echo "zura";
        }

        function secondFunction(){
            return MyName();
        }

        echo  secondFunction();
    ?>
</body>
</html>