<html>
    <title>Login</title>
    <head>

    </head>
    <body>
        <div class="card">
            <div class="row">
                <h1>Login</h1>
                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <input type="text" name="mobile">
                    <input type="password"name="password">
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </body>
</html>