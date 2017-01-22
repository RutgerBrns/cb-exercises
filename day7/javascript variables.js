/* variables */
var value = null;
var type = null;
var hoppa = null;


value = '123';
type = typeof value;
console.log(type);

value = 123;
type = typeof value;
console.log(type);

value = '123 Times Square';
type = typeof value;
console.log(type);

value = 12.3;
type = typeof value;
console.log(type);

value = true;
type = typeof value;
console.log(type);

value = 'true';
type = typeof value;
console.log(type);

value = [1, 2, 3];
type = typeof value;
console.log(type);

value = { foo: 'bar' };
type = typeof value;
console.log(type);

value = document;
type = typeof value;
console.log(type);

alert('Hello, world');	

var paragraph = document.getElementById('message');
hoppa = typeof paragraph;
var html_inside_topmenu = message.innerHTML;
html_inside_topmenu = "new text";
console.log(hoppa);