<?php 

class ElementsModel
{

	public function addText($post,$session){

		$database = new Database;

		$database->executeSql('INSERT INTO `Text`(`Text`,User_Id) VALUES(?,?)',


			[

				$post['Text'],
				$session['user']['id']


			]);

	}
}




?>