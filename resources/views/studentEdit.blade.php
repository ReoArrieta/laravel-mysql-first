@include('header')

<body>
    <!-- Modal Edit -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Datos</h5>
            </div>
            <form action="{{url('students/' . $student->id)}}" method="post">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$student->nombre}}">
                        <label>Identidicacion</label>
                        <input type="text" class="form-control" name="identificacion" value="{{$student->identificacion}}">
                        <label>Ficha</label>
                        <input type="text" class="form-control" name="ficha" value="{{$student->ficha}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="../../students" type="button" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>