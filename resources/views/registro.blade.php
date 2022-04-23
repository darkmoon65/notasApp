<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div>
            <form method="POST" action="{{ route('registro') }} ">
                @csrf

                <div>
                    <h4>Nombre</h4>
                    <input type="text" id="name" name="name" required autofocus/>
                </div>
                <div>
                    <h4>Email</h4>
                    <input type="email" id="email" name="email" required/>
                </div>
                <div>
                    <h4>Password</h4>
                    <input type="password" id="password" name="password" />
                </div>
                <button>
                    {{__('Registrarse')}}
                </button>
            </form>
        </div>
    </body>
</html>