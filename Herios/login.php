<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/Herios/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Herios/css/login/login.css">
</head>
<body>
    <div class="container-fluid pt-5">
        <div class="row login__content m-auto">
            <div class="col-md-4 login__company d-flex justify-content-center align-items-center">
                <h4>Login</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login__form border-top border-right">
                <div class="container-fluid d-flex flex-column justify-content-center align-items-center h-100">
                    
                    <div class="row mt-5">
                        <h2>Log In</h2>
                    </div>

                    <div class="row w-100">
                        <form control="" class="form-group w-100" method="POST">
                            <div class="row">
                                <input type="text" name="username" id="username" class="login__input p-2 pl-5 my-3 mx-5" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" placeholder="Username">
                            </div>
                            <div class="row">
                                <input type="password" name="password" id="password" class="login__input p-2 pl-5 my-3 mx-5" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" placeholder="Password">
                            </div>
                            <div class="row pl-5 d-flex justify-content-between">
								<div>
                                    <input type="checkbox" name="remember_me" id="remember_me" class="mb-1 ml-3">
								    <label for="remember_me" class="ml-2">Remember Me!</label>
                                </div>

                                <div class="mr-5">
                                    <a href="#">Forgot Password</a>
                                    |
                                    <a href="#">Help?</a>
                                </div>
							</div>
                            <div class="row">
                                <input type="submit" value="Login" name="submit" class="btn btn__login mx-5 mt-3 p-2">
                            </div>

                            <div class="row mt-3">
                                <a href="#" class="btn btn__login-with ml-5 mt-3 p-2 btn__login-facebook">Login with Facebook</a>
                                <a href="#" class="btn btn__login-with ml-3 mt-3 p-2 btn__login-google">Login with Google</a>
                            </div>
                        </form>
                    </div>

                    <div class="row mt-5">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>