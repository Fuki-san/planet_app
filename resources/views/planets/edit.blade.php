@extends('layouts.main')

@section('title', '惑星情報編集')

@section('content')
    <h1>惑星情報編集</h1>
    @if ($errors->any())
        <div class="error">{{ count($errors) }}件のエラーがあります</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('PATCH')
        {{-- updateアクションの引数である$requestが下記のデータを受け取るには、nameが必要 --}}
        <p> <label for="name">名前</label><input type="text" name="name" id="name"
                value="{{ old('name', $planet->name) }}"></p>
        <p><label for="en_name">名前(英語)</label><input type="text" name="en_name" id="en_name"
                value="{{ old('en_name', $planet->en_name) }}"></p>
        <p> <label for="radius">半径</label><input type="text" name="radius" id="radius"
                value="{{ old('radius', $planet->radius) }}"></p>
        <p> <label for="weight">重量</label><input type="text" name="weight" id="weight"
                value="{{ old('weight', $planet->weight) }}"></p>
        <input type="submit" name="register" id="register" value="更新"><br>
        <a href="{{ route('planets.index') }}">戻る</a>
    </form>
@endsection
