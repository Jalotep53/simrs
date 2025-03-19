<?php

use frontend\models\Peminjampiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjampiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peminjampiutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjampiutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peminjampiutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_peminjam',
            'nama_peminjam',
            'alamat',
            'no_telp',
            'kd_rek',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Peminjampiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_peminjam' => $model->kode_peminjam]);
                 }
            ],
        ],
    ]); ?>


</div>
