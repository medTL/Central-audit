@extends('layouts.app')
@section('content')
<div class="container">
                <a href="/snortrules" class="btn btn-primary snortlink">back</a>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Add Snort Rule</h4>
            </div>
            <div class="panel-body">
                    
                            <div class="row">
                                    <div class="col-md-6 mt-5">
        <form method="POST" action="/snortstore">
            @csrf
            
          
               
            <div class="form-group">
            <label for="type">Action type</label>
            <select type="sel" name="type" class="form-control"  placeholder="enter rule type">
            <option value="alert">alert</option>
            <option value="drop">drop</option>
            </select>
            </div>
            <div class="form-group">
                    <label for="protocol">Protocol</label>
                    <select type="sel" name="protocol" class="form-control"  placeholder="enter protocol">
                    <option value="tcp">tcp</option>
                    <option value="udp">udp</option>
                    </select>
                    </div>
            <div class="form-group">
                    <label for="source_ip">Source Ip address</label>
                    <input type="text" name="source_ip"class="form-control"  placeholder="enter source Ip address">
                    </div>
                    <div class="form-group">
                            <label for="source_ip">Port</label>
                            <input type="text" name="port"class="form-control"  placeholder="enter port or type any ">
                            </div>

                            <div class="form-group">
                                    <label for="message">message</label>
                                    <textarea type="text" name="message"class="form-control"  placeholder="enter alert message ">
                                    </textarea>
                                </div>
             
              <button type="submit"  class="btn btn-primary"> Submit</button>
        </form>
        </div>
        </div>
        
            </div>
        </div>
</div>
@endsection