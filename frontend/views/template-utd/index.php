<?php

use frontend\models\TemplateUtd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Utds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-utd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Utd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'id_template',
            'pemeriksaan',
            'nilai_rujukan',
            'bagian_rs',
            //'bhp',
            //'bagian_perujuk',
            //'bagian_dokter',
            //'petugas_utd',
            //'kso',
            //'menejemen',
            //'biaya_item',
            //'urut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplateUtd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>
