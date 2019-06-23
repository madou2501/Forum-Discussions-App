@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Create a New Discuss</div>

                <div class="card-body">
                    <form class="form-control" action="{{ route('discussions.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="channel_id">Pick a Channel</label>
                            <select class="form-control" name="channel_id" id="channel_id">
                                <option value="">...</option>
                                @foreach($channels as $channel)

                                    <option value="{{ $channel->id }}">{{ $channel->title }}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Ask a Question</label>
                            <textarea class="form-control" id="content" name="content" rows="10" cols="30">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Create Discussion</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
