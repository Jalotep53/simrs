<?php

use frontend\models\KelompokJabatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KelompokJabatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelompok Jabatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompok-jabatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelompok Jabatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kelompok',
            'nama_kelompok',
            'indek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KelompokJabatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kelompok' => $model->kode_kelompok]);
                 }
            ],
        ],
    ]); ?>


</div>
