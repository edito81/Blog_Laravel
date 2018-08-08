@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new User
        </div>

        <div class="panel-body">
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">User Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="tag">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Add User
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection