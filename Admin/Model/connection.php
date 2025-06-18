<?php 

	
    class connection{
        var $mysqli;
        function __construct()
        {
            //Thong so ket noi CSDL
            $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="web_mycay";
 
            //Tao ket noi CSDL
            $this->mysqli = new mysqli($severname,$username,$password,$db_name);
            $this->mysqli->set_charset("utf8");

            //check connection
            if ($this->mysqli->connect_error) {
		        die("Connection failed: " . $this->mysqli->connect_error);
		    }
        }

    }
?>