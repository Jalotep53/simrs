<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukKendali $model */

$this->title = 'Update Surat Masuk Kendali: ' . $model->no_kendali;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk Kendalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kendali, 'url' => ['view', 'no_kendali' => $model->no_kendali]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-masuk-kendali-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
