<?php

use frontend\models\PengkajianRestrain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengkajian Restrains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengkajian-restrain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengkajian Restrain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nip',
            'gcs',
            'refleka_cahaya_ka',
            //'refleka_cahaya_ki',
            //'ukuran_pupil_ka',
            //'ukuran_pupil_ki',
            //'td',
            //'suhu',
            //'rr',
            //'nadi',
            //'hasil_observasi',
            //'pertimbangan_klinis',
            //'restrain_non_farmakologi',
            //'restrain_non_farmakologi_keterangan',
            //'restrain_farmakologi',
            //'sudah_dijelaskan_keluarga',
            //'keluarga_yang_menyetujui',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengkajianRestrain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
