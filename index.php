<!DOCTYPE html>
<html>
  <head>
    <title>FOREX GENERAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      body, html {
          height: 100%;
          margin: 0;
      }

      .bgimg {
          background-image: url('/forestbridge.jpg');
          height: 100%;
          background-position: center;
          background-size: cover;
          position: relative;
          color: white;
          font-family: "Courier New", Courier, monospace;
          font-size: 25px;
      }

      .topleft {
          position: absolute;
          top: 0;
          left: 16px;
      }

      .bottomleft {
          position: absolute;
          bottom: 0;
          left: 16px;
      }

      .middle {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
      }

      hr {
          margin: auto;
          width: 40%;
      }
    </style>
  </head>
  <body>
    <div class="bgimg">
      <div class="topleft">
        <p>FOREX GENERAL</p>
      </div>
      <div class="middle">
        <h1>COMING SOON</h1>
        <hr>
        <p>by PRESSPAGE ENTERTAINMENT INC.</p>
        <br/>
        <button class="w3-button w3-block w3-brown" id="connect-wallet">Connect to Wallet</button>
      </div>
      <div class="bottomleft">
        <p>&copy; 2017-<?php echo date('Y'); ?> PRESSPAGE ENTERTAINMENT INC dba REDEECASH. All rights reserved.</p>
      </div>
    </div>
    <!-- LOGIN DIALOG -->
    <div id="login-dialog" class="w3-modal">
        <div class="w3-modal-content">
        <div class="w3-container">
            <h2 class="w3-green">Login</h2>
            <form method="post">
              <label for="login-wallet">Wallet</label>
              <input type="text" class="w3-input w3-block w3-lightgrey" id="login-wallet" name="login_wallet" readonly value="" />
              <label for="login-signature">Signature</label>
              <textarea class="w3-input w3-block w3-lightgrey" rows="5" id="login-signature" name="login_signature" readonly></textarea>
              <input type="hidden" name="login_message" value="PINGLEWARE-SUPPORT" />
              <p class="w3-panel">A software license is required to accessed this service. You can obtained a software license from <a href="https://pingleware.support" target="_blank">PINGLEWARE.SUPPORT</a>. You only need to purchase one-time and use the same wallet.</p>
              <input type="submit" name="login_now" id="login-now" class="w3-button w3-block w3-black" value="Login" />
              <br/>
              <button class="w3-button w3-block w3-orange" onclick="document.getElementById('login-dialog').style.display='none';document.getElementById('connect-wallet').removeAttribute('disabled');" >Cancel</button>
              <br/>
            </form>
        </div>
        </div>
    </div>
    <!-- ERROR DIALOG -->
    <div id="error-dialog" class="w3-modal">
        <div class="w3-modal-content">
        <div class="w3-container w3-white">
            <h2 class="w3-red" id="error-dialog-title"></h2>
            <p id="error-dialog-message"></p>
            <button class="w3-button w3-block w3-black" onclick="document.getElementById('error-dialog').style.display='none';">OK</button>
            <br/>
        </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="js/ethers.min.js"></script>
    <script type="text/javascript">
      document.getElementById("connect-wallet").addEventListener("click",async function(e){
          this.setAttribute("disabled","disabled");
          e.preventDefault();
          if (window.ethereum) {
              window.ethereum.request({ method: "eth_requestAccounts"})
              .then(result => {
              if (result.length > 0) {
                  var wallet = window.ethereum.selectedAddress;
                  var message = "PINGLEWARE-SUPPORT";
                  var provider = new ethers.providers.Web3Provider(window.ethereum);
                  const signer = provider.getSigner();
                  signer.signMessage(message)
                  .then(async function(signature){
                      document.getElementById("login-wallet").value = wallet;
                      document.getElementById("login-signature").value = signature;
                      document.getElementById("login-dialog").style.display = "block";
                  });
              } else {
                  document.getElementById("error-dialog-title").innerHTMl = "Login Error";
                  document.getElementById("error-dialog-message").innerHTML = "No wallets connected?";
                  document.getElementById("error-dialog").style.display = "block";
              }
              });
          } else {
              document.getElementById("error-dialog-title").innerHTMl = "Login Error";
              document.getElementById("error-dialog-message").innerHTML = "install metamask?";
              document.getElementById("error-dialog").style.display = "block";
          }
      });

    </script>
  </body>
</html>
