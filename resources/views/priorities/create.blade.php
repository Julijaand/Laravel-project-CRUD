@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New priority</div>
                <div class="card-body">
                    <form method="POST" action="{{route('priorities.store')}}">
                        @csrf
                       <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type='text' class="form-control" name="name">
                       </div> 
                       <button class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection