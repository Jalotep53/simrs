<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSifat $model */

$this->title = 'Create Surat Sifat';
$this->params['breadcrumbs'][] = ['label' => 'Surat Sifats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-sifat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
