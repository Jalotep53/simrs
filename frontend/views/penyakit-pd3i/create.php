<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitPd3i $model */

$this->title = 'Create Penyakit Pd3i';
$this->params['breadcrumbs'][] = ['label' => 'Penyakit Pd3is', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-pd3i-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
