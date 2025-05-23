<form id="fizzform" name="fizzbuzz" method="POST">
      <fieldset>
        <legend>Fizz Buzz Bang Everything</legend>

      <div class="form-row">
        <label>First Name: <input type="text" name="firstname" value="Kitty" required></label>
        <label>Middle Initial: <input type="text" name="middleinitial" maxlength="1"></label>
        <label>Last Name: <input type="text" name="lastname" value="Power" required></label>
      </div>

      <div class ="form-row">
        <label>Word 1: <input type="text" name="word1" value="Hiss"></label>
        <label>Word 2: <input type="text" name="word2" value="Pounce"></label>
        <label>Word 3: <input type="text" name="word3" value="Zoom"></label>
      </div>

      <div class ="form-row">
        <label>Divisor 1: <input type="number" name="div1" value="3"></label>
        <label>Divisor 2: <input type="number" name="div2" value="5"></label>
        <label>Divisor 3: <input type="number" name="div3" value="7"></label>
      </div>
    
      <div class="form-row center-row">
        <label>Default Word: <input type="text" name="defaultword" value="Meow"></label>
        <label>Count: <input type="number" name="count" value="111"></label>
      </div>

    <div class="buttons">
        <button type="submit" name="submit">Submit</button>
        <?php $currentPage = $_GET["p"] ?? "fizz_buzz"; ?>
        <button type="button" onclick="window.location.href='?p=<?= $currentPage ?>'">Reset</button>
    </div>
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
            $words = [];

            if ($i % $div1 === 0) $words[] = $word1;
            if ($i % $div2 === 0) $words[] = $word2;
            if ($i % $div3 === 0) $words[] = $word3;
        
            $text = count($words) > 0 ? implode(" ", $words) : $defaultWord;
        
            echo "<li>" . htmlspecialchars($text) . "</li>";
          }
          
          echo "</ol>";

          
        }
        
      ?>
    <?php endif; ?>
