<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snort;

class SnortsController extends Controller
{
    //
    protected function validator()
    {
        return request()->validate([
            'type' => ['required', 'string', 'max:255'],
            'protocol' => ['required'],
            'source_ip' => ['required'],
            'port' => ['required', ],
            'message' => ['required'],
        ]);
    }
    public function index(){
        $rules=Snort::all();
        return view('snorts',compact('rules'));
    }

    public function create(){
        return view('snortAdd');
    }
    public function store(){
        $type=request('type');
        $protocol=request('protocol');
        $source_ip=request('source_ip');
        $port=request('port');
        $message=request('message');
        $fp =fopen("/etc/snort/rules/local.rules","a");
        $content=$type."  ".$protocol." ".$source_ip."  ".$port."  -> 10.0.2.10 any (msg:".$message."; dsize:0;sid:100000".rand(99,1000)." ;rev:1;)";
        fwrite($fp,$content);
    fclose($fp);
        Snort::create([
            'type' => $type,
            'protocol' => $protocol,
            'source_ip' => $source_ip,
            'port' => $port,
            'message'=> $message,
        ]);

        return redirect('/snortrules');
        
    }
    public function edit(Snort $snort){
        return view('snortedit',compact("snort"));
    }
    public function update(Snort $snort){
       
        $snort->update($this->validator());
       
        return back();
    }
    public function destroy(Snort $snort){
        $snort->delete();
        return redirect('/snortrules');
    }

    public function run(Snort $snort){
       
        $p=system("sudo snort -A console  -c /etc/snort/snort.conf -i enp0s8 > /home/talel/snort.log &");
       
        return redirect('/snortrules');
    }

}
