<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPenagihanPiutang $model */

$this->title = 'Create Akun Penagihan Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Akun Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-penagihan-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
