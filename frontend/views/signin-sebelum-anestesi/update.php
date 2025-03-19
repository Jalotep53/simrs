<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesi $model */

$this->title = 'Update Signin Sebelum Anestesi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Signin Sebelum Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="signin-sebelum-anestesi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
