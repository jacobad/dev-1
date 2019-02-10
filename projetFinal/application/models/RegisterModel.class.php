<?php 


class RegisterModel
{

	public function addUser($post){

		$database = new Database();

		$database->executeSql(
			'INSERT INTO users(FirstName,LastName,	NickName,Mail,	Password,CreationTimeStamp,statue) Values(?,?,?,?,?,NOW(),statue) ',
			[
				$post['firstName'],
				$post['lastName'],
				$post['nickName'],
				$post['mail'],
				$this->hashPassword($post['password'],
				$post['statue']
			)







			]);
	}
		private function hashPassword($password)
    {

        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }



























}
































?>