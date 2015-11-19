<html>
  <head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
      integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
      crossorigin="anonymous">
    <style>
    body {
      background-image: url('/assets/img/dark-bg.jpg');
    }
    </style>
  </head>
  <body>
    <div class="container" style="background-color:#FFFFFF;padding:10px">
      <br/>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <img src="/assets/img/flag.png" height="100" align="left" style="margin-right:20px">
          <h2>PHP-CTF: Capture the Flag</h2>
        </div>
        <div class="col-md-4"></div>
      </div>

      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <h3 style="text-align:center">What's this all about?</h3>
          <p>
            A Capture the Flag competition is a race to see who can find the most flags first. Each of the flags is hidden
            in the application behind some kind of security vulnerability. When the vulnerability is exploited, you'll be given a flag
            value (a unique hash) to then go and claim on the "Score" page.
          </p>
          <p>
            Vulnerabilities range in difficulty with some taking little more than guessing up to requiring some good investigative work
            to locate. The event will run for a few hours during the hackathon here at php[world] with several others participating and
            all trying to be the first to locate the flags. A leaderboard will be projected so everyone can keep track of where they (or thier team)
            stands in the rankings.
          </p>
          <p>
            You'll be attacking a custom built PHP-based application that has several vulnerabilities hidden through out for you to locate.
          </p>
          <br/>
          <h3 style="text-align:center">What kind of vulnerabilities can I expect?</h3>
          <p>
            As this is a PHP-centric Capture the Flag event, all flags are related to flaws in the web application itself. No challenges involve
            the server the application lives on or any other related systems.
          </p>
          <p>
            A good place to use as a reference is the list that's provided by the OWASP group, the
            <a href="https://www.owasp.org/index.php/Top_10_2013-Top_10">OWASP Top 10</a>. This list shows some of the most common security issues
            in web applications along with examples of how they might be exploited.
          </p>

          <br/>
          <h3 style="text-align:center">I'm just a beginner! I don't know much about web security...</h3>
          <p>
            Welcome! The Capture the Flag compeition is designed to be an open event and provide participants with a way to practice and
            learn good security skills they can use to test their own applications. While there are lower point trivia questions you can
            answer to "put some points on the board" there'll also be hints provided during the event to help point you in the right direction.
          </p>
          <p>
            As there is an emphasis on learning as well as the compeition, let the organizer know and they'll be happy to help guide you in
            the right direction and show you tools that can help you understand how to locate and exploit the vulnerabilities.
          </p>
        </div>
      </div>
      <div class="col-md-3">&nbsp;</div>
    </div>

  </body>
</html>
