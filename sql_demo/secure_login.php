<?php
/**
 * SECURE LOGIN PAGE - Uses Prepared Statements
 * This demonstrates how to PREVENT SQL injection attacks
 * This is the CORRECT way to handle user input in database queries!
 */

$host = "localhost";
$username = "root";
$password = "";
$database = "sql_injection_demo";

$message = "";
$query_info = "";
$results = [];
$input_received = [];

// Connect to database (Procedural Style)
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>Please run <a href='db_setup.php'>db_setup.php</a> first!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $input_received = [
        'username' => $user,
        'password' => $pass
    ];

    // SECURE CODE - Using Prepared Statements with Parameterized Queries
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";

    // Prepare the statement (Procedural Style)
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters (s = string, i = integer, d = double, b = blob)
        mysqli_stmt_bind_param($stmt, "ss", $user, $pass);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get results
        $result = mysqli_stmt_get_result($stmt);

        $query_info = [
            'prepared_query' => $sql,
            'bound_params' => ['username' => $user, 'password' => $pass],
            'escaped_username' => mysqli_real_escape_string($conn, $user),
            'escaped_password' => mysqli_real_escape_string($conn, $pass)
        ];

        if (mysqli_num_rows($result) > 0) {
            $message = "<div class='success'>✅ Login Successful!</div>";
            while ($row = mysqli_fetch_assoc($result)) {
                $results[] = $row;
            }
        } else {
            $message = "<div class='error'>❌ Login Failed! Invalid username or password</div>";
        }

        mysqli_stmt_close($stmt);
    } else {
        $message = "<div class='error'>Statement preparation failed: " . mysqli_error($conn) . "</div>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login - SQL Injection Demo</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .secure-banner {
            background: #27ae60;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            border: 2px solid white;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #27ae60;
            text-align: center;
        }

        h2 {
            color: #27ae60;
            border-bottom: 2px solid #27ae60;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus {
            border-color: #27ae60;
            outline: none;
        }

        button {
            background: #27ae60;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #219a52;
        }

        .success {
            background: #27ae60;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .error {
            background: #e74c3c;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .query-box {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            font-family: monospace;
            overflow-x: auto;
            margin: 10px 0;
        }

        .info-box {
            background: #e8f6f3;
            border-left: 4px solid #27ae60;
            padding: 15px;
            margin: 10px 0;
            border-radius: 0 5px 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #27ae60;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        code {
            background: #ecf0f1;
            padding: 2px 6px;
            border-radius: 3px;
            color: #27ae60;
        }

        .comparison-table {
            width: 100%;
            margin-top: 20px;
        }

        .comparison-table th {
            background: #34495e;
        }

        .vulnerable {
            color: #e74c3c;
        }

        .secure {
            color: #27ae60;
        }

        .code-block {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-radius: 5px;
            overflow-x: auto;
            margin: 10px 0;
        }

        .code-block pre {
            margin: 0;
            white-space: pre-wrap;
        }

        .code-block .comment {
            color: #95a5a6;
        }

        .code-block .keyword {
            color: #e74c3c;
        }

        .code-block .string {
            color: #2ecc71;
        }

        .code-block .variable {
            color: #3498db;
        }

        .nav-links {
            text-align: center;
            margin-top: 20px;
        }

        .nav-links a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="secure-banner">
            🔒 SECURE LOGIN - Uses Prepared Statements to Prevent SQL Injection 🔒
        </div>

        <div class="card">
            <h1>🔐 Secure Login Form</h1>
            <p style="text-align: center; color: #666;">This login form uses prepared statements - SQL injection attacks
                will NOT work!</p>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Try SQL injection here..."
                        value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" placeholder="It won't work!"
                        value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

        <?php if (!empty($query_info)): ?>
            <div class="card">
                <h2>🛡️ How Your Input Was Handled</h2>

                <?php echo $message; ?>

                <div class="info-box">
                    <h4>1. Prepared Statement Template:</h4>
                    <div class="query-box"><?php echo htmlspecialchars($query_info['prepared_query']); ?></div>
                    <p><em>The <code>?</code> placeholders keep user input separate from SQL code!</em></p>
                </div>

                <div class="info-box">
                    <h4>2. Your Input (Bound as Parameters):</h4>
                    <table>
                        <tr>
                            <th>Parameter</th>
                            <th>Raw Input</th>
                            <th>How Database Sees It</th>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><code><?php echo htmlspecialchars($input_received['username']); ?></code></td>
                            <td>Treated as literal string data, NOT SQL code</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><code><?php echo htmlspecialchars($input_received['password']); ?></code></td>
                            <td>Treated as literal string data, NOT SQL code</td>
                        </tr>
                    </table>
                </div>

                <?php if (!empty($results)): ?>
                    <h3>User Data Retrieved:</h3>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                        <?php foreach ($results as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['username']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['role']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <h2>📚 Why Prepared Statements Work</h2>

            <h3 class="vulnerable">❌ Vulnerable Code (String Concatenation)</h3>
            <div class="code-block">
                <pre><span class="comment">// DANGEROUS - User input becomes part of the SQL query!</span>
<span class="variable">$user</span> = <span class="variable">$_POST</span>[<span class="string">'username'</span>];
<span class="variable">$pass</span> = <span class="variable">$_POST</span>[<span class="string">'password'</span>];

<span class="variable">$sql</span> = <span class="string">"SELECT * FROM users WHERE username='<span class="variable">$user</span>' AND password='<span class="variable">$pass</span>'"</span>;
<span class="variable">$result</span> = <span class="variable">$conn</span>-><span class="keyword">query</span>(<span class="variable">$sql</span>);</pre>
            </div>

            <h3 class="secure">✅ Secure Code (Prepared Statements)</h3>
            <div class="code-block">
                <pre><span class="comment">// SAFE - User input is bound separately from SQL structure!</span>
<span class="variable">$user</span> = <span class="variable">$_POST</span>[<span class="string">'username'</span>];
<span class="variable">$pass</span> = <span class="variable">$_POST</span>[<span class="string">'password'</span>];

<span class="comment">// Step 1: Prepare the query with placeholders</span>
<span class="variable">$sql</span> = <span class="string">"SELECT * FROM users WHERE username = ? AND password = ?"</span>;
<span class="variable">$stmt</span> = <span class="variable">$conn</span>-><span class="keyword">prepare</span>(<span class="variable">$sql</span>);

<span class="comment">// Step 2: Bind the parameters (s = string)</span>
<span class="variable">$stmt</span>-><span class="keyword">bind_param</span>(<span class="string">"ss"</span>, <span class="variable">$user</span>, <span class="variable">$pass</span>);

<span class="comment">// Step 3: Execute</span>
<span class="variable">$stmt</span>-><span class="keyword">execute</span>();

<span class="comment">// Step 4: Get results</span>
<span class="variable">$result</span> = <span class="variable">$stmt</span>-><span class="keyword">get_result</span>();</pre>
            </div>

            <h3>Key Differences:</h3>
            <table class="comparison-table">
                <tr>
                    <th>Aspect</th>
                    <th class="vulnerable">Vulnerable</th>
                    <th class="secure">Secure</th>
                </tr>
                <tr>
                    <td>How input is handled</td>
                    <td class="vulnerable">Directly in SQL string</td>
                    <td class="secure">Bound as parameters</td>
                </tr>
                <tr>
                    <td>Special characters</td>
                    <td class="vulnerable">Interpreted as SQL</td>
                    <td class="secure">Treated as literal data</td>
                </tr>
                <tr>
                    <td>Input <code>' OR '1'='1</code></td>
                    <td class="vulnerable">Becomes part of SQL logic</td>
                    <td class="secure">Searched as literal text</td>
                </tr>
            </table>
        </div>

        <div class="nav-links">
            <a href="index.php">← Home</a>
            <a href="vulnerable_login.php">Vulnerable Login</a>
            <a href="db_setup.php">Reset Database</a>
        </div>
    </div>
</body>

</html>