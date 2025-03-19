<?php

use frontend\models\PenilaianAwalKeperawatanGigiMasalah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianAwalKeperawatanGigiMasalahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Awal Keperawatan Gigi Masalahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-awal-keperawatan-gigi-masalah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Awal Keperawatan Gigi Masalah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_masalah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianAwalKeperawatanGigiMasalah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_masalah' => $model->kode_masalah]);
                 }
            ],
        ],
    ]); ?>


</div>
