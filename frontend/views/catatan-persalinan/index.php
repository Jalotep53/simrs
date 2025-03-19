<?php

use frontend\models\CatatanPersalinan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanPersalinanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catatan Persalinans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-persalinan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catatan Persalinan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'mulai',
            'selesai',
            'kd_dokter',
            'nip',
            //'catatan:ntext',
            //'waktu_persalinan_kala_1',
            //'waktu_persalinan_kala_2',
            //'waktu_persalinan_kala_3',
            //'waktu_persalinan_jumlah',
            //'perineum',
            //'jahitan_luar_1',
            //'jahitan_luar_2',
            //'jahitan_dalam_1',
            //'jahitan_dalam_2',
            //'anak',
            //'status_lahir',
            //'apgar_score',
            //'bb',
            //'pb',
            //'kelainan',
            //'ketuban',
            //'placenta',
            //'ukuran',
            //'tali_pusat',
            //'insertio',
            //'darah_keluar_kala_1',
            //'darah_keluar_kala_2',
            //'darah_keluar_kala_3',
            //'darah_keluar_kala_4',
            //'darah_keluar_jumlah',
            //'kondisi_umum',
            //'td',
            //'nadi',
            //'rr',
            //'suhu',
            //'kontraksi_uterus',
            //'ppv',
            //'pengobatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CatatanPersalinan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
