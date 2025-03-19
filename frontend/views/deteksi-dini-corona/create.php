<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCorona $model */

$this->title = 'Create Deteksi Dini Corona';
$this->params['breadcrumbs'][] = ['label' => 'Deteksi Dini Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deteksi-dini-corona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
