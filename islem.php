<?php
if (isset($_POST['insertislemi']) && $_POST['insertislemi'] === 'insertislemi') {

$carikaydet=$db->prepare("UPDATE cari SET
       
       cari_ad=:cari_ad,
   cari_bakiye=:cari_bakiye,
    cari_ulke=:cari_ulke,
    
    WHERE id=0");
$cari=$ayarkaydet-> execute(array (
    'cari_ad'=> $_POST['cari_ad'],
    'cari_bakiye'=> $_POST['cari_bakiye'],
    'cari_ulke'=> $_POST['cari_ulke'],
  
    ));

if ($update) {
   
    header ("Location:../production/cariekle.php?durum=ok");
} else {
   
    header ("Location:../production/cariekle.php?durum=no");
}

}
?>