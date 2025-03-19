<?php

use frontend\models\K3rsJenisPekerjaan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisPekerjaanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Jenis Pekerjaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-jenis-pekerjaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Jenis Pekerjaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pekerjaan',
            'jenis_pekerjaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsJenisPekerjaan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_pekerjaan' => $model->kode_pekerjaan]);
                 }
            ],
        ],
    ]); ?>


</div>
