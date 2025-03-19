<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasi $model */

$this->title = 'Create Template Laporan Operasi';
$this->params['breadcrumbs'][] = ['label' => 'Template Laporan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-laporan-operasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
