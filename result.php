<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="progress" style="height: 1px;width: 30em">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $a;'%'?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" style="height: 20px; width: 30em">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $a;'%'?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
</body>
</html>