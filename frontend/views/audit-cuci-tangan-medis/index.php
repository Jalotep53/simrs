<?php

use frontend\models\AuditCuciTanganMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditCuciTanganMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Cuci Tangan Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-cuci-tangan-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Cuci Tangan Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'nik',
            'sebelum_menyentuh_pasien',
            'sebelum_tehnik_aseptik',
            'setelah_terpapar_cairan_tubuh_pasien',
            //'setelah_kontak_dengan_pasien',
            //'setelah_kontak_dengan_lingkungan_pasien',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditCuciTanganMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'nik' => $model->nik]);
                 }
            ],
        ],
    ]); ?>


</div>
