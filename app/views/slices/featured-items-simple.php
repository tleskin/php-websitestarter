<div class="row-centered-aired featured-items-simple">

    <ul class="flex-container">

    <?php foreach($slice->getValue()->getArray() as $item) { ?>

      <?php $illustration = $item->get('illustration'); ?>

      <li class="col-2" data-illustration="<?= $illustration ? $illustration->getMain()->getUrl() : ''; ?>">

      <div class="illustration squared-image" <?= $illustration ? 'style="background-image: url('.$illustration->getView("icon")->getUrl().')"' : '' ?>></div>

      <h3><?= $item->get('title') ? $item->get('title')->asText() : ''; ?></h3>

      <?= $item->get('summary') ? $item->get('summary')->asHtml() : ''; ?>

    </li>

    <?php } ?>

    </ul>

</div>
