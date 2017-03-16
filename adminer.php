<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.0
*/error_reporting(6135);$Lc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Lc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Wh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Wh)$$X=$Wh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1ÊJ=ÓÚÞ1L‚û?Ðs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ð\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[ÝsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀÞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>ŽlÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´Ý¢gŒnË©¸¹TÐ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdÝÝ è2cˆê4²k¿Š£\rG•æE6_³¢ú=î·SZUÇ·ãŒžO—ðÅ?¡éÃ¾27£cÝÐÅhnÆ‹Üùu3…E>\$J[Áq[\räIŠ6.ÆJÑ\"EPrèGÌŠGA ÝW¡³ž\rº´6Ík†¢½`.-¡ªB2>#ìhØÀˆXµøu\r¡¸=‡Z  b€Å(¡â•ƒ!JZÈ”uªyO’×Z¥M˜Õ6lM[0©ä–€àß!ImñyÂ+pÉ#ag¡ÞŒvW˜:qp\"4ÅôòŸãheî…0 dÆAq-\"¡Êƒ§ÆÂ\"2ßÍÒ@‡)o‘,,”¤”×Rb`@©B@ÐÊÊ¯¤Q\n†èŠ·˜Z§„Â™=(r~‰l©~¯ÄhˆsAllÖ\n7»!1! Ü#é\0KË…A“LH(½!ÔÊ˜agH\0ÄT\ni˜/È\$ôöœ4GaÎIÉ!¸.—Å˜5§ÅM\rÑ2‘‚Ï	Ù;ƒ,öžLIJ†äÃd?“ÒºÅí%Õˆ:çN@b.âª2í5’«ôt:FAw²B£EŽ,Ç-\$ù£'ê:Ó©u©?¨tK;kÍàžÐ¸¨ä\0ouMD)k_Phž˜Ó5MC}7‚…È2‡w.QB¦8)ìÀ†8(DIù=©éy`Øed\0s,`É•jŒHÄ\"(b³¢Ä\\ÙÖnl’\"Ù‚^Ëì€­eE½\nèáë±X!SqXÔÀ\r©Œ€7A±ž†0ê£y7pPìºðçaüA˜4‡ƒ(yÖJwm…2…òª.¯ó‰†¬fp°ÏË;Æ„5ÂJÍcÜqŒQz\\\0[Hÿ 3‘f'b¼µFðøÆY¨\nAà9_§IÞà(›fÎÓq‘VÑÅ¨äõ³4µÜò¹‚„RIÂYå&J’ºFñ}£{FTëh9[7‚h\0à‹TÖ^ö´jËÔq×j‹õžÕ”§­€cÂWIð@`_ÑsVDçÃ[¾\"{1áÈ3‡•	ŽÚô»÷¨<…l¼l.±éÐ[¨»Þ#Ä¯º¤b°Þu­¶/Ÿ\0ä3ævaå«‘Dp>‚2½IDWÕš¢kKAŒ»hHš]¨FÆ•ã€W–!]‰Ê÷ltÜÉ•RÌ­4L[äÐÅYC cTj<c;s‡q¸p€’ Ä5ÅtóJ§m6—%J”-\\õÍeB=iß-ð*%´·¦÷¢TV‹[&M8ó*\r™bÄY\rihˆ	„ÙPŒ9T×-VÉ°ZÔúüÛ³ù49Î²™”ƒp-´`ÙÿÜÌÇGÉÙ›' ì¹ÐôM²:§Å™')0ƒYuÚcí:!«x#×¦è¦-l*®TÉ\nYläù†š³‹*D ÉXë V\\îËØÚ®ó]y¯ƒ\nÖ2r,É†åç,ÎdÐ×~Å³Ý÷s³-ç+Ö»uÛ]£\\BÀ¶¥²Iw€Ô!ƒOsØÔ¯lò YCÁÐ‚È:À@ÆœEUË._)Ë9uÿzœµvÏˆSÎ´¬1ï—é_(Sõéqé½¡r¾yuî+¥Z*ê6€uy¿<ÉÇõz\\|ØZK;áe›×–úoYåÀ;°óžÃl‘´xöà-7×ô÷4rkYY?ÔÕGWt¡¼÷[KÚšÃåzoØ<¿€Íà	têÏô†¶¾ù—É€gçýjð‡_!ào…êÊ\$ Iã¹ÀI¿.&Ü5½P\\—›]¥Àè†Æ\nCØ.ïÖ_¹ø;¿çs«iíS/gÖ:ÞPëÉ³auNÍ¨|Æaáå¯á™º¬±¢µÓâ«6ØÓŽÙž3Ö|÷¾‡Ä{©ceîXòù<°e«p>Ní}´í~âÿO¾¡÷Ò™Bl¿ÂjÊ/¢óKø¼Hdch-Ë¾ýŽºØšð/ûîÜþÎäùÈ¶·hÔž0ŽÀÐŒÈÐ‹ÌúÎH©8j6é\n+d l7\r ¾ ÀÚ…0N7eZ°0`m Ën¢ÝÃp\0Ð\0¾} Ç@[ãi0˜ðƒ	ð~…¤4P•\nÐ”bÐ¯0©p‹	P¢4@ïPŠê‡‰‚I\0``f”ë\r```˜°Yð¢zÀß	Põ€ê\rð¯°¿	pÎ¤y	HÕq¬@Øñ	QÆq‡Ñ ¬`¿±Ñbi‚”ŒUÐ¡ñš@`)™ðÁÐôàì)°ÍÑZèpj(Ñ--lÕâêÖ1Q%­póñYÑ\n1}°ÏÍ\\*¤“hÿŒ{§†C0°#€ÆHˆ˜0T‚qAäöðb”=‘Â…±f- éðÿqÒiAðs'QÏ‘ÝÑã‘Z\rRc'°å`Œ«­q¾èY’Q1±Ò2!r\"Qó1÷	Qï!qûr\0°B˜²DÑwð”\0Û±¾ªñqÑ\$òSÃÙ\"¬]qåò@`è±²@,Ÿ\"r\"ò)&Ñô&é\nt€äbèm0˜2‘)Qw\nÀÖ ó æò¦p(0«*ò³‡ÒŽ±ò¡£q\nÃ&i\nî\"ùp£’Á1Õ‘CÒá‡Ï\"Á.1y.q^òøŸ2ñòð\0Ï.òõQ×0ó¬rýÑ)/\0Ú”!/¹.S+1Rë/3:5ÀÆó11³\nBÑ43	4±G#ã€œ`ŒSa °ra6‘Îâes7Óq£,æ©¹j3q4)\$ˆ˜‰«à@*Ò×-²Í9ñá¢\n±ë\"0‹',ÑhõS}\"Ÿ3ss9ðÅ1ó½7S-=1g4	ß<pr.€Û)LA9ê¶ÍÂ´ êÁ/9ÏSÍ?“/5H}>É.«‰4LD;‘¿@2!AÑã@³áôBråÔ-/ô+016Sì˜#„)Š˜\"ÂŽi@€`P;.\n€<)Ô±ôV\nl8K#gkød|¶ƒ8ãlÁÂâ.lf.ô?œA@\rÃ†.¤\$J2tN#ôRr¢AE¢ËEéë´e€ËF‚óFÓ¦g­8*€");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$Vd=substr($u,-1);return
str_replace($Vd.$Vd,$Vd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Qf,$Lc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Qf)){foreach($X
as$Kd=>$W){unset($Qf[$y][$Kd]);if(is_array($W)){$Qf[$y][stripslashes($Kd)]=$W;$Qf[]=&$Qf[$y][stripslashes($Kd)];}else$Qf[$y][stripslashes($Kd)]=($Lc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Na=false){static$Gh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Na?array_flip($Gh):$Gh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$db,$Rd="",$Ve="",$ib="",$Sd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($db?" checked":"").($Sd?" aria-labelledby='$Sd'":"").($Ve?' onclick="'.h($Ve).'"':'').">";return($Rd!=""||$ib?"<label".($ib?" class='$ib'":"").">$J".h($Rd)."</label>":$J);}function
optionlist($bf,$Bg=null,$ei=false){$J="";foreach($bf
as$Kd=>$W){$cf=array($Kd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Kd).'">';$cf=$W;}foreach($cf
as$y=>$X)$J.='<option'.($ei||is_string($y)?' value="'.h($y).'"':'').(($ei||is_string($y)?(string)$y:$X)===$Bg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$bf,$Y="",$Ue=true,$Sd=""){if($Ue)return"<select name='".h($C)."'".(is_string($Ue)?' onchange="'.h($Ue).'"':"").($Sd?" aria-labelledby='$Sd'":"").">".optionlist($bf,$Y)."</select>";$J="";foreach($bf
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$bf,$Y="",$Cf=""){return($bf?"<select$Ja><option value=''>$Cf".optionlist($bf,$Y,true)."</select>":"<input$Ja size='10' value='".h($Y)."' placeholder='$Cf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$ae,$pi=false,$Ve=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Ve)."return !toggle('fieldset-$t');\">$ae</a></legend><div id='fieldset-$t'".($pi?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Mc=true;if($Mc)echo"{";if($y!=""){echo($Mc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Mc=false;}else{echo"\n}\n";$Mc=true;}}function
ini_bool($xd){$X=ini_get($xd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($li,$N,$V,$G){$_SESSION["pwds"][$li][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$wh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$wh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$vb=(is_object($h)?$h:$g);$J=array();$I=$vb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$J[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$d,$Y,$Xe="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Xe:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$M=array()){$J="";foreach($e
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Ga=convert_field($p[$y]);if($Ga)$J.=", $Ga AS ".idf_escape($y);}return$J;}function
cookie($C,$Y,$de=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($de?"; expires=".gmdate("D, d M Y H:i:s",time()+$de)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax");}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($li,$N,$V,$m=null){global$Yb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Yb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($li!="server"||$N!=""?urlencode($li)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$se=null){if($se!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$se;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$se,$ag=true,$xc=true,$Ec=false,$vh=""){global$g,$n,$b;if($xc){$Vg=microtime(true);$Ec=!$g->query($H);$vh=format_time($Vg);}$Tg="";if($H)$Tg=$b->messageQuery($H,$vh);if($Ec){$n=error().$Tg;return
false;}if($ag)redirect($A,$se.$Tg);return
true;}function
queries($H){global$g;static$Uf=array();static$Vg;if(!$Vg)$Vg=microtime(true);if($H===null)return
array(implode("\n",$Uf),format_time($Vg));$Uf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$tc='table'){foreach($T
as$R){if(!queries("$H ".$tc($R)))return
false;}return
true;}function
queries_redirect($A,$se,$ag){list($Uf,$vh)=queries(null);return
query_redirect($Uf,$A,$se,$ag,false,!$ag,$vh);}function
format_time($Vg){return
lang(1,max(0,microtime(true)-$Vg));}function
remove_from_uri($qf=""){return
substr(preg_replace("~(?<=[?&])($qf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Eb){return" ".($E==$Eb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Lb=false){$Jc=$_FILES[$y];if(!$Jc)return
null;foreach($Jc
as$y=>$X)$Jc[$y]=(array)$X;$J='';foreach($Jc["error"]as$y=>$n){if($n)return$n;$C=$Jc["name"][$y];$Ch=$Jc["tmp_name"][$y];$xb=file_get_contents($Lb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Ch":$Ch);if($Lb){$Vg=substr($xb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Vg,$gg))$xb=iconv("utf-16","utf-8",$xb);elseif($Vg=="\xEF\xBB\xBF")$xb=substr($xb,3);$J.=$xb."\n\n";}else$J.=$xb;}return$J;}function
upload_error($n){$pe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($pe?" ".lang(3,$pe):""):lang(4));}function
repeat_pattern($Af,$be){return
str_repeat("$Af{0,65535}",$be/65535)."$Af{0,".($be%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$be=80,$bh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$be).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$be).")($)?)",$Q,$B);return
h($B[1]).$bh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Qf,$qd=array()){while(list($y,$X)=each($Qf)){if(!in_array($y,$qd)){if(is_array($X)){foreach($X
as$Kd=>$W)$Qf[$y."[$Kd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Fc=false){$J=table_status($R,$Fc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ja,$o,$Y,$nc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ke);$J=($nc!==null?"<label><input type='$U'$Ja value='$nc'".((is_array($Y)?in_array($nc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($ke[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$Rh,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$jg=($x=="mssql"&&$o["auto_increment"]);if($jg&&!$_POST["save"])$r=null;$Zc=(isset($_GET["select"])||$jg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Zc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$Mc=0;foreach($Zc
as$y=>$X){if($y===""||!$X)break;$Mc++;}$Ue=($Mc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Mc > f.selectedIndex) f.selectedIndex = $Mc;\" onkeyup='keyupChange.call(this);'":"");$Ja.=$Ue;$hd=(in_array($r,$Zc)||isset($Zc[$r]));echo(count($Zc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Zc,$r===null||$hd?$r:"")."</select>":nbsp(reset($Zc))).'<td>';$zd=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($zd!="")echo$zd;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ja value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ja value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ke);foreach($ke[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($db?' checked':'')."$Ue>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ue>";elseif(($th=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($th&&$x!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$re=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Rh[$o["type"]]?$Rh[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$re+=7;echo"<input".((!$hd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($re?" data-maxlength='$re'":"").(preg_match('~char|binary~',$o["type"])&&$re>20?" size='40'":"")."$Ja>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Jc=get_file("fields-$u");if(!is_string($Jc))return
false;return
q($Jc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Xb;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Xb->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Vc=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Vc){echo"<ul>\n";$Vc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Vc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($od,$Ae=false){global$b;$J=$b->dumpHeaders($od,$Ae);$of=$_POST["output"];if($of!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($od).".$J".($of!="file"&&!preg_match('~[^0-9a-z]~',$of)?".$of":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Kc=@tempnam("","");if(!$Kc)return
false;$J=dirname($Kc);unlink($Kc);}}return$J;}function
password_file($i){$Kc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Kc);if($J||!$i)return$J;$Xc=@fopen($Kc,"w");if($Xc){chmod($Kc,0660);$J=rand_string();fwrite($Xc,$J);fclose($Xc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$uh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Kd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Kd):"")."<td>".select_value($W,$_,$o,$uh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Sf=is_url($X))$_=(($Sf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($uh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$uh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($kc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Af="$Ha+(\\.$Ha+)*@($Wb?\\.)+$Wb";return
is_string($kc)&&preg_match("(^$Af(,\\s*$Af)*\$)i",$kc);}function
is_url($Q){$Wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Wb?\\.)+$Wb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Ed,$cd){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ed&&($x=="sql"||count($cd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$cd).")$H":"SELECT COUNT(*)".($Ed?" FROM (SELECT 1$H$dd) x":$H));}function
slow_query($H){global$b,$Dh;$m=$b->database();$wh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Pd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Dh,'&kill=',$Pd,'\');
}, ',1000*$wh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$wh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Xf=rand(1,1e6);return($Xf^$_SESSION["token"]).":$Xf";}function
verify_token(){list($Dh,$Xf)=explode(":",$_POST["token"]);return($Xf^$_SESSION["token"])==$Dh;}function
lzw_decompress($Ra){$Sb=256;$Sa=8;$kb=array();$lg=0;$mg=0;for($s=0;$s<strlen($Ra);$s++){$lg=($lg<<8)+ord($Ra[$s]);$mg+=8;if($mg>=$Sa){$mg-=$Sa;$kb[]=$lg>>$mg;$lg&=(1<<$mg)-1;$Sb++;if($Sb>>$Sa)$Sa++;}}$Rb=range("\0","\xFF");$J="";foreach($kb
as$s=>$jb){$jc=$Rb[$jb];if(!isset($jc))$jc=$ti.$ti[0];$J.=$jc;if($s)$Rb[]=$ti.$jc[0];$ti=$jc;}return$J;}function
on_help($qb,$Kg=0){return" onmouseover='helpMouseover(this, event, ".h($qb).", $Kg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Zh){global$b,$x,$Dh,$n;$gh=$b->tableName(table_status1($a,true));page_header(($Zh?lang(10):lang(11)),$n,array("select"=>array($a,$gh)),$gh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Mb=$_GET["set"][bracket_escape($C)];if($Mb===null){$Mb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Mb,$gg))$Mb=$gg[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Zh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Mb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Zh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Zh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Zh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}global$b,$g,$Yb,$gc,$qc,$n,$Zc,$ed,$ba,$yd,$x,$ca,$Ud,$Te,$Bf,$Yg,$id,$Dh,$Ih,$Rh,$Yh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Lc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Ud=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Ke=null){if(is_string($u)){$Ef=array_search($u,get_translations("en"));if($Ef!==false)$u=$Ef;}global$ca,$Ih;$Hh=($Ih[$u]?$Ih[$u]:$u);if(is_array($Hh)){$Ef=($Ke==1?0:($ca=='cs'||$ca=='sk'?($Ke&&$Ke<5?1:2):($ca=='fr'?(!$Ke?0:1):($ca=='pl'?($Ke%10>1&&$Ke%10<5&&$Ke/10%10!=1?1:2):($ca=='sl'?($Ke%100==1?0:($Ke%100==2?1:($Ke%100==3||$Ke%100==4?2:3))):($ca=='lt'?($Ke%10==1&&$Ke%100!=11?0:($Ke%10>1&&$Ke/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Ke%10==1&&$Ke%100!=11?0:($Ke%10>1&&$Ke%10<5&&$Ke/10%10!=1?1:2)):1)))))));$Hh=$Hh[$Ef];}$Ea=func_get_args();array_shift($Ea);$Uc=str_replace("%d","%s",$Hh);if($Uc!=$Hh)$Ea[0]=format_number($Ke);return
vsprintf($Uc,$Ea);}function
switch_lang(){global$ca,$Ud;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Ud,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Ud[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Ud[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ke,PREG_SET_ORDER);foreach($ke
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$Tf){if(isset($Ud[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($Ud[$y])){$ca=$y;break;}}}$Ih=$_SESSION["translations"];if($_SESSION["translations_version"]!=1391795524){$Ih=array();$_SESSION["translations_version"]=1391795524;}function
get_translations($Td){switch($Td){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦«ÁËžN›t¼Å~9‚ˆ™ÈöBØ­8¦:-pÎüˆKXÂ9,¢pÊ:ë8Öã(ß\0À‹(˜ž½­@ò¨¬-BüÆŽN’üŠ@.£®9Â#Èý3ˆ«®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FàPx‘Ì„C@è:˜t…ã¼¤\$jÖ¿Ë8ÎÇ²ãÅŽo(Ü„MäÊŽ’@¾‹7£XD	+/\0¶à^0‡Éú}\r{þ®À¦(ÃlëHä£šÍ®-Dú; ð ëE!-8‚63£@ÉŒ£¸KÓ-\n,ÓÁÔ‚ñ„©Ä<³ MRUlëò!ãb_\n“OZ\r³¢ò Ž¬Âö1 5óô2ŒÃëLSc\rmQP#£u1?\"Î3 #;91DPXÆ4Mèò;¼P³¯#\"’1Ç«¼å¥­°¨âÇñèÎïÓö»_iÙceDœczÔP]^¿Ë3çm5?L/Á:u+‚¼Ø! /âq¬#`¸ŒQžGŽäÂƒ\$Ê>“ˆávB(ñ™¯øþBÎàm>/”ºbžI/¨½¥LD¬B\r»ƒ0Ì6JéDj3 «È¨7£QØÜ<£kå'xc˜ÍeÇñ³€2ðbEo-møÜŸ¤2°Ý`´`N¯¬ÜÚê1ìÉ lûN¸è;nÛWî[£½ŽÖpÒˆb˜¤#2ãx×…Á\0§x²ïH³¦\"×©FÚª¯©;ðÙCì3Ö8\r(É´#£.UÀmýÜ”%Q48EqjB§ö—3!±R4‘%I’t¡)ò É¹KÔ¹1¸³Å2LÓDÕ6\rÓtá9,1èé;OÐA>OÜ¯Ö0òíúšùŽZ×ÍÖL-N8g\nj\\TU´\"ŠŒ2ƒöO\"ÿ-ç×:@ˆCü]„Ô\0Yã%ð‚€\nI\$N4“\"Pãq­vO˜4¬ãJ‰a.&\rÌ6Ÿu5–q3‚„”äB|S×5&®dê»c°ZÖ\$F G ½A‹¹!)e4¾›ã¾hq6p\00032`^šWSG}°¢<v\"¹>xT”7u`Z`¨O\naQ‹#2‰ª“3ÅÀÕ5hsÅ…òJsƒ’ßEÜ€­sJS\n7¦dEÃ;ša\$Ü2F‚¤?Æü±.ÇäI\"ñDiai–pÊZ[{—Cà(×)ŽxNT(@‚(\n— €\"P˜fVªÜá†R\\ÎAìU#Eô¿yc[\n|2E#ŠJCyª#“€ÕpîŽ#Àmœ&ž5BÏÑ™(?l¡“ãj¼e†\rþD4DÑ”Z1h\níÇÉètÙpoo¨ý\0 ¬‚áj£?(Î(èi`ÆÅÈDIÁÓê;æ:†pÑ`¼{Oè ´leI	×¤4¶<EÒ’¹¤¶£ŠàÑQ2t®Ð¸pn“ýD™Ô^'áz\rÎ6w2¶JïáhqÄì©Å<ƒJAPÑT¥Ü£æ°§Ÿ@¦AC’ð«h-41537	´®–\0‚YU²Ð¶ÏÅpm%¤Ê¢P Ž‘â>j†a,„^B3 3”]ª¥sòLi°?3Í“2lÏ	~SáP*†Z/ÕdŸ4Ã†SÛýŸÁ9:ÇhMš!„„‚f`Œ\"®\$&Â€ £lZåemÐ„ð–Ú}¼\$M:¢Ä0oËõÁ¬£r-Ù„´·1EOãÂÚÔ>}×	º…_h›Uäº·[«ahÌµê‚—±šÝ:††Ò±M·‡ä¢‚9%Q}ý WüÞ+L]ØŒ(r¤à¢@Ã(bÁ¬VN'ª.µI!E5d8@ÖÞ_­rŽ0˜x6\\ZYÏÈHC…œ²„3¬‰K±x&%´\$™Ò`bÉôùmë¸äÏìjXLQ×€1”Ž(Ì}¤&8Èm¼àêMAÇ!–}OÃçkZ£ÊY,˜©™ýW2ÖJÇL*‚åŒÀN&©`@É]c¬•–Sjd[EEü¼:åWœÍ;?3C:S¹šŠhzÏ?%î¯™iî@³ÎËÙcBð@®OœÊVÁµ·‚‚.Žø)-ÓI“±‚˜²¦;ÊÓúÊP<·˜ÈÕË••jËOæ« Z·!h–(ñCCHš×P±mG–,Ôú÷Xdýs°µs¹Öóø!Ã›°R¾ÃÕðäšÝ‹p¤\rÜÉà\$)XØ²d‘2Ú­ÃkÝ°ÍsrÅ‰ 5ÎYm-Dçîé®AžX†V¹¸4Q~ŸÛªWïJé½·vd²óú³•àjÏýlAòIÁÇþSt< óJ:—â|ÛDd„\\>\0š¶ÝWð÷.)Ÿ…ËUoiMòFßKZ\n1wÖ JiOC…yïRËW9!Me]˜´¥¦ïVô:¬©\rñ²òÅXS¼}ï®J:WF×š¿2’‹,Èª³5²<C©îýâ]zßß:âÈ>n±gõb)Ýmp>Öù°Ú/!Öu«£0›{v¹øÈ”™W³ÍŽßëºû§Oí»´<SŒ½Ãmí?àûFXíMkSºÜÅL\n+««³Ï(¿‘Ç ^exE+EÐy	må“H¹»EË:f¿Pþ¿ƒî#ìÍŸ°èú,”v¢ûí('n÷þæµiâº÷O«jë³õ_/Õ×md^°Ó…Jï_}…Ìß]Šû½õöëçÝò;µ OÂ‰}{¯”*ÓOÙM‚&S[ƒ¦õÿåØºA(=ÿ‹äp-b%\0:ãÀEïð#Néþ(ðÇ,4å^ô‡Rà Ö\$Â.€«ÝÂÐÃLË&ÜL°ÅÃ¶¶æÚ#\"â- —‚R:åB***¢`ÙpXŠ,UåNÆïÛ-Î»°-ŒlžÐ6Ñ-´Ù„\r€Vf `Öä\"FÎ\"0k\$ü\r Ìk‚ð=\"pãƒîmÉv\n€Œ p)Å­	ä¼Ë²êOú%«UpÇÉð×°Ì‚l°\"l¢3Š¨®D« ›	ð¢õ^ÏBÀ.âòÿbÊ|'ÜBï\n':4˜%	 :0^**\\\$s&â•Î*dÅÐV¢ \"S².lƒ\rhÊRE¬ÿñ?QDméÔ1¬Ì§±BÑ\rˆÞ\n³ª%ì¸þ¯”ÌñQÊÞ\0§ñi	FªÊ&vÊÒ¤î]jzf¬Ö8:\0˜šåÈÑ ñ¥àŒ #NÛ«z¡ë†%é„›D¬'e>-€ó€†<õ€v*ìZª64ðî5C0)…ÓêœŠ€ÊõÏˆ¬ÆHôÎx\"š-K\"2ïÜ¶àÊ¤v\$ÎŠ¢¤½Ò! Ù\rQxmò À";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸ŽÊÚV¨?\$W¡‰¡FÃÂE{ü‡-‰:>W9ÏJ|Á¨eRhY¨+dxB&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4S!ÄÀËdPB¾ñä=ÈtO¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6»c(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈGL=ËsºŒ2NAª¥D–êÅ\n	r\\ÓìYE]\r %Lij«&î²\$‹[2B€Ý¯ÚZ¬ÅÒÄE?ió®A_Å–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅ\nÊã'	j>\\¦—²lU­HóÒE*èŒõ\\¹¬‘>ÈfÁdöAx©oÍˆAk”¸MÊóB6T6WŽJ9Œv\$ÂG©Í¼&-HqZš8Ï0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼ÌŠaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl<’;Î¿±tâÈo“µÓ<ê7l0†òVå…EÃè6LóA^´£xÌ3\r•K\nü+WÓ©MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎíŽach9{£Î0»aêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèGÌ„†£Ö›[ê+z…Â“•ô\\*ƒ„hu;˜Òú[ ƒ‹!ìC–PR€Ø…\\C9eÌK„EiÐ½=\nJ\nŒ`dÌ&†ænÃ‘©‰ÁÌ;ªÕ²CÀp\r*X2A&¥Tº™SjuOªFÕ*§U*­Vªõb¬Õª·W ½]œ|°Â\r‹c,…”³rÐZKP-`Ð¶Ô…!¬Ò®RªžØnYËŒº‘*JOÚú1©iÃråJ?ˆDÈ\nøUI*C¥mŠ¹ò‹Wa©\rÂ	 sö`Èk¶eZU¦(}J{›w+¢%(éO#PdØT“6DÈ4/+lx…Fù)Ž¡(e£Ÿ#–”Ôt•i¨2O&!âÔ&a\$“> i[&–-ÀÜ¶Mé¿\nX8³ž0r\rá´Õ\$¢‰½V €1¾•¸m\rñ³È2ÌâÆT4†Á@'…0¨BÈ‹\\®ØÀÄ”Óö/iMBM™ìµ£âXóŸJ»Rt)Õ½™s!	CF@®…ÓMX2@P3³½´†ç¼²Ãz¦\nP1Î}\0005Æ”Ö©@Œ…SžïÙe*ÖY#¨\r#j¨Ò*³ÚqÐ¡U±­†þ‘”òd\$|T\0 ž\0U\n …@‹_¬\0D¡0\"ØdÃ	”•–=1»².ÓÔjîÊ¡³jŠr…±@%.Ú¼¢BìAÒ“y›Ñ—”AjH«? \"Sà”¢´…a8«f&L˜\rA1“a`KíK:E‹¢Þ®Ä.á×“z·4ñ¿.§ssŽ·	ÎÝB×qošD§îy¯Bèånœnt›(3ìƒ*Ë\r-¤:+€ÜŒiï@ÉØ¦\0u!,=qÄˆ#ÇzQj6\"°”Ë‰TKÒPsÂ¯d|Nps¿uM‡4Õêw›AL4‡¦dèpŒÈ)†S^ÍØdn„ˆ”97z-æ;™EÄØ Y~%«dÖ†PîMà¶ÄåCÙaH‘ìúø`'˜ü£eK«CÕ¢­¢ƒä´”™’k]	Åvd§Q©¸\$»Zí¡'vŒ‚fÙJM2öÇM’&XáÝ0¬EåŸJðP^«5ºóeª™ˆ)™üs®µÆž‹la“:`°¡P „0'êª\r&Ê©©cLç©·›!ÌäšP\"” ®Z¡(86~›j`\0€‚]{‰³%í1—´BJOx°ƒOC\\‚ûµÛ˜›\n\rìe“¡A™¦L¼²:È3:M¤,Ÿ-PHø°„»Ô«²vÌ`»9í’B!y5À&]»öZc(\"Xïh\\d!‹!ßû¤.PË(w#˜t!’}—¸¡*‚HjšÜøcÊ „¢Ät%Ó˜8±/¿¨grd¾›|µä§x;´4Š”2SC{¢—GlM™ÈØdÞŠ3”.»SY:ú‚PÜ’0ÀˆÍÉžöç”°”@PûžÜt75˜1\$Ýqlõ’ä~Ú×bÁùü‰èÑÚ p±ìh/¯0ba;Yúo\n °)ÃÚô¥æîÙ3‘YOˆœ16^wá){*Ûs)m-‚Ù\"Öò†˜¡mÊÚÚs[„yã²«ÏSïé·ïX‰ÿ*ö«PVQNÊ¾É1@@\n,Ó(¿çî¹Ý.C{»·VïÜë‰\r³ù!KÍõ?!’>«ƒ˜·eÊæ¡NçàzwÂºŽjë[îçÞœ%±ûNfÞ}ßên1?²Øßë¸Ïá¿gy_ý˜þ+Ì;`õ:Þ[~ùÌ+mÇÜÚEÐÚ¬édÔÛ\"ä¿ˆºÁël®dÈ8ìÍ˜Í'nûïæõd2ò(a\0ªëï\0ýÇ_08ÌíÄð)ëX!¯¶ML²•\$Ëcçb>/¡PˆNHd%è0lÞãŽf²DGÜ*°mz10vä‚\0Hi,?Z•-ÜiæbO‡LºF¯ˆp\nj²È(`¯ž!pjIÒÀB÷	0Žbi|·NG° EpPÍeïÐ4L¨il¾P,ÂÎfúö¤&þNÊõeÜ\\ÎÇîÞ-¡lý£ÊÿÂ‚É\"žû,”ß±¸B&p1îø.N€èQ»#Ñ‘9çl9Ñ?ƒ”^Â&èÇXµjlÒ`†ê9ö1­¦('[¯ô÷ïÒëïþ+0îö]\r1!\r­+ÇŸ	ˆçÑE,þ/§L2Q[0F0-´»“o\$2+^öÞ•…ïŒiÈq0“ñÔ¸oRü¦Pd~¶q×\"	±êHÑM1ÞHÑÌî¦,öÙd0D2	^%Q¸ðRhÑåÐÎÄ½OÃ\"f¢òå\"„>õC§#É[Q\$KðG9 /ÔMDLäò-r\\LÒa1±#’fÓjd/¨*¦+£®ÊÞÜMÜc‘Z>kÌÉâäk±¨¼Ð¶ô¤÷ãckDé\"ò	œ!ô×îxpÆzbñ[*ÌæHš‰åT#c‚€ê#€¦cI-Cu-²”\"r˜À# `ð?ðƒâ’)p`è@Øj¾`ÖrªfZeæb‘ Ú[\0ÒÇº\\\"fÊ¶²Úe€Ä‘ªœ\n ¨ÀZ\0@V Ç2C¸îmn½büÚ-¬kâ:b\$n–º\nˆðçd	³%2Œm¦F]±åî×{ƒ Ï@@R@WcÕ+b†«ŽäØñ£øÛbè%)˜EèDœcì	Š¢ž#¸á³¾¥Z4£r8\$@¯fú”âÑÊ'+pq/bï¬Bïñ\$D*Xðb>Î¸¿\$?Cï# Pã>®ð\nƒ„5ãf4Rã3ª\ràà¾¥PÄÐ:ŠK@+c1À‚³&„èMi\nTK8²Ï\"h³pæ0æ®fÁT)ôU0œÊ	D?é@™…ÐñEîé“^@¬ Æ ê\r¥ü&Ï> ôŠ’«k;ˆ9C¤ág>K_?2Ž(Ë¤»‹¨ú¯„LµËP¥“Ó+£©¬.¶°ÐNr|h¦ç(l?‘6EÀ	\0t	 š@¦\n`";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß.-Òä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi2=é^ËÁ¨¬ÄÂ9-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKm\r%2!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÙpÂ2\r£HÜ2ŽApÞ9áxÊ7ZÃÀékŽcHßlA\0è0Úƒ(é_ãØ0ÃXD	#hà6£m®:xÂpA{ƒ@Þ2\\Cx@:Žc(@)Š\"`Óm®4›’˜²Ð£€²«ÒSS”4«¤Oè;*“étøá¬Ö®¡ïÎI“7m.R²G´»ËC\r¼Y-Šú±>ÅÄ1‚RëJ&„º#U£+hù5+Éãr—Õ¦†Ÿ>GQê’Ú)¬:“0ŸIò+W3ª5¤Ü€5J„§/q¤¬–UŽ›/,ºu­7‰Ô[S‚¹0h[ø——aÂ)zM¸0ùEF¤ŠÆôÐ0H“J¤pížþ€Ã­®óµÇpVä–\"ú•#í‹óíeÀ¤q¦„Æ¬Erjnïù/¦¥IñÞ»ÑË½æÉ<ñè†	ˆl`â%/Ó&¯b¾üºÐCÝ—Ó¹ŽU”ép¾3R¥<-%˜™EGš\"U^2i»gËã[ö1ßUKŸF}Î'îÑ_eT‡yS²SnwPÑKDÄ ‰‘ô,ì´hOÉ¿WÈñ\r;Ælçœ¾¬CXÒ¦Pí±þ¿´¬ð´A°:&¦îÂ[!¦l ô„/KŠ*nŒã½Ç^SÓ½4ÇhÏ²rHÝù&*¤¡Ã7´mNª£0PðZ\"2¼|Ï+†H ý»æ|q×ëD,H¸ƒ•°\\_:–z¬µ±Ä2½KÌHA-òÄè°C\rŠj²+˜îÓù&‹¤’6HÂCc½\$dP\\ÂÀ*¤rDùö`wKëÎ.¢8šâÄ‰)¼w‰øïŸfVe\"†DýJ—Ò“Ñ*ÌÔ¢n/¡Ê’/dà6ÒØÙ	\$J*Æ`¸˜€¥‘[—é­EläB DQê/•8¶ŒÌÂp.)êBy\0¤0†ÓQ#ø0V\$ƒT+2y[«•v¯UúÁXkc¬•–³VzÑZkUk­•¶–êßë…q®UÎ—Jë]«¼hC¥.UOÂ,_+í~‡9£)\$VƒðŸö1(`:˜*Q&™¶e:Ù\"¬8ð1Ã§v)\0Ÿap‡†STwa£/FÜ©Ñ¯J	Ã9èÔËL4rä‰{\$\$\rç£\"ñ	Í›¥RA;¼X€H\nÉU,ŽÍ  ¸—™–hºs%R:tD§`ŠRÍáL¢~Le4!|¥Ä£²’ôáþ!¢Å˜–è§¥!\\E²¢¶šÊiFDóLÁ¶jÓ*ŽŠ?k†ö#1vã)Q)P6¦¬ðª)LuŽãÀ:JX[‚\0‚³rÐ£R¦[•J®ÍL¹ön.|óT4eåAÐ©éß•Ë\n#aNš1!W¤w'“QQ9ìú«•ãTûÊã)¹Ô‰3ÊÙSgHõ];‚a%‰¾tç¢œÔrahÎí|+ÉÞR\"ÓõjÐÂd&©hïÄRês˜[\r,åÐµ“CkB0T«qâû•ØŒR ˆ€sÆVê£7ñTÔyPb'àšŠðGÞy³G)µŠCéM*='g1¦<9¬„Þ½\r4Ð`®<òrfûñB	õÿÎn¬SýSÅiêÄbÆ§Äô¡?°1‚p`©>4‹Òõ˜|ûÒa¨~ÅgL¯Œìþ[4	Qˆ<¾sßÎ1\$5´¨Éføã€†¼ª+/³ä‰§Ó*»Œq•Š«Ç9Ó7yZÿàò£»o™Ž¿8ÅŽþpb¹ÉÂ5¢\\8ºw×àÍšéŽù 1^h.H»w\rgé3åMÁH2¯0ÒÃt[Á¸ŒQc•ùþTVü‹[VjÛv¨ÇÐ–Ò<4qXq2f¸¥‹¸CµÙn#ù\$ì³»RðÚu*Än!Oºâ¢ñíëæÈ‘~D©øt™ÏuÿÒ\rþ‡XCn/s:dUyªGÖåHûÍØ=HéY‰&ÊÌô…·ì°Ù8ãS÷3Ñuå&b—¾¨ò;š½úæß¶ÔÎèPÈÐÅ€]ð×¼Ô•ÖÉï«)RÁ‡H¦%ÙLÏQ™È›O\$~êT—òÖ¶ÞõCêe7”<RX\nœ°kPL¹¡Ó‰qf6DŒ„èÃy]&BoÎ};GAg‡T¥r,A.\0 ‚ Aa ê´He¢Ë‘…àÞèuÁi­°É6í±(b‘ê(“5fðSI\0¼44j~ZC8ÏI&NÿKæU ¸ˆœ•”Gà¼\\Ëµü¬ìsüo~Û—³ÉJwåIç—ñJY*\$X¼W<Ù`óÒ¦Fœ#œ¨Þ}Ó!x‹¾¢O'éÎª9~\0øúuï½1_ø\$ò3ø/‹·.'´? û]òeÂ#âl—–*žÍ=c¬¾¸›À\\ÄiË@Ð-_’—þh//¬HXÝ*¢×³» ¼ÄÚeà½á…ÔåQ¤tÀoæ¢®%¯¨¸m\"ýQæÝé3‚ ª|çÆö…R‚ï^4Ë:Tp(\$ãzÏ>¦`;Oè3Ãüâ«öÌ(TTÑæ@@P ä§*@BjÃá BÈØÔhºé†»¤\"ëD´.0tF²ò0|*èœÚ¤ÚrPˆÜŽ EüÏ‰dÏÉ¨}-2+#j.-¼fÇ•\"¹	0\"RÌÐÐPÁŽfç“	@±gÐˆ*=.ÛîôÄIx~‚pâO˜08¨5\rDð)+>»kïÔ3>Äè„DÊV§….xD\n6&*âKÒbâ²çñ*ãˆFÇpþ«ôK…>c±mêH6¤4÷n×+ª°ªTlPÆoPÐ„¤ŒTâ1VSæ®+ìp,ÀP¥oNNìŽ\0SÆþÎÈò-°pÚ×®ÃÐ.1µ”ÏHññœÂ\$²§ÉE@Î(jì.‚°öˆ1½pÀ§.§ˆé\rÇºÔqÐ˜­òèðÙñ°´ŒÇùÐí¯ûÂ£‹|„‘ý±šäÆ°©âÃnšHbºÛ¿L»Ëç\r8PÃòé‚dõOÏìMeo@T2(•,9+èeLQ#JVdR:ïüO^ï§\"+­úÍB+zòGL»òÐq½'nL:}21å!¬¿'±×p• 0õ qæÛ%=¬ð÷Î,­J˜LÍ<!ÊhÂJl7ÑÙ&®²g¬Þ6‡gƒJdFcÒÊ§\n8û¯¥M”>†TÆÆ¢»‹ðwÝ+ìúJ†;rÚ6O«+'L8´NRÛ°Óìÿ!çÞã<},TMìœæ,¢òù¬V¡Î1•\$ðß!‚—#/4gW4±É(1Ÿ\$Ž5’ë¨ÑðùŽªÉð5ä/6†ªÑ±\"´j1Ó^¸ñôÐippÓ†‘‹0ˆÒ)àÿH(êpþlI2’S¨Ô.fcO;S¬ms…*­ÖæsÄ¤GpgBf&¬Úu¬:ar72oHRêé6Nû0È%c;Ò\\t²aóMår@RÃ@“'ò—4ñg(¦M@r9@ÑÉ6æ5 ”)'Ô»/Ðp+Þ?¥é.>}qaB´Bó™<ÏÎ8¡	DG()EÓzçtTét\nçí|0dB+nbSöudÚ¸O•äÿóŽÐ(†\"¤ˆ¾õ©SGBT•*sµ<Ô9Iã6wì©H¥w”»JÔ!@íE:pûDÓ0áëJ¾½JëGc<­EëHeILãJ¨'¬:\"D•Ôš~¢S]Kó7u!ÍECçþvè{F´ëFè¤j‡å•L´—Ag'•0åÕtÏ5qRòæÃ+8Õ7r­	Ó/QÏãBº¢[Rn¯VuBæåSA6éóÔmt„ëB°ë‹ÿU•I(U<T¸æ•ŠÙécYáT¯QYµ‰9®8¬2¤:45õ`K\$Þ“BÔv<¯â\ndM®@µÒ\"‚÷DÜùÒZÓÒõ:#ŒsHóï#5ì¸«Ï´RBøwòr.&žþŠÁo‰¦ÄF¿_G~zàš æ[`ä#¥Æ†yeÖÆbícc¯L°h5¥&Ï9'	_±9dé	öDó´ö †… Øbú:bbËfxÕO„z¶lä£­9JÀKd€Àˆ2¦¥/.ŒI\0@\n ¨ÀZ	4tdu†((0õ–S.ÈÂIo/šõsI`1^+Œ!l¬&|¬Íhä˜H™§¨oµ)\"·£ÑV32ô2Þ¯â—LiRf¯ÔH?ï¯ÄPBˆ´: Eq4F™Â2Dô@ÒˆDÏèëJ¬ƒˆ#KÓrE\\NÍoCãu\nôä±H¤ÎÏ.¦2o(’lGÎ‡p¼Ü1[fr¹,‡Ä¯wtÜ\r+p¨3'Ì²S+ŸxnxÑ]y¶‰ð úÐ»x”H‹w£\nÓa9/i\réW¡wÈ®´hÆ·+y|wx¤à¢„gRoµÉMh1ðD S(LÜpv3ôQs‡ÊE„òjßgÿò¸¥–å/k‹”f-QG”ò9R°EÇ~SÊß\\fÖÉ\"[9×Ïk²\$kªÐex<w)/S.T”Î&îTÜ÷2%(ÅbvÓ{-ÇJÂDž3Ò”Òss­ãym×ƒ0´…t”‰N9OˆF\$\"f\"E:LìbSûCh‚ˆÃWÂ>8\0";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊS·2bÙ!¯«|–Æð;I7ÅÒäŠë#´Û=ÀÐõMó“TŒRí/Ô\rÒž®­ÓY'ERj!*§¹ôâØƒÅ5eO¯;w4ÓÓ…‚Á°³’ÜWFóò‰,ÏÊ}!ITdÿX/‚Z¶*5¹O5ÚSyB§”+eÉQ„âŸ’ô1QT0¥*«qÈÈuáyAàÂðC(Ì„C@è:˜t…ã¾# Û£\\7ŽC8^2ØØðý\rÃ˜Ò7ã¡æ0ã#(é‚ðÂ7\ra|\$£ƒÜ6ãƒ xŒ!òâùgàÞ2>o¨æò\nbˆ˜4¿P%…{SŒMƒ!°­Êð‹¶”†E©÷‰LPGŽ5ÒEòÂ0DÔÓ{ˆ¼DJQ}ëj}X4E•Ûî.Ú’Ör*½¬Ô–<|T–fü@£z&èíN HKÅTœdÕ´9s2PõþåW•R{{7 SÝ9zn‘tWA3{¯EO_±0ª½d\"`Cê6\0ì0ƒ¨Ë¾êjšÙ¬^r£‹Î³6îòÜõ¼ñý`ØÄ€Sk£wE+Úý%ð1M{8µ¥£l/\nî¹7Ue5€¡uWP@'nDâÛÂP/¢€2\$E›ÄÁD4O±é¬wLß3·\rŒ@æÙz1i@µ7ð¯–È€4fÍ¬“”ôßÈ¦B\\S.“ŠºÝn.P¢6·øv]\"iXïUé …ŽŠ#¡yDÕ¸œÞMaš\$0Âÿ!„ŽÖ‰‚è]E°ÎB¢×ÈÃÕ5ÕŠd²±Ò´*6âák?S0XZ¢q)é¢•¾ÿÖk›Q†æ,âüGM0öÄ³‹Rd1ˆÕd”¥\\Š%^nà9\0£ºwÙAä\rá˜3Æ(Ó—Ø¦%‚™H¦ yç\r¬¼<‚\0êÈC¨cgÄ9†gn`oèÐ9‚Ãæ¤èaá…	jãÁ\rÁÔý€æ\nZq[tQS‚\0†ÂFRÏ€Ö–â SK4h Ä­Å£˜j^/\nHÉ9*þÞ[jsæå?æ£NÚ¨-ÉÕô›u¶htoD8‰¨ÁnPUÂŒ(ÅîW	&Õ¦±/Ízg7”fyN	¡„9Ÿ äz(`sìa¢PðK€¸/æ\0À˜#a)†0àîÄ“bÌa1Æ<È\$ì™\0002–V™hleìÅ™³VnÎYÛ=gòå•††ÑeÈa\rg‘¦†+&Ãs9iÆu¶¢°\$äyEFÅWMA“dþn“Õ/›%t›d(…Fs”©ØØ[q'L€ê\02^¥‘QÆWî£+q€ÈÍtz@×\"-^ó‚¸—•g’‹v…Ë)qB‰\0ºTÂ+©DÐD±Ë+Æ‹™¦z²¤\0ÎÉc•”\n¦ B˜N†ÖÅI§ñ\0^3èÅMf¨=º¶Â™1„ ðeC]Ž¼È»n(DÛ)Á\$‡“¼ ih‡™Ü´pÜÑáþ8»ê0r\rá´SThyüc€€1Ê–Ž|ÏéòÈ2´å6”Jt„Âð\0žÂ¡„Ï@ªÛèë	âu(LŒ“aAÍ¿ ‘«\\¤ÒR‹:ÇkË–ª¸ý4›ëu¦º¦ûY†ä‡¾Œ¾O3`ÞÄAÿA¤3‚’/Aí<‡±„`©^{D\r,ÕŒ;š›zoY b§‹gÿAStP	X°ÌÒ\$t0Ó€’gt¨Á>SìÖ\n#1eµ;š’ÝŠpaiU€±ì¶p;\$§¿ÜQ\0]a8%L½ÒÂ“^,”o*R'×·Ê[\né…t\"Á¾Šwè)ˆ½¹N	½òNÝèÎho%G:ÂK o0~ŽæÜç¨<ýõZí…‚Ëä @'ÙHJŠ2ÏMíâŽ6:§Xˆð[Ú”¹\r]°ÃÈ’L£¶ÆÕ‘¸ÄT‡–…6APÁmDLVâ%DäÖ«¼ÄùURzÕEâ. ÊÍƒLŒŒ76e²aJ‰Ô.@éŸÊäï]«Å¦ÂoèÛØF¶µ±V€D:ÏØ‚ŽFÏ’|#‘vk§3@É‘OŠ¦iU¨Álæ2ânÄº&sÆÊ¹u¦ç\na¤=;ð‡zÃ„¼wáL2žàÆ~ƒ#ÎJ:æhëÍž)¦œ˜š5@DÐc(]\r.ó–Vˆ{(wÞËDÆ¢ÝÉ”:¨@úgKò‡›ºÚFÖz×Y¢õ‘â8Á.ø	 7oeö…	•öjùµúlC·þúÜ›ñX8P×÷Ûˆ”šHï…¿¼¨c§gÌrÍŽ¡]Ö-äû£ÌíÑcéÕÛ_úQM~w±îug¦qDM}{ÓlO0²V¿Œ:ÛR8Dl`‚T\n!„€AyX¨i>8å€žPßwO°pÉ½9§Vˆ/Y`Ë~âÚCÍIÑtœH àƒì \\ê/ÜsâÙ´õ÷S·N¿W:Y´öfØØg1·×;ûñ+“tô¼Ôó˜_‰ArÜ×+¤(*áÌèŽ/Úo/ÞpâØ!þƒªûïð}¯ôp/ø¸ÿëzØnPýÈ^p\rœögê´/Î®0\"ÅLö±ÂœÇè)ožóïl@¢ÎDð&‰°îŽœ‰ðÿÍp(ïÂÇÈ'\0p^ýO¢œ.ÈYPf'¨˜JiÂìÏ=P/¢öîHZî°<ïàif&w+ÔâBxÇ\$nÌÆ/BÂ\\ðÀPÐÄo.B„­’ 0ªº#\n¾‰\nÂ’P¤/¼Å&[f -Éš)ë*6ãrüii¢8¢Ü%BäÊÑÕ°X¢ØFüã¯D¹ï30™¢¾âÅ:G¢žž¤¢2k8-ˆÞ5Oi`;R{\"‹¥„Xäúô”/Vöä\n&¦íp¦ÝÐ(î	hr îoîx×q1°\r„UÅ‚pd×M@ ¬Ìƒnœ>mïúœð\0Pn±è|HÞJ/X¸ýGÀÑ\nÁP-®PnJÍqŠçp˜3Q“‘—ï°¯î¯NËcŒ[‘×q¹.¬ÿoªoÍ¬ïHæˆQóí‡&êÏE¸Ï…ä(„šó¨”X0’U.|¨¦ÞñRËç¢m#âð2o žB\\¥š#\r	 	\0ôrHV‹N±¥¼}Í ô«ˆëB†ÒÒx0n²f÷±³ å ÎÁ'á§d5hI~\0PÅ²€'€ÎM Â\rb‰Â¿5Ê£\"6Ýn*RN8ñÇŒí„-’ÍÑºØm^õòÖÙ\0Òé)o\\…\rŽ…p› ‹’r“¨}¢ˆMn{í|Ø™\r72¨ˆHß!oï/î%…33|H÷'PëPq1{4P-4“3QpãK‚ó:Bæí1qÛ ©ø.' ôp€²©(+\n[ïó	eƒR.ðC*X.ý!2RÎþs€RÓCs‰*°ŒO“Žó0%9KA0LPbÎRŽòý’Ãó+,³ÍSÐï¯=“5±xˆSy9²”îä0ËRŽS?/Ó«.³}3CŒ\nÖTcrSµ%Ë„ÌÓtÍí4­BÚÍR½ˆP-ÁT!Ï M(ÞâÄÄ‰©û/JõB%kBrã;ñÚâÔ-8R–ÓM!ÓÕ?ÌHœd\n´¨êÌÏí-F(‡È´-Câk‰þËè0!“ç?óÖHç7\$N1BQù!e\$(ª‡\r@IÌÜÎÑÎIMÌ¬lò‡\nÓ_@³ã-”X&Ñ=³)á1“±ôÉ/°cMå<í†ŠîÒö’®ŽMœJïNà¯UsÝN/@Óg0BÜõtMTÊìò6ù1ÂóLkP´ìÚòO3äØuP’=óñ 4ÏP/T53Th‡Oñ}C\nƒŠÛKhÎgÛ§»Õd/h×Åo6PA¶ÂDtMä):hèHs£74ÝîîçÓ­.ÓûYRF|#…1³S³{QeZ“pl4Nó÷:óúP§Py5#5Óõ}¢¢XèLXõXu¯T³ÕÌyÀÚ´	Ulzuß+µä´õÃS‹pðªÏ\$ÞyT6SÂ³nÞ5a]PÔßYó-4s1SíDàä£'ÝOÓ‰R‰óOV7bA'T’‰[6E6TæØk€oö=e3ïeu'!µè?c«‡f–ÕüØ¥\rCµ›¤«!ÖGcV…Rö‰U¶COcc4ÕDÔ8†´²ÅuÖÛ6A\\UØð/¸Uƒ2u,•M2îVÂãƒ5–mTç§QV_mHlDýk¶\rj+3OÒŠ¯	\$öULÕÖñÏ\rn¶Ùnõ7!–‚œ/7Rõ,ÛRé*I·'QhÕ¡nVHP×'GökpRn6Ñ?¯cr–	_–¼A5iQÚú\rØã/CZ­·n;uÕq¨ª3Ìºû³q6\0‹s‹Es<.°)PÞN5µop—SwÍ·x½·†u³¥\rÕ5oUÉRÈC\rm*+R+âÂMa;1SÏIšöê¡¦*\$\0€ê\$ ¦§CÇ}Ãó~7yFq©]§§ªùSÉÐ@†€ä\r€V¾­â\r`@dŒrwGxwÊ\r¦†\r Ì“¦˜. ŒÈIs~'rJ˜\rÀ@\n ¨ÀZ\0@c€Ç‚äj.·™w°òü—¢+ç-<%Ÿ9U•ÇZM…÷›†c¯x7¥‡¼6rgy7³o‘Å`ÙDÞµGˆ¬B06NB… 	¸/ƒ0¨œTN5˜»•LÜ!LM,z¦ÂH1KM\$så*ï®p5%Lï&%tÅo L7=U3_xæ¿Œ—¼¹	ê-Áo,n»\$k‘q‚ÏŠ?Œ3¸äß.süƒ§Jô«æì(Ã‹:#µ‰X|ò“Žˆ|rvÓøÛp±e×6ð1ún¤.8‘U\\y]u’\$´w…b–Ëhõ£@ï°\n„=Ãä<7ë„Kæ\rààÞf&åª7”®°nÔhC´ÖêÊõ¹r/N,{\"\0{q|-Á=#0Ñ2ò²Îu	\0Ð¿Â”Ì°ýAn[lý‹ùÔ9‚žt& Kö(„04þÁ~@¬ Æ ê\r¶68’i5G\${‘~¬™µzÄ+KÅŠøÈžã\"Ÿ“Âñ”\nåaøã0p–ÖM4|T>±°žÒq}¤™R´¶[w&¹id³ofudžCì%‡<G¦DUp *ó3\0	\0@š	 t\n`¦";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰sàºhr†5 š°Ò¯#’¶*#«ð‚Ë¢8ÆB¢¦ƒ/+²¸‰¬™Š_ PŽ2ì`éG\"cäè\nrÚ‹Œ£’f9=ïÜ4F¿N,X&'**¨¼­È\n°¤2¸¡ 2ÑjÚ5(ÍÔÏG!â42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇÃDÖ\$ãš)Š2ÁKü’‚KhúFKïhÃ»±øê5Žˆ`ê1º4ÌpÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´®Àƒb:7\0Aq\rKõËpÜvÔrý\r‘2#„›P/Ò`‚:¤kF¶½ó~\"£0Â:ƒ @Ë^/%jÀ.€PŒ:ÃXÆÃÈ’èëOLî}xÉÇãÏŒM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡qÈˆ:Ø\n2DäY³Šc[&‡fé3õN´ìsc[4è½büÇ¨Ò<¹‰Þ\"”ÀÌM’_YvmÄ=3uÊý+ëûˆô£mŽ#.l5›¶mÀQŠPm¨Æ«Àhü»')Þ¢*§cÐÂp©xÂ¶94ƒx[µ¾ìñÎï¼CN[XL˜Ì³tŠ7ŒÃ2«%Â~S4E£{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐT	?_ƒ(P9…)pœ2²Ñ»Ä‚b˜¤#jƒ \\KêË¾Ê?»âà„6â:¥ÂªR2½\n43²Ép­_”(\r]ELïúÃYx)˜äŸå\\„Ÿ9-A5päh0såÍPða”{é¨Î&ÔÞœSšuNéä;§´úQRJRJFÁe¢”bŽR\nHÆ©U.ÅTÒœSÍ´ç*%H©Šh U*¬D\$ºÿØQ*NÀ«*\\}KiþG®õ™ˆsú®r=¬Í«R\nj˜Á./Eðœ%Ä®˜Áy*­-Å¤pCƒCà	@£¹FþhÄu Ìl='¨¯Åñâ#®žR\\—ÛËly\$™Øµìa\\èˆ5GRtODq+ôÁê@ÏÁ½<KŒ„ ·ECÉš(á¥«ƒr6FÐÉPâMS\nÈˆüNŸËèh9À€1’È,Í[052É”ÚA€O\naQ	Fg¿ùQ0®æÌ—N)BDÌšÊFŠŒ¡p ÍP7bCQ„v¬CI)C™.t\0±²XŸz!@XÇÒiˆA¥ !*GF¬”ŠÀraGõôËÈ¾’¡Id2J\0†¦f#^¡‰\ne´;³HF™PO	À€*…\0ˆB E\0 Ñ6–€ƒ™3Fé †R©P &ZcLé©íG²LÚRŠ|âƒÑ¤j‹Ä6•j¡T™mGÅµ3Á|]ª\0pbì¨\"7Ù*w£K×egi[ P@ÙekcÒ·‡\0Ta‰zfÑÆRVô–f«~*‘ˆ·7ÈÌþŒÛš<Õ5Ô8w6]ócmíÅfK%`\\©ƒÎpÀÞíìãG¬`7ÙïFˆù(AH2©àÒÎOšŒ\"&­%ÕÎ•:\r¡¼š™°¡ã©HA%09±ö†ibùù!¾ÜÚN_…_\"ô’“f<‚DsG@!£ÐàólqfåÄòžsÒÝ›Ã°š¾]C/ pi.÷mPÊÙZÏ2ˆµ¨#“,Q{^ZvVJ”SÃ#˜sZAÓöÒµue#ÕžJ;Gê#ÅÄá#ˆðÑÁLDÄ£5jáÉI´bMÄÚµù\n#½7bD˜˜ ßX¹/[XY'Õ Aa Kunj¨	“4„‚±º\"AÞò:FÂ…™¶6V:æà€ˆ C&\\µ#Ù‡/®ãQ&%`Ž?Zæ‘LŠx+›/¿ê€Ù¸.!W4glÖÆ3qÅ'QhPœìç—Œ¥ˆÎíƒüõŸ(¦jÅ9´Pšá¡43ÊÌK»;HÔ\\#‘imX‚Eí.z)á%Ë›+æ’Ÿô¦–Ðr+=jÌÑ¢µƒðÒ¹¿Yè]˜uiÒY³]k,ã¯ SˆÐ†%!fˆƒ½Å#¢m\$®Êµ»!lÐÐ’c½µ\n:\r\$F\\ÝQt–Î··6q…†PÅ¹’J9ÆíçBƒ¢à\nL«‚éMªXgÊjí^•FÉYÃ\r»­üèƒä|S8t¨pþXêÙ\$®…¨[Û	ÿ‡«g4w¸|w‹“íÈ·PLAÛÌÂE{°ãøæ‚ãäk—_Üìæ¹)Îæ¼Ã;5ÎZô‹uRZÍDƒIFVkd­—Z„Î€É:ŸGcˆ¬u\"8ÔTå†êg@+tî boþQY7As’K‚¢õy‰w“Åä@A@d«ÅÚŸõ”±¦ÿ#æHcšXNñ»Ñl§Üç.îB¬yæ<û_ßì?70¶““ç/z¯gïœ‡Ëø¾Yã|µéæ<ãÊs©NqÛ+'\\Ó;,^Oô>bÓ¹â>€œoêÊ1&õÇÏØi¬¿¢´ö+¾ÙÀúÏuëÃ±Ì«l“|+¨(Ó7ÂÄöù.fÎ??P¡ù.Íö~—Û£ßw•¿ƒœ­ÑV;\\žþ¥à¼ˆE»Lfm’Ÿ3ŠVƒ9}^¿&b`ÒŒýêª /ä OìÀÌfâ Œà.f|æÐ ¤øÂ>‹„ã¯úý©ú\"4úoÆ¬ÿÂèdrôƒÆ,&ªeäXìn¿Dó/¾¿% úÏ6ôðXç¯>üç¯¨±ŒbdaˆÆ‰*ó/®*eã‰ÏJûzÆpŽ!ÀˆëÐ*HÞÐ‹\n¬n(cK£ÞLb.AßnX\$jØãß ¤ùd±ƒ/\r¯xôo&'Ï*ÅÐçÏÌä0¢Y§tbªÆXðú8‹<vîäõÌV‰p¥æ„£ÑnQDQXÆVE\">’D<%ç5\rî@zQ6\$ÇÕLóBù	í\nh’¢pÂaHðpÎÒ8 CÐôÖ…¤Ñ¥&Â=:^¬2•ƒƒp”	ìBüŽI	'S!í|%Ñ’¬A‚‡ð¥¬7ÎºcX¬°¨eÄ.6‚\rqŒBÌ{ÑL9Â|%ÃôCËp	\rtùâãJÀ¬©. jÂõ@\\Ñ\nÉÔC€Ü_j@’Ý€æÊÒ_ƒÌ2æ%†(¥øFvµÐÀXf64%À1FJ7è Ä’[‹RÚB23ãX«Š\\ÄïO\$…½	ÇBö‡PÌ2Z ›&Èd~\r€V€#Ú­ÄR.¡\r£œ}†\$¡„%0¥€¨ÀZ\0@9ÀÆ@bŠíVÑZÕêt/°Ìì‰DzÍ~Îƒ(ÓŒÕ,o\nÈ„ŠÂÐEl2cðèeŽ0€Ú'Ã uIÔ10HÞ¤šCìÄÈ»)..3e´é²ŒBb»Eæ+\nÐ<\nz1L8[®3‰3Cð\r@Þ=0oàvãZ2fÈa,ZåâW&îq„n9ë5ƒNì/­tÛ36“\\^SC,“v».È±O78'5ÀÞæ0ÀôðÓ5£°+XÆÆ@`\n¾³F\$ç0'`ú\$Fgfzrk«³Âíd^h‚XD4/µrÚL'î`êDÊÃ9g4¬'âª0À| ì#†\"ÆðtÅ-ó¨m¦0?“´é\0ê!eÎ-ÆÊð\rå/ê#.R\nD¢+ö\n²ÞéÏÃ *À";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb*\r#ƒæ)ã`NùŽ©(ÒË£(9ºƒ\nHã0K« !£îú†KÌD	(ðÈã+Ð2Ž‹³ &?ŠüPø«ïH¦—µÃ\"ëCøç®ÀP‡È#\n7,€…-#ªzp£EHÜ4ŒcJhÅ Ê2a–n|Ü4Î\rZ‚0Îøè‰ ÐÊÁèD4ƒ à9‡Ax^;Ñr>›O)‚ê3…îý+»èÌ„LBJØŽ”¾ÏXD\"¨Ê¡\$aà^0‡ÐZk \rxÈÙ¿(8@)Š\"bXßÎHàÇ4Á*,c	¨¼²CÊ‚:Œc¢ÈY,rVÂÙ‰£\\€Ú•°ÓkÍi£Å²í*QUÏHmn1-ÀÝwlg+ƒ¨Ú½PÄ5JõbI*ÌÃ)#ÏÓÐ½ƒ¨2ŒÃ:²ö:Œ¶ËaÁÀŒ‘XŒ ŒìðÃ4Î²^ÂI ãˆ8ì7¥#`Ø7áBxä£_ ÆïçØ˜a•©¶}¯•n£%-Äã.7™SÍòÂÀVl22•ÝzºDØ¬ÉnÚÓEÂS90ØàU«oìV`N¡åu\\^Ê?ÃrN9î/J¼ÀÎÉ³L[H ÖµèD(‰¢«ªH£Â,9qbèü¯TóÈlµ×2q›Æ(ô³Ð¤ƒ’Ñ´©*:7ŒÃ3ù<¸\nÇÏ6‹ *\rêâ}.r’‡7ÌU˜7¯“ñ (ðÎ0¯.6íx&«Ëô2…˜Sã[¾b˜¤#yÃ²þpAÜ\\¬\$75É*N«.£o.»v#Ÿf7O)äëÙŽL§lLIšm#	ÐYšbºHrEOº¾§œšPr©åÊÆÔ–Á&	h9‡rê­Ð\$2”'Ó „PÊ!E(Àî£ƒ\"%à¹I©PÜ¥Ð2š†êuªD©r¦UTŽ/å\\¬‘B7JÙ\\ç´q˜@Ní=`J[‹w=„\$ÀÅ\"t**Ce<ƒÀ4ƒ±†+°æsfL\$jC¦ÉFÈÎ€H\n7¸ôT±Á\0(* ¥!B,™ÍôV„g}4—²\n^_ |‘ )‚s5,}åhô5ÒjNÉëg3a„Š À@ÀXz&…D˜„’\"M\$…Våmˆ%µnn  2Ä€’ äz\0A†%ä¬›§¶Ùšº—Ð0›\0l“²\n<)…Bœ±>#Ñ§‰Lƒ(db……fM	\0WË]±˜çü{”¢~ä¬„À¦Iec§–-PüŸPÞGÈód.íh&‚8ÄSP ÁR=§…nO\\{“Aš_†ÔÚA0JÇØ‚†d\\žQC³\"³5Ov¬\0U\n …@‹IÁ\0D¡0\"Òä ‡L#0^Ëà¿QfjÉ)‰FP™°äòÉÃVuÌBÑ);‡xç,—R‡Ú{ªÔ²žSÂk	é•FŽ´&GÂøÉ¼’¦\r»%:ÀÐ§)s3B²”2b’Ö&•ÎQMøäÏûsUÕ\$GDßMc4MÄ\\dDMò( ‘=ÎêØb	±¤½7Ï…¬¥ bmÑÕLÀIEcÙQJÎÑ‹ÙC6zÒS‚Š;\$^z ÛÅdq´*0äsÃHzb«õ\r†,´g	Ï<U„ò··>uŸeh|°^¦£ùp•¹®¡ÞÆØuóoŒ€Ã¡¸£…·—ï ­ò DP’Ã -µ^†ÄÇêy±œ–d0âUGÌ€AZ!¥‰\$àåSoÉÊ\$D{àTžCs2#S§h¦žHSqU¤_/eOÔÄ²F ‘¢€ˆÚ\\enªå*\":ZC	\0¸—cdê¤äµ6´Fp•Gú]I;vMÝ)ºS ôx ]RéÃ\0Ê»Õ»¡ÉËò3°ô\$Kƒú#ôåþÚÙHžÃÐÊNŒšßc\np	JæK+Ö/–‰Å¯Ë®Ùf£“]\r¹™F„`aé'åefõþL^†DÍº,’Lâÿ'~_\$y§DåWK2Æp6ZC//â©¦\\Z¾®ü;ÔÒ@H‘^*å(™pÉ©Ãt÷”Z®ÎE¢ÙÊ&\rËeQ»´˜MÒxFAä˜¨¶z¥¯ð0 á”18Í@„qXL}i@¬‚b%ûe\$Ø,—Ëý¦²M4+dè¦Þ¢Oð8\n	ˆa‹\$…r«}b§00‚ÕjlÓÝk&•º)É¥›b©Ï’ÄÑ‘­\"öX†ÿy££°Kíw\n_Óç}k—\\bã­\\2¶Îß¸Õwã“©rÀLiì¢ã7€g°è“ìs3ÀøY³Ôû‘‡M”rB;œˆÎ‚%a,eršqP9Ý&æ%Õ#ð9³Ÿ(½b¶öÞd.†c'½—–Õ¯UîMC3\rÍ:†@R‰8nûâûú½ÖJ°™9šj·¨’ÇÊ»mƒíõÛ´™¶éÂ{Êa°Äœõý_ß|â»ðžïæÞç›—„ïØ«„øöùä³ßä«7Èé‡8«­>]bõ²aŸÌže¶f|ÓèK±·oÁËÓQ˜Ñ?õ¹÷ÉxÎ0aµÿEëÌxl‡ðh÷Ãã}Ë¿·ëúi~Jx‚Á3MÓ¥îl‹©w{f2!Zi›´d+4üŸ‰È{ÙøÈYÊýÖƒ'_ï:òå´X€»ÙP¾F&ªÌ­„¢Bb(¬ù\0»ç.¯¥œ¾„`}Œ\\Á+ör§fëÅðâ¯X\\H[bH÷®×+òNIÅ¸‘LT‚ª[Žú÷Ï¬Há,øÆß°@ù¥›KêóKG¤¬°\r{Eú;ì(À#\nl¨Ò©,Ö2f\$\$ÉŽ·8_ðS¯fö¯ŠóOHöƒØøŽû0£\nè,mkÒM‡‚Ö(ÛÆÚ(ëgc_Ðw«*LÅ,WéÂ¬#œ_D62Ž^}\$U	êÞí„Ú#ºaQO–0hß`ËyQ	\novô‚Q‘¢c…°M‘#1‘°Ön±Q6MPø<i4(ïÐ>pfò‰7èÑÍ 1°¯ðØnÑYoò®\nÀ‚>.±Ý,£OaD=v£Q]ítÀÑ:rŒžŽ_%VPçO\nÄJdE«0mÄAp³„¤Å¢b	´\r’\nOj@Žøk+‡²b®*EE¦b¡â˜A€ßFíˆÅoB0\"ð\nX¬–{n^\$‚ø-ªZˆ0+%¸ZDŽ1cP Ë(>nûñºzÎÓÑöéÏuÒ8àJ& Œ6Ld‚\r€V™Ð ,bNdæ’40¨\$frLp¢j>f B:y ª\n€Œ pÈ'f1ÎÆòJ qNJÌLð42?\0–ršÎïTDéZq(jB¯&2}ÎVrðn[àò¶bP·ng=cÚƒÞ´l\"1l)\0#ÖH¥\$&Ä\$ÀÂ—†!&Qxèg\"J2ˆ&Iÿ)¦	“Ì¦²6ã!!\$e¬˜È«(é°\0¶Àá.6EÆñR@LƒêÂaNós8·Ó=\0fH7“L’’AS75ƒï‹z²#M\"²|{hú=‚l»/5¤YEædåŒ¬Ç¶ÿ:¼ðó0ÎÆ%ŽÊåIÌs“9¦ŒåN´êŽ¸ 60&d\r\"b­„·ëË%ì©Sx?¦>/Cù-Ã \nÂ^÷rÌçC  9+å40ƒ&Ôt­¬ñ	>òå4d¬Ý³TNQADf	\\J ƒÌö`„œ/Dö	\0@š	 t\n`¦";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡Æ)02Ž ô1Œ P„4§£“L\ni©ŠRB8Ê7±€ä4Æ¢˜Ê=#Ãl:)*406Çƒ(ä P‹!	¨ P2ÄC|JÖ°lj(\"ÃHÐé#›z9Æ¢¤®0ºKèá4Íi¾ž.ïŠ5;¢óÉC=´Ð@)Š\"cŽú@2ŒÁèD4ƒ à9‡Ax^;ÓpÂ2\r±Ä¬%#8^1Žaz²ýÓpÞ7áü0ŽC<aIãF7\ra|˜	ÜŠ7AïØxŒ!ðA\"¶(,9¥b´69¸è¢þC{ÜòMã¢–5µêX(\rãÐÚÒ\rÍê%5µËs´­ëfÁ\rcªÕºˆ“p5Ä(ÈCôßØ\r`—þý.qâ2:Ž(Æ\nØ%È‰àé= P‚Ø#BL9¶+eèÆ4\\©¨A–-ã}¯iRï0Œ:×‘¦<3äƒ;™ÚWe¬\rc\$\r#´ª‹SìŒà­Ž\r6QU\"C~ý¦ yÓâ¹åh˜ANµ›hÂG”JnË•·àôfC(í¸1lÞü>}ÐÞÚÓ)B=9×%Í¿¨ù\\§ZC¢s4ñ#GqEKÆîLƒÌ 	C©GbHÚ‰LXŠ<t™8óÇoh»\\À^—·ÍprO*ñCµ¦ó\r–óÎ£3Ã0Ì¡\rÃ*V'Œ”Üøn\n¿eÃ~Xà^£šæOóÄÙB&¡`@=z¯ÚüI[þßàµÜØ6ÀLÐL¦¾r|6ú>š%êúþÍí”3áZ÷Ÿ\0uxï½ìùÐBÿ}FÀÂ¾çš^{ôzIüàÀ'òÛßÚz¦š\0>8l`+æ{ï¢#ƒ`fˆŠ#„Ð^¾0ÖO\0C\naH#à@ò)ß'oˆ3Ú`˜ä!€ïä¿ÇüMÏb4‰¬c€eÌ¢õ*iWâ~†Ã’{Doy@&¤Fwßp‰ÌVŸWË×*z%—¢3DM^˜hLŽ+´a²eì‘H©5*¥ÔÊ›Sª}õ*5J©ÕJ«'‘UX«5j­Á¹Wjô:%‚ÉXÑ\\XË!e,Â&S\nƒÞ0ä›Â¢0F’¡'qL9ÅXÆ¼qpYp	—9¡zI	Á:O‚¤•—’÷,z;èøL¿âÃ!E5íEa}/æj\0\"A‘ÒhXÊÁ\0P	@L†+H´G@Â…‚ke”]MdTPœ`ÆË†º\"ˆ@!Ù1ò8Àñ’ó8LÙt¹'p°àO¹pN‰¬6Nê0Âª	]ËÕ†¨«!1ê| b®D‘t\r/|@¨ˆÞ/è×ÂŒç•ãçnóý’·Þü`>(ê\0žÂ£˜/ô)a§·ÄàJ¹({ô0Î²ò&ôMzUá˜4†pêpÄj…5,‘p4™ID‚±ABðµDÂJIÊ°m.f=Â<H	\r¡¾w“`Œ&á¿X¤Ø¡:œ÷ÈâpJéXÛ\0 †CÓ.:\$Ö}–²RjÉèv\$Hí÷Ò7iM\"ãM\$4ñØ‘BŽÂrf‰É…ˆ3«BíbppV…f.&°*ZÑŒ'A‰ÙU¬æñà¶jb‡6pI‰%o%+Ù÷¦~lá:a°ám˜² Ío'ÎÍ3´LlÓ3\0žÒ‰ÒðÂè)ì¹µ	Á8CØë…äv—™%\$ËYÑ£ÖëŒùKàûJ\nP¤4†3ZUyŒJÁè§©…Ÿ>œÙ›surÍùÂ¡J…¼‹Ðj ÂQÒÏsŠÈ|®•’³åÜ*;‡k	B(…#ˆMKù‹	÷º}ßw‘w—MÎLFY7o	a­JÁ¦‘©¬ÊNB]Ù+¶´HÈš0x¶­ùx’Dq”PèZ‡È5Xgâ¶%†M6ÜæØ’mbÅiÄb‰3«`åmsÇ[ÕW7f³Xt¡inF1”µ\0¡õq¾•ÐÔUyHoÃ38l(Ô*†Be2Žu×qŽ­Çºà@}ÒÞB'h•™šJ Aa «ÑbLp&¥5…À•„0Ð{NÍÉ/áé{0P^WØ,PhÁ­„™gáCÎ½×A­†Óvây#Ji¬äQ­~«Þ¶“ÞËº÷ËjMÐ9øly¥b\\÷µ.´Ì]¥vÞü°]}ÙëÜ“¶ÞÆn['pìÝÉw5Ú#;¥t.‚4ÁwrM.rôÉ™U\0M[”¤@îéY:BÿÛÛÓeî(Ÿ³â–½â\\'Š&¹I¸öí`¼lò=z²¢föä4Û!ŒXÕMîº@Ä<Ó\\R+Bâ	ÜÔ‘b%Î\nS×xªÀÞJÂÕJÉa{NsÈð á””Y',Fìâ\naÂDÞ‚ÖÂ,¿+ªÍ²³ÛfVÊÛp”:àFÏ«í¢^\r%”¤ƒØq;Ÿ^7F ;ÖîÿWrû7ûLß‡;;dòäð[èßás_‘WÅŸñ\$é½‹åøT<a?7ó dÕéàç±¿»«zï®;‰—ç™Ú¾˜•ùæµæ]Õè˜¤xÍZ&Ô½ìñ7‘‚Ì²†TË35Nf(h%Ê\r!B á“M¼+Cb´ø'?ž°H©ìÉå³)6œ¤õf–ð±Pà2¹Yé¬=ˆ†0@\n4u°_€¤‡Ú\$Çv¯™ôd	Ðd\r\$½b8ð‰ð\rE†ò/hþëË\0/BŠïdó‹¬s+³\0OÇ\0à¦Çíô#Oöô£Jèç(rG,ô\röö-*èÂ§Í¦|Õn bt<ÄüF‚\n OU„Ø#ÍÎÚRŠÎ\0Û+XÞ#å\n¯~<¢s ÃïÅ-ØÛI¨íP%ðPß°6ÚîµŽ°Ë±C¤Í!ßG°Œp]\r[ìÏ#‰'\r/‚ÍÚÚp`Üé¶\ràÔ_ú7êê#.¬!¯ØF‰ff\\&!Z(ãö\rJZÅð…¤4¼#ÅÿñT1\$Àà9±\n–¦R\$†Œªˆ²oÐ\rÌ¢7ÐÊnLŽºdÉ£NAÃŒá¬¼ú\"öëbLÂy‚.¶ëHý¬–'fžÍø³J¦Ç¥É'AF…Du¢xZ-(u¥ÕeÚÑ­ÏX9í•I”õPrÈ¹‘½q¦Áï&Ú£z±Æ#,Xq­+1æ™NÂÅã:=f0x¦&	b*Í÷åÜ¹\$Æ¦\\<¦ÊBm¥qÀ4¯ð£QŽÿ®XÐc#Úöl‡\rg#\$Lª¾¢^ÑíI\$¦Â9ÒZ½*\"ì´àì=ñ/Æ,I@Ö(Hé\"p(@Ò#ðJ²~'’‘p'ñz#rš@reëÒNª9¦(Cq›ÏIòºüðé)Pî]Ñà5Æ-&m-,ÖÎ„­+ðÏ2ÞÍ²ãß.¬ÝR°ön‘*lç.Ä³-…äÍŒêCäYQº7D\$ÓRå,0ÐKF“1Òñ#\r1¤)/,à´#éØÈâã\n:]ÐŠ23:Bç<Éêžàë!!†G\"Å 3V”“ZUìk	rjL5b56ãG5ç¢Úóv¾BV	b2€ÃÌ`¦Ð…ä¨:p£\"%§€A‚ŒDâ\nhÜ°,b€DmÃV(CD]µ€ÚÛsj{´i+Á<°šµ“zžÐ1=sÇ0w=êÔíZ[ÀØc¢(f¤|N¢_Qj(‡¼\\¬™¦VF‡Å-\$éèÂl–ÂH‰Ä.i’çÆ\\\n ¨ÀZW5oÐtjù\0ÓÜÝóÐÝ\nöt°\r	p¶Þi>TFu0ßíÛ<Ðº\"	¦\"¢.ßhÄwFjuæÖ^ÒPÇ#BþÕàbï£	b8übüC@f\n ”‚\$Óò|LôÙ˜11d¿\n`_‹DCP´x4#¨Nh®F·	¾¼€m²A{LÍvbPü\rÑH<-ËÀõ´ößT°œ+|}d5PF×O¢{âˆjå«>üµü0Ë.`ÝR•P‡°¼<b„ÈÎ}SOq×ŒP&„Z±Z‰Åæ§Be`a4÷bF÷¢‚(qÊhlSWHØý ða ¬'Ieè/03„.ð(Ã\" >ò\"<ú5D<À´@E¼ò’s´À=ƒAPÄ·«4\rDp™«¨v«x¸Ç¢6±Qõ#2™(äÏ£s\nEbx ";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎOÙíÂŽ‡“…üœ—8ƒ“Ð\rî;j˜ŒŽ€èž®#+°µ°œ2Žƒ´\"5¸C*É\n-\0P˜§¦°¦<ª(¦…<ðß­ƒ°Ü‰éÏˆê0¨óµÁ\"‚È¢ãsB­Qxx0„Bz3¡ÐËŽ˜t…ã¼¬\$#jÖ¼¬ã8^¥KãÂj7 ÃxÜ„K ä¹’h¾1&cpÖÂHÚ6\nPèã|¡Žaˆ:\rŠaŽª\0@)Š0új“ŠÌ ØÚŒ‘°+)è,:c ëd3HŒÃHÊ;U\rFÔ§ÀPœ<´-‚.†Œ\0ÅX HKZÖé¨ç#è´*?p–²8’ÂžÀBê±„€ÆžÙ,0ˆ2ŒÃê64#²Ú:ÁÔ‰MIB2+N32þ)Œ#m“lŽƒrÖî\niÓ¸4Ë8æ²3Iû¦Ü/öÈØ‘>ðÓ-0Â¢šœ\rÎ‘BC\$2<N\rÍÕƒ`Z9Œl“¡F…£]‘‰õI\n»Eí•SQ-*:FñÍU–£šÈB{«\n ¹¸ÃæpúçÀP ´T«ÂÔ¿ÎÃ†©^œ90ÙÓ-ŒY~c\nz-1_Û²7 –Z07ŒÃ6*ªGM¨ëŠƒ| (äÈ:Œcê9ŒÖØA\"-c˜X˜[¨Â3Œ+[’¡Ö²ÐÝgŒ¡@æ¤â¨Î<àkKB!ŠbŒ¬hJ–„\r}äå)U«n9Y)8˜ä<áÀÕ,`è“ÄãœË ©ˆß†—³CÒuîûÂñ´1â2Ä\$éJ 9d1Œ49\$U}Š'^\\HòL—&Éã¤£)Ê²¼³-ŽAt»/Ìã,Ä¥wsDÕ6MÓƒ%9Î³ºñj¡SäüyTzFØ³¨@M\0 äé—3Ãúë’zw\rít”°æGZ™¡fÅµÙ!jÃE+<3¤œ¸‚8)ëG0”¹»DÝ‰r'èË™°@@P­¾“â€@AAD.ô˜X)iâ.NUË¹’äßÑÙ8äy:s~óIQ,%Æ}eàÌO—ˆaEÍ³czÏ\"övO3žCÞ[Èˆyl„4«PÜàÓ©&¡L“Ðâ¸ f:Ä¼ †GgÑKd}E(E2;l%\$®„ð¦6ˆ¾2†¸ÎíÁ{ mè€†ÖÁùkE0Õ”(ÕÉÙ==…,4¨¢‰ gSæ‚\n”¢NcÁ\0k2Dp^\\ÉÄQ0ž—dR@F\nA”îÓÈÄ¨I\"¢™|¹V¡Ä‡4\\s(—ÛT!KÍœ„à@B€D!P\"ÎÐ@(L³Ñ`&dƒ‘xPYkµ\nÚ\0‡¥:á-§p&DIAÍÇ<#Åa×-9…ñr†£Úœ³˜7Òe ´9~š@5	8SÁŽ‘5vê]I)JPÐÙË;4-j” æŽÛÐs<G<+,¹¡KQ0SÊü½‘àÒÇIŠf!ª2ÁPu•*H‡êGX|F\n#mM‡%Z¯°ÛUë¦GŒ6‰€¦JÍËOPº—uÖCÒe89/BÖ±Ö‚&›è4Ï¢Â!šŠ¼«UJ©Ôº¦UÐÕDJËû34¨ñ…—ð–IX€Mb”·Y¥†IC1:\rFÚp—ÉÉ9–hæþÓ†ËR.-Z-&ý£#ø\"›ùkCî­Ã@¹K9‘0ÁIg¾†\"háQF¬ÂœµpÄw‹üó\n!„€AçYõ3æ–;Á¨0À!G¡¨ÏKWV}C„.G±Z\0^U•Ù¼1d%]+S)Œb	eµZ¶ûnÕ\0O	nüßó/ˆ¥T¡È„»p€ØÆ†‡`Ëý~ÊÂxV Ò–È—s\$(P'\r¶Ù~f˜°]f„øÓãb'37¼;«ògˆé\$+–ˆd™*£g“l£‡)¸ŠøW¡Šn©›D+K†Ø’  Þ#[ª½e¹¯Ì*m³[DœƒÖâtYe~´PÚEÞ±¦(P“çí&Ãƒ/*4ÏCR‰” J<\$öR»²…P¥2ÒuÖVébt¶›5F³Dm5[´â-Eá¶<tÄÖ\\(B%ô¿Ð&¨j‰K<õe“s­uî¸‚¡ÏUSALõ2.^Ò½?¥3Ùl,ýŸÙú°\0(­…Ä‘•]Aî›[ÓÊØ¼Rý¦t#@ÜI%e›l¤s(¾ª¤ô–•j]ÑL÷\r=ÜzƒtµÓ`Yæ—ÐtÏ@s>¦ß¬ûƒš-¡¨HžW0˜»Â…‹Z¦¿X\0â Ó…4 	â‰oqñ€éÆ°q	 <{S0kgöÔœ{åSa8­3Ùê—sr\\Ê	æ¤NÐWHr%5¤dK‹6gƒDbf«´âRC@±\\1g°qlrƒ-¤”Â*\nÑ±®—?ŠSƒ9®³Å°TIê3½lÏ0´@Ty²îµÜÉZ+HÐUm¦­Ö¢ÕLßÓ\r’á»ò™©…OÃtÄ5ñ¾+@ô/\$IÕzÝ²W?hUýÇäu8Hºz\"xÂOè¼ì³ÞÞ]•ª°Ñèï£Vgž¿Ô£¦Ì¡Ð\r‹=ˆ¢•._\r²ÛÆp2¯«j\\²øÍâÝ;—¯•Ð9ÞÑùÜWèE>Lí7ÁNZçÖ³L u›Ñ'·W)®¹ì	Õ¨ñO âö§š¢Å:4ð&O«è7ïô~WËjtN\roêÞ©\\áíÒû\"\0àüˆóÈ­ÅŠóï›ÃúÜoû\0¦X4­ªAÏÐ&ä\n‹d¶ èp<·b¢ßp¦pF¶pJõmNû+uDp^·€¨Ž¯8>‹èEpVÿ\ngDáÎx>ë±ð*¦f\$c4¹ož8@ÒÏ¿	¢’idÃˆ ØhBä¾¯Ô¨)R¨EžÓLqföÅ`ÍÏX	e‚¾¢ÆfÜ0Ê÷cyÄBSC@Q/têPè©kêVB0åŒHÇøåkFÄmÒd\r€V\rcÄ\rl ´h\0ë­€ã>4-ø4ÃZÉHéè:ëÂ2à¨Àpt\0ÊääF%æ\$ìÄˆ`è2Ñlo.8(B¤šéÔâ–Œë¥&#\0Ó¯ºübö&m~@CzÏCº;nÜ7Ì¼b±uq'¼`±úw\n¼ê9í–­ˆ~²Ñ¸€&\\RÅú#â[j”BPÔcÚ(\"¥­Ì<æDPPÓƒ(ÙÍÈ¥Ì¦£MNÒ‰ZQíÆxd@àÙ1çQýÎõ‘ù² BÌâb2*‡ÑÒ®Î;ë\$Wåêœ®­±zœàšÕ¤Ü-¶aäÚbW\$¦ åéjkN&\$%Ö'!pÈ.;†u\"\"Ú)ë²-Š- ¨£Ë†© Y€\rÑâ0Ê*¢îæbbæ§Šq)#Xò]oôþÐ§\"<cÀ¡ÂÔŒhŠA\".\r@";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	fÂÏã:9#c2/KÞ-)SÞ¡µîz-:`T`æÍ0èíH49BpÊÎ:CÖã(Þ6Çë Ê	¤V‘£ƒÃ ƒËÔ6»h`ì¸Ãòâ(#˜æ;ãéÊt¥ÉƒxÎ€SÅ2LÈ;Âï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3„Að’6Ž|ø‡xÂ*˜A\$Ê:\rísh‚\n2jHªM-Øë1³QS”:C«z:º²›:¢½â²´;„ÒäKêþÛÚ¥%®ñÇ£(ê†(SHæ‘Hz!) ÝwjZð'I%³¯=WNG‚ø7…¢Ljáß`P­H4r\nž”)Ë{&Ë„zb\$\0PŒò·£J@÷ˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®QH/ÏU ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç)»uèZ%ßR˜È7æºK‡ÊLÐÅÍc]»o¹NBs¯À»\n±¡SnÆ2úì02§ SRÕÉu8á2Â¨cÞ\"¼Ìá=öÓ¤í)&×­Ê2œ†)ìC‰=ãeí«H:ã0Ì6Q©˜‚1Ib6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Ás Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïv ÷Þáò¾/xT:Å„rèÞšf!ŠbŒ o4Ç‘œ™\$Q_2 ÆÈƒdÊC©Dä®\"žÌHQ	€nyÐ\0È‰ãªuŒ|¯óÎ8s…q¬ÐÄK	ñ(\rÆµ•»ÈB^Ïá»0y%dMOPr©É1·‡ŒSÜ/0²;@ž“àeOÊ¨5\n¡ÔJ‹Q¡ÉG‡%\"FÔ¢–dje£Åä~¨ŠT­ÙUÆòpÃr­UäÊÀÅbüQú¶¦µ¼SŒ‰Ë\$)æåYŸ‚`Â©ñp¦Fs\"uB€H\n\0´)’Õ.fšÃVFñ\nºr¶AËÑ3/*4PätŒQ?Æ€”âtç\nÙ””ˆçBœdLãô’2NSJƒ©*Èè(* ¦#”ò>×‘^@rX;tA•€†çW 0aÊ“’nôá	>(h‡¤RNå F‡‡U\n-Qx_Ã’.Žð™;¨È`h)™…r8û Y³œ“XûÌòºjØ¡!‘F³ªK\r¢×)æˆ¿Ã6”JŠÑJ4†‚+¹+*I˜P	áL*Ö B„„(Á¼¥;“SÃÓëŽ”ƒrŽRJX \ròÑ-ÅêoF36&’'Tñå£PšÅfM“hYH\rÌ‘üjWF•àL¤ÍdGð@‚ P4/<Œº4\\lR™#æÂJ‡*zñ•Cx}dÌ#0@È†ð¼LF|˜œ\\‚p \n¡@\"¨lB¡0\"Øuèä§øaIöÉ@·Š˜º´m)1Ÿ¤°ž¬Ú\"¤ÜžÓ&¤5:¢¶QûžS´O‰óeíµÅðÏ¨gX\rqÅ@î³+4n¶EÄ&«k ¤X×®ÂÔ`“‹¿3©‰Î¦aÃKH>ªpß6äUI	¯îÖx²5b£ºŒ)òìËÓ§*™Ê±h,å¸CÈ.%òhFøà‡…_HÍ¡1Ž	ÃÓb‘F€Pk'A®¾¶‚°É`wX¶@ø(*Ù›‚{ å|[y›nI™5:—eÎÒ'ƒ»ZkdÛðÀ•ÓÅä4Ý6È¶¬ñwÇù:€0Ä#`bÕÚ¼öNÃE¤¶™À—F<\\B¦N%‡W\$³|–dZÄ-4A˜êš›%1,Evï@é°™Âo?Š4ÆJf¯™\r¥Å?OÍÜç\rt,0T!\$\0ãM™»8oÔ7¡pêñ\$•Ð”–ùØ SiÎ|3PT–üyb~]s™ÅÞ@ôášAí1iR`A®A,=¡¡3Ý6¹—B\rYf&€)¥–sÕFGVM]¨6¢3ºÉß¹¤!(ÈëP\r²©±IÔ†’«ZßSÂ¹	¾©ŠZñ3=Wá´nÔbonœ2½®uØ¼×®yaê¸áqLÉ›Øeý›ÖÙW	Æ‰ÁÍÚ¹<*¹J!¤/Ô@…/T~LØ=lKEÆ#i[—\"*. “\\Ü{Ì)&H©f†ãEd`NY•F®EœÕÏxHB‰”<ÙÁlÛÌ`A[‡\\Ä^ýî¥µ¿DXÀ„1q4ç9¸ñk ^¬âçDmünÏq0#IéojØœž¡‹H7SÃ¡—¢•²gÔzÏCÎÎâZ„‘PÎ¯`<t†^Ör£X3/ì(ƒ0ÀèÃ}˜B¸\n™ôâaûÛ#=ýšËI\0b™\n¨«ÛcWŠK:îÝÆdl<Ð¨¾_\0 &YÐSe,´Jjáukvâ}b5ôV´ô{yêyßc0>»Ô5îµä÷F3î4èö(aÏ_»léïÒOïqgÃ÷¾ÇÜ-ûˆ¿´®K=ù§5—¿—Ó6Öî×Ï#€Í:¶&´8€'ê!_­Ö¾ÎÜûz½Kl\"_õžÆ0uÕ¸Wr1‘¡;ôTñÜOè\r¯ì%Oð0®èrëÌ†þ¬Š¯Oó\0¯drBf\n%Æ0 Z¬à´u\0æ# Û\0jÔHì:-ähû£âA)@ #Zx¨ LIj\\ŠÍã06\0@ÆxBb²ßÃÊ hìO§„¦\"¶4†!°=b°ä ÿð¯,ŽÇ£\0S…¶ÅÌ€ÈO2²BÉL˜1…¤¥¨öî¹\0ï%pºìOJÿ®Zpp®Éð¹æöÜÀÎÌÒÿƒâ&lÜ(°åÏ\"¸ï\"›\r/\rcäò,Ûÿ\rG\neøLë`#`	@ËP~éh_ÀæÝÈ@Ÿ06nLÔüÎÂö0Ë±<ú±Béš÷QK\0¹ïücÆåÀ\n¥nGÆ-ÍK¡€ÞÄÎG‡Â6V@¤2 Æ\rfBîp‚»É*Ïâ8ü¼gÎ^ø\$³o¯Ž3àË¤÷Ð¾ùÑ¹Ñd9Qº\\q³LÑ¦ø¾ëñÙ‘öqàÊ^ñíE²ÊEÈÿl-Ñö(¬§ÑS£ QûQ\\ëñø:±q ìž:±ôFeÍâšÎd¼:±ü¸d6AÌëPÀ¸„ºAò9!Q¶\"¤Â!`Énà”ÉÄ=à®\r\$\nY(d]@AË¦VJ W\r,\r?'1j¯n¶)Àß'éDuÆ^~	Z¢\$Lé¢ãã´ˆº•Ëº;b2Kb»…‡'\0‚oãL'oàØ¨š@†Y\0Ø`–s‘’b\$Z0£°æÊ†VO%¢¨r¤%ed\n ¨ÀZJ§d-ãý¼èObß-úÛ²‚Ô-åéX®&ÿ0éÎí\0ëNÑ®%MN1¦l«¾À/eæ©R1’JÞÊ„¬Ì¾kÃr6á5è£§‹. ç‰R-Ä~Eì	‚4I`š%\$X*Ê=äŠ\\àÚ:ŒÄÌŒY\n+|èb:†àN PYÊibH.¾ë\nÔm\"x ì:êb:\rrŽBÓ»:Ë:By‚ž\0Èwàá;“žps¢çb;(ä*Q’\r;ÊÏQœvâ˜#³ÈícšˆK`|\$–2âŒÀâ–òfyAêpIoè8GtoB¼ÞÜºàÆ®ü³óúÁÉ¢'D¬ÁÑh22n504IMÞ	“ª4“®Y Ý;@Êóæ‡D\n2ÄÒ¹ªzCTZ3ÀÉ Êµf ñÐÞÄd:eRi‡Jã¢XÌB84’(Bö  ";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTIF™äl–Ìh¤ÊªÂFtŠ.KLê\$ºË@Jyn”ÅÒ\$m/Jé4¤J¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓ6…^§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÓÖµlèWÔ3[iArLï¼ÕjÌ^ºêAj©KÞÌÄâ¾œN’§LßÊ¼z!\0Ð9£0z\r è8aÐ^Žøè\\0ŒƒhÒ7£\\7ŽC8^2ÙXð:eƒ˜Ò7å¡@:9HÊ:bbøÄ6#pÖÂHÚ8\rƒ(Û–à^0‡Áic Ð7Œ™¸Þ£˜Ê\nbˆ˜4æ\rû\$¹k1|ò%ÉnÞéR@P+ª~úí2eë¸\\J^êúAIDå¡JóâŸ@[Ê-¿><+Á!pä¿ÁÖÉ:³DÉêçÍF|²éºÈÄ<æ\0OBty‚?ƒÜ2ä7¿SO¥jN	®Ò¹65\"ÿ¯UØ†TÐß#¹î±>Ð‘¡Êz¢œrH>\né ?\\úÉvlŽ¡21ZPÞÚRÉqâÛëÔ'–Ï½Aá²IÚªˆªZèá®WÄŸáLÅ4,ÝJNj@ÖÔ–1œ'¹¥\"\nÞg””H‰Ê.¥p‡–ä™Ýqø\"‰ÈÜ•*u#Ò'±_žÅô@	#ë‚-±8¹K“ÉäÉ\n¤ðÌ3>n=ú0eâHTÃ†h	ÈA’\nQÐjØ}n-`­sìþ^Ñï‡è^!=‡f[¢	s†âPÂ·Gü‹*%O…+Ç«]:)R#;‡²T•‹…Ffî‹%ä½Iëo,¯-|¯¸ øž3ÓŒa°:\"@\$Ž©H+€„Å~È² _¤á¹ºî™‘qÂ²NÐÛ®ˆÐ(90oJÉÌXŠAg›‡EH*”BÐ9îH¦À‚´úšV\n¢`ÎŒ\$¤Vy\nÔÝt 5€¸½.JU{i“mÆV—Di(Mt¤:Æ¥ÆÊ“'*Ï´­*’NF¡-,ÛÚ–ë@òË¸7/ˆLÀm3ƒŠÃ\n–T1>)ü§òRKBS\nA7­CöCê{wÎxšÅ°I§1“A\0‚¬YHáq2Oj­&Í	FQÑq…è‚‡6ãª\\ÊŒÊ—D\"Y¾”®åRâ^£’¾l:'Bgq û\"’LYÒÕ°“S“Ø»h(‚^L1‡1\$Å³cLq2DÉ3(eL±—3\0ÜÌ™ /fÌá3ÀDÏšBh\"´ì}K’Ÿ?m9¨ 9Ð±õmíH9’bâ\\Ëú>¤•Br¯DÅã€Å%â³‚‡ÉŒ†7HØÇœB¥YÏ´FylÉùPU`•5HeRŽÇ¸sq\$0¦ÌÚÊRM%‰Ã2gåE+bèSÕŠ,OèA«,D\$\"r¢Ø¯«•£EmJ‡µ–Ô(€ A‚-´ð‡(‘•ñ+-'p¼°QnÙˆ*Y%m¦N2D‰[<äwo™þ‹\n)L‘Ü\"…ÝÈ§Â¢\\V‚R¸ˆ®L'æXˆ¨…wê”²¾ÈÕV|é ÄÆË·J‘bÅ8uª_‡4M£‚ Ÿä¡´Ñ)‚Mez'K<ƒÄdM	¦,…‘²ZK\"(™¥k>BËÆ“(‰m\$ Ç^fæâ]t½Ž†î—° Â˜Tð<š¼Z€KÙÁ³å]Úª»}Ê&\n|ÙP 8–~±¥Æµ~¼Â‡a `GÌŠ'š'^fq#'ê\"¿á{&‰’ƒ¤ÄRß	eî*‚\$`©qéBF¯/®C>9eÎ P	¶­¸V€®7ôŒÄå\\z‘1YrWÂ°0Þ\0tfaº×	¨‰1LUBuŒåœ³µ22ú—S‰R3¨ÚÁ*ˆg#!C¯¶³Ë‘{d™ƒfTDØÃ\$ÉzNò–ZRÌPµ§¥\n‘ÜZQZT!dik}öÉÅŽ¿üÚšã[ƒ³ržž#[	Í¦ÓË Ýn§%»\$Nî¯¤ÌD£ë´³ó,0žž·Å3\n'ìGÑ¥ÑÎZ´²«Ðð½lÒ…××Dø4d‹7æ‚MÆuv,ßJùVdæ—‰&òF®#d}µk°´¸ ç	 ÊÒHc:‰ššêY+or êºg¢Ÿ9Qµ\\ÒDÜ[Ž`£µ_ûyÊ¶Ã¨¢Ý^¦rˆŠ:ð‡§õ£Æö-­({è†Õ×¡\ní‹à^l\nïÚÜSÂ¬Þ•ß\rK	hgp9äSJ¤@/Wé©¹3ww»ÅnðFÂ /Þ{=1z‹T÷a‡gÖ°n¦z	¡ƒé¡WÅùýAJ<ó5ÀÃUC·-ÇTÜ0”\\;\\7%úAÚezÆgÛYbšî³™øßc·	1Z¿z§ÿ`˜-<`óq…_ØˆŽ‡.˜\$-lm2 [\\ù ×ïäƒ›¯1¯^B~^Q·/nïxÜHÍte5@‚T\n!„€@ êd Òªêg&¾\rÀÞ‚< àPf\0È0¥¨K,æ=«âI¢ÚKïnû§Nà@#&²¸b¸‡M%;B ˆ…8…ibæP£Èâ¥¬CLá4œ	@*bÚÌ«V·0htðD\"‰Ü˜°VEPZðð^âFm+¨Ê£y¡ëæ(°xæI2â&¥ÄŽ°Ê„JƒÀRkVRÃ²Åð(HFÉð`ŸéÖœ‚Q¢­Ð5	ötëƒ\rPSÐžÐl˜Ns\"‹,<ÝÐé\r0—ðœ™Ð M&µJBú¯^±ÈÌ®âß0OîR×„DqŽ äÒšKò¦IHHÈX±®JóDî“\"Ò/¬4Í\"ìE˜Qã,=kDGËf÷¨Øn¾³}B(i€ÑNÝpÒ @àÊH¶p‘;1>[Qn2L`5®f@k,‚ã,S‹²šë¸ç.s\"ÀsÌÒ%Ê¯nVHÎâJ,D(uÈšá2¾,–]Î`BÌ\n|1&ZKP8KäÂòV\"¾K¨<U)sd¯Fôº\$“QÄâ£R!dXsðÉ	àBÒ² ý.õ!	€;\"?Ž-+®\$>NÈòe!N2ŽC%\$Eƒp+huÊÐBòI&M&G)%FÚŒ®8Ed'cx0­—Â³%(UÂÜ“ öòî¯p·åŽpT,±{hÞÌ6ƒgÜ)è¢ÂÅ³)18)’Äw¨œ}Æ\nåðô±¦òÃÈß2m'\r(°®™Å0v\"Ô¹…„þçXBé”¹ÊÛâÔ'öJ(ð×.Ä­!’_(åRóYPÌ\\¢Ÿ\nÒ3#s1Ò„þD—#x×>Èp((e'í/6}Å\$‰rÇ2%%Òó#S\\D“<þ(Ï42!ónð(˜=òêõ„*­3E2HAPÖLÊ6oãüqÀòðe\nI\npv\$s5ðµ\$…“žq³¢±i\r:™cyÃ;\"{;p±+Ü,‘øÒ°\\²bÈÅDH^¡_6R[!³G­(öÐ‘?\r1?c?­¢qÑO5”\rô-³ïOwA(3xïó}6®Cí\"ûh* b²ô¬ Ð,4OOPð	N;‚³lžDd¤@s.\$ÌhˆóQ/~¤´V°í=ñ®ÎÔ].0”‚Œ\$³mŽ“L%E3òH£ÜÉ4~RÔb¯“ë@‹\$Éî¦ŽLzÒokBTB“ôÔò2&‚LôãZõ/®uÌ*ŒdÎoâòùŠÙ	c ‰¨ñÌpÆ‹A’sAÓ•9íØqñD²YtO§\nñTïC½(c£93€þ4=N¦íNò².ÓÅß?Õ	25h±èCStósWQÓlÔõ0sOÔ¨5ˆó{'T8õtô!’¼,õDýr×RaCN=WSH†ZJf/â¸8eBYÄY\\ƒ‘Ræ­Ì!P)j‚#T½³³â?4é<B«<“6uQóÂãÊ±5K5S‘7õS\\¯É:U^ŒÕ}O•?5+ óªÞÓ(‡WÄ]Uìõµo!EÛÃý“?V+bYÒ@{ù&Ž5R6.vË6	_±ô¼%À¾ª¾è&¥ªvR.†Ò¤Lè2*1bD«\\U=]¬7di3d¢%däM7v!^uQ#k¶“Of5'O5M]uf†2o^ï]e¶ufÝbÖW®:¶6sdŽ9fH‰\$âgG	\\3ÿercj§%p‘^N;^•R•ÿ+«ÛkƒæJuyl’É\"·jÖÕlÞHSue6³h6äùD4 õÒ²5µT<6ôû–Q`öm]ˆs.ÖÍ‹ð&O…-NÔ\$W\ri°“X×ïœåjýYXE¥\$åÎL…­jõ2ƒtêÁ”‰o²ïfò{t%Ò·7IkõCw\0§Ñl€W[]Å\\Ó¤Æì\n&DàKè&†´šóôÞÇÜU‘Þ s¬'p²áqJ8ê3‹y³ÑèäŽ;z…¢0¥nÛ\rÉqg_>BÇÐ2w– Ïˆ*nà¨ 	 Âf`B<g\0èk \nf€Æ¿~ŽwIKë±&³#’sðøµµ€³Ý{XU’:K-´Š£í	¤öhú\r€V`Øç ÖøD«i0ªìOµÐöã!gÕÔÊlÛlb¬Ò±œRTwE«ÍGEÅ§ö)h’¼\n ¨ÀZ”“»C&Ð²B-ÒH˜“ápRPr@/2E#âP¼Â¹â]|ì,oMÂÚäIr|ÀÕiTÕðê3„ËÊHå¥1ùzdZïêÝO£.éÉDé\$•÷	>‹E7»Ž¤L®äLÐx]oØ`ËÊ¸Z°m\$_qF¤ÅÄ2åd\\\$ìûïB%#³“JBNº­él\$Ð+ L!JïÜ„2 /\0Ñ‹d\"¯µ9¨ðá9)rf›T[j\n+Ïnâ4;–ó¤ì¤øÞqÄ½U'yƒŒíÐ™§ÔyÖU/9•\$Ô<â”Æ™·JáÙ¥rß˜R˜™¢~'ª}È‡8õe!Ù¦‚¿jä<HÒ¤ñø¦|g(|£ðÃµ±•FàŽˆ=H§ò”Ù†H.ÌxB*\r§0Ï¤^”°^èêÜÚ\rjï+Hx·¡,Þ´ï¶Ë«[!GŠRÜVë¤M7Ý.äÁ%	eWÈT7ŽÎd„T*fî¢ÜùØ÷¹BAyFÆåY}\$ìzˆF±Äûø–?9MMHm4È¨åNg§°GžR¯‚®øÔÖ\\™6¢Y”Úpîô,±ßàZiRŠP-:}âRDà-­–5Î%€";break;case"es":$f="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&B Ò#\n\n³9ÈÂH”¿›‘\"kPÚ2²àPŒ2¥¯Û‚4-Ã!Œ*ôO4@)9MàÊõ£ äa•±p™¤Ã˜ÀŽ‹ú1/Éú×I20§4®svöÃîx†âGÒjsRkù'5èØ&\rëˆÜê·ÉC†âŽRñcØÐÆÁèD4ƒ à9‡Ax^;Ðtb6¬ñ \\·ázóG8âáö“µ¤ô/¯£pÖÂJFÄn(xŒ!ð@¤éT:\nbŒ†¼&B´Ü<ƒÓ7ÀCK#£rë’Ë£è„ÅÌÂ°éCJ€Ù¬Ã7í¤\\'£*‹2±óžÖ#ò¼7 As/4¶6£lg	#Q|xâ¤ñ\0’7leK\$¥c¬’ž.3†ƒ+æ:ƒ @;.víˆË13ò1Àƒr.Ä±ll3{9¬0Òa–s[œæ¤4\\'ŽQ“ ŽcòÁ¼#,Îò¼SBÐ4Ùu‹ú¼R.x‚1ã\$×‹\r‰¨Âe,<×-¦îj+Z‰€PÛbÎ-Ü˜X–}°”L/¼Ÿ2ÈÖu¯h¨Ãºõˆlc~‹íC+Ö€n)¼ÇuÌ[¢\n\r#LƒÀ’5D’\$ÍØŠ<pŒFÚ2Û:[þI›É½î›\\\\ÊH‘.Ý³LâN\rã0ÌòcI‡k(*/‘ä P¨7§cÜà¿0öˆ‹Žc6ÿM+8æ/c“‚0Œã\nÎìÕu7`C(P9…0ˆÞ5²B¦)ÎÈì¼Žp\\\nÖèÙˆ%h°ÜÒ·ãb6þl“T3-Ãn|¦.‡W£>K•{¿sx@0ÅI>I\$É)‘ÇðaÃ\"É\rŸ2`±×é?hxáó@ÝÞbÞ~¡4¿‚Pðså¹X•@àL`d{éÔÎ§„ôŸò€PJ;¨`ÈòÔRŒQÁ¹H)&2¥T¸rS*mN©õB¨Û‘áTê¥U‘…\\¬‘7z„…‡HÔO	2a!ˆÉw\ngZY¦gðŒò0A”›3<Ï©Ž!:gäýŸØÌ€KÌi5!@\$\nÜI®#\0 ¤’Œ@ˆ!ƒdh³4Âd–¡ÀäT1ÁdœP¸s\"¥œá‡#²ƒ	KÈÁšãüÿ]‘Æ5Ï(ž’(êH9#}qX9(‰TFÞùð%8ø†âÍbi2	\$D<™³ø°RaÄæ›dÃ+q 'È…Ð@aº‰%\n¼ÉIR6H|Ï„ ™\0žÂ£ì\$ÉŒ›‘ÄbEL[²(/}@ôaÐá6'èY|¿Éÿ˜ò|ã>Cú›Ì)N-’Ì31šqø©¾PÄ\\T\$}‡†“ö‚¤~žD†YX©5SªF€9:i,F#z\$?IáŸúšÂLšá*ZrBÐA\nF& ž‚•B.¡´1ÆïMWŠ3\"•2§Ð IÈ®!Iœâz‚xpc#£(b\r,%rz	,JÔÒÃj9äÐòŸ£vØd¼ê}rp·PIBjro¬2žG— %…EŽ»\nðÝÒ‚fqfþÇ·¤ÌÖ£w)™I¤Œ—ËŽcd\0“,4qDÖÁÆŽ!Y@jRÔM|©uíŠ›)ãÂZ>ÄÚ¸j'yÂ=A¾Ø”€Ž1Œf.(7ÓgXšÂ£Ž/Ç@4‡¦lÔƒÍ~Ä}e#šéaÜ0sn§ì³½±B÷`Ù¯D”y^œª:C¸\nWKQ×] ¾Ìk­œß–{òÆÙap/,\"/sžÙ–ˆ¬Æ57Ihð‘˜DAð8¥f7‚Þ)(‘XRw¸`ÝM‰´‹›º‹‚3ñL­òÎ£ÊxS0E43FÈ‹Ûq(’½¡@¨BH\rÄ·š—?2C|Ë5Žå¹=/IPe\rH¡+óˆ‡˜j.]@¼¬®§0eƒzéV9}q.ì®Ã'^RÊ–”0¼¼à3+È¢Ò“–ÎÖhA¹L1åS]›³pÌ¹Ë:NøÖTÐÑ#´s5gØ¾Y‹Aj/G\r¨½â¬fbcL8åùŸŸí}Ð´\0f'U‰åŒút‹iüØF\$í~Ô„ÏW„‡-Œ˜oî\n’Åö¶sÜn\$ÔÝ»ëûÌñŒY²-súvÒ©n1%8¢R•ñá”1[à‹­I@AÚ…A¾vß¤ËöÖ\"Ù<Ý˜(J\$Ñÿ ¬…\\ #\$-ìÐi·rÖÉ‚LËÌ•;\\´·Î-]¯@‡ëÂ—¬wÈ“:¡¤Jk«üâÅõV­lk¸Ý_®3Tº›^hÚjÙ'iZÕrÊG±_„&j®IYÄ7ä“ró‹ÆêŸ'nüÝƒ\\ûä\\Ës¿#,¥yut2B{© 2d½—‚ò?`¡õ3¶z\ny1Œ°J½S~¹-•°d`Æ*©Æ»y²:Á·v–óÚøï\rîU¹ ÞÏ;ÐEã8]Õú÷ÆíÃ/æ–	›Êægœ³«s\\y3Ap­	(öwÌþ?Fê\rå8)9ÏÌK„_ƒ©ŽïÜg’„?P¤i‘ûñ~¿úã>H=Iúð|’¿„ÄT:Õ·-Ø½`qA‹…èí¾åZƒÚ¹{êoå{‚ï\nÁzê·ýó#êïîmQ@•||pædòÉá6s“\\2	ìj/\0u.öø=yñtžÀ¢ØÁ¾cŠÎMÏÂëKäHdãÅ°ä«æÍ.ÿÐ÷nà²e¥BfÆf\0°¯Xð°4'páÂ—ð(ÒÐmdÆpq‚Q,h¾âÌ¬dL,ä^ƒ%M(¢dz7æ¢@DHÅ€Þ”Œ^ÆŽ0°í,o°‚ÅÅÆòñ'ë	…	pˆäo\0¿l%,Õ&\nÆ¾4p’0p¤I0V7çuG[Ð½\n#ÁåèÝF åæîÇÄ\$ÇìÏ¯Ü£ÐŠá\nþJpìÕ'úî°öÊïnôä°N;±ÐÆÞÓd\r°òíë©ÐB[.§o¤^¬\$‘mÌJÑ#\n±:Ã‘@öp~±Gãã¨7âQ,*ÚL07ñ`Ã§\\<	e0TÇd	--A§ëJ~ /ÀÐ¸æ.F@”~pl\\7eÔ³p’“DÆX/3lZ³Ñ®/-²3\\çQ¤„¢ôI\"L.†ÍÚƒ¤H ¢LYd¤ÁÅ©\r.%(“FÐ±²„¥HÆDôŒë|\r€V’£î„°¦é>ÜÂ,à\0ä}BdÆþU£ìaÏäxàª\n€Œ p|Ã†0bÐ&LÞò©6×¯\0ÔÏÔ¯rPC\"d1ãRBÚë¸±‡Ò?nTÁ\0ò¸ë\n.~HÑLZ#Ø8ÃÈfD8/,@nì\\ØŒ8šæêÜ*˜p)Ê dÔEÂÔa¢~«„b:r¸yN’G.\"ìôþr#ðÄ÷ÃfºB03Ï˜Û2ýâü±.:4¤H8‰O-bú3£/k„„ë¾²ý.s#òÚÿh¸2I\08ÅºÈU0ä\08%¦H¤h>ÆÐîgÌRòöX„’7ft«ÀêgÎÖ«Ž½4fîûn˜&q<¬cü#®ÄâJß ê^*À*?Gö7k°!D˜7kNÜÃvßª<Ý Þ­éúK¦ðìŽæ­Ð~Ks\0007pø[°ü¬£P9¤\\¢õ!F®_é6êÉÞÞà@š	 t\n`¦";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj€(L3|²ˆðÄ4Œ€Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-á\0000°€!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd(\\‚ÿ )0Þ7´ñx§3q|óŒ-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€PxßÊ3¡Ð:ƒ€æáxïC…É#·ËHÎ¾”€ðÖ\rÉÐÞ7áM4ƒ¤ú/¶L`ÖÂHÚ8 ²Ü:xÂ?‚×\rè;N(ÉH¦(ÈÍbj+\$mã1®°“‚©7ì*Š5ªj\"Î&¯­û\$’¯ˆP+	\"(¯Z\n£~Ø¡¨å”:ÙŠÔHÃœB4ŽCPÊˆ ïò¤„·Š2:,â³Æì®ò<8;²TÃEÀP‚óÈ6>*ˆúCÀP‰=Œ#®2C`ëw»Ì’.õÙ”µ/HÊ•	ã¢t2CEª•%ŒÓÜì[2žã# (\r7bþ*EÂT4cZ´ƒ¶Ž#bÃe6Ù%#˜ÆÆ0àZ(;h7Xíä-Š°kR-u:\rÛ~Ÿ©£rÿn¯Á‡2I«å¼ŠÈw%›sÌìõÇr¨˜4”2É‰Ò+£ha’«]sÔÉXä’B*sÇrÍp£iï&ßÀL¬ë¾Eú6=†Eì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍqJŽ£ÆÂc6,¼MPæ4Ã—t0ŒèËØ…?’óŒ¡@æ¶ƒ|6Œ*˜@!ŠbäSØ•Å,3IŒ-#o.Ý5ûƒÚ&^-Ž–£rzÂ¨Í§€RyìRí¸Ñž²¨ù3Ä-¬¡¿ÔbC)5&æ¢ÑË”<ØAp Næa='Äü „PÊ!E€ä£NÊSqJ)e0¦Œ1ÙZª}P†åF©U:©>Š±W+qV¨hV¦˜Ï=ÄD\n‘*@pžª·üb`# áÀ2™¢H@ÕI¿cGø½PŠT\nyz>A¤úC¾`¢0LÀ‚‘ÑxŸÍ4ëUî•@@@Pq´ûTjRÃ‘?Á¬´§¦BcœÙ{&èîÂZüÍñmÁÉ‘â\na£,,9=·˜JOÈ\n	\$P<™`@IH9a±´Óð@žƒ‹Á™/¾à‚˜átµ>€€1†ÀÞ`å¬s|¦š…\0žÂ -sf±Ü'ò{Øi&L5sBÒÆc²eÒ™õ¹´ Æ	zâ\\Ñ¶S«T€-0kP:I\\ÔÏa©˜Ñ|ß ðÎØL˜Ñ1‰´0TK(*vgŒ¼HV8Âô`KÑ‘.§ Ç€ÌZJxg=ˆˆ<£ÂÈ)rà-á<'\0ª A\n”RÐˆB`E¦hÁ}™t¶IÙÚ.)Í!‘Ê~—Z#F\"Ë\0™•EÐuN\0¤;,’†t±‰+f5V«“\"EVˆ+‘p¤È¿Ö˜ãënoîš¦&àNˆ< Ë’mƒ¾–#*0&DqÍ¸ÐíÊ¯®t(%öTÿäÕ?@±gœpë&\\òÁháH2ª€ÒÔ×Â—\"	*² Ü•‹È1h&>y ƒjOÁ²Ðƒ\0šÉLÆ-…êÖ‘`ªÆå2ý¥ð¹–òãoQQK¼!¤\0àõ#f±çøxB›Ú&/x9¸G¹žìr¯wƒšÊëÓÝgåÈò“€P‹l7ä(†•ŠCa3 6½?ÈÄþÜ«*éZT`ZÉÂ^¾ÙÁ8(¥£pQQC9¤Hòý¬)0\"5\nH\$„pŽB’<kð:Ð×EÝ˜j¬ä]ö¬waŒnYÈD)‘ä”âÑ¨E\nÁ'@¦+rrÖöÚGkL‚ Aa K˜äi]@ –DTÔ¸ë™3ZÈnªÄÂ‹8ZËúõ\0¼/	n„ûXªG5ü?£vQž@m%øŠPZ\\¿­i{	x\r\\r¨I®ZC™)A¸ÜbØ¸kXæ†P@\\½\"ÞQªÇÆ¹èã … iÐ–•è5‘SÉ9ñKáÜ‹Â7V\"\$\$¬ŸO!S'µ	#Ôd¢kƒÆH«ÊS“‘Èåiê)¬Ûµ;ºXÞ6‚Þ\"ézZQv\r“¢zrO#ZDfîìœ’\róªÌì:™“q~é!(jçÔ=XKó3üdÖÛÎÇï¸ÙSÜguv.è\\³ýu(:P¸^F¼+¦®ú½ÛõÃZ–%q=š6ºœb¨µt6õ·º·‚1yŒ­xNþÓõX4›jRi¯M.8'dv7RKËá•E”·PC—\$³È«‘•.W’’æ ä.U^ru5\$Þ,^Êjóy¯k‚A‹þž Iþ\n óE(Èð'sràyÖùÑûïztôËÔttvB°VÅoÊÛZú¾øë<>7¾¬“[¢Ënäsž—íÎþwKýsÝ©suŠëRô\nn}»÷nj¸O{î…¿C+ÎsÒ:O¥SÝi>¦h\\4:fœ×^#ñjÎEùZ3ÈçbîýR¼£=hÕà	gî¤qKï/~›ÏßßCÀùÙñìœ\$&ðQjOæmGè¹‹²‚‘Éî|óWWÍškø^AçN¾ûªÄ1§|pÅ+ÅÁáË7^ÄQÌ3é¡Ì«œüs%òI×Ë-W^‹ú{ýFË9Oà¶•mŠž]F0ûKÂ“E®[%¶ð¯`àïJÕBS\0¥´0ï0öpF¥±ð÷böÇg0Zp	å¶0\\Lg0ôMôÛ­ccŒ™sÃâí®õPJ÷_H\$Z\"+PXoæH°0ptÆ,fÆ¬pcM®÷¡j‹ƒÂ	'š]_	M¼aj¢7€Œ^°Kâ0°ìTP\"ôŽ°¯®eœõcÐñÂÅÉÐÑÍ° f@ä¨±¦æÙ¢Ï‚xH}‹5ƒ?pºÞ§šÜN†ú¤Ú\$ƒ\r\$ëÑm°Þðö	QöPnni2H§o¥úA¯«ðPâ/¨3‘6m±ƒÊþ3ÑZÀ!HÀeðF‘öÌQhh‡NoïZò‡ÞçÎ¶âÏqwÐhìqU1ŒÂk¥‰£PsšÂ PÂl*Âì2`ÄLÅ°­‚,Jä±’ôqJÎCÜK#±Êbñ2ñ1Ò:pÞ:ªò	,ÈÔ\0 &\\Œ5%ÌoÆÔ¬G¸\rŠËK10øíøñüÐê˜*O\rˆ°ÀÅëÑ!è	n\rÆéLâgm‚mb5¼7\rÔ0D3fè¢,	¯/!¢]¢êÎ'åj¤ä09üà†H`Ø`Ö&eÄDb)jcâ.h =€ª\n€Œ pƒ`Üej9¢jq¢Ò\$¦„ËO4\"jâB8c\$¸'¨6?ÍÐÌò_*àÌ(à˜ä2ðâþF2på%s'm',zªî\r'‚B!BuàÊeÍ#ãœýH¨]äÎ\$†µ1dä¤	^¼KtŠšVÆ,p®i\".Ês\"7ïr4ÂÊ]Ñ…‚6JTœñæqQ!,S<õé‹ˆåsJÓO5®³íè·â@34%\"æ˜`Þð\$ë¹,-ìœã¦Zk˜eJ!Ñ\nÞ@ITˆ'\nˆgº³ÆüX‰¨é*”æ®‚#“¸hå€?Én(j€\nD ªôsÌe„\$Åö,ä’&O¨e`–Rä† ‚6å†góBŠŸ5E¾)ðvX‡fzÑbÿ>ó`\\ñ,/Ì0l*£Ç|1f<I/Ø7ÊRDBÞ	\0@š	 t\n`¦";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9P“&—!”×%E‹ðö2Íz˜'esÎª 0“´–ˆr«41\"Èˆ=Ò	P¥?Ä:¢‰–oñÄèR@ÒÊ’\nÒ¤lœd¨ª,\\¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘«úC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r54R¨ÂŒ-?¥sº:C6NâJ†¤,(Ë°/‚­G®ã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾è;&ÀHK\nôˆ•¬:¸ú^­ëE÷c®Æ©!²_\\ÊâÒ[cPœ*“08zV•b¢Æ€âŒlNÉêXÅìiNŽ +L)ÅìÂqªl|¦Å Š=òö¢%SßQ„û½n¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÆ÷cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e±½½˜C ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀïzDF(X+úA&ÄgrmJý‰[{‰^\$c’ËÞ’º³úÎ°A{Lûh÷ZØ|)?‘çÊùÛáNHO´¾õÈüNH\naL)ežÕø ‡±£À§JCt,-Á>¦Â.I“c‚,½xÕI+»=&ñª¦˜Q:7hIr¸~ˆ[à?ä«Â&—Nš+8¨”Ø·‡š—HÝ1B#2q\r¹´Dð…=/b†ILè PjC¨•£Tz‘RjUK©Ü¦ÔêŸT*Œ2ªUNªUZ­UáX«5j­ÕÈ>däíËÂdD\"ÆLq-Ù®·„ñÐ‚à\$*®‚§Y<4slƒ W¸YáÁ=KÕš’h{\n8NfbI”¢Ä¢`ƒhÝ³äÙ\nYÖ`|ÂB¨Ä÷\n (C¤ƒ&Ød|`”‚†\naia5rÆ¼—Ü“ÑJmƒ¦á ÁXõÌÚLÇ*\0”’–SI\"7F‹„™•”ýÈ#ˆŠPÑ¸\"Ø±b‹òF^¹Ö;D<	\$h<†ðê iYÁ¸7‡B6¨–rË\r!Ì(pâC(s¡Á˜9ðÚ\n˜SAÉV†ˆ2Ã`oZt–‰‚\0àcää2L;;4Êº\"¢1n(–¢‚Lä’\r‘nU{ Ô6Y!éÆde¡dOÇÕ Ü™K-\$>‚žÆÍÛNð¬Ø£×‘2Ù’¨è|¯…¬)üß+Ì0 bJiÓ;ÙÁRbÄv€DØá¨ˆB!ÿÆ2Èj},,˜°ºàW`Ši'ÉXÏC]Z™‰\$Ï”ðœ¨P*[+eÂ E	Î´ÄÂ¹Ø«K–IŠL¦TÂÑ’\0_GáuHD C˜Ñ4°MÌõ#CÜ„’•\$¥ÙÌ˜îOÕÂ8„ž\$¹#~»NYòµ°%ÊÔ³jç1+nIÙD—§2éªl]Â’¤G\r³ºfpé97Û¬æ«¬½—Qó·ôðbÉ38«ô¯UVˆÅÑÒJæL[µü‚eWÁ¤1†éa\rÄ¢/ƒªšÌ¡9Ue,¤Š ‡‰¬MÉ°\\±+\nAð±CmòÎ\nƒÜ…\r>.+ÂÆ6„Ô‘ó7¿åÜËËÐ¼ÌOxøˆâÉ„gÐ‘•¸WJª=j‹r™üj¾[NPª¨½(¤JþÞ_öZ\"YrÆ4B¢ÍñŽÈÙ|íåiû/íåŠy–92Ùaa*WÍéà!DÏ*ÏÃFŠµ@¼è»¯?Edß2§¢}}³ÕáuDFù2‹-làT!\$\n.¦ÃM\n½jPÊÃ¨p\nySC”`Í:}I0°ŠjôÁ\0/-žWÁM3Ö„½C[o4!×›t¡Lv¤Y˜9IAŠìTÌýÉ^Ç©SI?\$ó\\ó`&ÃÖÉŸcOÍ’~6ÓCj'\nŠ«Q\\4l\$Nd¼äD*É–w‘.G/g”â¹*%=›/vÀ¦ø¾~Ñ“È<ÁîŒÁ~ž2ûµ/šò&jüvlv±#¯ìXyþmuŽråØNm¢Ü×™Ú«\$%'\",‡Õ?È·–ôsþz­ÛÝ-4àL½Ï>ù±\0\\Ïs°Ì—|÷Êý6r¾•ÑšË‡*Õ¶|°¾Î¹afI}\\(jäYMº°ú˜4”“Ð. X¯³&êªM²óÕè]”Þfn¼únbù‘žUÇï4ØÊ…†{<l¶RÅ›A`€[\"n\nm1\0ä·ÑËT,‰Òw?Uºo¥:^ôÙ³Œç'y¾nîùã}¥:Ÿ™»—¹Ú‡˜z,–vórñóHŸìœ,u~¦ô{‡!ß³Eè¢Ô¤SèèôV''¨•á<OÏ}³áÝûùÍ¹Ñíp	‹·æ.ô\"ÇÒ×¿SÜý~•œœL2,HÚþqS~/ê­_6ü(mú?“Þìþ}†Ô¦´%C,:Š–ø„JJ©€ï¦K'6æŒdHnæyOÿè8¬ìuÆ²JÃúÈÌ\0I´·&š,©!TÉéþé¯\0•°LpOÚó0VÌ+â÷ˆŸ/ú~\n²ù-ÿ¯.â®Š°Pr–&ðþ¦=¬¾NÏN80tó0‚éÐ|y…ÂÒpq0šv…øt@Ï&‡Æ\"å§0D˜¤@=ãöp”Mþ0ˆ®§¯“\r‘‹Ð·o¹	pR‰ðàà/øq0”õêŠqŒÑ.NTF+V¾îD°ø=p ¾I/\$ºîN\\Åjî‰kÒtd0ðƒ1.+«ÑO†]ðüö	[GêqLÄÃ×\r¯ýO±[‡ýÑO¥ÉÌîó‰ÓHžÏÌðþŽœè±}Q;B·Pö¯M\0êPuq–Gƒíœ?€ÒÊ¦Qx(¬âÑB^ÉV†§›dc°’½˜åŽæLçsvsf–%cØãCþJtF–€˜¿„žkF#Ï0½¼œã8(,F­æØM/¤ºg#~5àš*4Sb6UÀèZ@\nelÅ¨£L\"Íxè+Xú¢BüÍ’×ç„_Î„ ‡\$‘ÌáñºcÑÆÑÈ„ëª˜`è@ØjPÁ€ÖLi”•«u%N!&C`ª\n€Œ p”cx‚-–²KÛï±\$ÏÇ*+êŽîQÎ½%º½n +ò~”§˜å/‚4n%B»ÌÌ“ã â•>§K%ïNxê–d¨´HB®¨HTyƒ•ÄåãjLæÕpØ®Äæ¯3\r1JðßchŠÑàlú“G!DÖ,åÖun–_KçMª£•\rK€¹3¼/lðR¾ÆãŒIŒ75³I3³N8Ðw6‹Ñ4Ó`Aë˜7çg4svÆÓ>©lxÒÔhc‚gcV@³X=¬uî²Ú«bkˆÒO\r2ïoÿï,qëm1­˜Ì«[.'Þ!S€Ç¸ÅðÄiíð8®w=ÌK>ØeÖ%ìt…¸#Óä+æó‹ªõ¤êÏ‘?ÉS¯ß6s÷ñ@Ç ¸\n¨ÊfšG²ðgž<£´";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ½Ï[ØÉ§‹@ò84àPœ:¦C“æð4¯Pæß„>Ä	«›Š4¾Ct6!'mJt7.àP­ €PŽ2éè1`ê‰|6%-ƒ“ö%ãk(%‰r`¼A­AI&#Jl–0[nŠ\"ÈÛ79O,ŒØƒ¨\$%’x8#˜ò×\rcLÆÑ±‚îÄˆèÐ9£0z\r\n\0à9‡Ax^;ÑrNäF\\7ŽC8^»ÒcÄ‚7?ê`^5ôŠ?‹ãL7\ra|\$£‚™Là^0‡Ï´?\rxÈ¡ £«¶\nb‹ ¦¢²XÓ×iC'=O`@î´pÁ´HèÜ¶\rcÌ”ì­¶‚R×¶,@«]/rì~†ÖéHì:!-Ê0Üì@¦„-(<Âp£ÑÕŠ è-rÃ¨²xëÃÀR\0WH@ì7ÆVèíB4ê5¨Ø‚3ŒóàÏ€\r0ÜÐ2L3?8¥ŽP˜ý4ò\n·9£*JÂ“ôÜ¯ò‰5´éÂ&*\$Ud(2dZ‚¯‹ö¶Bƒ[Õ0JÕè˜ —Îv0ë;u-ÛHêˆ)Áªë!ŒƒÇ¬&Äï7î»¯ìl@žÏ´:ö*0šdd‹nÑöˆØ/Ë>Õ/Ì;@ƒ§ø€ÙàÈè¥ŒÃ4ž2…ª\"MA““\0:Ì¡úŒ±#HÓ¯j™mŒ£‚Ø¦\rÎLêÑ[oû°¶Tœ³` ¹rt´#K`Y±)û:œhAut,»Dú®ò€ÙÀKÏ§¾tÅ'QÕ\rÝb;×5=ŒçÚ1cÏo6½Ú“ß¼×02øJmoF'¾ÄØùm˜­9\r*g¦‚0-eä¥¢p\\al+(6/ó@úšÓ.äÔ*ÀÐæœ^ú\\PÒMBLLƒ†çò˜Xt|ÎÉÌ'€LßÐn0Ie ‡ Z‚Ü›^*ÆlÎ—sRHIŠYAp<‚öŸSúŠ\rB¨u¢Ë²ŽR\nIJU,]ÔÈnSjt3©ðD¨U¥Ìñ ­\\¬-GJØ´\"ÍPA‹f§ü&ÄÜ–¡ÿ„ˆ”âJÂæ4‹`æÂj^ù?fí] šiÞéCGå\0\0 ø0ò-ìŸé*\n\np)3Eaô´£ÞR‘¦AR»‡'òþÎÛ‹ƒ]ð3¦	¨K.ì»“Ó˜ÊJw&+\\Å­tŠkƒÉ?Hæ„´²AÖÛ\n#ŠÈš„£8â¤L\nHÀõš±HµãªôL[\0‚as@ì9—Ó÷7§ÿ\\äÕçº	ÚNI\0P	áL*Õ1…!t2’Y¼c\\±šÒ\"láÎhÙ¤GJs¼\rÁ˜4†rrHšc[@df!£\"DâÉ2Æ\"Dá>ÆœäJ)T)€€#@ ‰á†{H€ «g·/Où@—¤¬–’òbKÉJÁ\"Çtà\"O×Ù9Œq†ðœ¨P*V\rSÂ E	ª¥u˜h%ë©9x#¤^+V\nå]/Ébe‹uæ¨í“—e“•&r:ð«ÒX\"g…\0%Æ¸à!Ûb%ä­\0·ö¼mÜ]+ŠT‚Ã•Û[KÍy“6k4ÚÎPPCGm“¯#Ÿ‰A0\rÎÓ€¤éI€c8t¼Q\\”È:VRZLI£ôñ3¢MƒË(XP^Ì²Y(=ØËtS¥jqw'¶kÔÃhýº5dð],\"~h”<¢Qš\0Ùc!œ5sç^ÂšÐµ±ŽY‘j­{®ßBHnhy}¶w~ÎÙ“10) /pÑZÍr‡æ˜¹¥šŒˆ‹ÃÏ%f.¤`¥±\"\\ö?åà(&Ðó\rRODäQÍ‘3|Ø`Rxäí\n›’V PÁÀAà6R)qlÀUP*†\0qGäéö\"ùZ#L9\$ÉP¥t¥M¤½6…Èx ÊæD4®•o—pKÊa°< WSCKæ\røÕ‰—	ÛÍÌGo2flÛš³fh>Ù|4šlâcÝãR7ÓµHt€Õ\r¹5x‹W:fX9%n‹Ìi¼Õhø<eL#·µÇê‘Ü¹@(Ž@T©ãUuRm>&GNÃQ¹\"q©Ç”ñ'Só§ e•™ˆÉýiª®æE¨5å2å%!(t¤£ëÀäquö©Iôj•+\"m¦M;Z-—ÛŒ™M6Q}Å,“]QÉæá•ëì\$\nnLœ1Øœâ˜vÎÈÜý†(/¦Éœ”€ç¡–úGñÔÒèfŸÊ–û¢,Rp~nMŒ€ß©!å•øl¤Ã4I\0:ñn#JËñóã·Ý:Ö„ªó#déÄ°„˜Zû	êdM*–Á”Ï2‹<š±„`†ïÎ\0¦OŒ¿9/Ôs4ëÓ%´ÕáÁB(*è¡nOÂm²VS£ï®³ +Ë‚Â	õë 9\r–ìÖs{R¾5eyÎj‘×®pésy;O\0îíPátnìz\ríµØ­Ô¿6ë®x™·=¬¼ûÞ€N*(˜³ÃN×—â¼foñùýûàÔ>Õ¯[ßÜU»ùé£ºßnïÝ«Îß?º;A„íP\$R`w ˆ'¶åëÄÐ9zPHéº¤ô…5¦Ô„ºkºwžë§ûÓþ}~ú+fÿô¤ABÙòV»¥Ï’R×Ùì=kÓé¿j‡ƒ½PÍmË‹¬÷âL\\?÷kÊùßXê¸ß¤þ·ÇJ¦¾êíOöœ@öNFoKÞ¾ø6Œ^vŽ´ÿÏFíL\\,`ø®Šÿ0 0Æ/bäCýã_/Š1+=%…ø¦r\"`˜×Î\\I¬0Âl.¬È|§æÝ\"Xv òN\0003pâŽÕLY§BõnG\0p8ýÅ¢\0Ìbf*µ–F\"êHß0\r	¥Hb°D °¤#0¨Ÿ\nÈ\$Äè#N˜^À¦f¢\\SèôP|äpÎ\rpÒ´°6íPß#þ5Ïðî;	c·±âÛ\0ÐûÄ¬\nÊ\$&²®ô^eê\$òÏæÂù(1Ð\rD¬ÂDDÃn\$ÿð\nÃ12'oRz0ˆž‘<Â„`p	e¶&\0ÒÃQ@ÆÌ1±>/\0‚Dp¬b=–ÇC]-þÏä¢¹Œ.íñ~à1ƒŒBöQM\0æ É/JÀšMál7lÂ<ÀØ1Ç‰«HŽˆ.PôËÈë\nkJ\$°YIr¢˜j­DDN:äH†‚æ\"O¼­ ¦\$Â]Ã€­¦„Ï)(ñ«4GíÆ‚`ïÏG‰ gô;nÊdv\r€V6åvjçîú{Eâ´ˆ>Õ­H›ÏÆÑÊ–ª\0¨€ pC(Ê:óCL’CæòX\r#\\¦¯&áî.±&g\"aÄHýí®P'ô_c†0¦ªJ#](mê#ð'dO(ëR0ë‚ŽƒØYJ2¬úLÌü&F1\"NÖ,\"Ö,0®`@¡Bhi\$‚ÎHÕç¸‡œ‰\0-Ô6É–ãÇ”ž°æä‹\"¦-|c¦s.‚ÿQ|ôŽ!.ªV×ÂˆtRÿ/D@ZpZíØ'Ò¡¸/Ë\n	 ÞåM\nÆljg¦\"n‚éS<gF±–\$Ðrñã¯mÀá1\"D_ƒnÌ€ç6#rÙë\nhDÆÞãÂÚ¯êô#hä÷ëkæ¼&Ç<°Ã/³c°þB±j0ÆŠLÎ-D\$FKb>";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@*#‚•((Â7\0Pœ7£*Žˆ‘zPÝ„DÊBÐ0˜es\nŽˆKðÓB“82Œ#¨#²q£&±'	Ü\n#¢˜òç˜eCt\nhcSÀQhçF,R¢¤µtMt+\n»#s&°t|í1©¬_\r¾Ìé?»jÕìµˆb†Â»C('£C*3¡ÐÞ˜t…ã½D# Úˆ')pÎŒ£uYU©#²„IðÂ9íÝ2/¤ÃÜ5„Aò>8\$ï@èã|*uC±iðÞ!	@¦(‰¤L ¿\nd\"¥“ÌöŽÛŠÔ|®‰ëž90C£qI1Lc®Â\0í\0^4\"ž°é<d²£`@ÉŒŒ‹Œ\0Þ1 C á8^ŽˆcxÙ<ÒQDU Æ–2 	#pÆÍ•60A(Ž‘¥8À²Î*èÈÉ¿0tÉ‚¸eÂº\"3³CŒ\0Ï’ô[ì)g7:lÇ´ÉbB—áFsŽJà™•9ßÍoM³S IÛ²ÿæ êŸµƒ >Â˜Ç_*V””]5²Ï&Œ¹a†U A®&/C¨íªº5k›-¾\0Uóy¦)èÅ;n7Ý=3ç&Cšmƒ2H˜0ˆç7’ó»pÑÎn;¯r7*ŽŠªï‚•Ê;a¥È¢\"uÏOw£»_Ý\\î”õÓçMÎP2O†Lû¢Ñ¡ø¥\r	s^¾0©ÐˆÉ»žÓBjƒxá¸ü,*‹`zÏ²:Üab¼‘Œ#ËU¸v(¥5ô:ÂU8nn`¸…BÆùÓƒé|o±ð>÷âüÓ[ö5fü?§”8dË2\0Ä¸N‚ o\rj´0¦‚1í,¨¤T‚Š÷2¡¸ƒ?eÐVIpm3Ì}m¶s*A’X )«#2ÚC‚KOoÉ3 ·îAž«(Qè®ÁH,jRŠYÁ½7’ƒZHÉA=‰(TU(Tº™SaÑN©õB¨Õ,U*áV*æÒ†b2´VÊá]%xºUúÁXl’ªÒ–BÊq«9+½”à³C	43)À™C3e”r¾Æ‰ÄãV~ŽÙ©†ä%5ÎR°CJ0°–7r‘—^¨YÇ‰N€H\np:‡|¸Á\0(*„PÓóÉn\$§%>¨y [yá304ƒ§¸´þ‘©•YÅ–PÚú )ç<”™8¾d£( …òy“‡PÎ±‰‚L¥{H*iÍI«‹åzðòdÈQ»o¦U½=r¤Q	*™T'äQÞÑ3QÏÜâ·ÓZ®^óÉ!!@'…0¨O 8 hjùTœ*[25mÔŸÃ¤lhÓ\nléFwÈgîÝa[e*fÆ\r·WÂMørhÍÆ\\…E=¼ùZ‹7ªW@fZ\")el˜7öb0T—hñX ¦ú„šs¹&&„ RbJ0rLçQ ÈB•êþL)0°ÀÆºc	á8P T *½‚\0ˆB`E°KþoÉBzv»â±„¥³šÚ„S	½lGøî£ž&’ä8MÎšÃæÈ€\n{â¥b¢a(y(HlÚÕÚÓö½Šug¬ûŸ“ö‚prNP¥V^1X!/Ø§‡'0ÉQJô\0ÎËæ«fy:\nlá¶3ÉñmÏuïÊ¼\"Qx.KH–—ÚfH@\neÍVX%Ó@ÍšBÄPSJùåÜVh:Y„\$»“Ô%Õÿ¨¸fÅ2i@!!;@–ŒUl‘¨I­Bî«ºr¬*_TNCáŠA(æ63qRóæ•ÄÌ¦Iz|‰ayn’{hŽìÛ‡¼4ãéÐ¤‚²\0Ä­Ý”ðâŒ\\T¬ä\$ˆdäÈpÈZA™kÃ(¯3hÝÒÔxuÞ€W|ëš’µuÝV´³qhˆ>at-c62\$|ŒVÌ\$EAÉGÈl®CRË>Ïˆ½&çPGF‰É„Â¬dqz‚ŸxKQ¦´`tlT!\$aCºÕJR·%è¨ÝW|C!ÊFTÜ?Ó#\"è#ðzì ðA­ g0¬=„ë”ŽÞ(+}m/'¶NjC¼a0‡7äÄ	‹Ü%·.†™¬ZFÁGaãbd7+±ÙÎÊÙ‚£gAÍ£®ŠVÔ^[Zì§Ó0JÀmQéÂ\nl6³i	ÖÐÖ-ïamÍï·£ÈÜ[6o¦ó¬’â#Û³\0Ôn;²ø!ÒßÆ\rßµõµ(÷>¿w¿I®f¬	Y-!µ\r8qâa1Œä \r:-Ê½àËYm‰LÈüdC<M‹g­5¬pÊ¸–Ý[õL¦éW¿99™mæÄÍXtLQÚ>ÈÏb9\r”Êö«Gät\$%²÷…mí®:0…E½Öcù`Ý\\žÝ1S/.±,2e\\ö©„ûh©ÛÝ™@÷2wÝqk;RAö÷²!:!W_’Á“ø\\ ~ÔÖ'~,³øÞÝß0-òo0øîÞÈÌŸ’Fv5ºyEýµ4½òeù¾«µ†j\0PPVço“-ì}™´”öNÇ3hùq'ÍæC'yÙ*:)B¤¬7ef+d^(²-Üc_GæïEÎ¸„'¼÷½Muü‘<·wípÏ<f•kü.;ò<‹Å¨? ?¯ñºËÓûþççÝ]÷Í‡Dtìxû«¨ÆïÀŒ¢v­F(o,ïJ\0þNüÿÇ5\0\0NÞÿo2'@‚—Æíz•Ã¶xp(áMþ‰mÌ×Í¦Ú­®üP<UïmìâHÚL!0,Ý‚ñB\n®,Ð	µ Êò\r˜ÿ«LÌ®P|ó¯/¯èÌŽßð{ïâdÂ)K cš#Œ°Ghº¥ð>ä†¶5,&ß‰´lÉCt'Ï”~B€yh\0òØæ¶Òlªm)xã®|P²BÐ¾šCØ6Üûc4fƒÞÍ©€\\.VêçÆDªØpŒïPxÍ,Nò¢îÈì ìí0Ì\nžÞ,c6^ð•+ˆ^Ìƒ„þ‘A°\n4Ò'‚ÌBQþ2m\ríÎûîå\0ÎÒ1o.ðÿQHî‘lÑŽ­o/Ðrêž}±ƒ/aÊÌQ¡µb†ëNÆQÊH\$†ì*2.f+¦X¤‚F…ˆíÏ7pAp	«“­\rð—‘æ3Që.÷„MÅÐ' Ìgëù 	>F;åÞ¼‘6&r|‘©!²fÌH4xã*e,ð]C&Â¦Eî+±)Ñ#Â?ÒI#£»#òPøÏ% Æë\$²ZË2\"¼Â9%ŒÚROü•%ñx»µ'ÄU%ñ˜1-ªèrˆRRoÒ—\0éÊk\"NÎÆa2ƒä*|¦ÍÂ»0™Ò³*LÚÎò»\noC²’Òlé+rÈËìãò×,nh\nŒFS Ñ1¢`î@E„ÒÒªüð‚·ÐBm*M’Ëí×0røEÍ/(Ñ\\'@?P\0Ð¤X0¤¦®/`i„mi\"kàÿ/.Vã6oŽæ×‹Ü!bFz«¢üóDßƒ8'Q;#Úøe\"Å ‚èç®ê\\Ì#žEëâ\neÒ5\"8¾â:ÚìdÒ½³M9)!3W1øù\0†,@Øjî\r,*5c;'\nrÕ£o /Œ'0!.LJa0Æo‰´Í£3‰ø¯ ¨ÀZ\rò×­¥%êÂ!­¯M¥:ÇBÀäN\0ùp”Ï*N	ÐÆv_o9é hÆð]+BPj1äÓ/ªnn‚p3 EBàäV³Ã<cˆ QfõjØöErjâ™Q\$HEnW&Fø> Øz¯îû`dƒ:3ä^Ÿƒ¶í”_¢•:4,C²oMÚ¹O9@¥@F°¶ÅÆCâH”œþ'ÍÏ‘I”¬aTÑSIt†¾´¼* ÅC¯Î|Ã¶TìŽù—y:i–TêÕËcJ¬LMÎh	†Æ³¦d\\ÕOË8§BbùŒ¬©µÃÛ1iÐKMÐ# ¬¹´XB\r0\rÂŽKäÈŒ¼¤ë,1è\rI->µIÌ]+n¶d£zþ§Ž¸eÇTËYUb¨’ÇRu#î¸%Èy.áÍ¨dÃä|\nGô\rÀ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ ¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„Bòßˆc\n†ßˆNêQBÊ¡BÀÊ7Ä£ äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷D¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‡Œ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðtd¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûª5„Að’’\$(Ü:xÂ@Áƒ‰¼<äŠb‹ÔÒ¦‚˜ÊcB¾¥3N ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è	£wlpÆî»\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9:õÕy_\"¬xŒü×Ð\$#;63ÆQ8„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦<‚b* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(dÓ+k\r6ŠR!Køj§DûÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tQº£¹úñÜ-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÂÉqÒÀßiSŒ=øAà¥~ÓW;¾<’*\rã_†!ŠbÞÈÙ\rÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFào&ˆÄ2,¨ÀTz¤hùcè|Šm8m™î ‡F–RÙu4çu_TÉ`ªp¯Å:¢Ôðž“â~P\n	BuAJQaÉF¨ö‚¤•ú•RñM)Å<•¢i«ø0ª•VJ•qLlü«ãÐ|Ój)%,ê³2hOìu¯D1<38áÑkY5F8þ\"À€ò\0ƒN¸'³òa9ýˆèÐ \rî,þ\0PUI¹7…M²vG‰3e7+àÂ„\$r_%„ÁxNz!Hl’'uöŠÞT;Gˆ§˜R¼‰4Y%b¶fJIÚj)¨i‚âJ`ñõ%,¬®^`0¤Ø“	nŠKu¬5™E€ƒên\\048:”6?FÈ¡þ\0žÂ£\r'.ÅŸ±ãªËßŠ:‚¦Ü•!gùæc3ƒ4Í› ÒÛÒ\"¤´„†24Yæ˜Î†#š~PIF+ «6iìi	9'd­ú˜PŒ\$IÜ˜™…MÂ¨JÌšQ/+´ÂcMÃ‘}I!à7†w´Éhq¥3gô'\0ØR¿,p›†¨A	\$-¥#‚xNT(@‚-K\$Ø!ð¤ªµX«A\"„À‹X*YD­ž.õâoë“÷\n ¤ÍYÙM¨ð'‡\nÆß›  ‡(ñ;Õª·Sq(/EÒÇÓi–]Ù×¯½DöÈß£Ðw‰À9PRNbìáÝ d(ï0úäž‹gzAÍ±VÆÙ[ëÐ]­ÊÛÚd‰Ò:+*À…&Ðæ‰ØIzk\$\$æŽC(p}ì”§VR£ÚJ´Ýž‡Ú*gôy‰4ªHyU—²lNp9bÝ»ÐŽƒ5C¨öžÓó^lŠQ¦¨¡¾£Ô’+RÂ£|t„ÅÚ]C2¬I3ØvjV–s±÷?“)9¨O1÷›s‡…Ö¦7­HaˆÓ¢K—cj[¥\"b{ŒÊËÛ4yDî|U|ìJ29¤¼úp¼‚\$•5éIvc›cCœ.=	Iš†–@§\"jŒ¶8)›\\> hG,	\\Úl©Ñ:)·N4Ü%EòÇ T©Á 7Bôi‰DÑ„:‡ŽÌ]¥+ÆÑ™Ó>oÞø/¡Xè%Æ‚jF„Ñ	jôçäVX“;FA…Ý½ò[RM\0”Ë£pxÒ&ƒJ<MCšÔ’ÅÐ@Ó{'º5çûQ’‚h÷óéžÑú‹êHiS•!ŒÚ+\\çù¯4”´–›a;Ó²>MgãKèÇ\n^c[(ëê•’{Ù¶Ñ]z!ÌÂøç©	¦3¥ç(9S#*VÛlÔÅ\rîC–ZÖdoï^ÏA)xl–ã¶b•_Ö\"Æ9°ç¤’b/L²nÑÎzÙYök@s’÷W`&˜ß@ÛÝ©42&M\"@ˆ°®ùF`™ø<‘ã^\\Ô1Š±ë^žpo¤Ò?ææœÇjçÖÓRX©ŒÊ°”;PÍ:;SS¾ËNJ&Õ¶ƒ†W€M©\n·:9…ë¤¹Ö°†PØáŸ)V¬Šñóû‹LmÆBHQíwP½«±}‘Èt73ËkŠ÷æŠ#’Á‡\$Ù–±GE}øSáíÉè>8yCä¹Ûa%ÞSË[ùcfù©_åÏuË¶âsäýlôÜë’z“8æ ™„'&T!û/\n@ÁÉ)Å÷J««¦vœÓÞÛ—{t½î§øm-ZCå1å6¼TçÖ,ÿ5Ï`Jo¦¸ùHýOQÏ¾Ö=úeö3º+ø¼)Óf/8Å2ÿvïãi2oõWÉzSˆÛ»(q´ÿ\$Ê.\"ÎìM§¶KJêýL(ÞÆ¤XkDOò“§˜–þ/úÆ…¦ÄÇã~é*a¬h+ì\rª,1ìŒÇoÎ®ï2(¯(ZkNðnlüXçGl0è%¤Ã\\ôN>,,¾LnFúÐTõÐz‚KvèPv°‡îx7\0‹p‹	œ2.È:íàuÈ(7à‚id€ºE47Ö¨Prð¢V¸€Þ„NcÎÒ¨PÄ4ðÊêEýfõ0ÉÐß	O®7/LÆãqpÜv°ž™0ì¬È%0ü(pÞ^nèlÊéæ>£>ãžèbÁ#\0“Ï¾û1*mÐ ú°–ò‘7ç™Æ×1;#•Ñ:¹®:õ/ñ7\rq_ŒV&îé_/RÉ”d0.õ°wŒ†/12‹„Éq‰1jÈ,“oh·€A‘zÉ€¨måë	±\0ôõ)D/P‰LºD1ŠVdª&€KB`Œ¶÷d`\"°Ì2¤t>«æ{ðüà§þÕâ†)ÃBÑQî5§þµ†0nø1ç¾xdÆ\$äºyPÀ	¤´¨B\n\$ãfI ¦©¤7R*Ðîa\rï–Nm;!.B´MRø2\nH@Ø`ÆºikQÃ¦Ödv1Ä:A\rÂ)ðn‰\$7á	f~tj¶\n€Œ pÐï~\$i1MÚ§fÛ­&Õ‚¢#\$*“BsLs‰–è…·‘äWcb;¤“&m¢=Ï²}ìž¼Œ|î)·¥]jâC&.\n	Ô^C03â‚ÀèˆÖ2ôk©t”J†×FB½¸\\N*(îØµ°	‰bYË¾µŽ|?³‚i@AC2H2ŒùÅ1s'+C–+\n)Â˜Ê2í³74M1ÄY\$’df`7,#HÀKé‹\0ï«=7ný7Ðf‚\0…Àô(I*\ré.#æhÞ\n‘6\"ê(ã4®j6ã*\$¸6Çb.’»£+1\"d1ó ²\"T`H¾ó³<¯i2ãWQT“Ä’-D:*ð%dš#gxî&BB¾\rÀ";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­« PŒ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:ð1e³Xò #d·‰f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q[95Œt>6D0„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’¼ ä:iSï‰Ê»¥\"ešH9³Û¼>+âü‰D–½²î»æ45\$*º³\0£\"š€MÛw¨—ç3C '°Ö8án3K˜É²£8òÅ¾¢ê­ò¹*i[Xú-â Ê3#ªRÃØ:Œ P–Ù¿ðµµ8Æ4ÄƒZp3Œê@Ï¢¹ãl>³8å\\@\"1&*@Ü¹ázò•l ÝtŠ¬PßQdtÉµ(#ò˜¥Ž&¤åd0í¸¡\0æ1ÔÏ~ØX•2ò2C;GmŽLË)JŽ«q37#À«á·¬‚\\h«¾)ï‰Œ4¤W_¹Ìò®ÅÂBƒdÚ>ƒ8Ò:£~]UŽŠ÷§­â(ñÎØ¸½Ã]\\@ßÅ[tdÍºÅ|„;d°“º%,sLÔXhÞ3Ê›äo¤ÚúŠƒ{_†´uÝ2:Œc\n9ŒØÔ27òÔÈXŽCÊ`3Œ+¸Añ^cjï…Œ¡@æ¦æ,*íÖ„¦)É€õNpÉf\0K-°2.ãÔ‰ˆaN­dù†:…\\fà¼c¢qÙHk*¼¤¡Êˆ¢Å{fTÛäæH9éAªsøƒÛ@saÝH®àÊèÃIH=”úŸÔ\nƒPªD‡u£HPrR\nIJ)Øn¦ÒœSÊ€3ª D©ò§U.qW•b¬Õ©’3Jä“£øÊQO0ä¡PÛ`Ù)!”5 ÖSÓSa¹ˆª\n¹Ù+F²\n„1	Cpi8Æ<¼ÁDF‰MÁ8»ÈÓ&÷“YG3aÐÎ®‘Bæ_P@€(€¡#|‘:À ¦  æGßkïv‚¥ù`ÜL‹šÄìžŸöìVŒêc“á¼¥I•Š\\ Ñjp[s>`Œ tH,›„’\"M8 ˆÔ×©^ÐÎÂ)Å2”ƒ‘%\$£€ýÇ•ó„‚‡\0ÃVŒCZ;“ Â˜T—ø¿U°-šIÉkºP5¨UÊAÊmŽ°f#2èbµ çü«7’+Ø l’ÜÝ¬uL0i™Êø&#jkM¡1ÁRSªeÜO]!JAÄÊt’	^–x\n	%Î*ËpÖÆ›\\— æ°ç€©ÐPVÃy9m4Ç¡l|ÎT_kô7‡¦Mc‘m%ªÂ°z_aÁ•²ÖDÄŠJs“®%Å(Æô–É9ôA1‹É”ÞJH v;·¾çá-Ô¶¡Î4 ”ô£c)(\$‰ŽØç^š³v²IÅÎË.ãœ8eq5Üì˜6oœÐ\n\nÇü˜±fË†kÐ:b\0 ¤UhilÒ=Ò\n–JÚ\$še1íÊP¡pËy‰xÆ²ä!äTjhE`Õ,¤¦åº_H£.\nd„2JŠJÉà2ÁŒ¬†JÿdË\\²~6&¸ñRÃar\r,zî.ãhC¹ZMrë—ê„Ðá¼t¿åÌ<7æð¶ŽøFR)Ýš„9yWýdõÛÔjAk¥vqaPÙ34·0ìUMU:L4¶ÂA³7Í5Ö2\"{—Ö\nhÅÌ[f]íHE•æˆ<·4<ˆ*ÂÏWYgB T!\$	ÈF¤Qw³u±ºs2Ðih Ûº Ñ‰\rÄ5wò¾¼È°r^K»4æ¶Ä¤kÜtËåhô)£[Ÿ¤³f6ˆ0¯–:öóB‘=%»••€M|ËÅ0¶Å³Ä·ÏN#>‡LþRóf‚¢¤¡Mœ´ftÑÙÙ›ç’¯žÍV~:Lâ=6s´é7’†AŽj}(¾MQ*È“Úoš4¸Ë¹Í¢“{V*uF•¯döÎî[Â2&D¢«X–ÈJ†Ò¯;Tëf8©‰	µÒÅý¤²Œê\0\ná”1:ˆÊŠ)ˆ{m0³·‚2Î[0·VZLÚ8‚ÞŸ¦§-]’\$ÂÎæ>G(…/£ãUØ¡kÐÈÁ\$®a¶×'¤¬…ÓUÉXl5ˆV‰qêŸ–Ï#·ÜqužÔÆcl¯/j”ÏÀ@ße7!9æk}»F59Ñæ–†mé¹¡þ'åÌ3KóÇ˜á°É-2•DQ„eÁAb[ÆV§¥‘N„¢±,[tË-eëÝ¢¯Ö\rÖpAN¥ßGIší	ý­;ht\$à\n‰Øß_î¯‚DAMúédá:ºæéf,6ç?Æ›ÐÉãÜr1¬ÒE÷+ìË©ƒä¯£ùïd07>&Íî÷“%Íù‹„õ¾„¬Ž‹Ñý“}ç¡ÏŸœs&Áù\nXÞ[¶ß€+C¶—Ð:»Bk\r~¼ø¾ÿàü­[ Í—ÎÓßEñ|o«ªôÆoùŸgCA)Q`¦æ¶O˜þwéQÃd÷~ö¡TOßúº'¤è\\9`Ã ÑÀÆ @ €ô_Ç4\rÀÂŸ§ö\rÂ]\$PEC(<`Èä\rg¶&0\$1\0ŽîèÀ\"ZŽãmˆì{cÐOlTŒX˜‚”ñÐEÔ+I5£kÉªþÌ,þ\"ÞÁÐ4“ÅJµKXumî«p\n«¬ŠÄÌŽ[bréE¦õ/xõp–¿iŠòNc\n!S	¯òèÈ Z0®ƒ«B´k:N­öÇÖösLv½pœþ=pÕ.ŽÇB?\rOv°ƒ¿PÉçVo@–+KÌØèª<°>Ìc\$ã*hª¨™£:B¶ãe–úPÊòqø×\níà‚\0Œƒ*ÚÈê£Å¶ Ø„BÿÐÆPeNÙGYñF„#ºö…”´Pöq`¬ªˆ9Dî9b^ë®»E\"ucØõñ\$gÉÓ1döÏô0ƒæõqJoë oQ£XoCãï\"ýÉf1hNc!íñÂ+:{ŠTÄQ#\n±ÜÃÌGïöYQÞÑ2XLBÑÑQúÄqØ[j†Fðð½n6¯\$ºÈDI.rÚd¸È\$…¯÷!R\$'òdc6¼Ï¸Ì`Š\rÈþ#îh«UVìj^`Ì´«N)Cl£ŽR/ìÝ%£³%è=&C2²²k%Æ&\0Ë'MÆxŒ‡ŠÔ%n(ßin]¬ã(CÊ…éÜœÃ|ECÀ/É	*BD-åæä¤0ÕïÊÑ·2ºù²¾ÍÒ¸û\r8èà†Y@Øiâ·HîSŠPc¦>5¨Ês)¶Ç¼AÂnÊ^àéÌ=§Æ–àª\n€Œ p3âð\"ãÆ×ï®§<?òxùgÆU“\"'ó'1ó,X³\$Ü‚<\$D\$‚@³B~dÅL%âbçdb<³/KlMaC ÝÎ00ãöDB~£3h:£Ð8&;Qk0\"´~‘|(ïâ*\"‡&ã°7¤\0ac°[f¯`ÞQƒÇ:ŠNs\"›C|\\¡m)+\"‡LxZŽß‚tò 0Ãˆ®Òwî„ièîF#6QÈ‘kúàÄb'Â,äSÜ[Î\r‘Ê8ƒlÃV5¢~Šº·‡Ì0HvéàÐb	ˆæeÐú-ÐOÓàhÆ	©ˆÎ\0š¢¸ï¬j®(nfÄH†€¼Ï_ËT Æ¬j	àáAKèqDB?\$ÑD„±\$À”5e²ÇàÙ=TSH+b3BQ\$£Ñ?B¸óï hÖ4‘>Œ \"«f±®µ`‚²\r²L9À\$‰FF£:ÌBÖk„\0à@Ú\r ";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶éi*<ÒŽðÎñº\0Î•\"IÌó¸¡\0îƒ=mpèÊ,ÂÂBS»Â8Ê7£°šÔ\"#2à98OxÊ6µÉC\nß +S®ã¶K€&¥c¨×Ç¨´9\r©Ê<ˆÐ9£0z\r è8aÐ^ŽòÈ\\¡¨BP\rãÎ£Ó ðø/k(^4ÓÊ:IâøÄÚ\ra|\$µlÃr:xÂ>häÞ4\rã#8:¬p¦(‰ƒKB–Š¸Ò’´…Å£oxå=q@ªÁ¤«ƒVË»ÔúŒ¸.@PŠ7DI2d:¡t0ÅG:XÞ6DËþˆÖÓÚd	#p×&WÏž:DÒô’hÂ:ˆØìóŽ£(H­#@#\$#:ö#<˜‘Ûâ02\r(ârºh«MŽ‹ór:Ómk®¸\"\"‚r5AJ{Úˆ¢hËk¡ÓT£`@Ì#éPák¥Bà’Ñb`1GÎ‚öØ]Õ]R ULôq[ !¨Ò!’È­vXÁ%m.B(2Œ³09ÚÓÀá0ÕOvweV6bùŠoŠyx8RVÕ£0ìJdÇ\rã0Ì´Ã*Z%á9LP*\rìŒŠÝQˆê1Œi€æ3ZXÞ3¡˜X§ŽCÊ„‘¡òÐÒèÜÛŒ¡@æ¥»J ˆb˜¤#)ëb ’Á\0–4²ƒmÚá\0Í0¶‡(¥¥Z÷…d£f¼º&KYîH…H ]OÂ,¢î	ly&hÈæ9Žó\r2d˜2r2K&IÒ„¥*JÒÄµ.KÃ”Á1LƒtÍ4\r3TÙ³S€E9N“¶u=#Óäý@)GBÐò.K½#rÇò¥¢\$}n¶9ÃäÅÓi¼ C1-§¹ì8Ó\0[™ê*>+¤(€ N	ÒèÜ‚\n`1R?‹€÷² `	ˆh.‡ä£…f¥¨m=\0M”çÜÆáLs+ ž“òräNr<'4†·`R	hI!áäÄµdÉPÆŒÒ¤ÀâµO{šH€Èß‰AO\rx5pÎ\"Ò\0&iú‘¢xS\n‹ø9WLM	‹ÒrKÑ.•*P‹‰Hdž8“´˜Ê,A¸3’A”@MF.›<®\nB\$Ò1W4eÌq– a*@òr¡Ža#j:)EFp‘{[\$!t³ÌXŠ*ß	á8P T *Y‚\0ˆB`E—@('Š%‚¹˜³ŒÃ¤BJºûARñ* ©1˜ó84' çÌ@ÃH’ô\$'|êfŒŽK{Ž„%.sÇs–èŒ¹;1s•H4Ö>Ì£1.e\$lÁ²	ò‰122QMý\0 ¬a‹	BDhê€ ¤Cik(²ÐbQ\"RªˆØ¯ø`yHHÈˆSÞÑóE¤Œ¦šÕm,fµ	h…ä=-`†ˆ¡¡E¦`1šÉ9(kIdÐd‹N´€hL¡ç'¡•C`ÊÐJ£6ˆ%T¬6{™`«ü×B“–oãŠ¥TEÐÝ+\n{,ÈÅ.†5a5Ãk@5µX3EÖQL‘(~f´é:5¶çÕ6ä!UÓZ‰ÓA~(Èî.\0¨C	\0‚'±6ÔÌxoS&yŸÓâZÏ;*(“d-S(¬A\0/ Á™Eyi—Lïf!±¹·Å]k£bCŠnø4@«Êbm”õ‘eÐ¿¤7µ5ˆ“@å<UÇ´+\nå!«’kTj]#qL;‘ªHŠ1Ë&Ì@­ÒFbÊ\râ)Ë¡\"•L¥%•@¦kä‹Ðu&¥WXœ»ÔDBCå‡¦Ä5`3ÅhC¡ß9æš©;FQpHR\r(<‚à’˜^ÃA~.ª°ÞÒW:tZ­¶NŽy3«\0•eñÄsÅtGµ^qB\"}8®è—¬lrCs…¦W:èbYéUN<¶dì:ªt\\²\$]`Ù–[é\n#µªb*KbPyÞ_AÈ¨%æ¼&Ž\\ÆÓzf,ºZ‚vVXäœXr+WA¸ÒÕj¹Kâ (5‹ð‚œÈÉçlfÍØÖyâr] K†ƒ'dùŒNH,ìŸÚ'¼˜4”øÒŽ‡!®ŒãojÇÒ«£BŸMB`´æJ\r:\\º2ý§²4Ñ\$JÖ…+PfÙFÅ¨)¸[BŽ¬Œ!7©ê–[zå\\­­NgQ©<L}6EgÙXwféùU´«NÔÕ9¿V\0¬ðåÅq‹\$óV‚ÿª‚K¥¤ƒ‚\0Ô®çD2qéÈí÷¹ŒR¯&äwuÃÕÓVÏr\rŽêlÛ;\rÐÿŠ¦ÞÙ;d³M|Lw5Y\$•£L”Y\\a´ÕùÃXñiÆõ.:ªG+mã]»b°g;ÁÃr\rŸ\0¹nÕÖ<².lÝºÈÁ\0e°Óé•s¤ŽV„ß§dÃ¡4ÞN›Ë‡bêfTÎ¿BÖÅß—cþ¦Þy–rê÷§’éiöKyÃl#ëœ2ÇS§<#}‰o#i÷@û<Eû:}ˆŠÌi;Ë5&OÎ»©9zÌ%	¿íÞùá:Í½ço¾ö¢/àðOt4»7ç?'ßõ__âD—w÷_çV]l\r5»ªèoEé<JE~ŒÄóo5Ù}]nñÕÏÖ\0 ®„‡45¨Ä‘ÏJ}=â÷Þ¦ò|#Éá|Õ}‹aX\"î}m<×9–£³?®A€¯x\n´¿[e\\&Ã…ùÛÔ‚ \\Y\neÆþzDm³å¾;Ž[ÂZÐ˜lq{Ñ‘bÊ’E¦tÃDlE\n€ìQÂZÉ0#ƒªïÆô( ª\n€Œ pç*Ï\0¢>%«lµ¯.¹í:'ƒVL+>Œdß‰ìhdw\0 Ì*a&bCðÃ‚Ì;cÈv&®â\"îÑ‹ˆGÅ¼¦<Î‚Šßìè%£¤(¦ÆJ ÃHE\0˜\râ†80ž’ ÚL#iº·ò¯ÎÈ-š,BÈa«•¦Ù¦˜`L3lvÙ¢bkÏ0ò°Èã`Þ H Øû0æÜŽRÖ€\\ËâŽëFrÐP	§R÷i¤'K:ô6¥úÎÊ±`@%éúÐë\\ ÀÂ­ÈRšî<âü \n”8î”‡¢béCßÍ¼,bÊ@ì´`¢HvÞŸ­4 p†÷q]\r#Z\nj”°ï C\"†Aæˆ_K€Aé\0001*>\"2\0";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iPÒpôÆ£ÞÜfÚ6ã«Êª-ãª(ˆB#LâCfç8@ÊN¤)° Ž2è¤ êµP\"\0©Œ©Ë^Á2Ã“³Âb‚t9Žë@ÉÁcu	ˆ0*Ý¯£ÓÏ	‰ƒzÔ’Žr7Gp˜x˜\rÊ3¡Ð:ƒ€æáxï-…ÃÈ6­l\\´áz+3*j’áX93Ã¤¢/ŒC`Â7\ra|\$£‚@™Žà^0‡ÏPA\rË@Œ%	¦(ºÊ¢Z+5Më¤=OLÂÒŒBÚ4Ó	‚¦9@C¢¿/Òø˜3ŠP¼¯h“Xº<Kðœ²ÈÂ7Çcz2òª!-a*ˆh†7‰\"Ø>Ã…}e´}´+XÇ'ZÐLž0Ž£`è6C`ë	ŠuÜ|’/Â3u½\0P‚3ŒòsxBb¾¬ëÜ8ÜàPž9/Vzô”¢¨Ò- :p ˜ÄŒð•BÐ<–½ð]Ïf¦¥3ºÎã\"1G‰€PÂÍ0®ÛkWÕU“J¹FÎ8TÖ+ê1ÂQ0‡'TYÄJÙçÉî^¹ÆàP Í³¬,ùiK“ 9éšvv2¦‚ê¿hyÑ ¯Î:Ax/×TÈ2H‚B7ŒÃ3¥\$%¢+	h\rèÄŽ<¹l@Æ1°ã5ÂY²æ4–è0±«XAÃXÔ;xª˜RúãZ*b˜¤#)É-Ê4äApA-lâa;1yÀÒò1ÎË¹*L3SAmÂŸ»o	ØÞ–Ý)Ü›ËÐÃÀ\\\$9&©ŠE\\vùštªLÌ_àŠ€ðüIÃ'=%²rt¡)J’´±-K’ôÁ\$Sá3\rÓDÔóÍ³|ã9Î³¼ó=Ï³üwAP”5E4)Ï\$á×EI’Ð˜HN;º\$‡ä2«“0aÌ!.d|•šbªÓß\\s&e'r,aBq‡;äøñÈESYè@\$hÚŒ\0 £’bÔ Xb(\$µ©°¤|§àÛ›#GÔ‚ðn™øsÁ@ÁÓ*Z ’Gm˜õ’L‰1XqÁå€\rI«IÌ\0òÒA\0AKé…æÆ&ÖiÇ5©çèˆâ1ùSk4“\0 Â˜TsÁIÎ4œáÏñý#@EGH^’rT\r&Ø½; ÜGƒ:§_T6HIMÍKÀ€˜C Î!@)®ˆ`©™‡O¥¡q’¸Ì‡Hb(LD8Ô›óÞó@\n7*Õ‹„ðœ¨P*V1Â E	f–ô:HfÎVÓ]ç\"&†N{\rÌD2ª…^e©ˆ“šsÂšÒUÐ¼×Ï'Y;\0T„\rªàÂ ¦`â\nŸs¨ÒÇ\"6tËa»w¨ó©ª\n¾Yä‰hŒÈè‘Ss{µ& (+ûŽ‘¯.E™'â\$nÉ%0P¤”`t¡¥d'<ÄÞÂÓÔ¼‘Ô/¦„Ü‘J^Q—’ô&ÁÉg¬¹ˆÖs.«¡P/”:Ò'\$Œª#3£B9&ÍP'’`±Sáè2¬8C½*/U%Z'bþ‹Ñ*fjÁU¸zà@L(SL‰%C§_\$Õó4UuvN3Ò¢Œ\$®H<­Òg‘Të\r3µÀ˜Ë K‹Xk3);×Éb¦WÁ´šHdMÜÁ¦ZÐC\nÔÎò,^AP*†d\"&~*EÈ_¥¥em¡È‚Ht­mÊçpJüðAsHaX«\0´¡&žH›<.’Ý7@žÜ‰º5Ùæt€Kn»Öí5{’`®õà(·PÆ!+ÉIÜ%°„˜—dµY	4§¼2ÉÒ“‰k‰»¸:ÃrI]¡‡v÷N÷¸,I\\ØvaÕ»á&Úqð5˜LŒ‚u•G‹êÖ•KçMò,F\na!`ðLéR7’‚ˆáÇH¤pÊ±Ò)ÅtÞõ`lWH£Ä/*(W5F¨–açK%ÜZòEÈ‰¹hË„ä˜[¬•2TWÔWPwÇh›köÅò’¡Šòs\"½(ÕÛ·’*UÈÌÇP¹\\òémt¤î§<VÒ`¶Ú¦}šÄQYµp rÂ£«4ˆÁÊÊ“ËY+0¨¹¦ª\nfÑVœ7s§E’àD5HÒe¡¥Ws• Ym;\r'Ôû‘‚×\\jrÍ\rÆ(.iÆÄ”È)Ô´‰Âc¥™ÉfÄkF,‘ìŒnhˆÍ*€kk´Â›\\*><³VÃ<Ù;}Ÿ¨}NÞHC—¨˜)Z„Ân7Z¼7ÐÆßx:vóè	Ý¨wºb'¼¯™‹œ›Úó)&1bC=‹­Ó=Ð—SiuŠ3skÏÁø	â|/pè—SÝ–ºI2½°³nFŠ™Ô½°9]¸#	iY!Ì¸ëSnrˆÑ–=øèßín@`Bát“g]žÊKd›è1èþ½¨\"¡ý\nã—‰XÊÙ{ƒ}~’Jä‡8t_¬•”è‹=NºÍ¬ªôWe8›s‡)4C¡÷©¶ñWXhxnÓµj÷Ší}“Þó^ÒÙ9}›@ÕzC¨†Åõ¿OZ4ÂÀ¸Lê#1ñêh:Š4ùÝÜ¼è­÷jIÆçâþ~÷ïèˆêï©˜ª3YU?ˆjž§¨TŽçë›Àdö(aSTC@R*'ŒCµÕº~™ã¼_ä.‰ß{C©õ’çä—îæqþªÐæÇëLšJx\n,Û;ý½00ÿü)'åø?PnÖ‘>?yØÿ~\nr;ŸðÀ_Ÿú}ô\0þä&\n‹‰¯:Îðy®Î¤ð²ÈšðJ¾ýðöF«&£ÌÆîå|\n¯Å\0¢[OÙ-Ñ¯ÅÂZ	tBDfô‰‚‰ˆ¯éòª2/Ç÷\$ÞÂÌKÑb£CÒ-g™î¤muE€pÂ..BÜ0~©ì¼yhšUÅL! ¦NÎu\nP/â80eÂÆÉ,>Š\$§We¬½”1kAŒÊìà0ÄGmfc\0Â= †9ÀØhà +41–\\‚ÚŠ\r@ú†Y¢ZÃÜŸb¦X0¾™\0¨ÀZ \rÃr` ÎÁ-è&d†-ò¼Kê8©fi«ôªIÊwk¶j¬þ«bž\$çVe‚ö±¤0NÍI¸;g#†Ö³Qañ`èÈ*b0\\¨ %¤\\Hbýbd: ÞKÃ€%ÑŽX\ræ†P|0B1KB,Î@jÈJäƒ1\n,bËñ®Ïè\$‚1‚žÑÀ\$1°c‘ÈæHd7#ñ-.ijFØÏŒ‚í\n\$V2Žt.‡&vL\nÈzÎ¯\"BU¯ð_j¶©qæ-ÂðÒ\"\\b\r€¡Å|œIÈbn~o\\o€Ò.„/j8\"@Æ’RS%ä-…/%E–\"ÂV©ò>â 6q¼iÉâ\réæpÉÞý*ž²tjHð¯„ùÒT\nú=&(–m,UÊ@ÎÀ	\0@š	 t\n`¦";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$Ê¨S/äl˜ ÑÎ_')<E§¤©`­’éé.RœÄËsÄ<r‘J8H*ìAU*‰¹•dB8WÇ*Ô†EÂ>U#‰ÂŽR‰8#åÊ8D*„<r_£ˆa˜EÉÎTÇIBý#êdÿ+ÆñÉlr’j¨HÎ³þA‘3Ì÷>Ç%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6¼#(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tr8I£…,rI(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñ*I3”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsHÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²’¡m°‰ì£)Ê°IÒJ–ñòE’¹P#hÃe¸å5ƒ˜Çr;×ú?“ÙÒež’ÐA´¹Ï+¥‚Sdý@NÄ(RbØÄÑÐ¥ûa=tÔ©Ô¦\$<ô½on…á©éPT¾YuFŽ´¼ð¬É@ø5¶cŠQ%•eñ‚Ðç=Nôèÿ`Žjš†¤ýhã“HÓëX7ŒÃ0Ùdàir?W¥\$qž\nƒ{^6ÜƒÈ@:ÚÃ¨ÆÍÈsÍÀÞÏs†ì9? ÂÃ	áH¯•ƒ©ÂÌœÁÈ.hæ¨h@Š †ÂFNé•ÉÑÊ!›x€'8£AŽºDºª×ÞJûóxb]’¢>ßDCgxŸ	÷z•Ð‚ ¦6*~AÙ0´:ÐÝC¡ˆ[¨M!Ìá#aÃ˜wY«ä2‡€àU°dÀY«Un®UÚ½Wëa‡uŠ±ÖJËY«=h­5ªµÖÈ/[g!o.\0D¸ƒbä\\Ë¡u.ÅÜ¼’ô^Á¡|/¥êCY¬`&Áe?€Ü»˜DˆÂ\n\$D¢LO„IìNÊ²C„: Pü_‡„õ ä „‡B0dÏÈY‰àP	A ´ƒÐŠ¤<DLÑQˆ©~ˆ\"S7bDÆ*¹Žhàü!„d6>è¬¬\"=GéGŠù‚…a)>(Ž\"d4Û	*˜k\n¼Ilh¡†Â|Æ\"¢	0åD A*²Å-¢ô`¡ (\$‘`òù i_&¹¤/ÀÜ¾N!Æ\nØ8´ØÈ0r\rá´)ã1ÄZ €1ÀeønÎ)º<2œÀ Â˜TsŒ>\"¢‚MD	7\$0@ˆäkCj[ÕQ%4Aª\",%º!–ä0A9a½@¨¨öˆÏÊ£e­p—1ñšwŸÚë\rëò‚\0ÄC8 _Á2˜SXm F\nAòÒx&º–kH”tÆ™‚øZË/\"K‘ñ]u¢®7Ê.›HO	À€*…\0ˆB EV¨@Š-±/)UH)!Ê#Ä·¬õ¾7êÓZÅqÝv‡°÷AñsEÂD>B ‰k¡:¡\$íz„}ë9ôê¦ªbœ`Î…Š§Ë!b\"5fî^'@I‡KÞjqnŒKˆv€¯Zz÷ÖVËJ¡-T@Áóî)…=›bÍdsˆ¡l9„*D\nA•u†—Àn\"AÍ˜°dÕYÑEDÆA2‚„Î—ÓF{¢5>ûñQ*“´1Y*âA™öŽÒŠ\riÛI/Ï0’àÒšpC¦aÂ´à¦M°c8A÷Ÿæ]D\"\rRÍ6<‡^¥ÏÔbŒ¡¥¥äpÊ¾M eåQˆ6\$ŸÞ[±y¥Õ± á+vA.±Œ‘öÖèCÖPÊ#3ÌùfìíŸ{LNå»hV–Èþ7Î?.é\"bÇ´kjQÕÄ¼ÎÓV\$|W—‘.`›/\"÷<‹Ì‚V`gI ¤'íA~nâ`ÈíÑ=l Aa RÕ”MËåVÆ´7ÒS|,Žg•/°j-.ÊÕ\$Á—‚\0^6é›MQ:0f(@LÝè‹t0ÆÁPAº]|ÝT,¼î‚BÈúNAÉ)‰†aL9‰™wR<MÊ 79ÞðÚôb\"@8PŒLd4ŠdÑ\$ý(¥]çD	Á€”º™ãHœ¤V=Ç“ m“`F|³,‰¡M\n)Ø¥… wÔ±ÞÜH+†PÅVÛg6DÅ’âîGÑñçi£mö<9E\0´k…drˆV+[{o›²/È¨â¼Qb“kÂØDQ.Ð\rT–g`È#(ÈÙ+'¢7˜ùï;ÔÏY#&ÛI¥EÃ7^ï\nW™c1ß¸vq0&òåbGâ7¦Bc~SyyŽÿæ²!X×·ùèùzÄCÎD’áõ¦pšu˜èÂ=ŽQ\0}æœv%øA!©XG\"R“RþóßJÝgî~ø¿\\?l}­DÎÒÅ¯=ä~ŽzééšMFößbü×/*DŒ\rpÁïs®ò·ŸëúÏwTî{R#”D“}âé5	á¿ºö~‹ö½ïF¿ä°ý¯P»oü»Ì¼ú†BôËÖËÇ¶vNöòÐ{,¾Ó§DÓ0&uÐr/îú°&¡\"ÊÔâÂ*Šv-dÔmã\"‰oöÝŠ_-áF1ë8³Ë@boéPÑpÑmÌó¢Åð|ÑP*á\r}\0p†ñ,üþ!x­#íœ\ncæò\"´ú2ä†æ(J Å(ŠBðìº˜ÃD,ê°ÿÍÐ®Û\náVû!xD#:à(e£F\"¾‹dØ0Æ0Ìà*™\n6º°€\$læÐæh\$Í2Í†#GIpzañ#.øòð–ó!Í¬ß	He°3±/Ê¯ÙnÿCïð“Ïª?qNj¡¦.¡jAÈC(Á^ÁÊcô Ve¡ÊÃg2:0LRðRõçŸ'¥â9êÛ#Ö'%\0'¢r†®HÌ÷gZœ(ª‰\0ÃèHcñÄdF¬ fSL¤sßæXÀùìöLèŽG!ckÉqS¯#¦\rðT¼1¯ òñ)R!¥!^- Ò+ ’×E\0GdþžD€NP# jóá~r>G‹’žrIãÔ¹‘G%B?\$E%²FHr3%%%„}'!#­(Ò0u1FÔ-+P=¤ÞÒÒÑ&#Û(äé)îQ±)²’ë²:I¡j¢x*ílNò=&²JÊâ9&„u\"Ç-My1N	Æ\rÏ±´V'tw3\0a\\v>Òòw¬öá,íjI-Ü%ˆªÀ’nnAÏ1v/ÒL‡Üm‰â­!*¨AÓ\"ç2‘xHÄŒ…”²Ã€êD€¦’#W5ƒƒ5îtO\nÏ\"OÜ`è@ØjzÂÀÖ²¯¦”iƒ†~åð\r ÌF9€Œ°Åë5æID¯\0ª\n€Œ p¢sš<C˜ÝÐfwáx&Ù12ÿRóoDKâj+æ* ªIÎ,óQ9³ŸÃœ1ÁÎî£&Æq¶xá%@#\"2mð¬¢¨@¬<'¢2c	Šö¤#Äât*^¥š5ƒ€9ò®Ä¡ Á<‘y¢M7çøÂàËoTòsâ#v§EÓàã­ö#(éÓxõ_O9(Ðz\nƒ’6Ãt53g;\nv\rààÃÉåDäRÚ±<Ûñ7¾ú4Nm³l>TºûìðÎÔÄ.Ê¼ª#4 Š@¬ Æ ê\r´ âH!ºÄ¨ÔHzMdB†%gŒ:f>H\0\n€åEc‚iÄ¨bNNzg;	fTáOFg\0.µ'FŒîqôuJÒ(#ò,»ç]ï`ÍÅ.c*JK“+Ä¨î¼TòB0@";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ²0T«ï“¡Á‡i0J¯äAW¯ðóìBGYXÊ“ÄƒC\0«L´ˆuˆÊ“daÚ§ ÑØ	,RÌxu•EJ\\NÈ¤i`­¤\$&†É¤TEAä\\Èv‰e\"Äg«GYM'—\$!Öûe‘,ÏM3Z!å\$Š—E»*NÑ1u°@@„áx—&u%+KÑ!àÂÕŽC(Ì„C@è:˜t…ã½t# Úò£\\7ŽC8^2Ö8ðâÃ˜Ò7Ù!|0Ø£(éXîhÂ7\ra|\$£ƒr6Ù xŒ!ôF\\Ž8Þ27Î\0æ×Šbˆ˜4¸ª	×3MT·N…	a\"–e¤\$ö–d^¤L<úÅáQe† ålÀT½¥9˜”’3xPle)¯ä¼8/åé(u•\$ÁÛ’F§YL…1:û?%\\0Ž£`èÃØ:Œ«ùP¤Èƒ•bp¿²è<†:D\"•EBbP:¤©ÖP™+ôD?ÚÍ†HÒD•“\$ÉÊ¡KÉˆ\n«ˆÙèÙi¹­xæ1Ûo\rìö•Ii@\\ä²c¬ôÑWí6ÄG^…¯óqÚA‡YNDb<…#Éò¼»æú¾÷üKe´¬J¿™Ã¡Äê£\"LNàÝ{Ä1D¦3’}v}Ñe¥BÑêôÝÈ \\§,ÎšF”gÃ“NÔ„£^7ŒÃ0Ù`_T¥,³;¤Ù\nƒ{d6ÛcÈ@:Ù£¨Æ1·ƒ˜Íž„`Þ3¼ƒ˜Xß_PÂÃ	ä¯~ƒ©ÅÌœó˜ØëÌ!…0¤ˆ0†iXãÚ@HS1.Äv\n2P\"ÐêD/t…½ñ*ø_t2¢œ¹f6(Äd=Èxö½åP†áA\nu¥&†æqC‘³ˆÁÌ;¬EàCÀp\r*´2AåT«r°VJÑ[+…tÕâ¾X	b,e²–bÎZ\0½iµªµÁÙ\r‹mn­õÂ¸×*ç]+­v†…Þ¼W`a\rf½|5‚úrå9â ²TžPÈ©ˆ¦!’\$„’4‰š` ‚\rAç¤‚¨\nYÁJ#°\\  BP,EÅy:ŒJúPF	ÃØZªëmB*E§PGŠHë)dÑA\"n‚(¼#Ä€ì‹Â‹!(ŒuÍÚ_Sòˆ(zJ„’:^ d\r+ÀØ³õæ—Ç9 V‡‰Á\0fA¼6‚\0ƒ¤LI8ë 7ì¼ÍñÈ7¡Áÿ†R‚xS\n‡µ~(ÄÕ*Rk…m+‹ÓJdh£ÁQ¥4§•»4‡`¤;¨ u&‚—ZtˆÝÄ)§”…oLÕ7ÀÜú×oW¯T ÒÁõ	“äÜónªÂ0T”+mx•Â±ü…ŸSð/0äk–\"àu‹b˜çë_l!<'\0ª A\nVÀ@(LµÍÂ‘äPŸ“À°2¬•ŠÄÀg[yZhÔÌP#ÁØ}Áb¿Âó_›5c/ð>]Á%KE^jxŽ0ÎQò€âh³‹R	º“¡sô(ä×–öà8«GjÜ¬Þy­\$NÉ8…Ní­©¶ïÆ±¦8Ç‡h”PD¾)\0˜…\ndqÇI§ŽË&ÒOàR«ˆ4·Àè³Ãq7ªîŠTUÜŸ”#¶KÊB¨¤åø HŽÉ²^„NÔ¬¥°0×pbÏiM!ÏÀáZ(S¦ä1œPÈ~OÝ›—Rð™¹·”åÀTE‰¥¡` Ê¼\r¸eìÚ°7nÃÄ¥’\$™L©…ö,nuÓsB’¼v’Ä„ûbL0vV:ËYÞUº²…—ÖJqKq2Sœ9!ÏÙ4§c)]°Øò`(¢p HQŠÚ\"ÒeIIDÜBÀä‚{I.îãºúäC	\0‚{,Òoª­6¾wáV0ùÏêŽœL'[7Kô\0¼1òAþƒœ6´€\"	l¦Ê0›z)¹ÓWÄôÁ=ÓG=¹irk3å‘|wV¯‹™6hõ¦ÑC³IS)©DN¡´Ú“K5uî¯Ùüûè‘•ŠP&,6GvÅ“’²ZKÉ‰>è³	Á\"%æÆ±—	Öò”Hö¸A\\2†)T‰VÅ(—Óu‘;#÷‡¨-·14T©H‘2ÇãyCV4A„ŠCÍŠHa`ÖÐ“&ÆLÊ™rôÅ“\nO6¾Ø‰m³®ø{BÇÛ¶‘Å­™A*„Óˆ#MÞ…ÌØžºêm&_Ì_\\S–j;ýŠ4ö;æ¦›óDJ¡³4<_–ó~}_ŒJd¦0S¤I2,ÅÁöE_/¦xiÕ_V0¤“ªŽÈiÒ,[Obõ#kq– ädÓvQŒr^¯ ¢Ä¢€R_ëÿJÌÏ\r6[)ÌÏß;F=îÑwÛ‰¡»Í+èÀú‹ã+¶9\r¨Ì÷³Íî‚ïz‘ð–ªâv>/|§ÂÎtµÛ¯l=	ÏrX_ÒÒŒ† =KÈs/Ïs®×¶½c¿I.åò½ÉÔFVõ%MxiÞOÚ}·ãö²Vb\riE°ÉÇæcÿŸnf—Èú˜ûç{?-q¼Çí’àÀ¸äV Äyí)wX@’¿~S“4\$äÏÒ\$Ô—²ÚM@šk	TÄå«ž®#Áv°Á>%â¯ÊÈíå\"Ç¯à´•&+ÂÀ â¼¯úÿîlú¯ºrŽŒ1,\0ù\nú±ç@?Ä¯jaocé2ôÎhùN‹ŠLûçx¦oÄ÷ôâ¤òç|àÎ*èŽlûPa/ÁÐ€4ÐE†<ˆA<3ØBZ‡Šç*PÊÄ;¡\"ipã¨ozÌØw¦=½P“\"·	Gl¦š'	…H„:'2bbõ\ríý°–œé\r‡~\\\"rËDäH+b¤µ‹túJ\\ú„<±ò¯]¯¨l„è&,óñ*CíÁQ.ãÄd@¤j#Ë˜Q®eðŽ—õŒÖ¦„rGoòäðHg©äi1Odâ°êÇ‘u±eqhNPÇ¬ŠÉj\\Ò‘cl±2öÑZ´ñ¤)ñ©qqnxÉQ§o>\$QÁPw°öÚDðÌLÉqvFÏNl±†Ípåcå@ˆÀÐÃïyäGLþƒÚ¬ÃBl2\0tì*æšÆ¹+—ƒ+I¤>Ä¶=\nÀci^ó/Æ¶f¬\"#ñ€€®Å\"¬+#¤ˆ¨ŽX*º9`è¤H\nhæ5ÒZ8’`cëZã‚\0ãñ®( †€ä\r€V Ëº\r`@Z\nˆh&†8ÇÎ]àÒÇÔ_‚Êš]’`gàÄŠ~\n ¨ÀZ\0@Y\0Ç)ÃÊäOŠ3îNuA@u21’:åËþçéTyËzÔæœ(é9-ì3)Ò KahaAfHŽ2Ã0rÌ¦KáÃ&Ab¼,¦–a\0rÍ|¨IÔ< 	“(]…ˆ5ã†9nkd\"A`š°>w\$-(Ø»ÀË._äD\\!‚Q/N{5Í=\$0ô3Jæ1m/b\nƒ˜7#z5’i+*\ràà»å~Àh«7cêo³O\$¤f¨ºÆ®4.˜Ið þîêÌ0îE;¦J@a8k†æ@¬ Æ ê\r¢þ)# ÊrÚH¡m–’å0`jÊÈSR8†Š'éºüó¶óŽÎ¾äúfnð14qÓpÊ±?%\$DËj¤±­ÃQJÊ€t#á";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nÃäÐ´#RìÓ(‹Ê)h\"¼°<¢ Â:/»~6 Ê*©D@†ˆƒ°Ê5±Î›<+8×!¢8Ê7±ŠÈ¥¹®[‚9ª8Ê•¹£(å,ˆl¶ÊRÔ)Äƒ„@b—Ãzk)1èÝ	½#ÒØ\nhÒ5®‚þ((\rì—?S4Ðè%KPy0Ì„C@è:˜t…ã½# Ú³ÉArÆ3…ë\"<.crR7ÁxDÕŽLðé>íhÂ7\ra|\$¯ÜŽ¸Žà^0‡ÐAµÓNÑl¨¦(‰ŽðÊ’#£Æ5¸ƒ\$º¸Æ‚”´í¡–ëb¥Xäð/+ÚúÞ²=–£k¸‹‚ä¸/xê¥¥ìPÂ®-A(È=.ò€Ý×‚3 —¥ßxŽ‹³š¤\rƒ‚éÂ«P—UrÔ Ž­@\$Ã/€Pˆ2¤ª9l¥ƒ¨ÊX6þ#M#XÇ3èh‚3¸×ÆO 	#*¸Š¯ìØæ:Ž@P¤€+óÊ•Ë`Ô•\"Ã¥´9C U{EÅoRá¢ÌâÍ'¨æ•¡¹ Ø65mk*9Œu›^¬±¶m+ØäíOÃ¨÷Z«æ|XØD¿\0Ì7(—ª¸höÀ4Hï\0§gç'Â¹‚%½ÞÓ.—ñrDÊ4³lîP†Õ‚Ç¦ˆ©G=Ê|D\\K›øL[Ì½0<“š1ð’D?‘<¨ærÇ²0s*7ŒÃ0ÙFX¢S9Œëø¨7¢ÉXÜ<ì´°ê1Œløæ3cKxÞ³RÁcO·„BÎûÉÍßEØhÊaJH‡®i²Ï|%â¦)Õº4´@a\0„¨É™òkèÀ‘òÆYKxqæ©·2ƒÎY\$	KD—¡÷ŽšC9ý2¯¤‹“†‘ÙI\$\nf}Í‚ððÊRu%ëÆ¹0Ò—‚ê‘_r¸e˜j\$d•6¤£ôP˜w,k¼2‡€ào‹Ô0NæI='Äü „PÁÝD(¥”rR*f\"©U.¦TÚ S¨ÅP*%H©œépbŠ¹X+%h³%dhû‡Cô’žr¬„P‘	 \"‰ykœàÄ´N!y­÷˜„B~Ïèi\r!¼µ–ÔBPˆñô2ðØüÇôJ˜P	@ýÁ.\0 é÷äbà™3/Éä4HÞƒÊAXßDV¬É9)%d´——Ú–\0mBh%€—D&wQI6†	°š“Xhi‰Ñ¯!aäÈ7†Úe±.+¼Ô£ŒXñÃ#áÉ\0ƒŠ¿5Ä2D®M9©%äDÏ@¡‹Ù´†!<)…InëË¸ pí\0_#hjë‹ŒÏ\r(¤Œ>äzaüÕ¡Æ˜Š†àÌYV‰eð%ôœ4? ´ÙNòzª6Ê~Ãz‰|+À²Ð¦ÉGË‚Ù,\0€#II\0º©sñÖuÎÕr’ÔiÒ+…CŠIÑ\náåîB¦@Bç,êŠ›……VË’ÿcL\nCõµ5ª²l jÒvVeŒÚÁÒ\rL‡ä@\$DrëvSÃ¼x'ûH#r\$WÓ äWõ#Dp%„ŽCrd]b„–s\r+ß‘ÐD4AÈ7Ñ.IszvJ}ª4Ke¡\r’%.âƒÑøìW+‡\rn\$YËF¹S(oz¡Îe¤+&Á¬°aQh¼ò„((\\K	y?a¥°‘Õ0AÉzLxá„+&oå¤’ô7QRt™”8\$½¡[«wÖ\rYhg‘¥UJàZ‚b¬\\ŽM\"‡¦>Ñàp}I\$¸2æ,’ìxw±øK4C¢G)ð¹–K+}—yôòím—²|W¦:A¸24ôˆÝW½Ã<—\0¡Š(	d¨`„¡3¥¾Ï¯m’2r¦]Û\n@Ö!à<E•%!Ìc_%_3ËLWÚ¤ÜG äì/u(P¢çÖ`:-Våê†JBÊL\0®\"gu\"Z½.Nk¦8£ÀB T!\$	ÑLýƒs…›‡GÉ Kí²¶tHKŠS^ ¼§/UÔ»šú;	4è­c˜\n\n¹ù´¢1–Éš šdÀKývmú:L_6‚]¥…~˜0¥2éÂŽG´þŒÚJjs±ª´Ö­#Eë&cd©nÓ\0¶mKŸíáw ë¿cjce­È¦™)š+fìˆ¥ö‰…„;SZì ö’Û%ý¥ãŠÃ»Y&'`5–Ç‡\\IñœBdcv‰}ÞP\$ä‹(¾Ôt™\$ÀVñG\nÈüN*Y\$ VÜdxÇ\r]f™#Æ~®@ì÷‡Ö^A <X‚ac¤Ôùa7h67@ÝÙ¶%0)—ŸŠ¾\\·ÞYåÿ]ÒiuÊõ	:!™‹˜á‡T[!þ¸\$“Ÿ_>i§p_E”ÜîÙºN‰|¥5¥¬÷¼†´rðÈiy %p6–ËK	Ì³\r2™¡õÓ˜†\rñÃY“ð–Óºƒ™ÿH£¸ó0D«yÿ®=h5õÎ½†ðé(©ÄGš‘Ó_ˆÉCE`¤4)°\nÈjCR&À¦Éu>ôZ²õ®r=\0ˆ–†yÌ-¶â^;¤¾ó¦˜·¢µîK¦8œælí°ôž¤B,Jú\r”À~ )ûtBÍúo¼÷Ý^n-ÀÜ2¡z¤:£\\jÍ}¢>'6Ö'+-/™¸þrïÑþW8§;2¯ËÛû…óh½¾ï¨7ÖsU\rðDz0—_¬ñþÕ‰ûÿO1þˆÌ—ã‰~ø\\—LNÅ\$fj)äjÌ5I˜ñã@¥à‘<aÂ\"#¬â#§<{Â:ÅŠšG¥š¬b6\$`‚ÉáV8Š²=¢–bÎð#då£~³‰sN&(¢ŽgÍø/Øÿ¯ÜÅ`æÀn€u+æ²O\n<ªöÆp\\ŒŠA Ò[ðð®c	P˜´¯â‘Œ)	l,õ§H—Kd¶†9\nÃÀ0,¶5Oà÷K‚æì´\"Äÿ0Í'(ç‰täå°Û\rÚÈ°¶tí¾#ÀQ),\$Ø…‚Â<â\r¢™ànCf:°ˆü”úÏr²¯@¼ubÜö‹Ã\0éÃÌÓ®d¦^<þ&Åˆ–Qú¥¦ììÅ¥IñPø1I1L<\0éïO\"/E)·ïvÁhFC0°÷‘tú/Q(\nW-Û°¹tñq©t q.cÎ4Ä)˜Çl‡\r0¦æ1¼Ç«K	Ñ¢,‘¿\r¯ƒ±8{ìxÈŒÃL„IPð	„J-Q;¤œAÌÊ]	8åð¨Iñú&G1(ûÌ(J\"ß3\nŒN\r ÌBüÊqJùlÂ~1FªåØYâþ^£30Zì%„6oîÔR=CdÉ r8…í#ëvBgÓ\$r8ÁlôS`^®\nfÉ(	ÒW\$‚þ\$È>7êL)D„\\Y¤>Ä¤ÙÏÊûmE)±Úùë)%Ò¤×‚_*€e„\r€VžË˜\r`@S\nfä†<VåfKR z¼'£82 Ú®Åà2§Æ\n ¨ÀZ\0@. Ç-C \$’¨ß\rè°m§0\"=0kÖr´@3õ#œG„Bväl\\. ïà›-@Ì&t\"¸ÇÃŒZÌ`	ÂÆ-‚öQcŠÅå°8Î¶.º(p£Ú€SRZÃ’Â,d´‚\$È%ÄªF‘p¶lTiJbšÃ¢	“‹-#Œo¤FlßŒF4®ëá2ç&^\0êÆ¢+‚¶#ü4)téN¼ô«<žÃ3Æ}\"*ˆäÐJ3Ã:Ð¥‚äµ ¨5‚à%ã') Ä(gÊ\rä¬%P–‰&•>E°˜<¦bfe°¶Ä¢cäžêähö&òG8ñ\0æj*æF‘ì&Ó´º*'<d·ãÊA Æ ê\r 	óþQs¤=À‚-‡EäÖm‚²ÐˆÊBln\0¨lÓ½GÈISË0ë\n>CíA6u‹°cÊ`óØÆ~Ëf*>DÊêÉC\n2)\0¶gZ5„";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ì“Ø÷!ƒ’”2¦C2ô4˜eZþƒÈà’2I3ÈˆŠxþ°/+…¤¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±B†ÚŒ#šH<É#(Úæ¡®\$\$ùB£›¶0Êb¸Â1 î¦¸ TRÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€Pxî\rpÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ñÐÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—JI˜èã}„b7¥-R	'˜£#¥iªÿÊœœ¹i\\æ1«*:=¶(ê:Ž@P¬¯áè8I²uÚ£¶²OlvÐ'+Ã­ª4¥r˜J”ŒCÊVÝiÝ	oÌ‚ÆDR(‡ ÈCrLìBë[\rÉä„»Î³0Ê3#¨ØŽÃØ:È¢\\Ã¨ÝbâìlLÈ‹Iû–º¸˜“š»XÌˆ‚3%ñPÃŒ±•i(@ÂŒé^ŽD˜ËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.›{3É•Å¯l²\"œÁ); Ô=/Î¶6»›&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ms›¶C^/‡Ú,Ê\nì¥ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæëYœðÂ3ÆŠ*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–,:Yî:ŒË²v!º@à®Œ·7-Ì#on’7ƒ8ÉËZ²uÂ¯**›‰–¬ÿê3Þ·±s*,\nYÌ²é¼’ãÜœÆqOëzF¨aä'²Ÿ”‚PŠDu²ŽR\nH7)D\0¥àªš\$Êp)õB•¥TåÉ~ªµZ«Êª± A¡Zç8C\n‰fM½¯âjÝ\"V\$ü¢=ô¾IžCä\$˜bþpôH±¢”~G\0P	B\0Ä¢¦HÚ²\rm¤ì‚\0PU]Ùw©á°º‚òïV&ää“Ôè‰Ž¾8DðèòT,#hš„’(LÑ×\r%p§Rf­M‘SAÁÅŠ3`ÌS	èA‚\n4ã›„Éz¸6&ÍlÂjxS\n€µÂÃfT\nYMŽï\$Å'f!aÞ/„At–Ò¡ÄAœë’ÈRËë@¡•âjãD(¦°—“¬HžFh¹0Òw0TŠ…l¨ªvQfœÁÈâPŒ]ƒ)x(¤1(\0©€a&)b\"á8P T³Ì@Š,úKÔ—†Ô¶”ÂÙK„†ÐtŒLÙÊE71cò~ÍŽ'é¼'†ÙvEÃkáZGŒò·s˜F\"te”­¥'VÐš_U\$\rGñ¦d—Kn\rö›8RX1‘\n1Ñ›´‘Ùšæ\r¬’g˜E›y.\r- O(Rqe@¥YE§T´¾\"Á“§g|µƒb@´Œí.SsÜð¢†1n\"s˜ÃI\nKíS°4‹!+O/)¯jOâ{k íš“u5Èñ\n%&”2‡u¤µ+¡ƒneŒ<ÖL¬éEjë„È„\"˜s!?/µ7?Ó#9ã¨ga•×z‚²ºn!¤X*[’8qê‚¨D6*§î^Œ[—†=hÛÈPÀUC\rîŒ2-HLòþ\"ÍQ+¡G«pYù\n!„€A#l:r\0€Ð0ækÝ‚œÆh»;ÐƒÉ% ¼_£(G×)2¦D(±KðAA`'çë/*÷Ú[‚Žà'×<{ƒ¦\nCø7øæF¯\rÁØ—ÀC\$pšHdimÄáa‚TK.a—^7ÝÏ^÷DIlÁdï`·Ç€o>JUÐÔ\\sŽðÒe¹XÄæ\$uƒCxw\"Åe ™˜L	‘ÌÊ…#,’Ù›—Mž5	‚á'‚jºNœ„4\0ÅšŽ\"\nË•¯-ÍÌ1“iªºh©§}\0PE„uè×ãXŒ‰‹%{,•,ÚT—ADñ^Ê˜«<ºcˆr°¨~>é„èGwnk¦š£ wé©èoçMœRkª–îŸf)7Qku¬®xkÖµÖ‡QžJÙÔ€ßae›¢vbU/këlvøº½	ÙôRöD»±lõœpƒZGÝ´ˆQ^Äô3‚V\nWÖ§­WS*iK©»j çhŸ†ÚkKÚµek˜KxSí·¬É,7mšgVÓVµbÎæ¸:šëp‡¾×›â{w/Ô*ˆ†.¶HÇ¸mÚ_üýoø^ºWSŒæ.7ƒ8î‰¤7ß;clÜö¬¤º¹ŒN‰Ô'fÿÔ<ºtÛ.qm7þ¹ÔV˜±ÔXuíPkÜköÐÂŠÄJ+Ï!A°3ÉJJ—ÌD\rA¸ë=R4B™z´É:=iz÷úQ\n}.\$×È¿#¦½’Î¯ù†¶÷˜&kT`ˆíl+t›qPSºwÌŠÓ²¼ënÙÌ©žœñËW…oÏ&à-¾»\$äÙ=Ýä®ÂªwÆp5è½'•áž8\\s=­¼7dg–’ÜÐÃwff³ðÃÊhi:G‹ÝTmä7Äº|ak.wò¹'Íß]\ns1¦yëšÁÌä2Ÿ­ÿ²Æ>¶ÔökâñŸÆÛˆÐ0+å*^†7»t×3àÁ—÷:>ƒËkýü<ñæþ¢XâÂ®ïèÿOìó ¨ë/òPDoîòÐ\0/û\0eñÐ·Ç«nh·¢ð·ïJÖ°0¸¦ÿ8·PDµ¯¿°<üà¨'DŠö*>+¼8ð4¦°d=ë¾ßOŸä+ïV/ã8bO ¤¾~1¢&hj³e˜!fF^#Fùb¦5ôÂp âëHåbJi-D‰˜ªbZ%âvcT_âú\nlôeÂlÖ‡ªAjž9¢„~0Ü¢-m=MºÈÐJB¦ùÏe˜\r€V\rb<\$&’?£„Øƒ²?„‚—¢ÅãÒÎô4ÂX'fl\$gêž ¨ÀZX˜~N¢jÁÂ>ôh†#ŒB›Æù,ƒ,(¯:8QPñT%o\$#4(\">\$/\0ÇB Xjvð€šV€ÒËòmâ„¢‚,\$d|»£æ?‚<„\0@Q˜1E5¢eñ8£aF¿\0i>uäf.\$I\$ŒË†	Œ°‡dl” Ç\"ä±\$½æA‹2#£Ñ¸åbä(\rR®±ó.ž!¢]°º6\08FÀënÐi\"½’ë oâò066¢ä*c8~\"FÅ\0àˆ²M_\".Ž²Œ¤FC	'd(ªVM-N­~j†n¢t³ãý&dêgRd\nÃ*mÌ<<\$¾Yä¦¢btbB¥&;`ØJ_eü)‘úZ ·bV/ ˜2Ã ƒx‚¦Kk€,qÚÞ'yR\n(b,^ à+ÅŽÿ\"f¨§f¢@àßå€%D\\	\0@š	 t\n`¦";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß¾õ¡C ò80r`6° Â²zd4ŒŒèÐ8îúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B0Pè»#Ã+rç·«dn(!LŠ.7:Ccž¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á`xŒ!óìA Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒXÂ\nÊ‚	¼C êåˆ­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-¹@P‚:¬‹`ÖŸZlpÊ3#¨ØéËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË:Cž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|&2…©˜Ø	ØòÜ#z0¹Ã0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†:yæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iI†L\rn•°6'cƒ¥Ûm£sÌ3½,Š‹ƒ†7XC¢R•ª#Z8GKE\"¡ú~¯ÌJR¤­,KC¤¹/LÈ™ƒ.M	©9TÚRÓ‚rN‹Q;§”öÄûVP…-(u{Tj#˜ÒS|iM;¿'f¬Æ\$’TyÏ@:2 èNÉ±\r§;!ƒVÑdR/ˆR’’â\\ÊbØVÌ ˜x€{ŒTðÀD  €-ˆH@Ÿ”\\\n\n())¤¹;ò–\\ÞÛtî¥Õ½÷´‘É\rÐråÞðIYO%äÄÉ#óbIIú÷=å07£p_]ëØ)olô/ÃíˆˆyoD	\0ÜÚ+¸QÊ˜ŸÎz0r3Á20¢†£‹ cIÊZIš'Ø\\ÊA¤#æ‘²(V,FKºi4ÂPH­‹æ079rðPä1:'„øúÈx}™Bq\$ÁUÆäâËñ>z!¥>cAY’#„x›’\"H]%YS0’f>¬˜F\nA¤UÖ!!t“)N\\#–Râ¹~@ŽÑBùh!8P T´@Š-\nY+-%Ç´pß™šHÕ„Évºrê£Î\r±óªHXl|¨4‘ÒšVEÐˆFgÔmá:‡TZˆ¢I”´ªwˆÀho‡¤ó@æv	Ö]4åœDV„vÛd§é	¨ö™QÑ= -%Ú4~ª›Y|Pa¥’4âCM~àéEÎ€AâŒSˆ„`¢¸\$îîX\rl®¡àMé2TðTbgxP ¨]¥ú)\r!é!2Ê\n¤¤,\"Iª[é»¬i­!ó ²Ku‹/¯!X«5J¬–mˆlEÄÆÖ²ÍL-­—L“°Ðši‹zµ9–’7\"K>Kìü0·…BÒàÊ‘¹·†öß!2Ô…RDmIi4¥±øã]e È°P¤¶ ´m¬!¥Ãzz‘™Ë¡!P „0\$µŸ?§¸ÕÈöŠIX… 2’r2oëâ'…·¬P@Ê¾1A‘b)`Yncë`3B3¤Â[—ÁF-ðše`ˆKæ8F;áL,0ÆÁÆ,¡ÃÌ?ˆañˆ)Œ¥z2¹€iñ1<p8lâPé…Iæ	`»‚{„ñþ'Ã¤%†¨F‰“)Ò“AÝµ””œHÈé YZoe’fb	T¤¤ÖkcAHR0A\\2†)êB§-þ®¹6Ÿ%7žE£×ô·¶£Òß Þ|A!–…b³IÙ1³m[ò„’RÅ…0¡Ôt8ó@V’—‘n–n€KÙ‹ƒÚU\$ŒJl:¹.šV¤iS/ô¡a†[TZ£e§&óDÕÚÚŽ0™ YJ?5-ð2#ü`É¿*¼¡¡ä#²I˜sÙ‡/hl¹Ÿ¯O\"<V'.Ö13êPõž˜Û¤µ J&œb»1€¤ê-O’	L¨D=©¶‹«f¶ðŠÉR¡áQJa'\0töop×áŽùà»ïp3Y¬ÙÝÛ½Õš_‡¶‡xtŠ¹â„§ˆK>1¬¸vLÂZfð\$½9ŽMþ*W°ïœ@ó@MßËú¬€ò€éÊ°yÅÜ».»>×á	ÖüO„Ï†>®Äæ†¡[f^ÒzKã]Ú:¦á;Te¸™4P¡Ã3OPˆ*óA1¬÷/	zÉ§†¨d¡ÂÙl°é§ëÍÍ”õÉ{Ö!õ`'o•\"|h­÷^)¥=ô¸ÍÑîA'äªÜ+‚ðÎ­Ý½¿Ý×t.‹KÄ¹MS¾_]ñæÕ—˜Óºêk©JÕ…¨·¥én©êà§KÜ3[Ø\$Î¥Â*I)·E\nñµê a/½«Íñ‚…0Ø¶(HÍG‘H¹#c&\"–.ë”åó\$Í¬|÷äœÏì{2÷É}¿¿÷>B\r®Ý¥YýÛá“E27t…SÚ!%üÑ¿ß·U‹ïîÓ&\rUîVÌ)ÆÚá‚õÏÆ0@×\0/ÂôŽ9\0öNBüŒÑ\0èþ¦À(0\$MåšYí9\0]N2÷\r0ý/ýƒ	kŒ¹â¤û8šÐN¹@Ó¼Y«Ž8ðûPEc\0þÀ¹Ð\\Y¤ ÐfŠ¤„FB\0o>?ëÒéi	Šôo´c\0æ3+¼ü\0éb;i¨)F¨9kŒ)ÃØnJvb,þê®‰\nŽùaoÖr†=ðÎê€–Ye~RHì` ‚ÐÞ`§ÐENAe*:ãÞ3Š¿ì6åJÅðÒÅcçNZåé¬d&\r€V\rcÌ!â=­Œ–(Ø„”fÉî]còí'†É`  ¨Àpn+xO¥ _\"S­8\r)Þ7í@È®s1fE	¬Â.ÜyŒòSånÖÂ–üöË-¦CŠÑÐ˜ïƒŒÎ\rÔƒcH8mÂ5‚,5Ñ3à¦Š‰þ«#˜}1º:D—%DF#þ\\J¾0kRÕC\\ÞjˆÞÈe1i‘…ª†Þ£oçÊ×qØ¨1î¨£¤e àÛqé°7í^6-¾Þ’\0¥‚f2#Ì—\n±.°õ,¨0)l‹þñÒ9`š’Ð1ÅEã¶RHÌÅbì2Å‚'pð¥ÔhR´+f\"Ú¥Kf\nf|!ö}…«ñä` Œ¥PJ¿Ã\$äÊ¤g2†|¥“ eã„Þ0\0¨B\0æPfJ\n†-hbAä\"\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*#‚û0j3<‘Œ Pœ:°#’=?Œ8Â¾7Á\0Æ=(È¨È Ãzh¼\r*\0åŠhz’ã(ßŽƒ’ì	ŠË„\nLLXÖC\n\np\"h9;ÉŒ3#ï8‘¥#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(#C 3¡Ð:ƒ€æáxïC…ÃÈº¿ƒ\\7ŽC8^ˆRcÂ7McxÜ„Mm\"2Ž“è¾1\rˆðÖÂHÚ8\r‰r :xÂA#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…Àƒšg#¼Ûj¡í¤¢M¢td2È‰Œ‰3:!-Û&NãyÝì¨î	cxÙ(œ+~GõxÂöBê§HÜ1²‚`êrü´cjPM§ðèábØåà#£pÖÓ­Â\n8þŒ9D =YÌX3ŒƒÒ£\rŠÎ)Ò#žÕ³±\n1ËÒ*ê:0éHêÿbêR0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çcj®‚> ¯–›šÁº5õ€&Cxè;²¸DXç=·¯&¾dÍ“1Ì»ÕÄ9Ì‰tNïn{ªåÂ\r6)ð©èéw ;û“2Š¬àÃ\r¢³ë+Ô³}UV>9i*uÓé¯Y½—Ù6ï“\n=ËÊÎOïfBºàPÙ ¼h*„„xÌ3\$Oâm¬LóKÙ4O²V–Ž³/°²£AèÆNˆÂ#çºãcû*Z¹¨7•oánX\\úƒ'¬«Œ¾Ïo2{…Ÿ¼ø1v|‹h9>sXúRÁ Eˆ%v¨Æ_›õ~ïaí?ÇÌÿžúh|-žÁpÄúÔ	WÐ-÷@àèM‚qsD82%Ðî@Špk\"\0€!…0¤r¿ƒÇ‡2ROÈfR´:ªWcãÏ0\0¶>ÆˆI?!äÙ(‡0ÔPa{[‡Â	ñ¾Ç¢š“c~‰µç²ªÓA\0hK‘prR¾šù+‹1¬0Ã”ñSÚ}OêA¨UeÔRŒ@Š=H‚õX¥Tº™Sjt¾)õB•¥dÊ Ù•V«X“>V*Ì¡Cðæ† …Vê€ÄŸB ùê Îm6¢K\n«%\$ÔôÖ¶PÑy!Š-´¹bMHw@\$0^Œxo@Nõ¶p1EÚŠ?…ÎdÌ´ïWÄ\nÔ—“f]šc{l|”ÊVçUòk>…É¾J,ÿAP/â\\¹3Fv„ÉÜ–¤2Â°ÓIQ4oêú&6r¦CYðEp…[“’vÐ%¢\$H¬1@àeKø D8å“¢ä‚ž)15óÒ‡ra%›È5da ©¢\\‚\n‹F¨.¢ÀÚÈù¬a‹ªÐw{âis\$óÙûÁPÑV©[>Rí;	–,R\nUF{áÕïª8&hñsZÁºˆ‚€ƒJi#³ˆ5UÚ@ã\rWÊ°‘š–Þ­É€¼ ¥È;‘È€R¥ÂtIL…†÷x\\A\0F\n“n¿®ÔY%d!á´›µÿ9åØc-Îž8-ÖÚ\\Ê\0kt]°à¢‰%Z7êÎ;Ä+h	)ld±„1¤0œ“Ž…^_Ì\0ÝZú¬×:oTÈ:´‘ÒÚ°‡A<82ãuå„ø;†è÷ÓóÂhfgn©¶æ[žP•%'xð)ùf	ñq\r41¾*Œfuæa ¹ŸøJeU«N2Ñ¬©®å¥Fq\rÑØNÄ~oZDHÍr…WHÞªâË/†Œ…)ûDÑ=ã\rÄilÅuj‚\nƒì¯¤¼1Îâ ™ Óf Q\\£a‚2áh›(dÄ÷)+\0a™tP×*Ò4CÊ-Á¸j4¢³v‰hzSE¸ïÜô=\nŒìÿ…Ä	Æ8âlµQ:.Ä‹!6f¸¶VÙÂ:»,´‡q¡~C¬82#tà\n5Ì¤èÝQsE\0KÁ¢¬x®9‹«Ö<¹ðÅ8E·T³œÃ˜œõôABuícˆ\"óO>f\rÃ„h†áÏxo²OØ9#R™+' ‡ ÅLÔ†V…¹aÐÀ•ŒÂB T!\$\0âr‘_5W&xƒ¬4¦br¼°ÝÛa·¯¸•çÜºT€d^æ<Èíó´ö“ÀæÏd’^pVcqH2¾CnçhfÏÚ¦NíÂøúöúšÜ1?q’ÝÍVð‘O]»dÁnÔ-»öðyÜOzEíh·CU›Qu/¨QMrà[ÊƒbØ Ç7‡()÷lŽ\0M@HPGû×€ð=ôû7ûâ~|‹‹îB…ÆªÝËBD­Àaš0irgÀ;‘’6G_]l\$„hŽYn‚UWÔõåû…¼ãbF•4=È3×ž¢Nõ¼Lˆþjt+zl’	'¦²aZk>-bœ¢eûbÕŒ²9\$Ý¬Á\0 ‘”‚Ck­£³`ááò\$5,º¯l²GÔðôãFë°×»F¾ÅžIðiÊ®Ü›x}£†rŠâ/h›fˆP}\rï–«ÇTèê„ñ¯¨òÿ„ýåé}‰õE…ÒcÙíÐõ°mÔØ68~hñƒuÖñZ‰Bƒ9!ªüŸ¢ê>™n¶ÖÆÏýƒNl»ù†Ã2fou£i~øÈ~•\n›àÝšÏ_á¶\\Šph)ø6Ý/Àº¤õ-÷Œ\"ø…„r‹ÔpÎöÎöÂ€½ü½põfæR…ïúvÐ\0ýP0rrP&ñ‹ä©Ï!o{Ê\\Š‡trp8ñpÂO \n®´W Ú=Ì\nÓdñOyä~ÂJkÎNßŽW`êZ0càêëbêÞMî!ð¯\$‚C	”öoWž(¢á0¨á£,±¬ø²*_PHõ£…šÏ¬ÿïEpZ_ÊÏÉÅP*÷ãr&ÌÜÎä¶#ªÓBˆ|+dþipˆƒäÂN?\"l\0æ·FÀ8BÖ|†>!ÂZ\rÄ‚Z?,ÔF	`â+\$Lâh5†p`@RœVâØ>iDHÑ6ª-ÂOd\"\nÈéË\r°ÌöÅËlÐÕLõ¯èºŒº[‹c	okB§¬¿p°\nË€ä[L¼²Ñœ>°óï^uËøˆñ˜[¤Úk\rJw§×%y\0kæ‰QÆ&?ð<¾€óqËEy/ÖÎÅÂºâ`ñÈ:Q¸qN_C¤äDV”&ž`‚ZcÐ8ŒhŒŽWÅŒ<ÉmLkˆœ@¢E±KzÓ-7	0z÷pÓ\0_#ÃK\$¯P1\$ÐyðWO^Í\0@ÔL9C™&C9M8M±þ¿²fÔ2l¿r'2>E¾êÆvãT`d¢\rbhaì-Y\$ˆ¨22ž4òC\0001°÷Ñµ*²’£OQÒbÎãBN’¿*xuçc-®©¦ULý’å2·÷¯R…'Òük\rErç!0C Ðcm\rU0àó0sôR_ï!&M1-'§c2â|ÑB\0E­I‰ÐJ£îÕ¤6*Òñ*o&ÀªtD\$pG1³Y5Í]c¬óƒv@æW&Ì-ÒY\$¼…q.HlŠ\\C63³†C«ªÑŽ8]¥¼¦Ÿé˜lÎO9çB\r3¤JNc9Ò³PÆ0ã6*£\n]‹°<­S¦\r2&8Œ:Bp- ä¥„N-„ T ì,>Œß.Çé“û\n¨#@\rÕC.jD‚\r€V\rbª§\"„üFš•N iÜ9œ:’±£±J×<QTMbL?”-‚ø!Ì‡àª\n€Œ p&Ô\nÚ3b+g¨7\nÔ^2pàõJ_FEWF“z~tn2ƒ-§ÙFo–ÄDÈáå|Dº#Â¯ Ä#¦1Bäm#_/ƒÄÁÍÔt-<sZ>ãXÒJ9¾×t'q>ƒ ùfšŠŠZ`/)OÀïŒ¾%¢5Nµ€Ê5‹ô…ëí3oðƒ¤ôÅ[b¯Ìà&0–•„p´ Jþ%©QŒkQÏÉ‚Œ6ˆ7R‚ýRÔu\$qÓB‰SÏÐ½ à8F€óU6÷:E\"l²[«Hðf`XÎÈWÎz 5”¬ÐdÊ\n`Öøô8I	”.¦äÊI#oXñ:'K6_É¦ZÀÔp‚ÜHª((-ø³dFï«„¸•Pó&`0À‚(©<`¦…hZO‚…k†‚õ=SÐ4oÜ?„˜½5‘^#>f6•Í*ÒÀ-Ä·#HB®Ðr	ç,\r¤TE„Ö-ÂZ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ¨4£ÍÈ2¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›Lº P†0ÃiX!/\nê¹\nN ÊãŒ¯ˆÊóÇBc2Á\"ŒKh–Ãa\0„Ã°ªÜDÊ•E¬+?ñ(Ó®’Ò}Êoô£,EÂ+œ91âjºLnRÉÌàPx‚\rèÌ„C@è:˜t…ã½Gjðƒ…Ë Î¥ ñkˆÜ„Mðä3Èô\0¾1\r‰èÖÂHÚ85ñcœã}„`èŸŒ›jÿ\nbŒ”¯ËMxÇM9Sdš¼îSbóŽ£ ë8LKÆ¹IR½ÚLbce+Ã•›gÆ¢pÞ;#2>Ú!ÕÈÄ<¡ HKu]Œl7ƒªòœÃ‡#9ÑòâÈ\rÃ;W6\0ƒf¾*ž1®B\$80Ž£`è-×¬†)¤£-†æ±â5ìëA‚êºðJ((&ÃÀã.Ù– á\0Ø7±ËØž9CkË\ràMŠçHrU„§)ÚzŸÀHÊK®B@ŒA¸ŠLÁT’¨æÇ\r×šx7)z&LÈîüâÅ[Lr[4Êò¼q[6¢ZØæ†ºÛ›¬j\"Ž{ÔÁ¶L0”\r-r6»ÅÕR<„1â(ñÅ°N6î•¥º£\nR§·¢›æô3·<]‰8ÍJ–J£xÌ3=cpË ôvt‰¶) *\rêz<¿ìê1 É\0ÍˆæCzîÉ˜åÞ#8Â¼…ßZºHP9…0°Þ5¥\0†)ŠB7¢”¨OZrTå%ë Ûˆ¥‹‹T·`|´/¨HåÙG&@ƒ›¿v¤Ýû»b¶ãÉ«ýy.,üŸ¶æ›Ûkó€4Ã?¢:aƒ˜w.Šä®juB{4Éù@(%¡”BŠê02;% ¤”¢›@¤¡LœÕ8§•\0tTJ‘S*‡«I@tV\nÉZ+ep®•¨a{E‰¢'öOb	8&ÈÉ¿†L•‰!YiØç–äEŒ¸hBpÍµ\0œJB\0 ˆ¿)†Bl‚€H\nLÛCAP\$œ¯!3Èò\$°œø‚ÚCO#%à;>T>IÀQ8g:G¥‚PÊ,kJ¦9U‘ò:ìCIÏDøƒ´@ú¹-?Ké ‚•J„…\"AäÒ \$>j˜šxW*ÜÞ™Ö`WÉ6 LŽ9Rfˆ+3?Òñ¼×ìxS\nˆ	¥bx¦[x éÁ®:ð@C u!d¸ß5¶‘-Xƒõ rØÎÅÙ4sq0l©ÂE ³E-ZÁÿU½N°Ä]šò¾?!¤×±BV0TŽdõ\\”W!&	ñvÈ’\"pÍ9\$@‹tžªE`lT§<æ€ ž\0U\n …@‹I©@D¡0\"Òä¼‹&¡Ì^«ÝqS„¢	`ÃJØô©Ì\\‚xpd˜22b±	i¬bÌ¢e¢¸Ùˆp%úLÕz+Ó€ s!¤<\$çEQÛšMnqñÈÑBù¤…iŠ®nQ’SØ^P8c\n¨%*ÔÛ’Ë“9Nµ¥””µÓ¬fŠgâP‰!™=+\\¤\0¤‚«Ý\$k!XƒÀd•¡¹N4T¡£¦¥á¡}Ž1Ì¨\0¤”óšëÿ\rö‚Ö„œ^“«’^’\$ë»saH SLi\r}ªµšÅØÈc!!’ËVrdÛôŒ‘Ïh›“)nÑÔ Á”;€ ¬fYu¹h¦R€¡†#Zá1^MÅm’ÒEz^\r&.ª€6¢õ–^•ìmU4Å±·gF\rBUYsr-\0©|Õ\0r\"•:ÿ¤ðKƒv1@ç3\"ðÎÌ‰¦á¾ãr\\™E‹1l6’Cœ‹‘…oµfÐDê—ihT!\$`]PS¨—Ð89@zC‘W/3Â\0±\$jôÁyazn…%†õÜ®ra \"‹íßdbüÆ–l\n)ù@ÏdÒ’;oÀ'*dS•ÙTw/'%åÜ¥—ó§\"±¡\0Æ¶×jÕa+™aÈ“‡¦Ã2®go¤›=æ—ús2a~¹?œÜÌaˆ˜qÐã>?ÓdÃ4I‚Ñg§JhcŒÐ¥	œ\ráÜŠ8¨ìrŒiK=™ÆOT£ªP‚6&åÂ¿ÒpÉãK‰•j¢®RÚ?Ü2†\$§4¬ª*¥1ÁÕ¶æ@Œps(ø ß•œ	nÒD›@’ê™ua–º‡8ÓÄËÑ{\\Ùz»?Ë©ºÍµmSwæãhTãØHZßªRNz÷uq'W‚e¦¶ÍÆüà„¼pšnÛ÷E'Ýâô]Q¬HOëw\"ê€B*{ª)—œú–¼©ïä¡¦EqffgH¥ç¾+ƒHŒä…Èò`½÷õ!ÒìAFšhá¼ðúåV6ÿ®úÛ£×I<gCrFé–ÀIæJøwTš’šïJâçƒ©:|\0öÝNÁØ¸gX€\0õÞ0<·ZÓéSq›2ã¢ÎÜ›æMÄs>…Ë=ß-™Íí'ƒ`ïˆ3\0œGJ·cé|;Æà*8°/Þ|\"¸ùXø²|Ç‘í=2)Ó®¬‰uó{­´¯_ˆ°fÏIV¦Ä£5òòPßŽ/äÔÿ.wz‰< z]zzw}ú‰Ë#9E‚§âJÙ÷8ÝÑdmF|· ó7ŒÂü[Ôj¿¿x2¾óåïwìGn1Ü;ôxÉ^+íÜ7ÎâºµÏN&`»·²ö¿ô(6ýoüˆ\"2êìÄü)% ŠÿälþÐ\0†\0\$F6A¢ŠFÇúpn`Kdí\0£âUŒÂ8ÌB”¢‹\0Ž”ã¢q#©lNÞOÅ\0ðPÄpI\0Ë¨¿C”cÂ²·­­ª¢e0RÄrƒòcðqã”±PEÎpÚf(âä J§Bæ\r¤KFZaT`*ÿà¯@Ë\npªú/FáÆ1¬óPZáÐhÛ0¶°©p‰\rÄú\")	0Jÿ¤,_0¾‚pÁÅó\r¯l#ÂrÁcÀâìÁ0XæÈ	Œ f0etÂ/ÈäQ!Œ 	:ÿ0 \n¤ÄL†æýðŒ]ÑÞˆ	DLmâ[¢p	\r,\rãž^ì¨”«žqPR8Ç§È6i@¯ûpx\$	<ãúñ†fgEÒ5Et0Böãäâ‚¦bZåœ¸%J51¨?±–”#6ñ,ã*SösŠ.<àØ`Æ=f`b‚AM¤C:œ†*?ò:mÎ Zfb¦ „ª}é€0‡Æ¥ ¨ÀZ‚aƒóüï,¼¡ÍN|ìžðÇD6RqŒäŒš#„2S)vŠù‚àg.n ò¹¥Jäâ(ýC†œ‡Z\rqJ½ªÀ ‚ôBYâ„xäjatbBŠ.@˜Ÿ’;²‚Ÿ¢#p0G@6/\0›'ÿÅÑ\$EJ6E˜`-,‚[Ò¬!'²©£e*M Äh BŒKƒáC^6O°¬@Ê{¦ƒÌ~ô§-*có,pæþàrÒ4Ì-‡º\ràà9å» ÈáK€9e¬IŒ\$o ê3%Š­‚ó+íú0Ê®âªŒèn&Œ'Ð”÷â²j´:Â2I@ì3«›\"n,eD\0¤Ó¼@‚/1R8Ë8.¦ä¹±ëò´¿c«ãÌ¬.´pSv¹åöK0Õ¢VÁe@k’vf¬\$7Ïàl ÎF€";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œŠƒJBÜƒ(ÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ C!Œ0ëLP¼BËB8Êú=ëìl&3ìR.)É¨<l)¡ij’Í¾ñ9C»i[]1Ï;Ç1xŠèÆ¬Ø˜7¯ãtF9'£rVƒAäd44c0z\r è8aÐ^Žô(]ª3ä/ƒ8^•ÑãÄ9¯#p^8cÎ÷ÏbøÄ6'ÃXD	#hàÚÅ®ˆxŒ!ôÜE£¢€270)Š2bÏ.¶£*ê·ªJ.&¤OSÄÓ£ ëBØƒM!Z’#vmž…ØïU“eÆÂpÞ¯ÈM+Ô½µ Ä< ÀMÊ\\è2.!ã`ëÃ)o\$:1úôËmR:#‚\r’ú(j˜Æ½=¯èëgÚLê2×ƒ-|è2‚5æa”ð[of²XÆ4‹Š\r8Çn3i£š!a\0Ø€°@Pž9GL¤;~¶èS£ˆIŠŒèÎ*\nñ Ô’ô ãÖ®,6%,U>ñŽc}{Î*­p&L[Î?c)gZ¨…0çó%…kk©ƒo”>¢•³{Dl\"í¸|	1ëðÇ`Åù\nl4ˆòÿÔ©\nÊ£ÇøFû[†ÆT\0PÅ°nó*/¸mÚÃÝ‰°,ÝžÍµMb^ñã0Ì60+Œ0³IÐÞ §ÃÌËŽ£‘ŒØ^U6<¡b\n9uÃÏÔMÌZQ6HÊaL07iX@!ŠbŒò%ŠH¤…ÁÎ–º¨àÌ¾\r¸Z^¼¶+µÿÓ<	+{v412É7®3oj,|35Œ=×þ?É†VØx-@!¹o“ÄæúiŽZ€Ç0î_¡di!½”ìkSÊ{O©ý@¨5\nÔ8dQ\$-F)¥¥A+R‡AK©•6êŸT*Àª„æªÕj¯\nÅY«RzóO tMéÅ9œcv_\rú23³ó`mÏ­1mðÉ½ƒ8GB…&]J‘„¼€Ñ’0ÊN&…\0´Gpqˆ€RJ‹22AÌ†âlJ	ÉòNa¥´æŠG\0vzÅP0“¢uŒ„Le¢hÂxÚr¦DE=8\$BÃÃï’ïdýúMÉ€a@pWÇ’*MZ*†Æ!ƒ²p£e˜þra¥&\nÉç6V€U‘Âùô\0žÂ¢d1Lüž©DÊ:5;.˜\$ ÈHq18lôŽJ™DùÁa‚…L»6ü\0F±þR€§:BIòTá½ÎØ_S?ðñ½À@‚¤h'ÊÐ£8xƒ-O¡J°‘šâNÍ1>SoÜ‹°vo¢èO	À€*…\0ˆB EeÔl\"P˜i	I	ç¯\$v·‘ka\n¼aŠ%bzÙá>(¸81äEåÀisT8rŠQÀRÄ\$ò…_Z”ÊL[¨é!z–˜²brORA\n¯!Vh n©Š­,#øÃLá˜nýø±†L+ao½ÅW\"ØÒaf‘ä‘?4^ŸC\$æ|7v’§¨T`è\0 ¬Bß¢¯Pèß#Y*Pâ2‹vF3F‚°“]l#Œ£Ù;>VQ‚\r\$8Í¯AÉÑ‹1©>Õ±à©ž5n Á‘fÖ·ÜR•\\qZ­\\éÒCZA¤2‡{gË±qˆØaˆÓ³P˜Û\\[À’ÝwfË‹ê›\r§²(†µÓK¨Jü˜:xì4Ò¢k0*^6ª’­îì¿_p\n>Nl¨À·Ò+Mè\nÏ€ßU@ÞtŒu…\$çE„G\$âIq0K+éf…@¨BH ¾ ×?+#HppðVÂ‡#NX”çDË=.°^ZWY£\\Fu+Lt“M:ï:Îe–F\$²_ÃºÇ&“  Ì{Ó(.+ÁØcC\r‘ì;ùxf‹&dDr}‡5xŸ 3žÔJq/³Aã,òrºñ“™m´”äfG–N~.ÊŸ)g‡œŒq9×6gwðn>z1YòÂè\\šŠ1R4A¼;‘w©3+ËîI89Ø˜ôÑMC†ÜâEL²Vàa3HŽd¬_j+åWW\"`Ã(bUú76“¸S	½ÿÍM˜„4àæR=kˆ“\r86R/		4a‹2úÁíp‡^p´†]5rêã¬õ¥›\\ÄNB~àÇoz´NSr2Žß\\94¬n7¨y‘¨'wO{\"`khAìÆïc×x¶Jƒ{/Ò][i…Zqf4v\0fì+4fâa†@äÇöª¿n•:|Æø,¦zªØq’øÆÂy¸º·y½ôjB8:ØXHa\rl‚:+y¢÷¥ÈÈhºtÁM*Eµ†»VTD÷ëHa·Ü'¦¶.Ÿ»ME¯ãTuZçÃRWTr8Üu\r»Â+érÉvn¤ï·j¸³pîâö»ŸmÝ¼åÅkÜO RÁæ5æÓ{’±öáÅùƒ(=€à°†WÐÞ-ãü¼n<fb1õ‡¿›ãDƒ+÷àÝN°p/;|(‰Þô(×ƒ^Ž¹ç/xXÞ«Ñw^ÃétBñ^z1—Âüó«!f¼Ñ9ö²’ª‹C™G ¼õÝ!Øžaõ^f»·ëd¦ƒÇ h·»Ôlÿá@CœG<¶âO\$,•«éŸó¶OÐQt4×úg|Ñ·áÞòÀJ’Ì”}kwêöRßv¬ ¬º:íÏ\\á0².ÜôQ\0ã\nöÎ¬ÔÃ+–~¾¬&`Fî¬íP.ÝŽ£\0¢q°:ì%ˆÿ+&,Nbõ#«l(2¢Â¦&ÁBŒFçðY«F>…NÊ`¨£nJ¦¶š¯002­K#\0ŽÐÕ ðHõë´Z'j,&2Z°¦¨Šú2Eÿ§\n«aÐb‚tç¦Â.Î4l#FâïìàD¨&‚\rÏÍð¤Ÿ ËAU‚]\n.\$Opë	Žtô¯\\ÙÐó0øFÐÄ¡Põm¾^°<­P5-ÓPý0²—nzÃª*eíëìe0­ÐàqF“Î÷N¾«ûÚîÈ­qQã6¨+÷ÀÎ¿À¨ åí\0Ûì6KgÉ«Eñ†E/Zá,£„L_Q2' 1ÀÐH0‹ƒ }â2¥LHgR]jŠ *üÞÅ Q,¢ÇªùBFêîn ¢ ðŽvFæVs\"\"V¼`0nV2ˆ4\rœ1E”Iå@6\nõ 1êˆ#BíÌÃåÖ*HT¬ñÚó'\$' †=@Øi|\r&P\"ÀÞCF›PÔ?i†õ‘¼1@ZebrÉø‡d\0ˆCzŠ8\n€Œ p%Pèÿ\0ìÞñ-ÖÞÊ\nÓÉmÖì¢ø'ƒÈÓ¯4'\"23¢<\$DR‚N%#0W¯úFOäFÐN€òH#äâ/\$£(\n¢¦¹@À€Ü\rc¬2p~ÍHw'ômƒ\$/Ö\n†M«¨Ež(ÂôMds'+@ž‡ˆåé”FÎ6Ðª´{ ‚7¯(‘Ú[PèÐâ·1ŽÐ.m(Ê¬6ßcj7b1‰z\rè&Å“áK§1ÒŒßÑÌ@Ä08„3àÊyÓD*b¢¹ É5³N9Ð§äx@œ&¾03)4ïîâëb›ŠäÂêr'î|úk°°¨è&0#„˜ÃG+’†±ÀÂddeÓhµf¶0-àã3-ò¹\$c(¾¥ç7ïî©mRFCÒõŽ¼Âêžµ³E+qoÌ¨6;\$làDh‘ñËlwÒŠ";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¢ Ò/!àÒÂ¸+ËMc\"1Ic²à)	ìü\r)¤[¥cÂ1¿P\$T80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÆìBpÆQ¢ð\nšê0BÃ1TÏËÌè˜7Œðšp8&j(Ü2 Lèx–\r Ì„C@è:˜t…ã½4)Je9ËÀÎÑ ñ!.à^9OÜ»HãØ0ÃXD	#hàÊËˆxŒ!ò¢§KŽ8Þ28B\nb‹ü¹¬ Ë&=Œèƒ%Dr²šIˆdè&ØãJ\\”=Ï àòTCÆòÜÍÆë²,˜ØšKû@Ö+©ÀÜÙ3¡-7Úƒ B\rZ3²~-ÝP˜Ò:á/\"a&¥ƒ\nC-±Lèˆ2ŒØÐØ­Ëèë1ZV£¢# #4À#;É@¼˜JÐKºò€°î’ñuL;Vò5pŒÞÿ)ƒ£ú€ŒêCFàBé¨ë˜*ÐJeƒbmxÂ­]héYÁ\0ã“ŽCÎ‚¬nFz9¹ö«KvÜCMÈÁNñtò[…ßmm#*‹ŠíØ*¾Ç—–0wJ¸°  Ý7ƒ.›˜W#†~Îˆ£Ç,9iBìö¹WÄÏtõÃ\rôèÐ²¹SÚdqÓbÐX(Ì3\r‹Û,Ï ‰Žj*\ríÅ<ÁÍ\0ê1ªã˜æ3(ce\0úŽÊŽP0l‚SÉÊaJz!Šbdt@A ÀãHÄÞÁ«/)Òp3/\n*«üýë4m?VJA(f„„4G³šH¦)è‡%\0B¸v:çmC¤ÀÂþÉ_aÔž„ÐÂVI™ƒáÌ;—…Xƒ‚E</µE‚È‚’RŠYL) î§\n[ºT\n‰RåLªJªU‡ŒßE`¬•¢¶W\né^.¥~°VDK¡¡c¬“âù_9ZPÉC.¥£Cs‘zA”152pÎ¹.Peâ0­L…¡	ˆGyÌ‘¼:ñ„1sp…ÔA	Œç\rŸ±ÓÜ\n\n“ÞM(U¦Çr›Šól#aÁ9+8ìN“ú[\$ô#‚hMŠ)G#È¼’¯sZ‘Êk–Œ/­\n’ÇèVHâ14¶¢ñÈ2Ã'¡\$‹‡“d‹ƒJÈ_ehÐ†åqÎIäle`­hG‚9SçÔ˜Æó–\\È)ÒPßAÒ°CQC\n<)…I.nZyE<´*–’•ˆ9E ä¨wLbä‘D%\$¾\\ÉD”±dûü;„¸…¤¤\\\\*I¤¡°æl%ù+0'\rç¨úÃ:Ìl\$¹\n›²X‚ P#“ó«¦IlÏ'!ÈªêH<€Jµf‚Nâ‚N0–ÕÂ¸ÙÍ<=çèß3V>X\naö TUC³	:´¡ÿK²}©´°ÜÓRâeÄ« C9×”«‘¼”ç)H@uu”˜VrL%µk?'g@ã\r‹/l•Ü†BÊL%Pq‰èŽ¹^V˜¹34%U·C\nÝ§ºsÎÒY˜\nÉ,\\ì\0¬DÞ˜”y2§I %UvÜŒTA\rÀ(+X¦&¡ÉaRQEþÇ)I`P	ˆ© ð^ÒñŠ†ÙÛÒþ® psE·0únA©Ë¿2KHé#;\$–Éx\nl¤†@\\É™ü\nnë—³¶yeƒÇêÜHóÂ\rØeéP2®pÊºH9\n—L»óc0oMÊòÌbÅ€N‘–ñ†ðàÞiþ4³EVÜßI•¶¦lyi«0ÜLPog8R°/òê( k«L@AM^h‡^-ÅÕiQá‹EäÈì³PŒýLRpÅ\\2`ÞAÞa'eä çºpŠNã\n½oæÉ9ó¯#‘ž!GA*@‚ÂCbl„È§;Y‡ZCƒ›»¤ô#±a2hÃeb­ó-²‘5Áv52™|°5‘)Z]fE²<BÄ´ÙÀtz,@/ƒDQ0‰+“`'B=4A‘ÑEG?š­‹iòîµº:˜â@•èzqdãC¿Ý4OX&tÒúdÅìý˜´°-ÈÚ·D“‹jcŸýNgL§çâV pw­kÙ\$·2\\‡äúõ0•S¢·´,ñ^™„âà=U‚Éë&ô®–“â¸ˆ\"Š„Ü‰£bjèÓ¹ÑÕÛ`·ÚÄ‚	-&I†pZËaâ\"½¾3{¹3Åd¼[†Cys‰Àœ”½™š#IG’Xz†hÃ–àÚA»ˆ­·k+9Z”«ìÍWþ ä¸•:*\\W¾s@Lä2)¿…KÆy’òæ„·–êã¤¹É”ç|XÖWÂ¢­IiëÇ¡/6`Œp} ¢µ(½ÏËÚgn<þ»KM«FwÒ:Q,45n×¡¤à„ÈíSb—û—™[a¹î‘OP!rëþÔ™ƒ\n©‡\\/:®Óƒ1EAÑyØ`ã¿<æÂdÍñšÿ]+å’Àòz‘ÉD=òZÂsRµÑy†ò>wÅ®}P\$Û¨u^NÄxÎ1Æ¯©(¾±þoSì}_žÒ‹IWð‚¡©Ñ>–ëE²nlæEIZ/NçÍî½>£, 'áñmy¦±¦C<+{æg½k¬/Äú:IÝ„:`K)n:þêÄ¡>5ù¨GèTäÏõï¡Ü½Oð·kúûO@ÿ&PéZ+Ä¼Œ†¦‚ì}OÖ*ï‚¡> î ÈÏ§£\0¨ÊÃ,\$Â²+ QÃ\\\rÁŠc®GâîÂÄÜjlÄP [+€¯ïôÕæÃcJ¿eäìC¶Áì¬ŒHÂÊ—C:´ÅÐb*”þïxô0„¾ðˆiïØõÏÜ¯ð’¿Öc/ˆÿð`ÊÅÊ¾°†¿&jÉåiÂènZæí…Ì¢]PÄ–ÆÖ­†ÊÀ\$Bl÷B”fåˆ:Ò#Á\rÌ¤p°ôK®6*ë²:@ÌaDC²iB~Zfr:cªD£†ÝèÂm†jqï’[Ïhý¯ó,…ä”öÖõ1,È‘0÷P­v&ZA%¿Ü³qHIG\0004‚[bÊ§¶FEb†<‚E‚òf„nÆÊ\n!„q3	Ñ6'±‹å1–ÿÏl¯ñ¢Zqq•ŒçïC#Ý ÇbqftÉÁUÐâøÈ{ð°H ƒpî÷…àEqÓqî\ræ`¢¨°Òõ£ôØRÅ\rÑïPE,O ‘âèm.~ÄÒM'‡á!DtEEu\r°¿`ªF)ËR\nâîpRFM²M\".ãðí%RHË\$k\$ïþ' ƒçR»ÑGc:\n\n~C< M¼nDú®Z?E<¸F	JúŽà–”JC)¯´±fyË`uåìY#\"&Åü@©(/êo(>?BÓJÔ:Ef6Ë2\$J×)Ôÿ®Ñ<”ã-*Äÿq.Ïœ/'¾KÀØi®n@ÖÜcp¯üPeÔ&ˆxNäC¨Ä\rªÔ+C&åÀ@\n ¨ÀZ,\$åÂªí`Y\0ä”¥}8Ö­o4¢LùCæ¤ÓRÔ‡h#Ë²\$gXZc#ˆ2t#(ÂÜlÄª¹îÌ<#4g.¥1b>ÄC%ÏwŽ¶©ÀcjŒ£‚,œŠüqÎbzN&š/€&¤boäþ)CÐ?¬DY\n|âƒŠNŽÑ<C^lZNß\n®q’Óê2³îâÓ(ÓGw?ª cPªÁËpo	?ðÆõÎ3@c–7ãh6Ã&|Ì<k¬Ž‚B¤~\\Ð¶[\$lf4øêÐé‹FaÔD;´ôfñE\$cEk /lX;#¤’†¬ÞÇÔMìûäl´úé 	àáCÒøBø½Ã¢aBÏ‚uëLBc:sòáFÞ\$,ä0\"úøçD¦î@€›JÃJaHR:1Š»qËd¯,fB:ãd€WB†£È @	\0@š	 t\n`¦";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)ø´@%9¨í*I.’Z¤3¹Â{“AZ(š˜ÂTq\0(`1ÆƒQ°Üp9Œ¯ðXi\$fi'BÝãðûæ2’•,l±Æ„~C>Ò4P·üT!ÕHæˆkš‚®hRðóHbúˆ°šÊ4ø½i6FFc{Y”…3¦-j´rÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Ü¹”)#d¡µîÃ ŒÀ©),zn™¥LÓŠÖ®ém&êÜ0¸NÄ.„A%Â\noÒ7ðd\r«‹’”ÂŒC8¡”h…*ôš¨ªhéZ¨]9kcFhÉ0¦:î2¢FHÈ1s ©SŒÑ¯*in‚²hÙÉ‰9!©ôL«.™Hµ—hé¡\rË,	Á°²dÄ¦«šë3H¡(¤J’XãD’ÂØí4ÆNì()|Œ’‰€¿F³Úí†‰¦Ð¹t™ÒŠ#Œšë\nÇ1Pqsåšã,îJšSæ„\në³î\rHhR±Ìæ»ÉÔ‚„-rOB°Í»Ñ,;´¨×\$ý-ÊhÊ¾¬§ðúÀØ­:ï+¸hÉ<æ%¶ŠPÀ‘éQd RRÎƒÀ9£0z\r è8aÐ^Žø(\\0ŒƒlV2ŽApÞ9áxÊ7bCÃô7cHßŠO˜Ãˆ£¥ö/ÀCÜ5„Að’6ŽpÛ‰Žà^0‡Ë{å—¿ƒxÈù¾£›È)Š\"`Òý.h•&Hv³QÛŽC  VÉ‹„Á-”³M0äi7÷DqEÂ19 L&K<e§ÒæƒrìÚ²5hR×k«AÞ.ˆKíIÒjîíNôÛï›ÃT½ÈB2MC+º}¦#3ýZhq¢4ÒêÖŒ’CÉiÎÅR…(5,Ð|´˜Â;STN\"_#ê6\0ì0ƒ¨Ë\$íZE`R&<Y¢C)¥Ç0—CÅ-àWÎ•H8(ÍßB‘ÛÍh•V¬ák\$º«†¡Ñ´‡(ÎRZÅFDr2M©ª{ŸR·KýE)q½KF]®#uãf=<ƒ˜ÆÉ‘CA%D°ë=ÂLFI)‡)mTE¤Ò˜ƒ‚jI­²µ”tßŠÉ%G\0Ø#dÕÜ›©kM@Ð©ÆÜFÞéÈ]¦¹1`áiOS\r#((8X`øÐydŒŸ9\"Jª^L)éD˜\"2+N\nP@Ïiì#\\ŒÍ±-mfí·CH	Él«…]\"žqTIea&»\0äŽéßcç7†`Ì[E*‹‘R@ÞyÃk& €:±€êÃña™×‚\0ØÃ:+`°ù‡(öC8aE`‚I·Öƒ©úÌ—3¦†¡œG*))ª¢¬Â˜RÑE¥¦\\J—9‡k|ç˜röVXƒ%Hð¯B³ˆ›n…p°å›+Q1 ÆéxõäAP#Ü81bP§£±\nÊ )ˆ˜\\©œMŠøº‘…Lƒ!¸z¼!éÇ]Ë1.éšº!0ƒ(á40‡3ôDõaÝ‡³°Ê€i_’W¯Uî¾WÚý_ì°PîÁØKa¬=ˆ±6*ÅØËìu\0002D™ ldÌ¡•2Æ\\Ì“4fÀœ†tÏ)`a\rg‘¡ž†Cs0@‰ä ÍÈ°”–¤50y§”EFTDpÑså†O\$)|`S9Ä‚ÅTéôa‰‰×œèE-!‰Òñ¦2e5EA&ä‰’ûtKr€¡¡´Lù!4[\0 ¸IÚªv¥™ÎP©RtºDL§[’„”ªãÊE˜Sfct9`”5*ILâ&xÓ)Â½B•6áu{˜¦°–ã‘RÝS¤tE±T'“‰)ùÌ«0àÙÖ¦À.exÐei¹åÖ´™±G	\$X<à@K;<ÎÅŸævð _ÅÛO`@ƒo\r € Ñs>ãŽC³ãæOp’–›ªÆ¯ž›Ò¯wœãbî’ÄT_@'…0¨VôZ6VÅ¥^{Ín!	S—5ÕÛá|¯Í¬›Ö‘9,‹IR­¹¬:ö,–«UBJ­'6Iª<ršq‚ã‹Hí\"Þ@­Ìh·Ïü7GÆZØ@ ^Áˆ4†p@ÐeÏ=§ö/`Œ†2¸ÒQ–0÷cMn…Ò\"ì0ñ°ÕÄO¦%¡ÃB¥*D=[Šrð8Ñ”BG¢ŸrØÍŒ¾Ø^:Ìk¢©\"U~FÖãäÊV¹jU\\ãJk¤ÂhC ‡ØSlóó*¯×<ªS\r%E—‚Eå\$9i¡DYÂ.-bÑô„(Ž¨[‘›fp/ú°ZÊJ/B¨0ubÂ	\\ÍmÃ]R·àòd#ÅAÊ¹€îc%EŠÐk®šK\"~º,ºòëåŒ¯ |Ót§ßÓÅ¡£t¾„F‘± ÕÐID{azáH2²ÐÒÿÃ£\rËˆ´Mµ˜\\Õ+\$×Ì\$\0[X«\"›ÛYd¸\$™ÖIS=‰i‡tïQ '›ÌéÑ*Àß¬°/2ÕjkÙz)ç°{mh 4‡§nîp“.Ü)†SÜÏÐdÓË{Pß^‚Â”¶yfBÍ0,'™ùa¥ÚqPÊÎÏ`eï)N™ª›×.œBó<_	ñÄ¦‰ÁF±˜\"†€”\$“ôÔžg!ûaX¢˜†­ž€`’C±íæZu”/;ª½ÕhÔ‘ã\\±xxÛ—¦ö=Õ±MxÝÌ…èÛ áTòßn-Cª–Ç@5‰¢UN“b•N„›åÄ2&¤dRÁÓã¬xkŸ'x7‰Ã½‰/!_ ×s^Ú¹Rº«Çkô?ÔlÏ…6O„¨C	\0‚æs3ãŒ—Áå\r÷ûÍËšçª-å¦Nææ×,ƒ·o ¼Æ·ÛT¨‰j\n…b?µõÖ!ä·èn¶ç¤Ú©]+âöqÖŽÀÖKó}ùíÔ\0‘¡øà.Ì0\rt”ZÆ+Âý¨*„GRÅä€†èW¡pþ¯îüˆÿoÎÿÏÕ\0,éâÀ„I\0ïÈy…©£¨´hd,h‹¨]Â¨°P.FA(ð4ÿ*¯ÂÅ !Â:‰L¢\$ë­–ªåºOpbq0fœé„:ðnÐroü¢‚Q`ÎSDî(0ˆí0pwdk@hFv+¢â1¢B%æª ÂX‚á¢'\"ö'‡Ü^\r.ýÄ%°Ä&\"Xù°ÎN /çÞ›\"†ýùÄxþ	\röH.ŽMðÒN\"á	Ö;D—BýÄÿK\n\$ÄŠëåÌánÒ&¸›¤ùcTTn„.¤¤*GDKLù…~êï\0Vîßìª›ð°\n[ÌLšEÔF„ö\$í0\"R&-AÞ:ÆêÌ‘6Ìë<.q\$ÙN‘ôâØSvm.€„N`áãpâ%º|Q¦NQ‡üè†Ù¢¨/°*ýñÅFòè±Ì,QÐÙ-€Ï²mìîÍÄê9¨¦wâEXðÞå‹@šéŽNBŸ¥RD®Ú##|[Ž”ÁêŠJ25r*.šÎdÎLò—Èœë¢@Ñ¬(\$,ú…”é\"~,PKÑÔ©ŽP\$Î–(.Žr\"ØÄ|/ÀPCÚ³ÀRÎÒ2ÏLèMZŠízÖ*‡Mia¡(eºñªåQÐ˜d<¯æ²…'ÜÕƒVS 6RñäÁ1ë)Ò¸ÏÁ+ò¦ýÆÍ\"@š(c)-f\$1•-¯\\†å1mLåÍ¡B‹Ò÷2×,BY%µðz*“2Ù65¬:	QœBq½-0	òÚþÁ#1©1C\rpv\$³ó¤2p‘p-»-F³3²‘3ó	4+=1¤\r4³#5ûé²,r¥5³3-ŒÉâ„LîÔÊj©RÑ¡\0zh°/\nŒ\nWÓ–ó›%R×:¤í)®ÖÊ“±*Nc^.rhRBÀTq<#ê€œÒS*Å^FŠÖ™\"ìQ1òS+¡\nœeÞCÂ´™l\"8ƒ©'Q8G=G5“Ü-„éNê3í!çâœr¡A…\n¬ç&ˆ‡µ)ç>	‚\$äîu\röc¡;³Žl3Ã:ò&;T½g·nÚOóQ¸èæÉÎÂVìÿ­5A'‰!çäçÌ»íµ5‰;S^˜¢æÌTŠçæÀÎs./2•.R¯Iî{JRç(4•<¬8¥Œ8ÓÌö·Hô¦Ð´ÇB#†5”ª¬2ãM4ÄôÇÄU‡IMóI¨z§m¨’78*Ã	r:A4ÅG/ßÕN´ÚèOML¦ÑQ4ý(,ìÊ´°Rg!H\"Ç%¤6çÂÄèKúR+8ÿ­ÊLî ›^òÄuH“rk¯=òÁN2ç´¡U¯923XS]\0’³U“IUÄW4Á.ÂçPÓÁôB–yëõLÓXÇ.§¼Cµ’ Ç}Y‡ÍMuBoË7O<mÁ\$.ó\ntâZ®%WM²\0AV‡PxÌôZ.º*HzµADãJôÓ/•É,BþöeÛ]ŽTO8n:Zuèªäg_`UBlâ{Õæ¯–:ñO5yhAYæŸ`L¹b°Ö(ïö,u¨iÂocÕÞªÔMbi‹^Õñ%¥9Ô°u4ùPt àHæŠ%X³†ïÕdñ-h\"èî.ö(³›_B¢ýdýhÂð-³Wb§iŽàVîåiÉ,(9gÔuhœïhFÐû‹%iîúñ\rä°›QTÔ‡od°¥¤¯v“VS¸ïË4°•åai2ö1jbIåœJ–ñbVõi5<Öþò”RªR°‡µ|ÙµoUîŽys¨WÆ¸1Qg6PÕÐÿïÖ-æñ[êy63Iw=R¯tSqWéµ&WM)QT‚aTÉ‹u“GrPAe=jFDGZ®L 3~¬E«iv°°ž‰ìa‚.@\0è¢0\njD<wž?7¥0ógo²Øþ3SÉœ—bÁ”™c0\r{ó|&wÆRW¹us)ƒ¶@†€ä\r€W:ÂšTdÕ ¢e NÉÂ6ôév/—jTw|@Ìv¥—¤v Ä¦ŒZ\n ¨ÀZ\0@b`ÆgDVö|ˆh—·‚A7¼ûi¤il˜@{8E`×núÊ°ûþØTáT;q“l/8`ï&—Öi&±€˜å\nNè€ê4.¯ÂVŠ1¶è±ú	¸8ÀóE´2Ù©¹ÔŠ²ôcd\$‡XÎmÂsoùÌÀ5’¨4­	 ã]að“=€A`XkVTTÙ®cõà*aáÀ˜Æ€E³\nXaãÈ?\0yÄó-åEä¦r¨Œèx–m’SJ±<ë\"i@ãIy&Š…’ÅšÚ(BO\nÖÑÙn\$^FÙG%™%¹)“ó›¶”Ö¢Ž\n„=Ãä<7­‚+´\rààÜ&âÊ	”î#>3qVôÑK±^yezIÜm9PRÈ¸qÒ\0ßçrP\0áŠ‹eÍ›9·%î¦~-žXÂÐï¯«,›G7ŽÅD@¬ Æ ê\r¹¾3TÚ}Be‡2³ËIŸqqxU}y1]‹d å1f\\øŠ²(&ÒÄ<z±*¨§žçÐÆx„ï®ÈJ­^¿M*ÑÙG¡Ä‡&™Y‹C•aÖW`¶[oV^²6c…-\nG™O£«6t…4‹ñ^QáNA )!9§Ä\n ";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸ì2;’Ù'ã˜Öa•-`ò8 QˆF<ã˜Ø0B\"`­?ˆ³Œ0¡¢Ê“½ƒÊKª`9.œÆã(Þ6Œ££2ô I˜ÛŠcÊ³\r¨sþžŽ@P ÏC%l6ŸÀPÕ\$hÂÛ­±cð4b`9¸œX*NLÝ´³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´G¹A\0ÉÅ‚ÐÞú½ŽË%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\XŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘%ÈéÍ¶PË\"êÖ„L9µ˜éÐCê6‰ãÆ:ÇvPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒY—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼÷ô¸Ž‰²<ÆdnÓxÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔJ'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„X;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:ŒqÐæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3Ž‰Ñ{`\riÈ@!ŠbŒÅ;DÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4J‰ªSÁ¸þ–³ÊxÃßO0H¬¶Rh~C™û80’’WH pFÌ;‘5êUÃ€ic’\0'ð@ T…Pê%E¨Õ¤T˜rR¡ÉK©–²Na¡TqQ\$ªuRªÕkŸVLI[+…t¯òõc­ü¾vJÂC“ÎbP…ë†•>ÚØâ³'H†§,ƒÉD&¤Üœ¢R^KÙ}3òžv8çQØNAˆ	g4Ó_ÁÛ2Å1 ÈèBªbôéH°õ#El<à€çà»šg“­JbSBá›Ç„~N4…~ç¬–’òbóàìÁç\"B?iJ¼<\0G@^­x+!‘N%!\$…‡“<³ƒJõ4l•aèÔm\r[, ¬‚\0Ì~OàA¨ÿšÀÐþƒ XSØÚ¶·ÆIIø<ïò“ÄÀ‡ÑP	áL*,å¡4•™å€´8P—ó‚N”š“Z#‘¹ÆRP@f.aÔâˆÐÊ§[HièM îÁg„†¼Ã‚½‹˜ X2wò˜bˆ°F\n@àÎgÎ¬›%XóºxÄ®¥\0PC¡=I0ÖOÈ„Á-DLäc“\$\0PO	À€*…\0ˆB E¬5Œ\"P˜kJì-§ †0fÙë“•®è’«ÂJ‹Z©@EY¡é\0–ˆñ<ˆòcÐ~\rS/\"_1ËdIÐº(›®¸µcòneÍ‘gZšIHDrn¹Ê½\$ð+%°P¹É|í{µmøù¸–çn“C•]kJ†øZÃ{Ö9^=\"\nb@R6V!¥³‡HìŒiÿª¤X§¥tŽ0P	üÊ{#ä™N±	²L#‚Pnõê	áŠ4¤¶~\\Ù0«éô*ÒapiHì!¤pàû±8fÈ2VÉlÉƒ´2Åú¢ãÏ\\6Lçü½¼,½LPeéh7³¥ÉL	ƒEŒi „JÞp‘Ë.¸·†CòªŠ'ë—Þ»rÃSR®«‹ê²#Xaæ¥ðãåšÑòYÿKGþ9+GílC#n1²Œ¬šð B/±%­ÄJHäúºÈµh[×Q ’æFKØmqµ°¨C	\0‚uáÃTpXá\ró×ºTJBh>‡vJ—üA×¨/+ËìÌÙÀÖ¿ÌÄ‰0šcJ”	@…kn—Ða_6(8è4Ðu{ö¾+;Ü¾ò•IÀ¸ê\rEµ\$½Ôð{,”›^ui9¨‡XÔœau©lÔ'³QÁutî¾&ä…Àì)œ\njõÖ76œ‰edSlÙnX‘Ôªa)—š˜ø©ùDý×ÝœÑÚÓuìi¹äÆñÐgÃzm=Í»¶¾ÙÑ§³o=ÎcK?!Ü†Iº*[¼:Úk\$á‰S¿^I”¸:M‰Ä{%+J§'SþºÊ‘GWDÌx/3âÂäÄx‡`r²œx‘éF…üÅH\"=LtTI‹Rª”@Ò½úôD¡!\nŒ1f’ÖQÆB­(Ã’^zrÃ±åI%/þMÎèy=d»P¦Õºú+½åhñà)CÙzëv^E9{vxnä(¡%8¢ÿö’-l’Vï=îÿb®ëÚ¶­¶ïL3ÂØ/Øm÷ƒ¯-2:¢€‰H¿CÁ¿-ÊHÓUJdiœh”)&A\\žÎ¯¤†PØ‰Busƒ„oÖ†ÅÖ(öƒD¸°«Úâo°<NÃïhóÎb¯Ê+³	r°2Xä\n|ËµWøü±„-¯’únSêÚø^ÇIÏo&¦Ý¹^ü|pûv³î÷oƒÜžüþÚx¢£ü¾³´ý?Ø%OÎýïøCìî?\$tYát\$¯¬ n@”ABÕi{\0\ràÛMŒ¸Íh?ÉûÈ\0dV.Ð ¶\0Ø(ÖKŒÙ1\0å¸ÿð=ÐBÚ\\à-‹ÍºÍÈLˆ«t8Ïúïû'íê©,a°%L†¤PxÕônI„äll\ràÔ]ÄB\"Én'ð°®¦tW`êÅvY«ð&d>~ãb]Çî„F{âf^°¶ÐØRP¼®ëŒØú•i\0³e.¯Ä~ìf*ên#fÜüDBYê*\"Èú/`@B‚²”\"O	PˆÈìrLÜ&Æï¬x¾ËY¢³æÄŒL`#)FìÑK¯èðPƒ…ÇÍØÿazY ò·ÅÀÄ±b;Ò(B‰‘[øÍÇÃ—\0ñqˆŸQ~îÐ¢\"o\$ê£ª(Š§¢†2gNqC—±˜o\0ÂêDÎ8fSäa`–\$Á|Yï<Ä‰*A	‚'P˜ c¤”&?,Ë/æÁð~þÌÇQñqPñqíOÏéTñl`8²f\0Ò¸gõ0\rå»+~Æ^k²ÍÑ´2[…Öö'4\$¦”dD¬\rbzA1ôþ¯\$\nd%&¼ÿ1o\nOá&\"s&q‘ .Ìñ\$ã'Tpòk#e…%s#&Y%±]&ø¡(iU¬I'ÅÎaÒ(u&N‚æÉ’–ûm*’¸Ê\"(Õ’É2ºž²£ŽG!çÁ-\$³+%ÎÉL˜DÁF‘yÃîÎ\$4Î}+ñ÷\nlH¤ºKâ	Q*„·0Œå0Òÿ-rm)Ð4Ëû\"DÔ™PçD>üÃÝg£ÊLÊåö¹¬ß«`[%?ì-4²\"mÝc]4I„”³\\Ì€æà –\$h1…öG@Ø(\$ª\n³DiHn6B(+\$ÏbEbz®³–!³Jìã\"A¯\$#V òssj\r\rI@Ø`Öx@Ös¤å‰ £Œ('¾[B&ÂÃ¤GD*ÂPËê}IÚƒŠ¬€¨ÀZA\"6:ÍÔ—¢\\t±àM¶Ö`ÞªA\n¿5°JÛ“bßÔ©16Ô&IÎ\nï‡V\"¢ª“Â:#è6v§n2`›@`ÌD ¬”áJ\$dJ5î­É8Vb’6F\$/D÷H;1Š'Í™FQ§> §eä«dT@gì@˜\râø:Ô™IÅêÛ­o€8Hš”’ÒÏÅ/‡hs\"Ý”=Kîì‚Ç¦}f&ð”¼0Ø6eiSØï¯­4È0p5cA9è0@Þ¬RL?N£|H;´X1JY±¢Ï*ñ³::RŸ\$À¬ ñŒ¢‡MS®ø¬Zpë\n“\$5CZº-5E€ÂÈ êJ§1PnÚò†z\"fõõ`1€¦A”Úc’1‡1FceKiLtiM+&obBRjP´ëZ²õˆ³C&bä¿{&%DÔ‚K°\nÓ ËÜFb	\0@š	 t\n`¦";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›/bè†;Zä4ŽáŠP ,°Â)ƒ êŽ6ˆHÂŠ°Nè!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`ÖïÀÃP§œZECšA¬Ð›Ê4¦Ì(2B£Z5#Ìœ ÇÂaânÖ£0z\r è8aÐ^Žóh\\ÛFÊ€ä#C8^øÎãÂ7cHÞ7á93#¤Æ/µXÖÂHÚ82ñhÜ:xÂ?ŒÜZ:\r«8É£š)Š\"cÞ—º‹«(¿¢Z\nxÖ0¤I0ô3µ£ Ä´Šh ËI\$ÏÎËŒŽ%}`Pk¬–'\rïÝ|2Sh{ì1&# Úv¨ÃkÛ#RKn¥½f¸‰PØ8£«B\\Xø®c“ˆ0£# Ë,2O\nf„Œ£²£B“Â:‰ýü6²¥R2²€PŒ:ÃXÇ(J‚ÐÈ9µ¬\"é»Jø5¨Ã’x8ˆÒK+¬²b7ß€UM.p Þ6V²ÊXª`.‡ƒe’Ë¢ƒïÖmíH&-C\"nTec¾)5¨=Wšƒe¦×ëHªŸ_Õ^°Œ¹5úo©Ê+Œ1Ê‚¨ì7ÃÎ¦×kc¦º¹.‹²Ó©Âm^Ä\r.®¾`·“ÆDJˆÌ3'J‚^'Œ’ŠMQJ£{\$6¡cË=>£Ð9Žc6\$løõEü°Âù¶¥°N#ªaJ^‹§2‹ãO¥®h†)ŠB0\\V.Ãp÷„246à‘@ì>‹Z:%ò|¢›Ô7C°5Wºn£U‰`Ø«x4úŒ½O\nÐ;-œµÇ )x›\r #’\rŽcº4û£Ä½wòóASdLÉ¡5&ÄÜœsNÉ;'‡òžÓêP*\"å¢XŠŒQÊA_¯*¥ÔË¬EÊtû×(Q	!aŽP¨)7¢}P1¼&ê‰î“Z¸I!&E¼3²Á|J² ¦ô2*ÓôEŠ“·SÇ…¥\"J¹¡?PÉà€ AH\$t“%–Ön{³_¥Ù(•&ÙÉq0&DÐF½Ã°„CI >ñ|£È xMÁ{ŠùQ#ã_	ç|Š±}¥¼QÃš¨\"aäÅ’pÒ}‹A?TAºšC6AC‹	'ÏóÀ‚´ KòSŽÜ1’DhÍ+ó3/D‚“’v¾b2ÍŠ@'…0¨ïÂÔ,\rGaj(Þ¿cŒ°ŠRÈ¬›%éµ9èF*ÐàÁB9¦|`@ØË` hï8#\0MÂ0TŠä,ûƒØOáHf“©L94æ•MÑ&\rfà:±àuCI±`V3ðjÐu,Š¬ëUÿ@”q'ÌÌ84#¦‹_™­Sfµ™3BFG‘)!G¤ô’³\"PnÈòJ¡à™„œFÃk6PõyVÅJ‰4E.0ŸÍÁK-à—„\"ÍBŒz1áÊ?8£¦ß¨!fkMq5*”q¢ô2a½Í®EzFÏ‹ÃÊ¼€/ô¨ˆ1:hD•?—ÖwI²™P…_\$X‹‰½BŠ±\\¤+(”cÉÍ'Òµ×PžÉšµAh÷O¤¨©—8õ*4XrTFf\\1Šªv‘’C0ÐØŸq)oó=R2pC(wVñbË²˜I’‡D×µbL[—°kr\r¸\0 ‡CRÆ«\"ƒv…Üó7\$&áQ¨â‹åÅ£äP‚\\àØ•„+!kÁÐä~u!  ˆl¹³ŒñÉM«¡aÁ3(z/j±ŠEñ¸·3Öx’;Ba*@‚Â@ “-üÍMr\ndd‘ŸœôÙ†áJIºÎ\ríô™«¢øêÁyXufÃ4%Á‡	+Ãæ†\\G‡m^¤kQõ=Çª^¹’ÅA‘ïž æÕ£«Û(çÛr¬UŽ3Å’Ÿc|`(_N3Æ·RáÇW\\Ïæ<Ä†4‚ì„ÃÖÈqèbüblòÍ#Éxß&Ÿ”IÆSm[ æuòážÈÙ%mŽŒP{˜o5;2LZ,²®Y\n0üç’–D Dð7!§¿šBÇímëh‚)”%>ŒÑÄ™ÕéÜ{²¶”Èï¦>­4BšËh—\0E—ôP Ôä|Éj¬„ª3q|eð¤ót9­©@%D°´„â>éêöÂ(A¬¢• Faêü-¼ÞÓ\\`oÒ?êÌÚÝC.6~—GˆøÆW[1QiŽÛ©eÍ)#kƒïŠ²V„ŒŠ/C\$G·ƒ½ë5Ú¶<a€PE/dü—\n\\´vÍÌ9¹YHÔß\n<3ú\"ÐãÃø@t)(;úòKíyvÇPÈÂTXƒÈt{ÜÌv’½„«by¡nH‹ªŠ iË²TXU•'‡kJhŒ%#-XšÐô½‰Ò¬µ}¤BgCÈèåÛ§%@¬^º¶Vå>‘Mžg A‡3®7•ÌºX¦LÔ0‚’`wC²L®Or¡rQ})êMâDôGõýË©÷sËµ09s^åÈùZ’ðÍéÊp®ëQ;¿.ñœÇÂx»?ãyW`ˆ*Æy_]b!|(÷3î&J—@kÎù•,ç¼¥‡qÿ¡ÇÇ5îzYûê\n«å™;K“|ù‡r¨	öSKÒGnýOºñY›¯fŒ{šþ¢ö„Ûz‘îrg»Ï<+ßâ@nµ”ô!>:¡Ô_¿rá^\$øÇ_Ïøn_êÈ¼ÏÂñzŽÚÑ·9¬LÜ5~Î]'X<DŒEËn0ÅX˜gÐA`àwàž@Bª\$°†ëp:-ºÿ„°\r( ¡eÎbh 6‚¤*‚mlekÄL&>\$b˜Ëæýë”ž¡·Ë€fÎ`¸NXº+ŒÒê]+VXkLó/X…ðx>Îèü¯#ˆáNdk¯ÜÐÏè˜Ð‚½Ãê(oÈîÏì¸«ß\nP|û@Ü)hy\n-˜þp”þÊ¯£ï\nä~¾ª›°¼°`Â_‚X]¤ÿN:¥&Ê¨*Rý Ö1€ÞiÃÈ£¯âñïÌ½Oq²ùp·ÿ	+Klx¦ bD j«†˜ËÖ(p˜¾Ç<b&&\rMÖ¾Ï¬õ\"ú5­6BJ\n \rbf\rÆ…\no ïSfÑèñb‡LâýŽZˆ0Æ\r¦¯ãâq?\r%EQ‚- ¨ìp‡\n‘ áÃ1zj#8]ÐUqN¹¥jºâváCê¦ª½K«d|ýnÀ5QÆ\$q¹Ð’æ‘¬˜ºË±ç+ž;Áˆ„7\nrHñ§¹ä_\$ñ»1 £Û ¯ì³x/cb-%cä~¸¨¾/‡çÅ~ôþCO¦ÒÌsl¬]Í!D²*’Dªƒ4ö2?%Ö£ìº§6ø2M\$0û’g\$c4Y¢^ô\$þŸ\"b8òÁãv[á\$ò†}â|azBÂ*\ng¾2©*it2n EÌ­qv÷²E+bç+®Á&2Âã/ƒ+ÌœÏLw+N3'Ë|EàØo:Ùˆ¼ë\n8Š€ê7ê¼%àŒ›§XæEÂ Ch\n ¨ÀZ\0Aâö\rÀÎ/ÖäÒ²ùí'2/\"Éï|õìBø&Ô£O˜Ô¯º0í[3­Ñ-œÏ¢,#4WîyæèYD¨	£ê\r Ì ¬¿ æ½²ö¤kèH'‰7¦tê)Žî±†eŽ-Ó†3‰½/5R\rÐØ¤‚leÀÞ6Ã:É¬†Â4\$&m|èËÈ½.PÌóvJéx¨ÓÊù¥Ž¥.Z3ÖÔ¢xk¶äÌñò3à.ƒ.3c2ê‰@à\$¤l´ É>Ó`9…Y\"ø	&:‡ð?3ˆY.D\rv¬ ¬ê‚x“h˜?%ÉC\"uCiÐ¶ktIÉbYÇÄ3±FÅ\0¬ Æ¤.@Ÿ@cÐo²„¸ ‚-ôle\n\\Ðú,£(“Ð2†¥ÈN6Cöbàê‡¥Â©ô=Ò=>‹‚Fq†Òÿ\$I+¶#„4jèâb";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-q,2ž5ÏZÈû¡¬”¦¬E\$‹+\$’JòÅðz¢Å,mZHQ&EÔ‚A6”€Œ#LtU8²’i’RÚrX\$ŠTf·À´|˜^@­b1'¢ñ\"ÜÈËŠÒÈ_>\rRFÅ‘\nl¸¶ê «ÌqÌ…\"¤„ýúÐfDÅ<ï”¥YÈtx0·£Ê3¡Ð:ƒ€æáxïg…ÃÈ6ÀC(ä\rãÎŒ£u¸<:ãpæ4öðDè6ÐÊ:X¢û¾0ÃXD	#hàå¶èèã|-òìã# én¦(‰ƒK®Ñ1Œë?KMÕjÚšBµ“#\"Ð0|î‹¼³µ‹«Q@%¯ŒÆYÂ1ÆNÙÇó8Ï'ù1 ¢6Ê\\ïZU.\rš<è`Ÿ Œþ‚ÎhyþŒœ,54§(”æ‰ú}D±—²2h	Ú^§²Ú0¯‘ÓÐ\"Xcê6\0ì0ƒ¨Ê’Bø’È¤…#ÊNÄ2n³@¬ììö±*¢¾þÖ3„×±²tfhÉ(&X–ã4Úý¼ìzêÎÕÄÂw\nP•Âm\roÜq(òÐSÖu&NÏ§H&fŽý\rQp,í˜K»RšÆ5|ƒ5ˆjæÍ±xœ\"ÿá‘„XÒÇY°«ž<o+nœeé–S¢±eº+)E•vgTQCíVlRrÍ,5ÝA0Úd^fÅGæ¥èbé‹IL_È@JqP*Oò½žÝdåÅ˜—}ž#v,bí›4f\"øémpJÕû'jd•[4b†½¶#rnÁé8!¼3`ØµKXžGå^¨À¨Î m^äUÄCc9ÁÌ36°@xg@AÌ\0åg(EFˆµpu:à 9‚’ÖQDPIA„0¦‚3ÊG ¸‚1¢ìËYJ5.¥9>½!i-o˜ˆ“ãX‡\nëá†‡˜µ¹‡ä@Éá¬\".ÑcàÎË'5°©Å™¬‰ƒ5è” šC™×GP0î¶X0eÀ4¬ ÉúÁXkc¬•–³VxwZ+Mj­u²¶Öêß\\+r‚õÎwWRìK¸6/ä½²ø_Kñ0žÀÃC`ì0†³‚ÃŽ*Ö‡A¹}´V‰ŸétPè°ŠeLYT‚d¨qÁEV„\$S!Å¬Ì\"™_ìqÅF!\$tÄ›†)A<Ô4!A\0P	B¼å^\\Qüú.†Õ¸C/bù2ŒHLš›X‹kÐy²TlM^c±‘jˆÎc\\ÑS9ïf0è¨Ö	½ŽtøFÄUJ’/zÔ‘£’´Ž‚I!0 2–pÛk	\rÌì°@°ƒ‹r” €3 ÞA\0A—“’Q•ºHa'@íðáC-*P	=¥ú\"Â˜T¡Ph™ÔiÎ®#’9B1Ý¡¢Å`è	3T\$x³˜ÉSK ²|éõ;Æ¢24cÁ’¶!Ù¢Ç†Ì_zuž`³‡2„nàc^õ{†õ¥\nA\0b\r!œ0°™YQÁ9+\0#J(¼0i^Ëe¶Î\nËYÉÖ8\\ô¸º>›“°™'en0¡ÑBè¬Ñ*2O]Äðœ¨P*P@\n\$©²Š|Õ#Ây_(iî%BÀ€«Ì E	öÞûâä“½M¢Å-‘@¯ë7{¤HYYæ¢\\àbªÂ€¯¸Å®K¨2Ž:—f^P¬\0¢ÏÄˆ¼cHŸymÝ7HX‰œ¬ë„td«Òg€j&C±ß{ `´÷ŽtYñÔURSÉM¢ìè…ˆ5BT0bœÁÄØZ±BÄÒÝ/xA·—ÚMßƒÜUO%¾'ü­I1>Foù]‘‚`ß§ËŽØêÏ•KÆ¨É+Zdd( Ê½ÃM²‹7ÓŸkR!†€êkI³JLÛß¢TRäÄ›Š&³‰’ÊÐû‘è\\Jn”-O_rdên¬±·ë@'H\$ñÂ˜iMÌ!Öpá›˜S§,1pÉ2Â[Cˆ¦ÓJ3Ad|}¼ÊOe¬[†º¬ä†Pî¬gdpjzÜƒ8ârFœ¥2C¯™˜=³)º]n€BåI­Šbn&^ÊE8©Î‘­C‘…>»z±/Ñb·¾ß	E¡ÐÉ*áœìFçñU·Byœ´ Ð}ˆšÆ' (ñ”Å;„¯Èd¯¸(kvxg#&HÕƒ]°½P „0+×9Ð¥a ßVN˜p¹›lµ‰7=ÖV<¼a‘‘ÖÁN6Oi¤õ:\rÕ_;9qÆ§¦RòNãéH7+¦ùæUbkDezMãsôUAp	€½wPvëÌoe³]¬v–ùäFUí¥¸ýÔCÜºá7]³»GçäŸ{Ó }\"÷¿um:mûfKíÞÆÏÃc})ŽèMÙ*vi­2ïRé~+ÆnÃÞ<€^K¸uŠ=c²£ßñ½‹¼û/Mäê/¶.¾âDHïwì;'¾ïoÊ ‘ïÍ;\rZ¶³rFId“»£eµèII—N´hS¼÷\\ZJé^,½\"ž©ÃcM?söQ†õq23àÅjÆBœvãL>,Üû§bÌ¡ âPõÅ^‚¯¬rNŽ,†2C&8ÌƒÞzÃCòé*sÄªW‚Õ„¼RD:BãVtd IëªfbŽ£\r@÷Ì²È§š7\rÍ>‘Ï|A£úÚZg‚þðt¤ÌÝÍl„I\$ó/Klç¢×çŒÜ°”1x4ÐŒx£@ó0,kS	ÎXTÌ*Uð¢Ð«®ô£:R¡\0fqŒÈjãÌË„œ³bìžPÅäZƒîÝ,~BÆ®°h&Ð%„©ÐüôBà'JÍK\nª€K¦LEC\rÔqÄJ\$èè)kà¡cÚu#äÂ\"rNA 34UŽ²0aP–æ½l'ÎRÉ¯Š&¨&D\\4ÎµÑ]¬¥P´P»QH‚ìÚ°‘R&±?¬-mšy¦Ù,´ºðm©w‘€tB­‡ïbé#Y±³â g,bT°â+®êd¢,L#äò®×&Vðk\rqÌH‘ÐøÑÔµb­ÍÚ÷,¬óQäðÎãŠyÑªëñó‘ö`ÿ®´ó1â&8O£ÂßðTv+´\"Áä1\$u\"¥qŠo#·#‘#2A°àR5æa*@ùíèO‘!,N*‹Nw¬„..â,Ø3ïp>0LüGˆLB‰§dÞåt¾Œ„*òzlg¹(1'\rã&ñ(JNDÑÐfpÇ)Ç,ð#¡b0¡©á°(Êòm)Bç%2E%r2=bHÞÄ5'WÜÐ©\0oæå\$)‹LfÐØeŒ\\GÐcÏµ%ï0Gµ#™Rc ƒ'0r]Ñ°¤#;¥z²³\"{Röq®Þ<ó“-Ä%M\$Ñ”kä“?0ulÐ£èö|ð	5ŽLå“0åÍ:eŽJ(®PKÇ‚ÄHâ\$\nHŽ\$sŠb¯’„/–CâbpbHäÖÄsC#Ñu:‘õ îË\$ñÂãîBuQ¸à2_%PlÝ‡´cÁogbÄç=ÐßLê-Ìð†fH}lÏ°3=cÚo’’v“ðã“c4âÎç´?\0EŽö-ªnµfªÂHA:ði4j)ï&\nCB3/1¾î\ròµ\rž€ì%2í¦>#]D„éT;'&42p¹2´B{tþcX´'F~DÀjŽáŽ\rBP›4heH5?5T~\"T3aCTjMÐI„ÌÔ2â.JƒÆ\$‘fDÅSy5£Ðµ4RT…1Ä²rÌçLô‘0óF.aMÔòD-aJ÷’¬OÓµ!EjÅH©RÄ±ÍŽ¥@²’‘OZqìQ%«Qðÿ‚éCÛ(5´Ï5RÄo\"ŒB£Ë)8†Bõo gÌSÀ“éBZÂD; è¢F\niš8^:ÕdõG\\+ŽmÃ\"Q–ëwâtðRX\n€Ëµ…ªý~íïš(@†€ä\r€VÈ,Çç«8.éí*ô<³á(@Œ¸&VFÚI¾\rËÐ\n€Œ pºf\n@@Î(NÔÝµ¿k_3Òð/t=µù N±!ÃÍ_m_\nC'‰ØÍ‹÷È\$P\n•+†jÌ ›^ Ì.%µºC±¼tfžÁ²ÊµŒ¡ïI\\&³ë-[sÓ[©á-‘¤1ß0gvëpKYÒdîgê/\"`Ì G§>¥@PÞ‚ƒ9em.Ä\"ßÑþÎsrÔàŸmÇ	iÓæƒÈþ)#Lõ6–Ü•‹`%DŽ¨ÆËŸi–¯RnË1¬·-v«n¿XÂœ11Ø}Ã6Ýkö­&²0d:¥r,u2Ìc‚6÷\r%jEcYÊb#UT&;<V‚V\0ÄW\$ÝëTÁÄ\nj#>ƒ/bŒ¦qÁA=.´@¬ Æ ê\r®	nŠ’öBwLg`*ÊúÒGàÔTÆ‘ËntNâÍ¥\rÖA\rv\$)Qp°Ú<©ÚÍVKrgÈ¥f®gdR5#KlŒ†÷ÕãâPì,peÇË[ç8û–YkBH.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæ¸Ú\"¨\"+I\\Š•Ô²#6Æî|\"Ü¢Êµ(„+är\0Ü7¨¼CUÄðRl·,ÊA\\«'\rí{E­H_*Ñ4èØ©ðP)ŽDXÕÒ\$B\0Tº2º&4\ršR¾BÕ\$žÏ.k{¡Îk=8ÞFá@Ž2ãhËfµN=ÂÞ®}Îß%t\\)Äý“YcÈæû¶‚®«Š±2§,5Í–2ŽOåƒSHr­OTÙe\n£ž!ƒVHýrC\nRR¥BÍ„Áä54BÆåhŽ5)Õ–¼1+%’\\à«I‘‘À•B¤I’qi)ôSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢±^ \rãÎŒ£vÑ<í3äü„OˆÃ³]ú˜¾ÿŒ#pÖÂKNö]Ãpèã|¿¾sò7Œ‹ç˜¢&\r/»\"9n—·0¥‡oMór•3_5LCmDŠa¤RË«†Ô‚SÉý2\"¾X¬ÃW©JwK¹œìPw©Ô”¼ÝG’ÛD5†‘.:º_xðÌ\\\\Ðm6Èn+äÊá/h¶I@ñGGÁzCÕi)*û—Tn›speŸ¼ŽœAþ÷ª#ÞšÀSëM¢pˆÔCu\rÐ`Â¨e+ç›:pRMU:†àÆê{‚líY”è.\ngí@3ŸhBÁ £òJJ¸W0µbE\njtD®”à³÷T°]¢\"ZÇX0¦ß™phà´ð¨à*‘JOmá,\$š^`*.~-%ÎA¸‘ÿ<AÌ1·”PäÊCšyL™?¤‚ƒÝøŒ‹H!¹‡lýC1‹\$šG†ôÝóÕ5®­H»8ëÏŠ¯HÐ½BúlY£¬1\$˜H‡Ôô\nDT‰)Í¡Dy¢S·5é	Y ÙúŸòn’¯M¤>èx]¢ê@BRµUà_|q±I ù	(KÌ<&ÒéÃy(È?oÁÁ²‡F\r\0\$l˜ï/Šä|¿^ayÐhêÉ¤'¬ÅJQÚ`9²\"Ì!ì¥‰nêS’Évõ–g*Ù›Ø.™\"ÚgP,9\0£¶w[™â\rá˜3ÆÄpüÁ^Ë\r_€ ¨Ï(mo!äAÐæCc=áÌ3@ @PÃ:+`°ø‡*(aj+©ô6ÜO¸(`¤¯0¦‚1H6fDGrÐ°`Êø7¤Ò¤‘ÂáNS\">½“…s²†M-­40÷šS4´!2ÈŒ¡áô)ë„ªÞ—&g‰…R8å~€jè®ì]`»µQW{æN«“ž[ã]L¨êê§ªõû,VhÒ^¬¨ÀCbšÈ‡0îÙ\\heÀ4µ\0ÉRkOj-Mªµv²ÖÚèwká’—66ÊÙÛKkOM¹µ7úÝ£vo\ré¾L·\0Ú\\…péÝÅ‡ã\rg‰Êžf!DƒuÀ®n¹¢wbMäDl‘75N¬K‰d.h4¾j¤úÝÍ[3ÉÁq&Qf­™»É®Ÿ…*Žs ((€ R.Íat&)7 ôâYÝÅ>V„üÀ_s¯PÎÊÇD8¾@B£_ßî†Ê&£Ëå:\rüGj.d(vxPÒó%1²ªÆòÎæžûÊ–24¨YS,¥¬:ÃÂº^sq‰¦5NŠèAÞ'O6#åƒ”Þ{”šâ™ÐQ~Nä½^Vëâ\nD˜yîráI‹‡½ˆ+Á\$‡“¸ iq§’1àÜãOÉû\r@8Á0r] € ÚÆÄˆhm €1”7!œO€p¥”à L_)Ž]`‰uj Â˜TBˆFl®Š‘(Õy7Ž½H™Ã¨r»ÈÄ,G‡ÁRç\\’CNt4üƒHg¡Ê'ìÑgC,=!–ûÈÇ‹‘3”%k3ÆPÝEJDq­81k—#5Áì¡¥§`©ÛË\r&žfÒ¸žsÛb-Žõ“½#p\"åŸÓ«YŠÊV3ªÊ°'„à@B€D!P\"€­ú E	‚?²†5BAçR£¨“Ö¬ìdE#D\$&\nƒs.)¾™óÆw²Lª\nR­nÛÍa×¶š2°I~‚™ô|:¨%Ow/I_&<C´M9„Þ}JHJ¨3ŽŠÍ²ïIM~+U\n{8 ŸG”Qwœ³(­ÒšGUÇ/ÖµqÓs¨ˆá¼°yV§ÅÏ>X›ÙºË,æS¢r34d‡\\öîçµýÑdøy95£Ajª¦u9»=füLêéG—j>ßŽ¬N1æÿ¡DÇøYê&Þ¤ü+7=¹©›:ÒDEœ’ƒÌy?Y‡Ø:ú¤JiŒ°?³à–¦¡gÆàë,œôC8höÿßÛ\\BòD+ÝŒP¥IñÇC6w£’íóÉï\r*Âm¾¯®öšëÓ™<äPCÔk´8S\$Ã)ìƒá”2?¬“Ä¤­dÍ”‰)ììE@ÒªôñC#\0P	 ÜÊq ¦m¢Jh±ãìb\r¸ Ïâq£Ô î„dºæcBå§°%È6èÜ5¯\"Îâ‰ÊÁp\"Íë4(é!'êâi.Ö\$r°ŠŠØê4a*©ÖÞÃ»î|êŒÊÎ¨¼­ÞWâÞLœÐ²‚©<Ìè\$	*¢°è’œ‰Ð•Çt8PÄ¼ä\nçìÊÇNxTT,äâg­\"¤°ÐàÆíÚ4X\\Ë\n½¾bÆ¨§@WlŽ`\0Œlª\$™Â¾M¤,qºîjêDõ‚ëoV˜0Òí	Ì]¤Sjè¨¦fM¯ãÏ\"¨¯&IN\n€‚`ëÃÞ\n<`ÞÍ¢‚™€ä>ë>½dèïbÞíI@â%ÂRïÄ”}	n#gÇ.%cr|ñ¢â,½ÐÞÐ±ŽÒ¨0ë€dO¶”Ž8ÈÑÈýŒ’¤‡ÐÕÑ²‘o<­ÎçgäÅkÀÃuŒv¨%î5±Ìû®êyqÖ/ñ®ì1©·‡ˆÊÄ2î‘Ë¬\"¦LÐ©1zñÌ)i	ÒÆŠ}ˆÛ!‰k\0«Áëô+±¡\rÑ‡®¸—OE#np”\n±\"gRÊ1ñ¬r`œî\$«Ð‹Ñ&òC ’u Å;\"Èµ#i 28é@r†ÂŒôâB0…’l„èª½Â‚(b‹R¼û§Û\$ëèoÍ,j´'òÊÚ@Rž2vËê}'1ÒÅd0VŽ6ÂÁ\"éê[r]÷Fm*Ï4mêžÎPÆ°NÆï£-2#î-K¼+Àè–ûDhâš\rŽóO0h‰s(s@,æŽíðµRöªrâKÇb1Ì3ñÜ”pŠz¯¸}bZ\0†=†æ`ÃZN²”Hˆ4½/BÏ(P/!-M^óPÈo'rk62'„±:3/;.í:‰x¨Ó¤Åò‡)“´“¹:;óM:\"`‹ïp»/1Ñ²îSlÉ¶›Hªî2ðœ²õ?¶¨Ã€ýr(Ì0Ç5ñâWÓ± 4=i­@“ÕGœ“3¼œÆî}t#@Ó÷SûäÒ¥1íì†=“2ÞÅ&R«Ø‰1[%~€àÌ(Ø¬JøI&ÇG5izF2¨Ôp¿5Íìˆ,½®/&tPèTw-Te-væQß\$ÏGð„ÞØ´wÔB‘ïJ²ƒH-ç\në¿80‚³@@\n€ò\rˆáÓeß83åh\nb‘ÃIíAŽ»/ófê®äÈ¬S)´+?TûL«ò”fDÔLbÎÇp£AÕ	\"SÓLuDu)eBëóØ{Œ0“³;õRì’ìîõQNøñ—!Ð«AòPã@ãG\0sÆ•i:´:õ+)IBPJGržQSTTSq@t=?5f’	~ÆòíW5]	‰YUDhñ\"üµ–}j ºôÅ³[CtÃ[®n¬Ãzfp’TÎ¬PSÔ'8Oô\r.=pÉ[óÏ]5µÇW•IRÔ)/¥*bâ!]”Ñ]Ð²Þ’‰ZpŒªV}RA7òýS²*ï­)Þ4ë:¯ÿTsÑLUNòµ¨M1õ]ä§7µ)`u}?”%\n–NMÐ°:”1=´5`VG\\Õ0¿e	Ã‹:®“sa®+0Ç‘”Ía©•\0ñGDCb4hbßgSÝV\$ñH¿/¾j& m*4q®îsPØ-çý„’ñrccpù/’PÓæiV~Âè­hi¿h¶lÊ–£\nS˜ÃíOeóNvùóOS1¾Çn\"^¬ëàQl`ƒM ²\n\0Š¾ëé\\RhV×;Ö\rÏlöçdÖ¥cÐ|žuçZî#Bì?h±^NKÑap{!iG?>©ÊÁ0TwráQ×`z–¯PÖz8GyU[NõeÓÁg–JAWe¶\$É½T7—gu¯Q}däñÖoXÖs\0ê§ÏZŸN™ P£ÂpKïWuûZÖa[…¡]|°³|æ}KKÖX7‡TÊõY±1|‘67¢\r7Ö™×¾â%(uax—Ÿ~q2 ìdÄÈ¡cI}8’c·Æœ¸+E‰¸'÷õ}˜“x˜ÉÇ[”*í×^f„qÂæ¾‚ø[u¸{:‰7^©@Ë‘-3\röó(™7êí\\“=w±%`¬‡ˆ5‰™B˜/£‰uÍ¥ƒRtÁW·›—åŠÑ)‰¥ƒzµz÷ÿd˜Š€ƒˆ<÷Ÿx)¤JR&•pÔÐâ©×ú€8Öƒ­„×Õ?‘Y|Iðtƒ{Ž°XÉ|8T„l±¥vƒŸipiÐµ}ÖEŒ÷*’thØ`æ˜ÿ…“7áDVcpðá’Øñƒ¸·Š6±‚4étæ‘•˜GŽõÔëZ8ìËW©C8S	ä¤â)f'ãSNÛv­”ô?{YˆÖ™ŽØ˜Ou‘>ÕKS3‰ÇSƒš89,p§M9o—öq˜#‹Ð×—MvÖAŒÙ™Šy;6â†R]™pÙ±~7µ\rYçvvSi™Gš™ÝC·³€D‘'Ùf™wŽö!v9åAvåmçœyœØ^Iˆ*‹8„9)\nØGj¡‹Æ327•Šò}‘ÙqF‡:E`±M¤ÖW•Ê¿í^THS\$ÂºÑ¤•\0T™§zÚQ“Z@²-ÿ©ë_Z_Ž4¾¬Hø5 ©«£(øêd‚Ð³„O'Ödö7o@îSmµíŠT\nS­taÑ•’\n…¬V‘‚H9\"ã–2ŸcBB'ó†OÔâ4d,ïèßQÇÑ“Â¹®V¹£q“{¬£‹\$Ðö‚B\n`Ø<Æ? èö²[ 9ò¯ÚgUæ€^f‘b²y­{=¨–«-šzB%´˜}S¦¥š\r€VÐ¯t\r`@×Æˆ\"¹\0Úq€ÒÊ(r¢¼ÃÖ<@Úö¨K˜Ùàª\n€Œ pÁ¸DX+Ú½•Cª˜w\\J6ý€&™i›>o7¥ï¦ÕeŠ›QT¯­Õý0é‰Fz£¼Sá¼‘¼Éò)ÛÓ Ža¶tCC÷Wä=w)íp‘ý¿„Wz‹”¬l g ›¸[‰;¹ñ70jYOo²øÜõ\$9Çª&Ö+Át£=ÂÞN»[•êIÃä2‹ä›|M›–n{ä¸§–«_·x±Ò‘jÅ\$gÕ€ï8	¤Ed[ÈBŠ¹&Ê<Cê?¸v±p›pÁd1Á§qÀ2ïÀpµ¼s y¯“l£˜Àå:(ÕiËÔ-?ñ@tœ›Õg´îÄçÆÁn a¢¹oW\"'ÓŠ÷åÍôËu™Wß¿ÙQD\0¨?ÃØ>¾< A¹Í\rãPÜoàÿœËuP]KKp\$§L}PÑ9iJ„:¼ýB½hûIlGåZ W€ÜNY@ŠE†Ä†@â1‰õ_4ÖÛc~U€ˆ>Íºj%—YiI\0ô Æ ê\r¼-Cg”¹„'àŸÒ&Âþ&h°ø–I’ @N%@É‹¥¹>)C{ÌgªÀ‚ËÓ‡uËP\0©Ì(=¦\r6E\$]COÇ=Ø“¬°ŸÚ¥¯Í.¥±þU4Qà.¨õüì‡™gvÙxØnýùÔ¯ÛâJ-üÖAº0MÒ< Dà	\0t	 š@¦\n`";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¨ÔTI9—Ü&€‹35 khð§¤Ë_ÈñÒH\"U¹³Œ°×Fò™q8Åã·.§Îe|€Õö’&“l UPÛIú¶ž¦sLìJ«/\$ý'§¥Ûa·òÊæ‘jYfIŠŠ²¿Û±ÅaY93dÅ\\!W™qJC”Mc=a6¥¬ïT	Ü^RÛQShžÑ+;¤ŸÄ…íF«ù!pYÞë›.øêá^°Óƒ,EŠªg+ƒÖ9£0z\r è8aÐ^ŽúH\\0Œƒlx2ŽApÞ9áxÊ7jÃÄ\n7cHß¬OðÃª£¦~/Á£Ü5„Að’6ŽÈÛ«Žà^0‡Ô¸A¹ÀãxÈÿ@›Þ)Š\"`Ó¸®l°ÂÅŽÞX¸Ñ˜»tíÑ*dÆ\\«iš~ðÑ(ãbòÛUL±O±õhíôL\r–”\"ýEÒ]ó—Q<.\râÓØM‰O…'µ·ÛÖ˜[xÇ\$;ú§\r%×ò\0™Å’Ä8Æ„eþ¹ÎÄ¢³J'}íî¤¼K]µ\$®	Ü±”-¶SmÌdµ›ý’w8% \"g£ê6\0ì0ƒ¨Ê¶œYßC9ž§X‘1êén'4OÓˆ¡+\$Ø•Õ(²ytDÇl%²öÔQÙT.©ñ²T8nTa=9Ý>DðVL{ä;hqë<³ºOIÚ¢'©Ä­® ²–y+.Y”*ÂºŠë¿ˆAû†ÆÄƒOxsmª	È¢`Qh&:åUúÊH\$À5XêEÃ°„nÈÕ£Æ.©Â+®=1b'ptÈ–4pAƒ@e\r¡„¬¹ÔÄycøc29 ™Òá;ç†8«™\$ÅU‘b®²‰‡Xò”EerMÁã¾ãdÙÃsî©Û-Äöð^Á+2T¹ÇG#ät‹‚\0Ãô0þ\n=©±žðÞƒ0liè=8Ò ]Ó2ôdFä*óå ÃpyÕ®PÆÏàsÏÜÀÞÑàs‡ø9M ÂÃ\n<È·öœƒªÌ¸˜l¢–ô“{e?\0†ÂF\$Ç(ë¤‹ÎÙ°…Ñh²Êf)DÑk/²Äé\"ÈDvÜÑ·RS2Ló…4Q1„þ*(˜“Ã¹HÅ`)Î¼”±|¨±íEJ˜…:‚¥	 œªÇÇ!fN¼5¾[ÑÛQJE[•€šCšGÎ¬0îÔÛøeÀ4³ÀÈ9glõŸ´†ÑZ;Ií-¦´ö¢ÔÚ«Wk-m®µð^ØP[dlÀ‰´ÆÔÛspnMÑ»7†ôßC~p\rì0†³ÞáÏ›P›\rÑÑ*äáU`ÊHÁEºl×Î)Õ7«ÕBÕ\$ä1†¨Z×Vœ”BÜNÄîÅ  €  ¨\$)”L8<t8¾«gU%ŽQU*åf[Q’¡jŽ•Iözžha‹š†-H½Î6KocyaNÉ`ª©ÔXWKav8FÁ0AÒ,«ÜH¨Kr¢&¤‘'Ò\\?£ê\\¬’JOH ¥¿Ÿòàƒs@è\$3ÀâÿªÈ ÁÈ7†Ð@k¨njú@Ó€Ç9œ\$ÂÂw†Tuc´n¸åÂÛ‰G*Ñl\"+etžÚ'¸]5ø“‚eA;ûraJÜÔ.ÿ¨³¤(Aj\"rØì»³d¨m1™ŽoSþ+Ò#®[ÝªŽª\nÓÏ‚b8@3™¦tƒHg‹n\rƒÞ}ÙÐF\n—µ7ðÒÜ›ù³oÇö {šŒU+¼²U&<D\\qpƒõEÛ½Ø!I¢¹A<'\0ª A\nMéÐˆB`EÔoM€ÑÙþóP‹Ð ïIZ‘Ös³\rÊÉÇ4à¢Ç=­*’q×PéÖ¬”8¯csŒBï\0(ÅÝâRŠJPÐ©¥mÆôd,¢îá‘@ÈGŽX<%qé4±\n#ƒÆd±ÝƒvªÜ[>Z!-Ö¨ãvð;{ž™*x­¥óŽR^Œc1l1Ä”ÝTÂ[É©\\ìvŠæ UF¥¡«Å¥\"Æ\$çT¯\"Ô”¤²#AH2·ÓÃ¥7\$'öþ2²Ø¸aëŒ®Ûn.Vö\"¡þà˜‰RœXk%„Y‚ó|QÞåì©¦Aâ2•pt»&Ó,EîéW@ÃHzá‡	òÿé©ùh2%sp¤¡{ºæoŠ#ÃV@@4¿Î²[ù÷¡Ý`E÷v²z±hˆhE€Òa#Dj|qÚBmj§œŸIÒ\\ïðg]Ž)Ó½EÒ§Çg ú¬|>ÒÝg?ôz%\\^·(¤ìriÛ×ÚÏfdã¯;3‰û˜(‰;(§yÝãÛnðo[r<œ?•q”cŒ†·A?EøÌ®-¥(pKg ¾ÓÊ|]Ù*\\öØêÅQ°]ki#\nÔAP „00¿t?™¹ž\0ßƒÐpÐ=á“<ºJiL¡‚àßGØ£²ž @ã1JJNþ:šBvXÆÏü-H²ríö¨;xÃ¸íÆJ”G¨.n\"µ*œQŽ†¼ËÇTË#1æC*RE°(æB&+ªOÿ#Ã\0‡Ë„\$‰œsÐ6wEP[†CdDü†0pÆœ,8àæ+'×xHÜÊÁp2¸ã\nïœ+e(éC•ÍRz°Š¹¦0D\\o` ò_c¾×à\nàÊGMÎ£òRâ²B‡Èa%E6F	@R…D-‡,ûH3¥¬U‚v ' U‰š¥b>ò0Z|¬l6b\09âzX‰OBâ+0hd.€Y'ä„f(×J9îEZÌhÞ§HjQJ{€ßŠ	P[ˆN¤ÎuMžwË—*f+#°10ŠPPôMšé¤DfMr01˜ßÑfVqlê®B¡Q:ü-¸•±yËë1¾Yd`,E‘ØÙí&ð«B’KºàNBÞç\$†Æ U„ê¶ƒÄ‚¢³EúS¤(NÈO‚¶rÁE!1—!‰9!ïªññëˆ}!IU\"È¿#\r¼Ì¤¼ñ^O<­ÄñÄÂSÍûMXˆëÎâg,C‘ô-Ö”ÖB¢¸IþØEç!N-Y©fái0ß±ã!NŸÐ°Ï.qèÖíêŽnàøÒœAéá1ü–²²ÝŽ–¡²¶óm:OóòVÝ.øˆë,RÊ—.Ôíª!r_)é‘é‰2r…úüCQ-ý.R÷.„†´¥%Ù*2W,±LôÄL´enL˜øâç£š¥Ž!\rÏÐW0:%ð>¡c·Óª(ˆ„dBPNÑOLÑ¢fõ#Œõhß)„!1Ê¥5¥;5åHÒ*-3Tó‡btóÑg7Q7i.ËóK/ÉU0î8¨85_8Z%Š~¥+@ó’kÐ÷Ã¾KÞO…:ÞGTSR[5,§,2”„-2â†bÈ®Îà<3Ñ&¯ðÅ…²\0DBå+È~÷²8Ì“ÂÖ3É\$Ó¹:äüÿª O3r©/TÒMð'.9¯œüO2OÑ9‚¦Wè@ôly„DyóÈï¤ìN3}1“­-3‡01ÏoE3›.ÓlN4i2ë)Ó&Cð˜ïÏ¬Y/²Ì\"\r\r2ûFÔ/@úëÍI/Is2Ñ%4Y8…MHYJ5©F´y+ÓJô[KHûIô\r¡qJÁG´.{±MÔáÄ”Q‹¸ÛÅ:#hæ´£d)Häj[Q*`EY+£Â1ôúLH’Ì%<%äcÒå,E/DÇÏI¢°\nU*iõ1.´Ñ,ï;1t×,µ<Ÿ5AL’»:ÏCOK5Lv€@‰€ÜìnU\$ÓVS…Khü>€Þœ\0È¦yN.V©¹W¿XÓ\0>l9XUˆñŒ^…XUÄ);ò\\p`ŸãQèÜ„é¯ãVãßL‘S•Ã\\iÁT\$ŸU§q.5ÄÕÉ]„MVwTµ{TõÐ¦µÕ\\´u0õíKð)ÕÓ^U×U’ÿ]ô›eT„­\\Ò›]§;C›b5þª5Ü8Ta8±À8Ô<9B·6 %µ˜Û–IZ¯Zü†<¾ó\$¹æ\nƒêïu^76µÑfOrÄtkTr§VoA: gVig–39ÑÕc–…WV86ô\0Ahudö9j6gjhAå‘KôÛJO¶”\rùËeÏÏ2nUó‡gõòñ¶Åe³9lË¡b”Ë:ÚVv^öãF2`	\n°\rúj ÛÑ ½ô¢¾Bz]“6U„°õñ4v¥BâÐLÌ0„D{SmrÁq£hgŠPU°ƒ1pRePPXXô8ªê²Äj²@€ë\n ¦°ÃÜä—_q¨Ó41ËD¡L“NˆÌ‡\r³l;e,`è@ØlNäàÖÉ‘BÖÍ]dÅ’H'‚°Ììow^ Ä²êp\n ¨ÀZ\0@jàÆoÄxðtxÃ4–Ž.p„¨ö—\0C¤ÉÚIy>«·§.&k¤@›}\0Ì-(ZQ'È9ä8+©<yW¤DåÂKöÊ÷”\r'±Ã‚µyÍpÕªŸ*\"¶}1C.BSë¦{„hcnÌb;À	€Þi—Ó…øbžÆ¦=äAf‚0*àåYô!o¶;Kª‚Y.æŸ¥ww¶•}í¾üDónW5sYí¹*ï»-óÛ6Ø±‰óiSvõ/\0¨Aƒò?£Ùvwºjà@\rààå&œëJÏ‰´-ˆ©¥G\rŠ[h*{“°L»‹çA?qö;Ñû-‘ÿ=’Ø\"î‡\"î‡Ž'?î‘C…‘ƒ…‘Ù?SÒ%ò(Õ´ÿ2Äá„Y}§Z\nÀÂ`ê Úö´òE¶I¤ìB‰<‹å\\'¡=E]¦Bƒ­€ê»Qƒ¾Ýëƒ£;eò:n4|²`â²O8¤Ú§bCŽ-¹ f— y—NR&õ§ÉŠÆO`÷Ì?„Ë…(+±I¸x+^¶÷Pƒ(Ô;gÉœb–@	\0t	 š@¦\n`";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtëTù;©ðÆ¡Ž‹Àä£î£òŒ#’Ý#Cd<CkºëLºPX9ã`Ò*˜#Œ£z˜:A\"cJÐÁ¤V‘:ƒ¨Ü:©í|\0ú@eˆ(A£{¸\nÉx@·ŒPt#½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ì#\"7#ÁrJ3…éŒâ<?H3–„LÔËŽ’à¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤ò\n>ˆ¦NÄŒ#‚|Á–(Â49´0pŽKÀÜ¼\r«Â¢2ªrQ>:=zâœ'Š’¨²×p³'>Yb×´¤Š<Ž€Mš›0Mp—9ktÄ¤£¨Ú	ìÜ-^\ra\0‚9J0p‰-.Ó\n;-ƒ«¦)Ô5Œåh2HÛÁ­}h2Ñš4•Ö9.ˆò:ê(+d¨0¼O˜9§Ï¥ˆ(od6ª˜ê¾-Äß4õüôæÂÎ¥4øDÉÖ>0Ô@PÖã¸…’ÈÏ¥o\\Ø•éŠO\$VVwa×yöðëb°u<÷çÒË â‘ÒR•¶èô7QHBÖÓÝIòË¨zöÁ_.ZN9¦AÉu?¨§ÀV âw¨6Eây´CxÌ3CÓbNaéð×±,Â Þ¹ÂÃpòFCœh1³˜ÌíÎac49qãÎ0¥‰e§5§C(P9…)<I®H0ô¦)ÁH@58Xê¸ä6§Öæá	#¶0¤âÃ±¼ù\n/QpÜBéR¼£\"|“Ü:m¼ˆ@ÌÃÞ™ƒ ëÏ\r‹Àè3&,ÐËãÁ¨Ä’²úõ3ê	£\rX‡ôÃ¹%R”<ØC#ÀJÀ,%¤¸—“bL‰˜;¦„Ô@“joN!¹9§PÒÓË`O‰ù@å¡2ˆ\rÊ)F(âŠA’R†l‚ãDL(p#Î5D½Âvžùjäß‡Cž@Ñò\r„ùí%\"NO+(eÔ‰‡ŒHSa\n (°¯A#¤WtÁE;=çð§˜U„UQõ#ÎÈøÚ‡ŒCW%¸˜7Ú˜Ü8‡5”Õde{/lÇÔû/XDz0žéº\n\$á\$‡’E‚T¡‘0ª\\Ž3JÈq^J°`ä‰—4MŒ :‡ÚË’—”Æeÿw!Ì96/ä¼.P Â˜T6D|ƒ9èøO{-‰D“S>£äy\$jY™r\r%ƒ¨yèÉµ ÓœýPa“/ÜÅÀÆw\\‚‡\ré¦A“`ÒÁ™	’´˜ÐÒEÂ0T‹§uJG`àIL,8•²¼ß)päÛŠCÖ;¡…/ ÓÌÌlŠ'qbRÂp \n¡@\"¨] H	iãóVaëg¡çbAJà¤!\"„À‹IéM+Ô´Rõ—>I¦ôåk—\"š[Š<e,È8š¢ƒ¡¬êG\$ØtpBFG¤ˆ³›Ž˜Y«m‘Tšz4ˆS@<O·ª[]x§Žd\"eµà‘”é/j'˜¡gMmõý)vbÓÓÒEgM)¶!²ÊnÊ/ ÑV™†²öÖ‚#Þ[áH2¨pÓ;ÕâÙ…áÍ+@t£Üô/‹qu÷ÅóJ{Éßœ§5r¹²>ý³ö|¯m—£Fk­®‹¥”¤BåEÎ©zA\rSWIc4!‘WˆäìkãSBÄüªÙþ‡‹Ò”2¡”;¢5`¬•£h\rè`\"ÐˆB/ªBìõ°Üs€U*#¡šÎ4EŠD¨•ÿ¢¬\"Ú0¨pM`-ØAràÓÅŠ9Z…Lù¥á6A¥QGe¸Œüw_¡<î=&œKÑ³ËGÊ+¶šˆ T!\$	TKÌÄ—4RˆˆÚº A'\ni¼:Ít •˜/*ëM™ª…¢´ÓIÀY9XêdÅ¨ô<‚TE±Ä.™,mŠ”Ë&*Ó€‡IˆÀ'%‡)Ç—Äýlz@ƒ1áŠ:”³>iªÙk6Ô|ßs–ùXçóÎw'zå\rl´Â—RN´ÎVv'‰0÷Ÿs,ë¸bÇ9åƒc¦s¾œÏ/G1\n}£³<¿Õêì €¤T@L,¯äD¤“R2FÈêê>ê«`òb;CŽM#Lš…áxw¡‹\"£2žäŠ‰÷j¤HûªŒù«³ö´JXÐ|jÓd1QÆçŽ¹H¹l\"©×ïì“GD@R^ !è¾Ei|áQ6¶|ãeb!RHå‰à´ÀŒ‹ÀÜåÞqáU:BüÂI=Î.v1p®5²¯á Ñ<Ãó´ù¸É¨.uAÐÞfÚr\rÊ ù´9(Ö«3_“[>‘yÎ˜B#\\û V†­*³q¦B›®«ðÖXEû¦œ‹…_v°íh¼5ëb21£nÇDøu§!îYàªxçfÖ.É1V*\r.ÇêKªXªýÛUO%{Ï•ßö¾î‘¹S|¼)¹´ŽÓ¢|.æmxÚ wÂOâ|tðzÊ¹n3Š\rîß%OGÄÝšòÞnˆÚ\"Ä€Ÿ/Š|×œÐ%JhS¡âÆ‰˜&Š6aú¯´Á~E\$ù<£DüƒÁ^Û½xÞQÁoúå1òÛ²Êœy¦Ë:†k¬‘Æú\"Q>sß1-|ã–y¦½ˆêáˆí#/²ªL~ªÝîx}8ØT\"NŒ¢?á{Uû€¾ë%.X]`zš9jÐ½ÁlV.éæ÷­Uðà\ná½ð\nçæÔioäîûPVp\$ø¥ÀÅ¯nã§¹Ð¦­ÅƒfÙÐBhPG°O‡œ²ä¨Éc¼¥FB¤.-ä,ÅFÒh€BÍ¶ôï2ðîC}nêÄïPø°TEî„Â*ƒäf÷…Œ›ƒBîEpÀÅ{	åò\r%÷10¬\$PÀ‡èâSãh#bð~„\n¾>íN¬=ð˜ñÐá	}i¡\náý\rÐâäd\r®öøðÿ\0ùñAÌ\\‘ãÌ)\n“¬#p›ˆ‰n308CzBðL,b>d°°âdo¥S\r;,eQ-ÀA§>j¯ÃÐà@SÑrôjŠ-ˆšAÅ¦WK09EøM\0£hšÔ¬Ô61‰‘ÍEn¶,Gã6Pï2Y¬»ñ‚ôU¢ 4âv\" ¦;ƒ“€ê\",¨YO^ôobô­LÐ‘ÜÙHy£ØæÐÑ/ú=‚˜\\¬HâXàcÚ4@†E\0Ød¢/å”\rÂNÉúx‰XHn `ª\n€Œ p7îRcˆÒï[²HCœl\rbZQ›Ž\r\$e?\$ªØÔnRdË E±ñ#ÀÍBRCÂÊÎ6‚òàŽ–¿Qø¿‘þîJ&Nk\"˜Ãa>Ã¢|j¦t>1^~ã„)\0be²)Š‹¼\$¢\$¢‚.\rø\"ï¦˜x:@\rªwÆbãO ,Œòo\rb¾O ­Ë“b¹çâÒq¬‘©.ã’öGÇâ}©Âœb1¢B#!Ž<åO 1í%hE³ó\nú’ä¨	®_, «.¾cËé\"Àô«SH@Þ~†žáe–¢à¬\"ž[Âú sœ“4DøW§#@õ2ã¦]dØú7±ò£]5FÆo˜®†g3nÎ¿äô­âÞ­å¯/äs09Ã*Žä>iè°B‘>#„¨1¥P@";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.ëYD’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÓL•·‘A¡;–Szu CD´RöJ©‘`hr@=„¼®Á†BƒÎs;ãMNrJ¨Û­)ŠS3NéjfB£TÝ…ÑˆÑ54T4´62(Ñ>É«)ŒF#DMRD¨kgVhI…t˜—;ršFêöH‹¡ƒˆ9£0z\r è8aÐ^Ž÷h\\0Œƒl 2ŽApÞ9áxÊ7_CÃ¼7cHß~N¸Ã|£¥Æ/¼ÃÜ5„Að’6ŽÛ}Žà^0‡ÒÀA‹¼xÈë»#›)Š\"`Òï-h\n¦XÅðóv˜¥ÔQ¡]¤Ñ ”Ú¯Ä‰K\rZ[Rä&®7Ö6eirÝèó~•k6-HÙ´vÛjÿ¤ª¾v˜Ìª\n'‘Â‹^„»#A³3ÛFÔœ¥óyeY)©\"@†ÇHÔÆ©—û¥&‡%Ìõ/›Òa¿ç­›%&ëùƒ}_Ê\\—Â:ƒ @;#`ê2Äy~cg-^ðh´k¡.p­U¦ÆKsg±F„fDhF¹™kVÍo<PL:l¡!h‡ëQkAJ&R·';EP\n’X3¨rŸÄT0ÜÀÙƒ<Î@æ1áÐnS¥{	P­óxÄÄôúRúuí£Ó¤)?ªÚÙÙO)o-cµ’LÖ²D¤uîŠhA’gÃF™¸\r³Øl­}3,UV®Ÿ¢Ë\$‡±Õ¨Ì:—VÆ±Ò	T~]aKA}êj«Güµ£WuE­@y\0ÕT†UQ¨ód‹ŠË‰Nd9\0£‚pØ9È\rá˜3ÅæËZé­\n¼å†ÖA\0u`Ô1†3ªÃ3˜°7†t ÑàtQ€0†pÂ„xm,}S¼\n˜)-fhÝ¨bê±–` aL)g²Î\\\0. „q@Ô¦Q‹¢–…ZÂÊ4DI	@„¬[Å„ÌA‘+vG±fK“VvñÕ©¶­Wè#ßd/i&D’£r¢#â.wHÔÐ£„ÎŽÉ²·PÒLÌAe,¢“È|†¤bxCs;ÁÈæMæ×»#¡à8•À\$’Ý[ë…q®UÎºWZíë½x¯5ê½×Êû_«ý€°0^ÁO#a@‰†ÆÄ“bÌa1Æ<ÈC\"dŒ|0†³ÊÎbô‹Á¹ŒKD*¶Fˆ—?H¨©ÖjÿÊ{2?Í~¬D\$Ið)›5cÑ¾?¥%%p@@P§òš%G\0AAg(òP¢œü›ŠB*”¤G7TD|Áq‡ù5 ‚\\i‰\n?q&#«ò%¢gG°`þ”òÖÌBD7M50-BQ!yB*uâ³Ø4oZqH7©ªM³:âð”ãJ´_7)\$ZQœÄ—Èä•Lî›Üƒ¶™²l³“À’EÃÉÂ4²3”æ™0ndg€ñÀ\\üÚ˜9ðÚõ£“pð/°@ãc&:ç„ëêOCË’®U¦®§¤IM+I;‹Ê~Â˜Tw°ycØ÷÷QìÕV „‚éªAýN²î<£¥\"»&©0¬ŠR¨À:löŠ‘²cÉ»“rJÙ‹²çÑ>€ÝX¨o^\0o ÒÁ(	–Ìèœƒ ·‚0T\n2ÕG–(½ÜÕ¶–ØŒ/CŽ½P›\\f®F“¦rUSrŠ†\rÉ\r’²\rÐS³fã@Ó	‚zIô'#‚gãÒ@DÂƒM\\G2™Xi±ã¤R~Í™’”±R<”^¨Ôª/zqëWäXS°cfn\$›JŽÕzØtÔ¥¶š^ê»Î%EW\\êA¤@·t9­Fp}®SÿXpjîABÖ°¥\$®Ñ¶.a\"iVTåMGÅ­ç:9] „±J¶ÁýÒ‰eÔP8Y0ÏÑüu}¹@lrÍ s‚h‚ ÊÅCKèŒ7\"5-ÊXWîŸT\n…Q5>´™§ÝbÎèfJËIµ¡u²ö¸ÐE³TÙE6~Íò…gèr—c•2˜ïL:u(44‡§@í°pÎ€)†S¤ÎðdÐzeúå\"üLM~Ê±¢Msº½KÞ¡•‘\0ÊôM(ÆèZ7¢bÕ:„ä4¦§¶ ŸÛR‚HbòZòšÞZz„‹8š45˜(úÙ©¨*ášÙ‘)ÅRZ³Ý+‹ÕÈÐP…¦ªõ?ÏÍBª7ý\nˆhšñ:q¦½L]Üè`¢oIˆeb‘4[`‰D%èMüîiZŠr½Öd)„í&e!z„·³CBa£2Hî<4ÚŠÂT\n!„€Al8ÕÁ‹€ä†ûPvƒ† â…¯C•SBŽ‘ì¹}Ýš=‚òõÔ¿)¢é·TeEÇ­õ,ÎÀ71 z_lÒ÷ñë¢	“ŒË¢Sš¶Z©Àw¤IýCAõLä\0ŸnØ=ÔGQûßR—‘Ñ>…Çß|–ž eŸÎ÷\nq{¿¦òÉ?Ö©ø°üO¶ä¾C#öoÏtÖ‹è Cr€dŸéß¨Ú'ˆökïrü¯únïÐ÷ï®ø\$@ù°gÈibJüåTý\"¡oØÐl ômÒüÏý/ÔÝ2”Ïx¯ÃZeEäsKjâ2ùìlfˆp@.¤,%˜\$d'.ø6.ß\0	8K^™ðBˆ#¤£Ð–^ Å^ˆÄ·áv¿nV\\(P–ê®úüc÷â¥¢Ücä5dÊ°ºH‹\n¬i\\0åF*bŒÞlv’	HæØn+Ø°PÒ)¯<\$`#CFÝlð–äX—‰¢>h4Îè@Ðäie¯0\"*PA	Tˆí2øë“\0¢ƒîlûNU‘l!,ñ1-Ô‡nþÄãí\nk1B©Ä}pãÍâ4EHw)‹OŒzñO&°Ù-*FìªïåhzA`¦-\"ÊˆpävÆF‚*4Y„'\$zD}‰r#ÄBMÏÝÂ¨OÂ´™\nÎ£„¡Æ®ÊQŠ6í¡‡º=1 rNd„Â’åÇ·MÝoø+q7î”L‚ç+ðH†ŒïÄT!Ø4i6!lÊ%@SÌ¸ˆÍ €-TÒqì÷q\\š­TÍC\"‘z©Ò=¤Þz\rÈM‘õ\"-R­+\"¤6ð\nn#ò32&€ˆ)\"¦¾ýñ8ˆhÕQiDH&,q#\rHáC'b•%qƒH(Rt5q#o(dL˜äc)…HGÎ*ETƒPÐ1NîŠR‰\$yï Hri)Êy¯œFQ!*ò¤¹æu\nrºîi\nîË*,Ð9,¢êLÒ‰ï‹-21-r¬ƒR±*râË­e+òêEòÇ/1,[\",òþû’ =.‡†jèÆœÆi²}ÌR!lVøE ŽŽ‡ƒ#2RmS-4O±4¬]5%M×%“A F¸Ë3\rD|ÚŠÐˆ®¤pé.¢VóÂ®¿!%V©‡R°#,?\$77(w7óx\$³}æe.n[äTïŠÐìdÊµ\r½7c ë©|ª©4«ˆó®KÂì…‚¹3.Å“a4ì`#Ns³º{1t‡e2å(à¬”§pçÌ®B²ã&œã“U2 eÍãcw3²z(³oBN4ûóhÔ­§%ÍI\rMB§Cn8ïh[T,Ó?&íE(yAòŸDÞï!C´ECð4çŽW=´`kMr\$Ï–+¦´g	xg¦rVQ6‡e€f\$)¬î„èN‘y˜Rä§T²BŽjBè@îSî¦‹Em	'ôhó4òÃ(r­/ÓW*ÙL”ÜîÔá-¯Ó6²2³'G¢ntÈ^vFµ@PÉÛ,ñ 4ƒ6Èn•(	D4„M5NÕh®<oŠ˜”/ù:¥^.*¬«¯KäELV{‹/²-E±õIM!-\0KËÅ#´÷CÒ[GpÞ.­^¥ugJõkU’kBiPÎzLÎ¸iÕO>µUR•;3ÏYUd¬ë	SbM/F†÷Zõmõ+6õPà õœ†Ó‚L†ôéŽ«[]*–ªNš+Ôe0µ]EG¿&õÂ†æ€ê…c Užj•ì+Äâ2myF´`S4¢ð‹Wù]”1&öM/\n5–[µ‡Fuubek6/U’Œ‚2n¤*Jf¹´Æ2Ë,\$W@¬¸WÎWƒAµPRÙ0‡KfƒK¯ºl’ç+â‚ù«!OIsgG\"øòðÖ51/v…fòšÝŽvÅ„š¶’î6TÖên†í>%pYÐcÑnüvŒÚU/jå°I°›Eè#È€ê# ¦ ÃmÃ»n%ƒN1m^âÿ‡i¶õc6ùj°:S¯Ãhvq-()RÉ1ë@†Ž@Øsb7Ã*Åkàzé¨2q¢ÖìÚºV÷Xâ'B@ÎâxÌ*cöâs@Ä¢ì\n ¨ÀZ\0@_`ÆdD ðþO•!!u%C|#ÈbÊÒI0/¼õí?oRBSŒñ8W‹%Ïew¯é25»yw‡yÏÐþÑ¬&Kž‚vf“\\óþk6Õw\0Ì\$&E¤7BScêD¤>E?BOb—ˆ5eš”W™/n½Êš¼—CP¿soKÐRþ)&ó<èq\0\0	Œ´„#ø\"cåî9¸<‡àÖ‰6>­R°%¨íq÷|d3XC2CfÍÑôÞrä3XR?%¥±6øY§2EÝodøW\rå„²¬”ô.Ý¦k8[1VLÂ@?uÆŽ„A8‹†ä2i”fe>„xˆ;</CñRZe\nS¡rÌëÊ¼íVˆGœº‚©®Iíj t)i£+äüûétN\0¬ Æ ê\r¬Ï‰‚†Mø?k¥p¯¨Õù‹…žæ®RÅBPÑ4ÑCtÏT>ÎLê?Øàr#¤MPÒRdY=†Y8#XsH×åTµ¥WÄ@ëÄkò²P]9B¬Ov#Fj";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÊ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹ÀñÈ@3Äè!ªpK P›k¼<ÈH\n3°Ã|•’/Ð\"1J'\0\0P¦¦‹RÙ!”1²dœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘Ü˜„ˆA¯¯™Z8B<@Ë(4=9%3÷.—sdn4Ê Px¡Ê3¡Ð:ƒ€æáxïW…ÃÈ6º(ä\rãÎŒ£ux<•èæ4¿áxDŽ5ÐÊ:T¢øÄ6J£XD	#hà6£mz:xÂBR-–4\rã\"87„¨æ2„˜¢&\r6\n\\,[/S*Ë³2Õ‚h	KFt†Æ @§Ž´I†V\rÏC”Ø-òcë!×0Ä<Ø!@æÇoÐèÝIÊÄv‹—I¢`™0Ô’¤œD‘4¶•6?ƒ°Â6£+·lÇp\nœ)ØÝ•0ÉÁ*»#Å*an¸Öà—ìRôR¿—évTÊDÜ°EÑ^”Í\$N»(]>l@M¤š‘Ä4È	 íI/+|´¢ÊÙt&\n#©†T¿ƒ£ºP ‹t¼¯on´Í\rŠl­w	€Pñž\rÃ41¶\\J¤‚¦\"r¬?;(hÉ æ™[,*˜]XÑÖã¥ÕþþàIßEÒ\\T]µëR‚Ò”N¥ÔîíÇÝ¶?×”7Cb¶sÔùÞÏ5ð“7=—iË±Y ä#{5dÝƒxÌ3P#pÊ¥ÜŽö>Ð q¹†Z¢c\nH:(©\"žÈKá§pIí· ` \"âÓÒäJÃù3@•s&q•\$¹!¡–žN×-\rÑ ŒþCL	hÙ©BR’‰ bDÍ‘t*Ã©.P©ŽÑBÁÿä¸(€Ò™Ê  :ç<¦“´.†O˜¿©9á\"ÊŒÛÇ…åb'\$è|Ó»YŠdþ6âZü\nTJ‘S*…T«r°VJÑ÷+ur®Õê¿X!¹a¬UŽHgYk5g­¦aÏI\$Ê\$†Õº·ÝASkÝ«	\"ŠA.=Í øŸ2Fã™¡Î>’ÓiÐ @rq\"§Ô~‹a €\$ººt-ÏàP	@š54G„¹ý'd™.‚Rßë\\…¾?  ‚‹\\+öVH°uLH.\0¢¡ìš…Ø£?œ¶Ô•Q‰ýœt»R~”\nÅ•D\\TœCü~ñy†pÔ€Ã€RK‚I/˜õ•Ìƒyü]a¹sÐÒÐHe5ŒþcüuÂ\n³V¡Èš+Ò\nzë—´@8K‚\"÷P&dŸBˆKxP	áL*@#½ÉÌg	VI—¶œÉÉ™œèž‰—-ÉÜÖQ•Kö•DFrT´P’B‘?Ìüç•0:Iy>qIé*%‡©7`Œ%á¾(Ð´]M*Ôºª{9)ú•((rÏd\\Ê‡Ç‘ÕRÚÄR*1d’jM*Øœì ˆ'y3V6¬~ÜØa:ç%(SõY©†GÂì„&1v#Xk1'`á(Äxja¬EY€’ÆGjùlµ‘°ÉPÒ	Ü±Žì&LÚðî½‰íä]ˆ»¤Ñ´\0‚Þ4Was.\nSJ¤Ì9¥‹H/íeOK!	¨ZÒhJ‘¯ÁH2­pÒÃtXŒ6\"ÄzÆôÐ’)n]KÀÊ°ë¾Llbþz­ÁL÷ìÝS®›eYqiQÛ÷l‰y1¨\$Ô›“’Ój)ddâÐ¸|s`m(oý¤L2PäI4½*ÙN(ôW1Ï¡ÜÅ°“fEØeYq©1+N35ìü]ãôqÑ›* *á&ríN~03×Ô‚Ã–Ë+Â\$¸Èñ'K.“W/š‚E“‚'JÍ%€ ¤ù¯Sî\"ˆÁAòLÃiKÚ¥orç=É:ÓjoA*@‚ÂDÅ’Œ>ƒ7BH˜uÁ\\¬É&‹Æ(Hö!v·N>‚€€‚D’I“uLwT³½Ç#P\$·“<(ŸK²&8DQê’5rH³@ ñ\nÉ\"H*æ®Kì’íFA´þ(Ô\$Îá¦2H»ˆ&d¨¿Y«×Ùº\r*ÐþàîE}_B´½†ãÖ®Ð¦¹\"{®ÕÆ+‰q¦ ¥\r´¢²²²M=¢BFL92”Íþî+LDy2ãÝ¯QR™8eØ§ØM2ÒîÇúÃPÓ„€n‘<Œ9\"·XÆ\nPÊ»Tx…ï4\$K(aÐH–”XpéÌaáˆ\r³-ìâ®7/%ÒË\\‰réÜúè„ná”À(êJJ3Í2÷±\\YùÂ%&âafÕMËB'•µ\"Ká¨ŠÖ—äFbèX–ÎÎ(ˆ%G‘igªIÞÑ«ë(QÝ¼7‘rÇÞÝ;\nõ®a\r¶VÈ™œdƒÜ‚ÏäÜJ.-º–9ÝQÝÁçý‹¡rÔ3Òpc·œá•|ýèüñ4éMÐ]Ié.=7{Ø‹Øzgcˆ`ß©#¾­Ô‘?pK‚>H:³kp3üsˆe>î+{Ýzduù‹¯dkÅ\\>ìy‡Ò¦ÿRx1#ÓÎA¯%Ä[éå_»Ó~ÿ…ê.ÂMO“Ê\$IÝjÌ\n]á)ç¼‹ºo`óîÊ¹>×Ipño©)î© k/ìþDþ{eõC®&I|þê\\8¢ªª„<ü¶üÆDépeLù¡vt6:Ïæcâ,ÆÈ²©ï¼ü÷0NaFókŠûÆG°` ÑlB‹žanõ.^zìê_ojs@õ£“g\$ö®¥O÷	lž(p“	ìîÏ§be¨Ô,tãø×AN7 –Ëãª`d’n>\"ÇýFHh‡†-\nöøï“¯y\"I…k	‹ŸGÜ~îõ­²1P>’/Z«N\$¬zÑp¬Ô4ïdöì0fì\"ö\0ì5d¦§‹)N‚¹u	£ ‡®/`äb‡dl²‘äÛ‹)èŸbÕJnÎÈiŒý\nîäð¨†‡²P\níñyÄöÿËdIQNÈq±Q•+Ÿ¦Â C‰=\"ñ¤IG6MbHG:Î²a­Y\$ÒÂ¥4>Ï¢Õ‘PÏñÐÐ1ÖæOK	±ÏÊÈMè8HŒ¦oh”ÀOìi+L_ÂP5~5ƒ¨bw ƒVa­F½C²»&ÚŽŒC#Öâh†9€Â®	èQ‚â!w\"Ä„ æX*9\$kÒ]C˜Z\0ì]’L’PÔiV>\rìù‘CÀœ>aJ €†-\0Ù~jh–¿äpïŽÄeÂA(àïü\$Œï\nn/NÚ4¤zNÂ\n ¨ÀZ`°âPªÈÕQƒŠî.‚¢S@|ÂÏe\n'z¤ªBšQQoô/Át¡L‡(ÏUÅ7(f6‚\\„g¨¶†ª6d”Q…è„Nu-1†pÆø¸2`ìÊy¬¬ìBU¤ï¢én†°rýGó#G\r0¯'¦é’&Þðhç®ŠH˜n¢F\"H7BÇr|(Ð|ÆêžLÁXiÆ lÊê¥‚ÐÓ©'sVGg¬ÚÁ~ëcxë£Î	j€&’1Åó:ì¨L*¨‹<ñŒƒ#Ñ…8Ä¶¦’Í|IŒò¹fÎ&–-Sn7€íâ¬¨>„DD^Èk<ã\n	Œ•ðÌ=¤zwå\$¦Ø §¬®s°{‰”@+_@Ðp'ò14Éëqa«,–é ä\$²¿Ã:S5dgÌÄÃCF* ";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*ŒcÚTÄAns–%ÙÊO-Ç3¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdŒDcìMœ¤Al²¤‹‚N-9@€§)6_¥éDî’ë£Þs–eÛ‚‡%ÊyPœ¤Ìž÷B¥ºF­ys”\nZÃ±()tI¬„Ì4^’­ÙÌF'<Ý\$Î!àÂÈŽC(Ì„C@è:˜t…ã½# Úæ£\\7ŽC8^2Ô¸ðÕÃ˜Ò7Ó!H0Ò£(é@í˜Â7\ra|\$£ƒ>6Ó xŒ!òŒÑÖhÞ240æÊŠbˆ˜4µm©Ò@'1TÃÌC–“ñÎRN	&sÄ#lWÄ¡rtä4Œ_[÷\rÆº©EÊ]—VŒÒ‡ØÐE%‘ÌCCPâZY•IE<d9Tr‘EAÊQØ“ðÂ:ƒ @;#`ê2V]›gÈ%í£Ž“w1 D%¤8s–’ZN]œÄ\"†^‘§9zW%¤s\0]aïŸž<da#Eiâ\\VÖ­®]<„sáB Ø ÙQ¶l¨æ1Õ`UŠ&¤Š<]¼Oá&r—IÈÛ·7MÅy1G,×·'1Q,˜|s^¶ñ‡îU¶SGAM3Äé¦Ì%ã«Æœ¤:Ï½ÝåÔ3Ú\\[»íí™g V*91¬xAR2£xÌ3\r”ƒjs`I(ôŠƒ{06ÕcÈ@:Ó£¨Æ1´C˜ÍŠ`Þ3¹ƒ˜XÒ]ÐÂ3Œ.`Aé¶7­XP9…={\0†)ŠB0@“”‡9F*Ø’]Äy#e¦«©ÊF’°WcÙÂºq'Ì`Sx*|7,°‡D„1Üü²o%Ü&†æjÃ‘™‚ÁÌ;©E€CÀp\r)ô2à@ž“â~P\n	B(e¢ƒºŒQÊAI)E,¦ÒœSÊ€ª#b©U8\"U!±UªÕ^¬UšµVêå]‚zúÁ‰Á„5™UfT‹¸\rÊÔÚÀ çà(åâtŠv:«!\"½	 ¢à\\áþ@¼¸‰Åš%zsN¤è\0q?éGÆÃÜCAG!‚%=ñ*\"ˆ­M&0taIq0&Fš“rr!\0æÂÕh°â¬yóa]˜À’DÃË¦¥`v,°ÃrÀ5¦¼'ÐâÆà¸ ÁÈ7†Ð@aœ[ƒ&µL\0Æñ–¤5ÆŒ8<ðÊmI‹‡>\0žÂ¤M(«9PD‹B¥è@V'¥\\M\"š³vÂØÅ!Œ1ÆA®@SNñ”k§ˆ4†p@×æž2¦u=„`© ZÀ\r*ÅJ1h¯0æ( XaÈÊ)\"Ð)³²g˜P%^.@PO	À€*…\0ˆB E¥4¬\"P˜iŠ,òˆZ¥òÐ#ÄÑ§Ã¤J‹öä)˜êÌŒ´ ë’è#™€0D`\\¢*.ê ‹ªåS‹³ÀÙdpˆp-ÈI˜ÈŽNùá¬i¬Æ1çAZÓc”o³Í#qÎ*Zúrã”G‰†YQÒ	˜)UdZàt€„<Ñ¾ªÄ'b‘BðF>sÖ„ãðPH]¦Ø\$„Òí’gt[¿[IG-'<k°)†ôÇÅeŽ@#>ÍXd;µ¤ñ‘:'€•oÎtÆAX0XÍ®«\0Î†Pîx×*çµi=–¶„âÚ×âe‚ŠëÑt\$ ›\\€C·BZ-ÐÐŠÆ‰Fp¹5|)d÷×',)ï‹ò¾… M‹¢&‡H“Ã˜G2öÙÜ•§qÍå	\nï^Zù;¡Ì/;íh°\n¦P „0%ú‘\r&‰Ó§Ó,å¹§Våºñ>)O%ÜrNÈL¯@@Á6©ä·ãø)êyª¼JÀÇª2é\$XŽQ&#ctu3ÝôFWêyŒÈî\$¸ãÑ_wsýa”DäBû¾XÌà)c¨ö-1½£Ad ’@R‰éMª¹Û+wsHÆ*°„°–€PW¡‹B¥{éœÅµ>ÂB§é‚Ó ™DÂØrˆ89…k.b¤­e± ¯-9sôf9…Äd<%à½ÃÀDõAÕ¢¯Ô±Ïx«6abÑøkí€]à=Q:»W ‘®Îõ_IÛY]…Õ´öz\rñËY(ý„‚`ºÃ˜Iˆæ:.ÄÁ6ƒ”@Ãº¹„bÙC(l·#àäÄF÷§Û³w@}­v®¨¼‚d²íÝeù½dˆ¨•]\niZ7	£h[Êáµt÷Kü_lßn8¾PvÿnµÒ²mMyZœãyäÛmÊÜ>U¶y.òPX4'ƒp{rùXtsT'‘–OÊÙ3'e;´O\rì¤[S‘t«ÝÊöçN1y¦ï¯¡Ê\$„f¿¼b«F8Ê†„-¥ŽÚü\\ž²NœC0©ŠŽµI:àˆä~1FHÌ\\(¸\\2%81î“õ¯Fd ]—Í ¤W‡­¹~DZ%Uê_\\Sj‹û²¸îŠGåvñr.o5Ñöç\\õ›–/D‘ü§'˜H¦tÏ,º½a(êWØ’’ïÈ½©ÝÛžå´ÚYÚÛ©PW·¡]TCN9µ›ÃuYúFë¸:¼s¯]åÊ‡ÔÂÏÐ9_³ÎYáŒé¢‘vépºûß‘‘ßoÑ^¿ðlOv­ëÅjÿ:_^Íx®äúåÔÿÁ.üO^\\PýOúg&úxþÏøÞEúpòïí áÚKð¾Ké\0Ä¾8KPõOo\0¯0¿+æÑÝpJ=í6E\$V÷ð<,0ð<0oðv.à‚ÀÐ¹npú¦€ÀŠÄqBÐA>«ìl;jì¯újÄÔ*>)ät-\n\"l\"Œ·Cƒ\nd–‚¨.R*46 è«F\nhˆ2Ê5PÑ	®ôÙŠøÉa]ÁzÉ¬ž1€†€ä\r€V™ë\r`@T\nc45‡nWàÒÇtYjÊ‰ÐÐbÀÄŠÈ\n\n ¨ÀZ\0@S\0ÇCš6¬ŽÈ-vç0OÄ#B8ªÜYãÈÆØ	±°aÐ!(mbâ-T8Íj/£æBq|9Àl\nq#­^ßŠÚ!j·Ä–“\"ÜÀ˜\rå9ƒª\r¥(2£R6\"Z!\0.E´[„€Ù-b,­ºñ(zŠ®ÛXIÊÎ¬öÎ@ÛO8ÛÂî\nƒd3ãF2PÙ©š\ràà±EµèJºn®FÏ2]ÚIÄÆT»g-ÜÌp.¨âÈà!+#®Â£DRFm*üÀ¬ Æ ê\r¢0‚¤,Ýå¸¼ÌqÆÅå¾&\$ÀÖCÇê®G%Ü­8Á®‡\n»\n¦Ÿ	)ÎîCÆæ²<í¤æë‚\$T@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²/kÞÁ)ÒP“Ç)<·Ä©p¨’êY.R®DùÌLGI,I¥¥i.Oc’t’\0F¢å±dtì)Ê\\—È*ð’ëÛâ»/ÉÊ]g9f]Á…‹Ø^K’ LªÇ)pYÊr•ä2´.«ºó)•h¹2]¥Å*–X!rBœóœêƒ,9£0z\r è8aÐ^Žôˆ\\0Œƒk¢2ŽApÞ9áxÊ7SÃÃ`7cHßPMHÃN£¥/·Ü5„Að’6Ž\r ÛOŽà^0‡Ð{Q]¶CxÈÔµc›4)Š\"`ÒØ7GI\\@„<Û(Pù^s”…ÔHËkØ_•Ç1(\\¤…ÐSÒuÇrÜöºów:ìI<t”á6W!ö8Ä<¶@æÉ–ÌA-É‰vtåÌC•G)JÚQ”(Â:ƒ @;#`ê2Û6ª–åìJ\\[\$Ùr’B–HŠÜreÙÌBñùÎ^ß‡1IJd}²Lª1Tb§1pMà‰â|ƒB ËQI*[Êe2[‰ à#cƒeTÜ3C˜ÇY9ÖiÊH—¹ÃÊs\$œd·­ã}wÜÅÍå)J›åã(^kå¿pïÝ¼ùïòwqoóÌOÜB–V'iêZFóùËÎ¤9t–ñG?Â/KãÍÔN\\ÝÔ•zÝiZ„™c£“\$Ê[47ŒÃ0ÙK·SìéÑj£{:6ÖCÈ@:Ôƒ¨Æ1´ã˜ÍŽ`Þ3º#˜XÔŽ^pÂ3Œ.ˆAó¶=,7¸â£1)šAÂ¦)Ö@×O¯Ï‘:D8:éô^#Â`_(–ÈDDá'Þ3¡FD)½ULKHG\"Ò#ô\0€FˆQJdBhafÀ9èTÃº›Xí\\8•p P*\rB¨u¢ÔjR!ÝI©U.¦TÚSê…QªUNÕI¶UŠ¸+\0Ø¬•¢¶W\né^+å€°Ä\rdFÂþß;\naæåxn ¨s‰Ð`r‹ô<(@èB¬r‰X |‰#H ”ƒLar,à]¤¥Ì+Ç0Ð(€ 0…A)B\"\nA2ø‰WæMG0†# VÊ2Vy…²\"8—dý@æÂÕ•À‰*à€'å³¿Óæ½‡(ŠBW„ÌË¼¥c™Æ<²ƒrÇ6FÐ(@âÈáX ÁÈ7†Ð@b4n…¦ÉO‚\0Æö–Q©6f 8>0Ên‚€O\naP9HÄJ~iÂl¡J·P9„BíC³\"eFèLEi!W™3*ÚàÁ¬{JQÞ‚\0ÄC8 Y2q34h”F\nAÞÍ—Î®ÛYóŠrNe”ŒÊ™%¢KA|!‡H¥,P\n„xNT(@‚(\n© €\"P˜j‚Lf	\0rˆñÊêØç&Ke­µÖJ.À…0Ç`O£¸w:\"‚ìö\\È¸§g‹ÊYN!ŠT26>!SòxÄÈ¤2.ÑjØGHâÄ]ŽL¢Ts‰Ô*[E?)5Õ\\\"™Yb\0sRÜƒ*¹\r-¬:ArÇ8‰ÈVÁ4RÈ€ðrJÉy	&¤4XIÊ½ˆÁQEÕ¶)f\0s\"Søæ¨µ×%ÜÃHzdr‡ÚÉ ©¤fÀ2ydò¡î¡ÇUÀ[aA¯S¥ÝÊ±Íeå,U.¥Ø»œkªâÐQQx’Ç\"äo¸àsÙOÇ0º]} ‘2à…Ík™òŸT\n„y…8¸€ƒ•0X÷Mdq#Ä£™<'¤< ß<Âñ¼‹¤/03F¬Vd]4aÈ.ŽØ»×T¼âcæ†€èC *§…@‚Â@ ›÷ÌÓ»ÕfÃ|×5Â˜ßst9„ø¥¤Q@CÞ'ÇKœ<ç•ô‚\0^é%¢|[˜üÁ˜³ O	p}ô˜úº~Åè±\"|_È’æÛÛˆ»•uÎçCd`Òøeâ TŽ](DbXèæÆ(´†—€)g)f=9¸s¿„à§òB,õYM'Z¾\rql\$ãÔ|\"q\ré}[Râ^Ä…[[A±@ G&Á‰|T!!pô¶uÓ9”¬Ó\$€å×c˜VŠ\"Z Ðð¡[kwkæ²ch	…Àb4ˆB–.õ‰\"æÁ¹Ñ\n*Hƒ>\"§c/¡]µÍ‡¯hs	±huëHç_zA\n¯SÂWÜÌ%š×[ð+€Kì¯ãk¯s`ïdB¼u¾ò^“«\rcÀÂUå²(…@% ü²ñ»:#<<ØõóQËÍùJZæd·‘à¥Ïƒ9\\Àœ­¢ufäûZk‚èSJ\"Z\$mbKV\rqk+ôÍ0ú\"­ØNo]+§uéÃ³òGÚì`°Çˆòq‡eÙÇ/i²<…ØÞçÛz3~ïß°	p#ÓŽ;³HW€ê,øÐ:BõÞébIý=§õZø=æpïœïëÐyº„†p†³c”I¬**‘úŽ±ÜDáo\"¸R'(š·þšÂ ùTv>¿Ø£}]—Å³.htŒpÈð”åhnõö¿‘\r÷ÂÒsÓT>¹}‡ÃhÅ9õÑ÷]+­v—ÎñåÅ'ë¿ÿ»¹v‹!ü¿oâ}ëü.ï,¼ì~È!lóÆû\0&q\0oêï+!\0Ì„C/Œ‡LO²Ë2\\G¢Á^hÏ„ Á¡|Áo\$,ý¼ñL{\0…Î*!!Aôk!ÐaÏ>e+BíÁrƒŒvÈË3MÅð'Â¥ZdB\$O~éîæ¼ë4?PdÄðžðX0§Æû\np}Oþ<–p¢>p¿Ïð„ç&ñ	®êÅ!2ÇÁ\n¦ÄPÚØpÂÅå\rÏôÃâÅDÂïP÷lVFdF)«É8°«•PïQC£\"	T\rî\"ë0h¢–ËfsHJøÍ­8\0 œ‡¨Ž@P4àRŸ¨öAÛ¼HZÁF¢.z%ÁbÓH2@B.±^Û …(VS\0@…c^­T\nh®31Ž6ÀéEúÓŽ ßá?a1&Ðƒ\"`è@ØiÞµ`ÖN£¦@dCbyeŒ\r ÌyÅž7@Œ¤ÈÃF<C4|Àª\n€Œ p>qÚ:Ctë§@„ÌúÓ	H#B8±‡lÌd†ï‘‡±Þ[!.ÐÝ-æ9ƒ–Þ¤xÆ+ÜÃ°t±mŽ)i‚°H;…ð-H\rå(:#¦	’`}E63C\\6Â–+H.gÆÄààâÊãÎz*ç(Î4ïŽ(×fjý\rlb„ZÒœþ\"\nƒn4ƒP2ñ	Ú\rààµ¥,»HpÈ‡`õB¿¯ØÿÂª°Ìf†l%¬å²ÔêJÌùÆ(¬®©-RˆÚÁ,\"Ìí ¬ Æ ê\r²P\0g>Îvrl&],î]òT-ÞO‚Ê<Ò’®cò1\nÂk%3êô<Ò£*p´hA%¯„Áê\$EäbF`	\0@š	 t\n`¦";break;}$Ih=array();foreach(explode("\n",lzw_decompress($f))as$X)$Ih[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Ih;}if(!$Ih){$Ih=get_translations($ca);$_SESSION["translations"]=$Ih;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Ef=array_search("SQL",$b->operators);if($Ef!==false)unset($b->operators[$Ef]);}function
dsn($dc,$V,$G){try{parent::__construct($dc,$V,$G);}catch(Exception$vc){auth_error(h($vc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$Sh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Yb=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$b,$x;$Ed=(count($cd)<count($M));$H=$b->selectQueryBuild($M,$Z,$cd,$df,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$cd&&$Ed&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($cd&&$Ed?"\nGROUP BY ".implode(", ",$cd):"").($df?"\nORDER BY ".implode(", ",$df):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Vg=microtime(true);$J=$this->_conn->query($H);if($Mf)echo$b->selectQuery($H,format_time($Vg));return$J;}function
delete($R,$Vf,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$Vf):" $H$Vf"));}function
update($R,$O,$Vf,$z=0,$Dg="\n"){$ji=array();foreach($O
as$y=>$X)$ji[]="$y = $X";$H=table($R)." SET$Dg".implode(",$Dg",$ji);return
queries("UPDATE".($z?limit1($H,$Vf):" $H$Vf"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Kf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Yb["sqlite"]="SQLite 3";$Yb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Hf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Kc){$this->_link=new
SQLite3($Kc);$mi=$this->_link->version();$this->server_info=$mi["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Kc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Kc);}function
query($H,$Sh=false){$ye=($Sh?"unbufferedQuery":"query");$I=@$this->_link->$ye($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Af='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Af\\.)?$Af\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Kc){$this->dsn(DRIVER.":$Kc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Kc){if(is_readable($Kc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Kc)?$Kc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Kc")." AS a")){parent::__construct($Kc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){$ji=array();foreach($L
as$O)$ji[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$ji));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$ob){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Kf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Mb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Mb,$B)?str_replace("''","'",$B[1]):($Mb=="NULL"?null:$Mb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Kf!="")$J[$Kf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Kf=$C;}}$Tg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Tg,$ke,PREG_SET_ORDER);foreach($ke
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Tg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Tg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$ke,PREG_SET_ORDER);foreach($ke
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Ug=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ug){$v["columns"][]=$ug["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Ug[$C],$gg)){preg_match_all('/("[^"]*+")+( DESC)?/',$gg[2],$ke);foreach($ke[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Dc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Dc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Dc));return
false;}return
true;}function
create_database($m,$nb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$vc){$g->error=$vc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$nb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$di=($R==""||$Rc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$di=true;break;}}$c=array();$mf=array();foreach($p
as$o){if($o[1]){$c[]=($di?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$mf[$o[0]]=$o[1][0];}}if(!$di){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$mf,$Rc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$mf,$Rc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$mf[$y]=idf_escape($y);}}$Lf=false;foreach($p
as$o){if($o[6])$Lf=true;}$bc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$bc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Nd=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$mf[$d])continue
2;$e[]=$mf[$d].($v["descs"][$y]?" DESC":"");}if(!$bc[$Nd]){if($v["type"]!="PRIMARY"||!$Lf)$w[]=array($v["type"],$Nd,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Rc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Nd=>$q){foreach($q["source"]as$y=>$d){if(!$mf[$d])continue
2;$q["source"][$y]=idf_unescape($mf[$d]);}if(!isset($Rc[" $Nd"]))$Rc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Rc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($mf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$mf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($mf)))." FROM ".table($R)))return
false;$Oh=array();foreach(triggers($R)as$Mh=>$xh){$Lh=trigger($Mh);$Oh[]="CREATE TRIGGER ".idf_escape($Mh)." ".implode(" ",$xh)." ON ".table($C)."\n$Lh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Oh
as$Lh){if(!queries($Lh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$Kf){if($Kf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($oi){return
apply_queries("DROP VIEW",$oi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$oi,$oh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Nh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Nh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Me=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Me?" OF":""),"Of"=>($Me[0]=='`'||$Me[0]=='"'?idf_unescape($Me):$Me),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Nh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Nh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($yg){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Zg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$af){list($y,$X)=explode("=",$af,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Gc);}$x="sqlite";$Rh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Yg=array_keys($Rh);$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Zc=array("hex","length","lower","round","unixepoch","upper");$ed=array("avg","count","count distinct","group_concat","max","min","sum");$gc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Yb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Hf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($rc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$mi=pg_version($this->_link);$this->server_info=$mi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Sh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$d);$J->name=pg_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$d);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){global$g;foreach($L
as$O){$Zh=array();$Z=array();foreach($O
as$y=>$X){$Zh[]="$y = $X";if(isset($Kf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Zh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_indexes_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$be,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$K["type"]=$Ca[$cb];$K["full_type"]=$K["type"].$be.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$be.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$hh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $hh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $hh AND ci.oid = i.indexrelid",$h)as$K){$hg=$K["relname"];$J[$hg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$hg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$ud)$J[$hg]["columns"][]=$e[$ud];$J[$hg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$vd)$J[$hg]["descs"][]=($vd&1?'1':null);$J[$hg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$Te;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$je)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$je[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$je[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Te)~",$B[4],$je)?$je[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Te)~",$B[4],$je)?$je[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" ENCODING ".idf_escape($nb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$nb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();$Uf=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$ii=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$Uf[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$ii!="")$Uf[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($ii!=""?substr($ii,9):"''");}}$c=array_merge($c,$Rc);if($R=="")array_unshift($Uf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Uf,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$Uf[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$sb!="")$Uf[]="COMMENT ON TABLE ".table($C)." IS ".q($sb);if($La!=""){}foreach($Uf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$Zb=array();$Uf=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Zb[]=idf_escape($X[1]);else$Uf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($Uf,"ALTER TABLE ".table($R).implode(",",$i));if($Zb)array_unshift($Uf,"DROP INDEX ".implode(", ",$Zb));foreach($Uf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($oi){return
drop_tables($oi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$oi,$oh){foreach(array_merge($T,$oi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($oh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$gg))return$gg[1];return
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
set_schema($xg){global$g,$Rh,$Yg;$J=$g->query("SET search_path TO ".idf_escape($xg));foreach(types()as$U){if(!isset($Rh[$U])){$Rh[$U]=0;$Yg[lang(23)][]=$U;}}return$J;}function
create_sql($R,$La){global$g;$J='';$ng=array();$Fg=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Pc=foreign_keys($R);ksort($Pc);$Oh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Ic=>$o){$tf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?"":" NOT NULL");$ng[]=$tf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$ke)){$Eg=$ke[1];$Sg=reset(get_rows("SELECT * FROM $Eg"));$Fg[]="CREATE SEQUENCE $Eg INCREMENT $Sg[increment_by] MINVALUE $Sg[min_value] MAXVALUE $Sg[max_value] START ".($La?$Sg['last_value']:1)." CACHE $Sg[cache_value];";}}if(!empty($Fg))$J=implode("\n\n",$Fg)."\n\n$J";foreach($w
as$sd=>$v){switch($v['type']){case'UNIQUE':$ng[]="CONSTRAINT ".idf_escape($sd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$ng[]="CONSTRAINT ".idf_escape($sd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Pc
as$Oc=>$Nc)$ng[]="CONSTRAINT ".idf_escape($Oc)." $Nc[definition] ".($Nc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$ng)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$sd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($sd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Ic=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Ic)." IS ".q($o['comment']).";";}foreach($Oh
as$Kh=>$Jh){$Lh=trigger($Kh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Lh['Trigger'])." $Lh[Timing] $Lh[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Lh[Type] $Lh[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$Zg){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Gc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$Rh=array();$Yg=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Zc=array("char_length","lower","round","to_hex","to_timestamp","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Yb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Hf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($rc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$Sh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$d);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
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
limit($H,$Z,$z,$D=0,$Dg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$zg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $zg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $zg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$be="$K[DATA_PRECISION],$K[DATA_SCALE]";if($be==",")$be=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($be?"($be)":""),"type"=>strtolower($U),"length"=>$be,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$sd=$K["INDEX_NAME"];$J[$sd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$sd]["columns"][]=$K["COLUMN_NAME"];$J[$sd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$sd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=$Zb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Zb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Zb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Zb).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
apply_queries("DROP VIEW",$oi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($yg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($yg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Gc);}$x="oracle";$Rh=array();$Yg=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Zc=array("length","lower","round","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Yb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Hf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$wd=sqlsrv_server_info($this->_link);$this->server_info=$wd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Sh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$Sh=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){foreach($L
as$O){$Zh=array();$Z=array();foreach($O
as$y=>$X){$Zh[]="$y = $X";if(isset($Kf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Zh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
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
limit($H,$Z,$z,$D=0,$Dg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$be=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($be?"($be)":""),"type"=>$U,"length"=>$be,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$nb)$J[preg_replace('~_.*~','',$nb)][]=$nb;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$nb)?" COLLATE $nb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$nb){if(preg_match('~^[a-z0-9_]+$~i',$nb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $nb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Rc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Rc)$c[""]=$Rc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Zb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Zb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Zb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Zb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
queries("DROP VIEW ".implode(", ",array_map('table',$oi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$oi,$oh){return
apply_queries("ALTER SCHEMA ".idf_escape($oh)." TRANSFER",array_merge($T,$oi));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($xg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Gc);}$x="mssql";$Rh=array();$Yg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Zc=array("len","lower","round","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Yb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Hf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$bi=explode(':',$N);$this->service_link=ibase_service_attach($bi[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$Sh=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
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
get_databases($Qc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Dg=" "){$J='';$J.=($z!==null?$Dg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Fc=false){global$g;$J=array();$Gb=tables_list();foreach($Gb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
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
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
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
set_schema($xg){return
true;}function
support($Gc){return
preg_match("~^(columns|sql|status|table)$~",$Gc);}$x="firebird";$Ye=array("=");$Zc=array();$ed=array();$gc=array();}$Yb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Hf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$Sh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$ch=0;foreach($I
as$Id)$ch+=$Id->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$ch,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Id){$K=array();if($Id->Name!='')$K['itemName()']=(string)$Id->Name;foreach($Id->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($jc){return(is_object($jc)&&$jc['encoding']=='base64'?base64_decode($jc):(string)$jc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Od=array_keys($this->_rows[0]);return(object)array('name'=>$Od[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Kf="itemName()";function
_chunkRequest($pd,$va,$F,$zc=array()){global$g;foreach(array_chunk($pd,25)as$gb){$rf=$F;foreach($gb
as$s=>$t){$rf["Item.$s.ItemName"]=$t;foreach($zc
as$y=>$X)$rf["Item.$s.$y"]=$X;}if(!sdb_request($va,$rf))return
false;}$g->affected_rows=count($pd);return
true;}function
_extractIds($R,$Vf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Vf,$ke))$J=array_map('idf_unescape',$ke[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Vf.($z?" LIMIT 1":"")))as$Id)$J[]=$Id->Name;}return$J;}function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$cd,$df,$z,$E,$Mf);$g->next=0;return$J;}function
delete($R,$Vf,$z=0){return$this->_chunkRequest($this->_extractIds($R,$Vf,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$Vf,$z=0,$Dg="\n"){$Nb=array();$_d=array();$s=0;$pd=$this->_extractIds($R,$Vf,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$pd))$Nb["Attribute.".count($Nb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Kd=>$W){$_d["Attribute.$s.Name"]=$y;$_d["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Kd)$_d["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$_d||$this->_chunkRequest(($t!=""?array($t):$pd),'BatchPutAttributes',$F,$_d))&&(!$Nb||$this->_chunkRequest($pd,'BatchDeleteAttributes',$F,$Nb));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Kf){foreach($L
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
support($Gc){return
preg_match('~sql~',$Gc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$ob){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Fc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Fc){$xe=sdb_request('DomainMetadata',array('DomainName'=>$R));if($xe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$xe->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
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
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Gb,$y,$Zf=false){$Ua=64;if(strlen($y)>$Ua)$y=pack("H*",$Ba($y));$y=str_pad($y,$Ua,"\0");$Ld=$y^str_repeat("\x36",$Ua);$Md=$y^str_repeat("\x5C",$Ua);$J=$Ba($Md.pack("H*",$Ba($Ld.$Gb)));if($Zf)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($md,$F['AWSAccessKeyId'],$_g)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$md)."\n/\n$H",$_g,true)));@ini_set('track_errors',1);$Jc=@file_get_contents((preg_match('~^https?://~',$md)?$md:"http://$md"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Jc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$ui=simplexml_load_string($Jc);if(!$ui){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($ui->Errors){$n=$ui->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$nh=$va."Result";return($ui->$nh?$ui->$nh:true);}function
sdb_request_all($va,$nh,$F=array(),$wh=0){$J=array();$Vg=($wh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$ui=sdb_request($va,$F);if(!$ui)break;foreach($ui->$nh
as$jc)$J[]=$jc;if($z&&count($J)>=$z){$_GET["next"]=$ui->NextToken;break;}if($wh&&microtime(true)-$Vg>$wh)return
false;$F['NextToken']=$ui->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($ui->NextToken);return$J;}$x="simpledb";$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Zc=array();$ed=array("count");$gc=array(array("json"));}$Yb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Hf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$bf=array();if($V!=""){$bf["username"]=$V;$bf["password"]=$G;}if($m!="")$bf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$bf);return
true;}catch(Exception$vc){$this->error=$vc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$vc){$this->error=$vc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Id){$K=array();foreach($Id
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Od=array_keys($this->_rows[0]);$C=$Od[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Kf="_id";function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Pg=array();foreach($df
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Bb);$Pg[$X]=($Bb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Pg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$vc){$this->_conn->error=$vc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Qc){global$g;$J=array();$Kb=$g->_link->listDBs();foreach($Kb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Fc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$kg=$g->_link->selectDB($m)->drop();if(!$kg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Qb=array();foreach($v["key"]as$d=>$U)$Qb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Qb,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$kg=$g->_db->selectCollection($R)->drop();if(!$kg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$kg=$g->_db->selectCollection($R)->remove();if(!$kg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Bb);$e[$d]=($Bb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Gc){return
preg_match("~database|indexes~",$Gc);}$x="mongo";$Ye=array("=");$Zc=array();$ed=array();$gc=array(array("json"));}$Yb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Hf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($zf,$xb=array(),$ye='GET'){@ini_set('track_errors',1);$Jc=@file_get_contents($this->_url.'/'.ltrim($zf,'/'),false,stream_context_create(array('http'=>array('method'=>$ye,'content'=>json_encode($xb),'ignore_errors'=>1,))));if(!$Jc){$this->error=$php_errormsg;return$Jc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Jc;return
false;}$J=json_decode($Jc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$wb=get_defined_constants(true);foreach($wb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($zf,$xb=array(),$ye='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($zf,'/'),$xb,$ye);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$b;$Gb=array();$H="$R/_search";if($M!=array("*"))$Gb["fields"]=$M;if($df){$Pg=array();foreach($df
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Bb);$Pg[]=($Bb?array($lb=>"desc"):$lb);}$Gb["sort"]=$Pg;}if($z){$Gb["size"]=+$z;if($E)$Gb["from"]=($E*$z);}foreach($Z
as$X){list($lb,$We,$X)=explode(" ",$X,3);if($lb=="_id")$Gb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$rh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($We=="=")$Gb["query"]["filtered"]["filter"]["and"][]=$rh;else$Gb["query"]["filtered"]["query"]["bool"]["must"][]=$rh;}}if($Gb["query"]&&!$Gb["query"]["filtered"]["query"]&&!$Gb["query"]["ids"])$Gb["query"]["filtered"]["query"]=array("match_all"=>array());$Vg=microtime(true);$zg=$this->_conn->query($H,$Gb);if($Mf)echo$b->selectQuery("$H: ".print_r($Gb,true),format_time($Vg));if(!$zg)return
false;$J=array();foreach($zg['hits']['hits']as$ld){$K=array();if($M==array("*"))$K["_id"]=$ld["_id"];$p=$ld['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$ld['fields'][$y];}foreach($p
as$y=>$X){if($Gb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Gc){return
preg_match("~database|table|columns~",$Gc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Fc=false){global$g;$zg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($zg){foreach($zg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$he=$I[$R]['properties'];if(!$he)$he=$I[$g->_db]['mappings'][$R]['properties'];if($he){foreach($he
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$Ye=array("=","query");$Zc=array();$ed=array();$gc=array(array("json"));}$Yb=array("server"=>"MySQL")+$Yb;if(!defined("DRIVER")){$Hf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Df=null,$Og=null){mysqli_report(MYSQLI_REPORT_OFF);list($md,$Df)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$md:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Df)?$Df:ini_get("mysqli.default_port")),(!is_numeric($Df)?$Df:$Og));return$J;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$Sh=false){$I=@($Sh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Sh=false){$this->setAttribute(1000,!$Sh);return
parent::query($H,$Sh);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Kf){$e=array_keys(reset($L));$If="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$ji=array();foreach($e
as$y)$ji[$y]="$y = VALUES($y)";$bh="\nON DUPLICATE KEY UPDATE ".implode(", ",$ji);$ji=array();$be=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($ji&&(strlen($If)+$be+strlen($Y)+strlen($bh)>1e6)){if(!queries($If.implode(",\n",$ji).$bh))return
false;$ji=array();$be=0;}$ji[]=$Y;$be+=strlen($Y)+2;}return
queries($If.implode(",\n",$ji).$bh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Rh,$Yg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$Yg[lang(26)][]="json";$Rh["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($vg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$vg;return$J;}function
get_databases($Qc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Qc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$ob[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Fc=false){global$g;$J=array();foreach(get_rows($Fc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$Te;static$Af='`(?:[^`]|``)+`';$J=array();$Cb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Cb){preg_match_all("~CONSTRAINT ($Af) FOREIGN KEY ?\\(((?:$Af,? ?)+)\\) REFERENCES ($Af)(?:\\.($Af))? \\(((?:$Af,? ?)+)\\)(?: ON DELETE ($Te))?(?: ON UPDATE ($Te))?~",$Cb,$ke,PREG_SET_ORDER);foreach($ke
as$B){preg_match_all("~$Af~",$B[2],$Qg);preg_match_all("~$Af~",$B[5],$oh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Qg[0]),"target"=>array_map('idf_unescape',$oh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" COLLATE ".q($nb):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$nb){$J=false;if(create_database($C,$nb)){$ig=array();foreach(tables_list()as$R=>$U)$ig[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$ig||queries("RENAME TABLE ".implode(", ",$ig)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ma="";break;}if($v["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Rc);$P=($sb!==null?" COMMENT=".q($sb):"").($oc?" ENGINE=".q($oc):"").($nb?" COLLATE ".q($nb):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$wf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$wf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$wf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
queries("DROP VIEW ".implode(", ",array_map('table',$oi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$oi,$oh){$ig=array();foreach(array_merge($T,$oi)as$R)$ig[]=table($R)." TO ".idf_escape($oh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$ig));}function
copy_tables($T,$oi,$oh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($oh==DB?table("copy_$R"):idf_escape($oh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($oi
as$R){$C=($oh==DB?table("copy_$R"):idf_escape($oh).".".table($R));$ni=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $ni[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$qc,$yd,$Rh;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Qh="((".implode("|",array_merge(array_keys($Rh),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$qc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Af="\\s*(".($U=="FUNCTION"?"":$yd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Qh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Af\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Qh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Af\\s*,?~is",$B[1],$ke,PREG_SET_ORDER);foreach($ke
as$qf){$C=str_replace("``","`",$qf[2]).$qf[3];$p[]=array("field"=>$C,"type"=>strtolower($qf[5]),"length"=>preg_replace_callback("~$qc~s",'normalize_enum',$qf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$qf[8] $qf[7]"))),"null"=>1,"full_type"=>$qf[4],"inout"=>strtoupper($qf[1]),"collation"=>strtolower($qf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($xg){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Zg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($Zg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Gc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Gc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$Rh=array();$Yg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array("unsigned","zerofill","unsigned zerofill");$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Zc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$ed=array("avg","count","count distinct","group_concat","max","min","sum");$gc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Qc=true){return
get_databases($Qc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Yb;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Yb,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($fe,$G){global$x;if($x=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($fh){return
h($fh["Name"]);}function
fieldName($o,$df=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($fh,$O=""){echo'<p class="links">';$ee=array("select"=>lang(39));if(support("table")||support("indexes"))$ee["table"]=lang(40);if(support("table")){if(is_view($fh))$ee["view"]=lang(41);else$ee["create"]=lang(42);}if($O!==null)$ee["edit"]=lang(43);foreach($ee
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($fh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$eh){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$vh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($vh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Sc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$lf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(44,strlen($lf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Mf=array();foreach($v["columns"]as$y=>$X)$Mf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Mf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$Zc,$ed;print_fieldset("select",lang(50),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($Zc||$ed?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$Zc,lang(52)=>$ed)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$e,$X["col"],"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($df,$e,$w){print_fieldset("sort",lang(55),$df);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$e),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($uh){if($uh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($uh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($w
as$v){$Fb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Fb)$e[$Fb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($lc,$e){}function
selectColumnsProcess($e,$w){global$Zc,$ed;$M=array();$cd=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Zc)||in_array($X["fun"],$ed)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$ed))$cd[]=$M[$y];}}return
array($M,$cd);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ub=" $X[op]";if(preg_match('~IN$~',$X["op"])){$rd=process_length($X["val"]);$ub.=" ".($rd!=""?$rd:"(NULL)");}elseif($X["op"]=="SQL")$ub=" $X[val]";elseif($X["op"]=="LIKE %%")$ub=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$ub=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ub.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ub;else{$pb=array();foreach($p
as$C=>$o){$Gd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Gd)){$C=idf_escape($C);$pb[]=($x=="sql"&&$Gd&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($pb?"(".implode("$ub OR ",$pb)."$ub)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Sc){return
false;}function
selectQueryBuild($M,$Z,$cd,$df,$z,$E){return"";}function
messageQuery($H,$vh){global$x;restart_session();$jd=&get_session("queries");$t="sql-".count($jd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$jd[$_GET["db"]][]=array($H,time(),$vh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($vh?" <span class='time'>($vh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($jd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$gc;$J=($o["null"]?"NULL/":"");foreach($gc
as$y=>$Zc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Zc
as$Af=>$X){if(!$Af||preg_match("~$Af~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(48);return
explode("/",$J);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$Zg,$Hd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Zg)dump_csv(array_keys(fields($R)));}else{if($Hd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($Zg&&$i){if($Zg=="DROP+CREATE"||$Hd==1)echo"DROP ".($Hd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Hd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$Zg,$H){global$g,$x;$me=($x=="sqlite"?0:1048576);if($Zg){if($_POST["format"]=="sql"){if($Zg=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$_d="";$Xa="";$Od=array();$bh="";$Hc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Hc()){if(!$Od){$ji=array();foreach($K
as$X){$o=$I->fetch_field();$Od[]=$o->name;$y=idf_escape($o->name);$ji[]="$y = VALUES($y)";}$bh=($Zg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$ji):"").";\n";}if($_POST["format"]!="sql"){if($Zg=="table"){dump_csv($Od);$Zg="INSERT";}dump_csv($K);}else{if(!$_d)$_d="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Od)).") VALUES";foreach($K
as$y=>$X){$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$vg=($me?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$_d.$vg;elseif(strlen($Xa)+4+strlen($vg)+strlen($bh)<$me)$Xa.=",$vg";else{echo$Xa.$bh;$Xa=$_d.$vg;}}}if($Xa)echo$Xa.$bh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($od){return
friendly_url($od!=""?$od:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($od,$Ae=false){$of=$_POST["output"];$Bc=(preg_match('~sql~',$_POST["format"])?"sql":($Ae?"tar":"csv"));header("Content-Type: ".($of=="gz"?"application/x-gzip":($Bc=="tar"?"application/x-tar":($Bc=="sql"||$of!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($of=="gz")ob_start('ob_gzencode',1e6);return$Bc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($_e){global$ia,$x,$Yb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($_e=="auth"){$Mc=true;foreach((array)$_SESSION["pwds"]as$li=>$Ig){foreach($Ig
as$N=>$gi){foreach($gi
as$V=>$G){if($G!==null){if($Mc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Mc=false;}$Kb=$_SESSION["db"][$li][$N][$V];foreach(($Kb?array_keys($Kb):array(""))as$m)echo"<a href='".h(auth_url($li,$N,$V,$m))."'>($Yb[$li]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$_e&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.0",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$ee=array();foreach($T
as$R=>$U)$ee[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ee).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($_e);if(DB==""||!$_e){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$_e&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($_e){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Ib=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'$Ib>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($_e!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'$Ib>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Ye;function
page_header($yh,$n="",$Wa=array(),$zh=""){global$ca,$ia,$b,$Yb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$_h=$yh.($zh!=""?": $zh":"");$Ah=strip_tags($_h.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Ah,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.0",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.0",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(75),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Yb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Pb=(is_array($X)?$X[1]:h($X));if($Pb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Pb</a> &raquo; ";}}echo"$yh\n";}}echo"<h2>$_h</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$ai=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$we=$_SESSION["messages"][$ai];if($we){echo"<div class='message'>".implode("</div>\n<div class='message'>",$we)."</div>\n";unset($_SESSION["messages"][$ai]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($_e=""){global$b,$Dh;echo'</div>

';switch_lang();if($_e!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$Dh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($_e);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Ce){while($Ce>=2147483648)$Ce-=4294967296;while($Ce<=-2147483649)$Ce+=4294967296;return(int)$Ce;}function
long2str($W,$qi){$vg='';foreach($W
as$X)$vg.=pack('V',$X);if($qi)return
substr($vg,0,end($W));return$vg;}function
str2long($vg,$qi){$W=array_values(unpack('V*',str_pad($vg,4*ceil(strlen($vg)/4),"\0")));if($qi)$W[]=strlen($vg);return$W;}function
xxtea_mx($wi,$vi,$ch,$Kd){return
int32((($wi>>5&0x7FFFFFF)^$vi<<2)+(($vi>>3&0x1FFFFFFF)^$wi<<4))^int32(($ch^$vi)+($Kd^$wi));}function
encrypt_string($Xg,$y){if($Xg=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Xg,true);$Ce=count($W)-1;$wi=$W[$Ce];$vi=$W[0];$Tf=floor(6+52/($Ce+1));$ch=0;while($Tf-->0){$ch=int32($ch+0x9E3779B9);$fc=$ch>>2&3;for($pf=0;$pf<$Ce;$pf++){$vi=$W[$pf+1];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$wi=int32($W[$pf]+$Be);$W[$pf]=$wi;}$vi=$W[0];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$wi=int32($W[$Ce]+$Be);$W[$Ce]=$wi;}return
long2str($W,false);}function
decrypt_string($Xg,$y){if($Xg=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Xg,false);$Ce=count($W)-1;$wi=$W[$Ce];$vi=$W[0];$Tf=floor(6+52/($Ce+1));$ch=int32($Tf*0x9E3779B9);while($ch){$fc=$ch>>2&3;for($pf=$Ce;$pf>0;$pf--){$wi=$W[$pf-1];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$vi=int32($W[$pf]-$Be);$W[$pf]=$vi;}$wi=$W[$Ce];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$vi=int32($W[0]-$Be);$W[0]=$vi;$ch=int32($ch-0x9E3779B9);}return
long2str($W,true);}$g='';$id=$_SESSION["token"];if(!$id)$_SESSION["token"]=rand(1,1e6);$Dh=get_token();$Bf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Bf[$y]=$X;}}function
add_invalid_login(){global$b;$Kc=get_temp_dir()."/adminer.invalid";$Xc=@fopen($Kc,"r+");if(!$Xc){$Xc=@fopen($Kc,"w");if(!$Xc)return;}flock($Xc,LOCK_EX);$Cd=unserialize(stream_get_contents($Xc));$vh=time();if($Cd){foreach($Cd
as$Dd=>$X){if($X[0]<$vh)unset($Cd[$Dd]);}}$Bd=&$Cd[$b->bruteForceKey()];if(!$Bd)$Bd=array($vh+30*60,0);$Bd[1]++;$Gg=serialize($Cd);rewind($Xc);fwrite($Xc,$Gg);ftruncate($Xc,strlen($Gg));flock($Xc,LOCK_UN);fclose($Xc);}$Ka=$_POST["auth"];if($Ka){$Cd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Bd=$Cd[$b->bruteForceKey()];$Ie=($Bd[1]>30?$Bd[0]-time():0);if($Ie>0)auth_error(lang(78,ceil($Ie/60)));session_regenerate_id();$li=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($li,$N,$V,$G);$_SESSION["db"][$li][$N][$V][$m]=true;if($Ka["permanent"]){$y=base64_encode($li)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Nf=$b->permanentLogin(true);$Bf[$y]="$y:".base64_encode($Nf?encrypt_string($G,$Nf):"");cookie("adminer_permanent",implode(" ",$Bf));}if(count($_POST)==1||DRIVER!=$li||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($li,$N,$V,$m));}elseif($_POST["logout"]){if($id&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80));}}elseif($Bf&&!$_SESSION["pwds"]){session_regenerate_id();$Nf=$b->permanentLogin();foreach($Bf
as$y=>$X){list(,$hb)=explode(":",$X);list($li,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($li,$N,$V,decrypt_string(base64_decode($hb),$Nf));$_SESSION["db"][$li][$N][$V][$m]=true;}}function
unset_permanent(){global$Bf;foreach($Bf
as$y=>$X){list($li,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($li==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Bf[$y]);}cookie("adminer_permanent",implode(" ",$Bf));}function
auth_error($n){global$b,$id;$Jg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Jg]||$_GET[$Jg])&&!$id)$n=lang(81);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(82,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Jg]&&$_GET[$Jg]&&ini_bool("session.use_only_cookies"))$n=lang(83);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(84),lang(85,implode(", ",$Hf)),false);page_footer("auth");exit;}$g=connect();}$Xb=new
Min_Driver($g);if(!is_object($g)||($fe=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($fe)?$fe:lang(86))));if($Ka&&$_POST["token"])$_POST["token"]=$Dh;$n='';if($_POST){if(!verify_token()){$xd="max_input_vars";$qe=ini_get($xd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$qe||$X<$qe)){$xd=$y;$qe=$X;}}}$n=(!$_POST["token"]&&$qe?lang(87,"'$xd'"):lang(79).' '.lang(88));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(89,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(90);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$gf=array(),$z=0){global$x;$ee=array();$w=array();$e=array();$Ta=array();$Rh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Jd=0;$Jd<count($K);$Jd++){$o=$I->fetch_field();$C=$o->name;$ff=$o->orgtable;$ef=$o->orgname;$J[$o->table]=$ff;if($gf&&$x=="sql")$ee[$Jd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($ff!=""){if(!isset($w[$ff])){$w[$ff]=array();foreach(indexes($ff,$h)as$v){if($v["type"]=="PRIMARY"){$w[$ff]=array_flip($v["columns"]);break;}}$e[$ff]=$w[$ff];}if(isset($e[$ff][$ef])){unset($e[$ff][$ef]);$w[$ff][$ef]=$Jd;$ee[$Jd]=$ff;}}if($o->charsetnr==63)$Ta[$Jd]=true;$Rh[$Jd]=$o->type;echo"<th".($ff!=""||$o->name!=$ef?" title='".h(($ff!=""?"$ff.":"").$ef)."'":"").">".h($C).($gf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Rh[$y]==254)$X="<code>$X</code>";}if(isset($ee[$y])&&!$e[$ee[$y]]){if($gf&&$x=="sql"){$R=$K[array_search("table=",$ee)];$_=$ee[$y].urlencode($gf[$R]!=""?$gf[$R]:$R);}else{$_="edit=".urlencode($ee[$y]);foreach($w[$ee[$y]]as$lb=>$Jd)$_.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($K[$Jd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Cg){$J=array();foreach(table_status('',true)as$gh=>$R){if($gh!=$Cg&&fk_support($R)){foreach(fields($gh)as$o){if($o["primary"]){if($J[$gh]){unset($J[$gh]);break;}$J[$gh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$pb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$pb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$ob,$Tc=array()){global$Yg,$Rh,$Yh,$Te;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($Rh[$U])&&!isset($Tc[$U]))array_unshift($Yg,$U);if($Tc)$Yg[lang(91)]=$Tc;echo
optionlist($Yg,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(92).')'.optionlist($ob,$o["collation"]).'</select>',($Yh?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Yh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(93).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Tc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(94).")".optionlist(explode("|",$Te),$o["on_delete"])."</select> ":" ");}function
process_length($be){global$qc;return(preg_match("~^\\s*\\(?\\s*$qc(?:\\s*,\\s*$qc)*+\\s*\\)?\\s*\$~",$be)&&preg_match_all("~$qc~",$be,$ke)?"(".implode(",",$ke[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$be)));}function
process_type($o,$mb="COLLATE"){global$Yh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Yh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$Ph){global$x;$Mb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Ph),($o["null"]?" NULL":" NOT NULL"),(isset($Mb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Mb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Mb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Mb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Mb))?$Mb:q($Mb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$ob,$U="TABLE",$Tc=array(),$tb=false){global$g,$yd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(95):lang(96)),'<td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(97),'<td>',lang(98);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(49),(support("comment")?"<td id='label-comment'".($tb?"":" class='hidden'").">".lang(47):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(99)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$hf=$o[($_POST?"orig":"field")];$Tb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$hf=="");echo'<tr',($Tb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$yd),$o["inout"]):""),'<th>';if($Tb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($hf),'">
';edit_type("fields[$s]",$o,$ob,$Tc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($tb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(99)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.0' alt='^' title='".lang(100)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.0' alt='v' title='".lang(101)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($hf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.0' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$Vd=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$Vd,0,array($o));break;}if(isset($o["field"]))$Vd=$D;$D++;}}elseif($_POST["down"]){$Vc=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$Vc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Vc));break;}if(key($_POST["down"])==$y)$Vc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($ad,$Pf,$e,$Se){if(!$Pf)return
true;if($Pf==array("ALL PRIVILEGES","GRANT OPTION"))return($ad=="GRANT"?queries("$ad ALL PRIVILEGES$Se WITH GRANT OPTION"):queries("$ad ALL PRIVILEGES$Se")&&queries("$ad GRANT OPTION$Se"));return
queries("$ad ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Pf).$e).$Se);}function
drop_create($Zb,$i,$ac,$sh,$cc,$A,$ve,$te,$ue,$Pe,$Fe){if($_POST["drop"])query_redirect($Zb,$A,$ve);elseif($Pe=="")query_redirect($i,$A,$ue);elseif($Pe!=$Fe){$Db=queries($i);queries_redirect($A,$te,$Db&&queries($Zb));if($Db)queries($ac);}else
queries_redirect($A,$te,queries($sh)&&queries($cc)&&queries($Zb)&&queries($i));}function
create_trigger($Se,$K){global$x;$xh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Se.$xh:$xh.$Se).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($rg,$K){global$yd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($yd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $rg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Te;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Te)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Te)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Kc,$Bh){$J=pack("a100a8a8a8a12a12",$Kc,644,0,0,decoct($Bh->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($J);$s++)$fb+=ord($J[$s]);$J.=sprintf("%06o",$fb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Bh->send();echo
str_repeat("\0",511-($Bh->size+511)%512);}function
ini_bytes($xd){$X=ini_get($xd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($_f){global$x,$g;$ci=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($_f[$x]?"<a href='$ci[$x]$_f[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Dh,$n,$Yb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(103),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(104),drop_databases($_POST["db"]));page_header(lang(105),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(106),'privileges'=>lang(68),'processlist'=>lang(107),'variables'=>lang(108),'status'=>lang(109),'replication'=>lang(110),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(111,$Yb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(112,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$yg=support("scheme");$ob=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(113)."</a>"."<td>".lang(114)."<td>".lang(115)."<td>".lang(116)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(117)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$qg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$qg' id='$m'>".h($m)."</a>";$nb=nbsp(db_collation($m,$ob));echo"<td>".(support("database")?"<a href='$qg".($yg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$nb</a>":$nb),"<td align='right'><a href='$qg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Dh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(120),true);page_footer("ns");exit;}}$Te="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($yb){$this->size+=strlen($yb);fwrite($this->handler,$yb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$qc="'(?:''|[^'\\\\]|\\\\.)*'";$yd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Xb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(121):lang(122):lang(123)).": ".h($a),$n);$b->selectLinks($S);$sb=$S["Comment"];if($sb!="")echo"<p>".lang(47).": ".h($sb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(124)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(125)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(91)."</h3>\n";$Tc=foreign_keys($a);if($Tc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(126)."<td>".lang(127)."<td>".lang(94)."<td>".lang(93)."<td>&nbsp;</thead>\n";foreach($Tc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(128).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(129)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(130)."</h3>\n";$Oh=triggers($a);if($Oh){echo"<table cellspacing='0'>\n";foreach($Oh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(128)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(131)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$ih=array();$jh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$ke,PREG_SET_ORDER);foreach($ke
as$s=>$B){$ih[$B[1]]=array($B[2],$B[3]);$jh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Eh=0;$Qa=-1;$xg=array();$eg=array();$Zd=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Ef=0;$xg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Ef+=1.25;$o["pos"]=$Ef;$xg[$R]["fields"][$C]=$o;}$xg[$R]["pos"]=($ih[$R]?$ih[$R]:array($Eh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$Xd=$Qa;if($ih[$R][1]||$ih[$X["table"]][1])$Xd=min(floatval($ih[$R][1]),floatval($ih[$X["table"]][1]))-1;else$Qa-=.1;while($Zd[(string)$Xd])$Xd-=.0001;$xg[$R]["references"][$X["table"]][(string)$Xd]=array($X["source"],$X["target"]);$eg[$X["table"]][$R][(string)$Xd]=$X["target"];$Zd[(string)$Xd]=true;}}$Eh=max($Eh,$xg[$R]["pos"][0]+2.5+$Ef);}echo'<div id="schema" style="height: ',$Eh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$jh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Eh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($xg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$ph=>$fg){foreach($fg
as$Xd=>$bg){$Yd=$Xd-$ih[$C][1];$s=0;foreach($bg[0]as$Qg)echo"\n<div class='references' title='".h($ph)."' id='refs$Xd-".($s++)."' style='left: $Yd"."em; top: ".$R["fields"][$Qg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Yd)."em;'></div></div>";}}foreach((array)$eg[$C]as$ph=>$fg){foreach($fg
as$Xd=>$e){$Yd=$Xd-$ih[$C][1];$s=0;foreach($e
as$oh)echo"\n<div class='references' title='".h($ph)."' id='refd$Xd-".($s++)."' style='left: $Yd"."em; top: ".$R["fields"][$oh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Yd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($xg
as$C=>$R){foreach((array)$R["references"]as$ph=>$fg){foreach($fg
as$Xd=>$bg){$ze=$Eh;$oe=-10;foreach($bg[0]as$y=>$Qg){$Ff=$R["pos"][0]+$R["fields"][$Qg]["pos"];$Gf=$xg[$ph]["pos"][0]+$xg[$ph]["fields"][$bg[1][$y]]["pos"];$ze=min($ze,$Ff,$Gf);$oe=max($oe,$Ff,$Gf);}echo"<div class='references' id='refl$Xd' style='left: $Xd"."em; top: $ze"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($oe-$ze)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(132),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Ab="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Ab.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Ab,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Bc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Fd=preg_match('~sql~',$_POST["format"]);if($Fd){echo"-- Adminer $ia ".$Yb[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Zg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Fd&&preg_match('~CREATE~',$Zg)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($Zg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Fd){if($Zg)echo
use_sql($m).";\n\n";$nf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$rg){foreach(get_rows("SHOW $rg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $rg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$nf.=($Zg!='DROP+CREATE'?"DROP $rg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$nf.=($Zg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($nf)echo"DELIMITER ;;\n\n$nf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$oi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Gb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Gb){if($Bc=="tar"){$Bh=new
TmpFile;ob_start(array($Bh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$oi[]=$C;elseif($Gb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Fd&&$_POST["triggers"]&&$R&&($Oh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Oh\nDELIMITER ;\n";if($Bc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Bh);}elseif($Fd)echo"\n";}}foreach($oi
as$ni)$b->dumpTable($ni,$_POST["table_style"],1);if($Bc=="tar")echo
pack("x512");}}}if($Fd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Jb=array('','USE','DROP+CREATE','CREATE');$kh=array('','DROP+CREATE','CREATE');$Hb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Hb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(133)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(134)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Jb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(135)):"").(support("event")?checkbox("events",1,$K["events"],lang(136)):"")),"<tr><th>".lang(115)."<td>".html_select('table_style',$kh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(130)):""),"<tr><th>".lang(137)."<td>".html_select('data_style',$Hb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$Dh,'">

<table cellspacing="0">
';$Jf=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(115)."</label>","<th style='text-align: right;'><label class='block'>".lang(137)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$oi="";$lh=tables_list();foreach($lh
as$C=>$U){$If=preg_replace('~_.*~','',$C);$db=($a==""||$a==(substr($a,-1)=="%"?"$If%":$C));$Mf="<tr><td>".checkbox("tables[]",$C,$db,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$oi.="$Mf\n";else
echo"$Mf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Jf[$If]++;}echo$oi;if($lh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$If=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$If%",$m,"formUncheck('check-databases');","block")."\n";$Jf[$If]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Mc=true;foreach($Jf
as$y=>$X){if($y!=""&&$X>1){echo($Mc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Mc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(138)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$ad=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($ad?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$ad||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$kd=&get_session("queries");$jd=&$kd[DB];if(!$n&&$_POST["clear"]){$jd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$Xc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Xc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Xc?fread($Xc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Tf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$jd||reset(end($jd))!=$Tf){restart_session();$jd[]=array($Tf,time());set_session("queries",$kd);stop_session();}}$Rg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ob=";";$D=0;$nc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$rb=0;$sc=array();$sf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Fh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$ec=$b->dumpFormat();unset($ec["sql"]);while($H!=""){if(!$D&&preg_match("~^$Rg*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Ob=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Ob)."\\s*|$sf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Vc,$Ef)=$B[0];if(!$Vc&&$Xc&&!feof($Xc))$H.=fread($Xc,1e5);else{if(!$Vc&&rtrim($H)=="")break;$D=$Ef+strlen($Vc);if($Vc&&rtrim($Vc)!=$Ob){while(preg_match('('.($Vc=='/*'?'\\*/':($Vc=='['?']':(preg_match('~^-- |^#~',$Vc)?"\n":preg_quote($Vc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$vg=$B[0][0];if(!$vg&&$Xc&&!feof($Xc))$H.=fread($Xc,1e5);else{$D=$B[0][1]+strlen($vg);if($vg[0]!="\\")break;}}}else{$nc=false;$Tf=substr($H,0,$Ef);$rb++;$Mf="<pre id='sql-$rb'><code class='jush-$x'>".$b->sqlCommandQuery($Tf)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Rg*+ATTACH\\b~i",$Tf,$B)){echo$Mf,"<p class='error'>".lang(139)."\n";$sc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Mf;ob_flush();flush();}$Vg=microtime(true);if($g->multi_query($Tf)&&is_object($h)&&preg_match("~^$Rg*+USE\\b~i",$Tf))$h->query($Tf);do{$I=$g->store_result();$vh=" <span class='time'>(".format_time($Vg).")</span>".(strlen($Tf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Tf))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Mf:""),"<p class='error'>".lang(140).($g->errno?" ($g->errno)":"").": ".error()."\n";$sc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$gf=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Je=$I->num_rows;echo"<p>".($Je?($z&&$Je>$z?lang(141,$z):"").lang(142,$Je):""),$vh;$t="export-$rb";$Ac=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(70)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$ec,$xa["format"])."<input type='hidden' name='query' value='".h($Tf)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$Dh'></span>\n";if($h&&preg_match("~^($Rg|\\()*+SELECT\\b~i",$Tf)&&($_c=explain($h,$Tf))){$t="explain-$rb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$Ac","<div id='$t' class='hidden'>\n";select($_c,$h,$gf);echo"</div>\n";}else
echo$Ac;echo"</form>\n";}}else{if(preg_match("~^$Rg*+(CREATE|DROP|ALTER)$Rg++(DATABASE|SCHEMA)\\b~i",$Tf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(143,$g->affected_rows)."$vh\n";}$Vg=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($nc)echo"<p class='message'>".lang(144)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(145,$rb-count($sc))," <span class='time'>(".format_time($Fh).")</span>\n";}elseif($sc&&$rb>1)echo"<p class='error'>".lang(140).": ".implode("",$sc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$xc="<input type='submit' value='".lang(146)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Tf=$_GET["sql"];if($_POST)$Tf=$_POST["query"];elseif($_GET["history"]=="all")$Tf=$jd;elseif($_GET["history"]!="")$Tf=$jd[$_GET["history"]][0];echo"<p>";textarea("query",$Tf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$xc\n",lang(147).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(148)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$xc":lang(149)),"</div></fieldset>\n","<fieldset><legend>".lang(150)."</legend><div>",lang(151,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(152).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(153))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(154))."\n","<input type='hidden' name='token' value='$Dh'>\n";if(!isset($_GET["import"])&&$jd){print_fieldset("history",lang(155),$_GET["history"]!="");for($X=end($jd);$X;$X=prev($jd)){$y=key($jd);list($Tf,$vh,$ic)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$vh)."'>".@date("H:i:s",$vh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Tf)))),80,"</code>").($ic?" <span class='time'>($ic)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(156)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(157)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Zh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Zh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Zh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$Uh=unique_array($_GET["where"],$w);$Wf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(158),$Xb->delete($a,$Wf,!$Uh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Zh){if(!$O)redirect($A);queries_redirect($A,lang(159),$Xb->update($a,$O,$Wf,!$Uh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Xb->insert($a,$O);$Wd=($I?last_id():0);queries_redirect($A,lang(160,($Wd?" $Wd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($C);$M[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Xb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Xb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Xb->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Xb->primary),"auto_increment"=>($y==$Xb->primary));}}}edit_form($a,$p,$K,$Zh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$uf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$uf[$y]=$y;$dg=referencable_primary($a);$Tc=array();foreach($dg
as$gh=>$o)$Tc[str_replace("`","``",$gh)."`".str_replace("`","``",$o["field"])]=$gh;$jf=array();$S=array();if($a!=""){$jf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(161),drop_tables(array($a)));else{$p=array();$Da=array();$di=false;$Rc=array();$if=reset($jf);$Aa=" FIRST";foreach($K["fields"]as$y=>$o){$q=$Tc[$o["type"]];$Ph=($q!==null?$dg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Rf=process_field($o,$Ph);$Da[]=array($o["orig"],$Rf,$Aa);if($Rf!=process_field($if,$if)){$p[]=array($o["orig"],$Rf,$Aa);if($o["orig"]!=""||$Aa)$di=true;}if($q!==null)$Rc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Tc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Ph["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$di=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$if=next($jf);if(!$if)$Aa="";}}$wf="";if($uf[$K["partition_by"]]){$xf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$xf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$wf.="\nPARTITION BY $K[partition_by]($K[partition])".($xf?" (".implode(",",$xf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$wf.="\nREMOVE PARTITIONING";$se=lang(162);if($a==""){cookie("adminer_engine",$K["Engine"]);$se=lang(163);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$se,alter_table($a,$C,($x=="sqlite"&&($di||$Rc)?$Da:$p),$Rc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$wf));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Rh["int"])?"int":(isset($Rh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($jf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Yc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Yc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$xf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Yc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$xf[""]="";$K["partition_names"]=array_keys($xf);$K["partition_values"]=array_values($xf);}}}$ob=collations();$pc=engines();foreach($pc
as$oc){if(!strcasecmp($oc,$K["Engine"])){$K["Engine"]=$oc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(164),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($pc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(165).")")+$pc,$K["Engine"])."</select>":""),' ',($ob&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(92).")")+$ob,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$tb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$tb){foreach($K["fields"]as$o){if($o["comment"]!=""){$tb=true;break;}}}edit_fields($K["fields"],$ob,"TABLE",$Tc,$tb);echo'</table>
<p>
',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(166),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($tb?" checked":"").">".lang(47)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($tb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}if(support("partitioning")){$vf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(167),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$uf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(168),': <input type="number" name="partitions" class="size',($vf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($vf?"":" class='hidden'"),'>
<thead><tr><th>',lang(169),'<th>',lang(170),'</thead>
';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$td=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$td[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$td[]="SPATIAL";$w=indexes($a);$Kf=array();if($x=="mongo"){$Kf=$w["_id_"];unset($td[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$td)){$e=array();$ce=array();$Qb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$be=$v["lengths"][$y];$Pb=$v["descs"][$y];$O[]=idf_escape($d).($be?"(".(+$be).")":"").($Pb?" DESC":"");$e[]=$d;$ce[]=($be?$be:null);$Qb[]=$Pb;}}if($e){$yc=$w[$C];if($yc){ksort($yc["columns"]);ksort($yc["lengths"]);ksort($yc["descs"]);if($v["type"]==$yc["type"]&&array_values($yc["columns"])===$e&&(!$yc["lengths"]||array_values($yc["lengths"])===$ce)&&array_values($yc["descs"])===$Qb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$yc)$c[]=array($yc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(171),alter_indexes($a,$c));}page_header(lang(124),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(172),'<th><input type="submit" class="wayoff">',lang(173),'<th id="label-name">',lang(174);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.0' alt='+' title='<?php echo
lang(99),'\'></noscript>&nbsp;
</thead>
';if($Kf){echo"<tr><td>PRIMARY<td>";foreach($Kf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Jd=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Jd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Jd][type]",array(-1=>"")+$td,$v["type"],($Jd==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Jd][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(45)."'",($p?array_combine($p,$p):$p),$d),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Jd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(97)."'>":""),($x!="sql"?checkbox("indexes[$Jd][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Jd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Jd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.0' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Jd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(175),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(176),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$ah=true;$Vd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$ah=false;$Vd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Vd),lang(177),$ah);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(178));}}page_header(DB!=""?lang(64):lang(106),$n,array(),h(DB));$ob=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ob);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$ad){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ad,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ob?html_select("collation",array(""=>"(".lang(92).")")+$ob,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(99)."'>\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(179));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(180));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(181));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(182).": ".h($da),$n);$rg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$rd=array();$nf=array();foreach($rg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$nf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$rd[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($rg["fields"]as$y=>$o){if(in_array($y,$rd)){$X=process_input($o);if($X===false)$X="''";if(isset($nf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($nf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(183,$g->affected_rows)."\n";}while($g->next_result());if($nf)select($g->query("SELECT ".implode(", ",$nf)));}}echo'
<form action="" method="post">
';if($rd){echo"<table cellspacing='0'>\n";foreach($rd
as$y){$o=$rg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(182),'">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$se=($_POST["drop"]?lang(184):($C!=""?lang(185):lang(186)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$oh=array();foreach($K["source"]as$y=>$X)$oh[$y]=$K["target"][$y];$K["target"]=$oh;}if($x=="sqlite")queries_redirect($A,$se,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Zb="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Zb,$A,$se);else{query_redirect($c.($C!=""?"$Zb,":"")."\nADD".format_foreign_key($K),$A,$se);$n=lang(187)."<br>$n";}}}page_header(lang(188),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Tc=foreign_keys($a);$K=$Tc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Qg=array_keys(fields($a));$oh=($a===$K["table"]?$Qg:array_keys(fields($K["table"])));$cg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(189),':
',html_select("table",$cg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(190),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(126),'<th id="label-target">',lang(127),'</thead>
';$Jd=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Qg,$X,($Jd==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$oh,$K["target"][$y],1,"label-target");$Jd++;}echo'</table>
<p>
',lang(94),': ',html_select("on_delete",array(-1=>"")+explode("|",$Te),$K["on_delete"]),' ',lang(93),': ',html_select("on_update",array(-1=>"")+explode("|",$Te),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(191),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$kf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$kf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ga=" AS\n$K[select]";$A=ME."table=".urlencode($C);$se=lang(192);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$kf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$se);else{$qh=$C."_adminer_".uniqid();drop_create("DROP $kf ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($qh).$Ga,"DROP $U ".table($qh),($_POST["drop"]?substr(ME,0,-1):$A),lang(193),$se,lang(194),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($kf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(195)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(121)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ad=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Wg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(196));elseif(in_array($K["INTERVAL_FIELD"],$Ad)&&isset($Wg[$K["STATUS"]])){$wg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(197):lang(198)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$wg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$wg)."\n".$Wg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(199).": ".h($aa):lang(200)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(174),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(201),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(202),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(203),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Ad,$K["INTERVAL_FIELD"]),'<tr><th>',lang(109),'<td>',html_select("STATUS",$Wg,$K["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(204)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$rg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$qh="$K[name]_adminer_".uniqid();drop_create("DROP $rg ".idf_escape($da),create_routine($rg,$K),"DROP $rg ".idf_escape($K["name"]),create_routine($rg,array("name"=>$qh)+$K),"DROP $rg ".idf_escape($qh),substr(ME,0,-1),lang(205),lang(206),lang(207),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(208):lang(209)).": ".h($da):(isset($_GET["function"])?lang(210):lang(211))),$n);if(!$_POST&&$da!=""){$K=routine($da,$rg);$K["name"]=$da;}$ob=get_vals("SHOW CHARACTER SET");sort($ob);$sg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($sg?lang(19).": ".html_select("language",$sg,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ob,$rg);if(isset($_GET["function"])){echo"<tr><td>".lang(212);edit_type("returns",$K["returns"],$ob);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(213));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(214));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(215));else
redirect($_);}page_header($fa!=""?lang(216).": ".h($fa):lang(217),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(218));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(219));}page_header($ga!=""?lang(220).": ".h($ga):lang(221),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Nh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Nh["Timing"])&&in_array($_POST["Event"],$Nh["Event"])&&in_array($_POST["Type"],$Nh["Type"])){$Se=" ON ".table($a);$Zb="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Se:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Zb,$A,lang(222));else{if($C!="")queries($Zb);queries_redirect($A,($C!=""?lang(223):lang(224)),queries(create_trigger($Se,$_POST)));if($C!="")queries(create_trigger($Se,$K+array("Type"=>reset($Nh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(225).": ".h($C):lang(226)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(227),'<td>',html_select("Timing",$Nh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(228),'<td>',html_select("Event",$Nh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Nh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$Nh["Type"],$K["Type"]),'</table>
<p>',lang(174),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Pf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$zb)$Pf[$zb][$K["Privilege"]]=$K["Comment"];}$Pf["Server Admin"]+=$Pf["File access on server"];$Pf["Databases"]["Create routine"]=$Pf["Procedures"]["Create routine"];unset($Pf["Procedures"]["Create routine"]);$Pf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Pf["Columns"][$X]=$Pf["Tables"][$X];unset($Pf["Server Admin"]["Usage"]);foreach($Pf["Tables"]as$y=>$X)unset($Pf["Databases"][$y]);$Ee=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Ee[$X]=(array)$Ee[$X]+(array)$_POST["grants"][$y];}$bd=array();$Qe="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$ke,PREG_SET_ORDER)){foreach($ke
as$X){if($X[1]!="USAGE")$bd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$bd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Qe=$B[1];}}if($_POST&&!$n){$Re=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Re",ME."privileges=",lang(229));else{$Ge=q($_POST["user"])."@".q($_POST["host"]);$yf=$_POST["pass"];if($yf!=''&&!$_POST["hashed"]){$yf=$g->result("SELECT PASSWORD(".q($yf).")");$n=!$yf;}$Db=false;if(!$n){if($Re!=$Ge){$Db=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ge IDENTIFIED BY PASSWORD ".q($yf));$n=!$Db;}elseif($yf!=$Qe)queries("SET PASSWORD FOR $Ge = ".q($yf));}if(!$n){$og=array();foreach($Ee
as$Le=>$ad){if(isset($_GET["grant"]))$ad=array_filter($ad);$ad=array_keys($ad);if(isset($_GET["grant"]))$og=array_diff(array_keys(array_filter($Ee[$Le],'strlen')),$ad);elseif($Re==$Ge){$Oe=array_keys((array)$bd[$Le]);$og=array_diff($Oe,$ad);$ad=array_diff($ad,$Oe);unset($bd[$Le]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Le,$B)&&(!grant("REVOKE",$og,$B[2]," ON $B[1] FROM $Ge")||!grant("GRANT",$ad,$B[2]," ON $B[1] TO $Ge"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Re!=$Ge)queries("DROP USER $Re");elseif(!isset($_GET["grant"])){foreach($bd
as$Le=>$og){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Le,$B))grant("REVOKE",array_keys($og),$B[2]," ON $B[1] FROM $Ge");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(230):lang(231)),!$n);if($Db)$g->query("DROP USER $Ge");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(138)),$n,array("privileges"=>array('',lang(68))));if($_POST){$K=$_POST;$bd=$Ee;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Qe;if($Qe!="")$K["hashed"]=true;$bd[(DB==""||$bd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(232),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($bd
as$Le=>$ad){echo'<th>'.($Le!="*.*"?"<input name='objects[$s]' value='".h($Le)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(123),"Columns"=>lang(45),"Procedures"=>lang(233),)as$zb=>$Pb){foreach((array)$Pf[$zb]as$Of=>$sb){echo"<tr".odd()."><td".($Pb?">$Pb<td":" colspan='2'").' lang="en" title="'.h($sb).'">'.h($Of);$s=0;foreach($bd
as$Le=>$ad){$C="'grants[$s][".h(strtoupper($Of))."]'";$Y=$ad[strtoupper($Of)];if($zb=="Server Admin"&&$Le!=(isset($bd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(234)."<option value='0'".($Y=="0"?" selected":"").">".lang(235)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Of=="All privileges"?" id='grants-$s-all'":($Of=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Qd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Qd++;}queries_redirect(ME."processlist=",lang(236,$Qd),$Qd||!$_POST["kill"]);}page_header(lang(107),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(237).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(238,max_connections()),"<p><input type='submit' value='".lang(239)."'>\n";}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["replication"])){page_header(lang(110));echo"<h3>".lang(240).doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$ie=replication_status("MASTER");if(!$ie)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ie[0]as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}$Ng=replication_status("SLAVE");if($Ng){echo"<h3>".lang(241).doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($Ng[0]as$Mg){echo"<table cellspacing='0'>\n";foreach($Mg
as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Tc=column_foreign_keys($a);$Ne="";if($S["Oid"]){$Ne=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ne));}parse_str($_COOKIE["adminer_import"],$ya);$pg=array();$e=array();$uh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$uh=$b->selectLengthProcess();}$pg+=$o["privileges"];}list($M,$cd)=$b->selectColumnsProcess($e,$w);$Ed=count($cd)<count($M);$Z=$b->selectSearchProcess($p,$w);$df=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$Yc=($M?implode(", ",$M):"*".($Ne?", $Ne":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$dd=($cd&&$Ed?"\nGROUP BY ".implode(", ",$cd):"").($df?"\nORDER BY ".implode(", ",$df):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Vh=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($Vh,$p);$J=$Xb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$si=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$si[]="((".implode(") OR (",$eb)."))";}$si=($si?"\nWHERE ".implode(" AND ",$si):"");$Kf=$Xh=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Kf=array_flip($v["columns"]);$Xh=($M?$Kf:array());break;}}foreach((array)$Xh
as$y=>$X){if(in_array(idf_escape($y),$M))unset($Xh[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Xh===array())$H="SELECT $Yc$si$dd";else{$Th=array();foreach($_POST["check"]as$X)$Th[]="(SELECT".limit($Yc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$dd,1).")";$H=implode(" UNION ALL ",$Th);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Tc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Xh===array()&&is_array($_POST["check"]))||$Ed){$I=($_POST["delete"]?$Xb->delete($a,$si):($_POST["clone"]?queries("INSERT $H$si"):$Xb->update($a,$O,$si)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ri="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Xb->delete($a,$ri,1):($_POST["clone"]?queries("INSERT".limit1($H,$ri)):$Xb->update($a,$O,$ri)));if(!$I)break;$za+=$g->affected_rows;}}}$se=lang(242,$za);if($_POST["clone"]&&$I&&$za==1){$Wd=last_id();if($Wd)$se=lang(160," $Wd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$se,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(243);else{$I=true;$za=0;foreach($_POST["val"]as$Vh=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$Xb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Vh,$p),!($Ed||$Xh===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(242,$za),$I);}}elseif(!is_string($Jc=get_file("csv_file",true)))$n=upload_error($Jc);elseif(!preg_match('~~u',$Jc))$n=lang(244);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$pb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Jc,$ke);$za=count($ke[0]);$Xb->begin();$Dg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($ke[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Dg]*)$Dg~",$X.$Dg,$le);if(!$y&&!array_diff($le[1],$pb)){$pb=$le[1];$za--;}else{$O=array();foreach($le[1]as$s=>$lb)$O[idf_escape($pb[$s])]=($lb==""&&$p[$pb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$L[]=$O;}}$I=(!$L||$Xb->insertUpdate($a,$L,$Kf));if($I)$I=$Xb->commit();queries_redirect(remove_from_uri("page"),lang(245,$za),$I);$Xb->rollback();}}}$gh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $gh",$n);$O=null;if(isset($pg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Tc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(246).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($df,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($uh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Wc=$g->result(count_rows($a,$Z,$Ed,$cd));$E=floor(max(0,$Wc-1)/$z);}$Ag=$M;if(!$Ag){$Ag[]="*";if($Ne)$Ag[]=$Ne;}$_b=convert_fields($e,$p,$M);if($_b)$Ag[]=substr($_b,2);$I=$Xb->select($a,$Ag,$Z,$cd,$df,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$mc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$cd&&$Ed&&$x=="sql")$Wc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$gh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$cd&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(247)."</a>");$De=array();$Zc=array();reset($M);$Yf=1;foreach($L[0]as$y=>$X){if($y!=$Ne){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$Yf):($X["fun"]?"*":$y));if($C!=""){$Yf++;$De[$y]=$C;$d=idf_escape($y);$nd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Pb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($nd.($df[0]==$d||$df[0]==$y||(!$df&&$Ed&&$cd[0]==$d)?$Pb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($nd.$Pb)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(53).'" class="text jsonly"> =</a>';echo"</span>";}$Zc[$y]=$X["fun"];next($M);}}$ce=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$ce[$y]=max($ce[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(248):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Tc)as$Ce=>$K){$Uh=unique_array($L[$Ce],$w);if(!$Uh){$Uh=array();foreach($L[$Ce]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Uh[$y]=$X;}}$Vh="";foreach($Uh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$Vh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$cd&&$M?"":"<td>".checkbox("check[]",substr($Vh,1),in_array(substr($Vh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ed||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Vh)."'>".lang(249)."</a>"));foreach($K
as$y=>$X){if(isset($De[$y])){$o=$p[$y];if($X!=""&&(!isset($mc[$y])||$mc[$y]!=""))$mc[$y]=(is_mail($X)?$De[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Vh;if(!$_&&$X!==null){foreach((array)$Tc[$y]as$q){if(count($Tc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Qg)$_.=where_link($s,$q["target"][$s],$L[$Ce][$Qg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Uh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Uh
as$Kd=>$W)$_.=where_link($s++,$Kd,$W);}$X=select_value($X,$_,$o,$uh);$t=h("val[$Vh][".bracket_escape($y)."]");$Y=$_POST["val"][$Vh][bracket_escape($y)];$hc=!is_array($K[$y])&&is_utf8($X)&&$L[$Ce][$y]==$K[$y]&&!$Zc[$y];$th=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$hc)||$Y!==null){$fd=h($Y!==null?$Y:$K[$y]);echo"<td>".($th?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$fd</textarea>":"<input name='$t' value='$fd' size='$ce[$y]'>");}else{$ge=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ge?2:($th?1:0)).($hc?"":", '".h(lang(250))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$Ce]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$wc=true;if($_GET["page"]!="last"){if(!+$z)$Wc=count($L);elseif($x!="sql"||!$Ed){$Wc=($Ed?false:found_rows($S,$Z));if($Wc<max(1e4,2*($E+1)*$z))$Wc=reset(slow_query(count_rows($a,$Z,$Ed,$cd)));else$wc=false;}}if(+$z&&($Wc===false||$Wc>$z||$E)){echo"<p class='pages'>";$ne=($Wc===false?$E+(count($L)>=$z?2:1):floor(($Wc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(251)."', '".($E+1)."'), event); return false;\">".lang(251)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($ne,$E+5);$s++)echo
pagination($s,$E);if($ne>0){echo($E+5<$ne?" ...":""),($wc&&$Wc!==false?pagination($ne,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ne'>".lang(252)."</a>");}echo(($Wc===false?count($L)+1:$Wc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(253).'...\');" class="loadmore">'.lang(254).'</a>':'');}else{echo
lang(251).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ne>$E?pagination($E+1,$E).($ne>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Wc!==false?"(".($wc?"":"~ ").lang(142,$Wc).") ":"");$Ub=($wc?"":"~ ").$Wc;echo
checkbox("all",1,0,lang(255),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Ub' : checked); selectCount('selected2', this.checked || !checked ? '$Ub' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(247),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(243).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(118),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(237),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Uc=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Uc['sql']);break;}}if($Uc){print_fieldset("export",lang(70)." <span id='selected2'></span>");$of=$b->dumpOutput();echo($of?html_select("output",$of,$ya["output"])." ":""),html_select("format",$Uc,$ya["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$cd&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($mc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Dh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(109):lang(108));$ki=($P?show_status():show_variables());if(!$ki)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ki
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$dh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($dh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($Tg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($dh[$y]))$dh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($dh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$mh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($mh&&!$n&&!$_POST["search"]){$I=true;$se="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$se=lang(256);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$se=lang(257);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$se=lang(258);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$se=lang(259);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$se=lang(260);}elseif(!$_POST["tables"])$se=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$se.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$se,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(261)."</h3>\n";$lh=tables_list();if(!$lh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(262)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Vb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(123),'<td>'.lang(263).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(114).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(264).$Vb,'<td>'.lang(265).$Vb,'<td>'.lang(266).$Vb,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(267).$Vb,(support("comment")?'<td>'.lang(47).$Vb:''),"</thead>\n";$T=0;foreach($lh
as$C=>$U){$ni=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($ni?"views[]":"tables[]"),$C,in_array($C,$mh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($ni){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(121):lang(122)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(125)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($lh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$hi="<input type='submit' value='".lang(268)."'".on_help("'VACUUM'")."> ";$Ze="<input type='submit' name='optimize' value='".lang(269)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>".($x=="sqlite"?$hi:($x=="pgsql"?$hi.$Ze:($x=="sql"?"<input type='submit' value='".lang(270)."'".on_help("'ANALYZE TABLE'")."> ".$Ze."<input type='submit' name='check' value='".lang(271)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(272)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(273)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(119)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(274).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(275)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(276)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Dh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(195)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(135)."</h3>\n";$tg=routines();if($tg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(174).'<td>'.lang(46).'<td>'.lang(212)."<td>&nbsp;</thead>\n";odd('');foreach($tg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(128)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(211).'</a>':'').'<a href="'.h(ME).'function=">'.lang(210)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(277)."</h3>\n";$Fg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Fg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($Fg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(217)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$fi=types();if($fi){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($fi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(221)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(136)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."<td>".lang(278)."<td>".lang(201)."<td>".lang(202)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(279)."<td>".$K["Execute at"]:lang(203)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(128).'</a>';}echo"</table>\n";$uc=$g->result("SELECT @@event_scheduler");if($uc&&$uc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($uc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(200)."</a>\n";}if($lh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();