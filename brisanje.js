var xmlHttp
function obrisi(str)
{
xmlHttp=GetXmlHttpObject2()
if (xmlHttp==null){
 alert ("Browser does not support HTTP Request")
 return
}
 
var url="brisanje.php"
url=url+"?proizvodID="+str
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged2
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged2(){ 

if (xmlHttp.readyState==4){
	
 	if (xmlHttp.responseText=="0"){
		alert("Uspešno obrisano");
	} else {
		alert("Greška");
	}

}
}
function GetXmlHttpObject2(){
var xmlHttp=null;
try {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 } catch (e) {
 //Internet Explorer
 try {
  
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }

return xmlHttp;
}

