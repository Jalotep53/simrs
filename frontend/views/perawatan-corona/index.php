<?php

use frontend\models\PerawatanCorona;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCoronaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perawatan Coronas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawatan-corona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perawatan Corona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'pemulasaraan_jenazah',
            'kantong_jenazah',
            'peti_jenazah',
            'plastik_erat',
            //'desinfektan_jenazah',
            //'mobil_jenazah',
            //'desinfektan_mobil_jenazah',
            //'covid19_status_cd',
            //'nomor_kartu_t',
            //'episodes1',
            //'episodes2',
            //'episodes3',
            //'episodes4',
            //'episodes5',
            //'episodes6',
            //'covid19_cc_ind',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerawatanCorona $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
