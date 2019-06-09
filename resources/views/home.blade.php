@extends('layouts.app')

@section('content')

<div id="griddisplay">
    <div>
            <nav id="sidebar"> 
                    <div class="side-header">
                        <h3>Options : </h3> 
                    </div>
                    <ul class="list-unstyled components">
                        <li class="active">
                        <button class="btn btn-default" id="map" >Network Map</button>
                        </li>
                        <li class="active">
                                <button class="btn btn-default"id="hosts" >Hosts</button>
                            </li>
                            <li class="active">
                                    <button class="btn btn-default" id="services" >Services</button>
                                </li>
                                <li class="active">
                                    <a  href="/scans" class="btn btn-default" id="scan" >Add Host</a>
                                </li>
                                <li class="active">
                                        <a  href="/snortrules" class="btn btn-default" id="scan" >Snort</a>
                                    </li>
                                <li class="active">
                                    <button class="btn btn-default" id="openvas" >Openvas</button>
                                </li>
                                <li class="active">
                                    <button class="btn btn-default" id="prtg" >Prtg</button>
                                </li>
                
                    </ul>
                </nav>
    </div>

    
        
   
         
        <div class="container">
            <iframe  id = "frame" src="http://localhost/nagios/map.php?host=all" width="100%" height="100%">
      
</div>
        
</div>



@endsection
