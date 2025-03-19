<?php

use frontend\models\DeteksiDiniCorona;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCoronaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Deteksi Dini Coronas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deteksi-dini-corona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deteksi Dini Corona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nip',
            'gejala_demam',
            'gejala_batuk',
            //'gejala_sesak',
            //'gejala_tanggal_pertama',
            //'gejala_riwayat_sakit',
            //'gejala_riwayat_periksa',
            //'faktor_riwayat_perjalanan',
            //'faktor_asal_daerah',
            //'faktor_tanggal_kedatangan',
            //'faktor_paparan_kontakpositif',
            //'faktor_paparan_kontakpdp',
            //'faktor_paparan_faskespositif',
            //'faktor_paparan_perjalananln',
            //'faktor_paparan_pasarhewan',
            //'kesimpulan',
            //'tindak_lanjut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DeteksiDiniCorona $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
