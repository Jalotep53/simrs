<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Peminjampiutang $model */

$this->title = 'Create Peminjampiutang';
$this->params['breadcrumbs'][] = ['label' => 'Peminjampiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjampiutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
