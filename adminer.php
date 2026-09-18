<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 6.1.0
*/namespace
Adminer;if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];const
VERSION="6.1.0";error_reporting(24575);set_error_handler(function($md,$od){return!!preg_match('~^Undefined (array key|offset|index)~',$od);},E_WARNING|E_NOTICE);$Rd=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Rd||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$Hm=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($Hm)$$W=$Hm;}}$_COOKIE=array_filter($_COOKIE,'is_scalar');if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");function
connection($g=null){return($g?:Db::$instance);}function
adminer(){return
Adminer::$instance;}function
driver(){return
Driver::$instance;}function
connect(){$dc=adminer()->credentials();$H=Driver::connect($dc[0],$dc[1],$dc[2]);return(is_object($H)?$H:null);}function
idf_unescape($u){if(!preg_match('~^[`\'"[]~',$u))return$u;$cg=substr($u,-1);return
str_replace($cg.$cg,$cg,substr($u,1,-1));}function
q($P){return
connection()->quote($P);}function
idx($Ea,$x,$k=null){return($Ea&&array_key_exists($x,$Ea)?$Ea[$x]:$k);}function
number($W){return
preg_replace('~[^0-9]+~','',$W);}function
int_type(){return'(tiny|small|medium|big)?int(eger|\d)?';}function
number_type(){return'(^('.int_type().'|decimal|numeric|number|real|(binary_|half_|scaled_)?float\d?|(binary_)?double( precision)?|(small)?money)$)';}function
text_type(){return'char|text'.(JUSH=="sql"?'|enum|set':'');}function
is_searchable(array$m,array$W){if(!isset($m["privileges"]["where"]))return
false;$T=$m["type"];$mk=$W["val"];$Va='binary$|bytea|raw|image|bfile|^vector$'.(JUSH=="mssql"?'|^timestamp$':'|^bit').(JUSH=="oracle"?'|^blob|^long|rowid':'');if(preg_match("~$Va~",$T))return
false;if(preg_match(number_type(),$T)){$Eh='-?\d+(\.\d+)?';return(bool)preg_match('~^'.$Eh.(preg_match('~IN$~',$W["op"])?"( *, *$Eh)*":'').'$~',$mk);}if(preg_match('~^(small)?date|^timestamp~',$T))return(bool)preg_match('~^\d+-\d+-\d+~',$mk);if(preg_match('~^time~',$T))return(bool)preg_match('~^\d+:\d+~',$mk);if(preg_match('~^bool~',$T)||(JUSH=="mssql"&&$T=="bit"))return(bool)preg_match('~^(t|f|true|false|[01])$~i',$mk);return
true;}function
remove_slashes(array$Y,$Rd=false){$H=array();foreach($Y
as$x=>$W)$H[stripslashes($x)]=(is_array($W)?remove_slashes($W,$Rd):($Rd?$W:stripslashes($W)));return$H;}function
bracket_escape($u,$Oa=false){static$jm=array(':'=>':1',']'=>':2','['=>':3','"'=>':4','='=>':5');return
strtr($u,($Oa?array_flip($jm):$jm));}function
url_escape($P){static$jm=array();if(!$jm){$jm=array(' '=>'+');foreach(str_split("\"'<>#%&+=?".ini_get("arg_separator.input"))as$jb)$jm[$jb]=sprintf('%%%02X',ord($jb));for($s=0;$s<256;$s++){if($s<32||$s>126)$jm[chr($s)]=sprintf('%%%02X',$s);}}return
strtr((string)$P,$jm);}function
min_version($hn,$xg="",$g=null){$g=connection($g);$Hk=$g->server_info;if($xg&&preg_match('~([\d.]+)-MariaDB~',$Hk,$A)){$Hk=$A[1];$hn=$xg;}return$hn&&version_compare($Hk,$hn)>=0;}function
charset(Db$f){return(min_version("5.5.3",0,$f)?"utf8mb4":"utf8");}function
ini_set($di,$X){return(function_exists('ini_set')?\ini_set($di,$X):false);}function
ini_bool($tf){$W=ini_get($tf);return(preg_match('~^(on|true|yes)$~i',$W)||(int)$W);}function
ini_bytes($tf){$W=ini_get($tf);switch(strtolower(substr($W,-1))){case'g':$W=(int)$W*1024;case'm':$W=(int)$W*1024;case'k':$W=(int)$W*1024;}return$W;}function
max_input_vars($I,$si){$Ag=(int)ini_get("max_input_vars");return($Ag?(int)floor(($Ag-$si)/$I):0);}function
max_input_vars_error(){$tf="max_input_vars";return
lang(0,"<b>$tf = ".ini_get($tf)."</b>");}function
sid(){static$H;if($H===null)$H=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$H;}function
set_password($gn,$M,$U,$E){$_SESSION["pwds"][$gn][$M][$U]=($_COOKIE["adminer_key"]&&is_string($E)?array(encrypt_string($E,$_COOKIE["adminer_key"])):$E);}function
get_password(){$H=get_session("pwds");if(is_array($H))$H=($_COOKIE["adminer_key"]?decrypt_string($H[0],$_COOKIE["adminer_key"]):false);return$H;}function
get_val($F,$m=0,$Lb=null){$Lb=connection($Lb);$G=$Lb->query($F);if(!is_object($G))return
false;$I=$G->fetch_row();return($I?$I[$m]:false);}function
get_vals($F,$d=0){$H=array();$G=connection()->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[]=$I[$d];}return$H;}function
get_key_vals($F,$g=null,$Kk=true){$g=connection($g);$H=array();$G=$g->query($F);if(is_object($G)){while($I=$G->fetch_row()){if($Kk)$H[$I[0]]=$I[1];else$H[]=$I[0];}}return$H;}function
get_rows($F,$g=null,$l="<p class='error'>"){$Lb=connection($g);$H=array();$G=$Lb->query($F);if(is_object($G)){while($I=$G->fetch_assoc())$H[]=$I;}elseif(!$G&&!$g&&$l&&(defined('Adminer\PAGE_HEADER')||$l=="-- "))echo$l.adminer()->error()."\n";return$H;}function
unique_array($I,array$w){foreach($w
as$v){if(preg_match("~^(PRIMARY|UNIQUE)$~",$v["type"])&&!$v["partial"]){$H=array();foreach($v["columns"]as$x){if(!isset($I[$x]))continue
2;$H[$x]=$I[$x];}return$H;}}}function
where_function($oe,$d,array$m){if($oe=="md5")return"MD5(".(is_blob($m)||JUSH!='sql'||preg_match("~^utf8~",$m["collation"])?$d:"CONVERT($d USING ".charset(connection()).")").")";return(in_array($oe,driver()->functions)||in_array($oe,driver()->grouping)?apply_sql_function($oe,$d):$d);}function
where(array$Z,array$n=array()){$H=array();foreach((array)$Z["where"]as$x=>$W){$x=bracket_escape($x,true);$d=idf_escape($x);$m=idx($n,$x,array());$Ld=$m["type"];$Ff=$m&&(is_blob($m)||preg_match('~binary~',$Ld));$H[]=$d.($Ff&&!is_utf8($W)?" = ".driver()->quoteBinary($W):(JUSH=="sql"&&$Ld=="json"?" = CAST(".q($W)." AS JSON)":(JUSH=="pgsql"&&preg_match('~^jsonb?$~',$m["full_type"])?"::jsonb = ".q($W)."::jsonb":(JUSH=="sql"&&is_numeric($W)&&preg_match('~\.~',$W)?" LIKE ".q($W):(JUSH=="mssql"&&strpos($Ld,"datetime")===false?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$W)):" = ".unconvert_field($m,q($W)))))));if(JUSH=="sql"&&preg_match('~char|text~',$Ld)&&preg_match("~[^ -@]~",$W))$H[]="$d = ".q($W)." COLLATE ".charset(connection())."_bin";}foreach((array)$Z["null"]as$x)$H[]=idf_escape($x)." IS NULL";foreach((array)$Z["col"]as$s=>$xb){$W=idx($Z["val"],$s);$H[]=where_function(idx($Z["fun"],$s),idf_escape($xb),idx($n,$xb,array())).($W!==null?" = ".q($W):" IS NULL");}return
implode(" AND ",$H);}function
where_columns(array$n){$H=array();foreach((array)$_GET["null"]as$x)$H[$x]=true;foreach(array_keys((array)$_GET["where"])as$x)$H[bracket_escape($x,true)]=true;foreach((array)$_GET["col"]as$xb)$H[$xb]=true;return
array_intersect_key($H,$n);}function
where_check($W,array$n=array()){parse_str($W,$mb);remove_slashes(array(&$mb));return
where($mb,$n);}function
where_link($s,$d,$X,$ai="="){$Xh=($X!==null?$ai:"IS NULL");return"&where[$s][col]=".url_escape($d).($Xh!=first(adminer()->operators())?"&where[$s][op]=".url_escape($Xh):"")."&where[$s][val]=".url_escape($X);}function
convert_fields(array$e,array$n,array$L=array()){$H="";foreach($e
as$x=>$W){if($L&&!in_array(idf_escape($x),$L))continue;$Fa=convert_field($n[$x]);if($Fa)$H
.=", $Fa AS ".idf_escape($x);}return$H;}function
cookie_path(){return
strtr(preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]),array(";"=>"%3B",","=>"%2C"));}function
cookie($B,$X,$mg=2592000){header("Set-Cookie: $B=".rawurlencode($X).($mg?"; expires=".gmdate("D, d M Y H:i:s",time()+$mg)." GMT":"")."; path=".cookie_path().(HTTPS?"; secure":"").($B=="adminer_import"?"":"; HttpOnly")."; SameSite=lax",false);}function
get_url($Qm,$Ub){$http_response_header=null;$nd=array();set_error_handler(function($md,$l)use(&$nd){$nd[]=preg_replace('~^file_get_contents\([^)]*\):\s*~','',$l);return
true;});$H=file_get_contents($Qm,false,$Ub);restore_error_handler();$Le=(function_exists('http_get_last_response_headers')?http_get_last_response_headers():$http_response_header);return
array($H,(preg_match('~^HTTP/[\d.]+ (\d+)~',idx($Le,0,''),$A)?$A[1]:''),(array)$Le,($H===false?implode("\n",$nd):''),);}function
get_settings($Yb){parse_str($_COOKIE[$Yb],$Lk);return$Lk;}function
get_setting($x,$Yb="adminer_settings",$k=null){return
idx(get_settings($Yb),$x,$k);}function
save_settings(array$Lk,$Yb="adminer_settings"){$X=http_build_query($Lk+get_settings($Yb));cookie($Yb,$X);$_COOKIE[$Yb]=$X;}function
restart_session(){if(!ini_bool("session.use_cookies")&&(!function_exists('session_status')||session_status()==PHP_SESSION_NONE))session_start();}function
stop_session($Zd=false){$Tm=ini_bool("session.use_cookies");if(!$Tm||$Zd){session_write_close();if($Tm&&ini_set("session.use_cookies",'0')===false)session_start();}}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$W){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($gn,$M,$U,$j=null){$Pm=remove_from_uri(implode("|",array_keys(SqlDriver::$drivers))."|username|ext|".($j!==null?"db|":"").($gn=='mssql'||$gn=='pgsql'?"":"ns|").session_name());preg_match('~([^?]*)\??(.*)~',$Pm,$A);return"$A[1]?".(sid()?SID."&":"").($_GET["ext"]?"ext=".url_escape($_GET["ext"])."&":"").($gn!="server"||$M!=""?url_escape($gn)."=".url_escape($M)."&":"")."username=".url_escape($U).($j!=""?"&db=".url_escape($j):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($tg,$Qg=null){if($Qg!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($tg!==null?$tg:$_SERVER["REQUEST_URI"]))][]=$Qg;}if($tg!==null){if($tg=="")$tg=".";header("Location: $tg");exit;}}function
query_redirect($F,$tg,$Qg,$Bj=true,$vd=true,$Fd=false,$Wl=""){if($vd){$hl=microtime(true);$Fd=!connection()->query($F);$Wl=format_time($hl);}$al=($F?adminer()->messageQuery($F,$Wl,$Fd):"");if($Fd){adminer()->error
.=adminer()->error().$al.script("messagesPrint();")."<br>";return
false;}if($Bj)redirect($tg,$Qg.$al);return
true;}class
Queries{static$queries=array();static$start=0;}function
remember_query($F){if(!Queries::$start)Queries::$start=microtime(true);Queries::$queries[]=(driver()->delimiter!=';'?$F:(preg_match('~;$~',$F)?"DELIMITER ;;\n$F;\nDELIMITER ":$F).";");}function
queries($F){remember_query($F);return
connection()->query($F);}function
apply_queries($F,array$S,$pd='Adminer\table'){foreach($S
as$Q){if(!queries("$F ".$pd($Q)))return
false;}return
true;}function
queries_redirect($tg,$Qg,$Bj){$wj=implode("\n",Queries::$queries);$Wl=format_time(Queries::$start);return
query_redirect($wj,$tg,$Qg,$Bj,false,!$Bj,$Wl);}function
format_time($hl){return
lang(1,max(0,microtime(true)-$hl));}function
relative_uri($Pm=''){return
preg_replace_callback('~^[^?]*~',function($A){return
str_replace(":","%3A",$A[0]);},preg_replace('~^[^?]*/([^?]*)~','\1',($Pm?:$_SERVER["REQUEST_URI"])));}function
remove_from_uri($zi=""){return
substr(preg_replace("~(?<=[?&])($zi".(SID?"":"|".session_name()).")=[^&]*&~",'',relative_uri()."&"),0,-1);}function
get_files($B,$sc=false){$Nd=$_FILES[$B];if(!$Nd)return
null;foreach($Nd
as$x=>$W)$Nd[$x]=(array)$W;$H=array();foreach($Nd["error"]as$x=>$l){if($l)return$l;$o=$Nd["name"][$x];$em=$Nd["tmp_name"][$x];$Sb=file_get_contents($sc&&preg_match('~\.gz$~',$o)?"compress.zlib://$em":$em);if($sc){$hl=substr($Sb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$hl))$Sb=iconv("utf-16","utf-8",$Sb);elseif($hl=="\xEF\xBB\xBF")$Sb=substr($Sb,3);}$H[]=array($o,$Sb);}return$H;}function
get_file($x,$sc=false,$zc=""){$Qd=get_files($x,$sc);if(!is_array($Qd))return$Qd;$H='';foreach($Qd
as$Nd){$Sb=$Nd[1];$H
.=$Sb;if($zc)$H
.=(preg_match("($zc\\s*\$)",$Sb)?"":$zc)."\n\n";}return$H;}function
upload_error($l){$Ig=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?lang(2).($Ig?" ".lang(3,$Ig):""):lang(4));}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\0-\x8\xB\xC\xE-\x1F]~',$W));}function
utf8_length($W){return
strlen(preg_replace('~[\x80-\xBF]~','',$W));}function
format_number($W){preg_match('~^#+([^#0]+)(?:(#+)\1)?(#*0)$~u',lang(5),$A);$Pk=strlen($A[3]);$H=number_format($W,0,".","");$H=preg_replace('~\B(?=(\d{'.(strlen($A[2])?:$Pk).'})*\d{'.$Pk.'}$)~',$A[1],$H);return
strtr($H,preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
format_status(array$R,$x){$W=idx($R,$x,'?');if(!is_numeric($W))return
h($W);if($W<0)return'?';$Ba=($x=="Rows"&&(JUSH=="sqlite"||$R["Engine"]==(JUSH=="pgsql"?"table":"InnoDB")));return($Ba?"~ ":"").format_number($W);}function
friendly_url($W){return
preg_replace('~\W~i','-',$W);}function
table_status1($Q,$Gd=false){$H=table_status($Q,$Gd);return($H?reset($H):array("Name"=>$Q));}function
column_foreign_keys($Q){$H=array();foreach(adminer()->foreignKeys($Q)as$p){foreach($p["source"]as$W)$H[$W][]=$p;}return$H;}function
fields_from_edit(){$H=array();foreach((array)$_POST["field_keys"]as$x=>$W){if($W!=""){$W=bracket_escape($W);$_POST["function"][$W]=$_POST["field_funs"][$x];$_POST["fields"][$W]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$W){$B=bracket_escape($x,true);$H[$B]=array("field"=>$B,"full_type"=>"","type"=>"","privileges"=>array("insert"=>1,"update"=>1,"where"=>1,"order"=>1),"null"=>true,"auto_increment"=>($B==driver()->primary),);}return$H;}function
dump_headers($Xe,$ih=false){$H=adminer()->dumpHeaders($Xe,$ih);$ui=$_POST["output"];if($ui!="text"||$H=="tar"){$Hb=($ui!="text"&&$ui!="file"&&preg_match('~^[0-9a-z]+$~',$ui)?".$ui":"");header("Content-Disposition: attachment; filename=".adminer()->dumpFilename($Xe).".$H$Hb");}session_write_close();if(!ob_get_level())ob_start(null,4096);ob_flush();flush();return$H;}function
dump_csv(array$I){$wm=$_POST["format"]=="tsv";foreach($I
as$x=>$W){if(preg_match('~["\n]|^0[^.]|\.\d*0$|'.($wm?'\t':'[,;]|^$').'~',$W))$I[$x]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($wm?"\t":";")),$I)."\r\n";}function
parse_csv($gc,$xk){$H=array();preg_match_all('~(?>"[^"]*"|[^"\r\n]+)+~',$gc,$zg);foreach($zg[0]as$I){preg_match_all("~((?>\"[^\"]*\")+|[^$xk]*)$xk~",$I.$xk,$_g);$H[]=$_g[1];}return$H;}function
csv_value($W){return(preg_match('~^".*"$~s',$W)?str_replace('""','"',substr($W,1,-1)):$W);}function
apply_sql_function($q,$d){return($q?($q=="unixepoch"?"DATETIME($d, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$d)"):$d);}function
get_temp_dir(){return
ini_get("upload_tmp_dir")?:sys_get_temp_dir();}function
file_open_lock($o){if(is_link($o))return;$ge=@fopen($o,"c+");if(!$ge)return;@chmod($o,0660);if(!flock($ge,LOCK_EX)){fclose($ge);return;}return$ge;}function
file_write_unlock($ge,$kc){rewind($ge);fwrite($ge,$kc);ftruncate($ge,strlen($kc));file_unlock($ge);}function
file_unlock($ge){flock($ge,LOCK_UN);fclose($ge);}function
first(array$Ea){return
reset($Ea);}function
password_file($h){$o=get_temp_dir()."/adminer.key";if(!$h&&!file_exists($o))return'';$ge=file_open_lock($o);if(!$ge)return'';$H=stream_get_contents($ge);if(!$H){$H=rand_string();file_write_unlock($ge,$H);}else
file_unlock($ge);return$H;}function
rand_string(){return(function_exists('random_bytes')?bin2hex(random_bytes(16)):md5(uniqid(strval(mt_rand()),true)));}function
select_value($W,$_,array$m,$Ul){if(is_array($W)){$H="";if(array_filter($W,'is_array')==array_values($W)){$Sf=array();foreach($W
as$V)$Sf+=array_fill_keys(array_keys($V),null);foreach(array_keys($Sf)as$Pf)$H
.="<th>".h($Pf);foreach($W
as$V){$H
.="<tr>";foreach(array_merge($Sf,$V)as$an)$H
.="<td>".select_value($an,$_,$m,$Ul);}}else{foreach($W
as$Pf=>$V)$H
.="<tr>".($W!=array_values($W)?"<th>".h($Pf):"")."<td>".select_value($V,$_,$m,$Ul);}return"<table>$H</table>";}if(!$_)$_=adminer()->selectLink($W,$m);if($_===null){if(is_mail($W))$_="mailto:$W";if(is_url($W))$_=$W;}$W=driver()->value($W,$m);$H=adminer()->editVal($W,$m);if($H!==null){if(!is_utf8($H))$H="\0";elseif($Ul!=""&&is_shortable($m))$H=shorten_utf8($H,max(0,+$Ul));else$H=h($H);}return
adminer()->selectVal($H,$_,$m,$W);}function
is_blob(array$m){return
preg_match('~blob|bytea|raw|file'.(JUSH=="mssql"?'|binary|image':'').'~',$m["type"])&&!in_array($m["type"],idx(driver()->structuredTypes(),lang(7),array()));}function
is_mail($dd){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Ri="$Ha+(\\.$Ha+)*@($Pc?\\.)+$Pc";return
is_string($dd)&&preg_match("(^$Ri(,\\s*$Ri)*\$)i",$dd);}function
is_url($P){$Pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^((https?):)?//($Pc?\\.)+$Pc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P);}function
is_ipv6($oa){$r='[\da-f]{1,4}';$Ef='\d{1,3}(\.\d{1,3}){3}';return(bool)preg_match("~^(($r:){7}$r|($r:){6}$Ef|(($r:)*$r)?::(($r:)*($r|$Ef))?)$~iD",$oa);}function
is_shortable(array$m){return!preg_match('~'.number_type().'|date|time|year~',$m["type"]);}function
url_host($Te){return(strpos($Te,":")!==false?"[$Te]":$Te);}function
server_parts(array$Li){return
array("scheme"=>(string)$Li["scheme"],"host"=>(string)$Li["host"],"port"=>(string)$Li["port"],"socket"=>(string)$Li["socket"],"path"=>(string)$Li["path"],);}function
parse_server($M){if($M=="")return
server_parts(array());if($M[0]==":"&&!is_ipv6($M)){$Pj=substr($M,1);if(preg_match('~^\d+$~D',$Pj))return
server_parts(array("port"=>$Pj));return(preg_match('~^/[-\w.:/]*$~D',$Pj)?server_parts(array("socket"=>$Pj)):null);}$kk="";if(preg_match('~^([-+.\w]+)://~',$M,$A)){$kk=strtolower($A[1]);$M=substr($M,strlen($A[0]));}if(preg_match('~^\[(.+)](:(\d+))?(/[-\w./]*)?$~D',$M,$A))return(is_ipv6($A[1])?server_parts(array("scheme"=>$kk,"host"=>$A[1],"port"=>$A[3],"path"=>$A[4])):null);if(is_ipv6($M))return
server_parts(array("scheme"=>$kk,"host"=>$M));if(preg_match('~^(/[-\w./]*)(:(\d+))?$~D',$M,$A))return
server_parts(array("scheme"=>$kk,"host"=>$A[1],"port"=>$A[3]));return(preg_match('~^([-\w.]*)(:(\d+))?(/[-\w./]*)?$~D',$M,$A)?server_parts(array("scheme"=>$kk,"host"=>$A[1],"port"=>$A[3],"path"=>$A[4])):null);}function
count_rows($Q,array$Z,$Gf,array$r){$F=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($Gf&&(JUSH=="sql"||count($r)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$r).")$F":"SELECT COUNT(*)".($Gf?" FROM (SELECT 1$F GROUP BY ".implode(", ",$r).") x":$F));}function
slow_query($F){$j=adminer()->database();$Xl=adminer()->queryTimeout();$Rk=driver()->slowQuery($F,$Xl);$g=null;if(!$Rk&&support("kill")){$g=connect();if($g&&($j==""||$g->select_db($j))){$Tf=number(get_val(connection_id(),0,$g));echo
script("const timeout = setTimeout(() => { ajax('".js_escape(ME)."script=kill', function () {}, 'kill=$Tf&token=".get_token()."'); }, 1000 * $Xl);");}}ob_flush();flush();$H=@get_key_vals(($Rk?:$F),$g,false);if($g){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$H;}function
get_token(){$zj=rand(1,1e6);return($zj^$_SESSION["token"]).":$zj";}function
verify_token(){list($fm,$zj)=explode(":",$_POST["token"]);return($zj^$_SESSION["token"])==$fm&&in_array($_SERVER["HTTP_SEC_FETCH_SITE"],array("","same-origin"));}function
compress_alphabet(){return
strtr(implode(range('"','~')),"'\\","!\n");}function
decompress_string($P,$Ec=""){$za=array_flip(str_split(compress_alphabet()));$y=strlen($P);$dn=($y?13*($y-1)/2-$za[$P[0]]:0);$Va="";$Pj=0;$Qj=0;for($s=1;$s<$y;$s+=2){$Pj=($Pj<<13)+$za[$P[$s]]*93+$za[$P[$s+1]];$Qj+=13;while($Qj>=8&&$dn>=8){$Qj-=8;$dn-=8;$Va
.=chr($Pj>>$Qj);$Pj&=(1<<$Qj)-1;}}if($Va=="")return"";if($Ec!=""&&function_exists('inflate_init'))return
inflate_add(inflate_init(ZLIB_ENCODING_RAW,array('dictionary'=>$Ec)),$Va,ZLIB_FINISH);return($Ec==""&&function_exists('gzinflate')?gzinflate($Va):inflate($Va,$Ec));}function
inflate($Va,$Ec=""){$jg=array(3,4,5,6,7,8,9,10,11,13,15,17,19,23,27,31,35,43,51,59,67,83,99,115,131,163,195,227,258);$kg=array(0,0,0,0,0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,0);$Ic=array(1,2,3,4,5,7,9,13,17,25,33,49,65,97,129,193,257,385,513,769,1025,1537,2049,3073,4097,6145,8193,12289,16385,24577);$Kc=array(0,0,0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10,11,11,12,12,13,13);$H=$Ec;$aj=0;do{$Sd=inflate_bits($Va,$aj,1);$T=inflate_bits($Va,$aj,2);if(!$T){$aj=($aj+7)&~7;$y=inflate_bits($Va,$aj,16);$aj+=16;$H
.=substr($Va,$aj>>3,$y);$aj+=$y<<3;}else{if($T==1){$rg=array_merge(array_fill(0,144,8),array_fill(0,112,9),array_fill(0,24,7),array_fill(0,8,8));$Lc=array_fill(0,30,5);}else{$qg=inflate_bits($Va,$aj,5)+257;$Jc=inflate_bits($Va,$aj,5)+1;$gi=array(16,17,18,0,8,7,9,6,10,5,11,4,12,3,13,2,14,1,15);$Wg=array_fill(0,19,0);$Vg=inflate_bits($Va,$aj,4)+4;for($s=0;$s<$Vg;$s++)$Wg[$gi[$s]]=inflate_bits($Va,$aj,3);$Xg=inflate_table($Wg);$lg=array();while(count($lg)<$qg+$Jc){$tl=inflate_symbol($Va,$aj,$Xg);if($tl==16)$lg=array_merge($lg,array_fill(0,inflate_bits($Va,$aj,2)+3,end($lg)));elseif($tl==17)$lg=array_merge($lg,array_fill(0,inflate_bits($Va,$aj,3)+3,0));elseif($tl==18)$lg=array_merge($lg,array_fill(0,inflate_bits($Va,$aj,7)+11,0));else$lg[]=$tl;}$rg=array_slice($lg,0,$qg);$Lc=array_slice($lg,$qg);}$sg=inflate_table($rg);$Nc=inflate_table($Lc);while(($tl=inflate_symbol($Va,$aj,$sg))!=256){if($tl<256)$H
.=chr($tl);else{$y=$jg[$tl-257]+inflate_bits($Va,$aj,$kg[$tl-257]);$Mc=inflate_symbol($Va,$aj,$Nc);$Lh=strlen($H)-$Ic[$Mc]-inflate_bits($Va,$aj,$Kc[$Mc]);for($s=0;$s<$y;$s++)$H
.=$H[$Lh+$s];}}}}while(!$Sd);return($Ec==""?$H:substr($H,strlen($Ec)));}function
inflate_bits($Va,&$aj,$ac){$H=0;for($s=0;$s<$ac;$s++){$H+=((ord($Va[$aj>>3])>>($aj&7))&1)<<$s;$aj++;}return$H;}function
inflate_table(array$lg){$Q=array();$wb=0;for($Wa=1;$Wa<=max($lg);$Wa++){foreach($lg
as$tl=>$y){if($y==$Wa){$Q[$Wa][$wb]=$tl;$wb++;}}$wb<<=1;}return$Q;}function
inflate_symbol($Va,&$aj,array$Q){$wb=0;$Wa=0;do{$wb=($wb<<1)+inflate_bits($Va,$aj,1);$Wa++;}while(!isset($Q[$Wa][$wb]));return$Q[$Wa][$wb];}function
script($Wk,$im="\n"){return"<script".nonce().">$Wk</script>$im";}function
script_src($Qm,$vc=false){return"<script src='".h($Qm)."'".nonce().($vc?" defer":"")."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
on($qd,$Ce,$Ca=null){$Da=array();foreach(array_slice(func_get_args(),2)as$W)$Da[]=json_encode($W,256);return" data-on$qd='".str_replace(array('&','<',"'"),array('&amp;','&lt;','&#039;'),"$Ce(".implode(", ",$Da).")")."'";}function
input_hidden($B,$X=""){return"<input type='hidden' name='".h($B)."' value='".h($X)."'>\n";}function
input_token(){return
input_hidden("token",get_token());}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($P){return
str_replace(array('&','<','"',"'","\0"),array('&amp;','&lt;','&quot;','&#039;','&#0;'),$P);}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($B,$X,$pb,$Xf="",$c="",$ub="",$Zf=""){$H="<input type='checkbox' name='$B' value='".h($X)."'".($pb?" checked":"").($Xf==""&&$ub?" class='$ub'":"").($Zf?" aria-labelledby='$Zf'":"").$c.">";return($Xf!=""?"<label".($ub?" class='$ub'":"").">$H".h($Xf)."</label>":$H);}function
optionlist($C,$tk=null,$Um=false){$H="";foreach($C
as$Pf=>$V){$fi=array($Pf=>$V);if(is_array($V)){$H
.='<optgroup label="'.h($Pf).'">';$fi=$V;}foreach($fi
as$x=>$W)$H
.='<option'.($Um||is_string($x)?' value="'.h($x).'"':'').($tk!==null&&($Um||is_string($x)?(string)$x:$W)===$tk?' selected':'').'>'.h($W);if(is_array($V))$H
.='</optgroup>';}return$H;}function
html_select($B,array$C,$X="",$c="",$Zf=""){static$Xf=0;$Yf="";if(!$Zf&&substr($C[""],0,1)=="("){$Xf++;$Zf="label-$Xf";$Yf="<option value='' id='$Zf'>".h($C[""]);unset($C[""]);}return"<select name='".h($B)."'".($Zf?" aria-labelledby='$Zf'":"")."$c>".$Yf.optionlist($C,$X)."</select>";}function
html_radios($B,array$C,$X="",$xk=""){$H="";foreach($C
as$x=>$W)$H
.="<label><input type='radio' name='".h($B)."' value='".h($x)."'".($x==$X?" checked":"").">".h($W)."</label>$xk";return$H;}function
confirm($Qg=""){return
on('click','confirmClick',$Qg?:lang(8));}function
print_fieldset($t,$ig,$kn=false){echo"<fieldset><legend>","<a href='#fieldset-$t' class='toggle'>$ig</a>","</legend>","<div id='fieldset-$t'".($kn?"":" class='hidden'").">\n";}function
bold($Xa,$ub=""){return($Xa?" class='active $ub'":($ub?" class='$ub'":""));}function
js_escape($P){return
str_replace("<","\\x3C",addcslashes($P,"\r\n'\\"));}function
js_escape_re($P){return
addcslashes(preg_quote($P,"/"),"\r\n");}function
pagination_href($D){return
remove_from_uri("page|next").($D?"&page=$D".($_GET["next"]!=""?"&next=".url_escape($_GET["next"]):""):"");}function
pagination($D,$hc){return" ".($D==$hc?($D?"<b>".($D+1)."</b>":$D+1):'<a href="'.h(pagination_href($D)).'">'.($D+1)."</a>");}function
hidden_fields(array$sj,array$cf=array(),$hj=''){$H=false;foreach($sj
as$x=>$W){if(!in_array($x,$cf)){if(is_array($W))hidden_fields($W,array(),$x);else{$H=true;echo
input_hidden(($hj?$hj."[$x]":$x),$W);}}}return$H;}function
hidden_fields_get(){echo(sid()?input_hidden(session_name(),session_id()):''),($_GET["ext"]?input_hidden("ext",$_GET["ext"]):""),(isset($_GET[DRIVER])?input_hidden(DRIVER,SERVER):""),input_hidden("username",$_GET["username"]);}function
on_upload_progress(&$Om){$Om=(ini_bool("session.upload_progress.enabled")&&ini_get("session.upload_progress.name")?rand_string():"");return($Om?on('submit','uploadProgress',ME."upload=$Om",SESSION_NAME."=$Om"):"");}function
file_input($c,$Pj=""){$Cg="max_file_uploads";$Dg=ini_get($Cg);$Ig="upload_max_filesize";$Jg=ini_bytes($Ig);$ej=ini_bytes("post_max_size");if($ej&&$ej<$Jg){$Ig="post_max_size";$Jg=$ej;}$Kg=ini_get($Ig);return(ini_bool("file_uploads")?"<input type='file'$c".on('change','fileChange',(int)$Dg,lang(9,"$Cg = $Dg"),$Jg,lang(9,"$Ig = $Kg")).">$Pj":lang(10));}function
enum_input($T,$c,array$m,$X,$gd=""){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$zg);$hj=($m["type"]=="enum"?"val-":"");$pb=(is_array($X)?in_array("null",$X):$X===null);$H=($m["null"]&&$hj?"<label><input type='$T'$c value='null'".($pb?" checked":"")."><i>$gd</i></label>":"");foreach($zg[1]as$W){$W=stripcslashes(str_replace("''","'",$W));$pb=(is_array($X)?in_array($hj.$W,$X):$X===$W);$H
.=" <label><input type='$T'$c value='".h($hj.$W)."'".($pb?' checked':'').'>'.h(adminer()->editVal($W,$m)).'</label>';}return$H;}function
input(array$m,$X,$q,$Ma=false,$Lm=false){$B=h(bracket_escape($m["field"]));echo"<td class='function'>";$ld=driver()->enumLength($m);if($ld){$m["type"]="enum";$m["length"]=$ld;}$C=($m["type"]=="enum"||$m["type"]=="set");if(is_array($X)&&!$q&&!$C)$q="json";$Nf=($q=="json"||preg_match('~^jsonb?$~',$m["full_type"]));if($Nf&&$X!=''&&(JUSH!="pgsql"||$m["type"]!="json")&&(is_array($X)||!$_POST["save"]))$X=json_encode(is_array($X)?$X:json_decode($X),128|64|256);$Oj=(JUSH=="mssql"&&$Lm&&$m["auto_increment"]);if($Oj&&!$_POST["save"])$q=null;$pe=(isset($_GET["select"])||$Oj?array("orig"=>lang(11)):array())+adminer()->editFunctions($m);$c=" name='fields[$B]".($C?"[]":"")."'".($Ma?" autofocus":"");echo
driver()->unconvertFunction($m)." ";$Q=$_GET["edit"]?:$_GET["select"];if($m["type"]=="enum")echo
h($pe[""])."<td>".adminer()->editInput($Q,$m,$c,$X);else{$Ee=(in_array($q,$pe)||isset($pe[$q]));$Td=0;foreach($pe
as$x=>$W){if($x===""||!$W)break;$Td++;}echo(count($pe)>1?"<select name='function[$B]'".on('change','functionChange').on_help_value('^SQL$').">".optionlist($pe,$q===null||$Ee?$q:"")."</select>":h(reset($pe)))."<td".($Td&&count($pe)>1?on('input','skipOriginal',$Td):"").">";$vf=adminer()->editInput($Q,$m,$c,$X);if($vf!="")echo$vf;elseif(preg_match('~bool~',$m["type"]))echo"<input type='hidden'$c value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$X)?" checked":"")."$c value='1'>";elseif($m["type"]=="set")echo
enum_input("checkbox",$c,$m,(is_string($X)?explode(",",$X):$X));elseif(is_blob($m)&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'>";elseif($Nf)echo"<textarea$c cols='50' rows='12' class='jush-json'>".h($X).'</textarea>';elseif(($Tl=preg_match('~text|lob|memo~i',$m["type"]))||preg_match("~\n~",$X)){if($Tl&&JUSH!="sqlite")$c
.=" cols='50' rows='12'";else{$J=min(12,substr_count($X,"\n")+1);$c
.=" cols='30' rows='$J'";}echo"<textarea$c>".h($X).'</textarea>';}else{$Am=driver()->types();$zm=$Am[$m["type"]];if(preg_match('~date|time|year~',$m["type"])){$he=(preg_match('~time~',$m["type"])&&preg_match('~^\d+$~',$m["length"])?$m["length"]+1:0);$Lg=($zm?$zm+$he:0);}elseif(!preg_match('~int|vector~',$m["type"])&&preg_match('~^(\d+)(,(\d+))?$~',$m["length"],$A))$Lg=(preg_match("~binary~",$m["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$m["unsigned"]?1:0);else$Lg=($zm?$zm+($m["unsigned"]?0:1):0);echo"<input".((!$Ee||$q==="")&&preg_match('~^'.int_type().'$~',$m["type"])&&!preg_match('~\[]~',$m["full_type"])?" type='number'":"")." value='".h($X)."'".($Lg?" data-maxlength='$Lg'":"").(preg_match('~char|binary~',$m["type"])&&$Lg>20?" size='".($Lg>99?60:40)."'":"")."$c>";}echo
adminer()->editHint($Q,$m,$X),(count($pe)>1?script("fire(qs('select', qsl('td').previousSibling), 'change');",""):"");}}function
process_input(array$m){$u=bracket_escape($m["field"]);$q=idx($_POST["function"],$u);if($q=="orig")return(preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?idf_escape($m["field"]):false);if($q=="NULL")return"NULL";if(is_blob($m)&&ini_bool("file_uploads")){$Nd=get_file("fields-$u");if(!is_string($Nd))return
false;return
driver()->quoteBinary($Nd);}$X=idx($_POST["fields"],$u);if($X===null)return
false;if($m["type"]=="enum"||driver()->enumLength($m)){$X=idx($X,0);if($X=="orig"||!$X)return
false;if($X=="null")return"NULL";$X=substr($X,4);}if($m["auto_increment"]&&$X=="")return
null;if($m["type"]=="set")$X=implode(",",(array)$X);if($q=="json"){$X=json_decode($X,true);if(!is_array($X))return
false;return$X;}return
adminer()->processInput($m,$X,$q);}function
search_tables(){$_GET["where"][0]["val"]=$_POST["query"];$wk="<ul>\n";foreach(table_status('',true)as$Q=>$R){$B=adminer()->tableName($R);if(isset($R["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$G=connection()->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",adminer()->selectSearchProcess(fields($Q),array(),$R)),1));if(!$G||$G->fetch_row()){$oj="<a href='".h(ME."select=".url_escape($Q)."&where[0][op]=".url_escape($_GET["where"][0]["op"])."&where[0][val]=".url_escape($_GET["where"][0]["val"]))."'>$B</a>";echo"$wk<li>".($G?$oj:"<p class='error'>$oj: ".adminer()->error())."\n";$wk="";}}}echo($wk?"<p class='message'>".lang(12):"</ul>")."\n";}function
on_help($Tl,$Ok=0){return
on('mouseover','helpMouseover',$Tl,$Ok).on('mouseout','helpMouseout');}function
on_help_value($Ij="",$Nj=""){return
on('mouseover','helpValueMouseover',$Ij,$Nj).on('mouseout','helpMouseout');}function
edit_form($Q,array$n,$I,$Lm,$l='',$F='',$Wl=''){$Bl=adminer()->tableName(table_status1($Q,true));page_header(($Lm?lang(13):lang(14)),$l,array("select"=>array($Q,$Bl)),$Bl);adminer()->editRowPrint($Q,$n,$I,$Lm,$F,$Wl);if($I===false){echo"<p class='error'>".lang(15)."\n";return;}echo"<form action='' method='post' enctype='multipart/form-data' id='form'>\n";$bd=false;$rn=($Lm&&!isset($_GET["select"])?where_columns($n):array());$Vb=(count($rn)!=count($n));if(!$Vb)$rn=array();if(!$n)echo"<p class='error'>".lang(16)."\n";else{echo"<table class='layout nowrap'".on('keydown','editingKeydown').">\n";$Ma=!$_POST;foreach($n
as$B=>$m){echo"<tr".($rn[$B]?on('change','whereChange'):"")."><th>".adminer()->fieldName($m);$k=idx($_GET["set"],bracket_escape($B));if($k===null){$k=$m["default"];if($m["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$k,$Kj))$k=$Kj[1];if(JUSH=="sql"&&preg_match('~binary~',$m["type"]))$k=bin2hex($k);}$X=($I!==null?($m["type"]=="set"&&is_array($I[$B])?implode(",",$I[$B]):(is_bool($I[$B])?+$I[$B]:$I[$B])):(!$Lm&&$m["auto_increment"]?"":(isset($_GET["select"])?false:$k)));if(!$_POST["save"]&&is_string($X))$X=adminer()->editVal($X,$m);if(($Lm&&!isset($m["privileges"]["update"]))||$m["generated"])echo"<td class='function'><td>".select_value($X,'',$m,null);else{$bd=true;$q=($_POST["save"]?idx($_POST["function"],bracket_escape($B),""):($Lm&&preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?"now":($X===false?null:($X!==null?'':'NULL'))));if(!$_POST&&!$Lm&&$X==$m["default"]&&preg_match('~^[\w.]+\(~',$X))$q="SQL";if(preg_match("~time~",$m["type"])&&preg_match('~^CURRENT_TIMESTAMP~i',$X)){$X="";$q="now";}if($m["type"]=="uuid"&&$X=="uuid()"){$X="";$q="uuid";}if($Ma!==false)$Ma=($m["auto_increment"]||$q=="now"||$q=="uuid"?null:true);input($m,$X,$q,$Ma,$Lm);if($Ma)$Ma=false;}}if(!fields($Q)&&driver()->primary!="")echo"<tr>"."<th><input name='field_keys[]'".on('input','fieldChange').">"."<td class='function'>".html_select("field_funs[]",adminer()->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>";echo"</table>\n";}echo"<p>\n";if($bd){echo"<input type='submit' value='".lang(17)."'>\n";if(!isset($_GET["select"])&&$Vb){$Fc=($rn&&($l!=""||adminer()->error!="")?" disabled":"");echo"<input type='submit' name='insert' value='".($Lm?lang(18):lang(19))."' title='Ctrl+Shift+Enter'$Fc".($Lm?on('click','ajaxForm',lang(20)):"").">\n";}}echo($Lm?"<input type='submit' name='delete' value='".lang(21)."'".confirm().">\n":"");if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo
input_hidden("referer",(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"])),input_hidden("save",1),input_token(),"</form>\n";}function
repeat_pattern($Ri,$y){return
str_repeat("$Ri{0,65535}",$y/65535)."$Ri{0,".($y%65535)."}";}function
shorten_utf8($P,$y=80,$pl=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$y).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$A);return(isset($A[2])?h($A[1]).$pl:h(preg_replace('~\n[^\n]*\z~',"\n",$A[1]))."$pl<i>…</i>");}function
icon($We,$B,$Ve,$Zl,$c=""){return"<button ".($B?"type='submit' name='$B'":"draggable='true' tabindex='-1'")." title='".h($Zl)."' class='icon icon-$We".($B?"":" jsonly")."'$c><span>$Ve</span></button>";}function
copy_icon(){$Zb=lang(22);return"<a href='' class='jsonly icon-copy' title='$Zb'><span>$Zb</span></a>";}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");ini_set("zlib.output_compression",'1');if($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
decompress_string('&c(<]iDp;+<8]XG-X#ET@P~g+44jkGE
JJMWB[P=;i#!X$XZ(f>Cx5+d&ydL<""!*rBpff!fkm^bQBjtpU)4hnlgdu9u"]lNs!9kv`}pLnMu[)!?
/nW}!<x5Ey]-bY_G+1cjtywbHdyuU[S<dax0
Hp*-71^<Q=:@:nTh|W:o^Mww"/r*_nT8FCXI``P&A[5^Z%0OT*zx^Qb+nx0qMeS5DapbVg]7?)iJ*"[4}C}*JqDk!0#.uZ{4cX*U8U!(c3>W+"$E"oK-|>@iWX6l|1W=f$g36bV,e8dwLN)WK,R-6f"$IOZ^&_g;N%[.eN;seVrL3)^@fQ(N)+I_+gr(D**O1?;]IF:DMgNjlmV/-JRE},jU`0E2b2_Fpf9

)@uK@TEX-E0q&d=R):2^8UCGmhA|!EnaiTCO9E]<D0H?4_DJf^E8g[o_!1xI!9j?+-`Te!B-`bsPmV=<$,`bFq(52j+hR#Loh4Z}^`&?XpC=4^4pi:lSI}%9<`@NphbTIeYKquP`DgCzfIErRzu1$VT.5awB]A5%[)d{5>a=mnN&rWqBo=.X
Tw&_{V
%Sq9f#Zp&+ZNQ$++;qk~9wv.sKdb"*)BaZ-Rd8a*dAT@)}2F<vSWC)>4(fBxIN6/FUTxn7"S8sH._j
MZyJaF1No9&(oC9Mj$!&r8G6`DEb/r[V9k:,KeQN$Nwm)C1*6S8"llf@pFAAoG/4D@sAUMa$tH0Nxe=WAn8ClYb]V:PG5NQvPEQ9MY9a"sK8d$sbwSU9DlE^VUB#8K_[0Il&{[@9qK~em90k2Er
iHE.IGE5lo=3Fm@1=MM34!r=KC}^AB%"z=;3e,S7Dr[A__{9aL7@?3]wUkew{s
Kr!tOUQ-Od;Xa6m5Lry}k~Z=lWG79i_<MR<{""v1@`P$4PJ;aven@*_GdL;_o"lx_$c<8y9IWTU|Osq9JkImMylT@c$N(Ln|xF2ss%m473U{*{D&9j!_shhxM3N9+>!6ukH~>U
H6~=q:K!~4_*?a.4,ptom8{8q3gi"*zP4(s").ZttK/:m
,t"S~Q*$5DrPlMp-tKNCfZarEOEgXu9y0WwS(y~/"Un1KV"hvF`RGjMPEjEne@V+cmCuTMpXT
<t`2aO<&@?M[UKSJ+*(YwINSt.pPpSJ;Pn5PD=Gc@R=fm!.[e,wG]@IPL]wWa`gc/:~U:Wc$DJ3Gj+
2eUL"[c!@Q8p/,S~mqr"<?
0XMM:b3+dE#]9i$gNv-yec"LJ(+ph]UoG0`k!AB#F!a[~"@r{?A`C#3&71G"4N)hTgk;>?fkeTe)six>@!2!b$R[u0<Md[!hN7}_o1btnf93]BD9{VpB7;n2}HZpvTVo}"
"mq2=-TaS&Q9bUSx
m8v3jj]B%?BHH/CR?FCX_P>PM^]p}*zU98:7d>nF79Q=@92WSCV!/R^0!J2RHE/C<o_N.3^=^6>mK*`hrF`bmW7=kKgPpE@c[x}cOZ[.MuN]nA82wYRQ8aZFL[SRTJA,U_~([MmpHPx&0YNv.m|cO3FQP%+]W#l?:I7(8
Qt@Y,sn_!b6U.0s52(&_K
beRDYJFd8xxs
y7>Hsl2^V9ah^&4i7&"0LF2Jlf[4*eQJeztm
JIetUG(Umx<Dk.qq"liXSR7P4F:]|9:iolL8zc]6"%%C00zP5j&j:Fp,%VTWQDr$"&D-Q&Qpv*oEM1[cNQ_1h%h%fVP0zlH<t,;#H#%e.Fctm:?&09}8ejQ*#ymG%jTVfbjP6;CorQ=bgXl.5%mFrp[6o*F;W8G^}-l`bf]DL*(kY"xL(><J6DZ_Rlgkh]45v^dCUo56(_=9-sm*<t1iF
)4~N~y7m1DJ-;BB*/=;Yg4XxvvRVBmW#.dz#B8/X+<l42=Z2,5[02HjT3Di@]*OIO&j7M^_O)poc3*pnK_@!
ZXx#*C:2R*2aX>hFKR_Sf$CNf3PXwcyB#C.PPia{43H8rWms:/D]=
`P(1b)vuJ]-DX3OymFG/^jL=62O+EV]OZI#L3(RXt^6GGf2SmK"w3"oMIIpDk=
nhqe5h`l}R}m[E~rO(2Y(FP.Wp8rOdY&o>@&ChKb<[1,
P}
y9--6(;1qd/E^LVj`I?CT!xlqLeQzbctp%/D45[9
"b*;u
h?yA5i"gG,jX2uN?QRi]3~8m8R(p(vf8o-qldR!QpK-hY3<)lT_E?$&2M*";9z
j7M[dJ)y!BJxwJ8J~hxwN_2,:qA07U.1,+koMfT-GI%xZ+Q$Jn9x)jLKPYSz"RfZ/`?j&"6$Sb91?&EC|<cJhdb=#B=l`m%]H/^$,IRO~y}lpNeoGTY8>ms9r.i&[,1j=GllhJuQO#+J|^PA.xi+4o1hK7Zg0rGb@qM#[aE8y/4WT;H@o"g-,G:,mE0cR$z9kE_L7MR:C(+SqQ:=HZ|[y8}
:hIGZCd$t&:ipF5IEU0:/?]o.k@3-l&W~<d!SCn;ArSFfgBCZ+7HwO$2O8.L~]<>w_i#jz$N/K.EsFVmy=@*XvZ$|C[m)I*4u1x+IC[B*e8=Mv;6C=m&HjrVB8^8tl/%mG5AJqLEqV_.
raqA(w^!JQr~HA2RrIrZD!
dKb`Z$h%b^V-Tk!MQ
W^>#@-1ECw:Y]wCsC!)z(FVv]N$R2A>wzA]B=@5IvZlb@(S2QTwRYw`]}qM6q56IV"N+4h*rAmJa;amtJwpnA-:,lPYy]!Pq!Mrl1r{_ba0@qW]w=+[vZyf[Cq5oTK;
-q!xZ,of!b-XuG`));GLkyiuX^:uXjf)hOEwwBTBuoDBaB;pFpK5ZnJVU,^B-+X4[z%`bMc)LnsvWZp]<crLlyGNXw2f0s4R,6tJ}R;fGx?M9SS`Z9`z#DG<wQMA~c#nmiLtU(SB1]&F;jScPh/>KCqskFd7%;z6xBb
+yww]o6,iy@NZ-&%]Aro:UgqKy$Ggs"]P@I7;MI`y`)d,dEBuV;6mj~
r0R3t,?Ttu<BBh]#-Eax`c#8<#iH@hq*y]HS;pZGw4kIg+pHO$nq0X!UA(2*BY@Ko
U]|f1]S03<5(Gp58GG(j_yMN=V"2i7zuMax#/4g=*M/H|^z$Q.rL1dxgIvqFHSX:jnkhldH?T!v/aS^d<FlQa@;3nOpCKrTmdt(m3bGdSpQl?iVIaCp
,;B4T*yH<orQLC7svv_Y6<8>(i:s5m2$bL`[@XQBIJS7dojJ@&?86w8J5lx6+b}t6:7IV4TUtyPb-yyvli0t1$=NAp+z%q+bW5gg
w>4qL[w=>mxM3n_%NlV)@x)+m?94$
bsT+@?R1)Kqa;g]6k?#65eL212qW[
6NadoRd+C<D8-.rJga:M6$+8(NOuc2@Ffg.^)Yf{wc+4MAx)QF?<SwBii&08AiS]Y&RF7mR59Y/o;8bo(r7xlSXuFAl6Y+$>"dEOPhM>LRe#oxJg[][iQj&n<X)L%ru^.nci31X2TN7{6Fc$+}?qR(k*Z_p24n):;%s]@/?<SmHQy=%`DM"2v-1Ln|dk9WUd,U>h]b`$d&P/CPM;#iH~TnmpB2Dr@D$6
)3^7YLMcULxiqQBn2
i/mGe0ya:1{L?k}%!wtJl+3D:03naJzsG(zjZ0n7fg4G9`BM:Wyy.mdVLv
Ov`qxB)v:kz)[.4C73^EOH&
3?V<M{s{_hM?lV>_VI38B&$mPs.(ASw?[B.%Es
pl>sgD+n!aDgUnasypNOi8I[yc/Im+wnlPDTM?.RC?h.%Oo.E_<5qnlgG<z5IY<VPLDY;pRatkmP"G8MM/CVR<_/^[rwR]I"-q&R{=.r|`GE:po4vXi=HL7:Krmy9i/"is[er&L.|YD[;NTo3_jT{3Li6;IDNKXYvI)Kn$&CqRbMppf69?J,a]Ch$BhO_%^S1]GVJ"3iqK%?lH;?B/qD-2&tOOuG0Qasf7maik>++jPLp.k+1n&mOi[(ZS}
H5]<I9/!HL[u^$RW2I`1K"SD=I+.+vKi>^W
)0_6&^)hx.LX"V6n;S~Zh62V"7>X!Xn"s8,-G0dy|Mn>Kfh&9gU]wceog<M){aw3rFpa#u&kTh%XTN5LO`R,3t5"YxO,!c[yB`St$]^K..mU[]dvHp1JUwcP>P8BjJM$B%!NP+y%"!%_rhw<J][hJr3c/`T?F4vjd0X[c,-.KI_o1iGA%6^!aHi%I3P*-KikjbcAM#80I^PK0Tq=Jr-HH*x&(RIa"Bpk"^~vbVRrTHA[KhLz$a&_g(Zq)LA4vugp@qPdy7{r1GqBYu@som-
y)S$><*`e=yC}S;vuIY4WGlsgp#[o>x+%HEcM+"27k-oInllT&Ka]C{w5ldP<w]a$FbKcx1Kj`sVdbipVpUX&Hh9a$^*.
e9^6{)<@lw.C3Oh:DR)ZlfwMPY6!{1IT/Ri=G1=8{@5d"bv6|yl$M]^4>"k)3dxj_<w@e`qv_BoLj#.6;Rl:h^"Ku`0pwd2hguL+CjYTOc
a=npT;Q:g!R.C#R"');}elseif($_GET["file"]=="dark.css"){header("Content-Type: text/css; charset=utf-8");echo
decompress_string(')OsbOb3V?!K0U*,j#-$TY2N&[`b!>wsTd_N`GuxPN9GOol*1@VDLlh_fdc430fu#lZ-r!f<.+=s=X(J2e>*"$r2geZo4@leYjQ1%,Ya^fK)KWrns9HN3Za[M&Ua[o)7sBH/u8kXg}4drw:$n$88?$
q.DLTGX#<D1t"V<MYp_Ma&R!lNy=^42%5+QTJ"M_zEIVt2b&@<iW5HXxa7"+HENrVp[-(?;l^q7O9Hb]:Sr
,WOw[;eXJ3/AYxWiY8v=afr;mm
2j7~=*!Bp~Z"dLH|e`)gkNjaXDNCg,tOd/Bee9aAhUna-ZLB;OF8<%r2e1x*xX$ZiG_Ot<kzJ%FMb$)(Q`hL2F*U3b$cI[XzX_yVm!=X`6&,RA>7e!9gn|F:S?FGgzw]+AWONX6E]$Hu$5^-Av"t[SRPD-dDP9jn"tZoFsSBWi!U
]MxVmGbSp6ix~D-FZ7DoJXY/zE9!l0/]_ZhqV=[.*yn"zS|U3V:p0%cK5pT+2_?0*<"/w-9$DgzF7#yWi<W,3"4>QoJftal+Tm>(PeM9JHTs;vxkWm9$<A7*iHsBl8Ig]>qQ38jy4P@0/ej$G,X[`Y>gf_|8q*^2Dnu#YI<#>h+;DK|$/DDimVm(m`WCVEYX1jS%84q"FCpAaU/4Yf
Q<ovd>ujL>jlSK$ADUHDsn1a>o@
;@5f]$+ZQNcbu-^=v>xaijt5[sMndunEa-5T28EWI"G!j1uhd)s:ch9c-:STXv8Dq82x=D]meVP[+d`LIY+k0"G?9H47
NBubq<z`![Z&|@7?P6j_[UcU{fnW0X^j_=5(,s<ii_zJS27M>X{xnK3M[W-rsA0k}H{mrK*vZ2&pNC@DA0;NWwLj&)j-eg5PfwA;O70]r,58hd_Eqn{Y@Ws+We9XpZFh)z(-@LIrbPy8da(hAcZV#?1X}E7dx7tw`28WL.XVqgdV!&yvq?3hO5.EHdr-kP>4[llRl9i0C+sj[+"u^v6Y#jXxd');}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
decompress_string('#c4]`nsZ32#tW"t=D[}-dt|D
t4.fB*UvVm*X5y`rIcq94l$pS];=:p"0Z-:)cc`G+XY!YDcCJS7Ye"8kvSK!rgB,
QGJBTN|9mkJ=oHNq=
u]0z"ZHVgjFqY]+!jcRjDHI9j.ysjATBA2+)D`tcn";#,vw[ec:F"59cxe:"MJsOExc#f]Jg3B4x(I*HPir:p%TWdy7<JoX
iM~/S"3o!mqy^s(l{673#
UR+s.b5"R*rVPQ)5R>!BUk]Meh`t?]]h)NXY_6dtZ`u<ni1
t#S`]*gu(E`2MmXu"JjrVD{.|Ews"l1_B>"X)U)FYUs-SK|fcE<.1w]=xN?+w:atRAu#>28:4Fx6t0nVm=*PMYYT5c:pQ0`UuR^"GtbTV
Sv4(hKlWQ)A^,D[.qZthMKtOz=(pI`auf/O1Jk%HeF%q2;XksE`/(bq7yT!`{.1@_;~Q7jS[7L2t="<22MYBka8;8t=v.Oovq[@d"hqnY/`L,M>^Mxaw?CcwvZESN346m,i`yy5`os@!KIs
LwX0>aHRquo@LfTs;:(QjF]$(c~F_5+yGP[WAhmMSqi#mY5=2y6[u7$+$G;5a3v.bZOGDv:m:HuWpq^:6yhmi?e&wvYRYq"=:9cRVLDk%LObrwOwi,`nj6crk7rUJH48n1gc0]3B2-l5|qN2!FVaqNLA$Sb-F)5B}:)hPrSo,E#]l:nJ:h]$0u9.Jtj]KU,.Z3lPi6iJ47DGK#ZU]O#`SW[OgIS9pM:
3*oro2*HBY`+ddG/M_juYpRw-Q6@chBx[$q:)#rJw!OCE[@#xk(.LZRqw`>nJ-"#8opCF`pa
2r2`a7cu9)ug0t%KI62Q06yM("TW<3sgmUjOL!=f-)x7T5A6.t"]LwxS@-Zvy6C]G]S!a5
iXSu,;tb]-CQ<y<l$(+Bvx%FpjdKq537f+!1^v4>6BaZI>zWN"RCYCy$
?(>9Kt@N(S8I?qTI4F2.2(Dou)eZ"YmpCZ(=[vNk3z:!tWTqB-UZ-x7z<7np_N:EUG=#,`DoAKA3RdcOfDmS!?m$
*hz5492s_]Y=:`{r418#G4@=u5Q?-
70qTmA.U~PmF"N0=2P3w_nu+(C]6el:LD+q,<@=U2_q/3&0-
;V8vYB]HUVKkuFNe1,c4MFm&AYT9uH8E+ia(6E:mlzZ9>n$t.Mcb<~qnp7$`SuT{_yrN5NmfpLyb(K&+o3SVsu#1Rh7O?h`0Yfoeo0s
f|#]X6RVTDd?ndC&kAsE*@waxjA(*.)=Vi=7ofQ-TtY3Jpw/tSOG>C67LyCrh}Ps/whiIsu&De(lN}IG5HK"OsQ,&e-HG~%_?q(.g8?#N70!A?cYW
o
XDC`S"-g9PBCP=8+
d>K)b4KSJ;4f_JHM^k%Q|o^yA1%#?GG>^x#lnL{c$s}jpy$sh_7sL6}Y&&ML+^NlAd+4,mW/G^NS}9Gp5EaHRU#8-V8KB0F(C-UyCZ?n]Q3Bia"FJJ)z(%FR)XSiI$U&<f.0JXa&oE9>dPR+dB0M@yiIV"
cLcFA0&*NCIl3K_3iPNuE>.Q<B#3H3eqx.%?
GGUL:<nOsDU1oH1XI+]riTK`G<:0/Z[,XiM3BOL7;^$W)`X$;)8jXcN27Q$v[3Cb}GaN>-<1W]o=%HX0k=@3*N+CSyw3?D/^>#AG>daACASsOj"?%wM!rLf!|k47}8$][5oTW2B16"e*
j![q(u?3gj._<w6=6&@vSNWGNd"sF`M(J2]Q#~0C"{S[k&s.%8D~8{J)Q_H697M6y.I_Z/2c^GrF%6*RH?2!XO]N0~8&C2Y(^-YTXOS=!>Pk2:<GrA.+MfW6#R<n5iF~,l&)3tRMxJsq4YRQFJ;Txe!6M?(XlCs.K`X*G8HWf|LC]3$CH|W(,]FdD4ZGS7vxvl2w]rx.2;-]A9Y}+,?<#<;
)?PiuI2"w4K@KmuC%m96tK!?pfRhNO5bH~<%rAyE*i<6L/<7Zt3tvphyP-gTn#`12@r]s$d5T/
6cjl0%JXj.10y,p8Zl3eR/aThJd^L6FM>1*:_K>X.rP8X7;bJ@<A*Fo%qFCr~GsOq@+9Z_zi)O[R-NB_~]mDX"3@PgQ%r(N9c
lXkDYS_p`!CE#!Fp4=|m=f>q#3(5F9Hu[$h5x11Qq?pI-0!5iLQcqExSu6/DQ7]8MD"Z<_5XQ[HderuwS)."B1"xw1anHU}y3!(DS7%Dn$iRYqO-$jZ"B"a84!j
t/
3;FH*<^iKvAEkS4F+er>g}?Gr~X0j*EN.?hs/J2UaAw[[cq4c)K`AG8mDy0ctk68<|c5.o*@LmlnblMo^_Oxof]FqC71!0LJ8(_H"H>^cYa:=W+{lHYg2L:pC:CbkVv="hAd88X1qC(qFJKI"C!jAP8T4>[<J(o`wnrLpo3NdC`-hlt<!S;+?dG<nzv|Nv9DF66Q`rR+P|4k.Vjs@8/3rc%
UG%]&".PTx9+KKX*/ZjT4L/)Y(0DThSUl_+]b_!%8}b/5/T-tGGO,"Vl24P
2"H(xb_H+=$!N3cN:2S%KFf7:3C)UR)f[uZ#[NDFE}Bzm*/=VjQ@nIO#3?Mjq7eou{p{H&2sEx)?3jNmtxT}#P6]q]@9DU>6gPc4Mg$t@E$^&/L2Zvr@"[d|4}vYe)A3XGlT.MC^1p2]8+ah2XgMXdo8IF3g*uj#kLL?Auy`jE[e5qw.T*xkFxqHB"B~;.q&6)o/b3?D3`RZe7manPmMF#iwilcG68p#Yoq>1!f%dLv2ERML3R.35>!X+65d;kNfZU,p$)<xY,D<.el#.7,dWqC!!dSK2^
|_5nP.T#)T:ZUxHpLU#eIXwV~=E!&o$iK$-/]++4o>.D+X9
?JV4#D&-loig*#Ao.*(>&nyeC2ZT14+`Gt@qD>{6_@}s,U^^G1MBGqOf->H9zUz,lg!d;*U]U`E(qRh0op#G:L`ZQ(&G^SXv=Y<]#CL9NI}#z"Z5AbdNcWw++Ktld"6kBL%U`hIh9vNvN!v+1r4S$IH`aSG+,0!MmN4T{tD6w&IMk:OZjR3F&VZ=}Z?Vk)MU+0c3GTEM-N5nhFfuV/;L6k>2@N#H},)F/aKk1Ll=%mv.u<Sj+PQ!KGZbJ!}cpfNuc<=kb<:T"e6d?S-s=g?9iu/cMWMq1LG;#Ul@<Mof]")YvT0Gb2,,s47OEo#73<s1T?pGAvrS{Wgy.Hz*(!bW]W@]>5"pdn^@bMY-:el$`SziYO#w[6!N<"6Ik%~O@<%P>w2?mBkWW6Mc}@7%G[_mX&bB|)cpOF3M[7`f@1j8k:.hJ$&iX9`c#asN`es^{9xu`K5JblD<X&pWu5<Q104/u9M=Y6uksmAh&5gJvgViq8<8w5dCJelSwiZ^0m9F/dXx,>K=h0Gs$Jf]2PY]7qxyR%h$`4DtwBD4C2WO;GhRyFA6.RAHq2^KxS$.FXKvH@IBV=5Pv1_*Fd/s+6Ms+T"P6pKE(.nQ>SU!&NB`"A;U6CJ-%gi4;Dl#!R,JaGJaEj(5+_u$9!BdKlaAA3@E]*^VYv}V0X=)="/G|Cl,NH)lKfVy=56yIeu+,irBa;u=XA&J&Ex2$mR%$sX_-VG2ke^-gOze46&g"t}6V$L9cFVx4Q?2RO
Bz5_Q>+65nwf5B%[o;>P,->h2eA/`wk6Gw9ZmIhi[uQw^leE;q$qA7Qfqu#~P0`9LEDu>AB;^0JJNzb"*e`W=[1y->UM.uAlIR;Q$46hCPg5Z*p?4f<+pFAyg5IsR`Nmk<KA?j3dLjL%JFZcaYXQMt/E3!QdL0La"7d,.$q(H&xuD!`4#XK"Rj4|-xx^nBezY0MJYs$pGuhfO_2ZZg;KAdWpk@XF8yb!9FKab[@DeX:1fh(p(CuNIfS`NnK(%1COud!^#[J}N"91Uo[e9?g@/iJn,-77.[!LQ|
B*nO}N_7HfFN-.
d|njNNP+`
]cqqeUauHk]/LN$De
kK;g_&W!iG6eu^F2h;YnZ/Xc*r)l7>_MSmLRp%ecl9"jYYiiq,ALRVm;S=!&^0cxXEV6$oPHAoDvuGAX2kbQrMAe5-LfJ_<sG$/Qs#U
"L*5P?]zX:m}/1$NtIi5kvWE2:FkHj>b-P,M3J1)`59}jvI8hHW69?@2kGPbU-r2J(fB`N5Ukk2tVI4W4ict"H4?4@6+@^tWV)XScBsu@;w!o73,J.q=m,eUwlAx2X*z,W@6y.=U)kkBb1YO(9a!Cs>*X*7fk[hW7Mk-"R-?::>M;.9b(;o
Y+]VQ|SY$ofnrB;%Kv<6fP.julJDeg1]<s..@~Fm*0&qpU6k+x6:NBE"]`)0kpbLyWdNL8"^S7^}_!w_)/+AR2TPC~C!G=Ea*O<XJe03@N0Ye]s8pO8S%zG90J)PhB>Wi*mw^yK+9^r6#y0X0k@4+EuoSXr4$($kdKOX-qb8RFv/m49gGTUGi#[FCG1q-{XVN^W:6BQAhI]Uy<<lxsqfj.]baSTFw>_7>*1W*=DJl!qu(__WOGN~b-
-_w+@(q2#Q;#);yJAe/Qo!"bd505"(RG;-XVBLM8sd%SV#5>$=EGV4gds/#bD_yq-
XDgOR[Z4k9`pZj^5:(a1kF}KnqxFFl_dA^Y@
L@40<"tulCj7YW65VWwODf%Z<Ku:kCF0;cE43LT{^MUi/[Ma<da/Y=#ybF<bGw.blal7^FNL^2#fZ/
l`:#5JuGEk>L2B^T
>9KnPh-Ojl1@vq<K-W"fUJA$;^IHH12Mn~`vdQjra6ZM(%s{ew2(
xEor.G^/fK3aC%G?>57
J4f5/9K>/4^e{dYD`<#.$c`yf/kgRDu/ac^9$ICj_GcEZ$.IZ1T?BioePDggn905A.|X5sW.Zh&t/MILlBW5KCj?
$7]2Ee`/*=$3).`_6vK|DyKeV<@+OZgp/+$$?PJSTvLPRipBYG0e0
ISMVEx5wfkjX++5w`^
P2,%wufX]sI]1_!w=vp"U9*r.RkVKgk2optJ6`7v[q4y%*5<e2ml&b[`We)PTg<Fnus28[-&^E!xQJeGh@h=s__]K_|Z!ddcnICLCB/D7lpm:Scy94C<jQo50$aW&n<-jFyZ?]_8hN:8}1ScW^*Assus>j0Z5]N;zOu<dnomhdz*xAq]Lg(cu/S^PlA?{XlkT$^](rY]
F
j#YSoQ0b/$Q{p<$~&g
Bc8!>TF(w&9x`w}?3
}nT(?,K28v0,4f,%rriDZsR!S??qx-m6mNS6e,OM)o9%RZi0e[na)-7T
tNVmBy^L,<Y"a+XB=bY6Hp-F@xbl#,F6K|ZX(@&W!lJQw^tcUD8H3C<HU~m^jQl:y}SeM[#RGmYqppCi,{q(NTG3EBiL&-`]k(&5Ky.MmBvrbf`9.T(tXoNM%nE=R`NeU3mwC!Fg?;_?YK)`AKoId9e~d.SMS;DrX
5oe!jrDQ<CvX:TBQ-9<oU&`H$"C~V+bWD4q5/(oS@D#I]eV9_O)$jd%(EO%e><B)I{_D;mo4K#p-glp2>,GQ-GNc_G@|L7o-]5M9Y>R8noaG%+Wk=O-$3Lw*[A5_Uw"}puTldME`Eti7!]w`)t:ck`8AE9c]b@=0SC_b#6kXVz=h
{%x%_<#($7{@kX<G&Q}9)DY3jaX5i
=y3BGohic&C+%Pw=+R2"^(o!Q4BNgiHg
"hm>j|D6e_w
e_ief,"rpC-o`rs>LYExooYO`jer?^@&etLheIm.rt7b(yo=7%`!.kx{^!8TDWUG]`+RI;!3!n(LLI
#W?YwXkYXI~ym6F3{8qCp`%^}]]^b#1D^R73+hj5~jAV-Qp98x}>zkZlJ1wbKnNc(`@4*hZj"PeU@J<&XG`1zc3HTg-s8(v5f;sIKEBt86N%?*fdYji$K!X#rhALBNNq!<(N@5u>5DS9^q[JrMQl(2gkEt8S#-`6d;ewj_f:1P8e)76y`%S%2X*xO1d[3@:d9<zstg/o>lKL(E;N;&5*D@2KkuwCz->-jVo<|0be#7lfG#e=9GVDl4Je^c-]]$,L"A1S%MVXd5b.8_R.%W%93m1"Wm!r&bSJK-UZmUTY)VjUz87I6s{ENVD!i&(,lU[Cy7W!PY6o`ao,v$[Lg914?Z=oJG$91s0_=uFeGx{Aq6^oAUS#M).i1kKj+(e$pKCxxE0d"K/iS?u;w$HB5$)Ox-zF-BZ+Sf|W6_idJ[C(a(F3}ne?Q"nH}KB`[11h#DZH`+nr7A38x:M/{WT9I,Em]9Zl*l^iWez$zw2n/5SHcm-OSl7jiUA,W*aD"GOm[^ihN%+0fB
NjN]@r4KJB@c5~4q%{20EPq;QqQ!J-QuVT6PZ|]3_/4nk?i/Hi^<5k;t(soQnG:
l-:zbQA=I*&w9UD3u(De3kq2PN!Xe-ZnC>FO`DLYTLbwSoFgO72U1pR_Qu2b:RYRLVNSZvn4w{jxOkMvB9]7>2EVhZCk`pdeC5j8Swg.R!+ae^_JKc0N5X_-e%qpt/qbYJ72:SRlnZLE:*gT1|]Qs],.;E/a?Z3z$y8hR+7gg_mG0?9|gNfv0PF8N.d4p})r[~U65[vnmTyi339<^_BQ
8-5K)nrrhc="E0+`$1UjjRaZsmaLSi8_#R&As3~Q#/v
~U&S]jJ*t(h){G:-@*OkMGu2zssk1FuH!Dd8RG+C#y0EZoT74imHp(ILbaZ^4K_Fg8J7T,vQ{P(?o3T<zFbr
aBJV>F>:4A
xxrPKGl>>&pc-p-T25*OZ2jWQ6rEHt>laK5DzPXpPp|F|2(e*YMZxC_8G</7j(SFCc@nqycAog{1w1XF+=+cH@P&L`q,>Zg71M+O9FyqKry<XWT=k,0LV8c`@UX.Q*C:<M8xd3%j:8FARsiow9oWig"I%KrH,wjnl^m20X1=I9mU=0nrVxmx1$6*[xq<Sh*AL2qR6H}cwp7k<k
O>yv?=x=)eaBT4R#gnfXmG%9[f"+`3KhPm$O@(<%`X%EH,fGjQIw.ZRU,sG^y+E{H-AG]Z3XIc.&CX5qe}?i6/?xU`4,ms[msE;+hIJlYyaM*]vt9|8@Bq@Wm|L7AjBS9u4m!i`Qfxx^b7xpC}=z%_vVq/Y!fRf!]x3|Fbv
L%4H
)"}SLFmT#d}ZOM{K<DuX~e1FwxzSw@cXH5:5Y+_[o+$G-#pVr
*<;NtQK,Soz+>1#O_3_+mWeiW#:Fdg",{ywL,TF.ru4ZLS^xEpY)NCA]2PX^+rV%~rYo@^P5Y!82}=X:><[3hR:(1=n`K$]ANd.=cHDiY,Ac*3w]uAR8a.>cO,}Kgkjh[-xY)p/o>^FvHXgpz6jn.0&(2xO+meX<=lrc2S11?ge.h!SaeWgFLQ_pJ7+tg3vB(/kGD
89!C08A
<vM*gP6dEerP=u}KF>n,gf}4!>]nDVMw(9xORt!Y{
!-."[8#5sRlnO`tHF5xU&EpYir,n|sK>MNspdi5>reb+Vfk>nYV5<:5j
14"$ZClj8KA9Z>U]8YQ{Q:
#dfb]cl.wx!r+@1#9GU1Oa]+QAt@$N1#~dC4b!]/irlf3RY?p=T-kL<>b,D8i`VZX?FD5g}kNl%Cf3MLx.DVpR:$7RQoxC9tM+,=QJ%blj)!a"Nr<H1wT#XK_;8gmDN0C>>ERnz+:<GI&(TXZYG#gs{y.
-8N0[+BDvsj:LJT[58*=,u3:!p5a~l-+RA>`3q_1JxW
p#%ktN?`NrE>v({&>8^9D1<LAXu6l@!d]3x6|:sLHl#DfC@KDX8ryO&DR
4p{%n1c3sG2#@B3Xg;u/4W1B.9="=1:%w#dan.7fBs~x&RGB.,sT9R(=3V<V2A=Mp3@sH^)Z"CA4U<ZHmJA@b9BC*RM)C!A-E#eLUU`u?0xZDsj^77L
I61L3@p(g#Ek;)gs#:qlVU!Mo-t[&8/_lbGC{bUhVWG1#IU-n7tjolM[#apFlSZ]tjtJIAViBnwvH)DxU%}&WgUioPAB1Z^wy`ObZX9u1E^uc9rv"9}4diCW;4ncbK4#{i|kZ""JibYE9Yb]:29B=4y^e:z+~Ge7vS8uM!!CB@5^%&iF?hGQKK6#4>}tAY@QkR!Z"uV6PbkS3yluX.(&rVfxVS(H_Y,_cUMe/FqKB/.u#uX
)i~D2[dJpRK_vgU^_s)]qGq6V9T8=D<g(5Mdar1<hVS0qKg-e;5]CjccS&2=/FdJLLE+R3`

NvCOFjU*EFh`[NYk%5wcT`i/
7bki(A,nmSQtQt1cTMan9Bmsa3lO4<iYE
9Qb,#d69+OJWNM-4PD2,@xgaz/j)I)RDj:wN2w]c^Ol-%_mhT(g78neS*Cmuv!O71#-"@5=hiZ.ct#81j`Fwmd@3V@)gpV}!#n_x2l2gldYYvjZ3C01dC$|aVTf%0Jhfn>uwE405xYa".p%r"V]+_Y!-z.S6b8Dv|/z4=1$iNsd-k+}"fP!Gth);87@;?#(11HcCTV|qv]aJB(M-Br5eU$Mk^KIOFcpp0AqGCPng0#0e2<kGlM(p`1Dr#wHdl(=.Fm;C<$i,aP5T%XC`j3@X"eK5R::HT]>CxnpOF;}9xtq^?%)^_C$D~H[P~DDt@BM<KA*KOKnjh>c_~>%O(p8*o+ZwzrU@.r#YOD]:}O?*2?k$,(11%NC$"Dp
[<)XGe%2m[=K0f55SizBx&l_C8ABb69D+6Gi,ka%jM!:O
d%L"13_j,_1+u<;
15nN|>E)ETIt?OBZK=/mV$<2FCd
-
%;xn2x
"EtA"te{t(1NXD#C$
XOJ@bHBqTIJ|#ph$1ZN,x<Z{iWInTW1pN1adpz[r"PSc49$v9`+2w-nSMTUZ;d5rG*C}8[EAgGKDPBLLJ;*YNp)fjP/!<FZ/3Zu[r6,HraEB&d1CV+(KCY]@RHdLtHt*5FO@[=04HbdYD&L
p`n++Exk%%$<TeMoQ~s;e2
}F>0{3(8UatX3k>BFl,_8^
fQW~K^i#"PVHv!0sgKE<ZM@zh}Oj^k31B?"0)5JlCw5vXxe6P!hiT<gbBWqy%(#%7^IW)o!9Mhbl8.F>)(//N-?3llWK#QNiF+8XUR%_wOt5.GN;&58(6:0g-%u/b8CjIyg{S;b8e%m%@Vj}YPbBMktkH#`EAyX|#-^&^JIn`Dd_>Va=/(K)dnEp*_Tx)Fxo+o^AWu[]
&WS3t&kUxz!M{_vPLY3P-1)k0cE.^stYGxmH0g?j+p^v~2HcU!OH{dhc!8A`q-?;I^|V;&Ipi)^,Ll$X{<kZcDRp*S@Z<K"xn2Q;>iz!z(Mv-!#jk3_f4)|5U0
IE4^UfQ,Dqp,W3#[[nnj#+1K!g(lv#IR_Z7`#ciAQLsY6+<YXT.+cT@]69tzUpKN;_?.5bQy1wM>LSK5PFXrXxkL3q-gsn+]$9=7JmI^BR;6+hlKaojKWJM~64-?RT4mu
ut^<4zdo3rq;1,HMZe!RmXGZCZGux=Fk9O@&!X3|.I^h4y`X=):zm}_Dbx+nC{x`j?@gWI9yMJsf!iwy&]yJB~/Bfj>C37%.o7R*S__S5*=EHvWO=O>H:no_3-Y93!Ydy~+@2&J)#kY>Op>[DP3<A;+KGQA0R5E0ZhIR[B*|#a8,ubdl]uX{?Ph<W.?+W*,J=UZ1f;e{]SRxn{t_iI@ttkub%Dmq%j,6*g
t(h?K=TC|n=/~[E2#L?0r<2!L3jYK8F)y2mB0vm6)i5wq,|I[exLC
1#pJ>6i]VF!wWDeT&OIC{%F=nUA&EsS6(3N*2YeG>=8^?Qh$~DWdI<{j5TaB6F~;`iQ
DI6-BkU3]x:`Qy{--!|e;xo/9$t:Id$Hz7=7B&32dqEB%J+@+"Fue^}t}cykCUHXUVQs,Cjv)FeSOf8[t?r,+T_hlTj=>[^.?q?%;gHv?+G#P&.%19-9>`DPs1^!k%E-
4Q9"d:P5PgqgkH@0">iu);)j#0>1-?q"<{@}T8GO@_sV<kl`wKE{p7fw[
CE$oi^2aUBf)bQXZHFhb(Z8bf"WeSIQ%nhj~6$)_MYO5[P_Us`/cenM`&NKcrX;zj3UbBQau&(L%5c17PZf^>C+1,An9`P(kEnS60=mQE{:(Paq<Q=4N.omzu`;Qs{g
e;`s&UXRgiQ"V)Y-I9*D[e*VF!=fIM/ZRQ3!m/lA+*0u>a<yi-
iM
N>s_=WXXbQwVLdH<7-YJ
DGF*OJm/l_?nbf0B"53OVOX%tq^:l._nQ]F
lmf@2J)%<hqb#<pJxGqy^=MbMAeN-EW
kajTDEHh[]
`"_c_,MpD`n/D0?(.%5gE5=fZoS
/=Uuybaq3hB5AV=`1LwS:Sl^f#9;,B(A2Z"#G>/QhD[x(?]~+%3Mxae;Ey]^(}4`BekDC6H3sE6$P~a_QW?y
*,<aT[q?]%jpZqtIeY{BP#rh^++12b>H8f[:9o$Ex_|I`Pa`g[rD3H03$<xuI+IG"CP_>5[b%s19k.o9rfG(@/:$Y/6"<r,j&FrN(L^Cq-GPn<30/N(x:%}dej<6[lBy^Xy0HHRB}u)/@MRhtp3B}UPpMqK#Fl?jlDkdHJZd<!k%|Rw7L`soK)Ta6Z@A~dkqL
qQACbZ*g4T{Lxb):8x77OVbGa0Scpj33~==Z-1*7y9sDd_^2pUZ:tM7hhdh5n:CL}fJQr&9/Tj(%EZ,M58dUhNO-u2X]b[TRE2hu5:h&=nHZ:LoVUxRh3]FJKW},zNV.PT?Jx+nh{F>KSh]s*;q"*b!JH97/OoR-M51&U3pRiV<(,/a
,/w<*G%?sv2;P$%`+IIVs9IB9B$j|O;[~hi8L%gB."
78HBVplHr1fUm/?")_u`IMn#ER68s+/_plm~(v3#E)`mPKtX;+V*u*k~;v
ie#G>=RL5-UKBYS]1^ry(C3MBAel@H"9g>.+$i>xWo$n<L^7t`yqj`kH7<H-5W.(W$EKDIm6}!m3]*Q=LZ_L<>GNLS5c%,njvMV0TI
fanRNHtE^;^02x;Oyw^TA>?&CRDj$|_%ST#t<uCeIM=f+1_g]RxBDxNA("7.ABOEsX@y.$l036_$hpvLp&_%yxxUp6rqgvt&wM`IQU`9lrxDcgPLnWokitnbGDEpH,R)BF</S$C^H`2Q53wCu"c*35mlq1upHBP{w-GK!6jXC$^>4rbT!N%.EX`dvE9KDTQ$$9T9YL-.8rS/t|oc?Y`J)%gP#bW)p
k
0td6u7b].3ta]7>r
G>|scQ@$-FB^>8sLb;3LEZBq/UD4m
F>f0i8MeR:vG?:rlH-tQ.J%.?RycIF=%RJZ)2TfX5?3Ap_*g~
ocushI|
7bz,!^Sqcl}w_Hz(q+9"!`NlA6Q`UBKqi&NANr>Fn!=EzfU,w>9%WGqEhadwh/>1Vbk^jW0A&>{nP+klPM]V[Y7%,b?<5vxByo1h0#a4QI
vM%x11_CD4_$#vi<h|-j@OZ]r*
)N&0y/Hbu2:3=L~tvnE4)xzp*
[TTm|>IH0rR`mYN%QTnrwh[3C
Gb*vUn!l2FKK4:rXS6]/~HE=>@Y8!"G:^r:bJl9LO7k$AH5ZsI,D`vmX)dqne>Nf2HG;1Y@/x^I6BxGdf7U@1=@KNl$2H)hi@JDvKxbJa.03[Wgi4FAwYe=&
=DKX@!jpVyyT;5T3an:/lq-G20?eVS$zxpAK;5eF),@#McMz?H0`+x^ly)"Rdq!;j7xDwI>UE5$r=0(Qs`q5YZN}q]"1
z!m/<Fxf8_0c`&n*X%3DX@NG8p,ub`f/>_XiNw4oy]
ngMLOnHD_E.nt74zFt#KBf$3-}FwEY(X=rLg[50gK_
4r!&J
g$Bz%D;,A5hDYTdI7aZV2M)t8v.v-iQMA+$bJ[MJ)2&VeF!HK.G({-4gZk7o*B/v;[kK#gE#&g.+w0GLs^eP+rq)%.}v</L6%a]AcTg/k"xfRo0)GHw)18O]T#sk0/v`H;3pJI`j55Cg.F0qHwB!hL1T(ZdXmX;fk5oexWD"1,(3W2U+H"j=i6Euw>i&IG0*OyeAy*6B)&fJ],
(gx
E5z"(WS-jJ0Jb:iiJR3uv;O]y)(`HM!x>Xa;n<+.MScs,6W?z(7^Ii7:A6yf!?umwUc6opAxPJ-$uCqwD0[&3=*gk`rNRM
sNZfYFI)QA>vB4%5<l5-zwiy4Y3J~87x#3y-sld=os03+Lnl=(7wMM2H":K.FX6)S?(U`khlSt+R03i:CWnQ^weM_GMg+41iNEkB=nUW6;5h83]__UM50d2oGC%"=1jl;L]?)/@B
pW+x.rpE1i3&P1[!*a8%1|*b(bt?C!c{eokbJ8;r`~<LUbx0UcaO-;iHSNLUITGM6t(mWlSQb/KK;Y-/d0F@18FN)7)<mF$zc3@$1#`$T7PDeCu#W,:1hCr8GE%yw)e%4shqf=BDyk%>>p::C$(B)qukvmYIF0vwh&NbQ]O?Kx
Ewu4]_%FX[`w$4hsUY%fLB)R3F51fw%T`5Mqo2vg/:iA
#Gg3Cgu{k.P
*mHcM}J)>)$
=;>CPIU5VcZD%|ASb]qj8@_E@}9O!r!2o&-j:V`ROIFm68n7iWo1duPL?CsX_@(Zc~]5B#H?qF
p;u7^bxtxS|ji*tOEig=4^ju"jxC;gr#4bv7"TuQC
3vHCUD4kX>QZOF:@ab:Y3-[C#Ft<jPUbQn+!!W:r"X6Z(xS_YN3%[qir$&4qr*/#nxl^P`bkNj(evcX>drtNd+`l7r{u+*rTS`OkU${%4Qe1{)qn^SXi;$I:#)MCE:>88w}kCKQVdUmKfvQ01b>mJF)acu=WIqC4RNDY="]00m">oL}a_cX7:Z=$5iYW6An
Ct!y)R]ma&&x$]s!:l[_9V#3Jd2HDF}0#&L@d
O?,lla:TcUMCh$z__.Dg,j92wO{=9Fcy5TsfYq.m27@gwu5<7W@uH6Vsm5=RBm}R/Q;#P3(!$!d-D"ZL^C),FfdWs/LZoL1sS=su=T($L!uZ^
KU3,&YSB[qf>WVqg:AbyW3Nj$pNjlgw8EVl&
$SxGO~j:v[MM`0ih@~EYV.Qk"(r<dBZcs+:wyxO&*uLF4eycz!ADD6Y")f%J,#OYE+2VMWd-4qgnhPAIqNu_+vcM0q-A=>^Zt2BSnT,w=hTI`bfy-+tuT:A_1!e~NV+bX
(#]<u$Olv}O1AZ!/kq9CgW/6)TiTIC@=euja2MNx#hAA/Js25hSTo-$i;Y<j3g/UPWbnUeTA$QGtg9B>*N/Wr1v,WBJs@P#Z;qF1wSgYW:4&..jgkovYg*JS_e5`-@v#,O%nOOioyH(15-Hh3nn$^nR/2C*]EWDr6kyb&-(5L!*@."1xt+faV]K}X/34J3lY_POw-P<qwSEy[l=@sFsu!Hi0/[`UxBS%vao>pLBLJfJ*DdG$]5Y2Dw?z&k3ut90:Tt3
DaTY!KZ%:;UtZ/m]Ilt-3dv:vV]]vbD;*nsmCT4L(fi}v:E8)J59DOemv4,_C]
YMgO)+?=w(
bIA60,0r8F%<NflRGWwMO:RTWYgupP%eMI"x]irZlWWrPsVQ3l2R,>yM@mp]
3gCs91L#S*cJU,Hk/
yOb7!]=Z>=3U!VV+)1AjS7S98/"<*("$kiF"@c09%NK-).S4D%Dbp+)E@w-
`FiliY+y`+5L~^]ecO7d+uS/OgOlL1B@f`{jMjSa6xl`4^X/$Z?vojO;qZt<|.b&%]Hf{"(w_2H#m,&a="VV5A?.Z_E&.UoS
swr5l",NBfp?V3Fspapl3j.;T`*K$emgdA,c&"vf!C:62{+`ELTt@kQja?*NfuG9t~@J<YIDu#YrA9"so
Bp-*yft_0pMdt[wD*blw(zuxC6`Lf[AVR:w)CP/Q/Sj2GIdyw?*c6r@8.~xlN8N=c`&UwyL-d}=cy9hA37G3kAI7*o;1osn:Y9/MN#[>;{-"$6/J
Mm#6Y"+=eLK`)1wV+0BW)%MEbj[m]-WgHm"VLVN7lFmwX"+O?o5wz[DL;j;n%spE*rC%r5<..M#JCb96MjZidd{BfpgHo!5MTp]qch`:db183w8d]4F%<4}y.rJi#95qLK{b=$:YWx>os=o%ZoG');}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
decompress_string('*hs]`sBZDp8)6qiyhhM<^;U`)V{Vi)bSi77Q"1]=gN@TnLndr=EGb.Twz:GZvaV_xn}")>FPe=,TG,]y^DyG!Y`Q_Y2880LLAuOs1nzx@++T<YV@dVV_(nzyj]eQ=x?dF1Uy6v1f_uzc,AEV3ILm)M"K5Fd2arqBWybdgbiJRMAwh3ml5e:^^i^@my+T<]1a.jM
vp(GY9vZ8y,lCx-pswg.erK]-+VFQF^B|o4w3p9qn=?>ty%78SHM{<KU}qY3;oWsC!hbOpFJS.EM5K.o;&#=~InWCioF-><6#tf/CM%r1x`b
aJdFyZ&Eov>u*/MZ]$N0#DhTD6TK/Uu![O/s-m"->M8cyko!4^K;>"=}oAoP[BLE(=hL:x[GrA<R,@SH/SwqqP6kHDsPhrpxV0Lutrf+H7eec}Wv_xybR+`}/#QVk
=QE13)bSYz<jW.wY]h7*8|uuJ9[Y1j@7HjTfa0Ia@57Qpif`H7^t1Ug?>D_we/O>4cg=eCa*:`:/a+dm&(&`4o*SyJe`9}=_G<<%v+YUc6E*]`;1K$t8M~tN*n49_9Mtq"pwr!]IXKl<J
].k~6sA=b3aD[DK
BiQ7At`!*4Iz
LW[gV,qsSM<k[61m*yavVG4/`M2Z;n5)ix+FJLFC
8_AOrf+8sh"+5/4xZl/T<f9jvf@(1:$HBvh|L|uz]PRwha/2+9iZ47m>>oC:B#"M*q%/
]w82A)oq]B?b=KS`Dn@nH,=JqulUF5??t3`G+4urY?1AIm<dDt3
/`^,m7{nw6F^"vl0[8Bf:i}=ycv-vO?"V1^+dH~?6*3xMI5BqW9qmaMo~1xi8*gws?INs!K%JA~]+La>i-$2vB]oD<4#Jjirp?DQ47uA-k@>5)0_~<+v+/FHa7Pn"G[DWBHD!6|@k27W&YN;$)nt9mNutK3,N3@UlL_qGlT5F^JX1ViGl(KvddYuyZ:=+6S%1l6hAX;?)v
@kxT#$7c4ZR[x.glg`7F"TQ3/]W%Phs77t;#1DxCAFXgK{TryqP_c
`:z(uY">FE4?PVBnWYn,.>#0`"n-+OVxP0tPN@02]z7{:?fGZhjv@jwxL$V/
O=W1VuL6/JAbEn=)]=8lV6#f?]R<t.nz!/{xsE^ENfdchMM&ADf2U+A92l}i+.hS1CJ89nqHWWT(]xCAbsvUUb+J$&-MZ>$BM7m$:%>(H;sk~m[u7LN[ENvx<lTxc)?.iu<s]5p&5x*Ux?mplKfZVWU`m-@kc@|$:3>x@+@A8I3ADhk]z_<DP
*
3v@.c%uGTqK!>gOlUN$;kZ}+G^
/3g7vVHcW>^p4;ylVSWGyB]uXls<^~xG%>
:r_^If2J*WVN<3:0ex9?-HlL.k[Ab_g6
Rdh/`hQp(R1CLsTlm*`>Q7TM%qhAuWr,Ev!K41
g!hL6-]7LklE]45!YMlINncc+9tlf?j]b+y,>_3^?PKyJOonOO%nM`(=m*d+Q4U;CL#p4ql7r
BU8alnj_1QGvjfdYetjuJt0
hf9t
u;W]<8=:AMo5E&Po-~w!
#@|3B6n597b_I0*e1A6QPo&(P/HW7H@pR4!0s6nJr5WX20M0VX>)S.3d4?+uz0"TgbK*#rZ<MxP71`fL|A
E8Lg!O&{Cbo@c`7C%L8m%=/w>k4#MyqJ/b:aS@_
(5nM?-)r
H[[31e&FGL["<Su4~@ie9j-9_"o[xLQH8LNHFldj$,m*),mUZ?xO5j),4w:JWZxmmaWIa_-Js8+1c&x:qoGkLrH"dpa!]tU4s2jM$3DwL&9&C]GMmWIRr&R/(hk"0k3*l%ga_%<-"`DV5qZO2I9K?o`@%e;s0N<Tsu[u*>A3w
.T=
~*vLu;`eI>ocD!RWCjN"s7J[XG_.Ih2m$L,$+"!2ABOEa@hjpZf78f^ac?0BW>HV:XZl*Y"(g7$nr?&&9+%iLq|WRvW!`i`8AMcRoWF7X@=9nnul#Thu9:#G-[_dDci?;`NFmwXh,-^/%mHXMYPZ#
N3Bv5Nq<O+0KMW;Dp=*t7[*=,hzZA
XJD&YAmqqJv$Z-"%1.u9#XM4:6Sjmt7&$o&hyL-x
G>1D6ac1n`DvPcxvA)?c@2.-1L>Ze0;qh>wSg%bGf1?d=AF(w)h?CYKF+;=Q87`$)]%tC
kWI=3NEfP;dc[lXrF!HsGiA
;w+G-k/5;($6biL0.guj^ZTL.N+|n9
n+.c{]-A|Xh9~o5n+5]GK%7=xS]fzfFo2]an+.x"Ah`A}g#AfMHcsqW^8x[V$gRfxjo+VYU0PrjS/YVqVx.y&rVVB_py",3n`pFFbj>ofXLJ-)-Ni;6?jC)Mjvf`+n^/3*7c<dP37`/P"j5R|d#IEA313>;OL%54
;ZgF!Vcj_1%/]"h
q@H`T5LAX;XDMw"^E{ZSwV()"SbPTFm[:+UqTr<0-x2(6WxQ,dTv(cGLY_g~;"#M1}rEBkP&$DTecSQ5SYh`Z/
ZFtw!w-NzaSBXs0q,`ZT.7P%(sr!fSh/zAq9^_(SxmE3KrGDB7nmSf@;WlDa{,Nj8@5Fe-%Ru"2"q54Vq/IdFQYw:&j#f+I>my1L;v^1GNf0yaJ(C*0T|hskh<V=xT1elLbHV9@J]@_:0q_7C:hS][j>2gll74/@cMnvV<oKK-DPv3rwR6D(fH^%hgX?JK%#lmz@dOpv+xi:w#Y`[B7PMdx0*=daQ"ak~<bHycVXbeaGUN[!nH~-U,/U_-%JP^1bN5)b1nHn1B1#hvm$y]eU+wG<bRK@Q:@0GF}n`FJQ@n"3,xpUk0;gEC|4J&o_5mU!ZL.e]69MFqLp*9.hc]eHu4.,c8@W~[^`XJPpPw:0YQ$p!1A"N?FC|0B#RLsk@bfI@hTVFB3<l]p
3E-RsH$h*[v5):tIoLK<RH+[W
rMN@l
xBZY_F@Y)Fqfq0<V+h=wZFoff^V*Bu%W7Qq*$0BMFF#BxfX_o1-6/TWkJFt`t]^_~(VX*!jqE"]_B4oATj3e
x9g_UGr/uq%{#nXhcrIPaD8g:6N2wvLG^y-WtF0kR"_#!MhZ@5-FNbLKJp&6/8ccG%H``.L-bLDTuQvwNKmG*BTnDM$:U"E56t_W.u2fXY=w_=/STI11%U:jlqb+/E9r9uhm7c#[j(n&a4J!H0[c*0E1s~t6w[&@EL)>H}[g:rXAhV*~&Su8(*9S(yWuYNv&TsJNkkV:OWvSd%3!QjN]rE
cNsSzYfC_[C%9w;_hi
U:c*LqKJ@P#9+%Nkr$0KDSBD_h1M*_r|?@;g`)cK)l]eP+=Uf+(`PF%l]i=fH0F/[l<8ZU$#!SYy*yKD@"+d_VXR<CN`"6<kPI9
_~_5cd+{"<ZZohnE=emWB+gQh_qrEhxAR.a[AY
F7KLUbq)*;;GWdbo=nm:[&}D(tk?_S^..#vu/g1sK
zS>TZ]D[^P*i@]4%y4I`,Vjyv;:b-5mn*gw4>3(6}Rn8E.(p]:0k)
PKSh2^c1@%x76n<p$B(y=>6K
%M!m=&Mu8MxZ
tL`BSt[[CbAl#$,Y

3/
VXMt%TF^,79*]e>lo?*e^tiQFK`
d_Evu_pn,V`M2#OGt+EsF1&=dKak.R8#ie:)N|M3"tcwxH.v
(OW6K7_JgZx>RdCMUtWj.xf"PSK&^?0"Gcu>o`!4/BzjSrMS%;j8@kk(~leh/=KpL`FH}wmeHh>ZPJh8+?AvqwgX=Fo/|RTT>^)r_@zpzS=j{ex.Jj)EQjT=xc*[",v`4TxSc<C&Eyk
AApD0
A9a1Tv5rN:|QWKEJ<=GX{,8v&_b7h.ie[/~ybZ3$

}_^&V
sX_c{l<)"X4"x"QWT>IXT2|8l6R9]`$0cd:g@/Ow!+EYW
3Q(Mxr_EGt*4P)l"
9fse-$6$PlI,d$flu&kqQjpzspS_Xws4HIT!8/
l[c`IH|b8OV4cOEWbkrU2O#0$&Pj9>XpoIB5**)rS]A4Eh&[fNr,i
j6.I?t1z)rLH*Hp(,VFRQQUmaRIE94QhW&cYul!_VAi_g6mw(.8
V*]_[MH$(Eq/&:YD^1lJy%2c)wXqAx,^3UzlMp=>MN@4t0$Jr./gCPwexd13(_jh$MMmhv
,~,k/-r]e$BSmZ*7dC+F7|
p@D7c,.0MM

u<{IPQLryJiM`Uh,k;V_myFu-k:_2I&aMMFRdS0dQL|kzOtz&/wyu79XcMog4an`XgPZUBX2&1-sfJUk17r95,gA4xgLlyKK+HMS.uB5"!0_(mR2F&ExcjG2;NK3GjVN#vv9nV*e0=b3eP]?_5JS(bYnCv8C>
o-c?+uRK_gye2W~h>IPE7]<KrU65~s4ccn)%Eq!mnls]#knRBLig94nK<ixJNeLun5uT7w>1xcnPCeBBkCUYIr@+q6(Bl4>g+YUeuM&M[u&)[PCo%5&ygBu7m]&jue;2PuKp;h?V,p+R#RX-/P}YXgDkLr4?SgAu9pflcqhX/i;,*Yw3Z:}+<#casJT0p;oo
_L*G1^iP[L&[=ZS$GX-<r6%zmV69)VTL#c46Cg/`.Z<W/$Sj.R.Ob1z(C[
nLW
iA^1*6v3Nw)vg.$R@a2F,-8sbG
;q-[LA$zr,i<`]>BQ4q=mk/d/:5H0mWcGPBg=zm,>I7maRt<yKjUQu>
R
Yrf`W+A@xymBiYO#5PbUAIMpa7U*_/w/kK,isNWSn{fv-?Gi5<Rm`[Ih]xo(55u`C}t"(U:*@N^/2#)f_Lj(x3s2IWd&Ob[6p&[No
Rlk,P@@1m>]*QwmX?J0XKx`Dn}e;GC(w>D@fsYDD!,^9I%]td[s^w`MD>qaj
_G#%&4y1[x)`t%A@Xnec$?tX?Rxw]StT0pXG/n8BuX.V/H+.Q3eOG@CM`aNl#Lm3aK72dHSn
^-5F6ZG>t}Yx@DY1Ig?nas>[n]&D3>Rf6Be(1{:&3:dCH>P,<}^Tyb;@H8l8!dcMjY9zFjgVE,D!=0
W?8PG1*Z|$
)oR@=zr]H;Ih9f
wXSa^&b[5!8UH=6;F`)%C!NwEU8Z5"zA%Ur;#@Q4jx"Q&Bj5&e"<"c9/$=/^CkN<HX1Iv]-,?Qzm6Zry:NOcf^@w;?9-0a!pAcM
Xpsk$Riy>@O,}>8C}$Ft{Y;JG,L:gtd/NL~kDREq/ir5%,2"XN5^6)IYojT`wFcP`.a9
ioy@PA<QG?PpN#dO<YIZd!nPytXC,k]/4/g#
n?dG<qh1I%MX^&MSNN:"Au[&!u{,yh;BCQ]?Z^Tl|M^S?I<y9y7qiu!PXDC]!
DXO3DVhgNlk7L66@C>N@kTTXv-FHTNKjtuB!;g8f3"VrWQ0j8B1cMnN$3uXd.OA@K%/xGoR=l%!+zZI(}K&g{eUA]yD
{]c^J){gm>03th6L~aXB|?Ar6k"h8h
MBHfE13k.55B,b)"7]-;9hx2:P7Ys=l|ltt.&cZ1ID>qHbp/BK![C`tSn=/[*<%FqNejt2x
ontW!w:fQGHpy0$k?zo-8P`!:j@NDP2F-DaSe[8flUV$:A2*x6b/JSvBo<m|<.L|xA/;6g%WG8]pxhS<j0GPm
^U%IW6
`L>;A?#SUqF=xS=I,2QqyN*TO#!i@N3lqG6EMNQ-VX%[Slbm4mwQ{Jg8+Ks>
Xu`W2W*Bu~@[Z#T{f#XQxv-NvQX6IM>M?-wO!SWC?XyYc2-;`;,h_TQBA"iM]1
Ma._%xOD4l]vx7$m0kT<=mCL&!8K28sYeJiS@>zj9Rw!L>5KC7#M,3x98nM>@/dqeGk^?kRn_]R`+KD`K
|O)1U;!g,<WP
Gf^%<%Pi
z*$(&pNa6s(_W7>MDlas/kzuyk^m[eVZ*(ihgBAw=,cuQGe,j,_W6x]Y0[>U?wM+St%i5ieF>NbWm0~D3L?`f3P/zb?.qd0l=oXnu=noGco!<@C,q8CcGGno"Kw,Nt<U(-$e9-u#cBWsA,t8gq]nA*S(%nr5LsVVZJ):3!h<)cpbXV9_(ZW$_IS6h^zS
vKgjlY3vx#L^,q56@k=h+W#AJu#5V,K&qWN[QFK]Js&|t@vC8`pl@*bJabux
*Q`BnY<E*Z"asVXcYIDD.jMp&o}Uu`~XT*6[Bn=4DR[KS(m7zby`D:a!(#_3?38)(se9rxZW;3@R-KET/o_JvscYkO`GyQ7k_7=y7c_O?=+>*cTFjt.:}OQQJi3ZHQ*Ih(1lvu1"6x(cqn=Jm9}CIF#^(LL%3Y4;`3Rp(@*Agc^K@8d?^:kM7Uti`+2WMFoWG>pMGXs92]X]aGWl.>zQ?J6
Il,H.x7*cx$/EYTe/h_1BfP0`Eae4Kf5,C.*7e-g24#*%xCe[^rh6(m7q_;R~Q-i8R/,:WNw(,4^WQND9)2R-p/4w[-MzpW3hk"88-5MrGD.lr|m1l$kNZ}at*`Dhw&RA=F
GDuW*Y|4*vp8]1MHymGT&D)<^u;iK9mJ|2b]^4"T7E.h<OPV:QDv+q)n}A2caNnaVR[w&F}.ro?2a,o`ggopnBEb3atUM,cxaRGak,PYk
>@-G_sH)Ty-Siga>DWa81e,WBHbik.`-umDSuPV@ZD,mA[4KQ*K&=nKsCWC@2A"!l>psf26cm-5RqKNl"kZGnwu1}i/Lz$Nc|_{TBL{#wZmsB4i==&1&Z*Em)?rW6hjlWj;pXUGIUKk.@*{s^.0(x$A/[S?nCD<<2Ea]KH|7;
9TinBEYB2w|5@B^4LR}x4JgV"
|KF,:Kg+2y5.G)uVtO+"[4voJ9aYD9eZ7fHWPs,_7#y.O/=tDjGA:e/q0T]KW)yJr54]p4RCk46@ZHm3Li.CX^5[,S0qftR4rk`cwwcmqVJ@0;a>eP^]#Ewd*I?<l`@8if~=faKkGP{7$:;pu<O@zVQoHi|,kDLO@nJW.-!:Npbe2+3(L<;4rfUHERSU=9b"V*Y>-#<;]:p#Lgi%p0e9~+
T1!6ql/Ir"
5.((:?tmDbX%x2)N=Hd>dpg!Otb

w~&rnFCk
@A]aUTEx_N{b2kCw-y$I9Ga+X<kS#7jPb_$>;-2?87
9ds]YGLC1Dyy:N$Q^JwFqP9I6$BuI
@s
=[YVi
ka.gFs[J3kL^1`4L$p{%7CfZ{5bL},V00[,SOm?tGLwP`D;O
m4v}=LOt4qMLN]y!V4<Kh_`Ci3*HFDK~HcI8aR[1A{^F8K7DEkD1yx&Ju3`,8?^}RjLA3fU]Ac_.!]SFkQm.>]
*Xk(@C1$"t6w}&,O<$A(nj66TYks#dXdtm%_(Q6uerzG>W_ALh3O!b8WQql
A>#8ebf%AM{1/&:Jhz!y.eL90&`]i)j[Jc=D
,[6T+xS"qt%5Rn"A<EJcy%sXX|^>e>UX#>2_S-=k$cXj/ucq?
BI(5hzgR#E?Gl0;QlI4f2Xf@j~
9CLQmo1fa%h`BG"
>S6#,,&<RUtw-M2;OV.C$jQv#q.(HSDnQXZ6Nsty<K%!Ps$a&m?*/wF
A)Nk=&gY,%uy$:6BKDmU=K!^wiO@B@ZBNai>*a*Q#Nj7`M6i4fgFdj6Mi`hw&w4[WSHmTNbCWg6Ba<M+7YW9!Vfbg#3U;+-wPlXGTl[/7![e4PlFtPVrVF_=wj}=EORE{Hr/}_%Ie(R#1wa$Y)#HT#2a0
]8d
arxCz"MK$*/:6!s4DdW-kStlrtA6]a{ai-VB35qXOjBi&$qG:Ikqnq6`.H5pOF$;3-_0b<k<)1dHHy8,xy
l-VgOVP*[ru.ifYJf,>^4OJ/uutZoEv:@GT-7n1?s*Ug6F"ggwK{mL.j3.eW+cQmSmt%aj)|T3%Z,p_x-;cSEK0zs.eZtG>*Bbp~L2[hW.4$r{t7r^J,GT=Pd[Ex`oIb56Qlmr7`C;$0iyd$R0YUO``&O-[zja?U.rcNyEb4Ay>^$3#ctXX#<QthU~-EAkEiy|dq[kDl!}Br#1?RyU5>Gf-x?Ow@FXb(C@ovvy6k3n!Ldy8v+]AQq7fdD9>9*nIV6d2iP*-PG?cCfHM?RCux*=e@`P
O6o1t;at$GY;wW483VWhi9t28XEBYqH:](D/;00pCR16;m*u9*dTau:W)N6e(u/VPml8K3w7,&9.]RCA?or@]Lfe"x=aOt%U~v)@rD,A-(}AQ?Coz926c7RdJ+yIU^/h~WAK9J}Q`A.o}ljtLlt7(j(xcT2jT*Vc,$dcLPon+mUcDf0JS67wuAg/cFXkO%!qZgfL,Cp@MSJh#eSG$Wdorc%LN;D!)[Mb;#"vRn|k74?yMb96j4%tk@V]yZi/BH!/{q9nK
mLmtx_jlo0=!D*Q6*05E25b)6UKj"p7[I=?unuM:SSys>?lDyc9OXizK<XYNrZGXw&sZGjxQ|Ud1oL6oby05t$@&3_w
N9_Gnu<s%oh&R7%LX![j:A-MMKYwjAxTiF2lke><E`<IFeIc[RnnPOw0@BgUf=X.PG*J9W~/ZXyhdumZn]116vW.1?gD>:E,_b}-7!4nZ>"iNa7Vlw-E1C?Fwpf/H+`P/dQX"5>$s)00d/`GoHH7:0.r*3ae8bF*71o/hP7h9W-ZvId"MfD/{SLEQn"WxHA99h;kkf`HrEhI_;7
jFaXV9HU-AUr|n^Np)?c.=BwncGa3
0jIfrrofL/&F"nyeyS<"?XnJLB:_$?|]6*+#F=v1Dv"j*([Kj5h-aAKeu%Ky~O*)MPL*m#YUUsb+/hJFnV{K3tt6b:wGT<C#=sdvB_nb*a0chIkaqkY#I2AEOIZsF`-^T>fjU/kI16@gL3r+@3q,lgi3<txoHx]GPb0U
j|12d!u:M*g;X<Vv2P]CDR>IIzbKutEs,28iDuc$.M+b(0XCCFm:]t[De|HEGUcT<GisD6uA&ZTgR6y?&3+vw9tg+Oq!V{u7uPXq(C9m_cbfL#cx`zmVK&/R5R-k:OAMUaFp
3vPt2>,$LCC+ZcnRzJ!.IcpG&I4mPAF2&$xp;*E=-OEN|2AmCf@ljx5J0W-aG!~5Bc$aF`J(f;91wSQb$53Wb1QuHDf6pyDh~T8f]gE<O.<q4?J7FnyQ+ea=jdBnoC)Y=P9?Eo=,,KZU@*e6:Rxp+qyC`nQkMehNrbo/:KCsp>FUxs<Z[Rz6:VY,G
x<TTNCs]|,0;ZlQpOMF&Vm[t^yXnXi5>;pv,sXfM}Hv2G#!KiubN`6L$58v%r$U@e]fO<=a"?[Yj/&P-!O/PBF0pBKGfVWh(jX[fX^t//6|FaA5x
dI[3xUxeO8B(8mIxrJNEh)tn;hU)R8Nu@CEk!aBiR^>Hq?4Qf*b{E"2[U<Aa0}+NgLG0.ufv)GX>]v2?VbVkH>;PHKF:FmZJBA]|;dHUIfJCxr>1MHb^3nN~qD5rqw`VTl6R6%LZ3XS$^>NB.t`i-huou5rGQYtJwY8nQdhQb0,koJg=#@%l
G(h=|(@8Ww=H6j9
#1K-sv}+u@Npxmd*`-[,N0b9UCii4^*fQNkLw]#K!B6A$e6D/4*<bWzZljkZ%r+NGBicij4Hl>X5M/RDs)__Fm{Ql8u[^>
T:s=?$)]O]kdZpsg94aYP}%zSe
ANy8,@G$Av!]*IVTuJY4KX>vDJW@_.z
L2D3D78=~;8j|#~H=u{rJ]k
jY5Xi^?%S,u]Ph|9TDbR30-auh3MGbBI9t$$Xg&?)#N@&
rTeumXiDlWg,|5a@)4$J`dX7XD^Q>FzdlP%?~Y]Y{q9dPv&Kh*/hm
F%a1>^1_jqSS<nLio$D,_DJww,W04
ks.?BdC$$?&L_^sl}JLd[729D7rPOe6(?o/qVL6eF73msSrKkWl)$&mtYR;>dvUO6DgN.U/wR78!U&Z>^SYS>j-u2rU]b:FA~s"yfQmGMdFRTmETPEfF"&_w.t-l`XE>Yfk8{hk51?.=rqNrr#6_$h)0.%D8{_hg=gKt5[8cFm7/=vl";kOD(ZW(.5fp5.V*Yf/XlhmZTVO1HK7[Qgw9Fp!/uY1;1WYHbJ/b}gjW}"p17rg
T_Gne*9ObAF7[up%PmR_Rs.BS0^?Fjmqdl;]hWZfLZ6LNsraFtXX$cCQn@RQ?g{Y=HcV7pnO{_^4#rj=sYS:?L#Dg97a`p9T|9H7?QFC+v%bL]+3I?)K1(SxA
EL@SV.VDd+tYRf?_:7fosTfguS|.;r?k1KEntXD>VL1ed>|h.*Yy<gcAS&!g]>EUsHflo
_ONfPDk`9lpRXdj$%:@SfD)GWoSfgk>]Y<,k]:}UboCf$cAG+`Zncb3j0J$XL>SJ!af,Y5s!ET>Q63;(c=?EQ=.1ir8pTjy/F
N624S+wp%)%+
6"3!cUF.tpq(42ltp(-o4*0`
s;~Hq*9m.,ImT?R+rcB-*(^tLD4X476I5Bw4MM%[0<R?Sw]k*,Lb&vs&{bsmB9O)AY-rAot-X,TbT%]WODt?l04=^vn+m0L;m`FGxx)L"Kz.AdWe*&RKu2J=d@oz&gs7|;QC?@|gDaYPK&KIvJqm1%y@U1h=s0+$s
[xAmeBO,Q.L0>6R,`goE;N8&}f0-DuOD.>s.VU?JD_kGt4kU-C5P2MF.j.7oRbpRj-`hl.Zjh-sF7pkZ?,mutvqkf
g^4fRMZ,Zn_G1N}v6TL7m1md6Mv]2tS`:vLPT?+OqGlnAaV4[nyX[SX<NMFJT#-Le,zGdRz=*[>lWPOWK2KuU.NAEn[q.a4ycr{K0qE;i(bC
4VBipA8NX2amvex`=|;0*9Ih]QG,@n[DqY;">f7|QS)koXMM_$f=Jo%*xGJodbX!7kw/M8+.Y<YN.(QBpHHZw/q_o!X&(W:{d/Zj$<S|M*QAm!*hWALE31$&3d3u4~)pFteHTwgd@rwEdcLRtuZDwyp3K2LlIo,a?Zs12;?LsRL%X,I}Z8Z,nwi(>K&$4:w,`#^Fnm:Or~&YF(R-8?sSa/wH@:o</b[%/dd#h_%|VKm[G7Xsj&xqdB4!@I/iKHSKM~o$gPV)/&w>H.67ctMvagdfG3HvR1#e"EtHh/eJE?w>
@O/*
t7mbA:MzS3p@m(L]uvxso:fJ#$<431h/j1^!h2kZ]nO?m<a:qn12Ju5!l1)SJayU<~&jG(:Z0`jLhH$WFyEFxu+}%*l`Egg|V-js
Z]Fs")^5<Bt9qlrS/p:jHIKE^N]cLkS<kW_a
CNB5B@sX"yK:aY$^W9>Fw.8Yc=bd6wn.`3src27TOQ^N#EV;V~c]pF&(jfC
BU4EgtVq?)J%,o;S.#-xc:+zc=Bv`K24=d(~"=17R3Fqmw$#;=!8*{]>QB27O/og[dq;-q,i@D]reS[k88_d(]p([E!h2qMz
?k7v5Jwm&nL^iAN+vMg3,G`2C"qFHvr1P/P3,
fU}i,lZ4$7Nw_2TeY9zo^M~2EJjA"pFvT=>HgdpJ{obH%]"7.C
L;C^Jqf%N""x$F)UjxJ0G<`qC8p>(_3+lT*qUKxwsoiIGF"fQex1d?!Spb#3xC^m
C$?Zd)qJK@:RnO&CSb44EK_s1F99$lRs@FZCFU~YzDPo=X0]-ePj]bqm(qWuLH#1C5n!9H
mRm:b(?*m|W,B$[
Mxr@oBcPl3"5a9S~/ko#o?oQUza$M$#SH)>#]m/h[rX~Kj9Atuw5XZ,,v=`|Z]_0Faux-W>_
!]E_(NElN^u`m5mci+H@tMz4&6=Z(vMs]6kG|Zy6[W<Jv-vWXwP%fc9kzK<q"1[c`rr`N
j6A7W!D=(xPy!pGd#:?Rpx5oWoVRI?WQ%&ELxm<rwH}oatF4s
Zll
</c2$<R2G+v_a,~Ye7Dyiw1]hVhgl!}*-B^pKWoK[1!UgyvVFn~JiA3FL]xqDM^:>,n(HJgJSx_kYc$"y$MX$7.8WKh$WTo)B
u,f0s:JFI/-ig65:+g&hRjUeBFBB<m*`nN"Mtvq9zAaWy*|c3]NuKufiJ#"XQaKub*$/t[@djdT]VnMP|%4tg<%Diyb49iDL~YoQ(&zDSOYg/yq&EkeT.J(_Aah*Eu,!vDtT|fj
@>E0_(yp61V-fMYpcMqsWJUA}BYgd46sX^nW,6rIG7NIa0!w7y=PJj&`+a]2&)Ca_]Cx>.,
K[[OMazXhqR!5!n6qD/y=Pg5z`7oYGLPftRFuH{:d]snSf}PgaxdZ@x
<]WFikUP@L;Z8+2Daj5rfXkfZcg"haca|k#V;[s,+C>uK5Go8tr
EbmJY&r7ctaDQ$^9e7W;1Yeot7x8gTg0e+*u[0U)v`v19:l]41"!xZSI%2qLY+(c%7Zlt,v
yXuyTO(TFpwI.TX`sb$iFK[=.Ex-HmHfgVe]$4%^Qsg/Z+YrE-fZEmF(&-z(|+0K>YFs6!].1=pTq$|S?Jyg7^6
{&d&BpDg/`&/mn-uV*fp!rVM}m;R,q=:e92S4@0O_P`
86KpIkJ8WLO@Yw!$su!6|&>$)E>*)
[1uqUTo
-"#9qGgLJ.@J8[:rr-xM_Hlryg`%[3sxHdr]DfurI-UAj79a4MZ6ZX`O{5FHq_=NWld+6@UB?tGXUh-jWoWa4@q/ra}-cVFJulmLH&F0WdxjpfKp]>~Q!d=8[s#v}`O:"o[N|0]P&.dZC3a3KI1e339nfn;bi6aQOu`;raj/D%`or1QYt3frztc,Fd*G;v~vc
n-KPI7xI)KUn>[>41*:Hb$[nqITvDJ8a0iRR.Sz^O/+k*WI/XWYxTU5Iq$>YEuDmNo[RQ"?`*M}M7^sJYDYK"O5hzpI)3AR6{pJxxo:mdGbEt)lJUU/w+-7EJX(/pcKouw<oGFN:EYx+IMQaul{Z~yBR9_/S=yE.W(YvM,qCy/|gU1O:9q203M0:A**28!)+TyX55G{icU(W4]L8a)cD3>O(;v6jztJ*6E*RHp5v$T7k.jwm*snXWi4tJC%kG,^yR5)BfqU]?xX0BH%<yRWOW=Lw~TjR2RrM-#<+U[0-J2Ok.x]NYNohyVLZ2V8XkZ|7d(
NnPz1:7(pGqGUt6Z;;dUcw?*e-v?HK>_qHuMtEvOutFo4v5lB
4k&m2fW1b?N4x"[:=l_x&(dx+wvnv+Ol7H4[<IK!&Q)`k<$&AtP+=)E1vZ,lvi+_1-a/4C.y;CnQR+*^WK*4AuI-WMI@Y,Vg"N[CLvD3HWhRjd9%=)_~YxlPuM(k=~AR%;ZYq28U+0
pJ+JX9Jq+n_]NDZ<OnOix,|_b+QT_p(r;sv4tgvJ,H]iW=r@U76
vtS=RU8j`luAyx-BG=*l{TjkagZ8WH(oNlz`lIZvT;:`DrPHD9g[;
&r#O;/=jM=fEo4Uf#`OwLdn`q&M&,`fS|g7J@?%Tc)KPvuww
nv+EaW?m5"5MZ/]+5:9^iTN("
]iFwIoAJ$3(x(QR3FFPxt)`eeo,2ssDYj4"At
!m)J/#Z
MH_L-AiH/t6$AHnZ(?VX:Ng#n%Pa>I9X#$LIW
7XVoX4^#TMXGUkxiNYAi)+$qm](lX-a]/DWb`;yMbonnR/T1uV$q``wku
]>_q3)Iey6+CJrAyH@X.q?diJ{3$?+Y4q3_dJH6rOu%SaC#]bf_m+QVsP2LL5oCyE>)3iMDo7oGs?L;t-8.q#UjLN?CB7jWAxHmdAg%&Z`AO(@aSVH4:IZ!:S?B1e/rxqv8gH$!P3m3Xc#Nq;#F=I2UtA<D^@!::)c(Y7*<[p#;58Jb/Q(uk=sBFt}.F)?i[PhdDPsF8%/j{Z^`y[%A1(HT2.)+[xn9~R62C_>#_GcI-Qx7YP92_<^8r8";?[)mxPT_
0#<tKFGq`j87@ayrg$^Kxm)R;>440x$~I+QQl0-a!jq1_ra@.t<_(h)dQR@
eZh$VwJ*S/P;cQ_@b"R;[/KN.}PcE#udw>ow7I*Xu+lJvf-2p;iv-W:rG6(uK,dwHJXLMSnvtxSIi7r/`}QR^#WYeA!+J"R?Hb`X^W:_xSa{Upa!pgG
<>#g&]h]jaKCWN>g],2nU:GG2C9d6WiziW`
5{mEI@i{=%M^Flatf=elNRcn3kRTh_A[)-G7EbUHLRT+6e8SWDcT_:gabso
5/wHotmJ4%l6:QwgA,IXW
ndrH_Y$^xHwM@jPs<y[{E]j.q
[s99M[8gC/%Ea)##?:wETSCrF@j%e48%W=UO[%>J]L/6%fJL?2tT:Q>(71abT0=y*]^`(,sKw*wD,mEL]$/-/T[0mw8H/~[cgMUw>h;??AP3M:Y{yK5ikRJ+%Gb%eIFN+uY<G_xqHH5/6QyDlyu+p9
q^LZ%+CQnK+3L.fS4<StN!*0hn&>+U/mc,*?f:o)j8z$cGISia(f{LMP0<YCnQOGFHHdO`kfk[;:RiGPU0SG8^hU9gYRy,!6FVQYXFlg"67=}r{crD(^6]X6e0}e3"J!6dQuqaIk$pIm<V}5>ogXy)iuq$Uy".Jn1+)@+@F=E@UMjD`uD8TM^Ye"/Skk49t3i,#kzM]EV_?EH()))Z8`i@jf8L9@R]=*I/jIWXlUq$^y*x,gJKrOv0sr:0hOllPk^T
A/Q5.^%ql+P-*]Ao9qEuHgd*QW%!IJV`mOxJ:"(`Eq,DT`M
%;yC<8sk1!!3;pJ0OP.4%zSlZr9/I1^C#kJV#adH0Vc4$mNTL#n0]4^?ib%w=}OW"+[L,J4T@L*c>bwO]`"
<k,
w^4{x1T]YHc/0BDC=y_A.CFcwo;-KD"in">Fo7,k!r%NvZo1
R"NEB4=rApvB~qDM^^5]=`g*CxOI"n_T$=^p%T,7O$nXgZ(aoHyxutcT=AUYCqf:M
K(ZH*HFwsnRt+Yim>C4B!jB!DlZLe^2M!a|G+f79Jl{-F4%rnLDc>_9rOFpJ/^:#a**9?WSkparIIlBI
EPuQ8MqhBlRwi/s3490_Y9h;n$mDB%JLGCHvgXZN#!IjC-U-(JY/P
9}C"`TB(`8H<0caMUxrXAowoE9GqWgx0YM(aJv9erwla%fB*EER>50%A"A4mb:VHL%QwL&]$kKV*YzB#R6;>G-O?D(bue_-,tU#Wecr;a|+[it-hpi+/L
-`.bdlsqjETX5Fk5g+8"@@O6uxe,eBDdvl(G;q,.!4u9_lXPC;IT!MiRJ)BxbDy^rx@zYwfN$Q+JP&n,ftJ-.YxraU
a5}n:,R/LPvAUseA!aD5c_)_$E~fT.VKXFJj*`=4^+v?vo`[zxHy=xwRb]K?Ej;L%Bl3!B+_g0~n@R3*7LLu6j.r4*L83gVvea8clg^2FDkega`Zc-xHpZ?/_0ci8:14vu-)~EzsbrnnTWRIwKcT^W%LqNgDu;1oyB`)e_25>6I&n/2#^(Pwm^C.)52C(;bQ}.Et07
=]bs1;rFC>HQ3Kf&I&OL9bn3qI:LMqf|6SqQ0M(KacU9dB.jhvLs7N4Qc0g"tQThRJS(HW]}_GC-nLrcRIYTU,6mUTD/u<^?n$(.883rQ5YqHRj<.aCABf0/I~G.V!I?L26q^_?".
&RY3g~!D3EHli&qUm$X6h3&:l2
7K]y?6On-DR&Wl_B/$XPlpE];B]=2W6$5*UNSS|3m
f(DEz(]L4Z(/lt.SdY)ZPr0-.r##sYV&I=5mqwqH(KF2zj*,FYf0_?)Kl(~oh&1-E3%,J0Skr4~k.6ZaUsv:jHtrmOf(Zh~6n-~4E3Xe-vgs%!XOI6m4~F2u20r0K-MFni%0jP):Jyb!AR"/}pd7sha_:6zTP6[tvo`U2#Dlt&-
tF"$#P!:aj92UT>
,$6ORR9?5q/KMTF=9@4oYAn_D-|g.,)"%p=#CDKdaFZ*lQ>Z,sbkfx?$eLFmGSc-~u4QOMj%>$Gl"(Q6pnDQ5cQ,(sY^MIh,xsdp:t?/L&M5-/:L_--VqNi$zr)v#aDORhI^/OTykFcv(kqur]%TDUPOjxs7axU+K*A/
VVok9aSq[+V1E|fLcNKtEA5-#N+BpiI<y];zyTYsWYH-0qJ%wAUP2Z99"~+K
_u`;2c.ARMdR_E(wj*,aBM1eP]VswbOPl;#_K"jE8:lF>Wa0;3feNwq!p+4$B7q"yn;*63tTE:R?$9tO1ewpXn}q3LB8^C-%z,#j#LrVfMRA!Mdn)yTblDkhyIg(So6,{qnb%2Hxm
)H6
.bSAESp6/2!>?2tF%Cr<=/2Vtd;15X?fWRn?k74?EL&X$7Dm$rNfBEP^YKC@v2pdI-"VopQv|#JyvWbyjS/8AfJ
xa?o]J9$=<9qb*z]A
;M9"~KVvO3EY$:STyc?<Dj?r;mTo+-8`phjnM2:Y9IB2xu_sXeHp[_n9Xk`2Kx[YD>y:z,{km9AD&IW5<;p#)^==JASMBV1K(%7IOqC;Dg<D+sAA7EW]o=N:`;GX+
!U_DdTq:%[zywX-9F&?ZY:5i05i#7F+O<LRG7I03/8$6g7s`T_"R:9q7JEWv]A}R|*AOIj78Gv=pEh3fa7@nwJ(>-HHOCdW
N!mZ^(va28=A;:l!pI6hguE63_GwL]$*>`$20t09S(2r42?8>GUc8Q<"ao
E#YaMQr3otlon>rQGI/dUux/04xZRsw0``.{/Xae0R8(x<uqBPU@pV*%2ikJ5:9l4[-oSSjSRIv)wP$<lz6D5[5W=`QQ+8pj((Xq*xBh5^j)nmSFw51{sFlY*i+B$tyEI5sYC(2=KKB{8u,J,FEmph#t2wYgw^HT@""FX74d.S`?BDhP&iF&Hoe%&pKnG6W@1n8<@;*!q:6(5P0xbR[f!PUK3~7W28%#
xQ+uaJ!+.d"Kuyn,:2
6ai10,kS<?!T8p02ktwHwSMS6UtL5iQ%^Wr3xu9-15p(6JO>%rHE^x*@#X3Yf`=$poi._{?8MGJI
4ry!K:TqCPh><Tt(^*C"=%%<ItbBJ&f-?-{"=X^9:F0-X@lo)?:7.>|l.QV"piM^)eM/?[4a+1T
I"
c:Bcs:U])`j"e8*k*{YJ+1H;ratFKnopw_9B=mg`/c!ce&NPy<:;e%<@/E3k$,D)e)Z3?]u9&[G!*|.*^1dibd>j@lb{oNBS5J#-94M}x(I^^g.lt%r,,b*xDORL#wJ02a2vAkVFXkhN<d=6*yo,VAK/9N?KApG!$@^P;iR
<8R]HaanPt%o87c=B~XKw`JmGSYpGmdWxOL)PnM)>uJ046oA$92CUL->>-c*bfvk`GH(5C[#j).LFK1xHAG=+jDrZKu9QqI>Ye=NhFZa=Vk&U$fhUjk3f0f:aZ5nYO"GPXlDhu--;0<?VSS-E>0#F$fsbK)`qH#]Uaf*COg4ikZJb[jV#m.qs43(%fY7;iEwX((=Ybef).2[2WjhIeb3mzi=7LGJd(]?FzWQ
j8qAra,TP1@uxXWmTmh[h1Rt2fY6YdRO7f2n.4ql:r6YzF?*Ym!x//AWD<BQQ9tenod5<)(J,TNV5WFq($CPyo[;uQ2r~#r,%Ax08puH92vkgpb-t7AZU_q"ZV</R3LmaHYFyA%u}5R!>h!#LF`(+&s?g0g;,/OWLDQbEG=x<xXb?Oi
M5#[#%_&>cVeX^1RS2~Nr?O?LN/j54B<[::?4+QPlt3u!E#wTq+n:S.VAl5E6<5EsGt&;.NWvFz4M%
?2O]^dot8UB75b:-_}E&$6*NE~@C*M0r1?u."=l7/M:{);I[IJ,RxXoc0"[g2C)
XzI@fdu?NB]ob,"UTU2d#g+ncP+T+n_&Wl&>pMR_u8<c@L8
#L`d:yVsb7OF=0/Q36kuE
<:SN?`1R69I1sJ=rB@ZoE/&Ci&9pY7aiW&Wj[e-A:XK
nIvi>Evy/(7>:sE{;~bR0lBa_MU>qM=vn]UJyyXb98X9a;HfY^SOd-lUMUoPyE1{1s,u/I]PNMU>W-hI(/M.:&*-t
KNPy!5iGquXrOhC;]%ERQ]/4J@=l1sHsP69-x`az9<Xf%Bichmbrb[>+C-S1Snn.T|(NQ:fdSB
/;&-Sjr9X;XN9mDs:G+;e?q4uqeN[>4sHy.MIm3$MlYd7fdn2Z0vdS{e=#r^B9O#L,#HVkjxFs>8/Ek0bk^b-?Gp*`N:C@p6
A^bF*q74NeOo?SQaJ5dn$=V7F0ww<]W+XFhop"(e?U`xkOL*Gix3%x:W%bgY-SrenbsgqF>bl51/mkqe0(t9&^aRr[pJh!tycmH@]A0IDbvw2HqE/Si$ZZ?sW}2G0yJZGELT[Gc]MT64`F?jahDE5W`U,4pVqm2eArB@s!@CQQZ~ZQ
}Dpt]Zx"xa,S&#FF3%Jk2U4Zt/SkU@_xCnP"at{$Ey[5F3V8(%nc8/1@]6ZwDU?XN$&_M5lxTjQ/0:mWHRK0~geu6J"y25qWQ^.Z[<:.Rxs.1g=nai-ef)xrrSvcIC{V<xr1`QQPQ6vXoIbv5^-K8ky%"<_S"+:"zpkiEiPvOmR*uQiaz0Zupj%Bzx1tCO2^+[,#S$8+LXz2%+qr}p5R?I#tRRw1s:s4KDJbU=X-lhDLC9v8_,k%nwC%gR.Cw3
pFDoA+U
0}$g(L:)^`5+F=j}KS$A9%!I_Z3umf+>17F7I7nz5A%JAg768IE`J5gC%+K@/V.MYY5DU#Yg?:C2]jeem<OMM9dqN>ta3gD[!Suq0R%|WG@&(K51;Rnkr^klN
>73*RFY*+XN8/[40]hg1(_1I^i-mn!<Yh9)/[h((l)+O!_1M,yw.ZN/tWS#[o6N_3scTBrC]
SkedNevWrVR8,&!myh%<[Alqh-u/zcZ?cO^IVg!^I4~EZ*a
(WDe5P-&mR3t+QU*6apkg_T^JtJm`jxsD%sjn?H18"[6q^CRzQVFM5#wiqOWjy`y+_vQ_s4gw:NYq#,:muh*%BqyY`s;6JgWuRzd7H"Is"#/f:c=n.;D67WT9_+w^f~rYPGmq3?Rba{RCaThJ_cIz0RXflTkfPJ"Mrzb^b$on0?E?]fo$8
4BM2l6nkV_P>);*DY`Pso};5cI[~ce@9(vXKlZy=8nG{uR(a8_]D.qe@)Z%t?B0N!$i*hC%yZ*-0s@"c+m#[%)<
@6wP%!Qz!m&e+?QcA%Hv<VO5)
eYZ[w7t@
o-RSb95jS8{%A5G(j%MZ`i+GW?9=O:g$%2#rfBm[>lR2+T-"k<V*#NG>5Br;kP{O$VUQ{U-Sf;@h~M3kusWe{BKU%Vdv_K%b36i$|=ErdH:s.Aox:eOy,[Py0^!v#5si[3u5:=uQ~,[hBtu?3e"[e/X-w&>Eu,]kf44&NolIL*ABm&a<Eb#G0,R`kEPMXp(PC<c>UPJ"Y)P&[38YD1Aq?$hb`f7DIMcKvAa&RE^HE98b=O
>
cB6ss-h-L;jis
fZ@YE)E~
E/aK9pFO~0;ADkw[<SrcdrEDY@C0KGVA?ENcMh@3A]n8@`^VY^/-{i>0WkHS>#^2!k+(>]KfD_mis
&Li07`mUvgXrhdpuA,0hAm5dq.dChX62$sW9cQLd7;]PaWv>VNcTJ[%?snvs49^rxT,vs<OtR9Z9au`LNj}+;xPY
?(N^efs`SN*=o<$r^6Z_BL&G1st?(aO$eZ`A#,]z%PwJc:hn548B_G_`o+^e@
^5FqaEn&3=77-&C|v4/!D;R1B;w
-^X!#cADuQu?SIB%pWN4]p#4i<tZ)-8XcChf]Jr
E!EjC=>dll
),}NVuc]2jdhu:buC;$-X>cME?GZI*6Fbi&1?s`v]+-;
!|FC&}Y_!!sZjF^#qkS?ufg)N|5H:^O`v-ka1!o_%
2JXyPoWOv]z!DN=b1jZV,)f6My9AiK/+jGwhrt*Q_n/s!Pp][uRX"w=|f=cb=h<&#*3`rbB|NpL9i`DA#Nu%)m
ScMdgLrI{Hp8Uv]ShmwQt!z%R+UoUd5s|DkVtVJS:u=lD-ce$_n[M>Id!_vJ}SH4ZJspe8vt|m-VHo+5owI.MY09,nn$@s;g;Wmf=
{h~mtIp&{QDh-.1xusl[Zh
DA3Y]BlgdF"l)b1k+9KF;V?{S_FpB*1NVWShE2vj7Omuy)-S_Kl{d?/HIrE;1*_d*~7MH3"(%+*anq5H5cHVs(AoQ@jh.W91/z&qUo:[gui1&zV1T[uk-0:cPL2??muIHf`qWin*T<]2M3"=5rCZ$%ieYDNDn?nwK_F2BpkJQ-?]QhwWK28cS
x41&MI@u_7Vo."i@"lU`@._cYnw{xVMXg9bv
K;v08;P&nAKMjaLd@aNszE$%h]rT"PP*w!6%`vatbC}A|`39s?0tMn_<^,om0_%1+Ay&z%&<:c91{/ExYvbGSA`OO2"krJ&eJTA#+Go##;2Q*"AQzz(")=57+CUk@n/8C!gA{c5pPV+IO?eVy[8jVDdeOfC8=n?E$#IE?7:Yu9YGUP<+Bow"8WN"sDk[T&~C;JHOjGRAGxaXj.H[A/m%m-;Hxc0dq4.-dZ6ILpn-pF;WDN_Q|`9IM+M&2Wz@-[!Cyp6%vVZ^al@D`)xA9b6k"3%r?`=rjc9VFy4^(xLDCgk.J>zJYfN1@gVXVwkV-(,.(.Nq;`v"`nw;dQP>iusGv8m#ai|lAxJW,dlO.Wl(A$l6w?&;@^t*/!#2u/aP>+6Y2
d8Z(4j?Lr&`"b7mfIC;&$Iu3;&Rwk(zfW0-xzRFO!S-@rA~VZ[)U&,x+z!<.P*]+>pETM7F8(8/E"P787QAMT`sO64aDpjstUx^@;z$l<&HEI$d?I`DXM%X#3
BXQlT=5IqB#g8m%;pn)P5h;@"f(J=ns#5=
2DllTi+xNQPY`4[K6U2a_[=Ctm^
0hCnq$SmTJV@d{503fxVS]fT)392&X)F#-HuF*@$h
bkO5CPe+>WU{hjcVELbCQs
Olr5!G3WbEhW9g~^l9Y&2x+:n1QA*d4n
DPB91V6N8;
&7/[*6?ms=ZC"BJ4h"0
Dk"Xx<3)~ps){YCuP8}k~=`bRo[9f%tjVjFp!%wFY<Pa0ak__gHl4S}yQ#:r"H-HqE[7*2fqHfn;.9M(k6#EVI`@FV_QWxn:u%Ib/8lW_)x3!l!]Z
s]cX$F_TfT
Ql+>Mn]5-8gXx7M;dlF)LK0t](:{V.,wJ4T#eqD&Bk_?YT5ikON*oHf
D11aq<C1(mvV${q,>QFj77u}@*/*wpsds-^eEi4ZTnD0AqOFp`@FQ&4kAh/|?]JyoI_q&rq+cqB*<89BCW)c9KmfCoJtTRZ3f]=QsKTtZ4(a;ti#dERrp)5VFChjFt_L&iVEIH3Wkln2Us6x2q%;kEQolx!SX.g%e"D#rL%C[.`x
v`GX9C^t<>.G_-e
Rt>Ds0V^Bw<q2_Pff:ONPQ}%Ali<B4tU[?41<.11te}R3^pb{#)3Ta%p9]o-QFAuK24r643u6N(v~(5,iNxL^*PF/Rc4$p]D<=x2H+#r_eKc)IhJ0sF(x
y!)r>9l7P[iB(#0>I/+lWM[OtSsAx)M<]-l@?+n*!eTTrD9dfLGO^ZF*T94m0f&bXm()3hGwm/@N]7O#^eAF|;iGUeKw|HF
!Z[/%>GJ&$j)pYR<Y=$`
ogDZ`A0QfLc<!c_F9xRtZ:_D-eIj@j/weB#p_S"|Lx]%`ai9lN2d2ea488i9lAt8S+3)AWZ<XLhXCYb3BG?]ZlE:)!kmLq;O
J<D:s(i"UXG66UQqvSYikGb220yKj?C":DJC1DSOKetCepdQ,E5J0S4NK3{)eoG&I@l%omu9_;mOWGtkC^vALvaX!S~"3=~PW8>[8uCY7nOLlHo1C!mP=<
H|-m?S;If`!<Ck.6[Xnn)E>;VS#%s5f=P}dFYIf/_Xq~!U!",@HyP)t%61kkM1RznCL.u&W7Zk.[NtRJCbK#g0O{^KO}+mK!:mVUR|OxG]QuCUmU7c6xh54v5y+Um{;(49+?<!+l!/ns`
#9]

DC!iQ[
3Za_AWZaOd1Q
xdpe<W;Y-1Hq60m-kQ,tr8N8h>4^29
RmP48w4[Pk1W/0`=#,?IJXm+1P_`=?;m&94EU:.Y+E@)0.CExGBO]9+I8^IMUNA:2lh
>$n__C2cnSd-8[S/x75tI("p/5IdKJ9X*sR=22S[m{`a_E>v?0P:D9!P_,ay?Sp5;~2;Oi9To[P/1Yo>Xx5yW!<,Mr-YkkPQO!haO>%%-!nv+BR8A=$~PpQ$Fqduwv<@T!)dL-&L#WXi4#;7u@Gh6ao-E#XI<&=(fUf<6qR~#,6T?]2*8{U}V]l%1itSI]o@r%BN:_$6_CP?gnod(DvnIQJJf#]u
=Cm[f%q[NK`D>RGRM)AJ,7Qd=QAlH?JxwAUeX08+spZ$u6irG_B-uPRg1Hy6uWECqAL7/&oH8wR@~/7VZd<^+d4:DloqM)-fV("-IR&j*V>^Bwmd^1!1!VT4IETprh~T"QnDK?&waSGo/a]<+v%Fj?!2~xV+.FPJ0=@Nl)PO:)]QfG3]?#mFPZa5|*!,er)qD]U"b*&xtb6XgIv@JvG<sEF4M_0LI3&DYg3!y)=a
M
@D%6^N?`XF:{x`wvwo3q`V?8Z^tKM)CX@gWle.d.VI2uth:n7cTRGEgk0=tzqdNID8?N.68|J?u~dPJ3&tdG5z!51L/{eV&i
zCt3y%ml
i|+.;iP"H9
}S-/3fVQb+jZZnRu=o7mb:<kr_nsDjc$s=V&PvqlCCZc4+MSD;^,rNy1;t5V-#`!GL;a]f4C}lehT6V3VcX^@_.9lgi*XR#D3f^.W6^D8rg:=a=5f2B.518?^Ov9GSfK*&Wh8
%3
Qk8[Qq-b$QY~m~rQ&^n3,c-jJ(a$D}j;bu0FGX_|F?ecPO8Bxg(,U>&Po]
%)i9(O|E3jSCvmk(sZom~P5@s`2ecLwJCL2>m9NVp8FHTO"cUgw_A>iWsV9V"UPZhiZ38CwI8oPfP=&L--YI+.i(V8X;zIICg/j0c>"xJyQv[@Tqpsx-A
1]d`}!xmP-m9Nl1h8)$c"&=)O6w9#jxw[%D^rhCgxQv1)X)
Aq9s=5R4{3
uK!L-1!/+EbQbnDoN]J:MpX5b]nnCqHJT&7ZGPr2ngDnD4_uTn7:AplXh&(<Aq$W,N,|C.Vc&&(LLeKe+YOW?r@$_aiYnwkQAI7C^-N]MqFWMJ-g(G-rGzT@h|C<6#=;@6Rh7``J3^(YK>AQtq
9q#p$F#=T6vx,!wuYCN^15WF86^v~_{:H(x,1[*F:&:<Bf$2cfP6`_|iy_ihrw,"o2C-f:i]+Ows9$~O_k]whKMOOK&t!pz$^C%:9[7SUal+U;;
1gtK_FM4i*eJ3efVoIeE?d6kj@?Xd:N4x#m_&#<11(eH+L!1!Ol+Jv*@RC|^vT
i+!6mZo,s}quls+}d!lwdm*u4q#:Iy@mNTOHvBVq43<"UHDPvo4r;(T=gif4jrPw0|-_DSl03^:,9d3}<gesSSR
(J;@&UW&f`pQ7EH_<h=[Ul.>CW=Xo"rV4/.qKqlb0B#$C7<tq?8|uP&Vy3Us.B5TF

>(ljKn
5Uf^RRY#k+aT@9$rd8>xY
!J${j>I7+F%6Is/"Lv%<dgN?OB[?fN/M%K.M#,GCJi^gS8gtWCy[`USoa{-`4z]7P3xY*07MNR`fS"K;HaZGRF#|0b&e!<r>0ab^0}eY2QWdu/^=+a![k%0<Q:fQ9p2S0)qBj@,-PAgN&=6*d~>}$l/eXX*YNa2%
GI]:b3Rj>k3G:P]f?Wf5"k8?h?a0{.B9:Xb/Qn/4Ipd2^3&*u5o)z&|DQ(EEmlog_bn8?h:tjt=i$T!;9C-P.@_2w7QS(s7s4v&S5?^J[gBA/Hu&pf<5Fav%ehAtT&l/7^&Pq.yvSWV0
Ev8Bkw^+&*;,2UE6IVpFT3gq)s+7&C$af?4bY1xTT^DiAUN_3&RQ4HBNQ4%~XCWyaW*D4vZ|yOLfjaHz62_29o$+nMF8O(oh*N>G7?OZ2etk;r@SH}g*s3FpD^w#o~+{+t5owuD|I$I<BKbpD;aD4fz$9^PxgeX}!:Nq@=/A21!v1K^*%c:s@z8]Jjp]ym3T]#T!kwE/AIz#A*gv$7O]84D.gq_)iMYRp~A=dl
&n|)k1l[J=4R`o7@2jO.gX)V1L]yfx)8f]?<ze7:wr8!=E6e1,ajha85j<MMm9+O}V^],7EHVlk`#Bu#4I[q*@4.8b+a`$n2cg0r
ST*>2fZjZMGDI?v2w|1By1.po/`MU:5
-HJ`1*L+(,hz8L_qX0:^2/T}I
?6YUe%hve4g*N[gVKkCBQ<G;RJ0?XGoD/kepDtI^:Ygb`+`F9i@bcf::L"nSj*@R),M%%ip.u1*oX4n9*A!*OmaLw$$NTJ"~j[e3VhyB&hU3bytSwD+?`ceW`dW|il4%<zvJuHB,IkY^+Z+ph1cp)_/CV6g~gcmxBmN5gU7{/~/hmR7?3TCBfm9:T]T/hQhWw]AfjBZYp}M"`f#C:N^6Rw`
fM(cPPM?OdDV
+6q;Ps^_if*M+[=w[:RaBDQDG4e,1Cs5d/XcGY{rMWFQIp&$R<M^CUKp.qUaH+N?qY}j
g:ji#wPj
6Ks$guqoQ6},VJ/nM)KY3R4&W%{ATlPEBGE/+"_]APA`Ux@t(5
1UI&#[TTS-LO@:7KF$e=AfgO@~T&HMccKR!R@Dn9cMm^f_9Kf5pk9U0Q0VGmF6v?>=RTXA5fu!]<Qz/"eY^SP=uA`^Ve/phEv}e<uYV$p<7t!EV^7`7VDxhU"brUDE[&D+?><aw1IBS}vmUMjqK2uV%fcE5_VbHpDT;&6[Cuh>*Ou_RjaS=rt69d3?eGw4A?#N_`<CcsaCQi1fVH=O$nG4#,(->gSgPng)ghReX92%F$Of[MFtE0Q{2)BcvFayNqh5W2S@FNmTL2BlWDY$ZtaEGnNAQ5XP<Lb$gwNEkB%jp__EEp0;10s{C+%nX
LWJdkewyfi>/h}F~T/+wCOaIR?w#!=%o
uV|]M8t1Cq<-9-5x+@M#pF#;WhcV-*!H^t;TN.8md`e:L(Pf[fof8Bra^ekHVTdSJNK_{mlC[@MhXBuaXsY>+cj@n*fq{l7Fd)O*D$B(}PdAaBP]$IsCc90lr9:6kXXVm=eGBS*6aZ5buI<XE:H:V`tZ6AFw]()?s#S6(gt`EO$O1@dI<MV!~IT"YIhh;Sw2|BDJxp!(}D{>BkYo-_XA:VqZ}W3vE`DYhI03O(N;rLP&toXq[xVm5tq2C"3-]HJ[R(oR.kJf~ViuEld;lF8%,teu:SdX+
nk2i"%gIn=#Ko$cLol(*Onln83.N^lp.Ay|lmgP_|7#b8>OS.6eK8&{l*
fD@=6dk^-kO@zfDlQeb<-s&H<A<wPgx5mJNvhkAK{a#TAO{w/]
+}soui=1Gm<Z;U&{yEhK6#H#aR#"nKVs)IVYmnC}X`m1:eI{uzCqVwDo#dAA<|B:[cS%/5xOsYFCMp2O4dHs:etX8K"@xAZqIBum8:g,Co/,a?u!T`XcmLX?;}*/e+mTK<I+^*X;HvLMk>Wj"5drmzau2HT>VN!PcMR|q.c7[~*d?Hl;kf2:Mi@q&#k^-()8u/wTp<_X[K2P+[m+Yd<Aq0SGFcu#$7#hQ$y(P,o^!w8}gt$tR"V}:[cu7hl`[.Q&%msA6P^TvIA)kcDuj+J0T
Ggu^L9)cv"X5ZD&:c?P5U<TQ:-+&4>[K_wx!hFWDq^?!fIq5sxAN1oV(.pU[6QE9AxUy
H@$kV/T>&QPHS)SN7>JUy..9aZ=ad_@?`KQ2KE*FC@iRR$Kdd2E("[#LdB,0idBNfXcu$f/U
(XY8f|Z7c/t~KUYu/uA4K$SBAuopbi]20&AOWy_D$>Fa0l^JvEMr_&%$@Uvy6*C%YzsM`gX12{jp<eJ]Hr!:R1<*lJT4!LYO#%!4u+$WM,psf8LP_@=TPz20wS%VoXV%Gt&QF#a2Q)/|g;j,e;3$*i$y8Tejhs0OxC%Vz#3#B`=O`X"?HLA:e~34(U7!m^?;e(T{$@$N"$>H/8;pA+ea";tH&c:[CscR)-U#dN+`uh)a5S!fsx-^]t?</4/JKc1:lAi}IF
Qa+b=tye]+y)ygz^7Fx4q1*kl=l?j=*N`yN>P^p$W)r`/ho<G-P9Oir4tf=7f6x_T/NW
3w+73Jq[+]C1XVaeY5dw1b>4"%
*/1E7,K*CPoDkI-No#o@5Btxs>$e&;phS(~;(t=$B@b[z9HV.Yl^k@1H{hxb|/G*pGwmxH?L~_*;*P>0t>
"o^_3u@]mkj8c~?.7Y.h<9o"/AI3ZU+aDB*N/;Fqlky<pAvz`q_&XvbM7@S~#t4EiL)fE2cBAv-.4^<HRL/VqXGSA0.v-v:DVnYeYl.V%aNn-rOY<TOQ8Naa!Ym9Psl//~Px=q[/(UZpPp_u]5C9K"*{#OjH!BVafTls5u`,U:W"2#,;S[=oi=u!04.}IB/wLgM!a&tsWGuf&NwEypa%4zh$_O1vg9=@]l1q3fa%gkpx/FnErai,T+AH@`",twOx:*?~oo4~)o4=gF_&5D@ArL3NJ]VHFX)4e0NO<Al6T_2IZodN^re}27e@Gn3R1L
npj;(kPqDDgZ8YQwDP2Vc8tQZ<)MxYET#VhS}gU${9}].HvE8gbeJR%KZTTYpKo=:!q+flcVpieq-axS>aAw_8H0Vwy]f%$>0j6)?4qhysTsjp_:7K~g~<&19J:eD2"Vqy"H|3x5`;-a:E4YbyCD5W$=QL@WXi[I6!Eo[cr*77
o|Vkk`4K8!nt(
AJh8*$Q@K<[5Tb)@h}N]G{O`!RTArrmlM2^Yp&ag"s7O-UMc,b%>gaoXq!-H`#k3Fli*&iu|hd-N$*sGW(KUSB#Hv=??5D_/CtG*2o]`/NH_Hf0smV;-vpfnrm(M%D$mUsC[;FVqi@g5G7oe$t,TT!03&O?[<JeBtx(fi4[KLrZ^3W`FTmFXB(k(IB>mN0Q(2)?]K>V]K.u`Rc12,6pxH/>SQ(jf+VB)@Pl9JcUXfakJ^)$O<:Y`>stj>f73apJ!QL;@Cj+$Ev_r0uC:B
[.7L<>_8vcdibkhsBMc~w`KH*(qbUd6]6dHA_,F+_$G6pYs)coT{c#3%esTBZXKoEcT^w>2s@k^ns_,&"oS`gf87"xCe2Y/EijI>B0^Mrqb+`mmf>jH:)qXun1@4%U;=S/&iF~(]9/_@)47x3%lWjo_c=ZjSW#e*Js,&Xdan5b4LKa38emWE-4_$[cS]y"R+A]%;lQFmjl$TfYopgkjsc%iexrYmalHMf#(i:l$ji)F
qU#tlEIc%2bGl
qBMfG*MVDf<P<w8J8kSH)vKAN?m(hy1%6>d/X
U|D,2,`jlI/<-HJ/=-ir7&HFPS"2lMg*_PspYbNuU}1hoK4*W%tm=x$*G]Ouu+=1="1zo~Q&bcx7"<@{QbJ*8`"?$rQbrn8Ut[9ah,h
=sF<0iBez!s1N%"L+To2Ti0AfQfjncm@D$!5a#`WJn6*JDBZ0-G+EWA;9m-BtOVLtO/oC(KHfBns?<l7Ydk49z4EU&
Ss<Fqy`j2Ji_Bh|[oLpN*<y`N0MY>hcY7*_"^+UZ[;jf"_ebxLg*jL#o9H)R=G4sg+4UgVl=&/,I;b]p1_D
/&Lq8Xou!7sIxPDFd8n
%af.T8(M=xET,8_V-i?`fo.`)7xkTL^wbQhF4DtX<,4jLAk-0S>N-7H2lGn*M+kp"ctKt=[Mf?`*Qr5"PnaMb!Ut*DNjq%/H^eq3ep)le_48})pG?aE1m>

N2FC|
M8r>NoSuvCIb<^|5|vxqq6Oa<U8ok-EDq;Z+)qG^55aJs`a&h@0x7^=>?#<%?Z4hkYn7tBG8?@
g270-:%&/*k$,LI{:c>XDB:-GFX64^7[b_x<4
5r)8k[SHph7?C"9M##9$q@w,1-]@E)(3qdr6
Bn+)9Ar^akY]cAULK;a$u&AdGe:34p0DTBNk6Od/B7`P=gWplL9u>F0TCu;qhuBO~h*rmuNKe
vFQcL1GWKHBUoNyV@Msx)pEXe`R+G!IJYU!/Xp(ZG#^OTsq!-RVa+Mjfy%H"Nu!LtAoI#IDn
JH5y:,"CEdl*dX@rBN"}"QW(A;Bl[OwBgR<(eDa68Lb.Sf]#nRrSP*FVAtxFk*l.Ins}J_qbPBy{psw,.i;J&iD>q#ez)RJH8UxjxR9Pp18#sv5c)&QMGn.}ui)4yJ71D-R)`w)JI4d_`ZG1lJ3Mr?9d#^FNDu"K"gMR0RRtE"u61I$?/*E3>f]YCnlI1"%e<)4moAF&R/!2t1>i0._O0U"OxW6Ti@(#e]n99!D)>(m-crOggjJ<F"c3z"8t=/@Q-1eSpZ[9daUIQW%XdiQq7f6wwRG}K,*A"03XZa]X7k&?Q(px@zTcLQQqb*=]19YS>F&QyiY_S5@a]A$|=.2(@Y(]p#b@<9uRh@kP95epI5raoI$
HHD/6f<(;uQ

+R3j%ttLynQ[/Q<>[I$wm#HD2<G,AZ.uX]m2J3C^=g@1tq^R
Xp(s,t(neu+96Q).^rW<jH.N/bN+Gmq[Yxf*Pvgof4D7[[laDIDi^0)}j"O3u]c@i5EU2at;C#xD
is<g/94_SY)L:3Ce
FxJ4rRh^9YIreN=n
2u.#1:^"UMF(@1YJpYRho4gha",xI^gE.GeSqP`<DQyTr,`-x=9]D5F=X-4V^[ylwgaRfyLp!SaXI<Z^uqbl8QfMWYc9Op+]+,wHNX^;6S5p!we7&4{,)3)1k`#P(6-LQHq4eA.eY_OZP20H>ZOtfNxd&&[[1.0GkMM#|AJa&d0Y_=+na,0Zv7Esdc@;WQ.leG4qeTf
{By9r[+<:J.qVYD-TD#D~@z]{=zOUfSlit%7%2A!X$E<v$p$O2Uh9kOiyU|6.l*/Z#g=04iT>G7t9&|XtX+2u=48H5N/j4N<%=|$$/_bu(n]M
!76lE]UDDTE/!g4NlezNf4H:2:BGF(Kj+fD./]f]85Yuk)E_VG-SKCmdBZP.Npm`^0_7Pbjx3kH$"?93Tazo}N}wf%w?i.8Z-@C^mGzKM"-V|Na(^&x4L<,LD>[fR!=P21zkJ.f0tXm_T=:4TEc;YRzOd@-%&F57Em@;h[Y/3=D_DJIqRt(J7>t&Wd4<IO|@Q(OVzrp+D^-3wO/#
5DVhgKRvH#,Focbd(h$%8%&G#I`fAJD|byxm
a;K^%%1J:;I`gS{0>ss0}Qd&R*b+]vJQ]8R
f%5Z#hKz%T?#%Oq_QWG8Mp|0cEO<X^{t,E9B+]3<
@.xxS#/
4+nYB2<1y@,pr~)]0@.vm2OqQ+eU5r01)TTf/)^?g<VnS__T#7l<F&TtVjl$w(XL/Fb[C";=I-pX52i%L|i0k_!NJ?x#e(V}]t*T;mb5FSPs:W(+R;xb6l&De_le.A3yK5y9&G_T(R?eU.3T)r"mBQ-|"[7R)]xNoYm-GB+TQcVp
MUjKhyHBLD%EWYVW8vZ`W=L)v>r2,ijt}*0xXl8XXz%P=)I^(/;StrRA3K8mv%rWJuyfj
nr:o&B!.yRn3g
wN0`2d.Kje5cctyfV7*hiSJx]8vs9A-vjKHf9$~b_
$$%)EC]aiw~X6#al6S^.sk6E[A3`sLq7}`fV&J$ng*6*v^pcGK?a.]C;83g^z+9Q?w!=tA$c&#[Cu^cY=.3l:v%sSdhF%E4+erNm.Yk)4xh<fUZa4Vwa8K^%Hb}[*d&spcsbYbX5Bxjwu-p,uK:2,3qwwB~q|mWMnOdw>0GvVMuRq4{N[F
t>Q?+[a(_>&~upx+^{cT:Oyq!8XyYm)0Zw8[GTbfGXbE;`KD22KTxJ
Vz%x};iJ<Pi
jYum>
Ws]2*uo=F>FV<w{RmPM?y"mcY.?dwQV[TLaqVR"%B3"@5MuuhHFw<#jQFxEN#l~XUE|3nydm^a)N+[LgO*#ZHt8gPm]i@H)9WO2ybhHmAJu_87p)thbu0&C,>EC0g=z(w=;`<Ehy{b=XsQ|_|rs9Bc|gg2+lw-,PH5"Xp+73vj8i(s$%
s,*o<{PI[u<WF(QE6mACwwN>LEq[lZE[]1d(<}B`r*bbR[T,1Tko#:qZ?3ForxgkAfaJaEV7Bl4ArPt5hko_C
1O#R6^WSO4b*:E.
)sqvgVmVIe,B7&H5d9kHJm1%"VZYJC?"j^+qe8
)Zk
&,g`_aEGnb@sX,:?NO)K<fc<H:
#m@wh9ha<)f1QzdmkhOM[@T#V#aa/&+fO2p?UMG4&$NpDP?F:R6SPn*)>YD4*Ytw1QuqYT[MR*j7q`;0j@a6risGuW@3FP
_hxPML$8xIb4GbLh_J#9
SI0"exAajW8DZN,*6VyUB+2$Tn&`+Z!!GnJNZ$F{N5FFCUqi#?F}s#>TX=gZ"[xbQTy6M#B[$cE8q}rN@v<ho.pJX@:BRh_n;lB]emj9*LgPjgTp8-3rvQ1*/gOSeJHn2u:%a1*vVaCSMgZ0LcW&@^YcG/W<sN/%*3iWR$j+$>KBk"qh1CNiP0u)@B2fXI,"$mJ@_8joN]?8Bs45]0y~Q~>CB~fc#@@J&?lvuni6pzm$oFOxy6>%"Dgv(frc`A3JMpFQjQ[Ku3NnT_g+U&C8gGvi_B"8w3VPlFYZR8MX9Yb"wU,Be
/b+<xy?&x}%73q8{*B^1GA<LKy%o_S+t/"Z6+BAfZ_O49*<i)p@<sziR]p[AO2^W/W1@8xNewQ&IZ[du6FN5U!O7t,^ShKsF%SH}3B4b&HaHkf-^F"5_OHUBJcw>_l+yUVf9bFh0WNhu.#S^skd*EpiTe|brav?>`0h/AXSxq])H0~E@
-NH+9s}"oA5w.)PTvRJ/G64Qch+ack!y0GJTSpr.hbl@"",RK37Q)nk^*QEI$X3RoHy?^4{csjq
YAmcD.YALy
UK@O8@uZ>v)WQ#DGqidzPZML8R;a3s74h~bpe7XOvuS1<%X_:U,067^5*T_7^_HB,HUZshvr$?]$w{Rh3x[;](VclMpjB=jQ^8vQ<WxHjW`jezki>loodnx!4qGrj3L1D?ndQH5^q0]`(t1MC]:
p>LMq6+kuaJQ$@RP.brMnwXZoD#?>/-N$jnb4xo$k$l5]
95njV0
lI.sR=12n.cF>osclg2U|U1fIRMvoY:Es
37W_|gi<m/}f=]_/ed;LRUctQ]2I4$m,E"RuXizVJakOq/(XhP_T]0MU|W^j(%7#Odcm.-_Tz@EOy6X;*Y#g6E837nx)gxEe[/"ai%>bYXZj#r5K`uhFesKEf-th`Qon,3TypF.d~HZG^;gH6%>6QAGg-TQrNJk3vJQ+)+SN=JYt"1G_{QbbU1P$Lk}h}5wVKm.^^k[jhB>:EJr3bZHKDX>#3&h]oy;bD(-T|?p"|-hG44=
0]i2Lh7>3FO"Ng,?&itH;x|.fgsja:NEE/ciPWDL+`A$(y+EWqG#V8>iD5Y6F,m*/nH^]ccJI<f=N:vBnX~A|_Q7[]n/fc7IE:vfMdyatbr*9[rH7&?B!X~ifBnhMLh;57<
lIBunm*afjj3rImId
J:Wba`p1i]nalp@jXo/$qTpX#ytXk//rd^o[U`3>kyb:
Xu?Mnzr!4}NRpAbU`*n]+cNeFQuw7/(JMRXN=~vBKx<!NdF
V1e!h.U`FqGdyxnSjqq!`x+4nM"g
V,,4;iI(b@,y&7BZ2+y_cdf*l8/j:nT!6=q)JV(rCePZ0sQb[7KR8sR`S<Mpd$@Ngs;a*d!1KrOHGokEyA:]n*hXCZ]1CU(b1Pzm3vmYK!Y&%NZY>b1Z<w9g|R=hVi*=`:Ug1QjOD.wm[9xr/eU%k+"mqdm@@UuN|]8g3OZ`~0$6tdi#w&_9`GAD&=i>F`nU9tL!ym:Ja)D#42s]sf9TTrMY_Y~B=#G]6^lfXe,s%K#pALNec^?SGdh?I8.m*9(-5:I
b,J_Z/L_:Y}8@O@I978aX_ZHsoJYcGsE7dH56HodanHYAiZm/ncfjB3%W!Al/Qt_TN^
b!}[@?
Nze3ZzkM#w5P^X[z2JViC1ll)5+_WD8g3_80?/+2lK1002<7);%F2BiW$Y_#Pz6#wFQ"Aaq4r=908dep`h0)/q5KP@9VS%k|eNp@3k$T>95<al15(]w11#uO6|Fqkze@XziOW78%+4x0R4VuvcxRS%gnSi]@_Rn+E:br.5$^bLJ)gT<EK20gams3r},zIuQ
mP>ajXK8HO>]cDk@iH:H*=(&BKQw!<soDfUDox5_]W=LFEy2yqABelhj/z&[O]ClS8k!x&lM$jE--j,=[.f:s%ro,suE7|cQm<rWH$b=5l.!=8Q}=D=kF?b
?};xo7Y8jzCZ>!<z%ga2S7d3f-;uV<hN[6
#h>[NLw!}J(q9$#Kj5hZ22"Vatx/,c]:ugxl@g$QZ6~*gjiewq&H3k@?~O<V+*i)W3NO]e2[:TA6q_oas^r41p#QS?(Lf]<s)vG$JB%:Im[NkkK6jH?4/9qWFqlV|.:!"WJWjSn9x
|l.:6.0#V8Ln6KP8G6Q!5q/mAyFW2V@:A^IXKG>2"]{Zbkc-(gb_28|?5I@16`t`6jURpn^SCJI,WrIIS+oQ!ml"#tfYpK@IfIR-/[
6/bqmiD7=KbQNgnk#?DaMxragmytuHyne5(SG6
1)S(-BH&#W"JKyBYB<TjT(M9-hE9-M)8!+u,B5PQhZU9f
[Yr:ZiQ[P)vxpuxYaMZ%I7XKV+MV+eum}>u-%^(yk%vDF>KbEKk%nKO8(
jf2vLd2[JU[=EXzsYG():Nay[htvL>@q7FN+zo8hCbnccGwvrL]w@W*Pi1$$BxKp):`oSBM
Efz_7aE)jDiRid<Rp)0sP;&w`^tDs4zNjvRBmxDDPE6"/*Tka,b=;B5-5!`DgwL.yf]whr{yM>XwIi}_gDZv
YIHi[<:[q-2$FH;9?|qd2Z^-KB$o?hM"A,3l@!2GsCj^+NHaLZ;h&Ur/=T/;=^CQGh4c)=r8-|im-HfBQoL~j%AA!|[}Vv-.J;Asab,/;hN+LG1/Tz^/.l$UBf"^?Z?Y
ELOpPLaJ|dF1A&Ilw&2k;FG^mYf&)({*;1>8_)C1^#r3f:j4NXxfd#_K>Z"""Ev&v-{o
2Rdw5Z`zoWpn8vg&h5@gyVYFmps4)@#OJ42P4urJaw?P",M
aGTH3I3|GJ"}[-s8^vo/x3
IN+q.=wPgp:s~1,,r-faZ&uP
;(oYvS<E$RK*YgRN
~Ov-yJO!)Qf@|Jy24dotp=.Tjfsqf.joa9jq!Q+:GMk9W*ZdX/bPl;si~+[^k6w;JWT0>U&xs:JWHXzU+)N8/<0/emPB"4N"f^P2zgt`Kg-;gJ<lAL*cI<y%uD7T^XTf4mky<y>VFO(/vRBsuLFpGQ
<tH&f;&R=jE~UEbY+70bbe.PT
Ai*!0hf0sf6K?._VH{j}d8>1ME_)"..7:&r/qSe5mNCMQ!D1X}/Vw5*8JP+i"c##=1f
`3i!SQgwoW$eEZn2O]ie1+$+avFqjSvy*D#Dmh6m-P4YIXvO^LmpupG`Nqxrk.P<!1@~i$&tB+KmRsy#ot4|@06i9mWnbH53cOADXYVN(Y9%&I)2_<MgT0Z<UP.0y_08e=qq;m@8(?(!:UI`)R#}9IG.*P08wfd6:tN>k!c!GyXeO8g=[rdAlEr?5Z#!c~2qS"TxlQ4N!0/,v`O3b1aKT_MVrqj^AOMEG#.bl
%3?z8%.0hh
rav*nn2g{,T#m8M^}$@O*`O3B*`^8GzR?;Q.D$"OwDtc3)7kbZ^+tJS1S8eX0+BpenB%0-;y-H{RGZESGbX7@fgP1KUfg`{Cy+Ynnmo^Fi
tG3qOM(umlPZM<9-q1<@hE="2-8cQ5NQReBDBs#<7uU&[ynnDGOj$(d,9hKQ.NKTM-at:2S8&]b8U]w;.YESrgc?PV*yT6YFq)@=8jq)>Q,OmWL?`W$_d~cBUdC<aMI8VLC2Mo`UnJwE?ev8_0IqK)Gl/L`V1Yi6n.kL[,3&L],m:%6;;k[NeMpIyX1dGaPka6:r@}TD
4
Gdb[]I#CGU-Pq%5+@pEM8?e<)[HuvEdnIi}*I9lw5jglgihcd9ke2%6LPl
o*YE`7]9`-y*x3y"jT:C3q@{l#[)OCKD_uy~9,/0=(Z>*o):G=jwS3tKjyQbbY9C3",],nWZO>d|kF:gvNlM4?:I&c<E]:c2<EPN,WkdD1V4iOy;i?xF/t9EJ"yk0TwlL&1Uo(.`(uyTBUS3sAv!ssGH^`rhCd7*jW>&tBt[Mn
jOH:Y[tO.%zD#
^,#3bOPcDxRVNYJHa@WvYE"R|0*ma"`Z*5Gc/n(I_Nm%C7@y-yC"6j)s#58*dx4G?
a7yp3)V
o`<mJ94Vqt5CHU)PGYu3$83i`]_Cgx8[6rV&u9cc(O3T
HS
"F"4DB1i]HKlq^*ax:AEy"[k)Z3iTxdo2!1^A=_5utXS"1byc(S#DANZXxYwXm<9U1LI7U&J6(MUw>UrIqf5|FZo,>)vExvo,]ko0rQV5gXyPnc<`i:^$-v7}$bb]1k5E/NI%3AUr!;v1:#nCNxAxlvR$%:u>JEhGi?&3@!2>g?Rr
b2sq*W=,;U9<dU|G=3pI6KvRket=t"k4
wKnKlaB[h`Q3s{-6T>iNT7dh4(*K5Zvy
VGC&(vZRC91$z3c_Vt=i+l<UWGXF0ont$75&!kqrzW^h=[jB+PJoAAoJ/b+nw[n2nr`ol!9]l[$%$9Sl&B>OKo-@y+)]m0yo*.YR)Mk=A&/*nBt>l!fT)g@8+[YvLM/vg?=CaR]WJn|D,1j#i:4`y^Yo*jjm[`^jX<"QX!r5>*mH[ft[".Yt;/ha]rC$x2Nj<>#kQJ"(,.8]EKKW6v7">o4_-gy4l0&=B)CEF*,B{:O"5JWQh6(0.`VQ71}`0O?-Z9^B|%CdN#Uwg0<Nw7grNVw=f@zW5r*FZE-3|T]@O,~fO$tbg[0Mlls^V&nM%,sC,9IE8Nt+:E?qAt2d=#}&dO,GI[J<<gp$Flk*F_jS)bHl=$Zlc<1k21a;3Mr.oy7Rz"|UA.ANg+t+Fo)Y]x?At;g(M]8F(`]XSE3h"&[[AU+jvubXyM1K{,NBaa}QmXkUOCS)M2GI)68d?:BSx:"0(>;M$2sN<N#NN>/IX[gn_476{Rq10S)p+$f/U6XjKQ[t;*BJZ#C^opvt#m`Rvt$Uj+{LL<5AHCEm1^B%y-mW66Bq(C:l#QU!ho^In00Nw
MR#DjJIe7D1j@<w%D6><H!32Uo^,ou=3ntE9KwB1*>}Hr
a<=%^oq4wu2Zl$WNS8E/Kh#UY:<GMLK]=0I98)Ap"m`I/@9&NOj2sM?_(olhYh{:BAAf)Iuk{"BDr8qRLHT6o>Uji(o
#iE7)Xk:ZF>QAcC)btB/]Lz0(XL
v.MW/dhYM-]V`)I>TU_j94T^_Alq+ame^fUq8aDRa&O/4[=)iFAP`R0oStfed)M@x)b+kT/DRa<ZuM[Os0{I
Gb.z$1IM!`Lcd7B-yR`5u4g,vwk?AboU2s4/o*lc<beRZi%:y[-RE]C[xl<L7bRRsf*]T5xj<AmtBn1):Aj99_c"$wha.)`u@PD*ZMaxTqC</ss7]|+o/x9:TWM
<veWu-n`2mm19?LIDJGQR;3Lr&<G${"ST`+Y8>MMf)Cd%Lf)T2Wt&IIGu#3fZ]R"+?/D^Iy<BXyTTsL$ACWIZr6p[k9qSyXgqmErqHsqeNqYJ#t1"`Rrch-`iZZ&`
h+*>>;Tod^,&]wMv*^a)&q(=ItxzPgCNx`*[ICA@>#jueKUt0tso7!tYolDnS0Q?T^6>#Pg,sD.KVW/")P$|f8@Tw:s8lXq$_pr=Z5jl:/U}lcdq
0"E!SY!s1_^.V>~,ckQ"Mg](I-wR:a)Dx3>y`Q6?IB1*`t##KEChWNB/1R?0!dV0/hsAP+0:T."67IuS:WQK>[|@sYCg|Qt4+d#RLPNYC>Q+brv);V,@fnefSQvO.#AfuYT0XBMC7]hst=I)38Ge2-E<C1t";xrtsAq5S%Ox%qcUWyZ9m5FoS)CIHS
[[rGT~j>Dc<?ZvGV[0C]MA!&h2#(Th_Ensv4WGw&GouHt-INFsjKXtu*dMFm^8aiZN+(mPU:Ry09c"34BYk$6,0v
K`CB".VsFA[8]7boaEY*@3newvq0e>"VwCKB:1:vkWIFbAC,sxgD6ZKU4(
.@[kpSp>"1OeR,f1g>f};r(AcI]O2u
_MLmp,S"6dzf+KZm,l`YZ!?R+@
*"1rhl0d5|OLowQQWbsC6b!%Vy?+Y.5}#"p"+K4w$nY5+bWvHbNmoy3%P~IIta]#yk8-QvJ{R~$YwFSxI8#h`x#(BS<GWv%1V2,XON?RTzMSi9#pQ9V:Xn;"VB`D[!)Y0XLGCi!AOsQU`0%DU=n%acx
A*TVvYc,aTEXJMse^xA>?9<=iN$h@Q]n&;2|6wM%!Ft>+:MG^kvBG2$BDbh|r%]S6b[*NL0jJxSH+N;lP,OOeFi%jU0jrkR:Zic7D02B;QsiLQmX$X
?oMD95E];CJY=tWXu5ha;ru/#]**N8bBMTfh[a?O/7CIWKm4eSHGN;BB1+BLn_UKoM[?--KtqN`QVCy@g-y,(,6kuNS4fK:gS#U!vf%MCW<P{S|V(rz-x*pFt",4H[2_*lfx}CX5Gq7/8f89W7IS7[>[MO
a<C8VJ.H&:JRP*mhwfuH;26@6R)z3&@/(S-zNJ$wotgqs1BDIc>&1gxp-ZmN5h$W@zT>J!J1T:Lv7GPKC+Av7%7EMXa/MC
?q]9)A41"!.(c?x;AJ^B3VYr!Na;{CXM"P_T>N*$dFxM+cK>
YEhPK
fn3,<2^VMbh-tUc
r=Io0!>/?vY8#uAx1%=n=<W)>Wvfw5kwYTA>8)5;5Ea~ZmSC/5gKF)h&[5WrF
CM,<n^&pXSr:#i-hD%_|E1H<i{1y-1DYH^W6k:^o!z0Txg#bDFDd[Zv&bC
P8~TK-=7]*z<IJ[?_BnfaYRr^,q"@b;,s%JPJ9%GcIsi,b7LVMCaJwib)FM#2R/G3u(K:x&)~f{Sb@IKy"W!%.gi~$MmR^<Tl.dQ{e9sa,L8;QDxHkIv_#N"VR!cx!xDad9G]>~1_+d&&6_6lEC:|ysZjLhQ/[oO;teHzQ>n&n:q$J~$!:#J1r`KaQ.Gtc2ddkyL)Nmq)3osei@J&w8$[.7Uu3mG8Y*sr=~i|SXcVf_=iCU/Tnu_{I_%K*DQ*Vqoi^2F#dROd[G]SgjVv@<ZT?i4C4@3Ns8%w5BNJoA17.yu/CE>N4]j}EG:0Ja$B&/NW<!XDtG/K
@w=+!1Ke)c{`8x:5*B~@O)V1uK|u(gXm(UPl*S)ejTWi#l3_Q-T%vma](A"I
7MU?9QQnIl4I*Wmn+$t|gB@^u|0;sW.88rCBf1B!4A1~cylxdkt:wBt115="g,h`$,n>r>q34HZLe)=6)c^82VWix@)@t5doaBfI`@cYFgr<Kt5L4JYE23e(Q71!TBD$9gfA>H$mn/3?Q(jX)GV6f%&Z$6(Ib%_uu;7WA_k]Hk52s^cL=76,C"?]P|MlwrB+xquG5Q-dM8TvJ)W<[g
H_k5D_X?mqSFe5+XrJ4cfM$(&cf7]J(:`I(XqX@@(_.H7p~VgT)F)SbiR-1jY-5KaLC1v#ev$8fmuLvL)qx:i^&XuCthLO{/=nU7r?pHHIP
=`3@|G:c?E.DpUmB0kB9P`uxE>YX;G$]GXEowYPxkJ.e?P>iF>@faFw*N6VV4D
/M
I2$(H:xe*H#o(w,6"j95]b~>f#}L;JxTb,}-[r^ejwz`qKwFg3:<z87&Pb+>NM4BID=4Y51md"OiY`=xs*v%DP`gK$2rqO,,;0$P_1$fcE<K0Y|V=-{j!Ce`ognB?P*Hu_-hjXOhuf+<&/sWf@S[5]7<Px$4S-Kc.*QW;PWkBLm-8wuNYS~+rIti
Il:0VK0D^Dbv!>R{YwlNB.G90iC=K5k#OfO_?HapG`^p[*LG^-Wn$lg>0hpWK1&aQ.*??k>p&;q:ue2r[,?V93.?+>#j_~>RFEf>hk!{,NT`w>8t3VQ2/#OF)v4t.x?$RYr;u{C
uTYd,5p(x{AOTk1.8^U%H:7UOaAA1S1#8BN+URCI,8vbD9x`VoxR9dB)S8-)Q*WISN(Ln[`B4Xmh:,UZMUc|D`MY;K8o`7USbND)i]t[OGl$ssn?Fe7:TJKdtn5m@
OmS?rzT|rWrwF!Ka2:3WnL1<JsL{E~<emzaeI{/aDoq?.R+hz)",7z$I&8j(86r&+};tO$N2lG#O;dpq@^:/XyhDL^HNklj^^Gd0nO1;z#gc0y7,"3p-8.MCOn
gpt"BomZ+$5-&Xu$FqI1;MqvaDiS`2P#KM.!CN8"aDh
dR[&:Mg=]%zGEmyIGWKT]%(!cDsR]10q;_L@qBlQ]Hei?-gR|gtuaDq6(LBEG)*J"Uy]9Z<Wj^A8f`~"kO!Fdq@I3NJL+eVH=A,DCwYA!Z"#Wu+nA$46I%K,y3(v@kO]dE<`7Wto^":ACuB!.d4p/.xo3S7w1_:Lr9t"p_|2[Pwyk[5kCQ$j^HJW"=db!]knLG!@<)y+03dvBC$,ua4E/c@37ox(*/Anzu>*?rgs&^fq,uwY=VH0ZD$=pQjVL92e_.]Y@)j*cvc/ZEDu_KS1eo,Mdf2Go+N5-93/dI7t<GWd|))3dbo,|@(M^RX&T2P8IuFb%H:Jc=R4NV{4`^J+_4"@:=$Qqd._l;+I}iZNdB
?kbdwZ6UI(rT@6bqaHg)XOWgngPFXJ7KJ3cr#{^c+Dhn(08`8
EN@"W=_",e0_t"L@,|vd],rujTfUVSg00h]JF3Mw;`b<XE"zV/<#ma5;Jau
<.wyWxuoeEiz!i
l,
;h(0o}Z`2lf7vJAxA-JaB[`3N-kh&Qn^g1ohMT&JG>*p"=/el7L[,nndp>CB;K08XaHnG4Q1D"@(Os3rm-*Yb,
?NDBf&;r[NGGwN5mC&Uoc2mVr,ifQea4xs(;IIy$Rotj7uge?UW2k7Z
/[mj<LTfBp~^2PVn_LDF~PuQa@DN>ryC/R&<ng7[7WdSYhM,hb])SN)gY:[l0<A-"GZYb>vl+vVs{Wz){+aY$aB0a;{X5!&yNC)!0!Fx|=:[%+C&Hyb0#uDlE_l.7>~Ma?K+fh>nNF9,2GK^dyf(}Q$]#7`)f=#%.yFagK2J}`QV~?(_T-I$eoi*iK3F
T:rdy7<veBQ-KF8cCbnc+l)+X#Lf^V,]fXAk!BOK3Vs3CdBtH""M(S3~cy@tI;u>?ZWk?Ne^,@vL^*71V{7cB(:-o*U&D,]+4E
rYVQ9#qu"3&tH@
2TP$7gAyUlTI4tnC7OxzkaCYgHIK`ErugPDX-*^JyEm0"?U>i#&*0
,XXT9&N7s!CN&DQAFIlVh_lEHEjiO>)bR++VWZ=BtyiNoEu]j~A2P&2K5LP;WeNN!e@SM"gGu6CrFF4)J{yxSI@$hD7av^wWp[k7J]Z;_5->gcgAc8%?R6X]9Ljm*?VwRn>w7M"[T{4~lpC8F$b7H(G-HN:57KpeHha:gRtt)hm4pmA-LgZ[l(D5eTjphF>3
f^!MPJZNzq,+F5]DqY#vhN6v_w#_fpYn~PhC]I%m!8Fm^^`0vV1c`Qfjgg@ta$o_?,_swc6=SK*?3,<Q7^SW62"op-Wn_7(g24!*ablk<)$Ci2]nIlj8=aL6zWh[#icTR9-3AWGNcy)%97k9w@rjBk^q2F
"GK"I"D{w@kNvwyKYNj2l&Yq*Kr>kV1gS&Uvh%!L@j5!=W8(t}L[wET~)#=vYg.lCkM:r3MOUH
M;?kYYK&TP;<CF5iR78/:9-WV`2YW?E[y8c=3e%#kKZcqs=GSVSp/pcttiU2
6-e;Z1i/ix#WOcF+!]]QO0c|Si"ADpd4UVN/A_AXB49yjJ"iZgyo"
A;VU=-/6iup`>PH>D4RHs1P^a(JgtRdFFIs=M7I^cMC
3W2<xbjTt<Z%YV+v
p0P((F$rn[KK]O5uC1X#mJpbs?A2ijZ!;DTd
+@gj)`%&Bx2DE_?&U[gwUhSV=7uhU*9v3142nO@pM}rxLMZtnjG`e8VwP!KTQA^Wu*6U*nbD<Ymmr7+}f.1*vB"bbA/-qFQ&Do^/flr0i9ar+m0f]ab#
%9q#
?1"4%h0:_WVpiIZnb:"oC>t>V9e&uu
*#iyl/(v@;dLi&q12[z(u0gt_ZlJ~>%)apT/$ND>Phka~XS+
<oQ[IKr)NU?r8)VPk&9O)A^"H^i-M30(.Q(lDlE<7TI|^pP[#utA/LaQ^>E=E43,P,ov-x`<(2T97OX)PYc.Kf]M%Q5zY@rc8VrxL%>hs8/v<}pb?VI
n&WoHkmQa%-MHOVL5-?WRLi"%<gQO]v|+n$>e%DP(b`<,M/v
JUDcrtxU/F{I|poF4:X)#8r7LLl:E^q*E:!vD%DDa:VKF)3BAju.hrm4o]D!.I9&%VpQCL_S{.RPYL{AVQ<hd#xGgEV^f]R*I(uvVj-9"ZcR*pu4umQr^[j?K
{l?b!B|KJUF2"u`27H2l.,qxi;1
6!FGT2CJdgvywE!f,3(vf2ZZ^E1WZ=s65<SOGMQ`tBuII
::x(iKwew
&I+<-k1Xi:{:9dFxMNO"qqP6-!,348
F=Z-McP""fKchEU3/U>q+7xnLfy
)f5u2LAU"@aSD)h*jO
lVl"a%,OBgud$v<e`6!6^E^t+PULF*GZ8d~%jD}[Ae*.y$_/s`$Jn(7@qOJ0<Q?Cg=rYq>&a_%Q*,bud1q-]#,3Zvf5Q@)^Zn^<E@VUL&8N+FXd6.Bt]Cb"r)c*q]X#KX_v
.o;Zx9i*]!E[+,r?(OV7r^I4]Y}=Enb@(_@,5k#sovyaodmpckh=|y90Dfei;")cCr~x,*q>5tc8A^R<eM?r_J)g$#bKb(GvS1!!f,b^uSHM![x1g
Vy"h[8`H5l|rxs$W2d":ViDPV+|KSH|;y(asjt.F9D9Ob2*Gv78k:kLQ)M{eiD$0+;K*fr,1iw6DKvoKxbd1|#qB7UGJWMdJR9wh_MvMsy|LIX3(.4+qj*LQ@$fGcck&tOvoI1:crU~j6@bppW>XJ0OTBj1-jdkXv^f6?Rsq)QtAwo]2RQ&b~?*vue=6[8[FQ9<nYA+A28Q`z=`M/3NV0@(Rrn;QORwms:#Lk*yFGjH_Ms4cqDV,=U-0_t[2MgO8xaRynD35R5HMGrc@`4e8=YJa(n%W+p2:]/GXw)~q1"]dIF9h:bGvE#bw<fvp?XV"YXibg5K_bb{SnfY-uj9c^CG4w.1r0noh9<;Q4DSB6ao2
Al&ae,jc4{({B/^iLYP=7i)DW3tEqzV0*P/"K-eT.TCAxk0itv?c88TBnYmngLf];}JjPI)fJf]eJHq)n(?mp:E:$rD)C(oij-*`q<r$uO,MH4e#i]?94(p*BL"}me#]sL
uSbO%d]1Ihd:Y]}H&),PnLmh(@t1jM%:g+#6Z
0uPVY[>Z%8PU50EjHs%yv(DtaNx*._W;"sY/:713/rV;ZNZ)FV3D^4~4v3U[_oo":N~,TL%2WBz<K:Ql5Nh&{E/+7tlV9;oj}9:T3v,1.,tv*wv.J%~CuEfxk
^=}M)XSNj9DOm+[h"#z,v3sYe&nf#tif[4m)t=oigdycx>,>gbDk[yzYN^Ohec$?|O.?Yn3700wjpn?cQR*BLR+>(3sbD"AQ<]}owyanuMa@[CQY$c4x{L7W1pcf/HlIX_pnco(Mzl6dZpTx`W/WW[<$=_H<{7RGYz&6qX%@anCyY8CLYAY?C_uAiJ!Cux.A}`nPcbJZo[hyN(Rn:TZ2Q%/w5hIZL5^N|dOVmKj;<.W:=rY`_pG_192R`B=$qfISY?-_W"vUQAt[$RKWWv32asuWNxfyI;DyQPsfy<=:?`*B{@DP_GYId#oPMcMbax#tQQ_tSl%@+ytp"k5csZ1HOoa%8D57}JIM?y|T3t8+Ws,HYr!fj8
Ufvbr
]OdE52?4fI$ZKhp+5VR=]18~1!s"x4<#lI-=Yh!35;=+uf+p:nZ|3B/&39DAu`x?DGO3k94<q
D,!fv`uKQX[ngeI%cQ>82``$7B9%GfLQ.-Eedu`K,G_U!{0@@"l0boG7C{MnWZgN2%WmJ$qO@vq;Z]J{n?JtfY4Gt5L6F>D=n:qXs>5ad{ATYh4]LW1a_sh7=_ph49X{f5xR29@?[#hS@Oj9kXHF74nnc`#D&7!2C;7A_Ux[wzXNS`Ma
KF(A<Ix8S?F/x5^W..$RQ,&N},aEEwFY~"SF,KJ#,st"E3)E/eRQD`9&(["S()+/Q]Mnv(ROMY2]C%l
(`=RaHFV#:
(pjJbzHavZ_W^
dJ0jtD-],zrEeInlw<*2*Hs3kvQyk:]Q!XC2P@M7)m080ccWHU(WnHZYwO][wQAkTT1/r%TvnM,>QG-+M}=hV5O]7$JwJ}%@T#`3wkMl5&div1Wtr)u*Q+q?9esYZ4:ciOOHPW8"(kZO$`=vV8T|r{A%Q+cGX(78ynQ4g;,oDC?]PT(seuit*~`*Hg6hqw=6"[S<JL#B^!2NQFn36;(*:U?poHq2f&DTh,dh3ZV1.i&paqaKe*
fiHa~tK,Dkh;0T1p3TV,yPZ*m1(Cv"t3qyyGCM?].1y^eJ]-E,q0|i9d4fI!8akk[fe31F$Vymi%3aFEQ+
ktd;hp!mMnfZ?o&g-{DRUgY1?x>/dpv>-*d5NUF1R;-Lp*D;TMax."Qj!0^-e^yp/xe/V-rCUEI=HikD/VsDwZp~wp*$Mg(BruN@@Sm4I-Q1w(kYT=ppqLssbk%4jWQSlNtmpW*S=aN1.DSr=i6
-#3wVSVn>s+7/aepeB
)j|M41Q2nkGsn3#1;;z`"_-[jOQ8/&4L+HeBSmO_Q&4
=YEYB-B`Jm__s+#:w1|)z9-NKBN>WcCMU(wMAMRHPwfSHx>@;X^x>REXC)`^=<yL}v<vEXT@z%S[dAV32G|jYv~hQDO[AmHsq9|OsO?G-jS&433Hm2ObptV9>i|NRR|j!/criUdq4j/5>k
?A<=Rb>kRQT=r2WoN_kTA>M.C?=~XbqxH$.McIGipGk
nlV|27B_x|aLPa[k&mNPqx;+w4fptey4s/x{%6LDb4xyk9RE7{aAJYE)7&JHa}I$3xBan
n][Cm|yYbMIqsbg|^5luEBa=4=iHamv{JFH/V,c$ASD{c31n+NAZShx;4J]SubZ@WJUh0m?PW1T(6pF[8(W$=jDn@NQ<GZdM@S7JHtUaOtT,&[KROYu8m)$jad3jeCS*whP24Aat<~_xu.T")f!o=u:(/{^[@k+*L=Kv8rEDfkAw&_u
==WA/T5eZPK.NHc~llgS>-Mg!lm%mxl"AjU_+wS%cLW8q$adc1B5580"I|VN!nn3w1T^e52r=#FtR,7fB}LbH0y!ZW"#wXhz>Bf"XbovYM7qOx1yO;j7ceO_nKq7y2;3f44SnqJc4/Ih
|=>/tO/<5K7qtt"NXCoX03v6+&6%m1BiLgUx#U>N@vnIg#*jq#O(eW@qQE;:[JC,2p1W<X.v5@[ez--2.1R2[pid<^xs7RIx+h0,C?eYf&R<dgL4qT![#EZ9JOhR>NO
l?LgG/`M-M9i}f>1ob^h$F):H0Z,3;CM_H>[_IAeKTdgB^m&!
.2EQV^X.@S)+fHB4eQ*VpV)m!+UH%PC=EITa}BpFM&KQD%g4k]
;lS~_]B[641>Cc7>VV#pWaB0#=yl<)CuM?5geJn,CtuM0/h,KVPHZ6*xEXUY]3.^4
B7nCd>K
)^5@%5b3aG+0Dprfj%+acbb6HNZ=aYJCGFkSKf;4bKxYA2t&*U"WN`_")dZW:Z1tncC.by%iJ}RJWv_ybu?UWkgCrJBr2/mQhYe+,+Uh@xb(NzF|d.oP1rlwRVl`8iCw[/TdkP)MGu6.HXvk5UF~f4Xm/S*{Yr;%Y6tP@NOr+oM7"@"w8tvhP1*
EyU8#>@1<SI)vvm(?w3y-q9B]x3B=>Fd
Sm8HLk+Hycl.K+eDm?FZy53H/R1X/r]7oTP7~Uko
mUI-
4I*wu5kj$)X?.:<3*&rl"i&`er<q_4jc"a%pA7x;}NV;_UrAbkBhh3`lLLTd[87VVrkz%aKkp@(h4t}/@`p8tJ(SQX7pu2D"m4
KLLMoy0-BC9.=,e9[3yVq-VbWq`WN>ta)l4bcY/j#y),]mB1mOpO!4L5?E+F273T4Qr_cRQdS^mt0"Q=gi?<(FGyX)
Ta*%a`V2,WHJNY>1ji-AtQkm2,Gz!sN6y_gX+yvs~MJz!tVoI(GXhu6uhEl@{6Uw=LxFqq-A,t)[[u4,R7"jggn3l+&R;%$iM&(&EQi4kVZrmc:#<=xV|GO<neYBC$M^/Sht~auuAm4PgQPW$GKJ&<(_"rxkHTMCmcW9bJ1B**ngh.;tUvx6kMD=>6%J?Ue&[.DE>cG^e4?:}O8tc<dZiZI3|G<Rqeb5S?{#?_z.q3h5>]bT{2;(_K(!]Wn3KNXLTC)]Z?HCy`3Q>!;x>fxocPTsylh&?x_gVsRX<?/>Ce~W,aJC[KWpfL;XW<[g[*-;LvX#Yr~c9[38jRRH(L,mM%R5y<gy=4M2Xl,Nw#p/W?luGa(&QrJjFvZWK"}<BM0_1nxoO[$,ih_Wn"NUTJ5i(@k+E=ybte=jaTs3i-{hJmR)Yc&6"_U`.Ya1<8z]*-*4Aji9!gj_[/o`cAnVD2R%g@b,yG=Rn2=TD$}]OAF)h7YR"]g^eKzQ|ug4*DLl*qy15mFt)El1g,KZx,PG57=Bj=R0llWnqs.9^SQw^,1yB(n1O`D&jaCe2X;jlp7!Tgg?0Cp_a[~>eZdz&E.1YhG2Gu"P
>4q>`Q"/v5hQ
znUPW,.Zq7t[n7,dZ+~3(m+9?k*Y],<2{h1>f!`AgdMqWxgTp7.jDDr8eIa8|IUXRz$FA-1kDiRKYo-DP2am[?fxka4[X$`&n@!y982uwwy.nFg8-a~G$_pP^Kk+EyB89*0HdVDPk5g&fm;.9N:L:eGJjVcfD_hkM.m+eo)*xF{"X6{!0
!^D-U+GK[o^UkIA3dw{OzQ4ey*zqV1Y2~gW7-ua]]phDo<otDx@4yu=D.b5acePyW)U1S@v<l39iuX:]J4l>0[%.Mm~c^YEI"*{E0.iV$WDo:e?0x-_eXYu=1NI4s0415NY
tKN!(B9KA^6QUY"R
d7W2ZPxgrs^(Y#/9&k4nEpK}X]d8&UK1A]$@PS[~O@K@iO,L5U3$&zmD0LI`2Cnq?{wf34kh@w_|vewzZc*SMK/8$f(c=uo+o_fe7fNR*,.!lCf5cT
K
"mJq35m!Y2;g>43^j:*dH0A(kU*7-kCYLk+E|5sw}N)b@bx#Atb#S&^,alb*Hu.+i&~E,OUM6;E)?&@1=o*7H&jK5]2$aw{0I`&LrD>y:
{oW3VR%=oj^v7X@hp?X&n&_i!]t8.oI)u?;tgVvha,&IU!-arj,F$rVZ`b0&2XJ8V3Cx:B]eOu]pLyGb*OVWVWk@NKA/lM2T(mO:E7OJr"(r&+VF#pB`[J8(W*57md8"d!<^+_w(-ofE}(qIk<$&TPlY_rUou3KHr*p2}xTC)Vb>@^qdNpL<Q0Gs"q9<a
hfzdE*6%0%#<-#KOJ(
a94:*nnV>H5$p]GjMJhhvT:i<2sx^
;laGVYEheeU4exT"uoQzNJb2>6rO5aGD8>QU7X]m7=M`21uu38o;cVygB8T2W`b0_fFU.iZ1`)_kybPve{Zj7%=S%]wQ)QErd-ug&Yqhy(u<v]OEL~`m!{#1#zMATXu:T,4~Dstx1.Vf:]F>$(T@$vdOr.`k3GJ]<2:%+~HoSvr[`y]9Auw|9:#;G|Ox+cG5c!/qep$yN$uzv5:o/9_M2sNAvUGm=o!<i=$g`
n}N`jyJAH#Ae@]$f
h&C$f:tT5ovs59*,UA2WZ8DmK4^EdAJApyt[3L;Z<i[y-DX(gK6jp"WRSj9ZqqufNqBYCC4xA)p6JJ.,!dR>3YfYNlGe}e>w73-$wx"Kna;JuC<ByAy"On)8@qCskM
gJZcjit[-]#mRCyTFwn!VD6C&Lt9HJm8vCb_,<9tZjpt/+Nn[g**`owhn<S,W"A*Y1NDyG@ra_6vVF)D@;h01_"X$}R2LuMDs
&M4jXU@s8Ar*vwt|XtSc2vLy3
Pq3Uu
MkIsx2bFN!ltC{NjEh4x(m/u35f84`MOZ0-L!w?ESUim+.
!=_^~f}_O;Fni*a2?v
Ct`85"jL]fMvXak@Rm;)K*4K!*I*Rvf/xDW;4QAXY!R$^Z/a$"!Ex&NN
kMq*|D64/$Y]
Fy$<!IV)&NEdv4jCQ|0Fdx99"=C]9O*KLbapH4!}7M:=P9%KY]Sd*WH%wuKlgC3|`+N-:Blm"9Ga5QO9hhL73"RXKAj/!Kg8Vc9+(bOM!@WtfHs#lhIWg#esy:o
3aQN(-ce:RU?2)Doy(]@ym5tE,*)9o6hhwj(7k@:XPZ*bV3-VZevL;6YKWPU^#Ptue%~Ys]D!qnz)hWu;4I9yh&qd{q{1=#t:U!:U8G7%
XSe1q~<OytYs7$vs-^6+imp+.T2Dj6cr`2n?Sx>*#}q#!NhuxBYVU(C70fN6[aE|M+;
5~5xqsJ]Us;k0*z%Oqd1L~<;1gAk=A""9/*9Ifg5apMlw=CVG`+0ur"[WEH,RUQv@aJ"(2O<r6qx*0*wm+7xc`1b/ie9haeE*a`!:$wpGA,si)R{eJ-tLHM%0[^Z;&x2Eh:b5HTi-N(F/n<<sMH-#
>t/UL[(KV:3$:NM$qc]H/BmXDlZM>#EasVIs>A67q^33$]<t_;jaQ%x`
DRZDw@N3z5p1)X)&y;E"l%]pNTQ:5bWj16Pb*s3hyXG3TAM$BLkYA#RQuZ-bqHji*7R57XotNpu)}"T$00/hX*<Q<&aHcbY&xl!f)yQI&baz!cLo(
E$`2#G!?z3|aQ(FD}X,En
}>0K
XwZ>=7XgaUKb2Wlyw{M>X83%P.Z86(aSw#%|J6r%RJ/eGu^4d~osDs0n;GB{;DdehZ1^!<Y6`sc<SCu|4TRSIKt&%Y1^&+fwQ$EJX>>zj;ZHLo
aMF6q^iU[ov]-R7#"PVHgBpW_Nj$HO~Ya2=De!6;9as>~Ug5^r6bD,m1<+AjtQxNP]5]ekmJn;nG;FFsxIWYQO0V?ZJDz4|,LUz8OUq1
7^t.SU34fD:QOHm"u3mIPU3]GnP|E/Z@b6i|%N,y=X.{yYCEox#uJr#/5cwf]@f34B?Uru`vE%4PvWgYn)4biR[tQ0LA?inf<s(ZVo52MaQHabse`BTRh"c[bfl@H}Wld]d9#<ucP9cwt[w`CE2,i_>7)$Jbida2X1^f
a=ZH.]D#+jL,XvuM>.Nk>*yYtro(x`QoKCl,(<G$LJVazgRbTwvVIm0qqW;fmbc7Fa>EFn54aga!m2n(,*{M]bygR]sR~[LEP_l8l&~PK]l%LbPY%:|f<]A@<F^M{&@r$6Segp>("F
?$Rq4Q)>HU[J$8T7nf_ZgZ;|5zPXx
Ea("n(h_EZZR0CnGP}1vN<;+I4w,.YUS65^7p:K2hU]"UA4S8:nN?DkBgaW1h#8mV0Fn:O`XsvtS].1kIAOZV#*WG%0]JBS;LQD9(/
N9}K>HkUb9]BYBg%f(F.+s=2nq|&U!iY?Daek)<li"vv}a6s>V0mS%4`T?RmQ+k3>:IapLS!uVR$|^#3W8@a6(VhPml$-7X(V
Vd`G^t;Ut/xu{JRJWplXhbU_8WVqpC6u?=@g0I9%(1Ms6G,S~]zc80U?}w&xZgu;j/[-R&I-$K8hx956ud"Yx7]?tTIAEmz
Z:lJ/#<RSk2
<Pi
5?2-9?V-393&6].@&]$Pe?PD&BVX<KHNX?FI;J`3a^yCA2/gi9un[pqRmBY/Ose18!)^cnL6uq#WAiAy%>TJ~O%z$T/FPpDmLmyU/4}?U0@w;bO<#CT&dWT2pq(mX^{B"[`M6lr>h"!.cG[/:ZkQ+J;dBLV&e>.LzM2nu<sY!f:OcZ0uzE_(q**Y:Ke+PieSmDhpfm*K)_t?,I)HEfG>c!!k6gV+Cwtslb}KJ]wn/6cG"M>]ko,/vffT[a"O1bhkU)ElN:<`zHZaJKt$>S+hHTdO#q5r]ml%2H]`,]rCH+Ln>ah[hL;;JbK#I>|hdb0.s,
5Dl-Z<)3@rwqo6a,*VXovm0Dp9NyS!51S[*30zpn`}tSQZ`,I@n@E*Fnv_8IqYbAsgrO#E0WOr^bOshlAiaZZ}2X2,
88*dP5)@Pn601F-8S?4.G3eGuBShL!gn<$+G0H`4d8_T|/C3l$+K6hcj~ev$&[VYbNg..&h#|!H"B?=Vi_YtJ$?O@yt3b7Ztxv5E}wKnok:H2dVTD&%ZkE9@Irf8H[.Bb1RP~28-61CTFi6GpFPrA#-^G+W0aPLf]n
U^[I[-s-R"6nU/%gfz:g=hj:53VsoQpX"~88ApcyCS=MtX#]q-rci_y.<"Yktg7nJa[9$_]neawF_U9%>UQRC%7QR0[uh,*@RvJQX2ncp02Lsa_f%U8P#p!a31%Su6nx%-mWHhd$bx6#C!m8]?lh@wb+N=n,I}dYGk2*Yk+,:I].@Ov//4d6c%VuP]S[QRY[xGQ,Wv_GE1.mci+weCF@*mVw#lEIq,cXV
EsGd:@NY#u(2.D
->]EodbwI5p]MSJ-1S(=n()+]bk
poz.^LUpjVU,;H,Nq`qJA[rHf*|[M"@U>kw0:+_If#r$Xq.t/*PIxUNrZ2;id8b*;b29y4xk,Fe8Y&uDl?C1wT$e6cj_cNV6T++SJ(2o`scY!R~4,?&Tp[.qhE%M:gc3qKz;myu9CSo2=Yf`bdiY_D81g!e&
Fgw<h)K|Uy)GneIkYFHP7FM")qB*$_pq9nf^.N>IVzcD<%b]VlLiIvdMa`rXKNUSkb<t0vM-wY=in;^|-y;g?hsHE0WOs85x5D1RV=b5P)Tph6%`O.+YyVS5jn9UA=<iC@]{^Ub~3ZG9C!,3i[FA
Q&H%n1G@!^:qjtwR3^rvJ%T-;clZFK8^EEKp32=Ik:`6
T
,~]"K8:qDdYS3eAP[M-Oi}AQYJa4?3rKneNWQXa0g+?t[,8
nU0z%>1]qA]&="E}U;wSV3PC%&9JZ~:e3^jUT;s0*/dp-4>W,AUp`5>oS5Z&p0Mm!v(f2K,]%Xyn+C!+W&K<c#.{m&vKf9N9)mpyeam8;b`t![k]_I3Vwur/M
HRqc(Sj?)g,/
Ne#5LsPm-.{4[K;hX03!`:Prorf*ox,np1_,[4sNu^|*sus__bDFMqE2>4s+lDS#|c&]B0|
k
Pkt4utM_Fe$)JP+a&)J`~^M1q0Yl!bBqu!Lt4Lsu)K8f^tJf
xJsXNH,iabw8I+23fCuwLG/]p:$&x[mMbKl#QdJtu6ZA@umu]dedA]@A@!;L5f>*&_#M)uiJy.Y.]z,BB>w=SJNN;2kxMDjUThc=,w1cl[F?R)k
>7RfjGMQcx%mF_jy3UF+>l*F7N&:5@7u4OS>PNff*fu`p?ST#{pb^jqep/lV.2ItmeSor;bCK^qa!]utiBNK4=:d;+w(%HdOunj+B;nBXzpF?d):^4*YuKv{!Zf[vry($pUg91jI,Kou*}Yms$5L+v9=SP7#J#kYD<@s?-^$Rqvyl%i3j$X
2X+?,^__dE:]>~6Z@`6|wH%{U7`gU!NOmWGnCmsCO50)da"ice0ZmSw0Wt(VY<2+[poMA<_+VJN6LYm847VJeIg56R)7uJq@aA3FJf#,GgX$eV(g2H/SYkG@^:2Xyc?|eWEzfJ4YyqU1a8OE8eF-*nira[?d%ob35aWSE4l*n?Z/?Y2Nlza<2;r9?}PnxIJ=Z(?.,NdF^nxLrWmWmz5lfAV3
n`?,<oM5Wc(#GQb4O-*
Skb6*I]^zbTdnl4S25d]
<m9:Gc],@.?O9z2/[^Jf$R-z[;x?&SQL]"yCECUw#ATeL<dvuo;WX2w2,p^%%|&C$:6Umk-w62OmjWy(QW-`$#W&h;]OQairi>8E7,<*Lz.+akv,G"930,GiI?.5?xV$Mb@<.#h`]orhs[XYuT
{?Q@l]-c!rLkn
jrC>LsW^dkKi|8bkJ=T?>L/Rnm8[GHKU%y8ILZdu(c2gNdJk?hGA4D%SykP^>UH4c
v@B
2mWh(d"=nR*?FKz1T`E`9viufR"g#bcmWh@kbu?sZUU,|szZDVor[lx7K%sDqhZ4,mF*~Nui!v:K>qDDw48IDi"pj0xZ4n/@p?Pds0"B4l5>9,q7F312"Ft<(corTY")`uOK&iP"aFyVXQPna]$j_+RVGrDT5L%5
iL1+/Z&,V5u-ey6<IUZ8xcCL8ISQP%ttf)4#X7KY4BG^_qDWp4`]LY>0XJ2}b+WZ.HRp)4,wo6GiFLkb+Ro/0!l8nscER=dB@@e=)br`4#SXc{0Y0#H>t_%D09_KK|-]_"qL1>
AIcBH:*$:rvt-v,JG2T&/ZC]Q(^/>Z1x&UXsh]eEDc2$(J}
@d,U<(2(A2#&5gRAsS?V@X_o#<RA}dQ#+%pwE2bt:;dyH
(,}0Lc7/OACM/=hvEs]$^m?6r!NdMa]yXKdWQspp;ih,N&`Lw;sJotiy^E$E]e*K-.de0PPxc?sJJ-Ve%k<oDQ_y"1syZ6>`Ph?Qp3?Of4I3(u[*3kuA_9$3fGew_LrX*G,vl^5-l()Rx);_x813Tq/K>]hR6X>G7@:k6On=&vcrxyo6:!WW+JllA+d2`TYb
NrStTVWR3rtJML`Ul`ujfE))v>3fe`q":@J-Y"G
epP&L"Pu`k[sj2r#a$Fj+^jRxl&}?bwODiNu$]T{m5cM
[sdMt=/RI9xU"gU)-9#E^nN^w%{s7kSPyxy`lNnjGH/<:?yZ05<gO8g$YM]DH)jj9:pVN$3+{+p8tB2F!
gNS79(QorjLw>dUb"L<nCm,_P<-7*M#IF!,a`HSOH[`6c(L!(b@u7bJDm3&t<[Qv,Y)hP:?P(j[djxhf.yxp$IBu|CJ)Q3Ea(1;axfZbAqbb9u$wnz&3x3N.]8hKixB]}=ub}=a@2Xl3XwC0Eu?,WH)PEW$l`XO!:N]"Kttcp8kBO/8yLJ&6*K[>7F0<R)Kj#AOc5WnOH2SLeN6cZL@J_JQGqO/;WkM7S9]Y.9x5LBHaQ=(/ILEp,[hS3NUtTP*h#IM(INCkvXR)rWLE=YUIb4#.5;JT!EH9:De39y:yO2HSwF279gz
{Vw[?O=gM%,Uu2F4>gMpI5YvDMt*+2Gusj8O4"eMEm!%~9R=n%AFZ(A4kr"B}dKj#x]/?7?Ijc!5wbT%B^Zs{;-[4i#MGv,5$2C(yRR+(lp@mt92k#Fxz0|)#>*$mJ9rNw`q5MSWx<u^vlVt&+CP!$QH.@(&N
D.)7v>o
Bs:fONg:(sEB!g*qO+e?^CRh*xkA("2WnxpGSH~.i-L-{<2UL
RWN-jQy
$nHs%"}"tZ03*:nu
"d^AGOTj6o*/AJspu1Ri$2t;>iM!J#%Jg#jfG14{SX^Nc[(Xdu$IXiR~OH6D%>[DPI,l7{l8_bb|*yh?mgAlRyuT>QJ`2w2jt>"`*Zv$d#1cjxvOT(yiqBa:NpFrY?[i:$DgGLx6wY33-jRIvfl).A.~psRS!am<W^W:jB$A1-2Y:+&SIJBemr>gOP>=c#$qFa
TufPky>-MuoxI^M^vi#nFUr$N$am(E?v[u+J}AD*^NDhQ-Aa*yMTUgmn{rmn5C9$D+4QC8i=PhE5_q.Wb*@X%r:yz"2`)Uj#N#3wsE.7F<_v{6EYMd4D5gUsci;p#_VJ}p~IW]h7KH7GK.
AYf,OLvw#F[(t|8N=F"+sZh,b6BT(Wr#UdN(rnhfetz)P&`uF#m

poe#PxR_wOW:K1nhpG^#2ThAk74@kBLRy%+b]LolX
UN/O
kSE8@U7M](NYG#2fgOxT%_D1ZD;g#/0HL[&b(G/cS@vm+Gv{H#R^z"5;');}elseif($_GET["file"]=="worker.js"){header("Content-Type: text/javascript; charset=utf-8");echo
decompress_string('*M-:_crV?&ivhwW00>hyk#FBR?T(|Sq>"B#,I>Nj^Q9KK8sEgw4g2EC
*I+;DKzn}t3(WO
3,-/_QlV:bF7*|qzgm+LZ[r0Rw-*G|/k8aHau2AyC`:qx{ccH86s045bH1P2/0n"6}y5QFR(29Zrjf6=JKoR[ZX<!#*8i<5q.ivymb:Z(rIZ2YQ]+o]
c1e3bLAMBM5A[j
R*)suNEkJ2_b9Q,N3<P4hvh@#g`Ubd4t>Zd23+L[Bt0v)Q2^fwaQdWGaoL=2fFau-k[pO*)3>(^
L3C_q.O7n@ic/h_PH^?3P(D2iqS^rMAuO_swO`)*TiGN,)~(n+#u:.`d2HKi,UCsH@.]A%*j08LgKJ|@kX+bbB8Zu(St;xKfJ=}=9(nou8]":5u&EO~jfR@9f.[9)!m!m>c&!6F6vOL1`]MawSXj)67Xp@ygy7)9*q,X#[h/L6mfb@W@"#ngdi7B#e$3RlPyr[q*H-nfIGG."G="QLE1bbI!fYOm7erh[>m4s7/_nwA');}elseif($_GET["file"]=="logo.svg"){header("Content-Type: image/svg+xml");echo
decompress_string('%s_VkbOV?&!t"do^rQ`p`ZU/yp&Ye3upHt|/H&y4sA3gG1#^TM/psE"F.!L"b-TOg,=_&!?SQvUpK1NG?UVTm6[[a>X*ZfBqY!LKF
fO{QWHay6P%Mxk-@i/qV|wo57>CjpjQuWGGgYH{O@sDx@a=t3J8^4xXkLUkz!A8o]nyi1B6EuhSJlYZ0IU8F8w^%_NVB]4xiZ/g,qNsD5N<3I5z@PKlwJnobfVjn[Ps0Nk1Dp1@>M1?3j7#!a_W13^gLnlX:$#{3
8i+/0=Y3h6/1,{i{28SyT]@Eu=r"Cz(I8et3V~F)%#.@C6^yX&2~ff.YQQ(5WnhDY<DSV20%H2f?Um0n)kC6+)X&<0DhT=GdXfG>W}N
_itFLhYXgQ-?9$q+dW7/s)Vvp*s9<u=9Wu"5]B@h-)l%Z0$vcYCQ:>M#CF$ONU$8f3.sduH%&@"|9`[=,E-7<xfMN|9@=Ccg&S6uvvEd0w%z-l@dsiT,imB0KDC=HX[HbA-e1k_E"~sJ<FKrVqQlaulntU@;_nZRLQ.qyk*ch&y@KSbULF^1JuDW`W+bWA."U,D&Z89.[5Y.EDYJ$A]=t5LNi>n}`Oc
*0;=MJ_8W,XQa$w^=ohbWF!H30]5ctm(Bky7@-Lh7OogMB"*');}exit;}if(preg_match('~^/[-\w.]~',$_SERVER["HTTP_X_FORWARDED_PREFIX"]))$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];define('Adminer\HTTPS',($_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"))||ini_bool("session.cookie_secure"));ini_set("session.use_trans_sid",'0');ini_set("arg_separator.output","&");define('Adminer\SESSION_NAME',session_name());if(isset($_GET["upload"])){$uj=null;if(!defined("SID")&&$_COOKIE[SESSION_NAME]!=""){session_start();$uj=$_SESSION[ini_get("session.upload_progress.prefix").$_GET["upload"]];}header("Content-Type: application/json; charset=utf-8");echo
json_encode(isset($uj["bytes_processed"])?array($uj["bytes_processed"],$uj["content_length"]):array());exit;}if(function_exists('session_status')?session_status()==PHP_SESSION_NONE:!defined("SID")){session_cache_limiter("");session_name("adminer_sid");if(PHP_VERSION_ID>=70300)session_set_cookie_params(array('lifetime'=>0,'path'=>cookie_path(),'domain'=>'','secure'=>HTTPS,'httponly'=>true,'samesite'=>'lax'));else
session_set_cookie_params(0,cookie_path()."; SameSite=lax","",HTTPS,true);session_start();}if(function_exists("get_magic_quotes_gpc")&&get_magic_quotes_gpc()){$_GET=remove_slashes($_GET,$Rd);$_POST=remove_slashes($_POST,$Rd);$_COOKIE=remove_slashes($_COOKIE,$Rd);}if(function_exists("get_magic_quotes_runtime")&&get_magic_quotes_runtime())set_magic_quotes_runtime(false);if(function_exists('set_time_limit'))set_time_limit(0);ini_set("precision",'16');function
lang($u,$Eh=null){$Da=func_get_args();$Da[0]=Lang::$translations[$u]?:$u;return
call_user_func_array('Adminer\lang_format',$Da);}function
lang_format($lm,$Eh=null){if(is_array($lm)){$aj=($Eh==1?0:(LANG=='cs'||LANG=='sk'?($Eh&&$Eh<5?1:2):(LANG=='fr'?(!$Eh?0:1):(LANG=='pl'?($Eh%10>1&&$Eh%10<5&&$Eh/10%10!=1?1:2):(LANG=='sl'?($Eh%100==1?0:($Eh%100==2?1:($Eh%100==3||$Eh%100==4?2:3))):(LANG=='lt'?($Eh%10==1&&$Eh%100!=11?0:($Eh%10>1&&$Eh/10%10!=1?1:2)):(LANG=='lv'?($Eh%10==1&&$Eh%100!=11?0:($Eh?1:2)):(LANG=='ro'?(!$Eh||($Eh%100>0&&$Eh%100<20)?1:2):(in_array(LANG,array('bs','hr','ru','sr','uk'))?($Eh%10==1&&$Eh%100!=11?0:($Eh%10>1&&$Eh%10<5&&$Eh/10%10!=1?1:2)):1)))))))));$lm=$lm[$aj];}$lm=str_replace("'",'’',$lm);$Da=func_get_args();array_shift($Da);$de=str_replace("%d","%s",$lm);if($de!=$lm)$Da[0]=format_number($Eh);return
vsprintf($de,$Da);}function
langs(){return
array('en'=>'English','id'=>'Bahasa Indonesia','ms'=>'Bahasa Melayu','bs'=>'Bosanski','ca'=>'Català','cs'=>'Čeština','da'=>'Dansk','de'=>'Deutsch','et'=>'Eesti','es'=>'Español','fr'=>'Français','gl'=>'Galego','hr'=>'Hrvatski','it'=>'Italiano','lv'=>'Latviešu','lt'=>'Lietuvių','ro'=>'Limba Română','hu'=>'Magyar','nl'=>'Nederlands','no'=>'Norsk','uz'=>'Oʻzbekcha','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','sk'=>'Slovenčina','sl'=>'Slovenski','fi'=>'Suomi','sv'=>'Svenska','vi'=>'Tiếng Việt','tr'=>'Türkçe','bg'=>'Български','el'=>'Ελληνικά','ru'=>'Русский','sr'=>'Српски','uk'=>'Українська','he'=>'עברית','ar'=>'العربية','fa'=>'فارسی','hi'=>'हिन्दी','bn'=>'বাংলা','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','ka'=>'ქართული','ja'=>'日本語','zh'=>'简体中文','zh-tw'=>'繁體中文','ko'=>'한국어',);}function
switch_lang(){echo"<form action='' method='post'>\n<div id='lang'>","<label>".lang(23).": ".html_select("lang",langs(),LANG,on('change','formSubmit'))."</label>"," <input type='submit' value='".lang(24)."' class='hidden'>\n",input_token(),"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];redirect(remove_from_uri());}$ba="en";if(idx(langs(),$_COOKIE["adminer_lang"])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ba=$_COOKIE["adminer_lang"];}elseif(idx(langs(),$_SESSION["lang"]))$ba=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$zg,PREG_SET_ORDER);foreach($zg
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$x=>$vj){if(idx(langs(),$x)){$ba=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ja[$x])&&idx(langs(),$x)){$ba=$x;break;}}}define('Adminer\LANG',$ba);class
Lang{static$translations;}function
get_compressed($ag){switch($ag){case"en":return'(X/+K5IAP*41^o=Oy8$<mr`WbJi99)^Gv(KWJK4f08,NmRxsQrKi)<fg<mJf7o#FL1:uD<RxJ>S#&8)_ofr>#?o?>5Jx4==b/l)+)k"vx:$U0JU`?&%4Ij(blV|qZ8~rvuO690A]LX=p/egxmTuTfV8H~4;)m_T#*l:gi?B2ib<Eg:w;,UG>
cD9(YE%fhOQR3eb7KJ&e#zgagCv;cTBXl<M2K<u4ZEz$ufw<vsxrP.au1ek(&"x{@wF5J6yPw3M0CPb&%"QlCP0Utt>B@FvR
a`C)egy&wE*2!8$)?!!Rg_<;DwOkQ^A;%.AFjv>_I]?DBoQ@,35X*_J;@3Mg0r3T}<E^|?Mm0<QaE?F9pKO,%j3i[WqyCuXyLUPn]8UF9Ghosj_?l
yZCQlG%H1*O3khK8
U:?DNv;*=6Al1df:t*$tW:O{Sj^-$QqL.q<:uy-@Pfj&^/==d:
Prn+`"gx_Q:GvGjjf1:I$c_vy9GQGu[!~q[)uoXsajlZ<O3&5(9enRgvQfau:l&!]HWQy8SD5V.1943N5:kVzi/a),;PfeVVkSL8jhO$U9t!IfCq~uq<KMlB1TTmbUO!$N6U$$d[c^le.6gA0B(12Ja($636uemF3=b!]rNa-A9.oBQ`@fWOpr/bS>Fm$lID[MTVo2Pa"NF/Dy$S6<9vJbjZ<>bPN`9;zwdF[EUiG:@lp)9g4;:4)<i!mus6t.s`?M)&#Ke(n1tX(!7[V<o;4/M(~m#WFhpiP9+7tZ
!~a!*7/(,Y0YnLPs1W,_Rb[tI1.Gb>5bV1;2ro>x9yi+sa!Wup$-!l<texArkBEk(ygMU9&c<e12AeFp!hm?WA?dw
JG#kq8"SD}lp
[Hl%uN}l:1R[&Nz>uc-V.j~
r)r?<6`
[imo(%tr0FVn+1y1L$cT2+S[+5H8yHu(vQE!=Eh
JC?9RG%yh[Oy?G6<[Pki&j=&kgF?rR=W0XWyiE%H:O8UL8"RlHt%D&-un=@]1MWWJU[(Nmmew!UId$p0";]0(E},xrsi;oQA)"70ixeKZ!gP_%o#z#/h[2x^ar;8j?-e!9oPxi/$}Y)A]A]p$T7)c!a
`N6)kNqmF4)eYRr3+e3V!J+OyVuFH0OR"AkGma)I|EZROV&q9^GghUB(C#H?>C67fB&&3:u6-MJy}CRm$+{v=gconcI)BE(q6jb)8I+;]LJ/RmdBZPa=6LAbF
OFX=W=uZ0Md(<6j5,mW_gTI$ox.icK,X|Uhe3%Du7op0d9*%C1lVuyr8/w&e>lL0USi
71!iWPW2(,H2*"V-LFVJ~j<A>)>+skf>S6uMr;o+EyF6ED{@xUC`5a.>BWWKEFeK(5in~TuWkaf.T8~I{6|AJ$1:j-|QP6>jKt7>I"Z6dkHt#m+A5IV-e;SOc3&3AP^OXZlj<t-L&]Y_~Xqu:f>eNuEp6%~ZrSemi-;#u">*Ze9h%E,U%TB$[*1Ii/e+)v{::9_1=0fT-I9q`Oa&F5}<-NX"K4Nkai<HMiHcaaL;4?S_=o#!(k,ry#I]m5&<B]l2wZX[gU>Jd0QrW7Vg8m-Q}=g@Z)BwyKtaE4nm/S$@R".],)NLV*1M
$:
p4Vq@`E-8#qkT5QUt[Fv?<|s2Ctq#r&s|Q~`~MiRLsHl@&S9
O2Pg
aE%4Z@MC5JN2z[B7aDaSc?`&:i~+~.&rtDJ9z=<-Y&RpA0WgDMd$Z0Li,/m+@HlVD)w/r=hT-K2knLS@v`b!?tTa],Uf-Tawo^3v[fCmGQA=tHpyQ%^h-+0LCu}3~Wiwm6(`+bV/ftmwz#1B/CVvma$`/MUjq4.Un*rdg5dJz*Dwe$`ZuVQH^Jnq~XXOJ,YeF+{4?jU1h>m3VN1$kH{vG/<2}$BjG1-;Bpk*,ZM6PFJY!YwXuW(NOV_9Y
`W!./tHP~wyY=XDArCP3+v@T:*yi^kQ<D9BglN>QO0$)V>WDeAMuP*SspUSf.f~hV]Ju"U!(k)Jk<6Im,<tE/,8^G*5mYn.pO-8-+=ganX@(/[7VX@O4npCNQg
%%)>#-dX@!BElg+f4:(%&.7YgM`gcH74)`/93l![=D89l-25ICKI2vc)no5[ij?OJS(ZUZKJ*,-bt]?zrgnPt=G/&ZSrar&:J0kC@ii0lR7[&~,.uLfdw@HYAnm!hSw(+Dq/Br;`T%sc]
lbW0xSLGiFL~WZi[ut!h&)j+Kl!uH)CjPwewl1-uhH
>/UhP=H$CIB1-p4V!]Yn^kcBy[uu!2/YoJ}wUaY6k5Rr`Ty=L#%l]nYtl(RVeMEVOWm6NBNXlr!uWw=gh5#74%IqjO0VJ)?"JO;V!XpaULgl{"tgQfY0$H@$7q:5hY#?r=vFH=)W9DS-aMm4We"$>@b8W-}/#tA"voIC>
"d(l|R=KnZBgJIk8",Q>jW>:RaK`*9gEA:T=FUmcQ%MlWR7:$ZJQ2T7lprwJ(?1P*_GFzA(^=&9Zrv4&XZDK}C(BqS)iS=c#7ZnFQOA$
@B`e,g0EZQ6c-J3n:zTJc/,*w+U
n,d^`
16i90af)L,A)egDoCH*>sT7sp`w<m~v!@_Lb7^mvODc96E`~Lx;r^cMsD;EHWDrMF[SL9SXQ(?o&I!(m/0X7dyuw;<HaYJYGUF]+a;Si,$die<-A;mp84Q`I@pg/g~6?;6V<Rmbot"v<fJH_,|@f;],{vI,UI;#.=I-&980C_t<qthB=,B!mL@m|nZ//XA5/1_MB^sWPr]g0j0:FxoL^tQ7?PU>fhJiN/]E6q8d$!r7gv!_*<G7g_qKUnAj2C3tC9F/XSzPvQ;K5nK1PxN/c&w
+`v/dP=c30l9``y/$EnwSZ-bm/Ib">hfNrh/xSmY"H%Nz8ci$tWlV!AxTA]3GVAfd"fnJ>%9?g-`E#`M=_,K_%:Mc(uO*>dDQ065<+nRe<5y!9;Kz++"~G9<ao2W]VW3NyX3?7w5L)1-jKE]@0u"`V4ee.?`&rScn%&S/QLaEPT(]l2>~s(ug7WsjkG@@^k<4c
P<!T.?SWC=:NM":tAn-}MR=HYgq?G`;X!p=3D#I75=4_8].d?T^21L,adqnmyw
Sl;3p]}]H><fS16g,Z}Qfe
6=iM,<mE#xW41V8!v@fp_rE>7a9C7(Q^)jxptHBB';case"id":return'"Zu;BcwA`+XkrhXPa/$$:825kX1_jBX7rRHIr$7GJ+*5$Uk_S-dX#Bun[J%F|Q8LFT0JzUD)XDzcpri2{l<4Y[:^28WpxI%@e94_:qvkK<.8x$js@yw[M!*D{_AVMG3A+KPca!pD;Ypo]Na/N5Gc@l}[z_d<u6d
}3eTFy5Q,lHJ6*Y[tH1_&:T*E+8y42==aLm$P[}LL"n"_l(rR3-c=L`-IL
6ggBPL+Womplu?+1CR4$hz4ZR%=4B@GMUYAk8acXHJelmCFs`O`]lvfi*R>FU;T*D3yH
|8(1[5O$.a#FD_}H
x*$F@]x<78kA6Q`k@fy_mYXXitWbcQKfSP
}N4w5k
YFbT)&c#-Ipy1,nK:zrUvdZ|,MtF6hbh5(n0E+JaU($"&cB|d>w/,O8@:j/v[(+sjl`q!Q5Zqg*&"8xP0ps.&;lcCX@keX@KN3mj$uP-#|ab)aZc#B_0-i1KB@C@s:y;>nGyic>?vE#fv*.-)h9G.tepT20Em1>ReD3E[KtFO+d?/
lMS=T"KmrC#q_K1MGFTwTh1W
HFQTgreUfG69^tOR8.8k$^VeTG}rfAdyW_%(ef}7#2-V@Az7Oxc&=lv6>,LQt8(k)(|(Xs/%TC$o<x4Le),p^I=d72Zy_=cj/7kgr`tsx^gm%s.O6lIM#Yt=4VY/=U^"
R$-s5jy+9|E)i8V|[XT,By<Cu}<vqUjy$s&;?Ax$VN]+!<el$T2OSjDG=}o-6]>=sus09^R+kOg]L4@>*id`mesUPv6"w*/1n&)m$mF<PpOG1QV]`/81p~2oql6Yx9bCXXI]E2<5E@6ArZ1NL]Vm:+rQtuy{gH*6%Py9WeKYt8
`NS@EI~r&PKdJ+Ki^^i9
W?E5e$rv2A%X^<aOJ0Ueg}/d>Y#1oWM3bM_i#[NShlZ60%<e!?*w@G@]*p"@E`5xlr
d,nq:ANDI8JOcVM>!LoN*/05UamVY3pENy:3dkZBo/saXGOv0D{LAnN7zd
4>sthXbf;h!OrHFjk0Qz""GtLHH
BJL0qCKn2XK-7zUXdnVyU[>}B5I-dxN&DVkUN"EBuqn>`yO|@9w
4qqR
:6*IQL8h|AmKJl%a~t-cv
Hn,PFS.n[ht<pt=Hq7<[Gv//
tgK[cIe|B"V/IUHSy""K20u^=.p_x,,LufxOw,c`r=RgvKp([~n~_9.
xfD1GV.~r$?9wyQ_m^s)X}1D=1R4oM-cims(lLA_M9.*#uwGwWZWC1WX(tPO#Ys`QIZU]b724[,052YThixjj
,zc$Cqd4.3@3?Lo28F#>E"7hU>!]kAh@[[qC[@!4"
FtALsQi2UVJkfX:8TBs6-G>g0m:ks.tku*NL/wOBQ/s>AbfP2"I*iuSa%T$8hw"B?lEq1LdMWL%_^4SI(SD*4f*=o--1b=_Z:XC(/UT7$UP=7dW@CITdIPLw^ru>DLra_9V%HU15/xwct+C:Kz#F.DgC0&IZ,oHiP1t%AVadqv_0(0Q3v^b@_kI&"%wes=aO[DCU=X(aj5@;/#f($Teu^&JO,0CyDk@}o9oZ=Ox#C:fRcTdo]3q@U|a#
nm#fPktCaMU>^
Xw<>U489n:NSPSI:/i{OpXl=Vc83]D"?5FFS<3@shlTgsk:WVHocVu$PzeO9&nV%LA?;w=L%5@uX[b5KAPTN/B3!;6T*M#$F490f]vP;<g3?@b3DWb.7m9L:1KSPnA)/idTfM-^L(6flCP(Cu1-]6YL$
B:.)+C7D$RhV-vXDVPOqSSnxTwP|5I#5=$?ILI/89eoI!Qf1dIJ4sAo7CkN"X*H{s^bPUcwAA~Z0KACjNf)w[.]RNb.9)Rqx/YNZ9;6~N0-=oK.vm,fvnt>x%KPk@BKt[CF1(@>%:[_7.Ui>YC)&J=CnNiRIjHo>brXlyPe4@w)$
Y.p>#KH7ZkB8SN/M&?Ao>CE"4k51d&)34ws<4unwm]m%g<|WN<;2XP]G!J(lJRXAa6,rep#pgyT5sH,1@ZNjpi?^H*~Gp55XODR(sc5#5bfYc2g;$p0`ki+hZ(p^rspF_Sua2)3Nq#,K]W|G}A"*btiI.;;2har[[5c-#4;fl:cpYcC)LH8;56t@sC:qJtuO:yBw+GB,^F$L:"Ffo"4^u!HM=MkT>3mfG&/0[*4:Xdw]lp7[tu,FBAP.<Z*lU:^fEggYNoFt`+]mb=9AwOy"rBqhO>1c+&WLTta2ak
W68BC*a|9*
Wq`0CB;O.#{7PBv.bp5)AJNyw_MH{Px2bR%[[-l[s,
Rq?ygmANUs1$@2ICf4(gh,]j[7M*b0b|spd]GpG#6kY(lSV~g.GWPUSbNY7^(SZU%G
30PdF3A)&b
j+@Ykb^|?uE:w`&W[Ei8@Wl;$51~@I#eiJj#Je.vJ8U0B$xrmX_&P
1os^TTsb(2mQX4q4Ip@OpB=X47:ED=W)b2h;B5H!y5=,t1Djv}DEAhQNW8o;_UHOcZ6HT)Y)T5@w]7r<LERO`!v@,{^xe@boqbxe]|+>)?e1WP0lRx5A1@W
>b!cTAC%k.WK#F0
VNVzG!#<9(<{Q0B,<J5"cQE-?=<Ba9T?@v:GM#+~ao9#g6>sp@57xm8b125Q"f@[t_=vgtCd=_?MiMA/-&_GvsLb#&n*8Km(mnJJT5r(^DY|/RDw%PW>%1By#pk
2X)ao&"21)I8EwlSZzTYsD["^AN^6MhI?0L:u:@?lQHsQaY*IxaP7y/5qOS"[Z0*>V=bXX4
-FQo)s758GMbR~gqj&;ec7MU5p_Id)u%nz/w6`M%[GD}Px*Z?xJCNbYNwB';case"ms":return'-Zu;C7nWB&)krx*PH4XmLR9UrFE9y;~_Qk"2<VOp&Cwu<?!)YyE^Kc8(y6C.Ob+&<<Z@K:(BkX6K"0Q5x(5h|w`#7NO0U`Ayz$Ion>hRQb3^3^V1,HiP+eoDbDJo)f%UTdDM#+M&OxxXn,n@y;ftqJSz"uX8L.?St@>#zK/bm)3!o+tO^&*alo7?RBeNEBo!Z8vnueM6ex9;)hKe*od$7*E&sC"df2fnHf&mod?*"x@4JKww|K)!.R86k^Bs?4""hG{(oExD%=&lO1@>H1gXoQ;Bkq|.,j?B/R*3sucd}@-SU+S3+
/Ql;w8$&$-wP/g|`we3&f-K;ED@Qda-i%=[b[Nqq#!V99`x5z)w^U=T=PQ5e93YptEap-eTa~8XRL
;+W.<o+=z1%:7ZKh6
TV58F3Z.=)9B27e&q+d&>a][FB**R0;>fWaujFNC<M1$f%a-Kf{U[N
Z?9~Ta($?J6W5,t_#Df!G?[vg9k-i/7^xT]:f*GS4XhzD
G:`Y+"6dd`&PY)@*p#-_T$S_[/D1vl1[3/_UB9fo@XVVd[.U/WMRo
4b(T!
yGt40JLtoW@yX<r#@ouQ4(y=>)HWkICW<ixZ91G~R0,g[=s]Nrli-?1+r9B^G0-@#2y+C@Don~w"$hV/"AN(X1rRMx-X^6e#]@f[pzG
awC.Nx,"L_#jKR&UnV/`+dopYZ"k^TKg!$PS`mR!>k5I-2Ie_}K;1LmpHL>cVVr`#F*BKdpg-M!au55HAG9<Rj9qOpL:eS+E29/Pf,sq.FW|;E]m2i#S[zs
]Rr]A0O9.t*XP<^AHLb)Xj;*,BP)RbwA,;.EQJ:sL%hlF-8vY&ZZ9Y^r7b,Q6`ShegLIK(Py-*J{n2h7pE:wUr.<+%J;=;9RIxMnY7Qi@oL!_
q_>*RsF=hj6]D;Ax4Lbd2z!kKtv*./20Xh5weG/Z[,
}FB2.Xr
=Di3}&Z2Ndp<YT#1Ly%j2%Z"g=wn@/SE+vJ64"qs}wR0:Eojv>-(Q7:00?%2yt]:+qyP(5dW)v`rs]7Ug9,/
xlcX)(?b,ot{U#dQlusct)y1n]^6L*-Nd4v~wp^H+K!l/"2{(Hh2Y(EG8bCB<04XS3*(F0/Zu;b(WoKL5*.j804>U%tj"@bhJg<|vrm`+@N$+i<EWHE>FA89u~7H[.e6SU$7l@X5f712G~s_C1Fi"+vV(mrE[hRlI68:s@aw<Ww1$83chAO<0Z<Rc|+qWHRTAW7<*nL]i:VO_":9"i5D?ROk"J8algQ[vJpm/i+M%n/:_mThy?-bU<!xwv,@$hYD(G6x#Fe.(Bc^Q9`pPmI@Q6sxWV-a#egGHZs~$c65@}lk!RwU1V]v1}r
;fTx,j1a+[*S=O?&Q?tS$b5";PQtH^@VU%W=9L9{#Aoc*IWpr5@RZ"Es+*r]7JTJR=d3!$AiKdJa4<tNJmVJW(a</qdk6-rvq[8g&J:/k/5qL0g~Q,1pSy"<a
B9plMx:etj>jTJ:7Ss8&5&&M
0p:.a$Ci=.rVN($@}S~D8?Uh<Sx%A(]5iIx#&NxQ028KvoXwr&0%+ArcfZ<j[9Y&T@r+3v
eqks:oZqm*lGE4s%pNAu-d0[o:dEeU>J-9@^`eTIEB1>f9aayoD[WHIYDmVJ3|:g=wYhW,kR2vDf-bX@uAEVDI6}ArH@N4?Uq<C}aSn=`+["Bmt&J~#>Qml]9j
&#3*p):Ez6}[R(4fsWM^qQF]TJw=-q_QJ!};dL,I)B?$uOWe-JYL;wZ9AeU(
%Y/+[:MC)_9iv-(Y@u_IcK-r!YOeE>Zuwi*#E0TcxUPEmw3|#[lXx(bZ<<:H7s*sJt*HF6idBvqQ1d!9ER@_R/5DfCEQ=_RUZ8]cTDIR&8.V!Du,.6qskAgTDq8-5%0EWues<
*nUfu^9KIh8v?CMge7Au;);9[HoN4^q&X&(pM!W@F`]?xpCrinAWeu[mQ{rd8Ww/^SN8G?)(XP@#OC`blVtR+%5/N6HYD0otaVd2sB8zaR[#,*?Mry/V.e*)/<5Uj{V1H%,Up%m+CyFU)o*7d)B&?Q,w:8/-m+`>F!PEID)jppt~CtUhV^&NG}OV<`)ukA#ZU+:
@Omi&>tcpcgwV/pQ9REh"#Va.bGHns!sahW|x$gzoW2E[+^&b{]0X
X`d:)+u_J~4B
Ofp@W0j`Wa4[cZASzonk,x8k<D@;)P7JSJ$>0Q&;)-+L;Qv?*Fqdg:oj|eqWJ0]-a#&fd#(Nixl6ZaB:PF/v+[rU^./688VCfLE5rq$4x=96=A}ABA(%Gl0sc4Fv{aM]m(Nlik2*
n?<WpG,C5QXS9L-?8`@|fFZLsPRT$&I]vq[`3_,oXYs*owl6M{wuTJutD:kX*i1J3/g]xQ9:rVOY@#)TIQtU2i1Y_>Qk7,8X`pUjy,UPr("m9zJWSl)6;_tUW%bG?k^DuHFeb`C9LI62Zsl=/!lIKQBg*fanjA`i[(I|(p`Fl-u`c+m_g@rwRR#VGr)_:4J}QnY!C_Y(JenPFq;[DzJ,G=`>/cOj::+A1HH#02;_LC%s[!0,pG[g@k4I0B:lWS%[wX=XG&33]?>,[U%Vf3XYSK7tf)L&/woBO"X<3P(iAr*F4YS^.M2.e:<R0}!G^H#vHqLirT2c!q
]K,1N!7DhsiSyot@W_{55yaPyYdx"JSHERhKwk1K(pw3>JvcPm8uZ1m;riR;?1jsV7)czS*LS&}HX*u3xR:`G9^QTVMRd$++1"
oV=T6m.}EX]iNIA6=AJ4(s3u$hwR)41W&Eh9
k.y@CE}*U)3?YeNxe8$';case"bs":return',ZuF;bP.G/$*#foO6C%htAw@zh>"-A<v<`
Vm;^6PVa1Sru!cDLZ!jzl;i!4{&%),J/t<bs7{e!HK5WG
0cuBf,P~)UW#2HLo@V)
g~qfE:GQs$Kcl:_-sK5(bM$g>zM{Ckn[784OLJc{
LM)mXuc%v]f5#9XspLqa@vvSC!>b<$-&ZtDg=o4t31ncnT;QFMlA<YpIk8(,m%qd0FIbW7{dDv?1!&4[=6zj%K.c?:&?%=jSCXq30D8_A<5`>vl:nG,tapKH4w
qaQ|QYi^ql^]gS:J5E6;Z~DpH&#|QPa~"0n6Jzn6=fV0@NL~fu>iL{5zli-[BBwS=%8s,oU&rL>UEl#qqfEa$8S7rDp$t=.bwworgW1F$5wHi[=lWllZ!pw{mlc`q7m#ncugs$v{,MUZIc]l#4JJi[1*VYA~,/(ypL6q]D<//;oblHaa*]qu!6#Z:*L
N7/:/q_,qx2fUvt_8VoL;vlWJx+][!/+pA(iiL_j((,m<Nb=3FNVvI20Q:W0oOp~@W85idejh<c?8*1H`x&@LFN/jIOf5_"FDVUk!gLCfC$(<CQeeFQyXdo&:SE?//eEg@Ax[:q6nB"U3oa%#sI)jRO&qoTnF5AuDF:9>rd~hS!>QxVwsTg6%Bji-;TepyX!*/KL?ubZhp&$Xbh:OiK;ha#%EWL+BZ:)A`_N52j*VWBdOWB5U?7C.M81Smh[8-5y
RJt!q]AOJr"QdtP3jGg,"$@U$Q/W>T=J[*zY<Kk-/?ZQ0u;a
Q"%xEg+,!h]HiB$52[T3O"#|v.sK/XflpV4*hIyrDh$0kq.o8fY1q%F-:Y]^%)7w0B8C`D?P4Y?1>(,C-[q
%3w%9z69@%(&77x8)znE*273Yz;~8>G&msBcPBBJ6n8J
wYU2s3nbwmHrT5p!=ku)|SZI5FveE+_6Cp`.7Iv8#3Q5A@W56Sv:J]-d$tpeF(AmsLg!A1ObY"%yjboYcmQYj$!6XC1Y5B.-J@cY}cc(vmFeF*I9isBkq.!+.x^VidY5(IWK?g)cGQaM<o/,1W[(_D,yTPS`.9Q
U=utqb.OIClS-h}Ee@o/eLKOyX6z"/_ETlplxg4;oO9FAZL.fwMX8W-ni)
hA+hrO2(V#tr`3Re#N>!dFs;#[^{$vh}pVDU);h?rYV2ZK"al``c4{_eBA5rD#`rxblNXs[XpnlGxCcXN"F0>#2GqLd)&+szgB"L+09G4aog%HF+C5eXp]
boQm*i
=/3k6>d~?f-sSoxf@<#/%1AV%Q$<
Q%Ul?XEtS9*m&0t]=C!2^CJlCB.kLcD7]Ke%4!|F@]*Y-d(Yof2+V80-RAK!
I?Q40~wMN&"*83XyypuC)uAU_bGT4}#;P2^vx8sdg?(|EF%0CfDvd|z%(
U4i|SSW
D~*((&R(=EWe_2AnAghaHMxgVyF6(;SgFA>+7HaJ[ttkWBM0rD$t
,1p^NR1FnVa!e8biqk#5~EsG`evBfPAo8Yfe!Q%R
Q>j>lO[q*K&;;)==2

?$zSV2`^bOq"IdjW&lIFj^^AMGaNrQ=
Cy0jJq*P4p:SlwYAvqy2{4VUV`dv8WmE9FThFdW>kZGR~8[2rrm9+r1kne/-FO.r7u*2w$m(zD{2ZE?aGC_!Y&?oZv9aG^f9(ud=G3m:4,+kVb/=|__buG=Y+$Wlnw3h$^q2YZ6e<2Hw4+BqaBBdKfa"_T7j#H-v-^EtMl8me>J^mCgBs^W9/=&B#7>k{."iU!L?SoI&~/o$3n7J=xhv,.RduhmJFN)`C3Dagr`^VAHl+s8HZW30|hW!(
/_g[/bD9i#I=ucj:wVc4Y4*/-5:_TpEnNh5s0$p]p]<YHZas@/zdbiZw~Ct.BgMD)_G_iOzLNl!Z?!kKu7vB)Bal(_Z?F?xh45w/zvNlgGd
?PS$ycC>@^"H-(a(kY6#5"_.I9TdJ/a(
v`r:Pn]#1YO>eV.vi!rO6A
hj%Y(s@c+,."t3]Eg7wVmXY0<R~`gwEMXT*iX/sMZ0CB5gDo[U|=ZKe_L8wJ*"Xw^JhlFtN3
Zq.@[C#[xpN!Vp/,GUq]9W_Y5Q9+d:Z1%O^0"xxc&
-%lMA6&5ZS-Co.HfS]08[::~:zV*vZi{lgsB=q=F:ku%l3=FlkwO%As=)jXc*+T~n"rBoOLbDe-hkEMj[w$"KrFtYHW]o=]"hi)Hy1;drjZ8#^(Byms:H.D2]okLm;9ZP0$o<s)|
xXP+iAnFKwfuw])IRg1pdY0;cWhlK:&Lq>WoI::63jH;(O@n*qrcwC40`(j>hZmbXXYU-CyPh..!hBT,WTLWLip_nt[`Kto:@[{*!]hKk8FBw8:)D;tJ<qs4i&_/x4YliEv/6#&@%N.v,HXub[UPz?Yp]PjHMkqoDE,B46I%C$yg[%71/Wrv84F7MR3b-da$BCny86YN.6
4[s&mPggLq2=Hx&$ib2j6_2y`s@l5g]:l<.e!=HYNAK!SV%30Nf^b;;Q7]KObUpFOSvaZ}Ts6$A~)kNx_d7Ww5[4u_*Lhewz;3W$Pa12j
;Z$aNh^Sf
s
H.nq!4&_]*&$xVI<;Vy8*]f[:.C,j
s$KM&>fL,6.XVatb!--g6t1w+J_RSfU>Kqq*;3Si62&"*Lp_F
@%_T2x^D>]^edM@9j"O#PWxBrA^?5m_0U9e+k4%N*ASNk9R_VgRvO#TXje#.iSx?tBj)
(ox/ekyj*X)ld&YPPN=k3S@5!)STp?cOf@w.4FAf774O)>CMeixh04+5wVLa&<i^D_^?a`+9?UE#k`A>-U=1!qz)!3JdTMxTX=VtF]/KQ&GFl6y1#SE6Iaj:[*{:I_3tX;[Tl(#mA_J)2T:uB1G:!Lg;n:"Wcj/?*4*xKtpwvsZEru>I&N/_=GCquW>W1XpGghctC(3Vcy-.?b^Tp-WHwPp`=KM^8sJ*v`6@~?"s@+%Zg23c7vi+y]tEq:a<sS@Em7`xF6%v@
Mn?_DT7:V-2RSxtTQ2g78kCh)K}B$"7j#HlfGW~_kPx3X3zB,SdXG(PAI:yUnFqKfR
LK4i+>Iq4_IPvf<ph`hL;2+y;RMd+[Sc00B"W1L5+{Wpb@Ky7cmF*iVMYX.Yf(mA`[UJ<qHF1
8saFZb-,1UIGa;x">(n8Wm.D,4-pGA?IW?5|%!&PsV83P?e,ReS=y$X%
eC_,>acx`GZjs%&C?ORhZb"d0I6yr]jG}5:26JSo~OKsz=G&-W>`".rv7pbBR(e8]N7"2O0/o$t90/JoOcn+x$10u(5ikT&H(!)Q.%Tcva9TuT;PAX>yg-#';case"ca":return'-]^FD7oD)(o*)o;#1h<Z2NEI`$(L7Uc5T31(*8YV2X_GA#56+IMKbyk7~P#0,eQ"
#F!A1.]@rikPf7?J,+s>`Wl{bWJ)V4]NLvw-mw!{FqS9n/r2sc*g3O,cn:#%"|h(5Dct=qW$StN!PK>gA0]ZLvh;B;g<ESx=To
)67?x+S3_KZnO!iykl:y6KP<r&YNC:[v-W9qRt5?pxRMKNIHAG#?Ps#V@m8:TL3A=We_a^[qLvL]%:S5()98u%ZgxA*h`nio+An^
$-@4".VcD6&mfkAnY:ntM%4A#9LP#w)@LQmf
%jHt^nW]~s?6-7S-^e)=
atyGc-dQ`eWHo>9Y,~[CeSyBQnD/Z3E&,i=!]Ee}yk5`b-@#*ujLK.FFJ.2(,zy@/tFy:R61xp)pi1V"shKN>ce&Z]+eM9,(b^7v
FxNhn%>r;-dh8L&74))qAcI3m5aF<&p#/35/Ya3MQ"94lJ!ll.1_3ZH32W9$98<+@NF)-/V!o9!]]ARxB1z@ar+o~no^;GSh^hVN][;CecUev_v:{vpbYRFkQxglW$@e2*InZ(C+-u<pgL_;5/y*;%}c<da!Sc8eJl^yT`HcG!P&;d8sjO5B>!DOPvRJtZZ0:f&QjY8Z]0^w2#z^g)|fdnh6TEi&L<W%N_V^.%IX~@:@hr<r3<l
z8p,:!,;%h)Kom"^GSJHs@ZW5JRQ@t.&)Pn/A5It6isp>m-nz5;h@d&$G8pC]?l$zUceXj0dlk;-/BM!w!0[&d9>L)sCO25/*-UQ>EhH]#HvFt{=`_RoKZcUtPhdnc*SKTnOF/>FNF]E}%NZF*BJ7FwTM^(K9L-vMCC1Id5QQufvNJ>5&j4/[Kj.[WG`
?SFz`%
y&^,.">p"<6LLEWVT?_aGqK4rVYeSGIi?(ixk.MhZtIvtd!@K03z&lC&c<g-e?dx<o%MnX69V)oSd$|:fpvxj89"e=%SLIT&/):.<2tBcY?w_Je(:Uc()Y|+`!:v.&Cjv7e?=Us()m!S"4oRBh?:_2;5>L
s~(Go5V+"aAeczfw,^`?[-i"F,m5=<SKhAw5jS0.J*:(9a.X0{Bse%.=Ver)i86"8rwEE7$tFN^W8nC$q3xcw6AQTqlS(d/ss!p+mtj4I+7)2=`")74th|T5Tww"&g/PZ$4nS4
-[)x1cf_7Nmx*c$-
mF-J[0c`vR31ru5l@]n0"BFSCpdrrBBspkc051(DV1+">%Kk^:P`UN^_I&Xf9#jkc;h3>)A^uiB^NZdYM%Rw[)(0duI]:Xk;-msm@MuVUfs@%kI]hio8k{Q2,vZ.ITHUSTa*(s
dlG9
&yW?3pK}bewddFJw<kIH&s20veAw
M(-%{hIVW*,f-T:3]"84O_@V=S=.e8Su/h(#iyiy^SFO%fV_0ux+]8a8(maSDE^HJ/PwzVIdt@e7jO~cXd81Re3%w8a3g9k/
[tY-?i?eiPQ/0G5;3qstF@l+S*`&YYmlD]8Uo,wlN@Dv"["acjGA!r;No-^cR;7FYtt$nN8rkX,(k+?^JK!><>oup/IF`1sZ){"T81cQ<C?b[pXgQzN<CU#umHdlLX8rr4-tlOh3N"&,w],uV]cV&g"A6U9cqo&)P6*r7)q+)gM2Iuvx(dXgU*N2lr:OQ9K{]Tti?uEaoP?{p%Zw,r.S/77=6@wk8l.mFBKH:V_?jpC)i[kf5Dg#;k@
3ktT/Y1/M_TO6zOW:L%G;{S^)ayy(Q_)
O<#"HkxQQDz",Do=0thjCkxv(:l(;HH@~U~]X:;Y]g"v,g1t;H&*)98TV!D+wOUqo$"w?E1E.6_/7U9=N,9?@#|"6v3fr)2ob140Mj.1gvd0@J$8&EEi"9A)CdPu+G!j4cia6y&"sx23ET}&dVaC9I1j{:Y$0!^d+TJ,{H
LB9y#9<@UA.K=zfYygo.=?0E(A!tQ#7*!sXAT-CW$@-PPExL$K7+@-(]g}`KjP@8#(Ilt^WqG70nv,]2t;v&ud2F4.-Ck"Bs27B1VPlQOwL$
!UOH|1d%3G)1Iq)Cf6*4~^K_5xqW{N]vxPE=|?$^Dq>5s](wsSY=Ne|Ec8$7ZL
y/wnap3j;AjTT{S~1m@_62bDv4MWyTgLYJCud@L7WRWTgAKRXqnpBV=P-.sGt*DN,wS=y0"2B,!LN9B9]oT8@X?[m;B_t+nDgPxI6[5/YXxVo{+tZ3jGmiT2G0ntmL-g`p)yi{c^0eugDwZg$=/H](Z%TP8uL?qY.grfYEclDv)ByqH,Ee[Ur?iia1!ID(?Y9F<&Bfs+9^2cizcAyXGnBZa"gMv1+}_<V]EQU?>0bN%KrZRS
>qA^-/|RK]Rt:ysKpjaTb9B4;F@Ot:#E-Q13v(d0a@<n7tJnHKFoIovuCXM46<$(cZfL6AHIno[L61dMQc*$~5yJ.H,x-(xIe(;u6DHfkiK4|QH;X/XCQoLgSl*aEul9{>vX>OSj!UNJw?r22a]kyWfi-p!T?l8?
IrJe9}Bu:Nol*9u&xnC^g!
LjG6
n{KlA~/vVjA,x[kV,.
c3)aD8sfvt#m*H+.h/]FG4MW1eQp5eeIKYR*rkbu
NsI69*ij-b.?2jDUN?u|AUMMBP@]5X2OM
),Sqv9/%IiI9[}K"(P=nU/e=
;J>HJI~;K,F]I,qOn8qXeLMpp=m+>-~!3k1S1c{8HM7U<[
v^Sw;$<[3KW"aYfr71YL=R3/3-ReJBqe]v(%(1p-*sfG7::BRJqP%2f[Ta>^>yw`.P2_np3YcghJ-2i!
FB+oylUin6QF0gD"`MyC}I$;
)U`tax>J,9A+n=PhyE`[2Q[?&U<`w7H{S:bz0kZR,2IkI(Y]CX&Mi7Wl4{Vn1Ip#&bs2_VWmw#`-aM0PaD-S*a0"e+;21W@oGRJ*SGik2aHiuk8d@1;RdUR$OR"eJdV{%t5ofoE]q{lk
>W}fjMF_$<xphS}Q
(qV*cYNS"tIIN8ut@k,p]^^g0]S&*{NnKY-ZOdA(H{Zo
$@yvP/Pf)9@3?!P[mZiqJ4Dwb?H<4XO0!&o5udlHb@Z(d8oA3Ks&!LWrn+>K+^z%D5q/:Iyb100?@pa<oAJ%0)]C(SpXC(6jD8E7s;TAM[hQY5>^-3Pa`tMd%)7MjXHyhr9nm6kF2*nfLy))SgZ*^2/1<KXU/2=@]x0="h"BUQ6S"[Vpa%h-YU"+92b"S$kZ
qDM;<NbqyG""';case"cs":return')]^@)bTG2*U!(ie"]Vx!QJ7*QE8$Y98o;?ldb={[>]M<^m`,y^o5[M[;GusYhe<ig)$Uu"l@KT?xh[gX{;>f@ht+N2I]RJOFiJO>1Kw3PdgnraT$6,u/=AW9=6P56a
r|Htw0OQ^G"f,UwlP+PyxMa]4BvJ+ZvzN>KPy<?f:1K/T@d>-|,peX"{4>q"_xb;X7,r7K>2ii]jAA<li=%`mwm|*:UpW"
GWhz)n3PS%ceiu=tDY|3(X&3}#tEz:}EHx(JoLSQLsIeA5iH&ueLx+p#xFP1d,Cr|?j)h_8&6SGM?jNe{r0$|tnJ1[%>`l7l]q2$WK079BK
Z?$]
mbp(N
+q`_+9_[4FVsVWgBST@k
W)!mzu#M>H7osN^MIk$B%<}@/>IR:nEel0"$BkI3Lk<]ir47XIAJ=vV7o)"YjjHwUj0K%!dCuE`>=/E1=sbdscAfQLxV+[<Y<^CkUmH4"[P*:lz,>]M-bQpxW7,5ZPKJD>c?kT8u:1<;/u7vPxc`=,|b{4_gQh_j7n7z$fX-_p;Y|_9lq@B[PE~VXed1j[JhC2j]
54"Kbac?c3i0PBu8][n@Xf,1P^Nj[5!l$vGnQ;CiHs8h%wIRJ//M4Ik?tNJE>C782&Y{qE>%uUg^dFHinG)uk6pj0/l]/_6i0lM`Q]La1lpSIT
igm<Sv
en@k$~V_U(8:EEvi5>,,.pmgU^v?ghW6v^(m4
wsWh`QQjGjLm/&h~@/1v(/d1wCo`2D@I#3(}OYXPt]Aud--XaPtV0L?u+-G)T~O)RU#eWG8|o+]I%0D1*q8eWrGN;lVu_lxq!K2$[:7LCjQ1K.=)y[4VsQ[8"
7VmA
sm0:[.HY"/#[2"QH=AS#le#JuO9!sh
T%8LbkIX9O;_)d5R]9
/&jq9"v$WsHxc(O=AC5b:_5)z01N#PwCI,Y?+7K=*AXB:o^qH^?4t#ehk?N$GcJ&hkT&LLyJqxYUt<-UI8vr0"l,3-wJ@4Ti(;lPY#0i;.oqELY&Etzv(//sGvI?Mgw4l04[MmCL0WX,@b3+ZjE%uIx_sO;WV[_jupcQ8Dl&n(7i5a+u&-R"J&F4__
>h:Us;
oa;FENuM;lnAilFw*-(qDQEZX$
tP!pPfYvf^j[(9m8/
nB*(<FmgY0S@:&u>[i=m^%F?lo>T/4sZe:__6Ab}`@khU4Y;x{ucw+:%Py8I^dl/?:JT;)R,.wL^V-5$Mwi:P>*LfWbRQq[j#rXV+yv:>W/7]y"%kr+gxcx0fxyeMq3dP#(E8%Ch>slq2Y:DjkR@"-lP*LmiEO]%34H)k%(]ru$MwN[PW*B6R|E$Mzz&z#ec4
>>U$Na<2#;""pgnWZEs.#<tNNU`bT.l:n;
YrKI|b2wt>kH(1/K<Q,+
#sb-d3A
$9tUA*v3,+0`RMY.0ctQTg_%t:Mq+?
Vjv)wHwv`ObAr&:PEQDIswCVL$@VJ-IdP>2BoeHO
9C#VG/jWh0N]i"ZLILr_uH#&8&&fK9diAhDY/BCYU?<&.B:nHa1wOx+xqIZXj,:,Oh8<F_*~G@1cX;Y{KITuty6W)G^9(*v|$s5[ef/<HKOAGm<?YNVBL4;"#KFKVkiM_:l0DD?pCiz$/_:^K_=1F%l)BM^n<I3jchO=E77?Q%_*+#hD_4)VKB[pa6F>"NwL_}EF5KBvmDp~(9Bs5
W>h!?^^SOrmpHak~:s+q0,Q:PWDyidqHNk<QHY+exubV)$$@D}NwshNvf+88!-!Y@
#}LU+[81si^B!,b>$DeQj~#.:"ci#uS{uqpEjTK6/qT7lAZ-LKXJy:?D[ubgy->`]q;B]Io8=2[EX*"#1+S<O_<=sZW1C$QC`d&1.FwV8:>PvQOOs|)7"C!!y"R_:n#IRy%e0V>LI45[:qne(+jtD;oc]{Wcj}a*JU_j;a0^(ln_aoPsPl215B_f66j`Ek!Q^/&<odGan`[6a4v:VF7YaQ_6D:UW]6[
Ty!TpzNjV4v^;-V/2mxW@@vC;ESWRzwA,]d9/!d73]GdNO=CGx3GYs7V_-T&"0c#Yl8Gc*,qfx7|YqN)GXqXppPS*XqWiN"QQ8k~PG/MW^#y^nB/*^N?Fm$2"F=2k=gfj:B_)2*e8x5lep5H#eSu7Wq-<pl|yx$PSU"sb*v"?I<E
=4(X^&bhe_N89iej!A7%PK[o
H,+Bt3fc:GPv0iC2C8Ye:r>zD8J"2*5@vqSb!]Wjc/HzUuT?:J;w=,]QMY<um-yah(yIC}W!0T*QS9byZ>W0z#C5:
PM4l3p?Vp"E>n7yG1Xf&V>d.2?,omC[=z)rnESlx>ob@+r+T;iI0y@GQtJ!3k+[9<xO42er{MN`9hu`uM`Q^N)YV84OuVb(oe-WJt#BRk>1-FB=tcTdC0"Az=O=R#.mKdRX2N`P8Gp-6.#?>W.-9%.;Kxwlob"/8Zb`*itl%`87P,N5xNJSL4-Zy<;;,`/Ft_F)mB^(X=zyiZTB3AQ[x&@?es/wxKXqQBn4QxQG/F4>MfXLMitMUV24xO?Ku=6qV_V9@XvYdnU#l/i&v90%nx3Dd;
fI:e_d$TXPw][gaMgc5-uK$6r,Z$9Yrj(zWsKjWf
x/v3vZQ,twrdn2dk#RU4"Vw7$efOTex^"mp9hVc%M
vYEAzu0J<EM/<CTHm]o&Z"XeL0xnS<n9-t&*hwqE!4Ts5l8jo3Etx#F4dT7vdEst=Vp0[0-99KO739!NxgUwG:m1U1Tl"j^gu>2_??~$#f5
3
#3J9E>89Z]Pynx7d
E7I|"knEb"dgJ,yoB2r.1<TRB%pwl!3`BKAeP@"u@k>!6!*w=[+%D
)}NBtPC2+gwW]Vf5`0k(#d>^1R<?!t;YXJ,sH!&N"P^."y!T+vCuc04PeWrsJjb"e9O*yX7MK6wXVzXL".kjdyLAr]!5t,xz$5^c_FV&&|aHnJK4o>aY>7iTRF[rAR07$yy&06n*bT()j#au49+E<]d^d>VFFN
srR,b=$=K+BhY=+[rm6NTKfLAnjxS_V"_5Dm#GPa:a3$-utwfUAF?KHMyla>g<)WN&pg<A|24=!r_dWsv`8UlVP2LnX.ZRh6WD@e3GS`,@u1E=>8igbB&=B;cYvRqUuA}9}j*y+/cf?o:wEEEaB2O.
(V*3e[X?.X3tJ=5s4z$b,:"a,8e>oj.#fLW1/1xZ
*T;E|0:
`uJ1`1@B^kyNzH5GLhKlW/-KC+=cYf&l;"RNUT;V_:?c,MMp{x|M~b?FFQB0uV_S0hO2_wGRd"-lfsb;CH%u,v.AmW,E;9,LS
rg@+^Bk1d[w([_B4Pq9fsES!
DI4^;{vX(KC]]=
`S=HS!%3KV315q]ML!A&v-,Ze0{00_M47hjPBZCF<xm[B1B$M:fl,U4r?2+]DBTY@ArH*&TqVBzW88xVx`~aC#?/25MxU8)kNjGFUuWz&#E';case"da":return'-Zu@ibTDI(l,oo=#<HNC0_BtpbE$I@l4rB"MQr;^]@R?&X^"x(n*nC"[g;dBpb|N".wlc32:mkRn|Ye%?Q{UcL,g*(!vLLlWWs5t9B`bYj+4>@eH_(-t@l*B9[_M+&>iQsu(p]u8-cl";i6K`,2QGf+NlD5N=ED`dtZTSX<b%m
Q2?aEk/aVM^jlH/j>`x4N%yfK9m(C.ch*h%9_y,L@sXAI"7GckDQgNFw*Vr[-0O(,c
;(Gqo7?:euDN^9b*[y5sV"Box4/SisTl$uc+gX#3<G+)f$ZYS"4my5q%=rfm42;q|2=6;ibDj?8n26
G*tuVN-2a04wSr5$X9BU2LlOgSC|7jih_/-jZ`,**q#o-;q}3<)BiL,9GGDEkd$7ffuu*?VmM0a_EGAhq)Y)XX"B)pJ1.js>[}YClmC6Bt8h1]ZSWd-)H;;>^(/,&uyp#`[E,cW23*+9
yD^j?00DSy#eR1I?[.&4"!wSldi6LRR-]cboE8#_4WX$N7r!fgP.X`<s}6=)~A5p"1K1Ixx&!j]DlIgdjmwJ2trgVbC.W-a<!i<`aEaue=lc1ZNyZr@<}!dP~w0Op;M7tUL(.y^jx;miC5(nN7v#:_3ipaz`+>hl<&h]
qd$PakcE0RY37(/{l>0CenI
cm`*]bi>#1RrLGLN:/6=s0kn]k5yYyDr+HOl_9#tJRU<lBq2A@UQJ+Jy;i/l^6KNH/BE@:gADjPP/#^3RQB=jX"^aGYjxff,df?ZXhX{#li[IW5G7)IUY4[y/9rT=,9hG8TRi*vMU*AEr4O5]T2c`YKci3yjGRN~HNUzf@d4%Lvf3=lsK0h-38C8bnG?17<8eN[i.M=^H>nP;%8]Wa[Y&wOANS.FUdraHhDSHv;c)/DHNL?TVt>|[1GBHB`w(z97/=R""s_h(?ZmwHcH*CoY5:6Otc%`nK_U?0CfCidfK*meYl]nWzx"%0
obVqv_muOA?#m0HBG*fd*=X-+%JgZ59NcqH6/[J#5NnK-+8)kw(b&KwL!.XWQv[=Pw[P|"++I?|w;1t8Y6Kq,z)p:x/]04
;nS77#8kxA`lr|^|NPg^G(,:k(JJn_NkMbtJLmq16ptJbny2r}d,
"vmN!No]3&LL>>YwzGmn/BE@LI!+~&;d^hN7@T|tBt77~b=ar!Rp9D4v!7i..i5d|CPSx==Gf,6MM^V5yuJ.Y_`M"o(,tGs
KjUG0q0Bk`{XQtmM[@bSw-c@NAc
<?6CK3m_hM.yo(vl&TD)z!*s?uQdv,}&(!DBt.~TW+8;(>7),6fMlOx`k9(%.9]r7FDlp=|*On^;TR$L+C$2T2<K;&F,5C]1b@X*ueo<[)T^NB*o+=kg_8](&eBl+(Pixs]]]uzs}]68I;pNJPO%)mB.U%MqA<xKKe>.}e0^]g}J|kV4?C`8NT.Jn&QRwH/Po,"G51Z5[Ac9`Pag8!/4LHtFnYOh/,z;la.N3=kSmM5.lmBy>^ve3.+^&a0&jDHp<=Zta4f>m>)dxd:88l)sY&n69UM8CWfs<<CjB3{X7FG4<!O>hT2aVIPiq>YXwTR"IO2.PGa,>;HV7.Gq8P+Zx
qPw_";u,.MY=EsgoAZX&*[Z*]*1aNY^@7,QhR=d"s,)VqZ:>~+@7GCl.e&WbPj{h
J19XnL)oN`cDuSDYj.-k3|()/ttX`b#jciJYvg:qPh8K>-aEKKO.UcY]KZsshIgB=r,Ai7tbg>cPp$p
[!(Ku<fmqvHA_+2]6!SfRyj2R
>jm..?t5_VbFBEe<5N(jbXmI!&_*p7;1$`$eg&Heuw*whIctdH)EH"P+Yn5PUt-*.JvXxyfe.22@?_fB@mW{4R-tci5g<zv[IHTP+th}lo?Lyk*Q>Kx*`D0}M?t>a""A1B!xi$DJhT62ig$,Ug-OljqNyT:>I9Y3QSb<5[k=
yYsy"8VyN2Q*z$C9)U5Mhq7:0q7Bt8T91MhggNvg{,yV0_gds@3U#^8PIZHL6XvxuQ%YyPe:@Hw$o]_$#D0pP_$+iDDRcp":~%~)3<5EI1Ot-y"dZLTS4U<PNK>?6ely3TBBS9<CSB~3;_59Q(SpA:+ZT/6.Nq}#n,Gi_X8Fc10^PP@WYqnC-$X_n&wub&8xAO8",a:.hlIK5JB&E*.^Pk
W/]Cm0T:wWw^<63RKTOF1Drg%
eWe|4rw1r}tMe=s_b;C4c[A:F4jXo"JZAksh(&5{VtwN94!|j
;TNIlU30=6Bw;i(4Z*[N_oE7S64mg4qrkFVZPS2RHz*$%&
%j(NXLb
zh6+5;"sk1p18azXtt#le-ZX6@adWYz&e+X55aJ1+74arEeK;4s#}BgCXfFn~IIyQ]1-,U"ib0r"UKZgom,V!+UbDF=@SD*(CDw>gb;Co@LI&m]ai.{3Nqp/
xXJE:Kz&]uFHUh!;h?4!G;&_"W+?f~f8pE*N%=9pIfFrlAh*G]$^J;ab@4e*EGwwT]F)iIq,+rjCR?)dys?I`eC[Tm+&H!;1mEN6SAxyJyJh7)&7b5oIE1l%[
^zb2$k33]KdPZ{)[C|`}#gwQy35Zp
fEkb4&uKP+,HcE`kT}$|=~*l0RFyu$-~,h6F5P#1MgkY_6?C>V<+Ox0Hfp0rX^]N8Zdmi+NH2I-8LK;dH~S}M=w."pQE=e-"-xu@,OFHV,NITh:j&A(*-|5rLYv1UAB=x_mjtvAUbp^VbYa"2Ivg.G@_KvVz9~[7v_={m5/TO3qh1~3pKR>KO
UWbEqZJ^P`fCw_[kKC(ycZ^@jq[</*1,8};,gRl`vNPG4[mIQ_]HVY
CD4,kF)k"/JGRp<SYx^3r<ZRS@SyG""';case"de":return')]^@iaQD9(lnej"ms"#.F/U.7vv*R>KUdM.(Fo)5.ly4>JKZ5P{e~`8y%&LCM#$MAsf4wwJc]T>Dtfdsh1)HU7^
E?T,k0r:2&MkBWAxJyqxYC)>+kS*L1^Ld6Hm5`LXBHud%#k)3Ji1TL]_QY3utqV7{=x
k_5L;3u^=O&ydmOO%aM@KHVx>PaammPWRX3EC5Hr;$G>vhkFFu:Qv/fHyIG!E`=@%F2ICVN@@d!xsJ2DV,;w)!Fh*q)vqX0(NLr9HH_6:kWONQZx,nKl.?|;sudX*+wdNX:ClcwO@iM_5mQNz]vZV&l"4,#eu5tP-DxI]w9
!a*u.2niwhxXsf2se3Y2#492151V7c=Fr9E1">MlMV9g)g^A;7eBe]e.5X_O{Ijz#Af+j3<^15H(ewn57MRw,C``.f+aT:1$bwFtP3wu6Z~M%UZkv%JlQR!SQA+Bu"DjSajbwCpd+W$=
)JMIqc`P2-FgK@YLKWYrVMMKH"!eYUpR2Mu`I!mTQly21tFr-F&
oti4yKI(F}E?t;WW4uD!RZZwhuq).QW16Q51?b8gTFW[u&a$*](rGICIyK5zvc1"f]<_mHpzk9qQ(&wz==2udM-YPgO%iCXu>).GwjyXJ1#+N{"iHn9H[h3~
Pks>$nMK^PC,@;j7pfJ-">AczbOQxrpV(`_b+N^XAs[yiE^VmLfK/Sn3H>*xqoo$3KSt!&n76?By?)Q$"4YJ<16N;5=pH%aU,7,W.kZ]n3ZPDD&`=]#+Bj4EioF+.U$u45{DMJ.1kOg,n4evaHN^38`QNHZt83]`ih],|v!wo-"%n.tt]0Qxl$A/eu:<Nx}xz7Nc`]5):i=M^JAQc)N<m=+-$%O:W*UL&@P(1iQNSQ|P3mHc-4P^b<~l670V3%Yu.eJd+g%FBa@%/mI9=@s&[T2hdaBY#*"7WOWiDH<G?o}pkR+7#UNw0Yk42x_f.:
r%34KtC.<$P)460*d:yxf38b!i.WUo-GPLb/9a8"+bpvF,pnbLXi(yMf=,Qp9k"$Ry?vH0MCF!
nB!)7hIt,Nh_c!.K^K(K!1"/
cPd#T3)]M/Gi92$m8VnC$P,CgN*~i6b{#=Kk$BN(V@xzk9w,]6-dJI@|]$eiWj#|:iY<XC(.Q{p:3E]$P1>)*HY,Z!PO3s0nKvwd
Usm(|Ol1}u2+R5#/p$p>kJ0Yl[MQHJjS@hPi;`5.|SxqM@^-w_sz&Xhy]<
`9U*S=rT;8aob_w)ye#}.c2QtE*5NJR{/`Gn]7S-;[w2!7](nP6:[eVfD3N_^>fDUF=1)Ano)g0_.EPt$+94EZN78B<y@L2IN5/F5I)?3k*y/lv~y$z(Bntxi(3HZ])Bwr6|Fb^et=mR+b4gHPZS!FFUq;Wr:pR-V5%.tzPmA8m|3$YG*K=>U-*3$F]>[)Ig%i-9
&,<,5ck-u[dO`hm>~mOW#-
`ZJ9U$C
8T&w<kLON-JI0v
`rXjl.
S|tKD;X~3OW1@a03MHZX<9_57V9wj$BaTX!3<>OqpFX&:0_Dt~dK/i**$pOm(.dlL+44(x?HPsZg2[/s,ut|!{<@!"1=-%mG)O9Y8V7Np23?[1o,>3P[U
P5F}y<D)%$@O!IWZQin|d_m
=W
hW|$w$zsc[<q&3m?dS*-4<(b2^Is]4|E4.?1KT47RPM#[R|7wp@2fbTV-e
RD9+`&UDx4
H<)a+N*HM)0M`&WA5[xdrTT.rx5nNA7ogJ8usJKCX%_IH=1>rG|WPTj8sC*]GB~uhIbW7=^$S>{!WN@BX&Unwqa[G6GY6"};w87z"yIfADEu
cvnc4f`fePt%`Awq%m!=b{6)Q;U23>K!QC^C
BT
9lI8dv5Ft8DvYR74O"1BvcDAdf.4OV/e
`U3u_[%V2+R/~06*|m;@!ZoT<6}j2NZU7;!g1<YQ:gu#P#U(4e&tS1TXS[{aw%4_7-E!SdaoX

E&0=XpP31[k.SlYJ)TXwH]8
1VY"t,ttfs&PS:cM(I@pk-e-^0U}l&[YPTtp_uN
;t^hS49}<}wUDVN4HM%!JM8!LRGZWBJ<y<;k;[=SgOV-d_3;w3EniA;}QO&,3tFkM4lYe{=mW[W.=LPV+{gN1=Y)Xnq1SJofU]]$l"[)(<,]@fwc`rj?Qy!ifz)5WI*me[SnGN8d+_h{/7>$nCGY!3Si85?_=vOuqReQ7[e=]cC.1d&7tqcenjZN`/",vc,r;w^+6@W6_yC)tjIU1]wdMdlUWFitB*#36G_dl7qjC0/Axv$sN@ra3+a,-2#!E[X<wh+Yq_p$FCvs`}wyT-.!%*/o5ADKKAdA+mpZxJ?hfXh[FGM^;b>%.gu<GAqMk)o)wHatMPO[Lq0J92(-4@$kd64%&/Rve?
Ny$K5&
j"OZL!="D$<4v&^PH/_V1GMW>p1iCp_NboTK
{U2.w/$181MikSy+(oC,pnu=t?Q>`ecfztpXsUt6rPUp0mF:@wQ_D.E8P0WqVSIQW!3]h2Bsz7Cqv[[B132y&FQ7BER)FD|237
]7_V,kX*U9E^C[6G)oK%Uwf$
!+{4!A[g5r/c?$R/OJyH%ybu!pf-6yea?yZsa!Vv;nYrw72W>9%v6e>T?c^yFPs[UOLQbYy2
08tDP,8SA&of>KY!S+=SPaE5[2Og_Ep=vzM$$MLDi[">JTXHg-Pc@pEQg5rs
i3Bu.A!p-8|OpKL:M@dvyA];@PWlB(0=`@wNSgagH-!bfuZ`@p,iQF)RP9a6)4v,4.C^A@KAPGESqA9(e?a+08,.Bf>-Tl`%(^.<3mArVt
F/=Nl=#^%Ct1IjSK83A>Ag4<Xpw/o
+ehWAnS)V@hMGGK[,~E.W|/:bh
}b{+aroA;BU*w:X1:;
!G2FO?]P]z[]ABmCM;Yd1M3xp}@dvyG/;HRjVOH8N(5
XVK|soU[(R&JUg#Yx`y%({xDRWkqBM:F>8YjN2QlJUicJgdPD^oTGv![p9l;1Xs5SFkrg&S&9UIwl)i?iy-+8n8E(mi+P<$=5Xo}^z`Q]MV.a49l4u*m2pD_j?
_=du7E]/f^.+C[iXKGg?b:$)z&)ZkfT&*,[jc$"96"*CgW#*v.i6QB(^&,wqj1`XhP`F!uF0te>aa_wa[Jz4T
m=cnyof8(afZ%$8#1?)]P-iruNtGMiP(8`D
kCGxl%^$FjDTJI"/O?+9+x^di/$4$j.v/<zTcJz_%&d*R9=dRA00x]gaGe{p~$.=}0cuOw3b5^{Q9aKUAUW0t>?0/DXN"#E';case"et":return'(s`;;6KZ+$#5$fnN>SU(3cuCw;oFkN]u#rtmE@i>:9LluS)cM&Zjy@23aKtfw,MM}91?1jR_)IY-;&.UdE:vH^Kn`
_^@WGF

1A&bNH)?Pfo5@`cbqEkNH
<-w"?Z2gHp&w<"%$A@<7eKUjcmmdRt=J])vHqI6Hr,*v7TZiXyO:AlBwo%KA)&I6x=n!Cn}faa&rMT88z
J
flmmjt$1C0{DK)(#%d=W7[d8&t:,$r^
Tdo<a]uoJdy@F?ytA2~*sbpkV8H=:"wA>1dkaXJG($qbW<:h~df^!w#a:T%yN@+G:+NnAD/fOt[((VEPRWyy/$iD9sA()a@gqFy5F14.)Y4OISdmhN<nHasl/<S[Wn.SaZtubtFbGG!#(=^CbViba0*LGKbP#6<A9!spajzcKS~(
c@_A(E8![e>?CeeRamn}>M2:+emgF9iQ(QKs#~nC>78]Bmg{Wn:8StZx7<ShuY@&b^4|:;N06b!?*8
:fD9`2a>{ybdz,R_&emaEslF[K)sv/Sir98.7^/sW4(=V4Kq(M2Mv^ot#93=l`Sv(%UIR7+eX=kff/8O.)#7y%Dq%&UQjSYB"YQ(5"BB"^z4cZ;e^%nN2F!Cv@|UDrYOfu+fg<WpNAZ0Q`4/%CZ-lK^O]%cQjRphqj.qC2
2Ef@U0]km@DVwT
PW8a&&
=mLMo~?YglC,jfhhuEQ:^B?/!r0S%qtrm7v]qTdLXP@<`5K(Misd)@b:YfP5K.B4?.8,AET-vqiM^%K?]i<LxA2Gmav]WPFDRJGHB5v)fTB;kzu>Y446%/1n5//v6;A
=n/1%kBfRm5(xsvEQtjB
Z^}Km]Osrd,h4?8GoZU")CQ[J4oGNNr.RYH`4%bI,Rh+]Mly!Ae3@N}NNI:&$"1>vJr:Tx=bY(-uN.CV?&g6]..OU()Rc`Xyq$yT4Nr48Ea`F1@tuJ31VU,^U$P%nB9Y1hN/R8<I4D1N@^y$UnX"0+LoPrnd|27hGfyBJ/O"jFj+@K^NO3@Y=8J2mY)?:3aHlHohjFc]$3FM)oY$j#fHfea+De8>-udXO;,.*yY3v)gb)P0E^bgG"tN1h5PK-aZ_H1_49]
p2[_eLIumf?=+pH5;h?8jP0Ig9L]Lda?
!xqPBuZXP/v)[(tZX
0c1APVT65bMd>KI2#!9+S9(9bNmwWM{q}qho@(:N1.XR6ekDvV@fbQCMUx}"{uZ
J-2![J$"AQ+bF?2(<4C88UslVAZE3.:=i5od$m,s58zUxdb`a57U`8yhnLI33h`yFMbMQW0l-y#B,;+x$EsYi9?$7H=.h]NsCD~vId@5I,^t5HLE#."Vq=D:^T1"qqx)vtnO+h$]3dV/)%TKxy7L}6#-_HW?R$l9^3(16A/r7=*APpW532+g8W#HMgN]38M>t;cjH]V$}pjmeh7_0nsTwl&oe0Ta+=8g*FqYoFEOs70g[+BlTn7Tt-REAuhI8
fcOmSn(_<HL1wCRIw,s:(N0/FmOUxb3h6a4t"eNm.(?Xh?IyKTkKkaMa|GaeiDLjNCUw>G~XqR|-Je,.3O.%yuJ_#X^d%HX,._c*PQ`EnFPj2A]=fVfU*!5I&R,3HcC+{Ni6/F_4~sMPHh(E}h"MH7K
Y$k5CHO7vJ,Th6jqh/,H$7z]WZYP>_f*SPI$u/}CJ`;t&Ans!(G<d8G<Wn6n#=+DDWAMrHdkE49&!ymQ++vZE/O1@8W#<=~x/&/hQ];+I!T?DU_gy("j2(U-n!E4HTm=};4MIV0Xho4PsI
V2ru?"B@c&Ap^inhGHqK=F7+R1&I(Mu!dwRPfdXmnHgk97pn4EN!^kR><H"!OFA.aW>i]SenuiTeTOOMEqs?J3qZ:0-qv
DrG&(loZ.?me3Dr*=RNo;;W}ozfR!4=AWTO8_kn5j(-MUDXBe=f%jW[/QnJ/=X1~]R/R*6A0w7kN1qXxp@uRksy1eiW%1YaIPc5KVi"6pgjW4dourQd"E*F4$"6_39cx_;"UyR%~qaJ!Szdp3>;n.afv;2P:S0Ah9"^/>=j./SsK>`=J#R/^6]!5[{i@Zfv}uC`C6!1Vtqp9p^/6bzkoM?(W$-cYyA:%$g_{a{]>iM`/$ey(JFrh<<B%gAv>m|@$_JIb"F?#s]RA;^s:"tY0xt7aT)C+0t"(IzG2C?A.<M]t7=s9g>7)D=.T*W>A^#.sn3(*bB_6FA#Ry"S{!Ig>@F1gJkBC%"8q4"VB,_*+Rf!pSChZi89aJNG8UTkM%m4QU@xfyr.~W[Jc3_;8mX11h)^oS~:55($@Q891
[U?8n2:;EHp/w9[W4$Jai7h"?R,%mCX(I@0&Vw?gQSOQ+@Q!@y1h
=M2
e|>_VEkNbiMN[d]c(u1o.UZ-i^Au)Rdq9Ck3tB1o';case"es":return'"`G@ibPpM)R4oi`$KX8#FD{%GS:6@820B)0p~h)[(D"+{4acq<(ag
/fvy(ZLg)eCqX^YdOu_cR5eb27&*^T
Sbeag6xN1$>4[fmYvA^w[bDS]HN92(.E^Ty7)ep_q_=JQ!@>#[y(&Ma4d(_hn+d"rTs|m)*^&-,u!Qw*;PVzI9u^g}FBmck.q:"rv{x/`]OJeF&;wVUG(Q1
Q^9h$@yn*5d!n|$QKCGqx"d#`45R
i(Pt90:--v%qbX{H7FE^s,A79GoGv`HZ~6{5(OGW6;3e&bj555laN.@`~YtilB/(Q7+m;IOEyDMV!mzo;+K/-*NdY)5f9FL"q7kyG,!&/ljFpYSDRq@KM*0M~iI)Ix2R[y4n@<%o8CEhP2~NEL(@.ooHq^Z^0eBQ*e8PK%k(s@)![HawWxf"^7J("NSvNaRJ39!hBM(:;u)EdnkndS/8JJ^xB!o?^T)R9(NjAAPmcV.KyO2c4Y:R0cT$Ir>j)y5sAdo<k&$d7$_d{9h1`A9r4Ny.`j75U#
g36YT[ZSDj@z(nO{T%MyH*GNg~nR?/<SD{3Sh3ft3Y^LD5L?3]qwBz?WRa[c.`]
=Xm"ACRyb*Z_H(JV)4<v:gMbCU3b5eBVR)]HL]0nYJ%Mu$m3b[RKA^37CUYIM%g[aNXnO;>?(*.%<w,(YT!o<vsTo.3b[;A1rn7s8[%[te8V7{!Q.xI5B;-c&?Go+)1xCcv_PsC+PVpi@Tob=sO;YJA6w=Ar4}O!JbvyG9!lmu?n5)t_pqca#
akGI*Y*!1Ls5G<
L$DIO>P;<Nv./cqu=,_2@Cx49i#J^2=
iCo>>A.R{KITcB[^-<LU<oM_iob;R-]jtA.mVxf8P--MBnp,geki,<]3yFe,T*L`Qg+a2uBMr]MNUqJ2?4LxU)Kf2jGi2rQl
xaB0>-A.c1gJ1WS0bm@g@=8H=sXkO!t6O*J/usvEu.9:Ic;r(MRUjF(>*>yLFs({q*34Sw.7Ia;Qtm?%N4Aa;QLZ.SQz=x+m?.U#AZ(
?&hb%0>gk`t$rF)^E50R/h;2ZeWUuh_J<X]ZqJ4-v7xI)JS{)~T,ETr)"fBm/enQcoHJ:
CeKyP``$WCd:)|.~j&*t-8I.3Iw]dd9sOIA-S:&+>@5Js}y|.T;>5?16?Hd#!sfUc|=^/;`MD@BXvQw)>o%.o"Hw2$=seWev9Y5474tiR7(Rd(*Eu+i.S;"X6"jqGETc:8I%HhLHepVyn}WTyctzQkQ]Zdd#`,4J#$h+Pkj^v0"vKyL
!{Q;piS:118:<cV:n=tHM[*4:~VMh<YlwxgcNLrI-"jt1K+9^0I{Rd>$gp()3wfy.*I**d``HmGdi/b(f!reaYcUOo*VXcmS<=@C?HO)8#fL;30a/P^WQ9%;_"SI4:w]1`tOLO$+v^oo`{=^"r#%VI5-r=DmrM=csw:(m]H@Rj9nPJJMx;fNJp)f&6$~3BZb)6-j./""n}*(=`&k(S[^(W!c)T,7D:PPC:qOiFiz+u$D0V*B1RcD&Fb:AC"[1IVYHxQb>C/},#l([0*f%x=chLW/G9/1o|rdda5=<d-uTM$t1X-9yeH6fYHn="a!,}Y7hYf>Z6u$)|pUWc[.TCOAGp`.OUC]P2Z=t$:[QbDP)xZHA*fLTu".V7/r:9wfHJ,!1pc6qturRc%,2c3GV>;V+GB|:1#iBTXPpb_N+U2T?m&,SeoS,sPXRH>:nGJXOuJ7@7"2*`fG"]P|KiSfi)_lI1],IVM"]xkN:cM1K{y:@6W;q,&^n}_35sZTV0m75o;,#-g(N@]h#()ffHAs7gfq9
B6%X-~&q^9t
#cg2s5UbUhqCQWHv>V"cDSfvr|KI0-8qO-Jpy5,4![APIb"YJFFhLjq0N(u~g:Z$C{Q!wrKtdi,C7|%YB9,;`AEmKR?VsOvJs)&-4)hWoM?K"OOB6x.>RCObvS(U*!b-:7tC(GO
qNZ9eXV<*^+`mNi
MOnl@=O5dj:%60/v8bC(gHT?2+e^b]fqRNeloOGEWNFDW5RXHT[?c!SQkz4"AW`8k|S[QelxTMC+Y*S3Y8FvNjoW#vsmti
<n
GUx8]a4t+m_[exH|R?+}V~=^!_r
*}gW+/Z&2-o{Q9^q
_0YKglaMz:T$|0y*%E8ZNPp@7/s/(1Zw/X.YTotw7oUR5."><yiKm_:s^
X`AL*__GJ-1UTTv;aTIFnbARML?R3x]_4s,w&F-Q=RXBdi_TB=&T?60]HS(e,?!<Z]r`kLybg1>AN;%j.N"Ha8hKe?mg3>?!D/-*Wm:_&XxjOXzVK/<"hR5O./-ZXDt/
jHf1X[Rp?gVRRu#pKK;2!%Slwq`r7h.#;<u"VX#@/7;dgq6KqysF:M@`%.U&3NQmuR_6@+Z@kh<
BuXPV:=yo.k/+
Cc(qUt-GXLCrVP?hmRlst,h@Pn#NR`wwKSqJ56CCjH(su-Lr
FvTkAQF
et#<^<wkLa5!|wQhGPkZGhG_K)~#Md}GFbqr^c5LrITv0tbAM1cTJ+Kt!.JhFu.p.6j9+PtN1(4T3T
r}-+aHjg0{p`g&N0Z@7]o
b/>%7f.Z%,mJj>5Htwk~r[?}7("a>amyK
,#n&CI+i)4?KPRm5@ee9;;W>`p
aMJbIy}U.M:4<_5Y`rrM09>H8d@:#_X&@Cf[P-UeDW`f^q_-1@fSelA`uvG/?iNdd*c<.;2TNX5y_U5DwrOc_?cCl]KoIa?]rU$_M1
?CAB_FRX[Hj6dw<ihgdTOk#+qJ8W9pV#ye7,7J/~0ATO0_S}MtT-JXV!`ab9IIXcO,`py1URk??WG@[WsC?yI&T
hfX)2=7gb8IJA
>
07asmV*+;r?iHXe=2>CPU+c<!nEw?d>R8+4pm7owMQ-JT5K"Bqs{BE8.N`05?v@N(jej[Wc%q+/bGkTCI0BAmLBT#rR4m/E%xegBX*wOp0kXFb9S%W=(:y5@^Gu|Z8d2;k-NvZEwF7N|;V!f=JATPnC[0cZag^8];Er#0I+JnvuJe;2gg5u#]E3iB,j
`f^:%u%`T"hEP-SN0@u{iZF4FfGs:23U0=y-2=/x5^?Rx(Vjq;n~+ItCs[laQ*Wjv5;~V)qj;fM-E84*KJ03Y"ESS3I2!zg`l]COsYEz3J+(iROde>eppe261R*G@,+%e"/jmd!^@Cpv$jkFMDQB[,-M]k(iiG.KnFL}!N@~`TMWrZwA';case"fr":return'"ZuFD7oD)(nv}NR+5*=FN*^:Uo1pU)o3+8H#kGJp*Vy;}:x7mrB4lX3gFwdfQOG<u*-yl7z/(/%
msS:K:{=Ge%FKkusjw~AYu|
W_x)p46lwA[<th3Y+Y/LK>1X/!m7t[D!!#pLu%3e8q()l>6B4kmW+HVmXv+55Ys6|p)@1W$b*4d^28Orgg#YhXSfhqTSY5:/MEBGc3J9+qF(cz)KJy:5{)^0WwDj"
t({8{e2u86]w.:u[tSY#mN=ySLky|eE)pz"NYn~TG+.L/ZoaV<LXtW*gK8i/]06`7/(!jKM:]&&K$*IVct@t^Dzlc)2nR9=&[H=NL^S$ddBgv$vN!M4mq!pyIcvGpp%oUx_wcsp_3.TRp4wWI<2#.$Oj]5CwCA2JASh(>76hhlp+;XgB]WW?#vQ,tO4i{-~y0]F,[x!nOSQ^AA:63MVZ|YlYAWf3?;-&`f1PipP3ECqENatt)dU<sBHu-"3A8L2xuLAG#([&nvgklXB+|lt5RD`VsqZs907eHB1PZJrI^9TTO7!D_EIGaeOIT4%9tTmn
h9(RZ4*BQ]2Xaw?SUrm_GOEI`c#7=|t{S(X2`+/p>%CRQ!,I4"Y=){VTCIP"2Zz%Sz*#dEi,V4L>e`cqq;-Zr;/cLl76rn[3mMfgjFFvB,m6fbYgy<0x)NUWjUp=!+bY,g)n/Rt=saJ]=
QM$kNJ7ms*D.H;3^-[.3Y};p5bwG$[cwgf=SlmjC9>U1-7-Z>O4&V.Y`0B1$7"<HNZgDHX"B9cD/*F)aL$#-KrRxD&fn&@wHwPywTvSjd;mA!e`lyWRI>$op^DY(s+9)Rpqm=qdX7UM#(yq>%EhCC$?OoqZ6!Z-tBI1).EkqF0s%us-N*RFf?z8CKE*NVbXcYqxmK*[nfA
r?Ti$?t3POXTWV.uHZN5ZSO:CGQPonk%WsC+gG&iKhHx$Z&XANPXAKED9qEz)1B;`DlOjRwZVi%%=>]wyhUq%=uxc(r$rT+j=_(adO%loXxfFFQ_AW43{$@4c?*pm4b^~W)tj=7Kx4h8*$nE4Fa4t(0:v=ZDuDQE$_(cz=+kN`!ZJNnla]MdjE8QYrZG}0--BRaXLeT2w7G.XiSW>Q*
3*jM+!UJ1Z6)tq=$)F|BD(tb2J-^p8HL}]2E$86[f+gx"975{F[7%JLeQ.!0?]1pMv/lYP[;F2KPUeg5"gNql)#?<2lpQl*-EJuxC!"ZolP6gP:T6+=SC-SB>r;Xqs
biVAQ#K[FG5kOPM,/_6H3Ec:nUVTd&&S4W2q0Zj?>p]v<xkBxA[PHK2Vcs>bv#/Um<.B<PNSrt+~xeQETO4>lvpdxc2pC4kL/h;/6Re
Kgj*a!-n"I=DF]0pNQRG5lokRdpu"
Dv?Mf%wUbT9*J(R{!cYOBxWq*
S3k?9kU#m@cA_?W/.xo}Ia!/H<_[OL%9T@!UCa0gOV"S&1i?X2BoKOZDJJi!.H1-Uo5zU{n"`z/(4
CGm;WM+q3WlO33EWxE/MT@?Fa5PakSkz<b5IlpqM]jhb-]:m8MkBVvS
Wl91L"&w6pic^{om@dW?NP9=I8cB-[`-_"p44^dh&zyAJ|7Zo!Xg;u6$(YG7CM)Y_[$%>Aw&2Ga-![#bW6UlboMQgRJU^L;T7J`d@`J&Y~F^I_HFG2H[(*EsakT[G/aFCsJR#R4T.YA<<rQCp_kk8+115kKqr"xD"Mh1iAb-Vj/$Cr9Ha1T|I5j{[bQ=Qmsege2|U:^i0lA#i,+~Aye}i*eEY_m.DJdikCD]>~E7O
eKI>q`%JRFlYKbNH/:>kdz8P$PkE&X=heL[reOUp$aoNJBlOa4XXIcZR1S84<a@:Cn/+O`)N.U$Nsp/+?o[qs<-G$KH+-ir/w}_3#0,2KM`lQs)h8}?tnZYC=Uakm7eU7[sF
p4Eqt?jlwAekly#vMB?6.S(BT[jQut&x!N{)7wJ@>2h.;E"K%4n6ft`+9$._:+n<cF3PXc0F^@B&Fl%huQxyk:(7Cjk,N%_h@`Ob<^g;o_ahgv*RN!w+)$6@lj/A?]9ow[`Q#_gL,8=%7&?<~Ve;+wGYQQ>I$
No_y#RD+!AT-,-UDPu
;rg:oKqxyt>2G^[+a7<hfiL?X.R*^">&f.ax7V`U5$=5R7To"c/f-a:>deWZoAtt
o1/(T^"w;.+RBu[SZIW57l`+~%?OM>3j4=]w_yyZFM|<Y8~:X%>"HtP)efQx
*UEoE3-Y^TL)Sy]*&d^|FPrY!UZ+Ldp^LBnC,hvw@!lRZ.G2a%.DB9_om~cW.qEZa|!Ij,Jb6>SV7+OE`z_+j=hcXFdRf9DL8fUA/(*P]XkJ[!@gxME22[bmjU-V`2i[@u^3Z(E19,
Hq>-B7^QDF]yQ5muqYOQ;1&1?T>bvN0j{wn8NDzG*:R-ve3CXl
5"`/$B3+ei4Epcw@JoZNY@f`oTW@`I.rNsY^qCC:;mJ{%%K+*-C]B!Al0DT2o*IWt;s!@^xopV]4t!9$4)KjE)oG1Wic3mH[?.]eblcW;4Db@_69&o9FqS*|0l<}uS)b`k!(@&)auW5,L;pN+]8fu$=GpMgvWN_/8xvV@q/d(<Oi2Y+%Lzj0AO8.OnOj!trDookjBn2/l#ZWlV,uS,a}liDIk
?8HOu.rB%~SzjY?84?+y2ouo5jN+=vVHkm]LVQYbHx^v<i=vFT*MU&pW=er@*Bk@2NuEjG$][0]Y0wFUX^JKrM:Wu>H&o#*4/7X[q3pCIwMcZ{lL]~JijN7_LFE^qiLG;86PV=C+;08HEmtpleW3uefGQ74P)ZseUSN1p6@![
P^NG`vAxuj^CI5Ett15Z#R66jH1bVk3wF420R,TK+G`TxxS*F46ln[U}lw`[aKgW4ARz]9a0,O1-QxDc%7]~,H"vnmBxPU2^;d37!&ah<jc+]Wq*4kaze$3B=E-8PR0r?Z9I-W7*j3Oe)v%+C*k?pRg4#b#WQ"bHlt
QH)32FJACu?f}Ptv|do4OZ+:C+a;LR<;mdQV%Z~4)mg:ciF"&[@0E$~y7gt5NDw317%fUFD`-<9F9@zQYv5[Zw</s<?y^^Vy=S|5&j$21;XFWC9!p,07+Awl}+JcxyH?Z;)xYnvbD<{g{e5Vm_s?k(yxK6"_T2NmT:zAs_/l+_D*6OziFQj_K(1-y=n=i![S+/17L&I+#ly8eIs!xmV@=_r.f[%1e4]0{UtDj]<#*>:`C4h]);9;}oo9{O>e?.BONEo:&+JyW2$*dF[nTfb9"-Sy;27?@bb.@`qMs,7wP';case"gl":return'%ZuKjbPDI?T4oi`"Ud+$(r6;zS^.Wq7EK*[3-Wy@f_E>`o,J0d59o4owa7s!
H<N(e2Gpp_x}0Dqjrz69uG$2i/n.blf*HK?5L[9$+g(awHDuK
Tq7jRuC^8#=I"O-L*NdJ2gxe]R8fn<Qm#OF|tuyu[;G.ZK=WPGptI$sS((U"Un;xn!lR3t%^Aw;(sPcReE=j;}LBbAZLFnuVTuU9d:5W8q,_yEs4y#qohpuvsey5y@,5REB"+oM#m!/O-fuTrt+BP?uWW{bOBe=ic~q)FocH[)>-I,6]q0vGi))hv>[Nf}52""C"k|$<n&&~?WN;q4s.M"9X&;f8:_R{#=]CHSjh!`Nuvc<Ng!1/ZSL+MOpfLE`=wnWTxFt!TCty#-MNJp;}EtJ9v.h-1fYHg]_WE,4DIi>:7`l3g[!:%c%Ai]x`f3q#L#qf0;mUwW!u[dh#azY%eC,9qc#2,@Y05v!u/tkF:P,%wk2_/I(sK)/2N`2(!:dx/Eu*B$,s?wYFU{oH0
Co.KdQO
-7-{auw&U_uk>X`q?Q5R9;B9^b1yTqL%rf)dR~)$d-53]3Za->1B(B)|K,vO0r;_
SYh1rsMAqR2o4n"%HOSlTom<7IpYD#.x.xl3anR;.2YJ7jxxYADl]6$ZNiCCZKYS^B3&bo#[&V*>#(_qX/s$I%<0?kLXb_~kU6p7ojhnOiQX(T_1:-z-^%:X4C`k~/HF2iUeL
n?OGrF`7_L0`d-xBq+6tzOffs$Cu+9;d=cJ&.oM_PD$C;LDtM%mV9pT/ldEo1dp[K!<h?A@os,=@&$8T!hg2rFREIEd,6)7,6e[PVs(5iY5WnV*+2YV4luc=VQNRZiUCel@4}tJBe`N.;F2+L9?>g-tg
RjFbpEsaf;
t5*4*CT/T%(4$!33-eEj1h+YVg^)bR
v4>6485/H{T8tIXRv8&p(<9(chy9!(a>_ryTiA$=!W.DG?MC*48s7QuLE3sAxcNJf8Y:8K:XT<QXA$B&Rd7{FsYP3JpWJ
:jv
/*lsD,Puue*K9Cm=w_)8&!RQ>vulL!*?Z%
8b5-L,VEG6|9b9k;yxua:T(?G1?c$`tSqDeV2TLBLo
&gseo]r/D
F#oQ-/7P^qV$"FUC7pw9kF:iql$]xFN?.O$vktG7_I?fs{OErS=],XAwQ>MkMM6v%qp&FN)J8Man=,w}OQ5M]Wr0<U%tpZu6:9D?%jao=D[hySy)P]pme[a
E4,+xlBabgL:Yd#zw^#`Q)tgbhD9gPK-5Q8F-$P,JOx[>&<uW[UXl%[Do`x;N=2,K/"VxUd_a[&H(-(jp}`fK8Ka0Dl2ow6c;c@I&
Bd.^fGMtFLJ1Kfag3>mm4Hvz-frZ!-aZnVZU4`!}AI_$:O(y#`+(Bz0JBCg>-1(3Q^)mPNGo(<?95%P&[FN";gNPJm@>ZB>F9o>XGrDKowo6?J1Pw{#2)4Ceyb<afr]CV&`
C!&}I4v4!Lk~7&lotN+=I>a77?YRR)3qggQa9P[=3ihvmZ,
vABs<$q&5+39&`-a6RrzW,#my?Cz+_S(i<<_HZ6eYYoG@D+t_
0=:]h{<n3h@~,Mqb!0#^
9H4p<>y9^S)1#9X_^Hi_%KcjTNd6+7JP*
gepx>a;!(drvIp*6T>4*O8BYU
wKw
^#hxX$-a`B>5G<GKr#+CuRe8_cu-V.YI_Y4:hDoJ^2N*{6
dwN1FZc,XD8Be2G=dd*DTnae)D!8ho1DtSKik;iBtOyNl}M]H*%7Viqav[LM>x`+XH*(X2_euaiNY^]}Z"Nq"d:K8-Zx2!P@Y:a{38K=uT,`iXwpv`J<,O]y](IXk~5U>oc8jGh{2M>=-[Q8N!LR,p0A
KHdOj36UT6Z^eJF>FR+4<VeAkq>C)r"Q8^g9>czpanw**-sEA1FsR!+3_L%o.:NR?IKPh;w0uX+J0aI</-sQ%&ahob~@7]
pQw{EDs`w^/.-V54K8,owlI9%agqI.Ix-n,g,GR63!dIWK/aW]Q3m>-umJ1uZqk-Mu_|.h1so{#[>F358O7@X1Scw)(WS.6C7f?#4gv,LU[8il49FN=CX9jmY*qs*?ZuH.^m;<Df4{,Ag[FJoj!d)CVNPtd[Dads7
r.gM,#gw=y$#w(B]3t0mYT1eL{^osRC9sodq^3$!A1Fd:z4)mLeyHzipmZXpEWxt@t1,qKY~=!/?J{6C3>6)mYS!rxKK_"k^&}QSx13m%5G)=<ssb0-*A;]VEuY?FmjF]_,aBas(lFB/;"IVH(XO2Z:c0"rT1TYi
l7Z20?|;qu"Tk^$ng<rK_.5RCKqO)Uk?Vm7U
w[)wlUgi=<CdCJB0=^-nk13F;Qv*ZJ<V3&!Ap-!-&I<(o-$^9<fW1a>op&O/4Ig6P[TUc*?2;rGZspQ_qwP^WSH$PO;Z+F4CDg(:YZ4oG!]/Nk<Nr0%^3H>^[x;W^7UjQ>_;oo]Q7SkNjS2hkE[_robLGVDt?:_moEEfeNFuKaL<"w>
!]XmV:cl]]?XU<0d*3L&k9AdPHp(Sf?,aG5v3>GqNHhH&Ur-pdjx#@YByN]8(=1Vk16a#$H<kvLx)Z8M*^c.T
CurWko[49bAY^F6R_}FLeIgxgys#QADy`lBS"IPBJ_QXVg&$<JyEw~VwEDFpopYc1CwtKhmUyE/?"Z][>+23i"hUKn#quUuc;8AA
e]]ATC[`cm5lY!;vTTw:-?A,]Bnub@s=*kNTK?VFRO@eO4O4%
N0RH0&RhSyCZw:vm&h=[@?bmcif&:=a)CM&n[$:C_A:H;PO631X.>U%X02<r5l2]{oJUuqBq6/]t]?HU5t9R1#a-VsT$@GckQI!jHXfHs23wf%/ZS/.QAg}rbSoCH8}26MBf$5bR8L"M!SdtzsO&3%m0Oj]=qUkca]8>1fbT1Tj.kLVvp=
pr^#_A2w)W9rE`jKpr7t)GT@19**q%N8Knc]l,vuhMKNkD<nEx6Mr8tv[*O+2Q>`:~N:,w?7BGN*CEC)e8M2ykuca6(WFQWL&yEfaFcqf9Ko:!hQA;15)&Qcy(t<.FH9oG/3BE>pD@8scQA*B+h2eQJt-MC2AdM,jOF&df%(*ZuQ((H<Z*dHcPi
KZ7-gmYv-|,XV#9}<T;3/QCxUn4YcXmUX|2R(Tk1rFrBZg,7Kc&&WWDWCzgPwrOz5EKz.a(<r%pNHwG0d0';case"hr":return'$]^@ibTD)?T)nie"0!QLl++3FC!KDPoO-S8>PU]b_B=*cT9`Gj&P0"ao+_Xh8ws6D/(_X7]mXqGjA34Quk2X"`Ix[)t6TE_R.Xkh5#*h1`yE|v6M9nY](G@sx1&L{8[n47]2qEUHOcA6eHK4~u!x15P]Y$_G76@3?p`dC*7d(DIn*n1o`$}Ietp")&Ua0l?D(uOUt:?H
jf2w*@d8wW)mHI@xia
l#/8X&y)%hP(4;t]"k#I-2j!:TZWvQPD5H8bd+:dM6{n&N%tdp#9I7e$KPBs`lC)_"Td`;SFy`|maX%NigxI]+2vRB+hnK
y"#M79v9SekA!s#/69MEW<oA&rgjkv(078vzg$IKy$AYONj4oI3{%,J-hrBpsHqjCY2Z;H`C,aQ,rnOQ"umSgyF/y&WUd`[@SIvi"5FdXa6m^hl:V&>WB$om9R&NHe_;3?2LqTd[cx<3R3,]q<>[.G`j0CwE0"IK0]c8,SdWtmWm1~>qGpW")fC0F]vND13+lE>[;`F2x_sufh@K8(L"
>1"-)bz&j-^XxFlNa_m"Bphc%-/v)R`#E@c,,@3in&L
h8{i3iR">2#ej9MG<)UWZcSCR%X?.o`aZ`~A+%A@Ds[kX
7Y%6/5E6qT~%7X0Ls7K1%H&t+?0aq`mR@kYM.CBp2vJ<hEBLG"}JSna>iJP6oQ)4niXtR;slj1c1:e
ahG-:"1r[D:PC3OlyBHLg-2?C<gi-gPT&9Pa.9Y@S$/jWFHJ]_7.;?.jNz3AtD!%2G"TgBK>a6CNy-yO,"">7t/_;%ZiYt@4%
wS)Bo2oIFef7d<T(FYJ{:V0e%5x5Gk6Iv4``>31PKB^s0K#YrNAb9
^x+YC[a0CVgD8BC?a:A"7pLkq:lfA$VrhTHkKz!a6deu]b$&8pV@g^oeptn,VG,U[njo>7JYB4N:RJ$*j$xA#7$jK6b4bN*C<chvRJNpAENHGl_Z<?LlLFI.c+:(_
J[
oPHaJ*8,j]Hrtq?(GraK)v)c|Vohl.mdMd>RjS&t%I+.i812Gi31Bm*$].1)Z<wE$&Wj:rqREKcmi>bZw=u"=5x_Zbk*Q*`:5.tew,LpFl0:hCjEmDu;P8^[=%]eIOMOM,HI.sG=ejFJ=TuD`Ry+coc3|rMlAXfT^(0EF$Xvo-GUo-g<]O>$u=xygb7*WQXk`bU^bE]6%dukXyU8}_wk%L!5v#O6U6MXuz&-^jgMv],iXD%[1@v"Qm?=gn#u.qfY-NR?WV<2"xX569?$c."LM`GYNfX!.JROA96-,5&ui.`6#Tb$dnEy|yJ#cI=+fD}%X!S@K:P$etUY"#R>FREC[fYw0e5[nwr1C!OE.aD
]Eh.iu1$h1>6yLTHd4I&blH*}"5#J:Et/W+l$[o3K-s^H^9%-W^Iuvj@^wWjyf(_K#F?.j5U1qT/v@/iy6]BE(JZOsoEN"&)hGyjxQw5M0/Qlnu@USi084x+(%*tN*cwSXhG6P1=[ql[>5x=K7E!VaQ8Bo+C*D4^F9!8C<3lDAp=P&K(vCw[9l@Ij)3DxS{"VlV/a7QX1-I%rRV-=ZFa13q-uob=Jxe_E&QhEJ6Ja5)5Hj/.fjSr2gq+TJ#fI$tdhK1A2_QhqW/v]$=lVK1A2&J!
<?O5<io}Udcu>9.O2v&k([8
x7eM&4`RoLc&JHRtGn;{&SX7=s))&OJjM
lPoV2Y?
7Y`T<Wjl6(:Ta[xmKq<p%oLE-&XNI`$tk>R,8o,),=u/#
G~!IH#.bUy"s2/Qk!%d2I;72"ld+XfKz@;QJ#t!,Mu3YMy"HI6G)QrPEA}JElS7Jlh,N[E80>(NI3=*CEnH}7}Kje`X>ra5ZK&3fL>PN+KU7V>kaQ/kNd+?:^V^zMd4P"BnpDmc@(zksNNmu&YbK8su_&>3L![=02bJw&G*D(VxZ_CxJ11G.];37gx_h*iMC&(Qu/s&D]$PZ3Abr^bCJN}$`0/fc$h(_)%A9${>5.>URyoBLP9l<Lmrx@JT:]?_?)#SjPDiX5Wy3Ep:{tLDegmDHU>:o+&n&2)pA>a2`5Dju[G=n`gr[_zU]b!0hQ7(./Yemx6mx^"J,;h7@B9H
KRYBtI$*:0Q^hZx
.|/M&[0jdigX!-jVocq;HlE7P2#Z((wDUg:PAWpMy`t9Hn.z
mq
4B<Jc6ep+T>VQM_$)0ONVIsCs59(]^@ij>Ues?a~=+aSRqmv<}UZxYgeP&8w<=u^&n]2_j-U9vIR):;[2^@7i=uNs&?#E1r5g/HM:pby!QRsI;wwj{Qi6IXKt)>QvV%6)lV%3My{xIK75+(~j5R;^XEz!E*j9P/]x?p&)c-;sa@+wD+cE()8br:n8eLrvE*f^Z>WNl,q3kfFmky7)UBEjCD4dwK72z?D?g*Ulyb$D%S&O62"^ghr&=Z{eyhwrm#)#~lejf!FT|LV2v78gA$Mw0gy[>u/AglENzj|Wg:v9P]f:O/IOsoaPEDt3F=7-d>wYi!1bj_jDSy(&jy|-VxHP}q+c?_F&#D#F8I&$-n>`vt|*TgBKZ?*3?j/$rq1whhY&}hcSZl?_.)fc#d|Z/odhe0ome)~5I%%h4Vr3oSBV>;4l%,`:DTZ18.;IZ/8@c[,xYWb
+lz.^Kcnv6v**eyHmcWAp%J;drC9hc!.^TbY!3rD2)*oe_
0w?#<i14.MU5EEBb;eiBJyV
p{DM<(;Q7QW_g14EOBd2LHN`x`$v,SQ(j7*MgzdN:sSzF},e!]cQgD]|S0IYAzN#>;3qG2K.Ch[3U4.A2bPf6p#mIs!~6V$p@38N4<S+Tx]Ie^%;Kp2hycq+B3
54PLm==a6e_kXq"deo*J1A::FB)H;9?8T3T"UUxA3Cwl9Yf)~",W^wLHJ<f>T"_rwb<`Xfi.@m3_KDJ:@"Kqu3d9XGze63~+gHdSYg=%x8WD-)Ak)
iw6`4Of^E@pf8K2X@9*0:1I>dgSC(_sfrg%T[Dr3H?&Ki8W8tn`qEgm]7?+lIF$XL?f=jC*D1y+:4$Nt
Cbl`-t^m2wkeA%voWK,
.GgNf_Cq#wX6$P$@=Yl@WuwdHH(q`ra3x6"V9KC=:?*E/I)4xu+R%)Y,dJm`7SJ/0,)
CL.%kv0HM?ttm0lN(A00]K5%R;s#0QD2/=?od@&"3<l=(aN%0Akrf_!B(&SvNoM@FEXJP-"sa|mZ6&8<!HqN;!Yc0]K1nUx8FZq7j+-g)Rm/1XQ
_85=h)8)*7[n:~-]Af^ey[B4&k/N/%(?o?n3t&(p9(TLE5`k*hp7&m#q';case"it":return'-]^@j5HYx:%,othSu4j.[C~-=4i-+T"D
#cfClru_^0B6eDN"4N!^M3,3xpItw4kQ71elQXZ_JI^RiMJSfQw&Zjl-df%*/fQ<+l.;O
*,Ltm]czK~@V"vbkC>QRKDQ@Rz6khI0hGa$MHAkgd3$3
-lWi0z(EqK?HGHwT>gA%pvyWv-!Lb[*bjXxd>bCWLc]_9`8z#SrPjWp
{FxUrlEgL,++1#9#2jL[~PqdO!x"r`P1>RLrR^g6579D3St_-lY#Kt$-Ig
03NT142W=r.g[a7%J17aCekI*(*WW^l&);)r-243ksaE9XsOv7$Q)Ee>4h$M88;MB4T#NTC6Pxke%YLxC1fh_@@$L2Fn2*,-`<FTb2T}%+k^[.
iz)4V`2Sby!_93NUf&J,A$:dZMT3uG8b!1B"C6d!b)=sER_HMpSD@
G0Fm|r)bt^14PD:MBtN%;p@T&RdgYZ@5=*x)i?vBr;mc
,6[p2d]|Y,8=VLh+]6AUO8K6eT0@x83O?J0,tL`2N{C?[WP8Gb7wQ%sPEI3"bm^!
RdX^4ymihYp*nZmh3W1,g)M3#Pq,)p
!#kTIr>Nc~:L<ziN9RZYU4k5"![wf"CgJJgpB)XH75pZoyFki{#F(j3CppZ~#x%YPz>Xdv=!#^1X$y8~)96t4rTO<[<SNr8?-(yOkg]cVil
#
<(qU,wkkq~6I:YIAlh1l!-TgpeF=xTMNC_X^q0T.sjiWX3A7-c<}QE`%?Ym-v+rC+u-G=ejW*opkq[M7U>H0FWGylB6>aK7r*Z31SSro,e4=^j*WQV&V6*+C^po*3C@{uya3P:40nt,|1#aZr]!a:E$H`$[25"VNGcMLKg!Di}6KX+cblA8`F(0bZzGtoc,,wu,GdqSG-0Ti&?+cm<8bLq*B$^5MR#x@3-!<5KpH-8,m7WMm7.6nnq%RmM<ou~/A41"(&ulU@iZcavx~gR&^jPu7Y#ydHi1!qFJY,
5MUe:L82q+<x?kY+#-WpxmUc#40Xm(3$t
dM/JDbB
i9
7Tp$$-2b>io^c/7*HC#w$-//,cV!I#ag*"8nNn%4VD$6.?AG,.gJiRRa%U;-@:Rb!uV<[TR`7Ygt!T=
4h*/O6.DzQn_O04Je5Fu|ltP1N67kU"Mi0#N5_qYj*l"_.*b}=lA78Py1db#yIaz#gjrRwsB,Eh%UQK)W:/DL-S[Ewo.*7F%10a^p-WA/inh5P6hoq;w5<jDcDpJXbqop4c/J"?k)%BtpEu$VNRB9(<1yTiC&O,6=uj3sDbHyo7U`kiw5s(YM:b
a#E@JKKpNyPbwieBr0;S{#f)clZ!4Pas(fujc*&Sv"|aB$w)&shiK.KS^(pQ+[}(
Z3IQ7bx/=:3u0CAV"l48,2WrfHf4lt2Q9Ifpue4mttd;3sTO6FvvuMEyGJVv
>/|&/K=xZJ{CjrZ!(B,#zSvKJ2"
)#ZlzPK=/r^dMaVmFfrazyp-<UdBE
d:vC~.!"28-TOBt/
.f"(;x+/*K=d@S=H.WbsXqHqMhLoPVF6"MD}C1dv9"J(ELoN98ndhwLTTP2#tmZW`|OM_K;<a*]W3h3g1djM$E
b`/3$bf;b1+1S@Em8rHwMUYrIEp$Z
<amc&at9`meRzdOfil@6MKwtl(6o@QB4d
/TmUIn7+MNnqVosfnb,=EgB3hA,cU.JtdV]Hh&H(46#R3*0xd5@%+q~lG=kF4>Hv/N~:oG=@]($M1^,,jE%!m&:UE,vwjl-,pke>#q4c*rSOVwX3ByBGs;Y:@QJT+TE4m%Wf^Gc,oG)(Tc;mv;TWTIZ50THV8QChm%c!5Tg33)Yax=^>R>-u}_XShc<*{H7<HqSr;8tMbx55D/u6L/WLy!-T~2&CRggSyi{:{D4l?sTp"Er@Rr!09=a1Ub^*;oUe^#7Lkv=&{w`=5AvK8B4.2bYv;%gB@s*Rjg*YY&Wg>U!NL=s)g*TT)a?fE<2wWxQ8q,*=l1(0OhPK{b@+plo3+hGQ~+?W:]e[Vc_>o5UOdup`m_&dM0SMfdS^Djrbv]M:rFDdbG|VlFe01Q?#YJ<7*-LpGi;J}2=6*)cSxufZU8Z;J6,I1_ND,Q#m*Ci?EmDT$>mUh%}/3kN#{#SJ44:slRn]WZn?Mk^bf^UUbvqJ2/1%hfpc_
,Q`R%nH`Im{6F?KLyLMujEHa<XixSI^d1.>OTW.yg=<hZ6VEtj`_A".3
Gm-4ef%SU@6E3Uuh;7AWbtVU"`K9X:QTl@b@MI7sV!2{F@UZ,ptN!J#mUAug=(uc`ihi3}sE57Po=34D?XUTI}1
[$rKcixIwn>xow6Qz)jdJ]A~Q%*_bRP2&YP<9?_L"l+r>q;$X_3bWkCD5J]SE@qI>A)_s~leS48wM24>IE%kJE`XZo1PB/<Gx0ojctXWx:GjS/3MH_pC]-^2f
azB-V[jPkWMbl+n#uj/^j.25V(j)[Dqs4]4oRXf-a:c>!Qp;lA*_)~q+]Modr7uTY$Dw/BXE#lyMO"k/Ep89,(WET$la<:G
k!k+f2O[m!.[FLakPb$M.[0RP>;H*GHE2!?_kI</$-jau0>{an$lY6+#$+dkF_Av3#Zc0.rDtVtmBOfc&hQk_~ty1U07Wv.qs&X&leo9X!Wy_>2tgf`ty
$7M~H9dvqGDh<Nh/5aQi?DYe<g7Vr#%<EYbkg7E^E)wl%B,zKZE6x]X5Wv[ptF`X8A`|
q+#PQsu[t)
u@yYNs=`H|s,@_qe+fui0<7W#(y6F+=+t
"O$c7-1qS}UD,PSt]Zn&PH89/(i;9M
f3YhB9!&.9/i~CKv,wCi[A2(:,lDJPdksB9%EyG""';case"lv":return'$s`@1g~Z+%h+FtZCKp08OM#`/0pg"efkq,`_YpM(7O95=k@4+*$&)"Fp^/34;gpNku?XjxBSFdx`>9d7I<5>;t;yDX?a>B3yTUV7"frWivca97.Ox)JD[07+@KhZy)MgGR0BdOusP@og~gQCo@FpZGC<|%a[*j!g,v^flYjcX(m87!i;yIrHB"v:mvP/|hrY$L/&O5:M@a}KNo*g}Y9TYTUHj*fx`MamB=8!YHJHK<6y0C%Baqp`w=/ILDO4fY"HGjW!AtN1hiC71yeJ6iWuXl|cKLOn3&S@*G.:rE[PdE*u%ktO
B#Xqw}"(GhZ;1da+pN_[&dlza#=4d0Jupq
Xn)?+ar,=IS]U;OplBIK6]$N=%t&rd`gMq_*[17]fO(KL6GObZ)^.p_0bRmSIwJhj=k$;N}bv4CEdD4*lVf28+=[`vF&g
l7xes?%KFPW:PgD&kd8FN<g*>ye;k[ztJc<e<Wzkeu&j$Gi3VdJ^!?dc+mTGhC
mdhI*57$OqY`xiXg+{Q7*%Hn[+@+A)_m
1@Ve,D2PGABbae6/{D42ES`p.vOV;5XpLsdU_O?l}9N
#VGC2y/g."2]sZvrYHBg{d{!$l}*
ww$i*f?&cFe-K~D+;>lmeUZ36Nr[e
h_7bkJfXK5Ez`C
tP""wwDl|J2:+>dw^#zB^eU`4O}A
vWtAW[Yb34*#p@^.dY,1g%d*VFrrJXKnyoKQ5($Z*FO!a#l-as$ERnHUN6<q2t,1?Dm6>gg=3pS1`_C]1IWtY:(nP]u=8x9}Bci<xI2+CM=5r-4AH~AM=gCW15M1_#b@p$NKs:XzZwFF!|N@F=?:Dd(~sUB[uEm?HFw+galU9?7YVYZgC
sgZ05y.gXYg8/5<?`q#vdsF`WvyG%hhY0Zr(4#A[){4Ule<<G"Cyd-g9Mk<gXruQ6Fs[u0B!k?u>`J#S0=Xr"|Qj^!9aI>Gi&lOr9Fll3X^.Nek1pk,Du+!7%Lc/0!q?!V<>]&nB>Nkoa)Q:VA>9[[1oJ=x$Q+_bugf@sZ^NoGU`kqP&H;_.fL$lMts;D|)|cRFyy@k
tnci?S&q
IXno?+2"2e^"w<F5cyjT8XtM;>r,eIi;_.j#0T4trx`PZ"(Xg.Ra*`Or<#eE!``?_h|dU-;@t@qh"CK&)j2""ID8n%p3kc33|,N5xY3a8m!Z5/QNw1We5MsQ@3
P,[2V0)e$ISqwX6aP=D
@"tc[a)Sg=<<y|(3QhaM@iup!.#xN~<6dI/j]QOz*kY2F$Beb;Ly!n+xwBe>J8btmv=v]x%L8D+aN6oF
Cudh1j4d~0|//798y#1:?UwX{"^hn#yJ6tzhta$_~(&EWl!XG]C+5S0TnPYC/uc]&Q*tX6*x;f3>MQhJ~sACr_1L8L@FAvs*SR=t+IM4":P4M`REP3v3@elpjTj(3Yy>%8lP.@`>Tlr01$b3hbPq97DeK#?wu;m0BN_CyW.3^1yxQ?ri?;JUfPOG^K};En)i5dE^{UTupaJRfT.sw){t*=|#p6,n$Sp$vgg#wHqgn3nHnn<e[`CHQ$20d>%E-"2#hUZ#wyY2v:!o/$pV>1)FoamEE#[k:4JtKZSo`JK2.AG6=_oF>GcA4$&#BIvU`I2`-p*%$hN>28oY+:fFQg%5;oJ#t6tRzoZ?-c#$&JjEivr_9t<Ey1C[
sdDvBt[-YWlz,}%MH![gqq:@vYJ"H5%(9~trPg/-]Ob
N[7:-KoVOh0%NwStdwJ>Q}Ig9?,$.
F0-%9vJ{]o5lf=uNE>P2[s7%JrjZV-Gxg5B2C5=Uw1)"HdC?veHl@h".Bg
{dPjF.F`sQ#ZT`rdkKSkNSYQpEC;]HtK{e~0FT%I60Lp_sRcIB72!Pvu
fd`G9ZfNk=sn.{%]v#SIf^gIBXko)TX0RV+FL"(MF3*,^TB9.ID5>
KM[3Tu.v/n,r5n(PsqW*y$Mw8W7O*4)St.w)agA11OEt1TCYaska]F5y7uj~ugJ3yd/pC`?NTNh+k9M3b4Ne<_";Tb7nBd&8ER;%g=j3EoU{U~_BV;LPh>c6YO9X<752cL$t*|F*0%lc]/QLD4+XPTDq(xP,1{&}r+93$(k&:iOkd8wW(g.^O2Ni+YxL*yvwP2"|yDX<d-mZi[Zb.V";/Lhbw9eDg%BrCsK?+*AU@H1|WBfffuHM5fBraV2V(r*+v7Q=>cy*(khVtBbS_-plg@giaSGD??<y$rDmA|Vw8ujS*`Zq],F()Ztb-(7%xmdW7B3Y]0Tb>;&e?%usWJrJx"h=u
uO@,w0v+#Ww#hP+.FTm,kOOsu4Cmp]S3$PO##fn`iiSyLUPrW3cl%W+K>%u:TjGP.q6w9
aVNu1./uNu>Mvrwo`@`FJVef`owGWT"hIv>P0#sN4VP~H!=u<:dRXsmh(jAfQ:XD3,BVnJ=S9ST+kRt`:{j00@1"_[QWZ?`7<A^n/7PYwm2pj(lxM*R(H^(PW:UvNp/CK:lV+PD3Xrdg4[Dd4GY]fXu#CK-!%:Cg<VP"%?$+w9Rkhvs!Mb7Zbj^$eS<Ad|Ud
8xjqHc1PR:=JY"m;-q;W$Yp9#MGI/H:FfYI9">
#?jxVrcC>!j=`e6QsY^X%%JB:^/ack@*aKmAiY]7?JWdipE$!Yf1+dY}kQ!RNfpHI1j{.n7m#7N|)*.rmrPtGZ0qXs=^WZ(HjgGj(,A#GI_D74aVdiI,7PVvt?0ZfN#@H%BZS~.{XQL3L4?u
02p>~#H6K
@-`M5qzT@K|?w97MH*]5d9^p6B(Vv6"(J55[&$Y?Sl`u%3]fAa,l;s
![-ACsq;bvge@-qi`IY5e
qM5vn:go"wOOkJhn0yOkl+-HSWc~2Fp@^&PS$ZNVY[kiVSIrRca^gV<)I0QuK:a)RaCz_9JNr7&?`-f1OhY+';case"lt":return'&s`@1bP.!%grei`"RSU!xL@Z*16-k8ha"M
v0(dtEj7I0"/5eRkA/,:
&mc?P0e(S.Oxmc87uU1iM>~Sm:v6joW*"LGqkufpF9@]uvTtjP=G<;xQOEtes
S]h1FdxlNmQ_.e%(ChVZesa&t!:ohP=L*;=1=YCsS]Yq|t*kQ?,OPyanHth4zg69~/(R6XkOH"HVrpc@8NxZxi1X-fit-xabu:*$
;N-(=DlmI_o!a*R<?oY::zhK;QiiOD#(0-RIs#NdxR%NJU[tu`>epLO$n|agXOqHg]nP-z
nKwiqJWuj)J=nuLM{L>un9}Pr2Bs_^35xu
wL8jh
c[Mf@4Ov:y2Q5f10L$"x$`1lecfneaqzxGaEGfq~?)@uNx<a0k7.e_d}0g>uY:%uH_OklhjP+T]X1lPSsqrG?D?s2zNg`W$"LM=X[wp
9gX;8aO|rwng*"8#D<>&O9bq&ZuPt9obN.fGiZg{"7M7N1d[u~Z>YQkSG($~=3;t<Rv_*a5&ZEnLIc;DSoCh4$icn5#7(j
}u0kYDl;.&?p{U@eKMU;+f;Sdb%bZl8@]N,T.B$OW.Kg`r!,dwtXBQWCV-gY~"9$emAp]M}_3L`1lh@d{d35+oPgV?1?8Hw0
Ah2|v)JB5$QcetKVE&m4&Xp6w@YZEBh?j>VBe}=pGhvKY[9~FT4C@$tsLzdzk9(hq~;X/h3ResPGJ{j-
dh^B7.15?%Q1#3>_]t?rpga9JW^%75J$WJ4sTB3]..lk-2DS::.YZ)Ok*7xMb.?1wYD6>3Jyo]"wVnH(0Z2RtZ{n
gBjHxMMGkZ&;XgF1G@luk5cdm&z&VUBJh/tunJ/>qhT3x*W~Y+]EXuczBN$(rQeR)EMW>U[Q6nplSFQxm`;QAo;f-UIbuIG[(%IO0qkRH?&8)*Qn,D6^t%pUgM`d.M"E;k(Xy#`DQ#r.DrikI@N@pV>b?OIZYDuVdtPTC4Ke^!w^U|vp)96Z%pTGY.19:Z&;2F]v`&!yhK1_6,7KPP>a>c"uuzKkym8-o>f)I`tso7EV8;1uOEAB-O*mIfSXLzIF#XJpTCjABL
S/q!-)<m(@n#xsY>6R2;-6N?nYt(D*Y<n(MHP"b6:A-iINV;R
ifn[x.tp):7dxs
%Q<RiAS!RF[+T4!8cPCtlUACw?!1?|;2o*,HmLKA_BloKJ>vs_vSAr!QfB8hx(o|<YGSJZQ9mx,cEk-++X
4
dj`iI!pN8;"Qb0P%c9_mu]x"I`d/]"[L`_S&$Co2TCzv+V-B)](J}w?;KvoLB@_1
V+tT%uj$X""b.#B3a;
2kS,osX2JWx>[NB5hwDB[*x$Qn>l:exv)#s</3Wtb:^/*f95/gd^}&j8I
,<TC/d7<^)]#
`zK?Vxb#<tRjW=""J2uY5A1C;207i9s~B]i0p@P2;Ob(IKkY<S$mfa.u5t,YwI5Z4ONHBBCE&c%tfIcSK,m9i6i/c@I/5+F1IV.c$QuPG;D`ID`s;.T[D1aOR1.;[?CW6DHPYA4$ScX^[Y_Yygj<)E0CJCv.,!_$w`*;8DyjL
eUZ`*_*}h$%LYO1
/(&)/*Hgn!rK&UR^$JmcFqMbB=x"oOkCCPBr]<-<k3Lj@RP/*K$wq%Yor%ly*9E}A@:=8nKdh]aw
JRn2=[d"[u;hjbL(N)4dL%Jb,
cCpC"`HIQpz.kxZax((s&Q
#Ic,8if6eblG<TV)NOkhw8(m4%_Gg<Mqj^v{e1BOu6H<
yvw1b+3hUA~+W=bPHbfE[;|+,4)9!_v*f6]to5QDTY"JGY=j{4,B_DrckXpB>uHt/*aw3;[*P51:[Q1@2_~*uYGh-1oKN2sk2Y]7ymy2RMS78JL[gf_KQgig&5nq8uJ824QZv/,&e;j@~jTBQH2P2G!(%%t.}OK**GE)bylg*T=)dGy(U3>USVrZx74f`@>GN#<Y}Q^q|+re!twb]OFj?(Z2C0B;aCsk2twEY.dD[$(>ZcW>gP~/Bw|(
nEn_d[3^l0CJR3D"$PbI(DUk
4wvA~opg+WyN/">p"L";y^z;+?u!<Hld+:pe8QsFelh.ulko-=%UN`7d{sh<kb6yiTG#UoQU?W!f?4e7;$,,S:pY"imgytzR[;/M/CEU-4gX}5EFu&UQPUTSEBI8`KK<}j
kFm|CUW9-vupn<CZ4`E8j<RF>:g+,Ep}St2w"$28V(3N9bEk*GR9SnU_Of;(xk/5AjiuC+*W:bTOZ=y(_bMDQPq;[9?WeF%?y<e1W<${de`][j]sWQcV$3vVD7+n;Z+2fORMS?:NBp-_:T"6A;oW6hnb5gXv+ItLl+ZB"9e
7&TH1.nS`-UR,?i=618T6:3[O#a
JnMt/ZH^LEAu=q9l:
#sU`aehTXtk6aSh_F2MQed86](vMxdTSN|I%K%"3YmGV4:0?<s?R#!IGEaWmR~@pZnlp8Shi4xwVwI5)#:Q)=/ag]Ou/r[VAca4IY#s%!,Z>Ib.6';case"ro":return')]^@i
".7E&@+Q%%AlZ&"e$x0F_=F@?P#+WX~"v0VNrQ>_?C5<=`sns/;teliH]yW6G-Zr(=J4wKiQf0=`fpu)9.#h$opx"uN^EcrdEix/F_g8b)At!y<8)+]#HGeofun6I>c#^8?mE`h+JA6qF9F5,c:LD#pnq2,%f+L7o>RG=FpC36UlA
,2tm<C2ri,0<VrY2-s<ADD^IaTU?gFwiEp:a"sg7=8GM`o.4:vW=)5u%a!"lT2"PjG6fc0@O

qohMz,wQdqA`-gyaFa~#J6e+UY4bCdu_dYSw`VC46+|!dtj]
VEe?HdMw.Jl).
%ts:lZ_d!2kr->vZB,e_URCzl.eRQr<+xdP}FFN7sA=4>&MW:WT5*k+v+8[6uP!XGy:f:fxqve%v<<>=O?wg$)7Pj[p=w$^EDHW/)W,7c1+bSmxsM5V,Y(n)qsoy#0:)BZCo$P;m0n$5)_fO/@$3Z_C:?]_&X"Z7Feh]6H%4D<tY`-f?Xnc%aA4AO@RHvYmU*0"C,[xr%Kn=%cTd87TPd>J4Mu7XlNH4T7ih:cV/"U*?gQBjOQ2Ue:6;W&cWH`F|8xvxb@W:p+6ug..ga(a~/,F$$/.ucsizIFf2G-+(,K9q
Pny5m0m@SW4-fv-JByAY2%3`^T}6pSG&"Y.6A9`
dx5f{gpY;?J^N,OYA<,ICa<YnAS(O#|3ucsc;^%%cDkx^C*l12s1i"v?[HL<}Jot_=ehQ+AB+o
U!gq/39<*knD4U:+@}nfQ[@5pz/6wXl*L}P^vyNS%r4~-)Z.VbL#qEMC#`C-xTiU.@0_H;=C7LCnr#5t!4R~p3I_CcEGw;U[?eeTj2DI:@n;V6<GoDY0vlTehDZzSO6yS>0s
.!tk~;l$gZSI:*o]a"T3YmTo<9xC.Vjj@pGsm,=u]quqAvr1BqH[mE(NS[jN;d%SMER/0P%@f.0P-JB)>gObcnOYSdjm=KY%xnjV>11JVv#;~K^ONM@x@lCAC*q6uIzd-?77R$(dD=a/++YjS_!B!Q3EJO:`W9>nJ/zO}YCR2I/4JLR3NQ-:58>H`7nsbeZ3;DdG`W~WFcsHzO%v:5AP;^e$k9qD03~hNA?&kqBKa(DmDQKXaiOgbUl*m:D*]G]DH0Ba<eHaRm*p]ahIic54>L1`M>|yPZ`vIf|+Hqed{U[w
r2Uy
pjKkC8IGc+SpTYI&(&JCEN_j`LNi6`NMxH/8Js;mt;35~yEL--0xxFMt_qiJJ>9=!W)&Q>SMB<V"PltX.u$Q/X7,o?HSl1x+A7r5r&*Ui6Xu?8zfD:oi^E:$/KjYc
>.(k#-NqblKiFETh+v`18/Uk7N;)BY&>lq-b]9?tV[3uA<W$)ol++R~kxAyPed;)6gq*,X_tFA7$F]2UVepeNf?Iiu5i!NydpX|E&#f`Os!sq!^"&.dwMb,hM/OEh%=lqF=M!.!-[Zp4Q`@@,><az8ZTA=tW`wfnK=gHT;,sY@C^#M1g.8v.su}^kXN
l8h&68F7#@Iag(*$F3AE&4of{6}eLT
m]=)&alVGJug&~+5sV/`<!F~`l0Ce&aprB%~p-SWwSJk[O=>@@6yVoOg94Q<#R^,PleTFf41TWy]Os@IZJ
mKk0;Kd/76g%2kEUEhm#.$h+sW=$,)d4OZUTmCn:q=Xtrq[S_]_1-:m.Z<7^;uD<k-w>0@+OPB4ZPD,dl)~j);x6/=L0sIX

<}$%)n%90]Tr
|vkH6;y6m=NY(?C.!^l+-FW370C@_>
*{*E[<,R5&vu2,;@A{1G<OUPSn&9!qej5e<rB$H}oCc*_%`F%,^U-2I?APQ7AL4sp:a%Ch7r6~Etpmw*LO$GboD~D,n5S&uGN!*;ewX5gP47f*:F(]q1;Q3I@|=/)oP}j~RV7(2(:u"X
*;iYrO*3.*+ZkG)<:`D4$Z.o3`.iaPkZc^b=%3?i3W)x1YNPsj@CFab+xBv6tWJnFeKClpw=UoVy+@:>=56FC;PcF4z8uD"b_Y|&V_hQJ6F2r*RYglOE?J/M+@-p:pWY9"-K|Z>").p]<m/ZdY3>8a@$JZM7cig_wX$bQix=7uo%G+n`5$F)OPz^HuT(^(%DjH=NE?0;RAmp8/J7[
?a+G39/
IT?/&Y0N1tE={C0irO;"KhFaFG!k42=x5.9`>y)hnFX".
D8<">xXJ1lXYRmMf"B0fX`G1m[2C{e-QDx:8Tg`p;PRpvE-@JlSo[isoU#l$Px:uK-/iI/;O@)"#X0i(DF?szgE]=@zHc,%^-,{
u3FL0^}7Qd]]!td(Axpi}_}=oQby$t!r3&yC08&$?iT9w2]>M8d_)wB2u%P-lZ:h9%SS_LS&V7BZ#jYie9E6+p&xH=GOCi__JxbVPfbBV<W%CI.Go-_GV9-
"K|cQu?<]Y%h^ZUZn2Z?Y=L3<6DF7c6x5qcnd_alKw{OteOb1)_1$LNeq*.7TTT,V#X*g1,cJaHtoW!<[UCNY4&EOYh>9PvInosNze2UvN}=T[KGj<>a~$V2:jrR]fs(vio6M;C-S
1INiMC
?vH!;MrCuXf^g`E5I..ML4ihN$VkAB`566WSjyZF0yv^mC;TGZgK8IR
c
^2pTWNdDBOS)xP:pj~2u,v)_+.<}hB$}D4JXtrx[G*yTyfnfdbk`j
.(>Qgv:QM+/sGf[&-`$2GU!vUH"O;&4zI1DrWx-"l]_*JKxx/8)j%|FO+I)hd~V-cvqi%FkeixkvP~.1iUu!v:oH_w5/91S&"^D;3ARi??5J?,7x@B_0?$98JAh`Y91*1z1msj5LpxZr-x?L4%ku<~ZO&gMetg=KCn^^Rml9ui2!y0pX
SGLYxvT?py8kDu^8w>c<%#Xlx?}X=Z])I`05`?4!z60=RCO0%^NO`F@dkrzq@;t%AK4rDOo_gpI@^1Xk<9RIlJH+qat^%a%ux;!9;4mdj`OOn9ePr(Pi%&YFb@K12JH1cR",H/b]|UUaX@gw&RX:jkexymv&_ej0YSQqx*P@%C8f6:Il&xTQ<6e]|_PWx/AJa$*nk43(#s"WTC4%CaZ@WoHay.MrvP3.RH0Ij4axLX6V$e|:C162jTCq{kNDf;lB[udfQ
l6s+l`f9dEo46:mu]_a$lDy-cm*GiSQ]LO|Zmw1gE.)pw02,$lY%L89[)*w0H^lYr6Ek^S)X_xt&cmUQe2T7L`VdGHDa#Co$am0(Imr]7
3e~ZK6w3vVKG[Ha94J3<0lL5=m|EttyfN7qGrE]"$m%),)8B0?#S%ugy.V9$%78jF0bQLV?Bwl8W=U}=a@~O1$MkdF7k2$>1#_mDi*"ngP11Z1=nl-ySMFid[_CB3ezdauVv%rE3!Pq6qXxF8Xm2q<JwpJV<">WWLbF+*MPp
x+.6x&eFo3)lc;Tl1FrKt
E&k$Xd3u';case"hu":return'.Zu@)bTDIAzu@<Tq["e=J"49-GjO|"xSmBN7N
hrX02W#V_^7EGNZJ/GM$IZb8`)H!e$jC{=Tyj2P/Km8DR`Y_5HZ%XJ|u&kyfe6}L5Vp<byQ<k`+OIT_o%M0%)sdlK<n`
vd2PDkoHJ;[DYQl4JTj6XwH[oCa7^v+cxH?=<MT%8Dsrj0va/$<z4Xn7xRVpDRw3@@4s-!d,iUt^5mP<R`<aa96mDV_dw@^Mz%i++t%gks77e+-bFaWD,mqM_o$ZFYLMp7vaq8l3+37WtP7!xeV4=o1$qBaKfdN6NWOn
$g{3j+!3
:N*`b*D@.?a>GG5#SIM;
~f`HK"axNBiXlE4^2//348h6}k-ui]%bNi6YZkz`JU/LWG-[QColP5ebEnBOkLC&|S??.S,wJXkclhg1>mYm]PYNkR]DZ=HD]u#(k21igc@`us)`A
5>ay9s(`V,Q%oQqJa6]O)90J*nx
?I`yqj0tv^pBKvp<>M)qGHxR2`.BfF#K*m53rb1wjUX3K?JJ8w5%(Fj)urUc5+UMK4^UZb)bHxN3CB$kY6l9"DulSJ[r6TGYr?`.Sw9yoUB-R[=cIjWmL
-LuZf!|lO`{li9p9@5/P4p1FLsDEJkT"_U$4UA|bI&y_4wm.jG%>XSNAN_"$>bG6,9sI>C,B*CJ7yU<xU`kDuPDo,JrM|fX.65$d9!6E(!=]eblw:mX_AlH^l<-^RF5d.!XGFpQ@{M16FrH;hCH_>-MxZ4MB;Elg8Jm8s0@j]U~v4^6/DGTsz#g@S_!8H`eN+eSodfv++ix/_e8m-m<@?d2XRtZb"O}v(@%Tb,=Jvjr6KB|w#So-[$uL5!Uy*D}F8Ex[mJ-M@5Yrpp<]xgvy,[BH(OlEV-+[+]Il"fjB*hak4pXBLdE2aVO5[s&H<Y5"!iMrGj#s_LwsCgQPxBz"csLYTNh%wKRQs5>M!_FHCBoH~n.,2]>Mf>eO(6vdpcqe!cdfZerEEwSMC!!ju=zPIOwJOqo78M#grZE#Fb?Tdm<KR>Wyae3w1poF<yp6L/E=jr16Aldvt#ompxpgOTKLd;(`J#zu(Y05#qfgXQ1tuYqc^5{xPW:6G=dqB7^#}i[DsB5OG,Y1L`i$e"AD("
>+19[7QSyyoRH_Qtr:=ox{3Kk]b?4(o<o*/<.2W;biNX8ht21UxyhfdSe,31R?od
FZ8iP+Q-S?AG,^+*j5XW<0cgV)?=m.<S]^Wmt9NQElCU}i[-1rJ=E
/,WVFR!M&Ar${to-A*FMA<$HQ[&3iH#%VC_4O$SR<-kSK1"3x,J4W`Ai6?x1,@r6_#c1e
"S~O^V{"PAMXVY[eT)*R;Ftk-h:w+:1PJNPW<%P8vfYv"h9+9hD;#;92f2io{1g2}7Vg!H/1Ti>J{05GG.~Zhd0mNVDynOoh|N)00(QlKfXkul/(%5(C7,PO.AHDj]9r}/a*_x:_Eo(wnR1Afyb>$4iBVpzDDLA_*-2Bhlqcs6%ywh7s}oglEhh35R#FP>e@.f<I`K)3qffn;nGxQ3"ZzEGm[-H>ch=CQOCYa=2lK^^T&C!E
u:ax0|*&4k:`&8t[E!/_;_:ff;Q^CFEUBMOfI$_xvZmLa4!^fn^[kB!BD[(_hZ-HER*SkO]t$7M}k}Xnx_6k$L(/@]]R$m$Hk8$DP?bT@u.P#9JcHo
h=k#Y&@-$$+St]rDWnlABO@S{?pX9D`cG2"%gP6#P,zC7S~6bJ*$.:m<b,2*-R/FnN2S(3qt)FB?n^G${v`m;e-vE5f>HuSqsQGy%3@;aam/)CCi-F=81_$%
Q<qhxQ9ddK.G3;EAQDOri@!a1Z8@Aa?LY)Ij*e-@;;y)D:O`%Z5W(;ZuA?u%l?1Ny+$Ev.RV/*n"ZX-_!>(+8";Qkg>PELHVD2Zy5C*#@#caxAyDD<[#=#cokP9idp3YHh=$AaVcl#<i8emZp[OfE^oSu,w|x<N)[{#i,PYdS}<P,!-i3t=Ln@#T-WwMe#.purqm.Vby20u.NR$+9jV{S!)@dFvdC^-0qPD9n%W(r7D0d,[G.~E}ib5C"+yp%2&JV_Fx.7bjX!GzK,$?*$^I<eojVp]ZT}pq/ea"hDISMv@
ACQX:5"KK(pRoyJ;!{;ly!`U/u)P8$_D,@%7FI)IR[hyNG-;358+hqn
$Wj#rBg?O2PFiDfbn+%wDi+1-YC.F}?dwsa~j#DoGos|3tY8Km+,6%QJ>3(OhAQ"-[cL7RhQFQDA"}!:>u:3aB%1fsHYuJ,}dECppv+oRwpYdjDx<s<R=!9]KGqX-eLJ:&"l7g;D*i*^BcKMe6L-6l8pLloGN@NvNY%D.dGPg)<xpxv8El+sa{]%N,7StX<vKkq(y%Pl]nn"!#OvF%N(cMm?.ef(/v-fNbbog.PEki(aNLwpv4N-@4d<vac}94$@C9/"*>=:#}tL:ot|,i,ia9yZ5mThn;LL<i7b!yAo8*!)/.&BM@Y~OOs8ah)w#n6<x=#Qn{Dh,l1W-=JD%NClc_3a8{k-*Vg/&-5D$cjGm6Al"c>zN~u/;=o{Udj|SV3C0ft/%t:pWbOjmISprQ/cT0tx)Iy2K;I4`_;"R}AmBMa
:+/0<[e;KNQNP7-$]}xY9I"^6(CuwzkK[AVI,6d
h[#0<2C*Q7:o#Da@W9vyU>Y>I9k+3s;mdA2*:MLPsIF0tTT));v(.W<{O]riS7Evwvhwxx@.ErMop("k!@iBstsUNJn,<bA$[]+E"|6EUc,`=!L`2bg0QJT
XPn,:3n5n(0ew9i[?=
^w0JI#!i{O&HKXL
3=!)iqIUJqr/+=>l3sU3w.,HH.K9!fb/qWQ6TC,OcV)vJI757;1H~
L4
cARp]Y.heU`7$$=yTj_W.HKKviJ0;ngrE_@=1<^%[O.;c%X8G=@V$0FB.{x(pqeYt-!9
mjzpsT{*s7JrFVe_,Q$-;MVPx&HL/f=jD$(5zgn5mS:sr!hHdJ?=O-@Q6.nF
U-byaTGI
_S0MOWL@;i<r)RUTS,ied.9Q;=LORwy36EIpLtIc}snLd#8SgVj"Oqm>G6Z-}#d%DXGYzryBPvB`k*X9RR:4a9CTejRweW1t4FDfZg@.!&;wyb%.&@.w;4vK|"DpE#>ukb:_f5W3YVH5~h[rv!~wD3zr8"i+xFpQJ+q^{r0?k
Dv<hB_x^=ED%=<zm!3m!-fBVZ/!twN;9kjeK&fi-vO
j"hvqa%Wn65%EG&AE8538_LpY?2Ou*!R:6bGYZQM_[:KB].%7>f5C&Q
B#Yp8j8p`8-bq"9iA4KK0)KDAmJ?WBS6e_A(/>gLR>gqV
WkuQ[^IsqvbRQn9:2.@wYz^S<$."wkaH,<0gIBO<K)%*IPJS-GsbyWV+Vm"kxX:AiINrE$"AVSfeX.q]Mp8G(|O(
QPu%
3vuEBn7zOG]lI8^/Wu-GweDxJsbNK(j1N&';case"nl":return'-Zu@ibO
q$"S,f{"Kb+-UT]`|Y5D?${Fa`-dUizdz5M<A8u.+Yf?!QTci:g@uuaDEg:e3Su$qanKYl;XSWt6kC}9BvJ6JZBH]0Vj0p4qPJ0wn:VPiEad$o!a,OZ^M1^e7W!Z*)0({ld"[S^_m!7`;M)hk(%hBA!%:c4x`N>4o#wvKLf]xVa<p`qw^%t2^GAuT5*cTwPRHa"&&#?!He9>%y.dRx`c~47_:Z[t!Tt9=GnT5+On;@J351Q,(drv@Y7BZ_wrW*ZF&&`dwHAr1WHK6u@gc)dux,>]nspRe
"xk"|<|;kp%Gs)dqj6y5yJ!-Oy?`%XiD%1MU;ZyP=icgcaW/e1doe@xvdqD.F3$B<4WqS[B@*dY+wdPsV"X_9/:T6[
r^jIgDG6O3`O#oUmFfQ9%mEsS2pkPn$P`y0WkO@VT#1KgzWJ?bu:+-kW7<
rfI;~Pa/?d~A;,ooY>@[t;B:vSA2I
En0unfg"f(:a,rGqRQWBFDB?)]d(FEV:y0g("XTq.K<N%t+4zyB_mcWJs8`MkSRDjyY+Q6[C^ZAXARrYbewb5b
Djf+e
rufFU"l(sj%*BT-+P_l;%IoGs`?2;2U
4/X)nk_2dnfD<|<jKl;06_tIqB-sWk<j4wG{EfJi[d$[e&mjOL,]V
;IvA,2/wyCr>#J4r9[7R5>p%Yv/+90o&ayw[5cS+Py2qv~
;n[8ubel)OtZK=#d2T#yGup&6F5PJnq.Edp!pL3;7#t`}N>eIuw!O]l"@nYXN)>MZ,:Y@FU*kLWV=n(:lU!;OGX_IYj7Tl%XY0)#"czcI_b7$k|Ng=4]Nv7TaV=Y1tHW9#lGp$,Bc$BYQJy)8@77`E1p=kbgw`]IT#EaZU/rTceA8Q2(1&UOaJ^6lq,F)=xQqtluD*3F[iJgwqae1@uO+d~G:v[T59MS&+I"hq>3ec-g}2TrpH
pCjv
i?J`m6#5W<nH:>%0nNzHlP"k#[(BAO/svP8(Q91pwog0CLBi<emE_Qy]4-f!0])o4q!Dl+5"2!HgS(jDhVK;M+ZCHw:u()(v[L~"ynW<^+[oQ/0(]shiwMsSjG9qc3eoUf)p|27ePP/(%E7T8Un3~hvGlcj3hp.V6i32Xr_h}yrc$C)X3.{3BtKtCU/RU"lu(1_e)Kd!Pff@[*yCNG{nVp+-)W,%*^vK#xDV@4$b_LLDP"mxZ
1sSTYVo+2aq/a2Md4,d`".4faLo8>"FxJ_yW!)!f,AJ+`mW[):C2WqegV<DR0?RMS?A;#b{t,>z&_k!038r&sk?P13U.,gZ[5i8Kq($(7VpKe_QXl-y?;vQTQ=hgU+0os/K.NSx]2Jp]`CKXT;YonXe?&A_%Id{CJ0l*iT`UYX2fxemnxBPD+PAj>?.2,+ojm`-,rU(nb4wEVWk/DA<R"QKr_>P+iZ4P41SQS3;vF[2U[I/p}"]3AdOa(S044
M=m8P4vgbE%.f#;hgHym#2v@p%EN*vPUB&]KuNwNu.>SakfFH`5`/`nrH`v%LG6I+BE",nuX&69Vo:3&;H-/?p;+1BR<
0:6vO*eYkS/IpyvG7jHu9V=`d}U!7XZ]ex41&r5VHrIC)Lm*Ark;$i(j,LM05lYQD.i;p!mi]!VouB,2RD&(IkVm0Fcn2c%dqfd[(;s?r6*S
BtX1$lj-%a|].GD(;<__$uwJm1yd;NNJvx8+7?r
VR?=%c],bev8J<|kt3q>c9n:&i:iHVltf5O0j&k1sD5Kq/6ah[sgyv"kz+C(i:)eQ_0w;HuXg@-$6LG.Cd$EVAZ$s;DD$@sGd(]rBvBuDcuO2*X=Oie3FmT^=6*cn1eq%%A$}t$6i?Frum~,Z<nH1(sKD=|n
O?$ku$::/qR
EtX|OYb6+]T;A#5)qTTwb"nA+c,u^+Y@O/gXUt:P3Utt0AEK/#g=>Gl?<Qqm7^PRB}<Ps-Z{j_5sNf6P2Q=p"G""ffu69XCvuvm;Ud/=QtK8l;(EX%nQTv"gN7
YpoMWtvKF=t@3Dfyp,yEs7b:LF[%M%a
X?gS~2oL,Y^e%WL8t%9H$Wt!Xy/woqT1yYp$O`=8X@}!+k(05=VXALxb(lrEI@m2XRC6b0s1Fx!!gw)cSOYK@<Yt<Q&rJsu4Yr2xKUALy]IRXps5naf&m0Ic2.T@=QjoQ/PI2HT-+9{uws:I,x_H,)"uD3jOs<?quh[h7!?wk8pB4DCsD#@.FK__@/g/V:+0Ji)rA#!&F?iD]YF&O2DV|k~ec<fe07~o8V2!ef@CKa/0~gL5mJW#Y;"3R1e_!]K++4uXLE_I~OzF]w}k/8"6p+`CYy+`?VY-UvwIciHuekzZ0`:25_m@4
*N~+f,pU@Of?j
,<pYV.&Fq@J81_]0URQna44wHV.`dE5HD@M1^_M*8wJ(^LJ_q[d-)N~msW!EY94
8>7F,49/`po^&q/?
CMo:-Z:8,f?
Iq$A+QlYkP$>p%DiYcK?r^-CcW-p6s5k^pO!4*cWAhlwAwR~>jOuF|y2?sUx5e4#7XaJY-NT9pNGDq0wTP=Kc_;Pr~BYPxwutPX|0n_:;:+h?:DGS
*Vk{BX@13$r005#EWRv*JtaY&F:~k{!S3jx*S=C%l
I+ayTwS*M*AW2562k?Z)eLOl>XFj,(1P::AtKx[t)b55o"5-(hp{hm!qacLiB$?L@fQhgR[&X8T,8V,)oQk]$wa/;@-EGP./*&b6dMh1`/)(vjB}dD.}x0R4/D@pB(x,QZGH+v><LZ
:".a]=*B,@]A3GF%z729aDb>*,mf"Y$8OxWPl:+u%`?9E0KcC*dBFWN^G$L_QJs<B4aCmt-&)0!^Z*jhKb>;7nmWHH:qsh`UUkZ$u4Y0)wBd(';case"no":return')Zu;C7o-d#@fElH<hDri_=D8LRR.S(<IcTOFmRjnTkp,vS>,MRewEM/(8q(t!d$.%dwFe@2xPeW$p>$h)b]_v?p^CB8H7EHZ,tD1$!/`tMT4`y=CieQ1-55OnVP8"O@_oMQ?-8|,gR2gLpQ7tkh)&E4w<)+d(u7u$;?NqfxE_u>EkxI-0_
d)A#EUd|CFt["YkOtWz%G)>Co5PLqW+w":!Yn9s]/goYy1uxq*?jVQu)$"sJ!#xtZ]d-^BZeFj1E#WmwjV>GfHh
vXeONDof
L,kBM[o;WX&"4&oj#4?[1"Dxrh"9c,|2NHA5W_@D<?ep76:*5u*f_n}RT9f&1Y)D%bu]c0qWk?ln&Y"OO_[`@n=Q_cD!Mr.Pn].w))yqexzPKK1o.!D>EP&Mq6hv(i^!jDe#Me^rPTzw^juKJbENH84;"erlM`LIO,%K[!IS-$Qj@<B+s&=.>G4+v)w&Tq(
{b:oR^&u`%+"@N;MahpCbd)=(FN602"9m(!6~&WrOMML8PZq02%C7^oq:d<(PFhdk>*4%*~9^-s9dn$v;iY<VaXQQB.GN.b.P9wI;E()$?._DZII%c>O>jgc"wY2^[:mr,1`Z/m>ws5EgmVd@
BaJt^e*Wr5XRHe/*,Y"9N=?7I!);k5=#s:k*EQ?K_c:f+B8.Y:Fj54d#1i
2H^ek9/oZop$0{!RuVOI$iHai?$,&+xMdhloLZ@

d!4P&4{GP+Sm!^89)"3c4R:)$xUw#JnK_-W#.7mEm+3J;ka;5wBe/:6Ee,X/rqu
w*Z7.LrS+&xFwf[BtpGf7K%C<A337y*R4ITO4O>=MrH7]d25YTJ[p7~0h3b97")TP0N(2"qk?ABN9:{7&8A^&Y;I~R$+1#`R8O
$myNB-n./^j<KE@F-fcACg>mT:+*0/X5k&8L5=Cx@e)=L6_M6H2qe4$F.@BDd{F1@Z;Zk=MI;w5CR@yDTcnOE"O">M7k![nhM-Rw#u#N[%3uO!l_47k060TQK?*v):v8<w!4&[2|,;b7;h"B9fEM#e,!u5?hcb"rB6b!O8,O*9S=22SNx"<-xNYoJG?l:ixW?U:Y:Y%@gKx
&?%2yCEkkt*HkT_"-amdl0yg]hG+nTYO&rKh.gXwjD9(e)$o)P@km".yQ|6mnUy^Y#QL".Ez>9bU=iL/cIeZmavm,l/Ml&kP#"Q5*}bbYGl&Dl1];F*nSu4~LH6Tq;7Dd1(xlV8#?LsV?Nn<*b<uO@7(c/-m1H8b*+LQdOvb-7e6),6v;>Hs7Fx8%YFX;rWIo_>OOzc
Q0ac4"9g@kLLU
#s]>dYayY6F(<!lee.1TGipP7F&NLgmn!L4J_+.ZE%wgPi/_1-QB:G*j@aM9E6POB8ZwP~9vgjp+TyAx-!b"oBtf54`-&)jQb=hRdvA2OT<6p}fVAayEHoozLJ4<=HnGmlugIWF#&-41/ukN([o=B?G-e{[Lo
GP$ZP~1pNR<l9vk#<=Q>kd`4v%;5VV=&_f_1+i)BF4yK#YJ!FjKO7/dr$@Mf;D>|k7nDvcoYRVeAJ??^cL]7$t];+d`&1_8t$D0YISq<DS={%}3k!TJLmk5b49:Xe_G=:5cEW#3"OLS5`
=zr3*]q=H^,bb83w<N3;WLRhpHAC>ci=sU%E]j!N$N<=0l8%.Vuv8n;f:_U*!z(cR#?0T8]F`=p&1N-326_5+&,[Y"%"@ygTKC0=+_fgv^"0HGH=/=x5NEdOG@m/!~k6rV_7_rlm(DR(S9sxgWWgm<#=3k,ncXyGVjNg(sggFO#QK4y/Dem$.wI_8z(-x2U~AOtZ2G<Wja`Z6
%vH{9lIjS7VC<L_8p9UcLV-V;4Lu
X;^pb?+vREGP-2#hFe?PHdv%z11:@,#C(u*T!`,NzUvH^DwfBicVie=*Z=.1Q8eoOv5VH#yWHU+0
4x$7efbcF/>8u`>*$C2v%
)^1=.vC"9Yx{/syh/D[}*
"M`>?uHV%<6pdtomh2_E[+;2xiw!;kYnyI4tc2F!;aNTiI*et~47_t%SXNXMZ*ySv=Jk3bF%.u!X2Gv%R+kv63fsp6BR.3.2o6c(;AKtg1IPMN:I1?2M;%kumxSueXu,eQ/%v=vVrWXTYb_usKiUMA<vL<(pGTxoGj)$_+)~@R^|pmIGT{a"WzU0xwn@J$:VI9:UDYMjo6=8h1ci9^DIEBB-BgrOQwS>HJ2"`!gQE!E0"NR}st)d[{:pl>eT*uh|C$J/v4:YV#&yf)[hm|k{AQsfLp//@-Q+O`"V0Ac!?%hCRT"h%iU<SpvjuV<mo=)|r."&2%>J;%Yy?2pSlp$v3&H^n))pL0(g)BZuu%dDduTA#{3QX#A[nh?feqi}72=&3&pH;?2-+$RT[p07A6i{Ado=^sdCSjg8+`PL#o9@OlD+vUGo:@;vF3<:[@3jVY?WWP1WJy+{dg1{[~
>YH4QR!(N*FT}qgalpWkwBM2M7EFC3orkgFa+rVJ?8/1}3fFu%uO?@4HgA7/,#"H"j_Iula*/rpOw.D86nQktX^h,c0kP(j)<M/4$my
L]z`8:`VWRHqpm(bAM.X"F]aVC`tag.y!0u`d!eR:ONQ5hR:Y1PV(pjsa2UtzFRJKL:6[D2a.EK77^uc0%)<D1!Sn*s?}?YUk]68*!@J-ac6)
tk/Z#T[B;67(.@KU_%`(c^CCYT{QlU9`P:pUwYK^!-)#4fyH_v*V$F^%(+^67Mk(v4[*<U
1@1pgKt,oKXvsgl3r;l1j#qth,wLlj?DMG%y(LFKdj-uj^IW;a<Y).aTEGRcWc5nQc94a5HUCoQ|y|@l+wL{QIJ/;,YUFki]lR;5;K>HI:0
J_lf%[K14pcWO[9<LDM8u<7U-/O^4bT:k_maXU!M8HNUMw+]';case"uz":return'.s`09h"+>$#5$lB
&_k2&,FS1LDlJGD-z`4SxRBoix}cz+_`U>3jL=E61Iw#K3JQbBVliT~wWTav
fEs&5INOE<s3=ojck0*@@Pdi)=?n7(goYFE<Ej:
v4-?5#iV1p%~]^(`iYtBQrQM&nZrL:I,E5Ql9`nG>#5f$!CL7~8S=tp`r=FuN=eyk
R]-L!Q#tT!N%ylBl&5P3RE.s=qvow&5C[)+3WlU(`pSSUE
W`2(Hb7S,Hi!_b|a$
K5/;FYsHG9U]Jg83P#`JWm%^c
71lkB`Z)x-M3)L;NpXR<*fqt:B0ROUDED@IR9CrcWf/T9Vr9-GooRP=6Fz"9,N<J{SvT-$Z<+mAfNdV9F?3]mR
^kRu_wbwF4;#5u()LeQLIwr&XrUZ1S^Yf4?F=h_H!H%5[2rGG7h)L>Q+<)a3)lCj>kSpcjS_mw%-"Y1FNd
xgfC(6D
diSG("$TIZlo?$tV&O?"6E&E;DF?N+Ajf]#&$^.dq
fFn+`Jb`5$."Rv^<A^%:9j}Rj@4y{vdO>%|kS#S&#jf:dSp-S.XH.QTkjE;-gx?KBQ2Fn]2b8w3c`#IF4]|:;%OAPbBl8%:bwSnvmHhl27_e,orP{fjS(x*53/U>yLJ_%.L.,VaH_3b>{xA3nB~k3YYH>aSIa*|wEtKPx,R$V(1mw[DmxVq5kOzhf(Q<!"]V<f-46UB]vRZLg%.NYUx.AWhuR`B<V!.f;9nRUkD+<m_h03OYKk.G6)}87#,jGH"Oc3gOv:Kv/+94Xa;D
);Pw-LE<cqdS&%r#ZE4tH$o068V,JHC(Q5w+!Rb8IqJU9/+TS?may,VJGg+LZlC4rr]IDAy
EpOMsvi|q48
TQ@~Bh"N6IC&QIa7a4yJ^ybg4#-P@iA|9
^c^:RpnIG[:C4E]qTlLjuLWomDGx/bdkIhX`t/q~WN"J9rR[xA)l$H1n!B(B%q1X!qHA!sfiYvgxw*1_b+HTMY6qH
E#cth$P@fhE-l?djr1)2Fy=nm{784#r:j[Cs&5GLb{BY&1Bh#zfp@Ctg%e@@(XZrt+8KN.>RuGe,[7"u1L@l/-A+)a29z%oxpcX]"?7tDM)7vBmqT7XsK9"ifq-6b{D8r9!;8hXw
~=c41iUj$5p(8fy^~s=PaOvDPd1lGf&3r^|:OKMga*Z3EJ2EpW5bIObVf1=@!Y-;qa(,}[R6}$jF/rZVpo(-[d*Ysk|WmJ%ol
Q6`H7h1,w;w>$lHNa&f::%EuIy&]=$JU6<ql,3n&w)76L>394iJLPP
=y;Gu4@([]>dD4et_*,bN|!8TcisJR1W5gxt9(.IR"_t?Joe_(1i#StPj$"Su+r3EGNEu<&dwNEktnf:K2tr
`3aZc.Th0mP;K,0uYq$Aaua`Eo7-!I"L(^VG%w[y9e+hfY:%`h|<2C.IV*SJ-XSqKyq.6oH@f=eN0Neh":I+:%Gtq/7VsYc&_V]?[_2J>8ML7`xq#oX9uwARm$hal(-r*>
iW1zHt6i*<mD$clLj-CzAhdO^%IX;.yP;APGVGTF0Mp+Ba^1sCyLv[Kl".1-v|yNSGc4P,(@-4T`jPcLnK%"(;c)syav3uAq(.`@5L$Y<a/3ViQXj(.PCpH~%=d.CheLCt=B7II6:?3vF2VO^E9p3j"tI=!|W5re5?"/n^)Rt.P?r6s~g4d7h4S9*gnbuW6~5i/{>f0Xu=d|?7jsaY"0*Nm%Y1pPuCMiZ7wUP{H$4oy|S.:-%e$F<Nq"fSXV"g:N*Evc=of}
kenujb$
wpx&Kudh@@,,LcE/zqTso!oIF+Gx`[47@i
?fpZm&gz-z@[p_ILZW67sx!hU{-dmvb2UjLnDNq.VJr9ukT:P+LGIhEx`Rg0dbBbD&lRGneSkG7lqOMe3/m)cw49`eHWs
RO.Z]KEnT@n{.Y)v*Oq2>rYdx^oaHOA8D
EH&_?zR?SP`z-|Ws@RKl_Yt<)T/EP,`n(C#Zy=d1(J.iqMG|l-6holEQ?Wo"#jGxrx01Ms#pj:biyX%SWREUSy$VB$U"7k"kHfPvR(rca+G4(n=R!%i%+jxVCcZ4R,D*``UBF((}j9w48L!`o0Y%$px%^]i6<fDS
5d@u[$?Oxc)O{V<TUBoj4XO)1o(dM4Eeg05%#QB.H,]^!%``O$+x*
Ut3<+?9%*=.Uv>wOC`L&!E[ea
0yc8y:5y/Bvo@107[w&2]kwZ&Yo5vq!&jtHBtf*-@9QTu=GH{W|"s.Gjcq#s@Ymsu.?VjFn3t1:7a6S5#Qi6oEHXI,5gr&J$tr5_,4Q)?=|E:TN;e`vey+.Y&W0cfd|]Z@lyh*mdHdb<$^e7w-Oif60<
,DQR"
xW$S3wO:RUXZZ..]g[eRtN`cO<7nRd:0CzcE%c]3PL$3yBU|*tlQ.>5n3OW_i:i^V1("qi^*ummOeyH
I`!.7GF1>n=F3yL^#bu%di_~+;m|R(%iQ5mJ+*$tGnGN!EKu&G34^7)X5_CvttL-CW,Qr+1S@KO&;
D,+}#jxx3XYZc3H~?|-!Tw<7NrIR8nw2engygDOCmGYpL9CCb}e)X^0
G4(=S[rI8bdqj6h]+OM(?}Zpa1(Xs<REnWp7=c?l<f9X0_/[1I0u^B)>`lrN8@hmYeR`.5S0.?Imk$YMgbsn.5BCPJ]8h.*xle/vYRcE0m.S"By|1U"FL;>aW(2[7%eW]PPs(w_a,9?+E+uTc*sLTlaT8,J_$IokUJ8
)jlTI~*$vin,yrE]yeX
c8CM?bFa@b>EWKO)r=t]KZy%3Av9ixeT.)hawGKEOc!m_4gH3CIo,)MmOQha)RkL@.b0LjgAn7*XrD0<krycZ*R}n|kpLPE"O]Hm0_&#a4xd""';case"pl":return'.]^@ibPDi)R4oi`"Y6J2STDYw1?(x4
&Z9aokNTPhTNH"EKtd;/+S^8@J)u-b#Oh,J<M?utT7Vc5Ow+HJEn,cFrZv57]hx~Z_H2kV
`80qG<!xWDs4sKJsy@3!(PDtOnxFDKhc(c
PDJ?hd!?,T+mFu4r5q"l5zfDpk&i53wuF-ZM"h5dDc+3VVpDwO,XGyZ*1yxH4wA_^hgtiP]iyDA
z!pE5!"A.TG8p8xPn9H"ZVh!qW1/8q:gbHSP-Jp
.~r9ghiGG*hbX^!QOHM|=nUaamK"
kGgKgu0U&?nP-o8DO65E5UpMO<,l$C,+jU:eHnC"b65ey^6.g2?
S^4@2[j$?lgbM[D<vnL2E[JWNssj[
/_x%|XI=7HCF=@KS,K$*Y8$H;I}pCM5Ue%t9BI&!#mGw/f"^4q)tCg^
v7.wwS^woQ#&hONQ(1Y,c.4MB[UM2fp;N4QTmMc1Hj5e]m?$@1AQrq1
jJ}8Zd},.Ok`^kU
)[Ub0JU32>wnIpyM*C+;hB%[h(+8IE[QOv{^"K$CAknK?!JJ$]q]6g4_k/^Rso+]qVr(
8u^,.[G{b]P
qQ9:]q#40#>>qT0!C>ix97e`OyqE@iWBAl&g^Y67ho^kCsv9mdE&?"ik1gL<D@N=[
`^>;^Qis!IrGpnlirdEEmCwq+<TNpS388v(Q4/%itjkr0cb}ZEA{B)7+ofEoMHeah:$$eUXe&,"$tf=exh8OIW^Yxoa0E8k|:MR_-tCjGk8.Ex-#wkExH/MH(V4OitUIX_S~y
S."Ky6[um[2+](k;tw-
*bErUArQ%zsltXqG0x.ZQcj!MYK5+yZkHX3CDv=9k$`=+D[QH26.m-juxe&l:`dnQ{;3
$2aTgd9yun0*<jIZlIzZKa0/zUkVn&m(V
Sh]c&.t;!C"dO_JkmDuUwfo"X]]$WI6R_[qJ<[J#4r:hAsO7nG6umw?q(ub[Pl9w"*cdXo"9[^HI1D(yz1P<RD7VUn|Vgjy
2LCZ:0c[>daIU#_#hP&7u>"5P_c:ZS8v{lb;=?AxgC3u7322]d$A4:0<%MfsX+Xt0d=@=.5x1&*@wu2sL=CZe&6Cl:Ltk7QvU<e+Y4Rveg)exR+&W(5jsgG
W1h4UWX#m+)WxwSEjD<iu97Gh7~2k3<YN%m"LG7fiFyg!sCogMKI)1@Nm9""4fh8!V7etWq95f<qxL@?nAn,Si(&%vvVAh=J[M93UW0JZRxZy(#)It<Wr]60slUmx4M4?8
6suzw8>sY&Rz%`oAP`U:@=qC@]d~*XAOHC<rIm?^g$[".th"M`2Qb4k(lJz&dD*bxebpH@!n2CT^KRFRJmI"5Sc~+4E|Bg0|o=:Z<(^8O@AVnlA6cMZ6P|/$7RF[_^0(cb5Xcq<ef_@%;jH{psDVW
/jZ@rK8efOWL;7yP:+qZV{iaT?6Yk
lbb[]X7T1!84[@rF4Al@pSWb6ZkqJl:d[O.#xVQIXUhsOkol1tn;G.(Y40cQc?J_-,[.q|=aSg.KL*=]/}.D8iN-ej17hr!&vKZ$]@#5-sPXUS
T2e8a&&Uz+tKM)G_?Rtq]+ZbU,O9s2Z,1Nn(v66B~I}TK68
~#6_,KbPm7Ea9S2ciaA*A2fQ849t]%@Cu%PsNt;WrPpZ;nYaK8XM*#jbh!U!1[O_:?"e00anN%xqzS*c4QrYI1dHQ@7[6YLqMdC
T7a+-Qi*qF"A;<Tu:8.2onIv$y;NzUIi
@:4w2}9o#`*
mKlD!ASZL(/k6-^qW_e[DlvZ/C.|%*YD$U(P^0
FmNYt-0e4r?3V3m6{aUc;&wwxh7#Y9]T9WzZ4[{j1oI.u&nAgXM$OFwB81/Z+;|iTs1(*e/>5_SL(VF7w&g*Ud:62s|<wLl&375M{
pVbyr%iJFA7`O3v<80Y9G5yf@B2Cf$kQG!,!C=%aAC%rLI}P9v"aTikh`)HOF(|LmXkG-Id/eT,"fT5PivFXXMgF6/(#A$g3M(1R:p7D6czp&Nn%Y2zwrreoYg(?>$1dLxX1p?FPSIwyT=l;AWlUO`vd{%Bff(>Ii+;
(r8V2
WSM+S"UmS_2vbCi,i]^/@7p:~SUA)>XBp)Ri5,"`zVV8}*aIf$?l
aT$q`{a)CC0wkM;Q?FXa4wIJJ"i.$v:J<b/#C@VjtiRO7Bqm&]GUMoKsYM<9p}
d#RH
)HH(7:p-W/Hb"&xUE/b:/xWEVNqz2KoU"[t]6)(G@VNjE))&-KGf@9@sG5".qWd~E$s(X:""d_rK;<$yem+21O1A#:Z:7n.#+oe3f~^6?15
H?*IDh;>@w
9F2SEfsvNFW(]FGpgHS-{LVcB
*@@^M$t*Ul^*6/{DCF<tt7VNkC3,Wg=!FdoHVhgct32vmEG-ll79Go-cCQYnoV)QcvfP%?n_nvQ96]J*2Rtlw9dALTEX+Zlhfx`+W>]h3V<<dKWQ8w)MJ*J8P<Z(z:H(#9Y=3`G#vsK9@Y
t53yd[Fv9T6gcQ%JQgcJTB70+P=iZS&%kBg6bI@%RLK]nWQkvDr>wI$s,sRum1#:Bk:x[e?{mF#0oHfBr^K]p<;il,)pjqBtC]%rZ`Ih;>$,-2VU7O)mbH*@tsat6,ST]/=aPNi(fQ9sZ[OAuctw[
H/Si+I_GC]0EWmobGCA;k)rR6;&=:P
212.|i<Q:Iu,F%CuT7MsPD97|.?=?O&*xWB?)`Coy(T1<X6AT>C7iYVyLs4NCW^S4`%C$$L(x>TL?VG_sqI6
GO02>!/nd
AIC)[1OeWK%Wez/
hSmk7x])4caET>hT:rYt^nkKH"YZN:!dPj24jel%p=+)7AjU%C(b3#W{!Dg2HZG"Ls(xJ<5eMJfwU$i(D2is=QS8q.0q%<t+dz`o2vNQt>)4O=7T_
Z;K$&uV`Aik2ejh[Z-%Y$8,tdSq??U6RqM3[+%<dFPHdKBWJ-L8]wAIG49v;@b=]>/P#
GoD@Ga%A.!]bsqDA
^{tz9CjpRCR,BPEg$nQGj~q8`2YYahE7i3O|4+Pdf7F:;Z%/*nG*HlA&>gD;pk$@u!J^=:<2[;ZvOw#{y=MN-ex<@thDUg&@;q_r6qEPn6u8rjed7mlcx{r/oY]~a$rFWxM9(hRNMb
VvKp
QjvT9{g.6eyq.D!a[Tyof^i
%$!dy];nYyoH)/^6frsO^t
@t(jUmw[%U%ixiQ3uIw8H.tNHOx)my4-.-q^;3i>`q>YMtdgIN
UG(yTq(p_M
rI!Is=B;Fg"lU&4>RfyJMUpUt*K47mL2.:+lj6JfwODep!<nh4/@PcO`rG&79f]R60{U+mtL.f0LPmCx=?8V7asXSjGA
`|)i+(Kv@e?|IY$jVl5{E{8q-GD0Cvh8V/LcT=:3sNn5X?cN_dh=nraNEEA;yADmX?,Wa_6~_iAS(<(7=@[PY>uQ(aK=nvc3/p[M)_Sp;&Xf[^w+%w>K7(E"U*PKq0?v@Pi`wBr|j:ldJCI#Ynz#;jBe)x@JCO10F,R"Vo7[%2SJ;2s;]X4,n~Ts?w"9pM]jle(YcX`:Jq5=VGy~xeN&';case"pt":return'"]^;:aMDY)R?lk)$/%kI_+S>IH`Rz_)+U9R:y2qGJ?r][0iVe_pFCdBR1"dib9!:zbd)j:E5)03u*Ck8s_&-Q%>Y
H#BNQ.,s-nn}jz-tl4fna(demd^y!olt_IQs^6mkYhr:2L7F[Z1o#vcsQ&yB#37]C>Kca3.4L;G6r_H5z$&DYoCSJ_SrQ8YWdP9S6)Ga5+kWcShz_r"oADhV9M]V5ryvmzMJU#0c#;xOt%^h_pb`>e9!P%&(8<Y-fo)BUsPtn]Ega&<SksxX(cyk0{<,mCuL-Lw;,Vb4%9ZfRIR^
O1Y[K*D[w`<)EFTf!r,iimy(O*jW7t
v}]ssq@@`$MN,6#{.J:%WHH9p!Hb1MQzHS6Qpl+{,5
AmR5{xY$+V/9Mev4w@K&[^H&X]a0n2F-"I-,x<SO""obcdW1A^]C}2{2&[[5>jm6mjR;(EPH*;x$KG,-N){@qOksQ2:w9jw#J5%bB;3-*>xtG$Pp5QL9K5;q,iLVNF-u6({mcWz?7T)`~8=^(qe+tnoTB"dWtXxiuP~tL/}s^E@:aI|rd6T^tg]XzlN
x+s<]HeHg/ux,oTw
BVRu05&nZaosZ+U>>-.Euv%oKuA<HJrYQ.=?74TkM]^v^cOT>:-t4;XhVylG6BH8NiXvr@Ox4%5}stptG!ii4tf|ecAcp$K%wD6I*d/]IpiTB,+!p^mfajA
6UBOjpaQki@r>9j
",%)#-cr?4q{agreCb"=)x[twIy(h-n>qa0o[xn3PB/L!-KBwR*e9fWG"BF(]80CQ(YKJV"1l|EUDl"t.(Sp>usyP4JgM|&i%8,K)C:Gti5QC&a9=cfrpM
<1{B>qBx[NQIZ[TtRp#==G*!,L>Go0(APibZ..(h:hGaNg#3U>#LfbVT4e/57I]]X):H,V|DU!IJOz!5eL[/IBXWPASB{>33lm]bd2bObT=8gszVEM4sluHh3U6*537d,rB5=kh:dL@e;TvV5IbNMjE+=_(d4UETO;d8Fq87^#pX?o^
jcJ)?9YUTU7BYu;V3kf>.Hq7Xt0@22obu1=-}Yk<6Q>r-aaE9oOpDKUT]L4W.#y-WA}
=-4oEBD%a,qLQ8oNWId77N
7
;tqFqAeYMh[rF!+paWLECHQ4CDMBB0;Hf~vg.DPw"axjZWK|78bAj,2$?hS_b"rYoi*lRLHc_i*<Y:P>"(C5:j"%0N^)>E4>4VN+dd3}IiUt!kA}=;Z1PRYiDECXixRytSCKF08Ij3D{u5iqG(K;_^yv%gcRmUG6MmXz8XJ{q{.<3D7a,0:P"vl6W[6?0t%HJ>)Q=yX}1KhUa.Bk[xGx=l..)$B2((l[U{*`_}2{7A4x9S(CJ<8;sCQ!pJ2J;(`)$vqJM@$vpfmndHjECRWBuM%
pkc,>1:a,GCyhk/h&^K=+=M|)7TA_4<kr29h@0ZM>y-ac<D7>ar?$JC[.DQ:*AGCocUUOJK=%raTZh"45k6{ka<NoO$Yoj7iPboJGmfns6:6&i_8aYNX3CxnbP0^L{>zH$L0T2g.9racUdQ#RtddUIg,Dn#n@QEWcY+y=6CAChqDif7g+"VNfkW]y0lAr*9N+[o3u<?Ua.fC]n6Ca|!Zf(Ai[;W|w"6RFJ`RwJX3L?f[RJf
r<Ycpi^
l4sY%^6;:>q{4Upo"YlaTX?j.:u{`$
bL3ds7utvb}w{klVnU+$z^zXF#gUMSLhv$
0p<y;zG
Py
[*.iS8W9(mr."I
r+(zrJMO;QVt0/M!9Iq2DOY1[
JCcFeyFp^fx1ovditUF{!J1ONZtvP{Q/2tokpeU/[K$ie.K0WYW0?/Qv=^Gz#:5q!aNPEpW};o/pY}VT[6D
pCswG;gc^364uU7>?1dH/v6p*JJobT6B:I^b<Va0DFU!I))+8F<a1Fr{L<y"-2T(F42GvcN=_&^)6WH=O"g]7GHxS/OMjw<(pkANH!x/-^pfc+dY`z:lEMkDMx0VtQ=^2"]ys"%z`.dy#f?_k
JOwy0CawW{;3.E!yx:$CTBycoHgA^2RnvuVW#WB8m5@LAx%,e7"*Lth4wXYAm(ZnU(GN@g8g/.-Ts`!Cb4Pmn%[dXTw0VAQAh%$o5>j:Mn(Yu"T`akodsW9uh.bYy~a]m&
<?)5@q::l?=
*ZmuB*)js>hq{hN4^v;m9<IJg$
nk-tj?e3
#]
E-g")rowp(cYW;^Lf&V[hsx1;v4GA+uCI>d}>K1pCAOv0u%C12B400aKkkT~fyY9tERJZT>I?~Q{[l(&ea[G-uwugOwV3!c?T%Y_;g7*]_]<`I-w,|h7m$OGDW9s[6/at};Ec=]igdj=hf+VX8bo&gs>wj1:M)twN1$dRl>C<G^#BsVD;jA*!3:<gm&RrsGuTs)<kKBMq0f@?|nP7uATX]!tQ{s.Fs@RJDW,Kf41A~X?bhV$YOyemAm8QLy67?]XV{g^1kxC6`"EMu)Tp;:Z2ux~d1GyE=N0^V"Y*YXQ?=VPQ_+juP#8Gklu2:eG=ziUW6"hWL)d&[YNc<RWlnm+Sx
~Ux9}^pad"ORm)gONoa/x/sRS6|B9kwj5`pkO6X_n]v)mOHM7xDFlE=`PAcAj#jQ~
2R2ImS8tN`g0*i/]RcWc24_RX(&
U8ACXE^/:x2M
PyV&F.FYv+OnFB?i;c]Z4i4q]g*$?s>[NCZJj|OvTx?[W,8h-:rP7`<!
3]?7Dd^:JlC<1qO/w=E7n=1JpFMl3wt@gB+s;6J^Pf>s|m<j78l#qL0E,<O.d,V+So]vsJw44xy.n)lo72V3OQj
5f7APD.6dY
J{`PpVQ1k;U-nPftWCpE0-3K1tezG
ORIqmx]Y3M08m9gr*s8+hIeluVW;="!fVopq(FmQxZ?#q9t]D(TRjFS[=N4T8nmGY4Oyb4QsPuCkrh"k6!LJ5GIim)d2FCy7E+6bO;obbZgOscgCM2#|?cY>-s!^pE>y=WU_TmE0n3nw=r2S;,mZCyB$[darXZ;tasl+G;IQ9-((r>tPB-nvNmCW]x."pyc(>oem!{q%YYFwh^CgSSn$Adym99*6+Df;db!baO%~>5%Fw[j~tlEG[^Qb=z[/f{U|,TQ_&ixsT//NsR[Le%0FxhH1#p8
p3sHx:o@
/';case"pt-br":return'(]^;;5ID9)RE>k)$,,!2TuuD.Om:
o/<Vg!7YpzW44broGbUVmCQmrR$[,MOQ",!
8gGl]F,(XA)y7c[bSUR7c8?<0spPf:wXu:=o&8A5wc(A2mfi_Ap]b.^*-v:#5%"6]]r|O;rGXj*j5Q=pu5pBD%[fPo=KmAxpH7=CLCb^Jv$S=s2i+*PKu9J"w}DI%0tI`p&mF|1$Gy5kP%DuEdHxUw-;+Zv]E%xKRJ0#6lm`kHMh96M=RRxDyMAY,o)^yrjvmE$>b&ONxWMN.|^<`F,#+
a`*scr^uhVb_PKw0A9ou0~Vn3S5tVAo+d-J
2n*6W"Y^KV&nMIe)pSc88aMrS$JSs)OW5$-9E(-)U.V%IYMvC3@Ol=l.SzxT*kM@G`c,]mPLn>YS*yZ0(TA!va&E+Cm^d`7K.c8@@/e^#(qrU4p_-jOGD2S1M8+JK^BQK-NaN=@W"FTxl94)({Wt*OE*P-isBPZEOkOFI].dTBKx`uHe(kSaIga}#(p">wg$(4pzZo%h,aG<uL03<o+zq<Qm;i#iB`4CV1@-j2;4fqUorr4dl1OGmaB4NiZeKcE(5-d9fS0-d}71]bFSa6]y0/oJhd)S8Kl@laG29L]@kd0NYD!Z;1DjqR*;9H/8KX0H!`[8;#)o%0X2gBUtVPWrUT6WNMv>5iIcVz,&-&c:?MdM5B2)57LN+jjq2d^23_.MFssE&*OjH.VQfr?:rU"a";[e64:BeZOFMhN0Kz#dLR3%@X98yKLs*%e]gwj:=X;n3cxdGj&5(,v5:6Vdh|GAFj`)TESX4gTg]<Jpv<@K/Pd=@]e76hHg!fm4maiert%n-wa(I20M!973ods?PX+MVFqZN0Ia.A4?n,sk2Tku<!:rYjB:;20Wtl>"0I%Hx1B9Iva~PUEdpvcER2.UdM""i6>Qu/&&e[5}s$sU6;dVnuZ7m+CI8n^UnzLa$2.LKS(JJXBKi[;V;zt^CyUsS{CsN/Tj"]E(i5Bzgprz_&A,1"-P,jHcXc(7U_ga(6i1s0T>d1so"teV/iQ(=tn*xH:DQ&&K^h^"K_3S2lEcpF6$0>qrnITlUKjP0nOip6[,SU4H%YS%F36uXHL_JgtVf3VXKyq-v<bur^X~nu
BWI%cHWiQ.AB`GFBZpOryj,n_M))7OzK}^%Clh6EZQeb$&K$;dH)rSwRX(Fs8>Mc@[_L*[$KI&-z"gxg^hf>(@Nf0GqY/S~yNYyC$9
A|s/Fffq0;*uF)),Ixd(jt<S7-jMsyVv-V)5?y:@2#LE@QmU]ZG!s/#h2g
88?,U8JL<I$g9%/7oCZTJ%*2BudYPi.t$-"ej;/fGD9lsK2a}Be*ov|3H"sokPHa7jK1AR?<eO6nU%.VR%vEE+/2`u[CN(6-VSkxR52imki%/7s+pc_On[QWnl@yyZh#TvX7D+#Nu?2P|#hc%"<ld`"@`Km2_Lu`+6Uo~"!@~I/*iD+I*CHM&#@R2_@jrO<qoX2C:T:QPM-)Rd*RBPD1KB42;:r>F0Ug`g#qB3%T2+6M7P&s(1:(4o5l$`4Sw2hfYvk:ioyA}]_H-W&nwUi,Q^~`%T%+l73[OFzTz`DVxvWPCtc8T.+]f92OYv%cN/jwr4/B5v$0jAW&fg92z<4:xS*_Ar_EF.
iz[@/)-,co9mYk",A.iv5z9a/dn/S~!V](vy:A7/&=v%(.)2oonLXYMJ(MXfLDe%<FNp/G.&rE$}55Ew^DL1i%WA
r7NE~HdA>1^cb:^=",m_6Cjv/[1%1AD0;N^HlX<qN9Zlk>qA;#`fK/Ij|*#<NED",-hL$ltx04V@@M`qN
pd|ZO_!Se8@0Q_m^.N7dCyVd[ktG9f@V~OF7{S5A%GCwDaj#Q`vxor)A.k]DGn^@%JzUa3lks!
My#-E<NJ#,uGF
BA4TmzC9;S:iL,PO
<S@[O9hIk-}[%=u/<9Nh0+J^(a3%6m"gb&dL?.R%)K]tld`Y.nW4NGj7;$nR8
yl2C-Y<b%a6DNk@xgT%(xTn#L9$oVwfnx0=](T>[Mj+8LfrcOqcB-9Totv0y}_z`>>sPyKp`L
&=-6U[k]iH(vmp2$@n.up[7P_$>QsBM?a09.:QSo#tlw{(&vK<k6T^99%Wbu2;Vo{I[:nDrD.1A%0eebcO~lcD*<YcN0Gm8A]?Tb+_b4dm~.!RnN:1Z_JY.O/XRCI:I8.mf]e=oMr#3"Kc;39j!Ys]^6r!t*~B2=UBGWoU2rPtO?TM&VU2o/S_?S1G5-`68Tfv>raW[v$BeI92mW$fcQjjn:#
A(:pn5K[z1ASMQppgZ~g8;z`UuH`G*NWMd#-2b(#q:S*z]_5Kr!:qH3%|I#vw"M05v=<4Xf8T9,kV;wM}F%K!9xI4oHs^kgrKt:hp
tmxGcXWqN1Y(nk//ma_2zRnhBM]r&tu?dB%iA:&r]qS8([dmjZV/|1hg;L@-DHT+>;6uXShk_tr+u./d*K$iZO9)IlDCIpAN-s=/2hi;t<bL&p~4:HtUk>Ot2@=qESeCwgTWKOl,DR
!m5<PX]<N]V!+RHf1J>Cd~-iUSQ&IV>s-gx9]^#IXjZQ^<cp4778V5d*WRN>^5v.47:/jVq8%/A0L}^|8"G@??uXR
klW}WPUUVj
):G1Zx86GHc>0wg.8Mt
rQ6GM0,tMjN/%yuDBQa5sxxTs7<Q^2S_L4MO4EQMD.Zf
G/pb]wauyRvG2~Tv1spNTw/pbV?[s|F+h+r;uF.
N_lmmXIFUq
N7j5T2`j$Zu%G(B(1u_`7a)R[5XEm$1MvJ(X)8!ke=3+J8d^;Zmy<D]t:E$0TGO1AmfINf!*Z(m%_V.U
_*_JoS46M7V`M/I8FD)cFA44OsVVC}aF]$M"Ky6>K3Z,VT9]2!Noywea[&
$YdN*.iYt;s!w
_*j!P_6MlKT3@Pq?O0f#3g(C&f:P7E[;qa1K3tZHc9D=Qq`C[M^73D;XEFSVBNmmnPuI(4YE-J{8HNK?8vB%R]
ERy+P%xM*XDg1~@w2GTQm6E^^9EP4%*}AswjgrZS*_5Dd;4B+2Tru0.N&uasc2y~:^6><|*zh#[*=qI3Np&Zv:Pc/@[xQ=bd[>H<l2/Ve$kamiIVgZ/3.R.euSqp_*-XJrkl/aU[Bz$(';case"sk":return')]^K36OpM*W2%ie#|lh!QJ7*UgxO98bC1H+NNVse^f~9p;C-B,c/Nj23(wH#G9g82i)2S9hKQBz;L
ekWl|RUlvLj0OJX
MkWMZkHG/j=4}1)>hy%p9cc0ZM?Jc[h<I>
j=)`c3u-TyP9A{s*fY7b>1l?nBI$[~mQy"lARm]S$
/k[7X2.:PNDKFsX^
Of~Emm.l%w<pSTUi,$!r]@Z+e
>DBD~8JmN*HG+Z51(hkz)ryv9I8N#j2k?5nT&jWfrMW"$M(A5yx#5c!I0nvj7]akC^yU2]{Mq#FUntg`+80m#yZ?>Z/3j*;SVUWV-?,cYbBXa7z2abBpq<R*pq4aK03k2+}aQTHZKQcF90Q6HvwJ,0qbokqy]i/o&YC>76Y`C0el"&#Cht0V[RnZsy0`ouXy[?fw0SM(PkF$t9{>"sB4%Fd$cpsuxl#S3dKx7GCC@hgY/o/xzv~Y@GH&VA$y#q0]
#.`TM~.Xp{we?>]S2Tb{_U#}!zd3DmK|JBpW<P_uN,vNVI2+i|;wy[;{)h/[BB5fKfP-SrP|SZTe"PkR(yJgg{[E1pKZOB`ql@kC+.dgA*wj/~(w"yUdCwq|yb`}[~,%o;3@[&`fF)YnK0Gt[rWZYROxRR
x5Y%Bu-1U&/@Wwo:?vganqq^~)8NwwH4QRHD:I^YMlE&s!s@yZLO"Dj)@Uf,Lo_A{-#k*[NQi9o[]=2J3#.CN-AvDx2JVN0=3)0>*cwFaA,!ue2Yx*aU!sgmu,-NrO%#;Zk.&iZ23N9f@?jjC]3jWU=mZ[XY7TY3-h~v{<y,i_pr!wV>?ZjW=O;P3?C1A!;N^v1*|1XI6g,lYxX&N!-qawZ0,&[.d>vigs[iH"7,/v@Dv2}Nnw]hnUx-mT]km_]@DRBA#hXFqSV4T(^-Hh:jdTG68;:2a7LQ:!j$g.JiQD1>aPVTI>711CPAE[(VTOl["8Yj&o]k^MuUpHiQ^ak0AFJZ{C|!_g;HXwpI[(3yr[r@J$b&Zc.(|t8$wR|:Kh%w%
XD_:~d
5kw8IP<CHclG`>I`[gb&J@+(yF=|KZ4eD=x)d{
:X6
Jv9YaFtw$c/7isu7"nB4uGK1/X96H<Unl<ar1e@&c-3e|mpNKfEYMKMBad%Vm`lC4Ax!h+X,"A-Giwl^:Cq@bm{G7[7OVkMSFayS<p"(il^w34m6bA"`hTSo9JUlU:j3](*b
(8>0I<g=4sJ[He#QiuPBs^]?eHx*`u[+hzo.XXJ=-{fjU5/O&oGJBU9>5BWY2b"1r&^UmIk-nmp9a1&OV5g]"bh7DkjE%[gMA?]B(XlTAw-vtrgy*/$dAz=T^J]O&U[LCK-/6fny.Ex_z!JFROrTXFN_pl0|!-U4<:sTfkuztv?zaV3k!~9|wlb:Xl.8A!Ox2hk5ZntcqvU#eP589~($GK6QX^1mg32<vk(x0.SJYk%/"/&Vv-M%(TlwHNb{4^n1&bSL2"*wCWQ+-z@H_cj`[}&N81,M2jM5yxJ{m0+ypl9*n?x+dy8nHl)"%TZ4"`_kv|BS0DS}Sl^uXDR5c+0~T/H
p=OI8V%!xwxop|(Q!A#t
&yIU2Rn<Q0!(=F/"BT$OG<d9>!&S:wSmf71;YZR!-d2!2@Ih_PCC(N-Oy&2r
]fd,^ey[+C8kdhKs4+8Ii{G8sY<SUeZN`6cLmTjyT%!+mff)Pe<|$Hx-3*r/H2Kp&+ZYMy@HI&Yt#e74H]vQ9j2.k^dcgwb_)!QCB3^D*J2bQ`C
r~)?Y^Eka1/<cm8$ig/:qa<p`Q5:9."&pL!1sr#kPEYGS,4mZ7owY|F"8EeAQy%54!^^[4bN#AyzfCxW`4ci$0Z;Re7A&Ti?.ap0j:TMu$(eXFj<0qtMDjU]7,V,=,%{%JAYmcx`SN*Bi0f#^ZS33P$6oKusnV:-.oGJxVj=xPZO%C.7P0UF]|W@3|rR
5AOel$5sC"
usIx1uRDaPT-
W`<^Gsi2jXAPR"eW3-c/Zp$O=7JB(]Hd>$fI9r2Y9_QPc(:D<wsNnw#64u.aJ[nV[!YhCt1Cxa$4}",Q1!n_5UIIxt0oRXR%@hB]Y6{3;L@0(?|8!$x!cE(Jl:.RuSvyPBi"qN?>%oy+Eh[<"p2%_RQ;!A>#{YIP$S|``_I"5)+Y!*HALayFuQuZVk?gKS~uh0-aVujN<Hp$cO^wP9<=ycU(05<qjZoqvvq<0/7Jn#`v=)|7[mJy`:np8=a@Pff*.-03JWgC(qSFN7s&iGiB|;mTBb^?!k%/ufqC.7#Ks6;a0C4ZMM7_,rSLW,n>).aZe_)(UuzKfksoz"Y1/;SEj"xp,Gr3yb5^<P#96S"3`4]d/$0c.]+/<b8*eI8>ya4Bi*,sVlLXS%mZ?oCimJ5hvIIh8)-K?
^F/7bU7`vsMDgQqQ/r/Y3!yL+hC0>S>u^dEbFqceSV38QKqdBezKQlnW5L)e"wCl+/UmOdH_O"Oa&qrN-)9ppC/![[i`bBN(Daf?&w"^AM^h{@}h@*1HTT"eV&ug2@_!s;_2wsqx1%%fTgR6s;mlE`2Lx;Gh44xww`zj6VAMIG!dU&6^Tb;A-s?r&eb@kwH%0()d#mh7nL[
)e~/1fN6!Sw:v_ktLl?ke/Gh#LiD+4TR|n>Vg?tE+DTd<J=-A:&7|3?Q/wAh#3-%oU=:vJ[>?6=Z|vcL*DP$Grt.meNr+<Y!^C[y.R}@@IExP9J)pqp.RNOi).Y[G05V@IN]bhc]b+
O(A]Y|t7S0V2hft7qZk>2,i,YiI6-1IJN*N:0R_ia/2le[F^mmn(hu;mD1ez?(51$(.<u-d|2R[f3H/4%i)6u<^hS>[:7MN01aD(JE2~^#`aSam{%|(QGlUyBU>=h,
,06O{Q{Tm/M<u,cQ>;`Le7gPRop)>2B2R
u+wC?U(fm`Qk
)X0_bdLW8-d,HYe4erE~mlh
=8QnPyPM[h4P8i7FgCkFv}0?R;X)RGq1V;E8[<u[8~TVdaUVf^i0nNTT/)2i>soBk*DkpzW@(ToBwt+nJS(x]F/}?g?&S}p?]w!"X[&uM.
s5KJUNVU]tBCf^1k<3"bcpj7enf[F,<F_SQ<!/vS(SWv^C11FXnWgj4]t&*k*)4jiFXLKYUA42Mc#",Mh^W?S:Of39"fRSJ&Hg^:LsfgCHeA{F4*z_R&GCX1y`6C-60D7Re^ITu3oZ9NkqaG8%|XHI#S/DYs[K:+F9J?|U$A5W)d_S<=w.L!@xU+Xq.-4&];>a_A|3]6P2c2V/$<g:w93,ymJx&1?llly"%Bs%f*L4Xf8/>Q~!.cwEPbhYqx)S4#WdpP5SR@-K&?)Si@87y>L%xWi4@d`RR$ODw`s4w/5gZDK0|rkPr9RW/5@G{`^Y+X8L5e{GDih3*rYfV/]gJBmp/?Sv5*V_=FI>`VonZT4ygxf^[!mW.Ed//A`EdXowc,XLQon;**Pt?V+("HKc2KVDppb4,Arc313rskWqvA|T}tXpc(a2brzY{,Ma_jN96hgT:Xpxd';case"sl":return'.Zu;:h%pM)QH!Y/:9sP>(dstET^.>n<muG@Z%Eue&.n"D*J"B)b,d"sX9Nuo,@m0jDQmnm|JNLCmJ[cv&DJgSMYE4IUEH@JkbcLk{l_BnfZp;G)nEwXks&kkLM{ZwkSSIwSD?uN.&Z1I^B~L1cRAJqA+T$+g`XC"Yc,z"!tCEn{_V]zhl+n)V`JuuIi+9P;:zLuo2<IsRpiEEId55hmz)rysfo,luWA6UL}.869bZN7D|yv9w]k2X(Bw0&3r$-W7Wf6a#VL4fI6x^hLL7u|Z=cnLG"9u*FmJJT0
VuAFLddCKvw<f9FgSbeM,Pe$fm^/r1U
yZWXD!ma}/m[y[32GsiJU?%YK5vcJt
<]P/$Pojf#R)olST4Yabi$UE7YI<+F]*xG?SY8c68;8]V~Kihpr&Jz11.Tr";Yul$TI%AP+h@Sau.Y
Dt[qg4IUn6T(IY+r.cfc]PNWi6{`}/]QhH.^?gq1Lt%qXw7)"jyflSKGkv}0bRn$RuX`59GytZ?$^o.;`EYyk%eAuXQo#@A$[]n3z)oLn2%5I9kTH/NWF.MWLMG(on
Cm&8GnP9VNwT:)hu=*`[ws0vT[HC"]fD&PUPrSCo9S$3#kng4T"s-SLOh|B.JHR`vBDc&6WfcwlD0Dt.(iUs)(vgP]w/c#dI,p>D`81WmIN"^z+|HYq2?}pZ1>2GlyfFP4i^2hv*Guv,dFc0l8x(j!^Kne<-3m5Y!{yPc][uv&p4KV[%4h(5MsO$PAs:5<nud|t}M1MQ-R<MMqu9-6n?P4)e>8xRhd#BmY?%VE?%C{G/vLI+2mL`Y`s8Ea,wCC*Mw:^6NXG;Bv8=roksR|SrifCriFoPE"JD%0.y<+bbLN:iY=yq=^*ugiL044HWv&n1mDg*jxx_vKHW0mqtnwO4$ZQnZNY^nT.{Kc1>u5UzSiBH>TPc
=s.x!`2h"()yWv.jB&psq6jPz
_aPojs2Pq-(oST,_7oJ
zT!SZ,f[N+Nifk}f/P37UMm4vov[bIVESIb[41z5v!LYHM9,=Km=,4r*%RJ:]EA])V18bAgQ=W0:@C.`(0WQ9IZc{-KxhT-hSG%@}6N5^$B:.2g2V!|:
&q@UZU``](jfY{s*ebl<xEn6sZcL)x/xQJ$+Oot>1vC_"9N!$4).CZwza,L^l/aUtS)TsoQE3&PZs3xcO8CWBWxcbVno7,wfIyB#5B+Td=/pa9C]/Z#=fnw7$w4ja"QAdppLM|YK5i0dnFE"^,p=f2(P4+0LHlv=D*!HtJw=^7_De
.Y0u2xnZVk5pXOM=5(qS^bQj)$N3Cr,-d+eH3p#_Vr=^@VJ<$yW.UXe,bIEFj(sdrILb9U?^cF-G2~Q7-F-R0.:#v.!aq{d~7|laa8ET32/`y1&o?]f>"G&fH#V.fzHZigyJ*<Y<Henj"/<fkq/t9h5]&~BJ%O
?`xbX1P&G:GV!o6$iU#`T10d
Z"mcMsLPP
rNf<f~BXv58j-g&qtlO@kv$aAN<J&6T&F
C[MGDY-s1tn&bn$EjI-@.,N=3bPaF!>8>9J8(-_Rl:t(Y$-bYlYrH
B}qXASo@[[isKtRwp`ScH*`AK|QO0[&/o{-m8Mc]!mAXCrJ@SC%
j>n!p8(|;0b;])(GBMm`_nM4n.v=#M6)R9Eb+IO~DBQ;.~:nq]b]"]nM9Zr@.QG<8k=,34GeZW[%`LeH@=5[=[1&fTinK)&43NkVGDW,75)zI9/_-%;P5_cld(V$:1V]RAW^^U_Ef03/I?:ltzU{M,&3-xQ=jj#$U7aa4.MxSZN~*^(U(g3:-1-]Ewgs;^%l/H5{dnc:e?]Y5c"jG;mCV^YI$3;4`Bou`2hrXD&$;|8:sNYx2&o@0Drin/Qr<D4SSj<1S&byjv8LNn@C-#2j@RDDh8qlh$0m@$3#&`g<(x#,Yy;z);rByO@NcwoWPC;XIc%v;1D5Oc%Xml)G8hw

-s0Jl@Xe&-8L51Y+nV;+&e*DZhr<"M(Uvei4`9D!@"NQ67(5k/ck<$~2ke7CQa{@c:a;H(S6#uWQJj^w-m/-eYb_o/Fu]>Yv8g):Gc>9U"6/uD@iIia7TfzB;V4I~?>Ld7i/5a:I|nO$PTC>@#V3zb1S<+O$PxrN.2an[paqLxNK1tfj~:J@hV&p&gonF6$C"P$NZdMN1@fS*dD.+d^PeO;h+>#sT*iL;->,C*Qs|[@gIj^
{OF$D%[[[74Tzk880X4vtP^.wAj
}b]Un_^TnKv_O6:wt$&L9IL6JwkV$U2=52NA
I5A|G=JwcFe5JE[Bm3&U9`^a3sH@trYA7c&#aEdT8Xd]]Nq.?TWUUq:DTR^<<A!u(3eO_(;$*`
Y:`Q>;Oc,CC9
ai9Tr<P
Alt}g5PO`+()/+YU2jLd($F>Y=kh!y7rE-[75=#E%SucFAj05[)Fx(:&4QOv]wJ
+gK7Dh2`jR%:Xk,^1/jY<(&$F$S_79r?t0DziW(<W|Dr8IO!5`=y:_-Mi49"XY`^y&X"1[@j^xvPS(vH!F*CQV)J,eZ
(O0P@]6XjlXEj_TJ]oXtpj_Z*qR<>us8d%?ZBNiBP!16Mqyo@WX3WqKRXsm{2acq(ZnV5D39
zE8cw6v6L:<AWicQ:ETr20e><Sl=qh`Cr"dQ
?&I9;}jes]DLj1Yp2uiAfUKn<@,/]t!!Zb@J`cS(N3wM&JCU*$s}YZ?_EuOYnf?s;_*CK>Q&Pcib3^?c_A8H[O)Ql`)8.wfaR"`]IHPmH{<PhUk9?j*9cee7PM?<n|$fV70/_}v
WC#$*0@g@4.I5Bh2BMp8c!Y"wux>1VJ?^JRhVQi{Fr[^enPRK1Fn)
N_IpgT+yw}v"yAaNojb
CC0Y/z8E52`qWk%eFm$;q[hN<SYfLym~1w6=buac1~$b@Gwm?0y!Q)?FB-!@JF+b@{kPI|6l>PKtAnE<9aC*@bMZ5~.kA|&0RaJgqRJ6^tRS9s_O(Up8SXt2^fV}q>p^H8)o/3=^p54}.G<79ln2yn9+.DKo5KMx0uKxe>kVxZgFEDED>6=K>FpBmfvtUv^eekW]Q|ErwH20,@*b*VBi>{Ut^:!YPFD"C/=qnkk3p9Fx,JfCeHu0NL>hSpg1c6-|rIk;U.7bE".LiyQ1YwJ&bECjQsUmi[FXlg4XD~gBRQ*un
GUVe-;?@VsC%F5L,^I0%WU^A6{]ZYxmLY:Vh0&*z`#z%y*!O;|wdII0rkdryB*SZx(xhCFZl!89+Q4U0
{",#;o.EBNK*ZZSvI`4vxC=ayEm0*8oSuS/VC3z62+Gm94[ZDo{G!V
T5bEX%sA*d;alyPRha%#]*1&oLNeW@N&';case"fi":return'+X/@r6OWB.C,g^l#!G~[j"99|U[1Ux3J3:AA-mq#P8)[R%9*^$%)o7ryDt$&-%>hFLkrh:3GqV^*~_[e_:ln5XYl5PS,B(4w0.<?.6roac~p*2AeS7vjYiQliXe9ZA-jgt#Z:[IX<wG`iNHv>j:-V5q]^u-!Pu,TFJ(<{K)6KR+/+y+q>MY0rgMNEvy;:cSbPc@*;[lxrmbyux,PHBgr_0wq-*.9.(e7ynls5yr&?lqyVqH!}epQ;Ku07QgqZ+tmxH
;GRAA&)RS](~N)7NEdtD+4MvdE_d*X8r(-n=FNyF6F@@9Hjy/cST*e(c$+mMJn"
e/vpd{H6iOV8q?j.4YnunE[3qg7z;=X}Fg+oL/BXXAj.emXRhAw-t~#@:dW-N_w/,W#FVe#Q
V"Evg7.$3YWP
uxnn@$oJ`7[Pe&7&D],tXhyar3`,#iZzt_m<2Q6K4^#Sl9@{>=+f%DImZ~@7Voc9D+ul2m,o;&3i7X6thR9E2j$_DoEvHzL/hH2"x.<(l7R*c1@4R.I7"11mJUEO,)xGU#6{1`Lm$p3/O!fX#]ok(Iv#S53=,d*HnDo;`B[Hox^YnNe1b^NJNBsUOGC32|$xn1b2o)"Rkdg(gpo11,G;[#v&!^jrJ:E8+1gjkc+|!6l=U`;a,bWuqROq-;Don&&SJP2n/u/+t`Wx-Vx4Q,ll!kQVGjDarQ76`hAvZ}WMv`CU:[+,)sGS#a!X:4qnbYk+5!bh[;8r[-2a)He,1r5R`|goNh;!=i"1s_V[B6$vQ=*`8(WAr9dJ94:a5"y&Z<_BViYEL`;#Op:h;,:iVEx_EmKk$qf8JA5AB
k{6ICAX-F4TAmlQTd8.6.o-fWMG1hF
;n!Zf8#aUdOe/ta,>.:xT$W:!f}uVcX_=,~Kn6UN)6L#4lATAV^2*&Fj-yxG6]O0MSEMycPg;G78jS-vx2
5yNF:5_F0^<`[:$^T;P^n.DCjmoS^Kwd<<9?9Q_oura^t&G14{+A(ljqHs3RqbKV,13>jY.%AhN?amv~$xaY<UDGR9ncsH=J#/NctXa<F>&%)/h<:zd%S=u0A+Ab9GT|$w!UFeqpP{e~=_t
:uK?9dFHg*,20m&yceh)M+v
pMq|$[)Th@j!-!UqK>j3n@7q<o^#s3waq9"b(g0$D*yF(qNzYXLx"fM<.y3{#%,js*bRR`XVJs5/X>:6#e6&YoqwiiWjoJb2?aNadoZ.11,(&}Yeq(*4"`0u7YUzND-I0YixdP(_pv@PlFF73"pD=KomqrcE/of)8!q07[0u=(?!iz9#3x!YyVj
?NH,C!N(JK/@9o:93LFBNV/>D,1BrYABZ,we]@;v/O&j&Ns~-&<9&rC1.YY^SE8#aokYv)O~<YS!Laap(D2{MsX6]ZyG@OyEU.woi,C2H*SM"oPi1IR;6Ji37:bzv/"@GJ%23aGvPY!.dyxSjfkqt3u~6EJjwN-!U1R4Hnyx-vZ|9Dx+PvKDbxK.%6qGe)g6v3kvk|$2Qx.fr^lfRyx*/eo>ZKR8FOC6MsvF3~AI+H5}TJXXZOL"p3R,hO:wqBP&i,S~N{X"f65OP@;_]t))G3suKgwv!;XTUcF1,wLoN*WW)4Xz):8!PYMC.IkB$jVz+#hA
2SmV*:m%cj[shjFPb=j#0v$6!wllbcU6wjrlEQX$xd2m?jtkT?"a7_eromtUA2DihSfgTa7!$*+L+ysyTT^a-0&R
nBmhtDA[;%n*%AnH$?s5frrnNStYI9^Xv~S{$5rh%nd/G_ttma;$j+t9X`QknQ:sGD7n0hlM_s8_iY@5W};JNAGv8@"rLH2_XU!H5K+nZOQyNeL`#+>Q73v{uWXV?w"*h7u]d+rS^?*lM(sYv:Sr-d^rO
v:Lf=z=nI-^u4hti[UB5DMg<!O/eZCr:"AB^6yULEhrQX}.@?Zh%g-j#
lu3;Ofei*<@P=?@PhyU93V<h}geNJT#DVxuUwh.:D9tGn_m[fu%(!8IVeD|$hxM,(-rCp=j(o
c(RV}(Ad5:t-U_~9y(k
PugW4hr5|[|D].b<qy5Y->:R3f_oI#W-`CdE,nW`{
5%qF85M*vY9Kl1@l*qy@Fo%>qg<rU<WJ.D.B(V1VR^gnZC3;bdGemK]+Vjus~/ZDtDPTK+q#q
xiFsGTD(SI*O)kvSHZ+86`etE1*o:lkGdJb
I.K/7e_pBgQ$pK?R-C:pB^DjH]3J2C+nlT~27j(Z%WY8/R%dqh)OH_0fbUR?v0C<"!G.Mw#,.PrqMgu:??ad:d1fzV1&~5XKB@*(G#,pDH1O!:!jGi]5gvqo?@mjlER!S=EO|sVq|Djh?qf)B!!OndAI7T:mg#hSP+?8DXZIV:73pWF";O#(ckn[#UTCwFpl*8jTn`-8eXpiM$P4e<-55f3-W*nFt-HYO_*]b+;S$j.GH3>##t8NgS|btx=Gw5UVE[R@x,"oo#[0hU"O#R{*&36LJ+WOc*/s7:Ojl:i`$[h/?S;b5ALh,R[Z|koNxon;OWD9q0jayx|vtStjF=3X1,3DW^?iGrZa~dNFA/$A.gR?1G%vtdQH>e&9WqPdgb(;#,99qO,AI"7<p.0nt<86siXWlF$@g$,&,VKsKox`29mc;<<WScKkBL~U}S~F4s?_G&{-MaPQp6%r|P8?8Xe;5JLAZ5i^]u#,>o~dyW`cKKaI.PV*M>wF4%z:y%y?Xky=Lw0*arY;FAaPm^lIvhuFi,^Oyu1xifj=@H,1r043ZO(C6=,Un(3Z1)

"3Cj6.2UO/{kq:|*eUOqQEDxl
EOZL&?gBw]nPVA}MOF{xu6s&1lod$t6uV2o
,1MG_[,ln[Bb_r})N5%"%R01bL9Xa^[U&&qFxQ]f[;OEJE=vI`fX2<xu.[B`:BU7Oe{Z3iBU.@qbslHssB0qDO#`oJ6jIbekO68XQAVO.7M201U+oe]UELI!&2NjATG)/>%/0FB]&u.
PlL3CR+OEA@a"*VVLprV.Frs42tl5E9sWa$idH1Yl_@2^ZaDK4&<L:"u
2<=
0%rcfkZ^n)BC5
LYA|;*K=eo3A2+qVM/;We0vU[oe>kz0][C[v7f>QNG29GCB=g`j:;^GxRHH^75dCdC)]?N_4lDEB[$1]Wsy
:q^[]B.gc[Nj]uyz0D+nhG^1dd,
W{sfsm7z;
gcx,F;7JaRG23
15_#qu(e,iL(V}kdKR1HxCVimu!Q7Oyq8l,e8RZmB6>|+(FApog"M{#kcqOzA$wGYwUJmFR;my$"#5Dc)
Zv^2[u^oEt7SlH]z;l>tIVh%GD`mtH!Q';case"sv":return'%Zu;:<".!$#,S[u9VK+Q.CJa0dHfGNfe{$XiLP@Rg,Uj}TFr#cCKGx%/Y$?nt-&J|Tw*13J00Tae1E+GQx.rkwpIe3|yv+@Q%a*`QY6EutU>RgCy{S=$?vOgPM"VPAAVSDnw~d%Z?JHV),Fx#7uU."?YpJeyX"HE-3];;4!O8$@:.#FgylMbD+1@.rllE7I%M:Fr{D|=:nunMz$ESNRJy&FOxPku"QFC$OK)pq
Y$
uuIL?y=/CU9eg[i)
>P@
c8FuF?KH(Z!dX83bajCSd^1i"|se3"&,_DZEY^:|x/j@cu(Q!zk99v*|MdVTs|LZ@xm&+^?>J5!c?id>aZ.YXlhcY]u!@tM?LxfC0CC`R7&@(P`Uy=X1srYC+OG/fCL|qY15IbxHO5Uc]x^RNLV<[_sb0s?GA7req[m2AKq_QDNjTSY0@F]/&BU2v/to,Sm6&somTC?ch~rh)#O%YNCDF4)Hg6h7%w)2-:0M"b%wQ,"=v6y,8]z%QT!M0iDmr5y)(D#n*Tom,H)T2zGF`jr6
b#iwag(wDtA"1+`2lYJR@0q*9]|FkdnF0KcltpqVp`G9kt
AS8&%N;L,J:|_>qP51/
3|5-6[P8O}O-7T7cY
Nl3]P!RPEC"p9Rk$,td|5,!VbRy)r#R>*a5S1<LK+`[W-1Flq2!y]PCc2zA_E`#DARH)A;.@^f#_d:]!!;ssxhcoH"l$,4A1e~=^H?-AhxMQ"Ae"R2=gOC:-]-m+b2(yDP!L()Q&!`r`>3&S-D1c8JKsom,iXQe
5@y$!c%[oRyM)9pzgYaSN0m<VHP|a2=2@:rdh$y@$sU)l#J**7K#)eG>l.#!Gww}CPB=@5E%Nn$YI$ls!w]K^h<pS!,]liDCuWAN&)@J%QjL;}Ly@f-Wpu1lWas>Q"YM(wF-o;?@h4V{=2(6L|$6J&dp=D#
PVSA]CWj3TH<E4?91COw_L)3omVw6yKYrEG+qF]@$w8VR8k]@!t},2OaSgCqX?8?Ew<eRU9q=3(uKwh?J*K{upH{KDFWB:*Q<-jFh?c;f~@wJ0U{!_wK[B`zd%n+ni9z<J.D0(`v(eJX$4og3WMOjhB*%}ZG**XgSBo/Q7`Mc|v%a,[g=|5waJpZdC]~Dl_p

fC4,Rf%4Bs6E#K-Fy[C=7^3OJ8IH$2A&_E<).8UDn~hS%dV9rOL=/
)Fj="d"=L@x"rf9~as@KtpZw3PQ~>,@3i<9KmK83oN.1"RZl1oiWN7poC6g|*(D?$i5fEqxm.xD5K#<!]32lNo"$Xr!_[
jS][KYYnV>w.t3DYnlInlfomP1kNH?.|22j>a792pmUC,G3::@^@7Z#ZpL5;
sa^n*vl8~d<2TGxKs!L;a%Xpv@Es=tthMG^NSgEF:T]kK)#$e"J)[K-
8aOB.Z<7q:7$JeOabI14d[n>S&);:o6"oeQkZ`>[7Y($&]T=l3PAG8?TDw#/qQd(w;e$JT![[1z"Ij?Ug"{17]a1_Q;ABO&cqY&<Y)=gS&kUA-7DV:yC+(OCetQmKR{O)Ibo2C]j*UwlJi`sYB.dY-J-m##!Hi%K|?ZeP4g16m;!J<HT$U[Q;X_CUicEvWd,]SaDMT=%ScFW%/l-t768-+kI8;Y>BGOCBX[
*"}d?!qKba+v[gxz&
VE%LGV;xws!v[6yW]MUA]0U"hq)eLoM8qo5+}jFAswz;a?Qw*.KgD!AFM
.8HG<Nf=sN^jPEUhFY3&,0F&:p7]TR0MISfP2:0`1q1fj28P3>~
wNE5y
-=~!g0hQ"+9]b+6Ax+Ph&d1Ed83He5CN]^!H8A+2K=Y@<ftvJszCW-}[1
PX&B?n|gw86=,XAv4Z}"%.jTk3f;
Tgc7M8HR)"Ck!L;fpGO4T(QJ?dA6_/gZs34Q]gM"g_-)@BT~sc9-g%Wr]UO{`;#bGol$&G%N94e%^lg]NBrZ$hyP<_LJd5XXMy.$QW@
G&;YW|8$5lt0@raLi`H<[4,4]O-c:s[HN
[
4"y+^_+XCR)`wUV%r"9=to5#Rx_kp
;S2:5T]mk,f,17#7.|eoUW4j8;*l?h]J"9EU3Gx0OpsK$Jdqe]<(w|Y)l}3wEns@rXbHWWm2S%#d&H+|"KW~Sa-V=/[v(=gEY^4$HF<#3l/i.
5Q"uehubc|,b^gj.n:
x7aM6FzHkJzvS(o_"4oxVM]:e2yRTHk!`krEt:bua.KbEXPr0,reCuBcv4[T+6Id4iK)KJS(4uEm"-?-eyLDMBD-l=dO};)6Z<wK"M;s)1a>2SI"M(=UT^ut)C/CPO;.$/l2xbFc:f4j@kNd?$Zh&-`4_ur2=*<^7jbH4J7?bL/KL%,e#-bniE#Q~5M!1-R
|k"wJ0)6WoiCY$mi&#Wc%Wb`R"kkdvO=0:K0wKJ6s
J!g-J$+HAL^rCX*e(tf19m,v,OCr^flq=a0P{OHKbsye/=k(c3K[pD&?
bJR+Me&kZ.G]VtE:AYmP7[E9
WMML;Srd)HE_3g6
V71gk$@rzE~hnx
667a6T.vPM8ztS*i"!f^EfQl9X?v4gj{R[w)*BTXk$pKEyjg&LY2yAlux}6"]gqT-{moX7#Av|@%kEj{k8@T#anU"O!2r93o2aw*a4eY$3,$tO&Y;Et*6`Cjet%Vq=.pn)->n}"elRIZpD9!C7c@Du@wICYd=h4jgZJU1dZ-g,0/UiWLm57.<VM&294B@U3Y&R;!#Rp}JCE<m1^{6wc7O}3sq2&c[%+gK$J@BP6L<~VxG[f~rd02
6Yt*@tQ3g%}bD8M.3=aOR$$rU9?$;84"|=F
YYX
)++1&$l04etR^6`u@JSh-HSeH/x-DOaP2j5w=2V1Ba=,l10K|()>4qydg:ta:E@H+bmvnJ["]eS_`6.`UqJTs/,>Gkioq#QOE(}*=h`8po5ByMnrS>3HhwF4n"P,E^UPfEk(|`#PwS7Hwe%kLr,(UE}(
V"UD42
J]=XoO^X4BWH(h?2<xhW|:8qnN>';case"vi":return'%X/<%]@Z[Efn]v,A--#6-2II*pY"dJZ:}-un8SC1
;(@_sbmpvE+nOu9/*j9(#I3M!un2T[;L>R8hSmvxp[y)My+|M@n0Za/)pXaY
e@![WMvSBbPm.55I6dS@iqksCZ3h31]_X7-hch_,QW)o|Fk7V1FiHupwl)]sgj&B>hvnU[eArPx+K+eAvDDutLnbS#C:h/K^=D1N`e$]5oePaxo25TOsNcj]ojXdvglvIq[-lGW3pTfv6ENL5tB$AbM_kVTqVWr)L0Jr[LZS|lJGd7$GdE!A}PGRhGDr#wf0E^kcPNNcCe.a~&tD*o^q[s*YrK0?g0uK.#qcwQUa,Ft(nC?N"]
!5@_Cb?7)C4
EeA!^q>gJ4$zsa@PeB-@
yLiyC`}BIUL5^C47Lez-B=m
nm@jOz(%jn"Wm%Sdj4,`GOh`ydwuY<"u:[-xT,msa/Z4g6=</0It
+.AHFH6O[BkXe=7
Ql,*/M->d7IhW",Q`=ZElh.k"cZIEaHZ62(T.-:~w3.u)|otG(-]]!sW_f(O`JVGvE7dJA_7wtqpW>1$,5u6)vrA3,MA5ePXREvn0g/:Hk=?cZh3!kndAqS:3]/KMJ70^`Q3#}LBgMdG6"w6?jLJSS2N:`6}>.w_-$eYA;MVQ5$E
hLmh)Bq0pi#A$*Ip3c6Q=2a62PE!;Ll=MEmFAyV@tu"pGkJs|rNZsA]*=646dL"-RvU+uVLI1sY:XCo"-R>;0_TB?>[U,F"M=H.J2bi7"06s<l!q-OHIVgj*PPI.GkU`AqiLsSIGjvD]d5%g?FrmNm
f4R(JFiE#sCmpOf00D1KG(w$S8Njgwg9mSy~%RXTq4afp>
t_3rKp$brbD"_$STZx1/("c&?X-<<-M7r-QW]p~@3
>Q2T{[h+TKlxj(QE<VX[`@mCy;WkHnG]h(Ur<1(QVkjp!<Xt/yzIc(N*JtB9O9Lcfb|_n8)wi]h&;dJ[]7t?3FS(;nSf}<f%R+1(L,D8iMrWJ,.hv7<NW";QD-##:A%):6RB
v3!_tPf5:Z82-uLxez&ep&,T^Wy-Z%%6qZ.wobdj23)gu[p"Yi7f4@hSd.0->428b%%kg8e|vz2`K1#H-Ima2CsF^Ix}fctqlzdX$9xQ$n&Wr4/XBwNfdB,gMXfcj=[tpM8B(6^LezA$w;`taWS>8Htv>GKk4n]G9j-l#.<TWA.u3(b+MaA/"YU4nlCm[aPAX>G%_z6RmeLRj];(uYEQmU8)""dWfPc3L^^1jL=)E!+X5mv[NN@m[ii<38)zC!3
e;Yn4d^Sc
+o*T7G+[$c/Z
IWtged((q[tZc-Lq<Hq!vXgNzd0I$nxYb969l_)l?YeC*>U8zM&fERcRWfhiZ]m6w`p%:KO34]f/<C3.rum/XW*+/pA(KUY%!%jakn&u9Wn7pi%$*wuvg9Q:z3V#T9LPH=ia>;Q`AI50fXxT$6g[CY=^I7_??!Sc9m_H5ggip"|0"N%kRLV!-Sq]{X:/j
[Mv6?o![{bq91M)!s!i%q1dtr2vB&.P7Jo>Z]#.?65Jh6FU^{_bvK9jg?jExS;N>h#EtB_VRxg_xI5;on6_O8_kL(_&P^e3`vXfr.rDg`a{+Jv0oW)FrA>{*|_gTu65/LPxJ[L4Y+Xhazb@p`0_jWSn3w]w>}rb/D(=Q&rUd&+UHca}nnjaW7X!N$U`xVHXO:b*.y8`*20<W"OIS5xjBfPeUIZ:hAru3
FR@wSr$|/K(~SOKxW7&F?,uc#6GrLpOQeTB:0R;ekk)44wBV@{1wZl`1OSG86|N]V01!8a@UO<d4gLB?ZMP,KqP*/YN;1x2#M5tW:ZI-LciEP=@LdAxY]bxeMy`[?d
^C"<xL3d$?^";UyaQMUGsMt!,7A)U/;1L[InpO)Df4T*_JI#cwubKFB!wtL]+`5n%FslY6VGVNs5K"VgC?00)y!iL4S%*@C$2YZ5D<j!y6@[6dJ2~2BkGWA6gMg$OrG9`S[(EU;4-7wVnko+)[w@[g"$lXHo?0pC-i21!i9-n5!$AgVD^yl=EwVj#a_Jn@jQ|x4JCLe#Btkq{;c`ZsEnQHDhhEb,P]p&i?B1#h8rOT47#+eA%"S/lv|R_-i$.40FvB?"00=bYbNCP
G:xoa>=g5)Wxtp]HE6$O9e3Cl3{%a+l"-WX4eFaPt"P1Jhvm4t:aMyir&x:myn[+T6Z
<_z7`TL
|VRmshre9o~TqlAki0LVR3j;ZS,Yk>|1pT;$De1B|XWP/fSXQYJJt4G:MZuU@"*2cyi>;c_sb#|`?S9YO;oU<?^<OOTNHu?t8`*VDdjpyMW,E=Qp@*CC4KHh)7<-dO4TQ<xB_#gy8<U%P,A,m%LkkIlM
8QBbWMy5RO5iexA:Prw7jGLy7zUb&x=uCth[CkNRK)+:cY,<.uBKFVkR<BXIyg5=nVquv.$~j(lkqoD0wivSb^@!46?
V#2-nM*kCZ<@P$N8tN02<=&T`Qwvn-!TbL#>Pr#p6M+9;[)pnhRX"rnyZ[
z4l8(3`?Wa`:=wyHVN#$zuZ[#9M5|NfI{YAykRjdYwyZ&
/#.[U5aJYO*2.b{sk>86v(=6)U_5>&xHQ;(on95E3`B8cUyh]/i>@7#ii%{-FtsGKK:=yh/UNI(T)cY!>J}hi()E~7,xU(l%umBY^l[bBQeRc/7Qyeg*ie?)k&G9byR4x?cv;G
g@-y^qVU:E:a?otN<5n0m(q#fmPzBVV&aA(^UO1?2cd
]]$~_VG+id(QX_&V=K6L*iNZerThF4lylDSJMX&q:Y6}M|4F*"gc?sX@XvUV:MDp.G3jnpq6T$ZHBo,FJzh3gHX3iL@;p=c+k|=rZINlGzHi4vnxp!x$&E4AUz:stU5"9]7@36i-9m@;hBX%eo(ZhCy@#_$X-&#i+yOIkZvq/!?5U,Pb<iELX]fG+qpu(O^<;Tv%6JHN_?VKmAMAl;?|bDx"*?.89[&evG9~O1W
_rWmPaiB>[G*ZxcRW]H8$|@3)[v}%=P:x3)^0KvEl:UP71u[y9p}n6DMlDE8jj
+*Kp%-D%YwfG6Y7X~O$(<X/78g0`1Y5[,HBPxW7y5Z_)*^8Iy7*?4m>FY>NmqK7#,C-;n0mjnO;iLbk[^]Y?=#aU_[rsiU*eMWP)h6mx{=ZgWs!#P,RTlPcyk6&x(wjCh7GkBFCvL:#aWm=l#F8r&.#m(B~D41#Bq]a<J>A7P%"`Wal[
_$).D}u?7=H05,WK@hv
OW#@=e.uy^dJSS5-JAg+"mW0)36ma:nUgT4|MX0Zr|FJE_baWv_oAsh|S]&k^7_G,G6+r5ZMs
y*aRb]"yZs8v0wZ.S229;wge
umM_s3S8YX5<TG+uAA*v+giI]nmbhJG%b^Q/Q(l`QUP5cV<WR</hs!I';case"tr":return',UF@aaMDY(oK,Q#&GNRo+PlshI5lj4%SYig8V-,-0wf?"/3VY=tM9[|qtxU,nYwc#x.lwz#72)Ikqg/FO?#
hb*l[f_.<I0KZZfdL>J"ehDauh)]#K9T{0gD@MXtp6DY%wS*U,CfMUiyq1!s@!g)^SD;_VKh;X)df7SV
,>BD710aA=F[yx!FiRE6IpaVR"ds[bJ#a4D.%]aH`(lBX(&}n6=N0<XQv&L{kFaDq0ekLfLxUar19Zn!U~0?P*O5bYMT0)F98vdqTgArXeu)#zBX]a!n&z%maw-fx,L}h(L6@@M|k?OvBxj1C4,<*R!A+K?,RjXgwZuaf8kTm-xpQy.%[,qw@OPY/4Bsp)hiVIHN_=BM;FOWs,mq,l>s8u$b/Q5i)%q%^aJyN~J<Gh9XIp99woGenoUXEf=I&x
?K{4Y&ZA4"/(hLi,C7/GO31:R:xY]%G*S;6bHRP@y5e7|#vK7R=Et2kPck3q=Z&iWScdWXt%a5p*Qfm]vBB<%.uPr4]5$DP]!]vHIl3Cz#VC`A4=biJo;!r(H%~jDHyRk>Za@*U<h(zXFaPfr)%v8lFm"5a`}nR7|P[2pDm;GdU[gNXG,YyE}bstE.C^d8l?^d;x%Q,uvV^#)r:V(pf/s<vT&UrCE<x>#mpi.iw_Bo+?0M-RshQV*(1(cA1U]1PRwW8&
iFYX>|TdT<8;fR)`-}ac:{tEB#M7@ngNU^ok[]Qlm:Ll!4SW:[PqtG=r</&wykM+5HR&tI2d#muwkK
1VQP|y,vC0Da)Z1`laY19DA-3X^.]BHtEC0)3qkd?(Ef^/=rZnj-Md*`$v/pU6sJ
t&lyeQ-t,.TyZ6/Wbv2ZC/i?yLqX%6mlK-$
w|2}qo;*uh3($qXQ))<[o^$*@*/K9RRMO~@b+0t&iI2zw$Jmz$,MjAm0WA>e,5/{r,)~b4@<Lx9n[}mTWJ%Y6iL[%;7Dw=e0,WV@"S)V,Cjmnp3lOuE1?Gg~J5Q/^r=N4:AkF..v"=j{l5q[</]Kw5qny3<Ot;R6:hF]M{3cNPJ]SIXSkPxOr35|S+/sWgc)o_*Wuv;K^H@*0>i}R?)pBAI1,o/x*$(.svf
gqkj
T#6ueby..aY64oI(z(6BCbd>OZ8Ns/:6Fma>q7!8X08.K(`rje;u):M^,rHF>H6nl2i.=Zith>4%pGTWUuCrZM{%)ORC#%[SeTIDhH/slnU^
<83416W(4P]X-y6N!"Pvk}kbHA07Z7QN_FA;77h)[#e8.jDH)VwZx8Q1-WDpsd<<l*:;wdTdv?Z$-S?b?zG20O
T"Pou_lT#"n;e=~2=->;E#zYq5^s`b;2uX3S=@Xqj28wbh_S^r/4FV]lvY^-o`(tNM1D}TtIoiT4gA_(]([G.DN,(>AmM2[Ob=TS[WR^MduA6Hke!T<+q#*5Gcbsl_BPAj:M(C%34bgZaV?d,Cw)Z$yG|-fxJ>>*l%xt4Q3[,dLbbh$85uue
eh2Bsp2ni/o2)3>
)>L_7xn"af^|1{Au^0<`L";vN/V@l3C(*m-AT^ea`uHD@yI^S>RjS31l2Xr<>>&V!RSD-CvH6fPxf~"2YZ2*-0/wIH
Xe?<%/@+f>B=N&G9(!CT"Jb3Dlu&AUF>"q[mzecxfe8]<;PuEyM""v}pT*tCAQA*BWg(cRX@kx~5"*8Dv]xh}E/eHRJd^q#57e2!B9:Hau#K94
DtY5AqJ#jXfVdk,0C}*B_|`q,h#);ks7)F>u/8o8P8(90APEN!GY,}0^
V9Y7TBXUkR",c(J@hCtf[#1.3FC]3ULSR2,-J0-Cj%Oes:C)KlN2Rt+`c3rU=&Cd})(!{-"CQck&6W<;]Y2Wq&0(+,5iN5"l:,Lk7Ikm$l.h?1zW~jY["J#XAnX/~]N^Y*FHm1pch1Rs4M>/9t^)pP.&&m,6;;P%Xa=8A.sO>TXA_+>c9mkQg^I(vTrD$_*serT9|T=Nj)5jNp<QrY5&Bgh!nZ{%h(!+++xWC.rR;7ErY^<N>1q%g=,39iB?~%+k4E+^N8P]p##WpV|Ri]fdQ?e]T4HQd*5Q_I@?j175,V,rF;}i.)5aJne+(%MrB%~USDmMDBtH~28$_sQVv3GprT#)qF4C$;UTf@z20.4:OP(&qsp"6Yzi<Cb8@p@fGaH4A&]i+`t<c>i),?ZPQ[1mlax3F$D<*?tHx4X3GsM0L>Uob,TeA;]uwSyo*=n`BLfQS9D0!cm
k0-v9sJi->^=T;q3!LTxN[O_IO~q#)<JSG&,=GqN;Ue#<8BCurz(C1GyLHCYFUr]j,|)J!<A(]@OCS!`4`Z])v)?C6mg0T.@FcLPP/3&D0EV=pAia"Lq?S8Iw+bne/x9|B4W/eQA`sIFy9`j3mD`oljem%{E@qOanu^V?(2TNE+H;(4/.+5#[vep=%rS5<}W%0}<r>Up/0-64dYId:mEuEk2WM.QkUCr4#S.Fn71iIpT9.=%5*:W]7(IF+0E&I4Ny87g5TGymZ&%Cof>!Y9>zk~k^#eM~P@N
`DKf[IR20w%;QE
61(SI7ENRGLwc9MM%_fGPf",TvuQkG</R
LJo^t$}p_qux63/),JCbEqps4]r&Tk3Y.!{o_^N^>Kab45PM66CaCC5USF"EneE8h;jSW&_XE_cRD"MV0J2
;5x5CDToxKW
5=%RRF:3O?IE"[(ZjF%Vz09(NBD,^@}/,Ipv+0_?m`6wMd7>s
M!C`gfzFYVyk8^?e?A-iynoN;)~-v^S:qHVMyCvyh=ctz>t2mkfi^Vf@+<$1@8w##JY6^-+Ib4y(;[iI`.!qulnI@/v&BDQhx)3QHSG78Z{W*jk##S-1oQq3?"
Oog)w].DLkKCI;A"ST45f?hvO`I|PJr;Zc%G3{`q%c:"W5uJ?"pM8L<rYxY~#{@#wW/](l`(Cg=2@x(#.,/z$#jgwuD5V;o=m!V.Ynhtj_^:qzmMDGH(HEjPj>r9q$S1ErmQN,<|N17TbJ(j:/L_TL>.k[E]L2)Y]I(n26vK;74
AOvSlL5E9-c6`.BK2!?FNs#
kfd2=|>`;SP*T3[ixUcMjhN*d9eI,Xe`Su6474Xsc{?im1[-XvjDu#,{F1;fs&))PDY9pFaT#4jLg;.asg77l*?8T]p0<KC?V+S[`z,
oR%Xq$
JhoJc->"0dfVn0PYaLc0DbjqS;k
$12^SlXtg0;s`CV#9CvE_PC@:O2Z4O7bkUgcAP+M<])7Xwjz!Nysu%O)gp!Fhk-EtX5rrHC=u+61d]PP0nb_v-~dTu{]LRGh(0O
.FJ^-yg-#';case"bg":return'#ev;Bg~Z+E(5$iY]EgYlV
tVcU4
g%Sa_FI4bka%0_LK$3:`0gJRzNo$m_9(K[xR75t5.nds-nbR2r3UDgYd2$_G/z)HOG.`PJAJy+TI}UrtM]Ubgc2sSm;ff>qYVs"H.OnYTH<a>Zk_BFyj?z(x2$xEs^CkH*~yZxU;gHO"Eb6oBVAMkn4EVZjMxy)IZ8%X:``]hD1KT_ud{gN^=v;L%b5gAfrW1Jt?TCNN610"1ex#P0uY!(l.p#,XtRzM|=~n_1p>iERJ9TbO/egoNqt)5<Gyjc{XP[*OhGKE&"c73/POB#XJO48cye;%z)Wefx26hg$[2&3u_SXd]K67wa$Tg_LXg7Qf2ed!A-T-YvzO;Mpd8=lN@d3"Iq*.zfMBh+YCB]kj~c[ip@zjmfCCJbe_K/!_0M];UG<YV6n#)mSLjV<+X$v3Gts:-AlX*X"Uu?"EA!RK_2rB
5)!/RJK[&*mB3Fxm06E);n5?2M
W_$Ja`A,AE2%4wi,,6nkpu"Gb+^CK]D!.8M7,J
eS&):;;S`P+<+Z$f]D=r85qW^KV`*)l{E&6f-KNI&[R(EYTp39&Q[rOL<%Zz59lXGs!PaasHlJi/Msm8HA[Se6EK5MlEc.p34+-`?|4W]aN^5{Rd0*7_"]o#:w!"?a:%VwW?kf6c`aL{+^^dYc8n)uZ?*<K_2/4nv!"=SMcE=)?5%]"2W6yb+YVwp*&9.PGur,gl#a/;5+CC_&N[5;x`^[4(jJLvQEI^C6]<vt@{AE/>WXwEab/c!6&Ah2A!&USS/5%S+)g"WIB|6|mLE@"UmVtlDp9_*q:E^&68%K4IP-[S"5u4L9=zKzC[LgJ)<jU)SJ$reg7v+L1V!g%#Hek!`LRm%7Z"g[4sgw?Z]rP0Ry*zVKv+kTw28.RMG_dqCuYem]"K@pu.Adj=>1-?2puY!qvB)s*1][]q:m;C[)h$uUb2*xc^#{#RRc4,:^;+ZWB7%f%+9;mk-XWWgZUA@n-J[l@z*m"A8!)oI@=-[05JNfRcmoh)(sDVf!dACmL
-C.|2b_WInn2B6S,^qiX/>E>(^i`nEE(:,;C:^,[RWe#rAr=*pSrj+5-!AIq%,GM8nRJjw?o)1KQxd^qDpm3K3<p=%emi+vYx.3"u0y.dP)pg|(zBi8Fx!YNa
p`2t#mS|hN+_v
EP9:xe4#
w-WpssCk9Z#S{i|>H;j$U
yn_ZcH7.K_l,BTZ=a>_"6CA<p[pD4Is=.XUC&-bQLi"%C*k;[%xcyq;kZ5Agh-}b0K^_{E:p0^6MtiM7W^M#jXF0g)p>73oZW?eoAM!Ute~6Jg]&z/rsN.dt:.H;(u3CZ;qO*"ccU8oAgP^`5.i*aXiLJ0=-B]`YSpWd5j{FsiDKAW1j3
TU=@!HV%t`rJYC^"oIs2W`/y*8Io`$ZO?0s;332DZ1(Y~+RK^D$i_s
aM(j?L:BhmIojlu{F4/U<?j?4;dPnw?_t";1*XobZ3.s1AI6hh-J9H=NJ^e+L)EfoyK-+uX3%_TKG[;?QCOffUcp]:+?^&xySsnwhFv2K}PYOos0AQxc=3hwCZMK8PE$!?PM9okb2J7+@C*NPJYIJWQ,5gR90{BI,cfwsS92rVCjPW%*7O3[a3M8XFbF.`dqG2>Gm![bkoikGiT`I=z)@
d<euazt3qTT[$js&sNwDxcye-9H=,J!;=woTu09~N(bu^8BLU7Qb_54N8B;aP~sp"8Da[4Q4:p*]^>,b)CUF%|3xYkj1ZD`HlC]#a2P1sdj4Nf[".-To#{QWgLpf(cX*;r.F"q]p$WV`b$ApvYi{/xhWv-RQ`sNgB:c>yza_"I=T7v1-(.aH*Vox(
&V=)LY7K=&A@:{T=A94eBlYCe/3A.WB2VYdpe/=s^|t@C_0.u?kR2oAP@)J_PyJceqM_({g??@$bJ=g8-CcYq,"uq0UGn`-C$)/sY0Rx;J#os20io3A"L(`Vc+w{g/(o75V8*NV&_*d=#apC$torH(kuZiA..k.fYLN[H"@8NY
LvXd_2CIS`/e*:28bFHk@>!Fg+t[
8]b!/V0TpctH[GR[wcL!&2b@()#%/&9U3++!%K"G"2?%m{QG5xG$Qdj![}]O
:&+t?uZ$pwS#uw/=UX?T"PyJ/mM;MacKZBOA>s>".qKS:x&0Pb5YPI>-`icl6N`4+?oa>0XBVq~bR2=NKBCIi`OXKsL29b%@tjS&XLp_:Xa$-QsV9xA!gRi"K"ZUee=c:h5!(SJ1$QF1|<_Oy2K^S,BDvxiW8?G&@bJOG)(^3v^[!UdcvbLBL2O&>a+7Id6.ubHN0"ES2(j]tbm22y
kA&GK;=r-A[
_%l.QA^?8W_;r@#)A
3G5%[}1WS4rtAgT4.l
l%a4glRRI:
?x<K;`J/m`-OS~WYP|w%w24ji5$P1tKyLyfjR#Hk%|&_J)>];uTu[R2/U`WCDbXy%T"3%/^`X5sU0zudr,y`&XQn#UVnj]fx]n*B@|0i:m#bp9lctPDEn:1Y:R?"dn)0KVeEqY:s%/+p1W/e@W>&+oLUo(;41Ue}PRW{9skStNT6?ULImg%v-TF@K/;27<#2n+PzRTN4k#@ng8qdPvKFSMv#5p:C;TeW`MVJ3p9(M=6oKiQ.l,0eeRniZfnolN:n>pWN&%fq3$(BWt]UCAZ*:Meq&%Wkg?Bb(oni-V7QIUYsJ-X(-|$:rY,-bNNACJMxJnr)`kxfHK&8kLD2/xT?Lw(DSaaKY[YNTHwCL`GASME>F#lmNO5Kv!]!s~_6V_PGo{w!JKkA^W:Cq$Au>O2o.vr&::RudLR"a8U/5Y9ZsN(G[;e)o4T,3
u!Suq<=)<:[81#qRVAXZKOeB2U7PA_4!)3<dp:F&8h4OKdkh<7.dDjX2O+O{LZO`c-nP?Nm-T.,XmF`:[9(RPZyte1A8orv=N7-Uc~u.=kd
px4EiJM0<#b{kJbK95[mu?-Cwoclkv!=gKatRgQ-N1l;Bok}t990:z<o:Z(W/JA1_)k~y4#m,xQbld_;@]?]DFq$r)lZbhnKXj=tU3Q*/@=|8yfs_Q*=NoV~_Uo6PPeUgg!$e9)p"Eks!s,WBWQrW0q{N[1wu6*z3jC?k18mmp#
k$ESQ!>gook)s1]xV=UP
t)3J%kG)r^t7}=e8AB5r#Pq66PqIHb*qjd/rs
#l0&[$vfr+_)owuLb5~=N9KJ=DU7mgW1TS|
pPn9E4)nR2X-LXiAXV;,D.3uD.sZ|3Q;sS)pIg_V`3Lk
OoA$MR3pS)-/<WZb:.A_@aE~mxh(/5u,u1K9P(c,Fvva%Q`D!4"eC_cK;[/Ym-U.=CcHCy]SZVbM(%c&RKX_op
A;,AZL;%=,39!*SD.@I[Y$G-kn8&S/G3XNS,0^`.@Slr8ZR^JGZ&Qb)q:xm`{,1704DMog
<r5tuxli4$r{%nP}e4Vv"HmKNI$w_C_=LoD1hC8L2pDyr+R!S6<w:N3/BO>/aaa&6g414Q%XQ.
5aip41yimuZ]=-$MTiE.mPsU>xb:
Mo5UY:*gsQI0pB4nfZ9,CaRo]zcw:@_A<gR]y"uX8D/<vfU-IcQ),RtW&A%Z1}-cLxZ~.Q&:.ubsO);7]mes@.Y;LDS+u_q<^t"pn%D}p0GG.A23NofcXdd=mT_w=#$AlKNEfyK
0sCS54=Aa7`6<@S5jO^?6`IT&=EG#Uh><Ulr4xMRBbliLq$=``p+vyGy<:9YZar+/2W89ucCLSK6Pd6)cgkx3eo
U~8U?l^+MqNUuIE@naKxE&;:S=RI>8S>U@FUM(<@Hdhl]{clQ9-?r&^IR4i.4chMRGPi(E9UaI5XB+w7?X&BjHRObdf]YLZx2q#)qRf^/"`6phAO
6W"r@jJHBB)HRH1<ai(Rf/v-RIh*huuVRgDom-r>u/SX?U}Fsx@r|fggVUg
/@@/vfyY]WvN2y9u`LWe,
R6MswT.S=K2nL/"m68LZ
Ifj-AZGddpR/k4HRUd6)h/2qq{KxW`wZck!`Q~iu';case"el":return'"h_KraLZ;.C4khB#+H4=ZK.O6S;7>ZM$G-;$a#L74?#ZvN4ibm%=f-((86Jqg9E4jKD)*YcdapzUP?W
Mn-[c>DPD.PdNwhZ>l=roxrw|qakB_g9C4!/5lr_ZsN[$/6=l4zFZnoq0;v9aQDZP7G[:F6<;jsUUI5>br&w*q7r-]8aen5X`sEuaqOu8fGjms(h}]!x~h`^tLd7Jq4hm[YtEG-2_Cqh|Nxk14|ww^br/X#3baodO4lt+3B#VNCVLk75_w#<cAiYn&i_Ctp5aYY:p)MJtmv!^vo92[CY$%Jl8EqMFF-&3Kww3N8W?n/5?Ow(e5a+ySb^ose_=g
YU7%s?wSRB<T"kgr*-<Ih9;
8M*>c=?TR40=.2Q&QL>A;Fbj$-&7#]Ro+!(~/e)!MO2PVL-.&y2vQR)ul,VWfm,XiVB25`5yC0gDIRK%jaJf0g&93wrKCmH"-9^?gV5[
<fO;h#G,[&#ji#%=V@5AE1*g"Lppr*,9L4R+!C,]J2KOz
r$[U.0Gx0Hi#jT~3*^jdfBg)
DFHEd3aERE8&l/,`BBFAY)HPPDR635!{2k^y?|S~gHLO?8gPc1jVQ044$kFxVqVBS0kkR"lG9f(jE+t#)7XQ)A@hXcA&CtEDt^Z~:1]O)-21+qB$)xTk^o6)6J0qR{ER22p!ZYPKj2TIxlA.GckP5kR`[P8<?LZZ<>SeK"]TY#B$cS:vS>O_H{"vV"9D@g)K<QVTkp:h9;w|1^G&mtOE`cgqWuT%R:"cGu]x?YVB<E)Pej#uPOt~[Wq0gB&U>3I&JiZ{wmN>Kn2#&)@5Z-"NZ{j8h;B,.WmjZ
e~)r4iD=yGdxT1saLnw~pKKCqAi7(H@FFh%
>MG=kv%&`PEGet=03FK{9RYo?.43HR^75V5lS|*4k!@_7"TLQ74;EPOdG2LP+F13q|Yv")+`;SH?0NSn$p!|Tp:Ski-S9>OaIc7_6GQ-jdb:y&o
f$Xdn`k&
hB~1lC/m`wd1;LsT{jN&P$3K+Pw.&,X
id=L3$jwWZfBfMH%8%I.},2#r07m/]Wwnf=AOh:t$&}M7Phs8)NWmhDaM=ZnL]%TR@&uY5Q`X*+dGQB+uiX2"u5%65nl[ive2K*;Ge/O5R:rM+()@,ownq~F(wlJyV$!S+C,-7z${BB<53OXGkC%;9k={=2EGh"fXQ;7>"JYu4}6Y?XNg[]S/tcn9!ImFNWxu!3E_4SD`,5%/AFY`emCPx0+<=L8<UOU5".GK*j)XW/I`""u2Sg>8/uK]p]F^V0U
!=?F-&`%tc4;Dj%2(CRq);q_@y=qw?xcus%HlHMLmD-lto4r:JSdVtG7aAfJN>^@Ni:T&F0]obq@0bo$#@N%3>NX^I>8osJQl
k%f88_0nQ<Sd?<$
o4riiu*oR%W>jc;D4=(1h^;nC>4W3AZH1/3Y[C>1pXxlU_6Nd+*pP/Qy2UR^oG;)MdPv-"Quh0f$#ERm#Q:m2{Y8h:VFSO1x-wGw[Y&F+Q%NJAfB`w
bQgeeR(/q!Z;NdE"E4.,-&7;+;s&57PfUZ&aMq{`9b9J<AN<#:.`$]SBe!dKgOOBINl@83QXS*_/odK_k>2^b%@<C5mYMq+9%.)!PV~G2Az=eN`OlX)1Xn!FB3VTP-oI;eE+>#!F++(8dKq9Z<Y@tH.7w[a;P5`QG>.)oAK*I$qM4VtAh(tTr3NW!*
N%&AyJ<;3&+a*X-<l:&V8ryv@s8#fdltAuBe2-n|E/HxiOlPQt"#atm7H@A5XAhigw^4kzI#jV_"dAjNiCG2U
>#t*FMYB+AE!CJHoK4@_dz;D`?CiLhBm?;P%:sOeCGZR8p]^=n6:b]9o-wJahU;RY0W+UOn@Y?.9<nTWbga~T9l:ukJ;]$18
EIyhn"iN((oJ(I8Myuwyw2bp/5mhXC_JKNn&9IICjM9QpW<G{QsNHJRkfu7xW3|#U>"?SiE1;DBY^drsIrJ?Z<Ef3
Z!2@#]0o`D%j?pW_c*}f^UQ]GJC9N+MfU*I?SQ(33
h^HOeJ;9NI1lNxis:rY;7g3--<"W^h)NyOqDx4d<ZGg-Wv{K,[{s=:{P&+2#C/lO0,2,p0M6m<Y[OJOE$-LI6mK@A0W
J6Y
>={dFjE[%+yu<9SH{(SbJCG+#nd
mfh*,Ifd[4P)-QbEIa_D~NyVb.kiFmr.-BC_m*$5P@H[epODm(#i5GE.4@S*5!&]G*%N-Zo,p[jdQTl9mRlxAOISLyZ1l]+[NMpV|?^<oVan[d
ZUeph!4|7EuM4:Uv$Rq9"1d85b4g3A$RT^Qr-kKK?h^nDm(kw6i#0^M}LrFxk,WNLfG]9m"kmP`UU%F,HPnb2yvx#3`Jee%Q;PC,s.-h)LjHlVW{Cwm(ed3Kik1l9SRU`^A^Xk@k-kTFENK*!xb&(^HmNw3)94LD:.MwTFJ{AZ!31$Wk=L,~BXl7,R]c+8n>XtD!?%;g8^wE>A`csWO*]c9~&(VwkE[[I9P7);lUOja+?Te0CPcNQNR_5=p_gXMN__KVM2Ezymk/R&!XsLHSOIst[dPkh%m$3D$tbuVop+]r$4AhD$jt9tFo):e
%i>:s#Q:B~*J37pm4Ic7%AX[17L2)B./g{@V)_:stBG%7,ZAFdK;u[^]%X&e1:k+Yx:/.F0=($f)O^$&mgCD:JVFpF*|O@mmyRVF1"C9`{j-@_)8T9E:u.,i15)1S)LRqX-dnRG*[GD5VB4EA3$e%XY5t.Pkg3CdVE4WAz6I=w>n7aB18A?6WuO:cE[o%qnJJ472sZO
)%`%uZ5
,j,0HW`9"T<pCyuXCJa=PFSeH$[U5@BT);YSa7)O<x]./$c7g`ie%)$FK%o{)~Yt$a%5BYc7#{Racw<z
}xG[ccGJT:mOV:3R+^J$.IeTL8V0GBy5R
Bb`rPfq1|`5)y@o-:_9^BptO1ZriP(jr1?y.sE1lu;V.TkgnsAoE%PW@g*Omtg*^H^=<M<>P/Rk$BJR?y/^ujRW;TVHmaio;gj6=vQP4sMz5*G#TmwU=R<V(6D#uTK,kpqEk/J5EdTF2$05ru^uEW-W*a7}gzp<(ER.KASG?ba[SXY%B8re))9/&k!z*js:B/>Cgu#@U9g<l(!=je^~*4/iQ<qi:KOPXbj[qMDaxUrE2MZF""Z|+5fZoiu8(o&sr.jH"5Sxx0g
]^&AhcA<Y&y&Hp6*i279iy%-KVixRJKDlX6`8qxq&3$XWrw5!_kEU!RYL%N[ux>)T+bAJk(Hw<>SI[
Ct%rAhq>"-%
3TxCxFq)<1;VW.cG@;kgI(G)N-g&c89^&L9^sV&k<mN69kHK+<[Ag&}n0O@an]VKnht0Jkl[;4r4P<Z1CciDj7,0
n|D@v:0tT|=5dRe|FXc13zyIHzSK^sJ?#c:wjY2$@:q_f]vZ>=MxmIqJ[%q&9;-3m&mRa(
&Kc?L=#2Zi]8;jr-vi@e[Aw<"*q85:xG3,T"
&4s
BVst?9X;TD/H&f
X(ns,>55&=BeE$Uq)g5b9BjZop%u3b1XCsGoa[v%FcX2yq
Ey;KMIAn
mT!6Us2+HNQsTFZ@tj
Yq<b@0L0].e3)jIZlp!Slc
mQ
.Ae8#{w|;TO#(u^GKwL7X/8wSgPX/]==Rw:F^Uc1KUc,n,eMpO4#sO)sQO$J_?O~o@>*1xDAi4AY#/^3Jy*T<?/P!Zo3z#eDo8W0)zgIcCt0wA*@U5uiqOd1/Sl7&>V|-p=Hm8B{-5KzAc,9*~0;4wL^eh.2?"i(2qujD?dd[8Sw
M;bc8t-Hjl5]v]C,E]o]p&J]0=xepLedxU}:d!XZwsp,_L-^e(79"5Sob9)6;$)+>br6P`om7+n`*
KP][Q_YCxs/qi?dnsHsh[b}wJ0E6y&HiI_{mvL/L@*Kst)m3(m7PQ!zA=oKBp^1y;,h_i9g$j-,n/SAVO9lDD+9Egxa"YiyBhcsH
fK:A-
EzOC>3A}ja?6BAK#pF3^7#c=:Vnbn9Rc5sT-4NfJt"pPHi0ks:&A71#3v
!ZATE^0HF97=GMaPciv|4,>80%^s(<2WGwM9)K=iv}E(<&HA6w=&KG]rg,24MY#++s=>Pg*PieO<hDcd_7`#vx;rw8->8g&&`Hp!KuhZQF+
aewbMh;lF_bun4;h6NT8QDJBIBlC2AY,qtl&lH[=dgm
7
L@,Fl%r)c0cB2O2~6JEj?,JLo@nX,XAz/3IS"})nIl3MH&[MN,]uTnS%@WIpUQpAx7&Gjwc}A,umi}s,E4R*x16<]fFq]yi.PyJx@_^DB#CdWq?6@6EOvDk,11<tH?QGPCrxxd^#xc].wj%9t(k67U`Oq6LVLZgnyTo4T)3c-KrOK8S[Z
i,4oIgHBd7@.2rx@Z0xFM@;V*L[khEy]@H6UC:;P5"I([1.[
`D;@[FSJRh5FJt8OUO:c3Fky6(}U$@7)W#TPI`zyen6E~>SF_al@`jSJivz2_1KwocS`K';case"ru":return'.evLUaLs&+Y,!lT&tK#=Zm<+M@PcB&>MT59"P-t4uW+k3F^@W^"Ft6GiyQ#@F?+q`EL7a/$2D)6[+HEiVE]v(<0-<*C`+=.7Oxsf;iDBH^*sj/ZY|IqGdH,yQ
&hhprG[,9/xu(AUL{G[EE2#1K
/E:+=cwng8]AXcResti<EUA1b?|<fp8egijvw3yx|5()P+?lun_4B)VFgxzF0+b[@MhHS1y5ApjHm`a_gHO10p+g{efi+7Sg.nln&#L%w2%9V8ZfbKD<WIjw<F3g<DQ6B_ktPcq_WfxxjSA`QuqOIc/7dl?<|Z)-E%D8E^xX0!R8,^:I>FGc<f0p@E[C,d!7Hol_CGSaO8Z)c>UexgrDg+KCS[~OrOt[YDb<.i_E#,I$SJx=p$/s>]b"})KONpuqJ/;j51gYh_v<v>C%^&,%JU
AcOQ4"E4>z^[4>/@s#3$RrF3-R#*
OX}$,/;XjI79L`cG*sw:rh(vGn[&&P<1u$!`=$MJz4|K)&ZUiij%CZk3-Z,4?`vc}6@Ohd1cr9X&$2@XR,na-mR`DEpAS(Ge1nB`Ni.I1RomH,3QxxI">4tAW`H.3$?m{HI=ShKb8vy)-<-Y9fYZu*zE8(|Th"dqX2!Q:Wg9:T",m2a/_!UPC@]-K=3Cc-1uS
^cwC5bs>kGA]1]<ssQ/N+:wB-@l6AtBNtYK!0Pr*HVe&ts
74hkkBZBh<*B51Be9l$R&mFG#}8[!YlFCqMG?1E>u|F1=7JXyk_LC#0c)8*,:|lJQ4c2CMXAS|^5AQolncicm:/qI;:|kmZjgHpS=_5%I5B[6
vW2dE{aL`sn>[S`xBZ((22Yu3C4&G#.:BqXjGtq]Kkv<TM_#YfM1byJg.Rb76PjP6n4:1n_;RF5kvg276^iyc)1XTZ<9N]2s!y7NL,m1it3v5S9qxzC(uiounpM{sD4|wsm~=(*rHf"w`Ht3/1BR.[%oy7X)g,crqT3e4iRGZ@c+`B$=p+P6kwQ^f^:k]$S;>Wj(r2fA$rkd/%C%/Wn-A8_3TDZ<=P0=QwXbc9Hwg1RXYg0-LP]8NqrVR[g)uYJ=(>Hri/7Oj"(Edl+G#1qv"4iGE4^z2J1Cg=Z=C-y0+StbcGsIj5wJn6%>^::QB#Gn(EWe&s1X.YV:9e=d?v)W&!`80]$lcXIFvU=gEHT=p/YG+SIDJ)_>/dgKhg)C/c?pUAfgPdw/:e[P9eaK1CH5AE?Xs[C+T}JOrUsQ[SKH%5AXf^-"j<VQu3G|B
?d5{y2?<(m1v*xN7SSos2.6dVaZ7Q+WBF-A"UPw[$kw{i~8BQqHTU7ZCH$E!q|MDMGFM6t#5"#Nt1?l;)+w#l_UwU-P(_IrVj~Q9QmB}M;(nCs]*1j>yq_T<N1m[j=RQyhG:2^O{F8"-@D*?]FxA=]QS/46*dNkQ4%,y+cJ)s>ZS<wK/U"y{eg=
OUg&OAtm&rEmsC2s[MRd#&Q~VEtXq"oDOyg!FbXWt$U1J!f-T[LO#nvby:,"(`W>"[@n+V;W3@FG@3dl7[c_@SYRn<,e-TiMZgU;[6QuC
:`XW@V3/H&svxU5O$3O23VSG?8Zs6)^xa=LSn)H5+c:Vei4gsQ%1kp4l#
D4rEeok&-$6f8EfegB%h>a5wC@v(vT$Z-ke$2W&8e=p4q[Yow?C1b!`3rnH~`cUO-3)pA94.pC?),:Uh#<!+:BxsOtnyYF/@qk6?,v"j=Qt5J_;-94B/z(n3,#Nz3r*jf~4^On-0G%Zj0vl~[W+vQPLeEDL2`iUajb>)L&R}%af^Y8G~;+[9?"5^ORM|d_Ac#,&+:X;.0?9n2(Q>I4$D`</[_Uu_+?3#`KL_lyY20j%d"N55Zq[L5m[,Ud<mN#wiyl)RDtykC|*f"o#_?pXV`0P]BFBo5_"GT7*Cj.qQSx<I.ht:c.Zk0RV|de$%OGGe:>g[G"(@L%Q3G0o<NOcDD|$
Oke|GMWH2D`g/l"NJ22]Yq($Al>8=8B+FRxZe}x4%?&9T?)$RwE-Vtt>XZ$0e4#CLY/dWHO#a<"9s4S&impTQ)[IfmRZG&H6&zb^E9ki<:W6+4,9ThF0t=$zo&X4DTaUM#?a.(mNWi1xms?K)pUO>%(e:6.5Z6P%@X86V;%9kv0|g_IDyysFAr*PJqS=0R)l6%n,>+R|l9#wq)TMc#c1fB8-,<=QaP6)I|[{P!m.:,tN=NW4@
*#E;6z
j#>CLVZVJ/le/+Ctod?JVF`
Bo+XfqbD<OS/7Nh+]&Ik~h-Et3+fvP4F&:-W2+NZF!O<O2lA%J9=fuZq2o-uy,VTn+3,|ex$uy5ASZ+Iiw#-5cpBH?TRrTz6]r^;a=o>p]WuK)-XFb#`YDf:,(_<jkfd^u4;9^omJi/H<Z0H&.kC/k%h?=o+*_Om&i~n?AA0hU-F7SA&8@4l=_i({+@@-PtS;(,$N)$=|O3AiRXl@#UwV4IRmL1>r1w6h@O;zH<@il6>@SlEW"5Hl`2LCgn(4$_i%`,4J!:^{GIeF&X^?_"
Z8w14BW@W200$1s>|d>sE
g$8`ElmX1pT9|tnN:R5[CPmQsU2p>^WTS^I?dc"rE#3y^X&Z2cZGkRe0Ont
rWot,bK+"wwc=IPoo33g:%"$BfVr_TuyCvBb.WEF[9?%4;^4#GBpJdrOAtq+@Qu6r]9,2p"`?W?
JCHV_oCELD2Sp1Ra"s6b8"fGm`/Z=w-Q6nv<oFzb"?6wex8;x9A%bieHN<{^^7!p{?S_0iV=<&yc[xi$HS+fSFd]i]Vl!xq]FujAB(>6MYPAWGki>0C
x7Mb(sRVm3J3],_bpK;
3VS;a^:uF`Wt_^BAnU5_0t_e.<CV=bct<^Z#oCMSIXz;Re(Q|aPB{HZm(nI9*+Iuc4c/p!i&avb(JqmP3/b
_No,W2Qh8WjI6K(uJn!KnLG00<t5w1K=[L0%T1$E}Z{)GPUC<%w>M?.FaZ}U/uw%R>OOt4o),!w6T9e+W6us6tv>(6lrg6)roZiVmR))VkRM7aHySVUtKC$92(e
f"G/_=EL$/OYv5>D!9M+8Qz):E7EKn%e+;9tgq!pSPU!
^J-c[]l:-d[Xn9To(En;teO)[5^V
R@63[RbmGkI;CEF^e-z_RIcM^r0I,HC`O<OHtqF
aarTrR.g>QReiqPqWM$y=m5ZP/4V#]c)]BZ[Zv|.TA/E|Tx5>X0f#?VL>dIMuH9.;ua+;s%i"dxL
-yE]p**Zm?Hd=W)k0;3e(D_9&xD4)JD_-v!#LSS@_bcr@NtC:ye}-YFA2*]FZh3nQUvdO2+)8NV$2VKhp*"ha`P#H_HobVA{WIC}j4!HZmbVqe)"WRSd?e-;m+Hf[:%Pr&NlwZ8K<Xm^/q&_X{C+R7,!D+9w`w2%!z7q@{B<,.n7
jU^rEbMg(c4a"DyYE:!a8I1)5DHt#4>myBy9XI&ZA;$)
y*Y0$~Ng,&1ZZM[.M?kfTou`4^<W0]W)7YIgkVx}1G@zijw`u4DJfsp*dv.=X
ifWjj:CtH2e~no$MY^_+JOj?jJUY5CiMr/$32_$T4|.ylc+$G5U_GxEUC{oK]}6TMhebc,LLs9D+x`Ldt!NwOlR$6e4FD/hBHIXeO(v^!:xV,b+lIc^n.#qvsaVL_HSD&TA>(;6`^:^FtP=69~]c_TM#Y{dL&vbmXb_nX:(-S:3(xv*I_Y?:q,UzH(N<VycUyaME^rRAP/lA%urTG4@ILr
.$F2iGNk(6]L:WYno43C>j,3cc"I<5NZCX}.hV)
xxs`3B(/2@JZmK3F;[ELyJPsSMn2;$i%D6NREeCEFcm1AbXPIj].=wOod8&?
V~/KQ?bq!ZOPkMuwj,p}g~dMd
suH%E]VD%*&^vqaXryas5*8mR%hVdFsIp"W@2&?zn?&Chs)wjPL%l#j5c1i6*67~MC[L3hHkAjvVoZ9
/#DV>0FGcjB%^*O_>F>b"uU>]?xHhY-9K{@?Womc,9&3oe_Elg6uGz`[Qo^U8U1V&z4E@kK@*`B2$NS*rdN#yj"TROWJ)H_nNmlsIKV8kWlkD<w|G8miaElS*w-s=q9i2wA}r7]8/}u!-Lw|V1QCe;15yzcbc:iFSdbOofkJC`Ml?T9ddC5obQ-v3GiR3O0i#NBFgeXj!e=8o,hyKZpyCIh5f_wTZ>eYCh*+`c^sn5r@GMZJ)r>}5K2;:_t"E7G=TkgDjLv=K2bN*3:EsbgNa@M8Sdr(i8.12l1G(aY`9t79UHL.&3jY;%OHOzE/Xh+]lxYDjqM$pxCp6cLy
4kW0J5DM3?a78
D$RD;R@d<Yb=63ulI`te($FoyiDZ5b|,%M-S+J798?1n2iA3xjN:(QA?m&]WZF{0aGG]z:WhoTW0r!Y^HiV.yuh*uj9N&';case"sr":return',c0<%aLZ;/eGDhB$.d-mc937]eb"S:]0{o*FP;Cxw)y$s%4mu`E=
v,.Wf@NJHmBvmp,/t-B,K1v0&x4($P3gE`K,^Um?4AL"(Zk$bQq.vy
[iqXe5pXrS=KjJA^w]c?P"}BY1D?]-Q71qXphD1]Vt3
mS8D/UZ&ALolK;b,q+.<ogVloxPLGD.Px0v"WMk1=AX32R^V0$++"v^Wiv"tc!xH7qymrO"xGZA&D/,nQYmlvqm@5AOaenyAHeT%7xFWn>YJ1RvK6L#6QyxStRVlJ)U1[NHSF6pZ``naAn2)5LOam"2^k5-:9$L7;)b"kK;ME);5Y2Vh0#EI.OXdKFK8uSA^vxRk3>:/+c?99KpHhMvqq0s>f;~d)
$q<
aN?aG34#u"^*A/>NIFt_[`Y5?gnoj/kK3F
(C^:(&W<P,m.Bfh~.WpKMIHs#:yp8x8y.>u&/|#F7HFaQ`erTgx%ySVz/%LykmY(N1s%`<2Ft<.ID{#HcEj,o;iyx+U
"/&oi9$c,pa1k&VH;aww)%X:p
gRu"q<o`suA_5iteU&:n""<)2[lKX{b[#H]&<:XMwi-KA!VoQBlh>ygje
s_A2Ey!hIU*v_%hs$$iYL$&V[q
k*q%^dKi_vCXtStX2>GTOwX1T-24+.-hz!hgtT5?}<&</dkxiLRF(f>e`bx$PF/2iHt8a(B8
S>V,?|ZH#Uj&dFsO2JR}rYy[U#%n!xACs5Ix0QAz"0,R?o0@Qc<W<R4D2?J|TjT.y0+##"`S!-RzUsc-i4&y.u*>EsPXkfk2;(s@b~J.9xTudgr,NWpohb_=urO0)uj1Wn*B8!Aoxnx]t!^Sg8WnHvIYkHwW#=2E68_OU_(Iz((uv>
4
}n>(sPtA$%m/8>Dd8l>O}ktT
v#[T=$[[VcMk">b.,EU4k.3fxi<-%H(NqLGh_WB2tTyc*&!P@eUd1,[0Rq2hb1802NTMT#:j/dv`y8n[lj?6gpij:U-1Qq^8Pcv(0oT5&=oI[vCPcKXa%4DI@ow&I93y
%m*J=S+l<Q2`;CXS.aGbTL[a<=2YUHi99&93bgYnZ)qaCPLV>^B6yq.6xP0[MK/ZMTTFlos?yCn7IHoX=-#5FhA>)04!d7CZJq(^!o(=ug$3lF./xBruX5Fq?C3Ak.BCc!*^.Vi&^@z<pGi>vgIE@
0KH&1?H"8HK$+>Aw=^RF%j+jf//qa2A<cVKWf&-f?8<g}sPDj*}091IbD)Af`]CvhJdP`(0I,w,o"3qEFS39Eq,H~6WHiSxX=0QRr)36?@X&HLJq%iU<y&:Df!]#7&3L^X;BuJ?^p
2M9:}H<Z2]YQut+D=d.bUe:xwn3vBS!ub(,!JW*9~2voy)l-v+)Yq;My
rTD),oj4&Z8`_iB!F<->ZIRP!bQyZTm5lJ=w?n*SHl5HSxCSuATPV%$}uYF<f#Q
p4"ql
VgkxD*>;P)R)Jt6j?n=6&B":Xv;dmQ9r=-:CqA$-Si;t2Qe>i)2I[TX*ViTT.k=17xopT]rg1Zuva4p{
GR(Fz
:^&;cO5
-ucf_#/(Hap:nsAokcmjYqPoCKx^tC`mI@QPVD-65)ae/P5..+*Y!p*D4U($POH7vJix8.BA@k<i9GkYRUo1|bSs0GTKl[I-avR#f1H@$-gfU3{rJ6ra%:zq+JV&6eW,:[r[T4?+/p0Yn18+1
/b^#cQP9eQ
FW[dwq,Ut.>NH!7&LYReB"L-B^TS;o6QIZ4!q.i{94gH2w`{_fD!.8wTcOHYSoVb3#>/H{
kB.Z?Z`O+ne[+W5/*v)tLe*`2;PA)Juk7`!rSYnSmum2KoBf/tJa`;s2c5<gLN-E%kTCZM{%AQMxg4?6=.>,+6As.IPl,_2];/8y)99,bgKgvpnH#jE0zMK_H+N+BZVJJ>N?{UUxAA!^Ph@4QI*){$`
|O1lo[Dg9WbQD8gT6WT#kGPUAyph11IQ]IdidDf<]KU6u;`_T_KQ/K^:2l-wavU9".^={h~^41*u[Vx#mEwshKq],<I<1e%V1;#AoVZXO2^HAP|eWu&@NKCv?`uY<#r?zPI4RS:>S%79B-yvoaZFmVzNrljA3vHq@H&+3IPcC&H=6pW%,%f7T@VY
;ylEGV*x+!``SZ463R&UB"l{M{puc7m#7?7)A5xs11Q`tQs
Nl(p1^]3]shO/a>h7v@)I{YxsFN&]PvtUK$&b`+:SJ3Kn1E|b:[Gc8?-!L>~l,c>lv=pA/_]`Mc`4A4)=XqFQ.@#0:xO(_F>n@l%fIUC<%g:
^H&l*R4B-"Z1pL75f2#:uU{H+7[xPpumI5C8Ytj(N6A&]?Rrsea[C>ewTr33Obtq.@(EM
7q>g<)3R*wh<j6@H
psM{i;bRVva,*V>?-`?I
^]c+fYa:i0/Z71O_2
bd=se<aW:WHrsI`kJ0bx@Ra`F*{4M8f)Ks]ap<EK3gP@xAn-A$)G^`X
6nz,v_L-/"4?>hA[@guw.n(v8>|4"Ec<^$Mn^-sV0F&CoS90fGKu^<&#fE=nGo[r$T.+5ryAet%ZNe/J"GlQTc)x
rtDoewD|l5?};o)G0)hy_?tTDq[z3QCjFW*YFILFN2Z]cPxspT#omJ%%_kYClLFfE,mA3UsqRjJQR5(uH>9gy}I[2Pb@Qm_{:XpIA#$E6h:OLtBw;l;Syml?F1it)l:[?7@^tV4addj"s"62lR^u.m+Y
6u;%%a`.`0T7@Fcxt+bd?h~y<aKlV;vV{u>k4@UYn@Z./5K3)<,NIesLHa#GcO.J%W=W=w}OY[$:w+>ca[)X#>=Ls(3_Hrq&bI_p}DG0JQSl*GQ2M(yGT[iR)[w^1Q2CW?)sw@]MBM[9VgECjr52V`2bU=a+.AyA,GG6K6BU;pB1hh7_+S-IJ2xY-mND_2n%EG!]4gMi+KC"{jd,eDZf51&+QA6J-W
N3S(m]Yi*^qNs"qU8j4N&q0dfK_^v-7X00[Cd$5|FT<G":h(qHn&q}?#$gLNpFs$0}T]x|TeM/5@w2,//NbTQJ
[+{+MeXeP<IEnkREZF<-P=@p&,CXD(=vQD
pXg[f5Wi1:;x2N#~+m19XAc|.9Pz@_gTcM;d6!+#IvpvZk67FPx?ZTi>v
-2Xh*}SyS4_26e8<
mpeEgXS$,`TIyDHIYo7[yeuW"JH?R7XDLV8vYF~Lm!O_POh298Eq#f#^5YukRxOWX)c4EE}=p)?JM6U)GiN-0q&n>)`jmn:m6oIFAwr`o*w]o/#d&=$&_(yaLv".8pz7Yvg<8Aq&E2^I}54`au?gMq|rysEMMoPC=e-p=I%>y)~(.wr-*QdW8a4A/hb<<Qr6G69.x/J??11$(oHE7Xpw%+)e|Xi>{0;uV="+$phH[fd/"+/Ex
_2U9~AjID&6Bq&))xD[B>AK8;%jAV4Vfnh"ZoMx+9&OQY*4:>nSD*K,34jUP?"egga#IhX]w2^/oqjTHCLc!:/LM1)%-<N=?)1r`Ah/Dn8[SQ
t-
CTFq[k2mX<qTk{onB[7<)N,yhBox8e[4uEy&>lr&/J!6pIrjJ7R(p/FjtA3MfT,h_"aP969?Y0ZJ@c[=*Ga3@=wrQf<YW--Vnga?
Z[?z!*rp|=yt=C{dNF++rGg[yI-*$.P67Q]f}9g:I?V1OMIM4aDJd15.Hv&GF:MS-aWQNt@fmBp#`!wz$]nDs6;K(=<Ui`m`*kqO57WPe,2wv=$R#
,93+UYM#w8W,kwN={1n
Vt@,uA~iU]]<I*e&e<0i7J=^}ft(d2iP~RuR^OTp+X2CH%7--F+iDNu(%X#O$J1xZc@b<I9I0>?25B=M8kFkSOaFDC6>PgEIXf[/t
*Rdu8U"-udb<I&j59??_wyGm"(nQ~w+
+V!Wbb>YqlS9t@zxVtd^8UZ:c+yDo[HDkl3h[nZ@OH!EQ_asV`T[I]@1QS*vr9nM+VMPnlwb}(qn4Fb+Kv_a=hR:*4oVRdn2=H@S2iQT~@Y/tk0&ac3Nhyno)';case"uk":return'.ev@qf{p=(p)js?]d;OoR?}VWJC;l3;SDYio*/-j$Z{;?$m#hQ#9gX?4}qt""8;$J)Ch3#lg@s27@fV#Yp^P(;eX7c,[ayv^-n2HnVrxa__qHfdk`vv+/?EhQZ#`;<O6=h2lPukKW-^p-yhL?+sOg?ewO5Bsi0o1{bq
g.UfFd]3QHMV%uG=
ep
La7)kx^
vE8i-R-11G5F"@Z%gVs4KFZ2P;DI=EC2qk;;)a89^=7eVd&M.vrcwoDq&sTKHuAm35QIOw7_4h-4>yd=pg)I
EOpl3sQmgR)/Ij7(N#=
-6<5Gc<U&MK1z(,/O;kqE.c7wq0.R7$hX::_>l/nl,m[h?T"WY`Ns+40?5e:vp_koo6%37UkN-QBmwdfBaE30=8y`J5i?&i4#^ggv)l;A#PL86WT0#luL-UI5Vq#=X#[BjS3<<QvK!n>&s.j>y%9=JOh!IP
V
Mj,>meMY&yJc,e)~NWdVGJFEF3#X^y(!Qi@DQAs9wdj7U]vDIHZl$Ux{
P:EkA.2NYSybLaN&<O/-V:xv2]~nwx-v?=|A?LCI2nz"v`]X+BiAS_-1i7mFH6Wr7
_Lz&<K)#@%O[u`d%wb*y79{bRPCdc"m)0#-bxb;wf*vG)E&q2NRE#)7M]
2A(XiR&[>@>qPyQ"%hdg`.4N"!be3ys$kA2!QR5,Zinp60[,s9,h|c@;mt9=<mPgGtV@[l[F_@IeQpUyWf8v)$~`N2
_Qom<H6:Bb="9:Vm4haMW?qIiNGbsLCeEU<qeJ<c_Ru$omb=9;^BWsJpWkf[0`j54PS>#FK<tEb^wHXAIcC:<!VDI0Pg*q9-d*,}@JO2Fcals]?II2>/C$&g#7XbX40FT>6}wi0^c(TR1Jks,
4;>MHnfdCVw9,S)<bhl
$Z"bqsaD_.Y"JvS9>l-29bqOr!s*W_;C5n1qV&(e-CqTt60[la<eQ+s>Wfh[tQm:T#XDay)bbrK>O0(85+Eo?Q]&`Im4@oep>=d.Fs&V)rm$bce"_SaJn8m7TNxY&nWv-Hxd%M:(p;N^BiIB1S-~pior!ne"4NC:`VnilNaul:hxTx4D&bv#X">EY^
LL_dZ&O(M#jks#:cY1(Z3gpi
&:HWv|Qj_kYb-/.h.{D@MCMR0q1pk`+-1(p6%bv!+;fGhIA+
L=jg@"d1+c]b+mhBJg,QOvcdm6h1n6-,8oLs];U]x-c$!C?o/4^1~%0h!Qw&WN>&N`,[!FV?MHTI<JEu1r]-#Z.;~-$Q&_#y6.=im7cyXFS+K`)>g2i8t^a*
$Ao^T!kd2gEPtFAr^vSlcb0|q
J1Y|9XOdQK$aKX.A$S2_$|7D8*xj.k%#PLy33~Y"j@_VK6xxMu1^DROG`<1my4Jl.U=%)HVrf*_=Evu=f6R8+Pin*6,YRfDB_U0hnfop(S2l_ES"vXO+Y)u!Q0aWoQw4N|]mD+HCeBvw!-7
d32*ic+pXQ6&UW;U!|kL.(_"ErUkK+75!VNO9kb!eD#}$jV=3FRhj`wq@*r:Py$Zwj1&q0@b]veYqDvhizCRQ3BIj>X+rZCh]"&DsPXMvc`vlCb8Zf)B[XFGewsF-~i`(Rj$(,)ItSRA9@,Z=X)[06E;fXJX-|HZcjASw>Y$IfqfB=ufArGS2_vGmb87nTm:&-xpimF]YrG>t=ey,BE!)7A;0fww38qRV#5QK}:d75Q+dn.FQ3mddL*LCx=~&n6qLRNI/wpmrNPQRl
5d3;;gwF"5wSRiNwu;uf4g
Rv$)hQp&]:sB+*.4Ifl![LE}_4ioty%=ZQVmW*4Q;!Xb&*9wDlC1:p]zB>STC:$q-[D*]E0RfTu
5JXz:l(U"8p@e^mso__vt6Y/3RS~;H<QJBkh?+R.d}7R(C2lSE%kJ4ZO-+)
nBE916_)=Aj![bB
oES6J4dQpRIx?T+LfnExAemn0/03"m]y/+PC&C$7X$L-Db&V3[.Rq`9%5RLepBslNd-)Y_S=rhJiN^EW#&?)bfkN[3.^T*r0q&fFkI=6_<3MQ.I?4m#8/6"$U$Mfg]7&A,l
1,:Yg[Qk^OOo3E
H%cOsQ$
qh:T@>q,zq1Ofr8->]F7<UPdS<~I0<|#$D1iKd)[%`A]PFv>:lLe`#}.Qc~-hIh&3Sm;>tv?|c_)UClj{eh:.wS38
prfrlT$gAZEJv#&ULe410B3A`p}=W/
lW8=dq@$cGPn?1@7Vg7Sy4aG"=I^.+.UM[^6d`<XPG#YJJh;)Z=S4*q$Cv%>-5/g^qxj2R.XB
)mq*FJ#0&pWEKy&Xg^f!`QH~[ie65dbgge+2pBk=Z:@)CU0Y!HC<b73Pv&e
Z?@EfbY432SWp92DYugWA~l}]G/yhBQT)p"K_5K_B5ZZ@K;tTQ2-r^4Xn3qX)h@#P*]YU_59pW6mT5v<h,SPgTXhWlub^i9"uhxhTcy-GFTXUa!k"n1{LPQv%X]}UPt:Ap9+@iIV*&R<n?xgAt
{
qZTt.S3H?DDk/;Nv4S%/C:QE<rZImFYljIpU%#8Wc!aU*!TxlW,_"*<HPH*S5!98SjL0&)ZnQ+CTa#i
5smmKA$e|DP:*f.xK)_RHc:[haZ!GuJ;JeoXyP);b2Gsfj1!F?3gK&_m}2<_?C!#6b23p85Da1<F=,WL>XApR0K]++7Ex"**#wiLkwYw1=?];x`vsn[%V8}O`/GZ
n7GLr85^tnkRXKJ.G*fBn,DWQarwnHvOTC7"xRe*&(f{__ws]PtRy+CWI`wR0ingQ>[%6bu~8b@tj0<QKtTzWvQ;X3C=e@0CL~/5QPb|b2*iYa#q0D?"9,"ZDKm=d>Nrox.eG*j/gl%-qMRBQjvWlp<4[OPRTTc1e,hL9?h
B2v<cT#=%7O`;B>F@,=mc`s/o:W|woA]S/l`ra"oyK*V<-!Y^D%Pru0"Z!6JUiT8+=[eBM9Eg)CUJ@4ziA!3*`p0HA)ENs(O9ehcX16_=D@5sFsWf
xnJOw3O
iViZ<u/`i&v9*o7Wtc.DY;,3t:TFZFa!j?/oVAF2,AF%g`KpE-+EAc,38m-GJud<btCDSR<OVvg?Az6A<LuLk@!#J$4oxpI_%}aFKtKe+"d|@@%KU
p6:8$t?u9umJ",i*,YK956237o!ZoS3*^63?%YGE9a`6MFit67kng+gqpe/VITEQIq)O]xchZmD/e"%i9w1="]1.CX^H-|d[f]aJ]].&eFJV7*/8Ip-=#KxMACCiPpq$RhmW[zP[T0RZ@;<,(`4)kX9}8lTbUMr6
"B7uV
`*-MtBa1$2F
)ANe09&kuLZs##4I[eEF;GfDGdX6]jq^HDs`~h3
}!h:,Z"bHgkx2NOR~I|_GGPf_xmkaY^Ro:ajJ*+f@TmueAQMrxGCucqa;@dT=n&0~6Zvb]_>}Ww:S:=R}:O_$TsiV-1jWL
!#>ZU*K/&No4KUr1xBYp,4H{K+WqcQ!^+wMF*GI5Rt=3E@1:wSl72"XTscm9jCy8s9r.LYqZZjg>2G5}d8oJV/%UEyq
8_
}DG)O&Zuh9>TDl$bPLO&Z3z>TsM>X#`<nG`n.VABgnqyh.k$+b[m@@R`GJ61dMKrWUv]gvA&pIhWc/56Sb@[(`|AUm;O#kw70?2Xqh)+rw.Fc_urZ>tD.r/?us8j4p+$I[^<{5iUT%PWVhi`wSbnD0i+mf#b4(UH@6nZ/R-E<A[pNs2Do9X2uJeK?#tBTQxOGMdkL+oW7L+!QYPEyuv,
JeL5QlRZ]yJTQsG+ObAj;q/`]JVvJ,iHNpR5X&`3K8.8tC+YCEz&9wf^3
lh-XB#b(gB><$!M^h@L+?Sg%p"7U4aVjROO/I"0;i8sd&Tp3r/jPDk%ne-,ZJF:-rkGTSc;T$Qy;WA:Sc3bgD)]3cn/30Ti@U9SNGn9Ook@!T,0I]LSHAW;lqHu#BIwzaUIFJQv+c9_Aexi&!T%6J:F-=H[PEa=$*d>yuj4JS5nu95h]v+U?h$6-0#
FKokcb~w+P%KQLVit%WqiU],6y_+xQkL:hndb/c)r)iNHe;hE;v<,:ImOfWcJ1JjKa-E7w42,4gmxbYYlJfH7Q
_&4)VP_p9#1TtI#TI-$SY7C$Q*1vC|.5JN/+Y~MGeU$ktIWwJAtH!CH&Icwi?dS3W=ngu<+3E2a
XY#HHV+Qy=Y.T3Q
`h49xEhrE)]eE2dyn|s_r~t=f"FFhXf&7i1o?~[*;oxcI[eF;osfFR2Y&lqpxu6(!0POKpIB/V-*v%N&';case"he":return'$s`0:6KZ+&iq4.1ENu"<
S:`d-[8t)Itqh{Z
egQ3KeQCGC/[8s_p>3
mkuZPS.RN9w*=dL?Hpw^SkGcuCGK%e(Es:0HujY9diggS*?0Ny/M.!pt.gLt.p0fuJR
q_-1D<2>WXBN@*)D|>HccDYH+pB-DcrDs"ov.Dz[%u`K@X-pnML^$SFE`0Y6RA
$[.Hr</[QzwOw$^bdqy+BNfbdG_(g-I3vewpd9My7%0moK2/D-Vh^.218Opfa"1}4El&BfX5T(*6l;$^OBTjHZkhQ`PH;G(IKU0is%MLki+4HugWFF8RV08gi)q47_:s:.PBheU0b*qPMJ6.)-C5h1x@Aq7td}w*1+Lke#atKALl%@mi>oAwmQ0
dmLc;!e)i
gg5*mY2t@_qN1lu9N8t_C].s!-DS4,mvAyetwE4p:50a5/Rv9Ka:lZ>YH*t(%_cwF?2&rb
j9Iv#WyuG^996MzK)PYYEEbC239cv;pYaE#h9TG*we/IK/-^F,^A1Y[CSOw4dN@;KZC)9`pWhd#Al!h5CA*]@g{R}(ybM-U-!M*I
i*``u$pn2ULHp`0x;?t*@b?A+KyY!ZKyy7T3H6aBEV*HKRn1
D[4=Bkb>5$?jo3~9,a5&&eHA5.(!VvLJ.PeIilY,&&zMD^F?V+j1!Vv02cNKnG>RrZKMR8Y9$O)gLWkNLkEoeq8i
_G!*i[Y)9(T>"4MRyvk(U
@c3FD2^mmfIc4fd~>+g&KW7{]^w
,E
a5fwqxplhT+gZU11,sKKC5NB)s"McX#@+Qp:Rqbxb@%RdZBN"c_4iR6BvK_y&!4xW"*Swtcil&btc)]F+Z4,-$=;6Ed"L@fT!LJ*DZv?uez"a4{A$h/#3Gof-k?3VBFoNWNHxF}x_5Vx/&^]_v"G`7B=e^Fbr2O.vV0,lu"Z.73J,?YZpSQjVodv-IXx$<w,0#-5;:{ol&X(.M]=Q=z8D<^pDpE+u`Z5]Tn3E)`%%P+g}F-lm*{-7s!CPQc,FCw(#-Q$3;&_]C?U|3iFo%?8|7Fbj^?+=wh-t:<5D?o@b9V<NqYJ1ct&vYiV>u$16=cyYD$d9om([[}xSaw?Q?k*;3->-cMsr.$]k!modO}6B8c>,SPa0nmaHEOXZQA#*bh([3218ft
L9zu[Pv(4ja0~@zvC:N;!F+Hs]0CM49hZli:7ON0HGJu}@)4OA!,2dr;v+vPIbgTvU<>;_
(bCNuw8EEB(6jn=YWT
59Ec-X><+#yuPZZs(;T9h"LU-JW3EB.V$Q:7#IBx}Q/_M,+1$^0+FYg$,hb&m&?GsnYx=#I<e.CLw3?$|jo/D]|*.g5"n+6E
NFCEs2^#d|E-ML-$^>u^Gjvx0O2{T6hjENbM
T-XQD&X8(Vy.+={w~T994F8EGc=K%/~,y^IV+X#[!EVE"L*JP_]@j0pdL.1`wM.He9D=HM:b4>^IaQy!nO.D*W|Y{-
qX[)]VZ|`
<[B,4O0n23E`WZalS{4R-mL;-VPrDC0<n3H
P-Mx#p,i3=Vn*=l1*03vDL]M@r5NIqH
h6^|8$@Tn_(*.j5{p38}Zv+4ub5TQ3)J<=eeC1z$DW1e31KzY"yCHon}ZFE("Bc2>r]B)Mn@%$_vRxhcEXVB)V-+pN>Y^e#[w._1R&H6Y+I7X3&pptdnIRO].pxxr/k:1p=lkLeuQ>kI_sto5@r>mB>9O7veNP/_0
TAFN0+b"`{0?6S)=1Fp`O|x10.U3bxh|yqGxTD55]=E5e}uH97O}k_-e>$
K7"J*EsT%otpVTZ"Um:s)/:F`Qq43:)Y(qF)OY=uP`k"nZurY&|d=@*x@5pA<@iDLBlZ;I~wA
)0>bs1!`1K(,aC?6L0qD]Wit
+Smeb-Uersa-cha57fYr5i:)`m-Ih0GWYe@!!+F3L4jH3BJ8td/>(PD-,rx[=mC#f|xfZBtYIEo(t8f=,JYUWq7pQt/Gvwt2EYCvW0^HA#p<3x0Rqcd?/~9K73.<f!=3X,ItI}Q
[WShv*i_U9xehsE~nyv7%)Z{XP$Pkz.]#Fq8p<jqKd%nloZO[CI<3`Qv+Ahz!K^E%p]Ji}-4TcjC_V$%b8Im<XQR#4v
({@Gg
eHN2M[i(<ip82;hqfbG]s|f1C;LA%0N#5aZh_rFwii?-B[QF>W`$or-UB.)@G,LDt?T=.+xU9[GPB(faR}*gMRk1l$/ER]Vhj0mM=.m/b+u`SN@;=[3t9/"O5TM)EI3R>AWeZpUear6MFFUW_(Ypv)6_/S6&oMcvFI-i.i5:?tx<F?*&Ac2|`R#7f41N^VHRjCqV%:8P[81b0)T]So`(Y{]0jy7PRA[`u$*(?tUl%gvPDDc%kE_vjZGMc8uE`Cr$dkCkeW>2`pfg.AKvu}[LB
Cix
._;xfr/bDt^sJmhk1>34_"ve&Ib[yHlJ=PtM)fX3c_QZ3,*o3xsp/4coA
rRg~C[,R8C)?SI5.&/RXx.Qx
?_z`.!DOE@Xf3`08oS43x_LL+*w2#NnZow=D/8KrSgpVwFQ
@Zdl
3?2Xblq%K2OZLC!^OyW^kg`p#jEJh5a!.3w3`3=M_Hk43AnACE;kX6T}qWu/3To1';case"ar":return')c0;:aPp])QXkE|N>#(h5#&^Bpv*ulw&3)wI3717j`"w9ecC?`4OR)l<Z-kGog3hkI.O!:YkB0zN"/{n+xlg*+;6_+/n:Iap!bREYr@mZDgmw3S7Cn1T%l~4~AoV;m|Fq*7m64u69Kn
GI+t5>):QWO/Fm>n+a(>s/[$,,,v63l^2Hy)2gRv|G[J|8:@jC*^=x[c4A
3~%(ty.3S#A#kZJ7wH]TAH5V5&b3K`e?GWq"TXZ$k3B{.LV/S^w!IpR.].T@^5gmjy8pl7)FieI#yc_HP%Asm4J<1f
LR~X98i<Q5:"]s!*DW"m0a$+OK3M]ggLKu-,$F5i6,$d~B;&$Pbc]mn;K>-N4bVdrB;$2(*]n>fV^2-rVUdx.4w;S1nI?30]G9S<XfUpT0>ZHiH9^8>IA.ig#`UI4+;fF=HgNx~:Vnt(iEdr!hnGEJ:8k4@,l5F
/1tl;j]_l.dtbcr+!M
0K/Vieyddc=-Pv7<]b]oaQA]m_W>1uSo<FF9lg0ysWt1^t@Z:gt#OX6cD%E0cFjO36NgLqxD,nrO)lf~?_h@>3]_Z^0:wLS|=phOG7Pq8J4!#|^K/BS$%!2+(iRUT"-|KL`naspf^oa%13tn!5uwmYceuX6^C{b/bScUOs#(S;gbE$Q._MunFIqRY;X=@37t[do(M8&Yc}#
@Vw:`/6U(Fh=;~Z1eFndHvdO4#WX5|y0aE,v1}5I6yB_DAP@]NbK
_Mto-nrDcZxHk]s<
lX@_uukw#44L1
YT]43-e`8_<mZ
FA>E6K>Dm/qLo
9XQ=Tm%hV~D9DrG09EyeF9yCNqc=<1q@U6m
gc1o7Zs>
*x_8pc9,,b$qi+X&Ue=][Jd@>%q8._sNNeG.U)g?Qu;2t5Qdi<P#2k}K#r7_""G"z*Lb%/cL|%.+cn>$[#Fi}D/QEd_qhd)]2>M6H5E#e6CCPG]*/]9.=
ylu-n$w)0Z=GQX+0]:"UofMg5regCU+?JAySl@@2)MuJ(LDm>0KxITO/kE>OlHE4`v
bw;S!9e]iH1CtZc-r(wq[K:gT-tv3^(4X/=E,mD-PqKbVFQyLa8Ze%dejFEtA`5,rZT5sM32XO[Ra28:EUU[NlF+J7X=*XU&(G2DuX#-*gR2SFP@V1xDDH%G``lkxvQzam/dp|Q@Xjj?&Mer`g:v/wia)kCWIn;qlny3L4jILUF4>:^PGPJ<("M#HZMIE9Wc&Q:s^xfQW@[f"4ye6MwbJ_8l<Po*Rc-[Y&9Kxtn:"~uF,_XcyQT
ZNV
iX30L#[|F=For6HdwlP70T4?Q&]SUAnZ^WISl$(QPJ2kC#+[Sx!]ZwNYV?LL$,eO.F&s^KtKLI6=x{yfS5_b-wS+1
,_M!A<un^6TZw.DNxcu=Esbf;)4#5|pTF^<4SF>}GE$TE!NBhmrBqGc>C:F_@FkvQY]betZeEGNTVvO1UOT.-`
>;TF<RuywA3/(Bix#@>-a.89U$NCRo[pJ:"pm%_U*R33*Xy<(z"aIE-CbbuS:KGoK+0$3u3G=sx(>g!6!$/lnJhUtQ[/n.gg"&Y-KQS+l7zcd:;
L![GunhPx1uO$_KU?.Cs]d#//2tF}BR;{W+C[9VsZUK=Ocdr-4|:4"p25!)Ma@u1k:k"T-h/:ckD8V%AP$0Sgf-$MN/:vIWhi<1q*wY?+Q5bhvc/eZ%Pa*iw>ClkY!YlaW#OCIq0;%}Zi9Quvr>)+#^2ojyyC>1sI&diL&P8MsLTG7wf<MZ)/^W2e0<IgTkYlBJ/ygX,g;<C*3b_&;f7S56y#D3VM"N$
5qxEahIoWp6=)xZCm2/GN)iCnpF&2]s3PIZrr)L*[:u/;0B&wMG3hJ2S;~L1KqBz0$K*n#1w0|>NjHW:+J6wS-xjVedWlgsjniQWO3c_WGJ*1c2X?lCg=MC(9AJl!]l+-*Ev=ZtAy57}2)Cj#4Z"cxT32]w1.=.R;1%N0Sd^Z
N7[Z#X.,+"-z@c:1?)s3L)E=]v`6Gd^!W6n6hXZU-c0tV2y8gx&GN
hnm7]Sw{Jy;r#^,fthJxo_CJU)2jK^=X"o&jotl!MH3$>poX-cJX<7tTOyk.!]OW6<c&e!bgda*?tbl[j_8Cro._DW$pTc0*M+Xmp]AB@gBYiY9q_2qm<}"ns9wc!qRLL8g#I!_YUP@|?)Gv>Lfpi!h4I,54f}xx)PeY.hF8HnP$Ib)[4CK]r<68[@Ia-h.<+OEJ!8bo4-&&57_M7?4cH=([fe9[tDG@3~!SN$7=S%rC9`Z
usW4xk6f?IY-GTC}Ed;R$Zi0IEV(Ol=HuCleKNAW)KSh?cw=COAps`?-WQtZ$(=1AT5gXY9~dCTb,~,,L5GCaX#Sd$`XeC$,MjxkHo
;fnhNC-IX5a#M4],k:6a;BkX/klB|CsbG-O>#j_v5ZWxGB%w7hR3(b~Zb#uEn,_M2d@]-OBh=%mIBtpdi<y%`8ZjO!B.s&gYg,m%Y
.`%oEQzRW4CWrG&
!UDB5d-9mO_QVKS`c(;Ao?6NSmP7*<L6w>L)[LsV}.g42d64_*Egz!jKiqAH=yAQNGpO5KIR53gMZR:bhP&9trYgWnZU|)P9G0Ek0jBryZS?!;Qb-y0@EV0Z:TmsT-TE]HDqf&]YKmDZC.Wtb;^t$pX%~<P,fTru$C0jlydDv+1bl6n49@f7?uAmQ^ah>ANOR3Jc&"SnR??2n@P.e"q7gJfKAlr5BMm#+
G)BvvDc92/XHv#oO|pt6]HD?cn"Uow<qp<5.?RFUX;@cf[r0_1](*/e<N,Juloa6y
JE+G@%,P?Uw[+]R8h8s0`HJ>=-{MKoIZL)hJ{jP/H`vw.L:fdN).SE7g~_b84
Y<|:TR|C!3vpNR4-Q-f/=s*bD71&``9ye]J[}WPh!=Iehs=?Qm;CHrDca=p8ojm%^`pst$MNL5B10xpI>Sop4/QsShk]u
#KQ35a;D(Kbq-9#vRwpmR<)Jt(qBbg=<1jcQsCrN(N{22@UHBf-y8)Iw@-N%cM`YV3A`pW8@q08x3K=o-c:*7eJrc.CQeS5_(tu.OJ>u)
!ob,ItzR[pG(4LAqWI@=jc,`QHKSB(OY}w#E=A[o?P{XM:wGw8u/j4Ir,2a9TqoTix!o^UQR~4HbD$$Hi^7tk(NJ|;?hir!@VY"&8*-*xQZ^vfi;olhF",FZla`v]KP3CxNPh.0!W
Vi9WLB~5n;9IwaQ:ye2ekJW6])i/_/s37h2W!$]`o>Mnc<<Edu$iob|"AC=i%c
I1W>E
;!t6E/q?9&n]C<wQ!`py,E3bX^8V+&p&%s8x9P,%kt
o`d"9C
QX
=qsl8?{c&S7_3dFH#4zcuqFNdpP&<Qdclyou}u,^qrG:cJ,X*4PaaPck69QqcN]
dvQI3kdCGL
xWq46FhE]rD]-}qS>h]GcFI{PGA>&O`&uo^@`:9uuT0SBLQF8x:HYJ>&K0<.>/@k`m>]OPn~EggK57""';case"fa":return'-s`:Wh%Z+&HokU@hPrT$",!1rqs[>sfK})Fo0cu)7=i!zYG0UQ8C9ruY2Q(w0E]KL";@9ku0
oq#%yVZ>w8S<J0xb#y^EK*neB,w,*hwO]hD_e0marM=NS*2gMo@)q._<0CrLb-HMJ>77[GT2XCHj];@7Ofy5TJtg*V
HU.:rIc]6cWm/SKc.wjaiH1A<:iQ&rwP.dWh#kR&5@)+`=z9hh
kTpfYjhFF&JDJ-exm
I6_[,7@lh^y{Kwe9,GY*Cd%CWqk<P(Wax#&@o1;r"(ed1_-1mWP)Xp`;!Pa!=ybiX<nd:5)I&,pWJ79N@^j_j~icULjOtM<,6:-<Ghr(SSH_lm[7#9@d&#anDY?h
D5#9>(Z(yuvZ
"y@Wly<YV,O*B-]k8V
Bg0tz:hZ5hH@e>`_n1&gx/"H=8KG6;ETE[5=rD?30uLb}ccbsB|OwQJ`X1!;.`pBW!NNCyC[;@]2g/Rk-yqlvxM227)&GH3Qt$;ChWxSVz"*hf0=oB:R,>tO4](U#s1[1fQy`c@VIYCSTggrHE|@#QOsA`1,t[y`)DB2.$5(k6!,WH~*@yv0:UebW9nZuwF45<J:aBn%"U#4I_x1V3NJ0`21Q]&"}3".A#1`zUP:jZ{q.Rguc/ZvgjEryp^ldc;6aF05"
HdIG*,em2Wr,utTaDLRJxem&`$2luYA5Ba7A9;pU/O>#ThE4vp~KL9hj|7i@QZ_Y95@XY_xaj7j@s6}_NX)=]fP"
xobttY5Cl=`~gA;dnF5u#{=>B+k/3N[s#ISFyo@f2U7CPBPDoB&!)aT_+(eGezb;ik@}`wF<U!SMPiw>=%,B8$Su._=FW=rwvQmG,77>kSuiBWgA0LXZ"^q{mf=TGi^^XP<tu62Otu$#][?W#^i<Z|X]"DtsYW:Txbj[N8nA720cYD"PdB0R2fYvz)jMbuB=rT^`E!Pk8x8-H;,!J{ty:R&r.,d:l@yL0&AmPJgv2PMC:2"Gm!KGBaAR,bB]jSTxh`$gs},k<!]25x>t>G^`e/2RCgP>G`6lLjJ9tN#j<v!ZH0ddh{/eTv*(a0JK=w9$pXpdTw@4YynUJA<t/R1B.+s&<M$S#[oVB:.YusQkcdb-A_X-1"ov(r*Ht,k$RS
0mjpI
v%jqI!wnyu.d2Rv@yT^$~qwxB,
/m`J0FHU<Bz%luG;/
Lk3G)dTLePt/yKVN34<?/vf>3mT<[w%h[0L+U4dvHD-VW_-.]@AFJ+QxDRTPiK(9!]i%>bF<UuF-AoS@G+=%Om_Q9myEt,nfmfj#_:R.!|,l1,?=TiJo4q$7^<URP29S<2utDU*[(zH)]O@vEL
E<Yuc3i,Zm7gc&y]y0<q{-*KyRF?m*Efpe.$ih^L&2*rT#L!!w=HeEnX-]Oo,a|#qK[G)?1#bAZ-D+.FB@|XTIcK@+Y#[$iA7"!y)gzR34DumNE7E0y>fRAB^oJecZ25x*WNG<S1a
c<&n[c;_18w+fb~8M7z6Y*_P:w&c%s0*|2+)q>UX`)=h?LgdS5)C%kMs^&
1<-a#qJ:/L;LMB_!OG$F##4eM6Av-Ub_9n6$quNF.pH%;?R9&e`>:1!4/dZt]+M-(YtX
20d#iD(*ILuJVE@.8(JM1Q9CgDoH+URS^4}]caUh<AdT>H
c3(-Qcp=1;Ok]9oZ7H1luOpiB6,:J[@8%D9$k?jn%5[ihP3,Y.PvHu>jS~IC
#3[nB@Y_Tl!"%4gi-M/#%E0i@
l=U({.6VodNM@CEitxJ-x*C7{Lp"eB`-3[@mo
BaUl=?P[:dJNR]J+D>[$3K!m;^6IyZ!o)Fg&]/?-C(N%D
"b}[BA-BZ.ICRoF"~NV6(LtBR3#-)GJ5c5P/Mf
-Ca>IDUMo>Exdwdvmv/4Z-A,@d-Quy8Jm}t*==k%f{oR>K9mGIm1CACkVLHXceUk5>hb;NYt2|>iQb<{23HyQ!1):fR|%1uc%y6{;j=JG/-Rl|NuIC4|(vaOyWCmE4?xwvF-A;2-lyQM@14~rE7)r1RWAOWniEjfi$$C/O[Fl>2]pd7h3S/^Qy0$^]$BPh]^FS41,I%LNw3%4XKkq;5lkjg7EV73
E)9?U/m_7Z+,^V"9[DxC2ly8^X.4VdnX)otJ@;8TN<7;RsSk9+VP6bT`2CkFF"93pJkNo,5Up7|4jN8IvIa>ZpO,Y1}J55^/
j^402-64F(tSVmdD#O)]Z"&(RO2#!gbBsONEU26C3Sw
tKduA^eVMSi6)NyID%nUA_1?1"344
>UPE7;ECi(I]B*Ci)uVC8ydmEA]x
|Vq3LEBRCGB4?wDT^0GkV?f"E%(wKo81$48aChSYca;YDTiD4Z^W5xW#+M.7!!5QL>F$+L-xqT)=+XTH^4&DM0@Jf@ts&#{SWZSb75H1t8ZZnUTH0Qg%iSZ"Lp90@$UQ5.un@[R$o/a^r*pC+a?E>,r6_F.AEC8:|*X=vDE5vJ2+cnpJR+rEIaR_]#M%<
taxB[6xUD9th0)$;$h|`AOKp4k-Ve6VGj&y*o&_LQ*iB0uJ
eo+G7*qFz+a&
L%D2
AukCukIgk-o8%h(3^"8+"+"6C!haWGZHgU-
x*c*c,EZ5C];|&<IZc{f%ha<VNSvV/r$4dUb<82n[9fmst0or+h^k6VEXJ(_+>a!C7g*c3d4toxNd^1Q&sSA/rcJJY{vy:&98
JY?N2I{ojpV/pP@2o&a3OZ]15AfI[D}gWuJViHR#9&/1?+P*=S2tl,?M0tXyG""';case"hi":return'#sXF{bOZY.<K>C$pc6?U
XpRp8)1/UsI3NLxDYT&:E<L:IC.(gq8(sN*E%jOqe0mAn@`LVRpIQnug;:UV
gAY7,I+o]^#Fh=6`m^#V/ch;df_`JH>IsJUPcnmjnnmq$Pd[;/(xAa}lmsiHGS(f=^d@7fE`x7
JmxqmY_wL-FeXznzGvWGpn*s,,"&c;g<AlboxOxsx&,QI4_+aKq0e6lt"Mf,+RoV7K2?Z-<WDH=qM]U[6I_iUf7%7rbVqR_@O>aB(>pFu7fpoo9`0IN8<~cXOXbm.,%4JO]+MpxU?r`>UX1v
"x]RFXDK
w%Nt7$M].Bu7ry8
XP@Y3o^UDLRr>VE7H90|O.T`#2LVg.ohObu6fKv9.P3M+5=6Kn73P|6eD#5H(*jT&jsi%]lGr?8eM"+cj|m38>fvE:rR
io{wsvuuBPoL@unV%gBC(wK
lk=(8pF^4+
QUV%
#=:Krbm41[wFQrbRTU
<s,Wlq"$eZt@Z8yxA9:b>(]-4L%|!nNa_.%!d;jLZ-?*IXgHY7G?6zyg
4xOtHLc"Kvnp|,6]tmQd#aAF9yCrc.opeiWp7Afu{1Zkg68Fq4wjsK(S~X1r(s#vJ2YwlMP9f=tEI"*PB-ub|IqSWKs1Yu?QX?7/ZRs#3O|H`>#d7Lpke9?KpvR8)[rqr_bE-Q9oYliEKk,4}t9CiLh`)ZiakROFFUXoaM@EP>cz&K=wS[]QG[CxfX"@f8/v^O(S<$Aqr#L<,%nsvCc8gi8X~$8Hbx=-PCPeKP|3T*&B9eB%nqfup/p[x-8NofE2_>q?-2)-%&/hI>FX1i<1s"j^P>QTE$*gs9EU@$1$SV>l9&BV|t;wQ7Oh|IUV2%m]geSf:TPy@2dg%aw#hO(%{:,,>eqno#0@u
TFC]<m7!u!FEMo@8pv<8lBbWtgMCRr%YuM8D9DCwfnjbE:
r|h_LF.8HenXQYpsMk,Wd.-
:0!vv;Px*gW@-m!D#vXU7bC]qO)]0a)bhWop(d),%]1sE[2>KEOLMcIArWd/%Y-@(M[~s#C+2Qs&Nf`DJ6oI$nw"Nx1ACn=#I$9GG-c:C5$.KY,<lP&|Q/?C;*N_ZP3I2e":e/(xZ3p2,)a7E,Zs?-Y;C35*F2>Km;jOaU+dOFOm[jO%_DW+hBwG=f4x_:0@$C4m8#NYNP;vryhbC.LA*"pmTDGN.
(0QIgk-[fy&0$~C;cD=gF869Z|F]#g@OOfpUqbE~]:XFx)N0,[9TiW/eO#lgd$DIx(iKCbxS]gy~PhJ^V56(GGsIu4PjT5%J"9hN8]S|7LfZaPP_J4nKI80}O|651^((aFHp.H0Xjk%z28"ks6Ls`D[?]baB
:@|mz8-+EKzB7,pbDb<t;FcSewN1b`kz(pb(_1t2tis,h]jQ
+Ouqq$xL&)g;"S>[/5W!;LYW&oA]CJ06*LbfI#,wxLM4&o4?t7Izgz0H@9G5cWoo&`/Z>D?:X/-2L][-d7v[HY/nXm7*vc^j`N4Qu`ji-us7n2[JD,eXU%qap2x`O@An4.*iNF,x`.XsqN6G&kQ;L?)H0.7J93B5c"$hw_0]*BwE=
qq?5Xl[%tHJ6]Xf%=4A-v3!stfnW&]@Q$aHeV?qpBx7W<eKpImZa/YidyL?E!D%|O9`Nb%Wud8ahV$7pO?A38o^s;#B`E9[D=g;Zw0@aZmV6Wi).8U/Pq(t@4_ntF5`H;4T94$1o<o3%6Jiq%EXwu]QejSa.C{W"N=a?l,7S3{8C.
[x>qTc<j6.<(V2x$e59n4z;BNBZ8^ZK
j!;;&cCjP!Q{O)ATi9U>uQA_!F8^GBV1/;SbX`@)3^e"B~!~7v1.-5ZJF;as&gx5x
$NOXueSh++@e2:Y,a/)
A8+j-Q_IrV@&sESn)WQj_Pg-,T%~(D`m
#2@#8?
0%np%PrY3YKLVrvw3,da)Ik"s|7#%J%RGUWA&p91BT_V=Y]66$Vt:$<Bty../#
V1H*
YrKke^Jq@-[Rr$qR6o"`aQqQyh6vs"rL]b4dTEU@%Pf]9W;E7av_JKZ%@[6HxbWQZ:?AG+[qJ|[gcr!HD[M29:()wG%B>1f=`E^lq[QXPf:,=jm&%/e"Qc!4gd#$DAYK_U_w5)&33A#vMEeRNcs[J|NpOr%?Y
9h^*N3Qt++pSm,.~#kp
"osU.%-m5OF,TK#s)>r?>LtcGIG()vOh[>HH2sPLit/N$iCM^40~*JliKPL-!?gJF4P9r2csb@w[/p<)d:vD?B8[ddSoW_fn1;gNQpew<r[$aF65Ta+qO=2.Bmc
M<LbsRNof`4YJZq#JeoSay
:TaFrpTX>=|-/`!YW(IdUmV^$x}=;=c77bk(=0P[YN;sn*#$gitfP==o
?#RGTS]Q/+aW/,vR,h+lt&VW$80_5H
Cq&)"96N$=9NHd%eMV3d+UPK^Drw8.-9H6nw7hOl~W-&=5:O!$/u+O:MJwJ.,k`kunx3RVG6P#xyYm`Xd/Vqw8OvgdPhN%x;16,dYh"[}F:tZS0(^5^(z?5F!uwCI]FXQ>]<`gZXzlQE(,fsnA]VBh*>q)u9m=}4Au]QVt0n"2#vTiL
eMu",
|&}G/ge>cp2nWgI/*%gCT:>p"";G:Ikwfbd$M-`Iq,d_Xk@`9m-/<f6Zi[UD?sOj%@T*xbzk^ZeW
a%,jrB!3gb8`k#_AReIeT*Ov5tK{S:`KrD4@48#tTY[sgS+<_G9|
AG";q#
3-)Z=ppdOD4gif8X3!(w<xgd;=j}4Wgn?g)1oL3]>(@{P/X}v=tXELx82p_#2F;j!WVpZ{T(f{V[,i:T+QZdL[T:cB,;7_SM
:QYhXLKV0KW@)CZbJl..PvJ<<Qtw5w3ce)+!^Z?@&jhV5].R=j+k_^vfeYEeBN7
Gfu,35-#n<s$V6w%6@5^c4/0I$4/m@KGh&~!tw(RWG:QDPD*50"Ai<3cSje3DI3:~VK0|F<K)"345G8Pw[orf6U<M(dJWw7mYqfPlRok8V3iKN:aQ)r:t_+18eB&F&:C`c^X0GHHY!lwpZ[PqQ:uDCt=D!M(*f+P27Ym1F=>6kd`o&B$Qbf";
qeW/DbE@0glFvqLk`rvv=YaYp@ami]{D2A7b,Z6ImaBcf"BeDaUfT<5_>l`H]]FDCT9?X69C9G&0CmQ$n[@7^eNmIVA
>#~UPDDk~oM4KW$hnDy4JDMnjx%Y#_r!T;si=S=!@y^(?hWqU,{?lIU]#kK(__+`GV39N&lmE(cgco:":hWL1$XsBAO7.JcvlpKY)XeWO/gySKTBdc`Q#m"HU&<$`b^xk_&axaKU3vKiux{)7/l=FUIy2vpaSf$lw<I:Da9tR9JZzZ)KzCz$w*.[HNL3(D7lz/ivse<s"DJ+ld!d--OC?l[yn1!csK=m12G_5hhZL]9SB5c1o@3wY?LgvHAU3,*?FjCL%/"[OQOn
JiZ2bGD|p^RI3~xjK}%d6/dflf*u_Ia!%bhgSXs
,+e>qS3PrnHC#T#/^2AV6hH)@j%NvSAQ]
,t.7g?tew)[O"V2
p0T_25bVkzHjjL"K]W*&m"$wT&';case"bn":return'-s`FCaPmT/&=&v*lG.^+m3lNSS^I[5i$>3fSyBEJf:1:{f3gl_5`vNhZ*C*jDXpZZvVpVGg@[?f3XF}u
_$)JMZs:l;Z?ITJ3J(bNl+^+l/rzFfbG@3wCc+s,i0kKG~w*rhckm|z(&k?CyAt5d3E8u3HA@+od3^oTNdd2Mdt3@o;:$$`^k<V&o(n5
7xbsV892Pyzw~]&w0WOE>WG0pMq^Rri/@n
P`/Wee=4FF?I1[eI&UWMh;IUA.2/91Aa_)#t6P!SPg4@Q=CadBpK8ojXA%=f_:"j?"imJiXIYDSyRWLT4@[yA?H"AE%-Xbd:Op5=[MvX^X?xQP(4XpZx2~<Vru,Ob8l#7CvXf?,.kRP1v|%}#<bJ#~LR&43dft<KwH(?dN;{0T$ZNAqfOy8a-,qtiJ9U%.N;fo$BHt)Rx_LN?=05"$tP;(WL`wm
g1?=2z?nUivPLE>d,lM3w)iv*/Utc%IT,9rd6P-K-J]?5$pUh%VLK"H06())7Y2GH=;qb3vPluQ)e:yjD/S/q%m:_bIrlsnN1{lv!BL3Yl14SPi`0tB
"eLP5"j&UY1_0VG%*6XZ4dsJMm(/N2xs.c[>#((r-gnn%3GAWY4$+^?
ZhPyhC]"d-;Lp%<rfpk6Yq&7W,-BJvjK$w2S/R2ffo[t5v)mPt)=9k*2K/mAjIZ{/g4GKx4c=U<tJ7ypG6dXcq8IKTf*C)qG?CYo*}OoB0yYn%"T_SlLcLjRC5*d0Rook6HP"6?p5CF}sff#X8i/P_.%BWdY77pFosm9Q[q3vjrZoEIw(%eV:uEIYw48-#HI0<I_]]hw@b`~2M=[4M_sB4
2cJp|c]<+SCQmZf"sX@M>-fM`T!VZ6a0A+xI!KWHfGd;l!warxn%$WP-@G%AHD7)~qxkJVq`0Bh2*%#/8^hr(sbx)lB^-i{Mf--8+u{qfsoN?2O*wm5f;X3$hjvUZ**!Dx3
MAb$#g4)s(+.=l3S5]O$FWcq?8Ns}@p>tdbd30p?WwEkzd&4?bvKlI;G
YP8]I<[}0na4IobKpZ:HE09hMFV@5Sm~:MDMDV529DX~Hb.2#3kPkVT
VZY`uc"pnX+Z>86T^{1plqLAd0dal.ue7#Bxlm:4_wP]Vi+zI_G(p[V<:Y-y;N%T8k"4sgLT_BMy0X.O#C/%z)x&7YaqrvWL8E1`jII!B1I4uE_DqGa:Cv.yT]o7SH?ZT?BQL&KnF*7D2i#@%Pu,G3wv9VOt`wD<rGo{Om>qeM[S4xBqOlxc%>tlpX1BAssh#Fr!jVOYaA-AN3c;]6ra_U?L$`!h!2gi)*j34q4QGW>OV9^mGFL:rC!td.y3)Lp[eXPdX4]6!Plp+Xrf"s+{=
vb(SNa]"-[sq&-[k"hoC.w_~b20BJPZ+0=TzFk=^IG><(4jEXHNOW|Ae/(ORU!;gO#JaV78rJD_^!{UJAD"vk{C,!33so+?RXlHYAU0@hcUHRvp)(lfm,_ENV*#!N[l10_f,3P!Ke.>e0rc*NVM(iq%9ke$%stvNvb!u=hy=jelS11iGp-4mSwV"mHxl06a!9J&qakY<K~0I[*.SvO0E5P=ZYsBD7APV0`z)Pb?o>A@n1v-KAFY[]u+ks%*M<tqcK^$axW,=qR=M`?ZD;$k@?qq>XMK
KcaSfueC:afV6IJ9(X.q*^6O$ivxi=gi.@=]+RO&[mLAO-)qFQeiAVAeqckoi`OK6nR4&sEoK~<[F2<B,x<W>>Gb)CgKKgt2E/,!%.)u[{<Gvp>z.Ikb*T"[=`bl1KoL/7R#hYo6ThpCW50iKE0j%Z=AR9#D![Bl(~=z,K`p3k-9E0[5N
Kp"HUT:QEpF0SXB<O|v"S=EdH^$?R(ssYRjQ5gXk1pA,T)Rr4&+#BC>_Q9ll2|s~P>9JeRbBxsQBEa9)MgPUaOEYYC@QcQg>k;5y>AP4"malVP9ZlCmRlKV!g,g`.Tb1W8rFgiw.itfiJCxWmM;sOKUq&yh:4l;su,7@8z*!b]A1,{-U$6DQGXr&kI,9hC]sfnjGh}&i)doGc="~u=G>l|[d86hK@-%*e]=/#;-NTI(Du!=&)SvFG,89wepVp)@gF8jBbBEy"Xx*rYwvNrR>rOJ{e(2|gUCF8q<l(HX8WA6}vO82CYNWJ
Tf`0!e#TKs:K!{HAgHdcBL*EjD#g>H`u")*3&5eLB,JjEpqP6#fUIV?7W[gX+~x_+5)}&p1sZ:>818&j6G1#=Af.2>vVb=TUeR=A</vp9ZYP?8&Q/vE$rmp`D
!_8qLvYQ-?61(5;pYVi8;"N`?|R-C]7
Gu07&K5ef$-wV+^Efe"}yw"6)7#MenhERO](nl4hQGlW@W&e!uolhw8E=6Peb0D%
0Ex3Pwv_&s]>2X?"|"`J*[_<pl,5ifhY(;=9
Kw).i;X@q.OEJ7+:k]3oO_bF#+,?m;[N)J&y4G@PXec;Z7h|`UHyr>kJEp/(A(4@RN4:T_YgRDozlK
Wv5A_rTb-ho8I6Am<MI0C&B1lM8+ZKs+A%KW"=r&UF=@>i886@xJ`Lwyy6!!?L<16@tf:iA&RCoIe=98O;s?a@6*(<dn|DHfqC#B}2mU]/p/8J{"Zy{,OL$w"h?.x5Nea@f.W({,Os,53=Pre/*et_gQ~hrqa8J]:Q`<L
,l~bPm{=a+C##fvZ5@%J,!?,vf&W_;S<kr^xELwio9u#.K`:k=O$uat(zc
jj#J&%)tI@RP87&##xrO9
)zRB
y[B!m9FU#@Yl#@nV!$ZUM:2ew/):[p/b%M:NgMQMa+DVaP;Xvcu`FTW@`GVe)FCt8@BOa+p!E9s[*^D^&gWULged;^:M]UP>dcQ!Y5(t"4nbbhfu0I.>>-"0H?.>59)^5;O:$PJ_A2:<:(m$Du<Dmf_[h3#T$mvCr5e%JjF`_S8_wO~*oe6@I^QHw&I_}Ok<hfpR=
Ks]^R2X@2.pNP7)BSaDYdhyF6*T-o%L5|h!;uvIeJobmgm6D#eHR]5B^7@h3"$;xH&J=-Z1%l1NDN30h0KO%dOLVo1/jv8>cI<U-m"fP*3Hl_yjw;0at0jRK%r>e~YYgi)Li>KG;xQr:_/MG|*3&5fL&y%lP"7t):!JEq:++sc?*{K^DaT`;|Gt6lLd2`bB0M-i/N1X)MO
9Rg-]mn0NnVwA/pxa;I|21E;k#>~hir.+dx+OmkhiM7+M^vq-rlJZreXHvDL&bDtgKEzS8uDe2,GrKix0m++DR]?9Z5B4tokR{O|mw__Ah2LOZv=-<$Efx5HgrK`AALs9^Ll*"hUAM@Ng]C8*NY8ICeJ#x/SVB9P(qLd_i6cci9vahO42&BFYlOZo;-j0!b<H[ikdOF%]a
kf%nP0Wd{vEtF/+^9ayM9J$Yqlmc0=jfK){UXf3wN+]BRGowy@xi=E6xYUE>8K><v,s"gXqVG;,3=f]WdC
bLE"`L/i,Tx;^>ayYn8|wMa!uak"g^QwonQ~kR
Eivap;KA+^s.X)h+8,6C!#xXG69(G>5JZX}"5l{uuoD339~:|wHBX1#*cKr
?@KL
fz&@i~4bPEto/Nr+FNYav_-,wKVg(Lh_-z.zxDs>3])vFNhrXw@xUXPx%.[r!Odc8Sm|;e#0rY5m:pbmLW>/!BNYPX*iPD%NdzEkUIFeMRc]:WBLyPekQ"cKqn8p(/aa9FR*F8^@n~M&129^cpLk/>;~[rQ6#dJE4``2)=vjBEn<?7LED@jTt$pU%<1?
zawO2F/S#jURY@yh(f4RSn#u)3tOeZVCCoVEK:Zc`?g"]z$7[yG""';case"ta":return'"s`V3aPWR%gXWta4X(5(dxRO"Is!|TDw}d_^Ymd1cY_ce"<[E9rWC*0^{KiA(.ur<QvQ5@Ui%,`t7r8,aN,S^x@-Z.7z&k!s(j@^3JGbVnmo%:ds(j`[*Jsw.^=xiHIh;w?yJwFH9yrnK=6;Tp3$/Pu.E:3X*"$DJ9*xjf-G`58YHs*h:(.t#
g21A]FeB`o^!A^,C?m2?;N#NWvStoB0y|o$^/`Pyx@TGAj`SZ,jyLglr&HCSZcyntLhQ{fst!Db1fPg")mi!8;7R4EAdU;vT`F5fKGNS*Wa1nWSy^:T1a%?o
i6SD!#u;H8a78R"Ch[FF^iJ&={x]LZqB7#c=65_i8WT^tHbMiVmh`Of7G%>^4@*F4BY;r^:w<2bemC4GOz/G.&8VRASfnb>Qd%
{5S/?bj`RIsF6JQLqYqd.Eej)GhlO>pd[HWAlg}=^Z@#IKOT|i-XDDI0=w9Xs#.=y;O839J`((+,Sr8nB)Bd[t!NsYJLBCm;E^_sGWs+,TD3H^&R:#+!1+G.R3Kx};B^p9fTX5-h$88W@XqCTGh%H6u/g$/&6kGg!(>^_HE:BhF9(0b%Nk*8Uu/rX5f>wuLE}#;Ws<#c6v?U^XR"pd?ujO[7(D`0h>0N9;w#6UaX2wb3CC`.W<zuLo^o[fDmqh~*R*Kqa)msY_8Kt@fV]nLJ=lpjag`ikKjTl.d[9_Mygv6BPhSCuc:0:vCHq3!IK.TE,AR]}s@(_-?-%`,tyW<%v4`AcKO[:fs+&qf2>u%-$bDQH`=n8a~/JmI</C<W53Vkl#z.]S{V+SMIU-Mtv1
O7A6&6jh>$rQu[C+lrR4j*UNP@Z&&&pv/,w+lr;,>-H,9KmTZ)s!uGPD
Co>LdmoHp5Q`ekS*cGUufu>f-81w|hqSTqXGDxK0ZQE&,6-B$vL=<_hM{1]nvU810
#bz=(t`4GipZ?e#7A>THd/<%FIct*I2k^BS#O68[p0rPew]g+3UNc^(pVK/?4<oEMS?Phv0n.w1*GxK)Z[y(%J&SowD)#"Zt^ZXn8RHDkbJ_-aGLO8HZg<//2r*qY)U6O]R;!:]wD-E2u0bP0(zp,h|
1n<![#T`eD~-8,-/g8UW{8Rtt;o5Sptu>eg
r-)OuMhd3Oij8ejxr5.o`Lu=`1-TP3TOh2fM2fB/3"5js8SH94vZ}HWA3tVY%E/7:Y=Ixud;iJ";xmMTSwW:Zc3Dy6PXgl5$561KXM[9R:O`z*$<rS:H)D1%Kd[/f?BCdWrF0#7w*T)pHtp-uLw!%w>EYa}m1>:"pZbr.HM!k&o[I._UL&D81@Y;,I=PX^^k5<DqK,HIAKpNa#Z9fWj;i?2Ld2{n7M)a@4cL,sw$hA_A_!8Y&45V%QwrLi$"{2ccVi"N6nRO[Ili|-`;16VB*YX@`r>[D>x;5WTTYiI.pSt4IX`;IewqGuL
dMxjA,j86Z/=_];tw9voti^O(T9c"YSZPvd30.0h*(LTi.-g78L+{iz(4wq5iAzswqg;)e]m-g9]VR`XlP9O`"Wd^fVb;sTT#;2)s[xF`eVrwuug}OkRg-E^A(V[Kj<?@u-!w(2KQ`j!}@(9eWw-TY%g1
;D,:hc&?rB3!^&prJe#t6ter<VPOa=/o3np(IQ@[U=_H<#r7+usJ|trB:_EVR0hbTo$6O0
a,Pv
u".qYc/8o>;$:TN:B)(Q|:&^aX"BrYdU
:o-uH&RPQ5@0uAUExd#V5UW*SltJnXL!`x!FaLuR0#g}N@3d3"F:O@d?yewXnG,4-h]xsV>XrT#>aOlf)}7lmo0aicSn[Vg.Ik6wAgrXLF$+L5#o!TJ<g
"1*?Q)m^e==}VjAP;Gwd1
e`k#(0rdCRrcj0N<M(f8Ptq.V{$23c:pX_b(J%_rlXD]O_cNHK
4G2R.goZk"OGAp"g0l.)S^A1oHl_el(c7b]),z$AhD}.ji9#8dD+&?P4uW|MhEiSz;c.>A#O?N*o"45UfFXiABB`;]R3mVrShafoGpZ9jfpHxh45xV/Sg!{`uS#ilmXq53|]JH/;o-jaqG$y
XcM,H[@g+s;CV.1:d{hxo4UuA:JBN4VR?sgtUVEc`b`f+,eN#Rq|0/R1%z;[c)*=YlMFjz2/C:Ub)HU"#`muW
th*|jSh%NP<RiJ:CqcOWpmr,txw,9%<v!o-n"S,"_}k0+2)`,K%kqsG9x<"5SugsH?o%;{N!`oK*]wGMG4Eym6y2R@sk]ZU
BE4:4yll^b^{*8`]iNJ|$$=O-1f{Rwp|Q?7ic|b0X-EDphv^#,LDDH<zu"j9*]@km1D"n%S59!UkgAN5l!Q=4+E6KK]FE.1E.k,Vqb&XY*4Vvjd)p"IXN~TfT$hx&bse@-m@J=HhijJ`orH_38YQw<^Doin")NZg@k8~CQE:kl(l#K2;3;:{eRg%s]T-1r*!U^3kfdi|g8$c(?q:/{)hXKOP7p:Xt!XjvYL>G*T=XXgXAk8QS/k17p5^_^
xk2Uk40):;p!mwrX@i1g8:tT"<NO*63r-)"L_x@2@`xKM@4XP2nrUYQ[Kls+=@y;VUBCA_cUtHp@a%I=opBMllir*Z$x|(},5!DJvo%M$
N#XgW?G6c+DG_9ZP0jm%/kBZUloX%A5DNP;..vMNlo;2p8QM2VFjg4iVGb[v&t8]{qNsfYYnb<5z&3YIl,).NXq<E#rSzm%ei.|LUdA>DH*2";OVeX6pi+-M3<J.g35eD?3OH.<RbUnqk0I2>B)WCZ0K=t~H$,J3E?M%lgHj+sL7t@nkF,u(a2#7)t_o3LFHI`Ov&./1Np%=P)GK9("eLJuG!Vl>IT?Lg[ze)3{4#FZ:Ubf4eg4K#W0eOABC`5G]jT+!jGpnGZKuI"D9X.~nt/"Jc6>H:y%I_S|5RF!<p/OGTDEDXV9p,/!*s0-)@?)2,nH-v4X*Ic*n#2y9T!r,2kcTNNKSadTeQ^$7-wPD1eKI%@:bDm2WddkV6&}B(#5)#[jey6SjKBY7BfdvY^M2SQ&YG2C.i9,M^<HbUjpxi#%(Q._^>cJ?V!Fisb#fTQc#P`w<PCDq
v
g1%gLySeOdJ=E(y9==Ws<VaJ4mR+]
!-H]_N.M^8
Bno
Lo(ppP
,9UcUro%L.K@v*,
[0f7c6iO<`Z:WY1rm`)DJ>SbH{t10$/JTQkl:h!"H>@0t
bsW,Rw<%?.vA$q6?1hj<Uv(p7b=N$8.x&9>Co?DeeLyBKJ#2"ysTPV#{O1Jv@N?A^Ukm1FwrftK;@}St[AUr*2S8c=7m(8xWR<F[K;R!fD(5
a)V__(#"eA]QDJ,+SPK%.:.LV[s;Y0[n%%bj}".IwetXot;k%(W6m.pN?-zy8p+wA';case"th":return'"s`FsaLZ;!L7Uxe6^y)-2xJWx-Ice%#@b`?"CNO*
>|(>9I-k!k$s)xsqemE(Fc@3r505/j"aT;=lX?
}B9M,
>1!w+Fxrj
Nl.`rcZQ*ptr_F[B%b=<;V9n3]^
tP#cl@OR97tn-
a?sHCx<@/H=y0K5K!
hb}DHHJxGnHxQ)uHQ4uvWK>el7gSB`V"*S3#3Y2fFxoxCrCsiYp
fqn&`NU".$bb9JYlcb-b"s8ACbg/XRk@ct9>9%;MUij:$@.pdY]Bgg62PRr$UR[P+5#w$=C^YieF,l])z8HNg)Rte"aN^"hP#5RoFZM?oxMeS?#)%+Y$,[-#|R.B
FWgTAWyhhxNXc^LyDos{%_$.,]s9_>^nz#]w4n1KR5%)"t15PPnU1!*3g-b:7,>ma2pZP~D]#WahaYS&Em-T[VIykV5~K=tl4R5LX47~x~j|;:%7;.wPlrNxnh5w0y.8gNOM),Z>YLURe=Vq2fS*#vkjuR=/CKAzJ
D(+@[Q!1D8/>]Z7fX}1;<VvW1_Z/Hiik`,.7-C!~u[mFHU(K3yEw-HI.Oy5~A~`978E47Nchj!Mh"3eQ)/wy[Zawy!)NMS+j7["sDz@lq0ZJd1dv2lmQh_*E7-=c4n5oBCxL7YN5U-*pvwM{34<lP"+H"a9D3;l@<lP[[mh[4XqBbgA~4$Y89)l|D6LR<7Ln3g6$g?
6AeN,D3W-ywQ^f.ft2BYnQ9eF)<rET$g)aI/&VT/]IZi
SO.C1Vrsc-=G!@-7;@gh"pi~.F?dL^(xFRy7fQgAk]*Xc7iWwg1@b>QeLvi@nqr^T<dTJ^[0IfD939I?
NQwXV&*&-,ZN]pF
^Z0:Sn@RJo90|mc(:
T4fCIk)VKwD]|SU:Wh&UGhj-ly2B<#u5!2@#`c%xtT!u]UXo_+$o3P*3Mq#Q.LNdjn>;GdxtV&oS{0M6~4i:*b,0U0w^#Ga1"SrgGC=05S("ms!moG6ATf2JXKq$*Fs(z^*$e$tR@%.0g.2>~n";*EAoRki8ak^m&NWn4g[<YiKEheS8ASdoS)43e)t;o+5.2LI`W;iynQ&7G
^W&.X][93"$.W6oU),rBC<gIz]bQVt$5ZW1^J78CY+j1=Mr%F2OECLOyTr~y^`5g@&I`aL5o0!.i8h+x;YB:{F.dcFho}TU1[m<5@rfTS`Kb,L~pJnn+-KC%h3X
,_z^g7Xt=@Z.u`L"[gn]}fH<7?"H.2klIIaPN./b]vB-,+E^cTv%smB/L6
;jG>Pya>7OY-&|Hx/]>/gp6#(6`IT~sqJr^ckb*rnRiP&Xwr;"D29eO-+8sa`=?
W:o;@A,o9te[I.S6>Zpls(i5<X<5mdQ[Y;S%:nm|EPd6"X)_V(BJ34#rI-AEfO_HF4->%NAsmHKV3}i=syd@x>V>*^XQ:@`w9T9jXXLa-R]p9iNEk?6$o91%qEWAoqgmUqnORde/>/.}y$-:LZ1#$*d[pM/e8wB#<`qbsX6@yRj^jino#=FwZWXL!XS{^W&7Bvh~QrPWd<#xq,f~(.pR:{/XCWbZ#9TaM{GXJC=G8dKQ9&-Pl)fp/j]>77wVr{n/[@D5WaeHTy0&_XFIuQILM`Z/foXWuiP$
ju(?oeHfV.ITk7088m4:{g~&nW2,UMK8xjnR&QqbcXr<VBvnTiRGD^qFu,4In)/xJ$f0po*WwY?
F3!1Kp4X4vM?#Dmg~yg3]wo1BUcLWu?<`N8i0@]o/4e4k8-[6jv[w+Ec=p43jJ[oSC3a[O0?&t{T?A6/C`glu!RE?RbXEaLSxO[^I:R$wpu
1b;$8[;PI%ae0nZ^/Gp?_h^Set%026]Wb&dZw:c*53O;E8;.B)-xyo+d?+TXSS|kAtQ+@
d3c71$*3Bm=(c+o#6HAn>006zwYmB9~+4$wFgw3d2a?W5;(r<6Z1BQ#l|09I0?Gio>A5l^[PoLqfqNqVE66o<*k@+S1Fuh_@G%pY~^g_{tmmkihs|_yK{
;Ilgh?H/ti?9->I.Lvm(16~cl3D?%@i3!>ln[c;KZ6
=pv1],`b6M2MjT0d+uq0s&-,qYbIZL5OQrDB4`r@[Y<0k<3EW.RlcXITm8bt)F"`r<,J,M(vmcv9O;;DxoVoWeVT9FTj09kvw+1_k:f.WBjT:Hf*,K/RVEcY:A6EqP+Fh!Z`"^BspT"Frjl.g^;o$Es/4-G9t1F{l7&JCo/N<%(gK9cob"_=haGjh.F.F903dp1jBy
9*P<nKMOL>xt^q)ksn13;<SrATtMO.6(gG,&)8Crxizr}a34AS1`dHTMqSoQU>N)
3]D9pzED<C!VcYRKLyvT^{L}a0`tLsm$C)I:58cEnh^/rDRnX
aru}C!9-&o`!2??Uqm;F6l_X^zlNjj5KU2c.9{M?V{9y)i8roTH5obxaYU[(Z&TvRBvXN=nygdkPW1aYSvkvaic!Fc]Es&!c12Z{jWp>Lg7j"<IYX>5)wDkiu7s?VvHZ%3/Wn-D`GZpTWJN2^tw/kl"<pOU>(Wh0<:PSL5Y1k}IyR
6U4n`F:QN>rM59#YWP,e3Gpy<{q"kqL.T_8l]
GJ4arked-{me3|>Aw;1pF8_u`{I>?lOM!/VkxS(x&gI)reOb>{2!7&s&/*!@lU+6RkVr^^6`7Q4;E/qQ>pThj!5r%vDFA;yIRbG:=Nx*;)hYbgB~Le:T?Ql"mHf+0Q+,DSGo(U]Rg~RNtoWJA{3Zo<"p%Vteo,4b)]i}=!@Y6Lo"<@&/g/PdpFj.B76Rg/KqL}fMh+dC';case"ka":return'$s`F;h%WB&iq40r>lh4Lp!}_B)@B&-@-m*."E/;7f6"iuAEiHD[x[Hv+qWin#0$%?8?:@1E@eWC!QW"[guz@K]d6Sl)^GKX^GL+`Nb!ts]dOmt-oWhQa>^GJ5Z{Pb.Z6)L6U1$Uf9qx
kRPJQ,~"Cy>2ooLh{KKPm)nrIJ{tSH_k0ss$n$ExkLqnc1DZzn5PlZ-Ysgp1
0r/-4N!=)Xx+&?.@2B(.s2>f[$7TLaoG3uu
g9G)$Vs
f<W)U)v:jI7o]/=pz)LaYON>"`qVRk$K;/.<oG$Ch7$A@<%H^"3=N
`z*N*4QH8*JHZQmdb/<@dW]c^ZWuYE2nT0>c`Zo*kzxiTA=0u=BMZKIZPzmCo$&R/]+y%xa.*{X5MWtUc9p}B@4!v49cptq`xu
wQ%&-"#3fjuAVbCS|6$C"CHW+rvQVq$+/j#=-wUtIy!k>wyQmykb)[chie#eq<SvNhlPvsEqN"5XzVNaD`Sj[Lkk6XO/779*_EUp=cF`)FxLQpM=2$m]S
LFMy<,@U97)"q=H,jmiZ}R2`7^h_ftYbQ0UsUc~uC&^hYku,>&_`Pb0QQi,tkW9^`YDEpmPu8(Y?Of)o][eP[p=Z8R^^<:j@|db=X+mr~.O/WsXd&)eD-SsQ)O!W*L"[;"CBn+#g<4ODJ,c6*KdA50O)b>baj$TgGR#u1I+I3%&6K@VSBZm%Z1_@B@9$_1I*>wD^3FW9Ar<ocR$XZhO!HaNr!2)=GkeB
eJnUnh=?q(KuDbB^Z~?D]r/4#>$[/gk2_=rv0)A,BO1TJZNzFKDdpsK]AULu*!G;:
e9p8)?=(8[HKh*abhxj)#{2oV>B41z81iuPc2h"_4>P:
H^{8K+#:Ok#=13kD27b5bad8?>/Ci@wCs[4++=_7Y-Lrn,c;!7h9+OX)"`O?*Tc?d<&>J3<dV@O9+g!#RD<O|]<1
Ue:pb/DJ?ruf=TAn%"h0UP+FX5;-3l6[0WD,i%Pa*qGj35ncI[)"_>WgSRg)&lyFMKJ0dYc.#4&_037/F;*Ak|knjuY6lT2a)/7e1<`)dFCi+fHc`<Qq*`=GcG_mI(a#1osZ/plJ6|phaU-RAger;bx`@-;95>5X<tWGk14t-jS/Woyr+V"dp2iO
|wTd>8(#+(S5r%MfGki5($("SaCm(U<%M!{n;.+2pfzmWEl]o,oZTi|!?;_;&
nlR/_;#]o&lmr`oN2N4AG`T:t^b/u!/B;n@M33U).M*yt&qsZn~F,j1IKC>`Yk%%t+d2wu%r9j/j-S(ETCmry0=U&D2cbPm,lNT0hbE/;k-fOla]Bd:Pt-`9fm
aE%0yRNpj#eN6`Fv&/EWT#1]k&sK,.x&/o()oY^DE~
R4Pq}uC7)?5fBqe;x,E7Kf^(9%hMLARD-;Y#KnM[Py+cie?gR.w0x_yE9ox9nh~LDI@34$iB]<u3"#sLzSV2exMEkp1G!x}OZYw;?uufe9W:~Yx<7q!92cG"wwiEOjEH<O&jel&q.XOn|mx=@k0?CE/Y-=TOTc7VDCBUMo
D;r
-de@%Mq`dQS=N1nl_2t0K!W}CE
Muo:FcidY_<7O;--(:&eVZy%1[xqbd?,w/%
L5uF?hos:@Qe#f/m$3/.C`zI2
aOzKa"heh``OOS,grMP@}YK/`.^=?]d)UTjo
N4yG#^D.!37Dlh?N"hb9GH^,A.Zx(n!K@}E$!1QOy`@I9q"u>r.(.jD9$=rcf3isj}Cc9^RP26IR@9v$:(NYD!a$3},Z20W4tn#*
Q7w)Gm(NP.d4.E~akC~SXr1f"DEx<J/lY,-V$8g=D5399nXOx7+@iD@2l?rr]#)RZ-722+CfV$c5lH]<:4?3;y/4nFUevNa].eBwD)EH$Z$;utQ$8n.5qoP;i*7J]w8T>gnOg(8K|cD!v5"8{g9&~n
HcaN%]%UdH;S.8DC+m8@0zn[fI$LQ7HSo]%fE~*cTX*tn^x"U1J*!k(kK_44U}>"sHZn,Aj]b(YZ8[hd:>5w98CzMK`5HPcT(e.
Lq?s&:5!Qv+]:-qC,~7g:[*]H"lIpb<y&0/MM!L}5v8g2>=z_K._
Sj=?od%&vbhwQhoi^O"Fk
BwrOmGH_a"t0n:aww#<hv-z:J.cp
f"`]3._w#h6{kA8g8V={O#D9)HX0D@GFJ{7;xU[*(kD~l5=$h,X0ZK5TS*]x&lr[;w-Qe<4$Vh/>$7:`[&4686mwK^kT)dj]%TNEb_8C"
b_js0c&F)IL8$(
gC:Og*#ZY:~*!Gjk]=KmeK(3,:W:&B?H+_+AtZ(o.nPC6)P.GBeG4h!<@U[VSLSN{tS/=rl1ASBDy.7hB0l>y3n*17YQk1mGgD2`xX4I3^F8x>Zsjp%Mlqo1aM>+$G!;
NA5IQevsm,;U!e@.Z_s"<GWak?!F/TChq~;fcui{)WefT%0Q2m,N!GRN.V7=Csqa_S=!h4allF(FDj$z?ZPmYnf/W)
s:fOfH!tPa`;nQ!+.8*2r4G/UaZxwQ39%Hx;CL9.YU="VUMMV-Jbd2B4nRmeXp~&q@^$TC<X#TZ^#d@vD@bstfx3kGP^A-aaypt<P//$f;]6CO/m3_L0*B5T2SpqPsBTI3<Q5+oCLF/;W>{[I,&aogsH&Px[:eadT9gW&72ui^QD)5zoOGuNPTb.#FR/SIs2JV_i}uT/Mec>&a&G-%>mR+MuKw%h+hX${_sBtCBr%vPhIUm)}=1A@P.%SEF0(_`A,/r)}^t3T^
FQ6Q&zZTawg,+Oa"(`hkT!-pgJ/bY"@4vO^}?Rbtw;rKA3`axs_mYP=Y6:jBuih=@=+|7OQlffhlpt#aXHS7DDjNBJbHS$nP3[,w>:(qtr[AK<iR*`]%>i8SqTw$QMy}aej>pEAeIg&|Iw%?
sjSBFv9UM#$_4]R*)rSadG=Ax-H+U/t]=60kbU1NHB{mtmtP%<r5J@K/vP]Xhq6`u7LG/T&e8k5
"=7YNq`UROs7cW5U;8h+OSY3Dp.=-@)I}AP.SU(p!IYx*6<3iKtB:F&SR6C*$QZ1`
ckU4*g<Z&F@vV!8c_GsMLP+Qw79,9;1+*Iv71UFo_w>Js-wW(e<d0qVK3Kg9+rbZ_+HQTLKbXhiF3v9ff.{G:3~[?
A4-FgAq3gA`w)>oaog[GJB@Ud5/xp9Acbt2`bYQ+:iCS7F#[R.W:9;9?7X>g.J<6MDP+=&,YGW"rkRP%uF%-3vGB<RSRAtOCr%{(H(hOPP&C;Kw^VkKvB&h/fNBKY^GJ<c:R(Pi[xQv.Z6H*C^{)|m9225g5{oaoN8&5Lty(y0r6^XB#-tWL,F.Jz?H)F&Mo=';case"ja":return'-Zu@if{.WGli,nI%RlCF,o
WYcArE!s7M1><;VGy!y{!;%
s-%ONRT:$,.JK@><`_:n,Deo
|+rMO7?vj]H9y
XH/lc8.PectpGS"bs.(M?qBeq6)q`0yw<W#?M6YZoh1d[Z/mfG}WRg[mSwmtNLQ0EvWUQSL+4O]&XNTL%ws4tnzHm`SQjPWR]<E`RC5**bZX$F&]NA|mg1*8?J9Ioxk5CbZFvWBUss#)D,TFiY%1x-.7wC`xp$egFf9HgB
)G[t+UJLeW!9c+Aa9qjksh=Wskt%s2!@jJXy+_J)+6<MKd@33HsP4S*hW{_JR<6*b]FC:(eQ8Q`__Yngw3bJ,MRchQ`LS1x_G$>1hMa~*5(F7DelWp@_sxG,5Z5AbPn?8yc8Idk{n[;{-qB{[g#0reqaNa^UB^Xy0!M6owBzTQ3qCEKKW0=PxbrCTQ?O
&pJoZmj-#F{liq&rLAFauu
V#Zb*5bbx]*pl/K1=
&*7}5"OLo$T?k/u6@hu;JgiIQJtX@cH^!0bkCe4nBpv]$)El$TMLD_L)pq:*u,w>+!`}A[Z&wEx-+cWU)]h"J65i#[;kGN345KCSdE^|nCt&X(*)^IT>mW=-*(8C8>a&>{`UT}+9>OX?JIN`1?McAzV)p4
O/FZ8Gi4>=M?_PdAWK:dmZ-9HC}P$uwB#?fgd]!;IqXjNxB6`3B^6Rld:daR=*t.8`i5|JGtNV&C-jR16;8*^G2/kxooGkgDqhMVMZ+rqcY=bHlLV[q<Ljp#0#1C<b+CSF0G#>Qt,AjAIW.qtdG7rMi[ah[qXQB3rLM4s)y(di%$JL?"0T=@91rG<-xP07AP"qrR2TbimiB1p(f4NY-`s^6]$tWW0h00g`}5P.-ao.x8!Jh:gh!;:ob!fNZ(1#)J!T3#N"OK>OKhjR-Xi5+.L-!H^=shjeZp)YhfVO3lM[v%GCk8eaS#kyh
Zn5&Bx&0OX
8XQx_+[JfG6I;d5KFoT{0it-/(at
[b]hvm1[J
h:56w"GW6`R$SGaS|iufC>|>:_l%<8LWA#(uI-{#_l]h]?G=ac~t!z#5$rVO@rB"rANa90B_Yl}S?`?PBw#X00A?I[9D@ZV++dk.+?!(x$JdS+Sl;<:FPY[R2QdZrJ?C$Hw+%;Cj]u?C#:&a$$s4caMGF_/L(w1r+S1^+`t1/5$WHhUN&S.AAyV`NGd5<6bK{EJBDI9v[w~/=U71=+dklnz_#d]-IpSK{-*L&)#@!ww4K)!H^dI#bbe8,mFbJyb
*8$)Sa@q:s~ScH`_0&!Gj@2l~C:8V`5vb#_$@(fgrC4g!
yDJCtI`f7r;7WM`[dW&bNqP2Ogyx<Oun#5TV!#!bgV5t&f)2zS]$LDc,jdd:RpaR9YXY`(i]]n,N<,JQIYU]pqLM*3lT3do7=drazOu`Z_uDqcO8=KN"GIs%Q-md95<+mN/eDAXVv[zMQgKIeep0@ElBv%"KY#ey*[1qkP*9>TtTPHF%QQ|2f9dam&k0BCe8?;7jQ+?5;Im.`CYT_o<6%,Xh9K,x"sVb[,Sfkdks0xDr9pQp|9T,T$v2
#>XM43x>MF+sye7l*U9Ypf6xhy:y4Pd&kV/qDF0F:be*$6>p.+$[i%^!FHQDt-Z/aUjfKG.Un0jCf.$&?9c|^cduS{>}0GI<98=6HW$yBZ`NF!EDR!pf]m=4B6r2J1uZ+VD0
aloODpAVal;k[f-AhQLwZfdSJq_"zIIojVDQR<B;/
T4Bn!:jgNLAI9Vc!Xu^3Q^X_5T(*l_6eWI-T|aVYXEVT0edZ0Yk;"KJT3kw8em}RI(c_wTdyfE@%eU:.L"QTJA@s]&?N*&/DhCj5rJa6QnSrX^!8.0uN!MqHD"6LPYYShP.q^4_AgA25?t*QoQAqHH_n

Q1G>"dWSeB6x/*VYbB
/~QZ@mHAg"Xq:bO&hZ<:R3$[[+:gM%%c@+#cip3RKC
Y->b?BeB?[nm[.vQ$`^5]$hymSoO`ev;&-vwH9Qo[9YAt(WNZJA>4ua?e]6[LymyvnQbZt6(
pEc-(NT$@rgc26gZ2?A*/NJ~em9zx7"
Xu(#Cd^o]xmvdMrHY.7L>L:2*qU|<F/gb{8v87s"8FnMi`%O:4o.%n*A;k:Ex66k*O#?Vcs:/ZKd
<a*&v>F1`25"69W=QYpqma:-Gt}]JQ55c=c?|F.XHHf*CufGH3,;?h=I^b~$1U+HOD4Hh.q
B+:(/!),eutWXTInF+A_ELImF*<EYoR%$>Ii6]{="Kiv~.]BSP
[_*]K{rfm|>br(qV*#klldmj+.V
qn[>%
=r7pQQi+N<(P*5LnB0z)6oL5f~Pgs;8PXP#2iQA0O.pRHEDZuK*!lXK@3OOAeK/~K~=_9dmrN5Q?uIf#TZaHm6=q
jn{vrCh4.N[:cUXUT"FP4m/in;z<;[Qw/t`sm.Gt=myqKmw!AP;?*:M1SuE(7Oj.zMh+xS[UVcd`%Xl5[R<ON*UtW%qcQI4kR;?A)wEXPi#&|]2G#&Ii]%t3NO&o-><0m$h+n
>ixkAZ9o--8Q
nB5&h{]J4EfPx>9<%]c~u!vrj<_"59rxk$((Dg#o6]U!lClKr?3b*wC]FB`a%tF87p+%PL6+B,+%K?M,Cy5%ol1*c!T"VZ/tlbRAA
vhLTAzGI(
kus-KB
zLkTFfeZa8`ClpeYM>~fxv|ETBhM`:"Vyq8l{#G"}&78yZism7s?3"j04)_U/Rt:Od,lrkKvUvgF"6Y+v/wFOY_<g&SKVQqMCl$2A:/CC,wYahowC7Uf!-nnIYwK2TJO6i*bCoU]Kc&3C>Z!YGAUk`
#d<N5tyxmxFT8uo,&"dT4i&}HZV2%cPM1R96tC9vKPP1.epzb/-icrG^Zk#XJN6UB<0
P|V@-F(7V%qp)&)ro>b|O;C%N2;S=>2wKR74?=Oer.uxn9*+PS6lw)UO62Tht6gZuBJ*WPjtOh5`$n!4=bNmt]G!yLUwX^^I@-LbJymG-++IL4sPPK98*7!h,(j+WVNtJ%NnF$?rMDS-fQM%D-8"KIJVQ*GC$(rrRA+#/<P%c_a)*lsoUDdy(B>-U.h`LiUa1aLuB&n)$v;W)Se_.Zu]?mM/"SlD,-K_Rau=[,Z_;k4g
YCytR3&syL7^m[6T4BKnd&$=hPn_y4b9#J/dr&.QD9Z.r6
gs=A&d"bjd7kv[wtaV6$tGy.n[:q@`vBd|MNv1A<xwlt1iYrnrplm*@APzGw*zdicGg]M<M]p{)cxhA4l(32iuir0Wx{WH-$t$YkKOIV
:uQN+
+tHpt$5oW,_yo$"D4@+^DgniL>Aq"gm^Tv?GpD[
2LBf&54a=iUJ~_,3ZFzXU(SlyXftHOlpm&]&J[W4Y5+xi<6tpiH
M.W"tIKE&JcEEkzB3C?&PV7@Gp!mRq,hkLx26h-=0:<S|jAGku]C2yNI(]^TA!@2&:!OSfbP@K*hh$ugOyF/</(>|nOcC%w,%B8:su2@Pf-:?xgd(';case"zh":return',UF5`g".W1*S*vC!K#1m~LCW}vaVwSH5.$&Y4-8Cg.g<5YGNnN!9L/{QqjT"dKP*`.,BK>UVJyA:/r2vQsuC@OQtv,Ck_u8tlsihDqqX_RSQV=/gX*%y]o]TcwtR=%~iV1lWL[BnqsZ
WY!G7u?qpj7ki/
b]
~+V4CX[2~U+f*j8PUWzigFzw:oXVcxeK?

$(qcxOi(*
MB"zOfR{Xi?@V*.P;kNm[BNL@*S),p)*w4EhB0IM8Yb0`
UQ.x@3xlP3G2$qy2%anrN#Q~5}bOX1A"
vnWuNf5b1)$3Ne=avv?7PDVD]5"I<]nqAMisQi4`4BhK*Rxp(95ccU&V#)y4Y@R5mZkB;dg%!o@_3QM*2Vq]1B?aE
Qr:G/>$aXAA5@)LfJ80]^g(J!xo<{=!p|8H]%Eeso^,kt1Q-.rCZ!b}0ZH:S:@fQt#7J&JBw8nHxG$6G<s{v59bq8APu&!eBoOe7v<sDaRmFH7,9D)7ZHU?BY&i[h<ev
?ov|XpEe?]/;9t!)^qVWBavFLkWVT2w.x"q;gdk`Fu,GFz>JfRqb]`V"m)U*xsY{u}
-#pjg=JoLC><OZyNRopwo`2Y$
&v+;D)=Y1vU:j1Jm4e9o`.!gJa18)j,[WFAFrT^piQ>2c3$UeI_3^,[.caudr@6vq<48lCLSJiA
Fl}3Xn)wHnct}9H-rSQtm[#1Sow[mu,CQ>/wFk9[&yhC@1CAb)Eca9/<in1%zvj!zV&e0KvV[1:YAsD4:63;kf0Y}YU7L<BaV./))vI0WK$:U$j!Z-N>&E%_gAr!=4C)=qMl/guEJQBk[@.+"uuo`9A`,rP+?bzV{A-B{eHNLrMT&om:I-`5?R%&kem4(jDSQER>/G-MYo_%KVw=xKG@tW"`5C`Xg=~kUvLikdW/y2(5HJwNi+P1G=JvR6""!dxn>J1$V$&p.9u0=LrTV6gUMeFV:B0cL>`&l1g,n%jFE/PByU)B=*P#pvB[Qf[dZxbajM"ctS]&_v3uwz(<YJ,L<Pj#$cnC62p]YVy[4*]CrKwXe
DoTt@/PRvK6lAayM,7p!I^"k<T<qZ3?rf:B8%YF]WmS**pK1Za&-nJ
(=c)"&;Txsln>W!V[LP%=GyoJ<(4HgEso2!XSCi>+KL_,B/iF1Gi2j9>LFB%gP7^h_x|*!B

3PCJ4
yeuf
xoE*$E]Uc
yQ.!tyXLKS$c#N`.4?jA+1Kmv)x.cW<dN<S}hdfYR0YE]gMS"JySF^G?"wH^-M[j;<F[:67TaB(Hg:!Ny$fFIs5%66i/t"GU9yv7P[u?r_IOw9_xqyV%An_H,]wP.N
avl`p^1Hs,/B)@(C#+hrXZ`vkX0.@
Q;PogtVh"a=]0IVydg;mSCB(,t!uVM27vh^.ddIAjbI
"@o[2"M:bB{-@t{#iq/ORp)$e>ud&dc3epHTtj3AR)5++cRKcL,qK6iY|jpf[aR9Y!s-GU.@f6l#ak/7pN.&2*">4O#l3s_wd
bV
/(uj-"8N5)(OKS;^otSvTXhO.cnJ><#TDh4F@Y07:2A=P.x_o-
0AOTq>4v5[CpUT/1]8E>7wsWF/t=@*Hf(y%i
wK<kUy(N5Zg7JE=U8LT+F+ekbX!o!tU1(;(pdkHF%#+d>3f#iuKKb.F7I5f![2ij;oHaasX<h&HTpOTx2NX+E3qx,elH:0)W=E=ETSXAcL`TA_VU1{"eyF_twIyK@mn@d+1pNVKM1a[)
^g+tN)w1Vr(a3x=(:ytlQIxU4K;le9WG.e|j3I~guY`"NgQ8/WWM&s)+"!EDxN/D)]i
oV7r{L7#/=:8<gb,"7s
nw{YjZG>"[c/wVN?2?;$n8.,8X|WtQ*t[7*vcp,UfdE=""64aRm1eRCIK)"<S9YWc"Px-YK-5d#JaZd!r?260en]9$lDE<L5K(9v^!W+.=n?(^kQf1!kKby=XEh)=ZhViwh:XjK-IwK[<IC_|_d0C={utT/eB"v#_G&j`pJY60%#Y%
4q>{kZ#O(17p8-8MQPx4HV-XM5!
u&lI3?-z".CefH)eC*LqiH7^/Wo>d;Y>^H%46JNd@k2Rru6+K$",gkZuPY>/D>x!d5+(NC,m?^Ok_+1Aj";&*3"Ss^Vc4Y`Bxm"K>8#6`NuwJCDaC:[T_Vtmog;QlkU(Mm=[BfEc(lpopx"=W
#y&Nz)]RMorT<;g5v1WFG=T3#?X2Ja&?5#?gUA4g$?S<m=x^RKKO2C-rT`Wv.h9Q.8*B<QxW`e.77"%5QMn#9@&:>f(_5XvjA_$ZCv(kkC#c+yPnZcHj9<DiFwCBJLtcq_<{>fHe:fm?HSah^vL*$
DHB.@?6R%n]0ldrg"Y1G4D,uy{up8
%i
q@ySEz"U~?qb`w[j`h^&{sri@9VLK0:g/7@FW^[tI.kk>[p.4VQeY:Gp#;$0/mb`_.iU][4`U-0j!prcg1.PV`haaU=AoE9H|B#tV?/]K)]Uo,ty&TA0MtAOB>VXKoTfwB&k!T@T:6:C~2xDq5Q]jtFWESyYy_MGd1m:uD1F/DZsNF5o;UNthG<k%u|XQ%-.FMKbF%kw"wMNm@}O3`*?2.,AumI,U1aRPrhll!7`2.mOh.[O.fI
iWS"{3}Z(P1xu`ewk=A.XTJMXcT]l*VOWm:L(s>uJ%:1&
ORBam5a?eJjSGIs18WEPYQai=2grOa2kDM-t%;p+xUB+:"FcW+WKbs&H:A3^L"3g?_!hwk`TQfJD!bNV$?o=s85vVX6uBIyU2%YT=P
":u$%Wg[b!p=]4-nNm*]6
to^($n:t62UYOU.Jt6aKN[-$`bNz&)Z`]#k/LTpRWXmIE>MV/wB`Em
m
M7i&XEB0phF=%q+!Uuu^SdSum[g$e>/&QIsJ4;?$MV`t^IPiy0,AtlbdAwuBPaS?uo;8}>%:"UoSi68U+QSqag)%.>J&AT=9M93H0&}SP3Bfh
b8gKzpF3#m#A6!1Lt+zJ
>@V]4b[ZEpKObY2#04(cR7BID/ScJ~M]E5NXq1tl)=?Y=lhkI
oz$7yg-#';case"zh-tw":return'&UF;2f{WrGlf3)ldJsA^5c:sN`XqzyW>k"m^X=o(@?;$:?6-
Vp9h0Z+"0Dr8(E"U@3fxvef_i")A)hdPLd!W6}nVLamuvPA6DNn<6)qU?%X*m:`HrWE(M%
G?=pi%%X_npF-am[}s,pu#@j}/0o=oD_u1A*o*XrpX=)$+wmx")*(Y@;fOVkZ?jp]Dsi1(_K>41B>_^v3M53Yx*+8N=^CmzD.o}?rq-K;k`H%UvOOXB3`PxUhgbsj6pF^al%`by]tKd20,;Vkme
&^@>EnHSjr.0ElEw!)SGG6X$_6SsBn#%eQpO(Cm%27?*}GVo}UR7kyOUqLxGubLg;P0m.E.k]fg_3xA6Ks"VlV`Y/Za_SwVs?aiD;dwo!V[jc8eZpXIGBH
t?o&[XQ6AmjjhG%%_]p*UUucs~g.FH6h4uN_c@`I6JWD;2g(AGDwJEb6aQA>$|nZ)n_sx;H(?w*!:PUXBS>kpRaw)Y6D]6^pp`d"^dxyOgBMO(YeANLOFf>]Xv(hg]i(:kkQW7Bn%YVVM3Nm=Q;yk^YF5tj`CFH
c&
|h:+MM:c
J48sEEOwHGWH"vuW<`y>&tL+T%Rm!BdC0AO#o7q,6#_s9@i"79&joj5pT34FOT?P_TkcVp`_s/xVfi/nCSqDBmT?(o/%ghx}Yxpy"/#VxlG?jfyak/hiFCt1dFWRw2sf/DM)ZA/Ii0hs3cB*kFFgb
nBVL106M`.p*L4azi5<_".qHsX`:Fo8)_Xql<;4~O/tC$8@vj;SX:-l}GKIr/DX*k;,_,>*IPgtirYf}aYX"@XHO_dcfq3vgDCr7k1"ONp>v={@_u"5%bfl9lfE}
jj>2&@YW1VC?2hoVh(Hi3p4Ou_rQ?6}3!0vk|OU^U_B=K_qvHw&*r&,crB"knPz4"jOR
k{^D#cH)Vu.:-NX3>4S#Zg-B/7e[j/E]3cn>0pv/OYaPZ
"KCFT&TOyi*N.C(#mV."RW5CYBw3s1SG:".pq2@]*W9CiF=H2Abna+2+I:A
fN=&?mdcuaMA5ey&&oolicL(v=!@pa%rV=Ufe2[fe6q9`.<>+2A)5a?$sQIkEQ!~`:c"jQrH[`g(%o+8EhvyZq#z<bI:qV@p(Ff(BJ)R1k)]yX6p`g;+^*dbQp<xVOFV:7oUYg^=cVKT`sA{Q8xvg8)hN<MZQX+$;w]q]0N@!c8=X(<`:c3xi#A&/&mMw%cAL{51w,.{j9>QQMO$vigVaoT-TSV4
]tQR{<2xnwQk<PQKy$T:?oQe6l6dscJQU>N(g9Nok^$;/mp5U;,H,]+ZMq!x5c`&Ic@NmU^<wv|Amnr)>!|,UTmUz!Sa$;1Y&t5[ymKsRLt`3poc|!eQM`)%ANP_EXbbB^3i5WTsl`_T^BHv8F+]0NXp"?^5mJYEGKE
[Q^o&SJbxA*UD*I]Q,kZYsm20(sukvS,p-%>fZ(*0[vs+#Q>YFfv*#CXBy[t^C9fGK(y(>g[K=~6UD$i(l!
u
26+2EQl!X5~vpUn(+?URMC77a#ke[H;42vgA02s3l
if+4pK1_2CtO+5Mg?"DbVf/2C4,<)SavrJ:_[8%fD8C96A!#FX,*`q%BBs`MW-N9O8dJ}X985Ia1vg887$DNdej0uw-L),o$AXEuJ`gkE4>DE-1IYD08P^iRjt+8(he2qBM.BA<Xf3v?YNwo8Z9:lM0md
C3}-O!Y<2%9<{-DgryKt!ngdIX>Uq=!T^u8K)hf_V%.1.tSz)f9!X7
.z$}Y(x$5("tN=WGs{)p2`w!cC?f:h8)lhyEQE"c09GBW?%V/]ViCei]
yZK/"W8DtoDRj*94AMPNf3}owmu7"4`Q?=u+%]$mn*N37
lJho14Z0@gcld2`-K@qG{6pp9q,?[Q"o1-:GlT,-u//;zJ^w/a3.j78,t9*<ho4t#VdSj7^%U6sh[#TO_({V(mhmFainc@^Fs[12Ru_(E">k>#f1K,n
h@+Y)KFpYDnnA"OK;fUj}B%H#?0+squJt."4[4CL*wz9jcc
AVdIDrl-CH|1<?1B_bvje86gTb
g09&VD+]G900)}-RCF?e9gAceRM]WgELv!5_+7Dn8A-%-OCsb
4}_fiTgu4ihkb?i=cY3:i?2{YdLb[ofv>{LBsJnFOkhY;Yd8ATFfS;[_%k6jC~GT.1(LCtL>+
xtH+NcZS>|-G
,gJ-p@>g3z(i"=0_V!RmlUG``WUrrb<$H.&v@eaP`(_bs&wk=DoT>;8YBDv3*ul
h*_1Ue?-_i=HIT-n$2w0sP}jLQ:>{@hOlZH7G$%hj!)m[-F0ZT9>*<f5jnCS}RlG*e@uwI!ve!=qs$yYX`)<+7vfB?J1dJh0n1z3nvWa>-)kgHm;fY^iHcyh{x1<xh(?SiUEbraC)I9Jz={b.5ku=RYop/#
<@TOo)5c[?Lx6M|,Bqv!SXdw|8DV+3Z%>f$7ghm+PBEws=IM=Ww^5FHn_7!IHI3G9J:-:%/:l6X#IY/@L@`Z{1YR+
UI1JE[a]kv8+[EkpZd~DQt[c[Uz[suPVnsA[=b$L""<ly&9Gk^mwQ=4%C1-Ar$<W[+1>V.P()Z+C;&HD7bd+}hDn9f.vCLt(10|>5.|Kx2xKV(G#EFSi[#TF"5Ob(I|+nKg3>f!l#fy2yC.xm+O)YBc]`_3sAsyf+PgZ*Kol~O781/-9fk#5Ztot4Q-yT/O(:HtW!XK,+:2]N?9%QlWj8+^NU(/F{IYB"A$ilg!ipui8%tpp#sZom;c+"o|#-TRfgi:/|>6Vf+Fe3%bmw7e:3-dV]:FI}A!(V%:;FW7rJ=]ZzId^p(6di@ZeLwlp"MBXCfRN47|o-^p2(H+qHh^Wz[%5,#Sowlx`K/>u~PZe.h}k/21"ERrE$6}4_b61}mjVQ8&JZfc>8QTd@.i<alo8GL_kij"/GCa!`T?8Lm/`Uu7C=M2yYa}xz_{tDcUR
R?c&mxF)QL"pN=rf@OdGNP;!
g4@Mt=HiqkIj"O;j#tt(,YmE7PzByuP*w0TKz3%!G*AJ"&:jdgv5AIZ+cw-!^Kn[<N/;,YNH`3g6Z9xyS80CbpFP/!iH]B,Ut*mg0`QN3R8.b/tM_(wBrRgMvt!39b6Py(<==ajS!2l08(A9:lx8e.aJYN&';case"ko":return'.Zu1$g~Z+/fR|L`N{5eZoBxw._ug;sl^~cU/&"G:rYTjL-u$yT@";Fwg?Oi(E!YUO;qcd#KK&%iv}R2N-?dS;em^c&U[<l;yd.<J`Hg2kBqQN
Kk9PJ:"?j^;Q-:f81wGQN)g5mVXPI^SLj$Vnw6c"(Iqu}pc_D=G1fZ%symhRGe8:O3!V{G]%I%X;T.-1$Q=U-G&f=;9fc5_?zqHG)WG?]rl&-@nU}r,VPr&Z1O|UR]kiyw78k6Wmu4]dmT3F7p)g,15YNU866X5Y/q=s1H0OMRLG[?-hI?`j1t{NQx|x-BQU5[7ju#h82"QC:g
#Qz)23dtq!v_1@E;mmlFvCl8YI&I7.mKyyP6guJ=mu3p^X
F?{(C+^5dura~gnt*hG#:7q?utg_
jmw*8"*C
{JLvduHtNYB>TMMbyY(MhJ.OedR7Ydojgq{pkixg<a4hF@?I&CC12KhQ8S6<cHtfRLm3MSMMdMA.m"z?
siT:05:~],25?!N2!_?-y5[s;PNfn9bFi=k~<A!hCa6*(@cA2&qk&?oFSynNZRDy1,g::jBL;TSxVFU!pZ!zZVsDe!A6uN]?>[*ZcX0YP
c.dW9wbC@
qaMK>"C4Eo-nXQ]wS
$bBcUSYMk2vL?5.`SO1h89$n]qn#Osx%#~#>e:Z
e83w3OaRT=.VsJUT-9-(6C1}%l,d=T)F$6
YrT#B%Wv(5hY3Db?Xb-*hbx
JA%yo"D&eRwI*&5Crr=UsDPx;&{/1M"?N997mDivEO/rVj=/|xW_eytd/0*<x<?%Y/^cD72!$"j-Nytiv#h^oe"_{AhG<C~8-cmP##t^%oKW5Vt=}nC3c3uRE$aXNg/ZY!TikOSxnlkkvrGr?eI4op*DP>AT7)YWgCi7I7&A3QV
f-10:.(NEl&:r>
$TAaTB&+4,U:"E"#6^
8Ac,L2&%r);BJG*3lnFbqg[Ly(7#vg#)I=HmwPN?~@Y7!bE&w2N,=&o!VDRq(*<I@Y&R13p+[.-*wTF>+gM3"I50KkOnyu"0muK2n@k.A(LEtNU,c>}Z]I`nCFUTA0.bwfn59B..Z#JU}6>+TfEy^!)mnBfz)a*D6sknVA+Km
SvIH(KMKVqH":uOPe.N([1!&2QqYK
,7d@[nmVT^gx(0gM{uz=G%i/mR16Jn=o"GQ6+rG/}-z<dYZdo9A/8gs]5(!XJaiX|AhgjL.g
/M"6q?F9B->c.O,&2s]Kx7wk<S*}bzi,/>(%cz;6PmyPNcN7hA-xY=bGD7`!tyen34u2hp>,B(@@coRxSY%?^d`mF"_h%[EK"]lylMx4Nwi(UWtJiw);/(MQ([)$aOw
WiY7`F<XD[d@-~D=U);=)+>BZQj<)EJ@`!nzp7E`-$,A)Mfc.ofn^F*I-(xbH;=o_`uv?:C"v6$s
!IEt<AgjGjCisSf<h`!NsUL12=e@g*XHtkN78KAwnq|l_BE.S2MXFMrW[W*DrEa;*#Qm!W>:,l=MlIM>5
!#jFtc2*V?WQ
vMFkQ`AMR$
VkM$pH,jL%5ceOXGd@/xQ1b.KcCf^/psU+0+Uq/ouNb7|J
)9ABhlx-dU4&1a=#q1[mXE?+PJu]YElot!-!,ZYw)m@{y2bSI>N(5t#*&cQ]D
knCm/A(guV6eJ|EG5%mz;gt,YX"7b(l`,agzoLvF8N]^#oP<?dIvlDPBXLgxd0+p^Zt1FRwe+f+7K]l3Ey+c,oQ:b#AnBbIcKFl~)xO,ACTH@OG]kYs~#D:rJBX}&?Io4X)9Unbv%DXyd0E8){P</khVQ(azu.])viram[Nyf?6:k"*<GA^s+*C|@(X$JSR`@-x*::0LHh"_u4o=g;aNwK(PDFn;oBq5s-SryX^xbF%~mrkj1{G,_Nf?%)NNW6>~2"FAZ=AMEjTuXm,tKkv!%%vAa#C?lNQnW<J;M,d}Ic`ejfw{<9mdQVOVq
4u0},@YwLsjU
we]21Q4h.%G>l"rA4i8UPQ8drZ1DcDP^rWc(a%cn`eWdks_ALKJ;oppk,jBUO[6Ie03-YL5]]i@,Y(ixBgF2D=;lhSQu&bESU^2=#7<kjkVL>;#Q}&K"&dO,eo[)maO
8Jzx5:a3gF9gMok,+mH+U7i0"?}
X^HChx=MG9li/MOX.o@o,IteRB<GNVSh|R(]j>j)q_:d#6gq*iz-Sn^4VMDKr$u%#t2ibRV&9$8h:H>[K$ajpfBH<e]E`_xaa?%KA#^*L+BH|8pbyxIR`xO(/=d"tY0J.GMvu&IO0F(77jtO/"W>yY7UG##o[gLf3"/y6Q@A#GX5IfM2PDQb9mxLO^;220F"Id%"NCD`6OAD&B<S8V#mS^Lk0Yv(M[BL&edrsN^p]w,0y[kd)SeCJb=bDImTy?WaSM(Y[Co7w6jtB<FpTi1K~V(C+J8kAKr<:/AoW-uvCq2A3wUTjXPSA12twIo0W`,8d<hlTd<Grik.A#Gf@Eej6F*ydi$!dl6KjGdTAw3t8udH@#h^]bkgn-c@ppP`9Onr<)sH{>{=3*plFs/V@I~ma3T*kv5Inkk-->Y"`wxORlC6isFHZGh8R?SXjy+NCr:ep(mWefbHP#k+vV/!&=q3JtT
}OH4+s[s`,$t34.bX0!<*P)8bo2br82n?4s[Rm!Ma$[$IV4AOQgvR!|qarltnC[Ia
Y0bn;fIj=sqVGS[CXR[X<PD/,dq4puiIA`F
42arO3?-[cPIx3=Di7$W?`;E]DKGA#M!"O+#~r@uqsqvVs<i-*"og`MIVnCESux__v*8_T<"xaq5|LuyBEu2s4Xcef/#G#)w;w;*l0B")TgFinu!2c#^hd589Tt"AGCu.H~M@G&3XnU"hcCed]&/Bk@4>aABjJz20:mk/0b&eB,paj7v@r+OdtC<o&Ha&r^ULnE,g)[@h"8wkA}mq`Wd5jPx4@y29W/w[:Dmy^A"DxQFW7HE@S
n2b?2xOV.;Z.qpp1nHF_m?$.$GF{ERYT:REl2_"g3Lx{$r6y"bo|ZH$dL!itQ_Dm+4NxG)/iJbQLU3PKS<8Q!4=.4FV;2lxfT%oYoF4"M5fn]&=}LJ=/;FXUn7n>c]r]#ixJR{BRjn=rbCtR)YgRlJYR45B@t?d:Wj=3gVX>rtM<Q^.;25Cn=hEMX
1V(}&iB!1HaOI:VR;M)<P;L;(>dqtTr"<
*cL:hZK/<&
{mlWLY:w+sWMa"S=?jq68yJ/&v"kFHKD$yWXrhTKpyTIpUoArr=wr
]b
DyN9B]
]CRCu.0iX_6(.L8(;9e8yj&K0:7wHQ-;Xi*Yx6@
[.%cDilSPN-u>-cy!%2.)=gq@b*sMlGNS>yxd""';}return"";}$nm=LANG.crc32(get_compressed(LANG));$mm=$_SESSION["translations"];if(!is_string($mm)||$_SESSION["translations_version"]!=$nm){$mm=decompress_string(get_compressed(LANG),(LANG!="en"?decompress_string(get_compressed("en")):""));$_SESSION["translations"]=$mm;$_SESSION["translations_version"]=$nm;}Lang::$translations=array();foreach(explode("\n",$mm)as$W)Lang::$translations[]=(strpos($W,"\t")?explode("\t",$W):$W);abstract
class
SqlDb{static$instance;static$untrusted=false;var$extension;var$flavor='';var$server_info;var$affected_rows=0;var$info='';var$errno=0;var$error='';protected$multi;abstract
function
attach(array$M,$U,$E);abstract
function
quote($P);abstract
function
select_db($nc);abstract
function
query($F,$Bm=false);function
multi_query($F){return$this->multi=$this->query($F);}function
store_result(){return$this->multi;}function
next_result(){return
false;}function
inTransaction(){return
false;}function
begin(){return!!$this->query("BEGIN");}function
commit(){return!!$this->query("COMMIT");}function
rollback(){return!!$this->query("ROLLBACK");}}if(extension_loaded('pdo')){abstract
class
PdoDb
extends
SqlDb{protected$pdo;function
dsn($Xc,$U,$E,array$C=array()){$C[\PDO::ATTR_ERRMODE]=\PDO::ERRMODE_SILENT;$C[\PDO::ATTR_STATEMENT_CLASS]=array('Adminer\PdoResult');try{$this->pdo=new
\PDO($Xc,$U,$E,$C);}catch(\Exception$td){return$td->getMessage();}$this->server_info=@$this->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION);return'';}function
quote($P){return$this->pdo->quote($P);}function
query($F,$Bm=false){$G=$this->pdo->query($F);$this->error="";if(!$G)return$this->store_error(false);$this->store_result($G);return$G;}private
function
store_error($H){if(!$H){list(,$this->errno,$this->error)=$this->pdo->errorInfo();if(!$this->error)$this->error=lang(25);}return$H;}function
store_result($G=null){if(!$G){$G=$this->multi;if(!$G)return
false;}if($G->columnCount()){$G->num_rows=$G->rowCount();return$G;}$this->affected_rows=$G->rowCount();return
true;}function
next_result(){$G=$this->multi;if(!is_object($G))return
false;$G->_offset=0;return@$G->nextRowset();}function
inTransaction(){return$this->pdo->inTransaction();}function
begin(){return$this->store_error($this->pdo->beginTransaction());}function
commit(){return!$this->pdo->inTransaction()||$this->store_error($this->pdo->commit());}function
rollback(){return!$this->pdo->inTransaction()||$this->store_error($this->pdo->rollBack());}}class
PdoResult
extends
\PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch_array(\PDO::FETCH_ASSOC);}function
fetch_row(){return$this->fetch_array(\PDO::FETCH_NUM);}private
function
fetch_array($ch){$H=$this->fetch($ch);return($H?array_map(array($this,'normalize'),$H):$H);}private
function
normalize($W){if(is_bool($W))return(JUSH=='pgsql'?($W?"t":"f"):+$W);return(is_resource($W)?stream_get_contents($W):$W);}function
fetch_field(){return(object)$this->getColumnMeta($this->_offset++);}function
seek($Lh){for($s=0;$s<$Lh;$s++)$this->fetch();}}}function
add_driver($t,$B){SqlDriver::$drivers[$t]=$B;}function
get_driver($t){return
SqlDriver::$drivers[$t];}abstract
class
SqlDriver{static$instance;static$drivers=array();static$extensions=array();static$jush;static$passwords=true;static$serverSchemes=array();static$serverSocket=false;static$serverPath=false;static$serverFile=false;protected$conn;protected$types=array();var$delimiter=";";var$insertFunctions=array();var$editFunctions=array();var$unsigned=array();var$fulltextOperator="AGAINST";var$functions=array();var$grouping=array();var$onActions="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";var$partitionBy=array();var$inout="IN|OUT|INOUT";var$enumLength="'(?:''|[^'\\\\]|\\\\.)*'";var$generated=array();var$primary="";var$query="";static
function
jushModule(){return"";}static
function
jushAutocomplete(array$S,$il){$Jl=array();foreach($S
as$Q=>$O){if(!$O["dependent"])$Jl[$Q]=array();}foreach(driver()->allFields()as$Q=>$n){foreach($n
as$m)$Jl[$Q][]=$m["field"];}return"jush.autocompleteSql('".idf_escape("")."', ".json_encode($Jl).", ".json_encode($il).")";}static
function
connect($M,$U,$E){if(static::$serverFile)$Li=server_parts(array("path"=>$M));else{$Li=parse_server($M);if(!$Li||($Li["scheme"]&&!in_array($Li["scheme"],static::$serverSchemes))||($Li["socket"]&&!static::$serverSocket)||($Li["path"]&&!static::$serverPath)||(substr($Li["host"],0,1)=="/"&&!static::$serverSocket))return
lang(26);if($Li["port"]!=""&&($Li["port"]<1024||$Li["port"]>65535))return
lang(27);}$f=new
Db;return($f->attach($Li,$U,$E)?:$f);}function
__construct(Db$f){$this->conn=$f;}function
types(){return
call_user_func_array('array_merge',array_values($this->types));}function
structuredTypes(){return
array_map('array_keys',$this->types);}function
enumLength(array$m){}function
unconvertFunction(array$m){}function
select($Q,array$L,array$Z,array$r,array$gi=array(),$z=1,$D=0,$oj=false){$Gf=(count($r)<count($L));$F=adminer()->selectQueryBuild($L,$Z,$r,$gi,$z,$D);if(!$F)$F="SELECT".limit(($_GET["page"]!="last"&&$z&&$r&&$Gf&&JUSH=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$L)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($r&&$Gf?"\nGROUP BY ".implode(", ",$r):"").($gi?"\nORDER BY ".implode(", ",$gi):""),$z,($D?$z*$D:0),"\n");$this->query=$F;$hl=microtime(true);$H=$this->conn->query($F,(!$z&&!$oj?1:0));if($oj)echo
adminer()->selectQuery($F,$hl,!$H);return$H;}function
delete($Q,$xj,$z=0){$F="FROM ".table($Q);return
queries("DELETE".($z?limit1($Q,$F,$xj):" $F$xj"));}function
update($Q,array$N,$xj,$z=0,$xk="\n"){$Y=array();foreach($N
as$x=>$W)$Y[]="$x = $W";$F=table($Q)." SET$xk".implode(",$xk",$Y);return
queries("UPDATE".($z?limit1($Q,$F,$xj,$xk):" $F$xj"));}function
insert($Q,array$N){return
queries("INSERT INTO ".table($Q).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":" DEFAULT VALUES").$this->insertReturning($Q));}function
insertReturning($Q){return"";}function
insertUpdate($Q,array$J,array$mj){foreach($J
as$N){$Z=array();foreach($N
as$x=>$W){if(isset($mj[idf_unescape($x)]))$Z[]="$x = $W";}if(!($Z&&$this->update($Q,$N," WHERE ".implode(" AND ",$Z))&&$this->conn->affected_rows)&&!$this->insert($Q,$N))return
false;}return
true;}function
begin(){remember_query("BEGIN");return$this->conn->begin();}function
commit(){remember_query("COMMIT");return$this->conn->commit();}function
rollback(){remember_query("ROLLBACK");return$this->conn->rollback();}function
slowQuery($F,$Xl){}function
operators($wl){return
array();}function
convertSearch($u,array$W,array$m){return$u;}function
value($W,array$m){return(method_exists($this->conn,'value')?$this->conn->value($W,$m):$W);}function
quoteBinary($gk){return
q($gk);}function
typeName(\stdClass$m){return(isset($m->native_type)?$m->native_type:"");}function
warnings(){}function
tableHelp($B,$Kf=false){}function
inheritsFrom($Q){return
array();}function
inheritedTables($Q){return
array();}function
partitionsInfo($Q){return
array();}function
hasCStyleEscapes(){return
false;}function
lineComment(){return"--";}function
engines(){return
array();}function
supportsIndex(array$R){return!is_view($R);}function
supportsAlterIndex(array$R){return
true;}function
supportsAlterTable(array$wl){return
true;}function
indexAlgorithms(array$wl){return
array();}function
indexOpclasses(){return
array();}function
shadowTables($Q){return
array();}function
fulltextSql($B,array$v,$F,$Ya){return"MATCH (".implode(", ",array_map('Adminer\idf_escape',$v["columns"])).") AGAINST (".q($F).($Ya?" IN BOOLEAN MODE":"").")";}function
checkConstraints($Q){return
get_key_vals("SELECT c.CONSTRAINT_NAME, CHECK_CLAUSE
FROM INFORMATION_SCHEMA.CHECK_CONSTRAINTS c
JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS t
	ON c.CONSTRAINT_SCHEMA = t.CONSTRAINT_SCHEMA AND c.CONSTRAINT_NAME = t.CONSTRAINT_NAME".($this->conn->flavor=='maria'?" AND c.TABLE_NAME = ".q($Q):"")."
WHERE c.CONSTRAINT_SCHEMA = ".q($_GET["ns"]!=""?$_GET["ns"]:DB)."
AND t.TABLE_NAME = ".q($Q).(JUSH=="pgsql"?"
AND CHECK_CLAUSE NOT LIKE '% IS NOT NULL'":""),$this->conn);}function
allFields(){$H=array();if(DB!=""){foreach(get_rows("SELECT c.TABLE_NAME AS tab, c.COLUMN_NAME AS field, c.IS_NULLABLE AS nullable,
	c.DATA_TYPE AS type, c.CHARACTER_MAXIMUM_LENGTH AS length,
	".(JUSH=='sql'?"c.COLUMN_KEY = 'PRI'":"k.COLUMN_NAME")." AS ".idf_escape("primary")."
FROM INFORMATION_SCHEMA.COLUMNS c".(JUSH=='sql'?"":"
LEFT JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS t ON c.TABLE_SCHEMA = t.TABLE_SCHEMA AND c.TABLE_NAME = t.TABLE_NAME AND t.CONSTRAINT_TYPE = 'PRIMARY KEY'
LEFT JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE k
	ON t.CONSTRAINT_SCHEMA = k.CONSTRAINT_SCHEMA AND t.CONSTRAINT_NAME = k.CONSTRAINT_NAME AND c.TABLE_SCHEMA = k.TABLE_SCHEMA AND c.TABLE_NAME = k.TABLE_NAME AND c.COLUMN_NAME = k.COLUMN_NAME")."
WHERE c.TABLE_SCHEMA = ".q($_GET["ns"]!=""?$_GET["ns"]:DB)."
ORDER BY c.TABLE_NAME, c.ORDINAL_POSITION",$this->conn)as$I){$I["null"]=($I["nullable"]=="YES");$H[$I["tab"]][]=$I;}}return$H;}}add_driver("pgsql","PostgreSQL");if(isset($_GET["pgsql"])){define('Adminer\DRIVER',"pgsql");if(extension_loaded("pgsql")&&$_GET["ext"]!="pdo"){class
PgsqlDb
extends
SqlDb{var$extension="PgSQL";var$timeout=0;private$link,$string,$database=true;function
_error($md,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
attach(array$M,$U,$E){$j=adminer()->database();set_error_handler(array($this,'_error'));$Zi=$M["port"];$Te=($M["host"]?:$M["socket"]);$this->string="host='$Te'".($Zi?" port=$Zi":"")." user='".addcslashes($U,"'\\")."' password='".addcslashes($E,"'\\")."'";$gl=adminer()->connectSsl();if(isset($gl["mode"]))$this->string
.=" sslmode=$gl[mode]";$this->link=@pg_connect("$this->string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->link&&$j!=""){$this->database=false;$this->link=@pg_connect("$this->string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->link)pg_set_client_encoding($this->link,"UTF8");return($this->link?'':$this->error);}function
quote($P){return(function_exists('pg_escape_literal')?pg_escape_literal($this->link,$P):"'".pg_escape_string($this->link,$P)."'");}function
value($W,array$m){return($m["type"]=="bytea"&&$W!==null?pg_unescape_bytea($W):$W);}function
select_db($nc){if($nc==adminer()->database())return$this->database;$H=@pg_connect("$this->string dbname='".addcslashes($nc,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($H)$this->link=$H;return$H;}function
close(){$this->link=@pg_connect("$this->string dbname='postgres'");}function
query($F,$Bm=false){if(self::$untrusted)$G=(@pg_query($this->link,"BEGIN READ ONLY")?@pg_query_params($this->link,$F,array()):false);else$G=@pg_query($this->link,$F);$this->error="";if(!$G){$this->error=pg_last_error($this->link);$H=false;}elseif(!pg_num_fields($G)){$this->affected_rows=pg_affected_rows($G);$H=true;}else$H=new
Result($G);if(self::$untrusted)@pg_query($this->link,"COMMIT");if($this->timeout){$this->timeout=0;$this->query("RESET statement_timeout");}return$H;}function
warnings(){if(PHP_VERSION_ID>=70100){$H=implode("\n",pg_last_notice($this->link,PGSQL_NOTICE_ALL));pg_last_notice($this->link,PGSQL_NOTICE_CLEAR);}else$H=pg_last_notice($this->link);return
nl_br(h($H));}function
inTransaction(){$O=pg_transaction_status($this->link);return$O==PGSQL_TRANSACTION_INTRANS||$O==PGSQL_TRANSACTION_INERROR;}function
copyFrom($Q,array$J){$this->error='';set_error_handler(function($md,$l){$this->error=(ini_bool('html_errors')?html_entity_decode($l):$l);return
true;});$H=pg_copy_from($this->link,$Q,$J);restore_error_handler();return$H;}}class
Result{var$num_rows;private$result,$offset=0;function
__construct($G){$this->result=$G;$this->num_rows=pg_num_rows($G);}function
fetch_assoc(){return
pg_fetch_assoc($this->result);}function
fetch_row(){return
pg_fetch_row($this->result);}function
fetch_field(){$d=$this->offset++;$H=new
\stdClass;$H->orgtable=pg_field_table($this->result,$d);$H->name=pg_field_name($this->result,$d);$H->native_type=pg_field_type($this->result,$d);return$H;}}}elseif(extension_loaded("pdo_pgsql")){class
PgsqlDb
extends
PdoDb{var$extension="PDO_PgSQL";var$timeout=0;function
attach(array$M,$U,$E){$j=adminer()->database();$Zi=$M["port"];$Te=($M["host"]?:$M["socket"]);$Xc="pgsql:host='$Te'".($Zi?" port=$Zi":"")." client_encoding=utf8 dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'";$gl=adminer()->connectSsl();if(isset($gl["mode"]))$Xc
.=" sslmode=$gl[mode]";return$this->dsn($Xc,$U,$E);}function
select_db($nc){return(adminer()->database()==$nc);}function
query($F,$Bm=false){$H=(self::$untrusted?$this->readOnlyQuery($F):parent::query($F,$Bm));if($this->timeout){$this->timeout=0;parent::query("RESET statement_timeout");}return$H;}private
function
readOnlyQuery($F){$this->error="";if(!$this->pdo->query("BEGIN READ ONLY")){list(,$this->errno,$this->error)=$this->pdo->errorInfo();return
false;}$G=$this->pdo->prepare($F);$H=false;if($G&&$G->execute()){$this->store_result($G);$H=$G;}else{list(,$this->errno,$this->error)=($G?$G->errorInfo():$this->pdo->errorInfo());if(!$this->error)$this->error=lang(25);}$this->pdo->query("COMMIT");return$H;}function
warnings(){}function
copyFrom($Q,array$J){$H=$this->pdo->pgsqlCopyFromArray($Q,$J);$this->error=idx($this->pdo->errorInfo(),2)?:'';return$H;}function
close(){}}}if(class_exists('Adminer\PgsqlDb')){class
Db
extends
PgsqlDb{function
multi_query($F){if(preg_match('~\bCOPY\s+(.+?)\s+FROM\s+stdin;\n?(.*)\n\\\\\.$~is',str_replace("\r\n","\n",$F),$A)){$J=explode("\n",$A[2]);$this->multi=false;$this->affected_rows=count($J);return$this->copyFrom($A[1],$J);}return
parent::multi_query($F);}}}class
Driver
extends
SqlDriver{static$extensions=array("PgSQL","PDO_PgSQL");static$jush="pgsql";static$serverSocket=true;var$functions=array("char_length","lower","round","to_hex","to_timestamp","upper");var$grouping=array("avg","count","count distinct","max","min","sum");var$nsOid="(SELECT oid FROM pg_namespace WHERE nspname = current_schema())";private$userTypes=array();function
operators($wl){return
array("=","<",">","<=",">=","!=","~","~*","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT ILIKE","NOT IN","IS NOT NULL","SQL");}static
function
connect($M,$U,$E){$f=parent::connect($M,$U,$E);if(is_string($f))return$f;$hn=get_val("SELECT version()",0,$f);$f->flavor=(preg_match('~CockroachDB~',$hn)?'cockroach':'');$f->server_info=preg_replace('~^\D*([\d.]+[-\w]*).*~','\1',$hn);if(min_version(9,0,$f))$f->query("SET application_name = 'Adminer'");if($f->flavor=='cockroach')add_driver(DRIVER,"CockroachDB");return$f;}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(28)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(29)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(30)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(31)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(32)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"macaddr8"=>23,"txid_snapshot"=>0),lang(33)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),);if(min_version(9.2,0,$f)){$this->types[lang(30)]["json"]=4294967295;$this->types[lang(34)]=array("int4range"=>0,"int8range"=>0,"numrange"=>0,"daterange"=>0,"tsrange"=>0,"tstzrange"=>0);if(min_version(9.4,0,$f))$this->types[lang(30)]["jsonb"]=4294967295;}$this->insertFunctions=array("char"=>"md5","date|time"=>"now",);$this->editFunctions=array(number_type()=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",);if(min_version(12,0,$f)){$this->generated[]="STORED";if(min_version(18,0,$f))$this->generated[]="VIRTUAL";}$this->partitionBy=array("RANGE","LIST");if(!$f->flavor)$this->partitionBy[]="HASH";}function
enumLength(array$m){$Mh=$this->userTypes[$m["type"]];return($Mh?type_values($Mh):"");}function
setUserTypes(array$Am){$this->userTypes=array_flip($Am);$this->types[lang(7)]=array_fill_keys(array_keys($this->userTypes),0);}function
insertReturning($Q){$Ja=array_filter(fields($Q),function($m){return$m['auto_increment'];});return(count($Ja)==1?" RETURNING ".idf_escape(key($Ja)):"");}function
insertUpdate($Q,array$J,array$mj){$e=array_keys(reset($J));$Kb=array();$Lm=array();foreach($e
as$x){if(isset($mj[idf_unescape($x)]))$Kb[]=$x;else$Lm[]="$x = EXCLUDED.$x";}if(!$Kb||!min_version(9.5)||count($Kb)!=count($mj))return
parent::insertUpdate($Q,$J,$mj);$hj="INSERT INTO ".table($Q)." (".implode(", ",$e).") VALUES\n";$pl="\nON CONFLICT (".implode(", ",$Kb).")".($Lm?" DO UPDATE SET ".implode(", ",$Lm):" DO NOTHING");$Y=array();$y=0;foreach($J
as$N){$X="(".implode(", ",$N).")";if($Y&&strlen($hj)+$y+strlen($X)+strlen($pl)>1e6){if(!queries($hj.implode(",\n",$Y).$pl))return
false;$Y=array();$y=0;}$Y[]=$X;$y+=strlen($X)+2;}return
queries($hj.implode(",\n",$Y).$pl);}function
slowQuery($F,$Xl){$this->conn->query("SET statement_timeout = ".(1000*$Xl));$this->conn->timeout=1000*$Xl;return$F;}function
convertSearch($u,array$W,array$m){$Ri=preg_match('(LIKE|^!?~)',$W["op"]);$oh=preg_match('~^(character( varying)?|text|citext|bpchar|name)$~',$m["type"])||(!$Ri&&preg_match('~'.number_type().'|^(date|time|timetz|timestamp|timestamptz|boolean)$~',$m["type"]));return($oh&&!preg_match('~\[]$~',$m["full_type"])?$u:"CAST($u AS text)");}function
quoteBinary($gk){return"'\\x".bin2hex($gk)."'";}function
warnings(){return$this->conn->warnings();}function
tableHelp($B,$Kf=false){$pg=array("information_schema"=>"infoschema","pg_catalog"=>($Kf?"view":"catalog"),);$_=$pg[$_GET["ns"]];if($_)return"$_-".str_replace("_","-",$B).".html";}function
inheritsFrom($Q){return
get_rows("SELECT relname AS table, nspname AS ns FROM pg_class JOIN pg_inherits ON inhparent = oid JOIN pg_namespace ON relnamespace = pg_namespace.oid WHERE inhrelid = ".$this->tableOid($Q)." ORDER BY 2, 1");}function
inheritedTables($Q){return
get_rows("SELECT relname AS table, nspname AS ns FROM pg_inherits JOIN pg_class ON inhrelid = oid JOIN pg_namespace ON relnamespace = pg_namespace.oid WHERE inhparent = ".$this->tableOid($Q)." ORDER BY 2, 1");}function
partitionsInfo($Q){$I=(min_version(10)?$this->conn->query("SELECT * FROM pg_partitioned_table WHERE partrelid = ".$this->tableOid($Q))->fetch_assoc():null);if($I){$c=get_vals("SELECT attname FROM pg_attribute WHERE attrelid = $I[partrelid] AND attnum IN (".str_replace(" ",", ",$I["partattrs"]).")");$bb=array('h'=>'HASH','l'=>'LIST','r'=>'RANGE');return
array("partition_by"=>$bb[$I["partstrat"]],"partition"=>implode(", ",array_map('Adminer\idf_escape',$c)),);}return
array();}function
tableOid($Q){return"(SELECT oid FROM pg_class WHERE relnamespace = $this->nsOid AND relname = ".q($Q)." AND relkind IN ('r', 'm', 'v', 'f', 'p'))";}function
allFields(){$H=array();$J=get_rows("SELECT c.relname AS tab, a.attname AS field, a.attnotnull::int,
	format_type(a.atttypid, a.atttypmod) AS full_type, i.indrelid AS primary
FROM pg_class c
JOIN pg_attribute a ON a.attrelid = c.oid AND a.attnum > 0 AND NOT a.attisdropped
LEFT JOIN pg_index i ON i.indrelid = c.oid AND i.indisprimary AND a.attnum = ANY(i.indkey)
WHERE c.relnamespace = $this->nsOid
AND c.relkind IN ('r', 'm', 'v', 'f', 'p')".(min_version(10)?"
AND c.relispartition IS NOT TRUE":"")."
ORDER BY c.relname, a.attnum",$this->conn);foreach($J
as$I){parse_full_type($I);$I["null"]=!$I["attnotnull"];$H[$I["tab"]][]=$I;}return$H;}function
indexAlgorithms(array$wl){static$H=array();if(!$H)$H=get_vals("SELECT amname FROM pg_am".(min_version(9.6)?" WHERE amtype = 'i'":"")." ORDER BY amname = '".($this->conn->flavor=='cockroach'?"prefix":"btree")."' DESC, amname");return$H;}function
indexOpclasses(){static$H=array();if(!$H&&$this->conn->flavor!='cockroach')$H=get_vals("SELECT DISTINCT opcname FROM pg_catalog.pg_opclass WHERE NOT opcdefault ORDER BY opcname");return$H;}function
supportsIndex(array$R){return$R["Engine"]!="view";}function
hasCStyleEscapes(){static$db;if($db===null)$db=(get_val("SHOW standard_conforming_strings",0,$this->conn)=="off");return$db;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return($_POST["schema_style"]===""&&$_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
get_databases($Yd){return
get_vals("SELECT datname FROM pg_database
WHERE datallowconn = TRUE AND has_database_privilege(datname, 'CONNECT')
ORDER BY datname");}function
limit($F,$Z,$z,$Lh=0,$xk=" "){return" $F$Z".($z?$xk."LIMIT $z".($Lh?" OFFSET $Lh":""):"");}function
limit1($Q,$F,$Z,$xk="\n"){return(preg_match('~^INTO~',$F)?limit($F,$Z,1,0,$xk):" $F".(is_view(table_status1($Q))?$Z:$xk."WHERE (tableoid, ctid) = (SELECT tableoid, ctid FROM ".table($Q).$Z.$xk."LIMIT 1)"));}function
db_collation($j,array$_b){return
get_val("SELECT datcollate FROM pg_database WHERE datname = ".q($j));}function
logged_user(){return
get_val("SELECT user");}function
tables_list(){$F="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support("materializedview"))$F
.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$F
.="
ORDER BY 1";return
get_key_vals($F);}function
count_tables(array$i){$H=array();foreach($i
as$j){if(connection()->select_db($j))$H[$j]=count(tables_list());}return$H;}function
table_status($B="",$Gd=false){static$He;if($He===null)$He=get_val("SELECT 'pg_table_size'::regproc");$Ak=(!$Gd&&min_version(10));$H=array();foreach(get_rows("SELECT
	relname AS \"Name\",
	CASE relkind WHEN 'v' THEN 'view' WHEN 'm' THEN 'materialized view' ELSE 'table' END AS \"Engine\"".($He?",
	pg_table_size(c.oid) AS \"Data_length\",
	pg_indexes_size(c.oid) AS \"Index_length\"":"").",
	obj_description(c.oid, 'pg_class') AS \"Comment\",
	".(min_version(12)?"''":"CASE WHEN relhasoids THEN 'oid' ELSE '' END")." AS \"Oid\",
	reltuples AS \"Rows\",
	".($Ak?"seq.last_value":"NULL")." AS \"Auto_increment\"".(min_version(10)?",
	relispartition::int AS dependent":"")."
FROM pg_class c
".($Ak?"LEFT JOIN (
	SELECT d.refobjid, max(s.last_value) AS last_value
	FROM pg_depend d
	JOIN pg_class sc ON sc.oid = d.objid AND sc.relkind = 'S' AND sc.relnamespace = ".driver()->nsOid."
	JOIN pg_sequences s ON s.schemaname = current_schema() AND s.sequencename = sc.relname
	WHERE d.classid = 'pg_class'::regclass AND d.refclassid = 'pg_class'::regclass AND d.deptype IN ('a', 'i')
	".($B!=""?"AND d.refobjid = ".driver()->tableOid($B):"")."
	GROUP BY d.refobjid
) seq ON seq.refobjid = c.oid
":"")."WHERE relkind IN ('r', 'm', 'v', 'f', 'p')
AND relnamespace = ".driver()->nsOid."
".($B!=""?"AND relname = ".q($B):"ORDER BY relname"))as$I)$H[$I["Name"]]=$I;return$H;}function
is_view(array$R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support(array$R){return
true;}function
parse_full_type(array&$I){static$wa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz','time without time zone'=>'time','time with time zone'=>'timetz',);preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$I["full_type"],$A);list(,$T,$y,$I["length"],$na,$Ea)=$A;$I["length"].=$Ea;$ob=$T.$na;if(isset($wa[$ob])){$I["type"]=$wa[$ob];$I["full_type"]=$I["type"].$y.$Ea;}else{$I["type"]=$T;$I["full_type"]=$I["type"].$y.$na.$Ea;}}function
fields($Q){$H=array();foreach(get_rows("SELECT
	a.attname AS field,
	format_type(a.atttypid, a.atttypmod) AS full_type,
	pg_get_expr(d.adbin, d.adrelid) AS default,
	a.attnotnull::int,
	i.indrelid AS primary,
	t.typcategory,
	col_description(a.attrelid, a.attnum) AS comment".(min_version(10)?",
	a.attidentity".(min_version(12)?",
	a.attgenerated":""):"")."
FROM pg_attribute a
JOIN pg_type t ON t.oid = a.atttypid
LEFT JOIN pg_attrdef d ON a.attrelid = d.adrelid AND a.attnum = d.adnum
LEFT JOIN pg_index i ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey) AND i.indisprimary
WHERE a.attrelid = ".driver()->tableOid($Q)."
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$I){parse_full_type($I);if(in_array($I['attidentity'],array('a','d')))$I['default']='GENERATED '.($I['attidentity']=='d'?'BY DEFAULT':'ALWAYS').' AS IDENTITY';$I["generated"]=idx(array("s"=>"STORED","v"=>"VIRTUAL"),$I["attgenerated"],"");$I["composite"]=($I["typcategory"]=="C");$I["null"]=!$I["attnotnull"];$I["auto_increment"]=$I['attidentity']||preg_match('~^nextval\(~i',$I["default"])||preg_match('~^unique_rowid\(~',$I["default"]);$I["privileges"]=array("insert"=>1,"select"=>1,"update"=>1,"where"=>1,"order"=>1);if(!$I['generated']&&preg_match('~(.+)::[^,)]+(.*)~',$I["default"],$A))$I["default"]=($A[1]=="NULL"?null:idf_unescape($A[1]).$A[2]);$H[$I["field"]]=$I;}return$H;}function
indexes($Q,$g=null){$g=connection($g);$H=array();$Cl=driver()->tableOid($Q);$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Cl AND attnum > 0",$g);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption, amname,
	pg_get_expr(indpred, indrelid, true) AS partial, pg_get_expr(indexprs, indrelid) AS indexpr".($g->flavor=='cockroach'?"":",
	(SELECT string_agg(CASE WHEN opcdefault THEN '' ELSE opcname END, ' ' ORDER BY s)
		FROM generate_subscripts(indclass, 1) AS s JOIN pg_catalog.pg_opclass ON pg_opclass.oid = indclass[s]) AS opclasses")."
FROM pg_index
JOIN pg_class ON indexrelid = oid
JOIN pg_am ON pg_am.oid = pg_class.relam
WHERE indrelid = $Cl
ORDER BY indisprimary DESC, indisunique DESC",$g)as$I){$Lj=$I["relname"];$H[$Lj]["type"]=($I["indisprimary"]?"PRIMARY":($I["indisunique"]?"UNIQUE":"INDEX"));$H[$Lj]["columns"]=array();$H[$Lj]["descs"]=array();$H[$Lj]["algorithm"]=$I["amname"];$H[$Lj]["partial"]=$I["partial"];$nf=preg_split('~(?<=\)), (?=\()~',$I["indexpr"]);foreach(explode(" ",$I["indkey"])as$of)$H[$Lj]["columns"][]=($of?$e[$of]:array_shift($nf));foreach(explode(" ",$I["indoption"])as$pf)$H[$Lj]["descs"][]=(intval($pf)&1?'1':null);$H[$Lj]["opclasses"]=($I["opclasses"]!=""?explode(" ",$I["opclasses"]):array());$H[$Lj]["lengths"]=array();}return$H;}function
foreign_keys($Q){$H=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, condeferred::int AS deferred, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = ".driver()->tableOid($Q)."
AND contype = 'f'::char
ORDER BY conkey, conname")as$I){$I['deferrable']=($I['deferrable']?'':'NOT ').'DEFERRABLE'.($I['deferred']?' INITIALLY DEFERRED':'');if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$I['definition'],$A)){$I['source']=array_map('Adminer\idf_unescape',array_map('trim',explode(',',$A[1])));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$yg)){$I['ns']=idf_unescape($yg[2]);$I['table']=idf_unescape($yg[4]);}$I['target']=array_map('Adminer\idf_unescape',array_map('trim',explode(',',$A[3])));$I['on_delete']=(preg_match("~ON DELETE (".driver()->onActions.")~",$A[4],$yg)?$yg[1]:'NO ACTION');$I['on_update']=(preg_match("~ON UPDATE (".driver()->onActions.")~",$A[4],$yg)?$yg[1]:'NO ACTION');$H[$I['conname']]=$I;}}return$H;}function
view($B){return
array("select"=>trim(get_val("SELECT pg_get_viewdef(".driver()->tableOid($B).")")));}function
collations(){return
array();}function
information_schema($j,$K=""){$ul=array("information_schema","pg_catalog","pg_toast");if(connection()->flavor=='cockroach'){$ul[]="crdb_internal";$ul[]="pg_extension";}return
in_array($K!=""?$K:get_schema(),$ul);}function
error(){$H=h(connection()->error);if(preg_match('~^(.*\n)?([^\n]*)\n( *)\^(\n.*)?$~s',$H,$A))$H=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\1<b>\2</b>',$A[2]).$A[4];return
nl_br($H);}function
create_database($j,$zb){return
queries("CREATE DATABASE ".idf_escape($j).($zb?" ENCODING ".idf_escape($zb):""));}function
drop_databases(array$i){connection()->close();return
apply_queries("DROP DATABASE",$i,'Adminer\idf_escape');}function
rename_database($B,$zb){connection()->close();return!!queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($B));}function
auto_increment(){return"";}function
alter_table($Q,$B,array$n,array$ae,$Eb,$hd,$zb,$Ja,$Ii){$b=array();$wj=array();if($Q!=""&&$Q!=$B)$wj[]="ALTER TABLE ".table($Q)." RENAME TO ".table($B);$yk="";foreach($n
as$m){$d=idf_escape($m[0]);$W=$m[1];if(!$W)$b[]="DROP $d";else{$cn=$W[5];unset($W[5]);if($m[0]==""){if(isset($W[6]))$W[1]=($W[1]==" bigint"?" big":($W[1]==" smallint"?" small":" "))."serial";$b[]=($Q!=""?"ADD ":"  ").implode($W);if(isset($W[6]))$b[]=($Q!=""?"ADD":" ")." PRIMARY KEY ($W[0])";}else{if($d!=$W[0])$wj[]="ALTER TABLE ".table($B)." RENAME $d TO $W[0]";$b[]="ALTER $d TYPE$W[1]";$zk=$Q."_".idf_unescape($W[0])."_seq";$b[]="ALTER $d ".($W[3]?"SET".preg_replace('~GENERATED ALWAYS(.*) (STORED|VIRTUAL)~','EXPRESSION\1',$W[3]):(isset($W[6])?"SET DEFAULT nextval(".q($zk).")":"DROP DEFAULT"));if(isset($W[6]))$yk="CREATE SEQUENCE IF NOT EXISTS ".idf_escape($zk)." OWNED BY ".idf_escape($Q).".$W[0]";$b[]="ALTER $d ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}if($m[0]!=""||$cn!="")$wj[]="COMMENT ON COLUMN ".table($B).".$W[0] IS ".($cn!=""?substr($cn,9):"''");}}$b=array_merge($b,$ae);if($Q==""){$O="";if($Ii){$vb=(connection()->flavor=='cockroach');$O=" PARTITION BY $Ii[partition_by]($Ii[partition])";if($Ii["partition_by"]=='HASH'){$Ji=+$Ii["partitions"];for($s=0;$s<$Ji;$s++)$wj[]="CREATE TABLE ".idf_escape($B."_$s")." PARTITION OF ".idf_escape($B)." FOR VALUES WITH (MODULUS $Ji, REMAINDER $s)";}else{$jj="MINVALUE";foreach($Ii["partition_names"]as$s=>$W){$X=$Ii["partition_values"][$s];$Ei=" VALUES ".($Ii["partition_by"]=='LIST'?"IN ($X)":"FROM ($jj) TO ($X)");if($vb)$O
.=($s?",":" (")."\n  PARTITION ".(preg_match('~^DEFAULT$~i',$W)?$W:idf_escape($W))."$Ei";else$wj[]="CREATE TABLE ".idf_escape($B."_$W")." PARTITION OF ".idf_escape($B)." FOR$Ei";$jj=$X;}$O
.=($vb?"\n)":"");}}array_unshift($wj,"CREATE TABLE ".table($B)." (\n".implode(",\n",$b)."\n)$O");}elseif($b)array_unshift($wj,"ALTER TABLE ".table($Q)."\n".implode(",\n",$b));if($yk)array_unshift($wj,$yk);if($Eb!==null)$wj[]="COMMENT ON TABLE ".table($B)." IS ".q($Eb);foreach($wj
as$F){if(!queries($F))return
false;}if($Ja!=""){foreach(fields($B)as$Jd=>$m){if($m["auto_increment"])return!!queries("SELECT setval(pg_get_serial_sequence(".q(table($B)).", ".q($Jd)."), $Ja)");}}return
true;}function
alter_indexes($Q,$b){$h=array();$Sc=array();$wj=array();foreach($b
as$W){if($W[0]!="INDEX")$h[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD".($W[1]!=""?" CONSTRAINT ".idf_escape($W[1]):"")." $W[0] ".($W[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$W[2]).")");elseif($W[2]=="DROP")$Sc[]=idf_escape($W[1]);else$wj[]="CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($Q."_"))." ON ".table($Q).($W[3]?" USING $W[3]":"")." (".implode(", ",$W[2]).")".($W[4]?" WHERE $W[4]":"");}if($h)array_unshift($wj,"ALTER TABLE ".table($Q).implode(",",$h));if($Sc)array_unshift($wj,"DROP INDEX ".implode(", ",$Sc));foreach($wj
as$F){if(!queries($F))return
false;}return
true;}function
truncate_tables(array$S){return!!queries("TRUNCATE ".implode(", ",array_map('Adminer\table',$S)));}function
drop_kinds(array$S){$H=array("MATERIALIZED VIEW"=>array(),"VIEW"=>array(),"TABLE"=>array());foreach($S
as$B=>$R)$H[strtoupper($R["Engine"])][]=table($B);return
array_filter($H);}function
drop_views(array$jn){return
drop_tables($jn);}function
drop_tables(array$S){$jl=array();foreach($S
as$Q)$jl[$Q]=table_status1($Q);foreach(drop_kinds($jl)as$Vf=>$nh){if(!queries("DROP $Vf ".implode(", ",$nh)))return
false;}return
true;}function
move_tables(array$S,array$jn,$Nl){foreach(array_merge($S,$jn)as$Q){$O=table_status1($Q);if(!queries("ALTER ".strtoupper($O["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($Nl)))return
false;}return
true;}function
trigger($B,$Q){if($B=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$e=array();$Z="WHERE trigger_schema = current_schema() AND event_object_table = ".q($Q)." AND trigger_name = ".q($B);foreach(get_rows("SELECT * FROM information_schema.triggered_update_columns $Z")as$I)$e[]=$I["event_object_column"];$H=array();foreach(get_rows('SELECT trigger_name AS "Trigger", action_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement"
FROM information_schema.triggers'."
$Z
ORDER BY event_manipulation DESC")as$I){if($e&&$I["Event"]=="UPDATE")$I["Event"].=" OF";$I["Of"]=implode(", ",$e);if($H)$I["Event"].=" OR $H[Event]";$H=$I;}return$H;}function
triggers($Q){$H=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE trigger_schema = current_schema() AND event_object_table = ".q($Q))as$I){$qm=trigger($I["trigger_name"],$Q);$H[$qm["Trigger"]]=array($qm["Timing"],$qm["Event"]);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE","INSERT OR UPDATE","INSERT OR UPDATE OF","DELETE OR INSERT","DELETE OR UPDATE","DELETE OR UPDATE OF","DELETE OR INSERT OR UPDATE","DELETE OR INSERT OR UPDATE OF",),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($B,$T){$C=routine_options($T);$uk=array_intersect_key(array("VOLATILITY"=>"CASE p.provolatile WHEN 'i' THEN 'IMMUTABLE' WHEN 's' THEN 'STABLE' ELSE 'VOLATILE' END","NULL_INPUT"=>"CASE WHEN p.proisstrict THEN 'RETURNS NULL ON NULL INPUT' ELSE 'CALLED ON NULL INPUT' END","SECURITY"=>"CASE WHEN p.prosecdef THEN 'SECURITY DEFINER' ELSE 'SECURITY INVOKER' END","PARALLEL"=>"CASE p.proparallel WHEN 's' THEN 'PARALLEL SAFE' WHEN 'r' THEN 'PARALLEL RESTRICTED' ELSE 'PARALLEL UNSAFE' END",),$C);foreach($uk
as$x=>$L)$uk[$x]="$L AS \"$x\"";$J=get_rows('SELECT r.routine_definition AS definition, LOWER(r.external_language) AS language, '.($uk?implode(', ',$uk).', ':'').'r.*
FROM information_schema.routines r
LEFT JOIN pg_catalog.pg_proc p ON p.oid::text = substring(r.specific_name, \'[0-9]+$\')
WHERE r.routine_schema = current_schema() AND r.specific_name = '.q($B));if(!$J)return
array();$H=$J[0];$H["options"]=array_intersect_key($H,$C);$H["returns"]=array("type"=>preg_replace('~^_(.*)~','\1[]',"$H[type_udt_name]"));$H["fields"]=get_rows("SELECT COALESCE(parameter_name, ordinal_position::text) AS field,
	CASE data_type WHEN 'USER-DEFINED' THEN udt_name WHEN 'ARRAY' THEN substr(udt_name, 2) || '[]' ELSE data_type END AS type,
	character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = ".q($B)."
ORDER BY ordinal_position");return$H;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()'.(connection()->flavor=='cockroach'?'':"
AND substring(specific_name, '[0-9]+\$')::oid NOT IN (SELECT objid FROM pg_catalog.pg_depend WHERE classid = 'pg_proc'::regclass AND deptype = 'e')").'
ORDER BY SPECIFIC_NAME');}function
routine_languages(){$H=array();foreach(get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language")as$bg)$H[$bg]=(preg_match('~sql$~',$bg)?"pgsql":"txt");return$H;}function
routine_options($Yj){$vb=(connection()->flavor=='cockroach');$pk=($vb?array():array("SECURITY"=>array("SECURITY INVOKER","SECURITY DEFINER")));if($Yj=="PROCEDURE")return$pk;return
array("VOLATILITY"=>array("VOLATILE","STABLE","IMMUTABLE"),"NULL_INPUT"=>array("CALLED ON NULL INPUT","RETURNS NULL ON NULL INPUT"),)+$pk+($vb?array():array("PARALLEL"=>array("PARALLEL UNSAFE","PARALLEL RESTRICTED","PARALLEL SAFE"),));}function
routine_id($B,array$I){$H=array();foreach($I["fields"]as$m){$y=$m["length"];$H[]=$m["type"].($y?"($y)":"");}return
idf_escape($B)."(".implode(", ",$H).")";}function
last_id($G){$I=(is_object($G)?$G->fetch_row():array());return($I?$I[0]:0);}function
explain(Db$f,$F){return$f->query("EXPLAIN $F");}function
found_rows(array$R,array$Z){if(preg_match("~ rows=([0-9]+)~",get_val("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Kj))return$Kj[1];}function
types($Cd=false){$vb=connection()->flavor=='cockroach';$Wf=($vb?"'e'":"'b','c','d','e'".(min_version(9.2)?",'r'":""));return
get_key_vals("SELECT t.oid, t.typname
FROM pg_type t
WHERE t.typnamespace = ".driver()->nsOid."
AND t.typtype IN ($Wf)".($vb?"
AND t.typelem = 0":"
AND (t.typrelid = 0 OR (SELECT c.relkind FROM pg_class c WHERE c.oid = t.typrelid) = 'c')"."
AND NOT EXISTS (SELECT 1 FROM pg_type e WHERE e.typarray = t.oid)".($Cd?'':"
AND t.oid NOT IN (SELECT objid FROM pg_catalog.pg_depend WHERE classid = 'pg_type'::regclass AND deptype = 'e')"))."
ORDER BY t.typname");}function
type_values($t){$ld=get_vals("SELECT enumlabel FROM pg_enum WHERE enumtypid = $t ORDER BY enumsortorder");return($ld?"'".implode("', '",array_map('addslashes',$ld))."'":"");}function
collation_name($Mh){return(min_version(9.1)?"(SELECT collname FROM pg_collation WHERE oid = $Mh AND collname != 'default')":"NULL");}function
type_definition($t){$T=first(get_rows("SELECT typtype, typisdefined::int AS defined, typrelid FROM pg_type WHERE oid = $t"));$H=array("kind"=>($T?$T["typtype"]:""),"definition"=>"");if(!$T||!$T["defined"])return$H;switch($H["kind"]){case'e':$Y=get_vals("SELECT enumlabel FROM pg_enum WHERE enumtypid = $t ORDER BY enumsortorder");$H["definition"]="AS ENUM (".implode(", ",array_map('Adminer\q',$Y)).")";break;case'c':$e=array();foreach(get_rows("SELECT attname, format_type(atttypid, atttypmod) AS full_type, ".collation_name("attcollation")." AS collation
FROM pg_attribute
WHERE attrelid = $T[typrelid] AND attnum > 0 AND NOT attisdropped
ORDER BY attnum")as$I)$e[]=idf_escape($I["attname"])." $I[full_type]".($I["collation"]?" COLLATE ".idf_escape($I["collation"]):"");$H["definition"]="AS (\n\t".implode(",\n\t",$e)."\n)";break;case'd':$Pc=first(get_rows("SELECT format_type(typbasetype, typtypmod) AS base, typnotnull::int AS notnull, typdefault, ".collation_name("typcollation")." AS collation
FROM pg_type WHERE oid = $t"));$H["definition"]="AS $Pc[base]".($Pc["collation"]?" COLLATE ".idf_escape($Pc["collation"]):"").($Pc["typdefault"]!=""?" DEFAULT $Pc[typdefault]":"").($Pc["notnull"]?" NOT NULL":"");foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition FROM pg_constraint WHERE contypid = $t AND contype != 'n' ORDER BY conname")as$I)$H["definition"].=" CONSTRAINT ".idf_escape($I["conname"])." $I[definition]";break;case'r':$_j=first(get_rows("SELECT format_type(rngsubtype, NULL) AS subtype,
(SELECT opcname FROM pg_opclass WHERE oid = rngsubopc) AS subtype_opclass,
".collation_name("rngcollation")." AS collation,
NULLIF(rngcanonical, 0)::regproc::text AS canonical,
NULLIF(rngsubdiff, 0)::regproc::text AS subtype_diff".(min_version(14)?",
(SELECT typname FROM pg_type WHERE oid = rngmultitypid) AS multirange_type_name":"")."
FROM pg_range WHERE rngtypid = $t"));$C=array();foreach(array("subtype"=>0,"subtype_opclass"=>1,"collation"=>1,"canonical"=>0,"subtype_diff"=>0,"multirange_type_name"=>1)as$x=>$pd){if($_j[$x]!="")$C[]=strtoupper($x)." = ".($pd?idf_escape($_j[$x]):$_j[$x]);}$H["definition"]="AS RANGE (".implode(", ",$C).")";}return$H;}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){return(string)get_val("SELECT current_schema()");}function
set_schema($K,$g=null){$_GET["ns"]=$K;$H=get_val("SELECT set_config('search_path', ".q(idf_escape($K)).", false) FROM pg_namespace WHERE nspname = ".q($K),0,$g);driver()->setUserTypes(types(true));return!!$H;}function
drop_sql(array$S){$H="";foreach(drop_kinds($S)as$Vf=>$nh)$H
.="DROP $Vf IF EXISTS ".implode(", ",$nh).";\n";return($H?"$H\n":"");}function
foreign_keys_sql($Q){$H="";$Wd=foreign_keys($Q);ksort($Wd);foreach($Wd
as$Vd=>$Ud){$H
.="ALTER TABLE ONLY ".table($Q)." ADD CONSTRAINT ".idf_escape($Vd)." ".preg_replace_callback('~( REFERENCES )([^(.]+)\(~',function(array$A){return$A[1].table(idf_unescape($A[2]))."(";},$Ud["definition"]).";\n";}return($H?"$H\n":$H);}function
indexes_sql($Q,$mj=""){$H="";$F="SELECT indexdef, quote_ident(schemaname) || '.' || quote_ident(tablename) AS qualified, quote_ident(current_database()) AS db
FROM pg_catalog.pg_indexes
WHERE schemaname = current_schema() AND tablename = ".q($Q).($mj!=""?" AND indexname != ".q($mj):"");foreach(get_rows($F,null,"-- ")as$I)$H
.="\n\n".str_replace(array(" $I[db].$I[qualified] USING "," $I[qualified] USING ")," ".table($Q)." USING ",$I["indexdef"]).";";return$H;}function
create_sql($Q,$Ja,$nl){$Tj=array();$Ak=array();$Bk=array();$_k=array();$O=table_status1($Q);if(is_view($O)){$in=view($Q);$h="CREATE ".strtoupper($O["Engine"])." ".table($Q)." AS ".rtrim($in["select"],";").";";return
rtrim($h.indexes_sql($Q),';');}$n=fields($Q);if(count($O)<2||empty($n))return"";$H="CREATE TABLE ".table($O['Name'])." (\n    ";$Al=q(table($O['Name']));foreach($n
as$m){$Ck="";if($m['default']=="nextval('$O[Name]_$m[field]_seq')"){$Ck=table("$O[Name]_$m[field]_seq");$m['default']=null;$m['full_type']=preg_replace('~int(eger)?~','serial',$m['full_type']);}$Ci=idf_escape($m['field']).' '.$m['full_type'].preg_replace_callback('~(nextval\(\')([^.\']+)\'~',function(array$A){return$A[1].str_replace("'","''",table(idf_unescape($A[2])))."'";},default_value($m)).($m['null']?"":" NOT NULL");$Tj[]=$Ci;if(preg_match('~nextval\(\'([^\']+)\'\)~',$m['default'],$zg)){$zk=$zg[1];$Zk=first(get_rows((min_version(10)?"SELECT *, cache_size AS cache_value FROM pg_sequences WHERE schemaname = current_schema() AND sequencename = ".q(idf_unescape($zk)):"SELECT * FROM $zk"),null,"-- "));$yk=table(idf_unescape($zk));$Ak[]=($nl=="DROP+CREATE"?"DROP SEQUENCE IF EXISTS $yk;\n":"")."CREATE SEQUENCE $yk INCREMENT $Zk[increment_by] MINVALUE $Zk[min_value] MAXVALUE $Zk[max_value]"." CACHE $Zk[cache_value];";if(get_val("SELECT pg_get_serial_sequence($Al, ".q($m['field']).")"))$Bk[]="\n\nALTER SEQUENCE $yk OWNED BY ".table($O['Name']).".".idf_escape($m['field']).";";if($Ja)$_k[]=$yk;}elseif($Ja&&$m['auto_increment']){$yk=($Ck?"":get_val("SELECT pg_get_serial_sequence($Al, ".q($m['field']).")::regclass"));$_k[]=($yk?table(idf_unescape($yk)):$Ck);}}if(!empty($Ak))$H=implode("\n\n",$Ak)."\n\n$H";$mj="";foreach(indexes($Q)as$lf=>$v){if($v['type']=='PRIMARY'){$mj=$lf;$Tj[]="CONSTRAINT ".idf_escape($lf)." PRIMARY KEY (".implode(', ',array_map('Adminer\idf_escape',$v['columns'])).")";}}foreach(driver()->checkConstraints($Q)as$Mb=>$Ob)$Tj[]="CONSTRAINT ".idf_escape($Mb)." CHECK ($Ob)";$H
.=implode(",\n    ",$Tj)."\n)";$Ei=driver()->partitionsInfo($O['Name']);if($Ei)$H
.="\nPARTITION BY $Ei[partition_by]($Ei[partition])";$H
.=(min_version(12)?"":"\nWITH (oids = ".($O['Oid']?'true':'false').")").";";$H
.=implode($Bk);if($O['Comment'])$H
.="\n\nCOMMENT ON TABLE ".table($O['Name'])." IS ".q($O['Comment']).";";foreach($n
as$Jd=>$m){if($m['comment'])$H
.="\n\nCOMMENT ON COLUMN ".table($O['Name']).".".idf_escape($Jd)." IS ".q($m['comment']).";";}$H
.=indexes_sql($Q,$mj);foreach(array_filter($_k)as$yk){$Zk=first(get_rows("SELECT last_value, is_called::int FROM $yk",null,"-- "));if($Zk['is_called'])$H
.="\n\nDO \$\$ BEGIN PERFORM setval(".q($yk).", $Zk[last_value]); END \$\$;";}return
rtrim($H,';');}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
truncate_all_sql(array$S){return($S?"TRUNCATE ".implode(", ",array_map('Adminer\table',$S)).";\n\n":"");}function
trigger_sql($Q){$O=table_status1($Q);$H="";foreach(triggers($Q)as$pm=>$om){$qm=trigger($pm,$O['Name']);$H
.="\nCREATE TRIGGER ".idf_escape($qm['Trigger'])." $qm[Timing] $qm[Event] ON ".table($O['Name'])." $qm[Type] $qm[Statement];;\n";}return$H;}function
use_sql($nc,$nl=""){$B=idf_escape($nc);$H="";if(preg_match('~CREATE~',$nl)){if($nl=="DROP+CREATE")$H="DROP DATABASE IF EXISTS $B;\n";$H
.="CREATE DATABASE $B;\n";}return"$H\\connect $B";}function
use_schema_sql($K,$nl){$B=idf_escape($K);$H="";if(preg_match('~CREATE~',$nl)){if($nl=="DROP+CREATE")$H="DROP SCHEMA IF EXISTS $B CASCADE;\n";$H
.="CREATE SCHEMA IF NOT EXISTS $B;\n";}return$H."SET search_path TO $B";}function
show_variables(){return
get_rows("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
convert_field(array$m){if(preg_match('~^(geometry|geography)$~',$m["type"])&&strpos($m["full_type"],"[")===false)return"ST_AsEWKT(".idf_escape($m["field"]).")";}function
unconvert_field(array$m,$H){return($m["composite"]?"$H::$m[type]":$H);}function
support($Hd){return
preg_match('~^(check|columns|comment|database|drop_col|dump|descidx|fast_status|indexes|kill|partial_indexes|routine|scheme|sequence|sql|table'.'|transaction_ddl|trigger|type|variables|view'.(min_version(9.3)?'|materializedview':'').(min_version(11)?'|procedure':'').(connection()->flavor=='cockroach'?'':'|deferrable').(connection()->flavor=='cockroach'||!min_version(9.1)?'':'|extension').(connection()->flavor=='cockroach'?'':'|processlist').')$~',$Hd);}function
kill_process($t){return
queries("SELECT pg_terminate_backend(".number($t).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){return
get_val("SHOW max_connections");}}add_driver("sqlite","SQLite");if(isset($_GET["sqlite"])){define('Adminer\DRIVER',"sqlite");if(class_exists("SQLite3")&&$_GET["ext"]!="pdo"){abstract
class
SqliteDb
extends
SqlDb{var$extension="SQLite3";private$link;function
attach(array$M,$U,$E){$this->link=new
\SQLite3($M["path"]);$hn=\SQLite3::version();$this->server_info=$hn["versionString"];return'';}function
query($F,$Bm=false){$G=@$this->link->query($F);$this->error="";if(!$G){$this->errno=$this->link->lastErrorCode();$this->error=$this->link->lastErrorMsg();return
false;}elseif($G->numColumns())return
new
Result($G);$this->affected_rows=$this->link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->link->escapeString($P)."'":"x'".bin2hex($P)."'");}}class
Result{var$num_rows;private$result,$offset=0;function
__construct($G){$this->result=$G;}function
fetch_assoc(){return$this->result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$Am=array(1=>"integer","real","text","blob","null");$d=$this->offset++;return(object)array("name"=>$this->result->columnName($d),"native_type"=>$Am[$this->result->columnType($d)],);}}}elseif(extension_loaded("pdo_sqlite")){abstract
class
SqliteDb
extends
PdoDb{var$extension="PDO_SQLite";function
attach(array$M,$U,$E){return$this->dsn(DRIVER.":".$M["path"],"","");}function
quote($P){return(is_utf8($P)?parent::quote($P):"x'".bin2hex($P)."'");}}}if(class_exists('Adminer\SqliteDb')){class
Db
extends
SqliteDb{function
attach(array$M,$U,$E){parent::attach($M,$U,$E);$this->query("PRAGMA foreign_keys = 1");$this->query("PRAGMA busy_timeout = 500");return'';}function
select_db($o){$F="ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$o)?$o:dirname($_SERVER["SCRIPT_FILENAME"])."/$o")." AS a";if(is_readable($o)&&$this->query($F))return!self::attach(server_parts(array("path"=>$o)),'','');return
false;}}}class
Driver
extends
SqlDriver{static$extensions=array("SQLite3","PDO_SQLite");static$jush="sqlite";static$passwords=false;static$serverFile=true;protected$types=array(array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0));var$insertFunctions=array();var$editFunctions=array("integer|real|numeric"=>"+/-","text"=>"||",);var$fulltextOperator="MATCH";var$functions=array("hex","length","lower","round","unixepoch","upper");var$grouping=array("avg","count","count distinct","group_concat","max","min","sum");function
operators($wl){$H=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");if(preg_match('~^fts\d+$~i',(string)idx($wl,"Engine")))$H[]="MATCH";$H[]="SQL";return$H;}static
function
connect($M,$U,$E){return
parent::connect(":memory:","","");}function
__construct(Db$f){parent::__construct($f);if(min_version(3.31,0,$f))$this->generated=array("STORED","VIRTUAL");if(min_version(3.37,0,$f))$this->types[0]["any"]=0;}function
structuredTypes(){return
array_keys($this->types[0]);}function
quoteBinary($gk){return"x".q(bin2hex($gk));}function
typeName(\stdClass$m){$H=strtolower(idx((array)$m,'sqlite:decl_type',parent::typeName($m)));return
idx(array("string"=>"text","double"=>"real"),$H,$H);}function
engines(){$H=array("table");if(min_version("3.8.2")){if(min_version(3.37)){$H[]="STRICT";$H[]="STRICT, WITHOUT ROWID";}$H[]="WITHOUT ROWID";}return$H;}private
function
isVirtual(array$R){$hd=$R["Engine"];return$hd!=""&&!in_array($hd,array_merge(array("view"),$this->engines()));}function
supportsIndex(array$R){return!is_view($R)&&!$this->isVirtual($R);}function
supportsAlterIndex(array$R){return$this->supportsIndex($R);}function
supportsAlterTable(array$wl){return!$this->isVirtual($wl);}function
shadowTables($Q){$H=array();if(min_version(3.37)){foreach(get_vals("SELECT name FROM pragma_table_list WHERE schema = 'main' AND type = 'shadow' ORDER BY name")as$B){if(preg_match('(^'.preg_quote($Q).'_[^_]*$)',$B))$H[]=array("table"=>$B,"ns"=>"");}}return$H;}function
fulltextSql($B,array$v,$F,$Ya){return
idf_escape($B)." MATCH ".q($F);}function
insertUpdate($Q,array$J,array$mj){$Y=array();foreach($J
as$N)$Y[]="(".implode(", ",$N).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($J))).") VALUES\n".implode(",\n",$Y));}function
tableHelp($B,$Kf=false){if(preg_match('~^sqlite_(seq|stat.)~',$B,$A))return"fileformat2.html#$A[1]tab";if(preg_match('~^sqlite(_temp)?_(master|schema)$~',$B))return"schematab.html";}function
checkConstraints($Q){preg_match_all('~ CHECK *(\( *(((?>[^()]*[^() ])|(?1))*) *\))~',get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q),0,$this->conn),$zg);return
array_combine($zg[2],$zg[2]);}function
allFields(){$H=array();if(min_version(3.16)){$J=get_rows('SELECT m.name AS tab, p.name AS field, p.type, p."notnull", p.pk AS '.idf_escape("primary")."
FROM sqlite_master m, pragma_table_".(min_version(3.31)?"x":"")."info(m.name) p
WHERE m.type IN ('table', 'view')".(min_version(3.31)?"
AND p.hidden != 1":"").(min_version(3.37)?"
AND m.name NOT IN (SELECT name FROM pragma_table_list WHERE type = 'shadow')":"")."
ORDER BY (m.name LIKE 'sqlite_%'), m.name, p.cid",$this->conn);foreach($J
as$I){$I["type"]=type_affinity($I["type"]);$I["null"]=!$I["notnull"];$H[$I["tab"]][]=$I;}}else{foreach(tables_list()as$Q=>$T){foreach(fields($Q)as$m)$H[$Q][]=$m;}}return$H;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
get_databases($Yd){return
array();}function
limit($F,$Z,$z,$Lh=0,$xk=" "){return" $F$Z".($z?$xk."LIMIT $z".($Lh?" OFFSET $Lh":""):"");}function
limit1($Q,$F,$Z,$xk="\n"){return(preg_match('~^INTO~',$F)||get_val("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($F,$Z,1,0,$xk):" $F WHERE rowid = (SELECT rowid FROM ".table($Q).$Z.$xk."LIMIT 1)");}function
db_collation($j,array$_b){return
get_val("PRAGMA encoding");}function
logged_user(){return
get_current_user();}function
virtual_module($al){return(preg_match('~^CREATE\s+VIRTUAL\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:"[^"]*+"|`[^`]*+`|\[[^\]]*+\]|[^\s(]+)\s+USING\s+([a-z0-9_]+)~i',$al,$A)?$A[1]:"");}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view')".(min_version(3.37)?" AND name NOT IN (SELECT name FROM pragma_table_list WHERE type = 'shadow')":"")."
ORDER BY (name LIKE 'sqlite_%'), name");}function
count_tables(array$i){return
array();}function
db_status(){$xi=get_val("PRAGMA page_size");$ie=get_val("PRAGMA freelist_count")*$xi;return
array("Data_length"=>get_val("PRAGMA page_count")*$xi-$ie,"Index_length"=>0,"Data_free"=>$ie,);}function
table_status($B="",$Gd=false){$H=array();$J=array();if(!$Gd&&$B==""){connection()->query("PRAGMA optimize = 0x10002");$J=get_key_vals("SELECT tbl, MAX(CAST(stat AS integer)) FROM sqlite_stat1 GROUP BY tbl");}foreach(get_rows("SELECT name AS Name, type AS Engine, sql, 'rowid' AS Oid, '' AS Auto_increment".(min_version(3.37)?", name IN (SELECT name FROM pragma_table_list WHERE type = 'shadow') AS dependent":"")." FROM sqlite_master WHERE type IN ('table', 'view') ".($B!=""?"AND name = ".q($B):"ORDER BY (name LIKE 'sqlite_%'), name"))as$I){if($I["Engine"]=="table"){$al=preg_replace('~(?:\s|--[^\n]*|/\*.*?\*/)+$~s','',$I["sql"]);$pl=preg_replace('~.*\)~s','',$al);$I["Engine"]=virtual_module($I["sql"])?:(implode(", ",array_filter(array((preg_match('~\bSTRICT\b~i',$pl)?"STRICT":0),(preg_match('~\bWITHOUT\s+ROWID\b~i',$pl)?"WITHOUT ROWID":0),)))?:"table");}unset($I["sql"]);$I["Rows"]=idx($J,$I["Name"],0);$H[$I["Name"]]=$I;}if(!$Gd){foreach(get_rows("SELECT * FROM sqlite_sequence".($B!=""?" WHERE name = ".q($B):""),null,"")as$I)$H[$I["name"]]["Auto_increment"]=$I["seq"];}return$H;}function
is_view(array$R){return$R["Engine"]=="view";}function
fk_support(array$R){return!get_val("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
type_affinity($T){$T=strtolower($T);return(preg_match('~int~i',$T)?"integer":(preg_match('~char|clob|text~i',$T)?"text":(preg_match('~blob~i',$T)?"blob":(preg_match('~real|floa|doub~i',$T)?"real":(preg_match('~any~i',$T)?"any":"numeric")))));}function
fields($Q){$H=array();$al=get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));$rj=array("select"=>1,"where"=>1,"order"=>1);if(!preg_match('~^sqlite(_temp)?_(master|schema)$~',$Q))$rj+=array("insert"=>1,"update"=>1);$ke=preg_match('~^fts\d+$~i',virtual_module($al));foreach(get_rows("PRAGMA table_".(min_version(3.31)?"x":"")."info(".table($Q).")")as$I){if($I["hidden"]==1)continue;$B=$I["name"];$T=strtolower($I["type"]);$k=$I["dflt_value"];$H[$B]=array("field"=>$B,"type"=>($ke?"text":type_affinity($T)),"full_type"=>$T,"default"=>(preg_match("~^'(.*)'$~",$k,$A)?str_replace("''","'",$A[1]):($k=="NULL"?null:$k)),"null"=>!$I["notnull"],"privileges"=>$rj,"primary"=>$I["pk"],);if($I["pk"]&&preg_match('~\bAUTOINCREMENT\b~i',$al))$H[$B]["auto_increment"]=true;}$u='[(,]\s*(("[^"]*+")+|[a-z0-9_]+)';$Pj='(?:[^,()\']|\'[^\']*+\'|\([^)]*+\))*?';preg_match_all('~'.$u.'\s+text\b'.$Pj.'COLLATE\s+(\'[^\']+\'|[a-z0-9_]+)~i',$al,$zg,PREG_SET_ORDER);foreach($zg
as$A){$B=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($H[$B])$H[$B]["collation"]=trim($A[3],"'");}preg_match_all('~'.$u.'\s'.$Pj.'GENERATED\s+ALWAYS\s+AS\s*\((.+?)\)\s+(STORED|VIRTUAL)~i',$al,$zg,PREG_SET_ORDER);foreach($zg
as$A){$B=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($H[$B]){$H[$B]["default"]=$A[3];$H[$B]["generated"]=strtoupper($A[4]);}}return$H;}function
indexes($Q,$g=null){$g=connection($g);$H=array();$al=get_val("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q),0,$g);if(preg_match('~^fts\d+$~i',virtual_module($al)))return
array($Q=>array("type"=>"FULLTEXT","columns"=>array_keys(fields($Q)),"lengths"=>array(),"descs"=>array()));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*"|`[^`]*`)++)~i',$al,$A)){$H[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+|(?:`[^`]*+`)+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$zg,PREG_SET_ORDER);foreach($zg
as$A){$H[""]["columns"][]=idf_unescape($A[2]).$A[4];$H[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$H){foreach(fields($Q)as$B=>$m){if($m["primary"])$H[""]=array("type"=>"PRIMARY","columns"=>array($B),"lengths"=>array(),"descs"=>array(null));}}$fl=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$g);foreach(get_rows("PRAGMA index_list(".table($Q).")",$g)as$I){$B=$I["name"];$v=array("type"=>($I["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($B).")",$g)as$ek){$v["columns"][]=$ek["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($B).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$fl[$B],$Kj)){preg_match_all('/("[^"]*+")+( DESC)?/',$Kj[2],$zg);foreach($zg[2]as$x=>$W){if($W)$v["descs"][$x]='1';}}if(!$H[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$H[""]["columns"]||$v["descs"]!=$H[""]["descs"]||!preg_match("~^sqlite_~",$B))$H[$B]=$v;}return$H;}function
foreign_keys($Q){$H=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$I){$p=&$H[$I["id"]];if(!$p)$p=$I;$p["source"][]=$I["from"];$p["target"][]=$I["to"];}return$H;}function
view($B){return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\s+~iU','',get_val("SELECT sql FROM sqlite_master WHERE type = 'view' AND name = ".q($B))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j,$K=""){return
false;}function
error(){return
h(connection()->error);}function
check_sqlite_name($B){$Cd="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Cd)\$~",$B)){connection()->error=lang(35,str_replace("|",", ",$Cd));return
false;}return
true;}function
create_database($j,$zb){if(file_exists($j)){connection()->error=lang(36);return
false;}if(!check_sqlite_name($j))return
false;try{$_=new
Db();$_->attach(server_parts(array("path"=>$j)),'','');}catch(\Exception$td){connection()->error=$td->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases(array$i){connection()->attach(server_parts(array("path"=>":memory:")),'','');foreach($i
as$j){if(!check_sqlite_name($j))return
false;if(!@unlink($j)){connection()->error=lang(36);return
false;}}return
true;}function
rename_database($B,$zb){if(!check_sqlite_name($B))return
false;connection()->attach(server_parts(array("path"=>":memory:")),'','');connection()->error=lang(36);return@rename(DB,$B);}function
auto_increment(){return" PRIMARY KEY AUTOINCREMENT";}function
alter_table($Q,$B,array$n,array$ae,$Eb,$hd,$zb,$Ja,$Ii){$Sm=($Q==""||$ae||$hd);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$Sm=true;break;}}$b=array();$ri=array();foreach($n
as$m){if($m[1]){$b[]=($Sm?$m[1]:"ADD ".implode($m[1]));if($m[0]!="")$ri[$m[0]]=$m[1][0];}}if(!$Sm){foreach($b
as$W){if(!queries("ALTER TABLE ".table($Q)." $W"))return
false;}if($Q!=$B&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($B)))return
false;}elseif(!recreate_table($Q,$B,$b,$ri,$ae,$Ja,array(),"","",$hd))return
false;if($Ja){queries("BEGIN");queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($B));if(!connection()->affected_rows)queries("INSERT INTO sqlite_sequence (name, seq) VALUES (".q($B).", $Ja)");queries("COMMIT");}return
true;}function
recreate_table($Q,$B,array$n,array$ri,array$ae,$Ja="",$w=array(),$Tc="",$ma="",$hd=""){if($Q!=""){if(!$n){foreach(fields($Q)as$x=>$m){if($w)$m["auto_increment"]=0;$n[]=process_field($m,$m);$ri[$x]=idf_escape($x);}}$nj=false;foreach($n
as$m){if($m[6])$nj=true;}$Vc=array();foreach($w
as$x=>$W){if($W[2]=="DROP"){$Vc[$W[1]]=true;unset($w[$x]);}}foreach(indexes($Q)as$Rf=>$v){$e=array();foreach($v["columns"]as$x=>$d){if(!$ri[$d])continue
2;$e[]=$ri[$d].($v["descs"][$x]?" DESC":"");}if(!$Vc[$Rf]){if($v["type"]!="PRIMARY"||!$nj)$w[]=array($v["type"],$Rf,$e);}}foreach($w
as$x=>$W){if($W[0]=="PRIMARY"){unset($w[$x]);$ae[]="  PRIMARY KEY (".implode(", ",$W[2]).")";}}foreach(foreign_keys($Q)as$Rf=>$p){foreach($p["source"]as$x=>$d){if(!$ri[$d])continue
2;$p["source"][$x]=idf_unescape($ri[$d]);}if(!isset($ae[" $Rf"]))$ae[]=" ".format_foreign_key($p);}queries("BEGIN");}$ib=array();foreach($n
as$m){if(preg_match('~GENERATED~',$m[3]))unset($ri[array_search($m[0],$ri)]);$ib[]="  ".implode($m);}$ib=array_merge($ib,array_filter($ae));foreach(driver()->checkConstraints($Q)as$mb){if($mb!=$Tc)$ib[]="  CHECK ($mb)";}if($ma)$ib[]="  CHECK ($ma)";$Rl=($Q!=""&&$Q==$B?"adminer_$B":$B);if(!$hd&&$Q!="")$hd=idx(table_status1($Q),"Engine");if(!queries("CREATE TABLE ".table($Rl)." (\n".implode(",\n",$ib)."\n)".($hd!="table"&&in_array($hd,driver()->engines())?" $hd":"")))return
false;if($Q!=""){if($ri&&!queries("INSERT INTO ".table($Rl)." (".implode(", ",$ri).") SELECT ".implode(", ",array_map('Adminer\idf_escape',array_keys($ri)))." FROM ".table($Q)))return
false;$um=array();foreach(triggers($Q)as$sm=>$Yl){$qm=trigger($sm,$Q);$um[]="CREATE TRIGGER ".idf_escape($sm)." ".implode(" ",$Yl)." ON ".table($B)."\n$qm[Statement]";}$Ja=$Ja?"":get_val("SELECT seq FROM sqlite_sequence WHERE name = ".q($Q));if(!queries("DROP TABLE ".table($Q))||($Q==$B&&!queries("ALTER TABLE ".table($Rl)." RENAME TO ".table($B)))||!alter_indexes($B,$w))return
false;if($Ja)queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($B));foreach($um
as$qm){if(!queries($qm))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$T,$B,$e){return"CREATE $T ".($T!="INDEX"?"INDEX ":"").idf_escape($B!=""?$B:uniqid($Q."_"))." ON ".table($Q)." $e";}function
alter_indexes($Q,$b){foreach($b
as$mj){if($mj[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),"",$b);}foreach(array_reverse($b)as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):index_sql($Q,$W[0],$W[1],"(".implode(", ",$W[2]).")")))return
false;}return
true;}function
truncate_tables(array$S){return
apply_queries("DELETE FROM",$S);}function
drop_views(array$jn){return
apply_queries("DROP VIEW",$jn);}function
drop_tables(array$S){return
apply_queries("DROP TABLE",$S);}function
move_tables(array$S,array$jn,$Nl){return
false;}function
trigger($B,$Q){if($B=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\s]+|`[^`]*`|"[^"]*")+';$tm=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$tm["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",get_val("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($B)),$A);if(!$A)return
array();$Hh=$A[3];return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]).($Hh?" OF":""),"Of"=>idf_unescape($Hh),"Trigger"=>$B,"Statement"=>$A[4],);}function
triggers($Q){$H=array();$tm=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$I){preg_match('~^CREATE\s+TRIGGER\s*(?:[^`"\s]+|`[^`]*`|"[^"]*")+\s*('.implode("|",$tm["Timing"]).')\s*(.*?)\s+ON\b~i',$I["sql"],$A);$H[$I["name"]]=array($A[1],$A[2]);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
last_id($G){return
get_val("SELECT LAST_INSERT_ROWID()");}function
explain(Db$f,$F){return$f->query("EXPLAIN QUERY PLAN $F");}function
found_rows(array$R,array$Z){}function
types($Cd=false){return
array();}function
create_sql($Q,$Ja,$nl){$H=get_val("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$B=>$v){if($B==''||$v['type']=='FULLTEXT')continue;$H
.=";\n\n".index_sql($Q,$v['type'],$B,"(".implode(", ",array_map('Adminer\idf_escape',$v['columns'])).")");}return$H;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($nc,$nl=""){return"";}function
trigger_sql($Q){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){$H=array();foreach(get_rows("PRAGMA pragma_list")as$I){$B=$I["name"];if($B!="pragma_list"&&$B!="compile_options"){$H[$B]=array($B,'');foreach(get_rows("PRAGMA $B")as$I)$H[$B][1].=implode(", ",$I)."\n";}}return$H;}function
show_status(){$H=array();foreach(get_vals("PRAGMA compile_options")as$di)$H[]=explode("=",$di,2)+array('','');return$H;}function
convert_field(array$m){}function
unconvert_field(array$m,$H){return$H;}function
support($Hd){return
preg_match('~^(check|columns|database|drop_col|dump|fast_status|indexes|descidx|move_col|sql|status|table|transaction_ddl|trigger|variables|view|view_trigger)$~',$Hd);}}add_driver("mssql","MS SQL");if(isset($_GET["mssql"])){define('Adminer\DRIVER',"mssql");if(extension_loaded("sqlsrv")&&$_GET["ext"]!="pdo"){class
Db
extends
SqlDb{var$extension="sqlsrv";private$link,$result,$warnings,$transaction=false;private
function
get_error(){$this->error="";foreach(sqlsrv_errors()as$l){$this->errno=$l["code"];$this->error
.="$l[message]\n";}$this->error=rtrim($this->error);}function
attach(array$M,$U,$E){sqlsrv_configure("WarningsReturnAsErrors",0);$Nb=array("UID"=>$U,"PWD"=>$E,"CharacterSet"=>"UTF-8");if(isset($_GET["sql"])&&!self::$instance)$Nb["MultipleActiveResultSets"]=false;$gl=adminer()->connectSsl();if(isset($gl["Encrypt"]))$Nb["Encrypt"]=$gl["Encrypt"];if(isset($gl["TrustServerCertificate"]))$Nb["TrustServerCertificate"]=$gl["TrustServerCertificate"];$j=adminer()->database();if($j!="")$Nb["Database"]=$j;$Zi=$M["port"];$this->link=@sqlsrv_connect($M["host"].($Zi?",$Zi":""),$Nb);if($this->link){$qf=sqlsrv_server_info($this->link);$this->server_info=$qf['SQLServerVersion'];}else$this->get_error();return($this->link?'':$this->error);}function
quote($P){return
unicode_prefix($P)."'".str_replace("'","''",$P)."'";}function
select_db($nc){return$this->query(use_sql($nc));}function
query($F,$Bm=false){$G=sqlsrv_query($this->link,$F);$this->error="";if(!$G){$this->get_error();return
false;}return$this->store_result($G);}function
multi_query($F){$this->result=sqlsrv_query($this->link,$F);$this->error="";if(!$this->result){$this->get_error();return
false;}return
true;}function
store_result($G=null){if(!$G)$G=$this->result;if(!$G)return
false;$this->warnings=sqlsrv_errors(SQLSRV_ERR_WARNINGS);if(sqlsrv_field_metadata($G))return
new
Result($G);$this->affected_rows=sqlsrv_rows_affected($G);return
true;}function
next_result(){if(!$this->result)return
false;$H=sqlsrv_next_result($this->result);if($H===false){$this->get_error();$this->result=null;return
true;}return!!$H;}function
warnings(){$H=array();foreach((array)$this->warnings
as$mn)$H[]=$mn["message"];return$H;}function
inTransaction(){return$this->transaction||(isset($_GET["sql"])&&get_val("SELECT @@TRANCOUNT",0,$this));}function
begin(){$this->transaction=sqlsrv_begin_transaction($this->link);if(!$this->transaction)$this->get_error();return$this->transaction;}function
commit(){if($this->transaction&&!sqlsrv_commit($this->link)){$this->get_error();return
false;}$this->transaction=false;return
true;}function
rollback(){if(!$this->transaction&&isset($_GET["sql"]))return!!$this->query("IF @@TRANCOUNT > 0 ROLLBACK");if($this->transaction&&!sqlsrv_rollback($this->link)){$this->get_error();return
false;}$this->transaction=false;return
true;}}class
Result{var$num_rows;private$result,$offset=0,$fields;function
__construct($G){$this->result=$G;}private
function
convert($I){foreach((array)$I
as$x=>$W){if(is_a($W,'DateTime'))$I[$x]=$W->format("Y-m-d H:i:s");}return$I;}function
fetch_assoc(){return$this->convert(sqlsrv_fetch_array($this->result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->convert(sqlsrv_fetch_array($this->result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->fields)$this->fields=sqlsrv_field_metadata($this->result);$Am=array(-155=>"datetimeoffset","time",-152=>"xml","varbinary","sql_variant",-11=>"uniqueidentifier","ntext","nvarchar","nchar","bit","tinyint","bigint","image","varbinary","binary","text",1=>"char","numeric","decimal","int","smallint","float","real","float",12=>"varchar",91=>"date","time","datetime",);$m=$this->fields[$this->offset++];$H=new
\stdClass;$H->name=$m["Name"];$H->native_type=idx($Am,$m["Type"],"");return$H;}function
seek($Lh){for($s=0;$s<$Lh;$s++)sqlsrv_fetch($this->result);}}function
last_id($G){return(string)get_val("SELECT SCOPE_IDENTITY()");}function
explain(Db$f,$F){$f->query("SET SHOWPLAN_ALL ON");$H=$f->query($F);$f->query("SET SHOWPLAN_ALL OFF");return$H;}}else{abstract
class
MssqlDb
extends
PdoDb{function
quote($P){return
unicode_prefix($P).parent::quote($P);}function
select_db($nc){return$this->query(use_sql($nc));}function
lastInsertId(){return$this->pdo->lastInsertId();}function
warnings(){$G=$this->multi;if(!is_object($G))return
array();$l=$G->errorInfo();return
array((string)$l[2]);}}function
last_id($G){return
connection()->lastInsertId();}function
explain(Db$f,$F){}if(extension_loaded("pdo_sqlsrv")){class
Db
extends
MssqlDb{var$extension="PDO_SQLSRV";function
attach(array$M,$U,$E){$Zi=$M["port"];$Xc="sqlsrv:Server=$M[host]".($Zi?",$Zi":"").(isset($_GET["sql"])&&!self::$instance?";MultipleActiveResultSets=0":"");$gl=adminer()->connectSsl();foreach(array("Encrypt","TrustServerCertificate")as$x){if(isset($gl[$x]))$Xc
.=";$x=".($gl[$x]?1:0);}return$this->dsn($Xc,$U,$E,array(\PDO::SQLSRV_ATTR_DIRECT_QUERY=>true));}function
inTransaction(){return
parent::inTransaction()||(isset($_GET["sql"])&&get_val("SELECT @@TRANCOUNT",0,$this));}function
rollback(){return(parent::inTransaction()||!isset($_GET["sql"])?parent::rollback():!!$this->query("IF @@TRANCOUNT > 0 ROLLBACK"));}}}elseif(extension_loaded("pdo_dblib")){class
Db
extends
MssqlDb{var$extension="PDO_DBLIB";function
attach(array$M,$U,$E){$Zi=$M["port"];$Sk=$M["socket"];return$this->dsn("dblib:charset=utf8;host=$M[host]".($Zi!=""?";port=$Zi":($Sk!=""?";unix_socket=$Sk":"")),$U,$E);}}}}class
Driver
extends
SqlDriver{static$extensions=array("SQLSRV","PDO_SQLSRV","PDO_DBLIB");static$jush="mssql";static$serverSocket=true;var$insertFunctions=array("date|time"=>"getdate");var$editFunctions=array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",);var$functions=array("len","lower","round","upper");var$grouping=array("avg","count","count distinct","max","min","sum");var$generated=array("PERSISTED","VIRTUAL");var$onActions="NO ACTION|CASCADE|SET NULL|SET DEFAULT";var$inout="|OUTPUT";private$unknownTypes=array();function
operators($wl){return
array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");}static
function
connect($M,$U,$E){if($M=="")$M="localhost:1433";return
parent::connect($M,$U,$E);}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(28)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"numeric"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20,"vector"=>0,),lang(29)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>26),lang(30)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823,"uniqueidentifier"=>36,"xml"=>2147483647,"json"=>2147483647,"sql_variant"=>8000,"hierarchyid"=>892,),lang(31)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),lang(33)=>array("geometry"=>0,"geography"=>0),);$Am=array_flip(get_vals("SELECT name FROM sys.types WHERE is_user_defined = 0 ORDER BY name"));if($Am){foreach($this->types
as$r=>$xe){foreach($xe
as$T=>$y){if(isset($Am[$T]))unset($Am[$T]);else
unset($this->types[$r][$T]);}if(!$this->types[$r])unset($this->types[$r]);}$this->unknownTypes=array_keys($Am);}}function
types(){return
parent::types()+array_fill_keys($this->unknownTypes,0);}function
structuredTypes(){return
array_merge(parent::structuredTypes(),$this->unknownTypes);}function
typeName(\stdClass$m){return
idx((array)$m,'sqlsrv:decl_type',parent::typeName($m));}function
insertUpdate($Q,array$J,array$mj){$n=fields($Q);$Lm=array();$Z=array();$N=reset($J);$e="c".implode(", c",range(1,count($N)));$cb=0;$wf=array();foreach($N
as$x=>$W){$cb++;$B=idf_unescape($x);if(!$n[$B]["auto_increment"])$wf[$x]="c$cb";if(isset($mj[$B]))$Z[]="$x = c$cb";else$Lm[]="$x = c$cb";}$Y=array();foreach($J
as$N)$Y[]="(".implode(", ",$N).")";if($Z){$Ye=queries("SET IDENTITY_INSERT ".table($Q)." ON");$H=queries("MERGE ".table($Q)." USING (VALUES\n\t".implode(",\n\t",$Y)."\n) AS source ($e) ON ".implode(" AND ",$Z).($Lm?"\nWHEN MATCHED THEN UPDATE SET ".implode(", ",$Lm):"")."\nWHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($Ye?$N:$wf)).") VALUES (".($Ye?$e:implode(", ",$wf)).");");if($Ye)queries("SET IDENTITY_INSERT ".table($Q)." OFF");}else$H=queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).") VALUES\n".implode(",\n",$Y));return$H;}function
begin(){remember_query("BEGIN TRANSACTION");return$this->conn->begin();}function
convertSearch($u,array$W,array$m){return(preg_match('~^(bit|n?text|xml|json|vector|uniqueidentifier|sql_variant|hierarchyid|geography|geometry)$~',$m["type"])?"CAST($u AS nvarchar(max))":$u);}function
quoteBinary($gk){return"0x".bin2hex($gk);}function
warnings(){$H=array();foreach($this->conn->warnings()as$Qg){$Qg=trim(preg_replace('~^(\[[^]]+])+~','',$Qg));if($Qg!="")$H[]=$Qg;}return
nl_br(h(implode("\n",$H)));}function
tableHelp($B,$Kf=false){$pg=array("sys"=>"catalog-views/sys-","INFORMATION_SCHEMA"=>"information-schema-views/",);$_=$pg[get_schema()];if($_)return"relational-databases/system-$_".preg_replace('~_~','-',strtolower($B))."-transact-sql";}}function
unicode_prefix($P){return(strlen($P)!=utf8_length($P)?"N":"");}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
get_databases($Yd){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($F,$Z,$z,$Lh=0,$xk=" "){return($z?" TOP (".($z+$Lh).")":"")." $F$Z";}function
limit1($Q,$F,$Z,$xk="\n"){return
limit($F,$Z,1,0,$xk);}function
db_collation($j,array$_b){return
get_val("SELECT collation_name FROM sys.databases WHERE name = ".q($j));}function
logged_user(){return
get_val("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables(array$i){$H=array();foreach($i
as$j){connection()->select_db($j);$H[$j]=get_val("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$H;}function
table_status($B="",$Gd=false){$H=array();$Qk=array();foreach(get_rows("SELECT object_id, SUM(CASE WHEN index_id < 2 THEN row_count ELSE 0 END) AS [Rows],
SUM(CASE WHEN index_id < 2 THEN used_page_count ELSE 0 END) * 8192 AS Data_length,
SUM(CASE WHEN index_id > 1 THEN used_page_count ELSE 0 END) * 8192 AS Index_length,
SUM(reserved_page_count - used_page_count) * 8192 AS Data_free
FROM sys.dm_db_partition_stats
GROUP BY object_id",null,"")as$I){$Gh=$I["object_id"];unset($I["object_id"]);$Qk[$Gh]=$I;}foreach(get_rows("SELECT ao.object_id, ao.name AS Name, ao.type_desc AS Engine,
	(SELECT cast(value as varchar(max)) FROM fn_listextendedproperty(default, 'SCHEMA', schema_name(schema_id), 'TABLE', ao.name, null, null)) AS Comment
FROM sys.all_objects AS ao
WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($B!=""?"AND name = ".q($B):"ORDER BY name"))as$I){$Gh=$I["object_id"];unset($I["object_id"]);$H[$I["Name"]]=$I+idx($Qk,$Gh,array());}return$H;}function
is_view(array$R){return$R["Engine"]=="VIEW";}function
fk_support(array$R){return
true;}function
type_length($T,array$I){return(preg_match("~char|binary~",$T)?($I["max_length"]==-1?"max":intval($I["max_length"])/($T[0]=='n'?2:1)):($T=="decimal"?"$I[precision],$I[scale]":($T=="vector"?(intval($I["max_length"])-8)/4:"")));}function
fields($Q){$Gb=get_key_vals("SELECT objname, cast(value as varchar(max)) FROM fn_listextendedproperty('MS_DESCRIPTION', 'schema', ".q(get_schema()).", 'table', ".q($Q).", 'column', NULL)");$H=array();$xl=get_val("SELECT object_id FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') AND name = ".q($Q));foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name,
	COALESCE(bt.name, t.name) type, d.definition [default], d.name default_constraint, i.is_primary_key
FROM sys.all_columns c
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.types bt ON t.system_type_id = bt.user_type_id AND t.is_user_defined = 1
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.object_id
LEFT JOIN sys.index_columns ic ON c.object_id = ic.object_id AND c.column_id = ic.column_id
LEFT JOIN sys.indexes i ON ic.object_id = i.object_id AND ic.index_id = i.index_id
WHERE c.object_id = ".q($xl))as$I){$T=$I["type"];$y=type_length($T,$I);$H[$I["name"]]=array("field"=>$I["name"],"full_type"=>$T.($y?"($y)":""),"type"=>$T,"length"=>$y,"default"=>(preg_match("~^\(N?'(.*)'\)$~s",$I["default"],$A)?str_replace("''","'",$A[1]):$I["default"]),"default_constraint"=>$I["default_constraint"],"null"=>$I["is_nullable"],"auto_increment"=>$I["is_identity"],"collation"=>$I["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,"where"=>1,"order"=>1),"primary"=>$I["is_primary_key"],"comment"=>$Gb[$I["name"]],);}foreach(get_rows("SELECT * FROM sys.computed_columns WHERE object_id = ".q($xl))as$I){$H[$I["name"]]["generated"]=($I["is_persisted"]?"PERSISTED":"VIRTUAL");$H[$I["name"]]["default"]=$I["definition"];}return$H;}function
indexes($Q,$g=null){$H=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$g)as$I){$B=$I["name"];$H[$B]["type"]=($I["is_primary_key"]?"PRIMARY":($I["is_unique"]?"UNIQUE":"INDEX"));$H[$B]["lengths"]=array();$H[$B]["columns"][$I["key_ordinal"]]=$I["column_name"];$H[$B]["descs"][$I["key_ordinal"]]=($I["is_descending_key"]?'1':null);}return$H;}function
view($B){return
array("select"=>preg_replace('~^(?:[^[]|\[[^]]*])*\s+AS\s+~isU','',get_val("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($B))));}function
collations(){$H=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$zb)$H[preg_replace('~_.*~','',$zb)][]=$zb;return$H;}function
information_schema($j,$K=""){return
in_array($K!=""?$K:get_schema(),array("INFORMATION_SCHEMA","sys"));}function
error(){return
nl_br(h(preg_replace('~^(\[[^]]*])+~m','',connection()->error)));}function
create_database($j,$zb){return
queries("CREATE DATABASE ".idf_escape($j).(preg_match('~^[a-z0-9_]+$~i',$zb)?" COLLATE $zb":""));}function
drop_databases(array$i){return!!queries("DROP DATABASE ".implode(", ",array_map('Adminer\idf_escape',$i)));}function
rename_database($B,$zb){if(preg_match('~^[a-z0-9_]+$~i',$zb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $zb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($B));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$B,array$n,array$ae,$Eb,$hd,$zb,$Ja,$Ii){$b=array();$Gb=array();$ni=fields($Q);foreach($n
as$m){$d=idf_escape($m[0]);$W=$m[1];if(!$W)$b["DROP"][]=" COLUMN $d";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~",'\1\2',$W[1]);$Gb[$m[0]]=$W[5];unset($W[5]);if(preg_match('~ AS ~',$W[3]))unset($W[1],$W[2]);if($m[0]=="")$b["ADD"][]="\n  ".implode("",$W).($Q==""?substr($ae[$W[0]],16+strlen($W[0])):"");else{$k=$W[3];unset($W[3]);unset($W[6]);if($d!=$W[0])queries("EXEC sp_rename ".q(table($Q).".$d").", ".q(idf_unescape($W[0])).", 'COLUMN'");$b["ALTER COLUMN ".implode("",$W)][]="";$mi=$ni[$m[0]];if(default_value($mi)!=$k){if($mi["default"]!==null)$b["DROP"][]=" ".idf_escape($mi["default_constraint"]);if($k)$b["ADD"][]="\n $k FOR $d";}}}}if($Q==""){$la=(array)$b["ADD"];foreach($ae
as$x=>$W){if(!is_string($x))$la[]="\n$W";}return
queries("CREATE TABLE ".table($B)." (".implode(",",$la)."\n)");}if($Q!=$B)queries("EXEC sp_rename ".q(table($Q)).", ".q($B));if($ae)$b[""]=$ae;foreach($b
as$x=>$W){if(!queries("ALTER TABLE ".table($B)." $x".implode(",",$W)))return
false;}foreach($Gb
as$x=>$W){$Eb=substr($W,9);queries("EXEC sp_dropextendedproperty @name = N'MS_Description', @level0type = N'Schema', @level0name = ".q(get_schema()).", @level1type = N'Table', @level1name = ".q($B).", @level2type = N'Column', @level2name = ".q($x));queries("EXEC sp_addextendedproperty
@name = N'MS_Description',
@value = $Eb,
@level0type = N'Schema',
@level0name = ".q(get_schema()).",
@level1type = N'Table',
@level1name = ".q($B).",
@level2type = N'Column',
@level2name = ".q($x));}return
true;}function
alter_indexes($Q,$b){$v=array();$Sc=array();foreach($b
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$Sc[]=idf_escape($W[1]);else$v[]=idf_escape($W[1])." ON ".table($Q);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$W[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Sc||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Sc)));}function
found_rows(array$R,array$Z){}function
foreign_keys($Q){$H=array();$Wh=array("CASCADE","NO ACTION","SET NULL","SET DEFAULT");$K=get_schema();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q).", @fktable_owner = ".q($K))as$I){$p=&$H[$I["FK_NAME"]];$p["db"]=($I["PKTABLE_QUALIFIER"]==DB?"":$I["PKTABLE_QUALIFIER"]);$p["ns"]=($I["PKTABLE_OWNER"]==$K?"":$I["PKTABLE_OWNER"]);$p["table"]=$I["PKTABLE_NAME"];$p["on_update"]=$Wh[$I["UPDATE_RULE"]];$p["on_delete"]=$Wh[$I["DELETE_RULE"]];$p["source"][]=$I["FKCOLUMN_NAME"];$p["target"][]=$I["PKCOLUMN_NAME"];}return$H;}function
truncate_tables(array$S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views(array$jn){return
queries("DROP VIEW ".implode(", ",array_map('Adminer\table',$jn)));}function
drop_tables(array$S){return
queries("DROP TABLE ".implode(", ",array_map('Adminer\table',$S)));}function
move_tables(array$S,array$jn,$Nl){return
apply_queries("ALTER SCHEMA ".idf_escape($Nl)." TRANSFER",array_merge($S,$jn));}function
trigger($B,$Q){if($B=="")return
array();$J=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT'
	WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE'
	WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($B));$H=reset($J);if($H)$H["Statement"]=preg_replace('~^.+\s+AS\s+~isU','',$H["text"]);return($H?:array());}function
triggers($Q){$H=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT'
	WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE'
	WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$I)$H[$I["name"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
routine($B,$T){$xc=get_val("SELECT m.definition
FROM sys.objects o
JOIN sys.sql_modules m ON m.object_id = o.object_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.name = ".q($B)." AND o.type = ".q($T=="PROCEDURE"?"P":"FN"));if(!$xc)return
array();$H=array("definition"=>preg_replace('~^(?:[^[]|\[[^]]*])*\s+AS\s+~isU','',$xc),"fields"=>array());foreach(get_rows("SELECT p.name, TYPE_NAME(p.user_type_id) [type], p.max_length, p.precision, p.scale, p.is_output
FROM sys.parameters p
JOIN sys.objects o ON p.object_id = o.object_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.name = ".q($B)."
ORDER BY p.parameter_id")as$I){$Ld=$I["type"];$y=type_length($Ld,$I);$m=array("field"=>preg_replace('~^@~','',$I["name"]),"type"=>$Ld,"length"=>$y,"full_type"=>$Ld.($y?"($y)":""),"null"=>true,"inout"=>($I["is_output"]?"OUTPUT":""),);if($m["field"]=="")$H["returns"]=$m;else$H["fields"][]=$m;}return$H;}function
routines(){return
get_rows("SELECT o.name SPECIFIC_NAME, o.name ROUTINE_NAME,
	CASE o.type WHEN 'P' THEN 'PROCEDURE' ELSE 'FUNCTION' END ROUTINE_TYPE, TYPE_NAME(p.user_type_id) DTD_IDENTIFIER
FROM sys.objects o
LEFT JOIN sys.parameters p ON o.object_id = p.object_id AND p.parameter_id = 0
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('P', 'FN')
ORDER BY o.name");}function
routine_languages(){return
array();}function
routine_options($Yj){return
array();}function
routine_id($B,array$I){return
table($B);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){if($_GET["ns"]!="")return$_GET["ns"];return
get_val("SELECT SCHEMA_NAME()");}function
set_schema($K,$g=null){$_GET["ns"]=$K;return!!get_val("SELECT 1 FROM sys.schemas WHERE name = ".q($K),0,$g);}function
create_sql($Q,$Ja,$nl){if(is_view(table_status1($Q))){$in=view($Q);return"CREATE VIEW ".table($Q)." AS $in[select]";}$n=array();$mj=false;foreach(fields($Q)as$B=>$m){$W=process_field($m,$m);if($W[6])$mj=true;$n[]=implode("",$W);}foreach(indexes($Q)as$B=>$v){if(!$mj||$v["type"]!="PRIMARY"){$e=array();foreach($v["columns"]as$x=>$W)$e[]=idf_escape($W).($v["descs"][$x]?" DESC":"");$B=idf_escape($B);$n[]=($v["type"]=="INDEX"?"INDEX $B":"CONSTRAINT $B ".($v["type"]=="UNIQUE"?"UNIQUE":"PRIMARY KEY"))." (".implode(", ",$e).")";}}foreach(driver()->checkConstraints($Q)as$B=>$mb)$n[]="CONSTRAINT ".idf_escape($B)." CHECK ($mb)";return"CREATE TABLE ".table($Q)." (\n\t".implode(",\n\t",$n)."\n)";}function
foreign_keys_sql($Q){$n=array();foreach(foreign_keys($Q)as$ae)$n[]=ltrim(format_foreign_key($ae));return($n?"ALTER TABLE ".table($Q)." ADD\n\t".implode(",\n\t",$n).";\n\n":"");}function
truncate_sql($Q){return"TRUNCATE TABLE ".table($Q);}function
use_sql($nc,$nl=""){return"USE ".idf_escape($nc);}function
use_schema_sql($K,$nl){$B=idf_escape($K);return($nl=="DROP+CREATE"?"DROP SCHEMA IF EXISTS $B;\n":"")."IF SCHEMA_ID(".q($K).") IS NULL EXEC(".q("CREATE SCHEMA $B").")";}function
trigger_sql($Q){$H="";foreach(triggers($Q)as$B=>$qm)$H
.=create_trigger(" ON ".table($Q),trigger($B,$Q)).";";return$H;}function
convert_field(array$m){}function
unconvert_field(array$m,$H){return$H;}function
support($Hd){return
preg_match('~^(check|comment|columns|database|drop_col|dump|fast_status|indexes|descidx|procedure|routine|scheme|sql|table|transaction_ddl|trigger|view|view_trigger)$~',$Hd);}}add_driver("oracle","Oracle");if(isset($_GET["oracle"])){define('Adminer\DRIVER',"oracle");function
easy_connect(array$M){return
url_host($M["host"]).($M["port"]!=""?":$M[port]":"").$M["path"];}if(extension_loaded("oci8")&&$_GET["ext"]!="pdo"){class
Db
extends
SqlDb{var$extension="oci8";private$link,$transaction=false;function
_error($md,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
attach(array$M,$U,$E){$this->link=@oci_new_connect($U,$E,easy_connect($M),"AL32UTF8");if($this->link){$this->server_info=oci_server_version($this->link);return'';}$l=oci_error();return($l?$l["message"]:lang(25));}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($nc){return$this->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($nc));}function
query($F,$Bm=false){$G=oci_parse($this->link,$F);$this->error="";if(!$G){$l=oci_error($this->link);$this->errno=$l["code"];$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$H=@oci_execute($G,($this->transaction?OCI_NO_AUTO_COMMIT:OCI_COMMIT_ON_SUCCESS));restore_error_handler();if($H){if(oci_num_fields($G))return
new
Result($G);$this->affected_rows=oci_num_rows($G);oci_free_statement($G);}return$H;}function
timeout($gh){return
function_exists('oci_set_call_timeout')&&oci_set_call_timeout($this->link,$gh);}function
inTransaction(){return$this->transaction;}function
begin(){$this->transaction=true;return
true;}function
commit(){return$this->end_transaction(@oci_commit($this->link));}function
rollback(){return$this->end_transaction(@oci_rollback($this->link));}private
function
end_transaction($H){$this->transaction=false;if(!$H){$l=oci_error($this->link);$this->errno=$l["code"];$this->error=$l["message"];}return$H;}}class
Result{var$num_rows;private$result,$offset=1;function
__construct($G){$this->result=$G;}private
function
convert($I){foreach((array)$I
as$x=>$W){if(is_a($W,'OCILob')||is_a($W,'OCI-Lob'))$I[$x]=$W->load();}return$I;}function
fetch_assoc(){return$this->convert(oci_fetch_assoc($this->result));}function
fetch_row(){return$this->convert(oci_fetch_row($this->result));}function
fetch_field(){$d=$this->offset++;$H=new
\stdClass;$H->name=oci_field_name($this->result,$d);$T=oci_field_type($this->result,$d);$H->native_type=idx(array(100=>"binary_float","binary_double"),$T,$T);return$H;}}}elseif(extension_loaded("pdo_oci")){class
Db
extends
PdoDb{var$extension="PDO_OCI";function
attach(array$M,$U,$E){return$this->dsn("oci:dbname=//".easy_connect($M).";charset=AL32UTF8",$U,$E);}function
select_db($nc){return$this->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($nc));}}}class
Driver
extends
SqlDriver{static$extensions=array("OCI8","PDO_OCI");static$jush="oracle";static$serverPath=true;var$insertFunctions=array("date"=>"current_date","timestamp"=>"current_timestamp",);var$editFunctions=array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",);var$functions=array("length","lower","round","upper");var$grouping=array("avg","count","count distinct","max","min","sum");function
operators($wl){return
array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");}static
function
connect($M,$U,$E){$f=parent::connect($M,$U,$E);if(is_object($f))$f->query("ALTER SESSION SET CURSOR_SHARING = FORCE"." NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'"." NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS.FF'"." NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS.FF TZH:TZM'");return$f;}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(28)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(29)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(30)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(31)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),lang(33)=>array("sdo_geometry"=>0),);}function
begin(){return$this->conn->begin();}function
convertSearch($u,array$W,array$m){$T=$m["type"];$Ri=strpos($W["op"],"LIKE")!==false;if($T=="xmltype")return"XMLSERIALIZE(CONTENT $u AS VARCHAR2(4000))";if($T=="json")return"JSON_SERIALIZE($u)";if(preg_match('~^(date|timestamp)~',$T))return"TO_CHAR($u, 'YYYY-MM-DD HH24:MI:SS')";if(preg_match('~char~',$T)||(preg_match('~clob~',$T)&&$Ri))return$u;return(!$Ri&&preg_match(number_type(),$T)?$u:"TO_CHAR($u)");}function
quoteBinary($gk){return"HEXTORAW(".q(bin2hex($gk)).")";}function
typeName(\stdClass$m){return
strtolower(parent::typeName($m));}function
hasCStyleEscapes(){return
true;}function
select($Q,array$L,array$Z,array$r,array$gi=array(),$z=1,$D=0,$oj=false){if(in_array("*",$L)){$Wb=array();$ee=false;foreach(fields($Q)as$B=>$m){$Fa=convert_field($m);$ee=($ee||$Fa);$Wb[]=($Fa?"$Fa AS ":"").idf_escape($B);}if($ee)$L=$Wb;}return
parent::select($Q,$L,$Z,$r,$gi,$z,$D,$oj);}function
allFields(){$H=array();$J=get_rows('SELECT c.table_name "tab", c.column_name "field", c.data_type "type", c.nullable "nullable",
	c.data_precision "precision", c.data_scale "scale", c.char_col_decl_length "char_length"
FROM all_tab_columns c
WHERE '.where_owner("c.owner").'
ORDER BY c.table_name, c.column_id',$this->conn);foreach($J
as$I){$y="$I[precision],$I[scale]";$I["length"]=($y==","?$I["char_length"]:$y);$I["type"]=strtolower($I["type"]);$I["null"]=($I["nullable"]=="Y");$H[$I["tab"]][]=$I;}return$H;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
get_databases($Yd){$H=get_vals("SELECT username FROM all_users WHERE oracle_maintained = 'N' ORDER BY 1");return($H?:get_vals("SELECT username FROM all_users ORDER BY 1"));}function
limit($F,$Z,$z,$Lh=0,$xk=" "){return($Lh?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $F$Z) t WHERE rownum <= ".($z+$Lh).") WHERE rnum > $Lh":($z?" * FROM (SELECT $F$Z) WHERE rownum <= ".($z+$Lh):" $F$Z"));}function
limit1($Q,$F,$Z,$xk="\n"){return" $F$Z";}function
db_collation($j,array$_b){return
get_val("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
logged_user(){return
get_val("SELECT USER FROM DUAL");}function
where_owner($vi="owner"){return"$vi = ".q(DB);}function
views_table($e){return"(SELECT $e FROM all_views WHERE ".where_owner().")";}function
objects_table(){return"(SELECT object_name, DECODE(object_type, 'VIEW', 'view', 'table') object_type FROM all_objects WHERE ".where_owner()." AND object_type IN ('TABLE', 'VIEW'))";}function
tables_list(){return
get_key_vals("SELECT * FROM ".objects_table()." ORDER BY 1");}function
count_tables(array$i){$H=array();foreach($i
as$j)$H[$j]=get_val("SELECT COUNT(*) FROM all_objects WHERE object_type IN ('TABLE', 'VIEW') AND owner = ".q($j));return$H;}function
table_status($B="",$Gd=false){$H=array();$mk=q($B);if($Gd||$B!=""){foreach(get_rows('SELECT object_name "Name", object_type "Engine" FROM '.objects_table().($B!=""?" WHERE object_name = $mk":"").' ORDER BY 1')as$I)$H[$I["Name"]]=$I;return$H;}foreach(get_rows('SELECT t.table_name "Name", \'table\' "Engine", s.bytes "Data_length", i.bytes "Index_length", t.num_rows "Rows"
FROM all_tables t
LEFT JOIN (SELECT segment_name, SUM(bytes) bytes FROM user_segments WHERE segment_type LIKE \'TABLE%\' GROUP BY segment_name) s ON s.segment_name = t.table_name
LEFT JOIN (SELECT i.table_name, SUM(s.bytes) bytes FROM user_indexes i
	JOIN user_segments s ON s.segment_name = i.index_name AND s.segment_type LIKE \'INDEX%\' GROUP BY i.table_name) i ON i.table_name = t.table_name
WHERE '.where_owner("t.owner")."
UNION SELECT view_name, 'view', 0, 0, 0 FROM ".views_table("view_name")."
ORDER BY 1")as$I)$H[$I["Name"]]=$I;return$H;}function
is_view(array$R){return$R["Engine"]=="view";}function
fk_support(array$R){return
true;}function
fields($Q){$H=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." AND ".where_owner()." ORDER BY column_id")as$I){$T=$I["DATA_TYPE"];$y="$I[DATA_PRECISION],$I[DATA_SCALE]";if($y==",")$y=$I["CHAR_COL_DECL_LENGTH"];$k=$I["DATA_DEFAULT"];if($k!==null){$k=rtrim($k);if(preg_match("~^'(.*)'\$~s",$k,$A))$k=str_replace("''","'",$A[1]);}$rj=array("insert"=>1,"select"=>1,"update"=>1,"order"=>1);if($I["DATA_TYPE_OWNER"]==""||$T=="XMLTYPE")$rj["where"]=1;$H[$I["COLUMN_NAME"]]=array("field"=>$I["COLUMN_NAME"],"full_type"=>$T.($y?"($y)":""),"type"=>strtolower($T),"length"=>$y,"default"=>$k,"null"=>($I["NULLABLE"]=="Y"),"privileges"=>$rj,);}return$H;}function
table_constraints($Q,$g=null){$H=array();foreach(get_rows('SELECT c.constraint_name "name", c.constraint_type "type", c.r_owner "r_owner", c.r_constraint_name "r_constraint", c.delete_rule "delete_rule", cc.column_name "column"
FROM all_constraints c
JOIN all_cons_columns cc ON cc.owner = c.owner AND cc.constraint_name = c.constraint_name
WHERE c.constraint_type IN (\'P\', \'U\', \'R\') AND '.where_owner("c.owner")." AND c.table_name = ".q($Q).'
ORDER BY cc.position',$g)as$I){$B=$I["name"];$H[$B]["type"]=$I["type"];$H[$B]["r_owner"]=$I["r_owner"];$H[$B]["r_constraint"]=$I["r_constraint"];$H[$B]["delete_rule"]=$I["delete_rule"];$H[$B]["columns"][]=$I["column"];}return$H;}function
indexes($Q,$g=null){$H=array();$Qb=array();foreach(table_constraints($Q,$g)as$B=>$Pb)$Qb[$B]=$Pb["type"];foreach(get_rows("SELECT aic.*, atc.data_default
FROM all_ind_columns aic
LEFT JOIN all_tab_cols atc ON aic.column_name = atc.column_name AND aic.table_name = atc.table_name AND aic.index_owner = atc.owner
WHERE aic.table_name = ".q($Q)." AND ".where_owner("aic.table_owner")."
ORDER BY aic.column_position",$g)as$I){$lf=$I["INDEX_NAME"];$Cb=$I["DATA_DEFAULT"];$Cb=($Cb?trim($Cb,'"'):$I["COLUMN_NAME"]);$T=idx($Qb,$lf);$H[$lf]["type"]=($T=="P"?"PRIMARY":($T=="U"?"UNIQUE":"INDEX"));$H[$lf]["columns"][]=$Cb;$H[$lf]["lengths"][]=($I["CHAR_LENGTH"]&&$I["CHAR_LENGTH"]!=$I["COLUMN_LENGTH"]?$I["CHAR_LENGTH"]:null);$H[$lf]["descs"][]=($I["DESCEND"]&&$I["DESCEND"]=="DESC"?'1':null);}uasort($H,function($ia,$Na){$gi=array("PRIMARY"=>0,"UNIQUE"=>1,"INDEX"=>2);return$gi[$ia["type"]]-$gi[$Na["type"]];});return$H;}function
view($B){$J=get_rows('SELECT text "select" FROM '.views_table("view_name, text").' WHERE view_name = '.q($B));return($J?$J[0]:array());}function
collations(){return
array();}function
information_schema($j,$K=""){return($K!=""?$K:$j)=="INFORMATION_SCHEMA";}function
error(){return
h(connection()->error);}function
explain(Db$f,$F){$f->query("EXPLAIN PLAN FOR $F");return$f->query("SELECT * FROM plan_table");}function
found_rows(array$R,array$Z){}function
auto_increment(){return"";}function
alter_table($Q,$B,array$n,array$ae,$Eb,$hd,$zb,$Ja,$Ii){$b=$Sc=array();$ni=($Q?fields($Q):array());foreach($n
as$m){$W=$m[1];if($W&&$m[0]!=""&&idf_escape($m[0])!=$W[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($m[0])." TO $W[0]");$mi=$ni[$m[0]];if($W&&$mi){$Nh=process_field($mi,$mi);if($W[2]==$Nh[2])$W[2]="";}if($W){list($W[2],$W[3])=array($W[3],$W[2]);$b[]=($Q!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($Q!=""?")":"");}else$Sc[]=idf_escape($m[0]);}if($Q=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",array_merge($b,$ae))."\n)");return(!$b||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$b)))&&(!$Sc||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Sc).")"))&&($Q==$B||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($B)));}function
alter_indexes($Q,$b){$Sc=array();$wj=array();foreach($b
as$W){if($W[0]!="INDEX"){$W[2]=preg_replace('~ DESC$~','',$W[2]);$h=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD".($W[1]!=""?" CONSTRAINT ".idf_escape($W[1]):"")." $W[0] ".($W[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$W[2]).")");array_unshift($wj,"ALTER TABLE ".table($Q).$h);}elseif($W[2]=="DROP")$Sc[]=idf_escape($W[1]);else$wj[]="CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$W[2]).")";}if($Sc)array_unshift($wj,"DROP INDEX ".implode(", ",$Sc));foreach($wj
as$F){if(!queries($F))return
false;}return
true;}function
foreign_keys($Q){$H=array();$Ql=array();foreach(table_constraints($Q)as$B=>$Pb){if($Pb["type"]=="R"){$H[$B]=array("source"=>$Pb["columns"],"target"=>array(),"on_delete"=>$Pb["delete_rule"],"on_update"=>null,);$Ql[$B]=array($Pb["r_owner"],$Pb["r_constraint"]);}}if($Ql){$Z=array();foreach($Ql
as$Nl)$Z[]="(owner = ".q($Nl[0])." AND constraint_name = ".q($Nl[1]).")";foreach(get_rows("SELECT owner, constraint_name, table_name, column_name FROM all_cons_columns WHERE ".implode(" OR ",array_unique($Z))." ORDER BY position")as$I){foreach($Ql
as$B=>$Nl){if($Nl==array($I["OWNER"],$I["CONSTRAINT_NAME"])){$H[$B]["db"]=$I["OWNER"];$H[$B]["table"]=$I["TABLE_NAME"];$H[$B]["target"][]=$I["COLUMN_NAME"];}}}}return$H;}function
trigger($B,$Q){if($B=="")return
array();$J=get_rows('SELECT trigger_name "Trigger", trigger_type "Type", triggering_event "Event", trigger_body "Statement"
FROM all_triggers
WHERE trigger_name = '.q($B)." AND ".where_owner());$H=reset($J);if($H){$T=$H["Type"];$H["Timing"]=(preg_match('~^(BEFORE|AFTER|INSTEAD OF)~',$T,$A)?$A[1]:$T);$H["Type"]=(preg_match('~EACH ROW~',$T)||$T=="INSTEAD OF"?"FOR EACH ROW":"");}return($H?:array());}function
triggers($Q){$H=array();foreach(get_rows("SELECT trigger_name, trigger_type, triggering_event FROM all_triggers WHERE table_name = ".q($Q)." AND ".where_owner())as$I)$H[$I["TRIGGER_NAME"]]=array(preg_replace('~ (STATEMENT|EACH ROW)$~','',$I["TRIGGER_TYPE"]),$I["TRIGGERING_EVENT"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE","INSERT OR UPDATE","INSERT OR DELETE","UPDATE OR DELETE","INSERT OR UPDATE OR DELETE"),"Type"=>array("FOR EACH ROW",""),);}function
truncate_tables(array$S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views(array$jn){return
apply_queries("DROP VIEW",$jn);}function
drop_tables(array$S){return
apply_queries("DROP TABLE",$S);}function
last_id($G){return"0";}function
create_database($j,$zb){$H=queries("CREATE USER ".idf_escape($j)." NO AUTHENTICATION");return($H?queries("GRANT UNLIMITED TABLESPACE TO ".idf_escape($j)):$H);}function
drop_databases(array$i){$H=true;foreach($i
as$j)$H=!!queries("DROP USER ".idf_escape($j)." CASCADE")&&$H;return$H;}function
rename_database($B,$zb){return!!queries("ALTER USER ".idf_escape(DB)." RENAME TO ".idf_escape($B));}function
show_variables(){return
get_rows('SELECT name, display_value FROM v$parameter');}function
show_status(){$H=array();$J=get_rows('SELECT * FROM v$instance');foreach(reset($J)as$x=>$W)$H[]=array($x,$W);return$H;}function
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
FROM v$session sess
LEFT JOIN v$sql sql ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
convert_field(array$m){if($m["type"]=="sdo_geometry")return"SDO_UTIL.TO_WKTGEOMETRY(".idf_escape($m["field"]).")";}function
unconvert_field(array$m,$H){return($m["type"]=="sdo_geometry"?"SDO_UTIL.FROM_WKTGEOMETRY($H)":$H);}function
support($Hd){return
preg_match('~^(columns|database|drop_col|fast_status|indexes|descidx|processlist|sql|status|table|trigger|variables|view|view_trigger)$~',$Hd);}}class
Adminer{static$instance;var$error='';function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'><img src='".h(preg_replace("~\\?.*~","",ME)."?file=logo.svg&version=6.1.0+452aa1c")."' width='24' height='24' alt='' id='logo'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
connectSsl(){}function
permanentLogin($h=false){return
password_file($h);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
verifyLoginToken(){return
true;}function
serverName($M){return
h($M);}function
database(){return
DB;}function
databases($Yd=true){return
get_databases($Yd);}function
pluginsLinks(){}function
operators($wl=null){return
driver()->operators($wl);}function
schemas(){$H=schemas();if($_GET["ns"]!=""&&!in_array($_GET["ns"],$H))array_unshift($H,$_GET["ns"]);return$H;}function
queryTimeout(){return
2;}function
afterConnect(){}function
headers(){}function
csp(array$ec){return$ec;}function
verifyVersion(){return
true;}function
serviceWorker(){service_worker();}function
manifest(){$Te=$_SERVER["HTTP_HOST"]?:$_SERVER["SERVER_NAME"];$vk=preg_replace('~\?.*~','',ME)?:'.';return
array('name'=>"Adminer".($Te!=""?" - $Te":""),'short_name'=>'Adminer','description'=>lang(37),'start_url'=>$vk,'scope'=>$vk,'display'=>'minimal-ui','icons'=>array(array('src'=>preg_replace("~\\?.*~","",ME)."?file=logo.svg&version=6.1.0+452aa1c",'sizes'=>'any','type'=>'image/svg+xml')),);}function
head($jc=null){return
true;}function
bodyClass(){echo" adminer";}function
css(){$H=array();foreach(array("","-dark")as$ch){$o="adminer$ch.css";if(file_exists($o)){$Nd=file_get_contents($o);$H["$o?v=".crc32($Nd)]=($ch?"dark":(preg_match('~prefers-color-scheme:\s*dark~',$Nd)?'':'light'));}}return$H;}function
loginForm(){echo"<table class='layout'>\n",adminer()->loginFormField('driver','<tr><th>'.lang(38).'<td>',html_select("auth[driver]",SqlDriver::$drivers,DRIVER,on('change','loginDriver'))),adminer()->loginFormField('server','<tr><th>'.lang(39).'<td>',"<input name='auth[server]' value='".h(SERVER)."' title='".lang(40)."' placeholder='localhost' autocapitalize='off'>"),adminer()->loginFormField('username','<tr><th>'.lang(41).'<td>','<input name="auth[username]" id="username" autofocus value="'.h($_GET["username"]).'" autocomplete="username" autocapitalize="off">'.script("fire(qs('#username').form['auth[driver]'], 'change');")),adminer()->loginFormField('password','<tr><th>'.lang(42).'<td>','<input type="password" name="auth[password]" autocomplete="current-password">'),adminer()->loginFormField('db','<tr><th>'.lang(43).'<td>','<input name="auth[db]" value="'.h($_GET["db"]).'" autocapitalize="off">'),"</table>\n","<p><input type='submit' value='".lang(44)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(45))."\n";}function
loginFormField($B,$Me,$X){return$Me.$X."\n";}function
login($ug,$E){if($E=="")return
lang(46).require_password_link(null);if(!Driver::$passwords)return
lang(47).require_password_link($E);if(!password_required())return
lang(48).require_password_link($E);return
true;}function
tableName(array$wl){return
h($wl["Name"]);}function
fieldName(array$m,$gi=0){$T=$m["full_type"].($m["null"]?" NULL":"");$Eb=$m["comment"];return'<span title="'.h($T.($Eb!=""?($T?": ":"").$Eb:'')).'">'.h($m["field"]).'</span>';}function
commentValue($T,$Eb){if($Eb==""||$T=='TABLE'||$T=='COLUMN')return
h($Eb);$gj=function($gk,$gb='td'){return
preg_replace('~^~m','<tr>',preg_replace('~\|~',"<$gb>",preg_replace('~\|$~m',"",rtrim($gk))));};$Q='(\+--[-+]+\+\n)';$I='(\| .* \|\n)';return"<pre>\n".preg_replace_callback("~^$Q?$I$Q?($I*)$Q?~m",function($A)use($gj){return"<table>\n".($A[1]?"<thead>".$gj($A[2],'th')."<tbody>\n":$gj($A[2])).$gj($A[4])."\n</table>";},preg_replace('~(\n(    -|mysql)&gt; )(.+)~',"\\1<code class='jush-sql'>\\3</code>",preg_replace('~(.+)\n---+\n~',"<b>\\1</b>\n",h($Eb))))."</pre>\n";}function
commentInput($T,$c,$Eb){$X=h($Eb);return(preg_match('~\n~',$X)?"<textarea$c rows='2' cols='".($T=='TABLE'?20:30)."' style='vertical-align: bottom;'>\n$X</textarea>":"<input$c value='$X'>");}function
selectLinks(array$wl,$N=""){$B=$wl["Name"];echo'<p class="links">';$pg=array();if($B!="")$pg["select"]=lang(49);if(support("table")||support("indexes"))$pg["table"]=lang(50);$Kf=false;if(support("table")){$Kf=is_view($wl);if($Kf){if(support("view"))$pg["view"]=lang(51);}elseif(function_exists('Adminer\alter_table')&&$B!="")$pg["create"]=lang(52);}if($N!==null)$pg["edit"]=lang(53);foreach($pg
as$x=>$W)echo" <a href='".h(ME)."$x=".url_escape($B).($x=="edit"?$N:"")."'".bold(isset($_GET[$x])).">$W</a>";echo
doc_link(array(JUSH=>driver()->tableHelp($B,$Kf)),"?"),"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$vl){return
array();}function
backwardKeysPrint(array$Pa,array$I){}function
selectQuery($F,$hl,$Fd=false){$H="\n";if(!$Fd&&($nn=driver()->warnings())){$t="warnings";$H=", <a href='#$t' class='toggle'>".lang(54)."</a>"."$H<div id='$t' class='hidden'>\n$nn</div>\n";}return"<p><code class='jush-".JUSH."'>".h(str_replace("\n"," ",$F))."</code> <span class='time'>(".format_time($hl).")</span>".(support("sql")?" <a href='".h(ME)."sql=".url_escape($F)."' class='hover'>".lang(13)."</a>":"").$H;}function
sqlCommandQuery($F){return
shorten_utf8(trim($F),1000);}function
sqlPrintAfter(){}function
explain(Db$f,$F,array$ki){$G=explain($f,$F);if(!$G)return"";ob_start();print_select_result($G,$f,$ki);return
ob_get_clean();}function
rowDescription($Q){return"";}function
rowDescriptions(array$J,array$be){return$J;}function
selectLink($W,array$m){}function
selectVal($W,$_,array$m,$qi){$H=($W===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$m["type"])&&!preg_match("~var~",$m["type"])?"<code>$W</code>":(preg_match('~^jsonb?$~',$m["full_type"])?"<code class='jush-json'>$W</code>":$W)));if(is_blob($m)&&!is_utf8($W))$H="<i>".lang(55,strlen($qi))."</i>";return($_?"<a href='".h($_)."'".(is_url($_)?target_blank():"").">$H</a>":$H);}function
editVal($W,array$m){return$W;}function
config(){return
array();}function
tableStructurePrint(array$n,$wl=null){echo"<div class='scrollable'>\n","<table class='nowrap odds'>\n","<thead><tr><th>".lang(56)."<th>".lang(57).(support("comment")?"<th>".lang(58):"")."<tbody>\n";$Ym=(support("type")?types():array());foreach($n
as$m){echo"<tr><th>".h($m["field"]);$T=h($m["full_type"]);$zb=h($m["collation"]);echo"<td><span title='$zb'>".(in_array($T,$Ym)?"<a href='".h(ME.'type='.url_escape($T))."'>$T</a>":$T.($zb&&isset($wl["Collation"])&&$zb!=$wl["Collation"]?" $zb":""))."</span>",($m["null"]?" <i>NULL</i>":""),($m["auto_increment"]?" <i>".lang(59)."</i>":""),(isset($m["default"])?" <span title='".lang(60)."'>[<b>".($m["generated"]?"<code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim($m["default"])),80,"</code>"):h($m["default"]))."</b>]</span>":""),(support("comment")?"<td>".adminer()->commentValue('COLUMN',$m["comment"]):""),"\n";}echo"</table>\n","</div>\n";}function
tableIndexesPrint(array$w,array$wl){$Di=false;foreach($w
as$B=>$v)$Di|=!!$v["partial"];echo"<table>\n";$tc=first(driver()->indexAlgorithms($wl));foreach($w
as$B=>$v){ksort($v["columns"]);$oj=array();foreach($v["columns"]as$x=>$W)$oj[]="<i>".h($W)."</i>".($v["lengths"][$x]?"(".h($v["lengths"][$x]).")":"").($v["descs"][$x]?" DESC":"");echo"<tr title='".h($B)."'>","<th>".h($v["type"]).($tc&&$v['algorithm']!=$tc?" (".h($v['algorithm']).")":""),"<td>".implode(", ",$oj);if($Di)echo"<td>".($v['partial']?"<code class='jush-".JUSH."'>WHERE ".h($v['partial']):"");echo"\n";}echo"</table>\n";}function
selectColumnsPrint(array$L,array$e){print_fieldset("select",lang(61),$L);$s=0;$L[""]=array();foreach($L
as$x=>$W){$W=idx($_GET["columns"],$x,array());$d=select_input(" name='columns[$s][col]' data-default=''".on('change',($x!==""?'selectFieldChange':'selectAddRow')),$e,$W["col"]);echo"<div>".(driver()->functions||driver()->grouping?html_select("columns[$s][fun]",array(-1=>"")+array_filter(array(lang(62)=>driver()->functions,lang(63)=>driver()->grouping)),$W["fun"]," data-default=''".on('change',($x!==""?'helpClose':'selectFunAddRow')).on_help_value(' (.*)|$','($1)'))."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint(array$Z,array$e,array$w,$wl=null){print_fieldset("search",lang(64),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT")echo"<div>(<i>".implode("</i>, <i>",array_map('Adminer\h',$v["columns"]))."</i>) ".h(driver()->fulltextOperator)," <input type='search' name='fulltext[$s]' value='".h(idx($_GET["fulltext"],$s))."' data-default=''".on('input','selectFieldChange').">",(JUSH=='sql'?checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"):''),"</div>\n";}$bi=adminer()->operators($wl);foreach(array_merge((array)$_GET["where"],array(array()))as$s=>$W){if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$bi)))echo"<div>".select_input(" name='where[$s][col]' data-default=''".on('change',($W?'selectFieldChange':'selectAddRow')),$e,$W["col"],"(".lang(65).")"),html_select("where[$s][op]",$bi,$W["op"]," data-default='".h(first($bi))."'".on('change','selectFirstChange')),"<input type='search' name='where[$s][val]' value='".h($W["val"])."' data-default=''".on('input','selectFirstChange').on('keydown','selectSearchKeydown').on('search','selectSearchSearch').">","</div>\n";}echo"</div></fieldset>\n";}function
selectOrderPrint(array$gi,array$e,array$w){print_fieldset("sort",lang(66),$gi);$s=0;foreach((array)$_GET["order"]as$x=>$W){if($W!=""){echo"<div>".select_input(" name='order[$s]' data-default=''".on('change','selectFieldChange'),$e,$W),checkbox("desc[$s]",1,isset($_GET["desc"][$x]),lang(67))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' data-default=''".on('change','selectAddRow'),$e),checkbox("desc[$s]",1,false,lang(67))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(68)."</legend><div>","<input type='number' name='limit' class='size' value='".h($z?:"")."' data-default='50'".on('input','selectFieldChange').">","</div></fieldset>\n";}function
selectLengthPrint($Ul){echo"<fieldset><legend>".lang(69)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Ul)."' data-default='100'>","</div></fieldset>\n";}function
selectActionPrint(array$w){echo"<fieldset><legend>".lang(70)."</legend><div>","<input type='submit' value='".lang(61)."'>"," <span id='noindex' title='".lang(71)."'></span>","<script".nonce().">\n","const indexColumns = ";$e=array();foreach($w
as$v){$ic=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$ic)$e[$ic]=1;}$e[""]=1;foreach($e
as$x=>$W)json_row($x);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint(array$ed,array$e){}function
selectColumnsProcess(array$e,array$w){$L=array();$r=array();foreach((array)$_GET["columns"]as$x=>$W){if($W["fun"]=="count"||($W["col"]!=""&&(!$W["fun"]||in_array($W["fun"],driver()->functions)||in_array($W["fun"],driver()->grouping)))){$L[$x]=apply_sql_function($W["fun"],($W["col"]!=""?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],driver()->grouping))$r[]=$L[$x];}}return
array($L,$r);}function
selectSearchProcess(array$n,array$w,$wl=null){$H=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&idx($_GET["fulltext"],$s)!="")$H[]=driver()->fulltextSql($s,$v,$_GET["fulltext"][$s],isset($_GET["boolean"][$s]));}$bi=adminer()->operators($wl);foreach((array)$_GET["where"]as$x=>$W){$W+=array("col"=>"","op"=>first($bi),"val"=>"");$_GET["where"][$x]=$W;$xb=$W["col"];if("$xb$W[val]"!=""&&in_array($W["op"],$bi)){if($W["op"]=="SQL"&&(!$_POST||!verify_token()))SqlDb::$untrusted=true;$Jb=array();foreach(($xb!=""?array($xb=>$n[$xb]):$n)as$B=>$m){$hj="";$Ib=" $W[op]";if(preg_match('~IN$~',$W["op"]))$Ib
.=" ".($W["val"]!=""?process_in($W["val"]):"(NULL)");elseif($W["op"]=="SQL")$Ib=" $W[val]";elseif(preg_match('~^(I?LIKE) %%$~',$W["op"],$A))$Ib=" $A[1] ".q("%$W[val]%");elseif($W["op"]=="FIND_IN_SET"){$hj="$W[op](".q($W["val"]).", ";$Ib=")";}elseif(!preg_match('~NULL$~',$W["op"]))$Ib
.=" ".q($W["val"]);if($xb!=""||is_searchable($m,$W))$Jb[]=$hj.driver()->convertSearch(idf_escape($B),$W,$m).$Ib;}$H[]=(count($Jb)==1?$Jb[0]:($Jb?"(".implode(" OR ",$Jb).")":"1 = 0"));}}return$H;}function
selectOrderProcess(array$n,array$w){$H=array();foreach((array)$_GET["order"]as$x=>$W){if($W!="")$H[]=(preg_match('~^((COUNT\(DISTINCT |[A-Z0-9_]+\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\)|COUNT\(\*\))$~',$W)?$W:idf_escape($W)).(isset($_GET["desc"][$x])?" DESC".(JUSH=='pgsql'&&idx($n[$W],"null")?" NULLS LAST":""):"");}return$H;}function
selectLimitProcess(){return(isset($_GET["limit"])?intval($_GET["limit"]):50);}function
selectLengthProcess(){return(isset($_GET["text_length"])?"$_GET[text_length]":"100");}function
selectEmailProcess(array$Z,array$be){return
false;}function
selectQueryBuild(array$L,array$Z,array$r,array$gi,$z,$D){return"";}function
messageQuery($F,$Wl,$Fd=false){restart_session();$Qe=&get_session("queries");if(!idx($Qe,$_GET["db"]))$Qe[$_GET["db"]]=array();if(strlen($F)>1e6)$F=preg_replace('~[\x80-\xFF]+$~','',substr($F,0,1e6))."\n…";$Qe[$_GET["db"]][]=array($F,time(),$Wl);$cl="sql-".count($Qe[$_GET["db"]]);$H="<a href='#$cl' class='toggle'>".lang(72)."</a> ".copy_icon()."\n";if(!$Fd&&($nn=driver()->warnings())){$t="warnings-".count($Qe[$_GET["db"]]);$H="<a href='#$t' class='toggle'>".lang(54)."</a>, $H<div id='$t' class='hidden'>\n$nn</div>\n";}return" <span class='time'>".@date("H:i:s")."</span>"." $H<div id='$cl' class='hidden'><pre><code class='jush-".JUSH."'>".shorten_utf8($F,1e4)."</code></pre>".($Wl?" <span class='time'>($Wl)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".url_escape(DB),"db=".url_escape($_GET["db"]),ME).'sql=&history='.(count($Qe[$_GET["db"]])-1)).'">'.lang(13).'</a>':'').'</div>';}function
error(){return
error();}function
editRowPrint($Q,array$n,$I,$Lm,$F='',$Wl=''){echo($F!=""?"<p><code class='jush-".JUSH."'>".h(str_replace("\n"," ",$F))."</code> <span class='time'>($Wl)</span>\n":"");}function
editFunctions(array$m){$H=($m["null"]?"NULL/":"");$Ie=isset($_GET["select"])||where($_GET);foreach(array(driver()->insertFunctions,driver()->editFunctions)as$x=>$pe){if(!$x||(!isset($_GET["call"])&&$Ie)){foreach($pe
as$Ri=>$W){if(!$Ri||preg_match("~$Ri~",$m["type"]))$H
.="/$W";}}if($x&&$pe&&!preg_match('~set|bool~',$m["type"])&&!is_blob($m))$H
.="/SQL";}if($m["auto_increment"]&&!$Ie)$H=lang(59);return
explode("/",$H);}function
editInput($Q,array$m,$c,$X){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='orig' checked><i>".lang(11)."</i></label> ":"").enum_input("radio",$c,$m,$X,"NULL");return"";}function
editHint($Q,array$m,$X){return"";}function
processInput(array$m,$X,$q=""){if($q=="SQL")return$X;$B=$m["field"];$H=q($X);if(preg_match('~^(now|getdate|uuid)$~',$q))$H="$q()";elseif(preg_match('~^current_(date|timestamp)$~',$q))$H=$q;elseif(preg_match('~^([+-]|\|\|)$~',$q))$H=idf_escape($B)." $q $H";elseif(preg_match('~^[+-] interval$~',$q))$H=idf_escape($B)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$X)&&JUSH!="pgsql"?$X:$H);elseif(preg_match('~^(addtime|subtime|concat)$~',$q))$H="$q(".idf_escape($B).", $H)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$q))$H="$q($H)";return
unconvert_field($m,$H);}function
dumpOutput(){$H=array('text'=>lang(73),'file'=>lang(74));if(function_exists('gzencode'))$H['gz']='gzip';return$H;}function
dumpFormat(){return(support("dump")?array('sql'=>'SQL'):array())+array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpPrint(){}function
dumpDatabase($j){}function
dumpTable($Q,$nl,$Kf=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($nl)dump_csv(array_keys(fields($Q)));}else{if($Kf==2){$n=array();foreach(fields($Q)as$B=>$m)$n[]=idf_escape($B)." $m[full_type]";$h="CREATE TABLE ".table($Q)." (".implode(", ",$n).")";}else$h=create_sql($Q,$_POST["auto_increment"],$nl);set_utf8mb4($h);if($nl&&$h){if(($nl=="DROP+CREATE"&&!function_exists('Adminer\drop_sql'))||$Kf==1)echo"DROP ".($Kf==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Kf==1)$h=remove_definer($h);echo"$h;\n\n";}}}function
dumpData($Q,$nl,$F,array$L=array(),array$Z=array(),array$r=array(),array$gi=array()){if($nl){$Eg=(JUSH=="sqlite"?0:1048576);$n=array();$Ze=false;if($_POST["format"]=="sql"){if($nl=="TRUNCATE+INSERT"&&!function_exists('Adminer\truncate_all_sql'))echo
truncate_sql($Q).";\n";$n=fields($Q);if(JUSH=="mssql"){foreach($n
as$m){if($m["auto_increment"]){echo"SET IDENTITY_INSERT ".table($Q)." ON;\n";$Ze=true;break;}}}}$G=($F!=""?connection()->query($F,1):driver()->select($Q,($L?:array("*")),$Z,$r,$gi,0));if($G){$wf="";$ab="";$Sf=array();$qe=array();$pl="";$Id=($Q!=''?'fetch_assoc':'fetch_row');$ac=0;while($I=$G->$Id()){if(!$Sf){$Y=array();foreach($I
as$W){$m=$G->fetch_field();if(idx($n[$m->name],'generated')){$qe[$m->name]=true;continue;}$Sf[]=$m->name;$x=idf_escape($m->name);$Y[]="$x = VALUES($x)";}$pl=($nl=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Y):"").";\n";}if($_POST["format"]!="sql"){if($nl=="table"){dump_csv($Sf);$nl="INSERT";}dump_csv($I);}else{if(!$wf)$wf="INSERT INTO ".table($Q)." (".implode(", ",array_map('Adminer\idf_escape',$Sf)).") VALUES";foreach($I
as$x=>$W){if($qe[$x]){unset($I[$x]);continue;}$m=$n[$x];$I[$x]=($W===null?"NULL":($W===false?0:unconvert_field($m,preg_match(number_type(),$m["type"])&&!preg_match('~\[~',$m["full_type"])&&is_numeric($W)?$W:(!is_blob($m)||is_utf8($W)?q($W):driver()->quoteBinary($W)))));}$gk=($Eg?"\n":" ")."(".implode(",\t",$I).")";if(!$ab)$ab=$wf.$gk;elseif(JUSH=='mssql'?$ac%1000!=0:strlen($ab)+4+strlen($gk)+strlen($pl)<$Eg)$ab
.=",$gk";else{echo$ab.$pl;$ab=$wf.$gk;}}$ac++;}if($ab)echo$ab.$pl;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",connection()->error)."\n";if($Ze)echo"SET IDENTITY_INSERT ".table($Q)." OFF;\n";}}function
dumpFilename($Xe){return
friendly_url($Xe!=""?$Xe:(SERVER?:"localhost"));}function
dumpHeaders($Xe,$ih=false){$ui=$_POST["output"];$Ad=(preg_match('~sql~',$_POST["format"])?"sql":($ih?"tar":"csv"));header("Content-Type: ".($ui=="gz"?"application/x-gzip":($Ad=="tar"?"application/x-tar":($Ad=="sql"||$ui!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($ui=="gz"){ob_start(function($P){return
gzencode($P);},1e6);}return$Ad;}function
dumpFooter(){if($_POST["format"]=="sql")echo"-- ".gmdate("Y-m-d H:i:s e")."\n";}function
importServerPath(){return"adminer.sql";}function
importPrint(){}function
importProcess(){return
false;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(75)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(76):lang(77))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(78)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(79)."</a>\n":"");if($_GET["ns"]!=="")echo(support("routine")?"<a href='#routines'>".lang(80)."</a>\n":""),(support("sequence")?"<a href='#sequences'>".lang(81)."</a>\n":""),(support("type")?"<a href='#user-types'>".lang(7)."</a>\n":""),(support("event")?"<a href='#events'>".lang(82)."</a>\n":"");return
true;}function
navigation($bh){echo"<h1>".adminer()->name()." <span class='version'>".VERSION;$yh=$_COOKIE["adminer_version"];echo" <a href='https://www.adminer.org/#download'".target_blank()." id='version'>".(version_compare(VERSION,$yh)<0?h($yh):"").version_iframe()."</a>","</span></h1>\n";switch_lang();if($bh=="auth"){$ui="";foreach((array)$_SESSION["pwds"]as$gn=>$Ik){foreach($Ik
as$M=>$Zm){$B=h(get_setting("vendor-$gn-$M")?:get_driver($gn));foreach($Zm
as$U=>$E){if($B&&$E!==null){$rc=$_SESSION["db"][$gn][$M][$U];foreach(($rc?array_keys($rc):array(""))as$j)$ui
.="<li><a href='".h(auth_url($gn,$M,$U,$j))."'>($B) ".h("$U@").($M!=""?adminer()->serverName($M):"").h($j!=""?" - $j":"")."</a>\n";}}}}if($ui)echo"<ul id='logins'".on('mouseover','menuOver').on('mouseout','menuOut').">\n$ui</ul>\n";}else{$S=array();if($_GET["ns"]!==""&&!$bh&&DB!=""){connection()->select_db(DB);$S=table_status('',true);}adminer()->syntaxHighlighting($S);adminer()->databasesPrint($bh);$ka=array();if(DB==""||!$bh){if(support("sql")){$ka['sql']="<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(72)."</a>";$ka['import']="<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(83)."</a>";}$ka['dump']="<a href='".h(ME)."dump=".url_escape(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(84)."</a>";}$ff=$_GET["ns"]!==""&&!$bh&&DB!="";if($ff&&function_exists('Adminer\alter_table'))$ka['create']='<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(85)."</a>";$ka=adminer()->menuActions($ka,$bh);echo($ka?"<p class='links'>\n".implode("\n",$ka)."\n":"");if($ff){if($S)adminer()->tablesPrint($S);else
echo"<p class='message'>".lang(12)."</p>\n";}}}function
syntaxHighlighting(array$S){echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=6.1.0+452aa1c",true);$eh=preg_replace('~<(?=/script)~i','<\\',Driver::jushModule());echo($eh?script("addEventListener('DOMContentLoaded', () => {\n$eh\n});"):"");if(support("sql")){echo"<script".nonce().">\n";if($S){$pg=array();foreach($S
as$Q=>$T)$pg[]=js_escape_re($Q);echo"var jushLinks = { ".JUSH.":";json_row(js_escape(ME).(support("table")?"table":"select").'=$&','/\b(?<!\$)('.implode('|',$pg).')(?!\$)\b/g',false);$el=array("sql","check","event","procedure","trigger","view","type","table","processlist");if(support("routine")&&array_intersect_key($_GET,array_flip($el))){foreach(routines()as$I)json_row(js_escape(ME).'function='.url_escape($I["SPECIFIC_NAME"]).'&name=$&','/\b'.js_escape_re($I["ROUTINE_NAME"]).'(?=["`\]]?\()/g',false);}json_row('');echo"};\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.".JUSH.";\n";if(array_intersect_key($_GET,array_flip(array("sql","check","event","procedure","trigger","view")))){$il=(isset($_GET["trigger"])?array('INSERT INTO','UPDATE','DELETE FROM'):(isset($_GET["check"])?array():(isset($_GET["view"])?array('SELECT'):null)));$La=Driver::jushAutocomplete($S,$il);echo($La?"addEventListener('DOMContentLoaded', () => { autocompleter = $La; });\n":"");}}echo"</script>\n";}echo
script("syntaxHighlighting('".doc_version()."', '".connection()->flavor."');");}function
databasesPrint($bh){if(support("single_db"))return;$i=adminer()->databases();if(DB&&$i&&!in_array(DB,$i))array_unshift($i,DB);echo"<form action=''>\n<p id='dbs'>\n";hidden_fields_get();$oc=on('mousedown','dbMouseDown').on('change','dbChange');echo"<label title='".lang(43)."'>".lang(86).": ".($i?html_select("db",array(""=>"")+$i,DB,$oc):"<input name='db' value='".h(DB)."' autocapitalize='off' size='19'>\n")."</label>","<input type='submit' value='".lang(24)."'".($i?" class='hidden'":"").">\n";if(support("scheme")){if($bh!="db"&&DB!=""&&connection()->select_db(DB)){echo"<br><label>".lang(87).": ".html_select("ns",array(""=>"")+adminer()->schemas(),$_GET["ns"],$oc)."</label>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}foreach(array("import","sql","schema","dump","privileges")as$W){if(isset($_GET[$W])){echo
input_hidden($W);break;}}echo"</p></form>\n";}function
menuActions(array$ka,$bh){return$ka;}function
tablesPrint(array$S){echo"<ul id='tables'".on('mouseover','menuOver').on('mouseout','menuOut').">";foreach($S
as$Q=>$O){$Q="$Q";$B=adminer()->tableName($O);if($B!=""&&!$O["dependent"])echo'<li><a href="'.h(ME).'select='.url_escape($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select hover")." title='".lang(49)."'>".lang(88)."</a> ",(support("table")||support("indexes")?'<a href="'.h(ME).'table='.url_escape($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"],$_GET["check"],$_GET["view"])),(is_view($O)?"view":"structure"))." title='".lang(50)."'>$B</a>":"<span>$B</span>")."\n";}echo"</ul>\n";}function
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
__construct($Yi){$Rc=SqlDriver::$drivers;$Oe=" href='https://www.adminer.org/plugins/#use'".target_blank();if($Yi===null){$Yi=array();$Ta="adminer-plugins";if(is_dir($Ta)){foreach(glob("$Ta/*.php")as$o){$Od=SqlDriver::$drivers;$this->includeOnce($o);foreach(array_diff_key(SqlDriver::$drivers,$Od)as$t=>$B)$this->driverFiles[$t]=$o;}}if(file_exists("$Ta.php")){$hf=$this->includeOnce("$Ta.php");if(is_array($hf)){foreach($hf
as$x=>$Vi)$Yi[is_object($Vi)?get_class($Vi):$x]=$Vi;}else$this->error
.=lang(89,"<b>$Ta.php</b>",$Oe)."<br>";}foreach(get_declared_classes()as$ub){if(!$Yi[$ub]&&(preg_match('~^Adminer\w~i',$ub)||is_subclass_of($ub,'Adminer\Plugin'))){$Gj=new
\ReflectionClass($ub);$Rb=$Gj->getConstructor();if($Rb&&$Rb->getNumberOfRequiredParameters())$this->error
.=lang(90,$Oe,"<b>$ub</b>","<b>$Ta.php</b>")."<br>";else$Yi[$ub]=new$ub;}}}$Af=array_filter($Yi,function($Vi){return!is_object($Vi);});if($Af){$this->error
.=lang(91,$Oe)."<br>";$Yi=array_diff_key($Yi,$Af);}$this->drivers=array_diff_key(SqlDriver::$drivers,$Rc);$this->plugins=$Yi;$pa=new
Adminer;$Yi[]=$pa;$Gj=new
\ReflectionObject($pa);foreach($Gj->getMethods()as$Yg){foreach($Yi
as$Vi){$B=$Yg->getName();if(method_exists($Vi,$B))$this->hooks[$B][]=$Vi;}}}function
includeOnce($o){return
include_once"./$o";}static
function
checksum($o){$Nd=str_replace("\r","",file_get_contents($o));$Nd=preg_replace('~\n\tprotected \$translations = array\(.*?\n\t\);~s','',$Nd);return
dechex(crc32($Nd));}function
checksums(){$Pd=array_values($this->driverFiles);foreach($this->plugins
as$Vi){$Gj=new
\ReflectionObject($Vi);$Pd[]=$Gj->getFileName();}$H=array();foreach($Pd
as$o)$H[basename($o,'.php')]=self::checksum($o);return$H;}static
function
officialChecksums(){return
array('adminer.js'=>'a0599090','backward-keys'=>'ed1ef78f','before-unload'=>'2a613523','config'=>'722eb4af','dark-switcher'=>'3d490dea','database-hide'=>'e304a899','designs'=>'ed7e44e3','dump-alter'=>'896b579e','dump-bz2'=>'f0d0e336','dump-date'=>'adc7f1c7','dump-json'=>'767dd321','dump-xml'=>'4fc3cd60','dump-zip'=>'93817d96','edit-foreign'=>'72ad1562','edit-textarea'=>'a24c3cc','editor-setup'=>'a7dc3a37','editor-views'=>'5c12b185','enum-option'=>'1e24970e','file-upload'=>'10add0e8','foreign-system'=>'ebb4c654','frames'=>'b0e1d11a','highlight-codemirror'=>'c5716555','highlight-monaco'=>'edd1b0af','highlight-prism'=>'267948e5','import-csv'=>'d429c77','login-ip'=>'4d174fea','login-otp'=>'5b5a68af','login-passkey'=>'f69f2f06','login-password-less'=>'e150daac','login-reverse-proxy'=>'24558ea2','login-servers'=>'19c42e45','login-ssl'=>'6ed147bc','login-table'=>'811f8cef','menu-links'=>'c78461b3','remote-color'=>'ddeecc48','row-numbers'=>'eec8698c','select-email'=>'f84fbd2c','select-image'=>'f55c0231','slugify'=>'dec64713','sql-gemini'=>'c60ab309','sql-log'=>'8e435000','table-indexes-structure'=>'a90cc0c9','table-structure'=>'a8458e02','tables-filter'=>'ec2bcd6e','timeout'=>'97321caf','version-github'=>'627cadf9','version-noverify'=>'966937e9','clickhouse'=>'ed04ed31','elastic'=>'af0361c1','firebird'=>'99307ba8','igdb'=>'db772c05','imap'=>'385b5247','mongo'=>'f75dfcf','redis'=>'139ed221','simpledb'=>'d2226cc',);}function
__call($B,array$Ai){$Da=array();foreach($Ai
as$x=>$W)$Da[]=&$Ai[$x];$H=null;foreach($this->hooks[$B]as$Vi){$X=call_user_func_array(array($Vi,$B),$Da);if($X!==null){if(!self::$append[$B])return$X;$H=$X+(array)$H;}}return$H;}}abstract
class
Plugin{protected$translations=array();function
description(){return$this->lang('');}function
screenshot(){return"";}protected
function
lang($u,$Eh=null){$Da=func_get_args();$Da[0]=idx($this->translations[LANG],$u)?:$u;return
call_user_func_array('Adminer\lang_format',$Da);}}class
Password{private$password_hash;private$password_matches=null;function
__construct($Ni){$this->password_hash=$Ni;}function
description(){return
lang(92);}function
credentials(){$E=get_password();return
array(SERVER,$_GET["username"],($this->passwordMatches($E)&&!password_required()?"":$E));}function
login($ug,$E){if($this->passwordMatches($E))return
true;}protected
function
passwordMatches($E){if($this->password_matches===null)$this->password_matches=(function_exists('password_verify')&&password_verify(strval($E),$this->password_hash));return$this->password_matches;}}Adminer::$instance=(function_exists('adminer_object')?adminer_object():(is_dir("adminer-plugins")||file_exists("adminer-plugins.php")?new
Plugins(null):new
Adminer));SqlDriver::$drivers=array("server"=>"MySQL / MariaDB")+SqlDriver::$drivers;if(!defined('Adminer\DRIVER')){define('Adminer\DRIVER',"server");if(extension_loaded("mysqli")&&$_GET["ext"]!="pdo"){class
Db
extends
\mysqli{static$instance;var$extension="MySQLi",$flavor='';function
__construct(){parent::init();}function
attach(array$M,$U,$E){mysqli_report(MYSQLI_REPORT_OFF);$Zi=$M["port"];$gd=("$M[host]$Zi$M[socket]"=="");$gl=adminer()->connectSsl();$Vm=($gl&&($gl['key']||$gl['cert']||$gl['ca']||isset($gl['verify'])));if($Vm)$this->ssl_set($gl['key'],$gl['cert'],$gl['ca'],'','');$H=@$this->real_connect((!$gd?$M["host"]:ini_get("mysqli.default_host")),(!$gd||$U!=""?$U:ini_get("mysqli.default_user")),(!$gd||$U.$E!=""?$E:ini_get("mysqli.default_pw")),null,($Zi!=""?intval($Zi):ini_get("mysqli.default_port")),($Zi!=""?null:$M["socket"]),($Vm?($gl['verify']!==false?MYSQLI_CLIENT_SSL:64):0));$this->options(MYSQLI_OPT_LOCAL_INFILE,0);return($H?'':$this->error);}function
set_charset($kb){if(parent::set_charset($kb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $kb");}function
next_result(){return
self::more_results()&&parent::next_result();}function
quote($P){return"'".$this->escape_string($P)."'";}function
inTransaction(){return
false;}function
begin(){return$this->begin_transaction();}}}elseif(extension_loaded("mysql")&&!((ini_bool("sql.safe_mode")||ini_bool("mysql.allow_local_infile"))&&extension_loaded("pdo_mysql"))){class
Db
extends
SqlDb{private$link;function
attach(array$M,$U,$E){if(ini_bool("mysql.allow_local_infile"))return
lang(93,"'mysql.allow_local_infile'","MySQLi","PDO_MySQL");$Zi="$M[port]$M[socket]";$B=$M["host"].($Zi!=""?":$Zi":"");$this->link=@mysql_connect(($B!=""?$B:ini_get("mysql.default_host")),($B.$U!=""?$U:ini_get("mysql.default_user")),($B.$U.$E!=""?$E:ini_get("mysql.default_password")),true,131072);if(!$this->link)return
mysql_error();$this->server_info=mysql_get_server_info($this->link);return'';}function
set_charset($kb){return
mysql_set_charset($kb,$this->link)||mysql_set_charset('utf8',$this->link);}function
quote($P){return"'".mysql_real_escape_string($P,$this->link)."'";}function
select_db($nc){return
mysql_select_db($nc,$this->link);}function
query($F,$Bm=false){$G=@($Bm?mysql_unbuffered_query($F,$this->link):mysql_query($F,$this->link));$this->error="";if(!$G){$this->errno=mysql_errno($this->link);$this->error=mysql_error($this->link);return
false;}if($G===true){$this->affected_rows=mysql_affected_rows($this->link);$this->info=mysql_info($this->link);return
true;}return
new
Result($G);}}class
Result{var$num_rows;private$result;private$offset=0;function
__construct($G){$this->result=$G;$this->num_rows=mysql_num_rows($G);}function
fetch_assoc(){return
mysql_fetch_assoc($this->result);}function
fetch_row(){return
mysql_fetch_row($this->result);}function
fetch_field(){$H=mysql_fetch_field($this->result,$this->offset++);$H->orgtable=$H->table;$H->native_type=idx(array("string"=>"varchar","real"=>"double"),$H->type,$H->type);return$H;}}}elseif(extension_loaded("pdo_mysql")){class
Db
extends
PdoDb{var$extension="PDO_MySQL";function
attach(array$M,$U,$E){$C=array(\PDO::MYSQL_ATTR_LOCAL_INFILE=>false);if(isset($_GET["select"]))$C[\PDO::MYSQL_ATTR_MULTI_STATEMENTS]=false;$gl=adminer()->connectSsl();if($gl){if($gl['key'])$C[\PDO::MYSQL_ATTR_SSL_KEY]=$gl['key'];if($gl['cert'])$C[\PDO::MYSQL_ATTR_SSL_CERT]=$gl['cert'];if($gl['ca'])$C[\PDO::MYSQL_ATTR_SSL_CA]=$gl['ca'];if(isset($gl['verify']))$C[\PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT]=$gl['verify'];}$Te=$M["host"];$Zi=$M["port"];$Sk=$M["socket"];return$this->dsn("mysql:charset=utf8".($Te!=""?";host=$Te":'').($Zi!=""?";port=$Zi":($Sk!=""?";unix_socket=$Sk":"")),$U,$E,$C);}function
set_charset($kb){return$this->query("SET NAMES $kb");}function
select_db($nc){return$this->query("USE ".idf_escape($nc));}function
query($F,$Bm=false){$this->pdo->setAttribute(\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,!$Bm);return
parent::query($F,$Bm);}}}class
Driver
extends
SqlDriver{static$extensions=array("MySQLi","MySQL","PDO_MySQL");static$jush="sql";static$serverSocket=true;var$unsigned=array("unsigned","zerofill","unsigned zerofill");var$functions=array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper");var$grouping=array("avg","count","count distinct","group_concat","max","min","sum");var$partitionBy=array("HASH","LINEAR HASH","KEY","LINEAR KEY","RANGE","LIST");function
operators($wl){return
array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");}static
function
connect($M,$U,$E){$f=parent::connect($M,$U,$E);if(is_string($f)){if(function_exists('iconv')&&!is_utf8($f)&&strlen($gk=iconv("windows-1252","utf-8//IGNORE",$f))>strlen($f))$f=$gk;return$f;}$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");$f->flavor=(preg_match('~MariaDB~',$f->server_info)?'maria':'mysql');add_driver(DRIVER,($f->flavor=='maria'?"MariaDB":"MySQL"));return$f;}function
__construct(Db$f){parent::__construct($f);$this->types=array(lang(28)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(29)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(30)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(94)=>array("enum"=>65535,"set"=>64),lang(31)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(33)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),);$this->insertFunctions=array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",);$this->editFunctions=array(number_type()=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",);if(min_version('5.7.8',10.2,$f))$this->types[lang(30)]["json"]=4294967295;if(min_version('',10.7,$f)){$this->types[lang(30)]["uuid"]=128;$this->insertFunctions['uuid']='uuid';}if(min_version('',10.5,$f)){$this->types[lang(32)]["inet6"]=39;if(min_version('','10.10',$f))$this->types[lang(32)]["inet4"]=15;}if(min_version(9,11.7,$f))$this->types[lang(28)]["vector"]=16383;if(min_version(5.7,10.2,$f))$this->generated=array("STORED","VIRTUAL");}function
unconvertFunction(array$m){return(preg_match("~binary~",$m["type"])?"<code class='jush-sql'>UNHEX</code>":($m["type"]=="bit"?doc_link(array('sql'=>'bit-value-literals.html'),"<code>b''</code>"):($m["type"]=="vector"?"<code class='jush-sql'>".($this->conn->flavor=='maria'?"VEC_FromText":"STRING_TO_VECTOR")."</code>":(preg_match("~geom|point|linestring|polygon~",$m["type"])?"<code class='jush-sql'>GeomFromText</code>":""))));}function
insert($Q,array$N){return($N?parent::insert($Q,$N):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,array$J,array$mj){$e=array_keys(reset($J));$hj="INSERT INTO ".table($Q)." (".implode(", ",$e).") VALUES\n";$Y=array();foreach($e
as$x)$Y[$x]="$x = VALUES($x)";$pl="\nON DUPLICATE KEY UPDATE ".implode(", ",$Y);$Y=array();$y=0;foreach($J
as$N){$X="(".implode(", ",$N).")";if($Y&&(strlen($hj)+$y+strlen($X)+strlen($pl)>1e6)){if(!queries($hj.implode(",\n",$Y).$pl))return
false;$Y=array();$y=0;}$Y[]=$X;$y+=strlen($X)+2;}return
queries($hj.implode(",\n",$Y).$pl);}function
slowQuery($F,$Xl){if(min_version('5.7.8','10.1.2')){if($this->conn->flavor=='maria')return"SET STATEMENT max_statement_time=$Xl FOR $F";elseif(preg_match('~^(SELECT\b)(.+)~is',$F,$A))return"$A[1] /*+ MAX_EXECUTION_TIME(".($Xl*1000).") */ $A[2]";}}function
convertColumn($u,array$m){if(preg_match("~binary~",$m["type"]))return"HEX($u)";if($m["type"]=="bit")return"BIN($u + 0)";if($m["type"]=="vector")return($this->conn->flavor=='maria'?"VEC_ToText":"VECTOR_TO_STRING")."($u)";if(preg_match("~geom|point|linestring|polygon~",$m["type"]))return(min_version(8)?"ST_":"")."AsWKT($u)";return"";}function
convertSearch($u,array$W,array$m){return($this->convertColumn($u,$m)?:(preg_match('~'.text_type().'~',$m["type"])&&!preg_match("~^utf8~",$m["collation"])&&preg_match('~[\x80-\xFF]~',$W['val'])?"CONVERT($u USING ".charset($this->conn).")":$u));}function
typeName(\stdClass$m){$B=parent::typeName($m);if($B!=""){$Am=array("TINY"=>"tinyint","SHORT"=>"smallint","LONG"=>"int","INT24"=>"mediumint","LONGLONG"=>"bigint","NEWDECIMAL"=>"decimal","VAR_STRING"=>"varchar","STRING"=>"char",);return
idx($Am,$B,strtolower($B));}$Am=array("decimal","tinyint","smallint","int","float","double",7=>"timestamp","bigint","mediumint","date","time","datetime","year",15=>"varchar","bit",242=>"vector",245=>"json","decimal","enum","set","tinytext","mediumtext","longtext","text","varchar","char","geometry",);$H=idx($Am,$m->type,"");return($m->charsetnr==63?str_replace(array("text","varchar","char"),array("blob","varbinary","binary"),$H):$H);}function
quoteBinary($gk){return"X".q(bin2hex($gk));}function
warnings(){$G=$this->conn->query("SHOW WARNINGS");if($G&&$G->num_rows){ob_start();print_select_result($G);return
ob_get_clean();}}function
tableHelp($B,$Kf=false){$wg=($this->conn->flavor=='maria');if(information_schema(DB))return
strtolower(str_replace("_","-",DB)."-".($wg?"$B-table/":str_replace("_","-",$B)."-table.html"));if(DB=="sys")return($wg?"sys-schema/":strtolower("sys-".str_replace("_","-",preg_replace('~^x\$~','',$B)).".html"));if(DB=="mysql")return($wg?"mysql$B-table/":"system-schema.html");}function
partitionsInfo($Q){$je="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($Q);$G=$this->conn->query("SELECT PARTITION_METHOD, PARTITION_EXPRESSION, PARTITION_ORDINAL_POSITION $je ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");$I=($G?$G->fetch_row():null);if(!$I)return
array();$H=array();list($H["partition_by"],$H["partition"],$H["partitions"])=$I;$Ji=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $je AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$H["partition_names"]=array_keys($Ji);$H["partition_values"]=array_values($Ji);return$H;}function
checkConstraints($Q){$H=parent::checkConstraints($Q);return($this->conn->flavor=='maria'?$H:array_map('stripslashes',$H));}function
hasCStyleEscapes(){static$db;if($db===null){$dl=get_val("SHOW VARIABLES LIKE 'sql_mode'",1,$this->conn);$db=(strpos($dl,'NO_BACKSLASH_ESCAPES')===false);}return$db;}function
lineComment(){return"#|-- ";}function
engines(){$H=array();foreach(get_rows("SHOW ENGINES")as$I){if(preg_match("~YES|DEFAULT~",$I["Support"]))$H[]=$I["Engine"];}return$H;}function
indexAlgorithms(array$wl){return(preg_match('~^(MEMORY|NDB)$~',$wl["Engine"])?array("HASH","BTREE"):array());}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
get_databases($Yd){$H=get_session("dbs");if($H===null){$F="SELECT SCHEMA_NAME FROM information_schema.SCHEMATA ORDER BY SCHEMA_NAME";$hl=microtime(true);$H=($Yd?slow_query($F):get_vals($F));if(microtime(true)-$hl>0.1){restart_session();set_session("dbs",$H);stop_session();}}return$H;}function
limit($F,$Z,$z,$Lh=0,$xk=" "){return" $F$Z".($z?$xk."LIMIT $z".($Lh?" OFFSET $Lh":""):"");}function
limit1($Q,$F,$Z,$xk="\n"){return
limit($F,$Z,1,0,$xk);}function
db_collation($j,array$_b){$H=null;$h=get_val("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$h,$A))$H=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$h,$A))$H=$_b[$A[1]][-1];return$H;}function
logged_user(){return
get_val("SELECT CURRENT_USER()");}function
tables_list(){return
get_key_vals("SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME");}function
count_tables(array$i){$H=array();foreach($i
as$j)$H[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$H;}function
table_status($B="",$Gd=false){$H=array();$F="SELECT ENGINE AS Engine, TABLE_NAME AS Name, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($B!=""?"AND TABLE_NAME = ".q($B):"ORDER BY Name");$K=array();foreach(($Gd?array():get_rows($F))as$I)$K[$I["Name"]]=$I;$lj=null;foreach(get_rows($Gd?$F:"SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_\\")):""))as$I){$qi=idx($K,$I["Name"]);if($qi){if($I["Comment"]!==$qi["Comment"]&&$I["Comment"]!==$lj)$I["Error"]=$I["Comment"];$lj=$I["Comment"];$I["Comment"]=$qi["Comment"];$I["Engine"]=$qi["Engine"];}if($I["Engine"]=="InnoDB")$I["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\1',$I["Comment"]);if(!isset($I["Engine"]))$I["Comment"]="";if($B!="")$I["Name"]=$B;$H[$I["Name"]]=$I;}return$H;}function
is_view(array$R){return$R["Engine"]===null;}function
fk_support(array$R){return
preg_match('~InnoDB|IBMDB2I'.(min_version(5.6)?'|NDB':'').'~i',$R["Engine"]);}function
parse_type($me){preg_match('~^([^( ]+)(?:\((.+)\))?( unsigned)?( zerofill)?$~',$me,$A);return
array($A[1],$A[2],ltrim($A[3].$A[4]));}function
fields($Q){$wg=(connection()->flavor=='maria');$H=array();foreach(get_rows("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($Q)." ORDER BY ORDINAL_POSITION")as$I){$m=$I["COLUMN_NAME"];$T=$I["COLUMN_TYPE"];$re=$I["GENERATION_EXPRESSION"];$Dd=$I["EXTRA"];preg_match('~^(VIRTUAL|PERSISTENT|STORED)~',$Dd,$qe);list($_m,$y,$Jm)=parse_type($T);$k=$I["COLUMN_DEFAULT"];if($k!=""){$Jf=preg_match('~text|json~',$_m);if(!$wg&&$Jf)$k=preg_replace("~^(_\w+)?('.*')$~",'\2',stripslashes($k));if($wg||$Jf){$k=($k=="NULL"?null:preg_replace_callback("~^'(.*)'$~",function($A){return
stripslashes(str_replace("''","'",$A[1]));},$k));}if(!$wg&&preg_match('~binary~',$_m)&&preg_match('~^0x(\w*)$~',$k,$A))$k=pack("H*",$A[1]);}$H[$m]=array("field"=>$m,"full_type"=>$T,"type"=>$_m,"length"=>$y,"unsigned"=>$Jm,"default"=>($qe?($wg?$re:stripslashes($re)):$k),"null"=>($I["IS_NULLABLE"]=="YES"),"auto_increment"=>($Dd=="auto_increment"),"on_update"=>(preg_match('~\bon update (\w+)~i',$Dd,$A)?$A[1]:""),"collation"=>$I["COLLATION_NAME"],"privileges"=>array_flip(explode(",","$I[PRIVILEGES],where,order")),"comment"=>$I["COLUMN_COMMENT"],"primary"=>($I["COLUMN_KEY"]=="PRI"),"generated"=>($qe[1]=="PERSISTENT"?"STORED":$qe[1]),);}return$H;}function
indexes($Q,$g=null){$H=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$g)as$I){$B=$I["Key_name"];$H[$B]["type"]=($B=="PRIMARY"?"PRIMARY":($I["Index_type"]=="FULLTEXT"?"FULLTEXT":($I["Non_unique"]?(preg_match('~^(SPATIAL|VECTOR)$~',$I["Index_type"])?$I["Index_type"]:"INDEX"):"UNIQUE")));$H[$B]["columns"][]=$I["Column_name"];$H[$B]["lengths"][]=($I["Index_type"]=="SPATIAL"?null:$I["Sub_part"]);$H[$B]["descs"][]=null;$H[$B]["algorithm"]=$I["Index_type"];}return$H;}function
foreign_keys($Q){static$Ri='(?:`(?:[^`]|``)+`|"(?:[^"]|"")+")';$H=array();$bc=get_val("SHOW CREATE TABLE ".table($Q),1);if($bc){preg_match_all("~CONSTRAINT ($Ri) FOREIGN KEY ?\\(((?:$Ri,? ?)+)\\) REFERENCES ($Ri)(?:\\.($Ri))? \\(((?:$Ri,? ?)+)\\)(?: ON DELETE (".driver()->onActions."))?(?: ON UPDATE (".driver()->onActions."))?~",$bc,$zg,PREG_SET_ORDER);foreach($zg
as$A){preg_match_all("~$Ri~",$A[2],$Wk);preg_match_all("~$Ri~",$A[5],$Nl);$H[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('Adminer\idf_unescape',$Wk[0]),"target"=>array_map('Adminer\idf_unescape',$Nl[0]),"on_delete"=>($A[6]?:"RESTRICT"),"on_update"=>($A[7]?:"RESTRICT"),);}}return$H;}function
view($B){return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\s+AS\s+~isU','',get_val("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$H=array();foreach(get_rows("SHOW COLLATION")as$I){if($I["Default"])$H[$I["Charset"]][-1]=$I["Collation"];else$H[$I["Charset"]][]=$I["Collation"];}ksort($H);foreach($H
as$x=>$W)sort($H[$x]);return$H;}function
information_schema($j,$K=""){return($j=="information_schema")||(min_version(5.5)&&$j=="performance_schema");}function
error(){return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",connection()->error));}function
create_database($j,$zb){return
queries("CREATE DATABASE ".idf_escape($j).($zb?" COLLATE ".q($zb):""));}function
drop_databases(array$i){$H=apply_queries("DROP DATABASE",$i,'Adminer\idf_escape');restart_session();set_session("dbs",null);return$H;}function
rename_database($B,$zb){$H=false;if(create_database($B,$zb)){$S=array();$jn=array();foreach(tables_list()as$Q=>$T){if($T=='VIEW')$jn[]=$Q;else$S[]=$Q;}$H=(!$S&&!$jn)||move_tables($S,$jn,$B);drop_databases($H?array(DB):array());}return$H;}function
auto_increment(){$Ka=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ka="";break;}if($v["type"]=="PRIMARY")$Ka=" UNIQUE";}}return" AUTO_INCREMENT$Ka";}function
alter_table($Q,$B,array$n,array$ae,$Eb,$hd,$zb,$Ja,$Ii){$b=array();foreach($n
as$m){if($m[1]){$k=$m[1][3];if(preg_match('~ GENERATED~',$k)){$m[1][3]=(connection()->flavor=='maria'?"":$m[1][2]);$m[1][2]=$k;}$b[]=($Q!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($Q!=""?$m[2]:"");}else$b[]="DROP ".idf_escape($m[0]);}$b=array_merge($b,$ae);$O=($Eb!==null?" COMMENT=".q($Eb):"").($hd?" ENGINE=".q($hd):"").($zb?" COLLATE ".q($zb):"").($Ja!=""?" AUTO_INCREMENT=$Ja":"");if($Ii){$Ji=array();if($Ii["partition_by"]=='RANGE'||$Ii["partition_by"]=='LIST'){foreach($Ii["partition_names"]as$x=>$W){$X=$Ii["partition_values"][$x];$Ji[]="\n  PARTITION ".idf_escape($W)." VALUES ".($Ii["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$O
.="\nPARTITION BY $Ii[partition_by]($Ii[partition])";if($Ji)$O
.=" (".implode(",",$Ji)."\n)";elseif($Ii["partitions"])$O
.=" PARTITIONS ".(+$Ii["partitions"]);}elseif($Ii===null)$O
.="\nREMOVE PARTITIONING";if($Q=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$b)."\n)$O");if($Q!=$B)$b[]="RENAME TO ".table($B);if($O)$b[]=ltrim($O);return($b?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$b)):true);}function
alter_indexes($Q,$b){$ib=array();foreach($b
as$W)$ib[]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"")."(".implode(", ",$W[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$ib));}function
truncate_tables(array$S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views(array$jn){return
queries("DROP VIEW ".implode(", ",array_map('Adminer\table',$jn)));}function
drop_tables(array$S){return
queries("DROP TABLE ".implode(", ",array_map('Adminer\table',$S)));}function
move_tables(array$S,array$jn,$Nl){$Mj=array();foreach($S
as$Q)$Mj[]=table($Q)." TO ".idf_escape($Nl).".".table($Q);if(!$Mj||queries("RENAME TABLE ".implode(", ",$Mj))){$yc=array();foreach($jn
as$Q)$yc[table($Q)]=view($Q);connection()->select_db($Nl);$j=idf_escape(DB);foreach($yc
as$B=>$in){if(!queries("CREATE VIEW $B AS ".str_replace(" $j."," ",$in["select"]))||!queries("DROP VIEW $j.$B"))return
false;}return
true;}return
false;}function
copy_tables(array$S,array$jn,$Nl){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$B=($Nl==DB?table("copy_$Q"):idf_escape($Nl).".".table($Q));if(($_POST["overwrite"]&&!queries("\nDROP TABLE IF EXISTS $B"))||!queries("CREATE TABLE $B LIKE ".table($Q))||!queries("INSERT INTO $B SELECT * FROM ".table($Q)))return
false;foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$I){$qm=$I["Trigger"];list($qd,$Hh)=trigger_event($I);if(!queries("CREATE TRIGGER ".($Nl==DB?idf_escape("copy_$qm"):idf_escape($Nl).".".idf_escape($qm))." $I[Timing] $qd".($Hh!=""?" $Hh":"")." ON $B FOR EACH ROW\n$I[Statement];"))return
false;}}foreach($jn
as$Q){$B=($Nl==DB?table("copy_$Q"):idf_escape($Nl).".".table($Q));$in=view($Q);if(($_POST["overwrite"]&&!queries("DROP VIEW IF EXISTS $B"))||!queries("CREATE VIEW $B AS $in[select]"))return
false;}return
true;}function
trigger_event(array$I){$sd=explode(",",$I["Event"]);$H=array();foreach(array("DELETE","INSERT","UPDATE")as$qd){if(in_array($qd,$sd))$H[]=$qd;}$H=implode(" OR ",$H);if(in_array("UPDATE",$sd)&&min_version('','12.0.1')&&preg_match('~\s(?:BEFORE|AFTER)\s+(.+?)\s+ON\s~is',get_val("SHOW CREATE TRIGGER ".idf_escape($I["Trigger"]),2),$A)&&preg_match('~\bOF\s+(.+)~is',$A[1],$Hh))return
array("$H OF",$Hh[1]);return
array($H,"");}function
trigger($B,$Q){if($B=="")return
array();$J=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));$H=reset($J);if($H)list($H["Event"],$H["Of"])=trigger_event($H);return($H?:array());}function
triggers($Q){$H=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$I){list($qd)=trigger_event($I);$H[$I["Trigger"]]=array($I["Timing"],$qd);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>(min_version('','12.0.1')?array("INSERT","UPDATE","UPDATE OF","DELETE","INSERT OR UPDATE","INSERT OR UPDATE OF","DELETE OR INSERT","DELETE OR UPDATE","DELETE OR UPDATE OF","DELETE OR INSERT OR UPDATE","DELETE OR INSERT OR UPDATE OF",):array("INSERT","UPDATE","DELETE")),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$T){$J=get_rows("SELECT PARAMETER_NAME, DTD_IDENTIFIER, PARAMETER_MODE, COLLATION_NAME
FROM information_schema.PARAMETERS
WHERE SPECIFIC_SCHEMA = DATABASE() AND ROUTINE_TYPE = '$T' AND SPECIFIC_NAME = ".q($B)."
ORDER BY ORDINAL_POSITION");$n=array();foreach($J
as$I){$me=$I["DTD_IDENTIFIER"];list($_m,$y,$Jm)=parse_type($me);$n[]=array("field"=>$I["PARAMETER_NAME"],"type"=>$_m,"length"=>$y,"unsigned"=>$Jm,"null"=>true,"full_type"=>$me,"inout"=>($T=="FUNCTION"?"":$I["PARAMETER_MODE"]),"collation"=>$I["COLLATION_NAME"],);}$H=connection()->query("SELECT
	ROUTINE_COMMENT comment,
	ROUTINE_DEFINITION definition,
	LOWER(EXTERNAL_LANGUAGE) language,
	IF(DEFINER = CURRENT_USER(), '', DEFINER) definer,
	IF(IS_DETERMINISTIC = 'YES', 'DETERMINISTIC', 'NOT DETERMINISTIC') is_deterministic,
	SQL_DATA_ACCESS data_access,
	CONCAT('SQL SECURITY ', SECURITY_TYPE) security
FROM information_schema.ROUTINES
WHERE ROUTINE_SCHEMA = DATABASE() AND ROUTINE_TYPE = '$T' AND ROUTINE_NAME = ".q($B))->fetch_assoc();if(!$H)return
array();$H['options']=array("DEFINER"=>$H['definer'],"DETERMINISTIC"=>$H['is_deterministic'],"SQL_DATA_ACCESS"=>$H['data_access'],"SQL_SECURITY"=>$H['security'],"COMMENT"=>$H['comment'],);if($n&&$n[0]['field']=='')$H['returns']=array_shift($n);$H['fields']=$n;return$H;}function
routines(){return
get_rows("SELECT SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = DATABASE()");}function
routine_languages(){return(min_version(9,99)?array("sql"=>"sql","javascript"=>"js"):array());}function
routine_options($Yj){return
array("DEFINER"=>array(),"DETERMINISTIC"=>array("NOT DETERMINISTIC","DETERMINISTIC"),"SQL_DATA_ACCESS"=>array("CONTAINS SQL","NO SQL","READS SQL DATA","MODIFIES SQL DATA"),"SQL_SECURITY"=>array("SQL SECURITY DEFINER","SQL SECURITY INVOKER"),"COMMENT"=>array(),);}function
routine_id($B,array$I){return
idf_escape($B);}function
last_id($G){return
get_val("SELECT LAST_INSERT_ID()");}function
explain(Db$f,$F){return$f->query("EXPLAIN ".(min_version(5.7)?"":"PARTITIONS ").$F);}function
found_rows(array$R,array$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
create_sql($Q,$Ja,$nl){$H=get_val("SHOW CREATE TABLE ".table($Q),1);if(!$Ja)$H=preg_replace('~(\n\)[^\n]*?) AUTO_INCREMENT=\d+~','\1',$H);return$H;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($nc,$nl=""){$B=idf_escape($nc);$H="";if(preg_match('~CREATE~',$nl)&&($h=get_val("SHOW CREATE DATABASE $B",1))){set_utf8mb4($h);if($nl=="DROP+CREATE")$H="DROP DATABASE IF EXISTS $B;\n";$H
.="$h;\n";}return$H."USE $B";}function
trigger_sql($Q){$H="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$I){list($I["Event"],$I["Of"])=trigger_event($I);$H
.="\n".create_trigger(" ON ".table($I["Table"]),$I+array("Type"=>"FOR EACH ROW")).";\n";}return$H;}function
show_variables(){return
get_rows("SHOW VARIABLES");}function
show_status(){return
get_rows("SHOW STATUS");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
convert_field(array$m){return
driver()->convertColumn(idf_escape($m["field"]),$m);}function
unconvert_field(array$m,$H){if(preg_match("~binary~",$m["type"]))$H="UNHEX($H)";if($m["type"]=="bit")$H="CONVERT(b$H, UNSIGNED)";if($m["type"]=="vector")$H=(connection()->flavor=='maria'?"VEC_FromText":"STRING_TO_VECTOR")."($H)";if(preg_match("~geom|point|linestring|polygon~",$m["type"])){$hj=(min_version(8)?"ST_":"");$H=$hj."GeomFromText($H, $hj"."SRID($m[field]))";}return$H;}function
support($Hd){return
preg_match('~^(comment|columns|copy|database|drop_col|dump|event|indexes|kill|privileges|move_col|procedure|processlist|routine|sql|status|table|trigger|variables|view'.(min_version(8)?'|descidx':'').(min_version('8.0.16','10.2.1')?'|check':'').(min_version(8,99)?'|fast_status':'').')$~',$Hd);}function
kill_process($t){return
queries("KILL ".number($t));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){return
get_val("SELECT @@max_connections");}function
types($Cd=false){return
array();}function
type_values($t){return"";}function
type_definition($t){return
array("kind"=>"","definition"=>"");}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($K,$g=null){return
true;}}define('Adminer\JUSH',Driver::$jush);define('Adminer\SERVER',"".$_GET[DRIVER]);define('Adminer\DB',"$_GET[db]");define('Adminer\ME',preg_replace('~\?.*~','',relative_uri()).'?'.(sid()?SID.'&':'').($_GET["ext"]?"ext=".url_escape($_GET["ext"]).'&':'').(isset($_GET[DRIVER])?DRIVER."=".url_escape(SERVER).'&':'').(isset($_GET["username"])?"username=".url_escape($_GET["username"]).'&':'').(isset($_GET["db"])?'db='.url_escape(DB).'&'.(isset($_GET["ns"])?"ns=".url_escape($_GET["ns"])."&":""):''));if(isset($_GET["manifest"])){header("Content-Type: application/manifest+json; charset=utf-8");header("Cache-Control: no-cache");echo
json_encode(adminer()->manifest(),64|256);exit;}function
page_header($Zl,$l="",$Za=array(),$am="",$Ah=false){if($Ah){header("HTTP/1.1 404 Not Found");$l=($l?:lang(95));}page_headers();if(is_ajax()&&$l){page_messages($l);exit;}if(!ob_get_level())ob_start('ob_gzhandler',4096);$bm=$Zl.($am!=""?": $am":"");$cm=strip_tags($bm.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".adminer()->name());echo'<!DOCTYPE html>
<html lang=\'',LANG,'\' dir=\'',lang(96),'\' class=\'',lang(96),' nojs\'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>',$cm,'</title>
<link rel="stylesheet" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=6.1.0+452aa1c"),'">
';$fc=adminer()->css();if(is_int(key($fc)))$fc=array_fill_keys($fc,'light');$Fe=in_array('light',$fc)||in_array('',$fc);$De=in_array('dark',$fc)||in_array('',$fc);$jc=($Fe?($De?null:false):($De?:null));$Ng=" media='(prefers-color-scheme: dark)'";if($jc!==false)echo"<link rel='stylesheet'".($jc?"":$Ng)." href='".h(preg_replace("~\\?.*~","",ME)."?file=dark.css&version=6.1.0+452aa1c")."'>\n";echo"<meta name='color-scheme' content='".($jc===null?"light dark":($jc?"dark":"light"))."'>\n",script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=6.1.0+452aa1c");if(adminer()->head($jc))echo"<link rel='icon' href='data:image/gif;base64,"."R0lGODlhEAAQAJEAAAQCBPz+/PwCBAROZCH5BAEAAAAALAAAAAAQABAAAAI2hI+pGO1rmghihiUdvUBnZ3XBQA7f05mOak1RWXrNq5nQWHMKvuoJ37BhVEEfYxQzHjWQ5qIAADs='>\n","<link rel='apple-touch-icon' href='".h(preg_replace("~\\?.*~","",ME)."?file=logo.svg&version=6.1.0+452aa1c")."'>\n";if(adminer()->manifest())echo"<link rel='manifest' href='".h(preg_replace('~\?.*~','',ME)."?manifest=")."' crossorigin='use-credentials'>\n";foreach($fc
as$Qm=>$ch){$c=($ch=='dark'&&!$jc?$Ng:($ch=='light'&&$De?" media='(prefers-color-scheme: light)'":""));echo"<link rel='stylesheet'$c href='".h($Qm)."'>\n";}echo"\n<body class='";adminer()->bodyClass();echo"'>\n",script((isset($_COOKIE["adminer_version"])||!adminer()->verifyVersion()?"":"onload = partial(verifyVersion, '".VERSION."');\n")."
const offlineMessage = '".js_escape(lang(97))."';
const numberFormat = '".js_escape(lang(5))."';
const numberDigits = '".js_escape(lang(6))."';
const urlSeparators = '".js_escape(ini_get("arg_separator.input"))."';"),"<div id='help' class='jush-".JUSH." jsonly hidden'".on('mouseover','helpKeep').on('mouseout','helpMouseout')."></div>\n","<div id='content'>\n","<span id='menuopen' class='jsonly'".on('click','menuToggle')."><button title='".lang(98)."' class='icon icon-move' aria-expanded='false'></button></span>\n";if($Za!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?:".").'">'.get_driver(DRIVER).'</a> » ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$M=adminer()->serverName(SERVER);$M=($M!=""?$M:lang(39));if($Za===false)echo"$M\n";else{echo"<a href='".h($_.(DB!=""&&support("single_db")?"&db=":""))."' accesskey='1' title='Alt+Shift+1'>$M</a> » ";$ok="";if(is_string($Za)){$ok=$Za;$Za=array();}if($_GET["ns"]!=""||(DB!=""&&is_array($Za))){$pc="$_&db=".url_escape(DB).(support("scheme")?"&ns=":"").(support("single_table")?"&select=":"");echo'<a href="'.h($pc.($_GET["ns"]==""?$ok:"")).'">'.h(DB).'</a> » ';}if(is_array($Za)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1).$ok).'">'.h($_GET["ns"]).'</a> » ';foreach($Za
as$x=>$W){$_c=(is_array($W)?$W[1]:h($W));if($_c!="")echo"<a href='".h(ME."$x=").url_escape(is_array($W)?$W[0]:$W)."'>$_c</a> » ";}}echo"$Zl\n";}}echo"<h2>$bm</h2>\n","<div id='ajaxstatus' role='status' class='jsonly'></div>\n";restart_session();page_messages($l);adminer()->serviceWorker();$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;stop_session();define('Adminer\PAGE_HEADER',1);ob_flush();flush();if($Ah){page_footer($Ah===true?"":$Ah);exit;}}function
service_worker(){$Jj=has_passwords();$wb=($Jj?"navigator.serviceWorker.register('".js_escape(preg_replace('~\?.*~','',ME)."?file=worker.js&version=6.1.0+452aa1c")."', {scope: location.pathname}).catch(() => {});":"navigator.serviceWorker.getRegistration().then(registration => registration && registration.unregister());
	caches.keys().then(keys => keys.forEach(key => key.startsWith('adminer-') && caches.delete(key)));");echo
script("if (navigator.serviceWorker) {\n\t$wb\n}");}function
has_passwords(){foreach((array)$_SESSION["pwds"]as$Ik){foreach($Ik
as$Zm){foreach($Zm
as$E){if($E!==null)return
true;}}}return
false;}function
page_headers(){header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach(adminer()->csp(csp())as$ec){$Ke=array();foreach($ec
as$x=>$W)$Ke[]="$x $W";header("Content-Security-Policy: ".implode("; ",$Ke));}adminer()->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self' https://www.adminer.org","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
design_checksums(){$Wm=array();foreach(array_keys(adminer()->css())as$Qm)$Wm[preg_replace('~\?.*~','',$Qm)]=true;$H=array();foreach(array("adminer.css","adminer-dark.css")as$o){if($Wm[$o]&&file_exists($o)){preg_match('~^/\* Adminer design ([-\w]+) \*/~',file_get_contents($o),$A);$H[$o]=array((string)$A[1],Plugins::checksum($o));}}return$H;}function
official_design_checksums(){return
array('adminer-border/adminer.css'=>'ec757f3e','adminer-dark/adminer-dark.css'=>'a26bcd7b','brade/adminer.css'=>'be4161f0','bueltge/adminer.css'=>'1a8f00b4','cpanel/adminer.css'=>'59ce604e','dracula/adminer-dark.css'=>'cfaf61dd','esterka/adminer.css'=>'1f805f36','flat/adminer.css'=>'49a61af9','galkaev/adminer-dark.css'=>'16c46f94','haeckel/adminer.css'=>'147a3565','hever/adminer.css'=>'ef0e1948','konya/adminer.css'=>'2b409696','lavender-light/adminer.css'=>'bf03f5d7','lucas-sandery/adminer.css'=>'6596353','mancave/adminer-dark.css'=>'e1ac813d','mvt/adminer.css'=>'ebd3afdc','nette/adminer.css'=>'5ab360e7','ng9/adminer.css'=>'488583cf','nicu/adminer.css'=>'216f097b','pappu687/adminer.css'=>'b58d128c','paranoiq/adminer.css'=>'64d27e5','pepa-linha/adminer.css'=>'baf25f0','pokorny/adminer.css'=>'ee9eea6d','price/adminer.css'=>'81be9a85','rmsoft/adminer.css'=>'6cd4a237','rmsoft_blue-dark/adminer.css'=>'32102a8','rmsoft_blue/adminer.css'=>'7d8d5b18','win98/adminer.css'=>'e82d63c3',);}function
version_iframe(){return(isset($_COOKIE["adminer_version"])||!adminer()->verifyVersion()?"":"<noscript><iframe sandbox src='https://www.adminer.org/version/?current=".VERSION."&amp;noscript=1'></iframe></noscript>");}function
get_nonce(){static$_h;if(!$_h)$_h=base64_encode(rand_string());return$_h;}function
page_messages($l){$Pm=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ug=idx($_SESSION["messages"],$Pm);if($Ug){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ug)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$Pm]);}if($l)echo"<div class='error'>$l</div>\n";if(adminer()->error)echo"<div class='error'>".adminer()->error."</div>\n";}function
page_footer($bh=""){echo"</div>\n\n<div id='foot' class='foot'>\n<div id='menu'>\n";adminer()->navigation($bh);echo"</div>\n";if($bh!="auth")echo'<form action="" method="post">
<p class="logout">
<span title="',lang(41),'">',h($_GET["username"])."\n",'</span>
<input type=\'submit\' name=\'logout\' value=\'',lang(99),'\' id=\'logout\'>
',input_token(),'</form>
';echo"</div>\n\n",script("setupSubmitHighlight(document);");}function
int32($kh){while($kh>=2147483648)$kh-=4294967296;while($kh<=-2147483649)$kh+=4294967296;return(int)$kh;}function
long2str(array$V,$ln){$gk='';foreach($V
as$W)$gk
.=pack('V',$W);if($ln)return
substr($gk,0,end($V));return$gk;}function
str2long($gk,$ln){$V=array_values(unpack('V*',str_pad($gk,4*ceil(strlen($gk)/4),"\0")));if($ln)$V[]=strlen($gk);return$V;}function
xxtea_mx($wn,$vn,$ql,$Pf){return
int32((($wn>>5&0x7FFFFFF)^$vn<<2)+(($vn>>3&0x1FFFFFFF)^$wn<<4))^int32(($ql^$vn)+($Pf^$wn));}function
encrypt_string($kl,$x){if($kl=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$V=str2long($kl,true);$kh=count($V)-1;$wn=$V[$kh];$vn=$V[0];$vj=floor(6+52/($kh+1));$ql=0;while($vj-->0){$ql=int32($ql+0x9E3779B9);$Yc=$ql>>2&3;for($wi=0;$wi<$kh;$wi++){$vn=$V[$wi+1];$jh=xxtea_mx($wn,$vn,$ql,$x[$wi&3^$Yc]);$wn=int32($V[$wi]+$jh);$V[$wi]=$wn;}$vn=$V[0];$jh=xxtea_mx($wn,$vn,$ql,$x[$wi&3^$Yc]);$wn=int32($V[$kh]+$jh);$V[$kh]=$wn;}return
long2str($V,false);}function
decrypt_string($kl,$x){if($kl=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$V=str2long($kl,false);$kh=count($V)-1;$wn=$V[$kh];$vn=$V[0];$vj=floor(6+52/($kh+1));$ql=int32($vj*0x9E3779B9);while($ql){$Yc=$ql>>2&3;for($wi=$kh;$wi>0;$wi--){$wn=$V[$wi-1];$jh=xxtea_mx($wn,$vn,$ql,$x[$wi&3^$Yc]);$vn=int32($V[$wi]-$jh);$V[$wi]=$vn;}$wn=$V[$kh];$jh=xxtea_mx($wn,$vn,$ql,$x[$wi&3^$Yc]);$vn=int32($V[0]-$jh);$V[0]=$vn;$ql=int32($ql-0x9E3779B9);}return
long2str($V,true);}$Ti=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($x)=explode(":",$W);$Ti[$x]=$W;}}function
add_invalid_login(){$Ra=get_temp_dir()."/adminer-invalid";foreach(glob("$Ra*")?:array($Ra)as$o){$ge=file_open_lock($o);if($ge)break;}if(!$ge)$ge=file_open_lock("$Ra-".rand_string());if(!$ge)return;$Cf=json_decode(stream_get_contents($ge),true);$Wl=time();if($Cf){foreach($Cf
as$Df=>$W){if($W[0]<$Wl)unset($Cf[$Df]);}}$Af=&$Cf[adminer()->bruteForceKey()];if(!$Af)$Af=array($Wl+30*60,0);$Af[1]++;file_write_unlock($ge,json_encode($Cf));}function
check_invalid_login(array&$Ti){$Cf=array();foreach(glob(get_temp_dir()."/adminer-invalid*")as$o){$ge=file_open_lock($o);if($ge){$Cf=json_decode(stream_get_contents($ge),true);file_unlock($ge);break;}}$x=adminer()->bruteForceKey();$Af=idx($Cf,$x,array());$zh=($Af[1]>29?$Af[0]-time():0);if($zh>0){$l=lang(100,ceil($zh/60));if($_SERVER["HTTP_X_FORWARDED_FOR"]!=""&&$x==$_SERVER["REMOTE_ADDR"])$l
.='<br>'.lang(101,'<b>login-reverse-proxy</b>'," href='https://www.adminer.org/plugins/?version=".VERSION."'".target_blank());auth_error($l,$Ti,false);}}function
password_required(){static$H;if($H===null){$H=(bool)get_session("password_required");if(!$H){$dc=adminer()->credentials();$H=!is_object(Driver::connect($dc[0],$dc[1],""));if($H)set_session("password_required",true);}}return$H;}function
require_password_link($E){$fh="<a href='https://www.adminer.org/password/'".target_blank().">".lang(102)."</a>";if(!function_exists('password_hash'))return" $fh";$Wi=($E!==null?$E:base64_encode(substr(pack("H*",rand_string()),0,12)));$Je=password_hash($Wi,PASSWORD_DEFAULT);$o="adminer-plugins.php";$xd=file_exists("adminer-plugins.php");if($xd)$zf=($E!==null?lang(103,"<b>$o</b>"):lang(104,"<b>$o</b>","<b>$Wi</b>"));else{$o="<button name='password_less' value='".h($Je)."' class='link'>$o</button>";$zf=($E!==null?lang(105,$o):lang(106,$o,"<b>$Wi</b>"));}$ng="\t<a>new</a> Adminer\\Password(<span class='jush-apo'>'".h($Je)."'</span>),";$H="<p>$zf
<pre><code class='jush'>".($xd?$ng:"&lt;?php\n<a>return</a> <a>array</a>(\n$ng\n);")."</code></pre>
<p>$fh
";return" <a href='#password-less' class='toggle'>".lang(107)."</a>
<div id='password-less' class='hidden'>".($xd?$H:"<form action='' method='post'>\n".$H.input_token()."</form>")."</div>";}if(preg_match('~^[-\w$./]+$~',$_POST["password_less"])&&verify_token()){header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=adminer-plugins.php");echo"<?php\nreturn array(\n\tnew Adminer\\Password('$_POST[password_less]'),\n);\n";exit;}$Ia=$_POST["auth"];if($Ia&&(!adminer()->verifyLoginToken()||verify_token())){session_regenerate_id();$gn=$Ia["driver"];$M=$Ia["server"];$U=$Ia["username"];$E=(string)$Ia["password"];$j=$Ia["db"];set_password($gn,$M,$U,$E);$_SESSION["db"][$gn][$M][$U][$j]=true;if($Ia["permanent"]){$x=implode("-",array_map('base64_encode',array($gn,$M,$U,$j)));$pj=adminer()->permanentLogin(true);$Ti[$x]="$x:".base64_encode($pj?encrypt_string($E,$pj):"");cookie("adminer_permanent",implode(" ",$Ti));}if(!array_diff(array_keys($_POST),array("auth","token"))||$gn!=DRIVER||$M!=SERVER||$U!==$_GET["username"]||$j!=DB)redirect(auth_url($gn,$M,$U,$j));}elseif($_POST["logout"]&&(!$_SESSION["token"]||verify_token())){foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent($Ti);redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(108).' '.lang(109));}elseif($Ti&&!$_SESSION["pwds"]){session_regenerate_id();$pj=adminer()->permanentLogin();foreach($Ti
as$x=>$W){list(,$tb)=explode(":",$W);list($gn,$M,$U,$j)=array_map('base64_decode',explode("-",$x));set_password($gn,$M,$U,decrypt_string(base64_decode($tb),$pj));$_SESSION["db"][$gn][$M][$U][$j]=true;}}function
unset_permanent(array&$Ti){foreach($Ti
as$x=>$W){list($gn,$M,$U,$j)=array_map('base64_decode',explode("-",$x));if($gn==DRIVER&&$M==SERVER&&$U==$_GET["username"]&&$j==DB)unset($Ti[$x]);}cookie("adminer_permanent",implode(" ",$Ti));}function
auth_error($l,array&$Ti,$Bf=true){$Jk=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Jk]||$_GET[$Jk])&&!$_SESSION["token"])$l=lang(110);elseif($Bf&&($E=get_password())!==null){restart_session();add_invalid_login();if($E===false)$l
.=($l?'<br>':'').lang(111,target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);unset_permanent($Ti);}}if(!$_COOKIE[$Jk]&&$_GET[$Jk]&&ini_bool("session.use_only_cookies"))$l=lang(112);$Ai=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?:rand_string()),$Ai["lifetime"]);if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);page_header(lang(44),$l,null);echo"<form action='' method='post'>\n","<div>";if(hidden_fields($_POST,array("auth","token")))echo"<p class='message'>".lang(113)."\n";echo
input_token(),"</div>\n";adminer()->loginForm();echo"</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])&&!class_exists('Adminer\Db')){unset($_SESSION["pwds"][DRIVER]);unset_permanent($Ti);page_header(lang(114),lang(115,implode(", ",Driver::$extensions)),false);page_footer("auth");exit;}$f='';if(isset($_GET["username"])&&is_string(get_password())){check_invalid_login($Ti);$dc=adminer()->credentials();$f=Driver::connect($dc[0],$dc[1],$dc[2]);if(is_object($f)){Db::$instance=$f;Driver::$instance=new
Driver($f);if($f->flavor)save_settings(array("vendor-".DRIVER."-".SERVER=>get_driver(DRIVER)));}}$ug=null;if(!is_object($f)||($ug=adminer()->login($_GET["username"],get_password()))!==true){$l=(is_string($f)?nl_br(h($f)):(is_string($ug)?$ug:lang(116))).(preg_match('~^ | $~',get_password())?'<br>'.lang(117):'');auth_error($l,$Ti);}if($_POST["logout"]&&$_SESSION["token"]&&!verify_token()){page_header(lang(99),lang(118));page_footer("db");exit;}if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);stop_session(true);if($Ia&&$_POST["token"])$_POST["token"]=get_token();$l='';if($_POST){if(!verify_token()){header("HTTP/1.1 403 Forbidden");$l=lang(118).' '.lang(119);}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){header("HTTP/1.1 413 Content Too Large");$l=lang(120,"<b>post_max_size</b>");if(isset($_GET["sql"]))$l
.=' '.lang(121);}function
print_select_result($G,$g=null,array$ki=array(),&$z=0,&$Zc=false){$pg=array();$w=array();$e=array();$S=array();$mj=array();$bd=array();$Am=array();$H=array();$dh=$Zc;$Zc=false;for($s=0;(!$z||$s<$z)&&($I=$G->fetch_row());$s++){if(!$s){echo"<div class='scrollable'>\n","<table class='nowrap odds'".($dh?on('click','tableClick').on('dblclick','tableClick').on('keydown','editingKeydown'):"").">\n","<thead><tr>";for($Mf=0;$Mf<count($I);$Mf++){$m=$G->fetch_field();$B=$m->name;$Q=(isset($m->table)?$m->table:"");$ji=(isset($m->orgtable)?$m->orgtable:"");$ii=(isset($m->orgname)?$m->orgname:$B);$_m=driver()->typeName($m);if($ki&&JUSH=="sql")$pg[$Mf]=($B=="table"?"table=":($B=="possible_keys"?"indexes=":null));elseif($ji!=""){$va=($Q!=""?$Q:$ji);if($Q!="")$H[$Q]=$ji;if(!isset($w[$va])){if(!isset($mj[$ji])){$mj[$ji]=array();foreach(indexes($ji,$g)as$v){if($v["type"]=="PRIMARY"){$mj[$ji]=array_flip($v["columns"]);break;}}}$S[$va]=$ji;$w[$va]=$mj[$ji];$e[$va]=$mj[$ji];}if(isset($e[$va][$ii])){unset($e[$va][$ii]);$w[$va][$ii]=$Mf;$pg[$Mf]=$va;}elseif($dh&&isset($m->orgname)&&$m->db==DB&&!is_blob(array("type"=>$_m)))$bd[$Mf]=array($va,$ii,preg_match('~text|json|lob~',$_m));}$Am[$Mf]=$_m;echo"<th title='".h(trim(($ji!=""?"$ji.$ii":($m->name!=$ii?$ii:""))." ".$_m))."'>".h($B).($ki?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($B),'mariadb'=>"explain/#the-columns-in-explain-select",)):"");}foreach($bd
as$Mf=>$gb){if($e[$gb[0]])unset($bd[$Mf]);}echo"<tbody>\n";}$af=array();foreach($w
as$va=>$v){if($v&&!$e[$va]){$u="";foreach($v
as$xb=>$Mf){if($I[$Mf]===null){$u=null;break;}$u
.="&where[".url_escape(bracket_escape($xb))."]=".url_escape($I[$Mf]);}$af[$va]=$u;}}echo"<tr>";foreach($I
as$x=>$W){$_="";if(isset($pg[$x])){if($ki&&JUSH=="sql"){$Q=$I[array_search("table=",$pg)];$_=ME.$pg[$x].url_escape($ki[$Q]!=""?$ki[$Q]:$Q);}elseif(idx($af,$pg[$x])!==null)$_=ME."edit=".url_escape($S[$pg[$x]]).$af[$pg[$x]];}$c="";$gb=idx($bd,$x);if($gb&&idx($af,$gb[0])!==null&&is_utf8($W)){$Zc=true;$c=" data-name='".h("val[".bracket_escape($S[$gb[0]])."][".bracket_escape(substr($af[$gb[0]],1))."][".bracket_escape($gb[1])."]")."' data-text='".($gb[2]?1:0)."'";}$W=select_value($W,$_,array('type'=>(preg_match('~binary~',$Am[$x])?'blob':$Am[$x])),null);echo"<td".(preg_match(number_type(),$Am[$x])?" class='number'":"")."$c>$W";}}$z=$s;echo($s?"</table>\n</div>":"<p class='message'>".lang(15))."\n";return$H;}function
textarea($B,$X,$J=10,$Ab=80,$Of=JUSH){echo"<textarea name='".h($B)."' rows='$J' cols='$Ab' class='sqlarea jush-".h($Of)."' spellcheck='false' wrap='off'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
select_input($c,array$C,$X="",$Ui=""){if($C&&$X!=""&&!isset($C[$X]))$C=array($X=>$X)+$C;$Ml=($C?"select":"input");return"<$Ml$c".($C?"><option value=''>$Ui".optionlist($C,$X,true)."</select>":" size='10' value='".h($X)."' placeholder='$Ui'>");}function
json_row($x,$W=null,$pd=true){static$Td=true;if($Td)echo"{";if($x!=""){echo($Td?"":",")."\n\t\"".addcslashes($x,"\r\n\t\"\\/").'": '.($W!==null?($pd?'"'.addcslashes($W,"\r\n\"\\/").'"':$W):'null');$Td=false;}else{echo"\n}\n";$Td=true;}}function
flat_collations(){$_b=collations();return(is_array(reset($_b))?call_user_func_array('array_merge',array_values($_b)):$_b);}function
edit_type($x,array$m,array$_b,array$ce=array(),array$Ed=array()){$T=(string)$m["type"];echo"<td><select name='".h($x)."[type]' class='type' aria-labelledby='label-type'".on_help_value().">";if($T&&!array_key_exists($T,driver()->types())&&!isset($ce[$T])&&!in_array($T,$Ed))$Ed[]=$T;$ll=driver()->structuredTypes();if($ce)$ll[lang(122)]=$ce;echo
optionlist(array_merge($Ed,$ll),$T),"</select><td>","<input name='".h($x)."[length]' value='".h($m["length"])."' size='3'".(!$m["length"]&&preg_match('~var(char|binary)$~',$T)?" class='required'":"")." aria-labelledby='label-length'>","<td class='options'>",($_b?"<input list='collations' name='".h($x)."[collation]'".option_types($T,'('.text_type().')$')." value='".h($m["collation"])."' placeholder='(".lang(123).")'>":''),(driver()->unsigned?"<select name='".h($x)."[unsigned]'".option_types($T,'^$|'.number_type()).'><option>'.optionlist(driver()->unsigned,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='".h($x)."[on_update]'".option_types($T,'timestamp|datetime').'>'.optionlist(array(""=>"(".lang(124).")","CURRENT_TIMESTAMP"),(preg_match('~^CURRENT_TIMESTAMP~i',$m["on_update"])?"CURRENT_TIMESTAMP":$m["on_update"])).'</select>':''),($ce?"<select name='".h($x)."[on_delete]'".option_types($T,'`')."><option value=''>(".lang(125).")".optionlist(explode("|",driver()->onActions),$m["on_delete"])."</select> ":" ");}function
option_types($T,$Am){return" data-types='".h($Am)."'".(preg_match("~$Am~",$T)?"":" class='hidden'");}function
process_length($y){if(JUSH=="mssql"&&preg_match('~^\s*\(?\s*max\s*\)?\s*$~i',$y))return"(max)";$kd=driver()->enumLength;return(preg_match("~^\\s*\\(?\\s*$kd(?:\\s*,\\s*$kd)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$kd~",$y,$zg)?"(".implode(",",$zg[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_in($W){$kd=driver()->enumLength;if(preg_match("~^\\s*\\(?\\s*$kd(?:\\s*,\\s*$kd)*+\\s*\\)?\\s*\$~",$W)&&preg_match_all("~$kd~",$W,$zg))return"(".implode(", ",$zg[0]).")";$H=array();foreach(explode(",",$W)as$Lf)$H[]=q(trim($Lf));return"(".implode(", ",$H).")";}function
process_type(array$m,$yb="COLLATE"){return" $m[type]".process_length($m["length"]).(preg_match(number_type(),$m["type"])&&in_array($m["unsigned"],driver()->unsigned)?" $m[unsigned]":"").(preg_match('~'.text_type().'~',$m["type"])&&$m["collation"]?" $yb ".(JUSH=="mssql"?$m["collation"]:q($m["collation"])):"");}function
process_field(array$m,array$xm){if($m["on_update"])$m["on_update"]=str_ireplace("current_timestamp()","CURRENT_TIMESTAMP",$m["on_update"]);return
array(idf_escape(trim($m["field"])),process_type($xm),($m["null"]?" NULL":" NOT NULL"),default_value($m),(preg_match('~timestamp|datetime~',$m["type"])&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
default_value(array$m){if($m["default"]===null)return"";$k=str_replace("\r","",$m["default"]);$qe=$m["generated"];return(in_array($qe,driver()->generated)?(JUSH=="mssql"?" AS ($k)".($qe=="VIRTUAL"?"":" $qe"):" GENERATED ALWAYS AS ($k) $qe"):(preg_match('~^GENERATED ~i',$k)?" $k":" DEFAULT ".(preg_match('~char|binary|text|json|enum|set|String~',$m["type"])||preg_match('~^(?![a-z])~i',$k)?(JUSH=="sql"&&preg_match('~text|json~',$m["type"])?"(".q($k).")":q($k)):str_ireplace("current_timestamp()","CURRENT_TIMESTAMP",(JUSH=="sqlite"?"($k)":$k)))));}function
edit_fields(array$n,array$_b,$T="TABLE",array$ce=array()){$n=array_values($n);$uc=(($_POST?$_POST["defaults"]:get_setting("defaults"))?"":" class='hidden'");$Fb=(($_POST?$_POST["comments"]:get_setting("comments"))?"":" class='hidden'");echo"<thead><tr>\n",($T=="PROCEDURE"?"<td>":""),"<th id='label-name'>".($T=="TABLE"?lang(126):lang(127)),"<th id='label-type'>".lang(57)."<textarea id='enum-edit' rows='4' cols='12' wrap='off' hidden></textarea>".script("qs('#enum-edit').onblur = editingLengthBlur;"),"<th id='label-length'>".lang(128),"<th>".lang(129);if($T=="TABLE")echo"<th id='label-null'>NULL\n","<th><input type='radio' name='auto_increment_col' value=''><abbr id='label-ai' title='".lang(59)."'>AI</abbr>",doc_link(array('sql'=>"example-auto-increment.html",'mariadb'=>"auto_increment/",'sqlite'=>"autoinc.html",'pgsql'=>"datatype-numeric.html#DATATYPE-SERIAL",'cockroach'=>"serial",'mssql'=>"t-sql/statements/create-table-transact-sql-identity-property",)),"<th id='label-default'$uc>".lang(60),(support("comment")?"<th id='label-comment'$Fb>".lang(58):"");$dg=!support("move_col");echo"<td>".icon("plus","add[".($dg?count($n):0)."]","+",lang(130),($dg?on('click','editingAddLastRow'):"")),"<tbody".on('click','editingClick').on('input','editingInput').on('keydown','editingKeydown').">\n";foreach($n
as$s=>$m){$s++;$li=$m[($_POST?"orig":"field")];$Gc=(isset($_POST["add"][$s-1])||(isset($m["field"])&&!idx($_POST["drop_col"],$s)))&&(support("drop_col")||$li=="");echo"<tr".($Gc?"":" hidden").">\n",($T=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",driver()->inout),$m["inout"]):"")."<th>",(support("move_col")?icon("move","","↕",lang(131))." ":"");if($Gc)echo"<input name='fields[$s][field]' value='".h($m["field"])."' data-maxlength='64' autocapitalize='off' aria-labelledby='label-name'".(isset($_POST["add"][$s-1])?" autofocus":"").">";echo
input_hidden("fields[$s][orig]",$li);edit_type("fields[$s]",$m,$_b,$ce);if($T=="TABLE"){echo"<td><label class='block'>".checkbox("fields[$s][null]",1,$m["null"],"","","","label-null")."</label>","<td><label class='block'><input type='radio' name='auto_increment_col' value='$s'".($m["auto_increment"]?" checked":"")." aria-labelledby='label-ai'></label>","<td$uc>".(driver()->generated?html_select("fields[$s][generated]",array_merge(array("","DEFAULT"),driver()->generated),$m["generated"])." ":checkbox("fields[$s][generated]",1,$m["generated"],"","","","label-default"));$c=" name='fields[$s][default]' aria-labelledby='label-default'";$X=h($m["default"]);echo(preg_match('~\n~',$m["default"])?"<textarea$c rows='2' cols='30' style='vertical-align: bottom;'>\n$X</textarea>":"<input$c value='$X'>");if(support("comment")){$c=" name='fields[$s][comment]' data-maxlength='".(min_version(5.5)?1024:255)."' aria-labelledby='label-comment'";echo"<td$Fb>".adminer()->commentInput('COLUMN',$c,$m["comment"]);}}echo"<td>",(support("move_col")?icon("plus","add[$s]","+",lang(130))." ":""),($li==""||support("drop_col")?icon("cross","drop_col[$s]","x",lang(132)):"");}}function
process_fields(array&$n){if($_POST["add"]){$n=array_values($n);array_splice($n,key($_POST["add"]),0,array(array()));}return$_POST["add"]||$_POST["drop_col"];}function
drop_create($Sc,$h,$Uc,$Sl,$Wc,$tg,$Tg,$Rg,$Sg,$Qh,$th){if($_POST["drop"])query_redirect($Sc,$tg,$Tg);elseif($Qh=="")query_redirect($h,$tg,$Sg);elseif(support("transaction_ddl")){driver()->begin();queries_redirect($tg,$Rg,queries($Sc)&&queries($h)&&driver()->commit());driver()->rollback();}elseif($Qh!=$th){$cc=queries($h);queries_redirect($tg,$Rg,$cc&&queries($Sc));if($cc&&$Uc)queries($Uc);}else
queries_redirect($tg,$Rg,queries($Sl)&&queries($Wc)&&queries($Sc)&&queries($h));}function
create_trigger($Uh,array$I){$Yl=" $I[Timing] $I[Event]".(preg_match('~ OF~',$I["Event"])?" $I[Of]":"");return"CREATE TRIGGER ".idf_escape($I["Trigger"]).(JUSH=="mssql"?$Uh.$Yl:$Yl.$Uh).preg_replace('~[\s;]+$~',''," $I[Type]\n$I[Statement]").";";}function
q_dollar($P){$zc='$$';while(strpos($P.$zc,$zc)!=strlen($P))$zc='$_'.substr($zc,1);return$zc.$P.$zc;}function
routine_collate($zb){static$lb=array();if($zb&&!$lb){foreach(collations()as$kb=>$en){foreach((array)$en
as$W)$lb[$W]=$kb;}}return($lb[$zb]?"CHARACTER SET ".q($lb[$zb])." ":"")."COLLATE";}function
create_routine($Yj,array$I){$N=array();$n=$I["fields"];ksort($n);foreach($n
as$m){if($m["field"]!=""){$uf=(preg_match("~^(".driver()->inout.")\$~",$m["inout"])?$m["inout"]:"");$N[]="\n  ".(JUSH=="mssql"?"@$m[field]".process_type($m).($uf?" $uf":""):($uf?"$uf ":"").idf_escape($m["field"]).process_type($m,routine_collate($m["collation"])));}}$wc="";$C=array();foreach(routine_options($Yj)as$x=>$Y){$X=idx($I["options"],$x,"");if($x=="DEFINER")$wc=($X?" $x=".implode("@",array_map('Adminer\q',explode("@",$X,2))):"");elseif(!$Y){if($X!="")$C[]="$x ".q($X);}elseif($X!=reset($Y)&&in_array($X,$Y))$C[]=$X;}$bg=$I["language"];$xc=preg_replace('~[\s;]+$~','',$I["definition"]);$Oc=(JUSH=="pgsql"||($bg&&$bg!="sql"));$_i=($N?implode(",",$N)."\n":"");return"CREATE$wc $Yj ".table(trim($I["name"])).(JUSH=="mssql"&&$Yj=="PROCEDURE"?rtrim($_i):" ($_i)").($Yj=="FUNCTION"?"\nRETURNS".process_type($I["returns"],routine_collate($I["returns"]["collation"])):"").($bg?" LANGUAGE $bg":"").($C?"\n".implode(" ",$C):"").($Oc?" AS ".q_dollar("\n".trim($xc)."\n"):(JUSH=="mssql"?"\nAS":"")."\n$xc;");}function
remove_definer($F){$wc=implode("@",array_map('Adminer\idf_escape',explode("@",logged_user(),2)));return
preg_replace('(^([A-Z =]+) DEFINER='.preg_quote($wc).')','\1',$F);}function
format_foreign_key(array$p){$j=$p["db"];$Bh=$p["ns"];return" FOREIGN KEY (".implode(", ",array_map('Adminer\idf_escape',$p["source"])).") REFERENCES ".($j!=""&&$j!=$_GET["db"]?idf_escape($j).".":"").($Bh!=""&&$Bh!=$_GET["ns"]?idf_escape($Bh).".":"").idf_escape($p["table"])." (".implode(", ",array_map('Adminer\idf_escape',$p["target"])).")".(preg_match("~^(".driver()->onActions.")\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^(".driver()->onActions.")\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"").($p["deferrable"]?" $p[deferrable]":"");}function
tar_file($o,$dm){$H=pack("a100a8a8a8a12a12",$o,644,0,0,decoct($dm->size),decoct(time()));$rb=8*32;for($s=0;$s<strlen($H);$s++)$rb+=ord($H[$s]);$H
.=sprintf("%06o",$rb)."\0 ";echo$H,str_repeat("\0",512-strlen($H));$dm->send();echo
str_repeat("\0",511-($dm->size+511)%512);}function
doc_version(){$Hk=connection()->server_info;if(JUSH=='oracle'){preg_match('~(?:.* |^)(\d+)\.\d+\.\d+\.\d+\.\d+~s',$Hk,$A);return($A[1]>=18?$A[1]:"19");}$Ij=(JUSH=='sql'||connection()->flavor=='cockroach'?'~^\d+\.\d+~':'~^\d\.?\d~');$hn=(preg_match($Ij,$Hk,$A)?$A[0]:"");if(JUSH=='mssql')return($hn>=15?"sql-server-ver$hn":($hn==12?"azuresqldb-current":"sql-server-2017"));return$hn;}function
doc_link(array$Qi,$Tl="<sup>?</sup>"){$hn=doc_version();$Rm=array('sql'=>"https://dev.mysql.com/doc/refman/$hn/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/".(connection()->flavor=='cockroach'?"current":$hn)."/",'mssql'=>"https://learn.microsoft.com/en-us/sql/",'oracle'=>"https://docs.oracle.com/en/database/oracle/oracle-database/$hn/",);if(connection()->flavor=='maria'){$Rm['sql']="https://mariadb.com/kb/en/";$Qi['sql']=(isset($Qi['mariadb'])?$Qi['mariadb']:str_replace(".html","/",$Qi['sql']));}if(connection()->flavor=='cockroach'&&isset($Qi['cockroach'])){$Rm['pgsql']="https://docs.cockroachlabs.com/docs/v$hn/";$Qi['pgsql']=$Qi['cockroach'];}return($Qi[JUSH]?"<a href='".h($Rm[JUSH].$Qi[JUSH].(JUSH=='mssql'?"?view=$hn":""))."'".target_blank().">$Tl</a>":"");}function
db_size($j){if(!connection()->select_db($j))return"?";$H=0;foreach(table_status()as$R)$H+=$R["Data_length"]+$R["Index_length"];return
format_number($H);}function
set_utf8mb4($h){static$N=false;if(!$N&&preg_match('~\butf8mb4~i',$h)){$N=true;echo"SET NAMES ".charset(connection()).";\n\n";}}if(DB==""&&isset($_GET["ns"]))redirect(remove_from_uri('ns'));if(!(DB!=""?connection()->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}if(DB!="")page_header(lang(43).": ".h(DB),adminer()->error(),true,"","db");else{if(!isset($_GET["db"])&&support("single_db")){$i=adminer()->databases();if($i)redirect(ME."db=".url_escape($i[0]));}if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),lang(133),drop_databases($_POST["db"]));page_header(lang(134),$l,false);echo"<p class='links'>\n";foreach(array('database'=>lang(135),'privileges'=>lang(79),'processlist'=>lang(136),'variables'=>lang(137),'status'=>lang(138),)as$x=>$W){if(support($x))echo"<a href='".h(ME)."$x='>$W</a>\n";}echo"<p>".lang(139,get_driver(DRIVER),"<b>".h(connection()->server_info)."</b>","<b>".connection()->extension."</b>")."\n","<p>".lang(140,"<b>".h(logged_user())."</b>")."\n";$i=adminer()->databases();if($i){$kk=support("scheme");$_b=collations();echo"<form action='' method='post'>\n","<table class='checkable odds'".on('click','tableClick').on('dblclick','tableClick').">\n","<thead><tr>".(support("database")?"<td class='hover'>":"")."<th".(JUSH!='mssql'?" aria-sort='ascending'":"").">".lang(43).(get_session("dbs")!==null?" - <a href='".h(ME)."refresh=1'>".lang(141)."</a>":"")."<th>".lang(142)."<th>".lang(143)."<th>".lang(144)." - <a href='".h(ME)."dbsize=1'".on('click','ajaxSetHtml',ME."script=connect").">".lang(145)."</a>"."<tbody>\n";$i=($_GET["dbsize"]?count_tables($i):array_flip($i));foreach($i
as$j=>$S){$Xj=h(preg_replace('~&db=[^&]*~','',ME))."db=".url_escape($j);$t=h("Db-".$j);echo"<tr>".(support("database")?"<td class='hover'>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$Xj' id='$t'>".h($j)."</a>";$zb=h(db_collation($j,$_b));echo"<td>".(support("database")?"<a href='$Xj".($kk?"&amp;ns=":"")."&amp;database=' title='".lang(75)."'>$zb</a>":$zb),"<td align='right'><a href='$Xj&amp;schema=' id='tables-".h($j)."' title='".lang(78)."'>".($_GET["dbsize"]?format_number($S):"?")."</a>","<td align='right' id='size-".h($j)."'>".($_GET["dbsize"]?db_size($j):"?"),"\n";}echo"</table>\n",(support("database")?"<div class='footer'><div>\n"."<fieldset><legend>".lang(146)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''".on('click','countDbs').">\n"."<input type='submit' name='drop' value='".lang(147)."'".confirm().">\n"."</div></fieldset>\n"."</div></div>\n":""),input_token(),"</form>\n",script("tableCheck();");}$pa=adminer();$Yi=($pa
instanceof
Plugins?$pa->plugins:array());$Rc=($pa
instanceof
Plugins?$pa->drivers:array());$Dc=design_checksums();if($Yi||$Rc||$Dc){$sb=($pa
instanceof
Plugins?$pa->checksums():array());$Ih=Plugins::officialChecksums();$Mm=function($Qm){return" (<a href='$Qm'".target_blank()." class='update'>".VERSION."</a>)";};$Xi=function($Nd)use($sb,$Ih,$Mm){return($sb[$Nd]&&$Ih[$Nd]&&$sb[$Nd]!==$Ih[$Nd]?$Mm("https://www.adminer.org/plugins/?version=".VERSION):"");};echo"<div class='plugins'>\n","<h3>".lang(148)."</h3>\n<ul>\n";foreach($Yi
as$Vi){$Gj=new
\ReflectionObject($Vi);$Ac=(method_exists($Vi,'description')?$Vi->description():"");if(!$Ac){if(preg_match('~^/[\s*]+(.+)~',$Gj->getDocComment(),$A))$Ac=$A[1];}$lk=(method_exists($Vi,'screenshot')?$Vi->screenshot():"");echo"<li><b>".get_class($Vi)."</b>".h($Ac?": $Ac":"").($lk?" (<a href='".h($lk)."'".target_blank().">".lang(149)."</a>)":"").$Xi(basename((string)$Gj->getFileName(),'.php'))."\n";}foreach($Rc
as$t=>$B)echo"<li><b>".h($t)."</b>: ".h($B).$Xi(basename((string)$pa->driverFiles[$t],'.php'))."\n";if($Dc){$Kh=official_design_checksums();foreach($Dc
as$o=>$Cc){list($B,$rb)=$Cc;$Jh=$Kh["$B/$o"];echo"<li><b>".h($o)."</b>".h($B?": $B":"").($Jh&&$Jh!==$rb?$Mm("https://www.adminer.org/?version=".VERSION."#extras"):"")."\n";}}echo"</ul>\n";adminer()->pluginsLinks();echo"</div>\n";}}page_footer("db");exit;}if(support("scheme")){if(DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~&db=[^&]+~','\0&ns='.url_escape(get_schema()),relative_uri()));if(!set_schema($_GET["ns"]))page_header(lang(87).h(": $_GET[ns]"),adminer()->error(),true,"","ns");}}adminer()->afterConnect();class
TmpFile{private$handler;var$size=0;function
__construct(){$this->handler=tmpfile();}function
write($Tb){$this->size+=strlen($Tb);fwrite($this->handler,$Tb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}if($_GET["select"]!=""&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");$Y=array_merge((array)$_GET["where"],(array)$_GET["val"]);header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$Y)).".".friendly_url($_GET["field"]));$L=array(idf_escape($_GET["field"]));$G=driver()->select($a,$L,array(where($_GET,$n)),$L);$I=($G?$G->fetch_row():array());echo
driver()->value($I[0],$n[$_GET["field"]]);exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=adminer()->error();$R=table_status1($a);$B=adminer()->tableName($R);$l=$l?:h($R["Error"]);page_header(($n&&is_view($R)?$R['Engine']=='materialized view'?lang(150):lang(151):lang(152)).": ".($B!=""?$B:h($a)),$l,array(),"",!$n);$Wj=array();foreach($n
as$x=>$m)$Wj+=$m["privileges"];adminer()->selectLinks($R,(isset($Wj["insert"])||!support("table")?"":null));$Eb=$R["Comment"];if($Eb!="")echo"<p class='nowrap'>".lang(58).": ".adminer()->commentValue('TABLE',$Eb)."\n";if($n)adminer()->tableStructurePrint($n,$R);function
tables_links(array$S){echo"<ul>\n";foreach($S
as$I){$_=preg_replace('~ns=[^&]*~',"ns=".url_escape($I["ns"]),ME);echo"<li><a href='".h($_."table=".url_escape($I["table"]))."'>".($I["ns"]!=$_GET["ns"]?"<b>".h($I["ns"])."</b>.":"").h($I["table"])."</a>";}echo"</ul>\n";}$sf=driver()->inheritsFrom($a);if($sf){echo"<h3>".lang(153)."</h3>\n";tables_links($sf);}if(support("indexes")&&driver()->supportsIndex($R)){echo"<div>\n","<h3 id='indexes'>".lang(154)."</h3>\n";$w=indexes($a);if($w)adminer()->tableIndexesPrint($w,$R);if(driver()->supportsAlterIndex($R))echo'<p class="links hover"><a href="'.h(ME).'indexes='.url_escape($a).'">'.lang(155)."</a>\n";echo"</div>\n";}if(!is_view($R)&&driver()->supportsAlterTable($R)){if(fk_support($R)){echo"<div>\n","<h3 id='foreign-keys'>".lang(122)."</h3>\n";$ce=foreign_keys($a);if($ce){echo"<table>\n","<thead><tr><th>".lang(156)."<th>".lang(157)."<th>".lang(125)."<th>".lang(124)."<td class='hover'><tbody>\n";foreach($ce
as$B=>$p){echo"<tr title='".h($B)."'>","<th><i>".implode("</i>, <i>",array_map('Adminer\h',$p["source"]))."</i>";$_=($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".url_escape($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".url_escape($p["ns"]),ME):ME));echo"<td><a href='".h($_."table=".url_escape($p["table"]))."'>".($p["db"]!=""&&$p["db"]!=DB?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""&&$p["ns"]!=$_GET["ns"]?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('Adminer\h',$p["target"]))."</i>)","<td>".h($p["on_delete"]),"<td>".h($p["on_update"]),'<td class="hover"><a href="'.h(ME.'foreign='.url_escape($a).'&name='.url_escape($B)).'">'.lang(158).'</a>',"\n";}echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'foreign='.url_escape($a).'">'.lang(159)."</a>\n","</div>\n";}if(support("check")){echo"<div>\n","<h3 id='checks'>".lang(160)."</h3>\n";$nb=driver()->checkConstraints($a);if($nb){echo"<table>\n";foreach($nb
as$x=>$W)echo"<tr title='".h($x)."'>","<td><code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim($W)),80,"</code>"),"<td class='hover'><a href='".h(ME.'check='.url_escape($a).'&name='.url_escape($x))."'>".lang(158)."</a>","\n";echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'check='.url_escape($a).'">'.lang(161)."</a>\n","</div>\n";}}if(support(is_view($R)?"view_trigger":"trigger")&&driver()->supportsAlterTable($R)){echo"<div>\n","<h3 id='triggers'>".lang(162)."</h3>\n";$um=triggers($a);if($um){echo"<table>\n";foreach($um
as$x=>$W)echo"<tr valign='top'><td>".h($W[0])."<td>".h($W[1])."<th>".h($x)."<td class='hover'><a href='".h(ME.'trigger='.url_escape($a).'&name='.url_escape($x))."'>".lang(158)."</a>\n";echo"</table>\n";}echo'<p class="links hover"><a href="'.h(ME).'trigger='.url_escape($a).'">'.lang(163)."</a>\n","</div>\n";}$Mk=driver()->shadowTables($a);if($Mk){echo"<h3 id='shadow-tables'>".lang(164)."</h3>\n";tables_links($Mk);}$rf=driver()->inheritedTables($a);if($rf){echo"<h3 id='partitions'>".lang(165)."</h3>\n";$Ei=driver()->partitionsInfo($a);if($Ei)echo"<p><code class='jush-".JUSH."'>BY ".h("$Ei[partition_by]($Ei[partition])")."</code>\n";tables_links($rf);}}elseif(isset($_GET["schema"])){page_header(lang(78),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));function
schema_column($Q,array$Fj,array&$e){if(!isset($e[$Q])){$e[$Q]=0;foreach((array)idx($Fj,$Q)as$B=>$Hj){if($B!=$Q)$e[$Q]=max($e[$Q],schema_column($B,$Fj,$e)+1);}}return$e[$Q];}function
type_class($T){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$W){if(preg_match("~$x|$W~",$T))return" class='$x'";}}$Dl=array();$Fl=array();$El=array();$Kd=array();$da=($_GET["schema"]?:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$da,$zg,PREG_SET_ORDER);foreach($zg
as$s=>$A){$Dl[$A[1]]=array((float)$A[2],(float)$A[3]);$Fl[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$K=array();$Fj=array();$ce=array();$ya=driver()->allFields();$Pe=array();$Gl=array();foreach(table_status('',true)as$Q=>$R){if(!is_view($R)){if(adminer()->tableName($R)!=""&&!$R["dependent"])$Gl[$Q]=$R;else$Pe[$Q]=true;}}foreach($Gl
as$Q=>$R){$aj=0;$K[$Q]["fields"]=array();foreach($ya[$Q]as$m){$aj+=1.25;$Kd[$Q][$m["field"]]=$aj;$K[$Q]["fields"][$m["field"]]=$m;}foreach(adminer()->foreignKeys($Q)as$W){if($W["db"]==""&&$W["ns"]==""&&!$Pe[$W["table"]]){$ce[$Q][]=$W;$Fj[$W["table"]][$Q]=array();}}}$e=array();$ue=array();$un=array();$_e=array();foreach(array_keys($K)as$B)schema_column($B,$Fj,$e);arsort($e);foreach($e
as$B=>$d){$Zg=null;foreach((array)idx($ce,$B)as$W){if($W["table"]!=$B&&$K[$W["table"]])$Zg=($Zg===null?$e[$W["table"]]:min($Zg,$e[$W["table"]]));}$e[$B]=max($d,(int)$Zg-1);}foreach($K
as$B=>$Q){$d=$e[$B];$ue[$d][]=$B;$Vl=.75*strlen($B);foreach($Q["fields"]as$m)$Vl=max($Vl,.65*strlen($m["field"]));$un[$d]=max(idx($un,$d,0),ceil($Vl)+1);}foreach($ce
as$B=>$en){foreach($en
as$W){$ze=$e[$B]+(idx($e,$W["table"],$e[$B])>$e[$B]?1:0);$_e[$ze]=idx($_e,$ze,0)+1;}}ksort($ue);$Ne=0;$tn=0;$Bb=0;$kj=null;$_l=array();$Il=array();foreach($ue
as$d=>$S){if($kj!==null){$Bb=round($Bb+$un[$kj]+1.7+idx($_e,$d,0)*.1,1);$gi=array();foreach($S
as$B){$ql=0;$ac=0;$ph=array_keys((array)idx($Fj,$B));foreach((array)idx($ce,$B)as$W)$ph[]=$W["table"];foreach($ph
as$lh){if($K[$lh]&&$e[$lh]<$d){$ql+=$K[$lh]["pos"][0];$ac++;}}$gi[$B]=($ac?$ql/$ac:$Ne);}asort($gi);$S=array_keys($gi);}$gm=0;foreach($S
as$B){$aj=1.25*count($K[$B]["fields"]);$K[$B]["pos"]=($Dl[$B]?:array($gm,$Bb));$_l[$B]=$K[$B]["pos"][1];$Il[$B]=$un[$d];$gm+=2.5+$aj;$Ne=max($Ne,$K[$B]["pos"][0]+2.5+$aj);$tn=max($tn,round($K[$B]["pos"][1]+$un[$d],1));if(!$Dl[$B])$El[]="\n\t'".js_escape($B)."': [ ".$K[$B]["pos"][0].", ".$K[$B]["pos"][1]." ]";}$kj=$d;}$hg=array();$Sa=array();foreach($ce
as$B=>$en){foreach($en
as$W){$Ol=idx($_l,$W["table"],$_l[$B]);$Xk=$_l[$B]+$Il[$B];$Vj=($Ol-1>$Xk);$fg=($Vj?$Xk+1:min($_l[$B],$Ol)-1);$Ra=idx($Sa,(string)$fg,0);$Sa[(string)$fg]=$Ra+1;$fg=round($Vj?min($fg+$Ra*.1,$Ol-1):$fg-$Ra*.1,1);while($hg[(string)$fg])$fg-=.0001;$K[$B]["references"][$W["table"]][(string)$fg]=array($W["source"],$W["target"]);$Fj[$W["table"]][$B][(string)$fg]=$W["target"];$hg[(string)$fg]=true;}}echo'<div id="schema" style="height: ',$Ne,'em; width: ',$tn,'em;">
<script',nonce(),'>
const tablePos = {',implode(",",$Fl)."\n",'};
const tablePosDefault = {',implode(",",$El)."\n",'};
const em = qs(\'#schema\').offsetHeight / ',$Ne,';
document.onmousemove = schemaMousemove;
document.onmouseup = event => schemaMouseup(event, \'',js_escape(DB),'\');
</script>
';foreach($K
as$B=>$Q){echo"<div class='table'".on('mousedown','schemaMousedown')." style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em; width: ".$Il[$B]."em;'>",'<a href="'.h(ME).'table='.url_escape($B).'"><b>'.h($B)."</b></a>";foreach($Q["fields"]as$m){$W='<span'.type_class($m["type"]).' title="'.h($m["type"].($m["length"]?"($m[length])":"").($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$W</i>":$W);}foreach((array)$Q["references"]as$Pl=>$Hj){foreach($Hj
as$fg=>$Cj){$gg=$fg-$Q["pos"][1];$nl=($gg>0?"left: 100%; width: calc($gg"."em - 100%)":"left: $gg"."em");$tn=($gg>0?"100%":(-$gg)."em");$s=0;foreach($Cj[0]as$Wk)echo"\n<div class='references' title='".h($Pl)."' id='refs$fg-".($s++)."' style='$nl"."; top: ".$Kd[$B][$Wk]."em; padding-top: .5em;'>"."<div style='border-top: 1px solid gray; width: $tn;'></div></div>";}}foreach((array)$Fj[$B]as$Pl=>$Hj){foreach($Hj
as$fg=>$Ql){$gg=$fg-$Q["pos"][1];$s=0;foreach($Ql
as$Nl)echo"\n<div class='references arrow' title='".h($Pl)."' id='refd$fg-".($s++)."' style='left: $gg"."em; top: ".$Kd[$B][$Nl]."em;'>"."<div style='height: .5em; border-bottom: 1px solid gray; width: ".(-$gg)."em;'></div>"."</div>";}}echo"\n</div>\n";}foreach($K
as$B=>$Q){foreach((array)$Q["references"]as$Pl=>$Hj){if($K[$Pl]){foreach($Hj
as$fg=>$Cj){$ah=$Ne;$Gg=-10;foreach($Cj[0]as$x=>$Wk){$bj=$Q["pos"][0]+$Kd[$B][$Wk];$cj=$K[$Pl]["pos"][0]+$Kd[$Pl][$Cj[1][$x]];$ah=min($ah,$bj,$cj);$Gg=max($Gg,$bj,$cj);}echo"<div class='references' id='refl$fg' style='left: $fg"."em; top: $ah"."em; padding: .5em 0;'><div style='border-right: 1px solid gray; margin-top: 1px; height: ".($Gg-$ah)."em;'></div></div>\n";}}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".url_escape($da)),'" id="schema-link">',lang(166),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$k=array("auto_increment"=>'');foreach(array("type","routine","event","trigger")as$sl){if(support($sl))$k[$sl."s"]='';}save_settings(array_intersect_key($_POST+$k,array_flip(array("output","format","db_style","schema_style","table_style","data_style"))+$k),"adminer_export");$xa=(DB==""||$_GET["ns"]==="");$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ad=dump_headers((count($S)==1?key($S):DB),($xa||count($S)>1));$If=preg_match('~sql~',$_POST["format"]);if($If){echo"-- Adminer ".VERSION." ".get_driver(DRIVER)." ".str_replace("\n"," ",connection()->server_info)." dump\n\n";if(JUSH=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
".($_POST["data_style"]?"SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";connection()->query("SET time_zone = '+00:00'");connection()->query("SET sql_mode = ''");}}$nl=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){adminer()->dumpDatabase($j);if(connection()->select_db($j)){if($If&&$nl)echo
use_sql($j,$nl).";\n\n";foreach(($_GET["ns"]===""?(array)$_POST["schemas"]:(DB!=""||!support("scheme")?array(""):adminer()->schemas()))as$K){if($K!=""){if(DB==""&&information_schema(DB,$K))continue;set_schema($K);}if($If&&$_POST["schema_style"]&&function_exists('Adminer\use_schema_sql'))echo
use_schema_sql($_GET["ns"],$_POST["schema_style"]).";\n\n";$jl=($_POST["table_style"]||$_POST["data_style"]?table_status('',true):array());$_d=array();$mc=array();foreach($jl
as$B=>$R){if($xa||in_array($B,(array)$_POST["tables"]))$_d[$B]=$R;if($xa||in_array($B,(array)$_POST["data"]))$mc[$B]=$R;}if($If){if($_POST["table_style"]=="DROP+CREATE"&&function_exists('Adminer\drop_sql'))echo
drop_sql($_d);if($_POST["data_style"]=="TRUNCATE+INSERT"&&function_exists('Adminer\truncate_all_sql')){$vm=array();foreach($mc
as$B=>$R){if(!is_view($R)&&!($_POST["table_style"]=="DROP+CREATE"&&isset($_d[$B])))$vm[]=$B;}echo
truncate_all_sql($vm);}$ti="";if($_POST["types"]){foreach(types()as$t=>$T){$xc=type_definition($t);$Fh=($xc["kind"]=='d'?"DOMAIN":"TYPE");if($xc["definition"])$ti
.=($nl!='DROP+CREATE'?"DROP $Fh IF EXISTS ".table($T).";;\n":"")."CREATE $Fh ".table($T)." $xc[definition];\n\n";else$ti
.="-- Could not export type $T\n\n";}}if($_POST["routines"]){foreach(routines()as$I){$B=$I["ROUTINE_NAME"];$Yj=$I["ROUTINE_TYPE"];$h=create_routine($Yj,array("name"=>$B)+routine($I["SPECIFIC_NAME"],$Yj));set_utf8mb4($h);$ti
.=($nl!='DROP+CREATE'?"DROP $Yj IF EXISTS ".table($B).";;\n":"")."$h;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$I){$h=remove_definer(get_val("SHOW CREATE EVENT ".idf_escape($I["Name"]),3));set_utf8mb4($h);$ti
.=($nl!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($I["Name"]).";;\n":"")."$h;;\n\n";}}echo($ti&&JUSH=='sql'?"DELIMITER ;;\n\n$ti"."DELIMITER ;\n\n":$ti);}if($_POST["table_style"]||$_POST["data_style"]){$jn=array();foreach($jl
as$B=>$R){$Q=array_key_exists($B,$_d);$kc=array_key_exists($B,$mc);if($Q||$kc){$dm=null;if($Ad=="tar"){$dm=new
TmpFile;ob_start(array($dm,'write'),1e5);}adminer()->dumpTable($B,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$jn[]=$B;elseif($kc){$n=fields($B);$L=array("*");$Xb=convert_fields($n,$n);if($Xb)$L[]=substr($Xb,2);adminer()->dumpData($B,$_POST["data_style"],"",$L);}if($If&&$_POST["triggers"]&&$Q&&($um=trigger_sql($B)))echo"\nDELIMITER ;;\n$um\nDELIMITER ;\n";if($Ad=="tar"){ob_end_flush();tar_file((DB!=""?"":"$j/")."$B.csv",$dm);}elseif($If)echo"\n";}}if($If&&$_POST["table_style"]&&function_exists('Adminer\foreign_keys_sql')){foreach($_d
as$B=>$R){if(!is_view($R))echo
foreign_keys_sql($B);}}if($If){foreach($jn
as$in)adminer()->dumpTable($in,$_POST["table_style"],1);}if($Ad=="tar")echo
pack("x1024");}}}}adminer()->dumpFooter();exit;}page_header(lang(84),$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table class="layout">
';$qc=array('','USE','DROP+CREATE','CREATE');$ik=(JUSH=="mssql"?array('','DROP+CREATE','CREATE'):$qc);$Hl=array('','DROP+CREATE','CREATE');$lc=array('','TRUNCATE+INSERT','INSERT');if(JUSH=="sql")$lc[]='INSERT+UPDATE';$I=get_settings("adminer_export");if(!$I)$I=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"schema_style"=>"","table_style"=>"DROP+CREATE","data_style"=>"INSERT");echo"<tr><th>".lang(167)."<td>".html_radios("output",adminer()->dumpOutput(),$I["output"])."\n","<tr><th>".lang(168)."<td>".html_radios("format",adminer()->dumpFormat(),$I["format"])."\n",(JUSH=="sqlite"?"":"<tr><th>".lang(43)."<td>".html_select('db_style',$qc,$I["db_style"]).(support("type")?checkbox("types",1,$I["types"],lang(7)):"").(support("routine")?checkbox("routines",1,$I["routines"],lang(80)):"").(support("event")?checkbox("events",1,$I["events"],lang(82)):"")),(function_exists('Adminer\use_schema_sql')?"<tr><th>".lang(87)."<td>".html_select('schema_style',$ik,$I["schema_style"]):""),"<tr><th>".lang(143)."<td>".html_select('table_style',$Hl,$I["table_style"]).checkbox("auto_increment",1,$I["auto_increment"],lang(59)).(support("trigger")?checkbox("triggers",1,$I["triggers"],lang(162)):""),"<tr><th>".lang(169)."<td>".html_select('data_style',$lc,$I["data_style"]),'</table>
';adminer()->dumpPrint();echo'<p><input type=\'submit\' value=\'',lang(84),'\'>
',input_token(),'
<table',on('click','dumpClick'),'>
';$ij=array();if($_GET["ns"]===""&&support("scheme")){echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-schemas' checked class='jsonly' title='".lang(170)."'".on('click','formCheck','^schemas\[').">".lang(87)."</label>","<tbody>\n";foreach(adminer()->schemas()as$K){if(!information_schema(DB,$K))echo"<tr><td>".checkbox("schemas[]",$K,true,$K,"","block")."\n";}}elseif(DB!=""){$pb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$pb class='jsonly' title='".lang(170)."'".on('click','formCheck','^tables\[').">".lang(152)."</label>","<th style='text-align: right;'><label class='block'>".lang(169)."<input type='checkbox' id='check-data'$pb class='jsonly' title='".lang(170)."'".on('click','formCheck','^data\[')."></label>","<tbody>\n";$jn="";$Kl=tables_list();foreach($Kl
as$B=>$T){$hj=preg_replace('~_.*~','',$B);$pb=($a==""||$a==(substr($a,-1)=="%"?"$hj%":$B));$oj="<tr><td>".checkbox("tables[]",$B,$pb,$B,"","block");if($T!==null&&!preg_match('~table~i',$T))$jn
.="$oj\n";else
echo"$oj<td align='right'><label class='block'><span id='Rows-".h($B)."'></span>".checkbox("data[]",$B,$pb)."</label>\n";$ij[$hj]++;}echo$jn;if($Kl)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{$i=adminer()->databases();echo"<thead><tr><th style='text-align: left;'>","<label class='block'>".($i?"<input type='checkbox' id='check-databases'".($a==""?" checked":"")." class='jsonly' title='".lang(170)."'".on('click','formCheck','^databases\[').">":"").lang(43)."</label>","<tbody>\n";if($i){foreach($i
as$j){if(!information_schema($j)){$hj=preg_replace('~_.*~','',$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$hj%",$j,"","block")."\n";$ij[$hj]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Td=true;foreach($ij
as$x=>$W){if($x!=""&&$W>1){echo($Td?"<p>":" ")."<a href='".h(ME)."dump=".url_escape("$x%")."'>".h($x)."</a>";$Td=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(79));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(171)."</a>";$G=connection()->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$se=$G;if(!$G)$G=connection()->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo
input_hidden("db",DB),($se?"":input_hidden("grant")),"<table class='odds'>\n","<thead><tr><th>".lang(41)."<th>".lang(39)."<td class='hover'><tbody>\n";while($I=$G->fetch_assoc())echo'<tr><td>'.h($I["User"]),"<td>".h($I["Host"]),'<td class="hover"><a href="'.h(ME.'user='.url_escape($I["User"]).'&host='.url_escape($I["Host"])).'">'.lang(13)."</a>\n";if(!$se||DB!="")echo"<tr><td><input name='user' autocapitalize='off'>","<td><input name='host' value='localhost' autocapitalize='off'>","<td class='hover'><input type='submit' value='".lang(13)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){save_settings(array("output"=>$_POST["output"],"format"=>$_POST["format"]),"adminer_import");dump_headers("sql");if($_POST["format"]=="sql")echo"$_POST[query]\n";else{adminer()->dumpTable("","");adminer()->dumpData("","table",$_POST["query"]);adminer()->dumpFooter();}exit;}if(!$l&&$_POST["val"]){$sa=0;$ol=true;$hb=array();$fk=0;foreach($_POST["val"]as$J)$fk+=count($J);$Ua=$fk>1&&driver()->begin();foreach($_POST["val"]as$yl=>$J){$Q=bracket_escape($yl,true);$n=fields($Q);$zl=indexes($Q);foreach($J
as$u=>$I){parse_str(bracket_escape($u,true),$Z);$Dm=array();foreach($Z["where"]as$x=>$W)$Dm[bracket_escape($x,true)]=$W;if(!$n||$Z["null"]||array_diff_key($Dm,$n)||!unique_array($Dm,$zl)){$ol=false;break
2;}$N=array();$L=array();foreach($I
as$Qf=>$W){$x=bracket_escape($Qf,true);$m=idx($n,$x);if(!$m){$ol=false;break
3;}$N[idf_escape($x)]=(preg_match('~char|text~',$m["type"])||$W!=""?adminer()->processInput($m,$W):"NULL");$L[$Qf]=$x;}$yj=where($Z,$n);if(!driver()->update($Q,$N," WHERE $yj",0," ")){$ol=false;break
2;}$sa+=connection()->affected_rows;$e=array();foreach($L
as$x)$e[]=idf_escape($x);$Nm=driver()->select($Q,$e,array($yj),$e);$vh=($Nm?$Nm->fetch_row():array());$Mf=0;foreach($L
as$Qf=>$x){$m=$n[$x];$ml=array('type'=>(preg_match('~binary~',$m["type"])?'blob':$m["type"]));$hb["val[$yl][$u][$Qf]"]=select_value(idx($vh,$Mf++),"",$ml,null);}}}if($Ua&&$ol)$ol=driver()->commit();queries_redirect(null,lang(172,$sa),$ol);if($Ua&&!$ol)driver()->rollback();page_headers();page_messages($l);foreach($hb
as$B=>$W)echo"<div data-name='".h($B)."' hidden>$W</div>\n";exit;}restart_session();$Re=&get_session("queries");$Qe=&$Re[DB];if(!$l&&$_POST["clear"]){$Qe=array();redirect(remove_from_uri("history"));}stop_session();$qa=get_settings("adminer_import");if($_POST&&$qa)save_settings($qa,"adminer_import");page_header((isset($_GET["import"])?lang(83):lang(72)),$l);$og=driver()->lineComment();if(!$l&&$_POST&&!(isset($_GET["import"])&&adminer()->importProcess())){$zc=driver()->delimiter;$ge=false;if(!isset($_GET["import"]))$F=$_POST["query"];elseif($_POST["webfile"]){$bl=adminer()->importServerPath();$ge=@fopen((file_exists($bl)?$bl:"compress.zlib://$bl.gz"),"rb");$F=($ge?fread($ge,1e6):false);}else$F=get_file("sql_file",true,$zc);if(is_string($F)){if(($Og=ini_bytes("memory_limit"))!="-1")ini_set("memory_limit",max($Og,strval(2*strlen($F)+memory_get_usage()+8e6)));if($F!=""&&strlen($F)<1e6){$vj=$F.(preg_match("~$zc\\s*\$~",$F)?"":$zc);if(!$Qe||first(end($Qe))!=$vj){restart_session();$Qe[]=array($vj,time());set_session("queries",$Re);stop_session();}}$Yk="(?:\\s|/\\*[\s\S]*?\\*/|(?:$og)[^\n]*\n?|--\r?\n)";$Lh=0;$gd=true;$Zb=false;$g=connect();if($g&&DB!=""){$g->select_db(DB);if($_GET["ns"]!="")set_schema($_GET["ns"],$g);}$Db=0;$nd=array();$Bi='[\'"'.(JUSH=="sql"?'`':(JUSH=="sqlite"?'`[':(JUSH=="mssql"?'[':''))).']|/\*|'.$og.'|$'.(JUSH=="pgsql"?'|\$([a-zA-Z]\w*)?\$':'');$hm=microtime(true);while($F!=""){if(!$Lh&&preg_match("~^$Yk*+DELIMITER\\s+(\\S+)~i",$F,$A)){$zc=preg_quote($A[1]);$F=substr($F,strlen($A[0]));}elseif(!$Lh&&JUSH=='pgsql'&&preg_match("~^($Yk*+COPY\\s+)[^;]+\\s+FROM\\s+stdin;~i",$F,$A)){$zc="\n\\\\\\.\r?\n";$Zb=true;$Lh=strlen($A[0]);}else{preg_match("($zc\\s*|$Bi)",$F,$A,PREG_OFFSET_CAPTURE,$Lh);list($ee,$aj)=$A[0];if(!$ee&&$ge&&!feof($ge))$F
.=fread($ge,1e5);else{if(!$ee&&rtrim($F)=="")break;$Lh=$aj+strlen($ee);if($ee&&!preg_match("(^$zc)",$ee)){$eb=driver()->hasCStyleEscapes()||(JUSH=="pgsql"&&($aj>0&&strtolower($F[$aj-1])=="e"));$Ri=($ee=='/*'?'\*/':($ee=='['?']':(preg_match("~^(?:$og)~",$ee)?"\n":preg_quote($ee).($eb?'|\\\\.':''))));while(preg_match("($Ri|\$)s",$F,$A,PREG_OFFSET_CAPTURE,$Lh)){$gk=$A[0][0];if(!$gk&&$ge&&!feof($ge))$F
.=fread($ge,1e5);else{$Lh=$A[0][1]+strlen($gk);if(!$gk||$gk[0]!="\\")break;}}}else{$vj=substr($F,0,$aj+($Zb?3:0));$F=substr($F,$Lh);$Lh=0;if($Zb){$zc=driver()->delimiter;$Zb=false;}$wb="<code class='jush-".JUSH."'>".adminer()->sqlCommandQuery($vj)."</code>";if(preg_match("~^$Yk*+\$~",$vj)&&!preg_match('~/\*M?!~',$vj)){echo($_POST["only_errors"]?"":"<pre>$wb</pre>\n");continue;}$gd=false;$Db++;$oj="<pre id='sql-$Db'>$wb</pre>\n";if(JUSH=="sqlite"&&preg_match("~^$Yk*+(ATTACH|VACUUM\\b.*\\bINTO)\\b~is",$vj,$A)!==0){echo$oj,"<p class='error'>".lang(173,preg_match('~ATTACH~i',$A[1])?'ATTACH':'VACUUM INTO')."\n";$nd[]=" <a href='#sql-$Db'>$Db</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$oj;ob_flush();flush();}$hl=microtime(true);if(connection()->multi_query($vj)&&$g&&preg_match("~^$Yk*+USE\\b~i",$vj))$g->query($vj);do{$G=connection()->store_result();if(connection()->error){echo($_POST["only_errors"]?$oj:""),"<p class='error'>".lang(174).(connection()->errno?" (".connection()->errno.")":"").": ".adminer()->error()."\n";$nd[]=" <a href='#sql-$Db'>$Db</a>";if($_POST["error_stops"])break
2;}else{$_=ME."sql=".url_escape(trim($vj));$Wl=" <span class='time'>(".format_time($hl).")</span>".(strlen($_)<1900?" <a href='".h($_)."'>".lang(13)."</a>":"");$sa=connection()->affected_rows;$nn=($_POST["only_errors"]?"":driver()->warnings());$on="warnings-$Db";if($nn)$Wl
.=", <a href='#$on' class='toggle'>".lang(54)."</a>";$yd="";$zd="explain-$Db";if(is_object($G)){$z=$_POST["limit"];$Dh=$z;$Zc=!$_POST["only_errors"];if($Zc)echo"<form action='' method='post'>\n";$ki=print_select_result($G,$g,array(),$Dh,$Zc);if(!$_POST["only_errors"]){$Dh=max($G->num_rows,$Dh);echo"<p class='sql-footer'>".($Dh?($z&&$Dh>$z?lang(175,$z):"").lang(176,$Dh):""),$Wl;if($g&&preg_match("~^($Yk|\\()*+SELECT\\b~i",$vj)&&($yd=adminer()->explain($g,$vj,$ki))!="")echo", <a href='#$zd' class='toggle'>Explain</a>";if($Zc)echo", <input type='submit' name='save' value='".lang(17)."' class='jsonly' disabled"." title='".lang(177)."'".on('click','sqlSave',lang(20)).">";$t="export-$Db";echo", <a href='#$t' class='toggle'>".lang(84)."</a><span id='$t' class='hidden'>: ".html_select("output",adminer()->dumpOutput(),$qa["output"])." ".html_select("format",adminer()->dumpFormat(),$qa["format"]).input_hidden("query",$vj)."<input type='submit' name='export' value='".lang(84)."'".($z?"":on('click','sqlExport')).">".input_token()."</span>\n"."</form>\n";}}else{if(preg_match("~^$Yk*+(CREATE|DROP|ALTER)$Yk++(DATABASE|SCHEMA)\\b~i",$vj)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h(connection()->info)."'>".lang(178,$sa)."$Wl\n";}echo($nn?"<div id='$on' class='hidden'>\n$nn</div>\n":""),($yd!=""?"<div id='$zd' class='hidden explain'>\n$yd</div>\n":"");}$hl=microtime(true);}while(connection()->next_result());}}}}}if($gd)echo"<p class='message'>".lang(179)."\n";else{$gf=connection()->inTransaction();driver()->rollback();if($gf)echo"<pre><code class='jush-".JUSH."'>ROLLBACK".(JUSH=="mssql"?" TRANSACTION":"")." -- Adminer</code></pre>\n";if($_POST["only_errors"])echo"<p class='message'>".lang(180,$Db-count($nd))," <span class='time'>(".format_time($hm).")</span>\n";elseif($nd&&$Db>1)echo"<p class='error'>".lang(174).": ".implode("",$nd)."\n";}}else
echo"<p class='error'>".upload_error($F)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form"';$Om="";if(!isset($_GET["import"]))echo
on('submit','sqlSubmit',remove_from_uri("sql|limit|error_stops|only_errors|history"));else
echo
on_upload_progress($Om);echo'>
';$vd="<input type='submit' value='".lang(181)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$vj=$_GET["sql"];if($_POST)$vj=$_POST["query"];elseif($_GET["history"]=="all")$vj=$Qe;elseif($_GET["history"]!="")$vj=idx($Qe[$_GET["history"]],0);echo"<p>";textarea("query",$vj,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>";adminer()->sqlPrintAfter();echo"$vd\n",lang(182).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{$Ae=(extension_loaded("zlib")?"[.gz]":"");echo"<fieldset><legend>".lang(183)."</legend><div>",($Om?input_hidden(ini_get("session.upload_progress.name"),$Om):""),"SQL$Ae: ".file_input(" name='sql_file[]' multiple","\n$vd"),($Om?" <progress class='jsonly hidden' max='1' value='0'></progress>":""),"</div></fieldset>\n";$df=adminer()->importServerPath();if($df)echo"<fieldset><legend>".lang(184)."</legend><div>",lang(185,"<code>".h($df)."$Ae</code>")," <input type='submit' name='webfile' value='".lang(186)."'>","</div></fieldset>\n";adminer()->importPrint();echo"<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])||$_GET["error_stops"]),lang(187))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])||$_GET["only_errors"]),lang(188))."\n",input_token();if(!isset($_GET["import"])&&$Qe){print_fieldset("history",lang(189),$_GET["history"]!="");for($W=end($Qe);$W;$W=prev($Qe)){$x=key($Qe);list($vj,$Wl,$cd)=$W;echo'<div><a href="'.h(ME."sql=&history=$x").'" class="hover">'.lang(13)."</a>"." <span class='time' title='".@date('Y-m-d',$Wl)."'>".@date("H:i:s",$Wl)."</span>"." <code class='jush-".JUSH."'>".shorten_utf8(preg_replace('~\s+~',' ',ltrim(preg_replace("~^(?:$og).*~m",'',$vj))),80,"</code>").($cd?" <span class='time'>($cd)</span>":"")."</div>\n";}echo"<input type='submit' name='clear' value='".lang(190)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(191)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$Lm=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$B=>$m){if((!$Lm&&!isset($m["privileges"]["insert"]))||adminer()->fieldName($m)=="")unset($n[$B]);}if($_POST&&!$l&&!isset($_GET["select"])){$tg=relative_uri((string)$_POST["referer"]);if($_POST["insert"])$tg=($Lm?null:relative_uri());elseif(!preg_match('~^.+&select=.+$~',$tg))$tg=ME."select=".url_escape($a);$w=indexes($a);$Em=unique_array($_GET["where"],$w);$yj="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($tg,lang(192),driver()->delete($a,$yj,$Em?0:1));else{$N=array();foreach($n
as$B=>$m){$W=process_input($m);if($W!==false&&$W!==null)$N[idf_escape($B)]=$W;}if($Lm){if(!$N)redirect($tg);queries_redirect($tg,lang(193),driver()->update($a,$N,$yj,$Em?0:1));if(is_ajax()){page_headers();page_messages($l);exit;}}else{$G=driver()->insert($a,$N);$eg=($G?last_id($G):0);queries_redirect($tg,lang(194,($eg?" $eg":"")),$G);}}}$I=null;$F="";$Wl="";if($Z){$L=array();$sk=array("*");foreach($n
as$B=>$m){if(isset($m["privileges"]["select"])){$Fa=($_POST["clone"]&&$m["auto_increment"]?"''":convert_field($m));$d=($Fa?"$Fa AS ":"").idf_escape($B);$L[]=$d;if($Fa)$sk[]=$d;}}$I=array();if(!support("table")){$L=array("*");$sk=$L;}if($L){$hl=microtime(true);$G=driver()->select($a,$L,array($Z),$L,array(),(isset($_GET["select"])?2:1));$F=str_replace("SELECT ".implode(", ",$L),"SELECT ".implode(", ",$sk),driver()->query);$Wl=format_time($hl);if(!$G)$l=adminer()->error();else{$I=$G->fetch_assoc();if(!$I)$I=false;}if(isset($_GET["select"])&&(!$I||$G->fetch_assoc()))$I=null;}}if(!$n&&driver()->primary!=""){if(!$Z){$G=driver()->select($a,array("*"),array(),array("*"));$I=($G?$G->fetch_assoc():false);if(!$I)$I=array(driver()->primary=>"");}if($I){foreach($I
as$x=>$W){if(!$Z)$I[$x]=null;$n[$x]=array("field"=>$x,"null"=>($x!=driver()->primary),"auto_increment"=>($x==driver()->primary));}}}if($_POST["save"]){$dj=array();foreach((array)$_POST["fields"]as$x=>$W)$dj[bracket_escape($x,true)]=$W;$I=$dj+($I?$I:array());}edit_form($a,$n,$I,$Lm,$l,$F,$Wl);}elseif(isset($_GET["create"])){function
referencable_primary($vk){$H=array();foreach(table_status('',true)as$Bl=>$Q){if($Bl!=$vk&&!$Q["dependent"]&&fk_support($Q)){foreach(fields($Bl)as$m){if($m["primary"]){if($H[$Bl]){unset($H[$Bl]);break;}$H[$Bl]=$m;}}}}return$H;}$a=$_GET["create"];$Gi=driver()->partitionBy;$Ki=($Gi&&$a!=""?driver()->partitionsInfo($a):array());$Ej=referencable_primary($a);$ce=array();foreach($Ej
as$Bl=>$m)$ce[str_replace("`","``",$Bl)."`".str_replace("`","``",$m["field"])]=$Bl;$ni=array();$R=array();$Ah=false;if($a!=""){$ni=fields($a);$R=table_status1($a);$Ah=(count($R)<2);}$_a=($a==""||driver()->supportsAlterTable($R));$I=$_POST;$I["fields"]=(array)$I["fields"];if($I["auto_increment_col"])$I["fields"][$I["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!$l)save_settings(array("comments"=>$_POST["comments"],"defaults"=>$_POST["defaults"]));if($_POST&&!process_fields($I["fields"])&&!$l){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(195),drop_tables(array($a)));else{$n=array();$ya=array();$Sm=false;$ae=array();$mi=reset($ni);$ua=" FIRST";foreach($I["fields"]as$m){$p=$ce[$m["type"]];$xm=($p!==null?$Ej[$p]:$m);if($m["field"]!=""){if(!$m["generated"])$m["default"]=null;$tj=process_field($m,$xm);$ya[]=array($m["orig"],$tj,$ua);if(!$mi||$tj!==process_field($mi,$mi)){$n[]=array($m["orig"],$tj,$ua);if($m["orig"]!=""||$ua)$Sm=true;}if($p!==null)$ae[idf_escape($m["field"])]=($a!=""&&JUSH!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$ce[$m["type"]],'source'=>array($m["field"]),'target'=>array($xm["field"]),'on_delete'=>$m["on_delete"],));$ua=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$Sm=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$mi=next($ni);if(!$mi)$ua="";}}$Ii=array();if(in_array($I["partition_by"],$Gi)){foreach($I
as$x=>$W){if(preg_match('~^partition~',$x))$Ii[$x]=$W;}foreach($Ii["partition_names"]as$x=>$B){if($B==""){unset($Ii["partition_names"][$x]);unset($Ii["partition_values"][$x]);}}$Ii["partition_names"]=array_values($Ii["partition_names"]);$Ii["partition_values"]=array_values($Ii["partition_values"]);if($Ii==$Ki)$Ii=array();}elseif(preg_match("~partitioned~",$R["Create_options"]))$Ii=null;$Qg=lang(196);if($a==""){cookie("adminer_engine",$I["Engine"]);$Qg=lang(197);}$B=trim($I["name"]);$tg=ME.(support("table")?"table=":"select=").url_escape($B);$G=alter_table($a,$B,(JUSH=="sqlite"&&($Sm||$ae)?$ya:$n),$ae,($I["Comment"]!=$R["Comment"]?$I["Comment"]:null),($I["Engine"]&&$I["Engine"]!=$R["Engine"]?$I["Engine"]:""),($I["Collation"]&&$I["Collation"]!=$R["Collation"]?$I["Collation"]:""),($I["Auto_increment"]!=""?number($I["Auto_increment"]):""),$Ii);if($G&&!Queries::$queries&&$a!=""&&!$n&&!$ae)redirect($tg);queries_redirect($tg,$Qg,$G);}}page_header(($a!=""?lang(52):lang(85)),$l,array("table"=>$a),h($a),$Ah);if(!$_POST){$Am=driver()->types();$I=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Am["int"])?"int":(isset($Am["integer"])?"integer":"")),"on_update"=>"")),"partition_names"=>array(""),);if($a!=""){$I=$R;$I["name"]=$a;$I["fields"]=array();if(!$_GET["auto_increment"])$I["Auto_increment"]="";foreach($ni
as$m){if($m["generated"])$m["default"]=ltrim($m["default"]);$m["generated"]=$m["generated"]?:(isset($m["default"])?"DEFAULT":"");$I["fields"][]=$m;}if($Gi){$I+=$Ki;$I["partition_names"][]="";$I["partition_values"][]="";}}}$_b=flat_collations();$id=driver()->engines();foreach($id
as$hd){if(!strcasecmp($hd,$I["Engine"])){$I["Engine"]=$hd;break;}}$Bg=max_input_vars(12,20);if($Bg){$Pe=(count($I["fields"])>$Bg?"":" hidden");echo"<p".($Pe?" id='max-fields' data-columns='$Bg'":"")." class='error$Pe'>".max_input_vars_error()."\n";}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(198).": <input name='name'".($a==""&&!$_POST?" autofocus":"")." data-maxlength='64' value='".h($I["name"])."' autocapitalize='off'>\n",(!$_a?h($R["Engine"])."\n":($id?html_select("Engine",array(""=>"(".lang(199).")")+$id,$I["Engine"],on('change','helpClose').on_help_value())."\n":""));if($_b)echo"<datalist id='collations'>".optionlist($_b)."</datalist>\n",(preg_match("~sqlite|mssql~",JUSH)?"":"<input list='collations' name='Collation' value='".h($I["Collation"])."' placeholder='(".lang(123).")'>\n");echo"<input type='submit' value='".lang(17)."'>\n";}if(support("columns")&&$_a){echo"<div class='scrollable'>\n","<table id='edit-fields' class='nowrap'>\n";edit_fields($I["fields"],$_b,"TABLE",$ce);echo"</table>\n",script("editFields();"),"</div>\n<p>\n",lang(59).": <input type='number' name='Auto_increment' class='size' value='".h($I["Auto_increment"])."'>\n",checkbox("defaults",1,($_POST?$_POST["defaults"]:get_setting("defaults")),lang(200),on('click','columnShowClick',6),"jsonly");$Gb=($_POST?$_POST["comments"]:get_setting("comments"));if(support("comment")){echo
checkbox("comments",1,$Gb,lang(58),on('click','editingCommentsClick',true),"jsonly").' ';$c=" name='Comment' data-maxlength='".(min_version(5.5)?2048:60)."'".($Gb?"":" class='hidden'");echo
adminer()->commentInput('TABLE',$c,$I["Comment"]);}echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';}echo'
';if($a!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$a)),'>
';if($Gi&&(JUSH=='sql'||$a=="")){$Hi=preg_match('~RANGE|LIST~',$I["partition_by"]);print_fieldset("partition",lang(202),$I["partition_by"]);echo"<p>".html_select("partition_by",array_merge(array(""),$Gi),$I["partition_by"],on('change','partitionByChange').on_help_value('.','PARTITION BY $&'))."\n","(<input name='partition' value='".h($I["partition"])."'>)\n",lang(203).": <input type='number' name='partitions' class='size".($Hi||!$I["partition_by"]?" hidden":"")."' value='".h($I["partitions"])."'>\n","<table id='partition-table'".($Hi?"":" class='hidden'").">\n","<thead><tr><th>".lang(204)."<th>".lang(205)."<tbody>\n";foreach($I["partition_names"]as$x=>$W)echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'" autocapitalize="off"'.($x==count($I["partition_names"])-1?on('input','partitionNameChange'):'').'>','<td><input name="partition_values[]" value="'.h(idx($I["partition_values"],$x)).'">';echo"</table>\n</div></fieldset>\n";}echo
input_token(),'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$mf=array("PRIMARY","UNIQUE","INDEX");$R=table_status1($a,true);$jf=driver()->indexAlgorithms($R);if(preg_match('~MyISAM|M?aria'.(min_version(5.6,'10.0.5')?'|InnoDB':'').'~i',$R["Engine"]))$mf[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.(min_version(5.7,'10.2.2')?'|InnoDB':'').'~i',$R["Engine"]))$mf[]="SPATIAL";if(min_version('',11.7)&&preg_match('~MyISAM|InnoDB~i',$R["Engine"]))$mf[]="VECTOR";$w=indexes($a);$n=fields($a);$mj=array();if(JUSH=="mongo"){$mj=$w["_id_"];unset($mf[0]);unset($w["_id_"]);}$I=$_POST;if($I)save_settings(array("index_options"=>$I["options"]));if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]){$b=array();foreach($I["indexes"]as$v){$B=$v["name"];if(in_array($v["type"],$mf)){$e=array();$lg=array();$Bc=array();$Zh=array();$kf=(support("partial_indexes")?$v["partial"]:"");$if=(in_array($v["algorithm"],$jf)?$v["algorithm"]:"");$N=array();ksort($v["columns"]);foreach($v["columns"]as$x=>$d){if($d!=""){$y=idx($v["lengths"],$x);$_c=idx($v["descs"],$x);$Yh=idx($v["opclasses"],$x);$N[]=($n[$d]?idf_escape($d):$d).($y?"(".(+$y).")":"").($Yh!=""?" ".idf_escape($Yh):"").($_c?" DESC":"");$e[]=$d;$lg[]=($y?:null);$Bc[]=$_c;$Zh[]="$Yh";}}$wd=$w[$B];if($wd){ksort($wd["columns"]);ksort($wd["lengths"]);ksort($wd["descs"]);if($v["type"]==$wd["type"]&&array_values($wd["columns"])===$e&&(!$wd["lengths"]||array_values($wd["lengths"])===$lg)&&array_values($wd["descs"])===$Bc&&(!$wd["opclasses"]||array_values($wd["opclasses"])===$Zh)&&$wd["partial"]==$kf&&(!$jf||$wd["algorithm"]==$if)){unset($w[$B]);continue;}}if($e)$b[]=array($v["type"],$B,$N,$if,$kf);}}foreach($w
as$B=>$wd)$b[]=array($wd["type"],$B,"DROP");if(!$b)redirect(ME."table=".url_escape($a));queries_redirect(ME."table=".url_escape($a),lang(206),alter_indexes($a,$b));}page_header(lang(154),$l,array("table"=>$a),h($a));$Md=array_keys($n);if($_POST["add"]){foreach($I["indexes"]as$x=>$v){if($v["columns"][count($v["columns"])]!="")$I["indexes"][$x]["columns"][]="";}$v=end($I["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$I["indexes"][]=array("columns"=>array(1=>""));}if(!$I){foreach($w
as$x=>$v){$w[$x]["name"]=$x;$w[$x]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$I["indexes"]=$w;}$lg=(JUSH=="sql"||JUSH=="mssql");$Zh=driver()->indexOpclasses();$Nk=($_POST?$_POST["options"]:get_setting("index_options"));echo'
<form action="" method="post">
<div class="scrollable">
<table class="nowrap odds">
<thead><tr>
<th id="label-type">',lang(207);$bf=" class='idxopts".($Nk?"":" hidden")."'";if($jf)echo"<th id='label-algorithm'$bf>".lang(208).doc_link(array('sql'=>'create-index.html#create-index-storage-engine-index-types','mariadb'=>'storage-engine-index-types/','pgsql'=>'indexes-types.html','cockroach'=>'create-index#parameters',));echo'<th><input type="submit" hidden>',lang(209).($lg?"<span$bf> (".lang(210).")</span>":"");if($lg||support("descidx"))echo
checkbox("options",1,$Nk,lang(129),on('click','indexOptionsShow'),"jsonly")."\n";echo'<th id="label-name">',lang(211);if(support("partial_indexes"))echo"<th id='label-condition'$bf>".lang(212);echo'<td><noscript>',icon("plus","add[0]","+",lang(130)),'</noscript>
<tbody>
';if($mj){echo"<tr><td>PRIMARY<td>";foreach($mj["columns"]as$x=>$d)echo
select_input(" disabled",array_combine($Md,$Md),$d),"<label><input disabled type='checkbox'>".lang(67)."</label> ";echo"<td><td>\n";}$Mf=1;foreach($I["indexes"]as$v){if(!$_POST["drop_col"]||$Mf!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Mf][type]",array(-1=>"")+$mf,$v["type"],($Mf==count($I["indexes"])?on('change','indexesAddRow'):""),"label-type");if($jf)echo"<td$bf>".html_select("indexes[$Mf][algorithm]",array_merge(array(""),$jf),$v['algorithm'],"","label-algorithm");echo"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$x=>$d){echo"<span>".select_input(" name='indexes[$Mf][columns][$s]' title='".lang(56)."'".on('change','indexesChangeColumn',(JUSH=="sql"?"":$_GET["indexes"]."_")),($n&&($d==""||$n[$d])?array_combine($Md,$Md):array()),$d)," <span$bf>",($lg?"<input type='number' name='indexes[$Mf][lengths][$s]' class='size' value='".h(idx($v["lengths"],$x))."' title='".lang(128)."'>":"");if($Zh){$Yh=idx($v["opclasses"],$x);echo
html_select("indexes[$Mf][opclasses][$s]",array(""=>"(".lang(213).")")+array_combine($Zh,$Zh)+($Yh!=""?array($Yh=>$Yh):array()),$Yh),doc_link(array('pgsql'=>'indexes-opclass.html'));}echo(support("descidx")?checkbox("indexes[$Mf][descs][$s]",1,idx($v["descs"],$x),lang(67)):""),"<br>","</span></span>";$s++;}echo"<td><input name='indexes[$Mf][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n";if(support("partial_indexes"))echo"<td$bf><input name='indexes[$Mf][partial]' value='".h($v["partial"])."' autocapitalize='off' aria-labelledby='label-condition'>\n";echo"<td>".icon("cross","drop_col[$Mf]","x",lang(132),on('click','editingRemoveRow','indexes$1[type]'));}$Mf++;}echo'</table>
</div>
<p>
<input type=\'submit\' value=\'',lang(17),'\'>
',input_token(),'</form>
';}elseif(isset($_GET["database"])){$I=$_POST;if($_POST&&!$l&&!$_POST["add"]){$B=trim($I["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(214),drop_databases(array(DB)));}elseif($B!==DB){if(DB!=""){$_GET["db"]=$B;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".url_escape($B),lang(215),rename_database($B,(string)$I["collation"]));}else{$i=explode("\n",str_replace("\r","",$B));$ol=true;$cg="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,(string)$I["collation"]))$ol=false;$cg=$j;}}restart_session();set_session("dbs",null);queries_redirect(preg_replace('~&db=[^&]*~','',ME)."db=".url_escape($cg),lang(216),$ol);}}else{if(!$I["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($B).(preg_match('~^[a-z0-9_]+$~i',$I["collation"])?" COLLATE $I[collation]":""),substr(ME,0,-1),lang(217));}}page_header(DB!=""?lang(75):lang(135),$l,array(),h(DB));$_b=collations();$B=DB;if($_POST)$B=$I["name"];elseif(DB!="")$I["collation"]=db_collation(DB,$_b);elseif(JUSH=="sql"){foreach(get_vals("SHOW GRANTS")as$se){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\.\*)?~',$se,$A)&&$A[1]){$B=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add"]||strpos($B,"\n")?'<textarea autofocus name="name" rows="10" cols="40">'.h($B).'</textarea><br>':'<input name="name" autofocus value="'.h($B).'" data-maxlength="64" autocapitalize="off">')."\n",($_b?html_select("collation",array(""=>"(".lang(123).")")+$_b,$I["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mariadb'=>"supported-character-sets-and-collations/",'mssql'=>"relational-databases/system-functions/sys-fn-helpcollations-transact-sql",)):"")."\n",'<input type=\'submit\' value=\'',lang(17),'\'>
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(147)."'".confirm(lang(201,DB)).">\n";elseif(!$_POST["add"]&&$_GET["db"]=="")echo
icon("plus","add[0]","+",lang(130))."\n";echo
input_token(),'</form>
';}elseif(isset($_GET["scheme"])){$I=$_POST;if($_POST&&!$l){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(218));else{$B=trim($I["name"]);$_
.=url_escape($B);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($B),$_,lang(219));elseif($_GET["ns"]!=$B)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($B),$_,lang(220));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(76):lang(77),$l);if(!$I)$I["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" autofocus value="',h($I["name"]),'" autocapitalize="off">
<input type=\'submit\' value=\'',lang(17),'\'>
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(147)."'".confirm(lang(201,$_GET["ns"])).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["call"])){$ca=($_GET["name"]?:$_GET["call"]);$ck=(isset($_GET["callf"])?"FUNCTION":"PROCEDURE");$Yj=routine($_GET["call"],$ck);page_header(lang(221).": ".h($ca),$l,"#routines","",!$Yj);$ef=array();$ti=array();foreach($Yj["fields"]as$s=>$m){if(substr($m["inout"],-3)=="OUT"&&JUSH=='sql')$ti[$s]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||preg_match('~^(IN|OUTPUT)~',$m["inout"]))$ef[]=$s;}if(!$l&&$_POST){$fb=array();foreach($Yj["fields"]as$x=>$m){$W="";if(in_array($x,$ef)){$W=process_input($m);if($W===false)$W="''";if(isset($ti[$x]))connection()->query("SET @".idf_escape($m["field"])." = $W");}if(isset($ti[$x]))$fb[]="@".idf_escape($m["field"]);elseif(in_array($x,$ef))$fb[]=$W;}$Da=implode(", ",$fb);$F=(isset($_GET["callf"])||JUSH!="mssql"?(isset($_GET["callf"])?"SELECT ":"CALL ").(idx($Yj["returns"],"type")=="record"?"* FROM ":"").table($ca)."($Da)":"EXEC ".table($ca).($Da!=""?" $Da":""));$hl=microtime(true);$G=connection()->multi_query($F);$sa=connection()->affected_rows;echo
adminer()->selectQuery($F,$hl,!$G);if(!$G)echo"<p class='error'>".adminer()->error()."\n";else{$g=connect();if($g)$g->select_db(DB);do{$G=connection()->store_result();if(is_object($G))print_select_result($G,$g);else
echo"<p class='message'>".lang(222,$sa)." <span class='time'>".@date("H:i:s")."</span>\n";}while(connection()->next_result());if($ti)print_select_result(connection()->query("SELECT ".implode(", ",$ti)));}}echo'
<form action="" method="post">
';if($ef){echo"<table class='layout'>\n";foreach($ef
as$x){$m=$Yj["fields"][$x];$B=$m["field"];echo"<tr><th>".adminer()->fieldName($m);$X=idx($_POST["fields"],$B);if($X!=""){if($m["type"]=="set")$X=implode(",",$X);}input($m,$X,idx($_POST["function"],$B,""));echo"\n";}echo"</table>\n";}echo'<p>
<input type=\'submit\' value=\'',lang(221),'\'>
',input_token(),'</form>

',adminer()->commentValue($ck,$Yj['comment']);}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$B=$_GET["name"];$I=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if(!$_POST["drop"]){$I["source"]=array_filter($I["source"],'strlen');ksort($I["source"]);$Nl=array();foreach($I["source"]as$x=>$W)$Nl[$x]=$I["target"][$x];$I["target"]=$Nl;}if(JUSH=="sqlite")$G=recreate_table($a,$a,array(),array(),array(" $B"=>($I["drop"]?"":" ".format_foreign_key($I))));else{$b="ALTER TABLE ".table($a);$G=($B==""||queries("$b DROP ".(JUSH=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($B)));if(!$I["drop"])$G=queries("$b ADD".format_foreign_key($I));}queries_redirect(ME."table=".url_escape($a),($I["drop"]?lang(223):($B!=""?lang(224):lang(225))),$G);if(!$I["drop"])$l=lang(226);}$Ah=false;if(!$_POST&&$B!=""){$ce=foreign_keys($a);$I=idx($ce,$B,array());$Ah=!$I;}page_header(($B!=""?lang(227):lang(159)),$l,array("table"=>$a),h($B!=""?$B:$a),$Ah);if($_POST){ksort($I["source"]);if($_POST["change"]||$_POST["change-js"])$I["target"]=array();else$I["source"][]="";}elseif($B!="")$I["source"][]="";else{$I["table"]=$a;$I["source"]=array("");}echo'
<form action="" method="post">
';$Wk=array_keys(fields($a));if($I["db"]!="")connection()->select_db($I["db"]);if($I["ns"]!=""){$oi=get_schema();set_schema($I["ns"]);}$Dj=array_keys(array_filter(table_status('',true),function(array$R){return!$R["dependent"]&&fk_support($R);}));$Nl=array_keys(fields(in_array($I["table"],$Dj)?$I["table"]:reset($Dj)));$c=on('change','foreignChange');echo"<p><label>".lang(228).": ".html_select("table",$Dj,$I["table"],$c)."</label>\n";if(support("scheme")){$jk=array_filter(adminer()->schemas(),function($K){return!information_schema(DB,$K);});echo"<label>".lang(87).": ".html_select("ns",$jk,$I["ns"]!=""?$I["ns"]:$_GET["ns"],$c)."</label>";if($I["ns"]!="")set_schema($oi);}elseif(JUSH!="sqlite"){$rc=array();foreach(adminer()->databases()as$j){if(!information_schema($j))$rc[]=$j;}echo"<label>".lang(86).": ".html_select("db",$rc,$I["db"]!=""?$I["db"]:$_GET["db"],$c)."</label>";}echo
input_hidden("change-js"),'<noscript><p><input type=\'submit\' name=\'change\' value=\'',lang(229),'\'></noscript>
<table>
<thead><tr><th id="label-source">',lang(156),'<th id="label-target">',lang(157),'<tbody>
';$Mf=0;foreach($I["source"]as$x=>$W){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Wk,$W,($Mf==count($I["source"])-1?on('change','foreignAddRow'):""),"label-source"),"<td>".html_select("target[".(+$x)."]",$Nl,idx($I["target"],$x),"","label-target");$Mf++;}echo'</table>
<p>
<label>',lang(125),': ',html_select("on_delete",array(-1=>"")+explode("|",driver()->onActions),$I["on_delete"]),'</label>
<label>',lang(124),': ',html_select("on_update",array(-1=>"")+explode("|",driver()->onActions),$I["on_update"]),'</label>
',(support("deferrable")?html_select("deferrable",array('NOT DEFERRABLE','DEFERRABLE','DEFERRABLE INITIALLY DEFERRED'),$I["deferrable"]).' ':''),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'mariadb'=>"foreign-keys/",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-PARMS-REFERENCES",'cockroach'=>"foreign-key",'mssql'=>"t-sql/statements/create-table-transact-sql",'oracle'=>"sqlrf/constraint.html",)),'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
<noscript><p><input type=\'submit\' name=\'add\' value=\'',lang(230),'\'></noscript>
';if($B!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$B)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$I=$_POST;$pi="VIEW";if(JUSH=="pgsql"&&$a!=""){$O=table_status1($a);$pi=strtoupper($O["Engine"]);}if($_POST&&!$l){$B=trim($I["name"]);$Fa=" AS\n$I[select]";$tg=ME."table=".url_escape($B);$Qg=lang(231);$T=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$B&&JUSH!="sqlite"&&$T=="VIEW"&&$pi=="VIEW")query_redirect((JUSH=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($B).$Fa,$tg,$Qg);else{$Rl="adminer_".uniqid();drop_create("DROP $pi ".table($a),"CREATE $T ".table($B).$Fa,"DROP $T ".table($B),"CREATE $T ".table($Rl).$Fa,"DROP $T ".table($Rl),($_POST["drop"]?substr(ME,0,-1):$tg),lang(232),$Qg,lang(233),$a,$B);}}$Ah=false;if(!$_POST&&$a!=""){$I=view($a);$Ah=!$I["select"];$I["name"]=$a;$I["materialized"]=($pi!="VIEW");if(!$l)$l=adminer()->error();}page_header(($a!=""?lang(51):lang(234)),$l,array("table"=>$a),h($a),$Ah);echo'
<form action="" method="post">
<p>',lang(211),': <input name="name" value="',h($I["name"]),'" data-maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$I["materialized"],lang(150)):""),'<p>';textarea("select",$I["select"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($a!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$a)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$_f=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$jl=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$I=$_POST;if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(235));elseif(in_array($I["INTERVAL_FIELD"],$_f)&&isset($jl[$I["STATUS"]])){$hk="\nON SCHEDULE ".($I["INTERVAL_VALUE"]?"EVERY ".q($I["INTERVAL_VALUE"])." $I[INTERVAL_FIELD]".($I["STARTS"]?" STARTS ".q($I["STARTS"]):"").($I["ENDS"]?" ENDS ".q($I["ENDS"]):""):"AT ".q($I["STARTS"]))." ON COMPLETION".($I["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(236):lang(237)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$hk.($aa!=$I["EVENT_NAME"]?"\nRENAME TO ".idf_escape($I["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($I["EVENT_NAME"]).$hk)."\n".$jl[$I["STATUS"]]." COMMENT ".q($I["EVENT_COMMENT"]).rtrim(" DO\n$I[EVENT_DEFINITION]",";").";"));}}$Ah=false;if(!$I&&$aa!=""){$J=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$Ah=!$J;$I=reset($J);}page_header(($aa!=""?lang(238).": ".h($aa):lang(239)),$l,"#events","",$Ah);echo'
<form action="" method="post">
<table class="layout">
<tr><th>',lang(211),'<td><input name="EVENT_NAME" value="',h($I["EVENT_NAME"]),'" data-maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(240),'<td><input name="STARTS" value="',h("$I[EXECUTE_AT]$I[STARTS]"),'">
<tr><th title="datetime">',lang(241),'<td><input name="ENDS" value="',h($I["ENDS"]),'">
<tr><th>',lang(242),'<td><input type="number" name="INTERVAL_VALUE" value="',h($I["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$_f,$I["INTERVAL_FIELD"]),'<tr><th>',lang(138),'<td>',html_select("STATUS",$jl,$I["STATUS"]),'<tr><th>',lang(58),'<td><input name="EVENT_COMMENT" value="',h($I["EVENT_COMMENT"]),'" data-maxlength="64">
<tr><th><td>',checkbox("ON_COMPLETION","PRESERVE",$I["ON_COMPLETION"]=="PRESERVE",lang(243)),'</table>
<p>';textarea("EVENT_DEFINITION",$I["EVENT_DEFINITION"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($aa!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$aa)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["procedure"])){$ca=($_GET["name"]?:$_GET["procedure"]);$Yj=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$I=$_POST;$I["fields"]=(array)$I["fields"];if($_POST&&!process_fields($I["fields"])&&!$l){foreach($I["fields"]as$x=>$m){if($m["field"]=="")unset($I["fields"][$x]);}$Rh=routine($_GET["procedure"],$Yj);$Ph=($Rh?routine_id($ca,$Rh):"");$sh=routine_id($I["name"],$I);$h=create_routine($Yj,$I);$tg=substr(ME,0,-1);$Qg=lang(244);if(!$_POST["drop"]&&$Ph==$sh&&connection()->flavor!="mysql")queries_redirect($tg,$Qg,queries(substr_replace($h,(JUSH=="mssql"?' OR ALTER':' OR REPLACE'),6,0)));else{$Rl="adminer_".uniqid();drop_create("DROP $Yj $Ph",$h,"DROP $Yj $sh",create_routine($Yj,array("name"=>$Rl)+$I),"DROP $Yj ".routine_id($Rl,$I),$tg,lang(245),$Qg,lang(246),$ca,$I["name"]);}}$Ah=false;if(!$_POST&&$ca!=""){$I=routine($_GET["procedure"],$Yj);$Ah=!$I;$I["name"]=$ca;}page_header(($ca!=""?(isset($_GET["function"])?lang(247):lang(248)).": ".h($ca):(isset($_GET["function"])?lang(249):lang(250))),$l,"#routines","",$Ah);if(!$_POST&&$ca=="")$I["language"]="sql";$_b=(JUSH=="sql"?flat_collations():array());$Zj=routine_languages();echo($_b?"<datalist id='collations'>".optionlist($_b)."</datalist>":""),'
<form action="" method="post" id="form">
<p>',lang(211),': <input name="name" value="',h($I["name"]),'" data-maxlength="64" autocapitalize="off">
',($Zj?"<label>".lang(23).": ".html_select("language",array_keys($Zj),$I["language"],on('change','routineLanguage',$Zj))."</label>\n":""),'<input type=\'submit\' value=\'',lang(17),'\'>
';$ak=strtolower($Yj);echo
doc_link(array('sql'=>"create-procedure.html",'mariadb'=>"create-$ak/",'pgsql'=>"sql-create$ak.html",'cockroach'=>"create-$ak",'mssql'=>"t-sql/statements/create-$ak-transact-sql",),"?"),'<div class="scrollable">
<table id="edit-fields" class="nowrap">
';edit_fields($I["fields"],$_b,$Yj);if(isset($_GET["function"])){echo"<tr><td>".lang(251);edit_type("returns",(array)$I["returns"],$_b,array(),(JUSH=="pgsql"?array("void","trigger"):array()));}echo'</table>
',script("editFields();"),'</div>
<p>';textarea("definition",$I["definition"],20,80,($Zj[$I["language"]]?:JUSH));echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($ca!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$ca)),'>
';$bk=routine_options($Yj);if($bk){$ei=false;foreach($bk
as$x=>$Y){$k=($Y?reset($Y):"");$I["options"][$x]=idx($I["options"],$x,$k);if($I["options"][$x]!=$k)$ei=true;}print_fieldset("options",lang(129),$ei);echo"<table class='layout'>\n";foreach($bk
as$x=>$Y){$Xf="label-option-$x";$Zl=str_replace("_"," ",$x);$L=array();foreach($Y
as$X)$L[$X]=(strpos($X,"$Zl ")===0?substr($X,strlen($Zl)+1):$X);echo"<tr><th id='$Xf'>$Zl<td>".($L?html_select("options[$x]",$L,$I["options"][$x],"",$Xf):"<input name='options[$x]' value='".h($I["options"][$x])."' aria-labelledby='$Xf' autocapitalize='off'>")."\n";}echo"</table>\n</div></fieldset>\n";}echo
input_token(),'</form>
';}elseif(isset($_GET["sequence"])){$ea=$_GET["sequence"];$I=$_POST;if($_POST&&!$l){$_=substr(ME,0,-1);$B=trim($I["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($ea),$_,lang(252));elseif($ea=="")query_redirect("CREATE SEQUENCE ".idf_escape($B),$_,lang(253));elseif($ea!=$B)query_redirect("ALTER SEQUENCE ".idf_escape($ea)." RENAME TO ".idf_escape($B),$_,lang(254));else
redirect($_);}$Ah=(!$_POST&&$ea!=""&&!get_val("SELECT relname FROM pg_class WHERE relkind = 'S' AND relnamespace = ".driver()->nsOid." AND relname = ".q($ea)));page_header(($ea!=""?lang(255).": ".h($ea):lang(256)),$l,"#sequences","",$Ah);if(!$I)$I["name"]=$ea;echo'
<form action="" method="post">
<p><input name="name" value="',h($I["name"]),'" autocapitalize="off">
<input type=\'submit\' value=\'',lang(17),'\'>
';if($ea!="")echo"<input type='submit' name='drop' value='".lang(147)."'".confirm(lang(201,$ea)).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["type"])){function
enum_values($xc){$X="'(?:[^']|'')*'";if(!preg_match('~^AS\s+ENUM\s*\(\s*('.$X.'(?:\s*,\s*'.$X.')*)\s*\)$~i',$xc,$A))return
null;preg_match_all('~'.$X.'~',$A[1],$zg);return$zg[0];}function
add_enum_values($T,$Nh,$qh){$Th=enum_values($Nh);$xh=enum_values($qh);if($Th===null||$xh===null)return
null;$H=array();$s=0;foreach($xh
as$X){if($X===idx($Th,$s))$s++;else$H[]="ALTER TYPE ".idf_escape($T)." ADD VALUE $X".($s<count($Th)?" BEFORE ".$Th[$s]:"");}return($s==count($Th)?$H:null);}$fa=$_GET["type"];$I=$_POST;$ym=($fa!=""?array_search($fa,types(true)):0);$T=($ym?type_definition(+$ym):array());$Fh=($T["kind"]=='d'?"DOMAIN":"TYPE");if($_POST&&!$l){$_=substr(ME,0,-1);$B=trim($I["name"]);$Fa=trim(str_replace("\r","",$I["as"]));$uh=(preg_match('~^AS\s+(?!ENUM\b|RANGE\b|\()~i',$Fa)?"DOMAIN":"TYPE");$Qg=lang(257);$b=(!$_POST["drop"]&&$fa!=""&&$uh==$Fh?($Fa==$T["definition"]?array():add_enum_values($fa,$T["definition"],$Fa)):null);if($b!==null){if($fa!=$B)$b[]="ALTER $Fh ".idf_escape($fa)." RENAME TO ".idf_escape($B);if(!$b)redirect($_);$Fd=false;foreach($b
as$F){if(!queries($F)){$Fd=true;break;}}queries_redirect($_,$Qg,!$Fd);}else
drop_create("DROP $Fh ".idf_escape($fa),"CREATE $uh ".idf_escape($B)." $Fa","","","",$_,lang(258),$Qg,lang(259),$fa,$B);}page_header(($fa!=""?lang(260).": ".h($fa):lang(261)),$l,"#user-types","",($ym===false));if(!$I){$I["name"]=$fa;$I["as"]=($fa!=""?$T["definition"]:"AS ");}echo'
<form action="" method="post">
<p>
',lang(211).": <input name='name' value='".h($I['name'])."' autocapitalize='off'>\n",doc_link(array('pgsql'=>"sql-createtype.html",'cockroach'=>"create-type",),"?");textarea("as",$I["as"]);echo"<p><input type='submit' value='".lang(17)."'>\n";if($fa!="")echo"<input type='submit' name='drop' value='".lang(147)."'".confirm(lang(201,$fa)).">\n";echo
input_token(),'</form>
';}elseif(isset($_GET["check"])){$a=$_GET["check"];$B="$_GET[name]";$I=$_POST;if($I&&!$l){$tg=ME."table=".url_escape($a);$Tg=lang(262);$Rg=lang(263);$Sg=lang(264);if(JUSH=="sqlite")queries_redirect($tg,($I["drop"]?$Tg:($B!=""?$Rg:$Sg)),recreate_table($a,$a,array(),array(),array(),"",array(),"$B",($I["drop"]?"":$I["clause"])));else{$b="ALTER TABLE ".table($a);$mb=" CHECK ($I[clause])";$Rl="adminer_".uniqid();drop_create("$b DROP CONSTRAINT ".idf_escape($B),"$b ADD".($I["name"]!=""?" CONSTRAINT ".idf_escape($I["name"]):"").$mb,"$b DROP CONSTRAINT ".idf_escape($I["name"]),"$b ADD CONSTRAINT ".idf_escape($Rl).$mb,"$b DROP CONSTRAINT ".idf_escape($Rl),$tg,$Tg,$Rg,$Sg,$B,$I["name"]);}}$Ah=false;if(!$I){$qb=driver()->checkConstraints($a);$Ah=($B!=""&&!$qb[$B]);$I=array("name"=>$B,"clause"=>$qb[$B]);}page_header(($B!=""?lang(265):lang(161)),$l,array("table"=>$a),h($B!=""?$B:$a),$Ah);echo'
<form action="" method="post">
<p>';if(JUSH!="sqlite")echo
lang(211).': <input name="name" value="'.h($I["name"]).'" data-maxlength="64" autocapitalize="off"> ';echo
doc_link(array('sql'=>"create-table-check-constraints.html",'mariadb'=>"constraint/",'pgsql'=>"ddl-constraints.html#DDL-CONSTRAINTS-CHECK-CONSTRAINTS",'cockroach'=>"check",'mssql'=>"relational-databases/tables/create-check-constraints",'sqlite'=>"lang_createtable.html#check_constraints",),"?"),'<p>';textarea("clause",$I["clause"]);echo'<p><input type=\'submit\' value=\'',lang(17),'\'>
';if($B!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$B)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$B="$_GET[name]";$tm=trigger_options();$I=trigger($B,$a);$Ah=($B!=""&&!$I);$I+=array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$tm["Timing"])&&in_array($_POST["Event"],$tm["Event"])&&in_array($_POST["Type"],$tm["Type"])){$Uh=" ON ".table($a);$Sc="DROP TRIGGER ".idf_escape($B).(JUSH=="pgsql"?$Uh:"");$tg=ME."table=".url_escape($a);if($_POST["drop"])query_redirect($Sc,$tg,lang(266));else{if($B!="")queries($Sc);queries_redirect($tg,($B!=""?lang(267):lang(268)),queries(create_trigger($Uh,$_POST)));if($B!="")queries(create_trigger($Uh,$I+array("Type"=>reset($tm["Type"]))));}}$I=$_POST;}page_header(($B!=""?lang(269):lang(163)),$l,array("table"=>$a),h($B!=""?$B:$a),$Ah);$rm=on('change','triggerChange',"^".preg_quote($a,"/")."_[ba][iud]$",$a);echo'
<form action="" method="post" id="form">
<table class="layout">
<tr><th>',lang(270),'<td>',html_select("Timing",$tm["Timing"],$I["Timing"],$rm),'<tr><th>',lang(271),'<td>',html_select("Event",$tm["Event"],$I["Event"],$rm),(in_array("UPDATE OF",$tm["Event"])?" <input name='Of' value='".h($I["Of"])."' class='hidden'>":""),'<tr><th>',lang(57),'<td>',html_select("Type",$tm["Type"],$I["Type"]),'<tr><th>',lang(211),'<td><input name="Trigger" value="',h($I["Trigger"]),'" data-maxlength="64" autocapitalize="off">
</table>
',script("fire(qs('#form')['Timing'], 'change');"),'<p>';textarea("Statement",$I["Statement"]);echo'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if($B!="")echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,$B)),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["user"])){function
grant($se,array$rj,$e,$Uh){if(!$rj)return
true;if($rj==array("ALL PRIVILEGES","GRANT OPTION"))return($se=="GRANT"?queries("$se ALL PRIVILEGES$Uh WITH GRANT OPTION"):queries("$se ALL PRIVILEGES$Uh")&&queries("$se GRANT OPTION$Uh"));return
queries("$se ".preg_replace('~(GRANT OPTION)\([^)]*\)~','\1',implode("$e, ",$rj).$e).$Uh);}$ga=$_GET["user"];$rj=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$I){foreach(explode(",",($I["Privilege"]=="Grant option"?"":$I["Context"]))as$Ub)$rj[$Ub=="File access on server"?"Server Admin":$Ub][$I["Privilege"]]=$I["Comment"];}unset($rj["Server Admin"]["Usage"]);foreach($rj["Tables"]as$x=>$W)unset($rj["Databases"][$x]);$rh=array();if($_POST){foreach($_POST["objects"]as$x=>$W)$rh[$W]=(array)$rh[$W]+idx($_POST["grants"],$x,array());}$te=array();$G=(isset($_GET["host"])?connection()->query("SHOW GRANTS FOR ".q($ga)."@".q($_GET["host"])):null);$Ah=(isset($_GET["host"])&&!$G);if($G){while($I=$G->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$I[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\([^)]+\))?~',$A[1],$zg,PREG_SET_ORDER)){foreach($zg
as$W){if($W[1]!="USAGE")$te["$A[2]$W[2]"][$W[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$I[0]))$te["$A[2]$W[2]"]["GRANT OPTION"]=true;}}}}if($_POST&&!$l){$Sh=(isset($_GET["host"])?q($ga)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Sh",ME."privileges=",lang(272));else{$wh=q($_POST["user"])."@".q($_POST["host"]);$Mi=$_POST["pass"];$cc=false;$G=true;if($Sh!=$wh){$cc=queries("CREATE USER $wh IDENTIFIED BY ".($_POST["hashed"]?"PASSWORD ":"").q($Mi));$G=$cc;}elseif($Mi!="")$G=queries("SET PASSWORD FOR $wh = ".(min_version(8,99)||$_POST["hashed"]?q($Mi):"PASSWORD(".q($Mi).")"));if($G){$Uj=array();foreach($rh
as$Fh=>$se){if(isset($_GET["grant"]))$se=array_filter($se);$se=array_keys($se);if(isset($_GET["grant"]))$Uj=array_diff(array_keys(array_filter($rh[$Fh],'strlen')),$se);elseif($Sh==$wh){$Oh=array_keys((array)$te[$Fh]);$Uj=array_diff($Oh,$se);$se=array_diff($se,$Oh);unset($te[$Fh]);}if(preg_match('~^(.+)\s*(\(.*\))?$~U',$Fh,$A)&&(!grant("REVOKE",$Uj,$A[2]," ON $A[1] FROM $wh")||!grant("GRANT",$se,$A[2]," ON $A[1] TO $wh"))){$G=false;break;}}}if($G&&isset($_GET["host"])){if($Sh!=$wh)queries("DROP USER $Sh");elseif(!isset($_GET["grant"])){foreach($te
as$Fh=>$Uj){if(preg_match('~^(.+)(\(.*\))?$~U',$Fh,$A))grant("REVOKE",array_keys($Uj),$A[2]," ON $A[1] FROM $wh");}}}if($G&&!Queries::$queries)redirect(ME."privileges=");queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(273):lang(274)),$G);if($cc)connection()->query("DROP USER $wh");}}page_header((isset($_GET["host"])?lang(41).": ".h("$ga@$_GET[host]"):lang(171)),$l,array("privileges"=>array('',lang(79))),"",$Ah);$I=$_POST;if($I)$te=$rh;else{$I=$_GET+array("host"=>get_val("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$te[(DB==""||$te?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table class="layout">
<tr><th>',lang(39),'<td><input name="host" data-maxlength="60" value="',h($I["host"]),'" autocapitalize="off">
<tr><th>',lang(41),'<td><input name="user" data-maxlength="80" value="',h($I["user"]),'" autocapitalize="off">
<tr><th>',lang(42),'<td><input name="pass" id="pass" value="',h($I["pass"]),'" autocomplete="new-password">
',($I["hashed"]?"":script("typePassword(qs('#pass'));")),(min_version(8,99)?"":checkbox("hashed",1,$I["hashed"],lang(275),on('click','hashedClick'))),'</table>

',"<table class='odds'>\n","<thead><tr><th colspan='2'>".lang(79).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($te
as$Fh=>$se){echo'<th>'.($Fh!="*.*"?"<input name='objects[$s]' value='".h($Fh)."' size='10' autocapitalize='off'>":input_hidden("objects[$s]","*.*")."*.*");$s++;}echo"<tbody>\n";foreach(array(""=>"","Server Admin"=>lang(39),"Databases"=>lang(43),"Tables"=>lang(152),"Procedures"=>lang(276),)as$Ub=>$_c){foreach((array)$rj[$Ub]as$qj=>$Eb){echo"<tr><td".($_c?">$_c<td":" colspan='2'").' lang="en" title="'.h($Eb).'">'.h($qj);$s=0;foreach($te
as$Fh=>$se){$B="'grants[$s][".h(strtoupper($qj))."]'";$X=$se[strtoupper($qj)];if($Ub=="Server Admin"&&$Fh!=(isset($te["*.*"])?"*.*":".*"))echo"<td>";elseif(isset($_GET["grant"]))echo"<td><select name=$B><option><option value='1'".($X?" selected":"").">".lang(277)."<option value='0'".($X=="0"?" selected":"").">".lang(278)."</select>";else
echo"<td align='center'><label class='block'>","<input type='checkbox' name=$B value='1'".($X?" checked":"").($qj=="All privileges"?" id='grants-$s-all'":($qj=="Grant option"?"":on('click','grantsClick',"grants-$s-all"))).">","</label>";$s++;}}}echo"</table>\n",'<p>
<input type=\'submit\' value=\'',lang(17),'\'>
';if(isset($_GET["host"]))echo'<input type=\'submit\' name=\'drop\' value=\'',lang(147),'\'',confirm(lang(201,"$ga@$_GET[host]")),'>
';echo
input_token(),'</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")){if($_POST&&!$l){$Uf=0;foreach((array)$_POST["kill"]as$W){if(adminer()->killProcess($W))$Uf++;}queries_redirect(ME."processlist=",lang(279,$Uf),$Uf||!$_POST["kill"]);}}page_header(lang(136),$l);echo'
<form action="" method="post">
<div class="scrollable">
<table class="nowrap checkable odds"',on('click','tableClick').on('dblclick','tableClick'),'>
';$s=-1;foreach(adminer()->processList()as$s=>$I){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<td class='hover'>":"");foreach($I
as$x=>$W)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"refrn/V-SESSION.html",));echo"<tbody>\n";}echo"<tr>".(support("kill")?"<td class='hover'>".checkbox("kill[]",$I[JUSH=="sql"?"Id":"pid"],0):"");foreach($I
as$x=>$W)echo"<td>".($W!=""&&((JUSH=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$I["Command"]))||(JUSH=="pgsql"&&$x=="query")||(JUSH=="oracle"&&$x=="sql_text"))?"<code class='jush-".JUSH."' data-full='".h($W)."'>".shorten_utf8($W,100,"</code>").' <a href="'.h(($I["db"]!=""?preg_replace('~&db=[^&]*~','',ME)."db=".url_escape($I["db"])."&":ME)."sql=".url_escape($W)).'">'.lang(280).'</a>'.' '.copy_icon():h($W));echo"\n";}echo'</table>
</div>
<p>
',script("copyCode(qsl('table'));");if(support("kill"))echo
format_number($s+1)."/".lang(281,max_connections()),"<p><input type='submit' value='".lang(282)."'>\n";echo
input_token(),'</form>
',script("tableCheck();");}elseif($_GET["select"]!=""){$a=$_GET["select"];$R=table_status1($a);$w=indexes($a);$n=fields($a);$ce=column_foreign_keys($a);$Mh=$R["Oid"];$Wj=array();$e=array();$nk=array();$hi=array();$Ul=null;foreach($n
as$x=>$m){$B=adminer()->fieldName($m);$mh=html_entity_decode(strip_tags($B),ENT_QUOTES);if(isset($m["privileges"]["select"])&&$B!=""){$e[$x]=$mh;if(is_shortable($m))$Ul=adminer()->selectLengthProcess();}if(isset($m["privileges"]["where"])&&$B!="")$nk[$x]=$mh;if(isset($m["privileges"]["order"])&&$B!="")$hi[$x]=$mh;$Wj+=$m["privileges"];}list($L,$r)=adminer()->selectColumnsProcess($e,$w);$L=array_unique($L);$r=array_unique($r);$Gf=count($r)<count($L);$Z=adminer()->selectSearchProcess($n,$w,$R);$gi=adminer()->selectOrderProcess($n,$w);$z=adminer()->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Fm=>$I){$Fa=convert_field($n[key($I)]);$L=array($Fa?:idf_escape(key($I)));$Z[]=where_check(bracket_escape($Fm,true),$n);$H=driver()->select($a,$L,$Z,$L);if($H)echo
first($H->fetch_row());}exit;}$mj=$Im=array();foreach($w
as$v){if($v["type"]=="PRIMARY"){$mj=array_flip($v["columns"]);$Im=($L?$mj:array());foreach($Im
as$x=>$W){if(in_array(idf_escape($x),$L))unset($Im[$x]);}break;}}if($Mh&&!$mj){$mj=$Im=array($Mh=>0);$w[]=array("type"=>"PRIMARY","columns"=>array($Mh));}if($_POST&&!$l){$qn=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$qb=array();foreach($_POST["check"]as$mb)$qb[]=where_check($mb,$n);$qn[]="((".implode(") OR (",$qb)."))";}$sn=$qn;$qn=($qn?"\nWHERE ".implode(" AND ",$qn):"");if($_POST["export"]){save_settings(array("output"=>$_POST["output"],"format"=>$_POST["format"]),"adminer_import");dump_headers($a);adminer()->dumpTable($a,"");$rk=($L?:array("*"));$Xb=convert_fields($e,$n,$L);if($Xb)$rk[]=substr($Xb,2);$F="";if(is_array($_POST["check"])&&!$mj){$je=implode(", ",$rk)."\nFROM ".table($a);$we=($r&&$Gf?"\nGROUP BY ".implode(", ",$r):"").($gi?"\nORDER BY ".implode(", ",$gi):"");$Cm=array();foreach($_POST["check"]as$W)$Cm[]="(SELECT".limit($je,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$n).$we,1).")";$F=implode(" UNION ALL ",$Cm);}adminer()->dumpData($a,"table",$F,$rk,$sn,($Gf?$r:array()),$gi);adminer()->dumpFooter();exit;}if(!adminer()->selectEmailProcess($Z,$ce)){if($_POST["save"]||$_POST["delete"]){$G=true;$sa=0;$Ua=false;$N=array();if(!$_POST["delete"]){foreach($n
as$B=>$W){$u=bracket_escape($B);if(isset($_POST["fields"][$u])||$_FILES["fields-$u"]){$W=process_input($n[$B]);if($W!==null&&($_POST["clone"]||$W!==false))$N[idf_escape($B)]=($W!==false?$W:idf_escape($B));}}}if($_POST["delete"]||$N){$F=($_POST["clone"]?"INTO ".table($a)." (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):"");if($_POST["all"]||($mj&&is_array($_POST["check"]))||$Gf){$G=($_POST["delete"]?driver()->delete($a,$qn):($_POST["clone"]?queries("INSERT $F$qn".driver()->insertReturning($a)):driver()->update($a,$N,$qn)));$sa=connection()->affected_rows;if(is_object($G))$sa+=$G->num_rows;}else{$Ua=count((array)$_POST["check"])>1&&driver()->begin();foreach((array)$_POST["check"]as$W){$pn="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$n);$G=($_POST["delete"]?driver()->delete($a,$pn,1):($_POST["clone"]?queries("INSERT".limit1($a,$F,$pn)):driver()->update($a,$N,$pn,1)));if(!$G)break;$sa+=connection()->affected_rows;}if($Ua&&$G&&!driver()->commit())$G=false;}}$Qg=lang(172,$sa);if($_POST["clone"]&&$G&&$sa==1){$eg=last_id($G);if($eg)$Qg=lang(194," $eg");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page|next":""),$Qg,$G);if($Ua)driver()->rollback();if(!$_POST["delete"]){$dj=(array)$_POST["fields"];edit_form($a,array_intersect_key($n,$dj),$dj,!$_POST["clone"],$l);page_footer();exit;}}elseif(!$_POST["import"]){$G=true;$sa=0;$Ua=count((array)$_POST["val"])>1&&driver()->begin();foreach((array)$_POST["val"]as$Fm=>$I){$N=array();foreach($I
as$x=>$W){$x=bracket_escape($x,true);$N[idf_escape($x)]=(preg_match('~char|text~',$n[$x]["type"])||$W!=""?adminer()->processInput($n[$x],$W):"NULL");}$G=driver()->update($a,$N," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check(bracket_escape($Fm,true),$n),($Gf||$mj?0:1)," ");if(!$G)break;$sa+=connection()->affected_rows;}if($Ua)$G=$G&&driver()->commit();queries_redirect(remove_from_uri(),lang(172,$sa),$G);if($Ua)driver()->rollback();}else{save_settings(array("format"=>$_POST["separator"]),"adminer_import");$Nd=get_file("csv_file",true);if(!is_string($Nd))$l=upload_error($Nd);elseif(!preg_match('~~u',$Nd))$l=lang(283);else{$Ab=array_keys($n);$xk=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$gc=parse_csv($Nd,$xk);$sa=count($gc);driver()->begin();$J=array();foreach($gc
as$x=>$Y){if(!$x&&!array_diff($Y,$Ab)){$Ab=$Y;$sa--;}else{$N=array();foreach($Y
as$s=>$xb)$N[idf_escape($Ab[$s])]=($xb==""&&$n[$Ab[$s]]["null"]?"NULL":q(csv_value($xb)));$J[]=$N;}}$G=(!$J||driver()->insertUpdate($a,$J,$mj));if($G)driver()->commit();queries_redirect(remove_from_uri("page|next"),lang(284,$sa),$G);driver()->rollback();}}}}$Bl=adminer()->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(61).": $Bl",$l,array(),"",(!$n&&support("table")));$N=null;if(isset($Wj["insert"])||!support("table")){$N="";foreach((array)$_GET["where"]as$W){$X=$W["val"];if(is_array($X))$X=(count($X)==1&&preg_match('~^val-(.*)~s',reset($X),$A)?$A[1]:"");if($W["col"]!=""&&$X!=""&&($W["op"]=="="||(!$W["op"]&&(is_array($W["val"])||!preg_match('~[_%]~',$X)))))$N
.="&set[".url_escape(bracket_escape($W["col"]))."]=".url_escape($X);}}adminer()->selectLinks($R,$N);if(!$e&&support("table"))echo"<p class='error'>".lang(285)."\n";else{echo"<form action='' id='form'>\n","<div hidden>";hidden_fields_get();echo(DB!=""?input_hidden("db",DB).(isset($_GET["ns"])?input_hidden("ns",$_GET["ns"]):""):""),input_hidden("select",$a),"</div>\n";adminer()->selectColumnsPrint($L,$e);adminer()->selectSearchPrint($Z,$nk,$w,$R);adminer()->selectOrderPrint($gi,$hi,$w);adminer()->selectLimitPrint($z);if($Ul!==null)adminer()->selectLengthPrint($Ul);adminer()->selectActionPrint($w);echo"</form>\n";foreach((array)$_GET["where"]as$W){if($W["op"]=="SQL"&&!in_array($_SERVER["HTTP_SEC_FETCH_SITE"],array("","same-origin"))){echo"<p class='error'>".lang(118).' '.lang(119)."\n";page_footer();exit;}}$D=$_GET["page"];$fe=null;if($D=="last"){$fe=get_val(count_rows($a,$Z,$Gf,$r));$D=floor(max(0,intval($fe)-1)/$z);}$qk=$L;$ve=$r;if(!$qk){$qk[]="*";$Xb=convert_fields($e,$n,$L);if($Xb)$qk[]=substr($Xb,2);}foreach($L
as$x=>$W){$m=$n[idf_unescape($W)];if($m&&($Fa=convert_field($m)))$qk[$x]="$Fa AS $W";}if(JUSH=="pgsql"||JUSH=="mssql"){foreach((array)$_GET["columns"]as$x=>$W){if(isset($qk[$x])&&$W["fun"])$qk[$x].=" AS ".idf_escape(apply_sql_function($W["fun"],($W["col"]!=""?$W["col"]:"*")));}}if(!$Gf&&$Im){foreach($Im
as$x=>$W){$qk[]=idf_escape($x);if($ve)$ve[]=idf_escape($x);}}$G=driver()->select($a,$qk,$Z,$ve,$gi,$z,$D,true);if(!is_object($G))echo"<p class='error'>".(adminer()->error()?:lang(25))."\n";else{if(JUSH=="mssql"&&$D)$G->seek($z*$D);$fd=array();$J=array();while($I=$G->fetch_assoc()){if($D&&JUSH=="oracle")unset($I["RNUM"]);$J[]=$I;}$Ge=($z&&(support("cursor")?$_GET["next"]!="":count($J)>=$z));if(is_ajax()&&$Ge)header("X-Next-Page: ".pagination_href($D+1));if($_GET["modify"]&&$J){$Hg=max_input_vars(count($J[0])+1,20);echo($Hg&&count($J)>$Hg?"<p class='error'>".max_input_vars_error()."\n":"");}echo"<form action='' method='post' enctype='multipart/form-data'".on_upload_progress($Om).">\n";if($_GET["page"]!="last"&&$z&&$r&&$Gf&&JUSH=="sql")$fe=get_val(" SELECT FOUND_ROWS()");if(!$J)echo"<p class='message'>".lang(15)."\n";else{$Qa=adminer()->backwardKeys($a,$Bl);$Sj=array();reset($L);foreach($J[0]as$x=>$W){if(!isset($Im[$x])){$W=idx($_GET["columns"],key($L))?:array();$Sj[$x]=array("fun"=>$W["fun"],"col"=>($L?$W["col"]:$x));next($L);}}echo"<div class='scrollable'>","<table id='table' class='nowrap checkable odds'".on('click','tableClick').on('dblclick','tableClick').on('keydown','editingKeydown').">\n","<thead><tr>".(!$r&&$L?"":"<td class='hover check'><input type='checkbox' id='all-page' class='jsonly' title='".lang(286)."'".on('click','formCheck','^check').">");$nh=array();$Aj=1;foreach($Sj
as$x=>$W){$m=$n[$W["col"]];$B=($m?adminer()->fieldName($m,$Aj):($W["fun"]?"*":h($x)));if($B!=""){$Aj++;$nh[$x]=$B;$d=idf_escape($x);$Ue=remove_from_uri('(order|desc)[^=]*|page|next').'&order[0]='.url_escape($x);$_c="&desc[0]=1";$Tk=preg_replace('~ DESC( NULLS LAST)?$~','',$gi[0]);$Vk=($Tk==$d||$Tk==$x);echo"<th id='th[".h(bracket_escape($x))."]'".($Vk?" aria-sort='".($Tk==$gi[0]?"ascending":"descending")."'":"").">";$oe=apply_sql_function(h($W["fun"]),$B);$Uk=isset($m["privileges"]["order"])||$W["fun"];echo($Uk?"<a href='".h($Ue.($Vk&&$Tk==$gi[0]?$_c:''))."'>$oe</a>":$oe);$Pg=($Uk?"<a href='".h($Ue.$_c)."' title='".lang(67)."' class='text'> ↓</a>":'');if(!$W["fun"]&&isset($m["privileges"]["where"]))$Pg
.="<a href='#fieldset-search' title='".lang(64)."' class='text jsonly'".on('click','selectSearch',$x)."> =</a>";echo($Pg?"<span class='column'>$Pg</span>":"");}}$lg=array();if($_GET["modify"]){foreach($J
as$I){foreach($I
as$x=>$W)$lg[$x]=max($lg[$x],min(40,utf8_length($W)));}}echo($Qa?"<th>".lang(287):"")."<tbody>\n";if(is_ajax())ob_end_clean();foreach(adminer()->rowDescriptions($J,$ce)as$kh=>$I){$Em=unique_array($J[$kh],$w);if(!$Em){$Em=array();foreach($J[$kh]as$x=>$W){if(!in_array(idx(idx($Sj,$x,array()),"fun"),driver()->grouping))$Em[$x]=$W;}}$Fm="";$s=0;foreach($Em
as$x=>$W){$Rj=idx($Sj,$x,array());$oe=idx($Rj,"fun","");$xb=($oe?$Rj["col"]:$x);$m=(array)$n[$xb];$Ff=is_blob($m);if(!$oe&&(JUSH=="sql"||JUSH=="pgsql")&&($Ff||preg_match('~'.text_type().'~',$m["type"]))&&strlen($W)>64){$oe="md5";$W=md5($Ff?(string)driver()->value($W,$m):$W);}if($oe){$Fm
.="&fun[$s]=".url_escape($oe)."&col[$s]=".url_escape($xb).($W!==null?"&val[$s]=".url_escape($W===false?"f":$W):"");$s++;}else$Fm
.="&".($W!==null?"where[".url_escape(bracket_escape($xb))."]=".url_escape($W===false?"f":$W):"null[]=".url_escape($xb));}echo"<tr>".(!$r&&$L?"":"<td class='hover check'>".($Gf||information_schema(DB)?"":"<a href='".h(ME."edit=".url_escape($a).$Fm)."' class='edit'>".lang(288)."</a> ").checkbox("check[]",substr($Fm,1),in_array(substr($Fm,1),(array)$_POST["check"])));foreach($I
as$x=>$W){if(isset($nh[$x])){$oe=$Sj[$x]["fun"];$xb=$Sj[$x]["col"];$m=(array)$n[$x];if($W!=""&&(!isset($fd[$x])||$fd[$x]!=""))$fd[$x]=(is_mail($W)?$nh[$x]:"");$_="";if(is_blob($m)&&$W!="")$_=ME.'download='.url_escape($a).'&field='.url_escape($x).$Fm;if(!$_&&$W!==null){foreach((array)$ce[$x]as$p){if(count($ce[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$s=>$Wk)$_
.=where_link($s,$p["target"][$s],$J[$kh][$Wk]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\1'.url_escape($p["db"]),ME):ME).'select='.url_escape($p["table"]).$_;if($p["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\1'.url_escape($p["ns"]),$_);if(count($p["source"])==1)break;}}}if($oe=="count"&&$xb==""){$_=ME."select=".url_escape($a);$s=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$Em))$_
.=where_link($s++,$V["col"],$V["val"],$V["op"]);}foreach($Em
as$Pf=>$V){if(idx(idx($Sj,$Pf,array()),"fun")){$_="";break;}$_
.=where_link($s++,$Pf,$V);}}$Ve=select_value($W,$_,$m,$Ul);$u=bracket_escape($Fm);$t=h("val[$u][".bracket_escape($x)."]");$fj=idx(idx($_POST["val"],$u),bracket_escape($x));$Lm=idx($m["privileges"],"update");$bd=!is_array($I[$x])&&!is_blob($m)&&is_utf8($W)&&$J[$kh][$x]==$W&&!$oe&&!$m["generated"]&&$Lm;$T=($oe=="min"||$oe=="max"?$n[$xb]["type"]:$m["type"]);$Tl=preg_match('~text|json|lob~',$T);$Hf=preg_match(number_type(),$T)||preg_match('~^(avg|ceil|char_length|count|count distinct|floor|len|length|round|sum|time_to_sec)$~',$oe);echo"<td id='$t'".($Hf&&($W===null||is_numeric(strip_tags($Ve))||$T=="money")?" class='number'":"");if(($_GET["modify"]&&$bd&&$W!==null)||$fj!==null){$Be=h($fj!==null?$fj:$W);echo">".($Tl?"<textarea name='$t' cols='30' rows='".(substr_count($W,"\n")+1)."'>$Be</textarea>":"<input name='$t' value='$Be' size='$lg[$x]'>");}else{$vg=strpos($Ve,"<i>…</i>");echo($Lm?" data-text='".($vg?2:($Tl?1:0))."'".($bd?"":" data-warning='".lang(289)."'"):"").">$Ve";}}}if($Qa)echo"<td>";adminer()->backwardKeysPrint($Qa,$J[$kh]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n","</div>\n";}if(!is_ajax()){$ra=get_settings("adminer_import");if($J||$D||$Ge){$ud=true;if($_GET["page"]!="last"){if(!$z||(count($J)<$z&&($J||!$D)))$fe=($D?$D*$z:0)+count($J);elseif(JUSH!="sql"||!$Gf){$fe=($Gf?false:found_rows($R,$Z));if(intval($fe)<max(1e4,2*($D+1)*$z))$fe=first(slow_query(count_rows($a,$Z,$Gf,$r)));elseif(JUSH=='sql'||JUSH=='pgsql')$ud=false;}}if(!support("cursor"))$Ge=(($fe===false?count($J)+1:$fe-$D*$z)>$z);$yi=($z&&($Ge||$D));if($yi)echo($Ge?'<p><a href="'.h(pagination_href($D+1)).'" class="loadmore"'.on('click','selectLoadMore',lang(290)).'>'.lang(291).'</a>':''),"\n";echo"<div class='footer'><div>\n";if($yi){$Fg=($fe===false?$D+($J?(count($J)>=$z?2:1):0):floor(($fe-1)/$z));echo"<fieldset><legend>".lang(292)."</legend>";if(!support("cursor")){echo
pagination(0,$D).($D>5?" …":"");for($s=max(1,$D-4);$s<min($Fg,$D+5);$s++)echo
pagination($s,$D);if($Fg>0)echo($D+5<$Fg?" …":""),($ud&&$fe!==false?pagination($Fg,$D):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Fg'>".lang(293)."</a>");}else
echo
pagination(0,$D).($D>1?" …":""),($D?pagination($D,$D):""),($Ge?pagination($D+1,$D)." …":"");echo"</fieldset>\n";}echo"<fieldset>","<legend>".lang(294)."</legend>";$Hc=($ud?"":"~ ").$fe;$Xf=($fe!==false?($ud?"":"~ ").lang(176,$fe):"");echo
checkbox("all",1,0,$Xf,on('click','countRows',$Hc))."\n","</fieldset>\n";if(adminer()->selectCommandPrint())echo'<fieldset',($_GET["modify"]?'':" title='".lang(177)."'"),'>
<legend><a href=\'',h($_GET["modify"]?remove_from_uri("modify"):relative_uri()."&modify=1"),'\'>',lang(295),'</a></legend><div>
<input type=\'submit\' id=\'save\' value=\'',lang(17),'\'',($_GET["modify"]?'':" class='jsonly' disabled"),'>
</div></fieldset>

<fieldset><legend>',lang(146),' <span id="selected"></span></legend><div>
<input type=\'submit\' name=\'edit\' value=\'',lang(13),'\'>
<input type=\'submit\' name=\'clone\' value=\'',lang(280),'\'>
<input type=\'submit\' name=\'delete\' value=\'',lang(21),'\'',confirm(),'>
</div></fieldset>
';$de=adminer()->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($de['sql']);break;}}if($de){print_fieldset("export",lang(84)." <span id='selected2'></span>");$ui=adminer()->dumpOutput();echo($ui?html_select("output",$ui,$ra["output"])." ":""),html_select("format",$de,$ra["format"])," <input type='submit' name='export' value='".lang(84)."'>\n","</div></fieldset>\n";}adminer()->selectEmailPrint(array_filter($fd,'strlen'),$e);echo"</div></div>\n";}if(adminer()->selectImportPrint())echo"<p>","<a href='#import' class='toggle'>".lang(83)."</a>","<span id='import'".($_POST["import"]?"":" class='hidden'").">: ",($Om?input_hidden(ini_get("session.upload_progress.name"),$Om):""),file_input(" name='csv_file'"," ".html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"])." <input type='submit' name='import' value='".lang(83)."'>".($Om?" <progress class='jsonly hidden' max='1' value='0'></progress>":"")),"</span>";echo
input_token(),"</form>\n",(!$r&&$L?"":script("tableCheck();"));}}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$O=isset($_GET["status"]);page_header($O?lang(138):lang(137));$fn=($O?adminer()->showStatus():adminer()->showVariables());if(!$fn)echo"<p class='message'>".lang(15)."\n";else{echo"<table>\n";foreach($fn
as$I){echo"<tr>";$x=array_shift($I);echo"<th><code class='jush-".JUSH.($O?"status":"set")."'>".h($x)."</code>";foreach($I
as$W)echo"<td>".nl_br(h($W));}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: application/json; charset=utf-8");if($_GET["script"]=="db"){$rl=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$B=>$R){json_row("Comment-$B",h($R["Comment"]).($R["Error"]?" <span class='error'>".h($R["Error"])."</span>":""));if(!is_view($R)||preg_match('~materialized~i',$R["Engine"])){foreach(array("Engine","Collation")as$x)json_row("$x-$B",h($R[$x]));foreach(array_keys($rl+array("Auto_increment"=>0,"Rows"=>0))as$x){if(array_key_exists($x,$R))json_row("$x-$B",format_status($R,$x));if($R[$x]!=""&&isset($rl[$x]))$rl[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}}}if(function_exists('Adminer\db_status'))$rl=db_status();foreach($rl
as$x=>$W)json_row("sum-$x",format_number($W));json_row("");}elseif($_GET["script"]=="kill"){if(!$l)connection()->query("KILL ".number($_POST["kill"]));}else{foreach(count_tables(adminer()->databases(false))as$j=>$W){json_row("tables-$j",format_number($W));json_row("size-$j",db_size($j));}json_row("");}exit;}else{if(!isset($_GET["select"])&&support("single_table")){$S=tables_list();if($S)redirect(ME.(support("table")?"table=":"select=").url_escape(key($S)));}$Mg=ME.(isset($_GET["select"])?"select=&":"");$Ll=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ll&&!$l&&!$_POST["search"]){$G=true;$Qg="";if(JUSH=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$G=truncate_tables($_POST["tables"]);$Qg=lang(296);}elseif($_POST["move"]){$G=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Qg=lang(297);}elseif($_POST["copy"]){$G=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Qg=lang(298);}elseif($_POST["drop"]){if($_POST["views"])$G=drop_views($_POST["views"]);if($G&&$_POST["tables"])$G=drop_tables($_POST["tables"]);$Qg=lang(299);}elseif(JUSH=="sqlite"&&$_POST["check"]){foreach((array)$_POST["tables"]as$Q){foreach(get_rows("PRAGMA integrity_check(".q($Q).")")as$I)$Qg
.="<b>".h($Q)."</b>: ".h($I["integrity_check"])."<br>";}}elseif(JUSH=="mssql"&&$_POST["check"]){foreach((array)$_POST["tables"]as$Q){foreach(get_rows("DBCC CHECKTABLE (".q(table($Q)).") WITH TABLERESULTS")as$I)$Qg
.="<b>".h($Q)."</b>: ".h($I["MessageText"])."<br>";}}elseif(JUSH!="sql"){$G=(JUSH=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?" ANALYZE":""),(array)$_POST["tables"]));$Qg=lang(300);}elseif(!$_POST["tables"])$Qg=lang(12);elseif($G=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('Adminer\idf_escape',$_POST["tables"])))){while($I=$G->fetch_assoc())$Qg
.="<b>".h($I["Table"])."</b>: ".h($I["Msg_text"])."<br>";}queries_redirect(relative_uri(),$Qg,$G);}page_header(($_GET["ns"]==""?lang(43).": ".h(DB):lang(87).": ".h($_GET["ns"])),$l,true);if(adminer()->homepage()){if($_GET["ns"]!==""){$gi=$_GET["order"];$le=($gi||support("fast_status"));echo"<div>\n","<h3 id='tables-views'>".lang(301)."</h3>\n";$Kl=($le?table_status():tables_list());if(!$Kl)echo"<p class='message'>".lang(12)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(302)." <span id='selected2'></span></legend><div>",html_select("op",adminer()->operators(),idx($_POST,"op",JUSH=="elastic"?"should":"LIKE %%"))," <input type='search' name='query' value='".h($_POST["query"])."'".on('keydown','submitKeydown','search').">"," <input type='submit' name='search' value='".lang(64)."'>\n","</div></fieldset>\n";if(!$l&&$_POST["search"]&&$_POST["query"]!=""){$_GET["where"][0]["op"]=$_POST["op"];search_tables();}}echo"<div class='scrollable'>\n","<table class='nowrap checkable odds'".on('click','tableClick').on('dblclick','tableClick').">\n",'<thead><tr>','<td class="hover"><input id="check-all" type="checkbox" class="jsonly" title="'.lang(170).'"'.on('click','formCheck','^(tables|views)\[').'>','<th'.(!$gi&&JUSH!='sqlite'?" aria-sort='ascending'":'').'><a href="'.h(substr($Mg,0,-1)).'">'.lang(152).'</a>';$e=array("Engine"=>array(lang(303).doc_link(array('sql'=>'storage-engines.html'))));if(collations())$e["Collation"]=array(lang(142).doc_link(array('sql'=>'charset-charsets.html','mariadb'=>'supported-character-sets-and-collations/')));if(function_exists('Adminer\alter_table'))$e["Data_length"]=array(lang(304).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT','oracle'=>'refrn/ALL_TABLES.html')),"create",lang(52),);if(support("indexes"))$e["Index_length"]=array(lang(305).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT')),"indexes",lang(155),);$e["Data_free"]=array(lang(306).doc_link(array('sql'=>'show-table-status.html')),"edit",lang(53));if(function_exists('Adminer\alter_table'))$e["Auto_increment"]=array(lang(59).doc_link(array('sql'=>'example-auto-increment.html','mariadb'=>'auto_increment/')),"auto_increment=1&create",lang(52),);$e["Rows"]=array(lang(307).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'catalog-pg-class.html#CATALOG-PG-CLASS','oracle'=>'refrn/ALL_TABLES.html')),"select",lang(49),);if(support("comment"))$e["Comment"]=array(lang(58).doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-info.html#FUNCTIONS-INFO-COMMENT-TABLE','cockroach'=>'comment-on')),);$Ga=array('Engine','Collation','Comment');foreach($e
as$x=>$d)echo"<th".($gi==$x?" aria-sort='".(in_array($x,$Ga)?"ascending":"descending")."'":"")."><a href='".h($Mg)."order=$x'>$d[0]</a>";echo"<tbody>\n";if($gi){uasort($Kl,function($ia,$Na)use($gi,$Ga){$H=($ia[$gi]<$Na[$gi]?-1:($ia[$gi]>$Na[$gi]?1:0));return(in_array($gi,$Ga)?$H:-$H);});}$S=0;$rl=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach($Kl
as$B=>$O){$in=($le?is_view($O):$O!==null&&!preg_match('~table|sequence~i',$O));$O=($le?$O:array('Engine'=>$O));$t=h("Table-".$B);echo'<tr><td class="hover">'.checkbox(($in?"views[]":"tables[]"),$B,in_array("$B",$Ll,true),"","","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".url_escape($B)."' title='".lang(50)."' id='$t'>".h($B).'</a>':h($B));if($in&&!preg_match('~materialized~i',$O['Engine'])){$Zl=lang(151);echo'<td colspan="'.(count($e)-(support("comment")?2:1)).'">'.(support("view")?"<a href='".h(ME)."view=".url_escape($B)."' title='".lang(51)."'>$Zl</a>":$Zl),"<td align='right'><a href='".h(ME)."select=".url_escape($B)."' title='".lang(49)."'>?</a>";if(support("comment"))echo'<td>'.h($O['Comment']);}else{if($le){foreach(array_keys($rl)as$x)$rl[$x]+=($O["Engine"]!="InnoDB"||$x!="Data_free"?idx($O,$x):0);}foreach($e
as$x=>$d){$t=" id='$x-".h($B)."'";echo($d[1]?"<td align='right'><a href='".h(ME."$d[1]=").url_escape($B)."'$t title='$d[2]'>".format_status($O,$x)."</a>":"<td$t>".h(idx($O,$x,'?')).($x=="Comment"&&$O["Error"]?" <span class='error'>".h($O["Error"])."</span>":""));}$S++;}echo"\n";}echo"<tr><td class='hover'><th>".lang(281,count($Kl)),"<td>".h(JUSH=="sql"?get_val("SELECT @@default_storage_engine"):""),(collations()?"<td>".h(db_collation(DB,collations())):'');if($le&&function_exists('Adminer\db_status'))$rl=db_status();foreach($rl
as$x=>$ql)echo($e[$x]?"<td align='right' id='sum-$x'>".($le?format_number($ql):""):"");echo"\n","</table>\n",($le?'':script("ajaxSetHtml('".js_escape(ME)."script=db');")),"</div>\n";if(!information_schema(DB)){$bn="<input type='submit' value='".lang(308)."'".on_help("VACUUM")."> ";$ci="<input type='submit' name='optimize' value='".lang(309)."'".on_help(JUSH=="sql"?"OPTIMIZE TABLE":"VACUUM ANALYZE")."> ";$oj=(JUSH=="sqlite"?$bn."<input type='submit' name='check' value='".lang(310)."'".on_help("PRAGMA integrity_check")."> ":(JUSH=="pgsql"?$bn.$ci:(JUSH=="mssql"?"<input type='submit' name='check' value='".lang(310)."'".on_help("DBCC CHECKTABLE")."> ":(JUSH=="sql"?"<input type='submit' value='".lang(311)."'".on_help("ANALYZE TABLE")."> ".$ci."<input type='submit' name='check' value='".lang(310)."'".on_help("CHECK TABLE")."> "."<input type='submit' name='repair' value='".lang(312)."'".on_help("REPAIR TABLE")."> ":"")))).(function_exists('Adminer\truncate_tables')?"<input type='submit' name='truncate' value='".lang(313)."'".confirm().on_help(JUSH=="sqlite"?"DELETE":"TRUNCATE".(JUSH=="pgsql"?"":" TABLE"))."> ":"").(function_exists('Adminer\drop_tables')?"<input type='submit' name='drop' value='".lang(147)."'".confirm().on_help("DROP TABLE").">":"");echo($oj?"<div class='footer'><div>\n<fieldset><legend>".lang(146)." <span id='selected'></span></legend><div>$oj\n</div></fieldset>\n":"");$i=(support("scheme")?adminer()->schemas():adminer()->databases());if(count($i)!=1&&function_exists('Adminer\move_tables')){echo"<fieldset><legend>".lang(314)." <span id='selected3'></span></legend><div>";$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'" autocapitalize="off">'),"</label> <input type='submit' name='move' value='".lang(131)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(22)."'> ".checkbox("overwrite",1,$_POST["overwrite"],lang(315)):""),"</div></fieldset>\n";}echo"<input type='hidden' name='all' value=''".on('click','countTables',$S).">\n",input_token(),"</div></div>\n";}echo"</form>\n",script("tableCheck();");}echo(function_exists('Adminer\alter_table')?"<p class='links hover'><a href='".h(ME)."create='>".lang(85)."</a>\n":''),(support("view")?"<a href='".h(ME)."view='>".lang(234)."</a>\n":""),"</div>\n";if(support("routine")){echo"<div>\n","<h3 id='routines'>".lang(80)."</h3>\n";$dk=routines();if($dk){echo"<table class='odds'>\n",'<thead><tr><th>'.lang(211).'<th>'.lang(57).'<th>'.lang(251)."<td class='hover'><tbody>\n";foreach($dk
as$I){$B=($I["SPECIFIC_NAME"]==$I["ROUTINE_NAME"]?"":"&name=".url_escape($I["ROUTINE_NAME"]));echo'<tr>','<th><a href="'.h(ME.($I["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').url_escape($I["SPECIFIC_NAME"]).$B).'" title="'.lang(221).'">'.h($I["ROUTINE_NAME"]).'</a>','<td>'.h($I["ROUTINE_TYPE"]),'<td>'.h($I["DTD_IDENTIFIER"]),'<td class="hover"><a href="'.h(ME.($I["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').url_escape($I["SPECIFIC_NAME"]).$B).'">'.lang(158)."</a>";}echo"</table>\n";}echo'<p class="links hover">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(250).'</a>':'').'<a href="'.h(ME).'function=">'.lang(249)."</a>\n","</div>\n";}if(support("sequence")){echo"<div>\n","<h3 id='sequences'>".lang(81)."</h3>\n";$Ak=get_vals("SELECT relname FROM pg_class WHERE relkind = 'S' AND relnamespace = ".driver()->nsOid." ORDER BY relname");if($Ak){echo"<table class='odds'>\n","<thead><tr><th>".lang(211)."<tbody>\n";foreach($Ak
as$W)echo"<tr><th><a href='".h(ME)."sequence=".url_escape($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p class='links hover'><a href='".h(ME)."sequence='>".lang(256)."</a>\n","</div>\n";}if(support("type")){echo"<div>\n","<h3 id='user-types'>".lang(7)."</h3>\n";$Ym=types();if($Ym){echo"<table class='odds'>\n","<thead><tr><th>".lang(211)."<tbody>\n";foreach($Ym
as$W)echo"<tr><th><a href='".h(ME)."type=".url_escape($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p class='links hover'><a href='".h(ME)."type='>".lang(261)."</a>\n","</div>\n";}if(support("event")){echo"<div>\n","<h3 id='events'>".lang(82)."</h3>\n";$J=get_rows("SHOW EVENTS");if($J){echo"<table>\n","<thead><tr><th>".lang(211)."<th>".lang(316)."<th>".lang(240)."<th>".lang(241)."<td class='hover'><tbody>\n";foreach($J
as$I)echo"<tr>","<th>".h($I["Name"]),"<td>".($I["Execute at"]?lang(317)."<td>".h($I["Execute at"]):lang(242)." ".h($I["Interval value"])." ".h($I["Interval field"])."<td>".h($I["Starts"])),"<td>".h($I["Ends"]),'<td class="hover"><a href="'.h(ME).'event='.url_escape($I["Name"]).'">'.lang(158).'</a>';echo"</table>\n";$rd=get_val("SELECT @@event_scheduler");if($rd&&$rd!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($rd)."\n";}echo'<p class="links hover"><a href="'.h(ME).'event=">'.lang(239)."</a>\n","</div>\n";}}elseif(support("extension")){$Cd=get_rows("SELECT e.extname, e.extversion, n.nspname, obj_description(e.oid, 'pg_extension') AS comment
FROM pg_extension e
JOIN pg_namespace n ON n.oid = e.extnamespace
ORDER BY e.extname");if($Cd){echo"<div>\n","<h3 id='extensions'>".lang(318)."</h3>\n","<table class='odds'>\n","<thead><tr><th>".lang(211)."<th>".lang(319)."<th>".lang(87)."<th>".lang(58)."<tbody>\n";foreach($Cd
as$I)echo"<tr><th><code class='jush-pgsqlext'>".h($I["extname"])."</code>","<td>".h($I["extversion"]),"<td><a href='".h(substr(ME,0,-1).url_escape($I["nspname"]))."'>".h($I["nspname"])."</a>","<td>".h($I["comment"]),"\n";echo"</table>\n","</div>\n";}}}}page_footer();