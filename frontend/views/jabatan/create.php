<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jabatan $model */

$this->title = 'Create Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
