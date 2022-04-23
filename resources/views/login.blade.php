<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div>
            <form method="POST" action="{{ route('login') }} ">
                @csrf
                <div>
                    <h4>Email</h4>
                    <input type="email" id="email" name="email" required autofocus/>
                </div>
                <div>
                    <h4>Password</h4>
                    <input type="password" id="password" name="password" />
                </div>
                <button>
                    {{__('login')}}
                </button>
            </form>
        </div>
    </body>
</html>