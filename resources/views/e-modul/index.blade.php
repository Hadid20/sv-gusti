<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color: #EEEEEE" >

    @extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-3" style="color: #11468F">E-MODUL</h1>
    <a href="{{ route('e-modul.create') }}" class="btn btn-primary">Add Modul</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
   
   <div class="row">
    @forelse ($sv as $Data)
    <div class="col-lg-3 p-5">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/'. $Data->image) }}"  class="card-img-top" style="height: 250px" >
            <div class="card-body" style="background-color: #041562">
                <h5 class="card-title" style="color: #EEEEEE">{!! $Data->title !!}</h5>
                <div style="float: right">
                    <form action="{{ route('e-modul.destroy', $Data->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="btn-group ">
                            <a href="{!! route('e-modul.edit', $Data->id) !!}" class="btn btn-primary">Edit</a>
                            {{-- <a href="{{ route('e-modul.edit', $Data->id) }}" class="btn btn-primary">read</a> --}}
                           <a href="dokumen/{!! $Data->doc !!}" class="btn btn-primary">Unduh</a>
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                     
                    </form>
                </div>
                   
    
               
              </div>
             
            </div>
          </div> 
        @empty 
            <div class="alert alert-info mt-3">
            <h5 class="text-center">MODUL BELUM TERSEDIA</h5>
            </div>
        @endforelse
    </div>
   </div>
</div>
@endsection
</body>
</html>