console.log("ready");
$(document).ready(function(){
    console.log("ready");
    $("#map").on( 'click',function (){
        console.log("clicked");
        $("#frame").attr("src","http://192.168.100.25/nagios/map.php?host=all");
    });
    $("#hosts").on( 'click',function (){
        console.log("clicked");
        $("#frame").attr("src","http://192.168.100.25/nagios/cgi-bin/status.cgi?hostgroup=all&style=hostdetail");
    });
    $("#services").on( 'click',function (){
        console.log("clicked");
        $("#frame").attr("src","http://192.168.100.25/nagios/cgi-bin/status.cgi?host=all");
    });
    $("#openvas").on( 'click',function (){
        console.log("clicked");
        $("#frame").attr("src","https://192.168.100.25:4000/login/login.html");
    });
    $("#prtg").on( 'click',function (){
        console.log("clicked");
        $("#frame").attr("src","http://127.0.0.1");
    });
});
