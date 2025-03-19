<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanOperasi $model */

$this->title = 'Create Laporan Operasi';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-operasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
