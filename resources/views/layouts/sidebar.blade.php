@extends('layout.app')
@section('side-nav')
<nav id="sidebar"> 
        <div class="side-header">
            <h3>Options </h3> 
        </div>
        <ul class="list-unstyled components">
            <li class="active">
            <button class="btn btn-default" href="#">Network Map</button>
            </li>
            <li class="active">
                <button class="btn btn-default" href="#">Hosts</button>
                </li>
                <li class="active">
                    <button class="btn btn-default" href="#"></button>
                    </li>
    
        </ul>
    </nav>
    @endsection