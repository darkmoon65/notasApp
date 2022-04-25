
<x-visita>
   <div class="row" style="display: flex; justify-content: center;align-items: center;height: 100vh;">
        <div class="col-md-3">
            <form method="POST" action="{{ route('registro') }} ">
                @csrf

                <div>
                    <label>Nombre</label>
                    <input class="form-control" type="text" id="name" name="name" required autofocus/>
                </div>
                <div>
                    <label>Email</label>
                    <input class="form-control" type="email" id="email" name="email" required/>
                </div>
                <div>
                    <label>Password</label>
                    <input class="form-control" type="password" id="password" name="password" />
                </div>
                <div class="d-flex justify-content-center p-2">
                    <button class="btn btn-info" >
                        {{__('Registrarse')}}
                    </button>        
                </div>
            </form>
        </div>
    </div>
</x-visita>
        