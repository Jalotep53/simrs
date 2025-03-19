<?php

use frontend\models\AplicareKetersediaanKamar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AplicareKetersediaanKamarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aplicare Ketersediaan Kamars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicare-ketersediaan-kamar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aplicare Ketersediaan Kamar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kelas_aplicare',
            'kd_bangsal',
            'kelas',
            'kapasitas',
            'tersedia',
            //'tersediapria',
            //'tersediawanita',
            //'tersediapriawanita',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AplicareKetersediaanKamar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kelas_aplicare' => $model->kode_kelas_aplicare, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]);
                 }
            ],
        ],
    ]); ?>


</div>
