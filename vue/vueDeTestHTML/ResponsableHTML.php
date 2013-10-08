<?php
require_once 'GeneralHTML.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResponsableHTML
 *
 * @author eleve
 */
class ResponsableHTML {
     private $general;
    
    function __construct() {
       $this->general = new GeneralHTML();
    }  

    
    public function afficheLesResponsables ($tabElements){
        $this->general->getDebutPage("Affichage des responsables");
        
        $nb = count ($tabElements);
        
        for($i=0;$i<$nb;$i++ ){
            echo($tabElements[$i]["id"]." ". $tabElements[$i]["nom"]." "
                 .$tabElements[$i]["prenom"]."</br> ");            
        }
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    
    public function afficheFormInsertionResponsable(){
        $this->general->getDebutPage("Insertion d'un responsable");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché
        
        ?>
            <form action="do.php " method="GET">
                    Nom 
                    <input type="text" name="nom" size="20" ><BR/><BR/>
                    Prenom
                    <input type="text" name="prenom" size="20" ><BR/><BR/>
                    
                    <input type="hidden" name="action" value="insereResponsable">
                    <input type="submit" value="Envoyer" >
                    <input type="reset" value="Annuler" >
                </form>
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheFormModificationResponsable(){
        $this->general->getDebutPage("Modification d'un responsable");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché        
        ?>                    
                    <form action="do.php " method="GET">
                    Numéro de reponsable
                    <input type="text" name="id" size="20" ><BR/><BR/>
                    Nom
                    <input type="text" name="nom" size="20" ><BR/><BR/>
                    Prenom
                    <input type="text" name="prenom" size="20" ><BR/><BR/>
                    <input type="hidden" name="action" value="modifResponsable">
                    <input type="submit" value="Envoyer" >
                    <input type="reset" value="Annuler" >
                </form>
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheFormSuppressionResponsable(){
        $this->general->getDebutPage("Suppression d'un responsable");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché        
        ?>                    
                    <form action="do.php " method="GET">
                    Numéro de reponsable
                    <input type="text" name="id" size="20" ><BR/><BR/>                   
                    <input type="hidden" name="action" value="supprResponsable">
                    <input type="submit" value="Envoyer" >
                    <input type="reset" value="Annuler" >
                </form>
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheInsertResponsableOK(){
        $this->general->getDebutPage("Insertion OK");
        ?>
        Le responsable est bien insérée dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
     
    public function afficheInsertResponsableNonOK(){
        $this->general->getDebutPage("Insertion pas bien déroulée");
        ?>
        La responsable n'a pas été insérée dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheModifResponsableOK(){
        $this->general->getDebutPage("Modification OK");
        ?>
        La personne est bien modifié dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheModifResponsableNonOK(){
        $this->general->getDebutPage("Modification pas bien déroulée");
        ?>
        La responsable n'a pas été modifié dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheSupprResponsableOK(){
        $this->general->getDebutPage("Suppression OK");
        ?>
        La personne est bien supprimé dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheSupprResponsableNonOK(){
        $this->general->getDebutPage("Suppression non OK");
        ?>
        La personne n'est pas supprimé dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
}

?>
