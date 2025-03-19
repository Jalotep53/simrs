<?php

use frontend\models\TemplatePemeriksaanDokterPenyakit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPenyakitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Pemeriksaan Dokter Penyakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Pemeriksaan Dokter Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'kd_penyakit',
            'urut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePemeriksaanDokterPenyakit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template, 'kd_penyakit' => $model->kd_penyakit]);
                 }
            ],
        ],
    ]); ?>


</div>
