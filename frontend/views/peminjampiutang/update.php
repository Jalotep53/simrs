<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Peminjampiutang $model */

$this->title = 'Update Peminjampiutang: ' . $model->kode_peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjampiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_peminjam, 'url' => ['view', 'kode_peminjam' => $model->kode_peminjam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjampiutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
