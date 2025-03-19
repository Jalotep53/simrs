<?php

use frontend\models\UtdDonor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Donors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-donor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Donor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_donor',
            'no_pendonor',
            'tanggal',
            'dinas',
            'tensi',
            //'no_bag',
            //'jenis_bag',
            //'jenis_donor',
            //'tempat_aftap',
            //'petugas_aftap',
            //'hbsag',
            //'hcv',
            //'hiv',
            //'spilis',
            //'malaria',
            //'petugas_u_saring',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdDonor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_donor' => $model->no_donor]);
                 }
            ],
        ],
    ]); ?>


</div>
