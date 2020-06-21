<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Familia $familia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $familia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="familias form large-9 medium-8 columns content">
    <?= $this->Form->create($familia) ?>
    <fieldset>
        <legend><?= __('Edit Familia') ?></legend>
        <?php
            echo $this->Form->control('familia_nome');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
