<!--Page qui liste tous les agents.-->

<h2>Liste des agents</h2>

<a href="index.php?action=createAgent">Ajouter un agent</a>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Code d'identification</th>
            <th>Nationalité</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($agents as $agent): ?>
        <tr>
            <td><?= $agent['nom'] ?></td>
            <td><?= $agent['prenom'] ?></td>
            <td><?= $agent['date_naissance'] ?></td>
            <td><?= $agent['code_identification'] ?></td>
            <td><?= $agent['nationalite'] ?></td>
            <td>
                <a href="index.php?action=updateAgent&id=<?= $agent['id'] ?>">Modifier</a>
                <a href="index.php?action=deleteAgent&id=<?= $agent['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
