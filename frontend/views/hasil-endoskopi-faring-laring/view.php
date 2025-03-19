<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaring $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Faring Larings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-endoskopi-faring-laring-view">

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
            'tanggal',
            'kd_dokter',
            'diagnosa_klinis',
            'kiriman_dari',
            'faring_uvula',
            'faring_arkus_faring',
            'faring_dinding_posterior',
            'faring_tonsil',
            'laring_tonsil_lingual',
            'laring_valekula',
            'laring_sinus_piriformis',
            'laring_epiglotis',
            'laring_arytenoid',
            'laring_plika_ventrikularis',
            'laring_pita_suara',
            'laring_rima_vocalis',
            'laring_lainlain',
            'kesan',
            'saran',
        ],
    ]) ?>

</div>
