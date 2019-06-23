@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Edit The Channel: {{ $channel->title }}</div>

                <div class="card-body">
                    <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <input class="form-control" type="text" value="{{ $channel->title }}" name="channel">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Update The Channel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
