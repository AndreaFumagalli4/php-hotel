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
        ],
    ];
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
        <!-- Import Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <h1>
            PHP Hotel
            </h1>
        </header>
        <main>
            <table class="table">
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
                    <tr>
                        <th scope="row">
                            <?php 
                            $hotel = $hotels[0];
                            echo ($hotel['name']);
                            ?>
                        </th>
                        <td>
                            <?php 
                            $hotel = $hotels[0];
                            echo ($hotel['description']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[0];
                            if($hotel['parking']){
                                echo "yes";
                            } else {
                                echo "no";
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[0];
                            echo ($hotel['vote']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[0];
                            echo ($hotel['distance_to_center']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php 
                            $hotel = $hotels[1];
                            echo ($hotel['name']);
                            ?>
                        </th>
                        <td>
                            <?php 
                            $hotel = $hotels[1];
                            echo ($hotel['description']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[1];
                            if($hotel['parking']){
                                echo "yes";
                            } else {
                                echo "no";
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[1];
                            echo ($hotel['vote']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[1];
                            echo ($hotel['distance_to_center']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php 
                            $hotel = $hotels[2];
                            echo ($hotel['name']);
                            ?>
                        </th>
                        <td>
                            <?php 
                            $hotel = $hotels[2];
                            echo ($hotel['description']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[2];
                            if($hotel['parking']){
                                echo "yes";
                            } else {
                                echo "no";
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[2];
                            echo ($hotel['vote']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[2];
                            echo ($hotel['distance_to_center']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php 
                            $hotel = $hotels[3];
                            echo ($hotel['name']);
                            ?>
                        </th>
                        <td>
                            <?php 
                            $hotel = $hotels[3];
                            echo ($hotel['description']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[3];
                            if($hotel['parking']){
                                echo "yes";
                            } else {
                                echo "no";
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[3];
                            echo ($hotel['vote']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[3];
                            echo ($hotel['distance_to_center']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <?php 
                            $hotel = $hotels[4];
                            echo ($hotel['name']);
                            ?>
                        </th>
                        <td>
                            <?php 
                            $hotel = $hotels[4];
                            echo ($hotel['description']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[4];
                            if($hotel['parking']){
                                echo "yes";
                            } else {
                                echo "no";
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[4];
                            echo ($hotel['vote']);
                            ?>
                        </td>
                        <td>
                            <?php 
                            $hotel = $hotels[4];
                            echo ($hotel['distance_to_center']);
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>