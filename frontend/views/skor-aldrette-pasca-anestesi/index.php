<?php

use frontend\models\SkorAldrettePascaAnestesi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkorAldrettePascaAnestesiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skor Aldrette Pasca Anestesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-aldrette-pasca-anestesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skor Aldrette Pasca Anestesi', ['create'], ['class' => 'btn btn-success']) ?>
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
            'penilaian_skala2',
            //'penilaian_nilai2',
            //'penilaian_skala3',
            //'penilaian_nilai3',
            //'penilaian_skala4',
            //'penilaian_nilai4',
            //'penilaian_skala5',
            //'penilaian_nilai5',
            //'penilaian_totalnilai',
            //'keluar',
            //'instruksi',
            //'kd_dokter',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkorAldrettePascaAnestesi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
