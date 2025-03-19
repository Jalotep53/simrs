<?php

use frontend\models\InhealthMapingPoli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingPoliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Maping Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-maping-poli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Maping Poli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli_rs',
            'kd_poli_inhealth',
            'nm_poli_inhealth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InhealthMapingPoli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli_rs' => $model->kd_poli_rs]);
                 }
            ],
        ],
    ]); ?>


</div>
