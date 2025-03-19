<?php

use frontend\models\ParkirBarcode;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirBarcodeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Parkir Barcodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-barcode-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parkir Barcode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_barcode',
            'nomer_kartu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ParkirBarcode $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_barcode' => $model->kode_barcode]);
                 }
            ],
        ],
    ]); ?>


</div>
