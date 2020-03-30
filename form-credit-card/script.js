document.getElementById("cc-number").addEventListener("input", () => {
  let ccNum = document.getElementsByClassName("cc-number")[0];
  ccNum.innerHTML = document.getElementById("cc-number").value;
});

document.getElementById("cc-name").addEventListener("input", () => {
  let ccNum = document.getElementsByClassName("cc-name")[0];
  ccNum.innerHTML = document.getElementById("cc-name").value;
});

document.getElementById("cc-expiration").addEventListener("input", () => {
  let ccNum = document.getElementsByClassName("cc-expiration")[0];
  ccNum.innerHTML = document.getElementById("cc-expiration").value;
});
