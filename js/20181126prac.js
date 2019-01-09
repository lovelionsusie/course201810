var score = prompt("enter your score 0-100.");
var result = score / 10;
// console.log(result);
if (9 < result && result <= 10) {
    console.log("A");
} else if (8 < result && result <= 9) {
    console.log("B");
} else if (7 < result && result <= 8) {
    console.log("C");
} else if (6 < result && result <= 7) {
    console.log("D");
} else if (0 < result && result <= 6) {
    console.log("不及格");
} else {
    console.log("無效成績");
}
// && and || or
result = parseInt(result);
switch (result) {
    case 10:
        console.log("A");
        break;
    case 9:
        console.log("A");
        break;
    case 8:
        console.log("B");
        break;
    case 7:
        console.log("C");
        break;
    case 6:
        console.log("D");
        break;
    case 5:
    case 4:
    case 3:
    case 2:
    case 1:
        console.log("FAIL");
        break;
    default:
        console.log("out of range");
        break;
}
for (var index=0; index < 10; index++) {
    console.log(index);
    
}
document.write("<ul>");
for (var index=0; index < 10; index++) {
    console.log(index);
    document.write("<li>"+ index + "</li>");
}
document.write("</ul>");
document.write("<table border='1'>");
for (var index=1; index <10; index++) {
    console.log(index);
    document.write("<tr>");
    for (var inindex=1; inindex <10; inindex++) {
        console.log(inindex);
        document.write("<td>"+ inindex*index + "</td>");
        
    }
    document.write("</tr>");
}
document.write("</table>");

index = 0
while (index < 10) {
    document.write("<p>"+"index:"+index+"</p>")
    index++;
}

do{
    document.write("<p>"+"index:"+index+"</p>")
    index--;
}while(index>0);

