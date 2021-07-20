function validateForm() {
  var flatname = document.getElementById("flatname").value;
  var flataddress = document.getElementById("flataddress").value;
  var price = document.getElementById("price").value;
  var aboutflat = document.getElementById("aboutflat").value;
  var flatstatus = document.getElementById("flatstatus").value;
  var dateoflaunching = document.getElementById("dateoflaunching").value;
  var owner = document.getElementById("owner").value;
  
  if (flatname == "") {
    document.getElementById("jsflatnameerror").innerHTML=" Flat Name must be filled out";
  //alert("Flat Name must be filled out");//
  return false;
  }
  if (flataddress == "") {
    document.getElementById("jsflataddresserror").innerHTML=" Flat Address must be filled out";
  //alert("Flat Address must be filled out");//
  return false;
  }
  if (price == "") {
    document.getElementById("jspriceerror").innerHTML=" Price must be filled out";
  //alert("Price must be filled out");//
  return false;
  }
  if (aboutflat == "") {
    document.getElementById("jsaboutflaterror").innerHTML=" About Flat must be filled out";
  //alert("About Flat must be filled out");//
  return false;
  }
  if (flatstatus == "") {
    document.getElementById("jsflatstatuserror").innerHTML=" Flat Status must be filled out";
  //alert("Flat Status must be filled out");//
  return false;
  }
  if (dateoflaunching == "") {
    document.getElementById("jsdateoflaunchingerror").innerHTML=" Date of Launching must be selected";
  //alert("Date of Launching must be filled out");//
  return false;
  }
  if (owner == "") {
    document.getElementById("jsownererror").innerHTML=" Owner must be filled out";
  //alert("Owner must be filled out");//
  return false;
  }
  
  }

  function validateForm3() {
    var name = document.getElementById("name").value;
    var date = document.getElementById("date").value;
    var post = document.getElementById("post").value;
    
    if (name == "") {
      document.getElementById("jsnameerror").innerHTML=" Name must be filled out";
    //alert("Name must be filled out");//
    return false;
    }
    if (date == "") {
      document.getElementById("jsdateerror").innerHTML=" Date must be selected";
    //alert("Date must be selected");//
    return false;
    }
    if (post == "") {
      document.getElementById("jsposterror").innerHTML=" Post must be filled out";
    //alert("Post must be filled out");//
    return false;
    }
    
    }