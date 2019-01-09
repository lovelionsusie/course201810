<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 
    <p>Name <?php echo $_POST['form_name']?></p>
    <p>Weekdays <?php echo implode(",",$_POST['weekdays'])?></p>
    <p>Dropdown menu selected <?php echo $_POST['dropdownmenu']?></p>
     -->
    <p>Name <?php echo $_GET['form_name']?></p>
    <p>Weekdays <?php echo implode(",",$_GET['weekdays'])?></p>
    <p>Dropdown menu selected <?php echo $_GET['dropdownmenu']?></p>
    
</body>
</html>