<?php

use frontend\models\SatuSehatMappingVaksin;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksinSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Vaksins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-vaksin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Vaksin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'vaksin_code',
            'vaksin_system',
            'vaksin_display',
            'route_code',
            //'route_system',
            //'route_display',
            //'dose_quantity_code',
            //'dose_quantity_system',
            //'dose_quantity_unit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingVaksin $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
