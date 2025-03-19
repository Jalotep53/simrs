<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukIcu $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Masuk Icus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checklist-kriteria-masuk-icu-view">

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
            'prioritas1_1',
            'prioritas1_2',
            'prioritas1_3',
            'prioritas1_4',
            'prioritas1_5',
            'prioritas1_6',
            'prioritas2_1',
            'prioritas2_2',
            'prioritas2_3',
            'prioritas2_4',
            'prioritas2_5',
            'prioritas2_6',
            'prioritas2_7',
            'prioritas2_8',
            'prioritas3_1',
            'prioritas3_2',
            'prioritas3_3',
            'prioritas3_4',
            'kriteria_fisiologis_tanda_vital_1',
            'kriteria_fisiologis_tanda_vital_2',
            'kriteria_fisiologis_tanda_vital_3',
            'kriteria_fisiologis_tanda_vital_4',
            'kriteria_fisiologis_tanda_vital_5',
            'kriteria_fisiologis_laborat_1',
            'kriteria_fisiologis_laborat_2',
            'kriteria_fisiologis_laborat_3',
            'kriteria_fisiologis_laborat_4',
            'kriteria_fisiologis_laborat_5',
            'kriteria_fisiologis_laborat_6',
            'kriteria_fisiologis_radiologi_1',
            'kriteria_fisiologis_radiologi_2',
            'kriteria_fisiologis_klinis_1',
            'kriteria_fisiologis_klinis_2',
            'kriteria_fisiologis_klinis_3',
            'kriteria_fisiologis_klinis_4',
            'kriteria_fisiologis_klinis_5',
            'kriteria_fisiologis_klinis_6',
            'kriteria_fisiologis_klinis_7',
            'kriteria_fisiologis_klinis_8',
            'nik',
        ],
    ]) ?>

</div>
