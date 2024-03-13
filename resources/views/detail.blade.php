@extends('layouts.app')

@section('content')

    <h1 class="text-center m-5"> Detalle producto</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="  {{ asset('img/card-1.png') }}  " class="card-img-top" alt="...">
            </div>
            <div class="col-md-4">
                <h1>tecnologias</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus commodi ad nihil temporibus sapiente odit et architecto, minus consectetur quos, eum illum perferendis! Reprehenderit sit magnam pariatur blanditiis quas? Nostrum?</p>
                <h3>$5.000.000</h3>
                <button type="button" class="btn btn-outline-primary">matricular</button>
            </div>
        </div>
    </div>

@endsection