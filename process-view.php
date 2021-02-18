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
      <h2>Results</h2>
      <h3>String</h3>
      <p><?=$_SESSION['Input'] ?></p>
      <h3>Is this a palindrome?</h3>
      <p><?=$_SESSION['Palindrome'] ?></p>
      <h3>Number of vowels:</h3>
      <p><?=$_SESSION['Vowels'] ?></p>
      <h3>Letter shift:</h3>
      <p><?=$_SESSION['Shifted'] ?></p>
      <a href="index.php">Enter Another String!</a>     
    </div>
    
</body>

</html>
