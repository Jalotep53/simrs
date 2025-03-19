<?php

use frontend\models\SiranapKetersediaanKamar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SiranapKetersediaanKamarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Siranap Ketersediaan Kamars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siranap-ketersediaan-kamar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Siranap Ketersediaan Kamar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_ruang_siranap',
            'kelas_ruang_siranap',
            'kd_bangsal',
            'kelas',
            'kapasitas',
            //'tersedia',
            //'tersediapria',
            //'tersediawanita',
            //'menunggu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SiranapKetersediaanKamar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]);
                 }
            ],
        ],
    ]); ?>


</div>
