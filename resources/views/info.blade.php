@extends('layouts.app')

@section('content')
<div>
    <a href="{{ URL::to('new') }}">
        <span> Add new information </span>
    </a>
</div>
@if (Session::has('information') && count(Session::get('information')) > 0)
<div>
    <h1>Saved information</h1>
    <div>
        <table>

            <!-- Table Headings -->
            <thead>
            <th>Title</th>
            <th>Body</th>
            </thead>

            <!-- Table Body -->
            <tbody>
            @foreach(Session::get('information') as $idx => $v)
            <tr>
                <!-- Task Name -->
                <td>
                    {{ $v["title"] }}
                </td>
                <td>
                    {{ $v["body"] }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<h1>No information saved in session</h1>
@endif
@endsection
