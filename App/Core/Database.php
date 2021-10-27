<?php

namespace App\Core;
use msqli;

class Database{

    public $conn;
    public $ten_may_chu = 'localhost';
	public $ten_tai_khoan = 'root';
	public $mat_khau = '';
	public $database = 'smartphone';

	
	
    function __construct()
    {
        $this->conn = mysqli_connect($this->ten_may_chu, $this->ten_tai_khoan,$this->mat_khau,$this->database) or die ("Không kết nối được");
        $this->conn->set_charset("utf-8");
    }

}

?>