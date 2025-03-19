<?php

use frontend\models\Tampreturpiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturpiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tampreturpiutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturpiutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tampreturpiutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_piutang',
            'kode_brng',
            'nama_brng',
            'jml_piutang',
            'h_piutang',
            //'jml_retur',
            //'h_retur',
            //'satuan',
            //'subtotal',
            //'no_batch',
            //'petugas',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tampreturpiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
                 }
            ],
        ],
    ]); ?>


</div>
