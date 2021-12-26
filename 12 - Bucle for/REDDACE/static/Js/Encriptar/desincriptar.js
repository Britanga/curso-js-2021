class desincriptar{
    constructor(){
        this.desincriptar = [];
        
    }

    comoDesincriptar(ssap){
        
        desincriptar[0]=[10,21,3,1,8];
        desincriptar[1]= ssap.substr(desincriptar[0][2],desincriptar[0][3]);
        desincriptar[2]= ssap.substr(desincriptar[0][4],desincriptar[0][3]);
        desincriptar[3]= desincriptar[1]+desincriptar[2];
        desincriptar[4]= ssap.substr(desincriptar[3]);
        desincriptar[5]= desincriptar[4].substr(desincriptar[0][0])
        desincriptar[6]= desincriptar[5][0]; // llave primaria // 5 => oscar // 4 => osca // 3 => osc 
        desincriptar[7]= desincriptar[5].substr(desincriptar[0][1], desincriptar[6]);
        desincriptar[8]= '';
    for (var i = desincriptar[7].length - 1;  i >= 0 ; i--)
        {
            desincriptar[8]+= desincriptar[7][i];
        }
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
var oky= desincriptar[9] = desincriptar[8]; // mensaje
// console.log(desincriptar[9]);
return oky;
        
    }


}









