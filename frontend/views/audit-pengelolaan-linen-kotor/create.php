<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPengelolaanLinenKotor $model */

$this->title = 'Create Audit Pengelolaan Linen Kotor';
$this->params['breadcrumbs'][] = ['label' => 'Audit Pengelolaan Linen Kotors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pengelolaan-linen-kotor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
