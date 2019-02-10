<?php 

class LoginModel
{

	public function connectUser($post){

		$database = new Database();

		$user = $database->queryOne('
			SELECT * FROM users WHERE Mail = ? ',

			[
				$post['mail']


			]);
		if($user != false && $this->verifyPassword($post['psw'], $user['Password']) == true ){

			$_SESSION['user']['id'] = $user['Id'];
			$_SESSION['user']['firstName'] = $user['FirstName'];
			$_SESSION['user']['lastName'] = $user['LastName'];
			$_SESSION['user']['nickName'] = $user['NickName'];
			$_SESSION['user']['mail'] = $user['Mail'];
			$_SESSION['user']['statue'] = $user['statue'];
			$_SESSION['user']['photoProfil'] = $user['photoProfil'];

		}
	}







 private function hashPassword($password)
    {

        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }

    private function verifyPassword($password, $hashedPassword)
	{
		return crypt($password, $hashedPassword) == $hashedPassword;
	}







}

















?>