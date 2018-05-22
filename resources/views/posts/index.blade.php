@extends('layouts.app')

@section('content')
    <div class="row">

        @forelse($posts as $post)

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <span>Femzy</span>

                        <span class="pull-right">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <div class="panel-body">
                        {{--{{ substr($post->content, 0, random_int(60, 150)) }}--}}

                        {{ $post->shortContent }}

                        <a href="/posts/{{ $post->id }}">Read more</a>

                        <div class="panel-footer clearfix" style="background-color: white">
                            @if (Route::has('login'))
                                @auth
                                <div class="pull-right"><a href="/posts/{{ $post->id }}/edit"><button class="btn btn-info btn-sm">Edit</button> </a></div>
                            @else

                                @endauth
                            @endif

                            @if($post->user_id == Auth::id())
                                <form action="/posts/{{ $post->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @empty

                No Posts

        @endforelse

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{ $posts->links() }}
                </div>
            </div>

    </div>
@endsection