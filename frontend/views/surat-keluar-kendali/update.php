<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarKendali $model */

$this->title = 'Update Surat Keluar Kendali: ' . $model->no_kendali;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Kendalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kendali, 'url' => ['view', 'no_kendali' => $model->no_kendali]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keluar-kendali-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
