<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ Accordion</title>
<style>
body {
  font-family: "Inter", Arial, sans-serif;
  background: #fff;
  color: #111;
  display: flex;
  justify-content: center;
  align-items: start;
  padding: 60px 20px;
}

.faq-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
  gap: 40px;
  max-width: 1000px;
  width: 100%;
}

.faq {
  border-bottom: 1px solid #eaeaea;
  padding: 16px 0;
}

.faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 600;
  cursor: pointer;
  font-size: 16px;
  color: #111;
  transition: color 0.3s;
}

.faq-question.active {
  color: #007bff;
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  color: #555;
  font-size: 15px;
  line-height: 1.6;
  transition: max-height 0.3s ease;
}

.faq-answer.open {
  margin-top: 10px;
}

.faq-icon {
  font-size: 22px;
  color: #007bff;
  transition: transform 0.3s;
}

.faq-question.active .faq-icon {
  transform: rotate(45deg);
}
</style>
</head>
<body>

<div class="faq-container">
  <div>
    <div class="faq">
      <div class="faq-question">
        <span>What is Webflow and why is it the best website builder?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">
        Vitae congue eu consequat ac felis placerat vestibulum lectus mauris ultrices. 
        Cursus sit amet dictum sit amet justo donec enim diam porttitor lacus luctus accumsan tortor posuere.
      </div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>What is your favorite template from BRIX Templates?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">Answer text goes here...</div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>How do you clone a template from the Showcase?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">Answer text goes here...</div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>Why is BRIX Templates the best Webflow agency?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">Answer text goes here...</div>
    </div>
  </div>

  <div>
    <div class="faq">
      <div class="faq-question">
        <span>When was Webflow officially launched?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">Answer text goes here...</div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>How do you integrate Jetboost with Webflow?</span>
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-answer">Answer text goes here...</div>
    </div>
  </div>
</div>

<script>
document.querySelectorAll(".faq-question").forEach(item => {
  item.addEventListener("click", () => {
    const active = document.querySelector(".faq-question.active");
    if (active && active !== item) {
      active.classList.remove("active");
      active.nextElementSibling.style.maxHeight = null;
      active.nextElementSibling.classList.remove("open");
    }
    item.classList.toggle("active");
    const answer = item.nextElementSibling;
    if (item.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.classList.add("open");
    } else {
      answer.style.maxHeight = null;
      answer.classList.remove("open");
    }
  });
});
</script>

</body>
</html>
