<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.6.0
*/error_reporting(6135);$Wc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Wc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$xi=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($xi)$$X=$xi;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1Èä·ã`Â8(áÕ3M¨ó\"Ç39é?Ee=Ò¬ü~ù¾²ôÅîÓ¸7;ÉCÄÁ›ÍE\rd!)Âa*¯5ajo\0ª#`Ê38¶\0Êí]“eŒêˆÆ2¤	mk×øe]…Á­AZsÕStZ•Z!)BR¨G+Î#Jv2(ã öîc…4<¸#sB¯0éú‚6YL\r²=£…¿[×73Æð<Ô:£Šbx”ßJ=	m_ ¾ÏÅfªlÙ×t‹åIªƒHÚ3x*€›á6`t6¾Ã%UÔLòeÙ‚˜<´\0ÉAQ<P<:š#u/¤:T\\> Ë-…xJˆÍQH\nj¡L+jÝzðó°7£•«`ÝðŽ³\nkƒƒ'“NÓvX>îC-TË©¶œ¸†4*L”%Cj>7ß¨ŠÞ¨¨è-ŽƒÈà2‡¹pÂ3Œ¢îb–àÙ¥°¨çÞv>ñœp\\²ŒÃê6_HˆÛ»CxïW†1OjùAwH7q£ \\ÉŽ#¨ÒÉ®ýrŒ4v=ŸnòvÑO‰–÷6‡gWpß×ù'eÚy¯—ŸÝ÷¡pî0#z6=ÙÖ€u¡º\\_Ä.¬â£>H<rÞ+cz%}®w÷ÈVˆA*€¸Ã—B>dR:\rê‰\rœðl\rÕ9´jð43•¸qm\rPN	ðØAãþ`ÅûÁµxoÃ¨m\rÁì8?ÔüÃõ,	E·,UèŒ‚âêìòŸ%z®Ê›¬5õ’ˆvÃìvE 86H0[C¼Lmj¨2D¨¢¦Á`pŠÑ1?ÁRÀQŽÊÛMæÅxšžbéu±Å&˜âI-\"¡Ê§žÛV\"òÍpG\"W†±èŽ\$¦Š“J\$6†PæPÜÄu\"ˆT7CHòÖ–{÷‘²=Ë†UªŸtuIYxµ¢6–#èrŽpbMÉý’å\\ˆÑ7VRÒØÜo\":\$bCA¸F!Ñ\$—–	E0f\0F€krÊ)“0`b*4‚Kç¾ˆêR\\…„`k7¦ô„Àº]–`×(\$ôä7DHÊDè%	ç\\çO³ÂsNÕÜ°å*V’ ŸÈØê]	âÞÊs§C1p¼ÕvjÂÉªM€aº†# µØQQ¢(ÌR|Ë“õfÔmhšW\$Ÿš3H:%„Ò•êh\\V‘\$7‡_Ê:Î¡iý@¨4OK)p:¦¾™@2äC»(ÎEgö`C\"\$üžÔ¤¼“JÑ2±\$9‡4dÊµA â”PQb.iõb´´Èñ)TÁX/A„¾@:ÌT[­íf¸œ	®©)ãGP`Ú–D“t(c¡Èú6w\0ÎË˜p²? tƒHx2‡žò¦úZŠ6aèÈ¢ê÷\r§Û<cÏ-+#÷Mk‚u†/F·¢„L–¥@ÒF’û­€oäY}D(‰,‘¼-1–YúwìWéªw·Ê\$ƒ´á›œB´BÂ‚9E,¥Ë-w4®C6,¡’p–…I‚Ò¤®¼\\hÞí•:ÐUýÞ™€€8ÀF¢Öu“½jåF*£Ž½ªRç¬öžûX¬OÀcÂERÿÎˆ&`_AsTu0çÂL(!ˆ{1áÈ3‡gNÚÜÂ„ ë;ý€\$ti‹ößÄµ6ñ%{uÜ\"¡lñ~Ë\n§Úpva]§‰`eºH¢\"¾lmZ,z“*DÒáD‚54®/ñ¼pÆçC8‰gÖy!³åB5Ö´ÀIå¦W‡èÖü†*Àr¢¸ÊÛFkŸ}â†Éd]Ðú•¢ÉRafæ¢y˜¹‘ŒZ;Ù‘½ç½¨•¢Ö˜AÇ˜è9d™“]Ó	² xr§,º£¨ +ò©T¡ù­fõ\0sœ¥3(†à[vÁ³î¹YŠ³6OAØ-pÁè›duNK2N6R1²ë³J:—Ú/T–ðG®ÑLW˜ÁV1ÒƒÒó\r49ic¼‰A’.±V0¬¸m‘°õEä¹úç]†xdãÙ“\rËoY\\Ç¡0¥‡d»âæfKÊW•m«E6µ‘½Ü\nöW´­2C:–qÙ»‡Æ€ïfÊ„AÐ6\0Ð†4Ò*­¹nøDžWËoë¿å’}>ÁŽn¯#ñˆç\\´JÙ;¯náã½¬«•s»«p®#èÍ7I¨T'úo-É§õn\\\\ÒYKv½JÙ8Ó–ºg6ç`;.œóžîÞ<·Ú'²}9ÌÛ¿CW–G÷®û¢í\\µÒ»çÆù_?~=¾ª¾ÂÔûÖ^&ŸŸv»¾z“êî]UD„	w7ñ7å¤Àû‚††Y)r[mžƒ pX)`»¾Y?Ö5—Ì: 9§¶\rK}n<Ô8°eµÔû6ŸòYƒ†¿zfêRñt2ókûfwíá¶@û~³Þäí“·ßÈüN»¯mïUù?ìöìõ÷ßãïáô>ùã(M¯á5Ê/Ê_«À„%þÛ¬(üÏŒÁ\r~ùêûOÞû°‰¶SiÜ·0 PH©æJëj‹pLDþƒh6Å‚—Â¶B	År€Úâ\r¨06£n®0Yð_pT FõCp-Ð[Àà\r\0àç´pwð{ðWcq ¿Pp¨7	cE	œp€I\$-ú‰0]	0}\nP”4@ïÐ|ê…i|I\0``f”Šùà\rà`˜PKÆx ß\nPí\0ê\rð¡ð¶°”¤y\nE7ðš« Øñ\nQQ…±«À¿1Q_I|’lUPyq\n™À`)„ºÿ	Pìàì)°ÅñRèPÿP)­fÕ‚êÕÐç¥y°ëqcÑ;([qƒñf*š‘Há	°”yXC\r¯¢³ÔA*ä€I^O`ÏIƒÙÈ9âÒ‘'qÁÀÆ‘ñ‰ñËñ\r‘ÃqÇÑß ØŽ°F€Q£\rÐÞÀ‹M€¾ƒqÓ ±ëÑÃ‘åÉÇ!±á òÑÃ¥’E5‰ñ\r±®i…\$)•Cq¤\0Û1¸Ž¢÷0›²O%1=’\$ÅÒ_q¿&ñÌ@`è±1®,—\"\"‘Íru1ò—ÇEü„°Lüò”±r›ð¦àÖ ó\nPŸ*æÏ	²‡ò·+Ú7?*2˜tp›	ã&f	}%²©	Q,q±ã²ã‘=ññ,åÑÑ/`¿/©Ó‘….°éààòï0ÑÏ1pó1±‹(Ó\r©«Òÿ.‘Vó12“\"35ÀÆYÓ7ò¿23I4Óñû#ðÞSe P^]ó;6ÐšÎÂe	³?Su#,Ž©¯ê)0ÿ4©{#éŸ\$ppÈrX®’]l‡	® «±£±òH(Ó57q_Fª“ÓÁÓÈp½1“¿\nSzôp¥5sÉ†])¬A:	ªäÀ  Ø«s4#ÓÑ?³55±†*ÓîÒhÜ‘p›”!´Ô@ßAóCSË44Bó#àe:	|8B8©|,&ò‘çä²à@è	Ðlœ‹E@¦Ã‰È®@R6s’6Ì010š±OzGÃBï@î«DCàÜ8bëÃDƒ'DÂ?Eú\$X,´\\•N»F1´f/4k\$‹øé");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n8œÅ3)°Ë7œ…†81ÐÊx:\nOg#)Ðêr7\n\"†è´`ø|2ÌgSi–H)N¦S‘ä§\r‡\"0¹Ä@ä)Ÿ`(\$s6O!ÓèœV/=Œ' T4æ=„˜iS˜6IO“ÊerÙxî9*Åº°ºn3\rÑ‰vƒCÁ`õšÝ2G%¨YãæáþŸ1™Ífô¹ÑÈ‚l¤Ã1‘\ny£*pC\r\$ÌnTª•3=\\‚r9O\"ã	Ààl<Š\rÇ\\€³I,—s\nA¤Æeh+Mâ‹!q0™ýf»`(¹N{c–—+wËñÁY£–pÙ§3Š3ú˜+I¦Ôj¹ºýŽÏk·²n¸qÜƒzi#^rØÀº´‹3èâÏ[žèºo;®Ë(‹Ð6#ÀÒŽ\":cz>ß£C2vÑCXÊ<P˜Ãc*5\nº¨è·/üP97ñ|F»°c0ƒ³¨°ä!ƒæ…!¨œƒ!‰Ã\nZ%ÃÄ‡#CHÌ!¨Òr8ç\$¥¡ì¯,ÈRÜ”2…Èã^0·á@¤2Œâ(ð88P/‚à¸Ý„á\\Á\$La\\å;càH„áHX„•\nÊƒtœ‡á8A<ÏsZô*ƒ;IÐÎ3¡Á@Ò2<Š¢¬!A8G<Ôj¿-Kƒ({*\r’Åa1‡¡èN4Tc\"\\Ò!=1^•ðÝM9O³:†;jŒŠ\rãXÒàL#HÎ7ƒ#TÝª/-´‹£pÊ;B Â‹\n¿2!ƒ¥Ít]apÎŽÝî\0RÛCËv¬MÂI,\rö§\0Hv°Ý?kTÞ4£Š¼óuÙ±Ø;&’ò+&ƒ›ð•µ\rÈXbu4Ý¡i88Â2Bä/âƒ–4ƒ¡€N8AÜA)52íúøËåÎ2ˆ¨sã8ç“5¤¥¡pçWC@è:˜t…ã¾´Öešh\"#8_˜æcp^ãˆâI]OHþÔ:zdÈ3g£(„ˆ×Ã–k¸î“\\6´˜2ÚÚ–÷¹iÃä7²˜Ï]\rÃxO¾nºpè<¡ÁpïQ®UÐn‹ò|@çËó#G3ðÁ8bA¨Ê6ô2Ÿ67%#¸\\8\rýš2Èc\ræÝŸk®‚.(’	Ž’-—J;î›Ñó ÈéLãÏ ƒ¼žWâøã§“Ñ¥É¤â–÷·žnû Ò§»æýMÎÀ9ZÐs]êz®¯¬ëy^[¯ì4-ºU\0ta ¶62^•˜.`¤‚â.Cßjÿ[á„ % Q\0`dëM8¿¦¼ËÛ\$O0`4²êÎ\n\0a\rA„<†@Ÿƒ›Š\r!À:ØBAŸ9Ù?h>¤Çº š~ÌŒ—6ÈˆhÜ=Ë-œA7XäÀÖ‡\\¼\r‘Q<èš§q’'!XÎ“2úT °!ŒD\r§Ò,K´\"ç%˜HÖqR\r„Ì ¢îC =Ží‚ æäŽÈ<c”\n#<€5Mø êEƒœyŒ¡”“‡°úo\"°cJKL2ù&£ØeRœÀWÐAÎTwÊÑ‘;åJˆâá\\`)5¦ÔÞœBòqhT3§àR	¸'\r+\":‚8¤ÀtV“Aß+]ŒÉS72Èð¤YˆFƒ¼Z85àc,æô¶JÁ±/+S¸nBpoWÅdÖ\"§Qû¦a­ZKpèÞ§y\$›’ÐÏõ4I¢@L'@‰xCÑdfé~}Q*”ÒºAµàQ’\"BÛ*2\0œ.ÑÕkF©\"\r”‘° Øoƒ\\ëÔ¢™ÚVijY¦¥MÊôO‚\$Šˆ2ÒThH´¤ª0XHª5~kL©‰…T*:~P©”2¦tÒÂàB\0ýY…ÀÈÁœŸj†u¤×º…P¥*xžª•b¤o“õÿ¢PÜ\$¹W/“*¿Éz';¦Ñ\$ž*ùÛØébâmíÃƒÄ'`\rÑn%ÅÄ47Wëí—’àöÑ ¶K´´³@<ÅgæÃ¨bBÑÿZ·¦Ô|€VdR£¿6leQÌ`(Ô¢,Ñd˜å¹8\r¥]S:?š1¹`îÉY@`ÜAåÊ“%¾ÎYëA”sMš*Ñ×È{P¯\n*w–ÓÓŠ>íÕÍ½ôDÏû‹>ï%Ë½·át*“Ã-÷Ÿ“úÜØ+pœoùfìüÜ”ªyCM•Á.òÍåwŸ`/NiÔÝß;r\nº‚“AÞM,'y¯r·% ¦3%PV¨(rføžýÝD>yCS{\r@òÝ»7…ÃUŸEsæãcÐ¶©ÀfaŽŽ,†˜·LòXtÉ±nþ_ÐJ©¢µäÎÊîªÁZ­tRˆ[¨–eöËiV{ ë‰Ed´½2ÞùÛ«¯]Z1W£Ônè:û¥ƒ•“ÂVía[ºr{¼\rúñÝ«Ûz.E&½—Ÿ:ªFMœ%ŸSk'JæÒ„Ò;¯u#S5KçÝ»Õ¬“‚„Ý²ó†,œ—¢O¬µ¢;] ¸éT kHezÏ\0÷YK\$[4µ\rs‡'	ÌèEÆ5ÏE%9Ï7Y\r·!ð0‡ËJÚ;R%w/\nº¾aˆ7‡‡ürŠëÝº†}¥Šm-6Ie§Z§3¬Àú©Ò½±óÈ2×°B•HÜuS|“å¦2ƒ2ÊQh2W½÷LCÞd¾ƒ«]:•È7¤ÔçUÓÀûš®6l¨#ñ<ËÅiöòÒ~o˜Ð”Á\rÍÎ|\$´âƒ¹aøsW˜:´Fð@!å¸\n@~—¦4‚]¼êägM0¬ú/ýg¥0§ù3®˜BÂ›¬^Ò;+7àT\r(|'\\ÙÑå¾n8ô¤…Ë¸Þ€ÐESÝpÓe».>ÂÖwDZwÙm'½µîÕÞ•sÔÕä™çp[¹—£Ùz÷/ºw”_‹JemWˆW( “Ú_×(¶Õ\$TUÇ ÄÐƒ^ñõ…Ã©‡(ùpwþh¡ïÔ_#OfÁ©5.¦ÔV¥S2ê¨Šæ‹×È-ñçbá6²™p+!¯s.	P&„Åt	ƒpbaÀ¹?rC8ÊµBkî}ï¡ió‘WÁAÜ†“_¸*÷_f*vâ8Â\n æ\n`ÒIïZoôÓ@úY/ôÓÂ3Eææ€P\r8ÀYDTõMžI œ4'/x%EÎ/@]ÀÊÀ{@ÌQ4Ý bR MFÙ|¢è%0SDr§ÂÈ žf(\"*@-ˆ#­ŒÖPŠù­®?%Û¯Æ(¦x\0Âl\0ÌÅÚ	V€W\nàß%Ú\nç8\r\0}\nï¬à±B;€È.Bè¤Vò',z&Àf Ì\r`WPcL\0üÌ­ ž’åÒkšz2\rðñ@îW@Â’ç%\n~1€‚X ¤Ö\nD”!©Aâ*‡¤²{ <E¦ÉðÒWÌî ä Ñ\n…æHÜÑX‹1`à±6Éñ]êxÈÜÀÌ`Žæo,Æîø²¨îðMÑ1’Ñï«Î½*¸«Ã€à¶ Z@º€¶¬ÀVå€L%5\np‘HâWÀðonVì‹1Ð³†ÖŠÐ+¬»KL.ð¯/ñœWóæšLÄ‚«ñ¯1·­3f–ñM(ÅEdS/\"\npÜådÝJ*ÝÝ«Ñí*­úà¯Î÷r¼èô&eurâRL’^=h®áàQ‘\$Žân*hèÀòv¢BæÇØæÀ\\F\n‚WÅr f\$ò…(Ž	(àac¤¥¢'H•ñ\n¯€YÏ„ÒrF€Ñ+¨¨Ò¹²Sk›&,”âN£Ò\"ñØÊÂ(`Ú\rÀšCB\$R\$–ð¦\rÑàòúÆo#®öD±3RüÐÑöÑ(,òæ%†ÌÄ‡F!sÅlL)¬#Rû2Å*V-Ôq“ O2õ3Æ\$å2¿Š}'\0Ë*‹ŽÅjú®ÅRrZ] [*r¼SE_4„»\"„@z`í/ó|°ó	îÿ7Ñôð7 ÒÀ{8ÏµM –s|â,˜â…PDÈîŒ‰R§-3ªÉÅHW.võóVö\$rµEs8Ó\r5;îâ‰Q%KÒ_“—:Ž'<Jsâà^ÈœU ¶½ H Dhô D¬9b`CÂV!Cæç¥”÷Q\$×©þ)2€çƒ¤±Bòy)H~%¤+'“²àè~G²yMŠBÍ}t4-2„EeDÜiàÆh¬ü\$‘\$Ý€È2y'ÐŠ‰,jbJÇº\nbtNàFB;	 é	b;	ª÷IÈð\rP\r\0¨)íÄEtXêtXÔ°èT¶#\rÄçí¬`‡Bðšé–Dr‹#2‘F…ÿ)’Œ c)ç	ô­:èÜÜ¸hM¼í,YÔÂIâ>§ˆ-Hbtd´¬¹Ê6u ÌR§c**ÏwQêPiËb¶nMSBU\0ŠxY2Fž‰šì2H§Ôx0)C\$AJÔ¡JTZÙH,TTÕM’NˆðèD¤è¤G;5#_S¯ìô÷:#ÃO«	UTùV\0NäŸ\n€ÖreÚ\n€Ò%¤4šR­KÍR\0Úš%b‚’Ÿ+&\$ìqÔ~ÖEÕkMõY) z€aWR‡Nè`q;4,T0}l	\\tVØô¨Ð¥ïiC”í#5ìR%Ä#\ràX@N\0pa'SM‡Qòc%éc‚àµ*0\rŽ‘	í¤ ÀR\$åh¶Gb€Î¬YXí¢Û6YMÉØ¢“Ä²	þ@Êþ†4þö@±Ë 6igIÚëÖzà–~à–…]gÓJÖ‘Pª=AîMTˆ™M9WŽ‰'‰ËUuÚõÞcË!ƒºÚ–µBTïmU/‚ÊïƒÓû1Ü´kš¦Ž© j» ±ªÉ_!“fP¶LŒó¸ŒÄP¯B³ÞZÀ¨µ²2¢WÌ”\\M,µb#q× ñ7#âó2àš…¸ðw8’åä# ‚’’æR‚`Zp\0ð»‚åËV#€Û@Ëuiÿu¥Ð÷avWh\rs·6 ¢žüÕ0D­­tà÷ŠÒ<…sŸz.qwQt7FJ³€|f·¦ éw‰+uÄãx(YxfozÅ­{·¾.K€ ËJØàt´©>gL\r€àHs?Ì¬e¤\0Ÿyä&3±LâIn3ír†²Ïc2ñbvóðáê÷ÈÝ-‚s-É“À*41˜8 x=RDÊ5Ð;R[n…çnÑAqF\\QJíifí­¦Å”™.ÏYk’lÁñŽïÏóÚÃ\r\"Óç\"oÍ†Õ’ò.Ü·*¶Š²fâ’k‹ë—èñº“Ñ\$…HX…Ö\0\"jlDÐ\re²\\àÂ‡È·æ–â8&LJVm^vÀ°ûª”j„×ŽGFåÄ\\˜î	˜òö&s'€QŽ \\\"òb€°	àÄ\rBsÉw‘‚	‘Ù!’BN š7ÇC.ˆÙû`¨\n\nRG‡H-Ž9\rÃËŒ\0ñIÏ\0”UY`tyff–JxÛ#ö…ybB¢<“/Ö&¶û¥t“|0¤µ@™z^`DÈFw˜Ü¤ü€_7Ù¤ya–Y‡2äøK¹»˜P	œ,L’MªˆXÊÚPð}S\0÷œysœÅbeu…zWõMˆð\rè¬\$3½E\"\n\0ž\n`©bÀŽºPÆ@ù¨&Ž™ý|™\nÄ§egÄê‚+âH·°™(ªÕN À^\0Zk@îªP¦@%Â(WÊ\$2¹XÄº(¹ý¢æòN °º*|\0È°Év¥”gë§«h>z& Æ…G¹p\"ÈòDø2ÄJzftj¸ebm˜VÃ ¼H¼z«WyÈ7h5Œ¸Ï&ºm•µ.÷Yç˜½œ¹ŠYŽûÚÑ¢z›\0€¬*¸üb!”Ê…1™S—™„Ã@‚hq`åš\$ó0òkÇv|¹¬ù±›J­ÚÇžÅqž™¿3¦ý*¿ŸEŠ%Ùß4è’@ZìŠúBºd™ºÃ‹úÜ#ª”©˜Äú”^\rÀC–f’­¬)n‚`{‘@”\n`ž	À¸;†±¦d8ôa§q/ÀË¯ðxÔxNDó¹gy¹ºü)éŒSX„D\$F¯À¢ öø{dFÒB¤lF+€šò´<Ù€Ê><J?™©4„’õ·¸Ô ¶.Ìð*õ6¹Lÿ»®ú»ÛxxØbÖµ\nöJëÒœ¤®¶ësrä¦÷\0Ù HàÓ2MV²1;\$¯,¨éBUJ¨ÓÂÏV¢8ƒRz`Þ‹`¶OìŒ”J3ÃmÃ×!e øãJ#)O£RfJ‚goK%¥àÊ\n ¤	*‚\r»š7)¦Îdümš\\àœ•É€ßÉÇ°¨vTÛ3°”ÈÝpéÆú€uÄ)7‡Kƒ·Üˆ\r@ÞBdâÖ<<¦A\$KžMŽàÀ^ÿ@éÃ\\9¾LùD@ÐžUÎfAvü\nÀà\\RQj¨_Ô_›÷\"–ÛB[pduª[y¼{`øˆ;˜ï—X­:i¹šû¹âžù¹LsÜ}Y'\n¥çP€¾˜€P°|fì¿–úÆ®uÌ¸Ïyž‹óR¨JæÆD)àXâ¦\rÐUñ:÷õ_Kö	”–5ÿ`,ôµ:!„.Pí¾Ü&„P½¸í”Y\n6Ôá\\Lv]›%’3¢hš]˜\$Z£Ët8€èâã®kê)î¦,\0ø¬\"¼}ôQÏ©‡oÁ…þqSV\"Ôphã\0R=É5v,´·‹{`ÜF}ª2µ	°9C.m·ä&xnmk•åN%r@oÂ‚èu|>`}ÔPèàLÙô×`›z`„`ä@ÃbóëëßÏ³˜ÏÚ¾3¥7IôKÈ~53ú	ðÄ#´™,®§Ûóã?Dz\$ýúÄ‚1£g–ž½èÆ]¯÷?q‘L‡7\rè	tbäoøÃëêt70Ý\0b€XRžOÀàÝÔ«Õ*û\"®.â•=\r]†Ì­Ø»ð‚¯1ð€{ð–¹ët€ê\0`&l\$ë™fDT“Ú<‰S\\Û;ÕBhî/XáªWhÝ h`¥ƒ‡æÿw@¨\rïèBugáê^7 °‡ÇÝî¢H.Çn_+÷@È£^7Æ‡T›÷f)÷¾&›bŸÛßs? e|€ŠvŸ~¨`Oü`ÉûGiqn(ŸêEçü#ˆîOìÞ‘™)ëø¨v’iè…Úý )«€HuˆáLLW¢Õ¨9TGÍË\\FVÜ!èm#*ˆ„'—*ŠùÊîMryPÞ¾*×)åä.›e[©¬êfç7A‰+ŒzÃušù§½¥uŽ€ùÅDrzÌ=a,°2#Ä\rüqRÕ¾´ Ì²èPÙ„ýFÉ^ßbÂPã¾½?©Í}Z`’ WÚ„Yöëu~ø¼ß°4AÚ	Å©á©a1Œ€XÒÕ¥•= +?ÔEØFã“0ÀLxÊÒîÀ¼¶`,CÐÊÝžÊóÈII C„\0}ƒöuIˆ.„:™¹‡ûŸz£Ó^Ð\\²®.äb‹æ]ðÊP\\LÃž¶Ý˜@»¦`GfWPŠ«‚ XßŽ4'‰EüÐ«'E5EÂA®OIsvP€™|íäT\rsSÄUÀ1UkL\"ØÚ“ÚÈ=Ú	1]Âî’hA@ ³É\nðŒAsâJ¾çÂ˜×H\$Tr·Ã/í\nîÿzL!)²àøæÊHhÈŽ€£U\$@qh€¢‘¡ðÐ}4\0wÐ93<’…04E±0íOo Â\0.2€]fƒ·ˆuÍÞ „àVIp\0ÄCn‰²TÌ4(’|´';;yŽœ3A±,GGã§\"#2ÙÀu²‘K0*\$‹\0¤¸.Å‰¼\0¢tˆžÒ'È„<ú\0^ãÙ›xpóq¡³Z¾bX /zAû(ñœ ZQCÀ)ÔE¥o‚ƒÈSÑîÅd’â‡TD‹JóðÃÅn1dU\n„\nûû0¤v€DAZ#ÀØk8A0e{‹ÀT\n#ñ-.\0B‡\\¤_‹h2%·ÅÉ½±ozO\0(½’/„K\r¤`\") é60¡û‹ùBcXÆEö3¨>2²åc5¨¿ÄàþÇÎY:˜”²×õ.Ÿ¥in¬ÀÐ–¸qÕp@<-!îc¾ùÇÐ¤I…'(üL†ƒÀÄÑ9+w!ªI×\nZµa\nê0ªÆyÌGH&@=%¼Â!iOà·íÅx¨bEs°^€XŸÀ28'çª¼zGº=ñå„Ð¦Qö\rÌ~Âhö„=èTˆMtDÆµŸ¢>£S@#ÔM áâ;í#å!‰Eˆ¯Š×VÈU¶&©ÊCA•uú\$˜fTRœ ÏÎz)PÃ±)0ŽáÔX\0@Œ%&.„h¨ð‘˜DŒØ\"	Èììò=ŽX£œ˜f\"HèÍÒ<3¾Wž4W¥I<Í‹nèŒÁ\$¦®4‘Ï¢0NÌ’›Ò³A“!è\\R;/l—ä¢-a¢É|‰/ÿˆ”Q¢,5!ZI@Jh‚‚Å²Ì<€×J®*¬b¢Å&.É~\$Ty¬¡8¤5×±©v+ë1úñSXÄ-YKÂ”iŒÔÂ–QàJ\nQ¦éŽ ð¥á€úSGƒºª¡kA•–L€êE=SªÔ²§WÁd _XPÆX\0‰ZBAxè‰œ*pEí‡	 \"Ðÿ€ˆv2ª“ë€÷%Vïˆ™Õã àˆ\0ÞÉËM`Ó ²FÂ\0©kªKæéLïV*©p½)’2j‚;%Ã&iwˆÀ§\ržF¨²©{´_@qbC%î0 \\pfÉ‚a/GÅËüröHneü 9€¾`²«\"BzGdòsXFØèCÉxè·%b€@¶V‚•´¶T³1É[Õâ¼‰ÜjK2‡fêçv˜iXzñsq‹f\n¡ep!„‡|œv\$&4ÃbwK«\0[tÉ“3‰{%ºÆdêùœBgæ5 ´Ó“4I6ÄR(ñIŠY4¦¬D”­Ä¥´DãŸ€ÚÃÌõˆŠ›pDMH,SDhŠà\\%Èm¨}Š>x¸¡­Å#\0PÆðKG	\0È`y?Ik\\àéåâËÉÀf„‡7à94ÄÞ\"çK\næÂÞ×aÎOÀŒ°U˜zM\0007Š|ÁS:…tÏ\"6àS¿¸Q¬HpYNBj¸#l\r,\nð¨\0Ë´ËJu’ˆŒ'Ãx[Ñš8EÀMèžwYâÃèÔkëŠ|@1%Ý\0€e\"»žE=	ã–‘Vï<v¸”ç¡<¤%àk{(×\$G%Ê’=àbŸÆ§Æ‡Bô‡ý,„›aXƒ§°ŸÆ²{\nJ&U6­	]«PüËy.|aJy@Eg©}\"„ŸÚÀ=ö	 }éQŸ‰ºW&‚±¯Z~o§ „òçÅ>@»Pv|4¡ù×)A™ú…Žód\"Û…ìWÒ”BÅ‘ÈÅfÅÓÃ£½‡¯mÔsNôœF\"–IƒìŽ³Ç€á`€@0H&•LçI\\-¼SrÖ¡´Û²f%ÈÉì=FJ6ü°œqoÒIÖä€šº…^yÓ§FB/è‡r7\"È1†(Rb\\èäF2M‘žŒ\$ )0IÂA2-.`\\éH23D‰¤!!-ÚGp¹ŠlÀ[!!	€º'æ€()fWë#IPº‰ù@å,ÙåÞ“„\\×É™Ò\0Bð&\$	`Eà€ŠÐ°,B‰€(h)xùÒÆ–qÜ#Ñ×‚¦º°%>\\€%+Q\r“Ý/0ª\0l	9¥ÑEU­ÌX’|qBcèÒ@ …”†Á	Dö®äÀgáoINÒ¨€€¶á\n (Ä! 8|\$p{\"ì€ø2×°˜ô»Kš¡iïFJg£´*„z¤€)\$SJPR^f l¤Ñói¬2j4%øis\\åÉNâÚJSÀ¦éL²€8Xo4¥Ý9ÎªÊiÒ ‘”«£J¡E£FU¶'˜)è}MAÀá¤{Ê”â&¦ò_‡Ø˜ˆš•'3¨ËY\0÷SwˆäY\"Ñ\n\nJxÞ@¤€œr5K½/\0×R €„î\n3hIp#ÌåA*9uâ+èhˆø¡2`Qƒl¤(òú aðÄò*jÒt@\0+¬\0*X01S1ÄÒJ|è\0«Q‰^Õ„Táø‰þ4øT`f)CZn\$“3x\0000 úCÓ§ ÅcBèË@Ò~~qŒði’2*Ù5x`-½…64VF‚†e›@Ÿ@O>5È(*Œ\r\0;2F	réÉ@‚£'ø‡HÌö¹“@H@Z²[ÓpàxÈNBWlÑî\"85#OUé‹­Ob¹®Ú{@Z!àV½Uð® EŠqªÒ*´ÌðNÉã…t›:K½Ý•:OC´âQ:Ôd´•“¤ú`VþL–¦\0†ò5@çÓØls5¤åˆ	CóèÇ†b9K@a50\0æH+Ýaê‹Xè˜L,!\r¢½\\ªèš»Xj¨®<«…BiW0:ÕÔ3¡MK ¶&¸¡)×ð]qäœ˜í+ú+ 4€îÁ„I<¥tì¦ˆeÈAA„ép²•ukœ‹¸.P¤ êê­j%@È‰p;·Ê,Å}¯7ª¬ÀYØõè¤Dù(ÀŽºJ‡øQ–èÇ¶I*ÚÖ^Ð¥Õ¡ÅH'är)13±yÛ Ã›IÁùÒ'E*M¦j—ú.ÚzÂá¥~q`íCi©#Î¢Åa¥£|Ò€d!YM*Öt@@ZR]ã/¬Ïí^^tt1L¥4}°QÔ¥Pî9I6µu²‘äÄT<2O6®è]¦Ô]‰¥Q¾[³S›‰Ô†T‰\0/ˆMâñ§ÐãýmD”l xµí©@uwÛ §4¶å¼Û:·×ÅjÖÖ¸¤¹\0YkÄÆ£r—‹ÏŠª')àÐø„¢6¥Ý¬­º^¥C[ºÝ/§t¥À@¶Q!~1±1xîoc©zâEî·…6NO50ÿ´ôÖlukçðpTP· žjšÚ\0è\$„E¹Vš¶€í–\"k5’œù±b_žGrÀ¸\\¹ð<.rÖ+hæ|\0œfÁf5…[Hi¥µ›úµjë€šá4[8&µhšEe'€ÛBÂ.P\"lóäµ¢5€¼ÊK×šßÔO.¢+.dX¤5CTb‰4Ikû‹i`é¸ÆA¼Žù¨\$ëUh{“ºÊÜÛt…Ñ.êì#Ó˜ˆ-&Äêá^	—gIÏß¶F\n,tDÈÄ¦u1”˜ÜÕÞw8(ÕÎÀî-‘†5æõçî€³ \\ÆóÐ²½»oesà§ÞÚô!p/Eðoy|03ÞæõFCS¸(¡ú¸”å‡w^Â¹.·ZÕìVÀŸË›Dðˆ ifiZ\$Ð 0øý[°VùàIÛ£Ë‡ìQó¿×9À7¼®ätÅLïË0ßÍG%¦pa¹Ek`bô‰økÃ®ULz°©ðL		­@ÜúrÕì'dÃPcÀV\0ó€ë:¦—Æ	pK`ÜEc;¢8£p<.ÜÍ'KV«Ö(rga¤!±9Q°FZá]|‚rtw7,\0×às¸ÕÂÔD|”I@psáxë6[ù7Ï [¸Ü_ë”Ä¼dãu87õÿ©žJãTlq‚A>cP¡!”¢¿e+ð%@› mÀøF\\2çÒVž‚6¸\0Ã@F4-r@ašRh!¶pÖ,|6˜hÃ`[ðÖhüAõì)-ˆC®J!ÀSøÃš0½‡À–à À_~ºñ#ìBa©Ÿxˆ¥~Ypäà”\r	7\rÀÓÊ¯ÿ„0âŽ®Ÿ(ÿ°Ï“ibfô¯­61j#•þ¯ýIyobºkX8éAßižxƒŒKX0Â@cƒa3OmÃE†ü\nŠ;¸›ŠÅûº–{æ2iÔ#XÚÌ˜/|úÌ­Æòƒ‹,ÊúïÚ]Üàdóšðë‚’ic™q	.½¥ò1Þž#&µŒµÀ[fÇ8Ô.“¸Û8-›–+7U OØäL5€L[ñ”Å­Ü‘®ÚL–w€‰ñ€\"˜=¾\n¾)œ”€Ÿ%•#èPõWþ1ZÍ™6C£Úï~;Ä\\\\C“È¶O‹n=Y¹aCÙ3k.›\0»5Wáp”\\\rÀÛ²ã mç×¾rx«­šìÝÙëˆõqîÞê‰dpšY#ÖM*Q, \0®˜µ¤|aZÝ’Ôj: ù1É–^ðl˜Š%€+Ë‚*Ñ8‡QÌå(%„ÊXäÑx\\Å«(YLK•F@¦è8šVÉ‰1j_ÊÃ/Ù±¥H¬eÓ­¯™Q¿å,¿Lf3\"ýáŠÉ ]>0°ÚiYjòôfãcÐŒ¹îàhfTÎÈðûÛ\$qaÎFŒ¾RB”‡\n¡º)bHUKT\\Ë¢a\$`,C–TC¹@½	U—/Œ¶wÖ¤âYD4àRšÊX´\"¥®a¿j`åŠŒj¡Ð¦‹•t\nI›\\U«?¡zÏN%€øsœž‘ºÌv¼Í^L¿ž`ã€¶z\0m+4! BÜ…,\0Æb\$´.k¥Aqðl2“Š\$_y†,°8sÊé“ôZqOE—†L²s{f1k2ybêV#[s¡ƒYºì3ýOÛT4{i”Qh•†·a¾/FdÑpÕjµMhçFôsaK(ÒË¥!Eq#•öÅÐQ\"ØP]p>èÎð&ÚCü1E†+\$ØÊÕKæ‘1¤K4\"ÇH÷–Ñ\$‹…}‚mé7Mz*¢Õô¤Í*_¾IØFN–4Çpú†¦[K™.F®&¤o£…!Á@ÒÍ±’á¦Š–ÙÌ?b\r\"e¶¦1‰GŽ¢u½òòá¢FñˆÞHb8‘Èù\$\\M%N”ÓPtôØ`­7C‹lW¾3Cµ©jTÐ\$3N2TxÊú^«·÷QDÄ+ðÓ¥8’°ø¶‘)3¥SNÎLDé1‰úƒiŽ•X‰T[ú—}Â¨Ü×E8Üû®‹X*DXÈp5àZŠ‹9œzÐr)Ðªõ#Ü]ª‚g’Õv_éè´†u@\"c®UíÕ¬Á€¯_Žlsr´kU=XÎÍÚÊAÄ#•„NPËP¡9aNaÊh’ÚE]·`îŒ>Â’1°Óƒ'L±â'8—\rG’;€¤Ý \"H€ˆP,\0ˆx2Kn™‚.ÂA×0Ï¥tã	5<„m\$ËO¸Ž0ªŠy½%H¿e	/Ò…íM¥<Í¥×\\ÚŒ£vªK@G}Hž.¥Â]Û[:5(ø´„êÓSZ·ÞÑ;´dué£ey–y˜¬‹—ë);µæ¨NÍ›gÙQVª‰žÙ‰nzhë]3U‡˜Ôž«é	«4…íÎóqØ\\…GÒ6nÒÚÀæÝN”ÓN¸‘L‰Ã·4ÇFÚp†>â¶÷µ;4™Yw¢Ÿ(Ny&&»NÜ¥\r(üƒêPù»¿œ{¥\$€anDÖçÜýQyâó1–Ã‰R¨]äï,&”¤·Q„êúš-zÒLêØh÷‰Xªd=ô¥ßcY::Ü¡5’96ƒBŸ·ªgüWz¢ðd.@*@€A @@ð# ùUè¯¥¿ÀXš·7´†#¦ôƒ=e«Ä‡æÌ Ò…Á@49”‡îBJQÐæ.}‘#® ïÃ	#NËšØÄ-¡tcÖá´ß“¡&-=UJ-\0ÊÇ^½wPö˜\\…ÎnšParÄ·qÑgÂ×â\0¶<`/| é¡ÇäÐ -À¿\0Ú¤Äã0õ85¸=2–rÑ®¨7ðloíµ=äåÍ-7I<°ÆÔüÒ•õ7Ö¥P\0¨Ôš' ^b.}NqyÅZ)”HSz_Jp*:ÊÖØ…qPNDIp‚±Y˜MhXTãI£áÝ>PòHw<”Mÿ%ìà.€ë“áI\n”Ð++š“g,Bè@zF’Æ¼8…i\0¼p]È¤\nÕ®Ý(ÉRó¤¼Ý<sÇÒÑÏyÊÐ½À\rsuù/I`ñ#<°åžO¹¤Þi\0ÄOÃ¯Ÿ,Øä¢7íx	Ë*ÞOžÚ9Þhò·›c°Rg4ŸÌ®f†üœÒo3Âêžj'-ü<ÖBï6º.uówŸAˆ	 M¹ÂhqÛœ·…ç99ÒtN€\0Ÿ›‘¿âø‹…G&–\ry–¥§\$²…ñÌCò×mîwIysN]åØPè`	5n'îFÖù ®ROGù:^~SpÏ	œMU{@Ó^btå÷½;â¿/únSŽa'7 {\\D7O™ñÌðÿhK†™Kè'8'Ð„àÞÃ¦€72EÏÌ±')I 1ê\$Ð õSŸœFƒÊ@WÍ’¸ôO­W…ROWžâ2ÐètÌd]>ë;:*NŽOÊôÂ9áóXíÍ~iu£°¹ˆ']zkÑ.vN\\b\\6àj^\0Êý% Ï@}…âçÓA¢ÜòO±z/È>‹ž¶dò	‡þâüHáG^TþÖÑ§|Kx]»ÄÏÈÊúÑ’°‰¹4-À9ÝF¯À+€Ÿ…0¾xQŽ=¿’ýµ@T§—Î%<ýÐ|àŸÝÜŽ¯‰”¨Wií&ååInç÷Gº]ÔÓAž‚åg%ÀqËyäMeç‡ÎÙ’d3²ˆØ•¨¦¥j‚”óbdøA]ÛqÚKØ˜^åÓ ØÊH<2à/÷Ì£@V0«œG\" ÆHÚð†À	\"×¹×F%Œž®èÐ.È\0†Gv;¬	J,R¢Xß¡¼e°	yd•qÐ©]ŒŸ\rË“†à<‰ºV¨¯\n´¤¾ðÎC1’)¬dÂé®o†ÊäÞëG[o4›ßr|3¡Acr8#S·Íd7uÉŽ8Ô!¹[&èÁ\nÈ'ç\"÷‹üðÏc'AL\0C,†9ËgPÀWåµê4\0¡ñ8ü¬¿ä5•\$tãRÐ’˜zr880@:òO¡ý’¸½ür~IëY\r|ã\\åa‡Dó¸NK4tO=ŒhWÀ?ôo³†¯?ÃÐ(mC/¡U¿Óœæ€¾HÞ‘|dƒµâËH}C>A\")uüqáÂ\\×Ý.ÕRšP58„©È}‹¤iõàÉ|`À8½íóšÆw³ñ™<üf±6>G6üô+šý€\0");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôjLÆU`£SË`Z^ð|€‡r½=Ð÷nç™»–˜TU	1Hyk›Çt+\0váD¿\r	<œàÆ™ìñjG”ž­tÆ*3%k›YÜ²T*Ý|\"CŠülhE§(È\rÃ8r‡×{Üñ0å²×þÙDÜ_Œ‡.6Ð¸è;ãü‡„rBjƒO'Ûœ¥¥Ï>\$¤Ô`^6™Ì9‘#¸¨§æ4Xþ¥mh8:êûc‹þ0ø×;Ø/Ô‰·¿¹Ø;ä\\'( î„tú'+™òý¯Ì·°^]­±NÑv¹ç#Ç,ëvð×ÃOÏiÏ–©>·Þ<SïA\\€\\îµü!Ø3*tl`÷u\0p'è7…Pà9·bsœ{Àv®{·ü7ˆ\"{ÛÆrîaÖ(¿^æ¼ÝE÷úÿë¹gÒÜ/¡øžUÄ9g¶î÷/ÈÔ`Ä\nL\n)À†‚(Aúað\" žçØ	Á&„PøÂ@O\nå¸«0†(M&©FJ'Ú! …0Š<ïHëîÂçÆù¥*Ì|ìÆ*çOZím*n/bî/ö®Ôˆ¹.ìâ©o\0ÎÊdnÎ)ùŽi:RŽÎëP2êmµ\0/vìOX÷ðøFÊ³ÏˆîŒè®\"ñ®êöî¸÷0õ0ö‚¬©í0bËÐgjðð\$ñné0}°	î@ø=MÆ‚0nîPŸ/pæotì€÷°¨ð.ÌÌ½g\0Ð)o—\n0È÷‰\rF¶é€ b¾i¶Ão}\n°Ì¯…	NQ°'ðxòFaÐJîÎôLõéðÐàÆ\rÀÍ\r€Öö‘0Åñ'ð¬Éd	oepÝ°4DÐÜÊ¦q(~ÀÌ ê\r‚E°ÛprùQVFHœl£‚Kj¦¿äN&­j!ÍH`‚_bh\r1Ž ºn!ÍÉŽ­z™°¡ð¥Í\\«¬\rŠíŠÃ`V_kÚÃ\"\\×‚'Vˆ«\0Ê¾`ACúÀ±Ï…¦VÆ`\r%¢’ÂÅì¦\rñâƒ‚k@NÀ°üBñíš™¯ ·!È\n’\0Z™6°\$d Œ,%à%laíH×\n‹#¢S\$!\$@¶Ý2±„I\$r€{!±°J‡2HàZM\\ÉÇhb,‡'||cj~gÐr…`¼Ä¼º\$ºÄÂ+êA1ðœE€ÇÀÙ <ÊL¨Ñ\$âY%-FDªŠd€Lç„³ ª\n@’bVfè¾;2_(ëôLÄÐ¿Â²<%@Úœ,\"êdÄÀN‚erô\0æƒ`Ä¤Z€¾4Å'ld9-ò#`äóÅ–…à¶Öãj6ëÆ£ãv ¶àNÕÍf Ö@Ü†“&’B\$å¶(ðZ&„ßó278I à¿àP\rk\\§—2`¶\rdLb@Eöƒ2`P( B'ã€¶€º0²& ô{Â•“§:®ªdBå1ò^Ø‰*\r\0c<K|Ý5sZ¾`ºÀÀO3ê5=@å5ÀC>@ÂW*	=\0N<g¿6s67Sm7u?	{<&LÂ.3~DÄê\rÅš¯x¹í),rîinÅ/ åO\0o{0kÎ]3>m‹”1\0”I@Ô9T34+Ô™@e”GFMCÉ\rE3ËEtm!Û#1ÁD @‚H(‘Ón ÃÆ<g,V`R]@úÂÇÉ3Cr7s~ÅGIói@\0vÂÓ5\rVß'¬ ¤ Î£PÀÔ\râ\$<bÐ%(‡Ddƒ‹PWÄîÐÌbØfO æx\0è} Üâ”lb &‰vj4µLS¼¨Ö´Ô¶5&dsF Mó4ÌÓ\".HËM0ó1uL³\"ÂÂ/J`ò{Çþ§€ÊxÇYu*\"U.I53Q­3Qô»J„”g ’5…sàúŽ&jÑŒ’Õu‚Ù­ÐªGQMTmGBƒtl-cù*±þ\rŠ«Z7Ôõó*hs/RUV·ðôªBŸNËˆ¸ÃóãêÔŠài¨Lk÷.©´Ätì é¾©…rYi”Õé-Sµƒ3Í\\šTëOM^­G>‘ZQjÔ‡™\"¤Ž¬i”ÖMsSãS\$Ib	f²âÑuæ¦´™å:êSB|i¢ YÂ¦ƒà8	vÊ#é”Dª4`‡†.€Ë^óHÅM‰_Õ¼ŠuÀ™UÊz`ZJ	eçºÝ@Ceíëa‰\"mób„6Ô¯JRÂÖ‘T?Ô£XMZÜÍÐ†ÍòpèÒ¶ªQv¯jÿjV¶{¶¼ÅCœ\rµÕ7‰TÊžª úí5{Pö¿]’\rÓ?QàAAÀèŽ‹’Í2ñ¾ “V)Ji£Ü-N99f–l JmÍò;u¨@‚<FþÑ ¾e†j€ÒÄ¦I‰<+CW@ðçÀ¿Z‘lÑ1É<2ÅiFý7`KG˜~L&+NàYtWHé£‘w	Ö•ƒòl€Òs'gÉãq+Lézbiz«ÆÊÅ¢Ð.ÐŠÇzW²Ç ùzd•W¦Û÷¹(y)vÝE4,\0Ô\"d¢¤\$Bã{²Ž!)1U†5bp#Å}m=×È@ˆwÄ	P\0ä\rì¢·‘€`O|ëÆö	œÉüÅõûYôæJÕ‚öE×ÙOuž_§\n`F`È}MÂ.#1á‚¬fì*´Õ¡µ§  ¿zàucû€—³ xfÓ8kZR¯s2Ê‚-†’§Z2­+ŽÊ·¯(åsUõcDòÑ·Êì˜ÝX!àÍuø&-vPÐØ±\0'LïŒX øLÃ¹Œˆo	Ýô>¸ÕŽÓ\r@ÙPõ\rxF×üE€ÌÈ­ï%Àãì®ü=5NÖœƒ¸?„7ùNËÃ…©wŠ`ØhX«98 Ìø¯q¬£zãÏd%6Ì‚tÍ/…•˜ä¬ëLúÍl¾Ê,ÜKa•N~ÏÀÛìú,ÿ'íÇ€M\rf9£w˜!x÷x[ˆÏ‘ØG’8;„xA˜ù-IÌ&5\$–D\$ö¼³%…ØxÑ¬Á”ÈÂ´ÀÂŒ]›¤õ‡&o‰-39ÖLù½zü§y6¹;u¹zZ èÑ8ÿ_•Éx\0D?šX7†™«’y±OY.#3Ÿ8 ™Ç€˜e”Q¨=Ø€*˜™GŒwm ³Ú„Y‘ù ÀÚ]YOY¨F¨íšÙ)„z#\$eŠš)†/Œz?£z;™—Ù¬^ÛúFÒZg¤ù• Ì÷¥™§ƒš`^Úe¡­¦º#§“Øñ”©Žú?œ¸e£€M£Ú3uÌåƒ0¹>Ê\"?Ÿö@×—Xv•\"ç”Œ¹¬¦*Ô¢\r6v~‡ÃOV~&×¨^gü šÄ‘Ùž‡'Î€f6:-Z~¹šO6;zx²;&!Û+{9M³Ù³d¬ \r,9Öí°ä·WÂÆÝ­:ê\rúÙœùã@ç‚+¢·]œÌ-ž[gž™Û‡[s¶[ižÙiÈq››y›éxé+“|7Í{7Ë|w³}„¢›£E–ûW°€Wk¸|JØ¶å‰xmˆ¸q xwyjŸ»˜#³˜e¼ø(²©‰¸ÀßžÃ¾™†ò³ {èßÚ y“ »M»¸´@«æÉ‚“°Y(gÍš-ÿ©º©äí¡š¡ØJ(¥ü@ó…;…yÂ#S¼‡µY„Èp@Ï%èsžúoŸ9;°ê¿ôõ¤¹+¯Ú	¥;«ÁúˆZNÙ¯Âº§„š k¼V§·u‰[ñ¼x…|q’¤ON?€ÉÕ	…`uœ¡6|­|X¹¤­—Ø³|Oìx!ë:¨œÏ—Y]–¬¹Ž™c•¬À\r¹hÍ9nÎÁ¬¬ë€Ï8'—ù‚êà Æ\rS.1¿¢USÈ¸…¼X‰É+ËÉz]ÉµÊ¤?œ©ÊÀCË\r×Ë\\º­¹ø\$Ï`ùÌ)UÌ|Ë¤|Ñ¨x'ÕœØÌäÊ<àÌ™eÎ|êÍ³ç—â’Ìé—LïÏÝMÎy€(Û§ÐlÐº¤O]{Ñ¾×FD®ÕÙ}¡yu‹ÑÄ’ß,XL\\ÆxÆÈ;U×ÉWt€vŸÄ\\OxWJ9È’×R5·WiMi[‡Kˆ€f(\0æ¾dÄšÒè¿©´\rìMÄáÈÙ7¿;ÈÃÆóÒñçÓ6‰KÊ¦Iª\rÄÜÃxv\r²V3ÕÛßÉ±.ÌàRùÂþÉá|Ÿá¾^2‰^0ß¾\$ QÍä[ã¿D÷áÜ£å>1'^X~t1\"6Lþ›+þ¾Aàžeá“æÞåI‘ç~Ÿåâ³â³@ßÕ­õpM>Óm<´ÒSKÊç-HÉÀ¼T76ÙSMfg¨=»ÅGPÊ°›PÖ\r¸é>Íö¾¡¥2Sb\$•C[Ø×ï(Ä)žÞ%Q#G`uð°ÇGwp\rkÞKe—zhjÓ“zi(ôèrO«óÄÞÓþØT=·7³òî~ÿ4\"ef›~íd™ôíVÿZ‰š÷U•-ëb'VµJ¹Z7ÛöÂ)T‘£8.<¿RMÿ\$‰žôÛØ'ßbyï\n5øƒÝõ_ŽàwñÎ°íUð’`eiÞ¿J”b©gðuSÍë?Íå`öážì+¾Ïï Mïgè7`ùïí\0¢_Ô-ûŸõ_÷–?õF°\0“õ¸X‚å´’[²¯Jœ8&~D#Áö{P•Øô4Ü—½ù\"›\0ÌÀ€‹ý§ý@Ò“–¥\0F ?* ^ñï¹å¯wëÐž:ð¾uàÏ3xKÍ^ów“¼¨ß¯‰y[Ôž(žæ–µ#¦/zr_”g·æ?¾\0?€1wMR&M¿†ù?¬St€T]Ý´Gõ:I·à¢÷ˆ)‡©Bïˆ‹ vô§’½1ç<ôtÈâ6½:W{ÀŠôx:=Èî‘ƒŒÞšóø:Â!!\0x›Õ˜£÷q&áè0}z\"]ÄÞo•z¥™ÒjÃw×ßÊÚÁ6¸ÒJ¢PÛž[\\ }ûª`S™\0à¤qHMë/7B’€P°ÂÄ]FTã•8S5±/IÑ\rŒ\n îO¯0aQ\n >Ã2­j…;=Ú¬ÛdA=­p£VL)Xõ\nÂ¦`e\$˜TÆ¦QJÍó®ælJïŠÔîÑy„IÞ	ä:ƒÑÄÄBùbPÀ†ûZÍ¸n«ª°ÕU;>_Ñ\n	¾õëÐÌ`–ÔuMòŒ‚‚ÂÖm³ÕóÂLwúB\0\\b8¢MÜ[z‘&©1ý\0ô	¡\r˜TÖ×› €+\\»3ÀPlb4-)%Wd#\nÈårÞåMX\"Ï¡ä(Ei11(b`@fÒ´­ƒSÒóˆjåD†bf£}€rï¾‘ýD‘R1…´bÓ˜AÛïIy\"µWvàÁgC¸IÄJ8z\"P\\i¥\\m~ZR¹¢vî1ZB5IŠÃi@x”†·°-‰uM\njKÕU°h\$o—ˆJÏ¤!ÈL\"#p7\0´ P€\0ŠD÷\$	 GK4eÔÐ\$\nGä?ù3£EAJF4àIp\0«×FŽ4±²<f@ž %q¸<kãw€	àLOp\0‰xÓÇ(	€G>ð@¡ØçÆÆ9\0TÀˆ˜ìGB7 - €žøâG:<Q™ #Ã¨ÓÇ´û1Ï&tz£á0*J=à'‹J>ØßÇ8q¡Ð¥ªà	€OÀ¢XôF´àQ,ÀÊÐ\"9‘®pä*ð66A'ý,y€IF€Rˆ³TˆÏý\"”÷HÀR‚!´j#kyFÀ™àe‘¬z£ëéÈðG\0Žp£‰aJ`C÷iù@œT÷|\n€Ix£K\"­´*¨Tk\$c³òÆ”aAh€“! \"úE\0OdÄSxò\0T	ö\0‚žà!FÜ\n’U“|™#S&		IvL\"”“…ä\$hÐÈÞEAïN\$—%%ù/\nP†1š“²{¤ï) <‡ð L å-R1¤â6‘¶’<@O*\0J@q¹‘Ôª#É@Çµ0\$tƒ|’]ã`»¡ÄŠA]èÍìPá‘€˜CÀp\\pÒ¤\0™ÒÅ7°ÄÖ@9©bmˆr¶oÛC+Ù]¥JrÔfü¶\rì)d¤’Ñœ­^hßI\\Î. g–Ê>¥Í×8ŒÞÀ'–HÀf™rJÒ[rçoã¥¯.¹v„½ï#„#yR·+©yËÖ^òù›†F\0á±™]!É•ÒÞ”++Ù_Ë,©\0<@€M-¤2WòâÙR,c•Œœe2Ä*@\0êP €Âc°a0Ç\\PÁŠˆO ø`I_2Qs\$´w£¿=:Îz\0)Ì`ÌhŠÂ–Áƒˆç¢\nJ@@Ê«–\0šø 6qT¯å‡4J%•N-ºm¤Äåã.É‹%*cnäËNç6\"\rÍ‘¸òè—ûŠfÒAµÁ„põMÛ€I7\0™MÈ>lO›4ÅS	7™cÍì€\"ìß§\0å“6îps…–ÄÝåy.´ã	ò¦ñRKð•PAo1FÂtIÄb*ÉÁ<‡©ý@¾7ÐË‚p,ï0NÅ÷: ¨N²m ,xO%è!‚Úv³¨˜ gz(ÐM´óÀIÃà	à~yËö›h\0U:éØOZyA8<2§²ð¸ÊusÞ~lòÆÎEð˜O”0±Ÿ0]'…>¡ÝÉŒ:ÜêÅ;°/€ÂwÒôäì'~3GÎ–~Ó­äþ§c.	þ„òvT\0cØt'Ó;P²\$À\$ø€‚Ð-‚s³òe|º!•@dÐObwÓæc¢õ'Ó@`P\"xôµèÀ0O™5´/|ãU{:b©R\"û0…Ñˆk˜Ðâ`BD\nk€Pãc©á4ä^ p6S`Ü\$ëf;Î7µ?lsÅÀß†gDÊ'4Xja	A‡…E%™	86b¡:qr\r±]C8ÊcÀF\n'ÑŒf_9Ã%(¦š*”~ŠãiSèÛÉ@(85 T”Ë[þ†JÚ4I…l=°ŽQÜ\$dÀ®hä@D	-Ù!ü_]ÉÚH–ÆŠ”k6:·Úò\\M-ÌØðò£\r‘FJ>\n.‘”qeGú5QZ´†‹' É¢ž½Û0ŸîzP–à#Å¤øöÖéràÒít½’ÒÏËŽþŠ<QˆT¸£3D\\¹„ÄÓpOE¦%)77–Wt[ºô@¼›Žš\$F)½5qG0«-ÑW´v¢`è°*)RrÕ¨=9qE*K\$g	‚íA!åPjBT:—Kû§!×÷H“ R0?„6¤yA)B@:Q„8B+J5U]`„Ò¬€:£ðå*%Ip9ŒÌ€ÿ`KcQúQ.B”±Ltbª–yJñEê›Té¥õ7•ÎöAmÓä¢•Ku:ŽðSji— 5.q%LiFºšTr¦Ài©ÕKˆÒ¨z—55T%U•‰UÚIÕ‚¦µÕY\"\nSÕm†ÑÄx¨½Ch÷NZ¶UZ”Ä( Bêô\$YËV²ã€u@è”»’¯¢ª|	‚\$\0ÿ\0 oZw2Ò€x2‘ûk\$Á*I6IÒn• •¡ƒI,€ÆQU4ü\n„¢).øQôÖaIá]™À èLâh\"øf¢ÓŠ>˜:Z¥>L¡`n˜Ø¶Õì7”VLZu”…e¨ëXúè†ºB¿¬¥B‰º’¡Z`;®ø•J‡]òÑ€žäS8¼«f \nÚ¶ˆ#\$ùjM(¹‘Þ¡”„¬a­Gí§Ì+Aý!èxL/\0)	Cö\nñW@é4€ºáÛ©• ŠÔRZƒ®â =˜Çî8“`²8~â†hÀìP °\r–	°žìD-FyX°+Êf°QSj+Xó|•È9-’øs¬xØü†ê+‰VÉcbpì¿”o6HÐq °³ªÈ@.€˜l 8g½YMŸÖWMPÀªU¡·YLß3PaèH2Ð9©„:¶a²`¬Æd\0à&ê²YìÞY0Ù˜¡¶SŒ-—’%;/‡TÝBS³PÔ%fØÚý• @ßFí¬(´Ö*Ñq +[ƒZ:ÒQY\0Þ´ëJUYÖ“/ý¦†pkzÈˆò€,´ðª‡ƒjÚê€¥W°×´e©JµFèýVBIµ\r£ÆpF›NÙ‚Ö¶™*Õ¨Í3kÚ0§D€{™Ôø`q™•Ò²Bqµe¥D‰cÚÚÔVÃE©‚¬nñ×äFG E›>jîèÐú0g´a|¡Shì7uÂÝ„\$•†ì;aô—7&¡ë°R[WX„ÊØ(qÖ#Œ¬P¹Æä×–Ýc8!°H¸àØVX§ÄŽ­jøÊZŽô‘¡¥°Q,DUaQ±X0‘ÕÕ¨ÀÝËGbÁÜlŠBŠt9-oZü”L÷£¥Â­åpË‡‘x6&¯¯MyÔÏsÒ¿–èð\"ÕÍ€èR‚IWU`c÷°à}l<|Â~Äw\"·ðvI%r+‹Rà¶\n\\ØùÃÑ][‹Ñ6&Á¸ÝÈ­Ãa”ÓºìÅj¹(Ú“ðTÑ“À·C'Š…´ '%de,È\n–FCÅÑe9C¹NäÐ‚-6”UeÈµŒýCX¶ÐV±ƒ¹ýÜ+ÔR+ºØ”Ë•3BÜÚŒJð¢è™œ±æT2 ]ì\0PèaÇt29Ï×(i‹#€aÆ®1\"S…:ö· ˆÖoF)kÙfôòÄÐª\0ÎÓ¿þÕ,ËÕwêƒJ@ìÖVò„Žµéq.e}KmZúÛïå¹XnZ{G-»÷ÕZQº¯Ç}‘Å×¶û6É¸ðµÄ_žØÕ‰à\nÖ@7ß` Õï‹˜C\0]_ ©Êµù¬«ï»}ûGÁWW: fCYk+éÚbÛ¶·¦µ2S,	Ú‹Þ9™\0ï¯+þWÄZ!¯eþ°2ûôà›—í²k.OcƒÖ(vÌ®8œDeG`Û‡ÂŒöL±õ“,ƒdË\"CÊÈÖB-”Ä°(þ„„„p÷íÓp±=àÙü¶!ýk’ØÒÄ¼ï}(ýÑÊB–kr_Rî—Ü¼0Œ8a%Û˜L	\0é†Àñ‰b¥²šñÅþ@×\"ÑÏr,µ0TÛrV>ˆ…ÚÈQŸÐ\"•rÞ÷P‰&3báP²æ- x‚Ò±uW~\"ÿ*èˆžŒNâh—%7²µþK¡Y€€^A÷®úÊC‚èþ»p£áîˆ\0ð..`cÅæ+ÏŠâGJ£¤¸H¿À®E‚…¤¾l@|I#AcâÿD…|+<[c2Ü+*WS<ˆràãg¸ÛÅ}‰Š>iÝ€!`f8ñ€(c¦èÉQý=fñ\nç2Ñc£h4–+q8\na·RãBÜ|°R“×ê¿ÝmµŠ\\qÚõgXÀ –ÏŽ0äXä«`nîF€îìŒO pÈîHòCƒ”jd¡fµßEuDV˜bJÉ¦¿å:±ï€\\¤!mÉ±?,TIa˜†ØaT.L€]“,JŒ?™?Ï”FMct!aÙ§RêF„Gð!¹Aõ“»rrŒ-pŽXŸ·\r»òC^À7áð&ãRé\0ÎÑf²*àA\nõÕ›Háã¤yîY=Çúè…l€<‡¹AÄ_¹è	+‘ÎtAú\0B•<Ay…(fy‹1Îc§O;pèÅá¦`ç’4Ð¡Mìà*œîf†ê 5fvy {?©àË:yøÑ^câÍuœ'‡™€8\0±¼Ó±?«ŠgšÓ‡ 8BÎ&p9ÖO\"zÇõžrs–0ºæB‘!uÍ3™f{×\0£:Á\n@\0ÜÀ£pÙÆ6þv.;àú©„Êb«Æ«:J>Ë‚‰é-ÃBÏhkR`-ÜñÎðawæxEj©…÷Árž8¸\0\\Áïô€\\¸Uhm› ý(mÕH3Ì´í§S™“Áæq\0ùŸNVh³Hy	—»5ãMÍŽe\\g½\nçIP:Sj¦Û¡Ù¶è<Ž¯Ñxó&ŒLÚ¿;nfÍ¶cóq›¦\$fð&lïÍþi³…œàç0%yÎž¾tì/¹÷gUÌ³¬dï\0e:ÃÌhïZ	Ð^ƒ@ç ý1€Ïm#ÑNów@ŒßOððzGÎ\$ò¨¦m6é6}ÙÒÒ‹šX'¥I×i\\QºY€¸4k-.è:yzÑÈÝH¿¦]ææxåGÏÖ3ü¿M\0€£@z7¢„³6¦-DO34Þ‹\0ÎšÄùÎ°t\"Î\"vC\"JfÏRÊžÔúku3™MÎæ~ú¤ÓŽ5V à„j/3úƒÓ@gG›}Dé¾ºBÓNq´Ù=]\$é¿I‡õÓž”3¨x=_j‹XÙ¨fk(C]^jÙMÁÍF«ÕÕ¡ŒàÏ£CzÈÒVœÁ=]&ž\r´A<	æµÂÀÜãç6ÙÔ®¶×´Ý`jk7:gÍî‘4Õ®áë“YZqÖftu|hÈZÒÒ6µ­iã€°0 ?éõéª­{-7_:°×ÞtÑ¯íck‹`YÍØ&“´éIõlP`:íô j­{hì=Ðf	àÃ[byž¢Ê€oÐ‹B°RS—€¼B6°À^@'4æø1UÛDq}ìÃNÚ(Xô6j}¬cà{@8ãòð,À	ÏPFCàð‰Bà\$mv˜¨Pæ\"ºÛLöÕCS³]›ÝàEÙÞÏlU†Ñfíwh{o(—ä)è\0@*a1GÄ ( D4-cØóP8£N|R›†âVM¸°×n8G`e}„!}¥€Çp»‡Üòý@_¸ÍÑnCtÂ9ŽÑ\0]»u±î¯s»ŠÝ~èr§»#Cn p;·%‹>wu¸ÞnÃwû¤Ýžê.âà[ÇÝhT÷{¸Ýå€¼	ç¨Ë‡·JðÔÆ—iJÊ6æ€O¾=¡€‡ûæßE”÷Ù´‘ImÛïÚV'É¿@â&‚{ª‘›òö¯µ;íop;^–Ø6Å¶@2ç¯lûÔÞNï·ºMÉ¿r€_Ü°ËÃ´` ì( yß6ç7‘¹ýëîÇ‚“7/Ápðe>|ßà	ø=½]Ðocû‘á&åxNm£‰çƒ»¬ào·GÃN	p—‚»˜x¨•Ã½Ýðƒy\\3àø‡Â€'ÖI`râG÷]Ä¾ñ7ˆ\\7Ú49¡]Å^p‡{<Zá·¸q4™uÎ|ÕÛQÛ™àõp™ýši\$¶@oxñ_<Àæ9pBU\"\0005— iä×‚»¸Cûp´\nôi@‚[ãœÆ4¼jÐ„6bæP„\0Ÿ&F2~ŽÀù£¼ïU&š}¾½¿É˜	™ÌDa<€æzx¶k£ˆ‹=ùñ°r3éË(l_”…FeF›ž4ä1“K	\\ÓŽldî	ä1H\r½€ùp!†%bGæXfÌÀ'\0ÈœØ	'6Àžps_›á\$?0\0’~p(H\n€1…W:9ÕÍ¢¯˜`‹æ:hÇB–èg›BŠk©ÆpÄÆót¼ìˆEBI@<ò%Ã¸Àù` êŠyd\\Y@D–P?Š|+!„áWÀø.:ŸLe€v,Ð>qóAÈçº:ž–îbYéˆ@8Ÿd>r/)ÂBç4ÀÐÎ(·Š`|é¸:t±!«‹Á¨?<¯@ø«’/¥ S’¯P\0Âà>\\æâ |é3ï:VÑuw¥ëçx°(®²Ÿœ4€ÇZjD^´¥¦Lý'¼ìÄC[×'ú°§®éjÂº[ E¸ó uã°{KZ[s„ž€6ˆ‚S1Ìz%1õc™£B4ˆB\n3M`0§;çòÌÂ3Ð.”&?¡ê!YAÀI,)ðå•l†W['ÆÊIÂ‡Tjƒè>F©¼÷S§‡ BÐ±Pá»caþÇŒuï¢NÝÏÀøHÔ	LSôî0”ÕY`ÂÆÈ\"il‘\rçB²ëã/Œôãø%P€ÏÝN”Gô0JÆX\n?aë!Ï3@MæF&Ã³Öþ¿,°\"î€èlbô:KJ\rï`k_êb÷üAáÙÄ¯Ìü1ÑI,ÅÝîüˆ;B,×:ó¾ìY%¼J ŽŠ#v”€'†{ßÑÀã„ž	wx:\ni°¶³’}cÀ°eN®Ñï`!wÆ\0ÄBRU#ØSý!à<`–&v¬<¾&íqOÒ+Î£¥sfL9QÒBÊ‡„ÉóäbÓà_+ï«*€Su>%0€Ž™©…8@l±?’L1po.ÄC&½íÉ BÀÊqh˜¦ó­’Ážz\0±`1á_9ð\"–€è!\$øŒ¶~~-±.¼*3r?øÃ²Àd™s\0ÌõÈ>z\nÈ\0Š0 1Ä~‘ô˜Jð³ðú”|SÞœô k7gé\0ŒúKÔ d¶ÙaÉîPgº%ãw“DôêzmÒûÈõ·)¿‘ñŠœj‹Û×Âÿ`k»ÒQà^ÃÎ1üŒº+Îåœ>/wbüGwOkÃÞÓ_Ù'ƒ¬-CJ¸å7&¨¢ºðEñ\0L\r>™!ÏqÌîÒ7ÝÁ­õoŠ™`9O`ˆàƒ”ö+!}÷P~EåNÈc”öQŸ)ìá#ûï#åò‡€ì‡ÌÑøÀ‘¡¯èJñÄz_u{³ÛK%‘\0=óáOŽX«ß¶Cù>\n²€…|wá?ÆF€Åê„Õa–Ï©UÙåÖb	N¥YïÉhŠ½»é‘/úû)ÞGÎŒ2ü™¢K|ã±y/Ÿ\0éä¿Z”{éßP÷YG¤;õ?Z}T!Þ0ŸÕ=mN¯«úÃfØ\"%4™aö\"!–ÞŸúºµ\0çõï©}»î[òçÜ¾³ëbU}»Ú•mõÖ2±• …ö/tþî‘%#.ÑØ–Äÿse€Bÿp&}[ËŸŽÇ7ã<aùKýïñ8æúP\0™ó¡g¼ò?šù,Ö\0ßßˆr, >¿ŒýWÓþïù/Öþ[™qýk~®CÓ‹4ÛûGŠ¯:„€X÷˜Gúr\0ÉéŸâ¯÷ŸL%VFLUc¯Þä‘¢þŽHÿybP‚Ú'#ÿ×	\0Ð¿ýÏì¹`9Ø9¿~ïò—_¼¬0qä5K-ÙE0àbôÏ­üš¡Žœt`lmêíËÿbŒàÆ˜; ,=˜ 'S‚.bÊçS„¾øCc—ƒêëÊAR,„ƒíÆXŠ@à'…œ8Z0„&ìXnc<<È£ð3\0(ü+*À3·@&\r¸+Ð@h, öò\$O’¸„\0Å’ƒèt+>¬¢‹œbª€Ê°€\r£><]#õ%ƒ;Nìsó®ÅŽ€¢Êð*»ïcû0-@®ªLì >½Yp#Ð-†f0îÃÊ±aª,>»Ü`ÆÅàPà:9ŒŒo·ð°ov¹R)e\0Ú¢\\²°Áµ\nr{Ã®X™ÒøÎ:A*ÛÇ.Dõº7Ž»¼ò#,ûN¸\rŽE™Ô÷hQK2»Ý©¥½zÀ>P@°°¦	T<ÒÊ=¡:òÀ°XÁGJ<°GAfõ&×A^pã`©ÀÐ{ûÔ0`¼:ûð€);U !Ðe\0î£½Ïc†p\r‹³ ‹¾:(ø•@…%2	S¯\$Y«Ý3é¯hCÖì™:O˜#ÏÁLóï/šé‚ç¬k,†¯Kåoo7¥BD0{ƒ¡jó ìj&X2Ú«{¯}„RÏx¤ÂvÁä÷Ø£À9Aë¸¶¾0‰;0õá‘à-€5„ˆ/”<Üç° ¾NÜ8E¯‘—Ç	+ãÐ…ÂPd¡‚;ªÃÀ*nŸ¼&²8/jX°\rš>	PÏW>Kà•O’¢VÄ/”¬U\n<°¥\0Ù\nIk@Šºã¦ƒ[àÈÏ¦Â²œ#Ž?€Ùã%ñƒ‚èË.\0001\0ø¡kè`1T· ©„¾ë‚Él¼šÀ£îÅp®¢°Á¤³¬³…< .£>íØ5ŽÐ\0ä»	O¬>k@Bn¾Š<\"i%•>œºzÄ–ç“ñáºÇ3ÙPƒ!ð\rÀ\"¬ã¬\r ‰>šadàöó¢U?ÚÇ”3P×Áj3£ä°‘>;Óä¡¿>žt6Ë2ä[ÂðÞ¾M\r >°º\0äìP®‚·Bè«Oe*Rn¬§œy;« 8\0ÈËÕoæ½0ýÓøiÂøþ3Ê€2@Êýà£î¯?xô[÷€ÛÃLÿaŽ¯ƒw\ns÷ˆ‡ŒA²¿x\r[Ñaª6Âclc=¶Ê¼X0§z/>+šª‰øW[´o2ÂøŒ)eî2þHQPéDY“zG4#YD…ö…ºp)	ºHúpŽ˜&â4*@†/:˜	á‰T˜	­Ÿ¦aH5‘ƒëh.ƒA>œï`;.Ÿ­îY“Áa	Âòút/ =3…°BnhD?(\n€!ÄBúsš\0ØÌDÑ&D“J‘)\0‡jÅQÄyŽhDh(ôK‘/!Ð>®h,=Ûõ±†ãtJ€+¡Sõ±,\"M¸Ä¿´NÑ1¿[;øÐ¢Š¼+õ±#<ìŒI¤ZÄŸŒP‘)ÄáLJñDéìP1\$Äîõ¼Q‘>dO‘¼vé#˜/mh8881N:øZ0ZŠÁèT •BóCÇq3%°¤@¡\0Øï\"ñXD	à3\0•!\\ì8#h¼vìibÏ‚T€!dª—ˆÎüV\\2óÀSëÅÅ’\nA+Í½pšxÈiD(ìº(à<*öÚ+ÅÕE·ÌT®¾ BèS·CÈ¿T´æÙÄ e„Aï’\"á|©u¼v8ÄT\0002‘@8D^ooƒ‚ø÷‘|”Nù˜ô¥ÊJ8[¬Ï3ÄÂõîJz×³WL\0¶\0ž€È†8×:y,Ï6&@”À E£Ê¯Ý‘h;¼!f˜¼.Bþ;:ÃÊÎ[Z3¥™Â«‚ðn»ìëÈ‘­éA¨’ÓqP4,„óºXc8^»Ä`×ƒ‚ôl.®üº¢S±hÞ”°‚O+ª%P#Î¡\n?ÛÜIB½ÊeË‘O\\]ÎÂ6ö#û¦Û½Ø(!c) Nõ¸ºÑ?EØ”B##D íDdo½åPAª\0€:ÜnÂÆŸ€`  ÚèQ„³>!\r6¨\0€‰V%cbHF×)¤m&\0B¨2Ií5’Ù#]ú˜ØD>¬ì3<\n:MLðÉ9CñÊ˜0ãë\0“¨(á©H\nþ€¦ºM€\"GR\n@éø`[Ãó€Š˜\ni*\0œð)ˆü€‚ìu©)¤«Hp\0€Nˆ	À\"€®N:9qÛ.\r!´JÖÔ{,Û'æÙŠ4…B†úÇlqÅ¨ŸXc«Â4ß‹N1É¨5«WmÇ3\nÁF€„`­'‘ˆÒŠxàƒ&>z>N¬\$4?ó›ÃïÂ(\nì€¨>à	ëÏµPÔ!CqÍŒ¼Œp­qGLqqöG²yÍH.«^àž\0zÕ\$€AT9Fs†Ð…¢D{ía§øcc_€GÈz†)ó³‡ Ü}QÆÅhóÌHBÖ¸<‚y!L­“€Û!\\‚²ˆî ø'’H(‚ä-µ\"ƒin]Äžˆ³­\\¨!Ú`M˜H,gÈŽí»*ÒKfë*\0ò>Â€6¶ˆà6ÈÖ2óhJæ7Ù{nqÂ8àßôÉHÕ#cHã#˜\r’:¶–7Ê8àÜ€Z²˜ZrD£þß²`rG\0äl\n®Iˆi\0<±äãô\0Lg…~¨ÃE¬Û\$¹ÒP“\$Š@ÒPÆ¼T03ÉHGH±lÉQ%*\"N?ë%œ–	€Î\nñCrWÉC\$¬–pñ%‰uR`ÀË%³òR\$–<‘`ÖIfxª¯÷\$/\$„”¥\$œš’O…(‹Ë\0æË\0RY‚*Ù/	ê\rÜœC9€ï&hhá=IÓ'\$–RRIÇ'\\•a=EÔ„òuÂ·'Ì™wIå'T’€€‘üÿ©¾ãK9%˜d¢´·‚!ü”ÀÊÊÀÒj…ì¡íÓÊ&Ðæ„vÌŸ²\\=<,œEùŒ`ÛYÁò\\Ÿ²‚¤*b0>²r®à,d–pdŒŒÌ0DD Ì–`â,T ­1Ý% P‘ž¤/ø\ròb¹(Œ£õJÑèÍîT0ò``Æ¾ÞèíóJ”t©’©ÊŸ((dÇÊªáh+ <Éˆ+H%i‡Èô‹²•#´`­ ÚÊÑ'ô£B>t˜¯J€Z\\‘`<Jç+hR·ÊÔ8î‰€àhR±,J]gò¨Iä•è0\n%J¹*ÐY²¯£JwDœ°&Ê–D±®•ÉÐœªR§K\"ß1Qò¨Ë ”²AJKC,ä´mV’»Ž²›ÊÙ-±òÏKI*±r¨ƒ\0ÇL³\"ÆKb(üªóJ:qKr·dùÊŸ-)ÁžË†#Ô¸²Þ¸[ºA»@•.[–Ò¨Ê¼ß4º¡¯.™1ò®J½.Ì®¦u#J“‡Ág\0Æãò‘§£<Ë&”’ðK¤+½	M?Í/d£Ê%'/›¿2YÈä>­\$Í¬lº\0†©+ø—Á‰}-tº’Í…*ê‰Rä\$ß”òÌK».´Á­óJHûÊ‰‡2\r„¿B‚½(PÍÓÌ6\"ü–nf†\0#Ð‡ ®Í%\$ÄÊ[€\nÐnoLJ°ŒÅÓÂe'<¯ó…‡1KíÁyÌY1¤Çs¥0À&zLf#üÆ³/%y-²Ë£3-„Â’ÍK£L¶ÎÉ×0œ³’ë¸[,¤ËÌµ,œ±’«„§0”±Ó(‹.DÀ¡@ÏÁ2ïL+.|£’÷¤É2è(³L¥*´¹S:\0Ù3´ÌíóG3lÌÁaËl³@L³3z4­Ç½%Ì’ÍLÝ3»…³¼!0Š33=Lù4|È—¡à+\"°Êé4´Ëå7Ë,\$¬SPM‘\\±Î?JŠY“Ì¡¹½+(Âa=K¨ì4œ¤³CÌ¤<Ð…=\$,»³UJ]5h³W &tÖI%€é5¬Ò³\\M38g¢Í5HŠN?W1Hš±^ÊÙÔ¸“YÍ—Ø Í.‚N3MŸ4Ã…³`„Ži/P‰7ÖdM>šd¯/LRÎÜâ=K‘60>¯I\0[ðõ\0ßÍ\r2ôÔòZ@Ï1„Û2ÿ°7È9äFG+ä¯ÒœÅ\r)àhQtL}8\$ÊBeC#Á“r*HÈÛ«Ž-›Hý/ØËÒ6Èß\$øRC9ÂØ¨!‚€Å7ük/PË0Xr5ƒ¡3D„¼<TÁÔ’q¯Kô©³nÎH§<µFÿ:1SLÎrÀ%(ÿu)¸Xr—1Ñ€nJÃIÌ´S£\$\$é.Î‡9Ôé²IÎŸÒ3 ¨LÃl”“¯Î™9äÅC•N #Ô¡ó\$µ/ÔésÉ9«@6Êt“²®Nñ9¼´·NÉ:¹’Â¡7ó Ó¬Í:DáÓÁM)<#–ÓÃM}+ñ2ÎNþñ²›O&„ð¢JNy*ŒòòÙ¸[;ñóÎO\"mÚÄóÅMõ<c Â´‚°±8¬K²,´ÓÇN£=07s×JE=Tá³ÆO<Ôô³£Jé=D“Ó:ÏC<Ì“àË‰=äèó®KÊ»Ì³ÈL3¬÷­„LTÐ€3ÊS,œ.¨ÿÏq-Œñsç7Í>‚?ó¼7O;Ü `ùOA9´óñÏ»\$œüÁOÑ;ìý`9ÎnÇIAŒxpÜöE=O¹<ü²5ÏÎ„ý2¸O?d´Ž„´Œ`NòiOÿ>Œþ3½P	?¤òÔOžmœúSðMôË¬·†=¹(ãdã¤AÈ­9“‘\0í#üä²@ƒ­9DŽÁÉ&ÜýòŠ‚?œ “Ði9»\nà/€ñAÝóòÈ­A¤ýSËPo?kuN5¨~4ÜãÆ6††Ø=ò–Œ“*@(®N\0\\Û”dGåüp#è¤> 0À«\$2“4z )À`ÂW˜ð +\0Š‘80£è¦• ¤ª”äz\"TÐä0Ô:\0Š\ne \$€ŽrM”=¡r\n²N‰P÷Cmt80ðú #¤ØJ= &ÐÆ3\0*€Bú6€\"€ˆéèú€#Ì>˜	 (Q\nŒðê´8Ñ1C\rt2ƒECˆ\n`(Çx?j8N¹\0¨È[À¤QN>£©à'\0¬x	cêªð\nÉ3×Chü`&\0²Ð´8Ñ\0ø\näµ¦úO`/€„¢A`#ÐìXcèÐÏD ÿtR\n>¼ÔdÑBòD´LÐÄÌõ‰äÐÍDt4ÐÖ j”pµGAoQoG8,-sÑÖðÔK#‡);§E5´TQÑGÐ4Ao\0 >ðtMÓD8yRG@'PõC°	ô<PõCå\"”K\0’xüÔ~\0ªei9Ðìœv))ÑµGb6‰€±H\r48Ñ@‚M‰:€³FØtQÒ!H•”{R} ôURpÍÔO\0¥I…t8¤ØðûÎÇ[D4FÑD#ÊÑ+D½'ôMÊ•À>RgIÕ´ŠQïJ¨””UÒ)EmàüTZ­Eµ'ãê£iEÝ´£ÒqFzAªº>ý)T‹Q3HÅ#TLÒqIjNT½¼…&CøÒhX\nT›ÑÙK\0000´5€ˆ¢JHÑ\0“FE@'Ñ™Fp´hS5F\"ÎoÑ®e%aoS E)  €“DU «Q—FmÎÑ£M´ÑÑ²e(tnÒ “U1Ü£~>\$ñßÇ‚’­(hÕÇ‘Güy`«\0’ê 	ƒíG„ò3Ô5Sp(ýõPãGí\$”œ#¤¨	©†©N¨\nôV\$ö]ÔœPÖ=\"RÓ¨?Lzt·ƒ1L\$\0ÔøG~å ,‰KNý=”ëÒGMÅ”…¤NS€)ÑáO]:ÔŠS}Ý81àRGe@Cí\0«OPðSõNÍ1ôÝT!P•@ÑÝS€ðÿÕS‰G`\nÉ:€“P°j”7R€ @3üÑ\n‘ üã÷â£”DÓ æúLÈÏ¼Ž 	èë\0ùQ5ôµ©CPúµSMP´v4†º?h	hëT‡D0úÑÖàõ>&ÒITxôO¼?•@U¤÷R8@%Ô–ŒõK‰€§NåKãóRyE­E#ýù @ýÃøä%Là«Q«Q¨µ£ª?N5\0¥R\0úÔTëFåÔ”RŸSí!oTEÂC(Ï¶ÈýÄµ\0„?3iîSS@U÷QeMµƒ	KØ\n4PÕCeS”‘\0NC«P‚­Oõ! \"RTûõ€S¥NÕÁU5OU>UiIÕPU#UnKPô£UYTè*ÕC«U¥/\0+º¸Å)ÈÚ:ReAà\$\0øŽ¤xòÇWDº3Ãêà`üÚüçU5ÒIHUY”ô:°P	õe\0–MJi€ƒµÃýQø>õ@«T±C{›ÕuÑì?Õ^µv\0WR]U}Cöê1-5+Uä?í\rõW<¸?5•JU-SXüÕLÔß \\tÕ?ÒsMÕb„ÕƒVÜt§TŒ>ÂMU+Ö	EÅcˆÏÔ9Nm\rRÇƒCý8ŽSÇX•'RÒéXjCI#G|¥!QÙGh•tðQ¸ý )<¹YÐ*ÔÐRmX0üôö½M£›õOQßYýhÀ«ßduÕ¤ÕZ(ýAo#¥NlyN¬V€Z9IÕºM•¦V«ZuOÕ…TÕTÅEÕ‡Ö·SÍeµµÖÊ\nµXµªSÛQERµ³ÔÙ[MF±VçO=/õ­¨>õgÕ¹TíVoUT³Z’N€*T\\*ÃïÐ×S-pµSÕÃVÕq€ÒM(ÏQ=\\-UUUV­C•Ä×ZØ\nu’V\$?M@UÎWJ\r\rUÐÔ\\å'U×W]…W”£W8ºN '#h=oCóÐýF(üé:9ÕYu•†¤÷V-UÓ9Ÿ]ÒC©:U¿\\\nµqW—™à(TT?5Páª\$ R3ÕâºŸC}`>\0®E]ˆ#Rêà	ƒÿ#R¥)²W–’:`#óGõ)4ŠRÀý;õáViD%8À)Ç“^¥Qõé#”h	´HÂŽX	ƒþ\$Nýx´š#i xûÔ’XRõ€'Ô9`m\\©†¨\nEÀ¦Q±`¥bu@×ñN¥dT×#YYý„µ®GV]j5#?L¤xt/#¬”å#é…½O­PÕëQæ¢6•££Ï^í† €šŽðüÖØM\\R5t´Óšpà*€ƒXˆV\"WÅD€	oRALm\rdGN	ÕÖÀú6”p\$PåºŸE5Ôý†©Tx\n€+€‹C[¨ôVŽŒýÖ8U•Du}Ø»F\$.ªËQ-;4È€±NX\n.XñbÍ•\0¯b¥)–#­NýG4KØÐZS”^×´M¶8Øód­\"C‚¬>ÅÕdHe\nöY8¥Ñ.ê ú°ˆÒFúD”½W1cZ6”›QâKHü@*\0¿^¸úÖ\\QßF‚4U3Y|‘=˜Ó¤éE›ÔÛ¤¦?-™47YƒPm™hYw_\ršVe×±M˜±ßÙe(0¶ÔFÕ\r !ÒPUI•uÑ7Qå•CèÑŽ?0ÿµÝgu\rqà¤§Y-Qèó°èú=g\0…\0M#÷U×S5Zt®ÖŸae^•\$>²ArV¯_\r;tî¬’¨”HW©Zí@HÕØhzDèÚ\0«S2Jµ HIåO 'ÇeígÉ6¹[µR”<¸?È /ÒKM¤ö–Ø\n>½¤HáZ!iˆö¤ŸTX6–Ò×iºC !Ó›g½à ÒG }Q6žÑ4>äwà!Ú™C}§VBÖ>åªUQÚ‘jª8cïUTàû–'<‚>ÈýõôHC]¨VšÑ7jj3v¥¤å`0ÃèÈ23ö°Ðòxû@U—k \n€:Si5žÕ#Yì-wî”ÕàéM?céÒMQÅGQÕÑƒb`•ò\0Ž@õËÒ§\0M¥à)ZrKXûÖŸÙWl­²öÍlå³TM×D\r4—QsS¥40ÑsQÌõmYãh•d¶ÂC`{›V€gEÈ\n–»XkÕà'Óè,4ú¼¹^í¢6Æ#<4éNXnM):¹·OM_6d€–æõ¸Ãõ[\"KU²nžÖ?l´x\0&\0¿R56ŸT~> ô†Õ¸?”Jnž€’ ˆÏZ/iÒ6ôÎÚglÍ¦ÖUÛáF}´.ž£¼JLöCTbMŽ4ÍÓcLõTjSD’}JtŒ€Z›ªµÇ:±L­€´d:‰Ez”Ê¤ª>ÖV\$2>­µŽ¢[ãpâ6öÔRŽ9uêW.?•1®£RHužèÛR¸?58Ô®¤íDÝÆuƒ£çpûcìZà?œr×» Eaf°}5wY´ëå‚Ï’ÒêÅW‚wT[Sp7'Ô_aEk \"[/i¥¿#ÿ\$;m…fØ£WOüô”ÔFò\r%\$Íju-t#<Å!·\n:«KEA£íÒÑ]À\nUæQ­KEÀ #€¿Xå¨÷5[Ê>ˆ`/£ÍDµÊÖ­VEpà)åI%ÏqßÜûníx):¤§le¢´Õ[eÕ\\•eV[j…–£éÑ7 -+ÖßGWEwt¯WkEÅ~uìQ/mõ#ÔW—`ýyu“Ç£DÝAö'×±\r±•Õ™OD )ZM^€³u-|v8]‹g½‘hö×ÅLà–W\0øÈû6ËX†‘=YÔd½Q­7Ï“”Ï9£çÍ²r <ÃÖêD³ºB`c 9¿’È`D¬=wx©I%ä,á„¬†è²àêƒj[ÑšÖíßOÿ‹´ ``ŽÅ|¸òòÆÞø¤Œ˜¼í.Ì	AOŠÀÄ	·‰@å@ 0h2í\\âÐ€M{eã€9^>ô•â@7\0òôË‚W’€ò\$,íÉÅš¡@Ø€Òâ•å×w^fmå‰,\0ÏyD,×^X€.¯Ö†©7ã·›Ã×2ÝÅf;¥€6«\n”¤Ž…^ŸzC©×§mz…én–^ˆô”&LFFê,°ö[€¥eÈõaXy9h€!:zÍ9còQ9bÅ !€¦µGw_WÉg¥9©ÓS+t®ÚápÝtÉƒ\nm+–œÞÙ_ð	¡ª\\¼’k5£ÒÜ]Æ4ˆ_h•9 Ù÷N…—Å]%|¥ˆ7ËÖœŽ];”ï|ñµ ßXýÍ9Õ|åñ×ÌG¢“¨[×Ô\0‘}Uñ”çßMCI:ÒqO¨VÔƒa\0\rñRÍ6Ï€Ã\0ø@H¢ÅP+rìS¤Wãè€øp7äI~p/ø HÏ^Ýê²ü¤¬E§-%û¥Ì»Í&.ÎÄ+¸JÑ’;:³¶«!“ýÐNð	Æ~öª‰€/“WÄÂ!„BèL+Â\$ðíq§=ü¿+Ñ`/Æ„e„\\±ÒÏxÀpE‘lpSÂJSÝ¢½ö6à‡_¹(Å¯©Äéb\\OÆÊ&ì¼\\Ð59\0ûÂ€9nñøD¸{¡\$á¸‹K‘v2	d]èv…CÕþÅÕ?tf|WÜ:£Ô¨p&¿àLn„Îè³žî{;ˆçÚGR9øT.y¹üïI8€¹´\rl° ú	Tè n”3¼öðT.ƒ9´è3› š¼Zès¡¯ÑÒGñþŽˆ:	0£¦£zè­Ý.Œ]ÀçÄ£Q›?àgT»%ñ™ÕxŒÕŒ.„šÔÇn<ì£-â8BË³,Bòì˜rgQþ¢íßó„ÉŽ`Úá2é„:îµ½{…gëÄs„øgóZ¿•… ×Œ<æ×w{¦˜ƒbU9ˆ	`5`4„\0BxMpð‘8qnahé†@Ø¼í†-â(—>S|0®…¾¥…3á8h\0Ñ«µCÔzLQž@¶\n?†¸`AÀ >2šÂ,÷á˜ñN&Œ«xˆl8sah1è|˜B‡É‡DxBÞ#V—‹V–×Š`Wâa'@›‡¬	X_?\nì¾  •_â. ØP¼r2®bUarÀI¸~áñ…S“àú\0×…\" 2€ÖþÀ>b;…vPh{[°7a`Ë\0êË²j—oŒ~·ûþvÍÙ|fv†4[½\$¶«{ó¯P\rvæBKGbpëÈÅø™–OŠ5Ý 2\0j÷Ù„LŽ€î)ÇmáÈV¡ejBB.'R{C¤ïV'`Ø‚ ‰Ž%­Ç€Ð\$ Oå\0˜`‚’«4 ÌNò>;4£³¢/ÌÏ€´À*Âø\\5„ÅÁ!†û`X*Þ%îÄNÍ3SõAMôþËÆ”,þ1¬²®í\\¯²caÏ§ ³ù@Ø¬Ëƒ¸B/„¬Íø0`óv2ï¡„§Œ`hDÅJO\$ç…@p!9˜!¥\n1ø7pB,>8F4¯åf Ï€:“ñ7Â„î3›£3…¿à°T8—=+~Øn«Îâ\\Äe¸<br·þ øFØ²° ¹C¡N‹:c€:Ôl–<\r›ã\\3à>ñ˜‡À6ONnŠä!;áñ@›twë^Fé€Là;€×º,^aÈ\ra\"ÞÀÚ®'ú:„vàJe4Ã×;•ñ_d\r4\rÌ:ÛüÀ¬S˜à2€[c€„XÿÊ¦Pl˜\$¹Þ£i“wåd#ŽB šb›Î×¤õ’™`:†€Ï~ <\0Ñ2Ù·—‘RŒÂÆPÈ\r¸J8D¡t@ìEŽè\0\rÍœ6öóäÞ7•½ä˜YÏ£ú\"åäÀš\rüƒ¦Àš3ƒ¡.˜+«z3±;_ÊŸvLÝäÓwJ¿94ÀIJa,A¦ñˆ¯;ƒs?ÖN\nR‡!Ž§Ý†Om…sÈ_æà-zÛ­w„€ÛzÜ­7¡ÍÅzî÷–M”ˆ€o¿”¥æ\0¢ƒa”ÅÝ¹4å8èPfñYå?”òi—–eBÎSà1\0ÉjDTeK”®UYSå?66R	¦cõ6Ry[c÷”°5Ù]BÍ”ÖRù_eA)&ù[å‡•XYRW–6VYaeU•fYeåw•ŽU¹båw”Eë°Ê†;z¤^W«9–ä×§äÝ–õë\0<Þ˜èeê9SåÎ¤daª	”_-îá‰L×8Ç…ÍQöèTH[!<p\0£”Py5ˆ|—#ê‘P³	×9vàš2Â|Ç¸áfao†á,j8×\$A@kñƒ¿ŽaË‘½bócñÈf4!4¨‘¶cr,;™‘æ‘öbÆ=€Â;\0°øÅº…˜†cdÃæX¾bìx™a™Rx0Aãh£+wðxN[˜ÜB·pÚƒ¿w™TÀ8T%™šMšl2à‡½¡šð—}¡Ès.kY„˜0\$/èfU€=þØs„gKÃ¡ˆM› õ?ÿ›ç`4c.Ôø!¡&€åˆ†g°ûfà/þf1=¯›V AE<#Ì¹¡f\n») Šë›Npò“ã`.\"\"»Açœ¤ã—üq¸X“ Ù¬:aÉ8™¹f¯™Vsó‹G™ÞrŽ:æVÞÆcÔgVl™g=`ã“WŽËýyÒgUÀË™ªáº¼îeT= ã€á€Æx 0â M¼@ˆ»šÂ%Îºb½œþw™ÆfÛÙOøç­˜Ü*0¯…®|tá°%±™PÈÍpæúgKžù¬?pô@JÀ<BÙŸ#­`1„î9þ2çg¶!3~ØÜçînläÅfŠØVhù¬Ž.Ñ€à…aCÑù•?³Šû-à1œ68>A¤ˆaÈ\r—¦y‹0 Öi‘J«} à¹© Ðz:\r¡)‘Sþ‚¡@¢åh@äöƒY¹ã´mCEg¡cyÏ†‚<õàÍh@¼@«zh<WÙÄ`Â•¨±:zOãÎÖ\rÍêW«“°V08Ùf7™(Gyƒ²`St#ï„f†#ƒ²œC(9ÈÂ˜Ø€dùææ8T:¯»Œ0ºè qµ  79·á£phAgÜ6Š.ãæ7Fr™bä ÈjšèA5î…†ƒá¡a1úÚh•ZCh:–%¹ÎgU¢ðD9ÖÅÉˆ„×¹Ïé0~vTi;VvSš„wœØ\rÎƒ?àÇf²£…ÿ¥nŠÏ›iY™ìaº¬3 Î‡9Õ,\n™Ãr‘‰,/,@.:èY>&…šFÑ)ú™¶}šb£€èiOÝiæš:dèAŒn˜šc=¤L9O’h{¦ 8hY.’ÙÀ®¾‡®‡…œüÇ\r¬Ö‡£À›Šé1Q¯U	”C‘hô†eÿO‰›°+2oÌÎìÞN‹˜÷§øzpè¢(þ]Óh€å¢Z|¬O¡cÑzDáþ;õT\0j¡\0…8#>ÎŽÁ=bZ8Fjóìé;íÞºTé…¡w®Í)¦ýøN`æë¨¤Ã…B{ûƒz\ró¡c“Óè|dTG“iœ/ûú!i†Ê0±¼ø'`Z:ŠCHï(8Âê`V¥™Úãöª\0Üê§©†£WïßÇª˜ÕzgG¾‘…ƒ½²-[ÃÐ	iœêN\rqºé«n„„“o	Æ¥fEJý¡apb¹ê}6£…Õ=o¤–„,tèY+ö®EC\rÖPx4=¼¾™Ù@‡‰¦.†‘F£[¡zqçÜèX6:FG¨ #°û\$@&­ab¤þhE:²ƒå¬ä`¶S­1—1g1©þ„2uhY‹¬_:Bß¡dcï–*ÿ­†\0úÆ—FYFœ:Ë£ªn„ØÌ=Û¨H*Z¼Mhk/ëƒ¡žzÙ¹ï‹´]šÁh@ôæ©Øã1\0˜øZKùž¢ëÎÆè^+º,vfós®š>ˆ¤’Oã|èÀÊsÃ\0Öœ5öXé‹îÑ¯F„÷n¿Aˆr]|ÏIi4è…þ ØÂC° h@Ø¹´Ÿž–cß¥¨6smOÃå‰™›gX¬V2¦6g?~ÖÃYÕÑ°†súcl \\RŠ\0Œ¨cœA+Œ1°„›ùÌé\n(ÑúÃÌ^368cz:=z÷‚(äø ;è£¨ñsüF¶@`;ì€,>yTßï&–•d½L×Ÿœÿ%Òƒ-ëCHL8\r‡Çbû°°£úMj]4Ym9üÛüÐZÚBøïP}<ŸûàX²¯‰Ì¥á+gÅ^ØMÞ + B_Fd¬X„ø‹lówÈ~î\râ½‹è\":ÔêqA1X¾ìæ²Ðø¯3ÖÎ“Eáh±4ßZZÂó¸& …ææ1~!Nfã´öo—ˆ™\nMeÜà¬„îëXIÎ„íG@V*X¯†;µY5{Vˆ\nè»ÏTéz\rF 3}m¶Ôp1í[€>©tèe¶w™Ÿæë@VÖz#‚2Äï	iôôÎ{ã9ƒ‚pÌ»gh‘Šæ+[elU‰¦ÛAßÙ¶Ó¼i1Ä!Œ¾ommµ*Kà‡ê}¶°!íÆ³í¡®Ý{me·f`“—mè˜CÛz=žnÞ:}g° T›mLu1FÜÚ}=8¸ZáíèOžÛmFFMf¤…OO€ðîáÀ‹ƒèøß/¼éõ¸Þ“šå€þV™oqj³²èn!+½òµüZ¨ËI¹.Ì9!nG¹\\„›3a¹~…O+Îå::îK@Œ\nÚ@ƒ‘¤Hph‘´\\BÄõdmfvCèžÓPÛ\" æ½Û.nW&–ên¢øHYþ+\r¶“Äz÷i>MfqÛ¤î­ºùÝQc‚[­H+æÀo¤Ñ*ú1'¤÷#ÄEw€D_Xí)>Ðs£„-~\rT=½£žà÷ˆà- íy§m§¹æð{„hóŸÌjÚMè)€^ž¹ïÀ'@Vå¡+iÈîÎò›Ÿåµ†É;F“ D[Îb!¼¾´B	¦¤:MP‹îóÛ­oC¼vAE?éC²IiYÍ„#þp¶P\$kâJÞq½.É07œþöxˆl¦sC|ï½¾bo–2äXª>Mô\rl&»Ç:2ã~ÛÑcQ²îò²æoÑÞdá‚-þèUÜRo‚YšnM;’n©#–ß\0–P¾fðÚPo×¿(CÚv<Ê¬ø[òoÛ¸”šû×fÑ¿ÖüÁ;ßáº–õ[úYŸ.o®Up¿®pUŒø”.ž ©B!'\0‹òã<Tñ:1±À¾ šã¤î<„›ðnˆîF³ðƒI¢Ç”´‚V0ÊÇRO8‰wøÎ,aFú¼É¥¹[´ÎŸ…ñYOù«‰€/\0™Ùox÷ÇQð?§°:Ù‹ëÆè`h@:ƒ«¿öÑ/Mím¼x:Û°c1¤Öàû¯ív²;„‚è^æØÆ@®õ@£úð½ÂÇ\n{¯¼Âî‹à;ç‘´B¼í¸8‘º gå’ä\\*gåyC)Û„E^ýOÄh	¡³¦Aƒu>Æèü@àDÌ†Yæ¼í›â`o»<>Àƒp‰™ŠÄ·’q,Y1Q¨Áß¸†/qgŒ\0+\0âæå‡Dÿƒç?¶þ î©Úßîk:ù\$©û¬í×¥6~I¥…=@ŽíÑ!¾ùvÚzOñš²â+ÍõÆ9Çi³–›¼aïð†êû…gòðôî¿—¹ÿ?š0Gn˜q²]{Ò¸,FáÃøO¡â„Þ <_>f+¢,ñÌ	»Ôñ±&ôœ†ðíÂ·¼yêÇ©Oü:¬UÂ¯ˆLÆ\nÃÃºI:2³¿-;_Ä¢È|%éå´¿!Îõfž\$¦ˆ†Xr\"Kniîñ—ÀÐ\$8#›g¤t-›€r@LÓåœè@S£<‘rN\nD/rLdQkà£“”ªõÄîeðåäãÐ­åø\n=4)ƒB˜”Ë×šôÌZ-|Hb¡†‘HkÊ*	ÖQ!Ð'êG ž›Ybt!¿Ê(n,ìP³OfqÑ+X“Y±ÿ‚ë\"b F6ÖÌr fò\"ÒÜ³!N¡ó^¼¦r±B_(í\"¨KÊ_-<µò *Q÷ò¨Ù/,)H\0„‰²rç\"z2(¹tÙ‡.F>†‡#3â®Ø¦268shÙ þ¨Æ‘I1Sn20¶çÊ-«4’ÚÇ2Aœs(¬4ä¼Ë¶Š\0ÆÝ#„årþK'ËÍ·G'—7&\n>xßüÜJØGO8,ó…0¼â‹ù8”ÑÓ\0óW9’ÝIˆ?:3nº\r-w:³ÂÌÅ×;3È‰”!Ï;³Üêƒ˜˜Z’RMƒ+>ÖÜðÊé0/=R…'1Ï4Õ8ûÑÏmÿ%È¥}Ï‡9»;‚=ÏnQöã=ÏhhLõ·GÏkWÎ\rô	%Ø4ÒœsñÎ–J€3sÛ4—@™U‚%\$ÜÑN;Ì?4­»óNÚÏ2|ÊóZÚ3Øh\0Ï3“5€^Àxi2d\r|ûM·Ê£bh|Ý#vÇ` \0”ê®äàû\$\r2h#ú¤?³ˆI\n’¼+o-œŠ?6`á¹½¿.\$µšøKY%ØÂJ?¦c°RN#K:°KáELÁ>:Á¥@ŒãjP‘Ìn_t&slm’'æÐ©É¸Óœ²Œ½—ã;6Û—HU5#ìQ7U ýWYÜU bNµ–Wû_ûª©;TCø[Ý<Ú–>ÅÇõ‰WýCUÔ6X#`MI:tùÓµ€ö	u#`­fu«\$«t­öXó`f<Ô;båghöÑÕ9×7ØS58õ¬Ý#^–-õ\0êÀúîÕ¹R*Ö'£¨(õðõqZå££êX¹QÝFUvÔW GWíñÓTêÇWô~Ú­^§WöÄÁÕýJ=_Ø—bmÖÝbV\\l·/ÚMÕÿTmTOXuÊ=_ýITvvu‹a\rL_ÕqR/]]mÒsu=H=uÑg o\\UÕ…gM×	XVU À%õhý¡53U™\\=¡öQßØM¹v‡€¡gåmàõue¡ˆÙûhÿbÝMÝGCeO5®ÔÖO5…ÔYÙi=eÕ	GTURvOa°*ÝivWX•J5<õ¯bu ]ˆ×Öðúµ<õÃÙÕ\$u3v#×'eöuÑR5m•Šv‹D5.vŽŒõW=ŸU_å(´\\VØÏ_<õ÷SÍn)Ü1M%QháZ‡T…f5EÕ'ÕÍW½ŠvÅUmiÕ‚UÔÕ]aW©U§dRváÙ-YUZuÙUV—UiRV™õ³ÓÇ[£íZMU§\\=Âv{ÛXýµ¼wQ÷huHvÇ×gqÝ´w!Úoqt¢U{TGqý{÷#^G_ubQ„êå•i9Qb>ÚNUdº±k…½5hPÙmu[•\0¦êÅ_¶é[õY-ðô÷rõÈÕ(ÖCrMeýJõ!h?QrX3 xÿÈÏ#‡÷xÖ<Û{u5~ƒíÑ-ÝuŽëYyQ\r-”î\0ùuÕ£uuÙ¿pUÚ…•)–PåÜ\r<u«S›0ÝÉw¹ß-iÝóÔ!ÌÖŠøB÷áÆd]ùèÅ‡ÔÆEêðvlmQÝ6k¼ÒJ´ˆwí¦ÄžØÃãŒED¶UÙR“ev:XßcØNW}`-¨tÓH#e„bº±u€ãó	~B7ê ?ƒ	OPœCWµ×SEÍ•V>¶“×UÛ7ßžç‰Ôám»Ó‚¬zÿ=µƒÍØ1º™ƒ+ ¹mÃI,>µX7àä] .‡½*	^îŠã°N…º.èÎ/\"„˜)Ð	…¯‚sž®|à¤çÓŸÐlÁ}ã¸ŽÍç!óîƒ‘5n±p„j£¾h’}½èðm“EázHÂaO0d=A|wëß³ãë×šÎìu²œŸvùØ¼G€x#®…b”cSðo-‰ùtOm`C‹ò^MŒÅ@ë´h­n\$k´`þ`HD^PEà[äŒ]¹¨rR¸mž=‚.ñÙ‡>Ayi‚ \"ú€ò	Ö·oã-,.œ\nq+À¥åfXdŠ«¶ã*ß½ˆKÎØƒ'Üê Ð%aôÿ‡ù9pûæ—øKLM„à!þ,èÊËŽ¨ŒzX#˜Vá†uH%!Àœ63œJ¾ryÕíùq_èu	úWù±‡Æ|@3b1åÈ7|~wï±³þíA7“ÒÂ›è™	¼™9cS&{ãäÒ%VxðïkZO‰×w‰Ur?®„’ªN Î|…CÉ#Å°õåÕ¯ ¹/ú™9ftŽEw¸CÁºa¦^\0øO<þW¦{Yã=éŸeë˜ýnÉ„ígyf0h@ìSÝ\0:C©´^€¸VgpE9:85Ã3æÞ§áºð@»áŽj_ª[Þ+«êÇ©xƒ^“ê®†~@Ñ‡Wª¸ãã“œ†9x—FC˜¿­.ãšçöük^IŽû¡pU9üØSŸØ÷½—œ\$óóø\r4´…ù\0ÎèO°ã‘Ä)L[Âp?ì.PECSìI1nm{Å?žPîWAß²Á;€ñìD°;SºaKføò›%?´XõÞ+¤B>½ù9¿¯ÙGj˜cžz‘AÍŽ÷:êa³n0bJ{o¥·!3À­!'’ØKÃÅíùÔ}ã\\èÎ3Wøê5îxÏÉÁL;ƒ2Î¶n—a;²í×ºXÓ›]Éoºœxû{ä¦5Þ™jX÷ˆð—¶vÓšéãqÞÊEE{Ñ€4Á¾öÄ{íÙç	Ì\nöÊ>ù™aï¯·¾üì§ïØLûÔûåïÿ½ûìñ'ð½Þé{ë\n‰—>JøßŒŒá¸Ó—†÷YÏ\rOÊ½ð‘t¯ÿû¥-OÃ¦ü4Ôÿ9Fü;ð§Á»ÔüGðøIªFßì1ÂoÿßóñO²¾éa{w—0Ó»ï¤Æ¯;ñ”„‘lüoñàJÐTb\rwÇ2®Jµþ=D#ònÁ:ÉyñûSø^ã,.¿?(ÈI\$¯ÊÆ¯í¨á3÷Ãsð4MÊaCRÉÆÍGÌ‘œúIß°n<ûzyÑXN¾ð?õâ.Ãî=—àñ´DÇ¼\r›žØé\nÕó¨\roõý\nÐŸCl%ÁÍYÎû¥ß°ÏàGÑþÚ}#VÐ%ý(ÔÿÒà3æÉ˜ržð};ôû×¿GÉÌnö[ª{¥¹–“_<m4[	I¥¢À¼q°µ?ð0cVýnms„³nMõõˆ\"Nj1õw?@ì\$1¦þ>ðÒ^øÕû¥ö\\Ì{nÂ\\Ìžé7Ÿ„¿ÙŸic1ïÚÿhooê·?j<GöxŸlÏù©Sèr}ÍÃÚ|\"}•÷/Ú?sç¬tIäåê¼&^ý1eóÓtãô,*'F¸ß=/Fkþ,95rVâáøàÀºì‘ˆÛo9Íø/FÀ–_†~*^×ã{ÐIÆö¯ã_ƒ‚²Œ“^n„øþNŸŠ~øáÅAí¦‘d©åñþUøwäqY±åî´T¸2ÀéGä?‡&–§æô:yùè%Ÿ–Xç˜JÛCþd	WèßŽ~úG!†´J}›—¤úìùõÄB-Óï±;îûœhÃ*ó¼R´ìöE¶ ~âæó.«~Éçæ SAqDVxÂîÍ='íÉEÙ(^Šû¢~›ùø¿›çòéçïo7~‚M[§Qãî(³Üy¸ùnPÑ>[WX{qÔaÏ¤ÆÉý.&NÚ3]ñúHYïÝûƒëÛ[¶ÁÙ&ü8?Ñ3„‹›¦¶§Ý†Ú»¶á#Œ¦ÎBðe6ë…@–“[°¤£ûàÐG\rÎ+ý§}ü˜÷ÁÿÏ_Ýç7–|N„§«Þ4~(zÁ~“»¹ï§%›–?±ßÓÈ[¹ø1žSª]xØköÑKxO^éA€‰rZ+ºÿ»½*ÂWö¯kþwD(¹ø»R:æý\0•§íù'¤Šó“m!OÐ\näÅuè‚Æó.[ PÆ!¹²}×Ïm Ûï1pñuüâ,T©çL 	Â€0}â&PÙ¥\n€=Dÿ=¾ñÐ\rÂšA/·o@äü2ãt 6àDK³¶\0ÈÂƒq†7„l ¼ðBêŠúÌ(ƒ;[ñˆkr\r‘;#‘ÃäƒlÅ”\r³<}zb+ÔÐOñ[€WrXƒ`Z Å£†Pm'Fn ¼‰îSpß-°\0005À`d¨Ø÷P„ÁÚÇ¾·Û;²Ìn\0‚5fïP„¿EJäwûÛ ¹.?À;¶§NòÞ¥,;Æ¦Ï-[7·ÞeþÚiÅâ-“ÖîdÙŽ<[~”6k:&Ð.7‡]\0ó©ûë–ù/µ59 ñÁ@eT:ç…˜¯3ÅdsÝú5äœ5f\0ÐPµöHB–•í°½º8JÔLS\0vI\0ˆ™Ç7DmÆaž3e×íŽ?B³ª\$´.E‹ÐfË@ªnúƒ‰bòGbÁÏq3Ÿ|üšPaËˆøÏ¯X7Tg>Â.ÚpØï™’5¸«AHÅµ’Š3Sð,˜Á@Ô#&wµî3†ôm[ÏÀòIíÑ¥Ó^“Ì¤J1?©gTá½#ÏS±=_„‚_±	«£ÉVq/CÛ¾·Ý€Î|ËôáþD ƒg>Ü„õëé 6\rŠ7}q”ÆÅ¤‹JGïB^î†\\g´Ýõüœ&%­Ø[ª2IxÃ¬ªñ6\03]Á3Œ{É@RUàÙMö v<å1Š¿‘¾sz±uP’5ŸªF:Òiî|À`­qÓ÷†V| »¦\nkâ}Ð'|Žgd†!¨8¦ <,ëP7˜m¦»||»ÿ¶IŽAÓ]BB ÏFö0XÏú³	ŠDÖß`W µÁqm¦OL‘	ì¸.Í(Áp‚¼Òä¶\"!‹ýª\0âÍAïÃô‡‰ÁV€–7kƒŒM¸\$ÓN0\\Õ§ƒ\"‹f‘á Çëñ È\0uqž—,Œ 5ÆãA6×pÎÎÈ\nðÎjY³7[pK°ð4;lœ5n©Á@â\\fûÐl	¦‚MöùûPÁç3®—C HbÐŒ©¸cEpP‰ÚÐ4eooeù{\r-àš2.ÔÖ¥½ŒP50uÁ²°G}Äâ\0îËõ¨<\röœ!¸œ~Êýµ¾óñ¹\n7F®d¶ýà“œ>·Ôa¢Ù%ºc6Ôž§õMÀ¥|òàd‹û·ìOÓ_¨?J„æªC0Ä>ÐÁ&7kM4ª`%fílðÎ˜B~¢wxÑÚZGéP†2¯à0ü=ž*pð†@ˆBeÈ”ØÏ|2Ä\r³?q¸Ð8í¸ë±ñÍÐŠ(·yráö 0àî>œ>ÀE?wÜ|r]Ö%AvàýÁÅä@Ž+ÝXÁªAgâÉÛÿsû®CÐûAXmNÒú4\0\rÚÍ½8JÝJðÇ¸DÒšó´:=	•ðó‡ëÆS™4¯ñF;	¬\\&Öè†P!6%\$iäxi4c½0Bá;62=ÚÛ1ÂùÌˆPCØåÂƒmËÍ“dpc+Ò5Šå\$/rCR†`£MQ¤6(\\á2A ¦¹\\ªŒlGòl¬\0Bq°¤P¯r²ûøBµ‰ê›Ñ‚¹_6LlË!BQŽ‰IÂŽGÀåÜØðXRbs¡]B—Hržã˜`ÎX‹ä\$på±8ð„•	nbR,Â±…L \"ÂE%\0’aYB¦sœ…ÍD,!Æ×Ï›pN9RbG·4ÆþM¬Œt…¸œ¬jUô¤À§y\0ìÝ%\$.˜iL!xÂìÒ“Å(Ä.‘)6T(’I…ìa%ÒKÈ]mÄt¥ô…ú&‚óG7ÇITMóBú\rzaÂØ])vaˆ%œ†²41TÁjÍ¹(!…¬Þ¡¨\\\\ÆWÂÜ\\t\$¤0Åæ%á”\0aK\$èTšF(YàC@‚ºHÏŽÐHã€nD’dÃ†Wp˜ÉhZ¯'áZC,/Ž¡\$û¦£—J¡FB¨uÜ¬Q:Î¥ÂAö‰:-a#”ì=jb¨§lÕUg;{R°€Uº±EWnÔUa»Vâî•Nj¬§u‹GÉ*¨yÖ¹%ÝÒ@Åï*Ìä«ÕYxê±_ó²§z€]ë)v\"£çRÕåL¯VIvê=`›¾'ª°UÝ) S\r~R˜•™\ni”Å)5S¦åD49~Êb”;)3‡,¦9M3¯HsJkTœÃœ‡(¢†ú—uJ‰][\$uf¨íob£µ¹\n.,îYÜµ9j1'µŒ!ö1\$J¶‘gÚ¤ÕŸÄ†U0­ÓZuah£±·cH¥,ÃYt²ñKbö5—ë5–’/dY¬³AUšÒ…©‹[W>¨_Vÿ\rˆ‘*·õ©j£§-T±… zÖYÊd•c®m‡Ò¹±Ø:¹€üË[Ut-{ªµýl	£i+a)».[º•_:Ú5žähƒò­WÂ§Ém»¥%JI‘´[T«h>š®µ·°•™;ËXÌºdêÂŸS›d‰Væ;\rÆ±!Nˆ“K&—AˆJu4B…ÁdgÎ¢.Vp¢ámb‹…)ÇV!U\0Gä¸¨“`‹Ð­\\…qâŸ7Qöb«VL¥Þ:äÕ‚úƒó¬Z.­Nò˜Ä*–ÔU]Z´læzë…Îöù®ÇR D1IŸåÂ£Ñr:\0<1~;#ÀJbà¦ÊM˜yÝ+™Û”/\"Ï›j<3æ#“–ÌŒêñ¡…:P.}êe÷ïòD\"qÙyJýGŒû·sopŒ¯²þXŒ\rÝ³d–Þ\rxJ%–í‰ÏÆ¼O:%yyãÅ,‡”%{Î3<îXÃ¸ÏÌ÷¯zÂEÎz(\0 €D_÷½Ÿ.2+Ög®bºcÚxìpgÞ¨Áß|9CPŽûî˜48U	Q§/Aq®ÝQ¼(4 7e\$D“‰v:ŒV¡b×ûN4[ùˆiv°Àê2ñ\r•X1¼˜AJ(<PlFÐ\0¾¨€\\zÝ)ÑçšW€(ü4ôÈÃÚï¢ p•™ÓõÊ`µÇ\r³da6”¯üOÖímña´}qÅ`ÂÀ6Pƒ'hàç3§|š’îÃf jÈÿAæƒz‰ø£+ŒDŒUWøDíþÞ5ÅÄ%#é°x“3{«¶L\r-Í™]:jd×P	jüf½q:Z÷\"sadÒ)óGØ3	¤+ðŠr„NKö1Qþ½ç†x=>û\"¤°-á:ÊFÍõœIÙƒ*í@ÔŸÇy»Tí\\Uè¨ãŠY~ÂŠ‰Žäâš‚3Då€Á™ã¨f,s¢8HV¯'Ét9v(:ÖB9ñ\\Zš¡…(‘&‚E8¯ƒÍW\$X\0»\nŒž9«WBÀ’bÁÃ66j9Ð âÊˆ„ƒ?,š¬| ùa¾g1²\nPs \0@%#K„¸€ \r\0Å§\0çˆÀ0ä?ÀÅ¡,ä\0ÔhµÑh€\08\0l\0Ö-ÜZ±jbàÅ¬\0p\0Þ-Ùf`ql¢ä€0\0i-Ü\\ps¢è€7‹e\"-ZðlbßEÑ,ä\0ÈÌ]P ¢ÚE¶‹b\0Ú/,Zðà\rÀ\0000‹[f-@\rÓ¯EÚ‹Ï/„Z8½‘~\"ÚÅÚ‹­ö.^ÒÎQw€ÅÏ‹‚\0Ö/t_È¼ÀâèEð‹Ö\0æ0d]µ€búÅ¤‹|\0ÈÄ\\Ø¼‚¢íE¤\0af0tZÀÑnJô\0l\0Î0L^˜´Qj@ÅáŒJˆ´^¸¹q#F(Œ1º/ì[µ1Š¢ãÆŒIæ.Ü^8»\0[ŒqØÌ[Ã‘l\"åÆ Œ€\0æ0,dè¶À€Æ\rŒÌ„cøµ{cEÁ\0oâ0¬]°\0\rc%ÅÛ‹—ðˆ8½w¢åÆZ‹µ-Ä\\ºñ{ãÅÖ‹Gª/\\bp„…@1Æ\0a²1ù‹ÈÏÑsã!Å¨Œ/î/Ì]8¹‘~c\"ÅÛ‹Åþ2ôcÎ‘m£\"€9Œqš/\\^fQ~cÆ_‹£Î-\$iž\"Ö\0003ŒË¬¤fXºqx#\09Œ—Z.´i¸ÈŒ@FˆŒ‰3tZHÉ \rcK€b\0j’/DjøÉ1¨ââÆIh´aÈñv€Æ©OZ4œZòÌÑ‚#YE¨\0i–.hHÒÑsX/F<‹Ï†.äjøËñ­bèÆÍ\0mV/d\\èØñ‹b÷E³‹£ž3T^(ÝÑˆcKFR‹Õù‚ô]X¶q½¢øÅà—’6Ô]hÓñžc6EÄ‹ó66Üh‘Ÿãn\0005sn/dn¸Ô`\r\"ÑFŒ³Ú-D`ÈÕ‘‹ãN€2‹Y”¤bxÀñ”#\\Åë‹‡V3x·1x€FxŒ¾\0Ê6Œb°q£ƒÇ!Žž8|^‚ÌÑubåÆàÕ-ôrØäq¼ã:ÆéŽ%ö0Œppñ”#Ç‹¢\0Æ6ÔfÕÑÇ¢âÅ¬dÒ0„qH´±¾£\$Ç@‹qò-¼^B4±¦\"ú\08Ž1ª/lnxÏ‘ âêG3:0tjhÒ~@Æ¼Ž¥¦3¤vHÆñ¹bÜG(Že„4gØºqÂã2Æ1ŒÉ-ŒnXËñº\"ãF<Qž1\\j¸¸1®ãÈEÇ‹Çä³4m¨Õñªã[ô‹nÁz7üyhÞ1§#ÆÞŽ/‚3\\xÐqÍKG‚ŒÿÆ6äo˜Ñ1{£°FJ×š6¼lXéqâ£„Æu©Þ9œr(¿1Òã‡Gc\0Åf:„rX½ #ÐÅ½\0iÞ<\\}×ñåbîF½\0sÖ7Üy2ÌÑæ#uFe›\">4iØÅ¿âÔÆçŒé\n<{¸ã‘£âÆ‰ŒJ;¬]ØÄ1Å#ÎÆ0ÙJ;4^èÂD½ãóÇ®‹Ÿ¨³4i¨À(H#ÚÆEŒx–/¤nøû1ðã/Ç¡‹åj6,l˜Û1tã/\0005%ï0„]xü‘¶£GG5!’0¤€¨×ñÚâé–rŒq¢2Ì¨Þ‘ÎãNFPo\"4ô_˜·1×dÇ%‹e ²3¬s8é‘üã†G5Ž“ æ6Ô[Hë“cØHjYš;ô[è¾‘˜bë! Žyò@Ä\\¸½qØ#WHN‡Ž;ÌcÆQèã:Ç-%ª.œkXÆ‘ý£ÚGÍŒÏ†1Df¨ß‘ºcWFl¡!‚0ü€™²c EÜ©Ž;l˜Ñq\"ëF©ß¢7\\\\¨ùñâ£ÔÆO‹qþ.T|\"?‘ñã™ÆE³f9TyYÑ©ãSG1ûÂA\$f9R\n\"ÞÆxŒ¹>Bœ…HÚñß¤\0ÇŒ¶:\$e¹1œ£³F?=º3Tu)\nq¹béÇ~ËÎ<TøÎ±Ðc‰H.‘m~CôwHÊ±¸#/ÈI]~3ä^ˆºÑ„#§Æ>‘Y®4Œ^¸ÎQjcÊÇKŒ1\"Ò8¬|6Ñåc\"ÇB‘µ\"b4ãèæ%œ¢ÔÈG\0e\"’/t‹¨´1r£1Æe!v2„yÀ±õä<Ç †8\\o¨ÊÑ’#tÅÑ\rz@´}HÂ‘èbïÆèy î1Ì\\¨ðëdeGŽÁZ3Œ~ér)ã1È¿‹Û†Bl~H½²:£dF£‘-Î?”k8´qèc(FÍ‹ŠKÞ5|myñ€c1Æ<’*@´jØáò1ãÛÅ¾Œ‹>I´ZèÍQjä•È2ŒÉ\$0¤‹hµQˆäVFTŒ	\$ÆAl~öqÚ£È±Ž\$Ö>\\pÙ\rq‚\$/Èu%ï!®Jq \$ ãtE²‹GN-Tq)ò\"¢ÛHÊŒË¦=ì–XÉ2-£H’«š8\\nˆµRW\$HŒë\"¢C\\_¹\0»d\$Çf‘³\".D„u	'Q£zEíŒÙ&0toˆóqjãúÆ¿Œ³R@d—øÉä£ùÇu##¶LLkÉ*qó\$*GÄ‘iÎ@TŠi‘lãòEª‘ƒÎ5Œ˜¾r\\d–I–‘µ\"/ÌZÉ0’j\$TÅþŒz5Ld3’£ëÉ’oÂ.Tq¹!1{£Æ‹åÖ9œZ¸¾QÕbÓFŒwJ94nˆÒÄÖä{É(“-Ž8·2h¤uÈé“;\$†-Dkøårs£‡Hž™#¡‚ôY7ò\"Ø/E¿’Ó 	\$j¢^ò-£]Ç7Ž[\"N\$’èÂ‘“¤WÈ‘¯Ö/]à\$²+€1Ga/&IDnøÂ’@\$åÆ!‹ç\$Î-Œk!Q¨âùÊ)(N/\$t¸Ý¹äëÆOKzP´tXÜò[\0’GŽ’w(*K\$vˆË1ócÉ'“ÞGÌžIòxd­È\n“AÒ8\\rX·Òa£÷I”iNœI%\$½ã’Æ_‘÷ª6¤fçQþ#–ÈI”5#ŽF´—ØºñÏ#³Eâ’•\"î3\$¢IÜc‡Hˆ‹ÝvR|ùQ€¤cE¸ñ:R„eº±hä¶EÎfK`8þr.#·E³s®0L…˜üRä†F©‹·!\nC\$`Èöñ´\$ôH?’ËnPÜe™!ñš¥@F'”¿–/œ‡¸¶ÄÖäÿÊ”¯%ÂN,hÈÌrF\$öÈþŒÇ3´tøæÒ€¥Åæ’!1<„ÉCQÏ%ÉÃ’¹æJäZØf.Ý6Å†œ·±C‰¥ÊÔœ.²[þ™BÒ¿xëàƒè\0NRn`šÈùY\n’%+N¨IMs:Ã¹Ydƒef¬B[¶°ÝnÆ¹YŠòm¨ÁR®×’ûÉY¯ÚC„XŒëÛj³çU+Vk,¯\0Pëýb@e²¹¥x¬„V¾ºyT¤7ˆuî«[Jï•È±\nD¯§eR¿¬mx&°lÀ\0)Œ}ÚJ¼,\0„IØZÆµ\$k!µ¨ñYb²Áœ°€RÂ‡e/Q¾Àk°5.Áe‘­5•À¨žW‘`ª¥\0)€Yv\"VÂ\0•Ã\n‡%—å–`Yn¯Õ¡aôÔxÃ†Q!,õ`\"‰	_.Ÿå©Æ–tm\$•\"“²J«¤ÖÀ§ŽvÆ%‰M9j‚°	æ–§Ä*³KpÖ”’;\\R ¼ü3(§õŠ^¯:}–Èï|>Âµa-'U%w*‰#>¤@Ì¬e–Jÿ¤;Pw/+¹á5E\rjn¡ÐÃd–ô¢^[ú¯§cÎ°¥uËz\\Ø1mi\"x‚„påÃ;£ÌîˆæˆP)äøªÇ#„±Ø’¡…Ë!Aª;¨ß	4ì³a{`aV{KUàÊ8ã¨Ÿ0''o€2ˆ¨¢ycÌ¸9]Ké@ºÒ—^ðlBˆâOrëÔã,du¤¾8¤?õ‰€Õ%¼gB»ˆî‚ÆYn+ã%c¬e\0Œ°ñà¤±Yr@fì‹(]Ö¼¨\nbizîÖn€SS2£ÁGdBPjŠ¹Ö@€(—È¥¦!à-çv²´eÚ*c\0„ª4Jæç‚’ùÕÙ,“UÈ	dºÉeðj'TˆH]ÔŠÔG!œ)u‹ÕÖ¯Ÿ•Ò¯ùZËB5ûÌ“WŽ‰0\n±á¡ÔR«ÁW…\\¦Q jÄ^rÊ%lÌ˜3,ÒYy×Éf3&Ì•ÜŽÕQ:Ïµ2„mÉR)”T€¾(KRÁ 0ªÊ”@«ìY´¢Y:£Ùe3\r%´¨°Tö%­X”Á¹‡STÔ.J\\ë0ÙhôÄ…ŠD!Ä:—uæêÉU\"¾ÅÁo+7–\"„µ“f'º­R\0°‘ÞJõ2S–2è#nm »ÁIåŠœý\"Xü³²[Ö€Ñì} J¨¯c¼9p0ªüÕQ»(U\0£xDEW‚Œ.LõÁ=<BÔ0+½)ZS V;â\\âµI{5I‘AôÖÃ,dW²uè5Ew\n\$%Ò…ˆ½2i_\$ÈÙ+ìæO,Œ¬‡íX‹´Õ‘Jg&J¡úG’º%\\J“·b.ÄÝ^L‹TòFlŒè–¹]k#f@L·G€ÄT¼Ù—ÒÍHÏÌ\"–q1SÌ°ù‰jVÉ(Î™„ìZVzßÅ†³,§ÊèG.1Fû±gNÊ;×1ÃŠV¬¦5EÍò5`ò\0Ctè=F\ná¹›Î±•K‡þ™Ö\0­ÛŠ±%¨ËD]Q\$\r\0‡3J\\,Í™š³<T4*£™Á.ÒYK²D«QƒéLïS%,ŠgÔÇåª§Ö<Ëë™u0–ôÍUÄ‰Ö*x(©åNÂ’Yv!þ¥yÍ	wÅ4fdª¥rG•‰M \$äê‰^;ºéîÝæˆ)<Pã]DÒ%%Ó;ÔjÊåšI0æaÓu^Jp—[)¦v©3RhRúEöÀ\næ–L_š#5|Ü¾Õm3Pñ*¨\\Y51X’’	i³N—Èñ\$\"°ºaü­õh*KUÝÌïV8¨åuò±%&„ræ¯Ëš ²5oŒÕçg³;ÝrMl[Æ¨ögœ³ùª’·UÍq™ê¹šh|ÔeO2·f MlW2AP„×¹˜’ÍÀÍv~eD¬eñ3UÓ«l‡E62iüÎõìÓUbÌï˜¬«õUŒ¬©¨îøýªVðêiI!\$i¨Ê­&Z:½–xm!Å†“.ÖOÍfwÒ¯!”ÌÓkÝ¤Íƒ™6b\"«I™J]]:T™6ÒVrú¹}’ÜÇ«]™®±‘U¢Ž	ys7fÔMÅ™ÿ3ˆŒÜÎYœó:T_MÍw%3ÆnÏ¥\nÎæz*™í3âhƒ·	»`U–²Lÿš‡,¥Û„Ð5¨óvfƒ»Ã›Ù42_Q‰¼hÝÇÍuD§\no£¹)¤ÄœÕ«M9¿7foÛ¼©¤rÖÝÇÎWB~iTÝeyQTâN\nšd¦pr§#›óM§;’˜…4æpª¼„têÿ–(;š›³5	|¬àÇ‚Š­',AV7Ü”ÔåUAö&ìÍRœP¯\"äÕy‡Ò·•‰) [ŠnÌÕñ-3V•Ë,?œs6ºpŠù†3ŽfµÎAšÛ9k|ÝÉ®S†f¬*@œ•5Þg¼¾É¿2·Í}œŒ®þUüÝ™‘ðùæHÎF›l%®pÂ«Ie³be—MÙSO\rŽ[¼æi²3fÉÎLVá®rÙu®Š¾¥ÛNA›:î%r„Úy3Q_Ì¸›W.ÑÕÈ^Sl@&ÌÁ5ÖYlÂÌ1åæÎ}VxêžgÊ…§^SnÕÌÍQ!:5×ZÞiZCÔˆ:¿›•3qgé%DáõÝª{U¡3’tZ¹`ûÓu%w:ÉZQ:QìÏÇW fî‡í›¿9Jplê)Ö3xÔvÌþK7žb#«ù½«çX+Jš(¢Âh´ìP*Ó´«Î›þ¢!×”ìÅSLçh*'¤¨\npBù™ÚªgNÊ§8BuÒªéÂŽ¯çÎŒ½8niêˆIÍs¸USÍIš‡;vvÚ³UõsR•7Nu×8©H|íéÅÓ·§ÌŽœ«8òq´ÕÙÞ+'ÑßÍ`œx¢9Rˆ	Õ®ºçMaR8úxä)¸'!Ïœ;±U¬×YÖ“’ÝsNIg:ÕKTëy¯3®gŽÍYìëÊkäãÉÜ³n'LO(œ¿3šw4ñ4î»¦ÇÏœÚêþl¬ñÎJ½–ªw½9Ý\\ìç•óóhf(¢_~ìòà}9Nö¦Õ\0–´åb\"¢Yé¤ƒTh,Úž¤@ú±D¡û€\$€Iž·;ŽeüèUÊn¨³ž·,¹OªÆ	Xÿg´-ÀžÉ+>ti'G‚öŽlª%\0­8âVBËU1«ye\0KTÆ4ûÁÈm’ºV2)\r]I/\rFù…ÔXˆ×Àß¨ña·­GŠÂ¹ò*ˆ§»žÿ>ERì÷ðî®¥ž‡ÑZ›-)I\$®¹íç:¦aË\0¾FybaÙg«w§­(ß_@§v}öiõÊ³î€S^Ë25DÔ³Ð	ÈôURO±ŸJHÖ\\ØisðfÆËKšN±€qi÷Sg×OÂŸ\n²F~|«µÏ*@gR€_Q<9sÜ¬3i+Ø—².Cw²²ê|‚øyË6aìOÜY9¶Œ¶É–\nëÔ½-([®±†_ˆ}íSû]c¤S=Â¤ÎÙþÎÍÔYÎàU-> <ú©µ\n<ÖsOôQ4F¦^}\0007uäk(/‹ŸÛ/5{Lÿ9µ\0§¬Ð &³Š[<ÏõŸsÛ\0&Íè#…@hÌéª3©V}ÐH¢Š*Üw+]'DÐ& @§Ö])µè;TGe3\\Îên®ÑßËd\$:¦uN4Åyktê-dR!7–­Ée4(P!•Ÿ-þ9À4ç_PMGbÄ±w…«ØÉ6O§S¦F‚âí)§Šyh0+€ž²§qT|·Š+uÔÿÎ+ A¬?òÞ	öTè3.q 41T´¸e›€\n:P ø¯–{Tî\n³ëh?«šTïAùS£­*«åÒ+åu¥>ú\\ê¾ZéíÊîYì·¢wEJö%·’s—L±¾dªšyÀ+\rCèœß¡'Añl,Òyå3þç²ËÍ—`º	_*ÑPû ThKDV²·–~5	à0´+á¼,š-?­]œºò3ëÖKå—`¯^†¸¤I42(]ªwž.æ†rÄÊËê]¬\nYÆ¨B†£­Ð	³í–}Ð‹R ¾ÉgØ}:H§ðJÄWP²ê„\"Þµ—ðôV\\¬<——? >½å—áÿ§Ü¬Ý†¿=¦…:Ÿ\n0×è\\+ñS–´æfÝUŒ³í‰U,…WCÖˆè•On¨òÎ…¢§.†e9|R÷I'©[×/º²ÄÙü2ù›«QžÓBn:ÆIõ\nö§g¼9Æ\rü,ÓR6³ýçÒQ\$XÝ+¸>–©±`\nù)/_8QiÔùµê—=‡êv?5v\0 \n¨çÉLG¥Dmˆw\\ëFÖŒ‡Ñ¢¯ÁdêŸµ}s‰\"‘ÃYv¤|â™J*´9h­¡Ñ@XEUÑ*Þ(oQ]\$Bžˆ,ûéÜƒ•KTœv¤AptCÉƒ\n×C,/˜<¡­Ú™EW‹-VïP¡¢=Wÿ*%Kê—-Q`9	(Êú59Ó€èm)ËX¸¨@ç2ø ýT@ˆÛ\nS–¯‘bd×EÎ´a€+€DXîá|UÚ	‹	’¡F® 2ú%5\nj•m«€WÙ+xêKŒæVÌ3#„¶CTÃek¤™–&Î,£l¬jbd7)Ó“\"\n+ìPüºb’èIŠ@è3Ñ•ÜµjUÒÌEsÞÔ)D¢fë’ƒõŠû•ÇPZ3AÎŒÕ\nwThð—²ªÛ˜Å4Zäª<Êuß©ßdqâËŠu(÷ž“bKG±à¥éÀnÓTï®ˆ]z¨f%#3IËfS¨®&}µ@D†@++ù¤Aíhª¿\nªï€U—Þ¥|B¡;”…UmÑÙU…E•N¥!ôx2±1Ò\0§GmvH~õÁHèTê)öW®³YNý\"åk5©ÑvT#=µÚ¥Ê<\n}‘#R3YƒHÅRÍIÍ³Ü¦;ÌÑRl£1léuB%TQJî™*ºêˆÙ'ºEë0i¬dw,¥zÊÍ¥:\$†¦;Í? üîj‘¿)§ô)ÔÊ\$32J}Å&‡[³\$¨õÌ¤;DnýE×´À+0ÛaZ{¨èC èû€(¤ê:“¸ ÚO@hø²D£æ\0¡‰`PTou“³ÄïF®\rQv‚û¨˜o½Ü¡\$Sîö+˜Ò#7À¤Izr…pk DW”ˆFsÍ9™ Qê  Ð°1€gÀÅ#•\0\\Là\$Ø 3€g©XŽyôy œ-3h›ÀþÃ!†nXèô]+±—	É€c\0È\0¼bØÅ\0\r‰ü‡-{ž\0ºQ(ðQÔ\$s€0…ºém(°[RuòVÆ÷ÒØ>Æ¼+àJ[©6à‘ÒàJ\0Ö—ú\\´¶ã,Òé‚Kš3ý.ê]a_\0RòJ Æ—`š^Ô¶ClRÛIKî–ù\n \$®nÅÒä¥ïKj–©\n€šÁ©~/¥ªmn˜].ª`ô¿ijÒâ¦#K¾˜f:`\0…éŒ€6¦7Kâ–¨zcôÂ\0’Òõ¦/K®–­/ªdôÄé‡FE\0aLŽ˜¤dZ`ƒJé†S‘ÏÊ™…2ØÍ4Î@/Æ(Œ‹Lò™õ0ª`´Ä©†€_ŽLþ™]4ZhôÐ©šSD¦M˜…4:cÑé‹SR¥×M—E4šiò€éžSG¦EMj˜å4zdÔÕ©–SFKLª›%4ªeÔÏ%\$ÓlKM2–õ1ÈÚ”Ôi¦Ó©MV›­.¸Ú”Öi´Ó©Lz›/ˆ÷ôÛ£Ó„¦ÑMæ›,`Š_ôàimSŠ¦gMÆœ€jg‘òéÇÓ5¦9.›…9j_òéºS¥µ.›Å9ê_±òé¾Sˆ¦‹.œ7Úrò)ÉÓ%§[2m8ºuTæé™S±§3M:]3ºq”èänÓ±§KNˆ1|^ÒktÏ\"ÒÓH§gKjž-;zcñiÎÓš§–\r<ê_²-iÊÓ¸¥ñ\"ÖžU.¹´óiëRÚ‘kOFží=:\\ôÏ\$ZÓ©§MLE­5úxôø©ÂÓ»_\"Öœ=<\0ñtéÙSç¦9OÒž­1Š~”öi²Óô§¹Oêí>ê~qœ)òF¸¨’ =6:~ÔõãJÔ‘ÏP:ŸÍ=¨åTÿ)¢Æ«§ÿPJ8õ@êwôô©÷Ç*§ÍOÊ5]>ªt÷£•T\n§å!\" 6Y	)€ÈH¨/Pªž…3É	éð†/‘P~ àù	ªÓ®¨!\"ŸC’ÌÔýj¡ ¨eNJ¡üˆêˆñÔ*%Ô4¦1Q¡ÅCZ‡Q‘jTBQ.¢\rE)\0004Ëê\$€2¨SM+å<j„t¿j0Ô,¦9Q†¡}F\0\$±s©žTa¨KÎ£]Ecj*€'K»M¾—MGx½ÕRÇT1¦#Qê¡¥GªŠ5ª:Ôz¨Lš¡4u6z•\"j\"TˆKuNÖ£ýGÚg\$jFSÜ¨ïQ2¤¥Høîµ\"êMTƒ©%R¤•HzŽÕ\$ª,Ôw¨Re.\$rªzµ)©ÛÔ¦©-Qö ÍJ„¹‘Êª@Ô°©=R&/IÊ•1†*]T³‹À7¼˜¾QÒåD&Ó©qN¦_(´q²c[TwŒQRôå´œJš\0nâ÷T­¨û.¦˜956cÔÜŒÕSz¥H˜Á•7ªRÔ}ŽSr8¥NŠšÕ\"bÖTè§ÁQÞ5MNŠ–õ#ãçÔè©ESÂ§-H˜Á7\"ÜTü©_Sê§}GØÌ•?*yÔ©‹‡Sò§½P*Ÿ5#âöÔÜÏT:§]PÊŸõC*€Ô‰‹T:¨-K8Æ5Cª„ÕªR¦--MÈ¾•HªˆÕ ª'T‚¨­HøËõHªŒÔÑ‹×TŠ¨íRª£õ,âéÔÜ‹GTÚ©-SJ¤õM*”Ô©‹UTÚ©mMH¸õMª˜Õ>ªgSD³5MÈÂ•RªœÕHªwU\"©íK8ÕÕRª ÔÚŒ¡U*ª-U*¨ànÂ¾TÙIR­,t¢Z«ÕêY¶IUF«51ª¬µW)vÕk‹_KÆ«pJ«5Zj­Å¯©R4r\n¬^jIÓCKº„‚ª}UÊ“_ª°Ô›ªãO¬=N·R*¯F-ª½Rž¬%Wš‹Õcê¦Õ\\ŽaV>«EYj–µdªªÔÃ«UÎ¬µWXÍ5*ÈÕ‹’¹Uy‚õZŠ°1kã™Õ¨«7Vš¬R\\HÍ5h*ÖU¢©ÏUÆ§M[Š²±kêvÕ¸«3Vò­}[(ä5WªzÕ¸«iB­Oº®1¯ê¯Tý«—V®;­[øîµpRæGu«;T@0>\0‚ê/I³ªÿW`í]¦ô\0ªîÆ8«¿PŠ¯]ÈÍ1m*ïÕÇyUz¨mW¡õ|ªÝ“[«¡Ö¯…]J¬ÑˆêøU±««ö¯…Z*¤5\\j‘Ö«ëZªô`ZÁ5~ª®Eì¬Wú«4ZšÁ5h£QÕ^‹cXZ®•Sú®1o«Vª¹U&«TºÄ5}cU^›Xš°dm*³±’kUu¥«SfG=[¹õjäsÕ¿‘ÏX¦Kc\n®iRâHç«i#ž±uWt»µª½¥º«»XÂÕcÄ¹•«U†¬”rÚ¢õUZ‹Õ‡ƒNE¢¬‘Xº¬…4ÚÈudê·Eä¬eV^²íKÉànâòV8‹sXÂ¥ÍfÇõ/ÂhJ³-J]Ó‚…™ÓÎÁÕzO›±<Eh‰\$å‹“·¡ó\0Kœë<bw„ñ…>·”øNž\")]b£	â+zê.cS.¢iFç	ã£µQNQ«éV*ªéÛÎúÞO[X¤nxŠ¤P	k­§oNø£}<aOò§Iß“Áh·ºšT;òrñ‰‰¤ƒVD6Qß;zŠ]j×~'’:ë–[Ivôó7^Ê‘§ÖÁžjëºw[«ùæîºçœÊÅ†¥:u ÅDs#¦¿Î\\wµ<n|*á‰hëmÎKv;YÒˆ±Ú3á]Œ«^#—Zªj¥gy³jÄ§Y,”%;3¾³ÊÚù×.ÈW\"‘Ã\$Ù3>gÚœºÏÓÏ¦ªVTóZj¥hYÝjžkD*!šh&XzËiª•¥+GV—­\"¥æ¸Z:Ò¤§+‡NoG¥Zjj¥iÉ]ÊžkOÐ_­Ö¬ÔmjIª•¨§t¯–#½[âj\rnŠãê©×Ðn™ßZ¥_,Õé†ógÎÄš©:¹¼Å9‰Áÿ«[L2®W=TÔ×0®ãf¶\0P®U6\ns%7isYæ?£¿uá3¾’½nb5¡«Ÿ»šX|G~l•&×k¤¥·M§ †¯ú¶ŒÏy¡S–É)Î]œÜ­r·¶Ù¸µ¸æìÖê›Å?Õ}u'n0W-Î¹®æb·´ÇªìõŸk?»vQý7…Ü}p\nìõÀ’ÍÙ®Z*»9)Êá5Þ•ZW­-ZB¸²Œ:ìõã«ŠW\0WZfp•GpõîÍÙ®:Fpú¤ŠäUÙëSN/™Ï\\©Ü%s9¬S{§ ×8®ÏZÍasÊÛ“’+¢N^®“9™MÕ{…P5Óç ×Q®ÔîJº¢«y§õÕè;œÚîz¸ƒÂÕYÚV Ä3—:ïœDÅIŠÃ+ç‡ý¯£19M;º¥Œ’ô¨“V´®š\rQ{êÉÕ®•¶Å+£ƒFCLÄ¹ŠN¥–©Ôˆ\\ùÞ)\$iŒŽÛN'\0¦°PŠÂšõÊÇ]XÌ^s1òf&Š\"'<OøóšÌ¡ËL\0¹\"‡@Ö”¥%ä6úÂUAõ1ýi(zÌèÝ€\rÒÕ‚ä±ÈbZÀ”+IQOï3€ºË\r=*Ä‰ ‰)ñ¨!Áž Ð`ª¼h°ˆ,Ð«mGPCËA Ù²íƒA„Œ(ZÅ°%ƒtì,h/Á‰ˆi–Èk¬«¡XEJ6ð±„IDèÈ¬\"›\nïaU- ›«\nvŽy°_€ÄÂÂ›Ú«¯k	a½B<ÇVÂƒÛD»/P»ôaîÁ)9Lã¶(Z‚°8êvvÃ¹Øk	§oÐZXkäÑå§|´&°.Âæ±C¹’Øá°`€1€]7&Ä™+™H¤CBcX“B7xXó|1“€0¦ãaš6š°ubpJLÇ…–(·š÷mbl8I¶*Rö—@tk0€—¡¯ÅxXÛÁÓ;ÁÅ al]4s°t¿íÅªð0§c‡'´ælß`8MŒ8‘ÀÃ€D4w`p?@706gÌˆ~K±\r‚Û “P´…Ùbh€\"&¯\nìq‘PDÈÐÎó\$Ð(Í0QP<÷°àÀã¬Q!X´…xúÔ5€ˆR·`w/2°2#ŠÀ¸Ž `¬»‘1†/ˆÜ\r¡Ö:Â²–±¢£B7öV7ZŒ›gMYúH3È „ÙbÎ	ZÁÓJÅöGâwÙgl^Æ-‘R-!Íl“7Ì²Lõ†Æ°<1 íQC/Õ²h¼à)ÏWž6C	÷*dˆþ6]VK!mì…ØÜã€05G\$–R˜µ4¯±=Cw&[æ«YP²›dÉš³')VK,¨5eÈ\rÞÊè†K+ï1„X)bÛe)ÄâuF2A#EÑ&g~‘e¡y’fp5¨lYl²Ôœ5õƒö¿Ö\nÂŠÙm}`‚(¬M Pl9Yÿfø±ýÖ]€Vl-4ŽÃ©¦«ÂÁ>`À•/û³fPE™i‹\0k™vÆ\0ßfhS0±&ÍÂ¦lÍ¼¢#fuåÌû5	i%ÿ:Fd€ö9Ž™Ø€G<ä	{ö}ìÂs[7\0á¬Îž3íft:+.È”–p >ØÕ±£@!Pas6q,À³—1bÇ¬Å‹ãZK°ê±Ü-ú“ar`•?RxXÁé‘¡ÏVïú˜#Ä¤ÔzÂ; ÀD€•¾H²Á1¥’6D`žþYê`÷RÅPÖ‹>-Æ!\$Ùù³ì×~Ï€ÐÅà`>Ùï³õhÔ0ô1†À¬–&\0Ãh—ëûI–wlûZ„\$“\\\r¡8¶~,\nºo_áÀB2D´–ƒa1ê³àÇ©=¢v<ÏkF´p``”kBF¶6 ÄÖ²—hÆÉT TÖŽ	‡@?drÑå‰€JÀH@1°G´dnÁÒw‡Æ%äÚJGšÒ0bðTf]m(Øk´qg\\í½ó¸–¬ë°ê ÈÑˆ3vk'ý^d´¨AXÿ™~ÇW™VsÂ*¼Ê±æd´ûM À¬@?²ÄÓ}§6\\–m9<Î±i”Ý§›ˆÔ¬h½^s}æ-¦[Kœs±qãbÎÓ-“öOORm8\$ÞywÄì##°Œ@â·\0ôÒØ¤ 5F7ö¨ƒ X\nÓÀ|JË/-S™W!fÇ† 0¶,w½¨D4Ù¡RU¥T´ž’îÕðZXÇ=í`‰W\$@âÔ¥(‹XG§‹ÒŠµ—a>Ö*ûY¶²ˆ\n³ü\nŒìš!«[mjœµŠ0,mu¬W@ FXúÚÎòðü=­ (¦ý­b¿ý<!\n\"”ª83Ã'¦‚(R™Ý\n>”ù@¨W¦r!L£HÅkÌ\rˆE\nWÆÞ\r¢‚'FHœ\$£‹ääÀm„È=ÔÛ¥{LY—…&ÑÜ£_\0ŽÆüÝ#¢ä”€[„9\0¤\"ÔÒ@8ÄiKª¹ö0Ùl‰ÑÐp\ngî‚Û'qbF–Øyá«cl@9Û(#JU«Ý²ƒ{io­‘¥.{ÔÍ³4ÞVÍŠVnFÉxðÑüzÎ QàÞž\$kSa~Ê¨0s@£À«%…y@•À5HŽ†NÎÍ¦´@†x’#	Ü« /\\¥Ö?<hÚ‚ù…¼ITŒ :3Ã\n%—¸");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$le=substr($u,-1);return
str_replace($le.$le,$le,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($jg,$Wc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($jg)){foreach($X
as$ae=>$W){unset($jg[$y][$ae]);if(is_array($W)){$jg[$y][stripslashes($ae)]=$W;$jg[]=&$jg[$y][stripslashes($ae)];}else$jg[$y][stripslashes($ae)]=($Wc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Oa=false){static$hi=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Oa?array_flip($hi):$hi));}function
min_version($Ni,$ye="",$h=null){global$g;if(!$h)$h=$g;$dh=$h->server_info;if($ye&&preg_match('~([\d.]+)-MariaDB~',$dh,$B)){$dh=$B[1];$Ni=$ye;}return(version_compare($dh,$Ni)>=0);}function
charset($g){return(min_version("5.5.3",0,$g)?"utf8mb4":"utf8");}function
script($mh,$gi="\n"){return"<script".nonce().">$mh</script>$gi";}function
script_src($Bi){return"<script src='".h($Bi)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$fb,$he="",$mf="",$kb="",$ie=""){$I="<input type='checkbox' name='$C' value='".h($Y)."'".($fb?" checked":"").($ie?" aria-labelledby='$ie'":"").">".($mf?script("qsl('input').onclick = function () { $mf };",""):"");return($he!=""||$kb?"<label".($kb?" class='$kb'":"").">$I".h($he)."</label>":$I);}function
optionlist($sf,$Yg=null,$Fi=false){$I="";foreach($sf
as$ae=>$W){$tf=array($ae=>$W);if(is_array($W)){$I.='<optgroup label="'.h($ae).'">';$tf=$W;}foreach($tf
as$y=>$X)$I.='<option'.($Fi||is_string($y)?' value="'.h($y).'"':'').(($Fi||is_string($y)?(string)$y:$X)===$Yg?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($C,$sf,$Y="",$lf=true,$ie=""){if($lf)return"<select name='".h($C)."'".($ie?" aria-labelledby='$ie'":"").">".optionlist($sf,$Y)."</select>".(is_string($lf)?script("qsl('select').onchange = function () { $lf };",""):"");$I="";foreach($sf
as$y=>$X)$I.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$I;}function
select_input($Ka,$sf,$Y="",$lf="",$Vf=""){$Lh=($sf?"select":"input");return"<$Lh$Ka".($sf?"><option value=''>$Vf".optionlist($sf,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Vf'>").($lf?script("qsl('$Lh').onchange = $lf;",""):"");}function
confirm($He="",$Zg="qsl('input')"){return
script("$Zg.onclick = function () { return confirm('".($He?js_escape($He):lang(0))."'); };","");}function
print_fieldset($t,$qe,$Qi=false){echo"<fieldset><legend>","<a href='#fieldset-$t'>$qe</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$t');",""),"</legend>","<div id='fieldset-$t'".($Qi?"":" class='hidden'").">\n";}function
bold($Wa,$kb=""){return($Wa?" class='active $kb'":($kb?" class='$kb'":""));}function
odd($I=' class="odd"'){static$s=0;if(!$I)$s=-1;return($s++%2?$I:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Xc=true;if($Xc)echo"{";if($y!=""){echo($Xc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Xc=false;}else{echo"\n}\n";$Xc=true;}}function
ini_bool($Md){$X=ini_get($Md);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
set_password($Mi,$N,$V,$F){$_SESSION["pwds"][$Mi][$N][$V]=($_COOKIE["adminer_key"]&&is_string($F)?array(encrypt_string($F,$_COOKIE["adminer_key"])):$F);}function
get_password(){$I=get_session("pwds");if(is_array($I))$I=($_COOKIE["adminer_key"]?decrypt_string($I[0],$_COOKIE["adminer_key"]):false);return$I;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($G,$d=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$d];}return$I;}function
get_key_vals($G,$h=null,$Uh=0,$gh=true){global$g;if(!is_object($h))$h=$g;$I=array();$h->timeout=$Uh;$H=$h->query($G);$h->timeout=0;if(is_object($H)){while($J=$H->fetch_row()){if($gh)$I[$J[0]]=$J[1];else$I[]=$J[0];}}return$I;}function
get_rows($G,$h=null,$n="<p class='error'>"){global$g;$yb=(is_object($h)?$h:$g);$I=array();$H=$yb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$I;}function
unique_array($J,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$I=array();foreach($v["columns"]as$y){if(!isset($J[$y]))continue
2;$I[$y]=$J[$y];}return$I;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$I=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$I[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$I[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$I[]=escape_key($y)." IS NULL";return
implode(" AND ",$I);}function
where_check($X,$p=array()){parse_str($X,$db);remove_slashes(array(&$db));return
where($db,$p);}function
where_link($s,$d,$Y,$of="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$of:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$L=array()){$I="";foreach($e
as$y=>$X){if($L&&!in_array(idf_escape($y),$L))continue;$Ha=convert_field($p[$y]);if($Ha)$I.=", $Ha AS ".idf_escape($y);}return$I;}function
cookie($C,$Y,$te=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($te?"; expires=".gmdate("D, d M Y H:i:s",time()+$te)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Mi,$N,$V,$m=null){global$fc;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($fc))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Mi!="server"||$N!=""?urlencode($Mi)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$He=null){if($He!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$He;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($G,$A,$He,$vg=true,$Dc=true,$Oc=false,$Th=""){global$g,$n,$b;if($Dc){$th=microtime(true);$Oc=!$g->query($G);$Th=format_time($th);}$ph="";if($G)$ph=$b->messageQuery($G,$Th,$Oc);if($Oc){$n=error().$ph.script("messagesPrint();");return
false;}if($vg)redirect($A,$He.$ph);return
true;}function
queries($G){global$g;static$og=array();static$th;if(!$th)$th=microtime(true);if($G===null)return
array(implode("\n",$og),format_time($th));$og[]=(preg_match('~;$~',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G).";";return$g->query($G);}function
apply_queries($G,$T,$_c='table'){foreach($T
as$R){if(!queries("$G ".$_c($R)))return
false;}return
true;}function
queries_redirect($A,$He,$vg){list($og,$Th)=queries(null);return
query_redirect($og,$A,$He,$vg,false,!$vg,$Th);}function
format_time($th){return
lang(1,max(0,microtime(true)-$th));}function
remove_from_uri($Gf=""){return
substr(preg_replace("~(?<=[?&])($Gf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Jb){return" ".($E==$Jb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Rb=false){$Uc=$_FILES[$y];if(!$Uc)return
null;foreach($Uc
as$y=>$X)$Uc[$y]=(array)$X;$I='';foreach($Uc["error"]as$y=>$n){if($n)return$n;$C=$Uc["name"][$y];$bi=$Uc["tmp_name"][$y];$_b=file_get_contents($Rb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$bi":$bi);if($Rb){$th=substr($_b,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$th,$Ag))$_b=iconv("utf-16","utf-8",$_b);elseif($th=="\xEF\xBB\xBF")$_b=substr($_b,3);$I.=$_b."\n\n";}else$I.=$_b;}return$I;}function
upload_error($n){$Ee=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($Ee?" ".lang(3,$Ee):""):lang(4));}function
repeat_pattern($Tf,$re){return
str_repeat("$Tf{0,65535}",$re/65535)."$Tf{0,".($re%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$re=80,$_h=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$re).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$re).")($)?)",$Q,$B);return
h($B[1]).$_h.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($jg,$Cd=array()){while(list($y,$X)=each($jg)){if(!in_array($y,$Cd)){if(is_array($X)){foreach($X
as$ae=>$W)$jg[$y."[$ae]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Pc=false){$I=table_status($R,$Pc);return($I?$I:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$I=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$I[$X][]=$q;}return$I;}function
enum_input($U,$Ka,$o,$Y,$uc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$_e);$I=($uc!==null?"<label><input type='$U'$Ka value='$uc'".((is_array($Y)?in_array($uc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($_e[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$I.=" <label><input type='$U'$Ka value='".($s+1)."'".($fb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$I;}function
input($o,$Y,$r){global$si,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Fa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Fa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Fa);$r="json";}$Eg=($x=="mssql"&&$o["auto_increment"]);if($Eg&&!$_POST["save"])$r=null;$kd=(isset($_GET["select"])||$Eg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ka=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($kd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ka,$Y);else{$td=(in_array($r,$kd)||isset($kd[$r]));echo(count($kd)>1?"<select name='function[$C]'>".optionlist($kd,$r===null||$td?$r:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):nbsp(reset($kd))).'<td>';$Od=$b->editInput($_GET["edit"],$o,$Ka,$Y);if($Od!="")echo$Od;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ka value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ka value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$_e);foreach($_e[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($fb?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'>";elseif(($Rh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Rh&&$x!="sqlite")$Ka.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$Ka.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$Ka>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ka cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$Ge=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($si[$o["type"]]?$si[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&min_version(5.6)&&preg_match('~time~',$o["type"]))$Ge+=7;echo"<input".((!$td||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($Ge?" data-maxlength='$Ge'":"").(preg_match('~char|binary~',$o["type"])&&$Ge>20?" size='40'":"")."$Ka>";}echo$b->editHint($_GET["edit"],$o,$Y);$Xc=0;foreach($kd
as$y=>$X){if($y===""||!$X)break;$Xc++;}if($Xc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Xc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Uc=get_file("fields-$u");if(!is_string($Uc))return
false;return
q($Uc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$ec;$I=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$I[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$ec->primary),);}return$I;}function
search_tables(){global$b,$g;$_GET["where"][0]["val"]=$_POST["query"];$gd=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$H||$H->fetch_row()){if(!$gd){echo"<ul>\n";$gd=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($gd?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($Ad,$Qe=false){global$b;$I=$b->dumpHeaders($Ad,$Qe);$Ef=$_POST["output"];if($Ef!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Ad).".$I".($Ef!="file"&&!preg_match('~[^0-9a-z]~',$Ef)?".$Ef":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$J[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$I=ini_get("upload_tmp_dir");if(!$I){if(function_exists('sys_get_temp_dir'))$I=sys_get_temp_dir();else{$Vc=@tempnam("","");if(!$Vc)return
false;$I=dirname($Vc);unlink($Vc);}}return$I;}function
file_open_lock($Vc){$id=@fopen($Vc,"r+");if(!$id){$id=@fopen($Vc,"w");if(!$id)return;chmod($Vc,0660);}flock($id,LOCK_EX);return$id;}function
file_write_unlock($id,$Lb){rewind($id);fwrite($id,$Lb);ftruncate($id,strlen($Lb));flock($id,LOCK_UN);fclose($id);}function
password_file($i){$Vc=get_temp_dir()."/adminer.key";$I=@file_get_contents($Vc);if($I||!$i)return$I;$id=@fopen($Vc,"w");if($id){chmod($Vc,0660);$I=rand_string();fwrite($id,$I);fclose($id);}return$I;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Sh){global$b;if(is_array($X)){$I="";foreach($X
as$ae=>$W)$I.="<tr>".($X!=array_values($X)?"<th>".h($ae):"")."<td>".select_value($W,$_,$o,$Sh);return"<table cellspacing='0'>$I</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if(is_url($X))$_=$X;}$I=$b->editVal($X,$o);if($I!==null){if($I==="")$I="&nbsp;";elseif(!is_utf8($I))$I="\0";elseif($Sh!=""&&is_shortable($o))$I=shorten_utf8($I,max(0,+$Sh));else$I=h($I);}return$b->selectVal($I,$_,$o,$X);}function
is_mail($rc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$dc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Tf="$Ia+(\\.$Ia+)*@($dc?\\.)+$dc";return
is_string($rc)&&preg_match("(^$Tf(,\\s*$Tf)*\$)i",$rc);}function
is_url($Q){$dc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^(https?)://($dc?\\.)+$dc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q);}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Ud,$nd){global$x;$G=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ud&&($x=="sql"||count($nd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$nd).")$G":"SELECT COUNT(*)".($Ud?" FROM (SELECT 1$G GROUP BY ".implode(", ",$nd).") x":$G));}function
slow_query($G){global$b,$di;$m=$b->database();$Uh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$fe=$h->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$fe,'&token=',$di,'\');
}, ',1000*$Uh,');
</script>
';}else$h=null;ob_flush();flush();$I=@get_key_vals($G,$h,$Uh,false);if($h){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$I;}function
get_token(){$rg=rand(1,1e6);return($rg^$_SESSION["token"]).":$rg";}function
verify_token(){list($di,$rg)=explode(":",$_POST["token"]);return($rg^$_SESSION["token"])==$di;}function
lzw_decompress($Sa){$Zb=256;$Ta=8;$mb=array();$Gg=0;$Hg=0;for($s=0;$s<strlen($Sa);$s++){$Gg=($Gg<<8)+ord($Sa[$s]);$Hg+=8;if($Hg>=$Ta){$Hg-=$Ta;$mb[]=$Gg>>$Hg;$Gg&=(1<<$Hg)-1;$Zb++;if($Zb>>$Ta)$Ta++;}}$Yb=range("\0","\xFF");$I="";foreach($mb
as$s=>$lb){$qc=$Yb[$lb];if(!isset($qc))$qc=$bj.$bj[0];$I.=$qc;if($s)$Yb[]=$bj.$qc[0];$bj=$qc;}return$I;}function
on_help($tb,$hh=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $tb, $hh) }, onmouseout: helpMouseout});","");}function
edit_form($a,$p,$J,$_i){global$b,$x,$di,$n;$Eh=$b->tableName(table_status1($a,true));page_header(($_i?lang(10):lang(11)),$n,array("select"=>array($a,$Eh)),$Eh);if($J===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Sb=$_GET["set"][bracket_escape($C)];if($Sb===null){$Sb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Sb,$Ag))$Sb=$Ag[1];}$Y=($J!==null?($J[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($J[$C])?array_sum($J[$C]):+$J[$C]):$J[$C]):(!$_i&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Sb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($_i&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($_i?lang(15):lang(16))."' title='Ctrl+Shift+Enter'>\n",($_i?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".lang(17)."...', this); };"):"");}}echo($_i?"<input type='submit' name='delete' value='".lang(18)."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$di,'">
</form>
';}global$b,$g,$fc,$nc,$xc,$n,$kd,$qd,$ba,$Nd,$x,$ca,$ke,$kf,$Uf,$xh,$ud,$di,$ji,$si,$zi,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";if($_SERVER["HTTP_X_FORWARDED_PREFIX"])$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$Hf=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Hf[]=true;call_user_func_array('session_set_cookie_params',$Hf);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Wc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",16);$ke=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','he'=>'×¢×‘×¨×™×ª','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','ms'=>'Bahasa Melayu','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$bf=null){if(is_string($u)){$Xf=array_search($u,get_translations("en"));if($Xf!==false)$u=$Xf;}global$ca,$ji;$ii=($ji[$u]?$ji[$u]:$u);if(is_array($ii)){$Xf=($bf==1?0:($ca=='cs'||$ca=='sk'?($bf&&$bf<5?1:2):($ca=='fr'?(!$bf?0:1):($ca=='pl'?($bf%10>1&&$bf%10<5&&$bf/10%10!=1?1:2):($ca=='sl'?($bf%100==1?0:($bf%100==2?1:($bf%100==3||$bf%100==4?2:3))):($ca=='lt'?($bf%10==1&&$bf%100!=11?0:($bf%10>1&&$bf/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($bf%10==1&&$bf%100!=11?0:($bf%10>1&&$bf%10<5&&$bf/10%10!=1?1:2)):1)))))));$ii=$ii[$Xf];}$Fa=func_get_args();array_shift($Fa);$fd=str_replace("%d","%s",$ii);if($fd!=$ii)$Fa[0]=format_number($bf);return
vsprintf($fd,$Fa);}function
switch_lang(){global$ca,$ke;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$ke,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($ke[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($ke[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$va=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$_e,PREG_SET_ORDER);foreach($_e
as$B)$va[$B[1]]=(isset($B[3])?$B[3]:1);arsort($va);foreach($va
as$y=>$ng){if(isset($ke[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($va[$y])&&isset($ke[$y])){$ca=$y;break;}}}$ji=$_SESSION["translations"];if($_SESSION["translations_version"]!=194471844){$ji=array();$_SESSION["translations_version"]=194471844;}function
get_translations($je){switch($je){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQ¦ÕÈmwÛø€ÝO¼êmfpQËÎ‚‰†qœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´sN}+ö\\òp¤Û¥æ+÷ÌˆÎ NbBØ­8„µŒ#’Ê'£ î³`PŽ2ð+à²‰‰ëÚÔ*ŠÂÔ/ÌhäúH¤\nê:ãœ9Ž+8Šºí8˜7­Cs¨¿\r®`ÊØôj‰Ð€ŒÁèD4ƒ à9‡Ax^;Êr@6­kð\\³Œá|w-<QØæòÁxD ÂJÄ‹À­€xŒ!ò~ŸBÃ@ß£C«°)Š0Ë:Ò8ã(Æ¦³k‹Q9è;à:ÏèKN Œèä2c(îQ”sB‹4ðe\n¼Câ¼78o˜JŒCË:ÔaJÎ¾bÞ6%ñ°¨û´õpÛ4¯\"êÌ/c\\8£(Ì0Ž´m 0Ö\r8§>ÏàPŒ:ÓüÀùˆ#8Î€ŒìäÁA#Ð9ƒÈîð -BÎ¼ŒŠHÇ®îk”–¶Â£Çc;¿JZM}b”ºp9ŒncQ<„\ruo,ÏÄl9´Ô¥úÐ1ƒ§J¾¸ÁB\0 öòÂ0ÅËˆÅã¸¾@(2L£ó38\"jÿŒãlíüÓâ9¦\"MF=Œ/¨½›FÄlB\r»ƒ0Ì6J©Df3 «È¨7£QÈÜ<£kåuŽc˜ÍbÇ±£v2ðREl­aÓTÊƒuvÑ:ž«pë(@Ç®kÛ}±ìºÃ 0í;ZC¶íì2ö;YJB!ŠbŒËã\\v[XË¼	\"Î˜oë^j(>¶¤ï#bP*1cpÖŸË;²á„É¶¯Û#\\ò]4|‚ÅH’2€Ê:(Ø¹³\\Û>k³Ö8\r(É²#£.I½Û?\0007%	T=GŽLV©þgÊwr…#IT™'J¼¥ÙÊ£”®9K2Û/LÉ–MØèñ“q@	Å9¹\\“j)§à95güòù¯tAÁ™Ò\\TUQ´\"Š`2ƒýÏ\"ú-æü×0@ˆD\\äÔ\0Yã‚%ð‚€\nI\$N “\"P«ƒq¿ZG6ÒdÈ¹•\$0TŸ–SVA3&¤¡Ã¸“ZóŸðiY•Â\\Lpm?Š>E		)Ç„ø§®²káiÖ;­_=#°zÑ „»’žA×c˜48›80Œ0vNÑGôvÁHñØ;æî™WNÕQi…¡<)…@@Ä\\ R&ª Ïd_	T|tcrIÌÀ'nINpr[PH»¤cICF`§0Ì‘â@H¤Ègr¬›#&HÂ0T†	µ%Ï‰\$‰É2ÎKKÕrHtâe,Ñ°O	À€*…\0ˆB ESˆ@Š,éc*½X›àÂ‰Â‚	žè4ú¢dd½W¸O,kMJHüp	Ho5Dr„š¢ŽÑ´¢\r´(ÓÅV˜HYÊ1%ý‘#|bÍQü‘áÁÁH¦ˆ€EìéZ³YMGN›(\ríá¡ LZSÌ÷™ÄìC	ò\"†`é7¹ƒC8h…°¾¿ˆ\$PR4‰D‰&&ð(¤AI[êºo›ô\r<'JÕ\n‡ßJñE¡’— Üâ(»%cïe\0‡NÉ\n‘RaX4© XÅn]!àü±IRk\nyù\nd9.ºþ‚Lª¹aèÙi¯6AÛ¯å¡kÚ\n€ìá•DaA#¤xÓTëWu˜¼„g6g*»QJ§Ì\"˜Ó`‘{4zLÙ;å( Aa HRý_IóH7Å2	ÁZNC‘ƒ°÷Ù ¢HAx ºæÂ*‚B`Ì(\n\n7U¬XÆÛÉO	m‘TÞDÒ«LS7Œ¿^[	yëP ½W²ï˜K“|ý'0,«F¸\ry›y(U7³`‹ózuÞº—Ë`èY„}÷¬èe*ÛÀ|Ê!8#’ùâˆÈþ¹EÝ†AÂ‡4â\"A\\2†,b}f-V\nK@’SPFC„%z¥úé(3	ƒeåº%œù„„4YË(C:ÈŒ»‚b[BI&,ŸR'ªºNE'Ë%„Åx3#ÈâÌYjeÌÎõMÙ~­NœÑf\\ºi%?vÇ©Œí›ÉŠŽ¤ö\0œfì¼Áiv|Ð†:}–š•V\nÃX¥6¸Hc‹ISyŸ%ü¼<¥JŠ4å^/š€Øê)ì‰éÂÉ>eîÁ™j@@´:ÈÐYóVð@¬ÏÄóVµê‚‚.sNø)-Ú6Ž1\"¡³Æ_ÏTŸbÒÌÿ¡ÈþÏ›5’l‰PÓ¥{W3k'IÂ›?H[wdÉý—Ÿ7&Ùû—lg6}º¶³ÕÖEú“„8£lUÚUÝ{^(“[ùw(aÀÌ…+e	7Œ»&[øŸßÓ{Ã5ñÏ–¸€Ù‰·¾öPo¤ÜNË†y´ZÇ	ÞogqÞ?Èw&×Ñ&’Æ.³rh_¢\r`³Ó^'ìSu|' óîOÊrÈ~\$Ž‡P\\¦ŸÃVÚ¬@xÈ\\è¸ó›7•Éréz-XÄ`7=hjkq^=fyéÌÝŒº“£eyž»FÕñIq½3çlP¼&’q¬öJ;—nÝ»Ö—)\nú¤í«þíÝ×—[mÎ9NòÛùóÀ£ÎÞóå†)ÞÝ1ÀËå)ë3¦±—¢\"ÊÞ«z:˜È””Biø6ùá'swjOê^&Çõœ×ðeùU»¤þI¯­DÃ”±‘¦rr±¯tI‚ùFßŽ|%ÖUWA¤%êóõ”n7Vð{>}ž]ãùZ ûÞß@{O#däãò¬Ø¾þ­qù4?„îõýZw¯Ãä¾·ë#\nÒÍ–›Dûo\\ÑKB>®DñgO\0eütüå,>ü·Ï˜fÐ³¤F\n‚Z4ï/ ª7\0ð¤HíÏÌ%7\0XòP	®<Zö\r éd6¤Ç\"4åRùÇHíÀÖ\$Â.ƒ¬%ÆºÕÃpÐðráløÊC¶»fÒ#\"â- —PËP@àkäU%8\rª?-ÊàN\"À0Š>\0Ø`Æi€Æ\rn–\$m*#ªN`ÒÆ°/Ò'ˆƒ.œ€¨ÀZœZ0Ô9¬áÎÜ%«‹Ú¿ÌÊ¤-ËVÏ‚&Î£0h*ÒéƒD¡\"ï\r¤\r‰À>ckC±*juH¢q&k	&¨%6bPŸ#£Â¢ª)~¢htb1X]£ˆ\\e^ B!Ï¢ç­`Ü¥Z-²ÎŠw\0¢cÑJÃ5Ç˜Ðq’ç/âû‘u‘î4@ŠÇ†™Šô§‡¤±ª”ë’¬&^Ñã~d\"F	Š\0[íjéQÔØ¾Ø @Âõü¦àÂ¼â^jJ‚vR‚Ø1þcÁo¤{§š³o’@\n\rJèNz¦N	ª(ž`à,¥–üjxcÏ \"å()¢Ô¶Ã/ë¶ ZG\"LíÂú6\"U2M%\0Ù\nñªz²V*@";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š­Jyµˆ&2¶(gTÍÔSÑšMÆxì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ®êjÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœñ§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ±?+T\n‰Ð¬§	JÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6½C(ä\rãÎŒ£u`<7cpæ4õD¦ÂHÚ85ãmb:xÂ)m„Þã#hÛm(¦(‰ƒKv§¤%‰°[G’B«=2m[Ž£“j©Q%º±uqÛsìdÄÐJCD©SZªÉ»¬‰B¸Â9\rÏPÎŽ¶t #÷ö–«1¤±^OÚ|ëW‘e†/ÈJ]9J¨ð\"Rãê6\0ì0ƒ¨ÊûÀËÜò’F±r²¸ÞIÂZ—)¥Ö›kR<ñ‘Jº#=^VÖe\$O²°Y<Ð^\$[ßbZÆ¥-ým< P“£„×£cÂ7L)DœÚbbÔ‡©£Œíb®²…ä¤ÖêO\nö„î·vï2@¦ÁoÃ1lkÀÈ¦7[½¼/…­q–÷Aï·øê1…¿§Ü;N—®`uùwf†Ã½#¼+ûGN,†õ;[ÓÎ ‚üþqÜFáÆƒè6LóA´£xÌ3\r•K\nüQ<MÉ¸*\rí@Û³!\0ë[£ÆÙc6N\rƒxÎõach9{£Î0½Aë„„@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«i\0 ¥´{ËŠÝDlx†£tÖ›[Ú1z…Â“’Ÿ×¢Ý„hu;˜Òú[ ƒ×4A¸5›0Ì«^ò·=`€ ªuRŸpcW*Ü2* @¤Ôª—S%0àÈ®MÓX«§º²ö!ÈJÝ'É(\rUÄ3”[d¸ADbÓÐPH ¨ÅðLÂhafì9˜äÃº­YÁ”<\0Ò¥ƒ\$‰¡K)…4§ò TJ‘S?¥T«r°VQñZ«urÕØsWªý`¬8¦²\ncù«1gWòCY¥ZÆ¥U=°Ü°ÖÁu\"T”ŸµcRÒ‹E”.‰ð(ª’T2‡JÛs¤9®R„@çìÁ×iÊ´Ç+LDú“0†®excŒgš“VkMy±YÁÁV‡CfoÍ0oe,±ô‡pË Yòßvëv7(é‰\"üPdØT“6>ÇL4/+ll…Fõ0Î¡(e£Ÿ#–”Ôt˜¥i¨2O-cÉ&a\$“> iYÆ”­Ý)Mñ³RÁÅ—G0@ƒo\r°òJøêoUˆ o¥h›Jc!¬YCAØ²xS\n„,ˆ·Õ´í1£IM1®²ö”Ø¹D „ÙM*™5fq9õq;´÷>[Á‰šË%Ê44\nçÝ%\rƒ!@\$;IÛ0n{Ë\0007ª`@¥ià¶Ós\\iMj”ÁP(Xz^ý•üí~Ì¦œS¢6ª\"«=§\nQ[ŠÑo©A®v<GÅ@\n	á8P T¶ÊÚ@Š-ºL0™A°ù“pÓBºb£V¨ì+»3¯'([Rí-j*.Ä)7z-Ép‰D×tÝóðJR+>	IÙ {°P\\Ìû¹”P9ºÓS6¾î³td·o‹H]Â®vñ{kƒ|ŸX	Äó x¯bs½ÐµÛ`Ì\"Èk›œkx=ÐÌæ[\\Ù6Pv°—ƒÞ“´¡UÑ}FIH‚;¸y£ÀA_,©L¿¦.õ?\\ëDdç;÷PÐHsJ]DÒ¬˜#ÃHzeó}_¿Æ^Ã)¯œSÝ¹\"Pä]è·Ÿëöcc ie™F{² ÒC¹4[+Å3c±r†À¤H÷MvÂ—	žŒ~|ÏÔ¡ˆ°‹„^—RëAòZJLÉ5µâÕ2#¨Ôú\\Mjê“»®A4ÄÂ&Ž‘uæ\$'†SÔ2±”R>}1!rz¬ÉÛ£TbM“A?•œþ9·Vâð‚e0É0[¨BHÑUfófò'-6ó±áOz“JerDº´TôÓkLà‚,Â‘‰ïpéÂTNJOx°ƒ[}‚ûŸÃ–¢\ntâøž¡A ¦L¼±ä:ÇH37M¤,Ÿ\"÷»Ê¨°„©‡Þ‚?¼¶úbÈ ¥°¤’B!y5À'v±î!Å÷ŸÜS;|ñõý!/'\$@)jª†SNC¹Æ“íÎÉTCU¦lLbcÊ „©DL\$ÐTÜ¡C8¹.˜‹’KŒ°¼d§Œ\\¤4Œ2SC|Z±Gi®\nØ« ŽôQœ¡p@†ÿ(0‹ºÛÐPÜ‚6ÆåÈžöãŸqôdPðšýûŠ¾É'<À—#öÕüN;uHÒ\nÅ»ãàp±ñH.ý¡³¨½èÏ’?MÙz—/@a<–¿Áñi×ú„q·­_9à›.‡v”Î¿WÞÚCF2>}‚%9š%0Ú2†˜¡mþÝK²ÖÞÄCî]¯÷L{ã×/oõ¹/£p^”þh#w\nÊ)Ï{vxv _AÔ¹ä£\\†˜9/…ìmç	à¬*¸xœYòd…/7´üC/~ŒL\$Á'0Áoðõ'õl.vl\0Ä(óo´…0þ°\nþðòOäšLÂóoTu§	oD^owŒ^ì@‚&ÿƒ\"òH6˜0T<C¨ÖcÇÜßEºß­Ö¬Ã.LRŸ\rÚ½KNLƒŽÒ0‚ß‹Rv°!HØ*0†2ŠîpŽO90<ëÏx†o\n\"<)ëÀ!°MM˜ÄÐÃìb>/¡PŒÎ˜cÅÒ0l\\ããŽf¬EÜ*°Ñ\rHÂ10Úé‚\0Hifû¬öÛ«Pað(%Í¿Æ¾ÿLð‚…õ\0000ìIÆÅÂ÷pòüä<N®—\ní\$.m(v¤jôï¸ØNàÑ\rP-ÓÆö¸É¸ðBñ–^lñP€òâÛpÁÐª(,çU\n‡Lw¨@áW	1`ô¦¤'Y+ì\"qšð×˜Á±Ÿ¬É´]b&í±~Dè°k¤Ò_&æ9ó\rö((¬îºþ,¼óÊ<+mhÑô…»C¯ÑœØófyñ’ŸŽÍñbkBútƒ%1²Qr!‘üòrÁëÆü/.™%Ø/kó%ºD‹Ï§Q —’I\$_©#Ò<àq¨:rTàQ±\"2_1#†&ü2C!²n%RÀ%RcDNü2jó¥ºÔ\$½ï·(æœòs\"%)?%­A)²ƒÒ¤bD0GÇ±¥(¯MDXêÒ”ÏÌñ,d¿)ïVp’Ð!ˆJ.FúbQô ëFáAJG>r)Ì5\"cÂ­/šÛÒ4Æf0ºÑÜãªÄÄ\nÜñp†tb‘0­<ÎDoiÅøîCþà0x)¸a)¼€ä\r€V¨`Ò`Ör°æTe†\\œ ÚY ÒÇºZÂfË ê¦ÀÄ•K\n ¨ÀZ\0@V(„¥#ÖópZ£d¼ã¢ùf¸#¦0âFßì\n¯XÎÄJ	³e6Œämf@\\P#mB{# Ô @RZN*Žà¿aMp?’X(¢R lº\"Ú>À˜°¥6%,¥t.i@DË^_ÄìID&~ï‚óä&ñ†DêÁ;\"€ô01DuBƒBÑá(ÔACoP\n†Æ6CB4cK7ª‚\rààœePÊP|Plšj£¸¡Ì`+!lgÄíNÉD¬œödÔö¢ &×cj†fÀtj¬þÏi~?éz …ºö¯™\n @¬ Æ ê\r¥ä&ÏŸ.†à–DJ8âlk&:Pœv'g«¹C1~'Ê*þŒÀ*Òî‚N¼Tæ½4<F²<ÈtÒüäæ*¤hìŽÂ‹#ùÄh	\0@š	 t\n`¦";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆè†3	´\0ù@D|ÜÂ¤‰³[€’ª’^]#ðs.Õ3dŠ¯m XúÂÉ3’‡²îé \\µ	Òá¦.L\\ÍOºp©¥\r²À…¿ÍBz·.+šÒ¯«‰ºªš¯H’î¿*¬¶A·Îb^Ë¹23r—¹¢J•BÃÇ\"ŠÃÊ”ðLˆ’‰”|ú§Éªf÷šJnäµ‰¬x¢¸Å²d’k’¥ª¤8Ò#èç%5¨Å®%\n¾!,ïü¹AKÍSY0´4¬Ô„ÄóÙ HÆë3Žœ!s¹ I\$*¼Z@òÚ£@B\r,U	‡ƒ@4C(Ì„C@è:˜t…ã½”# Ú4Ã(ä\rãÎŒ£u°<–Èæ4öÐD·ÂHÚ8\rƒ(ÛlŽà^0‡ÁÜ]c Ð7Œ\0è7„¨æ2„˜¢&\r6êãK9)‹-	;ë%NïUEºÁ©Ê£äú]?¸xv²ìòüã8ÛvÒãÍ;Äò@O;D¯Kb¾¬Py\nãä7Z:<ß2úÒ‰:ÕhjÚ>MD\nòy+ u¡¦OñÜ|„#äƒ¶Šj®„êÌ'Ò„ŒÕ¦‰ÅnŠÑúäVÌ/q¬¶•íî;§\rÀM¼'Oa5.Îà®Lþ%åÅE0ŠD “)Ûj>QR	\"±»´\$Ò©#g¾ 0ëjéò[W´‹êT¶/Îa´À¤0BÁIÉº¾c\\\"š•'ÐV”ÇNô\\²GÒûËD½\0V&!±‹ˆ”¿Lš½ÝÅ5GPëKovKPdïµ¤BÊãô”ÕX×°^cµ7€‰UÙ¤Õ¥ \rã/ïïk+‹ô,}ô¸Ÿ–R½o¾ªTR•:gušdLBš&’ˆû\\#ïlÏIß²£RÙsB{¯ùé'pˆŸ»õTH˜Þ°¶öƒ`tM@è¶Ó¾fÊHbô¸¡§>rZ“âue1»ƒLvŒóp8bªJá\r9'ÌŠh6vÕt8Dez&ZK\n;¹fgy4Ä‹È9[À&%çvÈÛ?+Ñ¼ÄD·ÝäJz¦ÔêªcN<S‰i‚+&°~âÔh‘t†ÅñzHâjR+¨òªwO‘É?dÇt¾¼’ê#‰ .!¬ ’›Çn NüNdtÊ¢Ø®OÒá	|‰Aˆò¡AÚNpÕH×©Úáll00“™‚ˆ@a\rÁ¬9‚\0ÌµWêß\rÁœœ´’#k…o†E¤Ê»Wªýq‡0Dƒ\"á!Ñž®åà\\H\nM@R¸­Ë§<§	Œ2r\"\"MãASÊ]Ë4ø‘!<MjÉ“C)îH’Dî8.F›2y&¦Ê¼WËa,EŒ²PwY“=h­5ªµÖÊÛ[¡¹o®_7Aò\rBÆ¨ªŸ„[9—Šó4Ò‚)GW¼iÄ{ò”MMø“ŒÛ(+,W·(áÓ\n oœ¿¸Ã\r)ª;°p®£nTéqW¨gçz®U›¬=vl¼¼¤f^‰³Š@h'£½OIÐP	AjÀŽœ|ë\0 ·’óB¡ã_)Å!®¢ç\$Ë_Kð8 ÒƒJéá•|‡ª&(i˜¡¸7‡@@C`l\ráÞÊHª–#‹oK¥M(ÔBî#ÿw…Ä£²’òÝ¹þhì˜\\Å…C(*©ÒKÎÊ°8ù44\n2'žÆ\r±¼4‘ÒY7±\n¤ä](Ì£ë%ç”ðªXœuŽä%¸E€[ÌÚ94i±¨NeRSž#.}›kœe¦™{²t+ÍðAErì•ˆÏ[KˆúÙ#ËŽHUœ<”Í/¾¢¸Ã°,|ºæ­°œ¦Ésãòó0wÜÂJÓ|èŸê§¯.&¥>rSÖª—Ž²¦¢k\\lA.§9€°2Î]Y48×”#JélU4l%å.¹¹K>Ñ£¹­ŠH¨0s}ÍA1pWOI8JõÐ%Ùc•Xe‰DƒÔÁ/„ô©@?¬¨CÎM}ˆ;2½¢LLÍº´PJMQ'Û~i‹¢ÒtþÀÒv3å‚¯Î-›9(\"rÃêI·ª\nS¨‚U4M3…ÏÄ¬ª{” ô‰ÏsùŒÈ»©ØsÜ:ÕQðò>©^0aú–'B«¯áÆVŠ»5jjTÝîfÔJ›å6%u^”Ô/óR@\r}ÒQ0w7ŒÍšéÕ”áÓU¯25Ù88]P]ãh¦I £ü—”Å§ebò×*èÜë¹ÆG‡D·8·VHÄM¾µebÖ©Áw¸7hÐÏge˜^|Òê*:J¹]ÔÁw†gþwÊŠbòI‡³<nsL¦¥]§ŒµÏàãÔ€pN!H‘è[êWdî*,°ópÇ™»ööXËoiòûüRo©¨3iÙ‘ñLXß2{-=8•ç¸`ªƒ¼ec(FâÐ‰ž¥¹û£h’þ­Y\$JQ„mwÊÃ¯í;:<h:T+»7.R¤â@ý¢¢OÉ#!:øÞoYÖë˜„×èYøhÜÜ¥Î7vL@( …@¨BHÄ:­ Òf+:`rÏ0ê,°r[¡¸‰;ØJT÷½*Ú£â0¾Ax ôèØü´UòqžhÐ>7†¥NÙB‰dñ9+(£{	ÝxQX3Ùª1û\$Õé=ª¦ÂwÛÜÐ²yï=z^K)-Ï€X>Ú0áœù,×y}ßT×cæÖ\"*Q3ÝöŸ+’I×mî¨®ônˆ_¿ÚKÎÖÜKüÿô¬a l†L°úGNÁl¼ô¢jØCN-Öè(ÊBì\\aŠhë-P÷ãR¾JòÂâÂð/lèÉ…(×â]„vÆä†-mòÿÊ¿&¬pQcænÊ|3Œbóî“‡¡ª4Ë¨+‚\n«#z®>¦L;LÐ+£üç.v((tƒd6ˆ›ŒÌrD&¬¤HÐf©öÊX¸®Hë\"&.\$+¦­	zÁøàkˆDqãj¦M\\•Í` çÈp‚bÖ¯¶åG„¾lC\"®énÚÖ‹´=0üå‡ˆ qçÆ‡ªó\nåh1çöŽ’}ÍVrê¶Ìb8¦W¬º)(\\ÁÆÒ+Â„q\$œ‰ÄL·ÊŒT«[Ã‚€ä\rààÜ\".ì¥KŒ<8å\nFˆÍ‘>®®øèDbFÕ\$¹h\n!q8uŒ\$·pìTÌ´¦oàÖÃtj,ÌÏ1¢\$ŒºjfšÍ\"ÌäýäôÏ!`(\nP\rNŠ×±/MÇ¢²GÂâÕÔöÑäÁ±èì\"”jÆÄzQ%KÁˆ:@‘-€{ñ8¡ñÞalC²Ù‘°ÿQ\$bGðÓPÕÓQ=	Ðã®Û#°ÅQŽ*2¾‡Û#q-Ñ§m¥1\$‡B†BºßåG\rlX+ìP‡­bTànF.&O õˆ¸;ï®øQîOŠT’<§rn+ÌRÍÆ7(j×(¡a(ïa1À½/‚+°øÉÄ¼é¯K\$Òbì2A)²X‡N˜*£%ò+&R/(È,Ìù\"¹\"²P‚RU.Î\0T1ÈÕF@çFÊÝatM’†Ç%08j¤×ƒNþÅ.fJ6‡f#j\$Fbj¢7ÌW\0b¹Î`ÌÇ•	dxŠò¤„SM†D¼;s/\nkòØ«fÒ2òTGUŽÄ\"}SèGÈË‡\\Ð¢és4‘Æ+.NdP§/ry.¼Gihä©TÒç-N-)³¦å›q/±7:G%0|{IG9†H‚¾§§fçS½ÈD&rBçRFpŽí=©s&á&oõÓÇ>âE?2øÙ2ü‘É}8ÊÁó\"î¨ù\0÷@°~t=‡PÁÊ*,Ðic¦#rqÐŠV,ÞBÇâáãd¦Ó`PÌnÞÙÒ‰.Ñ>sík&²¯E’³EÓ­9ñ¯:1#.íš6Nå.Ry<0\"æfR8¡oÈ?¥	Hî†|Óy(TmH1ÃAí‚ïÇId oå	³ÕBµJd¹J²µ\nMÈ0dB+nÝ­\ntëðÿÑšB^EÓ±>RÙ&´Ý:®N'n3c”‡@“ÃG¦3Op§O«\\m•N²-G‘:Ú4£AKùQMQMíQˆKúwÌÌ§ôßS‘Hs[?TìëqìøˆX?Sß!“É!ô}Rp®KÇLU<{Gd8î îbºês*4ïFGÖ.'WÎ¤•õQQñ !UŒê5UX2OP”‹\rô¡8.heU ¥µoK5rxÂëU¸Umdu÷@hð2ÂLgUò?;5Xo\rç=k\\4•Ý:š†•F]‰[]Ôˆ'eézw¢æR±JÂ?\r¼ ŽäßÄ(¡cž7ÒËNà@s®8Ç*\$ˆþRec3%§?(-Þ.ä,n4ÊÂßïÓ¾F-#c¤„ïÒLPâfÕï)rÅX¶Ag\rfÓ¬ÕåMg²kË…@Øbú:bbÒ†bÚæ×T…+h¦Ôs[^Õð¿\$ZH,q[H3ª§Tä’\0ª\n€Œ pûìª{naOÐú4KYpÈ°ªnÈÆ÷°\r/v‰4(•,ŒzPú\$D èŠ—¢Ð{B+»7Q\0ôÕ¯A%b¸–)u\0006 +«mIÃþÖæâEEˆüW5I©ÖJmQôÌÍ{k¦Ò¾N[5A:§@äòÕq|ïðÜl¤\\×·lKÄô¶Føÿ¨Ð²*nÑMŽÕ70þå­UdîsÖÂ{³kw›KóQzÈÑQKz·™TœŸw´+‡•·XÎ¾wŸoµßOUz×Án'£®“¬J‹ëßvÑq×5“ÏMì¦q…'C×rÂ‰Ö£3wÂ\0Q…8~Á ÎÈ¶áu)6“NL.‚c?JVýa#Ðp3‚ÚôÐÒÃ•0\$^AEBj6[b7í\0iG`ÆîkC@–Ø^nõ\$Û‚ì‰8Ã–ÞåÊ°8g£'RÜÒP¡W30­hJ=9Ò%‚Èˆåi‰\$jˆçU÷D•.Ãõ3jˆBÂ%(P\n%WDÕª#KÑÜ' ";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIÁÐ2ÁL\0I¡Î#VÜ¦ì#`¬æ¬ž‡B›Ä4Ã:žÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”|¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•FsÔW9ÊSÁ°³“TŒJzÜDÈËdz¾6­ò[Àí\$ßK‘û¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWF3ò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Éƒ(ä\rãÎŒ£v8<?Cpæ4øðD¹ÂHÚ8=Ãn::xÂ./–\\þ\rã#æúŽo ¦(‰ƒKõXw½FÄØQë\nÜ¯»i@G¤ZŸyÅlãQ\$_,#M[7¸‹ÄD¥Ð¾¢§ÎKssdQ\\?p8»KZGêöŸUÙ]óUÙ¬2\nãä7Iƒ:BçPã‹[<DñXMj‹A—3%`mU'·³z=Ôw®—\\ÆPLÞëÑ\\{\\€2,*¯Yˆ˜Â:ƒ @;#`ê2îšJ¦¶i×¤¨âÀó¬Í· |§9F/üsDØV\nñ Ã(ÝñJö¿H»¾û{¸µ­£Lü)„ÉÓ§e2…ô8¥Åê@}6VÓ70ªÖ dE7“\n#Dý‚ÈEÈ¬äghš=Ä€1†Ü’Z\0-MÄÅ|«õN)Ä£6he§ „ˆz‚™uUØèqp@­¼S6ð·]€YIç …\n#ŸxäÕ³œÞMaš\$oÏé\$ ù‰’ë-†r–¸~F‘¨(Ž S%–ØmÕñn}Ê`™‚ÂÒ“‰OMeÅçö¤\\ÊŒmfò!¿¸Œšaì\$‰G&\$`1M1äu‘[M:Ô9\0£ºwÜä\rá˜3Æ*Ñà¦%‚™l	ðyç\r°8<‚\0êÈƒ¨cgÄ9†gh`oé09‚Ãæ¤èaá…&	jã˜ n§è0RÑ\nÛ ˆ‚œ0¦‚2{¦´·šY£9%n)?CRðÕ‘xàPrFIÉV¾ˆoxï­ù¨Ó·%Ïn\rgÈ31™<ÈÒh ,MŠ‡)\\Ù+#ŒX/öÀØ)r@ø22SòáY‹3h†·'Rð­Q™4º¢DÔ`·(*åFb÷+ˆ“i”D—Šf©3[1J38§ÐÂÏÐr=¼9‡v2Îƒ(x¥@]?X\0h`Lƒ0†ÃsbRå‹1†4Çõ9d,’‚öNÙK+e¬¾„³DîÍÃC9g`‚M†³ÈÐC“a¹—Ð³nñ•j0¯ã•É )M”…ÅQ„¾l”ÒjñŒ¢?cnR¨sWl„ó0@@P®2ð,‚Ê™àËœ¶ À‚ä\nf²7 k•¯‡î·LYNl–¶0èáké=g´÷†VtÈt>Gøò†÷lîeHw¶ÍÏ%Û–Zã„òu(9‚WR‰ ,(ŠËM„•Œ)3³ØêÈ\nF)zÈ+(P¿è…0\\ýâŠsJ#½²\0¼¨éŠ™äçÒ«ßzßRàèAßšÆjê{XuÄ6öÒ¹´S‚I'x@ÒÎ3¶g¡¹ËxÀƒ‹»¦\0€3 Þg”ô­”Èþ1Ð@åK=>gôù	dZ\"¢J%ÅBQycÂxS\n„:¼Ò«|ã”&ˆPyÓ!20jM…)C7Ð€>™ÔJ,ë!ª.jbˆÄ€247\0?„ßxrSRøžIæXØ `ˆ4†p@ÏÂf¶ŽÜ4°\0Œ,”gA¥•Û™lí°î\$Xñ±rìþéBnƒ*+˜DŽ†LnòLâ.¥%´“Ç„±]ai„Ó\núœ;\$)Ae¤qV\nÈ¹fÝnX±L·ÚÄDõÐé#ˆñ•Ú,)áIFà¦âus-š¸®˜W>,¤(w¹8/m‡³Üò3)óâOî,lÇ«::EŒºc™xŽ«eä_´ùD¯´æš\n2Q±MEoŠŽ69mÕÜÒ#ýýMÞDé·7X!ÄSë\$©TžÍ‹\\Ò•†æ‰Q95rO%>G¥\$ž·©x‹qUm?S\0\\Ó5•ÉÞÈY+·,2Œ³“‡Qjò¬ÿˆuÔ´eŸ\$øF6²í)•ª.ˆ•BŒÎ[F¦ì®’tj#Ÿ‰îgÔ’CHzw–­•Ë·xÃ)îµÖÙå¥=ÎÔ\"UßÓÎL=ƒŸŽß¥ÔÇ:Èî¤Î`eíqa˜ÒÚºZõ@ä_enW•»Ú@…|QõMöàØŽÉOSœG%áf[Ò_F0²ä7(ûØPÆ‰tÑ¿\"\$MvÕ÷êWé<'*)¨Óé/¹ÖHZéòC·öÔ¡öÂ8»Â7¬tBÊ|ÝÛ†a(éè×8kûí)è÷Þ‘‚•Ó{ùyãœ¨¢9¿òvÚjáÿ)l\$yªÝx4Ì ( …@¨BHe‹“ãš˜½ÂGÚÜ#õO¬o3ÔÑ¹ºö\r²¡æœæÛî8‚6q%–Ôá~q°\0ç(lkï’°H*ø%Ìóƒ„ðè^œoä-Î¾äp\nWCtyçØZ‡º®n‚°(¾AH(&þPÏ…¤BjéÈ6ð*.0.VC±P6‰bÈ£p@ ¾ÛïlVß‡ úî\\ '¸±Èüš&°ËF/#Î\$tÈ(âíÞ[PóOˆQ#ˆØ°Ypt(ðÍè#°ãèïÍÎ@¢Ï\nðlÙŽšœ¸nðZÞ!òbˆò¯@õàh&(vÌ<âBxc´(/BÂçÏ1oð¯Trçº»Ebo%v¿EJôl±eã¢zSBhÂÜ™‚ž¹Cn70°[…\nùBT.MqhØiÅŒ-„`n¥&nÄ×c0-Ä¬ì@Ô+Jkm nÃ&º\"ØàƒTáŽ‚ø°2ËÂÜkBñ¯”½.nøD\n/Vûd\n&¦Û\rð 8Å»Fð„.foˆr¥MÐnÎ¾ÝqxˆPç-äUå„oD×ÑÎ òÒ£n´íú¯kó/ôPo‡o®J/‘\r%–Hc\$þœ±4ÞiÊ÷æÚJ¾Ùƒ5±ýò2œî’ï¯P~l‘/%Nï¨Øà²ñû\"= 2)®–Õ†[Å¬øÈY\rzÓg†»âÝÂŽì<j#Q¾rÒîTŠIbð2o‚¢h¤‚å\"#\rq)o›+G:å­\\Ö¤8òéï\0Ùgá\r©ÀñÂˆò;ÒhïRÑ	ç^5hG…€\0PËÏ²0­hKàRw²t‰,„ÞÈš+î¼JnÂÝ‘Ý.R&Üà%Ý' ì°ÕàBÒá&S!%Sã.tHÑ•%òOòS3BàF-òHn#³4ò#Ó@Ù£\nˆã3#NÅ.0¦ÅA6ÎÑ*SJ€3dLMá8Py8ˆ÷72Ùï-\"bÝÓ—#ó›†Ý2›Ž ^qÍ¹qN!²û-Ar´ôá0°÷ë/6pèÀðHC™'Ä.m³«5h£ð`S±›\0003‘=2Ë=p5=ÐlXSã&s\"xe7/µ1R?ŠK3ÓÅ6¢ÏAðB-Ë-°\"ˆS÷>S˜Pt2°ç¸ò];%û8c‹ë\nUCrT\0\\Ã\n¾m?%1‹-¬xÜ4jPÁUâØ&®ìÄ‰Š@úR°¾í/GS5=TxPr‰ÏC„ÑFbCQWCPâ*1 ÒÅmÅ®n¾0ô|ð&² ¤Q†ø\"DB‚s4š¤Ñö™RDm’®ŠˆpÚ.Óòö¼XÜzŠÅ¯5òÝ\$ÔW?“æPu’“uBn#”-53‡R&¼ûU<ãBóTãŽë8è‹BÜ3Éšùµ&ÝU+B´YQíçTëUS£µDƒUôGV1:ù„Þ´ôSTµDS°PueWÅ#QT?ÏBö•U;Y59XSÀôAL£¢øì8¬Xa~á¡µ5¶/»AkE7è	DtõdŒ„(õÅ;qpøÕWuZrõ?Sšø“Êjñ½VÕ—:•sQÕw^“îjõ‚G²a`µ‰.qöõ¯``QÁQ•«YÕº5b¢Y€Åp»•kßc1^/‹aGóSµ›\\c³YB[–_KÛYÈ¨ÕiÅH/”sm2Ý*î½Ž]S#u]³¯bL¾¦íh-_Tƒ¯9*9`öi«ðÕ•bõq!ó¬ET[9¶˜J6kG\$¶¶Ž6Â³#WlˆÛ\0öoNÑHt%U“RÖ»8¾PhN-Öåm¶£Xs•kÕan„†´ý	uVö%¶¡fÖLônOUnuñn¶aôúGØô·'C³¥673õC\nH¨Ê²£f´9D46·H#MdW=bÓ§qQ(õ0…u^pzÓÕU5'o«L–‡7nÁhÕõRöóW|Ü…`6IcUtS†RçÉvöWZ—£T†}pNYq_Ô™'Æ¦½oç'„Õ;e„3ÍÿôKð¡ƒ/zr“Ùebò2‡t7µ>“É|4zà*å=Wê÷â•ÕjWö°\"ˆèµ*+¼+âÂMa?óËR}•~ûwûJ²XÒ	Í£Úzßö\r#à`è@ØlP\r Æ\r`@d¬ÔvçrwjÆ\r¦r\r Ì“¦„. ŒÎ`Ú¬6JÎ\rÀ@\n ¨ÀZ\0@c©ðÁÄš.¸:À”\0ôùäù~¢Ü‹£g)˜_‚›3Ê:°€t‹ÇÒŒÊå5=y\$8>m¢”ß\$Þ»ç‚¯TŽ0,‹^@›‡¸Ð}ãYÔ=kO.MÁ,fîGB1Oí+ò¢×Žal³ad¯lÁ2WgTø\$ÃxU›9£0À8›;	r£ÜðöÍu‡Ò?–&\$p¹¿KøMó9\nÂÙ\rrW~ÆÚ(Ã‹ƒµŒt[˜r,ìáMMP—-jUÕy9˜éd.8gz9«Žw5OjK@µïh³{ŽV\nˆüãÂ<`A‰L\rààµæ(íæ‰\"¹°»tµµG~n+Ž™‰1‡¬ ±TÂ\0ÂˆH÷Å5t™C#/â0#™'b•LK2T[š	 ÝâžsæŒKõVŒç<åf\nÀÂ`ê ÚÚfá;¹ …81Mâõ•äO¯ø@új''ÒÞyŒ/±–«¤„íÆ‹9šQ|Ù§mïbÉ­ž|µ\0[–ZPµ¥‰ÃlV¯[j*Ù¯Xhá\$E\\Pˆðy» 	\0t	 š@¦\n`";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eào7ÜY>9Ž‚àqÃ\$ÑÐÝiMÆpVÅtb¨q\$«Ù¤Ö\n%Üö‡LI6xi6ˆ\r(1¦;ˆÐ@7Œ\0Âä2Ê @¦ªúB©¨óD¬¤\nâ\\**h3àþ!ÊÖ‚>ŠÃJ¼ŽJØ¨Ž¯Ê;.ˆã¼®Èjâ&²f)|0B8Ê7±ƒ¤[	›Á!\r¨¸Ê9&c”6ºpéý¸±x˜œ¨ª¢ò· *Â0ÊÂ„~ËB¢Ú5(ÍÔÏGâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¦‡ÂHÚ84ì`Ü:xÂAm\\z4@bN9¡˜£  ìô¿Èè\$´¤`T¼÷1³³£Xè† Pƒ!ƒLÇ	Œí8É_X¥†Û%uèœ7²È*ü;JÂ¸Â†¨£8æˆÀ£b:!-»oŒ7\rÆ5\$ö6E)üÂ4ŽÝ,¿IBê­Úô¯Íøˆ2ŒÃê6-v:%XºB0ê7\rcðKƒ­)3¹õ“'#<p14ÍhÎ2#•’ææ&+á>&#ªjèëj1Ç ë[(É‘_b,<p)lš™\$ÏÝ&Ó±ÍXÓ¢õ;õ#Hòä:'xbS±5ù}`ØvðôÍÕëô­­kŽ#Ò2µèŒ¹°ÖÏ´F)A´ :ò¯#òæjœ§z`ªO*tœ¥ã\nØä¯º]{¯K;ÆÅšˆ[Žæ6ÇMVÀa˜\$”Ì³vº7ŒÃ2«%Â~I4L#{[Ê\rÃÊODŽ£ÆÕc6\rã:Š9…‹èå×c£\nŠâÐ\\?^ã(P9…)pœ2²Ñ³¼‚b˜¤#iã \\KÊË¶Ê?Ûºà„6Ø:¥ÂªR2½*4	3²Ð»;ˆ50åQÛ!\0ƒ>¨²?zÔbŠ;¯Ý5ÄÚ›Êh\"ÄàŸŸCÆ¦TÙ.\nÊÔPH¢“:\0!	5‘—z™ŽIÿTˆMñ’ÐP9~ì¬9‡0î\\Ð(eÁaG·Sc\0MéÅ9§TîžCº{‰ý@‡%¡a’ˆQJ1G)\$¥AÎS\niNÐ@§Õ	 Šér\r°RTdR%ÇØ¶ŸôxîYp‡?Ê¹#ÒÌÚ« ¦©‰’âô_	Â[JÁ9‰‘çŠ¨RÔnFä84=À\n;ŽoF‰È’ÅˆÑ.j0«8Õ£4¦œÔ R°ƒ¡«6†€‚îK¼6%ïAZ‹ã¼G[á<¤¹/7FÎñI3”\rj)ÊÂ9[‘.žœàÓ!JÁ=0@€û3òoNòß!0ò‘PòfŠ8i@¥Á‚ª@ÜM”£2aÄ:š¦\n‘)ùiù#—ÐÐs\0c%Žpš¶Vje¡“('¸‚\0žÂ¢On2ò;a\\?í….R„É™5šL™BàAšxnÄ(†\$£ì5WF’i‡2\\ç'ŠbÄ±>Ji€B¦	”ÓƒJ@B0T‘\rE(Éö\nŸ,éŽi!#›–9/àèjeÂ5è¦[C±4„i’„ðœ¨P*P@\n\rhÈ9“4lšØa *«\0ˆB`E«µ~°žäy0eT­N=Fž»iV¯•ù•–Ôz[Q;7ÅÚ¶\$ÉB#x\rDïÒjbB‚<beÑ\0ÎÉÙ1ÖU¶tœ7è:£KÏ6Ž¨·T±@›ÉTŽÅ¹»Ç¨,fÜ±ç6„jY¸&øfnmM±aF¼Ø\$RV\npÐ9ÐÒØÝÍcVhŸÚHEËò»[qY\$×ÔÎ”ê\r¡¼š™°¡!äIHAE1m«7àvHAT\r÷€¦ÖÊÊû,YªHË1¨ÒÒz:MI¼›|yÈÑq<Ç õ9&é#	5«¿f^B Ò]Ü±”`Á¤2‡vL±L¢aihà\$Íô2ÖVMÅ²eîË¶àÒPC4Æý²,¦SdHõ“ ÌÈ‚Tš—[ù(f'@ßN\naLe™ª³ÊJM£\rm„|%îÿQ;¹7bD˜Ù†ðÄ‰zÐÇ¨p÷+à¨C	\0‚r*ÓU)Œœ¤›¬ZŸJ¦bû\n\n3lXÿ+ÕÄx [†HÊ.mG´1“2¨à*ÃF\nI‰D4#´Ö¹dY-ÝîÑPjSb–d€N¨C(i1Bht´n';L ]môë[ÆÄÿPj-B4‹Ò‡j­Xñ´:Ð \$šV¶RáŒ‹Fj\$9j“ÓZá.Ïùó[ª=%ž5F½–úƒièía®u6ÙÒú¯Zhm©°õÆ¥ÛWmnHLa7‰H&‚¢Pî¶ÈÅT åI+ò­xÈ[/4\$˜ío¢Žƒ‰—7U\r\$³^„/\rÍ`Á”1pÄŽŽ,ËA˜Ü~+Ð´ÀB®.•Š»†tkžN‚³*Çg¹:±	Ìù&pé[2ýpVŠ_ß{°g¯\\VêæëN~µ7F¼ç„û…-4¸#+–æ^ÿ˜3§-ÍyèÝTÀõƒ\nÄÎ[Äzq«õ7œ[«òÌi˜íYÈ[Zý¢¿´ÚŠ†J.}:%\ntˆvæ'CÊÃ&ý„˜Êá\0PVî½ÜÄâ\\Z¢ˆ-¸ëäøÄ!uàñ<z8]k´€‚€Éb‹µkRG@!ZúÐuçD#F_ÒÇ/OÒK`e?;atoZãm·dê[“Özk“Ò\\·K9Æ]¹`ü#Ðú×Är}'²ûÂ]ñ\\§^ø]Ì‡¬ÄÉ‰×«ÓË+“ý[¡ôæÅÖzƒêßÞ“÷ paûú¿ÈëŒW@OåûD›ôoÖe6áÓØ&£cÃô'ª–ëÏT\rÏú#L{\0†úNÀ'Ð\n©¯t‚ƒœUFª*Ã¨bB{Ï6°\"¼dÆ3f@>ƒŠ+I0D/Ôž,f(Ð6(Ð<n¨ÖóNfB ,.frìpZ ¤øB>‹ÔèPQ+z\nj\0ê”(`ÆP2 .Ôr¯&˜Ì²Ç*þ]¥z³,@@¯Žúihw%\0Nµp¯-¶p«X®Ë&<Œ¸²o\0b ËPÔ8³p'\r·Bù°êÆ¬T‘0Ó\rpÈª'þe+2(cKƒàLb.A#ãîÞVÄ&VÜcŽªû¯€ùvèÌ¬ý0ò†%Ñ>.ÐÄùÅÖPúvÆ ±å{…†¹çfóï¸ÊHÁfgª•ÆÚ8‘d2…xdÄX#é~D\"^rÐ½§L~Ñ{\0‘Ž/çQ¡ˆ!Ç&Ê‘‡\n/\r°¾DCðöÿk'Åþ£b=\$@^€›Cƒ.Št¬‘1¦9Ðì…£Q«Ä¡úÈñá	bd^²1\n7ãâI‚\rqä’\$–6’#1ñ£÷\"Ý‘ 	ð¸¢á/ÒË)ˆ1 ž+¬DlÿãVÒ>\rÅîÛ‰<D«¢Ûòb^ãÐÒ\\é%r(¥î„ÆlRŒTErbÃB\\Cd~ÏäõÅ\$Rw)Î':ÿgHÐÒž ‰+Ld|\r€Vƒ²:ÉB‘)pŸ&B\\ÊjŠâP`£\0xŠ°\n€Œ pœ€<m¤ÕÌ4Ò\nÌ•ÐÑ#(ÛósÑm8š¤ØéVŠèÐàíxafÐq.¬W£\r¢|:L¢ãø.À12>dV/hã-Nx3e îˆúñG°;S^LãÈe¦åÄ\0\rãÒ¶6â‰7\$ŠvcZ2f¾`Œ¨ëƒNý¬\$•®Â·³•*ÃD2s8Ï:\0ý¥Û7“	;­:N³³¼%s¤\ràà>ƒ\r%kxBó³ÅŒ³6_k7ÂF\$ó00'(»J_Ï@L¯~±&qlL—f~%€Ä@ƒBõìªÿÀ‚`Æ¤R±³ÐrÀêÆ‚~ jû‡ºÂ8a‹3¬žpâß>Ðbcû>ÎÞ¢¸&¿7ÆôcTJ#Žt1bàVÑ¢úà¤@é>Ä «-\"5¤Y!C *À";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒÄš`o9>UÃ^yÅ==äÎ\n)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îÒ†\nƒHàù„\nxØ¾cªJ4²ãhÄÊnxÂ’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¼hÓ7µjÂ7;C &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»T¤\ní#0H^*!ò(úŒªFã}¦²\0Ð7Œ›òƒ„˜¢&%üâŽsD¢Ã1hš‹Ë!F¡È#¨Æ:!L…~Ç%l-„š5È\r•V\r6lÔš1,[.Ò¥ò\né,Ì7ñhKVŒCËpÜáÒÜE²¸Ø:«Ô9>r´~‘Æó(ÆÊTC¢<ý=Ø1¹ã(Ì0±Xì½Ž£-n2×0Eì#\$UÓ\$#;<0Í|¬—° Rh8ÄÃb;\réHØ6\rø@ž9(×´Æ1»Y¬ô&ejmÁ+Å‘V¨ÉKqã˜®EŒeì@Âß Ì(Üfc#)XÖk¤W‰Lv™3Ú÷t¿ÌèeÚ»„¨yEBÈl£ü7\$ãžÜô ¼gìU„Ã³\n\rk^„Bˆš*º¤€PŠ<\"Ã—¸Œ»±†[CÇ¿Ìnx…ÅnØ‹ÒÏB’66H SFÒ¤¨èÞ3Ïäðà(c<Xì€¨7«‰ô¸ü²V6pŒÌU„7¯“ñ (ðÎ0¯.6évÑïÐÊaJcÛnÐ@!ŠbçÈø2Án9/HòN75É*N«.£köŸd7O	äéÙL§jõÌn\rd3U^w\0AŠ<—Ÿ‡îFJ1&O†	?¨¢òN/G±r*ELLIšl#	ÌYšbºHrEïº¾“¢™“A%©áÞÆÎ–Á&	h9‡rê«P\$(2A4üÂ”\nƒPªD¨°î£`Yy%à¹I)@Ü¥2™Šêp9©â*GTåET›¥X«‰óÙ8Ì 'tžP¹{\r¹ºžÂ`ci:¢žAá	A‰XÃØ³	¹‚3&B¢#d\$<‚@\$Üj/W €RˆP¡LÆù»6):®5¤×\0Ê«\\ht ¨P­ö^Ù€w•è^!¨bÊŸâ&ò)‚s5i,}òÕ5rt(	àml†l0‘Tó\0O\$Ð¨“’DCÉ¤”\n´­°\$¶«MÔ´2¸€’ äz LQR 4= ÆÌ„é>„ØÂd˜P	áL*dÞÝ	ñ&Œy;Íp¥+Ø‰aXSþM•Âò¿Öòüo†9ÿÆ4ß¹+!0©ÂYºé§R?'Ô7‘÷Ô‹»X	… ŽÚ0T’ÉÝV“Ùcçtð2f ˜%cíšxE®ÈŠÏÄmIZ NT(@‚-Q\"„À‹V‚\"0Œµz/bý4š)«\$¤¡:\"dbÃ“Ë'\rP81¤ZC1:¤¤ë“œ¯ÝB!/iêÀR÷˜e«<†X!9vÊ˜æ |pÚbÀx‰ìÊ@MöØò†LRZ¸cDÑË7ë<¼[”5³“N€\"Ôˆè[Ù¬f)´‹€ ¬‰Úzs„‘=b^›©2‡UT16¹ ¦!\$Ó’’X¨¯§ñ)Ñy›=\0é€ª‘c%Jõ5â²	¢>!é‰]´>nšÇ•ç‚ÌX·8Þ¬‹ã&!5’ôÒ/\"­5Á”;Ûk`‡¡b47`ð¯–¢Ö}äžàT‹B2Xa\$ž¶|Øåy64Hÿ™³ìJªI+Vòë]ðÑÊ\$D{0ôœœPneá„aŠtë“ºß\nn ›™#ŽÐR?QI„SPHÑhDlÎA¹ªô¨Š*¸T!\$G6\"]“©–³˜ÚËvâŸì{I®°Ó »Ax !ªµÐ\0Ê»3c„ÍËÆAfbºÅÑ¬oöè0ð»sk¢&¸\\Â‡@\\R»½tˆH—<òN.–|v¹ø¨g>èˆ(mÐˆ¾A¡ƒS)á?+(<JŠ»s.‹Îú8’iùGf¬pÎKE/\rW£Í–¯Ï±ÁÅhÜòL¬ËáÞ»’DŒ1YW)DÈ†MŒ©,ÓÙVþ:6ÈQ1nz*Ðë\$Ân“Â2\$Ñ’´Ô=¾I¥Ðb×º•	 â±Œ\nÈ…O¬ÄN÷,I±Y/øÁ_šhVÉÑMÁdŸ0‡\$ZÃI\nöX£*âŽ`aª¬Ù§«*M™¬g÷0kÎ/‹A{?¬	añÒGh&4/2vóŽQéIøÿ<viÉ¿>Pf´Ó_Ð­ñlÙNRfÛ—\$æ¦,˜Öy¦šùè\nÓAÑ'ÛvaÁ±»d¯7¨çÎóTH`F6PíÇ&v,AND‚A@’°~¿XP	?ì½y‘tìNx9MÓl”`Á[ƒ°;×_8àÜ¾—šõ&€¡˜.BXC )E=ÀÍs-‚ß-*`´üÞF>ÄÓÝ	O\0èö’ÇX\$Çå:‘èV­ÌYÿN{Ÿó¶·Ðxî6°Üëoôbèûõè9Ëiç~ÙÏCfã}?@Ç¾Œ9d2õŸô³¡™ÝÏCñõÿðÛçÅƒ‡ä\r‹4:Óž¶öóL<Ã1*/^ãÔæL?>3^ÓÑÏÁú¼6	šæ²/Sd]K»Ú0)Œ\nÓLnˆþ+*Ò'Ãp¢CØCàæ?Èþ§Òÿ†z„ÀÈm…¤\$ÂòÀÌôF+6µ¯¬aB^—ÄÒ²-\$& (RBïÎÄ,\0~kXXŒ*C,Ã*ôÃ‡ÒvO^Î>÷%¬ôe¢\$¸±O½oÔ0Ž‚o€—‡\"µP€ø/\\³FØÈíø0plI	®<çïØ¸Ðœ¾m7¾É‡x\$ðœ_EDÆ¬D0§,ŠæÑ*†}Éì=@ÔÐ”û¯ˆøÐ‚û/tö¢húDlöp†Mpôül,ûFøx- ‘ÐÁBŽ¶Fp1ÆJËRÃ±ª¼Åq•âz[ä;6é‡ÐEðãÏF àâ;†°®MqE‘L†/ÈûQB±F‘KðµQUQYñì;qi¤ÓîfóïpøôI—\0ãçðïn÷¬›„Žçð—\nf@£ÌL¨°nü O,JÅñ’ö±¾Û1Å1žDqÀÅÄŸféq¶C…BPÇ.cFÖD§é\n½Bíp§ÀÒ& KIê‹­€ïÄÈ Êe‡²ø\$^Y&]±)„./íäº2,ç~b/ÅvÍmèé‚H/âY1ù\r*}î\\ù®ãÐs%åº`)ëB\nÅ`†H ØiîLçÔÅféî£\n#\n@ZfbÜ*j~IÚB:y ª\n€Œ p}gd1ÅÈô\n|q<ù,Ý&K-+ç,06ÒäX›Ç„f  ëDbÇÜé\0Ì+¬%¼ìQ,q#Ö= è=ëŒÆCÆ¤£Í¢²hlL)ØaÂö.¢b\nfÂJ2ˆT&JZU­4jãnHs6;À%˜XÌÉdôí¸~Ã\rŽH6E²ôÒ6ÚãêÆNö³`¼)‰&gd…p7“tò†éê'8ôËÀ7Â\n0cP]ÀÊ{I0=‚l¿'¯7Dcd6fHW‹ Ìss8ì“4ðÆ†èê(s ˜h/h„ï®îïâ\0‡ceàÒ!F%)Ä6¶í^Šé:Cúc‚ô?“2|.Å­/.¸2\0003ÈÂsk’†…ÇHÞo\"µ†Ì8”6ä¬áS|N1g¤ÐC`Fdª0¾ÓFD%vO@	\0t	 š@¦\n`";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤»7ã÷»ó¶òI61T7r©¬Ù{‘FÁE3i„õ­¼Ç“^0òbbÊ*,ÔÛÀ:ôGHå:Þ¦Aˆ7mXÊ5„\n‚¦ªŽNJ´×««Á02Ž ô1Œ®{¤Ö?ƒ`æ5˜kèè<ŽÈb‰¨æ6 PˆÖŽ¯»~â(p„4§£“Lñ¦¦)Jã(Þ6ÂƒÓŠc(ô\r±0¦<¨ÑÚñŒ£’€9CL„8 B@ËñsZÀ-°È ‹\r#C¾PŽmèçŠ’°Âï¯£„Ñ5\$NÒx»¾hÔì‹ÏôÓ@A\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Ç¨\\”ŒáxÆ9…êËø7M£xÜ„J€|˜	Üˆ7BàxŒ!ðA\"6(,9¥b´H9¸è¢þC{àóMÃ¢–5µêX(\rãÐÚÒ\rÍê%55½³m´­ëfÁ\rcªÕ¼(“p5Å¢°ÂúÉvŒ\0Ä0¿`Mñ}_‘ý|ßoÚæñ£#¨à2Œ`P©B\\†ž“É2-‚4\$ÀƒË[±b±†^ŒcE²š„2Þ7Ùv5,ôÃ¨Ü5ÃÀÏîd3c\\P5Œ:t4ŽÒ¢-O23z¶84dØDÔX‰°mûø<˜8ƒšLÃ’ç’¢a1:/ÌÑ'Q	».VÞÐ–£¶ÖÅ°N‹sq[Vã{eL…ôç[ÍÊ£ä²•â<Ž‰ÌÑÂ\r3ÇÂ•/(A¾S(€\$-›‰#j\$91b(ñÏä<G‹µÛ3jrœ°ˆ!qüo#ŽÖ;Ð6ZOJŒÏÃ2„7©Xž2P3kåµ¨NÕ~7\rù3tŽk˜A?Nó]š…\0õè?‹ò5%µpÔs`Û392šù)ðÛæyÈ—¡éz”¬PÏeo³íŽ½ß¼öž`v|H%|¾S`a_KÈ\r/)÷¼Ôüp_ëômOÙ<¿ƒLþÞá60ð½§ÇQÁ°3DEBh/^ðk'€€!…0¤p xa”í·º‰Hm0LZ@'„ñ»ù&çÐ1DÔFƒ±À2æQt’¶¦ÛÌ?IŠ“`‚§Õ	Kf°Ç½ÕÊXòV!ÌäþŠƒ¤(­]«Ò¦—Õhn'è‘¯?„XöSúiE‡iî¦ø†}Ei÷|ùkÂW˜Q™J,4DÕç„¾‹#™OH²Åõ”š•RêeM‡u;*TŠ™T*¢yU‚²sªÕ±B¸®•â¾XL¦²`\"Šµ5¤`%BNãxsŽ1ýrâà¯ßë(r¢ô’‚tžÅI+/%îcŸ@ôv‘è™\$>!BŠkÚb!2ÂújN\$Dƒ#Ÿ8Ð’‚\0 € šÓ`V‘h„\n\n€)%o¨4‘ Ô»\n„A¢€Êç[#>î¹Ÿw€¡&q;yŽ]BiÅSQ'1²†.ˆ¢Aä6A4}\$+<¤¼Î6QDSÜ(\"T¦f“¢kBÓµ„p€Èî‚—é_!©ÿ*¸6DŒzž h«‘\$VœÃKÚ]ò¥PÂöKú5ðl£9–fø›”Ú?“î<¢€`ÏP	áL*94ÇNºz{­ð«’‡µNŒë)\"o0× %\\ƒHg§F¨CRÇ–£DŠ5\0+A\n8L\$¤œ«ÒæcÐ¡#Ä€‘SPÚèé6ÁRx›õhJMŠ¯OhŽ&ô¬•M°\na¤=2ƒ¼MiIk%&¬ž¯ZŸCÚ˜¦‘kÜæym­¿¤=2Ä”ÀÂ™¨N¹¤Ýy†€µš˜©j¦0\$M?Un;'nå¾¤¾Ì‰1\$³d¥u^`çz\rƒ“'L¬óD™ ‘dùÖ·ç‚˜še_T’(‘:º\\Ù…=×Ú·`üs–3‰:.£·Öþ•]ÖèaèŠõ®}&)p<eý¢ØÐäŠz—Xt˜9Îéá<–ÌôžÊ¨\\X(  ±M%,7. 	‘[ÒÞ¯bîQ„1…¡ÍóÇLÄi5/æ,'ášSˆž[·Ý/ß©ŽÜå%d´þ\$j ¨M2y¤ì2.&zÃ²J-c<]õÆÞ‰\"8Îˆ˜-Cè­“ìY“!&‹Âsm©6¶â´â0äŒÃ:U»úã­+¤RÂq5‡~6ÚcKAÙÜ?h\rEƒŠ&ü33&¸sÃ!2›ç9²×M„ÍéùKF´ ¡ˆË]S\nP „0Uê!&8¦ÝšÂàJÂh=çRùðôº—ø/+ëþ%´ÖÀÌ³ë‰çpmÐÖÁßQ5m±þ\"‰´Ôr*Fâ‹¥ìÝêJàœÜ{Eµ&èúÛaæÝ‘’Äâf®õÀ—	n-Ë¾nNI»ûtðÏ8&ðÂ|#…žiVá_üE&9¤dÌ¬gâÑE;T‘…i+_ü«uÓÝÛ»ø7‰£™¶¶Û.xÆî\r‘Gœînx¾y¡æz\\Û‚Dˆ•¼¢n§^¢¤£4ò`ovê!ä~¯2‚‘e°Në„Šß(N¾Rž•¥æ®gÑ5™kRªW]ES°b²<¸e%LûÚîå“ßètMÈ1f#\\H·®%=÷f¬öÿMC®(l[Jï%ÐÒQ‰JG=ÇËø#tb±½nOáq.ó½ýÇ<ËØ0Ï²tÝ—†’ì×æz\0G½w¦*Èê‚yës´ö>¡é†L´·>Hø^ž’ýñò	_Ê]2H;\\%ŒþÒ¿Ñ%s˜4MGÍä|¸Œ‰’2m^™Z#rÿi`ƒzT8R[!Ò*j	ßëÖ\"·¡ÜÏ¶ø¯ö\r…Ô	\nöe„LÎb²Š-ìŠ/ž4¬aààô+.æa&`@\rb»Eà/üÅŠÖ¬,#ˆÀÏÚsoG*¿Ïx¤ÀÔVïo\$Ço\$ø¬tï~‰ÐfÀO‰¯pv'öB5Âs`Þ*lÂúˆÖìgð€vp„ãðŒ%`´ bt=úC\n PZ<ârMb<ã°¤[ôä‹¬âƒéKú\nÐÀªïe‹‡ÐÊß‹¬²Õ0¹°ÜõŽ:{ðæyêoÎJí ¶‹l;í¯dø¯Ž4±üí8‘Ñ#+qìŽo®›@Ý\nŒü\réþêc|lGØ]‚ú¹ààC	fP&!Z(ãø\rHNÁ¥Ø…F²#Åò´\"2^¡zTÃ›©”dc®Qäpöð\$\rÌé­<<Ê¿„ÇÃNAãŒ‘.ÑQÑ ‡ë|l¯–ÐlðÆÀÒ¼1TaŒÜÍ‘+/\\g±Œ[‘ß‘7ì&'…‹	Œ([ìØÖ\rd‘JýŠú\0—é¿±ø\0ªÖ2 O›qçÐ‚H²#.ªÂ'N×22ÉÐª8‹:ëF\$x	b*Íbü¥Ä¾DÊæP<æÀCO\rP÷\"1å	÷\r0õ\rÆ4¯0·'Ñðû©\"À@Õ¦f9±Èpl7EÕ#p\$’”fŒ!…½'¶]O´Ããâüb’\rb€@I'	r€òÈ'‘YÑù\$©-²Í!N-fñ)ß.’™*G#rø9Ð!2Òso¢D‘(±<õÍð\\Æ!/Ì)-Òä«0‘ó&Ò+q-3-112ã3\0µ)\r-3D±2ÌÑí0DáF²#CtCmx¤±7'1èK&‰6qÛ.ó0\n³dC³A±ôð Ð£J.2…\reÅã#\n¤@oÃÐ¤jJ²^¨VærxX€:H£:…\\Êî)àæ¤#S¼4s­S°Õ:%`–#(=þlhTJc»;á23¤zcªhòäpì\r­ý;“ø(CDáÑâSÈ¤‡?´4®DâäËdZ@Øc¼(fš{®î]Ñ2(‡²Z„ªœFJC»1±´<dÅõDf›ÎÊe\0ª\n€Œ p%sö´çA”Ï;nG‹R^ÓÃÎ'HN=HoB-÷H-É¸*\"î<ÇjeçRøEÕ4qÊ\nÀô/í¤F OB1`–#/ÄBƒfT¯‰r\$Ãô{±¢@4Ê14R\ne¤^Åà·DV5vìK8\$kÄžŒ*ëu\$ÞFÆdb~Ô,ØëO¤ûÐâ’'2-Ìú,“NOëÎ|ÄGSO…SŽ†{Bˆj^”TFÏR³mÕYRz`àðCÊ(LÐì°SqKÃPDÆxÍ…“¯¸É\"Dd a4ü\"Fül˜(‰gË(U Ï1œ+&\nÂt˜ñ`ó\$3²/8(Ã\" löÒh\"<èur=\0´@e¤õòhsð=ÃAS\r\n›KÞy‹â›ÂšG	Ä¿¬PÆÕ>½%™TõS2ç,¦j\nÀ1ŠÝ¤h!Ç€";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶B\r¤gºÐ›°•ÀÛ)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%ÎxäÇ4{ˆÚ¦##°µ°8œ2Žƒ´\"5¹«\$(´BbžšÀâ˜ò¨,¢šð@îËü9-ƒ°Ü‰éÏê0¨ëŠµÁÂ‚È¢ãsB­Qxx0„Bz3¡ÐËŽ˜t…ã¼¬\$#jÖ¼¬ã8^¥KãÂj7 ÃxÜ„J |\$¨ó`¥à^0‡Êæ9ã Ñ¦Pê ˜£&©8¬Â\r¨ÉB²ž‚¿#¨Ö:°9†C4ˆÀì4Œ£¸KÓ-J|	ÃËBØ\"àP®0Å‹XÎ9¡£ @1TÃ(ÖU¢kX	cz>‹?‚¤þW£kŸ!U‹ø‚:¬aà1§¶;\"£0Â:ì¶Ž¯åSQ PŒŠÒcLÌè62•kƒu\\\niÓ¸4Ë8æ²3Iû¦Ü/ö°Ø‘>èÓ-0Â¢šœ\rÎ‘BC\$2<N\rÇÔC`Z9Œl•áA…£ZÉ ƒ}>B®Ñ{eOÓ#KEŽ‘¼sPeHÀæ„² PžêÂˆ.h0ÁhÅ>¹Ø(-Úðµ/ó`á~@â*W¥ŽL6nËb VY—?‚ …xhTualÀâÈÞ‚Y. Ì3b*¤tÚŽ°p¨7ÁR\0òŽLƒ¨Æ1¾£˜Íl\"Ö9…‰€å¹Œ#8Âµ¸Êe-\rÖ`ÊaJN*ŒãÍþ´´\"¦)ÁjÆ„©ah@×ÝÎ:•Y6ã•Ž“‰Ž+Î<\rXòÆ‰8¨42I[l³£ˆ2â#'…p#Ìƒ\$H\$ÉrjˆÙ\nØ˜®3”èûï74‚¦ ;n\\.ÍEÖ»ïÆÐÇˆË“¥*€åŽÆ#,gœ¨^òuð…Á—%Z²lžŠSJ©],¥°ä’ê_Lá•1¤Ê™ÓHsMi´¼-\"õ“©sO/ÅÝ‰Lù¡äé•³”êŒ’p{ÎR:Ô\r3-®Á³&)YÉ\$åÀÄÀÈ¦ÏZ9‡…Í×’&èòIÁ:2æl\0kmˆø PQKÜ&–Šcöx‹‘'i˜‹†7¨ƒQÕ\r-2—%eº\rÁ¼Ð–Ò>Ëã“r®\\¹7Ôv`N!Dn”ß¾ÂTK	qŸYx3åÚQq\rè¡™›Örè—“°|Ê¼ÐžòÞDCËc A¥YG8béÉ€hQäô8­ÓÈŽ±/x/€§¢æÈú€OJ<88VÔJ]ÐP	áL*\$m¤™\n’¦mÚ‚ö@ÛÁ\r¬)€ò\"ÕÊa«(Rf\$“²z{\nXiNÏÀ7@Î¥MÚ)DœÇ‚\0Ödˆá\$¹“‡x ‚`-=.À4¤€Œ‚#)µ¦‰«,DUE­q-žP¸æP/v¢B—xO	À€*…\0ˆB EfÔl\"P˜i\n0WéH\"ð «J=´µÍE¼[NàL0ˆ0’‚”)Ž`F\rŠš@®*†rKââ\rG´9G,o¦3>h±3ò€j\nb/‚\"jíTjˆQUU 3fphZ½V?7·€æxŽ`VU“ö­Z¥„’h'iø’\"tPŠR’*‚ˆÚË“èÜ6×Ûéã	¨\0)ƒ³rÓxT.¥Üèô#mqÊ6œ-3¬*l{7ÐÅÈdA?OŸVJmN¨Õ8§¬Ñª0ˆ•—ö`iQã/á,’°Àš0Å)n·ë’†btµ/”F‰¬ÐÍýÌ\r—8\\]òZMûCGð¥!7ÒÖ†Øs[Ýqs\"a‚’Ì€Ì4ÑÄþYmfjˆï, ¨C	\0‚VÑƒêgÍ,¦…ÁÂG•ÄCQžœN¤ú‡H\\b±\0¼«+ƒxbÈJ·VF(SÄËj²m·q¨‚\0žÜÄ†0aaJ¦Ã‘	v '1LW	\r/Æ8,mŽ1Ô;?e-,fÊ ‡Ø±µaéßƒ&,È!,b)ÝŠrž@ÅÙp‰ÂFÁ\ràoêÀ¤â:GÉ\nâ§¹¾yÅªßrÍ(áÊ„¢rþÃ(b¡D*}SÛá!¶\$«À±‡	4ê0nkÓ¸Š›m\"ÃPùg öPYž_ˆv?6‘uN@kz«äŸRjiaQ¬´2Áò„ò’<vÖnm½oW¦»5F²-_S-°¬æ¾ !¾³ê»)¯j/\r±Ð³èÆ«!ú/·ÞÓ§bKÚˆi&)›G´5XLw@ûƒt= ç´k¦[m—yjÁØÛÝ°t\0€©Td#\0¢ÉD\nU%4¿\rce+:¶ÎuLK¬.µ·p@nt895hÕJ¥Uõy–ÙÜQ pÝ÷X›;~š£`rŽU©ä\"ßœ¤ØVh¢ó1¬õ_¨\\ß®YÈâR7‘ÃN9Ø 'Ÿ%¾ÉØtè˜Ì„‘Ò«\0FºTAylMª·çZ9×O®ô\rõÎv=\rì}r‰uí—³wåÄ_á•ÑY§rXõ+Öù]\$ÉdºN}Q4\rÀ¼–uÐ¶ò(3„ú;¬lž.Cï<78‹6,a¼Z¥Dž§s;áÌóCåG=ö»¨^	G‘gÊŽåÙK›sçr¾àVÙNó~N¡­¿7â;9G{^a³9•`T«jÛßNsaxo»ß\"úü‹Ú>_Íœ‡°V–’~’9jlä4}“ø~7:ð\r‹1†¢…_\r²ØèDîÂ«0Ê¶Ð?M{}‰«åüû:™¬Ë³sª\$ï®o`Ü\\¤ÌeB:ªÚ/…*?¶40\0„_¬j:Æð bzBöR†¢Xeà)£ÀLúùNQÈÿ¯€ÿð:\rp>ä	¶ú¬e#J(TËôâHL‹(Xo’å§mO¨þ°f\"a\$ßë¬¼£pP\n‹®».MÇm	°“íœúë¾»ÿ°¤@à¨”Œ>Œ2EPœ °x?°ÆöðÍ\npOc4¾î?€Žp&b’i¸Æh¶\r†~.L5\nÜšÊÞYVËÑ\0o,¢Ñ\0–Wì4,fZ-ÀƒOÆ0Ì<U0êì’ËÑ0êËÉ\røcò\r€V\rcÄ\rlj¹Ê†ä/¨@ÊMö4ÃZÎMˆ†C<ñ+€£€¨ÀpsÈÛ\0dbUÂNÆLŠ‹FÁ­ŽËÎ¨(B¤ Š.í,Pœ,hñ%#V×°ƒâö&mÒ/ãzÔÌóC|Ð†#R„.pT&\0XXÞ`Ò>ë¢©H9ì²Dî@ÊQ‘ê9bþ_\"0ó«Ö4(Ùí†=¢‚ *ê«‰¬cÊ.¬r³„Y îýìò¨í!éµ\"(µ!&rcÀàS†¢Ù2ß0É	mx2’I#ƒBÙ‚b2*àÖRD2Š¶ŒÖ^	2›	Åê(	­¨@îà¦?ì`ò€aŽ´œF¯B®ÂtËÔ;†o%¢Ú)å”-Š†Š«(©kÐ©z'¤r0Ê„¨>aâæ­*Ë,cW²>:o+º0B<c@¡BÔ’(¶AÂ.\r@";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾<,å:ô\rÙ¨U;IzÈd£¾g#‡7%ÿ_,äaäa#‡\\ç„ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½bÐÂ•=j^ç pã\0<e ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÌ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Úï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá¢	#hà·ÈïˆxŒ!ò 9„8é c Þ×6ˆ £&\$Š¤ÒÝŽ³59C ä:·£««)3ª+Ö++C¸@Í NH¾¯í½–RY®üx2Ž¨b…4Žiô\nì:º7ãšˆCÊH„·EÔ–½‰ÒIgÁ+ÄPŽŒ8 ¿ƒxZ\$Ênð\nÔƒG )éBœ·²l¸Ab¦(ò@Ïz4¤X‚3¨Ã(Î‘ãÛ”:¹e¢­J*åd@RüóXÈõŽÍÍÉgŒ´¨Ùf%—Þ/‰â¬A|ŒKz1ÊNÝf‰w¼¤2\rùvj’á²xÓ41s\\©f@®SœÚv®¼…ìcÌÛ±Œ¾µ©ÈÔµrU:8L°ªõˆ£Æé38O] ÀhÛ2I´k„¥!‚·¯Œ V õ•ó¶­ è\n7ŒÃ0ÙF¦bÅ#ˆÛ-7C²µÀŽC0Þ•ƒ}b&MÈZ+lÙ\"ƒß”îèë@–„\n ‰¨øƒ\rÈ¸Ðž )ÈØ=\"=Ó ÈgUÖuÈ7a7ÝŸjäwÔAÞwÞ‡árž'v„LFÅ„jè\rÞ’f!ŠbŒ o4Çr\"Q_+»6.P#&PÚHÊ&Vç%lö^BˆLs®|ÀCüOK«c¥x™…CD”ÕCª:ªä€†p@C\"Œ/aÈÖ†2@B( OIð2§å4Á>j¹.EF©LùŠfË”2²°Ã,'Ä 7ÖRùá{?†íüÁÔ H•A5<ÁÈ§\$ÆÝ^)N7qDÀDè¨î!ØhO©ý@¨5\n¡ÔJ‹Q¡ÉG‡%\"FÔ¢–d*eM·5@G³ëˆê˜Ð\"ƒj>U”Ö£7ˆqƒ‘9dE<Üª“ðBÌU>.ÈÄ²NdN¨P	@…2Z¥ÌÂ©W* Þ!WLVÈ9z&eåF‚\0ŠŽ‘Š!‡øÒœNœÙ[2’öž¨SŒ‰œ~’ªVKù‚u&!DÆ’žGÃ”'tOì°Æ…W#CUîô4ºfH{Š ¦¿PßŒo:A™Ê Ï©,…ñuÐ†Uþ¡Q9B¬dÁ„G(NI»Ò„ø `‚ÍQy;‡!/T(²ÅáH`º>rdî`R! ¤JfÈãì Ò9XÑpÌ}è]5lHŽÃd¶‰a´Y¥<ÑøªÑÉQZ)F’F›2\r+¦3\n<)…@ZÃˆAÐ“¥7”§pj`ðzo´Ê`ŽQÊIK¾¥¸ýZ*Yß ŽQÑ\n`PcÆ‡-6„U„ÈÓ“ Á¬¤æDþ5\\©jÈ&Uv¬\$À ÁP(œFk©á q6Ã1#a+ƒ•nxªyºÖ2f˜dCì^&#\0½Œ\r€1<'\0ª A\n¹[PˆB`E·kÅÈÓÂ‘ÑåÇ¦o0uTÙ’[<IA<8P¶Z	¹=&L'Iú×Q®K÷™ÍàøŸ6ZÚœ9ÏŸâò†ulÖ\\9¤ë\nºÈ‹ÌX*j½19]\nEy~ZÔ læ	8»ã:˜œÙæ`†4—ì×É¾\\ÎÒ‘²N•:©1@‚jÙ¬tæé*+ír6Ø½>\"§gÆøà‡ƒlÍÖYæÛVr‘RÀPk'A®V5ö®I`wWwø((ØÛj{§E|^»ÚLÉ©ÔÁ®lÎ9nØ\"ÉÆkD·€¦\0l°>^ A§¶º‚­#w§ø§N†„lLRÔÚ³#k‰Øh»!Öí·âèÇˆTÏä°êç¦kŸ‹U‰æˆ3@@“d¿%ˆ®®h&Io\rçñF˜É~Õ4©´¿'éù¢\\àð%º\n!„€@by³7g{!pê'”ð´ä¤·Ñä¶‚›KsÔÜ˜\$§àËð2ëtÎ.Â²ÌÒ_a‹bP+øKLr†·e-Å¼ƒUó˜à'aÓ‚\rµáé‘Û[sg­Í¢gw¾s(B^ÖšdÓPbS…§¡\rƒcw.Å„n¿}Ñ¶S3Ô~üð\"ö¡Ã+Êà9íÕÂqøsá	9Knò_Ù¡m6<œO,|Üí+Á§‹l¢BýPHRòGÄÍ‚Ùô´\\i€b6–…m!,F„¯ç1†“QÄ`°Ãq¢¸¦0',+%¯ÒÄj‡®ìäÊnˆ¶m†0 ­#®b1#RÛ~ù¢k`\nB¿/²_NÎ×\nÝï#›0= ÎÊFßÇ2Wá¿­.îöo)Éï˜Ðƒwüš{‡ï­Ã8'~.êG6+kÅ¤£¸sc E\\Š5‚0bþÂ3\n“½´»àà©ÈuÍB·Z±šä±êŒS!=~FåÊ“êÙ\nà+mË1æRYâoÆ_g ´*/S—Ì\0(	—HÜ›‘z™ÑíÄóÀþÖšp†5õ)å~¾¤z£ëßÃôýúÔ@·à)¸Ï¥Ù¼;;ëF¬ÏþïÅ€ÿgöý#õw~¦ìø=`¤ÓiÐð¯¦àî.ÛgŽåŽæÛâþÜ-æ&@\0m8/oÞï×m 3máíäìèm«T#î6‚vñ¯ªûÐF\r°J%PN0.íïúãQŒìµ°QmNñâf\n%²0 ZF€@ÍÃ\0`àæB:\r°b#¢>6\0Î-ãš\$\$Ò„—\"5§ˆäÄ9í®°Œ\r‘	Gð„&+.T³JÊúx*Ä÷p¨~™CÎ+	BoÐrÏÚtæˆp”Î,æøëŠ4,öÏ£Y\0ÊYOý%ª¿Ï¦¾Ïæ…“01%16À>(­+PV¿BñGïù\"gñS¯ÇÃâQPž¯ÓÑiq>>¥òLÃà#`	IàIKº~èr_Ž4âè>¥p”ÓP+\0ÏáÏ¬&p)\0°y×—¯îü‹NbË¬ÌÅœ\nžæ)-c€ÞÊ®…èôâ6U\0¤2 Æ\rf>óïv\\É\\Ö8Q®íæ+ã>²\0f±519 ò QTø[2ÿ\"’OŠôñTþNÔ„°¯±e#qÄZÒI#M[PTÈÑ¦YòR:²#®ù%òÿK&‘ÐÐBŠÐzp„lPQÁm@)­HKÒa±J&dºAòŽþ°ÿÒ–ÔÒE!¢*L\"‘\0±f¢ƒÖ\nàÒ@¥~Š…ÎÃ‘Ëª‚UÍp,\r,‘Þ•îÎêÒÒ—gZe§à˜Ê‚¸äÎ¢î”;Gà&ø4Âw\rÄB\0†WÀØ`–sqòaäf0£°ì/&U\nî\$€æ*‡(BP¸U\0ª\n€Œ p4ªØBÐ°0mºìc9ŽJå.-p:Aðf#³Roý\0î£/&:¯*\$íxæTØ£ŒÎ5,böFL0ÎÀ˜N†AÎD®k–#­ Jƒr68çè¦‡‰2b[ é„-Ä|Eæ’(å‚:³Ö	‚4IDˆ[ Ú:&Ò¬·B:ïâ:ŠBàN PWÃÂiH(JðœlÂwä ò³âíÂ:\r`Þ-?¬¸¾Tú’X>/’M?“Þm^­kª'Bã‘'Çl)‚;@ƒØC¯2óbö¿\"ŒÆâ–ÌB6Z­\$•ã„w&î+Ëò30<I@¬?\0ê5âåCeÅê.'D¬ÇÑÈ22Ä50’I'ÖIsê4“îWàÝ?@Êù¦\0‹„\n2Ï°½*ÜCPXô\0Ï@Ê¼›AL_\"òE£¦Sæ’tŽ%&#ƒI'à/b";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdABpT20Œ:º%±#š†ºq\\¾5)ªÂ”¢*@I¡‰âªÀ\$Ð¤·‘¬6ï>Îr¸™Ï¼Žgfyª/.JŒ®?Š@PEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD†±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1to&KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³1œN+éÄé\r¤×íþ«ÌÁàÂ\rÊ3¡Ð:ƒ€æáxï…ÃÈ6#pÊ9Ãxä3…ã(Ý–¦\\9#~^0Að’6Ž`Ê6åÃ xŒ!ð@Á\0è4\rã @:\rá\0ê9Œ¡\0¦(‰ƒNdß²K‘v³Ï\"\\‘±Öíð•LêãêŸ¾ºü{l×:ø¾RQ9FÍKâŸ@[r-¹¢¯œ+»¡pä¿ÁÖÉ:³DÉêçÍF|²é\nãä7d£:>éÃó™<àAÏfHý¦ªÁºýLRZ¯¥jN	®¾¹65;\"ÿ¯U*Ø†Upß´ïmê³¯\$hrž¨§2ƒºH».@Qõ›(LŒV”7¶”²\\mJšólBp)lûÔ½û\$ª¨¥®Žå|È]öSBÍÔŠæ¤\rmSc`p»JD¼>Ï\"”]Já;- g&†üE‘¸/*Tê7—†JEb¿=‹ì€GÒôûW	„‚®Räñ a2B©A»óÚ›«ƒ~L g/\"B£aƒ‚@N¼RŽƒVÃéoëkŸgîõÏ|>BñêºòÝœ6†P=×àYQ,[åÐçžÇ¥NV‹Éj\"E‚*D¢A{pæî%æ½‰ëe,¯!}\0 ˆ—äO/Dáf¾}^lÈ	#ªBÒŠà!ñ_Ÿò,ˆñ8`î»cæAdŒp…Ç\0¬“´6ô\",IJOGÓ˜±‚Ï7yºU(… [Ù’-€»áõ4¬D6!`Á×‘m!è<#X€KÎ“¤¥Z:¢Ë(–‰:%2˜×J“¬Þˆ¬®2rÀûK\"©&dš\"Òá¸ éx´,À'²a™ˆ×æ1†,¨hÐUŸú“`¨|!…0¤£zÔ?d1.§·tä‰¡\\[šu4ÝH*Å’DŽ\$ö¬Ãš¥ ¨n\raÌfTÔ™ nà€ ²6JÉåÀcfÌÐ22p@Ã˜ƒbŒà9‚ |°aŽe¡´S\n%Ñl‡T¹•œŠeÃçJî%.%ê“-&á¢ô6y’1O²)\$Å‘v)÷÷\0	2ì=‹º„ˆ%çN‹b¬]Œ±¶:ÇÃ»!¥Ì™”2¦XË™ƒ2\rÌÑ›úx êJEiØú—%H~ê+FwQÍVÊÑé!RD§º5\"lƒ¡)W¢âò}°q\náÜ+'fÎHÃt“yÄ*V0ûDW‘\r1¯›. ®#†á¨ŒÓ<Öõ/C\nlÍ¬ª\$Òp‘¬3&~TRë.…=[\"Äþ€T\n·DBE''ö-Šú›š*FÜõvB€H\n\0€ RØÏHqå_²ÒwËå(!³fLê*iíD8 ÒƒK>á•§T) i¤¸7‡@@C`l\ráß5Â\n–I[_š˜‘\"V»:»äbÄÂŠS\$w¡wp©ð¨— ‘hÉZ+“ø–(ÎîÕQe}D*Õ¯c×q‰2h11³ÕdX±N˜aÍYö\0ˆ((kôZEäóX€LBÏ ñB¢i˜)e{¦„ÑsK<|Š?˜¥Ðu×ÉAŽÅ‰¾½	Ù'.#@'…0©Äá'‚­‰%äKdž=&\$™·ŸÙ~ù3’V†B%£ìis©m_Îö-¡ÅH!ó\"‰æ‹—ù¤Oâˆ´YvÛ¢d†C ÌQæX”8E\n ‰*^º¨Žusé‘‘nÀ©}™”BlkmÿÅ… +þ—1*–Êjäœ’¾€*™aš„ÍCuÒ&S’b˜«ÄêMË9gn´%÷Vì;¸gT…‚&U8ÎI‡€¿Mð3—\"÷R)ÔËgò‘mRMQÍe¤]Pÿ‹QÊyñü©Å¥ejA¦•ÛÃlx³ýÓÉ­\$Ã7\r+Rq¦J›N/ÊÐqºo\"lVh	˜‰F8gê¸]=^´4ŠFO¡øj¡¾Ó‹…pÊ%•h‡…ë\\‚í|¨¶/ÒÒ¤Ev\$‡]^Á¼ó?WÊÄã';‹4O8'î¨ªñë¥—%é8èJbJÙ\\(:³\0‚ì\$Oß’\\”-w¦õ˜(óR˜\"q:0Õ¨·MºÜB\"‚©Nþîj†Í³å¯F‹KDãZ)ÆFv.B¼s=úÛÆºÛÅÛ°3õ7\"äÉHžêJ%E÷ê^…´.VÚfdGºÛ!À@_!·z\nzbõ%9ì¸Ý¹uðÓäÌGLø­\"ý¡%\0}hcùwÊ»žK’HÈÂQs³Ç}/nÆúìJ,Sï}w¯Ô!hXä¬|&Oöw(šÕJÈItéÀaZDœ\"©Ð|ú\"Ú÷œà‡î ãtú®öCê~¢l…îÖ®ÂŒÈŽ*Kª]\r0T  ¨\n€‚`\0â¦N\r Ê¤‡,j¬(ÂÀæ àÁÀäf@È0¥¨K-râ),„TW/â|Dà@#&œº´2gC+Îµ(†QÃ‰\nI>¡kš<‡ ¿\r¸7‚Lé¡4œ‰¨-­V¼ÐÖ˜p¼GB(ži“P¢Kð¦.e\r¸ZÄ1\r¡\rìr;Lwâëã³\nÜJƒÀRkžRËX4Ë<mË[êž	Ð E*ÐúÛŠtQ<\$q»±\nÐÜ™\rØæbÛÐÊÿ¢sâ¡‘ÑÛ+‰jTÄÐV.ÆkH^	Ú*qfûÎDFø8ðÌÛmxŒê¼•\$r…Kbí‡Né>-\"úÍédÿŒÊ2­ƒjºïì†Ì[çPF10!‚†˜ êNYí®8H)ŠÆdÒšÑ¬[QÜ2Lê5®ô@kt‚ƒ,T,>›lD‡q¢ÀrQÆ!‡Çd–éÑ’HŽdD˜z˜2ÆëzWáîä,Éh·(†¹ƒ„¶NÚ/%l+äºƒe\\‘‡Jò0mëêGó#®!\n'’„E‡&‘‡’VŠû¢Ó(¡k(ïdr”>é‰\"ò?*.˜ÑÏDú(2¬ê©>7’¾nXEìØnˆt±¤/*\$1-\"³,\$Y,qjìiîGÄ-*C\ná&ÌRêùèVbÜ“Çšä”ÊÀ…n›Ç–â„`€ä\ràà³\0~}…g\0Ñº>¨x†‰<ÜmØ)ï|In\\°Ì)“I3ÊÝ†îÑ|¾‚ú‰â¯Ï..N°‡>uÏ´úp`tåÂ”Ø,®F-@S4î'nžê1ÚJÒ†êÒæUÈÞédøÓÐF^îó,ò9“¬^ÎÄŒè.3¹*s¼ê§-³:TÉ/ÇØ÷ˆõÒÈê’‰:mÙ>~\\Ã<0W/“u;³îDò¡sm-ãí73Ëë &©`?Î[\"Ï©\r1x!àÄðä\$s·*Qp·Mú!FéB^‘”'pê´.£T2'´6ª‚JtPµQG\n\r´þj¶âÈÍïê1Á_“,ÓÝ@\$Q pÿGDnÜ=O®B«/³í”n-´\$èt|lsøì“Û>Î›\"Q (\$ â²üîVä>ÙDôübš›TD‘:DdŠ@k<\$¢WÅ\$+sz!ê¢æß-“!±Ñ/#8Ç6«ºË.uL±M”vG[ÒŒë?&m·J­¼ò(äÄm²ýô©G4­G”°U¨B/&PoÄ5¯ÈˆmÖkì¶:/þ/0QN‚2vç¦øm´Ï@³;@ô¡-næÖÏ²€J´ƒ>µD5pù”Ï<UK”HbEKrö9Œou˜nTˆKfƒÑ•9õ:U“U¸!Ò9UxøT»\\b­\\¤’ñZ“ÇZ4¢‡5{3îK]ÕÎˆE¥ZuŸZ««_U½_Š¼&\"¸·ç¦A¶é·îPí4³õt—H@5R¾«x‚óVôF*´K\\ËYAÖ;Í']3Ù^•“d“ÅdÕ3/3ÄEvU@Y-Õîû*À”öc’îüÔ\r_€]ÄY&ÖzŒ¥½gnÊ.e'«`‹_Ö?µ­\\„8ä]&,N\\v¡\r\$,skOFêZMüÄ)@ø#\"£‚ç>s£A3™l‰œöÏjs÷_õçWöFšU\\“öà\"VÐ³µí]Vg<È_fËihéo)›<Vûµä6ñl¶ö-Ö®ZA>Í”ö­A>•Å@*&w/vçj5¡n×f³Ö†NvyG[ ¶ ˆÔ¹&öÀ>dHjJSåXÖCswJ*×jCT+w	e7IF£Ã`×}m6ajW‡ƒu\0e«Ö	h×]iÒ,/÷£5ˆ†åu']ï_ÂMÌ¤‚4w6Ù|EÎL…­köÿxSÿpW+}eÒ»·Ay7G~%0]­?W´Ÿ~\"AŒRµìøÉbdN¿cFó	·G—R}…c\$¢‘×<v¬%Q`)˜#Ø'¢wC±Û˜2{%0ø(yÄÍFK‚\\§f´ ¡Qm%÷Â¹‘t_\r‘p*R¬Kïl(¸qB¸C‡rzöñwuJ.PÔO`†`Ø`Æ\r€Ò`Ö¤ø³e8ÂL.\"æÙ/â2tñ¼L­gwcPqéZñvÈ­©±°C·ø=ou @\n ¨ÀZ”‘!ƒ&Ùb+’ú™Y“R¶-Ò¢Gn³•+TËèD1lmðãg£WsqÓgØê…Å¨B ·¾ZHû&xHE¨Îv´ÖRÐ›éh!dêÇ9QƒTDØ¼DØÁ}ôœÓÏb8Ä€x~_‘UNæÑH[!d\\\$L¡4¨ónJ—bM	²rÊÐLlÈé'Aœ~0û‹„#PvTÚÚK¬\"°'Aˆ÷62Á0‰¼µrR]ãS±Æé”Ó“hØ–RœïR0Æì'yìT9ðå™ô}#}‹ AKí}ùó~å·¡a 9Û“‹Æ'âz §¼ˆYfzT²íŸD<G3Xuu6%gÆ?FÍSeð_U~éWTÄ¢ô‡|(óâósë¦·Í§°úKÊTÚí&ƒ±@Ôkd[!G‘`S+ìM'½\"åà±TP2Q…D§ò\$JEL«ìà9õVZXlþÙ Ay¤Ï‘Œ[’æïK01#óš§¡Q“šŠzåŸšèê‡Â_:'Ð5U·!qE˜§»‡©Ÿ†yi|:¢!5pCÂÓ®²^lå\$NÛ0Æ-Ár";break;case"es":$f="Â_‘NgF„@s2™Î§#xü%ÌÐpQ8Þ 2œÄyÌÒb6D“lpät0œ£Á¤Æh4âàQY(6˜Xk¹¶\nx’EÌ’)tÂe	Nd)¤\nˆr—Ìbæè¹–2Í\0¡€Äd3\rFÃqÀän4›¡U@Q¼äi3ÚL&È­V®t2›„‰„ç4&›Ì†“1¤Ç)Lç(N\"-»ÞDËŒMçQ Âv‘U#vó±¦BgŒÞâçSÃx½Ì#WÉÐŽu”ëŽ@­¾æR <ˆfóqÒÓ¸•prƒqß¼än£3t\"O¿B7›À(§Ÿ´™æ¦É%ËvIÁ›ç ¢©ÏP·Ùûp°@u„}ÍÆ@6/Ì‚ðê.#R¥)¯ÊŠ©8â¬4«	 †0¨oØ*\r(â4¡°«Cœ\$É[î9¹**a—ChÊËB0Ê—¿ŽÐ· P„óDÂ“”Þ¯PÊ:F[‰‚P9Lèø¿Ãü‘?Ít—\$\nq[Jç7olJçˆn\$'§q¨…'¿²ƒ^ŽB`Þ¸Îƒ|•8n(å01¨xþ\r`Ì„C@è:˜t…ã½BƒjÓ…ËpÎ¯4€ñ£Î ^)Að’’¤1SŠã|)AT:Fc#U¤B˜£\"¯	 ­7 ôßÎ0ÒçI(ì¾ä²Ã¨Æ:!q«Á°¬:TÒ v3Â0Íûi‰Ã¨Ê£ÇL¬€çŠéJÐµI-T1+Àq\"ñ\$K£`ê6ÂÐÂ8K´òP·¹âHÜ1±—².0Ž²Z|P¸Î\"¯˜ê6\0ì¹ÚÕë,ÄÃ­÷ÈËÅ±°ýèâ0cÒa–skœæ¤HDj'ŽP«¡ŽcòÁ»ƒ,Òò»³RÔ4Ø•Sü¼Rnx‚1äY\$ÛŠ‰¸Âe,<ÛzŒ.j/W	€PÛ_NmÜ™W¶E¢•LoÌ£3É=¡e)¬õˆlc~ŒíC+Ön)ÌËtÌ›¦\n\r#L„À²E6“^é¨ñÂ1hËiip\0'lS6ö\"I¨çºÆ¬¤aÛ4Î%)Þ3Ï&3	EzÊŒäy,.7§º‹ƒ‹Dš\"29ŒØ[ÿ5­#›í 8#Î0­.¥IUQCv2…˜Rš\nƒxÖÉb˜¤#:ƒ²\nò9Áp@+ZÃf–£sJßˆëû²L©`Ì·\r¸ZS¦’ª=£>K•m\n?“ˆ@0ÅI@Io@ÏàÖFŸy*?„ÈòQYöN\$x¡’¤îgSÒ|)@ˆ2s^xU¢~®±üpÈ°ŸáöD'Ì™,øGÏâ\$8H\0Ð7w”µÉšI/Åà•üÃ¹nUEX8“ôO,%>'å\0 ”\"†ê\"¨°ä£C’R%YJ1….¦\\;…QªUNªUY9zd†‡VNXÉÅ&Œ 1\"2½ÌëK4Ìñþ¤\0FˆB•c&`Ç™ãƒË÷uÁ8ð±cø£ú‘,`Ô…\08oq¸‚”\nJA Æ9‘ÂÐÓ‘Äc+\$³FL[ù¨UN!\0@Uis}!ÜåD´üÈ¸yä\\1ÃD Q°s\"å¤á‡#°Ã	MÈÁšãþÿZ‰Æ5Ï Ÿ’IHŒ9%}Q¸9(©´G^ñð%P°ø°ìH@\n	\$L<™³ú®å¸oa¤ æ›lc‰>D06ÀØªÆIR¨2SŽ’%Q-¡ñ¨&@'…0¨úÉBe'\$y\nsÔJÞGPœ=tDN	Ñ<ýw³Y¯=æyÆ|gù8˜RœÚ+%T†aÏœ&¢}ÃƒéB1\0@ÕÉ!aÁ¤þ`©&)#œDž6P3ÔêÃ‘ ŠëÒc©ÚH8hœ¦Ð‚ hC\nV³„´B‘‰­'… ¥\\¨mF1»Ö5Þ…ˆµz¯‡ø(’\n©Èbi8…Åž€ žI(ÊƒV‰lÎ†\nöÌ4°ÂŽy6<§ìÝ¶FTÌ-ÔÆh£dž†Ü“ê§‘äÇØFHZ#7ö™»¥\$Ðâ­Ûy¶)!\"¬Öîc2™I +?7Æˆ(WYÈ¢ôRÕ;|‰}í\n›aKäBKÓ»BœYÎ8G¨7Ý’”‘Ðf1ŒÅÄ†úÈëShTq¥øïôÍ—¨pygzÙ¢òð£1\rÑµŸÂÒö…Ü‡!4×¢º˜­ŽUK¡Ü+5š…ïØ\nb4æ˜f4Ù–I¿HX–åXâÞjk e¤çâ†¾Æìªp˜ÒJ°#Pˆ„!òsKjÊÒU)2\r7a7VBE9#ƒ5;ÅÍ]£PŒü;|¹'(òÄÐMÅM²/FÜJ¥úø1!P*†q-æ¥ÐÏ™ök\$½&³:v’ÀÊ‘{W0Äjºy[]hËõÎª´bÛ]š…Ñœÿ na>Ú-ÀhÒZ°5À%.]*ƒ´\0cÐF»Mé\r;¤´þ¡CäÐÇš”4GêV—ÕQáo†tP^Žp{¤=UOÄÈåH×Z­þÚ½C;õèØÅçd­•ªva™¶³h]°áR,æ2a¼;¸*§ÚùÜá†²·}Ól™ž\$ïLÇ22Ž²W-Æ\$¨b„ÊR²»>2ð1^`‹·ÍøAß¥I¾–ß°öÿ#ðÝ˜&J¦R\0üL†_03\$-ìæìŒ–rÖ‘‚MeÍ•[h\\¶,ÓÍ]¯BhsÌ–Ú¥w¨®éC›ô_I^\n5ÏBýªeŸŠz èòôÚÛ^í:\0/x…«¤³ws_Mó4g)Æþa˜È`p§d:Â’s\rn¡îûì¬J\$ŽŸ`òy)í—2ÜÆ±,Î‹\rZßê:f—Ål‡\0_jþCéglô×ž¡kœ¨«Ü¼ýô›xÞŸQŒ*–	þO/pÎnò×Étnkç\\³˜è6×aàÆäÿ}9õÍÛš6}DšxÕõÔÚŒpXñÌž¯!šÆh=ÝI¥=æËÓ:·à­£/ñ9é˜xî¯Ÿ¿WÌ-oÓ3ä‹êŸÏkÒ>ÏÔRh¯ëtÏP\r~^ÿâàdŽ08Æˆ¡ÇRôuŸj¦B\r\\½¡Þ>Ïêû‚îˆÃôáZïGÊHD’/Ô¬/òþLh8DÒ/†ODVÚŠ˜½P2\0‚p¨¨\0\rÄ\$üHx^.ŠJ(îÆ†ºöÃvÈ§†Nýl:HÏ¼èå¢é,<ÒÏ(õröšBLÎ©l>Ì¼úï*öLÂ•Ï¿ð‘¯ÌØllmˆÌLÌqbU\nd–žBÐ²\$Z-%èƒ%‚¨\$~7èà@dVË@ÞšŒºÌPŒöæû\rl¸QP‹	nl¢l¶0pé\rÐžÂplmrbîé\n#~¹åC·\n‹€f,¬°«°ó\r°²ð&îaî³§Â%ÕP0AÐvé\$«†/ÏQ%­oLöÎ“Ž0Ð1;ñ[MªBïý\rí‡ú0þZOýú^l~”®Kl‡1‚É1‰Ïoñ†>1slR%Q˜ÈM÷Ãl•†ä^p°9ìÒ@±Š—ÄH˜Réséˆö\"h	ü\rà`\"äcåöëƒÎ\$¬¸7eÑË”ßåtøÑòËk–L±ú\n¸8ƒ]\$IbP.†\rðˆhÅ\rÀÂÔŠ&m%fäËÂ5\"me €†H\0ØiŠ0É2êEÃâÉ\"0å\0ä}\"hÆþTÃða¨êxÀª\n€Œ p|£†0bÔ&8ùÉ–ÝqüÕÒ„–²‰ jD:×\0·\"´Š^Zq +à¶mØí¦­d²8ÃÈfDD/,œnì¸Ý²TmÇöN\0Â¯G¢b\nM„jE(+¨f®°c^H€ÞBƒÂKæÔëÕbC/Ð6kö#H\n îaÒ²¶ÌèÃJEcˆšó/¯0ëÖˆ³çé\"¶n„/Îˆi“ûeÒ£\$“CŒQKþ‰”’#‚Y„ŽFÃðm|«ÂôZfÊŸMögK¦|¸kñs|nïÄÇ,‡Ë\"?â>1’¯(îêÕEÞ±Àá5.ý£÷-&>\$¢IÃvGL’êóâ Þ³ªVKæðò3j³ÒK³47qM«&Æ\\&¢ô¶nŒ_Ã¨d*:ãà@š	 t\n`¦";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp­Æ÷Aßš¸'#<ž{ËÐ›Œà¢]§†îa½È	×ÀP™MÐ.òÊt¼FL°¾öìAH¥Ð7§SüÊœ°M`ÊµI¨¨ÿ°£HÈò(L3|²ˆðÅBpê6ŒKR‚ƒ;ŠààŒ£³œ„!©ÂÑBÚ0Ž@P¬—ŽCX@'£ î´aH#Œ£xÚñ‹Rþ&@0 ‚…Çïê“\rã{OŠp7 hÂß\rÉ2ÎôRjß#Œ’JF‹	ƒzØŠ°L%8-ã¬ƒÇèjøÐ9£0z\r è8aÐ^Žô(\\’:Ð\\´Œá{çG\r`Ü\rãp^)ð’6Ž,~7à^0‡ÏºµÃzÓ„\n2R)Š2#XšŠÉxÆL+¬*àªMû\n¢jšˆ³‰«ë~É\$ƒ+à\nÂHŠ+ÇV*¨ß¶(j9_Ž¶\n†µR æß¡#Ô2B¼Y,»H°Jƒ¿ªu„hè³ŠÏ¨¸#ÈðàîGÔû\rBÍVÌØø(J#çB\$ò0Ž¸8@É\rƒ­Èî²H»Õ`Ò”¬)\"*TH'Ž‰ÐÉ\rRT–0Ln1lÊ{Š€P 4#’ÿ§7šT4cZŒ¸4q†#b#cL¹ ¨¨ÆÆ0ˆZ(:hS¶7Wä3ˆ0kR-o»xŸ©£rÿi/Áq1Ikå¦ŠÈ6Í…nL¬õ±m(˜2ÉIÒ*5¼Cha’«]]ÓiXä’B*sÅq›­Z£ikšßµï“!0ŽñèXÎ²¬¼X”ã0Ì§©¬Ë3¥Å Øß.kŠÆ5m&:Œc9ŒØŠñ3!C˜XÓ]ÈÂ3£/ZûÎSÌ2…˜RÚ\rð˜Ú0ªa\0†)ŠB7Ž8=/ZW°Í&&´¼›v4ÖŽf™x”J:ZÉë\n£@Ù’r1iU¤èí\0‚˜I@rxáJ“¢u3	á=)€æðdR¯q«*%HmøiI§­J¶£FzŠ£ã|¯¶>¢†ûÓA‰¤Ô›˜TJˆsFî,PðÉÐE;ADöŸSúPj;¨xOC’‹:Š9KCå\$¥´SJqO5B¨Õ)H8«(4*£LgžÛ€H• 7¶OU 10‰pàLÑ\$ jxçŸÇ¸U	¨E*<½Ò|Ã!Þ0	I˜&VÓOy£#†eGò@PÒ ú˜TfR¸\njTž†5çU`p4ˆÒGf\\@¤q>È6ðïœiý\re¥<1ÃæÙ7@lž×äoˆcjHˆS^¢èb§­„§‚òÉIøA\$Š“,	)–DVDc^ÀqbÒx3%×ÛÔL5ÇÌ9j`ç4Ž|†š…\0žÂ -s±Û§ÒzÈØi&L!mÍVìYL×}Na12^µÖÜˆ›\n˜•€àLÉ†Ro´óÖje¬z7èL3‚` ¢bt(`©&•ÄkSŒº5Ÿ	Ú§\$ËQH¸—£\\-NAŽ<³ÖàÊ:,‚‘”­RÞÂp \n¡@\"¨YY&Z¾‹—±—K\$›\"ÀÂœR	­im 4\",­I™T[¦è3ªJ+Û†=Ä|Â¶XÈ9æ7òÐ0Øb\nãC+Û\r…ø¸¤ÃÛS{o¤Õ06ÈAáì‰1lJ»ù,­	‘s\rõn»b†@­[š\n	u’Â“ZÏû9X‡:Ì‡:­šbJlt7¥LñÌZV²bMÔ›\"CeÆ)4’™j[ÕÒ\"ÁU‹MuñU\$«–.Ék ³—\$£SNEYL‡ëû<Mì“ºÜ‘0ÑîHÛSz9¡¡Ý+fwyxI1¨¶ƒ~Bˆa9WA62uì»O­ºÊ-åQE¬Ë%ëÍ›‚‚ZÄ3š@äŽ°ñ*ÄÂ“#0¨‚HGá)#¦¨/	Ó¬\ruÙ«,Eßb¶fÖÐÁÈ•‡yˆòHpèÌ\"…`Š‚ SGVu9+^{³´«ÁP „0'T4®œN2„Q¬/mPR£´å!( F…æÁ~(¿çLíKI{ù7eã†Ò_‘¦|–Ðr&é°—‰Ñp2A!üêÕ­\nÙ¡d!^Ÿ |vj¹ÜømEi5*½šsXžˆIÏ‚]äX¦²;a		#\$¬‹^ ¢S3L\"&Ød¢Ð_’E¬ÒBkÌ×^Ô¦`®Ö´§SöÈ[Â„x/K<CØ	dLãcŒàÅ»Ò1¾b¶%›S2n0âà¢ä%ß*ß³4Kú*aÌšÝÊ4ý¸‹à‡qœ®8Å	uu£>CY—-h8Ž£´¶+Šà‹TÞÈ?´ZŒãE• /äZ¿‰ÜþQÅ–¶mK@*Ø¤»œ“‹Nh	i¿;§ÀÐàDK¡ÁSô¸¼Ù,tK5´9t‹ˆ…:9RéüÊ¶\"ñIÏÜ<ÛÁdê‚L1ÈØ”/šúÏaü„Õh@t´D‚Q‘ÐNæyq¾õþXB÷åÑ1÷n%¯ÐÄ7·œ½÷ÂßµµU]îÍ&5®ç›™ìEû„?ŽÿêÀn~\"ÒwŸm<‚Ûóœ·Å—°§èJ'£8¥÷“émk¡rf®õ5Oc3î2ÁônïDµiG üE­FÄds•÷þ7çê'ÁÄ5¤Ù•sÈO_·>”†k4_ò±!øŸG°zI^ÂaÁO¡”¢2tŸLÚ*‘¶<—d\r¤kÛDlù-ÿå@×È¼ˆó‡OÒ:ŽLiHî.Hö¿CŠÆft¬ Ad€£BÐ‰\nëÐ2OÜ'Oà-G¶ø„©Î0\$úª¬ß*ö[æ&^Ã¶V¥’FešYàRõO¨õ«Q%˜YÅ õOŽ´ìPW¯Šñ.\\ü\\r…™0gƒ\0Ê\$Ârzó­üÚ8ÉðëÐ–>'\0§	ð”ûŽîñO¾†…Œ\"°±\n&öcð‚ @ç,¨ÊÌ°Ëf*ßÂ¨î<\0’Ï°ß-þ`Ã€8E}\r	h0Œ–IÌšôP¦ïšågd-OœGï Ô.ÿígëjÉÈ!p¸å€6é(F·fÞ•Q‚ÎËÇ(x ÜcŽ”µ£Pr‘Ae¶¼g˜c\nÿ%ö	BH7ñígÆÓÐ~&±yµïXÖq2™†vÑ_\"ÿPlóÐp\n‘hõQ.˜0¾íõgmöÎŒN^de1¡,fÅLäU\n­f»‚ÓÑ¾h©íòÆN®Æ‘Áås‘W±ËlÇtÇŒ¶E®Œ¤\"Äª±C}ñ\nÒÃÚJëQ!\$Qñ*øÖ`ÄâÌ P	e ÈÇÏc†ôlË ²K)C1/U\0o“òJÀ¯¤ýq[%ë>×±&Pp	o\rÅøíí*fÍÄlïu&eÂ\\dÒ§ã®šUÏV<Ã“€†H Ø`Ö&e®D¢)je\nà.hÖ=`ª\n€Œ p‡ Ü‚J;Bjq\"Ò\$¦|^z¿nRæ&(KBz‡£úá1d&ÅT\r Ì)\rìšO¨/î¬ë	ðä£Ý'þ¹+*ó*\$\"!'\\¦R\riš;påÈL¨ô¹Äðœ¹\"HjË¾êòUf\"².³'¾r«ÊõD \rÆìnQ'	\nªÊ+Æp±/æ7¯¤!\0ÞŽéúËS8n=9»‹Lã£d4£23eâ<HHæ\$ì\0@ÓªDeÎFFé3œ±1s\$–9G‹¥@{‹ˆoEr ŽÜ®Î´ìÂ9?f†V£ú†­€¤A@êÀ Ç@¦G<BL^ÂÎHâdÿ&L	e*H\"#n˜Wv,³~Ã³3#XÝ3Þo±GD#ÁBÓ [‘‚ÅCÍ2â0Œ¶7Ãc\$#|ª§\0-à	\0t	 š@¦\n`";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½/ÒêH´r–Âæ%†)˜NÆ“qŸGXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿3,×¡É‚vW<*¢	41\"Èˆ0ÍâL¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é¼©4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯`Ê9Ãxä3…ã(ÝP¥D9#}F(að’6Ž`Ê6ÔC xŒ!ô8Vƒ Ð7Œ\0è7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë½îZ­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|\nãä7=ƒ:8Ø/­ÒU8ÉËÓ†ûÆ,+Ò\"VÅé£ét·¬IÜº?¤†É}m+‹ImÂpªLÀáIZU‡Â‹‡±±;\$D#¨Yc±¥::€­0¤/³=®©±ò›‚(÷kÎˆ•L\nwD1cîòºúRW¨ÄÒbŽk7[„›´/Ì½dÙl\nT–Z#«º.ÓüìÂ\$ãºÓ­«¹ÝÒynÇ·wž²›ûko¤rçÄd;¹9ªÓøç°ˆ\nÛªzÜó2¬Ûsû«¤9³Î¬L:wÂD·f“8+¼‚P©ZÂ …Åpé†QhåÀPä:\rƒd’”J³þÏ ñµ·ŽKÑµSä50dÂÇ(òS¿mŠ2DF(XúA&Ä_{qíJý‰[{\\¤c’ËÞzº³únªAzìûi›i°÷1Ž|yñ'VðS‘cé\$/­l>×”Â˜RË7†µDý!æhP!Ðà\\ŸÌ›ÈO©°†‹’d×žSD/P/\"J´Ž(¬\$¨­ò @a\rÁ¬9‚\0Ì§–*¨= € ©…4` j©TE6…Pê%V0Dƒ\"ª!Ñ~«urVÐb+Dè Ý¡\$mÊáú!opÿ2¯\";¹›èOÌ\n} /ðÄ€	ÂJNæÑÁôôºŠ%3±AB(e¢”bŽR\nIJu-ƒr›Sª}Pª0Ê©U:©Ujµ‘·'	1‹ÊéÏ:õ¾ð*Z„…@ U¸TÞS\"IN]t\nöJŒb!Ì,¹rf›J8NfbK¤¢ÂÌ¢`ƒ(õ³”×ÊYÖ^dÂ1d‹_˜P	B2\"¹xÚåóÜD 0S\nË	«š05ã¾¤žPª“!Ž.D5†€r\r'­YpÊ°C‚žô4ÃÐÜÃ  !°6ðïAÖzmƒfá ÁXô\\­LÇ)ÿ’–SI\"=GKT™•”üÈ#„‰)ä#9ãj‘2Ên¹–1;Ê	\$h<†ðê iX4>ˆ¬pÜ°Uõ\r\n8‡PÊèˆfA¼6ÄI1ÕôtUc¬ ÑTƒ€a ÔÉ/DìëÓ*ÜÈÜ©’Ù	žÓ2–h51§EÔƒPÙdŒç…wO4¥qå,´’tù\ny\\bíù;Â“bÞ4êe¨JÀ¡ò¼NPL¯\$ÙzH´IM:gzÁ*NHþÎÈ›5°D?¹‘çQ\rO¥…–8¹\nëÊM\$ù+è^k¨ù‹G¦œT>Âp \n¡@\"¨n}Ñ&[®ÑÓ\nÛb\ri&)t™S\n=Gw…½)b²ÏžDt’Vú#ó\$”ºùÑ½ú0’“;Î’\nóW>Ë¾Té^äå¤HÜ­¸ç]ž„ê­é³ˆfÛá±öwOá| åK¨Œ‰É¼âtðbÌÇ-+Çšò…ÑÒJæL[UäÑÈh®%\$Xv[	J«#E\$„X¤8óbnM‚å†ŸlŠPÛT©s6å!K™s—«I¸«…™3÷ú‰²–eH^u§ŒÎ|D´[ÄÂ39¨HãÙ+Ø!´õ¯žáŒlk¼®¤ôj”Qu¸n¯ëBØý˜ÎºeìäÇgvÌýó*…•âÜ2\"‰a£I(Q3Ì¼ÇOtÛo|öÎeŸ†ƒÅ½{P/.CÜ•Ãœ#Ê1&úžÝ“æö‹†(tô±ŽY«u‚ Aa UU6j½Pà‚¦°ê(K»£ÐÓ ÷Ì“¦¶dY`‚òÙ\0M1#`¬t£ÀAm™´1¶šAýÐ@ F83•ôÌ¤ Ä7Šf~d¯yØIâŸ’|t(wî\$Ï¼©æõ?Ÿ4Ã„Óæ<µ:ž'2^r#ežl–¿#éÕŽNÔÇ<×ó4\"ƒðÿ-Òo‘'íBÅnÜOÑsâhFG—f¶çfãíÒ:ýÈÀ§æ×nêwÝe&ß½s£vúÒr\"ÍØÑ-=¬á‡ãÀØë‹Ìòs‡øZk‘:\\Jö2\0µ7ÐK´âaÞÀrSTÒý_»÷6’oˆŽ*îW•±wEÞuË-KèŠýñ‡É	£&A­‡8òÉƒEv9§¾s&i¼Í4IäÛD½.Þ}|Ó?#ËTÎ:lj+ôz7=[¥ÃIïŸØw€ÐÅ,Y°”Eì&à¦ð£ÜŽ.ëÝ‰xLK‹v\nlß\\¥ÏaW[ô0ß€8'ó¾üüô}ž‹¯üIÃg:9Ý»—åp0saýÏÓ-ÿ1Nï~×‹RIO£Ÿ×6ø¯²RVÈOøíNÀ{«Äµ&ªq\nPîàëøÿÅº×PPãOärÂW.äÓÇ\nÔ\"Ä@¯ÐâP4Ô5&èÓÆ†ÐB¸äÊ¹/´ðOÈû\"%C,:‹\nþÄJJ¦¸©ˆ\"\$N@¯6ô‚ë&7o&TÔK”ï/ú!cúÎ\$zåZÕŒ8p¼ˆïæoÏ›\nî—é›‡°ý§\nüŒR¥‡Øêïö×ÏÝÎÂ×­?ÐJïÓ\rÇaªXðpâépèNÏ\\ûgeª^°DøèÐaŽ²rTI\nDú?a°	†+ŽV8ˆ:kŽpåØE-t'²ÑÉ1-Hê™°òoÇÒq>¯âäêÄn¼­„ð0ï#Ë¯­ŒK¯LëL²¶Š:Ëx¬ªaãÃÌÞùêè0ÊýÏÉ¯ÃÆ2ù±NÑ‘‹Ðï±†ùqc&¦Ñ—qLo§õq¬û‘È½H¥16eX±1§îÂÔ‘ÓÑ™/iÚç1¾D±äÁËÖHCí\r0Þ?€Ø«× Î…cz™n0FñéÂÀ°‚ôäÎpç(ç.hÂV<ÎŒ?át°IZ>æÿÌhIð1çÅlCjNõ«úM†¦)ÄÓ\0n\\rP7ã^€.Ü¼Ð,\$00Þ­ÖxäíìoèüŠè¸Òì®†5/°Éø@ØjÆ\r Æ\rdÆ)šò,nç‘md6\n ¨ÀZ†.Í>ámØßzŽÞðF1~û¯|Ì¤²&R†Ù	Q<íCò^ò&\\@0ÇqÞ;©€iB)QŸR›‘Ä¯çˆÉ²¦d\nî?B®¯ˆQ-£±ëcjLì²2äæ¶N%bIã,¸—ns/BŽåŽ:¶.Lg\$Ö,å¾tîü]ÐtLËˆMl±îðÐs‚¿/Vå²s7ívöD˜ÉNÀöìÃ8eò\\sìC0‚À£~uó‹;³öKç‰1&|8&l5d9²õ0Tñ\$ÞøIÃf¤ïí\"Ml©N6‹ÞsMˆFÇdã2\r¦Ô!SÂ•ØÔq1Í®ŽÑB©£µ ¡R2e¾%JÀ3–8’,@aRÅo|m~OñÓDöl“¦„ëê±ÍO  ó‡È>ceFf7ç–3€";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî;¾˜cšãž„å‡ƒòù¦èðP‘F±¸´ÀK¶u¶ßB“Õ®5å3±8[&0š¶ÇSYÏ’ÙªJ26¥§ŒàÊ…c›f&®n(ÒøÏ“Îôµ#&ž-ÈàÓBpê™P Ò½#›~,û!'mJtî/´‚B8Ê7¦C¢tÄ	ƒª:%ð”¶OÒ4—¬p –%É‚ðö½O\\.˜)²X0ÁMº(‹#l0Üå<’+`2 P–6Iàà<ŽcË\\53D:»‹»#£@ä2ŒÁèD4(€æáxïC…É;îApÞ9ázïI\0Üÿ)xD§ÂHÚ8 )”¾ã|úÄÑÈÐ7ŒŠ\n:º¡\0¦(±Rj+%=b”1t(×:ív2LDŽË`Ö<É.šÛc%-{bÄ\nµ‚÷.GÀP®„\rÉØÎ‰„µjR; MÂ×ÜŒ@¦„-(<ÃPÛÏTJ è-pÃ¨²xèÄ R\0V@ì7UÂ~êB4è5¨‚3ŒóØÏ~\r0”Ïb0Ìüà–9BcòÓÈ\nÜæŒ¨:5*ŠOËp2¿ª\$ÔÓ§˜¨‘TPØÉb	jB\n¾/×úÙ\roL¿*Öb`Z‚^¸@Âƒ±	K˜Û1‚:¢ J@Ã/°ö*qh¸ÚƒÂq.kZæÍ3íw{ŠŒ&„¢Ûœ{Ÿ¶òÏ´KÎPˆ!<îÃƒáv Ù`Hè¥ŒÃ4œ2…ª\"M¶s\0:ÌúŒ±#HÓ­„j™hŒ£‚Ø¦[¨ÔèÑZ/ó¤¶\rÓ„ä ¹jt´#K`Y²©û:œgoAsÑzûè¸/Êd,W>žtZâ=ÓC“Õ´h“Ôö3/Ú1cÏo6=}Ú“ß¼×02øJm[â´^;cå6b´â4©üb˜¤k*%(à@cø=`€6/³@ú™ÛS.äÔ*ÀÐæìžúoYÕ’¢Ùý™G¹£üƒ8 !‘E—7vÊaþgaÈ'€@ž“â~)ÀˆƒnÌƒ:¤TÄÔ\$º¤¾AH8n	}ì>g¼˜ÊÀ&oä7\$°-ANM­•c6gK¹©\$\$Å, ¨\r\r¡Â}OêA¨UÔL,.Ê5G©&T©wS¹M)Æn<BTçÙªÂ@uPÃ0@æ-˜à@šÓhvYGú\"Db6PS‚+ŒÒ,ã˜[	©z†ýµ`r‚i§{…\rþ€H\nÞR³û+ÁAN&h¬>–Š{’4È&P\0 †ê(cˆ\nºG™Ò@C9‘ê<:\"c‹‹'Á¼;‘unýßÉÌ‘Ž.ÀÊÊ˜t&¡,»¯ÒîOgÊ#Ët6¬Ó³R!®\$ý‡˜ÒÁZ,Ž*‚jŒãŠ%»ÔjÅ\"Í‘ëÁ/Œ1m\n£’Œ?îì9—ÓõD(‘þ\\„Õç:\n:NI\0P	áL*Õy>!t2’Áº›c\\¯º)l´àÚGJs¼\rÁ˜4†rrHš;X@Df30’DâÉ2¼\"Dá=“Æ’äJ)T)€€#@ ‰á†u‡=«˜BHD§yþ(¼•’Ò^LIy)›åÍ~\"‚\\¹9Œa„ðœ¨P*V_Â E	Â¥e‚h'|ôJ©,ë£”_6 \n\nÑX/ƒ«&,ûuæ¨ê“—Mœðr¦@‚}Ñb&e“«JäLðô¶Ö[ì^l¤¼• øÖáüš†`”n®f«ék	u­²ÉrÛIÊ\n„ê ™Ÿm–A0\rÂg˜Š‚Kƒ’˜J¢XK)h~e±Õ¯j¡Ä&ËÓ˜n4M•\n%'`[/NnÉ8;“ÙBká´~kÍ2(.±S4^öÔñ8Ÿn\0l·±Z,9ó£SÞÄØYK0Ç+áH²ÖnoA\$73¹n½Ú° 'x˜ê™3YÚó\rÅ«Z(Äi«¢&ÁäíÎ†’VbëÆ6YÐ1ÏcøOf“`y’F©' â(æÈ™ƒ>L )?v‡\rÉ+P|à\0 ‰O[—éD¶bëC	\0€8£âtûB{›Ê©‡†’\0d›áÉü6TØKÓaÒ!ª´‚\r&ræU³8Ç¼þÊu2¹óüfõÉç™ÄíæhëÕ¤`æ”wš^Ÿ]M6œ1îñ¦›ê:£Í:?ÁæÜš®u—§ô–˜yšÛG¦ãU¨C¬&ÆÛ˜†Z|M9™ÔÂ™äV—ý=V=&VòdÔí½K”²Œ”œw÷[Rmpjriö\\YüÂQ˜oÜX™‘ØWbÊ^SR^r‡VJ>è¿„u¤ê•V¯a7ÖDõâ ›1†‘4ÙñüRî‡Uùª®äó…¿‚™ŽN°7¦R¬•žq5;cÎ~Û”ÓpÎJ?sÑW’£éiuŠýÕEK“T\0)9—,7&Æá\\D~J‹y6Rháš.Ðyå[/ÇË b\$éf@\ntGÈ“«ÚPPPr`ëÜ\"\"àª`OS‚‚W¶¦¿bc\$òÉ/Ž´„±&,¦O¢5þŽ»Œ4ëÃ;4…ÙÁB(*À¡Û3Í.‰«|¡#¼¢£oÞ•[ž“öE8'É|LšéwÌ[Ÿô;·ŽÁÛÛÆ\\^W:Ü0…UPp½¬å,ÑQÝ•–ëeö®°:é]I+µ6ˆÕœå_dH„Õ÷žø2iƒ¦ùcöÇ5Ù TÕÏ½Ò:ç‹êµ£Vú-Åé¿i,}ß­êºe\$ÆALfû;ù \$s¼ Ó€	é\njí¡÷×tÔg‚þ\">?Ãèþ§ò+2ÅnôDêpwcâUn(sÂRÛ ÜwcÖ=Eáê\"Ï¶üÌdmî„kÅŽÈC¨ïåˆÃÌ@ŒOÀö.›8×ï®å/EÊ\$éOVé¦îÃL?ãhËGhóé§O8Ë ÂËoôî®ŒôP‰Ð€ónšÅ\"SÌ¸G‹ž0¤!Eð¦h\"`˜ÝF\"j0Âl.­ |¯tâ‚Xv øÎV3pbñ¯9\rŒ¯Âîðä÷0lý0DZ Ìaæ\"•¾%K¨\"ê¨äs§bb,Â™¢3ŠP³D®Nb4ï…ä\nf`%Å.‘Ïû9À×¬óPn2±.Cü5ÐW	/8Å#«ñL\r#1[ü]åâ\$JåNg‚@óoOf¯‘b¹ñxÇ¬Œ>‘7PpÈ¤R„ï¾ôUl}±_ñG‰l€k‘&´Èà‚EP{°~Bi€¾ÃU.rkêÌ¨Å±×ÌÈBÃ]ÍTLàæ\0É\ropJ šMÁl7m< Ø1ÅÎ(.OÄ×e[!ºÂKÒh)†ºÖÄRAÃ¼12(<m,ù­J\\ë–GÇØŠ;\$/\$…°á²P˜Ät\r€V6åœÊ|íï`¬eÚº­„ÙâŽC)/ð\n ¨€\0p£†UŠ˜6m4øiX>O‰)£L5Âƒ*fèKt`æh Ëj±Øe\0%ï)#Šk¤ rÈ8Ãî'd5ÏÂÛ£ú}‚ö5ƒ\\§ã*ÕÊÕ\"d_Ã§¢J{l†§ú§ð)&~ÊœÛg\\-‡¢É4-Ô6Éúé’“PµS&éÇ«møc&i2‚ÿÕn…3d\nˆtS?3DNãÐRçÌ'Ò§¤/Ë°\rî¨Ö¼§¦fðb&ï)o7¦ja0¬0íî\$ÐÖøc¶1\0Ÿ5b\$Eð6í s¤7+ø¶ÆzLN722-«`µR¨<(¨Þëp¹²;<*d^d7:Q=„9#hÊæ‚ÐãÄPED´#à";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Î®îÁ‘Éåk§ÚnñóM<ü®ëµÒ3Œ0¾ŒðÜ3» Pªí›+£ª€“µc¬	+£`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT >c\nÜBpÞ6ŒLª:\"FÉCÌ4A,¨!/ÃL|\nLàÊ0Ž PŽÉÇlšÄœ'ošŽŠcËža•\rÐ)¡LqÆƒœƒ1JŠ’Ö5Ã˜Ë#µÐ¬*ìÌšÀAÒ#´Æ¦±´6ø0#¤üí«T²Ö!Š\níNaâz42£0z\r\ràà9‡Ax^;ÔpÂ2\r¨‚r—áxÊ7UPÅV’;!xDªÈøà“¾Ã xŒ!ð@ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü©‰ƒ`”ÏÒ;g«R\$\"ž¾ŒèÜNlSÇ+° @;@7i'¬:O¬ƒ(Ø2cc'\\B¸Â9\rÈ€ÎŽ„£ @7Œhèà8\nÝ£¢Þ6Oœ_ÄñÝr‡ÈÂHÜ1³eMrJ¤wA0¬£È³‚º22oÔ1Þ£.A°®ˆŒìæpã\0003ã£=ø\nY•´›1í2X¥ø†\\B ä®YaSŽ\rïœÔûÙ•*»0R2©ðËW0Ëà)Œc37äPrP6]®Dç ä¦TP˜½£¶žèÕo“èÇÝW\"bžŒSª¥j\rÓÉS=ð±d9¦×¸Ãã©ƒŽr¸÷/´\r·¸LåÅŒ–¯ŽŠzï{<÷[%È¢\"GmÌOW+\nŸn@WM;qœtö\"S:¡S’O‚Lû¢Ñ¡¦î¥\r	s^¾0©ÐˆÉ»nÇAé«áÅü,*‹^šŸ²:ÚÁb¼‘Œ#ËUz8uã(%;T:À•(nmÀ¸´àÞùÓ{é|o±ð>÷âüÓSö5fü?¦ú“ÛdÊþ\0Ä¶N‚ o\rj¬0¦‚1ç,¨¤T‚Š÷2¡¸ƒ?d\"VIpm3Ìag6*A’P -5†àÖBC1.Xäÿ‚\0‚©0r~O„’’º¤”ªYY‡0DHnPGý]«Òt™	ƒDaÁ%'§ä™[÷ ÏU¨uÖW`¤5)A¬Þ›‰A­\$d ž¶8ØÇN¬X‹QqL‡E6§Tú¡TpS‡%RªÕjV\n².«R@½˜ò« Aê2«çHR³ÙMë\0000“FÖÛÉD36RF¶©DhLq5gìíš˜nBS”iC‡)W!¥XK}x&]s!dG&”	\n (ÀêÒÖ\0 ªCLWÌ`s\$+ôÄ1WÄÌâk\"5Ž¸ WdÀÑ	>pV?²‚Ã¸e„éBÇexLÌ\r éê>¿¤xeV	D%Ô6¾„RH\nyÏ%&NA!S¥Ì1—aÔ3«’`‡“i\\æ’\nšsRjä^†¼<™2nÛÁ•n¯\\©Bb|”ŠSÙí5ýÎ+x5®Éï:¢”xS\n„ùóxÚ±ÕI¢¥° cVé	ü1*FÆ£’È(åªäöµò¦l`Û¤|\$Ñ\0&~âæ˜P4TÛÒuŽ­Ãz£sFež\"–VÉƒze@€#Iªy•z\noI£»R`Ri´óri•\"“ ‡(JV­Çý0\$²ÂCpkà'„à@B€D!P\"€«J E	Ö/\n›ëSb6Ø”¶[[¥@¨7­pÿÔpÃ…\0Zç	·CyÖÁIO|T«söL%ñ¯%¥—ÝK¬9N&\$¡Óƒô£§Mñ…ãO(hQËÂ&+%á›îãfÑÙ*)Z—Ù°ÓåC«ŒìÅ³3Wé\\Uë«®ñÇ»ëÉ‚o½íK(–­ÜòHÈ@\ndí=¹%Ã@ËÐ@r“n-`¥~BK¹=BMŽh(ºã‰Óâ†”J—BBv%%˜ª\$É[[‘Y[:,iÛZâWÀTÃ­4‡ÃNQÌlf¥çÐŒ\n˜)Ls\\öÃè…wÄÑÚHi¾Y9…d’‹9)!à9¤Rˆ†sLg…¢rJ»ó±Ñ71Û,whiušmAžÎ§;©hU[D7,ƒèW6Ô´ƒHˆáfBDb”t¢Ïd5,3}@’f•TÄtaˆì˜*¹Gø,!¹—|±ÐzjFú*@‚ÂF9;­<¥/²PþŠþwSèå#*né‘ÀôÉø=r.Àx ÚäÅîVÀ(gE©02Ó6ðØßOL€Ô†9¬Ã`oÉ„î~L^4qðºm]Î7Nhqû±™nýâ*7œÛ›ˆ¥o…ÆV´ü0K˜ìÕ›à¦èjw40¨Ý·ÿÝf£‚™Ýá¼ 'Ü»ø¥q£À¶.íàÜ ép6îÚÊÍ—ü/q»B_­ÖËP	„¬–ÚÞ›ú	0œr^_¾î˜e²7hŽYDp‘\r6-…9\$ÌWB¸e\\×€çzþStÎä(Ì¶“b	ÈfÏ:&(í®ªg²D¢¼e?g\$R:Ñ{ÇWšëBƒ£÷1ý\rz¯~ôOoà©š×ü–2®	ül¡Ç@Tð/¾¼¿™W2±öùâ!E¤A;n%z\\j~OÝõOÖyÏ=Ã·ÕòõdËÛRæ8dý’:¶í¿Ý§=ñ®ðÓ(Òv\r©2àétêiT\"ÁA}¼¬L-ø\núš’å[ËpOmÿÖ|Œœ“é<äØüù43!RV³ÓbŠmÿ6¼n2×Âöo\rÔUßZò/&Ë¬÷L½L\"›OzòHfbÏd'\nx‹Ù\\òO~0q x°%\0pýN +8t'<ÿï:¿¬¸À,'bPrD(pHóÐ+0A‡E/Òâ\n.0	°^O'©’;gÎ\\ÝGÞÀÛ°n €Ð~TÐ^Æ®låèÜáMìá­óÂ*âzÑ\$ÑK8\nO`Þ0?i@ô«6ÑÀ'	0Ê!PÏÐÕ0Û0>)C°þdZq`æÏ„„\n·Žj£RÇ@¡ÀX&ì7B|ý§ä(¨6€@-Øj­nÏ/Ð3®w&\"¾Ñ/Ê\0:Î÷GV3FZ=-\"›GRéÎô|dJ:„O/;\r-ÉX.ìØÎ°®j\rÒªö%8|Of]Ù‘wåÎÌÐÄ¼ñ‘Ÿ†:öMjw­%ˆ'o0-^\rbñðÚÙPQ/M`ï/7\r°;C‘¹Â£Ðì11v¯gÛqº>ñ¦Á­\r±Ê_¨(núðÅŠ\$NE/aÃ\"²‚ºdª !DvVï\"öp›1¿ï+\rò'°JòQÓ3â. Ð,‰&6 tñE¶ÂÃ¾\\âfgQ2`=†	%¤Œbgˆ2¦Ú?¥¸2ltcr4óÑÁ\"ð¢Ò‚!rAÒ(»(RA#²GrW)žÏ²hÁÂ9)Í\"Np@Û\$ŠÀ(û,c)rERT¼qb’³rÍ+Ä*|NÓFSÒÇRæjrêÒB»Ò¤­1/­7/ðë-2RŽñ÷0m#0£\0Ð‘é1’ìG\0¨É6M[ÑÝf@­u.ðÚ‹q™D&×\$×0ÑŒáðe4¤Ó4òÐør	÷MRFc\nJK6ùæ‚ ÈFÛrlÂã:!0l_c6nï,Ûì, s‚`q\r#f@íSŒ æ²Ïæ1æ†D!Ì¤3 wfôQ½5/A9À;J½9¯oó¤²ÂÄ\r€V´ ÒÇCWQª\\ï”=c†ÀñÒ'0T‰²ÄQ#«önêÒ#3ŠT´à¨ÀZ;î\$!°”Þ­»<ë÷9Ô&æ¦#ÂZ/XMê,Ê¦h]hÐvm2Ph&àû³ö:\$Ñ3Çî&D\n„€EEàD5“óEê^8Óìü±`ú‡dj\"_±jEövCÖ\r‡ªÁKðurI36c£:3äl¥C¶ñb”]Â”¿PÚ,C²n¬?´OK³Ð¥Æ¤»î#L”¹Cê€ðq4ØÃ³™C/=4OcLkçL´ÜBp 3œ€ã¶T¬ÙC¬àZcÍ‚:h&ˆUÚ+´!4ÛO	†º¸ÆV)P#J,¸ªÌ&/ÞÏ@ŠœK®<ó:>c&K.# ¬¾+\\¹\"XB\0Œ@ØKÄÍ%ÈIŠ(ØÏ,`ÜÇC¢»Æà¼³>¦B¡ùIÌ%XO\nb¨ØËò¹(Nþ%Èy3mðcãØ|æGô\rÀ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8N6âBiÉR¹°hGcKÀáz&ðQ\nòrÇ“;ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îê\r/ œÌ\rªR8ƒ\nN°„BòßˆNÂQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷D †ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@òŒ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…á¬	)\"AÃ xŒ!ôH1È›ÄNH¦(½M*h)Œ©\0Æ1Ä«êS1EbÚŽ:Èä:¶HK~&ìjŠÜ5-ÐbXÉspÞ7È˜Þú¬4Û1BºQ°2HKSŒCËJÛáÂÒÉ2¸Ø:«è£`T¯N\$ëÓÈÈŒlÝè•Œ#¬ÆŸ*tà\nË«ä’ªc(Í9<•…eZ\"¬xŒüÖ\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®®2Bdˆ¦;âb* 6u: ›¬VÀƒYÀP €d32W8SC,Æ©·l;yHwU‰€PÂ12€V8ê²¶`Óc¥\"¿„é““¯l\rÈâ:Œ²p†Í×»^Úß ’s².ŽLÃEbƒPÕAñ]2’ÞºñÂ1ûxËgéÍþó0Lä’\"Zç»7è6Z·ìû*Ñçìá3(°(Lì#Îh#tY¹£¸ëúïZíj©ÑÁø°X‘S¶¸Â¡\$*ý¨À*µ=\ràH‰Ø\r=—y\0lÛ'qÒÀßiN÷û'„•ø—/³]ãx×âb˜¤#wƒ²6CÁp@\"ßQ[ÈÚU\rrJšV3/#k<Ãy4u¼7ŸrBaH1bÉ¼°†q\0Wy„\rÁ¬þ¿ÂR}ÏX !‘D§vèÈéC%)Õ§„ôU>*ô§>¨P’X@‡XîˆÑòÇÐùÚpÞÒÓ‚ÙÑ¥”¶]M9ØVÂ\$2ÉÃ«î„‰Ý…'¤øŸ”‚PÝCAÃ°R”XrQª=ž©%j¥T»ƒZÏbª\"zF;*Æ¸ô4ÚˆJIK<L¼šû]j¡‰âÅêŒZ¹ª1ÇðÑ\0\nhA8õŸ“Óìe@,Xþ…\0(oqð‚¬\nMÉ¼*h@“²<H‘M´3ªˆ’jI\0gGpä“;3úWÃ¤5\rˆ„;£´\$fÊnV…JTG\0/†‘ôDpÙ*Ãê/°¨ w\rÊy…+È¡*B~P^a\$ˆ}5Ô<Áñ%0ìú’•ú½		VUï°RlI„™7E%:ÖË‰T‹Ê\$°©ØJ aÂs®äZôB€O\naQ„“—bÎØÓR3¹DónýÛ)­†“Ý—ÃYVfÍiÇìº2ZBC@ˆ,SLgCÍ?(\$£Ð@Õ%!4“¨À@üŒ(F\n’€ëÎ²LÁ¨9T%fM(—•äa±¦Œ¡È¾¤ðÃ;ÀMæ¼Ù£L\n„ÃEÊÔ±‚lBT\n¡&´B”¥	á8P TµÔ “`„ÂR°\nÂ@Š-Š®¤Q´Èº×i¿³Ð(‚HS1få4:£Àž)Ó~pÆº³ºïVZÓMÄ ½KsXg±t/g\"¾ÅcÛzr/F%täbšÆ;…˜j\\|‚¥3y‡&v ­É~Šát·ÂØÛÛàHè¼ª›Cš+`¥é«’’@›)RH‹`t¨ÍÙè}B¥üIÍÊ¤ž”Y¨K6;ÝÿÁˆè3¶XcÂÅh­L†œš\\-)kˆl®dVº…G’B¥L'iXº†7þenë@t×‘£c*Ý[cw›/­ö°D˜aIÎy¯°Ûœ<|²±1½iãF\\g-ÊÍÃ„\\VäëàÉËÛ0ydìFÐ³±¹B‡4—ŸBCXè´¬5éK([<Æ­óQèJLÄ4±ÀõCÓT{·LÚä`Œÿ[â9_ÈÚûÖ:Šèºd¼ÖÎÀ0¥x	\0¹£LJ'äÁ3¡ÁÂLf†ŠA}†HÏr©Áx \\š ³®R[ˆµZ	ÄK¤Š™Ó>ƒƒÂg_ÈP0»½\\jƒM\0”Ë­‘yb×Fƒ^¼]d–¡®ÂÙ“yÐ@Ó„’5çûe’‚h¹a¥×v '\rAsçÆÅÜ×qIs‹¶œÜé£t¸mºeOS47½-\n­!ÊÙG^ûüØÐb©ÀJì‚fÈ­˜M2ÝZ9AÊ®™PŒ‚¸d«ˆx”ÌPÄ·¶ðß|`»ÚSÐJ^#!¾-¥Z•t¯B,:„„˜€ËÓlEÛ“´3ž³Ö-ÄºE~P•bÛ]©4ËéÃ¢½ÈÖ˜É¡‘2i¦­^‘¡çÕÑÆ½ä´Ü•t:\\ë¦¯ÌtÑzñ¾‘¶v -ž®Ó•`¨‡ÞävÒ§i}›¨°…C95b\$¤’ºrQAdâÒí†À’çZÁ6c|¥]MjHMjDÊÔw¡ŠÕæŒjmjƒQ„B™Å­¶m 3h¢;\\×¢å‘ÂhŽŠú)ö4¹Ç¶KÉÙ½Ù…÷·§Ûe¾K¾³¹WlÅô?v÷¾9º+ç¶¯¥Ò–/Çé‡'è9„\$a	É•ƒÝ0@¯ánÍ×ø‹hÜý‰±¿'Eüß¡kåO¿èaÚZòozüºíÞ¬ÎR*Èì²(¯’ÌªÂÀÐ\nøPÃÂú§D\rïHÚ\n´/MrFV…§€‚,2gôTƒ8WbnóÇv(i?Ä˜¨B,ôž~­ ®%Ø¬¯|ÌºFl\$ð­É”y©ºa0AŒ¸QJ¾ÌÐ]ÎÜ¦†Ë‚¾^IÔ¨#ÍËj³ðjXpù\0Y\"Nù®¶ù0¸úc7~ìÅÇî´öª­ê×\r¨ úâé0ÞÌßEäÑ`‹C\"ñÃÈâç\\BlŒ&ŽH\0à\$	Ml=\r/þûƒN\rè~êðÜ/(!Nª½Ñ\$îå÷Ñ!Q'°îÊf'çLécq8v°öqiæbqQR½ñVÐï:#fÈ¦nèa#ê3î…ð\0 Ì\\0	—ÏeFÙðÊG-u‡šû˜uq‡QZ7‘\rúÿÎ¸óN#qŒ¡\"FYï=âSq\rQ 1 æ‰Œä/1¤ûO«Ñàc°‘ÚÎ1ñfÒ‘øÎqd%2ìÖ«À¨m¥ã±Yª™åíÐµ D±ÂU\$ª&€KB`ý,c*GCêÃO+à`ÞÚâ†)ÃBÖ1T¾(*/\"Á%©ÞBON1åÊx„Æ\$äºyq'nž_÷%ò…ƒZÿOÜø †H@Ø`Æ}€Æ”&±Ñt`í¶GcD\$á‘æä•#pN˜ggF° ¨ÀZNß‚DàÞým \$iFKI\"â2C)^\$'4»Ç8žÎÈZ1Q\$ebà¦/+G\n=Ïd}ŒìÁÎô*\råI,¦ÂC*ðŒ\n\n*7ã03âƒ\nÄ7\0™«É48<`ÂÍÅ,ÑCÈçbŽòË¬Ú–›ÅˆÀkªë£û6©b3r€óvÄð¼Qe7S1)¼µâœ)Œï8.ºó’ß³jFÂI&>Âån2xÄërî+TõXL/jI&m<Fr~`ôB\0‰€ô(IX\ré\\#æ`âífKÎx1ó˜Æ£n2 ‚Kƒlq1!Bé0‘î2³`&C6ëv%EüŽ¯‡<«~)F¡7ÃVª™d’-r:+D%d›°ô&:B¾\rÀ";break;case"he":$f="×J5Ò\rtè‚×U@ Éºa®•k¥Çà¡(¸ffÁPº‰®œƒª Ð<=¯RÁ”\rtÛ]S€FÒRdœ~žkÉT-tË^q ¦`Òz\0§2nI&”A¨-yZV\r%žÏS ¡`(`1ÆƒQ°Üp9ª'“˜ÜâKµ&cu4ü£ÄQ¸õª š§K*u\rÎ×u—I¯ÐŒ4÷ MHã–©|õ’œBjsŒ¼Â=5–â.ó¤-ËóuF¦}ŠƒD 3‰~G=¬“`1:µFÆ9´kí¨˜)\\÷‰ˆN5ºô½³¤˜Ç%ð¤n’Ëô½(F½SƒóRsxä&!;èV©Q©ÍA¯)öÖ`–ØŽâ!§½Fçq	¼î¸\nÓèô7º®.|—£Ä£¬µ¥pBx´±+Ù®þ îJº,¢ÖÕÂÉÂúÁBÉzÕ #¦ï?KZvœAÍzvñ°o3 (Kš†1p´rúÇŠ®S5éìl½‡ƒ@4C(Ì„C@è:˜t…ã¼´# Ú4Ã(ä\rãÎŒ£tÐ<“Hæ4óPD¥‡Ï+ÚO‡xÂ*HB\r'e@)Š\"`Ó6¼	zž“’µ{šÞÆ©3Šù²h;¶œ!‰\\b—ÓÓü†“&tûí´j\"6èA\$Âñ%ÀP®0ŽCtÀ3£A(Èð!02<Õ¦±‹÷°1b€¦iª‰>¢t4‡HËãpÛG‹\\NòVå%Hšî‚ •¤²\"züÔt[q¹®S¥´k^·Ó	ÃäOÅ©­(€ÛÎ™¯2á#ˆrt†ÕhêL\\‰Ü’Õ	;Hò(õ2¦!)&`±Ó\\Þ5ÕdkÆ‰\\mK«lN<¥±‚7\".6P×ØL2òFiS»o­y-Xµ¢…çŒbÖ†Ú{\"hµ[\r¯ŠqšÒ¹Ä\")¬&dè¡”˜9ƒcž¥nò^…é;dNuÆîÒ—–@žfÉÞÖªÏÎ\$\\…0ij_„“ì#¸ïò ñ×H2kxBÛÒm‡ hbæ¤ZŒn‚o¬J@K®É3 P Éz H°4~²R\"@ž¹±Œm`ó®ã¨—!al»/Ì#–ý±±7…\$ÉrlŸ9ŽaëŠ>È\$ó=…ÈÚ‚ší:pÄ 7Æ¢r¨ÿ;R§<“Å®3_È¶h:v‡RŽ…Jw’d(JR¤­,KC¼¹/LÉ3MPË6MÓ„ä±%1\n\0kŠ7ŽŸ™ädJ9n›”úäM9Ûx¸š—#êçÛÁÃ:yF*&ÜKNÙ'd½³—EDyà)®\"2(  € ,šdŠ5× CN)„1‡En oÀ9ìC`eá•]‡Ê˜ \r1D7ðèl\r¼;ÄÇ“KRÐ2HéÑ’g\"KÉ›>g+íƒ9@Óã’%äÔÎ¾Ô¢Áqà;\$í¬†Þ»ˆ\")fæÞÙõr1ìí0Z_£µ2M€ÒZDq 'q¤Ö*ò`Ù¡²1‚„tƒ,–y	ìfÒ%ÌpZxS\n‘äŽRb\$3¬šŠ#\$D’”ÌR]ÉLé\0-nL„˜÷§Š»\\H¦W`©I1Éàõ˜w^b01(œúÈgM:	d®èöÍ4bCó‘ƒ¾KÃ„<VÁka†¹æ+òhtI{ÌzE¨œ>Eü´Ì2êx­­edš!4ól˜\"#IDžlÜCk«¸àÈY»“y‘ “Aj>d›KRš„ˆH“tÖdë¤Ž5´ªcIÜ“\$B„¼ž³3º@]9‚@Ç\0„Ó¦¬C–q„\"‘E ¢v%\nIKpËNµh]Yô9°aJ	º¢{Q%mžv.ÖŒUJhRqe³šO^Û 0tÂu\\‹YLˆh©ÕSbfä[q«;æ\"	\"7ZQ‰S%n« e@Þ,So`uö—ŒÁ„›:4²«IÌDaµ³Î ²[9CÐÚ	&g,¬Šb°ÏK\$a‚¯ú\n…jŒÆ5âÏ6KJi+6ý×®³ÄÎé\"!P*†ì”;m¤œÔP†!¸å­â ç\nÁWv¹×bÏÈMÚ\"	h@L!}p·’hÊ[hÍA0˜&œ4‚AŽ‚ðŽÔá–¤‰w¯•»”†E’kÙØqtÇÖŽ¡KÃ­_ë¢°û*Ã°¹(Ä†hÉ§8Xu¹b‡Ñ4%àTNâ×™dM1ˆHó,¦3ÁºÒB{vL	j».¶ì_VšC,É{Õ%£ÀtQÞ#‹´À³²z«¯áõùUe‡='±ÊÄ4õË÷›&¤ÀØŒÍ\"amaË.×6š9›Œë\\óðÉXƒèÝÒ-D´ÿ-RzµÎdA9ðàzÈž‰h÷ÔQ\$'¤©²(Å½Q£G¡Á²61¹MG¶UQiüº&R-%€BEj-BhÏÄÈ)E!d™¼˜ªÍ5Á¸ï:´æ¬Ãg,Û=Z&¡²uÖËØ´q—£\rxH3‰Ú­áº\$BÕµ¹ÛÔôü’\\…I2ÐTìÛs)«å‚LUõ³„¾\rß—Ãgåi;]}øŽŒ–ûÚfœoŽLvêÜ(Ä8=ä»î²-f~PÃÈe™»™'«åÎS–råjÞu¤ô€òMWbÏoÇš½ðq=ƒ}ß©”›øÍm.IYæ‰òd¼îÊÙÓaó›u'¦~ÍQÈP ˜6¯£„'>}‹zLLTãyß6wznÜÁÙî›)N¤:¹S1rúû9mû¨–±&ì›ŽŽv.Õ³Ë±ço·\r×u_cê'ÕUXÒLÉr£ŸúºÖ8¦mÍÒß›gn›u¸”¶äñoÅgžã@7\\\rg›’t\\\0ñR&Û÷	¥¯œŸ;½%1gyëÑ†\$¸eT5ä@æóý´Ûöÿ‹êèÍs÷\r½îýÅzgA“7yèûÆÇë„×ïÃuó'¾[Í—*OR¥=~rµTÇª™´Zí^Tÿ|žþ-·¼õ©üs)GÉúÎ[ÎÌ=ÔŽðD*w¾wöEfÓñ)ïô@`üå¸ÍC ÿÇŠÝPÃ¥À5Æ#ëÄTJ€-m@yŽB'f5ÂZ:´¾hD`ð#›ÐŒÖÝJ\$Íè`Á*#g.=à@‡ ä\r€@d„Ó„ˆžCH#n1clDcl‚%¤]ÂžÆî*ÈÃâmç\0ê€Ì qg¶™Öh‹ò¦\rn¢ÏVqNúÊ.Î=¬ZWÇŠùïîÿ†µ°¢2DF’Æð!…»„„±ã:—,D¡’&ƒRbLlâ#ÃÙCÔòÄ@Ê“Â6]¨Æën0¡¬ð^~Îî‚®ÔŒ± i±\$îÃºŸf/u«ôÒˆÊ*ÊÔ:\rÔmÃNõ™ã:/Jü·cê]IPmîÈqÎƒlþíJÖfl¦„ãt¼íXå\"7	¨›£ê-Jê¾…Èg¢^JèpR¡.AìËq2Ì*Ì9l;HÞØñvò1 fµ¤xX±2^§ŠBÂþFÎ\$Ò†ÇŸæÍ‚";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\næõº\"a«}Åc1Å=]ÜÎ\n*JÎUn\\tó(;‰1º(6?Oàôÿ'ï2`AJ–‚cJ²92¬3ž:)é’h6¢²­« S•µxŒ”5Oëþa–izTVŽªß”#h\"\"‰@ñ##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0äŠFAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxD¦ÂHÚ86Ì“œã}¢JHÐ‹·!\\ÖŠbŒš¬¦â Â9;cbKƒê5¥Lk¾'*ì”‰–i æÌ/nóàŠ/©™gZë¾a“CRB««0\0¯]ÏrÞŒˆ2h:7EÔ¢]—tÎ5€PžÃWÃ…§EÏ&ÊŒãËúˆ#ª6·Êä\\©Ä[ê\"£0Â:¥!\0ì0ƒ¨Ê	m›ÿZ PŒ:ÃXÆ4ÅZp3Œê@Ï¢¸âãg¾³8åWÀ\"1&*@Ü¹àkzò•l ÝtŠ¬PÞ°ùmµ(#ð¥‹XÛ^¹Ù;n(@9ŒcÝVÍ…w±/ S\$3´pvÔäÌ²”¨áZè%²Š»âš¯„\"QE°ÌÛPöö˜ÃJE^ÅïŒÏ*ëü(6M£è3#¨Ú7åUáH¯zZÞ\"Ýyi¯‹ô3ppÃiQ“6æ·ˆ‚Tá\0T;cð“º%,sLÔWmhÞ3Ê›ã¯¤ÚúŠƒ{_„4u•2:Œc\n9ŒØ¤27ò”ÈXŽCÊ`3Œ+¸Aó]Ãjïƒ¡@æ¦æ,*íÂ„¦)É€ô§³€`¸²Ø\"é<¡È˜†êÕO˜ashQÆfkÊ:*äÕ2R„¤U’š\rÁœBƒ“ßjqM0äÑ©O©ü¦ |Is	„j¡UvHÃ\n¦)(d2†¤|ù•6Ç99§RyÐj‡þ öÌÃ˜wR+¤2ºÒR\$†)ñˆ§õ Ô*‡Q!ÝEÂu¤Tš•‹ªaM)Å<¨Ò¥90ñU”ÅZf•'Fó”¢2žÉB¡¶ÄRC(k!A¬>ç®¦Ãr\n!œ¹s²Vd%b%®SŒcËÌAÄi\$Ü‹¼©2o‰‡3s8g‹Û—|„\rA\0 „ªAò´ë‚˜‚ƒ™&á\rN Ær±6&ÌÚ›uÒèƒ¡8A¸7”¦0¯ƒ¹r~/ÍÜ\n—ìeƒq0J.bE“²zÛ¡Z3©ÍÓ>}äâ!§’…ÒÚÌù‚0Ð ²nHˆy4à€2#“\\R¦K?8¤4ÊPfD–Æè^fŸÀcWÓ&‰Pàdâ¹1ˆ`‹IBbxS\n“¨ßò³Å³E9!ÍtÀêh²Ê¹H9Q!‹R‡Ä§ì&\n°ƒŸò¬à¬wà°Î“v¯”eKA¦+P˜L¦«\r\$Ä#I‚Ø—I=›™Q²A2RÂA\$¹ÉÉÒØ£i–dÖðFŠ\nÏp-¤˜âT-™Ñ°«Ù|ðàTÃ)¬qíœ£Ebd‚CRKØ82vRÇhtNfu¨§B(£\n[\$çÐÆ\"Ã“y)\"Øì7rÞüŸ¤æ;S¢Ÿ¸²‚SÒ¾ ³ø7†&/prh8NÝÜÊç	®KŒp¡•ÃÚ“°b	¾s\0(+òbÅ›*b­Á)ºCH*Y+h¢‚”Ç¿/Â…í-æ%åËäÈ‘ý‚¯Á€×Â’›‹¥\"Œ¨)73ìCÆZg—+bIkœÖÝÄ·íùà7Äj±”ºM eäud”—Hµk›?‹²G—0ðßVlZ'|#)îÌBž<\rû;ºèmë½y ®\"G\r“,#GÃ\$ÉÈ_‘->Fq! Ù›æ’êØá=‘íeH“äl‚“.÷l\"Ì“D[‹\"Dˆ	agi\\E¨¹áP*†Ã†áàÐö¾næÄâ?A¥žT³lê@:\$±®à^W×qKµté-(×Ô­’:\$­54asøœ¬¶êèÅÞþ‘„»••€M®ÑE¶¿µéÔnSMPRô®«(ú´¤¡Mc¦õ¦ÖÚ}™ê\"¯©\rV§:§`ÂýXs¶)7–A‹lýx½\rQ*Íôžo¤uÁ¸Ðúq “{º*v†½µ¤õ'`ÞËxFBäÈ”X{drØÙPßv¯cmQgLÐ%7%t²Œêâ¡ˆé×^TPÁLd\\\rƒ¼g ô)…¿ó™V²ò~€Þ¥Æ§B`2\$ÁŽã‰>6 å¥ëÌìIõbZ,#¤•Ì#ºàáo•‚P·ìA+\r†±\nÔ>`\"ÂÐé—£¢®Ð˜Ìo'%íjÏ|!Ö–û¥ZØð9±H)ÖÖ£¦ºq[jüNéð©?.\\˜à‚_ž\\ù\r†Ieª‚rŒ#*”nÇ”ÂÜÐdêq˜\\4èJ,š¼\r6zðùÊ3}—cvãÀbÀ‚K¾.’<•Üû¾vÐèIÅX½¢Õ¤½ßý¡œIÜ‰Âuu­Êå\\8qz×º7¡“Þ8Äkæƒ×Sóöõ×ºr°R;gnù~îácÙŒƒëß·¬1ó–E%}»ï7ÆëÙI²þá ÌœÃ4'Kký‚´;kýUµ¶ØÕà'÷¾oäý¯ìÚ£Èÿ-\\ØÏúþ#&þoêÚm€Óð6Oô‚Œ~®È0ÈO¶¸Ì3gð¯\0Ø•/Îû\næ®°7ÎÖünÎ:àäÆã ÖÀÆ“À@ €ô_'0‡*\\é¸/C0õÃ)(6Æ‘àÖ{âc¡RCaI(ô,V%°z–p€{ãÆOlª´GT›©¼J0hü´”ÉDkjLƒ¢ÞÇ0Šì,P»¯LuN<±b±ÌàÊ''.âYO¬ ALJ)K‰+h‡®Ú‚…0èºkª¹äêäLÏï‚3ìÌÂêýÏ1·OÀúL&ìÊ#ñ üël;ñ7quG	b´‹¸Ùæ6	°”lc\$ã*h+\nä£:B¶è…„þÃ\"s/üìîNÌÄ1\0íÆFd¯)1>¶(Œ0UJ ZQŽdÏ1ë©‡ Ù±ŸgV;à¬°\$ˆ9Dî9b^ïâ®À…\"uCÏngJ7q¬ú()Ø¨cCqåÑ¢o1ø<ñ¼ÈðraqÜÃ#â_‚Î!/]?!Æ kž|\n¸ÉÑvé¬š#Q#%ƒ\"ò9¨(É@…ñý\"26…ò(ZJèGqBÂŽˆµdºÍ¤Q#2bÍdL'òkïÒ*pKÒtÍòD&ãöc7MèF“°Š>æ‚»‘Ä5of%ÜË®»\"”6ÊœêBþÒò¬;2°ˆ’¶3++Ò®a²²Æ×Ì2	lÜ›‹6%nzäIÒ]\r5-b].œC\r¯\0­`]Ò÷\0p!/Í/02úÛ e‚\r€V¤O&’…8©f.c#ZG.¡ Ì|D&àŒ¬)£Ð|éÒ\n ¨ÀZ>/.=ÍÏ\0JÔsƒÿ,¯î|åG66S]6¥y6,2#Â@\$BH\$˜'æ@lB^&.¸ieê	³W3,ÀMaBò€â®‚0ò‹(\n”&3¨:£Æ8&/\n‡WC1Ð))\$ãº\"‡&ã°7¤\0`Ã°Yáfµ Þ«'.)\n7Ä™>ª„bÖÒæ¸hÀÌå–æ>íÄß€Ø0ÃˆµÉ!ÒåÄj3i>ù)NÀ\"ûBF˜'Â,ét ÀAB’’W#ˆ6Ì†5cZ çð±É }L>¥T@’ƒÇÂ²eQL-Ð£Æ–\rfxls˜î¬v(ìLõL\\j.zn&¾H†y`_+¸ Æ§,³”Zc?ëb#òŸH—²ž	CVZÕAt•AÅê¼jAB£ÇC‚¸ùzg‚Ö4Ó)Ìv\"«jf1ík¶a8+ Û)ã|‚H—¤r3­-af½€à\0t\r Ú";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ªÖl¨7»Ý÷c'Êöû£»½'¬D…\$•óHò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Ææ :T‰'03Îáºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äß½ã(Ú×%lN(@°;œ€­N»ˆÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xD¤ÂKVÌ7# xŒ!óæŽ­Þ23ªÇ\nbˆ˜4´)h Ë)+@æÐlZ6÷ŽQë×Š¬J¸5l»½J¨Ë‚ä£tB“&C¨+¦Cszˆ„³àÅB9¢XÞ6CðÄˆÖSŠd	#p×%×Ož:CèÒô’`Â:ˆØìóŽ£(C­#@#\$#:ö#<–‘Ûb.2\r(ârºh«HŽ‹ór:Ò-k®¸\"\"‚r5Aª{Úˆ¢hËi¡ËO£`@Ì#éPái¥Bà’Ð\"`1G®jöØ]TµIÑ`U8ôqSš!¨Ò!ÈvPÁ%m.:(2Œ³09ÚSpá0Tvoä™66byjoŽˆ‚U‘C…kY±;Ä¦LpÞ3ËHÜ2¥¢^’Äâ ÞÈÈÔüøŽ£Æ˜c5™ƒã:9…Šxä<¨Inõj8„6ã(P9…)n½¨\"¦)ÊzØˆ\$p@%, Û?6ƒ8@3Lm™È©iC½àÙÙ®pL]|›ó	›ªÞ„É.jã–â1¬«ØÈ”C%É³XæÃ\"Ëc#óœêº&+Wî…4 \\ÏÂ,¢íÉlw¦hÈæ9Žóø2T–2qÝÔ•&IÒ„¥*JÒÀï-uòèå/Ì3Ý2ÌãLÓßM³|TG“’tNÅ!<'¤ø±3!om!6\0KB\"=[&Åš#¤Iº\r!˜–„SÜþ\\Q€-ÌåŸÊ@P'érH\$NAH0„©ÀË+WeÝË@ƒ&eL¹™©ñ‡BniL<êÐ;Ä2ZOq›*\0˜†‚è~J1˜Uê(:†ÓÐ‰NH‡¸ÕEØVå—!='äåÇ äxO i\ro@¤Ð’CÃÉˆ'iò\$‘=Í!7IaÅhž÷.û­~.Ä§†‚<´f’5†5Ñ\n<)…EôŠ+£&„Åù¸õàƒW*‹(EÀÄ¤\"O)	ÚK\re@‡– ÜƒI çÊ:€¦Ÿ\$\r‰žV…¡ir‹—ˆ €Ë0Œ!Q9O‡0µ	!äK4H¹¬’Æ¹Yif,Em„ðœ¨P*P9\0D¡0\"ÎÐƒ\nDZÏ‰ôFcz %M{ ÙÞ”ËPTŸ,išÐs'¸aŽDIx¾u³BG½ÅÅR—F¥QÈsæ\\˜º0¡š[eÒd—2R6`Øå,Dh”™)@PV0…Å‚šâàzÈˆV%ñ*'wn†Ê\nû„¢„~ô£ñƒnÀèù¢ÂFSMj²œ”&ž4ò–”85mõˆwè¹Õhóê)•*<Í	”<äö!ÌÀÒCºS&Ñ)õzíÏscL}šèºrt¤SjZ½1£”¦ùB/e™%ÀÆ©¨PmcHË*f`¹Ê)’%8Ö'@µÜÉAHÛ…@cMj#G,ö#¸· T!\$	ÃLÛQ1á½G™è‹€PG<ì˜¢O™ö´L¡O€¼]%HeÅÐ\\´‰–†ÆâÞŒØ“è\r©¬_á©´Gý‡¶3ÖE—\"ø6…\0–·£”ÃI r¤løÜµ}Åþ/Ê\r.¹ÈˆU\$EäfGÖÉ#t×ä›´ˆT/¢È0‘úmÐ2™…fÒ.B!”1UT3|Î9ö\"!\"\0G#b±qâ¹aÐïœÃM^Þ#(¸Ð)”\$Aq¡L/a ¿UDë£š9ª…QÝÇAIN™ÕƒªˆÊ_›öNår¥\r9MÀLI!Ä/˜f…,­wr…'¯¬3äõÈT³‚«¹·0–(F‰lþ-õtÛ'=ÔÕÛ(HïI™\n^ÁÈ¨%Þ»(&Œ/E«=\"e£t¦W„}çKøsƒVÊ¨›×ûV¤H(5‹à‚š\"ÊQµ+.{4å\"]H\$Î´\\„#˜ùòNH-¦:Ï/éüî6²0N{4füãZö]úÙª'(Ÿ@¦ÊõÖv¥ÅÓllRw¨o:ö\$JhÖÚÂî¾¢úä5ˆËÝõ\\a	½q¼•\\:Þp—7§“rÛyrRmm½ì†ùu›óPlþdgûÙ™»mg€ª™ø³NàkP`¹ÕO	p´p@•½Œî1\"8î ã8¹ŠT¤ÜŽñÈä¹l!îB©H›g¡Æ`ÉTáûâÉË›	°D’Æ”iøŠìËJ6›gpg*÷Šv—ßÇÓ¤îM³±Ê].Æý(ï[a¶zœëü¦ÚùÁ:ÇC\$¡–ØRÖMÛ0MY”J²“èÓÈi:l3F‹þy™34f}Ós7~	Øm]­(=“gø_Âó¯icî]l­¿&dËC^¸¶¢>¶í¥6ó0¹ Ihˆú*0e§B’„óØ6¬õÔ¿Èlm¶²=ŸLÙþMÛ¤¼ƒÖ½êyÔf—Ãû†MûG·ò|ƒRyÎ>­ØeöªÊ†›/îµÕúÿ'‡ytUõ•7¡³ŸS¡5M×’20\$GséëoÔ¿gŒû6Øòuoi¤pd^\$»Ÿ[¢¡C’ºÏ0‚®ÀÅ¬2¹Eü/ÆôX‚àhXÈð{ì¨`bPÞeJ¼à†?ÀØi\"úÂ,,©ŠYçF4FÀOh6n…% Œ™g4ÂNo‚\n ¨ÀZ\0@#Çh\\‚>¾­Þ¼Nš‡æ¹),AîZ¥&~GPLÀòµf\ne ?Ž,Ã¶<‡ 2k@ p ‡‰‚TDzO cET(®`UBZ:BŠl ®\"4„N	€Þ˜€ÚLc°Ü(c ïF¼ÎT´î~`Î,BÈa,­²iEüÈ‘În&&¬ÎLÌø¬ÕŽ\ràà*ˆ\rŒÈÎn*ëmÈ†ì6•KšrpŽ	§’5­ÄÕ‡,¶C›åòÔË@@%ê`Öë°§ Â²èº ñ,<âü \næ8ŽøŽBbïƒåî,bÊAC¼Pñz¦\r”`ê%Æ\$ŒŠ®kböl„\$hì½D\$–c®#àBƒ ";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ïc0ÚÎx-T«E%¶ šü­¬Î\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iO•Î4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î\0@´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xD£ÂHÚ8\$	˜èã|õøÐ¼´ÂPŠb‹¬ª%¢³TÞºCÐôð4Ì-Ä-£M˜*c”: kòð½/‰ƒ8©ÓËÊö‰5‹£Ä¿	Ë ìŒ#q4x7Bº ô\rÃ:Œ\0Ä<ª€My_X\nŠ7‰\"Øý¿µ ‡NÕ¤tÐ­cŸhÁò€Â:ƒ @Ù\rƒ«ô)Ö1úH¿ÌMÌôBÎ3ÉìmÖýlú³¬cpãqBxä½YkÒRŠ£H´‚éÁBc3¿4»@òZW˜t¼UJš”Œ#u\$ˆÅ\n&C4Â»m­KPU\r*å¸`U?S¯¨`ÆüÄâŸLfq3gœ§¹RçBƒ6Î°³à´.N€ç£ŽZNl2¦Zê¿gÙcô\"M~x¿8iÖ¿[±[ É\"	Þ3Î”’–ˆ¬#ö7£@òã±ÆÃŒÖàAdÈƒ˜XÐ[˜ÂÆ­aaÌ#tvaJZ*\rãZ*b˜¤#)É-À4ã¡pA­lâ`6&Žf4¼Œs²Â.J†Ñ\rS‹p§î»ºv7ñì Ü5µc2ÐÑ&µÈ@ Ìå¿·/249c''Ê3xæØêØÝ×3Äôú°òe/ÁÿmÁ(äš¦)]ÜeÉÒ©æ„eªÃý'Œœ÷'J”¨•’ÂZKÝ/<T’“ rLÉ 2¦¢*›rnN\r:£Ç´žÊ2}CIý^šräœ2ÞHÁÉ\$#ÂZ		Ã'gœÿ†U^f9‚\$%Ì’³LUZRk…ŽdÌ¤ó†EŒ(N0ç|Ÿ\"By |;\n (ÃFÓ‘§“–IHb(\$µg†ä’ÞÀgP0ô4™Â@g•ìP5f¨§-ä\nÃ¸e\$9üT~¥aã›#N<‚ün™þsÁ@ÁÓ*Z!šG”õ’L‰1W¤oCø:jMZO_gŽ@Úðà4…‡ä’†5’pÍDl~&z>øüÔŠß\r\$À(ð¦ðRs„\r'¸d€ÈÂÛNÒ1Òž•c)à=/\$u:¼äh\nlr\0’š5’—Á0‹Q‰”šè\0F\n‘5Œ«Òe!CÄ1¦2jNiï}é\$•VÄ‚xNT(@‚*ýŸA\"„À‹@z\$3Ùe*ÊfHCG-…+–£×èp]fw¦zNIË\nmRDã_ImRè6ªã\n„Z8*UÎ£Zc*ÙÓzá¥î5ãÎ¤)ºôfòýŸ²Ó¢EMÌ=\rîØš€ ¬D%œZ:F¾(«@¬` !(Àé>Ny‰¸ ‰q4£.Ôwé¡7\$R®VZ:Mƒ’ËYóÝ ²æ]W–^ˆx8#´PH#r:IÄ³¶hL	š¦°&Ãr\"¥CÔr–A”;ÔèäaB¥wUeü7¢TË•2¡pÖt€˜P¦™RRý‹NÂ2«F^¨Wjï\r4|ŽÈƒI\\y?e¤Ï\"ºßmºï0D¸µ†³2‘ØÍ©—F!nšeh‹A9,ÁHÈ½ƒôL´@¦Æ§äZ»B T!\$	6DLüŒ’‘:?4ˆäÛ‘—©%UÞeÄàH:½à‚ü˜³°•éi?-(2) xf-çna<%·õ†ZIk}æ‚àÛp(uÀíNû,ƒJ.1‡æÑá2w\rÉlB'f%Ù†Ö8F\r)ï³84¤òZ°ðV2ÆŽµäÄæìaÝÆ\0Ã®RWBÝ uÇîÝ¶<iq\nÞ Ü†÷MDˆ±)‹Ò¨Õ£7‰†‡Jª’Ô GrEJÔ2†,ÒŠ³êÀ˜Ó0UI]Š…ñ‘L©…F9ÒÏ7ÊÓwL­‚Ü8¦×ª…8•U¥GËôæÂ’Ë¬²ÌÙ¶E¡ë¾Í\$¬àÉÂ8šZÌª©‹¥¡rqöjb†ÛBDµUvÔÄÁk5\rb\\¢©j`+WhcõSÖI‡±É(²WKãéê È½¦©jqÑ^Ì7tn„ë—ã³X–À-\rÒm\\Ê+M<YÑÙêö²bñ0†‹U.\nv«WFÔËTiÜÍ¼åA\$zUöS\n‹BÙ¾–ßÍY>êúÒû›[*TðŽ­nqõá[}˜qß,Ñ=ÔA	ˆÜO¤ø±\rþÂ,½TxÕÖã¼aàìDÃ\$ÂŠ!‰Û`Ïn+sÞ¸Wš¤ûn-ÏÜòèsîoÐ9É¸à.ª;=Ð’He¨`ÆÜ3©†áz°'pÊ\"¬’U¹ Y¦Üã£,{óI!Å…¯sDëëC7Kéê¯`0ÍS‘¥ùézÈ7GsvKz(eçöçYaÀßjæB¯!ÄN-ë~®f^Ý59(¨uŠ“u¼ïÌù^•­UÝ–Jè]“Cç4÷¦n<‹]…gçø¶f0¹YÇF T=UœÙ×=1/ÞoGãïq\$„ÍRÙi]ÕãžqÕrž9åõ‡Íù]CˆkdLÏ}®¿^¥7pÈ§}·Ø]U×Ñª—¿S•ÄÐ”ŒŠ\$ß}81ëº¥ÉüT°Ö?Ýq.„â¯¬õ‰ØÿüôC‡\0ÆÆ\rŠ@L`@¤E®§N,?È@\rŒ4#J<PIOô±7p+bW°4¬äôPADd	«¾\n‹x¯Pƒ·¯þóÙj¯«Î†pvEpQ\$V_Ê Ò/r\n°!dY àâ[	P9¢Z	t?\$hùÉèˆHµŠV…Ê–/Å†üÊ˜#\$0BÒ-b©ƒÓìô™¸ÝÄœÂJ\"âä-Ã\0}é<?Âþ#ƒ[ŠªvcÌD«Fä%bZ,,)C¹‘y#àæ1‚¨€ð\0Â= †9@ØiL +Œ1Ž[âÚ‘\r¡çÌY/\0=ÊZ*e}@ª\n€Œ p*\0Ü7&\0ìnåì\"NfÂ¬„ÀCƒ†šÅ\nþÝÇ¼Á¢Õ‹)âNu†N/ktC'HÚž;ƒ¶pÂ8mK±K©z“b¦#À‘ZEäˆ/Ñ&Cª\ré°ÕÉzgÂ]‘nPà#¹¢Ìé¦¤ˆÎ¢3H4àæ,bË‘ôÕˆR\$‚1èR¥\$1öbòëènvcý!­u€ç\"2-*‡\rJ\$V2ŽÎ.‡&•ÃvL+\"ŽmJ¯nTpN^Ë%’?Bð×Â\\aj.¨h¢®`aÎØ -ä@c¤.„0Äm~\"A…ú™P£\0‚-…£º9EtŠV?ª\"5òi*F\rêJpªCª‚¤ò¼iÉ\\–oàÿª0\n	f=`&†TŠ¥`	\0@š	 t\n`¦";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”×O¡\\‡£Ýõë• õF“qžò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6½ƒ(ä\rãÎŒ£u <8Cpæ4öD¨‡ÂHÚ86Ãm¢:xÂDaÄâ\rã#vÞŽm`¦(‰ƒK„æ#“ÕAééNE\$ÐŽháK ’J	se¢ûK°*ÁWaXft”)ÎM•ÐL.NÄA \nãä7=ƒ<HÝÒº¯<G‘ôå4sj9šÌ VQœä¬¸\"Vãê6\0ì0ƒ¨Ë%ÁÌE?GI,QÒvtÉÒÁÌR‡9hQ9¥Ùvs„|Ñ\nÑyËäFã¤x[kÄ\$o•±Ü{\$©o/\$Y+B6†67nKlcÂ7=7¢?œÙºeÐA³9Îû¥|Ódý@NÄRaxlÑÐ¥ûI=ŠôÔ©Ô¦\$<ñ¼¯=ý€`IéPT¾YFŽ´¼ð¬É@ø´â*Q%ä=ñ}Pç=NB\"§×væ£¦éïÖˆ940A“5ƒxÌ3\r–Mð—#õzRAHÈ¨7µão<„­¬Cc7!Ì340@xg=Ì°äÿg'°AFXº`u8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹#9D3lçh R—CÈ€ƒ7%ZüIA~©à*ÜÍÐfY¯õkžÐ@V:ÉP41­•®P VjÕ[«’¢ðd['”®UÎ¾»%D}½ˆ2†ÍX™>îõ'¡ALl?T.üƒ±±hu¡Â‡b· šC™ÂFÂD0î³WpeÀ4«`È¢Ò´\r\nÙ\\+¥x¯–ÂX‹då”³rÐZRIj­u²ÖØs[«}p®8Ìº\nŠê«±wÅÔCY¬^ÆÁe?©Lƒ¤hI~6ÈÞI‰ð‰<ÉÙVCxr‡D\nôž Ä„èB†ƒã@Y1<\n ( ”ƒPzBbô‡ˆ‚¢CÉš*#ó-0&!Jf`ƒ,H˜ÂC•W:\rC[2˜1‡FR»Í²6†ØÜ.àà³C¡º8Æ´7´V‘¸e’ç6Â8J›„{V\n‘\"¤t’#Å|âB°˜Ÿ„G2m\$•L5U^\$‡@¶4	ˆÐÃq>c¹\$Ã”QªË×r¤\0 ’EƒËæ¥wæŠ¼Ct½8¦é[•\"A\0fA¼6Äø£)¤YÄZ €1À…ânëŒ70(ð¦âûOˆ¨ “QMÄ	\"9Ô‹õTIMBê¥‹	°ˆfÁNXE®‘Ð*jE©tÞÃÈ)­i¦Ô…|¦Åçú¸zÆ|à€1Î˜L­&ÔÖEh‚ P|õ†\n­ú1Z-j­Ž!eµ–^E –\"\râ»ê!E;Ym£”]6`ž\0U\n …@Š®ø &[Ì^QêRC”Gˆ*}|™Ózo–~ÐŠãºí1è„*’\$Ãä)\n–¤ŠjPõûÖséÕMX%8¾Ý	>@BÄDl~Âî€“—ÀÔ\$R›0ña[ õðÂ¬‘BZ¨#R„ÜS\n{ ÂÚ°çBØsT˜TYrûMQ¹›ñ5’!˜ aBwÍùåL‘Ÿ~98¨•JPG„¬b\n6™‘Ïv.Ð ×q³Âüó	!é\r!é¥Ð¥¿šXS¦Ú†Ò#Þ|O™uˆ4EMDØòz—?RE–‘œéF\r!”;•F\n Ø:ynÅæ—V¾ƒ„®žZºÆGÛC MY@(ÖÎu5ÐºWP½×E€´,Kd1i­u¡õé1bzáˆ5(êˆâ^g	‹]«>+ËÈ‡G˜M—‘{¨Åæm+\r¤@³tÐRöËÅØEF¯´†èž†5¼¡P „0+2ÊÒféôQÊ¾o¨¸r8Tg¼Dè¢Øžþb¤˜%ÜÁm4<rÁ³T	 &oÈ\nŽc`¿tZ›ŠÔbóÄÈ!#è A9\$¦'!…0æ&tð­ú ¸}(â\$\0ro‡ˆ1æœ1z¬†‹ZÃº\$§«¼èƒ@qº—S=\r”‚KÀgþ¯é-¦|ˆÁÏ æ™4!i¡E;±À9\$Òä1’PÅd[O_DÅ§ež™Ûìi£‡ðN\0Å\0´k%drˆ@+[îÛ	Žˆ~@Å@ç…àr‹¦+XpæÂ rˆáv€lTÔ;@ÉF0Æ˜åKÃgÏŽáötÆXÛtLXs	eEÍø±~ÔÍ,f=/9Óf¸á­\0Hý‡ÍÌCÞñÏƒé¾p+£½r q\0ƒÍúp’_ŽÍSNÞ˜G¤QÊ  D­aÁƒõ&¥Ëð‚CY’gmâ9±Ýéýq¶7þvÓü¦nLV7ãïŸF¼ÛLtgJïŽ÷OþÔ†&ffbž¦òoiŸòR\"0\rÆ_ŒFuÏ|Ã\nú*ÂE:Ô¥\"¡&î6t‚¨ŽqŒCÌ`Ä˜Æ„±o¢ÂXÂm\0F,ùì@ÑºvOD÷ðttíjÑBLØ‚{‰°!Ê!x­¤,\"¨§‡bÛ­œãpœ Èá..©%ÜãPpa°˜º+¦º¦PMe°†_pÃ\0‚ÅÖÖ\rÍÓ0âö-Qáx­X#í\\ *ˆb†î\"´V2ä–ëHL Å(ŽâõíœãD,ëZÕï)¡W\0áxD#:åhgcF\"¾Ø1\"0‘(åjŠ*ªÁ0Úvm:Ö&c£ÈÀ-,`ÐÎts\rF	Ý\r5/„m.Ó.#ð‘ïšÆ±ôÔøÑ”ôÑ¡1„tÐîr¥þ.¡jAÈC(Á^ÁÊcô VdAÊÃg2:0¦Rð¬ûŸ§¥\n‚9«G\0qöÛ‡%ç¢r†¨IÍKíN Hô¥\0ÉhJb’!!Š|cÒ\0ÆÒ&H2-#`'¡Ç!ÿ­JLïòPc!,3ïou%b?%°®Ã0Ø_rlû_\"'rY%Íc&'¤ë\"8~¥\0Hdþ¥¤NP#ù)‚?)Ðž¿Ê]*Mo£Ï2°HD‰+’¢Ir‹*å,¤,á)DÞ×aØ2§eRâØƒ	q‰/-xas.ï¢Ù’ôîòÓ0’þîñÂJjBx*íÂNíË)²ê>’—-p”bÓ'+,e\$`‘\0ÐÏÃ!bwGx0bÁÈa0„4ÇzÔ¡Ï\$¨„|‚âXLs%áxæÞñÏ\"ý'DÈ~Ò¥ > ‚ó7³81ÔåÏVa¯Zõó@†€ä\r€V® Ò`Ö²¶fŽi#†%Ú\r Ì…ì9€Œ·…ÔªÐI„µÀª\n€Œ p¢Šª¶=£˜ã.BtG~g‚m3m*²fúOˆùa\$ÄÆœÅ°Ë¡Î@›=sÛ!ƒœ1ÁÎóƒ&ËÒxá%D#\"2nD³b¨@¬”'¢8	‹b]ÀÚY£X8ThXÆR/!\nñ!jÌÁ9çš\$Ó¸Ç8Q¢úoyB0aÊoÔŸAîŒä¢8‚ÿ/´¡ŠôrcA8\n‡7#P5CY>Êæ\ràà¡ÅÎùAÏ”éî®ÏVkÿEdææÉeIpÔMAP¢ì²‹3B§À\nÀÂ`ê ÛF\0ÄÄ’ŒG\rH§¤Û¡(bVxÃ¦b„@¨T˜8&–G†à'¦s°lš…Nô¨oÂëVÔªÔ'Któ(Rk%Ð…(â>ÉqœÎ!Ì„r¿ÓG/1€uS€t#\$";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±êô“Ê^ÇhA?“IRéòÙ(êX E=i¤ÜgÌ«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûØèAðaÚL«ùUÇËü<ø‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo‰ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯°Ê9Ãxä3…ã(Ýd(Ü9#}–*ð’6Ž\rÈÛeà^0‡ÑAm¸ãxÈß8›^)Š\"`Òâ¨'\\Ñ5M’í>v%„dY–“ÎYaz‘0óûà%–ƒ•³Ró”äbbRB@P®0ŽCsì3Ä-ÏB±”tª¿’ðä¿—¤¡ÖT“nGdy2vÄëàù•€Â:ƒ @;#`ê2¯ä!@vs2T‰ÂþË ð2édLdU	‰@ê’§Y@VdÑþ?k6Æ±¾J“'*…3 (¬#gƒc|æ7!\0æ1Œ#sçv¼åRZP9\$rë<teéHMôž/ô™ÚA‡YNDqøW\"rœ·0v=Ù½íß2ém,¯ænèEq(¨ÆD~A7ï`Ã1Q)ˆbDŸ_}^TiiGÐôŠ½IB\"­8r|¯/¢èúHžŽM;Rc\rxÞ3Ãe…xÒÔÂÌî“d*\ríÛ¾!\0ëgŽ£ÆÞc6x\rƒxÎûac|Ÿhaá„û\nÇ—ö§0RsÌ\"bc¬H0†ÂF Â£ˆ`9!KüÄ»!Ø(É@‹C¨}¾ø„«ä|ÁPÖàÖoC2Æ}Ë@û‚\0‚°rÁi-\0È°Á¬UÊÁY@Dƒ\"Ò8Œmo.ž!¨…'.Y‰\n1B<ï…U!¸TBqA	¡„9œPälã`sës†PðJ¯‚%…^¬UšµVêå]«Õ~°CrÃX«d¬¸ì³–‚ÒëP9­e°¶–äU\\%Qq†UÊ¹Íúã!¬×®óf°ß\\‰\rÁÒ+Å”J“Ú<ŒÐ®4’\$„’4‰š` ‚\rAçŒ‚¨\nY¹Jc°\\  BP,EÅyzŒBÒ‘!Œ:1µÐlÍ©·7&ís‡Œ\réÉ6½Ÿ4òÃ,{/ðDUA8+ázªk±¨ayI)#¬¥“EL‰º¢ð²/.4†@ \"1×BÏ9}P3¡éjHèyzá4®sbÏ—Pn” ÞªðâÐãh ÁÈ7†Ø}\$Lo8ë(7òºõ,Žì …\0žÂ¡ç^j96L”¤ZÅa[K\"ôÒ™”ð”yM)åF‹ÐÁØ)ê(BÅ	 ¥Ä…\"@BÅñ\nj9-!kÖ5Mð7>å²ÕûØˆ4†p@»e27¼ÛªÐŒ&}\\á¥lNxÏ©5oK×,Bþ&EÀëÅ1æµÆ¼ØxNT(@‚(\n´ €\"P˜mC†#È¡@'¡`eWÉ+‰ˆÎ¶â´ÑkH H®€÷Ÿþ Ä	†&¿6[1<ÐDõ‚Šž¥¼4Øñ\\miÄ¶Š/ªñr’r´a¡@'(Œ×(*¦8ËÅWfSÑ²Î4W‚âîÅâwŒMŠŽÑ(¡	zv2®9‡&Uötšpì¹\r þIÅwE**ú_ÌÛ-æ!TR³ä¤GqËY/B'jf\n‹<×Ø#¹1gÌ4‡¦‰6VÄhL2›™¹<OÉûºJé‘ç\$ç^|kÁ¥ âÙâÏÃHeëíÛ/§pÁ„¥Ç\$™M©¥ä,Sƒ™`gx’¼†ÂDþr²ÌY«8ço#¡¸ÌºÌÖêÇ“’­Íç¶âŸ%8§…c)e°:`(¢r 	˜uŠ1P;DZ9¶‚É*(»ï{P<G×íß1[NC	\0‚—¬<’o^Ìë¥s#‹<‡`¿Tµº~:ê._ @/es·\"ÿª¨Ýð ‚^š&Œ(¬nU­€0-|OvÏn:ôšÐ™¤_Ý¼kÂæ]š=i F©Õvîòl±±ê­ë×zÙw,}Mº\$\$eb¯	‹w›¹C\$ä¬–’òbBÏŠ,º3Ø„‰z%µÑŠvOtõð\"=·˜°eS+måC0ÖëDÂvXp\\)P[maH©Uñ\"e³²!Õîðƒ	>‡›\n{Ç7«µ‘&MŒ™•2åé†¦4-yOÞà»¼Ñ‡!cá–[GÛÿp”8Ã9ïBæníó­“Šr‡7Wšôt;Ôd˜-´1{„‹Þœi²Zd\$ª.13CÑ9ßa1,?¨Hc:M—\"Ì\\\$òi pDdcuè„ÓŠ¿~ž¾ˆ¾þQí§nîÉ:ÌˆÜ°¤ï€ëØ¬+¯ð­ã²Ë'Gß\"€R“ŒOnÑ÷Z÷<{ÇWºŸ9êÚüÓz;Àñ“†­ñ5‡²Þ/Œ®þê÷³Ò_ŸMäXf÷^±úë¯x}ýò]wÊî,~ó‹]äõ7ŸæœÿžçµÖjUÍ¼ß±ò¼Ÿ^õ|qYŒJŒ´6ˆ+Ý)EgïªTõ©Ÿé_/c~>‹eìÍ› Ù¢¯^|ÞûŒÈÿ,Îôìµ\0ÊÿO¼ùO‚wÎÎ÷c\0000Nè<á`ãÎ)l\"Výb˜f&f\$âºŠ°M„ÀÐdÞ@Ì¢*L‹ºp!R®L#Áv·a>%Ö¶oñêÒ06»êšß%ð+ÂÀ â¼°QNŸ\0,Ìÿe(íGtÌG4ókˆtO\$É¯\"ü/¹\nirúN©\nåù*ì°øoÈ^!n*PÀwîVê®ÐéïèòìçpÏ¯ˆ½pÚlð\rÐÃ0D%¨¼FANr¥²ãºb Á6–:\nÐíÒÑ¯ÔËOÑÂ·ëú¦˜'	ù¤”Cã£†–i¨·æ*C`P¦Z\"rÐDéáÚ¤òÈÿÊÉ\0=qk\0¢>0\0ln\n¯™\rðDï‚Œ³Eô–\$\nÒjÔHD‰Ž”ç©ÃMúGë„Ÿ‘`®nûP\0Gq¢FÂ=ñ¨Na;QÍ±ÒH1_¤éúÎ,Ü¬u`ûŒØÎQôü‹\rnÁŸ *½‘´F1ÿ0Ìü\"E ÌçÑ>I@PíÒ1ÎGï¦l‘ÞÒq=’AÇ`	Ø\rqMtÇPTë64&ÀGOâ<æ˜ÁÖ‚¿åLÀDà¾àAëÎ#ÐúÐ¦\$™ðåeö¬t#ñÚcÄº„&pùÒrcÒ€€èR›\0è@Øj|\r Æ\r`@ZJôh„8ÇÔ\\ÀÒÇÚ]â‚Ë\\`ê¦ Ä”ªê\n ¨ÀZ\0@YHˆ¤ƒîèÏâÊn”ua@u¡21æëTìkâiæÙ±H1Ó@›-ÒàK¡h`!fI®b2Ã0rÌöKSFæc&Ab¼,‘\0ša\0rÆ¬	Šð\\àÚXÃ^8c–ShWæ6å¦´B!d\nêÄBÒ¾}æø8±üë.×2D@Â%3	Ž¶þag)„0ù³9î¥r½`¨ox5cZ5òò§€Þ	ºX,\\žS¬=ágðÊ÷Š²jljÃBî£‚¤ó­ì³@H@a8kml\nÀÂ`ê Ú/â’:÷1¤dÑ\niInSR–ÏÎS”8†ˆ'ê.EoŒô²~ÄDþfR/EO%;LûqhNœ%„iã¤¸NßôCÀt³AB>\0";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPVãuµâo¢êü^<k49`¢Ÿ\$Üg,—#H(—,1XIÛ3&òì7ö4Ù»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–î9lZî(ã*Vî£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:»ëø  4#²\\ýL³;¾•-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7át	#k÷#.# xŒ!ôGD²Ó´C›*)Š\"c²2¤‚èñn É..1˜¥,ºÈen:×&)V9;kÊö¾·\0ì‚C%’ãÙŽ\"à¹#nÞ:©i{0«‹P¯	¿îúŒÒì¨\0MÑu ƒ:	w]7Xè»;Š@Ø8.ˆj\0ˆ¡¢\\wPÂkP‚:´!\0’7n4º:B Ê¨åœ–£([Wø4\rcÌ7¡¢Îã^Y~\$Œªâ*¿³c˜ê9B’4¯Ï*W+­ƒRT‹–xåU•_Ðs†‹3‹4š2 #šV†ãã`ØÕµ¬¨æ1Œ#s¹X„¬¯6m\r+ØäëOÃž÷YKærWx½\0ÌÐ—¨8hö¶4HÎØ§bfn&ÿÀ¹‚%y»Þ	.—ðò<È4³lîF†Ó£‚Ç¤B*QÍB’—	\n#Öºæþ Vë.ËãˆˆNàÇÀHñ&:ò£™£ÈÂl¨Þ3ÃeZŽ‰Lä3¯â Þ‹%cpó°Ò£¨Æ1³ã˜ÍŠ­ãzÍJ…>Ö9;î7'7M7a(P9…)\"¹¦Ë=ä—ˆb˜¤#UˆÒÑ„ºLÏ“Z@\rô–0ÚÉ£‹5M¨!ä(rÉ JXÄ½<dÐÏé•}X”œ4ŒÉa“\rÄ¢›ò\\ü\0AQ*,9=ÐÆ¥ÉHdI ;'†&žÉÐ\"Ç´´àÎ¨Õ)\$\nf}Ë‚äðŠRt%ë®8ðÒ“‚ÐYŸr¸e˜j\$d•6C6\0Ã¹c]!”<|^¢„5\r	å=§Ôþ T…ê” ä£C’R1‘J)e0¦ƒšœSÅÁ‡ÄLN•B0\r\n­„’²4}Ã¡úI/5PÄ(ˆ…Ð	E<µ3NÌÈðbXÇŒ<vûŒBw?gô4†ÞZËjw(Dxúx¬~dÒ)Gh`(€ ~à—?È\0‚tû@PCRå1ÃåXœ¡œ(…èý9²^jŒ¼‘%„ˆ;Æ‚Œãò#Æeø¼v[°y@`(+ãÒA'%\$¬–’òàÚR¹`\r¨a¯²è†Â&ÑA5“Rk\r1:5ä,<™èÚL±¶!…ÅtšƒTqƒ‹8d|9#¸Sa™¨. €1’%\\iÍI/\"&x’f^Í¤Q	áL*N‡X]ÁƒgbùÅWV\\h\0iAÄað#Ò~”Ci§¦˜Š†àÌYV1eP!ô4I'Oµ\nNî’5ÖÂ~Ãzˆ|¨²Ó–ÁSË‚Î,\0€#I~ÿÏºžsrBŽQå\\’”aÍ+…CŠIÑˆ\n“AåíÄ¦6BÜ,íuˆ…obË’ùb«ò\$T…ŸAì2k j¦ŽÙj’Ú™Í\r8‡ä \$êCrkJas²vésC#rWÖ äWÅ±#Dp%tŒZòk\\/òM÷àJNúw§î1¼‰rHâ›³­qÔ©®¢’ÎhgZk%.Þ›Tðë–Óƒ\rn\\»¤¶“ ozÎ~\$À(KPKºá…E\"ãÊ ™q,2!%¼`Â•:ü7òö_Ê»Zª!:LiÆœ^‡Ö\0ÁJÚÄ³ëŠ,\"2´!1P­—‘Ó™Jyô¤‚á3KÒc½ä²ëžWß8nIvi¦EÂæY1f!]'Ð;ÎÅ ^Èn[æ†èdJqZ¦÷#4¢\\†( %“\r5nÍV£9Ám¦VKzù‚-©W'lñT’ˆrÝ¬8–<Ï,_ŠšY›2Å&Ž—ºô(Qk}j«Òõ%Qd†\0W3°î‚]GqÑœF„…JQÛ!P*†Ìæ~¢Áª\$Ìƒƒ .a’¹6^ÛcE¸¥1¥ÞÊrï[ë„9¯C¦ƒN¶Öf0Y€ «ª›*w#™¡\nIÛäðÖGS 0¯Åód%ÛWìC\nS\"ŽÈ(ä{eë€]³öÓ:{[cm’4QÓ¾Ý½æ6Xí‰.ÐbÚ:®örºw–Ò6[ŒŠlR™­·Îô~˜XAÀ7õß¯@­ÁKûF;'7‡v¨LN˜k-\nÐ“ã8†Çüp KyLP\r|W®é.W\0®<Õ9ø¢uà²JþÃ	 3Ž\nÓÍŠGŒýŒºŸ\$¬Ö@zÈ5¥£âÂnxlm™)¹³ž`R×+–<¹r	ÖjFçªÓ¯¬lÙÌ¯¡y	Ó–Ê‘pï™\$í˜{°ìœkÜæ	Ñ½ßÌ©eðÑjhDáÒò@Jàm-—R#ç;Q0Y÷Šq4t8 \"‡MñÃX4¬–Ã°ƒ™ÿH~cÐó0D¬ý†ðá¯Äø¼‹‘Í”ãÛMô×äÒPÐÒR_VPÕ†šMN*ð€µh›¼ã{q-ß®Ü÷yÄ¼’IVc1ŸwÜwzí?Wã\\ËÁôHbú¡O’¾ß|.'ãü©ß´8\\kù¤ªöW›óüz‹ÕQÚ›“ln­hî­ÐÙÌþÿ%Žÿn ÿ¥Ò×jüü-’‰à\0m\0®á§ÊÖíÖ“/æÆ£pËê.°J\".àë©×cÇ¥sð3j÷¢^ÌIàý®Ô\$Œ¢Êddiƒ~#¢P¸ƒTŸ¯x4	@]IF#Æ\"\":Ó‚:sG»\0çKèkOv#`òEé>,€cˆ±#Ú)i<,ï`ä£¤¹iÕ\nn€(¢Žg.R09°<Ê°r,îÜtÌ<ÅOÄ<«VË°x[,ÞB@ÒZ0PüN½PøºB”ì}l€ûOÜkÄ¼†/Ã¶0-5P@ýæì\n\"‘%\"I0rön¨Y®ãLßgHáb0ÁeŸ\"ÂMh˜,#Î!±8á‰òMæÜ6c¡Š:ÐôüìXù¯ï%Ð¥±w\0‚Ýªom¶#æ@eC·€æW)Çð\"Y™ÃˆzèG²Ñ±ªÿ®;`	ò´p`CÑ|ý/ÞAÏØïi-‘ˆªÍKª&ãQ¾ûfü¨c˜_ðQn½ <ûn½NŽy„3!Qþ,ŒÛ2lË\"+©Ò)\"Ï ±ñšÍ„“1µR4ÍÆŠE\"ÕdfIÍ [©në‘	%„ ‹KºyÒ/®BrZä±”ëÌ¢\r ÌBüÏÑ¬ÿM~¨°åÂX‚þ]ã2ÿd(& r˜å\rm)ëÖ¯ÇÐVãg¿)ÑŽáR·*NÔ¢Dƒrš].df)^	Ò§+¤Õ0+Pþm¹-˜\\0Mr1.rò×‚Hen\r€V¤ Ò`Ö.¬n¢c)ž€âjÇž;\"zšEP´ÅÔ2§Ä\n ¨ÀZ\0@.(^ àÎ\$ü¾¼#+fßóN¯ÎB¶p4îA5B8Æ¢#šGdîvÄjZÎúõÀšK2€&j\"¸ÍŒYl´	ÂÆ-‚öQCŠË%š8Ï/(°£Ú€3¢Yc’€ìæ,d²‚Æ%Ä¨Ff\0¼l¨hªÂ|ÂÆ2£J, ™=§äFbä£ŒF*´âÔï]@êÆ˜ëfÄ#ü»å7çúKwA‹AR¤\"¨ÌLä ít!«®„Â5‚à%ã&E³2¤`ÞJ¢Ui½?Ô:EŸÄ†e†\\Y«Ì@0àïÆ4IÏFoºC~slf˜´df	‚t%ãè»¾ÅcÊB@Æ ê\r 	ôHQSô=À‚-…J²ãÇKt†m€©@´„“A¢<¨ƒä>ÔbùR·S`<ÔFLÌ´ˆb*G©äT´¬ê0£\"“kÆuCXB`";break;case"ms":$f="A7\"„æt4ÁBQpÌÌ 9‚‰§S	Ð@n0šMb4dØ 3˜d&Áp(§=G#Âi„Ös4›N¦ÑäÂn3ˆ†“–0r5ÍÄ°Âh	Nd))WFÎçSQÔÉ%†Ìh5\rÇQ¬Þs7ÎPca¤T4Ñ fª\$RH\n*˜¨ñ(1Ô×A7[î0!èäi9É`J„ºXe6œ¦é±¤@k2â!Ó)ÜÃBÉ/ØùÆBk4›²×C%ØA©4ÉJs.g‘¡@Ñ	´Å“œoF‰6ÓsB–œïØ”èe9NyCJ|yã`J#h(…GƒuHù>®Î òo(ÔƒœTë¼ßp(Tªl®§U«ÉŽ˜{Q*|Ä ‰ðÎ3¼€Pœ7·Ãxä·Œ,8Ö¤7IcÂï50jÜ)&ã:‚¸°\"8Ë9Ì:LŸA¨ËŠƒ²\0P 2¨É³'7¨á@ˆÀ%¢¨Œ6\"ŽÔ2 ¨ÍÚ::¢`Þœ¹+ð#Iê6ÌH\0PxÊ3¡Ð:ƒ€æáxï1…Ê ÚÔºt3…éôÚ<9ãr`´…á”<hÃ\0ã|q*’9„\rFÎ'ª\\¡\nbˆ˜4¹é( 4­°„s(*€¡ îˆÖÑAkÊŽ‚S1+Q)\rbì	.zhÃ P¯µIÂ\"ŒŒ(òç5Åtç¢\"Xß;¯óU`Ä—#J‚:Žƒ|\rJ#!wRt¨#8	„U\$R²C\"0\",'p’0¥±°¦é2`U:º,¢Fã+jº'\nž—B\n^·	-óÂÝÆcpëT®£Ù€ŽOwF‰€S~ IƒqS¸u\"q 8ò\"ñŽŽlÂZï\"ˆ¶JÓ\$Ù4eáÙ«e³I‹:Ï°8(á€PŠ—çc–z!B¡U‡M¬5˜ÈT¸ˆ!e¹`áJ\r. Øýà(\n9Œ­Òr7ŒÃ2Ú7©,˜ËÅˆ¤*:ÛÞ½:ˆÜf9nqkHð“”ÅÉÊB‘…ˆ…©@nÖ²DË(­îô×Ó;T:\$¢ ÞÌ7b¦)Á½£@\\<Ò¢o\"L,¹²,£íŒ—¼³äÂº¢mÈº	Š ¦\nC1ˆ£\r\$ò9‚ÉÇ:æÍî[wC#r˜A*ÊòÊ”Ô@Èè%³äüÙ©‡5Tqã\$:p)ƒÎ6o2LžÈ/KjKHœ7eçÈ‰oÆõÚÃ¯ÎçÞ“ÔK	i.%äÀ˜“\"fMÉ5\$Ø›ƒ*p'ÉÌ7'TîžTXn{Éý@±¡Cq¢#j 3†T€`¡²re¤›¶¸ø›š<'EÅO†Ì`‰ƒkfôß¯Óm‘»\n (WP\n\nP)†e ³‡4Jˆ >åYIx›Ag‘'3S8g¢|Q'dôŸÃ†Kßa1Ît’´DƒLz9ïðÎÀÊš©–\r.˜Æ‰Ønsî†'±ò*s \n	K4¡µ¨ÕÐ{„.Í¹¸äˆP:BÀã<‡Júˆ¢4AÁé³ÚkÍQ%ˆä\0žÂ£ãM¹ÚØXcR‡1!4r{ÈD†‡0ç¤Cj ÌTŽK2”‚dEH¹#duJ:e«³Ž¬8:™`Œ\"*6‘nm£Ã,ŒÑi7~fN]2`ZƒÃ(Ä ´€ ž\0U\n …@‹=§ÀD¡0\"ÏäŒLºÃ&tý#4ƒCv8‹-}¡’nŠš¤’AŒ¤7ÓšsÎ‰Ó&À)1ÞPÒ!¤¦8ÌPÂgŽ BG¡LHdƒ&Ÿ«›7Žzš´ºo/_Ú£'eÐÑˆÌ¶Z«§ÌÉ\n<”Èk\"\nrj‡\0äYß\nß¡ó6‰£ÜDB±Ð|E(AùË7O„=Ž\"”§^“[ÙÍ/D„4ÖZÝTÉ¥dÏÄ·9äECLõ	L5‡’pÒ‘¸ib%¼è55µ`ê+QTê6)…4P¨òˆ5†YÊi.”ÔŠ°Š°€Âb\"ª%CÛ`¼ßLx^#/aR*0×;±54ÒV“àÆsŽ•c¬&ßš\"\"vÖBJ\r!šWelB2\n%¬ô)-R·Ì9\r&xJ¶DÑ*r4@¡D:\0òírÐ‘ñ.“‚J†'š¤0Æò‡ òBÕÈ/â—]y/5èvÄ”b^MàËWÆ\0R\0ÔK¡‰0EÈ¡±%!3ÀÇµ=N«ù}0	=X\rì9[6&Á\0){«œDHœÐ#h•)B\$ÊfŽ4š„|Ç¸ß*¤Üè(¹m’¼„‹Žií3Ñ:·X4‚s1ÙÞ: Ÿ†#Œó²È4æ¬°ÌYíS.˜[)'{la\"Š±WT H)\r±™V™ÝÙs%6—:†Ò•ÉÛîŒÖÖ°í\0j#ÐvCÑ\"K¡\rts¨Dñ”’T`þš;'Ùy­GVÌKuÑGÌ9£¶Ð”…7p-1ª'¢/¡\nh„k¦Q˜%¥%ú4áèóþ¡NºYƒ1Eað)¡‡TíÓfe¡ôMFÃÛ6¥ÕBù3|\"vd`–©&aOåf’ÍæüŠííµµáG6L»hí¥ ¬–×‘JïÓO6£­a÷V`èv•¾°V.BÊa\r:Ãtí·Q;qC=£‚]¸Öï{ðŽ;ÉÏ\rÞ›•Ð¢hr­k¥B'¶[(b{Ìá‘2fU£kúp@èñí%®ÔÚ¥Nù9ÌÎ.ïÎJÓwE'gDª•\"©¿átÓHhnH©‹y~A·\nÛqì¶ð8¯W_Ûc‡nêŽ©zÇÒœrð2û.vÍÚŒ‹‡í>ÒB;_\\'z:ì3^ã¼ûÍì÷«Ù{çv:¤L£bÀÃS!\nfîÊcˆ:çG]>3E÷á©Ýµ3y“wØ»§žÐû“½Z€Ì·Ku¨ªÕ`Ö ¿éÕ±nð­®zÙË‚•ÀF*/K“çû–ˆëØ{ÞÉè÷¯Å÷ýfÔ*~Ê&‡Î\\žÝcù½G¼6\rø>’ÚŒ±þûæ!oð›Á>mÞ6â.³û??Èãžªß~Â€5Æ/‡·ºö­˜¼G‚í†ýp\0ÞM&î‹šxpûmê^àæÊ€ÈO<Ì¯dG&WÏh.ÄÊˆBY­à	gØ0%|kˆ:wgÂm#¢£@Ê¢ÜWÅ ÎÎà¬\"\$ †?`Ø`Æ- ÆnL(5MpÃ2j#êš£8»I4(Âha(J,Ä\"\n ¨ÀZJÁnÐéÆhHªLå*(M2½lDÀj0kLX8H‚JºƒHùj%	 qÃ	ÅªÏo\r	J.%ÀÐ±G^ˆì,dDŒ(‹v,¥ôZ¤¹PNGR¢îš#îÄ]¦–d¬=­ýmÞÑíìCÚlq0Ð±ý0­\"ø Þ6&mÉ4ankÊ.\\Ãåð’qM2gÀÜÓŠj_‚r»Í˜&ñt\r‚æÏ~ ŒJÀÊ;Î@¬&ê¡`š@QKã»è|aÃü„VAÏø;â4-ÑŸybÝè²©æ™J<×µË^ln¢øÑ´c¶0ƒ’ÚìÌŽí\\s`";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†íöìÃ'5Æ‘¸Ã>2ããœÂžvõt+CNñþ6D©Ï¾ßÌG#©§êö{„Ÿ†o6væB)âˆ9«Ã˜tªjÂ´”(É+žŽHÉ±ˆZJÉ=oj9)C*d3/CI†U¡¯Øè<Ž	#\$“0Œˆˆ¡§ãò0ëÐÂ4Á¡8°&h°œ9/xÊ7¨î2Bb>’ÅJj0Ži ó\$£h)¡®\$(øÂã›¬0ÊB¸Â1 î¦¸ TVÁI’ ’7%ã;¶Ã£ÃR(çÈä‚6€PxëhÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ÑÈÒ±áª	#j](¦c xŒ!ôH-ˆÞ”µH\$š\nbŒŒ•¦«üp7*rjä1¥pk˜Æ¬H¨èöWƒ¨ê9B²¼;„ á&IµûjŽÙ©=ž9Ú Pœ¯¶`Ò•Ë®¢»:¢Á*R1)Xs\$WLL%¿H‚ É3¨#­Z7'’\nï:ÌÃ(Ì0Ž£b;#`ë\"	p#£uy‰1±C\"-'îZêâa²ší^²\"Ì—Ä©C2Ä®T\"5¤¡\n3¥wæ/bŒ#hÛ%ƒ˜ÆÞÖ\"`@7µ£”¿0®¹K#¢9ÍìÏ%Õöu ÈŠs¢ë¼cPô¼jš°Úëëøöž1M(®¼0BË0(€U:8dhk\"\"€å’ZLªŒŒ8ó]4I³0…)ìàP×‰aVC2‚º‰`Þ3dôjj*Ûólß`U	8ò‚W¨Æ1¤ƒ˜Í„æHÚô9º660ŒñšŠ½*‰M€%a@æ·ª:2/\0†)ŠB2|å…ÁÃ–3Žƒ c2ì£Èn†8+£-»Éò¨Û·\$àÎ2&¢£87fœãŽ°ê#'f†º#Å\08ÁöƒOÔªÃ\"ÄPÎú£T®Mf\$Õ°WŠ‰S8Œ ²þôLóÓz«t¨˜XåŒ¹7Ik‡4ÆqOãuFˆiâ¿túÁ”‚PŠDuû”hrQáÉH©3úÔ¸nS*m·—%ð¨•\"¦*ª …VOœÉ*\$\r–µòö¾IªT€ä‘Tòˆ÷øt\r&y’>a‹ùÂ†êY\"FŠP]á@\$C\"¡#gÆÈ5¶C¨AUw\0){âöÅßZ­4qlÓRÝƒ¡S6f€°Ò^b_wIá®:Ròî•º&ää“ÔèŠ»8Džàèñ^<F#hš„’(LÑÒ\r%p§Rf«\r‘SA¡Å‡³ÌS	ëí}çØœ ÆKÕy±6k<ŽP Â˜T­üë›2 RÊl§xÆ(¹;÷ŽÉ| òÌé\$¦†E\$ªçH–D7äàgXð\0002“WùE5„¼˜¬ÒDïZæ§4pŒ#q[**y‘Ä·Í0%°r8„Ô#`Ê^\n)Ià)ùH\0Xˆ¸NT(@‚-!\"„À‹J\0Rð%áµ-¥  uá!´Õ\"“6h‘\rÌZDÁXü£`c‰úo	á¶upÚ÷–Iâ<ÈæˆÑ%f£dI¤Õ±¦˜TƒQÆ’5uW«¦ÖÞ2J«D±:6\"\nc 7i:,“©ALT\$Ï%rÕô0WCU1®6ÆøÈá'NÎíf†Äb<1'1{Qê„cš);¤…GÄ€òDJŠì•§—ŽÖO-U’q¥³v¾MIº½ ¤x…“JCºÉYv`Á¶âÆŠk&W\0¢µ%°dBL9Ÿ—Ð‚µš™Ì¢²”3ÑÊêÉ=nWåÝ7Ò,.á8õµ¾Öò•/F-ÊC².›_(`*¸÷@:&¦y|‘fž•Ð³Ò¼Œz“…@‚Â@ —„5\0¬Ôk#©¬‘‘‰™¢ì0Xr\$@”‚ðA‡¡]d¤Ê™¢ÃðÑ[å€ŸœS¢»«ÜhÍöS€œNC\\Ùí˜±âüHGåeb¼7b_…#3Ó¶,tJ‰eï2ë³¹°æç«‘a\r˜«œZø1\nÅ	?¹òI–²æ<L··)ÄŒ£`oäX¬ ¤>É29™Ô¤g¢[?3ñ³ÇF¡0^TðMB±öI´H†€¢\0´YÄA9öÄgÊŽ³jS5AÁ”ÏðÔù°°\n¯‘j<ëB`K‘/ñÌ¯g¢¥£Š’Ù(¤©’4{pW¡V¡ÊÝrâ×”í¹pD3TdÔ‘<íèâkÃŠølË{Ø)3aìµ©°¾4ÚžSå¦ŠÙÏ„ßqg¤ÌS‚!ôÝ»­øsUô:‘j¡mÙ½ E<KÇSs\\#û´™fÔ•¶ü•/Jb¼Iè(fd¬­£ž”«&Q¬Š®V¦ÊAÎ©?\rµ‹5¶C^Ãâ<aEÏ®¶t‘j¶¸ëí‹åÈy7,{e­½÷±{±mo®(jüæœ½]Ž!Ó÷ˆçó\0}o¿=Ð|ÿtKÈoEØwN‹ÝPAF¹ESÙøVê]k°î¹/\\ê½{€rý‡rK-EÇJæ†¾¾\"­:(¬0¢¼Â1ûšœÅàÔŽ‹Ò#D É—«‡¤Ó£Ós·ª3ÛãÁ8þÞ\":kÑ	,ïqÉ}n©F:½×L×4ÁÚ¢Ñ‹¾àôÌì£\"²­Ç\$àVëØìÞµ\$}‚ÌåÝKD,¶÷vµü g&Ûq={ðU øžÈ’“[÷ò~_»Û_!|·¸:Üþ¿¼§p“7}4ÑrnL¯r+à@u»\n)¡¤ïßNw~¯¶¬?¤sÄk¶;õþ³öj(b¦núË¢ýËìþÏø\rÏ®ºP\0¨O´cÏôç¬2&Ôy#ªï‹D¬bÎ\$×onŠ00að4ì¯xJp>&g@æb>æ®U°Bæ†¸;Yï€\n…èë/æëphï¯¤ææï°\\rðkkÂzOäâƒkÆãîÂ¼ð¼PDúp˜»°“\n0%~'DˆùåòÀÝŒëcàÀ0¦Úo›Ä/	ðx/ã8bO ¤ÂÍ¾1¢&hž·Å†!f<]ƒG\0¢¦5\r6Æ°øçkŽêJhŽDŸ`Òt\r]‡`5Eô/ ¦ÓfRÄ¾J/™BSàÚ*oðö`†X`Ø`Ö#ÂBhƒø8MÈß‡'¢d!L 92àŒ bvf\"F‚ªF\n€Œ pEÇäw„ê&¬`#ï”‹¢8ÈjnâÙìÂéñŽ8£…!_bVøâ0#B‚#âBô¬¶*\nÌWŠ¨&ÅV\r ÌÃfÔ(MêMl1PÐñb<|€@QÚ9@Dhq\\±aq¥0~2ên’æÐ7‰f ˜Ï(ªF©¨H¬òý¬´.KXA¬®aD·‚:0±¢ÏÂ‚.m”³20øƒ„8‚\\ApÎƒa#Ã„knþñ†ˆ+ÏŽÚË5#2C2:g‚¦3ˆ\"\$c…t³Œ)&1\$%–\"Æ9§^(ª²M-DN­¾iæd§ÆjßÀñ)äêf²œ\nÃ*m,€9eŒJJ‚'F*Qš_ƒ¬\r„Ÿ,¨úXcñ, »ÂV/ ˜2¸!²F(b¦KkÆõ/4ã¤ˆxòî‘.¼õD©*äpÞa*€Ý-°VâTF\0	\0t	 š@¦\n`";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝjÍûÞ	ÓL‹Ôw;iñËy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²Zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê :Â˜ò¨¬Ìå:ÏÄ…-£°Ü\nó:9B°pè»#Ã+rå·«dn(!LŠ.79Ãc–¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^(¡ð’6ŽÌ&xÂ>Á:\rxÈ™\rá\0ê „˜¢&\r)Rò\rèÉŒ P¬¨ °Ä:®°ŠÔµc°Ò2ŽàUFÕ#û`·‰ÃËˆÅB¸Â9\rË`Î9¡´8Ä<¤\0HK_Xê&7ÉÏà*@ò–²Ïqûª#ªÈ¶\riõ¢Ç£0Â:Žpì·²(3B2*–S‹\0)Œ#l÷o•ÊäÀ§nðÐ;-èÚÌ¨£´E\0TÊ7!-L„)Û,’e©Èûd3±€PÉ5ïu6-zðŽc\$ÀÑáh×hcxÓ¸Ž·uUHŒRõtƒ™Uˆ(Ö5¬ˆ'¤l³œ9çyí3H\n‰žgÂ‚ÓS/+[;Ž#\0\"¥º«Ÿè0æ<ØY®“!‚¢çÔÝyMð\0Ê¦c`Z4'cËp,è%nŒÃ64ªÈc;{kYc}%VH¨æ:Œcú9Œ×9'Íác?Y6Ã\nØÂ¨”>k¡@æ¥\"¨Î<‹òäb˜¤#n~´j—CÈÙÖ˜0°hÈÏž6`Pª:IÜtCÍˆò„0iH¨4aÍÌÒQ~8‚2`èW,1Î(3€ÊR¤­,(¡|2N0}u>ÏéI†L\rnu¬6'cƒÚíƒsÍ]É²#žÃ\rË\0:’VTC-è´(r†üß¬…*­Ô°–ƒ¢\\KÉ1&DÌrhMIÈ2¦Ò–œ’tiÙ<'¢–Šb€.Š\rC‡¦@J)¾4¦ß“³VcrI*¾çà\0t'dØŒÓ†Á«h‡„2(x)IIq.e1k*cæPL<[=ÇÀÆ)Ø–H#(P	@ÅÔ(OÊ	®”ÒÜ]ùK.oíÀ4âEÃ3uh@í†– KœV`†‰NàÞs‹rNåõÒºwRñÒ3Å-f„¶Cs\"×kÁ%e<—“\$Øèf'ëÔ÷”ÀÞŒ\"™}w¯à¥¿³Ð¾O´Y\"!å¼\$(\$sCväÈ4)Â|W)èÁÈÏ=w³ÌÉLi9F(E9Ë™H4„|Ò6\$öÅÀiwMæ‚ø@Ê	›ÑèÆç,^\n¸'DðŸB™Ï³&N\$˜3ª=(C™~'ÏÆC<ÓAY’#„x›’\"H]&áQÁ0’`ØòJSÁP(!Šž´?.“-)Î”`RÊBÚA7/“(‘Ú(WLü'\0ª A\nš\0ˆB`E§kd¤¹ZŽºñ3Jâ£„ÉØ¹‹rè©Î		Ñs¢HHl€ˆD‘Õš¶EÐ¨FgŠááIcŒ@”ÀbH\$¥¤V¨âFG˜Â3°H *š'êZ´³v€vÚób­É	§ö•]‘=P-%Ú—…4~¨ä9–„(L”ãTlÑ|ŒW\\Îs¹_ÖVÏwC¦YP;ÁQˆœ\nCLÂ¡vž¤4‡¤…“Ã SUEI™W]3¨uG1´ƒÈU<ÖÙCªeP¦•:©¶*¼Ã˜ÂZÕÙ™…ºÓ¤‰’v*M1oUg\"DÖâIiQ}¥¢áæð¨Z\\R77–ª™òÔ€’DC2P¼Ž¶_ZáAë¤´–´UM±‚´ƒ¦oOR3:Ôè*†È¹'ô÷¹‚AC©#jÁ¤RNFMñý€\$ð –õ†yWÅæ(2,%\0K’*(:h|s‚xKrØÌÅÀL©ƒ‘	€ '1Õ­‰æ@ÈNuY½üŒ)rFJ‹& ¦2uäÊg‰§ÉðùÀbú“±î?c`A™è¾cÊ9¬%’–¡ò&L§:fuxRRq##¤~™è\n äÇ#/2ª“ZòŒQ!HÁZ†PÅIˆUÄö{;ÃãâèsÈ/¤—öÔz[Þ¤\$ìY–…N²ÉÙ1imNrþ@dŠB\nF,º:ì‡(6»±Ú®jKÙ‹‡:ùÚ,ó­‘±×¤_ÄÊótçL(nÜËm_´ö+B Û`Ø£TndydE(üÔ«pÈŒò\r·çØ†#“~T%	CCÈW{9@»Ž¶ýßwsW¤x©Î±q»g×m³:óÂ­jÍ¨‘üŒ†&cH\n	Õ¶¤™\\OMthuÞƒqØâ•¹%4ÆòÉ[[+ï'(t;qWžM¸6åaŽíÞëîI^yÜä9ÜÍ®íbSÐL= <æ¼äÒß‚\$àÎFÿ!ã|‹òËÍ=A3m¢ÔÃ§UÊ¥¬œ“A´ƒ=¥w®öî\r«^)Oj½Kä„›-‰Ó;Šòîw³ºîi°:mÞmôyA^õQJN4ï@‚¯Z,zÍrÑÂšx †JL-—o+ùVäÉüDîðˆú¯ãˆ·J‘>4WŸÅÒŸiïT³ºòUxUqxg’ª^AÅ.‚¨éF¡VW•7ðºÔçêNèü>ÿÑ°|À«w9T„\\Û¾^…üã‡Ÿ­öúöáðzì†\\×,„üÐ¼ÿ«vÃbÖ`A#JEäMŽPžª0»®3¬ë„–ØŽÞØ,\0.ø¢÷\0®üè®à÷hl]mþFëÆ#¶°ÂúnÄ„¯æ„\$° ”/Ñp*( É\rj0eB@Ä0\"œmŽdùOÇ@×ý00Pb„ï¹ÒPnMð>kÂƒ¥xY„\0O³‚„ /Ÿ°&&N%F½„½ëî*OÃ\0m®¾-ºYpµ\nÍ‰	j\r	¤\n£­\n	«â:À¨B†,vèàHDd!0\\úç\0ð»ð•Šbàæ3,@éÄ©jPØ cØn*Ôaì_'ŒjìþNµé˜°â†=ñ&ú\0–Y%zQ	P`@‚Ñ6`LˆŠÌŽìÌ´ÍÌp .Êìêòd\0\r€V\rcÌ!:.àœHn‡oˆ¤G‚Ðf‰è¢œ*l\n€Œà‘PÅt%1NØ€Ò¤~ÙX×Ž– 1¦kDPéª*DR¥ZÚ#eÐJÐmò:ÃŠÖä<ON8Í2âèl4ƒ†ç#X\"Ã]jP0(Þ¦:cÐA‰ÔS\0`¦\0#T\\0e—ƒêä\næR) ÆO­¯!Ã]\"D\$ª´ú\rÈ6Jàå2\"0†N\"í¾5Î}ò>áŠå#bD&c\"<ÉÓ%fð¨W€¦—ÄÅrÚC¬	©-Säº¦#(í Tï S-„]è”H¥Ðhd-Â 0\0‚-ª´»€¦g‚¨ZqG\"¦Ò:9ËÎ2P°Fo-XòL]ðWØB€æO&F\n†-h˜Bd*\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÐçrÔèñZÊ–pÜók'“¼z\n*œÎº\0Q+—5Æ&(yÈô\n(üþXƒÆ¼<Ò`zSq”Î•®OôçŒ¯rBA ©ª¨îß+Hz¸\nŒŠ7¦ ò8 O»£3ÉÂ	Ã¨Û¹#ÓúÃŒ+ã|cÐÂŒˆCJ€9Ebš¤B8Ê7Äã ä»Bb²áB“5ƒÂ€Bœ\nšOcÃûÒ\$FiHÞ¼IêÜŒcCv6\rã;Œ9.[š0®®ZøÖh(Õ7ŠÐÈÁèD4ƒ à9‡Ax^;ÑpÂ2.¯èä\rãÎŽ`^28Ý6\rãp^*ód4´ª\\ˆ0ƒPxŒ!ðA ±/ª /°ì®ý\nbŒŒƒªcxÖ0¦-<·\nrê5°ˆëZ¿6Òë¡p(æ†YäÝg!í–¢MÂt02È1Äl3£!(È“1c u]ƒS…wÝruäÊŽàP–7‘2\rÔT\\¯x‚:©Á\0’7l„NàÜƒ’œ„¿MÚ”iüF8WÖxÃ¨Ü5´ëp‚Ž?ÃK(V;ã ô‡¨Ãb†ôŠtR'£`Ë;£¿#.££”Ž¯þ(¥ éÓ Ü£Ç‚ºx0Œê\n”¿¯úuþ¦î£ê\nùf9¬¼2„È˜\rã îÊ½ÀTdç=öÅ¡'O¬ÆäÌÛÕ´9Ì©tZðn[¢åÂ\r6Œ)ð©èév 6É3\n¬àÃ¢³í+Ž‘µ|BMKB*uŽb\\FæY½ÖØÙ7o“=À0â£Èðìàôÿvd+¦\r’Ê‚ èH@7ŒÃ2Dþ¦Ú´Ñ50Í“Dû¥ihë¿Ìºû*1œ0ï!b0Î{î69±¥«šƒxQ¸C–>°Éì*ã/·Ûû¿Afød.Ï™i‡'ÒkZY\$É.·âpŸ£öiî‡¼ÿß\ni|m–?àÄú”ì\nm1ø#fM‚qsD82%àî@Špk\"\0€!…0¤smƒÇ‡2ROÐfR!´:†Æ\nBáœz!æ\0‘âVÇ¹	'ä<›FfrÉ!bï¹ÏŸˆÛ\nŒFÈò˜ðÞŽêÁ3‡Í¾‰@žA{©õP0D|9BeUªÒl”ƒ˜j(0½¬ÃáQ“ÓMi¶7@˜”¹	‹SiqÅ.Èp@ÉJøk¤®BIPÃc„rŽŠA(E¢º‹Q¨H)%(¥”ÂšSŠz:ª Â©3U1õWx~ÃpÄª¼2”àÈ¬ƒ›æV§Øƒ9´ÚRˆ!,(34”“SÔOZÉ@?då†)Òfšv5!Ü\0ÁzŒÈ\rß fÊ†(»Qgô¹Î´–Ôæ\nØ—“f]š\0cp ”Ì\$bç[bl>¥É¾L'-@ÁAP/æm¹3Fu„ÉØšÃ@Ðg~ûMHbKàû;ã¸Yðjƒt‚MÂZhãBüS³Z†XVai*&ŽY¶DÖÊTÐ0k>HÆªòrNÙìÁ˜d‰†#ê©h‡Eƒž‚ƒ™6	D ^ú)Ã¹0óUå²0”é.Q†U‘×ÌŒƒhk#æ±„«æ§Pü†‰ÅÌ“ÑgñaÊÎ+u\\7†\$î&X™H)PUð‡WÁ\$a:6Ë<7T @p0iMDv«,‚ÈÕ‘@…,5š–Ü«É…]ªáÜŽD•6“¨rJ‘!ß@‚¤û¶«­K†uÈxm&Á-~ÐyºËs¬“Gqµ—2€Ý Wkä8(²H\\Ë«·#WM\rÝbJ[Œi'\$ó»e×âþ7W–45¥Êœ&(r­A4–¨!ÀPO¬Ä9¥FÁº>5äñšÈÛ¢nÀd”#DeIIà<G’šÜâ|\\CMEo„\nÀ&+cÑó/„¥ž\">œ¦³V=ˆ†\$öüÿÃ‰v¶6ÐôÊ‘R;Z¨dÒ7«*±á„#!]iH*°‚UœŠ¼1Ðâ ™àÓd R£d‚2áh›(dÄø)—ðµÐ2ÈP×3ëBQ\n3K¿!Š¦7”žP*\"+<8B£;N!qqŽ8›,äZK±\"Ä-‘­-%¨pŽéðÐÆGD\"0©™QˆXÝ8#B´™:7C\\ÀagNRøC(†ÅgžKúbì½Å.V«Û¨9‡1:¢êöT{Â¥²X<óÒ‹ŒEÈ,‚!¸sã“\r(uDÔ†fDÉ!ê1S¹\"E‡¬¯òt0)_¶’øÙA\0A\nP „0F(q-ëLö¬31A^ní¨ß5àÊòð\\*D2/CdwàyßÛìÉãÓg½	/8\$E2Kk}”Ã-NïõÅx>ßá!ç…ÏH Æ\"˜eâ\$<Ô]õÀ˜yãs6Î§xgŠ\\BìrN&S×_2†ZÆh¤çæÿ.ðîBPº@â‹Ãyò×è }¼¿¥s‡ÝË'Oê<ÏñÞ­ÓV\0„‰|,Ã4@ÒäùÕÑµ¯µJ”Â4G.gl*´’–¹8_¼3ŒÖDa)ÆCàƒU°ï¨ð_\$Ê'¯m\$†í!zk'%&º¡’ë†*\n&_¾]WëáRWå„Ë0@(\$\$u\"‘²1cðÀ˜8xsÃÉ´¥»`.\"çˆµÜÌ¼)Ë•\$žQo=Á)}Ë :“àÓ Ý¹6ö»ó\$üÐù6Ñåø â©%¯'±2}Ooõþ¯æKH}üGö’‘Ä%^fÍ™Mƒa‡æŽ/±xúFÎXša¢ \"@ \\£„4è’mcá\0C’Ú+Ø¼ëªbP6\0¯\0BŽ¼gJ\rÍ2'oÌ×jÔüG `}Ä,¾eö_ Ú›@P§+ìi`RDÜÃÇlrð2‡ïtûBøý«ÚrŒ8Æb’Ãns¯ÇÌl‚Ï¬üâ‚a\nÂ=Ð~DÃ0vü.mç q§%pf‘ˆ wp¤E°©ÏÔ­(þw‡'os®J7\"l\n¯\r€>v~å•PdÙ@êðâêæGÎ–ç/~éðÚÙOªùÐ‹\r\$€âiŽ¬çNT-Ž¹ÝïÀ>Ñ¢ðËï~_†ÕKŽ­O\n¯y0æÕ`Ä P©Ž&÷«‰17oÓ	Ìž\r:2­@¼ã¢ÙÐ¼æj_Â‚ˆƒè˜bN?BkÀæ¾¼8BÖ|Æ8!ÂZ\rÄ ‚Z?M0BÉ¤è‘æ~½H}¥\"Iå^-†ú˜dëá„ø@¢ ³°;\$coº(„ÅÇÆÔ…²°Õs¬Ñeª¼ðá8û€¡M	±<ûb§ K™ ¹Ï¸\n¬dv\"E¦Ñ…¬9†¬Új>oœ%o³\nÌR20¡v@9#òB}±û#‘ZýnôÔ¬\r\$\n¡\\qN‘\$ã¾êb˜Fš`BZcÔ8ŒhLêm…~<O!&\r¨kHž@ÂE¸çm“\rñ °k\r‘²	Ð*Rµ°‹%p~ÒÀ@ÙÆFqäZ×”MÒuçc,Í¡-Ò.R×*e®ë8vãTCd¢2\"haŒ,¬û„¤\rs4ñƒí,OÙ/óó*²¹1òÈN³#0Ré.0\$MÀ¨Cp¶ÄÐ¬÷³BYïÖ÷²ÉÒfÆrú`&¬ÖÑ×²¬÷³f;­`6Ñ;2³p3i7¯1³UÒÒ[Mk7Mo5çc9\"}9b\0Fm¥&\"ZJÃðÛdB*Óm#±?:Ä±;1Kz\n§@tBG\nƒ¤ù#v\rg\rFÈ-Ò½ÃÀ…q–HŒæ[C63³êDl×Pò(Rt20ø¦ÈêÀï'KK@d¦¯eá@á\nt100ã6*£\n\"eÖœƒÄYðÙ@€Ó(ã€î#¾ÇÎnâ®t‚1\rD4DäÐô\\T\"d„\r€V\rbª®b…F–™BN j9œ;¢’¸c¸ØñBKƒSâ”-‚ø!Êg`ª\n€Œ p&ÎNöÓl·§NbJV~”®à0v­IoKt~ÝÎã-\$gÜ·Ô¸ÊDÊç¦Ød¼#	‰\0Ä#¦+Bälã_8ñèØ\r`Ú4}B³È?X×ÂJ9N5)—Ñ€>£»K†–êÐ_ïqÐ õDæ(KÅè*#U5DÜ…ìW9¯`öC¾úbˆ„oœ @ÞÉ\"âi­UF}L+¦¡	gVlËU®ÏBŒ6ˆ7WBýWÎÄ¯v±…UulÄ à8Fzøõ‚ü•†Eò#\"qö7F¬9æ\\ò]TçBçÈ-O`LÀ¦\roçH„’Œë²Pƒ]#n\\°?ë¢_‰èYàÔp‚ÜHÊš(.ÒÌoR ,Ô¿UœøÆZ0À‚(\rB ¦…hZPX…kóVx®t6¡”¤\$l?¤šIðrrö*3á6`CiaS=0BÜK’œ„+Z\r«ò¡àÚFdM‚Ü% ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZãôx¼»ÆNë-Ò&À¢ž¢ðgM”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯V	ŒËŠ1-¢[„2ÀR£q<ˆ:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxD¨ÂHÚ85ñƒœã}„€èŸŒ›jÿ\nbŒ’¯Ë-xÇL9ST˜¼NSbñ£ ë7LKÆ¹IR½\rØÌbc_+Ã•ƒaÃbpÞ;#1û>ÚBºY\rÃ:(Õ£ò„7 As!( †7ƒªó#ÀUßQ‘ââÈ\rÃ;|#\"\r‚ø¨NxÆ¹ƒ+ô:ƒ @·^2¦’Œµ»šÇˆ×“­6 P‚êºðJ((&Ã¨ã.Ù” á\0Ø7±ËØž9C+ËßÍŠçH2M„§)ÚzŸÀHÊJ®B6ŒA¸bLÁMz&Ç\r×³âž©b&L¾îÔÞÅYÌr[)?Ò…ubì–BZØå†ºÚŒ6\"Ž{´¿´JÒ´1dƒK\\®ñ•<!xŠ<q¹¥in ÂCÑµoè ˆ!=;Èê€Ãlí·a®3FÒ¥’ Þ3ÏXÜ2§\0åFfÈ›bé‚ Þ '£ËþÉ£Øf\\7®ìXÙŽ]ðÂ3Œ+ÀAé]]¥‚2…˜SØãZPb˜¤#ziJ„õ©pA6%NR^º\r¸bX¸µKuñØK)ú„öokpssx.Ü›““NƒY²ÇñK®@ÇÝ¡ylÉ\"6ZžM2|OÅ@â^NzáTŠ˜œ17ôeÊàp&¨`0¼·~OÛoM­õúÀPšaŸá0ÁÌ;—E[\nI©Ô}Pa=°¤ü „PÊ ;¨ ÉC’JEI RP¥ÎjšSŽP’€éÕ9PU)V*åR^óÓaÈ™Ù“Ø¼N	²2oé‘%RH@•út9å¹c.œV@í0'€Ð€\"/ÊYŽ  6ÅÐÁH PTI'+ÈLÅ‡2<ˆ‰ lBÇ5×†8Bã1¬pA¤×†s¨Gd¡²7¡¸7°âôËÃ¼B2Ôç¬†–FKÀv|èŒ0“€¢pÎtÄJ¡”Y•rŸ#ätƒ³ôG4Êá1h‘õrZ~–ÁÒ@y*pHy4ˆ	š¦•j«7¦u–ãòMˆQ®H™†â\nËÏôòD¯=ü\0žÂ¢F©Tž)vþ:n\rÈeõ#ðÈHY.7ÄðŸ™Ög< s°ÎÇ¹žsq0l)º_ ³E:Ú¡ÿT½R0Ä]šÒ²?2±*>Ð@‚¤‘kNiˆÕ=Ï‹¶D’(¯cNI\"Ñ'²º‘Fa¹S\0('„à@B€D!P\"ÕÊ¼(Lµ‘.£\nsŠóZÕ¹(X0Åª<dêŽú¸Û\"cÆ-‹;SX0Å™D(Í²¦C¤ÜAfuŒe¡À–G,CÂ>N507ÄÒæ_,Â/¢bÙÔ¦‡Ûò\$\$ç­ÚBÄÄÕ²¸lî^Ô£' r¬ó˜K	%e¥óXÌ !\nÏÌ¡C2çd©r\nÄÜ’ •A¹MÓT¡ó¦¥b¹}‘òD¨\$‚íCØ9Fºt ¬\"ôœÜzð2ý ˜J²EšbH+Ü8=ujÅHHdHü£YÆðÞ¦Ã}+Ü™KÎ¥y*¡Üc2Ê¯EírƒFÑ2bÇVkn#B·<:¸]epmFjü¼,2³Î3&6ÉðTô¨¯è•TXSJàäE1U…9I3ã`&¬n9Ì¸¼³ÉzÅi¸A¯ÀÜ—&Ip[\0\"’ädÅ·%«V'4¹XÂ Aa 2Âê‚Lî’AÁÆË ŠŠ¹y¥	†¡µÔË\nêtI(7®•[žÍî9¹ÐÁæ*°acËÏF{>0Ì‘[ø.+½àg]É¤¬-)ùÿFh¤&áÈ\0005ƒWet¾ˆ©«ª\nhDêI1\\Ðúdæg\r ýô–¬Ðl1%‘=aªtÉ²`úØÁkƒÒ5™gÁ¥‡`îE<”9F4¥ž=¢âijPÚˆBÔZLn	ÀD#'y-¦DµJ>ãKS\\–ËÄ‚ö>É›åT¦cû*ÛÈŽeçL¯q-ßoÜ“ïâ(Uˆ.¬ï)÷båµX¿ztÚZ³Ø^pÚÑ¥c¬þ3Å|b;¦S“«Ütícþ´¼˜Âª–ÛÇ¹Yƒå«ø•î\nÚß÷'E'`Òô]Q¬HòÖ¥€ˆMƒ‚!µØ„b¶.K\\Föé¶Ž×>qÓ}ì¸l¼Î‘L)‡PWl®eØ¡Ýù†û\0\nªëÈ‚ŠÐÃx)æö™´ÛT	ÊxÅ¥·=ØÎ„‰	Ç{¡V«šxé\r×.ã¦;›_÷>€I/Ò.u½x\\ãŠìx!šryzt®…ÖZcDé¾úèôýÉÒZSWlK¢Ý²:>ä Ï:j1}R\\%[”y.míÍN0ª~óÍ,‹¤Ò½÷p¬‚·Nmk‡lµ»=öúW±,v3gy¢Æ0æQŸfyhgà—òjÈ\"ìž=„¼>’iÄ’Ðå‘ÅSá%\nÞ‡þL^üÊšørùLdCnX«/äû	hm1ìrÅŽÖ^l·®ÄøËKoDï\ròËJËFIFîÊ®*ò.Š€¬¨‹Â€åïH#/,†ÐX9PRÊÅìn‚[¥¸2\"DbÄ(¥ì…Œ~ë¤´N`>%@ÒŒÉé´(°TâÐN'˜:œÊÏŠãÈ\nl£	ðb1f%¦2+#®iŒNlÂ:d°¨`nr#òcPÆ.P@·ð›\r@¨ìÄ¾bðJDë­öK&RaT_¢W\nT„ Ëñÿšæ«JbqB	®aÐàQ±Ö9C'ïø\"ê#Ñã0`ùÐe¯Â^°@9åêÆ‚ìÆÑFòq`Ç¦[PZv,je°»ŽÆ%±jÇÐéàA\"'\"^°t.@ªL\$Æmð4ÀqšË±Ÿ\nñr>qœoâ[ 0ÀÐ¿ij=¦¬_¤€8Ç\nƒŒ]Pä€ƒfš§ü&ìýë€\$	¦è‘ÞöÆ^fÂU¯è6ƒ/n˜1åÔÙƒ6ömARÏRì…ì<@Ø`Æ=fXaâAMöC:£Pðê\rQ\nƒ¦^*jxU#úaÃ|ª¾\n€Œ pý†1eÂ'`Ñ¢Šq­#/îšrjÚMBÂš#„<RéBvËc‚	\0å˜m òâj²ê‚)dTuLˆ¬9K(±âô‚Y\nB„y\$6ata¢Š.@˜¦…Z(Ò27IÐ<àë­x¼5å¹)dXúµÀ@íÅ¥/b{f<6Rð?\$p Kú˜„äÃ^6O0‡¾`èT—O rkß0ÄÜ¢0Çb7ä1àÊ{àÞžQŒ“:ää	%–dfà£2W+@/3æKÞmŽz¯Žà³ä±7J:KïÔ°„‚o(:Â2I ì3®&ö.|dÄ\0«“JÂ ‚/\$T1ë–.¦Üâr²1ìh^FÌ²CÀX+ðFÖ1+8]àá)q%lp•Ê',!\0FëC1ìï&ºäp";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\¾i”A€Ì_f³¦Ÿ·¯ÀÁDIA—›\$äóÐQTç”(_mèêÌªz7­ÂÈƒ2æjÛ„\nÂ¶®©¡\0Ô¡³Ír!Œ#\"V0§CJBÜCC3\0ª\$IPÝcª†¾¯HÉt6¡iÖß.r€9C‚¯ P¤2Ã@PŽ2¾orû	Œû‹ŠrR\nhZZ¤³o´TPÅŽÚV×BïCP\$3®ŒpÍ‰ƒzþ7DÃ’z7%h0F£CF3¡Ð:ƒ€æáxïA…ÐÊ£8Arø3…é]<Ašò7á°	#hàÚÆˆxŒ!ôÜF¢€270\0)Š2JÏ-6£&ê·ªJ.&¤O+ªÛ¼£¨è:Ç\0P‚6 Ó8@–¤ˆÝ…b!uÛM_Xàœ7«ñûJò¯Bº^7=(¸KTCÊÛáÂƒ\"âÞ6¬:WU::G‹Ó,1´wš8 ×Ïš†©ŒkÓØþ¶%ŽÁ£-`2ÖNƒ(#]¦O6ö%‰bˆ¸ ÓŒv‹6š0I¢\rˆ	ã”4À³pÕðÛ¡NŽ\$ª3’w7¨#¼ƒRÐƒŒYX€Ø”±Cj‹iõâù§Ê­X&L[Ä>îc)aØ®¬½\0L5¬e¬Y©ƒo‘>‚±{\$8\"í8L0ësÁ1ãM˜Ò6#ËüeL¤(c(\"ëßxìî6Cƒ¿LU³Ö![fÕª=¸nXXŒÛTÖ%îðÞ3Ãc\0002¸Ã4\rê\n|<À,¸ê1¡IÍ‚ä“SÀ £—X0Œý4ØÀAµE_¡@æ§\" Þ5¥a\0†)ŠB3¾–(}’*Zê£ƒ2ø6à©zòØ®×ŸHó¤­íÌÐÅ(S\$Þù-pÜ5·ò`ÿ½!\0‚2Pè_pÀL¹TdiÐÖ§tòV>)&éu>¨N1·Y%À™¤2]Ã}?gô˜2PÎÂAj\0\rËPž'ÎLrÅ\$89‡røª p3Iì@DìSÂzO‰ù@(%¡‰Qj5J rV¤Ž‚•RíñN'¨ŠÀ TªT“×˜wÃ¢mMéÄã²øoÑ©˜\$lexuMpbnæMë™Â8¤F€'@Œ%´P)†R1(€ E¢ó~  ¬’TY¡’d…npØ…Î‚pp5T‡ìmC:@\$|Ü(GL%ðÐÊ²²¦ˆšK@#†\0;=R¨IÈQ:‡FW¦„Q\n4x;Í%M\"Rž›Š’\$@Áá÷L'°~Iü&äÀ0 (L¨ÉÈI\"¡äÕ B¨lbÉ˜;'\0á6DYÙ§!íþ“LóC%@\n˜áxùÂ€O\naQ1¦tOT’c—Hød¤8˜œ6pG&¬Í|À‚<C2¦]œd\0DP}J© œÙ	'ÈM†ô3C1~\r<ý·s¼öÁ\0F\n‘ý¦ùzC\"Äá>dY)´.k‰:4ÄúLÁb.ÀZ¾Rl '\0ª A\n¢\0ˆB`E©da\"¦#ž»rÓF0(ñ†(•)æfäø 2€àÆYa¥ËY,Ê)GJà“ÌÅd}+£#1n˜<¤~Qëª]qmuº=9Z(^´°X@¸¸Æ¼ýCxi¡“¹Þ¿[I…°Ž9³ë3`Û›ŽI%š]9‘V|E“™÷#iÐV!pMQƒ¥GCÔ­(Ç+icùXI¦Ê‘ÆQíµÂ*üÁ’f×Sˆ•DèÅ˜Ô™s˜RòË`È°¬£m©>ÃJèÛ\n).tAêMÐÊÀPV3åŠê8t80ÄiÙ­ŒU°,bK~‹(/²d6žµx`òÌLìZ¶+2`éÁÞmŠè7SÕ‚0™U¨ÉY‡r_°Ð\n\n@Ÿ'H`[è¦ôg¾o«ðo:F9È’s¢Œ‚#tp–z£\"•ê°‚ T!\$D_Pc›\088)HC‘§,Ö\0\"•ˆ‡(/-+”Ñ­sN¹F]IFt­=‹#WÐ]ÜeÃI˜Éf=ÉŒ\0•Ôë²¹†ÍF(ÞæÜÃ›Í2%9Ë>ˆêOÐÏMåVw#ŒôÇOy9\\¹U‚ÏfÒJsN‚ç?(ç7ÍtžfÒ¦8‹03Ü7N˜­>äuFšM© ÞÈ»|‹çT™•åíKÌUL:ô¦¢nq#^|±AÃ4ááJeña!¾Uv’\$&Œ1*=aªI\\)„ßõvBHs)x…žeqNÉ†ê¡{µ„”0Å™}`7£h×\"uècCe@-ƒ÷dYÑµÐ¤ä'ðL¼÷xA¾:—¯:p5­œ\"‹Þ²G€ÌÆÝ˜Nï·²D£Z-Çî«ˆä\\¬òpAÈo+_ºËU¦æáŒh\n(áÓjZ¦JhÍÄîÉŒž³N«»;7ÝË³«CæÕ[¥•;§Ï‹ã	æâü`ý‰ç,YªÙä¡íÖGEo^iua‚]Yx)ªˆÂÅÙ«B‰xÕ“w\\­ØË@ã{Ç4pwÎëßì2Hü»»x!dŒ-±\\5É6äkÞC\rá¾Rñ >óÌø¯œm\\¯Èö2p¼Mq=3aK{¬s^}x&‹‚å-œÞ¸	õ˜ÏGû1ìó7ßB˜û„\r~§xT2ÁoIæ¶[ÎÂ/gåáo/ÄpW†ÙŸ Øa9ûõ¼W4Ùz­u®ÝH˜Ká~y­È³`ˆÊûUFÌ£^ÌîÔf0û?Dßü:Ý„Ì;ÍH¨ÌØÆtý¨F9Â8ø.Nâ%edŸOòÝöQ/Pù/¨Â¬¾®bk¬„jæ\rã\$•®Ã¬ªïÌ±kä¶0û.]c\nó ï°`3¯>ñk³£ªYèòŒlçžïo6{0~â!ÏOÄãÂñoNWF­ƒª°ŠÇp§\n£,\$¦Å¢Œ^(.XKŒ>e6Îb`’ÃnJF® Z00‚²¯¢÷o\\ô]\rðÖúë\$ôNû)’b&&YKú­ËN2Eõ\nÐö,0ú/Pu±(Ð–]îÎ.Î~qƒFç€å\r˜J\"h `Ý0ÚûJF±2Q6%ÏÃÑ0EQEZòB·Ji1FC‘ñQ.\nŽÍ°‡C®=Â¦^g\"ôá¬0ÄGP…	.^Ã1’û[‘Žì5ÏOâalB­l=B'B^©®JÅëQ™Ä°|qVôÎÇ¤®E‘¬' 1ÀÐGÐêiq6H¾o„€tåÊ­çbÝNVX¥ÎŒÀ´Âµ G*\\ì…âd§.\\°çƒ0n–2…Ê*CBó\r	!:R.!Ê\$2\$cÊ\r€V ÒdB,\ràÄ4jôÑ«z:àÂ¦J' Œ¤È¤?è²1‡¦¨À¨ÀZUpD=-\$Ïîåmú×orÍÎ!®Ã*iÐÂ23¢<“bF&ÂP¦…cäjæ0F\$|1®¢\"ñþp`ª*kÖsÌN~c¬2pÊÜÈ¥)°Hm&Ð,\n†MkîEˆ(ÂôM*>(òh7£¸j<2L*N€Ôbª¸ðÆç…„7ÐÔŽÀ1 ä]¦’@¢·3ÎS4øì+\0•ïŒäj7¦1‰Ð\rèd”€ƒ5í+ä’4Ëë6#[hM“l*b¢½€Èy3R@ÀA\nÒK£þi\"`ñ#7K­1(ºŠ±Ìt¬b~ìïü¿k^Æ\$#„’ÃG-²®¾ Âc¤e¹Æ®0.(3kd/²ÿ-²p3l14ƒ(¯2öÑÃÈÑÏ±ðB°%ÔÙñ5*Ô“#²C˜Féu Ò\"C‡y5`";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-KŸ£ë û!†{Ðù:<íÙ¸Î\nd& g-ð(˜¤0`P‚ÞŒ©òê7¡(*€°ËØ@†\r¨{‚0¼Œ¨@± m\0ÒƒªIê~ì¨I²Ä¦ŽŽ»5)ëò4¦‹È@Ã„	Xä0ŒoÜ\n*\r)]\$-àÒÂ¸+ËMc\"1Ic²à)	í÷\nB’M¼¢8Ê7£(èÖ¿Ñ\$\n)ÌCk¤&rœG£d~Å/\0P¡\n.£!0Œ3Å@¬ü¾Î‰ƒxÏ\n'‚f¢Ã*Î‡‰`ÐòÁèD4ƒ à9‡Ax^;Ór”¦Q#\\¼á}SÊîá¤	#hàÊË¨xŒ!ò¢§K®8Þ28B\nb‹þ¹¬ Ë½èƒÄ¯R²šF¨dì&×ãJ\\”=O àòTSÆòÛÍ¶ë²,˜ØšKû@Ö+©ÀÜÙ3¢¼(7/c8æ‰Ø}˜:!-ûfA@P‡Œ#s;(`ÒåÅ\n\r#®ò&²X0¤2ãÎˆƒ(ÍŒ\rŠÐì¾Ž³•f:\"21ÁCL3¼”Éƒ!é\r»¯(é/Ãµo#W	N/ú˜:?ÈÎ¤4n0šŽ¹r­ 0.T6&×L,Õá.•Œ9(ä<çêÀÆägc›ÎèÜ¶ÐÓn0SÌ_= `VÛsÚ[8Ê¢âvkÔÜ5cFöÎŠ{Ò‹¸Ü(<`âÀ¢ƒtÞº^]XŽë:\"¨å¤o“Òå]@SÂîq|ù#ˆN—\r;4,®PôYŒØ£t @7ŒÃ4ÝD§¢J˜æb ÞÜQÌÐ£®9Žc2†6PO€XàlhåAØˆï a@æ§¢¦)Ö×El4ŒMà\\JÒúÍ'2ð¢ª°WÓß³Q‹NòŠÁ=\n†Ð7²œýŠðu!'Ø–^É›Ó;hhÃ•å{REHàÈwRùVêæ\$Ò†hHICdq¹”Xbž˜rPD ë‡c¯ÖY‘FdÀ¯0êOBha+\$ÌÄ æËÂÀ,AÁßàÊ‘RjUK©•6§TüTJ‘SåPªƒJ¬UÁÍX+%h¸¡º*E/…~°Okç}%iC%¸–L)_Y/†PÄÔIÀs:ä¹B—…ð²\r2ˆp¶0 R5\"ŒYµ\r&HÞuðÈ9¸C\n(„È†ÏXÙêIð0ÐÜ¢QªùŽ|4›´°Ðt)Ç%y•¢úô¼NMHYD|ÁcÂXV[0‹Dž‘¤ˆM	±E(äyUÞkQÙMr«áö¡bXýŠÉ—Æ÷ÄÔ^úC¦x‹‡“d‹ÃJÀ–¤ä7,ŽrO#a™¶è¨\"!Ç}è,9îSƒ€a7Ñ\0¬ÔPÂ€O\naRH(Sä{O#ï\n…å£¥rQH9 AJ%Ó¶ÔFæy/ ÓŽ¥é ŒNá.!hÍWeI;CÌØNòV`NÐ)P±ö†uˆ×Ér7d°#@ G'«éVLö9ÏÄ¸NC‘;TLÁy6”H\n;sBä‰`m[+m›„Ä”&OÙ¾flt°Ê/XÃ{	¦ÒíB¡JZ—Úƒ.	)¦ &XAšª1!Ô3y¬·±@nX„@«\"L,™&}ŸšâSÃŸqfŒÅ—¶F›ƒ!eNæe:WGÜà+LT™šªBz¤¨Î·ësk9ÿ+\$±o¯â°eˆVbPÊ&|­«Q\$°©¥vÿ¤dœ’`€(ŠžTú/i|Å#Ãu¯VPÈ9‡\$ß˜md Õ™™%”t‘ý¼K„º…6N@Ã!ø?DÌþ¸W‘I'/æÕD÷\$ÓráXì2‡tªVøe\\\$	›…Kì]Œù‡1—7vÞuËÞ\"Ä‡H†H#JáCxpnÕ¯šXÆ,iêoDÊìÖ8²æ0n&	Á›ã{ºÈg®@€zÂrA6)¡xëÔY¥I-#²ÌÂ3÷1IÊpÉ‰YyÄ–Ì#¨éÂ);_\nÕºå»xçŽºmMé@¨BHl\rˆ™çm<Ìpp–2è#±A2hÃeŽ³Sé±¯À@Á–šÍx°¦×®AE±<bÄ²Ù°tzokPM‚qZ—3o” ¸êBg©ƒÆ¨2:¨¨éóU¨Qv°mÄ®DHó@©‚µN(œjpÇªIëÚÒšã]­i´µ(-Í;T“Ÿe`<Nc](æV¡w_k¹7\\ˆ&‚í0p•(I¾W\rÐ+Ó œ^2g²ñq=c¤Þ¬U¢}¾)|kPÜ4îMž´JÞðLîßÛ@A1Ê&Ag-M^J÷Ñé¸Ï’ñ\$Ø1!äËž+|pZBîf(‘žHYlY›\\yîf´Ý´ßAjk/35j¹“‘æ›Ú5ô)Â|	ž³Xyu>lë…µ€X«Þ†Q1¦Äë}T›utb|ƒ§QAÖ»4ÕÒe,\n—ØÊåT*.^éVcÉ(•\"%z¨K›dÖé2êéÛ\"i,4>2äæŒÕé43ÓÔ±bI½lzþÂ­’!(<SåW[.`õ	…J%Ö}š`aÊhà:.»VéZ|æý~Ú!NyhmÕ¯ìÇÃ×^Ž Éï¸¸G¯NYi-WÂö?œy­e3Vbÿ¬s®y›ßÓç©}‡Ù¾vÄµACS¢~¤-Ú¼Bâæe­ªõô×^>ÎpþfG8Ûšï+fSÂýíz5/ä5Ë`ý/ì‘\0†«©ŽU\"fô¯èú£FçkU*mc÷ÏÀì.¥‹¶«ð0ý/¸úF¯%›Â¼¨þ ì\\#‡Ø:ähY@Â¡> îæÍ–§§	\0†ƒÔDiµä`R\\\rÁŠc®IbÁ,DàŠð¯IŒ°Š¼p&«­›Œ|4®¨2;ldÄË ÈÌr¦H3¤¬Ã,6\\o´ó04úÊ\\¢îÌö°\$ø/ÐÞi®Í0&ÏºÃÜÃ†fÎ%i‚ë®p¶Žv2ìå‚Dì°\r\rqléÎ¾)FjPnÒÆmbn\0Ëlèo«}±\$KÎz*ëø:@ÌaDC²i~Yfn:cªDÃ†nðmFfqËŒÌägîs.yOÝ°3n¥Oÿ@íì)edZñœ=OÛ\$ì·£H%±  Ìî·Ñ«†G\"†<‚E\nâòeÁ„oÎB\n!„q}Ny1ÖQQÛñ}Pé…—7Ñá­†êP¼:ñøqü!ñÞo±³ òrGÅÑë1!‡>îcn‡ñ4ØeÐG21#ä¢èÎ¦É*å‰Ã\rÄ£b\$ò)\rQ2XÉDC.Ðˆ¦z’ZM1±#2LM\$pVMÇÅÄ@ª—Ì\"N\n_2,ÜRŽ—ò•%µ\0â{)ò’H2¤ìëH' ˆGÀ1‘J\n~&?m–*äý#öTÊ{Qª§ðó	Ã-¤¦1ràÿËl`Ç ºg`]Å‚2\"l`N§,¯K-o›\rc®Õ~ÕÍh2é*pÖ'\0bò|\$¾\r€V †Þ\rn7Nä\n\\Bh…‡‰D<rˆB´2l\0ª\n€Œ pBì‡€ÎÚ%€I¬XÔsm¬ÓÀA7‚MƒÞªs€Ø§j#Ëø\$gZ‡#öHxt)# Ìl„¬¾D6CÂ3Fnî³D#êò1b\\ìb†çj¡ò°&Èþ8\"Àô A/Ã!Av'¤æibøBj—ÆøP*†­Nl8¤í?Ópî@ÞÝ5?c]²2¯/TqÚóŒ>µ©†ù­ºìe•Aï¶Æ)&n´BÓ#îv2Î¦9c~6ƒl2gÐÆ3ø¿ ÉCD,Ie½å¢H@†c ²ŽÞ¹¦G#º×f›æa)}HKtóæX&#¤¡&¨âçØM%ÜÓD¹Mží€	àáEåÂüâøÂ+à`â˜«á¤(3 ‡B.X4 š\$-\$0\"úâFDÆè@´ÚZ&‰ƒ£+ý!ìKF`#®zI…d(mž<‚@	\0t	 š@¦\n`";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=›–”ÁìS<¡lP…*ôEÁióä¦–°;î´(P1 W¥j¡tæ¬EŒ£\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\SqlÚ¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯NÁ‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!ä¸·’¡‡xÂ%U[	.#˜X‚ï»‘#P5•aØ®LN\nbˆ˜4á‹ª\"Èñõ–äMk”éN	±\0˜¸Œ&ŽA×Ë2h”2Z[‘eG&0™,ðffý\rÛ´C ®¥å\\.½r:b¸Â9\r×øÎŒ£#V& Në»¯¯Öõ»l;ÆFƒ³vB»)¥ú2M/*~º‡·*ÊŒ’W§ènÕ?9ÏnDß©!ë•9kÉ.°9\\Þ±`ÊÉŠŸ&Óð\"hGH›{S‰Š|¥Êmhhr©|Æ½9]êie/5•rY%J‰ÀÕYÆi„¹=[Ñô™6eŽN½ÚÚš§º4Þ2Ÿ0B—ÓtU¹[k<¯Ðþ%}bØ÷T.~Äþ‘`Vjkj<è@‘’JbJ[Gi ¦#DJ…Î›Zk>7Æ4JŽ² FÑ¦”è(‹“£;Ša¦¦Î°\"ƒÂÁB§1ŠÒƒ%†\r~ýÜjSï_ô˜õˆÈ­8i-\0´qŒÉ‘°kïèþ\rÉ	MbÑ=pÍj€ ˆ¡i\rse:³Â°’`tIÛ)bÄËÑ¼RÆ	3¢¨”N*\"7‰Î”ç¤þ™{,((u>µ_²€eG5šB@‰T7€l¬˜ÇP_Ááe\nìî%–÷¡g,A‚à®£šah/FGˆô‰ŒJðlÚ¶³‘ œº©PXHˆl^d[¶cf%7”É\"OÆ‹›C2YÀ>B§&É°‹“Ò€íJ'ËÌyJÑîTÇèi+T°WÍiËi„eÑUJRù³É4y%KŒÅ)²i;¶c¸Gßrt@« ©bÆÂ˜RÀ¶A´å-–Ù‰€mXè˜\"rIHd\$%HÀ¯%âWˆmeq*¿fƒ&IŒj)†…rRŽ@a\rÁ¬9‚\0ÌÁ\0uaÁ¸3‚\0‚¿Wûdáˆ0àÈÀAè]K±w1 æðdb„:7&:ÇÓÂz–HjxŸt[\n\n\ns£h¦Žb¾.™<ÇVç¹qËóÖBDŽŠ­ÈGGŠB‡3Å¢\0“”³PuU+ÇDS¥Ö»Wzñ^kÕ{¯î¾éƒ\0`Lƒ0†Ãsb\0¾Ÿ1F,T\njOœRò£²<c\r#%dóA²ÅÇ<cCAÇri:Å¸IDy`žÂðÿ½2‚}+B•l¸6ÔHCAyÓ§ŸéÜyR9'L(u2YÝlŽq1;5q%45)l_¸IŠ¬\"ýˆüð(hXú!úÏÍ¨(.@¤£„6 ÀE¥€€:ð@iÁ¤6PÎ[°p`Ò’†šJƒxt„6ÀÞïÁu:®n”Ö`þùôS\r¥—¨UŒæNâÉJçñ`Öõ„Jª’\$¦xúG™ØÈÞ‘!}oŒ¨ORòçÉcè·—ÏÊ8›0§”S€’qµÈ	\\ÕÅÌ¶jó’„¤™ÈÈ•)‘¨Å(mi‰9b/øph¥´ ‰Q,;D“a´³K×õ‚«9j!§©/RÙh¨Õ±Ö‰˜M&t¤5‰4FGJÃs’0Š‹@€(ð¦ T•“y\0¦ç/‘òÈ×±žÁ¢\"«˜¼ƒ¶\r^7Fˆ1Ã.k#h†×‡‰\"!d«òs‰ZR‡xÅäÙ'q\"ÅÉ¬–ˆ=#›’“jh.¥I ìæ¡3ªaÎïþ~’úO%p ÁP()S®¹pÜ>ˆ¨rp=›F^iã;eM 6u5	ó5Öèhˆëx­ÍÜŽÐ6W5Rˆ|ZòÊrYá*îø>Ÿ!¶ó[Ž‰;ò6´PþâsøUWoòeÀQÆAzˆ¬>iÖHlâžGÑ¬â'A™BF\"DŒ¬¹Ïe÷ß!u£­ioÇÕ^\$äH€[‘œ†p´:¦Á|‘Ô]h¢uôšÔÐk<²ÛU§j¥blæöe;TÚ7Iüç ^K\"WIç¢¦iXj¬tÛÁ„•ÞÕ\"‚{øì”²ý5Ã ‹N¦])\0(µ•p— tÉJ|	B~](é¬8v.Q‘NGL™®Îoïc@O8~‹ˆÍÝZKvCôW½“\"™O¤µýÄââMj«	sä¸!Ñ³dök<¾ÈxˆLw(ÐØÕpÂ˜µ!ëNr^•˜ðŒ „TñçÃ{µ‘>Ô÷w¼ÆžLýÇ7{ ‘>´¯ËÁ&äZŒ™©‘(¤žÏÊj¹ÓÒµ¿ž×‘÷æõ>Ün@U“Ý»é÷ÙÇ˜òZ>oâÁ°VbRô¯e¾#e]£V¶„àÊ\"Ø×o8‹ž*‡>ÐBÄk\$Ò¡V&¢2¬ØÂP÷ë£^iN|¬a¢‡tˆmVwävÈK…\\RNu.žZn2Â¥ˆ%Œ.Q’@‚\n€¨ †	Ì‰0lœ5Å»%vÝE¼ÜÂl\$á.¥¶ÑƒX×eÄ€L¸ Ê\"Fìãok’©B@oì×qP®WL%°v<fÔä„À®az«\$°ìdlu	ÒË0Äm‰–tì¶8ì»®Ö+¢¿\r,½\rŽ‰\rèë!qpÅ	ðàjÏáB\rH&FänJÉ/N²QLG­H‡\$&ÃLšÇâG\r¤Mð¥î·è»Èö!Â:ˆŠ(=É=1Â‚«â¨@/j\$;1Z\$‘^pu	ä<ŒÑQçZ“bƒHéÇkÏ>|,X:0·¡‚\\&%èØÂªÙÐ\\dxäÂ\$'„&\"Y	6MQƒ\rÍ¶!ŽIˆF(–¤Í¸WoM-ŽMbä=CÀ!¤Œª1êœñÂjQŒÚ†‰ñò[MÜððVÞm\n)°–pâîÎ‡:Jnîp*.úÃ=ˆxð:åD|±ã„8‹©ëp0n9pâ£‚Rš¦1\"ë…b0dPemêøGQ&2W&‘÷KBRÏvjçÐ.¢îø¦ÆZGº/î„²oG(Ã{)©)K#Ò›((‰¯Ž¶Ì¤˜¾‰-(öLàÂâƒq+/Œù¤üPRÏ*,²TÆGU'XM‡^P‡b{è¬@ÞJ\"&*5«@æ\$PI0Z3ù®%Ž,Äêâ	nÔ@hÏško”!¯˜e±#M+þÃs2;ŒVùn> @4|â@&Í,‡dpå ç~êÉ[))€²_*îxŠNªšò¹'ê&C,\$‚Œ/'3{6K²})MÙ2	)ÓfËS~ÇÓp=pÖqò`‹(G7.~Þ‡(f=j¼ªhõòœ3Ï;³±3±o)Ævàíz‚!#*e¥ó,#×p,j‰6+O°m“ƒ*“²‚’®“óë+±h,Só:0(ëƒ‚Õ!a@1}'k_@¨õ@ñJ©—As…?½±K?´)BÑÝm7	§C“=…®•\rÂ)¯ÐÜÌô)f1\r\r¿FOÏïÕG2ªqôyF\"…FdËH\rÊ˜4s9ój.³NºÄ&-„,4Í¢G¤J¤ÅD=eDPª•Š²y‰†£-:LCÜÇHÒQQ\0çMÑUN2úO–\$Ê³\\#ñ98¨~ˆÅ¥Jd*,\$à“dä}èN:T{Hô~ý4–ýs’´ÌÎ§¯M#\nPïZ‰2O½ÏLþN0j(Ð÷Ï(3Àá3›CsÝ8Ô¡TfÁ'CQ‹;õTãµX9õ]TÔX\\c‘:=<Sç‰Þø2„Ge…Dsõs%Õ†ËZ‘GWíEµSõ›NMeY£WRÀ@•˜ƒ³´þ’¿XÕ¯WËE%µÂ¶õ‰,ky%á|qmX(A\r]ÂBBÆ©òóÌ`Á±º¯ZëäïL÷ðíDÓÿ*TGU‡)Ö´'`£×:ðû;Sxß6a¤CGÓ+õy</S†¿‚whœ;GÁSu¿!¶+X3þl¥uWpU ö@,yd•ÉeeQ¬Zö\\N¨¾0ÂB»çòq AW^å85û„ª¹!D×YUK=\"óce¥<¥ÃhÛhéßi,2ÅÏô:Vœ(ö°gõð¶Fd—V=Ö™iÖ#A‘c¶Nh–°ñÆ¯Jg³iVÔ1QiÖknV‹nánÅk¥‰o\$Oo‡46 iõ«cc=èß,äþ.¶Lº²ÖGeµ¶‰v„.ÏÚþíG9¶*0÷(—>ý÷C)6ÚÑWJý‡B/WP-7EIÈ3r•Rþ†Œ)¯Ü(¶úCrþ×b9§†Âu‹](ì2)ÖÎû”›7E	u¯òõw•n÷	HT\\!÷¡J0[kI¶5IðQD;8ãÝV–Söyä¶oM&B· ÅMD×\r?‹]Cõ³~‚`L1~ì¸ë£wõ+©¦ÌÍÊ*’÷ðëÄ<.§\$cDÇ±>cšª-°21›~E¥zñã%%˜\nÃ”‡mÔ­@FÖVQAW÷„ÿ…Rgƒƒgj8hÄ\r€VRž…>hBƒbºÎ¡.¢e.KªË6e'³Â´¸Nú@#1ñwçPn>R¸äQ/KMªOdÞ\n ¨Ÿ`qvÍ¤¡\r©‚´!\nÖõ	j“æ·'­\$´F/xÜU†€&i—ŽmÛO×ÇŽñ nÐ¾h*—·‚Rh~Â¢“hvã4ðÂ'êl*l’ár¸¨‚*ix jd6zõTÙ0ü0ÊØæ²çTÒïJ±q…uã\nÈØ€sì¢àAk@EÖÂGWrvVFùiï%%QÅÂd„4¡³jT³‘Çäöù\rº\$òZxk\$XcõÒžp2ÒP3p¶\"K‘çI3ï‰œÛœSì¶1‘xn4è’±-Ù,\\lm&xØ,9çGùCP5‘9å9*çÉ^TIÂ6+}›úeµõI_—ÔyJÉSŽ9NM-a-¹ø‰Å´vÍ +ôÙ9nLð¬òÒ3DúlVìt¬ ¹ì^Ñ+O—ÉÀW!\$Ci6 Áy£ã8ÖZŽÍ¬‚'äöš„‘b…GLIQŽAoÈTÅ·‘ò@TÎ<Rç¦K‹pƒ”%é7ˆî.‚ùžŠ®OªÊ¥«Lq‰_¨-lh	n·¸Áìv8·8Å…b™6&²5ZÃ¦#xyŽ:¢j";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜Í\0­ñ¿!À‹·ôF\"<Âlb¨XjØv&êg¦0•ì<šñ§“—P9P¼fÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+¨È<nKdŸŽcY†TµƒÈà<F!ñŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áœ	#hàœIpèã}„@è4#mc\\9©‚˜¢&\r-’R+EQƒ”‘´f-\rï«Øà<2Pê5Žˆ‚ôÕ.44'ëå©>(»  Pœä'hÓv5Æbº:7<èhJ2:7}ãy7­áy\rMhì‡†!t8£*E@P—#§6‰C,ˆ#«Z	0Hä2Õ#¤iA#¨Ø:'ŽøëX…„ÆÃ¨Ü5Œsè‚3âã;¢½¾vÁ|¾9@PÖ2A£z~ž¾VD•Œ=(JÐà¸W”–4\"`L…ÐÖ*÷ð å™¦R6\rc\0œ!ƒÂ7!ÕØ@µ¼w@ô¸Ž‰²<ÆcÎ³xÉ½Vã–Ø°mÃ-Vªˆ9ºR¥Ã`m«–ÿÀ•#mÂ)ñ]‰3ï%õ	ûAB;#dgR£P\0\"î5ÂmÎ¼ÁÜ;ÀÅ4Æ‚ÆÆcµ‚VÎLf?,³ªJ:¦\rã0Ì6RiHž2OEàÆ\nƒzBõÃÈA•c¨ÇŽc˜Í	éN…`åç#8Âº„%íI\rØÊaJR'#1èµ°Öœ„¦)Áp@ðÎ±1W¥037›˜x FŒä¼'‰Âì)…¬2† Ê›IvlåÈÍRR\r+5pŠTàƒ8 !‘ô÷º‚”èig„Q?‚ Õs@ø2)ôÎyÕb®*&©OãúZÏ	ß/u<Áœ›9ùgî@ÀÂJIYY?í‡0îD×W¥‹†Gý\raº„PÊ!E(ÅÔ„,RaÉJ‡%.¦Z©9ˆª…Q¹ÅPÃb\n¯)ÊÅ\$«EàÄÏ[÷|¬‚'˜ÃbÕ\r*~(±‚rN‘CŠNX1’ˆMI¹9Dä¤¼—²úfá<l^	.\$€–#I5ò`s,S1Žtä61†/N”¨R¨VÊÃÆAN}À(!©ò0Ã¡çVÑDÓðÊjWƒ¢5fÔ‹†ö@wÉ\0w@o½ø¦yiQÜ½e¥0ˆÄ.‰¼•8ŒøFÊ'êzÉi/&/6\rœd“É±8~“s7üŽ€½Y°N)EBœJBI&ybC)ºÈ Œ‡6†­‹‡FVA\0f?'òÂÒ(¬ßÀc\$\nàÖQ¸¸jIIø<o\0ð“ÄÀ‰‘@P	áL*,EAÕIá€tøP—ó‚N”\n¡4.³FV:ŸÅÌ:œYê¨«Z…çPðîAbˆÆ¼Ã‚¼K˜ WA2Íbx^Á\0F\n@à†åàK‹¤4Œ†%u)3¨dR¼5“ò!?‹Q9ØäÊÐž\0U\n …@Š¬x &[,¸‹iÈ!Œ¶+@ä­p#¡…YThÔJ3\nÌø_IÔ´GˆáÜ;Ç€ñCðj™Q(ŠÑ‹Û{€N…ÑD‡¡±pÀ”c€srÎ`‹:¤ÒJB#unIç'€ÙY-‚…ÌÊ3çsÛ½ÚoGÍÂ¶ûÒš’áY.ÖEÞõEÆU2a€“ì)ÀéX!ÔEt?3ÞÊÉ^S­ºl‚Øà”	„xb-Ÿ—0L,j}\n†o˜BCÒ™ª™õ%bq4˜—ˆ˜.Ë¡9_š'l!¡*ErT™Ïù{x¥x ÊÒÐofËk˜æë±WE×²êÏÆS‡ä5LÄOÖÞUÂ6äå†;¦=…ÖF°r<ÍKßÌk\r¡çþ–üUOÒðFÔceùY5à(#@dmmïºZH°*‘ÊW4Q¢Æ½Ž–O¥ÌÖ—²ÙjáP*†È&¨à±z.C\r{¢œs04C³,Kþ) ëÀ•åìfaèk_FbSMw®\n\nÿ¦BµµIX,­ìsºô:½Û½•N^Ù¡É\$à\\vÅ‚›xì¨9ŸŠMÞ\r;@œÊ\$Q´ËjN0»`¶lCÙ± ¾Ýƒ{p“rBßw-\r5xmKèND¤2²´nç&Hêlh0”Ï\r’|aö|^Ð÷Xí~¸Ý—\n–œNo-½¸O—óŽk|øQŒiªöTr@	')‘L©­>axÎ…ä•üÐ£Ú(%,%¼Ë\"¾§SþâÐ‘dÌN\"\$Mâ¸èÄx‡M4[ÿI=(ì¿˜©>G«­‚É1eX2ˆW—a>ˆ°\$!Q†,ÒZÀ8ÈU£rK×ŽXv<)\$ ä•Ï'	¹Ù'¬—jc½š—€FXT­üQ/|7~nK¢AÝã²nå¡ƒø“'¯Ÿq¥äó>o'[=â÷ÅåóLÎzo,oo£´í\"\r:r€‹¿D¡¿@L	\r`Êd†©è°\"àƒÈ0R Lòš¹u¦žE¡±ëCˆßÒ¹‰Š§MäXÅrÅÝ&ûÔîh>ŠŸ.Q.Ò0@Ç2%°]\0§Ùß›³|§\"×…%c_dþç\"ÿ/^‚…Rò`»ÔrOðObò0\0»póïÊò'Ç‡o@ÿ¯E‡`ÿO`mÏe¬{Ð'\0î¶ &r?\rX¡t\$°H1/.Íœž0J~­ÐÚ«XÚðTC°YÏ^ pQONü¢ãmúÝ+XÝpvÑP[\"ab@Ü‹Ê÷ÍøPà\0ì% †ÌìÒ°Át8ÏO+Ç\n°¹ÁZ@ðÁMŸ°Î°P¾ÍpÂ°ÆvP—âRL¶\ràÔ\\„P\"ÉÖ'ðü´f:V(L®Ö(Œ<&dL~£b\\‡ê„T{¢f^Ñ\$RQ´«XÜi4˜é:¹E.°~¬®*êÎ#fÕ\0ÄPXªŠ\"É4®(+)z\$ðÞÍÒÍLØËÄÀ\\BkÏJ]ÂÃ‹pXb³¦\nÉ,–_pi°ñ…³ÆºÿÊžÏ°ê0î¥(ùÌ•c¨ÑÂ„(_Ïüò-;ñÎ9pWªW?ÐAƒž8Â†2gHpÃ—±ên€ÂîdÎ8fSä`À–\$Á|X¯|É)bA	ü'PÒ c¤—¦5	p{ÕpM#Å¥	Ñä¦#ó’KÑð\"odÊƒ€zæVe«äoÏ%0˜Zr½ÊBeF²pqÁ Kí%PZ\\/¬râJ_É~E àJÀÖ'¤®ÒÆp4õH‡)âre°1%©Œõ`¦A²¡+PI\$ì’õ\$ã,²\r2€½²Ï+¢\\&øíŸ\$0Ì`ïÐÙò¹Ë&Ò˜Òr…’šN‚æÎ0Ç.’õ0Lì\"Û¼ÍÓ‹rñ()1²`[¬ÞÎ2ý'Œë3\\GqËÃîÒÄBÓ!}0²©çèðàêK¤¾'ðÇ\rÌ“5m/5³K21»\"F\$ÁCÍ(‹\\KjhÀ´\$MCáÇŸ\"ÉêâI³' ./9%?\"ìt^ÂÖÑ æÝn5Ó”žÎI9³°äà–\$¬1…ìC Ø(\$ª\n³”hÓ¬ñ\"A¯N\$#Tàòs¼\r¸I@Ø`Öx\0Ö]„éŠ\n£Œ('ºZ&ÇC¤C¤,ÑpÐŠÜ“F@‚ÏÒ² ¨ÀZ\0A+\"6<îž*ð\"eü—Ðmðp\r®>»ôF@]\níüÝTV\$4[D­õF²äìšÄ¢’Š0—B:#è2vgj2`›CàÌE€¬˜aJ\$dX5îïÉpU\"’6Eú\$/„ûÈ76J‡ßJÍB §*±ˆ#Db@gè@˜\rêÌà\rLoÕM†Š…\0=–¡4Î×/Yr¶EKÆ-Ò­OlK(z'ÒaÏHÄ¯Ä»ïvdÉ‹Õó²¦ô5É¢p5c@'¥â*ÈŒ\rààš%\$È•\"öêÎZñ§I@ó¥‡\nŒö¯[8£¥.Òš\nÊoêˆtukïÒË¶‰hRCT5¤0×´”,Ì¤ªrµ@ñÏhg ‚&o©Y£\ndIMì9#r´¢1†KOâßJU¸FïF‚0«¬»‹\\+’2fQÌ<g2¿-Ò´KHl€¬´fÆ9(GB	\0@š	 t\n`¦";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ­†»fnœ_îT9÷n3‚‰'£QŠ¡¾Œ§©Ø(ªp]/…”ôÒmg¼Ó’e¨ææó\$Ÿé)ž„Š]6†ùªkšl—°Nã¼õ®ˆc®5®CHà¾¥Ë R˜:¨ãh„Œ(¨„·#’	¨*Eˆã(Þ6Œ£ ä„Äb›¶\r­{J€¸hL_!ƒ\\ðŒPQBž6q`Ži\0!,Ð«È4¦Ì(2B£Z5#Ìœ ÇÂ¡ânÖ£0z\r è8aÐ^Žóh\\ÛFª€ä#C8^øNãÂ7cHÞ7á	#hàËÅƒpèã|ý³q`è4>Œã\$:Žh¦(‰r^é®¬¢ûŽ‰h(\rãXÂ‘\$ÃÐÎÖŒƒÒ) ƒ-“<;.28•­nÎ.‹²Ò'\rïÕj2R@P¯¡ƒpÎŠ„¯¨Ä˜Ž€M¢ZcRçkZV Ón[¥Šâ%C`à2Œr¬	q[à¹ŽNr22²Ã\$ð&hHÊ;!j4-0Œ#¨ØŸßƒ`ë*T+(Ã¨Ü5Œr„¨-ƒëVBn“®„¯ƒZŒ9'‰Óˆ\$²ºÈÛ&#}ôS±ªç\rãeY,¥Š¥þà_ØhØ6X\rB9Œh[½U7´Ø˜µˆ89µuz¾	5¦=Vuö¢Š\r²Ò*§×åE¦kN&²6¦úœ¨ò9ã¨*ŽÃ|éí°6¸:kË•ƒ%jp¨ˆ!lU´*4º˜RùÞ,Sª#0Ì*	xž2J)53*ì–È7,ôø:Œ{Pæ9ŒØ@-³ãÓs#äÚ6–¼â: !@æÀ—Úí(¾²Zäb˜¤#ÁPë·p@3#Cn„»ß‡µ£¢_'Ê)½1sºèò^*1Ø{7äLôûg\r·aOHÇ?Ï·§Ã/1¨,ÅAa|2OéK¡FQÍUêMÊ2£%°«<#ÊŸHÉé< ;„¦–œ‰%á5Âèsähú†PðƒËÓÁ~	ù¦TÎšSZmé½ó§\$è“²xƒÉí>§õ Ô*‡VË½þ(ò’”>¦u²BH@ØS—]ïLú ƒxMÔÌ#&µlBLŠÃxgeB4ød–AMëø4'ä‹'r¥OID”4hÆ±b{Â	@‚\nHé&K-´Üò^ÓùPd•òÒeŒÀe>§¬:³JdIù\$ÞE;Rr”J“m\$¸˜\"h#`	×Ba¤høQˆdm<à@j¦IðÐó@•F¾HRÚ(áÍO‘0òbÉ8i>¥ Ÿ©ÝÍ!› ¡Åƒ“çŽyHãæN,(Ñ»ÆHÉ£‘ð`Ì½2\nNIÚ÷T‡æ8…\0žÂ£ÁN\\5u¨@¥û”“Š7Ÿ¢>®,ŸæÔå!8â\0S†\räò@me-€£<yH@Œ7ÁR:³êyäa³'ášh%0äLÓšU7D˜5›€êÇ\0QÔ\r&ÅuFÏ¹¨gÔ²*#ªiWí4P¬ýr‡‚t‘aD!…IÖ`Ì‰D„…ÒJÌ	A»#É&E0“ˆØa\rfÊ-/ÈßªÙ&ÁÇ“ãb`]±¸1ée¼’ô˜™ù’F<9Ktœ\r6,Ím®¢¥^Î\"3¨†L7¹åÆ­€nx¡ÙSú•³\n;„ÙH¥ dÊ’ŒGà›×8å\nB§2‰FV‚x,µ¡	áÌ™ªÀm,JQ»¥@¦à¤€PÎÂÛeÐ@UàZ®ˆ‹Éz×^‚X4Ïzà}L\0eêž,«²ùm¬:Sæö¬l‹rô\rnM¸ å jiðí„CînÐÁ»¤¦ä„´ú™)é|½ÕDŠKîê§‰\$-wº2ÜŽœB6^žI)º„ø7‡Ì\"ÐdÂê¢1—ÆæÝOR@G¨T …@¨BH1ÁªAd3ò2J“0ª‰Â£pÍX—Å®ÊÂ×0† ®†IXŽF0¹ 2ä¬‰u1ÜŠZp>\0½pÊöL–Qô‡;¿* Gº,Ã•`ª2ÖS›9W/eqC²Ö\\¿¶&T9\"æ~óD\r »3†üÓ%iÊÙ`Ù‡¬yœ²öt>Ç<ŒÈÚ³æhÐÙK@]›t&q9w/µÛ\0r@„˜:´Hág³L~;Úc7™,Ö@‰ànCFžÿŸãØÕ¤S;Íc¬É2×ÖÚOëY©„×ä(Ëë\\ý±®Æ×[#@‚\r–GÌ–ÂÙøð1)ýˆ_lG<¡ÜŠ„í°«\n*%‹º«ºJkÒÀ?µ¨´¾‹A/7µ›+£ÂvÞö8K9xË‡B G7â''f2ÐÜ*íX¸\r|.iH©\\nxÕJ«\$dR¢\"=ØžX¨‚ê1Ã‚){’,îÑH¥%¼Ü7d.orä[¼Ï0ÈøsU‹aüÅþÒ½¶ï˜by„®Ñzìn‘¢of`è×g¤)†èˆz•@ FžßH²Ÿí•®ˆÂUZ~(pR9TÐô½	Ò£º»¸BgÖ•t.ÝÚÈ¢ÑÉÂMÜ¼nKWiÒöÐqÇ¼\\Ír3Îã­cfa„“¸’ZMÞuÏ¥è»[¼Ô® §žY/ÇµælölêáË¬ÖþŸá¢ñ«oÞnºt³UrwŸVkÝgÙ6MçÔOYU”„ÒøÉÕÞgµžs’T¹Ã^œÑIgPgœ‘™¾Fe9æRÿžPþ—QjåSFäsžÀOÙù_rR}ì+ø3Ÿâ“;'PäB]ú~Iù·ç~ÿ¢þ/‚ÓÍæþ¬{ctÚÊL!/hó®z¤Kå!÷ï\r\0Ð¾\"õOw«ÊDBL6†\"7dÂ…Ì]€<\$ŠE°:0ÅFž£d\$ àx ž@\"ª\$°JŠ‹Â9ƒj kÒ•-xñÆ\"£h*B¨&ÐhŠfRÁdÂaCàF	ðÃ°),¼ðv&î¸»K½‹ô½ð{eÒUt‘P\$úh™ãê€/8®¯<\rÐÆWor¯¯Y¬>¯ÅGŒ0>‚‡pÑ«ÜÃ0î€/€>	P)n¾¼PÚõq½e~øGÐâTQÄ|¸Eô%…ØÞ¥Òèj´lêä«P \rc\ræšDePÂ¡\nì‰‘I¦l&ûíå±°®WçBaæ\"\rFª±)ñ1\rÂM¦ J\$Äúúú5­g¥ÖF@Ö&`Üh1M\r/b(qœmQ/O‘ªÚ°þªÑ²WÐCƒà}mVõg%Qž- ¨ñ0Ìö°ÒñÕß\rQjð]¬Aë¿äzÞcè¬Ë‘öUŒ\0'pÂþCT¿Ò	±åñfür\$r±ÌÎqø;¡ˆ„;«ÄGãÙ!‚¢’ÂðAƒ Ðýƒ¾ÄRPÒñ\r«„'‚ö6\"Óq\\fø/‡ÊàF±*ÖBûlÄ°‡<Ï…Û(ŠîØCÊsÏ°Oä9-²‘rš3OÑ(ò¢\r-?(kü°Àì%ïOêV&#‰È07e£'ä8½RÐ*Žlz@-¬À×‚o)’âÌÒèür¦³~\$¬ù/pxú²üREŠä\\\r€Vøänü©Èâ£~±â^Êˆ¬[6€ª\n€Œ pÆ>ƒ /ÚérÞÑÌˆÌÆØ©Ç)o¬üíq4ðÒÑ0ïï5®+oÊÔB,#4VÍ\n:§ôg®º	³HÀò@¤éÑnl/2IÃÒLxÓ¤g_¶1â³Ï€-Ó°3Š!1ã5D\\hK„ƒ‚B ˜\rêŠb43Ù=ÂöYÀmFxíÌÂNšÙ­“:®Êï?­WÊµÉ9@‚(2Bx„êk}An“4.ƒ.3c2êŒàà\$¤j¹ô Ù£hW+¬cAB_PV?²2Pª Ðºˆ´\rÂúïbx™ÈÒ?Æ²\"uF¢ëÆIÉÆŽüÂ‚°\nÍ/ Â`êC 	ô:<ç,kÔ\"ßJ&L«ê@ãÊ0Ë@!C,Š¾ˆ£d?F*¨´\\&¨å´Äøì+JK±Æmp8GÔÈÀ‚8C€æ¦ŽÞ& ";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰R×Ò”=q0ø!/kVÖ è‚NÚ)\nSü)·ãHÜ3¤<Å‰ÓšÚÆ¨2EÒH•2	»è×šâš“²EâšD°ÌN·¡+1 –³¥ê§ˆ\"¬…&,ën² kBÖ€«ëÂÅ\" Š;XM ‰ò`ú&	Épµ”I‘u QÜÈ§sÖ²>èk%)+A\"ÅJ©\$†<±t¨±KVØ2Qú01ÑLêhÈHI¦JtACÉ`’)Q’ÞÿÑÒYxÿµˆÄœ‹ËÑŒÂ­,…óàÕ!ÔdW&Ë‹`Îª\n¼ÑH2\"HOÑ)Ì…Aó¾RbúÐAàÂÞŽC(Ì„C@è:˜t…ã½œ# Û	£\\7ŽC8^2ÖØðëÃ˜Ò7Û¡Ð	#hàå¶àèã|-Úìã# én¦(‰ƒK®Ñ1Œë?JÎuZÚš?Æ…`ÈÈ”.\"ï,·D\"Ä*ÔOékã4p\\oŽ6q¾&Î3Éþ6h(²—.W•0®0ŽCt\$3¤a-õ”¼è` ŒþzÎgùÞ„œ,52“©Ê²I,Ìú[VŒÈ4Á H'ixZžÑ(Â¾Dj¯@‰a#¨Ø:°Â6£,+‚å8DPR<¨Ô¶C&ë3þÎËokª+ïí_:Îó'Eå,’€‚d)nOËêCöó±ë«;V	ÜAÖé´3¼q£Ë@Ï9|—-¾œA ™š;Ä3Y?òÞK1kÉJkT	òÖ!«›6ÅàðX‰‘|VÒÇ97°«ˆž<o+nœd‰–= ±eº+(ÅufQS;‰ÃÍVVRr-,3ÚÀpÒd^eeGÞ¥çŒbé…I,_À€©Ê‚¤ðŸÍ)í½ÿ*2†bÌK†>Îýƒ2¡I{ˆð¶·Å\$~IÙZ%RÜPÀ\nláÈÜ›°@ÍoÁ˜6-BÖ'‘ºŠiAP7œ@ÚCpyÕp‡PÆÎpsÍ˜ÀÞÐs‡@9C ÂÃ\nI -0ÜN¸(`¤µ”BÆÔ\nOA!)… Œñ‘à. Œ<»2&<«MEeH„ˆGÒEK[â\"\$øÖ!²º÷a‘·(APßàÖsÃ2Ø‡k‰	‚\0‚´– r‰ar. ÈµA¾X	b€Dƒ\"ä:ÌÝx/\"Öäßq'†°ˆºö^Yƒ0.œXD¶¸˜’iF’®	˜×šP‚hag\\9Y„ÃºØ_A”<\0Ò°C\$j“A¡`¬5Š±ÖJËY«=hÅeªµÖÊÛ[³1p.%È×0s]©v.éJ¼×ª÷\rå}¯`ÂÎ8«V†åÜZÑR%%ÑC\"²(E”i1cò!¶úAJ\n•ä‡³0‡Êd0YÄI\\ƒÊ;FòôZ¥òPÈ…@\$\n2ò•iqGÔPºV(ßŒX½(A\rrOàÆ¼õ8Ç åÀÊ¾ƒ‚Ø‡<íœ ÞÚ\\Fõ.“(ÀƒI©µ1ýÝ–¸ÙùUF¤Õä:ÉZ¨é5Í6öLÿ^hÑ*…1R¨ã\\ˆjE(¬ƒ\"Ô\nV#C%i’Ba0d\r+èá¶…ú—ÑÙ©«8¶Ù†0r\rá¶GI	ý1NÊÜŽ#/Ó vŽxp‰á–¯'ôœ‹%+	áL*RH*LëÕVñÁ §íÉb¶Ôl™©úû/T¹J°EÐY>4ø—#CTŽÆJƒÛ·\\ŠÝó&}ij…XèÊº7ŽCµÖÖŒ'ˆ4†p@ñ,ÅEm!¥_„`©K¡Âú\r+ª¥E6ÑflÙ\"Z§k—NSš[\$ì­Åô8(\\íÍ%FIé¸ ž\0U\n …@ŠD·\"UõNš¤vO-}'=Ä¨X…Á\0D¡0\"áìAˆœQw	ÈX¨’\"àH.ed‰+¢P	³\r(Š£\"½Â¾á”:·MÎŒÊ8ˆ`b]qya¯ò˜>Ò\"îÙ4bEB‚·*fUÙ\n%qï¤ÏKÝÙ¨,™ ×@rÆŒ±³ðFˆÇ`÷ëÊ§)ä¦áÓ^BÄŸ*õ0cü’Á ûQ7	ú½¨4B%}VíéW·ŸžóúV„˜Ÿg†ø®ˆÁ0oMÄFÌÊÕ\n¦T\$•ª±‚GN}€1HE«¿/M)0on–RêßŸÒfZ»î\\+ÃîDK¡q)ºø´A=Š	“¤ÀÐ*àb½f–`icÎ!L4‡¦ÝOTXmÁL2œºQà\"LmAºÑLèü±xDùL¬µo¤-ÜËèä†Pî«è4niï\0Ð6ò4ã«2|L•ë™N ê5š*MXSq2õPb(ËŽ`ˆ`zP‹ë–ÚÉ’˜¾D÷J-\"&†IVvŸ§Í€`¨Tžj]o¦I.\$‚¬™L·ÂJü¨JÜ\"']Ìì	ÙÑ£9å]‡B Aa Y^\0s¡:Á©Ö8éÔäuæ‹œ?49—è“ËÏ˜Á_@¼w#dõš/w¤åñ²çj{…c!äî=”ˆüStRt¡¥V%´;à¥îi?ET\0˜àvW„.±ôÆø››âë§_OŽUh\"[Ýt¯>[Àqä<Ô|}ÉóÏ1WÊ/}zØæßÈgï%êLm68–²ðôçŸ`÷Š•;xZ”/N.°\"ÞÎ{B\$ÿ½·”ïŸA ò^Ýôüß³ñ_å{WóË­Á•äëð{/§¿'Ÿ}Þ¨ ïå½\0SZm¢ÍrF\$©hvÊj-§˜–l¬É%@)ËªAÏ:ó,¾%ú+ÂÀ-äˆ<-Í­tkÄÝ\0(¦Eêzš&Ab¢CRð4aÄVvCL>-C\0§XÒá.%¦U¨Ç`ÇgpŽØqä0b-,=ç¡0ríbÈa§2J…vI-¬Le\"C„,jjÖÛÂP(êdÙOÈÑ„LÁpÖªÙ)`ü„?­úÀÐ¾.0?*´Ô0ºÜâ–zù0´ÔÐÊV®ÜOÖ.“cM\r°ï±Lîs¢¬ª¬˜Âˆ\rìâTX¬ù#:RpPG‡:ÒÑ<Ì’I«œ.Ê@ˆ³@à»â9lÂEˆ&é‘Kbr5kmQ6Jq:røÂà'žÓðö?VK\$å?Î\"qHi…rÄ*J=§H>L…mf3˜UN`¸¯0äê§“± ‚M@¶ñª&®¤Îñ.O‘1­Ï§ðÐÉU1&ç\rÁ¡qÑqÕ#U­ìyìÑq±±÷.Pd«·\"× 1Ö&±v5ÉÈ1†\\ÌeG²b¢,LÃä÷/@õµˆ/`cR.Ê²4âÓò:&¯-!òBW/3\$‹º*ÒNzÈç O}#Ïè<.LsÎPÁb,ñúÞP¶G2|QÞÁ.S(r‹3)1	)’„=o{²*/ìr+²>ì²*‹²wè¬‡\"g­q*ßF’g~Lâ‰gZãÎs,K°~‚Vç°ýCât®/¦*òö«r¸tÐþ Â¯.æ¼AG.¤ÂÚ¡nš!¦ÑB+íÒ¦>,åA ã¤3,Ü)hÞ0 CŽFæ,JÎ†W!æBÌ{\0Rµ“VzÒ‹p‚§QQ6ci*äÿ+3pÈn¢ß“2sYp%•6±ÿ7ì¸d.’æ3]ñx®„Žé&<óy ‘'Ç“¬éN Ï\$Ò¥ó:ç©dÆw‡ôDm8?ä†æbI3#H‚j >¯³=FúènŠt²C6Í‰\$³ý)ó§´&²u+ÿ;’P>án§XË'2Òî''>­­V†&2|îƒ °BcÚnÒâuô@ÓQÝ4Î¤ÕG¬?RŽkvw¦OèƒÓ”Ñªrª´pó(íES}G‚ŸAòŽ@»Mð€s<Pj5Ô”j{G2+K»7³·Hç¯J°65‹¦sÇÜL´l`æn[JPé7ôÊ\"NkH“aMNYM´¯;QßB4æTØ@HÓ#ÓgÙOiOA¡JNâÙ8óžr DŽ«IÁuMn-uGUMÒ-daQ¬u;\"eH\"H¯\rEg’O´#Pó)ÊúådÐ*\"îÌEEÉXúRÐFÊtï5c.-XûÊþ3ê>ßµqEµu2=µ|ËO‚Êjp¯³ÚbÎÞó¦tÎUŽ=u\"±çîá2Y¯+Z°iµy'u¶õOšï•­\nÆ'2Vòrz@†€ä\r€VÎu6ç/?'ž.óï0¤®ˆð@Œ¾@Ú«.Iò\rÌ2\n€Œ p¸’‹Boœôn)VŒRûO%J{g¤Û5¸ï’PïÖ-cÕÚÈbèØ\"&ÓëzüÂOä\\U§‚f6	¥ò\r Ì.V%µòC’sÅ2ÇÒÒçM-_o\n\r>eË™&`Jó-)gJBy5‡lïð™[ñ\"¬b`\r\nÐ¨åÖ¬5GŸC¥<Oñ-fC8!Ž4w\\,ðêC:ÔÞ¢¶ÓBtôÌDƒˆú)#Lù¶çf6ëc„—ÈÃ2°ímVÿ,ñ¯GG“o—nnÂœ120}R!\"—\rÖýOO5„8«ò>±º3#c†QoÑ\"V„U±n\$tQ”Ê¶¶ÔGBÊ”âË¸ÇãþÉ>‚­6¸èrpïÀ\nÀÂ`ê ÛU‹»r~=®>K`×‡ØÙ’rnQQmÄÒçöpÂ Î¦eÂDä\n%’-e2ÎÏ’U—{õ|1f5#K´Èo“Uá Pð¬ÔdgÃ_mþïoH.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	&°BÎá%0dB•‘ªBÊ³­(BÖ¶nK‚æ*Îªä9QÜÄB›À4Ã:¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Æ©k\0Ò¸Ü9#xÜ£ ÊU-¬P¼	Ju8“\r,suY©ËÔBæÀ.Š­'â˜èôI-\\µªŠÒW\"¥u,ˆÍ±‹Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­äbã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑ°P)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘m5À•NB¤I‘ÖpD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢²F\rãÎŒ£vÑ<í3äü„L\0|\$´ïeØ7à^0‡Ëûáv?#xÈø¾xð@)Š\"`Òû¸r#–àÙ{s\nY–äß7)S5î¸D6Ä@ˆ¦D2”¥n®T×=\"ßDVY\"û¥«î\rc%)Ý.ærpESÚ'R\"ðWsÞm×=¸êè=íßC1ÕƒrA´ÛR;+Šãä7I:BðtEl?ehø1Ï[™sv³e\\5c¦ÜÛÙgé §ªä+ä”²UA\0+õ„F¢C¨l€€;ØC+±r¥8¾¢’™JjµÁÔ70èŸSÜAè^ADÒ\ngí@3Ÿh@ÁN6G*Ø€0¥tE\njtD®mÇ&ÈùáÔ:Äé„°¸vëÜã ‡H†?UYŠRzNåe¤ÒóAKi.J\r@Ø|Oñì\$Œ0†äŠâJC}*Íû£´í„dY@q\nÄ–\\DYÁVhõÜGtò«Ì5®…Hº¨LÒÆxÑQäš–_M‹4tOî#È•¢ñÊDS‰	Í¡Di Ì_\\w\\ÒU Ù´d¢n‘)Ñ9zzBR¶6#`^R4o.&\"\$'Ï!#²ªsdÚ8\$ô‚±»\rnÁ²‡F\nÿ¤tññ/Šäp¾Þx°dêÉ¤u'&2“ñé–M™G9”X\nHÌ	R²bDŠ‚DÅØ+. ÁOYð(9\0£¶w^Ñâ\rá˜3ÆÄpùy-érb\$@¨Ï(mŒ¡äAÀæCc=áÌ3@@PÃ:H`°ø‡*(ajH©ó6ÜO¸(`¤¯0¦‚1H6fÖLj« ¼Z^Æôš@„ Ar2[éÊ>\$8üÍp®u/¾C¬£Z^¡diLÐFÐ‰òï\r\n‡gñ*£&r‘BfôYårD²©ÊrÈ+ÁPï†àÖ|3e¢©ñ\$‚\0‚)s¤?'ÀÈÃÁMiíE©˜\0Dƒ\"~…É%½7Ä>E¹V§ñ¦%ÔURüN]j¨Ì0_ÖrßÝ¹}©&Ž¨Õ7êE \r-‘*ÒÊðM,\nÄvÃ»epa”<\0ÒÔ%I±A¡¨5&¨ÕšÃZky°6 äÙ3hmW=6æÔÜC›sn¦™´·–ößS»€\r	Â\n\$Ï‹<Ì>‰ëËeê™D6l€ë	-²i7e=X+©v†‹š\r/„Ú×>ª¹W¢\nr„÷q¶à4ÖZ	B€ˆuÇ90@P)ú±œü›ð‰g¶ó^“ó†Ž½D; (!§ëížíí<ç¤õžÐÊàæ`r‡Àýž0ßàqCøýL¢}UL*8™ýbQ]\r”L%FØ<›ù#V	|Ô,ôõÈ?µâJYŒFö‡1—ÎB²œâQòñJâßr·ªE8Ü(y<ò=Q˜®Q²)±jjBL.º9˜2ššwÌ(†°,†–ßŠD˜wï>P¢'VÂêÚŒA\$‡“¸ ipg’±àÜàÏÎEjÆ0 @ƒ’ë¯ÖëÐÚA\0c(nXŸ|{ŽÍ¹ÄÖéÉƒ#r–j\n<)…M9W±!®tiÛAPÝ2‘S…Èbµ8ïòíM/ÚIÈèj˜Ð%D¼% ¢ÂàÌC8uP¹?j‹ŽqÁáÃR7JêPvµ<d\rÔT¡GÓƒøpñ£{Æ#ÔÓ‚0TÄQ•Á†“O3i\\×é1Æg«]qÄë2Í;+Ì#)Y…Úý¬ðž\0U\n …@Š¹¸ &^|ÎªÛù> È¸u–ÐÊfZlÖkEt^†™?\nh0¸>ùêõU½\"¨©J¹Ê'¦{^T.sMX\$ŽE’‘OŽÒå³'ê„Ãˆvˆ„zžÒ	I	Uqß™´ÁrÝÎ£öMÈó#®åÛLù^Cüàü­Q´;¤†8ß¶bå@Ž¬Ï,rõ”“*yêø!ëö¸˜#<öØ¶ÞNR3?ÝUüõ[8ŸGO®©ä{lyôu7HMÙë7â^dy˜,ÞKHKÓêª™¢!pBßQv[ì_ÁYí˜Â{Ø)¬H…œŸÄYÌz?¡Ð:Ó26|4.l±Diƒó®C¨g\r\0ƒb,(Oh@oÅàT‹4‰nÌU¯ê0 ‰šþd´ P\nF¢j\0æ\r@Jƒx&ÎhTÇ6šåäí§ŠH ÒH\"Æ£N¦\"\n`Ê=ˆ<ÇïœD CF’lè4i,©ð6cO2€Dzöƒ|#\0P	 Üªp`¦m~¢JhKt>ãÐÐFÇè\r ÊéævnTìç~µfxˆÚ5¯\$ÉÇæåÌXcp„°àð(é#/0,ã¨›‚ëˆàh–Ò§˜&*­àêƒÀ°bœo¬‘ä¤ùŽÜ‘È,åŽšîÂlï\r@Ñ‡`APòíO©|ÎÏ~ ñ\"Á®Wi&êÏFz´!`*EpÞ\$4ùiòìÊÚŠË^œa,jŒrÉÐÅüÆÊ¢Iœ+äÚBÇÒÐ('Ætüb\"ü®ZdçV–¥|Û©‚ÛæTzÆ+\0ªŒfdÚøÍ<“o’“ÃŒç ¨ †	\0@Ö†\nƒà ,ŒÕ¢‚È#î¹.PN‚úå”Ž­¾ÒÉ„7¯lH‡Ì–â6|-ÛPÜ7'ËŽ—Lê‘Ú)DÃŽìêOBþ1^yÄxõgHÍç„Ñ\nH|Òéƒ¨Xpê®,\"oZÍ\rÔÀÊ„iî ÷¥ê/¥!äò‚\"ÌÒBsä2/ E¦Aðß®¡)Ð‘ úrhõëñ!ˆðYRZîR\"ÍB\0ÏQFÓ\"ŒÒ¡PÉÉà¨bÃ¢»kMÏA(òRŸ2V«O[\"#ò’k\$’0ÅO+éÏÊ%P})\$0öòÑ(1_\$Kö\"Š¶©Ï.Ð£ŒqFÂmrâB0Œç*žï2þ'â‚(b‹\rSÄ'Š2\n†¡§–«“(á³/Ò†õRc,‘mdtW®¬TÒü‹#@rÒAãÑ®GRž9®Ð4`—#%”QÓ4M032€Fq‚©â§Í¼¶ AæŽ)	 ¬ìúˆ-êÀd3¢,ëi'‡‘*K`³ŠŒµÓ•žª²ÊË<éæGCfÞ`†=‡´`ª®Z/n’óÆAD,J\$°øóŠµå„fÑ]55*RG?ós@ç¯@g›&´Ìq5/Y5r†SztÝÐ 	&ÃDðþË4)\$-\"¢#C¶Ððº›H¨õ\rÉ/3/”R1#ÔhÊ‡‹#ŠŒà²%-4Y-nãH1úíQ­CLP“¬\rGòõ-JFò…E›gFìŒ÷HhÁ<.¬îse&R¤à–Q´ÒàP€ÀÌàlÅ8¨‘.Nàrü#Qd,î™/\r;±üÄÔÛTôÓÌ%;#JôD+ñjþS’–TüwðÙOn› ¥Ï@ðüxwr=I‚ËIÔTê±›'1þ©í¾–pâÕëˆ\0¨ à¯ÂŸ.•SÎZÞtì¨brÄð'bóôZœï‡kcÐ˜2eDò§IõnöRøH÷W”­0ER³\$B1A\rö'%a5í.P4I4cZ2gJUˆ”•ÃjòÄ§Gµ/D´õ¦±PÉáã«F~Ì³UJ5‡SiO‰ß4ÉHçá4—]T›H•õtÙ^.Þñ\nÐuƒ_wæ1/j¨ª*RÖÓ¿@ÕbÒ]¢Rfm£&êÏUÑa”|‰N¡ÇE7rG\$±¯Å÷WÖ33–7c´'CuðC\\”²ú!–M8RtZ4ÝeP²Üõ9>4ðr©dk564ù4	¥ñ9;4gs“ZTjµNÑj“'\$Õ_YÖFV¹HV§Yå‘+µ?`°´vµaöA_4l+ðú~ÈnMÇÝd3km¨rý\n¬ÛÖQ#pƒTÒXeŠåSÔ¨¢w¬ý`vyndøI!P\"j&m*4pny¬4r4C´drï)eÌ´ÎÓWÛñR˜Š¥®~‘—U²ÃjŠùVõU—iV‹ŠÞF‘ãWŽYM¾^lT‡ôÊç ƒTÀ²\n\0ŠÃL/fçòhWK[sQuLf·[köÕw‚‡]•sHÓpSœœD¥'ÓÝ@—fMÖûUðàå·Mo4IO’¯\n÷Ã4V‘46åSVêAP°XõÍ^–=€6\r€d…€§k\\É¼Ê”•6·[öékØ	³ò©ø#[•êy‘B˜1Œ¨1a Š<&ðÃXn5ïrUÚñ/²¶t¸7©sN¼°é]…¸ƒ—˜e†”¹„ØP™É3[iÁ^¢!lØ-b8†69†xK­ç†øSlìœxBrFdÅñŠ‚ŠØ[Tƒ×xJD?\\K}•C”'÷ô`¬./v8o¨‘yVšî”ºêÎÏÊU0PØ'=7öž¶híq\\ÏWr+XX¶{‘e•}Õ¡`”f}õÃfy'c•ƒ¸“8yv¼ƒh:ƒíûö«6U˜)W_÷ë\\õ-@”Ìq•!]”ä¥%B•íÆ÷ÖÜùáo8ÑL7Š6OoÉh–üf•åkS…”+b_H²4Z9€Š™u˜¸)WÍm± ™¡ayemX™’¯~uœ¹a˜X±qQv°É›w…›˜‘—cŠ‰ÃÞcSU8UWÙEš¸]kª‘Ÿ‰ÅŸÕQUXŒ¹Cš”MšÚ¡\né×ˆ4€QŸú•WßH©g–9»¸ÙO‘V­|y¥[¹1lù68Q3{ÚOm¹ã€Õ½Z&žz_¤ÖÙlxÉI‘ÙÁG:[K5šw­5œöò‰J©¦7éž{`9½Ÿt	h±†\r;‹¸†ðb³–ª1o¥8•¦¶{n«èrFºÅfºÉR{#¸w šÆU%Z8ZbÕ}®õ±Yº§múE^Úí”š	v×àÉb˜ínvm³–QtÖÀŸ«ÌÀ_BHå§4V²ÛÓxößp¡„1éOc¥…1 7¸ù¶5´Y‰´•z®,ä_¥¢8QxÅìa³æOÕU-?3D|Ú+›cu:µÛ2ñ²Ûƒ¸AÙ,Ðuö^wŸµ›«;ˆE¦xhãºûm6:Æ…>\r€VØ@Ò`Ö\rúiÐˆ‚Ú\r§\r Ì¢‡+ÀŒÇ«Üý¨Kâá`ª\n€Œ p5¾ä’+Û?žƒª˜—×q¢\$ÌPâãì…DÄ)Åë¨4/FÛµœwÇµì6ÐxÎÒtj™\\1Œjƒ³¢SÃ¹FõÛs|º„Ûô©©(b÷Wõ!m¶²9.Ùr»dù°™¾ûóAMÅtÝràØß„ö†+?Ìfãº­œ’ŽžÐu¼!¤“øH)ß7©Ë/ÚöP«I¥Wô·Ù¬öYhÔZ8j@˜áËÜl£Ä>£ûÎŽ{¸ðhÈŽéÌ¢A¹_G.JTq(|lŠœ)˜:¢:&¢~Sè8Œ‘×	tWœ4‹Ge«·u¢YÅÑ4Nt¨aŒZñ&+—âÎ¨J±e¬vÒ=7Eú¢×¨T0\n¾>¾< AÀM€\rãPãÐ£3Æ£ohÉk*è¯M*½›ñ™\\{Cit‰Ñyï6ÑâYˆg)¢Kx…;\0P¤’lHa·‘œôõ|fdLÔw\r¬ÝÜYàˆ>Î0j#™Ú£.@û€Æ ê\r´°‡Uª·Ø'àŸØ¦Ã•V‰sÕÔ6jÜïQ—%¹²K¨Ý²ÒôgÌ‚ÙKðr`P\n€åÒ£í¸<Qãr—Ï6ëCä‡¶”F8®ÿXÔE¹³yÓ¾mÓêœJOÅÕg7’wžÙ›—actÛ^‹Ñ¢ßµ±«RM¸V 	\0t	 š@¦\n`";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$\rü6¹ÃÐ¼J±¶+šçº.º6»”Qó„Ÿ¨1ÚÚå`P¦ö#pÎ¬¢ª²P.åJVÝ!ëó\0ð0JË¶Ÿ­ˆ2¼\\Ì+ûbœ:HÃdÔ­IúSÅ’K¤ò¥QZ\0QŠL\\N|å9©Ã†è7…Ã[%BŠ#bð£Qi(ÃŽp{°°*\n”\$ìÏÅÄ“&Î4€‹Áî99Eã·/'ÊÊEÄ“¡q.Bh8³0b76\nzLµðŒ…M\$#;rÍjæÎRË\\ƒ¹²Ê¶H0KTXC¹ˆfŸÆL}¶€ET}EnÑjÚz™ÍS¹*¬¼“ü”ž”w‚BÕ¨€jmVHêŠ²¿—¿]ÔŽLÛ1ØHUì\\R°å]Ïxrl8JìTÚE‰Ü^RÝÚïE,î’|CMÊ ¯ÑÈgyà.nDád‹†OCN³*©œ¢/Xä2ŒÁèD4ƒ à9‡Ax^;êpÂ2\r²¨Ê9Ãxä3…ã(Ý®(Ü9#~¾1ð’6ŽÈÛ¯à^0‡ÔÀA·ÀãxÈÿ@›Þ)Š\"`Ó¸¶ª:ï»yž;^,MÓ·E)“!r­Ûì\r	€¶-ÑYË5QÙ\\a2”îSóq=yNnß9Ë87£OÌ}DŽáTnße_b\rã\nãä7J£8æïjœ4—`Vó¿,Ã‰ÜhF`kœîJ+4ªvžÏNm*à—Dˆ¸'rÎ^¶ÉÍ·'–TuloõÂIÜ8à–€P‰¢#¨Ø:°Â¨e]	dÂ¢Ä0S‰á9\ny‚)#±ºrCDý9\n²@‰]R«M\\—DLvÈÑÒ[‹íE•DåŸ3,CŒ©“ÓÏ“ëOådÇ¾s¶‡ÃÎt¥Üª2zœŠÚã.(EW‘²²äYz¶+©Ü®»¨ŒŸÐl?È0ü‚\0æÃn‚ì¸µ@âÐ\0Lu*0ª!•–[ªŒnt¸:JëÝ#Xk‘1¸µHãa\$pupÖº\$²!â°c\r”6†²¢ˆá±<²AÈT¥ ¤#AŽ‘8­“¼¨Xñä¢4	‰8óP”IfIŽ(W,‹ 4›8r)Ø7fïÑ+1È¹¸¥Çß°B‘ò6CBHâ\0Sû@(ô§„{ÃxfÁ±« ùP’—2g^ìà@Þ|¤(n €:¶0êÃüa™ý\0ØÃ:U`°ÿ)¶C8aJ ‚y‚VöÕCpu@  9‚——8rÒÅÜ\0†ÂF\$Ç(ëš‹ÎÙ°†GAÊgI-‘k/²Äé\"ÈLvÜª;Rs9Ä2³…4‘8„„þ*8'W’¦v¥`*ÀÜÏèfkSq²%`@Z£VS°1¶fÈ¸ h\r	¢4cðdlÈâ·&èVœâl¡¹AÐG\"‹áv†ÄS¨:PšIÊ¶fdõš²i¦¾_Ra£‹ˆ·¢íÔ’Á+40‡4\n}aÝ­7°Ê€ihaT¦‚Ehí%¥´ÖžÔZœøjíe­µÖ¿aÛdlÀ½´6ÔÛspªÍÔÄ7pÊÞ[Ùÿná„5ž÷|Ú¼Ùn\n¦˜9#š¬Þ¹}XYaÆ\n´ÙŽ)Õ7¨ê‹(xI\"\$áÓ1’ºÜÔú¢]ºw'q/…\0\0(1\0¥A¡Hö¢‰ëÛvåÞ\\7IÎQU*à(!¶`ÜCtx­ðùŸSî~OÛ{\rh:Ô|{üóœ;†[VhÄ™F0¸Pô•DŽùæ†‘q	\\ç/Ï\nŠ-ŽFî:BÂÒÉUSÈ°®–Âìp…rW§4íÄÊÌíëBkHr}#IJ>¦\nÀI\$¡äô‚\0È[Ùñø7[Zq€5ø`äÃm?¨7ÞÀ v¼çoÇû'Øöƒð‹ŒK7˜¸QcQ(åb-„Ål®“Ò«Œ…Áv4ÊÛ¥LñÍèQ®È P¼v£¡¨‹<ìTï”hsÍÚ>u\$NQj©†<äöyò,X«ˆsµ0@ÐCiñÀåSð{Ï»AÁRðE–ö[fžó+eˆ¬ÕÏsX‹bâ–u<LÙ)q%Â×mp`¥&B‹ðœ¨P*]«µÂ E	n½V@«¼”z\n5éîf\r%~„½2|æœY\"^¤:N[Î>CõŠ“–;£€±ª>=íëÎ½hEž”R²žœÍ1†_ˆºD5!>qTqüÖt°n%œ–Í1Ü±Ü£¥…«¶’˜i‹ò+{„’Ï(Y¦þ™VIÿÀ©(¸–ˆK‘Ë„ë)·;c\\¿50þ¦‰þ%NÝ”Øšx÷ú«ñµ\$ØæˆÉ	ýÇÀLƒ­(.¢æ+·[ž:Ç¸.õà1©91&Y	´ëÝ¬£”—Gû±ÖLÒ¸ñ(´äcö›ï»È´% Ò õm“êU“ó~pwKQ^^P¾Lcù“ï¢xj¾WðÒÿü>¡¤2‡u•·ƒá+òæL#Ëª©õ×\"#ÂäPã+¾Àã)RÆcÏ=“^Ç8ÐG¹Ì‹Ÿö‘ûÖ+n\rIžÅ,›§d¢UËë êvGÙðïï‡Å	ÔíÕGîa¢\$îx`ÂžêÇuzÇI1š´–mÙ‡~T»t^QŽ3)aè¿6ÅÐ{êÄáE É@øHðÃéâ£ÂaJ\"ËÚÓ¦2M¸\n€‚`¤jïH?©ŽÁ–@,D\nÁí*‹¯æÂŽNqŠ\"·¥¸žÀ@ã1ÄJI¯RVfnE¥¢WDD&m,6èD¬d‚Pc°0ç’;ˆî;h„ˆ–.n¹'|Ç®àÃ.þh:c_l­âw.À\"b±MÓªDø\nFX”G­	‰\\æ¤‚Að²¥0pDFdj§øÊàîxã¾Cð+o|+ã”2Œïd—cV~þIã&S°ËçD¸0‘&RcAé¢„…ú_ï»`® ÄoÀäØ-\\Š®èƒ§Îa¤%ñS§²uŒFfB‘N[%l'mÞ.El™ål'är8Ç 0%l6âšqr_Ã›…déƒº~bP]fˆøûÄJ9EÐ¯*Q¨rQnŽï2tgÔænm%…gDM,^(øé€U²;ZõqÖ<eó/œü!\r‘ÜDFrï„ùGJ8£·‚¦+gcCQPÚ•PvoU‘€Ï\n NAæ	äo£„Ù¯tº-ånZc/Ü¢n`‹f+qð'nTX€ˆÊààS\0~+1†•e<B„î¤ú+g\"Re\rrjº2pÿÏ\\Üê:’h…&mðnYrL5¯Øf¡pŽnB2;*)\"ÐÒ}”õ¤ÄSí†EÖE§¦¼-ô‡ŽÌ\"àRÝÄpä2Dâƒ¾æ¢ù²)èöÒ¿#tåÏÞä’í\"²è	+-ð,r\$T²elR¢t2¦öÒBêó0*°’	°Í,—i#3Q	!\"¡!`§3	%Òé1¯d:HÜ8Ò©3ªV®§r¸P Úìþ\$%Ñ6·e‚0P„%ðˆ¡c·’æIP’‰K¢éä–Aï¢¦-ŽWŒöÙp5D”K1Ã4±öÝ/¥:fÙOÝ“°DË5¯•*Sc+-‡;ètú£ŒúçIë Î3HÂrD°ÿ:ìØàäÖæjS5ŠÐgY+­Ó,EC‡¦óL2Q¨M*ñ!2¥lr-Š‡jíALþpé(åH„SgÐ÷/^vá2¨‡>Ã¾üòŒrÂgAœzMŒøŽ*øÄÿ:|úm‘1SÆûfð‹}ôc@…ÏezE¾Ñ yä#EÉ@tÃ»7™+Ó2×1rî;§O9*í;SeBÔ¯<§s	_J“à²SJÂ.ÿò2-‘ØýS7KSØ„\0ƒÔ×M´°9Îtròùs\"tsîTôªVÔçMNùNÔ¼çôMN3YOSêtýNTÓM³Q'½R1\" ±6tŒQ²V•C¢6ŽÇ\0001¶B•F¥ÑÊVÓê<#QUC\rR4QCÂPà\nCÒ¿Kï4é3“ÙW	ôjÕxûtò“]O”§;’ïXt=ôïQ6UXÔ£QÈþ \rËò«rñQ³`öËú\réÂ€êhu+U°›µ¶lÕÎ4õÃ\\uÊ€QÏƒšW)@È0\\Óú1ã	VRÆ7*³5µYÕWÔÄ«\0Ë`IÃXjí>µ£=–€6a”ñIô÷=S%bbVYõ¦ù'YJV3LD¥cf½c¶aÔÃYPkEm^ÕŸ`ÖY\rÖ]^¨Ñ>”Á#u¥ t†’pÞYâ^ÕÛgTúfö^W³€¸†\nƒêïÉb’ë=–œüj“cÕ‹dùdUj–Ÿj6ceVuQV³JCZÈ¿j¶ jö†‘vÔü…Ñ…§PU1Nµ73ºa0ikßO•Lv?lÖ·mIi&õÑ)\$Tã4TMo06×¾@¯ ÐÿstãÖÅÅâz]çYb§FNèÎSŠIPnCL=Mq¿DD¬7uÁq#hgPtR0 «Â³vE¤†ttò!r5ó–9°–BQÙqp Àè@ØlÂ\r Æ\rm Ÿ# ƒ”r‚àB°Í^nàêÊ€Ä¶Ê¸\n ¨ÀZ\0Adæôx°¾y#9\n+°Ñ.ÿfc©	âÔß½‡Üé)r5âf¾@	·âÀòØmöQ¥|ãŸAB\0“Ç›{vz9w 6„³E\nî*3Œûqª\\—®9Ç(¶ŠB'Õl¶.0w¿D\"¬Aå*F‡2ãæ*ÃìF@˜\ríL\r¦´=äAxy‡ÌŽJÆ‚°tmó}&’3G”þv«ÃyõÔ@€ÊŸÍÿŠVbâ‘KwevŒ9 ÷†<.…\$râþŒ‘Ô<1¿N&\nˆ¨?ƒÖ=£ß|ì¾\ràà¿FªñI!øÛDEñI‡K\$ÕDîÂXw‚»Ž=(w“#è…Œ÷ôŽÎ|Ý8\"E¨|;´\r0ø!-\rû“TCù%ò{(™\n¢à4¥Ì„wëLà¬ Æ ê\r´ŠH¥gâÔNä(“ÈÈWzÏN:#š¤\"z_Bß.úÚ&ZÃäX…‘2®‘ò;eúºNú‡”aŽ0„ôâeFC˜Í/ÒHþ	(Ýî1‹Çqw¬9ŒAqvÖ#dãù‡Ï†¦YnØ2L%;·•¤;yâ.g°	\0@š	 t\n`¦";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×l8(¼Ür0šàûûù”SÇ@ŒüùKªK:›\r†t/2u=w“îÝ\nŸ˜1óq¤@kìöèúDÒ/áÐÀé”éÕ\"Ëµï‹¸Ÿjè¼I\n>ç°O Â9-ÐxÒ48Úî%ƒ”6\r P‚©B8Ê7©ƒ¤&4­êmÚçŽ£pê§À.ÔXÀ¥ˆ(Aã{¶\nÉx@·ŒQ¼Bõ+(!&/sñ–0HÂˆ¸Ð9£0z\r è8aÐ^Žó(\\0ŒˆÜÉ(Î¦3€ðü Î0^(¡ð’6Ž\rÂb:xÂ(ŒÌJ4\rã#4Îm¦(Å\r\nO £è€Êa”ìHÂ8'ÌbŒ#Qj=£C’ð7/jð¨Œªœ’OŽ\\\"¸§	â¤ª,µŒ ,É¯|XµÂ¼öÃ:\"ÑR(ò:6BlÁ81óŒ·AJJ:Åâ{7Ö#X@ ŽR„ \"K#²ÂŽË`êç\nt½2#8ÃZ’6ð{_TŒ³ô<äM%0õK¢<Ž¹ê\nÙ)Œ/äióç]á*Áƒª¦:¯£Ëq·Í=hÍAíì§G‰|Hc\r0\rl[ HXônùÕ•usY¤òE_æµÅaœgP¸AµÈëRveš,¹Þ%)[oQ¥4Ä„ m=ÆŸ,°z‡¬kUšå¡âº4 —RºZ|‰@Vsá—p6DÖ²y´CxÌ3C“ZNaéð×®,Â Þ¹ÂãpòF#œf1³˜Ìì„Îac49qcÎ0¥‰e5'C(P9…)<E«H0ô¦)ÁH@580ê€ä6§Öä`)\$l“ˆCºócH½1Áp‹¥6ò‰òN*1£uäÉ/ƒX¶üÒ#ÜÐÆã Èî*„¼³-¨¡|™Í¥@Ði=µ£Û„fq3\r:¹ Ø^ f&&h2¼4FAezJpú\0 šU`9‡rJ¢ƒ(x¬2†GxûrZK‰y0&\$È™“BjM‰¹8ääJvOÍ='Äü”‚P…‚¢ŒÙ9&ˆ4˜PàGœJDì9?Ò:¨•q¿‡(£ä.	óÕJ\$œ*ž€PË©3¦²@P9‘µX ¢GH((®Ù\nv\0{ÙO0ªÜª€ †q“XcV/†\$™0ÒeI	—QAÀ’‡C2iL€o0¥°¹xJê—quÇ¼4†Ô8b‰,mÀÀ°ÌÂNØ `ä9«öŸ,‹+ÔzÀ€&@ˆ@â\"·#ÑØöË%ÂPXq'	\$<’+`Ò¢Œ‰…Q¤pÑÉ„°WZ-{É>(dÀC haŒ¹(Ùªf`Ù—oâÃ“bðKÂÞ\n<)…CdGÈ3š•aä÷0’Ø”53êYgŠF“Xr2ï€÷PòÑ‹dd+x‹ACå0n\$æ(ž3¸ãèoMÈ›Î#Ü&´4‘pŒ#‘ÜQR–J.AfÜÝQ¡É´‡¢w\n]Aç•– ùr,NÚ¹((\\ðœ¨P*W`!*YxG¸Õ˜@@¹³?#èqÖ†PSSjxD¡0\"ÕZ¯VC5[u`R‚@Aë-g	kH¦†ÖB%KÊ1\0¨ÊÅ¨k9ò…5œÔ ‘‰è8§‹ÀÒølK^Sæž£¡æºTÐ3Êí¬)WV)åží(¸#u&KÚYå(d¾†@ÓkÛM­fŠ5•´–@‘Y£DlÈd²›‡*Š`j¬!¬½ª0ˆÿ|Dh!Tƒ¥\næ¢\$pŽVY?šSÜLõ9yË‘ø%EeÐ±zì%|œãª=IV-)¤BåQ-)zÈ8:[HdT%:…¶ÓÚ—^ÓP¹'‚æ„–Â	i`eê[*axªâ/¾Á¼ë5\$VAŽÌõW«£^`Ÿ­Š«t3\\¦}‰‚%?~µ	€ÝÂÜpMŽÆëv9ÞâØ\nE*gÉ(\0§\0à²(B\r*bR­`ägå2ö	çmæ´‚^O–@S÷	X4t< Aa M‚^f&1¢š\$@ÎÓSC	Žzn´\r'¥5œÊºÎeªyf,äÐpóÙ„Î4(ž\$W–§eŠ˜ÇâÆ¥%ÓvV0ººœ6Lm°.!O9,ý,^h ÑQƒF_=R#°š_˜]-+4ÎFú/Fžc·G–ðkdæº’uœôî†ökPê7¸¯NšÏÆÇ`hM=°Þf‰úÓSkhÅ:ö¢âH €˜Y¸È‰I&¤d¾¢\$}•å%ä-EÌH	8SF(Ï9¡ˆ‰'ƒlFE=ÇìÓ÷9JSÚ‹iêMj‚A \"ùq£ËR£—Žr·…[%?¹ Ì S%BDBàTU*U›Bósq>|\"ÜŽ[~SWˆÎrkLrêè\"%Üå·­ÛHïË°Þ\$fõXô¹ÌçŽ¿# Û&‰*@AòÕO&{0îtÜ\n…Yd½gp¶€ød¾\"5Øå2£ìÝ‰TØF×XÿX\\x…©°	ÐÉ±Ä\rI!ÝAxkëã°bfÝ‹	ðëYÂdfæà[>Y¬mój'ì:›‡=ÙÝëyåÞFÝ>Žÿ »ñv³Æ©ÿ0®¼Ñ'míŸs¶ÜÐx[eË±WÐú¯aÐ¼ÌåÎ\0000Ú£“²‡÷¢kíU¤•÷*Õñ·L€““ÍïÂ*Xê­)«¢Þ°åØÇRË,fÖ¹]µûxÊ þN’=Õ>ûµ6F‹ìúO¢5x¤âN,XÉ‹’õ`8 ¡Ê³4ïÂ8o Ø‹ïŒ}ªàÿŒ<ª¶ÎøC²F0SãØ@ìô\n>ÿÉ*¼ÑoÔ‚OØl,VK+~.L\\Ä¥d¯oòÇ¬(ÂÌ07ÏÎèŽ\\åJäŒ2ü.~uPfÂîÚóïhéPWƒ}ŠšÊlõÌ¦0OpõÓp‘âL¨(p_	‡G’¸¦FZj°`\$,CÞBì¢hMtŠ¤.àžø/ZÖ0Îú0^õ/€ú0œö ^´\"¨rFP’V@²¡\\€%ZÅåe…ä\r%èýË‡b6EÑödBHCh#bð‚DŒ,Ã£Ý\r/¶Ä1éäïpü¬0”ïLBŸòîbWl¼äQ)®ŠAQ¯EL-¥©p„ãÌy®Ç½\r°—sðžÇ`Ò‹0_ly@´dC»àòËnG1XæÄ>q¥Íb;mÏ<öQ9Îwã¸¢æ×\rd^W²(1-^®bØ£¦kŠ\$K'N€g¬Y­\"6%^¸Í€^¢8™\rPzÏ\0,Gã6O¯¢Yã àÏMZÝ¯´ÙQöÕ”û/˜åÌ”îÐÿÐÿÇ~ªnÉ‚6¢^M`@dL\r€VJþWê5jVx	´H˜ `ª\n€Œ p7àÜ|ëlX­|QO¯\$kPR£’kM“MVÒr\"ÉrŽŸ¦²³Qð½FÄ.kxâ`)‹l‚Å\r ÍâRC‚ÊÒä äÃl/Žá#Ñ@=b˜[Ò %’Ð¹¢˜Yì†<B|iæh>¶™\$)^a…¦Š‚\"é^IbÿÉàƒš1)â±ê1&7Ñþ¦VÃcÊ&ÀÞk¦èÙ2¯3+8´cÏ “0íu ÉfÚó>ñu5lj j¢1¢B#q–GÈ1íÉ…REsJúV˜Ä¦	® ÊÅ*°ïbñ-'\0ô±˜S6ñÔÊîn¨€¬\"ž[û6\n¢3h4C.ÄÇ\0#@õ7ãœ\\„ÖŽB7£Ö\0Š5Ó¥3“ä´F[8o\$~¦@³¢Þ³ª÷5Ó€9#*”Ä:i(Úº#„¦1¥<@";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\G¾ORú¾èò‚¶	‹.©%\nKþ§B›Œ4Ã;\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦Ü\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ(ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!Î	#hàé\r·Àèã},KÀ7ŒŽ»²9¹˜¢&\r.òÖ€ªeŒ_7iŠ\\KY‰th%6“ñ\"RdV Vt¡«õ‡’GÅšFÜ·yÄçÚm‹@’6m°Ú¿é*¯–&3J‚\nãä7D:2â°rÄ—:âÐkìöÃ®ì–J_9–Uzš’\$ltLê™·Rr\\ÏR™A HB‰†ó—6l”›¨dMõy)oH|\"[Ãê6\0ì0ƒ¨Ëä9–¶5{‘¢Ñ®„º5À5TV}tÎS)fhÖEF„`[’–µTÙµÖ“äÊÃ¦Ê•ØH~—´Še+qÔ›\0©%ƒ:‡(„8h”¨#rcc®òºHÀÆ0Ðî7¥z‘S›xÄÄôâRúuM£Óœ©?ŽÇQ©ê^Lª:&kM\"R:õÅ	4 É²ñ£ŒÜæÙé5æ šž*ÄVïÁdCØé†€†TJ+3XçÄª?.°‘™>µ/•‹úZ(9¤:1¢ÒÛK-Êž\r@„ª ™›EfÉ—œ rGáµcÃ0f\r‹Á´ãZyË\r¯<‚\0ê¿C¨cgT9†g&`oè€9£Àè¢èaá…êØ—xn§x0RZÌÑ»Ni!/´à@Â˜RÏM•7 \\AãÄ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Vàb´”&¬±à«#l.	àT8¡¸5`Ì½\"òþD € ®åà‘àc`ø2/@¶–âÞ\\œàÈÀëYaŒ8µª²¢]{è…LèÈ’TnTDb<EÎÑšpšÑÙ6V’AIiÊ,¥jCSòmÔŒOhagx9ÉôÃºôb¡”<\0Ò·C\$™¡n­õÂ¸×*ç]+­vÇ•â¼×ª÷_4~/æ\0Øs`Œ„0©¦ÃË;¬MŠ†\"CYÈc§1xÅ°ÜÂ¦ªZÃDKŸ¤TTÈk'le=’æ¡Í\nV\"\n\$öXã\ršŠ1„hßÒ’’…¸ \n (ÓùSÒQoHÔpR\$éJ)Æù3‡Qsk…DGÎ'“r!Äž6MÃtk,Xæã tŽ£Ð:cÄrC{•s¤;†ZfHqûˆÑ^ñ-ìò=‚gô§–´öb!ºgÉhB‰\nŠSµöt†ÁSzÏÊA½MÒa’Ú‡x¦YØ…§Êí¶HòÒŒç,ßG\$ªq?4æâÄA]’é`ž’.N ¥Šœ§*Æu-<'Yn‡5>Á\0fA¼6ËÉ}Mçéà_\0€1Æ–0uïþ:‡¡ÿÉ'*SHSk\$‚b³ÓØ¼«A<)…Go`}Æ~õŽèÎëy°AT †~µ\\çQÝ†§ÈÂÍ©ÖWÙ-b!LÐ’™v šÛ‰7\$¨‘ºÑ.p.Ëã\rÑyƒ†õÚØb\r!œ1 ™zN‰È:l#@¡/v`Ö2;9[Õ{Âñ8ëÉ´ÖNã*k(ÕÅ92ˆVÛ©+ Ðy:á ®\r0˜ ‡¤ŸB\"8!–fq „L=†þ4ØÐ…\$s;Ù‰BK\nE!gìÑ©i#QÕÃEêI\"÷œBÞ…µE…;isP†+K¹Íè=*•kgÉë«…Xµ]\rDÕ\$a²Ç8ÉJ,\rSŠà:·¢þô<Âµ«ýúÄ¨h!¤J‚§)«–-o!ÏJ¸rÿuÃùñ\0˜@·àÉ6¹eÛ7fjö~o…Ñú?ŽŽ6È›[ô	oŒÔ@¢55ÍÊXX¾¬Õº»WÒa>µ `¢Îç'RÈI©	¡u¾ø8ÐE³ØÙE0~ÍóífZ¤æÕ,™ðä5tˆt4‡§7_˜4{saL2+eµ¾Ð~6`…>ÒèVm®‰‚\n€XOƒº¼CK˜ä¶YËÊõ»>(ÆèZ7BbÑÍn„D4¦b²ê§»C×EÌ¤õ[`›ßúPD‹s74)®yGÝí2Ú}pÉ	N^’v{f(n­“4gÊ±Nví>Ñ{Ö¤uïYBU{‡Õç7s=÷ZÆDÑm…— ×èC»'Ž³FB¤hT)´ñAß!öì1d‰o½gzœQXA\nP „0/7@:¹nÙ¾v¬Xr;Ö_Q·’¦IÒ=›O«È6 ^^›”é…4]6sqôÌ¨¸úßI’ÛvÚ4Ké€{;=5:³9tJsÚæ•N´ó	?Ñf_M•àøãˆŠÚþzˆxNæý„2âüïähÈ–îü%2@OÈÿ‡þ\$ïþ­lÀ#ïÛ\0‡þ&*û‡Þã*˜ˆH*e°mn2ÂNÿbšÿ®âxlF üPã/Ñ\0ÔCOíÐD}IVGÐ Tð\$*m¡}&»hm0in1‰Fü«j5¦8]ç*½`î#/ðÍFL†dÔÂY\"FA°¸ôÃbó0V“\$¸’¢\n›C@fyj=	ZU‚U…-‚Ül^ç%ZEÂ…ÍHôð?p„*PÁcä5dÒÛCàœ\rÔHK†TŽ†Æü×‰Ð©ï^Ô&Ãër•cƒBû\"44n6Õ‰°E‰ºžQsãLóÄì´QF-–40NGÍ þùƒ)Nj1ÑljA¥)ÇQh†l×\"Öähê!JÕ‚bÍ‰í.žDÍØ‚§fœÐýç£ŽBê)³dnÑ/R‡˜ç­Ò¤†n i/ fÌBY\$\nc\$y„}	´#Ä6NO^ãÂ¨@ˆ½`àK\$LJ	ÛÍR0â5!æ F‡L­%\$à©ÂS#~fïñ‡ìHBë§¨ÔÄ\r1ÔÃ¯Ü€QŒLÄÐëŽ©%\$‰\$MäEB=ƒF“\0P·­0\$«j1ã#ˆ†ØÑ4´ƒÑvD‘³|ÄØr˜§Í^Ng”â„á¢”-±*’[N6ÛÊ¤#í‹*R”U«‘Éh€çié,/É²¸…òàÛÂ”ä+,’¡.ÈÜRó%Ñ‹.¦@ÌBJGDb5q×epüócó©ô˜,ÐŽÿ\$‡-b·-²ÌþädÙ…CÄM3Ýs\$óä^Gu3¯3R^ªðq3Ó434sÒ3L4êˆˆÓU2ñ€ZÐÛ.RÙ&ê=.åæNî£*Ìc#-q°×2c8ÂËïÖb	9nîó]0rÜÿŽÌ¬îÌÉ*²öV2c'&šÑ„'\$|à‹>ç‘8)¢®.¢V*¬*B-%ˆ­H·,?\$+=1-sÚñÇfd“ ëN¼z¤TôË>Be„\"\nì6æ€7¯¶)Ìîé.®”	(KBKÂì„â¿“¿:¥	:æ~ÌŽÎí#ÑéÍímtÓÇ|BQNÑd'®’gî™;s9´vécw9Ò:ÆtyHrå<±Ý.²s/‡ôˆŽ•E#oHŸ)òc­³…3s‰;´¸+´½02Ä†›;®²€T£4ºÛ‚LÛò&ItÈuå\0ÑAtUïÞ†Åz`\$)­VƒbèO\róåZR„§Õ~mH!Ä\"ƒetÝ=7rñ6r›K4LSsR¯ARóAôÁ69RsORÓSÙN2ËHñd‡B…GZit×ÑAS³&fÔáJÁVbVµzõR'WSPfRDn¢­	=óÙQââ®JèðmÏ(\rhKÊåK\r³RÍZØ¨Õ¯Pµ³IrÇ<Òê×‚ë[äTËç¬·”ÍtÃ[µ^ëTÚ2­•×[	/Xh^«QZµÀ³ËvéÆí[Ré;µ”óÉ\\´Ó^Uní„\$>_”ä?\$nîòHCìÔ–\rKRêOQ4}^5]d4ïb½atÐàv5ö 3¶B+Ö(M¯dïìP/Šôe-OïZ·åjP;SuågÄÚõÃYhT¿eÒûhÅeI»UI–YUÁJAä¦i°RO97S).Ý(ÅwFp¶AÐáW93ñ™QïQP32Ñ#k¥ªþËT)µm¦eQpk´ó®¯n–ÕpEo`WéínTÍÛÆÜnBV¥—Î4(õ#ñmpŽX·Z¥}US‡T‚•5sp=Tpp÷EôG6Vís÷Ot3}ëŠ@†àØnìÝºm~jIQ”Y£Õ^Ð ‚t×µºÌ’b ê½\0Ä¦Lv\n ¨ÀZ\0@_	„»dC°6þr€Ý4–7Â<…+q¶ûw½3É|E2Õ‡%s;\0ï±	WÂ„gw}÷Í^I BdÀHü†DˆÓãñì[\0šb€ÒÀòA¡dYãt%1H>¤J@ôDS“\nõ–|£VYI?}¯Fî<&×„7‰eõ(ž£'®<š¤Šo¢’nuì†pV@˜ÇÆ*\r¥è9¸<˜i†Æ²}Ú“êJ-˜Ä\ræéØ	@s„1\$6i=&1¥¸•]å2ÜÕ£6?®DBx©‚šãÅkX³‰'IÉIH®:dñÍqí=óMB@?v\$ã%j—‰Ù@d&g´’)…8gF²•g§Œ… X¡@¨Œ+N\$=L2ÁMÆ€Àá¢Á2hw¾ã#]E\r%â¢ó²+	¶N€¬ Æ ê\r­7ŽJÞ7Ø‰‚§NüÐÙ•÷ L­\\>®mb¸,M\r&Bç>ÑVB®fÔx¬Ý­R?Òhqƒ§¨,T“ôÛy‰e`så\r	á–‹]/ËØc²*+Sxƒ]?SïNíê³À";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð›­Àƒ}FŽÊÍ¼S06ÂÁ½†¡Œ÷\\ÝÅv¯ëàÄN5°‡SÁ«Ü“ ¹»g	“¤pä7±®úvù¾#ô]“áÒ]“+°æ0Ž¡ÒŽ9©jjP ˜eî„Adš²c@êœãJ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹Âñ”È@3Åè&Ã!\0Úï2Œì0ß%Å¤‹öƒb‰ÀC@\$)©¢Ô¶H…|™';• ˆÒlœ¯±†üI¢jV¿ªzT·\"ŒP¢iÄö2ÃdPC·&! bkëèVŽ\0P2Ê\rENiDþKÅÜÛ2°(c@ä2ŒÁèD4ƒ à9‡Ax^;ÖpÂ2\r®ØÊ9Ãxä3…ã(Ý^¥|90\0^)ð’6Ž`Ê6×Ã xŒ!ô'#¨èÞ2#ƒx@:Žc(@)Š\"`Óa%ÂÅžõ²¬»3-Ðh Æ€”±Päa—HlpÂ\nxëEe`Üô¹M‚ß&°î+Œ#ÜíŒè KnCÍ„aL@ýŽÔž¬D¹tš&	“\rIªIÄYA‹`‰RBcú;#`ê2WS!ÀHJpT§cvPÃ'ªìth©€ºc[‚_±KÑJþÞeÙS(˜erÁEzP<:´l€‘:l¡tøÑÑA6’>ˆC,Ó P\$ƒµ&¼­òÚ‹+ålš(Ž¦RþŽŽñ@‚-Ðfð½½ÚË46)²½È&CÅž\rÃ41öXJ¤‚¦\"rŒ?;(è© æ™Yì*˜[ÝXÑÖãeÕêÿ_	ßEÒ\\T]µóR‚Ò¯\r”NÅÔñœÄ}¶;×”6ób¶sÜû]=Ü“7\" „v]§,ÅfC,ìÖq\rã0ÍA\rÃ*–4;Å:Ð qù†Z¢c\nH\n)\$)ì|¾wŸ‹pqè.(Ññ=N@¬?Ó4ÄÁó_ô7PÂK’\"iÄàA2ÐPÝRÏô4ÀØ‘Š•%),’\$P ÌÑúB¬:’å‘VÑß?¡á\0wæ•ƒXs™]-õˆ]‚\n´VÁÊ†4\0±\"·\n‚*5J²˜\"Á‘\0èÄšÕ%Á@4”ÐQÓ;E4¡„4}øt…ÈeÏ	PfÞ<3+9§SèžÄw:§õ¶’Ø¶¨bò¦U\n©V*å`Õ”R~*á]+Å|°nX‹0ãzˆ0¡&QÀ6Æ•¬Ë	c{MTHºvŒA.=íœùBFâÓ¡¡ÎQ’ÓiÜ>‡Å#'ä~Ëa €¤º:t-ÏèP	@š4ó4G„¹þ'h™-â‘.ñqœ»8X2ƒIÚYÁœ2­Àà®ƒ¤J\r1(7óúÍC`oóÔ¥Àúý|,~m<þÁEµ×œ¼#‘üè˜\\D?CAÙ5‹±Fe“kÉ.£“ýGDìí-E\0¡•½…IÄ?çåŽ˜oH<\$¸\$‘ òúOXi[“ôþ®Ü·ìûAA”ÔL3úùÓŠ*ÖM“E|Ah\ná›±(8èK‚\"íPFdŸRˆKxP	áL*@c¿ÉÌŽ	ñN6EúÉI™£¤èžŠ5ÉØtôEÛ‘vLÁDmr5”P’B‘NÌý\$™0HÖY~qIé*%‡­7—`Œ&áÏÈç­çªŸJ¬J¢{\0ëycö4¶°tŒ†LY\$¢4>‹¤énAD;éžÍµSøæÃ	Ó9(éC»8Ý2#d!2±ÀØI‰:‡	F¢S	%š*ËÜ–2¾GÈ xºE¬†Jö‰ŽíÃwa2…ZéT/œ‰oÞà¿YtG®½øtn•%­ëæ•±3ifí‹ûÆÀQ‰Ÿi÷`´š¤Eí¤lÖmé¡4\$R(ÄÚ›•`¬5Š°ûAX¿ž»ÞGF)7Eé v×d\\RGwØ½4šëÁ4¯d5¥ŠÜ\"ˆIÅ×g/ÔëºÀÚPàGœd¡ÈhA•ºPAêzœàÒC¹‹_æÎÃ09¤{ˆð‰™§}ö|.óR8èîéPÉŠZ_n¸Ä4×élC=³DÁà<9]\n¹£xk‘o“2ÉpEtY¨\$YÜH\"ô®Ù’`\n\nO¦vL6‹!&`u…íV7¸Ñå¥	¹8\0 ‚ Aa\"e™†Y›ŸÄL:‡	î–d—Eã*¢SýK»Z®Á€^tJ2I&Ñ¥2,IÝŠÔWô@ÒÞLÉ©7AÙ\"	6™¿äY xÅd¶\$Sl@åâIt Û+*ìÂg™ñ‚\$]Ã“2T_›*Û+ÄÝ•jOøw\"Ž¾Ë¡jÎÀòCVh4P‘?þ-x¯Ó‰oÛÚÁgYI&¦Q½#¦,Þ™Šg*wo–¦2<™²G¯©Pœ\n²ìSíÖÄDˆ›Œæ­µ³+‚%7H¾Uœ‘[’î{¬­O’c½­p…>	Ý’‹z:Ô@Ï³žÈ¸Â7À9ý;ä»3öq#Ø;ŸCý¶ý:(ì ¸qƒ€«OÀEù)9¥ Ê¶šßá/ä:ñÕ)K|\"ù()\0üFÆ²¼£kBÄ¶yaDA+üªKM.ÍÁ¯?­›&Qþˆ¶BN3‰88ýÔH÷skÍ¶‚ÍþÇ61´hÏ7<4±¯IÆ0!Eý«¬éD‹Ü±…›¾}…\rw£€'Ô&ÇÆº°>×X\"y:üï«³ÉÿhŽýÇSú]i.ù%mdÉÎøuÓ°7öÇßÞÝ\"ÝC~£Ê÷NÐùn°%Â-\0‹d†höÇ®0ÏèÐ0àìÜNð±ƒ<=ï~Gâä9Ã~¸ÃúCò™N:.äà_ªn¤¬ÍÊ›vÍof-\r‘†±ëDP¶P¶:bd›ÐP¬ÃŠ*«CðÐ\rì£e&LtÏüg@sc¤Ñ‹Ž\"ÌÆ!ð4öæp²F0·\0ëù,Ä`‰Æï'`B­R_ÐÐ`n¯\0ƒ’Ôâý‡9\n/½°Xr/ØýøÔ-˜0,Ý.zbePúÔNÊðJJFÎ7 –Ñc¢_\$”n”\"È†Dh‡†-üÏ˜AM8VÐðýÐ¤\$òÓ°þÕ1[‘FØÆ‘f–Ï¼²N\$¬çÑ|ß¬\"õdøñFð‚ö9ÃVJŠè¹o•«ý¬[Ã ‚®/´éÂ‡¤|¹h‹9Ë–Õ®ŽÑº-QHüMB‡^úñÖµ®¥ç²P+Y…½ñÓ\0^€¦À Q²ÍÑö½\$—ª^—ÒÆ_’¸\$—Ð‡’”å4\$„€SÄqÇ#-\0Õk8Nþ`­TÜE6>ðÚÑ§\$\$ØÕ„/P¸jæŽ,aæ»¥è%PwãX0Ì†€Òp`h0ŒãªÁë¿CØçÈŒ:àÂ´Â.¦-¢çw(ÂžÉ– Ž\0ÿ±pCàœ>J €†-\0ÙBŒjHäÅ¤€õ––\"ü®b'±ö\$Œu%¤ø/O84¤DNâ\n ¨ÀZ´ëï\$³©pzµ¢è*%2\$Ç0MLP’0§\0JÊF\$ÇÀ5ñ™büJŠÍÒÑ*Ï¡,±Šõ£6(£j,àäJÄškÖ¾Ö¢¦ÊµeÞPÓL3d–Q§\noköøm8CúÒB÷	Èíä4í\"U&ðí®Ø¶Ð0ö°º²”p@àØkîÇÑžäpÌî“—Š'à@7’ìÒÀ ðÂÌ¤Î†šióZÔ«XØä:núODøþïs#xœCÎ%ðN¯MÄ¯y1q\$È3ô'\nøº¯xÎmIŠÈñØ`‰jÝ\$šÔŒlÁriJW;£xò¢.ôè\0Ï\$N„ˆM4³Íá^0 ˜Æ‰ŸÐ¼å\$ªDïëS1SÖ4iT¼ÇEb‚DÃ±9ò˜‘›ššêé„´Åƒ:S%7\"«Òg­Â#F* ";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾¹6ûòÙÍÀ©c(¸Ê2ªòf“qžÐˆP:S*@S¡^­t*…êýÎ”TyUëx»àè_¦\\‹¤Û™Tœ¥‰*Œ¸©Óªë¡„ÒŽÆ'ŠaÊ[–Nb¨Æ*¹ÎVÈÉd²>1[œå‰vr“ËqÌÃÂ¬!J—ç1.[\$¹hŒDcðMœ¤Al²¤‹‚N-9@€§)6_¥éDï’ë£âs–eÛ‚‡%ÊyPœ¤ÌŸÃèI´ä1ÎP)kÄ ¥Ñ&²1zJ·g1@œól“8ƒ\"9£0z\r è8aÐ^ŽôH\\0Œƒk¸2ŽApÞ9áxÊ7RÃÃV7cHßLJ8|\$£ƒ>6Òã xŒ!òŒÑÕ\rhÞ240æÊŠbˆ˜4µm©Ò@'1TÄìC–“ñÎRN	&sÄ#lWÄ¡rtä4Œ_Zv­®º©EÊ]—V,Ð\nãä7;ƒ8æ‡Ö©ÐE%‘É.²DQ\$LY•IE<¤9Tr‘EAÊQ×ñ“èÂ:ƒ @;#`ê2UýƒaÈ%í‹Œ“vÑ D%¤8s–’ZN]œÄ\"†^‘§9zW%¤s\0]aoŸœ<¤a#Fiâ\\VÖM–]<D„sà…B Ø€ØÒ6Lø@9ŒcÜì×G)\"o#üIœ¥ãÖå7Ó•jZ×3rÍVîÚTKæÇ!Íºl¸^Ý4Ùå1tÓ)ÌNzLÀ^:<YÊC¬ûÅÆ]IÓ5ÀaŠN÷ºç6„TXˆäÆ±áÔÊã0Ì6Qí©Í~\$£Ö*\rìÀÛ­!\0ëN£ÆÑc6 \rƒxÎîacH9w#Î0»¢Ö”pÜ:µa@æõÌ,ND¦)ÁNRäI«_ÄjIqä~š®§)JÁ‡eiDQ>c¡’\rÁ¬Ñ†e&î”éÝF¨ðäòƒŸS¡‘HòžÓê(àˆE>j—j«U¦Ô)¼<GàC¢Â›í}éÕ7?‚îCs5aÈÌÃæÔš´¡à8”øtOA¡>'å\0 ”\"†Q\n)F=e ¤”¢–S\rM©Õ>ÕsTj•Sª˜D«Š8 V!¡Y«XÔCY•W†eH;pÜªa\$&Sð¤_ˆQÒ(EØèB¬„ŠóÞ]‰`æ.Èÿ [ËˆœX\"PW§\$èN\0P	@HÔ‘D|†>0Dr\"L`CSñÜ1‡EÛŒÑœ3Æ€2«@à¤Ã¡£5æX7±&*ñC¼µ{¦D8ñZš`èÂâ`LŒ	5&ääB!QÌ+…ªÅaEXóv'˜  Uæ0\$‘0òéC iV†]‰+pÜ­\rl»OÅ‹Ã @ƒo\r°.ÇxxkT¸ o[šC\\hÃƒÎ¦Ô˜°1HpäÀP	áL*IÔÎbŠ³åH·ô<^„\0…›ó…W‚Ò!Y‹3kÍ€RÃdÌ(4ïF:`@ƒHg\nä&OyfÄÃJzÁRN5¥hU,¸zLJ|O¦®¤¢‘-K;h9…Xâäðœ¨P*Z»WÂ E	²–Z%æ¸µKÅ Gˆ%‹\\ÇH•íÀS1•êáÓ:¥ÐFó\0`ˆÀ¸DT]Ø‘c §g‰±=á*\"ûphQ#“ÂxìÊj1ŒiÏÚÖä›ÕsÜsŠ½œ¨åâa…As„e/¦Ì	ÁX‚e0¼˜öÈy4\$òUé²Èt<-îïG\"Ý÷’Ú²9jÙå\\L4‡¦1*•+Øc”ÏÊÙjwìùä\"tO:ñ*æÛéŒ‡î ºË¼­èeç•l­»´“ÙKeN\r­o2E€‰hºM­A@!Û•\\ÂÝˆ¡@Lj¨”f‹`S[!\"–O¨r‚Ÿ¿@ZØº Âht‰1|9„qƒ/m‘È]gÝ«pµ¶½ž³¨J²çÄW9€ªÈC	\0‚z)\0Òh2|—“´ÓËpäjâA-â”ó`w ìDÊð\0¼f+	–²à¯GøSØB\raEx•…ïPfá%ÒH±¢LF É\$©[çB¯6XC9qËyv?Æ‹DNm/¬»è]&•ÚŽbSä;®ôJù!(ž”Û¨´çp²	Ü¸À’«K	itPÅ¬R¾ ÓâÚåŸ!a5ÚAiPL¢ál9DœÂµ•±\nÑVRÌÌ˜W–¶„zÂâ?2ð^‹á_¢ÙÓÁe,\0çÁ¶pYa6-~éÝeßF¼…rÞ›šô¤íÙ¶þßhDD7—(]fKõ	a&#˜È»ØRQ\0/dù\n¼õ´#jùD¼xròIÈ+Ÿã«€œ\r€Œg/‚U¢>F½¥%y¯bèSJrÑÂÈ¨°-òÊZmØûiZ^èÜtµê„9oNè|ôßí»:k|êü¨õ¡2E€ƒøç· ÇGaùÍZXMžsÞ}é›œñáŠ­¿Åûl=Û\ruŽ\näûá‹Ò¸){Q\$#7Vþ>ÇôF!n¤’ÝBà„ø‚tßùªú…åLTxš±âÄ@—#ã—ÆÈäÅÀªæIß‘‘)€¤<Ô³>•›Ô'½*¥VÁž)ÊòÒÐÂ'\nöê|µl-¤ß·íýøýÏƒ|U¶…;úäùÉ©Ùë)Šgxï_`”wî\r÷	Iwå¿€ïýñuÚcf-…¹g8t¨+Û¸®°¢!¥	Ú\rÏÕîœTVã«\\ìÏ´[Â ÿÌxëï˜ðúì¦p1ŽZqæ<0ì\"…Œvü¯\0ðèLEK\\<¡~õá6Ï2æîˆî¦p^Ï¼ðJô0ZÎÍÏÄï0%îÄPZô/ô½0BpN\\s`ZÐsxäBÜ…O¬<l8ÃÌAe®Ä”KPvÄlJÃð¡îõ	,LÖ3	Ð²>-ŒF\$füŒÿlˆð™°£\rî	r\rÏ\0poÁ³-të(ÌC®µ‹\\Õ!v³\r˜ªbžGBÐ¡b&ÁB(ÀÈ,þÙd–Îƒ®ßdÏ\\AzÏLø• è@Øj\r Æ\r`@dôb†,5‡lV`ÒÇrWƒjÊ~\r êžÀÄŽHP\n ¨ÀZ\0@Rè\"#º6¬èÍË:ç0P#B8«HXcÌË…À	±U‘\naÐ!(9Bâ-ª8ÍÀ9+Š>¼9ZÅìbpã¥å®áJåKF!j½d–™Ââ\0˜\rêj\r¥&2£R6-1€;Ãüäý¡<H\rÛ‚ÊàéêaÐ¡X±Ž%„ÁIoÂéî¨²’&@¨j¬ 2C(¦àÊ  Þ	\\QËî6²*ðï¦[8IÄÆLÀÆþ-fáÎ oît¯‚ÈÀ.g'®xÈ#!dbCm\0¬ Æ ê\r¢0‚¤,ãÅ ÁaÌrËe¦&\$¾Ûa!cË\"G%Ä­ŽÁ´ÒÇ\"+%F—Ê7ÎÒgò†ó„äñbäd@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0,'}Ã¼b1Qä\\y\0çV¡E<Á¤Üg–¢SÅ )ÐªOLP\0¨ýÎ”«:}Uï»áÔr¢òå´yZë¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ðÊ9Ãxä3…ã(ÝN\r€Ü9#}>)ð’6Ž\r ÛOà^0‡Ð{QW¶CxÈÔµc›4)Š\"`ÒØ7GI\\@„<Ù(Q!^s”…ÔHËkØ_•Ç1(\\¤…ÐSÒm¯lÛvZóq:,I<t”Ù6WB¸Â9\rÎðÎ9¡õØÄ<¶@æÉvlK­É‰vtåÌC•G)JØÑ3” Â:ƒ @;#`ê2Ù¶=’–åìT\\Y¤Ùr’B–HŠÜreÙÌBññÎ^Þ1IJD}šLª1Tb'1pMà	â|ƒB ËP„I*[ÊE2[‡ à#ccRÛ´\0æ1Œ#s·`œ¤‰{š<§1IÆËqÊÞ7×´\\ÜÒŒ§½\\²}Î¾Zv®ì]ÚOžû&ð¶¶û7œÄñmÃ)ebvž¥¤a_?¼ÑÊC—Iosñ\\ô¾<Ý4ßŠ)\\_ZÚ–µdd8ŒŽL“(^lÐÞ3Ãe,ÝO“ŸA¨ìèÛ´!\0ëQŽ£ÆÓŽc60\rƒxÎïacR9y£Î0»ÁÊ×t¨Ü:ß·ÿˆŒÅDBib˜¤#Wƒ]<¿>DYÒ!ÄiÑO‚ñ“ø9D°®B\" Ÿ¡>ñ\\øº2!PË†àÖj2šyÊï‚\0‚¥°r{ÁS*@È¥Á€PJC€Dƒ\"¦5ëÙY+CtÞ¢¥\rÀ\n%Œ#‘‰õÿÀ(¥2!40‡3`ŒôMaÝM+¶¦Jƒ€º¨Ð Ô*‡Q*-F¨õ\"¤ßR—S*mN©ö¦¨•\"¦ê 9ª¥X«•„5V¥ +€Ð®•ä}/éó1 à¥ÞXnVÞªhx/Ñ  Q\n±Ê%`yð2\$` T‚PZ\r1…ÈD³Av’VÐ¯Â<Z?0 ‚@Â ¤!`ˆ)0D™†©¤Pc‹Ú@™óBhÍ(eWaÁMCPmØocLuì‡y”ûÈÐ•~DÔsa\":l½%g˜[\"1#‰q0&OÍ\ra\\-Y;ÿ(“pN~PK;ü>k¨rˆ¡@„'IÀ€<»°ÈUÙœcJø7+³e4qcñ8`äÃl„*(%<ÙWÆ¤Ùš€àøƒ)º\n<)…@@ãÅ#\r(ù¥	²…7Ý0æ…OÉü­ó&\"´ƒ‰ó8Ì™•mìÖ=•&ï\0b\r!œ,\0™EfC\r*#@ ï(kæU“6BÑZ/FUðr3*`–ŠA,9ð†\"4Z”±@(J?	á8P T *½‚\0ˆB`E°I-–#ñÊ#Ä'±£œ™,Ö®ÖY¸]‚Ã!<u±Ø;DèŠ³Ø.]¥\"âœ]žB.ü&ÕBuILÈ¸ô§OÉã\"È»5“m“€åtn•6·äà™¨ç	¤T¶‚~Rc¨¸E2r.\"Ä\0æ¥¸¤q\"¬!‚j>#±å|±“ÒÒPKulœmhŒ…]^2³`Ñ0b%?jï^]MÅ\\AL4‡¦A/ÕcìdàÒL)”xmÑå“ÆÙ`'^ìD\\K5ê^­¼,®Íeå,U-åÀ¸qVâÐQQx’‡\"Øox¯âóÙ\\G0º]w ‘2àÍŸ•º¸W*èy…8¸€c•/º'\"ØFJ\"ó&aÌÓÊ#ižax‹=þÊ‚ñ¡YKœ.šäGT]‹l³.O=¨€t\" `B Aa Q,8iÝâƒš4,ÖLÀäl\"ÙKâ”t\n‘E\0ÏxŸ.hóžWÐx _&<–‰ñncÇ6‹Ñ¢ˆ'„¸„ú}?bôXŽ‘>/åsm­¼]ŠKæôñC(Uv2±*G.¹\"1«´€õŽC;F\0¥„¥XÕëá	â>HEž\$'X(z9Å°“’’X@‰Ä@†EõŸKiw*¤|(äÝbq/\n«{öŸØ{U’­'*‘ åÜ£˜VŠ\"Z Ñ¡YëGéRcuD	…ÅbIˆB–.»\"æÁ¹±\n*Hƒ>\"§w®á]w¹µÐôs	±htlØç]úìY.“ÌW}\0%›pò«wŠm«¦I°÷®AsÐp°¨è˜Émô„¡ÐÄ€²‰g	T#–h \r\0–€‰EÃ‚¶ç…•ˆÞ(ÀÑGd½›µvk'ezé-B½âÎ«&û¶/Dˆ›´Ý	rÕšÀºÒð–õ§›Óu·B¼úÞN8{WKn±·šgI”-˜«æÑÀÜTßåOäÅ.7øïpüÇIôžo¦7Î……Ü29PG§ÍsÐ¯)Ùšœ2þS«5v°·†Ý“úß\\k˜µõãd_“å}GÍùÐÈä\\rOÐåG+Š„£öd‚ì¸[ÊNd‹Ê&­÷½°H„UG2[?zè¡Ëød”¤@uS†#Á(ê¤@Â¤ þé\"üb¤þ2È¦®¯äÇÌRÈ„1G?NäG¯Z[¥¾\\\"øô#LO¯L7¯Q8/¯¬KeÄøl\"ÍLØÏ–op`feo,>pjÍ¯ªõ°vÍÐr:¬×ÅšËœZÇ\n¢Á^hOà Á§B|Ánä-ïöìÑe¶*!!AúŸÐÁ¯˜d«¬ór‡ìÌÉÏ.sæLEpÜ>eØ'Â¥ZdL\$OÚï¯ølÍ¡PßCõr¹ñœpÕA/lÎë¡¯JçoNÉñ-Æ÷Ñ!Ð\\ôL’Éd¿£QHÉñNÊl«…Ëq\\É°ƒ¬¨É¤fF¤nG0c^CãàÎ¡ç\$EuCiÆ	š\r|¼,tADµÍ.Øà@\n\n.z`æ`P4àR¥é*AàŽHYAF¢.z%ÁbØ¨x@B.±Îà¥òØîpäá?a1€Õé|€ä\r€V¤ Ò`Ö	P&8cÃbyEt\r Ìy¥†7@Œ« Úª(C4| ª\n€Œ p<„Š;ãt·<‰-PØi6~8·ÇjÑ¤„õâ¬	²+\"åšá8\"ãc˜0±Šþ.80„vË‡`È°Ô·­à)iê°¨:ÅØ-œ\rêž\r¥43C\\6Ò²Reì)a»\"æp¡<kÎXãÎ,®aÐ¡´²Þ%ŒRçÅaÑ°.Ü&(E•'O‚fÈÐ.3*¢ª>\ràà˜e*Ããu.ï·ÐZ*«€Æ`fBZÅî®ñ2ð0ÿ®ô²ï3ÒÚßÁ,\"ÍA@¬ Æ ê\r²¤\0g:ÎÈr,v[­BN®‹*Râäö,£Í.KJ?#¡l Á¸‹.kX<Òõ/‘)f\r¯àÁê‹\$lG\0	\0t	 š@¦\n`";break;}$ji=array();foreach(explode("\n",lzw_decompress($f))as$X)$ji[]=(strpos($X,"\t")?explode("\t",$X):$X);return$ji;}if(!$ji){$ji=get_translations($ca);$_SESSION["translations"]=$ji;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Xf=array_search("SQL",$b->operators);if($Xf!==false)unset($b->operators[$Xf]);}function
dsn($kc,$V,$F){try{parent::__construct($kc,$V,$F);}catch(Exception$Bc){auth_error(h($Bc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($G,$ti=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$fc=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$L,$Z,$nd,$uf=array(),$z=1,$E=0,$fg=false){global$b,$x;$Ud=(count($nd)<count($L));$G=$b->selectQueryBuild($L,$Z,$nd,$uf,$z,$E);if(!$G)$G="SELECT".limit(($_GET["page"]!="last"&&$z!=""&&$nd&&$Ud&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$L)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($nd&&$Ud?"\nGROUP BY ".implode(", ",$nd):"").($uf?"\nORDER BY ".implode(", ",$uf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$th=microtime(true);$I=$this->_conn->query($G);if($fg)echo$b->selectQuery($G,$th,!$I);return$I;}function
delete($R,$pg,$z=0){$G="FROM ".table($R);return
queries("DELETE".($z?limit1($R,$G,$pg):" $G$pg"));}function
update($R,$O,$pg,$z=0,$M="\n"){$Ki=array();foreach($O
as$y=>$X)$Ki[]="$y = $X";$G=table($R)." SET$M".implode(",$M",$Ki);return
queries("UPDATE".($z?limit1($R,$G,$pg,$M):" $G$pg"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$K,$dg){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}function
warnings(){return'';}}$fc["sqlite"]="SQLite 3";$fc["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ag=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Vc){$this->_link=new
SQLite3($Vc);$Ni=$this->_link->version();$this->server_info=$Ni["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Vc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Vc);}function
query($G,$ti=false){$Ne=($ti?"unbufferedQuery":"query");$H=@$this->_link->$Ne($G,SQLITE_BOTH,$n);$this->error="";if(!$H){$this->error=$n;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$y=>$X)$I[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Tf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Tf\\.)?$Tf\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Vc){$this->dsn(DRIVER.":$Vc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($Vc){if(is_readable($Vc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Vc)?$Vc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Vc")." AS a")){parent::__construct($Vc);$this->query("PRAGMA foreign_keys = 1");return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$dg){$Ki=array();foreach($K
as$O)$Ki[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($K))).") VALUES\n".implode(",\n",$Ki));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){global$g;return(preg_match('~^INTO~',$G)||$g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1,0,$M):" $G WHERE rowid = (SELECT rowid FROM ".table($R).$Z.$M."LIMIT 1)");}function
db_collation($m,$qb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine, 'rowid' AS Oid, '' AS Auto_increment FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){$J["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($C!=""?$I[$C]:$I);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$I=array();$dg="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$J){$C=$J["name"];$U=strtolower($J["type"]);$Sb=$J["dflt_value"];$I[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Sb,$B)?str_replace("''","'",$B[1]):($Sb=="NULL"?null:$Sb)),"null"=>!$J["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);if($J["pk"]){if($dg!="")$I[$dg]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$I[$C]["auto_increment"]=true;$dg=$C;}}$ph=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ph,$_e,PREG_SET_ORDER);foreach($_e
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($I[$C])$I[$C]["collation"]=trim($B[3],"'");}return$I;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$ph=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ph,$B)){$I[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$_e,PREG_SET_ORDER);foreach($_e
as$B){$I[""]["columns"][]=idf_unescape($B[2]).$B[4];$I[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$I){foreach(fields($R)as$C=>$o){if($o["primary"])$I[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$sh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$J){$C=$J["name"];$v=array("type"=>($J["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$Qg){$v["columns"][]=$Qg["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$sh[$C],$Ag)){preg_match_all('/("[^"]*+")+( DESC)?/',$Ag[2],$_e);foreach($_e[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$I[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$I[""]["columns"]||$v["descs"]!=$I[""]["descs"]||!preg_match("~^sqlite_~",$C))$I[$C]=$v;}return$I;}function
foreign_keys($R){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$J){$q=&$I[$J["id"]];if(!$q)$q=$J;$q["source"][]=$J["from"];$q["target"][]=$J["to"];}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Lc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Lc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Lc));return
false;}return
true;}function
create_database($m,$pb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Bc){$g->error=$Bc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$pb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){$Ei=($R==""||$cd);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Ei=true;break;}}$c=array();$Cf=array();foreach($p
as$o){if($o[1]){$c[]=($Ei?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$Cf[$o[0]]=$o[1][0];}}if(!$Ei){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$Cf,$cd))return
false;if($Ma)queries("UPDATE sqlite_sequence SET seq = $Ma WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$Cf,$cd,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$Cf[$y]=idf_escape($y);}}$eg=false;foreach($p
as$o){if($o[6])$eg=true;}$ic=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$ic[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$de=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$Cf[$d])continue
2;$e[]=$Cf[$d].($v["descs"][$y]?" DESC":"");}if(!$ic[$de]){if($v["type"]!="PRIMARY"||!$eg)$w[]=array($v["type"],$de,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$cd[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$de=>$q){foreach($q["source"]as$y=>$d){if(!$Cf[$d])continue
2;$q["source"][$y]=idf_unescape($Cf[$d]);}if(!isset($cd[" $de"]))$cd[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($cd));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($Cf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Cf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Cf)))." FROM ".table($R)))return
false;$pi=array();foreach(triggers($R)as$ni=>$Vh){$mi=trigger($ni);$pi[]="CREATE TRIGGER ".idf_escape($ni)." ".implode(" ",$Vh)." ON ".table($C)."\n$mi[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($pi
as$mi){if(!queries($mi))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$dg){if($dg[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Pi){return
apply_queries("DROP VIEW",$Pi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Pi,$Mh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$oi=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$oi["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$df=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($df?" OF":""),"Of"=>($df[0]=='`'||$df[0]=='"'?idf_unescape($df):$df),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$I=array();$oi=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$oi["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$J["sql"],$B);$I[$J["name"]]=array($B[1],$B[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$G){return$g->query("EXPLAIN QUERY PLAN $G");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ug){return
true;}function
create_sql($R,$Ma,$yh){global$g;$I=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$I.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$I;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$I[$y]=$g->result("PRAGMA $y");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$rf){list($y,$X)=explode("=",$rf,2);$I[$y]=$X;}return$I;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Qc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Qc);}$x="sqlite";$si=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$xh=array_keys($si);$zi=array();$pf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$kd=array("hex","length","lower","round","unixepoch","upper");$qd=array("avg","count","count distinct","group_concat","max","min","sum");$nc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$fc["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ag=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($yc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$F){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ni=pg_version($this->_link);$this->server_info=$Ni["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$ti=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
pg_fetch_result($H->_result,0,$o);}function
warnings(){return
h(pg_last_notice($this->_link));}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$d);$I->name=pg_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$d);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$F){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
warnings(){return'';}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$dg){global$g;foreach($K
as$O){$_i=array();$Z=array();foreach($O
as$y=>$X){$_i[]="$y = $X";if(isset($dg[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$_i)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}function
warnings(){return$this->_conn->warnings();}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$si,$xh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if(min_version(9,0,$g)){$g->query("SET application_name = 'Adminer'");if(min_version(9.2,0,$g)){$xh[lang(23)][]="json";$si["json"]=4294967295;if(min_version(9.4,0,$g)){$xh[lang(23)][]="jsonb";$si["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){return(preg_match('~^INTO~',$G)?limit($G,$Z,1,0,$M):" $G WHERE ctid = (SELECT ctid FROM ".table($R).$Z.$M."LIMIT 1)");}function
db_collation($m,$qb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$G="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$G.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$G.="
ORDER BY 1";return
get_key_vals($G);}function
count_tables($l){return
array();}function
table_status($C=""){$I=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", CASE WHEN c.relhasoids THEN 'oid' ELSE '' END AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return($C!=""?$I[$C]:$I);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$I=array();$Da=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$J["full_type"],$B);list(,$U,$re,$J["length"],$xa,$Ga)=$B;$J["length"].=$Ga;$eb=$U.$xa;if(isset($Da[$eb])){$J["type"]=$Da[$eb];$J["full_type"]=$J["type"].$re.$Ga;}else{$J["type"]=$U;$J["full_type"]=$J["type"].$re.$xa.$Ga;}$J["null"]=!$J["attnotnull"];$J["auto_increment"]=preg_match('~^nextval\\(~i',$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$J["default"],$B))$J["default"]=($B[1]=="NULL"?null:(($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2]));$I[$J["field"]]=$J;}return$I;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$Fh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Fh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Fh AND ci.oid = i.indexrelid",$h)as$J){$Bg=$J["relname"];$I[$Bg]["type"]=($J["indispartial"]?"INDEX":($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX")));$I[$Bg]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Jd)$I[$Bg]["columns"][]=$e[$Jd];$I[$Bg]["descs"]=array();foreach(explode(" ",$J["indoption"])as$Kd)$I[$Bg]["descs"][]=($Kd&1?'1':null);$I[$Bg]["lengths"]=array();}return$I;}function
foreign_keys($R){global$kf;$I=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$B)){$J['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$ze)){$J['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ze[2]));$J['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ze[4]));}$J['target']=array_map('trim',explode(',',$B[3]));$J['on_delete']=(preg_match("~ON DELETE ($kf)~",$B[4],$ze)?$ze[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($kf)~",$B[4],$ze)?$ze[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT view_definition
FROM information_schema.views
WHERE table_schema = current_schema() AND table_name = ".q($C))));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$I=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$B))$I=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($I);}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" ENCODING ".idf_escape($pb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$pb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){$c=array();$og=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$Ji=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$og[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Ji!="")$og[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ji!=""?substr($Ji,9):"''");}}$c=array_merge($c,$cd);if($R=="")array_unshift($og,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($og,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$og[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$vb!="")$og[]="COMMENT ON TABLE ".table($C)." IS ".q($vb);if($Ma!=""){}foreach($og
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$gc=array();$og=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$gc[]=idf_escape($X[1]);else$og[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($og,"ALTER TABLE ".table($R).implode(",",$i));if($gc)array_unshift($og,"DROP INDEX ".implode(", ",$gc));foreach($og
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Pi){return
drop_tables($Pi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Pi,$Mh){foreach(array_merge($T,$Pi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($Mh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$K=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$J)$I[$J["trigger_name"]]=array($J["action_timing"],$J["event_manipulation"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($C,$U){$K=get_rows('SELECT routine_definition AS definition, LOWER(external_language) AS language, *
FROM information_schema.routines
WHERE routine_schema = current_schema() AND specific_name = '.q($C));$I=$K[0];$I["returns"]=array("type"=>$I["type_udt_name"]);$I["fields"]=get_rows('SELECT parameter_name AS field, data_type AS type, character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = '.q($C).'
ORDER BY ordinal_position');return$I;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()
ORDER BY SPECIFIC_NAME');}function
routine_languages(){return
get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language");}function
routine_id($C,$J){$I=array();foreach($J["fields"]as$o)$I[]=$o["type"];return
idf_escape($C)."(".implode(", ",$I).")";}function
last_id(){return
0;}function
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Ag))return$Ag[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Tg){global$g,$si,$xh;$I=$g->query("SET search_path TO ".idf_escape($Tg));foreach(types()as$U){if(!isset($si[$U])){$si[$U]=0;$xh[lang(24)][]=$U;}}return$I;}function
create_sql($R,$Ma,$yh){global$g;$I='';$Jg=array();$ch=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$ad=foreign_keys($R);ksort($ad);if(!$P||empty($p))return
false;$I="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Sc=>$o){$Kf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$Jg[]=$Kf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$_e)){$bh=$_e[1];$oh=reset(get_rows("SELECT * FROM $bh"));$ch[]=($yh=="DROP+CREATE"?"DROP SEQUENCE $bh;\n":"")."CREATE SEQUENCE $bh INCREMENT $oh[increment_by] MINVALUE $oh[min_value] MAXVALUE $oh[max_value] START ".($Ma?$oh['last_value']:1)." CACHE $oh[cache_value];";}}if(!empty($ch))$I=implode("\n\n",$ch)."\n\n$I";foreach($w
as$Ed=>$v){switch($v['type']){case'UNIQUE':$Jg[]="CONSTRAINT ".idf_escape($Ed)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$Jg[]="CONSTRAINT ".idf_escape($Ed)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($ad
as$Zc=>$Yc)$Jg[]="CONSTRAINT ".idf_escape($Zc)." $Yc[definition] ".($Yc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$I.=implode(",\n    ",$Jg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$Ed=>$v){if($v['type']=='INDEX')$I.="\n\nCREATE INDEX ".idf_escape($Ed)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$I.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Sc=>$o){if($o['comment'])$I.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Sc)." IS ".q($o['comment']).";";}return
rtrim($I,';');}function
trigger_sql($R){$P=table_status($R);$I="";foreach(triggers($R)as$li=>$ki){$mi=trigger($li,$P['Name']);$I.="\nCREATE TRIGGER ".idf_escape($mi['Trigger'])." $mi[Timing] $mi[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $mi[Type] $mi[Statement];;\n";}return$I;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Qc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.(min_version(9.3)?'materializedview|':'').'scheme|routine|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Qc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$si=array();$xh=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$si+=$X;$xh[$y]=array_keys($X);}$zi=array();$pf=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$kd=array("char_length","lower","round","to_hex","to_timestamp","upper");$qd=array("avg","count","count distinct","max","min","sum");$nc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$fc["oracle"]="Oracle";if(isset($_GET["oracle"])){$ag=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($yc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$F){$this->_link=@oci_new_connect($V,$F,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($G,$ti=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Min_Result($H);$this->affected_rows=oci_num_rows($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result))return
false;return
oci_result($H->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'OCI-Lob'))$J[$y]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$d);$I->charsetnr=(preg_match("~raw|blob|bfile~",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$F){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$F);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$z,$D=0,$M=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($z+$D):" $G$Z"));}function
limit1($R,$G,$Z,$M="\n"){return" $G$Z";}function
db_collation($m,$qb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$I=array();$Vg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Vg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Vg":"")."
ORDER BY 1")as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$J){$U=$J["DATA_TYPE"];$re="$J[DATA_PRECISION],$J[DATA_SCALE]";if($re==",")$re=$J["DATA_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$U.($re?"($re)":""),"type"=>strtolower($U),"length"=>$re,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($R,$h=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$J){$Ed=$J["INDEX_NAME"];$I[$Ed]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Ed]["columns"][]=$J["COLUMN_NAME"];$I[$Ed]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Ed]["descs"][]=($J["DESCEND"]?'1':null);}return$I;}function
view($C){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($K);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$G){$g->query("EXPLAIN PLAN FOR $G");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){$c=$gc=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$gc[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$gc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$gc).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
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
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Pi){return
apply_queries("DROP VIEW",$Pi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Ug){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ug));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Qc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Qc);}$x="oracle";$si=array();$xh=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$si+=$X;$xh[$y]=array_keys($X);}$zi=array();$pf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$kd=array("length","lower","round","upper");$qd=array("avg","count","count distinct","max","min","sum");$nc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$fc["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ag=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$F){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$Ld=sqlsrv_server_info($this->_link);$this->server_info=$Ld['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($G,$ti=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(!$H)return
false;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'DateTime'))$J[$y]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$o["Name"];$I->orgname=$o["Name"];$I->type=($o["Type"]==1?254:0);return$I;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$F){$this->_link=@mssql_connect($N,$V,$F);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($G,$ti=false){$H=@mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$F){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$dg){foreach($K
as$O){$_i=array();$Z=array();foreach($O
as$y=>$X){$_i[]="$y = $X";if(isset($dg[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$_i)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($G,$Z,$z,$D=0,$M=" "){return($z!==null?" TOP (".($z+$D).")":"")." $G$Z";}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($m,$qb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name = ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$I=array();foreach($l
as$m){$g->select_db($m);$I[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($C=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$I=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$J){$U=$J["type"];$re=(preg_match("~char|binary~",$U)?$J["max_length"]:($U=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$U.($re?"($re)":""),"type"=>$U,"length"=>$re,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($R,$h=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$J){$C=$J["name"];$I[$C]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$C]["lengths"]=array();$I[$C]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$C]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$pb)$I[preg_replace('~_.*~','',$pb)][]=$pb;return$I;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$pb)?" COLLATE $pb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$pb){if(preg_match('~^[a-z0-9_]+$~i',$pb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $pb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($cd[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($cd)$c[""]=$cd;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$gc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$gc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$gc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$gc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$G){$g->query("SET SHOWPLAN_ALL ON");$I=$g->query($G);$g->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($S,$Z){}function
foreign_keys($R){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$J){$q=&$I[$J["FK_NAME"]];$q["table"]=$J["PKTABLE_NAME"];$q["source"][]=$J["FKCOLUMN_NAME"];$q["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Pi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Pi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Pi,$Mh){return
apply_queries("ALTER SCHEMA ".idf_escape($Mh)." TRANSFER",array_merge($T,$Pi));}function
trigger($C){if($C=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);return$I;}function
triggers($R){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Tg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Qc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Qc);}$x="mssql";$si=array();$xh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$si+=$X;$xh[$y]=array_keys($X);}$zi=array();$pf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$kd=array("len","lower","round","upper");$qd=array("avg","count","count distinct","max","min","sum");$nc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$fc['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$ag=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=ibase_connect($N,$V,$F);if($this->_link){$Ci=explode(':',$N);$this->service_link=ibase_service_attach($Ci[0],$V,$F);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($G,$ti=false){$H=ibase_query($G,$this->_link);if(!$H){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($H===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($bd){return
array("domain");}function
limit($G,$Z,$z,$D=0,$M=" "){$I='';$I.=($z!==null?$M."FIRST $z".($D?" SKIP $D":""):"");$I.=" $G$Z";return$I;}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($m,$qb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$G='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$H=ibase_query($g->_link,$G);$I=array();while($J=ibase_fetch_assoc($H))$I[$J['RDB$RELATION_NAME']]='table';ksort($I);return$I;}function
count_tables($l){return
array();}function
table_status($C="",$Pc=false){global$g;$I=array();$Lb=tables_list();foreach($Lb
as$v=>$X){$v=trim($v);$I[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$I[$v];}return$I;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$I=array();$G='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$H=ibase_query($g->_link,$G);while($J=ibase_fetch_assoc($H))$I[trim($J['FIELD_NAME'])]=array("field"=>trim($J["FIELD_NAME"]),"full_type"=>trim($J["FIELD_TYPE"]),"type"=>trim($J["FIELD_SUB_TYPE"]),"default"=>trim($J['FIELD_DEFAULT_VALUE']),"null"=>(trim($J["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($J["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($J["FIELD_DESCRIPTION"]),);return$I;}function
indexes($R,$h=null){$I=array();return$I;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Tg){return
true;}function
support($Qc){return
preg_match("~^(columns|sql|status|table)$~",$Qc);}$x="firebird";$pf=array("=");$kd=array();$qd=array();$nc=array();}$fc["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$ag=array("SimpleXML + allow_url_fopen");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')&&ini_bool('allow_url_fopen')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($G,$ti=false){$Hf=array('SelectExpression'=>$G,'ConsistentRead'=>'true');if($this->next)$Hf['NextToken']=$this->next;$H=sdb_request_all('Select','Item',$Hf,$this->timeout);if($H===false)return$H;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$G)){$Ah=0;foreach($H
as$Yd)$Ah+=$Yd->Attribute->Value;$H=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Ah,))));}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($H){foreach($H
as$Yd){$J=array();if($Yd->Name!='')$J['itemName()']=(string)$Yd->Name;foreach($Yd->Attribute
as$Ja){$C=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($J[$C])){$J[$C]=(array)$J[$C];$J[$C][]=$Y;}else$J[$C]=$Y;}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($qc){return(is_object($qc)&&$qc['encoding']=='base64'?base64_decode($qc):(string)$qc);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ee=array_keys($this->_rows[0]);return(object)array('name'=>$ee[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$dg="itemName()";function
_chunkRequest($Bd,$wa,$Hf,$Fc=array()){global$g;foreach(array_chunk($Bd,25)as$ib){$If=$Hf;foreach($ib
as$s=>$t){$If["Item.$s.ItemName"]=$t;foreach($Fc
as$y=>$X)$If["Item.$s.$y"]=$X;}if(!sdb_request($wa,$If))return
false;}$g->affected_rows=count($Bd);return
true;}function
_extractIds($R,$pg,$z){$I=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$pg,$_e))$I=array_map('idf_unescape',$_e[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$pg.($z?" LIMIT 1":"")))as$Yd)$I[]=$Yd->Name;}return$I;}function
select($R,$L,$Z,$nd,$uf=array(),$z=1,$E=0,$fg=false){global$g;$g->next=$_GET["next"];$I=parent::select($R,$L,$Z,$nd,$uf,$z,$E,$fg);$g->next=0;return$I;}function
delete($R,$pg,$z=0){return$this->_chunkRequest($this->_extractIds($R,$pg,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$pg,$z=0,$M="\n"){$Ub=array();$Pd=array();$s=0;$Bd=$this->_extractIds($R,$pg,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$Bd))$Ub["Attribute.".count($Ub).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$ae=>$W){$Pd["Attribute.$s.Name"]=$y;$Pd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$ae)$Pd["Attribute.$s.Replace"]="true";$s++;}}}$Hf=array('DomainName'=>$R);return(!$Pd||$this->_chunkRequest(($t!=""?array($t):$Bd),'BatchPutAttributes',$Hf,$Pd))&&(!$Ub||$this->_chunkRequest($Bd,'BatchDeleteAttributes',$Hf,$Ub));}function
insert($R,$O){$Hf=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$Hf["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$Hf["Attribute.$s.Name"]=$C;$Hf["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$Hf);}function
insertUpdate($R,$K,$dg){foreach($K
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Qc){return
preg_match('~sql~',$Qc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$qb){}function
tables_list(){global$g;$I=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$I[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$I;}function
table_status($C="",$Pc=false){$I=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$J=array("Name"=>$R,"Auto_increment"=>"");if(!$Pc){$Me=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Me){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$J[$y]=(string)$Me->$X;}}if($C!="")return$J;$I[$R]=$J;}return$I;}function
explain($g,$G){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z":"");}function
unconvert_field($o,$I){return$I;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ca,$Lb,$y,$tg=false){$Va=64;if(strlen($y)>$Va)$y=pack("H*",$Ca($y));$y=str_pad($y,$Va,"\0");$be=$y^str_repeat("\x36",$Va);$ce=$y^str_repeat("\x5C",$Va);$I=$Ca($ce.pack("H*",$Ca($be.$Lb)));if($tg)$I=pack("H*",$I);return$I;}function
sdb_request($wa,$Hf=array()){global$b,$g;list($zd,$Hf['AWSAccessKeyId'],$Wg)=$b->credentials();$Hf['Action']=$wa;$Hf['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$Hf['Version']='2009-04-15';$Hf['SignatureVersion']=2;$Hf['SignatureMethod']='HmacSHA1';ksort($Hf);$G='';foreach($Hf
as$y=>$X)$G.='&'.rawurlencode($y).'='.rawurlencode($X);$G=str_replace('%7E','~',substr($G,1));$G.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$zd)."\n/\n$G",$Wg,true)));@ini_set('track_errors',1);$Uc=@file_get_contents((preg_match('~^https?://~',$zd)?$zd:"http://$zd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$G,'ignore_errors'=>1,))));if(!$Uc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$cj=simplexml_load_string($Uc);if(!$cj){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($cj->Errors){$n=$cj->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$Lh=$wa."Result";return($cj->$Lh?$cj->$Lh:true);}function
sdb_request_all($wa,$Lh,$Hf=array(),$Uh=0){$I=array();$th=($Uh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$Hf['SelectExpression'],$B)?$B[1]:0);do{$cj=sdb_request($wa,$Hf);if(!$cj)break;foreach($cj->$Lh
as$qc)$I[]=$qc;if($z&&count($I)>=$z){$_GET["next"]=$cj->NextToken;break;}if($Uh&&microtime(true)-$th>$Uh)return
false;$Hf['NextToken']=$cj->NextToken;if($z)$Hf['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($I),$Hf['SelectExpression']);}while($cj->NextToken);return$I;}$x="simpledb";$pf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$kd=array();$qd=array("count");$nc=array(array("json"));}$fc["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$ag=array("mongo","mongodb");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$F){global$b;$m=$b->database();$sf=array();if($V!=""){$sf["username"]=$V;$sf["password"]=$F;}if($m!="")$sf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$sf);return
true;}catch(Exception$Bc){$this->error=$Bc->getMessage();return
false;}}function
query($G){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Bc){$this->error=$Bc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Yd){$J=array();foreach($Yd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ee=array_keys($this->_rows[0]);$C=$ee[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$dg="_id";function
select($R,$L,$Z,$nd,$uf=array(),$z=1,$E=0,$fg=false){$L=($L==array("*")?array():array_fill_keys($L,true));$lh=array();foreach($uf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Eb);$lh[$X]=($Eb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$L)->sort($lh)->limit($z!=""?+$z:0)->skip($E*$z));}function
insert($R,$O){try{$I=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$I['code'];$this->_conn->error=$I['err'];$this->_conn->last_id=$O['_id'];return!$I['err'];}catch(Exception$Bc){$this->_conn->error=$Bc->getMessage();return
false;}}}function
get_databases($bd){global$g;$I=array();$Qb=$g->_link->listDBs();foreach($Qb['databases']as$m)$I[]=$m['name'];return$I;}function
count_tables($l){global$g;$I=array();foreach($l
as$m)$I[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$I;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
drop_databases($l){global$g;foreach($l
as$m){$Fg=$g->_link->selectDB($m)->drop();if(!$Fg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$I=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Xb=array();foreach($v["key"]as$d=>$U)$Xb[]=($U==-1?'1':null);$I[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Xb,);}return$I;}function
fields($R){return
fields_from_edit();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}$pf=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$error,$last_id;var$_link;var$_db,$_db_name;function
connect($N,$V,$F){global$b;$m=$b->database();$sf=array();if($V!=""){$sf["username"]=$V;$sf["password"]=$F;}if($m!="")$sf["db"]=$m;try{$kb='MongoDB\Driver\Manager';$this->_link=new$kb("mongodb://$N",$sf);return
true;}catch(Exception$Bc){$this->error=$Bc->getMessage();return
false;}}function
query($G){return
false;}function
select_db($k){try{$this->_db_name=$k;return
true;}catch(Exception$Bc){$this->error=$Bc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Yd){$J=array();foreach($Yd
as$y=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'.strval($X).'")':(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->bin:(is_a($X,'MongoDB\BSON\Regex')?strval($X):(is_object($X)?json_encode($X,256):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=$H->count;}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ee=array_keys($this->_rows[0]);$C=$ee[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$dg="_id";function
select($R,$L,$Z,$nd,$uf=array(),$z=1,$E=0,$fg=false){global$g;$L=($L==array("*")?array():array_fill_keys($L,1));if(count($L)&&!isset($L['_id']))$L['_id']=0;$Z=where_to_query($Z);$lh=array();foreach($uf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Eb);$lh[$X]=($Eb?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$z=$_GET['limit'];$z=min(200,max(1,(int)$z));$jh=$E*$z;$kb='MongoDB\Driver\Query';$G=new$kb($Z,array('projection'=>$L,'limit'=>$z,'skip'=>$jh,'sort'=>$lh));$Ig=$g->_link->executeQuery("$g->_db_name.$R",$G);return
new
Min_Result($Ig);}function
update($R,$O,$pg,$z=0,$M="\n"){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($pg);$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());if(isset($O['_id']))unset($O['_id']);$Cg=array();foreach($O
as$y=>$Y){if($Y=='NULL'){$Cg[$y]=1;unset($O[$y]);}}$_i=array('$set'=>$O);if(count($Cg))$_i['$unset']=$Cg;$Za->update($Z,$_i,array('upsert'=>false));$Ig=$g->_link->executeBulkWrite("$m.$R",$Za);$g->affected_rows=$Ig->getModifiedCount();return
true;}function
delete($R,$pg,$z=0){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($pg);$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());$Za->delete($Z,array('limit'=>$z));$Ig=$g->_link->executeBulkWrite("$m.$R",$Za);$g->affected_rows=$Ig->getDeletedCount();return
true;}function
insert($R,$O){global$g;$m=$g->_db_name;$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());if(isset($O['_id'])&&empty($O['_id']))unset($O['_id']);$Za->insert($O);$Ig=$g->_link->executeBulkWrite("$m.$R",$Za);$g->affected_rows=$Ig->getInsertedCount();return
true;}}function
get_databases($bd){global$g;$I=array();$kb='MongoDB\Driver\Command';$tb=new$kb(array('listDatabases'=>1));$Ig=$g->_link->executeCommand('admin',$tb);foreach($Ig
as$Qb){foreach($Qb->databases
as$m)$I[]=$m->name;}return$I;}function
count_tables($l){$I=array();return$I;}function
tables_list(){global$g;$kb='MongoDB\Driver\Command';$tb=new$kb(array('listCollections'=>1));$Ig=$g->_link->executeCommand($g->_db_name,$tb);$rb=array();foreach($Ig
as$H)$rb[$H->name]='table';return$rb;}function
drop_databases($l){return
false;}function
indexes($R,$h=null){global$g;$I=array();$kb='MongoDB\Driver\Command';$tb=new$kb(array('listIndexes'=>$R));$Ig=$g->_link->executeCommand($g->_db_name,$tb);foreach($Ig
as$v){$Xb=array();$e=array();foreach(get_object_vars($v->key)as$d=>$U){$Xb[]=($U==-1?'1':null);$e[]=$d;}$I[$v->name]=array("type"=>($v->name=="_id_"?"PRIMARY":(isset($v->unique)?"UNIQUE":"INDEX")),"columns"=>$e,"lengths"=>array(),"descs"=>$Xb,);}return$I;}function
fields($R){$p=fields_from_edit();if(!count($p)){global$ec;$H=$ec->select($R,array("*"),null,null,array(),10);while($J=$H->fetch_assoc()){foreach($J
as$y=>$X){$J[$y]=null;$p[$y]=array("field"=>$y,"type"=>"string","null"=>($y!=$ec->primary),"auto_increment"=>($y==$ec->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}return$p;}function
found_rows($S,$Z){global$g;$Z=where_to_query($Z);$kb='MongoDB\Driver\Command';$tb=new$kb(array('count'=>$S['Name'],'query'=>$Z));$Ig=$g->_link->executeCommand($g->_db_name,$tb);$ci=$Ig->toArray();return$ci[0]->n;}function
sql_query_where_parser($pg){$pg=trim(preg_replace('/WHERE[\s]?[(]?\(?/','',$pg));$pg=preg_replace('/\)\)\)$/',')',$pg);$Zi=explode(' AND ',$pg);$aj=explode(') OR (',$pg);$Z=array();foreach($Zi
as$Xi)$Z[]=trim($Xi);if(count($aj)==1)$aj=array();elseif(count($aj)>1)$Z=array();return
where_to_query($Z,$aj);}function
where_to_query($Vi=array(),$Wi=array()){global$pf;$Lb=array();foreach(array('and'=>$Vi,'or'=>$Wi)as$U=>$Z){if(is_array($Z)){foreach($Z
as$Ic){list($nb,$nf,$X)=explode(" ",$Ic,3);if($nb=="_id"){$X=str_replace('MongoDB\BSON\ObjectID("',"",$X);$X=str_replace('")',"",$X);$kb='MongoDB\BSON\ObjectID';$X=new$kb($X);}if(!in_array($nf,$pf))continue;if(preg_match('~^\(f\)(.+)~',$nf,$B)){$X=(float)$X;$nf=$B[1];}elseif(preg_match('~^\(date\)(.+)~',$nf,$B)){$Nb=new
DateTime($X);$kb='MongoDB\BSON\UTCDatetime';$X=new$kb($Nb->getTimestamp()*1000);$nf=$B[1];}switch($nf){case'=':$nf='$eq';break;case'!=':$nf='$ne';break;case'>':$nf='$gt';break;case'<':$nf='$lt';break;case'>=':$nf='$gte';break;case'<=':$nf='$lte';break;case'regex':$nf='$regex';break;default:continue;}if($U=='and')$Lb['$and'][]=array($nb=>array($nf=>$X));elseif($U=='or')$Lb['$or'][]=array($nb=>array($nf=>$X));}}}return$Lb;}$pf=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($u){return$u;}function
idf_escape($u){return$u;}function
table_status($C="",$Pc=false){$I=array();foreach(tables_list()as$R=>$U){$I[$R]=array("Name"=>$R);if($C==$R)return$I[$R];}return$I;}function
last_id(){global$g;return$g->last_id;}function
error(){global$g;return
h($g->error);}function
collations(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$I=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Eb);$e[$d]=($Eb?-1:1);}$I=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($I['errmsg']){$g->error=$I['errmsg'];return
false;}}return
true;}function
support($Qc){return
preg_match("~database|indexes~",$Qc);}function
db_collation($m,$qb){}function
information_schema(){}function
is_view($S){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$Fg=$g->_db->selectCollection($R)->drop();if(!$Fg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$Fg=$g->_db->selectCollection($R)->remove();if(!$Fg['ok'])return
false;}return
true;}$x="mongo";$kd=array();$qd=array();$nc=array(array("json"));}$fc["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$ag=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Rf,$_b=array(),$Ne='GET'){@ini_set('track_errors',1);$Uc=@file_get_contents("$this->_url/".ltrim($Rf,'/'),false,stream_context_create(array('http'=>array('method'=>$Ne,'content'=>$_b===null?$_b:json_encode($_b),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$Uc){$this->error=$php_errormsg;return$Uc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Uc;return
false;}$I=json_decode($Uc,true);if($I===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$zb=get_defined_constants(true);foreach($zb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$I;}function
query($Rf,$_b=array(),$Ne='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Rf,'/'),$_b,$Ne);}function
connect($N,$V,$F){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$F@$B[2]";$I=$this->query('');if($I)$this->server_info=$I['version']['number'];return(bool)$I;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($K){$this->num_rows=count($this->_rows);$this->_rows=$K;reset($this->_rows);}function
fetch_assoc(){$I=current($this->_rows);next($this->_rows);return$I;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$L,$Z,$nd,$uf=array(),$z=1,$E=0,$fg=false){global$b;$Lb=array();$G="$R/_search";if($L!=array("*"))$Lb["fields"]=$L;if($uf){$lh=array();foreach($uf
as$nb){$nb=preg_replace('~ DESC$~','',$nb,1,$Eb);$lh[]=($Eb?array($nb=>"desc"):$nb);}$Lb["sort"]=$lh;}if($z){$Lb["size"]=+$z;if($E)$Lb["from"]=($E*$z);}foreach($Z
as$X){list($nb,$nf,$X)=explode(" ",$X,3);if($nb=="_id")$Lb["query"]["ids"]["values"][]=$X;elseif($nb.$X!=""){$Ph=array("term"=>array(($nb!=""?$nb:"_all")=>$X));if($nf=="=")$Lb["query"]["filtered"]["filter"]["and"][]=$Ph;else$Lb["query"]["filtered"]["query"]["bool"]["must"][]=$Ph;}}if($Lb["query"]&&!$Lb["query"]["filtered"]["query"]&&!$Lb["query"]["ids"])$Lb["query"]["filtered"]["query"]=array("match_all"=>array());$th=microtime(true);$Vg=$this->_conn->query($G,$Lb);if($fg)echo$b->selectQuery("$G: ".print_r($Lb,true),$th,!$Vg);if(!$Vg)return
false;$I=array();foreach($Vg['hits']['hits']as$yd){$J=array();if($L==array("*"))$J["_id"]=$yd["_id"];$p=$yd['_source'];if($L!=array("*")){$p=array();foreach($L
as$y)$p[$y]=$yd['fields'][$y];}foreach($p
as$y=>$X){if($Lb["fields"])$X=$X[0];$J[$y]=(is_array($X)?json_encode($X):$X);}$I[]=$J;}return
new
Min_Result($I);}function
update($U,$ug,$pg){$Pf=preg_split('~ *= *~',$pg);if(count($Pf)==2){$t=trim($Pf[1]);$G="$U/$t";return$this->_conn->query($G,$ug,'POST');}return
false;}function
insert($U,$ug){$t="";$G="$U/$t";$Fg=$this->_conn->query($G,$ug,'POST');$this->_conn->last_id=$Fg['_id'];return$Fg['created'];}function
delete($U,$pg){$Bd=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$Bd[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$db){$Pf=preg_split('~ *= *~',$db);if(count($Pf)==2)$Bd[]=trim($Pf[1]);}}$this->_conn->affected_rows=0;foreach($Bd
as$t){$G="{$U}/{$t}";$Fg=$this->_conn->query($G,'{}','DELETE');if(is_array($Fg)&&$Fg['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Qc){return
preg_match("~database|table|columns~",$Qc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$I=$g->rootQuery('_aliases');if($I){$I=array_keys($I);sort($I,SORT_STRING);}return$I;}function
collations(){return
array();}function
db_collation($m,$qb){}function
engines(){return
array();}function
count_tables($l){global$g;$I=array();$H=$g->query('_stats');if($H&&$H['indices']){$Id=$H['indices'];foreach($Id
as$Hd=>$uh){$Gd=$uh['total']['indexing'];$I[$Hd]=$Gd['index_total'];}}return$I;}function
tables_list(){global$g;$I=$g->query('_mapping');if($I)$I=array_fill_keys(array_keys($I[$g->_db]["mappings"]),'table');return$I;}function
table_status($C="",$Pc=false){global$g;$Vg=$g->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$I=array();if($Vg){$T=$Vg["aggregations"]["count_by_type"]["buckets"];foreach($T
as$R){$I[$R["key"]]=array("Name"=>$R["key"],"Engine"=>"table","Rows"=>$R["doc_count"],);if($C!=""&&$C==$R["key"])return$I[$C];}}return$I;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$H=$g->query("$R/_mapping");$I=array();if($H){$xe=$H[$R]['properties'];if(!$xe)$xe=$H[$g->_db]['mappings'][$R]['properties'];if($xe){foreach($xe
as$C=>$o){$I[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($I[$C]["privileges"]["insert"]);unset($I[$C]["privileges"]["update"]);}}}}return$I;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),null,'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){global$g;$lg=array();foreach($p
as$Nc){$Sc=trim($Nc[1][0]);$Tc=trim($Nc[1][1]?$Nc[1][1]:"text");$lg[$Sc]=array('type'=>$Tc);}if(!empty($lg))$lg=array('properties'=>$lg);return$g->query("_mapping/{$C}",$lg,'PUT');}function
drop_tables($T){global$g;$I=true;foreach($T
as$R)$I=$I&&$g->query(urlencode($R),array(),'DELETE');return$I;}function
last_id(){global$g;return$g->last_id;}$x="elastic";$pf=array("=","query");$kd=array();$qd=array();$nc=array(array("json"));$si=array();$xh=array();foreach(array(lang(25)=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),lang(26)=>array("date"=>10),lang(23)=>array("string"=>65535,"text"=>65535),lang(27)=>array("binary"=>255),)as$y=>$X){$si+=$X;$xh[$y]=array_keys($X);}}$fc=array("server"=>"MySQL")+$fc;if(!defined("DRIVER")){$ag=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$F="",$k=null,$Wf=null,$kh=null){mysqli_report(MYSQLI_REPORT_OFF);list($zd,$Wf)=explode(":",$N,2);$I=@$this->real_connect(($N!=""?$zd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$F!=""?$F:ini_get("mysqli.default_pw")),$k,(is_numeric($Wf)?$Wf:ini_get("mysqli.default_port")),(!is_numeric($Wf)?$Wf:$kh));return$I;}function
set_charset($cb){if(parent::set_charset($cb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $cb");}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($cb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($cb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $cb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($G,$ti=false){$H=@($ti?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$F){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);return
true;}function
set_charset($cb){$this->query("SET NAMES $cb");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($G,$ti=false){$this->setAttribute(1000,!$ti);return
parent::query($G,$ti);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$K,$dg){$e=array_keys(reset($K));$bg="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$Ki=array();foreach($e
as$y)$Ki[$y]="$y = VALUES($y)";$_h="\nON DUPLICATE KEY UPDATE ".implode(", ",$Ki);$Ki=array();$re=0;foreach($K
as$O){$Y="(".implode(", ",$O).")";if($Ki&&(strlen($bg)+$re+strlen($Y)+strlen($_h)>1e6)){if(!queries($bg.implode(",\n",$Ki).$_h))return
false;$Ki=array();$re=0;}$Ki[]=$Y;$re+=strlen($Y)+2;}return
queries($bg.implode(",\n",$Ki).$_h);}function
warnings(){$H=$this->_conn->query("SHOW WARNINGS");if($H&&$H->num_rows){ob_start();select($H);return
ob_get_clean();}}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$si,$xh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(min_version('5.7.8',10.2,$g)){$xh[lang(23)][]="json";$si["json"]=4294967295;}return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Rg=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$Rg;return$I;}function
get_databases($bd){$I=get_session("dbs");if($I===null){$G=(min_version(5)?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($bd?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($m,$qb){global$g;$I=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$I=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$I=$qb[$B[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(preg_match("~YES|DEFAULT~",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){return
get_key_vals(min_version(5)?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$I=array();foreach($l
as$m)$I[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$I;}function
table_status($C="",$Pc=false){$I=array();foreach(get_rows($Pc&&min_version(5)?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&min_version(5.6));}function
fields($R){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$B);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($J["Default"]!=""||preg_match("~char|set~",$B[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$J["Extra"],$B)?$B[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(preg_split('~, *~',$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($R,$h=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$J){$C=$J["Key_name"];$I[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?($J["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$I[$C]["columns"][]=$J["Column_name"];$I[$C]["lengths"][]=($J["Index_type"]=="SPATIAL"?null:$J["Sub_part"]);$I[$C]["descs"][]=null;}return$I;}function
foreign_keys($R){global$g,$kf;static$Tf='`(?:[^`]|``)+`';$I=array();$Fb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Fb){preg_match_all("~CONSTRAINT ($Tf) FOREIGN KEY ?\\(((?:$Tf,? ?)+)\\) REFERENCES ($Tf)(?:\\.($Tf))? \\(((?:$Tf,? ?)+)\\)(?: ON DELETE ($kf))?(?: ON UPDATE ($kf))?~",$Fb,$_e,PREG_SET_ORDER);foreach($_e
as$B){preg_match_all("~$Tf~",$B[2],$mh);preg_match_all("~$Tf~",$B[5],$Mh);$I[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$mh[0]),"target"=>array_map('idf_unescape',$Mh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$y=>$X)asort($I[$y]);return$I;}function
information_schema($m){return(min_version(5)&&$m=="information_schema")||(min_version(5.5)&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" COLLATE ".q($pb):""));}function
drop_databases($l){$I=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$I;}function
rename_database($C,$pb){$I=false;if(create_database($C,$pb)){$Dg=array();foreach(tables_list()as$R=>$U)$Dg[]=table($R)." TO ".idf_escape($C).".".table($R);$I=(!$Dg||queries("RENAME TABLE ".implode(", ",$Dg)));if($I)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$I;}function
auto_increment(){$Na=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Na="";break;}if($v["type"]=="PRIMARY")$Na=" UNIQUE";}}return" AUTO_INCREMENT$Na";}function
alter_table($R,$C,$p,$cd,$vb,$vc,$pb,$Ma,$Nf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$cd);$P=($vb!==null?" COMMENT=".q($vb):"").($vc?" ENGINE=".q($vc):"").($pb?" COLLATE ".q($pb):"").($Ma!=""?" AUTO_INCREMENT=$Ma":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$Nf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$Nf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Nf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Pi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Pi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Pi,$Mh){$Dg=array();foreach(array_merge($T,$Pi)as$R)$Dg[]=table($R)." TO ".idf_escape($Mh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$Dg));}function
copy_tables($T,$Pi,$Mh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($Mh==DB?table("copy_$R"):idf_escape($Mh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Pi
as$R){$C=($Mh==DB?table("copy_$R"):idf_escape($Mh).".".table($R));$Oi=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Oi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$xc,$Nd,$si;$Da=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$nh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$ri="((".implode("|",array_merge(array_keys($si),$Da)).")\\b(?:\\s*\\(((?:[^'\")]|$xc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Tf="$nh*(".($U=="FUNCTION"?"":$Nd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ri";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Tf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$ri\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Tf\\s*,?~is",$B[1],$_e,PREG_SET_ORDER);foreach($_e
as$Gf){$C=str_replace("``","`",$Gf[2]).$Gf[3];$p[]=array("field"=>$C,"type"=>strtolower($Gf[5]),"length"=>preg_replace_callback("~$xc~s",'normalize_enum',$Gf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Gf[8] $Gf[7]"))),"null"=>1,"full_type"=>$Gf[4],"inout"=>strtoupper($Gf[1]),"collation"=>strtolower($Gf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME AS SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
routine_id($C,$J){return
idf_escape($C);}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN ".(min_version(5.1)?"PARTITIONS ":"").$G);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Tg){return
true;}function
create_sql($R,$Ma,$yh){global$g;$I=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$Ma)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$J)$I.="\nCREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return(min_version(8)?"ST_":"")."AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$I){if(preg_match("~binary~",$o["type"]))$I="UNHEX($I)";if($o["type"]=="bit")$I="CONV($I, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$I="GeomFromText($I)";return$I;}function
support($Qc){return!preg_match("~scheme|sequence|type|view_trigger|materializedview".(min_version(5.1)?"":"|event|partitioning".(min_version(5)?"":"|routine|trigger|view"))."~",$Qc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$si=array();$xh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$si+=$X;$xh[$y]=array_keys($X);}$zi=array("unsigned","zerofill","unsigned zerofill");$pf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$kd=array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper");$qd=array("avg","count","count distinct","group_concat","max","min","sum");$nc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.6.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($bd=true){return
get_databases($bd);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$I=array();$Vc="adminer.css";if(file_exists($Vc))$I[]=$Vc;return$I;}function
loginForm(){global$fc;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$fc,DRIVER)."\n",'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
',script("focus(qs('#username'));"),"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($ve,$F){global$x;if($x=="sqlite")return
lang(38,target_blank(),'<code>login()</code>');return
true;}function
tableName($Dh){return
h($Dh["Name"]);}function
fieldName($o,$uf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Dh,$O=""){echo'<p class="links">';$ue=array("select"=>lang(39));if(support("table")||support("indexes"))$ue["table"]=lang(40);if(support("table")){if(is_view($Dh))$ue["view"]=lang(41);else$ue["create"]=lang(42);}if($O!==null)$ue["edit"]=lang(43);foreach($ue
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($Dh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ch){return
array();}function
backwardKeysPrint($Pa,$J){}function
selectQuery($G,$th,$Oc=false){global$x,$ec;$I="</p>\n";if(!$Oc&&($Si=$ec->warnings())){$t="warnings";$I=", <a href='#$t'>".lang(44)."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."$I<div id='$t' class='hidden'>\n$Si</div>\n";}return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$G))."</code> <span class='time'>(".format_time($th).")</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($G)."'>".lang(10)."</a>":"").$I;}function
sqlCommandQuery($G){return
shorten_utf8(trim($G),1000);}function
rowDescription($R){return"";}function
rowDescriptions($K,$dd){return$K;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$Bf){$I=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$I="<i>".lang(45,strlen($Bf))."</i>";if(preg_match('~json~',$o["type"]))$I="<code class='jush-js'>$I</code>";return($_?"<a href='".h($_)."'".(is_url($_)?target_blank():"").">$I</a>":$I);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr><th>".lang(46)."<td>".lang(47).(support("comment")?"<td>".lang(48):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(49)."</i>":""),(isset($o["default"])?" <span title='".lang(50)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$fg=array();foreach($v["columns"]as$y=>$X)$fg[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$fg)."\n";}echo"</table>\n";}function
selectColumnsPrint($L,$e){global$kd,$qd;print_fieldset("select",lang(51),$L);$s=0;$L[""]=array();foreach($L
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]'",$e,$X["col"],($y!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($kd||$qd?"<select name='columns[$s][fun]'>".optionlist(array(-1=>"")+array_filter(array(lang(52)=>$kd,lang(53)=>$qd)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($y!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(54),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"<div>(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"</div>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$bb="this.parentNode.firstChild.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]'",$e,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".lang(55).")"),html_select("where[$s][op]",$this->operators,$X["op"],$bb),"<input type='search' name='where[$s][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $bb }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($uf,$e,$w){print_fieldset("sort",lang(56),$uf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]'",$e,$X,"selectFieldChange"),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(57))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]'",$e,"","selectAddRow"),checkbox("desc[$s]",1,false,lang(57))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(58)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($Sh){if($Sh!==null){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Sh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(60)."</legend><div>","<input type='submit' value='".lang(51)."'>"," <span id='noindex' title='".lang(61)."'></span>","<script".nonce().">\n","var indexColumns = ";$e=array();foreach($w
as$v){$Kb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Kb)$e[$Kb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($sc,$e){}function
selectColumnsProcess($e,$w){global$kd,$qd;$L=array();$nd=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$kd)||in_array($X["fun"],$qd)))){$L[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$qd))$nd[]=$L[$y];}}return
array($L,$nd);}function
selectSearchProcess($p,$w){global$g,$x;$I=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$I[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if($X["op"]=="")$X["op"]="LIKE %%";if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$bg="";$xb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$Dd=process_length($X["val"]);$xb.=" ".($Dd!=""?$Dd:"(NULL)");}elseif($X["op"]=="SQL")$xb=" $X[val]";elseif($X["op"]=="LIKE %%")$xb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$xb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="FIND_IN_SET"){$bg="$X[op](".q($X["val"]).", ";$xb=")";}elseif(!preg_match('~NULL$~',$X["op"]))$xb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$I[]=$bg.idf_escape($X["col"]).$xb;else{$sb=array();foreach($p
as$C=>$o){$Wd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Wd)){$C=idf_escape($C);$sb[]=$bg.($x=="sql"&&$Wd&&!preg_match("~^utf8~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C).$xb;}}$I[]=($sb?"(".implode(" OR ",$sb).")":"0");}}}return$I;}function
selectOrderProcess($p,$w){$I=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$I[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$dd){return
false;}function
selectQueryBuild($L,$Z,$nd,$uf,$z,$E){return"";}function
messageQuery($G,$Th,$Oc=false){global$x,$ec;restart_session();$wd=&get_session("queries");if(!$wd[$_GET["db"]])$wd[$_GET["db"]]=array();if(strlen($G)>1e6)$G=preg_replace('~[\x80-\xFF]+$~','',substr($G,0,1e6))."\n...";$wd[$_GET["db"]][]=array($G,time(),$Th);$rh="sql-".count($wd[$_GET["db"]]);$I="<a href='#$rh' class='toggle'>".lang(62)."</a>\n";if(!$Oc&&($Si=$ec->warnings())){$t="warnings-".count($wd[$_GET["db"]]);$I="<a href='#$t' class='toggle'>".lang(44)."</a>, $I<div id='$t' class='hidden'>\n$Si</div>\n";}return" <span class='time'>".@date("H:i:s")."</span>"." $I<div id='$rh' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($G,1000)."</code></pre>".($Th?" <span class='time'>($Th)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($wd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$nc;$I=($o["null"]?"NULL/":"");foreach($nc
as$y=>$kd){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($kd
as$Tf=>$X){if(!$Tf||preg_match("~$Tf~",$o["type"]))$I.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$I.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$I=lang(49);return
explode("/",$I);}function
editInput($R,$o,$Ka,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ka value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ka value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ka,$o,$Y,0);return"";}function
editHint($R,$o,$Y){return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$I=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$I="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$I=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$I=idf_escape($C)." $r $I";elseif(preg_match('~^[+-] interval$~',$r))$I=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$I);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$I="$r(".idf_escape($C).", $I)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$I="$r($I)";return
unconvert_field($o,$I);}function
dumpOutput(){$I=array('text'=>lang(63),'file'=>lang(64));if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$yh,$Xd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($yh)dump_csv(array_keys(fields($R)));}else{if($Xd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"],$yh);set_utf8mb4($i);if($yh&&$i){if($yh=="DROP+CREATE"||$Xd==1)echo"DROP ".($Xd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Xd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$yh,$G){global$g,$x;$Be=($x=="sqlite"?0:1048576);if($yh){if($_POST["format"]=="sql"){if($yh=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$H=$g->query($G,1);if($H){$Pd="";$Ya="";$ee=array();$_h="";$Rc=($R!=''?'fetch_assoc':'fetch_row');while($J=$H->$Rc()){if(!$ee){$Ki=array();foreach($J
as$X){$o=$H->fetch_field();$ee[]=$o->name;$y=idf_escape($o->name);$Ki[]="$y = VALUES($y)";}$_h=($yh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Ki):"").";\n";}if($_POST["format"]!="sql"){if($yh=="table"){dump_csv($ee);$yh="INSERT";}dump_csv($J);}else{if(!$Pd)$Pd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$ee)).") VALUES";foreach($J
as$y=>$X){$o=$p[$y];$J[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Rg=($Be?"\n":" ")."(".implode(",\t",$J).")";if(!$Ya)$Ya=$Pd.$Rg;elseif(strlen($Ya)+4+strlen($Rg)+strlen($_h)<$Be)$Ya.=",$Rg";else{echo$Ya.$_h;$Ya=$Pd.$Rg;}}}if($Ya)echo$Ya.$_h;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($Ad){return
friendly_url($Ad!=""?$Ad:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Ad,$Qe=false){$Ef=$_POST["output"];$Jc=(preg_match('~sql~',$_POST["format"])?"sql":($Qe?"tar":"csv"));header("Content-Type: ".($Ef=="gz"?"application/x-gzip":($Jc=="tar"?"application/x-tar":($Jc=="sql"||$Ef!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Ef=="gz")ob_start('ob_gzencode',1e6);return$Jc;}function
importServerPath(){return"adminer.sql";}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(65)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(66):lang(67))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(68)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(69)."</a>\n":"");return
true;}function
navigation($Pe){global$ia,$x,$fc,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download"',target_blank(),' id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Pe=="auth"){$Xc=true;foreach((array)$_SESSION["pwds"]as$Mi=>$eh){foreach($eh
as$N=>$Hi){foreach($Hi
as$V=>$F){if($F!==null){if($Xc){echo"<p id='logins'>".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$Xc=false;}$Qb=$_SESSION["db"][$Mi][$N][$V];foreach(($Qb?array_keys($Qb):array(""))as$m)echo"<a href='".h(auth_url($Mi,$N,$V,$m))."'>($fc[$Mi]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Pe&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.6.0");if(support("sql")){echo'<script',nonce(),'>
';if($T){$ue=array();foreach($T
as$R=>$U)$ue[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ue).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?preg_replace('~^(\\d\\.?\\d).*~s','\\1',$g->server_info):""),'\');
</script>
';}$this->databasesPrint($Pe);if(DB==""||!$Pe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(62)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(70)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(71)."</a>\n";}if($_GET["ns"]!==""&&!$Pe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(72)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Pe){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Ob=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});");echo"<span title='".lang(73)."'>".lang(74)."</span>: ".($l?"<select name='db'>".optionlist(array(""=>"")+$l,DB)."</select>$Ob":"<input name='db' value='".h(DB)."' autocapitalize='off'>\n"),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Pe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(75).": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Ob";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(76)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$pf;function
page_header($Wh,$n="",$Xa=array(),$Xh=""){global$ca,$ia,$b,$fc,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Yh=$Wh.($Xh!=""?": $Xh":"");$Zh=strip_tags($Yh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(77),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$Zh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.6.0"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.6.0");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.0"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.0"),'">
';foreach($b->css()as$Ib){echo'<link rel="stylesheet" type="text/css" href="',h($Ib),'">
';}}echo'
<body class="',lang(77),' nojs">
';$Vc=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($Vc)&&filemtime($Vc)+86400>time()){$Ni=unserialize(file_get_contents($Vc));$mg="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Ni["version"],base64_decode($Ni["signature"]),$mg)==1)$_COOKIE["adminer_version"]=$Ni["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(78)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Xa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$fc[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Xa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Xa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Xa
as$y=>$X){$Wb=(is_array($X)?$X[1]:h($X));if($Wb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Wb</a> &raquo; ";}}echo"$Wh\n";}}echo"<h2>$Yh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Hb){$vd=array();foreach($Hb
as$y=>$X)$vd[]="$y $X";header("Content-Security-Policy: ".implode("; ",$vd));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$Ze;if(!$Ze)$Ze=base64_encode(rand_string());return$Ze;}function
page_messages($n){$Ai=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Le=$_SESSION["messages"][$Ai];if($Le){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Le)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$Ai]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Pe=""){global$b,$di;echo'</div>

';switch_lang();if($Pe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(79),'" id="logout">
<input type="hidden" name="token" value="',$di,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Pe);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Se){while($Se>=2147483648)$Se-=4294967296;while($Se<=-2147483649)$Se+=4294967296;return(int)$Se;}function
long2str($W,$Ri){$Rg='';foreach($W
as$X)$Rg.=pack('V',$X);if($Ri)return
substr($Rg,0,end($W));return$Rg;}function
str2long($Rg,$Ri){$W=array_values(unpack('V*',str_pad($Rg,4*ceil(strlen($Rg)/4),"\0")));if($Ri)$W[]=strlen($Rg);return$W;}function
xxtea_mx($ej,$dj,$Ah,$ae){return
int32((($ej>>5&0x7FFFFFF)^$dj<<2)+(($dj>>3&0x1FFFFFFF)^$ej<<4))^int32(($Ah^$dj)+($ae^$ej));}function
encrypt_string($wh,$y){if($wh=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($wh,true);$Se=count($W)-1;$ej=$W[$Se];$dj=$W[0];$ng=floor(6+52/($Se+1));$Ah=0;while($ng-->0){$Ah=int32($Ah+0x9E3779B9);$mc=$Ah>>2&3;for($Ff=0;$Ff<$Se;$Ff++){$dj=$W[$Ff+1];$Re=xxtea_mx($ej,$dj,$Ah,$y[$Ff&3^$mc]);$ej=int32($W[$Ff]+$Re);$W[$Ff]=$ej;}$dj=$W[0];$Re=xxtea_mx($ej,$dj,$Ah,$y[$Ff&3^$mc]);$ej=int32($W[$Se]+$Re);$W[$Se]=$ej;}return
long2str($W,false);}function
decrypt_string($wh,$y){if($wh=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($wh,false);$Se=count($W)-1;$ej=$W[$Se];$dj=$W[0];$ng=floor(6+52/($Se+1));$Ah=int32($ng*0x9E3779B9);while($Ah){$mc=$Ah>>2&3;for($Ff=$Se;$Ff>0;$Ff--){$ej=$W[$Ff-1];$Re=xxtea_mx($ej,$dj,$Ah,$y[$Ff&3^$mc]);$dj=int32($W[$Ff]-$Re);$W[$Ff]=$dj;}$ej=$W[$Se];$Re=xxtea_mx($ej,$dj,$Ah,$y[$Ff&3^$mc]);$dj=int32($W[0]-$Re);$W[0]=$dj;$Ah=int32($Ah-0x9E3779B9);}return
long2str($W,true);}$g='';$ud=$_SESSION["token"];if(!$ud)$_SESSION["token"]=rand(1,1e6);$di=get_token();$Uf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Uf[$y]=$X;}}function
add_invalid_login(){global$b;$id=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$id)return;$Sd=unserialize(stream_get_contents($id));$Th=time();if($Sd){foreach($Sd
as$Td=>$X){if($X[0]<$Th)unset($Sd[$Td]);}}$Rd=&$Sd[$b->bruteForceKey()];if(!$Rd)$Rd=array($Th+30*60,0);$Rd[1]++;file_write_unlock($id,serialize($Sd));}function
check_invalid_login(){global$b;$Sd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Rd=$Sd[$b->bruteForceKey()];$Ye=($Rd[1]>29?$Rd[0]-time():0);if($Ye>0)auth_error(lang(80,ceil($Ye/60)));}$La=$_POST["auth"];if($La){session_regenerate_id();$Mi=$La["driver"];$N=$La["server"];$V=$La["username"];$F=(string)$La["password"];$m=$La["db"];set_password($Mi,$N,$V,$F);$_SESSION["db"][$Mi][$N][$V][$m]=true;if($La["permanent"]){$y=base64_encode($Mi)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$gg=$b->permanentLogin(true);$Uf[$y]="$y:".base64_encode($gg?encrypt_string($F,$gg):"");cookie("adminer_permanent",implode(" ",$Uf));}if(count($_POST)==1||DRIVER!=$Mi||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Mi,$N,$V,$m));}elseif($_POST["logout"]){if($ud&&!verify_token()){page_header(lang(79),lang(81));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(82).' '.lang(83,'https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($Uf&&!$_SESSION["pwds"]){session_regenerate_id();$gg=$b->permanentLogin();foreach($Uf
as$y=>$X){list(,$jb)=explode(":",$X);list($Mi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Mi,$N,$V,decrypt_string(base64_decode($jb),$gg));$_SESSION["db"][$Mi][$N][$V][$m]=true;}}function
unset_permanent(){global$Uf;foreach($Uf
as$y=>$X){list($Mi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($Mi==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Uf[$y]);}cookie("adminer_permanent",implode(" ",$Uf));}function
auth_error($n){global$b,$ud;$fh=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$fh]||$_GET[$fh])&&!$ud)$n=lang(84);else{add_invalid_login();$F=get_password();if($F!==null){if($F===false)$n.='<br>'.lang(85,target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$fh]&&$_GET[$fh]&&ini_bool("session.use_only_cookies"))$n=lang(86);$Hf=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Hf["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(87),lang(88,implode(", ",$ag)),false);page_footer("auth");exit;}list($zd,$Wf)=explode(":",SERVER,2);if(is_numeric($Wf)&&$Wf<1024)auth_error(lang(89));check_invalid_login();$g=connect();$ec=new
Min_Driver($g);}if(!is_object($g)||($ve=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($ve)?$ve:lang(90))));if($La&&$_POST["token"])$_POST["token"]=$di;$n='';if($_POST){if(!verify_token()){$Md="max_input_vars";$Fe=ini_get($Md);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Fe||$X<$Fe)){$Md=$y;$Fe=$X;}}}$n=(!$_POST["token"]&&$Fe?lang(91,"'$Md'"):lang(81).' '.lang(92));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(93,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(94);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($H,$h=null,$xf=array(),$z=0){global$x;$ue=array();$w=array();$e=array();$Ua=array();$si=array();$I=array();odd('');for($s=0;(!$z||$s<$z)&&($J=$H->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Zd=0;$Zd<count($J);$Zd++){$o=$H->fetch_field();$C=$o->name;$wf=$o->orgtable;$vf=$o->orgname;$I[$o->table]=$wf;if($xf&&$x=="sql")$ue[$Zd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($wf!=""){if(!isset($w[$wf])){$w[$wf]=array();foreach(indexes($wf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$wf]=array_flip($v["columns"]);break;}}$e[$wf]=$w[$wf];}if(isset($e[$wf][$vf])){unset($e[$wf][$vf]);$w[$wf][$vf]=$Zd;$ue[$Zd]=$wf;}}if($o->charsetnr==63)$Ua[$Zd]=true;$si[$Zd]=$o->type;echo"<th".($wf!=""||$o->name!=$vf?" title='".h(($wf!=""?"$wf.":"").$vf)."'":"").">".h($C).($xf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ua[$y]&&!is_utf8($X))$X="<i>".lang(45,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($si[$y]==254)$X="<code>$X</code>";}if(isset($ue[$y])&&!$e[$ue[$y]]){if($xf&&$x=="sql"){$R=$J[array_search("table=",$ue)];$_=$ue[$y].urlencode($xf[$R]!=""?$xf[$R]:$R);}else{$_="edit=".urlencode($ue[$y]);foreach($w[$ue[$y]]as$nb=>$Zd)$_.="&where".urlencode("[".bracket_escape($nb)."]")."=".urlencode($J[$Zd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$I;}function
referencable_primary($ah){$I=array();foreach(table_status('',true)as$Eh=>$R){if($Eh!=$ah&&fk_support($R)){foreach(fields($Eh)as$o){if($o["primary"]){if($I[$Eh]){unset($I[$Eh]);break;}$I[$Eh]=$o;}}}}return$I;}function
textarea($C,$Y,$K=10,$sb=80){global$x;echo"<textarea name='$C' rows='$K' cols='$sb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$qb,$ed=array(),$Mc=array()){global$xh,$si,$zi,$kf;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" aria-labelledby="label-type">';if($U&&!isset($si[$U])&&!isset($ed[$U])&&!in_array($U,$Mc))$Mc[]=$U;if($ed)$xh[lang(95)]=$ed;echo
optionlist(array_merge($Mc,$xh),$U),'</select>
',on_help("getTarget(event).value",1),script("mixin(qsl('select'), {onfocus: function () { lastType = selectValue(this); }, onchange: editingTypeChange});",""),'<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' aria-labelledby="label-length">',script("mixin(qsl('input'), {onfocus: editingLengthFocus, oninput: editingLengthChange});",""),'<td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(96).')'.optionlist($qb,$o["collation"]).'</select>',($zi?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($zi,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(97).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($ed?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(98).")".optionlist(explode("|",$kf),$o["on_delete"])."</select> ":" ");}function
process_length($re){global$xc;return(preg_match("~^\\s*\\(?\\s*$xc(?:\\s*,\\s*$xc)*+\\s*\\)?\\s*\$~",$re)&&preg_match_all("~$xc~",$re,$_e)?"(".implode(",",$_e[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$re)));}function
process_type($o,$ob="COLLATE"){global$zi;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$zi)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $ob ".q($o["collation"]):"");}function
process_field($o,$qi){global$x;$Sb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($qi),($o["null"]?" NULL":" NOT NULL"),(isset($Sb)?" DEFAULT ".(preg_match('~char|binary|text|enum|set~',$o["type"])||preg_match('~^(?![a-z])~i',$Sb)?q($Sb):$Sb):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$qb,$U="TABLE",$ed=array(),$wb=false){global$Nd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(99):lang(100)),'<td id="label-type">',lang(47),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">',lang(101),'<td>',lang(102);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(49),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(50),(support("comment")?"<td id='label-comment'".($wb?"":" class='hidden'").">".lang(48):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".lang(103)."'>".script("row_count = ".count($p).";"),'</thead>
<tbody>
',script("qsl('tbody').onkeydown = editingKeydown;");foreach($p
as$s=>$o){$s++;$yf=$o[($_POST?"orig":"field")];$ac=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$yf=="");echo'<tr',($ac?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Nd),$o["inout"]):""),'<th>';if($ac){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">',script("qsl('input').oninput = function () { editingNameChange.call(this);".($o["field"]!=""||count($p)>1?"":" editingAddRow.call(this);")." };","");}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($yf),'">
';edit_type("fields[$s]",$o,$qb,$ed);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai">',script("qsl('input').onclick = function () { var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.oninput(); } }"),'</label><td>',checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" aria-labelledby="label-default">',script("qsl('input').oninput = function () { this.previousSibling.checked = true; }",""),(support("comment")?"<td".($wb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".(min_version(5.5)?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".lang(103)."'>&nbsp;".script("qsl('input').onclick = partial(editingAddRow, 1);","")."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.6.0")."' alt='^' title='".lang(104)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 1);","")."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.6.0")."' alt='v' title='".lang(105)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 0);",""):""),($yf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.6.0")."' alt='x' title='".lang(106)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'fields\$1[field]');"):"");}}function
process_fields(&$p){$D=0;if($_POST["up"]){$le=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$le,0,array($o));break;}if(isset($o["field"]))$le=$D;$D++;}}elseif($_POST["down"]){$gd=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$gd){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($gd));break;}if(key($_POST["down"])==$y)$gd=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($ld,$ig,$e,$jf){if(!$ig)return
true;if($ig==array("ALL PRIVILEGES","GRANT OPTION"))return($ld=="GRANT"?queries("$ld ALL PRIVILEGES$jf WITH GRANT OPTION"):queries("$ld ALL PRIVILEGES$jf")&&queries("$ld GRANT OPTION$jf"));return
queries("$ld ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$ig).$e).$jf);}function
drop_create($gc,$i,$hc,$Qh,$jc,$A,$Ke,$Ie,$Je,$gf,$Ve){if($_POST["drop"])query_redirect($gc,$A,$Ke);elseif($gf=="")query_redirect($i,$A,$Je);elseif($gf!=$Ve){$Gb=queries($i);queries_redirect($A,$Ie,$Gb&&queries($gc));if($Gb)queries($hc);}else
queries_redirect($A,$Ie,queries($Qh)&&queries($jc)&&queries($gc)&&queries($i));}function
create_trigger($jf,$J){global$x;$Vh=" $J[Timing] $J[Event]".($J["Event"]=="UPDATE OF"?" ".idf_escape($J["Of"]):"");return"CREATE TRIGGER ".idf_escape($J["Trigger"]).($x=="mssql"?$jf.$Vh:$Vh.$jf).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
create_routine($Ng,$J){global$Nd,$x;$O=array();$p=(array)$J["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($Nd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}$Tb=rtrim("\n$J[definition]",";");return"CREATE $Ng ".idf_escape(trim($J["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").($x=="pgsql"?" AS ".q($Tb):"$Tb;");}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$G);}function
format_foreign_key($q){global$kf;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($kf)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($kf)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Vc,$ai){$I=pack("a100a8a8a8a12a12",$Vc,644,0,0,decoct($ai->size),decoct(time()));$hb=8*32;for($s=0;$s<strlen($I);$s++)$hb+=ord($I[$s]);$I.=sprintf("%06o",$hb)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$ai->send();echo
str_repeat("\0",511-($ai->size+511)%512);}function
ini_bytes($Md){$X=ini_get($Md);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Sf){global$x,$g;$Ni=preg_replace('~^(\\d\\.?\\d).*~s','\\1',$g->server_info);$Di=array('sql'=>"https://dev.mysql.com/doc/refman/$Ni/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/$Ni/static/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Sf[$x]?"<a href='$Di[$x]$Sf[$x]'".target_blank()."><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$I=0;foreach(table_status()as$S)$I+=$S["Data_length"]+$S["Index_length"];return
format_number($I);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$di,$n,$fc;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(107),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(108),drop_databases($_POST["db"]));page_header(lang(109),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(110),'privileges'=>lang(69),'processlist'=>lang(111),'variables'=>lang(112),'status'=>lang(113),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(114,$fc[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(115,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Ug=support("scheme");$qb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(116)."</a>"."<td>".lang(117)."<td>".lang(118)."<td>".lang(119)." - <a href='".h(ME)."dbsize=1'>".lang(120)."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$Mg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$Mg' id='$m'>".h($m)."</a>";$pb=nbsp(db_collation($m,$qb));echo"<td>".(support("database")?"<a href='$Mg".($Ug?"&amp;ns=":"")."&amp;database=' title='".lang(65)."'>$pb</a>":$pb),"<td align='right'><a href='$Mg&amp;schema=' id='tables-".h($m)."' title='".lang(68)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(121)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".lang(122)."'>".confirm()."\n"."</div></fieldset>\n":""),script("tableCheck();"),"<input type='hidden' name='token' value='$di'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(75).": ".h($_GET["ns"]),lang(123),true);page_footer("ns");exit;}}$kf="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Ab){$this->size+=strlen($Ab);fwrite($this->handler,$Ab);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$xc="'(?:''|[^'\\\\]|\\\\.)*'";$Nd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$L=array(idf_escape($_GET["field"]));$H=$ec->select($a,$L,array(where($_GET,$p)),$L);$J=($H?$H->fetch_row():array());echo$J[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(124):lang(125):lang(126)).": ".h($a),$n);$b->selectLinks($S);$vb=$S["Comment"];if($vb!="")echo"<p class='nowrap'>".lang(48).": ".h($vb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(127)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(128)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(95)."</h3>\n";$ed=foreign_keys($a);if($ed){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(129)."<td>".lang(130)."<td>".lang(98)."<td>".lang(97)."<td>&nbsp;</thead>\n";foreach($ed
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(131).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(132)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(133)."</h3>\n";$pi=triggers($a);if($pi){echo"<table cellspacing='0'>\n";foreach($pi
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(131)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(134)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(68),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Gh=array();$Hh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$_e,PREG_SET_ORDER);foreach($_e
as$s=>$B){$Gh[$B[1]]=array($B[2],$B[3]);$Hh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$ei=0;$Ra=-1;$Tg=array();$zg=array();$pe=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Xf=0;$Tg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Xf+=1.25;$o["pos"]=$Xf;$Tg[$R]["fields"][$C]=$o;}$Tg[$R]["pos"]=($Gh[$R]?$Gh[$R]:array($ei,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$ne=$Ra;if($Gh[$R][1]||$Gh[$X["table"]][1])$ne=min(floatval($Gh[$R][1]),floatval($Gh[$X["table"]][1]))-1;else$Ra-=.1;while($pe[(string)$ne])$ne-=.0001;$Tg[$R]["references"][$X["table"]][(string)$ne]=array($X["source"],$X["target"]);$zg[$X["table"]][$R][(string)$ne]=$X["target"];$pe[(string)$ne]=true;}}$ei=max($ei,$Tg[$R]["pos"][0]+2.5+$Xf);}echo'<div id="schema" style="height: ',$ei,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$Hh)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$ei,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($Tg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$Nh=>$_g){foreach($_g
as$ne=>$wg){$oe=$ne-$Gh[$C][1];$s=0;foreach($wg[0]as$mh)echo"\n<div class='references' title='".h($Nh)."' id='refs$ne-".($s++)."' style='left: $oe"."em; top: ".$R["fields"][$mh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$oe)."em;'></div></div>";}}foreach((array)$zg[$C]as$Nh=>$_g){foreach($_g
as$ne=>$e){$oe=$ne-$Gh[$C][1];$s=0;foreach($e
as$Mh)echo"\n<div class='references' title='".h($Nh)."' id='refd$ne-".($s++)."' style='left: $oe"."em; top: ".$R["fields"][$Mh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.6.0")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$oe)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Tg
as$C=>$R){foreach((array)$R["references"]as$Nh=>$_g){foreach($_g
as$ne=>$wg){$Oe=$ei;$De=-10;foreach($wg[0]as$y=>$mh){$Yf=$R["pos"][0]+$R["fields"][$mh]["pos"];$Zf=$Tg[$Nh]["pos"][0]+$Tg[$Nh]["fields"][$wg[1][$y]]["pos"];$Oe=min($Oe,$Yf,$Zf);$De=max($De,$Yf,$Zf);}echo"<div class='references' id='refl$ne' style='left: $ne"."em; top: $Oe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($De-$Oe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(135),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Db="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Db.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Db,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Jc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Vd=preg_match('~sql~',$_POST["format"]);if($Vd){echo"-- Adminer $ia ".$fc[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$yh=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Vd&&preg_match('~CREATE~',$yh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($yh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Vd){if($yh)echo
use_sql($m).";\n\n";$Df="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ng){foreach(get_rows("SHOW $Ng STATUS WHERE Db = ".q($m),null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE $Ng ".idf_escape($J["Name"]),2));set_utf8mb4($i);$Df.=($yh!='DROP+CREATE'?"DROP $Ng IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3));set_utf8mb4($i);$Df.=($yh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}if($Df)echo"DELIMITER ;;\n\n$Df"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Pi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Lb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Lb){if($Jc=="tar"){$ai=new
TmpFile;ob_start(array($ai,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$Pi[]=$C;elseif($Lb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Vd&&$_POST["triggers"]&&$R&&($pi=trigger_sql($C)))echo"\nDELIMITER ;;\n$pi\nDELIMITER ;\n";if($Jc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$ai);}elseif($Vd)echo"\n";}}foreach($Pi
as$Oi)$b->dumpTable($Oi,$_POST["table_style"],1);if($Jc=="tar")echo
pack("x512");}}}if($Vd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(71),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Pb=array('','USE','DROP+CREATE','CREATE');$Ih=array('','DROP+CREATE','CREATE');$Mb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Mb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$J);if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".lang(136)."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".lang(137)."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Pb,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],lang(138)):"").(support("event")?checkbox("events",1,$J["events"],lang(139)):"")),"<tr><th>".lang(118)."<td>".html_select('table_style',$Ih,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],lang(49)).(support("trigger")?checkbox("triggers",1,$J["triggers"],lang(133)):""),"<tr><th>".lang(140)."<td>".html_select('data_style',$Mb,$J["data_style"]),'</table>
<p><input type="submit" value="',lang(71),'">
<input type="hidden" name="token" value="',$di,'">

<table cellspacing="0">
';$cg=array();if(DB!=""){$fb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$fb>".lang(118)."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".lang(140)."<input type='checkbox' id='check-data'$fb></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$Pi="";$Jh=tables_list();foreach($Jh
as$C=>$U){$bg=preg_replace('~_.*~','',$C);$fb=($a==""||$a==(substr($a,-1)=="%"?"$bg%":$C));$fg="<tr><td>".checkbox("tables[]",$C,$fb,$C,"checkboxClick.call(this, event); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Pi.="$fg\n";else
echo"$fg<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$fb,"","checkboxClick.call(this, event); formUncheck('check-data');")."</label>\n";$cg[$bg]++;}echo$Pi;if($Jh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".lang(35)."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$bg=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$bg%",$m,"formUncheck('check-databases');","block")."\n";$cg[$bg]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Xc=true;foreach($cg
as$y=>$X){if($y!=""&&$X>1){echo($Xc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Xc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(69));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(141)."</a>";$H=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$ld=$H;if(!$H)$H=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($ld?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($J=$H->fetch_assoc())echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.lang(10)."</a>\n";if(!$ld||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$xd=&get_session("queries");$wd=&$xd[DB];if(!$n&&$_POST["clear"]){$wd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(70):lang(62)),$n);if(!$n&&$_POST){$id=false;if(!isset($_GET["import"]))$G=$_POST["query"];elseif($_POST["webfile"]){$qh=$b->importServerPath();$id=@fopen((file_exists($qh)?$qh:"compress.zlib://$qh.gz"),"rb");$G=($id?fread($id,1e6):false);}else$G=get_file("sql_file",true);if(is_string($G)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));if($G!=""&&strlen($G)<1e6){$ng=$G.(preg_match("~;[ \t\r\n]*\$~",$G)?"":";");if(!$wd||reset(end($wd))!=$ng){restart_session();$wd[]=array($ng,time());set_session("queries",$xd);stop_session();}}$nh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Vb=";";$D=0;$uc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$ub=0;$zc=array();$Jf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$fi=microtime(true);parse_str($_COOKIE["adminer_export"],$ya);$lc=$b->dumpFormat();unset($lc["sql"]);while($G!=""){if(!$D&&preg_match("~^$nh*+DELIMITER\\s+(\\S+)~i",$G,$B)){$Vb=$B[1];$G=substr($G,strlen($B[0]));}else{preg_match('('.preg_quote($Vb)."\\s*|$Jf)",$G,$B,PREG_OFFSET_CAPTURE,$D);list($gd,$Xf)=$B[0];if(!$gd&&$id&&!feof($id))$G.=fread($id,1e5);else{if(!$gd&&rtrim($G)=="")break;$D=$Xf+strlen($gd);if($gd&&rtrim($gd)!=$Vb){while(preg_match('('.($gd=='/*'?'\\*/':($gd=='['?']':(preg_match('~^-- |^#~',$gd)?"\n":preg_quote($gd)."|\\\\."))).'|$)s',$G,$B,PREG_OFFSET_CAPTURE,$D)){$Rg=$B[0][0];if(!$Rg&&$id&&!feof($id))$G.=fread($id,1e5);else{$D=$B[0][1]+strlen($Rg);if($Rg[0]!="\\")break;}}}else{$uc=false;$ng=substr($G,0,$Xf);$ub++;$fg="<pre id='sql-$ub'><code class='jush-$x'>".$b->sqlCommandQuery($ng)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$nh*+ATTACH\\b~i",$ng,$B)){echo$fg,"<p class='error'>".lang(142)."\n";$zc[]=" <a href='#sql-$ub'>$ub</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$fg;ob_flush();flush();}$th=microtime(true);if($g->multi_query($ng)&&is_object($h)&&preg_match("~^$nh*+USE\\b~i",$ng))$h->query($ng);do{$H=$g->store_result();if($g->error){echo($_POST["only_errors"]?$fg:""),"<p class='error'>".lang(143).($g->errno?" ($g->errno)":"").": ".error()."\n";$zc[]=" <a href='#sql-$ub'>$ub</a>";if($_POST["error_stops"])break
2;}else{$Th=" <span class='time'>(".format_time($th).")</span>".(strlen($ng)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ng))."'>".lang(10)."</a>":"");$_a=$g->affected_rows;$Si=($_POST["only_errors"]?"":$ec->warnings());$Ti="warnings-$ub";if($Si)$Th.=", <a href='#$Ti'>".lang(44)."</a>".script("qsl('a').onclick = partial(toggle, '$Ti');","");$Gc=null;$Hc="explain-$ub";if(is_object($H)){$z=$_POST["limit"];$xf=select($H,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$af=$H->num_rows;echo"<p>".($af?($z&&$af>$z?lang(144,$z):"").lang(145,$af):""),$Th;if($h&&preg_match("~^($nh|\\()*+SELECT\\b~i",$ng)&&($Gc=explain($h,$ng)))echo", <a href='#$Hc'>Explain</a>".script("qsl('a').onclick = partial(toggle, '$Hc');","");$t="export-$ub";echo", <a href='#$t'>".lang(71)."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."<span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$ya["output"])." ".html_select("format",$lc,$ya["format"])."<input type='hidden' name='query' value='".h($ng)."'>"." <input type='submit' name='export' value='".lang(71)."'><input type='hidden' name='token' value='$di'></span>\n"."</form>\n";}}else{if(preg_match("~^$nh*+(CREATE|DROP|ALTER)$nh++(DATABASE|SCHEMA)\\b~i",$ng)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(146,$_a)."$Th\n";}echo($Si?"<div id='$Ti' class='hidden'>\n$Si</div>\n":"");if($Gc){echo"<div id='$Hc' class='hidden'>\n";select($Gc,$h,$xf);echo"</div>\n";}}$th=microtime(true);}while($g->next_result());}$G=substr($G,$D);$D=0;}}}}if($uc)echo"<p class='message'>".lang(147)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(148,$ub-count($zc))," <span class='time'>(".format_time($fi).")</span>\n";}elseif($zc&&$ub>1)echo"<p class='error'>".lang(143).": ".implode("",$zc)."\n";}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Dc="<input type='submit' value='".lang(149)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$ng=$_GET["sql"];if($_POST)$ng=$_POST["query"];elseif($_GET["history"]=="all")$ng=$wd;elseif($_GET["history"]!="")$ng=$wd[$_GET["history"]][0];echo"<p>";textarea("query",$ng,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>$Dc\n",lang(150).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(151)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Dc":lang(152)),"</div></fieldset>\n","<fieldset><legend>".lang(153)."</legend><div>",lang(154,"<code>".h($b->importServerPath()).(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(155).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(156))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(157))."\n","<input type='hidden' name='token' value='$di'>\n";if(!isset($_GET["import"])&&$wd){print_fieldset("history",lang(158),$_GET["history"]!="");for($X=end($wd);$X;$X=prev($wd)){$y=key($wd);list($ng,$Th,$pc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Th)."'>".@date("H:i:s",$Th)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$ng)))),80,"</code>").($pc?" <span class='time'>($pc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(159)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(160)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$_i=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$_i?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($_i?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$vi=unique_array($_GET["where"],$w);$qg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(161),$ec->delete($a,$qg,!$vi));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($_i){if(!$O)redirect($A);queries_redirect($A,lang(162),$ec->update($a,$O,$qg,!$vi));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$H=$ec->insert($a,$O);$me=($H?last_id():0);queries_redirect($A,lang(163,($me?" $me":"")),$H);}}}$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ha=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ha="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ha="1*".idf_escape($C);$L[]=($Ha?"$Ha AS ":"").idf_escape($C);}}$J=array();if(!support("table"))$L=array("*");if($L){$H=$ec->select($a,$L,array($Z),$L,array(),(isset($_GET["select"])?2:1));if(!$H)$n=error();else{$J=$H->fetch_assoc();if(!$J)$J=false;}if(isset($_GET["select"])&&(!$J||$H->fetch_assoc()))$J=null;}}if(!support("table")&&!$p){if(!$Z){$H=$ec->select($a,array("*"),$Z,array("*"));$J=($H?$H->fetch_assoc():false);if(!$J)$J=array($ec->primary=>"");}if($J){foreach($J
as$y=>$X){if(!$Z)$J[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$ec->primary),"auto_increment"=>($y==$ec->primary));}}}edit_form($a,$p,$J,$_i);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Lf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$Lf[$y]=$y;$yg=referencable_primary($a);$ed=array();foreach($yg
as$Eh=>$o)$ed[str_replace("`","``",$Eh)."`".str_replace("`","``",$o["field"])]=$Eh;$_f=array();$S=array();if($a!=""){$_f=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($J["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(164),drop_tables(array($a)));else{$p=array();$Ea=array();$Ei=false;$cd=array();$zf=reset($_f);$Ba=" FIRST";foreach($J["fields"]as$y=>$o){$q=$ed[$o["type"]];$qi=($q!==null?$yg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$J["auto_increment_col"])$o["auto_increment"]=true;$kg=process_field($o,$qi);$Ea[]=array($o["orig"],$kg,$Ba);if($kg!=process_field($zf,$zf)){$p[]=array($o["orig"],$kg,$Ba);if($o["orig"]!=""||$Ba)$Ei=true;}if($q!==null)$cd[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$ed[$o["type"]],'source'=>array($o["field"]),'target'=>array($qi["field"]),'on_delete'=>$o["on_delete"],));$Ba=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Ei=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$zf=next($_f);if(!$zf)$Ba="";}}$Nf="";if($Lf[$J["partition_by"]]){$Of=array();if($J["partition_by"]=='RANGE'||$J["partition_by"]=='LIST'){foreach(array_filter($J["partition_names"])as$y=>$X){$Y=$J["partition_values"][$y];$Of[]="\n  PARTITION ".idf_escape($X)." VALUES ".($J["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Nf.="\nPARTITION BY $J[partition_by]($J[partition])".($Of?" (".implode(",",$Of)."\n)":($J["partitions"]?" PARTITIONS ".(+$J["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Nf.="\nREMOVE PARTITIONING";$He=lang(165);if($a==""){cookie("adminer_engine",$J["Engine"]);$He=lang(166);}$C=trim($J["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$He,alter_table($a,$C,($x=="sqlite"&&($Ei||$cd)?$Ea:$p),$cd,($J["Comment"]!=$S["Comment"]?$J["Comment"]:null),($J["Engine"]&&$J["Engine"]!=$S["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$S["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?number($J["Auto_increment"]):""),$Nf));}}page_header(($a!=""?lang(42):lang(72)),$n,array("table"=>$a),h($a));if(!$_POST){$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($si["int"])?"int":(isset($si["integer"])?"integer":"")),"on_update"=>"")),"partition_names"=>array(""),);if($a!=""){$J=$S;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($_f
as$o){$o["has_default"]=isset($o["default"]);$J["fields"][]=$o;}if(support("partitioning")){$jd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $jd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$Of=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $jd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Of[""]="";$J["partition_names"]=array_keys($Of);$J["partition_values"]=array_values($Of);}}}$qb=collations();$wc=engines();foreach($wc
as$vc){if(!strcasecmp($vc,$J["Engine"])){$J["Engine"]=$vc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(167),': <input name="name" maxlength="64" value="',h($J["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($wc?"<select name='Engine'>".optionlist(array(""=>"(".lang(168).")")+$wc,$J["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($qb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(96).")")+$qb,$J["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$wb=($_POST?$_POST["comments"]:$J["Comment"]!="");if(!$_POST&&!$wb){foreach($J["fields"]as$o){if($o["comment"]!=""){$wb=true;break;}}}edit_fields($J["fields"],$qb,"TABLE",$ed,$wb);echo'</table>
<p>
',lang(49),': <input type="number" name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(169),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"])echo
script("editingHideDefaults();");echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly'".($wb?" checked":"").">".lang(48)."</label>".script("qsl('input').onclick = function () { columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus(); };").' <input name="Comment" id="Comment" value="'.h($J["Comment"]).'" maxlength="'.(min_version(5.5)?2048:60).'"'.($wb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$a));}if(support("partitioning")){$Mf=preg_match('~RANGE|LIST~',$J["partition_by"]);print_fieldset("partition",lang(171),$J["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$Lf,$J["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($J["partition"]),'">)
',lang(172),': <input type="number" name="partitions" class="size',($Mf||!$J["partition_by"]?" hidden":""),'" value="',h($J["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Mf?"":" class='hidden'"),'>
<thead><tr><th>',lang(173),'<th>',lang(174),'</thead>
';foreach($J["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($y==count($J["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($J["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Fd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.(min_version(5.6,'10.0.5')?'|InnoDB':'').'~i',$S["Engine"]))$Fd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.(min_version(5.7,'10.2.2')?'|InnoDB':'').'~i',$S["Engine"]))$Fd[]="SPATIAL";$w=indexes($a);$dg=array();if($x=="mongo"){$dg=$w["_id_"];unset($Fd[0]);unset($w["_id_"]);}$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($J["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$Fd)){$e=array();$se=array();$Xb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$re=$v["lengths"][$y];$Wb=$v["descs"][$y];$O[]=idf_escape($d).($re?"(".(+$re).")":"").($Wb?" DESC":"");$e[]=$d;$se[]=($re?$re:null);$Xb[]=$Wb;}}if($e){$Ec=$w[$C];if($Ec){ksort($Ec["columns"]);ksort($Ec["lengths"]);ksort($Ec["descs"]);if($v["type"]==$Ec["type"]&&array_values($Ec["columns"])===$e&&(!$Ec["lengths"]||array_values($Ec["lengths"])===$se)&&array_values($Ec["descs"])===$Xb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$Ec)$c[]=array($Ec["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(175),alter_indexes($a,$c));}page_header(lang(127),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($J["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$J["indexes"][$y]["columns"][]="";}$v=end($J["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$J["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(176),'<th><input type="submit" class="wayoff">',lang(177),'<th id="label-name">',lang(178);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME) . "?file=plus.gif&version=4.6.0") . "' alt='+' title='<?php echo
lang(103),'\'></noscript>&nbsp;
</thead>
';if($dg){echo"<tr><td>PRIMARY<td>";foreach($dg["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(57)."</label> ";}echo"<td><td>\n";}$Zd=1;foreach($J["indexes"]as$v){if(!$_POST["drop_col"]||$Zd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Zd][type]",array(-1=>"")+$Fd,$v["type"],($Zd==count($J["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Zd][columns][$s]' title='".lang(46)."'",($p?array_combine($p,$p):$p),$d,"partial(".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($x=="sql"?"":$_GET["indexes"]."_")."')"),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Zd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(101)."'>":""),($x!="sql"?checkbox("indexes[$Zd][descs][$s]",1,$v["descs"][$y],lang(57)):"")," </span>";$s++;}echo"<td><input name='indexes[$Zd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Zd]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.6.0")."' alt='x' title='".lang(106)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$Zd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(179),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(180),rename_database($C,$J["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$zh=true;$le="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$J["collation"]))$zh=false;$le=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($le),lang(181),$zh);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),lang(182));}}page_header(DB!=""?lang(65):lang(110),$n,array(),h(DB));$qb=collations();$C=DB;if($_POST)$C=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$qb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$ld){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ld,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($qb?html_select("collation",array(""=>"(".lang(96).")")+$qb,$J["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(122)."'>".confirm(lang(170,DB))."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".lang(103)."'>\n";echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(183));else{$C=trim($J["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(184));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(185));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(66):lang(67),$n);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($J["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(122)."'>".confirm(lang(170,$_GET["ns"]))."\n";echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["call"])){$da=($_GET["name"]?$_GET["name"]:$_GET["call"]);page_header(lang(186).": ".h($da),$n);$Ng=routine($_GET["call"],(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Dd=array();$Df=array();foreach($Ng["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$Df[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$Dd[]=$s;}if(!$n&&$_POST){$ab=array();foreach($Ng["fields"]as$y=>$o){if(in_array($y,$Dd)){$X=process_input($o);if($X===false)$X="''";if(isset($Df[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$ab[]=(isset($Df[$y])?"@".idf_escape($o["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$ab).")";$th=microtime(true);$H=$g->multi_query($G);$_a=$g->affected_rows;echo$b->selectQuery($G,$th,!$H);if(!$H)echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$H=$g->store_result();if(is_object($H))select($H,$h);else
echo"<p class='message'>".lang(187,$_a)."\n";}while($g->next_result());if($Df)select($g->query("SELECT ".implode(", ",$Df)));}}echo'
<form action="" method="post">
';if($Dd){echo"<table cellspacing='0'>\n";foreach($Dd
as$y){$o=$Ng["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(186),'">
<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$He=($_POST["drop"]?lang(188):($C!=""?lang(189):lang(190)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$J["source"]=array_filter($J["source"],'strlen');ksort($J["source"]);$Mh=array();foreach($J["source"]as$y=>$X)$Mh[$y]=$J["target"][$y];$J["target"]=$Mh;}if($x=="sqlite")queries_redirect($A,$He,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($J)))));else{$c="ALTER TABLE ".table($a);$gc="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$gc,$A,$He);else{query_redirect($c.($C!=""?"$gc,":"")."\nADD".format_foreign_key($J),$A,$He);$n=lang(191)."<br>$n";}}}page_header(lang(192),$n,array("table"=>$a),h($a));if($_POST){ksort($J["source"]);if($_POST["add"])$J["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$J["target"]=array();}elseif($C!=""){$ed=foreign_keys($a);$J=$ed[$C];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}$mh=array_keys(fields($a));$Mh=($a===$J["table"]?$mh:array_keys(fields($J["table"])));$xg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($J["db"]==""&&$J["ns"]==""){echo
lang(193),':
',html_select("table",$xg,$J["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(194),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(129),'<th id="label-target">',lang(130),'</thead>
';$Zd=0;foreach($J["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$mh,$X,($Zd==count($J["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$Mh,$J["target"][$y],1,"label-target");$Zd++;}echo'</table>
<p>
',lang(98),': ',html_select("on_delete",array(-1=>"")+explode("|",$kf),$J["on_delete"]),' ',lang(97),': ',html_select("on_update",array(-1=>"")+explode("|",$kf),$J["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(195),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$C));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;$Af="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$Af=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($J["name"]);$Ha=" AS\n$J[select]";$A=ME."table=".urlencode($C);$He=lang(196);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$Af=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ha,$A,$He);else{$Oh=$C."_adminer_".uniqid();drop_create("DROP $Af ".table($a),"CREATE $U ".table($C).$Ha,"DROP $U ".table($C),"CREATE $U ".table($Oh).$Ha,"DROP $U ".table($Oh),($_POST["drop"]?substr(ME,0,-1):$A),lang(197),$He,lang(198),$a,$C);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;$J["materialized"]=($Af!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(199)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(178),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$J["materialized"],lang(124)):""),'<p>';textarea("select",$J["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$a));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Qd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$vh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(200));elseif(in_array($J["INTERVAL_FIELD"],$Qd)&&isset($vh[$J["STATUS"]])){$Sg="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(201):lang(202)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Sg.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$Sg)."\n".$vh[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(203).": ".h($aa):lang(204)),$n);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(178),'<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(205),'<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">',lang(206),'<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>',lang(207),'<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Qd,$J["INTERVAL_FIELD"]),'<tr><th>',lang(113),'<td>',html_select("STATUS",$vh,$J["STATUS"]),'<tr><th>',lang(48),'<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",lang(208)),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$aa));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=($_GET["name"]?$_GET["name"]:$_GET["procedure"]);$Ng=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$n){$yf=routine($_GET["procedure"],$Ng);$Oh="$J[name]_adminer_".uniqid();drop_create("DROP $Ng ".routine_id($da,$yf),create_routine($Ng,$J),"DROP $Ng ".routine_id($J["name"],$J),create_routine($Ng,array("name"=>$Oh)+$J),"DROP $Ng ".routine_id($Oh,$J),substr(ME,0,-1),lang(209),lang(210),lang(211),$da,$J["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(212):lang(213)).": ".h($da):(isset($_GET["function"])?lang(214):lang(215))),$n);if(!$_POST&&$da!=""){$J=routine($_GET["procedure"],$Ng);$J["name"]=$da;}$qb=get_vals("SHOW CHARACTER SET");sort($qb);$Og=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(178),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',($Og?lang(19).": ".html_select("language",$Og,$J["language"])."\n":""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$qb,$Ng);if(isset($_GET["function"])){echo"<tr><td>".lang(216);edit_type("returns",$J["returns"],$qb,array(),($x=="pgsql"?array("void","trigger"):array()));}echo'</table>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$da));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$J=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(217));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(218));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(219));else
redirect($_);}page_header($fa!=""?lang(220).": ".h($fa):lang(221),$n);if(!$J)$J["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(122)."'>".confirm(lang(170,$fa))."\n";echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$J=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(222));else
query_redirect("CREATE TYPE ".idf_escape(trim($J["name"]))." $J[as]",$_,lang(223));}page_header($ga!=""?lang(224).": ".h($ga):lang(225),$n);if(!$J)$J["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(122)."'>".confirm(lang(170,$ga))."\n";else{echo"<input name='name' value='".h($J['name'])."' autocapitalize='off'>\n";textarea("as",$J["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$oi=trigger_options();$J=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$oi["Timing"])&&in_array($_POST["Event"],$oi["Event"])&&in_array($_POST["Type"],$oi["Type"])){$jf=" ON ".table($a);$gc="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$jf:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($gc,$A,lang(226));else{if($C!="")queries($gc);queries_redirect($A,($C!=""?lang(227):lang(228)),queries(create_trigger($jf,$_POST)));if($C!="")queries(create_trigger($jf,$J+array("Type"=>reset($oi["Type"]))));}}$J=$_POST;}page_header(($C!=""?lang(229).": ".h($C):lang(230)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(231),'<td>',html_select("Timing",$oi["Timing"],$J["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(232),'<td>',html_select("Event",$oi["Event"],$J["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$oi["Event"])?" <input name='Of' value='".h($J["Of"])."' class='hidden'>":""),'<tr><th>',lang(47),'<td>',html_select("Type",$oi["Type"],$J["Type"]),'</table>
<p>',lang(178),': <input name="Trigger" value="',h($J["Trigger"]),'" maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,$C));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$ig=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Bb)$ig[$Bb][$J["Privilege"]]=$J["Comment"];}$ig["Server Admin"]+=$ig["File access on server"];$ig["Databases"]["Create routine"]=$ig["Procedures"]["Create routine"];unset($ig["Procedures"]["Create routine"]);$ig["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$ig["Columns"][$X]=$ig["Tables"][$X];unset($ig["Server Admin"]["Usage"]);foreach($ig["Tables"]as$y=>$X)unset($ig["Databases"][$y]);$Ue=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Ue[$X]=(array)$Ue[$X]+(array)$_POST["grants"][$y];}$md=array();$hf="";if(isset($_GET["host"])&&($H=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$_e,PREG_SET_ORDER)){foreach($_e
as$X){if($X[1]!="USAGE")$md["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$J[0]))$md["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$B))$hf=$B[1];}}if($_POST&&!$n){$if=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $if",ME."privileges=",lang(233));else{$We=q($_POST["user"])."@".q($_POST["host"]);$Qf=$_POST["pass"];if($Qf!=''&&!$_POST["hashed"]){$Qf=$g->result("SELECT PASSWORD(".q($Qf).")");$n=!$Qf;}$Gb=false;if(!$n){if($if!=$We){$Gb=queries((min_version(5)?"CREATE USER":"GRANT USAGE ON *.* TO")." $We IDENTIFIED BY PASSWORD ".q($Qf));$n=!$Gb;}elseif($Qf!=$hf)queries("SET PASSWORD FOR $We = ".q($Qf));}if(!$n){$Kg=array();foreach($Ue
as$cf=>$ld){if(isset($_GET["grant"]))$ld=array_filter($ld);$ld=array_keys($ld);if(isset($_GET["grant"]))$Kg=array_diff(array_keys(array_filter($Ue[$cf],'strlen')),$ld);elseif($if==$We){$ff=array_keys((array)$md[$cf]);$Kg=array_diff($ff,$ld);$ld=array_diff($ld,$ff);unset($md[$cf]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$cf,$B)&&(!grant("REVOKE",$Kg,$B[2]," ON $B[1] FROM $We")||!grant("GRANT",$ld,$B[2]," ON $B[1] TO $We"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($if!=$We)queries("DROP USER $if");elseif(!isset($_GET["grant"])){foreach($md
as$cf=>$Kg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$cf,$B))grant("REVOKE",array_keys($Kg),$B[2]," ON $B[1] FROM $We");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(234):lang(235)),!$n);if($Gb)$g->query("DROP USER $We");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(141)),$n,array("privileges"=>array('',lang(69))));if($_POST){$J=$_POST;$md=$Ue;}else{$J=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$hf;if($hf!="")$J["hashed"]=true;$md[(DB==""||$md?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($J["pass"]),'" autocomplete="new-password">
';if(!$J["hashed"])echo
script("typePassword(qs('#pass'));");echo
checkbox("hashed",1,$J["hashed"],lang(236),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(69).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($md
as$cf=>$ld){echo'<th>'.($cf!="*.*"?"<input name='objects[$s]' value='".h($cf)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(126),"Columns"=>lang(46),"Procedures"=>lang(237),)as$Bb=>$Wb){foreach((array)$ig[$Bb]as$hg=>$vb){echo"<tr".odd()."><td".($Wb?">$Wb<td":" colspan='2'").' lang="en" title="'.h($vb).'">'.h($hg);$s=0;foreach($md
as$cf=>$ld){$C="'grants[$s][".h(strtoupper($hg))."]'";$Y=$ld[strtoupper($hg)];if($Bb=="Server Admin"&&$cf!=(isset($md["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(238)."<option value='0'".($Y=="0"?" selected":"").">".lang(239)."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$C value='1'".($Y?" checked":"").($hg=="All privileges"?" id='grants-$s-all'>":">".($hg=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$s-all'); };"))),"</label>";}$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(122),'">',confirm(lang(170,"$ha@$_GET[host]"));}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$ge=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$ge++;}queries_redirect(ME."processlist=",lang(240,$ge),$ge||!$_POST["kill"]);}page_header(lang(111),$n);echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$s=-1;foreach(process_list()as$s=>$J){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($J
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J[$x=="sql"?"Id":"pid"],0):"");foreach($J
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$J["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.lang(241).'</a>':nbsp($X));echo"\n";}echo'</table>
',script("tableCheck();"),'<p>
';if(support("kill")){echo($s+1)."/".lang(242,max_connections()),"<p><input type='submit' value='".lang(243)."'>\n";}echo'<input type="hidden" name="token" value="',$di,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$ed=column_foreign_keys($a);$ef=$S["Oid"];parse_str($_COOKIE["adminer_import"],$za);$Lg=array();$e=array();$Sh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$Sh=$b->selectLengthProcess();}$Lg+=$o["privileges"];}list($L,$nd)=$b->selectColumnsProcess($e,$w);$Ud=count($nd)<count($L);$Z=$b->selectSearchProcess($p,$w);$uf=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$wi=>$J){$Ha=convert_field($p[key($J)]);$L=array($Ha?$Ha:idf_escape(key($J)));$Z[]=where_check($wi,$p);$I=$ec->select($a,$L,$Z,$L);if($I)echo
reset($I->fetch_row());}exit;}$dg=$yi=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$dg=array_flip($v["columns"]);$yi=($L?$dg:array());foreach($yi
as$y=>$X){if(in_array(idf_escape($y),$L))unset($yi[$y]);}break;}}if($ef&&$yi===null){$dg=$yi=array($ef=>0);$w[]=array("type"=>"PRIMARY","columns"=>array($ef));}if($_POST&&!$n){$Yi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$gb=array();foreach($_POST["check"]as$db)$gb[]=where_check($db,$p);$Yi[]="((".implode(") OR (",$gb)."))";}$Yi=($Yi?"\nWHERE ".implode(" AND ",$Yi):"");if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");$jd=($L?implode(", ",$L):"*").convert_fields($e,$p,$L)."\nFROM ".table($a);$pd=($nd&&$Ud?"\nGROUP BY ".implode(", ",$nd):"").($uf?"\nORDER BY ".implode(", ",$uf):"");if(!is_array($_POST["check"])||$yi===array())$G="SELECT $jd$Yi$pd";else{$ui=array();foreach($_POST["check"]as$X)$ui[]="(SELECT".limit($jd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$pd,1).")";$G=implode(" UNION ALL ",$ui);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$ed)){if($_POST["save"]||$_POST["delete"]){$H=true;$_a=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$G="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($yi===array()&&is_array($_POST["check"]))||$Ud){$H=($_POST["delete"]?$ec->delete($a,$Yi):($_POST["clone"]?queries("INSERT $G$Yi"):$ec->update($a,$O,$Yi)));$_a=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ui="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$H=($_POST["delete"]?$ec->delete($a,$Ui,1):($_POST["clone"]?queries("INSERT".limit1($a,$G,$Ui)):$ec->update($a,$O,$Ui,1)));if(!$H)break;$_a+=$g->affected_rows;}}}$He=lang(244,$_a);if($_POST["clone"]&&$H&&$_a==1){$me=last_id();if($me)$He=lang(163," $me");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$He,$H);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(245);else{$H=true;$_a=0;foreach($_POST["val"]as$wi=>$J){$O=array();foreach($J
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$H=$ec->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($wi,$p),!($Ud||$yi===array())," ");if(!$H)break;$_a+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(244,$_a),$H);}}elseif(!is_string($Uc=get_file("csv_file",true)))$n=upload_error($Uc);elseif(!preg_match('~~u',$Uc))$n=lang(246);else{cookie("adminer_import","output=".urlencode($za["output"])."&format=".urlencode($_POST["separator"]));$H=true;$sb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Uc,$_e);$_a=count($_e[0]);$ec->begin();$M=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$K=array();foreach($_e[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$M]*)$M~",$X.$M,$Ae);if(!$y&&!array_diff($Ae[1],$sb)){$sb=$Ae[1];$_a--;}else{$O=array();foreach($Ae[1]as$s=>$nb)$O[idf_escape($sb[$s])]=($nb==""&&$p[$sb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nb))));$K[]=$O;}}$H=(!$K||$ec->insertUpdate($a,$K,$dg));if($H)$H=$ec->commit();queries_redirect(remove_from_uri("page"),lang(247,$_a),$H);$ec->rollback();}}}$Eh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(51).": $Eh",$n);$O=null;if(isset($Lg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if($ed[$X["col"]]&&count($ed[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(248).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($uf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Sh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$hd=$g->result(count_rows($a,$Z,$Ud,$nd));$E=floor(max(0,$hd-1)/$z);}$Xg=$L;$od=$nd;if(!$Xg){$Xg[]="*";$Cb=convert_fields($e,$p,$L);if($Cb)$Xg[]=substr($Cb,2);}foreach($L
as$y=>$X){$o=$p[idf_unescape($X)];if($o&&($Ha=convert_field($o)))$Xg[$y]="$Ha AS $X";}if(!$Ud&&$yi){foreach($yi
as$y=>$X){$Xg[]=idf_escape($y);if($od)$od[]=idf_escape($y);}}$H=$ec->select($a,$Xg,$Z,$od,$uf,$z,$E,true);if(!$H)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$H->seek($z*$E);$tc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($E&&$x=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last"&&$z!=""&&$nd&&$Ud&&$x=="sql")$hd=$g->result(" SELECT FOUND_ROWS()");if(!$K)echo"<p class='message'>".lang(12)."\n";else{$Qa=$b->backwardKeys($a,$Eh);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$nd&&$L?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(249)."</a>");$Te=array();$kd=array();reset($L);$sg=1;foreach($K[0]as$y=>$X){if(!isset($yi[$y])){$X=$_GET["columns"][key($L)];$o=$p[$L?($X?$X["col"]:current($L)):$y];$C=($o?$b->fieldName($o,$sg):($X["fun"]?"*":$y));if($C!=""){$sg++;$Te[$y]=$C;$d=idf_escape($y);$_d=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Wb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($_d.($uf[0]==$d||$uf[0]==$y||(!$uf&&$Ud&&$nd[0]==$d)?$Wb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($_d.$Wb)."' title='".lang(57)."' class='text'> â†“</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.lang(54).'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($y)."');");}echo"</span>";}$kd[$y]=$X["fun"];next($L);}}$se=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$y=>$X)$se[$y]=max($se[$y],min(40,strlen(utf8_decode($X))));}}echo($Qa?"<th>".lang(250):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$ed)as$Se=>$J){$vi=unique_array($K[$Se],$w);if(!$vi){$vi=array();foreach($K[$Se]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$vi[$y]=$X;}}$wi="";foreach($vi
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&preg_match('~char|text|enum|set~',$p[$y]["type"])&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x!='sql'||preg_match("~^utf8~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$wi.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$nd&&$L?"":"<td>".checkbox("check[]",substr($wi,1),in_array(substr($wi,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ud||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$wi)."'>".lang(251)."</a>"));foreach($J
as$y=>$X){if(isset($Te[$y])){$o=$p[$y];if($X!=""&&(!isset($tc[$y])||$tc[$y]!=""))$tc[$y]=(is_mail($X)?$Te[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$wi;if(!$_&&$X!==null){foreach((array)$ed[$y]as$q){if(count($ed[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$mh)$_.=where_link($s,$q["target"][$s],$K[$Se][$mh]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$vi))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($vi
as$ae=>$W)$_.=where_link($s++,$ae,$W);}$X=select_value($X,$_,$o,$Sh);$t=h("val[$wi][".bracket_escape($y)."]");$Y=$_POST["val"][$wi][bracket_escape($y)];$oc=!is_array($J[$y])&&is_utf8($X)&&$K[$Se][$y]==$J[$y]&&!$kd[$y];$Rh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$oc)||$Y!==null){$rd=h($Y!==null?$Y:$J[$y]);echo"<td>".($Rh?"<textarea name='$t' cols='30' rows='".(substr_count($J[$y],"\n")+1)."'>$rd</textarea>":"<input name='$t' value='$rd' size='$se[$y]'>");}else{$we=strpos($X,"<i>...</i>");echo"<td id='$t'>$X</td>",script("qsl('td').onclick = partialArg(selectClick, ".($we?2:($Rh?1:0)).($oc?"":", '".h(lang(252))."'").");","");}}}if($Qa)echo"<td>";$b->backwardKeysPrint($Qa,$K[$Se]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($K||$E)&&!is_ajax()){$Cc=true;if($_GET["page"]!="last"){if($z==""||(count($K)<$z&&($K||!$E)))$hd=($E?$E*$z:0)+count($K);elseif($x!="sql"||!$Ud){$hd=($Ud?false:found_rows($S,$Z));if($hd<max(1e4,2*($E+1)*$z))$hd=reset(slow_query(count_rows($a,$Z,$Ud,$nd)));else$Cc=false;}}if($z!=""&&($hd===false||$hd>$z||$E)){echo"<p class='pages'>";$Ce=($hd===false?$E+(count($K)>=$z?2:1):floor(($hd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page")).'">'.lang(253)."</a>:",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".lang(253)."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($Ce,$E+5);$s++)echo
pagination($s,$E);if($Ce>0){echo($E+5<$Ce?" ...":""),($Cc&&$hd!==false?pagination($Ce,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Ce'>".lang(254)."</a>");}echo(($hd===false?count($K)+1:$hd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.lang(255).'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$z).", '".lang(256)."...');",""):'');}else{echo
lang(253).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($Ce>$E?pagination($E+1,$E).($Ce>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($hd!==false?"(".($Cc?"":"~ ").lang(145,$hd).") ":"");$bc=($Cc?"":"~ ").$hd;echo
checkbox("all",1,0,lang(257),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$bc' : checked); selectCount('selected2', this.checked || !checked ? '$bc' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(249),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(245).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(121),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(241),'">
<input type="submit" name="delete" value="',lang(18),'">',confirm(),'</div></fieldset>
';}$fd=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($fd['sql']);break;}}if($fd){print_fieldset("export",lang(71)." <span id='selected2'></span>");$Ef=$b->dumpOutput();echo($Ef?html_select("output",$Ef,$za["output"])." ":""),html_select("format",$fd,$za["format"])," <input type='submit' name='export' value='".lang(71)."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",lang(70),!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$za["format"],1);echo" <input type='submit' name='import' value='".lang(70)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($tc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$di'></p>\n","</form>\n",(!$nd&&$L?"":script("tableCheck();"));}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(113):lang(112));$Li=($P?show_status():show_variables());if(!$Li)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Li
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Bh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($Bh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($ph=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Bh[$y]))$Bh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($Bh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));elseif($_GET["script"]=="version"){$id=file_open_lock(get_temp_dir()."/adminer.version");if($id)file_write_unlock($id,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));}else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Kh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Kh&&!$n&&!$_POST["search"]){$H=true;$He="";if($x=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$He=lang(258);}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$He=lang(259);}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$He=lang(260);}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$He=lang(261);}elseif($x!="sql"){$H=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$He=lang(262);}elseif(!$_POST["tables"])$He=lang(9);elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$He.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$He,$H);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(75).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(263)."</h3>\n";$Jh=tables_list();if(!$Jh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(264)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".lang(54)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$cc=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.lang(126),'<td>'.lang(265).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(117).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(266).$cc,'<td>'.lang(267).$cc,'<td>'.lang(268).$cc,'<td>'.lang(49).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(269).$cc,(support("comment")?'<td>'.lang(48).$cc:''),"</thead>\n";$T=0;foreach($Jh
as$C=>$U){$Oi=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($Oi?"views[]":"tables[]"),$C,in_array($C,$Kh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($Oi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(124):lang(125)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(128)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(242,count($Jh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Ii="<input type='submit' value='".lang(270)."'> ".on_help("'VACUUM'");$qf="<input type='submit' name='optimize' value='".lang(271)."'> ".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".lang(121)." <span id='selected'></span></legend><div>".($x=="sqlite"?$Ii:($x=="pgsql"?$Ii.$qf:($x=="sql"?"<input type='submit' value='".lang(272)."'> ".on_help("'ANALYZE TABLE'").$qf."<input type='submit' name='check' value='".lang(273)."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".lang(274)."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".lang(275)."'> ".on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".lang(122)."'>".on_help("'DROP TABLE'").confirm()."\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(276).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(277)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(278)."'>":""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")." }"),"<input type='hidden' name='token' value='$di'>\n","</div></fieldset>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(72)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(199)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(138)."</h3>\n";$Pg=routines();if($Pg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(178).'<td>'.lang(47).'<td>'.lang(216)."<td>&nbsp;</thead>\n";odd('');foreach($Pg
as$J){$C=($J["SPECIFIC_NAME"]==$J["ROUTINE_NAME"]?"":"&name=".urlencode($J["ROUTINE_NAME"]));echo'<tr'.odd().'>','<th><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["SPECIFIC_NAME"]).$C).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["SPECIFIC_NAME"]).$C).'">'.lang(131)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(215).'</a>':'').'<a href="'.h(ME).'function=">'.lang(214)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(279)."</h3>\n";$ch=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($ch){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(178)."</thead>\n";odd('');foreach($ch
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(221)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$Gi=types();if($Gi){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(178)."</thead>\n";odd('');foreach($Gi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(225)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(139)."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(178)."<td>".lang(280)."<td>".lang(205)."<td>".lang(206)."<td></thead>\n";foreach($K
as$J){echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?lang(281)."<td>".$J["Execute at"]:lang(207)." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]",'<td><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.lang(131).'</a>';}echo"</table>\n";$Ac=$g->result("SELECT @@event_scheduler");if($Ac&&$Ac!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Ac)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(204)."</a>\n";}if($Jh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();