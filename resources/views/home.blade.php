@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">E-Modul</div>
                <div class="card-body">
                <a class="btn btn-primary" href=" {{ route('e-modul.index') }}">GO TO E-Modul</a>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
