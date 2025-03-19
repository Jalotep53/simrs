<?php

use frontend\models\PasienMati;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMatiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasien Matis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-mati-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien Mati', ['create'], ['class' => 'btn btn-success']) ?>
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
            'keterangan',
            'temp_meninggal',
            //'icd1',
            //'icd2',
            //'icd3',
            //'icd4',
            //'kd_dokter',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PasienMati $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
