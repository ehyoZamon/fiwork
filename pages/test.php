<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
<style>
.preview-list {
  display: flex;
  gap: 12px;
  padding: 10px;
  overflow-x: auto;
  font-family: sans-serif;
}

/* Общий стиль карточки */
.file-card {
  position: relative;
  min-width: 110px;
  max-width: 110px;
  height: 110px;
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

/* Превью изображения */
.file-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Стили для документов (PDF и т.д.) */
.file-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5px;
  text-align: center;
}

.file-name {
  font-size: 11px;
  color: #333;
  margin-top: 5px;
  word-break: break-all;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Кнопка удаления (крестик) */
.btn-remove {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 22px;
  height: 22px;
  background: rgba(0,0,0,0.4);
  color: white;
  border-radius: 50%;
  text-align: center;
  line-height: 20px;
  cursor: pointer;
  font-size: 14px;
  z-index: 10;
}

/* Полосатая полоса загрузки как на фото */
.progress-bar {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background: repeating-linear-gradient(
    -45deg,
    #2ecc71,
    #2ecc71 10px,
    #27ae60 10px,
    #27ae60 20px
  );
  animation: move-stripes 2s linear infinite;
  transition: opacity 0.3s ease;
}


/* Класс, который мы добавим через JS */
.progress-bar.loaded {
  opacity: 0;
  pointer-events: none;
}

@keyframes move-stripes {
  from { background-position: 0 0; }
  to { background-position: 40px 0; }
}
</style>
</head>
<body>
<div class="upload-zone">
  <div id="preview-container" class="preview-list"></div>
  
  <div class="input-wrapper">
    <input type="file" id="file-input" multiple style="display: none;">
    <label for="file-input" class="attach-btn">📎</label>
  </div>
</div>
</body>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
</html>
