<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanGedung $model */

$this->title = 'Create Pemeliharaan Gedung';
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Gedungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeliharaan-gedung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
