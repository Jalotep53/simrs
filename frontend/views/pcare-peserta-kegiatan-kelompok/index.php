<?php

use frontend\models\PcarePesertaKegiatanKelompok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePesertaKegiatanKelompokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Peserta Kegiatan Kelompoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-peserta-kegiatan-kelompok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Peserta Kegiatan Kelompok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eduId',
            'no_rkm_medis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PcarePesertaKegiatanKelompok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'eduId' => $model->eduId, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
