<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 6.0.0
*/namespace
Adminer;const
VERSION="6.0.0";error_reporting(24575);set_error_handler(function($Wc,$Yc){return!!preg_match('~^Undefined (array key|offset|index)~',$Yc);},E_WARNING|E_NOTICE);$_d=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($_d||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Xk=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Xk)$$X=$Xk;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");function
connection($g=null){return($g?:Db::$instance);}function
adminer(){return
Adminer::$instance;}function
driver(){return
Driver::$instance;}function
connect(){$Rb=adminer()->credentials();$I=Driver::connect($Rb[0],$Rb[1],$Rb[2]);return(is_object($I)?$I:null);}function
idf_unescape($u){if(!preg_match('~^[`\'"[]~',$u))return$u;$xf=substr($u,-1);return
str_replace($xf.$xf,$xf,substr($u,1,-1));}function
q($Q){return
connection()->quote($Q);}function
idx($Ba,$x,$k=null){return($Ba&&array_key_exists($x,$Ba)?$Ba[$x]:$k);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
int_type(){return'(tiny|small|medium|big)?int(eger|\d)?';}function
number_type(){return'(^('.int_type().'|decimal|numeric|real|(binary_|half_|scaled_)?float\d?|(binary_)?double( precision)?|(small)?money)$)';}function
remove_slashes(array$sl,$_d=false){$I=array();foreach($sl
as$x=>$X)$I[stripslashes($x)]=(is_array($X)?remove_slashes($X,$_d):($_d?$X:stripslashes($X)));return$I;}function
bracket_escape($u,$Ka=false){static$Dk=array(':'=>':1',']'=>':2','['=>':3','"'=>':4','='=>':5');return
strtr($u,($Ka?array_flip($Dk):$Dk));}function
url_escape($Q){static$Dk=array();if(!$Dk){$Dk=array(' '=>'+');foreach(str_split("\"'<>#%&+=?".ini_get("arg_separator.input"))as$cb)$Dk[$cb]=sprintf('%%%02X',ord($cb));for($s=0;$s<256;$s++){if($s<32||$s>126)$Dk[chr($s)]=sprintf('%%%02X',$s);}}return
strtr((string)$Q,$Dk);}function
min_version($vl,$Pf="",$g=null){$g=connection($g);$qj=$g->server_info;if($Pf&&preg_match('~([\d.]+)-MariaDB~',$qj,$B)){$qj=$B[1];$vl=$Pf;}return$vl&&version_compare($qj,$vl)>=0;}function
charset(Db$f){return(min_version("5.5.3",0,$f)?"utf8mb4":"utf8");}function
ini_set($lh,$Y){return(function_exists('ini_set')?\ini_set($lh,$Y):false);}function
ini_bool($Se){$X=ini_get($Se);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
ini_bytes($Se){$X=ini_get($Se);switch(strtolower(substr($X,-1))){case'g':$X=(int)$X*1024;case'm':$X=(int)$X*1024;case'k':$X=(int)$X*1024;}return$X;}function
max_input_vars($J,$_h){$Tf=(int)ini_get("max_input_vars");return($Tf?(int)floor(($Tf-$_h)/$J):0);}function
max_input_vars_error(){$Se="max_input_vars";return
lang(0,"<b>$Se = ".ini_get($Se)."</b>");}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
set_password($ul,$N,$V,$E){$_SESSION["pwds"][$ul][$N][$V]=($_COOKIE["adminer_key"]&&is_string($E)?array(encrypt_string($E,$_COOKIE["adminer_key"])):$E);}function
get_password(){$I=get_session("pwds");if(is_array($I))$I=($_COOKIE["adminer_key"]?decrypt_string($I[0],$_COOKIE["adminer_key"]):false);return$I;}function
get_val($G,$m=0,$Cb=null){$Cb=connection($Cb);$H=$Cb->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return($J?$J[$m]:false);}function
get_vals($G,$d=0){$I=array();$H=connection()->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$d];}return$I;}function
get_key_vals($G,$g=null,$tj=true){$g=connection($g);$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row()){if($tj)$I[$J[0]]=$J[1];else$I[]=$J[0];}}return$I;}function
get_rows($G,$g=null,$l="<p class='error'>"){$Cb=connection($g);$I=array();$H=$Cb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!$g&&$l&&(defined('Adminer\PAGE_HEADER')||$l=="-- "))echo$l.error()."\n";return$I;}function
unique_array($J,array$w){foreach($w
as$v){if(preg_match("~^(PRIMARY|UNIQUE)$~",$v["type"])&&!$v["partial"]){$I=array();foreach($v["columns"]as$x){if(!isset($J[$x]))continue
2;$I[$x]=$J[$x];}return$I;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($x);}function
where(array$Z,array$n=array()){$I=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,true);$d=escape_key($x);$m=idx($n,$x,array());$ud=$m["type"];$cf=$m&&(is_blob($m)||preg_match('~binary~',$ud));$I[]=$d.($cf&&!is_utf8($X)?" = ".driver()->quoteBinary($X):(JUSH=="sql"&&$ud=="json"?" = CAST(".q($X)." AS JSON)":(JUSH=="pgsql"&&preg_match('~^jsonb?$~',$m["full_type"])?"::jsonb = ".q($X)."::jsonb":(JUSH=="sql"&&is_numeric($X)&&preg_match('~\.~',$X)?" LIKE ".q($X):(JUSH=="mssql"&&strpos($ud,"datetime")===false?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($m,q($X)))))));if(JUSH=="sql"&&preg_match('~char|text~',$ud)&&preg_match("~[^ -@]~",$X))$I[]="$d = ".q($X)." COLLATE ".charset(connection())."_bin";}foreach((array)$Z["null"]as$x)$I[]=escape_key($x)." IS NULL";return
implode(" AND ",$I);}function
where_columns(array$n){$I=array();foreach((array)$_GET["null"]as$x)$I[$x]=true;foreach((array)$_GET["where"]as$x=>$X){$x=bracket_escape($x,true);foreach($n
as$C=>$m){if($x==$C||strpos($x,idf_escape($C))!==false)$I[$C]=true;}}return$I;}function
where_check($X,array$n=array()){parse_str($X,$eb);remove_slashes(array(&$eb));return
where($eb,$n);}function
where_link($s,$d,$Y,$ih="="){$fh=($Y!==null?$ih:"IS NULL");return"&where[$s][col]=".url_escape($d).($fh!=first(adminer()->operators())?"&where[$s][op]=".url_escape($fh):"")."&where[$s][val]=".url_escape($Y);}function
convert_fields(array$e,array$n,array$M=array()){$I="";foreach($e
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Ca=convert_field($n[$x]);if($Ca)$I
.=", $Ca AS ".idf_escape($x);}return$I;}function
cookie_path(){return
strtr(preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]),array(";"=>"%3B",","=>"%2C"));}function
cookie($C,$Y,$Gf=2592000){header("Set-Cookie: $C=".rawurlencode($Y).($Gf?"; expires=".gmdate("D, d M Y H:i:s",time()+$Gf)." GMT":"")."; path=".cookie_path().(HTTPS?"; secure":"").($C=="adminer_import"?"":"; HttpOnly")."; SameSite=lax",false);}function
get_url($el,$Jb){$http_response_header=null;$Xc=array();set_error_handler(function($Wc,$l)use(&$Xc){$Xc[]=preg_replace('~^file_get_contents\([^)]*\):\s*~','',$l);return
true;});$I=file_get_contents($el,false,$Jb);restore_error_handler();$ne=(function_exists('http_get_last_response_headers')?http_get_last_response_headers():$http_response_header);return
array($I,(preg_match('~^HTTP/[\d.]+ (\d+)~',idx($ne,0,''),$B)?$B[1]:''),(array)$ne,($I===false?implode("\n",$Xc):''),);}function
get_settings($Mb){parse_str($_COOKIE[$Mb],$uj);return$uj;}function
get_setting($x,$Mb="adminer_settings",$k=null){return
idx(get_settings($Mb),$x,$k);}function
save_settings(array$uj,$Mb="adminer_settings"){$Y=http_build_query($uj+get_settings($Mb));cookie($Mb,$Y);$_COOKIE[$Mb]=$Y;}function
restart_session(){if(!ini_bool("session.use_cookies")&&(!function_exists('session_status')||session_status()==PHP_SESSION_NONE))session_start();}function
stop_session($Id=false){$hl=ini_bool("session.use_cookies");if(!$hl||$Id){session_write_close();if($hl&&ini_set("session.use_cookies",'0')===false)session_start();}}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($ul,$N,$V,$j=null){$dl=remove_from_uri(implode("|",array_keys(SqlDriver::$drivers))."|username|ext|".($j!==null?"db|":"").($ul=='mssql'||$ul=='pgsql'?"":"ns|").session_name());preg_match('~([^?]*)\??(.*)~',$dl,$B);return"$B[1]?".(sid()?SID."&":"").($_GET["ext"]?"ext=".url_escape($_GET["ext"])."&":"").($ul!="server"||$N!=""?url_escape($ul)."=".url_escape($N)."&":"")."username=".url_escape($V).($j!=""?"&db=".url_escape($j):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ig=null){if($ig!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ig;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($G,$A,$ig,$_i=true,$ed=true,$od=false,$rk=""){if($ed){$Mj=microtime(true);$od=!connection()->query($G);$rk=format_time($Mj);}$Fj=($G?adminer()->messageQuery($G,$rk,$od):"");if($od){adminer()->error
.=error().$Fj.script("messagesPrint();")."<br>";return
false;}if($_i)redirect($A,$ig.$Fj);return
true;}class
Queries{static$queries=array();static$start=0;}function
queries($G){if(!Queries::$start)Queries::$start=microtime(true);Queries::$queries[]=(driver()->delimiter!=';'?$G:(preg_match('~;$~',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G).";");return
connection()->query($G);}function
apply_queries($G,array$T,$Zc='Adminer\table'){foreach($T
as$R){if(!queries("$G ".$Zc($R)))return
false;}return
true;}function
queries_redirect($A,$ig,$_i){$ui=implode("\n",Queries::$queries);$rk=format_time(Queries::$start);return
query_redirect($ui,$A,$ig,$_i,false,!$_i,$rk);}function
format_time($Mj){return
lang(1,max(0,microtime(true)-$Mj));}function
relative_uri(){return
preg_replace_callback('~^[^?]*~',function($B){return
str_replace(":","%3A",$B[0]);},preg_replace('~^[^?]*/([^?]*)~','\1',$_SERVER["REQUEST_URI"]));}function
remove_from_uri($Gh=""){return
substr(preg_replace("~(?<=[?&])($Gh".(SID?"":"|".session_name()).")=[^&]*&~",'',relative_uri()."&"),0,-1);}function
get_files($x,$fc=false){$wd=$_FILES[$x];if(!$wd)return
null;foreach($wd
as$x=>$X)$wd[$x]=(array)$X;$I=array();foreach($wd["error"]as$x=>$l){if($l)return$l;$C=$wd["name"][$x];$zk=$wd["tmp_name"][$x];$Hb=file_get_contents($fc&&preg_match('~\.gz$~',$C)?"compress.zlib://$zk":$zk);if($fc){$Mj=substr($Hb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Mj))$Hb=iconv("utf-16","utf-8",$Hb);elseif($Mj=="\xEF\xBB\xBF")$Hb=substr($Hb,3);}$I[]=array($C,$Hb);}return$I;}function
get_file($x,$fc=false,$lc=""){$zd=get_files($x,$fc);if(!is_array($zd))return$zd;$I='';foreach($zd
as$wd){$Hb=$wd[1];$I
.=$Hb;if($lc)$I
.=(preg_match("($lc\\s*\$)",$Hb)?"":$lc)."\n\n";}return$I;}function
upload_error($l){$bg=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?lang(2).($bg?" ".lang(3,$bg):""):lang(4));}function
repeat_pattern($Uh,$y){return
str_repeat("$Uh{0,65535}",$y/65535)."$Uh{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\0-\x8\xB\xC\xE-\x1F]~',$X));}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
format_status(array$S,$x){$X=idx($S,$x,'?');if(!is_numeric($X))return
h($X);if($X<0)return'?';$za=($x=="Rows"&&(JUSH=="sqlite"||$S["Engine"]==(JUSH=="pgsql"?"table":"InnoDB")));return($za?"~ ":"").format_number($X);}function
friendly_url($X){return
preg_replace('~\W~i','-',$X);}function
table_status1($R,$pd=false){$I=table_status($R,$pd);return($I?reset($I):array("Name"=>$R));}function
column_foreign_keys($R){$I=array();foreach(adminer()->foreignKeys($R)as$p){foreach($p["source"]as$X)$I[$X][]=$p;}return$I;}function
fields_from_edit(){$I=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,true);$I[$C]=array("field"=>$C,"full_type"=>"","type"=>"","privileges"=>array("insert"=>1,"update"=>1,"where"=>1,"order"=>1),"null"=>true,"auto_increment"=>($C==driver()->primary),);}return$I;}function
dump_headers($ye,$wg=false){$I=adminer()->dumpHeaders($ye,$wg);$Bh=$_POST["output"];if($Bh!="text"||$I=="tar"){$zb=($Bh!="text"&&$Bh!="file"&&preg_match('~^[0-9a-z]+$~',$Bh)?".$Bh":"");header("Content-Disposition: attachment; filename=".adminer()->dumpFilename($ye).".$I$zb");}session_write_close();if(!ob_get_level())ob_start(null,4096);ob_flush();flush();return$I;}function
dump_csv(array$J){$Ok=$_POST["format"]=="tsv";foreach($J
as$x=>$X){if(preg_match('~["\n]|^0[^.]|\.\d*0$|'.($Ok?'\t':'[,;]|^$').'~',$X))$J[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($Ok?"\t":";")),$J)."\r\n";}function
parse_csv($Ub,$jj){$I=array();preg_match_all('~(?>"[^"]*"|[^"\r\n]+)+~',$Ub,$Rf);foreach($Rf[0]as$J){preg_match_all("~((?>\"[^\"]*\")+|[^$jj]*)$jj~",$J.$jj,$Sf);$I[]=$Sf[1];}return$I;}function
csv_value($X){return(preg_match('~^".*"$~s',$X)?str_replace('""','"',substr($X,1,-1)):$X);}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){return
ini_get("upload_tmp_dir")?:sys_get_temp_dir();}function
file_open_lock($o){if(is_link($o))return;$q=@fopen($o,"c+");if(!$q)return;@chmod($o,0660);if(!flock($q,LOCK_EX)){fclose($q);return;}return$q;}function
file_write_unlock($q,$Yb){rewind($q);fwrite($q,$Yb);ftruncate($q,strlen($Yb));file_unlock($q);}function
file_unlock($q){flock($q,LOCK_UN);fclose($q);}function
first(array$Ba){return
reset($Ba);}function
password_file($h){$o=get_temp_dir()."/adminer.key";if(!$h&&!file_exists($o))return'';$q=file_open_lock($o);if(!$q)return'';$I=stream_get_contents($q);if(!$I){$I=rand_string();file_write_unlock($q,$I);}else
file_unlock($q);return$I;}function
rand_string(){return(function_exists('random_bytes')?bin2hex(random_bytes(16)):md5(uniqid(strval(mt_rand()),true)));}function
select_value($X,$_,array$m,$qk){if(is_array($X)){$I="";if(array_filter($X,'is_array')==array_values($X)){$of=array();foreach($X
as$W)$of+=array_fill_keys(array_keys($W),null);foreach(array_keys($of)as$mf)$I
.="<th>".h($mf);foreach($X
as$W){$I
.="<tr>";foreach(array_merge($of,$W)as$ol)$I
.="<td>".select_value($ol,$_,$m,$qk);}}else{foreach($X
as$mf=>$W)$I
.="<tr>".($X!=array_values($X)?"<th>".h($mf):"")."<td>".select_value($W,$_,$m,$qk);}return"<table>$I</table>";}if(!$_)$_=adminer()->selectLink($X,$m);if($_===null){if(is_mail($X))$_="mailto:$X";if(is_url($X))$_=$X;}$X=driver()->value($X,$m);$I=adminer()->editVal($X,$m);if($I!==null){if(!is_utf8($I))$I="\0";elseif($qk!=""&&is_shortable($m))$I=shorten_utf8($I,max(0,+$qk));else$I=h($I);}return
adminer()->selectVal($I,$_,$m,$X);}function
is_blob(array$m){return
preg_match('~blob|bytea|raw|file'.(JUSH=="mssql"?'|binary|image':'').'~',$m["type"])&&!in_array($m["type"],idx(driver()->structuredTypes(),lang(7),array()));}function
is_mail($Nc){$Ea='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ac='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Uh="$Ea+(\\.$Ea+)*@($Ac?\\.)+$Ac";return
is_string($Nc)&&preg_match("(^$Uh(,\\s*$Uh)*\$)i",$Nc);}function
is_url($Q){$Ac='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^((https?):)?//($Ac?\\.)+$Ac(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q);}function
is_shortable(array$m){return!preg_match('~'.number_type().'|date|time|year~',$m["type"]);}function
host_port($N){return(preg_match('~^(:([^:].*)|(\[(.+)\]|(([^:]+://)?[^:]+))(:(\d+))?)$~',$N,$B)?array($B[4].$B[5],$B[2].$B[8]):array($N,''));}function
count_rows($R,array$Z,$df,array$Zd){$G=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($df&&(JUSH=="sql"||count($Zd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Zd).")$G":"SELECT COUNT(*)".($df?" FROM (SELECT 1$G GROUP BY ".implode(", ",$Zd).") x":$G));}function
slow_query($G){$j=adminer()->database();$sk=adminer()->queryTimeout();$zj=driver()->slowQuery($G,$sk);$g=null;if(!$zj&&support("kill")){$g=connect();if($g&&($j==""||$g->select_db($j))){$pf=get_val(connection_id(),0,$g);echo
script("const timeout = setTimeout(() => { ajax('".js_escape(ME)."script=kill', function () {}, 'kill=$pf&token=".get_token()."'); }, 1000 * $sk);");}}ob_flush();flush();$I=@get_key_vals(($zj?:$G),$g,false);if($g){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$I;}function
get_token(){$xi=rand(1,1e6);return($xi^$_SESSION["token"]).":$xi";}function
verify_token(){list($_k,$xi)=explode(":",$_POST["token"]);return($xi^$_SESSION["token"])==$_k&&in_array($_SERVER["HTTP_SEC_FETCH_SITE"],array("","same-origin"));}function
compress_alphabet(){return
strtr(implode(range('"','~')),"'\\","!\n");}function
decompress_string($Q,$rc=""){$xa=array_flip(str_split(compress_alphabet()));$y=strlen($Q);$rl=($y?13*($y-1)/2-$xa[$Q[0]]:0);$Qa="";$Mi=0;$Ni=0;for($s=1;$s<$y;$s+=2){$Mi=($Mi<<13)+$xa[$Q[$s]]*93+$xa[$Q[$s+1]];$Ni+=13;while($Ni>=8&&$rl>=8){$Ni-=8;$rl-=8;$Qa
.=chr($Mi>>$Ni);$Mi&=(1<<$Ni)-1;}}if($Qa=="")return"";if($rc!=""&&function_exists('inflate_init'))return
inflate_add(inflate_init(ZLIB_ENCODING_RAW,array('dictionary'=>$rc)),$Qa,ZLIB_FINISH);return($rc==""&&function_exists('gzinflate')?gzinflate($Qa):inflate($Qa,$rc));}function
inflate($Qa,$rc=""){$Df=array(3,4,5,6,7,8,9,10,11,13,15,17,19,23,27,31,35,43,51,59,67,83,99,115,131,163,195,227,258);$Ef=array(0,0,0,0,0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,0);$vc=array(1,2,3,4,5,7,9,13,17,25,33,49,65,97,129,193,257,385,513,769,1025,1537,2049,3073,4097,6145,8193,12289,16385,24577);$xc=array(0,0,0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10,11,11,12,12,13,13);$I=$rc;$F=0;do{$Ad=inflate_bits($Qa,$F,1);$U=inflate_bits($Qa,$F,2);if(!$U){$F=($F+7)&~7;$y=inflate_bits($Qa,$F,16);$F+=16;$I
.=substr($Qa,$F>>3,$y);$F+=$y<<3;}else{if($U==1){$Kf=array_merge(array_fill(0,144,8),array_fill(0,112,9),array_fill(0,24,7),array_fill(0,8,8));$yc=array_fill(0,30,5);}else{$Jf=inflate_bits($Qa,$F,5)+257;$wc=inflate_bits($Qa,$F,5)+1;$oh=array(16,17,18,0,8,7,9,6,10,5,11,4,12,3,13,2,14,1,15);$og=array_fill(0,19,0);$ng=inflate_bits($Qa,$F,4)+4;for($s=0;$s<$ng;$s++)$og[$oh[$s]]=inflate_bits($Qa,$F,3);$pg=inflate_table($og);$Ff=array();while(count($Ff)<$Jf+$wc){$Wj=inflate_symbol($Qa,$F,$pg);if($Wj==16)$Ff=array_merge($Ff,array_fill(0,inflate_bits($Qa,$F,2)+3,end($Ff)));elseif($Wj==17)$Ff=array_merge($Ff,array_fill(0,inflate_bits($Qa,$F,3)+3,0));elseif($Wj==18)$Ff=array_merge($Ff,array_fill(0,inflate_bits($Qa,$F,7)+11,0));else$Ff[]=$Wj;}$Kf=array_slice($Ff,0,$Jf);$yc=array_slice($Ff,$Jf);}$Lf=inflate_table($Kf);$_c=inflate_table($yc);while(($Wj=inflate_symbol($Qa,$F,$Lf))!=256){if($Wj<256)$I
.=chr($Wj);else{$y=$Df[$Wj-257]+inflate_bits($Qa,$F,$Ef[$Wj-257]);$zc=inflate_symbol($Qa,$F,$_c);$Ug=strlen($I)-$vc[$zc]-inflate_bits($Qa,$F,$xc[$zc]);for($s=0;$s<$y;$s++)$I
.=$I[$Ug+$s];}}}}while(!$Ad);return($rc==""?$I:substr($I,strlen($rc)));}function
inflate_bits($Qa,&$F,$Ob){$I=0;for($s=0;$s<$Ob;$s++){$I+=((ord($Qa[$F>>3])>>($F&7))&1)<<$s;$F++;}return$I;}function
inflate_table(array$Ff){$R=array();$ob=0;for($Ra=1;$Ra<=max($Ff);$Ra++){foreach($Ff
as$Wj=>$y){if($y==$Ra){$R[$Ra][$ob]=$Wj;$ob++;}}$ob<<=1;}return$R;}function
inflate_symbol($Qa,&$F,array$R){$ob=0;$Ra=0;do{$ob=($ob<<1)+inflate_bits($Qa,$F,1);$Ra++;}while(!isset($R[$Ra][$ob]));return$R[$Ra][$ob];}function
script($Cj,$Ck="\n"){return"<script".nonce().">$Cj</script>$Ck";}function
script_src($el,$ic=false){return"<script src='".h($el)."'".nonce().($ic?" defer":"")."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
on($ad,$fe,$_a=null){$Aa=array();foreach(array_slice(func_get_args(),2)as$X)$Aa[]=json_encode($X,256);return" data-on$ad='".str_replace(array('&','<',"'"),array('&amp;','&lt;','&#039;'),"$fe(".implode(", ",$Aa).")")."'";}function
input_hidden($C,$Y=""){return"<input type='hidden' name='".h($C)."' value='".h($Y)."'>\n";}function
input_token(){return
input_hidden("token",get_token());}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($Q){return
str_replace(array('&','<','"',"'","\0"),array('&amp;','&lt;','&quot;','&#039;','&#0;'),$Q);}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$hb,$tf="",$c="",$mb="",$vf=""){$I="<input type='checkbox' name='$C' value='".h($Y)."'".($hb?" checked":"").($tf==""&&$mb?" class='$mb'":"").($vf?" aria-labelledby='$vf'":"").$c.">";return($tf!=""?"<label".($mb?" class='$mb'":"").">$I".h($tf)."</label>":$I);}function
optionlist($mh,$gj=null,$il=false){$I="";foreach($mh
as$mf=>$W){$nh=array($mf=>$W);if(is_array($W)){$I
.='<optgroup label="'.h($mf).'">';$nh=$W;}foreach($nh
as$x=>$X)$I
.='<option'.($il||is_string($x)?' value="'.h($x).'"':'').($gj!==null&&($il||is_string($x)?(string)$x:$X)===$gj?' selected':'').'>'.h($X);if(is_array($W))$I
.='</optgroup>';}return$I;}function
html_select($C,array$mh,$Y="",$c="",$vf=""){static$tf=0;$uf="";if(!$vf&&substr($mh[""],0,1)=="("){$tf++;$vf="label-$tf";$uf="<option value='' id='$vf'>".h($mh[""]);unset($mh[""]);}return"<select name='".h($C)."'".($vf?" aria-labelledby='$vf'":"")."$c>".$uf.optionlist($mh,$Y)."</select>";}function
html_radios($C,array$mh,$Y="",$jj=""){$I="";foreach($mh
as$x=>$X)$I
.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>$jj";return$I;}function
confirm($ig=""){return
on('click','confirmClick',$ig?:lang(8));}function
print_fieldset($t,$Cf,$yl=false){echo"<fieldset><legend>","<a href='#fieldset-$t' class='toggle'>$Cf</a>","</legend>","<div id='fieldset-$t'".($yl?"":" class='hidden'").">\n";}function
bold($Ta,$mb=""){return($Ta?" class='active $mb'":($mb?" class='$mb'":""));}function
js_escape($Q){return
str_replace("<","\\x3C",addcslashes($Q,"\r\n'\\"));}function
js_escape_re($Q){return
addcslashes(preg_quote($Q,"/"),"\r\n");}function
pagination_href($D){return
remove_from_uri("page|next").($D?"&page=$D".($_GET["next"]!=""?"&next=".url_escape($_GET["next"]):""):"");}function
pagination($D,$Vb){return" ".($D==$Vb?($D?"<b>".($D+1)."</b>":$D+1):'<a href="'.h(pagination_href($D)).'">'.($D+1)."</a>");}function
hidden_fields(array$ri,array$Be=array(),$ii=''){$I=false;foreach($ri
as$x=>$X){if(!in_array($x,$Be)){if(is_array($X))hidden_fields($X,array(),$x);else{$I=true;echo
input_hidden(($ii?$ii."[$x]":$x),$X);}}}return$I;}function
hidden_fields_get(){echo(sid()?input_hidden(session_name(),session_id()):''),($_GET["ext"]?input_hidden("ext",$_GET["ext"]):""),(isset($_GET[DRIVER])?input_hidden(DRIVER,SERVER):""),input_hidden("username",$_GET["username"]);}function
file_input($c,$Mi=""){$Vf="max_file_uploads";$Wf=ini_get($Vf);$bg="upload_max_filesize";$cg=ini_bytes($bg);$fi=ini_bytes("post_max_size");if($fi&&$fi<$cg){$bg="post_max_size";$cg=$fi;}$dg=ini_get($bg);return(ini_bool("file_uploads")?"<input type='file'$c".on('change','fileChange',(int)$Wf,lang(9,"$Vf = $Wf"),$cg,lang(9,"$bg = $dg")).">$Mi":lang(10));}function
enum_input($U,$c,array$m,$Y,$Qc=""){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$Rf);$ii=($m["type"]=="enum"?"val-":"");$hb=(is_array($Y)?in_array("null",$Y):$Y===null);$I=($m["null"]&&$ii?"<label><input type='$U'$c value='null'".($hb?" checked":"")."><i>$Qc</i></label>":"");foreach($Rf[1]as$X){$X=stripcslashes(str_replace("''","'",$X));$hb=(is_array($Y)?in_array($ii.$X,$Y):$Y===$X);$I
.=" <label><input type='$U'$c value='".h($ii.$X)."'".($hb?' checked':'').'>'.h(adminer()->editVal($X,$m)).'</label>';}return$I;}function
input(array$m,$Y,$r,$Ia=false,$bl=false){$C=h(bracket_escape($m["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r)$r="json";$jf=($r=="json"||preg_match('~^jsonb?$~',$m["full_type"]));if($jf&&$Y!=''&&(JUSH!="pgsql"||$m["type"]!="json"))$Y=json_encode(is_array($Y)?$Y:json_decode($Y),128|64|256);$Li=(JUSH=="mssql"&&$bl&&$m["auto_increment"]);if($Li&&!$_POST["save"])$r=null;$Ud=(isset($_GET["select"])||$Li?array("orig"=>lang(11)):array())+adminer()->editFunctions($m);$Vc=driver()->enumLength($m);if($Vc){$m["type"]="enum";$m["length"]=$Vc;}$c=" name='fields[$C]".($m["type"]=="enum"||$m["type"]=="set"?"[]":"")."'".($Ia?" autofocus":"");echo
driver()->unconvertFunction($m)." ";$R=$_GET["edit"]?:$_GET["select"];if($m["type"]=="enum")echo
h($Ud[""])."<td>".adminer()->editInput($R,$m,$c,$Y);else{$he=(in_array($r,$Ud)||isset($Ud[$r]));$Bd=0;foreach($Ud
as$x=>$X){if($x===""||!$X)break;$Bd++;}echo(count($Ud)>1?"<select name='function[$C]'".on('change','functionChange').on_help_value('^SQL$').">".optionlist($Ud,$r===null||$he?$r:"")."</select>":h(reset($Ud)))."<td".($Bd&&count($Ud)>1?on('input','skipOriginal',$Bd):"").">";$Ue=adminer()->editInput($R,$m,$c,$Y);if($Ue!="")echo$Ue;elseif(preg_match('~bool~',$m["type"]))echo"<input type='hidden'$c value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked":"")."$c value='1'>";elseif($m["type"]=="set")echo
enum_input("checkbox",$c,$m,(is_string($Y)?explode(",",$Y):$Y));elseif(is_blob($m)&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'>";elseif($jf)echo"<textarea$c cols='50' rows='12' class='jush-json'>".h($Y).'</textarea>';elseif(($ok=preg_match('~text|lob|memo~i',$m["type"]))||preg_match("~\n~",$Y)){if($ok&&JUSH!="sqlite")$c
.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$c
.=" cols='30' rows='$K'";}echo"<textarea$c>".h($Y).'</textarea>';}else{$Rk=driver()->types();$eg=(!preg_match('~int~',$m["type"])&&preg_match('~^(\d+)(,(\d+))?$~',$m["length"],$B)?((preg_match("~binary~",$m["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$m["unsigned"]?1:0)):($Rk[$m["type"]]?$Rk[$m["type"]]+($m["unsigned"]?0:1):0));if(JUSH=='sql'&&min_version(5.6)&&preg_match('~time~',$m["type"]))$eg+=7;echo"<input".((!$he||$r==="")&&preg_match('~^'.int_type().'$~',$m["type"])&&!preg_match('~\[]~',$m["full_type"])?" type='number'":"")." value='".h($Y)."'".($eg?" data-maxlength='$eg'":"").(preg_match('~char|binary~',$m["type"])&&$eg>20?" size='".($eg>99?60:40)."'":"")."$c>";}echo
adminer()->editHint($R,$m,$Y),(count($Ud)>1?script("fire(qs('select', qsl('td').previousSibling), 'change');",""):"");}}function
process_input(array$m){$u=bracket_escape($m["field"]);$r=idx($_POST["function"],$u);if($r=="orig")return(preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?idf_escape($m["field"]):false);if($r=="NULL")return"NULL";if(is_blob($m)&&ini_bool("file_uploads")){$wd=get_file("fields-$u");if(!is_string($wd))return
false;return
driver()->quoteBinary($wd);}$Y=idx($_POST["fields"],$u);if($Y===null)return
false;if($m["type"]=="enum"||driver()->enumLength($m)){$Y=idx($Y,0);if($Y=="orig"||!$Y)return
false;if($Y=="null")return"NULL";$Y=substr($Y,4);}if($m["auto_increment"]&&$Y=="")return
null;if($m["type"]=="set")$Y=implode(",",(array)$Y);if($r=="json"){$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}return
adminer()->processInput($m,$Y,$r);}function
search_tables(){$_GET["where"][0]["val"]=$_POST["query"];$ij="<ul>\n";foreach(table_status('',true)as$R=>$S){$C=adminer()->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$H=connection()->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",adminer()->selectSearchProcess(fields($R),array())),1));if(!$H||$H->fetch_row()){$ni="<a href='".h(ME."select=".url_escape($R)."&where[0][op]=".url_escape($_GET["where"][0]["op"])."&where[0][val]=".url_escape($_GET["where"][0]["val"]))."'>$C</a>";echo"$ij<li>".($H?$ni:"<p class='error'>$ni: ".error())."\n";$ij="";}}}echo($ij?"<p class='message'>".lang(12):"</ul>")."\n";}function
on_help($ok,$wj=0){return
on('mouseover','helpMouseover',$ok,$wj).on('mouseout','helpMouseout');}function
on_help_value($Gi="",$Ki=""){return
on('mouseover','helpValueMouseover',$Gi,$Ki).on('mouseout','helpMouseout');}function
edit_form($R,array$n,$J,$bl,$l=''){$bk=adminer()->tableName(table_status1($R,true));page_header(($bl?lang(13):lang(14)),$l,array("select"=>array($R,$bk)),$bk);adminer()->editRowPrint($R,$n,$J,$bl);if($J===false){echo"<p class='error'>".lang(15)."\n";return;}echo"<form action='' method='post' enctype='multipart/form-data' id='form'>\n";$Lc=false;$Dl=($bl&&!isset($_GET["select"])?where_columns($n):array());$Kb=(count($Dl)!=count($n));if(!$Kb)$Dl=array();if(!$n)echo"<p class='error'>".lang(16)."\n";else{echo"<table class='layout nowrap'".on('keydown','editingKeydown').">\n";$Ia=!$_POST;foreach($n
as$C=>$m){echo"<tr".($Dl[$C]?on('change','whereChange'):"")."><th>".adminer()->fieldName($m);$k=idx($_GET["set"],bracket_escape($C));if($k===null){$k=$m["default"];if($m["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$k,$Hi))$k=$Hi[1];if(JUSH=="sql"&&preg_match('~binary~',$m["type"]))$k=bin2hex($k);}$Y=($J!==null?($J[$C]!=""&&JUSH=="sql"&&preg_match("~enum|set~",$m["type"])&&is_array($J[$C])?implode(",",$J[$C]):(is_bool($J[$C])?+$J[$C]:$J[$C])):(!$bl&&$m["auto_increment"]?"":(isset($_GET["select"])?false:$k)));if(!$_POST["save"]&&is_string($Y))$Y=adminer()->editVal($Y,$m);if(($bl&&!isset($m["privileges"]["update"]))||$m["generated"])echo"<td class='function'><td>".select_value($Y,'',$m,null);else{$Lc=true;$r=($_POST["save"]?idx($_POST["function"],bracket_escape($C),""):($bl&&preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(!$_POST&&!$bl&&$Y==$m["default"]&&preg_match('~^[\w.]+\(~',$Y))$r="SQL";if(preg_match("~time~",$m["type"])&&preg_match('~^CURRENT_TIMESTAMP~i',$Y)){$Y="";$r="now";}if($m["type"]=="uuid"&&$Y=="uuid()"){$Y="";$r="uuid";}if($Ia!==false)$Ia=($m["auto_increment"]||$r=="now"||$r=="uuid"?null:true);input($m,$Y,$r,$Ia,$bl);if($Ia)$Ia=false;}}if(!fields($R)&&driver()->primary!="")echo"<tr>"."<th><input name='field_keys[]'".on('input','fieldChange').">"."<td class='function'>".html_select("field_funs[]",adminer()->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>";echo"</table>\n";}echo"<p>\n";if($Lc){echo"<input type='submit' value='".lang(17)."'>\n";if(!isset($_GET["select"])&&$Kb){$sc=($Dl&&($l!=""||adminer()->error!="")?" disabled":"");echo"<input type='submit' name='insert' value='".($bl?lang(18):lang(19))."' title='Ctrl+Shift+Enter'$sc".($bl?on('click','ajaxForm',lang(20)):"").">\n";}}echo($bl?"<input type='submit' name='delete' value='".lang(21)."'".confirm().">\n":"");if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo
input_hidden("referer",(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"])),input_hidden("save",1),input_token(),"</form>\n";}function
shorten_utf8($Q,$y=80,$Sj=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$y).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$Q,$B);return
h($B[1]).$Sj.(isset($B[2])?"":"<i>…</i>");}function
icon($xe,$C,$we,$uk,$c=""){return"<button ".($C?"type='submit' name='$C'":"draggable='true' tabindex='-1'")." title='".h($uk)."' class='icon icon-$xe".($C?"":" jsonly")."'$c><span>$we</span></button>";}function
copy_icon(){$Nb=lang(22);return"<a href='' class='jsonly icon-copy' title='$Nb'><span>$Nb</span></a>";}if(isset($_GET["file"])){if(substr(VERSION,-4)!='-dev'){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");}ini_set("zlib.output_compression",'1');if($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
decompress_string('!c0=@iDZ*tV?H*{U)[Q;B/1SR=Dh9&hJv;rrHHN,.V&KGmzhDwb9E:tfItN#CwUSwX?Xyeqi5d/N>]A"1lTaK
Tx^G#)>.UM~&(MUO{shFwKG+g4,>C*S:
f1hRcL)KhkmZFtH^qWCMBf7tZ{.#f{8V6<
#Nk9.jSA&0km
lxTc6$tVXF.+.*cJeW<wG~51NPIP4xT,`5Fw(3!{(~-,9<s}YqWT+L%^[i[s<&8ErH[O8<a)
ljb
$LurL4t]W%a>H/b
X/{EMCz:LXX((.yD>6A0+]t%ACU_
:"Bp%c=`r4T.#6G1(p
xo=TMNIiX,W0G-OEkD}^/L"3iRuM0)KZQ^aWB9dsO%0WmcO<LgliJIDSwKw0uo4(Piokl7g)}Qq_R"C>
^,?D183n.@41e}1M3L@&rCG$;yG3^fAu1qCeb_`V5R)ywQ+^^}Y?,S-#YZFZG
*@I%I_vxm,Tu:<aGT4wdZr#t8h]Nq~_-mA_aP)C2W
3#$o
g`gA/T"apmp;"31><i"",jWq9Wx4|Kj$:Svf`fH`|l`L/=wn!GzOm+(2zYb@S?I6~Dgg51]s$GQ<f%*sZ)4os*u%H<]daIUU7+nOS>!R,?jI-ZyOTT8YA+<ro/FX
5%v%]D1&UG`Rk{"Wc.*PH+X"!Vb@SA=T#6)+N_
VgZ:[vm-?:-d-#LVMbB`M*
o3=!8PG}PV45(W`#.!4Aj#=
`|=e];={gdf>3&l{-kM.$C*+s{3":?S*Zv4|Rl!*UYvBXH@}(A,#om09^h1i;#LHmj2,KUT]s;#mi|*91KjF]nE
u?>^sG`oFK
)Wofomi0<!n"hdYaSs6[44(o8rHBG_@1V2u@D_*jz/#ZgKg<,ob6)a>B~0
Nc9PJ]bx=7K{0`!<w~"{8gg&A2+L#$C,xw#&#5qLhH:Y
6oD1wS)Hu:z&]%$L:*RH&&hm9*p.)J&x-8E0z+soB4Y.o:5!`DtOyw7783CWgj
WZ%`ELhCb!<9!`!t;k@5]}^L$~J|@.agt}?B1>
;"ZGyF-kRn"BIwMi;iFn0;f?!>s@V%wLZZ[kKwyDKfGko5=+|UjHeZjXy;0;#G@L"d`Um3u4Z@)WU.Kf:>6w?u|8l*.uRy`amgR$8Nv?MAbetW1fZC=.a/i!<lm+CgiuJdI)Ig2l@6xS*[@!@B.hXtesj)KZ`"D(QZyUo#,afykRAvt+#nz?,6c9u&`9kdt)X35?[Y<n!"C4r!0$AJl3>+#H(mk1pQn,Z3ZZ]8D)q@wst)_4|I5f}dsW#hqo*!.
4#"_/$:mCAq.5UCVL;oIlfE&U`w!f9m@e?)4t)~-8Kr.@Bm$9-|,R
ult.W=H4(dSM?+2D
gapxO[e_/=:kYP05Q|i+[N_N-YHIAe)0I*>{8]&Z?!aMCh.,oL@6p&lY$/
U=Fds9>*<FAc!>,5<A*;C+!_3@O6|?
//8+>*;@Um0hT[y8<Yt,@dvwiU()maH>967;d_]`={>5EWy&s32*#uINV)k5YG"ekF2}hI1O:Mj?8&AG/j[.-n!P5/("uWRm`3"j5%iI+qc5SJ+:9eOv83%i]U%[V*dHY/2lm8EP@h:*ITM4#//"X9KhV|EJ;q*De_$X_uTkg^D"0(-oU$AjZ^;N#1fw]3U1a`)mkv^ymmdQDDS;q71|/~(_`/BNq++E<jkdNVV@mh?.W_4M<w=_(ybU80Bn/@V^N!54"@
H!U(`":dm[rVdms6(S],j-batnN&O(^ru_<To+HJ~-NHu&
@=6dl$NMZ6.-yJ1jkQMe$lOAr{RGpt_56jj]YcYfGIIoQ"Gp(LKTcE%
(#A-Ss>OBN92I3S^/SZ[Y{fR5U]f3~"At`%-@82:PR%ue
?eN{]g1_DyuG)bqfX_Qs^{78KXKDK$X3a[Ecg5g;AJ4X-!D6[i7{=;"[e<PUxWs#8`
A
"RPK}9NBKH69/U1HuFO6us<2>Oj!}^0)84[gIeYd+TUi:!R?Fdgb1)D%@K@H-J^5m+l!YgY?3xK#mU+#Qm]0g"V)XSM0|uEUQFXQBk%K.*BURB
10iC:gT=p:fn<{1$Zp5Ovs@e;!HiB|gIW:-0v}QHRYkl1<T*o2TX81n2`o1uT)@|7jq%"/7@G)frLDr8H3rf_Na<86aPUN*MUbTee4EdGd"1t=NaEF
;iySU?Y;v.4>
RP2b=1]Ad#4rICDk=x"Z`z?~X!`9<#2>$)ds-gMK0Ux00NP!8ZqDXXp3GXgn;Q/Yh-#qdOQ)S}u]q?W-CFEV(7eTC:uKZPMYS5$i,I
2[0ov7,YH0pH6R`n,nr(8U[C-nTMc4~8NY~#n])3`!4/vklG
N%[#+;)i29O[fww}VbQ]rKi%y-ZW>Gfjs~p(*;U,"!Nb?-U]j|.+n]tcTM&fIT9Txd(Xod^%"{+[N9i2wzya_4MaMv!mcFuYxzK2uWypf-Yk^aYCxviP2qUT6}5(x~cMiq^HyEAUC"wnB}[#@KK)25n!nubey@KY7vpFug_hT>MRR-PyeDx`nbnx+Esrx8K7s3mrcwqM21p|blg?r41.s2Fe>OEZ`k/JpHne&Us&nDhatAWZv[y&$@`;Qn@WmZnmpc6]Y4TVtMp;4DQvyF0k8pZD=5bWwf
&@wXiEVG3L~r9x>f
DJv/ymXPyEB_ctnuw=s~Cw_nhh`{Ej14p4<A."no_E=r?V>
X/mcPhtkK
SHlA[=3)jxBjTN?Fe=K3mXc[JfhI)O+H?s4z>nCQ1zsK7lTpOp/EyNykw~PCe>j:YBo!af6g2s.elsKdH90yhlW|`Ib;pXh[h8+thI)*3^^VMelUX,D7=E%gNYB|!Ui(a%<e,qo(V~,OVWBQiQa{E~JjL.l)Z)s~SM<;1@H4S=U(RF;7uOW[""8dG;qK-cOo"FZYYl"dR%j%1)P33!1_jb2My9WJ$HcX;,>3z#p{Vl.-7WAo(snORM+[dimjqqHs6f=}g$mcji$bJZ[:XSHOb>Xmtx/<NJHc]$bOxnwttNq~T+A~i&.dMyF@w]c8_/6O8XCKwJyFbyBn[4e~Mb[,2oL?
nw.DpU|W%F+RddY/Zd.3$0W!sX9Lx^%b7@mO2x}SPPcu5gdBS;rHC:7^tfOQRKVQD&s)9oM`LZ_q;f]]#43gQkr=Z_L9p.?`P=j.yac@GbLQ^f<GGZ~]6kya;<8:F@hcNG,P!41@F)/:1Qq@&!L?]UN!3MG]s[~OAU`#nEbRUKQ*1(wpi7z-+cg_!Rbg$@^7a,TC#U_Is_vM"7L=&1(@d.AN*2H2hG(a<4JcT4QrvvmyR9>VCK0L;+;0K/BTI7@[lNzAgjG:)Y5`IIGxr!$lWV1aWii,3F!/{`s13+P
WmZ/+Rx>/5kfH^HZw96+`+Kg
d{skqlg_Z&_>xhPZN4XZ]LMvK_DQt{mZ>{EvrNTg9Ym"-?2=4,a]XVx$<gc$#&rc`0c@w"b
iJmT:GD~_
_*u!sl`,twN*82)AXsWx_7Chyn=14#77aNK<%RuEZMtV5bYfhw2RC,-2"(L,y<0T4qAY:ww{Z~<,Y>D}(Bk4n+&c"gcS0j9VkYQ=uJ<^:uQ
et&&B>f3yfuUqMh2DNQD;mk?ce`(?3S-WN4Q1mQBHMO(Gt2+nYFK`tncD)YIlKodjnrl]=O|6G5>V:Ex=5w]75MD501&2,gCqF
k]B*OK&O4=sBXd&q8BwW5hdkg4S1j#0X,E7vh8)NNmp6R]1curHvrKxu59J$S:1L6A;Mx/840/;]@BF)AkbJ~D"3>/"SoFH+&mO[y"EbOnY$evn)/<+-->rA,2QHBqRdJk;W4j#^S7AHal}2Hr|mYOBF`,Xw!J(7+RrSuO[aRC^yfg`Y^qE:o;0d/Y9/CaT?ZW{B^F/S1p:<?qS(|,a_M$6L5UzkJJXb=!>?qKg`yn*Wr@Nf1l/UF^3^*u?/3yJi?`lUmesKe.$4kv5*Ca(`?m[EX0/aO>(xbesGcRlE_Tzf7d<XX`)9G1`d>6VfK@Id
n;HULv1;x]a+n|H5$GpIYWE/2@2bH*b~Euozf/VRryH=4fpDuUa&LMWGpnMtJfxRu!YDf^_3r-=3nMt_v[3Z9s%iTc/<AA
"jF:YJ4c},/bNbT^[Ekpl"UA;J%)h%kQ4b*56aD9FCwnmmTb59/A%AR`60iM=y%Qxs_XZ)XQQ8O8pc7Z4-$?i5EYH$c#?7_-Yslj.FL$Er7
c$p(GPo*@RfuCsbme7[v:$ZGKTl"_M_)Ym0h+QDWXq?4Eoh-R7bn~ga%7@ZBwnyMh7a');}elseif($_GET["file"]=="dark.css"){header("Content-Type: text/css; charset=utf-8");echo
decompress_string('%OsbOb3V?!K0U*,j#-4V$+4lSl,oCh*02mX@fy~Y!-lFD?AZS5iE
nM`YKnnN5@7$,h]yHv0]"r/{_.;5=S+SNKE}<JYs`q%O%%)irj"Ua|G&>l)NqxPHIui")?!f$TF|nwt-nQCaG&Tzq)X$0a:"l<uhiWpN+Q>JUl.I??
0[m@%2{lZZ-SVaY0c(Abuipc;HrUB.?"L
&fe39+`O>CaP%DBGl_a;sKU:Vn{vUd)#z;(-4/lH:f/yqJRLo1D)]&Q)#F_Ex@I.Aoq!%P+x`#:u7a*NRit]e+S_#3_W;B1:p*qj1n&6tLeURFTa*Z%=PigZV?!E,M#fGWI7
Vby;v}uyiyNSk%!K32:q%~)Z7R]f7*[T1VD8GAHNE,gNAjPt3bJTq!),5tH82n<xEH5{06?o3=vyf/"d[Dx=^/`OW(R/VJpy<uN~pK
XY0h>3?PG;:6W2&H^g`XJac/.2vy_[sa[I@2XZ6h^)(qYAo-$5uc0Ep%,GX=n?^Dh<AHDPP6:^cBoLiHv;/&f"x+
Fxs2:m>cC)c>Lo
0T]2{suTY+[`^=g^8K@M"IJhD,eB]&O05-RUzKB;q=jP@t>t?wQJam-T
Ct4iGwsJeBb--L[GY@5KjZDe)KI2"iJ+I
sFktJV_tO_ae<,6L%wV]]G$83G65)NlCxcni0jK(!Hn+6;A/K;bfn9xSp=TVCsf``qH7Mimc,xAY3>O[u4w?fz&Fj
9f,[];aKusLC!8-;hiECD`(]x7[,6WvZQwb}-<xBhai*6z.x#y/,/,PfbzjJZY5<k)c%nD&#@k/fnmY$Bx2daWEELXWrfOnaM:!Fa_[qjXgtfwLcv6,3f~T:>3n3wR;MUKGkB;/1<=rsb.a0udo%x4L7HAUd8(4Q+6[S3/m5?BQNG}h9#D7rZ(C[A#`5XL+tAmR_k4;*wtK-0+ixONPclR9
9Q2)1cdU5,ODCdgYd!N6');}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
decompress_string('$c4]`nsWl1ptWOv_h:.%y>(B8Jhsf@ooc^S6O.cGC9BHMu=?3)
3[.X?=Wv,ZyTxSc%"*Tj_GrEE9;FU$:J.f=X0d>JYBIVZj]D<aA3aJq*XnQqxcw)y-@0VgkGu?I^TmUVgb:3EfFdr)MNb!A,_(k]_9iV_"_(G,09n1q_nV?v_Ya}yH922HAvE)Q-Dca{7S&0T[#Dtk/#Bl_W&wjz.9y.XC]Yq%Jhb/AiQuuuIe`
H[3+1Q4&&~EB[RStfa@oiB?KrvDpHs&j#r_LJL`Fqt*g"xA[A8
[y~qK:8it:6_]`i&KGku1;72%Z|S"<"lD2ac}UGi{G0+g.v*]W)w>x/UcKbq9g^FuU`Cx2;l0o]3G78`XOn?+m4h40J%^y[,j8/jf`[Aa
ekiT
]!]LVm5+_"kYM9f,H8q4W[Pz%8**gF[*;oMUB}w6uH@/HF4QT,aW)t1GER
6x,RTi^tAv3wj1,rPT[<m[V[
v7w0=&nC3$Jan|l=tdXcXut7wuK[MZEdJ8uZSC^U)zk-h]L>2"Klj]:[sKC>q*P}c9tr,ySzuv&+rPNW!Ml13$YQx$tt6nbASO!]:H[_(b&6Q[7Z6!1nLF,X<wye,d3tfh"JO4b_,akkbL-gTUfs!onu3q,>=ZgGf}1)_HCzB[dxj}I&?d-:=[TFTqbm
jTGDH<FQsW):/7(`sMu5uZF%cu6-t%h-V@
S`nB8s;7eS9Y;P7uI*f%<Sj0e|;fCM1ZmLc-<V^"Aum=T-Xb2$xhvH+nfh%401Vm*95qb&;?hropn>:4HL6I`dBm#J4P+uZc-`3:8IP~y!z"&FTsPyc)eTPqO=MXC+&9GQY90mSIR/pOr,:dR/5J4sBQ:>.K8KeH)L2LK#+4%~avx><sm6t%D,?CM[__KlhK1M^6OLZafEXTfCH!s2s8;6E[yix:0<]pjSEtL^,m=iG%f?UkP|7Z?U:wqHDPQ|&E@>0Xlxb2W@Uz#x*yPK(-S)eaNJ&Bfs,vb8K*yQQ|X}s<m-Q1=FGg1p<:F&ULI@>Q[e`8]J$im:dY#D,Oty]u%`GZ<wZD7Xjt0(^oqGR6X7Z0=W+;g[FPTX7mbv@m_r1ox}ydcD&K2!q8$f3E8nwpiXvn,vJByWtZ*SBob5n7z#
Soub+!!"]Tv[d!h"a``]uxL);"fsAF"W=cgDso{(r,~(hkY9Rh5@}3F25%HS?"~>G!7C
%"uliWhZ[zfhK`&ZgH<Be(t5m]MN&m;9WMsZgD#j2/_(6tud34LhZa+*Y~HlkEP}LYr?I@k?[n=~Id2|"f]`<2x7^AP:DI%9+IOd!WwG+"""F_;a@hkicZ:FW0u@]upbdFl1*38IBbq
?l(~:S0P=gb<GY^t<5Ask!qJ+|d&0FR)XOV5eBb_yI?dmXVklmow;eIhOUyCO.K:RPg9G$j
`7se]e9iOE?w/B(R!V[CX4"("i2i@Cx>R9m+&8+Np3Y?k#3)JB_BEO*X1q?83pC
=aF2cPlq-e&L,
:~g1O(5WtRKTi$P:D:6-@!!7=oO/moc.$>c+]/hvY8Y*6wf_,+.k]84!J"
BcX&_j6iUX8-L;i(_oc
":03Pk]FuUv/1o9Cq+WNKqm74;VqvrBBoxm)D2@G_YjGVRky>9ao0pN;ZyR,*e/,.mchZXRZiND5i
E"R3/XkYDa!("eoNed99?<?rk_#
iVH8:NO({5N"18#lhc)O}F~;jr2kI!-0>Cr+lgIabnSY*oipd7oQ.o"#uh)+>"uIeuQV)jAuy3s5?twVBbXCdsrOQ&Qk(ayr<H3if)vVX.5ITL*^F3nbnPBBZ7ajgZ0$vMz?9s:@+JJbXAVS/fu7V>rRAKR)k_9`2oW"nT[fFAdFb
nfog:`79ePeSYtN0|(@-./s.v%_RmkF/&XLvK0VP1&b"i_<ph?o_-5h&:wB`lcI%,$7Oy?E;gs{en6s7o4mRS_=bi7KSrpZT=0c%ogvtFm#tC9kQ}3NamW]apPHV/#?biJP&JSw5O+a+`a[":"&[oMC2^D^IBZ&eua?IiB`H*N80:Wyg916?Gs"X0T,FX!]EJT(lIu{M0GjVP;/1F^J-Gb:WllMX3/_i/>RR:_*slBC6TlZCpr0k^yrGk6F#zwT
5NyFB@&AFGK&}sIdH)Z.I5E^tgYyVXe]%aac:aY#$Z/NGN21r0Z/vP;@%t/miyd_J^?.,ekJFXQ9V!f(|uaIdBA[cqr"eQ|<kX"OSE?C8AR"{Ory90uHYdR8(eh;_%U!2j.$6*}AVGI(7-d%5NFhUfL!(!^@CVR_h;znlt3qIg7pj0+8u"?S4rxvTN-o*;yT&9$PLZXT^T4=wI#rfRv+K&oTL:%P#_65sg#B&->[aYmIFSO),8W_qxe)qFk,)_M8ktxk"(|Oe/VC"DeCeu:yn!F0n+*&%&?;][YF?*sd<l)vWe*b5W$VZ6eC>Gx4"8+ah4^-J
n25m~hPP:vHJEy^l%c{?+rP&{c@DTcfm}au@$*6T@Kji)pM^*?ChLp6^q4wa1`vW&12T}HDNc_xr$5ngo_&S^7&#~nx<G;(BBeLmq/3>MY70.fj#ABt3.;*7!f&gM8+Ye!_1vc6pO9~pj(0Ek.xM[8*[Q.Z8&J9W|#4j$TWo(^V1Vo+Ktb3i1hP1hLUqcWCr2<r:6d+EK5PJ+f=U^e;D]lt,%Bq8zrf33%E!<_P+lQKg/SD%/wS_BS{x#?c`<*:kL*/5Rr^2}7ePX;w&T5LTYE<XHi!?nN^Xf,:*@iWD$+;0Lkk@IGn)3SUiqQL)b*(?{)q.DY/+j>jQUc>:E?`qx5OsjF,5I!P_W#i8.v~;0-gYJBFn(rg+V9o]mcEU<X#UF%_$fwL4aU5`Oe~bk$gqe)MU9V
$%FQc!`&W{
lr%*{wY@2ExA,V#x"@?XGZ@bf<lgg!/:&)Z+dh.*P5_kufS_7
<9;44lAyM+A,<!ct#Gnv~Vf?_yj]9LtEu[*)^JNY[o`QNRc6>UQldV;L;`;.
v`g$k
$f
$/-Q}N:3K[>uE#5O|Oinj2+0BP!cJ;^7/H,ssnkBd/[R}H&JsK%@n=bD8L@x`W)w."?,340*%8;#)uAq1!;))p_!n<%ni3Uo:7a5E>FT~.NZjZ;!f8=uZW9mU1zDyls0+9/"c0[CJeb#L:5C+Z5+O9J$+t)A48NE0D`lr^T,6^i^}wm98fNkUdg6bFdC,$LmQWoj`J;*XocC=w8*Wi^VupvA,BN8UQX&b*F-:xZ5j])T#PVpG(1.~Q;=S!&NB__=k#`C:2Rg)4;,$"d]-JasM[qu)**cA$9!NdKn7@N3@E-()VwmNiP8bNvNLV+abS)[[s:BWw8de,ZUpftEbm=)x?jk?+PG)^qO!M:b*UC$/_/Z__[=qT!6iq;
|!YW4[vC4
#?nRJG.t3k0n.YWkX*)1zGd+ol<dj:!D<.l,9)E>RxG",FBGUi)OoV(mwG(,?`$0
?g6:2wPTUSR+0aAEUlOaO"&F_yZL<65=WXPI5G*"a(,8PCYXvGiGyyIZH_xCI)5JNg_VeEM0+&n,y}:`.TL<W4(bX%5mb(]ZQ{a2x%E6^K-NJ*p0A@rPuXDt/U167_j8y1[R8I^;db2A%)^W+0:~Eu2fW$olA|c+1R:3KeO/^9`>VH>}sx48fzjE=ya:7)DP91</
IUA+.,S80mb-7^{YS%JPsgCd<s{B81Zf9F"K-C>l,.?C7jWq`,<K$myE[ON5u1<?$y7.P,->,4ma7_B
YOIdlna:sw
MDuC8y64K%VC6y.`a}yDe.KL8{C9oU]KO-U.aC#mBp+NaF*!.hAq&Cm&XB1XbD=;
eL5)C5t!}b72K_VP"l2F/hLXXffHHkGPaQeFFWZOJm#WaGLF;>:WXn2j`RM(GV^A36%YxbYsptKiBM{c4y?xq$E5qqxNb;gor*gE]0+T^IvNc96^0sq1{<:1#x%NR>bO*d{Ao5i<^"gE_ouy-3r8<SbS!/B+Eu=OK^{yJ3>f&lBk>pLM#(="v>WddPU&T4m@oZ{d0_WR"-8_(F+7ITpj33^n"9,]}7(>nUnbLyWdNL$3QPO_/thxF(|!{R2TVoMC!1;Ea*O<X?d0/*E0Yf@^YxfYV%xG91(!qP?>9i*As
3K+8ebKu!%c?>rne@)bSu,08[pl#SIGZ[np(=yp#9)I(J6D9iro(^(@Gv;*9SO}>PDZ^/L:6W*]SLwEAvB`K]K{y6*Uj]e%^V0g]i&zFUL=u7n+g]W7m|8D){jO+vCwTe2{69)+ySGm<n
{0c;sQ+q,#(>i^IL`dD),TtA@9"Kv`/?El$,0k&<;v1?v:BDZy(uJOH.#
G&k^>5
]mtfLphZ7Y"I(0eU5*b1]7$2f[Xd<cu&q"7HrfD:$90lgK`@,/yEH{TiuH[,Oj2V`UCrTF(XvwN|y6OI1
-(&Q[W)N!T#;nhXW$jTVv/8v+VR9r3D[_&$]Ua&>_2_<7.&1E$<gGG,l!gWEqX(Jy]&V
7%p_T+*F3(`C{`dx9#q%
16`Ay<6$m)9wEu5>O;a
H`lJJ>nexaBG%_B/JVg#mKbSedq
im_i$?)Ml4D(U)8rB3]?#XWDmtQ%_RggxOQ[^Z@`qnUE_UKLjj`9oX5puQY"IlbMa0HxdS9+jKe
RHD+JgJ&Q+RtuR"I3bb&
/LQY|b-b]uvEwg1!ELohh2,gBrW#ArHmxXs1>3/A$AJXHobi,yMYl,UgyK.gP5`Nv/E_jFlF|b[Yr&IO_IR3EqN0;jvaX-uA>^F<&t<&lDuH!k>^3ZkmI_w(<42hLdC22Rp/`_-YSZuZ9+$NQ(jH<U~5Xm9l+F3j1)sYm.=-}%5.IpWkc
zmMgh^o_
f>Tl_OLR?AU3N0V+#CrV3jt
@B[/+11Q4X+eM&HMss`JL5`K5X/8!2N*v5u)]iDaY:M(c*M[vO/7a(O0j>vGXvGd
P?dn(.//Zqu0,_xsjDA*bt[)o[&2X:8:NYy=!7KGpMaMs%}yeyy!J"CVW.6pQLRHX2Q[eqUQH;U)C;kj6".-Q)<(Eg*%uDVH4xCBm"X@|#e3*L8Q"c%N+c|iD)3FK0zXfg;m*T*5Wq_ivEi4j!eicSpqoM1FT/oha+<#dg6ZRj,hi(}J"_C[GxE8LNo-9^OE=%h73h}P)Y./k
3_nR~_b>,&f>BK(V$9.X1h4Re^:UGPRH~GCka,is-mu<,X~hV&+(UX,&Q_D<@H3K"2sZeubF%7!dKDu`J6Sb6/qCgD{+Th<2:uB;3UuVV*F>3sp<3-$NBSxIgHg)PbItNIMk~J{MscMynGhnV*rj%I00!PSWyrrS
>aauDl@R6$i-h;-FE-$ysHS)T-k*]UUMH%qLpxb(]7^]MtvFc/=b-sLDv+VD!)eO:@kj;Nw/PqX
yl&O<P^&@6<jYs:Blva5?(5PX<aZaiP,)du!37%e_OKZvi,>WFWxnfg>s5mj`n7$vtE0W
PaXkC]CxUEO^a_R/Pn*l[~eAZPX==.cUE]&
]T;Z`3NC732o1%?UP/[G?GAE5$#Q=4(Xa",cEaZ8Jqdy2!:H4c)"E|T^1yEDBSrHCyF.Z?V0dxE_[-sk1B
clDski2xuH%B2U/[:#B0(6$<G_rK0ojYNp&H;NDG]u}"ap/]CU=5A2IB|UeJxpD2)(G"E8o8Dh3E<Wrda%
N#"Cu`7Yk,geL=f(e[-
G@?t2RTim#,bFCp$qc3E0F^m.X$LoQ5,ygMfc=!0SXf,7(eCLoM6%8HAn&(;-Vk%B5]-AUg4jTdOdLfU+rSvG5jE:|DJu=nLjsw;iI;i:RS5B2O#:%-riqBvao@49WlwtY)weIrtFwE"V@M9+Cd>GcP21ZT,x8bn.WFJ2Y(Bt"3(cbAF6PG?*CKp%w3[GGjTc>-f6;.nB/>@!^7mp!kX*ApVfROJ[F+=-hkE.:m<S7wh)$UN5~ByYQSGL=q7oU&uQGSrRuPB8O-<mPFq2}v$":(i8fPh1&E#w
+lfx]d^E?8ppBl-"kq[>QFHpDcdG&8JjfR.LkOE^/R5b.?
i"U>45/hh7NID!5eAV+#Yf7b?Q|*/$-oNXqjB":O.X*-icZ8186)6*FsC:KX]CRlXRB+>mem:q=3#yyWjuhVl-<l9sK&@
0Z{_faJk&L&v-4`x?SmR;#f8P;&DAG7>MN+NRN.l5ohhtSe7_e5sD9Xs@O@94P#d4[zC|#VWSPm6E=wm1]u8enX29<9i$5>k6kZS8bu^
R(jteK??Wh35N8/l`@Q2MsDp&K*r%=7RPx=D
04{ag)pG;V(w*^d7
0G[<LvZqd%UTp7KFdP8"LikLbc1^c.d$emh;&2#zRA`~@dL6gQ+C.V(%e}>K1bj/v@(u6O]}5OG?,%iw:P]b=:*z[.^~Q}%1Z}wb!},;R/Y<r:g4_<=}b<hneVm2t6w9wx[A0jetpx2.[t>jHKB5Mj]T9SMi.BV8ds6WuhP3k&$4(QT7y0ZUQAht=gj}ZOnH*SEk-Z2KJp!_Y7]wD1J1"|TdGMf_@`w(=*/D(E<AULJ-MgX.PR<Gc#YXv1#[VM[1&7i+Ziu2)By%M(x<khZCS#lVdC8cBz
kG12VDkau*)1"#4ES*mJ0Wf7^[elz9q".THy*uhgEZW*YZu0%^=Cs:jAkDO4r6GSl@fnxprU6!V#a+mH%UIjnIJ&5V,f75#Abt"*ual9.A[[98/F"Dw
NVYho^293i!lJa/.O9o$,.Ks_5p
zPasn]a9l/kWd
{u[8FVbG0eBwFHCmv[z]2009X^;Puv
6~*/v*S/pM@"YC47)wX&J)SMYj-kr30Xk$-IQC"BsW]eoP@;o7<B;2^T%+E=Q>8`S7oBGFMssFj7eKI2SM2=v,6ai#?m%^Yv?eqR)+?u5(Bcrhnv&J->o]"iD78q#pO_q?L"u*U"xB>k9YGy
x#}ff0wj7?HfgAn*q=[53MAk4-T6$mYDwABaJ-UZTds#s<W&pIU`9WkqOI49BJe07Vb3AEZ0JCp<S3s
L=mA+f]itDR2f,menTLR@4%@x(8D<vp=x2w,=SLBQ;0U+4X
$21a$3=s?GBuNR^"N)~$y5O"q1w$~F*0lv_#|YF-#F:+>?3
aOD!Z*0/**enZI8d&Ik:t"]H@20B^o=LZ"l/TtunLCOYHu?XXkfqskKZRkg5f4NOxD6?d4D(<"blmb2+x"f?46
$%mNQs<)AqNbX4<!;Xkt%$&yJ^`v5H15*yi=?YrZo!A(Z|tKIz.`yS-<.GUa^^VbNz/huHRR,^8o>m<`Kqh`,nnItHb;)B:knHf9+iVo#hGOkjRdq^ZzCS^{*j`g,Bxdcs@d)h7[_<D<l._HhugO:=p9W!Ur5z+Slmvfkvu#3#uy`C".b2D!-/bMoBeoD>#hN6+r)QETrGdoVk/Mm.qoD4@=&?wO)(D,5i]_,{,RB0=X?,tPaTF*S]UtU4AvQ*50sNK,?VY!?0pP(ZJ8c$`_gww=IaTZ:F9#^>"sGwu2@/gF7Owl2,/VT%<<KjF&IU$nfKV[fAKvAZS0s~mWQ`[-L7azaMGRmP5Vi/Afn*E3945&3SJ=Zx:fG0?A)@15*/l!Ru7Z+`B#7D_ToMQY,SC~+l:^t^24r4yUA/i^x2TZ2"Uw1SDHt>;aCD?$-~Rm+o2gv}FxhnXTk<b@
Zo!L#_}H~E:*me>iT!0:is,ewa
gGTj0SDNW&ulC!?8?8,!ljnoW6=XK@%^>Z.;vVFsKJ(K8{f~/,<qFKpZ&:.0v;AvMRw>pGy}y%yeFYL|+Sm@$]:v)6]-".R|3^E4vF**y^o.oFt18,I7>0>GncxKf3xD(z"/@$dx,7)&BQUrCMWcN$6^#="#H~n;Z/,k(SX_Owys8&mE@)gdVpQ|m"xrEefIk.8EpL<CNq!d9{(TinvL[vaiaK5_.#"G)]T.FT/0PT[mvRg4;n2j.;mf3]D%a]sit|
QC*;8`wmyk/ZCv/Y56Q-ckcy:&s+5pvNR(gyWP{OPt/ZHgXAU^|H,Pg6q-tS4]?7w3ld[8tn7B:Xi"&jI?)+H:Ex$N^"8DSEjy8RDt{lP$Jr,w$&FcJMA
7in9R,aV
ip+6U:w,D(LQ4]iUP(`/]_WB.9M+
C`s05tcx3N|[
clJr2p8V)$&3Z|J{dO*-<HX/]+l8C4hIJG_8o[Hjs;wuD;8T!rG:<,O9ISS
E[%B"z>/WUv?%BCN>3D:NsN)/|<I1;#kET,HPxUl-6f)`1f!CCGR6u)sePOzOztxA@g>qbXs"VCR--@R,:"msy"0dlS)^qEneOwf)u-,6u-u[mHARm+Qy:]Cx""2?#/sge?sA/u1"rZSUO;;smjw&k:4n2y;gB4{LD`eHGbi_49<":y9K)@N^{ra`<F%10#~2l8NxR[|_,9;qD65X8EwvwtB;tF(
m!"VMXJ
1_hyoZg*U9Qv~d)Yi0qt+LlEn2@G%0"46/FV+Qr^PYZegs/7G$F-
caT#h41z%iQ5Ed5gi{Qz5TeK?$Q[XD7Q9`;NpOv=g-OEIR2P&OS{4DkH8lfV*:k(a?b"4;lip^9#dmZs%?$"/OmFmvZ#l[B/A)j0]"[Wt*8,*fdZ8dGW]:22;}U+!/iyGW4rFi#0FWO@:xI}TGu^Z?`Wj?wB4JeTLwAH:bf{"0J]N%;MZ0NFg$*}Spf?DQMaqD+P:^Ws53AK*9w*yxyo3>O-Y3XZ._xgZq0PLg^9[-9}mrD
oH!**=ypejPnT{c%`74|dL;I`{gn&;<")$3NtM,j5b1]i.f.7H8iw$xxntul`#--NWiY7$IOD^u#^~$f;Zi-_WP6Q
,7R)L{8-F,XL/I
DVe"]U~<YZ`("4PXYl<-lv8rd35cxSqIsU9$_]E
5W%:n`ITymytNMQY/*/x15T4f/_AlmQ4@!ExMtSR/Xe`fpJo~hbJvynsB)H$IG"kK=bY$;n`J_>XpHWdcwuQq$CIdZV.#Q~@iB+%/)T$V99@4_>K0g"^(CYJ*Uj<7[EsWQCQe*&y-E[EpC(sN&GnfFuw|yX)Y7cTqTH;|#A?_O=?jb<G-_=57aCY[!ZjhCV"NEP>1d"IU78_s8w$uhG
>aq+<N.%!FnNzQ+#!vTWib>;m1om{&FES?0d{a)[gQb&XW3:}m-$<EKf!Q$YDi1J#*8viaU+ZE,KxQPnN_^ka9Kr!E?;e[dG{(a_DZ(^&hFeNi#rVF#8).b/>Y$XRX{cC9Ny#gBW=B0#GX>CKVH7iLG@/Rx@|5}dOFSrCf@X+npef/aYnmuYd`CQf/Dg[3[1sY6AG2(_wu$wp:@QUgL+-$YwWd}7SDU8H5</sC?3%
/SDgPe8!I>dfplqV,mw)Tg
Aabewj2E1I/>OCJaa
W
:US6MJry1=+HDV]|nldr/v2%hEqb8(e0o#OV
2BU2X<Urbr?>0,IAc3wJ3IDIG_iv7YkeHaU7+kZ-*OL%_QjCR1~DK(:G9_-.r(-yX
l+wLb5+YX^xg$V|nS=nxVUjxxh.,ZqdW=_dmoCDD"=5:P9ZHIFP,#&"7t8[>h5lJ_^Y.wckNV61CRF{kFXKjIK{nTvl(EBR!>
>[q4L.FbIFz^E=kXP=v8@c(Ql$wQj(@Fx<Cam&wU)mdVUf?<]LdwH&v)HBDOgftwN4zPO+YGL?J3F:oRNiex<j_A*68>AK"d_r?:*PFI7E4r=a.Q&-iv#]{>0W(`lb>3L#;,^F9nmY*gT118mlqb|3iV{c=Q<pHA:D>x-RsqJ])"9Tuc`8C^,vLJi!>%>uPD%^/2_K#,V`q+"rdhr4Q(*=WMh+!cS/zW=ELI[Q8
3_94OA,;XQbAKSJX=K4j
_!l6></x3{4X%yFu$,UE@FL"6x8V54swO1M/%njfP*RW0nQ}P~db17`Vmkt2
_Yq;n?i9sAV+mk=`~rW:&o;myY[o4=nPLDExG:hnIsaLtpBRe+^ljmUQZjl6pPgL8H_sVBH/y$G"M0V2vwx9J%=80Z_Y!AvIDQ;^fBoeTeOSu9W9kJuV#TR^VG9Q-Fnz#qkne1(Tiy"Vsn9_u7<S_58nPj:u(8ht9lY(EVN:*o1$5"Rd8]xW<v/QmR+_t1~wcf|]khLb:e/g@9-lIJXOdL.w{.WcIAIm9R{ZDJk,YXGr50o>3J2PPd&9zG_M!(+f:E)cQMMc5OJc<)WyEtm3]tdgKF@"f%U*(L[;_CgKMhx*Y6cB%kd+jRa)&kdb;=A,<Q.
>]DM$75oX=CF4h]s*9,"JP-n2tDs~Yy-wHAdv6U,o2>.B=F>/=pV2V&]hV&T~&)F|p;5<*Wj
3J"KxuDq<:t2Y##sH*"w+XoG
Mm+/pnn5@U$?b63CynIo,
is*Pjplt3+_6LDn^)PKH]i,],Z%]6fiDzT(FdXdup-U_>9kb_V.+$@;xs<yG1K$/9,5b)Z8[hz#maLV]~w$w<`rH3GK-56#%l$EKHMybq"<LHaG=M,tm,"`"Dh}I77nOD!74,qu&]vSwIIMx:s=B1g"L-HRt):E?$-XDoQsH~R39w?^)7TR<A]!jh]1HZ#uODr<7-B`iE_o:gH%_~D_LIuXhI3,yZ$kfB^uvs^sut61M"!gnUs?M5,70ZmSJo5:bR3BbX[0kWw$.=HN3"!:nhz(aj^=:ydP3tO!s0b@gwpJr_]up&yVpBs+TGK>A@4>pIP=aX4T`_f?aTF6-g%q6Fh+FY+9;#``cjy(FoT3CaMNivhrLNvyj".7!wx=mjILJ5Pz0}ZY9)L]IoEIA%S5.[;C]^_NNPq0?]9/EWJb=K9iS]xXB%ie7?./wK3k"vo|OeQe_Wc*+cgHyF!)a*A:AXP&L/0:iJo"nhmNZ5$[AK,0>-LKV;c`QL7hKFDW"EI+5jY&WK$rCC"Y]l2Q73;!LYBy:#g}]C$RAQlN//S{r&CwC9TuGiV;kzA;"iGU2l74t$9GG@&H!<"BKb_S0+j(rOx.kiNH*l(KkjR!5w"NO8yObm7O60dp={uRa4gVV@.ekG$T_lcVHZ
H>4Y;UlW@I@0w5Tl5<Nc%JOd%H3T)yRm?T0J~yQ0guNk_s5&.U>jnZ!.1q,c$
+E"P>[%k%A4on/Xym9
7Rs"Fz7tk!mvB@-5Li0ci58GvA`Xr%RekZ0r,GaPAr-i^>d_2d33mmWkU;(Ss=q4r,EZTb$gwNJD^CAMbf&.xH9~OAHU_G?OK5Rd4(b/q.&cTlSbmrN.AL/Jw2_RG-3+=AxT0:EK]+?@r4H^)C;/>M=-gpd6K`*M`aI5
`g:2}lYf/q>GihaE<BqiNkBA7MIxk;?ng_y+rk[5?[M)}Mc"V2$L-DvEy^dMJ$BA;K_
4s">2Y~E,MpS"*eIP?<[EpL*1BkpjLcTBFMcnqgz)+"6^U4JFhnf]sr/1-D)&=l/BPhJAeAX}m~0=)r$lJ([nuqeIByYz>.UziwUWx`2DCdG+9ApHE^O&;CWD%usIZP^0U~6"*a%h6vQ;7(;;G
.BZu9jj{l~62>%){Thxc(eI]6>&7%mJZl#g}-!%_C:7Fw|fWJy
=Jqw>sGPn53`"w=ZKaNUj2inFSqv$`$_/*"J9g3=ViF;TlJTZMSNcVsvcE
"CR#Y|GfBiP+kDcDhkMV
Driv?<.l$)Pcj:"I(TXpXe
Yu"cZ&ypNL%muRtiD/^L,SQlB5o1u8&q_RV;CFpD_L5Yn^yA@&>Q-snu,_4syTV@sGgyGC,td$r5w&[~U62Qi>`Sn1$kPr#?@|=7_HyE+MyMo*[}Q}<
"V26WMN;*/gn#}W3QrwNRARzG
w-7yl<FkH%XRJwt_Y>YA,E8h94x/Df2H4LgA`3`n?;P!5Os#
>dG_an-rRJwbnREc+ub/;pw7/ns"/3{LJrnD.a3R=eK[kFmp&xOESP!^%AzaLR:pZ!,l2eF:XK"s|PW(HV,-zHVATDH300yBz`=gf^2w-bl9KLL_*].Ae5/@j..Es2x`swqv{6],~n~,~I-gts1hZEUEA4on=B{p5;z$kM/>sbaozx2>.8QbU_8PRrllo(c32tXl_DVAB+ctRFa93Wn`Osp-c[0$g;.2MU[1|
Oh0(*xE*O0X$0@d;}?2%7"WtiEK@/Oy+~7~Cclt5r&!eOX`m6q)5I/u=ItEtt`ovjNr"~*G8)?:M#hyk^2Bix_?aXkE`[=kn:2zOV%{G6LOe=FUBb$b4$kw4*$0sAY5uzWa#6/Mx/"kV!(g9-rydb%~:"^E
~U/Z-y`-t9>,;JI*E"y
DY">-Q0"/ai&afGGO+/l|x|pfT{s|"{0Lm|d]`<g4meAZ"3#h_*4sWU2;1Qk00
O1;=Pi>#S@H@$Z1l5uw+Vux/L|)lxF4#UW,(%9-QymPL2<I)5louCT;ntF+g[dj|$h17S@oVjyVa9|NppHE,dk>&"50-k,N*)"]Z76I$.r+-!ubTOpIb,;T-<~<u,]h:@DNDr~d~ZC.A9YE$5D6%*x>SJ^?kda.y[EA`W&A=g#Y
NZ-gkDT54&),h#lQGsnIHWbO(CKB]9%1Pw5>[3gEC{Bq&+,R5WW=_pf+g7OK$C"$6,5GLk%7g7xD$ZH9bzW)6CxMI+%TQs2]x<RMAz^[WVhOkB&3x%^v^VXof&d4+br-C`<
Ix[JYCS](<kU,{WJiRQ$u~fD2W[mCuaHR./Fnnn!ndWBD_Srl;T$jbD(G=6-QXc8lNS<QaS&f5C)gzZ?GJj_RN4~_7MOUYXGxh[OHKThbhu<[;7>k4Z`VGOest@1o{0/0I&m%)LmY?fq!32;*xQ.H8EWC)!EdQnS,Su0DJx^DF
03UkJ*7>vueTS/?n:-=1$(%l9XIsUHSgD68Y^G)lU%.;6qAeUJ,6W^W!g%pjHk>+$d~d^L*a7MPkK.D#Xd.oBunB%kQ9OK|mYh3jZU{tZ::xX/lJHJm/>(/S"FV3S>Zl.[(@stGg0$SrSbpwH[OTC
*MbI`b@#9hox#94%qYYNsxz_]YgRQoE');}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
decompress_string(',hk^Cxq.C.!v]nv=zWMG2j|t2>FvB-FF,.@",h%m4:W"&E;d@35IO>=o(b4a6lp3NncXrLYyDW&K+
MMX?Sb9@&iRnVnuh3)Rp1tg.AubqM5N!O16uh+ccl8
T6B;Yf1|hmb9#V=;HzTwbu^+WAcei4hekzw`,jT4w}13g(%_tt"vS!<.RrrVdu^RIMfIi)jr.EqZxGV]f|5Jik^uTXBr`.<1b#M^"GBUf*Rr&w+Nuwn1PWe6a%pzTzI$K8*qrtp{Xn+]Mgx7ZQC3d!,Jm<^}!xiXPk[*oc+
KT,EH<hpw8MtdwtdD!l6H;_iU#-bXbq*S5B%ig&}YXP=.8$#L>(qxUY#H(1{X"T@"Fvb0Ng$I!q[SRd3?;5?jJ!V?1cc2_fbjrh_T?yOJLwo/)K:mO,(7,u/@:&IM(*c&
/ZxrM;LO*4@<v"jv<!Tgl$tPeC.stddu/
xq[YH6C,%l59J1lx<
&m_)?^R7Q_66>ul$!Bu*>$7GK4q_`+O$(v?;J;DG=Bj$taNXpKS#SziVV%>E!Dr~L4Dbn~P$AVcKp~=r5(rjw-q8w^X_Y>RbQ+_I6=@)qz:8sDoHW^k>u!!(a^qC[,i4SZogw=H5c|:Bto%SN6htni/o9f2F<WP_bpDbcQ7#6"m&tT[C/pE%W,qe*Rec_7
[&hY3&F&e^
MQ6jro=<qH*OO!cX8q7U,`;(cw;-F^V~nrN^a<4.3/UA69`2^dDv)fW
!=cGX96><txrIF!fRLYm"O+=rc_59{G`)}MM^m*2w
E!o(U$o"DT8ydq:VHSw
^.(rKnXxl>Ve9!5mxJ#J$&@WMk.B8}?W
u?BTCve;O
:PWQJ#"7@xTMjf9@1<tABDA_"9k9BLOD7oc8Z44@j7`i4jS5o?..hl?eo`<HhBs6iAum9KlL+fEtJ$)1!r(65]I@j]U[Tc)Lw%p%IMK,G;Xw&U*ttasf8#UP>FpB|^VcLn`XUy$n)^JOVcc,FZw^pye4vBao`&4PHycR.k79<#[%(svH/Sn9OZ<Ig<M.[>yBv+FN
PI[e`i3_taGz<.N.4gl4K@[tJgkQ)jR$12*LOCA&8grQmaHb.;xc[!)`]mOAloPnfG*V_HB<N;=nR2
20zJWM`ffERK5xP07_r*8af!OK9tvhro6;#DQO&)8fgaVl;w[!i!J;sivoT$hmwLk^7:Ktx;}](JKWi$.&|M)W0&%(<3W(Mee,sq~F}!AHCR&`)sE)J#iMSef08?-DgK{5BLXZI%xhBI$<uO[4AS}Xg`YI2ZtBFX(/FF#^=DrTaDC^Ud+YyS)fJ1IK1#
ElCI>LXx?B:JXxpFlv.K&oE,j?D=.NC,BXRMt0bnopZ8>vk^>^[D%T$uIQqT9Q@y,$r(1RGp8>Dh%DNb&5P)$P`U/3it]5U=c5M-TPiRh&yb"
&KxAOkb3A/iXXpFtYeT!vDv2cR5#WXg;:k?/RQKG)6"Q*8G;13:!"q".fMJV3!B;"Sq[;f>MdB/+ol-fni=5AejBZEP%IQ1*McLRVuw~Vp!9ofB[.!gtr#?Q
WY1@F1w$-S
/^$d9tfCKD(E]Jf)uq%`F#[}Uy9Awc=P5@*2Raxf(4%
8%"?@3MR,YSEPvPZ)N[8<2]Q^~1f(E4uC>Rq"[+F"<oIJ@=wdV")8<.1=6(%BqSttPGQCjnPLVSP#tj1[(2[f[LnnuI)))YiTBGV)/[y[#O[NkyNP!sD!rMM/yZ~$dB2w<3$wXON]&A?M#?PPL/+(3f5aW`fOC"Z%|DXo2;fIVAQ(2>nZD!):0RBu=-5vrRCk9@efi1ab
!1mVTXhMYu6iT,sD-NPmu1(mQ%c2F?A9.x;aak)sg%R_1J!r,-AN#)E$a`js.D:1tZ<`Eev$0l^ElKN&2Xi<#-[6Byv*%3w>ypMjSzqNO>f}<fw>S=ah,+y"sqDDWoBS@.^`FtCpEej3-1c.^{2E#p?.NIy2ij
Ue1+_p$0o$06W"
29D?<]#%BHU{&G&XvVtWbpVDM8MRxB?*IuC{"mW$VJ@*1QFvE"Qw_r@O#E&"gYIi@nVcOtAs3OC:uoD]8
Cm)@/6oJd.@J@$Xug%4H!_BtBr"ATw!O-Ldw.=e5tP$|@=GJR8op*
Z%S|^hb-D,gANF6C?s
b=ZK|.=^o;7vALa="+N"2O;f5xnB31J&i
zp4TKo:tDOJijWCk+,*3o,FwNr1X34]Lv;cqS=HQ#uGijc}?mcg%vabPd^U$=eB8"-A%%!.l0YJP(JK"PhL=Q^?Os-`<bM44tS6p]@MZYc=,XXVsS4PELgj"8C5x$KHPU/4&;2;KE_
r@rUi=a]8bx5CXU!Mu#N-enP!z]ZPBsWg
ES$phK4LlG_I0mx1wm,djcZiGdPy3o>nui9Zjda$$R/Ghaxx:7dqTQCnDZv<ost;GCs7JQBIH7tV!Gq+sdO1k3d|[4_A*#90D+17Qj
eS=xjXO#"SK80^ABXiO@
_G>4VF#eGN06YE5=OUOwT<N..=*Bma[+yzTCiWf30Z)[)5nH@ICmfkHv"[yyYs6M
3tW+5H7Xm!hu~X4ZfgEev^:x@MK<^;}_HMZ$c$^S+sMyE=gCd6%f!g=Tp>,^~:d=KpD=RNUP}(4i??
fg>J!q,((,RZcaho&B%jc)cFKX&=({`4
4SsJ<_A#bG[SHKWH+S<p$0!Qs[k9h3+Ko93,55?gn6$^w3nuy"klMS1-NiS!VY5<b7QJ~_JEOCYq*,dVqZb_8LM=FLQfDZe$Q#_Z,AGC8wl[*p=ba&b8|msR6mjSfozF)Gdd0iP)|)Ue=#r#^8BQZoU1=+A[Dm($]ix:;f0hi.8>a0VKhKprlg`Vi?5f/eDX$(5AKV$C50G3W.B"?53p&"fjlN<ITL6z)]p_6[tlr-LuYf0DSO}QPF$f9#NNtZz0i]CFdxI:0p6c<5KMWI9u!A&CjFc",/b56>|LjYGZ9dAo}=Jwg"l@67}1%5~dP)pWp!Mk,$9hTjRbRUUn$=$o
n/wkoQ"5e$B,9N]Co-UNdQ.Zd[58JwT-Q2dzWVR!*k9-?;.FUQ),HNu33]duMy+z58?5CI^~]`Pi:c`J9)[y%W5N&/edb319")P+xzGs]?R8?.BY[U7q#:ThPtA+mdGJq<./KOxcI~?<7B8;Jv>w]4KI>Cuw1
0@3Fy#K5Wt?xN{21r-9Rxh/+/qeAOmXw[EHVUM`EDs/2o^QePbo9XTY?)|S~Aql`B,QAs`#2kJ2vLD#IAoH*2,1`Xi^-H9;xo(,g4!-$C(Yvkc*zGX2EE;xs:q,Wh&p2xg?;XdO[T6l7l%[^^WDc`U.2QQ/A7TP%ww,`gz>dozonvnO1I$,hZkN)-
kIR,A=Sp;`*,1e$uv5B!*g"O+zUui0kjmxB>(gf)?o%/s|Y|r:W#Z^<b%#Nws]2Fmjw#)l*Te#M2,M&T"!M+V#t<nIe?BnSw:O`4,|M,CH[7c")}g?:D0q"ySmLah=C9Vm8&ejjPQ&@CMR+Vpz(=FiQQkBDT*n]{tpOG]H:s1d(sh!tI!d(-=dk&#-=v3Enw^RyD`+d0d_L{*eW{gb1`t_B},wt>K[.A>w%cRA&TcEL<>_LbmZH#CHU-;n.V!pQhU%d`h@lCE{OHj3eLO&_bFR.=XSo6O4B
^jN`]D%9]mF3Qw?yv!<Lp^8m2o6-14!
_QA(PUF
d:,@_;E)Rl@GeOtf))F&!#A<w91`c^--R/#Tqu30N=R*T!xTS~4c*.)[p~C:9lc|J}tOZ8?h?0&+ngVNjb+nnRss$qC)j![3SdPMyARR=U>?-5^Oymen5o&T#zN
iZe9"2%t;.&3d$k#tkH}#zVUl!LR,3B}7i2NSf@mRc]z;05KBp__:VRbos=;Bbi]Z6bob/=UnX&JF;xl4DnM51#a7T$ZAv9MIn,{yVWOT?xmq?.qy<vy[)sCjbX>GI@|k0a|USuj0;A%w{B[+oA/82>t8v.LGACP-%hHS1m9cC?XHZEBH1Nd+YI_%mnT@?#;2nOQ-O?u%q0%`YcLlmk<BctmvPCq[*<EEq7"Wz2-@"7H;j;<@D16ZfU]XS)rh9p;2h4!X|bo:~:#iNq^=iDfCAu7t:Boj"Zc2oRsF7z&amscK6/!z#3>IUgj]2P~y+9x?VVZQHk.7~#2!p8xtxoihTnPH30iDQGeX?"vMBBF+8q.gM]yfc;`;zG
f$=8+[YYfua:O?kc$t;Z]1iyJ.
"F%;|:0`1s*.rDTX"^PLN9Xn]6)Dn;%w}H?xXYgB);pLFy]+u2d=*9K$JfGx_qMSd5g/K:J^}(8W_nM9n*MWtb|oBT
GO>+4
A@G[*232HN_%Ue$RTWa-+|woSgyJnh^w_wuWECZ&?x<vU6(6,f"kf4[kvBZ~!vs2;Bxd:]n)Fr,)`%.!Vx64p[hN%d6ovx!a_n7N1
7o_gN
.dm!_Kidr4ss4:JL&C7BxAdQ7b%^u%f`(I-+m,<7DXy~>-1MIf_N@{;04/hXo[7SH/5
lIsWA(AWo{q7h&sX/tMA77gJT"#
;H8D+AVFO]`UiY_rJ+@[F2UduxSQpSxw@M<Lj.lx:/sK.
mUe"tt[S^d[]paAumFxFK]C2kQby<(j=6<!!F"N??|YW^lcsI,:Ecyycq
NCgSH<d4!^5LA!Wd3sh3=HDw.5MR,1;y0buh0|.uvIlUA2%s]b[AU%[MiouP%_bi/aqoT{8r?eGU(PFh0q3CSLvOttKcB1IJ%ZDsf9$Q
I`GJKBZ)2HRMZkDO%/T@JCdo
[E);X#UaW`_>1*2}TAlu+Ybp6RcT&sD?TV9%GJ^Ex-]JCvTfmHUaU%m}TkNS1"9nB_>#Ecl[.82+Uwb|T>bgRJ0X),dd14P~V9PAd9!$0rM7
IGI)*1jM(^WlTcVcPyq^qd1(:v^SK[3<cpNN$W1@Z:12=PRw>Ct"v_IA"Bz_MO*/4W*+d0q
3R+?K;E96h~?co]xtBS*~q)`7^QF$S?LuG;XQ>MrnMb0l6oZ`/%VmMT`)KDpaLuQ3]|fJy80opN>L,Wt-J&M5&7GQ?I=0OJ]Ktz;tQ4a2.<?/7HT+8
t$,$0xe)Rt3Z<A4c*g
vXc`I3H#.x6&X*|g.5?cq2LgSNCM~qXD7:HxC&C_TX.IMsl7PTQN:@w*ul~HY8gonN`<RPh.>Iom4sQ(S28fJ]@q
[,Z44sIh.Gr!h5T?;U,e@{0aVqZc14X9ePa)/Iq0Q"R8W[0oo[0ot`2
MB>IlGQlBgB6O2lneQT`@I%/_go`/x#f&y%+qq>tIQb4T7Bme$`f%ZCS;F$!c%@n4KR/:?j#DqHdFf;OiSYoh{1>Q~J9N;HN"|y}-4#6lOHyQhtJY
O7tax*;9Oj`odt>A/*UX=PI.5Q/E)j6}OT&{]$%|eDigMBivRDBF2zj"b#j?e@5k:r/-(
#GV/9)%#uHM+T,s!Fv@44h7:[qw{5Jyz8^Q6/bs}l.MInuM/yC`CvK^UYV;7k16h;BpvSVZt.A^!LinugH:.>2RMRhY
-)K[gB:%,SBF
g;5@M/S.x1yY(bzPb*Ji56+$[fm%mR6K~Z%ULnyo?RtuIZU+~8BJWm`szKLnxV61m,`fV?4BVi.=j?:B_W4F|h3?fGrG:BMux?u*za{PJ]j^9?P2&%da.W5ul9$bA1RA<p%aj#xv1tYJG"$/"!bANmX`v4;MnfIhmBYka
<vZ
vkV[{U&B,w]Bu^/[yD
ctFqs.-DaC5WLn2Gv}Sx@&EG-%R{A|Xpm}k:=(&8=T7@w
p&ifHpBG)q
K[_Yv,I!)rfgmJWKt@@-(r<C*#dP!?{;)-lw_7Vkly;fAyw&;AVb@Zb7B.^?fx
w
M.56P<F6(em8Pw&*?m]OS+sobAXIr"xy55&qL%
_s2YWn{&->SEm!!<M>9`TnSPtLV$3A%Z(vH
p3WERjl0u%uc4C;&{^2r"kTZbX@[24MvCY3tJbW1
Kf=B
?(dKd-}NgUYt(SMK|4Mhw!H!L?}(l59&Tn}/|E$E4d#1
?KB}oHuz?HLVs}v!&BNTU18:g"-Q2xOjR3Ej8bj*?RK%VMp}5;@}C[ygQ0cfWG]`]Bd#a|bb%tJV^]21P]a/B2+]`_!9w`-j/fW|Hs,*5i7ul$OHOdi#p5i:oQw~;iFfZ#V^dc,ni|.T+}C{,7.cDSlCg@Kj%)97_"D[]IF.1rqVW=i:S59|)ug3QYgW4xMnVub!bw?Wr0=PS~?{p`c
)lum*8v.0=h*ALT6I.`J(MI
<g?g/cGAE.(X3n<u`!^KB]7:,6TM;`Et/iyBadB-Ukb[>2QN#Nd+^)9K_?OC[e8e<b!)TWU40+0"Tplm`P>7gd;/?I^GEFxd&8BuoVv4E6rcL-.6/~
p`&%dW.gQgj<y/!NL_WF6_=hFOv$PYq)D],RtOu#R7Qe&[C=GvCKXV]&8#gwie$N8Kh+R*C.pLg3MQV;WhQCwkOv?80mPx
Y1-Pxcx`_w8nHKC2XQBSppcn7PZQDj&^!GO*2(k*U0TRV766
`qnXfSyC#cC=Hv];K)`7_aY@wmo4|d{Fp$DpPj]F>
LC;
^C-H!urva4JXI]qcXjihX3&KZyUZ/@10@(u4.`.Wg6}<2tdM=>xOqQmU"rf88KeSX^l#:Pvw3C/$kQR5b(OIM+*fJq,PFj7O:P@LpPq$s,nPI@e`3?`B1dwItroi}MvEDef8;]@ZX4lUvv]c}j(o+i$^M0kql#Grvxe6^`JFy+FU?-w<*YKsrFz=i"3bif&"=tU:-V}/@>;_M-[6}AP2}x4EEa#G+_1
S<:3QBkY{0e9^-zvlpw?1l5jIF_cfv6o"60s)y.g>ho]v9>uf#|865W,,V>r"Cc
fe!/!0.N^9~t1h*+.%4rLTw$rH"7T?Q4
03fGW[HJC,V4.f-Yhtn*N*X&r@X?W^yxy6k&kp9PPX4(d"Q,
xEA]&skH@L(,
z"$QJ.wMsSE{$vF8+S=L:5a)ABAaG:K0nu,|EFG<0("$i]IxrNJfV@#!_PyZwn4L
mR?k_RQE@VtoXZ27I4J$4"{7[.~NbRWpgy3]FyyoT)Y![RL>@(e*vW#!d0[v])L/&qZ%b.QZjjl;]gyv+<4>*K^XvD#@vd4DBFTlz%X462Y=#7c7N60gu_G>BWL-"mZuHs&p]e@8J4}JuF-K7RIQ]a6l:SrJ%Uf[bLP+eW9o;?B["^nd?3(4o!e!9%rD=gL7f3S^>uKY+pD`&b=6iYdY&L/9jW^ma/HQlE(agE%py(YM}9p**+6q7w2j)rcOoja.0l
M2e.(($R"n:gu95]M$dJv]YWCUKHe^I0"V1SiAx<Y7p/+,W(*>GI
d<H8NOC8<[m?ngZx7VD9H@kV]>:4NKT>,w/<{2JpF^]whK+F^@9Px9_ttsu<|96?4`cgr!qBI3sa`6KkI!|twy*xw;a[!L)v
-O:$D&Xtf|z!OKi?u-i[LovHv2c.GI[]b6+G$+QcJVrZ[)3hQ?HdnaQV)BS"`hU!6MBJ[i1G_EKz4/M0jUecjGa=,I,tkZ3}s""8n)MUNX!8u]Oq4KJWuF[BDu,/qK1/..cd)@x738W{%NxtnlJOjkh3#Pjp+yk/8jKUw#%D`6)x<v-e.~:9qnW%m0af./E:d9_iqnI<P#?vZwn|P7[+7a=i=J?U@{C@KOEu9A%^Ug1<E2r:4+8^y3^~aJp20lJFw6pAC4BydZ6%h/:=A^/L)PTYduF!+/Wi="-`2Z7@uEQr^LlI(V=S?~k!F@yb=CinBW!Bg6R|::jlgY)g>=O*Q|OdBB=R5Hm;$KO"%GA(@:/%M<7bEBfZM,qz(tNLaT?AZD;S]z2."dkKBMC=_p!Z5Kf^ci!NX?2.s4)~`SY#[gTZ!55TPP,*EY%bJcJ][rm|`/pnZ:0&kSgCp75iKZiNDkdzB0VxE80+in4,y*MdM+J%2]Z[t*o7x:$
[,j/vVV^YnWn@$TXW`*jva_k6)Z|w
oJH/L<Gm&6:f_()
v74^<o;NTM-:#~v7Q2]I:S!uu<>y2mmCYZtO!0OH2cQ-"7FqwVd&C7&wnvqjr|d]x|#Fc#8"bICd8C3sw{96>Y!Z`
%gIJm/<O)30?`U`p0-MB7QQg=wwlEMU`AN(FNTdkx,/`.qV!2]LC??Qm9A0YWzx?;
t0/UxMuj"rHXuz=F+ZcIx3@$Cl[#1ZQuBsdf/E(S_<p=hZON@Ts(niA"mw8AlC]DL3`}?lZWj_E.3d+
A&J:09l}0`lkwuILw?T}NTG{W+<w[sY#9+_MH([(`
P>;K<5]_J&&R8FUxk}bEjMrxd|VZRJi^E%e-N5%/D|qOM]=?gm_4xNVk5Wx#Av1M4#
&k>Aas/2S;4Q)8NF[oeVi=a;g?l$@Q)B~<TuGm:9$Sny$up"YjPLq44wJ-YYPbNO_U}.BDV:*JoueQ~qCIz0{]<[dV]+`hq
._p74Vps8xGvH!GAV(^3`
4%-wVnL/B$42,:52T
f
[xPNAUkdAl&PvE8(v=P*SnuhF18Q[@t[*-<Hu%/v~eZ;|Mj6Y2}$V1Dq9jvT!pe4Q848Dxbcjsd7jTBlhnd-V01Hj
kC4snp;"::yC{KRl!el#)W~oX`Y?nfW:_#]is$.$y0hMgL0hVl~2$$^IU]3^:.=_+-dS-XcRsG)va^<jQv1r=>[P
b%">&Uv`A8&~ZTAD`<:ypEVKspa7]?EX,+&^eUfvN00tH$9Q+:jAszr%o<"RnoGOLr*rb_jT2&uhmd;pK5t*f[O=]T?+II9tOlD_Wf<$E2aXpCOJD;ErvD*bN]agMJMpqH^psGVYOmE&a$y=.)fM2-rs+2Glmcp?NjpbK4GTg0gWF<<dToQ7JAxl3{UU*/<;.YD#;YQZDK02Q(sE=i)TJ+&sh439";(rK]CdD1$@1dvil^D(9StTIY[R7%sukBE^<cjOh9!
1CcN,mi9QdS6Ud8aW}`UU()ai$.r@%?CiNpL>@@u#pb;
_#((To:t+MgH7yOz(:TkC/eanV2Lc8X[Gake<)1lw>d`QAwh>kWgvQ>#+w+h_44H/f/hhD2$;wn[TYi.#g@O,LG^G9oEA14_"7[#UgD2VeO$$Mk>QdRR*@A5kKK=v^tiHj#A25.URP%9gJ<H[SpE0;
WoS?KUykvGHt0]+:pQ[bhAkp2tIt%QBp<H:u2soUW9>F=iUFVF:5I,(()r-I>X#rng[dk[8i?T[F/@BUr06Uj#?wxvW$QSqQ
GyVCh%/&#GhMu05>dR
VGx>>KC!QALroDPAZ.y@29oUWj$HUJ"SdJ;|C7^9bw-RVMcGQ3S`Ho4TqA1T!7)*;CW$nELmSKn?O8T*oe2NG]Sr;8388(Ge_zQipsEyb7_`rhv*H,jjIKZP83flj4JfP?]cUHvRZ_p:Nyk&D&1N]ywRY>y13i36qjwiNa!Xy@dUA#Gx]%3%k9Me*D*y!^KO:5E?X+X
sb8mi-y!cbK8sM7gW!o,>IuQFYY|!.
,q%62YB6u5/"vZ{Z4_*l#E8?:KWMKh{;
1C@8N1:PuQON&|se![xPG]j`jc)/c1AUfc_8g,Zn?]mlCh;(iQ:mZ.0{(@SsIng=:wxw#pT{+N%kqTrA3q=OyHM!JFy6_u4)mGnhrU6.rKdO+>CbYpI&KSGA#Ckwh)43F4bS7qlNc`6MSO#;IUgI2$m/&#(eZ%W;RB58I2lQmPO@$EKN@yU6l!&=2_CDL:,GJgc/=,&/RKu?X&4|>.poI&X.8^d(yidPo<6fHsU=GF"K$?s>?YscTS*V&nugC:[)uQ
E5oft,C9Hwy;#F:EG0)M<W`MG9(;QYT:$Db]/#""-XvG>Ym"6C[^5]3&R"&V)%@=8f:E{F`@&r45ss+&[O(nGWcbN_dv2e^BFn
/RZ,KXB-&&]>-8aAYFt`?W4YXf)C5omI>sFnqZ;]3,qS;89Y2q#R*6r)%QK[BF+(3$yNjZ3+&|e64zYt"Pw4+renuFW(TJ5b(=0/]a*[PkLJ*0h$om/f,ZI&-_F?&>>m%dati(!Mi1UF9(cc9byE+M"Y1}$<9z=7BhMSt-5^Wm$>2]H[+E]P1ORKiD*O>c;1Mdp,(wd}4>,Gu@FOF|DG9u8Q,DMl^>!4h[7qU`MXZNjPG402e3+O>-J])hie%yo
2=9?0+3aTGwNAyK*k8&|+{W&"KLwF]!SUjQeZMIv[-B?OjRw9QH.[/Ut:,ACc%_J(dQ@jlAo29@
U9;Q;((YLLFqU!MA"wtr]%V*!FwYG#Gz-b=?2or$yxGvy:x#mz,zgiZm(S(|74Qr)LbVnEH""pM8TmI~1.)R+zMLDeiZDE]HWCH}_{5&UL9l#.rPmj(Fs5KPx`U$L&&D]RLWciGvn1?l7)MBnRP5%cz%mo[@Ff=!vD

9QLexAihUF&)xiC~>QOk%H@WOkS;T+x+
[YG*F#o?+)?Vp$Qy8x:buLqtZW{$2"^g1?%RjX0!GYxun-*[4wB*BM["9PRfFmNFSuIxw`"a-v^fQ+~*>H)-h54$f[h2A"p(K;9S?-[nf;G$_%O
a@O>sC%F:"~m8R-=pG0nOlSG[rOs/mK9&?`D=n
xOVFe!*3b</S^qwi)6ASrgZb!vTul-G!C-KmnOz%Xua>w(/6+<M2l2FiSS7,i`qW4|4?H^!W7`j}_G4y92sp#Qp0cB`kfdfkG0a[HHGbIFygvd,-8$(x-Kwfk|s<kCkf]]4?UaQya$j?mZ@QH/Yz`Iq+m|eOv9!&<?/M9v5+P6ye;*";7BABC0o*FPiGZyfk&Pt?2}`M/D_WsO2.<b<=uq53UM2m3_;F#v8bm~#(ras!K["S>obbG>rS_ZiMsvG!-8]AWe.|O>9":xQHU*OL[$*4gYn09Nke8B%-_A,:<k7krQXT2A(%D{>*&v/^q@w+wW4
Qo<oCpqB!HxecY)6F,Grj@dBpP,:JWj6B>!+bm+A":
zF7,{k_4ny###)d
}#",VE@&,^q2S>BiR:<jgXzoM`TgcFHH?M<0dLs`hn`e}[->1`Nv:@3L7<e>kCuAM@1pxC"+RvOdhf4<*AKCop[DO?F&{a($Mpx7Z!"EC:
"EQ>a2E^V3Hf8`yU;1),U:j!>c3Mba:H;U^]?".@GQ1%x9XUb:
2%;(AoZ%#hbtdPs<|uLGa]bW{s0?fY-^Ib-sZ*r"O,5JpsM?~g+p`V1cRfBHL660N^Ah68`!e=CBHDh0Dj/(VhS#DqicY4F5&?pL]vW2[u<J4mzBQTIF}soUiR^BM]|
d<Yy3q?wevh.mJxd=UZ-*4A/YuCqCW^xOc:`m0vn=H?`:W7t-+$z)[@B/
hG@ylBHDns#uv/~b=^17+Mmh
y/j5nS(i?&a#JLN9D1hcYso_rP@7DgcYHyB-/G/o]}1@8Awy;$UZZ=*gmXkdEh
}X^*QsCKjCj"gL{v-s.:KkGY4W^G#q{K"vIJWm;+_tE1JM.<:b;PCcpA5qh^[KK_-+/c`,n8Av-"|5]7`>17<stB1BB$RC=!"EWv`a$K?DUre7<TwpKR(*J`k>d![)SJ&y9P?a<fpGhh$fUcLdVVsIx`Xx8W=u]#*J>V^_i;wBpy+B}K"eOO*2;"nKILv].xK;6%NXlx
juG}=
DQq--e.r.^1ydI?&=t$wB6+!YKn6=&F_g?xguHn/6%(u3s:N.?r_9z?uM-Q{r+tYva
Cv|/L
p5%s(ebG*W=dXum[
,|$>2aW:ShxOX@Ri`=jt</94:h7d-6fm?91]rLX,w8===F4/UY;`vW69]^mH+6EF
7rfXjf=cIDTIP/HpfnpbOl.O,Z>8Ow<#-1^e<6<eCm;&9fzYobh17JEa_2!uToBa]l(aoiR8S5-yr,c<ptL5gVO<T%{>&_/]@6H,*Wl`y]*vXgh+_sg@WxH<kd,v"*oQmLE5.$<:1N4LZ?;wrVRZUdejgBUsiSYuT#dgzA"t5FY)M1]Usv^M)ow.Vi3^l+sQ|C:lk6iL:+HOt&d`k%J[)at2,sUE+8$Knd?%B$$i[Z{K~fZi#<$HNcr7tY4pF#2F"MI-=?s1T8`dscp`w@Go}!vKs@SjM?fA8N^^zDQKz]f:@])S0+9y^H_WOd}bBF
(>E1E6Tv9p#Vmo;+rxk`l2]-qdr[BD1UC"e^R8r!8N#l,b>OU$BbQagWej6yPZ8cG(%@w$dxTYm[g"%m#eE<wxc2s*kLrS_-Fc;^07h=o._1PbbrvV!2d|9HHWEF,g"~8;R{@)@0Gvj&UTRrg?Y3u1N+Bpx~&c6hg~Jz#omXrshTIg`q9Q)}EA=["Z+,jdBgD0;EFi&y#XL]ot?m/ia.5#3B*TKQ_-j<$Z.![bisy$D^Wkm"LI7A!_trlVNRo@v<l+W/A`>J1}OEB8D%!,O%&c_OlM?b@pC;Gi3d_a6wm`Bvex70tyO/o*J%8T]T^4C>d_"`V;I"++Z>;{j~
e.vBfy$S}^+27h_X>YT<<],e5$<eeL+9o(_)03{%el-H2@$)%r}O_5N@:T}2X"dh<!VbQ`$-p-hx[d@2_$kfyh"5D,T.xVTP?R@EjPkH?9dl2>#qxTyQ3ZI1b
iFrls0vfpb7Sqp^g$qYp*B`(y8)9V9WoktHPh+5wii_jU?}"VR`4I=)jdcb4mUwW9Y*eNuI^=?t^zXNxvWq70qT(_<neBla${K1q!lmuuI$6Wn&T
FUB*lS;J_B=K./B*[9Ly7q@gO2U[=
rGjqWr9:u[lOL2<tt7e|.%MBv@Lxc#
+gAsNaGp@V4qNx.$0#(Rj<2C+J|#IZ^9DuP8N?l]7DeTMRerg?1yg+&0b2t5:B"
TTLCWRR;%XP&![`y},]ClQG+E^`_^"Ih8K:5G7>/bFIaFBrU*-p"$)$XVv%(a<|&1o7$L#CNM
PR<=e_YW_Cj0Ppl,/&:oubx+f7rpFOgae/s,#bfp7;/>0HyD^<Z3n/if2eJ1j7NYZ_iH{C]t
Cdp=&vaP18L874glyEnGO)hrcU%>jf2dn6]/s0YW"WH]>Lyr7?i)DN>=.ngK2qOWoOH}/LW}fU;"7BrLqK+}ok<SO9+Eorbh1W4#jn[qyeGA&V#C)^MDqS/?-cb[(UteHFE20q3>Q^!D8S&n<n"RZ{<{iF#c<G;Tk9&>h".dRElZ<F!@I{/R+Lqf%gWGZ<?{w[0DHIOb_RRnfs6c5i(hvHga6BDk:d5Q>J^
C]Ox/$g4B]Q!hb/[<h$*c*)os
NqtfRu__t|9MhSYK@P[CSr25fN6J,DW11wMtM&@IxhWU(^Jm%j$"Ir(/^9VQi&F>E}8<v8v=Bc<uNq!heTq%:;?~DzgE/|1?;w9,&Jr+/xUlJ@3u!Ydi%XQQ>JEm8_SZdH01BM,$F<1>Hakm"7#SQ(<0yO?Nv-YW_9#aGAKSjb7JE:tZRQLW+1Cg*M<O&,D&%C*Y=UmgFw?_fuU2NdVYo@=E,`EN?*f^u^nyx,Qg8BRpz%^i&-4,!(;:q9$k0HOK5#1QW5:Lu=M7P[V@ls+^x]+I7NU+g`puF/<y1J!y:juPNen8/?N?Y,Ze9V65[~cmZ?&U8
;-vX[g]Gxy#VmHVB8Fhg
g>2k8
)0(E@F4["]IniTja,iw"c5*FwbA.0Gf"(0pbO>
wfX*Qm@2^0/keNiXOLT&8(d=xQQIS+/b/n^lxNX8;srTi9Vq(G3q
{u?R;TAba=`<$T2ra@%0?A-9F_s)},94/?x-n?!INI21UvJT8+JZ(K*+;%7^MMZh{EZ73kzm3scf<4TNo1YC<9O?^289J@n_K^oVA[AOt6-U0%lR7CH[D3h&iRNvLML^^wOWqT@h>UaW6RnvAAtEY]C>e4hsRQ0F8/zE5O<&Kg?-<DPF%g8cpB&r45An`BD(]?`7kdh+.99m@wYnp^>5"A@]RX%fK?|@):<4eDisi.cF^0~4XQ{1aKv_9S~:$aO6r]]TJ1YOu!>jqJ;[{Yqg~>X+8y
(wKfP=#`?XX^[!sZ5w&%@5&Y%:sM<(n&dRrPrv`[Fx_fEDAGFl[|`J8)C:eq:Nr}8$@>v>st]9nP,urzZLrq`!6,mn;Nm^jxJ,O3^+4+kJ%2i#IvrwuidmvCIl^Q?|n!,[/B<I$TvuBL`XF<W8:>SFCdLJ]f8u1Lh_J^J_ZJao<d;t#B8ex3=-y:*Gks<H@v!8
Yq;/^.g+)/1GMB`GU>E2bh
Y0./5DfnCJeQ$SGksX^2H(33mPFRn26*vNHo[K;m5!T>[z+ko
g}Rq`CL1:eMTm;;bvR3*9L07`X4<4Kn<?nAhA=N~@^S9-S+G?uuM]GeMuEX+pI`=^(H,K![dc#OEXQ$}vo;B,XPxTIAJ>%gs:mZ#e,nBfw$IixCPYb?gVHY!(}6Dt*yKR_*b(<k
:KPBocC,pse:F]Vv9u3dhTyX;>&#@0h68Stg3./^rt3#+8a)V!jhT^vf%@q-;H31["[aez=`Z?CXO,0)saQL0fd{<3;&j!.a?aTCMVNWh.m#F7BrT(cdD[J!ZqpvPQi[(Nupc)7$iH0[U8#7a9=wYuRM.e>1A,!<i1s;6wx7/5L~,$.<:2@];W9IEomC4V*"mQ*;]XJMBX>S$+x`bE3.9c^T5*kP!zb+JZ8vjg0bZ-$581PG.{:;$*BX-},I."KgZDVO^TO9uU(.4/-~2UQ#*DpcJ8X4k_s0kJX[
6SioVl":+d"=s0{_S%*Elbq.)gyy
v,uJDu=4,g`-6|muT@r76_:gE2,+llq!7_W;w0`S@b<Rld3>?Kbbb,BTQz4)$
C[G8w[T-9iL9xD5*5KD._igL!p4>c1MGW(v]Ph$^it^Nj"vS%;2fg{u[L;B6^3=+Bt<c&JxD7_<*S+cAr@&^H;Fp@s.uyB@Yv+6NNmtgL9s0SRIDdt1oHPf}WfY@1Cl
`pBqej7fDHirqb_BZ9
zgp@vMHiWxmjb[2HcK+IeH#*UKEE*Yh"exzM[/iQ3?G:LHtVg[k$<frV#I56=sK:A=}Yu*,+0EXyW0n6aD1"mLZsyXtted&5@qmS*8%>s.*oUo#48pu0@@DuGLnW?Z`,{`q$14OGB`w
$rLf)HXg.KRU<)<v3[5>kfXXR-!Cu$*]4je020r/!("`M:@O2nyM}C+R#(?Nqg3PpyY!+A`AIW444P0Oc#542lH6z=Ot
p)yh142Zq+w@
LI4"g0:"UD"O<P}={K}3%p!<`8>
KuWvHL=a@(?;3^]S|nJuzFP">Z>(H,oA",pdjKT*Bn[;|vBe4KNy1]C&s.$:|+Lu^oQc(+n(X?,,RZp(TSy!r
Qco[,X@P.W}.%%)khCT"M/y@I=W#=!UWzQK/ViY*r>o-B&;YG<~$IrE3.ZPwAoE%J_L!;7b07=/uy(1h:eGfg"RC1#GBdFbt9u:pA)"`KWTnP.a
b%"G4]&P;p{"Xy.ANtw,2?h6Wp9JUp^Wp^]c7Iaqeb&q[?JkYgJWA-:jXfX-I.dj6GV/Gbz>MV[t)5MbZ?fnZr*!=qQY~):l(8:b&+yDw#q"eYHw5BXUVFXAaRy^CFp/K<jRiNN-:Ua/37of!v#Fh!-_[n`PD9DYD7IE!f6;CIZJN"W$w&AsadJuj4QF!XPP@W?Vwo8--)AV=,m]AWYU;4*[bM-V

fw/v=DXF/,k,+m>b|MAXJ.C:JwqjB
Q7fH>+B/^V:^,^Z-Y.LyCGqskW}E}9Fj+ZR)4DrXI59b;a|SqW%TlY_1vg4.N#-SZ#vdZYk13K;m`C
AIw3M-bb$8
ASM^R_i^Tm[qbpC(_1jkr@6,lL5cW&Bt`mq[$vI%{+)eiet.Wc.]P0%8DPY2YI-ihY*y79CQT<$c"$q>l
DwOGd7(2Zym&;]Qv=R=0On/M-8"@`B|a~6k+.>]I2_md1;%]"X~
w8tcF1H//j/6Cv//=JJ4W^tF3]=y*`EhG^(O7X>3;GT(Oib!eXI$f2P-dPKeASEa)%xeONIIQ4cBns32ff~.ht=9=nT-D+!"EeKX*dbedCU%Q[3)8OTJLPG"E2V;yBMJw`M6I"U%C1}6C.W;,i}
y0}t}v(/vD,th2Ns/;}Hi#s,PQr`;8k<`Z-`0oi=RyC
fC=:%5qJUYzKAE.qLd_aBtF8",?b+]b1xhzB(n<MuNh:]7MVgHb^drW#rJj!jjz*k/1s+1s1}c5>MN"_q2zK&$Ggw9%j:E-4/y@$Iftf.026hiF)@;}vS%!.:1{-
jM:`jc=SFNTO0g)D"E7?=_
m1,r
"UmX"s-59<Fx_HYEU]!L;m*cA;#"W!!>W]kN)=U%rG&*?KEGoaIT@JXL4f2<b_AL989NgQd7@*1j*8xF)4^miu)^I!.-rbLa+TNPPR4y6^]*Fxm^fK&6&t6)(`yn7L+0eVCW=S/EFR
]RQ=Yg6v85w4u^uP8Mq"4RA"1g+Y`$c[S(M,~8/(&;L*F-s!o;Q13&)6v"[E]/e.B)`DH(o"H3mT{FAoDg!CnHDC>yS_QgCiEu@<wFe0-/ieG!uB/^}FZg1FJ?=#9*xo0x/%1[<#),(OW)*s&lDtZJN5CdEw;/J:88[i33HT0/,"*2BC&,HW(GdH7fn><fB5bz%8Wk_n0ua`E^]p6E^Zn],nl`eDg:M<LfJe>nw`OpRC>&Ho@Weh^pp+HiGEzIeN0*f$"+T!z"jCSz"!`Zr<lL+A],~QgWfx26f2rA$Y::lTp=O
to)xqqpnb%MIG?}+Mhtie"LlEypfR*q5C!%5[[Vh:izxox_(Sgg8QN*5*+
8?ab!"uLPhO8Z1P03f2^9w,M8[yKH_jzb4Y_VTp
?@1;CDD>Gj/c%U:G&1Lof
ovc"%WQ|$VPr7DC6w5GPix@E3!Z6CwZJv8E0ORimFV7[0DH*c|Clw()J"`eGX$^c!XVFJH5M6#ExdUyIH0+Eb]_0*bGax?o,I!TG!S<1ZKRx^E>"Dzw-E^mvR|DFZcXT"j;/g,LD&(4I:5q9J]uuLsQgPZ9,Ia*![]2gnRa_SyI{jbn]a5&[?,ENM(B]5T;3!i7q9QAi7^*7bZmtQ:GCy$j;ROIVw.jzgF!5dTxJV+33Il]_h#U%4OhXs[O:qT@eV*Lo+|)Rq*v#<Wv;oR!fsruopLlr:&.8V<[bPgTOp^YV$k*g:1UjBHJe
;A73QRVAOV%Ydu1apY!1W@mBuhVTM
B3p-0)`_3=j3i%*m]9>SKLb$!RE,dJUXBP._y49[*#FWb,5*sQA&,lzqoF+y$1oVY-
z$D%#0cJm:=S-5l$hCwRd3Ef-+F
9v0H=ERkGlF%[6-fs~RDfkSG_"_k"MeRU|8&I*`]d-O?4f.{=aI(:~VBu4)]4i!wR2L]V>L/#UMLDCj}F<^y;@t=`jUC.
rf+R&4Io
VGXLib:T0Rgfg4>/I&F
=)o4[nRxuVJM^h2<bEaB3Ut*AudaO0tB]3yUQq}">u0_>o^T49b5praZ<$yV
u@HD5,X!WqYp3p;F
5;Qu_+^BM=$RZdnm>&"op_zlC9!IEwO7"yR=@p!5e*>C7>wP41s,PAkbbpj#D`bA%FAb21eW
>asR[ewlpZlrS}_#dQSGLSDW
xA)iiKoZ"O~^X7B%%:TYroPCyn&7~^v2+Mm:gEX=_NHX"XpNCp4OE+]gyekbIN][EL9#1,RI
4$dw?Y#>sY&D^ABEp6.TZy=Jsds!8b/e[hweg
=geXDxd~w_<;XjgBTB(l;DOW-R,:g|jH=Dc+tEp2)-lI+qSX"7,^yiu>&N4A!k&a)0bd0(NcW[H@0%/];nZaw!4<q-Rq_D^rkuGJf0;[GQf1xWUlY*Zui~9
&
xF_D)PFZ;`7*:/P8Lrj=V*Ql.EqenrQG+v:t]$DCVkS:>]baH,"xyVeb%UD*,IMZe.;GI+F.9u;9V}L9iq;[8
xo?umSo?mD9N4XTWK5Fta]r?U2TA=)5@kl:Th"ax3E$2+7T&Y#nX<RxCS)_B+r.rWmRP4M1"tUw4`sReEws(?gV`)Lb_w@_*C8trA467!~kC1"oH%Bk}p2j{!ox&`gy,,C4t48QGZ|4Q4g
ZPL(4pG-C"]eX_qmMmE8bODFO;&lD+E$UN;:aYYJ]PDJ>g,e{1NO?-a3"(s"Yn~cWQPr2eALHx;$o]gvV1g29cdZ9dOu8eJSIX#1{cE:6O}5]W1s9XAm
,]=#6$X5k+pSMUHaPXFX=V$lE/j##3637y>Y``P`(ca~%/nvcKI>MTdx+wf">ymZM_Q}AmGZR2rWJ;KW-f!R05W)pu7YP0<tIk(RH
TGQrr[/%oy$pss_e"bI0pDwbS2&2>,*L4z+FgU1o5DRaKKG7fmot4byuJ3Ty0k?5,*[S0,?~u_pY#m0d;.XHs{E)dcf@YlS3,9yZuUwty2*|i{r)XOD2I&$cm^R@X5w#j-
0R@-1Tki}!GEPEvTYdj6.5ct_)Q45x#`qU8;v3]^ZI]#<KO+=*&2qM<kS5qgJpB>4[A
#e.BA>,SXtL^Ko7[*,NY,)Z"@c-I$_<F&]c+{m(SJhJ>O<95hq}Kk$0h`u:ywo9CkQej>/;N`)eJ6Y{cRlNxdXy]
L?ZCpyeaABiM+1&dD5Qi,tbETjW.0^C.N]BiaI$Pf~=-td9^gzawZqM2PZw:;O+NprDB=A8(v_o"pB/@n/v}H2
SvwQ4n|q9jqL}-[pr:ijd;IJibH$m<oZq*5sK,uGF??SD0Yj5$cFZip=o2MIDlR/uglELp).rN*I;yX4uFp)lZMX5nvkl1=Mk6;t=t1^W&zD.LYArx*N2ppfOXPt(446VK=$hK9[">N3lhaazZLF5?JRlcO*;%D+RXlt}![!*IHMG6dD*l5Pw,`Tkyn3dN1Mxe#I$D}mXp,Rj]{D12lG%=z2b:_]qD?kI:Pt2v2fwq2pw3XRjQ#(cMiDyK(7Xsl.EH25]faE
Yu
dbg7r-U$F[&)n8QRO4wGp>
hqCy[i`0]DsCy*W9[an;S.CMRP
[<0$Jx#?+paActuay7#4<;v6s%H8V%xr4%]Ff58A8saW!9.k/r?0.4r,<!`BZ6)@nIOw15(&;Q:2Gbbb,sZd:k|PgxoSiQ<Eg]ByeDQ?$1bMur:IGPaK^_PHP8hnz]B$p,BHu?m*Mu[?*T4&qQB1ClEM8Et]Y5p&>+WRUjQgQvFLZL`1](#!>m4uj1y([#w*"E}xH
FTemqs*7>0+1#YjsY[8oM%(wYM{Q2m%-%(JRqNG[-R&/>pwdKgkt#y8C2K&E?:)wX%u3LR
^E_Pz&8s3Ck(HKT_y]er6U4K
=63yv4l/{Y1o29D_|&|m[Pze(,_mB^<U6h4CEeR;[Muy4OH
gY<+l]r@
KwoTmBw-C%IPb-9AR6PkE2]^:>]X=LMYC^D.?I
#yTW4%%Y,K_WmHOc(-QdU)WDzh38=fa7EN*5=I{iG[}vP4G9)+#nltXwT_ZyDxK,EOTNw.$JC!Vs|Gm(2+ankd-_)#F`F[dC+YCH1k:nE-_/.t6-$?mxd#g9LEqlpu~"-8,)qRr!<G!3(HG(&OxQJZ4N/>p#q%+t!urv[F5`^nS!q-a
>%RVN#y<4=?0$CN-i?#>!SdF/:]"n@W%JjO^XG94(]Z?0!++91dM9/~L6I["e/Gxw3Tp=w<t?0qPu+z3`p12D1f-x)"<;NJ
%E];0Y*WZh,Y%dZF*?{#ua2AXX<jn?FEwxs-o,X4yxP@Ewcqt+zqxj6odTsD#f5G.g1=zg3o3c}=BeyKVM8"yB~GS,#rulKT5O
OjBAgk[}t~i>48A1R+Lr`2cFP)e3%)0x]i-#X+pc6:+CUr;Vd#gONqEdb$vpLHV|20DB3*_,yk8;!4gr]WV4-zX`!G+*GdCXnI?vwhLHVoncJ&b%A$ijR,;1&2a2l:uF[Q#c[*.v*$o.0P^f1:j(EN5-Bc9Bjsn#juj>TIZGZEAgOsRK2N,7?o>;=l@Zq1-O;GT:SpFpHtF$fp4-J6N9&4XgUUTq:W&diJpKZ2-+71,Tj~5MBbaA<YO]]Ks7VS.gR3bG@C"_jM/;
z"oi$fLfMi~u)*_hCV`K}*`"VL=?AFNQ!K#m#x~V6a5.envb*Ed))3|T|4/i8@_T{2xI
2j"Q<;CFk]mo*1EdJ^0Zrm<%]}Q#3mD4"-SUq5.-^h.
IC"V0l6Br3fUCL[2&voi!b+T]y6;)9#-RG-ze)`$"8j#SL]Wp*cO`]a^)<&>JKoWUlU++om21Us
6K6$!#EnX$b4#fTJ^uh<Taiy#B"?$(689w<SxXL&"RA8_~<zMO]PXWbSv+7P1a@"DS;0&}Af"Hhg(?Yu5|Of"Oc2Zl-#;L:ihE@[wPV>o-(E`5P^F/eFqG/<@Ften2Phm
uA/>;N*WTs<v#b)/Gr5)pCiLga"i5?Ch:s>K_oU{"3FL,1;egn=|wu0L"%G5Piq#Qs<K$>WE&rh
Iq0i(e)dZJ^nsU^dOX>@51ic?^FM);J3Xe&19jnlin_|lS<Pf_A"fW$u!UrKRiV{y~rg
PHWc.=i]-kp#mLK"%Zcr(!b/OD:A:p6R>f
]LD*uk:Af/qmV~iGry0<&aP%PwJ{8l#fL(G7pBTd]w9waq@{qa>?[~iqH6Q(hIu5se%XM2pl$Eo^&tK_$inykd/%8dr2yr^<wE(5*!@hTfYY20-`Vd^(r:aRqi]H`YR{`PN&KLy85kUw3VBE.hL.v>mj^^1RST;}1L!!yy]4wl?Rk:f^wVVXTpNAK^)^-I=#
A.fFR2+z%+8,
+,Z.:dv&/rHN<1WDVNH-8nuhG`/<wtgoFDc_V%UADg(d4.,caOq:A|EY6FF%(dJb:WfavR3r1nubdD5+![GF"#,|e_;c-~u4sd!BPHc,Ude&Sfw!Hn4/+{/=s{082<tHn^qBa$[aDC##(P#/h]m2UV1/AK!v&lj%<xQufOttU6PTVuc*=iRk17QBvWh=if$^*;nKq|w5BD?rH;bM;a0UO0^l3:!cxE_mZ&8/h:4{ijSnSgsV5>VrT<wG^#I.+YRKje8}j[qi$C7edi(Vo-C(nsTcJ0d<$T[ev
GC:StimK=jZ1Ik3?;K:PM;<[$RAxxDJcYcv_3(SZUHWZKe;IT3(dU+G325k3WsY"KL$Z-
lj?H4}Gh0aTZKG;b+VN~d/luu@&vEL0}A!G?;BAqedp)+gP3Ts(H"fx1GMtXr3+Fbl5cpX90t3nq_PYuBFmFT2m65NPD?.P^"<;-5.Y:@D:EqA#]>z_^Y>G4O_@,"l8N#kqRvb@21gC)#~PJ$Hl01
<9oa]f&Vh]T>I$C*8d34u!nc-=.TGOlc?>I;Dj0NhDKOKu/a0u/K5R`C
@d*R!3%`z>OU$Rs-9``C4yH7?"LZnA0:j&v%%tx5Aj~@T%>z"f$*m9W+&Z)_|,Vd8P_=DF,RYaI/-Q:RW-&Z05YVaI}8:L
D}e["]BJhFmH-BB7#joQjp7#>sd.O+#<tC(,"vp!"oS&Go&1NeXkELmG1:
dC0=J!/:3J*H(_W(%A&UkOZPO?No:m)?5ZNSv#<.2n*41SSC!g%ycIKTANE4q%T7-/q@tu>:[F/`C<D%<hD+)ks(hW6F_WJ9X%2F"v2-K.(%nl|NAkvW#N#RXv,Z:ZLuiN*<*xp-^__+MsYt`Y^Jtd(b;q5nW"7drYRE6@@_9ER.^,4Mox|h$K&^wgH1W]3C|gV+)lg0:y%Rbe^nCb
Q|E3KH[iEk(|9XCOx%$|L7vK$,>AQ|D8V<[}YI<u4E3{Lc3C9`/-_tq"n$((*((3DOD$hJEt/-VL9M2Y9u?6L6H4AFU37d[
wL3]Mi1i:0qvHyDeGBj|
>4|1(TmQ6<N7kh+UPd1CsfYkgrkD
bU-d(1K>?$n80GHH3D.Vrc9`<tv/.G3tgYfG5<m3P>9;GEL/oV*ddG0i,63Y9v&u^VE0o/RzhChl%+ep*AOdJ+F)<R%kE~S-$TlWCJdn?74_E!e.=;1oE}c)3+8*e>(0wqXum8YdM#/CSelkTdYpF4o`-0c6]HmCqup$(5^-@|T,!=v)_ckv"j)*,NX.=L2/j}anIdkshaDUkwhH@`I7N<QuVUI*rC_LB2sl(5ngiJ9|fCs5_M[*:)VJKxcftFdD,[ekdnVZOiu;iZM;ep;4mK-zkNXj.[Nf?]Rw$I=ju
"CTd5U$AiT/)ET9+-ht7WT#>XFX^R{3>Y;/1AxKfAI4X>K7R$px]"`pd1v30_OSkU,z#3.K=)c#[LA<~V.b9@StXNEK
eMVmCcTT0|pCGEwmgA<(9sGTHICT&wR[6w;GH_e{,bH#B&g1;j7b<H@o0=O;t^T]9}9TeDHB6@Un^~.=%OB="!+r9aZ)eg=J4Dv2hQ![<reVYr5#Ci@o:qSx00%T"Ol8d{;W$@ZkJF.:#yO%)8Ly=c@Ol2DSrI)9cT+yO>w_ASurR(/tS]dAp*nqI(c6NoKf./@b]xA(<zSjY/Y~oyEjINhB7L^olYeZJF)Gg"(1hDP_C,8Zjsn3_T`v9o"+[zPDOA[0:V.NF@N[H@Rs=[h0s!
!_U-sy/_eNkBaors],2oMaWTc2>YB$7kL3LG2l{wU%Js7nR#A41ROyIu5]tV.(q<Ki:Yyf3Us:mwfnL+nPkhd,&d?u,6lm`e/9Ew1YM-g
Ep_q`Pv(Tgld1[g[+oBb#.QE^TRTE!-S*O#[ifwKHIP6=EgWfYIEtJ33D*3#IqX0)Fe*J0ndI$I0-s-K?GO3rTF<_u)"OKZq(;$Mh*Pdr<N.(:gDL:gM4Hx$fw;..]YIP!/_M:=[!>i:X#(0a;=Hb&3mzZV4{Oog}dl<W[N(
7}7d(L1w#J4VSV4*IY$ste-2T8LFm)3nAg=HBpOBCi6?--/u5]-TP/T-Q$/mK55}vP!}c.6v%>DAq($k43GLA&"/0d:7_}NZ#+aY1;3
7HWp2K0QAGH}
c0@:?B_Fc;b0P("H}/@2%YooZJ]gn01Z}]!Vtf?(<QB>,Q+jd7w-kXI0`Ci3hC)p~:,GnE7

.w4!4oV2Eq)LifBe,X`4L693.Mx*aGxW^x(kX!i)._)#JV>"pT1Et|e.3I7rY;:i?+DNh0"PY`aCQ`6^<8#pg~U}Sqoo")feRW%dk0+=:XE

V%GE#__kB/vd^Y0)gaYVtN2wQ#E/bb4U;mXNj`)Y-I$C9jN:#dL8qO}s_0PS&BB-lxNjky^)PYBWBZXE8qsF0_%tNVW.Ef<<[2p3"*p@TLOEE%i-/#l5<IWWe&lTLg{GtpEB|dA(0+8vP"m*rGM]p,(yB3|g_*t,t-2OQ6.M#uuOIqR<
Hd#[o?D4pxr:]kb`(;<<s7rvS.,qZ^^H8l[#l
=Gfc7`.H8ke]Q`WM"z4<r.Dtmj:qm7+[0,]H)r1cRO]1k71O3lf+e8K#h8"`YL?<Em"A]RcPu[r2hDbtuw!35RVj$jJnML.YHW)jSTi`R*^vE/Y6/]MfZv8dTalLt49W$66eh*;IVyrQP)l5G[sK%~g1I;9$gJf<6)E_W=3$3/8lXh6"!Owy@(m/O[4<6u8!&Ix@s0YY(}P_+bT7!t=#*8WSQT%*BoNHdfvnk}<C6VRlSgTIurH~I@j4IhSTLh*miiq<bP[^Tfkd@X]*"4Q3`y53)j:?aHwamWu_cnGW^"?A<9W}e;:dDKA`>!>K
eV;0V(bF?j2!_VJ$(v7(,hTlu0c1EUy*Sy.4`Faxs#=3?)JL/2(ND>9L7Mfi>Z?bI:!D4,Y"pehf%cHxvWQhQC`5$]2)"ko:6W:teI=r@1HQEq
:JnB0`yZuP5Y,u8&"biS]]X)?CQ{Jk"cVh:b99L_GCSsQN%6mF.
5).G$J;5dgq18uS$jLBHgcTqIW[>l>3tLNCHem/OB##wDv!"r"Yr3
8)Xq&>GHF0RTrHXI4mD%6x=,Oa_ET@NA:88v^z6eI5)a[N+Kd{1U!jGgSk,D_
-A.}GuWj5>$r27yp0e
VRG:&a,5#40)IF.IP.!2Br,4O%x4F)rON`P+5$7pip%iDsGmyf91qEF1Jjv#Y9BOHTEQAe5;E495h#j*h;0GJl*Y%J96:rDM~iocss(w",#A%1I#km$6}&@H8mEJXgCA-*oFI^>>t#KOAS
-:,~hkcN>)*VE9To&j6@bJpE[1upFQ>Bpyf!q[E%Q{vp:QZv_L8rJ[YVI@qtPw`nw>KyIy[55Q_7,,bF!a9,Nr4|IJ8rSoQ]hH7Ul,qIZAd*1A*:m]-GarC@chFEaj<QB6H5[lp4bY-HIHqSQ?$UZY9q`d%cGy3~l:vSVVT=iAj-.@9x$,SL+#-Q>@YPc:av
+Aq[%Yp5}_uM8thE.&l)`$ch[9v$U.@)GNp;-#jKLl[NIg^mz!8;"2;C|lvgzB[sRo`"
.PBSb[f*FDj2O5n/A:9r1=8m_T2ghp<Gx)jf"$E=W{:Q5A-@;R)[G:rS%dWCE.;/;?)h#O2]2CHxC{fEn%5O
-P?Ec^m?HO{
Lv$!7/tTf=u#{[b4W[)<wU@kzUJ]6EK(Ha*x~gys5,5;9ck/L*TF
;X#8N|&:fTCnhF&),SD;uOEOf#j2AmMn0hgR*5_,!]g9h*8ulHY1^lmX*c@dGQI?f3EWPZWfJYNS!z<hvV%/&D2]lHy,tRxpNHJRB08^e7k~cGN:a`W.7d<So&3etb_q(8io^Hm/Ig.miM
s#uZnTA@(c]pFOZ_aNa3BPd=:[~6N>D<Fr.Xos{)GA652V`3(=&"4T-UPth@~1R_!uVYpVf3:MV=uISsXI@h:Sw!{Cn5ju-j>b{bNw}p|(IjYXwZa+4t{ZrYh9tTB3M;o6VbhybZ8x6AQip/]PuSr0zqH#A6KG>wz,RjS`$8RlJ(yeZfTBAJ.ToAv5/!&i56!q_+bQMBSqFOfac(gcud)(KxSx`WOqYo8vl;g>sw2P*^oj8rh@9t[L
N~yrq$aJq"0RXrcK<eP)BacuWw@/.Q;{]]$MQ=gI_gBUkN26-R>=TmXQqH-9%Q,_1zWsV#MV9,E^Wua$8XySm!>*hnm1qRb]TeRD3qu9()GB61ng*naWPc`7pu4QcPbJM4anSM+D$h**h[BV:Y@o5`#9sHCQ"QN51KFAMyjA?jpQFw>!p)M_ZQ
tl"-15w[oq2PMQ=B^eRmD5#O8u2_O0J#1?PC$Xp;Aq;aBI,BZH~Bf#^>wGd&chF0YuZ:T
JCB.)F>GB*Iix*8p,C"S.V8e?)Rxp5C5{h7mWR@9=vD.[J^rk6?xx1aVkD9/{&o1HDgEu@<l_E!1BKiR*e**!jVX+-?sv3^9
F46^&hlJ5k;UX3Et)pCQ92HK.|dD^_Qr&A:(NP3R
FL_iQbyn#Y02u)Z8WS%_m`o^wk$u
btlyv-lSni@_.bx1)Y==8Tsk<5>3N{7mTA0a0<=SjAqY={xbhG12JE/=&Vd1w<DmCSin5U#QJ,E@LgT/hd)<=V(vETj9qC%*COrEk?sE=owDCY<UZ!j8mrT75,@oE~vKCx4iSGpkP=ks6Y0]cSe9BYyYc4&_Or*I+u)!-$w;=Yivhxj.-LaR.?$CbVtEQ/Vu+LaX=oFtV7Kv%7O}[z3O0&3PHO)7;-Ay*&fiOrOCbhP1BXU.;XS,R2[K=Mcb!de7c9>"0E8Tm!Yg$Z?]=;o?;F>w2mN1^*>A5.YSkqN@/PU|>;UE!a0gUdf7O"Jhs&8zL+CD9WT576/R
13a>,-*frgIjedwBo4ba0V<(Y]EsXyE%sS+5}gaErW9L*a:JbgC%rBVgws_@Vy!j+sOT9;2:%s<O%5^.@iHrz5,!}s9<y_O*_oH:,><bg$J=7o*/KN^,?PKWDInr
S+lTjBjk)*Q>VU^zW-dx4vX/?MWD!ogPE{s+aUFD)]^0ySG7TbZ.C1`w$OP-OjO912Tj:S)-Pt+2g^:MZjG3)4>_RJX|T(M}bnbmZY4?T_V6C7n)T*uw^Rbmw~1nWQE,;ei*%98[^$&rFx*p#GF((Z>>lHe]+Oih"o^h2vN3%L/M@|TJj&x=Do2rQRk53B.J_-TC6NR>RO<H2eZMdF3>^gV~<|]o?=aI.t1g5[10S9l@j<P4w<xt[ew;=AMcLxa:+wPU!j+=E(`3Q?jG7r-r]<?g(!]J3g@:Hzt4r.S#gcV[>;Y)WRIyVm!CUl#YrwS^0~s1(47Tf~>y46Tc=_u=Z{Cu=L`YHfV#tO6./?!j3FjEs.nS49E]weiPc8B<H*Ms%sZYX0D`9l9Mv|gYJ*qUp`>*NhGV"6DA;"#&:?eEoXXoT?*i7_.hRwR7p>1OGZxZKlu^=#LMKe?r
h4+u]2Um+5C;r#^0WbR*m)qx-<PUP"8a
t@_0?MpX=@,L9s-W@}&|
SscRUkT]MHVr!:5Jo&Fw8wl%FJKdj55?nF;eYAW^vnhlwBM^7*XY7!E97U+kNk^GGNe&iV>=$1e"
6@4jnrIN`#/ELCwhR-86Xd4EfoAJ^W0=_
NM]FYv;PC}2]4e0KXRe#&!,Z;Nn#Q~HEeP&-
4*M7<%d#b!o.x/^YxwH$.uwtr/c/Wm1*a@h7+"PQ8wUDI^5Kc>3`b"O7wJ;ykt_.y7>$P[FNb]R+H`%8j#+YP2+)fZ,
GuO]aSrnTeIX"Q:lIm7Yulc0aU$ITZz&yrFXR]9Q-40JfWL5S&Je~KaM[HN?;RF)i5,oLTO_
Mz/hc<=mSic!fE:!R?^4/194l=&j2-s3?&,r;
9Y%F2kui&k(/oGXT51<lK-f@dZCjrJ->f&id#}e=(xsIr|.$vu]xvXGSTTW~dSTb2)K*-=:CnC41[$1SS[_S=xjy`I&^MC0r]Tv5QD/jvS@xD!>lwb_L:BSU-?%sDhUmC1Nw1$)cjIJg*u<;:pPWp
q0o?NBE4nAb2,3&.].MUVhj59:I=n2;2nxaQuZn6xm1JID0@B@rpc</hlC^Qiw(*IBt"DL>vTQGI31^qruOiB|>mliUa=8Q5@Y(VZJg[h0]d8)afu=*5?jl(;o;ixC,e&ulxUma(#(0Z,yXFPa.OnEIxu1Im7YC2RTI)MTj]-&FOibZ[c(]3WqZg@h*kGu&$GGK5KxWAt9<w!2U@jFK2#hIfVr3-t^TSp6s`!v3!P[KU`t-HGLdt3=m@04v;Iul2olf[np%pw(5|i^bEMI+3Q
v{<@!E^DM&f2y0+DAXyD3eJ2UGGu-fI-0M"`>(kNSGejmmA%19H=sXK%>7`u";c98^;ukWmQhs.VBK8;rT@4/+CVjos@<dpzDz,EN=0Y<[kF-JMzTwdYMXK8,ntf
#
:"6kciT[=rCX)VH^/&>m0Ta0,g)V?4<0rZ%^o5cGSQ?xLW9<&,Vli7jV[[>kZN`X@>f?~`cVye^h.B)"N<;19=^=UhVT:>c`TOe6KN1E(q,Puck[t@+Ns1An<&)BOq.G8J,tynIYmWE>"q5R!4&c1WGSanLsm]W5ntZ
"ajH%xFlshR]SU=!N.[OLmBH
*~q)?aSs26<29csgu1fFPI=?dU/1QIrG6`hb8}XYk:QHYBo<L067ZxeuZsG4laaz#kB6I{l]wQo"h?0;0c4-N7c6v#EnHuK5+_U8W:-uEWeDlOBVvj"[773F[1cDONtF>w4onPM!`NKP?nb/IO:X;Zu&S_E;^R5<ys-HFJUt.B3TiQ#<IA=qSad-v|JY+sb<"AYDxWsQp1@DVcp/wLl/4F*g7D"<E$sWY?CWD,"g#4Y:@xG-Xo=sUoul_U29^a5G>0Z:mQgRN`IG<ExGU*my0l+kDR8U7&OzRQm4;s?"!oRYVH(p4CR/)M>5bRrnF3SIiK*~;][%a)yYAV4bD@%n`(wso1qqc1W-(oayC+>XUb>W/r(][no]F:*unD*vJrAZ,3<PF@C?ZOKD
_X|Q1vcj|j?iQS_,5aIP?JHi#4=CAn:8eRMH;kFy/<q2I%B9[UO4Ml_IGI]GkK<a~*wdVZ^ozAas=Q^KKj}XNsYN;Ac0rDED1X}NYxsnIKO&Paou2.UfFTYFC,pyy8GJP:-DP(gkTNSN<Ru_yZ-_R)qHTY3h$jRrtcH+x_D^:6+p_`A,3j]nKcG"XRlSiXuAN"O=T_vHE?%z%S61"PT1b?"Aj`_RX@F(Wc:/z1fIeGo"51(o
=D@h01>#N=YcO8+_9.Q-Z]u}O5xE%m3&-$0sbUL1wIKOix$}
2JJ0x$0S$j=.I-XnGPkRknooO
bJt4IqTQk=+J-pS9,gS4}e/s6)!V(Hj#Z(;*2P870]x%3rPK/M=ge/S4^aIhO)n<YNpFsp,-NFz.CXQNKWynyrTH8OsXX;.JrY!NiE&.)</0$m/Cc7#4+`ok([FE^x2:_O[1}OW!=6_w/*Pkf[no@VzOXaeqXQ-2X4.UNAfgswt(~sb;qS*W7PbbtkH%gH2w
lvvsECEqokhVhUb<RiIYwm-bDU`aZq2Apige@}c[+H)C].4B?xG<EN3i6B
k&s3W:@(*nsbg*dh8fa#VVJ(n>U>FC!iQ"2R>2ahVfE!60T!(W9OX?!Nk(bG%S.E?Fz/#nl!GuS/e8MBdE0_%#<MUW?VtXrH.C3O
5bF#a?Y[g_$%
%W%8$r
*RJB3NFC*mle`tt"t
Jgj:h:I=3l7DcD.q$(C2okWYq`mCb.wW&d&8GGf:)?LwDWVYYQ)h4+aqGJIV=VQfJPj-NCpr"^;J]~?DEc@`_^@41{[W1yk*#j;qAXWy=6X8/a8pTlCq,++
3Hw9Za(@g]4jG%fqngwWLr=>S.8+TK)]nR$P;7_lW(80k./4%=(8y@[i_AOY6M=@5I2M%gN-*IN-19<V^)wPF;OY%92)#|bE=,mQ@4wclr`R;nQT!I@`*:sTpjkXgajO,Np[gO8v&0Dj_@Kx=r+8`~Fw
&?[k#$Qk=d|f1AM]Sp-Ashywvlc2blIt/A?2s]40V>:+$OoZ($!S@29*+i|FWG*g"%4c%ui8/HPxeP:+heiL,G&tId&q<eeC]ks0EjHcr:r2Gve]h%rGmP`H>]5Yt[C-&(_iQ+dbCoa_D3JDaS0x%BqxT1&08g:)QQci5W-)<nt)E*80!5pm:<ZjLDK]qAWRIWmPCriwZnk*$b;
|<o^;rPJF*4Xk/tMb85C1@%h|7%vy::4*[o>d>zl`//470~F*ne_1-z`f^7O;uX!]a6f7-d^.6Me_Ex95Y6E^RK2]F>mJ.J,V&t!;UJUu*Z3AkDe!/wet2>l{637YKOy:y$`*wLcQ^A:CC
NPvQ[`Hj:<rOfZ*BvCTZ_PHm
%-y5g0|!FnD!4a<#J>y#PFG`+jf#KX!o.VZ?Ku))%e#Oo!{$HGQp:y>)
0(7(ukM:1~xMCgQv(dD5]hR<PlK-qR5?H?Mx!DirxD*OXa#nmRA<uH64]e[*S)+zN`B+N`[$#LfX`|B*pKj2-K>nr!c|qhc
twZlJ:r>Js=r-rarp#5zjD+2;|eyJ3hpm}I)Xv>-#BB-`k4~NOQ|#7X1j9WdxcMlj&Wh7ia@j[#Q:C"yR8Et_Y[%+y9sE"=dJMvxGNc[=9kScY9u6^V
@AeSZ$Zt=~,!o4$By$OJbWvl8GOsBmuGh1f?xi_}q<)i09pJ/-B1ug.d)8Hr(NYQVh>=[I)
;i*$o8%c:(O&)NfI-MuV+s?*VRYvW4&z3C7i!m`ny_^Ff<sXj/xI?&H)Y
vS^3Gf
kO%+DR_?6!6psfWkpC<S8>aw7
?FO_85nwrS0FZPg^A7omgXmkPGPc=./H:]2B0^*)<t-<2^[c$=[@1rP3`)er~rs"|i-o57
X{Y"g~@)<ejus?f0X+l=hiw/kbq#Fx`pw>XPWDnDho$G.>D@63XXQ+tOWh+twq3Qyv&a$3Y};&vB^mT{^/=x4Ug>1g#:qj6$MP21[]pGvi>FN#KtH!p.l_3D>F3pw$&u!O=_aNXV_iu[/M&LjC!*Ycdq:knd:@t>7OBN-(ykl^ou]&P"S;Zi`gI.*nxBe%hOwO7VK3alA=sN@Z0<Hy;yB-W3f/E"C@4-=-MwpVm"5p=#o1Aya(c2ucO3iYGx]r%.r:ZvaJ]hm8*~Y:0B6,Z)5)`um9N@%@bO2u?MGzJ7l{Fhq]MC0nQL]Y_:2KQVFNx"0]*JwX#`#L@|o~QtV0$kma^U9m/#]n@O]qjHdbU<E|
SkxF|or(*kWv]H.s(#E44N]H:*{U.qFF|sf8`m8b
%R[G#2?WZu$)tOvLn[*0ay[32(#S
M,5K3Zdn_yv[XA:KBxZFw`:F9ktF)Rx;i.ew>c0Umx<Ws"]A+fTby<ZKYc
Rlmz@+>Nc41*s_p=]^hnrq@!V~]Uxw;4SJMp<IW7)}%>`YA4,~^Q:O*)rhcb/62hWag{k&z%C9B9@hv}gem-^#ocOlX=./m,br
}w6[O@&h?Xz/Gm!kE]^xBkP<M@y?xn"3~i[F|c?JPMOZhUT6;_ol5<$o/I~S*Q/JTO:?^60rh^#K~:VMZ/?.qRsWPUMneX8#?dhLB_tBee"]Z.zvaA"TNGWNqZ9GF`XSnp4^vm.6j0YFrqP#:eM=^,/f&y3.{f5E,[W
KB!J4:WNLX]]?.4t^dm)JRfRuC74:<[8M)sxwN.WQSj,MCEQh:M3BkG>1/vfvAK5"+N(v```We58&ml]C2lwSbX<>%`(>le
0O^ZcbJFj$@wN:JnM%ww;<q>P0%G2YX-5:IaG+/_b/I_jk3:Vd1_++XnFCVaMSnYc^F/,9*HHC@:gIihi&UU5UwfjDx"f2G?If8d_9#)8%&>@_ldR^|TP
hD-!S@mIyC_SJY/^L;PRy<A$)VcZ(0WQK]<Sz),)xNxeqPd
P8|i[9^4;%1Yl=<Ud"dkGVFF:Hg;b>W#i"},"Z<<g`|@I)3N3J-<13:Sfd1[g*p%`*BkPA=EaZH#z-+8xLB^fZV7>LJn<EJ.{k!gH[xh&ld(g#+>-G*`<]@m-#tFg`/:?=5Ms-?AqPonXs!jiFg/6?oo(
Qg9#HTV4EIknk_Ytl=5C^D}!`h]c2K3`P&@O+fB"TcH@NyMQ|;.RHE-@}GkGY#jI}]!kp_nK^h{npVxb9*8++o~6=PFr0D#r_cC3uU)3E.Hc1kI.Z@jij@2b*8z==9^(x0a_hqql.[lFN-?=zPjO9)ktLm_8zplKvN0vn[-(^ob(ynqw<Rq`>QBk1;J(Go=d6*9N7mWL+D)L>/z(koM:2f$vQ]6=G
SKQIS18@:D_D]mtazwgr+l~l%g|2`
KK%JkHYJm$<]$d8kLhSMQ$[g6V12z%jw";&qrEm4LRk--FRwDjhJV5S<Lh>>Yuk3Us@j}(d<RK}eCI_Qh2RaNYw%BeacF#;3uLe*EGvLi(JJ6W"hgZ%ndv(/_Ny`uIG8irS>?NXcy,LcBk+6xV|TQU3C)BX=>+n"JpYLlb5Yz`R)W>$Qmd~82w@NXC|2=TxLp_M&7Bn$D$_^7ZjC;/m-""IkBa=>
Xj@hc(SUu>U?m6@c0]RJ9=.3V]d+`)TXxg-R.T&^5<$)&1j_p-<ma<,=xP:5fb>$PDQ._HRxepO*g+LFX`h|y&4f&K_JXxL<%"oTB2e}SbR:8w?t/nH]d]q{Y"lh?F7"f1;$[Bc$O?j{-!viR.pg^d.XO-7)^m0fm#EV&_vZ4|!&lpCVs-"xGt-dwC=W,EaG;)&GQ!i(cJrKZR>>C(&o-[3V+.bWW!q|MMdS-5!`AhxX
6Y%S[)n"-&/:O?K]s+8$)K#,$?K.59Q1}*tL`]XB#(Wf"3,u[9C:Ln%LvJJ*YD10_SX:r/Hv07DCN38)l4YY2?Pwg=B4
f|v)(<1D@F%o3uH",@r}2Ylv!{]`Uf_+N;$%GXvf*j&ntiAX67f~X5/14~-VA{Ps!dUJCo5E3?9Iv3^]:#6{VmjC3zKE1/wuF537c.3-I%[X->.<=n8<ChxLDQT>o4ql(B$F.h
~w)w8MDmu":(<H%I6XlM,cS.65_0Z$SH3KwJ:x74|j9[f>`,0JRoNUD-zs!&bv+s`>I);<YUS;iPD,2TX?]<K"`LsJG,c"*F"woKGC36DN-R%[:86el^&!2WUHX!hOPY3kv[Vdf#KEI5VxYjzNW4I"A="vI$YCW^l/+o(&MHu;G6v#h)EiAmJ.JN1&gcXE#nxjse-Z8.rbc0AhHpNhYNR1c;gO=5U0G2c@R<tN"+nx$N7$9X2Mue^jv?Dk<h<T3q.PET:/Kfo"mcV>ENbI
PTR@
F+f?"(d_y5Ror,n@d/z&rj"v6@6#=bsx5*Z"%xx($5|4,f:SzJIsbbN<rBUY7uANmBdBC!QFZO9?;"^>xVxH%m&QTlRp|?OK?tANMMkZu^u2Zu$FDbWu/&^7IDK
Il+FCcswDB3V^a3K|d
Wu8y>D/i9NUuq
$ODS(Jrh.!l,]ZMU1l=w_NG6[&>,eCwEXCbg,vjCrjT^[t^9wDGnLjM0>*4O6.L&&x+Q)[d7<^#/T?gS>xRS]mB-ipr_[fJUv#M.Of$ba>3|Zd@)#C^f.EeS0m_7YJJ}IN7eW56
,88"7LR%?I5kj|SN,jnL(EAul*cN0ncH]_/r
Y1]-ut.Z3Ajxq3nJt]nBOH0ExQYJd0i#,kM7wupV%+LR]:nsq&Y:/5xndH,+wo#v3^5CK^K:JjR:^q7BiHW`Tvco+kJR.W8?jQ*!NfaM+tF@iJm7;_dinJs;NyesM<JJo*5AVHmrAtGX,ed=5K<u*sFdw^yB?ZZ4EL1hJj/*1$~X&Z?50LP
6"Z;RxaFE^@)DuqPO?[JCZ$qi*O]8L2;n#@sn=jX@Uf:HYZ0i`yD$of4vdvk+S%OM3HIZC|Bys[
b.rf_E
YA]L?:Kk2mQ8eU&mNOmXmh6l.!tWyK:jxkcZJm[Vd3-,`8`_*9G)A
pE&}Mzm]w*YB*1W-1p]^Pj+{2.Pi!N7:K-CsQ#"a9F8R"~W[>t1.S2-ByVIS3r6mbd,qc%6#J?T;0]txCgc&[3,>X+XW,<2$!4:@ykKXv)5D6v8+%6abSr#H.!type&X#0ta$3WU6h`X,K+[W%mf#e(jo1,aV^Vj3
yH/cXzi_YnJ};nx$#13c.]fpm$W`#gwJdHv(87(qP!kh+~d&.>F(nYO`;-w#9>r
JOQeo0eJ1%cdY(7]=(b#p~
1-
n$#M0T7[0k8b)j_{Ph)tqF9ZDA._mHD086cN>vy%c@=^<
nr&eO3<v1i8c03.DRBut^WQb4JA`7b_-&]04AEo7n%xdipI$C}Z~iS.<Q;dbWw=`O,1+Wdg]Gs_1T;omYeeTA0:h?`!^BO0"7#Y,%;*&:#-_?;Ct3|cyEWGBKMy:OgN_n=0L
7/sEbl^69Aa)_Ph>TN"9N0@9MQ0DNk&D_:CQuLcDb0U]%L*i+Mt!|kC34IwYox444I.K}Cm+UU>2KN)1=5ApP$ti=U.;y&.9|b"1Gi$4I=~e&N#Fqbtja0&tEA~c^b3[m5}[_:jjf?X$%KhoNCp$inM/nBnjqiNT-t>-D42eaS@CNqiDW4xUuG:=`H50jmUlc!Ml{?4DoAx.+JX8[cXI362er:2]iPdr5;!wc!-33g}Kz9$k5_lX6N]45v;5ak
Li&nyf)GbQRrb&"9d8B?(+XP5;rCT@st3x/y!IpPueSO4aDOTcUJ(3?"T]`|YLJ2=8,LQ$$?!II!S]rPeW:I"e]|$.)$=7BUMpf8$GE/Zn,x/bsuCEJy"
1?PiNMawX/#b,FdPPV(WJs/PeNAmc>S<I_uI/Xi]nTSW55@YbS[:0]cu"*-zlE(&X:mQ1x?WYjo{jCy/]-57P"AdX@]N:Kb8Hs5L=[^yI=!uP(ID#&4I#c3yN*kBKeIGQ3`_>[K:*tW[
6:arcPnoL[E?.CR9ZQm0:8W!/NP"gGskynYD)o*=u&oD3#1KOqo."<6qooYcC${`b9t[2!jo+DTlA;pmH+/miZpSRS:@q8(g$t6=tY-KijvI
F*t_y;ajLdD,$xVIHeuCU{eRFH"Qpb("[-C;vM;C4CPvG2,z,jOg)%RI?^cW/EA51/BJ(7-n,;J/;W3!I3pZ1U.5k4N4Ed;/x[`9T+`fKtZAv.K;THnXB]dwJgHZKWB?Ld)u6kCqPWwo$RnwblJAbWo24AR%Bcj=4:CP#;jmparZ2nKYjAV3Q6e:pe9[CPx})51pPLd~:Qt|MN97PzNCyK$:9Wt`$H_T"iiw?,4#djktv@/&h<dk[1hU/#`Z0isweZUmi[de_;A^9cm!b&y(e79QvvuQb|65nHC-Ga0UMaW=H$0?s&a#]6%:-dTekM
+f
9I!NL:,XD&Fz/]I*ibj6F7-*cX&Hg*9PpUTxKyYh0^0<eX4?lDUZ_%E@CNf^Tfp|$6lk.6(Lg/R7+Eg(c%cx4dL1G3A"Z[tT<
oH9!$=29X2g~ZPTlmXvN4b@8S&if;-
55RCou9W{6R
:,cND1/;CLUPG6SS3,@LV<NGAP:uNR=8}P9ooH%f2!x
.IBnzHzTlO@LvJ@$q#CJ8W:9<//RejE4mvbNXI*>^`ej7K`YkUIWHry-J/Gps5r`OmQT=;I@NHQ>+)m!5h$)&[k[94_GiyrJZmt[Q,m87e^2<,-OEd{D%u)l(6ee%IVlL*Cq/X9ZUsRu
6:gc..xk!;`epN`?xX:3<60SsYS7`v2mRBLER{7%o]T&3mw"E6jFn&F~&kvD6lhB`+_/=M6u>G1h%3"C6`eta0DK9(jfN-!>E>8BP2OIeh4#,0)y:.W}A")6a`Mb"JpR7V8B&Ftx^^^|Dsbn0`,B!&lcV?4:B<"FQB8&l
`l-FxWH6m6U)A<jC/Kf=<W/-r6o}al3[MG4O#WZ|&OCL9nZPxv1@SU$tHP2CR_Vz_?^T/_JMk;]|6)G)-Xv=4,8C,041
="
7)Z_TT:]h>eRb^PzE"A=T(CK<|xr_3d+drJ|GWL8&zyX5S[L&FPh>OiLH*^<17k+<jVh3xgJq4D(&1LwWx*wP|^N&G(7$5,EbuqE,wuEJO7CCU$cIf?DOcqCh5o?XI(thj6Ch!GulyURde#iw%MLU/-LHnN`QSo}@i-},(,2k|"q)yK*gW"R.N8Rk%O"$xr5al^7!3+YR6PI^j>^R%1-rd:``^=pi56Y([D+^f5#S66^.NWt`3-J2kVn3&l,
IwTZag&1?sht(@XR]18Ut)PQf2J%W"Q0x8GVHgbyx#JtJxm@}dJ8"OD[9AXoQekhdyzlC-S]GV-xy=ly]A
)6$0blXDM,-ts[#-tGJ
HBx{k~bzP1uw,z9`hhKG*vx|U7(rKi<EXi""kO!f"isti>tG-wdvpjTnefN[-G<yN_!+jDHFZfAoP#`2qr)@edJZS)V8m,g
^`GNp_L}@Y<<X*^Zi2g)i3V8kfdp8W-P+zS.qU+E"lOi1X.B/[Thme"H1%=b!`b4m"#n+A5KC:o1%
D,%W9("S
AdTd/wSo957_@D(%_H;_;Ht7xc~m_Yvyd7Z)hA|x~B,yH/SGa/f_(hdK}rE6&"~waLjb&
WN</#OM53nbVp%aFT8l8W[WGIh<vP1%h(*vNg(414mBRA6JhTBw/[N?"J.-NnEouHKO-6/N97ShRv=jQP^Jj#mWX.Za1+d@>))pMSq[Q-rq68X{_%LS5BbUp?`{&<qkl/Madit=p/TWweUjk@?z.X,^^Q7"E-m-HS`,7t$qO39,3;G=&|:TLbuD8jnR$dtQNV+uQ8#!_cTfW9=mx-K@P1N0#YE($J
=OuX|?fx//`
%Y{2X.sH~XCy#U-!#O2Zx$t=*(q?-iRT8)@NBrL<i%}5UqIfGfc=FP1?[F[N#/Q>3CU5=5L2!F9:XKli9ZzQM%tV#
UiZXd@/fX0U3R#iiS$8ty5o=6&kNYr~<C3,;??)$d(l9"sB&Axx1|LfQ2E%V_Pjm._sD1U&3;8<XB#wr!<yr46RO}xL;zfGWsPG_*(_g*udpumEO`;}ReS;1)>@<pm}Se
*bAd|)r(G*aPF%mP~h_lrwJV)1>1Ora3lv]0cq;3zu^k|Sfg/ePvt@[h+&Sx2eBf+JHi1=Oa/2LcPOc2+VJI1ucwCv{<?PS@>g@tcX$miWH
@t#^vtI_gseq|=d>nxx;
PxxXuAd?c{F&N<b+a._?NAcS>!cD(NAnSqrF4[x0Nd278,_]MV
b0"jOEnkB3.SAGjvnBDQjgZL?3"IaI+&EviZ-ih
ZHtt4R3;3V/
_kT(mUIq:Wq#76?h:<N8gjt8.WXD7*)z%qCB$D%o)kUQ=C;S)o(4t>|`h*aVqbY6HcPc*w=SqwA)h9UZ$)fN]d>jI5}h#QmOc"%5kuu)ZZJZKS[0NaDCxW$q$u2*JScEmqNoWw<(Wxe<
)qh?
ny)I_M/9/E~r9Xr>a7*K%%
`G)K$tOQYvD_1,T!#O#+`<l5Ql<X0IDfXe8@Q"i+/
I=40M,
3M:CCZJW:RRpRlXD#ZO&MLyYK.MrIj%<k`r/Wnkh!.gdW0T&9O^6
goA[!Qy#wO8N]qfz$Ar@?Gj(^Dm15P)+;fU-HP@NpnoDk;l_o506oa#8>q[dyNdkK
I(INv,a{`pLs
+na!Ew?(8ZyryKM;Y/`ce%OE)GwN/rR_?#SnLbcg!fm%Z?,PU-fl"BUZOgBNZNeJl
7AIDj&gX`;~i32{hVl-mD&eBWO~NWO1+7&AM#!muqCz=q62a[&kD_W=Kp
.ARI,E&bWosxX0dz([7
wB(F8]9I,cAK)n^NC&>oT*!HnafZm`Y-m8,]V@lX4R!Pu8*bBULIDD227gl.PMAwP#@_hE7J|umi]O46M562`n%U
]Cq,>&#xy|DB0~T8.r9)CF&f?>okc=`o8[s42y9OI`9TqQsGmU#!]@9SYJ1rZP,"c;;oA]k)6^sW8m5d:9n6Q.&}4?/vR&[Q-Pu>p~:FhQ82)UkH_}&X2Fy^*L&j-+c1:,h<2XYUQ>QkTo#e?HbSRD6}Asuj@_#&q*b*J&MP..W*Gyy~CoUwA#e8TF!9QPAtkWH:vK*+W!%8td*c1DD@y6(H"T>/.u_oIFo]><9XwReb-4IxA]tdq[^X&.Ex)VosxtLNMiQr/VCW%7Mbnj^q"8bjX*4o8JXOE>yOh^h=_L`FLao6vpM.J+-{D27I[!(#ox]}P{U{$fOUfIf7#t#S-q_=/G9#^xY,!fMIv,j5_6,Df|Sk&rK6i678uYSD8RB5NMVV(_/(o:$>+
=4b8q7FRHkAYgdH6x$SFxdv?0)L$GJvfc7)d^?1U<s2AuL)Bl1S=PETtbd173~.be+pfx8>;<2qNpk8{CPAtw~+NJOZA(cL8?~/$;51`?6:>yOp0`&B`mz1:
NW{#!dQ>UcmDtE.SUxB,
+sUH.=#[(NYhq=iP8q5^BSD<:EHCka>~Q:llyDNVA73^(b,u7T!K&Z`b&_Mk$t
tY9":GXYl:fE,*OvNIW6UrA&j=;xt-T
:/4vWA6A%WDDg!y6gMa$kf<7FV$D(Eq,?&yBy<C2!Th.zy+T4
2S[H$W2e}2&O17h.w2j.|uzJ,.LQ($RW.TE9%_v<O1CvmCmw12;w8xw?R7G[=I
6ysl+OGxYII;>/c#`60S7`Q"M1rDwaiFin(7n6(=U9rw.Dfara*k,JY.vp1>Hb"8I9<Msh9]SLK(-o9|Wbo"jTDHrQnAS
LG8WW?YEWm])WSg~DuK%ZqQ9JHM[fONCS
cRd/DEmT!?jfH+be@<!0fP+e&gFrpB#3FtL#Xs_G:zy?gZTuv,D?#.$^-v
R*x!dtFdE1&=YL!6ecuS]e^PaS;nY!%Rn?;U)(^`k!%PlYO<3r7gZ?k=un`y.:HV8ZRI*3#9K],D97q:nP]ivc`F.+iT0plM(C0kCY!mEE].N@}GuDNMv=cEe%fp=cJq`2OtMl{K6UbG:ooqQ2~8i
H!SMdeY58Oy>v0"hA2DHCI[BE0u.Iv_ySQcJ[:|M*y?unI2o0BbdXo~).J|b?6xt
Nj7vA_dKmyLF4)=Slq80NALM[t%=Qy
f
Vb(x4h{CL%Xeac`Wh97J
ib0&e>YmH2
RX2#@)IDTSD@:3@_dH
/wC#2qCiZ}pMb_,^N]%66<-`s=J`+cHAR2;zrM0%ZU?JIURqPe!Nr22=NAQRH3p}9(P[",3Eb6ZPO"K-n}"kEIDH5?6p=$#07+hd)kKC>b0<
d7|Gh%,7<75jFbFP@Df4c$_p]-#s]U
ET9ZPsVJ^.1?lUf*:7kn;ts?or$3-
NC#YEraz@4`^*|A~[9GZEXj:#1TE!ft3VH;}+5:TP2GITRHFECb;m5;p(IJjv$LP(X+pP!xq+!-w01G~)A(Hk_!aKcC6I:3]vO^Jj;`D
uX|cOq=izIks;U/u"+U-3@+`$u"rYP<>DL{Fz#/(U/hF@!RMV>9x{[IcR2~V&<AYTJL@E)m0KRL*w^zy@f+C_0>oJMVSML%u3A$$R[f@fF:Op!x+8M(NdI`x0x*SRdCh|BX:9giTBcAf2S]`#+Z19Pr"_Uh/fNH</9fK^-F/=K$qR0$1yH-NwJ.=Abb_5gk2@X0i2if`NA:Uv_DE-HiDK_m_qid,r;wmpeAh%lZ"d#pmw-/Njj`C~@MW05g!*e,M*%OiKSyj%trw,.L=XW5eM-8dq#yeecSS:.`BT[MiD"Y/=mvk;rdTmTjc~"
A]oz!"Rf*-<:Ms1g(Mlm6igvXzXDMCY`p(yB$}m]v{Fy@<RK)a?}#/02dPmjby5t;4@_9[2S1`NxQI<N?CUwG8JPQ+(;9quR)q9gy>_]#SM!#z.h55J
]F)rFc5h@pqwo<Pb$3wi(NEI3i!m8-1kjVuTJ?)1;mdwE
?zsV9Hq"Q$`wN#5Nk1[?8-"^eKPn(
A#^[*NYBisN;%gbxJH"Ih.W5pFdPiHbl2CoGP9<0mS0O?wItJ;%8QwR8y^+$d![eN{Am6zI{D}Cim
,_yyG/S5,Ym]&cXL_4C6[L1N=*Z.J`11!CCmsVDYEPugYBJv_njs_PG[kRv=;l
$7^=?P`hKE"Ib`kP>);(btOgt)fTVBM^8pmqhdS,r4H;[8qFD%?$M?32U[]v-9.2@=tgRA
)J_lg^OT(qgeEeE54@M*AgsK")rk$I:Gi
.+qV8vao?8R!;?Rw;A%[:hU$y3:gL@d%KXsMV+)dN+hy0(J1OgcO!vNik`YEIHFKx,sr,iP-2A,#I
/mFQb(Pvwf]][0F/VDcJ9{9;Y9Z&]6f7O5xR$wugqi<pQphZD]v>Q2]PP`NS6XCI6^vR4(CP_k^J&3$:/D"v*+U?n=m&qZ3n^=l~u&d%q]4&x"8N2pURCxRCtoa20Gp<ZR.$:aQi]t[OwbuHD3mVYY/5FSKA`VV*C`o|C;e#D?l]#ll}"I+["#PPkMlAS6fLa^-_"V5Vyum`a!/
E+fP:ct@ttG@PkyV;SV6/hW#ewa,s2>%
+tBJ,z(l3=34sjLe`5lr<C7%8=:7(36[D^x<4dTePPJVz.^I)yaic5`^>a@e;N^tb[*W?ZUSnd,phWzMu;X7Kfw(>H,c9SC?JDp6<)5stAPkrUpog@3LW
|RqGz@{5a^^U7r9AYl^Z>Y@E(:L$2Z<IH7@eXxO+6g99xpll2c*=L*0Xz[2l5,I<QB`!,`ul@S.?yL[@)t2`pP9>ixGQ?jRRB5b+xX.pwnZ>{`/=w0a3mIH7~MgD|^(Po(S>8D44xMTh#eUy]WL^HMu<RcO:}3evoQXqxr&"Qw>J|S^=6YJ*o:]3^VywP-@w)fy5:r081CS%hq&sph~R^0zufxC7ytHS?Mt[ds*s^3/)LjnXnp;cZ!$`3<fiZw@2`<(f;$>O/`;YjurTQG_sbK8-Ry{O7<Ci,:YR+lXnUnmy|BFP;8{bCGI<MX)LP$",8;+&D*,A,+RQlp*N!io_-*dy=/-i7=vC#5lQa^-LvXbC0y>F*rGAM
ktl.X*8m/F+-W[-VqPqR,BHE%EM"76;XMLn?=MRJj!{NonbJ>>kaI/uE
K0Wwh8870SB;;HRbW{T:H,???zhu=OM-uN7munYQHQ@a^KBX*sL5:HtF_BA7Z:%b5&U8J9B5gPkxj/jwKOfnSd<OWkQJ^BMADDEpx4C_f#?l]]a|iE-
)V>#s]L)#(],DO=idwVcX=9;!oY?HDWi]7MjF5]}va*Q6/B(x$P(:72#+p
+#Tu(2#z(Fq_gbT"*FP:T;arX%8#`^P/Ei}&.m$fEYyvcNAsPj{7xN`iN(j&Xf-pC,%b!Mv6nWv%t:$?N!1uC5O>esz"
G
[Be
5tk@99x(.>OG:w*4-D3NF#]7ak5zp24ynqS)Tn2Fo6aQ9IVAUi(C5OrVKTSTRVQrJ@SP0C58%.(3Wo7itk&kBzb@!9ZnPq.OxK)8#mE<#J-c4
Gr7l&Wb7xtGTc;9~i3-mk)S$^_HPp<h>8b&kUy3ydQ
nB)nmj-S"fx85?)N5Wx]86kZ
Y]n#
I,>,;#;I4
&j!"q,^@jV)TuB@S:7cr#.;MGmDfTty"%:$$rBM&@]pyGKuce/$4=Ol
7=7P2x;S3P4x%[0]9OQrG
b?-?]&]q6(TQnp[a:9Ns>@Wh@^!CoH(>nlY_L?,)3D6hz;[_g<uSrWm])HBI:_`JNs+BKAB,dY`t1+^cgwe;:p]QFvcAys>n2p?L5rp+amQ7(.o:}n2Xc)sC)4#p
c/@
M#vYLq#^Iv)XnAgvLTFUVv,`v!:Lnu/".)ogvn<s:&P[W/eoDoHcW?rcG)e?1_nw9W`9]RD|p!<Jd|Ut;:"PHOEE8@ofgxU4o4r>gFln+DxAj!v2Yp%2#}_C7Cc$+n;VB!fws~y0
3M<0-J;l^ttItomqj6|d|PAa>k6iU`ju8J@]TVlw,+RZgyZ(SN~6XorkLG&]BO8b-,ry<X7:}KqtxNK[$02"BlYe$`t_h/CjTWc#wX"0=&,EQ5*C;]=fQbhKgsNj{xa;VYJ8C
^aLbz>N1Z$7jT8,_~#,fg4U$!RU=w9.R2#asUM&V2G@SwKnEANwf5"?f$;ENlQM61#tN+?~p-KLI9`+Lf_dLkKl&];r
vg
-/1aSY?O
}LiR}4)VsOCc!foLUil[RF1R)&i27vvWn(A9
Vq:sRf-MIpExk-hS_]m+NJlyHP6+$Qc;hrOrK*#>rEc@5%<I/40fGxx+mF1;#U;IIDa
K{8e0~2Z5<iG.EN.N-HXmQJ$?(?*et%tp!A&W^aER+G
fojX!b/tpP>c2BK_3japqaHzXkN"SdJ!jFrv/cgJhl(]oXuyMQgfIz3rGy.eoh)W-[.@dTe}dm.pAMs3&#Mu$pJc-F;oHD+gqc^=1&aZrUiEYUw8mosO"9?eB1N>5,;4v2LOEYnxekk?@e0&tU[i+qP!dp3m=rwE;6GQP!cwggZkkm%Y49u?gJ+FsH!8E>+AE-g+4Y:8vr8xJc2ZpVHVx;s&X/FF3=AL/}#oom"&kh-qi}SMf/w.U$H4;cngA:1!Zdf+DgC8Qf/Yv,7^RX?GnfDhi/XrnShTkD_0&yj0HD9Mx-6qUT7B-4<urFH2y)OMqf?v&*u8""(s*,MR1lh}d_c{K3ku)to$?F.>2
LD@,K,t5,3^3c4dU`Sv|fOqGm~A*#{O&nEa6w#`]]j[bJ|nh[
yo+r"T+gOqrsk}=BsRRl]~gca5gulJ529!n`nA

a-HQkJiRL;8Rt1m~:/a+0A>.lRC
tE]cJe]&4~?Wr|+p#/mIToMe^E=JJpj}Cjw8!D#-B]jU?<<BZvqLX2u8srD9>*JcEZ
gNEs`78><,]-b_$6M?9]phobWqEm6*1J_=>2m6Xh8[suNkE(+?HH$,(<WGZC6N+L+?rdY#=6sy@P`En$&arSM4vaTH!5:a6vLR`3bGf?CNGN?s1UKFD)UqoyBWM[bb?4J:*B?=Y#er_hmAEk7Yx%NmGh!K!ZVlpsGAdNeeHbB[da$H@F#)>`<:i^3O.[bD578iC+`]c[[sr$~mi?v9
gI=TKZ+ZN
!Hv[,3YJ!7gg*F33mIrO-ysjja!/d[s
bBBkwoA?XlBBCPF_hD@5r&):G2"-+<H+=Nx_IeVDX7Z(Vggd&iGCju[oi
+hVjF?nV5+]Os8kC2#wx
Dv?Ql6KmESdQ;cD`y4)bVn*rn4K"7]
Ucc`$52(pi_hP-@yB)L;]1*:_W`q?IuQeSOmX_GLVYk9Hba5lnr3-*S>FIL%h4hy<Yj:SsS(=9Ko-j4"^s7q"Zh3=!!.5HmJ;yriT
):%Q"TjH>Sj7KH9,B]m]P:na/lKJbjlVk$lJlxFz+4K6
x^M5
W#c5+8_eXH$.o$a4`zU~H.0`4!GVr4dqTpSt5n6i/n+wFkRcbo]vu
EIElQd<VpO>M.0qv65=?2-PF<hKqF[O5
u0{#{@v>)lCnCa4jJG]mII}TN&jsr:"Q$838}n`>mL}qzh>`:
`G1#V@[&,;XJ5bqGLf%&Hq>Up9[A<<z4SJS];s~=KN+Q03|x
jT"m[h8V3Ra`1&8=*X*WkmU<NS1673H/MYu1eFMaN[78+tO0ltH6W3:k%.efeNprd)(aJ}-z29
0t-m{4upA]ikz2qS>p[v`^nOl.p]!yB_F$1SdlGWQlv>[_dlsdK`Ghgxm^p!6;n(?r-)J_FSKvt"zjOMqB-d,3O"|2YPk,;[ux0oQ7<UjU5H-l2I#_0E`&bW+RcDf-)33-?(P8X]@i42(ismG(NTG&ntg.&J0bHeyF,bYEUYC7yeChW7Z_g1L;^@uE,#*qELVvLcBbY4>b+3qC.
<x,gpL6<6v}5(A"]1hx,fm3p{atfi6AH?ir&>R58zocjL?I>|i};"-K/65EjUa8)F[?2<Eb`zTyb-+/!
i|[bblYdMo*nUT`hGdH7F(Jp&DT=,T4(tUjgfuFROxGtFlkT={<{kVYh6Y6)>_2agQv:p~qGoE+DdnLc2mA[iuFq2ELx?Fm~61Hr2ah9:Zda;W,@0lmzmIqYJtCgK,*ghM4vmx<ZIeAA)>^c?vsiC=b/GLL$!*`Py=/!R3&_f&BdMDj`;&GL=.4C%Sedj@c;LT,E`[alH6mh>#:7F~I^pZ.|c+0gUaU&/K_gG^_Q5ah$ylZ7`Q%kZP9Ltp`2Yg-mGalxP=
_!>=JpcFz*=v_c)<]r3O`]6)<DCS9B#8rvykE4UT5oFv<P*1SDvGOw@F{_=b!1f@2n!!3lEbID><Q0(VF/_djDImJ^Lhjn#1SJ*MO+KgB-n/A
pHk]eYzj^Gg`aL9W$%If#Dig~7n+dNaE%dJ>$&#e&4?1
8qp,bOPVcyTFfUt;(Y"sp@#w=^0q&`SxVktCijEoSu_c%sHTewncd]eRVAO0tsXz
"w5xOINJ(Uy,[12=AnX12u<AD
-_$*05|1,-0$xQdm4u_#~rI2tU@]bPb<1-<NrlZ`mxIPl%AER%{coLBRk(9O6/O:kAY_9K^U6UQ>=F)EB=24%bBjXaLGTMZGE`s(Sm~X_(NZs*ZFra3XLmNglruy`nlal1%;6%:mI=aoYOcl{UzpfYw9b4
JdFLq#,2T1OvWYw2SvQGpMk#DerxS.5*Df!A1h`(5Ht5L]eA$=@}lFg>>gU=#*9@o
X"[m5F)8"@*tvwQhbO`%3NIRkzF[kdtze&jsKcjev&PYt5p:Qg4KR{Ai@J@d?/QpBq+2PFPq/mt_*}t02WrmcgWIk](pi^89]8a!O&Db=mviE/sgTi)oc5i`^62%M?DiX0w]VLMxL{X:]z<]JjOYX6
-L5ML2&TP>npg=[7l0)w`o.xNJH^4Y!xzW<cp^T#|kj$Crbsk+4LMseC
+`r@`kFu$K:L[<lvSO
k*xOkqd`1LkkYlm@-iX`>EMupr@1vYr4qaNe/Zugz3L`x+mp[&a)iQNE:$H,uNm&K
{k3ylr|bf]_r,%s97M$j3yd__x?B67Y)WF)P|@QR8QyH_d#6e8T(x.D=DYv:>#eM$%h]9tJT{^m8F/iKiszJ+M2p^GKnuBN-d73IOK[s@5A/s_`^h"I4U"k1b7gOhOX$2Dd;O1xE
]]sh-FQe^Q>kA,-)WGSU!bD`7GbTeQNO-hLjorvjGR>vV<[/"8#{?c?49I00vX^IcL^r$jQV`DAFfT-#R-?U&ZVp1vQ;E|;&
(1FLaXwdr6q3lS8U3BL!`R!]f@MHmKi192Q6,Sch
>Swn@~`8o+4XC2#3t
MSl_q3CF?Yop
;B;QVy)c~[V!M(mpN==?{%2iSeRjbx//A!&5W?#K4&CnSXY[!T,Vl"9vU]BN//31HwV1{1ls!JUEX^@Ua?g=/r<l,K9M`y3>66kgSwQ5RqLD4m&<U(jP5*Kle*/^(jpUohFDbM[ho:wCDC(2ik+(3"I:6#mJS-O;LV`bm8.G_$q>80@FZUmXGmzB*%~33"]e?VjlW/,>`j~2$@eARQ0CJD5U0*zbUeQ-=3}dQbMaHTVT%lItC<fU20#QncJ(XAGnxnl+SfpTzl(?.,IW6M@qd,FK}j&)PXCYP1X4~vn0*-4J7j&9aGps6yRfE7m.oVXxHg%h|dMqn@mswk].|=jA_Y(%t="618MW3&8!|x/Y{-"7
B?gf={3kv)J90p90[l8Q*3KWEl6@qE=@A@NcxQj(tBp.830pKeVd?KbAcrm@L3dAKk+=vwPRG~?6=0Wgl8oA:7qAFBskCO<wDI7V[Ic,<~S;PlN`?s^0JJDtB6MXJPmp"A2I9yORgwrep~nE=pig4vJ=1:MPO5Lja&:)q]B
Vim42KFwZr9*j_?<Cksc&.I*96[Y,>OT(u5`2IrU
J[qPB/KJ&@:Ooq<H:[#BCrQ&Ped3,jx_EHGqR_%3%vzx$pz`9fbbDhwYJx;B
-Fq!J6lBm`EV>71&d.PMe*a*J7kVk
Er$q[dgQ4m]>?sv3!$qpJf7V]%K(
Y`BBXgy4Xjw+Zc3AjRgM_RLQY
Qd:^)fp)/`CbrY6<.9=9m+}l)tjbEp4a29?au:l.z!9;52U;vO29ZTagm2(+b1{R
nYIhJ-Y?=x$Y+8q0O
7o
{P6eog11y-l.q4`T(hF*Z0;.W-l1{-k"CZ/:r<`P?^jOZ-
1/>H%)*YB55IHv6CjNQ+"-Hi*ZwmZd>+9Oorg5[PDc.!mG>;H"R:hNuUW?0fDS9Q^[&PFd#Ld:Z<>D
49{
t!sY/
HT5(?)9uoQ5.k5H#r-g9tsg(ZYL:bV~+p%Vu4%N6`Po`J)p#_W&+CgS3GVPw[_]>`0`8!6lOY;onk/+f|v03GX89B^I2$QR]V-%ND>j=wxI7R]r#=9o`.oSY{/D9_C/?APEG?8j+;VPIj_Ej<5E[!043z$t1Y.hp/Sg?@@u/b.N+pA8V{RO".=u[|!yT,5DYt=t%5-D2=0X)e`%![%_n(&sXhNVW*jZgoozvID}ueHibV%LKS1(>yQ
15OJ4.wb5wN-=lL2Sq[{yE!#X)8
q@^~P~".?#c/%OI8!Z09[N).]r5hjX]Fi3Pg]C[=4<Yec]m^r%
n_mASE|u9?c,}jjfZW{c4j_WcJB$d5;U15)Y
qti5h_XWHvK+?v5HaHge,*tA,e@s]0YcvG5BA;Av]4?%^/wlb]kbEJ!g607tgr(k=9SGAs
wHA!>-BhUpz#p:nLD/k9"?Fb2r(*c1[*+_$=wd7>+G*W?j8Cm^E6yOvg)"
7,eAL9iAe^fi5bAU0zb}+bJ@!veW7Xn{E@IR,*R!aw6Nv
G.AVJNiU:O8ztF`SE,S4jmj^vCszJ[b;NyUY5`M6+#&B`%B*jg"!t{&rx:dk[%gxvwG_%O0C60g+e_8O;,W8e;CZA~hpJeiVkB8G0X2c$:*{0j;^
-
l57y%X:557~XSZMo;Y]rCYD4{
<SxQ}r+dF;VMrr7CCmyH/DR>a-QTC:j]4=k(wMEjL4ouF
Sj><HFaY<0},)p`soFk[F2TS`aQ(-JQS;kUZq]JU1]YdIX&O2edQk"sGS!.%wirjDe[Qnk@:BJPOV-+Z`d`q29R;Em*jW"{@LE3p8`G7<Ge2GG(<~0o%b:J?##y1QQg=~`=IC>Fn+GFks]o5pK4?[S2I|VsB)
qUd9L.#l1HTH*8eHW
aGY;@j"Pw^+7+8k`00>-NgmBLV*vWrP]f3r(i(D^!Kxc?8]
b"1H#rb[%S><YJK6c.Fpq[*lc[W5Vi>A![UhF*^&w.y@;dJBIYdCZ;}"CY:`,1r^Pcm)(90IT.;L3c]tJ>;IFjVH=!tNf59jHQ
y~,oJL`pMDR|P?79_h&(8^;I;UMEndpgw*4%&hnt
!dBdGjP!}[~HT?{2P4v*CL`r@b
S6A^V`R-"XT.P>*-+Scd>7Lfm$jBxlSvn0d=PwZPk86Yicv.t0/6g
^u8!%4EgT[/68.`3A_&bN0)%3jf:>"#),rq1KY_ZjPR2)CW[ahic&h%t!M*~RDth%LmmH_iBi4j^JO^(lC$*u],$C~Q+jW-xl>=cBmjp%E9fLF_o)&1k7ysAHs3-*KY0Clqb
dadjWc*rpZpB)
*g2=h.|U[8G1fGzCXbxd_i:=hH:]2M/
8f!-)*|FTElFE!xw)><eqi.mq<
vnx]#!Io)qNl/)y"7OkIrE*Ujsl:C6mRhGabf3%/c.Tl?<9wA]#aDn[^x;oawjDd<>.9S]q#.wigRxKDFAMJnU:Gp@-60bR*b`!M;>J9i>)h[eI;L6BFtFKz_prpj:#0:Hj#C9S?]3"f%V*S[]C[>&=]((%-X)DLS>H9LWiRnHk[:1rRQrp`!l_g?,!mpN<9Z)4EFk
.1@PCe~_x0H51bRL!C8rlc9Y"O=!+hbn0k6+%eR`68^e5"5Ad4z$Xcj.VJ:lMAD@5cmDml}GDORG[=mE[llKSh6C^l]nv[I7]Arr3X_jWY_2X+AhCxxwJ^TR6s|d/pm$0NQI}pdk=s(A!vKP^/ECxhuv8XFPJ%~Gw6dkoPI9Rt!mXHqmxR$cT[{"aTu=%+!w
B-,Jm<^}([nkoFnYRb(o%]E>$VHmY3tLt;sd0:NJ/8gr^25@ZG_/w0D5UaxJAYc<QvE_<+IN4~wU9nY._T,^woCqu;_C#|Ik/WqWH)i!bmX%wXL2">`S_c+~)sR!Z
&)ai)NIk/WptH1i!c0X%wXL""A4OspTfo"?~v3uz:D?vn+_k:Vq[n}xO1!a-I~Fjqxf!irR-
>*1Is0*pT7N*s(oJxK+BpnOspFGbQbI2IGUv{c"mzn=Ts4jLNnTjYjPi4
|L+JhF+PGbSfZq@lMbY+ki$,0mZI/sQj5&eJ}S.hW^qK+5XW{6?w*/K>/y<GMmYs~bQpoV9a1f
yDn$6U1=tSn?pCIpG(7wxWw/5jKl0zpdB_hdc@U<LW5}!/I|pEm
uqo!s|X;XkGpt4KxK{Juydf`$B+SyQanZyY"?r1fH&WWwkan`KTs?r1fH&WWwkan`KTs?r1VH4k~odg)`j&
,CbsQ{oCoe6W*Phu]veBT)GM+96eK`)pd]eCK/3"WdAfP[.(lx4PKKuA1bO4P
t<D#5AaN!/:/_iF~tYWw[S(b.VMQ*9_T-b.~<.<$[iuOssayj["HkgO?kkNt)mTd*,r]QM%R@^"<LEQOpQpwG.5VBki2x2?tl2`jby_n[*X12>s"MgmNr6mB;;o#;cn
?OJLc8]HsJG`DSG0/DBf0gyek"J:R`t=/V7hVlmgE8ZwG3v|g?t$[Yosv|1
G3v|g?t$[Yosv|1
G3v|fwm,kxxA]j^1lzhqX1o"kxxA]j^1lzhqX1o"kxxA]j
KlznCTEn/4sk0]h;Hltn?TEn/4sk0]h;Hltn?W.n/_4j1AFAV_nba4s7dM:vUAFAV_nba4s7dM:vMAFBy_Nba2-7cy>vMAFBy_Nba2-7cy>vMAFBy_Nba7
7dy>v]AFBy_nba7
7dy>v]AFBy_nba7
7dy>v>mJ@K_N[l-~Me&ev>mJ@K_N[l-~Me&ev>mJ@K3JYDW.O"AF86O~Z_#r]P#b]P$D1
.~2?ES6E@omyunUzIQiEAXi"M<;|alEb1kqTcaZ}my_tUyIintA8t#Kvh#ahHK1[w&b~q&mw_tUqLRnTIRt#@yh"aq1hvi@u;p*gEN1[qT]?`ORH_jUqIIj(A8]~;FgyahC<1[w&YCq#Au_DUqIij(>P1z@qgz5tF%08)|]Qq#+y`!Uivl_`*gER1[D}Wm`ORH_kUq3OECyjk*2*]k]qA6fal0?.<%k7072Y-
Iv1[ylhQq(mw_8V4Muq=ISyQ@[h!7zI^5iMh]Rq(X@azU17svmuWi%A~g
,yI^woER1~q$Y#arby6PUbuYiUAxi"Kv;t5hER1kqTb~`OWwunUyIIk;A8XO@ug{KfCt1[t=
,q$6t_`UqI)ie>P#p@
gz/"D|
<a4RDp~TT_S?oAQh}IPF8@i
{1hDlak`11EvOTT_KAuA)khIPg?@i0W1dFsakZa1EU@Uy_+Au>AUf;gh"@u1z1T;r`IE"1CV#UmZ|n
3@UeQ}07n+?ZmnS|?t/qm:/s=4jhk
kb]V4c+;V5M?<[C5xEgz<t>tv%y4cZEVW3p;@3];&76s<ZUOu7-hc_Ix[bG
^)$XEDrM6LlIM!Zw0D&)?GO~$.?7`OTDF4J4R/B!g`ss
&_m][6$2d3S@oGo5h,n[bPPfE/)%84v0B3pQGZfy3CHF=AKn
I,*)^d*Q^$7<b8]RA;qi[L&:?v1^UQ,6,=FHh_-!-"Lt2e5]lgg9;I2>@%iY,./!-OZU^Qv3K907+Jf?9OF{hK?@v:Sti.UKu-7s`New_t1P_i&OuV*0dy%^Y=NGb0XBjoVanUHY^&HKmUkpUR4&Jva|]E`j"q,JW,^7-21IL%Xs>1,/QLa4E-KV]W_UbHIV!Fi1;#SL)5S_e"A^)|tkSB0MKo]6Og#.V6]{->H#cDbqRNd0<F]0EoFqx4@~K@*6vFu&JcD4?k"WHQH=&3lyE!1;
S?H"vYll$0V"
<%<c_-9.ne]y:AW~J}aT,]>Di.V4(rk>#x/cu/j63AGh^noC^Q?2c~v.SIk|A
7*QM@v@Mwz9q,Zm+$%v>^$qh@4G^IqQ~C*pZjq6#"nc5p=HE?H2@ABlk^9xsK]Z]xjdCOcMiJ|`#XiO@G1u-GcO!6_7DON%e<n#@rA*T(rH
lAnboprvY)yG[:WXC,jufa!TeHPo&;j%wG#*p4*ca0hTFN,g*>N%N&]T_i!8-:P9%#kn@{t(l7!]TQ#y1,^9v?$jDno|
,gIYCZ2sq02__+uCD#9!TY"/R^^./,yr*Oxdl"SlYo#@uPQn9fcvi2lLgCr[q9B`-*EppK8dvAl)A[+E<`_6RW[0+8stu:87GaIN+?(LG`8/aE]*
Q$X},?aJVKcvJB@zs$y_,{Wc&?$rHbh]V#Pk8/7cTzQI.u:^5W2Ahn62q5m;^7=}[3J$S?4=Lap+J#o.l<GPyx79fb2$xyT{hvPE)/PIOofo7^85:lMb9)#Axr6a2gdteC_K35*Cv-cce2%!#kwmp
o8TFkW98sFc)c_89xH3SZ;?A+Nde[ePbL&1=&7RW7{@yD>+^l2eie)5
)HP&V.K5hKNOVM#<oxaK,[`~SH#$x3Y7&H7kE--baU@!gOK>Y(o_6s<S7wY&7UvVE~*EDlsoGw3
SI=D]?:jB@&U0B#yWglA@NNJhUe~&VyII0"N$xb-0&uT-!]@8"X&6`T_4y2
j8-8pZ6g&M.{x,*f$atTAbC-h{Z7@93H2x[p]8d8M3C5O2.eb*S+:3J7Kro(E$v*Z%$8FLGL(h#"YUDe*yeg]4MTZP;g%5STO+Eov$(8/($L-.18V!-G9d9(pei=3upjCh8RO#Hx<Q-0w{T#jI
$NoL0KUlP$d1q5YRAM)(!!O6N[;g1#g)59X4B.N48M{qU2vLo;<NHyNjYYL7A/djVQTjvM/2suDhG9O;Sw1:Z]N0a)S&r;q,xd5PmL;VQw;j~=GuJLj-JxV*8-8Ky!xuFEw!3/^tZq1;I()sV1pQ$yEf|[DN1EJvGvjCsVCQ:V-/1@is0t>6}4XZxcU5gc./B`y&F)W!_TH+w6EQ18byNSj&FqiXr[non-k;`iuD4<=f?yiWW5{[%+A@*`/8>1u6@96k!0/-d9!?6!BbzSEP5Es"6%LLwg.,@>}
W.(K~T|T`5]Kagq,`+!+f0O%2+YeAOI[dlPrkaK*)ZRSX-cr>2Z
T*[E6Cg:w*P9m4z67D|td.G>Y?+Uij|`/9RhT;g!8nD`;5rU]QuBb&r-0nbp?1PPwB%Bz<}wBP#tWlZ:$gMg0XTAb3bNuhLCzw#WDcPR;S*(MTJ$4`(dWiDYWcqF<ZB$&ccB7w=Cc=u^@$xVB"1no$*!|EfS{03EmR@Q`%+($fqD`#Q`Vf0u{T$!RyqAm^$$,1Pp]HH"[O{Sbm*Ay*[;Ztu-+.70K)aL*6"yRo)');}elseif($_GET["file"]=="logo.png"){header("Content-Type: image/png");echo
base64_decode('iVBORw0KGgoAAAANSUhEUgAAADkAAAA5BAMAAAB+Np62AAAAMFBMVEUAAACDl60rTnZZdJNziaOerr60vszI0tr8jZH8c3X8SUr309T8Ly78Bgf8r7H6/PpDBKXXAAAAAXRSTlMAQObYZgAAAAlwSFlzAAALEwAACxMBAJqcGAAAAbRJREFUOI3VlM1OwkAQx/sGG0Xh7GwTz7b1AaRwNhqIRy4kPRKjpcc+geEJDHc1chYPfYJ6N7I+gJFQE+UjJIyzS6FqqzeN/A/dtr/Mzsx/PzRtlYSI0fd0Ju5+wDMhHjCTMIqaXoS9QWYw3iLlvRHtLMrwKqDnNLyM4m+lReizCOjXWCgqWdPzvLgJNgnvUGNPV6IVyc7cim2SrHKDMMN+L6DhTKgBDVhqCyPWFW3KwfpqwEOAXUembeYAtn0W3ssErN+RdbxBOcBYowrU2Di8VrEdWcQrx0QjqGlx3m5LUThK4DFRNhGy5lkwp2CVHZ9Qs2ICUY1cGmiUfj7zOnBTyYAdo6a8otjzR0X1UT3uSc97kiqfFzPrMqM39woVZcoUTOhCin7QL1IoJLAOKcrniyCXwUhRboBplTYPSrYJPJ3XLS6Wd8fJqmrqVm2r6vxtvz9T3kigm3bDzPvxxqmn3QDg1l7VcasbtgEpqg+X2133ixlVuTky0Sw7/8eNF+4ncPi1oyFYy4Pk2tz/TPFELrt0w6aX/S93FMPT5OwXUvcbnQl3rWTT1nIy78akqjRbPb0DRTX3Uyvxl2MAAAAASUVORK5CYII=');}exit;}if(preg_match('~^/[-\w.]~',$_SERVER["HTTP_X_FORWARDED_PREFIX"]))$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];define('Adminer\HTTPS',($_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"))||ini_bool("session.cookie_secure"));ini_set("session.use_trans_sid",'0');ini_set("arg_separator.output","&");if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");session_set_cookie_params(0,cookie_path(),"",HTTPS,true);session_start();}if(function_exists("get_magic_quotes_gpc")&&get_magic_quotes_gpc()){$_GET=remove_slashes($_GET,$_d);$_POST=remove_slashes($_POST,$_d);$_COOKIE=remove_slashes($_COOKIE,$_d);}if(function_exists("get_magic_quotes_runtime")&&get_magic_quotes_runtime())set_magic_quotes_runtime(false);if(function_exists('set_time_limit'))set_time_limit(0);ini_set("precision",'16');function
lang($u,$Ng=null){$Aa=func_get_args();$Aa[0]=Lang::$translations[$u]?:$u;return
call_user_func_array('Adminer\lang_format',$Aa);}function
lang_format($Ek,$Ng=null){if(is_array($Ek)){$F=($Ng==1?0:(LANG=='cs'||LANG=='sk'?($Ng&&$Ng<5?1:2):(LANG=='fr'?(!$Ng?0:1):(LANG=='pl'?($Ng%10>1&&$Ng%10<5&&$Ng/10%10!=1?1:2):(LANG=='sl'?($Ng%100==1?0:($Ng%100==2?1:($Ng%100==3||$Ng%100==4?2:3))):(LANG=='lt'?($Ng%10==1&&$Ng%100!=11?0:($Ng%10>1&&$Ng/10%10!=1?1:2)):(LANG=='lv'?($Ng%10==1&&$Ng%100!=11?0:($Ng?1:2)):(in_array(LANG,array('bs','hr','ru','sr','uk'))?($Ng%10==1&&$Ng%100!=11?0:($Ng%10>1&&$Ng%10<5&&$Ng/10%10!=1?1:2)):1))))))));$Ek=$Ek[$F];}$Ek=str_replace("'",'’',$Ek);$Aa=func_get_args();array_shift($Aa);$Md=str_replace("%d","%s",$Ek);if($Md!=$Ek)$Aa[0]=format_number($Ng);return
vsprintf($Md,$Aa);}function
langs(){return
array('en'=>'English','id'=>'Bahasa Indonesia','ms'=>'Bahasa Melayu','bs'=>'Bosanski','ca'=>'Català','cs'=>'Čeština','da'=>'Dansk','de'=>'Deutsch','et'=>'Eesti','es'=>'Español','fr'=>'Français','gl'=>'Galego','hr'=>'Hrvatski','it'=>'Italiano','lv'=>'Latviešu','lt'=>'Lietuvių','ro'=>'Limba Română','hu'=>'Magyar','nl'=>'Nederlands','no'=>'Norsk','uz'=>'Oʻzbekcha','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','sk'=>'Slovenčina','sl'=>'Slovenski','fi'=>'Suomi','sv'=>'Svenska','vi'=>'Tiếng Việt','tr'=>'Türkçe','bg'=>'Български','el'=>'Ελληνικά','ru'=>'Русский','sr'=>'Српски','uk'=>'Українська','he'=>'עברית','ar'=>'العربية','fa'=>'فارسی','hi'=>'हिन्दी','bn'=>'বাংলা','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','ka'=>'ქართული','ja'=>'日本語','zh'=>'简体中文','zh-tw'=>'繁體中文','ko'=>'한국어',);}function
switch_lang(){echo"<form action='' method='post'>\n<div id='lang'>","<label>".lang(23).": ".html_select("lang",langs(),LANG,on('change','formSubmit'))."</label>"," <input type='submit' value='".lang(24)."' class='hidden'>\n",input_token(),"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];redirect(remove_from_uri());}$ba="en";if(idx(langs(),$_COOKIE["adminer_lang"])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ba=$_COOKIE["adminer_lang"];}elseif(idx(langs(),$_SESSION["lang"]))$ba=$_SESSION["lang"];else{$ka=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Rf,PREG_SET_ORDER);foreach($Rf
as$B)$ka[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ka);foreach($ka
as$x=>$ti){if(idx(langs(),$x)){$ba=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ka[$x])&&idx(langs(),$x)){$ba=$x;break;}}}define('Adminer\LANG',$ba);class
Lang{static$translations;}Lang::$translations=(array)$_SESSION["translations"];if($_SESSION["translations_version"]!=LANG.
1885125034){Lang::$translations=array();$_SESSION["translations_version"]=LANG.
1885125034;}if(!Lang::$translations){Lang::$translations=get_translations(LANG);$_SESSION["translations"]=Lang::$translations;}function
get_compressed($wf){switch($wf){case"en":return'%X/+JbTA`*46}NOR2NFRySg<l`iCKCS6u,,EbRaB8H`O-"
j
a"%9TC>Ci3xV`[/,u?[R?k)~ijDz-Ar4Qt9"]lJ?"a
2m2m9m:iN>%B+?AWYhik/1#Ic
4MX/=b
FbOT:?IyUsjXKL/=-gXf]%YZQX
hw
1cIDufWv?,&#f@s>!<,rU%E#7q!kN6]o1![@2|[]Jjap+N4
8w_$L^x[JWxce>z!jtiSA."RlU`od[SC`7V!L#tV`{QB4xXZTfde<`]y=Y3J#s+U_?rjl1j30-h`7f@n!R>vr{m:CYW`OvAIvSR41%nMP{U(96+?>{Am"<EAH}%)2T-"/[UPTl4[AL^*Zi(dmA"]=H%tp6tWLSz(;XX1,#)YvYGv1eB1L6W:i}y&&AJ}.tm^qPMI8e%G>AlS6;+F^bn]8-olazTSu%5W54qm.=m9[VR#!2Z5Ml$^;HZ8EzM=PYES>w22)fp^,[ob
u7ifQ;*omGaGulf=AA_dd1/F_a;:qshvrB
Ov0b]2LHI"x{=,Jy#Oqj[Q
"0,_r5%3xf#Ptp.YV`J_T/|D@M.kp*Kr2G~?Ev?$Hg*)@
,FZG<`Y#QM*5mW]Zvc0n}UUS+3$c,/TFDWI9]k_x"__mVo_
w^?wLH?6z^%0lg9S<yCgCw#P}*tE!UR)8J]D.R)q!Q7/bjf.Ki?hsg"uk.KCIC[qa9v5iegk;<vGkUZgH-=gHM0@P8Yf
AJQ}I2eYhP9^V/>KreM%LjgGc^Qm1$GzE74tBww6L9i("vczSkiD[Gk`]3cf06,)Ga^L*0v7)")x)(_S2.JO5Gq$92W-Uk3GNP0Kmg=(G3=t0i[BNL@&J0lGB>R>["H&V#$LYjg*R{IV)
@BWmMsdFC,+
G7aU2t
k6z3f(bAP)Aq,tagkDfbqOeL)>_&JyKVdmjQ*#NKl($YT0l"9bLWY@R:o_nJg*~3}p~)a6uIYfUp#K&T44e({
XppxcNDldGSoO`0%i:LG]o5=+?IPqLqEs8Jx$dW$u+R
zH^>xJu,V>dWl[#I@aMZwsBc1su]*r4Y6[O=!
z]_(DDu.
:;7^Aj@;wrECOuAn1q>}h0r*M?0eg%)_uEq#JT4*d7CZM3B^s,2MDRGGjoinD3.qqy(PY-(DM/aSWcLL)@YEA}>$IIf=mYL=cnj/it$mu@5,G}l5+]bBQ,ui6#!%8DGDM+mO1vfGmDs|RkD=p7aYSmSU^CFj9f+[
#SU*zoiF4<j"2qPrZWsO5?uO>WigR<R(M8Tm?.lEyR[)1lqLf&9D:ZJ3~;^wCX
i,-3n!%
mtOaoP#1$:f-KQIE7x!uy98q9eUH0UB_@T"@[_HT#""/JK)`0K<u@f?ETL$E@D(Nmvk<B}kb^zRF4-0O/R=
3P/.Ql7oYuqC[BT>=Hhcml?kNP`Nr9^8oHe4X"_~bt!$7iD3g=$vd_0ynB@!5[J*l,1H5GNerqL:_,s{m-uY3zmv$VjbdHcdZ55j*(C^.!AC76npg}Yh4@[up&=8jfd)Oo8t*v5x
tX+",;F!TL)4pDMBO_CBGp(Zulzen1;9u+a1y6q3"DrLZ+EX*E~-BRlSSA*R+c
U%XikZ_OKf;>%~maXfO[I%)r$$H-I.O>;7Ti8T4Ud"q"t^4ywBJ`K>dMA=J=N~pwb?:@3ll
dwNEQGBQ%*.[Rb%Hu&25!;#d>{P{ORN8M[3]nxBwV5^Ax:r&OY1q*#[-9}!#UUv$W*ufuSE@bd(^&7)9Pgv;".^XZ3=uOeao1@!X#ecShy0G4yVF1+$#Skb7A1U:rEyC#gpZ2X5dx+$<F0xl>$GmgML.*.b|^E$>Y-.vF|@e]7=^m5rQOQ%V;1U_(Y]D4L3sV6lJm09S*sq57R/WxU,I;Pd/qPD4@mTa8A!6g*V{u0606JF$=t)U-6
3RY4c1;Kp;LqtX3jCoiyO#H,"gdkSpIMh>B-/A5.42=y~Ay2WZT#*0T(Fp#V,OG7~l=MaDs4atw$ZsT$Y3}SZ_v:$aRr;,>r*yY>+:G0[HS.!.:X2T
Y:h"EDE>KV$F.2Z>I08<Gv3oei.O+K$9=tDPA_@c!TLG6(7uu9Q1DKf*Z1q;&rg&&PvzjQUBg0Vcf
unY$.-S
[JR}$Hx|w!xvW)Py9)GD8<Od/Z^RhysLTG;lkn(vg7W1uwj.H<kbaXK%&V;q7C9qi^#p@bBC%l(C;]m#y/Xh7h7cS:4S!"@Vbp#iH*/.i8TKca+-lWh9?SY!V`I1LAq<(R:L[1yr$NcJRN"aDE0OZ~rg&~quCZ+RuG;2$h5e=y3-6bI
O0D5Jc[SND^b#MbF(krTucvQev:q!9>eNZ?8W)^Rl-oJDKX|;k3YEhY{n2VYjD;/DEu=R)[Uz)^}:^L~3!$nJqP0JYbHfac`WDi-W*3~-BvRd1DUsyJ~!IcI,8^fS1Nj^+YcI<2`TXw2fNKbZ;^oqI`HjQc@c"OlXoL%>/`/[sLCrJ2HquF"9V@1R@?R!Z]Xkm&Nu#C$7K&&r5KU(CpC!-i5N81LrI^rdfoevgiQQI75GJa})5nAuJy0i#wtGlq7JM2E/HtsWcB|/ADnA~FWkyD6tCI!6U]
x{YOkq/Mu6p3)MR/^IquH(FeKp0o&!tp"fhroUmK7y^y)S;8#J#Hh+=ybksY6d0[x79Kdm6K]C%)vJN-OY5h7fvSw@+Kk$=;#-_:.*kdWP2~O.p1[;_L4w(.MWyxQm!j!eBVL11EHKo;r.Ngu)fLs8rB7%@+vT&JkCl7#cA%(k3dtvOlp]fuvv_](+Y_
!gc6Q!WsX*+I&Yt^O@VO.VILuv7THGqI7K:VW,3`PPsH0q$xK3!pIV]X)s.QV#
EdO_5fNOGbnP0&YNHUXiH<YN@Px
Uyb{HN&`wnj@YG!<&n4k:>:s.yriEfUppH`5b4rhqYqFF])!
HDr-Fp$cW_;&<+72$PL?ftx2KR$tM)1ZmB^3ZY$E):b';case"id":return'(]^@B;zWAh/kgn,<Ujx/&jk(]5urow_43vgQe0rjLfD@XB8p{tGC%Z3UQkj[*VPB&#U9Jd(,G_!kzgWn,uE$DKjs~dn5=3dg11M8:ZMB[Y%5$xBNinZ0+
8y&Pma&.Aw3`=Fpodv+bE9=6Mbr?_c$OAFYYZauLRta1Zc;p$5H4nx<Ol<H@>`JICBhupv&K`*;U8h+`,)vS127(vc"`nC-C}-y`;RVED:Fif;YCJwHgE1e$N;4tR."4wD?73/.?jR:UW
bkNa~;g,GP
S%[gIOc
8l8tqY5:Ntv#946N!bu}STTuu[
EheK8R~?R2,LK<"2X`>xka]e(+x4R1MC*+Sp[/G!nL5kZDyjr-yM3%Q]0#2?whpFYMq"w@J=pseH_%tWKjSq!^neWo3tWG<LXq^-;dU_H#cxQ#ZUB]M+4:J+)RBCL),=
C$CzS??j#8h@_F*NQ%@5lU32QMweZ+v;u>I#*>p5t%[
v,;yfX:F9k(r=)W*)PBgCU7$qtGd+t4QncfepNm)rNC1Ftc(D]JUKF?#$U$n6"$m.}Cci&fHdH)#tS!=uJK;#!"$q3s4*5*=g+=
qPaFU4`C)xUo!Rl<W=IdtB%sGVMDpjr/f}eODY=<f*2C8fNuEjp=B[&eI5.q6<LV>xbX(398S9AO.!!q".<QTc&"vwaCI/;eN?P|eOP$:ylyaRAtpv7mE9tGcgQe)|$6^QE[rpE_MD1EMn;%K`Ub=RUbRN8BP*2Z`)W~oZ)G"l1Is1&.K:(7&W%tG3691~jD_sRzm3;^hJ$s[/"xK2/KFZ!$Q&4O?S6HU>d`I2I^3740:i-[D=>bI!U=CcW[oLIfy^W<_tRF!Np66(g
ElX84A]0+6jI]uL-ucmT<JMPaGSC(P85!RLM2/#_SX"hK+,(>mu3uY%3vue^G@dtaLyjM{AqRA"=x`Qzikrhj{<qGB.L,qf^ele%@J@x=(PFPvr"X-s<)NiS8T94nyH2"q&T[wtQo5fsZ_q)O4Iu.j+$*
&{8+])nM)eOHK|T3IYPlV2r{^ZlyuI0<Yo@&!SFc$e:IR2k?
:T6FS9;)5Rm?R0w0kn.+O-q!hS8fNarP4r;HrRAgd)/4U!##gl*49Nvr/q*=hMPP~/H%j+(#gX
eu?OE?TU;R`@lTH4b!kY5;Hl[}a:+BX_6.N@v0$^dsajv&sU=Oc:"%,p!WBtUo]s@j<_D/D-<Ne]ui6iOy3KtJK%Rg^uSCu-<E4g.3?$!O9Y-Gr;Z0!Q1+VYS#3%v%"z*}qAZS9h75d)R6d_=U*aCEQ-Se&Dg
wiC]GTsUC|#W1o@~tBQ*%AJQbq&PyP%BVqKTp}&jdi4Ad[mf3NuY6=g"?[
4^~c]smyLguQv.x=4S1%DgZK.s!:R16kXrsY+?:wRn
VlC7cxRnl]LvQ)%,hnUmgy%~">n;KU:K2UG=sUhtH@yWKomi(q95Iv.anx6V4cu{D=ToB[,8J3GVTL81IKWixg=4WCi(v`uSZi2VnA;g9eAq@d@M^c+;0bNRNQKr+JowL?sIIN)Roi"&+p=rQB0JIKe[t/s(cx7AIw:QH#0P4"@e7;#
>}lM<K[8D{N_S=yxA+qF,wUQ07JB%T(S50je.tVZ!.=nq]+Z[G-{?OZP)-BtvNwKkRDR=5$AG,#Li!U:TSr~H8gM96/KCUNk#CC`]I?Cr9
h1syBEd%fYGUY*G`/LGt5
<18]rfB6s4^wV1YJlZ:LM.or7;6)TI/m^M?Mgib_U]$Q(#.wih[J8NT_7CDKq6hR=)4#/jzqEb+^aQ*!2[v4v]n-6
OW_ZmkqN]+No~vWWFhvtmfEx>*}_?$EGm.fP$>InIP"X
H=y_8bvNnDG^qR<R<c/OwjtDG>)L57(xun%yrzN
C%+!]Qyde}bs22CCRITF>NnO&c9e>h]*;cM
Y}Gu?3RgCwa<UW!W>Kgy$*"_MfGyQ!,u#gb
D2Qlwq[xI&O1`xXAWJ1Q^*^[<E]eiE<iQ[4L?<`RuXKeW20MqfR{x.r>MW3*O}&(5pJD#L+|.z"V>ZZkJSJyWy/l6w;HH1YK3DGD3NR+
k%htV`<0V$A+g]gAv[}*
,p:$ftys(/-53+od8Ji4lWXo)MAtWB>cfHLTwUl6IeDzD":WHa^yC8m}a}9bG0X"
X2!q[EV])G8>$%eW+ACer
cV-8,P_.rxsDkCxUFGHVt;~
O;oL:xigNVS[F7[pr],4>Hyw
cWVs@:>c#$Zz%DxGI!Xe?F3(x)?cE:sGJS<_Xx(j#]CnUu9VGU05s[K:M&Mmp1F]0>.P4*k~]$DuFc&]Dh.a9FWs6,^*WMQ>0.[$ApNp9X/?9D8ksFbQWcAl&LpE^Z;?C|J^Q%5affke
6GXc,F/g:r5pmv06=DHH([c4rE@0/c?BR1erJKCKIEoVC&Bk?_O6>,^kk
,WPU-LqQXL2^u%?WuVsJ>F%jOGvwq2dLgrR(x*Xn:VD4#fp86:`0vc+;T
zgq:|eIEq[)na(lBAIwkB4kC,@is41~q
/yNePo>|ZvoP%Kp~#g8f`{]`cegt1vc](`ei6`2|iT"rs&;sCR#iqc7R,d6(K;""';case"ms":return'%h_@B6KWB&)kgn,;:v>yY@rf(<!_)Y-Xb
9)
Zo1S5dC[,st7WD5e>L/BYk%g_?2x.t:LI3x"H/c-CtG@/ss53q+{/FYzf~NPN$:K`Jnl"_W78N_*#]q!;dg_fK$.h@O4jKuGH4erdxMki0J)Eq0z
kMiu5NXfh1JBG
zs"5Q4C=QKd92*3A~ZhF``ovMb*h=Ho1v
0tG`QrD4%MGrD[#k<WrqY^D4[iw$~e~7X=9Ru7f=-SJV>>(fJOvj)1SM1]M]{4G>UWiwV*FO8Kz6LkDv:5L-nIShCfLmZ?zrYrD7,>4_DwfX%X-8JWpxlbNxrH`8(8.b59QjJnuI7XPX+c8]#/O9{pEpS7/KFpJ^hvhL<#Udc2Bo[Qhm62laHm4G9Jhe18rflm[Rb.Fy(wOe<I&YNrMTP;F$?Em!<d{^tiw_hyP8ll|lK[,nFRO(9tTJ,tdH,
l")L+S*C_gKo4,_&s(jn
z$>fJ|/lX;=+"ffw&5153+i;Qoj/lc#Pt**,c5+6Xpd0wRx,[|&VD8F6HVtWNc,AnUKSS_HO*X-9KwkCUb`sf.9|[lB!xU:h.!Qy<-PL#PPqEA@O$mnq$)QEr*+YP.f+uqHWg.etFDnyJZ<>d{[r4@Z&!wcP`n:!afCk%Lk|2{y^RrY$K[Ly1{3[)/%Xu=698cA.Kyv{1<ttZIVzF4
u1j2GQv+h+fmSt`N}#l0y8WF.YFH8]l!ll`!cbE3U<4%-#N8$7Q;]O(bNpUNktby>q#RkgUoi8G^G/;Jj8HX7@eK;7M4hGv.>D*/Hj$>2G7U}-E#[UmotEd.}$5Cklx#"l&<}/QXy++Rpc20*Vrt3AE]aXiW*Y^_|%hO&%zVvd{-h<3az1^wcKtxC&rwtswhnJ?Ck-9P3H=X
L/o2-k
y1^W";Pb8,i7WA,y>m8^+`?4);2%@k=NKDPW[a}Q[5gQm0wSX;Xm{)8(20xB&bx^4iN"1$)o&g<pF(jx%qng2[Z
^qa_r;M#hT27ajb?=RPw3C/s&!FOZM`h#HPizy%aP,Sv0)Jn&fjWa-p%|+1r?.aF,T^?BrYde[HRdPybP>}qaL}k2%gA]=lju(!bSIL0pMCYQ3&V!Sl%fxqB.;;=k4v.T%dm,Y47bR,gt!keU(R6Xw+acHi4}#j9pB@Wd#Pv0o`uS:s(AeAE$("rLIi[bd(a/&ODAGCqV@3jt9}?Xj,0DQ1&PJHFb*<F3Ja&U!r#I);:4iDTG6]=xtv%Js2uv=vaP,p??$AE/[IB?)9+`x$VANo8Vx#R*14`.j/JJ9V4LaZXP3$PxxON1Bc$l8/^zNHE=1&$uf:"
XBl,@%
(m.-Acpp
7l^WJRTYBWGU-Q)-R}n@ZbEpkB*Ex2m5:XvPqR@XNl%EsCL:;guh/s/OB^H08T,EU^bCWFnVO[?b@(f%c2)+(kmANa5C0d9Iu=+,a-<}iomvQ[:,GpgIW-a1lSpuEi<)hD&B&nwql&s?G~
?9Tyf2WYshlE9[;nxi"[;HXC#@ntdxj-z0_((JR9/+LQi!9gLF^"1/l0D]S_`?^lX!&7?DBwt;3J<[[2":@?MW-,3KC0[19WM2
=h-%Ph`ohcF{e]hu4HwgI.AoC^cY]>@C)V4`0xu@x9S%KV4&6%B|w{v%XANB8F/`oZjQXn1+uT?-LA@kvm[&1pJO,:M]qkPy"mg^N~5SmlSq58+
Gl50/N__kBn&p,+[9$^CCe]G2lt%`bEb/8f/FnIhnq:rZwqKCU<TyQ%b`0X/U:
0C3.)[0uC=/PqVV`Nx(<20268VT_YUS^-a#I]d^#8:3ss):RmAPf$BYp2hzw5EVe&9&4.f:)dv
Rw[qZC?e5{o.iWN6a#n<Q3F{skn{tHb`cH1!r-lnfCkychVe_wi~
]Z|]Mc*>YW:`BCYZ-4BgM4D_fGGuz9Mr|/>EF!;mj/GZovZYw)C4%pWCVXwQP&X<-K
y(ykosr^j|_L05gl&sVI*_wS%:7[w>kT3,K80E45keK(1x-)C$&T=c2M;Oevdm`/Ji<(0XI+N9=2^ZI7lSW"*bdN35Netl0sZ51)yg;BGK*R[ZnVQUr#2TN76HsFNY<j]M</EZU+Zh9mbz=~r!g@@KTNPa&4GK$(b:pD+OK7j=$3BW>`>_m9p!Dr+sKLgpoUB)7c#[RGeO0+B9_;[Y"ILUpd]osgq=aV`n=?;g)69S`Y4:Dl3tM8.$$%`C0_`<&{M8[G>o;-0qbF`[qM[kc7m^g|gdMl)|L5Aoy;rC/sJfM;E&F_$t8hbnNTkmx}T<%wK^bI[C=sc1cP(9E?&%J]5N`~&A0^)>%#/s%hPz%==K';case"bs":return'*]^;:h".!/#*#tZ2cXE(an^CnQqS"_ANk1{gn485{,:=T3y/n2&(HA>CD"f`@M?l73RHqmHts$5Pg]&ylqkak_h/)RlBUyM]hhM&KsMM?,-K/B-^9kuc;sp@Gu=tOB<:UMQ^Ct,M`.BySa*QbSlmYH$QJASfPvAvN+~7XD?!)QhjS(ftk;Zcdm_lqk675s_k>c_N@&p#xaE^sc:-ey(f_[|*ExSI)5{`!;C*?r%3x0f5F&rqJX"S>#0LNQMMpCD+;uwlbVR1jvp^@O62`y]eC_;[zj<Ih"amc/6fuLjokI9Omnhut4N^=q`(gbuesP)Hxv[M"7@*OnzZ`pR:cEmg}S4,OyCe
`k<i3slQ/ajV)RY6=f%q2rw,=:vTrvBUi=nfBYmF]"vt[d1"`+(lZ5CDFxu8<,KyCxM#@uA;M[Mf/+_Q6*77PMF7kZaLA=33u)/S`y
B_0ny+Nay*|rc54^hONTFvKu*rLnX8s:a"jUAkNt2tj0ET-;-Fa8O0(o$Ei]m1mO72@sE#~W=6b@Xd5V}.73}J5dqrF+~Rn1K_,`fp-p~,uD?EAck@Y_~_X^UZ5V5"~`-s0NYG_E"3n@hCf@+j`M9iv:V?0cs8J=FkNlJ!n$/OSJ$$..d7s$pL,VZIpnn*n$Q"MkdxkeboSKPcq!$>{^.98lB"/T&PWT,l8SID%x`X(.7y_qpRU4r3(8DXFp"f=G#${GS5.lZ5<dcRJP^FC3tL<y"4_..h?*d4D?S6dTL1WM)b@U{XO,}1x8&<#9qmFis6mF@^t5ca9:/+na@B+n$2WQdhQ.2%}/jX#4KmQPjN_M
Ma7PUzq4IX<#?2HYV.)D/il.d}-[P
F=#$r}HY+|!00R;Hjf=kLtG_lK.HUF+rkfEv23P(vNO8H.k&mb*#<,ue*KB#L>3&G-eK9fUKCyZ@B2yZh#8d/`#Qy_hxlavI_WFl7A>1je5V6IiqhqUQBjvLL$%inhEh&XM^^xc%Bx]=P.h[K=.(8c>?nnH
vai8)[S"hv1@N2DMIfnM
=juGoGhMevIv,oJPXF^&5H]`])pQ?.fO63nU/s3_:"~"Wm&W`[Wden^?FqfeZ)]h@bH;v9ty`rA1ek{:xd~[+
Ovzj^Ps&$6]>q53dPCe1^!m<]E3i!B8kPNpIy6@G8JZ"($,ShJU2gCxtE6LpS?[eFjZ)H
`-UicmXlm!`8O$,v:2G:V4sO"nxdy#zj&OE`Q:JmkV[KF?4-lSVidP"b&oK:)I{UaT5-Z#%Mc%{-sgv>TT^UKm+`]-Te7EX88gj]/PJU
2b*tp|=`a[To`?u>-*HY0Q1pfG+zVO7!y2V{Z}u9F)Q9%brLbQhxg&u*KVwE<9kC#+Q{y8#u7Z*<oM&Y#T752R8F?_F}fch(O94"6?8Y8hCw<aGP84WG2lv$k]iG:SBf#SZi_FA3vWWAaYKq?i?(_
[X$I]#o3+Zy_7F[0#4l|%j^ruvGm?7Y6vW:r,
5.jwmThFHOq_ucLfAl&TP+imjGiYReNQE`ysvoE1IwQl9"E1%3^Lq`2ItfFfT3c-n=Uk<(2iz)S`d6/q=h;rt/Y!@h`DlpmaRq;5dz[mF"AoLhSgr8;[h~(cT/(j*&L<SdVq5A!95D7t)0I?AM:<
CPcnXD>^v^v*jl$I]mG,^sf6_t|ZZRfX^6.vQFDf&/-"FE!-4i&=F/
l5)Wu*8^u?Xi,oRd=1)Lg.
#"1W%1mR|ZGW/Z_o7%*f^nQHt
3)cT5<[(7UZ#3HTE{WgV`(O)oj#<uvn_15A1"8]_m.)vfyU2Ni8PEw>s>J~GV?8^nM/`2Nq$;vHn@tF<H2FauO]0DJ9RV7oj5FNCBRh&Ss_d;<{AoJu%=2.t|=
mc/;*n3wp$KK3z8(tw8@?I,I">gIF&)=*jx5RI$#(C(4(oMA1r9"@3<7%>sFrMR7:@#^NP9$Nq#{Z%$C`C<Lbq>%h6*G2{q4wuPPUnJ~)-uR7-e+;G8g
ZKXydJG0"dgl%/udBCVp+Np5BD"xQJ9
6)8;F^4!EAGTPxms{;f&(P==*nC:UfO2c3)#6c_FzTMhV5F16t-K"OStB?9uKCb@W]@.(/>R%1Ky
O[doC&*zX}gbf4?f6DWk?[py%[gq]gr>=Yp%0~IjkY".12WY%q;-C>YPXO>8wT,GMXHPxmpj>qPy6"WJ(+wMKD8KczezqT>$]<.,6`+A&z/P4f/@)%:nb3OVd0Q@]R%xL6gaNF/n@6XR>>IF/!!owy`E#y9yEbJiO0)d[}ZjALm:r[CS>WOuWPWmOTp<)4OCCv<:yxo~u6HQ@+lg-|i:^iE$IeImeuIv[3ARn!8%SCfhNb$XiopP]7$O3!;.6j8kUihxlL3a3X:H.FL3;Q.I?zT#+;(e::rI+E5|S:mGPzs+Yx(;Gm7{a6jhZrGfY(]|rW!C.gjeIU`D[8TS(<2z[zDn6=I^GlG}LRc:Z,cNCsr{TbXGRR;K%W
~oZvg4[1v7W,hed7B04K=^_-8y{:pBhDal$f[arsOS@:EDR+90RUk*pUCkOCC$1oa!`>s<9fM%P$9w+b}QO0"53kEK_CSwJ00te<Yt&+-+6g7EnB8eI9I!k1@BR$JI<`)[%v|IxRza]xN:ZM|:
lssh<|J_3`6l,#5hvr"&Eb)4G
vYfdfCcn&,kp29eQN*5K;s(e#s2-=k.|uH.NXc3_f*H|+XH?5+DvD02tB1<vc7/HN#Q,,zrfw(F{fbW}?".p^zK3O)M:aW>p%:$!I!k<,KYg26lT]r[s8MtQI+#g:"-T_lu(=a`l]P.S<O[b<Eknu>f0CR2Ei<m;3=WA.l>3D[+XDRL/NxKBk(em^cx&oP,vZgLO.pgU>-!3D1/2CMcRZ@6=M&l$!pE:<qEh;C/AGvSm2)lS^v3(ShxVP$m0L*4hQp!MRN_]a2],
<jrk(Wf$F*}R2H!aFU)]9uOU%GrBrx$y+4uSo,I>@pX&/YlZ85(n#G0#D
Hopb-);FR0S+8r!X_Kb"hI9fxcEP/-%p5/kEwHg&Ii?MvKj#[>,9`ny=4ku<^YC/2]]F3xX7qK=';case"ca":return'!]^@qh"-d#AS(qwB7*6;kNt:>2o<P1A;~,)H|v>nCY[TibbJVO6ti&s)>1pOKH<fMl!a>EqQX"8tqj+V{7@cTl+n#]k3:"y,Pp,a+Km6ULfKjS6vv,<#.h,J}%G<"_`-?4#.[>l@}y.M)<?B:g>EWvv$3`$]_s$Rm*o7St@PlBvG.LvBJ>fTRx(>5_{EC@tx:eiUow!KaA^3ff60^J@0G2COW4"<.?d
Nnp@eaJ*L+]e*VXiurPoAjm#6NVTA4{,2D]M?^e&KItd^Ksu#G^_KnI,N=x^M=eEB%5;))JIlS4[DA_
,3IEUFM8j
(0A%>Eg+a@]y<)U//tT;.,DZKQ|xyA7YrUbp]j1r3Bp.m61BI[tF<lnchZ|T.vy#,
]ph]VM=/slI%)V+6h&&x>YKYaq|ht)SkksI7CIRM,HES9huI#FW7:YQWwp@oSixS37msuW`bre%yw+LK)
U3E8WBi<mLG1XqF[b*)f4bpJ)M{mu7@o|yg/-V;`9h~&,:hp4n[Gg!z`%>M
<U}ofZW4F]qNNG?t<bxFM1,-w9Ocl=3:D]5Ln`~%GYRV<aO[ihYz#M75>aF=D$@<Bj68Uj,Ba$%deOG)i"tZJmpO?j>^DY
nQ(*$;YZe;TKhSDB1r$E1yQ&.+qpcHUE7X^/[]53uGO6@ZV@NZu1jEvhDJY2K6uu<Nubm9n?f8N>)lJ.Jc]bbYn!
Gi!dDQFPU)4t%oLT!fRNS/P3LN~Q&G#n_%#AqF&*P$?#hlJw9S/-R1$v
]3rvnaUv9gKT<h(qe1qb?`(nxknHytu9Zicw^JIyVd:%^Up}c=cXBln5,8v-$|:gsD$JT}Eo;@7ORsZ;u+H]27]&^Zi>>mSEIS0lk@a0SC4Q;%6us}dliZ*5t<h#D<5N5w0cPOfx[1XTgb9r=<!3($?q=,?@q*b
Fu[8wo-SpTD1DhfC(!TxA;kW8sq1b^=GG+S>mtJ2t.tTv;mcc)fMIhvLifZ&nT7;K?C$a#.3yheoMZ&t&p_yDV]7kpfJ]dqA1!RK%)b.H<MHMLH]z$jjG49,2#IZLlF<1pa9Dr$lXuF83Rer/{ME`2EK4KKwQ5I@V+<H$.z&B|vPoR*)V4m/OE=:[py>vO+Il<gG$>v2UaCxu8=7sZ.&w`@7EsGBVN)-l5*t9PHY@U]fB*2xllLicR"qiG>|`G_/D$cE
B!0gQL?/zql)`6YLelJLsxUXHCis
3#Ax*.Qn94KP!*AL].r$D3l%Lo7;^o7GYQM#onB:[cDgPhNg#i2hb+b-OQb3LM:AYyo;a_"S]wbQVUO[w!P:h)vS:`j&Nb`E,)Tw_T*lRBgpu6<Y+5P"7vJXw+b1a6ke:ZSjYyvl<$5Tuq2}TZKNq/%^x`X7&&,xnjD0su$MC?pG@Kgu8dD7g_`$wuT`hJw),7SHAIRHRM%sP}vL+cP:Nz;
Hf5|-k4I;A*R%OL=AwC*U|8u!]KwlKmc/Z=Ie)^mg0%<x,5OAg>ZxueNNzX$ff*wT*6^6pZ3f>Em=:=G@bm&]X:TY>:|D6^x
sH&/E$eM[Eeb9G(RQYhR3?R@xXecEAn(?T(d/NKo]ijuMr}=J-hP%8G&D&s<:Y`2F&,Bwehf3W?#w=YE@1-er($
:
1=)i}6@59TQ7d/sgwF-V-F@&~bc%fEy
{pUGJa-9{*~eHT]Sxjff.o{,[Qup@^t5VV^C+<4$V%$ac6qn:v[>KI.&+Y
((RtHZ9g%Yv@:sH*^HjsEJ38W(#Yg0jZ_(:1Zo[I])H{Ook]KWS0jC[1SLe%(4s|kVkr=_1tk>4$K]0vZaq}:VF1D.D:Xy;NU3_V+r,IOFo":sV{R}-JkXT`NdbmLQ787,7{5w>?.G((7O)l/6=
pNKoBv`SUia7^&Wk:tdQBEr|]a)N<W%JymbH2IZ+WM9SQZUk;(5?02FmtMH%.o-hNn`.JQg?Qm2T@!;ctPAtLd>%wCqY1>
`aYJAeqRWMZl./fTd0@0Zjd`D&j5UR=AM*2I7$|snS/jXl1Qty8EtEcP&U]+}E~#U`N
&,G)Wp4b:ifEaWw<7lFO&GSy4H`P^xJ7%-4Ho<60Tf&w)"9kh<<_>:?I~cxKFoPsh9$3F`hlP7M?o3[Ra;hF|*24WjoSG8J3!DFLbp2,Gx:S.enJ!D+*>d?m6OMsY5^LIM/*Raq6y5H[OWI
1)H#YZ76/DTFG?(`ZgJ4#,#xN8CnfG3q%kL9}Bu;srU%ru&xi2nqZ-QEqXCItA*@#m,DS,4yBrp!(?BVX<rX+pPK"sZ^;9oQI%Y<W/E2sYaHvVS/#dv5,F@gC7`oZs>G@U)GQp2F>;j,}EgT@EF%H16JF
;,M4(xzES/9PZCIp,VnJ_*2w):!H
9
qkFOFM*<I@fsZEER7QSp%.lo)gY5q+cb^
.[#kc~$X95hwMORD%T*S#K6!.9KUA]ormX:PJ6=~)9BH3&W.In^e)JGFl/NQ1%Vt]TOQXix.Z:P+MU^}&6SZ:P9<6hWSg]q]GM;1D/l#FSnF
ZaIm<]aIKaDHjgF.QyFc
BZBhDIi@2jyV/Ze~WfB~XEY]gR(+6*3

l2khdtqqw;rB0w/%~6&y#[.,!)GCi>f>yYdDXll+Fjb)cxNM8H:9N&cwNgo<1-&B5;?%kBO/9-Z]?Wm&}qXx=Zaq@@DlE_Uj^78o%={8AD
[4_7*;[ihu#0,ANm)4g`h3a^L3(k0F0|3H!8ZO^i=[)08r^avEH=.CLlb!v
i[=G]RvB)>6wL<iQAHfnG
oc<1UakFCP$oR3v6uU>.Cl`0=S64;qABh~fT+_,2ip<j<4(E?qnpblIF_%=,dxUJAq>Q?jB,g5kwa`7<ZxSh
jn"ZKM^NOOMpG2&GJ<SUO-!_!OZc*rww4X{1wy~G-vvnhmnc&3G0a%&Fzg22;FuOf4-ahCCcWtLej]I:!0/$ss
:O
"g3D
44tJ/7VKT},SJEw9%k';case"cs":return'+]^@)bS]40!4otc"
3UX7xD2}Yu2e*UEnnPme2[Ap#OU0eKyBpRu.iObL:*$)C9,M+3"p1.mAM+x`.Z`)&rf7kbnNxX
mF`K6>hHrtW*VXqk
!Q1@6{dcqJ,:)PA;;;nt*cokR(0SV-49M>^),nR"_VFJCt;xphs?ZIf54L[QQ/]qxX$
@fYU;bd#u
v^<ZGOE@?[c/tk]UKzEZooi{`]C{^jXG!zLRyY+-x"2(,300"sX;n.S*K9)R;JhmFi0+HbAiq.;,^k[K4rP#Ee[X@PC*y5M`"Cg*M1ggC>6?4.,YqF*HG#KQHS!RtSOeo50q6TAl=BxGDfT&)%e-BTS$?q0ehIWycI
a?t:foFqJg}x(h._DBu(|t=yg$SvjIlYVJ$ORi-nJ]X9.t>Jm]Z7-oNx)sWC<hg87g54rqz:V!W/PE;4Ca=c,C{q!9edQ%Dof8,x+uFh2?iB.wSbqk;
g,-6
cwn%6RRHlbA%[W$^$Jnc2gp?#Grs0i/1Y`6MR>,5?[^0x!0)9bJE^w[7)K
bF@bD^$w"I@2!niWJX`llk%,WGNfmq99wo])rVIu&
$r5-Vo--CL<?2j-mft;b)MBLO+r[q`OmST[lPq8Lg`rRtiK#2X^h@l}l(sKS2m^lS[A.a52DPgGL[mg+JJ{?{?inXPq4}AV#DDHjM0l!un6/)PV92/8t`_r#MfpZsbQC]4%l<CDfIm3cu^2paLLSzIgLb1@)!JtKPQ^R+w8R$ZUFyaCGq1]D>;>GOdniO=xSEt?!7-<+eS~bw]zcC_59_")!aAONnCPyp=22k3QbuMqDDwzh9R!dL(k%>gqrJ8]2,u@(*=_
[i3P.]yD(gGqlKIKRfpx"*GUqaLk$S|MzB@gd#eHcvKY23LSn427]h*;7g@M}%QwnP0v69M7F]?c!Q=Qucp)D40J/%SD9c5xLT=(Ur,xk@h2Y]/#k@O?u>}Lq7kBNw^K^its//_B#>
KIVmeHUW1?0Hs:"mEcc/q$&12udo.kC|wb0TTe*vL=wUp^
fyKf?M$:XU/y}PZ4e=h[fkE$p
Tlyk!WB%3#uxN`qHs*]fa0jh;7m_tVehTJ
)>u!JsArV=k4qt$>j8UQOJ9f_MBf=bh3xq%"m"ycZiYP)K_XV)h:lJ*E+j<6P|SLMs0
nT^Jp{fA1JiLD<5PSO6k)[stlrFt%
X*M8@}p
rH5CtrD#W.]Ck>u!$CYy?qSfaka/Qus^^eOr?yH!&5n!n=[ttukMEp>$-:0iP&2Z4)<x?k#mZQZ@hjkat5*v)Ba-q4kj)hf:.Utr/~gY&Wh!FTX6wjSHlEdD<MPo,C<MLqgnW)]9Mk%CQA(&:a72gl[cC,=vXd2;gX13U3:c^RfEm-&:+pGT/=(xi6_0v_IWIoA+gY@LjfPF
F^}Fn&k_FYCmP-zi^sjKoU2Fcfk$OikQC,<QbQ2HN[lp`:h]{:b$Y4EP*5]D;f7[quCmOZIoV;c:ms8@k"nY%dA;HEn%^@0j53+p3]bd?t+&mD!2Y6dJn#f6r[g3;d`hJ($g_OY,VodZ1v&"5u>9U7B^(d)WhW[%Iv^SC>8+qrR+7G/[U4@0BPp>";zp{He+7K!9k+[KfXxSkPUX~0@qA>ybLZ?/|Y=<?.YZVG{)2VmKKZi>^9V;dQD1sN1Y"AR<!639/#R"pMEVa3OJcbD[NdJ":^b=Nc?pl+0Ak&JeuX2OWyMj,,?OdOs3P5"1oU.j
Z5%[)GJpE6h>ltK_JBD%:JPSWT*^*XIxe+m)4-9!r]I~ksweEQG>B/h"PrA)&^I|$"DFpH0Ve(2]N3SgGL(ZNRCkN5U1oh&MV{4,Pygtfn6u+}56"_]<`j#R7Ba8X)SMNRS^+M,$=zS,XxIMXGc@U6:h+CDwq@guD.29tN0X%,s;]h@xJ.BVS@OWWO#6vaA/H@a7x/S>V>jH`RmxK0f`<Arf@qKK@hb^2+eeDf_`B&MKNx3meLZyC+EVt0O91*TbPDc(=kXMA:<W.uCctRit;99I>V-#P_`I<QSY24B4!Oq0]v.CaDT+PZ@5-Qr(
i!C!IqE=RE3Ndw0KWw-6kw-ySQ^U:FcoxxHq-WNkh.ICP:HpO@Ok]W>xbG_@_yef,jQXh5D:}Hy"8lw;T@Rsp!]-|cir<(aBbnFZ;GCKN0So@olo^D>uJb*HN;yp]O[e_]=C9H&Fr3-pQ8ZU)4j6%*t4M.{XB:y0(`td]]@FXjLAI4~8j_&$@E2[x$9<vTUQjS~LFF62uec,Cib;7_/qOJqm:my[vWwk!YfE%jzo)$76#R0E{3IU9!J%dr=)cVSf6<SVL6kX>Kb7VLeB{@LtZ.|OtW6$8@dlzfxS&q1pMt.NQ
L-mor^5F?=]:ePz7jHuo{!]CHvVU_<<Y]j/N@,)r#LC>^.$>K](Sl*ldu<TRjg%o8Vp)ZQ0.N=9n`g,pR,
oXI~O![jr.$#nu])"@"!H/*{iN#y3hT9p^P7<8-!v!?90-&E:ZM3Vsp&@jGk;2l"UGr[=~wO71y8,"ZIUz@ab0MF7,t32$9X$(!xHWs!onNw6R./gjR=9S87t.rU_+lbPW$C#Y$*K~"~/y(ciaucn|J0:j8Ds"_icQ+FRz_rve"}v6*F@8e?M}Jg#?DIJ-N?^xw]fpx+/tnFB&:dTA4[0-h~O(30s9bkDVSW/OHNR,!I9QV5j`j>
GssCOX`xU0PSD:gCkj,3RlY;tUR3Gng+jTy7|)FdqcI2XqG-@t}aE6Zj`!4])!%ceQ-.X.n(N=pR)X:5=h-9AWKl7MU+[w|Rxy5qIt3e`V1tB6c3.^Wq-A+ZzE6RJy})h;gst3/i#meyI+F;:*jYi.tlg;8D?T}]PE>qgey1S(ZS[OR;4>6CGPd[!p9f-$d1-gs@sdRt<iAZtTnX~kWO$)eJ#-[h";Eooo;E~oyU{rxnEs>HS.hJp<Jv|?$dex;
_KJ2G6|2&+&D0BOh{Au2oL7*DJ-t^A;
mj4`ETU]d1(tQ::%j(CEhWCgGyw[q8KE;x|#_![@|p3^Ep*bE*yz#@FwZ9!y:Q/nw5w-7"BC%+eGK961W(j)y>N,*ymxv)=]K-
i]@R]!_%H%Z6rWmJ@iRHLqnV=`UgF=mP2
=MGfRR`CYBL@YjCyGbe
`MAsn!.WdYF):NhaqHxyfZNa6]yi[<4qF0v[SM-J!{(yuF3UQD]#Bz7*m#e~n9G1Xa3!5;Ohb(`66ymHyN
Y$vW5oA(=dvahiZXmSi/
cAb*;3-`S)Vx;pD[MsHT';case"da":return'!Z};:bP.!$u^OQ
e;J]d/.[B>#Q9yk$C=`p:^,v=mR~o*1C6^!#+N!n8cG)_8^Sl:8UmsO0!|&_nWy1x9o%R?U>[ea6^os~W~s*Hz.^*jmz0A.rmUMP>7s/2/bcv*Nis.9
;{mN9-&RC:V``<e29(u%X6T5ba&NDnZB-U.h(..Nf2Na2W*W?IY`Q~kyI/_cX+![h=^9ae;ddmnYT&<@1T-.U51jwY/)W7*k7y"qU2J]o7ZS-E94^Llh:i6%[kVIw%o*(:60-Gk,!iqQ+gGZ&,dxlg1zww4UZ+eJc3CI>cwwL_giKJc;xrp@)v5[-}UJAF1NMg:W_gX@*Y$JyhyX;<E|"HdxUcqHN$9eh-ROufCKNIJKZ`#=s~`BX*j*-R+6S78+:aP[eUM9FuT."/bEH4MjJ4*isI$@!%Wg<&lT:l8%j.ORNMvwwQ"tz"
ah$%(2Hw*.u&Y3Qo4<ib/o1
crwn0WR?+*5YVKr#[l^F/JfN$6q+Ivak7yTS@bp+R&
OSTS9GVUuV];3}XB]qdlu8.>X`K.W7WV<3`h2,u^s.El($uNXs;F4V@uPRk>(Wro<^[)mZBW]CkXE#7DFA)nB>^y&sl7NYR%CKEW^mwH)3NCE<G[t,jq*j4lJHO@4tYD-+gKvefkm=tT-oC_p;]<r&3Xyt<Updb_fD
Vcmr@G/#=.7=2j39)Ic;AiVSwoX?fe|`cv=H]c*[1m5G(t@qtA~E2w-g6bxoW"y5!Z:^WV$<SKNRLmFr+^tYiqIRA<;Q&p4Z%[c25F!$TWK+V4jZ`
)=`
hw&$I@ehglhA>Ha%A4`={51P}z&]V$@r;rF:YdbJwRmP
b?0?^n_?B?91)%wn.oH)%
2ANO3ouxK!r0vg_quVz!!&O5ZD,[,ku4cihT^b6EEo6qo
]fA**G-lt}
YaeC}5us8Yvks>Wn0@.o"MD70<Xq=CR:(a=<fu2w<(-//I{K7*o7.aTf&Vs&@(ls|Yjb(v>4LhcMsck?nG;YWt"!~&?<O"alL5I&CX"(c>#f2y>6L]E5Z+0ehU8tG*z^[fuLXk&@,/J`XU=t2Y!5vt7k-bZ(_yW3/QRk*]+DEIg5RXwf*rHgE/dx^/D%KftqPBqvwn$yHfJcjjgy*C~Ja#Nhw$|+a:j9^fC"f8`PqgzO|C#UF6q"]mqKT_|ojFh5d$9k{EHYpIXs@_5!"E^HcuJe,*_?~t&p<T)cG:645c+qav7tcHM5/)!Qot^0mE^[08645bAWzWRi1okO>(Z#h*hPNxn2/,UPKVu+@Y_V[V6jyQdNB^8vM9FkgSek%KC5`25
2lF&$3DKxix0RfwiV3Z-HSyEFMccIEFXxkGe`wIZ)avfX-dyh4FYcqcUwH&SZmgq+@&pbw_CL7svUH>>kOmo=7xS`BBIrmYtIMDDc:dERV1BON8$aYiwFNX(~?+$JivSSo9
N/P[G:9PNy!qV_/,=.-,]&.nhSHaUNWqTrARFs}UKjDC5Gunh,)veZ|GmrYqrtQT09;+}Armppa.`DYs?H-SUs,NzZ|8ABOq%,Yoc>h$QE)ZyAOnDSaRAJawu6*
.j_l=F|20te$S59c`Bd"ke3?W:#5a-jHa>}wd*e=%!;Y^xAt&MeEaEb;a^q4V$e,D$!44AX>vWDV:,q@:#|`&F6mz8F99w,gH7jRg"eb(]~]ckODM2jPS*D1a?FDbt0qU1F*MM_5cGwrjw#W+:(#/
Ylbrp.!T&J&]:bBM?N$[.sy`^j,K,i7YVG_2!xzNbDMm~Yyxtkd<,_MGmR}&n;[,hD*PtW+]>B5o?iMR)t>PS4mKE&EVq@fSDSRf1^g;;E8<q/RlKXq%Te(/48^u|[F`+y|d8C"P6%j+Q*2-7F
_uos,<34bcAE(85!U<WFXqpo1$-n0kQIvU:h*uUiUvb//?#k7F;W*$r_?[fYXFVY68
hlPFs9RAYd]w<E#2o^l^ml?rz?DatYQ]^gbV_b]/xZ`2:CDbc#
f^ODB4/eS+Z4;(`IQGhG1;R3x2xT?72N8TO!@Tso!d.J$iVx&*)r@W`Upd-8d=Ju!Is~D=$*65?}>`1wm;T~lv3
A"TD>hk;pb:T3T*.mhl<WK)MQ[nijIy}PXrv0$[Bj{GJW1.uJP^v_rQCWH<IAjgj@e6ilM.~EJ%JJGyKL7t?%
Dt>q]PfSZ[A*5:Kk0}l$!hkhS]c1@uuD?&%/g<.fpxS_hVL&_v_NO~dEC0(fLS>%P7p97[oV0qrH29Z~wo4rB6tE:h-IQl*AIR(,_-T,[11mY"2Mkz<vDrWW^;#*vM1^1b(a5JJ`t="-Uq7-Wx))^7:`u+7k_#wJc79|gbD"
b:lS{%P`#mJRjI(U4UAlK,jHl9#y!*AY2A8#gc6xLX!:"X"TN.[AB)kF,_?rG$-i+lWt0%&m;in>-x_V>b]
&-j_8h.>!;.gPtR4fN{.(I&<<R!e5Dsc`^,`d
yvWQ^qV=}2%o7CiViX@`"T#X^hq9BXyggQmq_Zxe;RHX4S_,0+8A"",d{7soq23TOo}Hf5u!E,ovafguIPfjyE6u>.BLg_0,c@s#C`xB-AsPJI#oW<9Vw";$(vsvl
((yqJ]h(Wm8qZ0hO}pD>XBf<BbPHA7a';case"de":return'.]^;:aQD9)QXkE{D0"#1/=+$^%Q(hpbC>&S_1pL6[B)_pKjIE(RZQOxM4N+FF:54]B-arc!Ynrf`$n%$}gJUN3YDWR*u+HR_)0.@U>wSbJCP.R=!:SO`TZnWPhNG0-0CyRwp]*Yw<#|X^bv(3O~1TnwR/:u.,c|!Oupfr$Xq#LX7!J?kyaJ`ik+TsGM4jqWwkh*n=o[yTAquKUJBIT:haP&
.yLmUqTE)Hcn(7X2-`7mQIG=+u@&qd9+PB4n]2Iqz^mF6
QuE
81Yq;9Z]AV(?}DsPo[<NGV9gW4WO%S&da2@2Sn5+sX227s[xp2)3]_j/du26f$-+[h@*+QCg-Vz69N,Oy$R_8t"p6%fst-%n1(E7HJ[QKPgvI$SRX/
mF&5u:,&tgiJyeJ=/"J$)AfOs%jXwCLo0927a%A
A+*3DOt%!HLP7qSo@)]0tFeM$*(]M-we>M+Nh}@JdjPHgLiRc9&T<CSNp}Edu4.
Fl6G(CBU=`@F2~L`#sY"tAS,OkYAMdb8]{
&UXlT:^8]R"[%=c*8v=m$.AbQe:@_xtF)V-8XC>qt+4
OG3!>jGU&SGNF:njXONsun=GhWG>`lRVbg3>e_4y*,
;vcu;RM`RL7]sPMN+?k0]z
I$Pr-XbCC8,xQ8jYn5>?hCABd2bF^Y{8=P3z)foU8f]
oel(qtgT+Z|CNSB*2?lL~Ep2bJ2(n)KZ*O
?xLm,_+7^R2>5W2xc^aTk;UN/ENP&u_<Tu^<wdEfpov>Ok_;f)?PY>=*+ze%JQ^Hw$B8+WMST-!2+HSeYSmO7cWAl~!.^m#6y!Ub`mRwlEsb*LmYLVMQ.ZV9c^!{;fOwi*=U3Kx=Y%SU.N?)cK?NLn,P2jl
6d=K.1@4(=pt*^/&yJeCZ7Xi2@<Yk4cK;!IE@NJk)Io^Ivn3A?bp8&]!G2TuSkO3A`QBxSt)[@m1RIi0cHrmy@7</sr~&b7Y?@s]Z$`x;chddki<D}C*3K))qgkn!NI8[8xplA/-tC,Ku&TmC.nQ*(o/e"vT4yb=oMVRv)m`"CA(K^9!`&_D"
Z8A]1y^U[5?wQ@TIwtN%=&Mn/@"}qj#f8TY{ZC/fw*yVTnEn5:ywW>o_:XM!Q|n`dmpY*zmw51!&mGsI2oh;&SE~9J:?N0nL.E:eQGRNvrgC16,VdsE(/]MPAA<jg:"!:~a_vUp(z)d_8MkDmac10
d
VeTW@WqHaiBd5%CYFQ^?r1qL07^o)]7}fajnvZ=J)SlM>FG/
*noL|#r-A13q`Ga,st(4?6gP1cnhQ>I/7UxX/&+%9E$O1`Kq>.yGW>6_^[6cgTty%#*;ts-//<q8$VAGs"E^5];?DHpiR[4d<9pPbV9!)[~&?v}pFUi4Z.?/Lwh6_G`m[o&euyr9}sD2;]-g~n)&]5xo..to7TH?NOdim"74^o#*,kE&iq&HhGGTXXWKk6>"
@#]gE#G,?!%N0N+!-!pd+B`7kNAN4aybS.pUF%L^3##I9i
|EzRC&/W
Ja$;xu@nbJF
krFD$Z?Z*<Y:)3YtK#Jd0SNLf"P@]{NhCs9#iwiNWs3A"]Y5LS=Pv?ZCdQl_%t]K;g=^fHvmy|?&SqE>x"a1OxOPU>M+a5Y|DDehFY#++:K/=$5D/Qe;.?=$i$_A)X=cL$G4q,2@oo-,kWlAgmHp)TaaS[+w/pN_]b5ReM.F`St5`m1HtoP:OgOj<:WeyP0juduEb
/*66xN.Rf|Qj
4GYVOP4P9u!!4@VDRO0F=-iVmx!WRU+(dm/F0DKh8$^JAQ@1+@KB4
}_MY4n,
x-9IsPrXh=>Px_HAJD4Z.!Kq<u=M-+=s@yA]e,c<"nXg9
s-l5*x_/Bmw_f"W0W24[u>*il(_E!J%BMIjBSK?DmxN=_W+Zb0p*)g)o*9>`
xF^3-_p+Nd6E:4)=fh!]:e(dl>*e.+QFF.kFk!>$1%81LEYlxUj0D-Qv"+"+mA0
7#P
#=4ZIpVZQ;H^95&6-x:]iLO+06=
GyHRe"
9uG#{RqP{
J8MG}eA*}79da8[x&hT(cKkHB2Do_h&QIhJ"lbshPQB)52v*$*{_Gz(ZN4=ygl<-$9R">HaRknfD"*rf}:hs+4nMZ@)6F2P3y
mLU3&88PRu+DPP9m%tPZ|LQ5~qGc1;BLkAcAGjR+<SAgcOB`9N-X$WlUZGps.#^$@<1p#9@`wc9%e+Uf$QA
h,*u=w
O{C}hK>|Da&oZ`8><Syu%+S?1RNl+bZ1j(L-.`Xl-cak^BC.ZN
iHqC:Uu8:S=Z3w>dS;.sp:odT2Kvri&t[xduPyt61;5MMCK]C`J<ci/g`67_X*pg}6*:n.)[+^E3FmBut2x7hI4q!XsiCx-xvY^Q5yz,Ai!T@VBmljxc#DO.aVtu.OZg,-"sUo5u.p6SWLiJc9tSrVINw//"fOYteD!r8.B4y)+Hhgzy<7aOnwK<mwI5[8Y7#ek[BgE_jYy<dj.V_r-a#2R^G8kSLh,4j3il?T>oc=CZy(46#yaS#;Xnf<4]w/W)vUn+6:mIbC8-Z;QTG:BK_P#9U/|G7=m!wYZ![Vqh:Fd9;4A!aBv_3ceOddod3wdfweggLh{laauQ@)nCTrOU7$C,2d7!1GWO0-}Z^MFqu6!fDFU_wDb2Cu^Y
G~qrU-/Mmrp^j[uD3P=8iaIRC4Lu]XR6E!ts2elm7N7r5V3b
yDjx4i[z#MS#)aGH$t1D!xCHp,bP_H%Zd+k
X,RBZ=T3:I1vF)xWQR7j@AZ@(T~gI+HAl:E=VF}l;4
t
Za[o!~k=Ycxg?27l9Nu4Izqxx3+=u#Uk4TF"hWJQ!~)s?]vp]y!Y5$U9[N!qDS0iQOWh^UH%;KKPutcEDTVjMlta@-jb!9OLm3o4Gu!.
w"u8{6Hgp;ihbx"lG5N;5)!9VN7:U^NG~1<w|<}DBT/n8J~qkaAucy&i!Px^5TR`rK1oWi^mBj!IovSm<.MSwXur%2`OqP1A?U@"4yO/t#$[u(5
W.PLZAOEyacDG4s_0]GWk7&p`VC5[FVDpV1Q#+*y}W&dl>3DzRO`GB;[l)1<XbL8<6<aG*S:}2Qe#H/xiN&';case"et":return'&h_;:g~Z+:"5$t^3JDZbv&j<(=xa$$L
u3rG6Oo$H!u@TYXcN&
N=`vCaB!x]NB"([{>~TO5_=[CK3tmXcmhm@(h=kA1)al<-
&mfvNB
LXx4QY4o8F.1*m[eo>H_wFMA%jZxrB(,5qUKIFC7j6vg4MSH)ygcc5:G-~yg%~ad*S15GW;8Gh+N8h2<R>_f?F_vFarlWQ:;hZ2$&Dey6(v.pX[T%x9-Pr?IJM[?4N8qtypf*mkHnm;iZ$.2P<?xfHsw_&Spe-=(=6PRX/^HIgZIpWN#Y5``b~t5_3c1yHbx<0p?HCacs5
XMfDIE,!)7Ofp:K8<F7lXucF8`r)P9FIx7OB?=##*@/6=J50nCndKH%vJXmpbwnXAl6mtLLG#]"ixF9C/Ue!-![50"E/y3p$F)YJ$$akrQe5AHb9@T:wlp*sS
8[/Z_f%Gv_uB^2XB_ecWxUU]j&[+TqPa5@ze%j$q}v>p$]m/c7wBG?3ul@**PY"CC%0[*x,Q0f.v*/xg61|EdCdBAq;3pV2&]sf4yTg:xAVYx(>lZxicih#%z5>r9jZ&nTEX#k9_@"m@<"(hFsTi1XH)X=P[]j@k;b]GP*RC:V]Z@m|;J]t2%7oQU[%Q;),)F+ZW
Z/h^!ot=$2>TceFc
OoFS~)Vb*8A9rtO
e@_vCZY[F(bC:00^B?/=x-4%QntnZJHxH2-BF)J^oLLxJsh#nniRTCvtkZUrf#y&V@@]66}n<gNq9T772rNyeWxx[#$AdgFlo+
t]]OG(Sn)E[]
=G)Il<^pCZ)UU%H,Bm}LET^yKH?oRA[%t;wsqM}6~KAl?;SdF3=:HQz`jjQ60t/#:Nw>+CYUNd%J:3
GvA_kmQ;j-QkZ&d^p)AG@.4|s^=IZ8jBcM#68(HM_/bz<A0lw""HyXx;j/gk^,fbE%EKBcNNBJ0*y^0r#$]U.>uWMC.pO
oGYu)QK<
>Z>
]#$gNfrRm#taB:4NA,{b%WEC~5L71^v#>%g99jRL{9A`(/8@."v$Po*22)@FPE%rZXwhB:XxU:BX]$oE%7%?lg{()f^9]DY?Td<s."^8W/@[T+#1%$3cL#7AV.SA
XK8xQ6%ux-F`_m^{r92=leUX,:5RyGjP%xr>&Q"fL:#M0F_*kXl4#D(i%C3*/jHtltJ~0C;kmePZL~^&1?+VU/^_x7JRREr7L:;6v#[=+?o3/`sw1u`+(5d9=U?<){T}Ycf6o4b]AAh#G5$y:
>g:rhI#U7k4ywa+Y*ctcst:
v
eOyn_^usxbxacpiU/3fM7GQ(kZk,=6GFx@[aHFy}TlD|!T6rLH)*d)K,PW5HUh@ZtusuwY>Z5dHR<!t4>MLkMI5b"ihJl@.kHDgj;FiK-z>r!Wdv:2x
^MA}Ze^x3f6u#3^NSjpz?CvBV&/4Q4l".~=yhQqIOK5hLr6%S-0d$b"Gl];-fl(3x!=V
{V9a%4I<.1v8u%t;Z&F<~jtlWfjt(LWhnrNpMG=faY@O3LGZS!^=,xlGS5dB6M<BhA=vX=
6;pT@A9;&a%z2VBX:ue2#<tw22Yj%~qSh/j,P(U
sgEOvx9meA+Pro7
ns7w+^7O7v2HX}AM>rZ*LHY#d$`MUfO5AEs?Li(Ao^W~xK7HE?P4dG(>Z+w.+p`jNwI2,<$"RP8x*uk0WqVA[gDlS#OL_*BD@?SAn68?k+.rcqF)IG/Rtjn(Aj]?s>ypoC1.RUo8PjdL,9TcjoR
ZxxBOo:D=?;C7tOp1Ksxlf>?E#_k7WLCF}+D%pD]u`I3oyh54bg*$x0-i-uS;`<AO,R!xmP5Bd$]s&
CI_3Fs;kXX0]>=5b6-gH{CqD3lIiG=@mfPS
<"hy<Rrxu56^_l>U]9ms[W376<KM]t8fB7#(npE6fRujiX0s-5IM$AFjp`)rj$D49rgd~<LrTEWJ.vwjy)]t%w`X>E*0J#`6kICM,RtkhwS*1iCrl-gNn_BER/HwS(8Z0jGHyiE:O;l$IRUg=9B7S((XXt:6_1,=@ZfuZR*`]-,]nsDvdW(>]y`@bv)<<*PwRuD(etQiatJ`K7[r^Byk(q"Fh,bl^<3^
vh`aS`W1"E]*;ME3;7sr**Vf>UuNysPuCfSUP$,L;=^pozN!v@?r595>RaG%B{5p3qH[9e_Xis41sw+_FsiLk9F!c?#

}XXJ0ho_>f/F;=`e@"B6jHD`XWN/-@TE!m-l-0Z-9^-".c[M$G=L{,3<B.!Hm*e,f63ZFfzbGJVv=W]_,Kky.-hB]T!0pnnDl:?kd_S6hAYT9?.&XyI!4U|>(1WJKX/UBuo&vR
i=*aNSexM"l/!7cmJVSa1tZH51[$r:0nf-q;*d:i,@;>xYia%9NFIZ,P6v`Fqp.gw@crnamQyfnEN6';case"es":return')`G@ibPpM)R4otf1!ER(Wtx!]a-DIOom34#hGBM`aazoUNU`YQa^U-F`*VH1oxaoB-BUaH}
om$f~DNcG)r.YsqkK]
>dy_:A)_m@7H)4Hw1}/`^TD0$xMO[=-sTTX%O
3)n%vKqx2Amhd%lS3tI+
vf/
oRw"g=T>/KDvEXcI>aPNF>`CEv}wO4qRBeF&;wVOx>S
}Ru>N#VnsA0Bbax_sK96w(@H33=[[PwKGB9z#DZu:
.[uj"E*s.je/><^C2Cd[5ngl{K&+MdzVvb<1dUQ=+;J<Bo^xd.thRPu*(k3j*2zT=/m8c+r:V+|M=".%^:B;1w2oxg#4}I87Yz(M>n2D0Ofm>o%czH+dEs6s[/
iz;
*l-WY`IKX`:AF<w)-7hq,<H|DAvLfP"^7JT-Q<0-Un6zp<*k*+@SpDuNHSnG!+og&]pH:mYJ:n`GO5I%:[_YV7w|1?<.NUR"kUVM)*FvjlN]c7a?gVi?NNymNIJrlS@ir|oNZ%amCA-be_;Br/<:R|_i&a[_:Ngk(4a0oUwp7}F2GXFPk;5)sXLEX(Qu<dINQ)V4&#o.FR]sDGNBtT,5bBMgd14,tSim>.oZP]:1^&&B/w;af)QXEKSE?4T&g.G+KEGP`0#O)R[8)$9E!N
`nA(`>w=S_%X>0NSS"-+a0?q{8pP8>Z?(k/2sC2>i)BR(6H$(J)?c.Dgq4t>Cw$b(oVPG%R?TY23>@G*x)",ipQjv#OUa#eo&v@b_h:Uc[|4e(%JE8-?kEYj(u.OD3TJIJrCyJmqr#k9)yvJyB^eLHIC+^%@z/5aiC8X<@ej!s9]LNu.ERRA|:.tOR$i9IN6_BV/#TOOiQM]yDJ8]BUxEQZu>
>g=B2BT^@C~q#2M$/_EW/0fpJ`sh(#7%YQNTts;qL6ybLaTL4uHw98"1gCrCPi~gpcsk:xTce)Wg554(]F@#-d<D=U`om,!R:PR3)j4qmhwZX8&h]pBriM*fgz#,~]D%*^v
|g~w@H8MGxcyjRdvR>-ncWv)g8.aw^BD@W+c@,$%Yx)>-#XfL3k@>KuOL&~yFM$Qoq;Tu(8Cp2x6Pr*Txyusa#0a.!&8Z%R3GgQ/3?yf@M{qblbZWs{*2V42+v;kN1of
(Hj]]xyc,#oz0tO)_xvJ;Ma5Y/.3QeQ`[4lUE}ic=(t&%)(}DWhs9d.e8e-&-8Hk*f_;/j*)2%*I/dZ=uI:eNxf-S3&.=3ImJ["FY@3Fq}9`AA/bF|uZOpEvpX7pea#mh_>yN,>Mhu%pp-!.eR1PK*dIFig.^Bwe#]Ga:_j;JKj<>jk)-JD%$C-m+PC1gL9
oCmbv1Ft3
[nr2=^?Gl^>9Nxx}grPF/5#AJpb!S&txm10}fS9h.QdLA>uYto8tBB`%`yyBwn3P9OH)i
dP"a/JH
QK_U<rGM*de:!^tcBm)eYOYhvW`HXJ0}(3d/^;uo_tjH1/c`Wv"Oui:e!:+B+4_QL^+@Z(;A3Wjt/{u=[t.|xDe`$of#S{])n^0zt~j}Rr&`6>lS5g8S5eR@%%`ASE3?Lr$l"_#EN5IP;O:W@vb_*y657t])uxFKTCn]^;hpeec2p8*/ox=7Gn`XJX#iT%lT9IfoqKP&:mk^>QAWUm4X26N@9v6qk"oB&V#{6[+}
&7%#qj$cTAH^gQDOjFOdA8+L8`V#wBg"l27fIvXJbD6`pUG(Zk*?_;KM59o(1;qWc`53$2ua1;j$Kyk`1/M5=1Z2cpo1@%z`PT~,eTp6T9"DX22C!.!
F@;"ow)T:c/,;#ja(O`9EZb*;M`x2rZF}VfS@E8H>%IoL6r;Y7Geo(+?Z
hO*Cqwg>4iL8QgunY3U<3l,M@[=EC@b7NH!gqvtH?7w:
hrH^-500X!Ag1.Ff:=`h?4T=_g.N%j5Pk"(M#4SgpviqBfTLelS!uOV#60v

0]+s]b
:b^e:
Dcw1EP?X<GoYb@bs($]^/e.U5ar[+e+E:b_|^0.JFPbrU;V0qJ:dF]BGc`@{x[*7<Og9COO!H82.q+u768Kr:Q)akp`:^UkZ^yl/aui1U7pap^#3(9vn6!QG#5YZ55e9`P)dxPQPF-Nh]H-9T/*x/I*QfnKj/UC=GeHG%lg5g})QQmcMRn[|;n:znu
SpzTvC&9cq0Yw43]7//#`j4nP2njL.<a}vE[jZ/cW2}56)&4R-}oA>4("hZs~Z=Ps6z$%qDpyvypd^,DtPnOU4@`Rc{mIHJdd<Mm^f@K0@)]"GGECx6I#a(0+59y78SN!]yG0Pgae8Ud(KD_a5Nl`n>i2/X6>@m2M^EDu5THN6&gor7yYB^V"f0I9i+EQVqKq@e"j8*lN)3h}IAgd>0XmHemirhBwJb$|6Ai[5xwPs)w%8b!@UpQ]_xGBFgf*qrb*_BV[m-B4IRI>n(MN3BprReMRBMLKQj>^g#JsXo"?m
`FCPradJiI8_$o5KKYqr
1j]C@;*ipGPJ,D4x`,ET$3V)N?,<oF54qcOF}4}xvRQ%hiZ2J$spYoRf?HBkmnyi1jUl
JAeoy"YD6xc~K``;.J6DwoC"qYZ+#kG"E%?&s2_Wo]!_bNATw&gMwce`[j4-c:(AugM)k{2t^F$soCW*1"=Ni@]jX`UjGJUmn<9z%QO.A|xsaZOL.AR[ZL_sN+]gk5Q[dcCrAH<whxq[@e2)s;<g0=FU)YW;j0tE%^+RYv5}VDAOmu1X1fX@Zp([]`tU8M2/ya%dURra!"/&!V
<kLZFVxb(l4:C9sAJ$T@Kw^!uT3:xmi@$fC/TZ;!}d64sVO$)-^F&0AwgxWh`Y_Q4>zf9fY@96A5E*j?`XyC(A4VL"P*Eq5q|<U-ydlk5@[I34B6oZBFeRhKEW[?2ZwCe-7[<jW?OU0dqCj*im+D4=?;BB<GLB==nSu%I.RAFQF1-`D>-dt67q$[#C!Jlde71V=B?Vw%~P6ZT%e4`^]Y!XAn-O|.j`O.nIz<$;w:-U8$xB["3g`j"x-<2$`*ki3Wuxf(I-#x",
F?o%!Q';case"fr":return'#ZuFD7nZ+.A,_NNbjYGQ/(&N"$-E(_)%18P;JWHm0;Adx.QTK1gS$FCwccqI)P{b~wyyPKgb]4(Z!SEIx:gRKy11$LZvAs~&ln=]:
UA.*Gj(a&G2-_1UHSCk0rMnCvlWr,u8)#w&X&Jux/86<5+XZo<fBjAvwGaU)D@RR(#/WFfp!#]|XZ%t_@rEUf=nxwnxaL8
YafS[J,b+34Q^.)l)yNi2[M},yvVt.G=GY2R.=9xcseH>UR_eY]2jK@+YrAk`Xt8rHB$6tod(rIGlzs9J!<+P<p;jO=`VVxp75V1f+&0q.P<6Ck&EL3Fq"DMn&T0(uJ"vN#0V^$35:yFwQ/hB~<HK<Z(,8Kmd87Hn[$wQP%8h3jM#V??[2:#$Yr2(`lAaL]-v)skmUhQ=~7xga@+*5^yc"eZLF5ec2Z5LM579)9LD9g/WeVd,YM|>.:XLd@)^L&;BEC~M~>mM,5?F@oJf<A~1r;>/A51OQ-<r$]iB1ORPKi$+$@)FR9ycY;`HOS2T}4vK^KK;5B}qm:D(
=cEP,@g:IsEPM^92lOQTpg1A5JpPv_G<;"6mP0;:V/7WgoV:^AJ9SjEs7Clh<
FE?a9tuABz%kPU].fSEMV*@7LI/`3CK)0Sq#5.i>h+8XDF%G
)KOyxXoY
+s7:6Ck_1S5Er}dOOO;Z6#m*<"U:dpuIE8Q&/R8H9rZ^@Hb%g{N1jR@v.MnXusk&-d`@:cWq$5^eZQojk)=T/SBi1i.EUtYP(V]jxqqo@xe5&ULAl&5X0.[4@F]sArFPI+2ZToyz:=>985Bmq[7Ka?E*[*pEM.au%N5CR;X;4[@j0Kuj+-aJ,cDg+"(-umL?ritIgHP~B}w*hCB`XfM:L_6<gN46:$vbHwc*wQ1=55>kByQKhA%a"(YL?E"f/qjVZAQU+y)5(UZ9/:Xb=CNT`0p
&3(@$b(S=[ZJ.G)%pa.?h^E*s25PXu@fN@Hy"S/CuE_?UH/Yt2LbNNhM=tNh!KQq[h<^7)1]X>ob`l_LpT&hIJb{(`4~P5gs!.RD8_um#~8@Fzmf8[gxfbC:Ouutx&4-$3`y:Cp(D<7^>u>RHz8d:lmG$#XI$,ial;o,xRn40LS]J;@e6A&tB-ZH>?ABgl5x]N9=f7foW@kmo|r$dYIj&:W*1":u!,f5/kttCju%3B,r-*e
]7QL3u?7"2UVU&#pqGHKkkD)N,bk]@SHc?2Q)KTjj}R3*QQeC],vAASD71H6n050uRpC[]?>xzOco(h-lSGyrK%;V)0v%C%7rD:x]PrBUt%-Q1W5bd?nGlJ5;Q^%31x$S:E~me`:>T>1/qkAYgk2t#Z:-7el,0^==WwtU-qfuUbl
mbzJa#RhvYPf&c4."t~dbkY&`[oKl^}qvv(SDP8=x[OU{=h]=c#"!e<Est3J
%GS*8m
/(#)V>Z$TF/5a>{Wv<~H?PfN4D]K}@bEt_iN}Ohw+ZaQK,2Q/DKtG51
0hxA4"UUg/&3h5dbX2m1ogV)eA4-|/~U_G:JA
`xs#h?$S$mA.+ZvfI=BM69IdL!}f|[|:QH.Oz1P^6sl%DWlx$3"8s*0(&8*KW4O[n+W)C
Q@4Wfd7eVakpC=.,@USNTL<xTMJ1c5DDXx}/EThh;.$X=^6i!V<X,Dw
exk=p)WB_d),%:("y6Eh*4xo/g=F(LUCr3EulLvHh3c
g#582-ywQR<FfBf[
:QY=n_GM@K2{TQA_&,:0*/@B>#PiQ!fG2;P"MMR?bDisQBAomRbhkLmTvw6hkT!PHF
eP8_cyjtjsbgx]3GrX_!kLl-r#%32R!PXNg0"^Fv|FT>*t?.)3%e%S`=z9[fw[<4wR8:y`MP7f{7W<jnbI1Nvpo3l+EAC[HB")ie)&3VZap&
($3R5?"]6jnHnDes5}9i<wAhGp%N#E?og:2V/T!YYuXpC%e[bC?.9d7+Vv*bOF#QG!Stn&"S`e2TrR?<?:%g`zQcW2^xR-vVm^]vG,ZrU`>w#W8j>1$%<jA{&/UN5cW-M*?_n8):Qg${+3iH(]6V@m%STH`K*24:#|xm8UT|dz>r@;bHlKNi)|UUw4j)P&!uNG@V/Yo0M8eV(VO}&&@P+f<=;]jAe
e,V.P9fL[*i;dVe6(>
ni=Df;Q]cY}hc`2vq+^ShD;AoJ90djH8#VtUcL(g32jBUT#GU%a:E`|i|KS(LboLq&5`|A7e?,ck5:;Sf?F]dE{gvZZEm@St"[9"Q?5T82jlE;M9:M9LC%!bPXEk}s7+1OTy!"=O@SSg=W_2DK3&<:.mXQ}L:JJAEXd2lysvs).-~%nrd.<RaWHW"oJw9gX#Q:_/725KHV=CZK6I"IzKh_U8e(Bk:r^gId8lbZ8-G>pk%:>b&5K-=$J
C
jm-8h08YV-`1LK%/o6-CMt.+ei;,nlRQ,Ff0g_3<E+;?F9ycnFp[siJ>ph;1j-G)}383.P-Hmhjj,3,&i-%m:S{Z,Q(4/t*OPB>do0*JuTnp5W4VMk61
(pyZ]ZZ04Eu@ZOi-3tX&fko<K@MTDvk)(U^=r~Mp3"TkK<`C%v1~1qaQRuNm18i_aj1ZqDm}E_k-*WFNQWI%Y0E>0^Qhq^CYKrqDGLq!nAm%_/78b)1G6Z;41K/qluX7^@J,Bihwppw<;^lt`S5v<oSSmJva*W-k#xKnnvc|4S&?UjGbv~F&-
Q}nsffO/aH8<h[@+=)PXtD<#sb.:ad_qisj]V@;cZN#Ov[+#Yf)?vK#Ph(A{o[9d/-#Z,gdGR`GGG!J*CJb84[5Xl(T-U{J$3rI)h7hu;d=yev"I3c/"*pFs?=a#G"d
u}-#Eb=`-e_UU&L$FoVH4%WP4EHuT-1cE==1-oM%U2`^DGXdY~w3P&B:A-uV;^dNqz>:Y)00-]9H<KY~S{HS(vU89fr7ly7"4JojIB,s,17ynHW>WdHG4pNFdS^p4#tvyYN!M,t%0=uqneifWJ.Xr&s+Qc9g=M*NP50b7C/~ZT4:s-ygdsKB%YCx(7Y4%:j>vcrqh;6F.t=pF)#oDqFfNL=p=-_K70[yr;$qgL);Tw-Fp!00o-pB_jN,>aS#:5knGl:ifb)`^HTfl#BWvKbJm/nd';case"gl":return')]^@iaLZ;E&K,r#aEC}&.wqY*Wu$D(()z#]730zUu^yDZx%(-Ohs9wb.xxLCT6{_xGJl!nq:#/pKJ
"d}B-^,MviCbx/9`zen7NJ9V7a(Nif!Mt[[6t#-;%E-9X%NV$V9^c?U#j5(dJy~C0]0et4&(+;}x4q_j>m5.4E7mBY@jo*fl9
g!iwy`+kNLkjy%bJm!J;jMuxxWQ)`(>d}AEA8c(iB8bn7Yo7F*peDeJ8%]GH9lMyceBgV_v7tBYf&3IB;G|Pe5-YBOtHuK35(aMw5<SM=;%G^,,e9T7(Ss{b^[DJpE6GYOgKlXh[:XnxmAuhw8uNRooXF$|W=P47W=%"g1%nT@*nA]@1-`8XmeF5LDW$NMR4SO2d
0TpAUJd>cUPBirE&tv3.vLC@nkoGg@KJR6qw,4ululK
PYjK=("4RkQB]nuqd6,wNpLXCeZ?9EG`g`:&6uKjt.]IAZQy,hQ=T:]=XvjIt2$1]f<`uMBv@ML2k=x8YDS3PcgEcZy):clg6e*us7%Boz2n)Fpwy%m}Q-!wHulH"g@K6Bf&J[bd7<O+rT:xdy3By@c4!FRBC79AlkpS+(y:(|hK6CRRf5KNGLsr,.JavA#Y.4p40oqX(C&t9uy
Y3!R,*:f]<e(Ub1n:}$We]Q/4H@PT[q(PfM?vEB#urXvNbj~sR2*8r*6uO@j
UZ#%|-]X:)wo,!+U"4hYpvXq<M;*Q+.rLlv^HoH/vhJ.;+[dG#vPjIhpC/PEsJwv"eZN(2*HreEL-mGg|?uPIng5iU3b+GQi8t
-(]BHMmWd#fnpz2us^h1+#P9ht32i3)Liz7@aPwUq}K3=Pk
XBxnHP#+B@Qm*[$b"K1).8S8P5U}clN-5Z$lq+6hlV0+5,=;/8i%Qj:28c#IvpGIw)G^Lo6pBQ6dezLtR#rX4O5y.:ffs17o?m>NuA+[ht0A,~Bz9
0-b&[hmKdqq:"4<)
bsdXcau5:&Hof2NZ0kKBCNE"-"Jm(s5RCurdKR9#8cQ9}-"e|cDu.Zl2*r5ct>]SV[tS&=~Y#?/ue5n/00.VQ%/1?Ct:qf=2qy$H2:HDFTo/047h;cuakuV=OK?n%F=^iayeSJEPSQ5lQQ<p~y(.
a{bc"z6oWv,xAVMEN:S.YbBOP+RO;p/T5.h{H,@=`h;]qz:
(AcoG87gnzJ1eDvb3IFl+gYu%FEg-_I{Kufl<s=rm->9T;u21-66p|L#gSuT4d*EQQBvSPFgro^91*)O3Jm_&
=B]IO!p!BT+=Y-L.&>Q>FJdR?*JVCCx(^>%/-8cGt*)./_tq!)*H+p
Od[%SAC,2vSV=,]OmMg2q/X-XGISVg}L!&#H
G8>25G,"UrIG`$ti)?K&6uNrfOu^eQ$>(rQ@5O)5mA5[b1!=6(R-9#mCyDJ9#5nBdNjWEmEW/ks96~1<=mk}o?K8($<!Q8P,)W>uNK%;OAZZA@2vavMVZWC4<K(ytbxPDTv2z&6FK^oAf"b2C2:<u/s*H/w6Jvy^^%yj7~[LZrk,3CGvkP:Bn[/ANTCl@@U(i%7ZvRl-h/aCmJe`&nga(?]8#f8OQl%)QO&DF$#eJg
Zv;PhD)kkhFp{g*jC2
u6*(1a2oEc%2;8XVD["ys]l6Yd&""_QD,{OzYP>>W#wdC~X6oh>.2b27jH*EWeiv@ai6J(=sOh,Wnxy|Frkm*c3O/+LG:-I2i_Q`&8r}V.H@ZpJ7dbe0@"8Eic6L!RlludMu0wc."R>8OzxS^#vvD{$D1NujrZt7Q!GVN^n@8o[q;*"&2CKm5aordU1GXjhaUz5uK9`0O6UCh9C[P{H
#D<9K~0-94,4TNQx+Pu]HLrwnh?Qx1y94z3Mc7k-cwfD")RS5?]tO)n9X#?
"o2!aq`ehk!(7w0K8}qd]Q$YOg6sTma+8-ay`kM/%X3Z*7]g<BX$Er00LM"|;_7<9r60YHMLw*JI%wVlb8SmG
*CEmu%8;NwqDH6QMGh2vNJ9"3D1mdxg-M>qGxJB4)_@F&LCFGH@<ijUdcRHqVzW*3)cs%wu/cVQSW**{WY"H4|CQ-|51Evc4E]=Twm6|K`s!eVB@<S2eJh9SJ*iVnE$_)!;UB+RdChnmh}.6e(46sA^hF%t3Jx!go^SM[c?5f7!ns9$SKbDik2Z[lSWHq[9G)c<X3Rcm#-kzXuZ,-cFH`>s_dRW6%P=ibf,3ju1X,)b3%iRdh_>nF]L5R5Zpo?XPBb5THq2RuGepS$6)uZBLa$LrdJ[^6UwtCWh0&_%<:DZQQBAefx1{V>is&L9Ul@d"NR8yq-l6%)pLZ*+*hQAv]:I+DN"iGJ]Z3%d=:X`a$msChAL#(;.YbX+7.zhZD6JUU+Qn
AdC;s@`!%Z4y2z))!cr`"!xr`WF3j
m]dMB!^!=!eZbZ
h[>MF:8_&B1^Gu^C
Q_AC@kE7+[k:q]+7JhD4]=j0_6ZgFJl^P_$Z4Z@(C;+52m=bf3P[?eSbeu6R0MOKw*r8]J/uR#:XE2f,9@G9>N|T?wcv./ea-kEh"X{0`vJWf=zXs=cL534C7H;$B_2TmyN(q&Um[6;^:F(@zZt]rEXwh&jjXTHsP0,dY36EWX2Rf-r
6aK%>8el`[xS&_WMOV]LnPH[EV+j*w]C|LxGD(%X6RqTR+zswQ,<2L#@/TbZf1G)nIm.h",l*n[OQJ_oyJ^mEre;YMX;ifc=k,N=xo&gnjKb@`|MJu!vT(3S,;kr/]F88]($,Jvl[ScN&l[
5Y&7WQ8DU&H?GakXzyteniDR#nw4!1E!#+g+<t[8B
o3*WN;qq/-LgSP`V0Cz8?,AuJT74GW!`%uee6q$.mt+S(<dRl`,SY&fOs2aO%%Tev0P<zYH$,b<aAxt%(c2eH#RS-VNv{>
iQMQ84WHi%;SlIZY>qMk!&j}/mZ{$Ujs9J+S^}U1QHx*[_MLBFtxYB8Bz&&.';case"hr":return')]^;;6L.!/$*#wD3u*r)Os{)]%LYy*%P!LF5)^g>ojC)m;NT1"!xf?$X(/!Q9xWnSLB7fRlq%72`F.%i&wXS5:>yWA"w?9QxAh%SGg$Vvg}Lw)yavG|bU8~j9j-Iqu|&[xa";sV04a*7`R@sq057=bm8amlmZJ{)T,z-$;KmKrDO_5*.KYb2,dOo&]Vg#@)ADr`xMNn64({CWurJDB-43wA*]@W3,k{o/PbA3yOlkFoQmVQ>/A=)z`Hl0vqH[yn[Q,_W-c);Ec9Fh93
wSN!$b"!RH1Z]UNnvG`=&d)f)aIsP6<^*qN3#y3=SQ=c;]32]lA&^Wnyt8P*V[CFpFnTVXkbP*CayG{
M8Md
aG,#PtyD,qrnsSJ((zEXQbP]?Wn19SeFeAFw!^rn+)w`KvUx8XOyT{@{YN0#%K:Mr;sq7|;9SBl*.6iSfFlfjp/CvyKJ1}i1jP?"1|#mD%:qa7B^vL
:gX^&u]Z/e?<,<GDqX,O=Qp]FJIM/pP#n^cz)"QWhs}a&GRA:,=6SL[><OXweqULJQSoD#/ap,9X4Hs3)?_qShLMqiUaE^q2QGRB:D?F-[|$%8MUBT7D6?P(b++Emb5BA9`x?9Dn7>UB=#^XK:c9rAuC("kB{@yweNDp%_IEBbrKE$=T+<<)%6Er_wNLh7G#3yki3iw-`96O|2b]I4;w_w"Hhf-skN@>5GTN:wtd~?qiFHT&0/Sp#N]6dXB+`?yPVqkie
|G<=|i/d=kk^"#8N(1d46!.xXJ)#++@y=^FifE!c%2e)z&(&hT*P[4s4x
Vq,8aW3TG;Q=Z*xFuUoRI!PiA#6$:5DnlosbRCF_HaI6{)r)Ghu/@8m5*msH;rH,+SPe`
v>up8;Q.}x_[2gqZlfSIyv+V.e)>Q8TW!c!JyeQ>UAl%C)Q*.qR)dh<$0aj/.;Mq*!Nbcy^i$ONZw87@",=F&.Cd2!YB3&c`.n/ZyxlcEwn?9
MCrw0=!49xMeTu|M]^a*E-@o)VK$O^Uw[2)8sHeWAT-fTqQQ?U
SLbHxaW1xI_Sg@T@=R1rV>#7(vqOTT#oV}7ze_61)Fs@N2
L%xt)reh$abDsph>^3$
f.E30lA=nW}X}BK9>,bb_D>%7CuX-iD==cY2OZ%PL+(GxIDiEBBTt2I`(s{aQEgZxc9/DOMX-Rc)tZ4pxAawPX(x%",#mg{eRn<iLaa)EOG2Z_
,6b_+!s/gn$]Yiw`sZ-6Xm"8!<#_O+=Tw./__IQy6GWlxI0}R3)&R[%uN,;pe-g:9M4C!G9LI+c.4~Mkno@RLb![fW&<=gJ_A3CZXVVM8Q!yn>V93+%Y)%`lg5e[-!1Mcfp&%HV@p
n5Guv5"=60GHY,-+_!nN/Ap>8<"H#xf.Fjj[a1K:"Vf?CZV;719rO59x&Rd)ozya3"]ck^Ca/_KUP".?vEHT04,"%;K>x+1&vC^|1}GRS1%1N~b{NgUSBQ"x,V[$uQ*{iGo.$K7#yff{$hQH&r+_L)k(CMFg2VX{Q$o@KJQIW+;Y69;+ZfeQUH+tN_*=pTJ5IWZ/03OH?X8K-AiPd$Q+*0NWrIG)Ogf1>P<b5N7Znpj2*M,u#:jS.C$W2$/[1K^5
LGw
mSSW&Vcg*%5unD9YN:`!<g9:srTW
"4(UC.P1]@TWK~+qu>#R6dt*<+`uo_]@3HWdgoWJ:i*Z@@Q]OGbYuWhthJwEfO#sr{eJ%K7ux=7m<Y)uMY]B-$E[hVJM0{LPq3iQFFT(
XB[7BR34$dz4"MgFvwTVB`>^y<_MqS3
RKdtMlRIom,dz(]Ta2
A"0j,}<.^j(zeb
HX(og+Q*EB}A0w,#)<Sbo]v#cr(OMJk%]g&le1<eESERX03QVb
I~g[$_]3jN9q=K<s@q*QSngq,W1+-5M4nhgI=y198UZ=tCg#AX.<:I4BCr"
O_
{u-U*CtqFtGhsjvfC/CC|g.If(W47)w%|.Ud2<MC}TrTkHoxY>{!GdU/X6CcJ"<uX"]K;A.WD)I?nm5w(b
X8@i5t2XQbM.ybe5Y&LZos^^ff5%y98X=yUQZ/b*%LqysGaqqU^h.{95HxC-1AjI;|)S;n,@#L"pE/fVDFeUuy7Y;Eq1qdTm8xm9u+c>rL*+GMRcH::H=@ioGU
u!VL5=Ox$HR=B17QS30T)8Z"he%,AvMV(1l@:#}KC2:!i<>GM:82.pcY.>CY/.+oK!?!WOvf>#H9$Kl@!1??sH;8gqw-=0$M*[[1b;j@RjTW4Sz6Y(NBVO*@btKZZ`eCSQRaqb}qDPcqJfxs4lZQfnMCK[?jWqIUPsv1"Wh&K"h2Xpk"JgD?{$<0BJaj;!I>&JG#1XIz%]o1Wm<>*l^DFPTe$*Olp1ZB$c*T{MTW#RG0V>!Z"S044A7E%cSLDFPg^ac"6UaQO)uL+`z4ncB:E&(-=^0=fL:.<]cJn$~857@&7G&J&>%9{E8hHNBNYT]Fy(WT$R~h!H-X^H[KnuUCJ08MswS:O2_0H<dCF!AL2%+w:$uIF4N_ZCV.T3y!}`*N@V5`>tUi"kX+->aP
jYQ^GPN80m,`JfC`@eGdF:VU,5oLdu6TejFhI
5jW,pDpE;l`<A~/(CJ!c75ALr}eZ_`Ri&iR"%%d-6~f:*<1j5@_wVI%GkMDXD{KTFS^kB"g^ntjc8Xoc%.<L^DVxd3!yu)JvYI.x>y)o!{d>U,rmmhRxi6D.P1KeHvv?`Xl^U}TJ$sb6%$V_;xaJ!ZN
Vy_g5!4B_k.?_oUS2%b%X`s%JXyVS"&yY0op].#B;ONJ^<i0%-m.l0Z%_zS:vb+3iLm>
v.h^~RrCH/$WbUdhuk(@y8`l#.;9@W?N"__VaY
EJk@>MU,$9[eF?q0dsYKy@xcYS`nt1I)n7/2J`k+BWLuBH-npuFooes`o?-H]lo<1xDWivvg?<ij_[Q5KaSp-gEOK+->+J+klky"
Om3V}52[KY%X(NEM[Qy&]stSU)2D:hCq&d+(s)X.U5E="eRyi]v$F3iTPy4#Uc:k@br4Imj;BC2Y#+]';case"it":return'%]f@ibO
q$u^KU69XY:El#BNN=uHd-$"XWzM|CVJn(F6~P%HH45`Uv`a.kbxcq8g(;WjFAMYuCgufX#i>D/i$v_/4ccg}tK+Q&.ut6*1J?@y
_`g>0N:
/vg&1KF&Y_VXDKkyg3Ry>v;zsoi[k^BVQw#4XGi&e-&m^Ahm*L,URE<9_}wFju:@y+#9@Es"6FLp^YZ&Q|bzOHBmWM3/ct<;Feg7P>%l?2CYb0.9Jt#q[?ND3af"C%4F79IRSk_,l]$bt&+_g
1{8:oigh6%Q7K
5#Q2V/7aCJj7#dH3J,-Hj.;0GUu00Mb!aesWB}fW_$<!NZ%s$r,4TbwL)]rSqqw/-*3_t.:WV>NYWae`lx/xn.2|9z4D/51Zjmhu]*7kAQbZ<%$(k`1v3Csl%cp]V0v)H"[Yv:,9c,oDUtl?nvT"IT3+_pQ+>Ay3/ZYop46vvN/x4;0hcX4bO>][,SE%pCtc=l)i*$Buo"0Thk2u$Al31L@Y.?k3k7xw?"om+m]T>v$3/{smQ+@sOI;fk>E-+S1HHKZz#;sa"Qdj<0PXFo;u;m:,eKj@=BU.aHA8P;7a;olWS_)q55A@U
sq<3c5o#c;dyp()bT$X176>NV{3"u*Z*5~WNKp$E4@)~PR?l2ZVQ"F
[-9p24=:ISkpQ+/H)-$o&GkaQ)9GxBgv+O4[y/)*KEF?}K3]*`0pbv9EE(~_YrfEkAOS:AtWB&*ln8A<t,_`-^"(&tRD")Wx(2XE>17)s+.Y|c
vFba6k3!_!Eba(:YyaNGSAguNH]n^=mi_2:vn4O5E[-)
pj[+|30:QW_abYigOM)8H%g5[o%$12Y<jd!@&v!f/`njig:kU@hyf@YApcH6DQH"7:ffY3V3w"4[Ri*P3g(q1[}nZ!]f}"}
nujBYv#@YZp4[3k*Jtiu4vDpNm"wBX9KMcqAfxs_l)2eN/&-$^.7OcVa%dAX%OLH)HHN]7@7{IeG!O}NRSsgSp)=y$@V3%?mk5AxAx&*O3{.2*
0$0{VCA*,mJm:5Sf
KCp.r.8K|[_KDEN^Bv)dVSjy/qg&mE4c</Mx-"L-H@F:~AtAv[?U&@x:oKS@QhF%=?qCc:aa]u{JtUe4llM^PH*Bj+mJ%kp>DXpQ(sD2.QfO%ivEH3N6+ELS;^y3aho1wBmS)4&IG_Olt7*+ey.YV6_+asi9?T1$Z:+Ms`E;}2>l*x[j<6Dn0;f_Hdp/l*.YaZ(t^j+m0&*u|SVT/!=2QZ<PV=9<mui.M*BmvCu/5;F;)/YlZojh]<.idlY/Qm74yv_l:_]hxWR4Y"Pv<%_?d/zsW0!:@@wpj1Vlb5OnJoqL#+"+<0gg#C8!ZSDK>YR;sv0fwE.wRvuXZ_Lh/j=uU%/pWY8,O/rW%YKZi@^(1V5a08i2t^1<]he3(*P1yg?H{V#rfhJ4bU>l"AbvXQ=S5Rc3DM=E$6opSGl>5HLv)5N3H[HDnFmbT::o`Rq74qyBrx?;#jfl^?$.][^-e;1nQ--gBdPvI5r`7:!wVoyT@I7X47WC(<SS>3<.o:P`jjB_:T1?JG&y(5@/{ogfq>6_6&QJu"}:yxkG2ULAJK;3Iq~JCm(iLd5yw63TJyeqz%S:%Mk7_9y9I;!A#s-wk%PtBZfh#;l%oTF`nqkU7/xlosGuDrEJ]D/ul&#pi;DZBk]YmPq1~c
5.xC`Vu{?6RB:wFQEE#vqZ&oKGLaKO7_afK0IEuw>*m@g02[63T>f0vdMelO)VDEX5yd:IYUj}E[k#_,>CJ*tHs{eTm=]gj%mM
K[PWGq[MV<=`BW6&c?ujt.2mGZ)6s8qLCpibKWC6IaN_H**,drKLjVs:~3id`M|4ELsMd8Fe+aqO;=I,/BKLtas&V8}]kx-k<uxJBYd[8dYP`G-APoTu!nxs
H4&vL:vBN2x(IojovL[{KjE6h1kP)uTSMN5:&J$Hl{YaULKfNQnX!vfgjnNIKRAR]fM1i-sr7sxv"j+GeSL.G0#:,_f)=z[=4LDlBT1xoMv"#dQTd#Kd$ZFgC}:f>v^surhQBUxu"PK|+DdsOVuSE$t_d_s8opN_SIarXDn+]&Fc)r-0F0E>wmn`TcZ>_&Dm7J]p1"i1L6j1^s=Ry>k*PCH?,`f"8?+#X*%M9Y.gwNP&L:<W`iAJD`7O/4:CR.(g<$B:[Cj:Ml?P!37sff
+Uv+#:G=|km?k?$Fw/6@);C[K@*X,f$h-x9,(sK,g:X6Rr<5yG|a9J"`_k}inS(]"7D,tc4)pBHWCyBi1wIEj%y$4T{[`IXgbo&INejMN7@3yk;Llx2Z`(n/{"1Ul-|YiWur|$$UIf3$w4L6}y3q|c{c!1{2v6STATF^e?u#S/FBqKF8LgzWm4-0hITb)8chN?:k1Um&bOZa6@t#UP80TCtH:^n4m9h
<j7S.+sTaJBC/t}`2V$
~/xJ1<?u9LL2)!UbVCzU-.PS^%a;;sc)JkCNCVz+>H@OF_,_6W:
^elwVrBw;CBw8_ko?f6VacIF~B=]VF+&|BS=NuJ`P5RHRI&"AsysAv:82jMn
^*<R9H3}O;9:UQU>XkJp.A?*O$!,I@5iX9"lP!7s8=iEbwK$^.%kLY^cVI[NSm99JLI"=J<VKI
"==.pUCGIi7C&9gJEWKi/<LGo$8%)qCmhv7.!#sba$@';case"lv":return'&h_:X;~Z+0v!:o.+mYJ6XO{kg/7`G9:RTy381&8N7-;0.NWE<laJjbJ;9S
SiI7(#YyM%vt*9YUD>`d8]jfQiej<IBtb{_kU4X9mAO=.RKXbu_3`]H)`f4.[G3]nZ7?s_7`xIa5FphH4|7ikcku)%^e7Vn]D2OGVO*gmX6A`GZX]TQ5hJJxXT<,oPwqGdhrXgJqB?57s1xcu9RY2r;Bha2kC
<.>(^7eHO|a,Of4y=DfwtF+#+/xI^*/2I5m9:DtF[YI4iF2qO:2coX@GbIfmD&X6IR=Dp~jJ:/A><gyL>MKos*4{5V^e]A_}M9_y#+w<u~Jr`3JR3-&m6HPbN5T);2V_n]]yj%1]S]>fM`Ak#jA!Hz!#[O::HD@eMjOLHdJM%F<mB3066Jb)!:y/X6:2nm#kJoJ)BzD6m-ag]9%l]%JD)hY$H{gge.;.FKy;+oVZ+LK=T
@rqZcq.MdUMs3!R.+fj.ip7W]Hc#
)U=a4!u^cHk;W`Hh6)sK2YBmqmW^4J=Ee@?DsDmi,ya`9,w$:>HP|
[h??KKsB{A]a88zvxblnt5r-bV/^Kb$dXTDsMq]regOV11lyY_83gL-Qz7dnz)|%Ay[5Dv^2>.?Mu=;q^4;wHoyFyyetf$e56l#k/;sS;L-RY8U<-53Bi?Fl3YGH:-M^1M1?S[)@1P#%!tl^
@q>s5e[wT#Oa?pXJM}7F&fNsp9#9H58bJ?ar#%p-Am.6?|">tS[C^p+k:T@X4{v7=8E;sRJX;%aj]~#^m~Unp+5.#E7ZG>;dRoU{$~VOlT,6+4:G@
]bgjbXNvXEJ0*AG+bjTYcTe`HCI~F]af9r,,Fbow3Z5
&GG,pxg_J1/q4QEW.OhvN{B~>p)|0KoVa#U06RA)=Kd;.is~6,CPRDXE1x@/S~nUbFmf])ZHn!a)Pe2-(.#4hCHWk!n4
Uj`6qb=EnWfyfCPc*TRv4V9MrtQOS3yMT
$E]Mh8{qT:mw0#dm9q?d`N,)Q&"`^7$QF/zLi-)dmx#^(yB+e/9s.rqBi(mM0cdEp.gpQl/A*U:
&7=$pn8X-s]59dVqG3meSmoS$;Mx$AL2lNI$z6`T<>0W$"02lLLVf[NG)AxlC2]/~3PlS@|655F.kt&2KJ`a_#64,D4^|C
1sbSqRT2PZwEs@VN=C?*JpW<y0o_&"=M"e(u5G!<8`]loE<:ZpavN{4jHUS^W97{1.)b!kqMUu,8/tCy=Yh4v)KS2j=Sr,m&xAJ#N
PRyGHpnm=7w-k%cuq7(v-}")h*DP1Uy&iyn;-T:a)5v0JbA_2#
tmY)$RQ$B$yO$-O#Gz)Ub%M)R^V,Ktd@7!_-{8Ue[/7?cwZKBl}+bfg+%O9L?O;qp5q&5f;/z/)!`@F
VUi_"eb!,&*[gg,o=*-aE_v#k!n)SwdD!VxA}"ti9cE@5fv8W:#Hjh,?tdhxn82]qeSTQe.O;)4iV!F`wO7^zn&[2f$uf+[
Njgc"5y5O8kAD>=_][J*XsVgJ;(,io6=lQtrWo,E3Q$kXYdPtjKBF<`
h(gPYm(2qbUA;VUAu&Wov]_:3%k>/n?$nOQZ]@1[z-9P<AKwd%fTg8ov575s8g4y_5}a!8YD](
lT5%&#NyH3W`roYh_M!rh*hE!VotVbAn5D7b6AZjUcUTJZR<ZC(P8en
`YxH"F@b*<SS#rZm".bjIp[`"{EbkNO{Q3>}:<5z)Y095
jur1!Q#SAw574IlJg+g-ocu73PsAZKdGl)D_%%*e*>.8*x<<fwsT;?md]v><0BQ2#8)wocrr8>JYG#GIS_oLf~n]BBw7f,d@mIG52sV|PH9Cjx6`b3<>UV,$X:"nA>98353{TS6A]uk)!SlSR`w"GeS:9Lt8fQs(*RKnoJJO7o$MkPMF$*/bCCEgk5xI(-!&8i!m".19kdtRLsavBQXYxiG8cBkJSV5By$WFL8/|wr%0"xRwkl<GoMvMiG94t>^;w9T3=V5}vJt?Y$XOoYH}35HfNwO{:/Kc$J=A/m&5qT+e?:Q0h>[<0RXM-&=[wM0%epc{"</4,)l5IKT9Sf3D73c#Q("6k;9E7RC)L6Vg`gy[.JffV(P*uG9+2yMa&w3xv#f/03Q|:jhLXkTv!mHMCbW%U@$MGb6I;YhHpH8M_wiAa+-g=Q+NeiBq!vhaXrh]u,5
j(w,@+*mCo6$b!UBT`Oj5V?h&:
9r,;<=%pn03PLm(<pifsTh-i[RD^Lhn9/3Rj5hy5&jmw-VQq6pP]}D>L&IBMth@+0FXg
#u1YOhwd:B:fNc#}D-`ARRVfR8
sgr!Mrz9,O#_[u?>%g8YRKTq7={FWE[la;35p%0>SaH2@[K1]oiZhH=jijsM6BjQ5wv(`ew)@w>gbWCj8:|]40Ks"on$L0|$t]bdwR?:x`r^$<B2xSK_^6$dxURIJqyW@D+v<V&o}Zm.y2"fD.7+`Q-+?MFY%CDWAQuh[`"@>s|$tJ.Hd?bhNDR-FKI6}i~0FBP^QtSMIR#D[DpoS;yk67bIcnZ>g.paBds@k.z%,j^YV7cKY4c4D2c-Hk("_g<={1^cIAosm*!4N%c=s=H(A<N)yeFGx><*ZQp);EKvDDsK4/|R(wIAtr3K1X0=x^5b+j^$aSMCw-CYgUK-HPFT{9ik4OY6fh>:ukV&jCs@MF^^}9!l"i}Izd[N!hF.#MFc"vDYhI$P&bm1{J~TEi1p^bL]tLd^M#
w$?|8qO[emE!SsN/cswGW9adWH6rmUBxF5;gE5G4*&kUb#BsuuGC0]N(Tih?V!^$EBam;r0<8`>bjAum)[f@4=x;r+<|-
=TJr<K$T/c]mBN$uM$??if7F)=(`;*x6RkK
%N;569/nM97/RdE%?s"Y!CNVk2I=jHv<f&pw$XuYB~qhB7qgqJ_D?I,`UkkE?DQNnENV';case"lt":return'#h_:_cs.!%es$o=G2#N,PM9(7"Z3UV?iA?}e_3pb)cEpOh{
:>Yx5)qN@`}Bdcgx]3tKd=GR~J/e{N9M;A`n%i=]lv@HK
{mg&Fhy1ZlC6+,ab9R3k7cgqHB[_X4fKGTKZC.?@OaAGj>bA9;U,hJ)?F<f]$^IH97k"dJeOMSkjS.pV4aGReo5Bh_,8qet^#ootFJ5)?0%?QF?Pm.UF7`2@vH4lwoiEJbft@pS8ri}kQ4.iis]3"WzoBZ8t;A|G6RdVq0g8`G8;"_gV/thX8JA?kVqm~&AqZ)Z=^$;Ipa4t>
q7-nwhy=2.cugaSYYCWmn]$h2YR5~B:lKLaLd"h!?7^hPU(-z*?wdOVOwq~?8WS#eX%^Um??f7[j(!p#p;2p|ufT?+@n|xM%[@qy3W7n*?/OL/Z0O9be8Fhb>e8j"(|%wV?S1^q/.$o&_9r,!x$lxZXX
Zbn`i
MF;|_)mi-}O:v3e%vk=H",8+YE)"bnLSI~RdDQ@~>2<itskO9E.xRz-a7v96V=UkO9ux]/#+3"H-tQSZ^UMHR5w+G3PuF5>q.D7As#m"f/39&uhy$n?Q.--")D1QtrYeMCoxfzEiq|Lb%z5&?1g0Fqh(Lk3@vNy/4Q_Ug?z"&ui*&LudSMo~EVEHr4<2JK?QGL)lj,?Pr
JE7c
*"|;ajY8v`j+73Hyae~w0eK2`
k4HD=[X5dZkVkWUf)!B6EGY-,qYN=Wk;Gt/Lciq9uuhMN)x:o=4U3FeKna>${QRn$BUs?,eBxY
BzPHU&3OkSR-nimLw^GuS^Y.u:rvXFM5M{u^y97hoS!OGPS{wNb6*|N;,0"U>@3,u"I~=p)Qk;E3`V<
p+PofxLf"vJ.9|th/{k<V=itA7S4<(PaO/GS1h>Df_t{;=nu?*i@`i14x=l@V|1z8lx4XI`=0O0$Hz3fE%$.M>Mi@MuiL<PiB+G1D`>:L72sn@9tO3/D]:50%c&p`<^](wa??]U#W<,E:]n*
VFqGkL#fatz(.$y%*rm<5l5And5i|Yx,cb>.?/(EYjTf<gz/p`Eg6k@`<(Ur,pn?B6ywt:kwA%#A3!.A-F6(4E<2ZkNpOH+6R"L:yS5Zlr@U9"@y4o7UrQcYHC4hc[G?x:oEO5p3,vfgDC-
@)POZ--fh7:W"?L0C=*K
WY0#vO>w@L_HI+Y.3E.X46b+hh%8_-yoDxeB0#X&tFY<4=atL0lB*./"K6?:xv2gUZC+_WlQS3#Y$lFv1%SSlNnd[IEekcv)4AuBva!zpD",(q[Q)G<u1!p=ki#{
]W9Sf3kMJ7g4P*XkOnKZ-IT*kg)d`4xig/!L}!G%vpdtB9MxYZV%KeW<+:6sd(dAC6,Nf,rDh-{1$F*)oWV@<fL2=w4e/IGmp>Kdm`5a7mg5Ij;cYiG4VLG`$J^"-=S+B>q#_8UX-40Z(+`M0J?CJM<L5?-$n_hBFN:rQ#2xhJGl]+`8qhfrRYiXcSy#ux}X=-84?)-:!V^fQlfTyyY9_/$g2uFZ(*x3BNQ0mx]g(;9FO#Z)crT(`XbT9P)Xh-DqqYm"O*z*`*S+Ed4y0VbkAy-=wB*kzSar]2vAjD.h5Om*}=uv!p*R*3~GaTY=k.XEH,x5w6yh+q,o32bh3^>a_<i)qKqhz^*lsfkG
L}toT<,y
=Y66<>N/}Tl*BQ,,8n44kP4yKWDcyd`p_jM9u]P7H8:n?cp`x;ciAj!W!_j>@..x(rM4hSt%G3Y9FjH!eljqRyw.~^lEJW.H4`Q%<_EryJ2`{-ys.5+bpRoWsP3L-=eD8gC^,:fhL#M&Dt]x0KW+(uE;p7M)Zrxn,Ll@B^v?Q:wou@cgN(#7gUcPj%k?!^i`-N#x`+,qU4O(e;|c{Y!j#uo-=>)Dr11lTE=Lp1&jpjyg,=?_~:$=@:Y).w[HYks1lpIuH5?smDg.<Be`@drVcQ"gcF+GBFu.fV?&{S`ty<jdh^MN96Ej*)]1HEMou:)63=}?RrXX|drgu[%>vKl#sn2:m6uchUq6?+x)cD*uXJ@RyMg`E&%OjGN`
[h)*MpL_s&Sa[BUuACEl>*T5kc[w;hi@Hj8y(vsH?kLG8n->T<2Eps;Z)zZS8.vf@@oi5OeJKX/vk0[19@W9!Ga4,)IK`C+n8nI<@NZr`/Ua5gON<wE.7$1c<aSHfFsF6^g^j0heVF5ZL|#IU&_]v&v/Zf93D=CV/8;rHYcH7)hN&I$mVr
+xFWh.#MI6K`%K^kIL,3B&U&*U!l!eJL]?CRX];N,Gq,wSfa[lG(tP~tx6`BiCa<WeXn2G&eBj-X{xoo{I!^=Gu`ipCwCv6FOL7O|jDU|dE@I#|)oi!8+_uxtStdQCfQtYtYg,<i{Zvo",~/rCf5pK^q;PxKXwaUxNU#N>*PH/CF+FA)U6&/V<?F8K$
{-K`x56w`h<1THv>EN(pjr8Af1dq
k-sLi/J;[7IOK#vK:[B=tX';case"ro":return'!]^;BbpD9(nk|u#u!-#.v%oSH%[=`NHd2CJ?}nIqCinE7oEgz"}.uc$.C"e"A<TNeY*F2$f1FW@?WVY_@:F+nNrJHt+B-]!L7^ThkHst@m41,ldG2iMdgy~"1HZd16,pmtP8{a&!bmfp^%5D/mIy@v=n0K
8}
6yM]nGo$?0&)
1pPEacZ}qhNARu,pZr5e%HU~VHj8dEo%#
m`/Uj~bNat0sh,K5
Vxi-M;.xmn2"f)7,0H|9H(dm.lY_s%r)Z*8t67<nu`ipM9k-Fw9i{P|8H9FVjQD&TXA!W-
P]?2WxR;vwAVH[Q9p@fY:Z=-JfVG-@BYbZ6hI`HScS^l)O_s/>4|AWPodOpUKCh>$n.<9RQ~rR?rXaS2t-]qG0G5!0S5wCy}9BWv
pt(DUZG<nR=hnDbK<evS4&tO.PnJRD#1?fj3p*i9i#o-z=H#QY/m4
z^]N(@VCfC
%_Ec/9GiP#-lu$U<M`rR<.d8ZPGyug(C]r5gQY;4ddo,tnH,a&c@H3vpK.Im@=9#0]j;Ny`"jIXdk,4``5Rhfh7"A62J4JiLg)
FR#bNG_rb(:ok>]XDvG]Bg-)IQo`#(?0[K_R9:N[HvtU#9ll7ftb!Uzv4hw]ot;s9h=JG#p>XB-tNIINzp_[{`89aC%^vsUGqJ*BWU93:uOAAwn@(`_T!Eq/"h@S-TYb=Rzx}Y"#=kcw6^.;;v=.VM3J+2nM)&tNZC`i6_qQge,-z$.:y3|@mUk-J-Lp{`C"zraZhi7AsURj`9hNvnUMuI8+d4.N_:FLvx+#`fb6,2dQr+S-anKRz6#k;G;"qcOK%i":q1U@#`{u7o<X8os;;
2Yj)V0IByL8#t[KYox]Slw0.>o-T8l.O
r}:?kYwfQnL_a}N]Q*i%Y$/Q/n$7Y*Ph621>pRvO3cA6<#<-c%RXXl^":k3UF6cl&<HZk[gPA*+fjb]CiBwynw#ac~5VnfWGgpOs=bd+wdWP.xu[L}w%VLKc?#>8qBg~H4.{_9SSt)K=F}CZR7T3BY6L8iDV1DK-9q$1yk.(lvZ:<;9?E+Re+nN[5Ib.$Y7ayDxSy<Tmk%H.w}Fl[/Pqc0kdtLjZ+3U.;34!?$>r+)"SSmX)Qw9!1(7~$hS}w"V.r7EQQ!I)SHo2gDqj*X
2p;M59^-Y9*F#Yv:mYDZeyPF{$UWtkitLVBNd[l#;^b`8u}WXts"P9_B;ezqO:50"c`VNR1WEl0VDl1>5H?y|.T8:R?W2MHr0=laZm]:$@$1%EtQXp}ICWGj.bsYJSkD9=W]f+>sVLRU<sCO=
LW2VB5T&;rK^9ar](KV-NBAAd_z#kDVs|qO2*Ey-$bOj>=@c>
4!A2U./s8XuE8-alU?[qX?C+i>9.rE0RY9)>".?Dm>9"D-pT5QQ19>WnoA87DK2L&yQ6+eU4J@Q%:bG
p)j+
,$v6wESKor!V)=3cf.5aso*T:O3W(Bgt"3WA,2eoU(MGX?!+Zk5bSwBUZ<6eb10S%V[2n#)73l^OoR9:8lwHN"DclOb4V8+r-@m"XpBo6EuD9fN6u%sQ[;pyNuEy@~mdSiUAQ"d_y[uE,%h<b-Y.7bBTYCh@`nASOmr2&p>Y.XF(0xuNiU/@;0Fh&p/-EXE{2//V/btK_T=D29dW;FPZ%f1*pS-[*"nOp3k.+th(*?FA)nV!ww_%s;[ml&;E@R4/28M+:]!gNu##_-C>U("a0U^z7Id{j!$P3Nv9TS&49Ko>ZZXOA@F%D}^E/Glgom*xV:dKv53fnrZ1Tp_6CWNa:SZZcPe<i@`9oA3Mmb
RVcgXr8coNkUT]@P):veU)iU]P$nhf+3Qe7n&5X<&LfMLA`#fGaFHm,-wj[o~0MUu<=)g0OjH.f8vOJ,<)NaE"$a)<SR-$2:rD%f<"kl)PR>mk#5S.4P4VT,YUz,J;:S,4
MVL=kD!:eLr2T$Gp2k(6MZ_|-#l}2*@|c[8DD^cnK)+(v
ctBR7TBXGP_1g%[QR}3UWg5Cy*`*;XUg-CrG2p;2W@T"S_4`aK,$vQ(avb:e;f^K_.U/Z95]BJH%t`D<m"6;,AO]m*N#oIvRWhM6bhl(ix:#Z>lqj8yANg4=o7`*Tv
R1r60
u8N/R2gZf4qZFfmJZKGp?/:lljTWfI(
.mS+Ck
DSOi&2FJ0HMG[b0<VSZ5V?kUGy((Am2Fn+ADVy!#^0vQg}9?dAUt*N^MS|qpw/=(HpRNqMq;Q)/J@^Y|1uVH6WDDYT<<"MrcPk@"h:GuScoQM-j0?is[k1f6G^$/VI`pa7lCCbDOr{hcT~WJEX1m![^q)?L6i$b5KF@xq{A(<
H(Di@h<.K}X1<iJR>g^Cv`l`;
FYTnVhT9J)B;g"56N^b},)us&%b~r_yO8!RlQbcqcjD4w>l3tw@/tu[XIN%}q
M+19bW[(-PlHJv%W%T-75W5E@4$-Aji6ZVoYXMOHPa"yYP*+*x%46s5|w@GIQT3+ki(B8X2"c$Mdj$-HQ5T%9qcc#sV3.X$)T]!Ws(UnyUk?_M@gusaK@MvECk0?%JS5pq8N/>Vnt(<+V$pw8xxzu*/
L#(Q>8/ZBMWYuy+&-_<v^%*&42>vZfmx,OGI*$%23WcP5n*h/}F?])YCiMi%_Xsj8Hn<Q"ZXv"3G$Aa4P%ys[6xEH+vR-}n/v)`c@*ob;(;exS21xxZqD1@@])/b=
p
Fr[o8>`;UN0$VsVOi{+{N=hb<EkUgjBy1<%`h~ZkmL1F+fx8l^iB/c^-0m[CP8M)Fm3l$PvV4rp@qJJnJOH/F"e
MgCs=|>L`Yt}2=7OIw&6qXe7QH2.tJEeFu5a$x1avXH!+[uDo{>P
Cs7C+E*ot6)w
r_2uq;"HM7Kqqepj,!r$h`+N3MTzHw%[nSn(<C[;p"=-8$IwBthD0D2%o2y0ASqoUYk
C+Dw!!@A4D1xy0PjrRLUP+t7!ZaI/dDkc_Mg&bR*:hDQpN#)oTp",RE5o/O5-`hjOb8@t]tvdTmb=_p^]m<^e"D[.[JU8)?YSiFP;-[x,Iy:QmXp3Ba}TYKs<<v].q7S@RC>9hDHY#<0@FsUZqZ@n)Oj06m%q|2hPKD~aeQYS[]2&1VkC]>([Rj{?hj>dMX>Kc6UuAui&(>u1j4c/4AF1arAX4Vz?[r.P1s&$e)<L1`]mLVF3{2Q""';case"hu":return'"]^:_cw+^1Jr
n,g?oFZHe/o<70$NM1g$RH/PGWm`?AU|^v`jgVl39+O1J0J7&4&p8$wZT:N#L
]|%8Ub*5Q,O&hn2BZ)70>Kj6r5!P
~n>"h8_V1u9``Mq^rLDodE[-Dp~[Y6;D2XVWK>1Gey6/"(ermq)PW`|Y~d>WWbrT^w+mZ9QJq>{Q=t9mIDpV7pb2o[5%]!B7=LoZkPOA6CrkL,e)_Z.A1o!N[i^[ED),UL*rixcakgbkuV1;$HSIs0jr4$Gq2xH=nSpt1&5(0:UTysV@$@]=-.4ie:w%+=W-O=~Z_ChIn@V]Vv7JFt(y42{o%J_s*o0<fhvGTM[?Tm]w_;d_.b}P4c+f$WSj]bP^p4X+,g"U=
myK@gH]t5qy.oDFQ~rAx^5P[jIRL85_Nl)z0)AxL:9PyJ]8/gUp]nvdYZ.gkD+4I5_|]scGJ&@Kc.lllL83UIm</df+.#y?ODcBTp4Gn{SjP/]vuQq
O9o}Ij"f:4YONPpwA?EgJ>#$QjaW@y.FVB>vll!clLH#J`.{N{j`3Y"<GiG,<ah^+>Ls;e5lk{2B8QZDVw6fF;ePiRgKgXG<uJ#*^3o[L#Q;6[eHsy"zw)$?+Komlw)6Fj52@fl}rOmYOI1k#aa-1-=vvy^V7KgeYonB43gxXs:x(6#I(0x%IX5g<s@A^]u0dx=*`YH4QB)zm!Dyc?N#f27M*fFF_9-NO?0y7.`.6&q5`tc"x:;,q-w2t).~4ypX`~CHTOsNZD*O*,L9F|O}k}HoAJY]#LB2!/,g/U]h#.bD8l_mXEIW`]B{h8f*#D`jW@2{=|@F.dw5t%(%a?-@2WTyfK%cp(XrfJ7Pl:d:UeqBq#K+m]i^ZgNL`)rT4/y+1k4G5;u4G)%qOehOs&=:H)W.aTP?5G&S12J)Th
HK+X*m@r|!!&BY+ysF&_gNownKBV69kwM!Z:2PPKlX42gsAGW<>Lce<!=j_Lo.-ir1jT?Q|N+:!N1VVUFEE=x)VI$8
%GKd#`,%uQf.l52hVmZ_Ck_[C+;K,/R2:&Nb3|@o0Env#oo/<AObZ_&~"8RM9vh)shqlhk9u%Z^R0<79B}W7KKXp1`fioAZ&PC&,G-;B$,u;5V@mEI:Qd|yCG;1.,bkZk9b^Fg@4g!)@!9]Ivdl[dc9*?g76q_cE
cbm
4s=G9KR.*K<$]C#Bi*-WHCQ_(Qp!-(GS.b?v73]#2G
Q??+_~JaSa8X)[a*pBQ!XCwLG18s!+,s-5"Om{<!&KoC%&iJ48`KQA>Y2k02lT@EC,>USM;VP`yZy?)vD:13(k+WL
PpbsNsm?d7eeV^t+TNZNCdv-m~O,g]iwPn;@0Ad:q?HaGaFbe6
$T`G"+VTq0uR
$:.7.x2SoG2IEf#jmoM)-p4Dc/]
PS$cX5gUyH`rRX$vkI
g%Q4BjJ/BELE@yi/l/uFTohb"5vWisex!RqHFr>k$%8FsJv2(N-U=@lkv`Y_OP5gz%7HyZjFhH[w0M],^"&i10wx&SQG,Rt)bN|ojBZvY4=m-[=T6?VEZw/fu2Adc>WItBTO%-oJQBbAN7Pju/Rg>)!4Qf0,o
Z@BlF]_*Kl9m}/~sB5I7W"K7Y8k
k=_;F65yM=]tU0KTuPpJwMhr,0ms+Oe-=FC"F]^Q!3IWV7A&/=hxE"9!U<EqmwB7WDoEQ`SW#qD9pCEq>9n)8pwRyJ>R!tM)%@^TsB?CZ?{bjhl%#0^!fO[$pKOu
#%mrXSS+++9>)DNDK<iF,DOByfxJ!@$NPvWb3jg4@)E#+[ek!{#ueyCb$uWPN22qBLAC*4*!ajjF+!@>jle,hhL@,T].;1ZH;dPG(>0r74Jq+IC}c!CSiT"ghqt[<g9@IS4q4p[;dtd|q[C)2#o}SlsIe{`MCN#(F*#YUvN)+Wu*o<+Fl@Co%--2L{Pfr/w^L3k*fk3G,|]u-WA117R{R&Uou5&owd&`=fqGOz[%Ak!>b?f>w?*s_)cf8ggB/_B<[C,)+4^k0k=B<+,U.`Ql5^-?CS]IJS3mlQ
9r{"0*Cf!<F.x"i1#9I+pROD-NP>#FD+X0<fS<B$?Die1ZH8]<"S&)"W^rcrRMmxwP^2{OR[XL+cU>:0%Lu/c
sP!P_V%BZ;p9M.hjCpj^)lBlAXB-^8Vi:Our%f"y1P2AoR.cpT^6PM!/a1
Mo]lR)Tc]?<v*,9}Z]LmuR.K]DPL*X.}l_$P)(8)J+iN+
R!X0iv/^8_rA^_AayTGc%^EOkQ1k44j1PTVQ*rxs1RkNt!oV`E>Qb,)"[xmg-DlV_S,;K</n"lT*y1Y#w/@Idnp*!#uM"
`^>tVEiEBC,xE,..yGm(8f8bKe"gB?PK+G&s+OeB<<[VyI7Tcl^.N--`ZRK"faY>9u*`
-RfCY^BEZLPsYFptUT+4<xn18="^:gX=I>)d]<YAo?+3
M`l81GEYY"x_m$f2+)Td`O/I5:#]b1s&)_>XAHbB0Pd]Q6ezx%<_4Fs@3=4I[a1H@*,ykO,:.y^I(R$&eRrbA:QwBb!S$qW@MP`$pXT8#-<>8dSQAP3YkD$U+x_}a7dE%0_qQbGL3M>:wWaQ:qUP/+J.4$pXc~qV)VV-+yqa8usaO_!*..Q<Ux:>j7C9%LQ)+aG?ZFZ>^MerE@57R^/-yEXyj|X|(UZ
%"b5iq^BXZz&
<kLA4B(W15
ETh$Q)I;oK4,jx?3[KPasrOq[r
M6LNXhW@57XTNm2rw^=*>PROZXL.GwzN^_bP:w3maxn&%"^BSRISc<W2?Wj!^/X]?eBk&P#vCY_qXQ=%J*_*68Jh+wU<c:!I;+zDTfgShfTu1/)
4-"B>&h8ii__<UjM3/+FI)p(hDNW@uu,ZP{[MLD5cUQ6apzW`6J=4I:2=I
ZZkc-d3:EG5x1"S$68we?Fy/kqu=O]GEoe.7(,
|;<q1
_>E?C!(--j^^4bM2cE6GzcU51:7fqY=3X>,?(Wm#m_x5Kouv2QtUJF{A=rs,*Q$18`%sG("C6UgpZUS*k(b@4-"w~`Mj,oP8J)Dud$<&#c25QZq@JWHYhO8[B]}RZ_pk;FP4o2P.W,Aw1>YrrGJ!jCVhthF9.QxFRZZ]r$mNkel;}<!s7d!eyaT!IXC
IVdG~-aE~cxoKlQj;@b1ds
B-i-7)!1Vk^`8:37)d/d0W2Yt#PB/"RCEM.?%W;4YF';case"nl":return'!Zu;BcrZ+#@SDik5OawN1;>V6@B${ZS_">No>rcoJ)"-lNRUM=r`0It(31>vU_`C,.lY;:z@Hj<t5X7a}n]g5T=tw)"*4j&@w/kiz0u[9bmL#/FvMIRnkw<qtM(]id
xqTZlh"4jNcnqd5YH_==2)s#]3l:MVCq6
rNK)F`kq0|r|VJgDj0vfG,6.5d,Jp9EV^5nOE.05gLxxh7[,l
+z:bFjvMIi=G&"i~lzvujn[MyQ:?C[=mZRa2%.jROG,0pISU2x_<_NO_iRodkhU~vb
:,CM~9E1SiA
[N!/4a`<WO`Kl5+b;f5c@_)`?t{I~1,S(Vw0_g@W8M4F0p540+YgX@HeRL+8m&
n`=BqR^++Ee<meNQs6"x_As.F.Xu)/tU&Jv*66)qyd:zM!S-f.Z;2&]<v-;{%5S1`ORyHr?o*rgDtlL=5I"^5Y`,XaU!P1TpNd*pAP](B%`vAo(iT8A;<xakgnYp2OyIMXp[t&XN>L)S^l&Je[A[>dd_^G
bh{Ocq_Jh&@*h,s9QX,7mLt0=6;AGwX:I[&HMAR&q9tlC7Cf-4}HCcisAtBi@;=.>cc&~+BPJc6K`)6qhnC^B.,]+3mK|iZI<maH
uQtN1db~r0fN)&/F,Yy8pT>}>AgJC.wE.gOW4)D9w/@Vv%ri=>x1iXR$96B+a<D#>QO^5wju(|i#nxp`,js,Y%6iuQ!L
xV"k:I;<~V8n4nMdl3XB6]QgVt)UJxtEk[_nfJ-s
kBhNHB`~,Ka:-x,iBP((Sp78(@a)hj<"wO=f^8D8>$(0q9H}ImjA-qEj;@nURx_Tim4]u]oES$*:uv9p7CVmLmc4/9a#IT5FH-705L2Lh/GLVB&~e@W(1@w,B@lr0C({,rMO_mBQm@[fkw
-Rw/*S9A;uw[^=zDa>6x,*U2nL/EMXp6uiA1pGIg25$1fRYY)Wg73Z:D$(doJxz)_e#%[@v/4nPYtGtk@OO^s?x(e4Dg(R^4"k2=EH@LXvz,aoL];ZF3I%4::nQep`DZeU9fx]v=/Gyf:y+k#yWpPL~*3<9U]x<c|-a<y
T,Up_ug>06$k!9hI|NPEH(93c)^YLT1"kGWDjHf42+GYRpU0ox--e7]nwF*Gh>Idm1V3P6)Qz`"l&k<"!g;(2qVto8/d=#3?r%f2=>$l/dZt`J<KuAd2L-xVHBLNos11P:!n$T-t9#znR-U]]%}bZgKA=p.4*A&+UpB7PwTjY.9xkaDBehV`%^vaR,Q3x$/40>,yf__>z%_)@F(L_%?2btA*Z(w,~dQ
,4/0-:pkgQVT1j@$rn?l]".Nb(4#oL<HARspj5
7v]tlR4V=sU5Ay?f:?tA`VfMQ%Ad44:bs8U/qat`WdLhH#SN@_]bO;"TY}aFf3vs_1ZvtQ=7A22L_4OijAXojox>3y@u+pnyv*b86FMX$
ZN,.pLTVpKpK$2X1Vg
M2>Qh:0M)wt;tMKaUk_M,MBKcQIuJBPk8N2_YA)xlLKk#I~)scp#+SD1k7ESuC?a-AM7.OB4amsX"Q4;$^b1xC6c`M8t{^Ml?1O12_dobZrl9oL=OX.cWA`[
#p,cm`!}/fbl@~i?%o-w:?lBNO^wc<IScSdk<j1W[$iXCVt^3oC{?d5[Foa?Wr@`gfDOS_95&Dd8MM`)ej1uNU^LQN^^LUNP9ojS*wrGE|@Q7Q
G!N+8E>xI026^WP6dZebi2
9U,0IHvgp9O>tvt?ogs6e~x4%Eu$Y#G3I9*1mQJ5QC/jP6w]#mT)^jJT_&U#*h%LaM,BSVny=7g:2z3*1^?lx!&R]%Jt>o+j6`GAw3q?<IgSm0nA;tO-@t2#V^,y9I9YF+nN2r8`^gR$U[<WKaEkn3n&S`*mNISx&.c&P0ed^&?@]CXDNqEltijECBpoQ^BhmtL-#Mjp!eO]I<m{Wcb?LtOTuQa{*-;O7[af9&U,^+:|9D/2L%*Ieo$pB,]vTmtJSmC@wvg35(9Zme5oxmn2)1M8
yoM>`6gq}[}wA8.pd),gPes%HB~**?t1maSS.]miux,=X5$SISu&YMj6A^WU0197[Rv]#$A6tL)<B*d<X,<RW^s8$F!hbB1Q{6#r`K9qcNKqk-9E
W?yK!ms&>zlz>EZom*(XwPS.[C%C"ko6>UO^DKdQ$@I&-D
My6@HuCGc0>E+n}u@6MP7r~g6_vqyU?^L@FIV*_)"M3%oHVHfdM#Q."04<.x@OA`@H3Tyb)VjCO/*1VQS:UvC.tB[lK$O&i3U1]18C0K-Yn:6OSs^O3qC<1E4N|@OS(R[`s6sK/[VE3A<wVhgVTyppn.mr@N1-Wf..)OhS^PKtLe1,oZ(X.@11Nk0tgo6(q=?:w0vT?%r?@;XnRjPvg)@>r+yd-`+`f^s,9"c-0i2Z(;x3w>~)@T]n~EhP3<eE2V;BCw^>lHn#,5p87UUF-^7#i&mTw9h-N/X6uHPc[L,yLNpI"3/OHI-Z]Nso`8-+&;XwSqcJ
!fTUy$i
>k+B"OUt&$43jxoNk<x1R)&2R;k)u&3JCn1.V>*J#{F:Fw.XXkcg3)!3L9-~]aXd"mm9;UC4ht5d@]*nVn$xt!$5=j)ed:2aj,J$k,WY6V#{q:biy5-`=,DKBX!O)>oHO3FPo!FG^
?8%#O}:"b}l}VNb?0nXP*:iXA+uX6pDc#bt7WDc/Tc9u2m!M%k';case"no":return'#Z}@B6KWB$uXx?89Wmo83`pmU.ID>Hf:zed6Xku?eQ7;mr"H@W_N<mJlGL^_8o$3=>4f(0!<&DRTA!yK<N"i#y1a$9|aGiLmUAMv$c,Lcew4;Q:;5)|$Wri4i$[h}q),hk?4-bNX)=8aP4>Lg#;F%@>ry)g_VTz`wGrW}X{vVolf7f"GM(5uGqG){$7V&_
=GLOt)-$il9W@xAm6PpVM~nwMLKTKB%&VH$nM/T?<|,PM_?6`?f.0"J^!|A*7,6:"D_Vy;$/txK,yU.V@q,&-[K];%n>0si0(Q!!,9*VqNSwi32n#sab+5sJJRvH$[pSxz9?GP!58C$m^6GNn)<P.]VJ?fnmNQ*F<Q@B/ifVd[uyJ0DO)Rm]1}m}h3ckp;u6s9io+V%hSp6;I=-Ia&cl_>ZNG>@EAUjUEHV9Tx98"C.,!}tN+trQm`SG;7[V.nN-&9hqU9La]5`
1.Ztkh$,Rt`)q:NLr1>CHolsIVOCcQsfr;Q"gz6Wf=#zrUw<wi7},-Zv8y
.w#0wM-t23Zs6gz,2Js"`COLiR?T?qCT=E[wY@o7[[f_%I|ppkbI}S2
69A[&#-Uo&$dBuHA3H0
Krcx%e(mKDJhGBIQ50$
oAYi
D&1=3~1^jk8tPK_8_$$o"<SQ0xK8l5O@^]D/Ho&z1/q0AD^oYcM+9v34r(TcP&IBjN/IwP7=_ffE=L[uR}j8/QcU=kJV8R/3OR,Pfo4XMu]O*>x-$a]3inWMrXcL8tD6)H.:t2rT<=]rs5f1^d*rhvE:8
`yjGQeT$Bp)o(MUy_9T4;)LGBFJr%q4r1;B<obI
?,Ahs0&n3HbEYisqp4%xLa=wlj9*W4By"&aG8zOEjo;b5K($MIn7LH!bcyMVl
NVl9r"SyH/o?wj!8[WACl]]`3r-]]>tMjE
T0HYRSbM2ZG/#5/ct0AA}2eopux,Z8`cLcC(HZ-mOC)lQV|ncO:oN3l2eEo%E/4Fv)ly2mtNGHNL&=Q.xtP^SV-ANTqFw)7#tH"=3t$jCm/o2<?*>$fNVj~"`2i.iU._M@{P$#|(@94:-^X56(LVO/;gH(DjhPd[T`^.Od19xPyEcQMC^;<jf.[-!]jEoY+j$CpW~^3.p,e-jtuO-(@mUm}$|bpj/.ii%m7truZGHe~h4%n<J<7#"y!u!25SHtQ[y,Y.lnta5R@W;jW2i+{UMjmeDDt%v,o_G+S4tEjdlcH,Al.WWe^F$`f=WMLD^i5ki78Dov@+z
^WV4Qj3x:9cW..8IWcHh6#u!8&00`_P(gwc?9HV7Eg_S|5
[-4IK`dcC+_v>qXAeyM`!m4V7yTaf+3F(7oPx[-{3XyU/;V2_2nEn=qCoY.9MK
Vt{I=FDa@inEoR"B(Or1
o[rMovLcsB=@2pY:C-pINX8VD7pPH(F@Eb"gS)D(:<h
S?:8K^vlH-hP8Zi<rfK(5idyK3_&f>
*#`^(o/Z&l]XMR7i]s_B!!H+~F+PG-mx}6y6NZG-sq#e:r+h/,(*&yGJmaEm:.Hhh/b$"[:NJWqv_tx.
J!F}:>i3r(q"D^J&("pwopO!iKuX/op=N:L;25Hcu"wReneHyBG7?BLf[=g/*)twP_7}Wunk5cl*r[ZfKR3XhAV3J>norR%igJE?JuG.A0a`iNdicI*3O_?2EF[[sCK$Hi(#6Za$Ft^40c0jJB]9V6W@k,B-*Z/b<]5rpo)H!--@wUEOqdSbfXudC"P_wd%.;`(=WxYreiA(o6s/oK40#9Sn3x340Q&GC>BGa2=-g!0q:SlLv3(s`5*n[wh~!&*)IGdm4Q+H4q9"df.*:<=J.a52Wx%B0WbQ!xuqM~@X3ZOjYKtcB@1rgS_/+nA9$!/Fs(FZ=q0bTBDK1<mb5(oys(j(n&2x$?1CtHu=*Y[bhfBN5|7[2%4Hx~BstU7*<-o$@d@$c~k;RxSm7Zv,rnI&1fXw3,tEDl@xPn4ttA6I
f!8ZV_rhqck:ERE@d5qyzl~)mH.p8b=8KwaA}4DO@V$w`g=#">Rh.h>#`t&:)5h7g8Sf:tS&%d!ar<tclt$b.BP]P#l-T,%NMn(01[,0UF.YNOv7Tb6sgX{/D&7b^O<#HOF=E__;g__!9ZWOX#GuSV}&+.Sp8g#!v2m354);0[,ue@gU7k/SImU[7/0:$P!Ay`Tayi*?[azK1b{9{5dG.njFh?vNhC/ZjI9GgQ>t5L0Isj>;PDq_Er84mLfnqIl[8#2^)h|GeEc81T
KE7!t2bLt/hl_Sfeh-LK9U`3xADpd^]b$WAs,1r;*PbSv./3yy3*aN57uf5uH=edg|cBBy0%*591nYA}KX^Rui9C>aO36vi:2<l5hB7<<O>@"14^Hk,{>H@e_tu=t5!1M+qs8aX}"h333Qppc.UPjIFSQ_oIcIMcs?K,?7p7>lLJSu4)-&1a7^cJd2<Bh!2.S_1ckFp{lvF^g|orkgYsd1kf6Rfui9G~O73Y/vlm#bblP+K]iZvaSeaQR;&r:e$CxyLILn1IZ,OR3a+e<-e<Y
ydPU5e3M9T.}
~.v-lN$F@oFAvq_hGcSsbjgD!b?"2mJ5.wm"t0itx2mUf9Ad2I_4
@pZl5bbeBsF:%4"SW&`InsZ"nj4/;NLraU1kwGZFEmHw`ID?Pu]HQ->?8RaHV7K2O:,e),R?7c
$+I<wqGPD*K8mAO
2Vc6[n5ie';case"uz":return'-]^6KfwWr$bhcVTw=#$2nCp(D;1*|9hq9RP5
i?qS>S,onxLW;sIB_Q@G?C0HL&Tbv
^)]|XTo=uTvE[{;BFS<0[wHu!$0gVqU*=btqQ~Y|MmG?$t2G7RdancQIF758?BfM&>^@D!Wn@vNXkD%_./jK^Z^8_Hs5w3mixMkov9`?!@;xU{%-VCq[;4qF<@`I?NPiv55CeG+(W|T|Z~*J&O7=_J[!H"bLShB>h
Y`m"ZflDdBb{+:B4v32WfWf`FokoE&7/LKCJT:Hw:bKAe}e`^#w8T!b![7d[E*K1!z!@;_"!1CtEU
_7
AdVp+@B;D&="T/qJZC0MJ!Qw
0Ty5Up#v
nB5eIGbQlY`)&bTZsR#E[k,QX=J>n)z*tDj?a-RpT]-V!%T0UkrN.
U^:C$+;4BED,mEQdyQ[?yPYdoK47WTv>mb)/5r,s!./n/8(:Mj=.#3vpxC/b~6aNvBJ[9"<iS
[$TFqG1:?*0!]4dQ,SU"Ew]ew0R"?YIiV;krB*S+FCFo<B(c])U]>i~XJd?Zd@SBigP$3dC28ho5UJS:#x[k|x(>ME;
#;sjnWGAw$;6k
RbYEtb.6lfDeGaaf;yL=.Vdex<w9p<,ZHx]>Gr(vgHR?Ljmm"ay>><
g4y1C]Hqc3!N[aKp&b1Ptqdv$8:RO5$u`peqdKaD
,uqL4@CqTVm]
GmMg<%Xor6g`Y"!YcG;"0OLS7>-YVj:)X1:|(VU/*hXc;uaAcZqG"<F{gGktLTvg]?/xH
5uIle/7KOpnhd"P3Fz?4LW1"O)C!D8H#)Pc9Nqr0!qP&5<)6c!u|LXdP#rOwWMm5<Lr-o(kP<pOIDM6Oaoy1v_@x&-jxEh+33Cq^BS?yN"?{N~L9gOIWmet?Wov>!@-@)+t}/PBo=c/r7ss65)brN!9)B:E/VKoPy@C"s?x&<oEyd]]>1.59Rb;@_D[YgDu~(E^x6"1nQ,q9xy+1(5d@LR1nb<ToGFe$3>2**d$T.B(5T1_jg&xDj^aC9{fW(t_<$>C%k[cJ`)!P96M|S5--iYkz?TOkaj9B5{1v"jpDCCbpp.yN13ilIBwyKlLVsfs_QG#|Hx^/u,%R;bY}tUEVAu<zPT@`Li={sWtlMyY1hI;iX[eC3@.|O`sL5gwj!:.h=lS4wb7B;.+ZyVnbM::.eAPMK=<2^(lQ5Q2{4Zo96b%WlsE0pi3M^O>0hu2uxZj@a)G]BQQ
P}ue:.`{Ki+qJh,B<IF$!tx5GWv_^?t]8!OuphN|&yL#A_&n_hG0SU#RAH*ap>Vk4d)F:0.ppej/X^]F,=w(UCDT^dFp&f$xY;th6
-P66l_SV
=ki/@lTm+9kceselZthY~wmJ>
7GGdw/*:7RF,)68<*7(6^#^x]-tB^
f!^
B.9LA.RZFMX2NZEM^wt.t1Gj;XGoG$}twe<O%J:yjlJ@qbd4[7iSi.5k}p*YX#|xt:f9G+B"[L$/*u~
cOQ(yR;D"YVJ|WbVUH6^as&7YCmyz>C>+E5(w]yy5tWl3q/M}t7by"=cBMQyV[`8[fPvE#M5x.DXOkigF>Aba,4Y;^j*$5uIx0}S1M<
`w6#h@TbM`
,Ka)piZn"m_?5c^l*8);x&1xlxE^X[pdZMc%U^4EgH[5KV?aBG-BXGeKN1tr%&W|8]?Ebvdb.EaCNZ._iTotK[8lC5R%RK6$C
hrZ#4[HXxF+AB2"_,q,m`yO#k>9QJuO!u$(1i0R"lK8sIobxZNVyw9?F)1aFtEMWUBNw`?HkydY8?5NAQDZn9|gMNOqTPCu=UM9jO=s*73=;`XGx,R0e%S]Dn2@QN"oqj{JYI/Wbo|#BlQ7mx1-tamcHvfh0%=b#G:pHJ$O?w9,{QXdUA)PJ
!]=HFL,lV$4D]Gow]_.TAKZqGAIl&p2meuLO5+lgIHqjE366uwqJ$;U>Pe+mL1!4}$AJxdN%1xZAQw:J|YP8VLZq,1>&0ja#@0i8fh:+HS);T)]-q^|:ou_K(<St]wh8]cA-H,?Kz*0!I/K:N5A7]u&=nR<5]?;YO-@$Ine48;L"gAe.)N010b%/Fl-(K"l.&(H!Tk4f,V=_MnsgGXO)ikLdM3xhP2+1YJ3T91OBwOyp!]$wrk=w>wh-&eJi<f(A`9AJJ*,d;Q,.Quo%p/P%,o[-k_}bMm@dw+CQZM#5(U;iR]uMn2K$P0%8:IJ;Av}(}-6$2&O->S)d(@`?ZgE[k31mgt,)83mu!a)ptMDo/l"$&T1(;M(FP"w[@$3?lS51o`,PiuzV>,eo{[4*b1p%WL2Bu;ENo5QNKk+$JF2!e%b)93Pqc6~C@RW%2.C(JQILuu0&A[dH#+v&4t{X.x=V2N~!HDVs:G5T%&IOf&.q`r)CQ[8Dv_f6ZUw_$Ws+w9>4NP~4p0tyq-6YL>~53O15.0:p)Y/vgw4pXMrD-`]yl"Upsp~-k9Cf8aBSB[r/j.iE_qV!Z0%xrf"OVd1PV?"MW,RUH2R/8OaI{fY^_Mq*MBXhG4^ULFSTmUlx]bw
CbG"z2tv^2{K~Rx=*C<^YQHUvm9T3?B>ib#y,>n?RGdTvS%BFhm!^p1T
JRuQW#X,`<qM#==p?k3o!MVaI`)e=YdbKVw3)UW#m&.jy&OI6(glV:-k_V=;0frr,4<j/Tao/;i8c@H&+x]s@!RcWT9N_~e_1%"!"inyT47fhk3U3rm"t*Rzb5N7ka2X]1J;!rUv<la=7$UuyMpTMdmtpk76)+f~isp3%M]KSjS,ifru>0^vV:2.>=8B?`Vu-7$0&Z"~/%Bu"NIE!5?m;$aw-rFh^7)4VYVWYQ@{l%;zc2Equ
8LaYx679-tjrON;^)lyHd(';case"pl":return'!]^;:csDI(q5*o=7^WG$igw(L%e"$i3NL
vYB8zeAhEW6eG2vQ,g}!^y8^_x!/eV6qK8#Fek>y`Z&1;J-Thh+vr@*JI])PaG]C];fn4;,L,0_BAi[GSi0yDDhv
MPqNpJ>Jv<rm`,50su&hPtSF`E,0>EU>iU+T^RZt-onWMZC)F|+@>37ttSl)o;WP9tyL(I/wYFuOlBei5/Ch*`,|q,W5L=;_`5+ZC&t`ACyAy1y93MwG8pT,v
MVnP-!s5W>6-J"c7x/WLL:.]M:j"FX>+_M+3lMD:]&
90TqR/v"uHA_!6]R")#$k5Jwr.GKJ!~2D8Nhl,Zpjs?OFBuKPcOR-]j*Gjj]N_h;v-U^&G(F.x3=#kd*h87nPwPusy9Jp%<eFLO?cWH6DFmgE@mb,m4i@@yn+]Em=lfRt$GFWp|Z#z$9aqvTAb:fD-^Zsqk+<A80NpK?oe5J(ip@aad7xyFPLx*%]K`u?CMuEjulHNJ&C$.<"jkw)mg:uD78FVOh?rr4nF>^<.o7~FYQhMA!kFZQK]yvdGiBiLB25)*R7F"f!#n:Z@"u&/Rx+Qrd7iz!#Hy%fu79qUN0$x,OAQ5pdGI<!hAR_[|hc/sEq@T"[u"RhGsJ5?sqzPl%*eDo>N,Iy+VH-M<IO(>HEvfLF-rJ{f=":wxx*<(0e]rrRuZZRt,:9]j9MV5hs/HSW`}1ONB)3PKprcXHVkEF?c/B(C_&p_9kEIK5Np=1z,+BhEj&Slp>`S[bgeu!Va6y.BPS+bSRBm+
hFj*vkXo/*ooE)e&m`)t]MLmpmo$NK78RmQ[]$ia+=Yuvym:P#2hEMH[V73BzOQ5n^ZL_w2w:T5<[qjPyh%dwSW"~-X$8GrS,U+,fo3w^`F=cri[Yc3sUr-#X"kQz8_q73UN?DR6Y0I-=bmAF;N(I@,n4
1O@x:w@%SoEk|Bbr`i44T5Asv:pq~B90ff<f[xb1qNJ3AYHA.=<3`uRxJmHCgSC];nCO=j$!|;3c_ZUGh/Hm3.P+!*E`vKo*Z]WqiHR3t:#/IrIt@+:tpHKa0(ugP7n)xck<H7M;v(6STv#n["(xQ:krtSC@7XL-m!$IrF^1jPSjc[aww^Uy`K#y}5_*Ue-x5_5CK/t9GjdS:v8P{X11#&-eyg_:RN%d.#E;g(-/(c),e.BFL)%y@J@[uGQZ}Sg%v&K
:Fjk{;+%-v$A$j6;{S=]Mqk.+*U,.cu=IDK!>[G/6K[su.Gi&Mw8J!OC4thH-7YM243@C7@w0OzATy~X7&$Ykt*$^>*`}p$o%]>7!=CyK.])L9@.;M|T#+jYgNBs{M!O%K/%Vk`vRn:VBUvOW_QSgH[=;B.39uU..1o?_&vCWE|Ms3!(fP=+=hi^pr!qhxwi@1JykI:w(5lxRdypGv2Y8*]A2i1`/emg<KvJ)YO,xe{-Fu^SG1@Z.5X<t0.AC7UScL9IiKtyMGj@q7F"i9SJ-oM)8-xh[M2$S4-2VbYYlS!A.<m/Znn,r=^o[+0u))@ij45[v;7LF,;k![y04k$-vL%_ye=XAYe8NZ;x2VBqNXs#LPu^NB@4{/1]I>@e=GS0P;VcY]#+lb-
H84]C6"-C<#-eRYWy<kVP0gK2<;u(b[]3)KNx`]uxWY2q(wP~$[Ge-mN>7QLG%40M^$g&"/Y)<15v3?u=&Ptj[aha+*4Q2W7dv_3M,k/1&;^zg}f#Pa;Te&MYu|Lr]:Co2Tl=^^qhYIk^(Q=G8H"AkM"$]tF{@U"A9H,w_)3XZ5t0T*d-w0#M8CC8@>#=^FMrHp:NVBRn=[g~L0_:J3<L7=6~l5eq+*-w>zp]E%-N"{eUM@z"iWQg,;2VL;hn!*1x_A5cqPs"5&a]O~wNS8f[Nx9p2}M")fV+?[vR1rO6Xep^`Hn$7.wpo5V>:<hbgoD!040ZYI=vkjGVBB"P#b%{^Rn4q2
PR~@KtK$_FFpQ(
(mHX_7rx:`0L+Pr(-9g##?NqebQFI[.fU?(5
I%emm];j?3uG#Y%K<doX&V4:0jrCG]L7t-`:*$!&siasWhU_z?PP8djO*E&!eP0)
"dnV;rO1^JqGZ9X_g*m-RNR.XX(%G`B/qo(rv(i$?o#6R7cnY<>50=;ZYG7
KV
&1p+tBiRk1{/ztMMf2(BwTi9WX%S3[22+0hk~`raP@?$!nBEdXL]#h#>~6eEBiuR!+Gti9v%5uYG
cx#LwqD/g4K`I,AOjLKRl+)MMqM."lai8Zq4:r^oeYeku2-2_Y^~7S2v:C;CU"&!k.eR3Af4[dM],bms"l-^gR.7Zxe$ehWwelYXQ&-cgBD[*o1t%]QJ#Nj#U`")t_
D!tP*)Gg$H}1x/n`1jC,}G#hJ:o<{uJiqk!=j^>B3>J]F[NKM+/!*!Bg-[hb@CTuV]{.(xNVk,`v!Ce46.tt%v(&3i~.LJlxO*oWT%!w5qe+dL1X>T/[m]rpn.,Sgnk]d5gi1BRy[hxkkry(O.jy4!+WC2G){V=]8)-d9.sv`f%[(=#SrLgL%OfgrUz`MAn%hR<G`B1iiG_aui19nq/r9d_U,%&,(-%BENiYZ?
CLET"CHP*sR<tyZST%]ctS&05TWQY?xnfoM:*8
b6?9(nL)8Zi%`%q%0a`"Fa$/fsk##fz:#nbM
+*.I1z>7]1VP6Iv6aJ&e,>_xQ=a33*x!V_I@%DJTb=>toM2z
w/($D77b2$x,
)|0}.g9&6fW1]K2}:#r4qi!LOBO<tXF.COrr_Uo;Z<0zji-Ye&Z[WXtc
TUkgfo8CYR"[T#U1lhK3s"s#_WdpdUV1LX*c0%r#hAQj4"igZ%0we9)rc?!U|ejKy+He;d"Jq%F_85J^qO>n
G_Q07-^+V/9($"?Of,.ZgnIcby(J%r=D!Ou@kbMEu}l{Kn_k+S%b1@fkwU,h7s$O24T%586>wvQ4=7F`f|(lwO<MP|?k22hbk8DP,rv71QVOvqXMwwDYw4?CPRe=vNDu1F=a>jst2;.f72nH6nt#]zT37R"&cg25q-a:5<di#NGfZE.VCAN6xv0:<~,N;L%6nV^~qtVT&DFEQMh!-f36rsY2[neElG0T3{6D4sB9$A&O,=6W@+5twYk?3~y$aUj6h8DlO9lBct9T1&>PAg1!3w+L`KH_f5ET3!5|b+8:+&HdTcon]w<7Y-p*nAZOk%bUPc6(1MPWQQq3
%1#f-O
!)&+K?pmBvyak<(vN$)mZ
b@TMPd3o4FH5moS^2+%[a>[IT1v<D_P,j
y((=4]0slZ54#vuXQkyP"#o7D"F_8{j1_1B;)D,T8LyMnJ+/tQ,w1+tWdqT@hp(z2k-Q`I+}UC*D?@XY@]w9<Bmb:h.we~Iy-watb.sD2H0j34?x""';case"pt":return'+]^;BbpAp(nv}S}ys9!%("[Gu_ZGRM+)([(!
d"*|BmnC+_E9<1Tofqwc2z7AR1#X^xs4s|uVm8e
ncZ5GKe)sx_D5RR0XK
Zz%*I>9S;R05$t3aBuJ*vEtI`+%DIfe<3>P:`M*B"bc.PnD$!H-wjxG.qwrc&mZjz><v5[^oCva7K4[!h"&9N#M"a=]Q-ejDSYdM/TgW9si&;`~SG-dU@]WvJaAP)cx?qP}Q}xk!$dYFp66%
2N1=alQ#&kJIg}`)`%=qqco&d`!D[l6T%EiLe)`PX
?IuAmg$LP;"RuU01`J.4hnr!oO.jVu%;P^NPCD]su%1d@p4SSKNn>8
M]fcNp+K320mFEjK$jIJV6E96.5/1uONgdl_<D#1&]9BXqX+;kl#x/_,H09Pj*"o?tk[MJ}e/sVn0&9)5nUYwO
?!;19GsEA|oF,}7<
&PL70
N_tp,o&7>TKuNK<3zg+_~jK?=TQaw*`]-f~,=[$V!56[8iMXcJy/f5vuYsS#E<9_xjIg"ZBdEK7Q26V@myK>)g43&go>)VSvsr>e)P6*s=?ZE^{.$Wcz#Rm(4K|o@2},LSHnxZAyju$I=k24`I0rS0-g37bJ46rw"eU0@X{88f&F`8E)o>tK+a{P|rTw+I,giCpce@37O6gQa#S#6v:8Qk,,%2%oa5(N01?8.9QL+)^Y]!VuABLB+qx81G473,/DqtNsu$S?vjn"^<.IZtW0Gc}U82)ISc.0|v,U8mm2QnGFpmmOr&6R;56(`
/Y.36"OmfMm[)ZD5xI?GT>yDP@@7gl57|y}$)KW$Rq9X/m|;27`a4C+E_SH-y,Ong6-L#b.t
x#g
QrVo-J6"&NUIKV<
@qP;K8mBYc1A@4)BbKVyBPg?s9v=P$CCl9)7>tBo7PC$9pWp&B7`04SOGaU@oLr7W1]7a8"PqG3XOq4_BjyAs9WtgCl_cU9jCYJQ)s1<w"givh>8E7)i>/pXDZ!5ogxbiA=E;f,G-Rr/4T74XSx+MR016A2"oHh/.qmc5c1@fKQ/Xq9cc}OM&9gW]`F66U*"acUWf54771jgM=f8ZLShr<#t#DH9xg0zvAn]^^J?3uE@n:84pr7t?*W08HQ_/v&v4RU>A%f8L|cG7Zy[*t".U(6a%"Hp;)pfNRpU`/+%P,W3g7cMFrMY6!A]3C2EMLDq9;+c(tLa22D>y>j>
!?I+R9)29jsyC*@R}:F5>)J.*6xd`q.tLNz.zohssN(n?.u><-}Jv()i
BaT|Ml+ChtP&phUMElb1K*F8o,=61{#l^:Y<efoIBX:-#&Yg2l9tNnF=7NA&6!t~<;kj7.[-3{_A^o?YO8iU1ij:
sHR"CyJcU.T@;QI%MqrFa[JF.1t-HM>>|?C&$*=*cVJfp"ny%nG<*?L5XdCm/?I+$9_IsmkERLT9xN7R{bbLR^S5IW=Z,7+y"$~v]Q^%1N*d7&GfUZXKD[xIP[a*$Om7!%~m$886#0.<6O(lA2`ku?wrfB)bIvYXUTcZ/
?;]#Xq9>vHqq
9{,"!5s(4{%^$MeCc%wC
",LFf7mle1iGlSO9Y#u"A]`_<X$>Qo"=GXY8WBJ1.70`+#LKwm-SnSN5<X+kT#K.e^y[dH
Lh3(e2w[_"W5^
Oe9=t>!B-A`s!|o+<a-XX|*l!+(MI(u?W@<$^h#OinM*S,]=kwlTX8GAI%`#C,1uvk/OkVGg-[T{M$P)2E/TfHG00pDE0y">R~c*=V.%5Y$h7m_L7wv~3dNN2%:MET,HLB3[;y,K8."|`>CJ4JUC_6UevQ1vL1$]!TIb>yJ^P6k&E{8^kEn5oW,G1US<((l[ft9Q=8ndp`MX5Ay,v9xG^sZ`5PlFn!@b.4[t+!jVmYPL>>,zg+#g^;9n9[b
cl5ibw]NTXw;v5uC;&KAls8XO%.VcqZo!b+h?]`{^3=+E..Te%KL++c)wYE@M7=$2~*V4,MMquFr[u_H%fRS)lVrd
MqXCY
6{K2hre3RBZ6
[NoLA!ebeo4$0ZU
(+BL.X(<0m6GfU|%UpdZ48;fNo0XTr.gt3YiUU{Zu*hDo.xu>9J.jcp=h>/g*p?15=[x=T=Mjnz$!f(7.n8O<=K:Ye7HF/H4Iw%1lEI@/SnK5gSB*4FKPI"&F7+A9@H;O`vl:1&)Vj#ILm0SIuM26d^x!*y!pYEtFVw*dE2mH]Ke51|0H.KqMyt]g2R3>=Vufcl=|3kk5uJa!fTMip5F.:df%osGNU?8h:ZG^/hGuf.1cS$K._#eP<"Pe0Om8O4kWlui;huK$iTaQ9U::H.gQjuoo0slnW)XCG.UqT.Zd7$$KRU?lN[NV2H
8?pIDt3oFFKxN+6+r<Bs%RgYF7n$~!%*nZM!!U3i}#VU/+@+zYKrO]agU.A&au!%unMcRrgV,Q&h9%:ILBvq
Q$nt8G"04og0QS>Z)tFDZ54o4@73)B;"#yd,
E50)W0m>[YQ!Ttw,oZg>:;{K5arb{`,u+)cO9#Uh*nsOx`ZwpV8+?Aou.VW1
!*KjX7o-&BJRvG&?Vv0z#)/VfGc!splqe:iRlgQAd(5]jp8e1uAp.47!w{9tJBLLmg?1uHlf<{d47vq#<Tgk:6[E[MIcm7!.M[BVHU>9?K.CqZM%Cs*z&<-Bw6U_gW>g5n>IC{I2.i9DI*N-+B-6Ruuhi3lZ%5rGp][>1Et0YpWuA16Y.r7EcYcR
x9:U~+a1}M0@zK%8hD?_NrHMn,-HjBk-v+MA<)^<X^s:YoV_F8McA#><}(V
x9s=b:=IRHs/??k4@l{]BoqCth.#.r*gIJ*DdfJGafbB=Mx?N;T(
7iM`&AyRFzVU.jp
jL[UPZW%]w=ce"<v+9lfY3CD=(
KxaaH#"BJ=G+8qT:j_m,TYV&Epu^bs_ModPkP9q<ZBIb!?=[XX3
K*6_Pc]FPw?P+PXB2
JYF=:yusRV+BYygHT';case"pt-br":return'+]^@j:sX5/$fYrR1lO:j[ED<C":/`-f<|Zm7Z
;b=M`H_%(h0%Jh8x59C=[H4OtQFGNK
W/E49[g^eRX
N+ad;";ewg=Qwy&Tt#Izvq!OyCw:6j_.._OV.xPOhX&WF0ma6+s-$31z^]y$8=B}*_Mxh2&7^8/;a+[3iGsm!NYs!~4X%rs#thqpjzq|o5Jf&QGJWJmsLA0^vxhfp50Id{jdFccs3Gl6l/n3Q&B.l@Y.oZnnOEB9CLd#AGH1DQ.Mw%wWgz<cU}t!O!n)qKl`mhw%^5wXc4J@_mvbr14Sd*_4E%
+PHKoAAV*Go9T%DT@Rq&:35LnWn[gU=vk
WTP;51#Z(=1k<`:n$$^x/x1V/<iw4oVO7W}?|.0(M4$5kBE&s_r$3J8d~PglGvb
x,BusmCCH#!m(pR2Q^sZTkJ!h#b,*F<+-b7MUrweBV^m_le"G6mucbu*N=mP>.I1lfADP]F$ks^mz;DyJn-4!!Lu*p7cjsZr$^}I~#WvaPmuOP#0s#WPQju@eC6nt.#f)3q-w5&)l:kjaI>Hmo}<:6}B!^0xSv9x!PS>jlMP.AfOT!Yu@jbjEme@dP>2nN.>hX&.,_qNYxwZ$t^EpktE:j&V)8zxEg!gKu?35#n8nQh.>Et3d&ZLWoa_4NPWcGm_{;Y_Ui?$X02x"Sne-[_6Y$=2;_Z2Sk"rpeAxmbQOO*hR$I2>IOIJxv^+A)rp^DQ#Y/"&0GUe>!j;C]FZ=:K^3!Z.tTZ`gyCZg=sTv,.xaLEiViScSL>?Xj"8*R)<EF1tSH+nI6:KVGEs3v9fmY+Tvn,M|RN]$@;_ie>!iE:]BHyFgmTt9nRSNnN3=UH7^[@NGqGO`XpwMK6pS5!bQE*lzsA7sI@XgnYNqeXCK$2p><x<.f}^&d8SW>ob?O=O9Hk_Le#I)HYKG!=SYZTde72VLq0g/hwywz%*JZGY*B}oaD4x#x
:wr(Ir6+eZcv!9W-k4U_2wy>Rn(nHsLLc;4y$PmzedW(q9#M=,)C]_!Eo!IKon4a2BVHd!FJqm4WL#[_404e?;Ieca_gI>7@pTpwCGc-FkDBU?,x
^4A[9u<eH@o!IXs2DixTw45v~B^uT1#Bx7<fQFl)B#Gh7EsrlH%F:]=
66Q,78|yygGUmR9":+/$R<Ab(nsf3q02kO?STD"@98VW!&iBsY%B)e1/[Cda6>Jj#Lgrcer^8*pkI:cXFKBK#neJn1
Y:BP;L$sdGfeI*UANYtaR*H|&WHzOhStx`^0#8w-"`P*@;n;n,nB*cc-(:e(@*j[&n*[:}otNH[}]#M>`qNkpL9^v,BAb`#;9&FLQ)qb2ffWP5^hovKkoKH!x&/ARgf,N()o$&K_
LdRlVKe<=n]`iH+OX"C26uV"1%mu<>hy@8KW2ns%:Rr5:Sy$nKcnN4^WgN)Z@"F$Nkm.?r=o27:]{020R#F&^7uU59BY}D2!s)HT__[1:t_QX_=Y+1]3iM=#JtfdFYRJs6=LLjQ2#o%Ts#XUy#0Tri!(S$"5jOP8/:;x<q35^?=MB+yuqtdOFAV5+:z]c*Fv;40ar*La>64
z:t;_C
PUk,J,c&
UmSP;?26!=spc5Jo=w
^"1U0.bJEc4>R4v0jREC%7E;fZ:?!{1r=8VYJP+cwG_%a[h5KR)lvq&.u#i2F*lwD?ONj"#`0/rp6Y0n#d[Rw1+1D8H/ul-tJQn2:1y8etH%=>!Dy>N([zl+V_jA/nd+.Q):<VKd(h3ogbwhl+_Q:A/Bac/-v}$BTqA@"+o40hYPf#(_*vPl5P2lnGS5GOjF#v;,[#6,IMJ%<5=wZJ-m2M]EG()h
8&//aYF>i1zTVTkggmM$K^=8K-*7l(Wg6#*aR@i#W%pT9y8B*`$Z"acw4GWy-"RSA1cP`YR>UWfFEm.q|ox/m8~<~VC3X*heLK(>=$/x@dx0]]]_um>b!+Vw)m>.3aH-y@SD[",S."!Y;s6C7Kd:VR#R.Rz*rB8^oYIhEi.9rdV<umW:NciH{IB[OL}F;*|03ayCZMF,8lhDEE=NPI3/t5~]0+tdKX(3JxD*LaOB~aSvgGq=Ji4YoIkVKG-4{wgHFlXu=ns?^02LDi%<%lv#-8)Q)Zval<jHNC?
;F:#&!xF)r$nQcmUL"O(vj3s,C,k|DePGDChq74^3mYnZ6[BKSbESbpPX`J=;k]Z

_D*4CRUyrYbh1>3J).1MJA>5U%p7/q-Z/._D#%ZOc#F13/3Te#sdOB*w)H
Rg"$cDDW%L)vG*;kGA%0xsTL0^sh:FR|*7]D+"C-w6H0p`)e#,Mj%%>s0#(/1;@")vjX4ji]5U
@pi4C>+Tk1>&Q,asi]suSgG
x3&+>e&=E62Vtd!ci/5%dJJwRMAU?1qeQ>^VYJOtkj1ERw
BWeE?o
xKkL/c_a?!{>^;u[L@4>Jl=69Cjw@ie8*%GvNWmB<K2vt/^+vg:32x}H0gYUtC-;`&cO1:]La+*OCHB>NMUl3y6A`A)"`+fh;&fp*q"lg
)[c@[H#3..o&v%B,WeIW7^Nu$[7FJrD+34Oo5xHN4=F(2BE[3GU9B%"f29<&KE3*9V2L["8_&@KYnxNgtG5c2?BWjKf_b*"g7*~%XY4.)5.j*YrN^OfAamu>73[]
4]8Ol6PPM!8Yo_EdRX`o#ZNI)R=O0m6r@zX|7>Xe(|=W.,j8Q?Pn5zjM9B0|4Z
p>9kdjgk7l:HCKyyn^rk6dRF*?cx&:Ldkxuaq:jK[2mmYxD-N`1;=6+XztD@w5-A::C=_*E/vZ:@P`5e-o&T`y
S78M=f3lBBWNT#UgjMb%HqacI<(}vmsaf7_lcc4$%PK,`W-4Z$K#XrYqvrq9I}`5hi_Zy`2)5}Y1;"H)#o[p*rf`n/Mmz&8WK]Cv&Q4Sjx11
*>-:
LfXaZEFdLGb!1S
b;?yDk@d1e*6=GG*{J+K`7W)xpE^.5E.Xu7av!2gMxztX';case"sk":return'*]^@1bSZK0)!$tc"I3UWSv~I#C[@WN4m;nk&q@EAp#P)"LcLwLpfEaKQROj8>%|TX.hW^^5kGqKGKIeo-+P7,
_vL^Kue_MxX:CfFa9IJW~vklg1..]M}99Ux.q*BJhY4BBfAI+@77~Em/el>GX#(B.LJKwcjn}D!?y$"U<@g<^."[/C(09YOk{.M*oGFmYwDTK@hqYuZ"G1^1oJQ_.0_1b6zfqD?SicG;@^>pGjjHCMj3RYfT>sc$:b,LLMDZ<Bdsve>j=Z8?+@ex%4<,g*cgJA&?oC+#(LiQ]:D)$JeA@0+Ewj^K>3ODWEZ:-h|".>^f9_+tHY2m2EO+~-!4@IL@V_MSOe2J=$}H9M8c:b]33
(4C<Q2+w+$PCGH,d"@}EJwSD3sqx~xy&>n~>4[`2zO105+/L[?=7vdMtCMROvp#u(x:j.@RexqvKJcHB2+TA,bJ:3o%lswl37Xz!~[}CfL/%]@]PNx4OK7S1?0`KC5?8zyqJnZiWUL}6u[]3$)
eTgzP(Z$_N?l_~=^ke7:B0d-
@ie&ZjIhMpd5ZXWH{K<w[c/mHu$@(&*8^p[%M,u3x:^k>9$DgZPT@Qg

$Sd<rkh**.A4eZanN>qa$5c^N[K-Vu-&65jarY&UQAW{wCGSkg80XNv"x0G^mJQ].}[PKEBq)*fS=*!gA*W2[WnwD2bgD+(`^<uWi0+
`R06T.H
<T0:)R>>
d!w`>ulNQRh]:wlLJ7oN.kXc"mok}O3N=]-xjP_D!-0%_+:VY,$$%ApE`>`X9g3%6Vx?k.*)h3^*rk?yU<CWjH<&28=*W[D1I;Ye6vXbd@jdp,xQaypGQ;[B,KRdnv):ThdkHZDVHS+$?&[O$s_r{;fYb,^
`R[lY1)e3Zt$6vi3;XS/(gfN2
J91k5lIthk}u"2f$zK0pZ@,Q;W:N5bYGOe}WF[li^(xETM:u_;f%APW9puh*)=jn#;a
Y@sUPJtn|*-uLe22]G@E)l-E@D$s]mvg;qmZdB|dv1HwUbF5XnVg%/Xf~"y_QR{NBuoP[G]q+MpRL*5nBRg[~#cyyZ`&&Iuh5j~R,_HsR9e(Acwd~,U*"J_&j#z4Dn]rml1CbxFW_yBC(k05&%~U=GOOf&%(WJgajoDs6f*&vE"/gi:pfJZ:iyw"nOj<aHV1`BzO++@9#R81<+/dd7PKk*1l0A$J6B1uy2J`Ks%g?DEGc-#9K;(7$_&^~C30|=oV4^v)$J:B*1HZr@q4BHewsDn+%aa2m^<yAeG*(G.ZOA_?&8>=Q.{?&ef=h`=v`B%$I>h>eApvE^>Qg-O
M>Z7/pVofP?Z_[=bHd;YvfvHuSrInneLlkBU"r9P7a2`%YL&P.s-S-51@A4m.)cIJnL(?O0Y/<@tdmk"7oT&!]CNy[&S(a@Of</d/"!bEwE`I@@EFa9gt>>r]8AXIS4C>OGXY
sve,o3&Qz2p4/=h0/9av;,qr]Z;kUd?J8?
K5a-xCo`X0>6QVIF%EO6Xl]kKu!G!tbsnWe/QD5rat#P/J?A`6.#hx3a=";xd?Ul$tFP6xYh>y%K8!(KYC;[T+v.?q+QkXd!ZNW&<MTV8r`.k=a@7e-%&.xn$kona)1j[;d|Pfh`%/IGNa
(!QCb4=[[lRa>h@x%8<8i)a]fO^5&&Tkc!&aZ.Rq9C+6K$:uJ@#vTRy==rwmztbiZcLs(d[MUo2P5S5SfxdC_(/OP>V+V=|$]uRvzWMg#P"1/g>o^?=>"(5?=SJ7;%S(7O#HltDI<JNYTI(WV2e&O4cRXu=:Rh5+)No:^D$e.)z*K2p;H>"OG^rg1?gO.-}J@556L7%&Gnt=,Pv23tyfQ82WmxFyW
%Q3@])Sz%!sya1C22S{>Ay1r&B_Ni
II=Azs!+Xmh/7&ddgl"4h&O/Ck:7Z#VM};!e.3k&Y$g.s^V;aB+<`vtI[HIY3GuyK<MHWAOWcY/BJTTe5G1,b0<#1pv`"iB<i*o9=UM+YW&^V-,pG+SNu6:::im=OS$okit2SoDg9iE!s]]78c_xP#&EnW~K]ix._*2M`
4if>6P~``Ic?VcEgFJm!O>LmZ:#@B#+NGsYW-L"sEQ_d;/U9Z"3<@Fa24K!x<DfQlAmn[B]x{FLp-u4+j%y:*q,p%IOO
Z*enN7=de{xjjlfsQpjx.Q.iO?O{elrA31q14?1^.7/yvoQ10UFPuq;_efx6mHSxLC8wxk_fG$+p87B*"J%~fthyDw5dU-PLh9nc;Q_?ADLEPEd$V.<prpY%suq&G9R.KO$Z%-.[.(X>]?d9]bG>_q?/&^AHEdO
]WO/!D8asXgAK9C
]K=kQ~rP=^x.aw%/^syU>GCmB1s95*2K?GgWJ&5cRB+X
)<9C6vhcxi>BcEV&g5z>~?SmpvXvy&/`b00?B3aSMHJD](5wBMQ3-!18FlXs7Z[0K4=iav2g"&P?a;
Q&j-W30&e8dvLv^ZpivvOO1jj<VWo|Wag3Gc>I2Vp;A>Uz@zH2&-G+PK_w6
5B3@6]WP?]xG3LQ8ffO"y;Hhxe*Ld{!m&j=A31+5J|]K_s>D*PHoU@spNV%(bn=h3u%I<Mg."xOpxzpN?:3DZ[XRnm1]"DIYjW:v@~f!;3NS%f5xs84<A{$3NwQW/k%;q=:f>+4+v#*4>t*@8+@nF/R#9j)5kEJ4GvM(i(x:gsXA!lK};.-3ML<4oI`v;Cc@iXb~4gP?&3Zq`I5/iZlgJ+e1qac%>i
ivOviHOPuepBIC?,qAD/8"nJlo5>_R
je)9o^Hy7FQA0E/XTDD-)j/)Yyn)!8(H:gV_=rvhQm53f9Y,!PRsf3CB,+vq+&,Ojx1]%ZYaqF*XOpL2nc*J/U#uP)K<0V?@]mE6UEj3X*x8qMVdqd>*ErD(a/?:kHOVAb)#Pt1!=f]()M,Y,#F>caD1*V:
:~mTVl4LlLd2O06$i6h|)NFacFE^eAC}rCCnkHi2:GGGJt:A`n]27*xB((yyBF)~>
,Ko/3S28YWT_nZ@uR5x"p*xiPL.1k38_,,lc.YI|Gs>~h>cYUWfF4`G`FXC?kSh,"2oKvpk
N84_e-,kbJqTs(mL(vXO`
E*^{TWL)yZFHSi>?hKo14y<kR8-K!h8$<qbP[A
v<##cLM<Rm~g_`FN,5[8jbvw2LTqmb>Vl($kLTxYK=|r%o|kl9$7%tZ1Sd^.[E%D9iz>3F<PQ=Ei0^p2;)J#
^r*V^R-Mm(i&Sat<xfle)ZW"0=-g
Q^UU]x9,gKn9&47o.w}a(gD7>r}!|0S/f[%0)8DSr;%oR@n8qrld7gB,MOM/.0l:7TKJZ-Iyw!Q';case"sl":return'+]^09h"+^/$5$wG30=6_{By:PPb5`OkRD)r>{(:#g;$=[-}q_&C[[2iF0c0LY^@C%#Oc@[EXUaR0T6h;1BYiIoBL6:)7[kyuZ<rim
!UNyzG^[[n)C=[zDup*7h7nb~lR4QA_6]"W^I>`>oA<x=@glOC-q#z)OdpR_w.eGA$v/J^jJwkc!Ex7-SYpo%W$FA-
cHFHVa<E+:
*HyJsJWny;)?g2#-6@`JB`B3|5{nPnTsN?m[(B/bod6$@MjdOyn@oV0ZqA&&dD~5>@@2}s{2i/QXSAfTGE|bYinN)sfWra/f*#n`UU_0]EDSzS3"k<!p//wU3gGXaG{aG[{:ePaS;;eqs5A/1KsjHx|J)hptG?JE5tI"|LJD!ya@raCG}!ZmZ[=LO3]W(&aursJ%-*KdGlG9=$gaz)=7GebnaCOyGv#sohPu~Uzb)3N"vJXp9#Z^lcBB;xd3NJ=3hi6mgx!f>*Y+`@8.irLr^AV!%
AiN<IhD_C2cah+D1:M</:yUo`aq0->nk{dw&+%Qs<.i@EW+i0`1I(PsyTycVa1Mnalzt"!B+;3I),pIJpg2
|%X:"7Er
5Ft;!_hKue<n^$*5J!Z0cS!c_QMLF?os6g3{H$^SS+M<Xf!`F&9Tr1_VwNxr&s$OvbN[fmCH_u-gOif~lI]hN/+JhOCuo*&Qoo.yP#gCC:"^xhF8M4b:%P_q
OI>+G[iBQqaxAT"W<Ma4O=!Rj/E(.0{hTJ$SgYc
}u<S.$yQje6:vEb6AfvUNfYox#hboVc6n>b&veF%?eTs7&gBt)a7P#UBkuJ[^l*es4O(<GrjbtUhu&e?`4*/7Tf5uNz4Sg5L0ynwcys/X(jQj4%v;b2*bVN[7B@)h5B0"y-KHp0pZTr=Ckf*6M)0@oxSEv9/&sP"Al7(bRm]wAZe5L&LlY0hQVUQ>d"2}doUlge)oyxO+9YJbTd+uxK_a["tu9oMJ&j]K(*3qMEj-h0*"IA=vJ;VnoakXch-#&k#l0yct7^!@n/yx]r^{d!V61!9ig_,X"7
MN5-+Y3cOaO!43%4+0=j*qKie;
wdgXT2L%pogu9[g|${:}L}D^AQ3s*%WeZJMPo_4Z*ew:i6jO/P-Dxh44Ki&GtHde-obAhEop9bJ+1<hz".J.Sx$S0v4T$7
BY_2F$npMdtu"
kE}V2^!JG#
-iY(86%K,~6<txZ9QPu.bnFf"JK1R(?9,0$;ML$JDK-x!tiK&%OQ)7nPu
My1<SrYceA4`8aVUC*PAsy-Ky2qaq`Y3c-OC>0rNA!-"w=c}5_,dJL$dDY/),]_:e^(nAJJc+^<^MAFx4l@^1K:bnsi<sh_#K@lX@ki<wq]yj]0_c$eQ>!+D`
%T_Z[7&[2v0C:U)G:=*uVbYh([,+6/bl".
|OhN|JTnahs1q"%qQxh.Jc_B133u.Pfg(dq$X=BFESZ:&%)V)I[M_>8*kMVvr97R[`;F!V!mOPp<Em92/SV2~AYE&[UOgp11TjJ
z.vNFdgiGwQ&lDIS=jt6sHSJ0_yQm2ZPwYC<Y&#K@x4K7M!(,,|+YuvYKiE@hleew%sMgR2F,0_iEhc<k1(;7q1VsGr/C*wg.ULpR&a_c/|lj2I`oopiO=ESEr5eF%wCgV:La$K,qUL[g/.chedp1Q_y)IdqAV-#6w
(1K|ZBsG41.P[KKQ!$:G:X<&tdYA_kOxO4ET-2Y#"eNNC$MDAKbV.d$Gt$R1=+sT+4Z12$U5[84`jQ-q&xP9dWMq]eId;t8<@!7^J;mQIp3*,rKtg>Z/>MqBsX"SPA.I*o=KQRhE^|7MAGxd/>/&FHOHtPS,6U---QfV*.G3#NM;`NJ,%Luk7mS^=o^c%Y"UcaIIZKk^5FEer$g/sS>do<9H-{#Q"G_^mfL1HXO%^tT/3Q^3t^,p,!1iBhy^I7TP)UIt!H]$)`pa.3(t%SxR5nKMf,j]p3La5PawoFRX[*b03Ci:5-l;X|FutC2Ea,X}@[>ByFegEcfZk}s$,}EcC,1)UmyS*m&Ek2w7q%vvYy:W.!yU!9wzO>I+t.Mr`+<~[2&2&}
QYWIQrvwLEq`..hW+U=ZW9%gr%C(Jpy(+5]4Y>-pZVP,8-WA3W~>Si=T,:b[3sN9S<lLRHnQ7H[36w2e9k`fF?(,Be!Q6imjrRt8U<}s&eCIcZ_eaBvpDh]=66dx^WO"0sKb-k*
p>xNi25`-F`Mi%urbel]|X6W"&XwXqrxZAWwaA*H)^aA^9IC>&^ZlFB`xlz/Dg^r}%aB6g~w{lbpIS-&NJsuDM0p/[T[7`D@|eBufv#Rio$S^)&z)3wXSdGP["N2-Txi"7_A1u6KX>AvyF$gUl2P~U*18,-U-?&O.C:$
x(JACg9buF>J0fJ#^zKL3#kl7S"VuW*&Y
e$;1s%X|MsFK.!#"R1Za6v$s/.^U/*U=(F[0BJ_Fp*vJ%|IRGd"k</FgjT08-}yRP_/-LqVtC`<Q)=k9:[53K],dNy)"tN,}[E!qBCKT<`"qs,2P<12y24)fK7u]y1nywSy3Ati+<.Sij_I$Bc&mI@VgUG#M"z;$P2B&1:un6EArhwu+tVSj3V9GJa[#XN_K)v<[p7hgRbQ76crC/
MbOda$am"m`rT97dM#d$<*Q
V$aUE][
]$b/nq;H6N^Eu[P/2[-%BSUx
t.;_cg)iCf4@%g2eQ(|e/ZA2!J*Xedy?ez%^VVPa[%pFTYkBla$/o*20G`Sl^vL6
@|)XvqU@Z73Xh{>e])+uQ1uJch@.>vn}mDVs<z>:nO+OsZ-p]nB]^=ApJ#Z/Sls_#&M.:aQrF6Y@.+ovZB2LD^CI4#R4$fp<8S+:"G-MdB
(G.L~HedG85r+:]K&2`5h7"15Q5EkA;V&Xk!q@k^WkWZXJ#tZTD%E`I37o3`M,?m5g[6h$_Z=%V4|::!XAu"ZQs`u&xTf8-
_0gGG!rMYZ,v$kKheZmu0]hEsB3WaB7MF7(ZV?<;/pg9l7*cR+XDMuYU@ui0mm<-r5%/."&-US>dK>|rV_<9<W)Il"DZeB,F,?#DXJg=Ur|^6R%?@qhpbi^V<:_fIa|Su&d+C<II#fjL.VmByz$h"ygHT';case"fi":return'.]^;;6OWb/$2%[wHAjAlA^Y+1")bG?c]<i4N/VbSX>VW7<BE=NCmoiI"ygsuFg#9D_9u[KCB0%3=u9-5"e|G1xu901=W21&
9E*(@yUw$I6p(tRtFa-lJ&E>LXBM1XI1?t&9>Js&MilmFK@y5sdSAK;hja5=IiTo!mA
r[8O/sQ2Ak^EDJz8"kFBQf5MjWH.-].nYSSWK@%MJLYb$u)Sm=R-0s5*Odba>w5ix.Fq%9VlDBy@Xs0&2Uf:w
``w)wwsfpo{#0hYut*_ybp0Z|KY8r3(5P4P<L[c,8V@xb:o)R3e6M8gU}H27=l)sYOlyIHPe,.<u~4HwH?^xPST>:##8v[O")l1tEJ!=[bI_PL6*I*}9,Mj>-i=!pf_qP$7Fd!qteDB"8i`=Za|+t9kl{](91,U41KBG}5.dNb`r7OXp=:(*HW<Ag/<gZPhGVux]([+YSu[:F)+Z[38"mSB$8vTEmJk(4=jHftG+bP7S])5vv<fN6j6Nd]>il
sn*EzEKQg-Ie7x>C()jmC<-qrI1K/C/#u*}1av-1f&ISqV.$-5s8;DO&B$XUy^4a
b}3?ZPb4X5#wc(aREJrz90I<,O0}%FoI:iL0<%vpp6p9lT*/#E4nXua|BMT{:Zg2Xy&KHe/:FNM,PRSHV3-p]M?RR9fuJBF$J?`vyz.E,.VN/IRLH:3p
%G#^OcO<iU/Wr(/jdQq1Wqx"*fOnm"G.H?
m|5qc
4H1!>T5]yKRYDP;U3&$/bV*"!K,[i%((n.$?^V9Z4PjK)wI^MmlF@TJAFnyFM:^WYo$@lhb`(<5soBf^<U;RTM&.nO::>EnUKgQ=)xv%l_&I:IZ=b]""N"(9:udA.)EVbXK+S{=?,WhBDf;AMq*29_6}i_oE/zBkpsy9STrH%p)iw[5=N
.FC`%i/]_,&0(GQ#_EdOuqGwS#W:OK=(P/8!KNMrS|lMpTTn3(Rp7msM[}.)14^%"ttE#hE3XKCZKJK(cMw$>dk;:t![[SyXN),7R@Eu&r&I*jd*:
-0.*>T9(/<O6dpk</lpT,6.qYKC5Zq#xK$F3C2=Y/3+Zny<myg0QVNJ!jI<1kXf}h<99owvLr?UF/
Vac9V9Gs[jnF*Gx2qPEw#eXJ+9l=9ke
UsI!1,9w$HDZ[x)?*0tE<mwlPvE45NPpn8/wd$64yDIY8~<sXF,<#9)lQcO@"($HQo1Z!v?YDjZ5tPexa?/Rj@iN<AI(T_`xAxGRla<I(1+M,v.C>n]rD`W5eD*iaY7,[
2n:VA)p(&okh,_4zrk^
FE2;$P9%^kPyPhs3L{e_MxudiihVp0FjLquZsGFPI`Ke"lyvWqb#0/9x2vnqtbc]*[&/.kkVGD+!<VH#NCjK$PXTAdk&#F!?K}[:0M2-%8LpIrq2y)9Mb&80VA+F+*BXyj,0+"*jANq^$~F0>
ujcrjYS([qNuuR<{d}w:Q!OV<F4v*fd:7#RV)*#C<mc_eN$*$S)gyBIOnWB`A
Q.;K6nT(DAeu_22EquC-BOowu/s5<K"c0L8=o:+DP/<v8Q_.NY>O/?dHT`,eX4&J&m-OTm"(bbfF$.TKLkh;F=6)oioc=h.Z*VwP8rY]p:a}6bj>?=fdlH])>>#}]nh_W^NO[D+|4pX9*7q!A(R4?ikKOnl>sgY:-7aW3upE^1]_V>wvprVjw:v}:3+kiFI]L|:Yq}qp2^uI!-WfOWO:h/llx#]L"~Uo2n]7hP/a@:$z`N3W0i^OSN.o+4/a*a8x@]m`Cs4c0HkZYDHEV!X]ob0UjEX,OX?-:.;V;UC,#^$%S}bIG,DE%}.0
V%x]V6]1E#
`#R7i5%iKBM-tA#/0~"uT#.5EBkMUb"[1YZ%>%N97~,1N%:Z_V!g-F!.4qj$9pP
CBJJ26=5"KQ%5HS==y>:E,[z(Y3uC7vG#&Zg;69cCI)x:{<P[x^Z^l)y!qA6+py;_@TBhagAf1m^Utm,G+$Qk*<R
y%?Y6=&8MOgf)8Jqr)-G:uca8Suo*i%gOO`si@=
b@lW{p`C/gi_<^.*n6U$DKw.1i~qiWU-V<V[>:p=)YN`;`9X(QpAd/<4O_-W~CY)8q=PPLc?-c2
VDL[~DO15Q##wq/_ts/5x:hnfhXW.]<FqS%J8IB_*i,dv5iv^q5T2.w*#R#QuQ5dXgo5O6rE;bBOoAscil$njQ>y
DNg@Bf;1]T,3=t?;VIO>$*d!i.2JqO&U/2dy11uo`tU~4[0|te&CE?`eF-[v:J[;X3OSY,CQYoMte*6<=y6PQ
*.3*ddFO1kiC7Qaf5=0"l`_@h@7qC@@bmaEzFRuh*Nl#L+
buLuM)T"&h#c@TN;z,&=fl3o97,y{OUIrWCgG8bZ&Pa22:1b"q~`JWdsrdd^,h8o}Z$l#%}@~>aBGt.W~K4AWfK09$IH~"aoYi%]jXl81+LokKBb`mg[+f#Ll94_T5a4d.Mp8r,4"0himOv[j[i83(yfoQA`9C{GNf8A7@SYL:QvPTO3KKpjxD6q7OoGPgoXz2p$bGoj^?JBRhiJGexAWvvlhND2J^[]"b8w=JGUYJ("/i40p4-FIPeB@kZds2COH`Pu9VDNkP_C2AFv?q+Rj/Sx2bQAakSX{vBwy>/B<k3=ijZghWdRhjTM-L99m&+DO2m;4;Y0iajkjmOpU^fIF)..D4+,X1gkb-B=}/R/Mh
n?8_
wQi=|H@x-IvF%Kke.of6y(k"jgfo`^z<
Bv3fJ;&@
&VT27E<Ya%_3;nX_g&{:s*A(mg6(N8;kg?K`|B7x7UgX,!q!bbDl)FxS~&,g9N|oHTAF^x0,J5R,Tk8Y2Oo<{>IF(%H_BhvC>m*V+IIdVDcjzsRZtSv<.y8I^,Y8.iok`;<PP?<u6*NWnF7xA,z_][&cjo5,E[~10I@07UdGA:o2i4cf2t
_wld`@s4
MoA@lAHy5xuwU,;)[KMf1>K6%P~-YPtx!v0t3(Y;`DJo7>Xlw5~Cu!YXg_%Y}wtY96xo,g<OIZCH8dN_py"N&';case"sv":return')Zu;BbT+>4S,S[w1EjZl9Hd<<+]3efalrJfgNy0L
OrE.>AJ:w:-xfoM3]0"-[$c/QQU0aPOT0nACVN
iMxuvu7cRnn-)qd_T$+,qhr&F-z^NhMP=w
TORGhdssFc=?pan~y&8?&iiSfM,n8-r;v?7NwYB33*%W>IQrodO@/y"jvQ;PE}9@WD@k"d?v48&J.$4c8g<?oJo=
:$V9"B(7{$AXmB}u66=J1D!Vlt<=G-|gufIZgsRybv^<#KhV<6&A+jb$=$s=%75]:1"VVC"qH61X79N33i|42ffFQ_n&kF5onECK@=<9:GMt]hqX`f)cKlmpK9uvJw%!JkaVJ*MyKF=vx1gjJ;%k1CTX<+jw2OKtR-]=5B<<OUaa&i:p%YwmrC"!p]^DNe|0oc2Z_71v6QZqD^VT7va#8TV0L&I/Pf[Ed1G,l4/gi7[RMI1cQ;P[cpMrJ?-L~Ky1hk;qy/

3`P1Xhc%jr!`a/:6S61DA.faP9t))jX[8IP:Ttj@}b*(}rXmA1BtumZYTjy4-k8iaXf1;Q,vYt!I&-o[rl1oVY5W@a;nd%EM7#Ztdb%$"M?7yV=;Ff,N3S=fnvBbqQLlm(.I+yJIcCwC
q-jswEgHbT!I&$u
P#M5
=A1,GmM:uCUZAV[B1ZYN-!TtkfAobnL!wvL/0LH;l]e3(7>A@?JSS5H`}uLnm%&c3[m@9JpXSFwJ{+@,c^bod,[JVx&33AQnu,[Y1(c[s"3!N%hELr,&Z6pD?sq"b]J"vo"1o.T]H2/usSdcw
4Ov+hxjL|$|qjk5R)o
Is3f0BAnOB@yj{3(6yGl6vl>$`h%H5S7a1>nCD(P+hvk!rsD2,CkY6cD#*C9(wV[&U6?dZ))FG6%!Ce(Ss<2K~$dkZa(xbnIyN[6G<(Nw7B8Fz7b;N7,J5;*vko(aO7MY)lVv_i>r);k+DHDyVy21u4G<i>e,7O_>Dx1A%X_Fu&7fRH6WcR:"e;epl3@;H#xf"M<;n"^rpjMbmR+pGr]
CwIR(hU!WIp9MO.hdks>EHY)E,!y1>KhY,LnEv1izl&Nf[`ku?SIL_q#?c,5X<m_V?w^@6;:!o~+_c~m.CN^hs>me#On~,Z9^`V,<uPAcBN0UJegEh?IS4a09_al<8vZ#4ny">#5|!YoTG-yF]whPcBVc>NR#^xAhf,Snf/f"E6My<WH$G39&txlkb28f=HB^v)_tIo85:r^]o^[@AH8sc9*P3%n`gG1mJ=E|wt1>OJ[UXh]{Mr>Rb2+{$5r2rSFwx.`/ZhaIu"/(Nn6%oo46q[r<J%W8`N[i3y=,G2N
di#4is?9,M2_frg#;wgC0/M!"tJcLxuKG#$e83.Y_w;9<xA+?KFIf5"}T-7^Tm#=T|)=.Ju[Ot
.rQ"rg2^tS^YX#~J4
e<PVS5cpn8y
)C%,50(/ag<+8ux2Ih1tm8#uO%J]oBmB~clS;m^bX,ol7W:h((v&cyP%TuA%Vqo$=0@BBW^+I]Es48|rU"<jaGm5;cI@f/l@f_cY@ixY4m[&a.~af$!b82W[*eomrn*vibmm@W
Pg^
s)uv7x6@2"<HqQ8[7u^2xQlniJ]*?h"G
1HE4A?mN&#krhq},Ms_/
eJC}srp:^nawv,QNjt#fhC2LdDNl+b3Ig!kpeg?Q_%5OT/t):)RW`M5!HNt&QzJ3*&db+]gV<mKagvX/u,xP$YmI*itv@>4y
PDb34axu
xOtIxD$XSa3A,|S0?{.^F)Bo>{?Nj(qRRc/PJKD+7R*)^gdRXCibK,uv)igm[*TK4xy#Tj(aR_1<vRTYQan1g7--Y7)0PwZ
N#x"_+4kz&^s-,l|`m/}EZ_4q964ipU`084k*tnFv})[^f>Vv>9=,1<[cQv=QX7B::5s$J-qY8e/9UVX,Xoolg"Y;)xwI(iPJ2#q8QGv.4w@SOl_,Qw
AlOIZ{n85P4HwYNIE*ft#B(2FsiQA
2RKgF}t4Ol/vWnBr7YA8lH*==,WQoIx;2C0|(qu}#QMR61r|Rq!go^x
3:,|pbH(/bHbmi:U^JRIRffdi/`44,CQN1WytgODMGd;Kk@<aJsM3ffBuY3:2+r1!%GV
bTH_9=jH}4V8h9F5c:73kV
K1N&(SdZ%j3AmDO/nU1*Kz#Zsoj.-2]83M_@lr([h8+zEOhiR3q`ygwX[cHYoY,"n`;O998a(rlh.loV6[Z`4n5O5$<+nlv=f$8omG&9SN^Mu|j
"hNe2b-~x=6x<z3{g^Y422[+a;fBwdB%r?3CFzI_)d-~Cka_B2Coru0Iog+@)QduRs;|g_PVDU]"_}&}__>0I>jLmp(o)MKL1*9q&cJmtqpyQMC^L-2+*=jmMH7
^_7Sl"CrYijG1;]D>tl*W;o<t<MBIRo7wH!qT^(VjkL1Ya
{:{GkV<^@BT#nNEmms04|z$)5T<_bq{vsx?h6_Ua<CY1_xy..=zU`79@ahZWb.M.qpsjpmZf/1
WGuOvU8;N8Yp3(e.wj:M(:nZkCV(HhV+SWkmfzopCm=b"s)6bFm+)sA}-a7}YT9b@TmR90Oi#SFsmt(x@ZZdVj1iNlHg9qCp(_c3]x1CXco0i3j[26Th&8yOEK6[0IYqlpsRHM*k-{<yV`CdXOJI@{7HWT
Fbdyky8NG^BUH:fDeNiqKSD#>;fC*xDI;=WQ>jw-Y5z)"8&(ORM+?_I>sc=]b?^y)HD+&.QH~$DX!1_!ILp-lIU%2:,6mFa
FQ+OfZO]]qpL60dT"q)!#8w&"Q:VZrbw=#E';case"vi":return'-]^@y]@Z[G.t/v)lX;%&QcBf.i}o-QA-Oax?N*(pR[@m^V>xk+me_3a$,2be-#p%=<|:[EbVh<;.Vp+oHx-ybtG7>?CAQCUtN3AFc?Dn]ZIM@tBcn[H4cqpI)m:U}9j1zrU`4AF]Nm0s3k&7?_`)<X|lzxbAXhOvYWxw|QI1Cnmh3#l@"ePs!6-]Ne<m#8.Pc[KaS(M_5g*1kk
O#M"5.(;vB5.HN@[M)vUxt^|2z`q1KF&wgu*nzLRv4qj3a,g5
^8Ifg$v{Ji`PxZ?]i]h#5zpwX6F$m.EZ
QQrd,tJyUB~RXH[rN>~Bpu3nK;<Y^f9rW=zbMlv7!%Iksmst
=xh^qG
Q^Y!!k`PFWdqC%Ik_QVOB#.p)lbvPbc&}s+:0gq5ry9PW9@]9G0MWz"]*ulLpk$#MjlkK)8C$,_gM+|ux,Ct"M34GF;MBUY>uourW9gUC]rXHk}t$u*0x8:/]"}ejIXQgXuy0ZDjBCj%<Z2tdHZL4(T-j:~u.vU3gym<}hBr_6g=hWTh~t1u:(,cm!}UFZ:x!As=<sC,^;W!%,<HSh"kZJ5cd^+08tS9/e4tX_(oTXE.CFD@?p%B,Rt;i@:<ZJg6<MPw66|VH$S5lF&PbfPkUdgsG^R9
kNwSFx@FEj#Hw+7)a
)>(2OL)j:fnEA,KOUxp*v/[Qb`T)th"81ToXZ7dC^7#3-huMUaE)Ri,TooO*hOZpB8O>b~tTJXY!6%v77q@j>#&jGF*^yoGTJ)DL3ZD}yiT
b@H+o%BggS%!,ZQeQ?d/4/IOMlRi("]U1v`{p]f]BSjp]rf
,;VNeu8Nh:`}Am
$#E&C,/f#"2rXP1B0Z~IGA>v<w^4,30?2Ws-;hZ0kUMt&//+t+eQ2aCgB3vt_VvrZrwGb1s]Hpkdp-d&gLFbhAP2X3q%0ZbJYc*xp)I1>tpR,8`*jD_I_:batP)PY*JKO<[[Mc;HV&.H1[*Sj):fwU~U@boR.y5C~c$sLX$4D&j("#H$G6b^EBwN~oASD0ke`P/S
RB=rSg[{ezA#SOYf7F<y9r({5I4~fLUP#n:oO#@%UsCM?R#mp6h{_D7buk;..}ZOnd^fq1SO=U*YKICLlr,]!j=S;A>8jlbGDY!>CwF.dAic+U=7<5A1gW3C!IfP(ejI.79E.+Yk7dix25"y9}xVLM&PWA;Q1
WkSS+T2ZV8e=+L6J0d0+hmQ^l|MdF8O3)(*(cRNPkN/qj$`a&3Xu?Vo$hCS
R0-gKZ*k0(Uvqhr|R#kR1MsUP[o%th*lMl`3&5@gwlusYoDhVk$&XY)=xIlppL8Ls6@4B&9eXv?XE!4]B;^5$X*g(nk1)bM84_oLi:.g5[!*Pkvd;T]5>6;aZEWs&=!etDb.w)^FocOd%62G2>K24LL.*z(wMx-"Nhy-_Gv<T_%^?ktpE<H0Wb%)4a"7q>#S-n/!!9c;cb!f`Mt4cX6jk:"TXd]kcWD-ig]~2i-fZ.nICwCw!VVGoCcRC^Tj=`PX>1IK&v3~EGr!NQ$Lu6P|*RJ=#q--=xDn69sv%je?m)*y"&Cta6pW7vhKLEAgT(uK/QM<E``(?.Oh6|.9.=jt"r=b4KoWJpY}ToYok#IUg+K??0@mWV1_r~1x!a6vMDTaBy:Favk7q6M#iq`~GB]%hz;CylY__z%X,`l.1G&HZ}mcWF4rQWr_bhg,nl+5;hP27>lA(_gD0Rs4!t&/4)ZL7yp:Zm.=4n-S5ROz3;:T
CwAv7!sWG[5864<X|>r;qKAUq:]=o=fE3Ze:>#wo{r1Mv)F4P,AD0qE/|^G+"3*U|5bp2
a/%O?XHo|y*t#0]g=nPXGc"l}3Y^*Bpg6ozPM2hU.ar-%B{ymyO*CtNW
Z&5~K1@9?Ec(2rq_Brv&,bn7&:d)w%S`(d.xc`v@$8(0*uX_71Wb
C
lEyoMjHg$?!Naweaa,NtKJvF^ma$*#JoaV&.(9>C=hy;~"<T|.Ai!Tip(f-CAaxJ}P(.i!1k21IIXl$FxdV/TGkrwa0/}n|#@v4QB/sx6W4Y;RwQ35sd0$GEh/:9E-kQW.K;rUk];1LOSbEP!+9E}OME]FBN@c}yDhL*A$At/MffqEX%zsyU?YeiOl$Zn"P-Sp2"^bt`Hl"OfoZ]ROTy%->oOS@]#H3$X#$4=kvo%:mF-#50{>VMJ]eVIBvH`5h>;DM[V6CJZ#|6kW3Hfn6,jL
Q=X;D6*FNSYu#Jk,2q^w(=LQQUKYgWu|$=Y,dhD:(YF}**Os7Ue^)yMfA~dXP?tkqo-YT9s/&QwLPM@ziD${w,ZYS%>W).tq()xlQ<a7fh["T|j.%H9m/0O*//b&X:>82ZrvTqgsj=BLGt2mNk9$"3jP77^`hyVgj=,NYK]>8:"b=T^?[[p4Qu
z"nk!/(-0`VR8fxa3GIYL#lPyFaMcK#2pso?4Rxs8eK!(si7W
d%Fim^Y.-l*pdrzX:L5G(I-O7%3]`mOVI
g`R[)eIQ=Jk9YJ-;pp]-)wIZDER"@0ZD4j/%tRL8v]s,7&KMy%OW$(Hi%sdj_]v8`PXM>Kf]JUW_n4@ttE
O/m;@V%ZX*S@Z;D}KDTFo*V:mQ3Tyq_v.yQl]vYYq@+nWS=8;$[k^,[}#)?*68S61gEgqyxT,x;/b;)0Br_4J)F.T.D40@75!<=_)!Ii!T@3m/V7>l@h";,gHA]2KrfC-R<j9MvIIZ2U@g:pGp,|tT0ujlK
67.6lwhgu#hKGaTZT:#^!QX[7.<E^<UAwwHENv-tjv*J6BZ>_ll8_"@uHs=pvp&U=<PIozy7<6r{Vu<rZ6Yl0oR7f)ZeF$NhLKVoG!BG)B
S@aOhMx4w[E#ocd>DROY11aJsopYsxVwXU1[Gb{qt0_q0"/&>%8n20zTIP#cjDrkki8d?<%fH23@X]IZNne`?jXvl1^NiZK^#U2WfZ#?q(),=_:iL9{AyM]pd5)V}yb@cHItg)>cV><<z4uBo+L*@%GmOC&Mu+fNlJ0p5%9_i/rApaU"qYAIi-;07B|:|rON[umr/W=.[fS`.Y+%
ENdU3^pq!)/TY7+L5^nxt6`}[?:=gX;S[Tg[Q0R_IV5>Glqjf4b&LtLLMYMe_h=]e:0%Zsu;T#`[s"(VX1x/?h92DxkXsO9WGUJDN%0m8NV4cW0f_{8Jw@k`%1UnsLd(';case"tr":return'$]^@b6LDI(n,oo=5TK=hT>&M9rX)`>P"}SU4l(nG|18l{POHVV4ldMk2MQ+x9@+jN5%n|Bqf"Qk]#QpNV*<_GpnD71sQ{.@x?$y%2d>[p`<LTgA2SO*QiG$Aaw`w5/L`cM%9>n[wJyB95]pCWdD_1sbT=QCI;5j?Q2Cns_m/_ylDTKG,wNkG|np+;gpWdp//;4ey1[t5P8q4r/#j1;*Yuo~S#F2
T(inZ4~ZrF$Lx8n
meMh6?~6K658i=.ceieI|ScM(:usW[Z_U#!:D2L@6Vrap<@D-X(7WE5+_]?M~b$pVXqX2f&U{)R,@%c/fS<)gJSxFh|krm9q[<")4ZIqo71uFJ4mCdgmGjH,ZxJ@x/J$
6tqfLb4~(a38h.t(.up?#6C9HS%ti_l33:e0$:r&w(69"e2`E/.ApdkR#sd;>P:&7A]Kp|B1S,K3WXM,yoSOog`=Y!-,(CaAD
^k#n<ft);{_&2
;G$!(+RQ]UIr+LZ26v`zW04e$~>qn`JDiU
wcBZh11c
K3efArP4Y]AU
FC;_1u1NQAj>d1LC2*y]0%MO9LK0?,aMBk9gR%;>Ik^pViUO$S.U*f.m*Aq$
q#mklk<jqK*stww+ODuB!,Gqs2k3#&b*LHK!LTs,)+LMr{3CV[^8u"<3!2Up3&l}EC4R;?L9ka8B%hBD$>
^Mb>gKB[h5jYQNe-a-#%S8XSTT$2.08E&n>(51TeHH_([VGvrkYCQ.E#:nVfcg~QPw8G/%auY)LONtKZ$C[-47[RvPae#u|jnb~K0U58Y7G*zQ^BgCoKJl!cyAqY~/)@}KK0nB;Z=i1@c
7d*Y+#?Pual^6ozeZcuAveGyBE`iM63nim?,~m3Y&rrQNWw;t^2d=Qoo&U,KN`dcU%+i^H%W2G#OTz((ScjlG_|q{"5w91"d8/zE(@;y6cgm&=C#=S7T-ns&A$6J1?Ff^UtTUacTRZa+{jyYlU:
lo)mo0+T"aX(Nm(@Vtd-
RipX(ej&u0#x-m]h3OtxxaTR
A?Tn}#X@+>-?G&hV.t9ngpz.Eftd&A?ssPTBePDy?C`9micXNV+<&DfpP6JN2`a9q#v)n%U@_>9Q.V;jdtRS}a!lt1xKp9psON.1s.gZ;nCVfy30y@C!j/I`F"msry=n=PCIpmA+
MEnB4j<HLXH@.kRv--Qm9Y
goU;[]^pl6_3oZC36nFuItUgQg2pyX(
n=j3U*.Tte|vCl>y5V.nz=vd.7#u
2;t(Nx!t.UVHHpIqZY"L_z]?gL4(-+.P%-,5o7x0]9K!2O#A3RqRN2U**k^AAaV99!yw!J[:2doEErrsQ9<?J&;|d|`qBy0(jS(eA1=d08+V<i$K<hO4TuouWg!vO,YwsIpnFJf;v:E+`xH0$2LNf9_UBqpcomi+J>Y8Jr+Rk#5``Te"bi>0e2Q.(14pkG4C,5W>ysPYxwwJM9gWLBJHq:[
2scor3.?ji.Cy0x4*Mn1#"l2TQiY.8"maap*4~3[Dc2hHoi1+pB>9|X}yu@3.uqINNZJ"ZJRNwY(>l59`z3:AzP_@4$f:f2]][D=iT**`SZKy[VFJ#No&2v*(,WQ*4-(dx@M3!%v+/*}2
ik>{=#/18
@pSD$vJ`[/+i1z2ro4&qP
&q,[qv6YF!imLD`tDP:HvryMS5O&W@Tsy+j^X^*M01bf+_7bszfOskIWC>4ke4<<R!B#:W<K&"K)?V)k:FFK.k"JO{"?fO@J<s-yueX$.[+D-kClf/U4dRdPtfu1`NDhmj-)CR8&%c)S*eW/dq=s&]C&uxJKFHOmt]n4(/Ad*?vraKgaCH9g&Pb|iC"m>;.x-qHCefVqTPpl6RG/0~:|:qe[HH9P/ee{tx:RE>NQ);!4]80XCrp21!onwa#MRI6|2C[@E36jXW/I8;OMDW3cw&:XWHUG98t%!O5rw-(&Q3K_79nOL|g9l@,,S@))/4Y$G:tm#!J|$HfT]ve3ko^.,mG_j
LS2Sryb_):#e=6`}WwDnG)Ds!zqXToPH+QhF
T644j1J`N;!:{Qq]n_XEaKmX`:s(y@_14SR&2kQ+5cr7
_#0P,x<u78@"9{)T#M<u<cM~JK++@]u}SZeTM*$HRqTuTw?R$AC_R~I[Dq47i:DWRuyAC}[HU#P#RAf3J=Mpy61vVR2zw:q|ZfRPdZ6/pqd6]1P2F^GTRfJkji`|fNUb;kDju%)t)[.oLbrvh[O`</"N
0OAnEpwran3`h^du1]L9eB*ywks#dyg8I8E^o9iY)Z"xZ4O#2,PIS@:6nCLn-d/
NGrtZ:}g0TDM,5}AgQE?@JgBgb7
4*[ud@PB7sD1qwE[qY>rHOjS,G/7Qw<p7x34o4p4)$HM29n>)Yd$x>x<H_8!qdro^T$iEFfCmZ"ra&3p&<0m4(U<kEUZchP-]3f(mq7/|y2E8HJ>9_(%kY{?s(eQhj`ArC=gbf)ttW7NwDeP$$-l28u5`jPXvRE.7d"@)T$G}uI%%x0!z(
[_]T`i;NC~i_>eQz6f1@bip~7{C]4Qy%<$/=yH`?yeE{#6@w%m4^2*.hP;WAs.1V-mQe6YdnTr=BNc7zRH::V`s?dtO
#{>UD;WEpH!rx"1[%D!^+:W-/J`Art2%xDKWE9W^KZ,#Pn.e0R
LXE54R323OaZ*ZI_sl{Pnx=.y:1t|o6XU2H".v2$F*yS?,iamjENm*;/ggUT#v{$u(AcN0>.61$@v=L@~=oX6gY7z;=%vn=XF;~!)K8sM;ZAnBxS<(0<&Vf)JX~v)Qf[PZBY4;~57vp[gT|[x>O64@&:;)*%v<6W@FjQX1s4<AT,":QWA?3+kX@4_k:^mQDYPZwclf=a
m|bCS_?F?,(ww<d:Uv">=SG+Y4
;x$ng(|T|+`,iLv1TD%
=kO;DEYX{r<v3m0v&I>1$1/gMtbf;c((jh=f]%iMl)jo]Q7bVy:UDfqrN&.#t2^z&WZ#i#?.u)F)YfOo6M{FT-[_1d]%;E?
Njg.77/N[KFm.wR=OA-GAZynuX%M0I:SUc/9^Jq
pSXZ6Un]F?;VHQyCpD~3Ds5ixpB""QGR{XI-3f-o)';case"bg":return'"ev@qg~Z+.C4ko3@f)ys1Ni
^jQm%pQZ-lg:|fDgVB?^yabfe%[2b-cTGN;$5vuJILOf2"6]-[R-u+b4?bVtVx[96Wh05bNc+3$MmipOF7i^7H#KT[3I5)3r=w|>tpu:u>pH3rbWBA9v1M{MvNk*|1.JAX!Mk5t]`H38S_MC
r}uL3ovn;5yryTEYVF^nkoXVP=>.z"#UIl>UjHw_hafi1GG2AHA,)v39aC"-N]UwhYTyV_(N$!,dBJyK_6r7yt?YV}_AxCSkZa9[icI)rC(`cXJOHuy.NHp}Y?Qd^#8Op5Y+jCwta=RG4Y)|Q9%er*$Ax@ubq<0e!CD]"At0f+NSw/C>FKaOd`6&nh3)5UFp0}_]H+lkk`&{,Ua]N}[a3FxMi7g9Uz)p@nuTy>r72|6B,GC%-Yoh4yquw8*;<,G
1+Jhb0"mF82DOYR-O#:!C1turK/4oU@GoV,1?TDVgJs~&&Els@p=J~O*]G"RXhZ?[k*SMosm.v]?f&Z%[suo]LEvOHH_vtFjD}ogiOq%3qapI$gC4tB|6zS^tfks%@y4MF738z9O-]83cC/ZupZb%up^I~:Zd_sOO$b%BCs=aUchPO4dOe2%-[xxtr.;C^[MNsQ)GoP,ZEW3#|>@Anr6LFeEidGSU&@8LbC7,(NdPF]wfc!wi1f%A?Xx)VQfu6VHNgX:$7Dx."rUuc.d={.P-AD|yw[BP#n{9aJ6m|Wn(*_=Obo_=!S4/sN]5K_x?L&lXtJkPU^|83y9D:Dvg^lOG4AHgG9RD(L+rKU|)-y9[6,!TQOKm-$kGB+omk[XIuRS)x/@9JlaWFP1C5(C!
.MM$B[:lX&ozhbmp3w*RCMRGX-Ec<HV9%3S&v&Z35Gu9%P4gJE3IiPRcR@)ZTT1N%|6wO<U6hyc]xM,/oRKFl5=+^WOfEUif(}(M4j$Y.TQr[,
jh(;sRKakM/O,l&=jSHo|tyMw62Guv5:Hp:!6O{emleiF<<o5]68!cyZlcpB|KR,y&;R>x(?{LD:p!Di"D$-pP}6m(2)$s$/K>24N7UWqbSX2)=IGU_
~_T(Kv7`)cxMUD_[}yjTj<PW4d@ddV>^ld`*C;NCj"v5b;N"Um<v_e`P|+:hU3Fs}wOs:Yi*y!!3kp,st3/o0v=@Kylmc$Sm%n+"{6@,&3M+mSXkgq{?.<1/l&$&MH>!THn>15t(X#6*!cu8dgc!RC66p=+w}wLwr;fV3]iTxe&4LU
,pFnP-a<_xF"u"3e6N%~a+;eSjxu/5p(6pkn&buQAm)$UV.*4_A^UJUKOvNJ^l2ge#)s.94T*0CtQo>C+JM{.7Us;2EjjXB1ml>^%xEZHm%,9W:pA@qjqPhsx/1A(PrsdhwA9a=K(HuqhLwCA>/&(;&Q7Lt;e)lGY~N!#S$u+[@aKm:gN5&M5IL2Rb[C1{CM/>rU]
Ft$%m_i;Xo&FAA0Y&w]9`N@
,|^B6ZU;y|$1LG#OanCU,3kcl3w~O2N:-}d.&~Eis}+u#F`>)b[VeJ@GWRDEf|R
98P`#acJ$2P`-4WNG%T:d=?M4q-atS`tYf_Y67$FlF"xwH!Vo._HJOb2$7EE*d_}``xic9*D!fg)cVs_))<2%0Nc@UPSQX8gh@(<u_q!>;3#TOpb!frS"8yl5&XQ(2GVfB)Wu9wp$#6?v5k|*."wR`qA"O]|;ak`/K;zxxQG-w2^aZck
hr7w
;@N
"+Gb]Co
1z.FP;wc/#s#rP)cT}i/RUnX*hEGt,kX5pqA@Xq-a7M
bf<2
gS.@Mu$F()Z8XU1#`"<g9Nja?Ub/2xnB0yfVHFkkt]w9kDlWaO$a"=9$^]gN>QjYBNK"6KGPQ8Ail0;k$AY#x1l%J5Nw)25bTe5tvrd92.lk$=XQ6]-k9C~H<SYrnCyQTw!2h3DrT
(<:Uscz:;`VXm!(FaUZaN`$,W(<@baKV9]_S4q|?|d_./Lpt{>2ME<cQP5)9U.ri].q^bP?Bch.hQEpvO]vX4>Mc9*ln#_wAME=x(:x8Wxn.yL+7JJ>!@DCl~3sI
5fAfw
vhJ&H
89Li1cGq
{H=Fw@bv,01[
xX<U00SsZ=AV42$1-b!|."gG6ey[?am
iXj]#:T1O6MXaT^v(kYq*h&{lxo*ujM!P58Ic>rd4X2PB+%t+ZpFoX[1M
^d%w(Rt]Q3(U,Amd^#K}gZB%+@?Gs9GFamlZDSdMeOU/0Z.GS|MyNR-{c=!ox~;9dp=!1$W}$6`&EmW
t
b&uo
"&?R;MUHLpqkT4=`VT<,_.]a[d596JJr2E|1W%%43j+LjbMd#B0.Tx(e,,"J7ndOFPtQ/F[s3-^v(lT`NXrR4hYwm[N-<-x:LuNF@RIoPi[OeV5-]h%PE=,Q7igM^:s0#["?05z>yg{T,^2TD`gv27m?*]@q(frR@D=P{c@?"VZq>nJTWYGBMXe)l1H`MQI)~`uf4%:3OCfgf)>TR3UT4Vp("8t;S^7;r"ugrS3>R1W]WxGNLDyNr[Ji^)"_c7(<IY&N@:I=KfW]ix;4Y3qn6)48nICA2bl$.=yApseCD0DbPd?kmTsk+a|j}162`tiJo(b9y<ifK8JM*Fi.Y9@&<;~lJ=i;dY+n~I1O{<`$&8Kit/0l75a"u.4U0&]I$1v;eonKRK*2?^f,HeOJ;st77VMX"1bpg@Md<Y`_!7)%9;H;48QrS5Z4>)g

`B2oDm$V0{/#3g>&>ZK|EZj(Hyq~B~Bb[PPy.o%(8HO.>xm_,m,=W:/ESUyxtZTDNkJLdA[1Jud,9@uhtC6xcIKFna-KQ-#MZrFR
XnO5sCrQ@gr!]sn^@(Yx5kPvjj/SkKv2(wDEDK$Ol;qJLjn[R)(Hx)@D5-Ywgh!Ms?:q7xD%`]@LHmNp{5]M)XZ[ypsf|H/Ue+((Bv`C.,8j@tiVJ(o1xJm5U6b:*J.A79WpY&)Pac&3L`!+WQig!,:
v3DI:J=*rQ8*J``(Clb$P:6Y=9r*@:+o*Z%c5Y|Pn=]ISlO^?T*Q-4o[7q[Hvel6r+^Ovb!3a3(IvL(s[/|rrt3D.p>DD#(FZ;
`9Nud1&""]3bp-_{8Tf,#VLb.@SB$#FM3J@(SPY$3#Y"IBo&e`kM,sW0M(XJ$3<=5cH!>R8E4m/N?CD9=oThCx=-L)=G3:Bng<RDb}rpO2]-KPG#.<*p.z;2S
2V_5Rs
YN9/M
|XdwT"9rK2*>sOB;DcjI~viR`QxX`#l9%61G-G]Dt6gy<fWtqkxY0J#^U-~+1.Nq
S|)sVP6$ZWyiZNc:k0"`.+$zfH&42H*k^?Fcb;[wuO%Wo1?w=p9(Au;o[t]lfqDx!}LnaDPt!/WvWTO5B2^WD%!h?9@4*:5v#6eUd`ql0uym:W
5xR6+^=74"?Y@kUr7F
J
S.d)6Q4/;2Dce,3TkF:]b++@/.C@7@-ipf:0^0%,U~4`ThwJx]56Z%34[N!LBpqb-G0tA%B`a+#Dk(c?$AqdT3V{tAh.>{(dZLxoH?VhYJW"3AWP,Nq."R67^2g7UEY4c$jnu~K!f8U++GYmi4<dab<3=@X%5k`;D/2hvA/XG%,
PSj_v*9)FNw}-Nr8Lgr*wao`6TO+sYtD),@|x6y,$Is-x"=Jc{HA]@QT;.xp@sa<s<[F:L8Fp+jHndIE@x;g&^imG;Vr
aS;9pn,5}-^@
tO0L@G=y+iDF&>0_<&P8nR,w$"sC<@S"x,n:A<VZtwaGyE(iOA=[R}$##n&]wH';case"el":return')h_;BaLWrE!S>rXH@&9_{bz<l,8dH&|+I.1Jb<PEO$z+EfWcqdEnW*Yk*NQ>?%f[pkocow8X_.V19;Igo&1B9D*ZI2My{ckv
4iH-TW<;.@DBtipgOx/:kZr:pg[@NxVO9b_1/,7gb0$|/6r>UYU_lMy4;vhuH^^<gFWKn9,rhL6CTUX)yuy;sx=<PJhVDaBAUH]NW%s$C.ts)L3Y.K8,
}rIGf,:6SbnANI!HAVy[:QQ#%7gdNNm08djkUQQ&ksh%jVFZ4F0;<:9E/(
Z:H}laIsyqvm:JEhfE27Z1`7W#[cRP(4[xYf2dwU=c=!UO-)n/7/(X*.:iN,>|!=3"xt5^I*@M=m"}MH&ZgG=[4@@LAO<8L_$t[ptdF+0="S[r*SVEy*&r"*q""RY8F+JcXaMtGWw5m%IYB(Ox%@Nmb0QU_:T4oYe)VZ$k]{$/rCf<OtVNqCj;%"[9Z>nn13#z>Hg#iI3+Sof0xTP#6]Ou$QV%KU@X`
Ku:zX#QzQ8%!N80g$tMjwV-y51w}#kPTI+!r4I^Yo)WS-Dac&zGn-)?@+v!bI4DdVec;[k[^y7wC+jjjC7_$.d>Pcs@V%KEhIdAxWD]s?`5UEA]sAg/o.*x2wu-Cpu;Xnd0`&gP??G.H&I(H0H<ZXJJ"[i90KJ[|J4g~9cgtc`]3Cjg;g#Ko)B[d"0+P+SM}*%%KR}8Ck[R$sm.j)y8:fmN4UqJHY
wR9|3fESZFQug#G6`pGMDQJ;&rOttZ47>OK*W<W0)XTHDYs".|Y/s(4a@~;JRV&$e4RE/1RTpkygbRB,5as02Ag[R%+3o8LI6dQE&kF-:NTGWrW;DSGk#:VVvev3K(2-7!+_O.f
s`D!7hq6p|.Q#jE4sTyHBTa%Hb@Bk0#KlJA~ZuoYB,F=]9wmOG0OSu^"+7Mw7~n<9b1<DP@;DCU=_JWgS<8Z,0B.uaC4k,^B1h&HudQZc8/X-Lv)UP[k9XC6,5CR<&O9MAwTTLyYkPGjaRM[tC!1;?1"$1Fp4uL5:0*S$mm>8a(ovd`$OHiy2u<_8`%[xJ&d5<D>E57IC)MgZ5*w&gkDOR?%.-<UKb@!L&,5eGq;O$QJtf6w0KNc:#8[tfdVdTaCi~%,2.2k*>pO<z!m..S;rEPPQY#m/G;Dsm[7aASEPc8#yNmck{h7uLf{(@e{Um3Yxph>COd17e&@es.jJ:1l8acGdNYDn:,;yo?&LNXq6^OephHmrv&0.!j;)tC;6%%WNs^u-?2kD/VIn8v08;Pj<<9([fc<7B82+a?=
n=ZSv?o=Vn
(HP3UDIE[v+|tb2RE&&6=a,
W#ul5C*OlO[BV^RX@e4!VBZygCO85;?bc:8DRig}AhefF{-X)P2fgJTC/2x
w[ui&7;8DIA#5-<x-YODFJ!]S5i+M)S!<nLhE>brq{v^c+^7OfZ{P_e9M>-t4{;gI,r3-!!}E!DmpU,JB_UL&yepuC9nW"Io]<j:7>)ii#YM]zory$##W~AKV=PTAo8BpgbF2:8<=RpAMsCWEjjU4LS1Cr#gy[[?qR
`8,A#7grtK7?%K;(h$J[v/c<hsPwxvHZ~qaT8:mw5vSi=V#y^qOC8&Vb)Jc@o?~@"iCV>?KT2`iTPP^Z>KUwf#Li#u&#kuW7,*1)jR_JCnJ4Hd78fU;Xw.rRp(>n*I|g|1XkiJP#cXh[y=X8a?"P}[(,59(/5$Mw
m~>|1IRJ.>p)x:Y>>e(=fYax(APsjH3QAc$$0~
3i`urkf1uO
0YsoiE-2@i.6Ch`N4}CHbuWr^T^[pC9/2wWfy5N}o[JJlAFV_-F@hO2Gj<
IEL+,1503B8FlIOC.#vE?7[hv#:NQBy]8_a_!givRA
`d$/YP(lTj?q<~>H6*o5v4ICRGRRJn+9G,Et$=A{;bZ"Qy-F1pf7iRnx0]lGZ<ODE6u"=4/R
h*40bCw=[yKn)^wc=.V[YEk!IV#Pz_Ng4_@hy0_gx^`pxNo>L>Dq_9S%wOcuxuk1t8{8J;qb)DC[?](OC;0Opt:c-(Hd"gKLIL}qI@]8!,5uh?z<L>{QHN)?e3@kMNYi)bloXOGN;){:-DAIA.&[xekY#wyy,YnLEmrWfSU.[m-(5KFQ1UV=uVNVt%Vl^6]gvl0xhknK2n5TN&n8lJ<rpOGCM)*95w@(yOF[FCh_T@@F~X.5W@&C}fXML#gop
e[Y^,1Fb@fp"y7U8UdSr*uRqEibuxZihR>8^N;$A]^Q,a(SX{4}^1jQ1Wrcifc`8g%5[)q>fC8o$@_u-
nO&4X.aHfGC
7y=sC*s?GTLD>ZI695:CdZqcE?fM_XsytJiTK+q=VNF|HNJ.YLvEb5GhGJhS69UUq1BxxE<ZZjhhUg:!PO%0VO^OFT20*DZav$utv:QgNL]PFyx!Wt05AC(Lrt@U:d2n?$6Y:r@nx@%=,Klm>T1Q4}O=;S1x24kQ<FUwy
.afVvdKlfR"V
<OtbEhK$ZR{h^`FURBJb<>$v4vHD82svIvr1m*^`>NS
"YLCOxiR[/&hFY:XBEk3p@`um,LJjdS2&70bTECVYTe:>??L_!TtH1R3D#TunUOgKLBs]dX`
P*qTroA(3P:tp_CW]hlUC`
<0L]iy;L2f:TSS76u@W#D!WF
9r)MF
cGAq9=B"fleM`JW,`Vp#^ip~&d8<?K?5jy^)%xkVdy+Oq%OT[{Mnahs4q.o?1nJ(nl/WoX^ma<Q`bHx=*kr(]FTg3,!f
fC#9wB8%!.#fihb*UJ^
P$^X&hd2pvB>@q(iQC7<XbHK^Pq:vvo*<h1RAUsg<@/kG9V`b4RPI<oeT/Mqpz#_424-1CIgzd9@VG6nNha;bX4ezz%vuS>].Jq,|gI=45W>K&2wx#PSNad-S]P(R7[R;GX+&Y(uAj$[lk@-Z_>c~^Ht2A|FA"g:KJn[@Qf=|q??<?O!f,/IIkc(8TE4#;6TNunp`e{8L1oH.<[[Q8S][7XXjS9nY[Mj5*}f[-XBQu2t)3n&<E"rl1.9>?m1cU[G4.S6.c;Z6sQ04h8(PAc3OJ>n^VCMKhA4Rs?n2^mi5=E9QDKA6xCA>;e7Wg^bh7Ne6I;;AyBpeh9X}QCnZ&0*kTytw^{D=Ff,x*tREY!TGLN#7+z$*tk*/2`rf(ltZ?-HqCtUBv|%)mf`:cyI"nx+629C}2/,Kz(m[r(.RP<=?cv(!66Q5B]nxQsnt^SK`A]/f69P&>(m>h`DIvR9riCEBQ4b<p-"G_D?3"<J!P#)bEX0B:"/knhe;y6w_<t-XD
:RXI-mR!X!_Fu6erYUJOfo1Elhps/"1~@Gs.)C[A,riG6{&h!EoG@f9V@k=`)JMM3tN4FU!rpeMnHqx|$nTJulyhd9#q*5O-Ab!_qIq]2.Z(K-Ad]_+2r5?ugbV|Vkr:j3l66Z/`vQV{23:?eu]a!>dGEEkUn()gu(#rBkyhcj;3g<oW)OVP(KfzDdm41fUGM*#pSpV*+n>V6[<-*[oy3i_z7D$m<mPNa&48otX6Ly5>KzFYwrw$Ml-JTaY?dGkA)ts~5U$$vII]vR-zti<r6N06xXz$d6Yli`H
Su:6m.wc-4DQKwazweyG5556p#XK
%<jso%&oM+:!-<+RnJg>r1JRpa{0{P5=0+2,
3<Az;!Fr_)VFUz:dYp*-qM*~^S;Hg#Ha@Hbfi1v,wf=3_{^k9lOqNi64oHalA$%ytI>*_^2yC
.fSH/6YZND
[7q>KIk5}ql"g;]UzA@lMi~2;AnlgA7qPXsX
^>i.byilhT<egL[`0Qph
fg8nY"LZc3.IFA+Y1(eauh(7Oi+PFGMF*HBYQBj:
"!Y^XnC?c/d],7DgBpnt**`!Bx_-wwX~RO6?kcHPVU#t$7phvkUt38w!i/JGo
S0b#i}&Y^jpl=I?au1vk"w
tt9+a)`?|m~2!sTTu5$!nSH2hN4Dd4pE15e5+-9p9R*sDg{^=QJ$%8FV|@WV2%:c1v9PfT(@u4=07$!3,@S<^RT4tByCGkR?W0{k"j{+$^0I?4"xR5.nUR81zBNw^r^;dV84C^2-hko$"]?_LIhRs8,V%o&o%Vk`ZdJ6zl[yjPXy60FxU;A+s/JQ,-w,+qQ61xLw7P8?CY`Zc1h-MX]SjiJ_LnTbZV7rq<jUzNnW>^@li
OHf7
R2+2z"<0';case"ru":return'!ev<%aLp]*6GDh<Mn5./jgQN*(1pz-a81L`0QI$
zQ9@mH
kk^"^<v"dJ&?-[Yh+!+]:c$OQf01
MkLx2iA)ji/1;"yXA)9c
tBrga.<:FIE|rC_0EEFIUrj]"A<=69^x!O6;v[`?FZCz@Fa1:e.@GVMhyNN|[cy"+.r3Vnpx-|0eS.
kYN1
LjK]M/],WSpdXp
fUJm=MgW&Gn^#=Q;{wo2x7%IhGf1hF/x{epBe
4SPBAV&i2O&Nz$mFes9*`nIu4,rC~tTsMb*>P?LTGvMljc7)VRUlmG-sV-R@;S@sWy5MK9IIG939nA#"r!|egS/Q6K7dTA3MIYkB@XQ)@f+_OIFu?9.$5xieqaT.Ba<c8Sl1`W}XHt^>csSv*$(RKx(>A/u0S*wTA24jMR}jmrT$:qyPwm(xz%]Dl-S>)/P)?%hG4Q)n"&1O#;MBCgzBiu<$mZo`8dA%xS/juRD%-q,>!
ZdHY2]4M08EgpduehaA@abR-eH}mpH<7N=(`WlM4hAwQCs>_&J^CpyNs{GdE_
6?rcF
<3GmJ>ftNXlX
MS@pU3^fH#I=b=4Z7v3OrVKw-1M@T?`qK"yK:FsN4IaF2roi`=j%0NK)%Uq_Acm=yPop%<"4wAr&^A+n1^&WDt_H+zj~v1P)eiVAm;a1/hW@qp)h,x`_c~)64VN[u%Oy(kki#~Z]3;oxl;>Uf}/KX%;SkR`]jNEM&!Le>kcS4PT+c9Gg
*!amufCJ?_I[0Oerg6fA^MW!8mH84%Qo76BQLFs8DKbK@o%N2?ETHE5!;apGu?iQ!<?XdK$vjy/BG(u1
)3p2DCH:+/]1%8Y=tr_baTDeYCh{eN2gEoY{5wK"g"BZvjxbefQ)ZB9Q/i(|`n<dE{Tq(`xN=NBo2PsjlE93F@=vo7s91EbC+Lfq"(o%%hHNYiuNo!MQi{"kWeS*=23FYK#?AQF_6[%Y>=-@aP3A<6XLSSGJLr@$R}Z3%.i`b]9bpM#B"Cfr:()nEZQdg>GHlr#!V!r?;8Y9<~aMm{a()l<@Y1T74b6z_Ba9M5E/KGSZ@K!l,]r,jKuhO);oJ<A,c2l~[Q9/3sWC`79<VNs|0m1zE#$kc{4T1+Hq7oCF@
jRG|?m*mg>_T6v+kw$!sq+IB16<9o<((w:bv[Evg7yo2n.J_TP(BLp#d*kw5NtmNfNq60-t
#UX/H}s{0Ax^I=IqpQqa$J/?/2)%v
5Xijl&v9^vlt7dN8#ac_sWaXz&%#O7r&_C=c=+8(6IXAk=Y<93_ihP-,sVc7Mgn/fMlW:t+{t?/xcfu5Y:%$R][foWLmilitH_%L%SO
#ACldC-PY|(w-|
bL/aq>Oc~(2<:q.([lSvj5#<bw)$*dylJ>GTSh~cA(4voyZeh%gmOBJJ}NOQZo.:/iO2/v8_r#!2H+WuIhjOMaa6k+N*Rj~*+?2(k-lS5u5p=`NBlJtcyI^;l+.D(-Y9]TaVLSBpq*}8;cGN|%VOAQdu6p~%|7Kk^=^(]fPjfag<(3D_~>
6-yUZCV]Xlt^I!
s>-nw*q)*(fHG56q_xx&8)Y&yc3U(q`PjU>l&[}qsd=2YPPQtb(!(t!xxV_9SleA?%Hsw+zrzR_]mTKfA,=K"6li9.Q9_$sHbKUM%O=:IUqP[S|1hK3$iMxOu<9cDOz#,)5NdmVs$A8s,dPX.&LYYNL)zU3b
>;4s@MHtiy41#
<Aeh/rJ(-pX}>.8HCaR.1<(p`ZGV@S+?3g)_<]8x#w5d!Y&?w!S<6.s%
.vxKVDz^CTP40vyQmAe^VFBbc!EYGV]>>BsPzW]pqhd=my1I+5;sWGPTnZm4%RjpuK,;d0sUN^`%Yp)
`1=KJyQc#;{p<Fi0rw;8;"~X(q9sSc#g^LeIByw39SU1"S|OZ*kI1y|I)9_"Zk[]b[,-wQ1fI[C)X1Njh]w#xt%T}8H^O^`.82^WG9Od-N@yuptaDMa@AXgIAs)%:
UZ)pqvbP=l=0V)Q^en?N7(useYU]Ix1;k86X$KFShA7G&J#QJx5PsOz*f%r+.DLs9oUQps]1f^6H[o)A$^3_w.BY$
1)/e4/tsKbo-Uv`6
M&qp:91W*Xk|1^2{GkY#L#3K^d4yV4keVzTa8uN+a4Yc2V@EiCBDW]YxGnK!0U$fU3`os`;
+}>_U?!+Yp0tg<1iA60y<l3!
2gQx6x47YFc^Qa_]HlAwBd|CEO|5C]]GWyYMK+A^dpDoA()P
e,8Aw%Iw-mm>lO`%RqN*qVK_*J:uS{J
E%ED^N?v7B?:+89H0QueLbNW0fgru[Nu
FIdBW4akiAwF11j6nYx
4N}mJRn<x`ZU[U?[^Bg&Q5aGK0}DYHv_9aV7
9`V2^9N9@=5xpsl#mKB">[Hf61:)?+6+kBX($whv9xFzDRI<PJCc]>4!=?[sINM!1X9d;qnt/+p!f09PbqF-ctb:=M^k.e7WkwrJ=89!WLnME0c#r<lAM^*gSt(T@~wz,]X`R`!I;gI%>!X9`&mKTsd@.X;eM
$*3m.wNOv#s*$!)j%e4$;Cv+=oV_0,XOxt&M+GwKZZ)c*b_MA"]`%`/{GnV<r7GnERU0f
bxqWyz+Kabuio`ysh-XT@dS`S<"r.DN~a*&Z?c7LKXcmvEuC@wa`y_ADUX;~b]lNi!gvI
rAn].;_q&55f]Zg=Y_Qp756:JUDZ,`XsqU//:HW}<`VQsgN5xs:]ZzCfWB*6Ht-1i^Ne4F2U@m$#6KLyKfBl`Jk;SD6=`QmZQMg%&/ZUXvI/(E]MqTSV*$0O02P!TT8DK%Y9!jcfSWTH%S%UYYe,sb<fWAh^#3Os%|,.-L0K&dsjX-"TfRCKe0npPg_*qPddx!2l]NYv
CnoaljUw=#[@hpidk;pX:4^QtVi%=BD^;1;O2g`HFBk>^dkHeDoRwNx0/vN$IYXbWPrfVlH9sLL!sLr!@ta*V[xgu+HR{-<V4f3q=(
]C#8VCC[3(WW$B/D^lmPjj2!I.si$Ie{ost/#kTj626WbI=%2He",7XwRD&=4W4kFXAjBM[.1~^~aZCUx)nYh;P_p5yX6!4#!mH0CA?i)<l(BE*GDq*,oek2RKDp&zJUI=9_*]8?bM?udwog-]M)ArF*3*4-e4>pK+@)$J_kn?BZh.M6#4&>X2@h1mJ2n[kCB9$`rf>T[Ei,.S+3oIht9e3cE6c~V)Fa,NP9-*@wf`kINkx.4a3@-bodC*>|F.o?dh2OD/nGr2^}a!oQHJa1lKl_KWX8gZ`zwF9}A|$14e#w3/sdf{Rb"hivDhYm5_gl.2r5b5sX4tb>f}ICP
lMSx9?T,pzH%I1;oX#j`&^/hHuu+J;=Dte2]hPECO7)d
x$gH`pJ>fX]pAKNM~yYF*2EGqbC!3Nm:@3wI%$bn
I/9]5hRQ4`_xVN-"7n=NB*"VS0(yviw_;^49BPfp1^[v^cg^qY::3jP!DFZ#nAUqmpw41aQ7SX/VnT!1tx<vMhk1L-?Zjwq)p}^`GTGg$EIvs;>3`CY$w=N&OeX^Li34mRnZJhbXLMmM@(ytyzPph?(ui,OB>R0o8FYXtDb}sA_j6.<$y-[+u<9j#}ECKfbne|7K@|6pCrp6_@bG6r[Ds&((o!#*JSpl4-NMH4&<,{.;fm<?@%0;h8m(Ti#_XG)$=~/Av0H&h3Pd6;EtD=%XN0II!/S7Z.ogCKBemiiuX}&4oXY%LpX?oGj@ueK<ZbhwTm$U/dL,qyBlLoCiA`DbmP`T3T2Sbx@}+?rCpd)oH@-_<}h<UhTWw"bs[-m=m1W@C"l1nscl4AJo?>fuNF8Q5,O4k/gd=4"pmUtjq)<HP1i-L+g*^wxUnpc.LMy5oqryD6_,s7R9qH4YYF:|f]1Ln9?]Fu?-0*F1m"Uyq.i:9hkb<#H[BfQ+Zm.I<oC^pEDZ_xm3b%^ebCZDpRa28[ysQop725nS5&nFjPtM-&Fg_HS.<cEVWoLN&e;-6QPtb(f4%T?*MacrZ75
9<M4`w4nlaJ<@{)%h{FCClm$4%QJ%5ieO$myxqpu
X($1X0z[;0[9`vBa~Ry#"^i]v3PV}o^lJ)t(_[3)co1b.j-C,*)5oH5
9UPBMr-h!VaIymXu
!G>0GH^ba"@N@6">uHX%aq?g&6(8c4G{vlci.-qfg@kP%O*+xK!O!1';case"sr":return'-c0;:aLZ[/$5$rVG2*r+u?&&:enh5Xl%]_>[#sONNF2lr:A
wUc^~U%U&/Z%v$BGm*,0sp`
6rYYits(IDTnyRT_DWWy@PAbWJIq*y~kDsx3w^Ts[X{IPyemlks@)eqUIBlRm`9L^exq!d{A;mRvQIF,~`og`_X@S1Dcn=#`KY^_XJ&yOfH7tF|O~,:c}sz^RHxB0)y4w""v~ZYuOVY*i<;s)jImehkTSUjV`R<`9d$Vqa8;Zb(`{U%GvjGB
[SkE+kEdM_+>aVJtnOp_sqxwdN;x@gYTU
0sa:Uk$kQbK`qW2t6oD8e_y-GrjLqXGsn"2-B;-a-ZTmgf]dek
;8~:zx^S:J?oxm<BI^d^C)qSoY2=uQj4RlPw1/[,@,Hoac1g<;B)l[fek:9!^.Yc(>hStK]e]l=i}gkwmp};kLof:)/v]r+n.4+5z0s"~e2PAAP=k[cHS-RsH6fy.ToS]-w(o=hA"x{;[r(%;v&ciu&T&bw6:w1#,o%_:4j1VOp
d%Hy4F*vb?ayPjq7(vQ::J~:f=de")`lO,?^X7[&w4)p@Nsmox-v:X./fmbhW>A!4ty!N[F#pFh[7CM["L3=A]`Ee-mB%m1TMWtD1to)!Pr?C;4=*3w0aD_W9[cY)LAZ<gU%>`z-,VW,
B2aY5^f^1x@j1<%*`8+&P~>aaV!bUFdZ;-]CH}D`:;+Od?U=LWAl%4C8w4h}k]3ja]h`;Rw3BOoZ,6/m<(gG`UG(mowCK%s]){BAqvrR>=n*]PF`A>E2$lt$<HmK%3=a^2+.46MGn7br"qoN=@yL`QS8:)fgSjpOyX<J$}+m;6x<9UNV()xv9G#oSf(o(c]j]%G+J!I@^5_)%K:x:}Bp4TOQbj_p(j)I]b&h,@RNtJnnFNUb(F<Ww*
CB_4`=*[8<
Ctm()[#v>LhY!q;i_]
61y`**jUlYK7&n(^Gf6xtA.51VQl]/}J4Je&Q0W4&E0u7;HD80,q`DZr2#j%m[1&E+4Re.E){rX4rVnL+3.`0[7mWOV$(v
d/8[A(Yt.INp3Bxx#j0Z#W/z6R$5aoOtu,V(W9AGhsvq.B!_U!G@,$]M6uE)jQ6#+^SKcEUJWO*eFxUQVr?``HPb[_Y%qqrjRcfmnRMCiGXr698#_@o,-EP$--vuicKA[":Tf~n3x(Y0:Uw"CB2f*9(|Jm(gbxs(C:R2WF,!]{Z5]IPxcQcHI8GsIv?X/F+]gIfTMu)*y8e`q^si!Ye@pOAzXiBhUN@!85lK;R[sB/Rm441_tj]+@R8}dnHsZC--6`I.iMX3!k(@$obqP=S+nB=w!Vkv35_#,&HSjci):Yw+=R:2bh(H"/W{vYH"U2cw>]Lh4Q$MJfFby5(jY[gh(l<H
H^3,wR(V+K11)l3E<M[=!!M/Ba|@uEpf_.3de*!?tkeLy>F
L%S2&bCU73ln=nt0P
UD%$@?+[$Nio,+w*%+M]^4WkiHI]_m2X%"VnX!y-{4BO/*^vERMfFN/HXi"j3kA?ZjerSj"cg_#5TC/Aovhh)
~F&xw>Fkua:J,G[J!l+im(9Xm*9ZMWh?tOOVjOYcJ+I.O$4*dRV%|:
`[>RF{,Sf[Hvx=DSlb0`#1+W[|$-J8P5iyb:ww:JO(k32"*D?dlv3>W/UnTcke^=:bW:?wFN8O+-aE9xYN(&PsP~J>Meqxi[oSkIN$je,JfGy!e93Y8GKr072)jGxbeTwTk=a8Q!KhlbXvSU72LX]i@_p%<f/"1]@;xu8:`)b^uJ*xogj
=mn$+Wv!gvB}io9MMw5mw5qTT>wUZyEwWc-)mB^R1TZ7.PQdW8$&r!1}u/#m]JJ8]j6,_%k>S.=8%jlYtQOUgsSfH8bVnW5w`)DzM&9HhLP+DJA
B`3M,q"T?{E(uoC}sOj(fhYO]Qro2g:>0Vvo=UOSK<LeW>y0_lMM^(*jO>INm0mM!Nvz";vTCr-YESQ6O,U0.>?{W]XjLN`mjo_>7i(9s5yHvR_^gZA=i/=6
(neOPq=QJWkOI7ah$K@JZ,lb.oCcp(sB0hrh1k;GG8.Q5>11e`KP^Q/YeO=cDT@a:]Ss*-jYop<k"w,ai=QS7b:sVXf?_
!)/+3urIi*;0Ymv)-=[D=ux_6Y>H)TfQ+JyO<#3O0Ihd;4,lMM3dd%*
*5G>5f9V]WBF
Fj`aL|ak/??reu,f=N)*_/EFOnqY/7b3ME(=n976Dng3;,NpEp,2`ntSwQxgU1
HASezlK2j/wg}&V5|GKX$efJD&akpOOd<a5571E
a)pYUum7$lw=jEJpYL2,z)li91E.h@yD7I`sh+Xej%w]x*DV!Q1jCCPpT)?x?$C+@c[Ir+Z^p6q5
p;or-^Rr?j5*po.x3SP.)6GMGh!lbG@-.yP1f#?h57/!J3Cn4.62I<T"Vadwj4&AszFzR#^^
Em-[6>97rB1=fTAJfJ9f,yDT9<i.FP1C0/Y-W4k9>lz43va6B?XFEt`3cSEC&4qiyYgj!x"Yy0%#QvRtul^"2EY0c!F4X6M!p#}cZuMNMbpM@v]1H,?D:sK%W>5Oha^Kk#-4nq"Z>Va._=03_8V7$,lxt10P5GT-a<jDg?k#R/h(EX=)8ur<,bDN|m$Qa4@`c<<c9i`iX+HGsGD`+6p_1kL;f.W]atR(:((9j*inJWhvH+5LViuXETI^>k$*@H]:NEjo;F~:"3DlL`{&t+-Bf@Xm*>zC1FOyUh
S=A($HE)2bej@tbU*{
CUw6Frf1=g4u^KOU=GfyqUVbnaR5"a5G1!L!Z@6hf@.I
2OCT^p)ikxwDIl-0q/5DSH04S:Uw-Jbg6Qt(],nq7_Wr_ukrE74%Fl27+[yg:lci&{Rtu5f=I,dRBfobF+[VYWd.Y02_>W-yi[1.Y~k*2ce`utsXNvn#.Av0k]QNG;5XH>F"944=iz!;c98N<:3/ehmwYbs]+=E2:^D-xzj,i78X<hn5R:KHL`v=*]_t6DQM&l(xHwHc@@h%QiV~UAa*8]3&[.ipp/qbR:0hi-2eIi<4fHq4qO_8CRt&*yEEG,nx
CZ!54]P]PG;:sWuONP,g+,uf:5nfu%AL3ZtZ.^!K4V_c^ajd#cP5MUCIa(eOsJJd%9@)QHo]NUM&)qfCCqS)MS0twFts>M*Fz"T0>_29$B
>[`+RouIt}bw-%b_h-H8[jcr&@As+0dFw.a
_79IrhH
kC6ZoR&;p4(b3^D?TL=v_+yYEvohHs2,J<s
nB/paFFJ>.mt
[T&Mg`Ub%o=8Lj4LI/$S$
cawcv2ln%$f,j^w*o9dGp!lZZ*arb=%nE)X7MW>jk8c&2@;!3(?J8mbY^+m&IaN-*VCk&%/Fvon)`gL=`oyxe%S=}1Ds3Tm)$[,hliyo*Z5Y5Qi4=b{%HNMN#ZZZZ/-4af,uYvEl[QDtaf2PFpeSDx
.Cq[?~oKGfI3gEwIlXaVLH$1:
f[e%213&]PPM(hc5E]JY^=D4@P"/uGEh3sxw*GNGd^Y%V|9[gJ>@Nd[YR<#eRAf+:O:qua1b8GrU(dhy7LB{^(3,=GD<iTa-lhX3EDv6JQ&kf2kuUeW$qd.+9!+Pm$V0(hlzXu>G,!"TdtcofNuv-J+,y_fg/-=MGKd!KEqAh+&NZU,tk,8&:q#;k`>B*T<;;^A<fx.0>oT$s)4;G+Eerfs=ejh>_1cC1>%c_748FltOMCnx?Ov3pK9?Gk6h
=UM;K+oLmv-d(';case"uk":return'-ev;:f{p])Q*#x*04`.-dOxo*!mBq/Nnn"b#f#o8l-CID&r^{>(X4Ebsu:l#!(s*DkGyH/7K3@7K!d2=]f[O[QlXsX#28AHID?:y5/EVycz:q[:T(AII`k;W#d%FxK9dE,Uy3[,p[xHfC2K<|WtF-kasQas]2GENe0W/=kvck+zh%:Q@r[?XSA27F
A;{JF,j>]-F,"/?nmNq5a`fxhiD@o3W[E>/DBV&(qAr)<Mhu&rTyRQ~4w_rq>irI;p%R+o6_$h.a%7V!pgIJ-EPq?/gQ.$y1HI^7#L]=l"(104]-t2Q@,QFfg[ZP)S
8ukmUtrhaaV/
G
sl&8q3JB?t^KJf!F=9eL<evQNTAK?sS/,VgR.c>-30(;]q]KkD
,M##g<uPh0.HT))u;vdlb0Q[aFhk!eZj=}iU<;afV,hn:^NzQP#Wa9d5pJ-Sq9Xt_psE/2o5^K/f."-)=UT
gVM#[xX%KW8e0t*zX|*kF>czkV;i>?A`B=$^BK5__|dHh.)?^+5|GIdL+z0Cq-ly<OSZ#k^}u*?Vwc)N#^f[ul_dA)[?x)afc#))[dh
gT`|XL=w8)v&>Yi]1=!^+e!8wK%{<_j
#YbV6i"h=oQcgdisJ31~aio@@e1}U.0{=Q8B5j#H*V$t-onL*HI|syRpKf*1A|5uT^:,Iv"22`or;6n!VzTlAz+5r>Bf]RbLP6"Q70GRuQX}?a$^^9n>JoxFckf1k5*mZ[G[aMZ_Ppm|nGc:xn(Qdifni&Lz[<BBm
ekvWZ">NvBkL56.YlBO~,$3gv@#po"g5p.R2DQwK-
s}=gY;effs3@qa&^IG8H&8`%9RuBpboV%tM7obI$lsJ.SV.=>PH?U;hJ<3L"/EB?*WM{9ik9stN6B:#<1JK{<!S=3`532uR]HCYIK:f%fU8^K@IK3v!Sfh1-W!M}!eYwmwAA;pA8ySwVFLn@AAO#NEPb?kPY=BNNBF^0qdPH8zbE"L7K)=)WK?m~wV:Lq;``0
f$btta>m+l]PP/kK/mWzKMBrbP;K68q=:J"OD"UWvT?l.P*=Z,,JhWlH(|;;DN0,4t]g37/62=9tq3yFuYh[tmrjhvu[Zl2rq<KlY
rm7ckpZs+Gf|jk2i94>Ov+c:G5Z+y)AW6+519ZV|bEm@h&ozF%>=drjcey#BcJ*Xe%h79<sv:1BE3EOVxYMY+9vDuTtS`wo"+!2ovf=fw,"Qyhe.Z2hL.QK|WQVfi(j
G}2dg%`vA>"<@rRz<KUDS{X|jLqWOp)/clC/(4Q*/)n-KO6[o^V(Wzmbodwp2N2-ds?![EQg71t{5v!~tJXSR}ECU8[/S!=!RJd)VX$72zVS#ZY^hU:V!-8qZ@nuX45BWsdJin=0wbmETze/ocML1LPBWQQ{o#9KXE-avVfR1.qY:b;csai{x-Js_[R]qs=RZEnSx=y>ncGJv*^He]-"pM`yGf2hwQuyK
ko9cAyv
)<=F7pF-WiF2;PG4?XU>Uy!1m{d7>#WLms1RW9EkK)A|Gb+X"YY!x:M#P_J/<AU{`6HcrBy62eV7xM_[_bM79k@CxT,,]ji2>K;"F^.I
pyd@YTxq1[tYu.]g^UEo",6molF@wlgOU<UkbWe@Lr|bC,M"bs#kVp3(yDxjhT$9d+jNm(FE[1eG&@DTJ4i[#C>
?/{Pt>E]2({01m:oW:UQ=7^k#EI#pv~yq!MX[?E&9RwHZ9|%m<[5D4
8]P>w.`vi(8sZ"]PJfHTC6"wt)/eN!0TB~uMS)V^s[
}qy?b#$VY#)r)O.@"li92&z3/
a2ssh&R7M8#y^,3&;VXe7]J!wlg^_E+jdI$+F]Zf1Bkv;;X_^hL9e$0R!,U3F-R&!h<-=G&b(E}uiEmR@ZpgbX.nj:z.~_}f8058@7z-S=t&>L&0~b!V.u4RS:2>!&TJ[O#:2fu#94,cig6DqjZya5i$95x^&4Y(9$de3CG93B/?cOV8C..Y,BDi"I6veN,f9Pa"Z-@Jg$pc)8$tY)?5cZH6aNO^&1YpBEuRH$jd+gcHP[n9tYZ7L67+i/Z!/JxXd^vTf1tU,l~Qr&[<iT]L&;dS!))b$=`I@c1,[pZi+aJjzN6AZ3`!3`f^w2,msGM$,JUBbWxwj/56+c:HujO**_BT(GCxE@AKzAqdC`Z@AtM7N+{d,mf
Eeb#CPKbZ/sMI&=yyCTe$8bs$h;C=-bs("^,R*;4h-Lq`hy0HF?;b1n#P^]b=w0]#g:+_1HG+Q2AjGUe!s>pgE6mmF?U6?CskQjX~c/0{+!>zV#f@i0t&P&_6e5hP7iW`E=qT:vk/4(+e.AUi)Gp}.}W!G>foN_UnqHl_uD=mc)k18Vhi&Wx{6#QH"lt_CHOm&c.reXw)5+5p2{(onlW1pj@flw]!"R01sKS!<dw<+Z(D(C@g,=[]%[;udB;SYbGV-J@|sN
h@)M0=]BXWC@J8GMGP@s7yM7M.d,s)bi$^%eZd@1O%O9>g&LMUQ0c<UovWO(P35rUuNvWP(FCRa_`&[(Zr(G<*V3x>U.viTxbVs/mqki?HC+g?.t42I@f4y_F
wS{;+Uu]--=K]!|%lMc!$AQPr9QwqkSZ-n`vVL(aWMSkjkznx=`q-7NWqDP:U
1$/lZ1^P&hlx}czghz$G;GQ2{!pOtpWiS</4_7yi>^xueY4Y?w[Xx(8Y~-=A]!Dc)`QuoxajGa6si%{^ivu?HWUnBNVx.ln,oE[)R?IG/k=ZMWHQTX#G&iu0x_K:?6T<;c"xuH|I3A?h]SeT7RlwE_Mh?I)jaTD"]IQ-)?f=~W2$SaMh+^ZEL"RaCYQlt!VPzEl?Rptu.QV9UfY%_N=0lET[wAy?=GV;oAt@NjkA8#iH^eW7+yZ9L7HH5b<gPV|?Kc,M5Hp9]a0Gr[>aqdnc)6f=)+]R%$5vGtO8kvukjt;6CIdLSU^/a%6fDKPQOmi4s?*3Z.e.sYbbTaGwz(-A".4d5`Pu)uhm2e%:
)OS90$09WV>*?q@7e)w>16wGI&/rEr9hYhq-nB:LUadX>mh5RScYMaj
W[4MsfoqLLgdWRt-Wzv+DS:WCMLFp%xiSOWyk*ScB@=}hL;{W
jnB:os;LX|pxohfouoYKv,O~dE_vg|
tU^ZpX9kZ+@r>V:sfBL5"hSp*VbYv5eGL#8`_9"Ora)F2UI6qbI1F#RN?js]@_.[N4P2*#lW3w$qBZ|!J]X5[Rqxh`_<vnO-Op_jT1}aG^VdX6FBo,N?4m7m*vi
-b+[.]
8?NyV6B&_TkQPZhG-Wk$pjsn;h4W!0C$>.Y;/WnAkN;W`8^13QS23P;Sj8$N*s[;$y^}EevClO$?:w]L
>`Xx9&E]>E{S<A*1n7QV@JCel1jy_EQB-s;3NVAD[in/1S2wPX&dji,_$.8HsIaPT)1*,fjRiaTks0/f
*ePP&0h%mc;%r7Ece6uz2$geqg_rARRBRfM<fyIr
$$d_<Je
<Hprjtx_P&]d}cpRyf"Q6lu;U+zD}:hknZi@_s;O8oOfAN7WN9hb<Gk%4L3$mJykG*h
ca#D(Z>o&XR/
SmP#M<q-^;b>kz&l>B.>51@Lvi
Vf+?HZ=Id"&kP]R)e8NwjFAVhF,5}r}]1h,HVUw-*K>gzSDb[k&rEk"t_si>XGUy|<4LJN
_Ph^pq7L_e:ylPEiMh!F`>+JI{
$:$fF
+dLYwd&?eX]+!U`VLF="*F<m
_4?EviZ+>Iyjl-:&
Ul,yruCKC6M9ac?YlKIR_fmU[p1;|w>_c*W=p8T(e;shEc3Bzdtaf(&xDF*36;*Jx&BW47RFFVtV4S)0G)SynLJA+ma`8J[!Fb
rIk/3hf!n]DPZ!J/5mU&H0!*y:N(*d#l(,5:dn]14LI:o9SvS.5UWIO8XUi1`+1q7JT`2(xfp!SJm^9`v6y+dff!`x1v#9yg_YZ>5w:`3kXpr`^8A=o-nlA>!aMfGQq0E,JJj/F?IEwT`,5"ur5udvu_7{?p>KDkZ&&VCEdy,sK|v@Ylxkd(';case"he":return',h_0:6KZ+&iq4.1ENu"<
S:`d-[8t)Itqh{`-P%T@oz(]*f=7P+:T[hkH]fg++>dv":MD-xMhB1iLFJ*ISI-a<5[@PvAv2i#I4hf7>F7+!mdnx9b0yTlM4[BP62DU%~D,T<S|A(QvZ(4sB)0Y`w!l6uA-(5V$a?A8?v5E<66X*fXw1*R0A|QUmA)V-]g2bDT1YaXOcaJ_EzLT%|Sl+@kbn(ygH,w%
)7}e{e72Wc@R8]XUF&er_6{B^DafEa[QkX{3;8{TVoWo33Ci/i/IA2iOx91^7*e9=(iV*j/IYWuE>OUg8146{<x@8oiTF;Z1B*cAS^$(pjo"MDI&J5/f!.E6cY%_Nffy|O;@,Egd;7)EjUTh*o}&0K72c1Dy!<E.+AeKcO7
Rf<7WE.PG/x^=H^<Cne
=JQ0Sp<t91H:cy)LR9,c`Ml[ro`=?8kp:ph"ps.YQ]C=8%RayA)fB[9N}NaNY;Oy.1ubKU~aU#uCT9?4@5DA?uB`s:I6MpcW.w~#`?Qgb>`=&SOI5Bu6L$FrTd6u$i1+gb3ngedIka^4"@y6b*Rxa"+!{W[_DU44uasiIBNtN(9F}i]DW8TE[lzYB;-K;vkU>@I<W3]F4ANC<eKW<=Y(fE4Bo2II3Tr3;h;P|o~FNk_+vWcT")bv*g0I,2[t^JEK4#{$X7v8qcW8k$5j^IE-<fx${f"d9MRt;vyk^?_^t+r@GnI8j55YJ1Im-a3s3rty.xUFb;Wyc7d+q;%);;{QfLE&x7dG&y(YD%ngjw-r!+zMrQb3+?X$gKRNR&<YT7PSE6l_!18P?GQ&8gTv)PA@wF#%P/2HaZ/-hI$7(os[)pVNG.Y,L
klEg>vkt,(?060Y0WAV/N7p%4N.D
"/]QDw+H-b2[lhI&$K#)#A2^QG_=HntW]?NDu0gX2cbp5?/{KE@Of((@vTDhfp-qhgOX$`t1br
LbRk5Ae+L%kEjq//qlM+8V`?mr3QL5_`B.4-x`gVNb)OS5$NvE~"I"+yL]w&voeF_oLu-RT`)VHvogEazz$]g?13B.Yt*Y6
BysO!H*$i9?:ei%oOrr!5.x_n_:CseGi5y0k&`mE|T-`_%.1qvVb,5u:gV8).1?l$Hbs&.;X4xxY43vx)q"1!Kid`RGi:9gd8X$LQW&qPBMct*I9q3|Dew
3p8Bu5nS>`t;
5ZtDSJx&yx-
:B[RJtziPI/*LTJg8"Nw|DTSAchY"N*oh^a=@;FSL(HLzpy+eQ>RG:S/Rq3kn_^Z*;_hSHBgNEpO04(QS*R.};ru.57vDdSP")8cPV_"lYW_hU`1+CB$u;{_1OR*)Dq@bmL=XttvwZrG?_ZWvL4@z$PnP-W"+S1CK8ghCw[Q-cu$DdCfX!i^lSUrNv*1)LKl(K76Q/*-?eFpBT%50_4cg,pQz@C
`8U3bPGc0KmrLBlxcT)2WnA/)1,<I.^j)v$w+%+ts)!e)yPu^?ChZ@(h{&!8:d4.N/}^}4}u?t?:dK(sloJN1X%2K^K*&.~Ku<J5YD=""4ld<r-ghZ|gs_"
c[`RFTN^I#FXo>[b}@b[8"!YG-V@x2PMP
7^2SIyi*??Q-.#GZ+Ceg!xF<VRDW!e#.v?zl;$~=,$FFP
gxuK(nYeA>J
2X7
oQc.%rM=F!Xk;I1p"mA>`Dr#/wyT-=]&G1P*h?B`WS;:@dL@hY<$t9r[Q_+8"UN1`n@U-i<4~7[am5h4H[s2!O8FjRve6hGg]3g0rc*CVi<r$:3KENc&sBo/J<5GZ2>PMXY;wau/*c[(>fM1g;V&w2pX/QcN#/YUt);Fx9kxZ?AG)p{uFFr`6KIs,nXsNuF0AqmeIS+trTvsMZmyr?3Vb3#b8xG5`A,.u9_="_6sYchF?8:V[D2a
U9Y#_<yoEH,L$>pKq+*SpII|jlSBoXfGm:M_q=dX9qB]h`(=p+<EW`Fy]}(vA"!jU`gUF<
HvX5j3G1+z#C`QB`6S"xXT3-x-n3eGxf0pVx.JK7z8wui&CSE_Jl3;H+62#``gP8UwX/^JOUU/5(&Fh;AAMO0?gJcr-:TmP!&JOf,%K5|
$wRn1V<c+52,_R$652}OB`^,JBK@^[.ulD1j0J+A8QF>a``2rj#aW%El6?j)xXID5um9{GLB(t0[RN|clt"LBfJR]P&j.mN=.@SB>y:OAc|Wy:()r`NonU(Y";r,.Kpm/J0g)b-Kd5rm_OpiywA=G?2h<MEp@8pgeHP]ii!Gd.B&2QT
v$:CH)c5_@vev^/8/k$0@Q~p2d`?[>V</BbEK)sU};Sfux#LmLgBs8xZ5]~<2GGj00M=xNU5/YE*{i00dXx@c6{DNPW,+2pb|hW5TE-l9h8^I-f=m`!DEXMC)s+`MbNhOO/tGT5c|3T;tW}x7Y=G:YdFHGAjG?LuK){2%xZLoY"f
MQyy(^d6B681p>UuE(nt>h
8ZSi<X[@^*f:_m.XjPCsbKc8w7<U6;BL4/]O-,MjLuB*Vnh5Pwix:<h7%sK:o0`1%]!BFco1{_m)!%e0TLQ&t4JT+Au(~nq)y3,-*FIi)B0o>(T)Cw|?<O&ggcoJYE@<hls.Ss9!&)Q:~T/yg""';case"ar":return'"h_09aLZ;$"i*`%N6-#-SJzDz"8nu6o1ag)=th4ci=zIGlA:
SWVb9k
C/d.m`{/&
oi$+83&XfO}
WjYnpri`x!.]@^{@*n@X?50J&cMi2TE
7Xw%UI2`)dcUbJtCdG],+u
lw6UC@D{4e[pLFB8TFj]?nVT@I69bHGx+9!/%*A*gfnG$*LG#-x#3Ra%9|E>*]t<eFhJ,cVKT!1iX4=4gNsU6{c{
DrflMRdeEQOxmN([f*vu8w3R(`}X#E8:9)f`9yKqZM@N|a[a%I"Lzh4O@Y_sw1};[X|wUjpnwpqs|gNveF{3(p(&*i,l>ds:NSmlAxECDP3PvA9l2?rVAV9lYt{B{5Qa/PWpd?i5!9JvTh34[vR;|NNn-QPnr@nav"(4Lkv5-WQD!i4Ql6PU~4*rgJb+|iRuQv~!hO;i/M:bY"2.z[@(wD?eGNz@&=.Q`.Uui8@E`"rqq-vU&@Mc`Q`Sj
8y
1)ZvOpv^L?Y|mHfzyN
V&yp0eBr-Q;1T,{+c4F"ks^OWIw_Z9L["Dp5[s&SL3RX4A4;b*uW32pu
Q,v8FUh2kv6U^=m88oo-!"P.m3wI0b4?DZQG+/v-c$^p_@b$;PWIA*M~,3W&iv<DDDE~-*Sb`@^,q|x[3GC`7_!SRuYjC(PwC
4mDj^S&/
2Wcm{8Ij(YR[J=p`*LYi~"s^9O01SXi%zNN!L2xZsRda4Bj?1I1s3W2r|/.k*^bO&^}x=%SCKO?"CKMws`G>BN-0xOLGp`znJx_.H<_u
eL7Z`0LZJ,!xy;QWy!q5IB<;y~X!0[LlL3d<>.SW[~3iw.0"%RMJ]J0cyx1%<l^7xA;}dUX37|faw4na*.`qcGcC^U
CyV=Hi(x.FN,BL-hLy1Yy#%w,qjS%`?"wBa<0g$>cTCxVv&4LIhlhe$&N)0,Yyky"+6hj3iJR"~
"5%dq,`V+q)#1I+mv[{X)/<KP&Ynyn+1PhQOOw$c,C:<%`g^SiITO(=5gMFBv$<&gyr
W#L:Xf+vnNOvuq/q/AkG@"k-[hx7*Z*.&#^WN;<`$qM6gdD)di78lWB$6T@8H%q-L]vZr(h!>/71=(`P6pmpg&VGJs5H`s<#tMF55H^+yQ7v(lO@g3*g1#Kd|MSOY4@-aD6o_pfe5%:)4PP#5CK4F`eY1QX2[v%?>3OQFb,i)9%8p!C,Xd8vT7;N6IwJz6}lcp~os
;szRiOZB-F5Xhk21FRyNfO8.fHg^qHb!_WH(uD@NFq|G;!Gm<3kSx?}!3?rm+aP5~%"4&*S))VMjFqcypwYLVam$r8hV,sqg!%J-b7@ZaV-"Sm/"1(E,mqu^<p@@P,<oE[DSdKTX3#dpeNK"1/KSvpRU|YZQ5J#I]Kb.pnA4*;rw5@tW+B,MR6Hh~OKRP%-LQ2B^@A5q]%#q;V#)|j,^dpxB}f&0@bGB(R>?Eck9B7H5y8WJqBIZKb>W5)B+-&yGIpZ[
_h=[aEXdcs5/sy>:x-A"m%+I8

3^[mR2L:7/]+b5X*B5g6-^P&>dU
l=]jtgvAC>v:th&Eq@`r=hK5#7BJ49KAUr8DXu)cGYHO<XRSfbECKH?R$YK=E"QFvqe.fxV^.#<"J$IV-,l7,`ChE.L+#44R$`n
q,jiM)?iTuQu8I_.pV]7kDSsSA}y8FTQj:~Hz^z#W%`,1`i.DZF-XY#Cd!brj$u*Gq|/pE,t.cGxjt-8gj3T*K/jJKIZ3/OJQw_s~9q2b;>.D_X+4(dy8IdoudoX_k?Q}IFO>RU.1iKqQ?[b1ZpGNh03D,LE__rXQHmo"H/3SSC`:aJXffIi?AEqUR~XEV9v$D89%d;`HAQE>=CvuL3pJnh[ifLcKz)qyg^gF_!9W9
;Z>>T$:/n<&#1n;sfH#m[I@k[7/3ftKp*sViT+5Bv[`c:G>DJvrFrb04#dVz%N5)*Q@18s,J8y[SIaVA=D<YJRWu.@&sWKrugb(S5]hq+tS.(0UM2L>JsM=b,&fi1DS7O_(LAc?,`B[M#-i`#g&RV);QA.l&?YoZjwuwqR]eS10G$~,uXe_Pn-.57
4[ioAY1=#YGssMW;Wt4y<#=x;Hq]fdq>_UvWXup(ADow#k:Cn*?oWscCH+fp=?^ufB:0of3S/v1+Q|kQE`S!-}9<+gj*Kp-W20Cen<NF;HnhN~&avmC#h@_v(;7iHI?BZ#glP~`D-oDnPTIHguPMTDguHXqgeGo
mo/_^{NNEB2R!Y5!RAJMU)%%E"-JAgUy+vq}9"BerYi=oJp+7cYw]sfAmPElE#Z~I]W8K16;$X_"(f;40+"hBZ,HWH7!1O14$P5MAr!sRf`;kudAi!#+n]QUxN+qYq+@Ev..[F[i8AMk)tCS+F+Dt"?^mqCo9FZW>.mXR4vM?_,mD7X=-Xjs!ww6fD8vI"(ZX8L_sO-,t9n]%7`m)GNAi+D]j8w^ZXRLk468hfL`LJ24aX88
<g<8BOoQ99IcGh-ku3pD&vxq@%9UiU5?eCxT`3w`&6?DQcGA4A~7Pn]S8lyIRwB';case"fa":return'-h_09h%Z*hoq44{/T9;Uf2e;_4a4mDXBZ[(qxn*;^IDAQ5mO[]e."wd
Kedo0cY,fEU;
euEG.,9}:c[]+,"%I@`QfXxA7~f$I~H3$9`X^3Ghn6BYJ!Fml-lebWLO!M[_iP65h+jS8cW4;Y,Nn;`J8lAdHPt==3u+h!
8^f,yZ{G,bWNbvs@)l$gn[Df=aJysIhH{JkJ_D-m],1ipE(E3B
vCCNrZ3Q-|5#_cy?cDVe$b13`g)6`:xZPkmEN#</r}N#fmnQNLbt^}(>`cl[?o)%Lrfl,wF^YLKG6QM?N}fV"_gG+7:xT=U&qxJ30lDsno)v`t8BWNicMlloC[@D+2B"0Bq.SYVx^%j{S1;%inMqVF;lD7?^4>;7RIDtEL9q[..%q<Vx4W4>]=A,G[A]@a0W:d0DCNwC5IVwB;Qi/fkwp+LFu@MM4V.4?iY)SXGYc/,s"W80Q}4Z/*@]!)?&3sq_N<LmwVVCeN(tA/$konxc%tNS9ytOB%@ZJ_*6xuETtZb]s-M3]O&,w&li_Q!0F%"yYr[;3I-}ixVMHUFRfv<@g~**/.={6V`Lt}G.FeghMN4d8J&VW{8
o9L<9iFSeKQt9,JJm:FeU;O*b?cv$gnn8:o"b/N/T=/"4=:lwV.M,|,K1Fr@IA!?ibw&rNR#Bf*mD[Y4"*HDc9O4)qN=PvI7Y"UDu8)N0)sxLM81eSt|wvL<L[pxZ5H0F
ozILoW8!)Tg0HXH05a+#o..AS]yh>s=8Gl]m0"@m$VNypH>f)F"U2HK0K-S:eT10A^xrV!=Ue
0[&jj"v*+gebz%gjy1v%J?_AFrgdVL>`bXC
KshPPPtQaN3F$uR)D(f^3e)AvFC#"tH#Bg`{mLir
(Jk5N1!h`[k8,2?=c1$LnWoeS1tS0w;oGP.^iu4t{tSv-cdw;s?d"@9LvtjnG^Zt/au:~"<o93}&2fwk9QtAmnbg6OAeSu|)tHFH72>Wv^K+vEq0L*0#;SFw*kxrR>VTBB"Sw&):x:,x2L0K:vkYr:O#mS?8%R$C$JCL}`$v|%):l*;:^+?U|_7_Ov&LY(pK9G$:,a2#H=dCMF@Q
S}^Svq8dreYt8C@}cYbYu6]K,:/3gaq&d!Sn33Y&bnIw0cp2M4suczohZ]YO^yPm%v4Ks-O-wVEr
]U|<m(_i;T{j5w#2{FL3yi8*K-M.:KL[&<LniNlEkINPcEecxEXSm,0@MimJPq6;ow|fnt1s^gWFrtHDv.pby><6!_lI0ZKeW72P0(^"B^N8gpt;XCIi}g7IX4@A2F`$B$XO&*~(ah:.2M;#So^17k65n!NpW>OP8:_kB+J#z#T6sN2WbhTR&QzKMmwlgk$Sj<ctl#/.*-Q5[+Oi8(~*iS>Ab=3FMI[Z-9443>yi-Ej-ILP<2"y9P8Bb;eB;-&L%[(;96l1.E^"-]o5IiU$7DI()<E?KFE<or@ap(biV"k,#dLC?,h8DgIYWLJ+oi+jf$6
>K`+$f%t5i/[wf#V`"lK#_RXe*"Ct_G5QN8_w>u/u~!7Z,wu(QQb`kU>
VFH5%OI8I-sP7gjiZc240hwE4S:=}LWk{Bkj$,LKd+]Dl*p4$PK:w7KL-a_-H][v
YO3kR0B{#O-wXG=WS:Ly0
$NQ{J@6,V@VWO6@e8|Lb?x^2<{]KqaU!(o"Db217iMP)guT$Ei</a0E$&{d:5tlXv6=k^PKPH(Bv%EtNct8=@ZH}O+P`_7lZeAHcY{JyhHGHpxnb
qI)"5o)
SK$FS2hrfft$|]N.s-qBz9bDv+fjpaYNVXss**"$j/Af6/6,rO:C|gKM;cX99WFUpDYcX9wa;foclGZZ1P"&3.L+Lt[P>[qm2(AT19>E0Hjl<,ARJCqwechN^D<NXs[WRM8Z^]ILv#]gKQ3Msi,Pn)6=ci!MbrRcYtP.qHEjDp@J;==dsD>a#yq5Z2`PiqVI6<XSj6.(F9`+d?e<KDlu81Oj*W/__qClzxj+YV7lqH%M[`.]v5erDFNkSo{.FOqAg1;<"_QYNWOo_XjC~gFC->q/#Z2KR)-Nz!kCmXk<ujh.=h%RvdMu;(y+(A7.%[$j^S~^Iq)=v$+AO!<1BS:,Tl8;{D$9*A+uE&DnWrK`08dVO<@&.#Ky-<GrHIWQB_:&GZUH/7ntSO*vW;&1?95H8qXK&&)_G]C=LBU_3]A!04.*%l|-fv#2C@;hnk<i2"emhgk+h"^%fl6@nsyhO=YZ<n-E0$hQ9G&+`TawmhEAJ7#Cf.uBR!7h>P_7[.n4^5s%
f9KcY>#^i%+xHN/B3W4"%Tr1Nv3
l/jZusV#3}H.(T.1r&xotF)$+o99>AT>qd`)xt)k(6Q+H&)7jcTZkNHaxnlQ2#&|kGHN_57&7FX!
HO&SIyHVq3,#sp?11
|(5)z`|&RJ94f42TfZ0D[byR_w,G*<W,}>u2l^HBLuS9i@2XxaKyq^
Wl@wTERr45,:_Y({(E>KGNKIrdhX(A@/)hOm0(:f+r7xrGyssVQ
Qe`i*Z0fj(dyjdK#APH`!7N_DUkI`Q-5J")C@UK^X<k>MlC
P~5Eo
/QZxj!>+><gz`d9Z(7<,g/sPFshYfK1oaD#f3MYZ9-$44q.AE%J[JbuHZ3Yh;
]oN8]ILql(g:Z?W,)d"B/[S_=NPyqG@F0Zt@bj`91N(tX%$~S[3y^:TDF
mtfA*`wl+So3Ui+mcUkPrN^s6hk$7y"lymR)8llXyG8$';case"hi":return'*c(F{aLpk,6qQcTRQsw#FXhPCd+)8Suh>YJ%qFNSWgXHuqEN89i(6A`%y9rh>6+IN@:x4tl&mVaS{LW@&L7xFonp9?3s,]uH7Az4{c+W7X=B,=Dcs,_nAw*mzvSP$Ye2oe9y&tcMyRqHnKZv`gmwYK;>1C$^D0{y{m-W@xSi~)EWZ9MI>@<%8vrG,RARqFIR1d{jf"x5`Rx,,0dhPpuv~bc4~*
yt!kqENC)lxhidj!moQm+Be$eobOogAL":Ow#`*!-p$vbBTOd}b[z&)Dt2)g;4C"anhsJH
7VX]L-#d~=5"yKv1"<[?C$
nP-"+WX1WZ;
vvk6rGTxnM_97c3<%}Qv;|"QVV>}2=Eq[mDlCAtu4R:)Io*?M}#@h3%~p@R#joU+y!I!_vhwr2fo8L<cO4,<<:nt6nAud8r0!
9_(*YD(vjPNi+UkU@,NJ2ibY.AO`Sp4Qjf]V"AduBh/k233=IHY#Uo/F+}oxcDPRVgL3=Sk!K/O+KdD)h%Wq$`Edyys$q|?}eP*hdk<0bqn6>>4YAo$[_a:1/=96^@/.Aol~dBHUkuEZ)W>(Yp/oF#Ohyl%Fi:aNaa+wITd69@qNN_G23fk/m+5,V.AH/mig5f").0.L.W;`n97=<,xdQ$-D*z@p*>
P@.R>Fb]5"Xe#/!^|wy0/Q/hm9KyLt5iy&<!K:I5-6G>L*Z!_pyhp",ec;N
1?C2
*Bhx+?y;t]J=;]p:86fSF*,X[<^Zbm9-he)C?]KH,$`WL`S31ZP`cSm9OSkF,S$z>jnz#v7IWaul+1Pp%efbRIICcaN+9Hn;QY9Vy#b)%1iqZ"#!S
r:3Wee23&e[@a"Cjh]eP7b&Orcj,3PU#3#NUquE4(v){?b=Vo&?VLl0@Z}9RvIG
8m]@,zg|fTNs/F8t@|!1Lw9n=UKz&H?T:[uFc^J$S1h[,9F]0"dB6"29uavn)FN291u{xm+8oBHokSe[t((*bs6{#88$qprTsj
O0}"hUC[2IK5lFof/d?fx;[?5IEg:-qQ5ZRD/#65JAboh%O2ig)8xSv17_G%9+(l;"%<TtB_~SY/`g32,s5V"Tz?QS-+u8,F{&v$t(E9Op*Ias
.#:@p(ZfP.r~IyAI1IM`DD.?$c)?*y:f?8%,i2"m_Sd<lefs%}!0y{Bp&H%oTLb^?o#b`f3
/x)Z4}0<H&F6]O&NPk9)%Myk,e0PTus!A%[=g"KW6TDcPX1$V./d9/%MmkR
#Jdh<nA:sulXnA7m71HBX@p=E=]!Xth~`$>EL5=Q)G+[d~]
#xO*Rdy1j`^k+7Yu&mtr^2;UjB(Zr>.tM=#
w(!]IXAPh&__Z->TD=9lBKk9+a/br&=ecrGv!fnHkP#NtrAJD!wC^,u~61HNd<R76wUhR6TMuF-/Xel9`},"wD6Frb>xB"F!
z*M5"@(k=f[E9Y
Z0I1NphTwx(Fug:l4|%ORBsM+:vT?4NUg/6"J.rd-
%FCMe_/jbORQBK=)r75_%TqJQ&VRp9bGKOcfiqKY0|MCnyrN,<b[H-_%KZ@0)4GiNUcry%l+H9"5kYUtJ~MEY0y(l*q&!6L,R_eA/Ig0.2jWJ#Qy2&ZZn
.CC!!x#QO#At7";qA$SzQz3y`#XZDEd4$"%ea/IT!iObVuh|pf>hW|0ylN%|$)<?(I<fqUE_B17fi3,2GRXYO[s8frbQ73>is?K`@#A}e]v(3-(k"C0o5TMy14A]LE
XH_QQNp)hOe4H*=ASdI@6,c)#5-n7qX$qR2c=$9Dk!t%2L":;P4M(F?8Kq}Z%.-0"7HVe"I+v@T>%[-S9&B]The8#tZ"f-U-tj~SeQ,"dTXKo9RRz(xhlF-DNS/;hq@>/jKNf-k$Kr^Yr!CK8d,/%h:oKs,k"YpBO8p.{Qc%6F>$<>)T8;83d(&fHWep*d+TyCIT&Vy);/ND}:~qPE$-X4g,bL*yo-BfeP%WJn,"BY])-[svb(}eoiD+UoY.73lB.VTg.T:=3<":k?g
v3*f$>[]>UJ+s_K=YFA7zaxlSK_^;HxE66`yI#dH0KILNDtTAPwV&)qxqYr]:d>(gw6lJ=j<=rS(evnW8^s[?@p)6P*`U,{OtidqZX/+Euz8c,L6D8`EVP0VY3ZQ2U2FC[a.e=6,jPPS:WBHdg#8}2telRj%:"
ji4$T/0.m39FF4E+SjP_?bl@uZEN8,7Z*^"?t,]@_LDSpT`~uFe"(&
<8iIB1tD:^CC
mLq[8^xFiqH:[nNf^C1ad~gC74G7!@a|A.&$U]uk8WQ~bo(j;3=J@d==?zrA.^I<"C4V#HPzv(v6@?JLb51:+r"[>5^[;./t8,wfW#.<qGoyYv^<Dgq[QzJgb`Do3![G6kELv@$gwF(Ss:rVau+%wJijl$KALJl%o(Tih}ZiI7YdHTvmJ&HvJeILawE;xZ^25u+))k.E"q#(r*?sQTwOL+?>)gnAASHhJF%bh[SRX
2>y7p?o?skUn%t;]
;%vJRab5.EqEHUQ+*QB%RNuVQkYD,tbl]2YVt/ApG/QIaZ2nQyOgR!)o}.CQT%Igx4$w`aBJVM>YZc/<1v>O{a.D=cr],%13bF&aRYUK0$p3p)o"kJ)R}x/dO^jBi-CvBJxaOOs)ujnTi;GhSe:jqN3B4LZ97@C#0t>mL"=[52
;["1=]S~0u-_sa#5sxa{J!n5Md[nZKV742#1/cHO/Plt>4m!T8;@+^H)!/<@74@9$`*~x&RKl,kfKKup@n`y(zBp@WCy=U2R7*Xgci6f*lP4B:Jt0B_6>:,
3RF"
daL<FU;r9@*]*$?73bRi?ut0c<(Z9HF6!wh,~0rd
7R4U3,35f5rG[tlY/nmEo^;:]~l$y[A0+S40$K<8JccG<aT7HN(7DUU(:|6T(~?+12rl4V6vv"^z-Q3++t@D7XC*./1L+JPb^`czreERB?4|aGMlLk"gI.E/suu*c-.l+Qodg/SPu
j0UZ(^?{e|dyUQHG_~wQToP]QR)c&AQ)k*Y(Rfs0PRAJnV!:!cPh(4
am_t$%zta`"205KfIm;UE)sP?uu<TEN[H"bEPPV6ZFkX-v{U=w66Cffg6_;?cT_de
F,u%TEwT`qwsc]&]vf^OvkM9j0{^KN>*-[0[2IDGF;l0VIMD|XF47KWUyBms7k_*AIp;ky{9/KQDNV(eiee0J7oqY1Npyqo(KKS?,]cO&uHGxWOfk3Pwp#3J)(+ZcF|,
gi<u9dQ^>sCu^;CC/:_-4amvQ{3Utu_A/kLYKIyd4!Qb-dfhe-y:!-<p<Luzq1!MamamNhNwnY-hj}*$7cy&+d
<8bls@%r7"+JPL^bvG(-F$eC"+Ghw1MGO>[bHRq.a?cWuxlW@O6!1qZ%QcA#ojtbVdude/.T^<<J<UIBWK:hsx0EkH?lgingO!-9f"(?sO~iNw
qP+9w#6$=0X-.*tx4m>JY*M_Ftl,FIgw^!T"M!5ns<5@;5X==$<an-h~xy[F"k%hj5f{qoFJy0Q
U[
KD_2.!X
X?&GXynt%YW@v:I%a<i=esAPtmn_LTFv~$kwrfS4$,?TFW!k"
A5YEj^@v5ak%6bbTI$xV`KHme7iK=';case"bn":return'#]^FCaPmT/&!:x*En(L$M&EK@DJAx&|PT*rlR1ovj:1:{f3gl_5`vNhZ*C*jDXpZZ?NR<9u`cBXgirmx<1IiTvPA
AHA4WJr{]!kRcr??
ffDg}B8L01.H/MpOu)untm9+
Gnd!oDl*`cJo>|a;niN{?wsv__np^VsY[g,]Re`/dsPP1Hy5]ryarhMrt2?a9%t57xna7!t.?eK{q$7^gpvsu8Gkra&4s>ZH4hTD&{E.uh6yEX6Ap<vyj{`T0/",w8-#0;a)Q1v_h5s|v*bwe;DmmWHXxLO*EWrNA%PdZM1(Y<Q7EF"0I22W)5v`T}5sUB$]jj(BxpfxjTgmM=]pauytG]^1;xFzp*m^:5j--)Q`5HFuK=R%x06}`Lj(cH8oBGjA`$D>74_:r23V/$"fp^5=Bb!SGSg,PaK1T877&>F!dPx"a(nAYR:~Y7PCF#k/
ED5_~L/tnqz,CJi@W=b4imtg8_%U-_vk^<C-qB^d3`f^Wp#Y8)3[~Ld?*oQACys#gDGYr+jg>_h@%I>C,br=L_enh[R9Q=XPs^^`XB|8!LQ@/wQ9F0
+%+Q56h!]Xj$cY.=";wR2I9y$n/fO8cU(Flf5+r*5><wV?$ki*hOSd?!aE>ka3[Iiy#
OvVMipSW2>5Is,$)I7e=mm>]t"=pTZe[S`b2mqx=5jKLN@wr&wucL3+_-VYbZgXCJ~Sgy|iZ>UScnbFvNy5R^)k.h%j{GJqtV78uA5k3k;LlAv%Lc^+aqybtJ><p@V*p[MEkL+/$0uXjZdo}fkb#Z1O2U3p?BTu{V_a,oZSzUE;r.g?v:ZG*fuOw<jMQ?XD8^ecIIWFO63u>4PB~=_S!r

t&"8=rJ]-f8jp!h:I[`ZnCT<M^WvH0GWmebK{:pgI_-"zd$**1+nt2Cq1oFI/XgU%:Sf?q?C,Rm=Wd%k(Q
FC2eMM4v^h`RD^r"yBe"H59ccd.`d}I-EBR?#2@dlJ%Aj|uS_Mv^:@p_0i[|/7_8E~r1d:kjUS1IU`/#7
,^b@F@Ed:0BqW?$^LQ#S<:!4Mk=a<lg2d+$.7Z9K@V!EZM1tBeMj!h!<2D&o@r#H)i@;r&/ei=F6U}(}oMbL:owllo:)/q[$1,xcK5x%IXUbbS"&`^?CYp<%r&&<dTQ1ydQPynvcdK=F>?TO>)LJ6rbqV$b<8Bawb>fS<2O[Iwp&DOR%3v_?B|uwUy/E=Yh`,IWi*<rzF*D:<OZ};]AUuVYg(;Z7kyRBqoF[oSj5_je0b^9l:ZWYs9JN03TY.r4Py+3*RlH^)?qfNBwY-~_(DabK68UhPkm{*AHK*@ZZ0_[xPv!.[~%!i.t#/8w(=xh;2^]Ys-R2<Ov1g]M-+k$lu?H."vY:*:U(Pi"k*7Se9(1sumNpKcrt>rNvYlto^uC,%*"#id)?xL9iBt=o<_3z.zK+;I&*oK",4&"QGKVTPqVA9<*

fOWJ4X)[r
G2]A,S)fi1o2:4Yx,O7/4$OI3-J+8LUi-2qaGgP3y#~u5jXd@jlc|)y[rKBx2+:2!:0bk"vAkYZ[$fXhrT"!.4G[TI!ZM-yo~O<k2F@fjM)>.[^[kSeNdpYp}T45#!^nMnO]X3;u*6<pjtV<EUiax3nS$[E7;@>eV)%8u;{_5kW:)m?p&g{KO-bMlGxp&+NnK0q<wL4l;U_Wx:k(GN%,L"c!?=:p[6eTf>=B)(i%iLpq{4Ut,DYRPW20;nnL,;?^7D)t5M?RN_C+>1$eK:R)?G|:Sb`*QI(VwC
=2Fx9yIZj%#4S/>QhD8k1
PSn70+j&tRA~Z=r52Rbv#ZmaZBhtd9hui?]U#uHRZTYq!^(Sxf-Jihb1KJeutieIYlABC:9~d.5P!}T#EK
$3
^")Q&v6nE8#ieyco(Z.:r6Eq`^CXbR_1m@I`eyEl:<Ob-4^1!+o^,y7{A/]8?m,i<$SV;!hwCOK,
qeqpAfKdL?s%nI2_uG>Cx2#Qjc+Su[t70.t[oo3F3#pnoqc:p/P1Jaq:5VITCJdB?lSLl/qmdUwA~.J"D0)Gz?K-xLn"R;bTPRmy-_M0yeo5^S1<""K+?m&bXrE^M0HRxF?#;I_8,B(r:%HY.D1$yV_DkC9
yRmdO"5*~U/_8420EZ2%GJ#=AD|OzJk&
/&(Zamq~EQ8,S3+SoLTw<a+DSh.hl$_cNk!?f%y&IXeTftd@;
[)Q@G:,+&x2HX$/UWeM/#Md7-2%7vW3//>fP$@n@NaZ+w0eqbN$-hiUr2x4zf>nlAn6q$5EF(~Jp1{+)Q}[K7NF:peAllcMkY/guT;_FHsIA%,EBDNhQ;6$aVkVr6,*Zh/tX5=PnCR-_+.V[Jux*o9t3SjZjASTC=4`ViwMWZ!lN)#:pfK46&M&L1Xa&GJ`s9WD}kJ"9B~7;&eTSSrfF22U<M&o=9c1fV#cqC_A~v1bGi)GiOnKQfP7v.hr!t/2CQA@U7P<qOW(]=J")r@aDfYPC_CuWfk5tUu1WSKq2%-1slxJ?`lmJ9>u?7yBGd4^q:_-l,0ihwzNNcr]WUg]V,50h6L3oC5w^=QiDXth-quW+_<iOxH03>;D$]0wt[NEJS"RSivs*3-HPrUR#pUYf@aj5U;cYoVkLMY3Zr}!HJZo6
}4+p,9"L|W4%=WpZmECeg;<#$qMy6;1Uy/KP7t?Q+%rK)
J=uS&cU:g(g(Q=uBY-i4faM[R3%Bc0vtKVR>o!>=tD>lJ+F?-H##=kF)5_-YE3#cXc2dGdT/lqjh&18
lxpr/ff;/y4t8WRSVZYh%lpxL0q2;:?K7%
tV:P#HK`v2AOt"h4UPOqqPFp0!S$9T*/pUpAXa8A,l>#Go!cCUH-)5^gfq2I]{EX?1d^yn^/9bH@Iem2M^`=yj:CyOnLQxi-FX7;L!1eFYdrq7#Xx7Xnw;8Mxp1<vnrO;
Um%>`;RbTOl]$t=PU)t{ixnuq-4
"tQP-D,P1SUeO5o0btX<_!P5ORkou%DF&?Fs(0BFH+-~ucaDo1eI)n,uYk!ng7LopRdG*.*iD]a3_~Krly-7C+dQ/x64IAds+$Vm.&ln!``)Yc`.HN_8U@RYq!*O8|Fjr_#wO{!$8oMq$vjvdk&W"4Q!&u-Pc0/v7QBJq+4sA2e.0Z?5aPfH>9vm&HDqR<=;rNAi1T/;2qodNQFu>%c[T`9
0,EO7-L"Tttw
s-!3
^93arb?6;b*E%^aVEEolR}NY-
J^cxXe?^q-D.$n((HfBE$C3vn34aYwt9R|_;Hl2WOxdrRt*A<|6{6zCS@@1tlWXDOvx1nNPspIa(1ASEj~
aih.mg$_WubN=w(FET&c@Z3Z89~[<I=)"Mpk~u{2U_&F;m;X?ijd_sg>qQJw$Jh"@TatudzCjmV2F7OgMU9f&/475!+.-DyZ/j9vI8i,MBD&Pvn4`$MIp=NCXp?4=N5=z6no4;+cBVG4M4:?fE9KVD>C`M03@u2peg9fjC`L$ID@Tt)wX4LR"d$YdT)KKHzd~k$ga/<WE8"]@,2T}7^i(%=*KW_]NA
:_Bd[`#lJHYo`cN5dy%k2Wdru~$,u~6TrPKxr5NArs3QJ[[D"rp<E_.^]Fy#CQHOi)w^:v7Ght%f:FxxWkF"Z+Eb,Ip8TxClo1&S"3L3Aj,"wfii6k[=#Q*UA/ydf}.HOLi!(~L
YVq5Y:SN:-ote49Na)2m;6.QLQV=>B9Vx@C<t`qXTdPXJf>3V>Dy.@UfRIfWZ~72>85lU6?}X(,p;G6iI!s=wsT1a{1NmV9#/Woi!m>)IoN>$9EYHw9$c$tZ';case"ta":return')h_V3aM+N%greta4X(5(GL.NVJzf6-isYa2wB4=?i7TWuK]"(^(!{Yo#iWln@F0+/;Bt#-l_<Wg38Y"c|?imWIn9:_1+vo`Xwu1lwPGA|s"s"W0u6wOLMI.<lJuEb1`7^0{R~!Ha=!KIf!PMa0{+!6A5Q173Xb(8@3U3U(7tD)^bO%IsU=NLx%.1{QbHOF%n3lvdGHGAK$we3F}c@_+yI[/s)ntb_vLhj7>@6%k_bRE4P6w(ZMe["u<_!W^e3XaYKh0SHH*Hs>"xt-YGD
h9HG4t#8u8RMQpxscSo#_yTh.B?
.h8iv<GMImj6C"PY$oJf~>i<eNW$*0Fc2_r-79tT)NWx|hbFyF]b>vX"~VtE{id!W*F?A/7P>)j#sO|-/ELD1^A:;o
!5,7a[UIbLwP*JaZhA;T7X>|<!lB`ke<c1jp:cO>7=F%#:TJcH*T0n8j%4?(E|-)8AOhM$w1`1"lYGmU8_Eip>xC:|wa@;:*`Z%
ZVqx0A0mS<jL<xEq=`iER
.iR6s8X-=kjXvC$/*/+acK<:%p?mjiO0j9dEiE/&OmZ-F7IH4)_S5;B;VP:{-.-GW20B&TUD$i;]f
63n$--4H6WB
+F7--_pO"ha?uUl)
e:eZbvpMFL|Uvq5:+V-H`;`@Bv|R7I+Y|A-fEZ`(CLZJ,^S3~b*HqTyU^F9xh&YBg%:[80wn~7!]>^q@@093`c/EemnRFQ2*j>Re"0n-]a*$V]5?&YroMx=%ww;<$a?D7m1TUO~:%l,8K@0*x@#pOg{h#[0uY:,b<V$ZgT?r.YFbYL".<oNQ+PvI<`0>}$7c;LEvd!2o6Zvs=U^[g+deSEJ@xg**~JEg!6H<KB/E46Q#lmdEi;r$0vMk+65g2Vw.OoLV-8Ry$
Na<u-h}Z}U(J8FM/$:IMZ1+Y=cq<+a;.m9iFRi95y7B2_v^2`Q2fBA)XF^P>/GTX.JtLYGM!3N:[-M
YNMgDU9w95keA$/ZRL`WCGdzT5n8X/LPWFi<Nlqe
S6vd)v$[58no_r/
S,l
gL0*31=ohe]Z<."a~TlWaJZrY*!=r)*YLKn"*7#02[4![.)/3[nRkI@#QI?a:E?S*6uM{98ob[1Bbgf.PX.kI.#KVc`WB#fp7T7wnche|yytE4U<l6^$tH0xn)9"(dF>.Z;`^V1=pth>JtV_Hjxe]W}eb#V>2?fF
^XN%RnIJ0F>U,H/kG*:Zlq"4M)ufKX^vr34W=z9a9!uN
7J5pWu!:Pp)Rhl9QV!gS[:YgwkMx/
k<xx)#|2X`"-r&}!r&Jwxq5;-#qM{m6ZbSj>[ZcItCV/&23
0/=BslQ3]1UAG@jac:k!)(?jn*f2.hLg~"G"QD$3,x3A:[rkmU+g~<.hfRT)zcaD-Ho0G
Y+%raNC>yJY<2nwI!9#%)aI14KGrJ%U*:DYNb=@]F,7NZa/oOfW/s>vhRQp9IQ4dA$0A8`J@z`k_`$qDq(WTGm0_MVB]eTD"*Z06Gl``T]J`9l`:TWN+;34F$VMlw(V&_HJ6P/GKUb/)d;eba<xUK;3u%qxy23;$D8I
TJ!&Nb9;8o3G(5}rIZ1QSxFe%t:u-kV)Oxk/QSI/#U!/48Siq0d:(;gMF).4f:@)za"q9]x*>uo3Ol:NsLl5dY*O#:6eI&_)`H^1gDS;_i@8]Eii6;5s^E%],:tYaH8Y=Z(d[6s=n:]
e+WDwI;p[`ur@>T+ICVK?4fNU![rVhf,|
oZzBH%V
~UISC+(maw>[Wce#i7!P>EO6Lfi8
q~%wG4]DS.uF3oX2Rq6(8^ElwPyP4Nmt)ZXzP=hK#&n=(_-uows0&=.~$jev6$$3_`o7bAqq60^r4D0daz[C`<(vak0~jY=62Q*
`"pzl!G2nl>K3/0q$c>$?OV=UvC=;UI;W{u%4K:_R@ACU|aR!ZweagR}"KK%X^xokR!%XJV"a`,0.G]Hp-a.,+wh6R&7yJQ`Dz"5NGBlh%srd}VB8wEdRY=7U/o)&z$Pi`fL(;F
7NIR&O)KC~[6,Uo(2G9C3yF-R[-MmG$o;&L~qjAp2@>
mn
^22ve3e
IVp1$<4IqZ"V)5Pjaf$f$>p;Q+iGYVw&Yk*JdJW.0+oI>-[#ykCF6)"VfY-iR
G`VjF0x%vX!9hr`X"f|Pe@Q;4Z%v#;9&%-2M;Q<w?w[-4>BFZQ=bRvejNWym<j/j4;lqZo%AQ`}c
J+
xFCGD].lon*&1GU]ZU
9j2d+~^B^rXi&D`]iJJ{&i;KZzhy`bM[fy,[JW^3^Alw
17q2Xi/*z;;^_1>4emmkpQ%E2puWoa1"i!ri>I^:.LrDy
r)ba1#L
7M*:T[|hA$fW$LdpQCq-n[{23(`6Z0dtJBb^L6cmtY;im7N=`&%pjiDO~B6?W3jRQf&D!:Z<uLE*rBJyoYN/wU#3E94BA]~5{EZU}Y[I_/1.6&.Ats49P$-Mq2+3$X[t>a[[f1Ya,OQ5qov&$L@`Zpc<6UM?oCt85?F+k8WfGBsFy"30u`u2h#J0_Qv?f^=z(S_b^(ume@IeH0*X:+(;iGr,u-h)-(fliAI#2Gm/NH[%D74uG9M4WIw9Xm9>!t-szdFnN8@Yl?{S&6C]{O9g,_Z-=UOO
@pr{ar"=j_+DR+)*#TBi>QR&gXWIU)g^,_Z1Kb,JpJG@5hsye*yH"%vA1SQBsVUCZZ0*N/b{GMu,ISUulw8DR~HBmSHa8Ii}E}f?"#<lLe`-+3m+ij8Bd>8@K*)zIG-JaV#@0)Nkib#nL{H$Iv4O.t8s8Jgmr|Q^l@(s0>?+z$-4DNJdER4#qiCjIevlU0l^m+^~tJLSj#=$8<*TIT48^4&#.;W8.~E?oq!4m[>c>v0,AMf[SI+MM$>BOnl.izi>,6,]f!eH(LqIs@0L"~hh]Bsg!/lL4?]`TL":V!8y[*T
jf#uxNB=j
6^Va!d/=2dJ+3*Di[-3$,MK9=u%7(gIoW2_hM^E7a*y8...~UcY?ZWUf?>x,_3gYDP$_Zx;heNoDHz^$C`[jg]_cW0tS]V^VgRIYQ./s15ducP5pIcZ;lm8Jf7
W6ZXotwmuuo4rH)rZaKco;Ky.s{f:cpe/-5OqW^XhtNou>r_:.~pbxf$8(.U}VKkMJo0xa=&n7`T%uW>O#IdMR_mmB_3Ow8vx<{9%g&jPn0^bI!aXm[$Zpm#x,n-CkB;vxKr!yZ(uZG#Y8(QF+ASXggsa1"?y(XNgFoP-l<b?e2d{Y0u~!!Ff+6BsOHFx$w^.o$OIs:v?GnlRuPj)pUZ%*LE^Vsm*PZd(`3P3ONv]e8Cm-;N*?kG(o4^12d<JQ$yDH^K?QkeS+RSq>|KFC)^N)@jEF8ya@CcSwHeA$+GPBJnedA*p06a?DWBgg}kZL~c4nzxd';case"th":return'#h_F;aLZ;&iXNGq;m2>@=H#o*bA5ayG!k@b)=7AN0EC[9Zn8&8TN6$]R"v|E<uIZu
oi67)0-/H((>Y
eJH^-w+WJ6KIREEi21M5(
]`yaXp@1UGeGomPW"WXxMW8JsESq-d8c8d7X4G>mNX^H/v}4uH%s"a.Gf:k6aLgZO5Dti,/V,P#GYyg;9J}_)a58U+TdC]:w*7[sjm#HbU%)Rh/QjohYY!|`{4TnCdukMw1&fB$(ol.nIV8Z"%_H+$1&`G%8Z)Z2IHlNbj295"
Whw)UI3LLQLa&`Bs9m]}^Lolt3hBr9Ve
-o8h74SM41GL(nCt{)8f14W#&AO"a/&]p0bnI-%MsqO8N@|Bh5(wiSROzJ9E|2CH42P5Lhq
{.""iQ8BPP]mB_u$chFb*(c=E^An#TZX1%0GglAt"t
%m
:s8]g`*l@p5e?,2b"HGy~G=Tp.v?0iPh8l{elV`JvJvyO#V!cAu:cJ2>e&[sPb0FdIPiSi"d",D+G/5qvD<pO-HaTk2Q~pwxYbm<uB40,eXLuT8dZ"U$@t7l}bmN(X0SkZs$^)B0<`5cBrI
wetw|=SYzH/p-;[KECXeM
kK=x%3^nc.vICDZ@saj!a9KSr)O&i>]E<@WD(,C$O.8v-QpH9//"MUI3`xg;7)
q?7IpggT"
xZp*A?^?#r5gI{H]lIh4&Cxi/=1#9|GAp>DR0LCK_1dJaE.JJ"3hLt3Qg2MRDWA)r}TQ/@0C>sRLc&DK>T.];3c{X8^`UXyGBUYz0R^2k/J342gd:^?WgGmsBPNWN]wo5,W_5ep&o7"``NMXYlAd*f+y*wvA<
9B&LU|=(@?o,x~xGJ`HEpN3p`
1
kFK|$YRZe3
i3=_IN+2>&R3E
-^p/P)d&@,bi3P#[Z#;%epnG.V1*dX00w4^*$u].ERt/GeP4MEaMS)ZdDi54Z_/5&n6JkfNb<?PA5;GqZ=Z#rwwi&4=:P&nxAE-Z+2#a?ckDk-z.rY~eWe:YPV1Oarng,)I1}/W]>tmr)7!WCG;8<t/l*:Sh/2L#O>1^]e"0&"FMw0p0Sn&+KnY?@@Y1nHy>
0vP0m-1V#C"6;9J|r6EOmE6S(xmb7Kn/u/P+kG:->.Gjf=OOJCuyu8MuAX[9W@xi7;=`ShK<c&yqa2>R7T16oDV0]EQ9L(@X&TRT>sQOO4y8UPL&x[+35?eo5T-UL.<kb,1]8jF8-|9LJ&9p9BCX`LTk;$Z~hv<dw~.Qt;9Uh9n6Va51)*u}[;egx?B;nAWzSG&;a0&~enkFm-g!3bby7^8NdZnHC0fjQ+6R
L47u6j*Q[9FMUUKrh/=eK]1EplW6Lw_
^X=Wk"3x&Jk9gg1DpDLWi@jlaeWWQ%`Tz?*LU6xlk+$#3+]q
.nUo,1<]>>PV&p0A(04S._mJga(]wwM
d<XCA)g~YQ)}+~MH%mH~LHDPkGUC6m_Fttcp8vR(e@[&KDJ$Q>gj%zUQNx5A0#Fe]IfGSO:,]V5]ud"ex=EZ+8rVfT)NDdAc5[l<3gdmuu>|=vJ3^vqVY%H`3k(IB
I2XTswgkd)59KMbz;[ZGis(gHl.z%01<J$>TVPG!cj
s)@D*+G:jCD$O@qD.jUsIwVxve6N&"YJoaRUB6t]CC3_U%H/PJ6.:r[,$8l;Sd
<!W&j@?l-d5(JD!T`:eU[7IpVM+m%xW`hAI&C)T4)_bZ60`_YZ^@ecvePzd1bK4b!t0ba-L$@XF6<hIlPa*/.tEzaH8~>ZH|("ADE@@:eT79a*A;=3n;=-dqZOkRS&XwMwoJFcL7(/:wP:B_yu09.t7SUcE;Vk`!G7G{rt-J
ari*D_ZleY8r<46+A(!]WMf]W=09?v>Z==YAf*<hybr5|G4&`s5,SxR(hH!6iGjA^e4D/:o#_,v2s7S/?3B->(629sv=wJNwFd~h=/u%{e6]U#]m^-OU-%obmt.xnNz2*?gt<E_ZD?P-ta)%@dh$sFhbBB,m7M+gp3V39kx!?3&a9%$aQx9o
j]9ni-O>`FqQDr`V2+t2$+bus^Hhl
C01-dy/0bv2%P|:eS&Q,a2LN=z/PAh>DCSkCTkp.RrSjwCqZ>T,Xn?i;!;cB.jc}O|*v;>DOwh-uh^HBZe&O<<5!/40zmSE$CBMSl8Q
[nJP]aGWdZ#ey6:,![TmD=(~*<kdb}=0.3t7jXkRsu0*Uf;hpg1)Zzfx"~N/[Tsia+O!U4T~pBjzvH?@Vd(W#Z.~%,b<B}OoE7A[
"+lkao]iWL1bC,}EbN,Na/L6v?dD_#HbFPB&_Uc^~D++h1"4bDNN,`"D?V-Rb%`uQf5o`>uDX%9xpm~>?
5n&>_!Znbo
Hf!e=xS.h9#B]2hr6BR0=u$#FF!Z-tl*?Fjy"ny)P(SgaT]dm*cmE/4/IFS+i_Ru>%xXGxKi2
>Yja["BlgVa@SjkYr4oe@A%^(sfIusUy#.h>EYm^qvRJ08z&&SV^)&-w#HnaJ{
Lw_u
]bNF%]IP.y3"U9=(pRAdh|2C4b/&g#I"yHd2"+[l,r9Kr$;4>vu3$&2AiWw~7#D|r[VH%v]^&/hJ5^OO$g&vVqdcpQPF:<2D<S]eW+OkW!=AWRs1f(R"G2x
lj9nYa8j/LS<$lsfZzfqb
YqGs:snyD&%ZE4rZ1D$8?sKe5{C-$;R[O0na<tqvR?U`qB/S6_Mp5/qpxk-/J.BMt/XI$[<:C
GL.,Veh^_:5Ws)bgh#VNvg60RNIB><&
?pY:f6G&i$L"c=rMGN;L&1KZ$M)Vl<B7<&js*lM]Mrl5
vsrL>cd^t';case"ka":return'"c(F;mTWGgo[I42sW#CN7JTF)q,8qx$R."J`lRNmQJLsYTDo]ji^3h=tR8PNF$h;_IRl1ar2{2RNj,~$Of*l3Z1f,Mjf-H6ei*2yVPlnlWyuS</y$)|y&(yF|q`_m)OM7Hd.&3%B6#=b1^Xc}tx6alDAWL>sU7a)QP#q+-p<l``)yyFP[XZi)h*7VpEOc_u.RA@^KmcCL[nnB#U*ZlbKRt8B|f4VZx1wHN~o>hyuR<a$Qn+dO=O>omRF)lOJ&]JY5a]2b6o2Vu<75"*_7C=//d)4{C%g39?MsRcZun{H+?%9>9Qx;fy=EaF%pr[lc%D#J*/7k/|^%rm-7,W%"pedOb:f_SbyG
@c%qOVZxT-xwTj@yRg
:Onlpm/+5"/mxsvKdF3;1*%$R?cRcwrm(G8QvlTqO,AC(+0g[YF)IN/]v+wL>}o?
kZ]K}nm6Ne|Q]#hV^f)PuWyrpO<^JN6w]D=oKnMqzBy/ULP3_nQemxg>Pl4_>VQC4d{-FaZ,`utxbXU3")j*XlRA3"]qeL$%@
2`Tw@R$<+Jh"A$`AL8CZ;?GBVCZZ^]mbx7`]RZ{4Gv"HqMM
ojM?!ZEiY6nSA,47"b^V::rYJoNK@Hf;*)o
&hcS}o90.LFo)BM)Xm5Tr(LGYZ!cNuBxu,a3NAsPf^(*V72-_X;E$(#6j>TN_.$uDXe(5e`O6x~!6Bv.p6LT+p4S74"A;&Pf`;3Sc8wm2$WBWH]9bi~%ufICemSl`H,Jdy
hD${wEkD)YB3[(!u[!GXsR=`aa/Dm/Wc>kUpc<giir>ZOcv{]=qw9o#hv%JPD-Q?bg
,)W=qQf5{l(>q^VV>W:ZJnFI#8D<vRCgm*REMIZ?U%
G`$+0E``8fU_`dvBUAcA#NO5oh0DSniCr>SpoWOVHavofS^n5)HY#VI0F&0+Vn2|S%.In,Cw3O$d&bh_6b0h5ch}qcr$4W!sHFdQ/"v-GjCqvegmHp;?#@jFNO%qAW?Xab"1n}y|)q+^#kTFuV(fHZqAc,Ie:H5{u|xHP-o|$LTIlhBCsC>g1p!!!}AE$.;NKy+.HP``GVr)eWXje]c<YN9Tgr,j)==@3qy@,E%o,3g1i$G5Wj^)`C-"FZDePD.{SmJ~UZ&]Z2cg^HFik{n."*t]X9(PHpWBOCS[s^6/w#lAl&O]MCj1oLu3uXth3330ceOnVf</__c(3C)#"0r$Ac-EM!BP#KM456syGxV@3/NcZ*9=,0!/8hBhg^&3,!mIvT^3&w@i4Hy7vN(9eGUW0SS3]
,9mD#tbSN?u-_11hKBR"KGw{,h/#-AblHEyQ6P.H7K&5ADd}O2Uvvl5)3pHIXKv(y5)e:3Mw8:CtH5ZX(A$U0Ji6w]Q2<3-KsFU673;z,wny4|YJWO&l%6Il)?MW@Pnt&u![U~f},l+!,:s{HX7q_;,g05ap9:N+]/<DsaVvz&0r@v@`Lig
:`%}2KW$;sk#/Q=6;=nX_M*{?XK9#|CUm:>a-n3DOgc=wf(pr|i?n7R|3}9)!D#e.YZN#u^-7x/?xZ+Ix`Nl/gU7yD/|3-Txh*WyDR4iNy$@)ZRODjg8n)`SUxr)DJAfDif^-2RjVGJZA[CAR;:-117z.hr*-c1jT?%CGA^InZ9VYFRKAV=L4$qMj~0?PYOoe12;,TX8q`TEnpKO6|`MLE"RZ+JqN*]A[ffseDr,S2MtR!hPqUX>3-=wJlnM<xKQNusBO]4P[yv`S$E3^x@)CB&n8<7e@7hXeR3$1DP8%e!tlpiww)SZ5RoM$3W"w-_^^kUUTpZ4jQt~fD
X>%PUfT4)H/(9I-Z%
]25@]?X9S+&)Dl-*<P>_HD0:[*{+JvbBxGo/^Lz>[=lo&T2VCOz>WE_:IM1^,$skVYr;AW,f`1T[?HroiAz@fL{;S,$O@_Oc&Xg]O@Q!xNn.Q&yJ.8`FP/93Ck,];YHkU]|<u?E9D?212P$G3p0+1l]z!3NAp!a[~GtKFlrc]*q:k1u,?lXd6L+;W-esK#D<Uqf:@2>@nE4n|5Q7O*1h}vn?+!mTXxS,pR-*0iopgw+
xRv*wkmNIbFg&gGA|)t;wu=d]u$gm1}hhYdG[1+>V&ICl:??m#c
%4w(Myy*#@}i3e3<(aOgV`>7c_=7`Z3eT.%?}YS+YO*V~oLWl51=.hy>AvXG/nR[s&A+AgilO8`p~-$x=")$4SSNNBVvZig1kN;Oi6G.>nr$2c0bH`nt~OL@XGN9]t,IGJhgagutLN7+~oTW?`!`#S6=)5,x6"Xx(qFGYFcbB])@y7N,e#nf$&zA2-XQEq}H6R+&4a$9tbf"}C-DC*^d=Ck$(&Z4#Bf&OB.F
v1-rnPonk71H5lm!*upFJiy2P"$x:&$MtOhq;gEX&r@a4G@fIev>kg8"SA%:SxLBy*>FMf*W^ZU8Cm6zHL]Op
_y^$)yaE-glM8kVT0
)Z]|IpDy_<[a@-^Z=L@p6a^7
BU^T(.hNr3?FpmtWXYdQ3"<Ori:h~-/v&)h^ry-8Lo2cEm>5)SrK7/*=]A,b#&l<zav.A@fhk!@"Ji0^qBX.),;e_l(e1tQ0OsU)psa=Xg
oaS)PHaX>b`*FJgqp_%1mq>IY4)}y<1o?*<zgub8DT&zWbKc(h8OG)MP#AqNe
.[rV9]Cp)x=
@@1HNL?d5{3V:,n"Es/8,<NF;H
>3
X
"HYE,~C*&;gk$M.rP%9!$Jb*C,c)WL8Rw9R$an.o5S43**-;lqG#S{4.YM>2pA=r"e[)./tVIt,L8-sI^`<w2)X8Jrcv_&=x3zQC`^&M_;FND;qW9
c4N/e08Xi[({VasgZ(D{4!cT%(47b<5NL<@k5AyNE}_xuFV~nytOP0yy1[;G?1$?1Am;T+2hMpUW8mVJ@>yG^7-(z(Nb:eRQS{.iKB0YP{<7Z|Uc-^y^UxRSIR;~+iAskofKbJyB0bY>wFB>m0JE4ZvJM+XHQ^=jH.XB,nJ7;<)o
!1=DS2IW8
P;[C"_*3PI<In>cg-n_jnAxMv*}tCBHTH6.SM+8(?-_=t+Bd;K"9Daem%XLVX_/2/0pg-U|h^yzM8b7K4z)
%+1c_*Sw>Hmn,N7^jHIkzE:5RFxC>@CQT`3QwE,7zY~o/gb?1`J@_oUP36;f@Wluel<T%f0kFC}He1L-(/rKP/XRx=?X]_P@:8Qa/rdp12q;64lCvU
#tvzhYyxJ>p"/6:BPzrI

.zW^Q#)p]=E>2|`?43NbBab$$x:34?l]!dUq=[A@9xtBTtP+JQ*~]0AC81YuE7_C9vS_GpXfL)vDN|AX&y,ZKSwN8@wTyr/J:}0S_M<^pHi3^rnGKzaFPkj9';case"ja":return'"Zu@ih%.g1j^+y,!nj1c+."lyy"+CGqQBR)f5h8xTyS!55[6-OD[EmF$DD&bcbH&$D8Kt+g(P+rMO/3gfTA;0Nm&k,B&8;f@g,dpJ*.=JQmm7:PDe*!i.I`g
PDq(pRlWmv1qXii/fdu-xStQD:g~[$BY2)!gn2vPYQ!`XuMKRi586bjU9tjofcfsauN.(2
nIjop+`AQwd:YIvG$s|+Mq`/QxQTT0j<]"p4Uh1RdoFTp].q/!Of<mf+iY#NPgc93S`-29dQyIQ.P^|Q!I%L|FimDyJBvSfGx9^qhcwL<-8H0W]VxANr[iVcrd+qfVp+AXd>])b"`bOjYE9`]f4k{hwExr1][^,H0xnRcJ2Q1r/*Pw<PK2YHCMYtCcOa63kJS]qk&;R2EgGxep9=RpL52,ELWQS70>b@/rCK_KIT?PUZ~[&L?VW&>BL[)H.9$e="(4ev5W/R[b
VmC=`7RSB=eb6_Q}a6+*+mcHlBy)K5R$S*mS1mUIxfGU!I)sUD3vD?6<),"//@4fNCPI#~aFbkm&X4l5Z:>1=giJZ>Q
aiI{7hbi:8,Oj:I_(Yj
t]J4Xw6i9tYa[oTtLX<g8Q$SxYHu[.sms<8B4vPhGx]d?m7JbJn$q<H]LvoQW|kIy{FOR&JlUe(Y:*tRjY:X*ziVd]mz%`R{=_M
P`<oIP!_*iK)%Hc7Jz^abp)fMO$4V8b?*{o`P2q~=mq
Bb%DT|PuQjjMiRpU3"ogw>1`dxxgO?6OBMHlH(q^Wp5EncT!1uCi-k]Qc#`+Clnf3}ViuXped_pd!""fSv@+L:sA[4&c>jh:sLLw-V/0]x-Z+i9v*/-Nc]"Sqi+kYu
4AJ.Rn3^~ciIE=!(lw>qN?$LO7,Jil}V/l[O}&{&+Y[tm9#B4G5x.6~?C.L:&+=0[Gy00h|,9h-5gTF]=]Erq!S1n,?N%Z!1YScX(0>%Xh2S0]@l3:c@%uf&?)fUd?E0A+{F3P.^fthM&&>>2^`$-baiYi3Y3,"8yGYX%:GS<L^?8$kS-#CEjyO6dvA%1h3#BPb)f<NYv/kSRCzC(o*A}l4":8gvB/4MP^;YsHhXgHSvB*I$+fSpHY,N>G-x%#~.ZoC=e)Wpj/yd%;MM7xv+&Ptax85OoXEZJ2jQ&DgADYr/9ltUJOWr$XN%_L,+z@XC8Ii!?H<:(0r^wOms[b$uFb*TLLAL[F+mx%_h)eF<pj`6puyOug7V5:&M129Wp;<`PuWBL)al~
Njre?PK*/i8){Jf6XxO).O
N&.-S}0|.S.l9XD`+dNUK!p]0y=6.6#9sH[Ss@>I8t%6Cn_/C_w:!W-xColavB]X0(@,H=
VA(fw-Dr"r8yI8ONqXEpYi>65@`>{HO.FjhiOVQWqX[LrPbPYTE:63}u]_QXE]X"]W-rT=GS3d0TVhZKnl3
Nr5)m/{v72:i:D;::X1Z]
hByvPqqFgLk]n70aXt)HV*,w/(RBLaw_aQM2S
^f<={(*JYl=/y/[,rDnsgEE*RQ<n@$sQckgSa)g;D?`Sh);C}S]Vl(&dRaz69L?.6aRGCBa,?GsF`]<!3BbU-.NY{c/TuOo8g/XOr!iOgB~dM$SZ>__:mw~C_
OL_#2+delJqYrFb^Kq.@f^Uc6@4KG1WR#cv4@bif7/im*m2i5G;lWkCE{e8Z.BGP:)fNTQp@0/I_K"@0bk?YaEX(?`}!wAz<SDq"dxN-i!%+W!Jpu!Yf9*}pyj0cY.<$?6WMM*xT]V-6^3":~"Cn_l#!1AgL`iq!p?r-Y9jx#:PY`UIDRQ@e|L;aDT/xH0MjYyn7,w3,
6UKCe.@~AnZg;*@Q3TZeak2%TU3O@
6U9!
^h>c37L1B]}BG1Pv>33A"N4!`VePM=%duI/$MSoG%%6HnJSmxP><5`Q8ir
?"Y5Z|]J&gA}61].:vXU*MgL+1c$@beJ8G0*<Cj<tRr3]E6->dIW@u:uH2.UDuT9QT8YD.:c:ZLI>Doe2|.BtD>W@)`.w@:l[{h
[`JsqBW`u5H|y,-*;PB+"O[UOWgXYiFZ?|jodxQlEe*{6&Ox`N_!!"v7
I%zoR.L/CKt3IV;EGHDu3tP?M7GZ8$kt)<QbJ)6MWwT>x2ftrV[L?N%Mq_w
q:YjFUO.wP@k{=@+"&]d:tr$3&YFdKU]($-92d@Vvht(53Ti/U+Eb0C::2l`opC?MdlDlq9t16D(Bn}W>A`Etax4*0?)Zm{8xV;,Q!k1[-p-Ok&wP"1n*K:UAoBGI+]=9J($pk"9w$2r#6|RH8;/is&TpH$"f4)m!/:l4M.#$A3sh_hb~A<?s-Q21V9=UV6V`w*Q/=,@sJn/}gYQb2bZ}S?TDCnOV(5<g@#3ZvloMH+J@sdCJ3jblQ)#-k7TFN[&TUt
-3iW+<INUN8DtR0($v[k;o@a*-hvCtzt~#zF
7@/UL[<|,v4n7.+f@+8Cm[<M5iw
_w.ShGOA%@9
g"93h)5aMgUM#V>>&>05LlTzr!A:g(t&
,7R6(1Q<T"P(hX@E0QF"C!dc(G)yOvb+;+|8Goww2N~t}LAk9(bJ@lEAEq1H]DzVfNhDeu|_y[WFeS$Fa(c94_=%nU!5;`iunQDbj?}Hk)O3xeu^E(idl)&3lRVG~s1rV^|Tx?!!+3JHlYp"D(4T4Vw9L3&
yO_jg(X8%!s;S!=3Gxn?uZ=Yz1>K~X[cAhoV@b6G#&Yh,/Qp/wYEB=J%H:8.O+#NGQVtgLiy746^y8"Pqq7XK7T:/;k&YBY7!YZlp&3M&PCVy)OdO;_ikVcMD2*jn7B3!Y&L~."tMU
#F66.)eu9aHk:g
|Z=H+/L4"-m;0s!L4jrVjH7(i^0<j2c-n>+PnBT>WOg^I*JH*h+4n9S5e[kb{Fec+=4.ujoN,*!B]4#$0x3:AErnnU_3MN
8i[}6stxr30Nj|R>a[LT!xHd0^$<kR!4HRe7A82$J|_W9d1.
x"{;DVD2@G/
y5Pns7X!8A5lW5HV&jzUJ]c(
pvIO3xEUnt%4r4&K!&E~fYu+uyLN
*d]XTiCChxi%WCN`3Mq:kRG$5ktuWq*t-E:LkPflrNV(_E"cUuHDegleNY2<O6?
]F6?%y&_9eUu6@ys+<:eEImk_,dn{M~q^""L%>WJBa8uX9APvw.-*WS8}AH+SD_d|i`F+>fbk;vZb&@cHdaiJF{<qlVvE8MMYei2.=QHp7Ph6oxciH#
A(q1alk2|*7o_VxkV.^heJ-_q]$(IGB,i)rX0.a>
WW:P1..T,33dK=x{8yH&D@gEl~/(u:';case"zh":return'*UF%0lUAp0Fkb:_q&NE=PLAX~pO62y"yUBz6J#1D+80E"8*3U#4i*lYfGbG"c1Kej>;;,K^H)"r560b%&wM#kUC)"[c1-Q<78Kwaz.E>Rf9ro#OoGgZ/v5:
[@/2oy{y`l6Fkq(Uo`WY/O.fo,1QI)vk+Ps+LgXiB^+A|w8d{qm-TPg.E.bu5y3/yM8@H`8NF/Kvfvq?2isr.!C_~@#52jEp*&1/^u5*!SELX=|r8m
BPto?n,k5/QWjBs2u?9,VN8gsGk.ZGST^jxQ*(Vu10K(a1I{I`hEaO
j5PkG_O]|lcnS<j5|(bat,ZcyaZqNw#i$n`n1[zd%T1>U#R"os>)z@nhjcL7]@Hvy8cwr-JT8*1G7g(_DuA)"]yA$RxKHM9=V-}t]X,7bKg@uX!=`YaB"D`)kt-5T0x6_F>(oY^yi>5)Ah#ACO`Cs"gq&St4Vy[DeFCav>"p5cX])IWI%[f=Ekfdb&%;q<7,?11E,x6FgA)a5>}mBMkgG]rXy3#%ff`"wo6U0lm;4W]FLJN0fWpA968JP.%+R)!${>qIaDK]TT{WFlav#nXifkWg`a+&921^Y!{c)EzbWwuw,8a+R=aHc3S,<C<rC2gB!ao>`wSk31iaPH<^6B?3#SI1F>DV=?j(-O54UKBPfB1DvsU/QH9;^5[dwj>aTMS![-SyMo`e^j9/RDU(+a_e+m
;@F]:"Jv86NGGTr4ihg~YF5VoXIorLMGjE^f0K?BAk1MhU,{[e8:uz-FkThQk%mT8FI(54"DICGS[2,y<vYfkiugLuq,>n[7p2TE43E}d#,Fo<s%roYOO(SuBVHosr#JwuKM>;k^wT"u$wt5UY6&m*$Y4TZ-w31$F2C{XhZ_G&u7,PH"G66wy
>pLEh#Az(zclN4p1pP5VXss,V;ys-P)^khV+w?*VV^yu4Wy30/K9m$6Qg_.4.0h!2~>ojUrbR.XM9WK%
T^DRQ/IMLQWC>f&jn#r;2<
RY]5kWs1IC6%1dE?hO&:r`En2Q8Koh>4P_IxL1Bl.z.#y(Z[O}MEjKt.
@B|/7@[GvM2mQ6+4O^3jOeyv3;Uw9XbwDw:&*KnPdcHrI;%W13X:IyQV/f(U`?{iA^_<IugF-3,b{Ts%T6,IyGDk*63">xWy9l5Osb?7x`Z2O6f,"32XxDwH/gp){:Aw;>OvW8FP:ETtj)wnoe9f81:!3K,K@]LyfKmhElkrYUHr{BW@%rG_iL4L|/(hM1zJFGe=]K#RY0~D)[D[B@
[QTkZA"#a#LH`P)q9{<^IYKMfhm(c/QSH71e3V9)`-";*SWJW?5ZZbJ7&cHGu~]lQ)%
NGAN>$1B%5RG=<t.k=4K2Su$0~2Q$.=:LV8ckupVE*X(7f-H_.6&)D5A83G{vHsH(jgHY!>zJ>86n1tqprf^q?H,#b]`eUHQp^NbO5I]ZJn*uq<H;A?-8a.^:0wqSdWTBgLK-|`Z(3!PD8%$LQ93<
&X5G%1)LT%St[["@>P/[S(TwdF;2/7pX<^i:phxMVufdcxbj3WoKStnUslq/lQ)n$e*FA)%ywaA
RVajIWtRv
#7kxGe5Vu1wrQ".vG
5Z=f=O)qkzg+>;YTsZoGQ-u!!s+Lt(I;X|.DRPGTL="[(v&
Z*qUd]-M*@jl+nqs"vL!.i.yNT%U=b;SD^0i5{^V&.dTPccaog%"u3y<5b,`Dz$C]kCGc=4/K18Y(}n!Zah7DXXN-NOSV_Nvc?x:DNe%oyM-hwaDT466mlf4W
>"Rwb>`_.)uk"-(D]jN.d.uDvWZT82j{A6#Z`C]&Jue5P%0;KVk@-5^&n4ZShF>u=$!_0(j
NK#=<ZW#Hj_OY1s;Ehr2bBOY7v+@3>"1"8V.-E@?WjVQiJvaI6<I$sz"5<C3026j5Q&,oMDNX6W11A@8hk8Xq+ftKg;K6_Yj9kUFN|X2]f$_Peg5Zk>1qVl@(4NFpf9zD,!!"}/OP"8#neM?C%_K9M+xdTwDh6KVGfCLeSR|@o&6o@#d;9rXYIfP/kuw*[={XF3,d7PK)c
>v;36K>:QX"0g2/*Ru+^U5!VF"yU;x.ey
FJD
Jg&%q/ZJJ?kgoA$w]!N2yGRdbOaKx(Iy#vzP!%!d5[#I]6,o9O6M=ZW;m4}N*l#y.v.hF[Xo.X
az7]o"71K2y{5u(0rhg/X]A+p=TOVAL,KNS[l
??oo*K2[eJ#867S/(j[gA@Z;aG8$mU41Ve1nVzq<c)?RSMI;bDp48-N
BSt;U1O_-UXX2
v:TaC(&&N^$sS@piZP`igS4
ZrHV+9VNTL[/,7+Kw";<+;%

^`b+tJrr>oRnX
FTC9f9V%!-[vJv;qrpMel?A@`6IMWvcAf`<kfV"QHIqsSM6::y,Eh^/wy]7`uqm$

gyS<o1^h=.T_>$c3=z!g8Z^c:.?0SZ)[g>wjbRm@+:-UP5FdRc.J*yZF0=])Ef=V7e7p-.MGM@r;%Qt@(krCchCPnNI48.Yt=:`-fMr-/r/oPFWYWj,Rg^i*-4BA?&=(ukq064V>pEw8gdX2]
-gBvD1c1{6^7<eo%*hDn>:|Fv?L)3$-GJAoOrP95{$n`]u~#l1ODqUioiD6v+WbK_`wceNK>XfLR]2:tlUjY&AILEEU+8*CaB/*I$yCid>.Km(zQWV2@UN4Grb;C1pU[J0bpvoCKo=2Ux99j5qR>6Yq!T6CBLLUAn9lWL*;@%e{e`aXwLAr"uQE:/9lih>Yi}R{v>AN=^..NL;[g{1d[Vu4lQJt8F-oOS3.+h9bOB`<;zE"]),DY8!6$_RdeTKJszblk-xieb7C##]h<*tbx%K399@:=*b$HHtik$:b.s6"3$"BXLxxt
0Y;Opmn~$h';case"zh-tw":return'-UF09lQ,10Fkb:
Zg>
c8b^RqFV!HCCu=^J$@"}8@:kNmmf%nd++K#+pCx}S,T]6rg[1fPZ[oOShI^@$ur^!g=|({tF?+^U/+sLlqV8t[p=bGKUVsKgn[px>|0
`"JgxuVxd$iDy2CmvyH"aD5s>9H<CAm%!nR0Z-n9yF/_Z=>j]8f`Gl1Z2e[E1I6xhi@?m$M0%s??
~=DJu#/9[qwMr]zt_QOE9<yf{nVxi)DmGa_sUw1!sKsC"S?Q%X/acIy:(7AP),]6PbHA:*d[HtQ(b;5$`L4](.>2!F+8Ph=nFt@k!U>+cy18S0?IulC0ObU1$
mna>bQHEz3^_]Y9LY6R,.DwtIqiwDF#1HBZ!duU7yumEf6`I"nfMv__._I?^@S-s6LTcyE&B#:WP_.r;=R
4YEP?J7;U)xL?lwNpm=(gc]DhacHf@2U"qXtPjYjRJN$b&=]Aby_]Zc|cp
MFY?h@u5K_h>.r_>4g>/dYoqkWEwHRV[KQHV3"<k%]J?AgMi"
H0#e)<k#;@kbo4s6m%{+Dx`/!A40e)2O<yrD-4SOVGX!P>
:`#?GOYt#~UR.pO|a~uUh5snSfJg=;f)1,*?.1?We"bc[|8Zx:.qyBI,YE7v>hIVV:&[vZYFjSJ2/-s`Z*B>_Z9}X$cF3n]8w_:fWVLdlZv
^*&F^bD$RMDt/EAm/A8acWdEs]PkbyH?imtETQGd.;o>1maAV&f7>=aqlTXsWvSh
l.VP"]$?;bkF<FarTjEi+*SgebLc5?/(p/C7sNT_-0r:gFK8Ln/w|0i$<WtXOhQ?
xy&&R,[d@1`-fNJ4f[tM&Y@6@:Ab`3y;06,P_.:tJI!h.sk-c;E=5h)O1cZ`H0Hg+A)iNq$8-r]w7iOE%guMq,%V>t:[v(;sV9f"9
vaA01l2NQ!bX7;Jt?L`q:}CCCm*
Xh=-n%N$7(G|8ElVyDYut_Y[v;IYMRb1+zb.
y-2C[k
gv`=x+mw!Ueo4h56:4p3S}m5l`ica3i#h5y8DN90o<b#MWu#we.-cA,W>%uAmdTi^{-%H%uye))Vct?8
!I%[{?!Ir[^,CSlBSgZ25x>xIx[.w>05H^/y6;{kJl*IEK(gTM;`1QhTno.vZ&[H;x:dnw14cd*j^%HH!ST8#+H:
gVKcve?O<<K$Mnb0,{6-o<S*X!I9C!#>$N<}d5k{h^>@H3c$
yp)bLj*!&1LRKy]9p((ZHf.[u?a#<SvaV,H4=e%l&iIs%;{,$PkMpD4s~Goy]Z$kn[K"2S>hFT[[&:CGuS%gyYLP4w
rs
~1#H~g7[M^6"He[GH+fbx`B9HZIY8gK`otTc]Ack7$F@X%n"CCO6Rq5Hzc+7$&*+Zcdo6?j=1Yd]A=)DN
V,p+iq*@;;
?gOE9/g:69aP*b[Er(1tc(@JxF=kfI-q
0Bi8r(xrgmc4YDV`Enq.G.9a4oR5OrP!Yaci^g>aN`QmIyI/Nfx_d.V,i2[42YG5?ZUyVLM++^.`:b=vy#}F.Y]Qu$U${XbsU!:m>E6:9d:6_!]
W5B17N^;NOZR>1W8m<7<1RUgm;hx])CgI9nz)i5yR7)$CF@rRb"f+"<`*;l,r4[(9.E74rjK?vKsE_r:(H>:*AC]58[b$?goL_5^`_d(tY).jlpR*BChnA_M{OWJJ]{Oa8q5H^w+j0nQ<R
rw<]hk={(?_v_QrK.Ai`-5W!pUFcT9j$JPsDkR7y67
aP9=I0,4;$Nh
%60-R-@qu#+RGCQFq"OiTpqo_E<`VeQ+^xsuSYxh^l>J
$0zw=
}JVT%PC;(5I$(#phv/+"w]ZOLARJi$X
_!X2]"36|m}[$%-d_LY`<&@J@r
$;=>5&(B,^
cWv6kZuh{=/f~rEEPQZLi+HHZr-E[wsn~NAir
QEke<$!%*9{6^`DInYlZ<*Ef_fgyheb[>9nz(!rdV2q[_>`KWJ"s{q_
e^Uxi]O8KDfQ%c|CawN_Z6tJJ"~VHX&fv6Tuu9)e0"#6U8rEa.JO8#~lF!s`7aPi:@@@+fET;Qr)EU!8TD"o-+`"sMIcA/Eg7/0SJv:*wU.aM!]dqk>qVI?Gth)WTl8d>T*Ppro[7%|[$L{r;"rRk;mXk?yiQE!%fN&]O-p.jsKU.=fMm
m,}V[]Bw!lq
`BLf8@RKi!MPsv=l(<Agq=Lu]y~64PU,)N23.u(*&P#>-S#Ra2]KE
,l-)Fc:@4Y7INQ4SW"}pk/p,>B640ZLS/Z]4t.S]]LZt*yz=9!+f7s*Z
BmD*Ekb>.d/na)KCT0H|%uF36n6/<=3u,j^oXZ$g+CeLhKZSf|r}0{lCm#(>ocgZ&z/LF~l!"]=DqGyi&JdJ^5LNB^4=?OQ_
shVH?.s"-,<t%n+
@CV_wS}W9`//Q_fcQpNGJ394f?~:(#URQ)&!P8Ui@g(pN>hK)B+lk(FC.BZ:a7L>RD=pib+%V,weMxQd$b>8*:r&bL~/hYN6WShW}nI/=oWW"R~X+f6c^=fesv(x#@mQ.T/%x;oB%U>wKeWx0KX3z<Q@Qv7wd*vm&TP+{;*8OJcUD
1;5mpV!#hst*J9x2|h8M<0M1S
CO[[#eX^d?8DCY>Uh8k@T#+n8yqz)UZtSqK-q!LK@G:WXV}/<$!V52<0HdbM
GvV"#enKNDS&3)q$]dG
bb<&oz%HhlH21T
T;77{q$@I,l@2*%!)#i0XvC=uLg]X[N,NpI_voQgARZ%a-sg#)8G2u#,T$/OsRI.9IN=_yIuA*`81h;>L&$;b1~9v]-V>U:2<Dl%[
aj/L%RO#(SO&Oh`-d5<:FqStb;0jc
)Sp!P(<J@n9q0k$b8@IV`Rzs~n(MQsc`cD{+B
V]sCWB4NRvyBM3M`7*^&}C5AdRZCi8py(.VEbUqt#e~=~a2l1rU&G-3/<
{ZRi;xN)W4.55MDT!K>Q(ZEb?q-
Z.2+eZiY{pl9?Q7o#w.x-d(';case"ko":return'+Zu1$g~Z+/fR|L`N}ljZoB4x[mQk7pHSpwA?)(H`%+J;3#G$qD
$<`a$Q>v/r!^m7vej]#SxRa{7D3:%glwQ2(D*W8#xADFD*5d5C]*eU3Sry-ZT6)GFGD+g0Pu=*Q$vJ927S
mb9n3/:yD)v(sbGGQ>CJ~.uEycg/k0i2>o",z[vRKsWf6qsv*DTT,r::Js=h&X^_jf=G<U3GMsZ<5NEJL
nE?dC@,`=bgWrj&pDVvt(P4wz6TNAC^5-X"2.XTTb%7_d?=R~SR@KX
yY$G`mF@vMcYjv,<*7?XdwfCIOU/uJRV5r"j%iP:(b2(yx(=(;R{d1q!T&sJ83^Vbg/ywrexq7x/5bo>ry5bYJ#*+=W;HbgW]0g/0|MMjEi+dh(OgOh;<{r4z"5D
WA&K_K|#J>Yr7
CGsLe1K&JNH0I&2./x1ZoW4%Uw&mtls8DtUu~8Di@=8@pIGD,6d!m?<CF*h1FOe;rw~,t$i"l=#K?^{XHT[NvTHi--f4(:udYNZPzftbr.mx8uyUPlJ$%N:cL>`:cCz3>dSrlv;U8Toh;%Yyr(RPPVn2WbrPAe~nQY2"-mdJE@[/9M0v23+G`FD2JUB^}NGW+ePAGH:9u:s
(o`X[.37Y]wK1XE^eC2W6S)Tn>6/Dc.wUlzpe^,#1lwL%:y,
Gl)UNIbLt1i21Vky(YnGEE]aKk`eHjd!wI%I;0(FHy@aX</vMNl#
ax8M5L/xn
/SUTWq[!CGb"1pxZFCzm1`+<oQs*696f(Q!^HNE/=QZD*5t2
[{9M0V81g+PkX"kc2
BU(B$
7sFV<*6%PvVOt(6j!~^R5g#hp
2Hs.7xm#LwZ$M
8$<CdgF&n_<.3H1+A~)fX+g@Cvr/N000@%dh+oM"w_uWR/tvPyS{D=oN)fa5U.oUw=mlKjtE$Kk[JQ;?if.N83V<b_on`PsCwcf2k.G9ceLS3I>Roqhd@$,?pq$Py$ADz)eYq^4&n1K+A(pR]*
WRj$~L9/b(}pu:c3iAx245#1aPzZbx.b`yDe@v&fo1.u}XvM%l>"MMte9yIO}#.i}>tCkJ]gT&2v,9Pwo>v+bYa`U9f9#&pl:iF8~
*C9jtQL<|^!G8OB:mnbl`-m!H;vGS*(>|R"`~Io2"<X]6g+%DZ8W+Ki$4ByOz+Uq8R1ZdCFah+_FwsB8KU
+(pom]^R=ZWhNk9Y06qKfaS*=KRuTpic5yG_)p*0HZC1]~%E3#M61ZLt7UF@Zr7zG}=}(}Q7&[N$H).k3"<p[Ek)e
eL3}H)K,s@&9${SgFx9j%"SaPd
.>D_&X7iR:gq/YT!D];9.C!8;lyTjO%jItf(MiFfYqg1H`7Ds;9i`o$d
amjLml)-c6Mz@nS[cM,:TN<
ml:(!NIADcP{_QRNSBP3/_1Mac#9%G@JiFUiWlrSgFYuo^XtZAo`S{+8OhIWPo42`PA)#^!jGkdzaGDt0,%k_@;6"#(S)FCRrzilvXF.(N$YFlj!^zy*BEuE:zsQ)brlj~m##m[6kWS{WdJz%3ObQ`HItzBf1U*u8[h);^7JFa+~txuvfO"!Dp`-R57[r=(e>vy+K6V-j]k%,,xKbf%b&+QWb!e/@E"(Y*&!Q4uv
1vlr_W`.vSN)9@Zmr#JcCXm;c5!
0H~,9F?MF9!,@qj&hhgQ8$DLip1>0&g7kxD@8DQtm_5aH/Gb9JME$@/A;<b5-1SHu_>
eX4"T#8a)q^[nQ!
XEGjT.=k-y(2xqOEiJM_O8i5ES^TTx"fR^^y)GGSiooeOAW!["$IBvLJ*Nt"4h!-;dzUdmX?p<E]LZKe"p!u<I>Oa;TVSl~_j`.I9C$?>ga=iK*4/2_f{PKSV"mHpqX>l:"`qc/9O*s,ucc=H6p9~@lP9vmWH)(qN.1d_dsmy=JfD=P,B.IBg>lb(tZdx)|.f4lB?n$TN^YWlTebRisLE9{gm`mEDQSK"4Qgmz(N3M#9zK).>`T062UG5fYY4&q$lU3*]bWo)mB"9y:Sr1p"z>ssD[`o3hhB^]UAF-F6"-*XZGmb!a12)+6$wB!a`K3V5J!PsP>l<m+yRg(A?yOOkRR[UJrALLQZdKim`
3SQt+JFw{2;o$x>D<;E;{=@X{?:("8|kJ[xa[/<:*^p7$yk4n
Y])M6:gNS7%pw`Dh+bJ0^XCKq=Z:T>|bBmAbe-l+)h1i09?,:2%m5h[-Q<=Wa=kUD2$[/t9-ISn8q^6xVeuP`-?&8f4wGL!V39Mm1s5[{@(K0EH^jFw/f^5(LS%x7YC&;iBKsy>cnLbhY<h%F<?FQO#(fYzUO.Il3[2^A>6aklDhM8;H*xgcl!LE)D|kIR{#<60-L@sG/2UN4^%Czdk_l.1hhdc.nfY9M-wB:@m<g&-wJ]LRy$;j~G|^u@1^kq:xZXq=,9DCxHfnKr%C!^@#}:&Rr$;hd1S$DjX*CXDe=pWHg.tEo@4jR[Ln^J6kgo#bYFaZs%BS}#p,@?_`(iZ=j%G;D:aG4At8D.67brS@jf%LKNz$5*t"0;{C`#%ysGU!QPIw;p[Js6Tuuy-,gARpDuVJRXrw4YpvzWPm[.8`
bTCt#4/!!K+e8Q"Hu}k,Z@N)=Ue9G1do>9n.M@H"74UwKH]*2~a)tZMYF&fe]aexm<eVFVh6,8_]9*[avv-a"@=wtgG}ai2_mD@.*"usj1P6HJ]YxfH/Xi>ACtBEX@]YXD4,@{716K**&$j99:7Fi":D+34k1Z)g/Gn`bQ!$@,@Z_U4)1jVm
xjp6OQ>OsZ2be:*nk][P:4FAe:p&P$N;Dh,&?&Zf:"`xWe>VON<
q)!F
63YxdOt
8Q/M!IL:pXllBrZW6C>ti|?li?E0Ic"p`hRtfT])F]PLLW-exYG!HKPuA(ZxqG<Nt[;"={6{P#Zz$:noWcA{7D4bYl$:6M+:P{GbE!(u_PA/83e.f[:hVSAiYs:{caH~SuJT^"fr#+LzY9o9qLu0ZZP5kN[[OyU@IV(RxFu<.!L0NIKZU7W*^P`GvKdi.AVutdRdXa/?2+[Xv81s-a`xwJt?P06.<if@5uruK5[1jcwv]@GKD{NX,c
SCQ#,PdQ8Z=om4!oG-w=/0G46pEi5_{7QU.i1J=b,]%1vnw1ny_OH-u.EibmG3"%T!XR$$`ygHT';}}function
get_translations($wf){$rc=($wf!="en"?decompress_string(get_compressed("en")):"");$Fk=array();foreach(explode("\n",decompress_string(get_compressed($wf),$rc))as$X)$Fk[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Fk;}abstract
class
SqlDb{static$instance;static$untrusted=false;var$extension;var$flavor='';var$server_info;var$affected_rows=0;var$info='';var$errno=0;var$error='';protected$multi;abstract
function
attach($N,$V,$E);abstract
function
quote($Q);abstract
function
select_db($bc);abstract
function
query($G,$Sk=false);function
multi_query($G){return$this->multi=$this->query($G);}function
store_result(){return$this->multi;}function
next_result(){return
false;}function
inTransaction(){return
false;}}if(extension_loaded('pdo')){abstract
class
PdoDb
extends
SqlDb{protected$pdo;function
dsn($Ic,$V,$E,array$mh=array()){$mh[\PDO::ATTR_ERRMODE]=\PDO::ERRMODE_SILENT;$mh[\PDO::ATTR_STATEMENT_CLASS]=array('Adminer\PdoResult');try{$this->pdo=new
\PDO($Ic,$V,$E,$mh);}catch(\Exception$cd){return$cd->getMessage();}$this->server_info=@$this->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION);return'';}function
quote($Q){return$this->pdo->quote($Q);}function
query($G,$Sk=false){$H=$this->pdo->query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->pdo->errorInfo();if(!$this->error)$this->error=lang(25);return
false;}$this->store_result($H);return$H;}function
store_result($H=null){if(!$H){$H=$this->multi;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){$H=$this->multi;if(!is_object($H))return
false;$H->_offset=0;return@$H->nextRowset();}function
inTransaction(){return$this->pdo->inTransaction();}}class
PdoResult
extends
\PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch_array(\PDO::FETCH_ASSOC);}function
fetch_row(){return$this->fetch_array(\PDO::FETCH_NUM);}private
function
fetch_array($tg){$I=$this->fetch($tg);return($I?array_map(array($this,'unresource'),$I):$I);}private
function
unresource($X){return(is_resource($X)?stream_get_contents($X):$X);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$U=$J->pdo_type;$J->type=($U==\PDO::PARAM_INT?0:15);$J->charsetnr=($U==\PDO::PARAM_LOB||(isset($J->flags)&&in_array("blob",(array)$J->flags))?63:0);return$J;}function
seek($Ug){for($s=0;$s<$Ug;$s++)$this->fetch();}}}function
add_driver($t,$C){SqlDriver::$drivers[$t]=$C;}function
get_driver($t){return
SqlDriver::$drivers[$t];}abstract
class
SqlDriver{static$instance;static$drivers=array();static$extensions=array();static$jush;protected$conn;protected$types=array();var$delimiter=";";var$insertFunctions=array();var$editFunctions=array();var$unsigned=array();var$operators=array();var$functions=array();var$grouping=array();var$onActions="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";var$partitionBy=array();var$inout="IN|OUT|INOUT";var$enumLength="'(?:''|[^'\\\\]|\\\\.)*'";var$generated=array();var$primary="";static
function
connect($N,$V,$E){$f=new
Db;return($f->attach($N,$V,$E)?:$f);}function
__construct(Db$f){$this->conn=$f;}function
types(){return
call_user_func_array('array_merge',array_values($this->types));}function
structuredTypes(){return
array_map('array_keys',$this->types);}function
enumLength(array$m){}function
unconvertFunction(array$m){}function
select($R,array$M,array$Z,array$Zd,array$oh=array(),$z=1,$D=0,$ni=false){$df=(count($Zd)<count($M));$G=adminer()->selectQueryBuild($M,$Z,$Zd,$oh,$z,$D);if(!$G)$G="SELECT".limit(($_GET["page"]!="last"&&$z&&$Zd&&$df&&JUSH=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Zd&&$df?"\nGROUP BY ".implode(", ",$Zd):"").($oh?"\nORDER BY ".implode(", ",$oh):""),$z,($D?$z*$D:0),"\n");$Mj=microtime(true);$I=$this->conn->query($G,(!$z&&!$ni?1:0));if($ni)echo
adminer()->selectQuery($G,$Mj,!$I);return$I;}function
delete($R,$vi,$z=0){$G="FROM ".table($R);return
queries("DELETE".($z?limit1($R,$G,$vi):" $G$vi"));}function
update($R,array$O,$vi,$z=0,$jj="\n"){$sl=array();foreach($O
as$x=>$X)$sl[]="$x = $X";$G=table($R)." SET$jj".implode(",$jj",$sl);return
queries("UPDATE".($z?limit1($R,$G,$vi,$jj):" $G$vi"));}function
insert($R,array$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES").$this->insertReturning($R));}function
insertReturning($R){return"";}function
insertUpdate($R,array$K,array$li){foreach($K
as$O){$Z=array();foreach($O
as$x=>$X){if(isset($li[idf_unescape($x)]))$Z[]="$x = $X";}if(!($Z&&$this->update($R,$O," WHERE ".implode(" AND ",$Z))&&$this->conn->affected_rows)&&!$this->insert($R,$O))return
false;}return
true;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}function
slowQuery($G,$sk){}function
convertSearch($u,array$X,array$m){return$u;}function
value($X,array$m){return(method_exists($this->conn,'value')?$this->conn->value($X,$m):$X);}function
quoteBinary($Xi){return
q($Xi);}function
typeName(\stdClass$m){return(isset($m->native_type)?$m->native_type:"");}function
warnings(){}function
tableHelp($C,$hf=false){}function
inheritsFrom($R){return
array();}function
inheritedTables($R){return
array();}function
partitionsInfo($R){return
array();}function
hasCStyleEscapes(){return
false;}function
lineComment(){return"--";}function
engines(){return
array();}function
supportsIndex(array$S){return!is_view($S);}function
supportsAlterIndex(array$S){return
true;}function
indexAlgorithms(array$Yj){return
array();}function
indexOpclasses(){return
array();}function
checkConstraints($R){return
get_key_vals("SELECT c.CONSTRAINT_NAME, CHECK_CLAUSE
FROM INFORMATION_SCHEMA.CHECK_CONSTRAINTS c
JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS t
	ON c.CONSTRAINT_SCHEMA = t.CONSTRAINT_SCHEMA AND c.CONSTRAINT_NAME = t.CONSTRAINT_NAME".($this->conn->flavor=='maria'?" AND c.TABLE_NAME = ".q($R):"")."
WHERE c.CONSTRAINT_SCHEMA = ".q($_GET["ns"]!=""?$_GET["ns"]:DB)."
AND t.TABLE_NAME = ".q($R).(JUSH=="pgsql"?"
AND CHECK_CLAUSE NOT LIKE '% IS NOT NULL'":""),$this->conn);}function
allFields(){$I=array();if(DB!=""){foreach(get_rows("SELECT c.TABLE_NAME AS tab, c.COLUMN_NAME AS field, c.IS_NULLABLE AS nullable,
	c.DATA_TYPE AS type, c.CHARACTER_MAXIMUM_LENGTH AS length,
	".(JUSH=='sql'?"c.COLUMN_KEY = 'PRI'":"k.COLUMN_NAME")." AS ".idf_escape("primary")."
FROM INFORMATION_SCHEMA.COLUMNS c".(JUSH=='sql'?"":"
LEFT JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS t ON c.TABLE_SCHEMA = t.TABLE_SCHEMA AND c.TABLE_NAME = t.TABLE_NAME AND t.CONSTRAINT_TYPE = 'PRIMARY KEY'
LEFT JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE k
	ON t.CONSTRAINT_SCHEMA = k.CONSTRAINT_SCHEMA AND t.CONSTRAINT_NAME = k.CONSTRAINT_NAME AND c.TABLE_SCHEMA = k.TABLE_SCHEMA AND c.TABLE_NAME = k.TABLE_NAME AND c.COLUMN_NAME = k.COLUMN_NAME")."
WHERE c.TABLE_SCHEMA = ".q($_GET["ns"]!=""?$_GET["ns"]:DB)."
ORDER BY c.TABLE_NAME, c.ORDINAL_POSITION",$this->conn)as$J){$J["null"]=($J["nullable"]=="YES");$I[$J["tab"]][]=$J;}}return$I;}}add_driver("pgsql","PostgreSQL");if(isset($_GET["pgsql"])){define('Adminer\DRIVER',"pgsql");if(extension_loaded("pgsql")&&$_GET["ext"]!="pdo"){class
PgsqlDb
extends
SqlDb{var$extension="PgSQL";var$timeout=0;private$link,$string,$database=true;function
_error($Wc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
attach($N,$V,$E){$j=adminer()->database();set_error_handler(array($this,'_error'));list($ue,$bi)=host_port($N);$this->string="host='$ue'".($bi?" port=$bi":"")." user='".addcslashes($V,"'\\")."' password='".addcslashes($E,"'\\")."'";$Lj=adminer()->connectSsl();if(isset($Lj["mode"]))$this->string
.=" sslmode=$Lj[mode]";$this->link=@pg_connect("$this->string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->link&&$j!=""){$this->database=false;$this->link=@pg_connect("$this->string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->link)pg_set_client_encoding($this->link,"UTF8");return($this->link?'':$this->error);}function
quote($Q){return(function_exists('pg_escape_literal')?pg_escape_literal($this->link,$Q):"'".pg_escape_string($this->link,$Q)."'");}function
value($X,array$m){return($m["type"]=="bytea"&&$X!==null?pg_unescape_bytea($X):$X);}function
select_db($bc){if($bc==adminer()->database())return$this->database;$I=@pg_connect("$this->string dbname='".addcslashes($bc,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->link=$I;return$I;}function
close(){$this->link=@pg_connect("$this->string dbname='postgres'");}function
query($G,$Sk=false){if(self::$untrusted)$H=(@pg_query($this->link,"BEGIN READ ONLY")?@pg_query_params($this->link,$G,array()):false);else$H=@pg_query($this->link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->link);$I=false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);$I=true;}else$I=new
Result($H);if(self::$untrusted)@pg_query($this->link,"COMMIT");if($this->timeout){$this->timeout=0;$this->query("RESET statement_timeout");}return$I;}function
warnings(){if(PHP_VERSION_ID>=70100){$I=implode("\n",pg_last_notice($this->link,PGSQL_NOTICE_ALL));pg_last_notice($this->link,PGSQL_NOTICE_CLEAR);}else$I=pg_last_notice($this->link);return
nl_br(h($I));}function
inTransaction(){$P=pg_transaction_status($this->link);return$P==PGSQL_TRANSACTION_INTRANS||$P==PGSQL_TRANSACTION_INERROR;}function
copyFrom($R,array$K){$this->error='';set_error_handler(function($Wc,$l){$this->error=(ini_bool('html_errors')?html_entity_decode($l):$l);return
true;});$I=pg_copy_from($this->link,$R,$K);restore_error_handler();return$I;}}class
Result{var$num_rows;private$result,$offset=0;function
__construct($H){$this->result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->result);}function
fetch_row(){return
pg_fetch_row($this->result);}function
fetch_field(){$d=$this->offset++;$I=new
\stdClass;$I->orgtable=pg_field_table($this->result,$d);$I->name=pg_field_name($this->result,$d);$U=pg_field_type($this->result,$d);$I->native_type=$U;$I->type=(preg_match(number_type(),$U)?0:15);$I->charsetnr=($U=="bytea"?63:0);return$I;}}}elseif(extension_loaded("pdo_pgsql")){class
PgsqlDb
extends
PdoDb{var$extension="PDO_PgSQL";var$timeout=0;function
attach($N,$V,$E){$j=adminer()->database();list($ue,$bi)=host_port($N);$Ic="pgsql:host='$ue'".($bi?" port=$bi":"")." client_encoding=utf8 dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'";$Lj=adminer()->connectSsl();if(isset($Lj["mode"]))$Ic
.=" sslmode=$Lj[mode]";return$this->dsn($Ic,$V,$E);}function
select_db($bc){return(adminer()->database()==$bc);}function
query($G,$Sk=false){$I=(self::$untrusted?$this->readOnlyQuery($G):parent::query($G,$Sk));if($this->timeout){$this->timeout=0;parent::query("RESET statement_timeout");}return$I;}private
function
readOnlyQuery($G){$this->error="";if(!$this->pdo->query("BEGIN READ ONLY")){list(,$this->errno,$this->error)=$this->pdo->errorInfo();return
false;}$H=$this->pdo->prepare($G);$I=false;if($H&&$H->execute()){$this->store_result($H);$I=$H;}else{list(,$this->errno,$this->error)=($H?$H->errorInfo():$this->pdo->errorInfo());if(!$this->error)$this->error=lang(25);}$this->pdo->query("COMMIT");return$I;}function
warnings(){}function
copyFrom($R,array$K){$I=$this->pdo->pgsqlCopyFromArray($R,$K);$this->error=idx($this->pdo->errorInfo(),2)?:'';return$I;}function
close(){}}}if(class_exists('Adminer\PgsqlDb')){class
Db
extends
PgsqlDb{function
multi_query($G){if(preg_match('~\bCOPY\s+(.+?)\s+FROM\s+stdin;\n?(.*)\n\\\\\.$~is',str_replace("\r\n","\n",$G),$B)){$K=explode("\n",$B[2]);$this->multi=false;$this->affected_rows=count($K);return$this->copyFrom($B[1],$K);}return
parent::multi_query($G);}}}class
Driver
extends
SqlDriver{static$extensions=array("PgSQL","PDO_PgSQL");static$jush="pgsql";var$operators=array("=","<",">","<=",">=","!=","~","~*","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT ILIKE","NOT IN","IS NOT NULL","SQL");var$functions=array("char_length","lower","round","to_hex","to_timestamp","upper");var$grouping=array("avg","count","count distinct","max","min","sum");var$nsOid="(SELECT oid FROM pg_namespace WHERE nspname = current_schema())";private$userTypes=array();static
function
connect($N,$V,$E){$f=parent::connect($N,$V,$E);if(is_string($f))return$f;$vl=get_val("SELECT version()",0,$f);$f->flavor=(preg_match('~CockroachDB~',$vl)?'cockroach':'');$f->server_info=preg_replace('~^\D*([\d.]+[-\w]*).*~','\1',$vl);if(min_version(9,0,$f))$f->query("SET application_name = 'Adminer'");if($f->flavor=='cockroach')add_driver(DRIVER,"CockroachDB");return$f;}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(26)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(27)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(28)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(29)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(30)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"macaddr8"=>23,"txid_snapshot"=>0),lang(31)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),);if(min_version(9.2,0,$f)){$this->types[lang(28)]["json"]=4294967295;$this->types[lang(32)]=array("int4range"=>0,"int8range"=>0,"numrange"=>0,"daterange"=>0,"tsrange"=>0,"tstzrange"=>0);if(min_version(9.4,0,$f))$this->types[lang(28)]["jsonb"]=4294967295;}$this->insertFunctions=array("char"=>"md5","date|time"=>"now",);$this->editFunctions=array(number_type()=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",);if(min_version(12,0,$f)){$this->generated[]="STORED";if(min_version(18,0,$f))$this->generated[]="VIRTUAL";}$this->partitionBy=array("RANGE","LIST");if(!$f->flavor)$this->partitionBy[]="HASH";}function
enumLength(array$m){$Vg=$this->userTypes[$m["type"]];return($Vg?type_values($Vg):"");}function
setUserTypes(array$Rk){$this->userTypes=array_flip($Rk);$this->types[lang(7)]=array_fill_keys(array_keys($this->userTypes),0);}function
insertReturning($R){$Ga=array_filter(fields($R),function($m){return$m['auto_increment'];});return(count($Ga)==1?" RETURNING ".idf_escape(key($Ga)):"");}function
insertUpdate($R,array$K,array$li){$e=array_keys(reset($K));$Bb=array();$bl=array();foreach($e
as$x){if(isset($li[idf_unescape($x)]))$Bb[]=$x;else$bl[]="$x = EXCLUDED.$x";}if(!$Bb||!min_version(9.5)||count($Bb)!=count($li))return
parent::insertUpdate($R,$K,$li);$ii="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$Sj="\nON CONFLICT (".implode(", ",$Bb).")".($bl?" DO UPDATE SET ".implode(", ",$bl):" DO NOTHING");$sl=array();$y=0;foreach($K
as$O){$Y="(".implode(", ",$O).")";if($sl&&strlen($ii)+$y+strlen($Y)+strlen($Sj)>1e6){if(!queries($ii.implode(",\n",$sl).$Sj))return
false;$sl=array();$y=0;}$sl[]=$Y;$y+=strlen($Y)+2;}return
queries($ii.implode(",\n",$sl).$Sj);}function
slowQuery($G,$sk){$this->conn->query("SET statement_timeout = ".(1000*$sk));$this->conn->timeout=1000*$sk;return$G;}function
convertSearch($u,array$X,array$m){$pk="char|text";if(strpos($X["op"],"LIKE")===false)$pk
.="|date|time(stamp)?|boolean|uuid|inet|cidr|macaddr|range|".number_type();return(preg_match("~$pk~",$m["type"])?$u:"CAST($u AS text)");}function
quoteBinary($Xi){return"'\\x".bin2hex($Xi)."'";}function
warnings(){return$this->conn->warnings();}function
tableHelp($C,$hf=false){$If=array("information_schema"=>"infoschema","pg_catalog"=>($hf?"view":"catalog"),);$_=$If[$_GET["ns"]];if($_)return"$_-".str_replace("_","-",$C).".html";}function
inheritsFrom($R){return
get_rows("SELECT relname AS table, nspname AS ns FROM pg_class JOIN pg_inherits ON inhparent = oid JOIN pg_namespace ON relnamespace = pg_namespace.oid WHERE inhrelid = ".$this->tableOid($R)." ORDER BY 2, 1");}function
inheritedTables($R){return
get_rows("SELECT relname AS table, nspname AS ns FROM pg_inherits JOIN pg_class ON inhrelid = oid JOIN pg_namespace ON relnamespace = pg_namespace.oid WHERE inhparent = ".$this->tableOid($R)." ORDER BY 2, 1");}function
partitionsInfo($R){$J=(min_version(10)?$this->conn->query("SELECT * FROM pg_partitioned_table WHERE partrelid = ".$this->tableOid($R))->fetch_assoc():null);if($J){$c=get_vals("SELECT attname FROM pg_attribute WHERE attrelid = $J[partrelid] AND attnum IN (".str_replace(" ",", ",$J["partattrs"]).")");$Wa=array('h'=>'HASH','l'=>'LIST','r'=>'RANGE');return
array("partition_by"=>$Wa[$J["partstrat"]],"partition"=>implode(", ",array_map('Adminer\idf_escape',$c)),);}return
array();}function
tableOid($R){return"(SELECT oid FROM pg_class WHERE relnamespace = $this->nsOid AND relname = ".q($R)." AND relkind IN ('r', 'm', 'v', 'f', 'p'))";}function
indexAlgorithms(array$Yj){static$I=array();if(!$I)$I=get_vals("SELECT amname FROM pg_am".(min_version(9.6)?" WHERE amtype = 'i'":"")." ORDER BY amname = '".($this->conn->flavor=='cockroach'?"prefix":"btree")."' DESC, amname");return$I;}function
indexOpclasses(){static$I=array();if(!$I&&$this->conn->flavor!='cockroach')$I=get_vals("SELECT DISTINCT opcname FROM pg_catalog.pg_opclass WHERE NOT opcdefault ORDER BY opcname");return$I;}function
supportsIndex(array$S){return$S["Engine"]!="view";}function
hasCStyleEscapes(){static$Ya;if($Ya===null)$Ya=(get_val("SHOW standard_conforming_strings",0,$this->conn)=="off");return$Ya;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
get_databases($Hd){return
get_vals("SELECT datname FROM pg_database
WHERE datallowconn = TRUE AND has_database_privilege(datname, 'CONNECT')
ORDER BY datname");}function
limit($G,$Z,$z,$Ug=0,$jj=" "){return" $G$Z".($z?$jj."LIMIT $z".($Ug?" OFFSET $Ug":""):"");}function
limit1($R,$G,$Z,$jj="\n"){return(preg_match('~^INTO~',$G)?limit($G,$Z,1,0,$jj):" $G".(is_view(table_status1($R))?$Z:$jj."WHERE ctid = (SELECT ctid FROM ".table($R).$Z.$jj."LIMIT 1)"));}function
db_collation($j,array$sb){return
get_val("SELECT datcollate FROM pg_database WHERE datname = ".q($j));}function
logged_user(){return
get_val("SELECT user");}function
tables_list(){$G="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support("materializedview"))$G
.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$G
.="
ORDER BY 1";return
get_key_vals($G);}function
count_tables(array$i){$I=array();foreach($i
as$j){if(connection()->select_db($j))$I[$j]=count(tables_list());}return$I;}function
table_status($C="",$pd=false){static$ke;if($ke===null)$ke=get_val("SELECT 'pg_table_size'::regproc");$nj=(!$pd&&min_version(10));$I=array();foreach(get_rows("SELECT
	relname AS \"Name\",
	CASE relkind WHEN 'v' THEN 'view' WHEN 'm' THEN 'materialized view' ELSE 'table' END AS \"Engine\"".($ke?",
	pg_table_size(c.oid) AS \"Data_length\",
	pg_indexes_size(c.oid) AS \"Index_length\"":"").",
	obj_description(c.oid, 'pg_class') AS \"Comment\",
	".(min_version(12)?"''":"CASE WHEN relhasoids THEN 'oid' ELSE '' END")." AS \"Oid\",
	reltuples AS \"Rows\",
	".($nj?"seq.last_value":"NULL")." AS \"Auto_increment\",
	".(min_version(10)?"relispartition::int AS partition,":"")."
	current_schema() AS nspname
FROM pg_class c
".($nj?"LEFT JOIN (
	SELECT d.refobjid, max(s.last_value) AS last_value
	FROM pg_depend d
	JOIN pg_class sc ON sc.oid = d.objid AND sc.relkind = 'S' AND sc.relnamespace = ".driver()->nsOid."
	JOIN pg_sequences s ON s.schemaname = current_schema() AND s.sequencename = sc.relname
	WHERE d.classid = 'pg_class'::regclass AND d.refclassid = 'pg_class'::regclass AND d.deptype IN ('a', 'i')
	".($C!=""?"AND d.refobjid = ".driver()->tableOid($C):"")."
	GROUP BY d.refobjid
) seq ON seq.refobjid = c.oid
":"")."WHERE relkind IN ('r', 'm', 'v', 'f', 'p')
AND relnamespace = ".driver()->nsOid."
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return$I;}function
is_view(array$S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support(array$S){return
true;}function
fields($R){$I=array();$va=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT
	a.attname AS field,
	format_type(a.atttypid, a.atttypmod) AS full_type,
	pg_get_expr(d.adbin, d.adrelid) AS default,
	a.attnotnull::int,
	i.indrelid AS primary,
	col_description(a.attrelid, a.attnum) AS comment".(min_version(10)?",
	a.attidentity".(min_version(12)?",
	a.attgenerated":""):"")."
FROM pg_attribute a
LEFT JOIN pg_attrdef d ON a.attrelid = d.adrelid AND a.attnum = d.adnum
LEFT JOIN pg_index i ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey) AND i.indisprimary
WHERE a.attrelid = ".driver()->tableOid($R)."
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$J["full_type"],$B);list(,$U,$y,$J["length"],$oa,$Ba)=$B;$J["length"].=$Ba;$gb=$U.$oa;if(isset($va[$gb])){$J["type"]=$va[$gb];$J["full_type"]=$J["type"].$y.$Ba;}else{$J["type"]=$U;$J["full_type"]=$J["type"].$y.$oa.$Ba;}if(in_array($J['attidentity'],array('a','d')))$J['default']='GENERATED '.($J['attidentity']=='d'?'BY DEFAULT':'ALWAYS').' AS IDENTITY';$J["generated"]=idx(array("s"=>"STORED","v"=>"VIRTUAL"),$J["attgenerated"],"");$J["null"]=!$J["attnotnull"];$J["auto_increment"]=$J['attidentity']||preg_match('~^nextval\(~i',$J["default"])||preg_match('~^unique_rowid\(~',$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1,"where"=>1,"order"=>1);if(!$J['generated']&&preg_match('~(.+)::[^,)]+(.*)~',$J["default"],$B))$J["default"]=($B[1]=="NULL"?null:idf_unescape($B[1]).$B[2]);$I[$J["field"]]=$J;}return$I;}function
indexes($R,$g=null){$g=connection($g);$I=array();$ck=driver()->tableOid($R);$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $ck AND attnum > 0",$g);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption, amname,
	pg_get_expr(indpred, indrelid, true) AS partial, pg_get_expr(indexprs, indrelid) AS indexpr".($g->flavor=='cockroach'?"":",
	(SELECT string_agg(CASE WHEN opcdefault THEN '' ELSE opcname END, ' ' ORDER BY s)
		FROM generate_subscripts(indclass, 1) AS s JOIN pg_catalog.pg_opclass ON pg_opclass.oid = indclass[s]) AS opclasses")."
FROM pg_index
JOIN pg_class ON indexrelid = oid
JOIN pg_am ON pg_am.oid = pg_class.relam
WHERE indrelid = $ck
ORDER BY indisprimary DESC, indisunique DESC",$g)as$J){$Ii=$J["relname"];$I[$Ii]["type"]=($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX"));$I[$Ii]["columns"]=array();$I[$Ii]["descs"]=array();$I[$Ii]["algorithm"]=$J["amname"];$I[$Ii]["partial"]=$J["partial"];$Me=preg_split('~(?<=\)), (?=\()~',$J["indexpr"]);foreach(explode(" ",$J["indkey"])as$Ne)$I[$Ii]["columns"][]=($Ne?$e[$Ne]:array_shift($Me));foreach(explode(" ",$J["indoption"])as$Oe)$I[$Ii]["descs"][]=(intval($Oe)&1?'1':null);$I[$Ii]["opclasses"]=($J["opclasses"]!=""?explode(" ",$J["opclasses"]):array());$I[$Ii]["lengths"]=array();}return$I;}function
foreign_keys($R){$I=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, condeferred::int AS deferred, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = ".driver()->tableOid($R)."
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){$J['deferrable']=($J['deferrable']?'':'NOT ').'DEFERRABLE'.($J['deferred']?' INITIALLY DEFERRED':'');if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$B)){$J['source']=array_map('Adminer\idf_unescape',array_map('trim',explode(',',$B[1])));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$Qf)){$J['ns']=idf_unescape($Qf[2]);$J['table']=idf_unescape($Qf[4]);}$J['target']=array_map('Adminer\idf_unescape',array_map('trim',explode(',',$B[3])));$J['on_delete']=(preg_match("~ON DELETE (".driver()->onActions.")~",$B[4],$Qf)?$Qf[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE (".driver()->onActions.")~",$B[4],$Qf)?$Qf[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($C){return
array("select"=>trim(get_val("SELECT pg_get_viewdef(".driver()->tableOid($C).")")));}function
collations(){return
array();}function
information_schema($j,$L=""){return
in_array($L!=""?$L:get_schema(),array("information_schema","pg_catalog","pg_toast"));}function
error(){$I=h(connection()->error);if(preg_match('~^(.*\n)?([^\n]*)\n( *)\^(\n.*)?$~s',$I,$B))$I=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\1<b>\2</b>',$B[2]).$B[4];return
nl_br($I);}function
create_database($j,$rb){return
queries("CREATE DATABASE ".idf_escape($j).($rb?" ENCODING ".idf_escape($rb):""));}function
drop_databases(array$i){connection()->close();return
apply_queries("DROP DATABASE",$i,'Adminer\idf_escape');}function
rename_database($C,$rb){connection()->close();return!!queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,array$n,array$Jd,$wb,$Rc,$rb,$Ga,$Ph){$b=array();$ui=array();if($R!=""&&$R!=$C)$ui[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);$kj="";foreach($n
as$m){$d=idf_escape($m[0]);$X=$m[1];if(!$X)$b[]="DROP $d";else{$ql=$X[5];unset($X[5]);if($m[0]==""){if(isset($X[6]))$X[1]=($X[1]==" bigint"?" big":($X[1]==" smallint"?" small":" "))."serial";$b[]=($R!=""?"ADD ":"  ").implode($X);if(isset($X[6]))$b[]=($R!=""?"ADD":" ")." PRIMARY KEY ($X[0])";}else{if($d!=$X[0])$ui[]="ALTER TABLE ".table($C)." RENAME $d TO $X[0]";$b[]="ALTER $d TYPE$X[1]";$lj=$R."_".idf_unescape($X[0])."_seq";$b[]="ALTER $d ".($X[3]?"SET".preg_replace('~GENERATED ALWAYS(.*) (STORED|VIRTUAL)~','EXPRESSION\1',$X[3]):(isset($X[6])?"SET DEFAULT nextval(".q($lj).")":"DROP DEFAULT"));if(isset($X[6]))$kj="CREATE SEQUENCE IF NOT EXISTS ".idf_escape($lj)." OWNED BY ".idf_escape($R).".$X[0]";$b[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}if($m[0]!=""||$ql!="")$ui[]="COMMENT ON COLUMN ".table($C).".$X[0] IS ".($ql!=""?substr($ql,9):"''");}}$b=array_merge($b,$Jd);if($R==""){$P="";if($Ph){$nb=(connection()->flavor=='cockroach');$P=" PARTITION BY $Ph[partition_by]($Ph[partition])";if($Ph["partition_by"]=='HASH'){$Qh=+$Ph["partitions"];for($s=0;$s<$Qh;$s++)$ui[]="CREATE TABLE ".idf_escape($C."_$s")." PARTITION OF ".idf_escape($C)." FOR VALUES WITH (MODULUS $Qh, REMAINDER $s)";}else{$ki="MINVALUE";foreach($Ph["partition_names"]as$s=>$X){$Y=$Ph["partition_values"][$s];$Lh=" VALUES ".($Ph["partition_by"]=='LIST'?"IN ($Y)":"FROM ($ki) TO ($Y)");if($nb)$P
.=($s?",":" (")."\n  PARTITION ".(preg_match('~^DEFAULT$~i',$X)?$X:idf_escape($X))."$Lh";else$ui[]="CREATE TABLE ".idf_escape($C."_$X")." PARTITION OF ".idf_escape($C)." FOR$Lh";$ki=$Y;}$P
.=($nb?"\n)":"");}}array_unshift($ui,"CREATE TABLE ".table($C)." (\n".implode(",\n",$b)."\n)$P");}elseif($b)array_unshift($ui,"ALTER TABLE ".table($R)."\n".implode(",\n",$b));if($kj)array_unshift($ui,$kj);if($wb!==null)$ui[]="COMMENT ON TABLE ".table($C)." IS ".q($wb);foreach($ui
as$G){if(!queries($G))return
false;}if($Ga!=""){foreach(fields($C)as$sd=>$m){if($m["auto_increment"])return!!queries("SELECT setval(pg_get_serial_sequence(".q(table($C)).", ".q($sd)."), $Ga)");}}return
true;}function
alter_indexes($R,$b){$h=array();$Dc=array();$ui=array();foreach($b
as$X){if($X[0]!="INDEX")$h[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Dc[]=idf_escape($X[1]);else$ui[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R).($X[3]?" USING $X[3]":"")." (".implode(", ",$X[2]).")".($X[4]?" WHERE $X[4]":"");}if($h)array_unshift($ui,"ALTER TABLE ".table($R).implode(",",$h));if($Dc)array_unshift($ui,"DROP INDEX ".implode(", ",$Dc));foreach($ui
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables(array$T){return!!queries("TRUNCATE ".implode(", ",array_map('Adminer\table',$T)));}function
drop_kinds(array$T){$I=array("MATERIALIZED VIEW"=>array(),"VIEW"=>array(),"TABLE"=>array());foreach($T
as$C=>$S)$I[strtoupper($S["Engine"])][]=idf_escape($S["nspname"]).".".table($C);return
array_filter($I);}function
drop_views(array$xl){return
drop_tables($xl);}function
drop_tables(array$T){$Nj=array();foreach($T
as$R)$Nj[$R]=table_status1($R);foreach(drop_kinds($Nj)as$rf=>$_g){if(!queries("DROP $rf ".implode(", ",$_g)))return
false;}return
true;}function
move_tables(array$T,array$xl,$kk){foreach(array_merge($T,$xl)as$R){$P=table_status1($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($kk)))return
false;}return
true;}function
trigger($C,$R){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$e=array();$Z="WHERE trigger_schema = current_schema() AND event_object_table = ".q($R)." AND trigger_name = ".q($C);foreach(get_rows("SELECT * FROM information_schema.triggered_update_columns $Z")as$J)$e[]=$J["event_object_column"];$I=array();foreach(get_rows('SELECT trigger_name AS "Trigger", action_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement"
FROM information_schema.triggers'."
$Z
ORDER BY event_manipulation DESC")as$J){if($e&&$J["Event"]=="UPDATE")$J["Event"].=" OF";$J["Of"]=implode(", ",$e);if($I)$J["Event"].=" OR $I[Event]";$I=$J;}return$I;}function
triggers($R){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE trigger_schema = current_schema() AND event_object_table = ".q($R))as$J){$Ik=trigger($J["trigger_name"],$R);$I[$Ik["Trigger"]]=array($Ik["Timing"],$Ik["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE","INSERT OR UPDATE","INSERT OR UPDATE OF","DELETE OR INSERT","DELETE OR UPDATE","DELETE OR UPDATE OF","DELETE OR INSERT OR UPDATE","DELETE OR INSERT OR UPDATE OF",),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($C,$U){$K=get_rows('SELECT routine_definition AS definition, LOWER(external_language) AS language, *
FROM information_schema.routines
WHERE routine_schema = current_schema() AND specific_name = '.q($C));$I=idx($K,0,array());$I["returns"]=array("type"=>preg_replace('~^_(.*)~','\1[]',"$I[type_udt_name]"));$I["fields"]=get_rows("SELECT COALESCE(parameter_name, ordinal_position::text) AS field,
	CASE data_type WHEN 'USER-DEFINED' THEN udt_name WHEN 'ARRAY' THEN substr(udt_name, 2) || '[]' ELSE data_type END AS type,
	character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = ".q($C)."
ORDER BY ordinal_position");return$I;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()'.(connection()->flavor=='cockroach'?'':"
AND substring(specific_name, '[0-9]+\$')::oid NOT IN (SELECT objid FROM pg_catalog.pg_depend WHERE classid = 'pg_proc'::regclass AND deptype = 'e')").'
ORDER BY SPECIFIC_NAME');}function
routine_languages(){return
get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language");}function
routine_id($C,array$J){$I=array();foreach($J["fields"]as$m){$y=$m["length"];$I[]=$m["type"].($y?"($y)":"");}return
idf_escape($C)."(".implode(", ",$I).")";}function
last_id($H){$J=(is_object($H)?$H->fetch_row():array());return($J?$J[0]:0);}function
explain(Db$f,$G){return$f->query("EXPLAIN $G");}function
found_rows(array$S,array$Z){if(preg_match("~ rows=([0-9]+)~",get_val("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Hi))return$Hi[1];}function
types($ld=false){$nb=connection()->flavor=='cockroach';$sf=($nb?"'e'":"'b','c','d','e'".(min_version(9.2)?",'r'":""));return
get_key_vals("SELECT t.oid, t.typname
FROM pg_type t
WHERE t.typnamespace = ".driver()->nsOid."
AND t.typtype IN ($sf)".($nb?"
AND t.typelem = 0":"
AND (t.typrelid = 0 OR (SELECT c.relkind FROM pg_class c WHERE c.oid = t.typrelid) = 'c')"."
AND NOT EXISTS (SELECT 1 FROM pg_type e WHERE e.typarray = t.oid)".($ld?'':"
AND t.oid NOT IN (SELECT objid FROM pg_catalog.pg_depend WHERE classid = 'pg_type'::regclass AND deptype = 'e')"))."
ORDER BY t.typname");}function
type_values($t){$Vc=get_vals("SELECT enumlabel FROM pg_enum WHERE enumtypid = $t ORDER BY enumsortorder");return($Vc?"'".implode("', '",array_map('addslashes',$Vc))."'":"");}function
collation_name($Vg){return(min_version(9.1)?"(SELECT collname FROM pg_collation WHERE oid = $Vg AND collname != 'default')":"NULL");}function
type_definition($t){$U=first(get_rows("SELECT typtype, typisdefined::int AS defined, typrelid FROM pg_type WHERE oid = $t"));$I=array("kind"=>($U?$U["typtype"]:""),"definition"=>"");if(!$U||!$U["defined"])return$I;switch($I["kind"]){case'e':$sl=get_vals("SELECT enumlabel FROM pg_enum WHERE enumtypid = $t ORDER BY enumsortorder");$I["definition"]="AS ENUM (".implode(", ",array_map('Adminer\q',$sl)).")";break;case'c':$e=array();foreach(get_rows("SELECT attname, format_type(atttypid, atttypmod) AS full_type, ".collation_name("attcollation")." AS collation
FROM pg_attribute
WHERE attrelid = $U[typrelid] AND attnum > 0 AND NOT attisdropped
ORDER BY attnum")as$J)$e[]=idf_escape($J["attname"])." $J[full_type]".($J["collation"]?" COLLATE ".idf_escape($J["collation"]):"");$I["definition"]="AS (\n\t".implode(",\n\t",$e)."\n)";break;case'd':$Ac=first(get_rows("SELECT format_type(typbasetype, typtypmod) AS base, typnotnull::int AS notnull, typdefault, ".collation_name("typcollation")." AS collation
FROM pg_type WHERE oid = $t"));$I["definition"]="AS $Ac[base]".($Ac["collation"]?" COLLATE ".idf_escape($Ac["collation"]):"").($Ac["typdefault"]!=""?" DEFAULT $Ac[typdefault]":"").($Ac["notnull"]?" NOT NULL":"");foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition FROM pg_constraint WHERE contypid = $t AND contype != 'n' ORDER BY conname")as$J)$I["definition"].=" CONSTRAINT ".idf_escape($J["conname"])." $J[definition]";break;case'r':$yi=first(get_rows("SELECT format_type(rngsubtype, NULL) AS subtype,
(SELECT opcname FROM pg_opclass WHERE oid = rngsubopc) AS subtype_opclass,
".collation_name("rngcollation")." AS collation,
NULLIF(rngcanonical, 0)::regproc::text AS canonical,
NULLIF(rngsubdiff, 0)::regproc::text AS subtype_diff".(min_version(14)?",
(SELECT typname FROM pg_type WHERE oid = rngmultitypid) AS multirange_type_name":"")."
FROM pg_range WHERE rngtypid = $t"));$mh=array();foreach(array("subtype"=>0,"subtype_opclass"=>1,"collation"=>1,"canonical"=>0,"subtype_diff"=>0,"multirange_type_name"=>1)as$x=>$Zc){if($yi[$x]!="")$mh[]=strtoupper($x)." = ".($Zc?idf_escape($yi[$x]):$yi[$x]);}$I["definition"]="AS RANGE (".implode(", ",$mh).")";}return$I;}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){return(string)get_val("SELECT current_schema()");}function
set_schema($L,$g=null){$I=connection($g)->query("SET search_path TO ".idf_escape($L));driver()->setUserTypes(types(true));return!!$I;}function
drop_sql(array$T){$I="";foreach(drop_kinds($T)as$rf=>$_g)$I
.="DROP $rf IF EXISTS ".implode(", ",$_g).";\n";return($I?"$I\n":"");}function
foreign_keys_sql($R){$I="";$P=table_status1($R);$Kg=idf_escape($P['nspname']);$Fd=foreign_keys($R);ksort($Fd);foreach($Fd
as$Ed=>$Dd)$I
.="ALTER TABLE ONLY $Kg.".idf_escape($P['Name'])." ADD CONSTRAINT ".idf_escape($Ed)." ".preg_replace('~( REFERENCES )([^(.]+\()~',"\\1$Kg.\\2",$Dd["definition"]).";\n";return($I?"$I\n":$I);}function
indexes_sql($R,$li=""){$I="";$G="SELECT indexdef FROM pg_catalog.pg_indexes WHERE schemaname = current_schema() AND tablename = ".q($R).($li!=""?" AND indexname != ".q($li):"");foreach(get_rows($G,null,"-- ")as$J)$I
.="\n\n$J[indexdef];";return$I;}function
create_sql($R,$Ga,$Qj){$Oi=array();$nj=array();$oj=array();$mj=array();$P=table_status1($R);$Kg=idf_escape($P['nspname']);if(is_view($P)){$wl=view($R);$h="CREATE ".strtoupper($P["Engine"])." $Kg.".idf_escape($R)." AS ".rtrim($wl["select"],";").";";return
rtrim($h.indexes_sql($R),';');}$n=fields($R);if(count($P)<2||empty($n))return"";$I="CREATE TABLE $Kg.".idf_escape($P['Name'])." (\n    ";$ak=q("$Kg.".idf_escape($P['Name']));foreach($n
as$m){$pj="";if($m['default']=="nextval('$P[Name]_$m[field]_seq')"){$pj="$Kg.".idf_escape("$P[Name]_$m[field]_seq");$m['default']=null;$m['full_type']=preg_replace('~int(eger)?~','serial',$m['full_type']);}$Jh=idf_escape($m['field']).' '.$m['full_type'].preg_replace('~(nextval\(\')([^.\']+\')~','\1'.str_replace("'","''",$P['nspname']).'.\2',default_value($m)).($m['null']?"":" NOT NULL");$Oi[]=$Jh;if(preg_match('~nextval\(\'([^\']+)\'\)~',$m['default'],$Rf)){$lj=$Rf[1];$Ej=first(get_rows((min_version(10)?"SELECT *, cache_size AS cache_value FROM pg_sequences WHERE schemaname = current_schema() AND sequencename = ".q(idf_unescape($lj)):"SELECT * FROM $lj"),null,"-- "));$nj[]=($Qj=="DROP+CREATE"?"DROP SEQUENCE IF EXISTS $Kg.$lj;\n":"")."CREATE SEQUENCE $Kg.$lj INCREMENT $Ej[increment_by] MINVALUE $Ej[min_value] MAXVALUE $Ej[max_value]"." CACHE $Ej[cache_value];";if(get_val("SELECT pg_get_serial_sequence($ak, ".q($m['field']).")"))$oj[]="\n\nALTER SEQUENCE $Kg.$lj OWNED BY $Kg.".idf_escape($P['Name']).".".idf_escape($m['field']).";";if($Ga)$mj[]="$Kg.$lj";}elseif($Ga&&$m['auto_increment'])$mj[]=($pj?:get_val("SELECT pg_get_serial_sequence($ak, ".q($m['field']).")"));}if(!empty($nj))$I=implode("\n\n",$nj)."\n\n$I";$li="";foreach(indexes($R)as$Ke=>$v){if($v['type']=='PRIMARY'){$li=$Ke;$Oi[]="CONSTRAINT ".idf_escape($Ke)." PRIMARY KEY (".implode(', ',array_map('Adminer\idf_escape',$v['columns'])).")";}}foreach(driver()->checkConstraints($R)as$Db=>$Fb)$Oi[]="CONSTRAINT ".idf_escape($Db)." CHECK ($Fb)";$I
.=implode(",\n    ",$Oi)."\n)";$Lh=driver()->partitionsInfo($P['Name']);if($Lh)$I
.="\nPARTITION BY $Lh[partition_by]($Lh[partition])";$I
.="\nWITH (oids = ".($P['Oid']?'true':'false').");";$I
.=implode($oj);if($P['Comment'])$I
.="\n\nCOMMENT ON TABLE $Kg.".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($n
as$sd=>$m){if($m['comment'])$I
.="\n\nCOMMENT ON COLUMN $Kg.".idf_escape($P['Name']).".".idf_escape($sd)." IS ".q($m['comment']).";";}$I
.=indexes_sql($R,$li);foreach(array_filter($mj)as$kj){$Ej=first(get_rows("SELECT last_value, is_called::int FROM $kj",null,"-- "));if($Ej['is_called'])$I
.="\n\nDO \$\$ BEGIN PERFORM setval(".q($kj).", $Ej[last_value]); END \$\$;";}return
rtrim($I,';');}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
truncate_all_sql(array$T){return($T?"TRUNCATE ".implode(", ",array_map('Adminer\table',$T)).";\n\n":"");}function
trigger_sql($R){$P=table_status1($R);$I="";foreach(triggers($R)as$Hk=>$Gk){$Ik=trigger($Hk,$P['Name']);$I
.="\nCREATE TRIGGER ".idf_escape($Ik['Trigger'])." $Ik[Timing] $Ik[Event] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Ik[Type] $Ik[Statement];;\n";}return$I;}function
use_sql($bc,$Qj=""){$C=idf_escape($bc);$I="";if(preg_match('~CREATE~',$Qj)){if($Qj=="DROP+CREATE")$I="DROP DATABASE IF EXISTS $C;\n";$I
.="CREATE DATABASE $C;\n";}return"$I\\connect $C";}function
show_variables(){return
get_rows("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
convert_field(array$m){}function
unconvert_field(array$m,$I){return$I;}function
support($qd){return
preg_match('~^(check|columns|comment|database|drop_col|dump|descidx|fast_status|indexes|kill|partial_indexes|routine|scheme|sequence|sql|table'.'|transaction_ddl|trigger|type|variables|view'.(min_version(9.3)?'|materializedview':'').(min_version(11)?'|procedure':'').(connection()->flavor=='cockroach'?'':'|deferrable').(connection()->flavor=='cockroach'?'':'|processlist').')$~',$qd);}function
kill_process($t){return
queries("SELECT pg_terminate_backend(".number($t).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){return
get_val("SHOW max_connections");}}add_driver("sqlite","SQLite");if(isset($_GET["sqlite"])){define('Adminer\DRIVER',"sqlite");if(class_exists("SQLite3")&&$_GET["ext"]!="pdo"){abstract
class
SqliteDb
extends
SqlDb{var$extension="SQLite3";private$link;function
attach($o,$V,$E){$this->link=new
\SQLite3($o);$vl=$this->link->version();$this->server_info=$vl["versionString"];return'';}function
query($G,$Sk=false){$H=@$this->link->query($G);$this->error="";if(!$H){$this->errno=$this->link->lastErrorCode();$this->error=$this->link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Result($H);$this->affected_rows=$this->link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->link->escapeString($Q)."'":"x'".bin2hex($Q)."'");}}class
Result{var$num_rows;private$result,$offset=0;function
__construct($H){$this->result=$H;}function
fetch_assoc(){return$this->result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$Rk=array(1=>"integer","real","text","blob","null");$d=$this->offset++;$U=$this->result->columnType($d);return(object)array("name"=>$this->result->columnName($d),"type"=>($U==SQLITE3_TEXT?15:0),"native_type"=>$Rk[$U],"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}}}elseif(extension_loaded("pdo_sqlite")){abstract
class
SqliteDb
extends
PdoDb{var$extension="PDO_SQLite";function
attach($o,$V,$E){return$this->dsn(DRIVER.":$o","","");}function
quote($Q){return(is_utf8($Q)?parent::quote($Q):"x'".bin2hex($Q)."'");}}}if(class_exists('Adminer\SqliteDb')){class
Db
extends
SqliteDb{function
attach($o,$V,$E){parent::attach($o,$V,$E);$this->query("PRAGMA foreign_keys = 1");$this->query("PRAGMA busy_timeout = 500");return'';}function
select_db($o){$G="ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$o)?$o:dirname($_SERVER["SCRIPT_FILENAME"])."/$o")." AS a";if(is_readable($o)&&$this->query($G))return!self::attach($o,'','');return
false;}}}class
Driver
extends
SqlDriver{static$extensions=array("SQLite3","PDO_SQLite");static$jush="sqlite";protected$types=array(array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0));var$insertFunctions=array();var$editFunctions=array("integer|real|numeric"=>"+/-","text"=>"||",);var$operators=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");var$functions=array("hex","length","lower","round","unixepoch","upper");var$grouping=array("avg","count","count distinct","group_concat","max","min","sum");static
function
connect($N,$V,$E){if($E!="")return
lang(33);return
parent::connect(":memory:","","");}function
__construct(Db$f){parent::__construct($f);if(min_version(3.31,0,$f))$this->generated=array("STORED","VIRTUAL");if(min_version(3.37,0,$f))$this->types[0]["any"]=0;}function
structuredTypes(){return
array_keys($this->types[0]);}function
quoteBinary($Xi){return"x".q(bin2hex($Xi));}function
engines(){$I=array("table");if(min_version("3.8.2")){if(min_version(3.37)){$I[]="STRICT";$I[]="STRICT, WITHOUT ROWID";}$I[]="WITHOUT ROWID";}return$I;}function
insertUpdate($R,array$K,array$li){$sl=array();foreach($K
as$O)$sl[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($K))).") VALUES\n".implode(",\n",$sl));}function
tableHelp($C,$hf=false){if(preg_match('~^sqlite_(seq|stat.)~',$C,$B))return"fileformat2.html#$B[1]tab";if(preg_match('~^sqlite(_temp)?_(master|schema)$~',$C))return"schematab.html";}function
checkConstraints($R){preg_match_all('~ CHECK *(\( *(((?>[^()]*[^() ])|(?1))*) *\))~',get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R),0,$this->conn),$Rf);return
array_combine($Rf[2],$Rf[2]);}function
allFields(){$I=array();foreach(tables_list()as$R=>$U){foreach(fields($R)as$m)$I[$R][]=$m;}return$I;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
get_databases($Hd){return
array();}function
limit($G,$Z,$z,$Ug=0,$jj=" "){return" $G$Z".($z?$jj."LIMIT $z".($Ug?" OFFSET $Ug":""):"");}function
limit1($R,$G,$Z,$jj="\n"){return(preg_match('~^INTO~',$G)||get_val("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1,0,$jj):" $G WHERE rowid = (SELECT rowid FROM ".table($R).$Z.$jj."LIMIT 1)");}function
db_collation($j,array$sb){return
get_val("PRAGMA encoding");}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name LIKE 'sqlite_%'), name");}function
count_tables(array$i){return
array();}function
db_status(){$Eh=get_val("PRAGMA page_size");$Pd=get_val("PRAGMA freelist_count")*$Eh;return
array("Data_length"=>get_val("PRAGMA page_count")*$Eh-$Pd,"Index_length"=>0,"Data_free"=>$Pd,);}function
table_status($C="",$pd=false){$I=array();$K=array();if(!$pd&&$C==""){connection()->query("PRAGMA optimize = 0x10002");$K=get_key_vals("SELECT tbl, MAX(CAST(stat AS integer)) FROM sqlite_stat1 GROUP BY tbl");}foreach(get_rows("SELECT name AS Name, type AS Engine, sql, 'rowid' AS Oid, '' AS Auto_increment FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY (name LIKE 'sqlite_%'), name"))as$J){if($J["Engine"]=="table"){$Sj=preg_replace('~.*\)~s','',$J["sql"]);$J["Engine"]=implode(", ",array_filter(array((preg_match('~\bSTRICT\b~i',$Sj)?"STRICT":0),(preg_match('~\bWITHOUT\s+ROWID\b~i',$Sj)?"WITHOUT ROWID":0),)))?:"table";}unset($J["sql"]);$J["Rows"]=idx($K,$J["Name"],0);$I[$J["Name"]]=$J;}if(!$pd){foreach(get_rows("SELECT * FROM sqlite_sequence".($C!=""?" WHERE name = ".q($C):""),null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];}return$I;}function
is_view(array$S){return$S["Engine"]=="view";}function
fk_support(array$S){return!get_val("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){$I=array();$Fj=get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));$qi=array("select"=>1,"where"=>1,"order"=>1);if(!preg_match('~^sqlite(_temp)?_(master|schema)$~',$R))$qi+=array("insert"=>1,"update"=>1);foreach(get_rows("PRAGMA table_".(min_version(3.31)?"x":"")."info(".table($R).")")as$J){$C=$J["name"];$U=strtolower($J["type"]);$k=$J["dflt_value"];$I[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":(preg_match('~any~i',$U)?"any":"numeric"))))),"full_type"=>$U,"default"=>(preg_match("~^'(.*)'$~",$k,$B)?str_replace("''","'",$B[1]):($k=="NULL"?null:$k)),"null"=>!$J["notnull"],"privileges"=>$qi,"primary"=>$J["pk"],);if($J["pk"]&&preg_match('~\bAUTOINCREMENT\b~i',$Fj))$I[$C]["auto_increment"]=true;}$u='(("[^"]*+")+|[a-z0-9_]+)';preg_match_all('~'.$u.'\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Fj,$Rf,PREG_SET_ORDER);foreach($Rf
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($I[$C])$I[$C]["collation"]=trim($B[3],"'");}preg_match_all('~'.$u.'\s.*GENERATED ALWAYS AS \((.+)\) (STORED|VIRTUAL)~i',$Fj,$Rf,PREG_SET_ORDER);foreach($Rf
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));$I[$C]["default"]=$B[3];$I[$C]["generated"]=strtoupper($B[4]);}return$I;}function
indexes($R,$g=null){$g=connection($g);$I=array();$Fj=get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R),0,$g);if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*"|`[^`]*`)++)~i',$Fj,$B)){$I[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+|(?:`[^`]*+`)+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$Rf,PREG_SET_ORDER);foreach($Rf
as$B){$I[""]["columns"][]=idf_unescape($B[2]).$B[4];$I[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$I){foreach(fields($R)as$C=>$m){if($m["primary"])$I[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Kj=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$g);foreach(get_rows("PRAGMA index_list(".table($R).")",$g)as$J){$C=$J["name"];$v=array("type"=>($J["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$g)as$Wi){$v["columns"][]=$Wi["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Kj[$C],$Hi)){preg_match_all('/("[^"]*+")+( DESC)?/',$Hi[2],$Rf);foreach($Rf[2]as$x=>$X){if($X)$v["descs"][$x]='1';}}if(!$I[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$I[""]["columns"]||$v["descs"]!=$I[""]["descs"]||!preg_match("~^sqlite_~",$C))$I[$C]=$v;}return$I;}function
foreign_keys($R){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$J){$p=&$I[$J["id"]];if(!$p)$p=$J;$p["source"][]=$J["from"];$p["target"][]=$J["to"];}return$I;}function
view($C){return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\s+~iU','',get_val("SELECT sql FROM sqlite_master WHERE type = 'view' AND name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j,$L=""){return
false;}function
error(){return
h(connection()->error);}function
check_sqlite_name($C){$ld="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($ld)\$~",$C)){connection()->error=lang(34,str_replace("|",", ",$ld));return
false;}return
true;}function
create_database($j,$rb){if(file_exists($j)){connection()->error=lang(35);return
false;}if(!check_sqlite_name($j))return
false;try{$_=new
Db();$_->attach($j,'','');}catch(\Exception$cd){connection()->error=$cd->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases(array$i){connection()->attach(":memory:",'','');foreach($i
as$j){if(!check_sqlite_name($j))return
false;if(!@unlink($j)){connection()->error=lang(35);return
false;}}return
true;}function
rename_database($C,$rb){if(!check_sqlite_name($C))return
false;connection()->attach(":memory:",'','');connection()->error=lang(35);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY AUTOINCREMENT";}function
alter_table($R,$C,array$n,array$Jd,$wb,$Rc,$rb,$Ga,$Ph){$gl=($R==""||$Jd||$Rc);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$gl=true;break;}}$b=array();$zh=array();foreach($n
as$m){if($m[1]){$b[]=($gl?$m[1]:"ADD ".implode($m[1]));if($m[0]!="")$zh[$m[0]]=$m[1][0];}}if(!$gl){foreach($b
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$b,$zh,$Jd,$Ga,array(),"","",$Rc))return
false;if($Ga){queries("BEGIN");queries("UPDATE sqlite_sequence SET seq = $Ga WHERE name = ".q($C));if(!connection()->affected_rows)queries("INSERT INTO sqlite_sequence (name, seq) VALUES (".q($C).", $Ga)");queries("COMMIT");}return
true;}function
recreate_table($R,$C,array$n,array$zh,array$Jd,$Ga="",$w=array(),$Ec="",$na="",$Rc=""){if($R!=""){if(!$n){foreach(fields($R)as$x=>$m){if($w)$m["auto_increment"]=0;$n[]=process_field($m,$m);$zh[$x]=idf_escape($x);}}$mi=false;foreach($n
as$m){if($m[6])$mi=true;}$Gc=array();foreach($w
as$x=>$X){if($X[2]=="DROP"){$Gc[$X[1]]=true;unset($w[$x]);}}foreach(indexes($R)as$nf=>$v){$e=array();foreach($v["columns"]as$x=>$d){if(!$zh[$d])continue
2;$e[]=$zh[$d].($v["descs"][$x]?" DESC":"");}if(!$Gc[$nf]){if($v["type"]!="PRIMARY"||!$mi)$w[]=array($v["type"],$nf,$e);}}foreach($w
as$x=>$X){if($X[0]=="PRIMARY"){unset($w[$x]);$Jd[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$nf=>$p){foreach($p["source"]as$x=>$d){if(!$zh[$d])continue
2;$p["source"][$x]=idf_unescape($zh[$d]);}if(!isset($Jd[" $nf"]))$Jd[]=" ".format_foreign_key($p);}queries("BEGIN");}$bb=array();foreach($n
as$m){if(preg_match('~GENERATED~',$m[3]))unset($zh[array_search($m[0],$zh)]);$bb[]="  ".implode($m);}$bb=array_merge($bb,array_filter($Jd));foreach(driver()->checkConstraints($R)as$eb){if($eb!=$Ec)$bb[]="  CHECK ($eb)";}if($na)$bb[]="  CHECK ($na)";$mk=($R!=""&&$R==$C?"adminer_$C":$C);if(!$Rc&&$R!="")$Rc=idx(table_status1($R),"Engine");if(!queries("CREATE TABLE ".table($mk)." (\n".implode(",\n",$bb)."\n)".($Rc!="table"&&in_array($Rc,driver()->engines())?" $Rc":"")))return
false;if($R!=""){if($zh&&!queries("INSERT INTO ".table($mk)." (".implode(", ",$zh).") SELECT ".implode(", ",array_map('Adminer\idf_escape',array_keys($zh)))." FROM ".table($R)))return
false;$Mk=array();foreach(triggers($R)as$Kk=>$tk){$Ik=trigger($Kk,$R);$Mk[]="CREATE TRIGGER ".idf_escape($Kk)." ".implode(" ",$tk)." ON ".table($C)."\n$Ik[Statement]";}$Ga=$Ga?"":get_val("SELECT seq FROM sqlite_sequence WHERE name = ".q($R));if(!queries("DROP TABLE ".table($R))||($R==$C&&!queries("ALTER TABLE ".table($mk)." RENAME TO ".table($C)))||!alter_indexes($C,$w))return
false;if($Ga)queries("UPDATE sqlite_sequence SET seq = $Ga WHERE name = ".q($C));foreach($Mk
as$Ik){if(!queries($Ik))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$b){foreach($b
as$li){if($li[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),"",$b);}foreach(array_reverse($b)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables(array$T){return
apply_queries("DELETE FROM",$T);}function
drop_views(array$xl){return
apply_queries("DROP VIEW",$xl);}function
drop_tables(array$T){return
apply_queries("DROP TABLE",$T);}function
move_tables(array$T,array$xl,$kk){return
false;}function
trigger($C,$R){if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\s]+|`[^`]*`|"[^"]*")+';$Lk=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Lk["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",get_val("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Qg=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Qg?" OF":""),"Of"=>idf_unescape($Qg),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$I=array();$Lk=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$J){preg_match('~^CREATE\s+TRIGGER\s*(?:[^`"\s]+|`[^`]*`|"[^"]*")+\s*('.implode("|",$Lk["Timing"]).')\s*(.*?)\s+ON\b~i',$J["sql"],$B);$I[$J["name"]]=array($B[1],$B[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
last_id($H){return
get_val("SELECT LAST_INSERT_ROWID()");}function
explain(Db$f,$G){return$f->query("EXPLAIN QUERY PLAN $G");}function
found_rows(array$S,array$Z){}function
types($ld=false){return
array();}function
create_sql($R,$Ga,$Qj){$I=get_val("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$I
.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('Adminer\idf_escape',$v['columns'])).")");}return$I;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($bc,$Qj=""){return"";}function
trigger_sql($R){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){$I=array();foreach(get_rows("PRAGMA pragma_list")as$J){$C=$J["name"];if($C!="pragma_list"&&$C!="compile_options"){$I[$C]=array($C,'');foreach(get_rows("PRAGMA $C")as$J)$I[$C][1].=implode(", ",$J)."\n";}}return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$lh)$I[]=explode("=",$lh,2)+array('','');return$I;}function
convert_field(array$m){}function
unconvert_field(array$m,$I){return$I;}function
support($qd){return
preg_match('~^(check|columns|database|drop_col|dump|indexes|descidx|move_col|sql|status|table|transaction_ddl|trigger|variables|view|view_trigger)$~',$qd);}}add_driver("mssql","MS SQL");if(isset($_GET["mssql"])){define('Adminer\DRIVER',"mssql");if(extension_loaded("sqlsrv")&&$_GET["ext"]!="pdo"){class
Db
extends
SqlDb{var$extension="sqlsrv";private$link,$result;private
function
get_error(){$this->error="";foreach(sqlsrv_errors()as$l){$this->errno=$l["code"];$this->error
.="$l[message]\n";}$this->error=rtrim($this->error);}function
attach($N,$V,$E){$Eb=array("UID"=>$V,"PWD"=>$E,"CharacterSet"=>"UTF-8");$Lj=adminer()->connectSsl();if(isset($Lj["Encrypt"]))$Eb["Encrypt"]=$Lj["Encrypt"];if(isset($Lj["TrustServerCertificate"]))$Eb["TrustServerCertificate"]=$Lj["TrustServerCertificate"];$j=adminer()->database();if($j!="")$Eb["Database"]=$j;list($ue,$bi)=host_port($N);$this->link=@sqlsrv_connect($ue.($bi?",$bi":""),$Eb);if($this->link){$Pe=sqlsrv_server_info($this->link);$this->server_info=$Pe['SQLServerVersion'];}else$this->get_error();return($this->link?'':$this->error);}function
quote($Q){$Tk=strlen($Q)!=strlen(utf8_decode($Q));return($Tk?"N":"")."'".str_replace("'","''",$Q)."'";}function
select_db($bc){return$this->query(use_sql($bc));}function
query($G,$Sk=false){$H=sqlsrv_query($this->link,$G);$this->error="";if(!$H){$this->get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->result=sqlsrv_query($this->link,$G);$this->error="";if(!$this->result){$this->get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->result;if(!$H)return
false;if(sqlsrv_field_metadata($H))return
new
Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return$this->result?!!sqlsrv_next_result($this->result):false;}}class
Result{var$num_rows;private$result,$offset=0,$fields;function
__construct($H){$this->result=$H;}private
function
convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'DateTime'))$J[$x]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->convert(sqlsrv_fetch_array($this->result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->convert(sqlsrv_fetch_array($this->result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->fields)$this->fields=sqlsrv_field_metadata($this->result);$m=$this->fields[$this->offset++];$I=new
\stdClass;$I->name=$m["Name"];$I->type=($m["Type"]==1?254:15);$I->charsetnr=(in_array($m["Type"],array(-2,-3,-4))?63:0);return$I;}function
seek($Ug){for($s=0;$s<$Ug;$s++)sqlsrv_fetch($this->result);}}function
last_id($H){return(string)get_val("SELECT SCOPE_IDENTITY()");}function
explain(Db$f,$G){$f->query("SET SHOWPLAN_ALL ON");$I=$f->query($G);$f->query("SET SHOWPLAN_ALL OFF");return$I;}}else{abstract
class
MssqlDb
extends
PdoDb{function
select_db($bc){return$this->query(use_sql($bc));}function
lastInsertId(){return$this->pdo->lastInsertId();}}function
last_id($H){return
connection()->lastInsertId();}function
explain(Db$f,$G){}if(extension_loaded("pdo_sqlsrv")){class
Db
extends
MssqlDb{var$extension="PDO_SQLSRV";function
attach($N,$V,$E){list($ue,$bi)=host_port($N);return$this->dsn("sqlsrv:Server=$ue".($bi?",$bi":""),$V,$E);}}}elseif(extension_loaded("pdo_dblib")){class
Db
extends
MssqlDb{var$extension="PDO_DBLIB";function
attach($N,$V,$E){list($ue,$bi)=host_port($N);return$this->dsn("dblib:charset=utf8;host=$ue".($bi?(is_numeric($bi)?";port=":";unix_socket=").$bi:""),$V,$E);}}}}class
Driver
extends
SqlDriver{static$extensions=array("SQLSRV","PDO_SQLSRV","PDO_DBLIB");static$jush="mssql";var$insertFunctions=array("date|time"=>"getdate");var$editFunctions=array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",);var$operators=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");var$functions=array("len","lower","round","upper");var$grouping=array("avg","count","count distinct","max","min","sum");var$generated=array("PERSISTED","VIRTUAL");var$onActions="NO ACTION|CASCADE|SET NULL|SET DEFAULT";static
function
connect($N,$V,$E){if($N=="")$N="localhost:1433";return
parent::connect($N,$V,$E);}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(26)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(27)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(28)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(29)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),);}function
insertUpdate($R,array$K,array$li){$n=fields($R);$bl=array();$Z=array();$O=reset($K);$e="c".implode(", c",range(1,count($O)));$Xa=0;$Ve=array();foreach($O
as$x=>$X){$Xa++;$C=idf_unescape($x);if(!$n[$C]["auto_increment"])$Ve[$x]="c$Xa";if(isset($li[$C]))$Z[]="$x = c$Xa";else$bl[]="$x = c$Xa";}$sl=array();foreach($K
as$O)$sl[]="(".implode(", ",$O).")";if($Z){$ze=queries("SET IDENTITY_INSERT ".table($R)." ON");$I=queries("MERGE ".table($R)." USING (VALUES\n\t".implode(",\n\t",$sl)."\n) AS source ($e) ON ".implode(" AND ",$Z).($bl?"\nWHEN MATCHED THEN UPDATE SET ".implode(", ",$bl):"")."\nWHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($ze?$O:$Ve)).") VALUES (".($ze?$e:implode(", ",$Ve)).");");if($ze)queries("SET IDENTITY_INSERT ".table($R)." OFF");}else$I=queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES\n".implode(",\n",$sl));return$I;}function
begin(){return
queries("BEGIN TRANSACTION");}function
quoteBinary($Xi){return"0x".bin2hex($Xi);}function
tableHelp($C,$hf=false){$If=array("sys"=>"catalog-views/sys-","INFORMATION_SCHEMA"=>"information-schema-views/",);$_=$If[get_schema()];if($_)return"relational-databases/system-$_".preg_replace('~_~','-',strtolower($C))."-transact-sql";}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
get_databases($Hd){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($G,$Z,$z,$Ug=0,$jj=" "){return($z?" TOP (".($z+$Ug).")":"")." $G$Z";}function
limit1($R,$G,$Z,$jj="\n"){return
limit($G,$Z,1,0,$jj);}function
db_collation($j,array$sb){return
get_val("SELECT collation_name FROM sys.databases WHERE name = ".q($j));}function
logged_user(){return
get_val("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables(array$i){$I=array();foreach($i
as$j){connection()->select_db($j);$I[$j]=get_val("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($C="",$pd=false){$I=array();$yj=array();foreach(get_rows("SELECT object_id, SUM(CASE WHEN index_id < 2 THEN row_count ELSE 0 END) AS [Rows],
SUM(CASE WHEN index_id < 2 THEN used_page_count ELSE 0 END) * 8192 AS Data_length,
SUM(CASE WHEN index_id > 1 THEN used_page_count ELSE 0 END) * 8192 AS Index_length,
SUM(reserved_page_count - used_page_count) * 8192 AS Data_free
FROM sys.dm_db_partition_stats
GROUP BY object_id",null,"")as$J){$Pg=$J["object_id"];unset($J["object_id"]);$yj[$Pg]=$J;}foreach(get_rows("SELECT ao.object_id, ao.name AS Name, ao.type_desc AS Engine,
	(SELECT cast(value as varchar(max)) FROM fn_listextendedproperty(default, 'SCHEMA', schema_name(schema_id), 'TABLE', ao.name, null, null)) AS Comment
FROM sys.all_objects AS ao
WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){$Pg=$J["object_id"];unset($J["object_id"]);$I[$J["Name"]]=$J+idx($yj,$Pg,array());}return$I;}function
is_view(array$S){return$S["Engine"]=="VIEW";}function
fk_support(array$S){return
true;}function
fields($R){$yb=get_key_vals("SELECT objname, cast(value as varchar(max)) FROM fn_listextendedproperty('MS_DESCRIPTION', 'schema', ".q(get_schema()).", 'table', ".q($R).", 'column', NULL)");$I=array();$Zj=get_val("SELECT object_id FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') AND name = ".q($R));foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name,
	t.name type, d.definition [default], d.name default_constraint, i.is_primary_key
FROM sys.all_columns c
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.object_id
LEFT JOIN sys.index_columns ic ON c.object_id = ic.object_id AND c.column_id = ic.column_id
LEFT JOIN sys.indexes i ON ic.object_id = i.object_id AND ic.index_id = i.index_id
WHERE c.object_id = ".q($Zj))as$J){$U=$J["type"];$y=(preg_match("~char|binary~",$U)?intval($J["max_length"])/($U[0]=='n'?2:1):($U=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>(preg_match("~^\('(.*)'\)$~",$J["default"],$B)?str_replace("''","'",$B[1]):$J["default"]),"default_constraint"=>$J["default_constraint"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,"where"=>1,"order"=>1),"primary"=>$J["is_primary_key"],"comment"=>$yb[$J["name"]],);}foreach(get_rows("SELECT * FROM sys.computed_columns WHERE object_id = ".q($Zj))as$J){$I[$J["name"]]["generated"]=($J["is_persisted"]?"PERSISTED":"VIRTUAL");$I[$J["name"]]["default"]=$J["definition"];}return$I;}function
indexes($R,$g=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$g)as$J){$C=$J["name"];$I[$C]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$C]["lengths"]=array();$I[$C]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$C]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($C){return
array("select"=>preg_replace('~^(?:[^[]|\[[^]]*])*\s+AS\s+~isU','',get_val("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$rb)$I[preg_replace('~_.*~','',$rb)][]=$rb;return$I;}function
information_schema($j,$L=""){return
in_array($L!=""?$L:get_schema(),array("INFORMATION_SCHEMA","sys"));}function
error(){return
nl_br(h(preg_replace('~^(\[[^]]*])+~m','',connection()->error)));}function
create_database($j,$rb){return
queries("CREATE DATABASE ".idf_escape($j).(preg_match('~^[a-z0-9_]+$~i',$rb)?" COLLATE $rb":""));}function
drop_databases(array$i){return!!queries("DROP DATABASE ".implode(", ",array_map('Adminer\idf_escape',$i)));}function
rename_database($C,$rb){if(preg_match('~^[a-z0-9_]+$~i',$rb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $rb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,array$n,array$Jd,$wb,$Rc,$rb,$Ga,$Ph){$b=array();$yb=array();$vh=fields($R);foreach($n
as$m){$d=idf_escape($m[0]);$X=$m[1];if(!$X)$b["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~",'\1\2',$X[1]);$yb[$m[0]]=$X[5];unset($X[5]);if(preg_match('~ AS ~',$X[3]))unset($X[1],$X[2]);if($m[0]=="")$b["ADD"][]="\n  ".implode("",$X).($R==""?substr($Jd[$X[0]],16+strlen($X[0])):"");else{$k=$X[3];unset($X[3]);unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$b["ALTER COLUMN ".implode("",$X)][]="";$uh=$vh[$m[0]];if(default_value($uh)!=$k){if($uh["default"]!==null)$b["DROP"][]=" ".idf_escape($uh["default_constraint"]);if($k)$b["ADD"][]="\n $k FOR $d";}}}}if($R==""){$ma=(array)$b["ADD"];foreach($Jd
as$x=>$X){if(!is_string($x))$ma[]="\n$X";}return
queries("CREATE TABLE ".table($C)." (".implode(",",$ma)."\n)");}if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Jd)$b[""]=$Jd;foreach($b
as$x=>$X){if(!queries("ALTER TABLE ".table($C)." $x".implode(",",$X)))return
false;}foreach($yb
as$x=>$X){$wb=substr($X,9);queries("EXEC sp_dropextendedproperty @name = N'MS_Description', @level0type = N'Schema', @level0name = ".q(get_schema()).", @level1type = N'Table', @level1name = ".q($C).", @level2type = N'Column', @level2name = ".q($x));queries("EXEC sp_addextendedproperty
@name = N'MS_Description',
@value = $wb,
@level0type = N'Schema',
@level0name = ".q(get_schema()).",
@level1type = N'Table',
@level1name = ".q($C).",
@level2type = N'Column',
@level2name = ".q($x));}return
true;}function
alter_indexes($R,$b){$v=array();$Dc=array();foreach($b
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Dc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Dc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Dc)));}function
found_rows(array$S,array$Z){}function
foreign_keys($R){$I=array();$eh=array("CASCADE","NO ACTION","SET NULL","SET DEFAULT");foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R).", @fktable_owner = ".q(get_schema()))as$J){$p=&$I[$J["FK_NAME"]];$p["db"]=$J["PKTABLE_QUALIFIER"];$p["ns"]=$J["PKTABLE_OWNER"];$p["table"]=$J["PKTABLE_NAME"];$p["on_update"]=$eh[$J["UPDATE_RULE"]];$p["on_delete"]=$eh[$J["DELETE_RULE"]];$p["source"][]=$J["FKCOLUMN_NAME"];$p["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables(array$T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views(array$xl){return
queries("DROP VIEW ".implode(", ",array_map('Adminer\table',$xl)));}function
drop_tables(array$T){return
queries("DROP TABLE ".implode(", ",array_map('Adminer\table',$T)));}function
move_tables(array$T,array$xl,$kk){return
apply_queries("ALTER SCHEMA ".idf_escape($kk)." TRANSFER",array_merge($T,$xl));}function
trigger($C,$R){if($C=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT'
	WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE'
	WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\s+AS\s+~isU','',$I["text"]);return$I;}function
triggers($R){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT'
	WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE'
	WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){if($_GET["ns"]!="")return$_GET["ns"];return
get_val("SELECT SCHEMA_NAME()");}function
set_schema($L,$g=null){$_GET["ns"]=$L;return
true;}function
create_sql($R,$Ga,$Qj){if(is_view(table_status1($R))){$wl=view($R);return"CREATE VIEW ".table($R)." AS $wl[select]";}$n=array();$li=false;foreach(fields($R)as$C=>$m){$X=process_field($m,$m);if($X[6])$li=true;$n[]=implode("",$X);}foreach(indexes($R)as$C=>$v){if(!$li||$v["type"]!="PRIMARY"){$e=array();foreach($v["columns"]as$x=>$X)$e[]=idf_escape($X).($v["descs"][$x]?" DESC":"");$C=idf_escape($C);$n[]=($v["type"]=="INDEX"?"INDEX $C":"CONSTRAINT $C ".($v["type"]=="UNIQUE"?"UNIQUE":"PRIMARY KEY"))." (".implode(", ",$e).")";}}foreach(driver()->checkConstraints($R)as$C=>$eb)$n[]="CONSTRAINT ".idf_escape($C)." CHECK ($eb)";return"CREATE TABLE ".table($R)." (\n\t".implode(",\n\t",$n)."\n)";}function
foreign_keys_sql($R){$n=array();foreach(foreign_keys($R)as$Jd)$n[]=ltrim(format_foreign_key($Jd));return($n?"ALTER TABLE ".table($R)." ADD\n\t".implode(",\n\t",$n).";\n\n":"");}function
truncate_sql($R){return"TRUNCATE TABLE ".table($R);}function
use_sql($bc,$Qj=""){return"USE ".idf_escape($bc);}function
trigger_sql($R){$I="";foreach(triggers($R)as$C=>$Ik)$I
.=create_trigger(" ON ".table($R),trigger($C,$R)).";";return$I;}function
convert_field(array$m){}function
unconvert_field(array$m,$I){return$I;}function
support($qd){return
preg_match('~^(check|comment|columns|database|drop_col|dump|fast_status|indexes|descidx|scheme|sql|table|transaction_ddl|trigger|view|view_trigger)$~',$qd);}}add_driver("oracle","Oracle beta");if(isset($_GET["oracle"])){define('Adminer\DRIVER',"oracle");if(extension_loaded("oci8")&&$_GET["ext"]!="pdo"){class
Db
extends
SqlDb{var$extension="oci8";var$_current_db;private$link;function
_error($Wc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
attach($N,$V,$E){$this->link=@oci_new_connect($V,$E,$N,"AL32UTF8");if($this->link){$this->server_info=oci_server_version($this->link);return'';}$l=oci_error();return($l?$l["message"]:lang(25));}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($bc){$this->_current_db=$bc;return
true;}function
query($G,$Sk=false){$H=oci_parse($this->link,$G);$this->error="";if(!$H){$l=oci_error($this->link);$this->errno=$l["code"];$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Result($H);$this->affected_rows=oci_num_rows($H);oci_free_statement($H);}return$I;}function
timeout($ug){return
oci_set_call_timeout($this->link,$ug);}}class
Result{var$num_rows;private$result,$offset=1;function
__construct($H){$this->result=$H;}private
function
convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'OCILob')||is_a($X,'OCI-Lob'))$J[$x]=$X->load();}return$J;}function
fetch_assoc(){return$this->convert(oci_fetch_assoc($this->result));}function
fetch_row(){return$this->convert(oci_fetch_row($this->result));}function
fetch_field(){$d=$this->offset++;$I=new
\stdClass;$I->name=oci_field_name($this->result,$d);$U=oci_field_type($this->result,$d);$I->native_type=$U;$I->type=$U;$I->charsetnr=(preg_match("~raw|blob|bfile~",$U)?63:0);return$I;}}}elseif(extension_loaded("pdo_oci")){class
Db
extends
PdoDb{var$extension="PDO_OCI";var$_current_db;function
attach($N,$V,$E){return$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$E);}function
select_db($bc){$this->_current_db=$bc;return
true;}}}class
Driver
extends
SqlDriver{static$extensions=array("OCI8","PDO_OCI");static$jush="oracle";var$insertFunctions=array("date"=>"current_date","timestamp"=>"current_timestamp",);var$editFunctions=array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",);var$operators=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");var$functions=array("length","lower","round","upper");var$grouping=array("avg","count","count distinct","max","min","sum");function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(26)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(27)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(28)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(29)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),);}function
begin(){return
true;}function
quoteBinary($Xi){return"HEXTORAW(".q(bin2hex($Xi)).")";}function
hasCStyleEscapes(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
get_databases($Hd){return
get_vals("SELECT DISTINCT tablespace_name FROM (
SELECT tablespace_name FROM user_tablespaces
UNION SELECT tablespace_name FROM all_tables WHERE tablespace_name IS NOT NULL
)
ORDER BY 1");}function
limit($G,$Z,$z,$Ug=0,$jj=" "){return($Ug?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($z+$Ug).") WHERE rnum > $Ug":($z?" * FROM (SELECT $G$Z) WHERE rownum <= ".($z+$Ug):" $G$Z"));}function
limit1($R,$G,$Z,$jj="\n"){return" $G$Z";}function
db_collation($j,array$sb){return
get_val("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
logged_user(){return
get_val("SELECT USER FROM DUAL");}function
get_current_db(){$j=connection()->_current_db?:DB;connection()->_current_db=null;return$j;}function
where_owner($ii,$Ch="owner"){if(!$_GET["ns"])return'';return"$ii$Ch = sys_context('USERENV', 'CURRENT_SCHEMA')";}function
views_table($e){$Ch=where_owner('');return"(SELECT $e FROM all_views WHERE ".($Ch?:"rownum < 0").")";}function
tables_list(){$wl=views_table("view_name");$Ch=where_owner(" AND ");return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."$Ch
UNION SELECT view_name, 'view' FROM $wl
ORDER BY 1");}function
count_tables(array$i){$I=array();foreach($i
as$j)$I[$j]=get_val("SELECT COUNT(*) FROM all_tables WHERE tablespace_name = ".q($j));return$I;}function
table_status($C="",$pd=false){$I=array();$cj=q($C);$j=get_current_db();$wl=views_table("view_name");$Ch=where_owner(" AND ","t.owner");foreach(get_rows('SELECT t.table_name "Name", \'table\' "Engine", s.bytes "Data_length", i.bytes "Index_length", t.num_rows "Rows"
FROM all_tables t
LEFT JOIN (SELECT segment_name, SUM(bytes) bytes FROM user_segments WHERE segment_type LIKE \'TABLE%\' GROUP BY segment_name) s ON s.segment_name = t.table_name
LEFT JOIN (SELECT i.table_name, SUM(s.bytes) bytes FROM user_indexes i
	JOIN user_segments s ON s.segment_name = i.index_name AND s.segment_type LIKE \'INDEX%\' GROUP BY i.table_name) i ON i.table_name = t.table_name
WHERE t.tablespace_name = '.q($j).$Ch.($C!=""?" AND t.table_name = $cj":"")."
UNION SELECT view_name, 'view', 0, 0, 0 FROM $wl".($C!=""?" WHERE view_name = $cj":"")."
ORDER BY 1")as$J)$I[$J["Name"]]=$J;return$I;}function
is_view(array$S){return$S["Engine"]=="view";}function
fk_support(array$S){return
true;}function
fields($R){$I=array();$Ch=where_owner(" AND ");foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)."$Ch ORDER BY column_id")as$J){$U=$J["DATA_TYPE"];$y="$J[DATA_PRECISION],$J[DATA_SCALE]";if($y==",")$y=$J["CHAR_COL_DECL_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,"where"=>1,"order"=>1),);}return$I;}function
indexes($R,$g=null){$I=array();$Ch=where_owner(" AND ","aic.table_owner");foreach(get_rows("SELECT aic.*, ac.constraint_type, atc.data_default
FROM all_ind_columns aic
LEFT JOIN all_constraints ac ON aic.index_name = ac.constraint_name AND aic.table_name = ac.table_name AND aic.index_owner = ac.owner
LEFT JOIN all_tab_cols atc ON aic.column_name = atc.column_name AND aic.table_name = atc.table_name AND aic.index_owner = atc.owner
WHERE aic.table_name = ".q($R)."$Ch
ORDER BY ac.constraint_type, aic.column_position",$g)as$J){$Ke=$J["INDEX_NAME"];$ub=$J["DATA_DEFAULT"];$ub=($ub?trim($ub,'"'):$J["COLUMN_NAME"]);$I[$Ke]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Ke]["columns"][]=$ub;$I[$Ke]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Ke]["descs"][]=($J["DESCEND"]&&$J["DESCEND"]=="DESC"?'1':null);}return$I;}function
view($C){$wl=views_table("view_name, text");$K=get_rows('SELECT text "select" FROM '.$wl.' WHERE view_name = '.q($C));return
reset($K);}function
collations(){return
array();}function
information_schema($j,$L=""){return($L!=""?$L:get_schema())=="INFORMATION_SCHEMA";}function
error(){return
h(connection()->error);}function
explain(Db$f,$G){$f->query("EXPLAIN PLAN FOR $G");return$f->query("SELECT * FROM plan_table");}function
found_rows(array$S,array$Z){}function
auto_increment(){return"";}function
alter_table($R,$C,array$n,array$Jd,$wb,$Rc,$rb,$Ga,$Ph){$b=$Dc=array();$vh=($R?fields($R):array());foreach($n
as$m){$X=$m[1];if($X&&$m[0]!=""&&idf_escape($m[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($m[0])." TO $X[0]");$uh=$vh[$m[0]];if($X&&$uh){$Wg=process_field($uh,$uh);if($X[2]==$Wg[2])$X[2]="";}if($X)$b[]=($R!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Dc[]=idf_escape($m[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",array_merge($b,$Jd))."\n)");return(!$b||queries("ALTER TABLE ".table($R)."\n".implode("\n",$b)))&&(!$Dc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Dc).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
alter_indexes($R,$b){$Dc=array();$ui=array();foreach($b
as$X){if($X[0]!="INDEX"){$X[2]=preg_replace('~ DESC$~','',$X[2]);$h=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");array_unshift($ui,"ALTER TABLE ".table($R).$h);}elseif($X[2]=="DROP")$Dc[]=idf_escape($X[1]);else$ui[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($Dc)array_unshift($ui,"DROP INDEX ".implode(", ",$Dc));foreach($ui
as$G){if(!queries($G))return
false;}return
true;}function
foreign_keys($R){$I=array();$G="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($G)as$J)$I[$J['NAME']]=array("db"=>$J['DEST_DB'],"table"=>$J['DEST_TABLE'],"source"=>array($J['SRC_COLUMN']),"target"=>array($J['DEST_COLUMN']),"on_delete"=>$J['ON_DELETE'],"on_update"=>null,);return$I;}function
truncate_tables(array$T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views(array$xl){return
apply_queries("DROP VIEW",$xl);}function
drop_tables(array$T){return
apply_queries("DROP TABLE",$T);}function
last_id($H){return"0";}function
schemas(){$I=get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX')) ORDER BY 1");return($I?:get_vals("SELECT DISTINCT owner FROM all_tables WHERE tablespace_name = ".q(DB)." ORDER BY 1"));}function
get_schema(){return
get_val("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($L,$g=null){return!!connection($g)->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($L));}function
show_variables(){return
get_rows('SELECT name, display_value FROM v$parameter');}function
show_status(){$I=array();$K=get_rows('SELECT * FROM v$instance');foreach(reset($K)as$x=>$X)$I[]=array($x,$X);return$I;}function
process_list(){return
get_rows('SELECT
	sess.process AS "process",
	sess.username AS "user",
	sess.schemaname AS "schema",
	sess.status AS "status",
	sess.wait_class AS "wait_class",
	sess.seconds_in_wait AS "seconds_in_wait",
	sql.sql_text AS "sql_text",
	sess.machine AS "machine",
	sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
convert_field(array$m){}function
unconvert_field(array$m,$I){return$I;}function
support($qd){return
preg_match('~^(columns|database|drop_col|fast_status|indexes|descidx|processlist|scheme|sql|status|table|variables|view)$~',$qd);}}class
Adminer{static$instance;var$error='';function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'><img src='".h(preg_replace("~\\?.*~","",ME)."?file=logo.png&version=6.0.0")."' width='24' height='24' alt='' id='logo'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
connectSsl(){}function
permanentLogin($h=false){return
password_file($h);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
serverName($N){return
h($N);}function
database(){return
DB;}function
databases($Hd=true){return
get_databases($Hd);}function
pluginsLinks(){}function
operators(){return
driver()->operators;}function
schemas(){$I=schemas();if($_GET["ns"]!=""&&!in_array($_GET["ns"],$I))array_unshift($I,$_GET["ns"]);return$I;}function
queryTimeout(){return
2;}function
afterConnect(){}function
headers(){}function
csp(array$Sb){return$Sb;}function
verifyVersion(){return
true;}function
head($Xb=null){return
true;}function
bodyClass(){echo" adminer";}function
css(){$I=array();foreach(array("","-dark")as$tg){$o="adminer$tg.css";if(file_exists($o)){$wd=file_get_contents($o);$I["$o?v=".crc32($wd)]=($tg?"dark":(preg_match('~prefers-color-scheme:\s*dark~',$wd)?'':'light'));}}return$I;}function
loginForm(){echo"<table class='layout'>\n",adminer()->loginFormField('driver','<tr><th>'.lang(36).'<td>',html_select("auth[driver]",SqlDriver::$drivers,DRIVER,on('change','loginDriver'))),adminer()->loginFormField('server','<tr><th>'.lang(37).'<td>',"<input name='auth[server]' value='".h(SERVER)."' title='".lang(38)."' placeholder='localhost' autocapitalize='off'>"),adminer()->loginFormField('username','<tr><th>'.lang(39).'<td>','<input name="auth[username]" id="username" autofocus value="'.h($_GET["username"]).'" autocomplete="username" autocapitalize="off">'.script("fire(qs('#username').form['auth[driver]'], 'change');")),adminer()->loginFormField('password','<tr><th>'.lang(40).'<td>','<input type="password" name="auth[password]" autocomplete="current-password">'),adminer()->loginFormField('db','<tr><th>'.lang(41).'<td>','<input name="auth[db]" value="'.h($_GET["db"]).'" autocapitalize="off">'),"</table>\n","<p><input type='submit' value='".lang(42)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(43))."\n";}function
loginFormField($C,$oe,$Y){return$oe.$Y."\n";}function
login($Mf,$E){if($E==""||!password_required())return
lang(44,target_blank());return
true;}function
tableName(array$Yj){return
h($Yj["Name"]);}function
fieldName(array$m,$oh=0){$U=$m["full_type"].($m["null"]?" NULL":"");$wb=$m["comment"];return'<span title="'.h($U.($wb!=""?($U?": ":"").$wb:'')).'">'.h($m["field"]).'</span>';}function
commentValue($U,$wb){if($wb==""||$U=='TABLE'||$U=='COLUMN')return
h($wb);$hi=function($Xi){return
preg_replace('~^~m','<tr>',preg_replace('~\|~','<td>',preg_replace('~\|$~m',"",rtrim($Xi))));};$R='(\+--[-+]+\+\n)';$J='(\| .* \|\n)';return"<pre>\n".preg_replace_callback("~^$R?$J$R?($J*)$R?~m",function($B)use($hi){$Cd=$hi($B[2]);return"<table>\n".($B[1]?"<thead>$Cd<tbody>\n":$Cd).$hi($B[4])."\n</table>";},preg_replace('~(\n(    -|mysql)&gt; )(.+)~',"\\1<code class='jush-sql'>\\3</code>",preg_replace('~(.+)\n---+\n~',"<b>\\1</b>\n",h($wb))))."</pre>\n";}function
commentInput($U,$c,$wb){$Y=h($wb);return(preg_match('~\n~',$Y)?"<textarea$c rows='2' cols='".($U=='TABLE'?20:30)."' style='vertical-align: bottom;'>\n$Y</textarea>":"<input$c value='$Y'>");}function
selectLinks(array$Yj,$O=""){$C=$Yj["Name"];echo'<p class="links">';$If=array("select"=>lang(45));if(support("table")||support("indexes"))$If["table"]=lang(46);$hf=false;if(support("table")){$hf=is_view($Yj);if($hf){if(support("view"))$If["view"]=lang(47);}elseif(function_exists('Adminer\alter_table')&&$C!="")$If["create"]=lang(48);}if($O!==null)$If["edit"]=lang(49);foreach($If
as$x=>$X)echo" <a href='".h(ME)."$x=".url_escape($C).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo
doc_link(array(JUSH=>driver()->tableHelp($C,$hf)),"?"),"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Xj){return
array();}function
backwardKeysPrint(array$La,array$J){}function
selectQuery($G,$Mj,$od=false){$I="\n";if(!$od&&($_l=driver()->warnings())){$t="warnings";$I=", <a href='#$t' class='toggle'>".lang(50)."</a>"."$I<div id='$t' class='hidden'>\n$_l</div>\n";}return"<p><code class='jush-".JUSH."'>".h(str_replace("\n"," ",$G))."</code> <span class='time'>(".format_time($Mj).")</span>".(support("sql")?" <a href='".h(ME)."sql=".url_escape($G)."' class='hover'>".lang(13)."</a>":"").$I;}function
sqlCommandQuery($G){return
shorten_utf8(trim($G),1000);}function
sqlPrintAfter(){}function
rowDescription($R){return"";}function
rowDescriptions(array$K,array$Kd){return$K;}function
selectLink($X,array$m){}function
selectVal($X,$_,array$m,$yh){$I=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$m["type"])&&!preg_match("~var~",$m["type"])?"<code>$X</code>":(preg_match('~^jsonb?$~',$m["full_type"])?"<code class='jush-json'>$X</code>":$X)));if(is_blob($m)&&!is_utf8($X))$I="<i>".lang(51,strlen($yh))."</i>";return($_?"<a href='".h($_)."'".(is_url($_)?target_blank():"").">$I</a>":$I);}function
editVal($X,array$m){return$X;}function
config(){return
array();}function
tableStructurePrint(array$n,$Yj=null){echo"<div class='scrollable'>\n","<table class='nowrap odds'>\n","<thead><tr><th>".lang(52)."<td>".lang(53).(support("comment")?"<td>".lang(54):"")."<tbody>\n";$Pj=driver()->structuredTypes();foreach($n
as$m){echo"<tr><th>".h($m["field"]);$U=h($m["full_type"]);$rb=h($m["collation"]);echo"<td><span title='$rb'>".(in_array($U,(array)$Pj[lang(7)])?"<a href='".h(ME.'type='.url_escape($U))."'>$U</a>":$U.($rb&&isset($Yj["Collation"])&&$rb!=$Yj["Collation"]?" $rb":""))."</span>",($m["null"]?" <i>NULL</i>":""),($m["auto_increment"]?" <i>".lang(55)."</i>":""),(isset($m["default"])?" <span title='".lang(56)."'>[<b>".($m["generated"]?"<code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim($m["default"])),80,"</code>"):h($m["default"]))."</b>]</span>":""),(support("comment")?"<td>".adminer()->commentValue('COLUMN',$m["comment"]):""),"\n";}echo"</table>\n","</div>\n";}function
tableIndexesPrint(array$w,array$Yj){$Kh=false;foreach($w
as$C=>$v)$Kh|=!!$v["partial"];echo"<table>\n";$gc=first(driver()->indexAlgorithms($Yj));foreach($w
as$C=>$v){ksort($v["columns"]);$ni=array();foreach($v["columns"]as$x=>$X)$ni[]="<i>".h($X)."</i>".($v["lengths"][$x]?"(".h($v["lengths"][$x]).")":"").($v["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'>","<th>".h($v["type"]).($gc&&$v['algorithm']!=$gc?" (".h($v['algorithm']).")":""),"<td>".implode(", ",$ni);if($Kh)echo"<td>".($v['partial']?"<code class='jush-".JUSH."'>WHERE ".h($v['partial']):"");echo"\n";}echo"</table>\n";}function
selectColumnsPrint(array$M,array$e){print_fieldset("select",lang(57),$M);$s=0;$M[""]=array();foreach($M
as$x=>$X){$X=idx($_GET["columns"],$x,array());$d=select_input(" name='columns[$s][col]' data-default=''".on('change',($x!==""?'selectFieldChange':'selectAddRow')),$e,$X["col"]);echo"<div>".(driver()->functions||driver()->grouping?html_select("columns[$s][fun]",array(-1=>"")+array_filter(array(lang(58)=>driver()->functions,lang(59)=>driver()->grouping)),$X["fun"]," data-default=''".on('change',($x!==""?'helpClose':'selectFunAddRow')).on_help_value(' (.*)|$','($1)'))."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint(array$Z,array$e,array$w){print_fieldset("search",lang(60),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT")echo"<div>(<i>".implode("</i>, <i>",array_map('Adminer\h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h(idx($_GET["fulltext"],$s))."' data-default=''".on('input','selectFieldChange').">",(JUSH=='sql'?checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"):''),"</div>\n";}$jh=adminer()->operators();foreach(array_merge((array)$_GET["where"],array(array()))as$s=>$X){if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$jh)))echo"<div>".select_input(" name='where[$s][col]' data-default=''".on('change',($X?'selectFieldChange':'selectAddRow')),$e,$X["col"],"(".lang(61).")"),html_select("where[$s][op]",$jh,$X["op"]," data-default='".h(first($jh))."'".on('change','selectFirstChange')),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' data-default=''".on('input','selectFirstChange').on('keydown','selectSearchKeydown').on('search','selectSearchSearch').">","</div>\n";}echo"</div></fieldset>\n";}function
selectOrderPrint(array$oh,array$e,array$w){print_fieldset("sort",lang(62),$oh);$s=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' data-default=''".on('change','selectFieldChange'),$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$x]),lang(63))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' data-default=''".on('change','selectAddRow'),$e),checkbox("desc[$s]",1,false,lang(63))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(64)."</legend><div>","<input type='number' name='limit' class='size' value='".h($z?:"")."' data-default='50'".on('input','selectFieldChange').">","</div></fieldset>\n";}function
selectLengthPrint($qk){echo"<fieldset><legend>".lang(65)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($qk)."' data-default='100'>","</div></fieldset>\n";}function
selectActionPrint(array$w){echo"<fieldset><legend>".lang(66)."</legend><div>","<input type='submit' value='".lang(57)."'>"," <span id='noindex' title='".lang(67)."'></span>","<script".nonce().">\n","const indexColumns = ";$e=array();foreach($w
as$v){$Wb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Wb)$e[$Wb]=1;}$e[""]=1;foreach($e
as$x=>$X)json_row($x);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint(array$Oc,array$e){}function
selectColumnsProcess(array$e,array$w){$M=array();$Zd=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],driver()->functions)||in_array($X["fun"],driver()->grouping)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],driver()->grouping))$Zd[]=$M[$x];}}return
array($M,$Zd);}function
selectSearchProcess(array$n,array$w){$I=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&idx($_GET["fulltext"],$s)!="")$I[]="MATCH (".implode(", ",array_map('Adminer\idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}$jh=adminer()->operators();foreach((array)$_GET["where"]as$x=>$X){$X+=array("col"=>"","op"=>first($jh),"val"=>"");$_GET["where"][$x]=$X;$pb=$X["col"];if("$pb$X[val]"!=""&&in_array($X["op"],$jh)){if($X["op"]=="SQL"&&(!$_POST||!verify_token()))SqlDb::$untrusted=true;$Ab=array();foreach(($pb!=""?array($pb=>$n[$pb]):$n)as$C=>$m){$ii="";$_b=" $X[op]";if(preg_match('~IN$~',$X["op"])){$De=process_length($X["val"]);$_b
.=" ".($De!=""?$De:"(NULL)");}elseif($X["op"]=="SQL")$_b=" $X[val]";elseif(preg_match('~^(I?LIKE) %%$~',$X["op"],$B))$_b=" $B[1] ".adminer()->processInput($m,"%$X[val]%");elseif($X["op"]=="FIND_IN_SET"){$ii="$X[op](".q($X["val"]).", ";$_b=")";}elseif(!preg_match('~NULL$~',$X["op"]))$_b
.=" ".adminer()->processInput($m,$X["val"]);if($pb!=""||(isset($m["privileges"]["where"])&&(preg_match('~^[-\d.'.(preg_match('~IN$~',$X["op"])?',':'').']+$~',$X["val"])||!preg_match('~'.number_type().'|bit~',$m["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||preg_match('~char|text|enum|set~',$m["type"]))&&(!preg_match('~date|timestamp~',$m["type"])||preg_match('~^\d+-\d+-\d+~',$X["val"]))))$Ab[]=$ii.driver()->convertSearch(idf_escape($C),$X,$m).$_b;}$I[]=(count($Ab)==1?$Ab[0]:($Ab?"(".implode(" OR ",$Ab).")":"1 = 0"));}}return$I;}function
selectOrderProcess(array$n,array$w){$I=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$I[]=(preg_match('~^((COUNT\(DISTINCT |[A-Z0-9_]+\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\)|COUNT\(\*\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC".(JUSH=='pgsql'&&idx($n[$X],"null")?" NULLS LAST":""):"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?intval($_GET["limit"]):50);}function
selectLengthProcess(){return(isset($_GET["text_length"])?"$_GET[text_length]":"100");}function
selectEmailProcess(array$Z,array$Kd){return
false;}function
selectQueryBuild(array$M,array$Z,array$Zd,array$oh,$z,$D){return"";}function
messageQuery($G,$rk,$od=false){restart_session();$re=&get_session("queries");if(!idx($re,$_GET["db"]))$re[$_GET["db"]]=array();if(strlen($G)>1e6)$G=preg_replace('~[\x80-\xFF]+$~','',substr($G,0,1e6))."\n…";$re[$_GET["db"]][]=array($G,time(),$rk);$Hj="sql-".count($re[$_GET["db"]]);$I="<a href='#$Hj' class='toggle'>".lang(68)."</a> ".copy_icon()."\n";if(!$od&&($_l=driver()->warnings())){$t="warnings-".count($re[$_GET["db"]]);$I="<a href='#$t' class='toggle'>".lang(50)."</a>, $I<div id='$t' class='hidden'>\n$_l</div>\n";}return" <span class='time'>".@date("H:i:s")."</span>"." $I<div id='$Hj' class='hidden'><pre><code class='jush-".JUSH."'>".shorten_utf8($G,1e4)."</code></pre>".($rk?" <span class='time'>($rk)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".url_escape(DB),"db=".url_escape($_GET["db"]),ME).'sql=&history='.(count($re[$_GET["db"]])-1)).'">'.lang(13).'</a>':'').'</div>';}function
editRowPrint($R,array$n,$J,$bl){}function
editFunctions(array$m){$I=($m["null"]?"NULL/":"");$le=isset($_GET["select"])||where($_GET);foreach(array(driver()->insertFunctions,driver()->editFunctions)as$x=>$Ud){if(!$x||(!isset($_GET["call"])&&$le)){foreach($Ud
as$Uh=>$X){if(!$Uh||preg_match("~$Uh~",$m["type"]))$I
.="/$X";}}if($x&&$Ud&&!preg_match('~set|bool~',$m["type"])&&!is_blob($m))$I
.="/SQL";}if($m["auto_increment"]&&!$le)$I=lang(55);return
explode("/",$I);}function
editInput($R,array$m,$c,$Y){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='orig' checked><i>".lang(11)."</i></label> ":"").enum_input("radio",$c,$m,$Y,"NULL");return"";}function
editHint($R,array$m,$Y){return"";}function
processInput(array$m,$Y,$r=""){if($r=="SQL")return$Y;$C=$m["field"];$I=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$I="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$I=$r;elseif(preg_match('~^([+-]|\|\|)$~',$r))$I=idf_escape($C)." $r $I";elseif(preg_match('~^[+-] interval$~',$r))$I=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)&&JUSH!="pgsql"?$Y:$I);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$I="$r(".idf_escape($C).", $I)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$I="$r($I)";return
unconvert_field($m,$I);}function
dumpOutput(){$I=array('text'=>lang(69),'file'=>lang(70));if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return(support("dump")?array('sql'=>'SQL'):array())+array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($j){}function
dumpTable($R,$Qj,$hf=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Qj)dump_csv(array_keys(fields($R)));}else{if($hf==2){$n=array();foreach(fields($R)as$C=>$m)$n[]=idf_escape($C)." $m[full_type]";$h="CREATE TABLE ".table($R)." (".implode(", ",$n).")";}else$h=create_sql($R,$_POST["auto_increment"],$Qj);set_utf8mb4($h);if($Qj&&$h){if(($Qj=="DROP+CREATE"&&!function_exists('Adminer\drop_sql'))||$hf==1)echo"DROP ".($hf==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($hf==1)$h=remove_definer($h);echo"$h;\n\n";}}}function
dumpData($R,$Qj,$G,array$M=array(),array$Z=array(),array$Zd=array(),array$oh=array()){if($Qj){$Xf=(JUSH=="sqlite"?0:1048576);$n=array();$_e=false;if($_POST["format"]=="sql"){if($Qj=="TRUNCATE+INSERT"&&!function_exists('Adminer\truncate_all_sql'))echo
truncate_sql($R).";\n";$n=fields($R);if(JUSH=="mssql"){foreach($n
as$m){if($m["auto_increment"]){echo"SET IDENTITY_INSERT ".table($R)." ON;\n";$_e=true;break;}}}}$H=($G!=""?connection()->query($G,1):driver()->select($R,($M?:array("*")),$Z,$Zd,$oh,0));if($H){$Ve="";$Va="";$of=array();$Vd=array();$Sj="";$rd=($R!=''?'fetch_assoc':'fetch_row');$Ob=0;while($J=$H->$rd()){if(!$of){$sl=array();foreach($J
as$X){$m=$H->fetch_field();if(idx($n[$m->name],'generated')){$Vd[$m->name]=true;continue;}$of[]=$m->name;$x=idf_escape($m->name);$sl[]="$x = VALUES($x)";}$Sj=($Qj=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$sl):"").";\n";}if($_POST["format"]!="sql"){if($Qj=="table"){dump_csv($of);$Qj="INSERT";}dump_csv($J);}else{if(!$Ve)$Ve="INSERT INTO ".table($R)." (".implode(", ",array_map('Adminer\idf_escape',$of)).") VALUES";foreach($J
as$x=>$X){if($Vd[$x]){unset($J[$x]);continue;}$m=$n[$x];$J[$x]=($X===null?"NULL":($X===false?0:unconvert_field($m,preg_match(number_type(),$m["type"])&&!preg_match('~\[~',$m["full_type"])&&is_numeric($X)?$X:(!is_blob($m)||is_utf8($X)?q($X):driver()->quoteBinary($X)))));}$Xi=($Xf?"\n":" ")."(".implode(",\t",$J).")";if(!$Va)$Va=$Ve.$Xi;elseif(JUSH=='mssql'?$Ob%1000!=0:strlen($Va)+4+strlen($Xi)+strlen($Sj)<$Xf)$Va
.=",$Xi";else{echo$Va.$Sj;$Va=$Ve.$Xi;}}$Ob++;}if($Va)echo$Va.$Sj;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",connection()->error)."\n";if($_e)echo"SET IDENTITY_INSERT ".table($R)." OFF;\n";}}function
dumpFilename($ye){return
friendly_url($ye!=""?$ye:(SERVER?:"localhost"));}function
dumpHeaders($ye,$wg=false){$Bh=$_POST["output"];$jd=(preg_match('~sql~',$_POST["format"])?"sql":($wg?"tar":"csv"));header("Content-Type: ".($Bh=="gz"?"application/x-gzip":($jd=="tar"?"application/x-tar":($jd=="sql"||$Bh!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Bh=="gz"){ob_start(function($Q){return
gzencode($Q);},1e6);}return$jd;}function
dumpFooter(){if($_POST["format"]=="sql")echo"-- ".gmdate("Y-m-d H:i:s e")."\n";}function
importServerPath(){return"adminer.sql";}function
importPrint(){}function
importProcess(){return
false;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(71)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(72):lang(73))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(74)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(75)."</a>\n":"");if($_GET["ns"]!=="")echo(support("routine")?"<a href='#routines'>".lang(76)."</a>\n":""),(support("sequence")?"<a href='#sequences'>".lang(77)."</a>\n":""),(support("type")?"<a href='#user-types'>".lang(7)."</a>\n":""),(support("event")?"<a href='#events'>".lang(78)."</a>\n":"");return
true;}function
navigation($sg){echo"<h1>".adminer()->name()." <span class='version'>".VERSION;$Hg=$_COOKIE["adminer_version"];echo" <a href='https://www.adminer.org/#download'".target_blank()." id='version'>".(version_compare(VERSION,$Hg)<0?h($Hg):"").version_iframe()."</a>","</span></h1>\n";switch_lang();if($sg=="auth"){$Bh="";foreach((array)$_SESSION["pwds"]as$ul=>$rj){foreach($rj
as$N=>$nl){$C=h(get_setting("vendor-$ul-$N")?:get_driver($ul));foreach($nl
as$V=>$E){if($C&&$E!==null){$ec=$_SESSION["db"][$ul][$N][$V];foreach(($ec?array_keys($ec):array(""))as$j)$Bh
.="<li><a href='".h(auth_url($ul,$N,$V,$j))."'>($C) ".h("$V@").($N!=""?adminer()->serverName($N):"").h($j!=""?" - $j":"")."</a>\n";}}}}if($Bh)echo"<ul id='logins'".on('mouseover','menuOver').on('mouseout','menuOut').">\n$Bh</ul>\n";}else{$T=array();if($_GET["ns"]!==""&&!$sg&&DB!=""){connection()->select_db(DB);$T=table_status('',true);}adminer()->syntaxHighlighting($T);adminer()->databasesPrint($sg);$la=array();if(DB==""||!$sg){if(support("sql")){$la['sql']="<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(68)."</a>";$la['import']="<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(79)."</a>";}$la['dump']="<a href='".h(ME)."dump=".url_escape(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(80)."</a>";}$Ee=$_GET["ns"]!==""&&!$sg&&DB!="";if($Ee&&function_exists('Adminer\alter_table'))$la['create']='<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(81)."</a>";$la=adminer()->menuActions($la,$sg);echo($la?"<p class='links'>\n".implode("\n",$la)."\n":"");if($Ee){if($T)adminer()->tablesPrint($T);else
echo"<p class='message'>".lang(12)."</p>\n";}}}function
syntaxHighlighting(array$T){echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=6.0.0",true);if(support("sql")){$lf="adminer-plugins/jush-".JUSH.".js";echo(file_exists($lf)?script_src($lf,true):""),"<script".nonce().">\n";if($T){$If=array();foreach($T
as$R=>$U)$If[]=js_escape_re($R);echo"var jushLinks = { ".JUSH.":";json_row(js_escape(ME).(support("table")?"table":"select").'=$&','/\b(?<!\$)('.implode('|',$If).')(?!\$)\b/g',false);$Jj=array("sql","check","event","procedure","trigger","view","type","table","processlist");if(support("routine")&&array_intersect_key($_GET,array_flip($Jj))){foreach(routines()as$J)json_row(js_escape(ME).'function='.url_escape($J["SPECIFIC_NAME"]).'&name=$&','/\b'.js_escape_re($J["ROUTINE_NAME"]).'(?=["`\]]?\()/g',false);}json_row('');echo"};\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.".JUSH.";\n";if(isset($_GET["sql"])||isset($_GET["trigger"])||isset($_GET["check"])){$gk=array_fill_keys(array_keys($T),array());foreach(driver()->allFields()as$R=>$n){foreach($n
as$m)$gk[$R][]=$m["field"];}echo"addEventListener('DOMContentLoaded', () => { autocompleter = jush.autocompleteSql('".idf_escape("")."', ".json_encode($gk)."); });\n";}}echo"</script>\n";}echo
script("syntaxHighlighting('".(preg_match('~^\d\.?\d~',connection()->server_info,$B)?$B[0]:"")."', '".connection()->flavor."');");}function
databasesPrint($sg){$i=adminer()->databases();if(DB&&$i&&!in_array(DB,$i))array_unshift($i,DB);echo"<form action=''>\n<p id='dbs'>\n";hidden_fields_get();$cc=on('mousedown','dbMouseDown').on('change','dbChange');echo"<label title='".lang(41)."'>".lang(82).": ".($i?html_select("db",array(""=>"")+$i,DB,$cc):"<input name='db' value='".h(DB)."' autocapitalize='off' size='19'>\n")."</label>","<input type='submit' value='".lang(24)."'".($i?" class='hidden'":"").">\n";if(support("scheme")){if($sg!="db"&&DB!=""&&connection()->select_db(DB)){echo"<br><label>".lang(83).": ".html_select("ns",array(""=>"")+adminer()->schemas(),$_GET["ns"],$cc)."</label>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}foreach(array("import","sql","schema","dump","privileges")as$X){if(isset($_GET[$X])){echo
input_hidden($X);break;}}echo"</p></form>\n";}function
menuActions(array$la,$sg){return$la;}function
tablesPrint(array$T){echo"<ul id='tables'".on('mouseover','menuOver').on('mouseout','menuOut').">";foreach($T
as$R=>$P){$R="$R";$C=adminer()->tableName($P);if($C!=""&&!$P["partition"])echo'<li><a href="'.h(ME).'select='.url_escape($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select hover")." title='".lang(45)."'>".lang(84)."</a> ",(support("table")||support("indexes")?'<a href="'.h(ME).'table='.url_escape($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"],$_GET["check"],$_GET["view"])),(is_view($P)?"view":"structure"))." title='".lang(46)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}function
showVariables(){return
show_variables();}function
showStatus(){return
show_status();}function
processList(){return
process_list();}function
killProcess($t){return
kill_process($t);}}class
Plugins{private
static$append=array('dumpFormat'=>true,'dumpOutput'=>true,'editRowPrint'=>true,'editFunctions'=>true,'config'=>true);var$plugins;var$drivers=array();var$driverFiles=array();var$error='';private$hooks=array();function
__construct($ai){$Cc=SqlDriver::$drivers;$pe=" href='https://www.adminer.org/plugins/#use'".target_blank();if($ai===null){$ai=array();$Pa="adminer-plugins";if(is_dir($Pa)){foreach(glob("$Pa/*.php")as$o){$xd=SqlDriver::$drivers;$this->includeOnce($o);foreach(array_diff_key(SqlDriver::$drivers,$xd)as$t=>$C)$this->driverFiles[$t]=$o;}}if(file_exists("$Pa.php")){$Ge=$this->includeOnce("$Pa.php");if(is_array($Ge)){foreach($Ge
as$x=>$Yh)$ai[is_object($Yh)?get_class($Yh):$x]=$Yh;}else$this->error
.=lang(85,"<b>$Pa.php</b>",$pe)."<br>";}foreach(get_declared_classes()as$mb){if(!$ai[$mb]&&(preg_match('~^Adminer\w~i',$mb)||is_subclass_of($mb,'Adminer\Plugin'))){$Ei=new
\ReflectionClass($mb);$Gb=$Ei->getConstructor();if($Gb&&$Gb->getNumberOfRequiredParameters())$this->error
.=lang(86,$pe,"<b>$mb</b>","<b>$Pa.php</b>")."<br>";else$ai[$mb]=new$mb;}}}$Ze=array_filter($ai,function($Yh){return!is_object($Yh);});if($Ze){$this->error
.=lang(87,$pe)."<br>";$ai=array_diff_key($ai,$Ze);}$this->drivers=array_diff_key(SqlDriver::$drivers,$Cc);$this->plugins=$ai;$pa=new
Adminer;$ai[]=$pa;$Ei=new
\ReflectionObject($pa);foreach($Ei->getMethods()as$qg){foreach($ai
as$Yh){$C=$qg->getName();if(method_exists($Yh,$C))$this->hooks[$C][]=$Yh;}}}function
includeOnce($o){return
include_once"./$o";}static
function
checksum($o){$wd=str_replace("\r","",file_get_contents($o));$wd=preg_replace('~\n\tprotected \$translations = array\(.*?\n\t\);~s','',$wd);return
dechex(crc32($wd));}function
checksums(){$yd=array_values($this->driverFiles);foreach($this->plugins
as$Yh){$Ei=new
\ReflectionObject($Yh);$yd[]=$Ei->getFileName();}$I=array();foreach($yd
as$o)$I[basename($o,'.php')]=self::checksum($o);return$I;}static
function
officialChecksums(){return
array('adminer.js'=>'a0599090','backward-keys'=>'afce3b7d','before-unload'=>'48618ca0','config'=>'f49cc617','dark-switcher'=>'3d490dea','database-hide'=>'90c6c0dc','designs'=>'56f1c186','dump-alter'=>'d078b2db','dump-bz2'=>'f0d0e336','dump-date'=>'adc7f1c7','dump-json'=>'767dd321','dump-xml'=>'9f039895','dump-zip'=>'93817d96','edit-foreign'=>'8c874a58','edit-textarea'=>'a24c3cc','editor-setup'=>'a7dc3a37','editor-views'=>'5c12b185','enum-option'=>'a2563959','file-upload'=>'235eaa7a','foreign-system'=>'ebb4c654','frames'=>'b0e1d11a','highlight-codemirror'=>'f1a34275','highlight-monaco'=>'6a92cc58','highlight-prism'=>'4c12cf3','import-csv'=>'1d174088','login-ip'=>'b4766b62','login-otp'=>'62c517c0','login-passkey'=>'f69f2f06','login-password-less'=>'97c37010','login-reverse-proxy'=>'7bb63f11','login-servers'=>'f9ac2f28','login-ssl'=>'6ed147bc','login-table'=>'7b15c3cd','menu-links'=>'f1f86a60','remote-color'=>'33a766c2','row-numbers'=>'eec8698c','select-email'=>'ead22272','select-image'=>'f55c0231','slugify'=>'4d5adde6','sql-gemini'=>'fabc3537','sql-log'=>'b4355039','table-indexes-structure'=>'a90cc0c9','table-structure'=>'a8458e02','tables-filter'=>'f8f51976','timeout'=>'90597366','version-github'=>'497af47b','version-noverify'=>'966937e9','clickhouse'=>'5bb80dfb','elastic'=>'f7017c4','firebird'=>'5499d1a','igdb'=>'170d083','imap'=>'ac143217','mongo'=>'c3b8f5a4','redis'=>'12f1a73b','simpledb'=>'79488f8b',);}function
__call($C,array$Hh){$Aa=array();foreach($Hh
as$x=>$X)$Aa[]=&$Hh[$x];$I=null;foreach($this->hooks[$C]as$Yh){$Y=call_user_func_array(array($Yh,$C),$Aa);if($Y!==null){if(!self::$append[$C])return$Y;$I=$Y+(array)$I;}}return$I;}}abstract
class
Plugin{protected$translations=array();function
description(){return$this->lang('');}function
screenshot(){return"";}protected
function
lang($u,$Ng=null){$Aa=func_get_args();$Aa[0]=idx($this->translations[LANG],$u)?:$u;return
call_user_func_array('Adminer\lang_format',$Aa);}}Adminer::$instance=(function_exists('adminer_object')?adminer_object():(is_dir("adminer-plugins")||file_exists("adminer-plugins.php")?new
Plugins(null):new
Adminer));SqlDriver::$drivers=array("server"=>"MySQL / MariaDB")+SqlDriver::$drivers;if(!defined('Adminer\DRIVER')){define('Adminer\DRIVER',"server");if(extension_loaded("mysqli")&&$_GET["ext"]!="pdo"){class
Db
extends
\MySQLi{static$instance;var$extension="MySQLi",$flavor='';function
__construct(){parent::init();}function
attach($N,$V,$E){mysqli_report(MYSQLI_REPORT_OFF);list($ue,$bi)=host_port($N);$Lj=adminer()->connectSsl();$jl=($Lj&&($Lj['key']||$Lj['cert']||$Lj['ca']||isset($Lj['verify'])));if($jl)$this->ssl_set($Lj['key'],$Lj['cert'],$Lj['ca'],'','');$I=@$this->real_connect(($N!=""?$ue:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($bi)?intval($bi):ini_get("mysqli.default_port")),(is_numeric($bi)?null:$bi),($jl?($Lj['verify']!==false?MYSQLI_CLIENT_SSL:64):0));$this->options(MYSQLI_OPT_LOCAL_INFILE,0);return($I?'':$this->error);}function
set_charset($db){if(parent::set_charset($db))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $db");}function
next_result(){return
self::more_results()&&parent::next_result();}function
quote($Q){return"'".$this->escape_string($Q)."'";}function
inTransaction(){return
false;}}}elseif(extension_loaded("mysql")&&!((ini_bool("sql.safe_mode")||ini_bool("mysql.allow_local_infile"))&&extension_loaded("pdo_mysql"))){class
Db
extends
SqlDb{private$link;function
attach($N,$V,$E){if(ini_bool("mysql.allow_local_infile"))return
lang(88,"'mysql.allow_local_infile'","MySQLi","PDO_MySQL");$this->link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),($N.$V!=""?$V:ini_get("mysql.default_user")),($N.$V.$E!=""?$E:ini_get("mysql.default_password")),true,131072);if(!$this->link)return
mysql_error();$this->server_info=mysql_get_server_info($this->link);return'';}function
set_charset($db){return
mysql_set_charset($db,$this->link)||mysql_set_charset('utf8',$this->link);}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->link)."'";}function
select_db($bc){return
mysql_select_db($bc,$this->link);}function
query($G,$Sk=false){$H=@($Sk?mysql_unbuffered_query($G,$this->link):mysql_query($G,$this->link));$this->error="";if(!$H){$this->errno=mysql_errno($this->link);$this->error=mysql_error($this->link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->link);$this->info=mysql_info($this->link);return
true;}return
new
Result($H);}}class
Result{var$num_rows;private$result;private$offset=0;function
__construct($H){$this->result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->result);}function
fetch_row(){return
mysql_fetch_row($this->result);}function
fetch_field(){$I=mysql_fetch_field($this->result,$this->offset++);$I->orgtable=$I->table;$I->charsetnr=($I->blob?63:0);return$I;}}}elseif(extension_loaded("pdo_mysql")){class
Db
extends
PdoDb{var$extension="PDO_MySQL";function
attach($N,$V,$E){$mh=array(\PDO::MYSQL_ATTR_LOCAL_INFILE=>false);if(isset($_GET["select"]))$mh[\PDO::MYSQL_ATTR_MULTI_STATEMENTS]=false;$Lj=adminer()->connectSsl();if($Lj){if($Lj['key'])$mh[\PDO::MYSQL_ATTR_SSL_KEY]=$Lj['key'];if($Lj['cert'])$mh[\PDO::MYSQL_ATTR_SSL_CERT]=$Lj['cert'];if($Lj['ca'])$mh[\PDO::MYSQL_ATTR_SSL_CA]=$Lj['ca'];if(isset($Lj['verify']))$mh[\PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT]=$Lj['verify'];}list($ue,$bi)=host_port($N);return$this->dsn("mysql:charset=utf8".($ue!=""?";host=$ue":'').($bi?(is_numeric($bi)?";port=":";unix_socket=").$bi:""),$V,$E,$mh);}function
set_charset($db){return$this->query("SET NAMES $db");}function
select_db($bc){return$this->query("USE ".idf_escape($bc));}function
query($G,$Sk=false){$this->pdo->setAttribute(\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,!$Sk);return
parent::query($G,$Sk);}}}class
Driver
extends
SqlDriver{static$extensions=array("MySQLi","MySQL","PDO_MySQL");static$jush="sql";var$unsigned=array("unsigned","zerofill","unsigned zerofill");var$operators=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");var$functions=array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper");var$grouping=array("avg","count","count distinct","group_concat","max","min","sum");var$partitionBy=array("HASH","LINEAR HASH","KEY","LINEAR KEY","RANGE","LIST");static
function
connect($N,$V,$E){$f=parent::connect($N,$V,$E);if(is_string($f)){if(function_exists('iconv')&&!is_utf8($f)&&strlen($Xi=iconv("windows-1252","utf-8//IGNORE",$f))>strlen($f))$f=$Xi;return$f;}$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");$f->flavor=(preg_match('~MariaDB~',$f->server_info)?'maria':'mysql');add_driver(DRIVER,($f->flavor=='maria'?"MariaDB":"MySQL"));return$f;}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(26)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(27)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(28)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(89)=>array("enum"=>65535,"set"=>64),lang(29)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(31)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),);$this->insertFunctions=array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",);$this->editFunctions=array(number_type()=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",);if(min_version('5.7.8',10.2,$f))$this->types[lang(28)]["json"]=4294967295;if(min_version('',10.7,$f)){$this->types[lang(28)]["uuid"]=128;$this->insertFunctions['uuid']='uuid';}if(min_version('',10.5,$f)){$this->types[lang(30)]["inet6"]=39;if(min_version('','10.10',$f))$this->types[lang(30)]["inet4"]=15;}if(min_version(9,11.7,$f))$this->types[lang(26)]["vector"]=16383;if(min_version(5.7,10.2,$f))$this->generated=array("STORED","VIRTUAL");}function
unconvertFunction(array$m){return(preg_match("~binary~",$m["type"])?"<code class='jush-sql'>UNHEX</code>":($m["type"]=="bit"?doc_link(array('sql'=>'bit-value-literals.html'),"<code>b''</code>"):($m["type"]=="vector"?"<code class='jush-sql'>".($this->conn->flavor=='maria'?"VEC_FromText":"STRING_TO_VECTOR")."</code>":(preg_match("~geometry|point|linestring|polygon~",$m["type"])?"<code class='jush-sql'>GeomFromText</code>":""))));}function
insert($R,array$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,array$K,array$li){$e=array_keys(reset($K));$ii="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$sl=array();foreach($e
as$x)$sl[$x]="$x = VALUES($x)";$Sj="\nON DUPLICATE KEY UPDATE ".implode(", ",$sl);$sl=array();$y=0;foreach($K
as$O){$Y="(".implode(", ",$O).")";if($sl&&(strlen($ii)+$y+strlen($Y)+strlen($Sj)>1e6)){if(!queries($ii.implode(",\n",$sl).$Sj))return
false;$sl=array();$y=0;}$sl[]=$Y;$y+=strlen($Y)+2;}return
queries($ii.implode(",\n",$sl).$Sj);}function
slowQuery($G,$sk){if(min_version('5.7.8','10.1.2')){if($this->conn->flavor=='maria')return"SET STATEMENT max_statement_time=$sk FOR $G";elseif(preg_match('~^(SELECT\b)(.+)~is',$G,$B))return"$B[1] /*+ MAX_EXECUTION_TIME(".($sk*1000).") */ $B[2]";}}function
convertSearch($u,array$X,array$m){return(preg_match('~char|text|enum|set~',$m["type"])&&!preg_match("~^utf8~",$m["collation"])&&preg_match('~[\x80-\xFF]~',$X['val'])?"CONVERT($u USING ".charset($this->conn).")":$u);}function
typeName(\stdClass$m){$Rk=array("decimal","tinyint","smallint","int","float","double",7=>"timestamp","bigint","mediumint","date","time","datetime","year",15=>"varchar","bit",242=>"vector",245=>"json","decimal","enum","set","tinytext","mediumtext","longtext","text","varchar","char","geometry",);$I=idx($Rk,$m->type,"");return
parent::typeName($m)?:($m->charsetnr==63?str_replace(array("text","varchar","char"),array("blob","varbinary","binary"),$I):$I);}function
quoteBinary($Xi){return"X".q(bin2hex($Xi));}function
warnings(){$H=$this->conn->query("SHOW WARNINGS");if($H&&$H->num_rows){ob_start();print_select_result($H);return
ob_get_clean();}}function
tableHelp($C,$hf=false){$Of=($this->conn->flavor=='maria');if(information_schema(DB))return
strtolower(str_replace("_","-",DB)."-".($Of?"$C-table/":str_replace("_","-",$C)."-table.html"));if(DB=="sys")return($Of?"sys-schema/":strtolower("sys-".str_replace("_","-",preg_replace('~^x\$~','',$C)).".html"));if(DB=="mysql")return($Of?"mysql$C-table/":"system-schema.html");}function
partitionsInfo($R){$Qd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($R);$H=$this->conn->query("SELECT PARTITION_METHOD, PARTITION_EXPRESSION, PARTITION_ORDINAL_POSITION $Qd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");$J=($H?$H->fetch_row():null);if(!$J)return
array();$I=array();list($I["partition_by"],$I["partition"],$I["partitions"])=$J;$Qh=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Qd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$I["partition_names"]=array_keys($Qh);$I["partition_values"]=array_values($Qh);return$I;}function
hasCStyleEscapes(){static$Ya;if($Ya===null){$Ij=get_val("SHOW VARIABLES LIKE 'sql_mode'",1,$this->conn);$Ya=(strpos($Ij,'NO_BACKSLASH_ESCAPES')===false);}return$Ya;}function
lineComment(){return"#|-- ";}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(preg_match("~YES|DEFAULT~",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
indexAlgorithms(array$Yj){return(preg_match('~^(MEMORY|NDB)$~',$Yj["Engine"])?array("HASH","BTREE"):array());}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
get_databases($Hd){$I=get_session("dbs");if($I===null){$G="SELECT SCHEMA_NAME FROM information_schema.SCHEMATA ORDER BY SCHEMA_NAME";$Mj=microtime(true);$I=($Hd?slow_query($G):get_vals($G));if(microtime(true)-$Mj>0.1){restart_session();set_session("dbs",$I);stop_session();}}return$I;}function
limit($G,$Z,$z,$Ug=0,$jj=" "){return" $G$Z".($z?$jj."LIMIT $z".($Ug?" OFFSET $Ug":""):"");}function
limit1($R,$G,$Z,$jj="\n"){return
limit($G,$Z,1,0,$jj);}function
db_collation($j,array$sb){$I=null;$h=get_val("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$h,$B))$I=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$h,$B))$I=$sb[$B[1]][-1];return$I;}function
logged_user(){return
get_val("SELECT USER()");}function
tables_list(){return
get_key_vals("SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME");}function
count_tables(array$i){$I=array();foreach($i
as$j)$I[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$I;}function
table_status($C="",$pd=false){$I=array();foreach(get_rows($pd?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($C!="")$J["Name"]=$C;$I[$J["Name"]]=$J;}return$I;}function
is_view(array$S){return$S["Engine"]===null;}function
fk_support(array$S){return
preg_match('~InnoDB|IBMDB2I'.(min_version(5.6)?'|NDB':'').'~i',$S["Engine"]);}function
parse_type($Sd){preg_match('~^([^( ]+)(?:\((.+)\))?( unsigned)?( zerofill)?$~',$Sd,$B);return
array($B[1],$B[2],ltrim($B[3].$B[4]));}function
fields($R){$Of=(connection()->flavor=='maria');$I=array();foreach(get_rows("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($R)." ORDER BY ORDINAL_POSITION")as$J){$m=$J["COLUMN_NAME"];$U=$J["COLUMN_TYPE"];$Wd=$J["GENERATION_EXPRESSION"];$md=$J["EXTRA"];preg_match('~^(VIRTUAL|PERSISTENT|STORED)~',$md,$Vd);list($Qk,$y,$Zk)=parse_type($U);$k=$J["COLUMN_DEFAULT"];if($k!=""){$gf=preg_match('~text|json~',$Qk);if(!$Of&&$gf)$k=preg_replace("~^(_\w+)?('.*')$~",'\2',stripslashes($k));if($Of||$gf){$k=($k=="NULL"?null:preg_replace_callback("~^'(.*)'$~",function($B){return
stripslashes(str_replace("''","'",$B[1]));},$k));}if(!$Of&&preg_match('~binary~',$Qk)&&preg_match('~^0x(\w*)$~',$k,$B))$k=pack("H*",$B[1]);}$I[$m]=array("field"=>$m,"full_type"=>$U,"type"=>$Qk,"length"=>$y,"unsigned"=>$Zk,"default"=>($Vd?($Of?$Wd:stripslashes($Wd)):$k),"null"=>($J["IS_NULLABLE"]=="YES"),"auto_increment"=>($md=="auto_increment"),"on_update"=>(preg_match('~\bon update (\w+)~i',$md,$B)?$B[1]:""),"collation"=>$J["COLLATION_NAME"],"privileges"=>array_flip(explode(",","$J[PRIVILEGES],where,order")),"comment"=>$J["COLUMN_COMMENT"],"primary"=>($J["COLUMN_KEY"]=="PRI"),"generated"=>($Vd[1]=="PERSISTENT"?"STORED":$Vd[1]),);}return$I;}function
indexes($R,$g=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$g)as$J){$C=$J["Key_name"];$I[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?(preg_match('~^(SPATIAL|VECTOR)$~',$J["Index_type"])?$J["Index_type"]:"INDEX"):"UNIQUE")));$I[$C]["columns"][]=$J["Column_name"];$I[$C]["lengths"][]=($J["Index_type"]=="SPATIAL"?null:$J["Sub_part"]);$I[$C]["descs"][]=null;$I[$C]["algorithm"]=$J["Index_type"];}return$I;}function
foreign_keys($R){static$Uh='(?:`(?:[^`]|``)+`|"(?:[^"]|"")+")';$I=array();$Pb=get_val("SHOW CREATE TABLE ".table($R),1);if($Pb){preg_match_all("~CONSTRAINT ($Uh) FOREIGN KEY ?\\(((?:$Uh,? ?)+)\\) REFERENCES ($Uh)(?:\\.($Uh))? \\(((?:$Uh,? ?)+)\\)(?: ON DELETE (".driver()->onActions."))?(?: ON UPDATE (".driver()->onActions."))?~",$Pb,$Rf,PREG_SET_ORDER);foreach($Rf
as$B){preg_match_all("~$Uh~",$B[2],$Cj);preg_match_all("~$Uh~",$B[5],$kk);$I[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('Adminer\idf_unescape',$Cj[0]),"target"=>array_map('Adminer\idf_unescape',$kk[0]),"on_delete"=>($B[6]?:"RESTRICT"),"on_update"=>($B[7]?:"RESTRICT"),);}}return$I;}function
view($C){return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\s+AS\s+~isU','',get_val("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$x=>$X)sort($I[$x]);return$I;}function
information_schema($j,$L=""){return($j=="information_schema")||(min_version(5.5)&&$j=="performance_schema");}function
error(){return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",connection()->error));}function
create_database($j,$rb){return
queries("CREATE DATABASE ".idf_escape($j).($rb?" COLLATE ".q($rb):""));}function
drop_databases(array$i){$I=apply_queries("DROP DATABASE",$i,'Adminer\idf_escape');restart_session();set_session("dbs",null);return$I;}function
rename_database($C,$rb){$I=false;if(create_database($C,$rb)){$T=array();$xl=array();foreach(tables_list()as$R=>$U){if($U=='VIEW')$xl[]=$R;else$T[]=$R;}$I=(!$T&&!$xl)||move_tables($T,$xl,$C);drop_databases($I?array(DB):array());}return$I;}function
auto_increment(){$Ha=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ha="";break;}if($v["type"]=="PRIMARY")$Ha=" UNIQUE";}}return" AUTO_INCREMENT$Ha";}function
alter_table($R,$C,array$n,array$Jd,$wb,$Rc,$rb,$Ga,$Ph){$b=array();foreach($n
as$m){if($m[1]){$k=$m[1][3];if(preg_match('~ GENERATED~',$k)){$m[1][3]=(connection()->flavor=='maria'?"":$m[1][2]);$m[1][2]=$k;}$b[]=($R!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($R!=""?$m[2]:"");}else$b[]="DROP ".idf_escape($m[0]);}$b=array_merge($b,$Jd);$P=($wb!==null?" COMMENT=".q($wb):"").($Rc?" ENGINE=".q($Rc):"").($rb?" COLLATE ".q($rb):"").($Ga!=""?" AUTO_INCREMENT=$Ga":"");if($Ph){$Qh=array();if($Ph["partition_by"]=='RANGE'||$Ph["partition_by"]=='LIST'){foreach($Ph["partition_names"]as$x=>$X){$Y=$Ph["partition_values"][$x];$Qh[]="\n  PARTITION ".idf_escape($X)." VALUES ".($Ph["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$P
.="\nPARTITION BY $Ph[partition_by]($Ph[partition])";if($Qh)$P
.=" (".implode(",",$Qh)."\n)";elseif($Ph["partitions"])$P
.=" PARTITIONS ".(+$Ph["partitions"]);}elseif($Ph===null)$P
.="\nREMOVE PARTITIONING";if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$b)."\n)$P");if($R!=$C)$b[]="RENAME TO ".table($C);if($P)$b[]=ltrim($P);return($b?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$b)):true);}function
alter_indexes($R,$b){$bb=array();foreach($b
as$X)$bb[]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$bb));}function
truncate_tables(array$T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views(array$xl){return
queries("DROP VIEW ".implode(", ",array_map('Adminer\table',$xl)));}function
drop_tables(array$T){return
queries("DROP TABLE ".implode(", ",array_map('Adminer\table',$T)));}function
move_tables(array$T,array$xl,$kk){$Ji=array();foreach($T
as$R)$Ji[]=table($R)." TO ".idf_escape($kk).".".table($R);if(!$Ji||queries("RENAME TABLE ".implode(", ",$Ji))){$kc=array();foreach($xl
as$R)$kc[table($R)]=view($R);connection()->select_db($kk);$j=idf_escape(DB);foreach($kc
as$C=>$wl){if(!queries("CREATE VIEW $C AS ".str_replace(" $j."," ",$wl["select"]))||!queries("DROP VIEW $j.$C"))return
false;}return
true;}return
false;}function
copy_tables(array$T,array$xl,$kk){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($kk==DB?table("copy_$R"):idf_escape($kk).".".table($R));if(($_POST["overwrite"]&&!queries("\nDROP TABLE IF EXISTS $C"))||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$J){$Ik=$J["Trigger"];if(!queries("CREATE TRIGGER ".($kk==DB?idf_escape("copy_$Ik"):idf_escape($kk).".".idf_escape($Ik))." $J[Timing] $J[Event] ON $C FOR EACH ROW\n$J[Statement];"))return
false;}}foreach($xl
as$R){$C=($kk==DB?table("copy_$R"):idf_escape($kk).".".table($R));$wl=view($R);if(($_POST["overwrite"]&&!queries("DROP VIEW IF EXISTS $C"))||!queries("CREATE VIEW $C AS $wl[select]"))return
false;}return
true;}function
trigger($C,$R){if($C=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){$K=get_rows("SELECT PARAMETER_NAME, DTD_IDENTIFIER, PARAMETER_MODE, CHARACTER_SET_NAME
FROM information_schema.PARAMETERS
WHERE SPECIFIC_SCHEMA = DATABASE() AND ROUTINE_TYPE = '$U' AND SPECIFIC_NAME = ".q($C)."
ORDER BY ORDINAL_POSITION");$n=array();foreach($K
as$J){$Sd=$J["DTD_IDENTIFIER"];list($Qk,$y,$Zk)=parse_type($Sd);$n[]=array("field"=>$J["PARAMETER_NAME"],"type"=>$Qk,"length"=>$y,"unsigned"=>$Zk,"null"=>true,"full_type"=>$Sd,"inout"=>($U=="FUNCTION"?"":$J["PARAMETER_MODE"]),"collation"=>$J["CHARACTER_SET_NAME"],);}$I=connection()->query("SELECT
	ROUTINE_COMMENT comment,
	CONCAT(IF(IS_DETERMINISTIC = 'YES', 'DETERMINISTIC\\n', ''), IF(SQL_DATA_ACCESS != 'CONTAINS SQL', CONCAT(SQL_DATA_ACCESS, '\\n'), ''), ROUTINE_DEFINITION) definition,
	'SQL' language
FROM information_schema.ROUTINES
WHERE ROUTINE_SCHEMA = DATABASE() AND ROUTINE_TYPE = '$U' AND ROUTINE_NAME = ".q($C))->fetch_assoc();if($n&&$n[0]['field']=='')$I['returns']=array_shift($n);$I['fields']=$n;return$I;}function
routines(){return
get_rows("SELECT SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = DATABASE()");}function
routine_languages(){return
array();}function
routine_id($C,array$J){return
idf_escape($C);}function
last_id($H){return
get_val("SELECT LAST_INSERT_ID()");}function
explain(Db$f,$G){return$f->query("EXPLAIN ".(min_version(5.7)?"":"PARTITIONS ").$G);}function
found_rows(array$S,array$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
create_sql($R,$Ga,$Qj){$I=get_val("SHOW CREATE TABLE ".table($R),1);if(!$Ga)$I=preg_replace('~(\n\)[^\n]*?) AUTO_INCREMENT=\d+~','\1',$I);return$I;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($bc,$Qj=""){$C=idf_escape($bc);$I="";if(preg_match('~CREATE~',$Qj)&&($h=get_val("SHOW CREATE DATABASE $C",1))){set_utf8mb4($h);if($Qj=="DROP+CREATE")$I="DROP DATABASE IF EXISTS $C;\n";$I
.="$h;\n";}return$I."USE $C";}function
trigger_sql($R){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$J)$I
.="\nCREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_rows("SHOW VARIABLES");}function
show_status(){return
get_rows("SHOW STATUS");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
convert_field(array$m){if(preg_match("~binary~",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if($m["type"]=="bit")return"BIN(".idf_escape($m["field"])." + 0)";if($m["type"]=="vector")return(connection()->flavor=='maria'?"VEC_ToText":"VECTOR_TO_STRING")."(".idf_escape($m["field"]).")";if(preg_match("~geometry|point|linestring|polygon~",$m["type"]))return(min_version(8)?"ST_":"")."AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field(array$m,$I){if(preg_match("~binary~",$m["type"]))$I="UNHEX($I)";if($m["type"]=="bit")$I="CONVERT(b$I, UNSIGNED)";if($m["type"]=="vector")$I=(connection()->flavor=='maria'?"VEC_FromText":"STRING_TO_VECTOR")."($I)";if(preg_match("~geometry|point|linestring|polygon~",$m["type"])){$ii=(min_version(8)?"ST_":"");$I=$ii."GeomFromText($I, $ii"."SRID($m[field]))";}return$I;}function
support($qd){return
preg_match('~^(comment|columns|copy|database|drop_col|dump|event|indexes|kill|privileges|move_col|procedure|processlist|routine|sql|status|table|trigger|variables|view'.(min_version(8)?'|descidx':'').(min_version('8.0.16','10.2.1')?'|check':'').(min_version(8,99)?'|fast_status':'').')$~',$qd);}function
kill_process($t){return
queries("KILL ".number($t));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){return
get_val("SELECT @@max_connections");}function
types($ld=false){return
array();}function
type_values($t){return"";}function
type_definition($t){return
array("kind"=>"","definition"=>"");}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($L,$g=null){return
true;}}define('Adminer\JUSH',Driver::$jush);define('Adminer\SERVER',"".$_GET[DRIVER]);define('Adminer\DB',"$_GET[db]");define('Adminer\ME',preg_replace('~\?.*~','',relative_uri()).'?'.(sid()?SID.'&':'').($_GET["ext"]?"ext=".url_escape($_GET["ext"]).'&':'').(isset($_GET[DRIVER])?DRIVER."=".url_escape(SERVER).'&':'').(isset($_GET["username"])?"username=".url_escape($_GET["username"]).'&':'').(DB!=""?'db='.url_escape(DB).'&'.(isset($_GET["ns"])?"ns=".url_escape($_GET["ns"])."&":""):''));function
page_header($uk,$l="",$Ua=array(),$vk=""){page_headers();if(is_ajax()&&$l){page_messages($l);exit;}if(!ob_get_level())ob_start('ob_gzhandler',4096);$wk=$uk.($vk!=""?": $vk":"");$xk=strip_tags($wk.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".adminer()->name());echo'<!DOCTYPE html>
<html lang=\'',LANG,'\' dir=\'',lang(90),'\' class=\'',lang(90),' nojs\'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>',$xk,'</title>
<link rel="stylesheet" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=6.0.0"),'">
';$Tb=adminer()->css();if(is_int(key($Tb)))$Tb=array_fill_keys($Tb,'light');$ie=in_array('light',$Tb)||in_array('',$Tb);$ge=in_array('dark',$Tb)||in_array('',$Tb);$Xb=($ie?($ge?null:false):($ge?:null));$fg=" media='(prefers-color-scheme: dark)'";if($Xb!==false)echo"<link rel='stylesheet'".($Xb?"":$fg)." href='".h(preg_replace("~\\?.*~","",ME)."?file=dark.css&version=6.0.0")."'>\n";echo"<meta name='color-scheme' content='".($Xb===null?"light dark":($Xb?"dark":"light"))."'>\n",script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=6.0.0");if(adminer()->head($Xb))echo"<link rel='icon' href='data:image/gif;base64,"."R0lGODlhEAAQAJEAAAQCBPz+/PwCBAROZCH5BAEAAAAALAAAAAAQABAAAAI2hI+pGO1rmghihiUdvUBnZ3XBQA7f05mOak1RWXrNq5nQWHMKvuoJ37BhVEEfYxQzHjWQ5qIAADs='>\n","<link rel='apple-touch-icon' href='".h(preg_replace("~\\?.*~","",ME)."?file=logo.png&version=6.0.0")."'>\n";foreach($Tb
as$el=>$tg){$c=($tg=='dark'&&!$Xb?$fg:($tg=='light'&&$ge?" media='(prefers-color-scheme: light)'":""));echo"<link rel='stylesheet'$c href='".h($el)."'>\n";}echo"\n<body class='";adminer()->bodyClass();echo"'>\n",script((isset($_COOKIE["adminer_version"])||!adminer()->verifyVersion()?"":"onload = partial(verifyVersion, '".VERSION."');\n")."
const offlineMessage = '".js_escape(lang(91))."';
const thousandsSeparator = '".js_escape(lang(5))."';
const urlSeparators = '".js_escape(ini_get("arg_separator.input"))."';"),"<div id='help' class='jush-".JUSH." jsonly hidden'".on('mouseover','helpKeep').on('mouseout','helpMouseout')."></div>\n","<div id='content'>\n","<span id='menuopen' class='jsonly'".on('click','menuToggle')."><button title='".lang(92)."' class='icon icon-move' aria-expanded='false'></button></span>\n";if($Ua!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?:".").'">'.get_driver(DRIVER).'</a> » ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=adminer()->serverName(SERVER);$N=($N!=""?$N:lang(37));if($Ua===false)echo"$N\n";else{echo"<a href='".h($_)."' accesskey='1' title='Alt+Shift+1'>$N</a> » ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($_."&db=".url_escape(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> » ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> » ';foreach($Ua
as$x=>$X){$mc=(is_array($X)?$X[1]:h($X));if($mc!="")echo"<a href='".h(ME."$x=").url_escape(is_array($X)?$X[0]:$X)."'>$mc</a> » ";}}echo"$uk\n";}}echo"<h2>$wk</h2>\n","<div id='ajaxstatus' role='status' class='jsonly'></div>\n";restart_session();page_messages($l);$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;stop_session();define('Adminer\PAGE_HEADER',1);ob_flush();flush();}function
page_headers(){header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach(adminer()->csp(csp())as$Sb){$me=array();foreach($Sb
as$x=>$X)$me[]="$x $X";header("Content-Security-Policy: ".implode("; ",$me));}adminer()->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self' https://www.adminer.org","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
design_checksums(){$kl=array();foreach(array_keys(adminer()->css())as$el)$kl[preg_replace('~\?.*~','',$el)]=true;$I=array();foreach(array("adminer.css","adminer-dark.css")as$o){if($kl[$o]&&file_exists($o)){preg_match('~^/\* Adminer design ([-\w]+) \*/~',file_get_contents($o),$B);$I[$o]=array((string)$B[1],Plugins::checksum($o));}}return$I;}function
official_design_checksums(){return
array('adminer-border/adminer-dark.css'=>'b2527e3','adminer-border/adminer.css'=>'430977ad','adminer-dark/adminer-dark.css'=>'a26bcd7b','brade/adminer.css'=>'be4161f0','bueltge/adminer.css'=>'1a8f00b4','dracula/adminer-dark.css'=>'cfaf61dd','esterka/adminer.css'=>'1f805f36','flat/adminer.css'=>'49a61af9','galkaev/adminer-dark.css'=>'16c46f94','haeckel/adminer.css'=>'147a3565','hever/adminer.css'=>'78b8cd43','konya/adminer.css'=>'3cc606c5','lavender-light/adminer.css'=>'bf03f5d7','lucas-sandery/adminer.css'=>'6596353','mancave/adminer-dark.css'=>'e1ac813d','mvt/adminer.css'=>'ebd3afdc','nette/adminer.css'=>'5ab360e7','ng9/adminer.css'=>'488583cf','nicu/adminer.css'=>'ecb9bd1e','pappu687/adminer.css'=>'b58d128c','paranoiq/adminer.css'=>'64d27e5','pepa-linha/adminer.css'=>'baf25f0','pokorny/adminer.css'=>'ee9eea6d','price/adminer.css'=>'b3c939b2','rmsoft/adminer.css'=>'391d54ad','rmsoft_blue-dark/adminer.css'=>'17714d77','rmsoft_blue/adminer.css'=>'c0f192ea','win98/adminer.css'=>'e82d63c3',);}function
version_iframe(){return(isset($_COOKIE["adminer_version"])||!adminer()->verifyVersion()?"":"<noscript><iframe sandbox src='https://www.adminer.org/version/?current=".VERSION."&amp;noscript=1'></iframe></noscript>");}function
get_nonce(){static$Jg;if(!$Jg)$Jg=base64_encode(rand_string());return$Jg;}function
page_messages($l){$dl=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$mg=idx($_SESSION["messages"],$dl);if($mg){echo"<div class='message'>".implode("</div>\n<div class='message'>",$mg)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$dl]);}if($l)echo"<div class='error'>$l</div>\n";if(adminer()->error)echo"<div class='error'>".adminer()->error."</div>\n";}function
page_footer($sg=""){echo"</div>\n\n<div id='foot' class='foot'>\n<div id='menu'>\n";adminer()->navigation($sg);echo"</div>\n";if($sg!="auth")echo'<form action="" method="post">
<p class="logout">
<span title="',lang(39),'">',h($_GET["username"])."\n",'</span>
<input type=\'submit\' name=\'logout\' value=\'',lang(93),'\' id=\'logout\'>
',input_token(),'</form>
';echo"</div>\n\n",script("setupSubmitHighlight(document);");}function
int32($yg){while($yg>=2147483648)$yg-=4294967296;while($yg<=-2147483649)$yg+=4294967296;return(int)$yg;}function
long2str(array$W,$zl){$Xi='';foreach($W
as$X)$Xi
.=pack('V',$X);if($zl)return
substr($Xi,0,end($W));return$Xi;}function
str2long($Xi,$zl){$W=array_values(unpack('V*',str_pad($Xi,4*ceil(strlen($Xi)/4),"\0")));if($zl)$W[]=strlen($Xi);return$W;}function
xxtea_mx($Gl,$Fl,$Tj,$mf){return
int32((($Gl>>5&0x7FFFFFF)^$Fl<<2)+(($Fl>>3&0x1FFFFFFF)^$Gl<<4))^int32(($Tj^$Fl)+($mf^$Gl));}function
encrypt_string($Oj,$x){if($Oj=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Oj,true);$yg=count($W)-1;$Gl=$W[$yg];$Fl=$W[0];$ti=floor(6+52/($yg+1));$Tj=0;while($ti-->0){$Tj=int32($Tj+0x9E3779B9);$Jc=$Tj>>2&3;for($Dh=0;$Dh<$yg;$Dh++){$Fl=$W[$Dh+1];$xg=xxtea_mx($Gl,$Fl,$Tj,$x[$Dh&3^$Jc]);$Gl=int32($W[$Dh]+$xg);$W[$Dh]=$Gl;}$Fl=$W[0];$xg=xxtea_mx($Gl,$Fl,$Tj,$x[$Dh&3^$Jc]);$Gl=int32($W[$yg]+$xg);$W[$yg]=$Gl;}return
long2str($W,false);}function
decrypt_string($Oj,$x){if($Oj=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Oj,false);$yg=count($W)-1;$Gl=$W[$yg];$Fl=$W[0];$ti=floor(6+52/($yg+1));$Tj=int32($ti*0x9E3779B9);while($Tj){$Jc=$Tj>>2&3;for($Dh=$yg;$Dh>0;$Dh--){$Gl=$W[$Dh-1];$xg=xxtea_mx($Gl,$Fl,$Tj,$x[$Dh&3^$Jc]);$Fl=int32($W[$Dh]-$xg);$W[$Dh]=$Fl;}$Gl=$W[$yg];$xg=xxtea_mx($Gl,$Fl,$Tj,$x[$Dh&3^$Jc]);$Fl=int32($W[0]-$xg);$W[0]=$Fl;$Tj=int32($Tj-0x9E3779B9);}return
long2str($W,true);}$Wh=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$Wh[$x]=$X;}}function
add_invalid_login(){$Na=get_temp_dir()."/adminer-invalid";foreach(glob("$Na*")?:array($Na)as$o){$q=file_open_lock($o);if($q)break;}if(!$q)$q=file_open_lock("$Na-".rand_string());if(!$q)return;$af=json_decode(stream_get_contents($q),true);$rk=time();if($af){foreach($af
as$bf=>$X){if($X[0]<$rk)unset($af[$bf]);}}$Ze=&$af[adminer()->bruteForceKey()];if(!$Ze)$Ze=array($rk+30*60,0);$Ze[1]++;file_write_unlock($q,json_encode($af));}function
check_invalid_login(array&$Wh){$af=array();foreach(glob(get_temp_dir()."/adminer-invalid*")as$o){$q=file_open_lock($o);if($q){$af=json_decode(stream_get_contents($q),true);file_unlock($q);break;}}$x=adminer()->bruteForceKey();$Ze=idx($af,$x,array());$Ig=($Ze[1]>29?$Ze[0]-time():0);if($Ig>0){$l=lang(94,ceil($Ig/60));if($_SERVER["HTTP_X_FORWARDED_FOR"]!=""&&$x==$_SERVER["REMOTE_ADDR"])$l
.='<br>'.lang(95,'<b>login-reverse-proxy</b>'," href='https://www.adminer.org/plugins/?version=".VERSION."'".target_blank());auth_error($l,$Wh);}}function
password_required(){static$I;if($I===null){$I=(bool)get_session("password_required");if(!$I){$Rb=adminer()->credentials();$I=!is_object(Driver::connect($Rb[0],$Rb[1],""));if($I)set_session("password_required",true);}}return$I;}$Fa=$_POST["auth"];if($Fa){session_regenerate_id();$ul=$Fa["driver"];$N=$Fa["server"];$V=$Fa["username"];$E=(string)$Fa["password"];$j=$Fa["db"];set_password($ul,$N,$V,$E);$_SESSION["db"][$ul][$N][$V][$j]=true;if($Fa["permanent"]){$x=implode("-",array_map('base64_encode',array($ul,$N,$V,$j)));$oi=adminer()->permanentLogin(true);$Wh[$x]="$x:".base64_encode($oi?encrypt_string($E,$oi):"");cookie("adminer_permanent",implode(" ",$Wh));}if(count($_POST)==1||DRIVER!=$ul||SERVER!=$N||$_GET["username"]!==$V||DB!=$j)redirect(auth_url($ul,$N,$V,$j));}elseif($_POST["logout"]&&(!$_SESSION["token"]||verify_token())){foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent($Wh);redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(96).' '.lang(97));}elseif($Wh&&!$_SESSION["pwds"]){session_regenerate_id();$oi=adminer()->permanentLogin();foreach($Wh
as$x=>$X){list(,$lb)=explode(":",$X);list($ul,$N,$V,$j)=array_map('base64_decode',explode("-",$x));set_password($ul,$N,$V,decrypt_string(base64_decode($lb),$oi));$_SESSION["db"][$ul][$N][$V][$j]=true;}}function
unset_permanent(array&$Wh){foreach($Wh
as$x=>$X){list($ul,$N,$V,$j)=array_map('base64_decode',explode("-",$x));if($ul==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$j==DB)unset($Wh[$x]);}cookie("adminer_permanent",implode(" ",$Wh));}function
auth_error($l,array&$Wh){$sj=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$sj]||$_GET[$sj])&&!$_SESSION["token"])$l=lang(98);else{restart_session();add_invalid_login();$E=get_password();if($E!==null){if($E===false)$l
.=($l?'<br>':'').lang(99,target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent($Wh);}}if(!$_COOKIE[$sj]&&$_GET[$sj]&&ini_bool("session.use_only_cookies"))$l=lang(100);$Hh=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?:rand_string()),$Hh["lifetime"]);if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);page_header(lang(42),$l,null);echo"<form action='' method='post'>\n","<div>";if(hidden_fields($_POST,array("auth")))echo"<p class='message'>".lang(101)."\n";echo"</div>\n";adminer()->loginForm();echo"</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])&&!class_exists('Adminer\Db')){unset($_SESSION["pwds"][DRIVER]);unset_permanent($Wh);page_header(lang(102),lang(103,implode(", ",Driver::$extensions)),false);page_footer("auth");exit;}$f='';if(isset($_GET["username"])&&is_string(get_password())){list($ue,$bi)=host_port(SERVER);if(preg_match('~[^-\w.:/]~',$ue.$bi))auth_error(lang(104),$Wh);if(preg_match('~^-?\d+~',$bi,$B)&&($B[0]<1024||$B[0]>65535))auth_error(lang(105),$Wh);check_invalid_login($Wh);$Rb=adminer()->credentials();$f=Driver::connect($Rb[0],$Rb[1],$Rb[2]);if(is_object($f)){Db::$instance=$f;Driver::$instance=new
Driver($f);if($f->flavor)save_settings(array("vendor-".DRIVER."-".SERVER=>get_driver(DRIVER)));}}$Mf=null;if(!is_object($f)||($Mf=adminer()->login($_GET["username"],get_password()))!==true){$l=(is_string($f)?nl_br(h($f)):(is_string($Mf)?$Mf:lang(106))).(preg_match('~^ | $~',get_password())?'<br>'.lang(107):'');auth_error($l,$Wh);}if($_POST["logout"]&&$_SESSION["token"]&&!verify_token()){page_header(lang(93),lang(108));page_footer("db");exit;}if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);stop_session(true);if($Fa&&$_POST["token"])$_POST["token"]=get_token();$l='';if($_POST){if(!verify_token())$l=lang(108).' '.lang(109);}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$l=lang(110,"<b>post_max_size</b>'");if(isset($_GET["sql"]))$l
.=' '.lang(111);}function
print_select_result($H,$g=null,array$sh=array(),&$z=0){$If=array();$w=array();$e=array();$Sa=array();$Rk=array();$I=array();for($s=0;(!$z||$s<$z)&&($J=$H->fetch_row());$s++){if(!$s){echo"<div class='scrollable'>\n","<table class='nowrap odds'>\n","<thead><tr>";for($if=0;$if<count($J);$if++){$m=$H->fetch_field();$C=$m->name;$rh=(isset($m->orgtable)?$m->orgtable:"");$qh=(isset($m->orgname)?$m->orgname:$C);if($sh&&JUSH=="sql")$If[$if]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($rh!=""){if(isset($m->table))$I[$m->table]=$rh;if(!isset($w[$rh])){$w[$rh]=array();foreach(indexes($rh,$g)as$v){if($v["type"]=="PRIMARY"){$w[$rh]=array_flip($v["columns"]);break;}}$e[$rh]=$w[$rh];}if(isset($e[$rh][$qh])){unset($e[$rh][$qh]);$w[$rh][$qh]=$if;$If[$if]=$rh;}}if($m->charsetnr==63)$Sa[$if]=true;$Rk[$if]=$m->type;echo"<th title='".h(trim(($rh!=""?"$rh.$qh":($m->name!=$qh?$qh:""))." ".driver()->typeName($m)))."'>".h($C).($sh?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C),'mariadb'=>"explain/#the-columns-in-explain-select",)):"");}echo"<tbody>\n";}echo"<tr>";foreach($J
as$x=>$X){$_="";if(isset($If[$x])&&!$e[$If[$x]]){if($sh&&JUSH=="sql"){$R=$J[array_search("table=",$If)];$_=ME.$If[$x].url_escape($sh[$R]!=""?$sh[$R]:$R);}else{$_=ME."edit=".url_escape($If[$x]);foreach($w[$If[$x]]as$pb=>$if){if($J[$if]===null){$_="";break;}$_
.="&where[".url_escape(bracket_escape($pb))."]=".url_escape($J[$if]);}}}$m=array('type'=>($Sa[$x]?'blob':($Rk[$x]==254?'char':'')),);$X=select_value($X,$_,$m,null);echo"<td".($Rk[$x]<=9||$Rk[$x]==246?" class='number'":"").">$X";}}$z=$s;echo($s?"</table>\n</div>":"<p class='message'>".lang(15))."\n";return$I;}function
referencable_primary($hj){$I=array();foreach(table_status('',true)as$bk=>$R){if($bk!=$hj&&fk_support($R)){foreach(fields($bk)as$m){if($m["primary"]){if($I[$bk]){unset($I[$bk]);break;}$I[$bk]=$m;}}}}return$I;}function
textarea($C,$Y,$K=10,$tb=80){echo"<textarea name='".h($C)."' rows='$K' cols='$tb' class='sqlarea jush-".JUSH."' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
select_input($c,array$mh,$Y="",$Xh=""){if($mh&&$Y!=""&&!isset($mh[$Y]))$mh=array($Y=>$Y)+$mh;$jk=($mh?"select":"input");return"<$jk$c".($mh?"><option value=''>$Xh".optionlist($mh,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Xh'>");}function
json_row($x,$X=null,$Zc=true){static$Bd=true;if($Bd)echo"{";if($x!=""){echo($Bd?"":",")."\n\t\"".addcslashes($x,"\r\n\t\"\\/").'": '.($X!==null?($Zc?'"'.addcslashes($X,"\r\n\"\\/").'"':$X):'null');$Bd=false;}else{echo"\n}\n";$Bd=true;}}function
edit_type($x,array$m,array$sb,array$Ld=array(),array$nd=array()){$U=(string)$m["type"];echo"<td><select name='".h($x)."[type]' class='type' aria-labelledby='label-type'".on_help_value().">";if($U&&!array_key_exists($U,driver()->types())&&!isset($Ld[$U])&&!in_array($U,$nd))$nd[]=$U;$Pj=driver()->structuredTypes();if($Ld)$Pj[lang(112)]=$Ld;echo
optionlist(array_merge($nd,$Pj),$U),"</select><td>","<input name='".h($x)."[length]' value='".h($m["length"])."' size='3'".(!$m["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":"")." aria-labelledby='label-length'>","<td class='options'>",($sb?"<input list='collations' name='".h($x)."[collation]'".option_types($U,'(char|text|enum|set)$')." value='".h($m["collation"])."' placeholder='(".lang(113).")'>":''),(driver()->unsigned?"<select name='".h($x)."[unsigned]'".option_types($U,'^$|'.number_type()).'><option>'.optionlist(driver()->unsigned,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='".h($x)."[on_update]'".option_types($U,'timestamp|datetime').'>'.optionlist(array(""=>"(".lang(114).")","CURRENT_TIMESTAMP"),(preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?"CURRENT_TIMESTAMP":$m["on_update"])).'</select>':''),($Ld?"<select name='".h($x)."[on_delete]'".option_types($U,'`')."><option value=''>(".lang(115).")".optionlist(explode("|",driver()->onActions),$m["on_delete"])."</select> ":" ");}function
option_types($U,$Rk){return" data-types='".h($Rk)."'".(preg_match("~$Rk~",$U)?"":" class='hidden'");}function
process_length($y){$Uc=driver()->enumLength;return(preg_match("~^\\s*\\(?\\s*$Uc(?:\\s*,\\s*$Uc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$Uc~",$y,$Rf)?"(".implode(",",$Rf[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type(array$m,$qb="COLLATE"){return" $m[type]".process_length($m["length"]).(preg_match(number_type(),$m["type"])&&in_array($m["unsigned"],driver()->unsigned)?" $m[unsigned]":"").(preg_match('~char|text|enum|set~',$m["type"])&&$m["collation"]?" $qb ".(JUSH=="mssql"?$m["collation"]:q($m["collation"])):"");}function
process_field(array$m,array$Pk){if($m["on_update"])$m["on_update"]=str_ireplace("current_timestamp()","CURRENT_TIMESTAMP",$m["on_update"]);return
array(idf_escape(trim($m["field"])),process_type($Pk),($m["null"]?" NULL":" NOT NULL"),default_value($m),(preg_match('~timestamp|datetime~',$m["type"])&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
default_value(array$m){if($m["default"]===null)return"";$k=str_replace("\r","",$m["default"]);$Vd=$m["generated"];return(in_array($Vd,driver()->generated)?(JUSH=="mssql"?" AS ($k)".($Vd=="VIRTUAL"?"":" $Vd"):" GENERATED ALWAYS AS ($k) $Vd"):(preg_match('~^GENERATED ~i',$k)?" $k":" DEFAULT ".(preg_match('~char|binary|text|json|enum|set|String~',$m["type"])||preg_match('~^(?![a-z])~i',$k)?(JUSH=="sql"&&preg_match('~text|json~',$m["type"])?"(".q($k).")":q($k)):str_ireplace("current_timestamp()","CURRENT_TIMESTAMP",(JUSH=="sqlite"?"($k)":$k)))));}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields(array$n,array$sb,$U="TABLE",array$Ld=array()){$n=array_values($n);$hc=(($_POST?$_POST["defaults"]:get_setting("defaults"))?"":" class='hidden'");$xb=(($_POST?$_POST["comments"]:get_setting("comments"))?"":" class='hidden'");echo"<thead><tr>\n",($U=="PROCEDURE"?"<td>":""),"<th id='label-name'>".($U=="TABLE"?lang(116):lang(117)),"<td id='label-type'>".lang(53)."<textarea id='enum-edit' rows='4' cols='12' wrap='off' hidden></textarea>".script("qs('#enum-edit').onblur = editingLengthBlur;"),"<td id='label-length'>".lang(118),"<td>".lang(119);if($U=="TABLE")echo"<td id='label-null'>NULL\n","<td><input type='radio' name='auto_increment_col' value=''><abbr id='label-ai' title='".lang(55)."'>AI</abbr>",doc_link(array('sql'=>"example-auto-increment.html",'mariadb'=>"auto_increment/",'sqlite'=>"autoinc.html",'pgsql'=>"datatype-numeric.html#DATATYPE-SERIAL",'mssql'=>"t-sql/statements/create-table-transact-sql-identity-property",)),"<td id='label-default'$hc>".lang(56),(support("comment")?"<td id='label-comment'$xb>".lang(54):"");$yf=!support("move_col");echo"<td>".icon("plus","add[".($yf?count($n):0)."]","+",lang(120),($yf?on('click','editingAddLastRow'):"")),"<tbody".on('click','editingClick').on('input','editingInput').on('keydown','editingKeydown').">\n";foreach($n
as$s=>$m){$s++;$th=$m[($_POST?"orig":"field")];$tc=(isset($_POST["add"][$s-1])||(isset($m["field"])&&!idx($_POST["drop_col"],$s)))&&(support("drop_col")||$th=="");echo"<tr".($tc?"":" hidden").">\n",($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",driver()->inout),$m["inout"]):"")."<th>",(support("move_col")?icon("move","","↕",lang(121))." ":"");if($tc)echo"<input name='fields[$s][field]' value='".h($m["field"])."' data-maxlength='64' autocapitalize='off' aria-labelledby='label-name'".(isset($_POST["add"][$s-1])?" autofocus":"").">";echo
input_hidden("fields[$s][orig]",$th);edit_type("fields[$s]",$m,$sb,$Ld);if($U=="TABLE"){echo"<td><label class='block'>".checkbox("fields[$s][null]",1,$m["null"],"","","","label-null")."</label>","<td><label class='block'><input type='radio' name='auto_increment_col' value='$s'".($m["auto_increment"]?" checked":"")." aria-labelledby='label-ai'></label>","<td$hc>".(driver()->generated?html_select("fields[$s][generated]",array_merge(array("","DEFAULT"),driver()->generated),$m["generated"])." ":checkbox("fields[$s][generated]",1,$m["generated"],"","","","label-default"));$c=" name='fields[$s][default]' aria-labelledby='label-default'";$Y=h($m["default"]);echo(preg_match('~\n~',$m["default"])?"<textarea$c rows='2' cols='30' style='vertical-align: bottom;'>\n$Y</textarea>":"<input$c value='$Y'>");if(support("comment")){$c=" name='fields[$s][comment]' data-maxlength='".(min_version(5.5)?1024:255)."' aria-labelledby='label-comment'";echo"<td$xb>".adminer()->commentInput('COLUMN',$c,$m["comment"]);}}echo"<td>",(support("move_col")?icon("plus","add[$s]","+",lang(120))." ":""),($th==""||support("drop_col")?icon("cross","drop_col[$s]","x",lang(122)):"");}}function
process_fields(array&$n){if($_POST["add"]){$n=array_values($n);array_splice($n,key($_POST["add"]),0,array(array()));}return$_POST["add"]||$_POST["drop_col"];}function
normalize_enum(array$B){$X=$B[0];return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($X[0].$X[0],$X[0],substr($X,1,-1))),'\\'))."'";}function
grant($Xd,array$qi,$e,$ch){if(!$qi)return
true;if($qi==array("ALL PRIVILEGES","GRANT OPTION"))return($Xd=="GRANT"?queries("$Xd ALL PRIVILEGES$ch WITH GRANT OPTION"):queries("$Xd ALL PRIVILEGES$ch")&&queries("$Xd GRANT OPTION$ch"));return
queries("$Xd ".preg_replace('~(GRANT OPTION)\([^)]*\)~','\1',implode("$e, ",$qi).$e).$ch);}function
drop_create($Dc,$h,$Fc,$nk,$Hc,$A,$lg,$jg,$kg,$Zg,$Dg){if($_POST["drop"])query_redirect($Dc,$A,$lg);elseif($Zg=="")query_redirect($h,$A,$kg);elseif(support("transaction_ddl")){driver()->begin();queries_redirect($A,$jg,queries($Dc)&&queries($h)&&driver()->commit());driver()->rollback();}elseif($Zg!=$Dg){$Qb=queries($h);queries_redirect($A,$jg,$Qb&&queries($Dc));if($Qb)queries($Fc);}else
queries_redirect($A,$jg,queries($nk)&&queries($Hc)&&queries($Dc)&&queries($h));}function
create_trigger($ch,array$J){$tk=" $J[Timing] $J[Event]".(preg_match('~ OF~',$J["Event"])?" $J[Of]":"");return"CREATE TRIGGER ".idf_escape($J["Trigger"]).(JUSH=="mssql"?$ch.$tk:$tk.$ch).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
q_dollar($Q){$lc='$$';while(strpos($Q.$lc,$lc)!=strlen($Q))$lc='$_'.substr($lc,1);return$lc.$Q.$lc;}function
create_routine($Si,array$J){$O=array();$n=(array)$J["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$O[]=(preg_match("~^(".driver()->inout.")\$~",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}$jc=rtrim($J["definition"],";");return"CREATE $Si ".idf_escape(trim($J["name"]))." (".implode(", ",$O).")".($Si=="FUNCTION"?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").(JUSH=="pgsql"?" AS ".q_dollar("\n".trim($jc)."\n"):"\n$jc;");}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\1)',logged_user()).'`~','\1',$G);}function
format_foreign_key(array$p){$j=$p["db"];$Kg=$p["ns"];return" FOREIGN KEY (".implode(", ",array_map('Adminer\idf_escape',$p["source"])).") REFERENCES ".($j!=""&&$j!=$_GET["db"]?idf_escape($j).".":"").($Kg!=""&&$Kg!=$_GET["ns"]?idf_escape($Kg).".":"").idf_escape($p["table"])." (".implode(", ",array_map('Adminer\idf_escape',$p["target"])).")".(preg_match("~^(".driver()->onActions.")\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^(".driver()->onActions.")\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"").($p["deferrable"]?" $p[deferrable]":"");}function
tar_file($o,$yk){$I=pack("a100a8a8a8a12a12",$o,644,0,0,decoct($yk->size),decoct(time()));$jb=8*32;for($s=0;$s<strlen($I);$s++)$jb+=ord($I[$s]);$I
.=sprintf("%06o",$jb)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$yk->send();echo
str_repeat("\0",511-($yk->size+511)%512);}function
doc_link(array$Th,$ok="<sup>?</sup>"){$qj=connection()->server_info;$vl=preg_replace('~^(\d\.?\d).*~s','\1',$qj);$fl=array('sql'=>"https://dev.mysql.com/doc/refman/$vl/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/".(connection()->flavor=='cockroach'?"current":$vl)."/",'mssql'=>"https://learn.microsoft.com/en-us/sql/",'oracle'=>"https://www.oracle.com/pls/topic/lookup?ctx=db".preg_replace('~^.* (\d+)\.(\d+)\.\d+\.\d+\.\d+.*~s','\1\2',$qj)."&id=",);if(connection()->flavor=='maria'){$fl['sql']="https://mariadb.com/kb/en/";$Th['sql']=(isset($Th['mariadb'])?$Th['mariadb']:str_replace(".html","/",$Th['sql']));}return($Th[JUSH]?"<a href='".h($fl[JUSH].$Th[JUSH].(JUSH=='mssql'?"?view=sql-server-ver$vl":""))."'".target_blank().">$ok</a>":"");}function
db_size($j){if(!connection()->select_db($j))return"?";$I=0;foreach(table_status()as$S)$I+=$S["Data_length"]+$S["Index_length"];return
format_number($I);}function
set_utf8mb4($h){static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$h)){$O=true;echo"SET NAMES ".charset(connection()).";\n\n";}}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(DB==""&&isset($_GET["ns"]))redirect(remove_from_uri('ns'));if(!(DB!=""?connection()->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(41).": ".h(DB),lang(123),true);}else{if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),lang(124),drop_databases($_POST["db"]));page_header(lang(125),$l,false);echo"<p class='links'>\n";foreach(array('database'=>lang(126),'privileges'=>lang(75),'processlist'=>lang(127),'variables'=>lang(128),'status'=>lang(129),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(130,get_driver(DRIVER),"<b>".h(connection()->server_info)."</b>","<b>".connection()->extension."</b>")."\n","<p>".lang(131,"<b>".h(logged_user())."</b>")."\n";$i=adminer()->databases();if($i){$aj=support("scheme");$sb=collations();echo"<form action='' method='post'>\n","<table class='checkable odds'".on('click','tableClick').on('dblclick','tableClick').">\n","<thead><tr>".(support("database")?"<td class='hover'>":"")."<th".(JUSH!='mssql'?" aria-sort='ascending'":"").">".lang(41).(get_session("dbs")!==null?" - <a href='".h(ME)."refresh=1'>".lang(132)."</a>":"")."<td>".lang(133)."<td>".lang(134)."<td>".lang(135)." - <a href='".h(ME)."dbsize=1'".on('click','ajaxSetHtml',ME."script=connect").">".lang(136)."</a>"."<tbody>\n";$i=($_GET["dbsize"]?count_tables($i):array_flip($i));foreach($i
as$j=>$T){$Ri=h(ME)."db=".url_escape($j);$t=h("Db-".$j);echo"<tr>".(support("database")?"<td class='hover'>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$Ri' id='$t'>".h($j)."</a>";$rb=h(db_collation($j,$sb));echo"<td>".(support("database")?"<a href='$Ri".($aj?"&amp;ns=":"")."&amp;database=' title='".lang(71)."'>$rb</a>":$rb),"<td align='right'><a href='$Ri&amp;schema=' id='tables-".h($j)."' title='".lang(74)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($j)."'>".($_GET["dbsize"]?db_size($j):"?"),"\n";}echo"</table>\n",(support("database")?"<div class='footer'><div>\n"."<fieldset><legend>".lang(137)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''".on('click','countDbs').">\n"."<input type='submit' name='drop' value='".lang(138)."'".confirm().">\n"."</div></fieldset>\n"."</div></div>\n":""),input_token(),"</form>\n",script("tableCheck();");}$pa=adminer();$ai=($pa
instanceof
Plugins?$pa->plugins:array());$Cc=($pa
instanceof
Plugins?$pa->drivers:array());$qc=design_checksums();if($ai||$Cc||$qc){$kb=($pa
instanceof
Plugins?$pa->checksums():array());$Rg=Plugins::officialChecksums();$cl=function($el){return" (<a href='$el'".target_blank()." class='update'>".VERSION."</a>)";};$Zh=function($wd)use($kb,$Rg,$cl){return($kb[$wd]&&$Rg[$wd]&&$kb[$wd]!==$Rg[$wd]?$cl("https://www.adminer.org/plugins/?version=".VERSION):"");};echo"<div class='plugins'>\n","<h3>".lang(139)."</h3>\n<ul>\n";foreach($ai
as$Yh){$Ei=new
\ReflectionObject($Yh);$nc=(method_exists($Yh,'description')?$Yh->description():"");if(!$nc){if(preg_match('~^/[\s*]+(.+)~',$Ei->getDocComment(),$B))$nc=$B[1];}$bj=(method_exists($Yh,'screenshot')?$Yh->screenshot():"");echo"<li><b>".get_class($Yh)."</b>".h($nc?": $nc":"").($bj?" (<a href='".h($bj)."'".target_blank().">".lang(140)."</a>)":"").$Zh(basename((string)$Ei->getFileName(),'.php'))."\n";}foreach($Cc
as$t=>$C)echo"<li><b>".h($t)."</b>: ".h($C).$Zh(basename((string)$pa->driverFiles[$t],'.php'))."\n";if($qc){$Tg=official_design_checksums();foreach($qc
as$o=>$pc){list($C,$jb)=$pc;$Sg=$Tg["$C/$o"];echo"<li><b>".h($o)."</b>".h($C?": $C":"").($Sg&&$Sg!==$jb?$cl("https://www.adminer.org/?version=".VERSION."#extras"):"")."\n";}}echo"</ul>\n";adminer()->pluginsLinks();echo"</div>\n";}}page_footer("db");exit;}if(support("scheme")){if(DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~&db=[^&]+~','\0&ns='.url_escape(get_schema()),relative_uri()));if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(83).h(": $_GET[ns]"),lang(141),true);page_footer("ns");exit;}}}adminer()->afterConnect();class
TmpFile{private$handler;var$size=0;function
__construct(){$this->handler=tmpfile();}function
write($Ib){$this->size+=strlen($Ib);fwrite($this->handler,$Ib);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$H=driver()->select($a,$M,array(where($_GET,$n)),$M);$J=($H?$H->fetch_row():array());echo
driver()->value($J[0],$n[$_GET["field"]]);exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error()?:lang(12);$S=table_status1($a);$C=adminer()->tableName($S);page_header(($n&&is_view($S)?$S['Engine']=='materialized view'?lang(142):lang(143):lang(144)).": ".($C!=""?$C:h($a)),$l);$Qi=array();foreach($n
as$x=>$m)$Qi+=$m["privileges"];adminer()->selectLinks($S,(isset($Qi["insert"])||!support("table")?"":null));$wb=$S["Comment"];if($wb!="")echo"<p class='nowrap'>".lang(54).": ".adminer()->commentValue('TABLE',$wb)."\n";if($n)adminer()->tableStructurePrint($n,$S);function
tables_links(array$T){echo"<ul>\n";foreach($T
as$J){$_=preg_replace('~ns=[^&]*~',"ns=".url_escape($J["ns"]),ME);echo"<li><a href='".h($_."table=".url_escape($J["table"]))."'>".($J["ns"]!=$_GET["ns"]?"<b>".h($J["ns"])."</b>.":"").h($J["table"])."</a>";}echo"</ul>\n";}$Re=driver()->inheritsFrom($a);if($Re){echo"<h3>".lang(145)."</h3>\n";tables_links($Re);}if(support("indexes")&&driver()->supportsIndex($S)){echo"<div>\n","<h3 id='indexes'>".lang(146)."</h3>\n";$w=indexes($a);if($w)adminer()->tableIndexesPrint($w,$S);if(driver()->supportsAlterIndex($S))echo'<p class="links hover"><a href="'.h(ME).'indexes='.url_escape($a).'">'.lang(147)."</a>\n";echo"</div>\n";}if(!is_view($S)){if(fk_support($S)){echo"<div>\n","<h3 id='foreign-keys'>".lang(112)."</h3>\n";$Ld=foreign_keys($a);if($Ld){echo"<table>\n","<thead><tr><th>".lang(148)."<td>".lang(149)."<td>".lang(115)."<td>".lang(114)."<td class='hover'><tbody>\n";foreach($Ld
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('Adminer\h',$p["source"]))."</i>";$_=($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".url_escape($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".url_escape($p["ns"]),ME):ME));echo"<td><a href='".h($_."table=".url_escape($p["table"]))."'>".($p["db"]!=""&&$p["db"]!=DB?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""&&$p["ns"]!=$_GET["ns"]?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('Adminer\h',$p["target"]))."</i>)","<td>".h($p["on_delete"]),"<td>".h($p["on_update"]),'<td class="hover"><a href="'.h(ME.'foreign='.url_escape($a).'&name='.url_escape($C)).'">'.lang(150).'</a>',"\n";}echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'foreign='.url_escape($a).'">'.lang(151)."</a>\n","</div>\n";}if(support("check")){echo"<div>\n","<h3 id='checks'>".lang(152)."</h3>\n";$fb=driver()->checkConstraints($a);if($fb){echo"<table>\n";foreach($fb
as$x=>$X)echo"<tr title='".h($x)."'>","<td><code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim($X)),80,"</code>"),"<td class='hover'><a href='".h(ME.'check='.url_escape($a).'&name='.url_escape($x))."'>".lang(150)."</a>","\n";echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'check='.url_escape($a).'">'.lang(153)."</a>\n","</div>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<div>\n","<h3 id='triggers'>".lang(154)."</h3>\n";$Mk=triggers($a);if($Mk){echo"<table>\n";foreach($Mk
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td class='hover'><a href='".h(ME.'trigger='.url_escape($a).'&name='.url_escape($x))."'>".lang(150)."</a>\n";echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'trigger='.url_escape($a).'">'.lang(155)."</a>\n","</div>\n";}$Qe=driver()->inheritedTables($a);if($Qe){echo"<h3 id='partitions'>".lang(156)."</h3>\n";$Lh=driver()->partitionsInfo($a);if($Lh)echo"<p><code class='jush-".JUSH."'>BY ".h("$Lh[partition_by]($Lh[partition])")."</code>\n";tables_links($Qe);}}elseif(isset($_GET["schema"])){page_header(lang(74),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$dk=array();$ek=array();$td=array();$da=($_GET["schema"]?:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$da,$Rf,PREG_SET_ORDER);foreach($Rf
as$s=>$B){$dk[$B[1]]=array((float)$B[2],(float)$B[3]);$ek[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Ak=0;$Oa=-1;$L=array();$Di=array();$Bf=array();$wa=driver()->allFields();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$F=0;$L[$R]["fields"]=array();foreach($wa[$R]as$m){$F+=1.25;$td[$R][$m["field"]]=$F;$L[$R]["fields"][$m["field"]]=$m;}$L[$R]["pos"]=($dk[$R]?:array($Ak,0));foreach(adminer()->foreignKeys($R)as$X){if(!$X["db"]){$_f=$Oa;if(idx($dk[$R],1)||idx($dk[$X["table"]],1))$_f=min(idx($dk[$R],1,0),idx($dk[$X["table"]],1,0))-1;else$Oa-=.1;while($Bf[(string)$_f])$_f-=.0001;$L[$R]["references"][$X["table"]][(string)$_f]=array($X["source"],$X["target"]);$Di[$X["table"]][$R][(string)$_f]=$X["target"];$Bf[(string)$_f]=true;}}$Ak=max($Ak,$L[$R]["pos"][0]+2.5+$F);}echo'<div id="schema" style="height: ',$Ak,'em;">
<script',nonce(),'>
const tablePos = {',implode(",",$ek)."\n",'};
const em = qs(\'#schema\').offsetHeight / ',$Ak,';
document.onmousemove = schemaMousemove;
document.onmouseup = event => schemaMouseup(event, \'',js_escape(DB),'\');
</script>
';foreach($L
as$C=>$R){echo"<div class='table'".on('mousedown','schemaMousedown')." style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;'>",'<a href="'.h(ME).'table='.url_escape($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$m){$X='<span'.type_class($m["type"]).' title="'.h($m["type"].($m["length"]?"($m[length])":"").($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$lk=>$Fi){foreach($Fi
as$_f=>$Ai){$Af=$_f-idx($dk[$C],1);$s=0;foreach($Ai[0]as$Cj)echo"\n<div class='references' title='".h($lk)."' id='refs$_f-".($s++)."' style='left: $Af"."em; top: ".$td[$C][$Cj]."em; padding-top: .5em;'>"."<div style='border-top: 1px solid gray; width: ".(-$Af)."em;'></div></div>";}}foreach((array)$Di[$C]as$lk=>$Fi){foreach($Fi
as$_f=>$e){$Af=$_f-idx($dk[$C],1);$s=0;foreach($e
as$kk)echo"\n<div class='references arrow' title='".h($lk)."' id='refd$_f-".($s++)."' style='left: $Af"."em; top: ".$td[$C][$kk]."em;'>"."<div style='height: .5em; border-bottom: 1px solid gray; width: ".(-$Af)."em;'></div>"."</div>";}}echo"\n</div>\n";}foreach($L
as$C=>$R){foreach((array)$R["references"]as$lk=>$Fi){if($L[$lk]){foreach($Fi
as$_f=>$Ai){$rg=$Ak;$Zf=-10;foreach($Ai[0]as$x=>$Cj){$ci=$R["pos"][0]+$td[$C][$Cj];$di=$L[$lk]["pos"][0]+$td[$lk][$Ai[1][$x]];$rg=min($rg,$ci,$di);$Zf=max($Zf,$ci,$di);}echo"<div class='references' id='refl$_f' style='left: $_f"."em; top: $rg"."em; padding: .5em 0;'><div style='border-right: 1px solid gray; margin-top: 1px; height: ".($Zf-$rg)."em;'></div></div>\n";}}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".url_escape($da)),'" id="schema-link">',lang(157),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$k=array("auto_increment"=>'');foreach(array("type","routine","event","trigger")as$Vj){if(support($Vj))$k[$Vj."s"]='';}save_settings(array_intersect_key($_POST+$k,array_flip(array("output","format","db_style","table_style","data_style"))+$k),"adminer_export");$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$jd=dump_headers((count($T)==1?key($T):DB),(DB==""||$_GET["ns"]===""||count($T)>1));$ff=preg_match('~sql~',$_POST["format"]);if($ff){echo"-- Adminer ".VERSION." ".get_driver(DRIVER)." ".str_replace("\n"," ",connection()->server_info)." dump\n\n";if(JUSH=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
".($_POST["data_style"]?"SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";connection()->query("SET time_zone = '+00:00'");connection()->query("SET sql_mode = ''");}}$Qj=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){adminer()->dumpDatabase($j);if(connection()->select_db($j)){if($ff&&$Qj)echo
use_sql($j,$Qj).";\n\n";foreach(($_GET["ns"]===""?(array)$_POST["schemas"]:(DB!=""||!support("scheme")?array(""):adminer()->schemas()))as$L){if($L!=""){if(DB==""&&information_schema(DB,$L))continue;set_schema($L);}$Nj=($_POST["table_style"]||$_POST["data_style"]?table_status('',true):array());$id=array();$ac=array();foreach($Nj
as$C=>$S){if(DB==""||$_GET["ns"]===""||in_array($C,(array)$_POST["tables"]))$id[$C]=$S;if(DB==""||$_GET["ns"]===""||in_array($C,(array)$_POST["data"]))$ac[$C]=$S;}if($ff){if($_POST["table_style"]=="DROP+CREATE"&&function_exists('Adminer\drop_sql'))echo
drop_sql($id);if($_POST["data_style"]=="TRUNCATE+INSERT"&&function_exists('Adminer\truncate_all_sql')){$Nk=array();foreach($ac
as$C=>$S){if(!is_view($S)&&!($_POST["table_style"]=="DROP+CREATE"&&isset($id[$C])))$Nk[]=$C;}echo
truncate_all_sql($Nk);}$Ah="";if($_POST["types"]){foreach(types()as$t=>$U){$jc=type_definition($t);$Og=($jc["kind"]=='d'?"DOMAIN":"TYPE");if($jc["definition"])$Ah
.=($Qj!='DROP+CREATE'?"DROP $Og IF EXISTS ".idf_escape($U).";;\n":"")."CREATE $Og ".idf_escape($U)." $jc[definition];\n\n";else$Ah
.="-- Could not export type $U\n\n";}}if($_POST["routines"]){foreach(routines()as$J){$C=$J["ROUTINE_NAME"];$Si=$J["ROUTINE_TYPE"];$h=create_routine($Si,array("name"=>$C)+routine($J["SPECIFIC_NAME"],$Si));set_utf8mb4($h);$Ah
.=($Qj!='DROP+CREATE'?"DROP $Si IF EXISTS ".idf_escape($C).";;\n":"")."$h;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$h=remove_definer(get_val("SHOW CREATE EVENT ".idf_escape($J["Name"]),3));set_utf8mb4($h);$Ah
.=($Qj!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$h;;\n\n";}}echo($Ah&&JUSH=='sql'?"DELIMITER ;;\n\n$Ah"."DELIMITER ;\n\n":$Ah);}if($_POST["table_style"]||$_POST["data_style"]){$xl=array();foreach($Nj
as$C=>$S){$R=array_key_exists($C,$id);$Yb=array_key_exists($C,$ac);if($R||$Yb){$yk=null;if($jd=="tar"){$yk=new
TmpFile;ob_start(array($yk,'write'),1e5);}adminer()->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$xl[]=$C;elseif($Yb){$n=fields($C);$M=array("*");$Lb=convert_fields($n,$n);if($Lb)$M[]=substr($Lb,2);adminer()->dumpData($C,$_POST["data_style"],"",$M);}if($ff&&$_POST["triggers"]&&$R&&($Mk=trigger_sql($C)))echo"\nDELIMITER ;;\n$Mk\nDELIMITER ;\n";if($jd=="tar"){ob_end_flush();tar_file((DB!=""?"":"$j/")."$C.csv",$yk);}elseif($ff)echo"\n";}}if($ff&&$_POST["table_style"]&&function_exists('Adminer\foreign_keys_sql')){foreach($id
as$C=>$S){if(!is_view($S))echo
foreign_keys_sql($C);}}if($ff){foreach($xl
as$wl)adminer()->dumpTable($wl,$_POST["table_style"],1);}if($jd=="tar")echo
pack("x1024");}}}}adminer()->dumpFooter();exit;}page_header(lang(80),$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table class="layout">
';$dc=array('','USE','DROP+CREATE','CREATE');$fk=array('','DROP+CREATE','CREATE');$Zb=array('','TRUNCATE+INSERT','INSERT');if(JUSH=="sql")$Zb[]='INSERT+UPDATE';$J=get_settings("adminer_export");if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");echo"<tr><th>".lang(158)."<td>".html_radios("output",adminer()->dumpOutput(),$J["output"])."\n","<tr><th>".lang(159)."<td>".html_radios("format",adminer()->dumpFormat(),$J["format"])."\n",(JUSH=="sqlite"?"":"<tr><th>".lang(41)."<td>".html_select('db_style',$dc,$J["db_style"]).(support("type")?checkbox("types",1,$J["types"],lang(7)):"").(support("routine")?checkbox("routines",1,$J["routines"],lang(76)):"").(support("event")?checkbox("events",1,$J["events"],lang(78)):"")),"<tr><th>".lang(134)."<td>".html_select('table_style',$fk,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],lang(55)).(support("trigger")?checkbox("triggers",1,$J["triggers"],lang(154)):""),"<tr><th>".lang(160)."<td>".html_select('data_style',$Zb,$J["data_style"]),'</table>
<p><input type=\'submit\' value=\'',lang(80),'\'>
',input_token(),'
<table',on('click','dumpClick'),'>
';$ji=array();if($_GET["ns"]===""){echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-schemas' checked class='jsonly' title='".lang(161)."'".on('click','formCheck','^schemas\[').">".lang(83)."</label>","<tbody>\n";foreach(adminer()->schemas()as$L){if(!information_schema(DB,$L))echo"<tr><td>".checkbox("schemas[]",$L,true,$L,"","block")."\n";}}elseif(DB!=""){$hb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$hb class='jsonly' title='".lang(161)."'".on('click','formCheck','^tables\[').">".lang(144)."</label>","<th style='text-align: right;'><label class='block'>".lang(160)."<input type='checkbox' id='check-data'$hb class='jsonly' title='".lang(161)."'".on('click','formCheck','^data\[')."></label>","<tbody>\n";$xl="";$hk=tables_list();foreach($hk
as$C=>$U){$ii=preg_replace('~_.*~','',$C);$hb=($a==""||$a==(substr($a,-1)=="%"?"$ii%":$C));$ni="<tr><td>".checkbox("tables[]",$C,$hb,$C,"","block");if($U!==null&&!preg_match('~table~i',$U))$xl
.="$ni\n";else
echo"$ni<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$hb)."</label>\n";$ji[$ii]++;}echo$xl;if($hk)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{$i=adminer()->databases();echo"<thead><tr><th style='text-align: left;'>","<label class='block'>".($i?"<input type='checkbox' id='check-databases'".($a==""?" checked":"")." class='jsonly' title='".lang(161)."'".on('click','formCheck','^databases\[').">":"").lang(41)."</label>","<tbody>\n";if($i){foreach($i
as$j){if(!information_schema($j)){$ii=preg_replace('~_.*~','',$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$ii%",$j,"","block")."\n";$ji[$ii]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Bd=true;foreach($ji
as$x=>$X){if($x!=""&&$X>1){echo($Bd?"<p>":" ")."<a href='".h(ME)."dump=".url_escape("$x%")."'>".h($x)."</a>";$Bd=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(75));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(162)."</a>";$H=connection()->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Xd=$H;if(!$H)$H=connection()->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo
input_hidden("db",DB),($Xd?"":input_hidden("grant")),"<table class='odds'>\n","<thead><tr><th>".lang(39)."<th>".lang(37)."<td class='hover'><tbody>\n";while($J=$H->fetch_assoc())echo'<tr><td>'.h($J["User"]),"<td>".h($J["Host"]),'<td class="hover"><a href="'.h(ME.'user='.url_escape($J["User"]).'&host='.url_escape($J["Host"])).'">'.lang(13)."</a>\n";if(!$Xd||DB!="")echo"<tr><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(13)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){save_settings(array("output"=>$_POST["output"],"format"=>$_POST["format"]),"adminer_import");dump_headers("sql");if($_POST["format"]=="sql")echo"$_POST[query]\n";else{adminer()->dumpTable("","");adminer()->dumpData("","table",$_POST["query"]);adminer()->dumpFooter();}exit;}restart_session();$se=&get_session("queries");$re=&$se[DB];if(!$l&&$_POST["clear"]){$re=array();redirect(remove_from_uri("history"));}stop_session();$qa=get_settings("adminer_import");if($_POST&&$qa)save_settings($qa,"adminer_import");page_header((isset($_GET["import"])?lang(79):lang(68)),$l);$Hf=driver()->lineComment();if(!$l&&$_POST&&!(isset($_GET["import"])&&adminer()->importProcess())){$lc=driver()->delimiter;$q=false;if(!isset($_GET["import"]))$G=$_POST["query"];elseif($_POST["webfile"]){$Gj=adminer()->importServerPath();$q=@fopen((file_exists($Gj)?$Gj:"compress.zlib://$Gj.gz"),"rb");$G=($q?fread($q,1e6):false);}else$G=get_file("sql_file",true,$lc);if(is_string($G)){if(($gg=ini_bytes("memory_limit"))!="-1")ini_set("memory_limit",max($gg,strval(2*strlen($G)+memory_get_usage()+8e6)));if($G!=""&&strlen($G)<1e6){$ti=$G.(preg_match("~$lc\\s*\$~",$G)?"":$lc);if(!$re||first(end($re))!=$ti){restart_session();$re[]=array($ti,time());set_session("queries",$se);stop_session();}}$Dj="(?:\\s|/\\*[\s\S]*?\\*/|(?:$Hf)[^\n]*\n?|--\r?\n)";$Ug=0;$Qc=true;$Nb=false;$g=connect();if($g&&DB!=""){$g->select_db(DB);if($_GET["ns"]!="")set_schema($_GET["ns"],$g);}$vb=0;$Xc=array();$Ih='[\'"'.(JUSH=="sql"?'`':(JUSH=="sqlite"?'`[':(JUSH=="mssql"?'[':''))).']|/\*|'.$Hf.'|$'.(JUSH=="pgsql"?'|\$([a-zA-Z]\w*)?\$':'');$Bk=microtime(true);while($G!=""){if(!$Ug&&preg_match("~^$Dj*+DELIMITER\\s+(\\S+)~i",$G,$B)){$lc=preg_quote($B[1]);$G=substr($G,strlen($B[0]));}elseif(!$Ug&&JUSH=='pgsql'&&preg_match("~^($Dj*+COPY\\s+)[^;]+\\s+FROM\\s+stdin;~i",$G,$B)){$lc="\n\\\\\\.\r?\n";$Nb=true;$Ug=strlen($B[0]);}else{preg_match("($lc\\s*|$Ih)",$G,$B,PREG_OFFSET_CAPTURE,$Ug);list($Nd,$F)=$B[0];if(!$Nd&&$q&&!feof($q))$G
.=fread($q,1e5);else{if(!$Nd&&rtrim($G)=="")break;$Ug=$F+strlen($Nd);if($Nd&&!preg_match("(^$lc)",$Nd)){$Za=driver()->hasCStyleEscapes()||(JUSH=="pgsql"&&($F>0&&strtolower($G[$F-1])=="e"));$Uh=($Nd=='/*'?'\*/':($Nd=='['?']':(preg_match("~^(?:$Hf)~",$Nd)?"\n":preg_quote($Nd).($Za?'|\\\\.':''))));while(preg_match("($Uh|\$)s",$G,$B,PREG_OFFSET_CAPTURE,$Ug)){$Xi=$B[0][0];if(!$Xi&&$q&&!feof($q))$G
.=fread($q,1e5);else{$Ug=$B[0][1]+strlen($Xi);if(!$Xi||$Xi[0]!="\\")break;}}}else{$Qc=false;$ti=substr($G,0,$F+($Nb?3:0));$vb++;$ni="<pre id='sql-$vb'><code class='jush-".JUSH."'>".adminer()->sqlCommandQuery($ti)."</code></pre>\n";if(JUSH=="sqlite"&&preg_match("~^$Dj*+(ATTACH|VACUUM\\b.*\\bINTO)\\b~is",$ti,$B)!==0){echo$ni,"<p class='error'>".lang(163,preg_match('~ATTACH~i',$B[1])?'ATTACH':'VACUUM INTO')."\n";$Xc[]=" <a href='#sql-$vb'>$vb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$ni;ob_flush();flush();}$Mj=microtime(true);if(connection()->multi_query($ti)&&$g&&preg_match("~^$Dj*+USE\\b~i",$ti))$g->query($ti);do{$H=connection()->store_result();if(connection()->error){echo($_POST["only_errors"]?$ni:""),"<p class='error'>".lang(164).(connection()->errno?" (".connection()->errno.")":"").": ".error()."\n";$Xc[]=" <a href='#sql-$vb'>$vb</a>";if($_POST["error_stops"])break
2;}else{$_=ME."sql=".url_escape(trim($ti));$rk=" <span class='time'>(".format_time($Mj).")</span>".(strlen($_)<1900?" <a href='".h($_)."'>".lang(13)."</a>":"");$sa=connection()->affected_rows;$_l=($_POST["only_errors"]?"":driver()->warnings());$Al="warnings-$vb";if($_l)$rk
.=", <a href='#$Al' class='toggle'>".lang(50)."</a>";$gd=null;$sh=null;$hd="explain-$vb";if(is_object($H)){$z=$_POST["limit"];$Mg=$z;$sh=print_select_result($H,$g,array(),$Mg);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Mg=max($H->num_rows,$Mg);echo"<p class='sql-footer'>".($Mg?($z&&$Mg>$z?lang(165,$z):"").lang(166,$Mg):""),$rk;if($g&&preg_match("~^($Dj|\\()*+SELECT\\b~i",$ti)&&($gd=explain($g,$ti)))echo", <a href='#$hd' class='toggle'>Explain</a>";$t="export-$vb";echo", <a href='#$t' class='toggle'>".lang(80)."</a><span id='$t' class='hidden'>: ".html_select("output",adminer()->dumpOutput(),$qa["output"])." ".html_select("format",adminer()->dumpFormat(),$qa["format"]).input_hidden("query",$ti)."<input type='submit' name='export' value='".lang(80)."'".($z?"":on('click','sqlExport')).">".input_token()."</span>\n"."</form>\n";}}else{if(preg_match("~^$Dj*+(CREATE|DROP|ALTER)$Dj++(DATABASE|SCHEMA)\\b~i",$ti)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h(connection()->info)."'>".lang(167,$sa)."$rk\n";}echo($_l?"<div id='$Al' class='hidden'>\n$_l</div>\n":"");if($gd){echo"<div id='$hd' class='hidden explain'>\n";print_select_result($gd,$g,$sh);echo"</div>\n";}}$Mj=microtime(true);}while(connection()->next_result());}$G=substr($G,$Ug);$Ug=0;if($Nb){$lc=driver()->delimiter;$Nb=false;}}}}}if($Qc)echo"<p class='message'>".lang(168)."\n";else{$Fe=connection()->inTransaction();driver()->rollback();if($Fe)echo"<pre><code class='jush-".JUSH."'>ROLLBACK -- Adminer</code></pre>\n";if($_POST["only_errors"])echo"<p class='message'>".lang(169,$vb-count($Xc))," <span class='time'>(".format_time($Bk).")</span>\n";elseif($Xc&&$vb>1)echo"<p class='error'>".lang(164).": ".implode("",$Xc)."\n";}}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form"',(isset($_GET["import"])?"":on('submit','sqlSubmit',remove_from_uri("sql|limit|error_stops|only_errors|history"))),'>
';$ed="<input type='submit' value='".lang(170)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$ti=$_GET["sql"];if($_POST)$ti=$_POST["query"];elseif($_GET["history"]=="all")$ti=$re;elseif($_GET["history"]!="")$ti=idx($re[$_GET["history"]],0);echo"<p>";textarea("query",$ti,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>";adminer()->sqlPrintAfter();echo"$ed\n",lang(171).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{$de=(extension_loaded("zlib")?"[.gz]":"");echo"<fieldset><legend>".lang(172)."</legend><div>","SQL$de: ".file_input(" name='sql_file[]' multiple","\n$ed"),"</div></fieldset>\n";$Ce=adminer()->importServerPath();if($Ce)echo"<fieldset><legend>".lang(173)."</legend><div>",lang(174,"<code>".h($Ce)."$de</code>")," <input type='submit' name='webfile' value='".lang(175)."'>","</div></fieldset>\n";adminer()->importPrint();echo"<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])||$_GET["error_stops"]),lang(176))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])||$_GET["only_errors"]),lang(177))."\n",input_token();if(!isset($_GET["import"])&&$re){print_fieldset("history",lang(178),$_GET["history"]!="");for($X=end($re);$X;$X=prev($re)){$x=key($re);list($ti,$rk,$Mc)=$X;echo'<div><a href="'.h(ME."sql=&history=$x").'" class="hover">'.lang(13)."</a>"." <span class='time' title='".@date('Y-m-d',$rk)."'>".@date("H:i:s",$rk)."</span>"." <code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim(preg_replace("~^(?:$Hf).*~m",'',$ti))),80,"</code>").($Mc?" <span class='time'>($Mc)</span>":"")."</div>\n";}echo"<input type='submit' name='clear' value='".lang(179)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(180)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$bl=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$C=>$m){if((!$bl&&!isset($m["privileges"]["insert"]))||adminer()->fieldName($m)=="")unset($n[$C]);}if($_POST&&!$l&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($bl?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".url_escape($a);$w=indexes($a);$Vk=unique_array($_GET["where"],$w);$wi="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(181),driver()->delete($a,$wi,$Vk?0:1));else{$O=array();foreach($n
as$C=>$m){$X=process_input($m);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($bl){if(!$O)redirect($A);queries_redirect($A,lang(182),driver()->update($a,$O,$wi,$Vk?0:1));if(is_ajax()){page_headers();page_messages($l);exit;}}else{$H=driver()->insert($a,$O);$zf=($H?last_id($H):0);queries_redirect($A,lang(183,($zf?" $zf":"")),$H);}}}$J=null;if($Z){$M=array();foreach($n
as$C=>$m){if(isset($m["privileges"]["select"])){$Ca=($_POST["clone"]&&$m["auto_increment"]?"''":convert_field($m));$M[]=($Ca?"$Ca AS ":"").idf_escape($C);}}$J=array();if(!support("table"))$M=array("*");if($M){$H=driver()->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));if(!$H)$l=error();else{$J=$H->fetch_assoc();if(!$J)$J=false;}if(isset($_GET["select"])&&(!$J||$H->fetch_assoc()))$J=null;}}if(!$n&&driver()->primary!=""){if(!$Z){$H=driver()->select($a,array("*"),array(),array("*"));$J=($H?$H->fetch_assoc():false);if(!$J)$J=array(driver()->primary=>"");}if($J){foreach($J
as$x=>$X){if(!$Z)$J[$x]=null;$n[$x]=array("field"=>$x,"null"=>($x!=driver()->primary),"auto_increment"=>($x==driver()->primary));}}}if($_POST["save"]){$ei=array();foreach((array)$_POST["fields"]as$x=>$X)$ei[bracket_escape($x,true)]=$X;$J=$ei+($J?$J:array());}edit_form($a,$n,$J,$bl,$l);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Nh=driver()->partitionBy;$Rh=($Nh&&$a!=""?driver()->partitionsInfo($a):array());$Ci=referencable_primary($a);$Ld=array();foreach($Ci
as$bk=>$m)$Ld[str_replace("`","``",$bk)."`".str_replace("`","``",$m["field"])]=$bk;$vh=array();$S=array();if($a!=""){$vh=fields($a);$S=table_status1($a);if(count($S)<2)$l=lang(12);}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!$l)save_settings(array("comments"=>$_POST["comments"],"defaults"=>$_POST["defaults"]));if($_POST&&!process_fields($J["fields"])&&!$l){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(184),drop_tables(array($a)));else{$n=array();$wa=array();$gl=false;$Jd=array();$uh=reset($vh);$ua=" FIRST";foreach($J["fields"]as$x=>$m){$p=$Ld[$m["type"]];$Pk=($p!==null?$Ci[$p]:$m);if($m["field"]!=""){if(!$m["generated"])$m["default"]=null;$si=process_field($m,$Pk);$wa[]=array($m["orig"],$si,$ua);if(!$uh||$si!==process_field($uh,$uh)){$n[]=array($m["orig"],$si,$ua);if($m["orig"]!=""||$ua)$gl=true;}if($p!==null)$Jd[idf_escape($m["field"])]=($a!=""&&JUSH!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Ld[$m["type"]],'source'=>array($m["field"]),'target'=>array($Pk["field"]),'on_delete'=>$m["on_delete"],));$ua=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$gl=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$uh=next($vh);if(!$uh)$ua="";}}$Ph=array();if(in_array($J["partition_by"],$Nh)){foreach($J
as$x=>$X){if(preg_match('~^partition~',$x))$Ph[$x]=$X;}foreach($Ph["partition_names"]as$x=>$C){if($C==""){unset($Ph["partition_names"][$x]);unset($Ph["partition_values"][$x]);}}$Ph["partition_names"]=array_values($Ph["partition_names"]);$Ph["partition_values"]=array_values($Ph["partition_values"]);if($Ph==$Rh)$Ph=array();}elseif(preg_match("~partitioned~",$S["Create_options"]))$Ph=null;$ig=lang(185);if($a==""){cookie("adminer_engine",$J["Engine"]);$ig=lang(186);}$C=trim($J["name"]);$A=ME.(support("table")?"table=":"select=").url_escape($C);$H=alter_table($a,$C,(JUSH=="sqlite"&&($gl||$Jd)?$wa:$n),$Jd,($J["Comment"]!=$S["Comment"]?$J["Comment"]:null),($J["Engine"]&&$J["Engine"]!=$S["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$S["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?number($J["Auto_increment"]):""),$Ph);if($H&&!Queries::$queries)redirect($A);queries_redirect($A,$ig,$H);}}page_header(($a!=""?lang(48):lang(81)),$l,array("table"=>$a),h($a));if(!$_POST){$Rk=driver()->types();$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Rk["int"])?"int":(isset($Rk["integer"])?"integer":"")),"on_update"=>"")),"partition_names"=>array(""),);if($a!=""){$J=$S;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($vh
as$m){if($m["generated"])$m["default"]=ltrim($m["default"]);$m["generated"]=$m["generated"]?:(isset($m["default"])?"DEFAULT":"");$J["fields"][]=$m;}if($Nh){$J+=$Rh;$J["partition_names"][]="";$J["partition_values"][]="";}}}$sb=collations();if(is_array(reset($sb)))$sb=call_user_func_array('array_merge',array_values($sb));$Sc=driver()->engines();foreach($Sc
as$Rc){if(!strcasecmp($Rc,$J["Engine"])){$J["Engine"]=$Rc;break;}}$Uf=max_input_vars(12,20);if($Uf){$qe=(count($J["fields"])>$Uf?"":" hidden");echo"<p".($qe?" id='max-fields' data-columns='$Uf'":"")." class='error$qe'>".max_input_vars_error()."\n";}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(187).": <input name='name'".($a==""&&!$_POST?" autofocus":"")." data-maxlength='64' value='".h($J["name"])."' autocapitalize='off'>\n",($Sc?html_select("Engine",array(""=>"(".lang(188).")")+$Sc,$J["Engine"],on('change','helpClose').on_help_value())."\n":"");if($sb)echo"<datalist id='collations'>".optionlist($sb)."</datalist>\n",(preg_match("~sqlite|mssql~",JUSH)?"":"<input list='collations' name='Collation' value='".h($J["Collation"])."' placeholder='(".lang(113).")'>\n");echo"<input type='submit' value='".lang(17)."'>\n";}if(support("columns")){echo"<div class='scrollable'>\n","<table id='edit-fields' class='nowrap'>\n";edit_fields($J["fields"],$sb,"TABLE",$Ld);echo"</table>\n",script("editFields();"),"</div>\n<p>\n",lang(55).": <input type='number' name='Auto_increment' class='size' value='".h($J["Auto_increment"])."'>\n",checkbox("defaults",1,($_POST?$_POST["defaults"]:get_setting("defaults")),lang(189),on('click','columnShowClick',5),"jsonly");$yb=($_POST?$_POST["comments"]:get_setting("comments"));if(support("comment")){echo
checkbox("comments",1,$yb,lang(54),on('click','editingCommentsClick',true),"jsonly").' ';$c=" name='Comment' data-maxlength='".(min_version(5.5)?2048:60)."'".($yb?"":" class='hidden'");echo
adminer()->commentInput('TABLE',$c,$J["Comment"]);}echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';}echo'
';if($a!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$a)),'>
';if($Nh&&(JUSH=='sql'||$a=="")){$Oh=preg_match('~RANGE|LIST~',$J["partition_by"]);print_fieldset("partition",lang(191),$J["partition_by"]);echo"<p>".html_select("partition_by",array_merge(array(""),$Nh),$J["partition_by"],on('change','partitionByChange').on_help_value('.','PARTITION BY $&'))."\n","(<input name='partition' value='".h($J["partition"])."'>)\n",lang(192).": <input type='number' name='partitions' class='size".($Oh||!$J["partition_by"]?" hidden":"")."' value='".h($J["partitions"])."'>\n","<table id='partition-table'".($Oh?"":" class='hidden'").">\n","<thead><tr><th>".lang(193)."<th>".lang(194)."<tbody>\n";foreach($J["partition_names"]as$x=>$X)echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off"'.($x==count($J["partition_names"])-1?on('input','partitionNameChange'):'').'>','<td><input name="partition_values[]" value="'.h(idx($J["partition_values"],$x)).'">';echo"</table>\n</div></fieldset>\n";}echo
input_token(),'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Le=array("PRIMARY","UNIQUE","INDEX");$S=table_status1($a,true);$Ie=driver()->indexAlgorithms($S);if(preg_match('~MyISAM|M?aria'.(min_version(5.6,'10.0.5')?'|InnoDB':'').'~i',$S["Engine"]))$Le[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.(min_version(5.7,'10.2.2')?'|InnoDB':'').'~i',$S["Engine"]))$Le[]="SPATIAL";if(min_version('',11.7)&&preg_match('~MyISAM|InnoDB~i',$S["Engine"]))$Le[]="VECTOR";$w=indexes($a);$n=fields($a);$li=array();if(JUSH=="mongo"){$li=$w["_id_"];unset($Le[0]);unset($w["_id_"]);}$J=$_POST;if($J)save_settings(array("index_options"=>$J["options"]));if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]){$b=array();foreach($J["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$Le)){$e=array();$Ff=array();$oc=array();$hh=array();$Je=(support("partial_indexes")?$v["partial"]:"");$He=(in_array($v["algorithm"],$Ie)?$v["algorithm"]:"");$O=array();ksort($v["columns"]);foreach($v["columns"]as$x=>$d){if($d!=""){$y=idx($v["lengths"],$x);$mc=idx($v["descs"],$x);$gh=idx($v["opclasses"],$x);$O[]=($n[$d]?idf_escape($d):$d).($y?"(".(+$y).")":"").($gh!=""?" ".idf_escape($gh):"").($mc?" DESC":"");$e[]=$d;$Ff[]=($y?:null);$oc[]=$mc;$hh[]="$gh";}}$fd=$w[$C];if($fd){ksort($fd["columns"]);ksort($fd["lengths"]);ksort($fd["descs"]);if($v["type"]==$fd["type"]&&array_values($fd["columns"])===$e&&(!$fd["lengths"]||array_values($fd["lengths"])===$Ff)&&array_values($fd["descs"])===$oc&&(!$fd["opclasses"]||array_values($fd["opclasses"])===$hh)&&$fd["partial"]==$Je&&(!$Ie||$fd["algorithm"]==$He)){unset($w[$C]);continue;}}if($e)$b[]=array($v["type"],$C,$O,$He,$Je);}}foreach($w
as$C=>$fd)$b[]=array($fd["type"],$C,"DROP");if(!$b)redirect(ME."table=".url_escape($a));queries_redirect(ME."table=".url_escape($a),lang(195),alter_indexes($a,$b));}page_header(lang(146),$l,array("table"=>$a),h($a));$vd=array_keys($n);if($_POST["add"]){foreach($J["indexes"]as$x=>$v){if($v["columns"][count($v["columns"])]!="")$J["indexes"][$x]["columns"][]="";}$v=end($J["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($w
as$x=>$v){$w[$x]["name"]=$x;$w[$x]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$J["indexes"]=$w;}$Ff=(JUSH=="sql"||JUSH=="mssql");$hh=driver()->indexOpclasses();$vj=($_POST?$_POST["options"]:get_setting("index_options"));echo'
<form action="" method="post">
<div class="scrollable">
<table class="nowrap odds">
<thead><tr>
<th id="label-type">',lang(196);$Ae=" class='idxopts".($vj?"":" hidden")."'";if($Ie)echo"<th id='label-algorithm'$Ae>".lang(197).doc_link(array('sql'=>'create-index.html#create-index-storage-engine-index-types','mariadb'=>'storage-engine-index-types/','pgsql'=>'indexes-types.html',));echo'<th><input type="submit" hidden>',lang(198).($Ff?"<span$Ae> (".lang(199).")</span>":"");if($Ff||support("descidx"))echo
checkbox("options",1,$vj,lang(119),on('click','indexOptionsShow'),"jsonly")."\n";echo'<th id="label-name">',lang(200);if(support("partial_indexes"))echo"<th id='label-condition'$Ae>".lang(201);echo'<th><noscript>',icon("plus","add[0]","+",lang(120)),'</noscript>
<tbody>
';if($li){echo"<tr><td>PRIMARY<td>";foreach($li["columns"]as$x=>$d)echo
select_input(" disabled",array_combine($vd,$vd),$d),"<label><input disabled type='checkbox'>".lang(63)."</label> ";echo"<td><td>\n";}$if=1;foreach($J["indexes"]as$v){if(!$_POST["drop_col"]||$if!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$if][type]",array(-1=>"")+$Le,$v["type"],($if==count($J["indexes"])?on('change','indexesAddRow'):""),"label-type");if($Ie)echo"<td$Ae>".html_select("indexes[$if][algorithm]",array_merge(array(""),$Ie),$v['algorithm'],"","label-algorithm");echo"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$x=>$d){echo"<span>".select_input(" name='indexes[$if][columns][$s]' title='".lang(52)."'".on('change','indexesChangeColumn',(JUSH=="sql"?"":$_GET["indexes"]."_")),($n&&($d==""||$n[$d])?array_combine($vd,$vd):array()),$d)," <span$Ae>",($Ff?"<input type='number' name='indexes[$if][lengths][$s]' class='size' value='".h(idx($v["lengths"],$x))."' title='".lang(118)."'>":"");if($hh){$gh=idx($v["opclasses"],$x);echo
html_select("indexes[$if][opclasses][$s]",array(""=>"(".lang(202).")")+array_combine($hh,$hh)+($gh!=""?array($gh=>$gh):array()),$gh),doc_link(array('pgsql'=>'indexes-opclass.html'));}echo(support("descidx")?checkbox("indexes[$if][descs][$s]",1,idx($v["descs"],$x),lang(63)):""),"<br>","</span></span>";$s++;}echo"<td><input name='indexes[$if][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n";if(support("partial_indexes"))echo"<td$Ae><input name='indexes[$if][partial]' value='".h($v["partial"])."' autocapitalize='off' aria-labelledby='label-condition'>\n";echo"<td>".icon("cross","drop_col[$if]","x",lang(122),on('click','editingRemoveRow','indexes$1[type]'));}$if++;}echo'</table>
</div>
<p>
<input type=\'submit\' value=\'',lang(17),'\'>
',input_token(),'</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$l&&!$_POST["add"]){$C=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(203),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".url_escape($C),lang(204),rename_database($C,(string)$J["collation"]));}else{$i=explode("\n",str_replace("\r","",$C));$Rj=true;$xf="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,(string)$J["collation"]))$Rj=false;$xf=$j;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".url_escape($xf),lang(205),$Rj);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),lang(206));}}page_header(DB!=""?lang(71):lang(126),$l,array(),h(DB));$sb=collations();$C=DB;if($_POST)$C=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$sb);elseif(JUSH=="sql"){foreach(get_vals("SHOW GRANTS")as$Xd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\.\*)?~',$Xd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add"]||strpos($C,"\n")?'<textarea autofocus name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" autofocus value="'.h($C).'" data-maxlength="64" autocapitalize="off">')."\n",($sb?html_select("collation",array(""=>"(".lang(113).")")+$sb,$J["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mariadb'=>"supported-character-sets-and-collations/",'mssql'=>"relational-databases/system-functions/sys-fn-helpcollations-transact-sql",)):"")."\n",'<input type=\'submit\' value=\'',lang(17),'\'>
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(138)."'".confirm(lang(190,DB)).">\n";elseif(!$_POST["add"]&&$_GET["db"]=="")echo
icon("plus","add[0]","+",lang(120))."\n";echo
input_token(),'</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$l){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(207));else{$C=trim($J["name"]);$_
.=url_escape($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(208));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(209));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(72):lang(73),$l);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" autofocus value="',h($J["name"]),'" autocapitalize="off">
<input type=\'submit\' value=\'',lang(17),'\'>
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(138)."'".confirm(lang(190,$_GET["ns"])).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["call"])){$ca=($_GET["name"]?:$_GET["call"]);page_header(lang(210).": ".h($ca),$l);$Ui=(isset($_GET["callf"])?"FUNCTION":"PROCEDURE");$Si=routine($_GET["call"],$Ui);$De=array();$Ah=array();foreach($Si["fields"]as$s=>$m){if(substr($m["inout"],-3)=="OUT"&&JUSH=='sql')$Ah[$s]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$De[]=$s;}if(!$l&&$_POST){$ab=array();foreach($Si["fields"]as$x=>$m){$X="";if(in_array($x,$De)){$X=process_input($m);if($X===false)$X="''";if(isset($Ah[$x]))connection()->query("SET @".idf_escape($m["field"])." = $X");}if(isset($Ah[$x]))$ab[]="@".idf_escape($m["field"]);elseif(in_array($x,$De))$ab[]=$X;}$G=(isset($_GET["callf"])?"SELECT ":"CALL ").(idx($Si["returns"],"type")=="record"?"* FROM ":"").table($ca)."(".implode(", ",$ab).")";$Mj=microtime(true);$H=connection()->multi_query($G);$sa=connection()->affected_rows;echo
adminer()->selectQuery($G,$Mj,!$H);if(!$H)echo"<p class='error'>".error()."\n";else{$g=connect();if($g)$g->select_db(DB);do{$H=connection()->store_result();if(is_object($H))print_select_result($H,$g);else
echo"<p class='message'>".lang(211,$sa)." <span class='time'>".@date("H:i:s")."</span>\n";}while(connection()->next_result());if($Ah)print_select_result(connection()->query("SELECT ".implode(", ",$Ah)));}}echo'
<form action="" method="post">
';if($De){echo"<table class='layout'>\n";foreach($De
as$x){$m=$Si["fields"][$x];$C=$m["field"];echo"<tr><th>".adminer()->fieldName($m);$Y=idx($_POST["fields"],$C);if($Y!=""){if($m["type"]=="set")$Y=implode(",",$Y);}input($m,$Y,idx($_POST["function"],$C,""));echo"\n";}echo"</table>\n";}echo'<p>
<input type=\'submit\' value=\'',lang(210),'\'>
',input_token(),'</form>

',adminer()->commentValue($Ui,$Si['comment']);}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$J=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if(!$_POST["drop"]){$J["source"]=array_filter($J["source"],'strlen');ksort($J["source"]);$kk=array();foreach($J["source"]as$x=>$X)$kk[$x]=$J["target"][$x];$J["target"]=$kk;}if(JUSH=="sqlite")$H=recreate_table($a,$a,array(),array(),array(" $C"=>($J["drop"]?"":" ".format_foreign_key($J))));else{$b="ALTER TABLE ".table($a);$H=($C==""||queries("$b DROP ".(JUSH=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C)));if(!$J["drop"])$H=queries("$b ADD".format_foreign_key($J));}queries_redirect(ME."table=".url_escape($a),($J["drop"]?lang(212):($C!=""?lang(213):lang(214))),$H);if(!$J["drop"])$l=lang(215);}page_header(($C!=""?lang(216):lang(151)),$l,array("table"=>$a),h($C!=""?$C:$a));if($_POST){ksort($J["source"]);if($_POST["change"]||$_POST["change-js"])$J["target"]=array();else$J["source"][]="";}elseif($C!=""){$Ld=foreign_keys($a);$J=$Ld[$C];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}echo'
<form action="" method="post">
';$Cj=array_keys(fields($a));if($J["db"]!="")connection()->select_db($J["db"]);if($J["ns"]!=""){$wh=get_schema();set_schema($J["ns"]);}$Bi=array_keys(array_filter(table_status('',true),'Adminer\fk_support'));$kk=array_keys(fields(in_array($J["table"],$Bi)?$J["table"]:reset($Bi)));$c=on('change','foreignChange');echo"<p><label>".lang(217).": ".html_select("table",$Bi,$J["table"],$c)."</label>\n";if(support("scheme")){$Zi=array_filter(adminer()->schemas(),function($L){return!information_schema(DB,$L);});echo"<label>".lang(83).": ".html_select("ns",$Zi,$J["ns"]!=""?$J["ns"]:$_GET["ns"],$c)."</label>";if($J["ns"]!="")set_schema($wh);}elseif(JUSH!="sqlite"){$ec=array();foreach(adminer()->databases()as$j){if(!information_schema($j))$ec[]=$j;}echo"<label>".lang(82).": ".html_select("db",$ec,$J["db"]!=""?$J["db"]:$_GET["db"],$c)."</label>";}echo
input_hidden("change-js"),'<noscript><p><input type=\'submit\' name=\'change\' value=\'',lang(218),'\'></noscript>
<table>
<thead><tr><th id="label-source">',lang(148),'<th id="label-target">',lang(149),'<tbody>
';$if=0;foreach($J["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Cj,$X,($if==count($J["source"])-1?on('change','foreignAddRow'):""),"label-source"),"<td>".html_select("target[".(+$x)."]",$kk,idx($J["target"],$x),"","label-target");$if++;}echo'</table>
<p>
<label>',lang(115),': ',html_select("on_delete",array(-1=>"")+explode("|",driver()->onActions),$J["on_delete"]),'</label>
<label>',lang(114),': ',html_select("on_update",array(-1=>"")+explode("|",driver()->onActions),$J["on_update"]),'</label>
',(support("deferrable")?html_select("deferrable",array('NOT DEFERRABLE','DEFERRABLE','DEFERRABLE INITIALLY DEFERRED'),$J["deferrable"]).' ':''),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'mariadb'=>"foreign-keys/",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-PARMS-REFERENCES",'mssql'=>"t-sql/statements/create-table-transact-sql",'oracle'=>"SQLRF01111",)),'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
<noscript><p><input type=\'submit\' name=\'add\' value=\'',lang(219),'\'></noscript>
';if($C!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$C)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;$xh="VIEW";if(JUSH=="pgsql"&&$a!=""){$P=table_status1($a);$xh=strtoupper($P["Engine"]);}if($_POST&&!$l){$C=trim($J["name"]);$Ca=" AS\n$J[select]";$A=ME."table=".url_escape($C);$ig=lang(220);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&JUSH!="sqlite"&&$U=="VIEW"&&$xh=="VIEW")query_redirect((JUSH=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ca,$A,$ig);else{$mk="adminer_".uniqid();drop_create("DROP $xh ".table($a),"CREATE $U ".table($C).$Ca,"DROP $U ".table($C),"CREATE $U ".table($mk).$Ca,"DROP $U ".table($mk),($_POST["drop"]?substr(ME,0,-1):$A),lang(221),$ig,lang(222),$a,$C);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;$J["materialized"]=($xh!="VIEW");if(!$l)$l=error();}page_header(($a!=""?lang(47):lang(223)),$l,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(200),': <input name="name" value="',h($J["name"]),'" data-maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$J["materialized"],lang(142)):""),'<p>';textarea("select",$J["select"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($a!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$a)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ye=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Nj=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(224));elseif(in_array($J["INTERVAL_FIELD"],$Ye)&&isset($Nj[$J["STATUS"]])){$Yi="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(225):lang(226)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Yi.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$Yi)."\n".$Nj[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(227).": ".h($aa):lang(228)),$l);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table class="layout">
<tr><th>',lang(200),'<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" data-maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(229),'<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">',lang(230),'<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>',lang(231),'<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Ye,$J["INTERVAL_FIELD"]),'<tr><th>',lang(129),'<td>',html_select("STATUS",$Nj,$J["STATUS"]),'<tr><th>',lang(54),'<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" data-maxlength="64">
<tr><th><td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",lang(232)),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($aa!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$aa)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["procedure"])){$ca=($_GET["name"]?:$_GET["procedure"]);$Si=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$l){foreach($J["fields"]as$x=>$m){if($m["field"]=="")unset($J["fields"][$x]);}$Yg=routine_id($ca,routine($_GET["procedure"],$Si));$Cg=routine_id($J["name"],$J);$h=create_routine($Si,$J);$A=substr(ME,0,-1);$ig=lang(233);if(!$_POST["drop"]&&$Yg==$Cg&&connection()->flavor!="mysql")query_redirect(substr_replace($h,' OR REPLACE',6,0),$A,$ig);else{$mk="adminer_".uniqid();drop_create("DROP $Si $Yg",$h,"DROP $Si $Cg",create_routine($Si,array("name"=>$mk)+$J),"DROP $Si ".routine_id($mk,$J),$A,lang(234),$ig,lang(235),$ca,$J["name"]);}}page_header(($ca!=""?(isset($_GET["function"])?lang(236):lang(237)).": ".h($ca):(isset($_GET["function"])?lang(238):lang(239))),$l);if(!$_POST){if($ca=="")$J["language"]="sql";else{$J=routine($_GET["procedure"],$Si);$J["name"]=$ca;}}$sb=get_vals("SHOW CHARACTER SET");sort($sb);$Ti=routine_languages();echo($sb?"<datalist id='collations'>".optionlist($sb)."</datalist>":""),'
<form action="" method="post" id="form">
<p>',lang(200),': <input name="name" value="',h($J["name"]),'" data-maxlength="64" autocapitalize="off">
',($Ti?"<label>".lang(23).": ".html_select("language",$Ti,$J["language"])."</label>\n":""),'<input type=\'submit\' value=\'',lang(17),'\'>
<div class="scrollable">
<table id="edit-fields" class="nowrap">
';edit_fields($J["fields"],$sb,$Si);if(isset($_GET["function"])){echo"<tr><td>".lang(240);edit_type("returns",(array)$J["returns"],$sb,array(),(JUSH=="pgsql"?array("void","trigger"):array()));}echo'</table>
',script("editFields();"),'</div>
<p>';textarea("definition",$J["definition"],20);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($ca!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$ca)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["sequence"])){$ea=$_GET["sequence"];$J=$_POST;if($_POST&&!$l){$_=substr(ME,0,-1);$C=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($ea),$_,lang(241));elseif($ea=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(242));elseif($ea!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($ea)." RENAME TO ".idf_escape($C),$_,lang(243));else
redirect($_);}page_header($ea!=""?lang(244).": ".h($ea):lang(245),$l);if(!$J)$J["name"]=$ea;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type=\'submit\' value=\'',lang(17),'\'>
';if($ea!="")echo"<input type='submit' name='drop' value='".lang(138)."'".confirm(lang(190,$ea)).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["type"])){function
enum_values($jc){$Y="'(?:[^']|'')*'";if(!preg_match('~^AS\s+ENUM\s*\(\s*('.$Y.'(?:\s*,\s*'.$Y.')*)\s*\)$~i',$jc,$B))return
null;preg_match_all('~'.$Y.'~',$B[1],$Rf);return$Rf[0];}function
add_enum_values($U,$Wg,$Ag){$bh=enum_values($Wg);$Gg=enum_values($Ag);if($bh===null||$Gg===null)return
null;$I=array();$s=0;foreach($Gg
as$Y){if($Y===idx($bh,$s))$s++;else$I[]="ALTER TYPE ".idf_escape($U)." ADD VALUE $Y".($s<count($bh)?" BEFORE ".$bh[$s]:"");}return($s==count($bh)?$I:null);}$fa=$_GET["type"];$J=$_POST;$U=($fa!=""?type_definition(+array_search($fa,types(true))):array());$Og=($U["kind"]=='d'?"DOMAIN":"TYPE");if($_POST&&!$l){$_=substr(ME,0,-1);$C=trim($J["name"]);$Ca=trim($J["as"]);$Eg=(preg_match('~^AS\s+(?!ENUM\b|RANGE\b|\()~i',$Ca)?"DOMAIN":"TYPE");$ig=lang(246);$b=(!$_POST["drop"]&&$fa!=""&&$Eg==$Og?($Ca==$U["definition"]?array():add_enum_values($fa,$U["definition"],$Ca)):null);if($b!==null){if($fa!=$C)$b[]="ALTER $Og ".idf_escape($fa)." RENAME TO ".idf_escape($C);if(!$b)redirect($_);$od=false;foreach($b
as$G){if(!queries($G)){$od=true;break;}}queries_redirect($_,$ig,!$od);}else
drop_create("DROP $Og ".idf_escape($fa),"CREATE $Eg ".idf_escape($C)." $Ca","","","",$_,lang(247),$ig,lang(248),$fa,$C);}page_header($fa!=""?lang(249).": ".h($fa):lang(250),$l);if(!$J){$J["name"]=$fa;$J["as"]=($fa!=""?$U["definition"]:"AS ");}echo'
<form action="" method="post">
<p>
',lang(200).": <input name='name' value='".h($J['name'])."' autocapitalize='off'>\n",doc_link(array('pgsql'=>"sql-createtype.html",),"?");textarea("as",$J["as"]);echo"<p><input type='submit' value='".lang(17)."'>\n";if($fa!="")echo"<input type='submit' name='drop' value='".lang(138)."'".confirm(lang(190,$fa)).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["check"])){$a=$_GET["check"];$C=$_GET["name"];$J=$_POST;if($J&&!$l){if(JUSH=="sqlite")$H=recreate_table($a,$a,array(),array(),array(),"",array(),"$C",($J["drop"]?"":$J["clause"]));else{$H=($C==""||queries("ALTER TABLE ".table($a)." DROP CONSTRAINT ".idf_escape($C)));if(!$J["drop"])$H=queries("ALTER TABLE ".table($a)." ADD".($J["name"]!=""?" CONSTRAINT ".idf_escape($J["name"]):"")." CHECK ($J[clause])");}queries_redirect(ME."table=".url_escape($a),($J["drop"]?lang(251):($C!=""?lang(252):lang(253))),$H);}page_header(($C!=""?lang(254):lang(153)),$l,array("table"=>$a),h($C!=""?$C:$a));if(!$J){$ib=driver()->checkConstraints($a);$J=array("name"=>$C,"clause"=>$ib[$C]);}echo'
<form action="" method="post">
<p>';if(JUSH!="sqlite")echo
lang(200).': <input name="name" value="'.h($J["name"]).'" data-maxlength="64" autocapitalize="off"> ';echo
doc_link(array('sql'=>"create-table-check-constraints.html",'mariadb'=>"constraint/",'pgsql'=>"ddl-constraints.html#DDL-CONSTRAINTS-CHECK-CONSTRAINTS",'mssql'=>"relational-databases/tables/create-check-constraints",'sqlite'=>"lang_createtable.html#check_constraints",),"?"),'<p>';textarea("clause",$J["clause"]);echo'<p><input type=\'submit\' value=\'',lang(17),'\'>
';if($C!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$C)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C="$_GET[name]";$Lk=trigger_options();$J=(array)trigger($C,$a)+array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$Lk["Timing"])&&in_array($_POST["Event"],$Lk["Event"])&&in_array($_POST["Type"],$Lk["Type"])){$ch=" ON ".table($a);$Dc="DROP TRIGGER ".idf_escape($C).(JUSH=="pgsql"?$ch:"");$A=ME."table=".url_escape($a);if($_POST["drop"])query_redirect($Dc,$A,lang(255));else{if($C!="")queries($Dc);queries_redirect($A,($C!=""?lang(256):lang(257)),queries(create_trigger($ch,$_POST)));if($C!="")queries(create_trigger($ch,$J+array("Type"=>reset($Lk["Type"]))));}}$J=$_POST;}page_header(($C!=""?lang(258):lang(155)),$l,array("table"=>$a),h($C!=""?$C:$a));$Jk=on('change','triggerChange',"^".preg_quote($a,"/")."_[ba][iud]$",$a);echo'
<form action="" method="post" id="form">
<table class="layout">
<tr><th>',lang(259),'<td>',html_select("Timing",$Lk["Timing"],$J["Timing"],$Jk),'<tr><th>',lang(260),'<td>',html_select("Event",$Lk["Event"],$J["Event"],$Jk),(in_array("UPDATE OF",$Lk["Event"])?" <input name='Of' value='".h($J["Of"])."' class='hidden'>":""),'<tr><th>',lang(53),'<td>',html_select("Type",$Lk["Type"],$J["Type"]),'</table>
<p>',lang(200),': <input name="Trigger" value="',h($J["Trigger"]),'" data-maxlength="64" autocapitalize="off">
',script("fire(qs('#form')['Timing'], 'change');"),'<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($C!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,$C)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["user"])){$ga=$_GET["user"];$qi=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Jb)$qi[$Jb=="File access on server"?"Server Admin":$Jb][$J["Privilege"]]=$J["Comment"];}unset($qi["Server Admin"]["Usage"]);foreach($qi["Tables"]as$x=>$X)unset($qi["Databases"][$x]);$Bg=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$Bg[$X]=(array)$Bg[$X]+idx($_POST["grants"],$x,array());}$Yd=array();if(isset($_GET["host"])&&($H=connection()->query("SHOW GRANTS FOR ".q($ga)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\([^)]+\))?~',$B[1],$Rf,PREG_SET_ORDER)){foreach($Rf
as$X){if($X[1]!="USAGE")$Yd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$J[0]))$Yd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}}}if($_POST&&!$l){$ah=(isset($_GET["host"])?q($ga)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $ah",ME."privileges=",lang(261));else{$Fg=q($_POST["user"])."@".q($_POST["host"]);$Sh=$_POST["pass"];$Qb=false;$H=true;if($ah!=$Fg){$Qb=queries("CREATE USER $Fg IDENTIFIED BY ".($_POST["hashed"]?"PASSWORD ":"").q($Sh));$H=$Qb;}elseif($Sh!="")$H=queries("SET PASSWORD FOR $Fg = ".(min_version(8,99)||$_POST["hashed"]?q($Sh):"PASSWORD(".q($Sh).")"));if($H){$Pi=array();foreach($Bg
as$Og=>$Xd){if(isset($_GET["grant"]))$Xd=array_filter($Xd);$Xd=array_keys($Xd);if(isset($_GET["grant"]))$Pi=array_diff(array_keys(array_filter($Bg[$Og],'strlen')),$Xd);elseif($ah==$Fg){$Xg=array_keys((array)$Yd[$Og]);$Pi=array_diff($Xg,$Xd);$Xd=array_diff($Xd,$Xg);unset($Yd[$Og]);}if(preg_match('~^(.+)\s*(\(.*\))?$~U',$Og,$B)&&(!grant("REVOKE",$Pi,$B[2]," ON $B[1] FROM $Fg")||!grant("GRANT",$Xd,$B[2]," ON $B[1] TO $Fg"))){$H=false;break;}}}if($H&&isset($_GET["host"])){if($ah!=$Fg)queries("DROP USER $ah");elseif(!isset($_GET["grant"])){foreach($Yd
as$Og=>$Pi){if(preg_match('~^(.+)(\(.*\))?$~U',$Og,$B))grant("REVOKE",array_keys($Pi),$B[2]," ON $B[1] FROM $Fg");}}}if($H&&!Queries::$queries)redirect(ME."privileges=");queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(262):lang(263)),$H);if($Qb)connection()->query("DROP USER $Fg");}}page_header((isset($_GET["host"])?lang(39).": ".h("$ga@$_GET[host]"):lang(162)),$l,array("privileges"=>array('',lang(75))));$J=$_POST;if($J)$Yd=$Bg;else{$J=$_GET+array("host"=>get_val("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$Yd[(DB==""||$Yd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table class="layout">
<tr><th>',lang(37),'<td><input name="host" data-maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>',lang(39),'<td><input name="user" data-maxlength="80" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>',lang(40),'<td><input name="pass" id="pass" value="',h($J["pass"]),'" autocomplete="new-password">
',($J["hashed"]?"":script("typePassword(qs('#pass'));")),(min_version(8,99)?"":checkbox("hashed",1,$J["hashed"],lang(264),on('click','hashedClick'))),'</table>

',"<table class='odds'>\n","<thead><tr><th colspan='2'>".lang(75).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Yd
as$Og=>$Xd){echo'<th>'.($Og!="*.*"?"<input name='objects[$s]' value='".h($Og)."' size='10' autocapitalize='off'>":input_hidden("objects[$s]","*.*")."*.*");$s++;}echo"<tbody>\n";foreach(array(""=>"","Server Admin"=>lang(37),"Databases"=>lang(41),"Tables"=>lang(144),"Procedures"=>lang(265),)as$Jb=>$mc){foreach((array)$qi[$Jb]as$pi=>$wb){echo"<tr><td".($mc?">$mc<td":" colspan='2'").' lang="en" title="'.h($wb).'">'.h($pi);$s=0;foreach($Yd
as$Og=>$Xd){$C="'grants[$s][".h(strtoupper($pi))."]'";$Y=$Xd[strtoupper($pi)];if($Jb=="Server Admin"&&$Og!=(isset($Yd["*.*"])?"*.*":".*"))echo"<td>";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(266)."<option value='0'".($Y=="0"?" selected":"").">".lang(267)."</select>";else
echo"<td align='center'><label class='block'>","<input type='checkbox' name=$C value='1'".($Y?" checked":"").($pi=="All privileges"?" id='grants-$s-all'":($pi=="Grant option"?"":on('click','grantsClick',"grants-$s-all"))).">","</label>";$s++;}}}echo"</table>\n",'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if(isset($_GET["host"]))echo'<input type=\'submit\' name=\'drop\' value=\'',lang(138),'\'',confirm(lang(190,"$ga@$_GET[host]")),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")){if($_POST&&!$l){$qf=0;foreach((array)$_POST["kill"]as$X){if(adminer()->killProcess($X))$qf++;}queries_redirect(ME."processlist=",lang(268,$qf),$qf||!$_POST["kill"]);}}page_header(lang(127),$l);echo'
<form action="" method="post">
<div class="scrollable">
<table class="nowrap checkable odds"',on('click','tableClick').on('dblclick','tableClick'),'>
';$s=-1;foreach(adminer()->processList()as$s=>$J){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<td class='hover'>":"");foreach($J
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"REFRN30223",));echo"<tbody>\n";}echo"<tr>".(support("kill")?"<td class='hover'>".checkbox("kill[]",$J[JUSH=="sql"?"Id":"pid"],0):"");foreach($J
as$x=>$X)echo"<td>".($X!=""&&((JUSH=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$J["Command"]))||(JUSH=="pgsql"&&$x=="query")||(JUSH=="oracle"&&$x=="sql_text"))?"<code class='jush-".JUSH."' data-full='".h($X)."'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".url_escape($J["db"])."&":"")."sql=".url_escape($X)).'">'.lang(269).'</a>'.' '.copy_icon():h($X));echo"\n";}echo'</table>
</div>
<p>
',script("copyCode(qsl('table'));");if(support("kill"))echo($s+1)."/".lang(270,max_connections()),"<p><input type='submit' value='".lang(271)."'>\n";echo
input_token(),'</form>
',script("tableCheck();");}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$n=fields($a);$Ld=column_foreign_keys($a);$Vg=$S["Oid"];$ra=get_settings("adminer_import");$Qi=array();$e=array();$dj=array();$ph=array();$qk=null;foreach($n
as$x=>$m){$C=adminer()->fieldName($m);$zg=html_entity_decode(strip_tags($C),ENT_QUOTES);if(isset($m["privileges"]["select"])&&$C!=""){$e[$x]=$zg;if(is_shortable($m))$qk=adminer()->selectLengthProcess();}if(isset($m["privileges"]["where"])&&$C!="")$dj[$x]=$zg;if(isset($m["privileges"]["order"])&&$C!="")$ph[$x]=$zg;$Qi+=$m["privileges"];}list($M,$Zd)=adminer()->selectColumnsProcess($e,$w);$M=array_unique($M);$Zd=array_unique($Zd);$df=count($Zd)<count($M);$Z=adminer()->selectSearchProcess($n,$w);$oh=adminer()->selectOrderProcess($n,$w);$z=adminer()->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Wk=>$J){$Ca=convert_field($n[key($J)]);$M=array($Ca?:idf_escape(key($J)));$Z[]=where_check(bracket_escape($Wk,true),$n);$I=driver()->select($a,$M,$Z,$M);if($I)echo
first($I->fetch_row());}exit;}$li=$Yk=array();foreach($w
as$v){if($v["type"]=="PRIMARY"){$li=array_flip($v["columns"]);$Yk=($M?$li:array());foreach($Yk
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Yk[$x]);}break;}}if($Vg&&!$li){$li=$Yk=array($Vg=>0);$w[]=array("type"=>"PRIMARY","columns"=>array($Vg));}if($_POST&&!$l){$Cl=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$ib=array();foreach($_POST["check"]as$eb)$ib[]=where_check($eb,$n);$Cl[]="((".implode(") OR (",$ib)."))";}$El=$Cl;$Cl=($Cl?"\nWHERE ".implode(" AND ",$Cl):"");if($_POST["export"]){save_settings(array("output"=>$_POST["output"],"format"=>$_POST["format"]),"adminer_import");dump_headers($a);adminer()->dumpTable($a,"");$fj=($M?:array("*"));$Lb=convert_fields($e,$n,$M);if($Lb)$fj[]=substr($Lb,2);$G="";if(is_array($_POST["check"])&&!$li){$Qd=implode(", ",$fj)."\nFROM ".table($a);$be=($Zd&&$df?"\nGROUP BY ".implode(", ",$Zd):"").($oh?"\nORDER BY ".implode(", ",$oh):"");$Uk=array();foreach($_POST["check"]as$X)$Uk[]="(SELECT".limit($Qd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n).$be,1).")";$G=implode(" UNION ALL ",$Uk);}adminer()->dumpData($a,"table",$G,$fj,$El,($df?$Zd:array()),$oh);adminer()->dumpFooter();exit;}if(!adminer()->selectEmailProcess($Z,$Ld)){if($_POST["save"]||$_POST["delete"]){$H=true;$sa=0;$O=array();if(!$_POST["delete"]){foreach($n
as$C=>$X){$u=bracket_escape($C);if(isset($_POST["fields"][$u])||$_FILES["fields-$u"]){$X=process_input($n[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}}if($_POST["delete"]||$O){$G=($_POST["clone"]?"INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a):"");if($_POST["all"]||($li&&is_array($_POST["check"]))||$df){$H=($_POST["delete"]?driver()->delete($a,$Cl):($_POST["clone"]?queries("INSERT $G$Cl".driver()->insertReturning($a)):driver()->update($a,$O,$Cl)));$sa=connection()->affected_rows;if(is_object($H))$sa+=$H->num_rows;}else{foreach((array)$_POST["check"]as$X){$Bl="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n);$H=($_POST["delete"]?driver()->delete($a,$Bl,1):($_POST["clone"]?queries("INSERT".limit1($a,$G,$Bl)):driver()->update($a,$O,$Bl,1)));if(!$H)break;$sa+=connection()->affected_rows;}}}$ig=lang(272,$sa);if($_POST["clone"]&&$H&&$sa==1){$zf=last_id($H);if($zf)$ig=lang(183," $zf");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page|next":""),$ig,$H);if(!$_POST["delete"]){$ei=(array)$_POST["fields"];edit_form($a,array_intersect_key($n,$ei),$ei,!$_POST["clone"],$l);page_footer();exit;}}elseif(!$_POST["import"]){$H=true;$sa=0;foreach((array)$_POST["val"]as$Wk=>$J){$O=array();foreach($J
as$x=>$X){$x=bracket_escape($x,true);$O[idf_escape($x)]=(preg_match('~char|text~',$n[$x]["type"])||$X!=""?adminer()->processInput($n[$x],$X):"NULL");}$H=driver()->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check(bracket_escape($Wk,true),$n),($df||$li?0:1)," ");if(!$H)break;$sa+=connection()->affected_rows;}queries_redirect(remove_from_uri(),lang(272,$sa),$H);}elseif(!is_string($wd=get_file("csv_file",true)))$l=upload_error($wd);elseif(!preg_match('~~u',$wd))$l=lang(273);else{save_settings(array("output"=>$ra["output"],"format"=>$_POST["separator"]),"adminer_import");$tb=array_keys($n);$jj=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$Ub=parse_csv($wd,$jj);$sa=count($Ub);driver()->begin();$K=array();foreach($Ub
as$x=>$sl){if(!$x&&!array_diff($sl,$tb)){$tb=$sl;$sa--;}else{$O=array();foreach($sl
as$s=>$pb)$O[idf_escape($tb[$s])]=($pb==""&&$n[$tb[$s]]["null"]?"NULL":q(csv_value($pb)));$K[]=$O;}}$H=(!$K||driver()->insertUpdate($a,$K,$li));if($H)driver()->commit();queries_redirect(remove_from_uri("page|next"),lang(274,$sa),$H);driver()->rollback();}}}$bk=adminer()->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(57).": $bk",$l);$O=null;if(isset($Qi["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){$Y=$X["val"];if(is_array($Y))$Y=(count($Y)==1&&preg_match('~^val-(.*)~s',reset($Y),$B)?$B[1]:"");if($X["col"]!=""&&$Y!=""&&($X["op"]=="="||(!$X["op"]&&(is_array($X["val"])||!preg_match('~[_%]~',$Y)))))$O
.="&set[".url_escape(bracket_escape($X["col"]))."]=".url_escape($Y);}}adminer()->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(275).($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div hidden>";hidden_fields_get();echo(DB!=""?input_hidden("db",DB).(isset($_GET["ns"])?input_hidden("ns",$_GET["ns"]):""):""),input_hidden("select",$a),"</div>\n";adminer()->selectColumnsPrint($M,$e);adminer()->selectSearchPrint($Z,$dj,$w);adminer()->selectOrderPrint($oh,$ph,$w);adminer()->selectLimitPrint($z);if($qk!==null)adminer()->selectLengthPrint($qk);adminer()->selectActionPrint($w);echo"</form>\n";foreach((array)$_GET["where"]as$X){if($X["op"]=="SQL"&&!in_array($_SERVER["HTTP_SEC_FETCH_SITE"],array("","same-origin"))){echo"<p class='error'>".lang(108).' '.lang(109)."\n";page_footer();exit;}}$D=$_GET["page"];$Od=null;if($D=="last"){$Od=get_val(count_rows($a,$Z,$df,$Zd));$D=floor(max(0,intval($Od)-1)/$z);}$ej=$M;$ae=$Zd;if(!$ej){$ej[]="*";$Lb=convert_fields($e,$n,$M);if($Lb)$ej[]=substr($Lb,2);}foreach($M
as$x=>$X){$m=$n[idf_unescape($X)];if($m&&($Ca=convert_field($m)))$ej[$x]="$Ca AS $X";}if(JUSH=="pgsql"||JUSH=="mssql"){foreach((array)$_GET["columns"]as$x=>$X){if(isset($ej[$x])&&$X["fun"])$ej[$x].=" AS ".idf_escape(apply_sql_function($X["fun"],($X["col"]!=""?$X["col"]:"*")));}}if(!$df&&$Yk){foreach($Yk
as$x=>$X){$ej[]=idf_escape($x);if($ae)$ae[]=idf_escape($x);}}$H=driver()->select($a,$ej,$Z,$ae,$oh,$z,$D,true);if(!is_object($H))echo"<p class='error'>".(error()?:lang(25))."\n";else{if(JUSH=="mssql"&&$D)$H->seek($z*$D);$Pc=array();$K=array();while($J=$H->fetch_assoc()){if($D&&JUSH=="oracle")unset($J["RNUM"]);$K[]=$J;}$je=($z&&(support("cursor")?$_GET["next"]!="":count($K)>=$z));if(is_ajax()&&$je)header("X-Next-Page: ".pagination_href($D+1));if($_GET["modify"]&&$K){$ag=max_input_vars(count($K[0])+1,20);echo($ag&&count($K)>$ag?"<p class='error'>".max_input_vars_error()."\n":"");}echo"<form action='' method='post' enctype='multipart/form-data'>\n";if($_GET["page"]!="last"&&$z&&$Zd&&$df&&JUSH=="sql")$Od=get_val(" SELECT FOUND_ROWS()");if(!$K)echo"<p class='message'>".lang(15)."\n";else{$Ma=adminer()->backwardKeys($a,$bk);echo"<div class='scrollable'>","<table id='table' class='nowrap checkable odds'".on('click','tableClick').on('dblclick','tableClick').on('keydown','editingKeydown').">\n","<thead><tr>".(!$Zd&&$M?"":"<td class='hover check'><input type='checkbox' id='all-page' class='jsonly' title='".lang(276)."'".on('click','formCheck','^check').">");$_g=array();$Ud=array();reset($M);$zi=1;foreach($K[0]as$x=>$X){if(!isset($Yk[$x])){$X=idx($_GET["columns"],key($M))?:array();$m=$n[$M?($X?$X["col"]:current($M)):$x];$C=($m?adminer()->fieldName($m,$zi):($X["fun"]?"*":h($x)));if($C!=""){$zi++;$_g[$x]=$C;$d=idf_escape($x);$ve=remove_from_uri('(order|desc)[^=]*|page|next').'&order[0]='.url_escape($x);$mc="&desc[0]=1";$_j=preg_replace('~ DESC( NULLS LAST)?$~','',$oh[0]);$Bj=($_j==$d||$_j==$x);echo"<th id='th[".h(bracket_escape($x))."]'".($Bj?" aria-sort='".($_j==$oh[0]?"ascending":"descending")."'":"").">";$Td=apply_sql_function($X["fun"],$C);$Aj=isset($m["privileges"]["order"])||$Td!=$C;echo($Aj?"<a href='".h($ve.($Bj&&$_j==$oh[0]?$mc:''))."'>$Td</a>":$Td);$hg=($Aj?"<a href='".h($ve.$mc)."' title='".lang(63)."' class='text'> ↓</a>":'');if(!$X["fun"]&&isset($m["privileges"]["where"]))$hg
.="<a href='#fieldset-search' title='".lang(60)."' class='text jsonly'".on('click','selectSearch',$x)."> =</a>";echo($hg?"<span class='column'>$hg</span>":"");}$Ud[$x]=$X["fun"];next($M);}}$Ff=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$x=>$X)$Ff[$x]=max($Ff[$x],min(40,strlen(utf8_decode($X))));}}echo($Ma?"<th>".lang(277):"")."<tbody>\n";if(is_ajax())ob_end_clean();foreach(adminer()->rowDescriptions($K,$Ld)as$yg=>$J){$Vk=unique_array($K[$yg],$w);if(!$Vk){$Vk=array();reset($M);foreach($K[$yg]as$x=>$X){if(!preg_match('~^(COUNT|AVG|GROUP_CONCAT|MAX|MIN|SUM)\(~',current($M)))$Vk[$x]=$X;next($M);}}$Wk="";foreach($Vk
as$x=>$X){$m=(array)$n[$x];$cf=is_blob($m);if((JUSH=="sql"||JUSH=="pgsql")&&($cf||preg_match('~char|text|enum|set~',$m["type"]))&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($cf||JUSH!='sql'||preg_match("~^utf8~",$m["collation"])?$x:"CONVERT($x USING ".charset(connection()).")").")";$X=md5($cf?(string)driver()->value($X,$m):$X);}$Wk
.="&".($X!==null?"where[".url_escape(bracket_escape($x))."]=".url_escape($X===false?"f":$X):"null[]=".url_escape($x));}echo"<tr>".(!$Zd&&$M?"":"<td class='hover check'>".($df||information_schema(DB)?"":"<a href='".h(ME."edit=".url_escape($a).$Wk)."' class='edit'>".lang(278)."</a> ").checkbox("check[]",substr($Wk,1),in_array(substr($Wk,1),(array)$_POST["check"])));reset($M);foreach($J
as$x=>$X){if(isset($_g[$x])){$d=current($M);$m=(array)$n[$x];if($X!=""&&(!isset($Pc[$x])||$Pc[$x]!=""))$Pc[$x]=(is_mail($X)?$_g[$x]:"");$_="";if(is_blob($m)&&$X!="")$_=ME.'download='.url_escape($a).'&field='.url_escape($x).$Wk;if(!$_&&$X!==null){foreach((array)$Ld[$x]as$p){if(count($Ld[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$s=>$Cj)$_
.=where_link($s,$p["target"][$s],$K[$yg][$Cj]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\1'.url_escape($p["db"]),ME):ME).'select='.url_escape($p["table"]).$_;if($p["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\1'.url_escape($p["ns"]),$_);if(count($p["source"])==1)break;}}}if($d=="COUNT(*)"){$_=ME."select=".url_escape($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Vk))$_
.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Vk
as$mf=>$W)$_
.=where_link($s++,$mf,$W);}$we=select_value($X,$_,$m,$qk);$u=bracket_escape($Wk);$t=h("val[$u][".bracket_escape($x)."]");$gi=idx(idx($_POST["val"],$u),bracket_escape($x));$bl=idx($m["privileges"],"update");$Lc=!is_array($J[$x])&&!is_blob($m)&&is_utf8($X)&&$K[$yg][$x]==$X&&!$Ud[$x]&&!$m["generated"]&&$bl;$U=(preg_match('~^(AVG|MIN|MAX)\((.+)\)~',$d,$B)?$n[idf_unescape($B[2])]["type"]:$m["type"]);$ok=preg_match('~text|json|lob~',$U);$ef=preg_match(number_type(),$U)||preg_match('~^(CHAR_LENGTH|ROUND|FLOOR|CEIL|TIME_TO_SEC|COUNT|SUM)\(~',$d);echo"<td id='$t'".($ef&&($X===null||is_numeric(strip_tags($we))||$U=="money")?" class='number'":"");if(($_GET["modify"]&&$Lc&&$X!==null)||$gi!==null){$ee=h($gi!==null?$gi:$X);echo">".($ok?"<textarea name='$t' cols='30' rows='".(substr_count($X,"\n")+1)."'>$ee</textarea>":"<input name='$t' value='$ee' size='$Ff[$x]'>");}else{$Nf=strpos($we,"<i>…</i>");echo($bl?" data-text='".($Nf?2:($ok?1:0))."'".($Lc?"":" data-warning='".lang(279)."'"):"").">$we";}}next($M);}if($Ma)echo"<td>";adminer()->backwardKeysPrint($Ma,$K[$yg]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n","</div>\n";}if(!is_ajax()){if($K||$D||$je){$dd=true;if($_GET["page"]!="last"){if(!$z||(count($K)<$z&&($K||!$D)))$Od=($D?$D*$z:0)+count($K);elseif(JUSH!="sql"||!$df){$Od=($df?false:found_rows($S,$Z));if(intval($Od)<max(1e4,2*($D+1)*$z))$Od=first(slow_query(count_rows($a,$Z,$df,$Zd)));elseif(JUSH=='sql'||JUSH=='pgsql')$dd=false;}}if(!support("cursor"))$je=(($Od===false?count($K)+1:$Od-$D*$z)>$z);$Fh=($z&&($je||$D));if($Fh)echo($je?'<p><a href="'.h(pagination_href($D+1)).'" class="loadmore"'.on('click','selectLoadMore',lang(280)).'>'.lang(281).'</a>':''),"\n";echo"<div class='footer'><div>\n";if($Fh){$Yf=($Od===false?$D+($K?(count($K)>=$z?2:1):0):floor(($Od-1)/$z));echo"<fieldset><legend>".lang(282)."</legend>";if(!support("cursor")){echo
pagination(0,$D).($D>5?" …":"");for($s=max(1,$D-4);$s<min($Yf,$D+5);$s++)echo
pagination($s,$D);if($Yf>0)echo($D+5<$Yf?" …":""),($dd&&$Od!==false?pagination($Yf,$D):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Yf'>".lang(283)."</a>");}else
echo
pagination(0,$D).($D>1?" …":""),($D?pagination($D,$D):""),($je?pagination($D+1,$D)." …":"");echo"</fieldset>\n";}echo"<fieldset>","<legend>".lang(284)."</legend>";$uc=($dd?"":"~ ").$Od;$tf=($Od!==false?($dd?"":"~ ").lang(166,$Od):"");echo
checkbox("all",1,0,$tf,on('click','countRows',$uc))."\n","</fieldset>\n";if(adminer()->selectCommandPrint())echo'<fieldset',($_GET["modify"]?'':" title='".lang(285)."'"),'>
<legend><a href=\'',h($_GET["modify"]?remove_from_uri("modify"):relative_uri()."&modify=1"),'\'>',lang(286),'</a></legend><div>
<input type=\'submit\' id=\'save\' value=\'',lang(17),'\'',($_GET["modify"]?'':" class='jsonly' disabled"),'>
</div></fieldset>

<fieldset><legend>',lang(137),' <span id="selected"></span></legend><div>
<input type=\'submit\' name=\'edit\' value=\'',lang(13),'\'>
<input type=\'submit\' name=\'clone\' value=\'',lang(269),'\'>
<input type=\'submit\' name=\'delete\' value=\'',lang(21),'\'',confirm(),'>
</div></fieldset>
';$Md=adminer()->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Md['sql']);break;}}if($Md){print_fieldset("export",lang(80)." <span id='selected2'></span>");$Bh=adminer()->dumpOutput();echo($Bh?html_select("output",$Bh,$ra["output"])." ":""),html_select("format",$Md,$ra["format"])," <input type='submit' name='export' value='".lang(80)."'>\n","</div></fieldset>\n";}adminer()->selectEmailPrint(array_filter($Pc,'strlen'),$e);echo"</div></div>\n";}if(adminer()->selectImportPrint())echo"<p>","<a href='#import' class='toggle'>".lang(79)."</a>","<span id='import'".($_POST["import"]?"":" class='hidden'").">: ",file_input(" name='csv_file'"," ".html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"])." <input type='submit' name='import' value='".lang(79)."'>"),"</span>";echo
input_token(),"</form>\n",(!$Zd&&$M?"":script("tableCheck();"));}}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(129):lang(128));$tl=($P?adminer()->showStatus():adminer()->showVariables());if(!$tl)echo"<p class='message'>".lang(15)."\n";else{echo"<table>\n";foreach($tl
as$J){echo"<tr>";$x=array_shift($J);echo"<th><code class='jush-".JUSH.($P?"status":"set")."'>".h($x)."</code>";foreach($J
as$X)echo"<td>".nl_br(h($X));}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: application/json; charset=utf-8");if($_GET["script"]=="db"){$Uj=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",h($S["Comment"]));if(!is_view($S)||preg_match('~materialized~i',$S["Engine"])){foreach(array("Engine","Collation")as$x)json_row("$x-$C",h($S[$x]));foreach(array_keys($Uj+array("Auto_increment"=>0,"Rows"=>0))as$x){if(array_key_exists($x,$S))json_row("$x-$C",format_status($S,$x));if($S[$x]!=""&&isset($Uj[$x]))$Uj[$x]+=($S["Engine"]!="InnoDB"||$x!="Data_free"?$S[$x]:0);}}}if(function_exists('Adminer\db_status'))$Uj=db_status();foreach($Uj
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")connection()->query("KILL ".number($_POST["kill"]));else{foreach(count_tables(adminer()->databases(false))as$j=>$X){json_row("tables-$j",$X);json_row("size-$j",db_size($j));}json_row("");}exit;}else{$ik=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ik&&!$l&&!$_POST["search"]){$H=true;$ig="";if(JUSH=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$ig=lang(287);}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ig=lang(288);}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ig=lang(289);}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$ig=lang(290);}elseif(JUSH=="sqlite"&&$_POST["check"]){foreach((array)$_POST["tables"]as$R){foreach(get_rows("PRAGMA integrity_check(".q($R).")")as$J)$ig
.="<b>".h($R)."</b>: ".h($J["integrity_check"])."<br>";}}elseif(JUSH!="sql"){$H=(JUSH=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?" ANALYZE":""),(array)$_POST["tables"]));$ig=lang(291);}elseif(!$_POST["tables"])$ig=lang(12);elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('Adminer\idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$ig
.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect($_SERVER["REQUEST_URI"],$ig,$H);}page_header(($_GET["ns"]==""?lang(41).": ".h(DB):lang(83).": ".h($_GET["ns"])),$l,true);if(adminer()->homepage()){if($_GET["ns"]!==""){$oh=$_GET["order"];$Rd=($oh||support("fast_status"));echo"<div>\n","<h3 id='tables-views'>".lang(292)."</h3>\n";$hk=($Rd?table_status():tables_list());if(!$hk)echo"<p class='message'>".lang(12)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(293)." <span id='selected2'></span></legend><div>",html_select("op",adminer()->operators(),idx($_POST,"op",JUSH=="elastic"?"should":"LIKE %%"))," <input type='search' name='query' value='".h($_POST["query"])."'".on('keydown','submitKeydown','search').">"," <input type='submit' name='search' value='".lang(60)."'>\n","</div></fieldset>\n";if(!$l&&$_POST["search"]&&$_POST["query"]!=""){$_GET["where"][0]["op"]=$_POST["op"];search_tables();}}echo"<div class='scrollable'>\n","<table class='nowrap checkable odds'".on('click','tableClick').on('dblclick','tableClick').">\n",'<thead><tr class="wrap">','<td class="hover"><input id="check-all" type="checkbox" class="jsonly" title="'.lang(161).'"'.on('click','formCheck','^(tables|views)\[').'>','<th'.(!$oh&&JUSH!='sqlite'?" aria-sort='ascending'":'').'><a href="'.h(substr(ME,0,-1)).'">'.lang(144).'</a>';$e=array("Engine"=>array(lang(294).doc_link(array('sql'=>'storage-engines.html'))));if(collations())$e["Collation"]=array(lang(133).doc_link(array('sql'=>'charset-charsets.html','mariadb'=>'supported-character-sets-and-collations/')));if(function_exists('Adminer\alter_table'))$e["Data_length"]=array(lang(295).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT','oracle'=>'REFRN20286')),"create",lang(48),);if(support("indexes"))$e["Index_length"]=array(lang(296).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT')),"indexes",lang(147),);$e["Data_free"]=array(lang(297).doc_link(array('sql'=>'show-table-status.html')),"edit",lang(49));if(function_exists('Adminer\alter_table'))$e["Auto_increment"]=array(lang(55).doc_link(array('sql'=>'example-auto-increment.html','mariadb'=>'auto_increment/')),"auto_increment=1&create",lang(48),);$e["Rows"]=array(lang(298).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'catalog-pg-class.html#CATALOG-PG-CLASS','oracle'=>'REFRN20286')),"select",lang(45),);if(support("comment"))$e["Comment"]=array(lang(54).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-info.html#FUNCTIONS-INFO-COMMENT-TABLE')));$Da=array('Engine','Collation','Comment');foreach($e
as$x=>$d)echo"<th".($oh==$x?" aria-sort='".(in_array($x,$Da)?"ascending":"descending")."'":"")."><a href='".h(ME)."order=$x'>$d[0]</a>";echo"<tbody>\n";if($oh){uasort($hk,function($ja,$Ja)use($oh,$Da){$I=($ja[$oh]<$Ja[$oh]?-1:($ja[$oh]>$Ja[$oh]?1:0));return(in_array($oh,$Da)?$I:-$I);});}$T=0;$Uj=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach($hk
as$C=>$P){$wl=($Rd?is_view($P):$P!==null&&!preg_match('~table|sequence~i',$P));$P=($Rd?$P:array('Engine'=>$P));$t=h("Table-".$C);echo'<tr><td class="hover">'.checkbox(($wl?"views[]":"tables[]"),$C,in_array("$C",$ik,true),"","","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".url_escape($C)."' title='".lang(46)."' id='$t'>".h($C).'</a>':h($C));if($wl&&!preg_match('~materialized~i',$P['Engine'])){$uk=lang(143);echo'<td colspan="'.(count($e)-(support("comment")?2:1)).'">'.(support("view")?"<a href='".h(ME)."view=".url_escape($C)."' title='".lang(47)."'>$uk</a>":$uk),"<td align='right'><a href='".h(ME)."select=".url_escape($C)."' title='".lang(45)."'>?</a>";if(support("comment"))echo'<td>'.h($P['Comment']);}else{if($Rd){foreach(array_keys($Uj)as$x)$Uj[$x]+=($P["Engine"]!="InnoDB"||$x!="Data_free"?idx($P,$x):0);}foreach($e
as$x=>$d){$t=" id='$x-".h($C)."'";echo($d[1]?"<td align='right'><a href='".h(ME."$d[1]=").url_escape($C)."'$t title='$d[2]'>".format_status($P,$x)."</a>":"<td$t>".h(idx($P,$x,'?')));}$T++;}echo"\n";}echo"<tr><td class='hover'><th>".lang(270,count($hk)),"<td>".h(JUSH=="sql"?get_val("SELECT @@default_storage_engine"):""),(collations()?"<td>".h(db_collation(DB,collations())):'');if($Rd&&function_exists('Adminer\db_status'))$Uj=db_status();foreach($Uj
as$x=>$Tj)echo($e[$x]?"<td align='right' id='sum-$x'>".($Rd?format_number($Tj):""):"");echo"\n","</table>\n",($Rd?'':script("ajaxSetHtml('".js_escape(ME)."script=db');")),"</div>\n";if(!information_schema(DB)){$pl="<input type='submit' value='".lang(299)."'".on_help("VACUUM")."> ";$kh="<input type='submit' name='optimize' value='".lang(300)."'".on_help(JUSH=="sql"?"OPTIMIZE TABLE":"VACUUM ANALYZE")."> ";$ni=(JUSH=="sqlite"?$pl."<input type='submit' name='check' value='".lang(301)."'".on_help("PRAGMA integrity_check")."> ":(JUSH=="pgsql"?$pl.$kh:(JUSH=="sql"?"<input type='submit' value='".lang(302)."'".on_help("ANALYZE TABLE")."> ".$kh."<input type='submit' name='check' value='".lang(301)."'".on_help("CHECK TABLE")."> "."<input type='submit' name='repair' value='".lang(303)."'".on_help("REPAIR TABLE")."> ":""))).(function_exists('Adminer\truncate_tables')?"<input type='submit' name='truncate' value='".lang(304)."'".confirm().on_help(JUSH=="sqlite"?"DELETE":"TRUNCATE".(JUSH=="pgsql"?"":" TABLE"))."> ":"").(function_exists('Adminer\drop_tables')?"<input type='submit' name='drop' value='".lang(138)."'".confirm().on_help("DROP TABLE").">":"");echo($ni?"<div class='footer'><div>\n<fieldset><legend>".lang(137)." <span id='selected'></span></legend><div>$ni\n</div></fieldset>\n":"");$i=(support("scheme")?adminer()->schemas():adminer()->databases());if(count($i)!=1&&function_exists('Adminer\move_tables')){echo"<fieldset><legend>".lang(305)." <span id='selected3'></span></legend><div>";$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'" autocapitalize="off">'),"</label> <input type='submit' name='move' value='".lang(121)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(22)."'> ".checkbox("overwrite",1,$_POST["overwrite"],lang(306)):""),"</div></fieldset>\n";}echo"<input type='hidden' name='all' value=''".on('click','countTables',$T).">\n",input_token(),"</div></div>\n";}echo"</form>\n",script("tableCheck();");}echo(function_exists('Adminer\alter_table')?"<p class='links hover'><a href='".h(ME)."create='>".lang(81)."</a>\n":''),(support("view")?"<a href='".h(ME)."view='>".lang(223)."</a>\n":""),"</div>\n";if(support("routine")){echo"<div>\n","<h3 id='routines'>".lang(76)."</h3>\n";$Vi=routines();if($Vi){echo"<table class='odds'>\n",'<thead><tr><th>'.lang(200).'<td>'.lang(53).'<td>'.lang(240)."<td class='hover'><tbody>\n";foreach($Vi
as$J){$C=($J["SPECIFIC_NAME"]==$J["ROUTINE_NAME"]?"":"&name=".url_escape($J["ROUTINE_NAME"]));echo'<tr>','<th><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').url_escape($J["SPECIFIC_NAME"]).$C).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td class="hover"><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').url_escape($J["SPECIFIC_NAME"]).$C).'">'.lang(150)."</a>";}echo"</table>\n";}echo'<p class="links hover">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(239).'</a>':'').'<a href="'.h(ME).'function=">'.lang(238)."</a>\n","</div>\n";}if(support("sequence")){echo"<div>\n","<h3 id='sequences'>".lang(77)."</h3>\n";$nj=get_vals("SELECT relname FROM pg_class WHERE relkind = 'S' AND relnamespace = ".driver()->nsOid." ORDER BY relname");if($nj){echo"<table class='odds'>\n","<thead><tr><th>".lang(200)."<tbody>\n";foreach($nj
as$X)echo"<tr><th><a href='".h(ME)."sequence=".url_escape($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links hover'><a href='".h(ME)."sequence='>".lang(245)."</a>\n","</div>\n";}if(support("type")){echo"<div>\n","<h3 id='user-types'>".lang(7)."</h3>\n";$ml=types();if($ml){echo"<table class='odds'>\n","<thead><tr><th>".lang(200)."<tbody>\n";foreach($ml
as$X)echo"<tr><th><a href='".h(ME)."type=".url_escape($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links hover'><a href='".h(ME)."type='>".lang(250)."</a>\n","</div>\n";}if(support("event")){echo"<div>\n","<h3 id='events'>".lang(78)."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table>\n","<thead><tr><th>".lang(200)."<td>".lang(307)."<td>".lang(229)."<td>".lang(230)."<td><tbody>\n";foreach($K
as$J)echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?lang(308)."<td>".h($J["Execute at"]):lang(231)." ".h($J["Interval value"])." ".h($J["Interval field"])."<td>".h($J["Starts"])),"<td>".h($J["Ends"]),'<td><a href="'.h(ME).'event='.url_escape($J["Name"]).'">'.lang(150).'</a>';echo"</table>\n";$bd=get_val("SELECT @@event_scheduler");if($bd&&$bd!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($bd)."\n";}echo'<p class="links hover"><a href="'.h(ME).'event=">'.lang(228)."</a>\n","</div>\n";}}}}page_footer();