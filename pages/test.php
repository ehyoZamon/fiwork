<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Блок Статусов</title>
    <style>
        /* Общие стили для контейнера и текста */
        .status-block-container {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            /* Можно добавить padding и ширину для центрирования или ограничения */
        }
        
        /* Стили для каждого элемента */
        .status-item {
            display: flex;
            align-items: center;
            position: relative; /* Для позиционирования линии */
            padding-bottom: 25px; /* Расстояние между пунктами */
        }
        
        /* Вертикальная линия */
        .status-item:not(:last-child)::before {
            content: '';
            position: absolute;
            left: 15px; /* Позиционирование по центру иконки */
            top: 30px;
            bottom: -5px;
            width: 2px;
            background-color: #9cd667; /* Цвет линии */
            z-index: 0;
        }
        
        /* Удаление линии после последнего элемента */
        .status-item:last-child::before {
            content: none;
        }
        .status-item:last-child {
            padding-bottom: 0;
        }
        
        /* Стиль иконки (круг) */
        .status-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1; /* Поверх линии */
        }
        
        /* Стиль для текста */
        .status-text {
            font-size: 18px;
            color: #333;
        }
        
        /* ---------------------------------- */
        /* Стили для ЗАВЕРШЕННЫХ статусов (.completed) */
        /* ---------------------------------- */
        .completed .status-icon {
            background-color: #6da749; /* Темно-зеленый фон для галочки */
        }
        
        /* Галочка (используем символ Unicode) */
        .completed .status-icon::after {
            content: '✓'; 
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        
        
        /* ---------------------------------- */
        /* Стили для ТЕКУЩЕГО статуса (.current) */
        /* ---------------------------------- */
        .current .status-icon {
            background-color: #9cd667; /* Светло-зеленый фон для текущего статуса */
            border: 3px solid #6da749; /* Более темный ободок */
        }
        
        /* Уменьшение внутреннего круга, чтобы он выглядел как точка */
        .current .status-icon::after {
            content: '';
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #6da749; 
        }
    </style>
</head>
<body>
    <div class="status-block-container">
        <div class="status-item completed">
            <div class="status-icon"></div>
            <div class="status-text">Создан</div>
        </div>
        <div class="status-item completed">
            <div class="status-icon"></div>
            <div class="status-text">Взят в работу</div>
        </div>
        <div class="status-item completed">
            <div class="status-icon"></div>
            <div class="status-text">Предоставлены данные</div>
        </div>
        <div class="status-item completed">
            <div class="status-icon"></div>
            <div class="status-text">Сдан на проверку</div>
        </div>
        <div class="status-item current">
            <div class="status-icon"></div>
            <div class="status-text">Заказ принят</div>
        </div>
    </div>
</body>
</html>