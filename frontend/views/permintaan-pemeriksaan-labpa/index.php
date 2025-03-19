<?php

use frontend\models\PermintaanPemeriksaanLabpa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanLabpaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Pemeriksaan Labpas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-pemeriksaan-labpa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Pemeriksaan Labpa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'kd_jenis_prw',
            'stts_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanPemeriksaanLabpa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
