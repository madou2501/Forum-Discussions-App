@extends('layouts.app')

@section('content')
        <div class="card">
            <div class="card-header bg-white">
                <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px" />&nbsp;&nbsp;&nbsp;
                <span> {{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>

                @if ($d->hasBestAnswer())
                    <span class="btn btn-success float-right">Closed</span>
                @else
                    <span class="btn btn-danger float-right">Opened</span>
                @endif

                @if (Auth::id() == $d->user->id)

                    @if (!$d->hasBestAnswer())
                        <a href="{{ route('discussion.edit', ['slug' => $d->slug]) }}" class="btn btn-info float-right" style="margin-right:15px">Edit</a>
                    @endif

                @endif

                @if ($d->is_being_watched_by_auth_user())
                    <a href="{{ route('discussion.unwatch', ['id' => $d->id]) }}" class="btn btn-light float-right" style="margin-right:15px">Unwatch</a>
                @else
                    <a href="{{ route('discussion.watch', ['id' => $d->id]) }}" class="btn btn-light float-right" style="margin-right:15px">Watch</a>
                @endif

            </div>
            <div class="card-body">
                <h3 class="text-center">{{ $d->title }}</h3>
                <p class="text-center">{!! Markdown::convertToHtml($d->content) !!}</p>
                <hr>

                @if ($best_answer)
                    <div class="text-center" style="padding: 30px">

                    <h3 style="margin-bottom: 20px;">THE BEST ANSWER</h3>
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <img src="{{ $best_answer->user->avatar }}" alt="" width="40px" height="40px" />&nbsp;&nbsp;&nbsp;
                            <span> {{ $best_answer->user->name }}</span>
                        </div>
                        <div class="card-body">
                            {{ $best_answer->content }}
                        </div>
                    </div>
                </div>

                @endif

            </div>
            <div class="card-footer">
                <span>{{ $d->replies->count() }} Replies </span>
                <a class="btn btn-secondary btn-xs float-right" href="{{ route('channel', ['slug' => $d->channel->slug]) }}" style="text-decoration: none; color: white;">{{ $d->channel->title }}</a>
            </div>
        </div>

        <br/>

        @foreach ($d->replies as $r)

            <div class="card">
                <div class="card-header bg-white">
                    <img src="{{ asset('avatars/avatar.png') }}" alt="" width="40px" height="40px" />&nbsp;&nbsp;&nbsp;
                    <span> {{ $r->user->name }}, <b>{{ $r->created_at->diffForHumans() }}</b></span>

                    @if (!$best_answer)

                        @if (Auth::id() == $r->user->id)
                            <a href="{{ route("discussion.best.answer", ["id" => $r->id]) }}" class="btn btn-info btn-xs float-right text-white" style="margin-left:10px">Mark as Best Answer</a>
                        @endif

                    @endif

                    @if (Auth::id() == $r->user->id)

                        @if (!$r->best_answer)
                            <a href="{{ route("reply.edit", ["id" => $r->id]) }}" class="btn btn-primary float-right text-white">Edit</a>
                        @endif

                    @endif



                </div>
                <div class="card-body">
                    <p class="text-center">{{ $r->content }}</p>
                </div>
                <div class="card-footer">

                    @if ($r->liked_by_auth_user())
                        <a class="btn btn-danger" href="{{ route('reply.unlike', ['id' => $r->id]) }}">
                            Unlike <span class="badge badge-light">{{ $r->likes->count() }}</span>
                        </a>
                    @else
                        <a class="btn btn-success" href="{{ route('reply.like', ['id' => $r->id]) }}">
                            Like <span class="badge badge-light">{{ $r->likes->count() }}</span>
                        </a>
                    @endif

                </div>
            </div>
            <br>

        @endforeach


            <div class="card">
                <div class="card-body">

                    @if (Auth::check())

                        <form class="form-control" action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="reply">Leave a Reply...</label>
                                <textarea name="reply" rows="8" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" class="btn">Leave a Reply</button>
                                </div>
                            </div>

                        </form>

                    @else

                        <div class="text-center">
                            <h2>Sign In To Leave a Reply</h2>
                        </div>

                    @endif

                </div>
            </div>

        <br>
        <br>
        <br>
        <br>

@endsection
