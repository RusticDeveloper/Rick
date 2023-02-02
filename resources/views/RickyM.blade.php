@extends('base')

@section('content')
<x-bladewind::centered-content size="xxl" class="bg-img-portal">
    <center>
        <h1>Personajes de Rick y Morty</h1>
    </center>

    {{-- personajes --}}
    <x-bladewind.empty-state message="{{$response['name']}}" image="{{$response['image']}}" class="card-style" img_class='card-img-size'>
        <br>

        <form action="{{route('home.show')}}" method="post">
            @csrf
            <x-bladewind.input name="status" id="status" type="hidden" />
            <x-bladewind.input name="urlc" id="urlc" type="hidden" />
            <x-bladewind.button color="orange" can_submit="true" onclick="document.getElementById('status').value='prev';
            document.getElementById('urlc').value='{{$response['url']}}';">
                Anterior
            </x-bladewind.button>
            <x-bladewind.button color="orange" can_submit="true" onclick="document.getElementById('status').value='next';
            document.getElementById('urlc').value='{{$response['url']}}';">
                Siguiente
            </x-bladewind.button>
        </form>

    </x-bladewind.empty-state>
    {{-- datos personajes --}}
    <x-bladewind::card title="Datos de personaje" class="rigth-side-card">
        <div class='gridy'>
            <div>
                <h3>Genero:</h3>
                <p>{{$response['gender']}}</p>
            </div>
            <div>
                <h3>Origen:</h3>
                <p>{{$response['origin']['name']}}</p>
            </div>
            <div>
                <h3>Estado Actual:</h3>
                <p>{{$response['status']}}</p>
            </div>
            <div>
                <h3>Localización:</h3>
                <p>{{$response['location']['name']}}</p>
            </div>
            <div>
                <h3>Especie:</h3>
                <p>{{$response['species']}}</p>
            </div>
            <div>
                <h3>Tipo:</h3>
                <p>{{$response['type']}}</p>
            </div>
        </div>


    </x-bladewind::card>


</x-bladewind::centered-content>


@endSection
