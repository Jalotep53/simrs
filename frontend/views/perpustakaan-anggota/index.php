<?php

use frontend\models\PerpustakaanAnggota;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanAnggotaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Anggotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_anggota',
            'nama_anggota',
            'tmp_lahir',
            'tgl_lahir',
            'j_kel',
            //'alamat',
            //'no_telp',
            //'email:email',
            //'tgl_gabung',
            //'masa_berlaku',
            //'jenis_anggota',
            //'nomer_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanAnggota $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_anggota' => $model->no_anggota]);
                 }
            ],
        ],
    ]); ?>


</div>
