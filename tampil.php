<?php
include("koneksi.php");
$app ->get('/semuaproduk', function() use($app, $db){
    foreach($db->produk() as $data){
        $produk['semuaproduk'][] = array(
            'id_produk' => $data['id_produk'],
            'nama' => $data['nama'],
            'harga' => $data['harga'],
            'status' => $data['status']
            );
    }
    echo json_encode($produk);
});
$app->run();