
<x-usuario>
    <div class="container p-4">
        <div class="row">
            @foreach($grupos as $grupo)
                <div class="col-md-4">
                    <div class="card text-white bg-secondary" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$grupo->titulo }}</h5>
                            <p class="card-text">{{$grupo->descripcion}}</p>
                            
                            @if ($grupo->estado == 0)
                                <button class="btn btn-primary" data-toggle="modal" onclick="abrirModal({{ $grupo->id }})" >Suscribirse</button>
                            @else
                                <a class="btn btn-primary" href="{{route('grupo',$grupo->id)}}">Entrar</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach                
        </div>
        <div class="modal" id="confirmacionModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">Desea suscribirse al grupo </h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('suscribir') }}">
                                @csrf
                                <input type="hidden" name="grupo_id" id="grupo_id">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div>       
</x-usuario>