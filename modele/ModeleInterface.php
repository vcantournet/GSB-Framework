<?php

/**
 *
 * @author Fabrice Missonnierlocal
 */
interface ModeleInterface {
    public function getResponsable();        
}

function getLesResponsables(){
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
            $tabElem[$i]["prenom"] = $enregistrement->prenom;            
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

?>
