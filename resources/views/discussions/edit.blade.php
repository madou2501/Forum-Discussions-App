@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Update a Discussion</div>

                <div class="card-body">
                    <form class="form-control" action="{{ route('discussion.update', ['id' => $discussion->id]) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="content">Ask a Question</label>
                            <textarea class="form-control" id="content" name="content" rows="10" cols="30">{{ $discussion->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Save Discussion Changes</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
