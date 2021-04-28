// EX1
// alert("Hello world!");

//EX2
// var userName = window.prompt("Enter your name:")
// if (userName == null) {
//     alert("you pressed the cancel button");
// }
// else
//     alert(userName);

// EX3
/*
var num1 = parseInt(window.prompt("Enter 1st number:"));
var num2 = parseInt(window.prompt("Enter 2nd number:"));
var operator = window.prompt("Enter operator: (+,-,*,/)");
switch (operator) {
    case "+":
        document.write(num1 + " + " + num2 + "=" + (num1 + num2))
        break;
    case "-":
        document.write(num1 + " - " + num2 + "=" + (num1 - num2))

        break;
    case "*":
        document.write(num1 + " * " + num2 + "=" + (num1 * num2))

        break;
    case "/":
        document.write(num1 + " / " + num2 + "=" + (num1 / num2))

        break;
    default:
        document.write("<h3 style=\" color : red\"> operator not found</h3>")
        break;
}
*/
//extra
/*
class Product {
    title;
    auther;
}
var a = new Product();
a.auther = "sain";
var image = ["../../practice_session_1/1815/drums.jpg", "../../practice_session_1/2015/drums.jpg"]

for (let index = 0; index < 7; index++) {
    document.write(`
    <section>
    <div class="sdsa">
        <div>
            <img src=`+ image[index] + ` alt="` + index + `">
        </div>
        <p>it will change too</p>
    </div>
    </section>
`);
}

*/
// פיצול לחדריםםםםםם
for (let index = 1; index <= 30; index++) {
    document.write(index + "<br>")

}