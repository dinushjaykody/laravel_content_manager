@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Posts List</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Trash</th>
                </thead>

                <tbody>
                    @if(count($posts) > 0 )
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px">
                                </td>
                                <td> {{$post->title}}</td>
                                <td>
                                    <a href="{{ route('post.edit', ['id' => $post->id ]) }}"
                                       class="btn btn-xs btn-info">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('post.delete', ['id' => $post->id ]) }}"
                                       class="btn btn-xs btn-danger">X</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="5" class="text-center"> No published posts </th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection