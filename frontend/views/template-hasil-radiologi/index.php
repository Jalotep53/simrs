<?php

use frontend\models\TemplateHasilRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateHasilRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Hasil Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-hasil-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Template Hasil Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_template',
            'nama_pemeriksaan',
            'template_hasil_radiologi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemplateHasilRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_template' => $model->no_template]);
                 }
            ],
        ],
    ]); ?>


</div>
