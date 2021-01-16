var  orderNL = localStorage.getItem('GramsNL');
var  orderDP = localStorage.getItem('GramsDP');
var  orderBW = localStorage.getItem('PacksBW');
var  orderOC = localStorage.getItem('GramsOC');
var  orderPR = localStorage.getItem('GramsPR');
var  orderCC = localStorage.getItem('BatchCC');
var  orderCCES = localStorage.getItem('GramsCCes');
var  orderPE = localStorage.getItem('GramsPE');
if(orderNL == null){
  orderNL = 0;
  document.getElementById("NLgrams").value = orderNL;
}else if(orderNL){
  document.getElementById("NLgrams").value = orderNL;
}
if(orderDP == null){
  orderDP = 0;
  document.getElementById("DPgrams").value = orderDP;
}else if(orderDP){
  document.getElementById("DPgrams").value = orderDP;
}
if(orderBW == null){
  orderBW = 0;
  document.getElementById("BWgrams").value = orderBW;
}else if(orderBW){
  document.getElementById("BWgrams").value = orderBW;
}
if(orderOC == null){
  orderOC = 0;
  document.getElementById("OCgrams").value = orderOC;
}else if(orderOC){
  document.getElementById("OCgrams").value = orderOC;
}
if(orderPR == null){
  orderPR = 0;
  document.getElementById("PRgrams").value = orderPR;
}else if(orderPR){
  document.getElementById("PRgrams").value = orderPR;
}
if(orderCC == null){
  orderCC = 0;
  document.getElementById("CCgrams").value = orderCC;
}else if(orderCC){
  document.getElementById("CCgrams").value = orderCC;
}
if(orderCCES == null){
  orderCCES = 0;
  document.getElementById("CCESgrams").value = orderCCES;
}else if(orderCCES){
  document.getElementById("CCESgrams").value = orderCCES;
}
if(orderPE == null){
  orderPE = 0;
  document.getElementById("PEgrams").value = orderPE;
}else if(orderPE){
  document.getElementById("PEgrams").value = orderPE;
}
