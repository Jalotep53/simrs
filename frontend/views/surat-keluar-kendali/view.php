<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarKendali $model */

$this->title = $model->no_kendali;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Kendalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keluar-kendali-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_kendali' => $model->no_kendali], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_kendali' => $model->no_kendali], [
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
            'no_kendali',
            'kd_indeks',
            'no_urut',
            'tgl_selesai',
            'tgl_kembali',
            'kepada',
        ],
    ]) ?>

</div>
