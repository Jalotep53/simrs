<?php

use frontend\models\SuratPersetujuanRawatInap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Persetujuan Rawat Inaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-rawat-inap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Persetujuan Rawat Inap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggal',
            'nama_pj',
            'no_ktppj',
            //'pendidikan_pj',
            //'alamatpj',
            //'no_telppj',
            //'ruang',
            //'kelas',
            //'hubungan',
            //'hak_kelas',
            //'nama_alamat_keluarga_terdekat',
            //'bayar_secara',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPersetujuanRawatInap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
