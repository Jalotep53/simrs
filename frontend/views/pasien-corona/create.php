<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienCorona $model */

$this->title = 'Create Pasien Corona';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-corona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
