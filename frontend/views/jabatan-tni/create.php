<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JabatanTni $model */

$this->title = 'Create Jabatan Tni';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-tni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
