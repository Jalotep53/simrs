<?php

use frontend\models\Penjab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penjabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penjab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pj',
            'png_jawab',
            'nama_perusahaan',
            'alamat_asuransi',
            'no_telp',
            //'attn',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penjab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>
