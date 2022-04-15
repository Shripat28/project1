<html>
<head>
  <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      background-image: url("https://media.istockphoto.com/photos/abstract-blue-background-minimal-geometric-background-for-use-in-picture-id1221025677?b=1&k=20&m=1221025677&s=170667a&w=0&h=7ifCf2jcgMPJEXQ_1VS09j3VbTq6Yu_lWUAbOnBHkDY=");
      display: flex;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      backdrop-filter: blur(3px);
      font-weight: bold;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    video {
      max-width: calc(50% - 100px);
      margin: 0 50px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: white;
    }
    .copy {
      position: fixed;
      top: 10px;
      left: 50%;
      text-align: center;
      line-height: 2;
      transform: translateX(-50%);
      font-size: 20px;
      color: white;
    }
  </style>
</head>
<body>
  <div class="copy">
    <h3>Welcome, the doctor will connect to you shortly!</h3>
    <br> To end the call, close this tab.
  </div>
  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  
  <script src="script.js"></script>
</body>
</html>