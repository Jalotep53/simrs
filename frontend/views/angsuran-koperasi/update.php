<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AngsuranKoperasi $model */

$this->title = 'Update Angsuran Koperasi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Angsuran Koperasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'tanggal_pinjam' => $model->tanggal_pinjam, 'tanggal_angsur' => $model->tanggal_angsur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="angsuran-koperasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
