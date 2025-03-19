<?php

use frontend\models\Tampreturjual;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturjualSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tampreturjuals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturjual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tampreturjual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_jual',
            'kode_brng',
            'nama_brng',
            'jml_jual',
            'h_jual',
            //'jml_retur',
            //'h_retur',
            //'satuan',
            //'subtotal',
            //'no_batch',
            //'petugas',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tampreturjual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
