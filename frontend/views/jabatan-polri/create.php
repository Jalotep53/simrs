<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JabatanPolri $model */

$this->title = 'Create Jabatan Polri';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-polri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
