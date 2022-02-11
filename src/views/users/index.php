
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>


<div class="container">

 <form method="post" action="users/search">
    <div class="my-3 col-md-4">
    <input type="text"  name="name" class="form-control" placeholder="enter username">
    <input class="btn btn-primary mt-1" type="submit"  value="Search">
    </div>

  </form>

    <button class="btn btn-primary my-3" type="submit" name="add">
        <a class="text-light text-decoration-none" href="users/create">Create New user</a>
    </button> 


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">show</th>
      <th scope="col">update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php if(!empty($rows)): ?>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td>
                    <button class="btn btn-success">
                        <a  href="../users/show/<?= $row['id'] ?>"class="text-light text-decoration-none">Show</a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-primary">
                        <a href="../users/edit/<?= $row['id'] ?>" class="text-light text-decoration-none">Update</a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger">
                        <a href="../users/destroy/<?= $row['id'] ?>" class="text-light text-decoration-none">Delete</a>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">
                        NO DATA
                    </td>
                </tr>
            <?php endif; ?>
   
 </tbody>
</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>