@include('header')

<body>
    <div class="container">
        <div class="up">
            <h2>Estudiantes</h2>
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
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$student->id}}</th>
                    <td>{{$student->nombre}}</td>
                    <td>{{$student->identificacion}}</td>
                    <td>{{$student->ficha}}</td>
                    <td>
                        <div class="row">
                            <a href="{{ url('students/' .$student->id . '/edit') }}">✎ Editar</a>
                            <form action="{{ url('students/' . $student->id) }}" method="post">
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
                <div class="modal-body">
                    <form action="{{url('students')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                            <label>Identidicacion</label>
                            <input type="text" class="form-control" name="identificacion">
                            <label>Ficha</label>
                            <input type="text" class="form-control" name="ficha">
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