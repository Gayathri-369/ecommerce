@extends('layouts')

@section('content')

<div class="row">
    <div class="col-xl-6 m-auto">
        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <div class="form-group mb-3" style="margin-top: 60px;">
                <label for="title">Title</label>
                <input type="text" placeholder="Title" id="title" name="title" class="form-control">
            </div>

            <div class="form-group mb-3" >
                <label for="description">Description</label>
                <textarea placeholder="Description" id="description" name="description" class="form-control"></textarea>
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
