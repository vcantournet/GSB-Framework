<?php


/**
 * Description of GeneralHTML
 *
 * @author Fabrice Missonnier
 */
class GeneralHTML {
     public function getDebutPage($titrePage){
        ?>  
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title> <?php echo ($titrePage); ?> </title>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            </head>
            
            <body>
        <?php
    }
    
    public function getFinPage(){
        ?>  
            </body>
            </html>
        <?php
    }

    public function getRetourAccueil (){
        ?>    
            <BR/><BR/>
            <A href="do.php?action=index">Retourner à l'accueil </A> <BR/>
            <BR/>
        <?php  
    }
    
    public function afficheIndex(){
        $this->getDebutPage("Framework GSB-PHP");
        ?>          
           <a href="do.php?action=afficheResponsables"> Visualiser responsable</a><BR/>
           <a href="do.php?action=afficheFormInsereResponsable"> Insérer responsable</a><BR/>
           <a href="do.php?action=afficheFormModifResponsable"> Modifier responsable</a><BR/>
           <a href="do.php?action=afficheFormSupprResponsable"> Supprimmer responsable</a><BR/>
           <a href="do.php?action=testModele"> Test</a><BR/>
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheActionVideNonReconnue(){
        $this->getDebutPage("Erreur");
        ?>
            Vous tentez d'afficher une page non reconnue <BR/>
            <a href="do.php?action=index"> 
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheException ($texte){
        $this->getDebutPage("Erreur");?>
        Erreur dans la page :
        <?php
        echo ($texte);
        $this->getRetourAccueil();
        $this->getFinPage();
    }
}

?>
