<?php
// src/Controller/MeterController.php

namespace App\Controller;

use App\Entity\MetersDataTech;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MeterController extends AbstractController
{
    public function show(): Response
    {
        $host = 'localhost';
        $database = 'symfony-project';
        $user = 'root';
        $password = '';

        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

        $sql_select = "Select * From meters_data_tech where time_server >1474502400";
        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        printf("<table><tr><th> meter_id</th><th> </th><th>time_server</th><th> </th><th>energy_a</th><th> </th></tr>");
        do {
            printf("<tr><td>" . $row['meter_id'] . "</td><td><b></b></td><td>" . date('Y-m-d H:i:s', $row['time_server']) . "</td><td><b></b></td><td>" . $row['energy_a'] . " кВт*ч</td><td><b></b></td></tr>");
        } 
        while ($row = mysqli_fetch_array($result));
        return $this->render('meterdatatech/meterdatatech.html.twig');
    }
}