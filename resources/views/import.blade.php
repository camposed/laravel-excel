<!DOCTYPE html>
<html lang="es">
<head>
    <title>Import  XLS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importacion de archivos de excel
        </div>
        <div class="card-body ">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT') 
                <input type="file" name="file" class="form-control" accept=".xlsx">
                <br>
                <button class="btn btn-success">Importar archivo</button>
                {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
            </form>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-4" id="success-alert" >
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('status') }} 
    </div>        
@endif
</div>
   
</body>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>         
</html>