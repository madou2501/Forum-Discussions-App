@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Channel</div>

                <div class="card-body">
                    <form action="{{ route('channels.store') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input class="form-control" type="text" name="channel">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Save Channel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
