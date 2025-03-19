<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetJgtambah $model */

$this->title = 'Update Set Jgtambah: ' . $model->pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Set Jgtambahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pendidikan, 'url' => ['view', 'pendidikan' => $model->pendidikan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-jgtambah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
