@include('header')

<body>
    <!-- Modal Edit -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Datos</h5>
            </div>
            <form action="{{url('pets/' . $pet->id)}}" method="post">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="{{$pet->name}}" name="name">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" value="{{$pet->birthday}}" name="birthday">
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