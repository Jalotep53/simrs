<?php

use frontend\models\SuratPersetujuanUmumPembuatPernyataan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmumPembuatPernyataanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Persetujuan Umum Pembuat Pernyataans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-umum-pembuat-pernyataan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Persetujuan Umum Pembuat Pernyataan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPersetujuanUmumPembuatPernyataan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
