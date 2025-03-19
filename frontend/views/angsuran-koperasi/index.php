<?php

use frontend\models\AngsuranKoperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AngsuranKoperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Angsuran Koperasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angsuran-koperasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Angsuran Koperasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal_pinjam',
            'tanggal_angsur',
            'pokok',
            'jasa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AngsuranKoperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'tanggal_pinjam' => $model->tanggal_pinjam, 'tanggal_angsur' => $model->tanggal_angsur]);
                 }
            ],
        ],
    ]); ?>


</div>
