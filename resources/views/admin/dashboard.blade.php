@extends('layouts.app')

@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Dashboard</div>--}}

        {{--<div class="panel-body">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--Welcome To Blog!--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center" style="min-height: 65px">
                PUBLISHED POSTS
            </div>

            <div class="panel-body">
                <h1 class="text-center">
                    {{$posts_count}}
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center" style="min-height: 65px">
                TRASHED POSTS
            </div>

            <div class="panel-body">
                <h1 class="text-center">
                    {{$trashed_count}}
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center" style="min-height: 65px">
                USERS
            </div>

            <div class="panel-body">
                <h1 class="text-center">
                    {{$users_count}}
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center" style="min-height: 65px">
                Categories
            </div>

            <div class="panel-body">
                <h1 class="text-center">
                    {{$categories_count}}
                </h1>
            </div>
        </div>
    </div>
@endsection
