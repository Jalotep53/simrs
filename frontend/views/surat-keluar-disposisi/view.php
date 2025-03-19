<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarDisposisi $model */

$this->title = $model->no_disposisi;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keluar-disposisi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_disposisi' => $model->no_disposisi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_disposisi' => $model->no_disposisi], [
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
            'no_disposisi',
            'kd_indeks',
            'no_urut',
            'tgl_selesai',
            'isi',
            'diteruskan',
            'tgl_kembali',
            'kepada',
            'pengesahan',
            'harap',
            'catatan',
        ],
    ]) ?>

</div>
