let k = 5
let j = 12
for (let i = 10; i> 0; i--) {
    if(j%2==0){
        if (k>0){
            j--
            console.log(j)
        }
    }
    j--
    k--
}