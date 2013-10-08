<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurAfficheFormModifResponsable
 *
 * @author eleve
 */
class ControleurAfficheFormModifResponsable {
    public function dispatch($vue, $modele, $tabParametres) {
        //On n'affiche ici que le formulaire (on ne va rien chercher 
        //dans le modèle
        $vue->getResponsable()->afficheFormModificationResponsable();
    }
}

?>
