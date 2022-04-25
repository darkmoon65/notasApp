
<x-visita>
        @if (session('status'))
        <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
            {{ $status }}
        </div>
        @endif
        <div class="row" style="display: flex; justify-content: center;align-items: center;height: 100vh;">
            <div class="col-md-3">
                    @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                            {{ __('Error...') }}
                        </div>

                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }} ">
                        @csrf
                        <div class="p-2">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus/>
                        </div>
                        <div class="p-2">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="d-flex justify-content-end p-2">
                            <a href="{{ route('registro') }}" class="p-2" >
                                {{__('Registrarse')}}
                            </a>
                            <button class="btn btn-info" >
                                {{__('login')}}
                            </button>
                        </div>
                    </form>            
        </div>
    </div>
   
</x-visita>
        