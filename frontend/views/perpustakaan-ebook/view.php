<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanEbook $model */

$this->title = $model->kode_ebook;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Ebooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perpustakaan-ebook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_ebook' => $model->kode_ebook], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_ebook' => $model->kode_ebook], [
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
            'kode_ebook',
            'judul_ebook',
            'jml_halaman',
            'kode_penerbit',
            'kode_pengarang',
            'thn_terbit',
            'id_kategori',
            'id_jenis',
            'berkas',
        ],
    ]) ?>

</div>
