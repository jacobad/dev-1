<?php 

class ElementsModel
{

	public function addText($post,$session){

		$database = new Database;

		$database->executeSql('INSERT INTO `text`(`Text`,User_Id) VALUES(?,?)',


			[

				$post['Text'],
				$session['user']['id']


			]);

	}

	public function updateText($post,$session){

		$database = new Database;

		$database->executeSql('UPDATE `text` SET PositionX = ?, PositionY = ? WHERE user_Id=?',


			[

				$post['positionX'],
				$post['positionY'],
				$session['user']['id']


			]);

	}



		public function recupText($session)
	{

		$database = new Database ();
		$text = $database->query('SELECT * FROM `text` where user_Id = ? ',[$session['user']['id']]);

		return $text;

	}

}




?>