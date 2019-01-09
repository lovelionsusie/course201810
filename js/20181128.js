function myfunc( v1, v2){
    var v3 = v1 * v2;
    document.getElementById("func").innerHTML = v3;
}

function reFunc( v1, v2){
    var v3 = v1 * v2;
    return v3;
}

document.getElementById("returnFunc").innerHTML = reFunc(6,7);

var x = function testingFunc( v1, v2 ){
    
}



var city = ['台北','台中','高雄'];
console.log(city[1]);

var city2 = new Array('Keelung','Taoyuan', 'Tainan','Hualien');
console.log(city2[2]);

var city_count = city.length;
console.log(city_count);

console.log(city2[city2.length-1]);
document.write("<br>");
for (var index = 0; index < city2.length; index++) {
    document.write(city2[index]+"<br>");
    
}

//用foreach直接搜尋陣列內容
city.forEach(function(val,inx){
    document.write("index"+ inx + "val: " + val + "<br>");
})

//物件 用大括號來設定
var car={type:"5dsport", 
        model:"Getz", 
        color:"silver", 
        brand:"H",
        description:function(){
            return this.brand + " " + this.model +" " + this.color
        }//description是物件的其中一個功能名稱，可自行命名
};
document.write("型號: " + car.model);
document.write("<br>描述: " + car.description());

var now = new Date();
document.getElementById("func").innerHTML = now;
document.write("<br> getTime:" + now.getTime());
document.write("<br> getDate:" + now.getDate());
document.write("<br> getFullYear:" + now.getFullYear());
document.write("<br> getMonth:" + now.getMonth());//start from 0 - Jan
document.write("<br> getDay:" + now.getDay());//0=Sunday

var cweekday = ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];

document.write("<br>" + cweekday[now.getDay()]);