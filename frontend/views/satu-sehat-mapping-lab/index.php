<?php

use frontend\models\SatuSehatMappingLab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Lab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_template',
            'code',
            'system',
            'display',
            'sampel_code',
            //'sampel_system',
            //'sampel_display',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingLab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>
