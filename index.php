<?php

 $hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>PHP Hotel</title>
</head>

<body>
  
<div class="container mt-5">
  <div class="row row-cols-5">

  <?php foreach ($hotels as $hotel) : ?>

    <div class="col">
      <div class="card">

        <div class="card-header">
          <h4 class="card-title"> <?php echo $hotel['name'] ?> </h4>
        </div>

        <div class="card-body">

          <p class="card-text"> <?php echo $hotel['description'] ?> </p>
          
        </div>
        
        <div class="card-footer text-muted">
          
          <?php if ($hotel['parking']) : ?>
            <p class="card-text"> Parcheggio custodito: SI </p>
            
            <?php else : ?>
              <p class="card-text"> Parcheggio custodito: NO </p>

          <?php endif; ?>

          <p> Vote: <?php echo $hotel['vote'] ?>/5 </p>
          <p> Distance to center: <?php echo $hotel['distance_to_center'] ?> Km </p>

        </div>

      </div>
    </div>

  <?php endforeach; ?>

  </div>
</div>

</body>

</html>