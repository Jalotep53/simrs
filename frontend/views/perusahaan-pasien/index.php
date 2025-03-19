<?php

use frontend\models\PerusahaanPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerusahaanPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perusahaan Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perusahaan-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perusahaan Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_perusahaan',
            'nama_perusahaan',
            'alamat',
            'kota',
            'no_telp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerusahaanPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_perusahaan' => $model->kode_perusahaan]);
                 }
            ],
        ],
    ]); ?>


</div>
