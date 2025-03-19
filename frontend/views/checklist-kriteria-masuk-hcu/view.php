<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukHcu $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Masuk Hcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checklist-kriteria-masuk-hcu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'tanggal',
            'kardiologi1',
            'kardiologi2',
            'kardiologi3',
            'kardiologi4',
            'kardiologi5',
            'kardiologi6',
            'pernapasan1',
            'pernapasan2',
            'pernapasan3',
            'syaraf1',
            'syaraf2',
            'syaraf3',
            'syaraf4',
            'pencernaan1',
            'pencernaan2',
            'pencernaan3',
            'pencernaan4',
            'pembedahan1',
            'pembedahan2',
            'hematologi1',
            'hematologi2',
            'infeksi',
            'nik',
        ],
    ]) ?>

</div>
