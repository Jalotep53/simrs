<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryTambahanPotongan $model */

$this->title = 'Create Temporary Tambahan Potongan';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Tambahan Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-tambahan-potongan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
