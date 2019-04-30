<?php
include './vendor/autoload.php';
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
$config = [
    'callback' => HttpClient\Util::getCurrentUrl(),
    'providers' => [
        'Line' => [ 
            'enabled' => true,
            'keys'    => [ 'id' => '1570400354', 'secret' => '774678fcb1a3e72911efa42c6c9eddeb' ], 
        ],
    ],
];
try {    
    $hybridauth = new Hybridauth( $config );
    $adapter = $hybridauth->authenticate( 'Line' );
    $tokens = $adapter->getAccessToken();
    $userProfile = $adapter->getUserProfile();
    // print_r( $tokens );
    print_r( $userProfile );
    $adapter->disconnect();
}
catch (\Exception $e) {
    echo $e->getMessage();
}