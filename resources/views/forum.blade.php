@extends('layouts.app')

@section('content')

    @foreach($discussions as $d)

        <div class="card">
            <div class="card-header bg-white">
                <img src="{{ asset($d->user->avatar) }}" alt="" width="40px" height="40px" />&nbsp;&nbsp;&nbsp;
                <span> {{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
                @if ($d->hasBestAnswer())
                    <span class="btn btn-success float-right">Closed</span>
                @else
                    <span class="btn btn-danger float-right">Opened</span>
                @endif

                <a class="btn btn-light float-right" href="{{ route('discussion', ['slug' => $d->slug]) }}" style="margin-right:15px">View</a>
            </div>
            <div class="card-body">
                <h3 class="text-center">{{ $d->title }}</h3>
                <p class="text-center">{{ str_limit($d->content, 50) }}</p>
            </div>
            <div class="card-footer">
                <span>{{ $d->replies->count() }} Replies</span>
                <a class="btn btn-secondary btn-xs float-right" href="{{ route('channel', ['slug' => $d->channel->slug]) }}" style="text-decoration: none; color: white;">{{ $d->channel->title }}</a>
            </div>
        </div>
        <br />

    @endforeach

    <br />

        <div class="text-center">
            {{ $discussions->links() }}
        </div>

@endsection
