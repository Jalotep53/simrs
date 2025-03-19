<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatImunisasi $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Imunisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-imunisasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi], [
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
            'no_rkm_medis',
            'kode_imunisasi',
            'no_imunisasi',
        ],
    ]) ?>

</div>
