@extends('layouts.main')

@section('title', '惑星詳細')

@section('content')
    <p><b>名前:{{ $planet->name }}</b></p>
    <p><b>名前(英語):{{ $planet->en_name }}</b></p>
    <p><b>半径:{{ $planet->radius }}</b></p>
    <p><b>重量:{{ $planet->weight }}</b></p>
    <p><a href="{{ route('planets.index') }}">戻る</a></p>
@endsection
