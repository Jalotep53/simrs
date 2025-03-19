<?php

use frontend\models\ResikoKerja;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResikoKerjaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resiko Kerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resiko-kerja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resiko Kerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_resiko',
            'nama_resiko',
            'indek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResikoKerja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_resiko' => $model->kode_resiko]);
                 }
            ],
        ],
    ]); ?>


</div>
