<?php

use frontend\models\AuditBundleIsk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Bundle Isks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-isk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Bundle Isk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'pemasangan_sesuai_indikasi',
            'hand_hygiene',
            'menggunakan_apd_yang_tepat',
            //'pemasangan_menggunakan_alat_steril',
            //'segera_dilepas_setelah_tidak_diperlukan',
            //'pengisian_balon_sesuai_petunjuk',
            //'fiksasi_kateter_dengan_plester',
            //'urinebag_menggantung_tidak_menyentuh_lantai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditBundleIsk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
