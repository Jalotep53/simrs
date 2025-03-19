<?php

use frontend\models\CatatanObservasiInduksiPersalinan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiInduksiPersalinanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catatan Observasi Induksi Persalinans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-observasi-induksi-persalinan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catatan Observasi Induksi Persalinan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam_rawat',
            'obat',
            'cairan',
            //'dosis',
            //'his',
            //'djj',
            //'keterangan',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CatatanObservasiInduksiPersalinan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
