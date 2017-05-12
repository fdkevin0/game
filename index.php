<head>
<body>
<script type="text/javascript" src="http://pv.sohu.com/cityjson"></script>
<script>
document.write(returnCitySN["cip"] );
timedGetText("/index.php?ip="+returnCitySN["cip"],10000,tt);

function tt(test){

}

function timedGetText( url, time, callback ){
    var request = new XMLHttpRequest();
    var timeout = false;
    var timer = setTimeout( function(){
        timeout = true;
        request.abort();
    }, time );
    request.open( "GET", url );
    request.onreadystatechange = function(){
        if( request.readyState !== 4 ) return;
        if( timeout ) return;
        clearTimeout( timer );
        if( request.status === 200 ){
            callback( request.responseText );
        }
    }
    request.send( null );
}
</script>
<?php
if ($_GET["ip"]){
 $time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("ipjl.txt","a") ;
$txt= $_GET['ip']."      ".$time."\n";
fputs($fp,$txt);
}
//echo 'hello';
// print_r($_SERVER);

/*
$time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("ipjl.txt","a")  ;
returnCitySN["cip"]
$txt= "$ip"."----"."$time"."\n";
fputs($fp,$txt);
*/

?>
</body>
</head>