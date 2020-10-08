<?php 

    class DB {

        // Property
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct ()
        {
            echo "function construct";
        }

        // Method
        public function selectData()
        {
            echo 'Select Data';
        }

        public function getDatabase()
        {
            return $this -> database;
        }
        
        public function tampil()
        {
            $this -> selectData();
        }

        public static function insertData()
        {
            echo "function static";
        }

    } 
    
    DB :: insertData();

    // $db = new DB;

    // $db -> selectData();

    // echo '<br>';

    // echo $db -> host;

    // echo '<br>';

    // echo $db -> getDatabase();

    // echo '<br>';

    // $db -> selectData();


?>