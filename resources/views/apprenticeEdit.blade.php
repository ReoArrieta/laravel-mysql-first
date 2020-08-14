@include('header')

<body>
    <!-- Modal Add -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Agregar Datos</h5>
            </div>
            <form action="{{url('apprentices/' . $apprentice->id)}}" method="post">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="{{$apprentice->nombre}}" name="nombre">
                        <label>Identidicacion</label>
                        <input type="text" class="form-control" value="{{$apprentice->identificacion}}" name="identificacion">
                        <label>Ficha</label>
                        <input type="text" class="form-control" value="{{$apprentice->ficha}}" name="ficha">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" value="{{$apprentice->fecha_nacimiento}}" name="fecha_nacimiento">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="../../apprentices" type="button" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>