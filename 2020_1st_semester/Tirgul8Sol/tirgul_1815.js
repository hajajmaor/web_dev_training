//Ex.1
window.alert("Hello world!");


// Ex.2
var userName = window.prompt("Enter your name:");
document.write("Hello, " + userName);


// Ex.3
var num1 = parseInt(window.prompt("Enter 1st number:"));
var num2 = parseInt(window.prompt("Enter 2nd number:"));
var operator = window.prompt("Enter operator:"); //+;
switch (operator) {
  case "+":
    document.write(num1 + operator + num2 + "=" + (num2 + num1));
    break;
  case "-":
    document.write(num1 + operator + num2 + "=" + (num2 - num1));
    break;
  case "*":
    document.write(num1 + operator + num2 + "=" + num2 * num1);
    break;
  case "/":
    if (num2 == 0) {
      window.alert("num2 cannot be 0 in division");
    } else {
      document.write(num1 + operator + num2 + "=" + num2 / num1);
    }
    break;
  default:
    window.alert("Unknown operator");
}


// Ex.4
var i = 1;
while (i <= 30) {
  document.write(i + ",");
  i++;
}


// Ex.5
var i = 1;
while (i <= 30) {
  //   console.log(i + "\n" + "salkndlasndl");
  document.write(i + "<br>");
  i++;
}


//Ex.6
var counter = 0;
var sum = 0;
var num = parseInt(window.prompt("Enter a number:"));
while (num != 0) {
  counter++;
  sum = sum + num;
  num = parseInt(window.prompt("Enter a number:"));
}
if (counter != 0) {
  document.write(
    "counter = " + counter + ", sum = " + sum + ", average = " + sum / counter
  );
} else {
  document.write("no numbers entered");
}


//Ex.7
var num = parseInt(window.prompt("Enter a number:"));
const temp = num;
var sum = 1;
while (num > 1) {
  sum *= num;
  num--;
}
document.write(temp + "!=" + sum);

// Ex.8
var num1 = parseInt(window.prompt("Enter a number:"));
var num2 = parseInt(window.prompt("Enter a number:"));
var sum = num1;
for (var i = 1; i < num2; i++) {
  sum *= num1;
}
document.write(num1 + "^" + num2 + "=" + sum + "<br>");
document.write(num1 + "^" + num2 + "=" + Math.pow(num1, num2));
