@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Priority list</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($priorities as $priority)
                            <tr>
                                <td>{{ $priority->name }}</td>
                                <td style="width: 100px">
                                    <a class="btn btn-success" href="{{route("priorities.edit" , $priority->id)}}">Update</a>
                                </td>
                                <td style="width:100px;">
                                    <form method="POST" action="{{route("priorities.destroy" , $priority->id)}}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection