<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratButaWarna $model */

$this->title = 'Create Surat Buta Warna';
$this->params['breadcrumbs'][] = ['label' => 'Surat Buta Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-buta-warna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
