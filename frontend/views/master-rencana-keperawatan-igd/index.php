<?php

use frontend\models\MasterRencanaKeperawatanIgd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanIgdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Rencana Keperawatan Igds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-igd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Rencana Keperawatan Igd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_masalah',
            'kode_rencana',
            'rencana_keperawatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterRencanaKeperawatanIgd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_rencana' => $model->kode_rencana]);
                 }
            ],
        ],
    ]); ?>


</div>
