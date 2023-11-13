<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu đồ cảm xúc</title>
</head>
<body>
    <div class="DropdownMenu">
        <h3 >Biểu đồ cảm xúc <?php include_once('DropdownMonth.php'); DropDownMonth()?></h3>
    </div>
    <div class="chart">
        <?php
            include_once('BieuDo.ejs');
        ?>
    </div>
</body>
</html>