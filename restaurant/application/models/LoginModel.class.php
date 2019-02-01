<?php 



class LoginModel{

	function connectUser($post){

		$database = new Database();
		$login = $database->queryOne('SELECT * FROM Users WHERE Mail = ?',[$post['mail']]);

		if($this->verifyPassword($post['psw'],$login['Psw'])){


		$_SESSION['firstName'] = $login['FirstName'];
    	$_SESSION['lastName'] = $login['LastName'];
    	$_SESSION['BirthDate'] = $login['BirthDate'];
    	$_SESSION['Adress'] = $login['Adress'];
    	$_SESSION['City'] = $login['City'];
    	$_SESSION['PostalCode'] = $login['PostalCode'];
    	$_SESSION['Phone'] = $login['Phone'];
    	$_SESSION['Mail'] = $login['Mail'];
    	$_SESSION['Id'] = $login['Id'];



		

		}

	}



	private function verifyPassword($password, $hashedPassword)
	{
		return crypt($password, $hashedPassword) == $hashedPassword;
	}



}

























?>