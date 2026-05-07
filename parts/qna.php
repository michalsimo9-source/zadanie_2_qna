<?php 
include_once "parts/header.php"; 
// 1. Načítame triedu QnA
include_once "parts/QnA.php"; 
use otazkyodpovede\QnA;
$qna_objekt = new QnA();
$otazky_odpovede = $qna_objekt->getQnA();
?>

<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Q&A</h1>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <p><strong><em>Máte otázky? Tu nájdete odpovede generované priamo z databázy.</em></strong></p>
            </div>
        </div>
    </section>

    <section class="container">
        <?php
        // 4. Dynamicky vypíšeme otázky pomocou cyklu foreach
        if (!empty($otazky_odpovede)) {
            foreach ($otazky_odpovede as $polozka) {
                echo '<div class="accordion">';
                echo '  <div class="question">' . htmlspecialchars($polozka['otazka']) . '</div>';
                echo '  <div class="answer">' . htmlspecialchars($polozka['odpoved']) . '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>Momentálne nie sú k dispozícii žiadne otázky.</p>";
        }
        ?>
    </section>
</main>

<?php include_once "parts/footer.php"; ?>