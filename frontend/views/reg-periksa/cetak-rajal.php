<?php

use yii\helpers\Html;
use frontend\models\JnsPerawatan;
use frontend\models\KategoriPerawatan;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksa $model */


//var_dump($setting->nama_instansi);
function data_uri($file, $mime) {  
      $contents = file_get_contents($file);
      $base64   = base64_encode($contents);
      return ('data:' . $mime . ';base64,' . $base64);
   }
   function rupiah ($angka) {
    $hasil = number_format($angka, 0, ",", ".");
    return $hasil;
    
}
    function namaTindakan($kd){
       $nama= JnsPerawatan::find()->where(['kd_jenis_prw' =>$kd])->one();
        
        return $nama->nm_perawatan;
    }
    function biayaTindakan($kd){
        $biaya = JnsPerawatan::find()->where(['kd_jenis_prw' =>$kd])->one();
        
        return  $biaya->total_byrdr;
    }
    function kategoriPerawatan($kd){
        $rajal = JnsPerawatan::find()->where(['kd_jenis_prw' =>$kd])->one();
        $kategori = KategoriPerawatan::find()->where(['kd_kategori' => $rajal->kd_kategori])->one();
        
        return $kategori->nm_kategori;
    }
    function kategoriTindakan($kd){
        $rajal = JnsPerawatan::find()->where(['kd_jenis_prw' =>$kd])->one();
        $kategori = KategoriPerawatan::find()->where(['kd_kategori' => $rajal->kd_kategori])->one();
        
        return $kategori->kd_kategori;
    }
?>
<html>
    <head>
        <style>
table, th, td {
  border:0px solid black;
  text-align: center; 
    vertical-align: middle;
}


</style>
    </head>
    <body>
        <table width = "100%">
  <tr>
    <th colspan = 2><img src="<?php echo data_uri('../assets/img/rssl.ico','image/png'); ?>" width="80px" alt="Image sample" /></th>
    <th colspan=5><?=$setting->nama_instansi?></th>
    <th><?=$penjab->png_jawab?></th>
    
  </tr>
  <tr>
    <td colspan = 2>&nbsp;</td>
    <td colspan = 6><?php echo $setting->alamat_instansi.", ".$setting->kabupaten .", ".$setting->propinsi?></td>
    
  </tr>
  <tr>
    <td colspan = 2>&nbsp;</td>
    <td colspan = 6><?php echo "Hp :". $setting->kontak.", Email : ".$setting->email?></td>
    
  </tr>
  <tr>
    <td colspan = 2>&nbsp;</td>
    <td colspan = 6><?php echo "<B>Billing Rawat Jalan</B>"?></td>
  </tr>
  <tr>
      <td colspan = 8><hr/></td>
  </tr>
  
  <tr>
      <td style="text-align: left">No. Nota</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$nota->no_nota?></td>

  </tr>
  <tr>
      <td style="text-align: left">Unit/Instansi</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$poli->nm_poli?></td>

  </tr>
  <tr>
      <td style="text-align: left">Tanggal & jam</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$reg->tgl_registrasi." ".$reg->jam_reg?></td>

  </tr>
  <tr>
      <td style="text-align: left">No. RM</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$reg->no_rkm_medis?></td>

  </tr>
  <tr>
      <td style="text-align: left">Nama Pasien</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$pasien->nm_pasien?></td>
  </tr>
  <tr>
      <td style="text-align: left">Alamat Pasien</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$pasien->alamat?></td>
  </tr>
  <tr>
      <td style="text-align: left">Dokter</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=6>&nbsp;</td>
  </tr>
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=6><?=$dokter->nm_dokter?></td>
  </tr>
  <tr>
      <td style="text-align: left">Registrasi</td>
      <td style="text-align: right">:</td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right"><?=rupiah($reg->biaya_reg)?></td>
  </tr>
  <tr>
      <td style="text-align: left">Tindakan</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
  </tr>
  <?php
        foreach ($tindakan as $key =>$rows) {
            print $tindakan[$key]['kd_jenis_prw'];
//            if(kategoriTindakan($rows['kd_jenis_prw'] == kategoriTindakan($tindakan[$key-1]))){break;}
?>
  <tr>
      <td style="text-align: left"><?=kategoriPerawatan($rows['kd_jenis_prw'])?></td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=5><?=namaTindakan($rows['kd_jenis_prw'])?></td>
      <td style="text-align: right"><?= rupiah(biayaTindakan($rows['kd_jenis_prw']))?></td>
  </tr>
  <?php


	}
  ?>
</table>
    </body>
</html>
