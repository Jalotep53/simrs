<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterPcare $model */

$this->title = 'Create Maping Dokter Pcare';
$this->params['breadcrumbs'][] = ['label' => 'Maping Dokter Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-dokter-pcare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
