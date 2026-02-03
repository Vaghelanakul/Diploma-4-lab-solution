<?php
// Lab 14 Practical 3: HTML form demonstrating various attributes and behaviors

// Handle form submission for demonstration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<h3>Form Submitted!</h3>';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lab 14 - Form Attributes Demo</title>
</head>

<body>
    <h2>Lab 14 - Form Attributes Demo</h2>
    <!-- Text input outside the form -->
    <label for="outsideInput">Outside Input:</label>
    <input type="text" id="outsideInput" name="outsideInput" form="demoForm">
    <br><br>
    <form id="demoForm" method="post" action="" novalidate autocomplete="on" accept-charset="UTF-8" target="_self">
        <label for="name">Name (required):</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email (required):</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>
        <button type="submit">Submit (Same Page)</button>
    </form>
    <br>
    <form id="targetForm" method="post" action="lab14_form_handler.php" target="_blank" autocomplete="off"
        accept-charset="ISO-8859-1">
        <label for="targetName">Name (required):</label>
        <input type="text" id="targetName" name="targetName" required><br><br>
        <button type="submit">Submit (New Tab)</button>
    </form>
    <br>
    <form id="iframeForm" method="post" action="lab14_form_handler.php" target="myIframe">
        <label for="iframeName">Name (required):</label>
        <input type="text" id="iframeName" name="iframeName" required><br><br>
        <button type="submit">Submit (Iframe)</button>
    </form>
    <iframe name="myIframe" style="width:400px; height:100px; border:1px solid #ccc;"></iframe>
    <p>Try submitting each form and observe the behavior for required, novalidate, autocomplete, accept-charset, and
        target attributes.</p>
</body>

</html>