let strings = document.querySelectorAll('.review-text');
strings.forEach(function (elem) {
  let simbols = elem.innerHTML;
  if (simbols.length > 296) {
    let residualAmount = simbols.length - 296;
    let newStr = simbols.substring(0, simbols.length - residualAmount);
    elem.textContent = newStr + "...";
  }
});