<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
</head>
<body>
<div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>
<header class="header">
	<div class="header__container">
		<div class="header__logo">
			<div class="logo__image stud"><img src="/local/templates/rso/images/logoStud.svg" alt="Логотип Студ"></div>
			<div class="logo__image rso"><img src="/local/templates/rso/images/logoRso.svg" alt="Логотип РСО"></div></div>
		<nav class="header__nav" id="mainNav">
			<ul class="nav__list">
				<li class="nav__item"><a href="/" class="nav__link nav__link--activate">Главная</a></li>
				<li class="nav__item"><a href="/join" class="nav__link">Хочу вступить</a></li>
				<li class="nav__item"><a href="/life" class="nav__link">Жизнь в РСО</a></li>
				<li class="nav__item"><a href="/collab" class="nav__link">Хочу сотрудничать</a></li>
				<li class="nav__item"><a href="/about" class="nav__link">О нас</a></li>
				<li class="nav__item"><a href="/parents" class="nav__link">Родителям</a></li>
				<li class="nav__item"><a href="/study" class="nav__link">Обучения</a></li></ul></nav></div>
	<div class="header__social">
		<ul class="social__list">
			<li class="social__item">
				<a href="https://vk.com/rso63" class="social-vk" target="_blank" title="ВКонтакте">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.8 18.1c-6.5 0-10.2-4.5-10.4-11.9h3.3c.1 5.4 2.5 7.7 4.4 8.2V6.2h3.1v4.7c1.9-.2 3.8-2.3 4.5-4.7h3.1c-.5 2.9-2.6 5-4.1 5.9 1.5.7 3.9 2.7 4.8 5.9h-3.4c-.7-2.3-2.5-4-4.9-4.3v4.3h-.4z"/></svg></a></li>
			<li class="social__item">
				<a href="https://t.me/rso63" class="social-tg" target="_blank" title="Telegram">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.28-.02-.12.03-2.07 1.32-5.84 3.87-.55.38-1.05.56-1.5.55-.49-.01-1.44-.28-2.15-.51-.87-.28-1.56-.43-1.5-.92.03-.25.38-.51 1.05-.78 4.12-1.79 6.87-2.97 8.26-3.54 3.93-1.62 4.75-1.9 5.28-1.91.12 0 .37.03.54.18.14.12.18.28.2.47-.01.06.01.24 0 .37z"/></svg></a></li></ul>
	</div>
</header>

<main>
