//------------------------------consumos estaticos(KwH)---------------------------------//

let consHeladeraA = 0.063;
let consHeladeraB = 0.098;
let consTele = 0.14;
let consAire = 1.013;
let consMicroA = 0.24;
let consMicroB = 0.34;
let consLavarropas = 0.182;
let consLED = 0.01;
let consIncan = 0.04;
let consMercurio = 0.05;
let consCalefon = 0.9;
let consCocina = 0.09;

//------------------------------costos estaticos(pesos -al MES-)---------------------------------//

let costHeladeraA = 111.8; //710hs
let costHeladeraB = 173.95;//710hs
let costTele = 70;//200hs
let costAire = 506;//200hs
let costMicroA = 6;//10hs
let costMicroB = 8.5;//10hs
let costLavarropas = 9;//20hs
let costLED = 15;//600hs
let costIncan = 60;//600hs
let costMercurio = 75;//600hs
let costCalefon = 203;//90hs
let costCocina = 34;//150hs

//---------------------------------------mensaje--------------------------------------//

let msg = "Este aparato consume:";
let msg2 = "Te cuesta al mes: $";
let msgAire = msg + " " + consAire + " " + msg2 + costAire;
let msgTele = msg + " " + consTele + " " + msg2 + costTele;
let msgHelaA = msg + " " + consHeladeraA + " " + msg2 + costHeladeraA;
let msgHelaB = msg + " " + consHeladeraB + " " + msg2 + costHeladeraB;
let msgMicroA = msg + " " + consMicroA + " " + msg2 + costMicroA;
let msgMicroB = msg + " " + consMicroB + " " + msg2 + costMicroB;
let msgLED = msg + " " + consLED + " " + msg2 + costLED;
let msgMercurio = msg + " " + consMercurio + " " + msg2 + costMercurio;
let msgIncan = msg + " " + consAire + " " + msg2 + costAire;
let msgLavarropas = msg + " " + consLavarropas + " " + msg2 + costLavarropas;
let msgClaefon = msg + " " + consCalefon + " " + msg2 + costCalefon;
let msgCocina = msg + " " + consCocina + " " + msg2 + costCocina;
