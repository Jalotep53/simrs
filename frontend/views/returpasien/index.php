<?php

use frontend\models\Returpasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ReturpasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Returpasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returpasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Returpasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'no_rawat',
            'kode_brng',
            'jml',
            'no_batch',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Returpasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
