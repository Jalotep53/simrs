<?php

use frontend\models\TemplatePemeriksaanDokterProsedur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterProsedurSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Pemeriksaan Dokter Prosedurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-prosedur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Pemeriksaan Dokter Prosedur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'kode',
            'urut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePemeriksaanDokterProsedur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
