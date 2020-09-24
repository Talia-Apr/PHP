<?php 

    class DB {

        // Property
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        // Method
        public function selectData()
        {
            echo 'select data';
        }

        public function getDatabase()
        {
            echo $this -> database;
        }
        
        public function tampil()
        {
            $this -> selectData();
        }

    }  

    $db = new DB;

    $db -> selectData();

    echo '<br>';

    echo $db -> host;

    $db -> getDatabase;

    $db -> selectData;


?>