<?php

    // RUN ONLY ONE TIME TO GET THE VALUES INTO THE DATABASE
    function insertFiletoDb(){
        $fileToInsert = file_get_contents("content/data/LuxuryAirCitiesBreakdown.txt");
        $cities = explode("\r\n\r\n", $fileToInsert);

        foreach($cities as $cityinfo){
            include('conn/db_connect.php');
            $city = explode("\r\n", $cityinfo);
            array_splice($city, 3, 1);
            $sql = 'INSERT INTO cities (city_name, description_one, prev_ranking, population_of, description_two) VALUES (?, ?, ?, ?, ?)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$city[0], $city[1], $city[2], $city[3], $city[4]]);
        }
    }

    // // // // // insertFileToDb();
?>