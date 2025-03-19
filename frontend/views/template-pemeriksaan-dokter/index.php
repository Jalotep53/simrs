<?php

use frontend\models\TemplatePemeriksaanDokter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Pemeriksaan Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Pemeriksaan Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'kd_dokter',
            'keluhan',
            'pemeriksaan',
            'penilaian',
            //'rencana',
            //'instruksi',
            //'evaluasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePemeriksaanDokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template]);
                 }
            ],
        ],
    ]); ?>


</div>
