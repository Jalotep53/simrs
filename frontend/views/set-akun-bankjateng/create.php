<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankjateng $model */

$this->title = 'Create Set Akun Bankjateng';
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Bankjatengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-bankjateng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
