<?php


echo '<pre>';
print_r($_POST);
echo '</pre>';


define('OMISE_PUBLIC_KEY', 'pkey_test_5mz9sn27eqemffhcpmc');
define('OMISE_SECRET_KEY', 'skey_test_5mt1bkqc82gjhpzv0r4');
define('OMISE_API_VERSION', '2019-05-29');

require '../vendor/autoload.php';

    $add = OmiseCharge::create(array(
        'amount' => 12000,
        'currency' => 'thb',
        'card' => $_POST['omiseToken'],
    ));

    echo '<br>';
    if($add['status']=='successful'){
        echo 'Success';
    }else{
        echo 'Fail';
    }