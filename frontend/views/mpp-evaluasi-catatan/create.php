<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiCatatan $model */

$this->title = 'Create Mpp Evaluasi Catatan';
$this->params['breadcrumbs'][] = ['label' => 'Mpp Evaluasi Catatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-evaluasi-catatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
