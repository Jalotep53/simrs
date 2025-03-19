<?php

use frontend\models\SuratMasukDisposisi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukDisposisiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Masuk Disposisis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-disposisi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Masuk Disposisi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_disposisi',
            'kd_indeks',
            'no_urut',
            'tgl_selesai',
            'isi',
            //'diteruskan',
            //'tgl_kembali',
            //'kepada',
            //'pengesahan',
            //'harap',
            //'catatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratMasukDisposisi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_disposisi' => $model->no_disposisi]);
                 }
            ],
        ],
    ]); ?>


</div>
