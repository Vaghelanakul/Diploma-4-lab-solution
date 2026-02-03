<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple PHP Form Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        .box {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .highlight {
            color: blue;
            font-weight: bold;
        }

        iframe {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            border: 1px dashed red;
        }
    </style>
</head>

<body>

    <h2>PHP Form Attributes Learning Tool</h2>

    <!-- 1. OUTSIDE INPUT: This input is OUTSIDE the <form> tags. 
         It works because 'form="studentForm"' matches the ID of the form below. -->
    <p><strong>Step 1: Input outside the form</strong></p>
    <label>Student ID (Outside Form): </label>
    <input type="text" name="student_id" form="studentForm" placeholder="Enter ID here">

    <hr>

    <div class="box">
        <!-- 
            - id="studentForm": Links to the outside input.
            - action="process.php": Sends data to another page. (Change to "#" to stay on this page).
            - target="_blank": Opens result in a new tab. (Try: _self, _parent, _top, or myFrame).
            - novalidate: Tells browser NOT to show "Please fill out this field" alerts.
            - autocomplete="on": Helps browser suggest previous entries.
            - accept-charset="UTF-8": Specifies the character encoding.
        -->
        <form id="studentForm" action="process.php" method="POST" target="_top" novalidate autocomplete="on"
            accept-charset="UTF-8">

            <p><strong>Step 2: Inside the form</strong></p>

            <label>Full Name (Required): </label>
            <!-- 'required' is here, but 'novalidate' in the form tag will stop the popup alert -->
            <input type="text" name="fullname" required>

            <br><br>

            <button type="submit">Submit Form</button>
        </form>
    </div>

    <hr>

    <p><strong>Step 3: Target testing</strong></p>
    <p>Currently, <code>target="_blank"</code> is used (opens in new tab).</p>
    <p>To test the <b>Custom Iframe</b> target, change the form tag to <code>target="myFrame"</code> and click submit.
    </p>

    <!-- This is the custom iframe mentioned in the definition -->
    <iframe name="myFrame" title="Custom Target Frame"></iframe>

</body>

</html>