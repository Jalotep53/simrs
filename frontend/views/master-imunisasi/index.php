<?php

use frontend\models\MasterImunisasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterImunisasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Imunisasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-imunisasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Imunisasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_imunisasi',
            'nama_imunisasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterImunisasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_imunisasi' => $model->kode_imunisasi]);
                 }
            ],
        ],
    ]); ?>


</div>
