<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswl $model */

$this->title = 'Create Hasil Tindakan Eswl';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Tindakan Eswls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-tindakan-eswl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
