<?php
include '../php_helper_pages/support_pages_head.php';
?>
<link rel="stylesheet" href="../style/progress.css">
<title>Progress</title>
</head>

<body>
  <main>
    <div class="header">
      <div class="logo">Progress</div>
      <div class="menu">
        <a href="../index.php" class="link">
          <div class="title">Home</div>
          <div class="bar"></div>
        </a>
        <a href="about.php" class="link">
          <div class="title">About</div>
          <div class="bar"></div>
        </a>
        <a href="progress.php" class="link">
          <div class="title">Progress</div>
          <div class="bar"></div>
        </a>
        <a href="contact.php" class="link">
          <div class="title">Contact</div>
          <div class="bar"></div>
        </a>
      </div>
    </div>
    <div class="progressbar">Progress ...</div>
    <div class="section group">
      <div class="col span_1of3"><img src="../media/fingersincircle.jpg" alt="codesnippet" class="codesnippet"></div>
      <div class="col span_1of3">Donut Service - OKJ szakdolgozat (2020)</div>
      <div class="col span_1of3">
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">More info</button>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Szakdolgozat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                <h1>A szakdolgozat bemutatasa:</h1>
                Egy egyszeru, a szakdolgozat kovetelmenyeinek megfelelo weboldalt hoztam letre.
                A fo lenyege a felhasznalo kezeles ezen belul a felhasznaloi hierarchia felepitesenek bemutatasa.
                Sikerult elerni, hogy az oldalnak kulon adminisztracios felulete van adminok szamara a felhasznalok nyilvantartasara.
                Ki/be jelentkezes mukodo kepes, ha a felhasznalo regisztral akkor a jelszot sem az adminok se senki nem tudja megnezni mivel a regisztracio pillanataban md5-el titkositva kerul az adatbazisba a jelszo.
                Ezen a szakdolgozat temaja a fank rendeles, ezert is lett az a neve, hogy donut service.
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="redr()">Source code</button>
                <script>
                  function redr(){
                    window.open('https://github.com/defalt1337/szakdogarepo','_blank');
                  }
                </script>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section group">
      <div class="col span_1of3"><img src="../media/phplg.png" alt="codesnippet" class="codesnippet"></div>
      <div class="col span_1of3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum saepe molestiae laborum, soluta possimus animi officia maiores accusantium earum minus nihil, sequi vel iure cupiditate vitae nobis ullam rem officiis.</div>
      <div class="col span_1of3">
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">More info</button>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Project example</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                  Valami a programrol
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section group">
      <div class="col span_1of3"><img src="../media/jslog.png" alt="codesnippet" class="codesnippet"></div>
      <div class="col span_1of3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam perferendis animi molestias sed adipisci asperiores, iusto voluptate beatae atque aliquid facilis consequatur nostrum eum commodi quasi quas, a, neque nemo?</div>
      <div class="col span_1of3">
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">More info</button>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Project example</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                  Valami a programrol
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section group">
      <div class="col span_1of3"><img src="../media/htmllog.png" alt="codesnippet" class="codesnippet"></div>
      <div class="col span_1of3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum similique, laborum ut fuga quia excepturi, praesentium mollitia commodi a qui maiores pariatur incidunt tempore impedit! Distinctio quibusdam ducimus ad.</div>
      <div class="col span_1of3">
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">More info</button>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Project example</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                  Valami a programrol
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-right py-3">All rights reserved</div>
  </main>
</body>

</html>