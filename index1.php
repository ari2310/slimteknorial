<?php 
require 'vendor/autoload.php';
require 'libs/NotORM.php'; 
//membuat dan mengkonfigurasi slim app
$app = new \Slim\app;

// konfigurasi database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'slimteknorialdb';
$dbmethod = 'mysql:dbname=';

$dsn = $dbmethod.$dbname;
$pdo = new PDO($dsn, $dbuser, $dbpass);
$db  = new NotORM($pdo);

//mendefinisikan route app di home
$app-> get('/', function(){
    echo "Hello World by slimteknorial";
});

// Mendapatkan semua data produk 
// Mendapatkan salah satu data
$app ->get('/semuaproduk/{id}', function($request, $response, $args) use($app, $db){
    $produk = $db->produk()->where('id_produk',$args['id']);
    if($data = $produk->fetch()){
        echo json_encode(array(
            'id_produk' => $data['id_produk'],
            'nama' => $data['nama'],
            'harga' => $data['harga'],
            'status' => $data['status']
            ));
    }
    else{
        echo json_encode(array(
            'status' => false,
            'message' => "ID produk tidak ada"
            ));
    }
});
//tambah produk baru
$app->post('/produk', function($request, $response, $args) use($app, $db){
    $produk = $request->getParams();
    $result = $db->produk->insert($produk);
    echo json_encode(array(
        "status" => (bool)$result,
        ));
});
//run App
$app->run();
?>