<?php
require_once 'ControleurInterface.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurInsereResponsable
 *
 * @author eleve
 */
class ControleurInsereResponsable implements ControleurInterface {
    
    public function dispatch($vue, $modele, $tabParametres) {
        // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
        try {
            $ok = $modele->getResponsable()->setUnResponsable($tabParametres["nom"], $tabParametres["prenom"]);
            $vue->getResponsable()->afficheInsertResponsableOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheInsertResponsableNonOK();
        }
    }
}

?>
