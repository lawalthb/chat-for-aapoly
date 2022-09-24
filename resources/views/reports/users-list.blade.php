
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fullname</th>
            <th>Matric</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Ip Address</th>
            <th>Language Id</th>
            <th>Department</th>
            <th>Date Join</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->fullname }}</td>
            <td>{{ $record->matric }}</td>
            <td>{{ $record->phone }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->status }}</td>
            <td>{{ $record->ip_address }}</td>
            <td>{{ $record->language_id }}</td>
            <td>{{ $record->department_id }}</td>
            <td>{{ $record->date_join }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
