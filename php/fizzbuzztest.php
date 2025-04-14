<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Christina Mekheil's Capricious Mongoose ✧ WEB250 ✧ Fizz Buzz</title>
  <link rel="stylesheet" href="./styles/default.css">
  <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body>
  <div data-include="../components/header.html"></div>
  <main>
    <h2 id="greeting">Fizz Buzz</h2>

    <form id="fizzform" name="fizzbuzz" method="POST" action="">
      <fieldset>
        <legend>Fizz Buzz Bang Everything</legend>

        <label>First Name: <input type="text" name="firstname" value="Kitty" required></label><br>
        <label>Middle Initial: <input type="text" name="middleinitial" maxlength="1"></label><br>
        <label>Last Name: <input type="text" name="lastname" value="Power" required></label><br><br>

        <label>Word 1: <input type="text" name="word1" value="Hiss"></label><br>
        <label>Word 2: <input type="text" name="word2" value="Pounce"></label><br>
        <label>Word 3: <input type="text" name="word3" value="Zoom"></label><br><br>

        <label>Divisor 1: <input type="number" name="div1" value="3"></label><br>
        <label>Divisor 2: <input type="number" name="div2" value="5"></label><br>
        <label>Divisor 3: <input type="number" name="div3" value="7"></label><br><br>

        <label>Default Word: <input type="text" name="defaultword" value="Meow"></label><br>
        <label>Count: <input type="number" name="count" value="111"></label><br><br>

        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
      </fieldset>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])): ?>
      <?php
        $firstName = trim($_POST["firstname"]);
        $middleInitial = trim($_POST["middleinitial"]);
        $lastName = trim($_POST["lastname"]);
        $word1 = trim($_POST["word1"]);
        $word2 = trim($_POST["word2"]);
        $word3 = trim($_POST["word3"]);
        $div1 = (int)$_POST["div1"];
        $div2 = (int)$_POST["div2"];
        $div3 = (int)$_POST["div3"];
        $defaultWord = trim($_POST["defaultword"]);
        $count = (int)$_POST["count"];

        if (!$firstName || !$lastName) {
          echo "<p style='color: red;'>Please enter both your first and last names.</p>";
        } else {
          $greeting = "Welcome to Fizz Buzz, $firstName ";
          if (!empty($middleInitial)) $greeting .= $middleInitial . ". ";
          $greeting .= "$lastName!";
          echo "<h2>$greeting</h2>";
          echo "<ol id='fizzbuzzlist2'>";

          for ($i = 1; $i <= $count; $i++) {
            $text = "";

            if ($i % $div1 === 0) $text .= $word1;
            if ($i % $div2 === 0) $text .= $word2;
            if ($i % $div3 === 0) $text .= $word3;

            if (empty($text)) $text = $defaultWord;

            echo "<li>" . htmlspecialchars(trim($text)) . "</li>";
          }

          echo "</ol>";
        }
      ?>
    <?php endif; ?>
  </main>
  <div data-include="../components/footer.html"></div>
  <script src="./scripts/HTMLInclude.min.js"></script>
</body>
</html>
