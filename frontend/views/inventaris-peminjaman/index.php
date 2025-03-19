<?php

use frontend\models\InventarisPeminjaman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisPeminjamanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Peminjamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'peminjam',
            'tlp',
            'no_inventaris',
            'tgl_pinjam',
            'tgl_kembali',
            //'nip',
            //'status_pinjam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisPeminjaman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
                 }
            ],
        ],
    ]); ?>


</div>
