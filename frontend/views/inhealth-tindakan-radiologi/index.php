<?php

use frontend\models\InhealthTindakanRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Tindakan Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Tindakan Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'kd_inhealth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InhealthTindakanRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
