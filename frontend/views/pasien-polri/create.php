<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienPolri $model */

$this->title = 'Create Pasien Polri';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-polri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
