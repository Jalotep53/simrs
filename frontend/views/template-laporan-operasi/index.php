<?php

use frontend\models\TemplateLaporanOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Laporan Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-laporan-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Laporan Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'nama_operasi',
            'diagnosa_preop',
            'diagnosa_postop',
            'jaringan_dieksisi',
            //'permintaan_pa',
            //'laporan_operasi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplateLaporanOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template]);
                 }
            ],
        ],
    ]); ?>


</div>
