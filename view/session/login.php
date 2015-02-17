<?php echo "Login!" ?>

<div class="container" style="width:300px">
  <form method="post" action="index.php?controller=session&action=create" class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <button class="btn btn-lg btn-primary btn-block" style="margin-top:20px" type="submit">Sign in</button>
  </form>
</div>
