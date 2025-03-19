<?php

use frontend\models\PeminjamanBerkas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanBerkasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peminjaman Berkas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-berkas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peminjaman Berkas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'peminjam',
            'id_ruang',
            'no_rkm_medis',
            'tgl_pinjam',
            'tgl_kembali',
            //'nip',
            //'status_pinjam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PeminjamanBerkas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
                 }
            ],
        ],
    ]); ?>


</div>
