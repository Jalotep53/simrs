<?php

use frontend\models\MapingDokterPcare;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterPcareSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Dokter Pcares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-dokter-pcare-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Dokter Pcare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dokter',
            'kd_dokter_pcare',
            'nm_dokter_pcare',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingDokterPcare $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_dokter' => $model->kd_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>
