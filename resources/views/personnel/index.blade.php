<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{-- @if ($session)
            <h1>Imported Sucessfully.</h1>
        @endif --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Import Exel Data Into Database</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('exel/upload')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="file" name="import_file" id="" class="form-control">
                            <button type="submit" class="btn bg-blue-200">Import</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>