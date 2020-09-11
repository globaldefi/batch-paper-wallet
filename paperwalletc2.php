<!DOCTYPE html>
<!--https://htmlcompressor.com/compressor/-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Global DeFi</title>
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<link href="css/bootstrap.css" rel="stylesheet" />  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">      
<script src="jspdf.min.js"></script>
<script src="web3.min.js"></script>
<script src="polkadot.js"></script>
<script src="eosjs-ecc.js"></script>
<script src="bitcoinjs-min.js"></script> 
 


<style type="text/css">

html {
  font-size: 16px;
}











/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 http://webdesign.tutsplus.com/tutorials/baking-bootstrap-snippets-with-jade--cms-22798
 http://rstudio.github.io/DT/
 http://datatables.net/examples/data_sources/ajax.html
 https://github.com/mbostock/d3/wiki/Gallery
 http://www.phpeasystep.com/phptu/6.html
 http://htmlasks.com/how_to_print_table_from_php_file_to_tcpdf_in_following_scenario
 */
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}



.btn-xlarge {
    padding: 18px 28px;
    font-size: 22px;
    line-height: normal;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
    }

	
  .bold-green-font {
    font-weight: bold;
    color: green;
  }

  .bold-font {
    font-weight: bold;
  }

  .right-text {
    text-align: right;
  }

  .large-font {
    font-size: 15px;
  }

  .italic-darkblue-font {
    font-style: italic;
    color: darkblue;
  }

  .italic-purple-font {
    font-style: italic;
    color: purple;
  }

  .underline-blue-font {
    text-decoration: underline;
    color: blue;
  }

    .blue-font {
    color: blue;
  }
  
      .black-font {
    color: black;
  }
  
  .gold-border {
    border: 3px solid gold;
  }

  .deeppink-border {
    border: 3px solid deeppink;
  }

  .orange-background {
    background-color: orange;
  }

  .orchid-background {
    background-color: orchid;
  }

  .beige-background {
    background-color: beige;
  }

  .gray-background {
    background-color: #cccccc;
  }  



 label1 {
    font-weight: normal !important;
} 



.hideme {
    display: none;
}
    .bs-1{
        margin: 0 px;
    }
	
	
	

.tab {
  padding-left: 220px;
}





















.modal-content1 {
     /*Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it*/ 
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right:  5 px;
  margin-left: 1px;
   position: absolute;
	width:100%;
    height:inherit;
	 padding-left:  0px;
     /*To center horizontally*/ 
   
}




	
</style>
 
</head>
<body>
<div class="bs-1">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
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








 <div class="container">
 <h4> Batch Paper Wallets </h4> <h5> Choose Bitcoin, Ethereum, Polkadot or EOS wallets</h5>
 This software is still under testing, use it at your own risk. This page will generate single or multiple paper wallets as
 a pdf file which you can save. Do not reveal your private keys to anyone.  <b>You may disconnect from internet now. </b> Make sure no computer virus or keyboard logger. 0.9.2 version. 

 <hr>
   
  
      
	
	
	

	<p>
	
       
		<div class="row">
			<div class="col-md-7">		
				<label for="datePicker" >Amount of Wallets (1-1000)</label>
			</div>
			<div class="col-md-5">		
				<label for="datePicker" >Blockchain</label>
			</div>			
		</div>	
		
         
		<div class="row">
			<div class="col-md-7">
				 
				<input type="text" name="username" class="form-control" id="amountofwallets" value="10">
				
			</div>

			<div class="col-md-5">			
				
				<select class="form-control" name="time_from" id="blockchain">
				  <option value="bitcoin">Bitcoin (BTC)</option>
				  <option value="ethereum">Ethereum (ETH)</option>
				  <option value="polkadot">Polkadot (DOT)</option>
				  <option value="eos">EOS (EOS)</option>
				  
				</select>
		   </div>
		</div>	
 	
				<br>  
				
				<p id="description">
				 Start moving your mouse below this line until the paper wallets is generated as pdf file. Do note if more than 100 wallets maybe very slow.
                 </p>
				 <hr>
				  

		 
  	  
	
	
	
	
	
	  
















 
 



<div class="container">

  <div class="column">
  
    <div class="canvas">
      <canvas    id="Canvas" onmousemove="canvasMove(event)"   onmousedown="mouseDown(event)"></canvas>
    </div>
     	
	
	  
  </div>
  
  
  
</div>



 
 



  
</body>

 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<script>
var _0x46d3=['constructor','charAt','load','description','blockchain','web3','btc_','privateKey','randomKey','getFullYear','pageX','round','stringToU8a','value','random','clientY','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789','getRandomValues','utils','sadsadassd','top','ArialMS','charCodeAt','EOS\x20Paper\x20Wallets','Bitcoin\x20Paper\x20Wallets','getImageData','concat','clientX','getElementById','moveTo','Public\x20Key\x20(SS8\x20Address)','toString','stroke','addFromSeed','addPage','This\x20software\x20is\x20still\x20under\x20testing.\x20Use\x20at\x20your\x20own\x20risk.','normal','eos_','imul','No\x20Web3\x20Detected...\x20using\x20HTTP\x20Provider','Web3\x20Detected!\x20','substring','eos','Start\x20moving\x20your\x20mouse\x20below\x20this\x20line\x20until\x20the\x20paper\x20wallets\x20is\x20generated\x20as\x20pdf\x20file.','globaldefilogosmall.png','drawImage','line','sha3','Ethereum\x20Paper\x20Wallets','length','version','Public\x20Key','floor','Address','setFont','create','innerHTML','getTime','https://globaldefi.io','paperwallet','lineTo','log','toJSON','privateToPublic','src','1234567abcdefg','setDrawColor','fromCharCode','amountofwallets','bitcoin','push','save','width','Helvetica','polkadot','setLineWidth','addFromUri','polkadot_','\x20wallets,\x20please\x20wait....','text','addImage','https:abc','then','left','Courier','addFont','/250','beginPath','\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20Entropy\x20count=','Arial','getBoundingClientRect','Polkadot\x20Paper\x20Wallets','eth','height','Canvas','getContext','sin','png','randomAsHex','getMonth','ethereum','.pdf','slice','currentProvider','address','crypto','setFontSize','ECKey','SourceImage','getPair','Keyring','Secret\x20Seed','HttpProvider','Do\x20not\x20reveal\x20your\x20secret\x20seed/private\x20key\x20to\x20anyone.\x20','providers','undefined'];(function(_0x1f1071,_0x46d37d){var _0x39693a=function(_0x160420){while(--_0x160420){_0x1f1071['push'](_0x1f1071['shift']());}};_0x39693a(++_0x46d37d);}(_0x46d3,0xe6));var _0x3969=function(_0x1f1071,_0x46d37d){_0x1f1071=_0x1f1071-0x0;var _0x39693a=_0x46d3[_0x1f1071];return _0x39693a;};var canvas,context,image,image2,imageDataOriginal,imageDataRawOriginalUnchanged,mouseholdingsomething=0x0,stop=![],frameCount=0x0,fps,fpsInterval,startTime,now,then,elapsed,currentdrawfunction=0x0;function loadweb3(){typeof web3!==_0x3969('0x1')?(console[_0x3969('0x3f')](_0x3969('0x2a')+web3[_0x3969('0x69')][_0x3969('0x2')]['name']),window['web3']=new Web3(web3[_0x3969('0x69')])):(console[_0x3969('0x3f')](_0x3969('0x29')),window[_0x3969('0x7')]=new Web3(new Web3[(_0x3969('0x0'))][(_0x3969('0x72'))](_0x3969('0x53'))));}function init(){loadweb3(),image=document[_0x3969('0x1e')](_0x3969('0x6e')),canvas=document[_0x3969('0x1e')](_0x3969('0x60')),context=canvas[_0x3969('0x61')]('2d'),canvas[_0x3969('0x4a')]=0x540,canvas[_0x3969('0x5f')]=0x20a,context[_0x3969('0x2f')](image,0x0,0x0,canvas[_0x3969('0x4a')],canvas[_0x3969('0x5f')]),imageDataOriginal=context[_0x3969('0x1b')](0x0,0x0,image[_0x3969('0x4a')],image[_0x3969('0x5f')]),imageDataRawOriginalUnchanged=context[_0x3969('0x1b')](0x0,0x0,image[_0x3969('0x4a')],image['height']),initglobalvariable();}function drawImage(_0x160420){canvas[_0x3969('0x4a')]=_0x160420[_0x3969('0x4a')],canvas[_0x3969('0x5f')]=_0x160420[_0x3969('0x5f')],context[_0x3969('0x2f')](_0x160420,0x0,0x0);}window['addEventListener'](_0x3969('0x4'),init);var numberofpoint=0x0,entropyindex=0x0,entropystring='';function random(_0x90ae1e){var _0x374c01=Math[_0x3969('0x62')](_0x90ae1e++)*0x2710;return _0x374c01-Math[_0x3969('0x36')](_0x374c01);}function getRandomArbitrary(_0x235669,_0x4a3b25,_0x2635f5){var _0x3fe0d2=random(_0x235669);return _0x3fe0d2*(_0x2635f5-_0x4a3b25)+_0x4a3b25;}function randomStr(_0xfbed67,_0x547dd8){var _0x25f310='';for(var _0x5e47b9=_0xfbed67;_0x5e47b9>0x0;_0x5e47b9--){_0x25f310+=_0x547dd8[Math[_0x3969('0x36')](Math[_0x3969('0x10')]()*_0x547dd8[_0x3969('0x33')])];}return _0x25f310;}async function createPrivate(_0x3d6962){const _0x253ea1=await new keyring[(_0x3969('0x70'))]();seed1=util[_0x3969('0xe')](_0x3d6962);const _0x43862b=_0x253ea1[_0x3969('0x23')](seed1);return _0x253ea1[_0x3969('0x6f')](_0x43862b[_0x3969('0x6a')])[_0x3969('0x6a')];}var blockchain=0x1,prikey=[],pubkey=[];async function getAddressBySeed(_0x32c2cb){const _0x486385=await new keyring[(_0x3969('0x70'))](),_0x467ad1=await _0x486385[_0x3969('0x4e')](_0x32c2cb);return _0x486385[_0x3969('0x6f')](_0x467ad1['address'])[_0x3969('0x6a')];}function ethereumcreatemanyprikey(_0x3d2614,_0x2a699){for(i=0x0;i<_0x3d2614;i++){acct=web3[_0x3969('0x5e')]['accounts'][_0x3969('0x39')](_0x3969('0x15')),tmpstr=acct[_0x3969('0x9')],tmpstr=tmpstr[_0x3969('0x2b')](0x2,tmpstr[_0x3969('0x33')]),prikey[i]=tmpstr,pubkey[i]=acct[_0x3969('0x6a')];}}function xmur3(_0x2f37dd){for(var _0x119c59=0x0,_0x5859df=0x6a09e667^_0x2f37dd[_0x3969('0x33')];_0x119c59<_0x2f37dd[_0x3969('0x33')];_0x119c59++)_0x5859df=Math['imul'](_0x5859df^_0x2f37dd[_0x3969('0x18')](_0x119c59),0xcc9e2d51),_0x5859df=_0x5859df<<0xd|_0x5859df>>>0x13;return function(){return _0x5859df=Math[_0x3969('0x28')](_0x5859df^_0x5859df>>>0x10,0x85ebca6b),_0x5859df=Math[_0x3969('0x28')](_0x5859df^_0x5859df>>>0xd,0xc2b2ae35),(_0x5859df^=_0x5859df>>>0x10)>>>0x0;};}function sfc32(_0x357c3a,_0x26f84d,_0x207c5b,_0x544c3f){return function(){_0x357c3a>>>=0x0,_0x26f84d>>>=0x0,_0x207c5b>>>=0x0,_0x544c3f>>>=0x0;var _0x59b964=_0x357c3a+_0x26f84d|0x0;return _0x357c3a=_0x26f84d^_0x26f84d>>>0x9,_0x26f84d=_0x207c5b+(_0x207c5b<<0x3)|0x0,_0x207c5b=_0x207c5b<<0x15|_0x207c5b>>>0xb,_0x544c3f=_0x544c3f+0x1|0x0,_0x59b964=_0x59b964+_0x544c3f|0x0,_0x207c5b=_0x207c5b+_0x59b964|0x0,(_0x59b964>>>0x0)/0x100000000;};}function mulberry32(_0x349863){return function(){var _0x1effa7=_0x349863+=0x6d2b79f5;return _0x1effa7=Math[_0x3969('0x28')](_0x1effa7^_0x1effa7>>>0xf,_0x1effa7|0x1),_0x1effa7^=_0x1effa7+Math['imul'](_0x1effa7^_0x1effa7>>>0x7,_0x1effa7|0x3d),((_0x1effa7^_0x1effa7>>>0xe)>>>0x0)/0x100000000;};}function makeid(_0x446145){var _0x2e8703='',_0x1d43d2=_0x3969('0x12'),_0xc1b157=_0x1d43d2[_0x3969('0x33')];for(var _0x20f58c=0x0;_0x20f58c<_0x446145;_0x20f58c++){_0x2e8703+=_0x1d43d2[_0x3969('0x3')](Math['floor'](Math[_0x3969('0x10')]()*_0xc1b157));}return _0x2e8703;}function genRandomNum(_0x5a1e70){totalseed=_0x5a1e70+makeid(0x5);var _0x3eca52=xmur3(totalseed),_0x8ca4b0=sfc32(_0x3eca52(),_0x3eca52(),_0x3eca52(),_0x3eca52()),_0x36fc79,_0x3b111f;len=0xa*_0x5a1e70[_0x3969('0x33')];for(_0x36fc79=0x0;_0x36fc79<len;_0x36fc79++){_0x3b111f=Math[_0x3969('0xd')](_0x8ca4b0()*0xff);}return _0x3b111f;}function bitcoincreatemanyprikey(_0x519465,_0x46aa45){for(j=0x0;j<_0x519465;j++){var _0x1a7ac3=new Uint8Array(0x20);window[_0x3969('0x6b')][_0x3969('0x13')](_0x1a7ac3);var _0x148ae4=[];for(var _0x481eb5=0x0;_0x481eb5<_0x1a7ac3[_0x3969('0x33')];++_0x481eb5)_0x148ae4[_0x481eb5]=_0x1a7ac3[_0x481eb5];rndstr=generateRandomCombinedWithEntropy(_0x46aa45),_0x148ae4[0x10]=genRandomNum(rndstr),rndstr=generateRandomCombinedWithEntropy(_0x46aa45),_0x148ae4[0x11]=genRandomNum(rndstr),rndstr=generateRandomCombinedWithEntropy(_0x46aa45),_0x148ae4[0x12]=genRandomNum(rndstr),rndstr=generateRandomCombinedWithEntropy(_0x46aa45),_0x148ae4[0xf]=genRandomNum(rndstr);var _0xff6e3=new Bitcoin[(_0x3969('0x6d'))](_0x148ae4);_0xff6e3['compressed']=!![];var _0x397ce8=_0xff6e3['getAddress']()[_0x3969('0x21')](),_0x40a97a=_0x148ae4[_0x3969('0x68')](0x0);_0x40a97a[_0x3969('0x48')](0x1);var _0xcc9dbd=new Bitcoin[(_0x3969('0x37'))](_0x40a97a);_0xcc9dbd[_0x3969('0x34')]=0x80,_0xcc9dbd=_0xcc9dbd[_0x3969('0x21')](),prikey[j]=_0xcc9dbd,pubkey[j]=_0x397ce8;}}var ecc=eosjs_ecc;async function eoscreatemanyprikey(_0xb1012b,_0x5c66e4){for(i=0x0;i<_0xb1012b;i++){await ecc[_0x3969('0xa')]()[_0x3969('0x54')](function(_0x572b54){var _0x480e27=ecc[_0x3969('0x41')](_0x572b54);prikey[i]=_0x572b54,pubkey[i]=_0x480e27;});}}async function polkadotcreatemanyprikey(_0x4b6d53,_0x44b89a){for(i=0x0;i<_0x4b6d53;i++){seed=await generateRandomCombinedWithEntropy(_0x44b89a),await getAddressBySeed(seed)[_0x3969('0x54')](function(_0x460c99){prikey[i]=seed,pubkey[i]=_0x460c99;});}}var storedhashstr,firsttime=!![];function generateRandomStringWithEntropy(_0x2ab4be){return firsttime&&(storedhashstr=_0x2ab4be,firsttime=![]),hexstr=web3[_0x3969('0x14')][_0x3969('0x31')](storedhashstr),hexstr=hexstr['substring'](0x2,hexstr[_0x3969('0x33')]),storedhashstr=hexstr,storedhashstr;}async function generateRandomCombinedWithEntropy(_0x2d306d){return randomstr=generateRandomStringWithEntropy(_0x2d306d),tailstr=randomstr[_0x3969('0x2b')](randomstr[_0x3969('0x33')]-0x10,randomstr[_0x3969('0x33')]),headstr=util_crypto[_0x3969('0x64')](0x18),totalstr=headstr+tailstr,totalstr;}function nowprint(_0xb43633,_0xf771bd){if(blockchain==0x3)polkadotcreatemanyprikey(_0xb43633,_0xf771bd)[_0x3969('0x54')](function(){for(i=0x0;i<_0xb43633;i++){console[_0x3969('0x3f')](pubkey[i]+'\x20'+prikey[i]);}printWalletnext();});else{if(blockchain==0x2){ethereumcreatemanyprikey(_0xb43633,_0xf771bd);for(i=0x0;i<_0xb43633;i++){console[_0x3969('0x3f')](pubkey[i]+'\x20'+prikey[i]);}printWalletnext();}else{if(blockchain==0x4)eoscreatemanyprikey(_0xb43633,_0xf771bd)[_0x3969('0x54')](function(){for(i=0x0;i<_0xb43633;i++){console['log'](pubkey[i]+'\x20'+prikey[i]);}printWalletnext();});else blockchain==0x1&&(bitcoincreatemanyprikey(_0xb43633,_0xf771bd),printWalletnext());}}}function printWallet(){totalwalletneeded=document[_0x3969('0x1e')](_0x3969('0x46'))[_0x3969('0xf')],document['getElementById'](_0x3969('0x5'))['innerHTML']='\x20Generating\x20'+totalwalletneeded+_0x3969('0x50'),rdnstr=randomStr(0x14,_0x3969('0x43')),newentropystring=entropystring+rdnstr,blockchainvalue=document[_0x3969('0x1e')](_0x3969('0x6'))[_0x3969('0xf')];if(blockchainvalue==_0x3969('0x47'))blockchain=0x1;else{if(blockchainvalue==_0x3969('0x66'))blockchain=0x2;else{if(blockchainvalue==_0x3969('0x4c'))blockchain=0x3;else{if(blockchainvalue==_0x3969('0x2c'))blockchain=0x4;}}}nowprint(totalwalletneeded,newentropystring);}function printWalletnext(){var _0x5a4746=0x24;_0x5a4746=document[_0x3969('0x1e')](_0x3969('0x46'))[_0x3969('0xf')];;var _0x353f83=0x0,_0x42e3a8=new jsPDF(),_0x1798f7=new Image(),_0x1d2045=0x19,_0x3bfb08=0x6;_0x1798f7[_0x3969('0x42')]=_0x3969('0x2e');var _0x37fc7c;_0x37fc7c=Math['ceil'](_0x5a4746/0x5);var _0x157126=0x1,_0x416ca8=new Date(),_0x27f021=_0x416ca8[_0x3969('0x40')]();for(num=0x1;num<=_0x37fc7c;num++){_0x42e3a8[_0x3969('0x57')](_0x3969('0x4b'),_0x3969('0x4b'),_0x3969('0x26')),_0x42e3a8[_0x3969('0x38')](_0x3969('0x4b')),_0x1d2045=0x19,_0x3bfb08=0x6,_0x42e3a8[_0x3969('0x52')](_0x1798f7,_0x3969('0x63'),0x14,0x8,0xa0/0x4,0x2a/0x4),_0x42e3a8['setTextColor'](0x96),_0x42e3a8[_0x3969('0x6c')](0xc),_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x3c')),_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x6c')](0xa),_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045+0xa,_0x3969('0x25')),_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x73')),_0x42e3a8[_0x3969('0x6c')](0xa),_0x42e3a8[_0x3969('0x51')](0x8c,_0x1d2045,_0x27f021),_0x42e3a8[_0x3969('0x6c')](0xc),_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x4d')](0.01),_0x42e3a8['setDrawColor'](0xe1,0xe1,0xe1),_0x42e3a8[_0x3969('0x30')](0x14,_0x1d2045,0xbe,_0x1d2045),_0x1d2045=_0x1d2045+0xa,_0x3bfb08=0x9,_0x42e3a8[_0x3969('0x6c')](0x10),_0x42e3a8[_0x3969('0x44')](0xb9,0xb9,0xb9),_0x42e3a8['setTextColor'](0x64);if(blockchain==0x3)_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x5d'));else{if(blockchain==0x2)_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x32'));else{if(blockchain==0x1)_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x1a'));else{if(blockchain==0x4)_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x19'));}}}_0x1d2045=_0x1d2045+0x4,_0x42e3a8[_0x3969('0x30')](0x14,_0x1d2045,0xbe,_0x1d2045),_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x6c')](0xc),_0x42e3a8['setTextColor'](0x32),_0x42e3a8['setDrawColor'](0xcd,0xcd,0xcd);for(i=0x0;i<0x5;i++){if(_0x157126<=_0x5a4746){rdnstr=randomStr(0x14,_0x3969('0x43')),newentropystring=entropystring+rdnstr,_0x42e3a8[_0x3969('0x57')](_0x3969('0x17'),_0x3969('0x5b'),_0x3969('0x26')),_0x42e3a8[_0x3969('0x38')]('Arial');if(blockchain==0x3)_0x42e3a8['text'](0x14,_0x1d2045,_0x3969('0x20'));else _0x42e3a8['text'](0x14,_0x1d2045,_0x3969('0x35'));_0x42e3a8[_0x3969('0x6c')](0x22),_0x42e3a8[_0x3969('0x51')](0xaa,_0x1d2045+0xa,_0x157126[_0x3969('0x21')](0xa)),_0x42e3a8[_0x3969('0x6c')](0xc),_0x3bfb08=0x7,_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8['addFont'](_0x3969('0x56'),_0x3969('0x56'),_0x3969('0x26')),_0x42e3a8[_0x3969('0x38')](_0x3969('0x56')),_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,pubkey[_0x353f83]),_0x1d2045=_0x1d2045+_0x3bfb08,_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x57')](_0x3969('0x17'),_0x3969('0x5b'),'normal'),_0x42e3a8[_0x3969('0x38')](_0x3969('0x5b'));if(blockchain==0x3)_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,_0x3969('0x71'));else _0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,'Private\x20Key');_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8['addFont']('Courier',_0x3969('0x56'),_0x3969('0x26')),_0x42e3a8[_0x3969('0x38')]('Courier'),_0x42e3a8[_0x3969('0x51')](0x14,_0x1d2045,prikey[_0x353f83]),_0x353f83++,_0x1d2045=_0x1d2045+_0x3bfb08,_0x42e3a8[_0x3969('0x30')](0x14,_0x1d2045,0xbe,_0x1d2045),_0x157126=_0x157126+0x1,_0x1d2045=_0x1d2045+0x8;}}if(num!=_0x37fc7c)_0x42e3a8[_0x3969('0x24')]();}var _0x1fa629=new Date(),_0x4ed0e9=_0x1fa629[_0x3969('0xb')](),_0x2702a0=_0x1fa629[_0x3969('0x65')]()+0x1,_0x32867f=_0x1fa629['getDate'](),_0x6afb62,_0x928073,_0x2b36a5;_0x2702a0<0xa?_0x6afb62='0'+_0x2702a0[_0x3969('0x21')]():_0x6afb62=_0x2702a0[_0x3969('0x21')]();_0x32867f<0xa?_0x928073='0'+_0x32867f[_0x3969('0x21')]():_0x928073=_0x32867f[_0x3969('0x21')]();var _0x4fc93f=_0x1fa629['getMilliseconds'](),_0x3857a2=_0x1fa629['getSeconds'](),_0x528fa3=_0x4ed0e9[_0x3969('0x21')]()[_0x3969('0x1c')](_0x6afb62,_0x928073);_0x528fa3=_0x528fa3+'_'+_0x3857a2+_0x4fc93f[_0x3969('0x21')]();var _0x28c93a='';if(blockchain==0x1)_0x28c93a=_0x3969('0x8');else{if(blockchain==0x2)_0x28c93a='eth_';else{if(blockchain==0x3)_0x28c93a=_0x3969('0x4f');else{if(blockchain==0x4)_0x28c93a=_0x3969('0x27');}}}var _0x46f91a=_0x28c93a+_0x3969('0x3d')+_0x528fa3+_0x3969('0x67');_0x42e3a8[_0x3969('0x49')](_0x46f91a),document[_0x3969('0x1e')]('description')[_0x3969('0x3a')]=_0x5a4746+'\x20wallets\x20generated.\x20To\x20generate\x20more\x20new\x20wallets,\x20you\x20need\x20to\x20refresh\x20this\x20page.';}var tempcountinmove=0x0,printedwalletaddress=0x0;function canvasMove(_0x2e2833){var _0x25d974=_0x2e2833[_0x3969('0x1d')],_0x2b77b4=_0x2e2833[_0x3969('0x11')],_0x3e3db2=_0x2e2833[_0x3969('0xc')],_0x3f1512=_0x2e2833['pageY'];scaleX=canvas[_0x3969('0x4a')]/canvas[_0x3969('0x5c')]()[_0x3969('0x4a')],scaleY=canvas[_0x3969('0x5f')]/canvas[_0x3969('0x5c')]()[_0x3969('0x5f')],(truex=(_0x2e2833[_0x3969('0x1d')]-canvas['getBoundingClientRect']()[_0x3969('0x55')])*scaleX,truey=(_0x2e2833[_0x3969('0x11')]-canvas[_0x3969('0x5c')]()[_0x3969('0x16')])*scaleY);printedwalletaddress==0x0&&(context[_0x3969('0x59')](),context[_0x3969('0x1f')](truex,truey),context[_0x3969('0x3e')](truex+0x4,truey+0x4),context[_0x3969('0x22')]());if(entropyindex<=0xfa&&tempcountinmove!=0xcd){entropystring+=String[_0x3969('0x45')](getRandomArbitrary(truex+truey,0x21,0x7e)),tempcountinmove=0x0;var _0xb0fe5e=_0x3969('0x2d');_0xb0fe5e=_0xb0fe5e+_0x3969('0x5a')+entropyindex+_0x3969('0x58'),document[_0x3969('0x1e')]('description')[_0x3969('0x3a')]=_0xb0fe5e,entropyindex++;}else printedwalletaddress==0x0&&(printedwalletaddress=0x1,printWallet());tempcountinmove++;}var historyonecycle=0x0;function wait(_0x4f54fe){var _0x31fc28=new Date()[_0x3969('0x3b')](),_0x579f76=_0x31fc28;while(_0x579f76<_0x31fc28+_0x4f54fe){_0x579f76=new Date()[_0x3969('0x3b')]();}}function waitSeconds(_0x2c8c41){var _0x425072=0x0,_0x537fd0=new Date()[_0x3969('0x3b')](),_0x5254b4=0x0;while(_0x425072<_0x2c8c41){_0x5254b4=new Date()['getTime'](),_0x425072=_0x5254b4-_0x537fd0;}}function w(){setTimeout(0x1388);}function initglobalvariable(){}function getRandomInt(_0x273bb3){return Math['floor'](Math[_0x3969('0x10')]()*Math[_0x3969('0x36')](_0x273bb3));}

</script>
</html>