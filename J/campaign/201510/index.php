<?php

$ua = $_SERVER['HTTP_USER_AGENT'];

if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    // �X�}�[�g�t�H������A�N�Z�X���ꂽ�ꍇ
    header("Location: http://furisode.joyful-eli.com/smt/campaign/201510/");
    exit();

} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    // �^�u���b�g����A�N�Z�X���ꂽ�ꍇ
    header("Location: http://furisode.joyful-eli.com/campaign/201510/campaign.php");
    exit();

} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    // �g�т���A�N�Z�X���ꂽ�ꍇ
    header("Location: http://furisode.joyful-eli.com/keitai/campaign/201510/");
    exit();

} else {
    // ���̑��iPC�j����A�N�Z�X���ꂽ�ꍇ
    header("Location: http://furisode.joyful-eli.com/campaign/201510/campaign.php");
    exit();
}

?>

