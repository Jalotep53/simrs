<?php

use frontend\models\DataTriaseIgdprimer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdprimerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Triase Igdprimers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igdprimer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Triase Igdprimer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'keluhan_utama',
            'kebutuhan_khusus',
            'catatan',
            'plan',
            //'tanggaltriase',
            //'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTriaseIgdprimer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
