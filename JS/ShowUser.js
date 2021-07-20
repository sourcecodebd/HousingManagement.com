function showmyuser() {
  var user=  document.getElementById("user").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../../../Account/Admin/Control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("user="+user);


}

function showmyowner() {
  var owner=  document.getElementById("owner").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext2").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext2").innerHTML = this.status;
	}
  };

  xhttp.open("POST", "../../../Account/Admin/Control/getowner.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("owner="+owner);


}

function showmysellerbuyer() {
  var sellerbuyer=  document.getElementById("sellerbuyer").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext3").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext3").innerHTML = this.status;
	}
  };

  xhttp.open("POST", "../../../Account/Admin/Control/getsellerbuyer.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("sellerbuyer="+sellerbuyer);


}

function showmybargain() {
  var bargain=  document.getElementById("bargain").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext4").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext4").innerHTML = this.status;
	}
  };

  xhttp.open("POST", "../../../Account/Admin/Control/getbargain.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("bargain="+bargain);


}


function RadioToggleTables(which)
{
    var isUser = document.getElementById('UserCheckBoxid').checked; 
    var isOwner = document.getElementById('OwnerCheckBoxid').checked; 
    var isSellerBuyer = document.getElementById('SellerBuyerCheckBoxid').checked; 
    var isBargain = document.getElementById('BargainCheckBoxid').checked;  
    
    var UserVar = document.getElementById('mytext'); 
    var OwnerVar = document.getElementById('mytext2');   
    var SellerBuyerVar = document.getElementById('mytext3'); 
    var BargainVar = document.getElementById('mytext4');     
       
    UserVar.style.display = isUser  ? 'table' : 'none';
    OwnerVar.style.display = isOwner  ? 'table' : 'none';
    SellerBuyerVar.style.display = isSellerBuyer  ? 'table' : 'none';
    BargainVar.style.display = isBargain  ? 'table' : 'none';
}