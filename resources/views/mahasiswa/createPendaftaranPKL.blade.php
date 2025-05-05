@extends('layouts.dashboardBE')
@section('content')
    <div x-data="{ open:false }">
        <button @click="open =! open" class="border-2 hover:bg-slate-500 active:bg-amber-600">toggle</button>
        <div x-show="open" x-transition>
            Hello 👋
        </div>
    </div>
@endsection