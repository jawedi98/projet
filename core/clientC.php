<?PHP
include "../config.php";
class clientC {
function afficherClient ($Client){
		echo "identifiant: ".$Client->getId()."<br>";
		echo "Nom: ".$Client->getNom()."<br>";
		echo "Prénom: ".$Client->getPrenom()."<br>";
		echo "téléphone: ".$Client->getTelephone()."<br>";
		echo "adresse mail: ".$Client->getAdresse()."<br>";
                echo "mot de passe: ".$Client->getPassword()."<br>";
                
	}

	function ajouterClient($Client){
		$sql="insert into clients (id,nom,prenom,adresse,telephone,password) values (:id, :nom, :prenom, :adresse, :telephone, :password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Client->getId();
        $nom=$Client->getNom();
        $prenom=$Client->getPrenom();
        $adresse=$Client->getAdresse();
        $password=$Client->getPassword();
        $telephone=$Client->getTelephone();
	
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':password',$password);
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients1(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SELECT * From Clients ORDER BY telephone";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherClients2(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SELECT * From Clients ORDER BY telephone DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherClients(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SElECT * From Clients";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($id){
		$sql="DELETE FROM Clients where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($Client,$id){
		$sql="UPDATE Clients SET id=:idd, nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone,password=:password WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Client->getId();
        $nom=$Client->getNom();
        $prenom=$Client->getPrenom();
        $adresse=$Client->getAdresse();
        $telephone=$Client->getTelephone();
        $password=$Client->getPassword();
        

           $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':telephone'=>$telephone, ':password'=>$password);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':password',$password);
		
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($id){
		$sql="SELECT * from Clients where id='".$id."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeClients($tarif){
		$sql="SELECT * from Client where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>