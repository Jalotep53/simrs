<?php

use frontend\models\HasilTindakanEswl;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswlSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Tindakan Eswls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-tindakan-eswl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Tindakan Eswl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'mulai',
            'selesai',
            'kd_dokter',
            'nip',
            //'diagnosa',
            //'tindakan',
            //'obat_analgesik',
            //'obat_lain',
            //'uraian_tindakan',
            //'uraian_tindakan_focus',
            //'uraian_tindakan_rate',
            //'uraian_tindakan_power',
            //'uraian_tindakan_shock',
            //'diintegrasi',
            //'kekurangan',
            //'anjungan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilTindakanEswl $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai]);
                 }
            ],
        ],
    ]); ?>


</div>
