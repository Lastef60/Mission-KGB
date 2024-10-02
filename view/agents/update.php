<!--Formulaire pour modifier un agent existant.-->

<h2>Modifier l'agent</h2>

<form method="POST" action="index.php?action=updateAgent&id=<?= $agent['id'] ?>">
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="<?= $agent['nom'] ?>" required>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" value="<?= $agent['prenom'] ?>" required>
    <label for="date_naissance">Date de naissance</label>
    <input type="date" name="date_naissance" value="<?= $agent['date_naissance'] ?>" required>
    <label for="code_identification">Code d'identification</label>
    <input type="text" name="code_identification" value="<?= $agent['code_identification'] ?>" required>
    <label for="nationalite">Nationalité</label>
    <input type="text" name="nationalite" value="<?= $agent['nationalite'] ?>" required>
    <button type="submit">Modifier</button>
</form>
