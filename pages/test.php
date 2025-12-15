<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
<style>
.complexity-box {
    width: 100%;
    max-width: 480px;
    background: #ffffff;
    border: 2px solid #e7c9ff;
    border-radius: 16px;
    padding: 18px 20px 20px;
    position: relative;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

/* Фиолетовый бейдж */
.complexity-label {
    position: absolute;
    top: -14px;
    left: 18px;
    background: #a259ff;
    color: #fff;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Иконка (звёздочка как в примерном интерфейсе) */
.complexity-label .icon {
    font-size: 13px;
}

/* Заголовок */
.complexity-content h3 {
    margin: 10px 0 8px;
    font-size: 18px;
    font-weight: bold;
}

/* Описание */
.complexity-content p {
    margin: 0;
    font-size: 15px;
    line-height: 1.45;
    color: #666;
}

</style>
</head>
<body>
<div class="complexity-box">
    <div class="complexity-label">
        <span class="icon">✦</span>
        С учётом сложности
    </div>

    <div class="complexity-content">
        <h3>Оценка учитывает сложность проекта.</h3>
        <p>
            Нейросеть анализирует бриф и данные проекта, оценивая сложность, сроки и требования,
            чтобы сформировать точную рыночную стоимость работы.
        </p>
    </div>
</div>

</body>
</html>
