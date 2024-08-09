<?php

use frontend\models\Petugas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PetugasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Petugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="petugas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Petugas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            //'gol_darah',
            //'agama',
            //'stts_nikah',
            //'alamat',
            //'kd_jbtn',
            //'no_telp',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Petugas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip]);
                 }
            ],
        ],
    ]); ?>


</div>
