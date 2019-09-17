<!DOCTYPE html>
<html>
<head>
	<title>mumbai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="city.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
<section class="header">
		<div class="row">
		
<div class="main">
		<div class="form-container">
			<b><h1 style="color:#3550bd">WELCOME TO CITY OF DREAMS</h1>
				<h1 style="color: #d6243a;">MUMBAI</h1></b>
			<form class="form" method="POST" action="">
		         <b> <label style="color:black;">select Places</label></b>
	             		<select id="dropdown">
	             			<option></option>
	             			<option value="Gateway Of India Mumbai">Gateway Of India Mumbai</option>
		            		<option value="Elephanta Caves">Elephanta Caves</option>
		            		<option value="Essel World">Essel World</option>
		            		<option value="Marine Drive">Marine Drive</option>
		            		<option value="Haji Ali Dargah">Haji Ali Dargah</option>
		            		<option value="Bandra–Worli Sea Link">Bandra–Worli Sea Link</option>
		            		</select>

	            <a class="submit" href="javascript:myFunction()">Submit</a>
				<center><p id="photo"></p></center>
				<center><p id= "space"><span id="output"></span> </p></center>
				<center><p id="characteristic" style="color:white" ></p></center> 		
      </form>
			
		</div>
	</div>
</div>
</section>
</center>
</body>
</html>
<script>
function myFunction(){
	var val= document.getElementById("dropdown").value;
	var result="unknown because you didnt put valid place";



if (val=="Gateway Of India Mumbai"){
        result = "Gateway Of India Mumbai";
     document.getElementById("photo").innerHTML="<h3>Gateway Of India Mumbai</h3><img src='gate.jpg' width=25%>";
   document.getElementById("characteristic").innerHTML="The Gateway of India is an arch monument built during the 20th century in Mumbai, India. The monument was erected to commemorate the landing of King-Emperor George V and Queen-Empress Mary at Apollo Bunder on their visit to British India in 1911. Wikipedia Address: Apollo Bandar, Colaba, Mumbai, Maharashtra 400001 Height: 85′ Construction started: 31 March 1911 Architectural style: Indo-Saracenic architecture Architect: George Wittet Did you know: Due to a paucity of funds, the approach road was never built and so the gateway stands at an angle to the road leading up to it. wikipedia.org";
  
    }

   if (val=="Elephanta Caves"){
       result = "Elephanta Caves";
       document.getElementById("photo").innerHTML="<h3>Elephanta Caves</h3><img src='caves.jpg'width=30%>";
      document.getElementById("characteristic").innerHTML="Elephanta Caves are a UNESCO World Heritage Site and a collection of cave temples predominantly dedicated to the Hindu god Shiva. They are located on Elephanta Island, or Gharapuri in Mumbai Harbour, 10 kilometres to the east of the city of Mumbai in the Indian state of Mahārāshtra. Wikipedia Address: Gharapuri, Maharashtra 400094 Phone: 022 2204 4040 UNESCO World Heritage Site inscription: 1987 UNESCO Site Id: 244 Did you know: To get to the Elephanta Caves, you will need to go to the Gateway of India in the city of Mumbai. wikitravel.org";
      
    }
  if (val=="Essel World"){
       result = ("Essel World");
      document.getElementById("photo").innerHTML="<h3>Essel World</h3><img src='l.jpg'width=60%>";
     document.getElementById("characteristic").innerHTML="EsselWorld is an amusement park located in Gorai, Mumbai and established in 1989. The park is owned by EsselWorld Leisure Pvt. Ltd. EsselWorld along with its counterparts, Water Kingdom are stretched over 64 acres of land. Together, they are recognized as one of the largest Amusement And Water Park. Wikipedia Address: Gorai Rd, Essel world Amusement Park, Borivali West, Mumbai, Maharashtra 400091 Area: 64 acres Opened: 1989 Hours: Closed ⋅ Opens 10:30AM Phone: 022 6158 9888 Owner: EsselWorld Leisure Pvt Ltd Operating season: Year Round Did you know: EsselWorld is the largest amusement park in the country & 'Water Kingdom' is one of the largest Theme Water Parks in Asia, both located on 64 acres of land. esselworld.in";
   }
  
   if (val=="Marine Drive"){
        result = ("Marine Drive");
       document.getElementById("photo").innerHTML="<h3>Marine Drive</h3><img src='drive.jpg'width=40%>";
       document.getElementById("characteristic").innerHTML="Marine Drive is a 3.6-kilometre-long Boulevard in South Mumbai in the city of Mumbai, India. The road was constructed by late philanthropist Bhagojisheth Keer & Pallonji Mistry. It is a 'C'-shaped six-lane concrete road along the coast, which is a natural bay. Wikipedia Length: 3.6 km Major cities: Mumbai Did you know: In 2014, it hosted the first R-Day Parade in Mumbai. nearfox.com";
      
    }
  
 if (val=="Haji Ali Dargah"){
        result = ("Haji Ali Dargah");
       document.getElementById("photo").innerHTML="<h3>Haji Ali Dargah</h3><img src='haji ali.jpg'width=70%>";
      document.getElementById("characteristic").innerHTML="The Haji Ali Dargah is a mosque and dargah or the monument of Pir Haji Ali Shah Bukhari located on an islet off the coast of Worli in the southern part of Mumbai. Pir Haji Ali Shah Bukhari was a kind Sufi saint with a wealthy merchant from Uzbekistan. Wikipedia Address: Dargah Rd, Haji Ali, Mumbai, Maharashtra Opened: 1431 Height: 85′ Phone: 022 2352 9082 Owner: Government of Maharashtra District: Mumbai Architectural styles: Modern architecture, Indo-Islamic architecture Did you know: The Haji Ali Dargah was constructed in 1431 by a rich Muslim merchant, who gave up all his worldly possessions before making a pilgrimage to Mecca. touropia.com.";
     
    }
  
    if (val=="Bandra–Worli Sea Link"){
        result = ("Bandra–Worli Sea Link");
       document.getElementById("photo").innerHTML="<h3>Bandra–Worli Sea Link</h3><img src='Bandra.jpg'width=30%>";
      document.getElementById("characteristic").innerHTML="The Bandra–Worli Sea Link is a cable-stayed bridge with pre-stressed concrete-steel viaducts on either side that links Bandra in the Western Suburbs of Mumbai with Worli in South Mumbai. Wikipedia Address: Mahim Bay, Maharashtra 400030 Total length: 18,373′ Construction started: 2000 Opened: 30 June 2009 Phone: 022 2651 7900 Architect: Seshadri Srinivasan Location: Bandra West, Worli Did you know: The long-awaited Bandra-Worli sea link, seen as an engineering marvel, weighs equivalent to that of 50,000 African elephants! rediff.com.";
      
    }
    
       
 document.getElementById("output").innerHTML= result;
}
</script>
