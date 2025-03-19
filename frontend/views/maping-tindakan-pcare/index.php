<?php

use frontend\models\MapingTindakanPcare;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanPcareSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Tindakan Pcares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-tindakan-pcare-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Tindakan Pcare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'kd_tindakan_pcare',
            'nm_tindakan_pcare',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingTindakanPcare $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
