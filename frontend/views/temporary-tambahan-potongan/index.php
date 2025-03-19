<?php

use frontend\models\TemporaryTambahanPotongan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryTambahanPotonganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Temporary Tambahan Potongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-tambahan-potongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Temporary Tambahan Potongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'nama_tambahan',
            'biaya',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemporaryTambahanPotongan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'nama_tambahan' => $model->nama_tambahan, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>
