<?php

use frontend\models\SkriningRawatJalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skrining Rawat Jalans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-rawat-jalan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skrining Rawat Jalan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'jam',
            'no_rkm_medis',
            'geriatri',
            'kesadaran',
            //'pernapasan',
            //'nyeri_dada',
            //'skala_nyeri',
            //'keputusan',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkriningRawatJalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
