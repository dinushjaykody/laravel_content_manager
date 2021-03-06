@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Users</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Permission</th>
                <th>Delete</th>
                </thead>

                <tbody>


                @if(count($users) > 0 )

                    @foreach($users as $user)

                        <tr>
                            <td>
                                <img src="{{ asset($user->profile->avatar) }}" alt="avatar" width="60px" height="60px" style="border-radius: 50%;">
                            </td>

                            <td>
                                {{ $user->name }}
                            </td>

                            <td>
                                @if($user->admin)
                                    <a href="{{ route("user.not.admin",['id' => $user->id]) }}" class="btn btn-xs btn-danger"> Remove Admin</a>
                                @else
                                    <a href="{{ route("user.admin",['id' => $user->id]) }}" class="btn btn-xs btn-success" style="min-width: 98px;"> Make Admin</a>
                                @endif
                            </td>

                            @if(Auth::id() !== $user->id)
                                <td>
                                    <a href="{{ route("user.admin.delete",['id' => $user->id]) }}"
                                       class="btn btn-xs btn-danger" style="min-width: 98px;"> Delete User</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center"> No Users </th>
                    </tr>
                @endif
                </tbody>
            </table> 
        </div>
    </div>
@endsection