<?php
$data = json_decode(file_get_contents('php://input'), true);
if ($data) {
    file_put_contents('duyuru.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    echo 'Duyuru kaydedildi!';
} else {
    echo 'Veri alınamadı!';
}
?>