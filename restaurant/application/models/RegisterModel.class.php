<?php 


class RegisterModel{

	function addUser($_post){

		$database = new Database();
		$info = $database->executeSql('INSERT INTO Users( FirstName, LastName, BirthDate, Adress, City,PostalCode, Phone, Mail, Psw, CreationTimeStamps)Values (?,?,?,?,?,?,?,?,?, NOW())', [ $_post['firstName'],$_post['lastName'],$_post['birthYear'].'-'.$_post['birthMonth'].'-'.$_post['birthDay'], $_post['adress'],$_post['ville'],$_post['postalCode'],$_post['phone'],$_post['mail'],$this->hashPassword($_post['psw']) ]);
		
	}

	private function hashPassword($password)
    {

        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }




}


















?>