@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-primary" href="/addrule"> add rule</a>
    <a class="btn btn-primary" href="/snortrun"> launch snort</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
            <th>type</th>

            <th>Protocol</th>

            <th>Source Ip</th>

            <th>Port</th>
            
                </tr>
            </thead>
            <tr>
            @foreach($rules as $rule)
            <td>{{$rule->type}}</td>
            <td>{{$rule->protocol}}</td>
            <td>{{$rule->source_ip}}</td>
            <td>{{$rule->port}}</td>
            <td><a href="/editrule/{{$rule->id}}"  class="btn btn-warning">Edit</a></td>
            <td>
                <form action="/deleterule/{{$rule->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
                @endforeach
            </tr>
        </table>
</div>

@endsection