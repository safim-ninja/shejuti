<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('ecology.png') }}" type="image/x-icon">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #F4F7F6;
        }

        /* SIDEBAR */

        .sidebar {
            height: 100vh;
            background: #1B4332;
            color: white;
            position: fixed;
            width: 240px;
            padding-top: 30px;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .sidebar a {
            display: block;
            padding: 12px 25px;
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .sidebar a:hover {
            background: #2D6A4F;
        }

        /* CONTENT AREA */

        .main {
            margin-left: 240px;
        }

        /* TOPBAR */

        .topbar {
            background: white;
            padding: 15px 30px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* DASHBOARD CARDS */

        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .stat-title {
            font-size: 14px;
            color: #777;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #1B4332;
        }

        /* CONTENT WRAPPER */

        .content {
            padding: 30px;
        }

        .card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }
    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <h4>Portfolio Admin</h4>

        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/profile">Profile</a>
        <a href="/admin/experience">Experience</a>
        <a href="/admin/projects">Projects</a>
        <a href="/admin/expertise">Expertise</a>
        <a href="/admin/education">Education</a>
        <a href="/admin/awards">Awards</a>
        <a href="/admin/contact">Contact</a>
        <a href="/admin/settings">Settings</a>

        <hr>

        <a href="/">View Portfolio</a>

    </div>

    <!-- MAIN AREA -->

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h5 class="mb-0">Dashboard</h5>

            <div>

                <span class="me-3">Admin</span>

                <a href="/logout" class="btn btn-sm btn-outline-danger">
                    Logout
                </a>

            </div>

        </div>

        <!-- PAGE CONTENT -->

        <div class="content">

            <!-- DASHBOARD CARDS -->

            <div class="row mb-4">

                <div class="col-md-3">

                    <div class="stat-card">

                        <div class="stat-title">Experiences</div>

                        <div class="stat-number">
                            {{ $experienceCount ?? 5 }}
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stat-card">

                        <div class="stat-title">Projects</div>

                        <div class="stat-number">
                            {{ $projectCount ?? 3 }}
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stat-card">

                        <div class="stat-title">Expertise</div>

                        <div class="stat-number">
                            {{ $expertiseCount ?? 4 }}
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stat-card">

                        <div class="stat-title">Awards</div>

                        <div class="stat-number">
                            {{ $awardCount ?? 5 }}
                        </div>

                    </div>

                </div>

            </div>

            <!-- EXAMPLE TABLE -->

            <div class="card">

                <div class="card-header bg-white">

                    <h6 class="mb-0">Recent Experience</h6>

                </div>

                <div class="card-body p-0">

                    <table class="table mb-0">

                        <thead class="table-light">

                            <tr>

                                <th>Position</th>
                                <th>Organization</th>
                                <th>Duration</th>
                                <th width="150">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Program Officer</td>

                                <td>Oxfam Bangladesh</td>

                                <td>2024 - Present</td>

                                <td>

                                    <button class="btn btn-sm btn-warning">Edit</button>

                                    <button class="btn btn-sm btn-danger">Delete</button>

                                </td>

                            </tr>

                            <tr>

                                <td>Adjunct Faculty</td>

                                <td>University of South Asia</td>

                                <td>2022 - Present</td>

                                <td>

                                    <button class="btn btn-sm btn-warning">Edit</button>

                                    <button class="btn btn-sm btn-danger">Delete</button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- CHILD PAGE CONTENT -->

            @yield('content')

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
