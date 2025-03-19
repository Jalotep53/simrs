<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KelompokJabatan $model */

$this->title = 'Create Kelompok Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Kelompok Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompok-jabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
