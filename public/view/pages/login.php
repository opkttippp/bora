<?php
include_once "src/user/admin.php";

if (!empty($_POST['login'])) {
    $s = new sess();
    $s->log($user);
}
?>
<div class="container-home">
  <div class="login">
    <div><h2>Log in</h2></div>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Login</label>
        <label for="Login"></label>
        <input type="text" class="form-control" id="Login" name="login">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <label for="Password"></label>
        <label for="Pass"></label>
        <input type="password" class="form-control" id="Pass" name="Pass">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>



