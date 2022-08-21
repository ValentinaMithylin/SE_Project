<html>
    <head>
        <title>Sign Up Page</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <body>
            <div id="login">
                <h1 class="text-center text-primary pt-5" style="color:CadetBlue">Register</h1><br>
                <div class="container">
                     <form id="login-form" class="form" action="{{url('/user-registration')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-info">Name:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact" class="text-info">Contact no.:</label><br>
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="adress" class="text-info">Address:</label><br>
                            <input type="text" name="address" id="address" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign up">
                        </div>
                    </form>
                </div>
            </div>
        </body>

    </head>
</html>