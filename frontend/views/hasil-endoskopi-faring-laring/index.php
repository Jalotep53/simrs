<?php

use frontend\models\HasilEndoskopiFaringLaring;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaringSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Endoskopi Faring Larings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-faring-laring-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Endoskopi Faring Laring', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'diagnosa_klinis',
            'kiriman_dari',
            //'faring_uvula',
            //'faring_arkus_faring',
            //'faring_dinding_posterior',
            //'faring_tonsil',
            //'laring_tonsil_lingual',
            //'laring_valekula',
            //'laring_sinus_piriformis',
            //'laring_epiglotis',
            //'laring_arytenoid',
            //'laring_plika_ventrikularis',
            //'laring_pita_suara',
            //'laring_rima_vocalis',
            //'laring_lainlain',
            //'kesan',
            //'saran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilEndoskopiFaringLaring $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
