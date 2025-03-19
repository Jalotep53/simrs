<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiInduksiPersalinan $model */

$this->title = 'Create Catatan Observasi Induksi Persalinan';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Observasi Induksi Persalinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-observasi-induksi-persalinan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
