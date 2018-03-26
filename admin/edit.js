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
  
  
  //Getting the tracking codee
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
const editButton = document.querySelector("#editbutton");

function editRecord(){
	const title = document.querySelector("#headerID");
	
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
//const transitTimeLeft = document.querySelector("#transitTimeLeft");
//const deliveryStatus = document.querySelector("#deliveryStatus");



docRef.get()
	   .then(function(doc){
	   	document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
	   	if (doc && doc.exists) {
	   		const myData = doc.data();
	   		headerID.innerText = "Edit Order With Tracking ID : " + doc.id;
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
	   		//transitTimeLeft.value = myData.transitTimeLeft;
	   		//deliveryStatus.value = myData.deliveryStatus;
	   	}
	   	else{
	   		console.log("Doc not found");
	   		alert("ID doesn't exist");
	   		//document.cookie="noTableTrue"+"=cookieValue"+'; Path=/;';
	   		window.location.replace('edit.php');
	   	}
	   }).catch(function(error){
	   		console.log("Got an error: ", error);
	   });

}

editButton.addEventListener("click", function(){
	 document.getElementById("editbutton").style.display = "none";
 	 document.getElementById("loadSpinner").style.display = "block";
	 //GET VALUES FROM ALL INPUT FIELDS USING THE REFERENCES ABOVE
	  const txtSenderName = senderName.value;
	  //const txtSenderAddress = senderAddress.value;
	  const txtSourceArea = sourceArea.value;
	  //const txtShipmentDesc = shipmentDesc.value;
	  const txtShipmentDate = shipmentDate.value;
	  const txtArrivalDate = arrivalDate.value;

	  const txtReceiverName = receiverName.value;
	  //const txtReceiverAddress = receiverAddress.value;
	  const txtDestinationArea = destinationArea.value;
	 // const txtCurrentLocation = currentLocation.value;
	  //const txtTransitTimeLeft = transitTimeLeft.value;
	  //const txtDeliveryStatus = deliveryStatus.value;

	 if  ((txtSenderName == "")  || (txtSourceArea=="") || (txtShipmentDate=="") || (txtArrivalDate=="") || (txtReceiverName=="") || 
   (txtDestinationArea=="")  ){
    console.log("something is empty..");
  }
  	else{
  		// Set the "capital" field of the city 'DC'
		return docRef.update({
		    //capital: true
		      senderName: txtSenderName,
		      sourceArea : txtSourceArea,
		      shipmentDate : txtShipmentDate,
		      arrivalDate : txtArrivalDate,

		      receiverName : txtReceiverName,
		      destinationArea : txtDestinationArea
		      //transitTimeLeft : txtTransitTimeLeft
		}).then(function() {
		    console.log("Document successfully updated!");
		    alert("Document successfully updated!");
    window.location.replace('track_details.php');
		}).catch(function(error) {
		    // The document probably doesn't exist.
		    console.error("Error updating document: ", error);
		});
  	}
	
});