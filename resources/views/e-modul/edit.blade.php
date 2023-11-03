<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color: #11468F">

    <div class="container mt-5">
        <div class="row mt-5 ">
            <h1  style="color: #EEEEEE">PERBARUI DATA</h1>
            <div class="col">
                <div class="card " style="background-color: #6EAFF7">

                    <div class="card-body">
                        <form action="{{ route('e-modul.update', $sv->id) }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            {{--  --}}
                            <div class="form-group p-2">
                                <label for="">FOTO </label>
                                <input  type="file" name="image" class="form-control" id="" style="background-color: #EEEEEE">
                                
                            </div>
                             {{--  --}}
                             <div class="form-group p-2">
                                <label for="">JUDUL</label>
                                <input type="text" class="form-control" name="title" id="" style="background-color: #EEEEEE">
                            </div>
                             {{--  --}}
                             <div class="form-group p-2">
                                <label for="">Modul</label>
                                <input type="file" class="form-control" name="doc" id="" style="background-color: #EEEEEE">
                            </div>
                            <div class="card-footer p-2">
                                <button type="submit" class="btn btn-warning">simpan</button>
                                <button type="reset" class="btn btn-success">reset</button>
                            </div>
                            </form>
                    </div>
                
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>