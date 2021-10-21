<?php

class Cmodel {
    public function GetData(){
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg ',
        //     'TEXT' => 'Nulla morbi, adortwisu morbsed id, ardvestibulum dolor comac egestas lorem elit libero.'
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg ',
        //     'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque culpa.'    
        // );
            $mysqli = new mysqli('localhost', 'root', '', 'blogjegorbakunin');

            if(mysqli_connect_errno()) {
                print_f('Соединение не установлено...');
                exit();
            }

            $mysqli->set_charset('utf8mb4_general_ci');

            $query = "SELECT * FROM blogBakugan";

            $result = $mysqli-> query($query);
            $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        return $arrayResult;
    }
}