<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurModifResponsable
 *
 * @author eleve
 */
class ControleurModifResponsable {
    
    public function dispatch($vue, $modele, $tabParametres) {
    try {
            $ok = $modele->getResponsable()->modifUnResponsable($tabParametres["id"], $tabParametres["nom"], $tabParametres["prenom"]);
            $vue->getResponsable()->afficheModifResponsableOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheModifResponsableNonOK();
        }
    }
}

?>
