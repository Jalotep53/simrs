<?php

use frontend\models\SkorBromagePascaAnestesi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkorBromagePascaAnestesiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skor Bromage Pasca Anestesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-bromage-pasca-anestesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skor Bromage Pasca Anestesi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'penilaian_skala1',
            'penilaian_nilai1',
            'keluar',
            //'instruksi',
            //'kd_dokter',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkorBromagePascaAnestesi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
