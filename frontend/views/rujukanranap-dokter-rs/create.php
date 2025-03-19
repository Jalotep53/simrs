<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanranapDokterRs $model */

$this->title = 'Create Rujukanranap Dokter Rs';
$this->params['breadcrumbs'][] = ['label' => 'Rujukanranap Dokter Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujukanranap-dokter-rs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
