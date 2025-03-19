<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMati $model */

$this->title = 'Create Pasien Mati';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Matis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-mati-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
