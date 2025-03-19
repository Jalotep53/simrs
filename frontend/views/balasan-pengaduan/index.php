<?php

use frontend\models\BalasanPengaduan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BalasanPengaduanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balasan Pengaduans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balasan-pengaduan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Balasan Pengaduan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pengaduan',
            'pesan_balasan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BalasanPengaduan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pengaduan' => $model->id_pengaduan]);
                 }
            ],
        ],
    ]); ?>


</div>
