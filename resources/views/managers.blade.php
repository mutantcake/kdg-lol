
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <Style>
        body{
            text-align: center;
        }

    </Style>
</head>
<body>
<h1 style="color: #BA3B0A;">Listes des managers du système</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nom et Prénom</th>
        <th scope="col">Telephone</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <td colspan="1">John Doe</td>
        <td>12345678</td>
        <td>ouloulou@kirkata.com</td>
        <td>
          <button class="btn btn-warning">Modifier</button>
          <button class="btn btn-danger">Supprimer</button>
        </td>
      </tr>
        <td colspan="1">Bob Johnson</td>
        <td>45678912</td>
        <td>lourdboubou@test.king</td>
        <td>
          <button class="btn btn-warning">Modifier</button>
          <button class="btn btn-danger">Supprimer</button>
        </td>
      </tr>

    </tbody>
  </table>
  <footer>
    <p style="color: #FFA458;">Copyright ©2023 | La nuit du rire 🤣</p>
</footer>
</body>

</html>
