<?php

use frontend\models\RiwayatImunisasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatImunisasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Imunisasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-imunisasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Imunisasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'kode_imunisasi',
            'no_imunisasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatImunisasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi]);
                 }
            ],
        ],
    ]); ?>


</div>
