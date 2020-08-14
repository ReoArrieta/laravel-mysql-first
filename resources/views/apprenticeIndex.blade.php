@include('header')

<body>
    <div class="container">
        <div class="up">
            <h2>Aprendices</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
                Agregar
            </button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Ficha</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apprentices as $apprentice)
                <tr>
                    <th scope="row">{{$apprentice->id}}</th>
                    <td>{{$apprentice->nombre}}</td>
                    <td>{{$apprentice->identificacion}}</td>
                    <td>{{$apprentice->ficha}}</td>
                    <td>{{$apprentice->fecha_nacimiento}}</td>
                    <td>
                        <div class="row">
                            <a href="{{ url('apprentices/' . $apprentice->id . '/edit')}}">✎ Editar</a>
                            <form action="{{url('apprentices/' . $apprentice->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-link" value="🗑 Eliminar">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="ModalAdd" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Agregar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('apprentices')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                            <label>Identidicacion</label>
                            <input type="text" class="form-control" name="identificacion">
                            <label>Ficha</label>
                            <input type="text" class="form-control" name="ficha">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('script')
</body>

</html>