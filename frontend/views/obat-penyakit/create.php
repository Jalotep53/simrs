<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatPenyakit $model */

$this->title = 'Create Obat Penyakit';
$this->params['breadcrumbs'][] = ['label' => 'Obat Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-penyakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
