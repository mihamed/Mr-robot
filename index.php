<?php
error_reporting(0);

$site_title = "♥ MR.Robot ♥";

// using banned in role will show user that he is banned when he try to login .
$users = array(
               "juba" => array("name" => "admin", "role"=> "owner")
               );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
	$showlogin = true;
	$loginerror = "";

   if(isset($_POST['password'])){

      $password = $_POST['password'];

    if(!empty($password)){

      if(isset($users[$password])){

         if($users[$password]['role'] !== 'banned'){
      		$_SESSION['logged'] = true;
      		$_SESSION['password'] = $password;
      		$_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
          	 }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
       	  $loginerror = "Wrong Password!";
      }

     }else{
     	$loginerror = "Please enter Password!";
     }
  }
}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Welcome To boot MR.ropot
</title><link rel="stylesheet" type="text/css" href="A-robot.css" 
media="all,black.css"/><link rel="shortcut icon" href="">
<?php error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by MR-Robot.TK',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<h2>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like And Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
writle your comment</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
<FONT face="Arial ,Tahoma" size="4" color="#FFFFF">
 </a>
<a class="" href=""><font color="" size="0"></font></a></b><font size="0" 
<br><br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="MR-JUBA.TK.js"></script>
</h6></marquee>
';
} 

public function home(){
echo'
<div id="content">
<br><br>
<a href="https://www.facebook.com/spider.r365" alt="A-juba" target="_blank">
<img
src="https://graph.facebook.com/100013615811356/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="260" height="260"></a>

';
}


public function showlogin(){
		 echo '<div id="bottom-content">

</center>
<center><font color="ffffff" size="+1"><marquee bgcolor="" direction="left" 
loop="infinite" width="14%"><strong> باسورد البوت : robot
</strong></marquee></font></center>
<center>

  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
<li><label-password">Password&nbsp;:    </label><input class="inp-text" type="الباسورد !" style="height: 20px;width: 250px;" name="password"></li>
<li><label class="label-submit"></label><input class="inp-btn" type="submit" style="height:28px;" value=" دخول "></li>
  </form>
</ul></div></div>';
	}

public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '
</center><br>
<font color="White" size="5">Submit Your Token Here Here!</font></a>
<center>
<center>
<ul>
<center>
<a href="https://goo.gl/CvenbL" target="_blank">

<input class="button button5" type="button" value="Allow The App"> </a>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">

<input class="button button6" type="button" value="Get Token"> </a>
<a href="https://www.facebook.com/spider.r365" target="_blank">
<input class="button button7" type="button" value="حسابي لتوصل "> </a>
</center>
<h4><font size="26" color="blue"><center>   </font><font face="Orbitron" size="6" 
<br></ul></div></div>
</center>
</center>
<center><font color="ffffff" size="+1"><marquee bgcolor="" direction="left" 
loop="infinite" width="14%"><strong> ♥ WELCOME TO al juba bot ♥ WELCOME TO BOT SITE MR.JUBA♥ 
</strong></marquee></font></center>
<center>
</strong></marquee></font></center>
<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" 
placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  إلصق التوكن  " st name="token"> <br>
<input class="button button8" id="sbmt" class="inp-btn" type="submit"   value="دخول "></form>
</div></div></div></font>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<br>
User rebot : <font color="red">'.count($user).'</font>
<br>

Facebo0ok mr.dany : <a href="https://www.facebook.com/kosmk.x?fref=ts" 
target="blank">Click Here</a><br><center>



';
}


public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<script>
if  ((document.getElementById) && 
window.addEventListener || window.attachEvent){

(function(){

//Configure here...

var xCol = "#ff0000";
var yCol = "#ffffff";
var zCol = "#0000ff";
var n = 6;   //number of dots per trail.
var t = 40;  //setTimeout speed.
var s = 0.2; //effect speed.

//End.

var r,h,w;
var d = document;
var my = 10;
var mx = 10;
var stp = 0;
var evn = 360/3;
var vx = new Array();
var vy = new Array();
var vz = new Array();
var dy = new Array();
var dx = new Array();

var pix = "px";

var strictmod = ((document.compatMode) && 
document.compatMode.indexOf("CSS") != -1);


var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");
var idx = d.getElementsByTagName('div').length;

for (i = 0; i < n; i++){
var dims = (i+1)/2;
d.write('<div id="x'+(idx+i)+'" style="position:absolute;'
+'top:0px;left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+xCol+';font-size:'+dims+'px"></div>'

+'<div id="y'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+yCol+';font-size:'+dims+'px"></div>'

+'<div id="z'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+zCol+';font-size:'+dims+'px"></div>');
}

if (domWw) r = window;
else{ 
  if (d.documentElement && 
  typeof d.documentElement.clientWidth == "number" && 
  d.documentElement.clientWidth != 0)
  r = d.documentElement;
 else{ 
  if (d.body && 
  typeof d.body.clientWidth == "number")
  r = d.body;
 }
}


function winsize(){
var oh,sy,ow,sx,rh,rw;
if (domWw){
  if (d.documentElement && d.defaultView && 
  typeof d.defaultView.scrollMaxY == "number"){
  oh = d.documentElement.offsetHeight;
  sy = d.defaultView.scrollMaxY;
  ow = d.documentElement.offsetWidth;
  sx = d.defaultView.scrollMaxX;
  rh = oh-sy;
  rw = ow-sx;
 }
 else{
  rh = r.innerHeight;
  rw = r.innerWidth;
 }
h = rh; 
w = rw;
}
else{
h = r.clientHeight; 
w = r.clientWidth;
}
}


function scrl(yx){
var y,x;
if (domSy){
 y = r.pageYOffset;
 x = r.pageXOffset;
 }
else{
 y = r.scrollTop;
 x = r.scrollLeft;
 }
return (yx == 0)?y:x;
}


function mouse(e){
var msy = (domSy)?window.pageYOffset:0;
if (!e) e = window.event;    
 if (typeof e.pageY == 'number'){
  my = e.pageY - msy + 16;
  mx = e.pageX + 6;
 }
 else{
  my = e.clientY - msy + 16;
  mx = e.clientX + 6;
 }
if (my > h-65) my = h-65;
if (mx > w-50) mx = w-50;
}



function assgn(){
for (j = 0; j < 3; j++){
 dy[j] = my + 50 * Math.cos(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) + scrl(0) + pix;
 dx[j] = mx + 50 * Math.sin(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) * Math.sin(stp/4) + pix;
}
stp+=s;

for (i = 0; i < n; i++){
 if (i < n-1){
  vx[i].top = vx[i+1].top; vx[i].left = vx[i+1].left; 
  vy[i].top = vy[i+1].top; vy[i].left = vy[i+1].left;
  vz[i].top = vz[i+1].top; vz[i].left = vz[i+1].left;
 } 
 else{
  vx[i].top = dy[0]; vx[i].left = dx[0];
  vy[i].top = dy[1]; vy[i].left = dx[1];
  vz[i].top = dy[2]; vz[i].left = dx[2];
  }
 }
setTimeout(assgn,t);
}


function init(){
for (i = 0; i < n; i++){
 vx[i] = document.getElementById("x"+(idx+i)).style;
 vy[i] = document.getElementById("y"+(idx+i)).style;
 vz[i] = document.getElementById("z"+(idx+i)).style;
 }
winsize();
assgn();
}


if (window.addEventListener){
 window.addEventListener("resize",winsize,false);
 window.addEventListener("load",init,false);
 document.addEventListener("mousemove",mouse,false);
}  
else if (window.attachEvent){
 window.attachEvent("onload",init);
 document.attachEvent("onmousemove",mouse);
 window.attachEvent("onresize",winsize);
} 

})();
}//End.
</script>


</audio></a>
<marquee behavior="scroll" direction="right" scrollamount="10" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:Red;" size="5"> WELCOME TO aljuba bot  </font></strong></marquee></center></div></body></html>
<font color="BLUE" size="3">MR.robot </font></a>