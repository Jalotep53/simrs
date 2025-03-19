<?php

use frontend\models\SuratPulangAtasPermintaanSendiriSaksiKeluarga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriSaksiKeluargaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Pulang Atas Permintaan Sendiri Saksi Keluargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pulang-atas-permintaan-sendiri-saksi-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Pulang Atas Permintaan Sendiri Saksi Keluarga', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, SuratPulangAtasPermintaanSendiriSaksiKeluarga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
