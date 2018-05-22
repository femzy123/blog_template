@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <span>Post by Femzy</span>

                    <span class="pull-right">{{ $posts->created_at->diffForHumans() }}</span>
                </div>
                <div class="panel-body">

                    {{ $posts->content }}

                </div>
            </div>
        </div>
    </div>
@endsection