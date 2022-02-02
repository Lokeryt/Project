@extends('layouts.sample')

@section('title')
    Список вакансий
@endsection

@section('samp')
    <link href="../../public/style.css" rel="stylesheet">
    <h1>Список вакансий.</h1>
    <div>
        <h4>Сортировка по:</h4>
        <div>
            <a href="{{ route('records-sorted', 'post') }}" style="text-decoration: none">Должности |</a>
            <a href="{{ route('records-sorted', 'salary') }}" style="text-decoration: none">Зарплате |</a>
            <a href="{{ route('records-sorted', 'amount') }}" style="text-decoration: none">Количеству</a>
        </div>
    </div>
    <br>
    <div class="rec">
        <table>
            <tr> <th>Должность</th> <th>Зарплата</th> <th>Количество вакансий</th> </tr>
            @foreach($data as $element)
                <tr>
                    <th>{{ $element->post }}</th>
                    <th>{{ $element->salary }}</th>
                    <th>{{ $element->amount }}</th>
                    <th><a href="{{ route('record', $element->id) }}"><button>Подробнее</button></a></th>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $data->links() }}
    </div>
@endsection
