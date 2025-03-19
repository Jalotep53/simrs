<?php

use frontend\models\HasilEndoskopiTelinga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelingaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Endoskopi Telingas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-telinga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Endoskopi Telinga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'diagnosa_klinis',
            'kiriman_dari',
            //'bentuk_liang_telinga_kanan',
            //'bentuk_liang_telinga_kiri',
            //'kondisi_liang_telinga_kanan',
            //'keterangan_kondisi_liang_telinga_kanan',
            //'kondisi_liang_telinga_kiri',
            //'keterangan_kondisi_liang_telinga_kiri',
            //'membran_timpani_intak_kanan',
            //'membran_timpani_intak_kiri',
            //'membran_timpani_perforasi_kanan',
            //'keterangan_membran_timpani_perforasi_kanan',
            //'membran_timpani_perforasi_kiri',
            //'keterangan_membran_timpani_perforasi_kiri',
            //'kavum_timpani_mukosa_kanan',
            //'kavum_timpani_mukosa_kiri',
            //'kavum_timpani_osikel_kanan',
            //'kavum_timpani_osikel_kiri',
            //'kavum_timpani_isthmus_kanan',
            //'kavum_timpani_isthmus_kiri',
            //'kavum_timpani_anterior_kanan',
            //'kavum_timpani_anterior_kiri',
            //'kavum_timpani_posterior_kanan',
            //'kavum_timpani_posterior_kiri',
            //'lainlain_kanan',
            //'lainlain_kiri',
            //'kesimpulan',
            //'anjuran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilEndoskopiTelinga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
