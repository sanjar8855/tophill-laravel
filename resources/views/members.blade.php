@extends('app')

@section('title','Bu members sahifasi')

@section('content')
    <h1>Bu members sahifasi</h1>

    <ul>
        @forelse($members as $member)
            <li>Member: {{$member}}</li>
        @empty
            Hech qanday member topilmadi
        @endforelse
    </ul>
@endsection
