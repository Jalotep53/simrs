<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienTni $model */

$this->title = 'Create Pasien Tni';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-tni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
