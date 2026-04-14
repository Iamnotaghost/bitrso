<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php if(!empty($aMenuLinks)): ?>
<ul class="nav__list">
<?php foreach($aMenuLinks as $arItem): ?>
  <li class="nav__item<?php if($arItem["SELECTED"]): ?> nav__item--active<?php endif; ?>">
    <a class="nav__link" href="<?=htmlspecialcharsbx($arItem["LINK"])?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
  </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>