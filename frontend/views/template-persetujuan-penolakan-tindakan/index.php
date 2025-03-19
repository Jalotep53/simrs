<?php

use frontend\models\TemplatePersetujuanPenolakanTindakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Persetujuan Penolakan Tindakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-persetujuan-penolakan-tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Persetujuan Penolakan Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_template',
            'diagnosa',
            'tindakan',
            'indikasi_tindakan',
            'tata_cara',
            //'tujuan',
            //'risiko',
            //'komplikasi',
            //'prognosis',
            //'alternatif_dan_risikonya',
            //'lain_lain',
            //'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplatePersetujuanPenolakanTindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_template' => $model->kode_template]);
                 }
            ],
        ],
    ]); ?>


</div>
