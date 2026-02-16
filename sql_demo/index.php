<?php
/**
 * SQL Injection Educational Demo - Index Page
 * For teaching purposes only!
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Demo - Educational Resource</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            color: white;
            padding: 30px 0;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            color: #667eea;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .demo-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin: 30px 0;
        }

        .demo-btn {
            display: inline-block;
            padding: 20px 40px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
            min-width: 200px;
            text-align: center;
        }

        .demo-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .btn-setup {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
        }

        .btn-vulnerable {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .btn-secure {
            background: linear-gradient(135deg, #27ae60, #219a52);
            color: white;
        }

        .steps {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
        }

        .step {
            flex: 1;
            min-width: 200px;
            max-width: 280px;
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #667eea;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            font-weight: bold;
            margin: 0 auto 15px;
        }

        .step h3 {
            color: #333;
            margin: 10px 0;
        }

        .step p {
            color: #666;
            font-size: 0.95em;
        }

        .info-section {
            background: #e8f4fc;
            border-left: 5px solid #3498db;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 10px 10px 0;
        }

        .warning-section {
            background: #fdf2e9;
            border-left: 5px solid #e67e22;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 10px 10px 0;
        }

        .attack-list {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .attack-item {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #e74c3c;
        }

        .attack-item h4 {
            color: #e74c3c;
            margin: 0 0 10px 0;
        }

        .attack-item code {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }

        .prevention-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .prevention-item {
            background: #e8f6f3;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #27ae60;
        }

        .prevention-item h4 {
            color: #27ae60;
            margin: 0 0 10px 0;
        }

        footer {
            text-align: center;
            color: white;
            padding: 20px;
            opacity: 0.8;
        }

        @media (max-width: 600px) {
            .demo-buttons {
                flex-direction: column;
                align-items: center;
            }

            .demo-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>🔓 SQL Injection Demo</h1>
            <p>Learn about SQL injection attacks and how to prevent them</p>
        </div>

        <div class="card">
            <h2>🚀 Getting Started</h2>

            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Setup Database</h3>
                    <p>First, run the database setup to create tables and sample data</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Try Vulnerable Login</h3>
                    <p>Test SQL injection attacks on the vulnerable login form</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Try Secure Login</h3>
                    <p>See how the same attacks fail on a properly secured form</p>
                </div>
            </div>

            <div class="demo-buttons">
                <a href="db_setup.php" class="demo-btn btn-setup">⚙️ Setup Database</a>
                <a href="vulnerable_login.php" class="demo-btn btn-vulnerable">🔓 Vulnerable Login</a>
                <a href="secure_login.php" class="demo-btn btn-secure">🔐 Secure Login</a>
            </div>
        </div>

        <div class="card">
            <h2>📖 What is SQL Injection?</h2>

            <div class="info-section">
                <p><strong>SQL Injection</strong> is a code injection technique that exploits security vulnerabilities
                    in an application's database layer. It occurs when user input is incorrectly filtered or not
                    strongly typed, allowing an attacker to modify or execute arbitrary SQL commands.</p>
            </div>

            <h3>How It Works:</h3>
            <p>When a web application uses string concatenation to build SQL queries from user input, attackers can
                inject malicious SQL code:</p>

            <div
                style="background: #2c3e50; color: #ecf0f1; padding: 20px; border-radius: 8px; font-family: monospace; overflow-x: auto;">
                <p style="color: #95a5a6;">// Vulnerable code - NEVER DO THIS!</p>
                <p>$sql = "SELECT * FROM users WHERE username='<span style="color: #e74c3c;">$username</span>' AND
                    password='<span style="color: #e74c3c;">$password</span>'";</p>
                <br>
                <p style="color: #95a5a6;">// If user enters: ' OR '1'='1</p>
                <p style="color: #95a5a6;">// The query becomes:</p>
                <p>SELECT * FROM users WHERE username='<span style="color: #e74c3c;">' OR '1'='1</span>' AND
                    password='<span style="color: #e74c3c;">' OR '1'='1</span>'</p>
                <br>
                <p style="color: #27ae60;">// This always returns TRUE, bypassing authentication!</p>
            </div>
        </div>

        <div class="card">
            <h2>🎯 Common SQL Injection Attacks</h2>

            <div class="attack-list">
                <div class="attack-item">
                    <h4>1. Authentication Bypass</h4>
                    <p>Input: <code>' OR '1'='1</code> or <code>' OR 1=1--</code></p>
                    <p>Makes the WHERE clause always true, bypassing login checks.</p>
                </div>

                <div class="attack-item">
                    <h4>2. Comment Injection</h4>
                    <p>Input: <code>admin'--</code> or <code>admin'/*</code></p>
                    <p>Comments out the rest of the query, ignoring password verification.</p>
                </div>

                <div class="attack-item">
                    <h4>3. Union-Based Attack</h4>
                    <p>Input: <code>' UNION SELECT * FROM users--</code></p>
                    <p>Combines results from another query to extract data from other tables.</p>
                </div>

                <div class="attack-item">
                    <h4>4. Batch Query Injection</h4>
                    <p>Input: <code>'; DROP TABLE users;--</code></p>
                    <p>Executes additional SQL commands (if multiple queries are allowed).</p>
                </div>

                <div class="attack-item">
                    <h4>5. Time-Based Blind Injection</h4>
                    <p>Input: <code>' OR SLEEP(5)--</code></p>
                    <p>Used to extract data by measuring response time delays.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <h2>🛡️ How to Prevent SQL Injection</h2>

            <div class="prevention-list">
                <div class="prevention-item">
                    <h4>✅ Use Prepared Statements</h4>
                    <p>Parameterized queries separate SQL code from data, making injection impossible.</p>
                </div>

                <div class="prevention-item">
                    <h4>✅ Use ORM/Query Builders</h4>
                    <p>Object-Relational Mappers like Eloquent, Doctrine automatically use prepared statements.</p>
                </div>

                <div class="prevention-item">
                    <h4>✅ Input Validation</h4>
                    <p>Validate and sanitize all user inputs. Use whitelist validation where possible.</p>
                </div>

                <div class="prevention-item">
                    <h4>✅ Escape Special Characters</h4>
                    <p>Use mysqli_real_escape_string() or equivalent (but prepared statements are better!).</p>
                </div>

                <div class="prevention-item">
                    <h4>✅ Least Privilege Principle</h4>
                    <p>Database users should have minimum required permissions.</p>
                </div>

                <div class="prevention-item">
                    <h4>✅ Web Application Firewall</h4>
                    <p>WAFs can detect and block common SQL injection patterns.</p>
                </div>
            </div>

            <div class="warning-section">
                <h4>⚠️ Important Note</h4>
                <p>These demonstrations are for <strong>educational purposes only</strong>. Never attempt SQL injection
                    attacks on systems you don't own or have explicit permission to test. Unauthorized hacking is
                    illegal and unethical.</p>
            </div>
        </div>

        <div class="card">
            <h2>📚 Learning Objectives</h2>
            <ul style="line-height: 2;">
                <li>Understand what SQL injection is and why it's dangerous</li>
                <li>Learn to identify vulnerable code patterns</li>
                <li>Practice SQL injection techniques in a safe environment</li>
                <li>Implement proper defenses using prepared statements</li>
                <li>Compare vulnerable vs. secure code implementations</li>
            </ul>
        </div>

        <footer>
            <p>🎓 Educational Resource for Web Security | Always Code Responsibly</p>
        </footer>
    </div>
</body>

</html>