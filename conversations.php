<!--
 Page affichant l'ensemble des conversations de l'utilisateur
 Chaque conversation sera cliquable et amenera vers ladite conversation

 -->
 <!DOCTYPE html>
<html lang="fr">
  <head>
  <title>Page de conversation</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>

    body{
      height:100%;
      width:50%;
      overflow:hidden;
    }

    section,article{
      padding: 5px;
      position: relative;
    }

    .contacts{
      border: 1px solid #e0e0e0;
      height:50em;
      width:20%;
      overflow-x: auto;
    }

    .conversation-content{
      width:100%;
      height:100%;
      overflow-x:hidden;
      overflow-y: auto;
    }

    li.conversation{
      display:flex;
      flex-direction: row;
    }

    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

    a{
      text-decoration: none;
      color:black;

    }

    li:hover{
      background:#ddd;
      text-decoration: none;
    }

    .textbox{
      height:80px;
      width: auto;
      padding:15px;
      border: 1px solid #e0e0e0;
    }

    ul{list-style-type:none}


    .conv-icon{
      height:50px;
      width:50px;
      padding: 5px;
    }

    .container{
      display:flex;
      flex-direction: row;
    }

    .conversation{
      height:100%;
      width:100%;

    };

    .sender{
      position:fixed;
      right:0px;
    }

  .textsend{

    width:70%;
    height:45px;
    border:1px solid #e0e0e0;

    }
  </style>
  </head>
  <body class="conversation container">
    <section class="contacts">
      <h2>Conversations</h2>
      <article>
        <h3 style="font-size:17px;">Liste de contacts</h3>
        <div id="tabs" style="overflow:auto; height:500px;">
          <ul>
            <li><a href="#tabs-1"><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 1</p></a></li>
            <li><a href="#tabs-2"><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 2</p></a></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 3</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 4</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 5</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 6</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 7</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 1</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 1</p></li>
            <li><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>Pseudo 1</p></li>
          </ul>
        </div>
      </article>
    </section>
    <section id="tabs-1" class="conversation-content">
      <h2 style="display:none;">blabla</h2>
      <div style="height: 500px; overflow:auto;">
        <article>
          <h2 style="display:none;">blabla</h2>
          <div>DATE</div>
          <div class="textbox">Ceci est un message court.</div>
          <div><img class="conv-icon" src="./images/img_24787.png" alt="icon"><p>pseudo</p></div>
        </article>
        <article class="sender">
          <h2 style="display:none;">titre qu'est là qu'a titre indicatif</h2>
          <div>DATE</div>
          <div class="textbox">Ceci est un message long. Ceci est un message long. Ceci est un message long. Ceci est un message long. Ceci est un message long.</div>
          <div><img class="conv-icon sender" src="./images/img_24787.png" alt="icon"><p>pseudo</p></div>
        </article>
        <article class="sender">
          <h2 style="display:none;">titre qu'est là que pour être validé par w3schools</h2>
          <div>DATE</div>
          <div class="textbox">TEXTBOX</div>
          <div><img class="conv-icon sender" src="./images/img_24787.png" alt="icon"><p>pseudo</p></div>
        </article>
      </div>
      <article class="container">
        <h2 style="display:none;">blabla</h2>
        <input type="text" id="message_sent" name="message" class="textsend">
        <input type="button" class="button" value="Valider">
      </article>
    </section>
    <!--<section id="tabs-2" style="display:none;" class="conversation-content">
      <h2 style="display:none;">blabla</h2>
      <article>
        <div>DATE</div>
        <div class="textbox"> TAB2</div>
        <div><img class="conv-icon" src="./images/img_24787.png" alt="icon"></div>
      </article>
      <article>
        <div>DATE</div>
        <div class="textbox">TEXTBOX</div>
        <div><img class="conv-icon" src="./images/img_24787.png" alt="icon"></div>
      </article>
    </section>-->
  </body>
</html>