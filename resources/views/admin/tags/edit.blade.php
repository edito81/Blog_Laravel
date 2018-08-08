@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Tag: {{ $tag->tag }}
        </div>

        <div class="panel-body">
            <form action="{{ route('tags.update', ['id' => $tag->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update Tag
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection