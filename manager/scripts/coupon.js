function createCoupon(){
	let offerId= document.getElementById('offerId').value;
	let displayMessage= document.getElementById('displayMessage').value;
	let totalCount= document.getElementById('totalCount').value;
	
	var data = '';
	if(offerId == ''){
		data = data + "Invalid offer id<br/>";
	} 
	
	if(displayMessage == ''){
		data = data + "Invalid display message<br/>";
	} 
	
	if(totalCount == ''){
		data = data + "Invalid total coupon";
	} 
	
	if(data.length>0) {
		document.getElementById('error').innerHTML = data;	
		return;
	}
	
	
	var json = {
		'offerId' : offerId,
		'displayMessage'  : displayMessage,
		'totalCount' : totalCount
	}

	var data = JSON.stringify(json);

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/createCoupon.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.send('couponData='+data);

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	alert("Coupon create succesful");
			window.location.href = '../view/viewCoupon.php';
	    } else if (this.status != 200){
			alert("Coupon create failed");
		}
	}	
}


function editCoupon(){
	let id= document.getElementById('id').value;
	let offerId= document.getElementById('offerId').value;
	let displayMessage= document.getElementById('couponDisplayMessage').value;
	let status2= document.getElementById('status2').value;
	
	var data = '';
	if(offerId == ''){
		data = data + "Invalid offer id<br/>";
	} 
	
	if(displayMessage == ''){
		data = data + "Invalid display message<br/>";
	} 
	
	if(status2 == ''){
		data = data + "Invalid status<br/>";
	} 
	
	if(data.length>0) {
		document.getElementById('error').innerHTML = data;	
		return;
	}
	
	
	var json = {
		'id' : id,
		'offerId' : offerId,
		'displayMessage'  : displayMessage,
		'status' : status2
	}

	var data = JSON.stringify(json);

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/editCoupon.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		
	xhttp.send('couponData='+data);

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	alert("Coupon edit succesful");
			window.location.href = '../view/viewCoupon.php';
	    } else if (this.status != 200){
			alert("Coupon edit failed");
		}
	}	
}

function deleteCoupon(){
	let id= document.getElementById('id').value;	
	
	var json = {
		'id' : id
	}

	var data = JSON.stringify(json);

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/deleteCoupon.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.send('couponData='+data);

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	alert("Coupon delete succesful");
			window.location.href = '../view/viewCoupon.php';
	    } else if (this.status != 200){
			alert("Coupon delete failed");
		}
	}	
}

function sendCoupon(){
	let customerId= document.getElementById('customerId').value;	
	let couponId= document.getElementById('couponId').value;	
	
	var data = '';
	if(customerId == ''){
		data = data + "Invalid customer<br/>";
	} 
	
	if(couponId == ''){
		data = data + "Invalid coupon<br/>";
	} 
	
	if(data.length>0) {
		document.getElementById('error').innerHTML = data;	
		return;
	}
	
	var json = {
		'customerId' : customerId,
		'couponId':couponId
	}

	var data = JSON.stringify(json);

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/sendCoupon.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.send('couponData='+data);

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	alert("Coupon sent succesful");
			//alert(this.responseText);
			window.location.href = '../view/viewCoupon.php';
	    } else if (this.status != 200){
			alert("Coupon sent failed");
		}
	}	
}