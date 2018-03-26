
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
  
/*  //My var
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

 
//GET REFERENCES TO ALL INPUT FIELDS HERE

const senderName = document.querySelector("#senderName");

const sourceArea = document.querySelector("#sourceArea");

const shipmentDate = document.querySelector("#shipmentDate");
const arrivalDate = document.querySelector("#arrivalDate");

const receiverName = document.querySelector("#receiverName");

const destinationArea = document.querySelector("#destinationArea");
//const loadSpinner = document.querySelector("#")

//const transitTimeLeft = document.querySelector("#transitTimeLeft");


const placeOrderButton = document.querySelector("#orderbutton");


placeOrderButton.addEventListener("click", function(){
  document.getElementById("orderbutton").style.display = "none";
  document.getElementById("loadSpinner").style.display = "block";
  //GET VALUES FROM ALL INPUT FIELDS USING THE REFERENCES ABOVE
  const txtSenderName = senderName.value;
  const txtSourceArea = sourceArea.value;
  const txtShipmentDate = shipmentDate.value;
  const txtArrivalDate = arrivalDate.value;

  const txtReceiverName = receiverName.value;
  const txtDestinationArea = destinationArea.value;
  //const txtTransitTimeLeft = transitTimeLeft.value;

  if  ((txtSenderName == "")  || (txtSourceArea=="") || (txtShipmentDate=="") || (txtArrivalDate=="") || (txtReceiverName=="") || 
   (txtDestinationArea=="")  ){
    console.log("something is empty..");
  }
  else{
  console.log("Saving " + txtSenderName + " to Firestore");

  docRef.set({
      senderName: txtSenderName,
      sourceArea : txtSourceArea,
      shipmentDate : txtShipmentDate,
      arrivalDate : txtArrivalDate,

      receiverName : txtReceiverName,
      destinationArea : txtDestinationArea
      //transitTimeLeft : txtTransitTimeLeft
      
  }).then(function() {
    console.log("Status saved");
    alert("Order Saved Successfully!");
    window.location.replace('track_details.php');
  }).catch(function(error) {
    console.log("Got an error: ", error);
  });
}
  

});

/*loadButton.addEventListener("click", function() {
  docRef.get().then(function(doc){
    if(doc && doc.exists){
      const myData = doc.data();
      outputHeader.innerText = "From firestore: " + myData.dataField;
    }
  }).catch(function(error) {
    console.log("Got an error: ", error);
  });
});

*/


