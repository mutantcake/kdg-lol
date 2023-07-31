
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h1 style="color: #BA3B0A;">Listes des demandes de réservations</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nº Ordre</th>
        <th scope="col">Nom et Prénom</th>
        <th scope="col">Telephone</th>
        <th scope="col">Type de Place</th>
        <th scope="col">Nb de place</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <th scope="row">1</th>
            <td colspan="1">John Doe</td>
            <td>12345678</td>
            <td>VIP</td>
            <td>2</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td colspan="1">Alice Smith</td>
            <td>98765432</td>
            <td>Régulière</td>
            <td>4</td>
            <td>
                <span class="badge text-bg-secondary">Confirmée</span>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="1">Bob Johnson</td>
            <td>45678912</td>
            <td>VIP</td>
            <td>1</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td colspan="1">Emma Williams</td>
            <td>78945612</td>
            <td>VIP</td>
            <td>3</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td colspan="1">Michael Brown</td>
            <td>32165498</td>
            <td>Régulière</td>
            <td>2</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td colspan="1">Sophia Martin</td>
            <td>65498712</td>
            <td>VIP</td>
            <td>1</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td colspan="1">William Davis</td>
            <td>15935728</td>
            <td>Régulière</td>
            <td>5</td>
            <td>
                <a href="page_confirmation.html" class="btn btn-success">Confirmer</a>
                <a href="page_suppression.html" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>
<footer>
    <p style="color: #FFA458;">Copyright ©2023 | La nuit du rire 🤣</p>
</footer>
</body>
</html>
