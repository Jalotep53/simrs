<?php

use frontend\models\TemplatePemeriksaanDokterDetailPermintaanLab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterDetailPermintaanLabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Pemeriksaan Dokter Detail Permintaan Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-detail-permintaan-lab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Pemeriksaan Dokter Detail Permintaan Lab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'kd_jenis_prw',
            'id_template',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePemeriksaanDokterDetailPermintaanLab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>
