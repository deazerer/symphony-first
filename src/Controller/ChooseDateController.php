<?php
// src/Controller/ChooseDateController.php

namespace App\Controller;

use App\Entity\MetersDataTech;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ChooseDateController extends AbstractController
{
    public function display(Request $request)
    {
        $host = 'localhost';
        $database = 'symfony-project';
        $user = 'root';
        $password = '';

        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

        $sql_select="Select min(time_server) From meters_data_tech";

        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));

        $row = mysqli_fetch_array($result);
        print ("Диапазон дат: ".date('Y-m-d',$row['min(time_server)'])." - ");
        $sql_select="Select max(time_server) From meters_data_tech";

        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));

        $row = mysqli_fetch_array($result);
        print (date('Y-m-d', $row['max(time_server)']).'<br/>');
        $params=$request->request->all();
        if (isset ($_POST['firstdate']) &&isset($_POST['seconddate'])) {
            $firstdate = htmlentities(mysqli_real_escape_string($link, $_POST['firstdate']));
            $seconddate = htmlentities(mysqli_real_escape_string($link, $_POST['seconddate']));
            $firstdate = strtotime($firstdate);
            $seconddate = strtotime($seconddate);
            $sql_select = "Select * from meters_data_tech where time_server>$firstdate and time_server<$seconddate";
            $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
            $row = mysqli_fetch_array($result);
            if ($row != null) 
            {
                printf("<table><tr><th> meter_id</th><th> </th><th>time_server</th><th> </th><th>energy_a</th><th> </th></tr>");
                do {
                    printf("<tr><td>" . $row['meter_id'] . "</td><td><b></b></td><td>" . date('Y-m-d H:i:s', $row['time_server']) . "</td><td><b></b></td><td>" . $row['energy_a'] . " кВт*ч</td><td><b></b></td></tr>");
                } 
                while ($row = mysqli_fetch_array($result));
                print("Выбранный диапазон: " . date('Y-m-d', $firstdate) . " - " . date('Y-m-d', $seconddate) . '<br/>');
            } 
            else {
                print("Введите диапазон корректно");
            }
        }
        return $this->render('choosedate/choosedate.html.twig',array('params'=>$params));
    }
}
?>