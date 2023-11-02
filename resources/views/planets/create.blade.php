@extends('layouts.main')

@section('title', '惑星情報登録')

@section('content')
    <h1>惑星情報登録</h1>
    @if ($errors->any())
        <div class="error">{{ count($errors) }}件のエラーがあります</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('planets.store') }}" method="post">
        @csrf
        <p> <label for="name">名前</label><input type="text" id="name" name="name" value="{{ old('name') }}"></p>
        <p><label for="en_name">名前(英語)</label><input type="text" id="en_name" name="en_name" value="{{ old('en_name') }}"></p>
        <p> <label for="radius">半径</label><input type="text" id="radius" name="radius" value="{{ old('radius') }}"></p>
        <p> <label for="weight">重量</label><input type="text" id="weight" name="weight" value="{{ old('weight') }}"></p>
        <input type="submit" name="register" id="register" value="登録"><br>
        <a href="{{ route('planets.index') }}">戻る</a>
    </form>
@endsection
