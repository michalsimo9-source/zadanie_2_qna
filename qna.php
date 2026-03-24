<?php require_once "parts/header.php"; ?>

  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
    <?php
    include "otazky.php";

    foreach ($otazky as $otazka => $odpoved) {
        echo "<div class='qa-item' style='margin-bottom: 20px;'>";
        echo "<h3>" . $otazka . "</h3>";
        echo "<p>" . $odpoved . "</p>";
        echo "</div>";
    }
    ?>
</section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
      <section class="container">
      <div class="accordion">
        <div class="question">Otázka 1</div>
        <div class="answer">Odpoveď 1</div>
      </div>
      <div class="accordion">
        <div class="question">Otázka 2</div>
        <div class="answer">Odpoveď 2</div>
      </div>
      <div class="accordion">
        <div class="question">Otázka 3</div>
        <div class="answer">Odpoveď 3</div>
      </div>
    </section>
    </section>
  </div>
  </main>

<?php require_once "parts/footer.php"; ?>