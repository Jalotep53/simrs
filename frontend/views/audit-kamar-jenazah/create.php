<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKamarJenazah $model */

$this->title = 'Create Audit Kamar Jenazah';
$this->params['breadcrumbs'][] = ['label' => 'Audit Kamar Jenazahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-kamar-jenazah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
