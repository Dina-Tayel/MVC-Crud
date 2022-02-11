
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <div class="container my-5  ">
    <form class="border col-md-8 p-4 "  method="POST" action="../update">
    <div class="mb-3 col-md-4">
    <input type="hidden"  name="id" class="form-control" value="<?= $row['id'] ?>">
    </div>
    <div class="mb-3 col-md-4">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text"  name="username" class="form-control" value="<?= $row['username'] ?>">
    </div>
    <div class="mb-3 col-md-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value="<?= $row['password'] ?>">
  </div>
  <div class="mb-3 col-md-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>" >
     </div>
 
  <div class="mb-3 col-md-4">
    <label class="form-check-label" for="exampleCheck1">Your Gender</label>
  </div>
  <div class="mb-3 col-md-4">
    <label class="form-check-label" for="exampleCheck1">Female</label>
    <input type="radio" value="female" name="gender" <?php if($row['gender']=='female'): ?> checked <?php endif; ?>  >
  </div>
  <div class="mb-3 col-md-4">
    <label class="form-check-label" for="exampleCheck1">Male</label>
    <input type="radio" value="male" <?php if($row['gender']=='male'): ?> checked <?php endif; ?>  name="gender">
  </div>
  <button type="submit"  value="submit" class="btn btn-primary">Add User</button>
</form>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>