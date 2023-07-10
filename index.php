<?php
include_once("./config.php");
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = htmlspecialchars(trim(filter_input(INPUT_POST, 'password')));

if (isset($_SESSION["id"])) {
  header("Location: ./dashboard.php");
}



$error = $error1 = null;

$user = new Users();

if (isset($_POST['submit'])) {
  if (empty($email)) {
    $error = true;
  }
  if (empty($password)) {
    $error1 = true;
  }
  $getData = $user->loginData($_POST);
  if ($getData) {
    // header("Location: ./dashboard.php");
  } else {
    $err = "<p class='alert alert-danger' role='alert'>Incorrect Email or Password </p>";
  }
}
$emailErr = "";
$validatePassword = "";
if (isset($_POST['submit'])) {
  $validation = new UserValidator($_POST);
  $errors = $validation->validateForm();
  $validation->login($user, $validation->data);

  $validateEmail = $errors['email'] ?? '';
  $emailErr = "<p class='alert alert-danger'> $validateEmail </p>";
  $validatePassword = $errors['password'] ?? '';
  $invalidErr = $errors['invalid'] ?? '';
  var_dump($invalidErr);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Login Page</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Vendor CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="  css/cs-style.css" rel="stylesheet" />

  <!-- Template Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
  <main class="sign-in-backgroundcolor">
    <section class="section vh-100 d-flex align-items-lg-center justify-content-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 sign-in-image position-relative">
            <img src="./images/auth.png" alt="" class="w-100" />
          </div>
          <div class="col-lg-6 bg-white p-5 d-flex flex-column justify-content-center">
            <div class="sign-in-title text-center">
              <h2 class="h4 mb-3">Welcome Back!</h2>
              <h4 class="h4 mb-3">Sign In</h4>
            </div>
            <form class="sign-in-form px-lg-5" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
              <?php echo $invalidErr ?? ''; ?>
              <!-- <?php echo isset($err) ? $err : null; ?> -->
              <div class="form-group">
                <input type="email" class="form-control mb-3 py-2" name="email" placeholder="name@example.com"
                  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email; ?>" />
                <div class="error">
                  <?php echo $emailErr ?>
                </div>
                <!-- <?php if ($error == true) {
                        echo "<p class='alert alert-danger' role='alert'> Invalid Email </p>";
                      } ?> -->
              </div>
              <div class="form-group">
                <input type="password" class="form-control mb-3 py-2" name="password" placeholder="Enter your password"
                  id="exampleInputPassword1" value="<?php echo $password; ?>" />
                <div class="error">
                  <?php echo $validatePassword ?? ''; ?>
                </div>
                <!-- <?php if ($error1 == true) {
                        echo "<p class='alert alert-danger' role='alert'> Invalid Password </p>";
                      } ?> -->
              </div>
              <div class="forgot-password">
                <h4 class="h5 text-end pb-2">Forgot password?</h4>
              </div>
              <button type="submit" class="w-100 text-white" name="submit">Sign In</button>
              <div class="headline pt-3">
                <p>OR</p>
              </div>
              <div class="sign-in-google d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                  <defs>
                    <path id="a"
                      d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                  </defs>
                  <clipPath id="b">
                    <use xlink:href="#a" overflow="visible" />
                  </clipPath>
                  <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                  <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                  <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                  <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                </svg>
                <h3>Sign in with google</h3>
              </div>
              <div class="last-title text-center pt-3">
                <h2 class="h6">Don’t have an account?</h2>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>