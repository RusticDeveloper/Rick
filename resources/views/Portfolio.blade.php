@extends('base')

@section('content')
<center><h1>OTROS PRROYECTOS Y CONTACTOS</h1></center>
<div class="grid grid-cols-2 gap-3">
@foreach($response as $value)
    <x-bladewind.card reduce_padding="true" class="git-card">
        <div class="flex items-center">
            <div>
                <x-bladewind.avatar image="{{asset('/storage/git.png')}}" />
            </div>
            <div class="grow pl-2 pt-1">
                <b>{{$value['name']}}</b>
                <div class="text-sm">See this project. 👇👇</div>
                <div class="text-sm">URL=> <a href="{{$value['html_url']}}">Click me</a></div>
            </div>
        </div>
    </x-bladewind.card>
@endforeach
</div>
{{-- {{$response[0]->name}} --}}
@endsection
