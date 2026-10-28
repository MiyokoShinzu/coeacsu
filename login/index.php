<?php
session_start();
require_once "../src/connection.php";

$login_error = '';
$username_value = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_value = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username_value === '' || $password === '') {
        $login_error = 'Please enter both your username and password.';
    } else {
        // Use a prepared statement instead of building SQL from user input.
        $stmt = $mysqli->prepare('SELECT username, password, department FROM users WHERE username = ? LIMIT 1');

        if ($stmt) {
            $stmt->bind_param('s', $username_value);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result ? $result->fetch_assoc() : null;
            $stmt->close();

            if ($row && password_verify($password, $row['password'])) {
                // Prevent session fixation after successful authentication.
                session_regenerate_id(true);
                $_SESSION['username'] = $row['username'];
                $_SESSION['department'] = $row['department'];

                header('Location: ../admin');
                exit;
            }

            // Use a generic message so the page does not reveal whether a username exists.
            $login_error = 'Invalid username or password.';
        } else {
            error_log('Login query preparation failed: ' . $mysqli->error);
            $login_error = 'Unable to log in right now. Please try again later.';
        }
    }
}

function e($value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ff4c01">
    <meta name="description" content="Sign in to the College of Engineering and Architecture portal.">
    <title>Sign In | COEA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --coea-orange: #ff4c01;
            --coea-orange-light: #fe904d;
            --coea-ink: #242424;
            --coea-muted: #707070;
            --coea-border: #f0e5df;
            --coea-soft: #fff7f2;
            --coea-gradient: linear-gradient(120deg, #ff4c01 0%, #fe904d 100%);
            --coea-shadow: 0 24px 70px rgba(111, 52, 22, .13);
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            color: var(--coea-ink);
            background: radial-gradient(circle at 10% 10%, rgba(254, 144, 77, .12), transparent 30%),
                radial-gradient(circle at 95% 90%, rgba(255, 76, 1, .09), transparent 28%), #fff;
        }

        .login-shell {
            min-height: 100vh;
            display: grid;
            grid-template-columns: minmax(0, 1.03fr) minmax(360px, .97fr);
        }

        .brand-panel {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: clamp(28px, 5vw, 68px);
            overflow: hidden;
            color: #fff;
            background: var(--coea-gradient);
            isolation: isolate;
        }

        .brand-panel::before,
        .brand-panel::after {
            content: '';
            position: absolute;
            z-index: -1;
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 50%;
        }

        .brand-panel::before {
            width: 440px;
            height: 440px;
            right: -160px;
            top: -130px;
        }

        .brand-panel::after {
            width: 560px;
            height: 560px;
            right: -210px;
            top: -185px;
        }

        .brand-top {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-logo {
            width: 66px;
            height: 66px;
            padding: 7px;
            object-fit: contain;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 8px 25px rgba(80, 30, 0, .12);
        }

        .brand-small {
            margin: 0 0 3px;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            opacity: .85;
        }

        .brand-name {
            margin: 0;
            font-size: clamp(1rem, 1.7vw, 1.35rem);
            line-height: 1.35;
            font-weight: 700;
        }

        .brand-copy {
            max-width: 590px;
            padding: 56px 0;
        }

        .brand-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 999px;
            background: rgba(255, 255, 255, .12);
            font-size: .78rem;
            font-weight: 600;
        }

        .brand-copy h1 {
            margin: 24px 0 18px;
            font-size: clamp(2.2rem, 4.7vw, 4.5rem);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -.045em;
        }

        .brand-copy h1 span {
            color: #fff1e8;
        }

        .brand-copy p {
            max-width: 440px;
            margin: 0;
            color: rgba(255, 255, 255, .88);
            font-size: 1rem;
            line-height: 1.85;
        }

        .brand-footer {
            display: flex;
            align-items: center;
            gap: 9px;
            color: rgba(255, 255, 255, .83);
            font-size: .78rem;
        }

        .brand-footer i {
            font-size: 1rem;
        }

        .form-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(24px, 5vw, 72px);
        }

        .login-content {
            width: 100%;
            max-width: 440px;
        }

        .mobile-brand {
            display: none;
        }

        .section-label {
            margin-bottom: 10px;
            color: var(--coea-orange);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .welcome-title {
            margin: 0 0 10px;
            font-size: clamp(1.9rem, 3vw, 2.5rem);
            font-weight: 800;
            letter-spacing: -.04em;
        }

        .welcome-subtitle {
            margin: 0 0 30px;
            color: var(--coea-muted);
            font-size: .92rem;
            line-height: 1.7;
        }

        .login-card {
            padding: clamp(22px, 3vw, 34px);
            border: 1px solid var(--coea-border);
            border-radius: 24px;
            background: rgba(255, 255, 255, .94);
            box-shadow: var(--coea-shadow);
        }

        .login-card-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 25px;
        }

        .login-icon {
            display: grid;
            width: 46px;
            height: 46px;
            flex: 0 0 46px;
            place-items: center;
            border-radius: 14px;
            color: var(--coea-orange);
            background: #fff0e7;
            font-size: 1.25rem;
        }

        .login-card-heading h2 {
            margin: 0 0 3px;
            font-size: 1rem;
            font-weight: 700;
        }

        .login-card-heading p {
            margin: 0;
            color: var(--coea-muted);
            font-size: .78rem;
        }

        .form-label {
            margin-bottom: 8px;
            font-size: .82rem;
            font-weight: 700;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap>i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a3a3a3;
            pointer-events: none;
        }

        .form-control {
            min-height: 53px;
            padding: 13px 15px 13px 44px;
            border: 1px solid #e9e3df;
            border-radius: 13px;
            background: #fff;
            font-size: .88rem;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: var(--coea-orange-light);
            box-shadow: 0 0 0 4px rgba(255, 76, 1, .10);
        }

        .password-toggle {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            padding: 7px 9px;
            border: 0;
            border-radius: 8px;
            color: #777;
            background: transparent;
        }

        .password-toggle:hover {
            color: var(--coea-orange);
            background: var(--coea-soft);
        }

        .password-input {
            padding-right: 48px;
        }

        .btn-login {
            display: flex;
            min-height: 53px;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            border: 0;
            border-radius: 13px;
            color: #fff;
            background: var(--coea-gradient);
            font-size: .9rem;
            font-weight: 700;
            box-shadow: 0 9px 20px rgba(255, 76, 1, .22);
            transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
        }

        .btn-login:hover {
            color: #fff;
            filter: saturate(1.08);
            transform: translateY(-2px);
            box-shadow: 0 13px 26px rgba(255, 76, 1, .28);
        }

        .security-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            margin: 19px 0 0;
            color: #858585;
            font-size: .73rem;
            text-align: center;
        }

        .security-note i {
            color: #5a9c67;
        }

        .alert {
            border: 0;
            border-radius: 12px;
            font-size: .82rem;
        }

        .login-bottom {
            margin-top: 24px;
            color: #898989;
            font-size: .73rem;
            line-height: 1.7;
            text-align: center;
        }

        @media (max-width: 900px) {
            .login-shell {
                grid-template-columns: 1fr;
            }

            .brand-panel {
                display: none;
            }

            .form-panel {
                min-height: 100vh;
                padding: 30px 20px;
            }

            .login-content {
                max-width: 460px;
            }

            .mobile-brand {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 36px;
            }

            .mobile-brand .brand-logo {
                width: 56px;
                height: 56px;
                border: 1px solid var(--coea-border);
                box-shadow: none;
            }

            .mobile-brand .brand-small {
                color: var(--coea-orange);
            }

            .mobile-brand .brand-name {
                color: var(--coea-ink);
                font-size: .95rem;
            }
        }

        @media (max-width: 420px) {
            .form-panel {
                padding: 24px 15px;
            }

            .login-card {
                padding: 22px 18px;
                border-radius: 20px;
            }

            .welcome-subtitle {
                margin-bottom: 23px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <main class="login-shell">
        <section class="brand-panel" aria-label="College information">
            <div class="brand-top">
                <img src="../assets/coea_logo.png" alt="COEA logo" class="brand-logo">
                <div>
                    <p class="brand-small">COEA Accreditation Portal</p>
                    <p class="brand-name">College of Engineering<br>and Architecture</p>
                </div>
            </div>
            <div class="brand-copy">
                <div class="brand-eyebrow"><i class="bi bi-mortarboard-fill"></i> Learn · Build · Innovate</div>
                <h1>Your work.<br>Your campus.<br><span>One portal.</span></h1>
                <p>Access the College of Engineering and Architecture accreditation portal to continue your work and manage your department resources.</p>
            </div>
            <div class="brand-footer"><i class="bi bi-shield-check"></i> A dedicated accreditation portal for COEA staff and administrators </div>
        </section>

        <section class="form-panel" aria-label="Login form">
            <div class="login-content">
                <div class="mobile-brand">
                    <img src="../assets/coea_logo.png" alt="COEA logo" class="brand-logo">
                    <div>
                        <p class="brand-small">COEA Accreditation Portal</p>
                        <p class="brand-name">College of Engineering<br>and Architecture</p>
                    </div>
                </div>
                <div class="section-label">Member access</div>
                <h1 class="welcome-title">Welcome back!</h1>
                <p class="welcome-subtitle">Sign in with your account details to continue to your dashboard.</p>

                <div class="login-card">
                    <div class="login-card-heading">
                        <div class="login-icon"><i class="bi bi-person-lock"></i></div>
                        <div>
                            <h2>Sign in to your account</h2>
                            <p>Enter your registered login credentials</p>
                        </div>
                    </div>

                    <?php if ($login_error !== ''): ?>
                        <div class="alert alert-danger d-flex align-items-start gap-2" role="alert">
                            <i class="bi bi-exclamation-circle-fill mt-1"></i>
                            <span><?= e($login_error) ?></span>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= e($_SERVER['PHP_SELF'] ?? '') ?>" autocomplete="on">
                        <div class="mb-3">
                            <label class="form-label" for="username">Username</label>
                            <div class="input-wrap">
                                <i class="bi bi-person"></i>
                                <input class="form-control" id="username" type="text" name="username" placeholder="Enter your username" value="<?= e($username_value) ?>" autocomplete="username" required autofocus>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-wrap">
                                <i class="bi bi-lock"></i>
                                <input class="form-control password-input" id="password" type="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                                <button class="password-toggle" type="button" id="togglePassword" aria-label="Show password" title="Show password"><i class="bi bi-eye" id="togglePasswordIcon"></i></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login">Log in <i class="bi bi-arrow-right"></i></button>
                    </form>
                    <p class="security-note"><i class="bi bi-shield-lock-fill"></i> Your sign-in details are protected</p>
                </div>
                <p class="login-bottom">College of Engineering and Architecture<br>Authorized access only</p>
            </div>
        </section>
    </main>
    <script>
        const passwordField = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const togglePasswordIcon = document.getElementById('togglePasswordIcon');
        togglePassword.addEventListener('click', function() {
            const show = passwordField.type === 'password';
            passwordField.type = show ? 'text' : 'password';
            togglePasswordIcon.className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
            togglePassword.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
            togglePassword.title = show ? 'Hide password' : 'Show password';
        });
    </script>
</body>

</html>