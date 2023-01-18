<?php
	// ob_flush();
	// ob_start();
	#L1
	echo('<h3>L1: Headers in php</h3>'); #Same as <a href=...>, but sent in header of server answer
	print_r(getallheaders());
	// header('Location: /a.php'); #Should be in the start of script
	// header('Location: https://google.com'); #thats very low for human beings to use, remember
	// exit;
	// header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');header('Last-Modified: '.gmdate('D, Y M d H:i:s').' GMT');header('Cache-control: no-cache, must-revalidate');header('Cache-control: post-check=0, pre-check=0', false);header('Cache-control: max-age=0', false);header('Pragma: no-cache'); #makes cache go away, hmm... Thats recomendation for browser btw
	require_once('../../lib/C7L1');
	echo '<br>';

	#L2
	echo('<h3>L2: Cookies in php</h3>'); #Finally, THE cookies, our fight will be legendary!
	echo $_COOKIE['counter'].'<br>';
	$counter=0;if(isset($_COOKIE['counter'])){$counter=$_COOKIE['counter'];$counter++;}setcookie('counter',$counter,time()+3600);echo $counter.'<br>';
	echo '<br>';
    require_once('../../lib/C7L2');
	echo '<br>';
    
    #L3
	echo('<h3>L3: Sessions in php</h3>');
    session_start(); #header!!!
    $counter=$_SESSION['counter']??0;$counter++;$_SESSION['counter']=$counter;echo $counter.'<br>';
    print_r($_COOKIE);
    // unset($_SESSION['counter']);
    echo '<br>';
    require_once('../../lib/C7L3');
    echo '<br>';
    
    #L4
	echo('<h3>L4: Authentication of users in php</h3>');
    // session_start();
    function lo(){if(isset($_GET['f'])&&$_GET['f']=='logout'){unset($_SESSION['login'],$_SESSION['password']);header('Location: /res/php/index2.php');}}
    $error=false;$log1='admin';$log2='moderator';$pw1=password_hash('123',PASSWORD_BCRYPT);$pw2=password_hash('456',PASSWORD_BCRYPT);$auth=false;
    lo();
    if(isset($_POST['auth'])){
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        $error=true;
    }
    if(isset($_SESSION['login'])&&isset($_SESSION['password'])&&(($_SESSION['login']===$log1&&password_verify($_SESSION['password'],$pw1))||($_SESSION['login']===$log2&&password_verify($_SESSION['password'],$pw2)))){$auth=true;$error=false;}
    if($error) echo '<p>Incorrect login and/or password!</p>';
    if($auth) echo '<p>Hello, '.$_SESSION['login'].'!</p><a href=/res/php/index2.php?f=logout>Exit</a>';else{
    ?>
    <form name=auth method=post action=/res/php/index2.php>
        <p><input type=text name=login placeholder=Login></p>
        <p><input type=password name=password placeholder=Password></p>
        <p><input type=submit name=auth value=Login></p>
    </form>
    <?php }
    echo '<br>';
    session_destroy(); #is here for next lines of code to work, comment to see current lesson working
    
    #L5
	echo('<h3>L5: URL in php</h3>');
    $url='http://example.com/abc.html?id=7&page=8&x=9';echo $url.'<br>';
    $ar=parse_url($url);print_r($ar);echo '<br>';
    parse_str($ar['query'],$query);print_r($query);echo '<br>';
    unset($query['x']);$query['y']=10;print_r($query);echo '<br>';
    $query=http_build_query($query);echo $query.'<br>';
    $url=$ar['scheme'].'://'.$ar['host'].$ar['path'].'?'.$query;echo $url.'<br>';
    echo '<br>';
    $url='localhost/res/php/index2.php/?page=1&ref=partner';echo $url.'<br>';
    $ar=parse_url($url);parse_str($ar['query'],$query);setcookie('ref',$query['ref'],time()+60);unset($query['ref']);$que=http_build_query($query);$url='?'.$que;echo $url.'<br>';
    if($_SERVER['REQUEST_URI']!='/res/php/index2.php'.$url) header('Location: '.$url);
    echo '<br>';

    #L6
	echo('<h3>L6: Sending mail in php</h3>');
    $to='t@localhost';$subject='Subject';$message='<b>Message.</b>';$headers=''; #view sent mails in /var/mail/t
    $headers.="From: Vasya Pupkin<admin@localhost>\r\n"; #" instead of ' to look prettier in /var/mail/t
    $headers.="Reply-to: <admin@localhost>\r\n";
    $headers.="Content-type: text/html; charset=utf-8"; #later will be better: Content-type: text/html & text/something!
    $subject='=?utf-8?B?'.base64_encode($subject).'?='; #encode mb_string
    if(mail($to,$subject,$message,$headers)) echo 'Mail sent!';else echo 'Mail not sent!';echo '<br>';
    echo '<br>';
    $to=$_POST['mto']??'';$subject=isset($_POST['msubject'])?'=?utf-8?B?'.base64_encode($_POST['msubject']).'?=':'';$message=$_POST['mmessage']??'';$from=$_POST['mfrom']??'';$headers='From: '.$from."\r\nReply-to: <admin@localhost>\r\nContent-type: text/html; charset=utf-8";
    ?>
	<form name=fm action=<?=$_SERVER['REQUEST_URI']?> method=post>	
		<input type=text name=mfrom placeholder=From><br>
		<input type=text name=mto placeholder=To><br>
		<input type=text name=msubject placeholder=Subject><br>
		<input type=text name=mmessage placeholder=Message><br>
        <input type=submit value=Send>
	</form>
	<?php
    if(mail($to,$subject,$message,$headers)) echo 'Mail sent!';else echo 'Mail not sent!';echo '<br>';
    echo '<br>';

    #L7
	echo('<h3>L7: PHPMailer library from git</h3>');
    require_once('../../lib/PHPMailer.php');
    require_once('../../lib/Exception.php');
    use PHPMailer\PHPMailer\PHPMailer, PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
    try {
        // $mail->CharSet = 'utf-8'; #did not 
    
        $mail->setFrom('i@mail.localhost', 'Администратор');
        $mail->addAddress('t@mail.localhost'); #if not local, then it bounces off with spf and dkim checks failed!
        $mail->addReplyTo('info@sike.com', 'Information');

        $mail->addAttachment('../cat.png', 'c.jpg');

        $mail->isHTML(true);
        $mail->Subject = 'Тема';
        $mail->Body    = 'Текст <b>письма</b>.';
        $mail->AltBody = 'Текст письма.';
    
        $mail->send();
        echo 'Письмо успешно отправлено!';
    } catch (Exception $e) {
        echo "Письмо не отправлено! Mailer Error: {$mail->ErrorInfo}";
    }
    echo '<br>'; #too easy, too lazy
    echo '<br>';

    // print_r($GLOBALS);
?>

<?php
echo '<h1>Source code!</h1>';
echo '<pre>'.htmlentities(file_get_contents('index2.php')).'</pre>';
?>