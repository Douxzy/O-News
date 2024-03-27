<main class="right">
    <h2 class="right__title">Nous contacter</h2>
    <div class="posts">
        <div class="post post--solo">
        <section>
        <p>Et vous montrer ça aussi</p>
        <p>je certifie la véracité de ces informations.</p>
        <fieldset>
        <legend>Identité</legend>
        <label for="radio">Je suis</label>
        <input type="radio" name="civilite" value="Madame" />
        <label for="Madame" class="radio-inline">Madame</label>
        <input type="radio" name="civilite" value="Monsieur" />
        <label for="Monsieur" class="radio-inline">Monsieur</label>

        <form action="#" method="POST">

        
        <label for="prenom">Prénom</label>
            <input type="text" name="prenom" placeholder="Entre votre Prénom..." required>
        
        <label for="nom">Et mon nom</label>
            <input type="text" name="Nom" placeholder="Entre votre Nom..." required>

        <label for="select">J'ai connu ce site grâce à</label>
            <select name="select">
            <option value="choisir">choisir</option>
            <option value="Facebook">Facebook</option>
            <option value="Twitter">Twitter</option>
            <option value="Google">Google</option>
            <option value="Bouche à oreilles">Bouche à oreilles</option>
            <option value="JT de 13h ">JT de 13h de Jean-Pierre Pernault</option>
            <option value="Autre">Autre</option>
            </select>
        <legend>Messsage</legend>

            <label for="email">Repondez-moi via</label>
        <input type="text" name="email" placeholder="Entre votre E-mail...">

            <label for="msg">je voulais vous dire que</label>
        <textarea id="msg" name="msg" rows="5" cols="33" placeholder="Votre message..."></textarea>
        
            <input type="file" name="fichier" accept="image/png, image/jpeg" />

        <input type="submit" value="Contacter !" name="ok">
        </form>
        </fieldset>
        </section>
        <a href="index.php" class="post__link">back to home</a>
        </div>
    </div>
</main>