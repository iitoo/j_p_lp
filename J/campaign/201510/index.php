<?php

$ua = $_SERVER['HTTP_USER_AGENT'];

if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    // スマートフォンからアクセスされた場合
    header("Location: http://furisode.joyful-eli.com/smt/campaign/201510/");
    exit();

} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    // タブレットからアクセスされた場合
    header("Location: http://furisode.joyful-eli.com/campaign/201510/campaign.php");
    exit();

} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    // 携帯からアクセスされた場合
    header("Location: http://furisode.joyful-eli.com/keitai/campaign/201510/");
    exit();

} else {
    // その他（PC）からアクセスされた場合
    header("Location: http://furisode.joyful-eli.com/campaign/201510/campaign.php");
    exit();
}

?>

