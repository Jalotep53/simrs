<?php

use frontend\models\TemplatePemeriksaanDokterPermintaanRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPermintaanRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Pemeriksaan Dokter Permintaan Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-permintaan-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Pemeriksaan Dokter Permintaan Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'kd_jenis_prw',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePemeriksaanDokterPermintaanRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
