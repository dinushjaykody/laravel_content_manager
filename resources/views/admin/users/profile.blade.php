@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading"> Edit Your Profile </div>
        <div class="panel-body">
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                </div>

                <div class="form-group">
                    <label for="youtube">Youtube Profile</label>
                    <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                </div>

                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Profile
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('styles')
    <!-- include summernote css -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
    <!-- include summernote js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#about').summernote();
        });
    </script>

@endsection