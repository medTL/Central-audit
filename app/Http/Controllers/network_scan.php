<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;

class network_scan extends Controller
{
    
    public function index(){
        return view('scans');
    }
    
  
    public function run(){
      
        $host = request('hostname');
        $ip=request('host_ip');
       
        $process= exec(" touch /usr/local/nagios/etc/servers/".$host.".cfg");
        
        $content="define host{
                           
            use                     linux           
            host_name               ".$host."             
            alias                  ".$host."             
            address                 ".$ip." 
                                    
}                                   
                                    
define hostgroup{                   
                                    
            hostgroup_name          linux-server            
            alias                   Linux Servers            
            members                 ".$host." 
}                                   
                                    
define service{                     
                                    
            use                     local-service            
            host_name               ".$host."            
            service_description     SWAP Uasge            
            check_command           check_nrpe!check_swap                          
                                    
}                                   
                                    
define service{                     
                                    
            use                     local-service            
            host_name               ".$host."             
            service_description     Root / Partition            
            check_command           check_nrpe!check_root                          
                                    
}                                   
                                    
define service{                     
                                    
            use                     local-service            
            host_name               ".$host."             
            service_description     Current Users            
            check_command           check_nrpe!check_users                         
                                    
}                                   
                                    
define service{                     
                                    
            use                     local-service            
            host_name               ".$host."             
            service_description     Total Processes            
            check_command           check_nrpe!check_total_procs                   
                                    
}                                   
                                    
define service{                     
                                    
            use                     local-service            
            host_name               ".$host."            
            service_description     Current Load            
            check_command           check_nrpe!check_load

}
";
    $fp=fopen('/usr/local/nagios/etc/servers/'.$host.'.cfg','w');
    fwrite($fp,$content);
    fclose($fp);
    $process2 = exec('sudo service nagios restart');
    return redirect('/home');
    }
}
