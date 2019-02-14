<?php 


class EditpageModel{

	public function recupPhoto($session)
	{
		$database = new Database ();
		$produit = $database->query('SELECT * FROM product where user_Id = ? ',[$session['user']['id']]);

		return $produit ;
	}

	public function defineProductPosition ($post){

		$database = new Database ();
		$produit = $database->executeSql('UPDATE product SET PositionX=?,
			PositionY=? WHERE Id=?',
			[

				$post['positionX'],
				$post['positionY'],
				$post['id']

			]);
	} 

		
	public function addPhotoProduct($files,$session,$post){

			//Je verifie que la valeur $_FILES de mon input file existe et si la clé name n'est pas vite 

			if(isset($files['photoProduct']) && !empty($files['photoProduct']['name']))
			{
				//je definis la taille maximal du fichier que peux envoyer l'utilisateur

				$tailleMax = 2097152;

				// je definis ensuite les types de fichier que l'utilisateur peux soumettre.

				$extensionsValides = array('jpg','jpeg','gif','png');

				//je teste si la taille du fichier est bon ou pas 

				if($files['photoProduct']['size'] <= $tailleMax)
				{
					//Je verifie l'extension du fichier uploader

					$extensionUpload = strtolower(substr(strrchr($files['photoProduct']['name'], '.'),1));

					// je verifie si l'extension uploader fait partie des extensions valides.
					if(in_array($extensionUpload, $extensionsValides))
					{
						// je crée le chemin vers lequel sera upload la photo de profil de l'utilisateur

						$chemin = "membres/photoProduct/".$files['photoProduct']['name'].".".$extensionUpload ; 
						
						// je deplace le fichier de son emplacement temporaire dans le serveur à l'endroit ou je veux qu'il soit stocké.

						$move = move_uploaded_file($files['photoProduct']['tmp_name'], $chemin);

						//je teste si le fichier a bien été importer dans le dossier spécifié.

						if($move)
						{
							$database = new Database ();

							$database->executeSql('INSERT INTO product(ProductPhoto,user_Id,ProductDescription,ProductName,ProductPrice,ProductQuantity) VALUES(?,?,?,?,?,?) ',
								[
								
									$files['photoProduct']['name'],
									$session['user']['id'],
									$post['productDescription'],
									$post['productName'],
										$post['ProductPrice'],
									$post['ProductQuantity'],
									




								]);

						}
						else
						{
							echo 'il y\'a eu un problème lors du telechargement de votre fichier';

						}

					}
					else
					{
						echo 'votre photo doit etre au format jpg,jpeg,gif ou png';
					}
				}
				else
				{
					echo ' votre photo de profil ne doit pas dépasser 2MO';
				}



			}


		}





	
}


















?>