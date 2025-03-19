<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasswordAsuransi $model */

$this->title = 'Update Password Asuransi: ' . $model->kd_pj;
$this->params['breadcrumbs'][] = ['label' => 'Password Asuransis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pj, 'url' => ['view', 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="password-asuransi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
