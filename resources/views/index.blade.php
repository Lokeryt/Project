@extends('layouts.sample')

@section('title')
    Главная
@endsection

@section('samp')
    <link href="../../public/style.css" rel="stylesheet">
    <h1>Добавление вакансии.</h1>

    <form action="{{ route('main-submit') }}" method="post" class="frm">
        @csrf

        <div class="form-gr">
            <input type="text" name="post" id="post" class="inp" placeholder="Должность">
        </div>

        <div class="form-gr">
            <input type="number" name="salary" id="salary" class="inp" placeholder="Зарплата">
        </div>

        <div class="form-gr">
            <input type="number" name="amount" id="amount" class="inp" placeholder="Количество вакансий">
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Добавить</button>
    </form>
@endsection
