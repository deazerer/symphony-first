<?php
// src/Controller/CounterController.php

namespace App\Controller;

use App\Entity\Meter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CounterController extends AbstractController
{
    public function show(): Response
    {
        $host = 'localhost';
        $database = 'symfony-project';
        $user = 'root';
        $password = '';

        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
        $sql_select = "Select serial_number, meter_name From meter";
        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        printf("<table><tr><th> serial_number</th><th> </th><th>meter_name</th><th></th></tr>");
        do {
            printf("<tr><td>" . $row['serial_number'] . "</td><td><b></b></td><td>" .  $row['meter_name'] . "</td><td><b></b></td><td>" );
        } 
        while ($row = mysqli_fetch_array($result));
        return $this->render('counter/counter.html.twig');
    }    
}
?>