@extends('layouts.layout')

@section('content')
    <h2>Все данные</h2>
    <table>
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Дата отправки</th>
        </tr>
        @foreach ($allData as $data)
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['submitted_at'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

