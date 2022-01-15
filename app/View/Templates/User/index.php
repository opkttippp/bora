<?php
//if (isset($_SESSION['name'])) {
//echo "<pre>";
//print_r($_SESSION);
//}
//?>
<div class="container-home">
  <div class="login">
    <div class="d-flex flex-column align-items-center text-center">
      <img src="<?php echo $_SESSION['image']; ?>" alt="image" class="rounded-circle" width="150">
    </div>
    <hr>
    <form action="/user/new" method="post" enctype="multipart/form-data" style="padding-bottom: 50px">
      <div class="mb-3">
        <input type="file" name="attachment" accept=".jpg, .jpeg, .png">
      </div>
      <hr>
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="<?php echo $_SESSION['name']; ?>" size="100">
      </div>
      <div class="mb-3">
        <label class="form-label" for="surname">Surname</label>
        <input type="text" class="form-control" name="surname" placeholder="<?php echo $_SESSION['surname']; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="pass">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Ввести новый пароль">
      </div>
      <div class="mb-3">
        <label class="form-label" for="email">email</label>
        <input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['email']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>