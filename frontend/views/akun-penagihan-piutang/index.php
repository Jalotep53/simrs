<?php

use frontend\models\AkunPenagihanPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPenagihanPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akun Penagihan Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-penagihan-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun Penagihan Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'nama_bank',
            'atas_nama',
            'no_rek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkunPenagihanPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>
