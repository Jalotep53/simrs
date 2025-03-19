<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObat $model */

$this->title = 'Create Pelayanan Informasi Obat';
$this->params['breadcrumbs'][] = ['label' => 'Pelayanan Informasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelayanan-informasi-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
