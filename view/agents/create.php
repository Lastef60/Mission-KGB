<!--Formulaire pour creer un agent existant.-->

<h2>Ajouter un agent</h2>

<form method="POST" action="index.php?action=createAgent">
    <label for="nom">Nom</label>
    <input type="text" name="nom" required>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" required>
    <label for="date_naissance">Date de naissance</label>
    <input type="date" name="date_naissance" required>
    <label for="code_identification">Code d'identification</label>
    <input type="text" name="code_identification" required>
    <label for="nationalite">Nationalité</label>
    <input type="text" name="nationalite" required>
    <button type="submit">Ajouter</button>
</form>
