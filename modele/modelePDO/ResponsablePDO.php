<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResponsablePDO
 *
 * @author eleve
 */
class ResponsablePDO {
    
    public function getLesResponsables(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Responsable");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while( $enregistrement )
        { 
            $tabElem[$i]["id"] = $enregistrement->id;
            $tabElem[$i]["nom"] = $enregistrement->nom;
            $tabElem[$i]["prenom"] = $enregistrement->prenom ;            
            $enregistrement = $select->fetch();
            $i++;
        }
       
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
    
   
    public function setUnResponsable($nom, $prenom){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $req2 = "INSERT INTO Responsable (nom, prenom) VALUES
            ('".$nom."', '".$prenom."');";
        
        $res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
    
    public function modifUnResponsable($id, $nom, $prenom){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $req2 = "UPDATE Responsable SET nom = '".$nom."', prenom = '".$prenom."' WHERE id = ".$id;
        
        $res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
    
    public function supprUnResponsable($id){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $req2 = "DELETE FROM Responsable WHERE id = ".$id;
        
        $res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
    
}

?>
