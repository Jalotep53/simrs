<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPsikologi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Psikologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-psikologi-view">

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
            'nip',
            'anamnesis',
            'dikirim_dari',
            'tujuan_pemeriksaan',
            'ket_anamnesis:ntext',
            'rupa',
            'bentuk_tubuh',
            'tindakan',
            'pakaian',
            'ekspresi',
            'berbicara',
            'penggunaan_kata',
            'ciri_menyolok',
            'hasil_psikotes:ntext',
            'kepribadian:ntext',
            'psikodinamika:ntext',
            'kesimpulan_psikolog:ntext',
        ],
    ]) ?>

</div>
