<?php

use frontend\models\AuditBundleVap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleVapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Bundle Vaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-vap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Bundle Vap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'posisi_kepala',
            'pengkajian_setiap_hari',
            'hand_hygiene',
            //'oral_hygiene',
            //'suction_manajemen_sekresi',
            //'profilaksis_peptic_ulcer',
            //'dvt_profiklasisi',
            //'penggunaan_apd_sesuai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditBundleVap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
