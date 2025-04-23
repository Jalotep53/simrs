<?php

use yii\helpers\Html;
use frontend\models\JnsPerawatan;
use frontend\models\KategoriPerawatan;
use frontend\models\RawatJlDr;
use frontend\models\Databarang;
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
function namaObat($kode){
    $nama = Databarang::find()->where(['kode_brng'=>$kode])->one();
    
    return $nama->nama_brng;
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
    <th colspan=6><?=$setting->nama_instansi?></th>
    <th><?=$penjab->png_jawab?></th>
    
  </tr>
  <tr>
    <td colspan = 3>&nbsp;</td>
    <td colspan = 6><?php echo $setting->alamat_instansi.", ".$setting->kabupaten .", ".$setting->propinsi?></td>
    
  </tr>
  <tr>
    <td colspan = 3>&nbsp;</td>
    <td colspan = 6><?php echo "Hp :". $setting->kontak.", Email : ".$setting->email?></td>
    
  </tr>
  <tr>
    <td colspan = 3>&nbsp;</td>
    <td colspan = 6><?php echo "<B>Billing Rawat Inap</B>"?></td>
  </tr>
  <tr>
      <td colspan = 9><hr/></td>
  </tr>
  
  <tr>
      <td style="text-align: left">No. Nota</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7>No.Nota</td>

  </tr>
  <tr>
      <td style="text-align: left">Unit/Instansi</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$poli->nm_poli?></td>

  </tr>
  <tr>
      <td style="text-align: left">Tanggal & jam</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$reg->tgl_registrasi." ".$reg->jam_reg?></td>

  </tr>
  <tr>
      <td style="text-align: left">No. RM</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$reg->no_rkm_medis?></td>

  </tr>
  <tr>
      <td style="text-align: left">Nama Pasien</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$pasien->nm_pasien?></td>
  </tr>
  <tr>
      <td style="text-align: left">Alamat Pasien</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$pasien->alamat?></td>
  </tr>
  <tr>
      <td style="text-align: left">Dokter</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=7>&nbsp;</td>
  </tr>
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">:</td>
      <td style="text-align: left" colspan=7><?=$dokter->nm_dokter?></td>
  </tr>
  <tr>
      <td style="text-align: left">Registrasi</td>
      <td style="text-align: right">:</td>
      <td style="text-align: right" colspan=6>&nbsp;</td>
      <td style="text-align: right"><?=rupiah($reg->biaya_reg)?></td>
  </tr>
  <tr>
      <td style="text-align: left">Tindakan</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: right" colspan=6>&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
  </tr>
  <?php
  
  $tindakan = RawatJlDr::find()->where(['no_rawat' => $reg->no_rawat])->all();
        $kat = array();
        $tind = array();
        foreach ($tindakan as $arr){
            $jns = JnsPerawatan::find()->where(['kd_jenis_prw' => $arr->kd_jenis_prw])->one();
            $tind[$jns->kd_jenis_prw] = $jns->nm_perawatan;
            $kategori =KategoriPerawatan::find()->where(['kd_kategori' => $jns->kd_kategori])->one();
            $kat[$kategori->kd_kategori] = $kategori->nm_kategori;
        }
        $kat = array_unique($kat);
        
        foreach ($kat as $key=>$value){
            
            ?>
            <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=7><b><?=$value?></b></td>
  </tr>
  <?php
        foreach($tind as $k=>$v){
            if($jns = JnsPerawatan::find()->where(['kd_jenis_prw' => $k,'kd_kategori' => $key])->one()){
            
            ?>
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=5><?=$jns->nm_perawatan?></td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: right"><?=rupiah($jns->total_byrdr)?></td>
  </tr>
                <?php
            }
            
        }
        }
        
?>
 <tr>
      <td style="text-align: left">Obat-obatan</td>
      <td style="text-align: right">:</td>
      <td style="text-align: right" colspan=6>&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
  </tr>
  <?php
  $total=0;
   foreach ($obatsaja as $ob){
       $total=$total+$ob['total'];
       ?>
  
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=4><?=namaObat($ob['kode_brng'])?></td>
      <td style="text-align: right"><?=rupiah($ob['biaya_obat'])?></td>
      <td style="text-align: right;width: 10%"><?=$ob['jml']?></td>
      <td style="text-align: right"><?=rupiah($ob['total'])?></td>
  </tr>
  <?php
   }
   

  ?>
  <tr>
  <td style="text-align: left"></td>
      <td style="text-align: right"></td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">Total Obat</td>
      <td style="text-align: right"><?=rupiah($total)?></td>
  </tr>
  <tr>
      <td style="text-align: left">BMHP</td>
      <td style="text-align: right">:</td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
  </tr>
  <?php
 $total=0;
   foreach ($bmhpsaja as $ob){
       $total=$total+$ob['total'];
       ?>
  
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=4><?=namaObat($ob['kode_brng'])?></td>
      <td style="text-align: right"><?=rupiah($ob['biaya_obat'])?></td>
      <td style="text-align: right;width: 10%"><?=$ob['jml']?></td>
      <td style="text-align: right"><?=rupiah($ob['total'])?></td>
  </tr>
  <?php
   }
  ?>
  <tr>
  <td style="text-align: left"></td>
      <td style="text-align: right"></td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">Total BMHP</td>
      <td style="text-align: right"><?=rupiah($total)?></td>
  </tr>
  <tr>
      <td style="text-align: left">Gas Medis</td>
      <td style="text-align: right">:</td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
  </tr>
  <?php
 $total=0;
   foreach ($oksigensaja as $ob){
       $total=$total+$ob['total'];
       ?>
  
  <tr>
      <td style="text-align: left">&nbsp;</td>
      <td style="text-align: right">&nbsp;</td>
      <td style="text-align: left" colspan=4><?=namaObat($ob['kode_brng'])?></td>
      <td style="text-align: right"><?=rupiah($ob['biaya_obat'])?></td>
      <td style="text-align: right;width: 10%"><?=$ob['jml']?></td>
      <td style="text-align: right"><?=rupiah($ob['total'])?></td>
  </tr>
  <?php
   }
  ?>
  <tr>
  <td style="text-align: left"></td>
      <td style="text-align: right"></td>
      <td style="text-align: right" colspan=5>&nbsp;</td>
      <td style="text-align: right">Total Gas Medis</td>
      <td style="text-align: right"><?=rupiah($total)?></td>
  </tr>
</table>
    </body>
</html>
