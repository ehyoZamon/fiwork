<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
<style>
    /* Общие стили для блока */
.partner-materials-block {
    background-color: #f6f6f6; /* Светло-серый фон */
    padding: 30px 40px;
    border-radius: 12px;
    max-width: 1000px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: #1c1c1c;
}

/* Заголовок блока */
.block-title {
    font-size: 36px;
    font-weight: bold;
    color: #1c1c1c;
    margin-top: 0;
    margin-bottom: 30px;
}

/* Контейнер для трех колонок */
.content-grid {
    display: grid;
    /* Создаем 3 колонки одинаковой ширины */
    grid-template-columns: repeat(3, 1fr);
    /* Задаем вертикальный и горизонтальный отступы между элементами */
    gap: 30px 40px; 
}

/* Стили для каждой колонки/секции */
.content-column {
    padding-right: 20px; /* Небольшой отступ, если текст будет длинным */
}

.section-title {
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    margin-bottom: 10px;
    color: #1c1c1c;
}

.section-description {
    font-size: 15px;
    color: #4a4a4a;
    line-height: 1.4;
    margin-bottom: 10px;
}

/* Ссылки (email и "Ознакомиться") */
.contact-link,
.download-link {
    display: inline-block;
    font-size: 15px;
    color: #0177FF; /* Используем синий цвет из вашего первого примера */
    text-decoration: none;
    font-weight: 500;
    line-height: 1.4;
}

.contact-link:hover,
.download-link:hover {
    text-decoration: underline;
}

/* Медиа-запрос для лучшей адаптивности на небольших экранах */
@media (max-width: 768px) {
    .content-grid {
        /* При меньшей ширине делаем 2 колонки */
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 500px) {
    .content-grid {
        /* При совсем маленькой ширине делаем 1 колонку */
        grid-template-columns: 1fr;
    }
    .partner-materials-block {
        padding: 20px;
    }
}
</style>
</head>
<body>

<div class="partner-materials-block">
    <h2 class="block-title">Материалы для партнеров</h2>

    <div class="content-grid">
        <div class="content-column">
            <h3 class="section-title">Для медиа</h3>
            <p class="section-description">По вопросам медиапартнёрств и специальных проектов</p>
            <a href="mailto:media@fiwork.ru" class="contact-link">media@fiwork.ru</a>
        </div>

        <div class="content-column">
            <h3 class="section-title">Представителям прессы</h3>
            <p class="section-description">Контакт пресс-службы для обращений СМИ</p>
            <a href="mailto:press@fiwork.ru" class="contact-link">press@fiwork.ru</a>
        </div>

        <div class="content-column">
            <h3 class="section-title">Логотипы VK</h3>
            <p class="section-description">Продукты экосистемы VK</p>
            <a href="#" class="download-link">Ознакомиться и загрузить →</a>
        </div>

        <div class="content-column">
            <h3 class="section-title">Медиагалерея</h3>
            <p class="section-description">Логотип и официальные фотографии ВКонтакте</p>
            <a href="#" class="download-link">Ознакомиться и загрузить →</a>
        </div>

        <div class="content-column">
            <h3 class="section-title">Виджеты для сайтов</h3>
            <p class="section-description">Возможность встроить запись, видеть сообщества или плейлист</p>
            <a href="#" class="download-link">Выбрать виджет →</a>
        </div>

        <div class="content-column empty-placeholder"></div>
    </div>
</div>       
</body>
</html>
