<?php

use frontend\models\InhealthTindakanRalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanRalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Tindakan Ralans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-ralan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Tindakan Ralan', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, InhealthTindakanRalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
