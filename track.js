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
              var y = document.cookie;
              var x = y.split("=");
              var z = x[1];
              var valArray = z.split(";");
              var realVal = valArray[0]
                  //alert(realVal);     

  //const viewbtn = document.querySelector("#viewallbutton");
  //viewbtn.addEventListener("click", function(){
  //});

  function trackOrder(){
    //alert("hola");    //firestore.collection("samples").get()
        const docsRef = firestore.doc("samples/"+realVal).get()
                      .then(function(doc){

                        if (doc && doc.exists) {  
                            //querySnapshop.forEach(function(doc){
                        var docData = doc.data();
                      //doc.data() is never undefined for query doc snpshots
                      console.log(doc.id, " => ", docData);


                      // Find a <table> element with id="myTable":
                      var table = document.getElementById("ordersTable");

                      // Create an empty <tr> element and add it to the 1st position of the table:
                      var row = table.insertRow(1);

                      // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
                      var id = row.insertCell(0);
                      var sender = row.insertCell(1);
                      var receiver = row.insertCell(2);
                      //var senderAdd = row.insertCell(3);
                      //var receiverAdd = row.insertCell(4);
                      var origin = row.insertCell(3);

                      var destination = row.insertCell(4);
                      //var shipmentDesc = row.insertCell(7);
                      var shipmentDate = row.insertCell(5);
                      var arrival = row.insertCell(6);
                      //var currentLoc = row.insertCell(10);
                      //var route = row.insertCell(11);
                      var transitTimeLeft = row.insertCell(7);

                      
                      // Add some text to the new cells:
                      id.innerHTML = doc.id;
                      sender.innerHTML = docData.senderName;
                      receiver.innerHTML = docData.receiverName;
                      //senderAdd.innerHTML = docData.senderAddress;
                      //receiverAdd.innerHTML = docData.receiverAddress;
                      origin.innerHTML = docData.sourceArea;

                      destination.innerHTML = docData.destinationArea;
                      //shipmentDesc.innerHTML = docData.shipmentDesc;
                      shipmentDate.innerHTML = docData.shipmentDate;
                      arrival.innerHTML = docData.arrivalDate;
                      //currentLoc.innerHTML = docData.currentLocation;
                      
                      //var n = docData.route.replace(/,/g, " to ");
                      //route.innerHTML = n;
                      var dt1 = new Date();
                      var dt2 = new Date(docData.arrivalDate);
var diff = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
                      transitTimeLeft.innerHTML = diff + " day(s)";
                      //transitTimeLeft.innerHTML = docData.transitTimeLeft;
                   // });
                  }
                        else{
                            console.log("Doc not found");
                            alert("Incorrect tracking code. Check and try again");
                            //document.cookie="noTableTrue"+"=cookieValue"+'; Path=/;';
                            window.location.replace('track.php');
                        }
                        document.getElementById("loader").style.display = "none";
                      document.getElementById("myDiv").style.display = "block";
                      
                  }).catch(function(error){
                      console.log("Got an error: ", error);
                   });

  }