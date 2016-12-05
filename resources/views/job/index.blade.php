@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Patron</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>
                                    <a href="{{ route('job.show',['id' => $job->id]) }}">{{ $job->id }}</a>
                                </td>
                                <td>
                                    {{ $job->name }}
                                </td>
                                <td>
                                    {{ $job->patron->onyen }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop