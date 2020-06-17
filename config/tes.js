let num= 5 ;
let xo = "xaa" ;
let sp = num-1 ;
let x = 0 ;
while (xo[x]){
    x++;
}

console.log(x);
for ( var i = 0 ;  i < num ; i ++ ) {
    var str = "" ;
    for ( var j = i ; j < num-1 ; j++ ){
        str += " " ;
    }
    console.log(str+xo);
    xo += "ox" ;
}
