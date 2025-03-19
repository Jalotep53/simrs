<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankpapua $model */

$this->title = 'Update Set Akun Bankpapua: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Bankpapuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-akun-bankpapua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
