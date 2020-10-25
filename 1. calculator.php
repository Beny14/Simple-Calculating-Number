<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="nr1" placeholder="Number1">
      <input type="text" name="nr2" placeholder="Number2">
      <select name="aritmetic">
        <option value="Add">Adunare</option>
        <option value="Sca">Scadere</option>
        <option value="Inm">Inmultire</option>
        <option value="Imp">Impartire</option>
      </select>
      <button type="submit" name="submit">Submit</button>
    </form>

    <?php
      if (isset($_POST['submit'])) {
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];
        $aritmetic = $_POST['aritmetic'];

        switch ($aritmetic) {
          case 'Add':
            $result = $nr1 + $nr2;
            echo "Adunarea numerelor este: " . $result;
            break;
          case 'Sca':
            $result = $nr1 - $nr2;
              echo "Scaderea numerelor este: " . $result;
            break;
          case 'Inm':
            $result = $nr1 * $nr2;
              echo "Inmultirea numerelor este: " . $result;
            break;
          case 'Imp':
            $result = $nr1 / $nr2;
              echo "Impartirea numerelor este: " . $result;
            break;

          default:
              echo "It's very wrong!";
            break;
        }
      }
    ?>
  </body>
</html>
