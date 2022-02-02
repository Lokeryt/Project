@extends('layouts.sample')

@section('title')
    {{ $data->post }}
@endsection

@section('samp')
    <link href="../../public/style.css" rel="stylesheet">
    <h1>Изменение вакансии.</h1>

    <form action="{{ route('change-submit', $data->id) }}" method="post" class="frm">
        @csrf

        <div class="form-gr">
            <input type="text" name="post" id="post" value="{{ $data->post }}" class="inp" placeholder="Должность">
        </div>

        <div class="form-gr">
            <input type="number" name="salary" id="salary" value="{{ $data->salary }}" class="inp" placeholder="Зарплата">
        </div>

        <div class="form-gr">
            <input type="number" name="amount" id="amount" value="{{ $data->amount }}" class="inp" placeholder="Количество вакансий">
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Изменить</button>
    </form>
@endsection
