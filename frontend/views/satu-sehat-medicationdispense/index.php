<?php

use frontend\models\SatuSehatMedicationdispense;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationdispenseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Medicationdispenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-medicationdispense-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Medicationdispense', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam',
            'kode_brng',
            'no_batch',
            //'no_faktur',
            //'id_medicationdispanse',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMedicationdispense $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
