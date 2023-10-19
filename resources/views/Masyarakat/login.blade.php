<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        /* background-image:linear-gradient(rgb(197, 7, 255), rgb(243, 243, 243)); */
    background-color: #ffffff;      
        height: 100vh;
        font-family: Arial, sans-serif;

        background-size: 100%;

    }

    .container {
        width: 400px;
        margin: 100px auto;

        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgb(0, 0, 0);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #000000;
    }

    form {

        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 50px;
    }

    label {
        margin-top: 20px;
        font-weight: bold;
        color: #000000;
    }

    input[type="text"],
    input[type="password"] {

        padding: 10px;
        border: none;
        border-bottom: 1px solid #ddd;
        width: 100%;
        font-size: 16px;
        color: #000000;
        border-radius: 16px;
        box-shadow: #000000;
        
    }

    button[type="submit"] {
        margin-top: 30px;
        padding: 10px 20px;
        background-color: #05a9f5;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    button[type="submit"]:hover {
        background-color: #ffffff;
        color: #05a9f5;
        border: 1px solid #05a9f5;
    }
</style>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Sign in</h3>
      
                  <div class="form-outline mb-4">
                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX-2">Password</label>
                  </div>
      
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                  </div>
      
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                  <p>does not have an accout?<a href="registrasi">buat akun</a></p>
      
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>