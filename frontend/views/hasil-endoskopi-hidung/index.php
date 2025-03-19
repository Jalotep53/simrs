<?php

use frontend\models\HasilEndoskopiHidung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Endoskopi Hidungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-hidung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Endoskopi Hidung', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'kondisi_hidung_kanan',
            //'kondisi_hidung_kiri',
            //'kavum_nasi_kanan',
            //'kavum_nasi_kiri',
            //'konka_inferior_kanan',
            //'konka_inferior_kiri',
            //'meatus_medius_kanan',
            //'meatus_medius_kiri',
            //'septum_kanan',
            //'septum_kiri',
            //'nasofaring_kanan',
            //'nasofaring_kiri',
            //'lainlain_kanan',
            //'lainlain_kiri',
            //'kesimpulan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilEndoskopiHidung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
