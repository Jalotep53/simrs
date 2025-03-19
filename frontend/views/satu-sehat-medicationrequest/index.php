<?php

use frontend\models\SatuSehatMedicationrequest;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationrequestSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Medicationrequests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-medicationrequest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Medicationrequest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'kode_brng',
            'id_medicationrequest',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMedicationrequest $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
