<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Global DeFi</title>
<link rel=icon href=images/icon.png>
<link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src=https://code.jquery.com/jquery-3.5.1.min.js></script>
<script src=https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js></script>
<script src=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js></script>
<script src=https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js></script>
<link href=css/bootstrap.css rel=stylesheet />
<link href=css/rotating-card.css rel=stylesheet />
<link href=https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css rel=stylesheet>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css>
<link rel=stylesheet href=https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css>
<script type=text/javascript src=https://code.jquery.com/jquery-1.12.0.min.js></script>
<script type=text/javascript src=https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js></script>
<script type=text/javascript src=https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js></script>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css integrity=sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm crossorigin=anonymous>
<script src=https://code.jquery.com/jquery-3.2.1.slim.min.js integrity=sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN crossorigin=anonymous></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js integrity=sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q crossorigin=anonymous></script>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js integrity=sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl crossorigin=anonymous></script>
<link href=bootstrap/css/bootstrap.min.css rel=stylesheet media=screen>
<link href=css/bootstrap-datetimepicker.min.css rel=stylesheet media=screen>
<script type=text/javascript src=web3.min.js></script>
<link rel=stylesheet href=http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css />
<script src=http://code.jquery.com/jquery-1.8.3.js></script>
<script src=http://code.jquery.com/ui/1.10.0/jquery-ui.js></script>
<script src=//cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js></script>
<script type=text/javascript src=web3.min.js></script>
<style type=text/css>html{font-size:16px}#eventForm .form-control-feedback{top:0;right:-15px}.btn-xlarge{padding:18px 28px;font-size:22px;line-height:normal;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.bold-green-font{font-weight:bold;color:green}.bold-font{font-weight:bold}.right-text{text-align:right}.large-font{font-size:15px}.italic-darkblue-font{font-style:italic;color:darkblue}.italic-purple-font{font-style:italic;color:purple}.underline-blue-font{text-decoration:underline;color:blue}.blue-font{color:blue}.black-font{color:black}.gold-border{border:3px solid gold}.deeppink-border{border:3px solid deeppink}.orange-background{background-color:orange}.orchid-background{background-color:orchid}.beige-background{background-color:beige}.gray-background{background-color:#ccc}label1{font-weight:normal!important}.hideme{display:none}.bs-1{margin:0 px}.tab{padding-left:220px}.modal-content1{margin-top:100px;margin-bottom:100px;margin-right:5 px;margin-left:1px;position:absolute;width:100%;height:inherit;padding-left:0}</style>
</head>
<body>
<div class="bs-1">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
         <a href="home.php" class="navbar-brand">
            <img src="globaldefilogosmall2.png" height="28" alt="GlobalDeFi">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                 
 			
				
				
				<a href=/home.php class="nav-item nav-link">Home</a>
				<a href=/aboutus.php class="nav-item nav-link">About Us</a>
				<a href=/depositborrow.php class="nav-item nav-link">Deposit/Borrow</a>
				<a href=/otc.php class="nav-item nav-link">Trustless Escrow</a>
				<a href=/paperwalletc.php class="nav-item nav-link  active">Paper Wallets</a>
				<a href=/tssandgdfnodes.php class="nav-item nav-link">TSS and GDF Nodes</a>

				<a href=/tokensale.php class="nav-item nav-link">Token Sale</a>
				<a href=/whitepaper.php class="nav-item nav-link">White Paper</a>
				<a href=/investordeck.php class="nav-item nav-link">Investor Deck</a>				
				
				
				
				
				
				
				
            </div>
 
        </div>
    </nav>
</div>
<div class=container>
<h4> Ethereum Paper Wallet </h4> <h5> Batch Paper Wallets</h5>
This software is still under testing, use it at your own risk. This page will generate single or multiple paper wallets as
a pdf file which you can save. Do not reveal your private keys to anyone. <b>You may disconnect from internet now. </b> Make sure no computer virus or keyboard logger. 0.9.1 version.
<hr>
<p>
<label for=datePicker>Amount of Wallets (1-1000)</label>
<input type=text name=username class=form-control id=amountofwallets value=10>
<br>
<p id=description>
Start moving your mouse below this line until the paper wallets is generated as pdf file.
</p>
<hr>
<div class=container>
<div class=column>
<div class=canvas>
<canvas id=Canvas onmousemove=canvasMove(event) onmousedown=mouseDown(event)></canvas>
</div>
</div>
</div>
</body>
<script>var canvas;var context;var image;var image2;var imageDataOriginal;var imageDataRawOriginalUnchanged;var mouseholdingsomething=0;var stop=false;var frameCount=0;var fps,fpsInterval,startTime,now,then,elapsed;var currentdrawfunction=0;function loadweb3(){if(typeof web3!=="undefined"){console.log("Web3 Detected! "+web3.currentProvider.constructor.name);window.web3=new Web3(web3.currentProvider)}else{console.log("No Web3 Detected... using HTTP Provider");window.web3=new Web3(new Web3.providers.HttpProvider("https:abc"))}}function init(){loadweb3();image=document.getElementById("SourceImage");canvas=document.getElementById("Canvas");context=canvas.getContext("2d");canvas.width=1344;canvas.height=522;context.drawImage(image,0,0,canvas.width,canvas.height);imageDataOriginal=context.getImageData(0,0,image.width,image.height);imageDataRawOriginalUnchanged=context.getImageData(0,0,image.width,image.height);initglobalvariable()}function drawImage(a){canvas.width=a.width;canvas.height=a.height;context.drawImage(a,0,0)}window.addEventListener("load",init);var numberofpoint=0;var entropyindex=0;var entropystring="";function random(b){var a=Math.sin(b++)*10000;return a-Math.floor(a)}function getRandomArbitrary(b,d,a){var c=random(b);return c*(a-d)+d}function randomStr(b,a){var c="";for(var d=b;d>0;d--){c+=a[Math.floor(Math.random()*a.length)]}return c}function printWallet(){var o=36;o=document.getElementById("amountofwallets").value;var p=new jsPDF();var q=new Image();var j=25;var l=6;q.src="globaldefilogosmall.png";var v;v=Math.ceil(o/5);var b=1;var h=new Date();var k=h.toJSON();for(num=1;num<=v;num++){p.addFont("Helvetica","Helvetica","normal");p.setFont("Helvetica");j=25;l=6;p.addImage(q,"png",20,8,160/4,42/4);p.setTextColor(150);p.setFontSize(12);p.text(20,j,"https://globaldefi.io");j=j+l;p.text(20,j,"This software is still under testing. Use at your own risk.");j=j+l;p.text(20,j,"Do not reveal your private key to anyone. ");p.text(100,j,k);j=j+l;p.setLineWidth(0.01);p.setDrawColor(225,225,225);p.line(20,j,190,j);j=j+10;l=9;p.setFontSize(16);p.setDrawColor(185,185,185);p.setTextColor(100);p.text(20,j,"Ethereum Paper Wallets");j=j+4;p.line(20,j,190,j);j=j+l;p.setFontSize(12);p.setTextColor(50);p.setDrawColor(205,205,205);for(i=0;i<5;i++){if(b<=o){rdnstr=randomStr(20,"1234567abcdefg");newentropystring=entropystring+rdnstr;acct=web3.eth.accounts.create(newentropystring);p.addFont("ArialMS","Arial","normal");p.setFont("Arial");p.text(20,j,"Public Key");p.setFontSize(34);p.text(150,j+10,b.toString(10));p.setFontSize(12);l=7;j=j+l;p.addFont("Courier","Courier","normal");p.setFont("Courier");p.text(20,j,acct.address);j=j+l;j=j+l;p.addFont("ArialMS","Arial","normal");p.setFont("Arial");p.text(20,j,"Private Key");j=j+l;p.addFont("Courier","Courier","normal");p.setFont("Courier");p.text(20,j,acct.privateKey);j=j+l;p.line(20,j,190,j);b=b+1;j=j+8}}if(num!=v){p.addPage()}}var s=new Date();var m=s.getFullYear();var g=s.getMonth()+1;var t=s.getDate();var a;var c;var e;if(g<10){a="0"+g.toString()}else{a=g.toString()}if(t<10){c="0"+t.toString()}else{c=t.toString()}var x=s.getMilliseconds();var f=s.getSeconds();var r=m.toString().concat(a,c);r=r+"_"+f+x.toString();var u="paperwallet"+r+".pdf";p.save(u);document.getElementById("description").innerHTML=o+" wallets generated. To generate more new wallets, you need to refresh this page."}var tempcountinmove=0;var printedwalletaddress=0;function canvasMove(f){var a=f.clientX;var g=f.clientY;var d=f.pageX;var b=f.pageY;scaleX=canvas.width/canvas.getBoundingClientRect().width,scaleY=canvas.height/canvas.getBoundingClientRect().height;truex=(f.clientX-canvas.getBoundingClientRect().left)*scaleX,truey=(f.clientY-canvas.getBoundingClientRect().top)*scaleY;if(printedwalletaddress==0){context.beginPath();context.moveTo(truex,truey);context.lineTo(truex+4,truey+4);context.stroke()}if(entropyindex<=250&&tempcountinmove!=205){entropystring+=String.fromCharCode(getRandomArbitrary(truex+truey,33,126));tempcountinmove=0;var c="Start moving your mouse below this line until the paper wallets is generated as pdf file.";c=c+"                                      Entropy count="+entropyindex+"/250";document.getElementById("description").innerHTML=c;entropyindex++}else{if(printedwalletaddress==0){printedwalletaddress=1;printWallet()}}tempcountinmove++}var historyonecycle=0;function wait(b){var c=new Date().getTime();var a=c;while(a<c+b){a=new Date().getTime()}}function waitSeconds(c){var b=0,d=new Date().getTime(),a=0;while(b<c){a=new Date().getTime();b=a-d}}function w(){setTimeout(5000)}function initglobalvariable(){}function getRandomInt(a){return Math.floor(Math.random()*Math.floor(a))};</script>
</html>
