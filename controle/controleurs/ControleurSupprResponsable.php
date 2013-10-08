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
class ControleurSupprResponsable implements ControleurInterface {
    
    public function dispatch($vue, $modele, $tabParametres) {
        // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
        try {
            $ok = $modele->getResponsable()->supprUnResponsable($tabParametres["id"]);
            $vue->getResponsable()->afficheSupprResponsableOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheSupprResponsableNonOK();
        }
    }
}

?>
