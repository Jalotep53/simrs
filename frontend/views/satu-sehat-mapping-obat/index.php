<?php

use frontend\models\SatuSehatMappingObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'obat_code',
            'obat_system',
            'obat_display',
            'form_code',
            //'form_system',
            //'form_display',
            //'numerator_code',
            //'numerator_system',
            //'denominator_code',
            //'denominator_system',
            //'route_code',
            //'route_system',
            //'route_display',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
