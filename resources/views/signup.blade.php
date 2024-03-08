<html>
    <title>Signup</title>
    <head>

    </head>
    <body>
        <div class="card">
            <div class="row">
                <h1>Signup</h1>
                <form action="{{ route('signup')}}" method="POST">
                    @csrf
                    <input type="text"name="name">
                    <input type="email"name="email">
                    <input type="text" name="mobile">
                    <input type="password"name="password">
                    <input type="submit" value="save">
                </form>
            </div>
        </div>
    </body>
</html>