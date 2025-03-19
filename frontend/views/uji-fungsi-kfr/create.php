<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UjiFungsiKfr $model */

$this->title = 'Create Uji Fungsi Kfr';
$this->params['breadcrumbs'][] = ['label' => 'Uji Fungsi Kfrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uji-fungsi-kfr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
