    <?php include 'header.html'; ?>

    <div class="signin-form">
    <div class="container">

      <form class="form-signin" id="login-form" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name='inputEmail' class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="btn-login" type="submit">
        <span class="glyphicon glyphicon-log-in"></span>
        Sign in</button>
      </form>

    </div>
    </div>

    <?php include 'footer.html'; ?>