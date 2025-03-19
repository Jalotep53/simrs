<?php

use frontend\models\DiagnosaCorona;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaCoronaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Diagnosa Coronas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-corona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Diagnosa Corona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'kode_icd',
            'nama_penyakit',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DiagnosaCorona $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis, 'kode_icd' => $model->kode_icd]);
                 }
            ],
        ],
    ]); ?>


</div>
