@extends('layouts.app')

@section('content')
<div class="container">
        <a href="/home" class="btn btn-primary snortlink">back</a>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h4>Add Host</h4>
    </div>
    <div class="panel-body">
            
                    <div class="row">
                            <div class="col-md-6 mt-5">
<form method="POST" action="runscans">
    @csrf
    
  
       
    <div class="form-group">
    <label for="hostname">Host name</label>
    <input type="text" name="hostname" class="form-control" id="hostname" placeholder="enter host name">
    </div>
    <div class="form-group">
            <label for="host_ip">Host Ip address</label>
            <input type="text" name="host_ip"class="form-control" id="host_ip" placeholder="enter host Ip address">
            </div>
     
      <button type="submit"  class="btn btn-primary"> Submit</button>
</form>
</div>
</div>

    </div>
</div>
@yield('content')

 
        
    </div>
 
    @endsection