<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunMandiri $model */

$this->title = 'Update Set Akun Mandiri: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Mandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-akun-mandiri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
