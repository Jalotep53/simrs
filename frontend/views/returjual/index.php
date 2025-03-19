<?php

use frontend\models\Returjual;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ReturjualSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Returjuals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returjual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Returjual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_retur_jual',
            'tgl_retur',
            'nip',
            'no_rkm_medis',
            'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Returjual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_retur_jual' => $model->no_retur_jual]);
                 }
            ],
        ],
    ]); ?>


</div>
