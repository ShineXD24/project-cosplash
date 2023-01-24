<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="/css/login.css" rel="stylesheet">
</head>
<style>
  /* fonts*/
  text{
    font-family: 'Open Sans';
  }
  /* Split the screen in half */
  .split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
  }

  /* Control the left side */
  .left {
    left: 0;
    display: block;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(#8D9EFF, #B9E0FF);
  }

  /* Control the right side */
  .right {
    right: 0;
    display: flex;
    background-image: url('/img/yanto.png');
    background-size: cover;
  }

  /* If you want the content centered horizontally and vertically */
  .centered {
    
    width: fit-content;
    /* background-image: url('/img/yanto.img'); */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  /* Style the image inside the centered container, if needed */
  .centered img {
    width: 100%;
    border-radius: 50%;
  }



  .form-signin {
    /* width:fit-content; */
    max-width: 360px;
    align-items: center;


  }


  .form-signin input[type="email"] {
    margin-bottom: -1px;

    border-bottom-right-radius: 15;
    border-bottom-left-radius: 15;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-radius: 15;

  }
  .quote{
    font-size: 3;
  }

  .btn-warning {
    background-color: #FFF;
    color: #7B93FF;

    border-radius: 25px;
  }
</style>

<body>
  <div class="split left">
    <div class="centered">
      <div class="form-signin w-100 p-500">
        <form action="/login/login" method="POST">
          @csrf
          <br>
          <h1 class="h3 mb-3 fw-bold text-dark">Create an acoount</h1>
          <p class="quote">Unlock a world of cosplay costumes with Cosplash</p>
          <br>
      
                <br>
                <div class="form-floating">
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <br>

          <div class="mt-2 mb-2 text-end text-dark">
            <a href="#">Forgot Password?</a>
          </div>
          <button class="btn w-100" class="btn" style="background-color: #7B93FF; color: white;" type="submit">Login</button>
          <div class="mt-3 text-center text-dark">
            <p>Don't have an account? <a href="/register/all">Register</a></p>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="split right">

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>