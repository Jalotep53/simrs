<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanAnggota $model */

$this->title = 'Update Perpustakaan Anggota: ' . $model->no_anggota;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_anggota, 'url' => ['view', 'no_anggota' => $model->no_anggota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-anggota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
