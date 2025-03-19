<?php

use frontend\models\PasienPolri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienPolriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasien Polris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-polri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien Polri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'golongan_polri',
            'pangkat_polri',
            'satuan_polri',
            'jabatan_polri',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PasienPolri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
