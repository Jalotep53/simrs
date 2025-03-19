<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasi $model */

$this->title = 'Create Paket Operasi';
$this->params['breadcrumbs'][] = ['label' => 'Paket Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-operasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
