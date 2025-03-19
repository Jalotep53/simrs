<?php

use frontend\models\SatuSehatMappingDepartemen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingDepartemenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Departemens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-departemen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Departemen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dep_id',
            'id_organisasi_satusehat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingDepartemen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'dep_id' => $model->dep_id]);
                 }
            ],
        ],
    ]); ?>


</div>
