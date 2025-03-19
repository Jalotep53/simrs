<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePendaftaran $model */

$this->title = 'Create Pcare Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-pendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
