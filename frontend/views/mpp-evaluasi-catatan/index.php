<?php

use frontend\models\MppEvaluasiCatatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiCatatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mpp Evaluasi Catatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-evaluasi-catatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mpp Evaluasi Catatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_implementasi',
            'masalah',
            'tinjut',
            'evaluasi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MppEvaluasiCatatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_implementasi' => $model->tgl_implementasi]);
                 }
            ],
        ],
    ]); ?>


</div>
