<?php
/**
 * VULNERABLE LOGIN PAGE - FOR EDUCATIONAL PURPOSES ONLY!
 * This demonstrates how SQL injection attacks work
 * NEVER use this code in production!
 */

$host = "localhost";
$username = "root";
$password = "";
$database = "sql_injection_demo";

$message = "";
$query_executed = "";
$results = [];

// Connect to database (Procedural Style)
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>Please run <a href='db_setup.php'>db_setup.php</a> first!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // VULNERABLE CODE - Direct string concatenation (DO NOT USE IN REAL APPLICATIONS!)
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // This is the vulnerable query - user input is directly concatenated
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

    $query_executed = $sql;

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $message = "<div class='success'>Login Successful! Found " . mysqli_num_rows($result) . " user(s)</div>";
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    } else {
        $message = "<div class='error'>Login Failed! Invalid username or password</div>";
        if (mysqli_error($conn)) {
            $message .= "<div class='error'>SQL Error: " . mysqli_error($conn) . "</div>";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable Login - SQL Injection Demo</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #ff6b6b, #ee5a5a);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .warning-banner {
            background: #ffcc00;
            color: #333;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #c0392b;
            text-align: center;
        }

        h2 {
            color: #e74c3c;
            border-bottom: 2px solid #e74c3c;
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
            border-color: #e74c3c;
            outline: none;
        }

        button {
            background: #e74c3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #c0392b;
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
            background: #e74c3c;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .attack-examples {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .attack-examples h3 {
            color: #c0392b;
            margin-top: 0;
        }

        .attack-example {
            background: #fff;
            border-left: 4px solid #e74c3c;
            padding: 10px 15px;
            margin: 10px 0;
        }

        code {
            background: #ecf0f1;
            padding: 2px 6px;
            border-radius: 3px;
            color: #c0392b;
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
        <div class="warning-banner">
            ⚠️ WARNING: This is a VULNERABLE login page for educational purposes only! ⚠️
        </div>

        <div class="card">
            <h1>🔓 Vulnerable Login Form</h1>
            <p style="text-align: center; color: #666;">This login form is intentionally vulnerable to SQL injection
                attacks</p>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter username"
                        value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" placeholder="Enter password"
                        value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

        <?php if ($query_executed): ?>
            <div class="card">
                <h2>📝 Query Executed</h2>
                <div class="query-box"><?php echo htmlspecialchars($query_executed); ?></div>

                <?php echo $message; ?>

                <?php if (!empty($results)): ?>
                    <h3>User Data Retrieved:</h3>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                        <?php foreach ($results as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['username']); ?></td>
                                <td><?php echo htmlspecialchars($row['password']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['role']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <h2>🎯 Try These SQL Injection Attacks</h2>

            <div class="attack-examples">
                <div class="attack-example">
                    <h4>1. Bypass Authentication (Classic)</h4>
                    <p><strong>Username:</strong> <code>' OR '1'='1</code></p>
                    <p><strong>Password:</strong> <code>' OR '1'='1</code></p>
                    <p><em>This makes the query always return true, bypassing login.</em></p>
                </div>

                <div class="attack-example">
                    <h4>2. Login as Admin (Comment Injection)</h4>
                    <p><strong>Username:</strong> <code>admin'--</code></p>
                    <p><strong>Password:</strong> <code>anything</code></p>
                    <p><em>The -- comments out the password check!</em></p>
                </div>

                <div class="attack-example">
                    <h4>3. Retrieve All Users</h4>
                    <p><strong>Username:</strong> <code>' OR 1=1--</code></p>
                    <p><strong>Password:</strong> <code>anything</code></p>
                    <p><em>Returns all users in the database!</em></p>
                </div>

                <div class="attack-example">
                    <h4>4. Union-Based Attack</h4>
                    <p><strong>Username:</strong> <code>' UNION SELECT 1,2,3,4,5,6--</code></p>
                    <p><strong>Password:</strong> <code>anything</code></p>
                    <p><em>Can be used to extract data from other tables.</em></p>
                </div>
            </div>
        </div>

        <div class="nav-links">
            <a href="index.php">← Home</a>
            <a href="secure_login.php">Secure Login →</a>
            <a href="db_setup.php">Reset Database</a>
        </div>
    </div>
</body>

</html>