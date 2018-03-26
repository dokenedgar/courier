 // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDdFjWMmNlVB_3jicU9kepVh_ENzH4tXNs",
    authDomain: "package-tracking-b59ac.firebaseapp.com",
    databaseURL: "https://package-tracking-b59ac.firebaseio.com",
    projectId: "package-tracking-b59ac",
    storageBucket: "package-tracking-b59ac.appspot.com",
    messagingSenderId: "140871620500"
  };
  firebase.initializeApp(config);

  var firestore = firebase.firestore();
  
  /*//My var
  //Getting the tracking codee
              var y = document.cookie;
              var x = y.split("=");
              var z = x[1];
              var valArray = z.split(";");
              var realVal = valArray[0]
                  //alert(realVal);       
      */
              
var realVal = readCookie("trackid");
 function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

//var docName = document.querySelector("#docName");
  //var fullName = "samples/documentName";
//const docRef = firestore.doc(fullName);
const docRef = firestore.doc("samples/"+realVal);//firestore.collection("samples").doc(realVal);
const deleteButton = document.querySelector("#deletebutton");

function deleteRecord(){
	
const senderName = document.querySelector("#senderName");
//const senderAddress = document.querySelector("#senderAddress");
const sourceArea = document.querySelector("#sourceArea");
//const shipmentDesc = document.querySelector("#shipmentDesc");
const shipmentDate = document.querySelector("#shipmentDate");
const arrivalDate = document.querySelector("#arrivalDate");

const receiverName = document.querySelector("#receiverName");
//const receiverAddress = document.querySelector("#receiverAddress");
const destinationArea = document.querySelector("#destinationArea");
//const currentLocation = document.querySelector("#currentLocation");
const transitTimeLeft = document.querySelector("#transitTimeLeft");
//const deliveryStatus = document.querySelector("#deliveryStatus");



docRef.get()
	   .then(function(doc){
	   	document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
	   	if (doc && doc.exists) {
	   		const myData = doc.data();
	   		senderName.value = myData.senderName;
	   		//senderAddress.value = myData.senderAddress;
	   		sourceArea.value = myData.sourceArea;
	   		//shipmentDesc.value = myData.shipmentDesc;
	   		shipmentDate.value = myData.shipmentDate;
	   		arrivalDate.value = myData.arrivalDate;

	   		receiverName.value = myData.receiverName;
	   		//receiverAddress.value = myData.receiverAddress;
	   		destinationArea.value = myData.destinationArea;
	   		//currentLocation.value = myData.currentLocation;
	   		var dt1 = new Date();
            var dt2 = new Date(myData.arrivalDate);
var diff = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
	   		transitTimeLeft.value = diff + " day(s)";
	   		//deliveryStatus.value = myData.deliveryStatus;
	   	}
	   	else{
	   		console.log("Doc not found");
	   		alert("ID doesn't exist");
	   		//document.cookie="noTableTrue"+"=cookieValue"+'; Path=/;';
	   		window.location.replace('delete.php');
	   	}
	   }).catch(function(error){
	   		console.log("Got an error: ", error);
	   });

}

deleteButton.addEventListener("click", function(){
	document.getElementById("deletebutton").style.display = "none";
 	 document.getElementById("loadSpinner").style.display = "block";
	docRef.delete().then(function() {
    	console.log("Document successfully deleted!");
    	alert("Document successfully deleted!");
    	window.location.replace('adminlanding.php');
	}).catch(function(error) {
    	console.error("Error removing document: ", error);
    	alert("Error removing document");
});
});