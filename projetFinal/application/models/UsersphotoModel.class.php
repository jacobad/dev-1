<?php 

class UsersphotoModel
{

	public function addPhotoProfil($files,$session){

		//Je verifie que la valeur $_FILES de mon input file existe et si la clé name n'est pas vite 

		if(isset($files['photoProfil']) && !empty($files['photoProfil']['name']))
		{
			//je definis la taille maximal du fichier que peux envoyer l'utilisateur

			$tailleMax = 2097152;

			// je definis ensuite les types de fichier que l'utilisateur peux soumettre.

			$extensionsValides = array('jpg','jpeg','gif','png');

			//je teste si la taille du fichier est bon ou pas 

			if($files['photoProfil']['size'] <= $tailleMax)
			{
				//Je verifie l'extension du fichier uploader

				$extensionUpload = strtolower(substr(strrchr($files['photoProfil']['name'], '.'),1));

				// je verifie si l'extension uploader fait partie des extensions valides.
				if(in_array($extensionUpload, $extensionsValides))
				{
					// je crée le chemin vers lequel sera upload la photo de profil de l'utilisateur

					$chemin = "membres/photoprofil/".$session['user']['id'].".".$extensionUpload ; 
					
					// je deplace le fichier de son emplacement temporaire dans le serveur à l'endroit ou je veux qu'il soit stocké.

					$move = move_uploaded_file($files['photoProfil']['tmp_name'], $chemin);

					//je teste si le fichier a bien été importer dans le dossier spécifié.

					if($move)
					{
						$database = new Database ();

						$database->executeSql('UPDATE users SET photoProfil = ? WHERE id=?',
							[
								$session['user']['id'].".".$extensionUpload ,
								$session['user']['id']



							]);


						$user = $database->queryOne('
							SELECT * FROM users WHERE Id = ? ',

							[
								$session['user']['id']


							]);

						$_SESSION['user']['id'] = $user['Id'];
						$_SESSION['user']['firstName'] = $user['FirstName'];
						$_SESSION['user']['lastName'] = $user['LastName'];
						$_SESSION['user']['nickName'] = $user['NickName'];
						$_SESSION['user']['mail'] = $user['Mail'];
						$_SESSION['user']['statue'] = $user['statue'];
						$_SESSION['user']['photoProfil'] = $user['photoProfil'];


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


		public function editPhotoProduct($files,$session){

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

					$chemin = "membres/photoProduct/".$session['user']['id'].".".$extensionUpload ; 
					
					// je deplace le fichier de son emplacement temporaire dans le serveur à l'endroit ou je veux qu'il soit stocké.

					$move = move_uploaded_file($files['photoProduct']['tmp_name'], $chemin);

					//je teste si le fichier a bien été importer dans le dossier spécifié.

					if($move)
					{
						$database = new Database ();

						$database->executeSql('UPDATE products SET PhotoProduct = ? WHERE Id=?',
							[
								$session['user']['id'].".".$extensionUpload ,
								$session['user']['id']



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

						$database->executeSql('INSERT INTO product(ProductPhoto,user_Id,ProductDescription,ProductName) VALUES(?,?,?,?) ',
							[
							
								$files['photoProduct']['name'],
								$session['user']['id'],
								$post['productDescription'],
								$post['productName']




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