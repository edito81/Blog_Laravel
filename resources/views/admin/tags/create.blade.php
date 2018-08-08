@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new Tag
        </div>

        <div class="panel-body">
            <form action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Tag Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection