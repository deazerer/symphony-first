<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class StressController extends  AbstractController
{
    public function display() : Response
    {
        $host = 'localhost';
        $database = 'symfony-project';
        $user = 'root';
        $password = '';

        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

        $sql_select = "Select * From meters_data_tech where time_server >1606824000";

        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        printf("<table><tr><th> meter_id</th><th> </th><th>time_server</th><th> </th><th>energy_a</th><th> </th><th>u1</th><th> </th><th>u2</th><th> </th><th>u3</th><th> </th></tr>");
        do {
            printf("<tr><td>" . $row['meter_id'] . "</td><td><b></b></td><td>" . date('Y-m-d H:i:s', $row['time_server']) . "</td><td><b></b></td><td>" . $row['energy_a'] . " кВт*ч</td><td><b></b></td><td>" . $row['u1'] . "</td><td><b></b></td><td>" . $row['u2'] . "</td><td><b></b></td><td>" . $row['u3'] . "</td><td><b></b></td></tr>");
        } while ($row = mysqli_fetch_array($result));
        $sql_select="select meters_data_tech.meter_id, meters_data_tech.time_server, min(meters_data_tech.minimum) as min_u_value from(
    select meter_id, time_server, u1 as minimum from meters_data_tech where time_server>1638316800
    union all
    select meter_id, time_server, u2 as minimum from meters_data_tech where time_server>1638316800
    union all
    select meter_id, time_server, u3 as minimum from meters_data_tech where time_server>1638316800
)meters_data_tech
group by meters_data_tech.meter_id";
        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        print ("Минимальное напряжение за месяц ".$row['min_u_value']." Дата:".date('Y-m-d H:i:s', $row['time_server']));
        $sql_select="select meters_data_tech.meter_id, meters_data_tech.time_server, max(meters_data_tech.maximum) as max_u_value from(
    select meter_id, time_server, u1 as maximum from meters_data_tech where time_server>1638316800
    union all
    select meter_id, time_server, u2 as maximum from meters_data_tech where time_server>1638316800
    union all
    select meter_id, time_server, u3 as maximum from meters_data_tech where time_server>1638316800
)meters_data_tech
group by meters_data_tech.meter_id";
        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        print ("<br/>Максимальное напряжение за месяц ".$row['max_u_value']." Дата:".date('Y-m-d H:i:s', $row['time_server']));
        $sql_select="Select (avg(u1)+avg(u2)+avg(u3))/3 as avg_u_value from meters_data_tech
where time_server>1638316800";
        $result = mysqli_query($link, $sql_select) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_array($result);
        print ("<br/>Среднее напряжение за месяц ".$row['avg_u_value']);
        return $this->render('stress/stress.html.twig');
    }
}