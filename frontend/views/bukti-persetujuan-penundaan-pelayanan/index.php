<?php

use frontend\models\BuktiPersetujuanPenundaanPelayanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanPenundaanPelayananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bukti Persetujuan Penundaan Pelayanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-persetujuan-penundaan-pelayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bukti Persetujuan Penundaan Pelayanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuktiPersetujuanPenundaanPelayanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
