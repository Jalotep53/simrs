<?php

use frontend\models\EvaluasiKinerja;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\EvaluasiKinerjaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Evaluasi Kinerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluasi-kinerja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Evaluasi Kinerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_evaluasi',
            'nama_evaluasi',
            'indek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EvaluasiKinerja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_evaluasi' => $model->kode_evaluasi]);
                 }
            ],
        ],
    ]); ?>


</div>
