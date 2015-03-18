<?php
	include_once ('db.php');
	class manageUser{
		public $link;

		function __construct(){
			$db_connection= new dbConnection();
			$this->link= $db_connection->connect();
		}

		function registerUsers($username,$email,$password,$ip_address,$time,$date){
			$query= $this->link->prepare("INSERT INTO users(username,email,password,ip_address,reg_date,reg_time) VALUES(?,?,?,?,?,?)");
			$value=array($username,$email,$password,$ip_address,$time,$date);
			$query->execute($value);
			$counts= $query->rowCount();
		    return $counts;
		}	
		/*function loginUser($username, $password){
			$query=$this->link->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
			$rowcount=$query->rowCount();
			if($rowcount == 1){
				$result =$query->fetchAll();
				return $result;
			}
			else return $rowcount;
		}*/
		function GetUserInfo($username){
			$query=$this->link->query("SELECT * FROM users WHERE username='$username'") ;
			$rowcount=$query->rowCount();
			if($rowcount== 1){
				$result =$query->fetchAll();
				return $result;
			}
			else return $rowcount;
		}
	}
?>