<?php

use frontend\models\PenguranganBiaya;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenguranganBiayaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengurangan Biayas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengurangan-biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengurangan Biaya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'nama_pengurangan',
            'besar_pengurangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenguranganBiaya $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'nama_pengurangan' => $model->nama_pengurangan]);
                 }
            ],
        ],
    ]); ?>


</div>
