<?php

use frontend\models\Poliklinik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PoliklinikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Polikliniks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Poliklinik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli',
            'nm_poli',
            'registrasi',
            'registrasilama',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Poliklinik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli' => $model->kd_poli]);
                 }
            ],
        ],
    ]); ?>


</div>
