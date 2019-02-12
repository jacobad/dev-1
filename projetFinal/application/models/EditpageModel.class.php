<?php 


class EditpageModel{


	public function addproduit ($post,$session){

		if(isset($post['photoProduct']) && !empty($post['photoProduct']))
		{
			//je definis la taille maximal du fichier que peux envoyer l'utilisateur

	

			//je teste si la taille du fichier est bon ou pas 

			

				

				// je verifie si l'extension uploader fait partie des extensions valides.
				
					$chemin = "membres/photoProduct/".$post['photoProduct'] ;
					
					// je deplace le fichier de son emplacement temporaire dans le serveur à l'endroit ou je veux qu'il soit stocké.

					$move = move_uploaded_file($post['photoProduct'], $chemin);

					//je teste si le fichier a bien été importer dans le dossier spécifié.

					
						$database = new Database ();

						$database->executeSql('INSERT INTO products(ProductPhoto,user_Id,ProductPrice,ProductQuantity,ProductName) VALUES(?,?,?,?,?) ',
							[
							
								$post['photoProduct'],
								$session['user']['id'],
								$post['ProductPrice'],
								$post['ProductQuantity'],
								$post['ProductName']





							]);


				
			


		}


	}

	}
}


















?>