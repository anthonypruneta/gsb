<?php
/** 
 * Contient la division pour le sommaire, sujet à des variations suivant la 
 * connexion ou non d'un utilisateur, et dans l'avenir, suivant le type de cet utilisateur 
 * @todo  RAS
 */

?>
    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    <?php      
      if (estComptableConnecte() ) {
          $idUser = obtenirIdUserConnecte() ;
          $lgUser = obtenirDetailVisiteur($idConnexion, $idUser);
          $nom = $lgUser['nom'];
          $prenom = $lgUser['prenom'];            
    ?>
        <h2>
    <?php  
            echo $nom . " " . $prenom ;
    ?>
        </h2>
        <h3>Comptable</h3>        
    <?php
       }
    ?>  
      </div>  
<?php      
  if (estComptableConnecte() ) {
?>
        <ul id="menuList">
           
           <li class="smenu">
              <a href="cSeDeconnecter.php" title="Se déconnecter">Se déconnecter</a>
           </li>
           <li class="smenu">
              <a href="formValidFrais.php" title="Enregistrer l'opération">Enregistrer opération</a>
           </li>
           <li class="smenu">
               <a href="cSuiviPaiementFicheFrais.php" title="Valider Fiche de frais"> Valider une fiche de frais </a>
           </li>
          
         </ul>
        <?php
          // affichage des éventuelles erreurs déjà détectées
          if ( nbErreurs($tabErreurs) > 0 ) {
              echo toStringErreurs($tabErreurs) ;
          }
  }
        ?>
    </div>