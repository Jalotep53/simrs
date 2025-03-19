<?php

use frontend\models\PenyakitPd3i;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitPd3iSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penyakit Pd3is';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-pd3i-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penyakit Pd3i', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_penyakit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenyakitPd3i $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_penyakit' => $model->kd_penyakit]);
                 }
            ],
        ],
    ]); ?>


</div>
