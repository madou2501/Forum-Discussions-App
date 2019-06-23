@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Update a Reply</div>

                <div class="card-body">
                    <form class="form-control" action="{{ route('reply.update', ['id' => $reply->id]) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="content">Answer a Question</label>
                            <textarea class="form-control" id="content" name="content" rows="10" cols="30">{{ $reply->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Save Reply Changes</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
