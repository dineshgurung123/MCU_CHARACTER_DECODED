<?php 

$json = file_get_contents("./marvel.json");

$data = json_decode($json, true);

// echo "<pre/>";
// var_dump($json);
// echo "<pre/>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MCU</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style> 
      .table-dark{

         background-color:#343a40;
         border-color: #454d55;
      }
    </style>

</head>
<body >
   

 <div class = "mcu_table ">
 <table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">Profile</th>
      <th scope="col">Name</th>
      <th scope="col">Character</th>
      <th scope="col">Ability</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $element): ?>

    <tr>
        
    <th> <img src="<?= $element["image"]["thumbnail"]?>" alt="" style = "width: 190px; height: 120px;"></th>
     <th> <?= $element["name"]["real"] ?></th>
     <th> <?= $element["name"]["alias"] ?></th>
    
     <th>  <?php foreach($element["abilities"] as $ability): ?>
         <li> <?= $ability ?></li>
         <?php endforeach; ?></th>

    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
 </div>

</body>
</html>