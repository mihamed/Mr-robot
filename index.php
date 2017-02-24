<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Mr.robot&trade;

مرحــــــــــــــــــــبا بك يا عزيزي
</title><link rel="stylesheet" type="text/css" href="Aaa.css" media="all,handheld"/><link rel="shortcut icon" href="">
<script type="text/javascript" src=""></script>

<?php
error_reporting(0);
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
CURLOPT_USERAGENT => 'DESCRIPTION by spider.r365',
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
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> مٌرَحُبّا بك'.$nm.'</a></h3>
<ul>
<li>
 مــرحباً , تم تسجيلك بنجااح: <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="الخروج من البوت"></form></li>
<li>
<form action="index.php" method="post">
اضغط على تشغيل لتشغيل البوت</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
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
Via text sendiri</option>
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
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="تشغيل"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "الاحد",
        "الاثنين",
        "الثلاثاء",
        "الاربعاء",
        "الخميس",
        "الجمعة",
        "السبت"
);

$bulan=array(1=>
"يناير",
  "فبراير",
    "مارس",
     "ابريل",
       "مايو",
         "يونيو",
           "يوليو",
             "اغسطس",
               "سبتمبر",
          "اكتوبر",
     "نوفمبر",
"ديسمبر"
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
</h1>
<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h3 class="description">
<a target="_top" href= "" ><img src="http://f.top4top.net/p_399llkkn1.gif" border="0" alt="" title="Logo Design by https://www.facebook.com/ousma333" ><br /><sub><h1><font color="red">Script By Ousma</font> </sub></div><br/></h1>


<h2 class="title">
<div class="post-content">

<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<center>

<a href="https://www.facebook.com/spider.r365" alt="alihayder" target="_blank"><img
src="https://graph.facebook.com/100013615811356/picture?type=large" 
alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="200height="150


<div class="post-meta2">
</div></center></span>
</div></center><br>
<span>
</span>
</div>
<h3>King Bot Team</h3>
<br>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<font size="20" color="red">(</font><a class="sec" href="http://fb.com/spider.r365"><font color="sky blue" size="20">King Bot</font></a></b> <font size="20" color="red">💙</font>
<b>
<a class="sec" href="http://fb.com/spider.r365
"><font color="sky blue" size="20">robot</font></a></b><font size="20" color="red">)</font></marquee><br />
<font size="5" color="red">Bot  &copy; 2018</font>
</span>
</div></center><br>


<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> Get Token Ios </a></h3><br>
<center>
 <b><font color="red" face="Hobo Std"></font></b></a> 
<a href="http://goo.gl/Amfs1m" target="_blank" style="text-decoration: none;"><input type="button" value="Allow The App " style="border: 0;color: #fff;border-radius: 0 3px 3px 0;padding: 7px 8px 7px 9px;font-size: 12px;font-weight: bold;margin-left: -3px;box-shadow: inset 0 -2px 0px rgba(0,0,0,0.11);;margin-top: 10px;background: #ff0000;color: white;"> </a> </a></a></li>
<br>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="text-decoration: none;"><input type="button" value="Get Token" style="border: 0;color: #fff;border-radius: 0 3px 3px 0;padding: 7px 8px 7px 9px;font-size: 12px;font-weight: bold;margin-left: -3px;box-shadow: inset 0 -2px 0px rgba(0,0,0,0.11);;margin-top: 10px;background: #ff0000;color: white;"> </a>
<br>
<a href="https://www.facebook.com/spider.r365" target="_blank" style="text-decoration: none;"><input type="button" value="اضعط هنا لتوصل ع فيس بوك" style="border: 0;color: #fff;border-radius: 0 3px 3px 0;padding: 7px 8px 7px 9px;font-size: 12px;font-weight: bold;margin-left: -3px;box-shadow: inset 0 -2px 0px rgba(0,0,0,0.11);;margin-top: 10px;background: #ff0000;color: white;"> </a>
<br>

<br>
<form action="index.php" method="post"><input class="inp-text" type="text" style="height:30px;" name="token"> <input class="inp-btn" type="submit" style="height:30px;" value=" دخول "></form></div></div></div>';

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
User Bott: <font color="lime">'.count($user).'</font>
</div>';
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
echo '<script type="text/javascript">alert("INFO: Jaan Token fir se lo")</script>';
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

حسابي للتواصل: <a href="https://www.facebook.com/spider.r365"font color="red">اضغط هنا</font></a></div>


