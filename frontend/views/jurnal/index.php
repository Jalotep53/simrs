<?php

use frontend\models\Jurnal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JurnalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jurnals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jurnal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_jurnal',
            'no_bukti',
            'tgl_jurnal',
            'jam_jurnal',
            'jenis',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jurnal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_jurnal' => $model->no_jurnal]);
                 }
            ],
        ],
    ]); ?>


</div>
