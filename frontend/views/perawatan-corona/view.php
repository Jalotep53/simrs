<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCorona $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Perawatan Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perawatan-corona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_rawat',
            'pemulasaraan_jenazah',
            'kantong_jenazah',
            'peti_jenazah',
            'plastik_erat',
            'desinfektan_jenazah',
            'mobil_jenazah',
            'desinfektan_mobil_jenazah',
            'covid19_status_cd',
            'nomor_kartu_t',
            'episodes1',
            'episodes2',
            'episodes3',
            'episodes4',
            'episodes5',
            'episodes6',
            'covid19_cc_ind',
        ],
    ]) ?>

</div>
