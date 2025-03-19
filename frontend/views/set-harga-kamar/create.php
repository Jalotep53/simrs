<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaKamar $model */

$this->title = 'Create Set Harga Kamar';
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-kamar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
