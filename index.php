<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="examples.css">
  <title>CSS Scratch</title>
</head>

<body>
  <div class="header-image">
    <div class="header-text">
      <h1>A Collection of my CSS Fiddles</h1>
      <p>Basically I do these as I figure things out for other projects.</p>
    </div>
  </div>

  <div class="container">
    <h2>Check Some of Them Out Below</h2>
  </div>
    <!-- grid time -->
    <div class="example-container">
      <div class="row">
        <div class="column">
          <pre><code><? $str = <<<'EOD'
            <div class="card-black-bottom">
              <div class="card-black-bottom-img">
                <img src="./example-assets/digital.jpg" alt="">
              </div>
              <h2>Card Title</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing 
              elit. Ad omnis sunt aliquam unde dicta aspernatur
              fugiat deleniti. Temporibus deleniti, labore 
              asperiores voluptate quasi, sunt eum mollitia ducimus, 
              vel rerum nesciunt.
              </p>
            </div>
          EOD;
            $str = htmlspecialchars($str, ENT_HTML5, ENT_NOQUOTES);
            $str = str_replace("&amp;hellip;", "&hellip;", $str);
            echo($str);?>
          </code></pre>
        </div>
        <div class="column">

          <pre>
            .card-black-bottom {
              width: 500px;
              height: auto;
              background-color: black;
              border-radius: 5px;
              color: white;
              padding-bottom: 1em;
            }
            
            .card-black-bottom-img {
              height: 200px;
              overflow: hidden;
            }
            
            .card-black-bottom-img img {
              width: 100%;
            }
            
            .card-black-bottom h2, p {
              margin-left: 30px;
              margin-right: 30px;
            }
          </pre>

        </div>
        <div class="column">
          <div class="card-black-bottom">
            <div class="card-black-bottom-img">
              <img src="./example-assets/digital.jpg" alt="">
            </div>
            <h2>Card Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad omnis sunt aliquam unde dicta aspernatur
              fugiat
              deleniti. Temporibus deleniti, labore asperiores voluptate quasi, sunt eum mollitia ducimus, vel rerum
              nesciunt.
            </p>
          </div>
        </div>

      </div>
    </div>

    <div class="example-container">

      <div class="example">
        <p><strong>card-person-information</strong></p>
        <div class="team-card">
          <img src="https://www.tonysulfaro.dev/MI-449-html-semantic-elements/assets/tony.jpeg"
            alt="tony profile picture">
          <p><strong>Tony Sulfaro</strong></p>
          <p><i>Co-Founder</i></p>
          <p>I have been fishing on the bay for many years. Ice fishing is my specialty.</p>
        </div>
      </div>

      <div class="example">
        <p><strong>Card Transparent Overlay</strong></p>
        <div class="card-transparent-overlay">
          <div class="card-transparent-overlay-gradient">
            <div class="card-transparent-overlay-content">
              <h2>Lorem ipsum</h2>
              <p>consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
            </div>
          </div>
          <img src="./example-assets/digital.jpg" alt="digital picture">
        </div>
      </div>

      <div>
        <p><strong>Material Footer</strong></p>
        <footer class="material-footer">
          <div class="footer-social material-footer-column">
            <h1>Social Links</h1>
            <p><a href="https://github.com/tonysulfaro" target="blank">Github</a></p>
            <p><a href="https://github.com/tonysulfaro" target="blank">LinkedIn</a></p>
            <p><a href="https://github.com/tonysulfaro" target="blank">DevPost</a></p>
          </div>
          <div class="footer-about material-footer-column">
            <h1>About</h1>
            <p><a href="https://github.com/tonysulfaro/tonysulfaro.github.io/blob/master/LICENSE"
                target="blank">License</a>
            </p>
            <p><a href="https://github.com/tonysulfaro/tonysulfaro.github.io" target="blank">Source</a></p>
          </div>
        </footer>
      </div>

    </div>
  
</body>

</html>
