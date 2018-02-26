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
                                Permissions
                            </td>

                            <td>
                                Delete
                            </td>
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