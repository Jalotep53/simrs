<?php

use frontend\models\PengeluaranObatBhp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranObatBhpSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengeluaran Obat Bhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-obat-bhp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengeluaran Obat Bhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_keluar',
            'tanggal',
            'nip',
            'keterangan',
            'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengeluaranObatBhp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_keluar' => $model->no_keluar]);
                 }
            ],
        ],
    ]); ?>


</div>
