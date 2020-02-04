<?php include 'template/header2.php'; ?>

<h4>Contact</h4>

<form class="right" method="get">
    <input class="input"  type="radio">Mme / <input type="radio">M
    <input class="input"  type="text" name="prenom" placeholder="Prénom"/>
    <input class="input"  type="text" name="nom" placeholder="Nom"/> <br>
    <input class="input"  type="text" name="email" placeholder="adresse e-mail"/>   
    <br />
    J'ai connu ce site grâce à :      
    <select name="profil" >
        <option value="" disabled selected hidden>Choisir</option>
        <option value="facebook">Facebook</option>
        <option value="twitter">Twitter</option>
        <option value="google">Google</option>
        <option value="Bouche a oreilles">Bouche a oreilles</option>
        <option value="JT de Jean-Pierre Pernault">JT de Jean-Pierre Pernault</option>
        <option value="Autre">Autre</option>

    </select> <br> <br> 
    <p>Pour laisser un commentaire libre à propos d'Oclock c'est par ici :</p>
    <textarea name="text-area" id="" cols="50" rows="10">Votre message..</textarea>

   

        <br>
        <input type="checkbox" name="conditions" value="ok" /> 
        Je certifie la véracité de ces informations. <br>
        
        Ajoutez un fichier : <input type="file" name="fichier" value="Parcourir..." /> <br>

        <button type="submit">Envoyer</button>

        <a href="index.php" class="backHome">Back to home</a>
</form>

