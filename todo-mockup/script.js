document.getElementById('todo1').addEventListener('click', function () {
    console.log(this.parentElement.style.textDecoration)
    if (this.parentElement.style.textDecoration == "" || this.parentElement.style.textDecoration == "none") {
        this.parentElement.style.textDecoration = "line-through"
    }
    else {
        this.parentElement.style.textDecoration = "none"
    }
})

document.getElementById('todo2').addEventListener('click', function () {
    console.log(this.parentElement.style.textDecoration)
    if (this.parentElement.style.textDecoration == "" || this.parentElement.style.textDecoration == "none") {
        this.parentElement.style.textDecoration = "line-through"
    }
    else {
        this.parentElement.style.textDecoration = "none"
    }
})