<?php

use frontend\models\InacbgKlaimBaru2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru2Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inacbg Klaim Baru2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-klaim-baru2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inacbg Klaim Baru2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'no_sep',
            'patient_id',
            'admission_id',
            'hospital_admission_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InacbgKlaimBaru2 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
