<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<style>
    h1{
        margin-bottom: 10px;
    }
</style>
<body>
	
  <section class="vh-100" style="background-color: #8a00e6;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-10 col-md-8 col-lg-6 col-xl-5">
			  <div class="card shadow-5-strong" style="border-radius: 1rem;">
				<div class="card-body p-5 text-center">
	  <form action="{{url('adminLogin')}}" method="post">
@csrf
		  <h3 class="mb-5"></h3>
        <h1>Login</h1>

		  <div class="form-outline mb-4">
			<input type="text" id="text-2" class="form-control form-control-lg" name="username"/>
			<label class="form-label" for="text-2">Username</label>
		  </div>

		  <div class="form-outline mb-4">
			<input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"/>
			<label class="form-label" for="typePasswordX-2">Password</label>
		  </div>
	
		  <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
	  </form>
	  
				  <hr class="my-4">
	  
				  
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
</body>
</html>