@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center">

    <livewire:update
        :model="$model"
    />

</div>

@endsection