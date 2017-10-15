@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Рекорды</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Пользователь</th>
                            <th>Рекорд</th>
                            <th>Дата</th>
                        </tr>

                        @foreach ($records as $record)
                            <tr>
                                <td>{{ $record->user ? $record->user->name : 'Аноним' }}</td>
                                <td>{{ $record->score }}</td>
                                <td>{{ $record->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </table>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
