<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Pegawai $model */

$this->title = 'Create Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
