<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SiranapKetersediaanKamar $model */

$this->title = 'Create Siranap Ketersediaan Kamar';
$this->params['breadcrumbs'][] = ['label' => 'Siranap Ketersediaan Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siranap-ketersediaan-kamar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
