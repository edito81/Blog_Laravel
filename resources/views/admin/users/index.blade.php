@extends('layouts.app')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>

                <th>Name</th>

                <th>Permissions</th>

                <th>Edit Permissions</th>

                <th>Delete</th>

                </thead>

                <tbody>
                @if($users->count() > 0)

                    @foreach($users as $user)
                        <tr>
                            <th>
                                <img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" height="60px"
                                     style="border-radius: 50%;">
                            </th>

                            <th>
                                {{ $user->name }}
                            </th>

                            <th>
                                @if($user->admin)
                                    <div class="btn btn-xs btn-success">Admin</div>
                                @else
                                    <a href="{{ route('users.admin', ['id' => $user->id]) }}"
                                       class="btn btn-xs btn-success">Make admin</a>
                                @endif
                            </th>

                            <th>
                                @if($user->not_admin)

                                @else
                                    <a href="{{ route('users.not.admin', ['id' => $user->id]) }}"
                                       class="btn btn-xs btn-danger">Remove Admin permissions</a>
                                @endif
                            </th>

                            <th>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('users.profile.delete', ['id' => $user->id]) }}"
                                       class="btn btn-xs btn-danger">Delete</a>
                                @endif
                            </th>
                            @endforeach
                            @else
                        </tr>

                        <tr>
                            <th colspan="5" class="text-center">No users</th>
                        </tr>
                        @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection