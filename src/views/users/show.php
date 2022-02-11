<h1>home show page</h1>
<a href="../create">create new home</a>
<table border="1">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      
    </tr>
  </thead>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["username"] ?></td>
        <td><?= $row["password"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["gender"] ?></td>
    </tr>
</table>