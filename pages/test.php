<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
<style>
.tree ul{
  display:none;
  padding-left:15px;
}

.tree li.open > ul{
  display:block;
}

.tree-item{
  cursor:pointer;
  padding:5px 0;
}

</style>
</head>
<body>
<ul class="tree">
  <li>
    <div class="tree-item">A</div>
    <ul>
      <li>
        <div class="tree-item">A1</div>
        <ul>
          <li><div class="tree-item">A11</div></li>
          <li><div class="tree-item">A12</div></li>
          <li><div class="tree-item">A13</div></li>
        </ul>
      </li>
      <li><div class="tree-item">A2</div></li>
      <li><div class="tree-item">A3</div></li>
    </ul>
  </li>

  <li>
    <div class="tree-item">B</div>
    <ul>
      <li><div class="tree-item">B1</div></li>
      <li><div class="tree-item">B2</div></li>
    </ul>
  </li>

  <li><div class="tree-item">C</div></li>
</ul>

<script>
document.addEventListener("click", function(e){
  
  if (!e.target.classList.contains("tree-item")) return;
  
  let li = e.target.closest("li");
  let parentUl = li.parentElement;

  [...parentUl.children].forEach(el=>{
    if(el !== li){
      el.classList.remove("open");
    }
  });

  li.classList.toggle("open");
});

</script>
</body>
</html>
