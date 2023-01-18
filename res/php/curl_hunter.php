<?php
    $url='https://www.amazon.com/Notebooks-Laptop-Computers/b?ie=UTF8&node=565108';
    $urlt='https://localhost/res/php/curl_hunter.php';
    $laptop='Ноутбук';
    $model='';
    $price='';
    $os='';
    $ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch,CURLOPT_HEADER,true);
	curl_setopt($ch,CURLINFO_HEADER_OUT,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_ENCODING,'br,deflate,gzip');
	$result=curl_exec($ch);echo $result.'<br><br>';
	echo print_r(curl_getinfo($ch),1).'<br><br>';
	curl_close($ch);
    print_r(getallheaders());
?>

<!-- 
    $bracket_system = "(\\(((?>[^()]+)|(?-2))*\\))"; // (reuseable)
    $bracket_systems = "((?>[^()]+)?$bracket_system)*(?>[^()]+)?"; // (reuseable)
    $equation = "$bracket_systems=$bracket_systems"; // Both side of the equation must be contain valid bracket systems
    var_dump(preg_match("/^$equation\$/","a*(a-(2a+2))=4(a+3)-2(a-(a-2))")); // Outputs 'int(1)'
    var_dump(preg_match("/^$equation\$/","a*(a-(2a+2)=4(a+3)-2(a-(a-2)))")); // Outputs 'int(0)' 
-->

<!-- 
    first try(failed): curl_setopt($ch,CURLOPT_COOKIE,'ipp_key=v1672148172995/v33947245bb5ad87a72e273/37r7VFO1bUIqFiM/MIeohA==;gdpr=0;ipp_uid=1672148172995/U79aoB98u2JLsRZl/gluFpafrSguOnL4COHFx8g==;rerf=AAAAAGOq9M1GRmCGAxANAg==;_yasc=Jq2S2UNFMSORzhllb/B2H3QnSXE+ivYBaW+LvXhlnCn7j/OduhFiegE1isX7LA==;_gid=GA1.2.1429754242.1672148172;L=c2kIdkkORgVEfQd4UGFNfnYDb31jYEJcAhtfCQBZIz0=.1668498718.15162.324864.2d8eba62f85744011a21b42649cdbf75;i=0j1fGSIYA1fe2QDz7SlAIcuDapXiMsJGlgf9i+JXoxreSS8Ov17TOngque57IksLLzR08/PivjeIvzQRjKv0hVUJxzA=;sessionid2=3:1668498718.5.0.1668498718036:5-JmVg:3e.1.2:1|197246526.0.2|3:10261193.67071.fakesign0000000000000000000;yp=1983858718.udn.cDpzaW5lZC5lZA%3D%3D;yabs-sid=2158180501668498659;is_gdpr=0;yandexuid=6862082871668498657;Session_id=3:1668498718.5.0.1668498718036:5-JmVg:3e.1.2:1|197246526.0.2|3:10261193.67071.GGfKH1Noydt72nflNbyvdtaq-qU;_ym_d=1668498659;is_gdpr_b=CMyzPRDClQEoAg==;ipp_uid=1672148169569/q3nMDcNcmq7wfFoE/QeXkbBK5XsL64vn7V8MgBg==;_ym_uid=1668498659312726172;ymex=1983858659.yrts.1668498659#1983858659.yrtsi.1668498659;lang=ru;ipp_static_key=1672198397727/cQlojRVEJTzhKJTLb7mwNw==;rerf=AAAAAGOq9MwoaHwzAyWQAg==;tmr_detect=1%7C1672198398110;ys=udn.cDpzaW5lZC5lZA%3D%3D#c_chck.197607378;rerf=AAAAAGOq9Mor+FNlAwQ1Ag==;ipp_uid=1672148171959/0bxYb7mXpwCYJqE5/kkyiP54hx0gNgo4MmiPpgg==;_csrf=ed23ef46d3d0f7303eedcc9be466c79ca4dbfd599ff277f96cb12f321b02c7d7a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22a8MXBulAmsz2s821biwXGjLI5zLWbk6A%22%3B%7D;_ga=GA1.2.2134048829.1672148172;_ga_FLS4JETDHW=GS1.1.1672196090.2.1.1672198398.0.0.0;current_path=329c783047da34376e05c68c2340b0dc4c5b4f2a3983a31523e8465bd4d006c5a%3A2%3A%7Bi%3A0%3Bs%3A12%3A%22current_path%22%3Bi%3A1%3Bs%3A144%3A%22%7B%22city%22%3A%2230b7c1ea-03fb-11dc-95ee-00151716f9f5%22%2C%22cityName%22%3A%22%5Cu0412%5Cu043b%5Cu0430%5Cu0434%5Cu0438%5Cu0432%5Cu043e%5Cu0441%5Cu0442%5Cu043e%5Cu043a%22%2C%22method%22%3A%22geoip%22%7D%22%3B%7D;rrpvid=757194000542227;yuidss=6862082871668498657;_ab_=dada4b389bed3c7582eadc7ed3bb6298d236ea298e7f11ac08e4a5f8d30bf552a%3A2%3A%7Bi%3A0%3Bs%3A4%3A%22_ab_%22%3Bi%3A1%3Ba%3A2%3A%7Bs%3A21%3A%22search-category-score%22%3Bs%3A20%3A%22category_score_exact%22%3Bs%3A12%3A%22price-filter%22%3Bs%3A17%3A%22CATALOG_WITH_ADDS%22%3B%7D%7D;_ym_isad=1;_ym_uid=1672148176992902740;ipp_key=v1672196222685/v33947245bb5ad87a72e273/X2O/a6Dsv/s7cQ0APFgsSA==;_ym_d=1672148176;tmr_lvidTS=1672148175433;tmr_lvid=c6c00bee2007e575e858ead0653dd386;PHPSESSID=5f4d0f957c27aab8dc6abc8b7f136619;cartUserCookieIdent_v3=15715f8d5e2ec3f2e9007806b8ad7e331b0f316216f44034304e2d08a289fc66a%3A2%3A%7Bi%3A0%3Bs%3A22%3A%22cartUserCookieIdent_v3%22%3Bi%3A1%3Bs%3A36%3A%22c8b225f1-4e03-34ca-a7d3-8e5e55ab3a69%22%3B%7D;phonesIdent=5396d18834bd101442aa41d549f92d512c1f6c5ac046c1a82aadeb802710be45a%3A2%3A%7Bi%3A0%3Bs%3A11%3A%22phonesIdent%22%3Bi%3A1%3Bs%3A36%3A%2239accc25-8fd0-420c-814c-ad9b7ed20b96%22%3B%7D;rcuid=63aaf4cd9e6d296dbb7508e5;ipp_sign=d577fbe221ebb3819c20fb6ec0521a4c_397756281_fd24ce1583a7df438e38614cc04d4f86;yandex_login=sined.ed;_ym_visorc=b;_gcl_au=1.1.201562240.1672148174;city_path=vladivostok');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
        "Accept-Language: en-GB,en;q=0.9,ru-RU;q=0.8,ru;q=0.7,en-US;q=0.6",
        "Accept-Encoding: gzip, deflate, br",
        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-ch-ua-platform: \"Linux\"",
        "sec-ch-ua-mobile: ?0",
        "sec-ch-ua: \"Not?A_Brand\";v=\"8\", \"Chromium\";v=\"108\", \"Google Chrome\";v=\"108\"",
        "Referer: https://dns-shop.ru/",
        ]);
    curl_setopt($ch,CURLOPT_TIMEOUT,0);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
-->