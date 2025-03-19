<?php

use frontend\models\PengajuanBiayaDisetujui;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiayaDisetujuiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Biaya Disetujuis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-biaya-disetujui-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Biaya Disetujui', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengajuan',
            'jumlah',
            'harga',
            'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengajuanBiayaDisetujui $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
