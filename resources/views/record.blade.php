@extends('layouts.sample')

@section('title')
    {{ $data->post }}
@endsection

@section('samp')
    <link href="../../public/style.css" rel="stylesheet">
    <div class="alert alert-info">
        <h2>Должность: {{ $data->post }}</h2>
        <h2>Зарплата: {{ $data->salary }}</h2>
        <h2>Количество вакансий: {{ $data->amount }}</h2>
        <h2>Вакансия добавлена: {{ $data->created_at }}</h2>
        <h2>Вакансия обновлена: {{ $data->updated_at }}</h2>
    </div>
    <a href="{{ route('change', $data->id) }}"><button class="btn btn-primary mb-2">Изменить</button></a>
    <a href="{{ route('delete', $data->id) }}"><button class="btn btn-primary mb-2">Удалить</button></a>
@endsection
