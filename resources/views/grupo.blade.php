<x-usuario>
    <div class="container p-4">
            <div class="row">
                <button class="btn btn-primary" data-toggle="modal" data-target="#crearNotaModal">Crear nota</button>
            </div>
            <div class="row">
            @foreach($notas as $nota)
                <div class="col-md-4">
                    <div class="card text-white bg-info" style="width: 18rem; margin: 10px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $nota->titulo }}</h5>
                            @if(!empty($nota->img))
                            <img src="{{ asset($nota->img) }}" class="card-img-top" />
                            @endif
                            <p class="card-text">{{ $nota->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="modal" id="crearNotaModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añadir una nota</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('crear-nota') }}">
                                @csrf
                                <input type="hidden" name="grupo" value="{{ $id }}">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" id="titulo" name="titulo" class="form-control" required autofocus/>
                                </div>
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" id="descripcion" name="descripcion" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Subir imagen</label>
                                    <input type="file" name="img" placeholder="Escoge una imagen" id="img">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</x-usuario>