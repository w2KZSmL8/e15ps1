<!DOCTYPE html>
<html lang='en'>

<head>
    <title>String Processor - e15 Project 1</title>
    <meta charset='utf-8'>
    <!-- <link href='css/styles.css' rel='stylesheet'> -->
</head>

<body>
   <div class='container'>
      <h1>String Processor - e15 Project 1</h1>
      <h2>Palindrome Checker</h2>
         <form method='GET' action='process.php'>
            <label for='potentialPalindrome'>Enter a string</label>
            <input type='text' id='potentialPalindrome' name='potentialPalindrome'>
            <button type='submit'>Process</button>
        </form>
      </br>

      </br>
        <h2>Vowel Counter</h2>
           <form method='GET' action='process.php'>
              <label for='stringtoCount'>Enter a string</label>
              <input type='text' id='stringtoCount' name='stringtoCount'>
              <button type='submit'>Process</button>
          </form>
        </br>

    </div>
</body>

</html>
