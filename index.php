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

$parkingFilter = $_GET['parking'];
var_dump($parkingFilter);


$filteredHotels = [];

switch ($parkingFilter) {

  case 'option2':
    $hasParking = true;
    var_dump($hasParking);
    foreach ($hotels as $hotel) {
      if ($hotel['parking'] === $hasParking) {
        array_push($filteredHotels, $hotel);
      }
    }
    $hotels = $filteredHotels;
    break;

  case 'option3':
    $hasParking = false;
    var_dump($hasParking);
    foreach ($hotels as $hotel) {
      if ($hotel['parking'] === $hasParking) {
        array_push($filteredHotels, $hotel);
      }
    }
    $hotels = $filteredHotels;
    break;
  
  default:
     $hotels = $hotels;
    break;
}


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

<!-- Filter hotels -->
<div class="container mb-5">

  <h4>Filter Hotels</h4>

  <form action="" method="GET">
  
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="parking" id="allHotels" value="option1" checked/>
      <label class="form-check-label" for="allHotels">All</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="parking" id="parkingYes" value="option2"/>
      <label class="form-check-label" for="parkingYes">Has parking</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="parking" id="parkingNo" value="option3"/>
      <label class="form-check-label" for="parkingNo">Doesn't have parking</label>
    </div>
    
    <button type="submit">Filter</button>

  </form>

</div>


<!-- Hotel table -->


  <div class="container">

    <div class="table-responsive">

        <table class="table table-primary">
          
          <thead>
            <tr>

              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Parking</th>
              <th scope="col">Vote</th>
              <th scope="col">Distance to center</th>

            </tr>
          </thead>

          <tbody>

            <?php foreach ($hotels as $hotel) : ?>

              <tr>

                <td scope="row"> <?php echo $hotel['name'] ?> </td>
                <td> <?php echo $hotel['description'] ?> </td>
                <td> <?php echo $hotel["parking"] ? 'Si' : 'No'; ?> </td>
                <td> <?php echo $hotel['vote'] ?>/5 </td>
                <td> <?php echo $hotel['distance_to_center'] ?> Km </td>

                
              </tr>

            <?php endforeach; ?>

          </tbody>

        </table>
        
      </div>

    </div>
  </div>








  <!-- Bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>