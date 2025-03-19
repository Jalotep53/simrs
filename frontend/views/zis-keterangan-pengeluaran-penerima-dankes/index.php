<?php

use frontend\models\ZisKeteranganPengeluaranPenerimaDankes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganPengeluaranPenerimaDankesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Zis Keterangan Pengeluaran Penerima Dankes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-pengeluaran-penerima-dankes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zis Keterangan Pengeluaran Penerima Dankes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ZisKeteranganPengeluaranPenerimaDankes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
