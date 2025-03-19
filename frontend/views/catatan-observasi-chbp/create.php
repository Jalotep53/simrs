<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiChbp $model */

$this->title = 'Create Catatan Observasi Chbp';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Observasi Chbps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-observasi-chbp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
