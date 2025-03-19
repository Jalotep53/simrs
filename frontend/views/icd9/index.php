<?php

use frontend\models\Icd9;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Icd9Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Icd9s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="icd9-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Icd9', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'deskripsi_panjang',
            'deskripsi_pendek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Icd9 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
