<?php

use frontend\models\BuktiPenyerahanResepObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenyerahanResepObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bukti Penyerahan Resep Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-penyerahan-resep-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bukti Penyerahan Resep Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuktiPenyerahanResepObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep]);
                 }
            ],
        ],
    ]); ?>


</div>
