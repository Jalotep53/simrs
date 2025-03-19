<?php

use frontend\models\PenilaianAwalKeperawatanIgdMasalah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianAwalKeperawatanIgdMasalahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Awal Keperawatan Igd Masalahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-awal-keperawatan-igd-masalah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Awal Keperawatan Igd Masalah', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, PenilaianAwalKeperawatanIgdMasalah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_masalah' => $model->kode_masalah]);
                 }
            ],
        ],
    ]); ?>


</div>
