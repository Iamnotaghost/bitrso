<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php if(!empty($arResult["ITEMS"])): ?>
<?php $arMain = $arResult["ITEMS"][0]; ?>
<section class="hero">
  <div class="hero-inner">

    <!-- ЛЕВАЯ ЧАСТЬ: большое фото + 2 аватарки -->
    <div class="hero-side hero-side-left">
      <?php if(!empty($arResult["ITEMS"][0]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
        <img class="hero-big-photo" src="<?=CFile::GetPath($arResult["ITEMS"][0]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
      <?php endif; ?>
      <div class="hero-avatars-left">
        <?php if(!empty($arResult["ITEMS"][2]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
          <div class="hero-avatar">
            <img src="<?=CFile::GetPath($arResult["ITEMS"][2]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
          </div>
        <?php endif; ?>
        <div class="hero-arc hero-arc-left"></div>
        <?php if(!empty($arResult["ITEMS"][3]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
          <div class="hero-avatar">
            <img src="<?=CFile::GetPath($arResult["ITEMS"][3]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- ЦЕНТР: текст и кнопка -->
    <div class="hero-center">
      <p class="hero-subtitle"><?=htmlspecialcharsbx($arMain["PROPERTIES"]["SUBTITLE"]["VALUE"] ?? "Студенческие отряды Самарской области")?></p>
      <h1 class="hero-title"><?=htmlspecialcharsbx($arMain["NAME"])?></h1>
      <?php if(!empty($arMain["PROPERTIES"]["BUTTON_TEXT"]["VALUE"])): ?>
        <a href="<?=htmlspecialcharsbx($arMain["PROPERTIES"]["BUTTON_LINK"]["VALUE"] ?? "/join/")?>" class="btn-yellow">
          <?=htmlspecialcharsbx($arMain["PROPERTIES"]["BUTTON_TEXT"]["VALUE"])?>
        </a>
      <?php endif; ?>
    </div>

    <!-- ПРАВАЯ ЧАСТЬ: 2 аватарки + большое фото -->
    <div class="hero-side hero-side-right">
      <div class="hero-avatars-right">
        <?php if(!empty($arResult["ITEMS"][4]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
          <div class="hero-avatar">
            <img src="<?=CFile::GetPath($arResult["ITEMS"][4]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
          </div>
        <?php endif; ?>
        <div class="hero-arc hero-arc-right"></div>
        <?php if(!empty($arResult["ITEMS"][5]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
          <div class="hero-avatar">
            <img src="<?=CFile::GetPath($arResult["ITEMS"][5]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
          </div>
        <?php endif; ?>
      </div>
      <?php if(!empty($arResult["ITEMS"][1]["PROPERTIES"]["PHOTO"]["VALUE"])): ?>
        <img class="hero-big-photo" src="<?=CFile::GetPath($arResult["ITEMS"][1]["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="">
      <?php endif; ?>
    </div>

  </div>
</section>
<?php endif; ?>