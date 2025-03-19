<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaKeluarIcu $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Keluar Icus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checklist-kriteria-keluar-icu-view">

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
            'kriteria1',
            'kriteria2',
            'kriteria3',
            'kriteria4',
            'kriteria5',
            'kriteria6',
            'kriteria7',
            'kriteria8',
            'kriteria9',
            'kriteria10',
            'kriteria11',
            'nik',
        ],
    ]) ?>

</div>
