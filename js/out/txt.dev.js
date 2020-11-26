"use strict";

// 逻辑：加载页面时，应该触发定时器 10s
window.onload = function () {
  var timer = 10;
  setInterval(function () {
    timer--;
    document.getElementById('').innerText = timer;

    if (timer == 0) {
      location.href = '../pages/index.html';
    }
  }, 1000);
};

document.getElementsByTagName('button')[0].onclick = function () {
  location.href = '../pages/index.html';
};