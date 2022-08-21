<html>
    <head>
        <title>Login Page</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <body > 
            <div id="login">
                <h1 class="text-center text-primary pt-5" style="color:CadetBlue">Login</h1><br>
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">

                                <form id="login-form" class="form" action="{{url('/user-login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="text-info">Email:</label><br>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a class="text-info">Don't have an account?</a><br>
                                        <a href="{{url('/signup')}}" class="text-info text-center">Register here</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

    </head>
</html>