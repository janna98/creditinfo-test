@extends('layouts.app')

@section('content')

<div>
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Info Form -->
    <form action="/info" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
        <div class="form-group">
            <label for="info" class="col-sm-3 control-label">Title</label>

            <div class="col-sm-6">
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="info" class="col-sm-3 control-label">Body</label>

            <div class="col-sm-6">
                <input type="text" name="body" id="body" class="form-control">
            </div>
        </div>

        <!-- Add Info Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
