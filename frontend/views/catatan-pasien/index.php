<?php

use frontend\models\CatatanPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catatan Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catatan Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'catatan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CatatanPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
