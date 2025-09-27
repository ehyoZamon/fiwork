<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Кадрирование</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"/>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f4f4f4;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .crop-container {
      width: 600px;
      height: 400px;
      background: #fff;
      border: 1px solid #ddd;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .buttons {
      margin-top: 10px;
      text-align: center;
    }
    button {
      margin: 5px;
      padding: 8px 14px;
      border: none;
      border-radius: 4px;
      background: #007bff;
      color: #fff;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    #result {
      margin-top: 15px;
      max-width: 100%;
    }
  </style>
</head>
<body>
  <div class="crop-container">
    <img id="image" src="https://picsum.photos/id/1015/1200/800" alt="Фото">
    <div class="buttons">
      <button id="cropBtn">Обрезать</button>
      <button id="resetBtn">Сбросить</button>
    </div>
    <div>
      <img id="result" alt="Результат">
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
  <script>
    const image = document.getElementById('image');
    const result = document.getElementById('result');
    const cropBtn = document.getElementById('cropBtn');
    const resetBtn = document.getElementById('resetBtn');

    const cropper = new Cropper(image, {
      aspectRatio: 1, // квадрат, можно убрать для свободного
      viewMode: 1,
      guides: true,  // сетка 3х3
    });

    cropBtn.addEventListener('click', () => {
      const canvas = cropper.getCroppedCanvas({
        width: 400,
        height: 400
      });
      result.src = canvas.toDataURL('image/png');
    });

    resetBtn.addEventListener('click', () => {
      cropper.reset();
      result.src = "";
    });
  </script>
</body>
</html>
