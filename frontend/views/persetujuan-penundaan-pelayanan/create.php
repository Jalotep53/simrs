<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenundaanPelayanan $model */

$this->title = 'Create Persetujuan Penundaan Pelayanan';
$this->params['breadcrumbs'][] = ['label' => 'Persetujuan Penundaan Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persetujuan-penundaan-pelayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
