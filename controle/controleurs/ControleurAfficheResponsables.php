<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurAfficheResponsables
 *
 * @author eleve
 */
class ControleurAfficheResponsables {
    
    public function dispatch($vue, $modele, $tabParametres) {
        try {
            //on va chercher les infos dans le modèle
            $result = $modele->getResponsable()->getLesResponsables();
            //on les affiche à la vue
            $vue->getResponsable()->afficheLesResponsables($result);
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheException($ex->getMessageErreur());
        }       
    }
}

?>
